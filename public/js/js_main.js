function triggerEvent(n, t) {
    t = typeof t != "undefined" ? t : document;
    t.dispatchEvent(n)
}
function removeProduct(n) {
    triggerEvent(removeFromCart);
    trackCartLocalStorage("trackCart", {sku: n}, "REMOVE")
}
function trackCartLocalStorage(n, t, i) {
    var r = {};
    localStorage.getItem(n) === null ? (r[t.sku] = t, localStorage.setItem(n, JSON.stringify(r))) : i == "ADD" ? (r = JSON.parse(localStorage.getItem(n)), r[t.sku] = t, localStorage.setItem(n, JSON.stringify(r))) : i == "REMOVE" && (r = JSON.parse(localStorage.getItem(n)), delete r[t.sku], localStorage.setItem(n, JSON.stringify(r)))
}
function containsArray(n, t) {
    for (var i = 0; i < n.length; i++)if (n[i] === t)return !0;
    return !1
}
function resizeStuff() {
    pageManager();
    typeof detailPageManager == "function" && detailPageManager();
    typeof comparePageManager == "function" && comparePageManager()
}
function searchAutoComplete() {
    $("#SearchBox").autocomplete({
        select: function (n, t) {
            var r = !1, i;
            (t.item.hasOwnProperty("CategoryUrlCode") && (r = !0), i = t.item.Keyword.trim(), i = CheckForPotentiallyDangerous(i).trim(), i != "") && (i.substr(-1) == "." && (i = i.substring(0, i.length - 1)), window.location.href = r ? "/Search/" + (/^Category/.test(t.item.CategoryUrlCode) || /^category/.test(t.item.CategoryUrlCode) ? "" : "Category-") + t.item.CategoryUrlCode + "?q=" + i.toLowerCase() : "/Search?q=" + i.toLowerCase())
        }, focus: function (n, t) {
            return t.item.hasOwnProperty("CategoryUrlCode") || t.item.hasOwnProperty("Septator") || (this.value = t.item.Keyword), !1
        }, open: function () {
            $(".overlay_search").length || ($('<div class="overlay_search"><\/div>').appendTo(document.body).fadeIn(400), $("#SearchBox").addClass("search-box-focus"), $("#btnSearch").addClass("search-box-focus-btn"));
            $(this).autocomplete("widget").css({
                width: $(this).width() + 60 + "px",
                left: $(this).offset().left - 41 + "px"
            })
        }, close: function () {
            $(".overlay_search").length && ($(".overlay_search").fadeOut(400).remove(), $("#SearchBox").removeClass("search-box-focus"), $("#btnSearch").removeClass("search-box-focus-btn"))
        }, source: function (n, t) {
            $.get(iDkConfig.AutoCompleteUrl + "?term=" + n.term, function (n) {
                n && (n = n.CategoryResult.concat([{Septator: !0}], n.KeywordResult), t(n))
            })
        }, minLength: 2
    });
    $("#SearchBox").length && ($("#SearchBox").autocomplete().data("uiAutocomplete")._renderItem = function (n, t) {
        var i, r, e, u, f;
        return t.Septator == !0 ? $("<li class='item seprator'><\/li>").appendTo(n) : (term = this.term.trim(), i = !1, hasUnicode(term) && (t.Keyword != this.term.trim() ? (tempTerm = function (n, t) {
                    var i = new RegExp(/\s/);
                    return i.test(n) ? n.substring(n.indexOf(t), n.indexOf(" ", n.indexOf(t) + t.length)) : n
                }(t.Keyword, this.term.trim()), i = this.term.trim() === tempTerm ? !1 : !0) : i = !1), i ? (r = tempTerm.length - 1, e = ["ا", "آ", "د", "ذ", "ر", "ز", "ژ", "و", "ء"], u = tempTerm[r] != "ی" && tempTerm[r] != "ي" || containsArray(e, tempTerm[r - 1]) ? String(t.Keyword).replace(new RegExp(term || t.Keyword, "gi"), "<span class='state-highlight'>$&‍<\/span>") : String(t.Keyword).replace(new RegExp(term || t.Keyword, "gi"), "<span class='state-highlight'>$&‍<\/span>‍")) : u = String(t.Keyword).replace(new RegExp(term || t.Keyword, "gi"), "<span class='state-highlight'>$&<\/span>"), f = t.hasOwnProperty("CategoryTitle"), $("<li class='item  " + (f ? "isCategory" : "") + " '><\/li>").data("item.autocomplete", t).append("<span><span class='item__title' >" + u + "<\/span>" + (f ? ' <span class="item__category-seprator">در گروه<\/span> <span class="item__category">' + t.CategoryTitle + "<\/span>" : "<\/span>")).appendTo(n))
    })
}
function hasUnicode(n) {
    for (var t = 0; t < n.length; t++)if (n.charCodeAt(t) > 127)return !0;
    return !1
}
function checkSubscribeTextBox() {
}
function saveClickedElement(n, t, i) {
    var r = {CategoryTitle: n, ElementId: t, ElementType: i};
    webApi.post(enc_ClickCount, r, ClickCountCallBack, webApi.requestFailed)
}
function ClickCountCallBack() {
}
function vPoint() {
    $(".dk-validateSubscribeEmail .dk-button-labelname").html("ارسال" + vPoints);
    vPoints += ".";
    vPoints.length == 4 && (vPoints = "")
}
function validateSubscribeEmail() {
    var t = $("#subscribe-form .dk-button-container a"), n;
    if (t.attr("disabled") || t.hasClass("disabled")) {
        DkUtility.showPopup("دیجی کالا", "خبرنامه شما فعال است. شما می توانید تنظیمات  خبر نامه را از پروفایل کاربری خود تغییر دهید", 350, 200);
        return
    }
    if (n = $("#subscribe-emial").val(), n == "") {
        DkUtility.showPopup("دیجی کالا", "ایمیل خود را وارد نمائید", 300, 150);
        return
    }
    if (!DkUtility.validateEmail(n)) {
        DkUtility.showPopup("دیجی کالا", "ایمیل نا معتبر است", 300, 150);
        return
    }
    subscribeState == 0 && (subscribeState = 1, $(".dk-validateSubscribeEmail .dk-button-labelname").html("ارسال"), $("#subscribe-emial").attr("disabled", "disabled"), si = setInterval(vPoint, 1e3), webApi.post(enc_SubscribeByEmail + "?email=" + n, null, SubscribeByEmailCallBack, SubscribeByEmailrequestFailed))
}
function SubscribeByEmailCallBack(n) {
    if (n) {
        $("#subscribe-emial").val("");
        $("#subscribe-emial").css("text-align", "right");
        var t = 350, i = 150;
        n.length > 50 && (t = 400, i = 200);
        DkUtility.showPopup("دیجی کالا", n, t, i);
        clearInterval(si);
        $(".dk-validateSubscribeEmail .dk-button-labelname").html("تایید ایمیل");
        $(".dk-button blue .dk-validateSubscribeEmail").css("opacity", "1");
        $("#subscribe-emial").attr("disabled", !1)
    }
    subscribeState = 0
}
function SubscribeByEmailrequestFailed(n, t, i) {
    (n || t || i) && (DkUtility.showPopup("دیجی کالا", "دوباره تلاش کنید", 300, 150), clearInterval(si), $(".dk-validateSubscribeEmail .dk-button-labelname").html("تایید ایمیل"), $(".dk-button blue .dk-validateSubscribeEmail").css("opacity", "1"), $("#subscribe-emial").attr("disabled", !1));
    subscribeState = 0
}
function pageManager() {
    width = $(window).width();
    var n;
    width >= 1240 ? (n = 4, $("body").attr("class", "wmax")) : (n = 3, $("body").attr("class", "wmin"))
}
function loadParallaxResources(n) {
    var t = TemplateServerUrl.replace("Digikala", "") + "Handler/ResourceHandler.ashx?path=" + n;
    $.get(t, function (n) {
        $("head").append(n)
    })
}
function CheckForPotentiallyDangerous(n) {
    var r = [" ", " ", " ", " ", " ", " ", " ", "%2B", " ", " ", " ", " ", " ", " ", " ", " ", " ", " ", " "], t = ["&", "^", "*", "/", ">", "<", "'", "+", "-", "%", "=", '"', "\\", ".", "!", ")", "(", ":", "~"];
    for (i = 0; i < t.length; i++)n = n.replaceAll(t[i], r[i]);
    return n.trim()
}
function DecodePotentiallyDangerous(n) {
    return n.replaceArray([" 2b"], ["+"])
}
function eNamad() {
    $("#enamad_frame").attr("src", "http://enamad.ir/trustseal/symbol.aspx")
}
function setWiki() {
    var n, t = $(".wiki");
    t.mouseenter(function () {
        var t = $(this), i = t.children(".wikibox");
        n = setTimeout(function () {
            $(".wikibox:visible").length && $(".wikibox:visible").hide();
            i.length ? i.show() : getWiki(t)
        }, 500)
    }).mouseleave(function () {
        window.clearTimeout(n)
    })
}
function setOverLay() {
    var n = $("[rel='#overlay']"), t;
    $.browser.chrome = $.browser.webkit && !!window.chrome;
    $.browser.safari = $.browser.webkit && !window.chrome;
    n.data("events") == undefined && (t = ["sendemail", "editcart", "minicart", "popup", "3dview", "pricechart", "sizechart"], n.dkOverlay({
        onBeforeLoad: function () {
            var r, u, o, h = $("#overlay #inner"), e = getParameterByName(getTrigger().attr("data-href"), "refurl"), n = getTrigger().attr("data-href").replace("/page", ""), i = getTrigger().attr("title"), c = getTrigger().attr("data-step"), f = getTrigger().attr("data-id"), s = getTrigger().attr("data-type"), l = getTrigger().attr("data-price"), a = location.href.toLowerCase().indexOf("/search") > -1 ? !0 : !1;
            if (a && (e = location.href), t.indexOf(n) == -1)if (!isLogin() || n.indexOf("loginframe") > -1) i = "ورود به دیجی کالا", r = "515", u = "395", n = e.length ? "/Load/login/?refurl={0}".format(e) : "/Load/login/"; else switch (n) {
                case"favorite":
                    i = "اضافه به لیست مورد علاقه";
                    r = "650";
                    u = "540";
                    n = "/Load/" + n + "/itemtype-" + s + "/itemid-" + f;
                    break;
                case"notification":
                    i = "به من اطلاع بده";
                    r = "420";
                    u = "390";
                    n = "/Load/" + n + "/itemtype-" + s + "/itemid-" + f + "/itemPrice-" + l;
                    break;
                case"editaddress":
                    i = i == "" ? "ویرایش آدرس" : i;
                    r = $("body").hasClass("wmin") ? "900" : "1100";
                    u = $("body").hasClass("wmin") ? "500" : "690";
                    n = "/Load/" + n + "?itemid=" + f;
                    break;
                case"checkcartvalidation":
                    i = "تغییر شرایط در سبد کالا";
                    r = "860";
                    u = "270";
                    n = "/Load/" + n;
                    break;
                case"timescopeerrorpopup":
                    i = "تغییر شرایط در سبد کالا";
                    r = "860";
                    u = "270";
                    n = "/Load/" + n;
                    break;
                case"checkCartItemCountValidation":
                    i = "محدودیت تعداد کالا در سبد خرید";
                    r = "860";
                    u = "270";
                    n = "/Load/" + n;
                    break;
                case"checkCartItemAmountValidation":
                    i = "محدودیت در مجموع قیمت اقلام سبد";
                    r = "860";
                    u = "270";
                    n = "/Load/" + n;
                    break;
                case"checkpresaleItemValidation":
                    i = "محدودیت در سبدهای شامل پیش فروش";
                    r = "860";
                    u = "270";
                    n = "/Load/" + n
            } else switch (n) {
                case"sendemail":
                    i = "معرفی به دوستان";
                    r = "455";
                    u = "135";
                    n = "/Load/" + n + "/" + f;
                    break;
                case"editcart":
                    i = "ویرایش مشخصات محصول";
                    r = "820";
                    u = "468";
                    n = "/Load/" + n + "?itemid=" + f + "&step=" + c;
                    break;
                case"minicart":
                    i = "سبد خرید";
                    r = "300";
                    u = "390";
                    n = "/Load/" + n;
                    break;
                case"3dview":
                    i = "نمایش سه بعدی";
                    r = $(window).width() <= 1240 ? "700" : "950";
                    u = $(window).width() <= 1240 ? "500" : "600";
                    n = "/Load/" + n + "/" + f;
                    break;
                case"pricechart":
                    i = "نمودار قیمت محصول";
                    r = "980";
                    u = "603";
                    n = "/Load/" + n + "/itemId-" + f;
                    break;
                case"sizechart":
                    i = "راهنمای انتخاب";
                    r = "950";
                    u = "450";
                    n = "/Load/" + n + "/itemId-" + f
            }
            o = "<div id='header'><div id='container'><a href='#' class='close'><\/a><div id='title'>{0}<\/div><\/div><\/div><iframe class='contentWrap' src='{1}' style='width:{2}px; height:{3}px; overflow:{4}'><\/iframe>".format(i, n, r, u, !isLogin() || n.indexOf("loginframe") > -1 ? "hidden" : "visible");
            h.html(o)
        }
    }))
}
function getParameterByName(n, t) {
    t = t.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
    var r = new RegExp("[\\?&]" + t + "=([^&#]*)"), i = r.exec(n);
    return i == null ? "" : decodeURIComponent(i[1].replace(/\+/g, " "))
}
function getUrlParam(n, t, i) {
    for (var f, u = location.href.split("/"), r = 0; r < u.length; r++)u[r].match(t) && (f = r);
    return u[f].replace(i, "")
}
function mykeypress(n) {
    $("#btnSearch").click();
    n.preventDefault()
}
function getMinPrice(n) {
    try {
        return n.length == 1 ? n[0].Price : (n = n.sort(function (n, t) {
                return n.Price - t.Price
            }).filter(function (n) {
                return Number(n.Price) !== 0 && n.SellerId == sellerId
            }), n[0].Price)
    } catch (t) {
        return 0
    }
}
function initializeScroller() {
    var n = "<a class='productItem' data-id='${fields.Id[0]}' title='${fields.FaTitle[0]}' href='/Product/DKP-${fields.Id[0]}/{{if fields.ShowType[0] == 1}}${fixTextForUrl(fields.EnTitle[0])}{{else}}${fixTextForUrl(fields.FaTitle[0])}{{/if}}'><img alt='${fields.FaTitle[0]} - ${fields.EnTitle[0]}' data-flickity-lazyload='" + FileServerUrl + "${fixPath(fields.ImagePath[0], '150')}' /><img alt='${fields.FaTitle[0]} - ${fields.EnTitle[0]}' data-flickity-lazyload='" + TemplateServerUrl + "/Image/Exclusive/exclusive-blue.png' class='exclusive-list' /><b class='{{if fields.ShowType[0] == 1}}entitle{{else}}fatitle{{/if}}'>{{if fields.ShowType[0] == 1}}${fields.EnTitle[0]}{{else}}${fields.FaTitle[0]}{{/if}}<\/b>{{if fields.MinPrice[0] >= 0 && fields.ExistStatus[0] == 2}}{{if fields.MinPriceList[0]>0}}<b class='old-price'>${formatCurrency(fields.MinPriceList[0], true, '' )}<\/b>{{/if}}<span class='final-price'>{{if fields.ExistStatus[0] == 2}}${formatCurrency(fields.MinPrice[0], true, '' )} <span class='currency'>تومان<\/span>{{/if}}<\/span>{{else}}<span class='final-price' style='color:#ff6b6b;font-size: 11px;'>تمام شد!<\/span>{{/if}}<\/a>", t = "<a class='productItem' data-id='${_source.Id}' title='${_source.FaTitle}' href='/Product/DKP-${_source.Id}/{{if _source.ShowType == 1}}${fixTextForUrl(_source.EnTitle)}{{else}}${fixTextForUrl(_source.FaTitle)}{{/if}}' ><img alt='${_source.FaTitle} - ${_source.EnTitle}' data-flickity-lazyload='" + FileServerUrl + "${fixPath(_source.ImagePath, '150')}'  /><b class='{{if _source.ShowType == 1}}entitle{{else}}fatitle{{/if}}'>{{if _source.ShowType == 1}}${_source.EnTitle}{{else}}${_source.FaTitle}{{/if}}<\/b>{{if _source.MinPriceList>0}}<b class='old-price'>${formatCurrency( _source.MinPriceList, true, '' )}<\/b>{{/if}}<span class='final-price'>{{if _source.ExistStatus == 2}}${formatCurrency( _source.MinPrice, true, '' )} <span class='currency'>تومان<\/span>{{/if}}<\/span><\/a>", i = "<a class='productItem' data-scarabitem='${id}' title='${title}' href='/Product/DKP-${id}/'><img alt='${title}' data-flickity-lazyload='${image.replace('120', '150').replace('http://', '//')}' /><b class='fatitle'>${title}<\/b>{{if (msrp > 0 && msrp != price )}}<b class='old-price'>${formatCurrency( msrp, false, '' )}<\/b>{{/if}}<span class='final-price'>${formatCurrency( price, false, '' )} <span class='currency'>تومان<\/span><\/span><\/a>";
    window.CarouselList = function (n) {
        this.options = n;
        this.$element = this.options.element;
        this.pageNo = 0;
        this.busy = !1;
        this.markup = this.chooseTemplate()
    };
    CarouselList.prototype = {
        init: function () {
            this.get(this.pageNo, !1, this.options.service)
        }, get: function (n, t, i) {
            this.busy = !0;
            var r = t ? this.addSlide : this.initSlider, u = this.options.category ? "&category=" + this.options.category : "";
            $.get((i ? i : SearchServiceUrl) + this.options.query + this.options.pageNumberQuery + n + "&pageSize=" + this.options.size + u, r.bind(this))
        }, chooseTemplate: function () {
            return this.options.template ? this.options.template : this.options.isExclusive ? n : this.options.isEmarsys ? i : t
        }, createTemplate: function () {
            return $.template("listTemplate", this.markup)
        }, initSlider: function (n) {
            n = this.options.isEmarsys ? n : n instanceof Array ? n : n.hits.hits;
            this.busy = !1;
            this.chooseTemplate();
            var t = this.createTemplate(this.markup);
            this.$element.html($.tmpl(t, n));
            this.$element.closest(".scroller").removeClass("waiting");
            this.$carousel = this.$element.flickity({
                accessibility: !0,
                cellAlign: "right",
                contain: !0,
                rightToLeft: !0,
                freeScroll: !0,
                cellSelector: ".productItem",
                pageDots: !1,
                lazyLoad: 4,
                imagesLoaded: !0
            });
            this.attachEvents()
        }, getSwipeDirection: function (n) {
            return n.x > 0 ? "right" : "left"
        }, addSlide: function (n) {
            this.busy = !1;
            var t = $.tmpl(this.createTemplate(), n instanceof Array ? n : n.hits.hits);
            this.$carousel.flickity("append", t);
            setTimeout($.proxy(function () {
                this.displayLoader("remove")
            }, this), 500)
        }, displayLoader: function (n) {
            if (n == "show") {
                var t = '<span class="flickity-prev-next-button next"> <img src="' + iDkConfig.TemplateServerUrl + '/Image/Icon/vtwo/waiting.gif" style=" width: 24px;height: 24px;padding-left: 7px;padding-top: 10px; "> <\/span>';
                $(this.flkty.nextButton.element).hide();
                $(t).insertAfter($(this.flkty.nextButton.element))
            } else n == "remove" && ($(this.flkty.nextButton.element).show(), $(this.flkty.nextButton.element).next().remove())
        }, attachEvents: function () {
            _self = this;
            this.flkty = this.$carousel.data("flickity");
            this.current_index = 0;
            this.swipe_direction = null;
            this.$carousel.on("scroll.flickity", $.proxy(function (n, t) {
                (t = Math.max(0, Math.min(1, t)), t == 1 && this.options.disableAjaxLoad ? this.$element.closest(".scroller").addClass("end") : this.$element.closest(".scroller").removeClass("end"), this.busy || this.options.disableAjaxLoad) || this.flkty.selectedIndex + 6 >= this.flkty.slides.length && (this.displayLoader("show"), this.get(++this.pageNo, !0, this.options.service))
            }, this));
            this.$carousel.on("dragMove.flickity", $.proxy(function (n, t, i) {
                this.current_index = this.selectedIndex;
                this.swipe_direction = this.getSwipeDirection(i)
            }, this))
        }
    }
}
function fixPath(n, t) {
    return n.replace(/\/Original\//g, "/" + t + "/")
}
function fixTextForUrl(n) {
    var t = n.trim();
    return t.replace(/\s/g, "-").replace(/\.|\+|>|---|--|\*|%|&|:|\\|\?|:/g, "-")
}
function formatCurrency(n, t, i) {
    n = n.toString().replace(/\$|\,/g, "");
    isNaN(n) && (n = "0");
    sign = n == (n = Math.abs(n));
    n = Math.floor(n * 100 + .50000000001);
    n = Math.floor(n / (t ? 1e3 : 100)).toString();
    for (var r = 0; r < Math.floor((n.length - (1 + r)) / 3); r++)n = n.substring(0, n.length - (4 * r + 3)) + "," + n.substring(n.length - (4 * r + 3));
    return (sign ? "" : "-") + n + " " + i
}
function isUnicode(n) {
    for (var i = [], t = 0; t <= n.length; t++)if (i[t] = n.substring(t - 1, t), i[t].charCodeAt() > 255)return !0;
    return !1
}
function formatSrc(n) {
    return n.toString().replace("/Original/", "/350/")
}
function convertToMinute(n) {
    var i = parseInt(n / 60), t = parseInt(n % 60);
    return "{0}:{1}".format(i, t < 10 ? t.toString().insert(0, "0") : t)
}
function searchIn() {
    var t = $("#SearchBox"), n = $(".searchintext");
    n.text($("#ddrMainCategory option:selected").text())
}
function isLogin() {
    return cookie = $.cookie("dk-guid"), cookie != null && cookie == "true"
}
function lookUp() {
    var t, r = 447, n = $("#SearchBox").val().trim(), i;
    n = CheckForPotentiallyDangerous(n).trim();
    n == "" && $("#SearchBox").val("");
    i = "<li class='noresult'>{0}!<\/li>";
    $("#lookup .category").html("");
    $("#lookup .items").html("");
    $("#lookup .news").html("");
    $("#lookup .videos").html("");
    n.length >= 2 ? ($.ajax({
            type: "POST",
            url: SearchServiceUrl + "api2/Data/SearchByKeyword?keyword=" + n,
            dataType: "json",
            success: function (u) {
                u.responses.length && (u.responses[0].hits.total ? ($("#lookup .product .st:nth-child(1)").show(), $("#lookup .category").show(), t = "<li class='item'><a href='/Search/Category-${_source.UrlCode}'>گروه ${_source.Title}<\/a><\/li>", $.template("categoryTemplate", t), $("#lookup .category").html($.tmpl("categoryTemplate", u.responses[0].hits.hits)), $("#lookup .cont").height(r - ($("#lookup .category").outerHeight(!0) + $("#lookup .product .st:nth-child(1)").outerHeight(!0)))) : ($("#lookup .product .st:nth-child(1)").hide(), $("#lookup .category").hide(), $("#lookup .cont").height(r)), u.responses[1].hits.hits.length ? (t = "<li class='sep'><\/li><li class='item'><a href='/Product/DKP-${_source.Id}/{{if _source.ShowType == 1}}${fixTextForUrl(_source.EnTitle)}{{else}}${fixTextForUrl(_source.FaTitle)}{{/if}}/keyword-" + n + "' title='${_source.FaTitle}'><div class='desc'>{{if _source.ShowType == 1}}<p>${_source.EnTitle}<\/p><p>${_source.FaTitle}<\/p>{{else}}<p>${_source.FaTitle}<\/p><p>${_source.EnTitle}<\/p>{{/if}}<\/div><div class='img'><img src='" + FileServerUrl + "${fixPath(_source.ImagePath, '70')}' alt='${_source.FaTitle} - ${_source.EnTitle}' /><\/div><\/a><\/li>", $.template("productTemplate", t), $("#lookup .items").html($.tmpl("productTemplate", u.responses[1].hits.hits)), $("#moreproduct").attr("href", "/Search?q=" + n.toLowerCase()), $("#moreproduct").show(), $("#lookup .items > li.sep:eq(0)").remove()) : ($("#moreproduct").hide(), $("#lookup .items").html(i.format("موردی در میان کالاها یافت نشد"))), u.responses[2].hits.total ? (t = "<li class='item forced'><a href='${_source.Link}?p=${_source.Id}' title='${_source.Title}'>${_source.Title}<\/a><\/li>", $.template("newsTemplate", t), $("#lookup .news").html($.tmpl("newsTemplate", u.responses[2].hits.hits)).append("<li><a class='more rtl' href='" + iDkConfig.DigiKalaMagUrl + "?s=" + n + "'>ادامه ...<\/a><\/li>")) : $("#lookup .news").html(i.format("موردی در میان اخبار یافت نشد")), u.responses[3].hits.total ? (t = "<li class='item'><a href='${_source.VideoLinkUrl.format('" + TvFileServerUrl + "')}/'><div><p>${_source.FaTitle}<\/p><p>بازدید : ${_source.VisitCounter}<\/p><\/div><img src='" + TvFileServerUrl + "${_source.PreviewImagePath}' /><span class='mt rtl'>${convertToMinute(_source.Duration)}<\/span><\/a><\/li>", $.template("tvTemplate", t), $("#lookup .videos").html($.tmpl("tvTemplate", u.responses[3].hits.hits)).append("<li><a class='more rtl' href='" + TvFileServerUrl + "Search/" + n + "'>ادامه ...<\/a><\/li>")) : $("#lookup .videos").html(i.format("موردی در میان ویدیوها یافت نشد")), $("#lookup .product .items .item a").mouseenter(function () {
                    $(this).find(".desc").css({"background-color": "#00aec8", color: "#fff"})
                }).mouseleave(function () {
                    $(this).find(".desc").removeAttr("style")
                }))
            },
            error: function (n, t, i) {
                window.status = "Error [ " + i + " ]"
            }
        }), $("#lookup").fadeIn()) : $("#lookup").fadeOut()
}
function showNotifications(n) {
    var t = $.cookie("dk-guid");
    n && webApi.get(enc_GetNotificationList + "?userGuid=" + t, showNotificationsCallBack, webApi.requestFailed)
}
function showNotificationsCallBack(n) {
    var r = $(".profile .slides .slideItem:eq(1) .bottomspace"), t = "<ul>", i;
    if (n.length) {
        for (i = 0; i < n.length; i++)t += "<li><a class='boldtext' href='/Message/View-" + n[i].Id + "'>" + n[i].Title + "<\/a>", t += " <span class='blue rtl'>(", t += n[i].RegDateTime, t += ")<\/span>", t += "<span class='left red'>" + n[i].Status + "", t += "<a class='left delnotification' rel='" + n[i].Id + "'><\/a><\/span><\/li>";
        t += "<\/ul><a class='more' href='/Profile/Notification#tabs'>ادامه لیست<\/a>"
    } else t += "<div class='noresult'>موردی یافت نشد!<\/div>";
    r.html(t);
    $(".profile .delnotification").bind("click", function () {
        deleteNotification()
    })
}
function deleteNotification() {
    var n = $.cookie("dk-guid"), t = $(".profile .delnotification").attr("rel"), i = confirm("آیا مایل به حذف این پیغام هستید؟");
    i && webApi.get(enc_DeleteNotification + "?userGuid=" + n + "&notificationId=" + t, deleteNotificationCallBack, webApi.requestFailed)
}
function deleteNotificationCallBack() {
    showNotifications(!0)
}
function showFavorites() {
    var n = $.cookie("dk-guid");
    webApi.get(enc_GetFavoriteList + "?userGuid=" + n, showFavoritesCallBack, webApi.requestFailed)
}
function showFavoritesCallBack(n) {
    var r = $(".profile .slides .slideItem:eq(3) .bottomspace"), t = "", i;
    if (t += "<div class='orders'>", n.length) {
        for (i = 0; i < n.length; i++)t += "<a href='/Profile/Favorites/" + n[i].Id + "#tabs' class='order right'><div class='folder'>" + n[i].Title + "<\/div><\/a>";
        t += "<\/div><a class='more' href='/Profile/Favorites#tabs'>ادامه لیست<\/a>"
    } else t += "<div class='noresult'>موردی یافت نشد!<\/div>";
    r.html(t)
}
function showReviews() {
    var n = $.cookie("dk-guid");
    webApi.get(enc_GetReviewList + "?userGuid=" + n, showReviewsCallBack, webApi.requestFailed)
}
function showReviewsCallBack(n) {
    var r = $(".profile .slides .slideItem:eq(4) .bottomspace"), t = "", i;
    if (n.length) {
        for (t += "<ul>", i = 0; i < n.length; i++)t += "<li>", t += "<span><a class='rItem' href='/Review/View-" + n[i].Id + "'>" + n[i].ReviewTitle + "<\/a><\/span>", t += "<span class='left orang'>" + n[i].Status + "<\/span>", t += "<\/li>";
        t += "<\/ul><a class='more' href='/Profile/Reviews#tabs'>ادامه لیست<\/a>"
    } else t += "<div class='noresult'>موردی یافت نشد!<\/div>";
    r.html(t)
}
function showComments() {
    var n = $.cookie("dk-guid");
    webApi.get(enc_GetCommentList + "?userGuid=" + n, getCommentListCallBack, webApi.requestFailed)
}
function getCommentListCallBack(n) {
    var t = $(".profile .slides .slideItem:eq(5) .bottomspace");
    t.html(n)
}
function showDigibons() {
    var n = $.cookie("dk-guid");
    webApi.get(enc_GetDigibonList + "?userGuid=" + n, showDigibonsCallBack, webApi.requestFailed)
}
function showDigibonsCallBack(n) {
    for (var r = $(".profile .slides .slideItem:eq(6) .bottomspace"), t = "<ul>", i = 0; i < n.length; i++)t += "<li><span>", t += "<a href='/Profile/Digibons#digibon-", t += n[i].Id, t += "'>", t += n[i].Description, t += "<\/a>", t += "<\/span><span class='left w50'>", t += n[i].Status, t += "<\/span><span class='left w50'>", t += n[i].RemainingCredit, t += "<\/span><\/li>";
    t += "<\/ul><a class='more' href='/Profile/Digibons#tabs'>ادامه لیست<\/a>";
    r.html(t)
}
function showGiftCards() {
    var n = $.cookie("dk-guid");
    webApi.get(enc_GetGiftCardList + "?userGuid=" + n, showGiftCardsCallBack, webApi.requestFailed)
}
function showGiftCardsCallBack(n) {
    var r = $(".profile .slides .slideItem:eq(7) .bottomspace"), t = "", i;
    if (t += "<ul>", n.length) {
        for (i = 0; i < n.length; i++)t += "<li><span>", t += "<a href='/Profile/GiftCard#giftCard-", t += n[i].Id, t += "'>", t += n[i].ActivationCode, t += "<\/a>", t += "<\/span><span class='left w65'>" + n[i].Status + "<\/span><span class='left w65'>", t += n[i].RemainingAmount, t += "<\/span><\/li>";
        t += "<\/ul><a class='more' href='/Profile/GiftCards#tabs'>ادامه لیست<\/a>"
    } else t += "<div class='noresult'>موردی یافت نشد!<\/div>";
    r.html(t)
}
function showNotifiers() {
    var n = $.cookie("dk-guid");
    webApi.get(enc_GetNotifierList + "?userGuid=" + n, showNotifiersCallBack, webApi.requestFailed)
}
function showNotifiersCallBack(n) {
    var r = $(".profile .slides .slideItem:eq(8) .bottomspace"), t = "<ul>", i;
    if (n.length) {
        for (i = 0; i < n.length; i++)t += "<li>", t += "<a href='" + n[i].ProductLinkUrl + "'><span>" + n[i].ProductEnTitle + "<\/span><\/a>", t += "<span class='left w125'>", t += n[i].NotifierType, t += "<\/span><span class='left w125'>", t += n[i].NotifierTypeStringForSite, t += "<\/span><\/li>";
        t += "<\/ul><a class='more' href='/Profile/NotifierList#tabs'>ادامه لیست<\/a>"
    } else t = "<div class='noresult'>موردی یافت نشد!<\/div>";
    r.html(t)
}
function showOrder() {
    var n = $.cookie("dk-guid");
    webApi.get(enc_GetOrderList + "?userGuid=" + n, showOrderCallBack, webApi.requestFailed)
}
function showOrderCallBack(n) {
    var r = $(".profile .slides .slideItem:eq(2) .bottomspace"), t = "", i;
    if (n.length) {
        for (t = "<ul>", i = 0; i < n.length; i++)t += "<li>", t += "<a href='/Profile/Orders#order-", t += n[i].Id, t += "'><span class='boldtext'>DKC-", t += n[i].CartId, t += "<\/span><\/a> <span class='blue rtl'>(", t += n[i].DateTime, t += ")<\/span><span class='left orang'>", t += n[i].Status, t += n[i].PaymentType ? "<a class='left pay' href=\"/CheckOut/DKC-" + n[i].CartId + "/ps-" + n[i].PaymentType + '"><\/a>' : "<span class='left pay' style='background:none;display:inline-block'><\/span>", t += "<\/span><\/li>";
        t += "<\/ul><a class='more' href='/Profile/Orders#tabs'>ادامه لیست<\/a>"
    } else t += "<div class='noresult'>موردی یافت نشد!<\/div>";
    r.html(t)
}
function getWiki(n) {
    wikiObj = n;
    var t = $("#quickInfo").html("<div class='info_arrow_top_border'><\/div><div class='info_arrow_top'><\/div><div class='loading'><\/div>").css("width", "100").show();
    $(".quickview.force").remove();
    quickViewTruePosition(n, t);
    webApi.get(ecn_getWiki + "?id=" + n.attr("data-id"), getWikiCallBack, webApi.requestFailed)
}
function getWikiCallBack(n) {
    var i = $("#quickInfo").html("<div class='info_arrow_top_border'><\/div><div class='info_arrow_top'><\/div><div class='loading'><\/div>").css("width", "100").show(), t, f;
    if (n) {
        t = "";
        t += "<div class='wikibox'><div class='wikibody'><div class='head'><div class='logo right'><img src='";
        t += n.LogoPhysicalImageAddress;
        t += "' /><div class='title rtl' style='background:none'>";
        n.Link ? (t += "<a href='", t += n.Link, t += "'>", t += n.Title, t += "<\/a>") : t += n.Title;
        t += "<\/div><\/div><div class='wimg'>";
        n.ImagePath.Length != 0 && (t += "<img src='", t += n.ImagePhysicalImageAddress, t += "' />");
        t += "<\/div><\/div><div class='desc rtl'>";
        t += n.Description.replace("\r\n", "<br />");
        t += "<\/div><div class='more'>";
        n.Link && (t += "<a href='", t += n.Link, t += "' class='rtl' >ادامه ...<\/a>");
        t += "<\/div><a href='#' class='wikiclose'><\/a><\/div><\/div>";
        i.removeAttr("style").css("width", "auto").find(".loading").replaceWith(t);
        quickViewTruePosition(wikiObj, i);
        $(".wikiclose").bind("click", function (n) {
            $(this).closest("#quickInfo").hide();
            n.preventDefault()
        });
        var r = $(window).height(), e = i.offset().top - $(window).scrollTop(), u = e + i.height();
        u > r && (f = u - r + $(window).scrollTop() + 10, $("html:not(:animated),body:not(:animated)").animate({scrollTop: f}, 300))
    }
}
function quickViewTruePosition(n, t) {
    var i = n.offset().top + 25, r = n.closest("article"), f = $("body").width() - n.offset().left, u = n.width() / 2 - 10.5;
    f < t.width() ? (r.attr("id") == "items" && (i += 37), t.css({
            top: i,
            right: 5
        }), t.children(".info_arrow_top, .info_arrow_top_border").css("left", n.offset().left - t.offset().left + 7.5), n.is(".wiki") && t.children(".info_arrow_top, .info_arrow_top_border").css("left", n.offset().left - t.offset().left + u)) : r.hasClass("verticalbox") ? (t.css({
                top: i + 2,
                left: n.offset().left - 20
            }), t.children(".info_arrow_top, .info_arrow_top_border").css("left", 22)) : r.hasClass("horizontalbox") || r.attr("id") == "relatedproducts" ? (t.css({
                    top: i,
                    left: n.offset().left - 7
                }), t.children(".info_arrow_top, .info_arrow_top_border").css("left", 14)) : r.attr("id") == "items" ? (t.css({
                        top: i + 37,
                        left: n.offset().left - 7
                    }), t.children(".info_arrow_top, .info_arrow_top_border").css("left", 15.5)) : n.is(".wiki") && (t.css({
                        top: i + 5,
                        left: n.offset().left - 7
                    }), t.children(".info_arrow_top, .info_arrow_top_border").css("left", n.offset().left - t.offset().left + u))
}
function showPictureDialog() {
    return !1
}
var addToCart = new CustomEvent("addToCart"), removeFromCart = new CustomEvent("removeFromCart"), mySuccessHandler, vPoints, si, subscribeState, flag, wikiObj;
$(function () {
    $(document).on("addToCart", function () {
        if ($("#product-page").length) {
            var n = {};
            n.sku = ecpd2.id;
            n.name = ecpd2.title;
            n.category = ecpd2.category.id;
            n.unitPrice = ecpd2.sellers[0].price.current;
            n.quiantity = 1;
            n.currency = "تومان";
            trackCartLocalStorage("trackCart", n, "ADD")
        }
    })
});
var page, width, menu, root, cookie, TO = !1, oldValue = "", onSetTimeout = 0;
$(window).resize(function () {
    TO !== !1 && clearTimeout(TO);
    TO = setTimeout(resizeStuff, 100);
    $("#quickInfo").hide()
});
$(document).ready(function () {
    function w() {
        $(this).addClass("current").find(".sl").addClass("nav-hover")
    }

    function b() {
        $(this).removeClass("current").find(".sl").removeClass("nav-hover")
    }

    var l, a, n, i, r, t, y;
    if (document.addEventListener("addToCart", function () {
        }), document.addEventListener("removeFromCart", function () {
        }), width = $(window).width(), menu = $("#menu"), pageManager(), initializeScroller(), newSearchPopup && searchAutoComplete(), $(".profile .tabs p:eq(1)").click(function () {
            showNotifications(!0)
        }), $(".profile .tabs p:eq(2)").click(function () {
            showOrder()
        }), $(".profile .tabs p:eq(3)").click(function () {
            showFavorites()
        }), $(".profile .tabs p:eq(4)").click(function () {
            showReviews()
        }), $(".profile .tabs p:eq(5)").click(function () {
            showComments()
        }), $(".profile .tabs p:eq(6)").click(function () {
            showDigibons()
        }), $(".profile .tabs p:eq(7)").click(function () {
            showGiftCards()
        }), $(".profile .tabs p:eq(8)").click(function () {
            showNotifiers()
        }), l = $(".navigation .l_one"), a = $(".navigation .l_one .l_two"), l.hoverIntent({
            over: w,
            timeout: 500,
            interval: 200,
            out: b
        }), a.mouseenter(function () {
            $(this).parent(".sl").find("li.current").removeClass("current");
            $(this).addClass("current")
        }).mouseleave(function () {
            var n = $(this);
            setTimeout(function () {
                n.removeClass("current")
            }, 200)
        }), /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini|Windows Phone/i.test(navigator.userAgent) && $(".navigation .l_two > a").click(function (n) {
            n.preventDefault()
        }), n = $(".group .mscroll"), n.length && (n.length == 2 ? (i = n.eq(1), n.eq(0).css({
                overflow: "hidden",
                height: "475",
                "margin-top": "0"
            }), n.eq(1).css({height: "450"})) : n.length == 3 ? (i = n.eq(2), n.eq(0).css({
                    overflow: "hidden",
                    height: "475",
                    "margin-top": "0"
                }), n.eq(1).css({
                    overflow: "hidden",
                    height: "450",
                    "margin-top": "0"
                }), n.eq(2).css({height: "425"})) : n.length == 4 ? (i = n.eq(3), n.eq(0).css({
                        overflow: "hidden",
                        height: "475",
                        "margin-top": "0"
                    }), n.eq(1).css({
                        overflow: "hidden",
                        height: "450",
                        "margin-top": "0"
                    }), n.eq(2).css({
                        overflow: "hidden",
                        height: "425",
                        "margin-top": "0"
                    }), n.eq(3).css({height: "400"})) : n.length == 5 ? (i = n.eq(4), n.eq(0).css({
                            overflow: "hidden",
                            height: "475",
                            "margin-top": "0"
                        }), n.eq(1).css({
                            overflow: "hidden",
                            height: "450",
                            "margin-top": "0"
                        }), n.eq(2).css({
                            overflow: "hidden",
                            height: "425",
                            "margin-top": "0"
                        }), n.eq(3).css({
                            overflow: "hidden",
                            height: "400",
                            "margin-top": "0"
                        }), n.eq(4).css({height: "375"})) : (i = n.eq(0), n.eq(0).css({
                            overflow: "",
                            height: "500",
                            "margin-top": "0"
                        }))), r = $("#menu .basedon"), r.length) {
        var u, e, f = !0, k = $("#menu").height(!0), v = $("#menu .basedon").length, s = $("#menu .searchincategory").height() + v * r.outerHeight(!0);
        r.each(function () {
            var n = $(this).next(".items").children(".scroll");
            k - s > $(this).next(".items").height() ? (u = $(this).next(".items").height(), e = u) : (u = $("#menu").height(), e = v == 1 ? u - s - 2 : u - s);
            n.height(e);
            $(this).next(".items").hide()
        });
        $("#menu .items").eq(0).show();
        r.click(function () {
            var n = $(this).next(".items");
            f && (n.is(":hidden") ? (f = !1, $("#menu .items").each(function () {
                    $(this).is(":visible") && $(this).animate({height: "toggle"}, 300).prev(".basedon").removeClass("opened")
                }), $(this).addClass("opened"), n.animate({height: "toggle"}, 300, function () {
                    f = !0
                })) : (f = !1, $(this).removeClass("opened"), n.animate({height: "toggle"}, 300, function () {
                    f = !0
                })))
        })
    }
    $(".account").click(function () {
        $.cookie("dk-guid") != null && ($(this).toggleClass("active"), $(".profile").toggleClass("hidden"))
    });
    $(".profile").dkSlider({
        speed: 0, onTabClick: function () {
            var n = $(".profile .tabs p.current");
            n.hasClass("first") ? n.parent(".tabs").css({
                    "border-left": "",
                    "border-right": "1px solid #666"
                }) : n.hasClass("last") ? n.parent(".tabs").css({
                        "border-left": "1px solid #666",
                        "border-right": ""
                    }) : n.parent(".tabs").removeAttr("style")
        }
    });
    searchIn();
    $("#ddrMainCategory").change(function () {
        searchIn()
    });
    setOverLay();
    setWiki();
    t = $("#toppanel-container").attr("data-value");
    y = $.cookie("dkNotification_" + t);
    y == null && setTimeout(function () {
        $("#toppanel-container").length && ($("#toppanel-wrapper").animate({height: 140}, 400), $("#toppanel").animate({"margin-top": 0}, 400))
    }, 1500);
    $(".closepanel").click(function () {
        $("#toppanel-wrapper").animate({height: 0}, 400);
        $.cookie("dkNotification_" + t, t, {expires: 30, path: "/"})
    });
    $(".trigger-m").toggle(function () {
        $("#toppanel-wrapper").animate({height: 140}, 400);
        $("#toppanel").animate({"margin-top": 0}, 400)
    }, function () {
        $("#toppanel-wrapper").animate({height: 0}, 400);
        $("#toppanel").animate({"margin-top": -140}, 400);
        $.cookie("dkNotification_" + t, t, {expires: 30, path: "/"})
    });
    $(function () {
        $(".color").tooltip({position: {my: "center bottom-5", at: "center top"}})
    });
    $(".parallax").length && ($("#content #pageRegion .title").remove(), loadParallaxResources("css_parallax"), loadParallaxResources("js_parallax"));
    $(".clickCount").mousedown(function (n) {
        switch (n.which) {
            case 1:
                saveClickedElement($(this).attr("categoryTitle"), $(this).attr("bannerId"), $(this).attr("elementType"));
                break;
            case 3:
                saveClickedElement($(this).attr("categoryTitle"), $(this).attr("bannerId"), $(this).attr("elementType"))
        }
    });
    $('#dk-footer .subscribe-bar .subscribe-bar-form input[type="text"]').keyup(function () {
        $(this).val() ? $(this).css("text-align", "left") : $(this).css("text-align", "right")
    });
    window.addEventListener("message", function (e) {
        if (e.origin === AccountSiteUrl.slice(0, -1)) {
            if (e.data && e.data.hasOwnProperty("code")) {
                eval(decodeURIComponent(e.data.code));
                return
            }
            if (e.data && e.data.hasOwnProperty("height")) {
                if (e.data != 0) {
                    var cw = $(".contentWrap");
                    cw.height(e.data.height)
                }
                return
            }
            document.body.scrollHeight
        }
    }, !1);
    var p = function (n, t, i, r, u, f) {
        f && o("show", f);
        $.ajax({
            type: "GET",
            url: websiteApiUrl + n,
            data: {ids: t},
            crossDomain: !0,
            contentType: "application/json; charset=utf-8",
            dataType: "json",
            xhrFields: {withCredentials: !0},
            success: function (t) {
                u && apiCache.set(n, t, 0);
                i(t)
            },
            error: function (n, t, i) {
                r(n, t, i)
            }
        })
    }, o = function (n, t) {
        var r, i, u, f;
        n == "show" && t ? (r = '<span style="position: absolute; top: 4px!important; right: 5px; "> <img src="' + iDkConfig.TemplateServerUrl + '/Image/Icon/vtwo/waiting.gif" style=" width: 12px; height: 12px; "> <\/span>', i = t.text(), t.attr("data-override", i), u = i + r, t.html(u)) : n == "hide" && ($(".menu-loader-from-remote").remove(), f = t.attr("data-override"), t.html(f))
    }, h = !1, c = [];
    $(".l_two").mouseenter(function () {
        var t, n, i;
        (h = !0, t = $(this), n = t.children("a").first(), n.nextAll().length > 0) || (o("show", n), i = setTimeout(function () {
            if (h) {
                var i = n.attr("data-title");
                p(enc_GetMenu, [i], function (i) {
                    i != null && (t.parent().addClass("nav-hover"), t.parent().parent().addClass("current"), n.after(i.Content));
                    o("hide", n)
                }, function () {
                }, !0, !1)
            }
        }, 500), c.push(i))
    });
    $(".l_two").mouseout(function () {
        var t, i, n;
        for (h = !1, t = $(this), i = t.children("a").first(), o("hide", i), n = 0; n < c.length; n++)clearTimeout(c[n])
    });
    p(enc_GetMenu, ["accessories-main", "BedandBath", "camera", "Carpet", "Cleaning", "computer-parts", "Decorative", "home-appliance", "Home-kitchen-Appliances", "laptop", "Lighting", "mobile", "office-machines", "Serving", "tablet-ebook-reader", "tools", "video-audio-entertainment"], function (n) {
        for (var i, r, t = 0; t < n.length; t++)i = n[t], r = $(".root li a'[data-title]'").filter(function () {
            return $(this).attr("data-title").toLowerCase() == i.MenuName.toLowerCase()
        }), r.length > 1 ? $.each(r, function () {
                $(this).after(i.Content)
            }) : r.after(i.Content)
    }, function () {
    }, !0);
    $("#btnSearch").click(function () {
        var t = "All", n = $("#SearchBox").val().trim();
        n = CheckForPotentiallyDangerous(n).trim();
        n == "" && $("#SearchBox").val("");
        n != "جستجوی مدل یا گروه کالا ..." && n.length >= 2 && (n.substr(-1) == "." && (n = n.substring(0, n.length - 1)), window.location.href = t == "All" ? "/Search?q=" + n.toLowerCase() : "/Search/Category-" + t + "?q=" + n.toLowerCase(), $("#lookup").hide())
    })
});
mySuccessHandler = function () {
};
vPoints = "";
subscribeState = 0;
flag = !1;
jQuery(function (n) {
    n(document).bind("mouseup", function (t) {
        var i = n(t.target);
        i.closest("#lookup").is("#lookup") || n("#lookup").fadeOut();
        i.closest("#quickInfo").is("#quickInfo") || n("#quickInfo:visible") && n("#quickInfo").hide();
        i.closest(".profile").is(".profile") || (n(".profile").addClass("hidden"), n(".account").removeClass("active"));
        i.closest(".minicart").is(".minicart") || (n(".minicart").addClass("hidden"), n(".cart").removeClass("active"));
        page == "Compare" ? i.closest("#comparelookup").is("#comparelookup") || n("#comparelookup").fadeOut() : page == "ImageCompare" && (i.closest(".comparelookup").is(".comparelookup") || n(".comparelookup").fadeOut())
    })
})