<?php

// The public IP address of a website visitor can only be identified via
// server-side code.
function get_client_ip()
{
  $ipaddress = "";
  if (getenv("HTTP_CLIENT_IP")) {
    $ipaddress = getenv("HTTP_CLIENT_IP");
  } elseif (getenv("HTTP_X_FORWARDED_FOR")) {
    $ipaddress = getenv("HTTP_X_FORWARDED_FOR");
  } elseif (getenv("HTTP_X_FORWARDED")) {
    $ipaddress = getenv("HTTP_X_FORWARDED");
  } elseif (getenv("HTTP_FORWARDED_FOR")) {
    $ipaddress = getenv("HTTP_FORWARDED_FOR");
  } elseif (getenv("HTTP_FORWARDED")) {
    $ipaddress = getenv("HTTP_FORWARDED");
  } elseif (getenv("REMOTE_ADDR")) {
    $ipaddress = getenv("REMOTE_ADDR");
  } else {
    $ipaddress = "UNKNOWN";
  }
  return $ipaddress;
} ?>
<!DOCTYPE html>
<html class="no-js" lang="de">

<head>
  <meta charset="utf-8" />
  <title>QR-Code-Link</title>
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png" />
  <link rel="manifest" href="/site.webmanifest" />
  <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#000000" />
  <meta name="msapplication-TileColor" content="#000000" />
  <meta name="theme-color" content="#ffffff" />

  <noscript>
    <meta http-equiv="refresh" content="0; URL=https://www.seppmed.de/it-sicherheit-und-software-security/" />
  </noscript>

  <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests" />

  <!-- Change “no-js” class in <html> to “js” if JavaScript is enabled -->
  <script>
    (function(H) {
      H.className = H.className.replace(/\bno-js\b/, "js");
    })(document.documentElement);
  </script>

  <link rel="preload" href="/fonts/source-code-pro-v21-latin-regular.woff2" as="font" type="font/woff2" crossorigin />
  <link rel="preload" href="/fonts/source-code-pro-v21-latin-700.woff2" as="font" type="font/woff2" crossorigin />
  <style>
    /* source-code-pro-regular - latin */
    @font-face {
      font-family: "Source Code Pro";
      font-style: normal;
      font-weight: 400;
      src: url("/fonts/source-code-pro-v21-latin-regular.eot");
      src: local(""),
        url("/fonts/source-code-pro-v21-latin-regular.eot?#iefix") format("embedded-opentype"),
        url("/fonts/source-code-pro-v21-latin-regular.woff2") format("woff2"),
        url("/fonts/source-code-pro-v21-latin-regular.woff") format("woff"),
        url("/fonts/source-code-pro-v21-latin-regular.ttf") format("truetype"),
        url("/fonts/source-code-pro-v21-latin-regular.svg#SourceCodePro") format("svg");
    }

    /* source-code-pro-700 - latin */
    @font-face {
      font-family: "Source Code Pro";
      font-style: normal;
      font-weight: 700;
      src: url("/fonts/source-code-pro-v21-latin-700.eot");
      src: local(""),
        url("/fonts/source-code-pro-v21-latin-700.eot?#iefix") format("embedded-opentype"),
        url("/fonts/source-code-pro-v21-latin-700.woff2") format("woff2"),
        url("/fonts/source-code-pro-v21-latin-700.woff") format("woff"),
        url("/fonts/source-code-pro-v21-latin-700.ttf") format("truetype"),
        url("/fonts/source-code-pro-v21-latin-700.svg#SourceCodePro") format("svg");
    }

    /* roboto-regular - latin */
    @font-face {
      font-family: "Roboto";
      font-style: normal;
      font-weight: 400;
      src: url("/fonts/roboto-v30-latin-regular.eot");
      src: local(""),
        url("/fonts/roboto-v30-latin-regular.eot?#iefix") format("embedded-opentype"),
        url("/fonts/roboto-v30-latin-regular.woff2") format("woff2"),
        url("/fonts/roboto-v30-latin-regular.woff") format("woff"),
        url("/fonts/roboto-v30-latin-regular.ttf") format("truetype"),
        url("/fonts/roboto-v30-latin-regular.svg#Roboto") format("svg");
    }

    /* roboto-700 - latin */
    @font-face {
      font-family: "Roboto";
      font-style: normal;
      font-weight: 700;
      src: url("/fonts/roboto-v30-latin-700.eot");
      src: local(""),
        url("/fonts/roboto-v30-latin-700.eot?#iefix") format("embedded-opentype"),
        url("/fonts/roboto-v30-latin-700.woff2") format("woff2"),
        url("/fonts/roboto-v30-latin-700.woff") format("woff"),
        url("/fonts/roboto-v30-latin-700.ttf") format("truetype"),
        url("/fonts/roboto-v30-latin-700.svg#Roboto") format("svg");
    }

    /*! normalize.css v8.0.1 */
    html {
      line-height: 1.15;
      -webkit-text-size-adjust: 100%;
    }

    body {
      margin: 0;
    }

    main {
      display: block;
    }

    h1 {
      font-size: 2em;
      margin: 0.67em 0;
    }

    hr {
      box-sizing: content-box;
      height: 0;
      overflow: visible;
    }

    pre {
      font-family: monospace, monospace;
      font-size: 1em;
    }

    a {
      background-color: transparent;
    }

    abbr[title] {
      border-bottom: none;
      text-decoration: underline;
      text-decoration: underline dotted;
    }

    b,
    strong {
      font-weight: bolder;
    }

    code,
    kbd,
    samp {
      font-family: monospace, monospace;
      font-size: 1em;
    }

    small {
      font-size: 80%;
    }

    sub,
    sup {
      font-size: 75%;
      line-height: 0;
      position: relative;
      vertical-align: baseline;
    }

    sub {
      bottom: -0.25em;
    }

    sup {
      top: -0.5em;
    }

    img {
      border-style: none;
    }

    button,
    input,
    optgroup,
    select,
    textarea {
      font-family: inherit;
      font-size: 100%;
      line-height: 1.15;
      margin: 0;
    }

    button,
    input {
      overflow: visible;
    }

    button,
    select {
      text-transform: none;
    }

    button,
    [type="button"],
    [type="reset"],
    [type="submit"] {
      -webkit-appearance: button;
    }

    button::-moz-focus-inner,
    [type="button"]::-moz-focus-inner,
    [type="reset"]::-moz-focus-inner,
    [type="submit"]::-moz-focus-inner {
      border-style: none;
      padding: 0;
    }

    button:-moz-focusring,
    [type="button"]:-moz-focusring,
    [type="reset"]:-moz-focusring,
    [type="submit"]:-moz-focusring {
      outline: 1px dotted ButtonText;
    }

    fieldset {
      padding: 0.35em 0.75em 0.625em;
    }

    legend {
      box-sizing: border-box;
      color: inherit;
      display: table;
      max-width: 100%;
      padding: 0;
      white-space: normal;
    }

    progress {
      vertical-align: baseline;
    }

    textarea {
      overflow: auto;
    }

    [type="checkbox"],
    [type="radio"] {
      box-sizing: border-box;
      padding: 0;
    }

    [type="number"]::-webkit-inner-spin-button,
    [type="number"]::-webkit-outer-spin-button {
      height: auto;
    }

    [type="search"] {
      -webkit-appearance: textfield;
      outline-offset: -2px;
    }

    [type="search"]::-webkit-search-decoration {
      -webkit-appearance: none;
    }

    ::-webkit-file-upload-button {
      -webkit-appearance: button;
      font: inherit;
    }

    details {
      display: block;
    }

    summary {
      display: list-item;
    }

    template {
      display: none;
    }

    [hidden] {
      display: none;
    }

    /* Website custom styles */
    html {
      -webkit-box-sizing: border-box;
      box-sizing: border-box;
      font-size: 16px;
      height: 100%;
      line-height: 1.4;
      overflow-y: scroll;
    }

    @media screen and (min-width: 600px) {
      html {
        font-size: 24px;
      }
    }

    *,
    *::before,
    *::after {
      -webkit-box-sizing: inherit;
      box-sizing: inherit;
    }

    html,
    button,
    input,
    select,
    textarea {
      color: #fff;
    }

    body {
      background-color: #000;
      color: #b1b2b3;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -ms-flex-direction: column;
      flex-direction: column;
      font-family: "Source Code Pro", monospace;
      line-height: 1.4;
      min-height: 100%;
    }

    a,
    a:link,
    a:visited {
      color: inherit;
      text-decoration: underline;
      -webkit-transition: all 0.2s ease-out;
      -o-transition: all 0.2s ease-out;
      transition: all 0.2s ease-out;
    }

    a:hover,
    a:focus {
      text-decoration: underline;
      -webkit-transition: all 0.2s ease-out;
      -o-transition: all 0.2s ease-out;
      transition: all 0.2s ease-out;
    }

    .main-content {
      padding: 30px;
    }

    .terminal__input {
      color: #b1b2b3;
    }

    .terminal__output {
      color: #fff;
    }

    .teaser {
      position: absolute;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -ms-flex-direction: column;
      flex-direction: column;
      -webkit-box-flex: 1;
      -ms-flex-positive: 1;
      flex-grow: 1;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      justify-content: center;
      padding: 30px;
      opacity: 0;
      background-color: #0d3174;
      color: #fff;
      font-family: "Roboto", sans-serif;
      font-size: 1.5rem;
      text-align: center;
      transition: all 0.5s ease-in-out;
    }
  </style>

  <link rel="prefetch" href="https://www.seppmed.de/it-sicherheit-und-software-security/" as="document" />
</head>

<body>
  <div class="main-content">
    <div id="terminal" class="terminal"></div>
    <div id="teaser" class="teaser"></div>
  </div>

  <!-- prettier-ignore -->
  <script>
    /* https://github.com/tameemsafi/typewriterjs */ ! function(e, t) {
      "object" == typeof exports && "object" == typeof module ? module.exports = t() : "function" == typeof define && define.amd ? define("Typewriter", [], t) : "object" == typeof exports ? exports.Typewriter = t() : e.Typewriter = t()
    }("undefined" != typeof self ? self : this, (function() {
      return (() => {
        var e = {
            75: function(e) {
              (function() {
                var t, n, r, o, a, s;
                "undefined" != typeof performance && null !== performance && performance.now ? e.exports = function() {
                  return performance.now()
                } : "undefined" != typeof process && null !== process && process.hrtime ? (e.exports = function() {
                  return (t() - a) / 1e6
                }, n = process.hrtime, o = (t = function() {
                  var e;
                  return 1e9 * (e = n())[0] + e[1]
                })(), s = 1e9 * process.uptime(), a = o - s) : Date.now ? (e.exports = function() {
                  return Date.now() - r
                }, r = Date.now()) : (e.exports = function() {
                  return (new Date).getTime() - r
                }, r = (new Date).getTime())
              }).call(this)
            },
            4087: (e, t, n) => {
              for (var r = n(75), o = "undefined" == typeof window ? n.g : window, a = ["moz", "webkit"], s = "AnimationFrame", i = o["request" + s], u = o["cancel" + s] || o["cancelRequest" + s], l = 0; !i && l < a.length; l++) i = o[a[l] + "Request" + s], u = o[a[l] + "Cancel" + s] || o[a[l] + "CancelRequest" + s];
              if (!i || !u) {
                var c = 0,
                  p = 0,
                  d = [];
                i = function(e) {
                  if (0 === d.length) {
                    var t = r(),
                      n = Math.max(0, 16.666666666666668 - (t - c));
                    c = n + t, setTimeout((function() {
                      var e = d.slice(0);
                      d.length = 0;
                      for (var t = 0; t < e.length; t++)
                        if (!e[t].cancelled) try {
                          e[t].callback(c)
                        } catch (e) {
                          setTimeout((function() {
                            throw e
                          }), 0)
                        }
                    }), Math.round(n))
                  }
                  return d.push({
                    handle: ++p,
                    callback: e,
                    cancelled: !1
                  }), p
                }, u = function(e) {
                  for (var t = 0; t < d.length; t++) d[t].handle === e && (d[t].cancelled = !0)
                }
              }
              e.exports = function(e) {
                return i.call(o, e)
              }, e.exports.cancel = function() {
                u.apply(o, arguments)
              }, e.exports.polyfill = function(e) {
                e || (e = o), e.requestAnimationFrame = i, e.cancelAnimationFrame = u
              }
            }
          },
          t = {};

        function n(r) {
          var o = t[r];
          if (void 0 !== o) return o.exports;
          var a = t[r] = {
            exports: {}
          };
          return e[r].call(a.exports, a, a.exports, n), a.exports
        }
        n.n = e => {
          var t = e && e.__esModule ? () => e.default : () => e;
          return n.d(t, {
            a: t
          }), t
        }, n.d = (e, t) => {
          for (var r in t) n.o(t, r) && !n.o(e, r) && Object.defineProperty(e, r, {
            enumerable: !0,
            get: t[r]
          })
        }, n.g = function() {
          if ("object" == typeof globalThis) return globalThis;
          try {
            return this || new Function("return this")()
          } catch (e) {
            if ("object" == typeof window) return window
          }
        }(), n.o = (e, t) => Object.prototype.hasOwnProperty.call(e, t);
        var r = {};
        return (() => {
          "use strict";
          n.d(r, {
            default: () => S
          });
          var e = n(4087),
            t = n.n(e);
          const o = function(e) {
              return new RegExp(/<[a-z][\s\S]*>/i).test(e)
            },
            a = function(e) {
              var t = document.createElement("div");
              return t.innerHTML = e, t.childNodes
            },
            s = function(e, t) {
              return Math.floor(Math.random() * (t - e + 1)) + e
            };
          var i = "TYPE_CHARACTER",
            u = "REMOVE_CHARACTER",
            l = "REMOVE_ALL",
            c = "REMOVE_LAST_VISIBLE_NODE",
            p = "PAUSE_FOR",
            d = "CALL_FUNCTION",
            f = "ADD_HTML_TAG_ELEMENT",
            v = "CHANGE_DELETE_SPEED",
            h = "CHANGE_DELAY",
            m = "CHANGE_CURSOR",
            y = "PASTE_STRING",
            g = "HTML_TAG";

          function E(e, t) {
            var n = Object.keys(e);
            if (Object.getOwnPropertySymbols) {
              var r = Object.getOwnPropertySymbols(e);
              t && (r = r.filter((function(t) {
                return Object.getOwnPropertyDescriptor(e, t).enumerable
              }))), n.push.apply(n, r)
            }
            return n
          }

          function w(e) {
            for (var t = 1; t < arguments.length; t++) {
              var n = null != arguments[t] ? arguments[t] : {};
              t % 2 ? E(Object(n), !0).forEach((function(t) {
                N(e, t, n[t])
              })) : Object.getOwnPropertyDescriptors ? Object.defineProperties(e, Object.getOwnPropertyDescriptors(n)) : E(Object(n)).forEach((function(t) {
                Object.defineProperty(e, t, Object.getOwnPropertyDescriptor(n, t))
              }))
            }
            return e
          }

          function T(e) {
            return function(e) {
              if (Array.isArray(e)) return b(e)
            }(e) || function(e) {
              if ("undefined" != typeof Symbol && null != e[Symbol.iterator] || null != e["@@iterator"]) return Array.from(e)
            }(e) || function(e, t) {
              if (e) {
                if ("string" == typeof e) return b(e, t);
                var n = Object.prototype.toString.call(e).slice(8, -1);
                return "Object" === n && e.constructor && (n = e.constructor.name), "Map" === n || "Set" === n ? Array.from(e) : "Arguments" === n || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n) ? b(e, t) : void 0
              }
            }(e) || function() {
              throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")
            }()
          }

          function b(e, t) {
            (null == t || t > e.length) && (t = e.length);
            for (var n = 0, r = new Array(t); n < t; n++) r[n] = e[n];
            return r
          }

          function A(e, t) {
            for (var n = 0; n < t.length; n++) {
              var r = t[n];
              r.enumerable = r.enumerable || !1, r.configurable = !0, "value" in r && (r.writable = !0), Object.defineProperty(e, r.key, r)
            }
          }

          function N(e, t, n) {
            return t in e ? Object.defineProperty(e, t, {
              value: n,
              enumerable: !0,
              configurable: !0,
              writable: !0
            }) : e[t] = n, e
          }
          const S = function() {
            function n(r, E) {
              var b = this;
              if (function(e, t) {
                  if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
                }(this, n), N(this, "state", {
                  cursorAnimation: null,
                  lastFrameTime: null,
                  pauseUntil: null,
                  eventQueue: [],
                  eventLoop: null,
                  eventLoopPaused: !1,
                  reverseCalledEvents: [],
                  calledEvents: [],
                  visibleNodes: [],
                  initialOptions: null,
                  elements: {
                    container: null,
                    wrapper: document.createElement("span"),
                    cursor: document.createElement("span")
                  }
                }), N(this, "options", {
                  strings: null,
                  cursor: "|",
                  delay: "natural",
                  pauseFor: 1500,
                  deleteSpeed: "natural",
                  loop: !1,
                  autoStart: !1,
                  devMode: !1,
                  skipAddStyles: !1,
                  wrapperClassName: "Typewriter__wrapper",
                  cursorClassName: "Typewriter__cursor",
                  stringSplitter: null,
                  onCreateTextNode: null,
                  onRemoveNode: null
                }), N(this, "setupWrapperElement", (function() {
                  b.state.elements.container && (b.state.elements.wrapper.className = b.options.wrapperClassName, b.state.elements.cursor.className = b.options.cursorClassName, b.state.elements.cursor.innerHTML = b.options.cursor, b.state.elements.container.innerHTML = "", b.state.elements.container.appendChild(b.state.elements.wrapper), b.state.elements.container.appendChild(b.state.elements.cursor))
                })), N(this, "start", (function() {
                  return b.state.eventLoopPaused = !1, b.runEventLoop(), b
                })), N(this, "pause", (function() {
                  return b.state.eventLoopPaused = !0, b
                })), N(this, "stop", (function() {
                  return b.state.eventLoop && ((0, e.cancel)(b.state.eventLoop), b.state.eventLoop = null), b
                })), N(this, "pauseFor", (function(e) {
                  return b.addEventToQueue(p, {
                    ms: e
                  }), b
                })), N(this, "typeOutAllStrings", (function() {
                  return "string" == typeof b.options.strings ? (b.typeString(b.options.strings).pauseFor(b.options.pauseFor), b) : (b.options.strings.forEach((function(e) {
                    b.typeString(e).pauseFor(b.options.pauseFor).deleteAll(b.options.deleteSpeed)
                  })), b)
                })), N(this, "typeString", (function(e) {
                  var t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : null;
                  if (o(e)) return b.typeOutHTMLString(e, t);
                  if (e) {
                    var n = b.options || {},
                      r = n.stringSplitter,
                      a = "function" == typeof r ? r(e) : e.split("");
                    b.typeCharacters(a, t)
                  }
                  return b
                })), N(this, "pasteString", (function(e) {
                  var t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : null;
                  return o(e) ? b.typeOutHTMLString(e, t, !0) : (e && b.addEventToQueue(y, {
                    character: e,
                    node: t
                  }), b)
                })), N(this, "typeOutHTMLString", (function(e) {
                  var t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : null,
                    n = arguments.length > 2 ? arguments[2] : void 0,
                    r = a(e);
                  if (r.length > 0)
                    for (var o = 0; o < r.length; o++) {
                      var s = r[o],
                        i = s.innerHTML;
                      s && 3 !== s.nodeType ? (s.innerHTML = "", b.addEventToQueue(f, {
                        node: s,
                        parentNode: t
                      }), n ? b.pasteString(i, s) : b.typeString(i, s)) : s.textContent && (n ? b.pasteString(s.textContent, t) : b.typeString(s.textContent, t))
                    }
                  return b
                })), N(this, "deleteAll", (function() {
                  var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : "natural";
                  return b.addEventToQueue(l, {
                    speed: e
                  }), b
                })), N(this, "changeDeleteSpeed", (function(e) {
                  if (!e) throw new Error("Must provide new delete speed");
                  return b.addEventToQueue(v, {
                    speed: e
                  }), b
                })), N(this, "changeDelay", (function(e) {
                  if (!e) throw new Error("Must provide new delay");
                  return b.addEventToQueue(h, {
                    delay: e
                  }), b
                })), N(this, "changeCursor", (function(e) {
                  if (!e) throw new Error("Must provide new cursor");
                  return b.addEventToQueue(m, {
                    cursor: e
                  }), b
                })), N(this, "deleteChars", (function(e) {
                  if (!e) throw new Error("Must provide amount of characters to delete");
                  for (var t = 0; t < e; t++) b.addEventToQueue(u);
                  return b
                })), N(this, "callFunction", (function(e, t) {
                  if (!e || "function" != typeof e) throw new Error("Callbak must be a function");
                  return b.addEventToQueue(d, {
                    cb: e,
                    thisArg: t
                  }), b
                })), N(this, "typeCharacters", (function(e) {
                  var t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : null;
                  if (!e || !Array.isArray(e)) throw new Error("Characters must be an array");
                  return e.forEach((function(e) {
                    b.addEventToQueue(i, {
                      character: e,
                      node: t
                    })
                  })), b
                })), N(this, "removeCharacters", (function(e) {
                  if (!e || !Array.isArray(e)) throw new Error("Characters must be an array");
                  return e.forEach((function() {
                    b.addEventToQueue(u)
                  })), b
                })), N(this, "addEventToQueue", (function(e, t) {
                  var n = arguments.length > 2 && void 0 !== arguments[2] && arguments[2];
                  return b.addEventToStateProperty(e, t, n, "eventQueue")
                })), N(this, "addReverseCalledEvent", (function(e, t) {
                  var n = arguments.length > 2 && void 0 !== arguments[2] && arguments[2],
                    r = b.options.loop;
                  return r ? b.addEventToStateProperty(e, t, n, "reverseCalledEvents") : b
                })), N(this, "addEventToStateProperty", (function(e, t) {
                  var n = arguments.length > 2 && void 0 !== arguments[2] && arguments[2],
                    r = arguments.length > 3 ? arguments[3] : void 0,
                    o = {
                      eventName: e,
                      eventArgs: t || {}
                    };
                  return b.state[r] = n ? [o].concat(T(b.state[r])) : [].concat(T(b.state[r]), [o]), b
                })), N(this, "runEventLoop", (function() {
                  b.state.lastFrameTime || (b.state.lastFrameTime = Date.now());
                  var e = Date.now(),
                    n = e - b.state.lastFrameTime;
                  if (!b.state.eventQueue.length) {
                    if (!b.options.loop) return;
                    b.state.eventQueue = T(b.state.calledEvents), b.state.calledEvents = [], b.options = w({}, b.state.initialOptions)
                  }
                  if (b.state.eventLoop = t()(b.runEventLoop), !b.state.eventLoopPaused) {
                    if (b.state.pauseUntil) {
                      if (e < b.state.pauseUntil) return;
                      b.state.pauseUntil = null
                    }
                    var r, o = T(b.state.eventQueue),
                      a = o.shift();
                    if (!(n <= (r = a.eventName === c || a.eventName === u ? "natural" === b.options.deleteSpeed ? s(40, 80) : b.options.deleteSpeed : "natural" === b.options.delay ? s(120, 160) : b.options.delay))) {
                      var E = a.eventName,
                        A = a.eventArgs;
                      switch (b.logInDevMode({
                        currentEvent: a,
                        state: b.state,
                        delay: r
                      }), E) {
                        case y:
                        case i:
                          var N = A.character,
                            S = A.node,
                            C = document.createTextNode(N),
                            _ = C;
                          b.options.onCreateTextNode && "function" == typeof b.options.onCreateTextNode && (_ = b.options.onCreateTextNode(N, C)), _ && (S ? S.appendChild(_) : b.state.elements.wrapper.appendChild(_)), b.state.visibleNodes = [].concat(T(b.state.visibleNodes), [{
                            type: "TEXT_NODE",
                            character: N,
                            node: _
                          }]);
                          break;
                        case u:
                          o.unshift({
                            eventName: c,
                            eventArgs: {
                              removingCharacterNode: !0
                            }
                          });
                          break;
                        case p:
                          var O = a.eventArgs.ms;
                          b.state.pauseUntil = Date.now() + parseInt(O);
                          break;
                        case d:
                          var L = a.eventArgs,
                            D = L.cb,
                            M = L.thisArg;
                          D.call(M, {
                            elements: b.state.elements
                          });
                          break;
                        case f:
                          var x = a.eventArgs,
                            P = x.node,
                            R = x.parentNode;
                          R ? R.appendChild(P) : b.state.elements.wrapper.appendChild(P), b.state.visibleNodes = [].concat(T(b.state.visibleNodes), [{
                            type: g,
                            node: P,
                            parentNode: R || b.state.elements.wrapper
                          }]);
                          break;
                        case l:
                          var j = b.state.visibleNodes,
                            k = A.speed,
                            Q = [];
                          k && Q.push({
                            eventName: v,
                            eventArgs: {
                              speed: k,
                              temp: !0
                            }
                          });
                          for (var F = 0, H = j.length; F < H; F++) Q.push({
                            eventName: c,
                            eventArgs: {
                              removingCharacterNode: !1
                            }
                          });
                          k && Q.push({
                            eventName: v,
                            eventArgs: {
                              speed: b.options.deleteSpeed,
                              temp: !0
                            }
                          }), o.unshift.apply(o, Q);
                          break;
                        case c:
                          var I = a.eventArgs.removingCharacterNode;
                          if (b.state.visibleNodes.length) {
                            var U = b.state.visibleNodes.pop(),
                              q = U.type,
                              G = U.node,
                              Y = U.character;
                            b.options.onRemoveNode && "function" == typeof b.options.onRemoveNode && b.options.onRemoveNode({
                              node: G,
                              character: Y
                            }), G && G.parentNode.removeChild(G), q === g && I && o.unshift({
                              eventName: c,
                              eventArgs: {}
                            })
                          }
                          break;
                        case v:
                          b.options.deleteSpeed = a.eventArgs.speed;
                          break;
                        case h:
                          b.options.delay = a.eventArgs.delay;
                          break;
                        case m:
                          b.options.cursor = a.eventArgs.cursor, b.state.elements.cursor.innerHTML = a.eventArgs.cursor
                      }
                      b.options.loop && (a.eventName === c || a.eventArgs && a.eventArgs.temp || (b.state.calledEvents = [].concat(T(b.state.calledEvents), [a]))), b.state.eventQueue = o, b.state.lastFrameTime = e
                    }
                  }
                })), r)
                if ("string" == typeof r) {
                  var A = document.querySelector(r);
                  if (!A) throw new Error("Could not find container element");
                  this.state.elements.container = A
                } else this.state.elements.container = r;
              E && (this.options = w(w({}, this.options), E)), this.state.initialOptions = w({}, this.options), this.init()
            }
            var r, E;
            return r = n, (E = [{
              key: "init",
              value: function() {
                var e, t;
                this.setupWrapperElement(), this.addEventToQueue(m, {
                  cursor: this.options.cursor
                }, !0), this.addEventToQueue(l, null, !0), !window || window.___TYPEWRITER_JS_STYLES_ADDED___ || this.options.skipAddStyles || (e = ".Typewriter__cursor{-webkit-animation:Typewriter-cursor 1s infinite;animation:Typewriter-cursor 1s infinite;margin-left:1px}@-webkit-keyframes Typewriter-cursor{0%{opacity:0}50%{opacity:1}100%{opacity:0}}@keyframes Typewriter-cursor{0%{opacity:0}50%{opacity:1}100%{opacity:0}}", (t = document.createElement("style")).appendChild(document.createTextNode(e)), document.head.appendChild(t), window.___TYPEWRITER_JS_STYLES_ADDED___ = !0), !0 === this.options.autoStart && this.options.strings && this.typeOutAllStrings().start()
              }
            }, {
              key: "logInDevMode",
              value: function(e) {
                this.options.devMode && console.log(e)
              }
            }]) && A(r.prototype, E), n
          }()
        })(), r.default
      })()
    }));
  </script>

  <!-- prettier-ignore -->
  <script>
    /* https://github.com/faisalman/ua-parser-js */
    (function(k, e) {
      var C = function(b, d) {
          var c = {},
            f;
          for (f in b) c[f] = d[f] && 0 === d[f].length % 2 ? d[f].concat(b[f]) : b[f];
          return c
        },
        t = function(b) {
          for (var d = {}, c = 0; c < b.length; c++) d[b[c].toUpperCase()] = b[c];
          return d
        },
        x = function(b, d) {
          return "string" === typeof b ? -1 !== r(d).indexOf(r(b)) : !1
        },
        r = function(b) {
          return b.toLowerCase()
        },
        w = function(b, d) {
          if ("string" === typeof b) return b = b.replace(/^\s\s*/, "").replace(/\s\s*$/, ""), "undefined" === typeof d ? b : b.substring(0, 255)
        },
        p = function(b, d) {
          for (var c = 0, f, n, g, a, m, l; c < d.length && !m;) {
            var y =
              d[c],
              z = d[c + 1];
            for (f = n = 0; f < y.length && !m;)
              if (m = y[f++].exec(b))
                for (g = 0; g < z.length; g++) l = m[++n], a = z[g], "object" === typeof a && 0 < a.length ? 2 === a.length ? this[a[0]] = "function" == typeof a[1] ? a[1].call(this, l) : a[1] : 3 === a.length ? this[a[0]] = "function" !== typeof a[1] || a[1].exec && a[1].test ? l ? l.replace(a[1], a[2]) : e : l ? a[1].call(this, l, a[2]) : e : 4 === a.length && (this[a[0]] = l ? a[3].call(this, l.replace(a[1], a[2])) : e) : this[a] = l ? l : e;
            c += 2
          }
        },
        u = function(b, d) {
          for (var c in d)
            if ("object" === typeof d[c] && 0 < d[c].length)
              for (var f = 0; f < d[c].length; f++) {
                if (x(d[c][f],
                    b)) return "?" === c ? e : c
              } else if (x(d[c], b)) return "?" === c ? e : c;
          return b
        },
        A = {
          ME: "4.90",
          "NT 3.11": "NT3.51",
          "NT 4.0": "NT4.0",
          2E3: "NT 5.0",
          XP: ["NT 5.1", "NT 5.2"],
          Vista: "NT 6.0",
          7: "NT 6.1",
          8: "NT 6.2",
          "8.1": "NT 6.3",
          10: ["NT 6.4", "NT 10.0"],
          RT: "ARM"
        },
        B = {
          browser: [
            [/\b(?:crmo|crios)\/([\w\.]+)/i],
            ["version", ["name", "Chrome"]],
            [/edg(?:e|ios|a)?\/([\w\.]+)/i],
            ["version", ["name", "Edge"]],
            [/(opera mini)\/([-\w\.]+)/i, /(opera [mobiletab]{3,6})\b.+version\/([-\w\.]+)/i, /(opera)(?:.+version\/|[\/ ]+)([\w\.]+)/i],
            ["name",
              "version"
            ],
            [/opios[\/ ]+([\w\.]+)/i],
            ["version", ["name", "Opera Mini"]],
            [/\bopr\/([\w\.]+)/i],
            ["version", ["name", "Opera"]],
            [/(kindle)\/([\w\.]+)/i, /(lunascape|maxthon|netfront|jasmine|blazer)[\/ ]?([\w\.]*)/i, /(avant |iemobile|slim)(?:browser)?[\/ ]?([\w\.]*)/i, /(ba?idubrowser)[\/ ]?([\w\.]+)/i, /(?:ms|\()(ie) ([\w\.]+)/i, /(flock|rockmelt|midori|epiphany|silk|skyfire|ovibrowser|bolt|iron|vivaldi|iridium|phantomjs|bowser|quark|qupzilla|falkon|rekonq|puffin|brave|whale|qqbrowserlite|qq)\/([-\w\.]+)/i,
              /(weibo)__([\d\.]+)/i
            ],
            ["name", "version"],
            [/(?:\buc? ?browser|(?:juc.+)ucweb)[\/ ]?([\w\.]+)/i],
            ["version", ["name", "UCBrowser"]],
            [/\bqbcore\/([\w\.]+)/i],
            ["version", ["name", "WeChat(Win) Desktop"]],
            [/micromessenger\/([\w\.]+)/i],
            ["version", ["name", "WeChat"]],
            [/konqueror\/([\w\.]+)/i],
            ["version", ["name", "Konqueror"]],
            [/trident.+rv[: ]([\w\.]{1,9})\b.+like gecko/i],
            ["version", ["name", "IE"]],
            [/yabrowser\/([\w\.]+)/i],
            ["version", ["name", "Yandex"]],
            [/(avast|avg)\/([\w\.]+)/i],
            [
              ["name", /(.+)/, "$1 Secure Browser"],
              "version"
            ],
            [/\bfocus\/([\w\.]+)/i],
            ["version", ["name", "Firefox Focus"]],
            [/\bopt\/([\w\.]+)/i],
            ["version", ["name", "Opera Touch"]],
            [/coc_coc\w+\/([\w\.]+)/i],
            ["version", ["name", "Coc Coc"]],
            [/dolfin\/([\w\.]+)/i],
            ["version", ["name", "Dolphin"]],
            [/coast\/([\w\.]+)/i],
            ["version", ["name", "Opera Coast"]],
            [/miuibrowser\/([\w\.]+)/i],
            ["version", ["name", "MIUI Browser"]],
            [/fxios\/([-\w\.]+)/i],
            ["version", ["name", "Firefox"]],
            [/\bqihu|(qi?ho?o?|360)browser/i],
            [
              ["name", "360 Browser"]
            ],
            [/(oculus|samsung|sailfish)browser\/([\w\.]+)/i],
            [
              ["name", /(.+)/, "$1 Browser"], "version"
            ],
            [/(comodo_dragon)\/([\w\.]+)/i],
            [
              ["name", /_/g, " "], "version"
            ],
            [/(electron)\/([\w\.]+) safari/i, /(tesla)(?: qtcarbrowser|\/(20\d\d\.[-\w\.]+))/i, /m?(qqbrowser|baiduboxapp|2345Explorer)[\/ ]?([\w\.]+)/i],
            ["name", "version"],
            [/(metasr)[\/ ]?([\w\.]+)/i, /(lbbrowser)/i],
            ["name"],
            [/((?:fban\/fbios|fb_iab\/fb4a)(?!.+fbav)|;fbav\/([\w\.]+);)/i],
            [
              ["name", "Facebook"], "version"
            ],
            [/safari (line)\/([\w\.]+)/i, /\b(line)\/([\w\.]+)\/iab/i, /(chromium|instagram)[\/ ]([-\w\.]+)/i],
            ["name", "version"],
            [/\bgsa\/([\w\.]+) .*safari\//i],
            ["version", ["name", "GSA"]],
            [/headlesschrome(?:\/([\w\.]+)| )/i],
            ["version", ["name", "Chrome Headless"]],
            [/ wv\).+(chrome)\/([\w\.]+)/i],
            [
              ["name", "Chrome WebView"], "version"
            ],
            [/droid.+ version\/([\w\.]+)\b.+(?:mobile safari|safari)/i],
            ["version", ["name", "Android Browser"]],
            [/(chrome|omniweb|arora|[tizenoka]{5} ?browser)\/v?([\w\.]+)/i],
            ["name", "version"],
            [/version\/([\w\.]+) .*mobile\/\w+ (safari)/i],
            ["version", ["name", "Mobile Safari"]],
            [/version\/([\w\.]+) .*(mobile ?safari|safari)/i],
            ["version", "name"],
            [/webkit.+?(mobile ?safari|safari)(\/[\w\.]+)/i],
            ["name", ["version", u, {
              "1.0": "/8",
              "1.2": "/1",
              "1.3": "/3",
              "2.0": "/412",
              "2.0.2": "/416",
              "2.0.3": "/417",
              "2.0.4": "/419",
              "?": "/"
            }]],
            [/(webkit|khtml)\/([\w\.]+)/i],
            ["name", "version"],
            [/(navigator|netscape\d?)\/([-\w\.]+)/i],
            [
              ["name", "Netscape"], "version"
            ],
            [/mobile vr; rv:([\w\.]+)\).+firefox/i],
            ["version", ["name", "Firefox Reality"]],
            [/ekiohf.+(flow)\/([\w\.]+)/i, /(swiftfox)/i, /(icedragon|iceweasel|camino|chimera|fennec|maemo browser|minimo|conkeror|klar)[\/ ]?([\w\.\+]+)/i,
              /(seamonkey|k-meleon|icecat|iceape|firebird|phoenix|palemoon|basilisk|waterfox)\/([-\w\.]+)$/i, /(firefox)\/([\w\.]+)/i, /(mozilla)\/([\w\.]+) .+rv:.+gecko\/\d+/i, /(polaris|lynx|dillo|icab|doris|amaya|w3m|netsurf|sleipnir|obigo|mosaic|(?:go|ice|up)[\. ]?browser)[-\/ ]?v?([\w\.]+)/i, /(links) \(([\w\.]+)/i
            ],
            ["name", "version"]
          ],
          cpu: [
            [/(?:(amd|x(?:(?:86|64)[-_])?|wow|win)64)[;\)]/i],
            [
              ["architecture", "amd64"]
            ],
            [/(ia32(?=;))/i],
            [
              ["architecture", r]
            ],
            [/((?:i[346]|x)86)[;\)]/i],
            [
              ["architecture", "ia32"]
            ],
            [/\b(aarch64|arm(v?8e?l?|_?64))\b/i],
            [
              ["architecture", "arm64"]
            ],
            [/\b(arm(?:v[67])?ht?n?[fl]p?)\b/i],
            [
              ["architecture", "armhf"]
            ],
            [/windows (ce|mobile); ppc;/i],
            [
              ["architecture", "arm"]
            ],
            [/((?:ppc|powerpc)(?:64)?)(?: mac|;|\))/i],
            [
              ["architecture", /ower/, "", r]
            ],
            [/(sun4\w)[;\)]/i],
            [
              ["architecture", "sparc"]
            ],
            [/((?:avr32|ia64(?=;))|68k(?=\))|\barm(?=v(?:[1-7]|[5-7]1)l?|;|eabi)|(?=atmel )avr|(?:irix|mips|sparc)(?:64)?\b|pa-risc)/i],
            [
              ["architecture", r]
            ]
          ],
          device: [
            [/\b(sch-i[89]0\d|shw-m380s|sm-[pt]\w{2,4}|gt-[pn]\d{2,4}|sgh-t8[56]9|nexus 10)/i],
            ["model", ["vendor", "Samsung"],
              ["type", "tablet"]
            ],
            [/\b((?:s[cgp]h|gt|sm)-\w+|galaxy nexus)/i, /samsung[- ]([-\w]+)/i, /sec-(sgh\w+)/i],
            ["model", ["vendor", "Samsung"],
              ["type", "mobile"]
            ],
            [/\((ip(?:hone|od)[\w ]*);/i],
            ["model", ["vendor", "Apple"],
              ["type", "mobile"]
            ],
            [/\((ipad);[-\w\),; ]+apple/i, /applecoremedia\/[\w\.]+ \((ipad)/i, /\b(ipad)\d\d?,\d\d?[;\]].+ios/i],
            ["model", ["vendor", "Apple"],
              ["type", "tablet"]
            ],
            [/\b((?:ag[rs][23]?|bah2?|sht?|btv)-a?[lw]\d{2})\b(?!.+d\/s)/i],
            ["model", ["vendor", "Huawei"],
              ["type",
                "tablet"
              ]
            ],
            [/(?:huawei|honor)([-\w ]+)[;\)]/i, /\b(nexus 6p|\w{2,4}-[atu]?[ln][01259x][012359][an]?)\b(?!.+d\/s)/i],
            ["model", ["vendor", "Huawei"],
              ["type", "mobile"]
            ],
            [/\b(poco[\w ]+)(?: bui|\))/i, /\b; (\w+) build\/hm\1/i, /\b(hm[-_ ]?note?[_ ]?(?:\d\w)?) bui/i, /\b(redmi[\-_ ]?(?:note|k)?[\w_ ]+)(?: bui|\))/i, /\b(mi[-_ ]?(?:a\d|one|one[_ ]plus|note lte|max)?[_ ]?(?:\d?\w?)[_ ]?(?:plus|se|lite)?)(?: bui|\))/i],
            [
              ["model", /_/g, " "],
              ["vendor", "Xiaomi"],
              ["type", "mobile"]
            ],
            [/\b(mi[-_ ]?(?:pad)(?:[\w_ ]+))(?: bui|\))/i],
            [
              ["model", /_/g, " "],
              ["vendor", "Xiaomi"],
              ["type", "tablet"]
            ],
            [/; (\w+) bui.+ oppo/i, /\b(cph[12]\d{3}|p(?:af|c[al]|d\w|e[ar])[mt]\d0|x9007|a101op)\b/i],
            ["model", ["vendor", "OPPO"],
              ["type", "mobile"]
            ],
            [/vivo (\w+)(?: bui|\))/i, /\b(v[12]\d{3}\w?[at])(?: bui|;)/i],
            ["model", ["vendor", "Vivo"],
              ["type", "mobile"]
            ],
            [/\b(rmx[12]\d{3})(?: bui|;|\))/i],
            ["model", ["vendor", "Realme"],
              ["type", "mobile"]
            ],
            [/\b(milestone|droid(?:[2-4x]| (?:bionic|x2|pro|razr))?:?( 4g)?)\b[\w ]+build\//i, /\bmot(?:orola)?[- ](\w*)/i, /((?:moto[\w\(\) ]+|xt\d{3,4}|nexus 6)(?= bui|\)))/i],
            ["model", ["vendor", "Motorola"],
              ["type", "mobile"]
            ],
            [/\b(mz60\d|xoom[2 ]{0,2}) build\//i],
            ["model", ["vendor", "Motorola"],
              ["type", "tablet"]
            ],
            [/((?=lg)?[vl]k\-?\d{3}) bui| 3\.[-\w; ]{10}lg?-([06cv9]{3,4})/i],
            ["model", ["vendor", "LG"],
              ["type", "tablet"]
            ],
            [/(lm(?:-?f100[nv]?|-[\w\.]+)(?= bui|\))|nexus [45])/i, /\blg[-e;\/ ]+((?!browser|netcast|android tv)\w+)/i, /\blg-?([\d\w]+) bui/i],
            ["model", ["vendor", "LG"],
              ["type", "mobile"]
            ],
            [/(ideatab[-\w ]+)/i, /lenovo ?(s[56]000[-\w]+|tab(?:[\w ]+)|yt[-\d\w]{6}|tb[-\d\w]{6})/i],
            ["model", ["vendor", "Lenovo"],
              ["type", "tablet"]
            ],
            [/(?:maemo|nokia).*(n900|lumia \d+)/i, /nokia[-_ ]?([-\w\.]*)/i],
            [
              ["model", /_/g, " "],
              ["vendor", "Nokia"],
              ["type", "mobile"]
            ],
            [/(pixel c)\b/i],
            ["model", ["vendor", "Google"],
              ["type", "tablet"]
            ],
            [/droid.+; (pixel[\daxl ]{0,6})(?: bui|\))/i],
            ["model", ["vendor", "Google"],
              ["type", "mobile"]
            ],
            [/droid.+ ([c-g]\d{4}|so[-gl]\w+|xq-a\w[4-7][12])(?= bui|\).+chrome\/(?![1-6]{0,1}\d\.))/i],
            ["model", ["vendor", "Sony"],
              ["type", "mobile"]
            ],
            [/sony tablet [ps]/i, /\b(?:sony)?sgp\w+(?: bui|\))/i],
            [
              ["model", "Xperia Tablet"],
              ["vendor", "Sony"],
              ["type", "tablet"]
            ],
            [/ (kb2005|in20[12]5|be20[12][59])\b/i, /(?:one)?(?:plus)? (a\d0\d\d)(?: b|\))/i],
            ["model", ["vendor", "OnePlus"],
              ["type", "mobile"]
            ],
            [/(alexa)webm/i, /(kf[a-z]{2}wi)( bui|\))/i, /(kf[a-z]+)( bui|\)).+silk\//i],
            ["model", ["vendor", "Amazon"],
              ["type", "tablet"]
            ],
            [/((?:sd|kf)[0349hijorstuw]+)( bui|\)).+silk\//i],
            [
              ["model", /(.+)/g, "Fire Phone $1"],
              ["vendor", "Amazon"],
              ["type", "mobile"]
            ],
            [/(playbook);[-\w\),; ]+(rim)/i],
            ["model", "vendor", ["type", "tablet"]],
            [/\b((?:bb[a-f]|st[hv])100-\d)/i, /\(bb10; (\w+)/i],
            ["model", ["vendor", "BlackBerry"],
              ["type", "mobile"]
            ],
            [/(?:\b|asus_)(transfo[prime ]{4,10} \w+|eeepc|slider \w+|nexus 7|padfone|p00[cj])/i],
            ["model", ["vendor", "ASUS"],
              ["type", "tablet"]
            ],
            [/ (z[bes]6[027][012][km][ls]|zenfone \d\w?)\b/i],
            ["model", ["vendor", "ASUS"],
              ["type", "mobile"]
            ],
            [/(nexus 9)/i],
            ["model", ["vendor", "HTC"],
              ["type", "tablet"]
            ],
            [/(htc)[-;_ ]{1,2}([\w ]+(?=\)| bui)|\w+)/i, /(zte)[- ]([\w ]+?)(?: bui|\/|\))/i, /(alcatel|geeksphone|nexian|panasonic|sony)[-_ ]?([-\w]*)/i],
            ["vendor", ["model", /_/g, " "],
              ["type", "mobile"]
            ],
            [/droid.+; ([ab][1-7]-?[0178a]\d\d?)/i],
            ["model", ["vendor", "Acer"],
              ["type", "tablet"]
            ],
            [/droid.+; (m[1-5] note) bui/i, /\bmz-([-\w]{2,})/i],
            ["model", ["vendor", "Meizu"],
              ["type", "mobile"]
            ],
            [/\b(sh-?[altvz]?\d\d[a-ekm]?)/i],
            ["model", ["vendor", "Sharp"],
              ["type", "mobile"]
            ],
            [/(blackberry|benq|palm(?=\-)|sonyericsson|acer|asus|dell|meizu|motorola|polytron)[-_ ]?([-\w]*)/i, /(hp) ([\w ]+\w)/i, /(asus)-?(\w+)/i, /(microsoft); (lumia[\w ]+)/i, /(lenovo)[-_ ]?([-\w]+)/i,
              /(jolla)/i, /(oppo) ?([\w ]+) bui/i
            ],
            ["vendor", "model", ["type", "mobile"]],
            [/(archos) (gamepad2?)/i, /(hp).+(touchpad(?!.+tablet)|tablet)/i, /(kindle)\/([\w\.]+)/i, /(nook)[\w ]+build\/(\w+)/i, /(dell) (strea[kpr\d ]*[\dko])/i, /(le[- ]+pan)[- ]+(\w{1,9}) bui/i, /(trinity)[- ]*(t\d{3}) bui/i, /(gigaset)[- ]+(q\w{1,9}) bui/i, /(vodafone) ([\w ]+)(?:\)| bui)/i],
            ["vendor", "model", ["type", "tablet"]],
            [/(surface duo)/i],
            ["model", ["vendor", "Microsoft"],
              ["type", "tablet"]
            ],
            [/droid [\d\.]+; (fp\du?)(?: b|\))/i],
            ["model",
              ["vendor", "Fairphone"],
              ["type", "mobile"]
            ],
            [/(u304aa)/i],
            ["model", ["vendor", "AT&T"],
              ["type", "mobile"]
            ],
            [/\bsie-(\w*)/i],
            ["model", ["vendor", "Siemens"],
              ["type", "mobile"]
            ],
            [/\b(rct\w+) b/i],
            ["model", ["vendor", "RCA"],
              ["type", "tablet"]
            ],
            [/\b(venue[\d ]{2,7}) b/i],
            ["model", ["vendor", "Dell"],
              ["type", "tablet"]
            ],
            [/\b(q(?:mv|ta)\w+) b/i],
            ["model", ["vendor", "Verizon"],
              ["type", "tablet"]
            ],
            [/\b(?:barnes[& ]+noble |bn[rt])([\w\+ ]*) b/i],
            ["model", ["vendor", "Barnes & Noble"],
              ["type", "tablet"]
            ],
            [/\b(tm\d{3}\w+) b/i],
            ["model", ["vendor", "NuVision"],
              ["type", "tablet"]
            ],
            [/\b(k88) b/i],
            ["model", ["vendor", "ZTE"],
              ["type", "tablet"]
            ],
            [/\b(nx\d{3}j) b/i],
            ["model", ["vendor", "ZTE"],
              ["type", "mobile"]
            ],
            [/\b(gen\d{3}) b.+49h/i],
            ["model", ["vendor", "Swiss"],
              ["type", "mobile"]
            ],
            [/\b(zur\d{3}) b/i],
            ["model", ["vendor", "Swiss"],
              ["type", "tablet"]
            ],
            [/\b((zeki)?tb.*\b) b/i],
            ["model", ["vendor", "Zeki"],
              ["type", "tablet"]
            ],
            [/\b([yr]\d{2}) b/i, /\b(dragon[- ]+touch |dt)(\w{5}) b/i],
            [
              ["vendor", "Dragon Touch"], "model", ["type", "tablet"]
            ],
            [/\b(ns-?\w{0,9}) b/i],
            ["model", ["vendor", "Insignia"],
              ["type", "tablet"]
            ],
            [/\b((nxa|next)-?\w{0,9}) b/i],
            ["model", ["vendor", "NextBook"],
              ["type", "tablet"]
            ],
            [/\b(xtreme_)?(v(1[045]|2[015]|[3469]0|7[05])) b/i],
            [
              ["vendor", "Voice"], "model", ["type", "mobile"]
            ],
            [/\b(lvtel\-)?(v1[12]) b/i],
            [
              ["vendor", "LvTel"], "model", ["type", "mobile"]
            ],
            [/\b(ph-1) /i],
            ["model", ["vendor", "Essential"],
              ["type", "mobile"]
            ],
            [/\b(v(100md|700na|7011|917g).*\b) b/i],
            ["model", ["vendor", "Envizen"],
              ["type", "tablet"]
            ],
            [/\b(trio[-\w\. ]+) b/i],
            ["model", ["vendor",
                "MachSpeed"
              ],
              ["type", "tablet"]
            ],
            [/\btu_(1491) b/i],
            ["model", ["vendor", "Rotor"],
              ["type", "tablet"]
            ],
            [/(shield[\w ]+) b/i],
            ["model", ["vendor", "Nvidia"],
              ["type", "tablet"]
            ],
            [/(sprint) (\w+)/i],
            ["vendor", "model", ["type", "mobile"]],
            [/(kin\.[onetw]{3})/i],
            [
              ["model", /\./g, " "],
              ["vendor", "Microsoft"],
              ["type", "mobile"]
            ],
            [/droid.+; (cc6666?|et5[16]|mc[239][23]x?|vc8[03]x?)\)/i],
            ["model", ["vendor", "Zebra"],
              ["type", "tablet"]
            ],
            [/droid.+; (ec30|ps20|tc[2-8]\d[kx])\)/i],
            ["model", ["vendor", "Zebra"],
              ["type", "mobile"]
            ],
            [/(ouya)/i, /(nintendo) ([wids3utch]+)/i],
            ["vendor", "model", ["type", "console"]],
            [/droid.+; (shield) bui/i],
            ["model", ["vendor", "Nvidia"],
              ["type", "console"]
            ],
            [/(playstation [345portablevi]+)/i],
            ["model", ["vendor", "Sony"],
              ["type", "console"]
            ],
            [/\b(xbox(?: one)?(?!; xbox))[\); ]/i],
            ["model", ["vendor", "Microsoft"],
              ["type", "console"]
            ],
            [/smart-tv.+(samsung)/i],
            ["vendor", ["type", "smarttv"]],
            [/hbbtv.+maple;(\d+)/i],
            [
              ["model", /^/, "SmartTV"],
              ["vendor", "Samsung"],
              ["type", "smarttv"]
            ],
            [/(nux; netcast.+smarttv|lg (netcast\.tv-201\d|android tv))/i],
            [
              ["vendor", "LG"],
              ["type", "smarttv"]
            ],
            [/(apple) ?tv/i],
            ["vendor", ["model", "Apple TV"],
              ["type", "smarttv"]
            ],
            [/crkey/i],
            [
              ["model", "Chromecast"],
              ["vendor", "Google"],
              ["type", "smarttv"]
            ],
            [/droid.+aft(\w)( bui|\))/i],
            ["model", ["vendor", "Amazon"],
              ["type", "smarttv"]
            ],
            [/\(dtv[\);].+(aquos)/i],
            ["model", ["vendor", "Sharp"],
              ["type", "smarttv"]
            ],
            [/\b(roku)[\dx]*[\)\/]((?:dvp-)?[\d\.]*)/i, /hbbtv\/\d+\.\d+\.\d+ +\([\w ]*; *(\w[^;]*);([^;]*)/i],
            [
              ["vendor", w],
              ["model", w],
              ["type", "smarttv"]
            ],
            [/\b(android tv|smart[- ]?tv|opera tv|tv; rv:)\b/i],
            [
              ["type", "smarttv"]
            ],
            [/((pebble))app/i],
            ["vendor", "model", ["type", "wearable"]],
            [/droid.+; (glass) \d/i],
            ["model", ["vendor", "Google"],
              ["type", "wearable"]
            ],
            [/droid.+; (wt63?0{2,3})\)/i],
            ["model", ["vendor", "Zebra"],
              ["type", "wearable"]
            ],
            [/(quest( 2)?)/i],
            ["model", ["vendor", "Facebook"],
              ["type", "wearable"]
            ],
            [/(tesla)(?: qtcarbrowser|\/[-\w\.]+)/i],
            ["vendor", ["type", "embedded"]],
            [/droid .+?; ([^;]+?)(?: bui|\) applew).+? mobile safari/i],
            ["model", ["type", "mobile"]],
            [/droid .+?; ([^;]+?)(?: bui|\) applew).+?(?! mobile) safari/i],
            ["model", ["type", "tablet"]],
            [/\b((tablet|tab)[;\/]|focus\/\d(?!.+mobile))/i],
            [
              ["type", "tablet"]
            ],
            [/(phone|mobile(?:[;\/]| safari)|pda(?=.+windows ce))/i],
            [
              ["type", "mobile"]
            ],
            [/(android[-\w\. ]{0,9});.+buil/i],
            ["model", ["vendor", "Generic"]]
          ],
          engine: [
            [/windows.+ edge\/([\w\.]+)/i],
            ["version", ["name", "EdgeHTML"]],
            [/webkit\/537\.36.+chrome\/(?!27)([\w\.]+)/i],
            ["version", ["name", "Blink"]],
            [/(presto)\/([\w\.]+)/i, /(webkit|trident|netfront|netsurf|amaya|lynx|w3m|goanna)\/([\w\.]+)/i, /ekioh(flow)\/([\w\.]+)/i,
              /(khtml|tasman|links)[\/ ]\(?([\w\.]+)/i, /(icab)[\/ ]([23]\.[\d\.]+)/i
            ],
            ["name", "version"],
            [/rv:([\w\.]{1,9})\b.+(gecko)/i],
            ["version", "name"]
          ],
          gpu: [
            [/(intel|nvidia|sis|amd|apple|powervr)\W? (.+)/i, /(((?:radeon|adreno|geforce|mali).+))/i],
            [
              ["vendor", u, {
                AMD: "Radeon",
                ARM: "Mali",
                NVIDIA: "GeForce",
                Qualcomm: "Adreno"
              }],
              ["model", / ?(\(.+?\)| direct3d.+| opengl.+|\/.+$| gpu$)/gi, ""]
            ]
          ],
          os: [
            [/microsoft (windows) (vista|xp)/i],
            ["name", "version"],
            [/(windows) nt 6\.2; (arm)/i, /(windows (?:phone(?: os)?|mobile))[\/ ]?([\d\.\w ]*)/i,
              /(windows)[\/ ]?([ntce\d\. ]+\w)(?!.+xbox)/i
            ],
            ["name", ["version", u, A]],
            [/(win(?=3|9|n)|win 9x )([nt\d\.]+)/i],
            [
              ["name", "Windows"],
              ["version", u, A]
            ],
            [/ip[honead]{2,4}\b(?:.*os ([\w]+) like mac|; opera)/i, /cfnetwork\/.+darwin/i],
            [
              ["version", /_/g, "."],
              ["name", "iOS"]
            ],
            [/(mac os x) ?([\w\. ]*)/i, /(macintosh|mac_powerpc\b)(?!.+haiku)/i],
            [
              ["name", "Mac OS"],
              ["version", /_/g, "."]
            ],
            [/droid ([\w\.]+)\b.+(android[- ]x86)/i],
            ["version", "name"],
            [/(android|webos|qnx|bada|rim tablet os|maemo|meego|sailfish)[-\/ ]?([\w\.]*)/i,
              /(blackberry)\w*\/([\w\.]*)/i, /(tizen|kaios)[\/ ]([\w\.]+)/i, /\((series40);/i
            ],
            ["name", "version"],
            [/\(bb(10);/i],
            ["version", ["name", "BlackBerry"]],
            [/(?:symbian ?os|symbos|s60(?=;)|series60)[-\/ ]?([\w\.]*)/i],
            ["version", ["name", "Symbian"]],
            [/mozilla\/[\d\.]+ \((?:mobile|tablet|tv|mobile; [\w ]+); rv:.+ gecko\/([\w\.]+)/i],
            ["version", ["name", "Firefox OS"]],
            [/web0s;.+rt(tv)/i, /\b(?:hp)?wos(?:browser)?\/([\w\.]+)/i],
            ["version", ["name", "webOS"]],
            [/crkey\/([\d\.]+)/i],
            ["version", ["name", "Chromecast"]],
            [/(cros) [\w]+ ([\w\.]+\w)/i],
            [
              ["name", "Chromium OS"], "version"
            ],
            [/(nintendo|playstation) ([wids345portablevuch]+)/i, /(xbox); +xbox ([^\);]+)/i, /\b(joli|palm)\b ?(?:os)?\/?([\w\.]*)/i, /(mint)[\/\(\) ]?(\w*)/i, /(mageia|vectorlinux)[; ]/i, /([kxln]?ubuntu|debian|suse|opensuse|gentoo|arch(?= linux)|slackware|fedora|mandriva|centos|pclinuxos|red ?hat|zenwalk|linpus|raspbian|plan 9|minix|risc os|contiki|deepin|manjaro|elementary os|sabayon|linspire)(?: gnu\/linux)?(?: enterprise)?(?:[- ]linux)?(?:-gnu)?[-\/ ]?(?!chrom|package)([-\w\.]*)/i,
              /(hurd|linux) ?([\w\.]*)/i, /(gnu) ?([\w\.]*)/i, /\b([-frentopcghs]{0,5}bsd|dragonfly)[\/ ]?(?!amd|[ix346]{1,2}86)([\w\.]*)/i, /(haiku) (\w+)/i
            ],
            ["name", "version"],
            [/(sunos) ?([\w\.\d]*)/i],
            [
              ["name", "Solaris"], "version"
            ],
            [/((?:open)?solaris)[-\/ ]?([\w\.]*)/i, /(aix) ((\d)(?=\.|\)| )[\w\.])*/i, /\b(beos|os\/2|amigaos|morphos|openvms|fuchsia|hp-ux)/i, /(unix) ?([\w\.]*)/i],
            ["name", "version"]
          ]
        },
        h = function(b, d) {
          "object" === typeof b && (d = b, b = e);
          if (!(this instanceof h)) return (new h(b, d)).getResult();
          var c = b ||
            ("undefined" !== typeof k && k.navigator && k.navigator.userAgent ? k.navigator.userAgent : ""),
            f = d ? C(B, d) : B,
            n;
          this.getBrowser = function() {
            var a = {};
            a.name = e;
            a.version = e;
            p.call(a, c, f.browser);
            var m = a.version;
            m = "string" === typeof m ? m.replace(/[^\d\.]/g, "").split(".")[0] : e;
            a.major = m;
            return a
          };
          this.getCPU = function() {
            var a = {};
            a.architecture = e;
            p.call(a, c, f.cpu);
            return a
          };
          this.getDevice = function() {
            var a = {};
            a.vendor = e;
            a.model = e;
            a.type = e;
            p.call(a, c, f.device);
            return a
          };
          this.getEngine = function() {
            var a = {};
            a.name = e;
            a.version =
              e;
            p.call(a, c, f.engine);
            return a
          };
          this.getGPU = function() {
            var a = {};
            a.vendor = e;
            a.model = e;
            n && p.call(a, n, f.gpu);
            return a
          };
          this.getOS = function() {
            var a = {};
            a.name = e;
            a.version = e;
            p.call(a, c, f.os);
            return a
          };
          this.getResult = function() {
            return {
              ua: this.getUA(),
              browser: this.getBrowser(),
              engine: this.getEngine(),
              os: this.getOS(),
              device: this.getDevice(),
              cpu: this.getCPU(),
              gpu: this.getGPU()
            }
          };
          this.getRenderer = function() {
            return n
          };
          this.setRenderer = function(a) {
            n = a;
            return this
          };
          this.getUA = function() {
            return c
          };
          this.setUA = function(a) {
            c =
              "string" === typeof a && 255 < a.length ? w(a, 255) : a;
            return this
          };
          this.setUA(c);
          if ("undefined" !== typeof k && k.document) {
            var g = document.createElement("canvas");
            g = g.getContext ? g.getContext("webgl2") || g.getContext("webgl") || g.getContext("experimental-webgl") : e;
            this.setRenderer(g && g.getParameter && g.getExtension && g.getExtension("WEBGL_debug_renderer_info") ? g.getParameter(g.getExtension("WEBGL_debug_renderer_info").UNMASKED_RENDERER_WEBGL) : e)
          }
          return this
        };
      h.VERSION = "1.0.2-gpu-experimental";
      h.BROWSER = t(["name", "version",
        "major"
      ]);
      h.CPU = t(["architecture"]);
      h.DEVICE = t("model vendor type console mobile smarttv tablet wearable embedded".split(" "));
      h.ENGINE = h.OS = t(["name", "version"]);
      "undefined" !== typeof exports ? ("undefined" !== typeof module && module.exports && (exports = module.exports = h), exports.UAParser = h) : "function" === typeof define && define.amd ? define(function() {
        return h
      }) : "undefined" !== typeof k && (k.UAParser = h);
      var q = "undefined" !== typeof k && (k.jQuery || k.Zepto);
      if (q && !q.ua) {
        var v = new h;
        q.ua = v.getResult();
        q.ua.get = function() {
          return v.getUA()
        };
        q.ua.set = function(b) {
          v.setUA(b);
          b = v.getResult();
          for (var d in b) q.ua[d] = b[d]
        }
      }
    })("object" === typeof window ? window : this);
  </script>

  <script>
    var qclIp = "<?php echo get_client_ip(); ?>";
  </script>
  <script>
    // -----------------------------------------------------------------------
    // Compile information about website visitor
    // -----------------------------------------------------------------------
    var qclParser = new UAParser();
    var qclParserResults = qclParser.getResult();

    var qclTypewriterOutputIp = "";
    if (qclIp) {
      qclTypewriterOutputIp +=
        "<span class='terminal__output'>Scanne IP <span style='font-weight: bold;'>" +
        qclIp +
        "</span></span><br>&nbsp;<br>";
    }

    var qclTypewriterOutputDeviceWithDetails = "";
    if (qclParserResults.device.vendor) {
      qclTypewriterOutputDeviceWithDetails +=
        qclParserResults.device.vendor + " ";
    }
    if (qclParserResults.device.model) {
      qclTypewriterOutputDeviceWithDetails +=
        qclParserResults.device.model + " ";
    } else if (
      qclParserResults.device.vendor &&
      qclParserResults.device.type
    ) {
      qclTypewriterOutputDeviceWithDetails +=
        qclCapitalizeFirstLetter(qclParserResults.device.type) + " ";
    } else if (qclParserResults.device.vendor) {
      qclTypewriterOutputDeviceWithDetails += "Device ";
    }
    if (qclParserResults.cpu.architecture) {
      if (qclTypewriterOutputDeviceWithDetails) {
        qclTypewriterOutputDeviceWithDetails +=
          "<span style='font-weight: normal;'>mit </span>";
      }
      qclTypewriterOutputDeviceWithDetails +=
        qclCapitalizeFirstLetter(qclParserResults.cpu.architecture) +
        " Prozessor ";
    }
    if (qclParserResults.gpu.vendor || qclParserResults.gpu.model) {
      if (qclParserResults.cpu.architecture) {
        qclTypewriterOutputDeviceWithDetails +=
          "<span style='font-weight: normal;'>und </span>";
      } else if (
        qclParserResults.device.vendor ||
        qclParserResults.device.model
      ) {
        qclTypewriterOutputDeviceWithDetails +=
          "<span style='font-weight: normal;'>mit </span>";
      }
      if (
        qclParserResults.gpu.vendor &&
        !qclParserResults.gpu.model
        .toLowerCase()
        .includes(qclParserResults.gpu.vendor.toLowerCase())
      ) {
        qclTypewriterOutputDeviceWithDetails +=
          qclParserResults.gpu.vendor + " ";
      }
      if (qclParserResults.gpu.model) {
        qclTypewriterOutputDeviceWithDetails +=
          qclParserResults.gpu.model + " ";
      }
      qclTypewriterOutputDeviceWithDetails += "Grafikchip ";
    }

    if (qclTypewriterOutputDeviceWithDetails) {
      qclTypewriterOutputDeviceWithDetails =
        "<span class='terminal__output'>Gerät: <span style='font-weight: bold;'>" +
        qclTypewriterOutputDeviceWithDetails +
        "</span></span><br>&nbsp;<br>";
    }

    var qclTypewriterOutputOs = "";
    if (qclParserResults.os.name) {
      qclTypewriterOutputOs += qclParserResults.os.name + " ";
      if (qclParserResults.os.version) {
        qclTypewriterOutputOs += qclParserResults.os.version + " ";
      }
    }
    if (qclTypewriterOutputOs) {
      qclTypewriterOutputOs =
        "<span class='terminal__output'>Betriebssystem: <span style='font-weight: bold;'>" +
        qclTypewriterOutputOs +
        "</span></span><br>&nbsp;<br>";
    }

    var qclTypewriterOutputBrowser = "";
    if (qclParserResults.browser.name) {
      qclTypewriterOutputBrowser += qclParserResults.browser.name + " ";
      if (qclParserResults.browser.version) {
        qclTypewriterOutputBrowser += qclParserResults.browser.version + " ";
      }
    }
    if (qclTypewriterOutputBrowser) {
      qclTypewriterOutputBrowser =
        "<span class='terminal__output'>Schwachstellen in <span style='font-weight: bold;'>" +
        qclTypewriterOutputBrowser +
        "</span>gefunden.</span><br>&nbsp;<br>";
    } else {
      qclTypewriterOutputBrowser =
        "<span class='terminal__output'>Schwachstellen in Browser gefunden.</span><br>&nbsp;<br>";
    }

    // -----------------------------------------------------------------------
    // Page content
    // -----------------------------------------------------------------------
    var qclTerminal = document.getElementById("terminal");
    var qclTeaser = document.getElementById("teaser");

    var qclTypewriterTerminal = new Typewriter(qclTerminal, {
      delay: 10,
    });
    qclTypewriterTerminal
      .pasteString("$> ")
      .pauseFor(200)
      .typeString("Scanne Endgerät<br>")
      .pauseFor(250)
      .pasteString(qclTypewriterOutputIp)
      .pauseFor(350)
      .pasteString(qclTypewriterOutputDeviceWithDetails)
      .pauseFor(200)
      .pasteString(qclTypewriterOutputOs)
      .pasteString("$> ")
      .pauseFor(500)
      .typeString("Scanne Browser-Schwachstellen<br>")
      .pauseFor(700)
      .pasteString(qclTypewriterOutputBrowser)
      .pasteString("$> ")
      .pauseFor(450)
      .typeString("Infiltriere Endgerät<br>")
      .pauseFor(250)
      .pasteString(
        "<span class='terminal__output'>Optimiere exploit.js für erkannte Gerätekonfiguration</span><br>&nbsp;<br>"
      )
      .pauseFor(350)
      .pasteString(
        "<span class='terminal__output'>Download exploit.js</span><br>"
      )
      .typeString(
        "<span class='terminal__output'>&#9608;&#9608;&#9608;&#9608;&#9608;&#9608;&#9608;&#9608;&#9608;&#9608;&#9608;&#9608;&#9608;&#9608;&#9608;&#9608;&#9608;&#9608;&#9608;&#9608;&#9608;&#9608;&#9608;&#9608;&#9608;</span><br>&nbsp;<br>"
      )
      .pauseFor(250)
      .pasteString(
        "<span class='terminal__output' style='font-weight: bold;'>Installiere Trojaner</span><br>"
      )
      .changeDelay("natural")
      .typeString(
        "<span class='terminal__output'>&#9608;&#9608;&#9608;&#9608;&#9608;&#9608;&#9608;</span>"
      )
      .pauseFor(100)
      .typeString(
        "<span class='terminal__output'>&#9608;&#9608;&#9608;</span>"
      )
      .callFunction(() => {
        teaser.style.opacity = "1";

        var qclTypewriterTeaser = new Typewriter(qclTeaser, {
          delay: 25,
          cursor: "",
        });
        qclTypewriterTeaser
          .typeString("Sie folgen unbekannte QR-Code-Links?")
          .pauseFor(600)
          .typeString("<br><strong>Das könnte schiefgehen!</strong>")
          .pauseFor(600)
          .typeString("<br>&nbsp;<br>IT-Sicherheit beginnt im Kleinen.")
          .pauseFor(300)
          .typeString(
            "<br>&nbsp;<br><strong>Und bei der Sicherheit Ihrer Produkte </strong>"
          )
          .pauseFor(300)
          .callFunction(() => {
            window.location =
              "https://www.seppmed.de/it-sicherheit-und-software-security/?etcc_cmp=IT-Sicherheit&etcc_med=offline&et_cmp_seg4=QR-Code&etcc_par=&etcc_ctv=via%20qrcodelink.de%2F0e60031d";
          })
          .typeString("<strong><a href='https://www.seppmed.de/it-sicherheit-und-software-security/?etcc_cmp=IT-Sicherheit&etcc_med=offline&et_cmp_seg4=QR-Code&etcc_par=&etcc_ctv=via%20qrcodelink.de%2F0e60031d'>unterstützen Cybersecurity-Profis.</a></strong>")
          .start();
      })
      .start();

    // Helper functions
    function qclCapitalizeFirstLetter(string) {
      return string.charAt(0).toUpperCase() + string.slice(1);
    }
  </script>
</body>

</html>
