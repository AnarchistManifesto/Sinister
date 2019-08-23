function b64e (str) {
  // first we use encodeURIComponent to get percent-encoded UTF-8,
  // then we convert the percent encodings into raw bytes which
  // can be fed into btoa.
  return btoa (encodeURIComponent (str).replace (/%([0-9A-F]{2})/g,
    function toSolidBytes (match, p1) {
      return String.fromCharCode ('0x' + p1);
  }));
}

function b64d (str) {
  // Going backwards: from bytestream, to percent-encoding, to original string.
  return decodeURIComponent (atob (str).split ('').map (function(c) {
    return '%' + ('00' + c.charCodeAt (0).toString (16)).slice (-2);
  }).join (''));
}

var ai_adb = false;
var ai_adb_debugging = typeof ai_debugging !== 'undefined';
var ai_adb_active = false;
var ai_adb_counter = 0;
var ai_adb_overlay = AI_ADB_OVERLAY_WINDOW;
var ai_adb_message_window = AI_ADB_MESSAGE_WINDOW;
var ai_adb_message_undismissible = AI_FUNCB_GET_UNDISMISSIBLE_MESSAGE;
var ai_adb_act_cookie_name = "aiADB";
var ai_adb_pgv_cookie_name = "aiADB_PV";
var ai_adb_page_redirection_cookie_name = "aiADB_PR";
var ai_adb_message_cookie_lifetime = AI_FUNCT_GET_NO_ACTION_PERIOD;
var ai_adb_action = AI_FUNC_GET_ADB_ACTION;
var ai_adb_page_views = AI_FUNCT_GET_DELAY_ACTION;
var ai_adb_selectors = "AI_ADB_SELECTORS";
var ai_adb_redirection_url = "AI_ADB_REDIRECTION_PAGE";

function ai_adb_process_content () {
  (function ($) {

    if (ai_adb_debugging) console.log ('');
    if (ai_adb_debugging) console.log ("AI AD BLOCKING CONTENT PROCESSING");

    $(".AI_ADB_CONTENT_CSS_BEGIN_CLASS").each (function () {
      var ai_adb_parent = $(this).parent ();

      if (ai_adb_debugging) console.log ("AI AD BLOCKING parent", ai_adb_parent.prop ("tagName"), "id=\""+ ai_adb_parent.attr ("id")+"\"", "class=\""+ ai_adb_parent.attr ("class")+"\"");

      var ai_adb_css = $(this).data ("css");
      if (typeof ai_adb_css == "undefined") ai_adb_css = "display: none !important;";

      var ai_adb_selectors = $(this).data ("selectors");
      if (typeof ai_adb_selectors == "undefined" || ai_adb_selectors == '') ai_adb_selectors = "p";

      if (ai_adb_debugging) console.log ('AI AD BLOCKING CSS, css=\'' + ai_adb_css +'\'', "selectors='" + ai_adb_selectors + "'");

      var ai_adb_action = false;
      $(ai_adb_parent).find ('.AI_ADB_CONTENT_CSS_BEGIN_CLASS, ' + ai_adb_selectors).each (function () {
        if ($(this).hasClass ("AI_ADB_CONTENT_CSS_BEGIN_CLASS")) {$(this).remove (); ai_adb_action = true;}
        else if ($(this).hasClass ("AI_ADB_CONTENT_CSS_END_CLASS")) {$(this).remove (); ai_adb_action = false;}
        else if (ai_adb_action) {
          var ai_adb_style = $(this).attr ("style");
          if (typeof ai_adb_style == "undefined") ai_adb_style = "";
          $(this).attr ("style", ai_adb_style + ";" + ai_adb_css);
        }
      });
    });

    $(".AI_ADB_CONTENT_DELETE_BEGIN_CLASS").each (function () {
      var ai_adb_parent = $(this).parent ();

      if (ai_adb_debugging) console.log ("AI AD BLOCKING DELETE, parent", ai_adb_parent.prop ("tagName"), "id=\""+ ai_adb_parent.attr ("id")+"\"", "class=\""+ ai_adb_parent.attr ("class")+"\"");

      var ai_adb_selectors = $(this).data ("selectors");
      if (typeof ai_adb_selectors == "undefined" || ai_adb_selectors == '') ai_adb_selectors = "p";

      if (ai_adb_debugging) console.log ("AI AD BLOCKING DELETE, selectors='" + ai_adb_selectors + "'");

      var ai_adb_action = false;
      $(ai_adb_parent).find ('.AI_ADB_CONTENT_DELETE_BEGIN_CLASS, ' + ai_adb_selectors).each (function () {
        if ($(this).hasClass ("AI_ADB_CONTENT_DELETE_BEGIN_CLASS")) {$(this).remove (); ai_adb_action = true;}
        else if ($(this).hasClass ("AI_ADB_CONTENT_DELETE_END_CLASS")) {$(this).remove (); ai_adb_action = false;}
        else if (ai_adb_action) {
          $(this).remove ();
        }
      });

    });

    $(".AI_ADB_CONTENT_REPLACE_BEGIN_CLASS").each (function () {
      var ai_adb_parent = $(this).parent ();

      if (ai_adb_debugging) console.log ("AI AD BLOCKING REPLACE, parent", ai_adb_parent.prop ("tagName"), "id=\""+ ai_adb_parent.attr ("id")+"\"", "class=\""+ ai_adb_parent.attr ("class")+"\"");

      var ai_adb_text = $(this).data ("text");
      if (typeof ai_adb_text == "undefined") ai_adb_text = "";

      var ai_adb_css = $(this).data ("css");
      if (typeof ai_adb_css == "undefined") ai_adb_css = "";

      var ai_adb_selectors = $(this).data ("selectors");
      if (typeof ai_adb_selectors == "undefined" || ai_adb_selectors == '') ai_adb_selectors = "p";

      if (ai_adb_debugging) console.log ("AI AD BLOCKING REPLACE, text=\'" + ai_adb_text + '\'', 'css=\'' + ai_adb_css +'\'', "selectors='" + ai_adb_selectors + "'");

      var ai_adb_action = false;
      $(ai_adb_parent).find ('.AI_ADB_CONTENT_REPLACE_BEGIN_CLASS, ' + ai_adb_selectors).each (function () {
        if ($(this).hasClass ("AI_ADB_CONTENT_REPLACE_BEGIN_CLASS")) {$(this).remove (); ai_adb_action = true;}
        else if ($(this).hasClass ("AI_ADB_CONTENT_REPLACE_END_CLASS")) {$(this).remove (); ai_adb_action = false;}
        else if (ai_adb_action) {
          if (ai_adb_text.length != 0) {
            var n = Math.round ($(this).text ().length / (ai_adb_text.length + 1));
            $(this).text (Array(n + 1).join(ai_adb_text + ' '));
          } else $(this).text ('');
          var ai_adb_style = $(this).attr ("style");
          if (typeof ai_adb_style == "undefined") ai_adb_style = "";
          $(this).attr ("style", ai_adb_style + ";" + ai_adb_css);
        }
      });
    });

  }(jQuery));
}

ai_adb_detection_type = function (n) {
  switch (n) {
    case 0:
      return "0 debugging";
      break;
    case 1:
      return "1 ads create element";
      break;
    case 2:
      return "2 sponsors window var";
      break;
    case 3:
      return "3 banner element";
      break;
    case 4:
      return "4 custom selectors";
      break;
    case 5:
      return "5 ga";
      break;
    case 6:
      return "6 media.net";
      break;
    case 7:
      return "7 adsense";
      break;
    case 8:
      return "8 chitika";
      break;
    case 9:
      return "9 fun adblock 3";
      break;
    case 10:
      return "10 fun adblock 4";
      break;
    default:
      return n;
      break;
  }
}

var ai_adb_detected = function(n) {

  if (ai_adb_debugging && n == 0) console.log ('');
  if (ai_adb_debugging) console.log ("AI AD BLOCKING DETECTED", ai_adb_detection_type (n));

  if (!ai_adb_active) {
    ai_adb_active = true;

    (function ($) {

      $(window).ready(function () {
        if (ai_adb_debugging) console.log ("AI AD BLOCKING block actions");

        $(".ai-adb-hide").each (function () {
          $(this).css ({"display": "none", "visibility": "hidden"});

          var wrapping_div = $(this).closest ('div[data-ai]');
          if (typeof wrapping_div.data ("ai") != "undefined") {
            var data = JSON.parse (b64d (wrapping_div.data ("ai")));
            if (typeof data !== "undefined" && data.constructor === Array) {
              data [1] = "";
              wrapping_div.data ("ai", b64e (JSON.stringify (data)));
            }
          }

          if (ai_adb_debugging) {
            var debug_info = $(this).data ("ai-debug");
            console.log ("AI AD BLOCKING HIDE", typeof debug_info != "undefined" ? debug_info : "");
          }
        });

        // after hide to update tracking data on replace
        $(".ai-adb-show").each (function () {
          $(this).css ({"display": "block", "visibility": "visible"});

          var tracking_data = $(this).data ('ai-tracking');
          if (typeof tracking_data != 'undefined') {
            var wrapping_div = $(this).closest ('div[data-ai]');
            if (typeof wrapping_div.data ("ai") != "undefined") {

              if ($(this).hasClass ('ai-no-tracking')) {
                var data = JSON.parse (b64d (wrapping_div.data ("ai")));
                if (typeof data !== "undefined" && data.constructor === Array) {
                  data [1] = "";
                  tracking_data = b64e (JSON.stringify (data));
                }
              }

              wrapping_div.data ("ai", tracking_data);
            }
          }

          if (ai_adb_debugging) {
            var debug_info = $(this).data ("ai-debug");
            console.log ("AI AD BLOCKING SHOW", typeof debug_info != "undefined" ? debug_info : "");
          }
        });

//          ai_adb_process_content ();

        setTimeout (ai_adb_process_content, 10);
      });

      if (ai_adb_debugging) console.log ("AI AD BLOCKING action check");
//        AiCookies.remove (ai_adb_pgv_cookie_name, {path: "/" });

      if (ai_adb_page_views != 0) {
        var ai_adb_page_view_counter = 1;
//        var cookie = $.cookie (ai_adb_pgv_cookie_name);
        var cookie = AiCookies.get (ai_adb_pgv_cookie_name);
        if (typeof cookie != "undefined") ai_adb_page_view_counter = parseInt (cookie) + 1;
        if (ai_adb_debugging) console.log ("AI AD BLOCKING page views cookie:", cookie, "- page view:", ai_adb_page_view_counter);
        if (ai_adb_page_view_counter < ai_adb_page_views) {
          if (ai_adb_debugging) console.log ("AI AD BLOCKING", ai_adb_page_views, "page views not reached, no action");
          var d1 = ai_adb_page_view_counter;
          var AI_ADB_STATUS_MESSAGE=1;
//          $.cookie (ai_adb_pgv_cookie_name, ai_adb_page_view_counter, {expires: 365, path: "/"});
          AiCookies.set (ai_adb_pgv_cookie_name, ai_adb_page_view_counter, {expires: 365, path: "/"});
          return;
        }
      }

      if (ai_adb_message_cookie_lifetime != 0 && (ai_adb_action != 1 || !ai_adb_message_undismissible)) {
//        var cookie = $.cookie (ai_adb_act_cookie_name);
        var cookie = AiCookies.get (ai_adb_act_cookie_name);
        if (ai_adb_debugging) console.log ("AI AD BLOCKING cookie:", cookie);
        if (typeof cookie != "undefined" && cookie == "AI_CONST_AI_ADB_COOKIE_VALUE") {
          if (ai_adb_debugging) console.log ("AI AD BLOCKING valid cookie detected, no action");
          var AI_ADB_STATUS_MESSAGE=2;
          return;
        }

        else if (ai_adb_debugging) console.log ("AI AD BLOCKING invalid cookie");
//        $.cookie (ai_adb_act_cookie_name, "AI_CONST_AI_ADB_COOKIE_VALUE", {expires: ai_adb_message_cookie_lifetime, path: "/"});
        AiCookies.set (ai_adb_act_cookie_name, "AI_CONST_AI_ADB_COOKIE_VALUE", {expires: ai_adb_message_cookie_lifetime, path: "/"});
      } else
//          $.removeCookie (ai_adb_act_cookie_name, {path: "/" });
          AiCookies.remove (ai_adb_act_cookie_name, {path: "/" });

      if (ai_adb_debugging) console.log ("AI AD BLOCKING action", ai_adb_action);

      if (ai_adb_action == 0) {
        var AI_ADB_STATUS_MESSAGE=6;
        var ai_dummy = 0; // Do not remove - to keep semicolon above
      } else {
          var AI_ADB_STATUS_MESSAGE=3;
          var ai_dummy = 0; // Do not remove - to keep semicolon above
        }

      switch (ai_adb_action) {
        case 1:
          if (!ai_adb_message_undismissible) {
            ai_adb_overlay.click (function () {
              $(this).remove();
              ai_adb_message_window.remove();
            }).css ("cursor", "pointer");
            ai_adb_message_window.click (function () {
              $(this).remove();
              ai_adb_overlay.remove();
            }).css ("cursor", "pointer");
            window.onkeydown = function( event ) {
              if (event.keyCode === 27 ) {
                ai_adb_overlay.click ();
                ai_adb_message_window.click ();
              }
            }

            if (ai_adb_debugging) console.log ("AI AD BLOCKING MESSAGE click detection installed");

          } else {
//                AiCookies.remove (ai_adb_act_cookie_name, {path: "/" });
            }

          if (ai_adb_debugging) console.log ("AI AD BLOCKING MESSAGE");
          $("body").prepend (ai_adb_overlay).prepend (ai_adb_message_window);
          break;
        case 2:
          if (ai_adb_redirection_url != "") {
            if (ai_adb_debugging) console.log ("AI AD BLOCKING REDIRECTION to", ai_adb_redirection_url);

            var redirect = true;
            if (ai_adb_redirection_url.toLowerCase().substring (0, 4) == "http") {
              if (window.location.href == ai_adb_redirection_url) var redirect = false;
            } else {
                if (window.location.pathname == ai_adb_redirection_url) var redirect = false;
              }

            if (redirect) {
//              var cookie = $.cookie (ai_adb_page_redirection_cookie_name);
              var cookie = AiCookies.get (ai_adb_page_redirection_cookie_name);
              if (typeof cookie == "undefined") {
                var date = new Date();
                date.setTime (date.getTime() + (10 * 1000));
//                $.cookie (ai_adb_page_redirection_cookie_name, window.location.href, {expires: date, path: "/" });
                AiCookies.set (ai_adb_page_redirection_cookie_name, window.location.href, {expires: date, path: "/" });

                window.location.replace (ai_adb_redirection_url)
              } else {
                  if (ai_adb_debugging) console.log ("AI AD BLOCKING no redirection, cookie:", cookie);

                }
            } else {
                if (ai_adb_debugging) console.log ("AI AD BLOCKING already on page", window.location.href);
//                jQuery.removeCookie (ai_adb_page_redirection_cookie_name, {path: "/"});
                AiCookies.remove (ai_adb_page_redirection_cookie_name, {path: "/"});
              }
          }
          break;
      }

    }(jQuery));

    ai_adb = true;
  }
}


var ai_adb_undetected = function(n) {
  ai_adb_counter ++;

  if (ai_adb_debugging && n == 1) console.log ('');
  if (ai_adb_debugging) console.log ("AI AD BLOCKING not detected:", '(' + ai_adb_counter + ')', ai_adb_detection_type (n));

  if (!ai_adb_active && ai_adb_counter == 4) {
    if (ai_adb_debugging) console.log ("AI AD BLOCKING NOT DETECTED");

      var AI_ADB_STATUS_MESSAGE=4; // Check replacement code {}
      var ai_dummy = 0; // Do not remove - to keep semicolon above

//      var redirected_page = false;
//      if (ai_adb_redirection_url.toLowerCase().substring (0, 4) == "http") {
//        if (window.location.href == ai_adb_redirection_url) var redirected_page = true;
//      } else {
//          if (window.location.pathname == ai_adb_redirection_url) var redirected_page = true;
//        }

//      if (redirected_page) {
//        //var cookie = jQuery.cookie (ai_adb_page_redirection_cookie_name);
//        var cookie = AiCookies.get (ai_adb_page_redirection_cookie_name);
//        if (typeof cookie != "undefined" && cookie.toLowerCase().substring (0, 4) == "http") {
//          if (ai_adb_debugging) console.log ("AI AD BLOCKING returning to", cookie);
//          //jQuery.removeCookie (ai_adb_page_redirection_cookie_name, {path: "/"});
//          AiCookies.remove (ai_adb_page_redirection_cookie_name, {path: "/"});
//          window.location.replace (cookie);
//        }
//      }

  }
}

if (AI_DBG_AI_DEBUG_AD_BLOCKING) jQuery (document).ready (function () {ai_adb_detected (0)});

if (!document.getElementById ("AI_CONST_AI_ADB_1_NAME")){
  jQuery (document).ready (function () {if (!ai_adb_active || ai_adb_debugging) ai_adb_detected (1)});
} else {
    jQuery (document).ready (function () {ai_adb_undetected (1)});
}

if (typeof window.AI_CONST_AI_ADB_2_NAME == "undefined") {
  jQuery (document).ready (function () {if (!ai_adb_active || ai_adb_debugging) ai_adb_detected (2)});
} else {
    jQuery (document).ready (function () {ai_adb_undetected (2)});
  }

jQuery (document).ready (function ($) {
  $(window).ready (function () {

    $("#ai-adb-bar").click (function () {
//      $.removeCookie (ai_adb_act_cookie_name, {path: "/" });
//      $.removeCookie (ai_adb_pgv_cookie_name, {path: "/" });
      AiCookies.remove (ai_adb_act_cookie_name, {path: "/" });
      AiCookies.remove (ai_adb_pgv_cookie_name, {path: "/" });
      var AI_ADB_STATUS_MESSAGE=5;
      var ai_dummy = 0; // Do not remove - to keep semicolon above
    });

    if ($("#banner-advert-container img").length > 0) {
      if ($("#banner-advert-container img").outerHeight() === 0) {
        $(document).ready (function () {if (!ai_adb_active || ai_adb_debugging) ai_adb_detected (3)});
      } else $(document).ready (function () {ai_adb_undetected (3)});
      $("#banner-advert-container img").remove();
    }

    if ((!ai_adb_active || ai_adb_debugging) && ai_adb_selectors != "") {
      var ai_adb_el_counter = 0;
      var ai_adb_el_zero = 0;
      var ai_adb_selector = ai_adb_selectors.split (",");
      $.each (ai_adb_selector, function (i) {
        ai_adb_selector [i] = ai_adb_selector [i].trim ();

        if (ai_adb_debugging) console.log ("AI AD BLOCKING selector", ai_adb_selector [i]);

        if ($(ai_adb_selector [i]).length != 0) {
          $(ai_adb_selector [i]).each (function (n) {

            var outer_height = $(this).outerHeight ();

            if (ai_adb_debugging) console.log ("AI AD BLOCKING element id=\"" + $(this).attr ("id") + "\" class=\"" + $(this).attr ("class") + "\" heights:", $(this).outerHeight (), $(this).innerHeight (), $(this).height ());

            var ai_attributes = $(this).find ('.ai-attributes');
            if (ai_attributes.length) {
              ai_attributes.each (function (){
                if (ai_adb_debugging) console.log ("AI AD BLOCKING attributes height:", $(this).outerHeight ());
                if (outer_height >= $(this).outerHeight ()) {
                  outer_height -= $(this).outerHeight ();
                }
              });
            }

            if (ai_adb_debugging) console.log ("AI AD BLOCKING effective height:", outer_height);

            ai_adb_el_counter ++;
            if (outer_height === 0) {
              $ (document).ready (function () {if (!ai_adb_active || ai_adb_debugging) ai_adb_detected (4)});
              ai_adb_el_zero ++;
              if (!ai_adb_debugging) return false;
            }

          });

        }
      });
      if (ai_adb_el_counter != 0 && ai_adb_el_zero == 0) $(document).ready (function () {ai_adb_undetected (4)});
    }
  });
});

//jQuery.getScript ("https://www.google-analytics.com/analytics.js");
//jQuery.getScript ("//cdn.chitika.net/getads.js");
//jQuery.getScript ("//contextual.media.net/dmedianet.js");

jQuery (window).on ('load', function () {
  if (ai_adb_debugging) console.log ("AI AD BLOCKING window load");

  if (jQuery("#ai-adb-ga").length) {
    if (!(typeof ga == 'function' && ga.toString().length > 30)) {
      jQuery (document).ready (function () {if (!ai_adb_active || ai_adb_debugging) ai_adb_detected (5)});
    } else {
        jQuery (document).ready (function () {ai_adb_undetected (5)});
      }
  }

  if (jQuery("#ai-adb-mn").length) {
    if (!(typeof _mNDetails == 'object' && JSON.stringify (_mNDetails).length > 400)) {
      jQuery (document).ready (function () {if (!ai_adb_active || ai_adb_debugging) ai_adb_detected (6)});
    } else {
        jQuery (document).ready (function () {ai_adb_undetected (6)});
      }
  }
});

