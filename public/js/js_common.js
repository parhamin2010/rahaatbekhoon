(function (n) {
    n(function () {
        iDkConfig.Initialize()
    })
})(jQuery, window, document);
DkConfig = function () {
};
DkConfig.prototype = {
    DebugMode: !0,
    IsCrawler: !1,
    ConsoleLogEnabled: !0,
    TemplateServerUrl: "",
    DigiKalaWebApiUrl: "",
    Initialize: function () {
        this.InitiateConsoleLog()
    },
    InitiateConsoleLog: function () {
        this.ConsoleLogEnabled || (console.log = function () {
        })
    },
    FixImageUrl: function (n, t) {
        return (t === undefined || t == "") && (t = "[FileServerUrl]"), n.replace(t, this.TemplateServerUrl)
    }
};
String.prototype.template = function (n, t) {
    "use strict";
    for (var u = typeof n == "function", e = JSON.stringify, h = /\$\{([\S\s]*?)\}/g, i = [], o = u ? [] : i, s = 0, r, f; f = h.exec(this);)r = this.slice(s, f.index), u ? (i.push(r), o.push("(" + f[1] + ")")) : i.push(e(r), "(" + f[1] + ")"), s = h.lastIndex;
    return r = this.slice(s), i.push(u ? r : e(r)), u ? (r = "function" + (Math.random() * 1e5 | 0), i = [r, "with(this)return " + r + "(" + e(i) + (o.length ? "," + o.join(",") : "") + ")"]) : i = ["with(this)return " + i.join("+")], Function.apply(null, i).call(u ? t : n, u && n)
};
String.prototype.template = function (n, t) {
    "use strict";
    for (var u = typeof n == "function", e = JSON.stringify, h = /\$\{([\S\s]*?)\}/g, i = [], o = u ? [] : i, s = 0, r, f; f = h.exec(this);)r = this.slice(s, f.index), u ? (i.push(r), o.push("(" + f[1] + ")")) : i.push(e(r), "(" + f[1] + ")"), s = h.lastIndex;
    return r = this.slice(s), i.push(u ? r : e(r)), u ? (r = "function" + (Math.random() * 1e5 | 0), i = [r, "with(this)return " + r + "(" + e(i) + (o.length ? "," + o.join(",") : "") + ")"]) : i = ["with(this)return " + i.join("+")], Function.apply(null, i).call(u ? t : n, u && n)
};
String.prototype.insert = function (n, t) {
    return n < 1 ? t + this : n > this.length - 1 ? this + t : this.substring(0, n) + string + this.substring(n, this.length)
};
String.prototype.replaceAll = function (n, t) {
    var i, r;
    return n == null || n == undefined || n == "" ? this : (i = "", t != undefined && t != null && t !== "" && (i = t), r = n.replace(/([.*+?^=!:${}()|\[\]\/\\])/g, "\\$1"), this.replace(new RegExp(r, "gm"), i))
};
String.prototype.replaceArray = function (n, t) {
    for (var r = this, i = 0; i < n.length; i++)r = r.replaceAll(n[i], t[i]);
    return r
};
String.prototype.format = function () {
    for (var n = this, t = arguments.length; t--;)n = n.replaceAll("{" + t + "}", arguments[t]);
    return n
};
String.prototype.FaNumber = function () {
    return this.replaceAll("0", "۰").replaceAll("1", "۱").replaceAll("2", "۲").replaceAll("3", "۳").replaceAll("4", "۴").replaceAll("5", "۵").replaceAll("6", "۶").replaceAll("7", "۷").replaceAll("8", "۸").replaceAll("9", "۹")
};
String.prototype.EnNumber = function () {
    return this.replaceAll("۰", "0").replaceAll("۱", "1").replaceAll("۲", "2").replaceAll("۳", "3").replaceAll("۴", "4").replaceAll("۵", "5").replaceAll("۶", "6").replaceAll("۷", "7").replaceAll("۸", "8").replaceAll("۹", "9")
};
Date.persianMonthNames = ["فروردين", "ارديبهشت", "خرداد", "تير", "مرداد", "شهريور", "مهر", "آبان", "آذر", "دي", "بهمن", "اسفند"];
Date.persianAbbreviatedMonthNames = ["فروردين", "ارديبهشت", "خرداد", "تير", "مرداد", "شهريور", "مهر", "آبان", "آذر", "دي", "بهمن", "اسفند"];
Date.persianDayNames = ["يکشنبه", "دوشنبه", "سه شنبه", "چهارشنبه", "پنجشنبه", "جمعه", "شنبه"];
Date.persianAbbreviatedDayNames = ["ى", "د", "س", "چ", "پ", "ج", "ش"];
Date.persianDayNumbers = ["۱", "۲", "۳", "۴", "۵", "۶", "۷", "۸", "۹", "۱۰", "۱۱", "۱۲", "۱۳", "۱۴", "۱۵", "۱۶", "۱۷", "۱۸", "۱۹", "۲۰", "۲۱", "۲۲", "۲۳", "۲۴", "۲۵", "۲۶", "۲۷", "۲۸", "۲۹", "۳۰", "۳۱"];
Date.prototype.toPersianString = function (n) {
    var v = this.getMilliseconds(), y = this.getSeconds(), p = this.getMinutes(), w = this.getHours(), t = this.getTime(), l = this.getTimezoneOffset(), i, u;
    t = t - l * 6e4;
    t = Math.floor(t / 864e5) + 26218;
    var o = (t + 2) % 7, s = 365, h = 1461, c = 12053, a = Math.floor(t / c);
    t = t % c;
    i = Math.floor(t / h);
    i === 8 && i--;
    t = t - h * i;
    u = Math.floor(t / s);
    t = t % s;
    (i < 7 && u === 4 || i === 7 && u === 5) && (u--, t += s);
    var f = 0, r = 0, e = u + 4 * i + a * 33 + 1277;
    t < 186 ? (r = Math.floor(t / 31) + 1, f = t % 31 + 1) : (t = t - 186, r = Math.floor(t / 30) + 7, f = t % 30 + 1);
    switch (n) {
        case 1:
            return f.toString() + " " + Date.persianMonthNames[r - 1] + " " + e.toString();
        case 2:
            return o == 0 && (o = 7), Date.persianDayNames[o - 1] + " " + f.toString() + " " + Date.persianMonthNames[r - 1] + " " + e.toString();
        case 3:
            return Date.persianMonthNames[r - 1] + " " + e.toString();
        default:
            return e.toString() + "/" + r.toString() + "/" + f.toString()
    }
};
String.prototype.toHHMMSS = function () {
    var i = parseInt(this, 10), f = i > 86400 ? !0 : !1, u = Math.floor(i / 86400), n = Math.floor(i / 3600), t = Math.floor((i - n * 3600) / 60), r = i - n * 3600 - t * 60;
    return n < 10 && (n = "0" + n), t < 10 && (t = "0" + t), r < 10 && (r = "0" + r), f && (u = "0" + u, n = Math.abs(n - u * 24), n < 10 && (n = "0" + n)), f ? u + ":" + n + ":" + t + ":" + r : n + ":" + t + ":" + r
};
var DkUtility = {
    UserID: null, Initialize: function () {
        this.UserID = -1
    }, showPopup: function (n, t, i, r) {
        var u = "<div id='popup-mask' onclick='closePopup()' ><\/div>";
        u += "<div id='popup' style='display:none;width:" + i + "px;height:" + r + "px'>";
        u += "<div id='inner'>";
        u += "<div id='header'>";
        u += "<div id='container'>";
        u += "<div id='title'>" + n + "<\/div>";
        u += "<a class='close' onclick='closePopup()'><\/a><\/div>";
        u += "<\/div>";
        u += "<div id='body'><br>";
        u += "<p>" + t + "<\/p>";
        u += "<\/div>";
        u += "<\/a>";
        u += "<\/div>";
        u += "<\/a>";
        u += "<\/div>";
        u += "<\/div>";
        u += "<\/div>";
        $("#dkClientPopup").html(u);
        $("#popup").show("fade")
    }, validateEmail: function (n) {
        return /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i.test(n)
    }, formatDate: function (n, t) {
        var i = 2, r, u;
        return t != null && t != undefined && t > 0 && (i = t), r = n.replace(/ق.ظ/g, "").replace(/ب.ظ/g, ""), u = new Date(r), u.toPersianString(i)
    }, nl2br: function (n, t) {
        var i = t || typeof t == "undefined" ? "<br />" : "<br>";
        return (n + "").replace(/([^>\r\n]?)(\r\n|\n\r|\r|\n)/g, "$1" + i + "$2")
    }
};