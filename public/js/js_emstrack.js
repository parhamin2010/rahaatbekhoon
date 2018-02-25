function ems_Debug() {
    var n = "_ems_url: " + escape(_ems_url) + "\n_ems_tracking_image: " + escape(_ems_tracking_image) + "\n_ems_hash: " + escape(_ems_hash) + "\n_ems_session_timeout: " + escape(_ems_session_timeout) + "\n_ems_campaign_timeout: " + escape(_ems_campaign_timeout) + "\n_ems_domain: " + escape(_ems_domain) + "\n_ems_never: " + escape(_ems_never) + "\n_ems_tracking_param: " + escape(_ems_tracking_param) + "\n_ems_customer: " + escape(_ems_customer) + "\n_ems_visitor: " + escape(_ems_visitor) + "\n_ems_session: " + escape(_ems_session) + "\n_ems_campaign: " + escape(_ems_campaign) + "\n";
    alert(n)
}
function emsSetEnv(n) {
    _ems_tracking_image = (_ems_url.protocol == "https:" ? "https:" : "http:") + "//" + n + ".emarsys.net/upages/ti.php"
}
function emsTracking(n, t) {
    var r, i;
    (n && (_ems_customer = n), t && (_ems_domain = t), _ems_url.protocol != "file:") && (r = new Date, domain_hash = DJBHash(_ems_domain.substring(0, 4) == "www." ? _ems_domain.substring(4, _ems_domain.length) : _ems_domain), _ems_session = _ems_getCookie("_ems_session=" + domain_hash + "."), _ems_session == "" && (_ems_debug && alert("creating new session cookie"), _ems_session = Math.round(Math.random() * 1073741824), i = new Date(r.getTime() + _ems_session_timeout * 1e3), document.cookie = "_ems_session=" + domain_hash + "." + _ems_session + ";path=/;domain=." + _ems_domain + ";expires=" + i.toGMTString() + ";"), _ems_visitor = _ems_getCookie("_ems_visitor=" + domain_hash + "."), _ems_visitor == "" && (_ems_debug && alert("creating new visitor cookie"), _ems_visitor = _ems_session, document.cookie = "_ems_visitor=" + domain_hash + "." + _ems_visitor + ";path=/;domain=." + _ems_domain + ";"), _ems_campaign = _ems_getParam(document.location.search, _ems_tracking_param), _ems_campaign == "" ? _ems_campaign = _ems_getCookie("_ems_campaign=" + domain_hash + ".") : (_ems_debug && alert("creating new campaign cookie"), i = new Date(r.getTime() + _ems_campaign_timeout * 1e3), document.cookie = "_ems_campaign=" + domain_hash + "." + _ems_campaign + ";path=/;domain=." + _ems_domain + ";expires=" + i.toGMTString() + ";"))
}
function _ems_Tick() {
    var n = "ems_customer=" + _ems_escape(_ems_customer) + "&ems_visitor=" + _ems_escape(_ems_visitor) + "&ems_session=" + _ems_escape(_ems_session) + "&ems_campaign=" + _ems_escape(_ems_campaign) + "&ems_page=" + _ems_escape(document.location.pathname + _ems_StripParam(document.location.search, _ems_tracking_param)), t = new Image;
    t.src = _ems_tracking_image + "?" + n
}
function _ems_StripParam(n, t) {
    return n.indexOf(t + "=") > 0 && (value = _ems_getParam(n, t), n = n.substr(0, n.indexOf(t)) + n.substr(n.indexOf(t) + t.length + value.length + 2, n.length), n.substr(n.length - 1, 1) == "&" && (n = n.substr(0, n.length - 1))), n == "?" ? "" : n
}
function emsSubmitOrder() {
    var p, j, item_values, i, image;
    if (_ems_customer != "" && _ems_campaign != "") {
        for (ems_items = document.getElementsByName("ems_items[]"), p = "ems_customer=" + _ems_escape(_ems_customer) + "&ems_session=" + _ems_escape(_ems_session) + "&ems_visitor=" + _ems_escape(_ems_visitor) + "&ems_campaign=" + _ems_escape(_ems_campaign) + "&ems_action=purchase", order_fields = ["order", "total", "tax", "shipping", "city", "country"], i = 0; i < order_fields.length; i++)eval("document.emsform." + order_fields[i]) && (p += "&" + order_fields[i] + "=" + eval("document.emsform." + order_fields[i] + ".value"));
        for (item_fields = ["code", "category", "productname", "price", "quantity"], j = 0; j < ems_items.length; j++)for (item_values = ems_items[j].value.split(";"), i = 0; i < item_fields.length; i++)p += "&" + item_fields[i] + "[]=" + (item_values.length > i ? item_values[i] : "");
        image = new Image;
        image.src = _ems_tracking_image + "?" + p;
        _ems_debug && alert("image.src=" + image.src)
    }
}
function _ems_getParam(n, t) {
    n.charAt(0) == "?" && (n = n.substring(1, n.length));
    params = n.split("&");
    for (var i = 0; i < params.length; i++)if (param = params[i].split("="), param[0] == t)return param[1];
    return ""
}
function _ems_getCookie(n) {
    var r = document.cookie.indexOf(n), i, t;
    return r >= 0 ? (i = r + n.length, t = document.cookie.indexOf(";", i), t == -1 && (t = document.cookie.length), document.cookie.substring(i, t)) : ""
}
function DJBHash(n) {
    for (var r, t = 5381, i = 0; i < n.length; i++)r = parseInt(n.charCodeAt(i)), t = (t << 5) + t + r;
    return t & 2147483647
}
function _ems_escape(n) {
    return typeof encodeURIComponent == "function" ? encodeURIComponent(n) : escape(n)
}
var _ems_url = document.location, _ems_tracking_image = (_ems_url.protocol == "https:" ? "https:" : "http:") + "//www.emarsys.net/upages/ti.php", _ems_hash = _ems_url.hash.substring(1), _ems_session_timeout = 600, _ems_campaign_timeout = 2592e3, _ems_domain = document.domain, _ems_never = "Tue, 31 Dec 2030 23:59:59 GMT", _ems_tracking_param = "emst", _ems_customer = "", _ems_visitor = "", _ems_session = "", _ems_campaign = "", _ems_debug = 0