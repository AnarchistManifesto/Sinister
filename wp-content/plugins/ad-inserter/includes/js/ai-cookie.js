/*!
 * JavaScript Cookie v2.2.0
 * https://github.com/js-cookie/js-cookie
 *
 * Copyright 2006, 2015 Klaus Hartl & Fagner Brack
 * Released under the MIT license
 */
;(function (factory) {
  var registeredInModuleLoader;
  if (typeof define === 'function' && define.amd) {
    define(factory);
    registeredInModuleLoader = true;
  }
  if (typeof exports === 'object') {
    module.exports = factory();
    registeredInModuleLoader = true;
  }
  if (!registeredInModuleLoader) {
    var OldCookies = window.Cookies;
    var api = window.Cookies = factory();
    api.noConflict = function () {
      window.Cookies = OldCookies;
      return api;
    };
  }
}(function () {
  function extend () {
    var i = 0;
    var result = {};
    for (; i < arguments.length; i++) {
      var attributes = arguments[ i ];
      for (var key in attributes) {
        result[key] = attributes[key];
      }
    }
    return result;
  }

  function decode (s) {
    return s.replace(/(%[0-9A-Z]{2})+/g, decodeURIComponent);
  }

  function init (converter) {
    function api() {}

    function set (key, value, attributes) {
      if (typeof document === 'undefined') {
        return;
      }

      attributes = extend({
        path: '/'
      }, api.defaults, attributes);

      if (typeof attributes.expires === 'number') {
        attributes.expires = new Date(new Date() * 1 + attributes.expires * 864e+5);
      }

      // We're using "expires" because "max-age" is not supported by IE
      attributes.expires = attributes.expires ? attributes.expires.toUTCString() : '';

      try {
        var result = JSON.stringify(value);
        if (/^[\{\[]/.test(result)) {
          value = result;
        }
      } catch (e) {}

      value = converter.write ?
        converter.write(value, key) :
        encodeURIComponent(String(value))
          .replace(/%(23|24|26|2B|3A|3C|3E|3D|2F|3F|40|5B|5D|5E|60|7B|7D|7C)/g, decodeURIComponent);

      key = encodeURIComponent(String(key))
        .replace(/%(23|24|26|2B|5E|60|7C)/g, decodeURIComponent)
        .replace(/[\(\)]/g, escape);

      var stringifiedAttributes = '';
      for (var attributeName in attributes) {
        if (!attributes[attributeName]) {
          continue;
        }
        stringifiedAttributes += '; ' + attributeName;
        if (attributes[attributeName] === true) {
          continue;
        }

        // Considers RFC 6265 section 5.2:
        // ...
        // 3.  If the remaining unparsed-attributes contains a %x3B (";")
        //     character:
        // Consume the characters of the unparsed-attributes up to,
        // not including, the first %x3B (";") character.
        // ...
        stringifiedAttributes += '=' + attributes[attributeName].split(';')[0];
      }

      return (document.cookie = key + '=' + value + stringifiedAttributes);
    }

    function get (key, json) {
      if (typeof document === 'undefined') {
        return;
      }

      var jar = {};
      // To prevent the for loop in the first place assign an empty array
      // in case there are no cookies at all.
      var cookies = document.cookie ? document.cookie.split('; ') : [];
      var i = 0;

      for (; i < cookies.length; i++) {
        var parts = cookies[i].split('=');
        var cookie = parts.slice(1).join('=');

        if (!json && cookie.charAt(0) === '"') {
          cookie = cookie.slice(1, -1);
        }

        try {
          var name = decode(parts[0]);
          cookie = (converter.read || converter)(cookie, name) ||
            decode(cookie);

          if (json) {
            try {
              cookie = JSON.parse(cookie);
            } catch (e) {}
          }

          jar[name] = cookie;

          if (key === name) {
            break;
          }
        } catch (e) {}
      }

      return key ? jar[key] : jar;
    }

    api.set = set;
    api.get = function (key) {
      return get(key, false /* read as raw */);
    };
    api.getJSON = function (key) {
      return get(key, true /* read as json */);
    };
    api.remove = function (key, attributes) {
      set(key, '', extend(attributes, {
        expires: -1
      }));
    };

    api.defaults = {};

    api.withConverter = init;

    return api;
  }

  return init(function () {});
}));



AiCookies = Cookies.noConflict();


function ai_check_block (block) {
  var ai_debug = typeof ai_debugging !== 'undefined'; // 1
//  var ai_debug = false;

  var ai_cookie_name = 'aiBLOCKS';
  var ai_cookie = AiCookies.getJSON (ai_cookie_name);
  ai_debug_cookie_status = '';

  if (ai_cookie == null) {
    ai_cookie = {};
  }

  if (typeof ai_delay_showing_pageviews !== 'undefined') {
    if (!ai_cookie.hasOwnProperty (block)) {
      ai_cookie [block] = {};
    }

    if (!ai_cookie [block].hasOwnProperty ('d')) {
      ai_cookie [block]['d'] = ai_delay_showing_pageviews;

      if (ai_debug) console.log ('AI CHECK block', block, 'NO COOKIE DATA d, delayed for', ai_delay_showing_pageviews, 'pageviews');
    }
  }

  if (ai_cookie.hasOwnProperty (block)) {
    for (var cookie_block_property in ai_cookie [block]) {
      if (cookie_block_property == 'x') {
        var date = new Date();
        var closed_for = ai_cookie [block][cookie_block_property] - Math.round (date.getTime() / 1000);
        if (closed_for > 0) {
          var message = 'closed for ' + closed_for + ' s =' + (closed_for / 3600 / 24) + ' days';
          ai_debug_cookie_status = message;
          if (ai_debug) console.log ('AI CHECK block', block, message);
          if (ai_debug) console.log ('');

          return false;
        } else ai_set_cookie (block, 'x', '');
      } else
      if (cookie_block_property == 'd') {
        if (ai_cookie [block][cookie_block_property] != 0) {
          var message = 'delayed for ' + ai_cookie [block][cookie_block_property] + ' pageviews';
          ai_debug_cookie_status = message;
          if (ai_debug) console.log ('AI CHECK block', block, message);
          if (ai_debug) console.log ('');

          return false;
        }
      }
    }
  }

  ai_debug_cookie_status = 'OK';
  if (ai_debug) console.log ('AI CHECK block', block, 'OK');
  if (ai_debug) console.log ('');

  return true;
}

function ai_load_cookie () {

  var ai_debug = typeof ai_debugging !== 'undefined'; // 2
//  var ai_debug = false;

  var ai_cookie_name = 'aiBLOCKS';
  var ai_cookie = AiCookies.getJSON (ai_cookie_name);

  if (ai_cookie == null) {
    ai_cookie = {};

    if (ai_debug) console.log ('AI COOKIE NOT PRESENT');
  }

  if (ai_debug) console.log ('AI COOKIE LOAD', ai_cookie);

  return ai_cookie;
}

function ai_get_cookie (block, property) {

  var ai_debug = typeof ai_debugging !== 'undefined'; // 3
//  var ai_debug = false;

  var value = '';
  var ai_cookie = ai_load_cookie ();

  if (ai_cookie.hasOwnProperty (block)) {
    if (ai_cookie [block].hasOwnProperty (property)) {
      value = ai_cookie [block][property];
    }
  }

  if (ai_debug) console.log ('AI COOKIE GET block:', block, 'property:', property, 'value:', value);

  return value;
}

function ai_set_cookie (block, property, value) {

  function isEmpty (obj) {
    for (var key in obj) {
        if (obj.hasOwnProperty (key))
          return false;
    }
    return true;
  }

  var ai_cookie_name = 'aiBLOCKS';
  var ai_debug = typeof ai_debugging !== 'undefined'; // 4
//  var ai_debug = false;

  if (ai_debug) console.log ('AI COOKIE SET block:', block, 'property:', property, 'value:', value);

  var ai_cookie = ai_load_cookie ();

  if (value === '') {
    if (ai_cookie.hasOwnProperty (block)) {
      delete ai_cookie [block][property];
      if (isEmpty (ai_cookie [block])) {
        delete ai_cookie [block];
      }
    }
  } else {
      if (!ai_cookie.hasOwnProperty (block)) {
        ai_cookie [block] = {};
      }
      ai_cookie [block][property] = value;
    }

  if (Object.keys (ai_cookie).length === 0 && ai_cookie.constructor === Object) {
    AiCookies.remove (ai_cookie_name);

    if (ai_debug) console.log ('AI COOKIE REMOVED');
  } else {
      AiCookies.set (ai_cookie_name, ai_cookie, {expires: 365, path: '/'});
    }

  if (ai_debug) {
    var ai_cookie_test = AiCookies.getJSON (ai_cookie_name);
    if (typeof (ai_cookie_test) != 'undefined') {
      console.log ('AI COOKIE NEW', ai_cookie_test);

      console.log ('AI COOKIE DATA:');
      for (var cookie_block in ai_cookie_test) {
        for (var cookie_block_property in ai_cookie_test [cookie_block]) {
          if (cookie_block_property == 'x') {
            var date = new Date();
            var closed_for = ai_cookie_test [cookie_block][cookie_block_property] - Math.round (date.getTime() / 1000);
            console.log ('  BLOCK', cookie_block, 'closed for', closed_for, 's =', closed_for / 3600 / 24, 'days');
          } else
          if (cookie_block_property == 'd') {
            console.log ('  BLOCK', cookie_block, 'delayed for', ai_cookie_test [cookie_block][cookie_block_property], 'pageviews');
          } else
          if (cookie_block_property == 'e') {
            console.log ('  BLOCK', cookie_block, 'show every', ai_cookie_test [cookie_block][cookie_block_property], 'pageviews');
          } else
          console.log ('      ?:', cookie_block, ':', cookie_block_property, ai_cookie_test [cookie_block][cookie_block_property]);
        }
      }
    } else console.log ('AI COOKIE NOT PRESENT');
  }
}

function ai_get_cookie_text (block) {
  var ai_cookie_name = 'aiBLOCKS';
  var ai_cookie = AiCookies.getJSON (ai_cookie_name);

  if (ai_cookie == null) {
    ai_cookie = {};
  }

  if (ai_cookie.hasOwnProperty (block)) {
    return JSON.stringify (ai_cookie [block]).replace (/\"/g, '').replace ('{', '').replace('}', '');
  }

  return '';
}
