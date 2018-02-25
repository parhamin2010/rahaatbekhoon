function bannerImpressionTracker() {
    window.impressionArray = [];
    var n = !1;
    $("[data-ads-placement-type]").isInViewport(function () {
    });
    $(window).on("resize scroll", function () {
        n || (n = !0, setTimeout(function () {
            var i = $("[data-ads-placement-type]").filter(function (n, t) {
                return $(t).prop("entered") && !$(t).prop("seen")
            }), r = function (n) {
                var t = {};
                return n.replace(new RegExp("([^?=&]+)(=([^&]*))?", "g"), function (n, i, r, u) {
                    t[i] = u
                }), t
            }, t = [];
            i.toArray().forEach(function (n) {
                var i = $(n), e = i.data(), u = {adsPlacementId: null, adsPlacementType: null, cmp: null}, f;
                u.adsPlacementId = e.adsPlacementId;
                u.adsPlacementType = e.adsPlacementType;
                f = r(i.attr("href"));
                f.cmp && (u.cmp = f.cmp);
                i.prop("seen") || t.push(u);
                i.prop("seen", !0)
            });
            t = t.filter(function (n) {
                return window.impressionArray.indexOf(n) == -1
            });
            window.impressionArray = t;
            impressionArray.length && window.snowplow("trackUnstructEvent", {
                schema: "iglu:com.digikala.research/digikalaBannerImpression/jsonschema/1-0-0",
                data: {arrayOfImpressedBanners: t}
            });
            n = !1
        }, 300))
    }).scroll()
}
function bannerClickTracker() {
    $(document).on("click", "[data-ads-placement-type]", function () {
        var i = $(this), r = i.data(), n = {adsPlacementId: null, adsPlacementType: null, cmp: null}, u, t;
        n.adsPlacementId = r.adsPlacementId;
        n.adsPlacementType = r.adsPlacementType;
        u = function (n) {
            var t = {};
            return n.replace(new RegExp("([^?=&]+)(=([^&]*))?", "g"), function (n, i, r, u) {
                t[i] = u
            }), t
        };
        t = u(i.attr("href"));
        t.cmp && (n.cmp = t.cmp);
        window.snowplow("trackUnstructEvent", {
            schema: "iglu:com.digikala.research/digikalaBannerClick/jsonschema/1-0-0",
            data: {clickedBanner: n}
        })
    })
}
function getElasticContent() {
    withoutCache()
}
function withCache() {
    $.ajax({
        type: "GET",
        url: SearchServiceUrl + "api2/Data/Get?categoryId=" + catId + "&ip=" + ip + "&forPromotionCenter=true",
        dataType: "json",
        success: function (n) {
            n.responses.length && (n.responses[0].hits.hits.length ? showIncredible(n.responses[0].hits.hits) : $("#amazingoffer").hide(), showDigiMag(n.responses[2].hits.hits))
        },
        error: function (n, t, i) {
            window.status = "Error [ " + i + " ]"
        }
    })
}
function withoutCache() {
    $.ajax({
        type: "GET",
        url: SearchServiceUrl + "api2/Data/GetWithoutCache?categoryId=" + catId + "&ip=" + ip + "&cityId=" + cityId,
        dataType: "json",
        success: function (n) {
            var t, i, r;
            n.responses.length && (n.responses[0].hits.hits != null ? n.responses[0].hits.hits.length ? (t = iDKHoDt.getWeightedRandomItem(n.responses[0].hits.hits, 5), showSlider(iDKHoDt.shuffleArray(t))) : $("#slider").hide() : $("#slider").hide(), n.responses[1].hits.hits != null && n.responses[2].hits.hits != null ? n.responses[1].hits.hits.length && n.responses[2].hits.hits.length ? (i = iDKHoDt.getWeightedRandomItem(n.responses[1].hits.hits, 5), r = iDKHoDt.getWeightedRandomItem(n.responses[2].hits.hits, 2), showshortcut(iDKHoDt.shuffleArray(i), iDKHoDt.shuffleArray(r))) : $("#dk-shortcuts-category>ul").hide() : $("#dk-shortcuts-category>ul").hide(), $("[data-ads-placement-type]").filter(function (n, t) {
                return !$(t).data().hasOwnProperty("isInViewport")
            }).isInViewport(function () {
            }))
        },
        error: function (n, t, i) {
            window.status = "Error [ " + i + " ]"
        }
    })
}
function showDigiMagHidden(n) {
    n.length ? (markup = "<li class='clearfix'><a href='${_source.Link.replace('http://', '//').replace('https://', '//')}' title='${_source.Title}' target='_blank'><div class='item-thumb'>{{if _source.ImagePath}}<img src='${_source.ImagePath.replace('http://', '//').replace('https://', '//')}' alt=''/>{{/if}}<\/div><div class='item-info'><b class='title'>${_source.Title}<\/b><span>${formatDate(_source.PublishDateTime)}<\/span><\/div><\/a><\/li>", $.template("digiMagTemplate", markup), $("#newsItems").html($.tmpl("digiMagTemplate", n)), $(".item-info .title").ellipsis(), $("#newsItems").removeClass("waiting")) : $("#dk-lastnews-container").hide()
}
function showTv(n) {
    if (n.length) $("#dk-tv-box").append("<a href='//tv.digikala.com'><i class='icon icon-dk-tv'><\/i><\/a>"), markup = "<li class='mrg-bottom dk-box'><a href='${getVideoLinkUrl(_source.ContentCategoryUrlCode, _source.CategoryUrlCode, _source.URLCode, '')}' title='${_source.FaTitle}'><img src='" + TvFileServerUrl + "${preparePhotoPath(_source.PreviewImagePath)}' alt='${_source.FaTitle}'><span class='video-duration'>${convertToMinute(_source.Duration)}<\/span><span class='video-play-btn'><i class='icon icon-video-play'><\/i><\/span><\/a><\/li>", $.template("videoTemplate", markup), $("#dk-newvideo-container>ul").html($.tmpl("videoTemplate", n)), $("#dk-newvideo-container").closest(".waiting").removeClass("waiting"); else $("#dk-tv-box").hide(), $("#dk-newvideo-container").hide()
}
function showIncredible(n) {
    var i, t, r;
    n.length && (i = "{{if _source.ShowTitle}}{{if _source.OnlyForMembers && !isLogined}}<div class='slideItem secret-deal-item' style='display: none;' dir='rtl'><span class='secret-deal-wrapper'><span class='secret-deal-thumb'><img src='" + TemplateServerUrl + "Image/Public/vtwo/secret-deal-users.png'><\/span><span class='secret-deal-info'><span class='secret-deal-title'><img src='" + TemplateServerUrl + "Image/Public/vtwo/secret-deal-Typography.png'><\/span><span class='secret-deal-links'><span> در کمتر از ۱ دقیقه <\/span><a href='/page/Load/registration/' style='cursor:pointer' class='blue-selected'>ثبت نام کنید<\/a> و یا <a href='javascript:void(0);' onclick='$(\"#login\").click()' style='cursor:pointer' class='gray'>وارد شوید  <\/a><\/span><span>و این پیشنهاد را ببینید.<\/span><span class='dk-ncredible-btns'><a class='dk-regist' href='/page/Load/registration'>ثبت نام<\/a><a class='dk-login' href='javascript:void(0);' onclick='$(\"#login\").click()'>ورود<\/a><\/span><\/span><\/span><\/div>{{else}}<a class='slideItem' data-ads-placement-type='Slider_ad' data-ads-placement-id='' title='${_source.FaTitle}' href='/Product/DKP-${_source.ProductId}/{{if _source.ShowType == 1}}${fixTextForUrl(_source.EnTitle)}{{else}}${fixTextForUrl(_source.FaTitle)}{{/if}}' style='display: none; {{if hasBackgroundPath(_source.BackgroundPath)}} background: url(" + FileServerUrl + "${_source.BackgroundPath}) center center ; {{/if}}'><span class='right slideItem-info {{if _source.ExistStatus == 3}} blur{{/if}}'><span class='info-price clearfix rtl'><span class='price-label'> پیشنهاد شگفت انگیز امروز <\/span><span class='price-old  ${_source.Price == 0 ? 'invisible' : ''}'>${setincrediblePriceShow(_source.Price)}<\/span><span class='price-final  ${_source.Price == 0 ? 'invisible' : ''}'><span class='right'>{{if _source.Price>0}}${setincrediblePriceShow(_source.Price-_source.Discount)}{{else}}${setincrediblePriceShow(_source.Price)}{{/if}}<\/span><span class='currency left'>{{if _source.Price>0}}${setincrediblePriceTitle(_source.Price-_source.Discount)}{{else}}${setincrediblePriceTitle(_source.Price)}{{/if}}<\/span><\/span><\/span><span class='info-attributes'>{{each(i, attr) setAttributeHtml(_source.KeyFeatures)}}<span>${attr}<\/span>{{/each}}<\/span><span class='info-timerLabel'>فرصت باقی مانده تا این پیشنهاد<\/span><\/span><span class='left slideItem-thumb {{if _source.ExistStatus == 3}} blur{{/if}}'><span class='thumb-table'><span class='thumb-cell'><span class='title'>${_source.ShowTitle}<\/span><span class='clearfix thumb-wrapper'><img src='" + FileServerUrl + "${setIncredibleImage(_source.ProductImagePath,220)}'>{{if _source.HasGift}}<i class='icon icon-plus'><\/i><i class='icon icon-shipping-gift'><\/i>{{/if}}<\/span><\/span><\/span><\/span>{{if _source.ExistStatus == 3}}<img alt='تمام شد!' src='" + TemplateServerUrl + "Image/Icon/vtwo/Finished_Badge.png' class='finished-badge' width='98' height='47' />{{/if}}{{if _source.ExistStatus != 3}}<div data-seconds-left='${calcSecondsLeft(_source.EndDateTime)}' class='timer'><\/div>{{/if}}<\/a><\/div>{{/if}}{{else}}<a class='slideItem' title='${_source.FaTitle}' href='/Product/DKP-${_source.ProductId}/{{if _source.ShowType == 1}}${fixTextForUrl(_source.EnTitle)}{{else}}${fixTextForUrl(_source.FaTitle)}{{/if}}' style='display: none;'><img alt='${_source.FaTitle} - ${_source.EnTitle}' src='" + FileServerUrl + "${_source.ImagePath}' class='incredible{{if _source.ExistStatus == 3}} blur{{/if}}' width='110' height='110' />{{if _source.ExistStatus == 3}}<img alt='تمام شد!' src='" + TemplateServerUrl + "Image/Icon/vtwo/Finished_Badge.png' class='finished-badge' width='98' height='47' />{{/if}}{{if _source.ExistStatus != 3}}<div data-seconds-left='${calcSecondsLeft(_source.EndDateTime)}' class='timer'><\/div>{{/if}}<\/a><\/div>{{/if}}", $.template("incredibleTemplate_items", i), t = $.tmpl("incredibleTemplate_items", n), t = $.each(t, function (n, t) {
        $(t).attr("data-ads-placement-id", n + 1050)
    }), $("#amazingoffer .slides").html(t), r = "{{if _source.OnlyForMembers}}<li class='item  {{if isLogined}} member-logined {{else}} member-only {{/if}}'><a onmousedown='return false' title='خرید اینترنتی' class='tabItem' href='javascript:void(0)'><span class='title'>{{if isLogined}} ${_source.Title} {{else}}پیشنهاد شگفت انگیز ویژه{{/if}}<\/span><span class='arr'><\/span><\/a><\/li>{{else}}<li class='item'><a onmousedown='return false' title='خرید اینترنتی ${_source.Title}' class='tabItem' href='javascript:void(0)'><span class='title'>${_source.Title}<\/span><span class='arr'><\/span><\/a><\/li>{{/if}}", $.template("incredibleTemplate_footer", r), $("#amazingoffer .tabs").html($.tmpl("incredibleTemplate_footer", n)), $("#amazingoffer").removeClass("waiting"), $("#amazingoffer .slides a").each(function () {
        var n = $(this).children(".timer");
        n.startTimer({
            enableDate: n.data("seconds-left") > 86400 ? !0 : !1, onComplete: function (n) {
                n.addClass("countdown-is-complete");
                window.location.reload()
            }, refreshRate: 1e3
        })
    }), $("#amazingoffer").dkSlider({autoplay: !0, interval: 5e3, carouselMode: "partial", carouselAmount: 200}))
}
function calcSecondsLeft(n) {
    var i = new Date(new Date(n + "Z").valueOf() + new Date(n + "Z").getTimezoneOffset() * 6e4), t = new Date(currentDate);
    if (i.getTime() - t.getTime() < 0) {
        var r = t.getHours(), u = t.getMinutes(), f = t.getSeconds();
        return 86400 - r * 3600 - u * 60 - f
    }
    return Math.abs((i.getTime() - t.getTime()) / 1e3)
}
function showSlider(n) {
    var r, t, i;
    if (n.length) {
        var u = setSliderImagePath(n), e = "home", f = window.location.pathname;
        f.length > 1 && (e = f.indexOf("Main") === 1 ? "main" : "");
        r = "";
        t = "";
        r += "<a class='clickCount' data-ads-placement-type='Header_ad' data-ads-placement-id elementType='${_source.BannerType}' categoryTitle='${_source.Description}' title='${_source.Title}' bannerId='${_source.Id}' href='${_source.Link}' ><img src='" + FileServerUrl + "${_source.BannerPath}' alt='${_source.Title}'  title='${_source.Title}' width='${_source.Width}' height='${_source.Height}' class='slideItem'/> <\/a>";
        $.template("sliderTemplate", r);
        i = $.tmpl("sliderTemplate", u);
        i = $.each(i, function (n, t) {
            $(t).attr("data-ads-placement-id", n + 1030)
        });
        $("#dk-slider-div").html(i);
        $("#dk-slider-div").append("<footer><ul class='tabs'><\/ul><\/footer><a href='#' class='backward hidden'><\/a><a href='#' class='forward hidden'><\/a>");
        t += "<li class='sep'><span><\/span><\/li>";
        t += "<li class='tabItem'><a href='${_source.Link}' title='${_source.Title}'>${_source.Title}<\/a><\/li>";
        $.template("sliderFooter", t);
        $("#dk-slider-div>footer>ul").html($.tmpl("sliderFooter", u));
        $("#dk-slider-div>footer>ul li").first().remove();
        $("#slider").closest(".waiting").removeClass("waiting");
        $("#slider").dkSlider({autoplay: !0, event: "click"});
        $("#slider").mouseenter(function () {
            $("#slider .backward").show();
            $("#slider .forward").show()
        }).mouseleave(function () {
            $("#slider .backward").hide();
            $("#slider .forward").hide()
        })
    } else $("#slider").hide()
}
function showshortcutHidden(n, t) {
    var r, u, i;
    if (n.length == 5 && t.length == 2) {
        for (r = "", u = 0, i = 0; i < n.length; i++)r += i == 3 || i == 4 ? "<li class='lastbox'>" : "<li>", r += "<a data-ads-placement-type='Shortcut_small' data-ads-placement-id='" + (i + 1070) + "' title='" + n[i]._source.Title + "' href='" + n[i]._source.Link + "'>", r += "<img src='" + FileServerUrl + n[i]._source.BannerPath + "'><\/a><\/li>", (i == 0 || i == 3) && (r += u == 0 ? "<li class='largebox lastbox'>" : "<li class='largebox'>", r += "<a data-ads-placement-type='Shortcut_big' data-ads-placement-id='" + (u + 1060) + "' title='" + t[u]._source.Title + "' href='" + t[u]._source.Link + "'>", r += "<img src='" + FileServerUrl + t[u]._source.BannerPath + "'><\/a><\/li>", u++);
        $("#dk-shortcuts-category>ul").html(r)
    } else $("#dk-shortcuts-category>ul").hide()
}
function setSliderImagePath(n) {
    for (var t = 0; t < n.length; t++)n[t]._source.Width === "Original" ? n[t]._source.Width = "" : n[t]._source.BannerPath = n[t]._source.BannerPath.replace("Original", n[t]._source.Width);
    return n
}
function formatDate(n) {
    var t = n.replace(/ق.ظ/g, "").replace(/ب.ظ/g, ""), i = new Date(t);
    return i.toPersianString(2)
}
function hasBackgroundPath(n) {
    return n === "" ? !1 : !0
}
function setincrediblePriceShow(n) {
    if (n < 10)return "0";
    for (var t = n / 10; t >= 1e3;)t = t / 1e3;
    return t = t.toString().substring(0, 5), t.length == 4 && t.indexOf(".") === 1 ? t += "0" : t.indexOf(".") === 3 && t.substring(4, 5) === "0" && (t = t.substr(0, 3)), t
}
function setincrediblePriceTitle(n) {
    if (n < 10)return "تومان";
    for (var r = ["تومان", "هزار تومان", "میلیون تومان", "میلیارد تومان"], t = 0, u = r[t], i = n / 10; i >= 1e3;)t++, i = i / 1e3;
    return r[t]
}
function setAttributeHtml(n) {
    var i = [], r, t;
    if (n != null || n != undefined)for (r = n.split("\r\n"), t = 0; t < 4; t++)i[t] = r[t];
    return i
}
function getVideoLinkUrl(n, t, i, r) {
    return "{0}Video/{1}/{2}/{3}{4}".format(TvFileServerUrl, n, t, i, r != "" ? "/" + r : "")
}
function preparePhotoPath(n) {
    return n.replace("/Small/", "/")
}
function setIncredibleImage(n, t) {
    var i = "";
    return n && (i = n.toLowerCase().replace("/original/", "/" + t + "/")), i
}
function amazingTimer(n) {
    var t = new Date(new Date(n + "Z").valueOf() + new Date(n + "Z").getTimezoneOffset() * 6e4), i = new Date(currentDate);
    return d = Number(Math.abs((t.getTime() - i.getTime()) / 1e3)), d.toString().toHHMMSS()
}
function convertToTime(n) {
    var e = new Date(n), o = e.getTime() + e.getTimezoneOffset() * 6e4, s = e.getMonth() - 1 > 6 ? 3.5 : 4.5, i, r, u, f;
    nd = new Date(o + 36e5 * s);
    var h = new Date(currentDate), c = nd, t = c - h;
    return t = t / 1e3, i = Math.floor(t % 60), t = t / 60, r = Math.floor(t % 60), t = t / 60, u = Math.floor(t % 24), f = Math.floor(t / 24), f ? "{0}:{1}:{2}:{3}".format(f > 9 ? f.toString() : "0" + f.toString(), u > 9 ? u.toString() : "0" + u.toString(), r > 9 ? r.toString() : "0" + r.toString(), i > 9 ? i.toString() : "0" + i.toString()) : "{0}:{1}:{2}".format(u > 9 ? u.toString() : "0" + u.toString(), r > 9 ? r.toString() : "0" + r.toString(), i > 9 ? i.toString() : "0" + i.toString())
}
!function (n) {
    "use strict";
    var t = function (t, i) {
        return this.$el = n(t), this.cb = i, this.watch(), this
    };
    t.prototype = {
        isIn: function () {
            var t = this, i = n(window), r = t.$el.offset().top, f = r + t.$el.outerHeight(), u = i.scrollTop(), e = u + i.height();
            return f > u && r < e
        }, watch: function () {
            var t = this, i = !1;
            n(window).on("resize scroll", function () {
                t.isIn() && i === !1 && (t.$el.prop("entered", !0), t.cb.call(t.$el, "entered"), i = !0);
                i !== !0 || t.isIn() || (t.$el.prop("entered", !1), t.cb.call(t.$el, "leaved"), i = !1)
            }).scroll()
        }
    };
    n.fn.isInViewport = function (i) {
        return this.each(function () {
            var r = n(this), u = r.data("isInViewport");
            u || r.data("isInViewport", new t(this, i))
        })
    }
}(window.jQuery);
$(document).ready(function () {
    var f, e, u, o, n, s, t, h, i, c, r, l;
    page = "Home";
    iDKHoDt = new HomeDetail({});
    getElasticContent();
    bannerClickTracker();
    bannerImpressionTracker();
    $("#slider").dkSlider({autoplay: !0, event: "click"});
    $("#slider").mouseenter(function () {
        $("#slider .backward").show();
        $("#slider .forward").show()
    }).mouseleave(function () {
        $("#slider .backward").hide();
        $("#slider .forward").hide()
    });
    f = navigator.userAgent;
    e = f.indexOf("Android ") != -1;
    e && !$.cookie("dk-app") && ($("body form").prepend("<div class='bannerContainer'><img src='http://s.cafebazaar.ir/1/upload/icons/com.digikala.png' class='app-img'><span class='dismiss'><img src='" + TemplateServerUrl + "Image/Icon/vtwo/dismiss.png'><\/span><p class='app-text rtl'>برای استفاده کاربردی تر از سایت، اپلیکیشن دیجی کالا را دانلود نمایید.<\/p><div class='app-btn'><a rel='nofollow'  href='https://cafebazaar.ir/app/com.digikala/?l=fa'><img class='downloadLink-google' src='" + TemplateServerUrl + "Image/Icon/vtwo/dl-cafebazaar.png' /><\/a><\/div><\/div>"), $(".dismiss").click(function () {
        $(".bannerContainer").remove();
        document.cookie = "dk-app = true"
    }));
    u = $(".exclusivebox");
    u.length && (o = new CarouselList({
        element: u.find(".items "),
        query: "api2/Data/GetExclusiveList?collectionId=6",
        size: 15,
        pageNumberQuery: "&pageIndex=",
        isExclusive: !0
    }).init());
    n = $('.horizontalbox[data-sort=""]');
    n.length && (s = new CarouselList({
        element: n.find(".items "),
        query: "api2/Data/GetTopMostViewedList?&notCategory=C6960",
        size: 15,
        pageNumberQuery: "&pageno=",
        isExclusive: !1,
        category: n.data("category")
    }).init());
    t = $(".horizontalbox[data-sort=LastPeriodSaleCounter]");
    t.length && (h = new CarouselList({
        element: t.find(".items "),
        query: "api2/Data/GetTopSellList?&notCategory=C6960",
        size: 15,
        pageNumberQuery: "&pageno=",
        isExclusive: !1,
        category: t.data("category")
    }).init());
    i = $(".horizontalbox[data-sort=Id]");
    i.length && (c = new CarouselList({
        element: i.find(".items "),
        query: "api/SearchApi/?sortby=1&status=2",
        size: 15,
        pageNumberQuery: "&pageno=",
        isExclusive: !1,
        service: SearchServiceUrl,
        category: i.data("category")
    }).init());
    r = $(".horizontalbox[data-sort=LastPeriodLikeCounter]");
    r.length && (l = new CarouselList({
        element: r.find(".items "),
        query: "api2/Data/GetTopFavoriteList?&notCategory=C6960",
        size: 15,
        pageNumberQuery: "&pageno=",
        isExclusive: !1,
        category: r.data("category")
    }).init())
});
HomeDetail = function () {
    this.Initialize()
};
HomeDetail.prototype = {
    _objectList: [], _totalWeight: 0, _itemIndex: 0, Initialize: function () {
        this.InitiateShowMoreArea()
    }, InitiateShowMoreArea: function () {
        function i(n, t, r, u) {
            (clearInterval(u), t >= n.length) || (u = setInterval(function () {
                $(n[t]).slideToggle();
                t++;
                i(n, t, r, u)
            }, r))
        }

        var t = $("ul#newcategory-list"), f = t.children("li"), n, r, u;
        t.children("li:lt(2)").show();
        t.children("li:gt(2)").hide().addClass("expandable");
        n = !1;
        r = $("footer#newcategory-footer");
        u = r.find("a.newCategory-handler");
        u.on("click", function () {
            i($("li.expandable"), 0, 45);
            n ? ($(this).html("<i class='icon icon-blue-plus'><\/i> مشاهده سایر دسته ها"), n = !1) : ($(this).html("<i class='icon icon-blue-minus'><\/i> بستن"), n = !0)
        });
        $("#dk-newcategory-container .item-info span").ellipsis()
    }, weightedRandomList: function (n) {
        for (var t = 0; t < n.length; t++)n[t].sumWeight = t === 0 ? n[t]._source.DisplayWeight : n[t - 1].sumWeight + n[t]._source.DisplayWeight, this._totalWeight = n[t].sumWeight, this._objectList.push(n[t])
    }, getWeightedRandomItem: function (n, t) {
        var i, u, f;
        this._itemIndex = 0;
        this._objectList = [];
        var e = [], r = [], o = [], s = 0;
        for (i = 0; i < n.length; i++)n[i]._source.DisplayWeight === 100 ? (r.push(n[i]), s++) : o.push(n[i]);
        if (r.length >= t) {
            while (r.length != t)r.pop();
            return r
        }
        if (t = t - s, this.weightedRandomList(o), this._objectList.length <= t) {
            for (i = 0; i < this._objectList.length; i++)r.push(this._objectList[i]);
            return r
        }
        for (i = 0; i < t; i++)e.push(Math.floor(Math.random() * this._totalWeight) + 1);
        for (e.sort(function (n, t) {
            return n - t
        }), i = 0; i < t; i++) {
            if (u = this.getItemByWeight(e[i]), u !== null)for (f = 0; f < r.length; f++)if (r[f]._source.BannerId === u._source.BannerId) {
                u = null;
                break
            }
            while (u === null)if (this._itemIndex = 0, u = this.getItemByWeight(Math.floor(Math.random() * this._totalWeight) + 1), u !== null)for (f = 0; f < r.length; f++)if (r[f]._source.BannerId === u._source.BannerId) {
                u = null;
                break
            }
            r.push(u)
        }
        return r
    }, getItemByWeight: function (n) {
        for (var t = null; this._itemIndex < this._objectList.length;) {
            if (this._objectList[this._itemIndex].sumWeight >= n) {
                t = this._objectList[this._itemIndex];
                this._itemIndex++;
                break
            }
            this._itemIndex++
        }
        return t
    }, shuffleArray: function (n) {
        for (var i, r, t = n.length; t; t -= 1)i = Math.floor(Math.random() * t), r = n[t - 1], n[t - 1] = n[i], n[i] = r;
        return n
    }
};
!function (n) {
    "use strict";
    function o(n) {
        var i = n.length, r = t.type(n);
        return "function" !== r && !t.isWindow(n) && (!(1 !== n.nodeType || !i) || "array" === r || 0 === i || "number" == typeof i && i > 0 && i - 1 in n)
    }

    var t, i;
    if (!n.jQuery) {
        t = function (n, i) {
            return new t.fn.init(n, i)
        };
        t.isWindow = function (n) {
            return n && n === n.window
        };
        t.type = function (n) {
            return n ? "object" == typeof n || "function" == typeof n ? r[s.call(n)] || "object" : typeof n : n + ""
        };
        t.isArray = Array.isArray || function (n) {
                return "array" === t.type(n)
            };
        t.isPlainObject = function (n) {
            var i;
            if (!n || "object" !== t.type(n) || n.nodeType || t.isWindow(n))return !1;
            try {
                if (n.constructor && !f.call(n, "constructor") && !f.call(n.constructor.prototype, "isPrototypeOf"))return !1
            } catch (r) {
                return !1
            }
            for (i in n);
            return i === undefined || f.call(n, i)
        };
        t.each = function (n, t, i) {
            var r = 0, u = n.length, f = o(n);
            if (i) {
                if (f)for (; r < u && t.apply(n[r], i) !== !1; r++); else for (r in n)if (n.hasOwnProperty(r) && t.apply(n[r], i) === !1)break
            } else if (f)for (; r < u && t.call(n[r], r, n[r]) !== !1; r++); else for (r in n)if (n.hasOwnProperty(r) && t.call(n[r], r, n[r]) === !1)break;
            return n
        };
        t.data = function (n, r, u) {
            var o, f, e;
            if (u === undefined) {
                if (o = n[t.expando], f = o && i[o], r === undefined)return f;
                if (f && r in f)return f[r]
            } else if (r !== undefined)return e = n[t.expando] || (n[t.expando] = ++t.uuid), i[e] = i[e] || {}, i[e][r] = u, u
        };
        t.removeData = function (n, r) {
            var u = n[t.expando], f = u && i[u];
            f && (r ? t.each(r, function (n, t) {
                delete f[t]
            }) : delete i[u])
        };
        t.extend = function () {
            var r, o, i, f, e, s, n = arguments[0] || {}, u = 1, c = arguments.length, h = !1;
            for ("boolean" == typeof n && (h = n, n = arguments[u] || {}, u++), "object" != typeof n && "function" !== t.type(n) && (n = {}), u === c && (n = this, u--); u < c; u++)if (e = arguments[u])for (f in e)e.hasOwnProperty(f) && (r = n[f], i = e[f], n !== i && (h && i && (t.isPlainObject(i) || (o = t.isArray(i))) ? (o ? (o = !1, s = r && t.isArray(r) ? r : []) : s = r && t.isPlainObject(r) ? r : {}, n[f] = t.extend(h, s, i)) : i !== undefined && (n[f] = i)));
            return n
        };
        t.queue = function (n, i, r) {
            if (n) {
                i = (i || "fx") + "queue";
                var u = t.data(n, i);
                return r ? (!u || t.isArray(r) ? u = t.data(n, i, function (n, t) {
                    var i = t || [];
                    return n && (o(Object(n)) ? function (n, t) {
                        for (var r = +t.length, i = 0, u = n.length; i < r;)n[u++] = t[i++];
                        if (r !== r)for (; t[i] !== undefined;)n[u++] = t[i++];
                        n.length = u;
                        n
                    }(i, "string" == typeof n ? [n] : n) : [].push.call(i, n)), i
                }(r)) : u.push(r), u) : u || []
            }
        };
        t.dequeue = function (n, i) {
            t.each(n.nodeType ? [n] : n, function (n, r) {
                i = i || "fx";
                var f = t.queue(r, i), u = f.shift();
                "inprogress" === u && (u = f.shift());
                u && ("fx" === i && f.unshift("inprogress"), u.call(r, function () {
                    t.dequeue(r, i)
                }))
            })
        };
        t.fn = t.prototype = {
            init: function (n) {
                if (n.nodeType)return this[0] = n, this;
                throw new Error("Not a DOM node.");
            }, offset: function () {
                var t = this[0].getBoundingClientRect ? this[0].getBoundingClientRect() : {top: 0, left: 0};
                return {
                    top: t.top + (n.pageYOffset || document.scrollTop || 0) - (document.clientTop || 0),
                    left: t.left + (n.pageXOffset || document.scrollLeft || 0) - (document.clientLeft || 0)
                }
            }, position: function () {
                var u = this[0], n = function (n) {
                    for (var t = n.offsetParent; t && "html" !== t.nodeName.toLowerCase() && t.style && "static" === t.style.position;)t = t.offsetParent;
                    return t || document
                }(u), i = this.offset(), r = /^(?:body|html)$/i.test(n.nodeName) ? {top: 0, left: 0} : t(n).offset();
                return i.top -= parseFloat(u.style.marginTop) || 0, i.left -= parseFloat(u.style.marginLeft) || 0, n.style && (r.top += parseFloat(n.style.borderTopWidth) || 0, r.left += parseFloat(n.style.borderLeftWidth) || 0), {
                    top: i.top - r.top,
                    left: i.left - r.left
                }
            }
        };
        i = {};
        t.expando = "velocity" + (new Date).getTime();
        t.uuid = 0;
        for (var r = {}, f = r.hasOwnProperty, s = r.toString, e = "Boolean Number String Function Array Date RegExp Object Error".split(" "), u = 0; u < e.length; u++)r["[object " + e[u] + "]"] = e[u].toLowerCase();
        t.fn.init.prototype = t.fn;
        n.Velocity = {Utilities: t}
    }
}(window), function (n) {
    "use strict";
    "object" == typeof module && "object" == typeof module.exports ? module.exports = n() : "function" == typeof define && define.amd ? define(n) : n()
}(function () {
    "use strict";
    return function (n, t, i, r) {
        function ft(n) {
            for (var t, i = -1, u = n ? n.length : 0, r = []; ++i < u;)t = n[i], t && r.push(t);
            return r
        }

        function p(n) {
            return o.isWrapped(n) ? n = st.call(n) : o.isNode(n) && (n = [n]), n
        }

        function s(n) {
            var t = e.data(n, "velocity");
            return null === t ? r : t
        }

        function w(n, t) {
            var i = s(n);
            i && i.delayTimer && !i.delayPaused && (i.delayRemaining = i.delay - t + i.delayBegin, i.delayPaused = !0, clearTimeout(i.delayTimer.setTimeout))
        }

        function b(n) {
            var t = s(n);
            t && t.delayTimer && t.delayPaused && (t.delayPaused = !1, t.delayTimer.setTimeout = setTimeout(t.delayTimer.next, t.delayRemaining))
        }

        function et(n) {
            return function (t) {
                return Math.round(t * n) * (1 / n)
            }
        }

        function k(n, i, r, u) {
            function l(n, t) {
                return 1 - 3 * t + 3 * n
            }

            function a(n, t) {
                return 3 * t - 6 * n
            }

            function v(n) {
                return 3 * n
            }

            function s(n, t, i) {
                return ((l(t, i) * n + a(t, i)) * n + v(t)) * n
            }

            function y(n, t, i) {
                return 3 * l(t, i) * n * n + 2 * a(t, i) * n + v(t)
            }

            function b(t, i) {
                for (var f, u = 0; u < tt; ++u) {
                    if (f = y(i, n, r), 0 === f)return i;
                    i -= (s(i, n, r) - t) / f
                }
                return i
            }

            function k() {
                for (var t = 0; t < e; ++t)o[t] = s(t * h, n, r)
            }

            function d(t, i, u) {
                var e, f, o = 0;
                do f = i + (u - i) / 2, e = s(f, n, r) - t, e > 0 ? u = f : i = f; while (Math.abs(e) > rt && ++o < ut);
                return f
            }

            function g(t) {
                for (var u = 0, i = 1, c = e - 1; i !== c && o[i] <= t; ++i)u += h;
                --i;
                var l = (t - o[i]) / (o[i + 1] - o[i]), f = u + l * h, s = y(f, n, r);
                return s >= it ? b(t, f) : 0 === s ? f : d(t, u, u + h)
            }

            function nt() {
                p = !0;
                n === i && r === u || k()
            }

            var tt = 4, it = .001, rt = 1e-7, ut = 10, e = 11, h = 1 / (e - 1), ft = "Float32Array" in t, f, w;
            if (4 !== arguments.length)return !1;
            for (f = 0; f < 4; ++f)if ("number" != typeof arguments[f] || isNaN(arguments[f]) || !isFinite(arguments[f]))return !1;
            n = Math.min(n, 1);
            r = Math.min(r, 1);
            n = Math.max(n, 0);
            r = Math.max(r, 0);
            var o = ft ? new Float32Array(e) : new Array(e), p = !1, c = function (t) {
                return p || nt(), n === i && r === u ? t : 0 === t ? 0 : 1 === t ? 1 : s(g(t), i, u)
            };
            return c.getControlPoints = function () {
                return [{x: n, y: i}, {x: r, y: u}]
            }, w = "generateBezier(" + [n, i, r, u] + ")", c.toString = function () {
                return w
            }, c
        }

        function d(n, t) {
            var i = n;
            return o.isString(n) ? f.Easings[n] || (i = !1) : i = o.isArray(n) && 1 === n.length ? et.apply(null, n) : o.isArray(n) && 2 === n.length ? ut.apply(null, n.concat([t])) : !(!o.isArray(n) || 4 !== n.length) && k.apply(null, n), i === !1 && (i = f.Easings[f.defaults.easing] ? f.defaults.easing : rt), i
        }

        function a(n) {
            var d, it, y, nt, c, rt, pt, p, b, t, ht, wt, ct, tt, lt, ut;
            if (n)for (d = f.timestamp && n !== !0 ? n : ot.now(), it = f.State.calls.length, it > 1e4 && (f.State.calls = ft(f.State.calls), it = f.State.calls.length), y = 0; y < it; y++)if (f.State.calls[y]) {
                var v = f.State.calls[y], at = v[0], i = v[2], w = v[3], bt = !!w, vt = null, yt = v[5], et = v[6];
                if (w || (w = f.State.calls[y][3] = d - 16), yt) {
                    if (yt.resume !== !0)continue;
                    w = v[3] = Math.round(d - et - 16);
                    v[5] = null
                }
                et = v[6] = d - w;
                for (var k = Math.min(et / i.duration, 1), st = 0, kt = at.length; st < kt; st++)if (nt = at[st], c = nt.element, s(c)) {
                    rt = !1;
                    i.display !== r && null !== i.display && "none" !== i.display && ("flex" === i.display && (pt = ["-webkit-box", "-moz-box", "-ms-flexbox", "-webkit-flex"], e.each(pt, function (n, t) {
                        u.setPropertyValue(c, "display", t)
                    })), u.setPropertyValue(c, "display", i.display));
                    i.visibility !== r && "hidden" !== i.visibility && u.setPropertyValue(c, "visibility", i.visibility);
                    for (p in nt)if (nt.hasOwnProperty(p) && "element" !== p) {
                        if (t = nt[p], ht = o.isString(t.easing) ? f.Easings[t.easing] : t.easing, o.isString(t.pattern) ? (wt = 1 === k ? function (n, i, r) {
                                var u = t.endValue[i];
                                return r ? Math.round(u) : u
                            } : function (n, r, u) {
                                var f = t.startValue[r], e = t.endValue[r] - f, o = f + e * ht(k, i, e);
                                return u ? Math.round(o) : o
                            }, b = t.pattern.replace(/{(\d+)(!)?}/g, wt)) : 1 === k ? b = t.endValue : (ct = t.endValue - t.startValue, b = t.startValue + ct * ht(k, i, ct)), !bt && b === t.currentValue)continue;
                        (t.currentValue = b, "tween" === p) ? vt = b : (u.Hooks.registered[p] && (tt = u.Hooks.getRoot(p), lt = s(c).rootPropertyValueCache[tt], lt && (t.rootPropertyValue = lt)), ut = u.setPropertyValue(c, p, t.currentValue + (h < 9 && 0 === parseFloat(b) ? "" : t.unitType), t.rootPropertyValue, t.scrollData), u.Hooks.registered[p] && (s(c).rootPropertyValueCache[tt] = u.Normalizations.registered[tt] ? u.Normalizations.registered[tt]("extract", null, ut[1]) : ut[1]), "transform" === ut[0] && (rt = !0))
                    }
                    i.mobileHA && s(c).transformCache.translate3d === r && (s(c).transformCache.translate3d = "(0px, 0px, 0px)", rt = !0);
                    rt && u.flushTransformCache(c)
                }
                i.display !== r && "none" !== i.display && (f.State.calls[y][2].display = !1);
                i.visibility !== r && "hidden" !== i.visibility && (f.State.calls[y][2].visibility = !1);
                i.progress && i.progress.call(v[1], v[1], k, Math.max(0, w + i.duration - d), w, vt);
                1 === k && g(y)
            }
            f.State.isTicking && l(a)
        }

        function g(n, t) {
            var o, h, l, a, k;
            if (!f.State.calls[n])return !1;
            for (var y = f.State.calls[n][0], v = f.State.calls[n][1], i = f.State.calls[n][2], p = f.State.calls[n][4], w = !1, c = 0, b = y.length; c < b; c++) {
                if (o = y[c].element, t || i.loop || ("none" === i.display && u.setPropertyValue(o, "display", i.display), "hidden" === i.visibility && u.setPropertyValue(o, "visibility", i.visibility)), h = s(o), i.loop !== !0 && (e.queue(o)[1] === r || !/\.velocityQueueEntryFlag/i.test(e.queue(o)[1])) && h && (h.isAnimating = !1, h.rootPropertyValueCache = {}, l = !1, e.each(u.Lists.transforms3D, function (n, t) {
                        var i = /^scale/.test(t) ? 1 : 0, u = h.transformCache[t];
                        h.transformCache[t] !== r && new RegExp("^\\(" + i + "[^.]").test(u) && (l = !0, delete h.transformCache[t])
                    }), i.mobileHA && (l = !0, delete h.transformCache.translate3d), l && u.flushTransformCache(o), u.Values.removeClass(o, "velocity-animating")), !t && i.complete && !i.loop && c === b - 1)try {
                    i.complete.call(v, v)
                } catch (d) {
                    setTimeout(function () {
                        throw d;
                    }, 1)
                }
                p && i.loop !== !0 && p(v);
                //noinspection JSUnresolvedFunction
                h && i.loop === !0 && !t && (e.each(h.tweensContainer, function (n, t) {
                    if (/^rotate/.test(n) && (parseFloat(t.startValue) - parseFloat(t.endValue)) % 360 == 0) {
                        var i = t.startValue;
                        t.startValue = t.endValue;
                        t.endValue = i
                    }
                    test(n) && 100 === parseFloat(t.endValue) && "%" === t.unitType && (t.endValue = 0, t.startValue = 100)
                }), f(o, "reverse", {loop: !0, delay: i.delay}));
                i.queue !== !1 && e.dequeue(o, i.queue)
            }
            for (f.State.calls[n] = !1, a = 0, k = f.State.calls.length; a < k; a++)if (f.State.calls[a] !== !1) {
                w = !0;
                break
            }
            w === !1 && (f.State.isTicking = !1, delete f.State.calls, f.State.calls = [])
        }

        var e, h = function () {
            var n, t;
            if (i.documentMode)return i.documentMode;
            for (n = 7; n > 4; n--)if (t = i.createElement("div"), t.innerHTML = "<!--[if IE " + n + "]><span><\/span><![endif]-->", t.getElementsByTagName("span").length)return t = null, n;
            return r
        }(), nt = function () {
            var n = 0;
            return t.webkitRequestAnimationFrame || t.mozRequestAnimationFrame || function (t) {
                    var i, r = (new Date).getTime();
                    return i = Math.max(0, 16 - (r - n)), n = r + i, setTimeout(function () {
                        t(r + i)
                    }, i)
                }
        }(), ot = function () {
            var n = t.performance || {}, i;
            return "function" != typeof n.now && (i = n.timing && n.timing.navigationStart ? n.timing.navigationStart : (new Date).getTime(), n.now = function () {
                return (new Date).getTime() - i
            }), n
        }(), st = function () {
            var n = Array.prototype.slice;
            try {
                return n.call(i.documentElement), n
            } catch (t) {
                return function (t, i) {
                    var u = this.length;
                    if ("number" != typeof t && (t = 0), "number" != typeof i && (i = u), this.slice)return n.call(this, t, i);
                    var r, f = [], o = t >= 0 ? t : Math.max(0, u + t), s = i < 0 ? u + i : Math.min(i, u), e = s - o;
                    if (e > 0)if (f = new Array(e), this.charAt)for (r = 0; r < e; r++)f[r] = this.charAt(o + r); else for (r = 0; r < e; r++)f[r] = this[o + r];
                    return f
                }
            }
        }(), tt = function () {
            return Array.prototype.includes ? function (n, t) {
                return n.includes(t)
            } : Array.prototype.indexOf ? function (n, t) {
                return n.indexOf(t) >= 0
            } : function (n, t) {
                for (var i = 0; i < n.length; i++)if (n[i] === t)return !0;
                return !1
            }
        }, o = {
            isNumber: function (n) {
                return "number" == typeof n
            }, isString: function (n) {
                return "string" == typeof n
            }, isArray: Array.isArray || function (n) {
                return "[object Array]" === Object.prototype.toString.call(n)
            }, isFunction: function (n) {
                return "[object Function]" === Object.prototype.toString.call(n)
            }, isNode: function (n) {
                return n && n.nodeType
            }, isWrapped: function (n) {
                return n && n !== t && o.isNumber(n.length) && !o.isString(n) && !o.isFunction(n) && !o.isNode(n) && (0 === n.length || o.isNode(n[0]))
            }, isSVG: function (n) {
                return t.SVGElement && n instanceof t.SVGElement
            }, isEmptyObject: function (n) {
                for (var t in n)if (n.hasOwnProperty(t))return !1;
                return !0
            }
        }, it = !1, ut, u, c, l, y;
        if (n.fn && n.fn.jquery ? (e = n, it = !0) : e = t.Velocity.Utilities, h <= 8 && !it)throw new Error("Velocity: IE8 and below require jQuery to be loaded before Velocity.");
        if (h <= 7)return void(jQuery.fn.velocity = jQuery.fn.animate);
        var v = 400, rt = "swing", f = {
            State: {
                isMobile: /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent),
                isAndroid: /Android/i.test(navigator.userAgent),
                isGingerbread: /Android 2\.3\.[3-7]/i.test(navigator.userAgent),
                isChrome: t.chrome,
                isFirefox: /Firefox/i.test(navigator.userAgent),
                prefixElement: i.createElement("div"),
                prefixMatches: {},
                scrollAnchor: null,
                scrollPropertyLeft: null,
                scrollPropertyTop: null,
                isTicking: !1,
                calls: [],
                delayedElements: {count: 0}
            },
            CSS: {},
            Utilities: e,
            Redirects: {},
            Easings: {},
            Promise: t.Promise,
            defaults: {
                queue: "",
                duration: v,
                easing: rt,
                begin: r,
                complete: r,
                progress: r,
                display: r,
                visibility: r,
                loop: !1,
                delay: !1,
                mobileHA: !0,
                _cacheValues: !0,
                promiseRejectEmpty: !0
            },
            init: function (n) {
                e.data(n, "velocity", {
                    isSVG: o.isSVG(n),
                    isAnimating: !1,
                    computedStyle: null,
                    tweensContainer: null,
                    rootPropertyValueCache: {},
                    transformCache: {}
                })
            },
            hook: null,
            mock: !1,
            version: {major: 1, minor: 5, patch: 0},
            debug: !1,
            timestamp: !0,
            pauseAll: function (n) {
                var t = (new Date).getTime();
                e.each(f.State.calls, function (t, i) {
                    if (i) {
                        if (n !== r && (i[2].queue !== n || i[2].queue === !1))return !0;
                        i[5] = {resume: !1}
                    }
                });
                e.each(f.State.delayedElements, function (n, i) {
                    i && w(i, t)
                })
            },
            resumeAll: function (n) {
                var t = (new Date).getTime();
                e.each(f.State.calls, function (t, i) {
                    if (i) {
                        if (n !== r && (i[2].queue !== n || i[2].queue === !1))return !0;
                        i[5] && (i[5].resume = !0)
                    }
                });
                e.each(f.State.delayedElements, function (n, i) {
                    i && b(i, t)
                })
            }
        };
        return t.pageYOffset !== r ? (f.State.scrollAnchor = t, f.State.scrollPropertyLeft = "pageXOffset", f.State.scrollPropertyTop = "pageYOffset") : (f.State.scrollAnchor = i.documentElement || i.body.parentNode || i.body, f.State.scrollPropertyLeft = "scrollLeft", f.State.scrollPropertyTop = "scrollTop"), ut = function () {
            function t(n) {
                return -n.tension * n.x - n.friction * n.v
            }

            function n(n, i, r) {
                var u = {x: n.x + r.dx * i, v: n.v + r.dv * i, tension: n.tension, friction: n.friction};
                return {dx: u.v, dv: t(u)}
            }

            function i(i, r) {
                var u = {
                    dx: i.v,
                    dv: t(i)
                }, f = n(i, .5 * r, u), e = n(i, .5 * r, f), o = n(i, r, e), s = 1 / 6 * (u.dx + 2 * (f.dx + e.dx) + o.dx), h = 1 / 6 * (u.dv + 2 * (f.dv + e.dv) + o.dv);
                return i.x = i.x + s * r, i.v = i.v + h * r, i
            }

            return function r(n, t, u) {
                var o, s, f, h = {x: -1, v: 0, tension: null, friction: null}, c = [0], e = 0;
                for (n = parseFloat(n) || 500, t = parseFloat(t) || 20, u = u || null, h.tension = n, h.friction = t, o = null !== u, o ? (e = r(n, t), s = e / u * .016) : s = .016; ;)if (f = i(f || h, s), c.push(1 + f.x), e += 16, !(Math.abs(f.x) > .0001 && Math.abs(f.v) > .0001))break;
                return o ? function (n) {
                    return c[n * (c.length - 1) | 0]
                } : e
            }
        }(), f.Easings = {
            linear: function (n) {
                return n
            }, swing: function (n) {
                return .5 - Math.cos(n * Math.PI) / 2
            }, spring: function (n) {
                return 1 - Math.cos(4.5 * n * Math.PI) * Math.exp(6 * -n)
            }
        }, e.each([["ease", [.25, .1, .25, 1]], ["ease-in", [.42, 0, 1, 1]], ["ease-out", [0, 0, .58, 1]], ["ease-in-out", [.42, 0, .58, 1]], ["easeInSine", [.47, 0, .745, .715]], ["easeOutSine", [.39, .575, .565, 1]], ["easeInOutSine", [.445, .05, .55, .95]], ["easeInQuad", [.55, .085, .68, .53]], ["easeOutQuad", [.25, .46, .45, .94]], ["easeInOutQuad", [.455, .03, .515, .955]], ["easeInCubic", [.55, .055, .675, .19]], ["easeOutCubic", [.215, .61, .355, 1]], ["easeInOutCubic", [.645, .045, .355, 1]], ["easeInQuart", [.895, .03, .685, .22]], ["easeOutQuart", [.165, .84, .44, 1]], ["easeInOutQuart", [.77, 0, .175, 1]], ["easeInQuint", [.755, .05, .855, .06]], ["easeOutQuint", [.23, 1, .32, 1]], ["easeInOutQuint", [.86, 0, .07, 1]], ["easeInExpo", [.95, .05, .795, .035]], ["easeOutExpo", [.19, 1, .22, 1]], ["easeInOutExpo", [1, 0, 0, 1]], ["easeInCirc", [.6, .04, .98, .335]], ["easeOutCirc", [.075, .82, .165, 1]], ["easeInOutCirc", [.785, .135, .15, .86]]], function (n, t) {
            f.Easings[t[0]] = k.apply(null, t[1])
        }), u = f.CSS = {
            RegEx: {
                isHex: /^#([A-f\d]{3}){1,2}$/i,
                valueUnwrap: /^[A-z]+\((.*)\)$/i,
                wrappedValueAlreadyExtracted: /[0-9.]+ [0-9.]+ [0-9.]+( [0-9.]+)?/,
                valueSplit: /([A-z]+\(.+\))|(([A-z0-9#-.]+?)(?=\s|$))/gi
            },
            Lists: {
                colors: ["fill", "stroke", "stopColor", "color", "backgroundColor", "borderColor", "borderTopColor", "borderRightColor", "borderBottomColor", "borderLeftColor", "outlineColor"],
                transformsBase: ["translateX", "translateY", "scale", "scaleX", "scaleY", "skewX", "skewY", "rotateZ"],
                transforms3D: ["transformPerspective", "translateZ", "scaleZ", "rotateX", "rotateY"],
                units: ["%", "em", "ex", "ch", "rem", "vw", "vh", "vmin", "vmax", "cm", "mm", "Q", "in", "pc", "pt", "px", "deg", "grad", "rad", "turn", "s", "ms"],
                colorNames: {
                    aliceblue: "240,248,255",
                    antiquewhite: "250,235,215",
                    aquamarine: "127,255,212",
                    aqua: "0,255,255",
                    azure: "240,255,255",
                    beige: "245,245,220",
                    bisque: "255,228,196",
                    black: "0,0,0",
                    blanchedalmond: "255,235,205",
                    blueviolet: "138,43,226",
                    blue: "0,0,255",
                    brown: "165,42,42",
                    burlywood: "222,184,135",
                    cadetblue: "95,158,160",
                    chartreuse: "127,255,0",
                    chocolate: "210,105,30",
                    coral: "255,127,80",
                    cornflowerblue: "100,149,237",
                    cornsilk: "255,248,220",
                    crimson: "220,20,60",
                    cyan: "0,255,255",
                    darkblue: "0,0,139",
                    darkcyan: "0,139,139",
                    darkgoldenrod: "184,134,11",
                    darkgray: "169,169,169",
                    darkgrey: "169,169,169",
                    darkgreen: "0,100,0",
                    darkkhaki: "189,183,107",
                    darkmagenta: "139,0,139",
                    darkolivegreen: "85,107,47",
                    darkorange: "255,140,0",
                    darkorchid: "153,50,204",
                    darkred: "139,0,0",
                    darksalmon: "233,150,122",
                    darkseagreen: "143,188,143",
                    darkslateblue: "72,61,139",
                    darkslategray: "47,79,79",
                    darkturquoise: "0,206,209",
                    darkviolet: "148,0,211",
                    deeppink: "255,20,147",
                    deepskyblue: "0,191,255",
                    dimgray: "105,105,105",
                    dimgrey: "105,105,105",
                    dodgerblue: "30,144,255",
                    firebrick: "178,34,34",
                    floralwhite: "255,250,240",
                    forestgreen: "34,139,34",
                    fuchsia: "255,0,255",
                    gainsboro: "220,220,220",
                    ghostwhite: "248,248,255",
                    gold: "255,215,0",
                    goldenrod: "218,165,32",
                    gray: "128,128,128",
                    grey: "128,128,128",
                    greenyellow: "173,255,47",
                    green: "0,128,0",
                    honeydew: "240,255,240",
                    hotpink: "255,105,180",
                    indianred: "205,92,92",
                    indigo: "75,0,130",
                    ivory: "255,255,240",
                    khaki: "240,230,140",
                    lavenderblush: "255,240,245",
                    lavender: "230,230,250",
                    lawngreen: "124,252,0",
                    lemonchiffon: "255,250,205",
                    lightblue: "173,216,230",
                    lightcoral: "240,128,128",
                    lightcyan: "224,255,255",
                    lightgoldenrodyellow: "250,250,210",
                    lightgray: "211,211,211",
                    lightgrey: "211,211,211",
                    lightgreen: "144,238,144",
                    lightpink: "255,182,193",
                    lightsalmon: "255,160,122",
                    lightseagreen: "32,178,170",
                    lightskyblue: "135,206,250",
                    lightslategray: "119,136,153",
                    lightsteelblue: "176,196,222",
                    lightyellow: "255,255,224",
                    limegreen: "50,205,50",
                    lime: "0,255,0",
                    linen: "250,240,230",
                    magenta: "255,0,255",
                    maroon: "128,0,0",
                    mediumaquamarine: "102,205,170",
                    mediumblue: "0,0,205",
                    mediumorchid: "186,85,211",
                    mediumpurple: "147,112,219",
                    mediumseagreen: "60,179,113",
                    mediumslateblue: "123,104,238",
                    mediumspringgreen: "0,250,154",
                    mediumturquoise: "72,209,204",
                    mediumvioletred: "199,21,133",
                    midnightblue: "25,25,112",
                    mintcream: "245,255,250",
                    mistyrose: "255,228,225",
                    moccasin: "255,228,181",
                    navajowhite: "255,222,173",
                    navy: "0,0,128",
                    oldlace: "253,245,230",
                    olivedrab: "107,142,35",
                    olive: "128,128,0",
                    orangered: "255,69,0",
                    orange: "255,165,0",
                    orchid: "218,112,214",
                    palegoldenrod: "238,232,170",
                    palegreen: "152,251,152",
                    paleturquoise: "175,238,238",
                    palevioletred: "219,112,147",
                    papayawhip: "255,239,213",
                    peachpuff: "255,218,185",
                    peru: "205,133,63",
                    pink: "255,192,203",
                    plum: "221,160,221",
                    powderblue: "176,224,230",
                    purple: "128,0,128",
                    red: "255,0,0",
                    rosybrown: "188,143,143",
                    royalblue: "65,105,225",
                    saddlebrown: "139,69,19",
                    salmon: "250,128,114",
                    sandybrown: "244,164,96",
                    seagreen: "46,139,87",
                    seashell: "255,245,238",
                    sienna: "160,82,45",
                    silver: "192,192,192",
                    skyblue: "135,206,235",
                    slateblue: "106,90,205",
                    slategray: "112,128,144",
                    snow: "255,250,250",
                    springgreen: "0,255,127",
                    steelblue: "70,130,180",
                    tan: "210,180,140",
                    teal: "0,128,128",
                    thistle: "216,191,216",
                    tomato: "255,99,71",
                    turquoise: "64,224,208",
                    violet: "238,130,238",
                    wheat: "245,222,179",
                    whitesmoke: "245,245,245",
                    white: "255,255,255",
                    yellowgreen: "154,205,50",
                    yellow: "255,255,0"
                }
            },
            Hooks: {
                templates: {
                    textShadow: ["Color X Y Blur", "black 0px 0px 0px"],
                    boxShadow: ["Color X Y Blur Spread", "black 0px 0px 0px 0px"],
                    clip: ["Top Right Bottom Left", "0px 0px 0px 0px"],
                    backgroundPosition: ["X Y", "0% 0%"],
                    transformOrigin: ["X Y Z", "50% 50% 0px"],
                    perspectiveOrigin: ["X Y", "50% 50%"]
                }, registered: {}, register: function () {
                    for (var o, n, r, t, f, e, s, c, i = 0; i < u.Lists.colors.length; i++)o = "color" === u.Lists.colors[i] ? "0 0 0 1" : "255 255 255 1", u.Hooks.templates[u.Lists.colors[i]] = ["Red Green Blue Alpha", o];
                    if (h)for (n in u.Hooks.templates)u.Hooks.templates.hasOwnProperty(n) && (r = u.Hooks.templates[n], t = r[0].split(" "), f = r[1].match(u.RegEx.valueSplit), "Color" === t[0] && (t.push(t.shift()), f.push(f.shift()), u.Hooks.templates[n] = [t.join(" "), f.join(" ")]));
                    for (n in u.Hooks.templates)if (u.Hooks.templates.hasOwnProperty(n)) {
                        r = u.Hooks.templates[n];
                        t = r[0].split(" ");
                        for (e in t)t.hasOwnProperty(e) && (s = n + t[e], c = e, u.Hooks.registered[s] = [n, c])
                    }
                }, getRoot: function (n) {
                    var t = u.Hooks.registered[n];
                    return t ? t[0] : n
                }, getUnit: function (n, t) {
                    var i = (n.substr(t || 0, 5).match(/^[a-z%]+/) || [])[0] || "";
                    return i && tt(u.Lists.units, i) ? i : ""
                }, fixColors: function (n) {
                    return n.replace(/(rgba?\(\s*)?(\b[a-z]+\b)/g, function (n, t, i) {
                        return u.Lists.colorNames.hasOwnProperty(i) ? (t ? t : "rgba(") + u.Lists.colorNames[i] + (t ? "" : ",1)") : t + i
                    })
                }, cleanRootPropertyValue: function (n, t) {
                    return u.RegEx.valueUnwrap.test(t) && (t = t.match(u.RegEx.valueUnwrap)[1]), u.Values.isCSSNullValue(t) && (t = u.Hooks.templates[n][1]), t
                }, extractValue: function (n, t) {
                    var i = u.Hooks.registered[n], r, f;
                    return i ? (r = i[0], f = i[1], t = u.Hooks.cleanRootPropertyValue(r, t), t.toString().match(u.RegEx.valueSplit)[f]) : t
                }, injectValue: function (n, t, i) {
                    var r = u.Hooks.registered[n], f, e, o;
                    return r ? (e = r[0], o = r[1], i = u.Hooks.cleanRootPropertyValue(e, i), f = i.toString().match(u.RegEx.valueSplit), f[o] = t, f.join(" ")) : i
                }
            },
            Normalizations: {
                registered: {
                    clip: function (n, t, i) {
                        switch (n) {
                            case"name":
                                return "clip";
                            case"extract":
                                var r;
                                return u.RegEx.wrappedValueAlreadyExtracted.test(i) ? r = i : (r = i.toString().match(u.RegEx.valueUnwrap), r = r ? r[1].replace(/,(\s+)?/g, " ") : i), r;
                            case"inject":
                                return "rect(" + i + ")"
                        }
                    }, blur: function (n, t, i) {
                        var r, u;
                        switch (n) {
                            case"name":
                                return f.State.isFirefox ? "filter" : "-webkit-filter";
                            case"extract":
                                return r = parseFloat(i), r || 0 === r || (u = i.toString().match(/blur\(([0-9]+[A-z]+)\)/i), r = u ? u[1] : 0), r;
                            case"inject":
                                return parseFloat(i) ? "blur(" + i + ")" : "none"
                        }
                    }, opacity: function (n, t, i) {
                        if (h <= 8)switch (n) {
                            case"name":
                                return "filter";
                            case"extract":
                                var r = i.toString().match(/alpha\(opacity=(.*)\)/i);
                                return r ? r[1] / 100 : 1;
                            case"inject":
                                return t.style.zoom = 1, parseFloat(i) >= 1 ? "" : "alpha(opacity=" + parseInt(100 * parseFloat(i), 10) + ")"
                        } else switch (n) {
                            case"name":
                                return "opacity";
                            case"extract":
                                return i;
                            case"inject":
                                return i
                        }
                    }
                }, register: function () {
                    function e(n, t, i) {
                        if ("border-box" === u.getPropertyValue(t, "boxSizing").toString().toLowerCase() === (i || !1)) {
                            for (var e, o = 0, f = "width" === n ? ["Left", "Right"] : ["Top", "Bottom"], s = ["padding" + f[0], "padding" + f[1], "border" + f[0] + "Width", "border" + f[1] + "Width"], r = 0; r < s.length; r++)e = parseFloat(u.getPropertyValue(t, s[r])), isNaN(e) || (o += e);
                            return i ? -o : o
                        }
                        return 0
                    }

                    function n(n, t) {
                        return function (i, r, u) {
                            switch (i) {
                                case"name":
                                    return n;
                                case"extract":
                                    return parseFloat(u) + e(n, r, t);
                                case"inject":
                                    return parseFloat(u) - e(n, r, t) + "px"
                            }
                        }
                    }

                    var t, i;
                    for ((!h || h > 9) && !f.State.isGingerbread && (u.Lists.transformsBase = u.Lists.transformsBase.concat(u.Lists.transforms3D)), t = 0; t < u.Lists.transformsBase.length; t++)!function () {
                        var n = u.Lists.transformsBase[t];
                        u.Normalizations.registered[n] = function (t, i, u) {
                            switch (t) {
                                case"name":
                                    return "transform";
                                case"extract":
                                    return s(i) === r || s(i).transformCache[n] === r ? /^scale/i.test(n) ? 1 : 0 : s(i).transformCache[n].replace(/[()]/g, "");
                                case"inject":
                                    var e = !1;
                                    switch (n.substr(0, n.length - 1)) {
                                        case"translate":
                                            e = !/(%|px|em|rem|vw|vh|\d)$/i.test(u);
                                            break;
                                        case"scal":
                                        case"scale":
                                            f.State.isAndroid && s(i).transformCache[n] === r && u < 1 && (u = 1);
                                            e = !/(\d)$/i.test(u);
                                            break;
                                        case"skew":
                                            e = !/(deg|\d)$/i.test(u);
                                            break;
                                        case"rotate":
                                            e = !/(deg|\d)$/i.test(u)
                                    }
                                    return e || (s(i).transformCache[n] = "(" + u + ")"), s(i).transformCache[n]
                            }
                        }
                    }();
                    for (i = 0; i < u.Lists.colors.length; i++)!function () {
                        var n = u.Lists.colors[i];
                        u.Normalizations.registered[n] = function (t, i, f) {
                            var e, s, o;
                            switch (t) {
                                case"name":
                                    return n;
                                case"extract":
                                    return u.RegEx.wrappedValueAlreadyExtracted.test(f) ? e = f : (o = {
                                        black: "rgb(0, 0, 0)",
                                        blue: "rgb(0, 0, 255)",
                                        gray: "rgb(128, 128, 128)",
                                        green: "rgb(0, 128, 0)",
                                        red: "rgb(255, 0, 0)",
                                        white: "rgb(255, 255, 255)"
                                    }, /^[A-z]+$/i.test(f) ? s = o[f] !== r ? o[f] : o.black : u.RegEx.isHex.test(f) ? s = "rgb(" + u.Values.hexToRgb(f).join(" ") + ")" : /^rgba?\(/i.test(f) || (s = o.black), e = (s || f).toString().match(u.RegEx.valueUnwrap)[1].replace(/,(\s+)?/g, " ")), (!h || h > 8) && 3 === e.split(" ").length && (e += " 1"), e;
                                case"inject":
                                    return /^rgb/.test(f) ? f : (h <= 8 ? 4 === f.split(" ").length && (f = f.split(/\s+/).slice(0, 3).join(" ")) : 3 === f.split(" ").length && (f += " 1"), (h <= 8 ? "rgb" : "rgba") + "(" + f.replace(/\s+/g, ",").replace(/\.(\d)+(?=,)/g, "") + ")")
                            }
                        }
                    }();
                    u.Normalizations.registered.innerWidth = n("width", !0);
                    u.Normalizations.registered.innerHeight = n("height", !0);
                    u.Normalizations.registered.outerWidth = n("width");
                    u.Normalizations.registered.outerHeight = n("height")
                }
            },
            Names: {
                camelCase: function (n) {
                    return n.replace(/-(\w)/g, function (n, t) {
                        return t.toUpperCase()
                    })
                }, SVGAttribute: function (n) {
                    var t = "width|height|x|y|cx|cy|r|rx|ry|x1|x2|y1|y2";
                    return (h || f.State.isAndroid && !f.State.isChrome) && (t += "|transform"), new RegExp("^(" + t + ")$", "i").test(n)
                }, prefixCheck: function (n) {
                    var i;
                    if (f.State.prefixMatches[n])return [f.State.prefixMatches[n], !0];
                    for (var r = ["", "Webkit", "Moz", "ms", "O"], t = 0, u = r.length; t < u; t++)if (i = 0 === t ? n : r[t] + n.replace(/^\w/, function (n) {
                            return n.toUpperCase()
                        }), o.isString(f.State.prefixElement.style[i]))return f.State.prefixMatches[n] = i, [i, !0];
                    return [n, !1]
                }
            },
            Values: {
                hexToRgb: function (n) {
                    var t;
                    return n = n.replace(/^#?([a-f\d])([a-f\d])([a-f\d])$/i, function (n, t, i, r) {
                        return t + t + i + i + r + r
                    }), t = /^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(n), t ? [parseInt(t[1], 16), parseInt(t[2], 16), parseInt(t[3], 16)] : [0, 0, 0]
                }, isCSSNullValue: function (n) {
                    return !n || /^(none|auto|transparent|(rgba\(0, ?0, ?0, ?0\)))$/i.test(n)
                }, getUnitType: function (n) {
                    return /^(rotate|skew)/i.test(n) ? "deg" : /(^(scale|scaleX|scaleY|scaleZ|alpha|flexGrow|flexHeight|zIndex|fontWeight)$)|((opacity|red|green|blue|alpha)$)/i.test(n) ? "" : "px"
                }, getDisplayType: function (n) {
                    var t = n && n.tagName.toString().toLowerCase();
                    return /^(b|big|i|small|tt|abbr|acronym|cite|code|dfn|em|kbd|strong|samp|var|a|bdo|br|img|map|object|q|script|span|sub|sup|button|input|label|select|textarea)$/i.test(t) ? "inline" : /^(li)$/i.test(t) ? "list-item" : /^(tr)$/i.test(t) ? "table-row" : /^(table)$/i.test(t) ? "table" : /^(tbody)$/i.test(t) ? "table-row-group" : "block"
                }, addClass: function (n, t) {
                    if (n)if (n.classList) n.classList.add(t); else if (o.isString(n.className)) n.className += (n.className.length ? " " : "") + t; else {
                        var i = n.getAttribute(h <= 7 ? "className" : "class") || "";
                        n.setAttribute("class", i + (i ? " " : "") + t)
                    }
                }, removeClass: function (n, t) {
                    if (n)if (n.classList) n.classList.remove(t); else if (o.isString(n.className)) n.className = n.className.toString().replace(new RegExp("(^|\\s)" + t.split(" ").join("|") + "(\\s|$)", "gi"), " "); else {
                        var i = n.getAttribute(h <= 7 ? "className" : "class") || "";
                        n.setAttribute("class", i.replace(new RegExp("(^|s)" + t.split(" ").join("|") + "(s|$)", "gi"), " "))
                    }
                }
            },
            getPropertyValue: function (n, i, o, c) {
                function y(n, i) {
                    var f = 0, l, o, p, w, a, v;
                    if (h <= 8) f = e.css(n, i); else {
                        if (l = !1, /^(width|height)$/.test(i) && 0 === u.getPropertyValue(n, "display") && (l = !0, u.setPropertyValue(n, "display", u.Values.getDisplayType(n))), o = function () {
                                l && u.setPropertyValue(n, "display", "none")
                            }, !c) {
                            if ("height" === i && "border-box" !== u.getPropertyValue(n, "boxSizing").toString().toLowerCase())return p = n.offsetHeight - (parseFloat(u.getPropertyValue(n, "borderTopWidth")) || 0) - (parseFloat(u.getPropertyValue(n, "borderBottomWidth")) || 0) - (parseFloat(u.getPropertyValue(n, "paddingTop")) || 0) - (parseFloat(u.getPropertyValue(n, "paddingBottom")) || 0), o(), p;
                            if ("width" === i && "border-box" !== u.getPropertyValue(n, "boxSizing").toString().toLowerCase())return w = n.offsetWidth - (parseFloat(u.getPropertyValue(n, "borderLeftWidth")) || 0) - (parseFloat(u.getPropertyValue(n, "borderRightWidth")) || 0) - (parseFloat(u.getPropertyValue(n, "paddingLeft")) || 0) - (parseFloat(u.getPropertyValue(n, "paddingRight")) || 0), o(), w
                        }
                        a = s(n) === r ? t.getComputedStyle(n, null) : s(n).computedStyle ? s(n).computedStyle : s(n).computedStyle = t.getComputedStyle(n, null);
                        "borderColor" === i && (i = "borderTopColor");
                        f = 9 === h && "filter" === i ? a.getPropertyValue(i) : a[i];
                        "" !== f && null !== f || (f = n.style[i]);
                        o()
                    }
                    return "auto" === f && /^(top|right|bottom|left)$/i.test(i) && (v = y(n, "position"), ("fixed" === v || "absolute" === v && /top|left/i.test(i)) && (f = e(n).position()[i] + "px")), f
                }

                var l, p, a, w, v, b;
                if (u.Hooks.registered[i] ? (p = i, a = u.Hooks.getRoot(p), o === r && (o = u.getPropertyValue(n, u.Names.prefixCheck(a)[0])), u.Normalizations.registered[a] && (o = u.Normalizations.registered[a]("extract", n, o)), l = u.Hooks.extractValue(p, o)) : u.Normalizations.registered[i] && (w = u.Normalizations.registered[i]("name", n), "transform" !== w && (v = y(n, u.Names.prefixCheck(w)[0]), u.Values.isCSSNullValue(v) && u.Hooks.templates[i] && (v = u.Hooks.templates[i][1])), l = u.Normalizations.registered[i]("extract", n, v)), !/^[\d-]/.test(l))if (b = s(n), b && b.isSVG && u.Names.SVGAttribute(i))if (/^(height|width)$/i.test(i))try {
                    l = n.getBBox()[i]
                } catch (k) {
                    l = 0
                } else l = n.getAttribute(i); else l = y(n, u.Names.prefixCheck(i)[0]);
                return u.Values.isCSSNullValue(l) && (l = 0), f.debug >= 2 && console.log("Get " + i + ": " + l), l
            },
            setPropertyValue: function (n, i, r, e, o) {
                var c = i, v, l, a;
                if ("scroll" === i) o.container ? o.container["scroll" + o.direction] = r : "Left" === o.direction ? t.scrollTo(r, o.alternateValue) : t.scrollTo(o.alternateValue, r); else if (u.Normalizations.registered[i] && "transform" === u.Normalizations.registered[i]("name", n)) u.Normalizations.registered[i]("inject", n, r), c = "transform", r = s(n).transformCache[i]; else {
                    if (u.Hooks.registered[i] && (v = i, l = u.Hooks.getRoot(i), e = e || u.getPropertyValue(n, l), r = u.Hooks.injectValue(v, r, e), i = l), u.Normalizations.registered[i] && (r = u.Normalizations.registered[i]("inject", n, r), i = u.Normalizations.registered[i]("name", n)), c = u.Names.prefixCheck(i)[0], h <= 8)try {
                        n.style[c] = r
                    } catch (y) {
                        f.debug && console.log("Browser does not support [" + r + "] for [" + c + "]")
                    } else a = s(n), a && a.isSVG && u.Names.SVGAttribute(i) ? n.setAttribute(i, r) : n.style[c] = r;
                    f.debug >= 2 && console.log("Set " + i + " (" + c + "): " + r)
                }
                return [c, r]
            },
            flushTransformCache: function (n) {
                var i = "", l = s(n), t, r, o, c;
                (h || f.State.isAndroid && !f.State.isChrome) && l && l.isSVG ? (t = function (t) {
                    return parseFloat(u.getPropertyValue(n, t))
                }, r = {
                    translate: [t("translateX"), t("translateY")],
                    skewX: [t("skewX")],
                    skewY: [t("skewY")],
                    scale: 1 !== t("scale") ? [t("scale"), t("scale")] : [t("scaleX"), t("scaleY")],
                    rotate: [t("rotateZ"), 0, 0]
                }, e.each(s(n).transformCache, function (n) {
                    /^translate/i.test(n) ? n = "translate" : /^scale/i.test(n) ? n = "scale" : /^rotate/i.test(n) && (n = "rotate");
                    r[n] && (i += n + "(" + r[n].join(" ") + ") ", delete r[n])
                })) : (e.each(s(n).transformCache, function (t) {
                    if (o = s(n).transformCache[t], "transformPerspective" === t)return c = o, !0;
                    9 === h && "rotateZ" === t && (t = "rotate");
                    i += t + o + " "
                }), c && (i = "perspective" + c + " " + i));
                u.setPropertyValue(n, "transform", i)
            }
        }, u.Hooks.register(), u.Normalizations.register(), f.hook = function (n, t, i) {
            var o;
            return n = p(n), e.each(n, function (n, e) {
                if (s(e) === r && f.init(e), i === r) o === r && (o = u.getPropertyValue(e, t)); else {
                    var h = u.setPropertyValue(e, t, i);
                    "transform" === h[0] && f.CSS.flushTransformCache(e);
                    o = h
                }
            }), o
        }, c = function () {
            function ut() {
                return st ? nt.promise || null : bt
            }

            function ni(h, c) {
                function g() {
                    var v, g, et, bt, vt, ut, yt, it, kt, wt, ct, lt, ot, at;
                    if (p.begin && 0 === ht)try {
                        p.begin.call(l, l)
                    } catch (ri) {
                        setTimeout(function () {
                            throw ri;
                        }, 1)
                    }
                    if ("scroll" === ft) ut = /^x$/i.test(p.axis) ? "Left" : "Top", yt = parseFloat(p.offset) || 0, p.container ? o.isWrapped(p.container) || o.isNode(p.container) ? (p.container = p.container[0] || p.container, et = p.container["scroll" + ut], vt = et + e(h).position()[ut.toLowerCase()] + yt) : p.container = null : (et = f.State.scrollAnchor[f.State["scrollProperty" + ut]], bt = f.State.scrollAnchor[f.State["scrollProperty" + ("Left" === ut ? "Top" : "Left")]], vt = e(h).offset()[ut.toLowerCase()] + yt), w = {
                        scroll: {
                            rootPropertyValue: !1,
                            startValue: et,
                            currentValue: et,
                            endValue: vt,
                            unitType: "",
                            easing: p.easing,
                            scrollData: {container: p.container, direction: ut, alternateValue: bt}
                        }, element: h
                    }, f.debug && console.log("tweensContainer (scroll): ", w.scroll, h); else if ("reverse" === ft) {
                        if (!(v = s(h)))return;
                        if (!v.tweensContainer)return void e.dequeue(h, p.queue);
                        "none" === v.opts.display && (v.opts.display = "auto");
                        "hidden" === v.opts.visibility && (v.opts.visibility = "visible");
                        v.opts.loop = !1;
                        v.opts.begin = null;
                        v.opts.complete = null;
                        n.easing || delete p.easing;
                        n.duration || delete p.duration;
                        p = e.extend({}, v.opts, p);
                        g = e.extend(!0, {}, v ? v.tweensContainer : null);
                        for (it in g)g.hasOwnProperty(it) && "element" !== it && (kt = g[it].startValue, g[it].startValue = g[it].currentValue = g[it].endValue, g[it].endValue = kt, o.isEmptyObject(n) || (g[it].easing = p.easing), f.debug && console.log("reverse tweensContainer (" + it + "): " + JSON.stringify(g[it]), h));
                        w = g
                    } else if ("start" === ft) {
                        v = s(h);
                        v && v.tweensContainer && v.isAnimating === !0 && (g = v.tweensContainer);
                        wt = function (n, s) {
                            var nt, et = u.Hooks.getRoot(n), lt = !1, l = s[0], ii = s[1], c = s[2], ht, tt, ot, pt, dt, a, st, ct, bt, yt, kt, gt;
                            if (!(v && v.isSVG || "tween" === et || u.Names.prefixCheck(et)[1] !== !1 || u.Normalizations.registered[et] !== r))return void(f.debug && console.log("Skipping [" + et + "] due to a lack of browser support."));
                            if ((p.display !== r && null !== p.display && "none" !== p.display || p.visibility !== r && "hidden" !== p.visibility) && /opacity|filter/.test(n) && !c && 0 !== l && (c = 0), p._cacheValues && g && g[n] ? (c === r && (c = g[n].endValue + g[n].unitType), lt = v.rootPropertyValueCache[et]) : u.Hooks.registered[n] ? c === r ? (lt = u.getPropertyValue(h, et), c = u.getPropertyValue(h, n, lt)) : lt = u.Hooks.templates[et][1] : c === r && (c = u.getPropertyValue(h, n)), pt = !1, dt = function (n, t) {
                                    var i, r;
                                    return r = (t || "0").toString().toLowerCase().replace(/[%A-z]+$/, function (n) {
                                        return i = n, ""
                                    }), i || (i = u.Values.getUnitType(n)), [r, i]
                                }, c !== l && o.isString(c) && o.isString(l)) {
                                nt = "";
                                var ut = 0, ft = 0, it = [], at = [], d = 0, k = 0, rt = 0;
                                for (c = u.Hooks.fixColors(c), l = u.Hooks.fixColors(l); ut < c.length && ft < l.length;)if (a = c[ut], st = l[ft], /[\d\.-]/.test(a) && /[\d\.-]/.test(st)) {
                                    for (var vt = a, wt = st, ni = ".", ti = "."; ++ut < c.length;) {
                                        if ((a = c[ut]) === ni) ni = ".."; else if (!/\d/.test(a))break;
                                        vt += a
                                    }
                                    for (; ++ft < l.length;) {
                                        if ((st = l[ft]) === ti) ti = ".."; else if (!/\d/.test(st))break;
                                        wt += st
                                    }
                                    ct = u.Hooks.getUnit(c, ut);
                                    bt = u.Hooks.getUnit(l, ft);
                                    (ut += ct.length, ft += bt.length, ct === bt) ? vt === wt ? nt += vt + ct : (nt += "{" + it.length + (k ? "!" : "") + "}" + ct, it.push(parseFloat(vt)), at.push(parseFloat(wt))) : (yt = parseFloat(vt), kt = parseFloat(wt), nt += (d < 5 ? "calc" : "") + "(" + (yt ? "{" + it.length + (k ? "!" : "") + "}" : "0") + ct + " + " + (kt ? "{" + (it.length + (yt ? 1 : 0)) + (k ? "!" : "") + "}" : "0") + bt + ")", yt && (it.push(yt), at.push(0)), kt && (it.push(0), at.push(kt)))
                                } else {
                                    if (a !== st) {
                                        d = 0;
                                        break
                                    }
                                    nt += a;
                                    ut++;
                                    ft++;
                                    0 === d && "c" === a || 1 === d && "a" === a || 2 === d && "l" === a || 3 === d && "c" === a || d >= 4 && "(" === a ? d++ : (d && d < 5 || d >= 4 && ")" === a && --d < 5) && (d = 0);
                                    0 === k && "r" === a || 1 === k && "g" === a || 2 === k && "b" === a || 3 === k && "a" === a || k >= 3 && "(" === a ? (3 === k && "a" === a && (rt = 1), k++) : rt && "," === a ? ++rt > 3 && (k = rt = 0) : (rt && k < (rt ? 5 : 4) || k >= (rt ? 4 : 3) && ")" === a && --k < (rt ? 5 : 4)) && (k = rt = 0)
                                }
                                ut === c.length && ft === l.length || (f.debug && console.error('Trying to pattern match mis-matched strings ["' + l + '", "' + c + '"]'), nt = r);
                                nt && (it.length ? (f.debug && console.log('Pattern found "' + nt + '" -> ', it, at, "[" + c + "," + l + "]"), c = it, l = at, tt = ot = "") : nt = r)
                            }
                            if (nt || (ht = dt(n, c), c = ht[0], ot = ht[1], ht = dt(n, l), l = ht[0].replace(/^([+-\/*])=/, function (n, t) {
                                    return pt = t, ""
                                }), tt = ht[1], c = parseFloat(c) || 0, l = parseFloat(l) || 0, "%" === tt && (/^(fontSize|lineHeight)$/.test(n) ? (l /= 100, tt = "em") : /^scale/.test(n) ? (l /= 100, tt = "") : /(Red|Green|Blue)$/i.test(n) && (l = l / 100 * 255, tt = ""))), /[\/*]/.test(pt)) tt = ot; else if (ot !== tt && 0 !== c)if (0 === l) tt = ot; else {
                                b = b || function () {
                                        var o = {
                                            myParent: h.parentNode || i.body,
                                            position: u.getPropertyValue(h, "position"),
                                            fontSize: u.getPropertyValue(h, "fontSize")
                                        }, s = o.position === y.lastPosition && o.myParent === y.lastParent, c = o.fontSize === y.lastFontSize, r, n;
                                        return y.lastParent = o.myParent, y.lastPosition = o.position, y.lastFontSize = o.fontSize, r = {}, c && s ? (r.emToPx = y.lastEmToPx, r.percentToPxWidth = y.lastPercentToPxWidth, r.percentToPxHeight = y.lastPercentToPxHeight) : (n = v && v.isSVG ? i.createElementNS("http://www.w3.org/2000/svg", "rect") : i.createElement("div"), f.init(n), o.myParent.appendChild(n), e.each(["overflow", "overflowX", "overflowY"], function (t, i) {
                                            f.CSS.setPropertyValue(n, i, "hidden")
                                        }), f.CSS.setPropertyValue(n, "position", o.position), f.CSS.setPropertyValue(n, "fontSize", o.fontSize), f.CSS.setPropertyValue(n, "boxSizing", "content-box"), e.each(["minWidth", "maxWidth", "width", "minHeight", "maxHeight", "height"], function (t, i) {
                                            f.CSS.setPropertyValue(n, i, "100%")
                                        }), f.CSS.setPropertyValue(n, "paddingLeft", "100em"), r.percentToPxWidth = y.lastPercentToPxWidth = (parseFloat(u.getPropertyValue(n, "width", null, !0)) || 1) / 100, r.percentToPxHeight = y.lastPercentToPxHeight = (parseFloat(u.getPropertyValue(n, "height", null, !0)) || 1) / 100, r.emToPx = y.lastEmToPx = (parseFloat(u.getPropertyValue(n, "paddingLeft")) || 1) / 100, o.myParent.removeChild(n)), null === y.remToPx && (y.remToPx = parseFloat(u.getPropertyValue(i.body, "fontSize")) || 16), null === y.vwToPx && (y.vwToPx = parseFloat(t.innerWidth) / 100, y.vhToPx = parseFloat(t.innerHeight) / 100), r.remToPx = y.remToPx, r.vwToPx = y.vwToPx, r.vhToPx = y.vhToPx, f.debug >= 1 && console.log("Unit ratios: " + JSON.stringify(r), h), r
                                    }();
                                gt = /margin|padding|left|right|width|text|word|letter/i.test(n) || /X$/.test(n) || "x" === n ? "x" : "y";
                                switch (ot) {
                                    case"%":
                                        c *= "x" === gt ? b.percentToPxWidth : b.percentToPxHeight;
                                        break;
                                    case"px":
                                        break;
                                    default:
                                        c *= b[ot + "ToPx"]
                                }
                                switch (tt) {
                                    case"%":
                                        c *= 1 / ("x" === gt ? b.percentToPxWidth : b.percentToPxHeight);
                                        break;
                                    case"px":
                                        break;
                                    default:
                                        c *= 1 / b[tt + "ToPx"]
                                }
                            }
                            switch (pt) {
                                case"+":
                                    l = c + l;
                                    break;
                                case"-":
                                    l = c - l;
                                    break;
                                case"*":
                                    l *= c;
                                    break;
                                case"/":
                                    l = c / l
                            }
                            w[n] = {
                                rootPropertyValue: lt,
                                startValue: c,
                                currentValue: c,
                                endValue: l,
                                unitType: tt,
                                easing: ii
                            };
                            nt && (w[n].pattern = nt);
                            f.debug && console.log("tweensContainer (" + n + "): " + JSON.stringify(w[n]), h)
                        };
                        for (ct in k)if (k.hasOwnProperty(ct)) {
                            if (lt = u.Names.camelCase(ct), ot = function (n, t) {
                                    var r, e, i;
                                    return o.isFunction(n) && (n = n.call(h, c, rt)), o.isArray(n) ? (r = n[0], !o.isArray(n[1]) && /^[\d-]/.test(n[1]) || o.isFunction(n[1]) || u.RegEx.isHex.test(n[1]) ? i = n[1] : o.isString(n[1]) && !u.RegEx.isHex.test(n[1]) && f.Easings[n[1]] || o.isArray(n[1]) ? (e = t ? n[1] : d(n[1], p.duration), i = n[2]) : i = n[1] || n[2]) : r = n, t || (e = e || p.easing), o.isFunction(r) && (r = r.call(h, c, rt)), o.isFunction(i) && (i = i.call(h, c, rt)), [r || 0, e, i]
                                }(k[ct]), tt(u.Lists.colors, lt)) {
                                var dt = ot[0], gt = ot[1], ni = ot[2];
                                if (u.RegEx.isHex.test(dt)) {
                                    for (var ti = ["Red", "Green", "Blue"], ui = u.Values.hexToRgb(dt), ii = ni ? u.Values.hexToRgb(ni) : r, st = 0; st < ti.length; st++)at = [ui[st]], gt && at.push(gt), ii !== r && at.push(ii[st]), wt(lt + ti[st], at);
                                    continue
                                }
                            }
                            wt(lt, ot)
                        }
                        w.element = h
                    }
                    w.element && (u.Values.addClass(h, "velocity-animating"), pt.push(w), v = s(h), v && ("" === p.queue && (v.tweensContainer = w, v.opts = p), v.isAnimating = !0), ht === rt - 1 ? (f.State.calls.push([pt, l, p, null, nt.resolver, null, 0]), f.State.isTicking === !1 && (f.State.isTicking = !0, a())) : ht++)
                }

                var b, p = e.extend({}, f.defaults, n), w = {}, it, ut;
                switch (s(h) === r && f.init(h), parseFloat(p.delay) && p.queue !== !1 && e.queue(h, p.queue, function (n) {
                    var t, i;
                    f.velocityQueueEntryFlag = !0;
                    t = f.State.delayedElements.count++;
                    f.State.delayedElements[t] = h;
                    i = function (t) {
                        return function () {
                            f.State.delayedElements[t] = !1;
                            n()
                        }
                    }(t);
                    s(h).delayBegin = (new Date).getTime();
                    s(h).delay = parseFloat(p.delay);
                    s(h).delayTimer = {setTimeout: setTimeout(n, parseFloat(p.delay)), next: i}
                }), p.duration.toString().toLowerCase()) {
                    case"fast":
                        p.duration = 200;
                        break;
                    case"normal":
                        p.duration = v;
                        break;
                    case"slow":
                        p.duration = 600;
                        break;
                    default:
                        p.duration = parseFloat(p.duration) || 1
                }
                (f.mock !== !1 && (f.mock === !0 ? p.duration = p.delay = 1 : (p.duration *= parseFloat(f.mock) || 1, p.delay *= parseFloat(f.mock) || 1)), p.easing = d(p.easing, p.duration), p.begin && !o.isFunction(p.begin) && (p.begin = null), p.progress && !o.isFunction(p.progress) && (p.progress = null), p.complete && !o.isFunction(p.complete) && (p.complete = null), p.display !== r && null !== p.display && (p.display = p.display.toString().toLowerCase(), "auto" === p.display && (p.display = f.CSS.Values.getDisplayType(h))), p.visibility !== r && null !== p.visibility && (p.visibility = p.visibility.toString().toLowerCase()), p.mobileHA = p.mobileHA && f.State.isMobile && !f.State.isGingerbread, p.queue === !1) ? p.delay ? (it = f.State.delayedElements.count++, f.State.delayedElements[it] = h, ut = function (n) {
                    return function () {
                        f.State.delayedElements[n] = !1;
                        g()
                    }
                }(it), s(h).delayBegin = (new Date).getTime(), s(h).delay = parseFloat(p.delay), s(h).delayTimer = {
                    setTimeout: setTimeout(g, parseFloat(p.delay)),
                    next: ut
                }) : g() : e.queue(h, p.queue, function (n, t) {
                    if (t === !0)return nt.promise && nt.resolver(l), !0;
                    f.velocityQueueEntryFlag = !0;
                    g(n)
                });
                "" !== p.queue && "fx" !== p.queue || "inprogress" === e.queue(h)[0] || e.dequeue(h)
            }

            var h, st, bt, et, l, k, n, kt = arguments[0] && (arguments[0].p || e.isPlainObject(arguments[0].properties) && !arguments[0].properties.names || o.isString(arguments[0].properties)), nt, rt, ht, dt, it, ft, lt, at, gt, vt, yt, y, pt, wt, ct, ot;
            if (o.isWrapped(this) ? (st = !1, et = 0, l = this, bt = this) : (st = !0, et = 1, l = kt ? arguments[0].elements || arguments[0].e : arguments[0]), nt = {
                    promise: null,
                    resolver: null,
                    rejecter: null
                }, st && f.Promise && (nt.promise = new f.Promise(function (n, t) {
                    nt.resolver = n;
                    nt.rejecter = t
                })), kt ? (k = arguments[0].properties || arguments[0].p, n = arguments[0].options || arguments[0].o) : (k = arguments[et], n = arguments[et + 1]), !(l = p(l)))return void(nt.promise && (k && n && n.promiseRejectEmpty === !1 ? nt.resolver() : nt.rejecter()));
            if (rt = l.length, ht = 0, !/^(stop|finish|finishAll|pause|resume)$/i.test(k) && !e.isPlainObject(n))for (dt = et + 1, n = {}, it = dt; it < arguments.length; it++)o.isArray(arguments[it]) || !/^(fast|normal|slow)$/i.test(arguments[it]) && !/^\d/.test(arguments[it]) ? o.isString(arguments[it]) || o.isArray(arguments[it]) ? n.easing = arguments[it] : o.isFunction(arguments[it]) && (n.complete = arguments[it]) : n.duration = arguments[it];
            switch (k) {
                case"scroll":
                    ft = "scroll";
                    break;
                case"reverse":
                    ft = "reverse";
                    break;
                case"pause":
                    return lt = (new Date).getTime(), e.each(l, function (n, t) {
                        w(t, lt)
                    }), e.each(f.State.calls, function (t, i) {
                        var u = !1;
                        i && e.each(i[1], function (t, f) {
                            var o = n === r ? "" : n;
                            return o !== !0 && i[2].queue !== o && (n !== r || i[2].queue !== !1) || (e.each(l, function (n, t) {
                                    if (t === f)return i[5] = {resume: !1}, u = !0, !1
                                }), !u && void 0)
                        })
                    }), ut();
                case"resume":
                    return e.each(l, function (n, t) {
                        b(t, lt)
                    }), e.each(f.State.calls, function (t, i) {
                        var u = !1;
                        i && e.each(i[1], function (t, f) {
                            var o = n === r ? "" : n;
                            return o !== !0 && i[2].queue !== o && (n !== r || i[2].queue !== !1) || !i[5] || (e.each(l, function (n, t) {
                                    if (t === f)return i[5].resume = !0, u = !0, !1
                                }), !u && void 0)
                        })
                    }), ut();
                case"finish":
                case"finishAll":
                case"stop":
                    return e.each(l, function (t, i) {
                        s(i) && s(i).delayTimer && (clearTimeout(s(i).delayTimer.setTimeout), s(i).delayTimer.next && s(i).delayTimer.next(), delete s(i).delayTimer);
                        "finishAll" === k && (n === !0 || o.isString(n)) && (e.each(e.queue(i, o.isString(n) ? n : ""), function (n, t) {
                            o.isFunction(t) && t()
                        }), e.queue(i, o.isString(n) ? n : "", []))
                    }), at = [], e.each(f.State.calls, function (t, i) {
                        i && e.each(i[1], function (u, f) {
                            var h = n === r ? "" : n;
                            if (h !== !0 && i[2].queue !== h && (n !== r || i[2].queue !== !1))return !0;
                            e.each(l, function (r, u) {
                                if (u === f)if ((n === !0 || o.isString(n)) && (e.each(e.queue(u, o.isString(n) ? n : ""), function (n, t) {
                                        o.isFunction(t) && t(null, !0)
                                    }), e.queue(u, o.isString(n) ? n : "", [])), "stop" === k) {
                                    var c = s(u);
                                    c && c.tweensContainer && h !== !1 && e.each(c.tweensContainer, function (n, t) {
                                        t.endValue = t.currentValue
                                    });
                                    at.push(t)
                                } else"finish" !== k && "finishAll" !== k || (i[2].duration = 1)
                            })
                        })
                    }), "stop" === k && (e.each(at, function (n, t) {
                        g(t, !0)
                    }), nt.promise && nt.resolver(l)), ut();
                default:
                    if (!e.isPlainObject(k) || o.isEmptyObject(k))return o.isString(k) && f.Redirects[k] ? (h = e.extend({}, n), gt = h.duration, vt = h.delay || 0, h.backwards === !0 && (l = e.extend(!0, [], l).reverse()), e.each(l, function (n, t) {
                        parseFloat(h.stagger) ? h.delay = vt + parseFloat(h.stagger) * n : o.isFunction(h.stagger) && (h.delay = vt + h.stagger.call(t, n, rt));
                        h.drag && (h.duration = parseFloat(gt) || (/^(callout|transition)/.test(k) ? 1e3 : v), h.duration = Math.max(h.duration * (h.backwards ? 1 - n / rt : (n + 1) / rt), .75 * h.duration, 200));
                        f.Redirects[k].call(t, t, h || {}, n, rt, l, nt.promise ? nt : r)
                    }), ut()) : (yt = "Velocity: First argument (" + k + ") was not a property map, a known action, or a registered redirect. Aborting.", nt.promise ? nt.rejecter(new Error(yt)) : t.console && console.log(yt), ut());
                    ft = "start"
            }
            if (y = {
                    lastParent: null,
                    lastPosition: null,
                    lastFontSize: null,
                    lastPercentToPxWidth: null,
                    lastPercentToPxHeight: null,
                    lastEmToPx: null,
                    remToPx: null,
                    vwToPx: null,
                    vhToPx: null
                }, pt = [], e.each(l, function (n, t) {
                    o.isNode(t) && ni(t, n)
                }), h = e.extend({}, f.defaults, n), h.loop = parseInt(h.loop, 10), wt = 2 * h.loop - 1, h.loop)for (ct = 0; ct < wt; ct++)ot = {
                delay: h.delay,
                progress: h.progress
            }, ct === wt - 1 && (ot.display = h.display, ot.visibility = h.visibility, ot.complete = h.complete), c(l, "reverse", ot);
            return ut()
        }, f = e.extend(c, f), f.animate = c, l = t.requestAnimationFrame || nt, f.State.isMobile || i.hidden === r || (y = function () {
            i.hidden ? (l = function (n) {
                return setTimeout(function () {
                    n(!0)
                }, 16)
            }, a()) : l = t.requestAnimationFrame || nt
        }, y(), i.addEventListener("visibilitychange", y)), n.Velocity = f, n !== t && (n.fn.velocity = c, n.fn.velocity.defaults = f.defaults), e.each(["Down", "Up"], function (n, t) {
            f.Redirects["slide" + t] = function (n, i, o, s, h, c) {
                var l = e.extend({}, i), y = l.begin, p = l.complete, a = {}, v = {
                    height: "",
                    marginTop: "",
                    marginBottom: "",
                    paddingTop: "",
                    paddingBottom: ""
                };
                l.display === r && (l.display = "Down" === t ? "inline" === f.CSS.Values.getDisplayType(n) ? "inline-block" : "block" : "none");
                l.begin = function () {
                    var i, r;
                    0 === o && y && y.call(h, h);
                    for (i in v)v.hasOwnProperty(i) && (a[i] = n.style[i], r = u.getPropertyValue(n, i), v[i] = "Down" === t ? [r, 0] : [0, r]);
                    a.overflow = n.style.overflow;
                    n.style.overflow = "hidden"
                };
                l.complete = function () {
                    for (var t in a)a.hasOwnProperty(t) && (n.style[t] = a[t]);
                    o === s - 1 && (p && p.call(h, h), c && c.resolver(h))
                };
                f(n, v, l)
            }
        }), e.each(["In", "Out"], function (n, t) {
            f.Redirects["fade" + t] = function (n, i, u, o, s, h) {
                var c = e.extend({}, i), l = c.complete, a = {opacity: "In" === t ? 1 : 0};
                0 !== u && (c.begin = null);
                c.complete = u !== o - 1 ? null : function () {
                    l && l.call(s, s);
                    h && h.resolver(s)
                };
                c.display === r && (c.display = "In" === t ? "auto" : "none");
                f(this, a, c)
            }
        }), f
    }(window.jQuery || window.Zepto || window, window, window ? window.document : undefined)
});
!function (n) {
    "use strict";
    "function" == typeof require && "object" == typeof exports ? module.exports = n() : "function" == typeof define && define.amd ? define(["velocity"], n) : n()
}(function () {
    "use strict";
    return function (n, t) {
        var i = n.Velocity, f, u;
        if (!i || !i.Utilities)return void(t.console && console.log("Velocity UI Pack: Velocity must be loaded first. Aborting."));
        var r = i.Utilities, e = i.version;
        if (function (n, t) {
                var i = [];
                return !(!n || !t) && (r.each([n, t], function (n, t) {
                        var u = [];
                        r.each(t, function (n, t) {
                            for (; t.toString().length < 5;)t = "0" + t;
                            u.push(t)
                        });
                        i.push(u.join(""))
                    }), parseFloat(i[0]) > parseFloat(i[1]))
            }({major: 1, minor: 1, patch: 0}, e)) {
            f = "Velocity UI Pack: You need to update Velocity (velocity.js) to a newer version. Visit http://github.com/julianshapiro/velocity.";
            throw alert(f), new Error(f);
        }
        i.RegisterEffect = i.RegisterUI = function (n, t) {
            function u(n, t, u, f) {
                var e, o = 0;
                r.each(n.nodeType ? [n] : n, function (n, t) {
                    f && (u += n * f);
                    e = t.parentNode;
                    var s = ["height", "paddingTop", "paddingBottom", "marginTop", "marginBottom"];
                    "border-box" === i.CSS.getPropertyValue(t, "boxSizing").toString().toLowerCase() && (s = ["height"]);
                    r.each(s, function (n, r) {
                        o += parseFloat(i.CSS.getPropertyValue(t, r))
                    })
                });
                i.animate(e, {height: ("In" === t ? "+" : "-") + "=" + o}, {
                    queue: !1,
                    easing: "ease-in-out",
                    duration: u * ("In" === t ? .6 : 1)
                })
            }

            return i.Redirects[n] = function (f, e, o, s, h, c, l) {
                var nt = o === s - 1, b = 0, v, tt, d, g;
                for (l = l || t.loop, t.defaultDuration = "function" == typeof t.defaultDuration ? t.defaultDuration.call(h, h) : parseFloat(t.defaultDuration), v = 0; v < t.calls.length; v++)"number" == typeof(p = t.calls[v][1]) && (b += p);
                for (tt = b >= 1 ? 0 : t.calls.length ? (1 - b) / t.calls.length : 1, v = 0; v < t.calls.length; v++) {
                    var k = t.calls[v], it = k[0], y = 1e3, p = k[1], w = k[2] || {}, a = {};
                    (void 0 !== e.duration ? y = e.duration : void 0 !== t.defaultDuration && (y = t.defaultDuration), a.duration = y * ("number" == typeof p ? p : tt), a.queue = e.queue || "", a.easing = w.easing || "ease", a.delay = parseFloat(w.delay) || 0, a.loop = !t.loop && w.loop, a._cacheValues = w._cacheValues || !0, 0 === v) && ((a.delay += parseFloat(e.delay) || 0, 0 === o && (a.begin = function () {
                        e.begin && e.begin.call(h, h);
                        var t = n.match(/(In|Out)$/);
                        t && "In" === t[0] && void 0 !== it.opacity && r.each(h.nodeType ? [h] : h, function (n, t) {
                            i.CSS.setPropertyValue(t, "opacity", 0)
                        });
                        e.animateParentHeight && t && u(h, t[0], y + a.delay, e.stagger)
                    }), null !== e.display) && (void 0 !== e.display && "none" !== e.display ? a.display = e.display : /In$/.test(n) && (d = i.CSS.Values.getDisplayType(f), a.display = "inline" === d ? "inline-block" : d)), e.visibility && "hidden" !== e.visibility && (a.visibility = e.visibility));
                    v === t.calls.length - 1 && (g = function () {
                        (void 0 === e.display || "none" === e.display) && /Out$/.test(n) && r.each(h.nodeType ? [h] : h, function (n, t) {
                            i.CSS.setPropertyValue(t, "display", "none")
                        });
                        e.complete && e.complete.call(h, h);
                        c && c.resolver(h || f)
                    }, a.complete = function () {
                        var r, u, a;
                        if (l && i.Redirects[n](f, e, o, s, h, c, l === !0 || Math.max(0, l - 1)), t.reset) {
                            for (r in t.reset)t.reset.hasOwnProperty(r) && (u = t.reset[r], void 0 !== i.CSS.Hooks.registered[r] || "string" != typeof u && "number" != typeof u || (t.reset[r] = [t.reset[r], t.reset[r]]));
                            a = {duration: 0, queue: !1};
                            nt && (a.complete = g);
                            i.animate(f, t.reset, a)
                        } else nt && g()
                    }, "hidden" === e.visibility && (a.visibility = e.visibility));
                    i.animate(f, it, a)
                }
            }, i
        };
        i.RegisterEffect.packagedEffects = {
            "callout.bounce": {
                defaultDuration: 550,
                calls: [[{translateY: -30}, .25], [{translateY: 0}, .125], [{translateY: -15}, .125], [{translateY: 0}, .25]]
            },
            "callout.shake": {
                defaultDuration: 800,
                calls: [[{translateX: -11}], [{translateX: 11}], [{translateX: -11}], [{translateX: 11}], [{translateX: -11}], [{translateX: 11}], [{translateX: -11}], [{translateX: 0}]]
            },
            "callout.flash": {
                defaultDuration: 1100,
                calls: [[{opacity: [0, "easeInOutQuad", 1]}], [{opacity: [1, "easeInOutQuad"]}], [{opacity: [0, "easeInOutQuad"]}], [{opacity: [1, "easeInOutQuad"]}]]
            },
            "callout.pulse": {
                defaultDuration: 825,
                calls: [[{scaleX: 1.1, scaleY: 1.1}, .5, {easing: "easeInExpo"}], [{scaleX: 1, scaleY: 1}, .5]]
            },
            "callout.swing": {
                defaultDuration: 950,
                calls: [[{rotateZ: 15}], [{rotateZ: -10}], [{rotateZ: 5}], [{rotateZ: -5}], [{rotateZ: 0}]]
            },
            "callout.tada": {
                defaultDuration: 1e3,
                calls: [[{scaleX: .9, scaleY: .9, rotateZ: -3}, .1], [{
                    scaleX: 1.1,
                    scaleY: 1.1,
                    rotateZ: 3
                }, .1], [{
                    scaleX: 1.1,
                    scaleY: 1.1,
                    rotateZ: -3
                }, .1], ["reverse", .125], ["reverse", .125], ["reverse", .125], ["reverse", .125], ["reverse", .125], [{
                    scaleX: 1,
                    scaleY: 1,
                    rotateZ: 0
                }, .2]]
            },
            "transition.fadeIn": {defaultDuration: 500, calls: [[{opacity: [1, 0]}]]},
            "transition.fadeOut": {defaultDuration: 500, calls: [[{opacity: [0, 1]}]]},
            "transition.flipXIn": {
                defaultDuration: 700,
                calls: [[{opacity: [1, 0], transformPerspective: [800, 800], rotateY: [0, -55]}]],
                reset: {transformPerspective: 0}
            },
            "transition.flipXOut": {
                defaultDuration: 700,
                calls: [[{opacity: [0, 1], transformPerspective: [800, 800], rotateY: 55}]],
                reset: {transformPerspective: 0, rotateY: 0}
            },
            "transition.flipYIn": {
                defaultDuration: 800,
                calls: [[{opacity: [1, 0], transformPerspective: [800, 800], rotateX: [0, -45]}]],
                reset: {transformPerspective: 0}
            },
            "transition.flipYOut": {
                defaultDuration: 800,
                calls: [[{opacity: [0, 1], transformPerspective: [800, 800], rotateX: 25}]],
                reset: {transformPerspective: 0, rotateX: 0}
            },
            "transition.flipBounceXIn": {
                defaultDuration: 900,
                calls: [[{opacity: [.725, 0], transformPerspective: [400, 400], rotateY: [-10, 90]}, .5], [{
                    opacity: .8,
                    rotateY: 10
                }, .25], [{opacity: 1, rotateY: 0}, .25]],
                reset: {transformPerspective: 0}
            },
            "transition.flipBounceXOut": {
                defaultDuration: 800,
                calls: [[{opacity: [.9, 1], transformPerspective: [400, 400], rotateY: -10}], [{
                    opacity: 0,
                    rotateY: 90
                }]],
                reset: {transformPerspective: 0, rotateY: 0}
            },
            "transition.flipBounceYIn": {
                defaultDuration: 850,
                calls: [[{opacity: [.725, 0], transformPerspective: [400, 400], rotateX: [-10, 90]}, .5], [{
                    opacity: .8,
                    rotateX: 10
                }, .25], [{opacity: 1, rotateX: 0}, .25]],
                reset: {transformPerspective: 0}
            },
            "transition.flipBounceYOut": {
                defaultDuration: 800,
                calls: [[{opacity: [.9, 1], transformPerspective: [400, 400], rotateX: -15}], [{
                    opacity: 0,
                    rotateX: 90
                }]],
                reset: {transformPerspective: 0, rotateX: 0}
            },
            "transition.swoopIn": {
                defaultDuration: 850,
                calls: [[{
                    opacity: [1, 0],
                    transformOriginX: ["100%", "50%"],
                    transformOriginY: ["100%", "100%"],
                    scaleX: [1, 0],
                    scaleY: [1, 0],
                    translateX: [0, -700],
                    translateZ: 0
                }]],
                reset: {transformOriginX: "50%", transformOriginY: "50%"}
            },
            "transition.swoopOut": {
                defaultDuration: 850,
                calls: [[{
                    opacity: [0, 1],
                    transformOriginX: ["50%", "100%"],
                    transformOriginY: ["100%", "100%"],
                    scaleX: 0,
                    scaleY: 0,
                    translateX: -700,
                    translateZ: 0
                }]],
                reset: {transformOriginX: "50%", transformOriginY: "50%", scaleX: 1, scaleY: 1, translateX: 0}
            },
            "transition.whirlIn": {
                defaultDuration: 850,
                calls: [[{
                    opacity: [1, 0],
                    transformOriginX: ["50%", "50%"],
                    transformOriginY: ["50%", "50%"],
                    scaleX: [1, 0],
                    scaleY: [1, 0],
                    rotateY: [0, 160]
                }, 1, {easing: "easeInOutSine"}]]
            },
            "transition.whirlOut": {
                defaultDuration: 750,
                calls: [[{
                    opacity: [0, "easeInOutQuint", 1],
                    transformOriginX: ["50%", "50%"],
                    transformOriginY: ["50%", "50%"],
                    scaleX: 0,
                    scaleY: 0,
                    rotateY: 160
                }, 1, {easing: "swing"}]],
                reset: {scaleX: 1, scaleY: 1, rotateY: 0}
            },
            "transition.shrinkIn": {
                defaultDuration: 750,
                calls: [[{
                    opacity: [1, 0],
                    transformOriginX: ["50%", "50%"],
                    transformOriginY: ["50%", "50%"],
                    scaleX: [1, 1.5],
                    scaleY: [1, 1.5],
                    translateZ: 0
                }]]
            },
            "transition.shrinkOut": {
                defaultDuration: 600,
                calls: [[{
                    opacity: [0, 1],
                    transformOriginX: ["50%", "50%"],
                    transformOriginY: ["50%", "50%"],
                    scaleX: 1.3,
                    scaleY: 1.3,
                    translateZ: 0
                }]],
                reset: {scaleX: 1, scaleY: 1}
            },
            "transition.expandIn": {
                defaultDuration: 700,
                calls: [[{
                    opacity: [1, 0],
                    transformOriginX: ["50%", "50%"],
                    transformOriginY: ["50%", "50%"],
                    scaleX: [1, .625],
                    scaleY: [1, .625],
                    translateZ: 0
                }]]
            },
            "transition.expandOut": {
                defaultDuration: 700,
                calls: [[{
                    opacity: [0, 1],
                    transformOriginX: ["50%", "50%"],
                    transformOriginY: ["50%", "50%"],
                    scaleX: .5,
                    scaleY: .5,
                    translateZ: 0
                }]],
                reset: {scaleX: 1, scaleY: 1}
            },
            "transition.bounceIn": {
                defaultDuration: 800,
                calls: [[{opacity: [1, 0], scaleX: [1.05, .3], scaleY: [1.05, .3]}, .35], [{
                    scaleX: .9,
                    scaleY: .9,
                    translateZ: 0
                }, .2], [{scaleX: 1, scaleY: 1}, .45]]
            },
            "transition.bounceOut": {
                defaultDuration: 800,
                calls: [[{scaleX: .95, scaleY: .95}, .35], [{
                    scaleX: 1.1,
                    scaleY: 1.1,
                    translateZ: 0
                }, .35], [{opacity: [0, 1], scaleX: .3, scaleY: .3}, .3]],
                reset: {scaleX: 1, scaleY: 1}
            },
            "transition.bounceUpIn": {
                defaultDuration: 800,
                calls: [[{
                    opacity: [1, 0],
                    translateY: [-30, 1e3]
                }, .6, {easing: "easeOutCirc"}], [{translateY: 10}, .2], [{translateY: 0}, .2]]
            },
            "transition.bounceUpOut": {
                defaultDuration: 1e3,
                calls: [[{translateY: 20}, .2], [{opacity: [0, "easeInCirc", 1], translateY: -1e3}, .8]],
                reset: {translateY: 0}
            },
            "transition.bounceDownIn": {
                defaultDuration: 800,
                calls: [[{
                    opacity: [1, 0],
                    translateY: [30, -1e3]
                }, .6, {easing: "easeOutCirc"}], [{translateY: -10}, .2], [{translateY: 0}, .2]]
            },
            "transition.bounceDownOut": {
                defaultDuration: 1e3,
                calls: [[{translateY: -20}, .2], [{opacity: [0, "easeInCirc", 1], translateY: 1e3}, .8]],
                reset: {translateY: 0}
            },
            "transition.bounceLeftIn": {
                defaultDuration: 750,
                calls: [[{
                    opacity: [1, 0],
                    translateX: [30, -1250]
                }, .6, {easing: "easeOutCirc"}], [{translateX: -10}, .2], [{translateX: 0}, .2]]
            },
            "transition.bounceLeftOut": {
                defaultDuration: 750,
                calls: [[{translateX: 30}, .2], [{opacity: [0, "easeInCirc", 1], translateX: -1250}, .8]],
                reset: {translateX: 0}
            },
            "transition.bounceRightIn": {
                defaultDuration: 750,
                calls: [[{
                    opacity: [1, 0],
                    translateX: [-30, 1250]
                }, .6, {easing: "easeOutCirc"}], [{translateX: 10}, .2], [{translateX: 0}, .2]]
            },
            "transition.bounceRightOut": {
                defaultDuration: 750,
                calls: [[{translateX: -30}, .2], [{opacity: [0, "easeInCirc", 1], translateX: 1250}, .8]],
                reset: {translateX: 0}
            },
            "transition.slideUpIn": {
                defaultDuration: 900,
                calls: [[{opacity: [1, 0], translateY: [0, 20], translateZ: 0}]]
            },
            "transition.slideUpOut": {
                defaultDuration: 900,
                calls: [[{opacity: [0, 1], translateY: -20, translateZ: 0}]],
                reset: {translateY: 0}
            },
            "transition.slideDownIn": {
                defaultDuration: 900,
                calls: [[{opacity: [1, 0], translateY: [0, -20], translateZ: 0}]]
            },
            "transition.slideDownOut": {
                defaultDuration: 900,
                calls: [[{opacity: [0, 1], translateY: 20, translateZ: 0}]],
                reset: {translateY: 0}
            },
            "transition.slideLeftIn": {
                defaultDuration: 1e3,
                calls: [[{opacity: [1, 0], translateX: [0, -20], translateZ: 0}]]
            },
            "transition.slideLeftOut": {
                defaultDuration: 1050,
                calls: [[{opacity: [0, 1], translateX: -20, translateZ: 0}]],
                reset: {translateX: 0}
            },
            "transition.slideRightIn": {
                defaultDuration: 1e3,
                calls: [[{opacity: [1, 0], translateX: [0, 20], translateZ: 0}]]
            },
            "transition.slideRightOut": {
                defaultDuration: 1050,
                calls: [[{opacity: [0, 1], translateX: 20, translateZ: 0}]],
                reset: {translateX: 0}
            },
            "transition.slideUpBigIn": {
                defaultDuration: 850,
                calls: [[{opacity: [1, 0], translateY: [0, 75], translateZ: 0}]]
            },
            "transition.slideUpBigOut": {
                defaultDuration: 800,
                calls: [[{opacity: [0, 1], translateY: -75, translateZ: 0}]],
                reset: {translateY: 0}
            },
            "transition.slideDownBigIn": {
                defaultDuration: 850,
                calls: [[{opacity: [1, 0], translateY: [0, -75], translateZ: 0}]]
            },
            "transition.slideDownBigOut": {
                defaultDuration: 800,
                calls: [[{opacity: [0, 1], translateY: 75, translateZ: 0}]],
                reset: {translateY: 0}
            },
            "transition.slideLeftBigIn": {
                defaultDuration: 800,
                calls: [[{opacity: [1, 0], translateX: [0, -75], translateZ: 0}]]
            },
            "transition.slideLeftBigOut": {
                defaultDuration: 750,
                calls: [[{opacity: [0, 1], translateX: -75, translateZ: 0}]],
                reset: {translateX: 0}
            },
            "transition.slideRightBigIn": {
                defaultDuration: 800,
                calls: [[{opacity: [1, 0], translateX: [0, 75], translateZ: 0}]]
            },
            "transition.slideRightBigOut": {
                defaultDuration: 750,
                calls: [[{opacity: [0, 1], translateX: 75, translateZ: 0}]],
                reset: {translateX: 0}
            },
            "transition.perspectiveUpIn": {
                defaultDuration: 800,
                calls: [[{
                    opacity: [1, 0],
                    transformPerspective: [800, 800],
                    transformOriginX: [0, 0],
                    transformOriginY: ["100%", "100%"],
                    rotateX: [0, -180]
                }]],
                reset: {transformPerspective: 0, transformOriginX: "50%", transformOriginY: "50%"}
            },
            "transition.perspectiveUpOut": {
                defaultDuration: 850,
                calls: [[{
                    opacity: [0, 1],
                    transformPerspective: [800, 800],
                    transformOriginX: [0, 0],
                    transformOriginY: ["100%", "100%"],
                    rotateX: -180
                }]],
                reset: {transformPerspective: 0, transformOriginX: "50%", transformOriginY: "50%", rotateX: 0}
            },
            "transition.perspectiveDownIn": {
                defaultDuration: 800,
                calls: [[{
                    opacity: [1, 0],
                    transformPerspective: [800, 800],
                    transformOriginX: [0, 0],
                    transformOriginY: [0, 0],
                    rotateX: [0, 180]
                }]],
                reset: {transformPerspective: 0, transformOriginX: "50%", transformOriginY: "50%"}
            },
            "transition.perspectiveDownOut": {
                defaultDuration: 850,
                calls: [[{
                    opacity: [0, 1],
                    transformPerspective: [800, 800],
                    transformOriginX: [0, 0],
                    transformOriginY: [0, 0],
                    rotateX: 180
                }]],
                reset: {transformPerspective: 0, transformOriginX: "50%", transformOriginY: "50%", rotateX: 0}
            },
            "transition.perspectiveLeftIn": {
                defaultDuration: 950,
                calls: [[{
                    opacity: [1, 0],
                    transformPerspective: [2e3, 2e3],
                    transformOriginX: [0, 0],
                    transformOriginY: [0, 0],
                    rotateY: [0, -180]
                }]],
                reset: {transformPerspective: 0, transformOriginX: "50%", transformOriginY: "50%"}
            },
            "transition.perspectiveLeftOut": {
                defaultDuration: 950,
                calls: [[{
                    opacity: [0, 1],
                    transformPerspective: [2e3, 2e3],
                    transformOriginX: [0, 0],
                    transformOriginY: [0, 0],
                    rotateY: -180
                }]],
                reset: {transformPerspective: 0, transformOriginX: "50%", transformOriginY: "50%", rotateY: 0}
            },
            "transition.perspectiveRightIn": {
                defaultDuration: 950,
                calls: [[{
                    opacity: [1, 0],
                    transformPerspective: [2e3, 2e3],
                    transformOriginX: ["100%", "100%"],
                    transformOriginY: [0, 0],
                    rotateY: [0, 180]
                }]],
                reset: {transformPerspective: 0, transformOriginX: "50%", transformOriginY: "50%"}
            },
            "transition.perspectiveRightOut": {
                defaultDuration: 950,
                calls: [[{
                    opacity: [0, 1],
                    transformPerspective: [2e3, 2e3],
                    transformOriginX: ["100%", "100%"],
                    transformOriginY: [0, 0],
                    rotateY: 180
                }]],
                reset: {transformPerspective: 0, transformOriginX: "50%", transformOriginY: "50%", rotateY: 0}
            }
        };
        for (u in i.RegisterEffect.packagedEffects)i.RegisterEffect.packagedEffects.hasOwnProperty(u) && i.RegisterEffect(u, i.RegisterEffect.packagedEffects[u]);
        i.RunSequence = function (n) {
            var t = r.extend(!0, [], n);
            t.length > 1 && (r.each(t.reverse(), function (n, u) {
                var f = t[n + 1];
                if (f) {
                    var s = u.o || u.options, e = f.o || f.options, h = s && s.sequenceQueue === !1 ? "begin" : "complete", c = e && e[h], o = {};
                    o[h] = function () {
                        var n = f.e || f.elements, t = n.nodeType ? [n] : n;
                        c && c.call(t, t);
                        i(u)
                    };
                    f.o ? f.o = r.extend({}, e, o) : f.options = r.extend({}, e, o)
                }
            }), t.reverse());
            i(t[0])
        }
    }(window.jQuery || window.Zepto || window, window, window ? window.document : undefined)
});
var PromotionMotion = function (n) {
    function e() {
        return n.get(SearchServiceUrl + "api2/Data/Get?categoryId=" + catId + "&ip=" + ip + "&forPromotionCenter=true&incredibleOnly=true", function (n) {
            (n.responses[0] || !n.responses[0].hits.hits.length) && n.responses[0].hits.hits.forEach(function (n) {
                images.push(FileServerUrl + n._source.ProductImagePath.replace("/Original/", "/64/"))
            })
        })
    }

    function o(i) {
        t = i;
        n(t.selector).removeClass("promo--hidden");
        s();
        h()
    }

    function s() {
        n(t.selector).on("click", function () {
            window.location = "/special-offer"
        })
    }

    function h() {
        for (var e, r = images.slice(0), o = "", u = 0; u < 3; u++)e = r[Math.floor(Math.random() * r.length)], o += i.template({
            source: e,
            index: u
        }), r.splice(r.indexOf(e), 1);
        for (f("promo__list--right").append(o).appendTo(n(t.selector)), o = "", u = 0; u < 3; u++)e = r[Math.floor(Math.random() * r.length)], o += i.template({
            source: e,
            index: u
        }), r.splice(r.indexOf(e), 1);
        f("promo__list--left").append(o).appendTo(n(t.selector));
        c()
    }

    function c() {
        n(".promo__item").wrap('<div class="_wrapper">').velocity("transition.whirlIn", {
            stagger: 100,
            duration: 400,
            complete: function () {
                n(".promo__item img").velocity({opacity: 1}, 500)
            }
        });
        setTimeout(function () {
            n(".promo__item").each(function (n, t) {
                u(t)
            })
        }, 2e3)
    }

    function u(i) {
        setTimeout(function () {
            var t = r[Math.floor(Math.random() * r.length)];
            n(i).velocity(t.start, {
                drag: !0, duration: t.startDuration, complete: function () {
                    n(i).find("img").attr("src", images[Math.floor(Math.random() * images.length)]);
                    n(i).velocity(t.end, {
                        drag: !0, duration: t.end, complete: function () {
                            setTimeout(function () {
                                u(i)
                            }, 2e3)
                        }
                    })
                }
            })
        }, Math.floor(Math.random() * (t.max - t.min + 1)) + t.min)
    }

    function f(t) {
        var i = document.createElement("div");
        return t && (i.className = t), n(i)
    }

    images = [];
    var i = "<div class='promo__item' data-index='${index}'><span class='_inner'><img  src='${source.replace('/Original/', '/64/')}' /><\/span><\/div>", t = null, r = [{
        start: "transition.bounceDownOut",
        startDuration: 1e3,
        end: "transition.slideUpBigIn",
        endDuration: 100
    }, {
        start: "transition.flipXOut",
        startDuration: 500,
        end: "transition.flipXIn",
        endDuration: 300
    }, {
        start: "transition.fadeOut",
        startDuration: 600,
        end: "transition.fadeIn",
        endDuration: 300
    }, {start: "transition.shrinkOut", startDuration: 600, end: "transition.shrinkIn", endDuration: 400}];
    return {init: o, get: e}
}(jQuery);
$(function () {
    Number(catId) == 0 && PromotionMotion.get().done(function (n) {
        n.responses.length && (n.responses[0].hits.hits.length ? (n.responses[0].hits.hits.length > 10 && PromotionMotion.init({
            selector: "div.promo",
            minTimeOutDuration: 500,
            maxTimeOutDuration: 1500
        }), n.responses[0].hits.hits.length = 10, showIncredible(n.responses[0].hits.hits), $("[data-ads-placement-type]").filter(function (n, t) {
            return !$(t).data().hasOwnProperty("isInViewport")
        }).isInViewport(function () {
        })) : $("#amazingoffer").hide(), showDigiMag(n.responses[1].hits.hits))
    }).fail(function (n) {
        $("#amazingoffer").hide();
        console.error(n)
    })
})