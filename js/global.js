/*
If the site has been added to the homescreen, hijack all internal requests.
*/
(function (win, doc) {
    'use strict';
    if (!win.navigator.standalone || !win.addEventListener) {
        // doesn't cut the mustard.
        return;
    }
    var hijacklinks = function (ev) {
        ev = ev || win.event;
        var target = ev.target || ev.srcElement;
        var dest;
        if (target.hasAttribute('href') || target.parentNode.hasAttribute('href')) {
            dest = target.getAttribute('href') || target.parentNode.getAttribute('href');
            if (!dest.match(/^http(s?)/g)) {
                ev.preventDefault();
                win.location = dest;
            }
        }
    };
    doc.addEventListener('click', hijacklinks, false);
}(this, this.document));