(function (n) {
    n.fn.extend({
        dkOverlay: function (t) {
            var f = {
                mask: "rgb(14,16,23)",
                opacity: .5,
                animationSpeed: 400,
                closeOnClick: !0,
                closeOnEscPress: !0,
                contentType: "html",
                onBeforeLoad: function () {
                }
            }, r = ["Shipping"], u, i, t = n.extend(f, t);
            return this.each(function () {
                function e() {
                    i && (i.fadeOut("fast").remove(), n("#mask").fadeOut(f.animationSpeed, function () {
                        setTimeout("$('#mask').remove()", 100)
                    }), n("body").css({overflow: "visible", marginRight: 0}), n("#overlay #loading").hide())
                }

                var f = t;
                n(this).click(function (t) {
                    var e, o, r;
                    t.preventDefault();
                    u = n(this);
                    i = n("<div id='overlay'><div id='inner'><\/div><\/div>");
                    e = n("<div id='loading'><img class='tl' src='" + TemplateServerUrl + "/Image/Public/vtwo/digikala-logo.png'/><img src='" + TemplateServerUrl + "/Image/Public/vtwo/overlayloading.gif'/><\/div>");
                    n("body").css({
                        "margin-right": window.innerWidth - n("body").width() + "px",
                        overflow: "hidden"
                    }).append(i);
                    f.onBeforeLoad();
                    n("#mask").length || n("body").append("<div id='mask'><\/div>");
                    o = i.children("#inner");
                    r = o.children("iframe");
                    i.css({
                        left: n(window).width() / 2 - r.width() / 2,
                        top: n(window).scrollTop() + (n(window).height() / 2 - r.height() / 2)
                    });
                    e.css({
                        top: (r.height() + n("#overlay #inner #header #container").outerHeight(!0)) / 2 - 50,
                        left: r.width() / 2 - 120
                    });
                    i.append(e);
                    r.load(function () {
                        o.css({visibility: "visible", "line-height": "0"});
                        e.remove()
                    });
                    n("#mask").hide().css({"background-color": f.mask, opacity: f.opacity}).fadeIn("slow");
                    i.fadeIn(f.animationSpeed)
                });
                n(this).keypress(function (n) {
                    n.keyCode == 13 && n.preventDefault()
                });
                getTrigger = function () {
                    return u
                };
                n(".close").live("click", function (n) {
                    n.preventDefault();
                    e()
                });
                f.closeOnClick && n("#mask").live("click", function (n) {
                    for (var t = 0; t < r.length; t++)if (window.location.toString().indexOf(r[t]) > -1)return;
                    n.preventDefault();
                    e()
                });
                f.closeOnEscPress && n(document).keyup(function (n) {
                    n.keyCode == 27 && e()
                })
            })
        }
    })
})(jQuery), function (n) {
    n.fn.hoverIntent = function (t, i) {
        var r = {sensitivity: 7, interval: 100, timeout: 0};
        r = n.extend(r, i ? {over: t, out: i} : t);
        var u, f, e, o, s = function (n) {
            u = n.pageX;
            f = n.pageY
        }, h = function (t, i) {
            if (i.hoverIntent_t = clearTimeout(i.hoverIntent_t), Math.abs(e - u) + Math.abs(o - f) < r.sensitivity)return n(i).unbind("mousemove", s), i.hoverIntent_s = 1, r.over.apply(i, [t]);
            e = u;
            o = f;
            i.hoverIntent_t = setTimeout(function () {
                h(t, i)
            }, r.interval)
        }, l = function (n, t) {
            return t.hoverIntent_t = clearTimeout(t.hoverIntent_t), t.hoverIntent_s = 0, r.out.apply(t, [n])
        }, c = function (t) {
            var u = jQuery.extend({}, t), i = this;
            i.hoverIntent_t && (i.hoverIntent_t = clearTimeout(i.hoverIntent_t));
            t.type == "mouseenter" ? (e = u.pageX, o = u.pageY, n(i).bind("mousemove", s), i.hoverIntent_s != 1 && (i.hoverIntent_t = setTimeout(function () {
                    h(u, i)
                }, r.interval))) : (n(i).unbind("mousemove", s), i.hoverIntent_s == 1 && (i.hoverIntent_t = setTimeout(function () {
                    l(u, i)
                }, r.timeout)))
        };
        return this.bind("mouseenter", c).bind("mouseleave", c)
    }
}(jQuery), function (n, t, i) {
    function f(n) {
        return n
    }

    function e(n) {
        return decodeURIComponent(n.replace(u, " "))
    }

    var u = /\+/g, r = n.cookie = function (u, o, s) {
        var p, c, l, a, h, w, v, y;
        if (o !== i)return s = n.extend({}, r.defaults, s), o === null && (s.expires = -1), typeof s.expires == "number" && (p = s.expires, c = s.expires = new Date, c.setDate(c.getDate() + p)), o = r.json ? JSON.stringify(o) : String(o), t.cookie = [encodeURIComponent(u), "=", r.raw ? o : encodeURIComponent(o), s.expires ? "; expires=" + s.expires.toUTCString() : "", s.path ? "; path=" + s.path : "", s.domain ? "; domain=" + s.domain : "", s.secure ? "; secure" : ""].join("");
        for (l = r.raw ? f : e, a = t.cookie.split("; "), h = 0, w = a.length; h < w; h++)if (v = a[h].split("="), l(v.shift()) === u)return y = l(v.join("=")), r.json ? JSON.parse(y) : y;
        return null
    };
    r.defaults = {};
    n.removeCookie = function (t, i) {
        return n.cookie(t) !== null ? (n.cookie(t, null, i), !0) : !1
    }
}(jQuery, document), function (n) {
    n.fn.extend({
        dkSlider: function (t) {
            var i = {
                autoplay: !1,
                speed: "slow",
                interval: 5e3,
                event: "click",
                carouselMode: null,
                carouselAmount: 100,
                onTabClick: function () {
                }
            }, t = n.extend(i, t);
            return this.each(function () {
                function c() {
                    var f = b - i.width(), r = n._data(document.querySelector("#amazingoffer .item"), "events");
                    if (u != 0)if (Math.abs(u) > f) {
                        if (y.addClass("disabled"), v.removeClass("disabled"), s.off("swiperight"), r.swipeleft == undefined) s.on("swipeleft", function () {
                            u += t.carouselAmount;
                            h.animate({right: u});
                            c()
                        })
                    } else {
                        if (y.removeClass("disabled"), v.removeClass("disabled"), r.swiperight == undefined) s.on("swiperight", function () {
                            u += -t.carouselAmount;
                            h.animate({right: u});
                            c()
                        });
                        if (r.swipeleft == undefined) s.on("swipeleft", function () {
                            u += t.carouselAmount;
                            h.animate({right: u});
                            c()
                        })
                    } else y.removeClass("disabled"), v.addClass("disabled"), s.off("swipeleft")
                }

                function l() {
                    p();
                    clearTimeout(e);
                    e = setTimeout(l, f.interval)
                }

                function p() {
                    a.length > 1 && (n(".current", i).removeClass("current"), o.addClass("current"), r = n(".tabItem", i).index(o), n(".slideItem:visible", i).stop(!0, !0).fadeOut(f.speed), n(".slideItem:eq(" + n(".tabItem", i).index(o) + ")", i).stop(!0, !0).fadeIn(f.speed), r != a.length - 1 ? r += 1 : r = 0, o = n(".tabItem:eq(" + r + ")", i), f.onTabClick())
                }

                function nt() {
                    clearTimeout(e);
                    w = !1
                }

                function tt() {
                    w || (w = !1, e = setTimeout(l, f.interval))
                }

                var r, e, o, w = !0, f = t, i = n(this), s = n(".item", i), a = n(".tabItem", i), h = n(".tabs", i), k = n(".slideItem", i), d = n(".backward", i), g = n(".forward", i), v = n(".prev", i), y = n(".next", i), u = 0, b = 0;
                n(".tabItem:eq(0)", i).addClass("current");
                n(".slideItem", i).hide();
                n(".slideItem:eq(0)", i).show();
                f.autoplay && (r = n(".current", i).index() + 1, o = n(".tabItem:eq(" + r + ")", i), e = setTimeout(l, f.interval));
                a.on(f.event, function (t) {
                    n(this).hasClass("current") || (o = n(this), p(), f.autoplay && (clearTimeout(e), e = setTimeout(l, f.interval)), t.preventDefault())
                });
                if (s.swiperight(function () {
                        u += -t.carouselAmount;
                        h.animate({right: u});
                        c()
                    }), s.swipeleft(function () {
                        u += t.carouselAmount;
                        h.animate({right: u});
                        c()
                    }), t.carouselMode == "partial") {
                    s.find("span.title").each(function () {
                        b += n(this).outerWidth(!0) + 30
                    });
                    h.css("right", u);
                    c();
                    y.on("click", function (n) {
                        u += -t.carouselAmount;
                        h.animate({right: u});
                        c();
                        n.preventDefault()
                    });
                    v.on("click", function (n) {
                        u += t.carouselAmount;
                        h.animate({right: u});
                        c();
                        n.preventDefault()
                    })
                }
                g.click(function (t) {
                    r == undefined && (r = 1);
                    o = n(".tabItem:eq(" + r + ")", i);
                    p();
                    f.autoplay && (clearTimeout(e), e = setTimeout(l, f.interval));
                    t.preventDefault()
                });
                d.click(function (t) {
                    r == 1 || r == undefined ? r = a.length - 1 : r == 0 ? r = a.length - 2 : r -= 2;
                    o = n(".tabItem:eq(" + r + ")", i);
                    p();
                    f.autoplay && (clearTimeout(e), e = setTimeout(l, f.interval));
                    t.preventDefault()
                });
                f.autoplay && k.mouseenter(function () {
                    nt()
                }).mouseleave(function () {
                    tt()
                })
            })
        }
    })
}(jQuery), function (n) {
    n.fn.extend({
        dkScroller: function (t) {
            var i = {
                mode: null,
                isExclusive: !1,
                carouselMode: "",
                carouselNum: null,
                height: "",
                containerHeight: "",
                autoplay: !1,
                sortable: !1,
                speed: "slow",
                displayButtons: !0,
                buttonsHeight: 0,
                padding: [0, 0],
                paddingTopBottom: [0, 0],
                margin: [0, 0],
                borderWidth: 0,
                itemsCount: 5,
                ajaxCall: !1,
                startIndex: 15,
                serviceUrl: "",
                markup: "",
                isBrandLandingPage: !1,
                afterScrollerLoad: function () {
                }
            }, t = n.extend(i, t);
            return this.each(function () {
                function p() {
                    u.css("visibility", "hidden");
                    f.css("visibility", "hidden")
                }

                function w() {
                    e.css({
                        width: y,
                        "padding-left": i.padding[0],
                        "padding-right": i.padding[1],
                        "padding-top": i.paddingTopBottom[0],
                        "padding-bottom": i.paddingTopBottom[1],
                        "margin-left": i.margin[0],
                        "margin-right": i.margin[1]
                    });
                    for (var n = 0; n <= e.length; n++)e.eq(n).css("background", ""), n % i.itemsCount == 0 ? e.eq(n - 1).css("background", "none") : n == e.length && e.eq(n - 1).css("background", "none");
                    k(!0)
                }

                function a() {
                    if (o != 0) {
                        var n = o / e.outerWidth();
                        n < e.length && e.length - n > i.itemsCount ? (u.removeClass("disabled"), f.removeClass("disabled")) : (u.addClass("disabled"), f.removeClass("disabled"), i.ajaxCall && b())
                    } else e.length <= i.itemsCount ? (u.addClass("disabled"), f.addClass("disabled")) : (u.removeClass("disabled"), f.addClass("disabled"))
                }

                function b() {
                    var f = r.closest("article").attr("data-category"), t = "", o;
                    i.isExclusive ? (o = r.closest("article").attr("data-exclusive"), t = "?collectionId=" + o + ("&pageIndex=" + c + "&pageSize=5")) : (r.closest("article").attr("data-sort") == "LastPeriodLikeCounter" ? i.serviceUrl = SearchServiceUrl + "api2/Data/GetTopFavoriteList" : r.closest("article").attr("data-sort") == "LastPeriodSaleCounter" ? i.serviceUrl = SearchServiceUrl + "api2/Data/GetTopSellList" : r.closest("article").attr("data-sort") == "Id" ? i.serviceUrl = SearchServiceUrl + "api2/Data/GetTopNewList" : r.closest("article").attr("data-sort") == "brandLanding" ? (i.serviceUrl = SearchServiceUrl + "api/search/", i.isBrandLandingPage = !0) : i.serviceUrl = SearchServiceUrl + "api2/Data/GetTopMostViewedList", f != undefined && (t += (t == "" ? "?" : "&") + "category=" + f + (i.isBrandLandingPage ? "&brand=18&sortBy=" + r.closest("article").data("sortid") : "")), t += (t == "" ? "?" : "&") + "pageno=" + c + "&pageSize=5&notCategory=C6960");
                    n.ajax({
                        type: "GET", url: i.serviceUrl + t, dataType: "json", success: function (t) {
                            t.hits.hits.length ? (c++, n.template("itemsTemplate", i.markup), h.append(n.tmpl("itemsTemplate", t.hits.hits)), e = n(".productItem", r), w(), i.afterScrollerLoad(), h.queue(function () {
                                    u.removeClass("disabled");
                                    n(this).dequeue()
                                })) : u.addClass("disabled")
                        }, error: function (n, t, i) {
                            window.status = "Error [ " + i + " ]"
                        }
                    })
                }

                function k(n) {
                    n ? (r.children(".center").remove(), l.fadeIn(), u.show(), f.show(), v.show()) : (l.addClass("hidden"), u.hide(), f.hide(), v.hide(), r.append("<div class='center rtl' style='height:" + i.height + "px;position:relative'><img src='" + TemplateServerUrl + "Image/Icon/vtwo/waiting.gif' width='110' height='110' alt='لطفاً چند لحظه صبر نمایید ...' style='position:absolute;top:" + (i.height / 2 - 16) + "px' /><\/div>"))
                }

                var s, c = 0, o = 0, i = t, r = n(this), l = n(".scroller", r), h = n(".items", r), e = n(".productItem", r), u = n(".next", r), f = n(".prev", r), v = n(".more", r), y;
                k(!1);
                s = i.carouselMode == "partial" ? i.mode == null && i.mode != "product-gallery" ? r.width() - 0 : r.width() - u.outerWidth(!0) : r.width() - (u.outerWidth(!0) + f.outerWidth(!0));
                y = s / i.itemsCount - (i.padding[0] + i.padding[1] + i.margin[0] + i.margin[1] + i.borderWidth);
                slideAmount = i.carouselMode == "partial" ? i.itemsCount - 1 : i.itemsCount;
                l.width(s).height(i.height);
                u.css("margin-top", i.containerHeight / 2 - i.buttonsHeight / 2);
                f.css("margin-top", i.containerHeight / 2 - i.buttonsHeight / 2);
                h.css("right", "0");
                w();
                a();
                i.ajaxCall && b();
                i.displayButtons || (p(), r.mouseenter(function () {
                    u.css("visibility", "visible");
                    f.css("visibility", "visible")
                }).mouseleave(function () {
                    p()
                }));
                u.click(function () {
                    u.is(".disabled") || (o += s / i.itemsCount * slideAmount, h.stop(!0, !0).animate({right: -o}, i.speed), a())
                });
                f.click(function () {
                    f.is(".disabled") || (o -= s / i.itemsCount * slideAmount, h.stop(!0, !0).animate({right: -o}, i.speed), a())
                })
            })
        }
    })
}(jQuery);
!function (n, t) {
    "function" == typeof define && define.amd ? define("jquery-bridget/jquery-bridget", ["jquery"], function (i) {
            return t(n, i)
        }) : "object" == typeof module && module.exports ? module.exports = t(n, require("jquery")) : n.jQueryBridget = t(n, n.jQuery)
}(window, function (n, t) {
    "use strict";
    function i(i, u, o) {
        function s(n, t, r) {
            var u, e = "$()." + i + '("' + t + '")';
            return n.each(function (n, s) {
                var h = o.data(s, i), c, l;
                if (!h)return void f(i + " not initialized. Cannot call methods, i.e. " + e);
                if (c = h[t], !c || "_" == t.charAt(0))return void f(e + " is not a valid method");
                l = c.apply(h, r);
                u = void 0 === u ? l : u
            }), void 0 !== u ? u : n
        }

        function h(n, t) {
            n.each(function (n, r) {
                var f = o.data(r, i);
                f ? (f.option(t), f._init()) : (f = new u(r, t), o.data(r, i, f))
            })
        }

        o = o || t || n.jQuery;
        o && (u.prototype.option || (u.prototype.option = function (n) {
            o.isPlainObject(n) && (this.options = o.extend(!0, this.options, n))
        }), o.fn[i] = function (n) {
            if ("string" == typeof n) {
                var t = e.call(arguments, 1);
                return s(this, n, t)
            }
            return h(this, n), this
        }, r(o))
    }

    function r(n) {
        !n || n && n.bridget || (n.bridget = i)
    }

    var e = Array.prototype.slice, u = n.console, f = "undefined" == typeof u ? function () {
        } : function (n) {
            u.error(n)
        };
    return r(t || n.jQuery), i
}), function (n, t) {
    "function" == typeof define && define.amd ? define("ev-emitter/ev-emitter", t) : "object" == typeof module && module.exports ? module.exports = t() : n.EvEmitter = t()
}("undefined" != typeof window ? window : this, function () {
    function t() {
    }

    var n = t.prototype;
    return n.on = function (n, t) {
        if (n && t) {
            var i = this._events = this._events || {}, r = i[n] = i[n] || [];
            return r.indexOf(t) == -1 && r.push(t), this
        }
    }, n.once = function (n, t) {
        if (n && t) {
            this.on(n, t);
            var i = this._onceEvents = this._onceEvents || {}, r = i[n] = i[n] || {};
            return r[t] = !0, this
        }
    }, n.off = function (n, t) {
        var i = this._events && this._events[n], r;
        if (i && i.length)return r = i.indexOf(t), r != -1 && i.splice(r, 1), this
    }, n.emitEvent = function (n, t) {
        var r = this._events && this._events[n], u, i, f, e;
        if (r && r.length) {
            for (u = 0, i = r[u], t = t || [], f = this._onceEvents && this._onceEvents[n]; i;)e = f && f[i], e && (this.off(n, i), delete f[i]), i.apply(this, t), u += e ? 0 : 1, i = r[u];
            return this
        }
    }, t
}), function (n, t) {
    "use strict";
    "function" == typeof define && define.amd ? define("get-size/get-size", [], function () {
            return t()
        }) : "object" == typeof module && module.exports ? module.exports = t() : n.getSize = t()
}(window, function () {
    "use strict";
    function n(n) {
        var t = parseFloat(n), i = n.indexOf("%") == -1 && !isNaN(t);
        return i && t
    }

    function o() {
    }

    function s() {
        for (var r, i = {
            width: 0,
            height: 0,
            innerWidth: 0,
            innerHeight: 0,
            outerWidth: 0,
            outerHeight: 0
        }, n = 0; n < f; n++)r = t[n], i[r] = 0;
        return i
    }

    function i(n) {
        var t = getComputedStyle(n);
        return t || c("Style returned " + t + ". Are you running this code in a hidden iframe on Firefox? See http://bit.ly/getsizebug1"), t
    }

    function h() {
        var t, f, o;
        e || (e = !0, t = document.createElement("div"), t.style.width = "200px", t.style.padding = "1px 2px 3px 4px", t.style.borderStyle = "solid", t.style.borderWidth = "1px 2px 3px 4px", t.style.boxSizing = "border-box", f = document.body || document.documentElement, f.appendChild(t), o = i(t), r.isBoxSizeOuter = u = 200 == n(o.width), f.removeChild(t))
    }

    function r(r) {
        var o, e, a, c, l;
        if (h(), "string" == typeof r && (r = document.querySelector(r)), r && "object" == typeof r && r.nodeType) {
            if (o = i(r), "none" == o.display)return s();
            for (e = {}, e.width = r.offsetWidth, e.height = r.offsetHeight, a = e.isBorderBox = "border-box" == o.boxSizing, c = 0; c < f; c++) {
                var v = t[c], nt = o[v], y = parseFloat(nt);
                e[v] = isNaN(y) ? 0 : y
            }
            var p = e.paddingLeft + e.paddingRight, w = e.paddingTop + e.paddingBottom, tt = e.marginLeft + e.marginRight, it = e.marginTop + e.marginBottom, b = e.borderLeftWidth + e.borderRightWidth, k = e.borderTopWidth + e.borderBottomWidth, d = a && u, g = n(o.width);
            return g !== !1 && (e.width = g + (d ? 0 : p + b)), l = n(o.height), l !== !1 && (e.height = l + (d ? 0 : w + k)), e.innerWidth = e.width - (p + b), e.innerHeight = e.height - (w + k), e.outerWidth = e.width + tt, e.outerHeight = e.height + it, e
        }
    }

    var u, c = "undefined" == typeof console ? o : function (n) {
            console.error(n)
        }, t = ["paddingLeft", "paddingRight", "paddingTop", "paddingBottom", "marginLeft", "marginRight", "marginTop", "marginBottom", "borderLeftWidth", "borderRightWidth", "borderTopWidth", "borderBottomWidth"], f = t.length, e = !1;
    return r
}), function (n, t) {
    "use strict";
    "function" == typeof define && define.amd ? define("desandro-matches-selector/matches-selector", t) : "object" == typeof module && module.exports ? module.exports = t() : n.matchesSelector = t()
}(window, function () {
    "use strict";
    var n = function () {
        var t = Element.prototype, i, n, u, r;
        if (t.matches)return "matches";
        if (t.matchesSelector)return "matchesSelector";
        for (i = ["webkit", "moz", "ms", "o"], n = 0; n < i.length; n++)if (u = i[n], r = u + "MatchesSelector", t[r])return r
    }();
    return function (t, i) {
        return t[n](i)
    }
}), function (n, t) {
    "function" == typeof define && define.amd ? define("fizzy-ui-utils/utils", ["desandro-matches-selector/matches-selector"], function (i) {
            return t(n, i)
        }) : "object" == typeof module && module.exports ? module.exports = t(n, require("desandro-matches-selector")) : n.fizzyUIUtils = t(n, n.matchesSelector)
}(window, function (n, t) {
    var i = {}, r;
    return i.extend = function (n, t) {
        for (var i in t)n[i] = t[i];
        return n
    }, i.modulo = function (n, t) {
        return (n % t + t) % t
    }, i.makeArray = function (n) {
        var t = [], i;
        if (Array.isArray(n)) t = n; else if (n && "number" == typeof n.length)for (i = 0; i < n.length; i++)t.push(n[i]); else t.push(n);
        return t
    }, i.removeFrom = function (n, t) {
        var i = n.indexOf(t);
        i != -1 && n.splice(i, 1)
    }, i.getParent = function (n, i) {
        for (; n != document.body;)if (n = n.parentNode, t(n, i))return n
    }, i.getQueryElement = function (n) {
        return "string" == typeof n ? document.querySelector(n) : n
    }, i.handleEvent = function (n) {
        var t = "on" + n.type;
        this[t] && this[t](n)
    }, i.filterFindElements = function (n, r) {
        n = i.makeArray(n);
        var u = [];
        return n.forEach(function (n) {
            if (n instanceof HTMLElement) {
                if (!r)return void u.push(n);
                t(n, r) && u.push(n);
                for (var f = n.querySelectorAll(r), i = 0; i < f.length; i++)u.push(f[i])
            }
        }), u
    }, i.debounceMethod = function (n, t, i) {
        var u = n.prototype[t], r = t + "Timeout";
        n.prototype[t] = function () {
            var t = this[r], f, n;
            t && clearTimeout(t);
            f = arguments;
            n = this;
            this[r] = setTimeout(function () {
                u.apply(n, f);
                delete n[r]
            }, i || 100)
        }
    }, i.docReady = function (n) {
        var t = document.readyState;
        "complete" == t || "interactive" == t ? setTimeout(n) : document.addEventListener("DOMContentLoaded", n)
    }, i.toDashed = function (n) {
        return n.replace(/(.)([A-Z])/g, function (n, t, i) {
            return t + "-" + i
        }).toLowerCase()
    }, r = n.console, i.htmlInit = function (t, u) {
        i.docReady(function () {
            var e = i.toDashed(u), f = "data-" + e, s = document.querySelectorAll("[" + f + "]"), h = document.querySelectorAll(".js-" + e), c = i.makeArray(s).concat(i.makeArray(h)), l = f + "-options", o = n.jQuery;
            c.forEach(function (n) {
                var i, e = n.getAttribute(f) || n.getAttribute(l), s;
                try {
                    i = e && JSON.parse(e)
                } catch (h) {
                    return void(r && r.error("Error parsing " + f + " on " + n.className + ": " + h))
                }
                s = new t(n, i);
                o && o.data(n, u, s)
            })
        })
    }, i
}), function (n, t) {
    "function" == typeof define && define.amd ? define("flickity/js/cell", ["get-size/get-size"], function (i) {
            return t(n, i)
        }) : "object" == typeof module && module.exports ? module.exports = t(n, require("get-size")) : (n.Flickity = n.Flickity || {}, n.Flickity.Cell = t(n, n.getSize))
}(window, function (n, t) {
    function r(n, t) {
        this.element = n;
        this.parent = t;
        this.create()
    }

    var i = r.prototype;
    return i.create = function () {
        this.element.style.position = "absolute";
        this.x = 0;
        this.shift = 0
    }, i.destroy = function () {
        this.element.style.position = "";
        var n = this.parent.originSide;
        this.element.style[n] = ""
    }, i.getSize = function () {
        this.size = t(this.element)
    }, i.setPosition = function (n) {
        this.x = n;
        this.updateTarget();
        this.renderPosition(n)
    }, i.updateTarget = i.setDefaultTarget = function () {
        var n = "left" == this.parent.originSide ? "marginLeft" : "marginRight";
        this.target = this.x + this.size[n] + this.size.width * this.parent.cellAlign
    }, i.renderPosition = function (n) {
        var t = this.parent.originSide;
        this.element.style[t] = this.parent.getPositionValue(n)
    }, i.wrapShift = function (n) {
        this.shift = n;
        this.renderPosition(this.x + this.parent.slideableWidth * n)
    }, i.remove = function () {
        this.element.parentNode.removeChild(this.element)
    }, r
}), function (n, t) {
    "function" == typeof define && define.amd ? define("flickity/js/slide", t) : "object" == typeof module && module.exports ? module.exports = t() : (n.Flickity = n.Flickity || {}, n.Flickity.Slide = t())
}(window, function () {
    "use strict";
    function t(n) {
        this.parent = n;
        this.isOriginLeft = "left" == n.originSide;
        this.cells = [];
        this.outerWidth = 0;
        this.height = 0
    }

    var n = t.prototype;
    return n.addCell = function (n) {
        if (this.cells.push(n), this.outerWidth += n.size.outerWidth, this.height = Math.max(n.size.outerHeight, this.height), 1 == this.cells.length) {
            this.x = n.x;
            var t = this.isOriginLeft ? "marginLeft" : "marginRight";
            this.firstMargin = n.size[t]
        }
    }, n.updateTarget = function () {
        var t = this.isOriginLeft ? "marginRight" : "marginLeft", n = this.getLastCell(), i = n ? n.size[t] : 0, r = this.outerWidth - (this.firstMargin + i);
        this.target = this.x + this.firstMargin + r * this.parent.cellAlign
    }, n.getLastCell = function () {
        return this.cells[this.cells.length - 1]
    }, n.select = function () {
        this.changeSelectedClass("add")
    }, n.unselect = function () {
        this.changeSelectedClass("remove")
    }, n.changeSelectedClass = function (n) {
        this.cells.forEach(function (t) {
            t.element.classList[n]("is-selected")
        })
    }, n.getCellElements = function () {
        return this.cells.map(function (n) {
            return n.element
        })
    }, t
}), function (n, t) {
    "function" == typeof define && define.amd ? define("flickity/js/animate", ["fizzy-ui-utils/utils"], function (i) {
            return t(n, i)
        }) : "object" == typeof module && module.exports ? module.exports = t(n, require("fizzy-ui-utils")) : (n.Flickity = n.Flickity || {}, n.Flickity.animatePrototype = t(n, n.fizzyUIUtils))
}(window, function (n, t) {
    var r = n.requestAnimationFrame || n.webkitRequestAnimationFrame, f = 0, i, u;
    return r || (r = function (n) {
        var t = (new Date).getTime(), i = Math.max(0, 16 - (t - f)), r = setTimeout(n, i);
        return f = t + i, r
    }), i = {}, i.startAnimation = function () {
        this.isAnimating || (this.isAnimating = !0, this.restingFrames = 0, this.animate())
    }, i.animate = function () {
        var n, t;
        this.applyDragForce();
        this.applySelectedAttraction();
        n = this.x;
        (this.integratePhysics(), this.positionSlider(), this.settle(n), this.isAnimating) && (t = this, r(function () {
            t.animate()
        }))
    }, u = function () {
        var n = document.documentElement.style;
        return "string" == typeof n.transform ? "transform" : "WebkitTransform"
    }(), i.positionSlider = function () {
        var n = this.x, i, r, f, e;
        this.options.wrapAround && this.cells.length > 1 && (n = t.modulo(n, this.slideableWidth), n -= this.slideableWidth, this.shiftWrapCells(n));
        n += this.cursorPosition;
        n = this.options.rightToLeft && u ? -n : n;
        i = this.getPositionValue(n);
        this.slider.style[u] = this.isAnimating ? "translate3d(" + i + ",0,0)" : "translateX(" + i + ")";
        r = this.slides[0];
        r && (f = -this.x - r.target, e = f / this.slidesWidth, this.dispatchEvent("scroll", null, [e, f]))
    }, i.positionSliderAtSelected = function () {
        this.cells.length && (this.x = -this.selectedSlide.target, this.positionSlider())
    }, i.getPositionValue = function (n) {
        return this.options.percentPosition ? .01 * Math.round(n / this.size.innerWidth * 1e4) + "%" : Math.round(n) + "px"
    }, i.settle = function (n) {
        this.isPointerDown || Math.round(100 * this.x) != Math.round(100 * n) || this.restingFrames++;
        this.restingFrames > 2 && (this.isAnimating = !1, delete this.isFreeScrolling, this.positionSlider(), this.dispatchEvent("settle"))
    }, i.shiftWrapCells = function (n) {
        var i = this.cursorPosition + n, t;
        this._shiftCells(this.beforeShiftCells, i, -1);
        t = this.size.innerWidth - (n + this.slideableWidth + this.cursorPosition);
        this._shiftCells(this.afterShiftCells, t, 1)
    }, i._shiftCells = function (n, t, i) {
        for (var u, f, r = 0; r < n.length; r++)u = n[r], f = t > 0 ? i : 0, u.wrapShift(f), t -= u.size.outerWidth
    }, i._unshiftCells = function (n) {
        if (n && n.length)for (var t = 0; t < n.length; t++)n[t].wrapShift(0)
    }, i.integratePhysics = function () {
        this.x += this.velocity;
        this.velocity *= this.getFrictionFactor()
    }, i.applyForce = function (n) {
        this.velocity += n
    }, i.getFrictionFactor = function () {
        return 1 - this.options[this.isFreeScrolling ? "freeScrollFriction" : "friction"]
    }, i.getRestingPosition = function () {
        return this.x + this.velocity / (1 - this.getFrictionFactor())
    }, i.applyDragForce = function () {
        if (this.isPointerDown) {
            var n = this.dragX - this.x, t = n - this.velocity;
            this.applyForce(t)
        }
    }, i.applySelectedAttraction = function () {
        if (!this.isPointerDown && !this.isFreeScrolling && this.cells.length) {
            var n = this.selectedSlide.target * -1 - this.x, t = n * this.options.selectedAttraction;
            this.applyForce(t)
        }
    }, i
}), function (n, t) {
    if ("function" == typeof define && define.amd) define("flickity/js/flickity", ["ev-emitter/ev-emitter", "get-size/get-size", "fizzy-ui-utils/utils", "./cell", "./slide", "./animate"], function (i, r, u, f, e, o) {
        return t(n, i, r, u, f, e, o)
    }); else if ("object" == typeof module && module.exports) module.exports = t(n, require("ev-emitter"), require("get-size"), require("fizzy-ui-utils"), require("./cell"), require("./slide"), require("./animate")); else {
        var i = n.Flickity;
        n.Flickity = t(n, n.EvEmitter, n.getSize, n.fizzyUIUtils, i.Cell, i.Slide, i.animatePrototype)
    }
}(window, function (n, t, i, r, u, f, e) {
    function l(n, t) {
        for (n = r.makeArray(n); n.length;)t.appendChild(n.shift())
    }

    function s(n, t) {
        var i = r.getQueryElement(n), u;
        if (!i)return void(a && a.error("Bad element for Flickity: " + (i || n)));
        if (this.element = i, this.element.flickityGUID)return u = c[this.element.flickityGUID], u.option(t), u;
        h && (this.$element = h(this.element));
        this.options = r.extend({}, this.constructor.defaults);
        this.option(t);
        this._create()
    }

    var h = n.jQuery, y = n.getComputedStyle, a = n.console, p = 0, c = {}, o, v;
    return s.defaults = {
        accessibility: !0,
        cellAlign: "center",
        freeScrollFriction: .075,
        friction: .28,
        namespaceJQueryEvents: !0,
        percentPosition: !0,
        resize: !0,
        selectedAttraction: .025,
        setGallerySize: !0
    }, s.createMethods = [], o = s.prototype, r.extend(o, t.prototype), o._create = function () {
        var t = this.guid = ++p;
        this.element.flickityGUID = t;
        c[t] = this;
        this.selectedIndex = 0;
        this.restingFrames = 0;
        this.x = 0;
        this.velocity = 0;
        this.originSide = this.options.rightToLeft ? "right" : "left";
        this.viewport = document.createElement("div");
        this.viewport.className = "flickity-viewport";
        this._createSlider();
        (this.options.resize || this.options.watchCSS) && n.addEventListener("resize", this);
        s.createMethods.forEach(function (n) {
            this[n]()
        }, this);
        this.options.watchCSS ? this.watchCSS() : this.activate()
    }, o.option = function (n) {
        r.extend(this.options, n)
    }, o.activate = function () {
        var t, i, n;
        this.isActive || (this.isActive = !0, this.element.classList.add("flickity-enabled"), this.options.rightToLeft && this.element.classList.add("flickity-rtl"), this.getSize(), t = this._filterFindCellElements(this.element.children), l(t, this.slider), this.viewport.appendChild(this.slider), this.element.appendChild(this.viewport), this.reloadCells(), this.options.accessibility && (this.element.tabIndex = 0, this.element.addEventListener("keydown", this)), this.emitEvent("activate"), n = this.options.initialIndex, i = this.isInitActivated ? this.selectedIndex : void 0 !== n && this.cells[n] ? n : 0, this.select(i, !1, !0), this.isInitActivated = !0)
    }, o._createSlider = function () {
        var n = document.createElement("div");
        n.className = "flickity-slider";
        n.style[this.originSide] = 0;
        this.slider = n
    }, o._filterFindCellElements = function (n) {
        return r.filterFindElements(n, this.options.cellSelector)
    }, o.reloadCells = function () {
        this.cells = this._makeCells(this.slider.children);
        this.positionCells();
        this._getWrapShiftCells();
        this.setGallerySize()
    }, o._makeCells = function (n) {
        var t = this._filterFindCellElements(n);
        return t.map(function (n) {
            return new u(n, this)
        }, this)
    }, o.getLastCell = function () {
        return this.cells[this.cells.length - 1]
    }, o.getLastSlide = function () {
        return this.slides[this.slides.length - 1]
    }, o.positionCells = function () {
        this._sizeCells(this.cells);
        this._positionCells(0)
    }, o._positionCells = function (n) {
        var t, u, f, i, r;
        for (n = n || 0, this.maxCellHeight = n ? this.maxCellHeight || 0 : 0, t = 0, n > 0 && (u = this.cells[n - 1], t = u.x + u.size.outerWidth), f = this.cells.length, i = n; i < f; i++)r = this.cells[i], r.setPosition(t), t += r.size.outerWidth, this.maxCellHeight = Math.max(r.size.outerHeight, this.maxCellHeight);
        this.slideableWidth = t;
        this.updateSlides();
        this._containSlides();
        this.slidesWidth = f ? this.getLastSlide().target - this.slides[0].target : 0
    }, o._sizeCells = function (n) {
        n.forEach(function (n) {
            n.getSize()
        })
    }, o.updateSlides = function () {
        var n;
        if (this.slides = [], this.cells.length) {
            n = new f(this);
            this.slides.push(n);
            var t = "left" == this.originSide, i = t ? "marginRight" : "marginLeft", r = this._getCanCellFit();
            this.cells.forEach(function (t, u) {
                if (!n.cells.length)return void n.addCell(t);
                var e = n.outerWidth - n.firstMargin + (t.size.outerWidth - t.size[i]);
                r.call(this, u, e) ? n.addCell(t) : (n.updateTarget(), n = new f(this), this.slides.push(n), n.addCell(t))
            }, this);
            n.updateTarget();
            this.updateSelectedSlide()
        }
    }, o._getCanCellFit = function () {
        var n = this.options.groupCells, i, t, r;
        return n ? "number" == typeof n ? (i = parseInt(n, 10), function (n) {
                    return n % i != 0
                }) : (t = "string" == typeof n && n.match(/^(\d+)%$/), r = t ? parseInt(t[1], 10) / 100 : 1, function (n, t) {
                    return t <= (this.size.innerWidth + 1) * r
                }) : function () {
                return !1
            }
    }, o._init = o.reposition = function () {
        this.positionCells();
        this.positionSliderAtSelected()
    }, o.getSize = function () {
        this.size = i(this.element);
        this.setCellAlign();
        this.cursorPosition = this.size.innerWidth * this.cellAlign
    }, v = {
        center: {left: .5, right: .5},
        left: {left: 0, right: 1},
        right: {right: 0, left: 1}
    }, o.setCellAlign = function () {
        var n = v[this.options.cellAlign];
        this.cellAlign = n ? n[this.originSide] : this.options.cellAlign
    }, o.setGallerySize = function () {
        if (this.options.setGallerySize) {
            var n = this.options.adaptiveHeight && this.selectedSlide ? this.selectedSlide.height : this.maxCellHeight;
            this.viewport.style.height = n + "px"
        }
    }, o._getWrapShiftCells = function () {
        if (this.options.wrapAround) {
            this._unshiftCells(this.beforeShiftCells);
            this._unshiftCells(this.afterShiftCells);
            var n = this.cursorPosition, t = this.cells.length - 1;
            this.beforeShiftCells = this._getGapCells(n, t, -1);
            n = this.size.innerWidth - this.cursorPosition;
            this.afterShiftCells = this._getGapCells(n, 0, 1)
        }
    }, o._getGapCells = function (n, t, i) {
        for (var r, u = []; n > 0;) {
            if (r = this.cells[t], !r)break;
            u.push(r);
            t += i;
            n -= r.size.outerWidth
        }
        return u
    }, o._containSlides = function () {
        if (this.options.contain && !this.options.wrapAround && this.cells.length) {
            var t = this.options.rightToLeft, i = t ? "marginRight" : "marginLeft", r = t ? "marginLeft" : "marginRight", n = this.slideableWidth - this.getLastCell().size[r], u = n < this.size.innerWidth, f = this.cursorPosition + this.cells[0].size[i], e = n - this.size.innerWidth * (1 - this.cellAlign);
            this.slides.forEach(function (t) {
                u ? t.target = n * this.cellAlign : (t.target = Math.max(t.target, f), t.target = Math.min(t.target, e))
            }, this)
        }
    }, o.dispatchEvent = function (n, t, i) {
        var f = t ? [t].concat(i) : i, r, u;
        (this.emitEvent(n, f), h && this.$element) && (n += this.options.namespaceJQueryEvents ? ".flickity" : "", r = n, t && (u = h.Event(t), u.type = n, r = u), this.$element.trigger(r, i))
    }, o.select = function (n, t, i) {
        this.isActive && (n = parseInt(n, 10), this._wrapSelect(n), (this.options.wrapAround || t) && (n = r.modulo(n, this.slides.length)), this.slides[n] && (this.selectedIndex = n, this.updateSelectedSlide(), i ? this.positionSliderAtSelected() : this.startAnimation(), this.options.adaptiveHeight && this.setGallerySize(), this.dispatchEvent("select"), this.dispatchEvent("cellSelect")))
    }, o._wrapSelect = function (n) {
        var t = this.slides.length, f = this.options.wrapAround && t > 1;
        if (!f)return n;
        var i = r.modulo(n, t), u = Math.abs(i - this.selectedIndex), e = Math.abs(i + t - this.selectedIndex), o = Math.abs(i - t - this.selectedIndex);
        !this.isDragSelect && e < u ? n += t : !this.isDragSelect && o < u && (n -= t);
        n < 0 ? this.x -= this.slideableWidth : n >= t && (this.x += this.slideableWidth)
    }, o.previous = function (n, t) {
        this.select(this.selectedIndex - 1, n, t)
    }, o.next = function (n, t) {
        this.select(this.selectedIndex + 1, n, t)
    }, o.updateSelectedSlide = function () {
        var n = this.slides[this.selectedIndex];
        n && (this.unselectSelectedSlide(), this.selectedSlide = n, n.select(), this.selectedCells = n.cells, this.selectedElements = n.getCellElements(), this.selectedCell = n.cells[0], this.selectedElement = this.selectedElements[0])
    }, o.unselectSelectedSlide = function () {
        this.selectedSlide && this.selectedSlide.unselect()
    }, o.selectCell = function (n, t, i) {
        var u, r, f, e;
        for ("number" == typeof n ? u = this.cells[n] : ("string" == typeof n && (n = this.element.querySelector(n)), u = this.getCell(n)), r = 0; u && r < this.slides.length; r++)if (f = this.slides[r], e = f.cells.indexOf(u), e != -1)return void this.select(r, t, i)
    }, o.getCell = function (n) {
        for (var i, t = 0; t < this.cells.length; t++)if (i = this.cells[t], i.element == n)return i
    }, o.getCells = function (n) {
        n = r.makeArray(n);
        var t = [];
        return n.forEach(function (n) {
            var i = this.getCell(n);
            i && t.push(i)
        }, this), t
    }, o.getCellElements = function () {
        return this.cells.map(function (n) {
            return n.element
        })
    }, o.getParentCell = function (n) {
        var t = this.getCell(n);
        return t ? t : (n = r.getParent(n, ".flickity-slider > *"), this.getCell(n))
    }, o.getAdjacentCellElements = function (n, t) {
        var f, u, i, o, e;
        if (!n)return this.selectedSlide.getCellElements();
        if (t = void 0 === t ? this.selectedIndex : t, f = this.slides.length, 1 + 2 * n >= f)return this.getCellElements();
        for (u = [], i = t - n; i <= t + n; i++)o = this.options.wrapAround ? r.modulo(i, f) : i, e = this.slides[o], e && (u = u.concat(e.getCellElements()));
        return u
    }, o.uiChange = function () {
        this.emitEvent("uiChange")
    }, o.childUIPointerDown = function (n) {
        this.emitEvent("childUIPointerDown", [n])
    }, o.onresize = function () {
        this.watchCSS();
        this.resize()
    }, r.debounceMethod(s, "onresize", 150), o.resize = function () {
        if (this.isActive) {
            this.getSize();
            this.options.wrapAround && (this.x = r.modulo(this.x, this.slideableWidth));
            this.positionCells();
            this._getWrapShiftCells();
            this.setGallerySize();
            this.emitEvent("resize");
            var n = this.selectedElements && this.selectedElements[0];
            this.selectCell(n, !1, !0)
        }
    }, o.watchCSS = function () {
        var t = this.options.watchCSS, n;
        t && (n = y(this.element, ":after").content, n.indexOf("flickity") != -1 ? this.activate() : this.deactivate())
    }, o.onkeydown = function (n) {
        var t, i;
        this.options.accessibility && (!document.activeElement || document.activeElement == this.element) && (37 == n.keyCode ? (t = this.options.rightToLeft ? "next" : "previous", this.uiChange(), this[t]()) : 39 == n.keyCode && (i = this.options.rightToLeft ? "previous" : "next", this.uiChange(), this[i]()))
    }, o.deactivate = function () {
        this.isActive && (this.element.classList.remove("flickity-enabled"), this.element.classList.remove("flickity-rtl"), this.cells.forEach(function (n) {
            n.destroy()
        }), this.unselectSelectedSlide(), this.element.removeChild(this.viewport), l(this.slider.children, this.element), this.options.accessibility && (this.element.removeAttribute("tabIndex"), this.element.removeEventListener("keydown", this)), this.isActive = !1, this.emitEvent("deactivate"))
    }, o.destroy = function () {
        this.deactivate();
        n.removeEventListener("resize", this);
        this.emitEvent("destroy");
        h && this.$element && h.removeData(this.element, "flickity");
        delete this.element.flickityGUID;
        delete c[this.guid]
    }, r.extend(o, e), s.data = function (n) {
        n = r.getQueryElement(n);
        var t = n && n.flickityGUID;
        return t && c[t]
    }, r.htmlInit(s, "flickity"), h && h.bridget && h.bridget("flickity", s), s.Cell = u, s
}), function (n, t) {
    "function" == typeof define && define.amd ? define("unipointer/unipointer", ["ev-emitter/ev-emitter"], function (i) {
            return t(n, i)
        }) : "object" == typeof module && module.exports ? module.exports = t(n, require("ev-emitter")) : n.Unipointer = t(n, n.EvEmitter)
}(window, function (n, t) {
    function f() {
    }

    function r() {
    }

    var i = r.prototype = Object.create(t.prototype), u;
    return i.bindStartEvent = function (n) {
        this._bindStartEvent(n, !0)
    }, i.unbindStartEvent = function (n) {
        this._bindStartEvent(n, !1)
    }, i._bindStartEvent = function (t, i) {
        i = void 0 === i || !!i;
        var r = i ? "addEventListener" : "removeEventListener";
        n.navigator.pointerEnabled ? t[r]("pointerdown", this) : n.navigator.msPointerEnabled ? t[r]("MSPointerDown", this) : (t[r]("mousedown", this), t[r]("touchstart", this))
    }, i.handleEvent = function (n) {
        var t = "on" + n.type;
        this[t] && this[t](n)
    }, i.getTouch = function (n) {
        for (var i, t = 0; t < n.length; t++)if (i = n[t], i.identifier == this.pointerIdentifier)return i
    }, i.onmousedown = function (n) {
        var t = n.button;
        t && 0 !== t && 1 !== t || this._pointerDown(n, n)
    }, i.ontouchstart = function (n) {
        this._pointerDown(n, n.changedTouches[0])
    }, i.onMSPointerDown = i.onpointerdown = function (n) {
        this._pointerDown(n, n)
    }, i._pointerDown = function (n, t) {
        this.isPointerDown || (this.isPointerDown = !0, this.pointerIdentifier = void 0 !== t.pointerId ? t.pointerId : t.identifier, this.pointerDown(n, t))
    }, i.pointerDown = function (n, t) {
        this._bindPostStartEvents(n);
        this.emitEvent("pointerDown", [n, t])
    }, u = {
        mousedown: ["mousemove", "mouseup"],
        touchstart: ["touchmove", "touchend", "touchcancel"],
        pointerdown: ["pointermove", "pointerup", "pointercancel"],
        MSPointerDown: ["MSPointerMove", "MSPointerUp", "MSPointerCancel"]
    }, i._bindPostStartEvents = function (t) {
        if (t) {
            var i = u[t.type];
            i.forEach(function (t) {
                n.addEventListener(t, this)
            }, this);
            this._boundPointerEvents = i
        }
    }, i._unbindPostStartEvents = function () {
        this._boundPointerEvents && (this._boundPointerEvents.forEach(function (t) {
            n.removeEventListener(t, this)
        }, this), delete this._boundPointerEvents)
    }, i.onmousemove = function (n) {
        this._pointerMove(n, n)
    }, i.onMSPointerMove = i.onpointermove = function (n) {
        n.pointerId == this.pointerIdentifier && this._pointerMove(n, n)
    }, i.ontouchmove = function (n) {
        var t = this.getTouch(n.changedTouches);
        t && this._pointerMove(n, t)
    }, i._pointerMove = function (n, t) {
        this.pointerMove(n, t)
    }, i.pointerMove = function (n, t) {
        this.emitEvent("pointerMove", [n, t])
    }, i.onmouseup = function (n) {
        this._pointerUp(n, n)
    }, i.onMSPointerUp = i.onpointerup = function (n) {
        n.pointerId == this.pointerIdentifier && this._pointerUp(n, n)
    }, i.ontouchend = function (n) {
        var t = this.getTouch(n.changedTouches);
        t && this._pointerUp(n, t)
    }, i._pointerUp = function (n, t) {
        this._pointerDone();
        this.pointerUp(n, t)
    }, i.pointerUp = function (n, t) {
        this.emitEvent("pointerUp", [n, t])
    }, i._pointerDone = function () {
        this.isPointerDown = !1;
        delete this.pointerIdentifier;
        this._unbindPostStartEvents();
        this.pointerDone()
    }, i.pointerDone = f, i.onMSPointerCancel = i.onpointercancel = function (n) {
        n.pointerId == this.pointerIdentifier && this._pointerCancel(n, n)
    }, i.ontouchcancel = function (n) {
        var t = this.getTouch(n.changedTouches);
        t && this._pointerCancel(n, t)
    }, i._pointerCancel = function (n, t) {
        this._pointerDone();
        this.pointerCancel(n, t)
    }, i.pointerCancel = function (n, t) {
        this.emitEvent("pointerCancel", [n, t])
    }, r.getPointerPoint = function (n) {
        return {x: n.pageX, y: n.pageY}
    }, r
}), function (n, t) {
    "function" == typeof define && define.amd ? define("unidragger/unidragger", ["unipointer/unipointer"], function (i) {
            return t(n, i)
        }) : "object" == typeof module && module.exports ? module.exports = t(n, require("unipointer")) : n.Unidragger = t(n, n.Unipointer)
}(window, function (n, t) {
    function f() {
    }

    function r() {
    }

    var i = r.prototype = Object.create(t.prototype), u;
    return i.bindHandles = function () {
        this._bindHandles(!0)
    }, i.unbindHandles = function () {
        this._bindHandles(!1)
    }, u = n.navigator, i._bindHandles = function (n) {
        var r, e, t, i;
        for (n = void 0 === n || !!n, r = u.pointerEnabled ? function (t) {
                t.style.touchAction = n ? "none" : ""
            } : u.msPointerEnabled ? function (t) {
                    t.style.msTouchAction = n ? "none" : ""
                } : f, e = n ? "addEventListener" : "removeEventListener", t = 0; t < this.handles.length; t++)i = this.handles[t], this._bindStartEvent(i, n), r(i), i[e]("click", this)
    }, i.pointerDown = function (n, t) {
        if ("INPUT" == n.target.nodeName && "range" == n.target.type)return this.isPointerDown = !1, void delete this.pointerIdentifier;
        this._dragPointerDown(n, t);
        var i = document.activeElement;
        i && i.blur && i.blur();
        this._bindPostStartEvents(n);
        this.emitEvent("pointerDown", [n, t])
    }, i._dragPointerDown = function (n, i) {
        this.pointerDownPoint = t.getPointerPoint(i);
        var r = this.canPreventDefaultOnPointerDown(n, i);
        r && n.preventDefault()
    }, i.canPreventDefaultOnPointerDown = function (n) {
        return "SELECT" != n.target.nodeName
    }, i.pointerMove = function (n, t) {
        var i = this._dragPointerMove(n, t);
        this.emitEvent("pointerMove", [n, t, i]);
        this._dragMove(n, t, i)
    }, i._dragPointerMove = function (n, i) {
        var r = t.getPointerPoint(i), u = {x: r.x - this.pointerDownPoint.x, y: r.y - this.pointerDownPoint.y};
        return !this.isDragging && this.hasDragStarted(u) && this._dragStart(n, i), u
    }, i.hasDragStarted = function (n) {
        return Math.abs(n.x) > 3 || Math.abs(n.y) > 3
    }, i.pointerUp = function (n, t) {
        this.emitEvent("pointerUp", [n, t]);
        this._dragPointerUp(n, t)
    }, i._dragPointerUp = function (n, t) {
        this.isDragging ? this._dragEnd(n, t) : this._staticClick(n, t)
    }, i._dragStart = function (n, i) {
        this.isDragging = !0;
        this.dragStartPoint = t.getPointerPoint(i);
        this.isPreventingClicks = !0;
        this.dragStart(n, i)
    }, i.dragStart = function (n, t) {
        this.emitEvent("dragStart", [n, t])
    }, i._dragMove = function (n, t, i) {
        this.isDragging && this.dragMove(n, t, i)
    }, i.dragMove = function (n, t, i) {
        n.preventDefault();
        this.emitEvent("dragMove", [n, t, i])
    }, i._dragEnd = function (n, t) {
        this.isDragging = !1;
        setTimeout(function () {
            delete this.isPreventingClicks
        }.bind(this));
        this.dragEnd(n, t)
    }, i.dragEnd = function (n, t) {
        this.emitEvent("dragEnd", [n, t])
    }, i.onclick = function (n) {
        this.isPreventingClicks && n.preventDefault()
    }, i._staticClick = function (n, t) {
        if (!this.isIgnoringMouseUp || "mouseup" != n.type) {
            var i = n.target.nodeName;
            "INPUT" != i && "TEXTAREA" != i || n.target.focus();
            this.staticClick(n, t);
            "mouseup" != n.type && (this.isIgnoringMouseUp = !0, setTimeout(function () {
                delete this.isIgnoringMouseUp
            }.bind(this), 400))
        }
    }, i.staticClick = function (n, t) {
        this.emitEvent("staticClick", [n, t])
    }, r.getPointerPoint = t.getPointerPoint, r
}), function (n, t) {
    "function" == typeof define && define.amd ? define("flickity/js/drag", ["./flickity", "unidragger/unidragger", "fizzy-ui-utils/utils"], function (i, r, u) {
            return t(n, i, r, u)
        }) : "object" == typeof module && module.exports ? module.exports = t(n, require("./flickity"), require("unidragger"), require("fizzy-ui-utils")) : n.Flickity = t(n, n.Flickity, n.Unidragger, n.fizzyUIUtils)
}(window, function (n, t, i, r) {
    function e() {
        return {x: n.pageXOffset, y: n.pageYOffset}
    }

    var u, o, f, s, h, c, l;
    return r.extend(t.defaults, {
        draggable: !0,
        dragThreshold: 3
    }), t.createMethods.push("_createDrag"), u = t.prototype, r.extend(u, i.prototype), o = "createTouch" in document, f = !1, u._createDrag = function () {
        this.on("activate", this.bindDrag);
        this.on("uiChange", this._uiChangeDrag);
        this.on("childUIPointerDown", this._childUIPointerDownDrag);
        this.on("deactivate", this.unbindDrag);
        o && !f && (n.addEventListener("touchmove", function () {
        }), f = !0)
    }, u.bindDrag = function () {
        this.options.draggable && !this.isDragBound && (this.element.classList.add("is-draggable"), this.handles = [this.viewport], this.bindHandles(), this.isDragBound = !0)
    }, u.unbindDrag = function () {
        this.isDragBound && (this.element.classList.remove("is-draggable"), this.unbindHandles(), delete this.isDragBound)
    }, u._uiChangeDrag = function () {
        delete this.isFreeScrolling
    }, u._childUIPointerDownDrag = function (n) {
        n.preventDefault();
        this.pointerDownFocus(n)
    }, s = {TEXTAREA: !0, INPUT: !0, OPTION: !0}, h = {
        radio: !0,
        checkbox: !0,
        button: !0,
        submit: !0,
        image: !0,
        file: !0
    }, u.pointerDown = function (t, i) {
        var u = s[t.target.nodeName] && !h[t.target.type], r;
        if (u)return this.isPointerDown = !1, void delete this.pointerIdentifier;
        this._dragPointerDown(t, i);
        r = document.activeElement;
        r && r.blur && r != this.element && r != document.body && r.blur();
        this.pointerDownFocus(t);
        this.dragX = this.x;
        this.viewport.classList.add("is-pointer-down");
        this._bindPostStartEvents(t);
        this.pointerDownScroll = e();
        n.addEventListener("scroll", this);
        this.dispatchEvent("pointerDown", t, [i])
    }, c = {touchstart: !0, MSPointerDown: !0}, l = {INPUT: !0, SELECT: !0}, u.pointerDownFocus = function (t) {
        if (this.options.accessibility && !c[t.type] && !l[t.target.nodeName]) {
            var i = n.pageYOffset;
            this.element.focus();
            n.pageYOffset != i && n.scrollTo(n.pageXOffset, i)
        }
    }, u.canPreventDefaultOnPointerDown = function (n) {
        var t = "touchstart" == n.type, i = n.target.nodeName;
        return !t && "SELECT" != i
    }, u.hasDragStarted = function (n) {
        return Math.abs(n.x) > this.options.dragThreshold
    }, u.pointerUp = function (n, t) {
        delete this.isTouchScrolling;
        this.viewport.classList.remove("is-pointer-down");
        this.dispatchEvent("pointerUp", n, [t]);
        this._dragPointerUp(n, t)
    }, u.pointerDone = function () {
        n.removeEventListener("scroll", this);
        delete this.pointerDownScroll
    }, u.dragStart = function (t, i) {
        this.dragStartPosition = this.x;
        this.startAnimation();
        n.removeEventListener("scroll", this);
        this.dispatchEvent("dragStart", t, [i])
    }, u.pointerMove = function (n, t) {
        var i = this._dragPointerMove(n, t);
        this.dispatchEvent("pointerMove", n, [t, i]);
        this._dragMove(n, t, i)
    }, u.dragMove = function (n, t, i) {
        var e, r, u, f;
        n.preventDefault();
        this.previousDragX = this.dragX;
        e = this.options.rightToLeft ? -1 : 1;
        r = this.dragStartPosition + i.x * e;
        !this.options.wrapAround && this.slides.length && (u = Math.max(-this.slides[0].target, this.dragStartPosition), r = r > u ? .5 * (r + u) : r, f = Math.min(-this.getLastSlide().target, this.dragStartPosition), r = r < f ? .5 * (r + f) : r);
        this.dragX = r;
        this.dragMoveTime = new Date;
        this.dispatchEvent("dragMove", n, [t, i])
    }, u.dragEnd = function (n, t) {
        var i, r;
        this.options.freeScroll && (this.isFreeScrolling = !0);
        i = this.dragEndRestingSelect();
        this.options.freeScroll && !this.options.wrapAround ? (r = this.getRestingPosition(), this.isFreeScrolling = -r > this.slides[0].target && -r < this.getLastSlide().target) : this.options.freeScroll || i != this.selectedIndex || (i += this.dragEndBoostSelect());
        delete this.previousDragX;
        this.isDragSelect = this.options.wrapAround;
        this.select(i);
        delete this.isDragSelect;
        this.dispatchEvent("dragEnd", n, [t])
    }, u.dragEndRestingSelect = function () {
        var n = this.getRestingPosition(), t = Math.abs(this.getSlideDistance(-n, this.selectedIndex)), i = this._getClosestResting(n, t, 1), r = this._getClosestResting(n, t, -1);
        return i.distance < r.distance ? i.index : r.index
    }, u._getClosestResting = function (n, t, i) {
        for (var r = this.selectedIndex, u = 1 / 0, f = this.options.contain && !this.options.wrapAround ? function (n, t) {
                return n <= t
            } : function (n, t) {
                return n < t
            }; f(t, u) && (r += i, u = t, t = this.getSlideDistance(-n, r), null !== t);)t = Math.abs(t);
        return {distance: u, index: r - i}
    }, u.getSlideDistance = function (n, t) {
        var i = this.slides.length, u = this.options.wrapAround && i > 1, o = u ? r.modulo(t, i) : t, f = this.slides[o], e;
        return f ? (e = u ? this.slideableWidth * Math.floor(t / i) : 0, n - (f.target + e)) : null
    }, u.dragEndBoostSelect = function () {
        if (void 0 === this.previousDragX || !this.dragMoveTime || new Date - this.dragMoveTime > 100)return 0;
        var n = this.getSlideDistance(-this.dragX, this.selectedIndex), t = this.previousDragX - this.dragX;
        return n > 0 && t > 0 ? 1 : n < 0 && t < 0 ? -1 : 0
    }, u.staticClick = function (n, t) {
        var i = this.getParentCell(n.target), r = i && i.element, u = i && this.cells.indexOf(i);
        this.dispatchEvent("staticClick", n, [t, r, u])
    }, u.onscroll = function () {
        var n = e(), t = this.pointerDownScroll.x - n.x, i = this.pointerDownScroll.y - n.y;
        (Math.abs(t) > 3 || Math.abs(i) > 3) && this._pointerDone()
    }, t
}), function (n, t) {
    "function" == typeof define && define.amd ? define("tap-listener/tap-listener", ["unipointer/unipointer"], function (i) {
            return t(n, i)
        }) : "object" == typeof module && module.exports ? module.exports = t(n, require("unipointer")) : n.TapListener = t(n, n.Unipointer)
}(window, function (n, t) {
    function r(n) {
        this.bindTap(n)
    }

    var i = r.prototype = Object.create(t.prototype);
    return i.bindTap = function (n) {
        n && (this.unbindTap(), this.tapElement = n, this._bindStartEvent(n, !0))
    }, i.unbindTap = function () {
        this.tapElement && (this._bindStartEvent(this.tapElement, !0), delete this.tapElement)
    }, i.pointerUp = function (i, r) {
        var s;
        if (!this.isIgnoringMouseUp || "mouseup" != i.type) {
            var u = t.getPointerPoint(r), f = this.tapElement.getBoundingClientRect(), e = n.pageXOffset, o = n.pageYOffset, h = u.x >= f.left + e && u.x <= f.right + e && u.y >= f.top + o && u.y <= f.bottom + o;
            (h && this.emitEvent("tap", [i, r]), "mouseup" != i.type) && (this.isIgnoringMouseUp = !0, s = this, setTimeout(function () {
                delete s.isIgnoringMouseUp
            }, 400))
        }
    }, i.destroy = function () {
        this.pointerDone();
        this.unbindTap()
    }, r
}), function (n, t) {
    "function" == typeof define && define.amd ? define("flickity/js/prev-next-button", ["./flickity", "tap-listener/tap-listener", "fizzy-ui-utils/utils"], function (i, r, u) {
            return t(n, i, r, u)
        }) : "object" == typeof module && module.exports ? module.exports = t(n, require("./flickity"), require("tap-listener"), require("fizzy-ui-utils")) : t(n, n.Flickity, n.TapListener, n.fizzyUIUtils)
}(window, function (n, t, i, r) {
    "use strict";
    function u(n, t) {
        this.direction = n;
        this.parent = t;
        this._create()
    }

    function o(n) {
        return "string" == typeof n ? n : "M " + n.x0 + ",50 L " + n.x1 + "," + (n.y1 + 50) + " L " + n.x2 + "," + (n.y2 + 50) + " L " + n.x3 + ",50  L " + n.x2 + "," + (50 - n.y2) + " L " + n.x1 + "," + (50 - n.y1) + " Z"
    }

    var e = "http://www.w3.org/2000/svg", f;
    return u.prototype = new i, u.prototype._create = function () {
        var t, n, i;
        this.isEnabled = !0;
        this.isPrevious = this.direction == -1;
        t = this.parent.options.rightToLeft ? 1 : -1;
        this.isLeft = this.direction == t;
        n = this.element = document.createElement("button");
        n.className = "flickity-prev-next-button";
        n.className += this.isPrevious ? " previous" : " next";
        n.setAttribute("type", "button");
        this.disable();
        n.setAttribute("aria-label", this.isPrevious ? "previous" : "next");
        i = this.createSVG();
        n.appendChild(i);
        this.on("tap", this.onTap);
        this.parent.on("select", this.update.bind(this));
        this.on("pointerDown", this.parent.childUIPointerDown.bind(this.parent))
    }, u.prototype.activate = function () {
        this.bindTap(this.element);
        this.element.addEventListener("click", this);
        this.parent.element.appendChild(this.element)
    }, u.prototype.deactivate = function () {
        this.parent.element.removeChild(this.element);
        i.prototype.destroy.call(this);
        this.element.removeEventListener("click", this)
    }, u.prototype.createSVG = function () {
        var t = document.createElementNS(e, "svg"), n, i;
        return t.setAttribute("viewBox", "0 0 100 100"), n = document.createElementNS(e, "path"), i = o(this.parent.options.arrowShape), n.setAttribute("d", i), n.setAttribute("class", "arrow"), this.isLeft || n.setAttribute("transform", "translate(100, 100) rotate(180) "), t.appendChild(n), t
    }, u.prototype.onTap = function () {
        if (this.isEnabled) {
            this.parent.uiChange();
            var n = this.isPrevious ? "previous" : "next";
            this.parent[n]()
        }
    }, u.prototype.handleEvent = r.handleEvent, u.prototype.onclick = function () {
        var n = document.activeElement;
        n && n == this.element && this.onTap()
    }, u.prototype.enable = function () {
        this.isEnabled || (this.element.disabled = !1, this.isEnabled = !0)
    }, u.prototype.disable = function () {
        this.isEnabled && (this.element.disabled = !0, this.isEnabled = !1)
    }, u.prototype.update = function () {
        var n = this.parent.slides;
        if (this.parent.options.wrapAround && n.length > 1)return void this.enable();
        var t = n.length ? n.length - 1 : 0, i = this.isPrevious ? 0 : t, r = this.parent.selectedIndex == i ? "disable" : "enable";
        this[r]()
    }, u.prototype.destroy = function () {
        this.deactivate()
    }, r.extend(t.defaults, {
        prevNextButtons: !0,
        arrowShape: {x0: 10, x1: 60, y1: 50, x2: 70, y2: 40, x3: 30}
    }), t.createMethods.push("_createPrevNextButtons"), f = t.prototype, f._createPrevNextButtons = function () {
        this.options.prevNextButtons && (this.prevButton = new u(-1, this), this.nextButton = new u(1, this), this.on("activate", this.activatePrevNextButtons))
    }, f.activatePrevNextButtons = function () {
        this.prevButton.activate();
        this.nextButton.activate();
        this.on("deactivate", this.deactivatePrevNextButtons)
    }, f.deactivatePrevNextButtons = function () {
        this.prevButton.deactivate();
        this.nextButton.deactivate();
        this.off("deactivate", this.deactivatePrevNextButtons)
    }, t.PrevNextButton = u, t
}), function (n, t) {
    "function" == typeof define && define.amd ? define("flickity/js/page-dots", ["./flickity", "tap-listener/tap-listener", "fizzy-ui-utils/utils"], function (i, r, u) {
            return t(n, i, r, u)
        }) : "object" == typeof module && module.exports ? module.exports = t(n, require("./flickity"), require("tap-listener"), require("fizzy-ui-utils")) : t(n, n.Flickity, n.TapListener, n.fizzyUIUtils)
}(window, function (n, t, i, r) {
    function u(n) {
        this.parent = n;
        this._create()
    }

    u.prototype = new i;
    u.prototype._create = function () {
        this.holder = document.createElement("ol");
        this.holder.className = "flickity-page-dots";
        this.dots = [];
        this.on("tap", this.onTap);
        this.on("pointerDown", this.parent.childUIPointerDown.bind(this.parent))
    };
    u.prototype.activate = function () {
        this.setDots();
        this.bindTap(this.holder);
        this.parent.element.appendChild(this.holder)
    };
    u.prototype.deactivate = function () {
        this.parent.element.removeChild(this.holder);
        i.prototype.destroy.call(this)
    };
    u.prototype.setDots = function () {
        var n = this.parent.slides.length - this.dots.length;
        n > 0 ? this.addDots(n) : n < 0 && this.removeDots(-n)
    };
    u.prototype.addDots = function (n) {
        for (var t, i = document.createDocumentFragment(), r = []; n;)t = document.createElement("li"), t.className = "dot", i.appendChild(t), r.push(t), n--;
        this.holder.appendChild(i);
        this.dots = this.dots.concat(r)
    };
    u.prototype.removeDots = function (n) {
        var t = this.dots.splice(this.dots.length - n, n);
        t.forEach(function (n) {
            this.holder.removeChild(n)
        }, this)
    };
    u.prototype.updateSelected = function () {
        this.selectedDot && (this.selectedDot.className = "dot");
        this.dots.length && (this.selectedDot = this.dots[this.parent.selectedIndex], this.selectedDot.className = "dot is-selected")
    };
    u.prototype.onTap = function (n) {
        var t = n.target, i;
        "LI" == t.nodeName && (this.parent.uiChange(), i = this.dots.indexOf(t), this.parent.select(i))
    };
    u.prototype.destroy = function () {
        this.deactivate()
    };
    t.PageDots = u;
    r.extend(t.defaults, {pageDots: !0});
    t.createMethods.push("_createPageDots");
    var f = t.prototype;
    return f._createPageDots = function () {
        this.options.pageDots && (this.pageDots = new u(this), this.on("activate", this.activatePageDots), this.on("select", this.updateSelectedPageDots), this.on("cellChange", this.updatePageDots), this.on("resize", this.updatePageDots), this.on("deactivate", this.deactivatePageDots))
    }, f.activatePageDots = function () {
        this.pageDots.activate()
    }, f.updateSelectedPageDots = function () {
        this.pageDots.updateSelected()
    }, f.updatePageDots = function () {
        this.pageDots.setDots()
    }, f.deactivatePageDots = function () {
        this.pageDots.deactivate()
    }, t.PageDots = u, t
}), function (n, t) {
    "function" == typeof define && define.amd ? define("flickity/js/player", ["ev-emitter/ev-emitter", "fizzy-ui-utils/utils", "./flickity"], function (n, i, r) {
            return t(n, i, r)
        }) : "object" == typeof module && module.exports ? module.exports = t(require("ev-emitter"), require("fizzy-ui-utils"), require("./flickity")) : t(n.EvEmitter, n.fizzyUIUtils, n.Flickity)
}(window, function (n, t, i) {
    function r(n) {
        this.parent = n;
        this.state = "stopped";
        u && (this.onVisibilityChange = function () {
            this.visibilityChange()
        }.bind(this), this.onVisibilityPlay = function () {
            this.visibilityPlay()
        }.bind(this))
    }

    var e, u, f;
    return "hidden" in document ? (e = "hidden", u = "visibilitychange") : "webkitHidden" in document && (e = "webkitHidden", u = "webkitvisibilitychange"), r.prototype = Object.create(n.prototype), r.prototype.play = function () {
        if ("playing" != this.state) {
            var n = document[e];
            if (u && n)return void document.addEventListener(u, this.onVisibilityPlay);
            this.state = "playing";
            u && document.addEventListener(u, this.onVisibilityChange);
            this.tick()
        }
    }, r.prototype.tick = function () {
        var n, t;
        "playing" == this.state && (n = this.parent.options.autoPlay, n = "number" == typeof n ? n : 3e3, t = this, this.clear(), this.timeout = setTimeout(function () {
            t.parent.next(!0);
            t.tick()
        }, n))
    }, r.prototype.stop = function () {
        this.state = "stopped";
        this.clear();
        u && document.removeEventListener(u, this.onVisibilityChange)
    }, r.prototype.clear = function () {
        clearTimeout(this.timeout)
    }, r.prototype.pause = function () {
        "playing" == this.state && (this.state = "paused", this.clear())
    }, r.prototype.unpause = function () {
        "paused" == this.state && this.play()
    }, r.prototype.visibilityChange = function () {
        var n = document[e];
        this[n ? "pause" : "unpause"]()
    }, r.prototype.visibilityPlay = function () {
        this.play();
        document.removeEventListener(u, this.onVisibilityPlay)
    }, t.extend(i.defaults, {pauseAutoPlayOnHover: !0}), i.createMethods.push("_createPlayer"), f = i.prototype, f._createPlayer = function () {
        this.player = new r(this);
        this.on("activate", this.activatePlayer);
        this.on("uiChange", this.stopPlayer);
        this.on("pointerDown", this.stopPlayer);
        this.on("deactivate", this.deactivatePlayer)
    }, f.activatePlayer = function () {
        this.options.autoPlay && (this.player.play(), this.element.addEventListener("mouseenter", this))
    }, f.playPlayer = function () {
        this.player.play()
    }, f.stopPlayer = function () {
        this.player.stop()
    }, f.pausePlayer = function () {
        this.player.pause()
    }, f.unpausePlayer = function () {
        this.player.unpause()
    }, f.deactivatePlayer = function () {
        this.player.stop();
        this.element.removeEventListener("mouseenter", this)
    }, f.onmouseenter = function () {
        this.options.pauseAutoPlayOnHover && (this.player.pause(), this.element.addEventListener("mouseleave", this))
    }, f.onmouseleave = function () {
        this.player.unpause();
        this.element.removeEventListener("mouseleave", this)
    }, i.Player = r, i
}), function (n, t) {
    "function" == typeof define && define.amd ? define("flickity/js/add-remove-cell", ["./flickity", "fizzy-ui-utils/utils"], function (i, r) {
            return t(n, i, r)
        }) : "object" == typeof module && module.exports ? module.exports = t(n, require("./flickity"), require("fizzy-ui-utils")) : t(n, n.Flickity, n.fizzyUIUtils)
}(window, function (n, t, i) {
    function u(n) {
        var t = document.createDocumentFragment();
        return n.forEach(function (n) {
            t.appendChild(n.element)
        }), t
    }

    var r = t.prototype;
    return r.insert = function (n, t) {
        var i = this._makeCells(n), r, f, e, o, s, h;
        i && i.length && (r = this.cells.length, t = void 0 === t ? r : t, f = u(i), e = t == r, e ? this.slider.appendChild(f) : (o = this.cells[t].element, this.slider.insertBefore(f, o)), 0 === t ? this.cells = i.concat(this.cells) : e ? this.cells = this.cells.concat(i) : (s = this.cells.splice(t, r - t), this.cells = this.cells.concat(i).concat(s)), this._sizeCells(i), h = t > this.selectedIndex ? 0 : i.length, this._cellAddedRemoved(t, h))
    }, r.append = function (n) {
        this.insert(n, this.cells.length)
    }, r.prepend = function (n) {
        this.insert(n, 0)
    }, r.remove = function (n) {
        for (var r, u = this.getCells(n), f = 0, e = u.length, o, t = 0; t < e; t++)r = u[t], o = this.cells.indexOf(r) < this.selectedIndex, f -= o ? 1 : 0;
        for (t = 0; t < e; t++)r = u[t], r.remove(), i.removeFrom(this.cells, r);
        u.length && this._cellAddedRemoved(0, f)
    }, r._cellAddedRemoved = function (n, t) {
        t = t || 0;
        this.selectedIndex += t;
        this.selectedIndex = Math.max(0, Math.min(this.slides.length - 1, this.selectedIndex));
        this.cellChange(n, !0);
        this.emitEvent("cellAddedRemoved", [n, t])
    }, r.cellSizeChange = function (n) {
        var t = this.getCell(n), i;
        t && (t.getSize(), i = this.cells.indexOf(t), this.cellChange(i))
    }, r.cellChange = function (n, t) {
        var r = this.slideableWidth, i;
        (this._positionCells(n), this._getWrapShiftCells(), this.setGallerySize(), this.emitEvent("cellChange", [n]), this.options.freeScroll) ? (i = r - this.slideableWidth, this.x += i * this.cellAlign, this.positionSlider()) : (t && this.positionSliderAtSelected(), this.select(this.selectedIndex))
    }, t
}), function (n, t) {
    "function" == typeof define && define.amd ? define("flickity/js/lazyload", ["./flickity", "fizzy-ui-utils/utils"], function (i, r) {
            return t(n, i, r)
        }) : "object" == typeof module && module.exports ? module.exports = t(n, require("./flickity"), require("fizzy-ui-utils")) : t(n, n.Flickity, n.fizzyUIUtils)
}(window, function (n, t, i) {
    "use strict";
    function f(n) {
        if ("IMG" == n.nodeName && n.getAttribute("data-flickity-lazyload"))return [n];
        var t = n.querySelectorAll("img[data-flickity-lazyload]");
        return i.makeArray(t)
    }

    function r(n, t) {
        this.img = n;
        this.flickity = t;
        this.load()
    }

    t.createMethods.push("_createLazyload");
    var u = t.prototype;
    return u._createLazyload = function () {
        this.on("select", this.lazyLoad)
    }, u.lazyLoad = function () {
        var n = this.options.lazyLoad;
        if (n) {
            var i = "number" == typeof n ? n : 0, u = this.getAdjacentCellElements(i), t = [];
            u.forEach(function (n) {
                var i = f(n);
                t = t.concat(i)
            });
            t.forEach(function (n) {
                new r(n, this)
            }, this)
        }
    }, r.prototype.handleEvent = i.handleEvent, r.prototype.load = function () {
        this.img.addEventListener("load", this);
        this.img.addEventListener("error", this);
        this.img.src = this.img.getAttribute("data-flickity-lazyload");
        this.img.removeAttribute("data-flickity-lazyload")
    }, r.prototype.onload = function (n) {
        this.complete(n, "flickity-lazyloaded")
    }, r.prototype.onerror = function (n) {
        this.complete(n, "flickity-lazyerror")
    }, r.prototype.complete = function (n, t) {
        this.img.removeEventListener("load", this);
        this.img.removeEventListener("error", this);
        var i = this.flickity.getParentCell(this.img), r = i && i.element;
        this.flickity.cellSizeChange(r);
        this.img.classList.add(t);
        this.flickity.dispatchEvent("lazyLoad", n, r)
    }, t.LazyLoader = r, t
}), function (n, t) {
    "function" == typeof define && define.amd ? define("flickity/js/index", ["./flickity", "./drag", "./prev-next-button", "./page-dots", "./player", "./add-remove-cell", "./lazyload"], t) : "object" == typeof module && module.exports && (module.exports = t(require("./flickity"), require("./drag"), require("./prev-next-button"), require("./page-dots"), require("./player"), require("./add-remove-cell"), require("./lazyload")))
}(window, function (n) {
    return n
}), function (n, t) {
    "function" == typeof define && define.amd ? define("flickity-as-nav-for/as-nav-for", ["flickity/js/index", "fizzy-ui-utils/utils"], t) : "object" == typeof module && module.exports ? module.exports = t(require("flickity"), require("fizzy-ui-utils")) : n.Flickity = t(n.Flickity, n.fizzyUIUtils)
}(window, function (n, t) {
    function r(n, t, i) {
        return (t - n) * i + n
    }

    n.createMethods.push("_createAsNavFor");
    var i = n.prototype;
    return i._createAsNavFor = function () {
        var n, t;
        this.on("activate", this.activateAsNavFor);
        this.on("deactivate", this.deactivateAsNavFor);
        this.on("destroy", this.destroyAsNavFor);
        n = this.options.asNavFor;
        n && (t = this, setTimeout(function () {
            t.setNavCompanion(n)
        }))
    }, i.setNavCompanion = function (i) {
        var r, u;
        i = t.getQueryElement(i);
        r = n.data(i);
        r && r != this && (this.navCompanion = r, u = this, this.onNavCompanionSelect = function () {
            u.navCompanionSelect()
        }, r.on("select", this.onNavCompanionSelect), this.on("staticClick", this.onNavStaticClick), this.navCompanionSelect(!0))
    }, i.navCompanionSelect = function (n) {
        var f;
        if (this.navCompanion) {
            var e = this.navCompanion.selectedCells[0], t = this.navCompanion.cells.indexOf(e), i = t + this.navCompanion.selectedCells.length - 1, u = Math.floor(r(t, i, this.navCompanion.cellAlign));
            (this.selectCell(u, !1, n), this.removeNavSelectedElements(), u >= this.cells.length) || (f = this.cells.slice(t, i + 1), this.navSelectedElements = f.map(function (n) {
                return n.element
            }), this.changeNavSelectedClass("add"))
        }
    }, i.changeNavSelectedClass = function (n) {
        this.navSelectedElements.forEach(function (t) {
            t.classList[n]("is-nav-selected")
        })
    }, i.activateAsNavFor = function () {
        this.navCompanionSelect(!0)
    }, i.removeNavSelectedElements = function () {
        this.navSelectedElements && (this.changeNavSelectedClass("remove"), delete this.navSelectedElements)
    }, i.onNavStaticClick = function (n, t, i, r) {
        "number" == typeof r && this.navCompanion.selectCell(r)
    }, i.deactivateAsNavFor = function () {
        this.removeNavSelectedElements()
    }, i.destroyAsNavFor = function () {
        this.navCompanion && (this.navCompanion.off("select", this.onNavCompanionSelect), this.off("staticClick", this.onNavStaticClick), delete this.navCompanion)
    }, n
}), function (n, t) {
    "use strict";
    "function" == typeof define && define.amd ? define("imagesloaded/imagesloaded", ["ev-emitter/ev-emitter"], function (i) {
            return t(n, i)
        }) : "object" == typeof module && module.exports ? module.exports = t(n, require("ev-emitter")) : n.imagesLoaded = t(n, n.EvEmitter)
}(window, function (n, t) {
    function e(n, t) {
        for (var i in t)n[i] = t[i];
        return n
    }

    function h(n) {
        var t = [], i;
        if (Array.isArray(n)) t = n; else if ("number" == typeof n.length)for (i = 0; i < n.length; i++)t.push(n[i]); else t.push(n);
        return t
    }

    function i(n, t, r) {
        return this instanceof i ? ("string" == typeof n && (n = document.querySelectorAll(n)), this.elements = h(n), this.options = e({}, this.options), "function" == typeof t ? r = t : e(this.options, t), r && this.on("always", r), this.getImages(), f && (this.jqDeferred = new f.Deferred), void setTimeout(function () {
                this.check()
            }.bind(this))) : new i(n, t, r)
    }

    function r(n) {
        this.img = n
    }

    function u(n, t) {
        this.url = n;
        this.element = t;
        this.img = new Image
    }

    var f = n.jQuery, o = n.console, s;
    return i.prototype = Object.create(t.prototype), i.prototype.options = {}, i.prototype.getImages = function () {
        this.images = [];
        this.elements.forEach(this.addElementImages, this)
    }, i.prototype.addElementImages = function (n) {
        var i, r, t, f, u, e;
        if ("IMG" == n.nodeName && this.addImage(n), this.options.background === !0 && this.addElementBackgroundImages(n), i = n.nodeType, i && s[i]) {
            for (r = n.querySelectorAll("img"), t = 0; t < r.length; t++)f = r[t], this.addImage(f);
            if ("string" == typeof this.options.background)for (u = n.querySelectorAll(this.options.background), t = 0; t < u.length; t++)e = u[t], this.addElementBackgroundImages(e)
        }
    }, s = {1: !0, 9: !0, 11: !0}, i.prototype.addElementBackgroundImages = function (n) {
        var i = getComputedStyle(n), r, t, u;
        if (i)for (r = /url\((['"])?(.*?)\1\)/gi, t = r.exec(i.backgroundImage); null !== t;)u = t && t[2], u && this.addBackground(u, n), t = r.exec(i.backgroundImage)
    }, i.prototype.addImage = function (n) {
        var t = new r(n);
        this.images.push(t)
    }, i.prototype.addBackground = function (n, t) {
        var i = new u(n, t);
        this.images.push(i)
    }, i.prototype.check = function () {
        function n(n, i, r) {
            setTimeout(function () {
                t.progress(n, i, r)
            })
        }

        var t = this;
        return this.progressedCount = 0, this.hasAnyBroken = !1, this.images.length ? void this.images.forEach(function (t) {
                t.once("progress", n);
                t.check()
            }) : void this.complete()
    }, i.prototype.progress = function (n, t, i) {
        this.progressedCount++;
        this.hasAnyBroken = this.hasAnyBroken || !n.isLoaded;
        this.emitEvent("progress", [this, n, t]);
        this.jqDeferred && this.jqDeferred.notify && this.jqDeferred.notify(this, n);
        this.progressedCount == this.images.length && this.complete();
        this.options.debug && o && o.log("progress: " + i, n, t)
    }, i.prototype.complete = function () {
        var t = this.hasAnyBroken ? "fail" : "done", n;
        (this.isComplete = !0, this.emitEvent(t, [this]), this.emitEvent("always", [this]), this.jqDeferred) && (n = this.hasAnyBroken ? "reject" : "resolve", this.jqDeferred[n](this))
    }, r.prototype = Object.create(t.prototype), r.prototype.check = function () {
        var n = this.getIsImageComplete();
        return n ? void this.confirm(0 !== this.img.naturalWidth, "naturalWidth") : (this.proxyImage = new Image, this.proxyImage.addEventListener("load", this), this.proxyImage.addEventListener("error", this), this.img.addEventListener("load", this), this.img.addEventListener("error", this), void(this.proxyImage.src = this.img.src))
    }, r.prototype.getIsImageComplete = function () {
        return this.img.complete && void 0 !== this.img.naturalWidth
    }, r.prototype.confirm = function (n, t) {
        this.isLoaded = n;
        this.emitEvent("progress", [this, this.img, t])
    }, r.prototype.handleEvent = function (n) {
        var t = "on" + n.type;
        this[t] && this[t](n)
    }, r.prototype.onload = function () {
        this.confirm(!0, "onload");
        this.unbindEvents()
    }, r.prototype.onerror = function () {
        this.confirm(!1, "onerror");
        this.unbindEvents()
    }, r.prototype.unbindEvents = function () {
        this.proxyImage.removeEventListener("load", this);
        this.proxyImage.removeEventListener("error", this);
        this.img.removeEventListener("load", this);
        this.img.removeEventListener("error", this)
    }, u.prototype = Object.create(r.prototype), u.prototype.check = function () {
        this.img.addEventListener("load", this);
        this.img.addEventListener("error", this);
        this.img.src = this.url;
        var n = this.getIsImageComplete();
        n && (this.confirm(0 !== this.img.naturalWidth, "naturalWidth"), this.unbindEvents())
    }, u.prototype.unbindEvents = function () {
        this.img.removeEventListener("load", this);
        this.img.removeEventListener("error", this)
    }, u.prototype.confirm = function (n, t) {
        this.isLoaded = n;
        this.emitEvent("progress", [this, this.element, t])
    }, i.makeJQueryPlugin = function (t) {
        t = t || n.jQuery;
        t && (f = t, f.fn.imagesLoaded = function (n, t) {
            var r = new i(this, n, t);
            return r.jqDeferred.promise(f(this))
        })
    }, i.makeJQueryPlugin(), i
}), function (n, t) {
    "function" == typeof define && define.amd ? define(["flickity/js/index", "imagesloaded/imagesloaded"], function (i, r) {
            return t(n, i, r)
        }) : "object" == typeof module && module.exports ? module.exports = t(n, require("flickity"), require("imagesloaded")) : n.Flickity = t(n, n.Flickity, n.imagesLoaded)
}(window, function (n, t, i) {
    "use strict";
    t.createMethods.push("_createImagesLoaded");
    var r = t.prototype;
    return r._createImagesLoaded = function () {
        this.on("activate", this.imagesLoaded)
    }, r.imagesLoaded = function () {
        function t(t, i) {
            var r = n.getParentCell(i.img);
            n.cellSizeChange(r && r.element);
            n.options.freeScroll || n.positionSliderAtSelected()
        }

        if (this.options.imagesLoaded) {
            var n = this;
            i(this.slider).on("progress", t)
        }
    }, t
}), function (n) {
    function t(t, i) {
        this.$element = n(t);
        this.options = i;
        this.secondsLeft = null;
        this.refreshRate = this.options.refreshRate;
        this.endTime = null;
        this.timeLeft = null;
        this._init()
    }

    t.prototype = {
        _init: function () {
            this.start()
        }, start: function () {
            this.createMarkup();
            var t = this.$element.attr("class");
            this.$element.on("reset", n.proxy(function () {
                clearInterval(this.$element.intervalId)
            }, this));
            this.$element.on("complete", n.proxy(function () {
                this.$element.onComplete(this.$element)
            }, this));
            this.$element.on("complete", n.proxy(function () {
                this.$element.addClass("timeout")
            }, this));
            this.$element.on("complete", n.proxy(function () {
                this.options && this.options.loop === !0 && this.resetTimer(t)
            }, this));
            this.startCountdown()
        }, createMarkup: function () {
            this.options.enableDate ? (n("<span>", {"class": "timer__holder timer__holder--days"}).append("<span><\/span><span><\/span>").appendTo(this.$element), n("<span>", {
                    "class": "timer__spacer",
                    text: ":"
                }).appendTo(this.$element), n("<span>", {"class": "timer__holder timer__holder--hours"}).append("<span><\/span><span><\/span>").appendTo(this.$element), n("<span>", {
                    "class": "timer__spacer",
                    text: ":"
                }).appendTo(this.$element), n("<span>", {"class": "timer__holder timer__holder--minutes"}).append("<span><\/span><span><\/span>").appendTo(this.$element), n("<span>", {
                    "class": "timer__spacer",
                    text: ":"
                }).appendTo(this.$element), n("<span>", {"class": "timer__holder timer__holder--seconds"}).append("<span><\/span><span><\/span>").appendTo(this.$element)) : (n("<span>", {"class": "timer__holder timer__holder--hours"}).append("<span><\/span><span><\/span>").appendTo(this.$element), n("<span>", {
                    "class": "timer__spacer",
                    text: ":"
                }).appendTo(this.$element), n("<span>", {"class": "timer__holder timer__holder--minutes"}).append("<span><\/span><span><\/span>").appendTo(this.$element), n("<span>", {
                    "class": "timer__spacer",
                    text: ":"
                }).appendTo(this.$element), n("<span>", {"class": "timer__holder timer__holder--seconds"}).append("<span><\/span><span><\/span>").appendTo(this.$element))
        }, resetTimer: function () {
            var t = 0;
            this.options.loopInterval && (t = parseInt(this.options.loopInterval, 10) * 1e3);
            setTimeout(n.proxy(function () {
                this.$element.trigger("reset")
            }, this), t)
        }, fetchSecondsLeft: function () {
            var n = parseFloat(this.$element.attr("data-seconds-left")), t = parseFloat(this.$element.attr("data-minutes-left"));
            if (n)return parseInt(n, 10) * 1e3;
            if (t)return parseFloat(t) * 6e4;
            throw"Missing time data";
        }, startCountdown: function () {
            var n = null, t = function () {
                return clearInterval(n), this.clearTimer(this.$element)
            }.bind(this);
            this.$element.onComplete = this.options.onComplete || t;
            this.secondsLeft = this.fetchSecondsLeft();
            this.endTime = this.secondsLeft + this.currentTime();
            this.timeLeft = this.endTime - this.currentTime();
            this.setFinalValue(this.formatTimeLeft(this.timeLeft));
            n = setInterval(function () {
                this.timeLeft = this.endTime - this.currentTime();
                this.setFinalValue(this.formatTimeLeft(this.timeLeft))
            }.bind(this), this.refreshRate);
            this.$element.intervalId = n
        }, clearTimer: function () {
            this.$element.find(".timer__holder--seconds span").text("0");
            this.$element.find(".timer__holder--minutes span").text("0");
            this.$element.find(".timer__holder--hours span").text("0");
            this.$element.find(".timer__holder--days span").text("0")
        }, currentTime: function () {
            return Math.round((new Date).getTime())
        }, formatTimeLeft: function (n) {
            var t = function (n, t) {
                return n = n + "", n.length >= t ? n : Array(t - n.length + 1).join(0) + n
            }, r, u, f, i, e;
            return i = new Date(n), r = i.getUTCDate() - 1, u = i.getUTCHours(), f = i.getUTCMinutes(), e = i.getUTCSeconds(), +r == 0 && +u == 0 && +f == 0 && +e == 0 ? [] : r != 0 ? [t(r, 2), t(u, 2), t(f, 2), t(e, 2)] : [t(u, 2), t(f, 2), t(e, 2)]
        }, setFinalValue: function (n) {
            var t, i, r, u;
            if (n.length === 0)return this.clearTimer(), this.$element.trigger("complete"), !1;
            t = n.pop();
            this.$element.find(".timer__holder--seconds span").text(function (n) {
                return t.split("")[n]
            });
            i = n.pop();
            this.$element.find(".timer__holder--minutes span").text(function (n) {
                return i.split("")[n]
            });
            r = n.pop();
            this.$element.find(".timer__holder--hours span").text(function (n) {
                return r.split("")[n]
            });
            parseInt(n[n.length - 1]) != 0 && (u = n.pop(), this.$element.find(".timer__holder--days span").text(function (n) {
                return u.split("")[n]
            }))
        }
    };
    n.fn.startTimer = function (i) {
        var r, u;
        return typeof i == "string" ? (r = this.data("startTimer"), r && (u = r[i].apply(r, Array.prototype.slice.call(arguments, 1)), u)) ? u : this : (i = n.extend({}, n.fn.startTimer.defaults, i), this.each(function () {
                var r = n.data(this, "startTimer");
                r || (r = new t(this, i), n.data(this, "startTimer", r))
            }))
    };
    n.fn.startTimer.defaults = {
        enableDate: null,
        onComplete: null,
        refreshRate: 50,
        segmentTag: null,
        loop: !1,
        loopInterval: null
    }
}(jQuery, window, document), function (n) {
    function o(i, r, f, o) {
        var s = {
            data: o || o === 0 || o === !1 ? o : r ? r.data : {},
            _wrap: r ? r._wrap : null,
            tmpl: null,
            parent: r || null,
            nodes: [],
            calls: d,
            nest: g,
            wrap: nt,
            html: tt,
            update: it
        };
        return i && n.extend(s, i, {
            nodes: [],
            parent: r
        }), f && (s.tmpl = f, s._ctnt = s._ctnt || s.tmpl(n, s), s.key = ++e, (c.length ? u : t)[e] = s), s
    }

    function s(t, i, u) {
        var f, e = u ? n.map(u, function (n) {
                return typeof n == "string" ? t.key ? n.replace(/(<\w+)(?=[\s>])(?![^>]*_tmplitem)([^>]*)/g, "$1 " + r + '="' + t.key + '" $2') : n : s(n, t, n._ctnt)
            }) : t;
        return i ? e : (e = e.join(""), e.replace(/^\s*([^<\s][^<]*)?(<[\w\W]+>)([^>]*[^>\s])?\s*$/, function (t, i, r, u) {
                f = n(r).get();
                b(f);
                i && (f = l(i).concat(f));
                u && (f = f.concat(l(u)))
            }), f ? f : l(e))
    }

    function l(t) {
        var i = document.createElement("div");
        return i.innerHTML = t, n.makeArray(i.childNodes)
    }

    function p(t) {
        return new Function("jQuery", "$item", "var $=jQuery,call,__=[],$data=$item.data;with($data){__.push('" + n.trim(t).replace(/([\\'])/g, "\\$1").replace(/[\r\t\n]/g, " ").replace(/\$\{([^\}]*)\}/g, "{{= $1}}").replace(/\{\{(\/?)(\w+|.)(?:\(((?:[^\}]|\}(?!\}))*?)?\))?(?:\s+(.*?)?)?(\(((?:[^\}]|\}(?!\}))*?)\))?\s*\}\}/g, function (t, i, r, u, f, e, o) {
                var c = n.tmpl.tag[r], l, s, a;
                if (!c)throw"Unknown template tag: " + r;
                return l = c._default || [], e && !/\w$/.test(f) && (f += e, e = ""), f ? (f = h(f), o = o ? "," + h(o) + ")" : e ? ")" : "", s = e ? f.indexOf(".") > -1 ? f + h(e) : "(" + f + ").call($item" + o : f, a = e ? s : "(typeof(" + f + ")==='function'?(" + f + ").call($item):(" + f + "))") : a = s = l.$1 || "null", u = h(u), "');" + c[i ? "close" : "open"].split("$notnull_1").join(f ? "typeof(" + f + ")!=='undefined' && (" + f + ")!=null" : "true").split("$1a").join(a).split("$1").join(s).split("$2").join(u || l.$2 || "") + "__.push('"
            }) + "');}return __;")
    }

    function w(t, i) {
        t._wrap = s(t, !0, n.isArray(i) ? i : [v.test(i) ? i : n(i).html()]).join("")
    }

    function h(n) {
        return n ? n.replace(/\\'/g, "'").replace(/\\\\/g, "\\") : null
    }

    function k(n) {
        var t = document.createElement("div");
        return t.appendChild(n.cloneNode(!0)), t.innerHTML
    }

    function b(f) {
        function p(f) {
            function p(n) {
                n = n + a;
                s = v[n] = v[n] || o(s, t[s.parent.key + a] || s.parent)
            }

            var y, h = f, c, s, l;
            if (l = f.getAttribute(r)) {
                while (h.parentNode && (h = h.parentNode).nodeType === 1 && !(y = h.getAttribute(r)));
                y !== l && (h = h.parentNode ? h.nodeType === 11 ? 0 : h.getAttribute(r) || 0 : 0, (s = t[l]) || (s = u[l], s = o(s, t[h] || u[h]), s.key = ++e, t[e] = s), i && p(l));
                f.removeAttribute(r)
            } else i && (s = n.data(f, "tmplItem")) && (p(s.key), t[s.key] = s, h = n.data(f.parentNode, "tmplItem"), h = h ? h.key : 0);
            if (s) {
                for (c = s; c && c.key != h;)c.nodes.push(f), c = c.parent;
                delete s._ctnt;
                delete s._wrap;
                n.data(f, "tmplItem", s)
            }
        }

        for (var a = "_" + i, c, l, v = {}, h, s = 0, y = f.length; s < y; s++)if ((c = f[s]).nodeType === 1) {
            for (l = c.getElementsByTagName("*"), h = l.length - 1; h >= 0; h--)p(l[h]);
            p(c)
        }
    }

    function d(n, t, i, r) {
        if (!n)return c.pop();
        c.push({_: n, tmpl: t, item: this, data: i, options: r})
    }

    function g(t, i, r) {
        return n.tmpl(n.template(t), i, r, this)
    }

    function nt(t, i) {
        var r = t.options || {};
        return r.wrapped = i, n.tmpl(n.template(t.tmpl), t.data, r, t.item)
    }

    function tt(t, i) {
        var r = this._wrap;
        return n.map(n(n.isArray(r) ? r.join("") : r).filter(t || "*"), function (n) {
            return i ? n.innerText || n.textContent : n.outerHTML || k(n)
        })
    }

    function it() {
        var t = this.nodes;
        n.tmpl(null, null, null, this).insertBefore(t[0]);
        n(t).remove()
    }

    var a = n.fn.domManip, r = "_tmplitem", v = /^[^<]*(<[\w\W]+>)[^>]*$|\{\{\! /, t = {}, u = {}, f, y = {
        key: 0,
        data: {}
    }, e = 0, i = 0, c = [];
    n.each({
        appendTo: "append",
        prependTo: "prepend",
        insertBefore: "before",
        insertAfter: "after",
        replaceAll: "replaceWith"
    }, function (r, u) {
        n.fn[r] = function (e) {
            var o = [], h = n(e), c, s, a, v, l = this.length === 1 && this[0].parentNode;
            if (f = t || {}, l && l.nodeType === 11 && l.childNodes.length === 1 && h.length === 1) h[u](this[0]), o = this; else {
                for (s = 0, a = h.length; s < a; s++)i = s, c = (s > 0 ? this.clone(!0) : this).get(), n(h[s])[u](c), o = o.concat(c);
                i = 0;
                o = this.pushStack(o, r, h.selector)
            }
            return v = f, f = null, n.tmpl.complete(v), o
        }
    });
    n.fn.extend({
        tmpl: function (t, i, r) {
            return n.tmpl(this[0], t, i, r)
        }, tmplItem: function () {
            return n.tmplItem(this[0])
        }, template: function (t) {
            return n.template(t, this[0])
        }, domManip: function (r, u, e) {
            if (r[0] && n.isArray(r[0])) {
                for (var o = n.makeArray(arguments), s = r[0], l = s.length, h = 0, c; h < l && !(c = n.data(s[h++], "tmplItem")););
                c && i && (o[2] = function (t) {
                    n.tmpl.afterManip(this, t, e)
                });
                a.apply(this, o)
            } else a.apply(this, arguments);
            return i = 0, f || n.tmpl.complete(t), this
        }
    });
    n.extend({
        tmpl: function (i, r, f, e) {
            var h, c = !e;
            if (c) e = y, i = n.template[i] || n.template(null, i), u = {}; else if (!i)return i = e.tmpl, t[e.key] = e, e.nodes = [], e.wrapped && w(e, e.wrapped), n(s(e, null, e.tmpl(n, e)));
            return i ? (typeof r == "function" && (r = r.call(e || {})), f && f.wrapped && w(f, f.wrapped), h = n.isArray(r) ? n.map(r, function (n) {
                        return n ? o(f, e, i, n) : null
                    }) : [o(f, e, i, r)], c ? n(s(e, null, h)) : h) : []
        }, tmplItem: function (t) {
            var i;
            for (t instanceof n && (t = t[0]); t && t.nodeType === 1 && !(i = n.data(t, "tmplItem")) && (t = t.parentNode););
            return i || y
        }, template: function (t, i) {
            return i ? (typeof i == "string" ? i = p(i) : i instanceof n && (i = i[0] || {}), i.nodeType && (i = n.data(i, "tmpl") || n.data(i, "tmpl", p(i.innerHTML))), typeof t == "string" ? n.template[t] = i : i) : t ? typeof t != "string" ? n.template(null, t) : n.template[t] || n.template(null, v.test(t) ? t : n(t)) : null
        }, encode: function (n) {
            return ("" + n).split("<").join("&lt;").split(">").join("&gt;").split('"').join("&#34;").split("'").join("&#39;")
        }
    });
    n.extend(n.tmpl, {
        tag: {
            tmpl: {_default: {$2: "null"}, open: "if($notnull_1){__=__.concat($item.nest($1,$2));}"},
            wrap: {
                _default: {$2: "null"},
                open: "$item.calls(__,$1,$2);__=[];",
                close: "call=$item.calls();__=call._.concat($item.wrap(call,__));"
            },
            each: {
                _default: {$2: "$index, $value"},
                open: "if($notnull_1){$.each($1a,function($2){with(this){",
                close: "}});}"
            },
            "if": {open: "if(($notnull_1) && $1a){", close: "}"},
            "else": {_default: {$1: "true"}, open: "}else if(($notnull_1) && $1a){"},
            html: {open: "if($notnull_1){__.push($1a);}"},
            "=": {_default: {$1: "$data"}, open: "if($notnull_1){__.push($.encode($1a));}"},
            "!": {open: ""}
        }, complete: function () {
            t = {}
        }, afterManip: function (t, r, u) {
            var f = r.nodeType === 11 ? n.makeArray(r.childNodes) : r.nodeType === 1 ? [r] : [];
            u.call(t, r);
            b(f);
            i++
        }
    })
}(jQuery), function (n) {
    function s() {
        if (!f) {
            f = !0;
            for (var i in t)n(i).each(function () {
                var r, u;
                r = n(this);
                u = r.data("jqae");
                (u.containerWidth != r.width() || u.containerHeight != r.height()) && o(r, t[i])
            });
            f = !1
        }
    }

    function h(n) {
        t[n] && (delete t[n], t.length || i && (window.clearInterval(i), i = undefined))
    }

    function c(n, r) {
        t[n] = r;
        i || (i = window.setInterval(function () {
            s()
        }, 200))
    }

    function e() {
        return this.nodeType === 3
    }

    function u(t) {
        var f, i, r;
        if (t.contents().length) {
            if (f = t.contents(), i = f.eq(f.length - 1), i.filter(e).length)return (r = i.get(0).nodeValue, r = n.trim(r), r == "") ? (i.remove(), !0) : !1;
            while (u(i));
            return i.contents().length ? !1 : (i.remove(), !0)
        }
        return !1
    }

    function r(n) {
        var i, t;
        return n.contents().length ? (t = n.contents(), i = t.eq(t.length - 1), i.filter(e).length ? i : r(i)) : (n.append(""), t = n.contents(), t.eq(t.length - 1))
    }

    function l(t) {
        var u = r(t), i, f;
        return u.length ? (i = u.get(0).nodeValue, f = i.lastIndexOf(" "), f > -1 ? (i = n.trim(i.substring(0, f)), u.get(0).nodeValue = i) : u.get(0).nodeValue = "", !0) : !1
    }

    function o(t, i) {
        var s = t.data("jqae"), f, e, h;
        s || (s = {});
        f = s.wrapperElement;
        f || (f = t.wrapInner("<div/>").find(">div"), f.css({margin: 0, padding: 0, border: 0}));
        e = f.data("jqae");
        e || (e = {});
        h = e.originalContent;
        h ? f = e.originalContent.clone(!0).data("jqae", {originalContent: h}).replaceAll(f) : f.data("jqae", {originalContent: f.clone(!0)});
        t.data("jqae", {wrapperElement: f, containerWidth: t.width(), containerHeight: t.height()});
        var c = t.height(), a = (parseInt(t.css("padding-top"), 10) || 0) + (parseInt(t.css("border-top-width"), 10) || 0) - (f.offset().top - t.offset().top), o = !1, v = f;
        i.selector && (v = n(f.find(i.selector).get().reverse()));
        v.each(function () {
            var t = n(this), s = t.text(), e = !1;
            if (f.innerHeight() - t.innerHeight() > c + a) t.remove(); else if (u(t), t.contents().length) {
                for (o && (r(t).get(0).nodeValue += i.ellipsis, o = !1); f.innerHeight() > c + a;) {
                    if (e = l(t), !e) {
                        o = !0;
                        t.remove();
                        break
                    }
                    if (u(t), t.contents().length) r(t).get(0).nodeValue += i.ellipsis; else {
                        o = !0;
                        t.remove();
                        break
                    }
                }
                i.setTitle == "onEllipsis" && e || i.setTitle == "always" ? t.attr("title", s) : i.setTitle != "never" && t.removeAttr("title")
            }
        })
    }

    var t = {}, i, f = !1, a = {ellipsis: "...", setTitle: "never", live: !1};
    n.fn.ellipsis = function (t, i) {
        var u, r;
        return u = n(this), typeof t != "string" && (i = t, t = undefined), r = n.extend({}, a, i), r.selector = t, u.each(function () {
            var t = n(this);
            o(t, r)
        }), r.live ? c(u.selector, r) : h(u.selector), this
    }
}(jQuery);
var websiteApiUrl = ClientWebApiServiceUrl, pageCacheStorage = [], webApi = {
    get: function (n, t, i, r) {
        apiCache.get(n) ? t(apiCache.get(n)) : $.ajax({
                type: "GET",
                headers: {"Access-Control-Allow-Origin": "http://localhost:14189"},
                url: websiteApiUrl + n,
                processData: !1,
                crossDomain: !0,
                contentType: "application/json; charset=utf-8",
                dataType: "json",
                xhrFields: {withCredentials: !0},
                success: function (i) {
                    r && apiCache.set(n, i, 0);
                    t(i)
                },
                error: function (n, t, r) {
                    i(n, t, r)
                }
            })
    }, post: function (n, t, i, r) {
        $.ajax({
            type: "POST",
            headers: {"Access-Control-Allow-Origin": "http://localhost:14189"},
            data: JSON.stringify(t),
            url: websiteApiUrl + n,
            processData: !1,
            crossDomain: !0,
            contentType: "application/json; charset=utf-8",
            dataType: "json",
            xhrFields: {withCredentials: !0},
            success: function (n) {
                i(n)
            },
            error: function (n, t, i) {
                r(n, t, i)
            }
        })
    }, requestFailed: function (n, t, i) {
        window.status = "Error [ " + i + " ]"
    }
}, apiCache = {
    set: function (n, t) {
        pageCacheStorage[n] = t
    }, get: function (n) {
        return pageCacheStorage[n]
    }
}