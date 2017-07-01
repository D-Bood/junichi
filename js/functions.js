<<<<<<< HEAD
var br = {
    addEL: function(e, type, fun) {
        if (e.addEventListener) {
            e.addEventListener(type, fun, false);
        } else if (e.attachEvent) {
            e.attachEvent('on' + type, fun);
        } else {
            e['on' + type] = fun;
        }
    },
    show: function(e, cl) {
        var btn = document.getElementById(e)
          , bd = document.body || document.getElementsByTagName('body')[0];
        br.addEL(btn, 'click', function() {
            if (bd.className !== cl) {
                bd.className = cl;
            } else {
                bd.className = null;
            }
        })
    }
}
br.show('search-toggle', 'search-show');

=======
var br = {
    addEL: function(e, type, fun) {
        if (e.addEventListener) {
            e.addEventListener(type, fun, false);
        } else if (e.attachEvent) {
            e.attachEvent('on' + type, fun);
        } else {
            e['on' + type] = fun;
        }
    },

    show: function(e, cl) {
        var btn = document.getElementById(e),
            bd = document.body || document.getElementsByTagName('body')[0];

        br.addEL(btn, 'click', function() {
            if (bd.className !== cl) {
                bd.className = cl;
            } else {
                bd.className = null;
            }
        })
    }
}

br.show('search-toggle', 'search-show');

br.show('wechat-toggle', 'wechat-show');
>>>>>>> eadc892adeb7ec1612f2a20f51fd0a3a5450ea62
