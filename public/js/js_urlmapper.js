function UrlMapper(n) {
    var v = n.split("/"), d = 0, g = 0, nt = 0, tt = 0, f = "", it = !1, y = !1, p = !1, t = "?", o = {}, i, e, w, h, b, r, l, c, u, k, s, a;
    for (String.prototype.replaceAll = function (n, t) {
        var i, r;
        return n == null || n == undefined || n == "" ? this : (i = "", t != undefined && t != null && t !== "" && (i = t), r = n.replace(/([.*+?^=!:${}()|\[\]\/\\])/g, "\\$1"), this.replace(new RegExp(r, "gm"), i))
    }, u = 0; u < v.length; u++)if (i = v[u].toLowerCase(), i.startsWith("category-")) y || (f = i.substr(9).trim(), /#!/.test(f) && (f = f.slice(0, f.indexOf("#!"))), y = !0); else if (i.startsWith("brand-")) e = i.substr(6).trim(), w = parseInt(e), t += "brand[" + d++ + "]=" + w + "&"; else if (i.startsWith("type-")) r = i.substr(5).trim(), t += "type[" + g++ + "]=" + r + "&"; else if (i.startsWith("attributes-")) {
        var rt = i.substr(11).trim(), e = rt.split("_");
        o[e[0]] ? o[e[0]] += e[1] + "," : o[e[0]] = e[1] + ","
    } else i.startsWith("color-") ? (h = i.substr(6), t += "color[" + nt++ + "]=" + h + "&") : i.startsWith("size-") ? (h = i.substr(5), t += "size[" + tt++ + "]=" + h + "&") : i.startsWith("minprice-") ? (r = i.substr(9).trim(), minPrice = parseInt(r), t += "price[min]=" + minPrice + "&") : i.startsWith("maxprice-") ? (r = i.substr(9).trim(), maxPrice = parseInt(r), t += "price[max]=" + maxPrice + "&") : i.startsWith("status-") ? (r = i.substr(7).trim(), b = parseInt(r), t += "status=" + b + "&") : i.startsWith("utm_source=") ? t += i + "&" : i.startsWith("pageno-") ? (r = i.substr(7).trim(), from = parseInt(r), t += "pageno=" + from + "&") : i.startsWith("keyword-") ? p || (r = i.substr(8).trim(), t += "q=" + (r.slice(-1) == "?" ? r.slice(0, -1) : r) + "&", it = !0, p = !0) : i.startsWith("sortby-") && (r = i.substr(7).trim(), sortBy = parseInt(r), t += "sortby=" + sortBy + "&");
    for (l in o)for (c = o[l].split(","), u = 0; u < c.length; u++)c[u] != "" && (t += "attribute[A" + l + "][" + u + "]=" + c[u] + "&");
    return k = t.substring(t.length, t.length - 1), k == "&" && (t = t.substring(0, t.length - 1)), t = t.replaceAll("&", "---"), t = t.replaceAll("?", ""), s = actionName, a = !1, f !== "" && f.length != 0 && (s += "?category=" + f, a = !0), t !== "" && t.length > 0 && (s += a ? "&query=" + t : "?query=" + t), console.info("Redirection: " + s), window.location.href = s, t
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
(function () {
    var t, n;
    t = window.jQuery;
    n = t(window);
    t.fn.stick_in_parent = function (i) {
        var s, a, e, v, h, c, y, r, u, p, o, l, f;
        for (i == null && (i = {}), f = i.sticky_class, c = i.inner_scrolling, l = i.recalc_every, o = i.parent, u = i.offset_top, force_sticky = i.force_sticky, r = i.spacer, e = i.bottoming, u == null && (u = 0), o == null && (o = void 0), c == null && (c = !0), f == null && (f = "is_stuck"), s = t(document), e == null && (e = !0), p = function (n) {
            var r, t, i;
            return window.getComputedStyle ? (r = n[0], t = window.getComputedStyle(n[0]), i = parseFloat(t.getPropertyValue("width")) + parseFloat(t.getPropertyValue("margin-left")) + parseFloat(t.getPropertyValue("margin-right")), t.getPropertyValue("box-sizing") !== "border-box" && (i += parseFloat(t.getPropertyValue("border-left-width")) + parseFloat(t.getPropertyValue("border-right-width")) + parseFloat(t.getPropertyValue("padding-left")) + parseFloat(t.getPropertyValue("padding-right"))), i) : n.outerWidth(!0)
        }, v = function (i, h, a, v, y, w, b, k) {
            var rt, st, tt, ot, ht, g, nt, ut, ft, et, d, it;
            if (!i.data("sticky_kit")) {
                if (i.data("sticky_kit", !0), ht = s.height(), nt = i.parent(), o != null && (nt = nt.closest(o)), !nt.length)throw"failed to find stick parent";
                if (tt = !1, rt = !1, d = r != null ? r && i.closest(r) : t("<div />"), d && d.css("position", i.css("position")), ut = function () {
                        var n, t, e;
                        if (!k)return ht = s.height(), n = parseInt(nt.css("border-top-width"), 10), t = parseInt(nt.css("padding-top"), 10), h = parseInt(nt.css("padding-bottom"), 10), a = nt.offset().top + n + t, v = nt.height(), tt && (tt = !1, rt = !1, r == null && (i.insertAfter(d), d.detach()), i.css({
                            position: "",
                            top: "",
                            width: "",
                            bottom: ""
                        }).removeClass(f), e = !0), y = i.offset().top - (parseInt(i.css("margin-top"), 10) || 0) - u, w = i.outerHeight(!0), b = i.css("float"), d && d.css({
                            width: p(i),
                            height: w,
                            display: i.css("display"),
                            "vertical-align": i.css("vertical-align"),
                            float: b
                        }), e ? it() : void 0
                    }, ut(), w !== v || force_sticky == !0) {
                    ot = void 0;
                    g = u;
                    et = l;
                    it = function () {
                        var o, st, it, t, p, ft;
                        if (!k)return it = !1, et != null && (et -= 1, et <= 0 && (et = l, ut(), it = !0)), it || s.height() === ht || (ut(), it = !0), t = n.scrollTop(), ot != null && (st = t - ot), ot = t, tt ? (e && (p = t + w + g > v + a, rt && !p && (rt = !1, i.css({
                                position: "fixed",
                                bottom: "",
                                top: g
                            }).trigger("sticky_kit:unbottom"))), t < y && (tt = !1, g = u, r == null && ((b === "left" || b === "right") && i.insertAfter(d), d.detach()), o = {
                                position: "",
                                width: "",
                                top: ""
                            }, i.css(o).removeClass(f).trigger("sticky_kit:unstick")), c && (ft = n.height(), w + u > ft && (rt || (g -= st, g = Math.max(ft - w, g), g = Math.min(u, g), tt && i.css({top: g + "px"}))))) : t > y && (tt = !0, o = {
                                position: "fixed",
                                top: g
                            }, o.width = i.css("box-sizing") === "border-box" ? i.outerWidth() + "px" : i.width() + "px", i.css(o).addClass(f), r == null && (i.after(d), (b === "left" || b === "right") && d.append(i)), i.trigger("sticky_kit:stick")), tt && e && (p == null && (p = t + w + g > v + a), !rt && p) ? (rt = !0, nt.css("position") === "static" && nt.css({position: "relative"}), i.css({
                                position: "absolute",
                                bottom: h,
                                top: "auto"
                            }).trigger("sticky_kit:bottom")) : void 0
                    };
                    ft = function () {
                        return ut(), it()
                    };
                    st = function () {
                        return k = !0, n.off("touchmove", it), n.off("scroll", it), n.off("resize", ft), t(document.body).off("sticky_kit:recalc", ft), i.off("sticky_kit:detach", st), i.removeData("sticky_kit"), i.css({
                            position: "",
                            bottom: "",
                            top: "",
                            width: ""
                        }), nt.position("position", ""), tt ? (r == null && ((b === "left" || b === "right") && i.insertAfter(d), d.remove()), i.removeClass(f)) : void 0
                    };
                    n.on("touchmove", it);
                    n.on("scroll", it);
                    n.on("resize", ft);
                    t(document.body).on("sticky_kit:recalc", ft);
                    i.on("sticky_kit:detach", st);
                    return setTimeout(it, 0)
                }
            }
        }, h = 0, y = this.length; h < y; h++)a = this[h], v(t(a));
        return this
    }
}).call(this);
var actionName = "/Search/SearchRedirect/";
(/#!/.test(window.location.href) || /#%21/.test(window.location.href)) && UrlMapper(window.location.href)