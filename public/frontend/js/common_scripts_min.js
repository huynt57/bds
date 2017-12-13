if ("undefined" == typeof jQuery)throw new Error("Bootstrap's JavaScript requires jQuery");
+function (a) {
    "use strict";
    var b = a.fn.jquery.split(" ")[0].split(".");
    if (b[0] < 2 && b[1] < 9 || 1 == b[0] && 9 == b[1] && b[2] < 1 || b[0] > 3)throw new Error("Bootstrap's JavaScript requires jQuery version 1.9.1 or higher, but lower than version 4")
}(jQuery), function (a) {
    "use strict";
    function b() {
        var a = document.createElement("bootstrap"), b = {
            WebkitTransition: "webkitTransitionEnd",
            MozTransition: "transitionend",
            OTransition: "oTransitionEnd otransitionend",
            transition: "transitionend"
        };
        for (var c in b)if (void 0 !== a.style[c])return {end: b[c]};
        return !1
    }

    a.fn.emulateTransitionEnd = function (b) {
        var c = !1, d = this;
        a(this).one("bsTransitionEnd", function () {
            c = !0
        });
        var e = function () {
            c || a(d).trigger(a.support.transition.end)
        };
        return setTimeout(e, b), this
    }, a(function () {
        a.support.transition = b(), a.support.transition && (a.event.special.bsTransitionEnd = {
            bindType: a.support.transition.end,
            delegateType: a.support.transition.end,
            handle: function (b) {
                if (a(b.target).is(this))return b.handleObj.handler.apply(this, arguments)
            }
        })
    })
}(jQuery), function (a) {
    "use strict";
    function d(b) {
        return this.each(function () {
            var d = a(this), e = d.data("bs.alert");
            e || d.data("bs.alert", e = new c(this)), "string" == typeof b && e[b].call(d)
        })
    }

    var b = '[data-dismiss="alert"]', c = function (c) {
        a(c).on("click", b, this.close)
    };
    c.VERSION = "3.3.7", c.TRANSITION_DURATION = 150, c.prototype.close = function (b) {
        function g() {
            f.detach().trigger("closed.bs.alert").remove()
        }

        var d = a(this), e = d.attr("data-target");
        e || (e = d.attr("href"), e = e && e.replace(/.*(?=#[^\s]*$)/, ""));
        var f = a("#" === e ? [] : e);
        b && b.preventDefault(), f.length || (f = d.closest(".alert")), f.trigger(b = a.Event("close.bs.alert")), b.isDefaultPrevented() || (f.removeClass("in"), a.support.transition && f.hasClass("fade") ? f.one("bsTransitionEnd", g).emulateTransitionEnd(c.TRANSITION_DURATION) : g())
    };
    var e = a.fn.alert;
    a.fn.alert = d, a.fn.alert.Constructor = c, a.fn.alert.noConflict = function () {
        return a.fn.alert = e, this
    }, a(document).on("click.bs.alert.data-api", b, c.prototype.close)
}(jQuery), function (a) {
    "use strict";
    function c(c) {
        return this.each(function () {
            var d = a(this), e = d.data("bs.button"), f = "object" == typeof c && c;
            e || d.data("bs.button", e = new b(this, f)), "toggle" == c ? e.toggle() : c && e.setState(c)
        })
    }

    var b = function (c, d) {
        this.$element = a(c), this.options = a.extend({}, b.DEFAULTS, d), this.isLoading = !1
    };
    b.VERSION = "3.3.7", b.DEFAULTS = {loadingText: "loading..."}, b.prototype.setState = function (b) {
        var c = "disabled", d = this.$element, e = d.is("input") ? "val" : "html", f = d.data();
        b += "Text", null == f.resetText && d.data("resetText", d[e]()), setTimeout(a.proxy(function () {
            d[e](null == f[b] ? this.options[b] : f[b]), "loadingText" == b ? (this.isLoading = !0, d.addClass(c).attr(c, c).prop(c, !0)) : this.isLoading && (this.isLoading = !1, d.removeClass(c).removeAttr(c).prop(c, !1))
        }, this), 0)
    }, b.prototype.toggle = function () {
        var a = !0, b = this.$element.closest('[data-toggle="buttons"]');
        if (b.length) {
            var c = this.$element.find("input");
            "radio" == c.prop("type") ? (c.prop("checked") && (a = !1), b.find(".active").removeClass("active"), this.$element.addClass("active")) : "checkbox" == c.prop("type") && (c.prop("checked") !== this.$element.hasClass("active") && (a = !1), this.$element.toggleClass("active")), c.prop("checked", this.$element.hasClass("active")), a && c.trigger("change")
        } else this.$element.attr("aria-pressed", !this.$element.hasClass("active")), this.$element.toggleClass("active")
    };
    var d = a.fn.button;
    a.fn.button = c, a.fn.button.Constructor = b, a.fn.button.noConflict = function () {
        return a.fn.button = d, this
    }, a(document).on("click.bs.button.data-api", '[data-toggle^="button"]', function (b) {
        var d = a(b.target).closest(".btn");
        c.call(d, "toggle"), a(b.target).is('input[type="radio"], input[type="checkbox"]') || (b.preventDefault(), d.is("input,button") ? d.trigger("focus") : d.find("input:visible,button:visible").first().trigger("focus"))
    }).on("focus.bs.button.data-api blur.bs.button.data-api", '[data-toggle^="button"]', function (b) {
        a(b.target).closest(".btn").toggleClass("focus", /^focus(in)?$/.test(b.type))
    })
}(jQuery), function (a) {
    "use strict";
    function c(c) {
        return this.each(function () {
            var d = a(this), e = d.data("bs.carousel"),
                f = a.extend({}, b.DEFAULTS, d.data(), "object" == typeof c && c),
                g = "string" == typeof c ? c : f.slide;
            e || d.data("bs.carousel", e = new b(this, f)), "number" == typeof c ? e.to(c) : g ? e[g]() : f.interval && e.pause().cycle()
        })
    }

    var b = function (b, c) {
        this.$element = a(b), this.$indicators = this.$element.find(".carousel-indicators"), this.options = c, this.paused = null, this.sliding = null, this.interval = null, this.$active = null, this.$items = null, this.options.keyboard && this.$element.on("keydown.bs.carousel", a.proxy(this.keydown, this)), "hover" == this.options.pause && !("ontouchstart" in document.documentElement) && this.$element.on("mouseenter.bs.carousel", a.proxy(this.pause, this)).on("mouseleave.bs.carousel", a.proxy(this.cycle, this))
    };
    b.VERSION = "3.3.7", b.TRANSITION_DURATION = 600, b.DEFAULTS = {
        interval: 5e3,
        pause: "hover",
        wrap: !0,
        keyboard: !0
    }, b.prototype.keydown = function (a) {
        if (!/input|textarea/i.test(a.target.tagName)) {
            switch (a.which) {
                case 37:
                    this.prev();
                    break;
                case 39:
                    this.next();
                    break;
                default:
                    return
            }
            a.preventDefault()
        }
    }, b.prototype.cycle = function (b) {
        return b || (this.paused = !1), this.interval && clearInterval(this.interval), this.options.interval && !this.paused && (this.interval = setInterval(a.proxy(this.next, this), this.options.interval)), this
    }, b.prototype.getItemIndex = function (a) {
        return this.$items = a.parent().children(".item"), this.$items.index(a || this.$active)
    }, b.prototype.getItemForDirection = function (a, b) {
        var c = this.getItemIndex(b);
        if (("prev" == a && 0 === c || "next" == a && c == this.$items.length - 1) && !this.options.wrap)return b;
        var e = "prev" == a ? -1 : 1, f = (c + e) % this.$items.length;
        return this.$items.eq(f)
    }, b.prototype.to = function (a) {
        var b = this, c = this.getItemIndex(this.$active = this.$element.find(".item.active"));
        if (!(a > this.$items.length - 1 || a < 0))return this.sliding ? this.$element.one("slid.bs.carousel", function () {
            b.to(a)
        }) : c == a ? this.pause().cycle() : this.slide(a > c ? "next" : "prev", this.$items.eq(a))
    }, b.prototype.pause = function (b) {
        return b || (this.paused = !0), this.$element.find(".next, .prev").length && a.support.transition && (this.$element.trigger(a.support.transition.end), this.cycle(!0)), this.interval = clearInterval(this.interval), this
    }, b.prototype.next = function () {
        if (!this.sliding)return this.slide("next")
    }, b.prototype.prev = function () {
        if (!this.sliding)return this.slide("prev")
    }, b.prototype.slide = function (c, d) {
        var e = this.$element.find(".item.active"), f = d || this.getItemForDirection(c, e), g = this.interval,
            h = "next" == c ? "left" : "right", i = this;
        if (f.hasClass("active"))return this.sliding = !1;
        var j = f[0], k = a.Event("slide.bs.carousel", {relatedTarget: j, direction: h});
        if (this.$element.trigger(k), !k.isDefaultPrevented()) {
            if (this.sliding = !0, g && this.pause(), this.$indicators.length) {
                this.$indicators.find(".active").removeClass("active");
                var l = a(this.$indicators.children()[this.getItemIndex(f)]);
                l && l.addClass("active")
            }
            var m = a.Event("slid.bs.carousel", {relatedTarget: j, direction: h});
            return a.support.transition && this.$element.hasClass("slide") ? (f.addClass(c), f[0].offsetWidth, e.addClass(h), f.addClass(h), e.one("bsTransitionEnd", function () {
                f.removeClass([c, h].join(" ")).addClass("active"), e.removeClass(["active", h].join(" ")), i.sliding = !1, setTimeout(function () {
                    i.$element.trigger(m)
                }, 0)
            }).emulateTransitionEnd(b.TRANSITION_DURATION)) : (e.removeClass("active"), f.addClass("active"), this.sliding = !1, this.$element.trigger(m)), g && this.cycle(), this
        }
    };
    var d = a.fn.carousel;
    a.fn.carousel = c, a.fn.carousel.Constructor = b, a.fn.carousel.noConflict = function () {
        return a.fn.carousel = d, this
    };
    var e = function (b) {
        var d, e = a(this), f = a(e.attr("data-target") || (d = e.attr("href")) && d.replace(/.*(?=#[^\s]+$)/, ""));
        if (f.hasClass("carousel")) {
            var g = a.extend({}, f.data(), e.data()), h = e.attr("data-slide-to");
            h && (g.interval = !1), c.call(f, g), h && f.data("bs.carousel").to(h), b.preventDefault()
        }
    };
    a(document).on("click.bs.carousel.data-api", "[data-slide]", e).on("click.bs.carousel.data-api", "[data-slide-to]", e), a(window).on("load", function () {
        a('[data-ride="carousel"]').each(function () {
            var b = a(this);
            c.call(b, b.data())
        })
    })
}(jQuery), function (a) {
    "use strict";
    function c(b) {
        var c, d = b.attr("data-target") || (c = b.attr("href")) && c.replace(/.*(?=#[^\s]+$)/, "");
        return a(d)
    }

    function d(c) {
        return this.each(function () {
            var d = a(this), e = d.data("bs.collapse"),
                f = a.extend({}, b.DEFAULTS, d.data(), "object" == typeof c && c);
            !e && f.toggle && /show|hide/.test(c) && (f.toggle = !1), e || d.data("bs.collapse", e = new b(this, f)), "string" == typeof c && e[c]()
        })
    }

    var b = function (c, d) {
        this.$element = a(c), this.options = a.extend({}, b.DEFAULTS, d), this.$trigger = a('[data-toggle="collapse"][href="#' + c.id + '"],[data-toggle="collapse"][data-target="#' + c.id + '"]'), this.transitioning = null, this.options.parent ? this.$parent = this.getParent() : this.addAriaAndCollapsedClass(this.$element, this.$trigger), this.options.toggle && this.toggle()
    };
    b.VERSION = "3.3.7", b.TRANSITION_DURATION = 350, b.DEFAULTS = {toggle: !0}, b.prototype.dimension = function () {
        return this.$element.hasClass("width") ? "width" : "height"
    }, b.prototype.show = function () {
        if (!this.transitioning && !this.$element.hasClass("in")) {
            var c, e = this.$parent && this.$parent.children(".panel").children(".in, .collapsing");
            if (!(e && e.length && (c = e.data("bs.collapse")) && c.transitioning)) {
                var f = a.Event("show.bs.collapse");
                if (this.$element.trigger(f), !f.isDefaultPrevented()) {
                    e && e.length && (d.call(e, "hide"), c || e.data("bs.collapse", null));
                    var g = this.dimension();
                    this.$element.removeClass("collapse").addClass("collapsing")[g](0).attr("aria-expanded", !0), this.$trigger.removeClass("collapsed").attr("aria-expanded", !0), this.transitioning = 1;
                    var h = function () {
                        this.$element.removeClass("collapsing").addClass("collapse in")[g](""), this.transitioning = 0, this.$element.trigger("shown.bs.collapse")
                    };
                    if (!a.support.transition)return h.call(this);
                    var i = a.camelCase(["scroll", g].join("-"));
                    this.$element.one("bsTransitionEnd", a.proxy(h, this)).emulateTransitionEnd(b.TRANSITION_DURATION)[g](this.$element[0][i])
                }
            }
        }
    }, b.prototype.hide = function () {
        if (!this.transitioning && this.$element.hasClass("in")) {
            var c = a.Event("hide.bs.collapse");
            if (this.$element.trigger(c), !c.isDefaultPrevented()) {
                var d = this.dimension();
                this.$element[d](this.$element[d]())[0].offsetHeight, this.$element.addClass("collapsing").removeClass("collapse in").attr("aria-expanded", !1), this.$trigger.addClass("collapsed").attr("aria-expanded", !1), this.transitioning = 1;
                var e = function () {
                    this.transitioning = 0, this.$element.removeClass("collapsing").addClass("collapse").trigger("hidden.bs.collapse")
                };
                if (!a.support.transition)return e.call(this);
                this.$element[d](0).one("bsTransitionEnd", a.proxy(e, this)).emulateTransitionEnd(b.TRANSITION_DURATION)
            }
        }
    }, b.prototype.toggle = function () {
        this[this.$element.hasClass("in") ? "hide" : "show"]()
    }, b.prototype.getParent = function () {
        return a(this.options.parent).find('[data-toggle="collapse"][data-parent="' + this.options.parent + '"]').each(a.proxy(function (b, d) {
            var e = a(d);
            this.addAriaAndCollapsedClass(c(e), e)
        }, this)).end()
    }, b.prototype.addAriaAndCollapsedClass = function (a, b) {
        var c = a.hasClass("in");
        a.attr("aria-expanded", c), b.toggleClass("collapsed", !c).attr("aria-expanded", c)
    };
    var e = a.fn.collapse;
    a.fn.collapse = d, a.fn.collapse.Constructor = b, a.fn.collapse.noConflict = function () {
        return a.fn.collapse = e, this
    }, a(document).on("click.bs.collapse.data-api", '[data-toggle="collapse"]', function (b) {
        var e = a(this);
        e.attr("data-target") || b.preventDefault();
        var f = c(e), g = f.data("bs.collapse"), h = g ? "toggle" : e.data();
        d.call(f, h)
    })
}(jQuery), function (a) {
    "use strict";
    function e(b) {
        var c = b.attr("data-target");
        c || (c = b.attr("href"), c = c && /#[A-Za-z]/.test(c) && c.replace(/.*(?=#[^\s]*$)/, ""));
        var d = c && a(c);
        return d && d.length ? d : b.parent()
    }

    function f(d) {
        d && 3 === d.which || (a(b).remove(), a(c).each(function () {
            var b = a(this), c = e(b), f = {relatedTarget: this};
            c.hasClass("open") && (d && "click" == d.type && /input|textarea/i.test(d.target.tagName) && a.contains(c[0], d.target) || (c.trigger(d = a.Event("hide.bs.dropdown", f)), d.isDefaultPrevented() || (b.attr("aria-expanded", "false"), c.removeClass("open").trigger(a.Event("hidden.bs.dropdown", f)))))
        }))
    }

    function g(b) {
        return this.each(function () {
            var c = a(this), e = c.data("bs.dropdown");
            e || c.data("bs.dropdown", e = new d(this)), "string" == typeof b && e[b].call(c)
        })
    }

    var b = ".dropdown-backdrop", c = '[data-toggle="dropdown"]', d = function (b) {
        a(b).on("click.bs.dropdown", this.toggle)
    };
    d.VERSION = "3.3.7", d.prototype.toggle = function (b) {
        var c = a(this);
        if (!c.is(".disabled, :disabled")) {
            var d = e(c), g = d.hasClass("open");
            if (f(), !g) {
                "ontouchstart" in document.documentElement && !d.closest(".navbar-nav").length && a(document.createElement("div")).addClass("dropdown-backdrop").insertAfter(a(this)).on("click", f);
                var h = {relatedTarget: this};
                if (d.trigger(b = a.Event("show.bs.dropdown", h)), b.isDefaultPrevented())return;
                c.trigger("focus").attr("aria-expanded", "true"), d.toggleClass("open").trigger(a.Event("shown.bs.dropdown", h))
            }
            return !1
        }
    }, d.prototype.keydown = function (b) {
        if (/(38|40|27|32)/.test(b.which) && !/input|textarea/i.test(b.target.tagName)) {
            var d = a(this);
            if (b.preventDefault(), b.stopPropagation(), !d.is(".disabled, :disabled")) {
                var f = e(d), g = f.hasClass("open");
                if (!g && 27 != b.which || g && 27 == b.which)return 27 == b.which && f.find(c).trigger("focus"), d.trigger("click");
                var h = " li:not(.disabled):visible a", i = f.find(".dropdown-menu" + h);
                if (i.length) {
                    var j = i.index(b.target);
                    38 == b.which && j > 0 && j--, 40 == b.which && j < i.length - 1 && j++, ~j || (j = 0), i.eq(j).trigger("focus")
                }
            }
        }
    };
    var h = a.fn.dropdown;
    a.fn.dropdown = g, a.fn.dropdown.Constructor = d, a.fn.dropdown.noConflict = function () {
        return a.fn.dropdown = h, this
    }, a(document).on("click.bs.dropdown.data-api", f).on("click.bs.dropdown.data-api", ".dropdown form", function (a) {
        a.stopPropagation()
    }).on("click.bs.dropdown.data-api", c, d.prototype.toggle).on("keydown.bs.dropdown.data-api", c, d.prototype.keydown).on("keydown.bs.dropdown.data-api", ".dropdown-menu", d.prototype.keydown)
}(jQuery), function (a) {
    "use strict";
    function c(c, d) {
        return this.each(function () {
            var e = a(this), f = e.data("bs.modal"), g = a.extend({}, b.DEFAULTS, e.data(), "object" == typeof c && c);
            f || e.data("bs.modal", f = new b(this, g)), "string" == typeof c ? f[c](d) : g.show && f.show(d)
        })
    }

    var b = function (b, c) {
        this.options = c, this.$body = a(document.body), this.$element = a(b), this.$dialog = this.$element.find(".modal-dialog"), this.$backdrop = null, this.isShown = null, this.originalBodyPad = null, this.scrollbarWidth = 0, this.ignoreBackdropClick = !1, this.options.remote && this.$element.find(".modal-content").load(this.options.remote, a.proxy(function () {
            this.$element.trigger("loaded.bs.modal")
        }, this))
    };
    b.VERSION = "3.3.7", b.TRANSITION_DURATION = 300, b.BACKDROP_TRANSITION_DURATION = 150, b.DEFAULTS = {
        backdrop: !0,
        keyboard: !0,
        show: !0
    }, b.prototype.toggle = function (a) {
        return this.isShown ? this.hide() : this.show(a)
    }, b.prototype.show = function (c) {
        var d = this, e = a.Event("show.bs.modal", {relatedTarget: c});
        this.$element.trigger(e), this.isShown || e.isDefaultPrevented() || (this.isShown = !0, this.checkScrollbar(), this.setScrollbar(), this.$body.addClass("modal-open"), this.escape(), this.resize(), this.$element.on("click.dismiss.bs.modal", '[data-dismiss="modal"]', a.proxy(this.hide, this)), this.$dialog.on("mousedown.dismiss.bs.modal", function () {
            d.$element.one("mouseup.dismiss.bs.modal", function (b) {
                a(b.target).is(d.$element) && (d.ignoreBackdropClick = !0)
            })
        }), this.backdrop(function () {
            var e = a.support.transition && d.$element.hasClass("fade");
            d.$element.parent().length || d.$element.appendTo(d.$body), d.$element.show().scrollTop(0), d.adjustDialog(), e && d.$element[0].offsetWidth, d.$element.addClass("in"), d.enforceFocus();
            var f = a.Event("shown.bs.modal", {relatedTarget: c});
            e ? d.$dialog.one("bsTransitionEnd", function () {
                d.$element.trigger("focus").trigger(f)
            }).emulateTransitionEnd(b.TRANSITION_DURATION) : d.$element.trigger("focus").trigger(f)
        }))
    }, b.prototype.hide = function (c) {
        c && c.preventDefault(), c = a.Event("hide.bs.modal"), this.$element.trigger(c), this.isShown && !c.isDefaultPrevented() && (this.isShown = !1, this.escape(), this.resize(), a(document).off("focusin.bs.modal"), this.$element.removeClass("in").off("click.dismiss.bs.modal").off("mouseup.dismiss.bs.modal"), this.$dialog.off("mousedown.dismiss.bs.modal"), a.support.transition && this.$element.hasClass("fade") ? this.$element.one("bsTransitionEnd", a.proxy(this.hideModal, this)).emulateTransitionEnd(b.TRANSITION_DURATION) : this.hideModal())
    }, b.prototype.enforceFocus = function () {
        a(document).off("focusin.bs.modal").on("focusin.bs.modal", a.proxy(function (a) {
            document === a.target || this.$element[0] === a.target || this.$element.has(a.target).length || this.$element.trigger("focus")
        }, this))
    }, b.prototype.escape = function () {
        this.isShown && this.options.keyboard ? this.$element.on("keydown.dismiss.bs.modal", a.proxy(function (a) {
            27 == a.which && this.hide()
        }, this)) : this.isShown || this.$element.off("keydown.dismiss.bs.modal")
    }, b.prototype.resize = function () {
        this.isShown ? a(window).on("resize.bs.modal", a.proxy(this.handleUpdate, this)) : a(window).off("resize.bs.modal")
    }, b.prototype.hideModal = function () {
        var a = this;
        this.$element.hide(), this.backdrop(function () {
            a.$body.removeClass("modal-open"), a.resetAdjustments(), a.resetScrollbar(), a.$element.trigger("hidden.bs.modal")
        })
    }, b.prototype.removeBackdrop = function () {
        this.$backdrop && this.$backdrop.remove(), this.$backdrop = null
    }, b.prototype.backdrop = function (c) {
        var d = this, e = this.$element.hasClass("fade") ? "fade" : "";
        if (this.isShown && this.options.backdrop) {
            var f = a.support.transition && e;
            if (this.$backdrop = a(document.createElement("div")).addClass("modal-backdrop " + e).appendTo(this.$body), this.$element.on("click.dismiss.bs.modal", a.proxy(function (a) {
                    if (this.ignoreBackdropClick)return void(this.ignoreBackdropClick = !1);
                    a.target === a.currentTarget && ("static" == this.options.backdrop ? this.$element[0].focus() : this.hide())
                }, this)), f && this.$backdrop[0].offsetWidth, this.$backdrop.addClass("in"), !c)return;
            f ? this.$backdrop.one("bsTransitionEnd", c).emulateTransitionEnd(b.BACKDROP_TRANSITION_DURATION) : c()
        } else if (!this.isShown && this.$backdrop) {
            this.$backdrop.removeClass("in");
            var g = function () {
                d.removeBackdrop(), c && c()
            };
            a.support.transition && this.$element.hasClass("fade") ? this.$backdrop.one("bsTransitionEnd", g).emulateTransitionEnd(b.BACKDROP_TRANSITION_DURATION) : g()
        } else c && c()
    }, b.prototype.handleUpdate = function () {
        this.adjustDialog()
    }, b.prototype.adjustDialog = function () {
        var a = this.$element[0].scrollHeight > document.documentElement.clientHeight;
        this.$element.css({
            paddingLeft: !this.bodyIsOverflowing && a ? this.scrollbarWidth : "",
            paddingRight: this.bodyIsOverflowing && !a ? this.scrollbarWidth : ""
        })
    }, b.prototype.resetAdjustments = function () {
        this.$element.css({paddingLeft: "", paddingRight: ""})
    }, b.prototype.checkScrollbar = function () {
        var a = window.innerWidth;
        if (!a) {
            var b = document.documentElement.getBoundingClientRect();
            a = b.right - Math.abs(b.left)
        }
        this.bodyIsOverflowing = document.body.clientWidth < a, this.scrollbarWidth = this.measureScrollbar()
    }, b.prototype.setScrollbar = function () {
        var a = parseInt(this.$body.css("padding-right") || 0, 10);
        this.originalBodyPad = document.body.style.paddingRight || "", this.bodyIsOverflowing && this.$body.css("padding-right", a + this.scrollbarWidth)
    }, b.prototype.resetScrollbar = function () {
        this.$body.css("padding-right", this.originalBodyPad)
    }, b.prototype.measureScrollbar = function () {
        var a = document.createElement("div");
        a.className = "modal-scrollbar-measure", this.$body.append(a);
        var b = a.offsetWidth - a.clientWidth;
        return this.$body[0].removeChild(a), b
    };
    var d = a.fn.modal;
    a.fn.modal = c, a.fn.modal.Constructor = b, a.fn.modal.noConflict = function () {
        return a.fn.modal = d, this
    }, a(document).on("click.bs.modal.data-api", '[data-toggle="modal"]', function (b) {
        var d = a(this), e = d.attr("href"), f = a(d.attr("data-target") || e && e.replace(/.*(?=#[^\s]+$)/, "")),
            g = f.data("bs.modal") ? "toggle" : a.extend({remote: !/#/.test(e) && e}, f.data(), d.data());
        d.is("a") && b.preventDefault(), f.one("show.bs.modal", function (a) {
            a.isDefaultPrevented() || f.one("hidden.bs.modal", function () {
                d.is(":visible") && d.trigger("focus")
            })
        }), c.call(f, g, this)
    })
}(jQuery), function (a) {
    "use strict";
    function c(c) {
        return this.each(function () {
            var d = a(this), e = d.data("bs.tooltip"), f = "object" == typeof c && c;
            !e && /destroy|hide/.test(c) || (e || d.data("bs.tooltip", e = new b(this, f)), "string" == typeof c && e[c]())
        })
    }

    var b = function (a, b) {
        this.type = null, this.options = null, this.enabled = null, this.timeout = null, this.hoverState = null, this.$element = null, this.inState = null, this.init("tooltip", a, b)
    };
    b.VERSION = "3.3.7", b.TRANSITION_DURATION = 150, b.DEFAULTS = {
        animation: !0,
        placement: "top",
        selector: !1,
        template: '<div class="tooltip" role="tooltip"><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div>',
        trigger: "hover focus",
        title: "",
        delay: 0,
        html: !1,
        container: !1,
        viewport: {selector: "body", padding: 0}
    }, b.prototype.init = function (b, c, d) {
        if (this.enabled = !0, this.type = b, this.$element = a(c), this.options = this.getOptions(d), this.$viewport = this.options.viewport && a(a.isFunction(this.options.viewport) ? this.options.viewport.call(this, this.$element) : this.options.viewport.selector || this.options.viewport), this.inState = {
                click: !1,
                hover: !1,
                focus: !1
            }, this.$element[0] instanceof document.constructor && !this.options.selector)throw new Error("`selector` option must be specified when initializing " + this.type + " on the window.document object!");
        for (var e = this.options.trigger.split(" "), f = e.length; f--;) {
            var g = e[f];
            if ("click" == g) this.$element.on("click." + this.type, this.options.selector, a.proxy(this.toggle, this)); else if ("manual" != g) {
                var h = "hover" == g ? "mouseenter" : "focusin", i = "hover" == g ? "mouseleave" : "focusout";
                this.$element.on(h + "." + this.type, this.options.selector, a.proxy(this.enter, this)), this.$element.on(i + "." + this.type, this.options.selector, a.proxy(this.leave, this))
            }
        }
        this.options.selector ? this._options = a.extend({}, this.options, {
            trigger: "manual",
            selector: ""
        }) : this.fixTitle()
    }, b.prototype.getDefaults = function () {
        return b.DEFAULTS
    }, b.prototype.getOptions = function (b) {
        return b = a.extend({}, this.getDefaults(), this.$element.data(), b), b.delay && "number" == typeof b.delay && (b.delay = {
            show: b.delay,
            hide: b.delay
        }), b
    }, b.prototype.getDelegateOptions = function () {
        var b = {}, c = this.getDefaults();
        return this._options && a.each(this._options, function (a, d) {
            c[a] != d && (b[a] = d)
        }), b
    }, b.prototype.enter = function (b) {
        var c = b instanceof this.constructor ? b : a(b.currentTarget).data("bs." + this.type);
        return c || (c = new this.constructor(b.currentTarget, this.getDelegateOptions()), a(b.currentTarget).data("bs." + this.type, c)), b instanceof a.Event && (c.inState["focusin" == b.type ? "focus" : "hover"] = !0), c.tip().hasClass("in") || "in" == c.hoverState ? void(c.hoverState = "in") : (clearTimeout(c.timeout), c.hoverState = "in", c.options.delay && c.options.delay.show ? void(c.timeout = setTimeout(function () {
            "in" == c.hoverState && c.show()
        }, c.options.delay.show)) : c.show())
    }, b.prototype.isInStateTrue = function () {
        for (var a in this.inState)if (this.inState[a])return !0;
        return !1
    }, b.prototype.leave = function (b) {
        var c = b instanceof this.constructor ? b : a(b.currentTarget).data("bs." + this.type);
        if (c || (c = new this.constructor(b.currentTarget, this.getDelegateOptions()), a(b.currentTarget).data("bs." + this.type, c)), b instanceof a.Event && (c.inState["focusout" == b.type ? "focus" : "hover"] = !1), !c.isInStateTrue()) {
            if (clearTimeout(c.timeout), c.hoverState = "out", !c.options.delay || !c.options.delay.hide)return c.hide();
            c.timeout = setTimeout(function () {
                "out" == c.hoverState && c.hide()
            }, c.options.delay.hide)
        }
    }, b.prototype.show = function () {
        var c = a.Event("show.bs." + this.type);
        if (this.hasContent() && this.enabled) {
            this.$element.trigger(c);
            var d = a.contains(this.$element[0].ownerDocument.documentElement, this.$element[0]);
            if (c.isDefaultPrevented() || !d)return;
            var e = this, f = this.tip(), g = this.getUID(this.type);
            this.setContent(), f.attr("id", g), this.$element.attr("aria-describedby", g), this.options.animation && f.addClass("fade");
            var h = "function" == typeof this.options.placement ? this.options.placement.call(this, f[0], this.$element[0]) : this.options.placement,
                i = /\s?auto?\s?/i, j = i.test(h);
            j && (h = h.replace(i, "") || "top"), f.detach().css({
                top: 0,
                left: 0,
                display: "block"
            }).addClass(h).data("bs." + this.type, this), this.options.container ? f.appendTo(this.options.container) : f.insertAfter(this.$element), this.$element.trigger("inserted.bs." + this.type);
            var k = this.getPosition(), l = f[0].offsetWidth, m = f[0].offsetHeight;
            if (j) {
                var n = h, o = this.getPosition(this.$viewport);
                h = "bottom" == h && k.bottom + m > o.bottom ? "top" : "top" == h && k.top - m < o.top ? "bottom" : "right" == h && k.right + l > o.width ? "left" : "left" == h && k.left - l < o.left ? "right" : h, f.removeClass(n).addClass(h)
            }
            var p = this.getCalculatedOffset(h, k, l, m);
            this.applyPlacement(p, h);
            var q = function () {
                var a = e.hoverState;
                e.$element.trigger("shown.bs." + e.type), e.hoverState = null, "out" == a && e.leave(e)
            };
            a.support.transition && this.$tip.hasClass("fade") ? f.one("bsTransitionEnd", q).emulateTransitionEnd(b.TRANSITION_DURATION) : q()
        }
    }, b.prototype.applyPlacement = function (b, c) {
        var d = this.tip(), e = d[0].offsetWidth, f = d[0].offsetHeight, g = parseInt(d.css("margin-top"), 10),
            h = parseInt(d.css("margin-left"), 10);
        isNaN(g) && (g = 0), isNaN(h) && (h = 0), b.top += g, b.left += h, a.offset.setOffset(d[0], a.extend({
            using: function (a) {
                d.css({top: Math.round(a.top), left: Math.round(a.left)})
            }
        }, b), 0), d.addClass("in");
        var i = d[0].offsetWidth, j = d[0].offsetHeight;
        "top" == c && j != f && (b.top = b.top + f - j);
        var k = this.getViewportAdjustedDelta(c, b, i, j);
        k.left ? b.left += k.left : b.top += k.top;
        var l = /top|bottom/.test(c), m = l ? 2 * k.left - e + i : 2 * k.top - f + j,
            n = l ? "offsetWidth" : "offsetHeight";
        d.offset(b), this.replaceArrow(m, d[0][n], l)
    }, b.prototype.replaceArrow = function (a, b, c) {
        this.arrow().css(c ? "left" : "top", 50 * (1 - a / b) + "%").css(c ? "top" : "left", "")
    }, b.prototype.setContent = function () {
        var a = this.tip(), b = this.getTitle();
        a.find(".tooltip-inner")[this.options.html ? "html" : "text"](b), a.removeClass("fade in top bottom left right")
    }, b.prototype.hide = function (c) {
        function g() {
            "in" != d.hoverState && e.detach(), d.$element && d.$element.removeAttr("aria-describedby").trigger("hidden.bs." + d.type), c && c()
        }

        var d = this, e = a(this.$tip), f = a.Event("hide.bs." + this.type);
        if (this.$element.trigger(f), !f.isDefaultPrevented())return e.removeClass("in"), a.support.transition && e.hasClass("fade") ? e.one("bsTransitionEnd", g).emulateTransitionEnd(b.TRANSITION_DURATION) : g(), this.hoverState = null, this
    }, b.prototype.fixTitle = function () {
        var a = this.$element;
        (a.attr("title") || "string" != typeof a.attr("data-original-title")) && a.attr("data-original-title", a.attr("title") || "").attr("title", "")
    }, b.prototype.hasContent = function () {
        return this.getTitle()
    }, b.prototype.getPosition = function (b) {
        b = b || this.$element;
        var c = b[0], d = "BODY" == c.tagName, e = c.getBoundingClientRect();
        null == e.width && (e = a.extend({}, e, {width: e.right - e.left, height: e.bottom - e.top}));
        var f = window.SVGElement && c instanceof window.SVGElement, g = d ? {top: 0, left: 0} : f ? null : b.offset(),
            h = {scroll: d ? document.documentElement.scrollTop || document.body.scrollTop : b.scrollTop()},
            i = d ? {width: a(window).width(), height: a(window).height()} : null;
        return a.extend({}, e, h, i, g)
    }, b.prototype.getCalculatedOffset = function (a, b, c, d) {
        return "bottom" == a ? {
            top: b.top + b.height,
            left: b.left + b.width / 2 - c / 2
        } : "top" == a ? {
            top: b.top - d,
            left: b.left + b.width / 2 - c / 2
        } : "left" == a ? {top: b.top + b.height / 2 - d / 2, left: b.left - c} : {
            top: b.top + b.height / 2 - d / 2,
            left: b.left + b.width
        }
    }, b.prototype.getViewportAdjustedDelta = function (a, b, c, d) {
        var e = {top: 0, left: 0};
        if (!this.$viewport)return e;
        var f = this.options.viewport && this.options.viewport.padding || 0, g = this.getPosition(this.$viewport);
        if (/right|left/.test(a)) {
            var h = b.top - f - g.scroll, i = b.top + f - g.scroll + d;
            h < g.top ? e.top = g.top - h : i > g.top + g.height && (e.top = g.top + g.height - i)
        } else {
            var j = b.left - f, k = b.left + f + c;
            j < g.left ? e.left = g.left - j : k > g.right && (e.left = g.left + g.width - k)
        }
        return e
    }, b.prototype.getTitle = function () {
        var b = this.$element, c = this.options;
        return b.attr("data-original-title") || ("function" == typeof c.title ? c.title.call(b[0]) : c.title)
    }, b.prototype.getUID = function (a) {
        do {
            a += ~~(1e6 * Math.random())
        } while (document.getElementById(a));
        return a
    }, b.prototype.tip = function () {
        if (!this.$tip && (this.$tip = a(this.options.template), 1 != this.$tip.length))throw new Error(this.type + " `template` option must consist of exactly 1 top-level element!");
        return this.$tip
    }, b.prototype.arrow = function () {
        return this.$arrow = this.$arrow || this.tip().find(".tooltip-arrow")
    }, b.prototype.enable = function () {
        this.enabled = !0
    }, b.prototype.disable = function () {
        this.enabled = !1
    }, b.prototype.toggleEnabled = function () {
        this.enabled = !this.enabled
    }, b.prototype.toggle = function (b) {
        var c = this;
        b && ((c = a(b.currentTarget).data("bs." + this.type)) || (c = new this.constructor(b.currentTarget, this.getDelegateOptions()), a(b.currentTarget).data("bs." + this.type, c))), b ? (c.inState.click = !c.inState.click, c.isInStateTrue() ? c.enter(c) : c.leave(c)) : c.tip().hasClass("in") ? c.leave(c) : c.enter(c)
    }, b.prototype.destroy = function () {
        var a = this;
        clearTimeout(this.timeout), this.hide(function () {
            a.$element.off("." + a.type).removeData("bs." + a.type), a.$tip && a.$tip.detach(), a.$tip = null, a.$arrow = null, a.$viewport = null, a.$element = null
        })
    };
    var d = a.fn.tooltip;
    a.fn.tooltip = c, a.fn.tooltip.Constructor = b, a.fn.tooltip.noConflict = function () {
        return a.fn.tooltip = d, this
    }
}(jQuery), function (a) {
    "use strict";
    function c(c) {
        return this.each(function () {
            var d = a(this), e = d.data("bs.popover"), f = "object" == typeof c && c;
            !e && /destroy|hide/.test(c) || (e || d.data("bs.popover", e = new b(this, f)), "string" == typeof c && e[c]())
        })
    }

    var b = function (a, b) {
        this.init("popover", a, b)
    };
    if (!a.fn.tooltip)throw new Error("Popover requires tooltip.js");
    b.VERSION = "3.3.7", b.DEFAULTS = a.extend({}, a.fn.tooltip.Constructor.DEFAULTS, {
        placement: "right",
        trigger: "click",
        content: "",
        template: '<div class="popover" role="tooltip"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content"></div></div>'
    }), b.prototype = a.extend({}, a.fn.tooltip.Constructor.prototype), b.prototype.constructor = b, b.prototype.getDefaults = function () {
        return b.DEFAULTS
    }, b.prototype.setContent = function () {
        var a = this.tip(), b = this.getTitle(), c = this.getContent();
        a.find(".popover-title")[this.options.html ? "html" : "text"](b), a.find(".popover-content").children().detach().end()[this.options.html ? "string" == typeof c ? "html" : "append" : "text"](c), a.removeClass("fade top bottom left right in"), a.find(".popover-title").html() || a.find(".popover-title").hide()
    }, b.prototype.hasContent = function () {
        return this.getTitle() || this.getContent()
    }, b.prototype.getContent = function () {
        var a = this.$element, b = this.options;
        return a.attr("data-content") || ("function" == typeof b.content ? b.content.call(a[0]) : b.content)
    }, b.prototype.arrow = function () {
        return this.$arrow = this.$arrow || this.tip().find(".arrow")
    };
    var d = a.fn.popover;
    a.fn.popover = c, a.fn.popover.Constructor = b, a.fn.popover.noConflict = function () {
        return a.fn.popover = d, this
    }
}(jQuery), function (a) {
    "use strict";
    function b(c, d) {
        this.$body = a(document.body), this.$scrollElement = a(a(c).is(document.body) ? window : c), this.options = a.extend({}, b.DEFAULTS, d), this.selector = (this.options.target || "") + " .nav li > a", this.offsets = [], this.targets = [], this.activeTarget = null, this.scrollHeight = 0, this.$scrollElement.on("scroll.bs.scrollspy", a.proxy(this.process, this)), this.refresh(), this.process()
    }

    function c(c) {
        return this.each(function () {
            var d = a(this), e = d.data("bs.scrollspy"), f = "object" == typeof c && c;
            e || d.data("bs.scrollspy", e = new b(this, f)), "string" == typeof c && e[c]()
        })
    }

    b.VERSION = "3.3.7", b.DEFAULTS = {offset: 10}, b.prototype.getScrollHeight = function () {
        return this.$scrollElement[0].scrollHeight || Math.max(this.$body[0].scrollHeight, document.documentElement.scrollHeight)
    }, b.prototype.refresh = function () {
        var b = this, c = "offset", d = 0;
        this.offsets = [], this.targets = [], this.scrollHeight = this.getScrollHeight(), a.isWindow(this.$scrollElement[0]) || (c = "position", d = this.$scrollElement.scrollTop()), this.$body.find(this.selector).map(function () {
            var b = a(this), e = b.data("target") || b.attr("href"), f = /^#./.test(e) && a(e);
            return f && f.length && f.is(":visible") && [[f[c]().top + d, e]] || null
        }).sort(function (a, b) {
            return a[0] - b[0]
        }).each(function () {
            b.offsets.push(this[0]), b.targets.push(this[1])
        })
    }, b.prototype.process = function () {
        var g, a = this.$scrollElement.scrollTop() + this.options.offset, b = this.getScrollHeight(),
            c = this.options.offset + b - this.$scrollElement.height(), d = this.offsets, e = this.targets,
            f = this.activeTarget;
        if (this.scrollHeight != b && this.refresh(), a >= c)return f != (g = e[e.length - 1]) && this.activate(g);
        if (f && a < d[0])return this.activeTarget = null, this.clear();
        for (g = d.length; g--;)f != e[g] && a >= d[g] && (void 0 === d[g + 1] || a < d[g + 1]) && this.activate(e[g])
    }, b.prototype.activate = function (b) {
        this.activeTarget = b, this.clear();
        var c = this.selector + '[data-target="' + b + '"],' + this.selector + '[href="' + b + '"]',
            d = a(c).parents("li").addClass("active");
        d.parent(".dropdown-menu").length && (d = d.closest("li.dropdown").addClass("active")), d.trigger("activate.bs.scrollspy")
    }, b.prototype.clear = function () {
        a(this.selector).parentsUntil(this.options.target, ".active").removeClass("active")
    };
    var d = a.fn.scrollspy;
    a.fn.scrollspy = c, a.fn.scrollspy.Constructor = b, a.fn.scrollspy.noConflict = function () {
        return a.fn.scrollspy = d, this
    }, a(window).on("load.bs.scrollspy.data-api", function () {
        a('[data-spy="scroll"]').each(function () {
            var b = a(this);
            c.call(b, b.data())
        })
    })
}(jQuery), function (a) {
    "use strict";
    function c(c) {
        return this.each(function () {
            var d = a(this), e = d.data("bs.tab");
            e || d.data("bs.tab", e = new b(this)), "string" == typeof c && e[c]()
        })
    }

    var b = function (b) {
        this.element = a(b)
    };
    b.VERSION = "3.3.7", b.TRANSITION_DURATION = 150, b.prototype.show = function () {
        var b = this.element, c = b.closest("ul:not(.dropdown-menu)"), d = b.data("target");
        if (d || (d = b.attr("href"), d = d && d.replace(/.*(?=#[^\s]*$)/, "")), !b.parent("li").hasClass("active")) {
            var e = c.find(".active:last a"), f = a.Event("hide.bs.tab", {relatedTarget: b[0]}),
                g = a.Event("show.bs.tab", {relatedTarget: e[0]});
            if (e.trigger(f), b.trigger(g), !g.isDefaultPrevented() && !f.isDefaultPrevented()) {
                var h = a(d);
                this.activate(b.closest("li"), c), this.activate(h, h.parent(), function () {
                    e.trigger({type: "hidden.bs.tab", relatedTarget: b[0]}), b.trigger({
                        type: "shown.bs.tab",
                        relatedTarget: e[0]
                    })
                })
            }
        }
    }, b.prototype.activate = function (c, d, e) {
        function h() {
            f.removeClass("active").find("> .dropdown-menu > .active").removeClass("active").end().find('[data-toggle="tab"]').attr("aria-expanded", !1), c.addClass("active").find('[data-toggle="tab"]').attr("aria-expanded", !0), g ? (c[0].offsetWidth, c.addClass("in")) : c.removeClass("fade"), c.parent(".dropdown-menu").length && c.closest("li.dropdown").addClass("active").end().find('[data-toggle="tab"]').attr("aria-expanded", !0), e && e()
        }

        var f = d.find("> .active"),
            g = e && a.support.transition && (f.length && f.hasClass("fade") || !!d.find("> .fade").length);
        f.length && g ? f.one("bsTransitionEnd", h).emulateTransitionEnd(b.TRANSITION_DURATION) : h(), f.removeClass("in")
    };
    var d = a.fn.tab;
    a.fn.tab = c, a.fn.tab.Constructor = b, a.fn.tab.noConflict = function () {
        return a.fn.tab = d, this
    };
    var e = function (b) {
        b.preventDefault(), c.call(a(this), "show")
    };
    a(document).on("click.bs.tab.data-api", '[data-toggle="tab"]', e).on("click.bs.tab.data-api", '[data-toggle="pill"]', e)
}(jQuery), function (a) {
    "use strict";
    function c(c) {
        return this.each(function () {
            var d = a(this), e = d.data("bs.affix"), f = "object" == typeof c && c;
            e || d.data("bs.affix", e = new b(this, f)), "string" == typeof c && e[c]()
        })
    }

    var b = function (c, d) {
        this.options = a.extend({}, b.DEFAULTS, d), this.$target = a(this.options.target).on("scroll.bs.affix.data-api", a.proxy(this.checkPosition, this)).on("click.bs.affix.data-api", a.proxy(this.checkPositionWithEventLoop, this)), this.$element = a(c), this.affixed = null, this.unpin = null, this.pinnedOffset = null, this.checkPosition()
    };
    b.VERSION = "3.3.7", b.RESET = "affix affix-top affix-bottom", b.DEFAULTS = {
        offset: 0,
        target: window
    }, b.prototype.getState = function (a, b, c, d) {
        var e = this.$target.scrollTop(), f = this.$element.offset(), g = this.$target.height();
        if (null != c && "top" == this.affixed)return e < c && "top";
        if ("bottom" == this.affixed)return null != c ? !(e + this.unpin <= f.top) && "bottom" : !(e + g <= a - d) && "bottom";
        var h = null == this.affixed, i = h ? e : f.top, j = h ? g : b;
        return null != c && e <= c ? "top" : null != d && i + j >= a - d && "bottom"
    }, b.prototype.getPinnedOffset = function () {
        if (this.pinnedOffset)return this.pinnedOffset;
        this.$element.removeClass(b.RESET).addClass("affix");
        var a = this.$target.scrollTop(), c = this.$element.offset();
        return this.pinnedOffset = c.top - a
    }, b.prototype.checkPositionWithEventLoop = function () {
        setTimeout(a.proxy(this.checkPosition, this), 1)
    }, b.prototype.checkPosition = function () {
        if (this.$element.is(":visible")) {
            var c = this.$element.height(), d = this.options.offset, e = d.top, f = d.bottom,
                g = Math.max(a(document).height(), a(document.body).height());
            "object" != typeof d && (f = e = d), "function" == typeof e && (e = d.top(this.$element)), "function" == typeof f && (f = d.bottom(this.$element));
            var h = this.getState(g, c, e, f);
            if (this.affixed != h) {
                null != this.unpin && this.$element.css("top", "");
                var i = "affix" + (h ? "-" + h : ""), j = a.Event(i + ".bs.affix");
                if (this.$element.trigger(j), j.isDefaultPrevented())return;
                this.affixed = h, this.unpin = "bottom" == h ? this.getPinnedOffset() : null, this.$element.removeClass(b.RESET).addClass(i).trigger(i.replace("affix", "affixed") + ".bs.affix")
            }
            "bottom" == h && this.$element.offset({top: g - c - f})
        }
    };
    var d = a.fn.affix;
    a.fn.affix = c, a.fn.affix.Constructor = b, a.fn.affix.noConflict = function () {
        return a.fn.affix = d, this
    }, a(window).on("load", function () {
        a('[data-spy="affix"]').each(function () {
            var b = a(this), d = b.data();
            d.offset = d.offset || {}, null != d.offsetBottom && (d.offset.bottom = d.offsetBottom), null != d.offsetTop && (d.offset.top = d.offsetTop), c.call(b, d)
        })
    })
}(jQuery), function (a) {
    "use strict";
    var b = function (b, c) {
        this.options = c;
        var d = a(b), e = d.is("img"), f = e ? d.attr("src") : d.backgroundImageUrl(),
            g = this.options.generateUrl(d, f);
        a("<img/>").attr("src", g).load(function () {
            e ? d.attr("src", a(this).attr("src")) : (d.backgroundImageUrl(a(this).attr("src")), d.backgroundSize(a(this)[0].width, a(this)[0].height)), d.attr("data-retina", "complete")
        })
    };
    b.prototype = {constructor: b}, a.fn.retinaReplace = function (d) {
        return c() <= 1 ? this : this.each(function () {
            var c = a(this), e = c.data("retinaReplace"),
                f = a.extend({}, a.fn.retinaReplace.defaults, c.data(), "object" == typeof d && d);
            e || c.data("retinaReplace", e = new b(this, f)), "string" == typeof d && e[d]()
        })
    }, a.fn.retinaReplace.defaults = {
        suffix: "_2x", generateUrl: function (a, b) {
            var c = b.lastIndexOf("."), d = b.substr(c + 1);
            return b.substr(0, c) + this.suffix + "." + d
        }
    }, a.fn.retinaReplace.Constructor = b;
    var c = function () {
        return void 0 === window.devicePixelRatio ? 1 : window.devicePixelRatio
    };
    a.fn.backgroundImageUrl = function (b) {
        return b ? this.each(function () {
            a(this).css("background-image", 'url("' + b + '")')
        }) : a(this).css("background-image").replace(/url\(|\)|"|'/g, "")
    }, a.fn.backgroundSize = function (b, c) {
        var d = Math.floor(b / 2) + "px " + Math.floor(c / 2) + "px";
        a(this).css("background-size", d), a(this).css("-webkit-background-size", d)
    }, a(function () {
        a("[data-retina='true']").retinaReplace()
    })
}(window.jQuery), function (a, b, c, d) {
    function e(b, c) {
        var f = this;
        "object" == typeof c && (delete c.refresh, delete c.render, a.extend(this, c)), this.$element = a(b), !this.imageSrc && this.$element.is("img") && (this.imageSrc = this.$element.attr("src"));
        var g = (this.position + "").toLowerCase().match(/\S+/g) || [];
        if (g.length < 1 && g.push("center"), 1 == g.length && g.push(g[0]), "top" != g[0] && "bottom" != g[0] && "left" != g[1] && "right" != g[1] || (g = [g[1], g[0]]), this.positionX != d && (g[0] = this.positionX.toLowerCase()), this.positionY != d && (g[1] = this.positionY.toLowerCase()), f.positionX = g[0], f.positionY = g[1], "left" != this.positionX && "right" != this.positionX && (isNaN(parseInt(this.positionX)) ? this.positionX = "center" : this.positionX = parseInt(this.positionX)), "top" != this.positionY && "bottom" != this.positionY && (isNaN(parseInt(this.positionY)) ? this.positionY = "center" : this.positionY = parseInt(this.positionY)), this.position = this.positionX + (isNaN(this.positionX) ? "" : "px") + " " + this.positionY + (isNaN(this.positionY) ? "" : "px"), navigator.userAgent.match(/(iPod|iPhone|iPad)/))return this.imageSrc && this.iosFix && !this.$element.is("img") && this.$element.css({
            backgroundImage: "url(" + this.imageSrc + ")",
            backgroundSize: "cover",
            backgroundPosition: this.position
        }), this;
        if (navigator.userAgent.match(/(Android)/))return this.imageSrc && this.androidFix && !this.$element.is("img") && this.$element.css({
            backgroundImage: "url(" + this.imageSrc + ")",
            backgroundSize: "cover",
            backgroundPosition: this.position
        }), this;
        this.$mirror = a("<div />").prependTo("body");
        var h = this.$element.find(">.parallax-slider"), i = !1;
        0 == h.length ? this.$slider = a("<img />").prependTo(this.$mirror) : (this.$slider = h.prependTo(this.$mirror), i = !0), this.$mirror.addClass("parallax-mirror").css({
            visibility: "hidden",
            zIndex: this.zIndex,
            position: "fixed",
            top: 0,
            left: 0,
            overflow: "hidden"
        }), this.$slider.addClass("parallax-slider").one("load", function () {
            f.naturalHeight && f.naturalWidth || (f.naturalHeight = this.naturalHeight || this.height || 1, f.naturalWidth = this.naturalWidth || this.width || 1), f.aspectRatio = f.naturalWidth / f.naturalHeight, e.isSetup || e.setup(), e.sliders.push(f), e.isFresh = !1, e.requestRender()
        }), i || (this.$slider[0].src = this.imageSrc), (this.naturalHeight && this.naturalWidth || this.$slider[0].complete || h.length > 0) && this.$slider.trigger("load")
    }

    function f(d) {
        return this.each(function () {
            var f = a(this), g = "object" == typeof d && d;
            this == b || this == c || f.is("body") ? e.configure(g) : f.data("px.parallax") ? "object" == typeof d && a.extend(f.data("px.parallax"), g) : (g = a.extend({}, f.data(), g), f.data("px.parallax", new e(this, g))), "string" == typeof d && ("destroy" == d ? e.destroy(this) : e[d]())
        })
    }

    !function () {
        for (var a = 0, c = ["ms", "moz", "webkit", "o"], d = 0; d < c.length && !b.requestAnimationFrame; ++d)b.requestAnimationFrame = b[c[d] + "RequestAnimationFrame"], b.cancelAnimationFrame = b[c[d] + "CancelAnimationFrame"] || b[c[d] + "CancelRequestAnimationFrame"];
        b.requestAnimationFrame || (b.requestAnimationFrame = function (c) {
            var d = (new Date).getTime(), e = Math.max(0, 16 - (d - a)), f = b.setTimeout(function () {
                c(d + e)
            }, e);
            return a = d + e, f
        }), b.cancelAnimationFrame || (b.cancelAnimationFrame = function (a) {
            clearTimeout(a)
        })
    }(), a.extend(e.prototype, {
        speed: .2,
        bleed: 0,
        zIndex: 1,
        iosFix: !0,
        androidFix: !0,
        position: "center",
        overScrollFix: !1,
        refresh: function () {
            this.boxWidth = this.$element.outerWidth(), this.boxHeight = this.$element.outerHeight() + 2 * this.bleed, this.boxOffsetTop = this.$element.offset().top - this.bleed, this.boxOffsetLeft = this.$element.offset().left, this.boxOffsetBottom = this.boxOffsetTop + this.boxHeight;
            var a = e.winHeight, b = e.docHeight, c = Math.min(this.boxOffsetTop, b - a),
                d = Math.max(this.boxOffsetTop + this.boxHeight - a, 0),
                f = this.boxHeight + (c - d) * (1 - this.speed) | 0, g = (this.boxOffsetTop - c) * (1 - this.speed) | 0;
            if (f * this.aspectRatio >= this.boxWidth) {
                this.imageWidth = f * this.aspectRatio | 0, this.imageHeight = f, this.offsetBaseTop = g;
                var h = this.imageWidth - this.boxWidth;
                "left" == this.positionX ? this.offsetLeft = 0 : "right" == this.positionX ? this.offsetLeft = -h : isNaN(this.positionX) ? this.offsetLeft = -h / 2 | 0 : this.offsetLeft = Math.max(this.positionX, -h)
            } else {
                this.imageWidth = this.boxWidth, this.imageHeight = this.boxWidth / this.aspectRatio | 0, this.offsetLeft = 0;
                var h = this.imageHeight - f;
                "top" == this.positionY ? this.offsetBaseTop = g : "bottom" == this.positionY ? this.offsetBaseTop = g - h : isNaN(this.positionY) ? this.offsetBaseTop = g - h / 2 | 0 : this.offsetBaseTop = g + Math.max(this.positionY, -h)
            }
        },
        render: function () {
            var a = e.scrollTop, b = e.scrollLeft, c = this.overScrollFix ? e.overScroll : 0, d = a + e.winHeight;
            this.boxOffsetBottom > a && this.boxOffsetTop <= d ? (this.visibility = "visible", this.mirrorTop = this.boxOffsetTop - a, this.mirrorLeft = this.boxOffsetLeft - b, this.offsetTop = this.offsetBaseTop - this.mirrorTop * (1 - this.speed)) : this.visibility = "hidden", this.$mirror.css({
                transform: "translate3d(0px, 0px, 0px)",
                visibility: this.visibility,
                top: this.mirrorTop - c,
                left: this.mirrorLeft,
                height: this.boxHeight,
                width: this.boxWidth
            }), this.$slider.css({
                transform: "translate3d(0px, 0px, 0px)",
                position: "absolute",
                top: this.offsetTop,
                left: this.offsetLeft,
                height: this.imageHeight,
                width: this.imageWidth,
                maxWidth: "none"
            })
        }
    }), a.extend(e, {
        scrollTop: 0,
        scrollLeft: 0,
        winHeight: 0,
        winWidth: 0,
        docHeight: 1 << 30,
        docWidth: 1 << 30,
        sliders: [],
        isReady: !1,
        isFresh: !1,
        isBusy: !1,
        setup: function () {
            if (!this.isReady) {
                var d = a(c), f = a(b), g = function () {
                    e.winHeight = f.height(), e.winWidth = f.width(), e.docHeight = d.height(), e.docWidth = d.width()
                }, h = function () {
                    var a = f.scrollTop(), b = e.docHeight - e.winHeight, c = e.docWidth - e.winWidth;
                    e.scrollTop = Math.max(0, Math.min(b, a)), e.scrollLeft = Math.max(0, Math.min(c, f.scrollLeft())), e.overScroll = Math.max(a - b, Math.min(a, 0))
                };
                f.on("resize.px.parallax load.px.parallax", function () {
                    g(), e.isFresh = !1, e.requestRender()
                }).on("scroll.px.parallax load.px.parallax", function () {
                    h(), e.requestRender()
                }), g(), h(), this.isReady = !0
            }
        },
        configure: function (b) {
            "object" == typeof b && (delete b.refresh, delete b.render, a.extend(this.prototype, b))
        },
        refresh: function () {
            a.each(this.sliders, function () {
                this.refresh()
            }), this.isFresh = !0
        },
        render: function () {
            this.isFresh || this.refresh(), a.each(this.sliders, function () {
                this.render()
            })
        },
        requestRender: function () {
            var a = this;
            this.isBusy || (this.isBusy = !0, b.requestAnimationFrame(function () {
                a.render(), a.isBusy = !1
            }))
        },
        destroy: function (c) {
            var d, f = a(c).data("px.parallax");
            for (f.$mirror.remove(), d = 0; d < this.sliders.length; d += 1)this.sliders[d] == f && this.sliders.splice(d, 1);
            a(c).data("px.parallax", !1), 0 === this.sliders.length && (a(b).off("scroll.px.parallax resize.px.parallax load.px.parallax"), this.isReady = !1, e.isSetup = !1)
        }
    });
    var g = a.fn.parallax;
    a.fn.parallax = f, a.fn.parallax.Constructor = e, a.fn.parallax.noConflict = function () {
        return a.fn.parallax = g, this
    }, a(c).on("ready.px.parallax.data-api", function () {
        a('[data-parallax="scroll"]').parallax()
    })
}(jQuery, window, document), function (a) {
    "function" == typeof define && define.amd ? define(["jquery"], a) : a("object" == typeof exports ? require("jquery") : window.jQuery || window.Zepto)
}(function (a) {
    var n, q, s, t, u, v, b = "Close", c = "BeforeClose", d = "AfterClose", e = "BeforeAppend", f = "MarkupParse",
        g = "Open", h = "Change", i = "mfp", j = "." + i, k = "mfp-ready", l = "mfp-removing", m = "mfp-prevent-close",
        o = function () {
        }, p = !!window.jQuery, r = a(window), w = function (a, b) {
            n.ev.on(i + a + j, b)
        }, x = function (b, c, d, e) {
            var f = document.createElement("div");
            return f.className = "mfp-" + b, d && (f.innerHTML = d), e ? c && c.appendChild(f) : (f = a(f), c && f.appendTo(c)), f
        }, y = function (b, c) {
            n.ev.triggerHandler(i + b, c), n.st.callbacks && (b = b.charAt(0).toLowerCase() + b.slice(1), n.st.callbacks[b] && n.st.callbacks[b].apply(n, a.isArray(c) ? c : [c]))
        }, z = function (b) {
            return b === v && n.currTemplate.closeBtn || (n.currTemplate.closeBtn = a(n.st.closeMarkup.replace("%title%", n.st.tClose)), v = b), n.currTemplate.closeBtn
        }, A = function () {
            a.magnificPopup.instance || (n = new o, n.init(), a.magnificPopup.instance = n)
        }, B = function () {
            var a = document.createElement("p").style, b = ["ms", "O", "Moz", "Webkit"];
            if (void 0 !== a.transition)return !0;
            for (; b.length;)if (b.pop() + "Transition" in a)return !0;
            return !1
        };
    o.prototype = {
        constructor: o, init: function () {
            var b = navigator.appVersion;
            n.isLowIE = n.isIE8 = document.all && !document.addEventListener, n.isAndroid = /android/gi.test(b), n.isIOS = /iphone|ipad|ipod/gi.test(b), n.supportsTransition = B(), n.probablyMobile = n.isAndroid || n.isIOS || /(Opera Mini)|Kindle|webOS|BlackBerry|(Opera Mobi)|(Windows Phone)|IEMobile/i.test(navigator.userAgent), s = a(document), n.popupsCache = {}
        }, open: function (b) {
            var c;
            if (!1 === b.isObj) {
                n.items = b.items.toArray(), n.index = 0;
                var e, d = b.items;
                for (c = 0; c < d.length; c++)if (e = d[c], e.parsed && (e = e.el[0]), e === b.el[0]) {
                    n.index = c;
                    break
                }
            } else n.items = a.isArray(b.items) ? b.items : [b.items], n.index = b.index || 0;
            if (n.isOpen)return void n.updateItemHTML();
            n.types = [], u = "", b.mainEl && b.mainEl.length ? n.ev = b.mainEl.eq(0) : n.ev = s, b.key ? (n.popupsCache[b.key] || (n.popupsCache[b.key] = {}), n.currTemplate = n.popupsCache[b.key]) : n.currTemplate = {}, n.st = a.extend(!0, {}, a.magnificPopup.defaults, b), n.fixedContentPos = "auto" === n.st.fixedContentPos ? !n.probablyMobile : n.st.fixedContentPos, n.st.modal && (n.st.closeOnContentClick = !1, n.st.closeOnBgClick = !1, n.st.showCloseBtn = !1, n.st.enableEscapeKey = !1), n.bgOverlay || (n.bgOverlay = x("bg").on("click" + j, function () {
                n.close()
            }), n.wrap = x("wrap").attr("tabindex", -1).on("click" + j, function (a) {
                n._checkIfClose(a.target) && n.close()
            }), n.container = x("container", n.wrap)), n.contentContainer = x("content"), n.st.preloader && (n.preloader = x("preloader", n.container, n.st.tLoading));
            var h = a.magnificPopup.modules;
            for (c = 0; c < h.length; c++) {
                var i = h[c];
                i = i.charAt(0).toUpperCase() + i.slice(1), n["init" + i].call(n)
            }
            y("BeforeOpen"), n.st.showCloseBtn && (n.st.closeBtnInside ? (w(f, function (a, b, c, d) {
                c.close_replaceWith = z(d.type)
            }), u += " mfp-close-btn-in") : n.wrap.append(z())), n.st.alignTop && (u += " mfp-align-top"), n.fixedContentPos ? n.wrap.css({
                overflow: n.st.overflowY,
                overflowX: "hidden",
                overflowY: n.st.overflowY
            }) : n.wrap.css({
                top: r.scrollTop(),
                position: "absolute"
            }), (!1 === n.st.fixedBgPos || "auto" === n.st.fixedBgPos && !n.fixedContentPos) && n.bgOverlay.css({
                height: s.height(),
                position: "absolute"
            }), n.st.enableEscapeKey && s.on("keyup" + j, function (a) {
                27 === a.keyCode && n.close()
            }), r.on("resize" + j, function () {
                n.updateSize()
            }), n.st.closeOnContentClick || (u += " mfp-auto-cursor"), u && n.wrap.addClass(u);
            var l = n.wH = r.height(), m = {};
            if (n.fixedContentPos && n._hasScrollBar(l)) {
                var o = n._getScrollbarSize();
                o && (m.marginRight = o)
            }
            n.fixedContentPos && (n.isIE7 ? a("body, html").css("overflow", "hidden") : m.overflow = "hidden");
            var p = n.st.mainClass;
            return n.isIE7 && (p += " mfp-ie7"), p && n._addClassToMFP(p), n.updateItemHTML(), y("BuildControls"), a("html").css(m), n.bgOverlay.add(n.wrap).prependTo(n.st.prependTo || a(document.body)), n._lastFocusedEl = document.activeElement, setTimeout(function () {
                n.content ? (n._addClassToMFP(k), n._setFocus()) : n.bgOverlay.addClass(k), s.on("focusin" + j, n._onFocusIn)
            }, 16), n.isOpen = !0, n.updateSize(l), y(g), b
        }, close: function () {
            n.isOpen && (y(c), n.isOpen = !1, n.st.removalDelay && !n.isLowIE && n.supportsTransition ? (n._addClassToMFP(l), setTimeout(function () {
                n._close()
            }, n.st.removalDelay)) : n._close())
        }, _close: function () {
            y(b);
            var c = l + " " + k + " ";
            if (n.bgOverlay.detach(), n.wrap.detach(), n.container.empty(), n.st.mainClass && (c += n.st.mainClass + " "), n._removeClassFromMFP(c), n.fixedContentPos) {
                var e = {marginRight: ""};
                n.isIE7 ? a("body, html").css("overflow", "") : e.overflow = "", a("html").css(e)
            }
            s.off("keyup" + j + " focusin" + j), n.ev.off(j), n.wrap.attr("class", "mfp-wrap").removeAttr("style"), n.bgOverlay.attr("class", "mfp-bg"), n.container.attr("class", "mfp-container"), !n.st.showCloseBtn || n.st.closeBtnInside && !0 !== n.currTemplate[n.currItem.type] || n.currTemplate.closeBtn && n.currTemplate.closeBtn.detach(), n.st.autoFocusLast && n._lastFocusedEl && a(n._lastFocusedEl).focus(), n.currItem = null, n.content = null, n.currTemplate = null, n.prevHeight = 0, y(d)
        }, updateSize: function (a) {
            if (n.isIOS) {
                var b = document.documentElement.clientWidth / window.innerWidth, c = window.innerHeight * b;
                n.wrap.css("height", c), n.wH = c
            } else n.wH = a || r.height();
            n.fixedContentPos || n.wrap.css("height", n.wH), y("Resize")
        }, updateItemHTML: function () {
            var b = n.items[n.index];
            n.contentContainer.detach(), n.content && n.content.detach(), b.parsed || (b = n.parseEl(n.index));
            var c = b.type;
            if (y("BeforeChange", [n.currItem ? n.currItem.type : "", c]), n.currItem = b, !n.currTemplate[c]) {
                var d = !!n.st[c] && n.st[c].markup;
                y("FirstMarkupParse", d), n.currTemplate[c] = !d || a(d)
            }
            t && t !== b.type && n.container.removeClass("mfp-" + t + "-holder");
            var e = n["get" + c.charAt(0).toUpperCase() + c.slice(1)](b, n.currTemplate[c]);
            n.appendContent(e, c), b.preloaded = !0, y(h, b), t = b.type, n.container.prepend(n.contentContainer), y("AfterChange")
        }, appendContent: function (a, b) {
            n.content = a, a ? n.st.showCloseBtn && n.st.closeBtnInside && !0 === n.currTemplate[b] ? n.content.find(".mfp-close").length || n.content.append(z()) : n.content = a : n.content = "", y(e), n.container.addClass("mfp-" + b + "-holder"), n.contentContainer.append(n.content)
        }, parseEl: function (b) {
            var d, c = n.items[b];
            if (c.tagName ? c = {el: a(c)} : (d = c.type, c = {data: c, src: c.src}), c.el) {
                for (var e = n.types, f = 0; f < e.length; f++)if (c.el.hasClass("mfp-" + e[f])) {
                    d = e[f];
                    break
                }
                c.src = c.el.attr("data-mfp-src"), c.src || (c.src = c.el.attr("href"))
            }
            return c.type = d || n.st.type || "inline", c.index = b, c.parsed = !0, n.items[b] = c, y("ElementParse", c), n.items[b]
        }, addGroup: function (a, b) {
            var c = function (c) {
                c.mfpEl = this, n._openClick(c, a, b)
            };
            b || (b = {});
            var d = "click.magnificPopup";
            b.mainEl = a, b.items ? (b.isObj = !0, a.off(d).on(d, c)) : (b.isObj = !1, b.delegate ? a.off(d).on(d, b.delegate, c) : (b.items = a, a.off(d).on(d, c)))
        }, _openClick: function (b, c, d) {
            if ((void 0 !== d.midClick ? d.midClick : a.magnificPopup.defaults.midClick) || !(2 === b.which || b.ctrlKey || b.metaKey || b.altKey || b.shiftKey)) {
                var f = void 0 !== d.disableOn ? d.disableOn : a.magnificPopup.defaults.disableOn;
                if (f)if (a.isFunction(f)) {
                    if (!f.call(n))return !0
                } else if (r.width() < f)return !0;
                b.type && (b.preventDefault(), n.isOpen && b.stopPropagation()), d.el = a(b.mfpEl), d.delegate && (d.items = c.find(d.delegate)), n.open(d)
            }
        }, updateStatus: function (a, b) {
            if (n.preloader) {
                q !== a && n.container.removeClass("mfp-s-" + q), b || "loading" !== a || (b = n.st.tLoading);
                var c = {status: a, text: b};
                y("UpdateStatus", c), a = c.status, b = c.text, n.preloader.html(b), n.preloader.find("a").on("click", function (a) {
                    a.stopImmediatePropagation()
                }), n.container.addClass("mfp-s-" + a), q = a
            }
        }, _checkIfClose: function (b) {
            if (!a(b).hasClass(m)) {
                var c = n.st.closeOnContentClick, d = n.st.closeOnBgClick;
                if (c && d)return !0;
                if (!n.content || a(b).hasClass("mfp-close") || n.preloader && b === n.preloader[0])return !0;
                if (b === n.content[0] || a.contains(n.content[0], b)) {
                    if (c)return !0
                } else if (d && a.contains(document, b))return !0;
                return !1
            }
        }, _addClassToMFP: function (a) {
            n.bgOverlay.addClass(a), n.wrap.addClass(a)
        }, _removeClassFromMFP: function (a) {
            this.bgOverlay.removeClass(a), n.wrap.removeClass(a)
        }, _hasScrollBar: function (a) {
            return (n.isIE7 ? s.height() : document.body.scrollHeight) > (a || r.height())
        }, _setFocus: function () {
            (n.st.focus ? n.content.find(n.st.focus).eq(0) : n.wrap).focus()
        }, _onFocusIn: function (b) {
            if (b.target !== n.wrap[0] && !a.contains(n.wrap[0], b.target))return n._setFocus(), !1
        }, _parseMarkup: function (b, c, d) {
            var e;
            d.data && (c = a.extend(d.data, c)), y(f, [b, c, d]), a.each(c, function (c, d) {
                if (void 0 === d || !1 === d)return !0;
                if (e = c.split("_"), e.length > 1) {
                    var f = b.find(j + "-" + e[0]);
                    if (f.length > 0) {
                        var g = e[1];
                        "replaceWith" === g ? f[0] !== d[0] && f.replaceWith(d) : "img" === g ? f.is("img") ? f.attr("src", d) : f.replaceWith(a("<img>").attr("src", d).attr("class", f.attr("class"))) : f.attr(e[1], d)
                    }
                } else b.find(j + "-" + c).html(d)
            })
        }, _getScrollbarSize: function () {
            if (void 0 === n.scrollbarSize) {
                var a = document.createElement("div");
                a.style.cssText = "width: 99px; height: 99px; overflow: scroll; position: absolute; top: -9999px;", document.body.appendChild(a), n.scrollbarSize = a.offsetWidth - a.clientWidth, document.body.removeChild(a)
            }
            return n.scrollbarSize
        }
    }, a.magnificPopup = {
        instance: null,
        proto: o.prototype,
        modules: [],
        open: function (b, c) {
            return A(), b = b ? a.extend(!0, {}, b) : {}, b.isObj = !0, b.index = c || 0, this.instance.open(b)
        },
        close: function () {
            return a.magnificPopup.instance && a.magnificPopup.instance.close()
        },
        registerModule: function (b, c) {
            c.options && (a.magnificPopup.defaults[b] = c.options), a.extend(this.proto, c.proto), this.modules.push(b)
        },
        defaults: {
            disableOn: 0,
            key: null,
            midClick: !1,
            mainClass: "",
            preloader: !0,
            focus: "",
            closeOnContentClick: !1,
            closeOnBgClick: !0,
            closeBtnInside: !0,
            showCloseBtn: !0,
            enableEscapeKey: !0,
            modal: !1,
            alignTop: !1,
            removalDelay: 0,
            prependTo: null,
            fixedContentPos: "auto",
            fixedBgPos: "auto",
            overflowY: "auto",
            closeMarkup: '<button title="%title%" type="button" class="mfp-close">&#215;</button>',
            tClose: "Close (Esc)",
            tLoading: "Loading...",
            autoFocusLast: !0
        }
    }, a.fn.magnificPopup = function (b) {
        A();
        var c = a(this);
        if ("string" == typeof b)if ("open" === b) {
            var d, e = p ? c.data("magnificPopup") : c[0].magnificPopup, f = parseInt(arguments[1], 10) || 0;
            e.items ? d = e.items[f] : (d = c, e.delegate && (d = d.find(e.delegate)), d = d.eq(f)), n._openClick({mfpEl: d}, c, e)
        } else n.isOpen && n[b].apply(n, Array.prototype.slice.call(arguments, 1)); else b = a.extend(!0, {}, b), p ? c.data("magnificPopup", b) : c[0].magnificPopup = b, n.addGroup(c, b);
        return c
    };
    var D, E, F, C = "inline", G = function () {
        F && (E.after(F.addClass(D)).detach(), F = null)
    };
    a.magnificPopup.registerModule(C, {
        options: {hiddenClass: "hide", markup: "", tNotFound: "Content not found"},
        proto: {
            initInline: function () {
                n.types.push(C), w(b + "." + C, function () {
                    G()
                })
            }, getInline: function (b, c) {
                if (G(), b.src) {
                    var d = n.st.inline, e = a(b.src);
                    if (e.length) {
                        var f = e[0].parentNode;
                        f && f.tagName && (E || (D = d.hiddenClass, E = x(D), D = "mfp-" + D), F = e.after(E).detach().removeClass(D)), n.updateStatus("ready")
                    } else n.updateStatus("error", d.tNotFound), e = a("<div>");
                    return b.inlineElement = e, e
                }
                return n.updateStatus("ready"), n._parseMarkup(c, {}, b), c
            }
        }
    });
    var I, H = "ajax", J = function () {
        I && a(document.body).removeClass(I)
    }, K = function () {
        J(), n.req && n.req.abort()
    };
    a.magnificPopup.registerModule(H, {
        options: {
            settings: null,
            cursor: "mfp-ajax-cur",
            tError: '<a href="%url%">The content</a> could not be loaded.'
        }, proto: {
            initAjax: function () {
                n.types.push(H), I = n.st.ajax.cursor, w(b + "." + H, K), w("BeforeChange." + H, K)
            }, getAjax: function (b) {
                I && a(document.body).addClass(I), n.updateStatus("loading");
                var c = a.extend({
                    url: b.src, success: function (c, d, e) {
                        var f = {data: c, xhr: e};
                        y("ParseAjax", f), n.appendContent(a(f.data), H), b.finished = !0, J(), n._setFocus(), setTimeout(function () {
                            n.wrap.addClass(k)
                        }, 16), n.updateStatus("ready"), y("AjaxContentAdded")
                    }, error: function () {
                        J(), b.finished = b.loadError = !0, n.updateStatus("error", n.st.ajax.tError.replace("%url%", b.src))
                    }
                }, n.st.ajax.settings);
                return n.req = a.ajax(c), ""
            }
        }
    });
    var L, M = function (b) {
        if (b.data && void 0 !== b.data.title)return b.data.title;
        var c = n.st.image.titleSrc;
        if (c) {
            if (a.isFunction(c))return c.call(n, b);
            if (b.el)return b.el.attr(c) || ""
        }
        return ""
    };
    a.magnificPopup.registerModule("image", {
        options: {
            markup: '<div class="mfp-figure"><div class="mfp-close"></div><figure><div class="mfp-img"></div><figcaption><div class="mfp-bottom-bar"><div class="mfp-title"></div><div class="mfp-counter"></div></div></figcaption></figure></div>',
            cursor: "mfp-zoom-out-cur",
            titleSrc: "title",
            verticalFit: !0,
            tError: '<a href="%url%">The image</a> could not be loaded.'
        }, proto: {
            initImage: function () {
                var c = n.st.image, d = ".image";
                n.types.push("image"), w(g + d, function () {
                    "image" === n.currItem.type && c.cursor && a(document.body).addClass(c.cursor)
                }), w(b + d, function () {
                    c.cursor && a(document.body).removeClass(c.cursor), r.off("resize" + j)
                }), w("Resize" + d, n.resizeImage), n.isLowIE && w("AfterChange", n.resizeImage)
            }, resizeImage: function () {
                var a = n.currItem;
                if (a && a.img && n.st.image.verticalFit) {
                    var b = 0;
                    n.isLowIE && (b = parseInt(a.img.css("padding-top"), 10) + parseInt(a.img.css("padding-bottom"), 10)), a.img.css("max-height", n.wH - b)
                }
            }, _onImageHasSize: function (a) {
                a.img && (a.hasSize = !0, L && clearInterval(L), a.isCheckingImgSize = !1, y("ImageHasSize", a), a.imgHidden && (n.content && n.content.removeClass("mfp-loading"), a.imgHidden = !1))
            }, findImageSize: function (a) {
                var b = 0, c = a.img[0], d = function (e) {
                    L && clearInterval(L), L = setInterval(function () {
                        if (c.naturalWidth > 0)return void n._onImageHasSize(a);
                        b > 200 && clearInterval(L), b++, 3 === b ? d(10) : 40 === b ? d(50) : 100 === b && d(500)
                    }, e)
                };
                d(1)
            }, getImage: function (b, c) {
                var d = 0, e = function () {
                    b && (b.img[0].complete ? (b.img.off(".mfploader"), b === n.currItem && (n._onImageHasSize(b), n.updateStatus("ready")), b.hasSize = !0, b.loaded = !0, y("ImageLoadComplete")) : (d++, d < 200 ? setTimeout(e, 100) : f()))
                }, f = function () {
                    b && (b.img.off(".mfploader"), b === n.currItem && (n._onImageHasSize(b), n.updateStatus("error", g.tError.replace("%url%", b.src))), b.hasSize = !0, b.loaded = !0, b.loadError = !0)
                }, g = n.st.image, h = c.find(".mfp-img");
                if (h.length) {
                    var i = document.createElement("img");
                    i.className = "mfp-img", b.el && b.el.find("img").length && (i.alt = b.el.find("img").attr("alt")), b.img = a(i).on("load.mfploader", e).on("error.mfploader", f), i.src = b.src, h.is("img") && (b.img = b.img.clone()), i = b.img[0], i.naturalWidth > 0 ? b.hasSize = !0 : i.width || (b.hasSize = !1)
                }
                return n._parseMarkup(c, {
                    title: M(b),
                    img_replaceWith: b.img
                }, b), n.resizeImage(), b.hasSize ? (L && clearInterval(L), b.loadError ? (c.addClass("mfp-loading"), n.updateStatus("error", g.tError.replace("%url%", b.src))) : (c.removeClass("mfp-loading"), n.updateStatus("ready")), c) : (n.updateStatus("loading"), b.loading = !0, b.hasSize || (b.imgHidden = !0, c.addClass("mfp-loading"), n.findImageSize(b)), c)
            }
        }
    });
    var N, O = function () {
        return void 0 === N && (N = void 0 !== document.createElement("p").style.MozTransform), N
    };
    a.magnificPopup.registerModule("zoom", {
        options: {
            enabled: !1,
            easing: "ease-in-out",
            duration: 300,
            opener: function (a) {
                return a.is("img") ? a : a.find("img")
            }
        }, proto: {
            initZoom: function () {
                var e, a = n.st.zoom, d = ".zoom";
                if (a.enabled && n.supportsTransition) {
                    var i, j, f = a.duration, g = function (b) {
                        var c = b.clone().removeAttr("style").removeAttr("class").addClass("mfp-animated-image"),
                            d = "all " + a.duration / 1e3 + "s " + a.easing, e = {
                                position: "fixed",
                                zIndex: 9999,
                                left: 0,
                                top: 0,
                                "-webkit-backface-visibility": "hidden"
                            }, f = "transition";
                        return e["-webkit-" + f] = e["-moz-" + f] = e["-o-" + f] = e[f] = d, c.css(e), c
                    }, h = function () {
                        n.content.css("visibility", "visible")
                    };
                    w("BuildControls" + d, function () {
                        if (n._allowZoom()) {
                            if (clearTimeout(i), n.content.css("visibility", "hidden"), !(e = n._getItemToZoom()))return void h();
                            j = g(e), j.css(n._getOffset()), n.wrap.append(j), i = setTimeout(function () {
                                j.css(n._getOffset(!0)), i = setTimeout(function () {
                                    h(), setTimeout(function () {
                                        j.remove(), e = j = null, y("ZoomAnimationEnded")
                                    }, 16)
                                }, f)
                            }, 16)
                        }
                    }), w(c + d, function () {
                        if (n._allowZoom()) {
                            if (clearTimeout(i), n.st.removalDelay = f, !e) {
                                if (!(e = n._getItemToZoom()))return;
                                j = g(e)
                            }
                            j.css(n._getOffset(!0)), n.wrap.append(j), n.content.css("visibility", "hidden"), setTimeout(function () {
                                j.css(n._getOffset())
                            }, 16)
                        }
                    }), w(b + d, function () {
                        n._allowZoom() && (h(), j && j.remove(), e = null)
                    })
                }
            }, _allowZoom: function () {
                return "image" === n.currItem.type
            }, _getItemToZoom: function () {
                return !!n.currItem.hasSize && n.currItem.img
            }, _getOffset: function (b) {
                var c;
                c = b ? n.currItem.img : n.st.zoom.opener(n.currItem.el || n.currItem);
                var d = c.offset(), e = parseInt(c.css("padding-top"), 10), f = parseInt(c.css("padding-bottom"), 10);
                d.top -= a(window).scrollTop() - e;
                var g = {width: c.width(), height: (p ? c.innerHeight() : c[0].offsetHeight) - f - e};
                return O() ? g["-moz-transform"] = g.transform = "translate(" + d.left + "px," + d.top + "px)" : (g.left = d.left, g.top = d.top), g
            }
        }
    });
    var P = "iframe", Q = "//about:blank", R = function (a) {
        if (n.currTemplate[P]) {
            var b = n.currTemplate[P].find("iframe");
            b.length && (a || (b[0].src = Q), n.isIE8 && b.css("display", a ? "block" : "none"))
        }
    };
    a.magnificPopup.registerModule(P, {
        options: {
            markup: '<div class="mfp-iframe-scaler"><div class="mfp-close"></div><iframe class="mfp-iframe" src="//about:blank" frameborder="0" allowfullscreen></iframe></div>',
            srcAction: "iframe_src",
            patterns: {
                youtube: {index: "youtube.com", id: "v=", src: "//www.youtube.com/embed/%id%?autoplay=1"},
                vimeo: {index: "vimeo.com/", id: "/", src: "//player.vimeo.com/video/%id%?autoplay=1"},
                gmaps: {index: "//maps.google.", src: "%id%&output=embed"}
            }
        }, proto: {
            initIframe: function () {
                n.types.push(P), w("BeforeChange", function (a, b, c) {
                    b !== c && (b === P ? R() : c === P && R(!0))
                }), w(b + "." + P, function () {
                    R()
                })
            }, getIframe: function (b, c) {
                var d = b.src, e = n.st.iframe;
                a.each(e.patterns, function () {
                    if (d.indexOf(this.index) > -1)return this.id && (d = "string" == typeof this.id ? d.substr(d.lastIndexOf(this.id) + this.id.length, d.length) : this.id.call(this, d)), d = this.src.replace("%id%", d), !1
                });
                var f = {};
                return e.srcAction && (f[e.srcAction] = d), n._parseMarkup(c, f, b), n.updateStatus("ready"), c
            }
        }
    });
    var S = function (a) {
        var b = n.items.length;
        return a > b - 1 ? a - b : a < 0 ? b + a : a
    }, T = function (a, b, c) {
        return a.replace(/%curr%/gi, b + 1).replace(/%total%/gi, c)
    };
    a.magnificPopup.registerModule("gallery", {
        options: {
            enabled: !1,
            arrowMarkup: '<button title="%title%" type="button" class="mfp-arrow mfp-arrow-%dir%"></button>',
            preload: [0, 2],
            navigateByImgClick: !0,
            arrows: !0,
            tPrev: "Previous (Left arrow key)",
            tNext: "Next (Right arrow key)",
            tCounter: "%curr% of %total%"
        }, proto: {
            initGallery: function () {
                var c = n.st.gallery, d = ".mfp-gallery";
                if (n.direction = !0, !c || !c.enabled)return !1;
                u += " mfp-gallery", w(g + d, function () {
                    c.navigateByImgClick && n.wrap.on("click" + d, ".mfp-img", function () {
                        if (n.items.length > 1)return n.next(), !1
                    }), s.on("keydown" + d, function (a) {
                        37 === a.keyCode ? n.prev() : 39 === a.keyCode && n.next()
                    })
                }), w("UpdateStatus" + d, function (a, b) {
                    b.text && (b.text = T(b.text, n.currItem.index, n.items.length))
                }), w(f + d, function (a, b, d, e) {
                    var f = n.items.length;
                    d.counter = f > 1 ? T(c.tCounter, e.index, f) : ""
                }), w("BuildControls" + d, function () {
                    if (n.items.length > 1 && c.arrows && !n.arrowLeft) {
                        var b = c.arrowMarkup,
                            d = n.arrowLeft = a(b.replace(/%title%/gi, c.tPrev).replace(/%dir%/gi, "left")).addClass(m),
                            e = n.arrowRight = a(b.replace(/%title%/gi, c.tNext).replace(/%dir%/gi, "right")).addClass(m);
                        d.click(function () {
                            n.prev()
                        }), e.click(function () {
                            n.next()
                        }), n.container.append(d.add(e))
                    }
                }), w(h + d, function () {
                    n._preloadTimeout && clearTimeout(n._preloadTimeout), n._preloadTimeout = setTimeout(function () {
                        n.preloadNearbyImages(), n._preloadTimeout = null
                    }, 16)
                }), w(b + d, function () {
                    s.off(d), n.wrap.off("click" + d), n.arrowRight = n.arrowLeft = null
                })
            }, next: function () {
                n.direction = !0, n.index = S(n.index + 1), n.updateItemHTML()
            }, prev: function () {
                n.direction = !1, n.index = S(n.index - 1), n.updateItemHTML()
            }, goTo: function (a) {
                n.direction = a >= n.index, n.index = a, n.updateItemHTML()
            }, preloadNearbyImages: function () {
                var d, a = n.st.gallery.preload, b = Math.min(a[0], n.items.length), c = Math.min(a[1], n.items.length);
                for (d = 1; d <= (n.direction ? c : b); d++)n._preloadItem(n.index + d);
                for (d = 1; d <= (n.direction ? b : c); d++)n._preloadItem(n.index - d)
            }, _preloadItem: function (b) {
                if (b = S(b), !n.items[b].preloaded) {
                    var c = n.items[b];
                    c.parsed || (c = n.parseEl(b)), y("LazyLoad", c), "image" === c.type && (c.img = a('<img class="mfp-img" />').on("load.mfploader", function () {
                        c.hasSize = !0
                    }).on("error.mfploader", function () {
                        c.hasSize = !0, c.loadError = !0, y("LazyLoadError", c)
                    }).attr("src", c.src)), c.preloaded = !0
                }
            }
        }
    });
    var U = "retina";
    a.magnificPopup.registerModule(U, {
        options: {
            replaceSrc: function (a) {
                return a.src.replace(/\.\w+$/, function (a) {
                    return "@2x" + a
                })
            }, ratio: 1
        }, proto: {
            initRetina: function () {
                if (window.devicePixelRatio > 1) {
                    var a = n.st.retina, b = a.ratio;
                    b = isNaN(b) ? b() : b, b > 1 && (w("ImageHasSize." + U, function (a, c) {
                        c.img.css({"max-width": c.img[0].naturalWidth / b, width: "100%"})
                    }), w("ElementParse." + U, function (c, d) {
                        d.src = a.replaceSrc(d, b)
                    }))
                }
            }
        }
    }), A()
}), function () {
    var a, b, c, d, e, f = function (a, b) {
        return function () {
            return a.apply(b, arguments)
        }
    }, g = [].indexOf || function (a) {
            for (var b = 0, c = this.length; b < c; b++)if (b in this && this[b] === a)return b;
            return -1
        };
    b = function () {
        function a() {
        }

        return a.prototype.extend = function (a, b) {
            var c, d;
            for (c in b)d = b[c], null == a[c] && (a[c] = d);
            return a
        }, a.prototype.isMobile = function (a) {
            return /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(a)
        }, a.prototype.createEvent = function (a, b, c, d) {
            var e;
            return null == b && (b = !1), null == c && (c = !1), null == d && (d = null), null != document.createEvent ? (e = document.createEvent("CustomEvent"), e.initCustomEvent(a, b, c, d)) : null != document.createEventObject ? (e = document.createEventObject(), e.eventType = a) : e.eventName = a, e
        }, a.prototype.emitEvent = function (a, b) {
            return null != a.dispatchEvent ? a.dispatchEvent(b) : b in (null != a) ? a[b]() : "on" + b in (null != a) ? a["on" + b]() : void 0
        }, a.prototype.addEvent = function (a, b, c) {
            return null != a.addEventListener ? a.addEventListener(b, c, !1) : null != a.attachEvent ? a.attachEvent("on" + b, c) : a[b] = c
        }, a.prototype.removeEvent = function (a, b, c) {
            return null != a.removeEventListener ? a.removeEventListener(b, c, !1) : null != a.detachEvent ? a.detachEvent("on" + b, c) : delete a[b]
        }, a.prototype.innerHeight = function () {
            return "innerHeight" in window ? window.innerHeight : document.documentElement.clientHeight
        }, a
    }(), c = this.WeakMap || this.MozWeakMap || (c = function () {
            function a() {
                this.keys = [], this.values = []
            }

            return a.prototype.get = function (a) {
                var b, d, e, f;
                for (f = this.keys, b = d = 0, e = f.length; d < e; b = ++d)if (f[b] === a)return this.values[b]
            }, a.prototype.set = function (a, b) {
                var c, e, f, g;
                for (g = this.keys, c = e = 0, f = g.length; e < f; c = ++e)if (g[c] === a)return void(this.values[c] = b);
                return this.keys.push(a), this.values.push(b)
            }, a
        }()), a = this.MutationObserver || this.WebkitMutationObserver || this.MozMutationObserver || (a = function () {
            function a() {
                "undefined" != typeof console && null !== console && console.warn("MutationObserver is not supported by your browser."), "undefined" != typeof console && null !== console && console.warn("WOW.js cannot detect dom mutations, please call .sync() after loading new content.")
            }

            return a.notSupported = !0, a.prototype.observe = function () {
            }, a
        }()), d = this.getComputedStyle || function (a, b) {
            return this.getPropertyValue = function (b) {
                var c;
                return "float" === b && (b = "styleFloat"), e.test(b) && b.replace(e, function (a, b) {
                    return b.toUpperCase()
                }), (null != (c = a.currentStyle) ? c[b] : void 0) || null
            }, this
        }, e = /(\-([a-z]){1})/g, this.WOW = function () {
        function e(a) {
            null == a && (a = {}), this.scrollCallback = f(this.scrollCallback, this), this.scrollHandler = f(this.scrollHandler, this), this.resetAnimation = f(this.resetAnimation, this), this.start = f(this.start, this), this.scrolled = !0, this.config = this.util().extend(a, this.defaults), null != a.scrollContainer && (this.config.scrollContainer = document.querySelector(a.scrollContainer)), this.animationNameCache = new c, this.wowEvent = this.util().createEvent(this.config.boxClass)
        }

        return e.prototype.defaults = {
            boxClass: "wow",
            animateClass: "animated",
            offset: 0,
            mobile: !0,
            live: !0,
            callback: null,
            scrollContainer: null
        }, e.prototype.init = function () {
            var a;
            return this.element = window.document.documentElement, "interactive" === (a = document.readyState) || "complete" === a ? this.start() : this.util().addEvent(document, "DOMContentLoaded", this.start), this.finished = []
        }, e.prototype.start = function () {
            var b, c, d, e;
            if (this.stopped = !1, this.boxes = function () {
                    var a, c, d, e;
                    for (d = this.element.querySelectorAll("." + this.config.boxClass), e = [], a = 0, c = d.length; a < c; a++)b = d[a], e.push(b);
                    return e
                }.call(this), this.all = function () {
                    var a, c, d, e;
                    for (d = this.boxes, e = [], a = 0, c = d.length; a < c; a++)b = d[a], e.push(b);
                    return e
                }.call(this), this.boxes.length)if (this.disabled()) this.resetStyle(); else for (e = this.boxes, c = 0, d = e.length; c < d; c++)b = e[c], this.applyStyle(b, !0);
            if (this.disabled() || (this.util().addEvent(this.config.scrollContainer || window, "scroll", this.scrollHandler), this.util().addEvent(window, "resize", this.scrollHandler), this.interval = setInterval(this.scrollCallback, 50)), this.config.live)return new a(function (a) {
                return function (b) {
                    var c, d, e, f, g;
                    for (g = [], c = 0, d = b.length; c < d; c++)f = b[c], g.push(function () {
                        var a, b, c, d;
                        for (c = f.addedNodes || [], d = [], a = 0, b = c.length; a < b; a++)e = c[a], d.push(this.doSync(e));
                        return d
                    }.call(a));
                    return g
                }
            }(this)).observe(document.body, {childList: !0, subtree: !0})
        }, e.prototype.stop = function () {
            if (this.stopped = !0, this.util().removeEvent(this.config.scrollContainer || window, "scroll", this.scrollHandler), this.util().removeEvent(window, "resize", this.scrollHandler), null != this.interval)return clearInterval(this.interval)
        }, e.prototype.sync = function (b) {
            if (a.notSupported)return this.doSync(this.element)
        }, e.prototype.doSync = function (a) {
            var b, c, d, e, f;
            if (null == a && (a = this.element), 1 === a.nodeType) {
                for (a = a.parentNode || a, e = a.querySelectorAll("." + this.config.boxClass), f = [], c = 0, d = e.length; c < d; c++)b = e[c], g.call(this.all, b) < 0 ? (this.boxes.push(b), this.all.push(b), this.stopped || this.disabled() ? this.resetStyle() : this.applyStyle(b, !0), f.push(this.scrolled = !0)) : f.push(void 0);
                return f
            }
        }, e.prototype.show = function (a) {
            return this.applyStyle(a), a.className = a.className + " " + this.config.animateClass, null != this.config.callback && this.config.callback(a), this.util().emitEvent(a, this.wowEvent), this.util().addEvent(a, "animationend", this.resetAnimation), this.util().addEvent(a, "oanimationend", this.resetAnimation), this.util().addEvent(a, "webkitAnimationEnd", this.resetAnimation), this.util().addEvent(a, "MSAnimationEnd", this.resetAnimation), a
        }, e.prototype.applyStyle = function (a, b) {
            var c, d, e;
            return d = a.getAttribute("data-wow-duration"), c = a.getAttribute("data-wow-delay"), e = a.getAttribute("data-wow-iteration"), this.animate(function (f) {
                return function () {
                    return f.customStyle(a, b, d, c, e)
                }
            }(this))
        }, e.prototype.animate = function () {
            return "requestAnimationFrame" in window ? function (a) {
                return window.requestAnimationFrame(a)
            } : function (a) {
                return a()
            }
        }(), e.prototype.resetStyle = function () {
            var a, b, c, d, e;
            for (d = this.boxes, e = [], b = 0, c = d.length; b < c; b++)a = d[b], e.push(a.style.visibility = "visible");
            return e
        }, e.prototype.resetAnimation = function (a) {
            var b;
            if (a.type.toLowerCase().indexOf("animationend") >= 0)return b = a.target || a.srcElement, b.className = b.className.replace(this.config.animateClass, "").trim()
        }, e.prototype.customStyle = function (a, b, c, d, e) {
            return b && this.cacheAnimationName(a), a.style.visibility = b ? "hidden" : "visible", c && this.vendorSet(a.style, {animationDuration: c}), d && this.vendorSet(a.style, {animationDelay: d}), e && this.vendorSet(a.style, {animationIterationCount: e}), this.vendorSet(a.style, {animationName: b ? "none" : this.cachedAnimationName(a)}), a
        }, e.prototype.vendors = ["moz", "webkit"], e.prototype.vendorSet = function (a, b) {
            var c, d, e, f;
            d = [];
            for (c in b)e = b[c], a["" + c] = e, d.push(function () {
                var b, d, g, h;
                for (g = this.vendors, h = [], b = 0, d = g.length; b < d; b++)f = g[b], h.push(a["" + f + c.charAt(0).toUpperCase() + c.substr(1)] = e);
                return h
            }.call(this));
            return d
        }, e.prototype.vendorCSS = function (a, b) {
            var c, e, f, g, h, i;
            for (h = d(a), g = h.getPropertyCSSValue(b), f = this.vendors, c = 0, e = f.length; c < e; c++)i = f[c], g = g || h.getPropertyCSSValue("-" + i + "-" + b);
            return g
        }, e.prototype.animationName = function (a) {
            var b;
            try {
                b = this.vendorCSS(a, "animation-name").cssText
            } catch (c) {
                b = d(a).getPropertyValue("animation-name")
            }
            return "none" === b ? "" : b
        }, e.prototype.cacheAnimationName = function (a) {
            return this.animationNameCache.set(a, this.animationName(a))
        }, e.prototype.cachedAnimationName = function (a) {
            return this.animationNameCache.get(a)
        }, e.prototype.scrollHandler = function () {
            return this.scrolled = !0
        }, e.prototype.scrollCallback = function () {
            var a;
            if (this.scrolled && (this.scrolled = !1, this.boxes = function () {
                    var b, c, d, e;
                    for (d = this.boxes, e = [], b = 0, c = d.length; b < c; b++)(a = d[b]) && (this.isVisible(a) ? this.show(a) : e.push(a));
                    return e
                }.call(this), !this.boxes.length && !this.config.live))return this.stop()
        }, e.prototype.offsetTop = function (a) {
            for (var b; void 0 === a.offsetTop;)a = a.parentNode;
            for (b = a.offsetTop; a = a.offsetParent;)b += a.offsetTop;
            return b
        }, e.prototype.isVisible = function (a) {
            var b, c, d, e, f;
            return c = a.getAttribute("data-wow-offset") || this.config.offset, f = this.config.scrollContainer && this.config.scrollContainer.scrollTop || window.pageYOffset, e = f + Math.min(this.element.clientHeight, this.util().innerHeight()) - c, d = this.offsetTop(a), b = d + a.clientHeight, d <= e && b >= f
        }, e.prototype.util = function () {
            return null != this._util ? this._util : this._util = new b
        }, e.prototype.disabled = function () {
            return !this.config.mobile && this.util().isMobile(navigator.userAgent)
        }, e
    }()
}.call(this), function (a, b, c, d, e) {
    "use strict";
    var f = 0, g = function () {
        var e, b = d.userAgent, c = /msie\s\d+/i;
        return b.search(c) > 0 && (e = c.exec(b).toString(), (e = e.split(" ")[1]) < 9) && (a("html").addClass("lt-ie9"), !0)
    }();
    Function.prototype.bind || (Function.prototype.bind = function (b) {
        var c = this, d = [].slice;
        if ("function" != typeof c)throw new TypeError;
        var e = d.call(arguments, 1), f = function () {
            if (this instanceof f) {
                var a = function () {
                };
                a.prototype = c.prototype;
                var g = new a, h = c.apply(g, e.concat(d.call(arguments)));
                return Object(h) === h ? h : g
            }
            return c.apply(b, e.concat(d.call(arguments)))
        };
        return f
    }), Array.prototype.indexOf || (Array.prototype.indexOf = function (a, b) {
        var c;
        if (null == this)throw new TypeError('"this" is null or not defined');
        var d = Object(this), e = d.length >>> 0;
        if (0 === e)return -1;
        var f = +b || 0;
        if (Math.abs(f) === 1 / 0 && (f = 0), f >= e)return -1;
        for (c = Math.max(f >= 0 ? f : e - Math.abs(f), 0); c < e;) {
            if (c in d && d[c] === a)return c;
            c++
        }
        return -1
    });
    var l = function (d, e, f) {
        this.VERSION = "2.1.2", this.input = d, this.plugin_count = f, this.current_plugin = 0, this.calc_count = 0, this.update_tm = 0, this.old_from = 0, this.old_to = 0, this.old_min_interval = null, this.raf_id = null, this.dragging = !1, this.force_redraw = !1, this.no_diapason = !1, this.is_key = !1, this.is_update = !1, this.is_start = !0, this.is_finish = !1, this.is_active = !1, this.is_resize = !1, this.is_click = !1, this.$cache = {
            win: a(c),
            body: a(b.body),
            input: a(d),
            cont: null,
            rs: null,
            min: null,
            max: null,
            from: null,
            to: null,
            single: null,
            bar: null,
            line: null,
            s_single: null,
            s_from: null,
            s_to: null,
            shad_single: null,
            shad_from: null,
            shad_to: null,
            edge: null,
            grid: null,
            grid_labels: []
        }, this.coords = {
            x_gap: 0,
            x_pointer: 0,
            w_rs: 0,
            w_rs_old: 0,
            w_handle: 0,
            p_gap: 0,
            p_gap_left: 0,
            p_gap_right: 0,
            p_step: 0,
            p_pointer: 0,
            p_handle: 0,
            p_single_fake: 0,
            p_single_real: 0,
            p_from_fake: 0,
            p_from_real: 0,
            p_to_fake: 0,
            p_to_real: 0,
            p_bar_x: 0,
            p_bar_w: 0,
            grid_gap: 0,
            big_num: 0,
            big: [],
            big_w: [],
            big_p: [],
            big_x: []
        }, this.labels = {
            w_min: 0,
            w_max: 0,
            w_from: 0,
            w_to: 0,
            w_single: 0,
            p_min: 0,
            p_max: 0,
            p_from_fake: 0,
            p_from_left: 0,
            p_to_fake: 0,
            p_to_left: 0,
            p_single_fake: 0,
            p_single_left: 0
        };
        var i, j, k, g = this.$cache.input, h = g.prop("value");
        i = {
            type: "single",
            min: 10,
            max: 100,
            from: null,
            to: null,
            step: 1,
            min_interval: 0,
            max_interval: 0,
            drag_interval: !1,
            values: [],
            p_values: [],
            from_fixed: !1,
            from_min: null,
            from_max: null,
            from_shadow: !1,
            to_fixed: !1,
            to_min: null,
            to_max: null,
            to_shadow: !1,
            prettify_enabled: !0,
            prettify_separator: " ",
            prettify: null,
            force_edges: !1,
            keyboard: !1,
            keyboard_step: 5,
            grid: !1,
            grid_margin: !0,
            grid_num: 4,
            grid_snap: !1,
            hide_min_max: !1,
            hide_from_to: !1,
            prefix: "",
            postfix: "",
            max_postfix: "",
            decorate_both: !0,
            values_separator: " — ",
            input_values_separator: ";",
            disable: !1,
            onStart: null,
            onChange: null,
            onFinish: null,
            onUpdate: null
        }, j = {
            type: g.data("type"),
            min: g.data("min"),
            max: g.data("max"),
            from: g.data("from"),
            to: g.data("to"),
            step: g.data("step"),
            min_interval: g.data("minInterval"),
            max_interval: g.data("maxInterval"),
            drag_interval: g.data("dragInterval"),
            values: g.data("values"),
            from_fixed: g.data("fromFixed"),
            from_min: g.data("fromMin"),
            from_max: g.data("fromMax"),
            from_shadow: g.data("fromShadow"),
            to_fixed: g.data("toFixed"),
            to_min: g.data("toMin"),
            to_max: g.data("toMax"),
            to_shadow: g.data("toShadow"),
            prettify_enabled: g.data("prettifyEnabled"),
            prettify_separator: g.data("prettifySeparator"),
            force_edges: g.data("forceEdges"),
            keyboard: g.data("keyboard"),
            keyboard_step: g.data("keyboardStep"),
            grid: g.data("grid"),
            grid_margin: g.data("gridMargin"),
            grid_num: g.data("gridNum"),
            grid_snap: g.data("gridSnap"),
            hide_min_max: g.data("hideMinMax"),
            hide_from_to: g.data("hideFromTo"),
            prefix: g.data("prefix"),
            postfix: g.data("postfix"),
            max_postfix: g.data("maxPostfix"),
            decorate_both: g.data("decorateBoth"),
            values_separator: g.data("valuesSeparator"),
            input_values_separator: g.data("inputValuesSeparator"),
            disable: g.data("disable")
        }, j.values = j.values && j.values.split(",");
        for (k in j)j.hasOwnProperty(k) && (j[k] || 0 === j[k] || delete j[k]);
        h && (h = h.split(j.input_values_separator || e.input_values_separator || ";"), h[0] && h[0] == +h[0] && (h[0] = +h[0]), h[1] && h[1] == +h[1] && (h[1] = +h[1]), e && e.values && e.values.length ? (i.from = h[0] && e.values.indexOf(h[0]), i.to = h[1] && e.values.indexOf(h[1])) : (i.from = h[0] && +h[0], i.to = h[1] && +h[1])), a.extend(i, e), a.extend(i, j), this.options = i, this.validate(), this.result = {
            input: this.$cache.input,
            slider: null,
            min: this.options.min,
            max: this.options.max,
            from: this.options.from,
            from_percent: 0,
            from_value: null,
            to: this.options.to,
            to_percent: 0,
            to_value: null
        }, this.init()
    };
    l.prototype = {
        init: function (a) {
            this.no_diapason = !1, this.coords.p_step = this.convertToPercent(this.options.step, !0), this.target = "base", this.toggleInput(), this.append(), this.setMinMax(), a ? (this.force_redraw = !0, this.calc(!0), this.callOnUpdate()) : (this.force_redraw = !0, this.calc(!0), this.callOnStart()), this.updateScene()
        }, append: function () {
            var a = '<span class="irs js-irs-' + this.plugin_count + '"></span>';
            this.$cache.input.before(a), this.$cache.input.prop("readonly", !0), this.$cache.cont = this.$cache.input.prev(), this.result.slider = this.$cache.cont, this.$cache.cont.html('<span class="irs"><span class="irs-line" tabindex="-1"><span class="irs-line-left"></span><span class="irs-line-mid"></span><span class="irs-line-right"></span></span><span class="irs-min">0</span><span class="irs-max">1</span><span class="irs-from">0</span><span class="irs-to">0</span><span class="irs-single">0</span></span><span class="irs-grid"></span><span class="irs-bar"></span>'), this.$cache.rs = this.$cache.cont.find(".irs"), this.$cache.min = this.$cache.cont.find(".irs-min"), this.$cache.max = this.$cache.cont.find(".irs-max"), this.$cache.from = this.$cache.cont.find(".irs-from"), this.$cache.to = this.$cache.cont.find(".irs-to"), this.$cache.single = this.$cache.cont.find(".irs-single"), this.$cache.bar = this.$cache.cont.find(".irs-bar"), this.$cache.line = this.$cache.cont.find(".irs-line"), this.$cache.grid = this.$cache.cont.find(".irs-grid"), "single" === this.options.type ? (this.$cache.cont.append('<span class="irs-bar-edge"></span><span class="irs-shadow shadow-single"></span><span class="irs-slider single"></span>'), this.$cache.edge = this.$cache.cont.find(".irs-bar-edge"), this.$cache.s_single = this.$cache.cont.find(".single"), this.$cache.from[0].style.visibility = "hidden", this.$cache.to[0].style.visibility = "hidden", this.$cache.shad_single = this.$cache.cont.find(".shadow-single")) : (this.$cache.cont.append('<span class="irs-shadow shadow-from"></span><span class="irs-shadow shadow-to"></span><span class="irs-slider from"></span><span class="irs-slider to"></span>'), this.$cache.s_from = this.$cache.cont.find(".from"), this.$cache.s_to = this.$cache.cont.find(".to"), this.$cache.shad_from = this.$cache.cont.find(".shadow-from"), this.$cache.shad_to = this.$cache.cont.find(".shadow-to"), this.setTopHandler()), this.options.hide_from_to && (this.$cache.from[0].style.display = "none", this.$cache.to[0].style.display = "none", this.$cache.single[0].style.display = "none"), this.appendGrid(), this.options.disable ? (this.appendDisableMask(), this.$cache.input[0].disabled = !0) : (this.$cache.cont.removeClass("irs-disabled"), this.$cache.input[0].disabled = !1, this.bindEvents()), this.options.drag_interval && (this.$cache.bar[0].style.cursor = "ew-resize")
        }, setTopHandler: function () {
            var a = this.options.min, b = this.options.max, c = this.options.from, d = this.options.to;
            c > a && d === b ? this.$cache.s_from.addClass("type_last") : d < b && this.$cache.s_to.addClass("type_last")
        }, changeLevel: function (a) {
            switch (a) {
                case"single":
                    this.coords.p_gap = this.toFixed(this.coords.p_pointer - this.coords.p_single_fake);
                    break;
                case"from":
                    this.coords.p_gap = this.toFixed(this.coords.p_pointer - this.coords.p_from_fake), this.$cache.s_from.addClass("state_hover"), this.$cache.s_from.addClass("type_last"), this.$cache.s_to.removeClass("type_last");
                    break;
                case"to":
                    this.coords.p_gap = this.toFixed(this.coords.p_pointer - this.coords.p_to_fake), this.$cache.s_to.addClass("state_hover"), this.$cache.s_to.addClass("type_last"), this.$cache.s_from.removeClass("type_last");
                    break;
                case"both":
                    this.coords.p_gap_left = this.toFixed(this.coords.p_pointer - this.coords.p_from_fake), this.coords.p_gap_right = this.toFixed(this.coords.p_to_fake - this.coords.p_pointer), this.$cache.s_to.removeClass("type_last"), this.$cache.s_from.removeClass("type_last")
            }
        }, appendDisableMask: function () {
            this.$cache.cont.append('<span class="irs-disable-mask"></span>'), this.$cache.cont.addClass("irs-disabled")
        }, remove: function () {
            this.$cache.cont.remove(), this.$cache.cont = null, this.$cache.line.off("keydown.irs_" + this.plugin_count), this.$cache.body.off("touchmove.irs_" + this.plugin_count), this.$cache.body.off("mousemove.irs_" + this.plugin_count), this.$cache.win.off("touchend.irs_" + this.plugin_count), this.$cache.win.off("mouseup.irs_" + this.plugin_count), g && (this.$cache.body.off("mouseup.irs_" + this.plugin_count), this.$cache.body.off("mouseleave.irs_" + this.plugin_count)), this.$cache.grid_labels = [], this.coords.big = [], this.coords.big_w = [], this.coords.big_p = [], this.coords.big_x = [], cancelAnimationFrame(this.raf_id)
        }, bindEvents: function () {
            this.no_diapason || (this.$cache.body.on("touchmove.irs_" + this.plugin_count, this.pointerMove.bind(this)), this.$cache.body.on("mousemove.irs_" + this.plugin_count, this.pointerMove.bind(this)), this.$cache.win.on("touchend.irs_" + this.plugin_count, this.pointerUp.bind(this)), this.$cache.win.on("mouseup.irs_" + this.plugin_count, this.pointerUp.bind(this)), this.$cache.line.on("touchstart.irs_" + this.plugin_count, this.pointerClick.bind(this, "click")), this.$cache.line.on("mousedown.irs_" + this.plugin_count, this.pointerClick.bind(this, "click")), this.options.drag_interval && "double" === this.options.type ? (this.$cache.bar.on("touchstart.irs_" + this.plugin_count, this.pointerDown.bind(this, "both")), this.$cache.bar.on("mousedown.irs_" + this.plugin_count, this.pointerDown.bind(this, "both"))) : (this.$cache.bar.on("touchstart.irs_" + this.plugin_count, this.pointerClick.bind(this, "click")), this.$cache.bar.on("mousedown.irs_" + this.plugin_count, this.pointerClick.bind(this, "click"))), "single" === this.options.type ? (this.$cache.single.on("touchstart.irs_" + this.plugin_count, this.pointerDown.bind(this, "single")), this.$cache.s_single.on("touchstart.irs_" + this.plugin_count, this.pointerDown.bind(this, "single")), this.$cache.shad_single.on("touchstart.irs_" + this.plugin_count, this.pointerClick.bind(this, "click")), this.$cache.single.on("mousedown.irs_" + this.plugin_count, this.pointerDown.bind(this, "single")), this.$cache.s_single.on("mousedown.irs_" + this.plugin_count, this.pointerDown.bind(this, "single")), this.$cache.edge.on("mousedown.irs_" + this.plugin_count, this.pointerClick.bind(this, "click")), this.$cache.shad_single.on("mousedown.irs_" + this.plugin_count, this.pointerClick.bind(this, "click"))) : (this.$cache.single.on("touchstart.irs_" + this.plugin_count, this.pointerDown.bind(this, null)), this.$cache.single.on("mousedown.irs_" + this.plugin_count, this.pointerDown.bind(this, null)), this.$cache.from.on("touchstart.irs_" + this.plugin_count, this.pointerDown.bind(this, "from")), this.$cache.s_from.on("touchstart.irs_" + this.plugin_count, this.pointerDown.bind(this, "from")), this.$cache.to.on("touchstart.irs_" + this.plugin_count, this.pointerDown.bind(this, "to")), this.$cache.s_to.on("touchstart.irs_" + this.plugin_count, this.pointerDown.bind(this, "to")), this.$cache.shad_from.on("touchstart.irs_" + this.plugin_count, this.pointerClick.bind(this, "click")), this.$cache.shad_to.on("touchstart.irs_" + this.plugin_count, this.pointerClick.bind(this, "click")), this.$cache.from.on("mousedown.irs_" + this.plugin_count, this.pointerDown.bind(this, "from")), this.$cache.s_from.on("mousedown.irs_" + this.plugin_count, this.pointerDown.bind(this, "from")), this.$cache.to.on("mousedown.irs_" + this.plugin_count, this.pointerDown.bind(this, "to")), this.$cache.s_to.on("mousedown.irs_" + this.plugin_count, this.pointerDown.bind(this, "to")), this.$cache.shad_from.on("mousedown.irs_" + this.plugin_count, this.pointerClick.bind(this, "click")), this.$cache.shad_to.on("mousedown.irs_" + this.plugin_count, this.pointerClick.bind(this, "click"))), this.options.keyboard && this.$cache.line.on("keydown.irs_" + this.plugin_count, this.key.bind(this, "keyboard")), g && (this.$cache.body.on("mouseup.irs_" + this.plugin_count, this.pointerUp.bind(this)), this.$cache.body.on("mouseleave.irs_" + this.plugin_count, this.pointerUp.bind(this))))
        }, pointerMove: function (a) {
            if (this.dragging) {
                var b = a.pageX || a.originalEvent.touches && a.originalEvent.touches[0].pageX;
                this.coords.x_pointer = b - this.coords.x_gap, this.calc()
            }
        }, pointerUp: function (b) {
            this.current_plugin === this.plugin_count && this.is_active && (this.is_active = !1, this.$cache.cont.find(".state_hover").removeClass("state_hover"), this.force_redraw = !0, g && a("*").prop("unselectable", !1), this.updateScene(), this.restoreOriginalMinInterval(), (a.contains(this.$cache.cont[0], b.target) || this.dragging) && (this.is_finish = !0, this.callOnFinish()), this.dragging = !1)
        }, pointerDown: function (b, c) {
            c.preventDefault();
            var d = c.pageX || c.originalEvent.touches && c.originalEvent.touches[0].pageX;
            2 !== c.button && ("both" === b && this.setTempMinInterval(), b || (b = this.target), this.current_plugin = this.plugin_count, this.target = b, this.is_active = !0, this.dragging = !0, this.coords.x_gap = this.$cache.rs.offset().left, this.coords.x_pointer = d - this.coords.x_gap, this.calcPointerPercent(), this.changeLevel(b), g && a("*").prop("unselectable", !0), this.$cache.line.trigger("focus"), this.updateScene())
        }, pointerClick: function (a, b) {
            b.preventDefault();
            var c = b.pageX || b.originalEvent.touches && b.originalEvent.touches[0].pageX;
            2 !== b.button && (this.current_plugin = this.plugin_count, this.target = a, this.is_click = !0, this.coords.x_gap = this.$cache.rs.offset().left, this.coords.x_pointer = +(c - this.coords.x_gap).toFixed(), this.force_redraw = !0, this.calc(), this.$cache.line.trigger("focus"))
        }, key: function (a, b) {
            if (!(this.current_plugin !== this.plugin_count || b.altKey || b.ctrlKey || b.shiftKey || b.metaKey)) {
                switch (b.which) {
                    case 83:
                    case 65:
                    case 40:
                    case 37:
                        b.preventDefault(), this.moveByKey(!1);
                        break;
                    case 87:
                    case 68:
                    case 38:
                    case 39:
                        b.preventDefault(), this.moveByKey(!0)
                }
                return !0
            }
        }, moveByKey: function (a) {
            var b = this.coords.p_pointer;
            a ? b += this.options.keyboard_step : b -= this.options.keyboard_step, this.coords.x_pointer = this.toFixed(this.coords.w_rs / 100 * b), this.is_key = !0, this.calc()
        }, setMinMax: function () {
            if (this.options) {
                if (this.options.hide_min_max)return this.$cache.min[0].style.display = "none", void(this.$cache.max[0].style.display = "none");
                this.options.values.length ? (this.$cache.min.html(this.decorate(this.options.p_values[this.options.min])), this.$cache.max.html(this.decorate(this.options.p_values[this.options.max]))) : (this.$cache.min.html(this.decorate(this._prettify(this.options.min), this.options.min)), this.$cache.max.html(this.decorate(this._prettify(this.options.max), this.options.max))), this.labels.w_min = this.$cache.min.outerWidth(!1), this.labels.w_max = this.$cache.max.outerWidth(!1)
            }
        }, setTempMinInterval: function () {
            var a = this.result.to - this.result.from;
            null === this.old_min_interval && (this.old_min_interval = this.options.min_interval), this.options.min_interval = a
        }, restoreOriginalMinInterval: function () {
            null !== this.old_min_interval && (this.options.min_interval = this.old_min_interval, this.old_min_interval = null)
        }, calc: function (a) {
            if (this.options && (this.calc_count++, (10 === this.calc_count || a) && (this.calc_count = 0, this.coords.w_rs = this.$cache.rs.outerWidth(!1), this.calcHandlePercent()), this.coords.w_rs)) {
                this.calcPointerPercent();
                var b = this.getHandleX();
                switch ("click" === this.target && (this.coords.p_gap = this.coords.p_handle / 2, b = this.getHandleX(), this.options.drag_interval ? this.target = "both_one" : this.target = this.chooseHandle(b)), this.target) {
                    case"base":
                        var c = (this.options.max - this.options.min) / 100,
                            d = (this.result.from - this.options.min) / c, e = (this.result.to - this.options.min) / c;
                        this.coords.p_single_real = this.toFixed(d), this.coords.p_from_real = this.toFixed(d), this.coords.p_to_real = this.toFixed(e), this.coords.p_single_real = this.checkDiapason(this.coords.p_single_real, this.options.from_min, this.options.from_max), this.coords.p_from_real = this.checkDiapason(this.coords.p_from_real, this.options.from_min, this.options.from_max), this.coords.p_to_real = this.checkDiapason(this.coords.p_to_real, this.options.to_min, this.options.to_max), this.coords.p_single_fake = this.convertToFakePercent(this.coords.p_single_real), this.coords.p_from_fake = this.convertToFakePercent(this.coords.p_from_real), this.coords.p_to_fake = this.convertToFakePercent(this.coords.p_to_real), this.target = null;
                        break;
                    case"single":
                        if (this.options.from_fixed)break;
                        this.coords.p_single_real = this.convertToRealPercent(b), this.coords.p_single_real = this.calcWithStep(this.coords.p_single_real), this.coords.p_single_real = this.checkDiapason(this.coords.p_single_real, this.options.from_min, this.options.from_max), this.coords.p_single_fake = this.convertToFakePercent(this.coords.p_single_real);
                        break;
                    case"from":
                        if (this.options.from_fixed)break;
                        this.coords.p_from_real = this.convertToRealPercent(b), this.coords.p_from_real = this.calcWithStep(this.coords.p_from_real), this.coords.p_from_real > this.coords.p_to_real && (this.coords.p_from_real = this.coords.p_to_real), this.coords.p_from_real = this.checkDiapason(this.coords.p_from_real, this.options.from_min, this.options.from_max), this.coords.p_from_real = this.checkMinInterval(this.coords.p_from_real, this.coords.p_to_real, "from"), this.coords.p_from_real = this.checkMaxInterval(this.coords.p_from_real, this.coords.p_to_real, "from"), this.coords.p_from_fake = this.convertToFakePercent(this.coords.p_from_real);
                        break;
                    case"to":
                        if (this.options.to_fixed)break;
                        this.coords.p_to_real = this.convertToRealPercent(b), this.coords.p_to_real = this.calcWithStep(this.coords.p_to_real), this.coords.p_to_real < this.coords.p_from_real && (this.coords.p_to_real = this.coords.p_from_real), this.coords.p_to_real = this.checkDiapason(this.coords.p_to_real, this.options.to_min, this.options.to_max), this.coords.p_to_real = this.checkMinInterval(this.coords.p_to_real, this.coords.p_from_real, "to"), this.coords.p_to_real = this.checkMaxInterval(this.coords.p_to_real, this.coords.p_from_real, "to"), this.coords.p_to_fake = this.convertToFakePercent(this.coords.p_to_real);
                        break;
                    case"both":
                        if (this.options.from_fixed || this.options.to_fixed)break;
                        b = this.toFixed(b + .1 * this.coords.p_handle), this.coords.p_from_real = this.convertToRealPercent(b) - this.coords.p_gap_left, this.coords.p_from_real = this.calcWithStep(this.coords.p_from_real), this.coords.p_from_real = this.checkDiapason(this.coords.p_from_real, this.options.from_min, this.options.from_max), this.coords.p_from_real = this.checkMinInterval(this.coords.p_from_real, this.coords.p_to_real, "from"), this.coords.p_from_fake = this.convertToFakePercent(this.coords.p_from_real), this.coords.p_to_real = this.convertToRealPercent(b) + this.coords.p_gap_right, this.coords.p_to_real = this.calcWithStep(this.coords.p_to_real), this.coords.p_to_real = this.checkDiapason(this.coords.p_to_real, this.options.to_min, this.options.to_max), this.coords.p_to_real = this.checkMinInterval(this.coords.p_to_real, this.coords.p_from_real, "to"), this.coords.p_to_fake = this.convertToFakePercent(this.coords.p_to_real);
                        break;
                    case"both_one":
                        if (this.options.from_fixed || this.options.to_fixed)break;
                        var f = this.convertToRealPercent(b), g = this.result.from_percent, h = this.result.to_percent,
                            i = h - g, j = i / 2, k = f - j, l = f + j;
                        k < 0 && (k = 0, l = k + i), l > 100 && (l = 100, k = l - i), this.coords.p_from_real = this.calcWithStep(k), this.coords.p_from_real = this.checkDiapason(this.coords.p_from_real, this.options.from_min, this.options.from_max), this.coords.p_from_fake = this.convertToFakePercent(this.coords.p_from_real), this.coords.p_to_real = this.calcWithStep(l), this.coords.p_to_real = this.checkDiapason(this.coords.p_to_real, this.options.to_min, this.options.to_max), this.coords.p_to_fake = this.convertToFakePercent(this.coords.p_to_real)
                }
                "single" === this.options.type ? (this.coords.p_bar_x = this.coords.p_handle / 2, this.coords.p_bar_w = this.coords.p_single_fake, this.result.from_percent = this.coords.p_single_real, this.result.from = this.convertToValue(this.coords.p_single_real), this.options.values.length && (this.result.from_value = this.options.values[this.result.from])) : (this.coords.p_bar_x = this.toFixed(this.coords.p_from_fake + this.coords.p_handle / 2), this.coords.p_bar_w = this.toFixed(this.coords.p_to_fake - this.coords.p_from_fake), this.result.from_percent = this.coords.p_from_real, this.result.from = this.convertToValue(this.coords.p_from_real), this.result.to_percent = this.coords.p_to_real, this.result.to = this.convertToValue(this.coords.p_to_real), this.options.values.length && (this.result.from_value = this.options.values[this.result.from], this.result.to_value = this.options.values[this.result.to])), this.calcMinMax(), this.calcLabels()
            }
        }, calcPointerPercent: function () {
            if (!this.coords.w_rs)return void(this.coords.p_pointer = 0);
            this.coords.x_pointer < 0 || isNaN(this.coords.x_pointer) ? this.coords.x_pointer = 0 : this.coords.x_pointer > this.coords.w_rs && (this.coords.x_pointer = this.coords.w_rs), this.coords.p_pointer = this.toFixed(this.coords.x_pointer / this.coords.w_rs * 100)
        }, convertToRealPercent: function (a) {
            return a / (100 - this.coords.p_handle) * 100
        }, convertToFakePercent: function (a) {
            return a / 100 * (100 - this.coords.p_handle)
        }, getHandleX: function () {
            var a = 100 - this.coords.p_handle, b = this.toFixed(this.coords.p_pointer - this.coords.p_gap);
            return b < 0 ? b = 0 : b > a && (b = a), b
        }, calcHandlePercent: function () {
            "single" === this.options.type ? this.coords.w_handle = this.$cache.s_single.outerWidth(!1) : this.coords.w_handle = this.$cache.s_from.outerWidth(!1), this.coords.p_handle = this.toFixed(this.coords.w_handle / this.coords.w_rs * 100)
        }, chooseHandle: function (a) {
            return "single" === this.options.type ? "single" : a >= this.coords.p_from_real + (this.coords.p_to_real - this.coords.p_from_real) / 2 ? this.options.to_fixed ? "from" : "to" : this.options.from_fixed ? "to" : "from"
        }, calcMinMax: function () {
            this.coords.w_rs && (this.labels.p_min = this.labels.w_min / this.coords.w_rs * 100, this.labels.p_max = this.labels.w_max / this.coords.w_rs * 100)
        }, calcLabels: function () {
            this.coords.w_rs && !this.options.hide_from_to && ("single" === this.options.type ? (this.labels.w_single = this.$cache.single.outerWidth(!1), this.labels.p_single_fake = this.labels.w_single / this.coords.w_rs * 100, this.labels.p_single_left = this.coords.p_single_fake + this.coords.p_handle / 2 - this.labels.p_single_fake / 2, this.labels.p_single_left = this.checkEdges(this.labels.p_single_left, this.labels.p_single_fake)) : (this.labels.w_from = this.$cache.from.outerWidth(!1), this.labels.p_from_fake = this.labels.w_from / this.coords.w_rs * 100, this.labels.p_from_left = this.coords.p_from_fake + this.coords.p_handle / 2 - this.labels.p_from_fake / 2, this.labels.p_from_left = this.toFixed(this.labels.p_from_left), this.labels.p_from_left = this.checkEdges(this.labels.p_from_left, this.labels.p_from_fake), this.labels.w_to = this.$cache.to.outerWidth(!1), this.labels.p_to_fake = this.labels.w_to / this.coords.w_rs * 100, this.labels.p_to_left = this.coords.p_to_fake + this.coords.p_handle / 2 - this.labels.p_to_fake / 2, this.labels.p_to_left = this.toFixed(this.labels.p_to_left), this.labels.p_to_left = this.checkEdges(this.labels.p_to_left, this.labels.p_to_fake), this.labels.w_single = this.$cache.single.outerWidth(!1), this.labels.p_single_fake = this.labels.w_single / this.coords.w_rs * 100, this.labels.p_single_left = (this.labels.p_from_left + this.labels.p_to_left + this.labels.p_to_fake) / 2 - this.labels.p_single_fake / 2, this.labels.p_single_left = this.toFixed(this.labels.p_single_left), this.labels.p_single_left = this.checkEdges(this.labels.p_single_left, this.labels.p_single_fake)))
        }, updateScene: function () {
            this.raf_id && (cancelAnimationFrame(this.raf_id), this.raf_id = null), clearTimeout(this.update_tm), this.update_tm = null, this.options && (this.drawHandles(), this.is_active ? this.raf_id = requestAnimationFrame(this.updateScene.bind(this)) : this.update_tm = setTimeout(this.updateScene.bind(this), 300))
        }, drawHandles: function () {
            this.coords.w_rs = this.$cache.rs.outerWidth(!1), this.coords.w_rs && (this.coords.w_rs !== this.coords.w_rs_old && (this.target = "base", this.is_resize = !0), (this.coords.w_rs !== this.coords.w_rs_old || this.force_redraw) && (this.setMinMax(), this.calc(!0), this.drawLabels(), this.options.grid && (this.calcGridMargin(), this.calcGridLabels()), this.force_redraw = !0, this.coords.w_rs_old = this.coords.w_rs, this.drawShadow()), this.coords.w_rs && (this.dragging || this.force_redraw || this.is_key) && ((this.old_from !== this.result.from || this.old_to !== this.result.to || this.force_redraw || this.is_key) && (this.drawLabels(), this.$cache.bar[0].style.left = this.coords.p_bar_x + "%", this.$cache.bar[0].style.width = this.coords.p_bar_w + "%", "single" === this.options.type ? (this.$cache.s_single[0].style.left = this.coords.p_single_fake + "%", this.$cache.single[0].style.left = this.labels.p_single_left + "%", this.options.values.length ? this.$cache.input.prop("value", this.result.from_value) : this.$cache.input.prop("value", this.result.from), this.$cache.input.data("from", this.result.from)) : (this.$cache.s_from[0].style.left = this.coords.p_from_fake + "%", this.$cache.s_to[0].style.left = this.coords.p_to_fake + "%", (this.old_from !== this.result.from || this.force_redraw) && (this.$cache.from[0].style.left = this.labels.p_from_left + "%"), (this.old_to !== this.result.to || this.force_redraw) && (this.$cache.to[0].style.left = this.labels.p_to_left + "%"), this.$cache.single[0].style.left = this.labels.p_single_left + "%", this.options.values.length ? this.$cache.input.prop("value", this.result.from_value + this.options.input_values_separator + this.result.to_value) : this.$cache.input.prop("value", this.result.from + this.options.input_values_separator + this.result.to), this.$cache.input.data("from", this.result.from), this.$cache.input.data("to", this.result.to)), this.old_from === this.result.from && this.old_to === this.result.to || this.is_start || this.$cache.input.trigger("change"), this.old_from = this.result.from, this.old_to = this.result.to, this.is_resize || this.is_update || this.is_start || this.is_finish || this.callOnChange(), (this.is_key || this.is_click) && (this.is_key = !1, this.is_click = !1, this.callOnFinish()), this.is_update = !1, this.is_resize = !1, this.is_finish = !1), this.is_start = !1, this.is_key = !1, this.is_click = !1, this.force_redraw = !1))
        }, drawLabels: function () {
            if (this.options) {
                var c, d, e, a = this.options.values.length, b = this.options.p_values;
                if (!this.options.hide_from_to)if ("single" === this.options.type) a ? (c = this.decorate(b[this.result.from]), this.$cache.single.html(c)) : (c = this.decorate(this._prettify(this.result.from), this.result.from), this.$cache.single.html(c)), this.calcLabels(), this.labels.p_single_left < this.labels.p_min + 1 ? this.$cache.min[0].style.visibility = "hidden" : this.$cache.min[0].style.visibility = "visible", this.labels.p_single_left + this.labels.p_single_fake > 100 - this.labels.p_max - 1 ? this.$cache.max[0].style.visibility = "hidden" : this.$cache.max[0].style.visibility = "visible"; else {
                    a ? (this.options.decorate_both ? (c = this.decorate(b[this.result.from]), c += this.options.values_separator, c += this.decorate(b[this.result.to])) : c = this.decorate(b[this.result.from] + this.options.values_separator + b[this.result.to]), d = this.decorate(b[this.result.from]), e = this.decorate(b[this.result.to]), this.$cache.single.html(c), this.$cache.from.html(d), this.$cache.to.html(e)) : (this.options.decorate_both ? (c = this.decorate(this._prettify(this.result.from), this.result.from), c += this.options.values_separator, c += this.decorate(this._prettify(this.result.to), this.result.to)) : c = this.decorate(this._prettify(this.result.from) + this.options.values_separator + this._prettify(this.result.to), this.result.to), d = this.decorate(this._prettify(this.result.from), this.result.from), e = this.decorate(this._prettify(this.result.to), this.result.to), this.$cache.single.html(c), this.$cache.from.html(d), this.$cache.to.html(e)), this.calcLabels();
                    var f = Math.min(this.labels.p_single_left, this.labels.p_from_left),
                        g = this.labels.p_single_left + this.labels.p_single_fake,
                        h = this.labels.p_to_left + this.labels.p_to_fake, i = Math.max(g, h);
                    this.labels.p_from_left + this.labels.p_from_fake >= this.labels.p_to_left ? (this.$cache.from[0].style.visibility = "hidden", this.$cache.to[0].style.visibility = "hidden", this.$cache.single[0].style.visibility = "visible", this.result.from === this.result.to ? ("from" === this.target ? this.$cache.from[0].style.visibility = "visible" : "to" === this.target && (this.$cache.to[0].style.visibility = "visible"), this.$cache.single[0].style.visibility = "hidden", i = h) : (this.$cache.from[0].style.visibility = "hidden", this.$cache.to[0].style.visibility = "hidden", this.$cache.single[0].style.visibility = "visible", i = Math.max(g, h))) : (this.$cache.from[0].style.visibility = "visible", this.$cache.to[0].style.visibility = "visible", this.$cache.single[0].style.visibility = "hidden"), f < this.labels.p_min + 1 ? this.$cache.min[0].style.visibility = "hidden" : this.$cache.min[0].style.visibility = "visible", i > 100 - this.labels.p_max - 1 ? this.$cache.max[0].style.visibility = "hidden" : this.$cache.max[0].style.visibility = "visible"
                }
            }
        }, drawShadow: function () {
            var g, h, i, j, a = this.options, b = this.$cache, c = "number" == typeof a.from_min && !isNaN(a.from_min),
                d = "number" == typeof a.from_max && !isNaN(a.from_max),
                e = "number" == typeof a.to_min && !isNaN(a.to_min),
                f = "number" == typeof a.to_max && !isNaN(a.to_max);
            "single" === a.type ? a.from_shadow && (c || d) ? (g = this.convertToPercent(c ? a.from_min : a.min), h = this.convertToPercent(d ? a.from_max : a.max) - g, g = this.toFixed(g - this.coords.p_handle / 100 * g), h = this.toFixed(h - this.coords.p_handle / 100 * h), g += this.coords.p_handle / 2, b.shad_single[0].style.display = "block", b.shad_single[0].style.left = g + "%", b.shad_single[0].style.width = h + "%") : b.shad_single[0].style.display = "none" : (a.from_shadow && (c || d) ? (g = this.convertToPercent(c ? a.from_min : a.min), h = this.convertToPercent(d ? a.from_max : a.max) - g, g = this.toFixed(g - this.coords.p_handle / 100 * g), h = this.toFixed(h - this.coords.p_handle / 100 * h), g += this.coords.p_handle / 2, b.shad_from[0].style.display = "block", b.shad_from[0].style.left = g + "%", b.shad_from[0].style.width = h + "%") : b.shad_from[0].style.display = "none", a.to_shadow && (e || f) ? (i = this.convertToPercent(e ? a.to_min : a.min), j = this.convertToPercent(f ? a.to_max : a.max) - i, i = this.toFixed(i - this.coords.p_handle / 100 * i), j = this.toFixed(j - this.coords.p_handle / 100 * j), i += this.coords.p_handle / 2, b.shad_to[0].style.display = "block", b.shad_to[0].style.left = i + "%", b.shad_to[0].style.width = j + "%") : b.shad_to[0].style.display = "none")
        }, callOnStart: function () {
            this.options.onStart && "function" == typeof this.options.onStart && this.options.onStart(this.result)
        }, callOnChange: function () {
            this.options.onChange && "function" == typeof this.options.onChange && this.options.onChange(this.result)
        }, callOnFinish: function () {
            this.options.onFinish && "function" == typeof this.options.onFinish && this.options.onFinish(this.result)
        }, callOnUpdate: function () {
            this.options.onUpdate && "function" == typeof this.options.onUpdate && this.options.onUpdate(this.result)
        }, toggleInput: function () {
            this.$cache.input.toggleClass("irs-hidden-input")
        }, convertToPercent: function (a, b) {
            var e, f, c = this.options.max - this.options.min, d = c / 100;
            return c ? (e = b ? a : a - this.options.min, f = e / d, this.toFixed(f)) : (this.no_diapason = !0, 0)
        }, convertToValue: function (a) {
            var f, g, b = this.options.min, c = this.options.max, d = b.toString().split(".")[1],
                e = c.toString().split(".")[1], h = 0, i = 0;
            if (0 === a)return this.options.min;
            if (100 === a)return this.options.max;
            d && (f = d.length, h = f), e && (g = e.length, h = g), f && g && (h = f >= g ? f : g), b < 0 && (i = Math.abs(b), b = +(b + i).toFixed(h), c = +(c + i).toFixed(h));
            var l, j = (c - b) / 100 * a + b, k = this.options.step.toString().split(".")[1];
            return k ? j = +j.toFixed(k.length) : (j /= this.options.step, j *= this.options.step, j = +j.toFixed(0)), i && (j -= i), l = k ? +j.toFixed(k.length) : this.toFixed(j), l < this.options.min ? l = this.options.min : l > this.options.max && (l = this.options.max), l
        }, calcWithStep: function (a) {
            var b = Math.round(a / this.coords.p_step) * this.coords.p_step;
            return b > 100 && (b = 100), 100 === a && (b = 100), this.toFixed(b)
        }, checkMinInterval: function (a, b, c) {
            var e, f, d = this.options;
            return d.min_interval ? (e = this.convertToValue(a), f = this.convertToValue(b), "from" === c ? f - e < d.min_interval && (e = f - d.min_interval) : e - f < d.min_interval && (e = f + d.min_interval), this.convertToPercent(e)) : a
        }, checkMaxInterval: function (a, b, c) {
            var e, f, d = this.options;
            return d.max_interval ? (e = this.convertToValue(a), f = this.convertToValue(b), "from" === c ? f - e > d.max_interval && (e = f - d.max_interval) : e - f > d.max_interval && (e = f + d.max_interval), this.convertToPercent(e)) : a
        }, checkDiapason: function (a, b, c) {
            var d = this.convertToValue(a), e = this.options;
            return "number" != typeof b && (b = e.min), "number" != typeof c && (c = e.max), d < b && (d = b), d > c && (d = c), this.convertToPercent(d)
        }, toFixed: function (a) {
            return +(a = a.toFixed(9))
        }, _prettify: function (a) {
            return this.options.prettify_enabled ? this.options.prettify && "function" == typeof this.options.prettify ? this.options.prettify(a) : this.prettify(a) : a
        }, prettify: function (a) {
            return a.toString().replace(/(\d{1,3}(?=(?:\d\d\d)+(?!\d)))/g, "$1" + this.options.prettify_separator)
        }, checkEdges: function (a, b) {
            return this.options.force_edges ? (a < 0 ? a = 0 : a > 100 - b && (a = 100 - b), this.toFixed(a)) : this.toFixed(a)
        }, validate: function () {
            var e, f, a = this.options, b = this.result, c = a.values, d = c.length;
            if ("string" == typeof a.min && (a.min = +a.min), "string" == typeof a.max && (a.max = +a.max), "string" == typeof a.from && (a.from = +a.from), "string" == typeof a.to && (a.to = +a.to), "string" == typeof a.step && (a.step = +a.step), "string" == typeof a.from_min && (a.from_min = +a.from_min), "string" == typeof a.from_max && (a.from_max = +a.from_max), "string" == typeof a.to_min && (a.to_min = +a.to_min), "string" == typeof a.to_max && (a.to_max = +a.to_max), "string" == typeof a.keyboard_step && (a.keyboard_step = +a.keyboard_step), "string" == typeof a.grid_num && (a.grid_num = +a.grid_num), a.max < a.min && (a.max = a.min), d)for (a.p_values = [], a.min = 0, a.max = d - 1, a.step = 1, a.grid_num = a.max, a.grid_snap = !0, f = 0; f < d; f++)e = +c[f], isNaN(e) ? e = c[f] : (c[f] = e, e = this._prettify(e)), a.p_values.push(e);
            ("number" != typeof a.from || isNaN(a.from)) && (a.from = a.min), ("number" != typeof a.to || isNaN(a.from)) && (a.to = a.max), "single" === a.type ? (a.from < a.min && (a.from = a.min), a.from > a.max && (a.from = a.max)) : ((a.from < a.min || a.from > a.max) && (a.from = a.min), (a.to > a.max || a.to < a.min) && (a.to = a.max), a.from > a.to && (a.from = a.to)), ("number" != typeof a.step || isNaN(a.step) || !a.step || a.step < 0) && (a.step = 1), ("number" != typeof a.keyboard_step || isNaN(a.keyboard_step) || !a.keyboard_step || a.keyboard_step < 0) && (a.keyboard_step = 5), "number" == typeof a.from_min && a.from < a.from_min && (a.from = a.from_min), "number" == typeof a.from_max && a.from > a.from_max && (a.from = a.from_max), "number" == typeof a.to_min && a.to < a.to_min && (a.to = a.to_min), "number" == typeof a.to_max && a.from > a.to_max && (a.to = a.to_max), b && (b.min !== a.min && (b.min = a.min), b.max !== a.max && (b.max = a.max), (b.from < b.min || b.from > b.max) && (b.from = a.from), (b.to < b.min || b.to > b.max) && (b.to = a.to)), ("number" != typeof a.min_interval || isNaN(a.min_interval) || !a.min_interval || a.min_interval < 0) && (a.min_interval = 0), ("number" != typeof a.max_interval || isNaN(a.max_interval) || !a.max_interval || a.max_interval < 0) && (a.max_interval = 0), a.min_interval && a.min_interval > a.max - a.min && (a.min_interval = a.max - a.min), a.max_interval && a.max_interval > a.max - a.min && (a.max_interval = a.max - a.min)
        }, decorate: function (a, b) {
            var c = "", d = this.options;
            return d.prefix && (c += d.prefix), c += a, d.max_postfix && (d.values.length && a === d.p_values[d.max] ? (c += d.max_postfix, d.postfix && (c += " ")) : b === d.max && (c += d.max_postfix, d.postfix && (c += " "))), d.postfix && (c += d.postfix), c
        }, updateFrom: function () {
            this.result.from = this.options.from, this.result.from_percent = this.convertToPercent(this.result.from), this.options.values && (this.result.from_value = this.options.values[this.result.from])
        }, updateTo: function () {
            this.result.to = this.options.to, this.result.to_percent = this.convertToPercent(this.result.to), this.options.values && (this.result.to_value = this.options.values[this.result.to])
        }, updateResult: function () {
            this.result.min = this.options.min, this.result.max = this.options.max, this.updateFrom(), this.updateTo()
        }, appendGrid: function () {
            if (this.options.grid) {
                var b, c, i, j, l, a = this.options, d = a.max - a.min, e = a.grid_num, f = 0, g = 0, h = 4, k = 0,
                    m = "";
                for (this.calcGridMargin(), a.grid_snap ? (e = d / a.step, f = this.toFixed(a.step / (d / 100))) : f = this.toFixed(100 / e), e > 4 && (h = 3), e > 7 && (h = 2), e > 14 && (h = 1), e > 28 && (h = 0), b = 0; b < e + 1; b++) {
                    for (i = h, g = this.toFixed(f * b), g > 100 && (g = 100, (i -= 2) < 0 && (i = 0)), this.coords.big[b] = g, j = (g - f * (b - 1)) / (i + 1), c = 1; c <= i && 0 !== g; c++)k = this.toFixed(g - j * c), m += '<span class="irs-grid-pol small" style="left: ' + k + '%"></span>';
                    m += '<span class="irs-grid-pol" style="left: ' + g + '%"></span>', l = this.convertToValue(g), l = a.values.length ? a.p_values[l] : this._prettify(l), m += '<span class="irs-grid-text js-grid-text-' + b + '" style="left: ' + g + '%">' + l + "</span>"
                }
                this.coords.big_num = Math.ceil(e + 1), this.$cache.cont.addClass("irs-with-grid"), this.$cache.grid.html(m), this.cacheGridLabels()
            }
        }, cacheGridLabels: function () {
            var a, b, c = this.coords.big_num;
            for (b = 0; b < c; b++)a = this.$cache.grid.find(".js-grid-text-" + b), this.$cache.grid_labels.push(a);
            this.calcGridLabels()
        }, calcGridLabels: function () {
            var a, b, c = [], d = [], e = this.coords.big_num;
            for (a = 0; a < e; a++)this.coords.big_w[a] = this.$cache.grid_labels[a].outerWidth(!1), this.coords.big_p[a] = this.toFixed(this.coords.big_w[a] / this.coords.w_rs * 100), this.coords.big_x[a] = this.toFixed(this.coords.big_p[a] / 2), c[a] = this.toFixed(this.coords.big[a] - this.coords.big_x[a]), d[a] = this.toFixed(c[a] + this.coords.big_p[a]);
            for (this.options.force_edges && (c[0] < -this.coords.grid_gap && (c[0] = -this.coords.grid_gap, d[0] = this.toFixed(c[0] + this.coords.big_p[0]), this.coords.big_x[0] = this.coords.grid_gap), d[e - 1] > 100 + this.coords.grid_gap && (d[e - 1] = 100 + this.coords.grid_gap, c[e - 1] = this.toFixed(d[e - 1] - this.coords.big_p[e - 1]), this.coords.big_x[e - 1] = this.toFixed(this.coords.big_p[e - 1] - this.coords.grid_gap))), this.calcGridCollision(2, c, d), this.calcGridCollision(4, c, d), a = 0; a < e; a++)b = this.$cache.grid_labels[a][0], b.style.marginLeft = -this.coords.big_x[a] + "%"
        }, calcGridCollision: function (a, b, c) {
            var d, e, f, g = this.coords.big_num;
            for (d = 0; d < g && !((e = d + a / 2) >= g); d += a)f = this.$cache.grid_labels[e][0], c[d] <= b[e] ? f.style.visibility = "visible" : f.style.visibility = "hidden"
        }, calcGridMargin: function () {
            this.options.grid_margin && (this.coords.w_rs = this.$cache.rs.outerWidth(!1), this.coords.w_rs && ("single" === this.options.type ? this.coords.w_handle = this.$cache.s_single.outerWidth(!1) : this.coords.w_handle = this.$cache.s_from.outerWidth(!1), this.coords.p_handle = this.toFixed(this.coords.w_handle / this.coords.w_rs * 100), this.coords.grid_gap = this.toFixed(this.coords.p_handle / 2 - .1), this.$cache.grid[0].style.width = this.toFixed(100 - this.coords.p_handle) + "%", this.$cache.grid[0].style.left = this.coords.grid_gap + "%"))
        }, update: function (b) {
            this.input && (this.is_update = !0, this.options.from = this.result.from, this.options.to = this.result.to, this.options = a.extend(this.options, b), this.validate(), this.updateResult(b), this.toggleInput(), this.remove(), this.init(!0))
        }, reset: function () {
            this.input && (this.updateResult(), this.update())
        }, destroy: function () {
            this.input && (this.toggleInput(), this.$cache.input.prop("readonly", !1), a.data(this.input, "ionRangeSlider", null), this.remove(), this.input = null, this.options = null)
        }
    }, a.fn.ionRangeSlider = function (b) {
        return this.each(function () {
            a.data(this, "ionRangeSlider") || a.data(this, "ionRangeSlider", new l(this, b, f++))
        })
    }, function () {
        for (var a = 0, b = ["ms", "moz", "webkit", "o"], d = 0; d < b.length && !c.requestAnimationFrame; ++d)c.requestAnimationFrame = c[b[d] + "RequestAnimationFrame"], c.cancelAnimationFrame = c[b[d] + "CancelAnimationFrame"] || c[b[d] + "CancelRequestAnimationFrame"];
        c.requestAnimationFrame || (c.requestAnimationFrame = function (b, d) {
            var e = (new Date).getTime(), f = Math.max(0, 16 - (e - a)), g = c.setTimeout(function () {
                b(e + f)
            }, f);
            return a = e + f, g
        }), c.cancelAnimationFrame || (c.cancelAnimationFrame = function (a) {
            clearTimeout(a)
        })
    }()
}(jQuery, document, window, navigator), function (a) {
    a.fn.footerReveal = function (b) {
        var c = a(this), d = c.prev(), e = a(window), f = a.extend({shadow: !0, shadowOpacity: .8, zIndex: -100}, b);
        a.extend(!0, {}, f, b);
        return c.outerHeight() <= e.outerHeight() && (c.css({
            "z-index": f.zIndex,
            position: "fixed",
            bottom: 0
        }), f.shadow && d.css({
            "-moz-box-shadow": "0 20px 30px -20px rgba(0,0,0," + f.shadowOpacity + ")",
            "-webkit-box-shadow": "0 20px 30px -20px rgba(0,0,0," + f.shadowOpacity + ")",
            "box-shadow": "0 20px 30px -20px rgba(0,0,0," + f.shadowOpacity + ")"
        }), e.on("load resize", function () {
            c.css({width: d.outerWidth()}), d.css({"margin-bottom": c.outerHeight()})
        })), this
    }
}(jQuery), function (a) {
    "function" == typeof define && define.amd ? define(["jquery"], a) : a("object" == typeof exports ? require("jquery") : jQuery)
}(function (a) {
    function c(b) {
        var c = !1;
        return a('[data-notify="container"]').each(function (d, e) {
            var f = a(e), g = f.find('[data-notify="title"]').html().trim(),
                h = f.find('[data-notify="message"]').html().trim(),
                i = g === a("<div>" + b.settings.content.title + "</div>").html().trim(),
                j = h === a("<div>" + b.settings.content.message + "</div>").html().trim(),
                k = f.hasClass("alert-" + b.settings.type);
            return i && j && k && (c = !0), !c
        }), c
    }

    function d(d, e, f) {
        var g = {
            content: {
                message: "object" == typeof e ? e.message : e,
                title: e.title ? e.title : "",
                icon: e.icon ? e.icon : "",
                url: e.url ? e.url : "#",
                target: e.target ? e.target : "-"
            }
        };
        f = a.extend(!0, {}, g, f), this.settings = a.extend(!0, {}, b, f), this._defaults = b, "-" === this.settings.content.target && (this.settings.content.target = this.settings.url_target), this.animations = {
            start: "webkitAnimationStart oanimationstart MSAnimationStart animationstart",
            end: "webkitAnimationEnd oanimationend MSAnimationEnd animationend"
        }, "number" == typeof this.settings.offset && (this.settings.offset = {
            x: this.settings.offset,
            y: this.settings.offset
        }), (this.settings.allow_duplicates || !this.settings.allow_duplicates && !c(this)) && this.init()
    }

    var b = {
        element: "body",
        position: null,
        type: "info",
        allow_dismiss: !0,
        allow_duplicates: !0,
        newest_on_top: !1,
        showProgressbar: !1,
        placement: {from: "top", align: "right"},
        offset: 20,
        spacing: 10,
        z_index: 1031,
        delay: 5e3,
        timer: 1e3,
        url_target: "_blank",
        mouse_over: null,
        animate: {enter: "animated fadeInDown", exit: "animated fadeOutUp"},
        onShow: null,
        onShown: null,
        onClose: null,
        onClosed: null,
        onClick: null,
        icon_type: "class",
        template: '<div data-notify="container" class="customized_notify alert alert-{0}" role="alert"><button type="button" aria-hidden="true" class="close" data-notify="dismiss">&times;</button><i><span data-notify="icon"></span></i> <span data-notify="title">{1}</span> <span data-notify="message">{2}</span><div class="progress" data-notify="progressbar"><div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div></div><a href="{3}" target="{4}" data-notify="url"></a></div>'
    };
    String.format = function () {
        var a = arguments;
        return arguments[0].replace(/(\{\{\d\}\}|\{\d\})/g, function (b) {
            if ("{{" === b.substring(0, 2))return b;
            var c = parseInt(b.match(/\d/)[0]);
            return a[c + 1]
        })
    }, a.extend(d.prototype, {
        init: function () {
            var a = this;
            this.buildNotify(), this.settings.content.icon && this.setIcon(), "#" != this.settings.content.url && this.styleURL(), this.styleDismiss(), this.placement(), this.bind(), this.notify = {
                $ele: this.$ele,
                update: function (b, c) {
                    var d = {};
                    "string" == typeof b ? d[b] = c : d = b;
                    for (var e in d)switch (e) {
                        case"type":
                            this.$ele.removeClass("alert-" + a.settings.type), this.$ele.find('[data-notify="progressbar"] > .progress-bar').removeClass("progress-bar-" + a.settings.type), a.settings.type = d[e], this.$ele.addClass("alert-" + d[e]).find('[data-notify="progressbar"] > .progress-bar').addClass("progress-bar-" + d[e]);
                            break;
                        case"icon":
                            var f = this.$ele.find('[data-notify="icon"]');
                            "class" === a.settings.icon_type.toLowerCase() ? f.removeClass(a.settings.content.icon).addClass(d[e]) : (f.is("img") || f.find("img"), f.attr("src", d[e])), a.settings.content.icon = d[b];
                            break;
                        case"progress":
                            var g = a.settings.delay - a.settings.delay * (d[e] / 100);
                            this.$ele.data("notify-delay", g), this.$ele.find('[data-notify="progressbar"] > div').attr("aria-valuenow", d[e]).css("width", d[e] + "%");
                            break;
                        case"url":
                            this.$ele.find('[data-notify="url"]').attr("href", d[e]);
                            break;
                        case"target":
                            this.$ele.find('[data-notify="url"]').attr("target", d[e]);
                            break;
                        default:
                            this.$ele.find('[data-notify="' + e + '"]').html(d[e])
                    }
                    var h = this.$ele.outerHeight() + parseInt(a.settings.spacing) + parseInt(a.settings.offset.y);
                    a.reposition(h)
                },
                close: function () {
                    a.close()
                }
            }
        }, buildNotify: function () {
            var b = this.settings.content;
            this.$ele = a(String.format(this.settings.template, this.settings.type, b.title, b.message, b.url, b.target)), this.$ele.attr("data-notify-position", this.settings.placement.from + "-" + this.settings.placement.align), this.settings.allow_dismiss || this.$ele.find('[data-notify="dismiss"]').css("display", "none"), (this.settings.delay <= 0 && !this.settings.showProgressbar || !this.settings.showProgressbar) && this.$ele.find('[data-notify="progressbar"]').remove()
        }, setIcon: function () {
            "class" === this.settings.icon_type.toLowerCase() ? this.$ele.find('[data-notify="icon"]').addClass(this.settings.content.icon) : this.$ele.find('[data-notify="icon"]').is("img") ? this.$ele.find('[data-notify="icon"]').attr("src", this.settings.content.icon) : this.$ele.find('[data-notify="icon"]').append('<img src="' + this.settings.content.icon + '" alt="Notify Icon" />')
        }, styleDismiss: function () {
            this.$ele.find('[data-notify="dismiss"]').css({
                position: "absolute",
                right: "10px",
                top: "5px",
                zIndex: this.settings.z_index + 2
            })
        }, styleURL: function () {
            this.$ele.find('[data-notify="url"]').css({
                backgroundImage: "url(data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7)",
                height: "100%",
                left: 0,
                position: "absolute",
                top: 0,
                width: "100%",
                zIndex: this.settings.z_index + 1
            })
        }, placement: function () {
            var b = this, c = this.settings.offset.y, d = {
                display: "inline-block",
                margin: "0px auto",
                position: this.settings.position ? this.settings.position : "body" === this.settings.element ? "fixed" : "absolute",
                transition: "all .5s ease-in-out",
                zIndex: this.settings.z_index
            }, e = !1, f = this.settings;
            switch (a('[data-notify-position="' + this.settings.placement.from + "-" + this.settings.placement.align + '"]:not([data-closing="true"])').each(function () {
                c = Math.max(c, parseInt(a(this).css(f.placement.from)) + parseInt(a(this).outerHeight()) + parseInt(f.spacing))
            }), !0 === this.settings.newest_on_top && (c = this.settings.offset.y), d[this.settings.placement.from] = c + "px", this.settings.placement.align) {
                case"left":
                case"right":
                    d[this.settings.placement.align] = this.settings.offset.x + "px";
                    break;
                case"center":
                    d.left = 0, d.right = 0
            }
            this.$ele.css(d).addClass(this.settings.animate.enter), a.each(Array("webkit-", "moz-", "o-", "ms-", ""), function (a, c) {
                b.$ele[0].style[c + "AnimationIterationCount"] = 1
            }), a(this.settings.element).append(this.$ele), !0 === this.settings.newest_on_top && (c = parseInt(c) + parseInt(this.settings.spacing) + this.$ele.outerHeight(), this.reposition(c)), a.isFunction(b.settings.onShow) && b.settings.onShow.call(this.$ele), this.$ele.one(this.animations.start, function () {
                e = !0
            }).one(this.animations.end, function () {
                b.$ele.removeClass(b.settings.animate.enter), a.isFunction(b.settings.onShown) && b.settings.onShown.call(this)
            }), setTimeout(function () {
                e || a.isFunction(b.settings.onShown) && b.settings.onShown.call(this)
            }, 600)
        }, bind: function () {
            var b = this;
            if (this.$ele.find('[data-notify="dismiss"]').on("click", function () {
                    b.close()
                }), a.isFunction(b.settings.onClick) && this.$ele.on("click", function (a) {
                    a.target != b.$ele.find('[data-notify="dismiss"]')[0] && b.settings.onClick.call(this, a)
                }), this.$ele.mouseover(function () {
                    a(this).data("data-hover", "true")
                }).mouseout(function () {
                    a(this).data("data-hover", "false")
                }), this.$ele.data("data-hover", "false"), this.settings.delay > 0) {
                b.$ele.data("notify-delay", b.settings.delay);
                var c = setInterval(function () {
                    var a = parseInt(b.$ele.data("notify-delay")) - b.settings.timer;
                    if ("false" === b.$ele.data("data-hover") && "pause" === b.settings.mouse_over || "pause" != b.settings.mouse_over) {
                        var d = (b.settings.delay - a) / b.settings.delay * 100;
                        b.$ele.data("notify-delay", a), b.$ele.find('[data-notify="progressbar"] > div').attr("aria-valuenow", d).css("width", d + "%")
                    }
                    a <= -b.settings.timer && (clearInterval(c), b.close())
                }, b.settings.timer)
            }
        }, close: function () {
            var b = this, c = parseInt(this.$ele.css(this.settings.placement.from)), d = !1;
            this.$ele.attr("data-closing", "true").addClass(this.settings.animate.exit), b.reposition(c), a.isFunction(b.settings.onClose) && b.settings.onClose.call(this.$ele), this.$ele.one(this.animations.start, function () {
                d = !0
            }).one(this.animations.end, function () {
                a(this).remove(), a.isFunction(b.settings.onClosed) && b.settings.onClosed.call(this)
            }), setTimeout(function () {
                d || (b.$ele.remove(), b.settings.onClosed && b.settings.onClosed(b.$ele))
            }, 600)
        }, reposition: function (b) {
            var c = this,
                d = '[data-notify-position="' + this.settings.placement.from + "-" + this.settings.placement.align + '"]:not([data-closing="true"])',
                e = this.$ele.nextAll(d);
            !0 === this.settings.newest_on_top && (e = this.$ele.prevAll(d)), e.each(function () {
                a(this).css(c.settings.placement.from, b), b = parseInt(b) + parseInt(c.settings.spacing) + a(this).outerHeight()
            })
        }
    }), a.notify = function (a, b) {
        return new d(this, a, b).notify
    }, a.notifyDefaults = function (c) {
        return b = a.extend(!0, {}, b, c)
    }, a.notifyClose = function (b) {
        void 0 === b || "all" === b ? a("[data-notify]").find('[data-notify="dismiss"]').trigger("click") : "success" === b || "info" === b || "warning" === b || "danger" === b ? a(".alert-" + b + "[data-notify]").find('[data-notify="dismiss"]').trigger("click") : b ? a(b + "[data-notify]").find('[data-notify="dismiss"]').trigger("click") : a('[data-notify-position="' + b + '"]').find('[data-notify="dismiss"]').trigger("click")
    }, a.notifyCloseExcept = function (b) {
        "success" === b || "info" === b || "warning" === b || "danger" === b ? a("[data-notify]").not(".alert-" + b).find('[data-notify="dismiss"]').trigger("click") : a("[data-notify]").not(b).find('[data-notify="dismiss"]').trigger("click")
    }
});