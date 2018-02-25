jQuery.fn.anchorAnimate = function (n) {
    return n = jQuery.extend({speed: 1100}, n), this.each(function () {
        var t = this;
        $(t).click(function (i) {
            var e;
            i.preventDefault();
            var o = window.location.href, r = $(t).attr("href"), u = $("#contentnav").height(), f;
            return f = $(".fixed").length ? $(r).offset().top - (u + 5) : $(r).offset().top - (u * 2 + 15), e = $.browser.mozilla ? $("html:not(:animated)") : $("body:not(:animated)"), $(e).animate({scrollTop: f}, n.speed, function () {
                r == "#pricechart" && getProductPriceChart()
            }), !1
        })
    })
}, function (n, t) {
    n(function () {
        page = "Static";
        n(".list-accordion").accordion({
            animate: {duration: 200, easing: "swing"},
            header: "> div.wrap > h3",
            heightStyle: "content",
            collapsible: !0,
            active: "none",
            activate: function (n, t) {
                t.newHeader.parent().addClass("active-wrap");
                t.oldHeader.parent().removeClass("active-wrap");
                t.oldHeader.parents("li.clearfix").removeClass("active");
                t.newHeader.parents("li.clearfix").addClass("active");
                t.oldHeader.parents("li.clearfix").removeClass("active")
            },
            beforeActivate: function () {
            },
            create: function (n, t) {
                t.header.parent().addClass("active-wrap")
            }
        });
        n("a.anchorLink").anchorAnimate();
        var i = n("#contentnav") || {}, r = n(".animate-section").children("section"), u = i.offset().top;
        n(t).scroll(function () {
            var f = n(t).scrollTop();
            f >= u ? (i.addClass("fixed"), r.each(function (t) {
                    n(this).position().top <= f - 300 && (i.find("a.active").removeClass("active"), i.find("li").eq(t).children("a").addClass("active"))
                })) : (i.removeClass("fixed"), i.find("a.active").removeClass("active"), i.find("li:first a").addClass("active"))
        }).scroll()
    })
}(jQuery, window, document);
!function (n, t, i, r) {
    function u(t, i) {
        var e = this, f;
        return "object" == typeof i && (delete i.refresh, delete i.render, n.extend(this, i)), this.$element = n(t), !this.imageSrc && this.$element.is("img") && (this.imageSrc = this.$element.attr("src")), f = (this.position + "").toLowerCase().match(/\S+/g) || [], f.length < 1 && f.push("center"), 1 == f.length && f.push(f[0]), ("top" == f[0] || "bottom" == f[0] || "left" == f[1] || "right" == f[1]) && (f = [f[1], f[0]]), this.positionX != r && (f[0] = this.positionX.toLowerCase()), this.positionY != r && (f[1] = this.positionY.toLowerCase()), e.positionX = f[0], e.positionY = f[1], "left" != this.positionX && "right" != this.positionX && (this.positionX = isNaN(parseInt(this.positionX)) ? "center" : parseInt(this.positionX)), "top" != this.positionY && "bottom" != this.positionY && (this.positionY = isNaN(parseInt(this.positionY)) ? "center" : parseInt(this.positionY)), this.position = this.positionX + (isNaN(this.positionX) ? "" : "px") + " " + this.positionY + (isNaN(this.positionY) ? "" : "px"), navigator.userAgent.match(/(iPod|iPhone|iPad)/) ? (this.iosFix && !this.$element.is("img") && this.$element.css({
                backgroundImage: "url(" + this.imageSrc + ")",
                backgroundSize: "cover",
                backgroundPosition: this.position
            }), this) : navigator.userAgent.match(/(Android)/) ? (this.androidFix && !this.$element.is("img") && this.$element.css({
                    backgroundImage: "url(" + this.imageSrc + ")",
                    backgroundSize: "cover",
                    backgroundPosition: this.position
                }), this) : (this.$mirror = n("<div />").prependTo("body"), this.$slider = n("<img />").prependTo(this.$mirror), this.$mirror.addClass("parallax-mirror").css({
                    visibility: "hidden",
                    zIndex: this.zIndex,
                    position: "fixed",
                    top: 0,
                    left: 0,
                    overflow: "hidden"
                }), this.$slider.addClass("parallax-slider").one("load", function () {
                    e.naturalHeight && e.naturalWidth || (e.naturalHeight = this.naturalHeight || this.height || 1, e.naturalWidth = this.naturalWidth || this.width || 1);
                    e.aspectRatio = e.naturalWidth / e.naturalHeight;
                    u.isSetup || u.setup();
                    u.sliders.push(e);
                    u.isFresh = !1;
                    u.requestRender()
                }), this.$slider[0].src = this.imageSrc, void((this.naturalHeight && this.naturalWidth || this.$slider[0].complete) && this.$slider.trigger("load")))
    }

    function f(r) {
        return this.each(function () {
            var f = n(this), e = "object" == typeof r && r;
            this == t || this == i || f.is("body") ? u.configure(e) : f.data("px.parallax") || (e = n.extend({}, f.data(), e), f.data("px.parallax", new u(this, e)));
            "string" == typeof r && u[r]()
        })
    }

    !function () {
        for (var r = 0, i = ["ms", "moz", "webkit", "o"], n = 0; n < i.length && !t.requestAnimationFrame; ++n)t.requestAnimationFrame = t[i[n] + "RequestAnimationFrame"], t.cancelAnimationFrame = t[i[n] + "CancelAnimationFrame"] || t[i[n] + "CancelRequestAnimationFrame"];
        t.requestAnimationFrame || (t.requestAnimationFrame = function (n) {
            var i = (new Date).getTime(), u = Math.max(0, 16 - (i - r)), f = t.setTimeout(function () {
                n(i + u)
            }, u);
            return r = i + u, f
        });
        t.cancelAnimationFrame || (t.cancelAnimationFrame = function (n) {
            clearTimeout(n)
        })
    }();
    n.extend(u.prototype, {
        speed: .2,
        bleed: 0,
        zIndex: -100,
        iosFix: !0,
        androidFix: !0,
        position: "center",
        overScrollFix: !1,
        refresh: function () {
            var n;
            this.boxWidth = this.$element.outerWidth();
            this.boxHeight = this.$element.outerHeight() + 2 * this.bleed;
            this.boxOffsetTop = this.$element.offset().top - this.bleed;
            this.boxOffsetLeft = this.$element.offset().left;
            this.boxOffsetBottom = this.boxOffsetTop + this.boxHeight;
            var r = u.winHeight, e = u.docHeight, f = Math.min(this.boxOffsetTop, e - r), o = Math.max(this.boxOffsetTop + this.boxHeight - r, 0), i = this.boxHeight + (f - o) * (1 - this.speed) | 0, t = (this.boxOffsetTop - f) * (1 - this.speed) | 0;
            i * this.aspectRatio >= this.boxWidth ? (this.imageWidth = i * this.aspectRatio | 0, this.imageHeight = i, this.offsetBaseTop = t, n = this.imageWidth - this.boxWidth, this.offsetLeft = "left" == this.positionX ? 0 : "right" == this.positionX ? -n : isNaN(this.positionX) ? -n / 2 | 0 : Math.max(this.positionX, -n)) : (this.imageWidth = this.boxWidth, this.imageHeight = this.boxWidth / this.aspectRatio | 0, this.offsetLeft = 0, n = this.imageHeight - i, this.offsetBaseTop = "top" == this.positionY ? t : "bottom" == this.positionY ? t - n : isNaN(this.positionY) ? t - n / 2 | 0 : t + Math.max(this.positionY, -n))
        },
        render: function () {
            var n = u.scrollTop, t = u.scrollLeft, i = this.overScrollFix ? u.overScroll : 0, r = n + u.winHeight;
            this.visibility = this.boxOffsetBottom > n && this.boxOffsetTop < r ? "visible" : "hidden";
            this.mirrorTop = this.boxOffsetTop - n;
            this.mirrorLeft = this.boxOffsetLeft - t;
            this.offsetTop = this.offsetBaseTop - this.mirrorTop * (1 - this.speed);
            this.$mirror.css({
                transform: "translate3d(0px, 0px, 0px)",
                visibility: this.visibility,
                top: this.mirrorTop - i,
                left: this.mirrorLeft,
                height: this.boxHeight,
                width: this.boxWidth
            });
            this.$slider.css({
                transform: "translate3d(0px, 0px, 0px)",
                position: "absolute",
                top: this.offsetTop,
                left: this.offsetLeft,
                height: this.imageHeight,
                width: this.imageWidth,
                maxWidth: "none"
            })
        }
    });
    n.extend(u, {
        scrollTop: 0,
        scrollLeft: 0,
        winHeight: 0,
        winWidth: 0,
        docHeight: 1073741824,
        docWidth: 1073741824,
        sliders: [],
        isReady: !1,
        isFresh: !1,
        isBusy: !1,
        setup: function () {
            if (!this.isReady) {
                var f = n(i), r = n(t);
                r.on("scroll.px.parallax load.px.parallax", function () {
                    var n = u.docHeight - u.winHeight, t = u.docWidth - u.winWidth;
                    u.scrollTop = Math.max(0, Math.min(n, r.scrollTop()));
                    u.scrollLeft = Math.max(0, Math.min(t, r.scrollLeft()));
                    u.overScroll = Math.max(r.scrollTop() - n, Math.min(r.scrollTop(), 0));
                    u.requestRender()
                }).on("resize.px.parallax load.px.parallax", function () {
                    u.winHeight = r.height();
                    u.winWidth = r.width();
                    u.docHeight = f.height();
                    u.docWidth = f.width();
                    u.isFresh = !1;
                    u.requestRender()
                });
                this.isReady = !0
            }
        },
        configure: function (t) {
            "object" == typeof t && (delete t.refresh, delete t.render, n.extend(this.prototype, t))
        },
        refresh: function () {
            n.each(this.sliders, function () {
                this.refresh()
            });
            this.isFresh = !0
        },
        render: function () {
            this.isFresh || this.refresh();
            n.each(this.sliders, function () {
                this.render()
            })
        },
        requestRender: function () {
            var n = this;
            this.isBusy || (this.isBusy = !0, t.requestAnimationFrame(function () {
                n.render();
                n.isBusy = !1
            }))
        }
    });
    var e = n.fn.parallax;
    n.fn.parallax = f;
    n.fn.parallax.Constructor = u;
    n.fn.parallax.noConflict = function () {
        return n.fn.parallax = e, this
    };
    n(i).on("ready.px.parallax.data-api", function () {
        n('[data-parallax="scroll"]').parallax()
    })
}(jQuery, window, document)