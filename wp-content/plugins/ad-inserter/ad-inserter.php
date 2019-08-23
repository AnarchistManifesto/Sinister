<?php

/*
Plugin Name: Ad Inserter
Version: 2.4.23
Description: Ad management with many advanced advertising features to insert ads at optimal positions
Author: Igor Funa
Author URI: http://igorfuna.com/
Plugin URI: https://adinserter.pro/documentation
Text Domain: ad-inserter
Domain Path: /languages
*/

/*

Change Log

Ad Inserter 2.4.23 - 2019-07-30
- Added support to define custom fields with shortocdes
- Added experimental support to delay showing ads for specified number of pageviews (Pro only)
- Fix for false positive ad blocking detection (Pro only)
- Few minor bug fixes, cosmetic changes and code improvements

Ad Inserter 2.4.22 - 2019-07-13
- Fix for remote code execution vulnerability - credit to Wordfence

Ad Inserter 2.4.21 - 2019-07-11
- Fix for possible error Class not found (Pro only)

Ad Inserter 2.4.20 - 2019-07-09
- Fix for path traversal vulnerability - credit to Wilfried Bécard of Synacktiv (https://synacktiv.com)
- Fix for block rearrangement issues
- Added experimental support to remember closed ad for specified time period (Pro only)
- Added experimental support to automatically close ad after specified time period (Pro only)
- Few minor bug fixes, cosmetic changes and code improvements

Ad Inserter 2.4.19 - 2019-06-18
- Added support for taxonomy for Yoast primary category
- Layout changes to accomodate longer translated texts
- Fix for escape character not saved in header, footer and ad blocking message code
- Few minor bug fixes, cosmetic changes and code improvements

Ad Inserter 2.4.18 - 2019-05-26
- Added support for full width responsive AdSense code option
- Few minor bug fixes, cosmetic changes and code improvements

Ad Inserter 2.4.17 - 2019-05-13
- Few minor bug fixes, cosmetic changes and code improvements

Ad Inserter 2.4.16 - 2019-04-21
- Fix for compatibility with AMP for WP - Accelerated Mobile Pages for WordPress
- Few minor bug fixes

Ad Inserter 2.4.15 - 2019-04-19
- Fix for improved compatibility with other plugins
- Few minor bug fixes and cosmetic changes

Ad Inserter 2.4.14 - 2019-04-18
- Fix for ROTATE shortcodes with option name identical to block name
- Fix for possible conflict with output buffering in other plugins
- Few minor bug fixes, cosmetic changes and code improvements

Ad Inserter 2.4.13 - 2019-04-12
- Added shortcode to disable ad blocking detection code
- Added options to disable ad blocking actions for administrators or logged in users
- Added option to change PDF report footer (Pro only)
- Added support for public ad impression and click reports (Pro only)
- Few minor bug fixes, cosmetic changes and code improvements

Ad Inserter 2.4.12 - 2019-03-21
- Added ads.txt editor
- Added option to prevent disabling caching for logged in administrators
- Improved compatibility with PHP 7.2
- Few minor bug fixes, cosmetic changes and code improvements

Ad Inserter 2.4.11 - 2019-02-23
- Fix for saving code with slashes
- Fix for rotation editor code import
- Few minor bug fixes, cosmetic changes and code improvements

Ad Inserter 2.4.10 - 2019-02-18
- Added support for counter shortcodes
- Added support for code separator selection for code preview
- Added support for group rotations
- Added support for CHECK separator (Pro only)
- Added links to test pages for check for available positions
- Few minor bug fixes, cosmetic changes and code improvements

Ad Inserter 2.4.9 - 2019-02-05
- Added support for HEAD separator
- Added support for DoubleClick for Publishers (DFP) ads
- Added support to generate statistics reports in PDF format (Pro only)
- Fix for ad label when using AMP separator
- Fix for AdSense code fixed by viewport
- Fix for error when checking for available positions
- Few minor bug fixes, cosmetic changes and code improvements

Ad Inserter 2.4.8 - 2019-01-20
- Added support for automatic insertion before/after image
- Added support for theme checker for available positions for automatic insertion

Ad Inserter 2.4.7 - 2019-01-15
- Added support for automatic insertion before/after image (experimental)
- Added support for theme checker for available positions for automatic insertion (experimental)
- Improvements to the user interface
- Fix for lazy loading in Ajax calls (Pro only)
- Fix for country list editor (Pro only)
- Few minor bug fixes, cosmetic changes and code improvements

Ad Inserter 2.4.6 - 2019-01-08
- Improved ad blocking detection (detects Firefox content blocking)
- Added support for wildcards for referrers (domains)
- Added debugging notice when JavaScript errors are detected
- Added support to load blocks in iframes (Pro only)
- Added geolocation support for country subdivisions and cities (Pro only)
- Added option to hide license key on client websites (Pro only)
- Few minor bug fixes, cosmetic changes and code improvements

Ad Inserter 2.4.5 - 2018-12-26
- Added support for AMP WP - Google AMP For WordPress
- Added support to individually disable insertions for debugging purposes
- Improved HTML element selection tool
- Fix for Call to undefined function wp_get_current_user()
- Few minor bug fixes, cosmetic changes and code improvements

Ad Inserter 2.4.4 - 2018-12-11
- Fix for Fatal error: Call to undefined function mb_strtoupper()

Ad Inserter 2.4.3 - 2018-12-10
- Added support for insertion before/after every N paragraphs (%N)
- Added support for i18n
- Fix for insertion on admin pages
- Fix for client-side cookie check
- Fix for loaded styles from other plugins/themes on the settings page
- Fix for client-side insertion near HTML elements using :eq selector
- Fix for deactivation feedback form not closing
- Few minor bug fixes, cosmetic changes and code improvements

Ad Inserter 2.4.2 - 2018-10-21
- Added support for visual HTML element selection
- Fix for client-side insertion inside HTML elements
- Few minor bug fixes, cosmetic changes and code improvements

Ad Inserter 2.4.1 - 2018-10-05
- Added option to insert into HTML element (prepend, append, replace content)
- Added option to remove HTML element
- Added option to not show deactivation feedback form
- Added support for negative relative positions for paragraph counting
- Few minor bug fixes, cosmetic changes and code improvements

Ad Inserter 2.4.0 - 2018-09-26
- Improved code for client-side insertion
- Added support for usage tracking
- Fix for compatibility with older PHP versions (below 5.4)
- Few minor bug fixes, cosmetic changes and code improvements

Ad Inserter 2.3.21 - 2018-09-20
- Added option to force showing admin toolbar when viewing site
- Added additional debugging info for blocks in Ajax requests
- Fix for viewport visibility detection
- Fix for rotation with non-ASCII characters
- Few minor bug fixes, cosmetic changes and code improvements

Ad Inserter 2.3.20 - 2018-09-04
- Improved loading of settings
- Fix for content processing in some ajax calls
- Few minor bug fixes, cosmetic changes and code improvements

Ad Inserter 2.3.19 - 2018-08-26
- Improved code for client-side insertion
- Fix for rotation with shortcodes
- Few minor bug fixes, cosmetic changes and code improvements

Ad Inserter 2.3.18 - 2018-08-21
- Added support to schedule insertion for N days after publishing
- Added support to schedule insertion only for posts published inside/outside time period (Pro only)
- Added support to prevent activation of free Ad Inserter while Pro is active
- Added url parameter to show block code
- Improved Header/Footer code debugging
- Few minor bug fixes, cosmetic changes and code improvements

Ad Inserter 2.3.17 - 2018-08-03
- Added shortcode for ad blocking detection action
- Few minor bug fixes, cosmetic changes and code improvements

Ad Inserter 2.3.16 - 2018-07-25
- Added option to insert block only when WP loop is currently active
- Added support for Better AMP plugin
- Code generator for placeholders on https sites now generates https urls
- Optimized loading of plugin settings
- Few minor bug fixes, cosmetic changes and code improvements

Ad Inserter 2.3.15 - 2018-07-18
- Fix for insertion on AMP pages

Ad Inserter 2.3.14 - 2018-07-14
- Simplified AdSense integration
- Added setting to define maximum number of blocks (ads) per page
- Optimized the_content filter processing
- Added setting for lazy loading offset (Pro only)
- Fix for url parameter list when using client-side dynamic blocks
- Few minor bug fixes, cosmetic changes and code improvements

Ad Inserter 2.3.13 - 2018-07-11
- Added support for lazy loading (Pro only)
- Fix for unwanted insertions with some paragraph settings
- Few minor bug fixes, cosmetic changes and code improvements

Ad Inserter 2.3.12 - 2018-07-04
- Fix for urlencode error
- Few other minor bug fixes

Ad Inserter 2.3.11 - 2018-07-03
- Added support for W3TC/client-side check for cookies (in url parameter list) to support showing ads based on visitor's cookie consent
- Added support for W3TC/client-side check for referers
- Improved paragraph processing
- Few minor bug fixes, cosmetic changes and code improvements

Ad Inserter 2.3.10 - 2018-06-16
- Added support for timed rotation
- Added support for client-side insertion of dynamic blocks
- Improved word count function
- Few minor bug fixes, cosmetic changes and code improvements

Ad Inserter 2.3.9 - 2018-05-29
- Added option to easily disable insertion of individual code block
- Changes for compatibility with PHP 7.2
- Added non-interaction parameter to external tracking (Pro only)
- Few minor bug fixes, cosmetic changes and code improvements

Ad Inserter 2.3.8 - 2018-04-17
- Added support for rotation option shares
- Added support for sticky ad settings and animations (Pro only)
- Few minor bug fixes, cosmetic changes and code improvements

Ad Inserter 2.3.7 - 2018-03-27
- Added support for ad labels
- Blocked search indexing while debugging
- Close button setting moved to tab Display (Pro only)
- Few minor bug fixes, cosmetic changes and code improvements

Ad Inserter 2.3.6 - 2018-03-20
- Added widget for debugging tools
- Fix for AdSense ad overlays not displayed with some themes
- Few minor bug fixes, cosmetic changes and code improvements

Ad Inserter 2.3.5 - 2018-03-13
- Added display of header and footer code in Label blocks debugging function
- Added AdSense ad overlays in Label blocks debugging function (experimental)
- Fixed bug for removed square brackets in HTML element selectors
- Fixed preview of AdSense ad units
- Few minor bug fixes

Ad Inserter 2.3.4 - 2018-03-05
- Added support for author:author-username items in taxonomy list
- Fixed errors when downgrading from Pro
- Few minor bug fixes

Ad Inserter 2.3.3 - 2018-02-08
- Added list editors
- Added Label blocks debugging function for AdSense Auto ads

Ad Inserter 2.3.2 - 2018-02-01
- Added AdSense code generator for ad sizes using CSS media queries
- Fix for slow updates caused by changed user agent (Pro only, credits Olivier Langlois, https://juicingforyourmanhood.com/affiliate_tools.html)
- Fix for client-side insertion of non-English characters before/after HTML element

Ad Inserter 2.3.1 - 2018-01-25
- Added support for server-side insertion before/after any HTML element
- Few minor bug fixes

Ad Inserter 2.3.0 - 2018-01-21
- Added support for client-side insertion before/after any HTML element
- Inplemented AdSense integration
- Added option to define close button position
- Fix for code generator import and code preview error with non ASCII characters
- Fix for post/page exceptions and page types not processed in the header
- Fix for close button in preview window
- Fix for errors when rearranging blocks
- Fix for errors when importing code
- Few minor bug fixes, cosmetic changes and code improvements

*/


if (!defined ('ABSPATH')) exit;

if (!defined ('AD_INSERTER_VERSION')) {


function ai_wp_default_editor () {
  return 'tinymce';
}

function ai_wp_default_editor_html () {
  return 'html';
}

function ai_disable_caching () {
  // WP Super Cache, W3 Total Cache, WP Rocket
  if (!defined('DONOTCACHEPAGE'))
    define('DONOTCACHEPAGE', true);

  if (!defined('DONOTCACHEOBJECT'))
    define('DONOTCACHEOBJECT', true);

  if (!defined('DONOTCACHEDB'))
    define('DONOTCACHEDB', true);

  if (!headers_sent () && !is_user_logged_in ()) {
    header('Cache-Control: private, proxy-revalidate, s-maxage=0');
  }
}

function ai_toolbar_menu_items () {
  global $block_object, $ai_wp_data;

  if (isset ($ai_wp_data [AI_DEBUG_MENU_ITEMS])) return;

  $disable_block_insertions = get_disable_block_insertions ();
  $disable_php_processing   = get_disable_php_processing ();
  $disable_css_code         = get_disable_css_code ();
  $disable_js_code          = get_disable_js_code ();
  $disable_footer_code      = get_disable_footer_code ();
  $disable_header_code      = get_disable_header_code ();

  $statuses =  '<span class="ai-insertion-status"'. ($disable_header_code ? ' style="color: #f22"' : '') . '">H</span> &nbsp; ';
  $statuses .= '<span class="ai-insertion-status"'. ($disable_footer_code ? ' style="color: #f22"' : '') . '">F</span> &nbsp; ';
  $statuses .= '<span class="ai-insertion-status"'. ($disable_js_code ? ' style="color: #f22"' : '') . '">JS</span> &nbsp; ';
  $statuses .= '<span class="ai-insertion-status"'. ($disable_css_code ? ' style="color: #f22"' : '') . '">CSS</span> &nbsp; ';
  $statuses .= '<span class="ai-insertion-status"'. ($disable_php_processing ? ' style="color: #f22"' : '') . '">PHP</span> &nbsp; ';
  $statuses .= '<span class="ai-insertion-status"'. ($disable_block_insertions ? ' style="color: #f22"' : '') . '">BLOCKS</span>';

  $insertion_disabled = $disable_block_insertions || $disable_php_processing || $disable_css_code || $disable_js_code || $disable_footer_code || $disable_header_code;

  $ai_wp_data [AI_DEBUG_MENU_ITEMS] = array ();

  if (($ai_wp_data [AI_WP_DEBUGGING] & AI_DEBUG_BLOCKS) == 0) $debug_blocks = 1; else $debug_blocks = 0;
  $debug_blocks_class = $debug_blocks == 0 ? ' on' : '';

  if (($ai_wp_data [AI_WP_DEBUGGING] & AI_DEBUG_POSITIONS) == 0) $debug_positions = 0; else $debug_positions = '';
  $debug_positions_class = $debug_positions === '' ? ' on' : '';

  if (($ai_wp_data [AI_WP_DEBUGGING] & AI_DEBUG_TAGS) == 0) $debug_tags = 1; else $debug_tags = 0;
  $debug_tags_class = $debug_tags == 0 ? ' on' : '';

  if (($ai_wp_data [AI_WP_DEBUGGING] & AI_DEBUG_PROCESSING) == 0) $debug_processing = 1; else $debug_processing = 0;
  $debug_processing_class = $debug_processing == 0 ? ' on' : '';

  if (($ai_wp_data [AI_WP_DEBUGGING] & AI_DEBUG_NO_INSERTION) == 0) $debug_no_insertion = 1; else $debug_no_insertion = 0;
  $debug_no_insertion_class = $debug_no_insertion == 0 ? ' on' : '';

  if (($ai_wp_data [AI_WP_DEBUGGING] & AI_DEBUG_AD_BLOCKING) == 0) $debug_ad_blocking = 1; else $debug_ad_blocking = 0;
  $debug_ad_blocking_class = $debug_ad_blocking == 0 ? ' on' : '';

  if (($ai_wp_data [AI_WP_DEBUGGING] & AI_DEBUG_AD_BLOCKING_STATUS) == 0) $debug_ad_blocking_status = 1; else $debug_ad_blocking_status = 0;
  $debug_ad_blocking_status_class = $debug_ad_blocking_status == 0 ? ' on' : '';

  $debug_settings_on = $debug_blocks == 0 || $debug_positions === '' || $debug_tags == 0 || $debug_processing == 0 || $debug_no_insertion == 0 || $debug_ad_blocking == 0 || $debug_ad_blocking_status == 0;

  $debug_settings_class = $debug_settings_on ? ' on' : '';
  if ($insertion_disabled) $debug_settings_class .= ' red';

  $top_menu_url = $debug_settings_on ? (defined ('AI_DEBUGGING_DEMO') ? get_permalink () : add_query_arg (AI_URL_DEBUG, '0', remove_debug_parameters_from_url ())) :
                                       add_query_arg (array (AI_URL_DEBUG_BLOCKS => '1', AI_URL_DEBUG_POSITIONS => '0'), remove_debug_parameters_from_url ());

  $ai_wp_data [AI_DEBUG_MENU_ITEMS][] = array (
    'id' => 'ai-toolbar',
    'group' => true
  );

  $ai_wp_data [AI_DEBUG_MENU_ITEMS][] = array (
    'id' => 'ai-toolbar-settings',
//    'parent' => 'ai-toolbar',
//    'title' => '<span class="ab-icon'.$debug_settings_class.'"></span>'.AD_INSERTER_NAME . (defined ('AI_DEBUGGING_DEMO') ? ' Debugging DEMO' : ($debug_settings_on ? ' Debugging' : '')),
    'title' => '<span class="ab-icon'.$debug_settings_class.'"></span>'.AD_INSERTER_NAME . (defined ('AI_DEBUGGING_DEMO') ? ' ' . _x('Debugging DEMO', 'Menu item', 'ad-inserter') : ($debug_settings_on ? '' : '')),
    'href' => $top_menu_url,
//    'meta' => $debug_settings_on ? array ('title' => 'Turn Debugging Off') : array (),
  );

  if ($insertion_disabled) {
    $ai_wp_data [AI_DEBUG_MENU_ITEMS][] = array (
      'id' => 'ai-toolbar-status',
      'parent' => 'ai-toolbar-settings',
      'title' => '&nbsp;'.$statuses,
    );
  }

  $ai_wp_data [AI_DEBUG_MENU_ITEMS][] = array (
    'id' => 'ai-toolbar-blocks',
    'parent' => 'ai-toolbar-settings',
    'title' => '<span class="ab-icon'.$debug_blocks_class.'"></span>' . _x('Label Blocks', 'Menu item', 'ad-inserter'),
    'href' => set_url_parameter (AI_URL_DEBUG_BLOCKS, $debug_blocks),
  );

  $ai_wp_data [AI_DEBUG_MENU_ITEMS][] = array (
    'id' => 'ai-toolbar-positions',
    'parent' => 'ai-toolbar-settings',
    'title' => '<span class="ab-icon'.$debug_positions_class.'"></span>' . _x('Show Positions', 'Menu item', 'ad-inserter'),
    'href' => set_url_parameter (AI_URL_DEBUG_POSITIONS, $debug_positions),
  );

  $paragraph_blocks = array ();
  for ($block = 0; $block <= 96; $block ++) {
    $obj = $block_object [$block];
    $automatic_insertion = $obj->get_automatic_insertion();
    if ($block == 0 || !$obj->get_disable_insertion () && ($automatic_insertion == AI_AUTOMATIC_INSERTION_BEFORE_PARAGRAPH || $automatic_insertion == AI_AUTOMATIC_INSERTION_AFTER_PARAGRAPH)) {

      $block_tags = trim ($block_object [$block]->get_paragraph_tags ());
      $direction = $block_object [$block]->get_direction_type() == AI_DIRECTION_FROM_TOP ? 't' : 'b';
      $paragraph_min_words = intval ($obj->get_minimum_paragraph_words());
      $paragraph_max_words = intval ($obj->get_maximum_paragraph_words());
      $paragraph_text_type = $obj->get_paragraph_text_type ();
      $paragraph_text = trim (html_entity_decode ($obj->get_paragraph_text()));
      $inside_blockquote = $obj->get_count_inside_blockquote ();

      if ($block_tags != '') {
        $found = false;
        foreach ($paragraph_blocks as $index => $paragraph_block) {
          if ($paragraph_block ['tags']       == $block_tags &&
              $paragraph_block ['direction']  == $direction &&
              $paragraph_block ['min']        == $paragraph_min_words &&
              $paragraph_block ['max']        == $paragraph_max_words &&
              $paragraph_block ['text_type']  == $paragraph_text_type &&
              $paragraph_block ['text']       == $paragraph_text &&
              $paragraph_block ['blockquote'] == $inside_blockquote
             ) {
            $found = true;
            break;
          }
        }
        if ($found) array_push ($paragraph_blocks [$index]['blocks'], $block); else
          $paragraph_blocks []= array ('blocks' => array ($block),
            'tags'        => $block_tags,
            'direction'   => $direction,
            'min'         => $paragraph_min_words,
            'max'         => $paragraph_max_words,
            'text_type'   => $paragraph_text_type,
            'text'        => $paragraph_text,
            'blockquote'  => $inside_blockquote,
          );
      }
    }
  }

  $no_paragraph_counting_inside = get_no_paragraph_counting_inside ();

  foreach ($paragraph_blocks as $index => $paragraph_block) {
    $debug_block_active = $debug_positions === '' && in_array ($ai_wp_data [AI_WP_DEBUG_BLOCK], $paragraph_block ['blocks']);
    $block_class = $debug_block_active ? ' on' : '';
//    $block_class = $debug_positions === '' && in_array ($ai_wp_data [AI_WP_DEBUG_BLOCK], $paragraph_block ['blocks']) ? ' on' : '';
    $ai_wp_data [AI_DEBUG_MENU_ITEMS][] = array (
      'id' => 'ai-toolbar-positions-'.$index,
      'parent' => 'ai-toolbar-positions',
      'title' => '<span class="ab-icon'.$block_class.'"></span>'.
         $paragraph_block ['tags'].
        ($paragraph_block ['direction'] == 'b' ? ' <span class="dashicons dashicons-arrow-up-alt up-icon"></span>' : '').
        ($paragraph_block ['min'] != 0 ? ' min '.$paragraph_block ['min']. ' ' : '').
        ($paragraph_block ['max'] != 0 ? ' max '.$paragraph_block ['max']. ' ' : '').
        ($paragraph_block ['blockquote']  ? ' +[' . $no_paragraph_counting_inside . '] ' : '').
        ($paragraph_block ['text'] != '' ? ($paragraph_block ['text_type'] == AI_DO_NOT_CONTAIN ? ' NC ' : ' C ').' ['.htmlentities ($paragraph_block ['text']).']' : ''),
//      'href' => set_url_parameter (AI_URL_DEBUG_POSITIONS, $paragraph_block ['blocks'][0]),
      'href' => set_url_parameter (AI_URL_DEBUG_POSITIONS, $debug_block_active ? '' : $paragraph_block ['blocks'][0]),
    );
  }

  $ai_wp_data [AI_DEBUG_MENU_ITEMS][] = array (
    'id' => 'ai-toolbar-tags',
    'parent' => 'ai-toolbar-settings',
    'title' => '<span class="ab-icon'.$debug_tags_class.'"></span>' . _x('Show HTML Tags', 'Menu item', 'ad-inserter'),
    'href' => set_url_parameter (AI_URL_DEBUG_TAGS, $debug_tags),
  );

  $ai_wp_data [AI_DEBUG_MENU_ITEMS][] = array (
    'id' => 'ai-toolbar-no-insertion',
    'parent' => 'ai-toolbar-settings',
    'title' => '<span class="ab-icon'.$debug_no_insertion_class.'"></span>' . _x('Disable Insertion', 'Menu item', 'ad-inserter'),
    'href' => set_url_parameter (AI_URL_DEBUG_NO_INSERTION, $debug_no_insertion),
  );

  if (defined ('AI_ADBLOCKING_DETECTION') && AI_ADBLOCKING_DETECTION) {
    if ($ai_wp_data [AI_ADB_DETECTION]) {
      $ai_wp_data [AI_DEBUG_MENU_ITEMS][] = array (
        'id' => 'ai-toolbar-adb-status',
        'parent' => 'ai-toolbar-settings',
        'title' => '<span class="ab-icon'.$debug_ad_blocking_status_class.'"></span>' . _x('Ad Blocking Status', 'Menu item', 'ad-inserter'),
        'href' => set_url_parameter (AI_URL_DEBUG_AD_BLOCKING_STATUS, $debug_ad_blocking_status),
      );

      $ai_wp_data [AI_DEBUG_MENU_ITEMS][] = array (
        'id' => 'ai-toolbar-adb',
        'parent' => 'ai-toolbar-settings',
        'title' => '<span class="ab-icon'.$debug_ad_blocking_class.'"></span>' . _x('Simulate Ad Blocking', 'Menu item', 'ad-inserter'),
        'href' => set_url_parameter (AI_URL_DEBUG_AD_BLOCKING, $debug_ad_blocking),
      );
    }
  }

  if (!defined ('AI_DEBUGGING_DEMO')) {
    $ai_wp_data [AI_DEBUG_MENU_ITEMS][] = array (
      'id' => 'ai-toolbar-processing',
      'parent' => 'ai-toolbar-settings',
      'title' => '<span class="ab-icon'.$debug_processing_class.'"></span>' . _x('Log Processing', 'Menu item', 'ad-inserter'),
      'href' => set_url_parameter (AI_URL_DEBUG_PROCESSING, $debug_processing),
    );
  }
}

function ai_toolbar ($wp_admin_bar) {
  global $ai_wp_data;

  ai_toolbar_menu_items ();

  foreach ($ai_wp_data [AI_DEBUG_MENU_ITEMS] as $menu_item) {
    $wp_admin_bar->add_node ($menu_item);
  }
}

function set_user () {
  global $ai_wp_data;

  if ($ai_wp_data [AI_WP_USER_SET]) return;

  if (is_user_logged_in ())       $ai_wp_data [AI_WP_USER] |= AI_USER_LOGGED_IN;
  if (current_user_role () >= 5)  $ai_wp_data [AI_WP_USER] |= AI_USER_ADMINISTRATOR;

//  if (isset ($_GET [AI_URL_DEBUG_USER]) && $_GET [AI_URL_DEBUG_USER] != 0) $ai_wp_data [AI_WP_USER] = $_GET [AI_URL_DEBUG_USER];

  $ai_wp_data [AI_WP_USER_SET] = true;
}

function set_page_type () {
  global $ai_wp_data;

  if ($ai_wp_data [AI_WP_PAGE_TYPE] != AI_PT_NONE) return;

      if (is_front_page ())                                         $ai_wp_data [AI_WP_PAGE_TYPE] = AI_PT_HOMEPAGE;
  elseif (is_single())                                              $ai_wp_data [AI_WP_PAGE_TYPE] = AI_PT_POST;
  elseif (is_page())                                                $ai_wp_data [AI_WP_PAGE_TYPE] = AI_PT_STATIC;
  elseif (is_feed())                                                $ai_wp_data [AI_WP_PAGE_TYPE] = AI_PT_FEED;
  elseif (is_category())                                            $ai_wp_data [AI_WP_PAGE_TYPE] = AI_PT_CATEGORY;
  elseif (is_archive() || (is_home () && !is_front_page ()))        $ai_wp_data [AI_WP_PAGE_TYPE] = AI_PT_ARCHIVE;
  elseif (is_admin())                                               $ai_wp_data [AI_WP_PAGE_TYPE] = AI_PT_ADMIN;  // Admin pages may also be search pages
  elseif (is_search())                                              $ai_wp_data [AI_WP_PAGE_TYPE] = AI_PT_SEARCH;
  elseif (is_404())                                                 $ai_wp_data [AI_WP_PAGE_TYPE] = AI_PT_404;

  if (
    // AMP, AMP WP
    function_exists ('is_amp_endpoint') && is_amp_endpoint () ||

    // AMP for WP - Accelerated Mobile Pages for WordPress
    function_exists ('ampforwp_is_amp_endpoint') && ampforwp_is_amp_endpoint () ||

    // WP AMP Ninja
    isset ($_GET ['wpamp']) ||

    // WP AMP - Accelerated Mobile Pages for WordPress
    function_exists ('is_wp_amp') && is_wp_amp () ||

    // Better AMP - WordPress Complete AMP
    function_exists ('is_better_amp') && is_better_amp ()
  ) {
    $ai_wp_data [AI_WP_AMP_PAGE] = true;
    define ('AI_AMP_PAGE', true);
  }
}

function ai_log_message ($message) {
  global $ai_last_time, $ai_processing_log;
  $ai_processing_log []= rtrim (sprintf ("%4d  %-50s", (microtime (true) - $ai_last_time) * 1000, $message));
}

function ai_log_filter_content ($content_string) {

  $content_string = preg_replace ("/\[\[AI_[A|B]P([\d].?)\]\]/", "", $content_string);
  return str_replace (array ("<!--", "-->", "\n", "\r"), array ("<!++", "++>", "*n", "*r"), $content_string);
}

function ai_log_content (&$content) {
  if (strlen ($content) < 100) ai_log (ai_log_filter_content ($content) . '  ['.number_of_words ($content).' words]'); else
    ai_log (ai_log_filter_content (html_entity_decode (substr ($content, 0, 60))) . ' ... ' . ai_log_filter_content (html_entity_decode (substr ($content, - 60))) . '  ['.number_of_words ($content).' words]');
}

function ai_filter_code ($code) {
  $code = preg_replace ("/\[\[AI_[A|B]P([\d].?)\]\]/", "", $code);
  return str_replace (array ("<!--", "-->"), array ("<!++", "++>"), $code);
}

function ai_dump_code ($code, $max_size = 0) {
  if ($max_size == 0) return ai_filter_code ($code); else
    if ($max_size != 0 && strlen ($code) < $max_size) return ai_filter_code ($code); else
      return ai_filter_code (html_entity_decode (substr ($code, 0, 120))) . ' ... ' . ai_filter_code (html_entity_decode (substr ($code, - 120)));
}

function ai_block_insertion_status ($block, $ai_last_check) {
  global $block_object;

  if ($block < 1 || $block > 96) $block = 0;

  if ($ai_last_check == AI_CHECK_INSERTED) return "INSERTED";
  $status = "FAILED CHECK: ";
  $obj = $block_object [$block];
  switch ($ai_last_check) {
    case AI_CHECK_PAGE_TYPE_FRONT_PAGE:  $status .= "ENABLED ON HOMEPAGE"; break;
    case AI_CHECK_PAGE_TYPE_STATIC_PAGE: $status .= "ENABLED ON STATIC PAGE"; break;
    case AI_CHECK_PAGE_TYPE_POST:        $status .= "ENABLED ON POST"; break;
    case AI_CHECK_PAGE_TYPE_CATEGORY:    $status .= "ENABLED ON CATEGORY"; break;
    case AI_CHECK_PAGE_TYPE_SEARCH:      $status .= "ENABLED ON SEARCH"; break;
    case AI_CHECK_PAGE_TYPE_ARCHIVE:     $status .= "ENABLED ON ARCHIVE"; break;
    case AI_CHECK_PAGE_TYPE_FEED:        $status .= "ENABLED ON FEED"; break;
    case AI_CHECK_PAGE_TYPE_404:         $status .= "ENABLED ON 404"; break;

    case AI_CHECK_DESKTOP_DEVICES:          $status .= "DESKTOP DEVICES"; break;
    case AI_CHECK_MOBILE_DEVICES:           $status .= "MOBILE DEVICES"; break;
    case AI_CHECK_TABLET_DEVICES:           $status .= "TABLET DEVICES"; break;
    case AI_CHECK_PHONE_DEVICES:            $status .= "PHONE DEVICES"; break;
    case AI_CHECK_DESKTOP_TABLET_DEVICES:   $status .= "DESKTOP TABLET DEVICES"; break;
    case AI_CHECK_DESKTOP_PHONE_DEVICES:    $status .= "DESKTOP PHONE DEVICES"; break;

    case AI_CHECK_CATEGORY:                 $status .= "CATEGORY"; break;
    case AI_CHECK_TAG:                      $status .= "TAG"; break;
    case AI_CHECK_TAXONOMY:                 $status .= "TAXONOMY"; break;
    case AI_CHECK_ID:                       $status .= "ID"; break;
    case AI_CHECK_URL:                      $status .= "URL"; break;
    case AI_CHECK_URL_PARAMETER:            $status .= "URL PARAMETER"; break;
    case AI_CHECK_REFERER:                  $status .= "REFERER ". $obj->get_ad_domain_list(); break;
    case AI_CHECK_IP_ADDRESS:               $status .= "IP ADDRESS ". $obj->get_ad_ip_address_list(); break;
    case AI_CHECK_COUNTRY:                  $status .= "COUNTRY ". $obj->get_ad_country_list (true); break;

    case AI_CHECK_SCHEDULING:               $status .= "SCHEDULING"; break;
    case AI_CHECK_CODE:                     $status .= "CODE NOT EMPTY"; break;
    case AI_CHECK_LOGGED_IN_USER:           $status .= "LOGGED-IN USER"; break;
    case AI_CHECK_NOT_LOGGED_IN_USER:       $status .= "NOT LOGGED-IN USER"; break;
    case AI_CHECK_ADMINISTRATOR:            $status .= "ADMINISTRATOR"; break;

    case AI_CHECK_INDIVIDUALLY_DISABLED:    $status .= "INDIVIDUALLY DISABLED"; break;
    case AI_CHECK_INDIVIDUALLY_ENABLED:     $status .= "INDIVIDUALLY ENABLED"; break;
    case AI_CHECK_DISABLED_MANUALLY:        $status .= "DISABLED BY HTML COMMENT"; break;

    case AI_CHECK_MAX_INSERTIONS:           $status .= "MAX INSERTIONS " . $obj->get_maximum_insertions (); break;
    case AI_CHECK_MAX_PAGE_BLOCKS:          $status .= "MAX PAGE BLOCKS " . get_max_page_blocks (); break;
    case AI_CHECK_FILTER:                   $status .= ($obj->get_inverted_filter() ? 'INVERTED ' : '') . "FILTER " . $obj->get_call_filter(); break;
    case AI_CHECK_PARAGRAPH_COUNTING:       $status .= "PARAGRAPH COUNTING"; break;
    case AI_CHECK_IMAGE_COUNTING:           $status .= "IMAGE COUNTING"; break;
    case AI_CHECK_MIN_NUMBER_OF_WORDS:      $status .= "MIN NUMBER OF WORDS " . intval ($obj->get_minimum_words()); break;
    case AI_CHECK_MAX_NUMBER_OF_WORDS:      $status .= "MAX NUMBER OF WORDS " . (intval ($obj->get_maximum_words()) == 0 ? 1000000 : intval ($obj->get_maximum_words())); break;
    case AI_CHECK_DEBUG_NO_INSERTION:       $status .= "DEBUG NO INSERTION"; break;
    case AI_CHECK_INSERTION_NOT_DISABLED:   $status .= "INSERTION NOT DISABLED"; break;
    case AI_CHECK_PARAGRAPH_TAGS:           $status .= "PARAGRAPH TAGS"; break;
    case AI_CHECK_PARAGRAPHS_WITH_TAGS:     $status .= "PARAGRAPHS WITH TAGS"; break;
    case AI_CHECK_PARAGRAPHS_AFTER_NO_COUNTING_INSIDE:       $status .= "PARAGRAPHS AFTER NO COUNTING INSIDE"; break;
    case AI_CHECK_PARAGRAPHS_AFTER_MIN_MAX_WORDS:    $status .= "PARAGRAPHS AFTER MIN MAX WORDS"; break;
    case AI_CHECK_PARAGRAPHS_AFTER_TEXT:             $status .= "PARAGRAPHS AFTER TEXT"; break;
    case AI_CHECK_PARAGRAPHS_AFTER_CLEARANCE:        $status .= "PARAGRAPHS AFTER CLEARANCE"; break;
    case AI_CHECK_PARAGRAPHS_MIN_NUMBER:             $status .= "PARAGRAPHS MIN NUMBER"; break;
    case AI_CHECK_PARAGRAPH_NUMBER:                  $status .= "PARAGRAPH NUMBER " . $obj->get_paragraph_number(); break;
    case AI_CHECK_NO_PARAGRAPHS:            $status .= "NO PARAGRAPHS"; break;

    case AI_CHECK_DO_NOT_INSERT:            $status .= "PARAGRAPH CLEARANCE"; break;
    case AI_CHECK_AD_ABOVE:                 $status .= "PARAGRAPH CLEARANCE ABOVE"; break;
    case AI_CHECK_AD_BELOW:                 $status .= "PARAGRAPH CLEARANCE BELOW"; break;
    case AI_CHECK_SHORTCODE_ATTRIBUTES:     $status .= "SHORTCODE ATTRIBUTES"; break;

    case AI_CHECK_ENABLED_PHP:              $status .= "PHP FUNCTION ENABLED"; break;
    case AI_CHECK_ENABLED_SHORTCODE:        $status .= "SHORTCODE ENABLED"; break;
    case AI_CHECK_ENABLED_WIDGET:           $status .= "WIDGET ENABLED"; break;

    case AI_CHECK_NONE:                     $status = "BLOCK $block"; break;
    default: $status .= "?"; break;
  }
  $ai_last_check = AI_CHECK_NONE;
  return $status;
}

function ai_log_block_status ($block, $ai_last_check) {
  global $block_object, $block_insertion_log, $ad_inserter_globals, $ai_wp_data;

  if ($block >= 1 && $ai_last_check == AI_CHECK_INSERTED) {
    $obj = $block_object [$block];
    $global_name = AI_BLOCK_COUNTER_NAME . $block;

    if ($obj->check_code_insertions !== null) {
      $block_insertion_log [] = sprintf ("% 2d BLOCK % 2d %s %s%s", $block, $block, 'CHECK', '('.$obj->check_code_insertions . ')', $ad_inserter_globals [$global_name] != 1 ? '['.$ad_inserter_globals [$global_name] . ']' : '');
      return '';
    }
    elseif ($obj->no_insertion_text != '') {
      $block_insertion_log [] = sprintf ("% 2d BLOCK % 2d %s %s", $block, $block, $obj->no_insertion_text, $ad_inserter_globals [$global_name] != 1 ? '['.$ad_inserter_globals [$global_name] . ']' : '');
      return '';
    }
  }

  return ai_log_block_insertion_status ($block, $ai_last_check);
}

function ai_log_block_insertion_status ($block, $ai_last_check) {
  global $block_insertion_log, $ad_inserter_globals;

  if ($block < 1) return 'NO BLOCK SHORTCODE';

  $global_name = AI_BLOCK_COUNTER_NAME . $block;

  $block_status = ai_block_insertion_status ($block, $ai_last_check);
  $block_insertion_log [] = sprintf ("% 2d BLOCK % 2d %s %s", $block, $block, $block_status, $ai_last_check == AI_CHECK_INSERTED && $ad_inserter_globals [$global_name] != 1 ? '['.$ad_inserter_globals [$global_name] . ']' : '');

  return "BLOCK $block " . $block_status;
}

function ai_log ($message = "") {
  global $ai_last_time, $ai_processing_log;

  if ($message != "") {
    if ($message [strlen ($message) - 1] == "\n") {
      ai_log_message (str_replace ("\n", "", $message));
      $ai_processing_log []= "";
    } else ai_log_message ($message);
  } else $ai_processing_log []= "";
  $ai_last_time = microtime (true);
}

function remove_debug_parameters_from_url ($url = false) {
  if (defined ('AI_DEBUGGING_DEMO')) {
    $parameters = array (AI_URL_DEBUG, AI_URL_DEBUG_PROCESSING);
  } else {
      if (defined ('AI_ADBLOCKING_DETECTION') && AI_ADBLOCKING_DETECTION) {
        $parameters = array (AI_URL_DEBUG, AI_URL_DEBUG_PROCESSING, AI_URL_DEBUG_BLOCKS, AI_URL_DEBUG_USER, AI_URL_DEBUG_TAGS, AI_URL_DEBUG_POSITIONS, AI_URL_DEBUG_NO_INSERTION, AI_URL_DEBUG_AD_BLOCKING, AI_URL_DEBUG_AD_BLOCKING_STATUS);
      } else
      $parameters = array (AI_URL_DEBUG, AI_URL_DEBUG_PROCESSING, AI_URL_DEBUG_BLOCKS, AI_URL_DEBUG_USER, AI_URL_DEBUG_TAGS, AI_URL_DEBUG_POSITIONS, AI_URL_DEBUG_NO_INSERTION);
  }

  return remove_query_arg ($parameters, $url);
}

function set_url_parameter ($parameter, $value) {
  return add_query_arg ($parameter, $value, remove_debug_parameters_from_url ());
}

function number_of_words (&$content) {
  $text = str_replace ("\r", "", $content);
  $text = str_replace (array ("\n", "  "), " ", $text);
  $text = preg_replace('#<style.*?'.'>(.*?)</style>#i', '', $text);
  $text = preg_replace('#<script.*?'.'>(.*?)</script>#i', '', $text);
  $text = htmlspecialchars_decode ($text);
  $text = trim (strip_tags ($text));
  $text = preg_replace ('#\s+#', ' ', $text);

  if ($text == '') return 0;

  return count (explode (' ', $text));
}

function ai_loop_check ($query, $action) {
  global $ai_wp_data;

  $ai_wp_data [AI_CONTEXT] = $action == 'loop_start' ? AI_CONTEXT_BEFORE_POST : AI_CONTEXT_AFTER_POST;

  if ($ai_wp_data [AI_WP_AMP_PAGE]) return true;

  if (isset ($query) && method_exists ($query, 'is_main_query')) {
    if ($query->is_main_query()) return true;
  }

  return false;
}


function ai_process_head_codes ($head) {
  global $ai_wp_data;

  if (!get_disable_header_code ()) {
    if (!empty ($ai_wp_data [AI_HEAD_CODES])) {
      $head = str_replace ("<!--[AI_HEAD_CODES]-->", implode ("\n", $ai_wp_data [AI_HEAD_CODES]) . "\n", $head);

      if (($ai_wp_data [AI_WP_DEBUGGING] & AI_DEBUG_BLOCKS) != 0) {
        $head = str_replace ("&lt;!--[AI_HEAD_CODES]--&gt;", '<span style=\'color: #00f;\'>' . str_replace (array ('<', '>'), array ('&lt;', '&gt;'), implode ("\\n", $ai_wp_data [AI_HEAD_CODES])) . '</span>', $head);
      }
    }

    foreach ($ai_wp_data [AI_HEAD_GROUPS] as $group_name => $group_codes) {
      $group_code = implode ("\n", $group_codes);
      $head = str_replace ("<!--[AI_HEAD_GROUPS $group_name]-->", $group_code, $head);

      if (($ai_wp_data [AI_WP_DEBUGGING] & AI_DEBUG_BLOCKS) != 0) {
        $head = str_replace ("&lt;!--[AI_HEAD_GROUPS $group_name]--&gt;", str_replace (array ('<', '>'), array ('<span style=\'color: #c0f;\'>&lt;', '&gt;</span>'), implode ("\\n", $group_codes)), $head);
      }
    }
  }

  $head = preg_replace ("#<!--\[AI(.+?)\]-->#", '', $head);

  if (($ai_wp_data [AI_WP_DEBUGGING] & AI_DEBUG_BLOCKS) != 0) {
    $head = preg_replace ("#&lt;!--\[AI(.+?)\]--&gt;#", '', $head);
  }

  $head = preg_replace ("#<script .+js/ai\-jquery\.js.+></script>\n#", '', $head);

  return ($head);
}

function ai_buffering_start_hook () {
  global $ai_wp_data;

  if (defined ('AI_BUFFERING')) {
    if (get_output_buffering ()) {
      if ($ai_wp_data [AI_WP_PAGE_TYPE] != AI_PT_AJAX && !$ai_wp_data [AI_CODE_FOR_IFRAME]) {
        ai_buffering_start ();
      }
    }
  }
}

function ai_buffering_start () {
  global $ai_wp_data;

  if (($ai_wp_data [AI_WP_DEBUGGING] & AI_DEBUG_PROCESSING) != 0) {
    ai_log ("BUFFERING START: level " . ob_get_level () );
  }

  ob_start ();

  if (!defined ('AI_BUFFERING_START')) define ('AI_BUFFERING_START', true);
}

function ai_buffering_end () {
  global $ai_wp_data, $ai_total_plugin_time, $ai_db_options_extract, $block_object, $ad_inserter_globals;

  if (!defined ('AI_BUFFERING_START')) return;

  $page = ob_get_clean();

  if (($ai_wp_data [AI_WP_DEBUGGING] & AI_DEBUG_PROCESSING) != 0) {
    ai_log ("BUFFERING END: level " . ob_get_level ());
    $start_time = microtime (true);
  }

  $matches = preg_split ('/(<body.*?'.'>)/i', $page, - 1, PREG_SPLIT_NO_EMPTY | PREG_SPLIT_DELIM_CAPTURE);

  if (($ai_wp_data [AI_WP_DEBUGGING] & AI_DEBUG_PROCESSING) != 0) {
    ai_log ("BUFFER body matches: " . count ($matches));
  }

  $php_version = explode ('.', PHP_VERSION);
  if (count ($matches) == 3 && ($php_version [0] > 5 || ($php_version [0] == 5 && $php_version [1] >= 3))) {
    if (($ai_wp_data [AI_WP_DEBUGGING] & AI_DEBUG_PROCESSING) != 0) {
      ai_log ("BUFFER PROCESSING");
    }

    $head = $matches [0];
    $body = $matches [2];

    if (isset ($ai_db_options_extract [HTML_ELEMENT_HOOK_BLOCKS][$ai_wp_data [AI_WP_PAGE_TYPE]]) && class_exists ('DOMDocument')) {

//      $php_version = explode ('.', PHP_VERSION);
//      if ($php_version [0] > 5 || ($php_version [0] == 5 && $php_version [1] >= 3)) {
//        // phpQuery with anonymous functions
//        require_once ('includes/phpQuery.php');
//      } else {
//        // phpQuery with create_function
//        require_once ('includes/phpQuery_52.php');
//      }
     require_once ('includes/phpQuery.php');

      $no_closing_tag = array ('img', 'hr', 'br');
      $multibyte = $ai_wp_data [AI_MBSTRING_LOADED] && get_paragraph_counting_functions() == AI_MULTIBYTE_PARAGRAPH_COUNTING_FUNCTIONS;

      foreach ($ai_db_options_extract [HTML_ELEMENT_HOOK_BLOCKS][$ai_wp_data [AI_WP_PAGE_TYPE]] as $block) {

        $obj = $block_object [$block];
        $obj->clear_code_cache ();

        switch ($obj->get_automatic_insertion ()) {
          case AI_AUTOMATIC_INSERTION_BEFORE_HTML_ELEMENT:
            $insertion_position = 'before';
            break;
          case AI_AUTOMATIC_INSERTION_AFTER_HTML_ELEMENT:
            $insertion_position = 'after';
            break;
          case AI_AUTOMATIC_INSERTION_INSIDE_HTML_ELEMENT:
            switch ($obj->get_inside_element ()) {
              case AI_HTML_PREPEND_CONTENT:
                $insertion_position = 'prepend';
                break;
              case AI_HTML_APPEND_CONTENT:
                $insertion_position = 'append';
                break;
              case AI_HTML_REPLACE_CONTENT:
                $insertion_position = 'replace-content';
                break;
              case AI_HTML_REPLACE_ELEMENT:
                $insertion_position = 'replace-element';
                break;
            }
            break;
        }

        $selector = $obj->get_html_selector ();

        libxml_use_internal_errors (true);
        $content = phpQuery::newDocumentHTML ($body);
        libxml_use_internal_errors (false);

        foreach (pq ($selector) as $element) {

          if (in_array ($element->tagName, $no_closing_tag)) {
            switch ($insertion_position) {
              case 'replace-content':
              case 'prepend':
              case 'append':
                $insertion_position = 'after';
                break;
            }
          }

          switch ($insertion_position) {
            case 'before':
              pq ($element)->before (AI_MARKER_START.$element->tagName.AI_MARKER_END);
              break;
            case 'after':
              pq ($element)->after (AI_MARKER_START.$element->tagName.AI_MARKER_END);
              break;
            case 'prepend':
              pq ($element)->prepend (AI_MARKER_START.$element->tagName.AI_MARKER_END);
              break;
            case 'append':
              pq ($element)->append (AI_MARKER_START.$element->tagName.AI_MARKER_END);
              break;
            case 'replace-content':
              pq ($element)->prepend (AI_MARKER_START.'-'.$element->tagName.'-'.AI_MARKER_END);
              pq ($element)->append  (AI_MARKER_START.'='.$element->tagName.'='.AI_MARKER_END);
              break;
            case 'replace-element':
              pq ($element)->before (AI_MARKER_START.'-'.$element->tagName.'-'.AI_MARKER_END);
              pq ($element)->after  (AI_MARKER_START.'='.$element->tagName.'='.AI_MARKER_END);
              break;
          }
        }

        switch ($insertion_position) {
          case 'replace-content':
          case 'replace-element':
            $markers  = preg_split ('/('.AI_MARKER_START.'-.*?-'.AI_MARKER_END.')/', $content->htmlOuter (), - 1, PREG_SPLIT_NO_EMPTY | PREG_SPLIT_DELIM_CAPTURE);
            $markers2 = preg_split ('/('.AI_MARKER_START.'=.*?='.AI_MARKER_END.')/', $content->htmlOuter (), - 1, PREG_SPLIT_NO_EMPTY | PREG_SPLIT_DELIM_CAPTURE);
            break;
          default:
            $markers = preg_split ('/('.AI_MARKER_START.'.*?'.AI_MARKER_END.')/', $content->htmlOuter (), - 1, PREG_SPLIT_NO_EMPTY | PREG_SPLIT_DELIM_CAPTURE);
            break;
        }

        $content_before = '';
        $insertions = array ();
        foreach ($markers as $marker) {
          switch ($insertion_position) {
            case 'replace-content':
            case 'replace-element':
              $marker_start_string = AI_MARKER_START.'-';
              break;
            default:
              $marker_start_string = AI_MARKER_START;
              break;
          }
          if (strpos ($marker, $marker_start_string) === 0) {
            switch ($insertion_position) {
              case 'replace-content':
              case 'replace-element':
                $tag = str_replace (array (AI_MARKER_START.'-', '-'.AI_MARKER_END), '', $marker);
                break;
              default:
                $tag = str_replace (array (AI_MARKER_START, AI_MARKER_END), '', $marker);
                break;
            }

            switch ($insertion_position) {
              case 'before':
              case 'replace-element':
                $tag_string = "<{$tag}";
                break;
              case 'after':
                if (in_array ($tag, $no_closing_tag)) $tag_string = '>'; else $tag_string = "</{$tag}>";
                break;
              case 'prepend':
              case 'replace-content':
                $tag_string = "<{$tag}[^>]*>";
                break;
              case 'append':
                $tag_string = "</{$tag}>";
                break;
            }

            preg_match_all ("#{$tag_string}#i", $content_before, $tag_matches);

            switch ($insertion_position) {
              case 'before':
              case 'replace-element':
                $insertions []= array ($tag_string, count ($tag_matches [0]) + 1);
                break;
              case 'after':
                $insertions []= array ($tag_string, count ($tag_matches [0]));
                break;
              case 'replace-content':
              case 'prepend':
                $insertions []= array ($tag_string, count ($tag_matches [0]));
                break;
              case 'append':
                $insertions []= array ($tag_string, count ($tag_matches [0]) + 1);
                break;
            }

            continue;
          }
          $content_before .= $marker;
        }

        switch ($insertion_position) {
          case 'replace-content':
          case 'replace-element':
            $content_before = '';
            $insertions2 = array ();
            foreach ($markers2 as $marker) {
              if (strpos ($marker, AI_MARKER_START.'=') === 0) {
                $tag = str_replace (array (AI_MARKER_START.'=', '='.AI_MARKER_END), '', $marker);
                $tag_string = "</{$tag}>";
                preg_match_all ("#{$tag_string}#i", $content_before, $tag_matches);

                switch ($insertion_position) {
                  case 'replace-content':
                    $insertions2 []= array ($tag_string, count ($tag_matches [0]) + 1);
                    break;
                  case 'replace-element':
                    $insertions2 []= array ($tag_string, count ($tag_matches [0]));
                    break;
                }

                continue;
              }
              $content_before .= $marker;
            }
            break;
        }

        $insertion_offsets = array ();
        foreach ($insertions as $insertion) {
          $tag          = $insertion [0];
          $tag_counter  = $insertion [1];
          preg_match_all ("#$tag#i", $body, $org_tag_matches, PREG_OFFSET_CAPTURE);
          if (isset ($org_tag_matches [0][$tag_counter - 1])) {

            switch ($insertion_position) {
              case 'before':
              case 'replace-element':
                $insertion_offsets []= $org_tag_matches [0][$tag_counter - 1][1];
                break;
              case 'after':
                $insertion_offsets []= $org_tag_matches [0][$tag_counter - 1][1] + strlen ($tag);
                break;
              case 'prepend':
              case 'replace-content':
                $insertion_offsets []= $org_tag_matches [0][$tag_counter - 1][1] + strlen ($org_tag_matches [0][$tag_counter - 1][0]);
                break;
              case 'append':
                $insertion_offsets []= $org_tag_matches [0][$tag_counter - 1][1];
                break;
            }
          }
        }

        sort ($insertion_offsets);

        switch ($insertion_position) {
          case 'replace-content':
          case 'replace-element':
            $insertion_offsets2 = array ();
            foreach ($insertions2 as $insertion) {
              $tag          = $insertion [0];
              $tag_counter  = $insertion [1];
              preg_match_all ("#$tag#i", $body, $org_tag_matches, PREG_OFFSET_CAPTURE);
              if (isset ($org_tag_matches [0][$tag_counter - 1])) {

                switch ($insertion_position) {
                  case 'replace-content':
                    $insertion_offsets2 []= $org_tag_matches [0][$tag_counter - 1][1];
                    break;
                  case 'replace-element':
                    $insertion_offsets2 []= $org_tag_matches [0][$tag_counter - 1][1] + strlen ($tag);
                    break;
                }
              }
            }

            sort ($insertion_offsets2);

            break;
        }

        $new_content = '';
        $current_offset = 0;

        switch ($insertion_position) {
          case 'before':
            $action       = 'before_html_element';
            // translators: Debugging position name Before HTML element
            $action_name  = __('Before', 'ad-inserter') . ' ' . $selector;
            break;
          case 'after':
            $action       = 'after_html_element';
            // translators: Debugging position name After HTML element
            $action_name  = __('After', 'ad-inserter') . ' ' . $selector;
            break;
          case 'prepend':
            $action       = 'prepend_html_element';
            // translators: Debugging position name Prepend content of HTML element (before the content of the HTML element)
            $action_name  = __('Prepend content', 'ad-inserter') . ' ' . $selector;
            break;
          case 'append':
            $action       = 'append_html_element';
            // translators: Debugging position name Append content of HTML element (after the content of the HTML element)
            $action_name  = __('Append content', 'ad-inserter') . ' ' . $selector;
            break;
          case 'replace-content':
            $action       = 'replace_content_html_element';
            // translators: Debugging position name Replace content of HTML element
            $action_name  = __('Replace content', 'ad-inserter') . ' ' . $selector;
            break;
          case 'replace-element':
            // translators: Debugging position name Replace HTML element
            $action       = 'replace_html_element';
            $action_name  = __('Replace', 'ad-inserter') . ' ' . $selector;
            break;
        }

        $globals_name = 'AI_' . strtoupper ($action) . '_COUNTER';
        unset ($ad_inserter_globals [$globals_name]);
        $ai_db_options_extract [$action . CUSTOM_HOOK_BLOCKS][$ai_wp_data [AI_WP_PAGE_TYPE]] = array ($block);

        foreach ($insertion_offsets as $index => $insertion_offset) {
          if ($multibyte)
            $new_content .= mb_substr ($body, $current_offset, $insertion_offset - $current_offset);
              $new_content .= substr ($body, $current_offset, $insertion_offset - $current_offset);

          switch ($insertion_position) {
            case 'replace-content':
            case 'replace-element':
              if (isset ($insertion_offsets2 [$index])) {
                $current_offset = $insertion_offsets2 [$index];
              } else $current_offset = $insertion_offset;
              break;
            default:
              $current_offset = $insertion_offset;
              break;
          }

          ob_start ();
                                   // Dummy
          ai_custom_hook ($action, AI_AUTOMATIC_INSERTION_DISABLED, $action_name);

          $new_content .= ob_get_clean();
        }

        unset ($ai_db_options_extract [$action . CUSTOM_HOOK_BLOCKS][$ai_wp_data [AI_WP_PAGE_TYPE]]);

        $new_content .= substr ($body, $current_offset);

        $body = $new_content;
      }
    }

    $head = ai_process_head_codes ($head);

    echo $head, $matches [1];

    if (($ai_wp_data [AI_WP_DEBUGGING] & AI_DEBUG_POSITIONS) != 0) {
      $class = AI_DEBUG_STATUS_CLASS.' status-ok';
      // translators: Debugging message when output buffering is enabled
      echo "<section class='$class'>" . __('OUTPUT BUFFERING', 'ad-inserter') . '</section>';
    }

    // translators: Debugging position
    ai_custom_hook ('above_header', AI_AUTOMATIC_INSERTION_ABOVE_HEADER, 'Above Header', __('Above Header', 'ad-inserter'));
    echo $body;
  } else echo $page;

  if (($ai_wp_data [AI_WP_DEBUGGING] & AI_DEBUG_PROCESSING) != 0) {
    ai_log ("BUFFER PROCESSING END: ". number_format (1000 * (microtime (true) - $start_time), 2)." ms\n");
    $ai_wp_data [AI_PROCESSING_TIME] = false;
  }
}

function ai_post_check ($post, $action) {
  global $ai_wp_data, $ad_inserter_globals;

  if ($ai_wp_data [AI_WP_PAGE_TYPE] == AI_PT_POST) return false;
  if ($ai_wp_data [AI_WP_PAGE_TYPE] == AI_PT_STATIC) return false;

  // Not used on AMP pages (yet)
  if (!$ai_wp_data [AI_WP_AMP_PAGE]) {
    if (!in_the_loop()) return false;
  }

  // Skip insertion before the first post
  if (!defined ('AI_POST_CHECK')) {
    define ('AI_POST_CHECK', true);
    return false;
  }

  $ai_wp_data [AI_CONTEXT] = AI_CONTEXT_BETWEEN_POSTS;

  return true;
}


function ai_content_marker () {
  if (get_disable_block_insertions ()) return;

  echo '<span class="ai-content"></span>', "\n";
}

function ai_hook_function_loop_start ($hook_parameter) {
  ai_custom_hook ('loop_start', AI_AUTOMATIC_INSERTION_BEFORE_POST, AI_TEXT_ENG_BEFORE_POST, AI_TEXT_BEFORE_POST, $hook_parameter, 'ai_loop_check');
}

function ai_hook_function_loop_end ($hook_parameter) {
  ai_custom_hook ('loop_end', AI_AUTOMATIC_INSERTION_AFTER_POST, AI_TEXT_ENG_AFTER_POST, AI_TEXT_AFTER_POST, $hook_parameter, 'ai_loop_check');
}

function ai_hook_function_post ($hook_parameter) {
  ai_custom_hook ('the_post', AI_AUTOMATIC_INSERTION_BETWEEN_POSTS, AI_TEXT_ENG_BETWEEN_POSTS, AI_TEXT_BETWEEN_POSTS, $hook_parameter, 'ai_post_check');
}

function ai_hook_function_footer () {
  ai_custom_hook ('wp_footer', AI_AUTOMATIC_INSERTION_FOOTER, AI_TEXT_ENG_FOOTER, AI_TEXT_FOOTER);
}


// Code for PHP VERSION >= 5.3.0
//function ai_get_custom_hook_function ($action, $insertion_type, $name) {
//  return function () use ($action, $insertion_type, $name) {
//    ai_custom_hook ($action, $insertion_type, $name);
//  };
//}


// Code for PHP VERSION < 5.3.0
function ai_custom_hook_function_0 () {
  global $ai_custom_hooks;
  ai_custom_hook ($ai_custom_hooks [0]['action'], AI_AUTOMATIC_INSERTION_CUSTOM_HOOK + 0, $ai_custom_hooks [0]['name']);
}

function ai_custom_hook_function_1 () {
  global $ai_custom_hooks;
  ai_custom_hook ($ai_custom_hooks [1]['action'], AI_AUTOMATIC_INSERTION_CUSTOM_HOOK + 1, $ai_custom_hooks [1]['name']);
}

function ai_custom_hook_function_2 () {
  global $ai_custom_hooks;
  ai_custom_hook ($ai_custom_hooks [2]['action'], AI_AUTOMATIC_INSERTION_CUSTOM_HOOK + 2, $ai_custom_hooks [2]['name']);
}

function ai_custom_hook_function_3 () {
  global $ai_custom_hooks;
  ai_custom_hook ($ai_custom_hooks [3]['action'], AI_AUTOMATIC_INSERTION_CUSTOM_HOOK + 3, $ai_custom_hooks [3]['name']);
}

function ai_custom_hook_function_4 () {
  global $ai_custom_hooks;
  ai_custom_hook ($ai_custom_hooks [4]['action'], AI_AUTOMATIC_INSERTION_CUSTOM_HOOK + 4, $ai_custom_hooks [4]['name']);
}

function ai_custom_hook_function_5 () {
  global $ai_custom_hooks;
  ai_custom_hook ($ai_custom_hooks [5]['action'], AI_AUTOMATIC_INSERTION_CUSTOM_HOOK + 5, $ai_custom_hooks [5]['name']);
}

function ai_custom_hook_function_6 () {
  global $ai_custom_hooks;
  ai_custom_hook ($ai_custom_hooks [6]['action'], AI_AUTOMATIC_INSERTION_CUSTOM_HOOK + 6, $ai_custom_hooks [6]['name']);
}

function ai_custom_hook_function_7 () {
  global $ai_custom_hooks;
  ai_custom_hook ($ai_custom_hooks [7]['action'], AI_AUTOMATIC_INSERTION_CUSTOM_HOOK + 7, $ai_custom_hooks [7]['name']);
}

function ai_custom_hook_function_8 () {
  global $ai_custom_hooks;
  ai_custom_hook ($ai_custom_hooks [8]['action'], AI_AUTOMATIC_INSERTION_CUSTOM_HOOK + 8, $ai_custom_hooks [8]['name']);
}

function ai_custom_hook_function_9 () {
  global $ai_custom_hooks;
  ai_custom_hook ($ai_custom_hooks [9]['action'], AI_AUTOMATIC_INSERTION_CUSTOM_HOOK + 9, $ai_custom_hooks [9]['name']);
}

function ai_wp_hook () {
  global $ai_wp_data, $ai_db_options_extract, $ai_total_plugin_time, $ai_walker, $ai_custom_hooks;

  if (defined ('AI_WP_HOOK')) return;
  define ('AI_WP_HOOK', true);

  if (($ai_wp_data [AI_WP_DEBUGGING] & AI_DEBUG_PROCESSING) != 0) {
    ai_log ("WP HOOK START");
    $ai_wp_data [AI_PROCESSING_TIME] = true;
    $start_time = microtime (true);
  }

  set_page_type ();
  set_user ();

  ai_http_header ();

  if (($ai_wp_data [AI_WP_USER] & AI_USER_ADMINISTRATOR) != 0 && get_disable_caching ()) ai_disable_caching ();

  if ($ai_wp_data [AI_WP_PAGE_TYPE] != AI_PT_ADMIN &&
      ($ai_wp_data [AI_WP_USER] & AI_USER_ADMINISTRATOR) != 0 &&
      get_admin_toolbar_debugging () &&
      (!is_multisite() || is_main_site () || multisite_settings_page_enabled ()))
    add_action ('admin_bar_menu', 'ai_toolbar', 9920);

  $url_debugging = get_remote_debugging () || ($ai_wp_data [AI_WP_USER] & AI_USER_ADMINISTRATOR) != 0 || defined ('AI_DEBUGGING_DEMO');

  if (!is_admin() || defined ('DOING_AJAX') || defined ('AI_DEBUGGING_DEMO')) {
    if (isset ($_GET [AI_URL_DEBUG]) && $_GET [AI_URL_DEBUG] == 0) {
      if (isset ($_COOKIE ['AI_WP_DEBUGGING'])) {
        unset ($_COOKIE ['AI_WP_DEBUGGING']);
        setcookie ('AI_WP_DEBUGGING', '', time() - (15 * 60), COOKIEPATH);
      }
      if (isset ($_COOKIE ['AI_WP_DEBUG_BLOCK'])) {
        unset ($_COOKIE ['AI_WP_DEBUG_BLOCK']);
        setcookie ('AI_WP_DEBUG_BLOCK', '', time() - (15 * 60), COOKIEPATH);
      }
    } else {
        $ai_wp_data [AI_WP_DEBUGGING]   = isset ($_COOKIE ['AI_WP_DEBUGGING'])   ? $ai_wp_data [AI_WP_DEBUGGING] | ($_COOKIE ['AI_WP_DEBUGGING'] & ~AI_DEBUG_PROCESSING) : $ai_wp_data [AI_WP_DEBUGGING];
        $ai_wp_data [AI_WP_DEBUG_BLOCK] = isset ($_COOKIE ['AI_WP_DEBUG_BLOCK']) ? $_COOKIE ['AI_WP_DEBUG_BLOCK'] : 0;

        if (isset ($_GET [AI_URL_DEBUG_BLOCKS]))
          if ($_GET [AI_URL_DEBUG_BLOCKS] && $url_debugging) $ai_wp_data [AI_WP_DEBUGGING] |= AI_DEBUG_BLOCKS; else $ai_wp_data [AI_WP_DEBUGGING] &= ~AI_DEBUG_BLOCKS;

        if (isset ($_GET [AI_URL_DEBUG_TAGS]))
          if ($_GET [AI_URL_DEBUG_TAGS] && $url_debugging) $ai_wp_data [AI_WP_DEBUGGING] |= AI_DEBUG_TAGS; else $ai_wp_data [AI_WP_DEBUGGING] &= ~AI_DEBUG_TAGS;

        if (isset ($_GET [AI_URL_DEBUG_NO_INSERTION]))
          if ($_GET [AI_URL_DEBUG_NO_INSERTION] && $url_debugging) $ai_wp_data [AI_WP_DEBUGGING] |= AI_DEBUG_NO_INSERTION; else $ai_wp_data [AI_WP_DEBUGGING] &= ~AI_DEBUG_NO_INSERTION;

        if (isset ($_GET [AI_URL_DEBUG_AD_BLOCKING_STATUS]))
          if ($_GET [AI_URL_DEBUG_AD_BLOCKING_STATUS] && $url_debugging) $ai_wp_data [AI_WP_DEBUGGING] |= AI_DEBUG_AD_BLOCKING_STATUS; else $ai_wp_data [AI_WP_DEBUGGING] &= ~AI_DEBUG_AD_BLOCKING_STATUS;

        if (isset ($_GET [AI_URL_DEBUG_AD_BLOCKING]))
          if ($_GET [AI_URL_DEBUG_AD_BLOCKING] && $url_debugging) $ai_wp_data [AI_WP_DEBUGGING] |= AI_DEBUG_AD_BLOCKING; else $ai_wp_data [AI_WP_DEBUGGING] &= ~AI_DEBUG_AD_BLOCKING;

        if (isset ($_GET [AI_URL_DEBUG_POSITIONS])) {
          $secret = isset ($_GET ['ai-secret']) && $_GET ['ai-secret'] == ai_secret_key ();
          if ($secret) {
            ai_disable_caching ();
          }
          if ($_GET [AI_URL_DEBUG_POSITIONS] !== '' && ($url_debugging || $secret)) $ai_wp_data [AI_WP_DEBUGGING] |= AI_DEBUG_POSITIONS; else $ai_wp_data [AI_WP_DEBUGGING] &= ~AI_DEBUG_POSITIONS;
          if (is_numeric ($_GET [AI_URL_DEBUG_POSITIONS])) $ai_wp_data [AI_WP_DEBUG_BLOCK] = intval ($_GET [AI_URL_DEBUG_POSITIONS]);
          if ($ai_wp_data [AI_WP_DEBUG_BLOCK] < 0 || $ai_wp_data [AI_WP_DEBUG_BLOCK] > 96) $ai_wp_data [AI_WP_DEBUG_BLOCK] = 0;
        }

        if (!defined ('AI_DEBUGGING_DEMO')) {
          if ($ai_wp_data [AI_WP_DEBUGGING] != 0) {
            if (!isset ($_GET ['no-cookie'])) {
              setcookie ('AI_WP_DEBUGGING',   $ai_wp_data [AI_WP_DEBUGGING],   time() + AI_COOKIE_TIME, COOKIEPATH);
            }
          } else if (isset ($_COOKIE ['AI_WP_DEBUGGING'])) setcookie ('AI_WP_DEBUGGING', '', time() - (15 * 60), COOKIEPATH);

          if ($ai_wp_data [AI_WP_DEBUG_BLOCK] != 0) {
            if (!isset ($_GET ['no-cookie'])) {
              setcookie ('AI_WP_DEBUG_BLOCK', $ai_wp_data [AI_WP_DEBUG_BLOCK], time() + AI_COOKIE_TIME, COOKIEPATH);
            }
          } else if (isset ($_COOKIE ['AI_WP_DEBUG_BLOCK'])) setcookie ('AI_WP_DEBUG_BLOCK', '', time() - (15 * 60), COOKIEPATH);
        } else {
            if ($ai_wp_data [AI_WP_DEBUGGING] != 0) {
              ai_disable_caching ();
            }
          }
      }
  }

  if ($ai_wp_data [AI_HTML_ELEMENT_SELECTION]) {
    add_filter ('show_admin_bar', '__return_false', 999999);
    $ai_wp_data [AI_WP_DEBUGGING] = 0;
  }
  elseif (($ai_wp_data [AI_WP_USER] & AI_USER_LOGGED_IN) == 0 &&
        ((get_remote_debugging () && ($ai_wp_data [AI_WP_DEBUGGING] != 0 || (isset ($_GET [AI_URL_DEBUG]) && $_GET [AI_URL_DEBUG] == 1))) ||
          defined ('AI_DEBUGGING_DEMO'))) {
    function ai_login_adminbar ($wp_admin_bar) {
      $wp_admin_bar->add_menu (array ('id' => 'ai-toolbar-login', 'title' => _x('Log In', 'Menu item', 'ad-inserter'), 'href' => wp_login_url()));
    }

    add_filter ('show_admin_bar', '__return_true', 999999);
    add_action ('admin_bar_menu', 'ai_toolbar', 9920);
    if (!defined ('AI_DEBUGGING_DEMO')) {
      add_action ('admin_bar_menu', 'ai_login_adminbar' );
    }
  }

  if (($ai_wp_data [AI_WP_USER] & AI_USER_ADMINISTRATOR) != 0 && get_force_admin_toolbar ()) {
    add_filter ('show_admin_bar', '__return_true', 999999);
  }

  $debug_positions             = ($ai_wp_data [AI_WP_DEBUGGING] & AI_DEBUG_POSITIONS) != 0;
  $debug_tags_positions        = ($ai_wp_data [AI_WP_DEBUGGING] & (AI_DEBUG_POSITIONS | AI_DEBUG_TAGS)) != 0;
  $debug_tags_positions_blocks = ($ai_wp_data [AI_WP_DEBUGGING] & (AI_DEBUG_POSITIONS | AI_DEBUG_TAGS | AI_DEBUG_BLOCKS)) != 0;

  $plugin_priority = get_plugin_priority ();

  if (isset ($ai_db_options_extract [CONTENT_HOOK_BLOCKS][$ai_wp_data [AI_WP_PAGE_TYPE]]) && count ($ai_db_options_extract [CONTENT_HOOK_BLOCKS][$ai_wp_data [AI_WP_PAGE_TYPE]]) != 0 || $debug_tags_positions)
    add_filter ('the_content',        'ai_content_hook', $plugin_priority);

  if (isset ($ai_db_options_extract [EXCERPT_HOOK_BLOCKS][$ai_wp_data [AI_WP_PAGE_TYPE]]) && count ($ai_db_options_extract [EXCERPT_HOOK_BLOCKS][$ai_wp_data [AI_WP_PAGE_TYPE]]) != 0 || $debug_tags_positions_blocks)
    add_filter ('the_excerpt',        'ai_excerpt_hook', $plugin_priority);

  if (isset ($ai_db_options_extract [LOOP_START_HOOK_BLOCKS][$ai_wp_data [AI_WP_PAGE_TYPE]]) && count ($ai_db_options_extract [LOOP_START_HOOK_BLOCKS][$ai_wp_data [AI_WP_PAGE_TYPE]]) != 0 || $debug_positions)
    add_action ('loop_start',         'ai_hook_function_loop_start');

  if (isset ($ai_db_options_extract [LOOP_END_HOOK_BLOCKS][$ai_wp_data [AI_WP_PAGE_TYPE]]) && count ($ai_db_options_extract [LOOP_END_HOOK_BLOCKS][$ai_wp_data [AI_WP_PAGE_TYPE]]) != 0 || $debug_positions)
    add_action ('loop_end',           'ai_hook_function_loop_end');

  if (isset ($ai_db_options_extract [POST_HOOK_BLOCKS][$ai_wp_data [AI_WP_PAGE_TYPE]]) && count ($ai_db_options_extract [POST_HOOK_BLOCKS][$ai_wp_data [AI_WP_PAGE_TYPE]]) != 0 || $debug_positions)
    add_action ('the_post',           'ai_hook_function_post');

  if ((isset ($ai_db_options_extract [BETWEEN_COMMENTS_HOOK_BLOCKS][$ai_wp_data [AI_WP_PAGE_TYPE]]) && count ($ai_db_options_extract [BETWEEN_COMMENTS_HOOK_BLOCKS][$ai_wp_data [AI_WP_PAGE_TYPE]]) != 0) ||
      (isset ($ai_db_options_extract [BEFORE_COMMENTS_HOOK_BLOCKS][$ai_wp_data [AI_WP_PAGE_TYPE]]) && count ($ai_db_options_extract [BEFORE_COMMENTS_HOOK_BLOCKS][$ai_wp_data [AI_WP_PAGE_TYPE]]) != 0) ||
      (isset ($ai_db_options_extract [AFTER_COMMENTS_HOOK_BLOCKS][$ai_wp_data [AI_WP_PAGE_TYPE]]) && count ($ai_db_options_extract [AFTER_COMMENTS_HOOK_BLOCKS][$ai_wp_data [AI_WP_PAGE_TYPE]]) != 0) ||
      $debug_positions) {
    $ai_wp_data [AI_NUMBER_OF_COMMENTS] = 0;
    add_filter ('comments_array' ,        'ai_comments_array', 10, 2);
    add_filter ('wp_list_comments_args' , 'ai_wp_list_comments_args');
    $ai_walker = new ai_Walker_Comment;
  }


  // Code for PHP VERSION >= 5.3.0
//  foreach ($ai_custom_hooks as $index => $custom_hook) {
//    if (isset ($ai_db_options_extract [$custom_hook ['action'] . CUSTOM_HOOK_BLOCKS][$ai_wp_data [AI_WP_PAGE_TYPE]]) && count ($ai_db_options_extract [$custom_hook ['action'] . CUSTOM_HOOK_BLOCKS][$ai_wp_data [AI_WP_PAGE_TYPE]]) != 0 || $debug_positions)
//      add_action ($custom_hook ['action'], ai_get_custom_hook_function ($custom_hook ['action'], AI_AUTOMATIC_INSERTION_CUSTOM_HOOK + $custom_hook ['index'] - 1, $custom_hook ['name']), $custom_hook ['priority']);
//  }

  // Code for PHP VERSION < 5.3.0
  foreach ($ai_custom_hooks as $index => $custom_hook) {
    if ($index > 9) break;

    // Skip custom hooks on standard WP hooks - they will be processed anyway
    switch ($custom_hook ['action']) {
      case 'wp_footer':
//      case 'wp_head':   // no block processing on wp_head
      case 'the_content':
      case 'the_excerpt':
      case 'loop_start':
      case 'loop_end':
      case 'the_post':
        continue 2;
    }

    if (isset ($ai_db_options_extract [$custom_hook ['action'] . CUSTOM_HOOK_BLOCKS][$ai_wp_data [AI_WP_PAGE_TYPE]]) && count ($ai_db_options_extract [$custom_hook ['action'] . CUSTOM_HOOK_BLOCKS][$ai_wp_data [AI_WP_PAGE_TYPE]]) != 0 || $debug_positions)
      add_action ($custom_hook ['action'], 'ai_custom_hook_function_' . $index, $custom_hook ['priority']);
  }


  if ($ai_wp_data [AI_STICK_TO_THE_CONTENT]) {
    if (trim (get_main_content_element () == '')) {
      if (!defined ('AI_CONTENT_MARKER_NO_LOOP_START')) {
        add_action ('loop_start',    'ai_content_marker');
      }
      if (!defined ('AI_CONTENT_MARKER_NO_LOOP_END')) {
        add_action ('loop_end',      'ai_content_marker');
      }
      if (!defined ('AI_CONTENT_MARKER_NO_GET_SIDEBAR')) {
        add_action ('get_sidebar',   'ai_content_marker');
      }
    }
  }

  if ($ai_wp_data [AI_WP_AMP_PAGE] ) {
    // AMP, Accelerated Mobile Pages
    add_action ('amp_post_template_head', 'ai_amp_head_hook', 99999);
    add_action ('amp_post_template_css',  'ai_amp_css_hook', 99999);

    // WP AMP Ninja
    add_action ('wpamp_custom_script',    'ai_amp_head_hook', 99999);
    // No usable hook for custom CSS
//    add_action ('wpamp_custom_style',     'ai_amp_css_hook', 99999);

    // WP AMP - Accelerated Mobile Pages for WordPress
    add_action ('amphtml_template_head',  'ai_amp_head_hook', 99999);
    add_action ('amphtml_template_css',   'ai_amp_css_hook', 99999);

    // Better AMP - WordPress Complete AMP
    add_action ('better-amp/template/head', 'ai_amp_head_hook', 99999);
    // No usable hook for custom CSS
//    add_action ('better-amp/template/css',  'ai_amp_css_hook', 99999);

    // AMP WP - Google AMP For WordPress
    add_action ('amp_wp_template_head', 'ai_amp_head_hook', 99999);
    // No usable hook for custom CSS
//    add_action ('amp_wp_template_head', 'ai_amp_css_hook', 99999);

  } else
  // WP
  add_action ('wp_head',                  'ai_wp_head_hook', 99999);

  $automatic_insertion_footer_hook = isset ($ai_db_options_extract [FOOTER_HOOK_BLOCKS][$ai_wp_data [AI_WP_PAGE_TYPE]]) && count ($ai_db_options_extract [FOOTER_HOOK_BLOCKS][$ai_wp_data [AI_WP_PAGE_TYPE]]) != 0 || $debug_positions;
  if ($ai_wp_data [AI_WP_AMP_PAGE]) {
    // AMP, Accelerated Mobile Pages
    if ($automatic_insertion_footer_hook)
      add_action ('amp_post_template_footer',     'ai_hook_function_footer', 5);
    add_action ('amp_post_template_footer',     'ai_amp_footer_hook', 5);

    // WP AMP Ninja
    if ($automatic_insertion_footer_hook)
      add_action ('wpamp_google_analytics_code',  'ai_hook_function_footer', 5);
    add_action ('wpamp_google_analytics_code',  'ai_amp_footer_hook', 5);

    // WP AMP - Accelerated Mobile Pages for WordPress
    if ($automatic_insertion_footer_hook)
      add_action ('amphtml_after_footer',         'ai_hook_function_footer', 5);
    add_action ('amphtml_after_footer',         'ai_amp_footer_hook', 5);

    // Better AMP - WordPress Complete AMP
    if ($automatic_insertion_footer_hook)
      add_action ('better-amp/template/footer', 'ai_hook_function_footer', 5);
    add_action ('better-amp/template/footer', 'ai_amp_footer_hook', 5);

    // AMP WP - Google AMP For WordPress
    if ($automatic_insertion_footer_hook)
      add_action ('amp_wp_template_footer', 'ai_hook_function_footer', 5);
    add_action ('amp_wp_template_footer', 'ai_amp_footer_hook', 5);

  } else {
      // WP
      if ($automatic_insertion_footer_hook)
        add_action ('wp_footer', 'ai_hook_function_footer', 5);
      add_action ('wp_footer', 'ai_wp_footer_hook', 5);
    }

  if ($ai_wp_data [AI_WP_AMP_PAGE]) {
    // No scripts on AMP pages
    if (defined ('AI_ADBLOCKING_DETECTION') && AI_ADBLOCKING_DETECTION) {
      $ai_wp_data [AI_ADB_DETECTION] = false;
      $ai_wp_data [AI_TRACKING]      = false;
    }
  }

  if (($ai_wp_data [AI_WP_DEBUGGING] & AI_DEBUG_PROCESSING) != 0) {
    $ai_total_plugin_time += microtime (true) - $start_time;
    ai_log ("WP HOOK END: ". number_format (1000 * (microtime (true) - $start_time), 2)." ms\n");
    $ai_wp_data [AI_PROCESSING_TIME] = false;
  }
};

function ai_load_plugin_textdomain_hook () {
  unload_textdomain ('ad-inserter');
  load_plugin_textdomain ('ad-inserter', false, basename (dirname (__FILE__)) . '/languages/');
}

function ai_load_textdomain_mofile ($mo_file, $domain) {
  if (strpos ($mo_file, 'ad-inserter') !== false) {
    $path = explode ('/', $mo_file);
    $new_mo_file = dirname (__FILE__) . '/languages/' . end ($path);

    if (file_exists ($new_mo_file)) {
      return ($new_mo_file);
    }
  }

  return ($mo_file);
}

function ai_init_hook () {
  global $block_object, $ai_wp_data, $ai_db_options_extract;

  if ($ai_wp_data [AI_DISABLE_TRANSLATION]) {
    unload_textdomain ('ad-inserter');
  }

  require_once AD_INSERTER_PLUGIN_DIR.'strings.php';

  if (defined ('DOING_AJAX') && DOING_AJAX) {
    $ai_wp_data [AI_WP_PAGE_TYPE] = AI_PT_AJAX;

    ai_load_extract ();

    ai_wp_hook ();
  }

  add_shortcode ('adinserter', 'ai_process_shortcodes');
  add_shortcode ('ADINSERTER', 'ai_process_shortcodes');

  // TO DO: check referrer

  add_filter ('pre_do_shortcode_tag', 'ai_pre_do_shortcode_tag', 10, 4);

//  if (defined ('AI_BUFFERING')) {
//    if (get_output_buffering ()) {
//      if ($ai_wp_data [AI_WP_PAGE_TYPE] != AI_PT_AJAX && !$ai_wp_data [AI_CODE_FOR_IFRAME]) {
//        ai_buffering_start ();
//      }
//    }
//  }
}

//function ai_upgrader_process_complete_hook ($upgrader_object, $options) {
//  global $ai_db_options, $ai_db_options_extract;

//  if (is_array ($options) && array_key_exists ('action', $options) && $options ['action'] == 'update' && array_key_exists ('type', $options)) {
//    if ($options ['type'] == 'plugin' && array_key_exists ('plugins', $options) && is_array ($options ['plugins']) && !empty ($options ['plugins'])) {
//      $this_plugin = plugin_basename (__FILE__);
//      foreach ($options ['plugins'] as $plugin) {
//        if ($plugin == $this_plugin) {
//          if (defined ('AI_EXTRACT_GENERATED') && isset ($ai_db_options [AI_OPTION_GLOBAL]['VERSION'])) {
//            $ai_db_options [AI_OPTION_EXTRACT] = $ai_db_options_extract;
//            update_option (AI_OPTION_NAME, $ai_db_options);
//          }
//          break;
//        }
//      }
//    }
//  }
//}

function ai_load_extract ($recreate = true) {
  global $ai_db_options, $ai_db_options_extract, $version_string, $subversion_string;

  if (isset ($ai_db_options_extract)) return true;

  $expected_extract_version = $version_string . $subversion_string . '-' . '96';

  if (isset ($ai_db_options [AI_OPTION_EXTRACT]['VERSION']) && $ai_db_options [AI_OPTION_EXTRACT]['VERSION'] == $expected_extract_version) {
    $ai_db_options_extract = $ai_db_options [AI_OPTION_EXTRACT];
    return true;
  } else {
      if (($saved_extract = get_option (AI_EXTRACT_NAME)) === false || $saved_extract ['VERSION'] != $expected_extract_version) {
        if ($recreate) {
          $ai_db_options_extract = ai_generate_extract ($ai_db_options);
          $ai_db_options [AI_OPTION_EXTRACT] = $ai_db_options_extract;
          if (get_option (AI_OPTION_NAME) !== false)
            update_option (AI_EXTRACT_NAME, $ai_db_options_extract);
          return true;
        }
      } else {
          $ai_db_options_extract = $saved_extract;
          $ai_db_options [AI_OPTION_EXTRACT] = $ai_db_options_extract;
          return true;
        }
    }
  return false;
}

function ai_wp_loaded_hook () {
  global $ai_total_plugin_time, $ai_wp_data;

  if (($ai_wp_data [AI_WP_DEBUGGING] & AI_DEBUG_PROCESSING) != 0) {
    ai_log ("WP LOADED HOOK START");
    $ai_wp_data [AI_PROCESSING_TIME] = true;
    $start_time = microtime (true);
  }

  ai_load_extract ();

  if (($ai_wp_data [AI_WP_DEBUGGING] & AI_DEBUG_PROCESSING) != 0) {
    $ai_total_plugin_time += microtime (true) - $start_time;
    if (defined ('AI_EXTRACT_GENERATED')) ai_log ("EXTRACT GENERATED");
    ai_log ("WP LOADED HOOK END: ". number_format (1000 * (microtime (true) - $start_time), 2)." ms\n");
    $ai_wp_data [AI_PROCESSING_TIME] = false;
  }
}

function ai_admin_menu_hook () {
  global $ai_settings_page;

  if (is_multisite() && !is_main_site () && !multisite_settings_page_enabled ()) return;

                                                                        // translators: %s: Ad Inserter
  $ai_settings_page = add_submenu_page ('options-general.php', sprintf (__('%s Settings', 'ad-inserter'), AD_INSERTER_NAME), AD_INSERTER_NAME, 'manage_options', basename (__FILE__), 'ai_settings');
  add_action ('admin_enqueue_scripts',  'ai_admin_enqueue_scripts');
  add_action ('admin_enqueue_scripts',  'ai_admin_enqueue_scripts_late', 99999);
  add_action ('admin_enqueue_scripts',  'ai_admin_remove_scripts', 99999);
  add_action ('admin_head',             'ai_admin_head');
  add_filter ('clean_url',              'ai_clean_url', 999999, 2);
}

function ai_admin_head () {
  global $ai_settings_page, $hook_suffix;

  if ($hook_suffix == $ai_settings_page && wp_is_mobile()) {
    echo '<meta name="viewport" content="width=762">', PHP_EOL;
  }
}

function ai_admin_enqueue_scripts ($hook_suffix) {
  global $ai_settings_page, $ai_admin_translations;

  if ($hook_suffix == $ai_settings_page) {
    wp_enqueue_style  ('ai-admin-jquery-ui', plugins_url ('css/jquery-ui-1.10.3.custom.min.css', __FILE__), array (), null);

    if (function_exists ('ai_admin_enqueue_scripts_1')) ai_admin_enqueue_scripts_1 ();

    wp_enqueue_style  ('ai-admin-multi-select', plugins_url ('css/multi-select.css', AD_INSERTER_FILE),     array (), AD_INSERTER_VERSION);
    wp_enqueue_style  ('ai-image-picker',    plugins_url ('css/image-picker.css', __FILE__),                array (), AD_INSERTER_VERSION);
    wp_add_inline_style ('ai-image-picker', '.thumbnail {border-radius: 6px;}');

    wp_enqueue_style  ('ai-combobox-css',    plugins_url ('css/jquery.scombobox.min.css', __FILE__),        array (), AD_INSERTER_VERSION);

    if (function_exists ('ai_admin_enqueue_scripts_2')) ai_admin_enqueue_scripts_2 ();

    wp_enqueue_script ('ai-multi-select',    plugins_url ('includes/js/jquery.multi-select.js', AD_INSERTER_FILE ),  array (), AD_INSERTER_VERSION, true);
    wp_enqueue_script ('ai-quicksearch',     plugins_url ('includes/js/jquery.quicksearch.js', AD_INSERTER_FILE ),   array (), AD_INSERTER_VERSION, true);

    // Located in the header to load  datepicker js file to prevent error when async tags used
    wp_enqueue_script ('ai-image-picker-js', plugins_url ('includes/js/image-picker.min.js', __FILE__ ),    array (
      'jquery',
      'jquery-ui-datepicker',
    ), AD_INSERTER_VERSION, false);

    if (AI_SYNTAX_HIGHLIGHTING) {
      wp_enqueue_script ('ai-ace',           plugins_url ('includes/ace/ace.js', __FILE__ ),                array (), AD_INSERTER_VERSION, true);
//      wp_enqueue_script ('ai-ace-ext-modelist', plugins_url ('includes/ace/ext-modelist.js', __FILE__ ),    array (), AD_INSERTER_VERSION, true);
      wp_enqueue_script ('ai-ace-html',      plugins_url ('includes/ace/mode-html.js', __FILE__ ),          array (), AD_INSERTER_VERSION, true);
      wp_enqueue_script ('ai-ace-php',       plugins_url ('includes/ace/mode-php.js',  __FILE__ ), array (), AD_INSERTER_VERSION, true);

      if (get_syntax_highlighter_theme () == AI_SYNTAX_HIGHLIGHTER_THEME || isset ($_POST ["syntax-highlighter-theme"]) && $_POST ["syntax-highlighter-theme"] == AI_SYNTAX_HIGHLIGHTER_THEME)
        wp_enqueue_script ('ai-ace-theme',   plugins_url ('includes/ace/theme-ad_inserter.js', __FILE__ ),  array (), AD_INSERTER_VERSION, true);
    }

    wp_enqueue_script ('ai-admin-js',        plugins_url ('js/ad-inserter.js', __FILE__), array (
      'jquery',
      'jquery-ui-tabs',
      'jquery-ui-button',
      'jquery-ui-tooltip',
      'jquery-ui-datepicker',
      'jquery-ui-dialog',
     ), AD_INSERTER_VERSION, true);

    wp_localize_script ('ai-admin-js', 'ai_admin', $ai_admin_translations);

    wp_enqueue_script  ('ai-combobox',       plugins_url ('includes/js/jquery.scombobox.min.js', __FILE__), array (
      'jquery',
    ), AD_INSERTER_VERSION , true);
    wp_enqueue_script  ('ai-missed',         plugins_url ('includes/js/missed.js', __FILE__), array (), AD_INSERTER_VERSION , true);
  }

  wp_enqueue_style  ('ai-admin-gen',         plugins_url ('css/ai-admin.css', __FILE__),                      array (), AD_INSERTER_VERSION);
  wp_enqueue_script ('ai-admin-js-gen',      plugins_url ('includes/js/ai-admin.js', __FILE__ ),              array (), AD_INSERTER_VERSION, true);
}

function ai_admin_enqueue_scripts_late ($hook_suffix) {
  global $ai_settings_page;

  if ($hook_suffix == $ai_settings_page) {
//    wp_enqueue_style  ('ai-admin',       plugins_url ('css/ad-inserter.css', __FILE__),                 array (), AD_INSERTER_VERSION);
    wp_enqueue_style  ('ai-admin',       plugins_url ('css/ai-settings.css', __FILE__),                 array (), AD_INSERTER_VERSION);
    wp_add_inline_style ('ai-admin', '.notice {margin: 5px 15px 15px 0;}');
  }
}

function ai_admin_remove_scripts ($hook_suffix) {
  global $ai_settings_page;

  if ($hook_suffix == $ai_settings_page) {
    // Fix for Publisher theme: remove scripts loaded on Ad Inserter admin page
    wp_deregister_script ('ace-editor-script');
    wp_dequeue_script ('publisher-admin');

    // Fix for Shell ClubSmart theme (titan framework)
    wp_dequeue_script ('tf-ace');
    // Default settings
    wp_dequeue_script ('tf-ace-theme-chrome');
    wp_dequeue_script ('tf-ace-mode-css');

    // Fix for OptimizePress plugin: remove styles loaded on Ad Inserter admin page
    wp_dequeue_style ('optimizepress-admin-assets');
    wp_dequeue_style ('optimizepress-admin-common');
    wp_dequeue_style ('optimizepress-tiny-mce-css');
    wp_dequeue_style ('optimizepress-dashicons');

    // Fix for WP Nav Manager plugin: remove styles loaded on Ad Inserter admin page
    wp_dequeue_style ('wp-nav-manager-admin-style');

    // Fix for WP BotWatch plugin: remove styles loaded on Ad Inserter admin page
    wp_dequeue_style ('wp-botwatch');

    // Fix for All in One Schema.org Rich Snippets plugin: remove styles loaded on Ad Inserter admin page
    wp_dequeue_style ('admin_style');
    wp_deregister_style ('admin_style');
  }
}

function ai_wp_enqueue_scripts_hook () {
  global $ai_wp_data, $wp_version, $ai_front_translations;

  // TEST
//  wp_deregister_script('jquery');

  $adb_code = defined ('AI_ADBLOCKING_DETECTION') && AI_ADBLOCKING_DETECTION && $ai_wp_data [AI_ADB_DETECTION] && !isset ($ai_wp_data [AI_ADB_SHORTCODE_DISABLED]);

  $footer_inline_scripts =
    get_dynamic_blocks () == AI_DYNAMIC_BLOCKS_CLIENT_SIDE_SHOW ||
    get_dynamic_blocks () == AI_DYNAMIC_BLOCKS_CLIENT_SIDE_INSERT ||
    isset ($ai_wp_data [AI_CLIENT_SIDE_ROTATION]) ||
    $ai_wp_data [AI_TRACKING] ||
    $ai_wp_data [AI_STICKY_WIDGETS] ||
    $ai_wp_data [AI_STICK_TO_THE_CONTENT] ||
    $ai_wp_data [AI_ANIMATION] ||
    $ai_wp_data [AI_CLOSE_BUTTONS] ||
    $ai_wp_data [AI_HTML_ELEMENT_SELECTION] ||
    $ai_wp_data [AI_LAZY_LOADING] ||
    $ai_wp_data [AI_CLIENT_SIDE_INSERTION] ||
    $adb_code;

  if ($footer_inline_scripts ||
      ($ai_wp_data [AI_WP_DEBUGGING] & (AI_DEBUG_POSITIONS | AI_DEBUG_BLOCKS)) != 0 ||
      !empty ($_GET) ||
      $ai_wp_data [AI_FRONTEND_JS_DEBUGGING] ||
      $ai_wp_data [AI_CLIENT_SIDE_INSERTION] ||
      $ai_wp_data [AI_CHECK_BLOCK] ||
      get_remote_debugging () || ($ai_wp_data [AI_WP_USER] & AI_USER_ADMINISTRATOR) != 0 ||
      $ai_wp_data [AI_ANIMATION]) {

//  force loading of jquery on frontend
    $jquery_required = array (
      'jquery'
    );
    if ($ai_wp_data [AI_HTML_ELEMENT_SELECTION]) {
      $jquery_required []= 'jquery-ui-button';
    }
    wp_enqueue_script ('ai-jquery-js', plugins_url ('includes/js/ai-jquery.js', __FILE__), $jquery_required, $wp_version . '+' . AD_INSERTER_VERSION);

    wp_localize_script ('ai-jquery-js', 'ai_front', $ai_front_translations);

    if ($ai_wp_data [AI_HTML_ELEMENT_SELECTION]) {
      wp_enqueue_style  ('ai-html-jquery-ui', plugins_url ('css/jquery-ui-1.10.3.custom.min.css', __FILE__), array (), null);
    }

    if ($ai_wp_data [AI_FRONTEND_JS_DEBUGGING]) {
      wp_add_inline_script ('ai-jquery-js', 'ai_debugging = true;');
    }

    if (!get_disable_js_code () && (($ai_wp_data [AI_CLOSE_BUTTONS]  && !$ai_wp_data [AI_CODE_FOR_IFRAME]) || $ai_wp_data [AI_CHECK_BLOCK] || $ai_wp_data [AI_TRACKING] || $adb_code)) {
      wp_add_inline_script ('ai-jquery-js', ai_get_js ('ai-cookie', false));
    }
                                                                                                                                                  // ### AI_CHECK_BLOCK
    if (!get_disable_js_code () && ($ai_wp_data [AI_CLIENT_SIDE_INSERTION] || $ai_wp_data [AI_CLOSE_BUTTONS] || $ai_wp_data [AI_CHECK_BLOCK]) && !$ai_wp_data [AI_CODE_FOR_IFRAME]) {
      wp_add_inline_script ('ai-jquery-js', ai_get_js ('ai-insert', false));
    }

    if (!get_disable_css_code () && (get_remote_debugging () || ($ai_wp_data [AI_WP_USER] & AI_USER_ADMINISTRATOR) != 0)) {
      wp_enqueue_style ('dashicons');
    }

    if (!get_disable_js_code () && $ai_wp_data [AI_ANIMATION]) {
      if (defined ('AI_STICKY_SETTINGS') && AI_STICKY_SETTINGS) {
        wp_enqueue_style  ('ai-aos',    plugins_url ('includes/aos/ai-aos.css', __FILE__), array (), AD_INSERTER_VERSION);
        wp_enqueue_script ('ai-aos-js', plugins_url ('includes/aos/aos.js', AD_INSERTER_FILE ),  array (), AD_INSERTER_VERSION, true);
      }
    }
  }
}

function ai_clean_url ( $url, $original_url){
  if (strpos ($url, 'async=') !== false && strpos ($url, '/plugins/ad-inserter') !== false) {
//    $url = $original_url;
    $url = str_replace ("' async='async", '', $url);
  }
 return $url;
}

function ai_get_client_side_styles () {
  return
    ".ai-rotate {position: relative;}\n" .
    ".ai-rotate-hidden {visibility: hidden;}\n" .
    ".ai-rotate-hidden-2 {position: absolute; top: 0; left: 0; width: 100%; height: 100%;}\n" .
    ".ai-list-data, .ai-ip-data, .ai-list-block {visibility: hidden; position: absolute; width: 100%; height: 100%; z-index: -9999;}\n";
}

function add_head_inline_styles () {
  global $ai_wp_data;

  if (get_disable_css_code ()) return; // Needed for iframes? $ai_wp_data [AI_CODE_FOR_IFRAME]

  if ($ai_wp_data [AI_CLIENT_SIDE_DETECTION] ||
      get_dynamic_blocks () == AI_DYNAMIC_BLOCKS_CLIENT_SIDE_SHOW ||
      isset ($ai_wp_data [AI_CLIENT_SIDE_ROTATION]) ||
      $ai_wp_data [AI_CLOSE_BUTTONS] ||
      $ai_wp_data [AI_HTML_ELEMENT_SELECTION] ||
      !get_inline_styles () ||
      get_admin_toolbar_debugging () && (get_remote_debugging () || ($ai_wp_data [AI_WP_USER] & AI_USER_LOGGED_IN) != 0) ||
      defined ('AI_DEBUGGING_DEMO') ||
      $ai_wp_data [AI_WP_DEBUGGING] != 0) {

    echo "<style type='text/css'>\n";

    if ($ai_wp_data [AI_CLIENT_SIDE_DETECTION] && !$ai_wp_data [AI_CODE_FOR_IFRAME]) echo get_viewport_css ();

    if (get_dynamic_blocks () == AI_DYNAMIC_BLOCKS_CLIENT_SIDE_SHOW || get_dynamic_blocks () == AI_DYNAMIC_BLOCKS_CLIENT_SIDE_INSERT || isset ($ai_wp_data [AI_CLIENT_SIDE_ROTATION])) {
      echo ai_get_client_side_styles ();

      $ai_wp_data [AI_CLIENT_SIDE_CSS] = true;
    }

    if ($ai_wp_data [AI_CLOSE_BUTTONS] && !$ai_wp_data [AI_CODE_FOR_IFRAME]) {
      echo ".ai-close {position: relative;}\n";
//      echo ".ai-close-width {width: auto !important;}\n";
      echo ".ai-close-button {position: absolute; top: -8px; right: -8px; width: 24px; height: 24px; background: url(".plugins_url ('css/images/close-button.png', AD_INSERTER_FILE).") no-repeat center center; cursor: pointer; z-index: 9; display: none;}\n";
      echo ".ai-close-show {display: block;}\n";
      echo ".ai-close-left {right: unset; left: -10px;}\n";
      echo ".ai-close-bottom {top: unset; bottom: -11px;}\n";
      echo ".ai-close-none {visibility: hidden;}\n";
    }

    // Before alignment CSS to not override alignment margin
    if ($ai_wp_data [AI_WP_DEBUGGING] != 0) generate_debug_css_base ();

    if (!get_inline_styles () && !$ai_wp_data [AI_CODE_FOR_IFRAME]) {
      echo get_alignment_css ();
    }

    // After alignment CSS to override width
    if ($ai_wp_data [AI_CLOSE_BUTTONS] && !$ai_wp_data [AI_CODE_FOR_IFRAME]) {
      echo ".ai-close-fit {width: fit-content; width: -moz-fit-content;}\n";
    }

    if ($ai_wp_data [AI_WP_DEBUGGING] != 0) generate_debug_css ();

    if ($ai_wp_data [AI_HTML_ELEMENT_SELECTION]) generate_selection_css ();

    if (((get_admin_toolbar_debugging () && (get_remote_debugging () || ($ai_wp_data [AI_WP_USER] & AI_USER_LOGGED_IN) != 0)) || defined ('AI_DEBUGGING_DEMO')) && !$ai_wp_data [AI_CODE_FOR_IFRAME])
      echo "#wp-admin-bar-ai-toolbar-settings .ab-icon:before {
  content: '\\f111';
  top: 2px;
  color: rgba(240,245,250,.6)!important;
}
#wp-admin-bar-ai-toolbar-settings-default .ab-icon:before {
  top: 0px;
}
#wp-admin-bar-ai-toolbar-settings .ab-icon.on:before {
  color: #00f200!important;
}
#wp-admin-bar-ai-toolbar-settings .ab-icon.red:before {
  color: #f22!important;
}
#wp-admin-bar-ai-toolbar-settings-default li, #wp-admin-bar-ai-toolbar-settings-default a,
#wp-admin-bar-ai-toolbar-settings-default li:hover, #wp-admin-bar-ai-toolbar-settings-default a:hover {
  border: 1px solid transparent;
}
ul li#wp-admin-bar-ai-toolbar-status {
  margin: 0 0 5px 0;
}
#wp-admin-bar-ai-toolbar-blocks .ab-icon:before {
  content: '\\f135';
}
#wp-admin-bar-ai-toolbar-positions .ab-icon:before {
  content: '\\f207';
}
#wp-admin-bar-ai-toolbar-positions-default .ab-icon:before {
  content: '\\f522';
}
#wp-admin-bar-ai-toolbar-tags .ab-icon:before {
  content: '\\f475';
}
#wp-admin-bar-ai-toolbar-no-insertion .ab-icon:before {
  content: '\\f214';
}
#wp-admin-bar-ai-toolbar-adb-status .ab-icon:before {
  content: '\\f223';
}
#wp-admin-bar-ai-toolbar-adb .ab-icon:before {
  content: '\\f160';
}
#wp-admin-bar-ai-toolbar-processing .ab-icon:before {
  content: '\\f464';
}
#wp-admin-bar-ai-toolbar-positions span.up-icon {
  padding-top: 2px;
}
#wp-admin-bar-ai-toolbar-positions .up-icon:before {
  font: 400 20px/1 dashicons;
}
.ai-insertion-status {
  line-height: 26px!important;
  height: 26px!important;
  white-space: nowrap;
  min-width: 140px;
}
#wp-admin-bar-ai-toolbar-settings .ab-sub-wrapper {
  width: max-content;
  width: -moz-max-content;
}
";
      if (get_admin_toolbar_mobile () && !$ai_wp_data [AI_CODE_FOR_IFRAME]) {
        echo "@media screen and (max-width: 782px) {
  #wpadminbar #wp-admin-bar-ai-toolbar-settings {
    display: block;
    position: static;
  }

  #wpadminbar #wp-admin-bar-ai-toolbar-settings > .ab-item {
    white-space: nowrap;
    overflow: hidden;
    width: 52px;
    padding: 0;
    color: #a0a5aa;
    position: relative;
  }
}
";
      }

    echo "</style>\n";
    // No scripts on AMP pages
  }
}

function ai_get_js ($js_name, $replace_js_data = true) {
  global $ai_wp_data;

  if ($ai_wp_data [AI_FRONTEND_JS_DEBUGGING]) {
    $script = file_get_contents (AD_INSERTER_PLUGIN_DIR."includes/js/$js_name.js");
  } else $script = file_get_contents (AD_INSERTER_PLUGIN_DIR."includes/js/$js_name.min.js");
  if (!$replace_js_data) return $script;
  return ai_replace_js_data ($script, $js_name);
}

function ai_replace_js_data ($js) {
  global $block_object, $ai_wp_data;

  if (preg_match_all ('/AI_CONST_([_A-Z0-9]+)/', $js, $match)) {
    foreach ($match [1] as $index => $constant) {
      if (defined ($constant))
        $js = str_replace ($match [0][$index], constant ($constant), $js);
    }
  }

  if (preg_match_all ('/AI_DATA_([_A-Z0-9]+)/', $js, $match)) {
    foreach ($match [1] as $index => $constant) {
      if (defined ($constant) && isset ($ai_wp_data [constant ($constant)]))
        $js = str_replace ($match [0][$index], $ai_wp_data [constant ($constant)], $js);
    }
  }

  if (preg_match_all ('/AI_DATAB_([_A-Z0-9]+)/', $js, $match)) {
    foreach ($match [1] as $index => $constant) {
      if (defined ($constant) && isset ($ai_wp_data [constant ($constant)]))
        $js = str_replace ($match [0][$index], $ai_wp_data [constant ($constant)] ? 1 : 0, $js);
    }
  }

  if (preg_match_all ('/AI_DBG_([_A-Z0-9]+)/', $js, $match)) {
    foreach ($match [1] as $index => $constant) {
      if (defined ($constant))
        $js = str_replace ($match [0][$index], ($ai_wp_data [AI_WP_DEBUGGING] & constant ($constant)) != 0 ? 1 : 0, $js);
    }
  }

  if (preg_match_all ('/AI_FUNC_([_A-Z0-9]+)/', $js, $match)) {
    foreach ($match [1] as $index => $function) {
      $function = strtolower ($function);
      if (function_exists ($function))
        $js = str_replace ($match [0][$index], call_user_func ($function), $js);
    }
  }

  if (preg_match_all ('/AI_FUNCH_([_A-Z0-9]+)/', $js, $match)) {
    foreach ($match [1] as $index => $function) {
      $function = strtolower ($function);
      if (function_exists ($function))
        $js = str_replace ($match [0][$index], html_entity_decode (call_user_func ($function)), $js);
    }
  }

  if (preg_match_all ('/AI_FUNCB_([_A-Z0-9]+)/', $js, $match)) {
    foreach ($match [1] as $index => $function) {
      $function = strtolower ($function);
      if (function_exists ($function))
        $js = str_replace ($match [0][$index], call_user_func ($function) ? 1 : 0, $js);
    }
  }

  if (preg_match_all ('/AI_FUNCT_([_A-Z0-9]+)/', $js, $match)) {
    foreach ($match [1] as $index => $function) {
      $function = strtolower ($function);
      if (function_exists ($function))
        $js = str_replace ($match [0][$index], call_user_func ($function, true), $js);
    }
  }

  if (preg_match_all ('/AI_POST_([_A-Z0-9]+)/', $js, $match)) {
    foreach ($match [1] as $index => $post) {
      $post_name = strtolower ($post);
      $js = str_replace ($match [0][$index], isset ($_POST [$post_name]) ? urldecode ($_POST [$post_name]) : '', $js);
    }
  }

  if (defined ('AI_ADBLOCKING_DETECTION') && AI_ADBLOCKING_DETECTION) {
    if (strpos ($js, 'AI_ADB_STATUS_MESSAGE') !== false) {
      $adb = $block_object [AI_ADB_MESSAGE_OPTION_NAME];

      $js = str_replace ('AI_ADB_OVERLAY_WINDOW', "jQuery ('<div>', {attr: {'style': b64d ('" . base64_encode (str_replace (array ("'", "\r", "\n"), array ("\'", '', ''), AI_BASIC_ADB_OVERLAY_CSS) . get_overlay_css ()) . "')}})", $js);
      $js = str_replace ('AI_ADB_MESSAGE_WINDOW', "jQuery ('<div>', {attr: {'style': b64d ('" . base64_encode (str_replace (array ("'", "\r", "\n"), array ("\'", '', ''), AI_BASIC_ADB_MESSAGE_CSS) . get_message_css ()) . "')}, 'html': b64d ('" .
        base64_encode (str_replace (array ("'", "\r", "\n"), array ("\'", '', ''), do_shortcode ($adb->ai_getCode ()))) . "')})", $js);

      $js = str_replace ('AI_ADB_SELECTORS', get_adb_selectors (true), $js);

      $redirection_page = get_redirection_page ();
      if ($redirection_page != 0) $url = get_permalink ($redirection_page); else $url = trim (get_custom_redirection_url ());
      $js = str_replace ('AI_ADB_REDIRECTION_PAGE', $url, $js);

      if (($ai_wp_data [AI_WP_DEBUGGING] & (AI_DEBUG_AD_BLOCKING_STATUS | AI_DEBUG_POSITIONS | AI_DEBUG_BLOCKS)) != 0) {
        // translators: AD BLOCKING DETECTED, PAGE VIEWS: n - NO ACTION
        $js = str_replace ('var AI_ADB_STATUS_MESSAGE=1;', '$("#ai-adb-status").text ("' . __('AD BLOCKING DETECTED, PAGE VIEWS', 'ad-inserter') . '" + ": " + d1 + " - " + "' . __('NO ACTION', 'ad-inserter') . '");$("#ai-adb-bar").addClass ("adb-on");', $js);
        $js = str_replace ('var AI_ADB_STATUS_MESSAGE=2;', '$("#ai-adb-status").text ("' . __('AD BLOCKING DETECTED, COOKIE DETECTED - NO ACTION', 'ad-inserter') . '");$("#ai-adb-bar").addClass ("adb-on");', $js);
        $js = str_replace ('var AI_ADB_STATUS_MESSAGE=3;', '$("#ai-adb-status").text ("' . __('AD BLOCKING DETECTED - ACTION', 'ad-inserter') . '");$("#ai-adb-bar").addClass ("adb-on");', $js);
        $js = str_replace ('var AI_ADB_STATUS_MESSAGE=4;', 'jQuery("#ai-adb-status").text ("' . __('AD BLOCKING NOT DETECTED', 'ad-inserter') . '");jQuery("#ai-adb-bar").addClass ("adb-off");', $js);
        $js = str_replace ('var AI_ADB_STATUS_MESSAGE=5;', '$("#ai-adb-status").text ("' . __('AD BLOCKING DETECTION COOKIES DELETED', 'ad-inserter') . '");', $js);
        $js = str_replace ('var AI_ADB_STATUS_MESSAGE=6;', '$("#ai-adb-status").text ("' . __('AD BLOCKING DETECTED - NO ACTION', 'ad-inserter') . '");$("#ai-adb-bar").addClass ("adb-on");', $js);
      } else {
          $js = str_replace ('var AI_ADB_STATUS_MESSAGE=1', '', $js);
          $js = str_replace ('var AI_ADB_STATUS_MESSAGE=2', '', $js);
          $js = str_replace ('var AI_ADB_STATUS_MESSAGE=3', '', $js);
          $js = str_replace ('var AI_ADB_STATUS_MESSAGE=4', '{}', $js);
          $js = str_replace ('var AI_ADB_STATUS_MESSAGE=5', '', $js);
          $js = str_replace ('var AI_ADB_STATUS_MESSAGE=6', '', $js);
        }
    }
  }

  $js = str_replace ('AI_NONCE', wp_create_nonce ("adinserter_data"), $js);
  $js = str_replace ('AI_AJAXURL', admin_url ('admin-ajax.php'), $js);
  $js = str_replace ('AI_SITE_URL', wp_make_link_relative (get_site_url()), $js);
  $js = str_replace ('AI_HOME_URL', home_url (), $js);

  if (defined ('AI_STATISTICS') && AI_STATISTICS) {
    $js = str_replace ('AI_INTERNAL_TRACKING',        get_internal_tracking () == AI_ENABLED ? 1 : 0, $js);
    $js = str_replace ('AI_EXTERNAL_TRACKING',        get_external_tracking () == AI_ENABLED ? 1 : 0, $js);
    $js = str_replace ('AI_TRACK_PAGEVIEWS',          get_track_pageviews () == AI_TRACKING_ENABLED && $ai_wp_data [AI_WP_PAGE_TYPE] != AI_PT_AJAX && !$ai_wp_data [AI_CODE_FOR_IFRAME] ? 1 : 0, $js);
    $js = str_replace ('AI_ADVANCED_CLICK_DETECTION', get_click_detection () == AI_CLICK_DETECTION_ADVANCED ? 1 : 0, $js);

    if (!isset ($ai_wp_data [AI_VIEWPORTS])) {
      $viewports = array ();
      $viewport_names = array ();
      for ($viewport = 1; $viewport <= 6; $viewport ++) {
        $viewport_name  = get_viewport_name ($viewport);
        $viewport_width = get_viewport_width ($viewport);
        if ($viewport_name != '') {
          $viewports      [$viewport] = $viewport_width;
          $viewport_names [$viewport] = $viewport_name;
        }
      }
      $ai_wp_data [AI_VIEWPORTS]      = $viewports;
      $ai_wp_data [AI_VIEWPORT_NAMES] = $viewport_names;
    }
    $js = str_replace ('AI_VIEWPORTS', '[' . implode (',', $ai_wp_data [AI_VIEWPORTS]) . ']', $js);
    $js = str_replace ('AI_VIEWPORT_NAMES', base64_encode ('["' . implode ('","', $ai_wp_data [AI_VIEWPORT_NAMES]) . '"]'), $js);
  }
  // Deprecated
  $js = str_replace ('AI_BLOCK_CLASS_NAME', get_block_class_name (true), $js);

  if (function_exists ('ai_replace_js_data_2')) ai_replace_js_data_2 ($js);

  return $js;
}

function ai_adb_code () {
  return ai_get_js ('ai-adb', false);
}

function add_footer_inline_scripts () {
  global $ai_wp_data, $wp_version;

  if (get_disable_js_code ()) return;

  $adb_code = defined ('AI_ADBLOCKING_DETECTION') && AI_ADBLOCKING_DETECTION && $ai_wp_data [AI_ADB_DETECTION] && !isset ($ai_wp_data [AI_ADB_SHORTCODE_DISABLED]);

  if ($adb_code) {
    if (function_exists ('add_footer_inline_scripts_1')) add_footer_inline_scripts_1 (); else {
      echo '<!-- Code for ad blocking detection -->', "\n";
      echo '<!--noptimize-->', "\n";
      echo '<div id="banner-advert-container" class="ad-inserter chitika-ad" style="position:absolute; z-index: -10; height: 1px; width: 1px; top: -1px; left: -1px;"><img id="adsense" class="SponsorAds adsense" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"></div>', "\n";
      if (!defined ('AI_ADB_NO_GOOGLE_ANALYTICS')) {
        echo '<script async id="ai-adb-ga" src="https://www.google-analytics.com/analytics.js"></script>', "\n";
      }
      if (!defined ('AI_ADB_NO_MEDIA_NET')) {
        echo '<script async id="ai-adb-mn" src="//contextual.media.net/dmedianet.js"></script>', "\n";
      }
      echo "<script type='text/javascript' src='", plugins_url ('js/ads.js',       __FILE__ ), "?ver=", AD_INSERTER_VERSION, "'></script>\n";
      echo "<script type='text/javascript' src='", plugins_url ('js/sponsors.js',  __FILE__ ), "?ver=", AD_INSERTER_VERSION, "'></script>\n";
      echo '<!--/noptimize-->', "\n";
      echo '<!-- Code for ad blocking detection END -->', "\n";
    }
  }

  // Update also $footer_inline_scripts in ai_wp_enqueue_scripts_hook
  $footer_inline_scripts =
    get_dynamic_blocks () == AI_DYNAMIC_BLOCKS_CLIENT_SIDE_SHOW ||
    get_dynamic_blocks () == AI_DYNAMIC_BLOCKS_CLIENT_SIDE_INSERT ||
    isset ($ai_wp_data [AI_CLIENT_SIDE_ROTATION]) ||
    $ai_wp_data [AI_TRACKING] ||
    $ai_wp_data [AI_STICKY_WIDGETS] ||
    $ai_wp_data [AI_STICK_TO_THE_CONTENT] ||
    $ai_wp_data [AI_ANIMATION] ||
    $ai_wp_data [AI_CLOSE_BUTTONS] ||
    $ai_wp_data [AI_HTML_ELEMENT_SELECTION] ||
    $ai_wp_data [AI_LAZY_LOADING] ||
    $ai_wp_data [AI_CLIENT_SIDE_INSERTION] ||
    $adb_code;

//  if (($footer_inline_scripts || $ai_wp_data [AI_CLIENT_SIDE_INSERTION]) && !wp_script_is ('jquery', 'done')) {
  if ($footer_inline_scripts && !wp_script_is ('jquery', 'done') && !$ai_wp_data [AI_CODE_FOR_IFRAME]) {
    // Should not insert as it is forced in the header if jquery needed in the footer
    echo "<script type='text/javascript' src='", includes_url ('js/jquery/jquery.js'), "?ver=", $wp_version, "'></script>\n";
    echo "<script type='text/javascript' src='", includes_url ('js/jquery/jquery-migrate.min.js'), "?ver=", $wp_version, "'></script>\n";
  }

  if ($ai_wp_data [AI_STICKY_WIDGETS] && get_sticky_widget_mode() == AI_STICKY_WIDGET_MODE_JS) {
//    echo "<script type='text/javascript' src='", plugins_url ('includes/js/ResizeSensor.min.js', __FILE__ ), "?ver=", AD_INSERTER_VERSION, "'></script>\n";
    echo "<script type='text/javascript' src='", plugins_url ('includes/js/theia-sticky-sidebar.min.js', __FILE__ ), "?ver=", AD_INSERTER_VERSION, "'></script>\n";
  }

  if ($footer_inline_scripts) echo "<script>\n";


  $client_side_dynamic_blocks = get_dynamic_blocks () == AI_DYNAMIC_BLOCKS_CLIENT_SIDE_SHOW || get_dynamic_blocks () == AI_DYNAMIC_BLOCKS_CLIENT_SIDE_INSERT;

  if (function_exists ('add_footer_inline_scripts_2') && !$ai_wp_data [AI_CODE_FOR_IFRAME]) {
    if ($ai_wp_data [AI_LAZY_LOADING]) {
      echo ai_get_js ('ai-load');
    }

    if ($ai_wp_data [AI_STICK_TO_THE_CONTENT] || $ai_wp_data [AI_ANIMATION]) {
      echo ai_get_js ('ai-sticky');
    }
  }

  if ($client_side_dynamic_blocks || isset ($ai_wp_data [AI_CLIENT_SIDE_ROTATION])) {
    echo ai_get_js ('ai-rotate');
  }

  if ($client_side_dynamic_blocks) {
    echo ai_get_js ('ai-lists');
  }

  if ($ai_wp_data [AI_STICKY_WIDGETS] && !$ai_wp_data [AI_CODE_FOR_IFRAME]) {
    echo ai_get_js ('ai-sidebar');
  }

  if ($ai_wp_data [AI_CLOSE_BUTTONS] && !$ai_wp_data [AI_CODE_FOR_IFRAME]) {
    echo ai_get_js ('ai-close');
  }

  if ($ai_wp_data [AI_HTML_ELEMENT_SELECTION]) {
    echo ai_get_js ('ai-select');
  }

  if ($ai_wp_data [AI_CLIENT_SIDE_INSERTION] && !$ai_wp_data [AI_CODE_FOR_IFRAME]) {
    echo 'setTimeout (function() {Array.prototype.forEach.call (document.querySelectorAll (".ai-viewports"), function (element, index) {ai_insert_code (element);});}, 10);', PHP_EOL;
  }

  if ($adb_code) {
    if (!function_exists ('add_footer_inline_scripts_2')) echo ai_replace_js_data (ai_adb_code ());
  }

  if (function_exists ('add_footer_inline_scripts_2')) {
    add_footer_inline_scripts_2 ();
  }

  if ($footer_inline_scripts) echo "\n</script>\n";
}

function ai_admin_notice_hook () {
  global $current_screen, $ai_db_options, $ai_wp_data, $ai_db_options_extract;
  global $ai_settings_page, $hook_suffix;

//  $sidebar_widgets = wp_get_sidebars_widgets();
//  $sidebars_with_deprecated_widgets = array ();

//  foreach ($sidebar_widgets as $sidebar_widget_index => $sidebar_widget) {
//    if (is_array ($sidebar_widget))
//      foreach ($sidebar_widget as $widget) {
//        if (preg_match ("/ai_widget([\d]+)/", $widget, $widget_number)) {
//          if (isset ($widget_number [1]) && is_numeric ($widget_number [1])) {
//            $is_widget = $ai_db_options [$widget_number [1]][AI_OPTION_AUTOMATIC_INSERTION] == AD_SELECT_WIDGET;
//          } else $is_widget = false;
//          $sidebar_name = $GLOBALS ['wp_registered_sidebars'][$sidebar_widget_index]['name'];
//          if ($is_widget && $sidebar_name != "")
//            $sidebars_with_deprecated_widgets [$sidebar_widget_index] = $sidebar_name;
//        }
//      }
//  }

//  if (!empty ($sidebars_with_deprecated_widgets)) {
//    echo "<div class='notice notice-warning'><p><strong>Warning</strong>: You are using deprecated Ad Inserter widgets in the following sidebars: ",
//    implode (", ", $sidebars_with_deprecated_widgets),
//    ". Please replace them with the new 'Ad Inserter' code block widget. See <a href='https://wordpress.org/plugins/ad-inserter/faq/' target='_blank'>FAQ</a> for details.</p></div>";
//  }

  if (function_exists ('ai_admin_notices')) ai_admin_notices (); else {
    if (/*$hook_suffix == $ai_settings_page &&*/ is_super_admin () && !wp_is_mobile () && isset ($ai_wp_data [AI_DAYS_SINCE_INSTAL])) {

      if (isset ($ai_db_options_extract [AI_EXTRACT_USED_BLOCKS])) {
        $used_blocks = count (unserialize ($ai_db_options_extract [AI_EXTRACT_USED_BLOCKS]));
      } else $used_blocks = 0;

      $notice_option = get_option ('ai-notice-review');

      if ($notice_option === false && $ai_wp_data [AI_DAYS_SINCE_INSTAL] >= 40) $notice_option = 'later';

      if (($notice_option === false  && $used_blocks >=  2 && $ai_wp_data [AI_DAYS_SINCE_INSTAL] > 20 && $ai_wp_data [AI_DAYS_SINCE_INSTAL] < 40) ||

          ($notice_option == 'later' && ($used_blocks >= 5 && $ai_wp_data [AI_DAYS_SINCE_INSTAL] > 50 ||
                                         $used_blocks >= 2 && $ai_wp_data [AI_DAYS_SINCE_INSTAL] > 70))) {

        if ($notice_option == 'later') {
               // Translators: 1: number of blocks, 2: Ad Inserter
               $message = sprintf (_n('Hey, you are now using %1$s %2$s block.', 'Hey, you are now using %1$s %2$s blocks.', $used_blocks, 'ad-inserter'), "<strong>{$used_blocks}</strong>", "<strong>Ad Inserter</strong>");
               $option = '<div class="ai-notice-text-button ai-notice-dismiss" data-notice="no">' . __("No, thank you.", 'ad-inserter') . '</div>';
        } else {
            // Translators: %s: Ad Inserter
            $message = sprintf (__("Hey, you've been using %s for a while now, and I hope you're happy with it.", 'ad-inserter'), '<strong>Ad Inserter</strong>');
            $option = '<div class="ai-notice-text-button ai-notice-dismiss" data-notice="later">' . __("Not now, maybe later.", 'ad-inserter') . '</div>';
          }
?>
    <div class="notice notice-info ai-notice ai-no-phone" style="display: none;" data-notice="review" data-value="<?php echo base64_encode (wp_create_nonce ("adinserter_data")); ?>" nonce="<?php echo wp_create_nonce ("adinserter_data"); ?>" >
      <div class="ai-notice-element">
        <img src="<?php echo AD_INSERTER_PLUGIN_IMAGES_URL; ?>icon-50x50.jpg" style="width: 50px; margin: 5px 10px 0px 10px;" />
      </div>
      <div class="ai-notice-element" style="width: 100%; padding: 0 10px 0;">
        <p><?php
          echo $message, ' ';
          _e("I would really appreciate if you could rate the plugin on WordPres.", 'ad-inserter');
          echo '<br />';
          _e("Positive reviews are a great incentive to fix bugs and to add new features for better monetization of your website. Thank you, Igor", 'ad-inserter');
          ?></p>
      </div>
      <div class="ai-notice-element ai-notice-buttons last">
          <div class="ai-notice-text-button ai-notice-dismiss" data-notice="yes">
            <button class="button-primary ai-notice-dismiss" data-notice="yes">
            <a href="https://wordpress.org/support/plugin/ad-inserter/reviews/#new-post" class="ai-notice-dismiss" target="_blank" data-notice="yes"><?php /* translators: %s: Ad Inserter */ printf (__("Rate %s", 'ad-inserter'), 'Ad Inserter'); ?></a>
          </button>
        </div>

        <?php echo $option; ?>
        <div class="ai-notice-text-button ai-notice-dismiss" data-notice="already"><?php _e("I already did.", 'ad-inserter'); ?></div>
      </div>
    </div>

<?php
      }
    }
  }

}

function ai_plugin_action_links ($links) {
  if (is_multisite() && !is_main_site () && !multisite_settings_page_enabled ()) return $links;

  $settings_link = '<a href="'.admin_url ('options-general.php?page=ad-inserter.php').'">'._x('Settings', 'Menu item', 'ad-inserter') . '</a>';
  array_unshift ($links, $settings_link);
  return $links;
}

function ai_set_plugin_meta ($links, $file) {
  if ($file == plugin_basename (__FILE__)) {
    if (is_multisite() && !is_main_site ()) {
      foreach ($links as $index => $link) {
        if (stripos ($link, "update") !== false) unset ($links [$index]);
      }
    }
//    if (stripos (AD_INSERTER_NAME, "pro") === false) {
//      $new_links = array ('donate' => '<a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=LHGZEMRTR7WB4" target="_blank">Donate</a>');
//      $links = array_merge ($links, $new_links);
//    }
  }
  return $links;
}


function current_user_role ($user_role_name = "") {
  $role_values = array ("super-admin" => 6, "administrator" => 5, "editor" => 4, "author" => 3, "contributor" => 2, "subscriber" => 1);
  global $wp_roles;

  if ($user_role_name != "") {
    return isset ($role_values [$user_role_name]) ? $role_values [$user_role_name] : 0;
  }

  $user_role = 0;
  $current_user = wp_get_current_user();
  $roles = $current_user->roles;

  // Fix for empty roles
  if (isset ($current_user->caps) && count ($current_user->caps) != 0) {
    $caps = $current_user->caps;
    foreach ($role_values as $role_name => $role_value) {
      if (isset ($caps [$role_name]) && $caps [$role_name]) $roles []= $role_name;
    }
  }

  foreach ($roles as $role) {
    $current_user_role = isset ($role_values [$role]) ? $role_values [$role] : 0;
    if ($current_user_role > $user_role) $user_role = $current_user_role;
  }

  return $user_role;
}


function ai_current_user_role_ok () {
  return current_user_role () >= current_user_role (get_minimum_user_role ());
}


function ai_add_meta_box_hook() {

  if (!ai_current_user_role_ok ()) return;

  if (is_multisite() && !is_main_site () && !multisite_exceptions_enabled ()) return;

  $screens = array ('post', 'page');

  $args = array (
    'public'    => true,
    '_builtin'  => false
  );
  $custom_post_types = get_post_types ($args, 'names', 'and');
  $screens = array_values (array_merge ($screens, $custom_post_types));

  foreach ($screens as $screen) {
    add_meta_box (
      'adinserter_sectionid',
      // translators: %s: Ad Inserter
      sprintf (_x('%s Individual Exceptions', 'Meta box name', 'ad-inserter'), AD_INSERTER_NAME),
      'ai_meta_box_callback',
      $screen
    );
  }
}

function ai_meta_box_callback ($post) {
  global $block_object;

  // Add an nonce field so we can check for it later.
  wp_nonce_field ('adinserter_meta_box', 'adinserter_meta_box_nonce');

  $post_type        = get_post_type ($post);
  $post_type_object = get_post_type_object ($post_type);
  $page_type_name   = $post_type_object->labels->name;
  $page_type_name1  = $post_type_object->labels->singular_name;

  /*
   * Use get_post_meta() to retrieve an existing value
   * from the database and use the value for the form.
   */
  $post_meta = get_post_meta ($post->ID, '_adinserter_block_exceptions', true);
  $selected_blocks = explode (",", $post_meta);

  ob_start ();

  echo '<table>';
  echo '<thead style="font-weight: bold;">';
    echo '  <td>', __('Block', 'ad-inserter') . '</td>';
    echo '  <td style="padding: 0 10px 0 10px;">', __('Name', 'ad-inserter') . '</td>';
    echo '  <td style="padding: 0 10px 0 10px;">', __('Automatic insertion', 'ad-inserter') . '</td>';

    if ($post_type == 'page')
      echo '  <td style="padding: 0 10px 0 10px;">', __('Default insertion for pages', 'ad-inserter') . '</td>'; else
        echo '  <td style="padding: 0 10px 0 10px;">', __('Default insertion for posts', 'ad-inserter') . '</td>';
                                                      // translators: For this post or page
    if ($post_type == 'page')
      echo '  <td style="padding: 0 10px 0 10px;">', _x('For this', 'Page', 'ad-inserter'), ' ', $page_type_name1, '</td>'; else
        echo '  <td style="padding: 0 10px 0 10px;">', _x('For this', 'Post', 'ad-inserter'), ' ', $page_type_name1, '</td>';
  echo '</thead>';
  echo '<tbody>';
  $rows = 0;
  for ($block = 1; $block <= 96; $block ++) {
    $obj = $block_object [$block];

    if ($post_type == 'page') {
      $page_name1 = _x('pages', 'Enabled/disabled on all', 'ad-inserter');
      $page_name2 = _x('pages', 'Default insertion for', 'ad-inserter');
      $enabled_on = $obj->get_ad_enabled_on_which_pages ();
      $general_enabled = $obj->get_display_settings_page();
    } else {
        $page_name1 = _x('posts', 'Enabled/disabled on all', 'ad-inserter');
        $page_name2 = _x('posts', 'Default insertion for', 'ad-inserter');
        $enabled_on  = $obj->get_ad_enabled_on_which_posts ();
        $general_enabled  = $obj->get_display_settings_post();
      }

    if (!$general_enabled || $enabled_on == AI_NO_INDIVIDUAL_EXCEPTIONS) continue;

    $individual_option_enabled  = $general_enabled && ($enabled_on == AI_INDIVIDUALLY_DISABLED || $enabled_on == AI_INDIVIDUALLY_ENABLED);
    $individual_text_enabled    = $enabled_on == AI_INDIVIDUALLY_DISABLED;

    if ($rows % 2 != 0) $background = "#F0F0F0"; else $background = "#FFF";
    echo '<tr style="background: ', $background, ';">';
    echo '  <td style="text-align: right;">', $obj->number, '</td>';
    if (function_exists ('ai_settings_url_parameters')) $url_parameters = ai_settings_url_parameters ($block); else $url_parameters = "";
    echo '  <td style="padding: 0 10px 0 10px;"><a href="', admin_url ('options-general.php?page=ad-inserter.php'), $url_parameters, '&tab=', $block, '" style="text-decoration: none; box-shadow: 0 0 0;" target="_blank">', $obj->get_ad_name(), '</a></td>';
    echo '  <td style="padding: 0 10px 0 10px;">', $obj->get_automatic_insertion_text(), '</td>';
    echo '  <td style="padding: 0 10px 0 10px; text-align: left;">';

    if ($individual_option_enabled) {
      if ($individual_text_enabled) echo __('Enabled', 'ad-inserter'); else echo __('Disabled', 'ad-inserter');
    } else {
        // translators: Enabled on all pages or posts
        if ($general_enabled) echo __('Enabled on all', 'ad-inserter'). ' ', $page_name1; else
          // translators: Disabled on all pages or posts
          echo __('Disabled on all', 'ad-inserter') . ' ', $page_name1;
      }
    echo '  </td>';
    echo '  <td style="padding: 0 10px 0 10px; text-align: left;">';

    if ($individual_option_enabled) {
      echo '<input type="checkbox" style="border-radius: 5px;" name="adinserter_selected_block_', $block, '" id="ai-selected-block-', $block, '" value="1"', in_array ($block, $selected_blocks) ? ' checked': '', ' />';
      echo '<label for="ai-selected-block-', $block, '">';
      if (!$individual_text_enabled) echo __('Enabled', 'ad-inserter'); else echo __('Disabled', 'ad-inserter');
      echo '</label>';
    } else {
        if (in_array ($block, $selected_blocks)) {
          echo '<span style="margin-left: 6px;">&bull;</span>';
        }
      }

    echo '  </td>';
    echo '</tr>';
    $rows ++;
  }

  echo '</tbody>';
  echo '</table>';

  $exceptions_table = ob_get_clean ();

  if ($rows == 0) {
    // translators: No individual exceptions enabled for pages or posts
    echo '<p><strong>' . __('No individual exceptions enabled for', 'ad-inserter') . ' ', $page_name2, '</strong>.</p>';
  } else echo $exceptions_table;

  // translators: 1: pages or posts, 2: Ad Inserter Settings (page)
  echo '<p>',
    sprintf (__('Default insertion for %1$s can be configured for each block on %2$s page - selection next to <strong>Posts</strong> / <strong>Static pages</strong> checkbox.<br />', 'ad-inserter'),
      $page_name2,
                                                                                                                                                        // translators: %s: Ad Inserter
      '<a href="' . admin_url ('options-general.php?page=ad-inserter.php') . '" style="text-decoration: none; box-shadow: 0 0 0;" target="_blank">' . sprintf (__('%s Settings', 'ad-inserter'), AD_INSERTER_NAME) . '</a>'),

  __('Default value is <strong>blank</strong> and means no individual exceptions (even if previously defined here).<br />', 'ad-inserter');

  if ($post_type == 'page')
    _ex('Set to <strong>Individually disabled</strong> or <strong>Individually enabled</strong> to enable individual exception settings on this page.<br />', 'Pages', 'ad-inserter'); else
      _ex('Set to <strong>Individually disabled</strong> or <strong>Individually enabled</strong> to enable individual exception settings on this page.<br />', 'Posts', 'ad-inserter');

  printf (__('For more information check page %s', 'ad-inserter'),
   // translators: Ad Inserter Exceptions documentation page
   '<a href="https://adinserter.pro/documentation/individual-post-and-page-exceptions" style="text-decoration: none; box-shadow: 0 0 0;" target="_blank">Ad Inserter ' . __('Individual Exceptions', 'ad-inserter') . '</a>.</p>');
}

function ai_save_meta_box_data_hook ($post_id) {
  // Check if our nonce is set.
  if (!isset ($_POST ['adinserter_meta_box_nonce'])) return;

  // Verify that the nonce is valid.
  if (!wp_verify_nonce ($_POST ['adinserter_meta_box_nonce'], 'adinserter_meta_box')) return;

  // If this is an autosave, our form has not been submitted, so we don't want to do anything.
  if (defined ('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;

  // Check the user's permissions.

  if (isset ($_POST ['post_type'])) {
    if ($_POST ['post_type'] == 'page') {
      if (!current_user_can ('edit_page', $post_id)) return;
    } else {
      if (!current_user_can ('edit_post', $post_id)) return;
    }
  }

  /* OK, it's safe for us to save the data now. */

  $selected = array ();
  for ($block = 1; $block <= 96; $block ++) {
    $option_name = 'adinserter_selected_block_' . $block;
    if (isset ($_POST [$option_name]) && $_POST [$option_name]) $selected []= $block;
  }

  if (!empty ($selected)) {
    // Update the meta field in the database.
    update_post_meta ($post_id, '_adinserter_block_exceptions', implode (",", $selected));
  } else delete_post_meta ($post_id, '_adinserter_block_exceptions');
}

function ai_widgets_init_hook () {
  if (is_multisite() && !is_main_site () && !multisite_widgets_enabled ()) return;
  register_widget ('ai_widget');
}

function get_page_type_debug_info ($text = '') {
  global $ai_wp_data;

  switch ($ai_wp_data [AI_WP_PAGE_TYPE]) {
    case AI_PT_STATIC:
      $page_type = __('STATIC PAGE', 'ad-inserter');
      break;
    case AI_PT_POST:
      $page_type = __('POST', 'ad-inserter');
      break;
    case AI_PT_HOMEPAGE:
      $page_type = __('HOMEPAGE', 'ad-inserter');
      break;
    case AI_PT_CATEGORY:
      $page_type = __('CATEGORY PAGE', 'ad-inserter');
      break;
    case AI_PT_SEARCH:
      $page_type = __('SEARCH PAGE', 'ad-inserter');
      break;
    case AI_PT_ARCHIVE:
      $page_type = __('ARCHIVE PAGE', 'ad-inserter');
      break;
    case AI_PT_404:
      $page_type = __('ERROR 404 PAGE', 'ad-inserter');
      break;
    case AI_PT_AJAX:
      $page_type = __('AJAX CALL', 'ad-inserter');
      break;
    default:
      $page_type = __('UNKNOWN PAGE TYPE', 'ad-inserter');
      break;
  }
  $class = AI_DEBUG_PAGE_TYPE_CLASS;

  $page_type = "<section class='$class'>".$text.$page_type."</section>";

  return $page_type;
}

function get_adb_status_debug_info () {
  global $ai_wp_data;

  $page_type = '';

  if (defined ('AI_ADBLOCKING_DETECTION') && AI_ADBLOCKING_DETECTION) {
    if ($ai_wp_data [AI_ADB_DETECTION]) {
      $title  = __('Click to delete ad blocking detection cokies', 'ad-inserter');
      $status = __('AD BLOCKING STATUS UNKNOWN', 'ad-inserter');
      $page_type = "<section id='ai-adb-bar' class='".AI_DEBUG_STATUS_CLASS.' '.AI_DEBUG_ADB_CLASS."' title='$title'><span id='ai-adb-status'>$status</span></section>";
    }
  }

  return $page_type;
}


function ai_header_noindex () {
  global $ai_wp_data;

  if ($ai_wp_data [AI_WP_DEBUGGING] != 0 || $ai_wp_data [AI_CODE_FOR_IFRAME]) {
    echo '<meta name="robots" content="noindex">';
    if ($ai_wp_data [AI_WP_DEBUGGING] != 0) {
      echo ' <!-- ', AD_INSERTER_NAME, ' debugging enabled (', substr ('00000000' . strtoupper (decbin ($ai_wp_data [AI_WP_DEBUGGING])), - 8), ') -->';
    }
    echo "\n";
  }
}

function get_code_debug_block ($name, $message, $right_text, $code, $inserted_code, $javascript = false) {
  if (strpos ($code, 'enable_page_level_ads') !== false)
    // translators: %s: AdSense Auto Ads
    $message = sprintf (__('Code for %s detected - Code will automatically insert AdSense ads at optimal positions', 'ad-inserter') . ' ',
      '<a style="text-decoration: none; color: #fff; font-weight: bold; box-shadow: none;" href="https://adinserter.pro/documentation/adsense-ads#auto-ads" target="_blank">AdSense Auto Ads</a>');

  $debug_script = new ai_block_labels ('ai-debug-script');
  $debug_block_start = $debug_script->block_start ();
  $debug_block_start .= $debug_script->bar ($name, '', $message, $right_text);
  if ($javascript) $debug_block_start = str_replace (array ('"', "\n", "\r"), array ("'", "\\n", ''), $debug_block_start);

  $debug_block_end = $debug_script->block_end ();
  if ($javascript) $debug_block_end = str_replace (array ('"', "\n", "\r"), array ("'", "\\n", ''), $debug_block_end);

  $html_code = htmlspecialchars ($code);
  if ($javascript) $html_code = str_replace (array ("\n", "\r"), array ("\\n", ''), $html_code);

  $html_inserted_code = htmlspecialchars ($inserted_code);
  if ($javascript) $html_inserted_code = str_replace (array ("\n", "\r"), array ("\\n", ''), $html_inserted_code);

  return $debug_block_start . "<pre class='ai-debug-code ai-code-org'>" . $html_code . "</pre><pre class='ai-debug-code ai-code-inserted'>" . $html_inserted_code . "</pre><div style='clear: both;'></div>" . $debug_block_end;
}

function ai_http_header () {
  global $block_object, $ai_wp_data;

  $ai_wp_data [AI_CONTEXT] = AI_CONTEXT_HTTP_HEADER;

  $obj = $block_object [AI_HEADER_OPTION_NAME];
  $obj->clear_code_cache ();

  if ($obj->get_enable_manual ()) {
    if ($ai_wp_data [AI_WP_PAGE_TYPE] != AI_PT_404 || $obj->get_enable_404()) {
      $processed_code = do_shortcode ($obj->ai_getCode ());

      if (strpos ($processed_code, AD_HTTP_SEPARATOR) !== false) {
        $codes = explode (AD_HTTP_SEPARATOR, $processed_code);
        $processed_code = $codes [0];
      } else $processed_code = '';

      $header_lines = explode ("\n", $processed_code);

      foreach ($header_lines as $header_line) {
        if (trim ($header_line) != '' && strpos ($header_line, ':') !== false) {
          header (trim ($header_line));
        }
      }
    }
  }
}

function ai_wp_head_hook () {
  global $block_object, $ai_wp_data, $ai_total_plugin_time, $ai_front_translations;

  if (($ai_wp_data [AI_WP_DEBUGGING] & AI_DEBUG_PROCESSING) != 0) {
    ai_log ("HEAD HOOK START");
    $ai_wp_data [AI_PROCESSING_TIME] = true;
    $start_time = microtime (true);
  }

  if (defined ('AI_BUFFERING')) {
    if (get_output_buffering ()) {
      if ($ai_wp_data [AI_WP_PAGE_TYPE] != AI_PT_AJAX && !$ai_wp_data [AI_CODE_FOR_IFRAME]) {
        ai_buffering_start ();
      }
    }
  }

  if (!get_disable_js_code () && ($ai_wp_data [AI_WP_DEBUGGING] & (AI_DEBUG_POSITIONS | AI_DEBUG_BLOCKS)) != 0) {
    echo "\n<script>
  ai_js_errors = [];
  window.onerror = function (errorMsg, url, lineNumber) {
    ai_js_errors.push ([errorMsg, url, lineNumber]);
  };
</script>\n";
  }

  $ai_wp_data [AI_CONTEXT] = AI_CONTEXT_NONE;

  ai_header_noindex ();

  add_head_inline_styles ();

  $header_code = '';

  $header = $block_object [AI_HEADER_OPTION_NAME];

  if ($header->get_enable_manual ()) {
    if (!$header->get_debug_disable_insertion () && !get_disable_header_code ()) {
      if ($header->check_server_side_detection ()) {
        if ($ai_wp_data [AI_WP_PAGE_TYPE] != AI_PT_404 || $header->get_enable_404()) {

          $processed_code = do_shortcode ($header->ai_getCode ());

          if (strpos ($processed_code, AD_HTTP_SEPARATOR) !== false) {
            $codes = explode (AD_HTTP_SEPARATOR, $processed_code);
            $processed_code = ltrim ($codes [1]);
          }

          if (strpos ($processed_code, AD_AMP_SEPARATOR) !== false) {
            $codes = explode (AD_AMP_SEPARATOR, $processed_code);
            $processed_code = $codes [0];
          } elseif ($ai_wp_data [AI_WP_AMP_PAGE]) $processed_code = '';

          $header_code = $processed_code;

          echo $processed_code;

          if (($ai_wp_data [AI_WP_DEBUGGING] & AI_DEBUG_PROCESSING) != 0) {
            if (strlen ($processed_code) != 0)
              ai_log ("HEAD CODE: " . strlen ($processed_code) . ' characters');
          }
        }
      }
    } else {
        if (($ai_wp_data [AI_WP_DEBUGGING] & AI_DEBUG_PROCESSING) != 0) {
          ai_log ('HEAD CODE DEBUG NO INSERTION');
        }
      }
  }

  if (defined ('AI_BUFFERING')) {
    if (get_output_buffering () && !get_disable_header_code ()) {
      $ai_head_codes = "<!--[AI_HEAD_CODES]-->";
      echo $ai_head_codes;
      $header_code .= $ai_head_codes;
    }
  }

  if (!$ai_wp_data [AI_CODE_FOR_IFRAME]) {
    if (!get_disable_js_code () && $ai_wp_data [AI_WP_DEBUGGING] != 0 && isset ($_GET ['ai-debug-code']) && !defined ('AI_DEBUGGING_DEMO')) {
      if (is_numeric ($_GET ['ai-debug-code']) && $_GET ['ai-debug-code'] >= 1 && $_GET ['ai-debug-code'] <= 96) {
        $obj = $block_object [$_GET ['ai-debug-code']];
        $block_name = $obj->number . ' &nbsp; ' . $obj->get_ad_name ();
        if (!$header->get_debug_disable_insertion ()) {
          $ai_wp_debugging = $ai_wp_data [AI_WP_DEBUGGING];
          $ai_wp_data [AI_WP_DEBUGGING] = 0;
          $code_for_insertion = $obj->get_code_for_insertion ();
          $ai_wp_data [AI_WP_DEBUGGING] = $ai_wp_debugging;
        } else $code_for_insertion = '';
        echo "<script>\n";
        echo "  jQuery(document).ready(function($) {
      $('body').prepend (\"" . get_code_debug_block (' ' . $block_name, '', __('Code for insertion', 'ad-inserter') . ' ' . strlen ($code_for_insertion) . ' ' . _n('character', 'characters', strlen ($code_for_insertion), 'ad-inserter') . ' ', $obj->ai_getCode (), $code_for_insertion, true) . "\");
    });
  </script>\n";
      }
    }

    if (!get_disable_js_code () && $ai_wp_data [AI_IFRAMES]) {
      echo "<script>\n";
      echo 'function ai_resize_iframe (iframe) {
  function getDocHeight (doc) {
    doc = doc || document;
    // from http://stackoverflow.com/questions/1145850/get-height-of-entire-document-with-javascript
    var body = doc.body, html = doc.documentElement;
    var height = Math.max (body.scrollHeight, body.offsetHeight, html.clientHeight, html.scrollHeight, html.offsetHeight);
    return height;
  }

  function resizeIframe (iframe) {
    var doc = iframe.contentDocument ? iframe.contentDocument : iframe.contentWindow.document;
    iframe.style.visibility = "hidden";
    iframe.style.height = "10px"; // reset to minimal height ...
    // IE opt. for bing/msn needs a bit added or scrollbar appears
    iframe.style.height = getDocHeight (doc) + "px";
    iframe.style.visibility = "visible";
  }

  setTimeout (function(){resizeIframe (iframe);}, 200);
}
';
      echo "</script>\n";
    }

    if (!get_disable_js_code () && ($ai_wp_data [AI_WP_DEBUGGING] & AI_DEBUG_POSITIONS) != 0) {
      echo '<script>
    jQuery(document).ready(function($) {
      setTimeout (function(){$("body").prepend ("', get_page_type_debug_info (), '");}, 1);
    });
  </script>', "\n";
    }

    if (!get_disable_js_code () && !get_disable_header_code () && ($ai_wp_data [AI_WP_DEBUGGING] & AI_DEBUG_BLOCKS) != 0 && !defined ('AI_DEBUGGING_DEMO')) {
      echo "<script>\n";
      echo "  jQuery(document).ready(function($) {
      $('body').prepend (\"" . get_code_debug_block (' ' . __('Header code', 'ad-inserter') . ' ' . ($header->get_enable_manual () ? '' : ' ' . _x('DISABLED', 'Header code', 'ad-inserter')), '&lt;head&gt;...&lt;/head&gt;', strlen ($header_code) . ' ' . _n('character inserted', 'characters inserted', strlen ($header_code), 'ad-inserter') . ' ', $header->ai_getCode (), $header_code, true) . "\");
    });
  </script>\n";
    }
  }

  // After Header code info
  if (!$ai_wp_data [AI_CODE_FOR_IFRAME]) {
    if (defined ('AI_ADBLOCKING_DETECTION') && AI_ADBLOCKING_DETECTION) {
      // No scripts on AMP pages
  //    if (($ai_wp_data [AI_WP_DEBUGGING] & AI_DEBUG_AD_BLOCKING_STATUS) != 0 && $ai_wp_data [AI_ADB_DETECTION] && !$ai_wp_data [AI_WP_AMP_PAGE]) {
      if (!get_disable_js_code () && ($ai_wp_data [AI_WP_DEBUGGING] & (AI_DEBUG_AD_BLOCKING_STATUS | AI_DEBUG_POSITIONS | AI_DEBUG_BLOCKS)) != 0 && $ai_wp_data [AI_ADB_DETECTION] /*&& !$ai_wp_data [AI_WP_AMP_PAGE]*/) {
        echo "<script>
      jQuery(document).ready(function($) {
        $('body').prepend (\"", get_adb_status_debug_info () , "\");
      });
  </script>\n";
      }
    }
  }

  if (!get_disable_js_code () && defined ('AI_ADSENSE_OVERLAY') && ($ai_wp_data [AI_WP_DEBUGGING] & AI_DEBUG_BLOCKS) != 0 && !(isset ($_GET ["hide-debug-labels"]) && $_GET ["hide-debug-labels"] == 1)) {
    echo "<script>\n";
    echo ai_get_js ('ai-ads');
    echo "</script>\n";
  }

  if (!get_disable_js_code () && ($ai_wp_data [AI_WP_DEBUGGING] & AI_DEBUG_BLOCKS) != 0) {
    echo "<script>
jQuery(window).on ('load', function () {
  setTimeout (function() {
      var google_auto_placed = jQuery ('.google-auto-placed ins ins iframe');
      google_auto_placed.before ('<section class=\"ai-debug-bar ai-debug-adsense ai-adsense-auto-ads\">",
    __('Automatically placed by AdSense Auto ads code', 'ad-inserter'),
    "</section>');
  }, 50);
});
</script>\n";
  }

  if (!get_disable_js_code () && $ai_wp_data [AI_CODE_FOR_IFRAME]) {
    $object_name = 'ai_front';
    $l10n = $ai_front_translations;

    echo '<script type="text/javascript">
/* <![CDATA[ */
';

    foreach ($l10n as $key => $value) {
      if (!is_scalar ($value)) continue;
      $l10n [$key] = html_entity_decode ((string) $value, ENT_QUOTES, 'UTF-8');
    }
    echo  "var $object_name = " . wp_json_encode ($l10n) . ";\n";
    echo '/* ]]> */
';
    if ($ai_wp_data [AI_FRONTEND_JS_DEBUGGING]) {
      echo 'var ai_debugging = true;', "\n";
    }

    echo '</script>', "\n";
  }

  if (($ai_wp_data [AI_WP_DEBUGGING] & AI_DEBUG_PROCESSING) != 0) {
    $ai_total_plugin_time += microtime (true) - $start_time;
    ai_log ("HEAD HOOK END: ". number_format (1000 * (microtime (true) - $start_time), 2)." ms\n");
    $ai_wp_data [AI_PROCESSING_TIME] = false;
  }
}

function ai_amp_head_hook () {
  global $block_object, $ai_wp_data, $ai_total_plugin_time;

  if (($ai_wp_data [AI_WP_DEBUGGING] & AI_DEBUG_PROCESSING) != 0) {
    ai_log ("AMP HEAD HOOK START");
    $ai_wp_data [AI_PROCESSING_TIME] = true;
    $start_time = microtime (true);
  }

  if (defined ('AI_BUFFERING')) {
    if (get_output_buffering ()) {
      if ($ai_wp_data [AI_WP_PAGE_TYPE] != AI_PT_AJAX) {
        ai_buffering_start ();
      }
    }
  }

  $ai_wp_data [AI_CONTEXT] = AI_CONTEXT_NONE;

  ai_header_noindex ();

  $header = $block_object [AI_HEADER_OPTION_NAME];

  if ($header->get_enable_manual ()) {
    if (!$header->get_debug_disable_insertion () && !get_disable_header_code ()) {
      if ($header->check_server_side_detection ()) {
        if ($ai_wp_data [AI_WP_PAGE_TYPE] != AI_PT_404 || $header->get_enable_404()) {
          $processed_code = do_shortcode ($header->ai_getCode ());

          if (strpos ($processed_code, AD_HTTP_SEPARATOR) !== false) {
            $codes = explode (AD_HTTP_SEPARATOR, $processed_code);
            $processed_code = ltrim ($codes [1]);
          }

//    ai_log ("ai_amp_head_hook ");

          if (strpos ($processed_code, AD_AMP_SEPARATOR) !== false) {
            $codes = explode (AD_AMP_SEPARATOR, $processed_code);
            $processed_code = ltrim ($codes [1]);
            echo $processed_code;

//    ai_log ("ai_amp_head_hook " . $processed_code);

            if (($ai_wp_data [AI_WP_DEBUGGING] & AI_DEBUG_PROCESSING) != 0) {
              if (strlen ($processed_code) != 0)
                ai_log ("HEAD CODE: " . strlen ($processed_code) . ' bytes');
            }
          }
        }
      }
    }
  }

  if (defined ('AI_BUFFERING')) {
    if (get_output_buffering () && !get_disable_header_code ()) {
      $ai_head_codes = "<!--[AI_HEAD_CODES]-->";
      echo $ai_head_codes;
    }
  }

  if (($ai_wp_data [AI_WP_DEBUGGING] & AI_DEBUG_PROCESSING) != 0) {
    $ai_total_plugin_time += microtime (true) - $start_time;
    ai_log ("AMP HEAD HOOK END: ". number_format (1000 * (microtime (true) - $start_time), 2)." ms\n");
    $ai_wp_data [AI_PROCESSING_TIME] = false;
  }
}

function ai_amp_css_hook () {
  global $ai_wp_data;

  if (get_disable_css_code ()) return;

  if (defined ('AI_AMP_HEADER_STYLES') && AI_AMP_HEADER_STYLES || $ai_wp_data [AI_WP_DEBUGGING] != 0) {

    if (defined ('AI_AMP_HEADER_STYLES') && AI_AMP_HEADER_STYLES) {
      if ($ai_wp_data [AI_WP_DEBUGGING] != 0) generate_debug_css_base ();

      echo get_alignment_css ();

      echo ".ai-align-left * {margin: 0 auto 0 0; text-align: left;}\n";
      echo ".ai-align-right * {margin: 0 0 0 auto; text-align: right;}\n";
      echo ".ai-center * {margin: 0 auto; text-align: center; }\n";
    }

    if ($ai_wp_data [AI_WP_DEBUGGING] != 0) generate_debug_css ();
  }
}


function ai_wp_footer_hook () {
  global $block_object, $ai_wp_data, $ai_total_plugin_time;

  if (($ai_wp_data [AI_WP_DEBUGGING] & AI_DEBUG_PROCESSING) != 0) {
    ai_log ("FOOTER HOOK START");
    $ai_wp_data [AI_PROCESSING_TIME] = true;
    $start_time = microtime (true);
  }

  if (defined ('AI_BUFFERING')) {
    if (get_output_buffering ()) {
      if ($ai_wp_data [AI_WP_PAGE_TYPE] != AI_PT_AJAX && !$ai_wp_data [AI_CODE_FOR_IFRAME]) {
        ai_buffering_end ();
      }
    }
  }

  if ($ai_wp_data [AI_DISABLE_CACHING]) ai_disable_caching ();

  $ai_wp_data [AI_CONTEXT] = AI_CONTEXT_FOOTER;
  $footer_code = '';

  $footer = $block_object [AI_FOOTER_OPTION_NAME];
  $footer->clear_code_cache ();

  if ($footer->get_enable_manual ()) {
    if (!$footer->get_debug_disable_insertion () && !get_disable_footer_code ()) {
      if ($footer->check_server_side_detection ()) {
        if ($ai_wp_data [AI_WP_PAGE_TYPE] != AI_PT_404 || $footer->get_enable_404()) {

          $processed_code = do_shortcode ($footer->ai_getCode ());

          if (strpos ($processed_code, AD_AMP_SEPARATOR) !== false) {
            $codes = explode (AD_AMP_SEPARATOR, $processed_code);
            $processed_code = $codes [0];
          } elseif ($ai_wp_data [AI_WP_AMP_PAGE]) $processed_code = '';

          $footer_code = $processed_code;

          echo $processed_code;

          if (($ai_wp_data [AI_WP_DEBUGGING] & AI_DEBUG_PROCESSING) != 0) {
            if (strlen ($processed_code) != 0)
              ai_log ("FOOTER CODE: " . strlen ($processed_code) . ' characters');
          }
        }
      }
    } else {
        if (($ai_wp_data [AI_WP_DEBUGGING] & AI_DEBUG_PROCESSING) != 0) {
          ai_log ('FOOTER CODE DEBUG NO INSERTION');
        }
      }
  }

  if (!(defined ('DOING_AJAX') && DOING_AJAX) || $ai_wp_data [AI_CODE_FOR_IFRAME]) {
    add_footer_inline_scripts ();

    if (function_exists ('ai_add_footer_html')) {
      ai_add_footer_html ();
    }
  }

  if (!$ai_wp_data [AI_CODE_FOR_IFRAME]) {
    if (!get_disable_footer_code () && ($ai_wp_data [AI_WP_DEBUGGING] & AI_DEBUG_BLOCKS) != 0 && !defined ('AI_DEBUGGING_DEMO')) {
      echo get_code_debug_block (' ' . __('Footer code', 'ad-inserter') . ' ' . ($footer->get_enable_manual () ? '' : ' ' . _x('DISABLED', 'Footer code', 'ad-inserter')), '...&lt;/body&gt;', strlen ($footer_code).' ' . _n('character inserted', 'characters inserted', strlen ($footer_code), 'ad-inserter'), $footer->ai_getCode (), $footer_code);
    }

    if (!get_disable_js_code () && ($ai_wp_data [AI_WP_DEBUGGING] & (AI_DEBUG_POSITIONS | AI_DEBUG_BLOCKS)) != 0) {
      $class_0 = AI_DEBUG_STATUS_CLASS.' status-error';
      $class_1 = AI_DEBUG_STATUS_CLASS.' status-ok';
      $javascript_text  = "<section class='ai-js-0 $class_0'>" . __('JAVASCRIPT NOT WORKING', 'ad-inserter') . "</section><section class='ai-js-1 $class_1' style='display: none;'>" . __('NO JAVASCRIPT ERRORS', 'ad-inserter') . "</section><section class='ai-js-2 $class_0' style='display: none;'>" . __('JAVASCRIPT ERRORS', 'ad-inserter') . "</section>";

      echo "<script>
    jQuery(document).ready(function($) {
      $('body').prepend (\"", $javascript_text, "\");
      $('.ai-js-0').hide ();
      if (ai_js_errors.length != 0) {
        $('.ai-js-2').show ();
      } else {
          $('.ai-js-1').show ();
        }
    });
  </script>\n";

      echo $javascript_text , "\n";
      echo get_page_type_debug_info () , "\n";
    }

  }

  if (($ai_wp_data [AI_WP_DEBUGGING] & AI_DEBUG_PROCESSING) != 0) {
    $ai_total_plugin_time += microtime (true) - $start_time;
    ai_log ("FOOTER HOOK END: ". number_format (1000 * (microtime (true) - $start_time), 2)." ms\n");
    $ai_wp_data [AI_PROCESSING_TIME] = false;
  }
}

function ai_amp_footer_hook () {
  global $block_object, $ai_wp_data, $ai_total_plugin_time;

  if (($ai_wp_data [AI_WP_DEBUGGING] & AI_DEBUG_PROCESSING) != 0) {
    ai_log ("AMP FOOTER HOOK START");
    $ai_wp_data [AI_PROCESSING_TIME] = true;
    $start_time = microtime (true);
  }

  if (defined ('AI_BUFFERING')) {
    if (get_output_buffering ()) {
      if ($ai_wp_data [AI_WP_PAGE_TYPE] != AI_PT_AJAX) {
        ai_buffering_end ();
      }
    }
  }

//  if (!(defined ('DOING_AJAX') && DOING_AJAX) && !$ai_wp_data [AI_WP_AMP_PAGE]) {
//    add_footer_inline_scripts ();
//  }

  $ai_wp_data [AI_CONTEXT] = AI_CONTEXT_FOOTER;

  $footer = $block_object [AI_FOOTER_OPTION_NAME];
  $footer->clear_code_cache ();

  if ($footer->get_enable_manual ()) {
    if (!$footer->get_debug_disable_insertion () && !get_disable_footer_code ()) {
      if ($footer->check_server_side_detection ()) {
        if ($ai_wp_data [AI_WP_PAGE_TYPE] != AI_PT_404 || $footer->get_enable_404()) {
          $processed_code = do_shortcode ($footer->ai_getCode ());

          if (strpos ($processed_code, AD_AMP_SEPARATOR) !== false) {
            $codes = explode (AD_AMP_SEPARATOR, $processed_code);
            $processed_code = ltrim ($codes [1]);
            echo $processed_code;
          }
        }
      }
    }
  }

  if (($ai_wp_data [AI_WP_DEBUGGING] & AI_DEBUG_POSITIONS) != 0) {
    echo get_page_type_debug_info ('AMP ') , "\n";
  }

  if (($ai_wp_data [AI_WP_DEBUGGING] & AI_DEBUG_PROCESSING) != 0) {
    $ai_total_plugin_time += microtime (true) - $start_time;
    ai_log ("AMP FOOTER HOOK END: ". number_format (1000 * (microtime (true) - $start_time), 2)." ms\n");
    $ai_wp_data [AI_PROCESSING_TIME] = false;
  }
}

function ai_write_debug_info ($write_processing_log = false) {
  global $block_object, $ai_last_time, $ai_total_plugin_time, $ai_total_php_time, $ai_processing_log, $ai_db_options_extract, $ai_wp_data, $ai_db_options, $block_insertion_log, $ai_custom_hooks, $version_string, $subversion_string;

  echo sprintf ("%-25s%s", AD_INSERTER_NAME, AD_INSERTER_VERSION);
  if (function_exists ('ai_debug_header')) ai_debug_header ();
  echo "\n\n";
  if (($install_timestamp = get_option (AI_INSTALL_NAME)) !== false) {
    echo "INSTALLED:               ", date ("Y-m-d H:i:s", $install_timestamp + get_option ('gmt_offset') * 3600);
    if (isset ($ai_wp_data [AI_INSTALL_TIME_DIFFERENCE])) {
      printf (' (%04d-%02d-%02d %02d:%02d:%02d, %d days ago)', $ai_wp_data [AI_INSTALL_TIME_DIFFERENCE]->y,
                                                  $ai_wp_data [AI_INSTALL_TIME_DIFFERENCE]->m,
                                                  $ai_wp_data [AI_INSTALL_TIME_DIFFERENCE]->d,
                                                  $ai_wp_data [AI_INSTALL_TIME_DIFFERENCE]->h,
                                                  $ai_wp_data [AI_INSTALL_TIME_DIFFERENCE]->i,
                                                  $ai_wp_data [AI_INSTALL_TIME_DIFFERENCE]->s,
                                                  isset ($ai_wp_data [AI_DAYS_SINCE_INSTAL]) ? $ai_wp_data [AI_DAYS_SINCE_INSTAL] : null);
    }
    echo "\n";
  }
  echo "GENERATED (WP time):     ", date ("Y-m-d H:i:s", time() + get_option ('gmt_offset') * 3600), "\n";
  echo "GENERATED (Server time): ", date ("Y-m-d H:i:s", time()), "\n";
  echo "PLUGIN CODE PROCESSING:  ", number_format (($ai_total_plugin_time - $ai_total_php_time) * 1000, 2, '.' , ''), " ms\n";
  echo "USER   CODE PROCESSING:  ", number_format ($ai_total_php_time * 1000, 2, '.' , ''), " ms\n";
  echo "TOTAL PROCESSING TIME:   ", number_format ($ai_total_plugin_time * 1000, 2, '.' , ''), " ms\n";
//  echo "MEMORY USED:             ", number_format (memory_get_usage (true) / 1024 / 1024, 2, '.' , ''), " MB\n";
//  echo "PEAK MEMORY USED:        ", number_format (memory_get_peak_usage (true) / 1024 / 1024, 2, '.' , ''), " MB\n";

  echo "SETTINGS:                ";
  if (isset ($ai_db_options [AI_OPTION_GLOBAL]['VERSION']))
    echo (int) ($ai_db_options [AI_OPTION_GLOBAL]['VERSION'][0].$ai_db_options [AI_OPTION_GLOBAL]['VERSION'][1]), '.',
         (int) ($ai_db_options [AI_OPTION_GLOBAL]['VERSION'][2].$ai_db_options [AI_OPTION_GLOBAL]['VERSION'][3]), '.',
         (int) ($ai_db_options [AI_OPTION_GLOBAL]['VERSION'][4].$ai_db_options [AI_OPTION_GLOBAL]['VERSION'][5]);

  echo "\n";
  echo "SETTINGS SIZE:           ", strlen (serialize (get_option (AI_OPTION_NAME))), "\n";
  echo "SETTINGS TIMESTAMP:      ";
  echo isset ($ai_db_options [AI_OPTION_GLOBAL]['TIMESTAMP']) ? date ("Y-m-d H:i:s", $ai_db_options [AI_OPTION_GLOBAL]['TIMESTAMP'] + get_option ('gmt_offset') * 3600) : "", "\n";

  $expected_extract_version = $version_string . $subversion_string . '-' . '96';
  $extract_source = '';
  $saved_settings = get_option (AI_OPTION_NAME);
  if (isset ($saved_settings [AI_OPTION_EXTRACT]['VERSION']) && $saved_settings [AI_OPTION_EXTRACT]['VERSION'] == $expected_extract_version) {
    $saved_extract = $saved_settings [AI_OPTION_EXTRACT];
    $extract_source = 'SAVED SETTINGS';
  } else {
      $saved_extract = get_option (AI_EXTRACT_NAME);
      $extract_source = defined ('AI_EXTRACT_GENERATED') ? "REGENERATED" : 'SAVED EXTRACT';
    }
  echo "SETTINGS EXTRACT:        ";
  if (isset ($saved_extract ['VERSION'])) {
    $extract_subversion_blocks = explode ('-', $saved_extract ['VERSION']);
    array_shift ($extract_subversion_blocks);
    echo (int) ($saved_extract ['VERSION'][0].$saved_extract ['VERSION'][1]), '.',
         (int) ($saved_extract ['VERSION'][2].$saved_extract ['VERSION'][3]), '.',
         (int) ($saved_extract ['VERSION'][4].$saved_extract ['VERSION'][5]), '-', implode ('-', $extract_subversion_blocks);
  }
  echo"\n";
  echo "EXTRACT TIMESTAMP:       ";
  echo isset ($saved_extract ['TIMESTAMP']) ? date ("Y-m-d H:i:s", $saved_extract ['TIMESTAMP'] + get_option ('gmt_offset') * 3600) : "", "\n";
  echo "EXTRACT SOURCE:          ", $extract_source, "\n";

  echo "MULTISITE:               ", is_multisite() ? "YES" : "NO", "\n";
  if (is_multisite()) {
    echo "MAIN SITE:               ", is_main_site () ? "YES" : "NO", "\n";
  }

  echo "USER:                    ";
  if (($ai_wp_data [AI_WP_USER] & AI_USER_LOGGED_IN)     == AI_USER_LOGGED_IN) echo "LOGGED-IN "; else echo "NOT LOGGED-IN ";
  if (($ai_wp_data [AI_WP_USER] & AI_USER_ADMINISTRATOR) == AI_USER_ADMINISTRATOR) echo "ADMINISTRATOR";
  $current_user = wp_get_current_user();
  echo "\n";
  echo "USERNAME:                ", $current_user->user_login, "\n";
  echo 'USER ROLES:              ', implode (', ', $current_user->roles), "\n";
  echo 'MIN.USER FOR EXCEPTIONS: ', get_minimum_user_role (), "\n";
  echo "PAGE TYPE:               ";
  switch ($ai_wp_data [AI_WP_PAGE_TYPE]) {
    case AI_PT_STATIC:    echo "STATIC PAGE"; break;
    case AI_PT_POST:      echo "POST"; break;
    case AI_PT_HOMEPAGE:  echo "HOMEPAGE"; break;
    case AI_PT_CATEGORY:  echo "CATEGORY PAGE"; break;
    case AI_PT_ARCHIVE:   echo "ARCHIVE PAGE"; break;
    case AI_PT_SEARCH:    echo "SEARCH PAGE"; break;
    case AI_PT_404:       echo "404 PAGE"; break;
    case AI_PT_ADMIN:     echo "ADMIN"; break;
    case AI_PT_FEED:      echo "FEED"; break;
    case AI_PT_AJAX:      echo "AJAX"; break;
    case AI_PT_ANY:       echo "ANY ?"; break;
    case AI_PT_NONE:      echo "NONE ?"; break;
    default:              echo "?"; break;
  }
  echo "\n";

  switch ($ai_wp_data [AI_WP_PAGE_TYPE]) {
    case AI_PT_STATIC:
    case AI_PT_POST:
      echo 'PUBLISHED:               ', date ("Y-m-d H:i:s", get_the_date ('U')), "\n";
      echo 'ID:                      ', get_the_ID(), "\n";
      echo 'POST TYPE:               ', get_post_type (), "\n";
      $category_data = get_the_category();
      $categories = array ();
      foreach ($category_data as $category) {
        $categories []= $category->name . ' ('.$category->slug.')';
      }
      echo 'CATEGORIES:              ', implode (', ', $categories), "\n";
      $tag_data = wp_get_post_tags (get_the_ID());
      $tags = array ();
      foreach ($tag_data as $tag) {
        $tags []= $tag->name . ' ('.$tag->slug.')';
      }
      echo 'TAGS:                    ', implode (', ', $tags), "\n";
      $taxonomies = array ();
      $taxonomy_names = get_post_taxonomies ();
      foreach ($taxonomy_names as $taxonomy_name) {
        $terms = get_the_terms (0, $taxonomy_name);
        if (is_array ($terms)) {
          foreach ($terms as $term) {
            $taxonomies [] = strtolower ($term->taxonomy) . ':' . strtolower ($term->slug);
          }
        }
      }
      echo 'TAXONOMIES:              ', implode (', ', $taxonomies), "\n";

      $post_meta = get_post_meta (get_the_ID());
      $meta_string = array ();
      foreach ($post_meta as $key => $post_meta_field) {
        foreach ($post_meta_field as $post_meta_field_item) {
          $meta_string []= $key . ':' . $post_meta_field_item;
        }
      }
//      echo 'POST META:               ', implode (', ', $meta_string), "\n";
      echo 'POST META:               ', str_replace (array ("<!--", "-->", "\n", "\r"), array ("[!--", "--]", "*n", "*r"), implode (', ', $meta_string)), "\n";
      break;
    case AI_PT_CATEGORY:
      $category_data = get_the_category();
      $categories = array ();
      foreach ($category_data as $category) {
        $categories []= $category->slug;
      }
      echo 'CATEGORY:                ', implode (', ', $categories), "\n";
      break;
    case AI_PT_ARCHIVE:
      $tag_data = wp_get_post_tags (get_the_ID());
      $tags = array ();
      foreach ($tag_data as $tag) {
        $tags []= $tag->slug;
      }
      echo 'TAG:                     ', implode (', ', $tags), "\n";
      break;
  }

  echo 'AMP PAGE:                ', ($ai_wp_data [AI_WP_AMP_PAGE] ? 'YES' : 'NO'), "\n";

  echo 'URL:                     ', $ai_wp_data [AI_WP_URL], "\n";
  echo 'REFERER:                 ', isset ($_SERVER['HTTP_REFERER']) ? strtolower (parse_url ($_SERVER['HTTP_REFERER'], PHP_URL_HOST)) . ' ('. remove_debug_parameters_from_url ($_SERVER['HTTP_REFERER']).')' : "", "\n";
  if (function_exists ('ai_debug')) ai_debug ();

  if ($ai_wp_data [AI_CLIENT_SIDE_DETECTION] || 1) {
    for ($viewport = 1; $viewport <= 6; $viewport ++) {
      $viewport_name  = get_viewport_name ($viewport);
      $viewport_width = get_viewport_width ($viewport);
      if ($viewport_name != '') {
        echo 'VIEWPORT ', $viewport, ':              ', sprintf ("%-16s min width %s", $viewport_name.' ', $viewport_width), " px\n";
      }
    }
  }

  echo 'SERVER-SIDE DETECTION:   ', $ai_wp_data [AI_SERVER_SIDE_DETECTION] ? 'USED' : "NOT USED", "\n";
  if ($ai_wp_data [AI_SERVER_SIDE_DETECTION]) {
    echo 'SERVER-SIDE DEVICE:      ';
    if (AI_DESKTOP) echo "DESKTOP\n";
    elseif (AI_TABLET) echo "TABLET\n";
    elseif (AI_PHONE) echo "PHONE\n";
    else echo "?\n";
  }
  echo 'CLIENT-SIDE DETECTION:   ', $ai_wp_data [AI_CLIENT_SIDE_DETECTION] ? 'USED' : "NOT USED", "\n";
  echo 'CLIENT-SIDE INSERTION:   ', $ai_wp_data [AI_CLIENT_SIDE_INSERTION]      ? 'USED' : "NOT USED", "\n";
  if (function_exists ('ai_debug_features')) ai_debug_features ();

  $enabled_custom_hooks = array ();
  foreach ($ai_custom_hooks as $ai_custom_hook) {
    $hook = $ai_custom_hook ['index'];
    $enabled_custom_hooks [] = $ai_custom_hook ['action'];
  }
  for ($hook = 1; $hook <= 8; $hook ++) {
    $name       = str_replace (array ('&lt;', '&gt;'), array ('<', '>'), get_hook_name ($hook));
    $action     = get_hook_action ($hook);
    if (get_hook_enabled ($hook) /*&& $name != '' && $action != ''*/) {
      $priority   = get_hook_priority ($hook);
      echo 'CUSTOM HOOK ', $hook, ':           ', sprintf ("%-30s %-35s %d %s", $name, $action, $priority, !in_array ($action, $enabled_custom_hooks) ? 'INVALID' : ''), "\n";
    }
  }
  echo 'BLOCK CLASS NAME:        ', get_block_class_name (), "\n";
  echo 'INLINE STYLES:           ', get_inline_styles () ? 'ENABLED' : 'DISABLED', "\n";
  echo 'DYNAMIC BLOCKS:          ';
  switch (get_dynamic_blocks()) {
    case AI_DYNAMIC_BLOCKS_SERVER_SIDE:
      echo AI_TEXT_ENG_SERVER_SIDE;
      break;
    case AI_DYNAMIC_BLOCKS_SERVER_SIDE_W3TC:
      echo AI_TEXT_ENG_SERVER_SIDE_W3TC;
      break;
    case AI_DYNAMIC_BLOCKS_CLIENT_SIDE_SHOW:
      echo AI_TEXT_ENG_CLIENT_SIDE_SHOW;
      break;
    case AI_DYNAMIC_BLOCKS_CLIENT_SIDE_INSERT:
      echo AI_TEXT_ENG_CLIENT_SIDE_INSERT;
      break;
  }
  echo "\n";
  echo 'PARAGRAPH COUNTING:      ';
  switch (get_paragraph_counting_functions()) {
    case AI_STANDARD_PARAGRAPH_COUNTING_FUNCTIONS:
      echo AI_TEXT_ENG_STANDARD;
      break;
    case AI_MULTIBYTE_PARAGRAPH_COUNTING_FUNCTIONS:
      echo AI_TEXT_ENG_MULTIBYTE;
      break;
  }
  echo "\n";
  echo 'NO PAR. COUNTING INSIDE: ', get_no_paragraph_counting_inside (), "\n";
  if (defined ('AI_BUFFERING')) {
    echo 'OUTPUT BUFFERING:        ';
    switch (get_output_buffering()) {
      case AI_OUTPUT_BUFFERING_DISABLED:
        echo AI_TEXT_ENG_DISABLED;
        break;
      case AI_OUTPUT_BUFFERING_ENABLED:
        echo AI_TEXT_ENG_ENABLED;
        break;
    }
    echo "\n";
  }
  echo 'AD LABEL:                ', get_ad_label (), "\n";
  if (defined ('AI_STICKY_SETTINGS') && AI_STICKY_SETTINGS) {
    echo 'MAIN CONTENT:            ', get_main_content_element (), "\n";
  }
  echo 'PLUGIN PRIORITY:         ', get_plugin_priority (), "\n";
  echo 'ADMIN DISABLE CACHING:   ', get_disable_caching () ? 'ENABLED' : 'DISABLED', "\n";
  echo 'DO NOT CACHE CONSTANTS:  ', defined ('DONOTCACHEPAGE') ? 'DONOTCACHEPAGE ' : '', defined ('DONOTCACHEOBJECT') ? 'DONOTCACHEOBJECT ' : '', defined ('DONOTCACHEDB') ? 'DONOTCACHEDB ' : '', "\n";
  echo 'HEADER:                  ', $block_object [AI_HEADER_OPTION_NAME]->get_enable_manual () ? 'ENABLED' : 'DISABLED', "\n";
  echo 'FOOTER:                  ', $block_object [AI_FOOTER_OPTION_NAME]->get_enable_manual () ? 'ENABLED' : 'DISABLED', "\n";
  if (defined ('AI_ADBLOCKING_DETECTION') && AI_ADBLOCKING_DETECTION) {
    echo 'AD BLOCKING DETECTION:   ', $ai_wp_data [AI_ADB_DETECTION] ? 'ENABLED' : 'DISABLED', "\n";
    if ($ai_wp_data [AI_ADB_DETECTION]) {
      echo 'ADB ACTION:              ';
      switch (get_adb_action (true)) {
        case AI_ADB_ACTION_NONE:
          echo AI_TEXT_ENG_NONE;
          break;
        case AI_ADB_ACTION_MESSAGE:
          echo AI_TEXT_ENG_POPUP_MESSAGE;
          break;
        case AI_ADB_ACTION_REDIRECTION:
          echo AI_TEXT_ENG_REDIRECTION;
          break;
      }
      echo "\n";
      echo 'ADB NO ACTION:           ';
      switch (get_adb_no_action (true)) {
        case AI_ADB_NO_ACTION_NONE:
          echo AI_TEXT_ENG_NONE;
          break;
        case AI_ADB_NO_ACTION_LOGGED_IN:
          echo AI_TEXT_ENG_DISPLAY_LOGGED_IN_USERS;
          break;
        case AI_ADB_NO_ACTION_ADMINISTRATORS:
          echo AI_TEXT_ENG_DISPLAY_ADMINISTRATORS;
          break;
      }
      echo "\n";
      echo 'ADB DELAY ACTION:        ', get_delay_action (), "\n";
      echo 'ADB NO ACTION PERIOD:    ', get_no_action_period (), "\n";
      echo 'ADB SELECTORS:           ', get_adb_selectors (true), "\n";
      $redirection_page = get_redirection_page ();
      echo 'ADB REDIRECTION PAGE:    ', $redirection_page != 0 ? get_the_title ($redirection_page) . ' (' . get_permalink ($redirection_page) . ')' : 'Custom Url', "\n";
      echo 'ADB REDIRECTION URL:     ', get_custom_redirection_url (), "\n";
      echo 'ADB MESSAGE:             ', $block_object [AI_ADB_MESSAGE_OPTION_NAME]->ai_getCode (), "\n";
      echo 'ADB MESSAGE CSS:         ', get_message_css (), "\n";
      echo 'ADB OVERLAY CSS:         ', get_overlay_css (), "\n";
      echo 'ADB UNDISMISSIBLE:       ', get_undismissible_message (true) ? 'ON' : 'OFF', "\n";
    }
  }

  echo "\n";

//  if ($block_object [AI_HEADER_OPTION_NAME]->get_enable_manual ()) {
//    echo "HEADER CODE ========================================================\n";
//    echo ai_dump_code ($block_object [AI_HEADER_OPTION_NAME]->ai_getCode ());
//    echo "\n====================================================================\n\n";
//  }
//  if ($block_object [AI_FOOTER_OPTION_NAME]->get_enable_manual ()) {
//    echo "FOOTER CODE ========================================================\n";
//    echo ai_dump_code ($block_object [AI_FOOTER_OPTION_NAME]->ai_getCode ());
//    echo "\n====================================================================\n\n";
//  }

  $default = new ai_Block (1);

  echo "BLOCK SETTINGS           Po Pa Hp Cp Ap Sp AM Aj Fe 404 Wi Sh PHP\n";
  for ($block = 1; $block <= 96; $block ++) {
    $obj = $block_object [$block];

    $settings = "";
    $insertion_settings = '';
    $alignment_settings = '';
    $default_settings = true;
//    $display_type = '';
    foreach (array_keys ($default->wp_options) as $key){
      switch ($key) {
        case AI_OPTION_CODE:
        case AI_OPTION_BLOCK_NAME:
          continue 2;
        case AI_OPTION_DISPLAY_ON_PAGES:
        case AI_OPTION_DISPLAY_ON_POSTS:
        case AI_OPTION_DISPLAY_ON_HOMEPAGE:
        case AI_OPTION_DISPLAY_ON_CATEGORY_PAGES:
        case AI_OPTION_DISPLAY_ON_SEARCH_PAGES:
        case AI_OPTION_DISPLAY_ON_ARCHIVE_PAGES:
        case AI_OPTION_ENABLE_AMP:
        case AI_OPTION_ENABLE_AJAX:
        case AI_OPTION_ENABLE_FEED:
        case AI_OPTION_ENABLE_404:
        case AI_OPTION_ENABLE_MANUAL:
        case AI_OPTION_ENABLE_WIDGET:
        case AI_OPTION_ENABLE_PHP_CALL:
          if ($obj->wp_options [$key] != $default->wp_options [$key]) $default_settings = false;
          continue 2;
      }

//      if (gettype ($obj->wp_options [$key]) == 'string' && gettype ($default->wp_options [$key]) == 'integer') {
//        $default->wp_options [$key] = strval ($default->wp_options [$key]);
//      }
//      elseif (gettype ($obj->wp_options [$key]) == 'integer' && gettype ($default->wp_options [$key]) == 'string') {
//        $default->wp_options [$key] = intval ($default->wp_options [$key]);
//      }

//      if ($obj->wp_options [$key] !== $default->wp_options [$key]) {
      if ($obj->wp_options [$key] != $default->wp_options [$key]) {
        $default_settings = false;
        switch ($key) {
          case AI_OPTION_AUTOMATIC_INSERTION:
            $insertion_settings = $obj->get_automatic_insertion_text (false, false);
            break;
          case AI_OPTION_SERVER_SIDE_INSERTION:
            $settings .= "[" . $key . ": " . $obj->get_automatic_insertion_text (true, false) . ']';
            break;
          case AI_OPTION_ALIGNMENT_TYPE:
            $alignment_settings = $obj->get_alignment_type_text (false);
            break;
          case AI_OPTION_ENABLED_ON_WHICH_PAGES:
            $settings .= "[" . $key . ": " . $obj->get_ad_enabled_on_which_pages_text (false) . ']';
            break;
          case AI_OPTION_ENABLED_ON_WHICH_POSTS:
            $settings .= "[" . $key . ": " . $obj->get_ad_enabled_on_which_posts_text (false) . ']';
            break;
          case AI_OPTION_FILTER_TYPE:
            $settings .= "[" . $key . ": " . $obj->get_filter_type_text (false) . ']';
            break;
          case AI_OPTION_AVOID_ACTION:
            $settings .= "[" . $key . ": " . $obj->get_avoid_action_text (false) . ']';
            break;
          case AI_OPTION_AVOID_DIRECTION:
            $settings .= "[" . $key . ": " . $obj->get_avoid_direction_text (false) . ']';
            break;
          case AI_OPTION_DIRECTION_TYPE:
            $settings .= "[" . $key . ": " . $obj->get_direction_type_text (false) . ']';
            break;
          case AI_OPTION_PARAGRAPH_TEXT_TYPE:
            $settings .= "[" . $key . ": " . $obj->get_paragraph_text_type_text (false) . ']';
            break;
          case AI_OPTION_DISPLAY_FOR_USERS:
            $settings .= "[" . $key . ": " . $obj->get_display_for_users_text (false) . ']';
            break;
          case AI_OPTION_DISPLAY_FOR_DEVICES:
            $settings .= "[" . $key . ": " . $obj->get_display_for_devices_text (false) . ']';
            break;
          case AI_OPTION_PARAGRAPH_TEXT:
          case AI_OPTION_AVOID_TEXT_ABOVE:
          case AI_OPTION_AVOID_TEXT_BELOW:
          case AI_OPTION_HTML_SELECTOR:
            if ($write_processing_log)
              $settings .= "[" . $key . ": " . ai_log_filter_content (html_entity_decode ($obj->wp_options [$key])) . ']'; else
                $settings .= "[" . $key . ": " . $obj->wp_options [$key] . ']';
            break;
          default:
            $settings .= "[" . $key . ": " . $obj->wp_options [$key] . ']';
            break;
        }

//        $settings .= ' ['.gettype ($obj->wp_options [$key]).':'.$obj->wp_options [$key].'#'.gettype ($default->wp_options [$key]).':'.$default->wp_options [$key].'] ';

      } else
        switch ($key) {
          case AI_OPTION_AUTOMATIC_INSERTION:
            $insertion_settings = $obj->get_automatic_insertion_text (false, false);
            break;
          case AI_OPTION_ALIGNMENT_TYPE:
            $alignment_settings = $obj->get_alignment_type_text (false);
            break;
        }
    }
    if ($default_settings && $settings == '') continue;
    $settings = ' [' . $insertion_settings . '][' . $alignment_settings . ']' . $settings;

    echo sprintf ("%2d %-21s ", $block, $ai_wp_data [AI_MBSTRING_LOADED] ? mb_substr ($obj->get_ad_name(), 0, 21) : substr ($obj->get_ad_name(), 0, 21));

    echo $obj->get_display_settings_post()     ? "o" : ".", "  ";
    echo $obj->get_display_settings_page()     ? "o" : ".", "  ";
    echo $obj->get_display_settings_home()     ? "o" : ".", "  ";
    echo $obj->get_display_settings_category() ? "o" : ".", "  ";
    echo $obj->get_display_settings_archive()  ? "o" : ".", "  ";
    echo $obj->get_display_settings_search()   ? "o" : ".", "  ";
    echo $obj->get_enable_amp()                ? "o" : ".", "  ";
    echo $obj->get_enable_ajax()               ? "o" : ".", "  ";
    echo $obj->get_enable_feed()               ? "o" : ".", "  ";
    echo $obj->get_enable_404()                ? "o" : ".", "   ";
    echo $obj->get_enable_widget()             ? "x" : ".", "  ";
    echo $obj->get_enable_manual()             ? "x" : ".", "  ";
    echo $obj->get_enable_php_call()           ? "x" : ".", "  ";

    echo $settings, "\n";
  }
  echo "\n";


  $args = array (
    'public'    => true,
    '_builtin'  => false
  );
  $custom_post_types = get_post_types ($args, 'names', 'and');
  $screens = array_values (array_merge (array ('post', 'page'), $custom_post_types));

  $args = array (
    'posts_per_page'   => 100,
    'offset'           => 0,
    'category'         => '',
    'category_name'    => '',
    'orderby'          => 'type',
    'order'            => 'ASC',
    'include'          => '',
    'exclude'          => '',
    'meta_key'         => '_adinserter_block_exceptions',
    'meta_value'       => '',
    'post_type'        => $screens,
    'post_mime_type'   => '',
    'post_parent'      => '',
    'author'           => '',
    'author_name'      => '',
    'post_status'      => '',
    'suppress_filters' => true
  );
  $posts_pages = get_posts ($args);

  if (count ($posts_pages) != 0) {
    echo "EXCEPTIONS FOR BLOCKS    ID     TYPE                      TITLE                                                            URL\n";
    foreach ($posts_pages as $page) {
      $post_meta = get_post_meta ($page->ID, '_adinserter_block_exceptions', true);
      if ($post_meta == '') continue;
      $post_type_object = get_post_type_object ($page->post_type);
      echo sprintf ("%-24s %-6s %-24s  %-64s %s", $post_meta, $page->ID, $post_type_object->labels->singular_name, substr ($page->post_title, 0, 64), get_permalink ($page->ID)), "\n";
    }
    echo "\n";
  }

  echo "TOTAL BLOCKS\n";
  if (count ($ai_db_options_extract [ABOVE_HEADER_HOOK_BLOCKS][AI_PT_ANY]))
    echo "ABOVE HEADER:            ", implode (", ", $ai_db_options_extract [ABOVE_HEADER_HOOK_BLOCKS][AI_PT_ANY]), "\n";
  if (count ($ai_db_options_extract [CONTENT_HOOK_BLOCKS][AI_PT_ANY]))
    echo "CONTENT HOOK:            ", implode (", ", $ai_db_options_extract [CONTENT_HOOK_BLOCKS][AI_PT_ANY]), "\n";
  if (count ($ai_db_options_extract [EXCERPT_HOOK_BLOCKS][AI_PT_ANY]))
    echo "EXCERPT HOOK:            ", implode (", ", $ai_db_options_extract [EXCERPT_HOOK_BLOCKS][AI_PT_ANY]), "\n";
  if (count ($ai_db_options_extract [LOOP_START_HOOK_BLOCKS][AI_PT_ANY]))
    echo "LOOP START HOOK:         ", implode (", ", $ai_db_options_extract [LOOP_START_HOOK_BLOCKS][AI_PT_ANY]), "\n";
  if (count ($ai_db_options_extract [LOOP_END_HOOK_BLOCKS][AI_PT_ANY]))
    echo "LOOP END HOOK:           ", implode (", ", $ai_db_options_extract [LOOP_END_HOOK_BLOCKS][AI_PT_ANY]), "\n";
  if (count ($ai_db_options_extract [POST_HOOK_BLOCKS][AI_PT_ANY]))
    echo "POST HOOK:               ", implode (", ", $ai_db_options_extract [POST_HOOK_BLOCKS][AI_PT_ANY]), "\n";
  if (count ($ai_db_options_extract [BEFORE_COMMENTS_HOOK_BLOCKS][AI_PT_ANY]))
    echo "AFTER COMMENTS HOOK:     ", implode (", ", $ai_db_options_extract [BEFORE_COMMENTS_HOOK_BLOCKS][AI_PT_ANY]), "\n";
  if (count ($ai_db_options_extract [BETWEEN_COMMENTS_HOOK_BLOCKS][AI_PT_ANY]))
    echo "BETWEEN COMMENTS HOOK    ", implode (", ", $ai_db_options_extract [BETWEEN_COMMENTS_HOOK_BLOCKS][AI_PT_ANY]), "\n";
  if (count ($ai_db_options_extract [AFTER_COMMENTS_HOOK_BLOCKS][AI_PT_ANY]))
    echo "AFTER COMMENTS HOOK:     ", implode (", ", $ai_db_options_extract [AFTER_COMMENTS_HOOK_BLOCKS][AI_PT_ANY]), "\n";
  if (count ($ai_db_options_extract [FOOTER_HOOK_BLOCKS][AI_PT_ANY]))
    echo "FOOTER HOOK:             ", implode (", ", $ai_db_options_extract [FOOTER_HOOK_BLOCKS][AI_PT_ANY]), "\n";
  foreach ($ai_custom_hooks as $hook_index => $custom_hook) {

    switch ($custom_hook ['action']) {
      case 'wp_footer':
//      case 'wp_head':
      case 'the_content':
      case 'the_excerpt':
      case 'loop_start':
      case 'loop_end':
      case 'the_post':
        continue 2;
    }

    if (count ($ai_db_options_extract [$custom_hook ['action'] . CUSTOM_HOOK_BLOCKS][AI_PT_ANY]))
      echo substr (strtoupper (str_replace (array ('&lt;', '&gt;'), array ('<', '>'), get_hook_name ($custom_hook ['index']))) . " HOOK:                   ", 0, 25), implode (", ", $ai_db_options_extract [$custom_hook ['action'] . CUSTOM_HOOK_BLOCKS][AI_PT_ANY]), "\n";
  }
  if (count ($ai_db_options_extract [HTML_ELEMENT_HOOK_BLOCKS][AI_PT_ANY]))
    echo "HTML ELEMENT:            ", implode (", ", $ai_db_options_extract [HTML_ELEMENT_HOOK_BLOCKS][AI_PT_ANY]), "\n";

  echo "\nBLOCKS FOR THIS PAGE TYPE\n";
  if (isset ($ai_db_options_extract [ABOVE_HEADER_HOOK_BLOCKS][$ai_wp_data [AI_WP_PAGE_TYPE]]) && count ($ai_db_options_extract [ABOVE_HEADER_HOOK_BLOCKS][$ai_wp_data [AI_WP_PAGE_TYPE]]))
    echo "ABOVE HEADER:            ", implode (", ", $ai_db_options_extract [ABOVE_HEADER_HOOK_BLOCKS][$ai_wp_data [AI_WP_PAGE_TYPE]]), "\n";
  if (isset ($ai_db_options_extract [CONTENT_HOOK_BLOCKS][$ai_wp_data [AI_WP_PAGE_TYPE]]) && count ($ai_db_options_extract [CONTENT_HOOK_BLOCKS][$ai_wp_data [AI_WP_PAGE_TYPE]]))
    echo "CONTENT HOOK:            ", implode (", ", $ai_db_options_extract [CONTENT_HOOK_BLOCKS][$ai_wp_data [AI_WP_PAGE_TYPE]]), "\n";
  if (isset ($ai_db_options_extract [EXCERPT_HOOK_BLOCKS][$ai_wp_data [AI_WP_PAGE_TYPE]]) && count ($ai_db_options_extract [EXCERPT_HOOK_BLOCKS][$ai_wp_data [AI_WP_PAGE_TYPE]]))
    echo "EXCERPT HOOK:            ", implode (", ", $ai_db_options_extract [EXCERPT_HOOK_BLOCKS][$ai_wp_data [AI_WP_PAGE_TYPE]]), "\n";
  if (isset ($ai_db_options_extract [LOOP_START_HOOK_BLOCKS][$ai_wp_data [AI_WP_PAGE_TYPE]]) && count ($ai_db_options_extract [LOOP_START_HOOK_BLOCKS][$ai_wp_data [AI_WP_PAGE_TYPE]]))
    echo "LOOP START HOOK:         ", implode (", ", $ai_db_options_extract [LOOP_START_HOOK_BLOCKS][$ai_wp_data [AI_WP_PAGE_TYPE]]), "\n";
  if (isset ($ai_db_options_extract [LOOP_END_HOOK_BLOCKS][$ai_wp_data [AI_WP_PAGE_TYPE]]) && count ($ai_db_options_extract [LOOP_END_HOOK_BLOCKS][$ai_wp_data [AI_WP_PAGE_TYPE]]))
    echo "LOOP END HOOK:           ", implode (", ", $ai_db_options_extract [LOOP_END_HOOK_BLOCKS][$ai_wp_data [AI_WP_PAGE_TYPE]]), "\n";
  if (isset ($ai_db_options_extract [POST_HOOK_BLOCKS][$ai_wp_data [AI_WP_PAGE_TYPE]]) && count ($ai_db_options_extract [POST_HOOK_BLOCKS][$ai_wp_data [AI_WP_PAGE_TYPE]]))
    echo "POST HOOK:               ", implode (", ", $ai_db_options_extract [POST_HOOK_BLOCKS][$ai_wp_data [AI_WP_PAGE_TYPE]]), "\n";
  if (isset ($ai_db_options_extract [BEFORE_COMMENTS_HOOK_BLOCKS][$ai_wp_data [AI_WP_PAGE_TYPE]]) && count ($ai_db_options_extract [BEFORE_COMMENTS_HOOK_BLOCKS][$ai_wp_data [AI_WP_PAGE_TYPE]]))
    echo "AFTER COMMENTS HOOK:     ", implode (", ", $ai_db_options_extract [BEFORE_COMMENTS_HOOK_BLOCKS][$ai_wp_data [AI_WP_PAGE_TYPE]]), "\n";
  if (isset ($ai_db_options_extract [BETWEEN_COMMENTS_HOOK_BLOCKS][$ai_wp_data [AI_WP_PAGE_TYPE]]) && count ($ai_db_options_extract [BETWEEN_COMMENTS_HOOK_BLOCKS][$ai_wp_data [AI_WP_PAGE_TYPE]]))
    echo "BETWEEN COMMENTS HOOK:   ", implode (", ", $ai_db_options_extract [BETWEEN_COMMENTS_HOOK_BLOCKS][$ai_wp_data [AI_WP_PAGE_TYPE]]), "\n";
  if (isset ($ai_db_options_extract [AFTER_COMMENTS_HOOK_BLOCKS][$ai_wp_data [AI_WP_PAGE_TYPE]]) && count ($ai_db_options_extract [AFTER_COMMENTS_HOOK_BLOCKS][$ai_wp_data [AI_WP_PAGE_TYPE]]))
    echo "AFTER COMMENTS HOOK:     ", implode (", ", $ai_db_options_extract [AFTER_COMMENTS_HOOK_BLOCKS][$ai_wp_data [AI_WP_PAGE_TYPE]]), "\n";
  if (isset ($ai_db_options_extract [FOOTER_HOOK_BLOCKS][$ai_wp_data [AI_WP_PAGE_TYPE]]) && count ($ai_db_options_extract [FOOTER_HOOK_BLOCKS][$ai_wp_data [AI_WP_PAGE_TYPE]]))
    echo "FOOTER HOOK              ", implode (", ", $ai_db_options_extract [FOOTER_HOOK_BLOCKS][$ai_wp_data [AI_WP_PAGE_TYPE]]), "\n";
  foreach ($ai_custom_hooks as $hook_index => $custom_hook) {

    switch ($custom_hook ['action']) {
      case 'wp_footer':
//      case 'wp_head':
      case 'the_content':
      case 'the_excerpt':
      case 'loop_start':
      case 'loop_end':
      case 'the_post':
        continue 2;
    }

    if (isset ($ai_db_options_extract [$custom_hook ['action'] . CUSTOM_HOOK_BLOCKS][$ai_wp_data [AI_WP_PAGE_TYPE]]) && count ($ai_db_options_extract [$custom_hook ['action'] . CUSTOM_HOOK_BLOCKS][$ai_wp_data [AI_WP_PAGE_TYPE]]))
      echo substr (strtoupper (str_replace (array ('&lt;', '&gt;'), array ('<', '>'), get_hook_name ($custom_hook ['index']))) . " HOOK:                   ", 0, 25), implode (", ", $ai_db_options_extract [$custom_hook ['action'] . CUSTOM_HOOK_BLOCKS][$ai_wp_data [AI_WP_PAGE_TYPE]]), "\n";
  }
  if (isset ($ai_db_options_extract [HTML_ELEMENT_HOOK_BLOCKS][$ai_wp_data [AI_WP_PAGE_TYPE]]) && count ($ai_db_options_extract [HTML_ELEMENT_HOOK_BLOCKS][$ai_wp_data [AI_WP_PAGE_TYPE]]))
    echo "HTML ELEMENT:            ", implode (", ", $ai_db_options_extract [HTML_ELEMENT_HOOK_BLOCKS][$ai_wp_data [AI_WP_PAGE_TYPE]]), "\n";

  if ($write_processing_log) {
    echo "\nTIME  EVENT\n";
    echo "======================================\n";

    foreach ($ai_processing_log as $log_line) {
      echo $log_line, "\n";
    }

    sort ($block_insertion_log);
    echo "\nINSERTION SUMMARY\n";
    echo "======================================\n";
    foreach ($block_insertion_log as $log_line) {
      echo substr ($log_line, 3), "\n";
    }
    echo "\n\n";


    echo "SERVER_ADDR:             ", isset ($_SERVER ['SERVER_ADDR']) ? $_SERVER ['SERVER_ADDR'] : '', "\n";
    echo "HTTP_CF_CONNECTING_IP:   ", isset ($_SERVER ['HTTP_CF_CONNECTING_IP']) ? $_SERVER ['HTTP_CF_CONNECTING_IP'] : '', "\n";
    echo "HTTP_CLIENT_IP:          ", isset ($_SERVER ['HTTP_CLIENT_IP']) ? $_SERVER ['HTTP_CLIENT_IP'] : '', "\n";
    echo "HTTP_X_FORWARDED_FOR:    ", isset ($_SERVER ['HTTP_X_FORWARDED_FOR']) ? $_SERVER ['HTTP_X_FORWARDED_FOR'] : '', "\n";
    echo "HTTP_X_FORWARDED:        ", isset ($_SERVER ['HTTP_X_FORWARDED']) ? $_SERVER ['HTTP_X_FORWARDED'] : '', "\n";
    echo "HTTP_X_CLUSTER_CLIENT_IP:", isset ($_SERVER ['HTTP_X_CLUSTER_CLIENT_IP']) ? $_SERVER ['HTTP_X_CLUSTER_CLIENT_IP'] : '', "\n";
    echo "HTTP_FORWARDED_FOR:      ", isset ($_SERVER ['HTTP_FORWARDED_FOR']) ? $_SERVER ['HTTP_FORWARDED_FOR'] : '', "\n";
    echo "HTTP_FORWARDED:          ", isset ($_SERVER ['HTTP_FORWARDED']) ? $_SERVER ['HTTP_FORWARDED'] : '', "\n";
    echo "REMOTE_ADDR:             ", isset ($_SERVER ['REMOTE_ADDR']) ? $_SERVER ['REMOTE_ADDR'] : '', "\n";

    echo "\n";

    echo "PHP:                     ", phpversion(), "\n";
    echo "mbstring:                ", $ai_wp_data [AI_MBSTRING_LOADED] ? 'LOADED' : 'NO', "\n";
    echo "Default charset:         ", ini_get ("default_charset"), "\n";
    echo "Memory Limit:            ", ini_get ('memory_limit'), "\n";
    echo "Upload Max Filesize:     ", ini_get ('upload_max_filesize'), "\n";
    echo "Post Max Size:           ", ini_get ('post_max_size'), "\n";
    echo "Max Execution Time:      ", ini_get ('max_execution_time'), "\n";
    echo "Max Input Vars:          ", ini_get ('max_input_vars'), "\n";
    echo "Display Errors:          ", ini_get ('display_errors'), "\n";
    echo "cURL:                    ", function_exists ('curl_version') ? 'ENABLED' : 'DISABLED', "\n";
    echo "fsockopen:               ", function_exists ('fsockopen') ? 'ENABLED' : 'DISABLED', "\n";
    echo "DOMDocument:             ", class_exists ('DOMDocument') ? 'YES' : 'NO', "\n";
    echo "\n\n";

    global $wp_version;
    echo "Wordpress:               ", $wp_version, "\n";
    $current_theme = wp_get_theme();

    echo "Current Theme:           ", $current_theme->get ('Name') . " " . $current_theme->get ('Version'), "\n";
    echo "\n";
    echo "A INSTALLED PLUGINS\n";
    echo "======================================\n";

    if ( ! function_exists( 'get_plugins' ) ) {
      require_once ABSPATH . 'wp-admin/includes/plugin.php';
    }
    $all_plugins = get_plugins();
    $active_plugins = get_option ('active_plugins');
    $active_sitewide_plugins = is_multisite () ? get_site_option ('active_sitewide_plugins') : false;

    foreach ($all_plugins as $plugin_path => $plugin) {
      $multisite_status = '  ';
      if ($active_sitewide_plugins !== false) {
        $multisite_status = array_key_exists  ($plugin_path, $active_sitewide_plugins) ? '# ' : '  ';
      }
      echo in_array ($plugin_path, $active_plugins) ? '* ' : $multisite_status, html_entity_decode ($plugin ["Name"]), ' ', $plugin ["Version"], "\n";
    }
  }


}

function ai_shutdown_hook () {
  global $ai_wp_data;

  if (function_exists ('ai_system_output')) ai_system_output ();

  if (($ai_wp_data [AI_WP_DEBUGGING] & AI_DEBUG_PROCESSING) != 0 && (get_remote_debugging () || ($ai_wp_data [AI_WP_USER] & AI_USER_LOGGED_IN) != 0)) {
    if ($ai_wp_data [AI_WP_PAGE_TYPE] == AI_PT_HOMEPAGE ||
        $ai_wp_data [AI_WP_PAGE_TYPE] == AI_PT_STATIC ||
        $ai_wp_data [AI_WP_PAGE_TYPE] == AI_PT_POST ||
        $ai_wp_data [AI_WP_PAGE_TYPE] == AI_PT_CATEGORY ||
        $ai_wp_data [AI_WP_PAGE_TYPE] == AI_PT_SEARCH ||
        $ai_wp_data [AI_WP_PAGE_TYPE] == AI_PT_ARCHIVE ||
        $ai_wp_data [AI_WP_PAGE_TYPE] == AI_PT_404 ||
        $ai_wp_data [AI_WP_PAGE_TYPE] == AI_PT_NONE ||
        $ai_wp_data [AI_WP_PAGE_TYPE] == AI_PT_ANY) {
      echo "\n<!--\n\n";
      ai_write_debug_info (true);
      echo "\n-->\n";
    }
  }
}

function ai_check_multisite_options (&$multisite_options) {
  if (!isset ($multisite_options ['MULTISITE_SETTINGS_PAGE']))      $multisite_options ['MULTISITE_SETTINGS_PAGE']      = DEFAULT_MULTISITE_SETTINGS_PAGE;
  if (!isset ($multisite_options ['MULTISITE_WIDGETS']))            $multisite_options ['MULTISITE_WIDGETS']            = DEFAULT_MULTISITE_WIDGETS;
  if (!isset ($multisite_options ['MULTISITE_PHP_PROCESSING']))     $multisite_options ['MULTISITE_PHP_PROCESSING']     = DEFAULT_MULTISITE_PHP_PROCESSING;
  if (!isset ($multisite_options ['MULTISITE_EXCEPTIONS']))         $multisite_options ['MULTISITE_EXCEPTIONS']         = DEFAULT_MULTISITE_EXCEPTIONS;
  if (!isset ($multisite_options ['MULTISITE_MAIN_FOR_ALL_BLOGS'])) $multisite_options ['MULTISITE_MAIN_FOR_ALL_BLOGS'] = DEFAULT_MULTISITE_MAIN_FOR_ALL_BLOGS;

  if (function_exists ('ai_check_multisite_options_2')) ai_check_multisite_options_2 ($multisite_options);
}

function ai_check_limits ($value, $min, $max, $default) {
  if (!is_numeric ($value)) {
    $value = $default;
  }
  $value = intval ($value);
  if ($value < $min) {
    $value = $min;
  }
  if ($value > $max) {
    $value = $max;
  }
  return $value;
}

function ai_check_plugin_options ($plugin_options = array ()) {
  global $version_string;

  $plugin_options ['VERSION'] = $version_string;

  if (!isset ($plugin_options ['SYNTAX_HIGHLIGHTER_THEME']))      $plugin_options ['SYNTAX_HIGHLIGHTER_THEME']      = DEFAULT_SYNTAX_HIGHLIGHTER_THEME;

  if (!isset ($plugin_options ['BLOCK_CLASS_NAME']))              $plugin_options ['BLOCK_CLASS_NAME']              = DEFAULT_BLOCK_CLASS_NAME;
  if (!isset ($plugin_options ['BLOCK_CLASS']))                   $plugin_options ['BLOCK_CLASS']                   = DEFAULT_BLOCK_CLASS;
  if (!isset ($plugin_options ['BLOCK_NUMBER_CLASS']))            $plugin_options ['BLOCK_NUMBER_CLASS']            = DEFAULT_BLOCK_NUMBER_CLASS;
  if (!isset ($plugin_options ['INLINE_STYLES']))                 $plugin_options ['INLINE_STYLES']                 = DEFAULT_INLINE_STYLES;

  if (!isset ($plugin_options ['MINIMUM_USER_ROLE']))             $plugin_options ['MINIMUM_USER_ROLE']             = DEFAULT_MINIMUM_USER_ROLE;

  if (!isset ($plugin_options ['STICKY_WIDGET_MODE']))            $plugin_options ['STICKY_WIDGET_MODE']            = DEFAULT_STICKY_WIDGET_MODE;

  if (!isset ($plugin_options ['STICKY_WIDGET_MARGIN']))          $plugin_options ['STICKY_WIDGET_MARGIN']          = DEFAULT_STICKY_WIDGET_MARGIN;
  $plugin_options ['STICKY_WIDGET_MARGIN'] =                      ai_check_limits ($plugin_options ['STICKY_WIDGET_MARGIN'], 0, 999, DEFAULT_STICKY_WIDGET_MARGIN);

  if (!isset ($plugin_options ['LAZY_LOADING_OFFSET']))           $plugin_options ['LAZY_LOADING_OFFSET']           = DEFAULT_LAZY_LOADING_OFFSET;
  $plugin_options ['LAZY_LOADING_OFFSET'] =                       ai_check_limits ($plugin_options ['LAZY_LOADING_OFFSET'], 0, 9999, DEFAULT_LAZY_LOADING_OFFSET);

  if (!isset ($plugin_options ['MAX_PAGE_BLOCKS']))               $plugin_options ['MAX_PAGE_BLOCKS']               = DEFAULT_MAX_PAGE_BLOCKS;
  $plugin_options ['MAX_PAGE_BLOCKS'] =                           ai_check_limits ($plugin_options ['MAX_PAGE_BLOCKS'], 0, 9999, DEFAULT_MAX_PAGE_BLOCKS);

  if (!isset ($plugin_options ['PLUGIN_PRIORITY']))               $plugin_options ['PLUGIN_PRIORITY']               = DEFAULT_PLUGIN_PRIORITY;
  $plugin_options ['PLUGIN_PRIORITY'] =                           ai_check_limits ($plugin_options ['PLUGIN_PRIORITY'], 0, 999999, DEFAULT_PLUGIN_PRIORITY);

  if (!isset ($plugin_options ['DYNAMIC_BLOCKS']))                $plugin_options ['DYNAMIC_BLOCKS']                = DEFAULT_DYNAMIC_BLOCKS;
  if (!isset ($plugin_options ['PARAGRAPH_COUNTING_FUNCTIONS']))  $plugin_options ['PARAGRAPH_COUNTING_FUNCTIONS']  = DEFAULT_PARAGRAPH_COUNTING_FUNCTIONS;
  if (!isset ($plugin_options ['OUTPUT_BUFFERING']))              $plugin_options ['OUTPUT_BUFFERING']              = DEFAULT_OUTPUT_BUFFERING;
  if (!isset ($plugin_options ['DISABLE_CACHING']))               $plugin_options ['DISABLE_CACHING']               = DEFAULT_DISABLE_CACHING;
  if (!isset ($plugin_options ['NO_PARAGRAPH_COUNTING_INSIDE']))  $plugin_options ['NO_PARAGRAPH_COUNTING_INSIDE']  = DEFAULT_NO_PARAGRAPH_COUNTING_INSIDE;
  if (!isset ($plugin_options ['AD_LABEL']))                      $plugin_options ['AD_LABEL']                      = DEFAULT_AD_TITLE;
  if (!isset ($plugin_options ['MAIN_CONTENT_ELEMENT']))          $plugin_options ['MAIN_CONTENT_ELEMENT']          = DEFAULT_MAIN_CONTENT_ELEMENT;
  if (!isset ($plugin_options ['ADB_ACTION']))                    $plugin_options ['ADB_ACTION']                    = AI_DEFAULT_ADB_ACTION;
  if (!isset ($plugin_options ['ADB_NO_ACTION']))                 $plugin_options ['ADB_NO_ACTION']                 = AI_DEFAULT_ADB_NO_ACTION;
  if (!isset ($plugin_options ['ADB_DELAY_ACTION']))              $plugin_options ['ADB_DELAY_ACTION']              = '';
  if (!isset ($plugin_options ['ADB_NO_ACTION_PERIOD']))          $plugin_options ['ADB_NO_ACTION_PERIOD']          = AI_DEFAULT_ADB_NO_ACTION_PERIOD;
  if (!isset ($plugin_options ['ADB_SELECTORS']))                 $plugin_options ['ADB_SELECTORS']                 = '';
  if (!isset ($plugin_options ['ADB_REDIRECTION_PAGE']))          $plugin_options ['ADB_REDIRECTION_PAGE']          = AI_DEFAULT_ADB_REDIRECTION_PAGE;
  if (!isset ($plugin_options ['ADB_CUSTOM_REDIRECTION_URL']))    $plugin_options ['ADB_CUSTOM_REDIRECTION_URL']    = '';
  if (!isset ($plugin_options ['ADB_OVERLAY_CSS']))               $plugin_options ['ADB_OVERLAY_CSS']               = AI_DEFAULT_ADB_OVERLAY_CSS;
  if (!isset ($plugin_options ['ADB_MESSAGE_CSS']))               $plugin_options ['ADB_MESSAGE_CSS']               = AI_DEFAULT_ADB_MESSAGE_CSS;
  if (!isset ($plugin_options ['ADB_UNDISMISSIBLE_MESSAGE']))     $plugin_options ['ADB_UNDISMISSIBLE_MESSAGE']     = AI_DEFAULT_ADB_UNDISMISSIBLE_MESSAGE;
  if (!isset ($plugin_options ['ADB_NO_UNDISMISSIBLE_MESSAGE']))  $plugin_options ['ADB_NO_UNDISMISSIBLE_MESSAGE']  = AI_DEFAULT_ADB_NO_UNDISMISSIBLE_MESSAGE;
  if (!isset ($plugin_options ['ADMIN_TOOLBAR_DEBUGGING']))       $plugin_options ['ADMIN_TOOLBAR_DEBUGGING']       = DEFAULT_ADMIN_TOOLBAR_DEBUGGING;
  if (!isset ($plugin_options ['ADMIN_TOOLBAR_MOBILE']))          $plugin_options ['ADMIN_TOOLBAR_MOBILE']          = DEFAULT_ADMIN_TOOLBAR_MOBILE;
  if (!isset ($plugin_options ['FORCE_ADMIN_TOOLBAR']))           $plugin_options ['FORCE_ADMIN_TOOLBAR']           = DEFAULT_FORCE_ADMIN_TOOLBAR;
  if (!isset ($plugin_options ['REMOTE_DEBUGGING']))              $plugin_options ['REMOTE_DEBUGGING']              = DEFAULT_REMOTE_DEBUGGING;
  if (!isset ($plugin_options ['DISABLE_TRANSLATION']))           $plugin_options ['DISABLE_TRANSLATION']           = DEFAULT_DISABLE_TRANSLATION;
  if (!isset ($plugin_options ['BACKEND_JS_DEBUGGING']))          $plugin_options ['BACKEND_JS_DEBUGGING']          = DEFAULT_BACKEND_JS_DEBUGGING;
  if (!isset ($plugin_options ['FRONTEND_JS_DEBUGGING']))         $plugin_options ['FRONTEND_JS_DEBUGGING']         = DEFAULT_FRONTEND_JS_DEBUGGING;
  if (!isset ($plugin_options ['DISABLE_BLOCK_INSERTIONS']))      $plugin_options ['DISABLE_BLOCK_INSERTIONS']      = DEFAULT_DISABLE_BLOCK_INSERTIONS;
  if (!isset ($plugin_options ['DISABLE_PHP_PROCESSING']))        $plugin_options ['DISABLE_PHP_PROCESSING']        = DEFAULT_DISABLE_PHP_PROCESSING;
  if (!isset ($plugin_options ['DISABLE_CSS_CODE']))              $plugin_options ['DISABLE_CSS_CODE']              = DEFAULT_DISABLE_CSS_CODE;
  if (!isset ($plugin_options ['DISABLE_JS_CODE']))               $plugin_options ['DISABLE_JS_CODE']               = DEFAULT_DISABLE_JS_CODE;
  if (!isset ($plugin_options ['DISABLE_HEADER_CODE']))           $plugin_options ['DISABLE_HEADER_CODE']           = DEFAULT_DISABLE_HEADER_CODE;
  if (!isset ($plugin_options ['DISABLE_FOOTER_CODE']))           $plugin_options ['DISABLE_FOOTER_CODE']           = DEFAULT_DISABLE_FOOTER_CODE;

  for ($viewport = 1; $viewport <= 6; $viewport ++) {
    $viewport_name_option_name   = 'VIEWPORT_NAME_'  . $viewport;
    $viewport_width_option_name  = 'VIEWPORT_WIDTH_' . $viewport;

    if (!isset ($plugin_options [$viewport_name_option_name]))     $plugin_options [$viewport_name_option_name] =
      defined ("DEFAULT_VIEWPORT_NAME_" . $viewport) ? constant ("DEFAULT_VIEWPORT_NAME_" . $viewport) : "";

    if ($viewport == 1 && $plugin_options [$viewport_name_option_name] == '')
      $plugin_options [$viewport_name_option_name] = constant ("DEFAULT_VIEWPORT_NAME_1");

    if ($plugin_options [$viewport_name_option_name] != '') {
      if (!isset ($plugin_options [$viewport_width_option_name]))  $plugin_options [$viewport_width_option_name] =
        defined ("DEFAULT_VIEWPORT_WIDTH_" . $viewport) ? constant ("DEFAULT_VIEWPORT_WIDTH_" . $viewport) : 0;

      $viewport_width = $plugin_options [$viewport_width_option_name];

      if ($viewport > 1) {
        $previous_viewport_option_width = $plugin_options ['VIEWPORT_WIDTH_' . ($viewport - 1)];
      }

      if (!is_numeric ($viewport_width)) {
        if ($viewport == 1)
          $viewport_width = constant ("DEFAULT_VIEWPORT_WIDTH_1"); else
            $viewport_width = $previous_viewport_option_width - 1;

      }
      if ($viewport_width > 9999) {
        $viewport_width = 9999;
      }

      if ($viewport > 1) {
        if ($viewport_width >= $previous_viewport_option_width)
          $viewport_width = $previous_viewport_option_width - 1;
      }

      $viewport_width = intval ($viewport_width);
      if ($viewport_width < 0) {
        $viewport_width = 0;
      }

      $plugin_options [$viewport_width_option_name] = $viewport_width;
    } else $plugin_options [$viewport_width_option_name] = '';
  }

  for ($hook = 1; $hook <= 8; $hook ++) {
    $hook_enabled_settins_name  = 'HOOK_ENABLED_' . $hook;
    $hook_name_settins_name     = 'HOOK_NAME_' . $hook;
    $hook_action_settins_name   = 'HOOK_ACTION_' . $hook;
    $hook_priority_settins_name = 'HOOK_PRIORITY_' . $hook;

    if (!isset ($plugin_options [$hook_enabled_settins_name]))  $plugin_options [$hook_enabled_settins_name] = AI_DISABLED;
    if (!isset ($plugin_options [$hook_name_settins_name]))     $plugin_options [$hook_name_settins_name] = '';
    if (!isset ($plugin_options [$hook_action_settins_name]))   $plugin_options [$hook_action_settins_name] = '';
    if (!isset ($plugin_options [$hook_priority_settins_name]) || !is_numeric ($plugin_options [$hook_priority_settins_name])) $plugin_options [$hook_priority_settins_name] = DEFAULT_CUSTOM_HOOK_PRIORITY;
  }

  if (function_exists ('ai_check_options')) ai_check_options ($plugin_options);

  return ($plugin_options);
}

function option_stripslashes (&$options) {
  $options = wp_unslash ($options);

//  if (is_array ($options)) {
//    foreach ($options as $key => $option) {
//      option_stripslashes ($options [$key]);
//    }
//  } else if (is_string ($options)) $options = stripslashes ($options);
}

// Deprecated
function ai_get_option ($option_name) {
  $options = get_option ($option_name);
  option_stripslashes ($options);
  return ($options);
}

function ai_load_options () {
  global $ai_db_options, $ai_db_options_multisite, $ai_wp_data;

  if (($ai_wp_data [AI_WP_DEBUGGING] & AI_DEBUG_PROCESSING) != 0) ai_log ("LOAD OPTIONS START");

  if (is_multisite()) {
    $ai_db_options_multisite = get_site_option (AI_OPTION_NAME);
    option_stripslashes ($ai_db_options_multisite);
  }

  if (is_multisite() && multisite_main_for_all_blogs () && defined ('BLOG_ID_CURRENT_SITE')) {
    $ai_db_options = get_blog_option (BLOG_ID_CURRENT_SITE, AI_OPTION_NAME);
    option_stripslashes ($ai_db_options);
  } else {
      $ai_db_options = get_option (AI_OPTION_NAME);
      option_stripslashes ($ai_db_options);
    }

  if (($ai_wp_data [AI_WP_DEBUGGING] & AI_DEBUG_PROCESSING) != 0) ai_log ("LOAD OPTIONS END");
}

function get_viewport_css () {
  global $ai_db_options;

  if (!isset ($ai_db_options [AI_OPTION_GLOBAL]['VIEWPORT_CSS'])) $ai_db_options [AI_OPTION_GLOBAL]['VIEWPORT_CSS'] = generate_viewport_css ();

  return ($ai_db_options [AI_OPTION_GLOBAL]['VIEWPORT_CSS']);
}

function get_alignment_css () {
  global $ai_db_options;

  if (!isset ($ai_db_options [AI_OPTION_GLOBAL]['ALIGNMENT_CSS']) ||
    isset ($ai_db_options [AI_OPTION_GLOBAL]['VERSION']) && $ai_db_options [AI_OPTION_GLOBAL]['VERSION'] < '020211'
  ) $ai_db_options [AI_OPTION_GLOBAL]['ALIGNMENT_CSS'] = generate_alignment_css ();

  return (str_replace ('&#039;', "'", $ai_db_options [AI_OPTION_GLOBAL]['ALIGNMENT_CSS']));
}

function get_syntax_highlighter_theme () {
  global $ai_db_options;

  if (!isset ($ai_db_options [AI_OPTION_GLOBAL]['SYNTAX_HIGHLIGHTER_THEME'])) $ai_db_options [AI_OPTION_GLOBAL]['SYNTAX_HIGHLIGHTER_THEME'] = DEFAULT_SYNTAX_HIGHLIGHTER_THEME;

  return ($ai_db_options [AI_OPTION_GLOBAL]['SYNTAX_HIGHLIGHTER_THEME']);
}

function get_block_class_name ($default_if_empty = false) {
  global $ai_db_options;

  if (!isset ($ai_db_options [AI_OPTION_GLOBAL]['BLOCK_CLASS_NAME'])) $ai_db_options [AI_OPTION_GLOBAL]['BLOCK_CLASS_NAME'] = DEFAULT_BLOCK_CLASS_NAME;

  if ($default_if_empty && $ai_db_options [AI_OPTION_GLOBAL]['BLOCK_CLASS_NAME'] == '') return (DEFAULT_BLOCK_CLASS_NAME);

  return ($ai_db_options [AI_OPTION_GLOBAL]['BLOCK_CLASS_NAME']);
}

function get_block_class () {
  global $ai_db_options;

  if (!isset ($ai_db_options [AI_OPTION_GLOBAL]['BLOCK_CLASS'])) $ai_db_options [AI_OPTION_GLOBAL]['BLOCK_CLASS'] = DEFAULT_BLOCK_CLASS;

  return ($ai_db_options [AI_OPTION_GLOBAL]['BLOCK_CLASS']);
}

function get_block_number_class () {
  global $ai_db_options;

  if (!isset ($ai_db_options [AI_OPTION_GLOBAL]['BLOCK_NUMBER_CLASS'])) $ai_db_options [AI_OPTION_GLOBAL]['BLOCK_NUMBER_CLASS'] = DEFAULT_BLOCK_NUMBER_CLASS;

  return ($ai_db_options [AI_OPTION_GLOBAL]['BLOCK_NUMBER_CLASS']);
}

function get_inline_styles () {
  global $ai_db_options;

  if (!isset ($ai_db_options [AI_OPTION_GLOBAL]['INLINE_STYLES'])) $ai_db_options [AI_OPTION_GLOBAL]['INLINE_STYLES'] = DEFAULT_INLINE_STYLES;

  return ($ai_db_options [AI_OPTION_GLOBAL]['INLINE_STYLES']);
}

function get_minimum_user_role () {
  global $ai_db_options;

  if (!isset ($ai_db_options [AI_OPTION_GLOBAL]['MINIMUM_USER_ROLE'])) $ai_db_options [AI_OPTION_GLOBAL]['MINIMUM_USER_ROLE'] = DEFAULT_MINIMUM_USER_ROLE;

  return ($ai_db_options [AI_OPTION_GLOBAL]['MINIMUM_USER_ROLE']);
}

function get_sticky_widget_mode () {
  global $ai_db_options;

  if (!isset ($ai_db_options [AI_OPTION_GLOBAL]['STICKY_WIDGET_MODE'])) $ai_db_options [AI_OPTION_GLOBAL]['STICKY_WIDGET_MODE'] = DEFAULT_STICKY_WIDGET_MODE;

  return ($ai_db_options [AI_OPTION_GLOBAL]['STICKY_WIDGET_MODE']);
}

function get_sticky_widget_margin () {
  global $ai_db_options;

  if (!isset ($ai_db_options [AI_OPTION_GLOBAL]['STICKY_WIDGET_MARGIN'])) $ai_db_options [AI_OPTION_GLOBAL]['STICKY_WIDGET_MARGIN'] = DEFAULT_STICKY_WIDGET_MARGIN;

  return ($ai_db_options [AI_OPTION_GLOBAL]['STICKY_WIDGET_MARGIN']);
}

function get_lazy_loading_offset () {
  global $ai_db_options;

  if (!isset ($ai_db_options [AI_OPTION_GLOBAL]['LAZY_LOADING_OFFSET'])) $ai_db_options [AI_OPTION_GLOBAL]['LAZY_LOADING_OFFSET'] = DEFAULT_LAZY_LOADING_OFFSET;

  return ($ai_db_options [AI_OPTION_GLOBAL]['LAZY_LOADING_OFFSET']);
}

function get_max_page_blocks () {
  global $ai_db_options;

  if (!isset ($ai_db_options [AI_OPTION_GLOBAL]['MAX_PAGE_BLOCKS'])) $ai_db_options [AI_OPTION_GLOBAL]['MAX_PAGE_BLOCKS'] = DEFAULT_MAX_PAGE_BLOCKS;

  return ($ai_db_options [AI_OPTION_GLOBAL]['MAX_PAGE_BLOCKS']);
}

function get_plugin_priority () {
  global $ai_db_options;

  if (!isset ($ai_db_options [AI_OPTION_GLOBAL]['PLUGIN_PRIORITY'])) $ai_db_options [AI_OPTION_GLOBAL]['PLUGIN_PRIORITY'] = DEFAULT_PLUGIN_PRIORITY;

  return ($ai_db_options [AI_OPTION_GLOBAL]['PLUGIN_PRIORITY']);
}

function get_dynamic_blocks(){
  global $ai_db_options, $ai_wp_data;

  if (!isset ($ai_db_options [AI_OPTION_GLOBAL]['DYNAMIC_BLOCKS'])) $ai_db_options [AI_OPTION_GLOBAL]['DYNAMIC_BLOCKS'] = DEFAULT_DYNAMIC_BLOCKS;

  return ($ai_db_options [AI_OPTION_GLOBAL]['DYNAMIC_BLOCKS']);
}

function get_paragraph_counting_functions(){
  global $ai_db_options;

  if (!isset ($ai_db_options [AI_OPTION_GLOBAL]['PARAGRAPH_COUNTING_FUNCTIONS'])) $ai_db_options [AI_OPTION_GLOBAL]['PARAGRAPH_COUNTING_FUNCTIONS'] = DEFAULT_PARAGRAPH_COUNTING_FUNCTIONS;

  return ($ai_db_options [AI_OPTION_GLOBAL]['PARAGRAPH_COUNTING_FUNCTIONS']);
}

function get_output_buffering(){
  global $ai_db_options;

  if (!isset ($ai_db_options [AI_OPTION_GLOBAL]['OUTPUT_BUFFERING'])) $ai_db_options [AI_OPTION_GLOBAL]['OUTPUT_BUFFERING'] = DEFAULT_OUTPUT_BUFFERING;

  return ($ai_db_options [AI_OPTION_GLOBAL]['OUTPUT_BUFFERING']);
}

function get_disable_caching (){
  global $ai_db_options;

  if (!isset ($ai_db_options [AI_OPTION_GLOBAL]['DISABLE_CACHING'])) $ai_db_options [AI_OPTION_GLOBAL]['DISABLE_CACHING'] = DEFAULT_DISABLE_CACHING;

  return ($ai_db_options [AI_OPTION_GLOBAL]['DISABLE_CACHING']);
}

function get_no_paragraph_counting_inside () {
  global $ai_db_options;

  if (!isset ($ai_db_options [AI_OPTION_GLOBAL]['NO_PARAGRAPH_COUNTING_INSIDE'])) $ai_db_options [AI_OPTION_GLOBAL]['NO_PARAGRAPH_COUNTING_INSIDE'] = DEFAULT_NO_PARAGRAPH_COUNTING_INSIDE;

  return (str_replace (array ('<', '>'), '', $ai_db_options [AI_OPTION_GLOBAL]['NO_PARAGRAPH_COUNTING_INSIDE']));
}

function get_ad_label ($decode = false) {
  global $ai_db_options;

  if (!isset ($ai_db_options [AI_OPTION_GLOBAL]['AD_LABEL'])) $ai_db_options [AI_OPTION_GLOBAL]['AD_LABEL'] = DEFAULT_AD_TITLE;

  if ($decode) return (html_entity_decode ($ai_db_options [AI_OPTION_GLOBAL]['AD_LABEL']));

  return ($ai_db_options [AI_OPTION_GLOBAL]['AD_LABEL']);
}

function get_main_content_element () {
  global $ai_db_options;

  if (!isset ($ai_db_options [AI_OPTION_GLOBAL]['MAIN_CONTENT_ELEMENT'])) $ai_db_options [AI_OPTION_GLOBAL]['MAIN_CONTENT_ELEMENT'] = DEFAULT_MAIN_CONTENT_ELEMENT;

  return ($ai_db_options [AI_OPTION_GLOBAL]['MAIN_CONTENT_ELEMENT']);
}

function get_force_admin_toolbar () {
  global $ai_db_options;

  if (!isset ($ai_db_options [AI_OPTION_GLOBAL]['FORCE_ADMIN_TOOLBAR'])) $ai_db_options [AI_OPTION_GLOBAL]['FORCE_ADMIN_TOOLBAR'] = DEFAULT_FORCE_ADMIN_TOOLBAR;

  return ($ai_db_options [AI_OPTION_GLOBAL]['FORCE_ADMIN_TOOLBAR']);
}

function get_admin_toolbar_debugging () {
  global $ai_db_options;

  if (!isset ($ai_db_options [AI_OPTION_GLOBAL]['ADMIN_TOOLBAR_DEBUGGING'])) $ai_db_options [AI_OPTION_GLOBAL]['ADMIN_TOOLBAR_DEBUGGING'] = DEFAULT_ADMIN_TOOLBAR_DEBUGGING;

  return ($ai_db_options [AI_OPTION_GLOBAL]['ADMIN_TOOLBAR_DEBUGGING']);
}

function get_admin_toolbar_mobile () {
  global $ai_db_options;

  if (!isset ($ai_db_options [AI_OPTION_GLOBAL]['ADMIN_TOOLBAR_MOBILE'])) $ai_db_options [AI_OPTION_GLOBAL]['ADMIN_TOOLBAR_MOBILE'] = DEFAULT_ADMIN_TOOLBAR_MOBILE;

  return ($ai_db_options [AI_OPTION_GLOBAL]['ADMIN_TOOLBAR_MOBILE']);
}

function get_remote_debugging () {
  global $ai_db_options;

  if (!isset ($ai_db_options [AI_OPTION_GLOBAL]['REMOTE_DEBUGGING'])) $ai_db_options [AI_OPTION_GLOBAL]['REMOTE_DEBUGGING'] = DEFAULT_REMOTE_DEBUGGING;

  return ($ai_db_options [AI_OPTION_GLOBAL]['REMOTE_DEBUGGING']);
}

function get_disable_translation () {
  global $ai_db_options;

  if (!isset ($ai_db_options [AI_OPTION_GLOBAL]['DISABLE_TRANSLATION'])) $ai_db_options [AI_OPTION_GLOBAL]['DISABLE_TRANSLATION'] = DEFAULT_DISABLE_TRANSLATION;

  return ($ai_db_options [AI_OPTION_GLOBAL]['DISABLE_TRANSLATION']);
}

function get_backend_javascript_debugging () {
  global $ai_db_options;

  if (!isset ($ai_db_options [AI_OPTION_GLOBAL]['BACKEND_JS_DEBUGGING'])) $ai_db_options [AI_OPTION_GLOBAL]['BACKEND_JS_DEBUGGING'] = DEFAULT_BACKEND_JS_DEBUGGING;

  return ($ai_db_options [AI_OPTION_GLOBAL]['BACKEND_JS_DEBUGGING']);
}

function get_frontend_javascript_debugging () {
  global $ai_db_options;

  if (!isset ($ai_db_options [AI_OPTION_GLOBAL]['FRONTEND_JS_DEBUGGING'])) $ai_db_options [AI_OPTION_GLOBAL]['FRONTEND_JS_DEBUGGING'] = DEFAULT_FRONTEND_JS_DEBUGGING;

  return ($ai_db_options [AI_OPTION_GLOBAL]['FRONTEND_JS_DEBUGGING']);
}

function get_disable_block_insertions () {
  global $ai_db_options;

  if (!isset ($ai_db_options [AI_OPTION_GLOBAL]['DISABLE_BLOCK_INSERTIONS'])) $ai_db_options [AI_OPTION_GLOBAL]['DISABLE_BLOCK_INSERTIONS'] = DEFAULT_DISABLE_BLOCK_INSERTIONS;

  return ($ai_db_options [AI_OPTION_GLOBAL]['DISABLE_BLOCK_INSERTIONS']);
}

function get_disable_php_processing () {
  global $ai_db_options;

  if (!isset ($ai_db_options [AI_OPTION_GLOBAL]['DISABLE_PHP_PROCESSING'])) $ai_db_options [AI_OPTION_GLOBAL]['DISABLE_PHP_PROCESSING'] = DEFAULT_DISABLE_PHP_PROCESSING;

  return ($ai_db_options [AI_OPTION_GLOBAL]['DISABLE_PHP_PROCESSING']);
}

function get_disable_css_code () {
  global $ai_db_options;

  if (!isset ($ai_db_options [AI_OPTION_GLOBAL]['DISABLE_CSS_CODE'])) $ai_db_options [AI_OPTION_GLOBAL]['DISABLE_CSS_CODE'] = DEFAULT_DISABLE_CSS_CODE;

  return ($ai_db_options [AI_OPTION_GLOBAL]['DISABLE_CSS_CODE']);
}

function get_disable_js_code () {
  global $ai_db_options;

  if (!isset ($ai_db_options [AI_OPTION_GLOBAL]['DISABLE_JS_CODE'])) $ai_db_options [AI_OPTION_GLOBAL]['DISABLE_JS_CODE'] = DEFAULT_DISABLE_JS_CODE;

  return ($ai_db_options [AI_OPTION_GLOBAL]['DISABLE_JS_CODE']);
}

function get_disable_header_code () {
  global $ai_db_options;

  if (!isset ($ai_db_options [AI_OPTION_GLOBAL]['DISABLE_HEADER_CODE'])) $ai_db_options [AI_OPTION_GLOBAL]['DISABLE_HEADER_CODE'] = DEFAULT_DISABLE_HEADER_CODE;

  return ($ai_db_options [AI_OPTION_GLOBAL]['DISABLE_HEADER_CODE']);
}

function get_disable_footer_code () {
  global $ai_db_options;

  if (!isset ($ai_db_options [AI_OPTION_GLOBAL]['DISABLE_FOOTER_CODE'])) $ai_db_options [AI_OPTION_GLOBAL]['DISABLE_FOOTER_CODE'] = DEFAULT_DISABLE_FOOTER_CODE;

  return ($ai_db_options [AI_OPTION_GLOBAL]['DISABLE_FOOTER_CODE']);
}

function get_viewport_name ($viewport_number) {
  global $ai_db_options;

  $viewport_settins_name = 'VIEWPORT_NAME_' . $viewport_number;
  if (!isset ($ai_db_options [AI_OPTION_GLOBAL][$viewport_settins_name]))
    $ai_db_options [AI_OPTION_GLOBAL][$viewport_settins_name] = defined ("DEFAULT_VIEWPORT_NAME_" . $viewport_number) ? constant ("DEFAULT_VIEWPORT_NAME_" . $viewport_number) : "";

  return ($ai_db_options [AI_OPTION_GLOBAL][$viewport_settins_name]);
}

function get_viewport_width ($viewport_number) {
  global $ai_db_options;

  $viewport_settins_name = 'VIEWPORT_WIDTH_' . $viewport_number;
  if (!isset ($ai_db_options [AI_OPTION_GLOBAL][$viewport_settins_name]))
    $ai_db_options [AI_OPTION_GLOBAL][$viewport_settins_name] = defined ("DEFAULT_VIEWPORT_WIDTH_" . $viewport_number) ? constant ("DEFAULT_VIEWPORT_WIDTH_" . $viewport_number) : "";

  return ($ai_db_options [AI_OPTION_GLOBAL][$viewport_settins_name]);
}

function get_hook_enabled ($hook_number) {
  global $ai_db_options;

  $hook_settins_name = 'HOOK_ENABLED_' . $hook_number;
  if (!isset ($ai_db_options [AI_OPTION_GLOBAL][$hook_settins_name])) $ai_db_options [AI_OPTION_GLOBAL][$hook_settins_name] = AI_DISABLED;

  return ($ai_db_options [AI_OPTION_GLOBAL][$hook_settins_name]);
}

function get_hook_name ($hook_number) {
  global $ai_db_options;

  $hook_settins_name = 'HOOK_NAME_' . $hook_number;
  if (!isset ($ai_db_options [AI_OPTION_GLOBAL][$hook_settins_name])) $ai_db_options [AI_OPTION_GLOBAL][$hook_settins_name] = "";

  return ($ai_db_options [AI_OPTION_GLOBAL][$hook_settins_name]);
}

function get_hook_action ($hook_number) {
  global $ai_db_options;

  $hook_settins_name = 'HOOK_ACTION_' . $hook_number;
  if (!isset ($ai_db_options [AI_OPTION_GLOBAL][$hook_settins_name])) $ai_db_options [AI_OPTION_GLOBAL][$hook_settins_name] = "";

  return ($ai_db_options [AI_OPTION_GLOBAL][$hook_settins_name]);
}

function get_hook_priority ($hook_number) {
  global $ai_db_options;

  $hook_settins_name = 'HOOK_PRIORITY_' . $hook_number;
  if (!isset ($ai_db_options [AI_OPTION_GLOBAL][$hook_settins_name])) $ai_db_options [AI_OPTION_GLOBAL][$hook_settins_name] = DEFAULT_CUSTOM_HOOK_PRIORITY;

  return ($ai_db_options [AI_OPTION_GLOBAL][$hook_settins_name]);
}

function get_country_group_name ($group_number) {
  global $ai_db_options;

  $country_group_settins_name = 'COUNTRY_GROUP_NAME_' . $group_number;
  if (!isset ($ai_db_options [AI_OPTION_GLOBAL][$country_group_settins_name])) $ai_db_options [AI_OPTION_GLOBAL][$country_group_settins_name] = DEFAULT_COUNTRY_GROUP_NAME . ' ' . $group_number;

  return ($ai_db_options [AI_OPTION_GLOBAL][$country_group_settins_name]);
}

function get_group_country_list ($group_number) {
  global $ai_db_options;

  $group_countries_settins_name = 'GROUP_COUNTRIES_' . $group_number;
  if (!isset ($ai_db_options [AI_OPTION_GLOBAL][$group_countries_settins_name])) $ai_db_options [AI_OPTION_GLOBAL][$group_countries_settins_name] = '';

  return ($ai_db_options [AI_OPTION_GLOBAL][$group_countries_settins_name]);
}

function multisite_settings_page_enabled () {
  global $ai_db_options_multisite;

  if (is_multisite()) {
    if (!isset ($ai_db_options_multisite ['MULTISITE_SETTINGS_PAGE'])) $ai_db_options_multisite ['MULTISITE_SETTINGS_PAGE'] = DEFAULT_MULTISITE_SETTINGS_PAGE;
    if ($ai_db_options_multisite ['MULTISITE_SETTINGS_PAGE'] == '')    $ai_db_options_multisite ['MULTISITE_SETTINGS_PAGE'] = DEFAULT_MULTISITE_SETTINGS_PAGE;

    if (multisite_main_for_all_blogs ()) $ai_db_options_multisite ['MULTISITE_SETTINGS_PAGE'] = AI_DISABLED;

    return ($ai_db_options_multisite ['MULTISITE_SETTINGS_PAGE']);
  }

  return DEFAULT_MULTISITE_SETTINGS_PAGE;
}

function multisite_widgets_enabled () {
  global $ai_db_options_multisite;

  if (is_multisite()) {
    if (!isset ($ai_db_options_multisite ['MULTISITE_WIDGETS'])) $ai_db_options_multisite ['MULTISITE_WIDGETS'] = DEFAULT_MULTISITE_WIDGETS;
    if ($ai_db_options_multisite ['MULTISITE_WIDGETS'] == '')    $ai_db_options_multisite ['MULTISITE_WIDGETS'] = DEFAULT_MULTISITE_WIDGETS;

    return ($ai_db_options_multisite ['MULTISITE_WIDGETS']);
  }

  return DEFAULT_MULTISITE_WIDGETS;
}

function multisite_php_processing () {
  global $ai_db_options_multisite;

  if (is_multisite()) {
    if (!isset ($ai_db_options_multisite ['MULTISITE_PHP_PROCESSING'])) $ai_db_options_multisite ['MULTISITE_PHP_PROCESSING'] = DEFAULT_MULTISITE_PHP_PROCESSING;
    if ($ai_db_options_multisite ['MULTISITE_PHP_PROCESSING'] == '')    $ai_db_options_multisite ['MULTISITE_PHP_PROCESSING'] = DEFAULT_MULTISITE_PHP_PROCESSING;

    return ($ai_db_options_multisite ['MULTISITE_PHP_PROCESSING']);
  }

  return DEFAULT_MULTISITE_WIDGETS;
}

function multisite_exceptions_enabled () {
  global $ai_db_options_multisite;

  if (is_multisite()) {
    if (!isset ($ai_db_options_multisite ['MULTISITE_EXCEPTIONS'])) $ai_db_options_multisite ['MULTISITE_EXCEPTIONS'] = DEFAULT_MULTISITE_EXCEPTIONS;
    if ($ai_db_options_multisite ['MULTISITE_EXCEPTIONS'] == '')    $ai_db_options_multisite ['MULTISITE_EXCEPTIONS'] = DEFAULT_MULTISITE_EXCEPTIONS;

    return ($ai_db_options_multisite ['MULTISITE_EXCEPTIONS']);
  }

  return DEFAULT_MULTISITE_EXCEPTIONS;
}

function multisite_main_for_all_blogs () {
  global $ai_db_options_multisite;

  if (is_multisite()) {
    if (!isset ($ai_db_options_multisite ['MULTISITE_MAIN_FOR_ALL_BLOGS'])) $ai_db_options_multisite ['MULTISITE_MAIN_FOR_ALL_BLOGS'] = DEFAULT_MULTISITE_MAIN_FOR_ALL_BLOGS;
    if ($ai_db_options_multisite ['MULTISITE_MAIN_FOR_ALL_BLOGS'] == '')    $ai_db_options_multisite ['MULTISITE_MAIN_FOR_ALL_BLOGS'] = DEFAULT_MULTISITE_MAIN_FOR_ALL_BLOGS;

    return ($ai_db_options_multisite ['MULTISITE_MAIN_FOR_ALL_BLOGS']);
  }

  return DEFAULT_MULTISITE_MAIN_FOR_ALL_BLOGS;
}

function get_adb_action ($saved_value = false) {
  global $ai_db_options, $ai_wp_data;

  if (!$saved_value) {
    if ($ai_wp_data [AI_CODE_FOR_IFRAME]) return AI_ADB_ACTION_NONE;

    switch (get_adb_no_action ()) {
      case AI_ADB_NO_ACTION_LOGGED_IN:
        if (($ai_wp_data [AI_WP_USER] & AI_USER_LOGGED_IN) != 0) return AI_ADB_ACTION_NONE;
        break;
      case AI_ADB_NO_ACTION_ADMINISTRATORS:
        if (($ai_wp_data [AI_WP_USER] & AI_USER_ADMINISTRATOR) != 0) return AI_ADB_ACTION_NONE;
        break;
    }

    if (isset ($ai_wp_data [AI_ADB_SHORTCODE_ACTION])) return ($ai_wp_data [AI_ADB_SHORTCODE_ACTION]);
  }

  if (!isset ($ai_db_options [AI_OPTION_GLOBAL]['ADB_ACTION'])) $ai_db_options [AI_OPTION_GLOBAL]['ADB_ACTION'] = AI_DEFAULT_ADB_ACTION;

  return ($ai_db_options [AI_OPTION_GLOBAL]['ADB_ACTION']);
}

function get_adb_no_action ($saved_value = false) {
  global $ai_db_options, $ai_wp_data;

  if (!$saved_value) {
    if ($ai_wp_data [AI_CODE_FOR_IFRAME]) return AI_ADB_NO_ACTION_NONE;
  }

  if (!isset ($ai_db_options [AI_OPTION_GLOBAL]['ADB_NO_ACTION'])) $ai_db_options [AI_OPTION_GLOBAL]['ADB_NO_ACTION'] = AI_DEFAULT_ADB_NO_ACTION;

  return ($ai_db_options [AI_OPTION_GLOBAL]['ADB_NO_ACTION']);
}

function get_delay_action ($return_number = false) {
  global $ai_db_options;

  if (!isset ($ai_db_options [AI_OPTION_GLOBAL]['ADB_DELAY_ACTION'])) $ai_db_options [AI_OPTION_GLOBAL]['ADB_DELAY_ACTION'] = '';

  if ($return_number) {
    $value = trim ($ai_db_options [AI_OPTION_GLOBAL]['ADB_DELAY_ACTION']);
    if ($value == '') $value = 0;
    if (is_numeric ($value)) return $value; else return 0;
  }

  return ($ai_db_options [AI_OPTION_GLOBAL]['ADB_DELAY_ACTION']);
}

function get_no_action_period ($return_number = false) {
  global $ai_db_options;

  if (!isset ($ai_db_options [AI_OPTION_GLOBAL]['ADB_NO_ACTION_PERIOD'])) $ai_db_options [AI_OPTION_GLOBAL]['ADB_NO_ACTION_PERIOD'] = AI_DEFAULT_ADB_NO_ACTION_PERIOD;

  if ($return_number) {
    $value = trim ($ai_db_options [AI_OPTION_GLOBAL]['ADB_NO_ACTION_PERIOD']);
    if ($value == '') $value = 0;
    if (is_numeric ($value)) return $value; else return AI_DEFAULT_ADB_NO_ACTION_PERIOD;
  }

  return ($ai_db_options [AI_OPTION_GLOBAL]['ADB_NO_ACTION_PERIOD']);
}

function get_adb_selectors ($decode = false) {
  global $ai_db_options;

  if (!isset ($ai_db_options [AI_OPTION_GLOBAL]['ADB_SELECTORS'])) $ai_db_options [AI_OPTION_GLOBAL]['ADB_SELECTORS'] = '';

  if ($decode)
    return (html_entity_decode ($ai_db_options [AI_OPTION_GLOBAL]['ADB_SELECTORS'])); else
      return ($ai_db_options [AI_OPTION_GLOBAL]['ADB_SELECTORS']);
}

function get_redirection_page ($return_number = false) {
  global $ai_db_options;

  if (!isset ($ai_db_options [AI_OPTION_GLOBAL]['ADB_REDIRECTION_PAGE'])) $ai_db_options [AI_OPTION_GLOBAL]['ADB_REDIRECTION_PAGE'] = AI_DEFAULT_ADB_REDIRECTION_PAGE;

  if ($return_number) {
    $value = trim ($ai_db_options [AI_OPTION_GLOBAL]['ADB_REDIRECTION_PAGE']);
    if ($value == '') $value = 0;
    if (is_numeric ($value)) return $value; else return AI_DEFAULT_ADB_REDIRECTION_PAGE;
  }

  return ($ai_db_options [AI_OPTION_GLOBAL]['ADB_REDIRECTION_PAGE']);
}

function get_custom_redirection_url () {
  global $ai_db_options;

  if (!isset ($ai_db_options [AI_OPTION_GLOBAL]['ADB_CUSTOM_REDIRECTION_URL'])) $ai_db_options [AI_OPTION_GLOBAL]['ADB_CUSTOM_REDIRECTION_URL'] = '';

  return ($ai_db_options [AI_OPTION_GLOBAL]['ADB_CUSTOM_REDIRECTION_URL']);
}

function get_message_css () {
  global $ai_db_options;

  if (!isset ($ai_db_options [AI_OPTION_GLOBAL]['ADB_MESSAGE_CSS'])) $ai_db_options [AI_OPTION_GLOBAL]['ADB_MESSAGE_CSS'] = AI_DEFAULT_ADB_MESSAGE_CSS;

  return ($ai_db_options [AI_OPTION_GLOBAL]['ADB_MESSAGE_CSS']);
}

function get_overlay_css () {
  global $ai_db_options;

  if (!isset ($ai_db_options [AI_OPTION_GLOBAL]['ADB_OVERLAY_CSS'])) $ai_db_options [AI_OPTION_GLOBAL]['ADB_OVERLAY_CSS'] = AI_DEFAULT_ADB_OVERLAY_CSS;

  return ($ai_db_options [AI_OPTION_GLOBAL]['ADB_OVERLAY_CSS']);
}

function get_undismissible_message ($saved_value = false) {
  global $ai_db_options, $ai_wp_data;

  if (!$saved_value) {
    switch (get_no_undismissible_message ()) {
      case AI_ADB_NO_ACTION_LOGGED_IN:
        if (($ai_wp_data [AI_WP_USER] & AI_USER_LOGGED_IN) != 0) return AI_DISABLED;
        break;
      case AI_ADB_NO_ACTION_ADMINISTRATORS:
        if (($ai_wp_data [AI_WP_USER] & AI_USER_ADMINISTRATOR) != 0) return AI_DISABLED;
        break;
    }
  }

  if (!isset ($ai_db_options [AI_OPTION_GLOBAL]['ADB_UNDISMISSIBLE_MESSAGE'])) $ai_db_options [AI_OPTION_GLOBAL]['ADB_UNDISMISSIBLE_MESSAGE'] = AI_DEFAULT_ADB_UNDISMISSIBLE_MESSAGE;

  return ($ai_db_options [AI_OPTION_GLOBAL]['ADB_UNDISMISSIBLE_MESSAGE']);
}

function get_no_undismissible_message () {
  global $ai_db_options;

  if (!isset ($ai_db_options [AI_OPTION_GLOBAL]['ADB_NO_UNDISMISSIBLE_MESSAGE'])) $ai_db_options [AI_OPTION_GLOBAL]['ADB_NO_UNDISMISSIBLE_MESSAGE'] = AI_DEFAULT_ADB_NO_UNDISMISSIBLE_MESSAGE;

  return ($ai_db_options [AI_OPTION_GLOBAL]['ADB_NO_UNDISMISSIBLE_MESSAGE']);
}

function filter_html_class ($str){

  $str = str_replace (array ("\\\""), array ("\""), $str);
  $str = sanitize_html_class ($str);

  return $str;
}

function filter_string ($str){

  $str = str_replace (array ("\\\""), array ("\""), $str);
  $str = str_replace (array ("\"", "<", ">"), "", $str);
  $str = trim (esc_html ($str));

  return $str;
}

function filter_string_tags ($str){

  $str = str_replace (array ("\\\""), array ("\""), $str);
  $str = str_replace (array ("\""), "", $str);
  $str = str_replace (array ("<", ">"), array ("&lt;", "&gt;"), $str);
  $str = trim (esc_html ($str));

  return $str;
}

function filter_option ($option, $value, $delete_escaped_backslashes = true){
  if ($delete_escaped_backslashes)
    $value = str_replace (array ("\\\""), array ("\""), $value);

  if ($option == 'ADB_SELECTORS' ||
      $option == AI_OPTION_HTML_SELECTOR ||
      $option == AI_OPTION_ANIMATION_TRIGGER_VALUE ||
      $option == 'MAIN_CONTENT_ELEMENT') {
//    $value = str_replace (array ("\\", "/", "?", "\"", "'", "<", ">", "'", '"'), "", $value);
    $value = str_replace (array ("\\", "/", "?", "\"", "'", "'", '"'), "", $value);
    $value = esc_html ($value);
  }
  elseif ($option == AI_OPTION_DOMAIN_LIST ||
          $option == 'NO_PARAGRAPH_COUNTING_INSIDE' ||
          $option == AI_OPTION_PARAGRAPH_TAGS ||
          $option == AI_OPTION_IP_ADDRESS_LIST ||
          $option == AI_OPTION_COUNTRY_LIST) {
    $value = str_replace (array ("\\", "/", "?", "\"", "'", "<", ">", "[", "]", "'", '"'), "", $value);
    $value = esc_html ($value);
  }
  elseif (
    $option == AI_OPTION_PARAGRAPH_TEXT ||
    $option == AI_OPTION_AVOID_TEXT_ABOVE ||
    $option == AI_OPTION_AVOID_TEXT_BELOW
  ) {
    $value = esc_html ($value);
  }
  elseif ($option == AI_OPTION_BLOCK_NAME ||
          $option == AI_OPTION_GENERAL_TAG ||
          $option == AI_OPTION_DOMAIN_LIST ||
          $option == AI_OPTION_CATEGORY_LIST ||
          $option == AI_OPTION_TAG_LIST ||
          $option == AI_OPTION_ID_LIST ||
          $option == AI_OPTION_URL_LIST ||
          $option == AI_OPTION_URL_PARAMETER_LIST ||
          $option == AI_OPTION_PARAGRAPH_TEXT_TYPE ||
          $option == AI_OPTION_PARAGRAPH_NUMBER ||
          $option == AI_OPTION_MIN_PARAGRAPHS ||
          $option == AI_OPTION_MIN_WORDS_ABOVE ||
          $option == AI_OPTION_AVOID_PARAGRAPHS_ABOVE ||
          $option == AI_OPTION_AVOID_PARAGRAPHS_BELOW ||
          $option == AI_OPTION_AVOID_TRY_LIMIT ||
          $option == AI_OPTION_MIN_WORDS ||
          $option == AI_OPTION_MAX_WORDS ||
          $option == AI_OPTION_MIN_PARAGRAPH_WORDS ||
          $option == AI_OPTION_MAX_PARAGRAPH_WORDS ||
          $option == AI_OPTION_MAXIMUM_INSERTIONS ||
          $option == AI_OPTION_AFTER_DAYS ||
          $option == AI_OPTION_START_DATE ||
          $option == AI_OPTION_END_DATE ||
          $option == AI_OPTION_FALLBACK ||
          $option == AI_OPTION_EXCERPT_NUMBER ||
          $option == AI_OPTION_HORIZONTAL_MARGIN ||
          $option == AI_OPTION_VERTICAL_MARGIN ||
          $option == AI_OPTION_ANIMATION_TRIGGER_OFFSET ||
          $option == AI_OPTION_ANIMATION_TRIGGER_DELAY ||
          $option == AI_OPTION_IFRAME_WIDTH ||
          $option == AI_OPTION_IFRAME_HEIGHT ||
          $option == 'ADB_DELAY_ACTION' ||
          $option == 'ADB_NO_ACTION_PERIOD' ||
          $option == 'ADB_REDIRECTION_PAGE' ||
          $option == 'ADB_CUSTOM_REDIRECTION_URL' ||
          $option == AI_OPTION_CUSTOM_CSS ||
          $option == 'HOOK_PRIORITY' ||
          $option == 'ADB_OVERLAY_CSS' ||
          $option == 'ADB_MESSAGE_CSS') {
    $value = str_replace (array ("\"", "<", ">", "[", "]"), "", $value);
    $value = esc_html ($value);
  }
  elseif ($option == 'AD_LABEL' ||
          $option == 'REPORT_HEADER_TITLE' ||
          $option == 'REPORT_HEADER_DESCRIPTION' ||
          $option == 'REPORT_FOOTER') {
    $value = str_replace (array ("\\", "?"), "", $value);
    $value = esc_html ($value);
  }
  elseif (
    $option == 'REPORT_HEADER_IMAGE') {
    $value = str_replace (home_url () . '/', '', $value);
    $value = str_replace (array ("http://", "https://", ":". "\"", "<", ">", "[", "]"), "", $value);
    $value = esc_html ($value);
  }

  return $value;
}

function filter_option_hf ($option, $value){
  $value = str_replace (array ("\\\""), array ("\""), $value);

//        if ($option == AI_OPTION_CODE ) {
//  } elseif ($option == AI_OPTION_ENABLE_MANUAL) {
//  } elseif ($option == AI_OPTION_PROCESS_PHP) {
//  } elseif ($option == AI_OPTION_ENABLE_404) {
//  } elseif ($option == AI_OPTION_DETECT_SERVER_SIDE) {
//  } elseif ($option == AI_OPTION_DISPLAY_FOR_DEVICES) {
//  }

  return $value;
}

function ai_ajax () {
  global $ai_wp_data;

//  check_ajax_referer ("adinserter_data", "ai_check");
//  check_admin_referer ("adinserter_data", "ai_check");

  if (isset ($_POST ["adsense-ad-units"])) {
    if (defined ('AI_ADSENSE_API')) {
      adsense_ad_name ($_POST ["adsense-ad-units"]);
    }
  }

  elseif (isset ($_GET ["block"])) {
    $block = sanitize_text_field ($_GET ["block"]);
    if (is_numeric ($block) && $block >= 1 && $block <= 96) {
      global $block_object;
      $block = $block_object [$block];
      if (isset ($_GET ["cookie_check"]) && $_GET ["cookie_check"] == 1) {
        $block->client_side_cookie_check = true;
      }
      if (isset ($_GET ["hide-debug-labels"]) && $_GET ["hide-debug-labels"] == 1) {
        $block->hide_debug_labels = true;
      }
      if ($block->get_iframe ())
        echo $block->get_iframe_page ();
    }
  }

  elseif (function_exists ('ai_ajax_processing_2')) {
    ai_ajax_processing_2 ();
  }

  wp_die ();
}

function ai_ajax_backend () {
  global $preview_name, $preview_alignment, $preview_css;

//  check_ajax_referer ("adinserter_data", "ai_check");
  check_admin_referer ("adinserter_data", "ai_check");

  if (!current_user_can ('activate_plugins')) {
    wp_die ();
  }

  if (isset ($_POST ["preview"])) {
    $block = urldecode ($_POST ["preview"]);
    if (is_numeric ($block) && $block >= 1 && $block <= 96) {
      require_once AD_INSERTER_PLUGIN_DIR.'includes/preview.php';

      $preview_parameters = array ();

      if (isset ($_POST ['name']))              $preview_parameters ['name']              = base64_decode ($_POST ['name']);
      if (isset ($_POST ['code']))              $preview_parameters ['code']              = base64_decode ($_POST ['code']);
      if (isset ($_POST ['alignment']))         $preview_parameters ['alignment']         = base64_decode ($_POST ['alignment']);
      if (isset ($_POST ['horizontal']))        $preview_parameters ['horizontal']        = base64_decode ($_POST ['horizontal']);
      if (isset ($_POST ['vertical']))          $preview_parameters ['vertical']          = base64_decode ($_POST ['vertical']);
      if (isset ($_POST ['horizontal_margin'])) $preview_parameters ['horizontal_margin'] = base64_decode ($_POST ['horizontal_margin']);
      if (isset ($_POST ['vertical_margin']))   $preview_parameters ['vertical_margin']   = base64_decode ($_POST ['vertical_margin']);
      if (isset ($_POST ['animation']))         $preview_parameters ['animation']         = base64_decode ($_POST ['animation']);
      if (isset ($_POST ['alignment_css']))     $preview_parameters ['alignment_css']     = base64_decode ($_POST ['alignment_css']);
      if (isset ($_POST ['custom_css']))        $preview_parameters ['custom_css']        = base64_decode ($_POST ['custom_css']);
      if (isset ($_POST ['php']))               $preview_parameters ['php']               = $_POST ['php'];
      if (isset ($_POST ['close']))             $preview_parameters ['close']             = $_POST ['close'];
      if (isset ($_POST ['label']))             $preview_parameters ['label']             = $_POST ['label'];
      if (isset ($_POST ['read_only']))         $preview_parameters ['read_only']         = $_POST ['read_only'];
      if (isset ($_POST ['iframe']))            $preview_parameters ['iframe']            = $_POST ['iframe'];
      if (isset ($_POST ['check']))             $preview_parameters ['check']             = $_POST ['check'];
      if (isset ($_POST ['count']))             $preview_parameters ['count']             = $_POST ['count'];
      if (isset ($_POST ['rotate']))            $preview_parameters ['rotate']            = $_POST ['rotate'];

      if (!current_user_can ('edit_plugins')) {
        $preview_parameters ['php'] = false;
      }

      generate_code_preview (
        $block,
        $preview_parameters
      );
    }
    elseif ($block == 'adb') {
      require_once AD_INSERTER_PLUGIN_DIR.'includes/preview-adb.php';

      $process_php = isset ($_POST ["php"]) && $_POST ["php"] == 1;
      if (!current_user_can ('edit_plugins')) {
        $process_php = false;
      }

      generate_code_preview_adb (base64_decode ($_POST ["code"]), $process_php);
    }
    elseif ($block == 'adsense') {

      if (defined ('AI_ADSENSE_API')) {
        require_once AD_INSERTER_PLUGIN_DIR.'includes/preview.php';
        require_once AD_INSERTER_PLUGIN_DIR.'includes/adsense-api.php';

        if (defined ('AI_ADSENSE_AUTHORIZATION_CODE')) {

          $adsense = new adsense_api();

          $adsense_code   = $adsense->getAdCode (base64_decode ($_POST ["slot_id"]));
          $adsense_error  = $adsense->getError ();

          $preview_parameters = array (
            "name"          => isset ($_POST ["name"]) ? base64_decode ($_POST ["name"]) : 'ADSENSE CODE',
            "alignment"     => '',
            "horizontal"    => '',
            "vertical"      => '',
            "alignment_css" => '',
            "custom_css"    => '',
            "code"          => $adsense_error == '' ? $adsense_code : '<div style="color: red;">'.$adsense_error.'</div>',
            "php"           => false,
            "label"         => false,
            "close"         => AI_CLOSE_NONE,
            "read_only"     => true,
          );

          generate_code_preview (
            0, // Default settings
            $preview_parameters
          );

        }
      }
    }
  }

  elseif (isset ($_POST ["edit"])) {
    if (is_numeric ($_POST ["edit"]) && $_POST ["edit"] >= 1 && $_POST ["edit"] <= 96) {
      require_once AD_INSERTER_PLUGIN_DIR.'includes/editor.php';

      $process_php = isset ($_POST ["php"]) && $_POST ["php"] == 1;
      if (!current_user_can ('edit_plugins')) {
        $process_php = false;
      }

      generate_code_editor ($_POST ["edit"], base64_decode ($_POST ["code"]), $process_php);
    }
  }

  if (isset ($_POST ["placeholder"])) {
    $block = urldecode ($_POST ["block"]);
    if (is_numeric ($block) && $block >= 1 && $block <= 96) {
      require_once AD_INSERTER_PLUGIN_DIR.'includes/placeholders.php';

      generate_placeholder_editor (str_replace (array ('"', "\\'"), array ('&quot', '&#039'), urldecode ($_POST ["placeholder"])), $block);
    }
  }

  elseif (isset ($_POST ["generate-code"])) {
    $code_generator = new ai_code_generator ();

    echo json_encode ($code_generator->generate ($_POST));
  }

  elseif (isset ($_POST ["import-code"])) {
    $code_generator = new ai_code_generator ();

    echo json_encode ($code_generator->import (base64_decode ($_POST ["import-code"])));
  }

  elseif (isset ($_POST ["import-rotation-code"])) {
    $code_generator = new ai_code_generator ();

    echo json_encode ($code_generator->import_rotation (base64_decode ($_POST ["import-rotation-code"])));
  }

  elseif (isset ($_POST ["generate-rotation-code"])) {
    $code_generator = new ai_code_generator ();

    echo json_encode ($code_generator->generate_rotation (json_decode (base64_decode ($_POST ['generate-rotation-code']), true)));
  }

  elseif (isset ($_GET ["image"])) {
    $filename = sanitize_file_name ($_GET ["image"]);
    header ("Content-Type: image/png");
    header ("Content-Length: " . filesize (AD_INSERTER_PLUGIN_DIR.'images/'.$filename));
    readfile  (AD_INSERTER_PLUGIN_DIR.'images/'.$filename);
  }
  elseif (isset ($_GET ["css"])) {
    $filename = sanitize_file_name ($_GET ["css"]);
    header ("Content-Type: text/css");
    header ("Content-Length: " . filesize (AD_INSERTER_PLUGIN_DIR.'css/'.$filename));
    readfile  (AD_INSERTER_PLUGIN_DIR.'css/'.$filename);
  }
  elseif (isset ($_GET ["js"])) {
    $filename = sanitize_file_name ($_GET ["js"]);
    header ("Content-Type: application/javascript");
    header ("Content-Length: " . filesize (AD_INSERTER_PLUGIN_DIR.'js/'.$filename));
    readfile  (AD_INSERTER_PLUGIN_DIR.'js/'.$filename);
  }

  elseif (isset ($_GET ["rating"])) {
    $cache_time = $_GET ["rating"] == 'update' ? 0 * 60 : AI_TRANSIENT_RATING_EXPIRATION;
    if (!get_transient (AI_TRANSIENT_RATING) || !($transient_timeout = get_option ('_transient_timeout_' . AI_TRANSIENT_RATING)) || AI_TRANSIENT_RATING_EXPIRATION - ($transient_timeout - time ()) > $cache_time) {
      $args = (object) array ('slug' => 'ad-inserter');
      $request = array ('action' => 'plugin_information', 'timeout' => 5, 'request' => serialize ($args));
      $url = 'http://api.wordpress.org/plugins/info/1.0/';
      $response = wp_remote_post ($url, array ('body' => $request));
      $plugin_info = @unserialize ($response ['body']);
      if (isset ($plugin_info->ratings)) {
        $total_rating = 0;
        $total_count = 0;
        foreach ($plugin_info->ratings as $rating => $count) {
          $total_rating += $rating * $count;
          $total_count += $count;
        }
        $rating = number_format ($total_rating / $total_count, 4);
        set_transient (AI_TRANSIENT_RATING, $rating, AI_TRANSIENT_RATING_EXPIRATION);
      }
    }
    if ($rating = get_transient (AI_TRANSIENT_RATING)) {
      if ($rating > 1 && $rating <= 5) echo $rating;
    }
  }

  elseif (isset ($_POST ["notice"])) {
    update_option ('ai-notice-' . $_POST ["notice"], $_POST ["click"]);
  }

  elseif (isset ($_POST ["notice-check"])) {
    echo $_POST ["notice-check"];
  }

  elseif (isset ($_GET ["list"])) {
    code_block_list ();
  }

  elseif (isset ($_GET ["adsense-list"])) {
    if (defined ('AI_ADSENSE_API')) {
      adsense_list ();
    }
  }

  elseif (isset ($_GET ["adsense-code"])) {
    if (defined ('AI_ADSENSE_API')) {
      ai_adsense_code ($_GET ["adsense-code"]);
    }
  }

  elseif (isset ($_GET ["adsense-authorization-code"])) {
    if (defined ('AI_ADSENSE_API')) {
      if ($_GET ['adsense-authorization-code'] == '') {
        delete_option (AI_ADSENSE_CLIENT_IDS);
        delete_option (AI_ADSENSE_AUTH_CODE);
        delete_option (AI_ADSENSE_OWN_IDS);

        delete_transient (AI_TRANSIENT_ADSENSE_TOKEN);
        delete_transient (AI_TRANSIENT_ADSENSE_ADS);
      }
      elseif (base64_decode ($_GET ['adsense-authorization-code']) == 'own-ids') {
        update_option (AI_ADSENSE_OWN_IDS, '1');

        delete_option (AI_ADSENSE_CLIENT_IDS);
        delete_option (AI_ADSENSE_AUTH_CODE);

        delete_transient (AI_TRANSIENT_ADSENSE_TOKEN);
        delete_transient (AI_TRANSIENT_ADSENSE_ADS);
      }
      else update_option (AI_ADSENSE_AUTH_CODE, base64_decode ($_GET ['adsense-authorization-code']));
    }
  }

  elseif (isset ($_GET ["adsense-client-id"])) {
    if (defined ('AI_ADSENSE_API')) {
      if ($_GET ['adsense-client-id'] == '') {
        delete_option (AI_ADSENSE_CLIENT_IDS);
        delete_option (AI_ADSENSE_AUTH_CODE);

        delete_transient (AI_TRANSIENT_ADSENSE_TOKEN);
        delete_transient (AI_TRANSIENT_ADSENSE_ADS);
      } else update_option (AI_ADSENSE_CLIENT_IDS, array ('ID' => base64_decode ($_GET ['adsense-client-id']), 'SECRET' => base64_decode ($_GET ['adsense-client-secret'])));
    }
  }

  elseif (isset ($_GET ["ads-txt"])) {
    ads_txt ($_GET ["ads-txt"]);
  }

  elseif (isset ($_GET ["settings"])) {
    generate_settings_form ();
  }

  elseif (isset ($_GET ["list-options"])) {
    generate_list_options ($_GET ["list-options"]);
  }

  elseif (isset ($_GET ["update"])) {
    if ($_GET ["update"] == 'block-code-demo') {
      ai_block_code_demo (urldecode ($_GET ["block_class_name"]), $_GET ["block_class"], $_GET ["block_number_class"], $_GET ["inline_styles"]);
    }
    elseif (function_exists ('ai_ajax_backend_2')) {
      ai_ajax_backend_2 ();
    }
  }

  elseif (isset ($_GET ["check-page"])) {
    ai_check_page ($_GET ["check-page"]);
  }

  elseif (function_exists ('ai_ajax_backend_2')) {
    ai_ajax_backend_2 ();
  }

  wp_die ();
}

function ai_generate_extract (&$settings) {
  global $ai_custom_hooks, $ai_wp_data, $version_string, $subversion_string;

  if (!defined ('AI_EXTRACT_GENERATED'))
    define ('AI_EXTRACT_GENERATED', true);

  $obj = new ai_Block (1);

  $extract = array ();

  if (defined ('AI_BUFFERING')) {
    $above_header_hook_blocks     = array (AI_PT_ANY => array (), AI_PT_HOMEPAGE => array(), AI_PT_CATEGORY => array(), AI_PT_SEARCH => array(), AI_PT_ARCHIVE => array(), AI_PT_STATIC => array(), AI_PT_POST => array(), AI_PT_404 => array(), AI_PT_FEED => array(), AI_PT_AJAX => array());
    $html_element_hook_blocks     = array (AI_PT_ANY => array (), AI_PT_HOMEPAGE => array(), AI_PT_CATEGORY => array(), AI_PT_SEARCH => array(), AI_PT_ARCHIVE => array(), AI_PT_STATIC => array(), AI_PT_POST => array(), AI_PT_404 => array(), AI_PT_FEED => array(), AI_PT_AJAX => array());
  }

  $content_hook_blocks          = array (AI_PT_ANY => array (), AI_PT_HOMEPAGE => array(), AI_PT_CATEGORY => array(), AI_PT_SEARCH => array(), AI_PT_ARCHIVE => array(), AI_PT_STATIC => array(), AI_PT_POST => array(), AI_PT_404 => array(), AI_PT_FEED => array(), AI_PT_AJAX => array());
  $excerpt_hook_blocks          = array (AI_PT_ANY => array (), AI_PT_HOMEPAGE => array(), AI_PT_CATEGORY => array(), AI_PT_SEARCH => array(), AI_PT_ARCHIVE => array(), AI_PT_STATIC => array(), AI_PT_POST => array(), AI_PT_404 => array(), AI_PT_FEED => array(), AI_PT_AJAX => array());
  $loop_start_hook_blocks       = array (AI_PT_ANY => array (), AI_PT_HOMEPAGE => array(), AI_PT_CATEGORY => array(), AI_PT_SEARCH => array(), AI_PT_ARCHIVE => array(), AI_PT_STATIC => array(), AI_PT_POST => array(), AI_PT_404 => array(), AI_PT_FEED => array(), AI_PT_AJAX => array());
  $loop_end_hook_blocks         = array (AI_PT_ANY => array (), AI_PT_HOMEPAGE => array(), AI_PT_CATEGORY => array(), AI_PT_SEARCH => array(), AI_PT_ARCHIVE => array(), AI_PT_STATIC => array(), AI_PT_POST => array(), AI_PT_404 => array(), AI_PT_FEED => array(), AI_PT_AJAX => array());
  $post_hook_blocks             = array (AI_PT_ANY => array (), AI_PT_HOMEPAGE => array(), AI_PT_CATEGORY => array(), AI_PT_SEARCH => array(), AI_PT_ARCHIVE => array(), AI_PT_STATIC => array(), AI_PT_POST => array(), AI_PT_404 => array(), AI_PT_FEED => array(), AI_PT_AJAX => array());
  $before_comments_hook_blocks  = array (AI_PT_ANY => array (), AI_PT_HOMEPAGE => array(), AI_PT_CATEGORY => array(), AI_PT_SEARCH => array(), AI_PT_ARCHIVE => array(), AI_PT_STATIC => array(), AI_PT_POST => array(), AI_PT_404 => array(), AI_PT_FEED => array(), AI_PT_AJAX => array());
  $between_comments_hook_blocks = array (AI_PT_ANY => array (), AI_PT_HOMEPAGE => array(), AI_PT_CATEGORY => array(), AI_PT_SEARCH => array(), AI_PT_ARCHIVE => array(), AI_PT_STATIC => array(), AI_PT_POST => array(), AI_PT_404 => array(), AI_PT_FEED => array(), AI_PT_AJAX => array());
  $after_comments_hook_blocks   = array (AI_PT_ANY => array (), AI_PT_HOMEPAGE => array(), AI_PT_CATEGORY => array(), AI_PT_SEARCH => array(), AI_PT_ARCHIVE => array(), AI_PT_STATIC => array(), AI_PT_POST => array(), AI_PT_404 => array(), AI_PT_FEED => array(), AI_PT_AJAX => array());
  $footer_hook_blocks           = array (AI_PT_ANY => array (), AI_PT_HOMEPAGE => array(), AI_PT_CATEGORY => array(), AI_PT_SEARCH => array(), AI_PT_ARCHIVE => array(), AI_PT_STATIC => array(), AI_PT_POST => array(), AI_PT_404 => array(), AI_PT_FEED => array(), AI_PT_AJAX => array());
  $custom_hook_blocks           = array ();
  for ($custom_hook = 1; $custom_hook <= 8; $custom_hook ++) {
    $custom_hook_blocks     []  = array (AI_PT_ANY => array (), AI_PT_HOMEPAGE => array(), AI_PT_CATEGORY => array(), AI_PT_SEARCH => array(), AI_PT_ARCHIVE => array(), AI_PT_STATIC => array(), AI_PT_POST => array(), AI_PT_404 => array(), AI_PT_FEED => array(), AI_PT_AJAX => array());
  }

  // Get blocks used in sidebar widgets
  $sidebar_widgets = wp_get_sidebars_widgets();
  $widget_options = get_option ('widget_ai_widget');

  $widget_blocks = array ();
  foreach ($sidebar_widgets as $sidebar_index => $sidebar_widget) {
    if (is_array ($sidebar_widget) && isset ($GLOBALS ['wp_registered_sidebars'][$sidebar_index]['name'])) {
      $sidebar_name = $GLOBALS ['wp_registered_sidebars'][$sidebar_index]['name'];
      if ($sidebar_name != "") {
        foreach ($sidebar_widget as $widget) {
          if (preg_match ("/ai_widget-([\d]+)/", $widget, $widget_id)) {
            if (isset ($widget_id [1]) && is_numeric ($widget_id [1])) {
              $widget_option = $widget_options [$widget_id [1]];
              $widget_block = $widget_option ['block'];
              if ($widget_block >= 1 && $widget_block <= 96) {
                $widget_blocks [] = $widget_block;
              }
            }
          }
        }
      }
    }
  }
  $widget_blocks = array_unique ($widget_blocks);

  // Generate extracted data
  $active_blocks = array ();

  $temp_ai_wp_data = $ai_wp_data;

  $ai_wp_data [AI_SERVER_SIDE_DETECTION]     = false;
  $ai_wp_data [AI_CLIENT_SIDE_DETECTION]     = false;
  $ai_wp_data [AI_CLIENT_SIDE_INSERTION]     = false;
  $ai_wp_data [AI_STICK_TO_THE_CONTENT]      = false;
  $ai_wp_data [AI_TRACKING]                  = false;
  $ai_wp_data [AI_CLOSE_BUTTONS]             = false;
  $ai_wp_data [AI_CHECK_BLOCK]               = false;
  $ai_wp_data [AI_IFRAMES]                   = false;
  $ai_wp_data [AI_ANIMATION]                 = false;
  $ai_wp_data [AI_LAZY_LOADING]              = false;
  $ai_wp_data [AI_GEOLOCATION]               = false;

  for ($block = 1; $block <= 96; $block ++) {

    if (!isset ($settings [$block])) continue;

    $obj->number = $block;
    $obj->wp_options = $settings [$block];

    $page_types = array ();
    if ($obj->get_display_settings_home())     $page_types []= AI_PT_HOMEPAGE;
    if ($obj->get_display_settings_page())     $page_types []= AI_PT_STATIC;
    if ($obj->get_display_settings_post())     $page_types []= AI_PT_POST;
    if ($obj->get_display_settings_category()) $page_types []= AI_PT_CATEGORY;
    if ($obj->get_display_settings_search())   $page_types []= AI_PT_SEARCH;
    if ($obj->get_display_settings_archive())  $page_types []= AI_PT_ARCHIVE;
    if ($obj->get_enable_ajax())               $page_types []= AI_PT_AJAX;
    if ($obj->get_enable_feed())               $page_types []= AI_PT_FEED;
    if ($obj->get_enable_404())                $page_types []= AI_PT_404;

    $automatic_insertion = $obj->get_automatic_insertion();
    $enabled_insertion   = $obj->get_disable_insertion() == AI_DISABLED;

    if ($page_types && $enabled_insertion) {

      // Change insertion position to actual server-side insertion position
      switch ($automatic_insertion) {
        case AI_AUTOMATIC_INSERTION_BEFORE_HTML_ELEMENT:
        case AI_AUTOMATIC_INSERTION_INSIDE_HTML_ELEMENT:
        case AI_AUTOMATIC_INSERTION_AFTER_HTML_ELEMENT:
          switch ($obj->get_html_element_insertion ()) {
            case AI_HTML_INSERTION_SEREVR_SIDE:
              $automatic_insertion = AI_AUTOMATIC_INSERTION_OUTPUT_BUFFERING;
              break;
            default:
              $automatic_insertion = $obj->get_server_side_insertion ();
              break;
          }
          break;
      }

      switch ($automatic_insertion) {
        case AI_AUTOMATIC_INSERTION_ABOVE_HEADER:
          if (defined ('AI_BUFFERING')) {
            foreach ($page_types as $block_page_type) $above_header_hook_blocks [$block_page_type][]= $block;
            $above_header_hook_blocks [AI_PT_ANY][]= $block;
          }
          break;
        case AI_AUTOMATIC_INSERTION_OUTPUT_BUFFERING:
          if (defined ('AI_BUFFERING')) {
            foreach ($page_types as $block_page_type) $html_element_hook_blocks [$block_page_type][]= $block;
            $html_element_hook_blocks [AI_PT_ANY][]= $block;
          }
          break;
        case AI_AUTOMATIC_INSERTION_BEFORE_PARAGRAPH:
        case AI_AUTOMATIC_INSERTION_AFTER_PARAGRAPH:
        case AI_AUTOMATIC_INSERTION_BEFORE_IMAGE:
        case AI_AUTOMATIC_INSERTION_AFTER_IMAGE:
        case AI_AUTOMATIC_INSERTION_BEFORE_CONTENT:
        case AI_AUTOMATIC_INSERTION_AFTER_CONTENT:
          foreach ($page_types as $block_page_type) $content_hook_blocks [$block_page_type][]= $block;
          $content_hook_blocks [AI_PT_ANY][]= $block;
          break;
        case AI_AUTOMATIC_INSERTION_BEFORE_EXCERPT:
        case AI_AUTOMATIC_INSERTION_AFTER_EXCERPT:
          foreach ($page_types as $block_page_type) $excerpt_hook_blocks [$block_page_type][]= $block;
          $excerpt_hook_blocks [AI_PT_ANY][]= $block;
          break;
        case AI_AUTOMATIC_INSERTION_BEFORE_POST:
          foreach ($page_types as $block_page_type) $loop_start_hook_blocks [$block_page_type][]= $block;
          $loop_start_hook_blocks [AI_PT_ANY][]= $block;
          break;
        case AI_AUTOMATIC_INSERTION_AFTER_POST:
          foreach ($page_types as $block_page_type) $loop_end_hook_blocks [$block_page_type][]= $block;
          $loop_end_hook_blocks [AI_PT_ANY][]= $block;
          break;
        case AI_AUTOMATIC_INSERTION_BETWEEN_POSTS:
          foreach ($page_types as $block_page_type) $post_hook_blocks [$block_page_type][]= $block;
          $post_hook_blocks [AI_PT_ANY][]= $block;
          break;
        case AI_AUTOMATIC_INSERTION_BEFORE_COMMENTS:
          foreach ($page_types as $block_page_type) $before_comments_hook_blocks [$block_page_type][]= $block;
          $before_comments_hook_blocks [AI_PT_ANY][]= $block;
          break;
        case AI_AUTOMATIC_INSERTION_BETWEEN_COMMENTS:
          foreach ($page_types as $block_page_type) $between_comments_hook_blocks [$block_page_type][]= $block;
          $between_comments_hook_blocks [AI_PT_ANY][]= $block;
          break;
        case AI_AUTOMATIC_INSERTION_AFTER_COMMENTS:
          foreach ($page_types as $block_page_type) $after_comments_hook_blocks [$block_page_type][]= $block;
          $after_comments_hook_blocks [AI_PT_ANY][]= $block;
          break;
        case AI_AUTOMATIC_INSERTION_FOOTER:
          foreach ($page_types as $block_page_type) $footer_hook_blocks [$block_page_type][]= $block;
          $footer_hook_blocks [AI_PT_ANY][]= $block;
          break;
        default:
          if ($automatic_insertion >= AI_AUTOMATIC_INSERTION_CUSTOM_HOOK && $automatic_insertion < AI_AUTOMATIC_INSERTION_CUSTOM_HOOK + 8) {
            $hook_index = $automatic_insertion - AI_AUTOMATIC_INSERTION_CUSTOM_HOOK;
            foreach ($page_types as $block_page_type) $custom_hook_blocks [$hook_index][$block_page_type][]= $block;
            $custom_hook_blocks [$hook_index][AI_PT_ANY][]= $block;
          }
          break;
      }
    }

    $automatic           = $automatic_insertion         != AI_AUTOMATIC_INSERTION_DISABLED;
    $manual_widget       = $obj->get_enable_widget()     == AI_ENABLED;
    $manual_shortcode    = $obj->get_enable_manual()     == AI_ENABLED;
    $manual_php_function = $obj->get_enable_php_call()   == AI_ENABLED;
    if ($enabled_insertion && ($automatic || ($manual_widget && in_array ($block, $widget_blocks)) || $manual_shortcode || $manual_php_function)) {
      $active_blocks []= $block;

      $obj->extract_features ();
    }
  }

  $extract [AI_EXTRACT_USED_BLOCKS] = serialize ($active_blocks);

  if (isset ($settings [AI_HEADER_OPTION_NAME])) {
    $obj->wp_options = $settings [AI_HEADER_OPTION_NAME];
    if ($obj->get_enable_manual () && $obj->get_detection_server_side())  $ai_wp_data [AI_SERVER_SIDE_DETECTION] = true;
  }

  if (isset ($settings [AI_FOOTER_OPTION_NAME])) {
    $obj->wp_options = $settings [AI_FOOTER_OPTION_NAME];
    if ($obj->get_enable_manual () && $obj->get_detection_server_side())  $ai_wp_data [AI_SERVER_SIDE_DETECTION] = true;
  }

  $extract [AI_EXTRACT_FEATURES] = array (
    AI_SERVER_SIDE_DETECTION      => $ai_wp_data [AI_SERVER_SIDE_DETECTION],
    AI_CLIENT_SIDE_DETECTION      => $ai_wp_data [AI_CLIENT_SIDE_DETECTION],
    AI_CLIENT_SIDE_INSERTION      => $ai_wp_data [AI_CLIENT_SIDE_INSERTION],
    AI_STICK_TO_THE_CONTENT       => $ai_wp_data [AI_STICK_TO_THE_CONTENT],
    AI_TRACKING                   => $ai_wp_data [AI_TRACKING],
    AI_CLOSE_BUTTONS              => $ai_wp_data [AI_CLOSE_BUTTONS],
    AI_CHECK_BLOCK                => $ai_wp_data [AI_CHECK_BLOCK],
    AI_IFRAMES                    => $ai_wp_data [AI_IFRAMES],
    AI_ANIMATION                  => $ai_wp_data [AI_ANIMATION],
    AI_LAZY_LOADING               => $ai_wp_data [AI_LAZY_LOADING],
    AI_GEOLOCATION                => $ai_wp_data [AI_GEOLOCATION]
  );

  $ai_wp_data = $temp_ai_wp_data;


  if (defined ('AI_BUFFERING')) {
    $extract [ABOVE_HEADER_HOOK_BLOCKS] = $above_header_hook_blocks;
    $extract [HTML_ELEMENT_HOOK_BLOCKS] = $html_element_hook_blocks;
  }

  $extract [CONTENT_HOOK_BLOCKS]          = $content_hook_blocks;
  $extract [EXCERPT_HOOK_BLOCKS]          = $excerpt_hook_blocks;
  $extract [LOOP_START_HOOK_BLOCKS]       = $loop_start_hook_blocks;
  $extract [LOOP_END_HOOK_BLOCKS]         = $loop_end_hook_blocks;
  $extract [POST_HOOK_BLOCKS]             = $post_hook_blocks;
  $extract [BEFORE_COMMENTS_HOOK_BLOCKS]  = $before_comments_hook_blocks;
  $extract [BETWEEN_COMMENTS_HOOK_BLOCKS] = $between_comments_hook_blocks;
  $extract [AFTER_COMMENTS_HOOK_BLOCKS]   = $after_comments_hook_blocks;
  $extract [FOOTER_HOOK_BLOCKS]           = $footer_hook_blocks;

  for ($custom_hook = 1; $custom_hook <= 8; $custom_hook ++) {
    $action = get_hook_action ($custom_hook);

    if (get_hook_enabled ($custom_hook) && get_hook_name ($custom_hook) != '' && $action != '') {

      $custom_hook_extract_index = $action . CUSTOM_HOOK_BLOCKS;

      if (isset ($extract [$custom_hook_extract_index])) {
        // Custom hook on WP hook used by the plugin - merge blocks
        foreach ($extract [$custom_hook_extract_index] as $page_type => $blocks) {
          $extract [$custom_hook_extract_index][$page_type] = array_merge ($blocks, $custom_hook_blocks [$custom_hook - 1][$page_type]);
        }
      } else $extract [$custom_hook_extract_index] = $custom_hook_blocks [$custom_hook - 1];

    }
  }

  $extract ['VERSION'] = $version_string . $subversion_string . '-' . '96';
  $extract ['TIMESTAMP'] = time ();

  return ($extract);
}

function ai_load_settings () {
  global $ai_db_options, $block_object, $ai_wp_data, $version_string, $ai_custom_hooks;

  if (($ai_wp_data [AI_WP_DEBUGGING] & AI_DEBUG_PROCESSING) != 0) ai_log ("LOAD SETTINGS START");

  ai_load_options ();

  $extract_ok = ai_load_extract (false);

  $ai_custom_hooks = array ();
  for ($hook = 1; $hook <= 8; $hook ++) {
    $name   = get_hook_name   ($hook);
    $action = get_hook_action ($hook);

    if (get_hook_enabled ($hook) && $name != '' && $action != '') {
      $ai_custom_hooks [] = array ('index' => $hook, 'name' => $name, 'action' => $action, 'priority' => get_hook_priority ($hook));
    }
  }

  $features_in_extract = $extract_ok && isset ($ai_db_options [AI_OPTION_EXTRACT][AI_EXTRACT_FEATURES]);

  if (isset ($ai_db_options [AI_OPTION_EXTRACT][AI_EXTRACT_USED_BLOCKS])) {
    $used_blocks = @unserialize ($ai_db_options [AI_OPTION_EXTRACT][AI_EXTRACT_USED_BLOCKS]);
  } else $used_blocks = false;

  $obj = new ai_Block (0);                  // translators: block name (block with default settings)
  $obj->wp_options [AI_OPTION_BLOCK_NAME] = _x('Default', 'Block name', 'ad-inserter');
  $block_object [0] = $obj;

  for ($block = 1; $block <= 96; $block ++) {
    $obj = new ai_Block ($block);

    $obj->load_options ($block);
    $block_object [$block] = $obj;

    if (!$features_in_extract && (!is_array ($used_blocks) || in_array ($block, $used_blocks))) $obj->extract_features ();
  }

  $adH  = new ai_AdH();
  $adF  = new ai_AdF();
  $adH->load_options (AI_HEADER_OPTION_NAME);
  $adF->load_options (AI_FOOTER_OPTION_NAME);
  $block_object [AI_HEADER_OPTION_NAME]       = $adH;
  $block_object [AI_FOOTER_OPTION_NAME]       = $adF;

  if ($features_in_extract) {
    $ai_wp_data [AI_SERVER_SIDE_DETECTION]     = $ai_db_options [AI_OPTION_EXTRACT][AI_EXTRACT_FEATURES][AI_SERVER_SIDE_DETECTION];
    $ai_wp_data [AI_CLIENT_SIDE_DETECTION]     = $ai_db_options [AI_OPTION_EXTRACT][AI_EXTRACT_FEATURES][AI_CLIENT_SIDE_DETECTION];
    $ai_wp_data [AI_CLIENT_SIDE_INSERTION]     = $ai_db_options [AI_OPTION_EXTRACT][AI_EXTRACT_FEATURES][AI_CLIENT_SIDE_INSERTION];
    $ai_wp_data [AI_STICK_TO_THE_CONTENT]      = $ai_db_options [AI_OPTION_EXTRACT][AI_EXTRACT_FEATURES][AI_STICK_TO_THE_CONTENT];
    $ai_wp_data [AI_TRACKING]                  = $ai_db_options [AI_OPTION_EXTRACT][AI_EXTRACT_FEATURES][AI_TRACKING];
    $ai_wp_data [AI_CLOSE_BUTTONS]             = $ai_db_options [AI_OPTION_EXTRACT][AI_EXTRACT_FEATURES][AI_CLOSE_BUTTONS];
    $ai_wp_data [AI_CHECK_BLOCK]               = $ai_db_options [AI_OPTION_EXTRACT][AI_EXTRACT_FEATURES][AI_CHECK_BLOCK];
    $ai_wp_data [AI_IFRAMES]                   = $ai_db_options [AI_OPTION_EXTRACT][AI_EXTRACT_FEATURES][AI_IFRAMES];
    $ai_wp_data [AI_ANIMATION]                 = $ai_db_options [AI_OPTION_EXTRACT][AI_EXTRACT_FEATURES][AI_ANIMATION];
    $ai_wp_data [AI_LAZY_LOADING]              = $ai_db_options [AI_OPTION_EXTRACT][AI_EXTRACT_FEATURES][AI_LAZY_LOADING];
    $ai_wp_data [AI_GEOLOCATION]               = $ai_db_options [AI_OPTION_EXTRACT][AI_EXTRACT_FEATURES][AI_GEOLOCATION];
  } else {
      if ($adH->get_enable_manual () && $adH->get_detection_server_side())  $ai_wp_data [AI_SERVER_SIDE_DETECTION] = true;
      if ($adF->get_enable_manual () && $adF->get_detection_server_side())  $ai_wp_data [AI_SERVER_SIDE_DETECTION] = true;
    }

  if (defined ('AI_ADBLOCKING_DETECTION') && AI_ADBLOCKING_DETECTION) {
    $adA  = new ai_AdA();
    $adA->load_options (AI_ADB_MESSAGE_OPTION_NAME);
    $block_object [AI_ADB_MESSAGE_OPTION_NAME]  = $adA;
    $ai_wp_data [AI_ADB_DETECTION] = $adA->get_enable_manual ();
  }

  if (($install_timestamp = get_option (AI_INSTALL_NAME)) !== false) {
    $install    = new DateTime (date('Y-m-d H:i:s', $install_timestamp));
    $now        = new DateTime (date('Y-m-d H:i:s', time()));
    if (method_exists ($install, 'diff')) {
      $ai_wp_data [AI_INSTALL_TIME_DIFFERENCE] = $install->diff ($now);
      $ai_wp_data [AI_DAYS_SINCE_INSTAL]       = $ai_wp_data [AI_INSTALL_TIME_DIFFERENCE]->days;
    }
  }

  if (($ai_wp_data [AI_WP_DEBUGGING] & AI_DEBUG_PROCESSING) != 0) ai_log ("LOAD SETTINGS END");
}


function generate_viewport_css () {

  $viewports = array ();
  for ($viewport = 1; $viewport <= 6; $viewport ++) {
    $viewport_name  = get_viewport_name ($viewport);
    $viewport_width = get_viewport_width ($viewport);
    if ($viewport_name != '') {
      $viewports []= array ('index' => $viewport, 'name' => $viewport_name, 'width' => $viewport_width);
    }
  }

  $viewport_styles = '';
  if (count ($viewports) != 0) {
    foreach ($viewports as $index => $viewport) {
      if ($viewport ['index'] == 1) {
        foreach (array_reverse ($viewports) as $index2 => $viewport2) {
          if ($viewport2 ['index'] != 1) {
            $viewport_styles .= ".ai-viewport-" . $viewport2 ['index'] . "                { display: none !important;}\n";
          }
        }
        $viewport_styles .= ".ai-viewport-1                { display: inherit !important;}\n";
        $viewport_styles .= ".ai-viewport-0                { display: none !important;}\n";
      } else {
          $viewport_styles .= "@media ";
          if ($index != count ($viewports) - 1)
            $viewport_styles .= "(min-width: " . $viewport ['width'] . "px) and ";
          $viewport_styles .= "(max-width: " . ($viewports [$index - 1]['width'] - 1) . "px) {\n";
          foreach ($viewports as $index2 => $viewport2) {
            if ($viewport2 ['index'] == 1)
              $viewport_styles .= ".ai-viewport-" . $viewport2 ['index'] . "                { display: none !important;}\n";
            elseif ($viewport ['index'] == $viewport2 ['index'])
              $viewport_styles .= ".ai-viewport-" . $viewport2 ['index'] . "                { display: inherit !important;}\n";

          }
          $viewport_styles .= "}\n";
        }
    }
  }
  return ($viewport_styles);
}

function get_main_alignment_css ($alt_styles_text) {
  if (strpos ($alt_styles_text, "||") !== false) {
    $styles = explode ("||", $alt_styles_text);
    return $styles [0];
  }
  return $alt_styles_text;
}

function ai_change_css ($css, $property, $value) {
  $styles = explode (';', $css);
  $replaced = false;
  foreach ($styles as $index => $style) {
    if (strpos (trim ($style), $property) === 0) {
      $styles [$index] = preg_replace ('/\:\s*(.+)/', ': ' . $value, $styles [$index]);
      $replaced = true;
      break;
    }
  }

  $new_style = implode (';', $styles);

  if (!$replaced) {
    $new_style = rtrim ($new_style, '; ');
    return  $new_style . '; ' . $property . ': ' . $value . ';';
  }

  return  $new_style;
}

function generate_alignment_css () {
  global $ai_db_options_extract, $block_object;

  $block_class_name = get_block_class_name (true) . '-';

  $styles = array ();

  $styles [AI_ALIGNMENT_DEFAULT]      = array (AI_TEXT_ENG_DEFAULT,      get_main_alignment_css (AI_ALIGNMENT_CSS_DEFAULT));
  $styles [AI_ALIGNMENT_LEFT]         = array (AI_TEXT_ENG_LEFT,         get_main_alignment_css (AI_ALIGNMENT_CSS_LEFT));
  $styles [AI_ALIGNMENT_RIGHT]        = array (AI_TEXT_ENG_RIGHT,        get_main_alignment_css (AI_ALIGNMENT_CSS_RIGHT));
  $styles [AI_ALIGNMENT_CENTER]       = array (AI_TEXT_ENG_CENTER,       get_main_alignment_css (AI_ALIGNMENT_CSS_CENTER));
  $styles [AI_ALIGNMENT_FLOAT_LEFT]   = array (AI_TEXT_ENG_FLOAT_LEFT,   get_main_alignment_css (AI_ALIGNMENT_CSS_FLOAT_LEFT));
  $styles [AI_ALIGNMENT_FLOAT_RIGHT]  = array (AI_TEXT_ENG_FLOAT_RIGHT,  get_main_alignment_css (AI_ALIGNMENT_CSS_FLOAT_RIGHT));

  if (function_exists ('generate_alignment_css_2')) $styles = array_replace ($styles, generate_alignment_css_2 ());

  $alignment_css = '';
  $alignments = array ();
  $used_blocks = unserialize ($ai_db_options_extract [AI_EXTRACT_USED_BLOCKS]);
  foreach ($used_blocks as $used_block) {
    $obj = $block_object [$used_block];
    $alignment_type = $obj->get_alignment_type ();

    switch ($alignment_type) {
      case AI_ALIGNMENT_DEFAULT:
      case AI_ALIGNMENT_LEFT:
      case AI_ALIGNMENT_RIGHT:
      case AI_ALIGNMENT_CENTER:
      case AI_ALIGNMENT_FLOAT_LEFT:
      case AI_ALIGNMENT_FLOAT_RIGHT:
      case AI_ALIGNMENT_STICKY_LEFT:
      case AI_ALIGNMENT_STICKY_RIGHT:
      case AI_ALIGNMENT_STICKY_TOP:
      case AI_ALIGNMENT_STICKY_BOTTOM:
        $alignment_name = strtolower ($styles [$alignment_type][0]);
        if (!in_array ($alignment_name, $alignments)) {
          $alignments []= $alignment_name;
          $alignment_css .= '.' . $block_class_name . str_replace (' ', '-', $alignment_name) .' {' . $styles [$alignment_type][1] . "}\n";
        }
        break;
      case AI_ALIGNMENT_STICKY:
        $sticky_css = $obj->alignment_style ($alignment_type);
        $alignment_name = strtolower (md5 ($sticky_css));
        if (!in_array ($alignment_name, $alignments)) {
          $alignments []= $alignment_name;
          $alignment_css .= '.' . $block_class_name . str_replace (' ', '-', $alignment_name) .' {' . $sticky_css . "}\n";
        }
        break;
      case AI_ALIGNMENT_CUSTOM_CSS:
        $custom_css = $obj->get_custom_css ();
        $alignment_name = strtolower (md5 ($custom_css));
        if (!in_array ($alignment_name, $alignments)) {
          $alignments []= $alignment_name;
          $alignment_css .= '.' . $block_class_name . str_replace (' ', '-', $alignment_name) .' {' . str_replace ('&#039;', "'", $custom_css) . "}\n";
        }
        break;
    }
  }

  return $alignment_css;
}

function generate_debug_css_base () {
?>

.ai-debug-block {padding: 0; margin: 0;}

<?php
}

function generate_debug_css () {
?>

.ai-debug-tags {font-weight: bold; color: white; padding: 2px;}
.ai-debug-positions {clear: both; text-align: center; padding: 10px 0; font-family: arial; font-weight: bold; line-height: 20px; border: 1px solid blue; color: blue; background: #eef;}
.ai-debug-positions.ai-images {border: 1px solid #444; color: #444; background: #fff9ab;}
.ai-debug-page-type {text-align: center; padding: 10px 0; font-family: arial; font-weight: bold; line-height: 20px; border: 1px solid #000; color: #000; background: #fff;}
.ai-debug-status {clear: both; text-align: center; padding: 10px 0; font-family: arial; font-weight: bold; line-height: 20px; border: 1px solid #eee; color: #666; background: #eee;}
.ai-debug-status.status-ok, .ai-debug-status.adb-off {border: 1px solid green; color: green; background: #efe;}
.ai-debug-status.status-error, .ai-debug-status.adb-on {border: 1px solid red; color: red; background: #fee;}
.ai-debug-adb {opacity: 0.85; cursor: pointer;}
.ai-debug-widget {margin: 0; padding: 0 5px; font-size: 10px; white-space: pre; overflow-x: auto; overflow-y: hidden;}
a.ai-debug-left {float: left; cursor: default; font-size: 10px; text-decoration: none; color: transparent; padding: 0px 10px 0 0; border: 0; box-shadow: none;}
a.ai-debug-right {float: right; cursor: default; font-size: 10px; text-decoration: none; color: #88f; padding: 0px 10px 0 0; border: 0; box-shadow: none;}
a.ai-debug-center {text-align: center; cursor: default; font-size: 10px; text-decoration: none; color: white; padding: 0px 10px 0 0; border: 0; box-shadow: none;}
.ai-debug-invisible {display: none;}
.ai-debug-content-hook-positions {color: blue;}
.ai-debug-removed-html-tags {color: red;}
.ai-debug-rnrn {background: #0ff; color: #000;}
.ai-debug-p {background: #0a0;}
.ai-debug-div {background: #46f;}
.ai-debug-h {background: #d4e;}
.ai-debug-img {background: #ee0; color: #000;}
.ai-debug-pre {background: #222;}
.ai-debug-span {background: #cff; color: #000;}
.ai-debug-special {background: #fb0; color: #000;}

.ai-debug-ad-overlay {position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: #8f8; opacity: 0.6; z-index: 999999990}
.ai-auto-ads {background-color: #84f;}
.ai-no-slot {background-color: #48f;}
.ai-debug-ad-info {position: absolute; top: 0; left: 0; overflow: hidden; width: auto; height: auto; font-family: arial; font-size: 11px; line-height: 11px; text-align: left; z-index: 999999991;}
.ai-info {display: inline-block; padding: 2px 4px;}
.ai-info-1 {background: #000; color: #fff;}
.ai-info-2 {background: #fff; color: #000;}

.ai-debug-block {outline: 1px solid;}

.ai-debug-code {margin: 0; padding: 0; border: 0; font-family: monospace, sans-serif; font-size: 12px; line-height: 13px; background: #fff; color: #000;}

.ai-debug-code.ai-code-org {float: left; max-width: 48%;}
.ai-debug-code.ai-code-inserted {float: right; max-width: 48%;}

.ai-debug-block.ai-debug-default {border-color: #e00; outline-color: #e00;}
.ai-debug-bar.ai-debug-default {background: #e00;}

.ai-debug-block.ai-debug-viewport-invisible {border-color: #00f; outline-color: #00f;}
.ai-debug-bar.ai-debug-viewport-invisible {background: #00f;}

.ai-debug-block.ai-debug-amp {border-color: #0c0; outline-color: #0c0;}
.ai-debug-bar.ai-debug-amp {background: #0c0;}

.ai-debug-block.ai-debug-fallback {border-color: #a0f; outline-color: #a0f;}
.ai-debug-bar.ai-debug-fallback {background: #a0f;}

.ai-debug-block.ai-debug-script {border-color: #00bae6; outline-color: #00bae6; background: #eee;}
.ai-debug-bar.ai-debug-script {background: #00bae6;}

.ai-debug-block.ai-debug-cookie {border-color: #9be3ff; outline-color: #9be3ff; background: #eee;}
.ai-debug-bar.ai-debug-cookie {background: #9be3ff;}
.ai-debug-bar.ai-debug-cookie kbd {color: #000;}

.ai-debug-block.ai-debug-adb-status {border-color: #000; outline-color: #000;}
.ai-debug-bar.ai-debug-adb-status {background: #000;}

.ai-debug-block.ai-debug-adsense {border-color: #e0a; outline-color: #e0a;}
.ai-debug-bar.ai-debug-adsense {background: #e0a;}

.ai-debug-block.ai-debug-adsense.ai-adsense-auto-ads {position: absolute; top: -20px; width: 100%;}

.ai-debug-block.ai-debug-ajax {border-color: #ffd600; outline-color: #ffd600;}
.ai-debug-bar.ai-debug-ajax {background: #ffd600;}
.ai-debug-bar.ai-debug-ajax kbd {color: #000;}

.ai-debug-block.ai-debug-iframe {border-color: #ff9e38; outline-color: #ff9e38; line-height: 1px;}
.ai-debug-bar.ai-debug-iframe {background: #ff9e38;}
.ai-debug-bar.ai-debug-iframe kbd {color: #000;}
.ai-debug-block.ai-debug-iframe .ai-attributes {line-height: initial;}

.ai-debug-adb-status.on kbd {color: #f00;}
.ai-debug-adb-status.off kbd {color: #0f0;}

.ai-debug-block.ai-debug-lists {border-color: #00c5be; outline-color: #00c5be;}
.ai-debug-bar.ai-debug-lists {background: #00c5be;}

.ai-debug-adb-hidden {visibility: hidden; display: none;}
.ai-debug-adb-center {text-align: center; font-weight: bold; margin: 0; padding: 4px 0;}

.ai-debug-bar {margin: 0; padding: 1px 0 1px 5px; color: white; font-size: 12px; font-family: arial; font-weight: normal; line-height: 20px; text-align: center; overflow: hidden; word-break: break-word;}

.ai-debug-bar .ai-debug-text-left {float: left; text-align: left;}
.ai-debug-bar .ai-debug-text-right {float: right; padding-right: 3px;}
.ai-debug-bar .ai-debug-text-center {text-align: center;}

.ai-debug-message {text-align: center; font-weight: bold;}

.ai-debug-bar kbd {margin: 0; padding: 0; color: #fff; font-size: inherit; font-family: arial; background-color: transparent; text-shadow: none; border: 0; box-shadow: none;}

.ai-debug-block pre {margin: 0; padding: 2px 5px 2px; line-height: 14px;}

.ai-debug-visibility-hidden {visibility: hidden}

.ai-debug-display-none {display: none}

<?php
}

function generate_selection_css () {
?>
#ai-selector-data {
  position: fixed;
  top: 0;
  z-index: 999999;
  background: #fff;
  width: 100%;
  border: 1px solid #000;
}
#ai-selector-data kbd {
  background-color: #fff;
  box-shadow: none;
}
#ai-selector-data table {
  width: 100%;
  margin: 5px;
}
#ai-selector-data td {
  padding: 5px 10px;
  vertical-align: middle;
}
#ai-selector-data td button {
  margin: 0 15px;
}
#ai-selector-data .ui-button-text-only .ui-button-text {
  padding: 3px 10px;
}
#ai-selector-data td.data-name {
  width: 100px;
}
#ai-selector-element, #ai-selector-path {
  user-select: text;
}
#ai-selector {
  width: 100%;
  display: inline-block;
  border-radius: 4px;
  font-size: 12px;
  font-family: Courier, 'Courier New', monospace;
  font-weight: bold;
}
.ai-highlighted {
  outline: 3px dashed #00f;
  background: rgba(50, 140, 220, 0.2);
  cursor: default;
}
.ai-selected {
  outline: 3px dashed #f00;
  background: rgba(255, 0, 0, 0.2);
}
.ai-highlighted.ai-selected {
}
.ai-html-element {
  color: #00a;
  cursor: pointer;
}
.ai-html-element:hover {
  color: #00f;
}
<?php
}

function ai_settings () {
  global $ai_db_options, $block_object, $wpdb, $ai_db_options_extract;

  if (!current_user_can ('activate_plugins')) {
    return;
  }

  if (isset ($_POST [AI_FORM_SAVE])) {

//    echo count ($_POST);
//    print_r ($_POST);

    check_admin_referer ('save_adinserter_settings');

    $subpage = 'main';
    $start =  1;
    $end   = 16;

    if (isset ($_GET ['subpage'])) $subpage = $_GET ['subpage'];

    if (isset ($_GET ['start'])) $start = $_GET ['start']; else $start = 1;
    if (!is_numeric ($start)) $start = 1;
    if ($start < 1 || $start > 96) $start = 1;
    $end = $start + 15;
    if ($end > 96) $end = 96;

    $invalid_blocks = array ();

    $import_switch_name = AI_OPTION_IMPORT . WP_FORM_FIELD_POSTFIX . '0';
    if (isset ($_POST [$import_switch_name]) && $_POST [$import_switch_name] == "1") {
      // Import Ad Inserter settings
      $ai_options = @unserialize (base64_decode (str_replace (array ("\\\""), array ("\""), $_POST ["export_settings_0"])));

      if ($ai_options === false) {
        // Use saved settings
        $ai_options = wp_slash ($ai_db_options);
        $invalid_blocks []= 0;
      } else $ai_options = wp_slash ($ai_options);
    } else {
        // Try to import individual settings
        $ai_options = array ();

        $default_block = new ai_Block (1);
        for ($block = 1; $block <= 96; $block ++) {
          if (isset ($ai_db_options [$block])) $saved_settings = wp_slash ($ai_db_options [$block]); else
            $saved_settings = array ();

          if ($block < $start || $block > $end) {
            // Block not on the settings page
            $ai_options [$block] = $saved_settings;
            continue;
          }

          $import_switch_name      = AI_OPTION_IMPORT      . WP_FORM_FIELD_POSTFIX . $block;
          $import_name_switch_name = AI_OPTION_IMPORT_NAME . WP_FORM_FIELD_POSTFIX . $block;
          if (isset ($_POST [$import_switch_name]) && $_POST [$import_switch_name] == "1") {

            // Try to import block settings
            $exported_settings = @unserialize (base64_decode (str_replace (array ("\\\""), array ("\""), $_POST ["export_settings_" . $block])));

            if ($exported_settings !== false) {
              $exported_settings = wp_slash ($exported_settings);
              foreach (array_keys ($default_block->wp_options) as $key){
                if ($key == AI_OPTION_BLOCK_NAME && isset ($_POST [$import_name_switch_name]) && $_POST [$import_name_switch_name] != "1") {
                  $form_field_name = $key . WP_FORM_FIELD_POSTFIX . $block;
                  if (isset ($_POST [$form_field_name])){
                    $ai_options [$block][$key] = filter_option ($key, $_POST [$form_field_name]);
                  }
                } else {
                    if (isset ($exported_settings [$key])) {
                      $ai_options [$block][$key] = filter_option ($key, $exported_settings [$key], false);
                    }
                  }
              }
            } else {
                // Block import failed - use existing settings
                $default_block->wp_options = $saved_settings;
                $invalid_blocks []= $block;
              }
          } else {
              // Process block settings
              foreach (array_keys ($default_block->wp_options) as $key){
                $form_field_name = $key . WP_FORM_FIELD_POSTFIX . $block;
                if (isset ($_POST [$form_field_name])){
                  $field_value = $_POST [$form_field_name];

                  if ($key == AI_OPTION_CODE && strpos ($field_value, ':AI:') === 0) {
                    $field_value = wp_slash (base64_decode (substr ($field_value, 4)));
                  }

                  $ai_options [$block][$key] = filter_option ($key, $field_value);
                }
              }
            }

          delete_option (str_replace ("#", $block, AD_ADx_OPTIONS));
        }

        $default_block_H  = new ai_AdH();
        $wp_options = array ();
        foreach(array_keys ($default_block_H->wp_options) as $key){
          $form_field_name = $key . WP_FORM_FIELD_POSTFIX . AI_HEADER_OPTION_NAME;
          if(isset ($_POST [$form_field_name])){
            $field_value = $_POST [$form_field_name];

            if ($key == AI_OPTION_CODE && strpos ($field_value, ':AI:') === 0) {
              $field_value = wp_slash (base64_decode (substr ($field_value, 4)));
            }

            $wp_options [$key] = filter_option_hf ($key, $field_value);
          }
        }
        $ai_options [AI_HEADER_OPTION_NAME] = $wp_options;

        $default_block_F  = new ai_AdF();
        $wp_options = array ();
        foreach(array_keys($default_block_F->wp_options) as $key){
          $form_field_name = $key . WP_FORM_FIELD_POSTFIX . AI_FOOTER_OPTION_NAME;
          if(isset ($_POST [$form_field_name])){
            $field_value = $_POST [$form_field_name];

            if ($key == AI_OPTION_CODE && strpos ($field_value, ':AI:') === 0) {
              $field_value = wp_slash (base64_decode (substr ($field_value, 4)));
            }

            $wp_options [$key] = filter_option_hf ($key, $field_value);
          }
        }
        $ai_options [AI_FOOTER_OPTION_NAME] = $wp_options;

        if (defined ('AI_ADBLOCKING_DETECTION') && AI_ADBLOCKING_DETECTION) {
          $default_block_A  = new ai_AdA();
          $wp_options = array ();
          foreach(array_keys($default_block_A->wp_options) as $key){
            $form_field_name = $key . WP_FORM_FIELD_POSTFIX . AI_ADB_MESSAGE_OPTION_NAME;
            if(isset ($_POST [$form_field_name])){
              $field_value = $_POST [$form_field_name];

              if ($key == AI_OPTION_CODE && strpos ($field_value, ':AI:') === 0) {
                $field_value = wp_slash (base64_decode (substr ($field_value, 4)));
              }

              $wp_options [$key] = filter_option_hf ($key, $field_value);
            }
          }
          $ai_options [AI_ADB_MESSAGE_OPTION_NAME]  = $wp_options;
        }

        $options = array ();

        if (function_exists ('ai_filter_global_settings')) ai_filter_global_settings ($options);

        if (isset ($_POST ['syntax-highlighter-theme']))            $options ['SYNTAX_HIGHLIGHTER_THEME']     = filter_string ($_POST ['syntax-highlighter-theme']);
        if (isset ($_POST ['block-class-name']))                    $options ['BLOCK_CLASS_NAME']             = filter_html_class ($_POST ['block-class-name']);
        if (isset ($_POST ['block-class']))                         $options ['BLOCK_CLASS']                  = filter_option ('BLOCK_CLASS',                   $_POST ['block-class']);
        if (isset ($_POST ['block-number-class']))                  $options ['BLOCK_NUMBER_CLASS']           = filter_option ('BLOCK_NUMBER_CLASS',            $_POST ['block-number-class']);
        if (isset ($_POST ['inline-styles']))                       $options ['INLINE_STYLES']                = filter_option ('INLINE_STYLES',                 $_POST ['inline-styles']);
        if (isset ($_POST ['minimum-user-role']))                   $options ['MINIMUM_USER_ROLE']            = filter_string ($_POST ['minimum-user-role']);
        if (isset ($_POST ['sticky-widget-mode']))                  $options ['STICKY_WIDGET_MODE']           = filter_option ('STICKY_WIDGET_MODE',            $_POST ['sticky-widget-mode']);
        if (isset ($_POST ['sticky-widget-margin']))                $options ['STICKY_WIDGET_MARGIN']         = filter_option ('STICKY_WIDGET_MARGIN',          $_POST ['sticky-widget-margin']);
        if (isset ($_POST ['lazy-loading-offset']))                 $options ['LAZY_LOADING_OFFSET']          = filter_option ('LAZY_LOADING_OFFSET',           $_POST ['lazy-loading-offset']);
        if (isset ($_POST ['max-page-blocks']))                     $options ['MAX_PAGE_BLOCKS']              = filter_option ('MAX_PAGE_BLOCKS',               $_POST ['max-page-blocks']);
        if (isset ($_POST ['plugin_priority']))                     $options ['PLUGIN_PRIORITY']              = filter_option ('PLUGIN_PRIORITY',               $_POST ['plugin_priority']);
        if (isset ($_POST ['dynamic_blocks']))                      $options ['DYNAMIC_BLOCKS']               = filter_option ('DYNAMIC_BLOCKS',                $_POST ['dynamic_blocks']);
        if (isset ($_POST ['paragraph_counting_functions']))        $options ['PARAGRAPH_COUNTING_FUNCTIONS'] = filter_option ('PARAGRAPH_COUNTING_FUNCTIONS',  $_POST ['paragraph_counting_functions']);
        if (isset ($_POST ['output-buffering']))                    $options ['OUTPUT_BUFFERING']             = filter_option ('OUTPUT_BUFFERING',              $_POST ['output-buffering']);
        if (isset ($_POST ['disable-caching-admin']))               $options ['DISABLE_CACHING']              = filter_option ('DISABLE_CACHING',               $_POST ['disable-caching-admin']);
        if (isset ($_POST ['no-paragraph-counting-inside']))        $options ['NO_PARAGRAPH_COUNTING_INSIDE'] = filter_option ('NO_PARAGRAPH_COUNTING_INSIDE',  $_POST ['no-paragraph-counting-inside']);
        if (isset ($_POST ['ad-label']))                            $options ['AD_LABEL']                     = filter_option ('AD_LABEL',                      $_POST ['ad-label']);
        if (isset ($_POST ['main-content-element']))                $options ['MAIN_CONTENT_ELEMENT']         = filter_option ('MAIN_CONTENT_ELEMENT',          $_POST ['main-content-element']);
        if (isset ($_POST [AI_OPTION_ADB_ACTION]))                  $options ['ADB_ACTION']                   = filter_option ('ADB_ACTION',                    $_POST [AI_OPTION_ADB_ACTION]);
        if (isset ($_POST [AI_OPTION_ADB_NO_ACTION]))               $options ['ADB_NO_ACTION']                = filter_option ('ADB_NO_ACTION',                 $_POST [AI_OPTION_ADB_NO_ACTION]);
        if (isset ($_POST [AI_OPTION_ADB_DELAY_ACTION]))            $options ['ADB_DELAY_ACTION']             = filter_option ('ADB_DELAY_ACTION',              $_POST [AI_OPTION_ADB_DELAY_ACTION]);
        if (isset ($_POST [AI_OPTION_ADB_NO_ACTION_PERIOD]))        $options ['ADB_NO_ACTION_PERIOD']         = filter_option ('ADB_NO_ACTION_PERIOD',          $_POST [AI_OPTION_ADB_NO_ACTION_PERIOD]);
        if (isset ($_POST [AI_OPTION_ADB_SELECTORS]))               $options ['ADB_SELECTORS']                = filter_option ('ADB_SELECTORS',                 $_POST [AI_OPTION_ADB_SELECTORS]);
        if (isset ($_POST [AI_OPTION_ADB_REDIRECTION_PAGE]))        $options ['ADB_REDIRECTION_PAGE']         = filter_option ('ADB_REDIRECTION_PAGE',          $_POST [AI_OPTION_ADB_REDIRECTION_PAGE]);
        if (isset ($_POST [AI_OPTION_ADB_CUSTOM_REDIRECTION_URL]))  $options ['ADB_CUSTOM_REDIRECTION_URL']   = filter_option ('ADB_CUSTOM_REDIRECTION_URL',    $_POST [AI_OPTION_ADB_CUSTOM_REDIRECTION_URL]);
        if (isset ($_POST [AI_OPTION_ADB_MESSAGE_CSS]))             $options ['ADB_MESSAGE_CSS']              = filter_option ('ADB_MESSAGE_CSS',               $_POST [AI_OPTION_ADB_MESSAGE_CSS]);
        if (isset ($_POST [AI_OPTION_ADB_OVERLAY_CSS]))             $options ['ADB_OVERLAY_CSS']              = filter_option ('ADB_OVERLAY_CSS',               $_POST [AI_OPTION_ADB_OVERLAY_CSS]);
        if (isset ($_POST [AI_OPTION_ADB_UNDISMISSIBLE_MESSAGE]))   $options ['ADB_UNDISMISSIBLE_MESSAGE']    = filter_option ('ADB_UNDISMISSIBLE_MESSAGE',     $_POST [AI_OPTION_ADB_UNDISMISSIBLE_MESSAGE]);
        if (isset ($_POST [AI_OPTION_ADB_NO_UNDISMISSIBLE_MESSAGE]))$options ['ADB_NO_UNDISMISSIBLE_MESSAGE'] = filter_option ('ADB_NO_UNDISMISSIBLE_MESSAGE',  $_POST [AI_OPTION_ADB_NO_UNDISMISSIBLE_MESSAGE]);
        if (isset ($_POST ['force_admin_toolbar']))                 $options ['FORCE_ADMIN_TOOLBAR']          = filter_option ('FORCE_ADMIN_TOOLBAR',           $_POST ['force_admin_toolbar']);
        if (isset ($_POST ['admin_toolbar_debugging']))             $options ['ADMIN_TOOLBAR_DEBUGGING']      = filter_option ('ADMIN_TOOLBAR_DEBUGGING',       $_POST ['admin_toolbar_debugging']);
        if (isset ($_POST ['admin_toolbar_mobile']))                $options ['ADMIN_TOOLBAR_MOBILE']         = filter_option ('ADMIN_TOOLBAR_MOBILE',          $_POST ['admin_toolbar_mobile']);
        if (isset ($_POST ['remote_debugging']))                    $options ['REMOTE_DEBUGGING']             = filter_option ('REMOTE_DEBUGGING',              $_POST ['remote_debugging']);
        if (isset ($_POST ['disable_translation']))                 $options ['DISABLE_TRANSLATION']          = filter_option ('DISABLE_TRANSLATION',           $_POST ['disable_translation']);
        if (isset ($_POST ['backend_js_debugging']))                $options ['BACKEND_JS_DEBUGGING']         = filter_option ('BACKEND_JS_DEBUGGING',          $_POST ['backend_js_debugging']);
        if (isset ($_POST ['frontend_js_debugging']))               $options ['FRONTEND_JS_DEBUGGING']        = filter_option ('FRONTEND_JS_DEBUGGING',         $_POST ['frontend_js_debugging']);
        if (isset ($_POST ['disable-blocks']))                      $options ['DISABLE_BLOCK_INSERTIONS']     = filter_option ('DISABLE_BLOCK_INSERTIONS',      $_POST ['disable-blocks']);
        if (isset ($_POST ['disable-php-processing']))              $options ['DISABLE_PHP_PROCESSING']       = filter_option ('DISABLE_PHP_PROCESSING',        $_POST ['disable-php-processing']);
        if (isset ($_POST ['disable-css-code']))                    $options ['DISABLE_CSS_CODE']             = filter_option ('DISABLE_CSS_CODE',              $_POST ['disable-css-code']);
        if (isset ($_POST ['disable-js-code']))                     $options ['DISABLE_JS_CODE']              = filter_option ('DISABLE_JS_CODE',               $_POST ['disable-js-code']);
        if (isset ($_POST ['disable-footer-code']))                 $options ['DISABLE_FOOTER_CODE']          = filter_option ('DISABLE_FOOTER_CODE',           $_POST ['disable-footer-code']);
        if (isset ($_POST ['disable-header-code']))                 $options ['DISABLE_HEADER_CODE']          = filter_option ('DISABLE_HEADER_CODE',           $_POST ['disable-header-code']);

        for ($viewport = 1; $viewport <= 6; $viewport ++) {
          if (isset ($_POST ['viewport-name-'.$viewport]))  $options ['VIEWPORT_NAME_'.$viewport]   = filter_string ($_POST ['viewport-name-'.$viewport]);
          if (isset ($_POST ['viewport-width-'.$viewport])) $options ['VIEWPORT_WIDTH_'.$viewport]  = filter_option ('viewport_width', $_POST ['viewport-width-'.$viewport]);
        }

        for ($hook = 1; $hook <= 8; $hook ++) {
          if (isset ($_POST ['hook-enabled-'.$hook]))  $options ['HOOK_ENABLED_'.$hook]   = filter_option ('HOOK_ENABLED', $_POST ['hook-enabled-'.$hook]);
          if (isset ($_POST ['hook-name-'.$hook]))     $options ['HOOK_NAME_'.$hook]      = filter_string_tags ($_POST ['hook-name-'.$hook]);
          if (isset ($_POST ['hook-action-'.$hook]))   $options ['HOOK_ACTION_'.$hook]    = filter_string ($_POST ['hook-action-'.$hook]);
          if (isset ($_POST ['hook-priority-'.$hook])) $options ['HOOK_PRIORITY_'.$hook]  = filter_option ('HOOK_PRIORITY', $_POST ['hook-priority-'.$hook]);
        }

//        $options ['VIEWPORT_CSS']  = generate_viewport_css ();
//        $options ['ALIGNMENT_CSS'] = generate_alignment_css ();

        $ai_options [AI_OPTION_GLOBAL] = ai_check_plugin_options ($options);
      }

    if (!empty ($invalid_blocks)) {
      if ($invalid_blocks [0] == 0) {                                                               // translators: %s: Ad Inserter
             echo '<div class="error" style="margin: 5px 15px 2px 0px; padding: 10px;">', sprintf (__('Error importing %s settings.', 'ad-inserter'), AD_INSERTER_NAME), '</div>';
      } else echo '<div class="error" style="margin: 5px 15px 2px 0px; padding: 10px;">', _n('Error importing settings for block', 'Error importing settings for blocks:', count ($invalid_blocks), 'ad-inserter') , ' ', implode (', ', $invalid_blocks), '.</div>';
    }

    // Generate and save extract
    // Save new options as some function may need new settings
    update_option (AI_OPTION_NAME, $ai_options);
    ai_load_settings ();

    $ai_options [AI_OPTION_EXTRACT] = ai_generate_extract ($ai_options);
    $ai_db_options_extract = $ai_options [AI_OPTION_EXTRACT];

    $ai_options [AI_OPTION_GLOBAL]['VIEWPORT_CSS']  = generate_viewport_css ();
    $ai_options [AI_OPTION_GLOBAL]['ALIGNMENT_CSS'] = generate_alignment_css ();

    $ai_options [AI_OPTION_GLOBAL]['TIMESTAMP'] = time ();

    if (!get_option (AI_INSTALL_NAME)) {
      update_option (AI_INSTALL_NAME, time ());
    }

    update_option (AI_OPTION_NAME, $ai_options);

    update_option (AI_EXTRACT_NAME, $ai_db_options_extract);

    // Multisite
    if (is_multisite () && is_main_site ()) {
      $options = array ();
      if (function_exists ('ai_filter_multisite_settings')) ai_filter_multisite_settings ($options);
      ai_check_multisite_options ($options);
      update_site_option (AI_OPTION_NAME, $options);
    }

    ai_load_settings ();

    if (function_exists ('ai_load_globals')) ai_load_globals ();

    if (defined ('AI_PLUGIN_TRACKING') && AI_PLUGIN_TRACKING) {
      if (isset ($_POST ['plugin-usage-tracking'])) {
        global $ai_dst;
        if (isset ($ai_dst) && is_object ($ai_dst)) {
          $ai_dst->set_tracking ((bool) $_POST ['plugin-usage-tracking']);
        }
      }
    }

    delete_option (str_replace ("#", "Header", AD_ADx_OPTIONS));
    delete_option (str_replace ("#", "Footer", AD_ADx_OPTIONS));
    delete_option (AD_OPTIONS);

    echo '<div class="notice notice-success is-dismissible" style="margin: 5px 15px 2px 0px;"><p><strong>' . __('Settings saved.', 'ad-inserter') . '</strong></p></div>';
  } elseif (isset ($_POST [AI_FORM_CLEAR])) {

      check_admin_referer ('save_adinserter_settings');

      for ($block = 1; $block <= 96; $block ++) {
        delete_option (str_replace ("#", $block, AD_ADx_OPTIONS));
      }

      delete_option (str_replace ("#", "Header", AD_ADx_OPTIONS));
      delete_option (str_replace ("#", "Footer", AD_ADx_OPTIONS));
      delete_option (AD_OPTIONS);

      delete_option (AI_OPTION_NAME);
      delete_option (AI_EXTRACT_NAME);

      if (is_multisite () && is_main_site ()) {
        delete_site_option (AI_OPTION_NAME);
      }

      delete_option (AI_ADSENSE_CLIENT_IDS);
      delete_option (AI_ADSENSE_AUTH_CODE);
      delete_option (AI_ADSENSE_OWN_IDS);

      delete_transient (AI_TRANSIENT_ADSENSE_TOKEN);
      delete_transient (AI_TRANSIENT_ADSENSE_ADS);

      delete_transient ('ai-close');

      if (function_exists ('ai_load_globals')) {
        delete_option (WP_AD_INSERTER_PRO_LICENSE);
        $wpdb->query ("DROP TABLE IF EXISTS " . AI_STATISTICS_DB_TABLE);

        delete_transient (AI_TRANSIENT_ADB_CLASS_1);
        delete_transient (AI_TRANSIENT_ADB_CLASS_2);
        delete_transient (AI_TRANSIENT_ADB_CLASS_3);
        delete_transient (AI_TRANSIENT_ADB_CLASS_4);
        delete_transient (AI_TRANSIENT_ADB_CLASS_5);
        delete_transient (AI_TRANSIENT_ADB_CLASS_6);
        delete_transient (AI_TRANSIENT_ADB_FILES_VERSION);
      }

      if (ai_current_user_role_ok () && (!is_multisite() || is_main_site () || multisite_exceptions_enabled ())) {

        $args = array (
          'public'    => true,
          '_builtin'  => false
        );
        $custom_post_types = get_post_types ($args, 'names', 'and');
        $screens = array_values (array_merge (array ('post', 'page'), $custom_post_types));

        $args = array (
          'posts_per_page'   => 100,
          'offset'           => 0,
          'category'         => '',
          'category_name'    => '',
          'orderby'          => 'type',
          'order'            => 'ASC',
          'include'          => '',
          'exclude'          => '',
          'meta_key'         => '_adinserter_block_exceptions',
          'meta_value'       => '',
          'post_type'        => $screens,
          'post_mime_type'   => '',
          'post_parent'      => '',
          'author'           => '',
          'author_name'      => '',
          'post_status'      => '',
          'suppress_filters' => true
        );
        $posts_pages = get_posts ($args);

        foreach ($posts_pages as $page) {
          delete_post_meta ($page->ID, '_adinserter_block_exceptions');
        }
      }

      ai_load_settings ();

      // Generate extract
      $ai_options [AI_OPTION_EXTRACT] = ai_generate_extract ($ai_options);
      $ai_db_options_extract = $ai_options [AI_OPTION_EXTRACT];

      if (function_exists ('ai_load_globals')) ai_load_globals ();

      echo '<div class="notice notice-warning is-dismissible" style="margin: 5px 15px 2px 0px;"><p><strong>' . __('Settings cleared.', 'ad-inserter') . '</strong></p></div>';
  } elseif (isset ($_POST [AI_FORM_CLEAR_EXCEPTIONS])) {
      if (ai_current_user_role_ok () && (!is_multisite() || is_main_site () || multisite_exceptions_enabled ())) {

        $args = array (
          'public'    => true,
          '_builtin'  => false
        );
        $custom_post_types = get_post_types ($args, 'names', 'and');
        $screens = array_values (array_merge (array ('post', 'page'), $custom_post_types));

        $args = array (
          'posts_per_page'   => 100,
          'offset'           => 0,
          'category'         => '',
          'category_name'    => '',
          'orderby'          => 'type',
          'order'            => 'ASC',
          'include'          => '',
          'exclude'          => '',
          'meta_key'         => '_adinserter_block_exceptions',
          'meta_value'       => '',
          'post_type'        => $screens,
          'post_mime_type'   => '',
          'post_parent'      => '',
          'author'           => '',
          'author_name'      => '',
          'post_status'      => '',
          'suppress_filters' => true
        );
        $posts_pages = get_posts ($args);

        if ($_POST [AI_FORM_CLEAR_EXCEPTIONS] == "\xe2\x9d\x8c") {
          foreach ($posts_pages as $page) {
            delete_post_meta ($page->ID, '_adinserter_block_exceptions');
          }
        }
        elseif (strpos ($_POST [AI_FORM_CLEAR_EXCEPTIONS], 'id=') === 0) {
          $id = str_replace ('id=', '', $_POST [AI_FORM_CLEAR_EXCEPTIONS]);
          if (is_numeric ($id)) {
            delete_post_meta ($id, '_adinserter_block_exceptions');
          }
        }
        elseif (is_numeric ($_POST [AI_FORM_CLEAR_EXCEPTIONS])) {
          foreach ($posts_pages as $page) {
            $post_meta = get_post_meta ($page->ID, '_adinserter_block_exceptions', true);
            $selected_blocks = explode (",", $post_meta);
            if (($key = array_search ($_POST [AI_FORM_CLEAR_EXCEPTIONS], $selected_blocks)) !== false) {
              unset ($selected_blocks [$key]);
              update_post_meta ($page->ID, '_adinserter_block_exceptions', implode (",", $selected_blocks));
            }
          }
        }
      }
  } elseif (isset ($_POST [AI_FORM_CLEAR_STATISTICS]) && is_numeric ($_POST [AI_FORM_CLEAR_STATISTICS])) {
      if ($_POST [AI_FORM_CLEAR_STATISTICS] != 0) {
        $wpdb->query ("DELETE FROM " . AI_STATISTICS_DB_TABLE . " WHERE block = " . $_POST [AI_FORM_CLEAR_STATISTICS]);
      } else $wpdb->query ("DROP TABLE IF EXISTS " . AI_STATISTICS_DB_TABLE);
  }

  generate_settings_form ();
}


function ai_adinserter ($ad_number = '', $ignore = ''){
  global $block_object, $ad_inserter_globals, $ai_wp_data, $ai_last_check;

  $debug_processing = ($ai_wp_data [AI_WP_DEBUGGING] & AI_DEBUG_PROCESSING) != 0;

  if ($ad_number == "") return "";
  if (!is_numeric ($ad_number)) return "";
  $ad_number = (int) $ad_number;
  if ($ad_number < 1 || $ad_number > 96) return "";

  $globals_name = AI_PHP_FUNCTION_CALL_COUNTER_NAME . $ad_number;

  if (!isset ($ad_inserter_globals [$globals_name])) {
    $ad_inserter_globals [$globals_name] = 1;
  } else $ad_inserter_globals [$globals_name] ++;

  if ($debug_processing) ai_log ("PHP FUNCTION CALL adinserter ($ad_number".($ignore == '' ? '' : (', \''.$ignore.'\'')).") [" . $ad_inserter_globals [$globals_name] . ']');

  $ai_wp_data [AI_CONTEXT] = AI_CONTEXT_PHP_FUNCTION;

  $ignore_array = array ();
  if (trim ($ignore) != '') {
    $ignore_array = explode (",", str_replace (" ", "", $ignore));
  }

  $obj = $block_object [$ad_number];
  $obj->clear_code_cache ();

  $ai_last_check = AI_CHECK_ENABLED_PHP;
  if (!$obj->get_enable_php_call ()) return "";
  if (!$obj->check_server_side_detection ()) return "";
  if (!$obj->check_page_types_lists_users (in_array ("page-type", $ignore_array))) return "";
  if (!$obj->check_filter ($ad_inserter_globals [$globals_name])) return "";
  if (!$obj->check_number_of_words ()) return "";

  if ($ai_wp_data [AI_WP_PAGE_TYPE] == AI_PT_POST || $ai_wp_data [AI_WP_PAGE_TYPE] == AI_PT_STATIC) {
    $meta_value = get_post_meta (get_the_ID (), '_adinserter_block_exceptions', true);
    $selected_blocks = explode (",", $meta_value);

    if (!$obj->check_post_page_exceptions ($selected_blocks)) return "";
  }

  $ai_last_check = AI_CHECK_INSERTION_NOT_DISABLED;
  if ($obj->get_disable_insertion () || get_disable_block_insertions ()) return "";

  // Last check before counter check before insertion
//  $ai_last_check = AI_CHECK_CODE;
//  if ($obj->ai_getCode () == '') return "";
  if ($obj->empty_code ()) return "";

  $max_page_blocks_enabled = $obj->get_max_page_blocks_enabled ();

  if ($max_page_blocks_enabled) {
    $ai_last_check = AI_CHECK_MAX_PAGE_BLOCKS;
    if ($ai_wp_data [AI_PAGE_BLOCKS] >= get_max_page_blocks ()) return "";
  }

  // Last check before insertion
  if (!$obj->check_and_increment_block_counter ()) return "";

  // Increment page block counter
  if ($max_page_blocks_enabled) $ai_wp_data [AI_PAGE_BLOCKS] ++;

  $ai_last_check = AI_CHECK_DEBUG_NO_INSERTION;
  if ($obj->get_debug_disable_insertion ()) return "";

  $code = $obj->get_code_for_serverside_insertion ();
  // Must be after get_code_for_serverside_insertion ()
  $ai_last_check = AI_CHECK_INSERTED;
  return $code;
}

function adinserter ($block = '', $ignore = '') {
  global $ai_last_check, $ai_wp_data, $ai_total_plugin_time;

  $debug_processing = ($ai_wp_data [AI_WP_DEBUGGING] & AI_DEBUG_PROCESSING) != 0;
  if ($debug_processing) {
    $ai_wp_data [AI_PROCESSING_TIME] = true;
    $start_time = microtime (true);
  }


  $ai_last_check = AI_CHECK_NONE;
  $code = ai_adinserter ($block, $ignore);

  if ($debug_processing) {
    $ai_total_plugin_time += microtime (true) - $start_time;
    if ($ai_last_check != AI_CHECK_NONE) ai_log (ai_log_block_status ($block, $ai_last_check));
    ai_log ("PHP FUNCTION CALL END: ". number_format (1000 * (microtime (true) - $start_time), 2)." ms\n");
    $ai_wp_data [AI_PROCESSING_TIME] = false;
  }

  return $code;
}



function ai_content_hook ($content = '') {
  global $block_object, $ad_inserter_globals, $ai_db_options_extract, $ai_wp_data, $ai_last_check, $ai_total_plugin_time, $special_element_tags;

  if ($ai_wp_data [AI_WP_PAGE_TYPE] == AI_PT_ADMIN) return $content;

  $debug_processing = ($ai_wp_data [AI_WP_DEBUGGING] & AI_DEBUG_PROCESSING) != 0;
  $globals_name = AI_CONTENT_COUNTER_NAME;

  $special_element_tags = explode (',', str_replace (' ', '', get_no_paragraph_counting_inside ()));

  if (!isset ($ad_inserter_globals [$globals_name])) {
    $ad_inserter_globals [$globals_name] = 1;
  } else $ad_inserter_globals [$globals_name] ++;

  if ($debug_processing) {
    ai_log ("CONTENT HOOK START [" . $ad_inserter_globals [$globals_name]  . (in_the_loop () ? ', IN THE LOOP' : ', NOT IN THE LOOP') . ']');
    $ai_wp_data [AI_PROCESSING_TIME] = true;
    $start_time = microtime (true);
  }

  $ai_wp_data [AI_CONTEXT] = AI_CONTEXT_CONTENT;

  $content_words = number_of_words ($content);
  if (($ai_wp_data [AI_WP_DEBUGGING] & AI_DEBUG_POSITIONS) != 0) {
    $preview = $block_object [0];
    $positions_inserted = false;

    if ($ai_wp_data [AI_WP_DEBUG_BLOCK] == 0) {
      $content = $preview->before_paragraph ($content, true);
      $content = $preview->after_paragraph ($content, true);
      $positions_inserted = true;
    }

    $content = $preview->before_paragraph ($content, true, true);
    $content = $preview->after_paragraph ($content, true, true);
  }

  if ($ai_db_options_extract [CONTENT_HOOK_BLOCKS][$ai_wp_data [AI_WP_PAGE_TYPE]]) {
    if ($debug_processing) ai_log_content ($content);

    if ($ai_wp_data [AI_WP_PAGE_TYPE] == AI_PT_POST || $ai_wp_data [AI_WP_PAGE_TYPE] == AI_PT_STATIC) {
      $meta_value = get_post_meta (get_the_ID (), '_adinserter_block_exceptions', true);
      $selected_blocks = explode (",", $meta_value);
    } else $selected_blocks = array ();

    $ai_last_check = AI_CHECK_NONE;
    $current_block = 0;
    $in_the_loop = in_the_loop ();

    if (isset ($ai_db_options_extract [CONTENT_HOOK_BLOCKS][$ai_wp_data [AI_WP_PAGE_TYPE]]))
    foreach ($ai_db_options_extract [CONTENT_HOOK_BLOCKS][$ai_wp_data [AI_WP_PAGE_TYPE]] as $block) {
      if ($debug_processing && $ai_last_check != AI_CHECK_NONE) ai_log (ai_log_block_status ($current_block, $ai_last_check));

      if (!isset ($block_object [$block])) continue;

      $ai_last_check = AI_CHECK_NONE;
      $current_block = $block;

      $obj = $block_object [$block];
      $obj->clear_code_cache ();

      if ($in_the_loop || !$obj->get_only_in_the_loop ()) {
        if (($ai_wp_data [AI_WP_DEBUGGING] & AI_DEBUG_POSITIONS) != 0 && !$positions_inserted && $ai_wp_data [AI_WP_DEBUG_BLOCK] <= $block) {
          $preview = $block_object [$ai_wp_data [AI_WP_DEBUG_BLOCK]];

          $content = $preview->before_paragraph ($content, true);
          $content = $preview->after_paragraph ($content, true);

          $positions_inserted = true;
        }

        if (!$obj->check_server_side_detection ()) continue;
        if (!$obj->check_page_types_lists_users ()) continue;
        if (!$obj->check_post_page_exceptions ($selected_blocks)) continue;
        if (!$obj->check_filter ($ad_inserter_globals [$globals_name])) continue;
        if (!$obj->check_number_of_words ($content, $content_words)) continue;

  //    Deprecated
        $ai_last_check = AI_CHECK_DISABLED_MANUALLY;
        if ($obj->display_disabled ($content)) continue;

        $ai_last_check = AI_CHECK_INSERTION_NOT_DISABLED;
        if ($obj->get_disable_insertion () || get_disable_block_insertions ()) continue;

        // Last check before counter check before insertion
//        $ai_last_check = AI_CHECK_CODE;
//        if ($obj->ai_getCode () == '') continue;
        if ($obj->empty_code ()) continue;

        $max_page_blocks_enabled = $obj->get_max_page_blocks_enabled ();
        if ($max_page_blocks_enabled) {
          $ai_last_check = AI_CHECK_MAX_PAGE_BLOCKS;
          if ($ai_wp_data [AI_PAGE_BLOCKS] >= get_max_page_blocks ()) continue;
        }

        // Last check before insertion
        if (!$obj->check_block_counter ()) continue;

        $automatic_insertion = $obj->get_automatic_insertion();

        if ($automatic_insertion == AI_AUTOMATIC_INSERTION_BEFORE_PARAGRAPH) {
          $ai_last_check = AI_CHECK_PARAGRAPH_COUNTING;
          $content = $obj->before_paragraph ($content);
        }
        elseif ($automatic_insertion == AI_AUTOMATIC_INSERTION_AFTER_PARAGRAPH) {
          $ai_last_check = AI_CHECK_PARAGRAPH_COUNTING;
          $content = $obj->after_paragraph ($content);
        }
        if ($automatic_insertion == AI_AUTOMATIC_INSERTION_BEFORE_IMAGE) {
          $ai_last_check = AI_CHECK_IMAGE_COUNTING;
          $content = $obj->before_image ($content);
        }
        elseif ($automatic_insertion == AI_AUTOMATIC_INSERTION_AFTER_IMAGE) {
          $ai_last_check = AI_CHECK_IMAGE_COUNTING;
          $content = $obj->after_image ($content);
        }
        elseif ($automatic_insertion == AI_AUTOMATIC_INSERTION_BEFORE_CONTENT) {
          $obj->increment_block_counter ();

          // Increment page block counter
          if ($max_page_blocks_enabled) $ai_wp_data [AI_PAGE_BLOCKS] ++;

          $ai_last_check = AI_CHECK_DEBUG_NO_INSERTION;
          if (!$obj->get_debug_disable_insertion ()) {
            $content = $obj->get_code_for_serverside_insertion () . $content;
            $ai_last_check = AI_CHECK_INSERTED;
          }
        }
        elseif ($automatic_insertion == AI_AUTOMATIC_INSERTION_AFTER_CONTENT) {
          $obj->increment_block_counter ();

          // Increment page block counter
          if ($max_page_blocks_enabled) $ai_wp_data [AI_PAGE_BLOCKS] ++;

          $ai_last_check = AI_CHECK_DEBUG_NO_INSERTION;
          if (!$obj->get_debug_disable_insertion ()) {
            $content = $content . $obj->get_code_for_serverside_insertion ();
            $ai_last_check = AI_CHECK_INSERTED;
          }
        }
      }
    }
    if ($debug_processing && $ai_last_check != AI_CHECK_NONE) ai_log (ai_log_block_status ($current_block, $ai_last_check));
  }


  if (function_exists ('ai_content')) ai_content ($content);

  if (($ai_wp_data [AI_WP_DEBUGGING] & AI_DEBUG_TAGS) != 0) {
    $class = AI_DEBUG_TAGS_CLASS;

    $content = preg_replace ("/\r\n\r\n/", "\r\n\r\n<kbd class='$class ai-debug-rnrn'>\\r\\n\\r\\n</kbd>", $content);

//    $content = preg_replace ("/<p>/i", "<p><kbd class='$class ai-debug-p'>&lt;p&gt;</kbd>", $content);
//    $content = preg_replace ("/<p ([^>]*?)>/i", "<p$1><kbd class='$class ai-debug-p'>&lt;p$1&gt;</kbd>", $content);          // Full p tags
    $content = preg_replace ("/<p([^>]*?)>/i", "<p$1><kbd class='$class ai-debug-p'>&lt;p&gt;</kbd>", $content);
//      $content = preg_replace ("/<div([^>]*?)>/i", "<div$1><kbd class='$class ai-debug-div'>&lt;div$1&gt;</kbd>", $content);  // Full div tags
    $content = preg_replace ("/<div([^>]*?)>/i", "<div$1><kbd class='$class ai-debug-div'>&lt;div&gt;</kbd>", $content);
    $content = preg_replace ("/<h([1-6])([^>]*?)>/i", "<h$1$2><kbd class='$class ai-debug-h'>&lt;h$1&gt;</kbd>", $content);
    $content = preg_replace ("/<img([^>]*?)>/i", "<img$1><kbd class='$class ai-debug-img'>&lt;img$1&gt;</kbd>", $content);
    $content = preg_replace ("/<pre([^>]*?)>/i", "<pre$1><kbd class='$class ai-debug-pre'>&lt;pre&gt;</kbd>", $content);
    $content = preg_replace ("/<span([^>]*?)>/i", "<kbd class='$class ai-debug-span'>&lt;span&gt;</kbd><span$1>", $content);
    $content = preg_replace ("/<(?!section|ins|script|kbd|a|strong|pre|span|p|div|h[1-6]|img)([a-z0-9]+)([^>]*?)>/i", "<$1$2><kbd class='$class ai-debug-special'>&lt;$1$2&gt;</kbd>", $content);

    $content = preg_replace ("/<\/p>/i", "<kbd class='$class ai-debug-p'>&lt;/p&gt;</kbd></p>", $content);
    $content = preg_replace ("/<\/div>/i", "<kbd class='$class ai-debug-div'>&lt;/div&gt;</kbd></div>", $content);
    $content = preg_replace ("/<\/h([1-6])>/i", "<kbd class='$class ai-debug-h'>&lt;/h$1&gt;</kbd></h$1>", $content);
    $content = preg_replace ("/<\/pre>/i", "<kbd class='$class ai-debug-pre'>&lt;/pre&gt;</kbd></pre>", $content);
    $content = preg_replace ("/<\/span>/i", "</span><kbd class='$class ai-debug-span'>&lt;/span&gt;</kbd>", $content);
    $content = preg_replace ("/<\/(?!section|ins|script|kbd|a|strong|pre|span|p|div|h[1-6])([a-z0-9]+)>/i", "<kbd class='$class ai-debug-special'>&lt;/$1&gt;</kbd></$1>", $content);
  }

  if (($ai_wp_data [AI_WP_DEBUGGING] & AI_DEBUG_POSITIONS) != 0) {
    $class = AI_DEBUG_POSITIONS_CLASS;

    if (!$positions_inserted) {
      $preview = $block_object [$ai_wp_data [AI_WP_DEBUG_BLOCK]];
      $content = $preview->before_paragraph ($content, true);
      $content = $preview->after_paragraph ($content, true);
    }

    if (preg_match_all ("/\[\[AI_BP([\d]+?)=([\d]+?)\]\]/", $content, $matches)) {
      foreach ($matches [0] as $index => $match) {
        $content = str_replace ($match,
          "<section data-ai-position='" .AI_AUTOMATIC_INSERTION_BEFORE_PARAGRAPH ."' class='$class'><a href='#' class='ai-debug-left ai-debug-visibility-hidden'><span class='ai-debug-display-none'>[(]</span>" . $matches [2][$index] . " " . _n('word', 'words', $matches [2][$index], 'ad-inserter') . '<span class="ai-debug-display-none">[)]</span></a>' .
          ($ai_wp_data [AI_MBSTRING_LOADED] ? mb_strtoupper (AI_TEXT_BEFORE_PARAGRAPH) : strtoupper (AI_TEXT_BEFORE_PARAGRAPH)) . ' ' . $matches [1][$index] .
          "<a href='#' class='ai-debug-right'><span class='ai-debug-display-none'>[(]</span>" . $matches [2][$index] . ' ' . _n('word', 'words', $matches [2][$index], 'ad-inserter') . '<span class="ai-debug-display-none">[)]</span></a></section>',
          $content);
      }
    }

    if (preg_match_all ("/\[\[AI_BI([\d]+?)=([\d]+?)\]\]/", $content, $matches)) {
      foreach ($matches [0] as $index => $match) {
        $content = str_replace ($match,
          "<section data-ai-position='" .AI_AUTOMATIC_INSERTION_BEFORE_IMAGE ."' class='$class ai-images'><a href='#' class='ai-debug-left ai-debug-visibility-hidden'><span class='ai-debug-display-none'>[(]</span>".'<span class="ai-debug-display-none">[)]</span></a>' .
          ($ai_wp_data [AI_MBSTRING_LOADED] ? mb_strtoupper (AI_TEXT_BEFORE_IMAGE) : strtoupper (AI_TEXT_BEFORE_IMAGE)) . ' ' . $matches [1][$index] .
          "<a href='#' class='ai-debug-right'><span class='ai-debug-display-none'>[(]</span>" . '<span class="ai-debug-display-none">[)]</span></a></section>',
          $content);
      }
    }

//    $content = preg_replace ("/\[\[AI_BP([\d]+?)=([\d]+?)\]\]/", "<section class='$class'><a class='ai-debug-left' style='visibility: hidden;'><span style='display: none'>[(]</span>$2 " . __('words', 'ad-inserter') . '[)]</a>' . ($ai_wp_data [AI_MBSTRING_LOADED] ? mb_strtoupper (AI_TEXT_BEFORE_PARAGRAPH) : strtoupper (AI_TEXT_BEFORE_PARAGRAPH)) . " $1<a class='ai-debug-right'><span style='display: none'>[(]</span>$2 " . __('word', 'words', 'ad-inserter') . '<span style="display: none">[)]</span></a></section>', $content);
    $content = preg_replace ("/\[\[AI_AP([\d]+?)\]\]/", "<section data-ai-position='" .AI_AUTOMATIC_INSERTION_AFTER_PARAGRAPH ."' class='$class'>" . ($ai_wp_data [AI_MBSTRING_LOADED] ? mb_strtoupper (AI_TEXT_AFTER_PARAGRAPH) : strtoupper (AI_TEXT_AFTER_PARAGRAPH)) . " $1</section>", $content);

    $content = preg_replace ("/\[\[AI_AI([\d]+?)\]\]/", "<section data-ai-position='" .AI_AUTOMATIC_INSERTION_AFTER_IMAGE ."' class='$class ai-images'>" . ($ai_wp_data [AI_MBSTRING_LOADED] ? mb_strtoupper (AI_TEXT_AFTER_IMAGE) : strtoupper (AI_TEXT_AFTER_IMAGE)) . " $1</section>", $content);

    $counter = $ad_inserter_globals [$globals_name];
    if ($counter == 1) $counter = '';

    $content = "<section data-ai-position='" .AI_AUTOMATIC_INSERTION_BEFORE_CONTENT ."' class='$class'><a href='#' class='ai-debug-left ai-debug-visibility-hidden'><span class='ai-debug-display-none'>[(]</span>".$content_words . ' ' . _n('word', 'words', $content_words, 'ad-inserter') . '</a> ' . ($ai_wp_data [AI_MBSTRING_LOADED] ? mb_strtoupper (AI_TEXT_BEFORE_CONTENT): strtoupper (AI_TEXT_BEFORE_CONTENT)) . ' '.$counter."<a href='#' class='ai-debug-right'>".$content_words.' ' . _n('word', 'words', $content_words, 'ad-inserter') . '<span class="ai-debug-display-none">[)]</span></a></section>'. $content;

    if ($ai_wp_data [AI_WP_AMP_PAGE]) {
      $content = get_page_type_debug_info ('AMP ') . $content;
    }

    $content = $content . "<section data-ai-position='" .AI_AUTOMATIC_INSERTION_AFTER_CONTENT ."' class='$class'>" . ($ai_wp_data [AI_MBSTRING_LOADED] ? mb_strtoupper (AI_TEXT_AFTER_CONTENT) : strtoupper (AI_TEXT_AFTER_CONTENT)) . ' '.$counter."</section>";

    if ($ai_wp_data [AI_WP_AMP_PAGE]) {
      $content = $content . get_page_type_debug_info ('AMP ');
    } else $content = $content . get_page_type_debug_info ('');
  }

  if (($ai_wp_data [AI_WP_DEBUGGING] & AI_DEBUG_TAGS) != 0) {
    $content = '<kbd class="ai-debug-invisible">[' . __('HTML TAGS REMOVED', 'ad-inserter') . ']</kbd>' . $content;
  }

  if ($debug_processing) {
    $ai_total_plugin_time += microtime (true) - $start_time;
    ai_log ("CONTENT HOOK END: ". number_format (1000 * (microtime (true) - $start_time), 2)." ms\n");
    $ai_wp_data [AI_PROCESSING_TIME] = false;
  }

  return $content;
}

// Process Before/After Excerpt postion
function ai_excerpt_hook ($content = '') {
  global $ad_inserter_globals, $block_object, $ai_db_options_extract, $ai_wp_data, $ai_last_check, $ai_total_plugin_time;

  if ($ai_wp_data [AI_WP_PAGE_TYPE] == AI_PT_ADMIN) return;

  $debug_processing = ($ai_wp_data [AI_WP_DEBUGGING] & AI_DEBUG_PROCESSING) != 0;
  $globals_name = AI_EXCERPT_COUNTER_NAME;

  if (!isset ($ad_inserter_globals [$globals_name])) {
    $ad_inserter_globals [$globals_name] = 1;
  } else $ad_inserter_globals [$globals_name] ++;

  if ($debug_processing) {
    ai_log ("EXCERPT HOOK START [" . $ad_inserter_globals [$globals_name] . ']');
    $ai_wp_data [AI_PROCESSING_TIME] = true;
    $start_time = microtime (true);
  }

  $ai_wp_data [AI_CONTEXT] = AI_CONTEXT_EXCERPT;

  $ai_last_check = AI_CHECK_NONE;
  $current_block = 0;

  if (isset ($ai_db_options_extract [EXCERPT_HOOK_BLOCKS][$ai_wp_data [AI_WP_PAGE_TYPE]]))
  foreach ($ai_db_options_extract [EXCERPT_HOOK_BLOCKS][$ai_wp_data [AI_WP_PAGE_TYPE]] as $block) {
    if ($debug_processing && $ai_last_check != AI_CHECK_NONE) ai_log (ai_log_block_status ($current_block, $ai_last_check));

    if (!isset ($block_object [$block])) continue;

    $current_block = $block;
    $obj = $block_object [$block];
    $obj->clear_code_cache ();

    if (!$obj->check_server_side_detection ()) continue;
    if (!$obj->check_page_types_lists_users ()) continue;
    if (!$obj->check_filter ($ad_inserter_globals [$globals_name])) continue;

    // Deprecated
    $ai_last_check = AI_CHECK_DISABLED_MANUALLY;
    if ($obj->display_disabled ($content)) continue;

    $ai_last_check = AI_CHECK_INSERTION_NOT_DISABLED;
    if ($obj->get_disable_insertion () || get_disable_block_insertions ()) continue;

    // Last check before counter check before insertion
//    $ai_last_check = AI_CHECK_CODE;
//    if ($obj->ai_getCode () == '') continue;
    if ($obj->empty_code ()) continue;

    $max_page_blocks_enabled = $obj->get_max_page_blocks_enabled ();
    if ($max_page_blocks_enabled) {
      $ai_last_check = AI_CHECK_MAX_PAGE_BLOCKS;
      if ($ai_wp_data [AI_PAGE_BLOCKS] >= get_max_page_blocks ()) continue;
    }

    // Last check before insertion
    if (!$obj->check_and_increment_block_counter ()) continue;

    // Increment page block counter
    if ($max_page_blocks_enabled) $ai_wp_data [AI_PAGE_BLOCKS] ++;

    $ai_last_check = AI_CHECK_DEBUG_NO_INSERTION;
    if (!$obj->get_debug_disable_insertion ()) {

      $automatic_insertion = $obj->get_automatic_insertion ();
      if ($automatic_insertion == AI_AUTOMATIC_INSERTION_BEFORE_EXCERPT)
        $content = $obj->get_code_for_serverside_insertion () . $content; else
          $content = $content . $obj->get_code_for_serverside_insertion ();

      $ai_last_check = AI_CHECK_INSERTED;
    }
  }

  if ($debug_processing && $ai_last_check != AI_CHECK_NONE) ai_log (ai_log_block_status ($current_block, $ai_last_check));

  if (($ai_wp_data [AI_WP_DEBUGGING] & AI_DEBUG_POSITIONS) != 0) {
    $class = AI_DEBUG_POSITIONS_CLASS;

    $content = "<section data-ai-position='" .AI_AUTOMATIC_INSERTION_BEFORE_EXCERPT ."' class='$class'>" . ($ai_wp_data [AI_MBSTRING_LOADED] ? mb_strtoupper (AI_TEXT_BEFORE_EXCERPT) : strtoupper (AI_TEXT_BEFORE_EXCERPT)) . ' ' . $ad_inserter_globals [$globals_name]."</section>".
      $content . "<section data-ai-position='" .AI_AUTOMATIC_INSERTION_AFTER_EXCERPT ."' class='$class'>" . ($ai_wp_data [AI_MBSTRING_LOADED] ? mb_strtoupper (AI_TEXT_AFTER_EXCERPT) : strtoupper (AI_TEXT_AFTER_EXCERPT)) . ' ' .$ad_inserter_globals [$globals_name]."</section>";


    // Remove word counts
    $content = preg_replace ("/\[\(\](.+?)\[\)\]/", "", $content);
    $content = preg_replace ("/\[\(\].*/", "", $content);

    // Color positions from the content hook
//    $content = preg_replace ("/((BEFORE|AFTER) (CONTENT|PARAGRAPH) ?[\d]*)/", "<span class='ai-debug-content-hook-positions'> [$1] </span>", $content);
    $content = preg_replace ("/(" . ($ai_wp_data [AI_MBSTRING_LOADED] ? mb_strtoupper (AI_TEXT_BEFORE_CONTENT) :   strtoupper (AI_TEXT_BEFORE_CONTENT)) . " ?[\d]*)/", "<span class='ai-debug-content-hook-positions'> [$1] </span>", $content);
    $content = preg_replace ("/(" . ($ai_wp_data [AI_MBSTRING_LOADED] ? mb_strtoupper (AI_TEXT_AFTER_CONTENT) :    strtoupper (AI_TEXT_AFTER_CONTENT)) . " ?[\d]*)/", "<span class='ai-debug-content-hook-positions'> [$1] </span>", $content);
    $content = preg_replace ("/(" . ($ai_wp_data [AI_MBSTRING_LOADED] ? mb_strtoupper (AI_TEXT_BEFORE_PARAGRAPH) : strtoupper (AI_TEXT_BEFORE_PARAGRAPH)) . " ?[\d]*)/", "<span class='ai-debug-content-hook-positions'> [$1] </span>", $content);
    $content = preg_replace ("/(" . ($ai_wp_data [AI_MBSTRING_LOADED] ? mb_strtoupper (AI_TEXT_AFTER_PARAGRAPH) :  strtoupper (AI_TEXT_AFTER_PARAGRAPH)) . " ?[\d]*)/", "<span class='ai-debug-content-hook-positions'> [$1] </span>", $content);
  }

  if (($ai_wp_data [AI_WP_DEBUGGING] & AI_DEBUG_TAGS) != 0) {
    // Remove marked tags from the content hook
    $content = preg_replace ("/&lt;(.+?)&gt;/", "", $content);

    // Color text to mark removed HTML tags
    $content = str_replace ('[' . __('HTML TAGS REMOVED', 'ad-inserter') . ']', '<span class="ai-debug-removed-html-tags">[' . __('HTML TAGS REMOVED', 'ad-inserter') . ']</span>', $content);
  }

  if (($ai_wp_data [AI_WP_DEBUGGING] & AI_DEBUG_BLOCKS) != 0) {
    // Remove block labels from the content hook
    if (strpos ($content, '>[AI]<') === false)
      $content = preg_replace ("/\[AI\](.+?)\[\/AI\]/", "", $content);
  }

  if ($debug_processing) {
    $ai_total_plugin_time += microtime (true) - $start_time;
    ai_log ("EXCERPT HOOK END: ". number_format (1000 * (microtime (true) - $start_time), 2)." ms\n");
    $ai_wp_data [AI_PROCESSING_TIME] = false;
  }

  return $content;
}

function ai_comments_array ($comments , $post_id ){
  global $ai_wp_data;

  $thread_comments = get_option ('thread_comments');
  $comment_counter = 0;
  foreach ($comments as $comment) {
    if (!$thread_comments || empty ($comment->comment_parent))
      $comment_counter ++;
  }
  $ai_wp_data [AI_NUMBER_OF_COMMENTS] = $comment_counter;

  return $comments;
}

function ai_wp_list_comments_args ($args) {
  global $ai_wp_data;

//  print_r ($args);
//  $args['per_page'] = 3;
//  $args['page'] = 2;

  $ai_wp_data ['AI_COMMENTS_SAVED_CALLBACK'] = $args ['callback'];
  $args ['callback'] = 'ai_comment_callback';

  $ai_wp_data ['AI_COMMENTS_SAVED_END_CALLBACK'] = $args ['end-callback'];
  $args ['end-callback'] = 'ai_comment_end_callback';

  return $args;
}

// Process comments counter + Before Comments postion
function ai_comment_callback ($comment, $args, $depth) {
  global $block_object, $ad_inserter_globals, $ai_db_options_extract, $ai_wp_data, $ai_last_check, $ai_total_plugin_time, $ai_walker;

  if ($depth == 1) {
    if (!isset ($ad_inserter_globals [AI_COMMENT_COUNTER_NAME])) {
      $ad_inserter_globals [AI_COMMENT_COUNTER_NAME] = 1;
    } else $ad_inserter_globals [AI_COMMENT_COUNTER_NAME] ++;
  }

  $debug_processing = ($ai_wp_data [AI_WP_DEBUGGING] & AI_DEBUG_PROCESSING) != 0;
  if ($debug_processing) {
    ai_log ('COMMENT START HOOK START [' . $ad_inserter_globals [AI_COMMENT_COUNTER_NAME] . ':'. $depth . ']');
    $ai_wp_data [AI_PROCESSING_TIME] = true;
    $start_time = microtime (true);
  }

  if ($depth == 1 && $ad_inserter_globals [AI_COMMENT_COUNTER_NAME] == 1) {

    $ai_wp_data [AI_CONTEXT] = AI_CONTEXT_BEFORE_COMMENTS;

    if ($args ['style'] == 'div') $tag = 'div'; else $tag = 'li';

    if (($ai_wp_data [AI_WP_DEBUGGING] & AI_DEBUG_POSITIONS) != 0) {

      $class = AI_DEBUG_POSITIONS_CLASS;

      echo "<$tag>\n";
      echo "<section data-ai-position='" .AI_AUTOMATIC_INSERTION_BEFORE_COMMENTS ."' class='$class'>" . __('BEFORE COMMENTS', 'ad-inserter') . '</section>';
      echo "</$tag>\n";
    }

    $ad_code = "";

    $ai_last_check = AI_CHECK_NONE;
    $current_block = 0;

    if (isset ($ai_db_options_extract [BEFORE_COMMENTS_HOOK_BLOCKS][$ai_wp_data [AI_WP_PAGE_TYPE]]))
    foreach ($ai_db_options_extract [BEFORE_COMMENTS_HOOK_BLOCKS][$ai_wp_data [AI_WP_PAGE_TYPE]] as $block) {
      if ($debug_processing && $ai_last_check != AI_CHECK_NONE) ai_log (ai_log_block_status ($current_block, $ai_last_check));

      if (!isset ($block_object [$block])) continue;

      $current_block = $block;

      $obj = $block_object [$block];
      $obj->clear_code_cache ();

      if (!$obj->check_server_side_detection ()) continue;
      if (!$obj->check_page_types_lists_users ()) continue;
      // No filter check

      $ai_last_check = AI_CHECK_INSERTION_NOT_DISABLED;
      if ($obj->get_disable_insertion () || get_disable_block_insertions ()) continue;

      // Last check before counter check before insertion
//      $ai_last_check = AI_CHECK_CODE;
//      if ($obj->ai_getCode () == '') continue;
      if ($obj->empty_code ()) continue;

      $max_page_blocks_enabled = $obj->get_max_page_blocks_enabled ();
      if ($max_page_blocks_enabled) {
        $ai_last_check = AI_CHECK_MAX_PAGE_BLOCKS;
        if ($ai_wp_data [AI_PAGE_BLOCKS] >= get_max_page_blocks ()) continue;
      }

      // Last check before insertion
      if (!$obj->check_and_increment_block_counter ()) continue;

      // Increment page block counter
      if ($max_page_blocks_enabled) $ai_wp_data [AI_PAGE_BLOCKS] ++;

      $ai_last_check = AI_CHECK_DEBUG_NO_INSERTION;
      if (!$obj->get_debug_disable_insertion ()) {
        $ad_code .= $obj->get_code_for_serverside_insertion ();
        $ai_last_check = AI_CHECK_INSERTED;
      }
    }
    if ($debug_processing && $ai_last_check != AI_CHECK_NONE) ai_log (ai_log_block_status ($current_block, $ai_last_check));

    echo "<$tag>\n";
    echo $ad_code;
    echo "</$tag>\n";
  }

  if ($debug_processing) {
    $ai_total_plugin_time += microtime (true) - $start_time;
    ai_log ("COMMENT START HOOK END: ". number_format (1000 * (microtime (true) - $start_time), 2)." ms\n");
    $ai_wp_data [AI_PROCESSING_TIME] = false;
  }

  if (!empty ($ai_wp_data ['AI_COMMENTS_SAVED_CALLBACK'])) {
    echo call_user_func ($ai_wp_data ['AI_COMMENTS_SAVED_CALLBACK'], $comment, $args, $depth );
  } else {
      $ai_walker->comment_callback ($comment, $args, $depth);
    }
}

// Process Between Comments postion
function ai_comment_end_callback ($comment, $args, $depth) {
  global $block_object, $ad_inserter_globals, $ai_db_options_extract, $ai_wp_data, $ai_last_check, $ai_total_plugin_time;

  if ($args ['style'] == 'div') $tag = 'div'; else $tag = 'li';

  if (!empty ($ai_wp_data ['AI_COMMENTS_SAVED_END_CALLBACK'])) {
    echo call_user_func ($ai_wp_data ['AI_COMMENTS_SAVED_END_CALLBACK'], $comment, $args, $depth);
  } else echo "</$tag><!-- #comment-## -->\n";

  $debug_processing = ($ai_wp_data [AI_WP_DEBUGGING] & AI_DEBUG_PROCESSING) != 0;
  if ($debug_processing) {
    ai_log ('COMMENT END HOOK START [' . $ad_inserter_globals [AI_COMMENT_COUNTER_NAME] . ':'. ($depth + 1) . ']');
    $ai_wp_data [AI_PROCESSING_TIME] = true;
    $start_time = microtime (true);
  }

  if ($depth == 0) {

    if (isset ($ai_db_options_extract [AFTER_COMMENTS_HOOK_BLOCKS][$ai_wp_data [AI_WP_PAGE_TYPE]]) &&
        $ai_db_options_extract [AFTER_COMMENTS_HOOK_BLOCKS][$ai_wp_data [AI_WP_PAGE_TYPE]] != 0 &&
        !empty ($args ['per_page']) && !empty ($args ['page'])) {
      $number_of_comments_mod_per_page = $ai_wp_data [AI_NUMBER_OF_COMMENTS] % $args ['per_page'];
      if ($number_of_comments_mod_per_page != 0) {
        $last_page = (int) ($ai_wp_data [AI_NUMBER_OF_COMMENTS] / $args ['per_page']) + 1;
        $last_comment_number = $args ['page'] == $last_page ? $number_of_comments_mod_per_page : $args ['per_page'];
      } else $last_comment_number = $args ['per_page'];
    } else $last_comment_number = $ai_wp_data [AI_NUMBER_OF_COMMENTS];

    if ($ad_inserter_globals [AI_COMMENT_COUNTER_NAME] == $last_comment_number) {

      $ai_wp_data [AI_CONTEXT] = AI_CONTEXT_AFTER_COMMENTS;

      if (($ai_wp_data [AI_WP_DEBUGGING] & AI_DEBUG_POSITIONS) != 0) {

        $class = AI_DEBUG_POSITIONS_CLASS;

        echo "<$tag>\n";
        echo "<section data-ai-position='" .AI_AUTOMATIC_INSERTION_AFTER_COMMENTS ."' class='$class'>" . __('AFTER COMMENTS', 'ad-inserter') . '</section>';
        echo "</$tag>\n";
      }

      $ad_code = "";

      $ai_last_check = AI_CHECK_NONE;
      $current_block = 0;

      if (isset ($ai_db_options_extract [AFTER_COMMENTS_HOOK_BLOCKS][$ai_wp_data [AI_WP_PAGE_TYPE]]))
      foreach ($ai_db_options_extract [AFTER_COMMENTS_HOOK_BLOCKS][$ai_wp_data [AI_WP_PAGE_TYPE]] as $block) {
        if ($debug_processing && $ai_last_check != AI_CHECK_NONE) ai_log (ai_log_block_status ($current_block, $ai_last_check));

        if (!isset ($block_object [$block])) continue;

        $current_block = $block;

        $obj = $block_object [$block];
        $obj->clear_code_cache ();

        if (!$obj->check_server_side_detection ()) continue;
        if (!$obj->check_page_types_lists_users ()) continue;
        // No filter check

        $ai_last_check = AI_CHECK_INSERTION_NOT_DISABLED;
        if ($obj->get_disable_insertion () || get_disable_block_insertions ()) continue;

        // Last check before counter check before insertion
//        $ai_last_check = AI_CHECK_CODE;
//        if ($obj->ai_getCode () == '') continue;
        if ($obj->empty_code ()) continue;

        $max_page_blocks_enabled = $obj->get_max_page_blocks_enabled ();
        if ($max_page_blocks_enabled) {
          $ai_last_check = AI_CHECK_MAX_PAGE_BLOCKS;
          if ($ai_wp_data [AI_PAGE_BLOCKS] >= get_max_page_blocks ()) continue;
        }

        // Last check before insertion
        if (!$obj->check_and_increment_block_counter ()) continue;

        // Increment page block counter
        if ($max_page_blocks_enabled) $ai_wp_data [AI_PAGE_BLOCKS] ++;

        $ai_last_check = AI_CHECK_DEBUG_NO_INSERTION;
        if (!$obj->get_debug_disable_insertion ()) {
          $ad_code .= $obj->get_code_for_serverside_insertion ();
          $ai_last_check = AI_CHECK_INSERTED;
        }
      }
      if ($debug_processing && $ai_last_check != AI_CHECK_NONE) ai_log (ai_log_block_status ($current_block, $ai_last_check));

      echo "<$tag>\n";
      echo $ad_code;
      echo "</$tag>\n";
    } else {
        $ai_wp_data [AI_CONTEXT] = AI_CONTEXT_BETWEEN_COMMENTS;

        if (($ai_wp_data [AI_WP_DEBUGGING] & AI_DEBUG_POSITIONS) != 0) {

          $class = AI_DEBUG_POSITIONS_CLASS;

          echo "<$tag>\n";
          echo "<section data-ai-position='" .AI_AUTOMATIC_INSERTION_BETWEEN_COMMENTS ."' class='$class'>" . __('BETWEEN COMMENTS', 'ad-inserter') . ' ' . $ad_inserter_globals [AI_COMMENT_COUNTER_NAME]."</section>";
          echo "</$tag>\n";
        }

        $ad_code = "";

        $ai_last_check = AI_CHECK_NONE;
        $current_block = 0;

        if (isset ($ai_db_options_extract [BETWEEN_COMMENTS_HOOK_BLOCKS][$ai_wp_data [AI_WP_PAGE_TYPE]]))
        foreach ($ai_db_options_extract [BETWEEN_COMMENTS_HOOK_BLOCKS][$ai_wp_data [AI_WP_PAGE_TYPE]] as $block) {
          if ($debug_processing && $ai_last_check != AI_CHECK_NONE) ai_log (ai_log_block_status ($current_block, $ai_last_check));

          if (!isset ($block_object [$block])) continue;

          $current_block = $block;

          $obj = $block_object [$block];
          $obj->clear_code_cache ();

          if (!$obj->check_server_side_detection ()) continue;
          if (!$obj->check_page_types_lists_users ()) continue;
          if (!$obj->check_filter ($ad_inserter_globals [AI_COMMENT_COUNTER_NAME])) continue;

          $ai_last_check = AI_CHECK_INSERTION_NOT_DISABLED;
          if ($obj->get_disable_insertion () || get_disable_block_insertions ()) continue;

          // Last check before counter check before insertion
//          $ai_last_check = AI_CHECK_CODE;
//          if ($obj->ai_getCode () == '') continue;
          if ($obj->empty_code ()) continue;

          $max_page_blocks_enabled = $obj->get_max_page_blocks_enabled ();
          if ($max_page_blocks_enabled) {
            $ai_last_check = AI_CHECK_MAX_PAGE_BLOCKS;
            if ($ai_wp_data [AI_PAGE_BLOCKS] >= get_max_page_blocks ()) continue;
          }

          // Last check before insertion
          if (!$obj->check_and_increment_block_counter ()) continue;

          // Increment page block counter
          if ($max_page_blocks_enabled) $ai_wp_data [AI_PAGE_BLOCKS] ++;

          $ai_last_check = AI_CHECK_DEBUG_NO_INSERTION;
          if (!$obj->get_debug_disable_insertion ()) {
            $ad_code .= $obj->get_code_for_serverside_insertion ();
            $ai_last_check = AI_CHECK_INSERTED;
          }
        }
        if ($debug_processing && $ai_last_check != AI_CHECK_NONE) ai_log (ai_log_block_status ($current_block, $ai_last_check));

        echo "<$tag>\n";
        echo $ad_code;
        echo "</$tag>\n";
      }
  }

  if ($debug_processing) {
    $ai_total_plugin_time += microtime (true) - $start_time;
    ai_log ("COMMENT END HOOK END: ". number_format (1000 * (microtime (true) - $start_time), 2)." ms\n");
    $ai_wp_data [AI_PROCESSING_TIME] = false;
  }
}

function ai_custom_hook ($action, $insertion_type, $name, $translated_name = '', $hook_parameter = null, $hook_check = null) {
  global $block_object, $ad_inserter_globals, $ai_db_options_extract, $ai_wp_data, $ai_last_check, $ai_total_plugin_time;

  $debug_processing = ($ai_wp_data [AI_WP_DEBUGGING] & AI_DEBUG_PROCESSING) != 0;

  if ($ai_wp_data [AI_WP_PAGE_TYPE] == AI_PT_ADMIN) return;
  if (is_admin()) return;

  $ai_wp_data [AI_CONTEXT] = AI_CONTEXT_NONE;

  if (isset ($hook_check)) {
    if (!call_user_func ($hook_check, $hook_parameter, $action)) return;
  }

  if ($debug_processing) {
    $hook_name = $ai_wp_data [AI_MBSTRING_LOADED] ? mb_strtoupper ($name) : strtoupper ($name);

    ai_log (str_replace (array ('&LT;', '&GT;'), array ('<', '>'), $hook_name) . " HOOK START");
    $ai_wp_data [AI_PROCESSING_TIME] = true;
    $start_time = microtime (true);
  }

  $globals_name = 'AI_' . strtoupper ($action) . '_COUNTER';

  if (!isset ($ad_inserter_globals [$globals_name])) {
    $ad_inserter_globals [$globals_name] = 1;
  } else $ad_inserter_globals [$globals_name] ++;

  if (($ai_wp_data [AI_WP_DEBUGGING] & AI_DEBUG_POSITIONS) != 0) {

    $counter = $ad_inserter_globals [$globals_name];
    if ($counter == 1) $counter = '';

    $class = AI_DEBUG_POSITIONS_CLASS;
    if ($translated_name == '') $translated_name = $name;
    $translated_hook_name = $ai_wp_data [AI_MBSTRING_LOADED] ? mb_strtoupper ($translated_name) : strtoupper ($translated_name);

    echo "<section data-ai-position='$insertion_type' class='$class'>".$translated_hook_name." ".$counter."</section>";
  }

  if ($ai_wp_data [AI_WP_PAGE_TYPE] == AI_PT_POST || $ai_wp_data [AI_WP_PAGE_TYPE] == AI_PT_STATIC) {
    $meta_value = get_post_meta (get_the_ID (), '_adinserter_block_exceptions', true);
    $selected_blocks = explode (",", $meta_value);
  } else $selected_blocks = array ();

  $ad_code = "";

  $ai_last_check = AI_CHECK_NONE;
  $current_block = 0;

  if (isset ($ai_db_options_extract [$action . CUSTOM_HOOK_BLOCKS][$ai_wp_data [AI_WP_PAGE_TYPE]]))
  foreach ($ai_db_options_extract [$action . CUSTOM_HOOK_BLOCKS][$ai_wp_data [AI_WP_PAGE_TYPE]] as $block) {
    if ($debug_processing && $ai_last_check != AI_CHECK_NONE) ai_log (ai_log_block_status ($current_block, $ai_last_check));

    if (!isset ($block_object [$block])) continue;

    $current_block = $block;

    $obj = $block_object [$block];
    $obj->clear_code_cache ();

    if (!$obj->check_server_side_detection ()) continue;
    if (!$obj->check_page_types_lists_users ()) continue;
    if (!$obj->check_post_page_exceptions ($selected_blocks)) continue;
    if (!$obj->check_filter ($ad_inserter_globals [$globals_name])) continue;
    if (!$obj->check_number_of_words ()) continue;

    $ai_last_check = AI_CHECK_INSERTION_NOT_DISABLED;
    if ($obj->get_disable_insertion () || get_disable_block_insertions ()) continue;

    // Last check before counter check before insertion
    if ($obj->empty_code ()) continue;

    $max_page_blocks_enabled = $obj->get_max_page_blocks_enabled ();
    if ($max_page_blocks_enabled) {
      $ai_last_check = AI_CHECK_MAX_PAGE_BLOCKS;
      if ($ai_wp_data [AI_PAGE_BLOCKS] >= get_max_page_blocks ()) continue;
    }

    // Last check before insertion
    if (!$obj->check_and_increment_block_counter ()) continue;

    // Increment page block counter
    if ($max_page_blocks_enabled) $ai_wp_data [AI_PAGE_BLOCKS] ++;

    $ai_last_check = AI_CHECK_DEBUG_NO_INSERTION;
    if (!$obj->get_debug_disable_insertion ()) {
      $ad_code .= $obj->get_code_for_serverside_insertion ();
      $ai_last_check = AI_CHECK_INSERTED;
    }
  }
  if ($debug_processing && $ai_last_check != AI_CHECK_NONE) ai_log (ai_log_block_status ($current_block, $ai_last_check));

  echo $ad_code;

  if ($debug_processing) {
    if (!$ai_wp_data [AI_PROCESSING_TIME]) {
      $ai_total_plugin_time += microtime (true) - $start_time;
    }
    ai_log (str_replace (array ('&LT;', '&GT;'), array ('<', '>'), $hook_name) . " HOOK END: ". number_format (1000 * (microtime (true) - $start_time), 2)." ms\n");
    $ai_wp_data [AI_PROCESSING_TIME] = false;
  }
}


function ai_pre_do_shortcode_tag ($return, $tag, $attr, $m) {
    global $ai_expand_only_rotate, $ai_wp_data;

//    Array
//(
//    [0] => [ADINSERTER ROTATE='1']
//    [1] =>
//    [2] => ADINSERTER
//    [3] =>  ROTATE='1'
//    [4] =>
//    [5] =>
//    [6] =>

  if (strtolower ($tag) == 'adinserter') {
    if ($ai_expand_only_rotate) {
      // Expand only ROTATE / COUNT / CHECK
      if (isset ($attr ['rotate']) || in_array ('ROTATE', $attr) || in_array ('rotate', $attr)) {
        return false;
      }
      elseif (isset ($attr ['count']) || in_array ('COUNT', $attr) || in_array ('count', $attr)) {
        return false;
      }
      elseif (isset ($attr ['check']) || in_array ('CHECK', $attr) || in_array ('check', $attr)) {
        return false;
      }
      else return $m [0];
    }
  }

  return $return;
}

function ai_process_shortcode (&$block, $atts) {
  global $block_object, $ai_last_check, $ai_wp_data, $ad_inserter_globals;

  if ($atts == '') return '';

  $parameters = shortcode_atts (array (
    "block" => "",
    "code" => "",
    "name" => "",
    "group" => "",
    "ignore" => "",
    "check" => "",
    "adb" => "",
    "css" => "",
    "text" => "",
    "selectors" => "",
    "amp" => "",
    "head" => "",
    "rotate" => "",
    "count" => "",
    "counter" => "",
    "http" => "",
    "custom-field" => "",
    "data" => "",
    "share" => "",
    "time" => "",
    "category" => "",
    "tag" => "",
    "taxonomy" => "",
    "id" => "",
    "url" => "",
    "url-parameter" => "",
    "referrer" => "",
    "ip-address" => "",
    "country" => "",
  ), $atts);


  $output = "";
  if (function_exists ('ai_shortcode')) {
    $output = ai_shortcode ($parameters);
    if ($output != '') return $output;
  }

  if (($adb = trim ($parameters ['adb'])) != '') {
//    message html
//    message css
//    overlay css
//    undismissible

//    redirection page
//    redirection url

    switch (strtolower ($adb)) {
      case 'message':
        $ai_wp_data [AI_ADB_SHORTCODE_ACTION] = AI_ADB_ACTION_MESSAGE;
        break;
      case 'redirection':
        $ai_wp_data [AI_ADB_SHORTCODE_ACTION] = AI_ADB_ACTION_REDIRECTION;
        break;
      case 'no-action':
        $ai_wp_data [AI_ADB_SHORTCODE_ACTION] = AI_ADB_ACTION_NONE;
        break;
      case 'disabled':
        $ai_wp_data [AI_ADB_SHORTCODE_DISABLED] = true;
        break;
    }
    return  "";
  }

  $block = - 1;
  $code_only = false;

  if ($parameters ['block'] == '' && $parameters ['code'] != '') {
    $parameters ['block'] = $parameters ['code'];
    $code_only = true;
  }

  if (is_numeric ($parameters ['block'])) {
    $block = intval ($parameters ['block']);
  } elseif ($parameters ['name'] != '' && !($parameters ['rotate'] != '' || in_array ('ROTATE', $atts) || in_array ('rotate', $atts))) {
      $shortcode_name = strtolower ($parameters ['name']);
      for ($counter = 1; $counter <= 96; $counter ++) {
        $obj = $block_object [$counter];
        $ad_name = strtolower (trim ($obj->get_ad_name()));
        if ($shortcode_name == $ad_name && $obj->get_enable_manual ()) {
          $block = $counter;
          break;
        }
      }
    }

  if ($block == - 1) {
    if (function_exists ('ai_check_separators')) {
      if ($parameters ['check'] != '' || in_array ('CHECK', $atts) || in_array ('check', $atts)) {
        if (!isset ($ai_wp_data [AI_SHORTCODES]['check'])) $ai_wp_data [AI_SHORTCODES]['check'] = array ();
        $ai_wp_data [AI_SHORTCODES]['check'] []= $parameters;
        return AD_CHECK_SEPARATOR;
      }
    }
    if ($parameters ['count'] != '' || in_array ('COUNT', $atts) || in_array ('count', $atts)) {
      if (!isset ($ai_wp_data [AI_SHORTCODES]['count'])) $ai_wp_data [AI_SHORTCODES]['count'] = array ();
      $ai_wp_data [AI_SHORTCODES]['count'] []= $parameters;
//      return AD_COUNT_SEPARATOR;
      return '|count'. (count ($ai_wp_data [AI_SHORTCODES]['count']) - 1). '|';
    }
    if ($parameters ['rotate'] != '' || in_array ('ROTATE', $atts) || in_array ('rotate', $atts)) {
      if (!isset ($ai_wp_data [AI_SHORTCODES]['rotate'])) $ai_wp_data [AI_SHORTCODES]['rotate'] = array ();
      $ai_wp_data [AI_SHORTCODES]['rotate'] []= $parameters;
//      return AD_ROTATE_SEPARATOR;
      return '|rotate'. (count ($ai_wp_data [AI_SHORTCODES]['rotate']) - 1). '|';
    }
    if ($parameters ['amp'] != '' || in_array ('AMP', $atts) || in_array ('amp', $atts)) {
      return AD_AMP_SEPARATOR;
    }
    if ($parameters ['head'] != '' || in_array ('HEAD', $atts) || in_array ('head', $atts)) {
      if (!isset ($ai_wp_data [AI_SHORTCODES]['head'])) $ai_wp_data [AI_SHORTCODES]['head'] = array ();
      $ai_wp_data [AI_SHORTCODES]['head'] []= $parameters;
      return AD_HEAD_SEPARATOR;
    }
    if ($parameters ['http'] != '' || in_array ('HTTP', $atts) || in_array ('http', $atts)) {
      return AD_HTTP_SEPARATOR;
    }
    if ($parameters ['group'] != '' || in_array ('GROUP', $atts) || in_array ('group', $atts)) {
      if ($parameters ['group'] != '') {
        $parameters ['group'] = mb_strtolower ($parameters ['group']);
        if (strpos ($parameters ['group'], ',') !== false) {
          $group_names = explode (',', $parameters ['group']);
          foreach ($group_names as $index => $group_name) {
            $group_names [$index] = trim ($group_names [$index]);
          }
        } else $group_names = array (trim ($parameters ['group']));
      } else $group_names = array ();

      return '<span data-ai-groups="' . base64_encode (json_encode ($group_names)) . '"></span>';
    }

    if ($parameters ['custom-field'] != '') {
      $custom_field_name = trim ($parameters ['custom-field']);

      if ($parameters ['data'] != '') {
        $custom_field_value = trim ($parameters ['data']);

        $ai_wp_data [AI_CUSTOM_FIELDS][$custom_field_name] = $custom_field_value;

        return '';
      }

      if (isset ($ai_wp_data [AI_CUSTOM_FIELDS][$custom_field_name])) {
        return $ai_wp_data [AI_CUSTOM_FIELDS][$custom_field_name];
      }

      $post_meta = get_post_meta (get_the_ID(), $parameters ['custom-field']);
      if (is_array ($post_meta)) {
        $post_meta = implode (', ', $post_meta);
      }
      return $post_meta;
    }

    if ($parameters ['data'] != '') {
      return '{'.$parameters ['data'].'}';
    }
    if ($parameters ['counter'] != '') {
      $counter_name = strtolower ($parameters ['counter']);

      switch ($counter_name) {
        case 'block':
          if (isset ($ai_wp_data ['AI_CURRENT_BLOCK_NUMBER']) && isset ($ad_inserter_globals [AI_BLOCK_COUNTER_NAME . $ai_wp_data ['AI_CURRENT_BLOCK_NUMBER']])) {
            return $ad_inserter_globals [AI_BLOCK_COUNTER_NAME . $ai_wp_data ['AI_CURRENT_BLOCK_NUMBER']];
          }
          break;
        case 'content':
          if (isset ($ad_inserter_globals [AI_CONTENT_COUNTER_NAME])) {
            return $ad_inserter_globals [AI_CONTENT_COUNTER_NAME];
          }
          break;
        case 'excerpt':
          if (isset ($ad_inserter_globals [AI_EXCERPT_COUNTER_NAME])) {
            return $ad_inserter_globals [AI_EXCERPT_COUNTER_NAME];
          }
          break;
        case 'before-post':
          if (isset ($ad_inserter_globals [AI_LOOP_BEFORE_COUNTER_NAME])) {
            return $ad_inserter_globals [AI_LOOP_BEFORE_COUNTER_NAME];
          }
          break;
        case 'after-post':
          if (isset ($ad_inserter_globals [AI_LOOP_AFTER_COUNTER_NAME])) {
            return $ad_inserter_globals [AI_LOOP_AFTER_COUNTER_NAME];
          }
          break;
        case 'widget':
          if (isset ($ai_wp_data ['AI_CURRENT_BLOCK_NUMBER']) && isset ($ad_inserter_globals [AI_WIDGET_COUNTER_NAME . $ai_wp_data ['AI_CURRENT_BLOCK_NUMBER']])) {
            return $ad_inserter_globals [AI_WIDGET_COUNTER_NAME . $ai_wp_data ['AI_CURRENT_BLOCK_NUMBER']];
          }
          break;
        case 'php':
          if (isset ($ai_wp_data ['AI_CURRENT_BLOCK_NUMBER']) && isset ($ad_inserter_globals [AI_PHP_FUNCTION_CALL_COUNTER_NAME . $ai_wp_data ['AI_CURRENT_BLOCK_NUMBER']])) {
            return $ad_inserter_globals [AI_PHP_FUNCTION_CALL_COUNTER_NAME . $ai_wp_data ['AI_CURRENT_BLOCK_NUMBER']];
          }
          break;
      }
      return '';
    }
    if ($parameters ['name'] != '') {
      $shortcode_name = strtolower ($parameters ['name']);
      switch ($shortcode_name) {
        case 'processing-log':
          if (/*get_remote_debugging () ||*/ ($ai_wp_data [AI_WP_USER] & AI_USER_ADMINISTRATOR) != 0) {
            ob_start ();
            echo "<pre style='", AI_DEBUG_WIDGET_STYLE, "'>\n";
            ai_write_debug_info ();
            echo "</pre>";
            return ob_get_clean ();
          }
          return "";
        case 'debugging-tools':
          if (($ai_wp_data [AI_WP_USER] & AI_USER_ADMINISTRATOR) != 0 || defined ('AI_DEBUGGING_DEMO')) {
            ob_start ();
            ai_write_debugging_tools ();
            return ob_get_clean ();
          }
        default:
          if (defined ('AI_BUFFERING')) {
            if (get_output_buffering () && !get_disable_header_code ()) {
              return "<!--[AI_HEAD_GROUPS $shortcode_name]-->";
            }
          }
          return "";
      }
    }
  }

  $ai_last_check = AI_CHECK_SHORTCODE_ATTRIBUTES;
  if ($block < 1 || $block > 96) return "";

  if (($ai_wp_data [AI_WP_DEBUGGING] & AI_DEBUG_PROCESSING) != 0) ai_log ("SHORTCODE $block (".($parameters ['block'] != '' ? 'block="'.$parameters ['block'].'"' : '').($parameters ['name'] != '' ? 'name="'.$parameters ['name'].'"' : '').")");

//  IGNORE SETTINGS
//  page-type
//  *block-counter

//  CHECK SETTINGS
//  exceptions

  $ignore_array = array ();
  if (trim ($parameters ['ignore']) != '') {
    $ignore_array = explode (",", str_replace (" ", "", $parameters ['ignore']));
  }

  $check_array = array ();
  if (trim ($parameters ['check']) != '') {
    $check_array = explode (",", str_replace (" ", "", $parameters ['check']));
  }

  $ai_wp_data [AI_CONTEXT] = AI_CONTEXT_SHORTCODE;

  $obj = $block_object [$block];
  $obj->clear_code_cache ();

  $ai_last_check = AI_CHECK_ENABLED_SHORTCODE;
  if (!$obj->get_enable_manual ()) return "";

  if (!$obj->check_server_side_detection ()) return "";
  if (!$obj->check_page_types_lists_users (in_array ("page-type", $ignore_array))) return "";

  if (in_array ("exceptions", $check_array)) {
    if ($ai_wp_data [AI_WP_PAGE_TYPE] == AI_PT_POST || $ai_wp_data [AI_WP_PAGE_TYPE] == AI_PT_STATIC) {
      $meta_value = get_post_meta (get_the_ID (), '_adinserter_block_exceptions', true);
      $selected_blocks = explode (",", $meta_value);
      if (!$obj->check_post_page_exceptions ($selected_blocks)) return "";
    }
  }

  $ai_last_check = AI_CHECK_INSERTION_NOT_DISABLED;
  if ($obj->get_disable_insertion () || get_disable_block_insertions ()) return "";

  // Last check before counter check before insertion
//  $ai_last_check = AI_CHECK_CODE;
//  if ($obj->ai_getCode () == '') return "";
  if ($obj->empty_code ()) return "";

  $max_page_blocks_enabled = $obj->get_max_page_blocks_enabled ();
  if ($max_page_blocks_enabled) {
    $ai_last_check = AI_CHECK_MAX_PAGE_BLOCKS;
    if ($ai_wp_data [AI_PAGE_BLOCKS] >= get_max_page_blocks ()) return "";
  }

  // Last check before insertion
  if (!$obj->check_and_increment_block_counter ()) return "";

  // Increment page block counter
  if ($max_page_blocks_enabled) $ai_wp_data [AI_PAGE_BLOCKS] ++;

  $ai_last_check = AI_CHECK_DEBUG_NO_INSERTION;
  if (!$obj->get_debug_disable_insertion ()) {

    if (isset ($ai_wp_data [AI_SHORTCODES]['force_serverside'])) {
      $saved_force_serverside = $ai_wp_data [AI_SHORTCODES]['force_serverside'];
    }
    if (isset ($ai_wp_data [AI_SHORTCODES]['check'])) {
      $saved_check = $ai_wp_data [AI_SHORTCODES]['check'];
    }
    if (isset ($ai_wp_data [AI_SHORTCODES]['count'])) {
      $saved_count = $ai_wp_data [AI_SHORTCODES]['count'];
    }
    if (isset ($ai_wp_data [AI_SHORTCODES]['rotate'])) {
      $saved_rotate = $ai_wp_data [AI_SHORTCODES]['rotate'];
    }
    if (isset ($ai_wp_data [AI_SHORTCODES]['head'])) {
      $saved_head = $ai_wp_data [AI_SHORTCODES]['head'];
    }
    if (isset ($ai_wp_data ['AI_CURRENT_BLOCK_NUMBER'])) {
      $saved_block_number = $ai_wp_data ['AI_CURRENT_BLOCK_NUMBER'];
    }

    $code = $obj->get_code_for_serverside_insertion (true, false, $code_only);

    if (isset ($saved_force_serverside)) {
      $ai_wp_data [AI_SHORTCODES]['force_serverside'] = $saved_force_serverside;
    } else unset ($ai_wp_data [AI_SHORTCODES]['force_serverside']);
    if (isset ($saved_check)) {
      $ai_wp_data [AI_SHORTCODES]['check'] = $saved_check;
    } else unset ($ai_wp_data [AI_SHORTCODES]['check']);
    if (isset ($saved_count)) {
      $ai_wp_data [AI_SHORTCODES]['count'] = $saved_count;
    } else unset ($ai_wp_data [AI_SHORTCODES]['count']);
    if (isset ($saved_rotate)) {
      $ai_wp_data [AI_SHORTCODES]['rotate'] = $saved_rotate;
    } else unset ($ai_wp_data [AI_SHORTCODES]['rotate']);
    if (isset ($saved_head)) {
      $ai_wp_data [AI_SHORTCODES]['head'] = $saved_head;
    } else unset ($ai_wp_data [AI_SHORTCODES]['head']);
    if (isset ($saved_block_number)) {
      $ai_wp_data ['AI_CURRENT_BLOCK_NUMBER'] = $saved_block_number;
    } else unset ($ai_wp_data ['AI_CURRENT_BLOCK_NUMBER']);

    // Must be after get_code_for_serverside_insertion ()
    $ai_last_check = AI_CHECK_INSERTED;
    return $code;
  }
}

function ai_process_shortcodes ($atts, $content, $tag) {
  global $ai_last_check, $ai_wp_data, $ai_total_plugin_time;

  $debug_processing = ($ai_wp_data [AI_WP_DEBUGGING] & AI_DEBUG_PROCESSING) != 0;
  if ($debug_processing) {
    $atts_string = '';
    if (is_array ($atts))
      foreach ($atts as $index => $att) {
        if (is_numeric ($index))
          $atts_string .= $att.' '; else
            $atts_string .= $index.("='".$att."'").' ';
      }
    ai_log ("PROCESS SHORTCODES [$tag ".trim ($atts_string).']');
    $start_time = microtime (true);
  }
  $ai_last_check = AI_CHECK_NONE;
  $block = - 1;
  $shortcode = ai_process_shortcode ($block, $atts);

  if ($debug_processing) {
    if ($block == - 1) {
      if (strlen ($shortcode) < 100) ai_log ('SHORTCODE TEXT: "' . ai_log_filter_content ($shortcode) . '"'); else
        ai_log ('SHORTCODE TEXT: "' . ai_log_filter_content (html_entity_decode (substr ($shortcode, 0, 60))) . ' ... ' . ai_log_filter_content (html_entity_decode (substr ($shortcode, - 60))) . '"');
    }
    elseif ($ai_last_check != AI_CHECK_NONE) ai_log (ai_log_block_status ($block, $ai_last_check));
    if (!$ai_wp_data [AI_PROCESSING_TIME]) {
      $ai_total_plugin_time += microtime (true) - $start_time;
    }
    ai_log ("SHORTCODE END: ". number_format (1000 * (microtime (true) - $start_time), 2)." ms\n");
  }

  return $shortcode;
}


function ai_add_attr_data (&$tag, $attr, $new_data) {

  if (trim ($tag) != '' && strpos ($tag,  '<!--') === false) {
    if (stripos ($tag, $attr."=") !== false) {
      preg_match ("/$attr=[\'\"](.+?)[\'\"]/", $tag, $classes);
      $tag = str_replace ($classes [1], $classes [1]. ' ' . $new_data, $tag);
      return true;
    }
    elseif (strpos ($tag, ">") !== false) {
      $tag = str_replace ('>', ' ' . $attr . '="' . $new_data . '">', $tag);
      return true;
    }
  }

  return false;
}

function ai_widget_draw ($args, $instance, &$block) {
  global $block_object, $ad_inserter_globals, $ai_wp_data, $ai_last_check;

  $block  = isset ($instance ['block'])  ? $instance ['block']  : 1;
  $sticky = isset ($instance ['sticky']) ? $instance ['sticky'] : 0;

  if ($block == 0 || $block == - 2) {
    if (!get_disable_block_insertions () && (($ai_wp_data [AI_WP_USER] & AI_USER_ADMINISTRATOR) != 0 || defined ('AI_DEBUGGING_DEMO'))) {
      ai_special_widget ($args, $instance, $block);
    }
    return;
  }

  if ($sticky) {
    $ai_wp_data [AI_STICKY_WIDGETS] = true;
    if ($block == - 1 && !get_disable_block_insertions ()) {
      $before_widget = $args ['before_widget'];
      ai_add_attr_data ($before_widget, 'style', 'padding: 0; border: 0; margin: 0; color: transparent; background: transparent;');
      ai_add_attr_data ($before_widget, 'class', 'ai-sticky-widget');
      echo $before_widget;
      echo $args ['after_widget'];
      return;
    }
  }

  if ($block < 1 || $block > 96) return;

  $title = !empty ($instance ['widget-title']) ? $instance ['widget-title'] : '';

  $obj = $block_object [$block];
  $obj->clear_code_cache ();

  $globals_name = AI_WIDGET_COUNTER_NAME . $block;

  if (!isset ($ad_inserter_globals [$globals_name])) {
    $ad_inserter_globals [$globals_name] = 1;
  } else $ad_inserter_globals [$globals_name] ++;

  if (($ai_wp_data [AI_WP_DEBUGGING] & AI_DEBUG_PROCESSING) != 0)
    ai_log ("WIDGET (". $obj->number . ') ['.$ad_inserter_globals [$globals_name] . ']');

  $ai_wp_data [AI_CONTEXT] = AI_CONTEXT_WIDGET;

  $ai_last_check = AI_CHECK_ENABLED_WIDGET;
  if (!$obj->get_enable_widget ()) return;
  if (!$obj->check_server_side_detection ()) return;
  if (!$obj->check_page_types_lists_users ()) return;
  if (!$obj->check_filter ($ad_inserter_globals [$globals_name])) return;
  if (!$obj->check_number_of_words ()) return;

  if ($ai_wp_data [AI_WP_PAGE_TYPE] == AI_PT_POST || $ai_wp_data [AI_WP_PAGE_TYPE] == AI_PT_STATIC) {
    $meta_value = get_post_meta (get_the_ID (), '_adinserter_block_exceptions', true);
    $selected_blocks = explode (",", $meta_value);
    if (!$obj->check_post_page_exceptions ($selected_blocks)) return;
  }

  $ai_last_check = AI_CHECK_INSERTION_NOT_DISABLED;
  if ($obj->get_disable_insertion () || get_disable_block_insertions ()) return;

  // Last check before counter check before insertion
  $ai_last_check = AI_CHECK_CODE;
  if ($obj->ai_getCode () == '') {
    if ($sticky) {
      $before_widget = $args ['before_widget'];
      ai_add_attr_data ($before_widget, 'style', 'padding: 0; border: 0; margin: 0; color: transparent; background: transparent;');
      ai_add_attr_data ($before_widget, 'class', 'ai-sticky-widget');
      echo $before_widget;
      echo $args ['after_widget'];
    }
    return;
  }

  $max_page_blocks_enabled = $obj->get_max_page_blocks_enabled ();
  if ($max_page_blocks_enabled) {
    $ai_last_check = AI_CHECK_MAX_PAGE_BLOCKS;
    if ($ai_wp_data [AI_PAGE_BLOCKS] >= get_max_page_blocks ()) return;
  }

  // Last check before insertion
  if (!$obj->check_and_increment_block_counter ()) return;

  // Increment page block counter
  if ($max_page_blocks_enabled) $ai_wp_data [AI_PAGE_BLOCKS] ++;

  $ai_last_check = AI_CHECK_DEBUG_NO_INSERTION;
  if (!$obj->get_debug_disable_insertion ()) {

    $viewport_classes = $obj->get_client_side_action () == AI_CLIENT_SIDE_ACTION_INSERT ? '' : trim ($obj->get_viewport_classes ());
    $sticky_class = $sticky ? ' ai-sticky-widget' : '';
    $widget_classes = trim ($viewport_classes . $sticky_class);

    if ($widget_classes != "") {
      $before_widget = $args ['before_widget'];
      ai_add_attr_data ($before_widget, 'class', $widget_classes);
      echo $before_widget;
    } else echo $args ['before_widget'];

    if (!empty ($title)) {
      echo $args ['before_title'], apply_filters ('widget_title', $title), $args ['after_title'];
    }

    echo $obj->get_code_for_serverside_insertion (false);

    echo $args ['after_widget'];

    if (($ai_wp_data [AI_WP_DEBUGGING] & AI_DEBUG_BLOCKS) != 0 && $obj->get_detection_client_side () && $obj->get_client_side_action () == AI_CLIENT_SIDE_ACTION_SHOW)
      echo $obj->get_code_for_serverside_insertion (false, true);

    $ai_last_check = AI_CHECK_INSERTED;
  }
}

function ai_write_debugging_tools () {
  global $ai_wp_data;

  ai_toolbar_menu_items ();


  echo "<style>

ul.ai-debug-tools {
  list-style: none;
  background: #000;
  color: #eee;
  margin: 0;
  padding: 10px;
  font-family: -apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Oxygen-Sans,Ubuntu,Cantarell,'Helvetica Neue',sans-serif;
  font-size: 14px;
  line-height: 22px;
  -webkit-user-select: none;  /* Chrome all / Safari all */
  -moz-user-select: none;     /* Firefox all */
  -ms-user-select: none;      /* IE 10+ */
  user-select: none;
}

ul.ai-debug-tools li {
  margin: 0;
  padding: 0;
  border: 0;
}

ul.ai-debug-tools a, ul.ai-debug-tools a:link, ul.ai-debug-tools a:visited {
  text-decoration: none;
  color: #aaa;
}

ul.ai-debug-tools a:hover {
  color: #5faff9!important;
}

ul.ai-debug-tools .ab-icon {
  position: relative;
  font: 400 20px/1 dashicons;
  speak: none;
  padding: 4px 0;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  background-image: none!important;
  margin-right: 6px;
  vertical-align: text-top;
}

ul.ai-debug-tools .ai-debug-tools-title {
  padding-bottom: 10px;
}

.ai-debug-tools-title .ab-icon:before {
  content: '\\f111';
  top: 2px;
  color: rgba(240,245,250,.6)!important;
}
ul.ai-debug-tools .ab-icon.on:before {
  color: #00f200!important;
}
ul.ai-debug-tools .ab-icon.red:before {
  color: #f22!important;
}
ul li.ai-debug-ai-toolbar-status {
  color: #aaa;
  margin: 0 0 10px 0;
}
.ai-debug-ai-toolbar-blocks .ab-icon:before {
  content: '\\f135';
}
.ai-debug-ai-toolbar-positions .ab-icon:before {
  content: '\\f207';
}
ul.ai-debug-tools .ai-debug-tools-positions {
  margin-left: 22px;
}
.ai-debug-tools-positions .ab-icon:before {
  content: '\\f522';
}
.ai-debug-ai-toolbar-tags .ab-icon:before {
  content: '\\f475';
}
.ai-debug-ai-toolbar-no-insertion .ab-icon:before {
  content: '\\f214';
}
.ai-debug-ai-toolbar-adb-status .ab-icon:before {
  content: '\\f223';
}
.ai-debug-ai-toolbar-adb .ab-icon:before {
  content: '\\f160';
}
.ai-debug-ai-toolbar-processing .ab-icon:before {
  content: '\\f464';
}
</style>
";
  echo '
<ul class="ai-debug-tools">
';
  foreach ($ai_wp_data [AI_DEBUG_MENU_ITEMS] as $menu_item) {
    if (isset ($menu_item ['parent'])) {
      if ($menu_item ['parent'] == 'ai-toolbar-settings') {
        if ($menu_item ['id'] == 'ai-toolbar-status') {
          echo '  <li class="ai-debug-', $menu_item ['id'], '">';
          echo $menu_item ['title'];
          echo "</li>\n";
        } else {
            echo '  <li class="ai-debug-', $menu_item ['id'], '">';
            echo '<a href="', $menu_item ['href'], '">', $menu_item ['title'], '</a>';
            echo "</li>\n";
          }
      }
      elseif ($menu_item ['parent'] == 'ai-toolbar-positions') {
        echo '  <li class="ai-debug-', $menu_item ['id'], ' ai-debug-tools-positions">';
        echo '<a href="', $menu_item ['href'], '">', $menu_item ['title'], '</a>';
        echo "</li>\n";
      }
    } else if ($menu_item ['id'] == 'ai-toolbar-settings') {
        echo '  <li class="ai-debug-', $menu_item ['id'], ' ai-debug-tools-title">';
        echo '<a href="', $menu_item ['href'], '">', $menu_item ['title'], '</a>';
        echo "</li>\n";
      }
  }

  echo '</ul>
';
}

function ai_special_widget ($args, $instance, $block) {
  global $ai_wp_data, $ai_db_options, $block_object;

  $sticky = isset ($instance ['sticky']) ? $instance ['sticky'] : 0;

  if ($sticky) {
    $ai_wp_data [AI_STICKY_WIDGETS] = true;
    ai_add_attr_data ($args ['before_widget'], 'class', 'ai-sticky-widget');
    echo $args ['before_widget'];
  } else echo $args ['before_widget'];

  $title = !empty ($instance ['widget-title']) ? $instance ['widget-title'] : '';

  if (!empty ($title)) {
    echo $args ['before_title'], apply_filters ('widget_title', $title), $args ['after_title'];
  }

  switch ($block) {
    case 0:
      echo "<pre style='", AI_DEBUG_WIDGET_STYLE, "'>\n";
      ai_write_debug_info ();
      echo "</pre>";

      if ($ai_wp_data [AI_CLIENT_SIDE_DETECTION]) {
        for ($viewport = 1; $viewport <= 6; $viewport ++) {
          $viewport_name = get_viewport_name ($viewport);
          if ($viewport_name != '') {
            echo "<pre class='ai-viewport-" . $viewport ."' style='", AI_DEBUG_WIDGET_STYLE, "'>\n";
            echo "CLIENT-SIDE DEVICE:      ", $viewport_name;
            echo "</pre>";
          }
        }
      }
      break;
    case - 2:
      ai_write_debugging_tools ();
      break;
  }

  echo $args ['after_widget'];
}

function check_url_parameter_cookie_list ($list, $white_list, $parameters, &$found) {
  $parameter_list = trim ($list);
  $return = $white_list;
  $found = false;

  if ($parameter_list == AD_EMPTY_DATA || count ($parameters) == 0) {
    return !$return;
  }

  $found = true;

  foreach ($parameters as $index => $parameter) {
    if (is_string ($parameter)) {
      $parameters [$index] = urlencode ($parameter);
    }
  }

  $parameters_listed = explode (",", $parameter_list);
  foreach ($parameters_listed as $index => $parameter_listed) {
    if (trim ($parameter_listed) == "") unset ($parameters_listed [$index]); else
      $parameters_listed [$index] = trim ($parameter_listed);
  }

  foreach ($parameters_listed as $parameter) {
    if (strpos ($parameter, "=") !== false) {
      $parameter_value = explode ("=", $parameter);
      if (array_key_exists ($parameter_value [0], $parameters) && $parameters [$parameter_value [0]] == $parameter_value [1]) return $return;
    } else if (array_key_exists ($parameter, $parameters)) return $return;
  }

  $found = false;
  return !$return;
}


function check_url_parameter_list ($url_parameters, $white_list, &$found) {
  return check_url_parameter_cookie_list ($url_parameters, $white_list, $_GET, $found);
}

function check_cookie_list ($url_parameters, $white_list) {
  $dummy = false;
  return check_url_parameter_cookie_list ($url_parameters, $white_list, $_COOKIE, $dummy);
}

function check_url_parameter_and_cookie_list ($url_parameters, $white_list) {
  $dummy = false;
  return check_url_parameter_cookie_list ($url_parameters, $white_list, array_merge ($_COOKIE, $_GET), $dummy);
}

function check_referer_list ($referers, $white_list) {

  if (isset ($_GET ['referrer'])) {
    $referer_host = $_GET ['referrer'];
  }
  elseif (isset ($_SERVER['HTTP_REFERER'])) {
      $referer_host = strtolower (parse_url ($_SERVER['HTTP_REFERER'], PHP_URL_HOST));
  }
  else $referer_host = '';

  $return = $white_list;

  $domains = strtolower (trim ($referers));
  if ($domains == AD_EMPTY_DATA) return !$return;
  $domains = explode (",", $domains);

  foreach ($domains as $domain) {
    $domain = trim ($domain);
    if ($domain == "") continue;

    if ($domain [0] == '*') {
      if ($domain [strlen ($domain) - 1] == '*') {
        $domain = substr ($domain, 1, strlen ($domain) - 2);
        if (strpos ($referer_host, $domain) !== false) return $return;
      } else {
          $domain = substr ($domain, 1);
          if (substr ($referer_host, - strlen ($domain)) == $domain) return $return;
        }
    }
    elseif ($domain [strlen ($domain) - 1] == '*') {
      $domain = substr ($domain, 0, strlen ($domain) - 1);
      if (strpos ($referer_host, $domain) === 0) return $return;
    }

    if ($domain == "#") {
      if ($referer_host == "") return $return;
    } elseif ($domain == $referer_host) return $return;
  }
  return !$return;
}

function ai_check_block ($block) {
  global $ai_delay_showing_pageviews;

  $ai_cookie_name = 'aiBLOCKS';

  if (isset ($_COOKIE [$ai_cookie_name])) {
    $ai_cookie = json_decode (stripslashes ($_COOKIE [$ai_cookie_name]));
  } else $ai_cookie = new stdClass();

  if (isset ($ai_delay_showing_pageviews)) {
    if (!isset ($ai_cookie->$block)) {
      $ai_cookie->$block = new stdClass();
    }

    if (!isset ($ai_cookie->$block->d)) {
      $ai_cookie->$block->d = $ai_delay_showing_pageviews;
    }

    unset ($ai_delay_showing_pageviews);
  }

  if (isset ($ai_cookie)) {
    if (isset ($ai_cookie->$block) && is_object ($ai_cookie->$block)) {
      foreach ($ai_cookie->$block as $property => $value) {
        switch ($property) {
          case 'x':
            $closed_for = $value - time ();

            if ($closed_for > 0) {
              return false;
            } else {
                ai_set_cookie ($block, 'x', '');
              }
            break;
          case 'd':
            if ($value != 0) {
              return false;
            }
            break;
        }
      }
    }
  }

  return true;
}

function ai_set_cookie ($block, $property, $value) {
  $ai_cookie_name = 'aiBLOCKS';

  if (isset ($_COOKIE [$ai_cookie_name])) {
    $ai_cookie = json_decode (stripslashes ($_COOKIE [$ai_cookie_name]));
  } else $ai_cookie = new stdClass();

//  print_r ($ai_cookie);

  if ($value == '') {
    if (isset ($ai_cookie->$block) && is_object ($ai_cookie->$block)) {
      unset ($ai_cookie->$block->$property);
      $ai_cookie_array = (array) $ai_cookie->$block;
      if (empty ($ai_cookie_array)) {
        unset ($ai_cookie->$block);
      }
    }
  } else {
      if (!isset ($ai_cookie->$block)) {
        $ai_cookie->$block = new stdClass();
      }
      $ai_cookie->$block->$property = $value;
    }

  $ai_cookie_array = (array) $ai_cookie;
  if (empty ($ai_cookie_array)) {
    unset ($_COOKIE [$ai_cookie_name]);
    setcookie ($ai_cookie_name, null, - 1, '/');
  } else {
      $_COOKIE [$ai_cookie_name] = addslashes (json_encode ($ai_cookie));
      setcookie ($ai_cookie_name, $_COOKIE [$ai_cookie_name], 365, '/');
    }

//    if (isset ($_COOKIE [$ai_cookie_name])) {
//      print_r ($_COOKIE [$ai_cookie_name]);
//    } else echo "NO COOKIE <br />";
}

function get_paragraph_start_positions ($content, $multibyte, $paragraph_end_positions, $paragraph_start_strings, &$paragraph_positions, &$active_paragraph_positions) {
  foreach ($paragraph_start_strings as $paragraph_start_string) {
    if (trim ($paragraph_start_string) == '') continue;

    $last_position = - 1;

    $paragraph_start_string = trim ($paragraph_start_string);
    if ($paragraph_start_string == "#") {
      $paragraph_start = "\r\n\r\n";
      if (!in_array (0, $paragraph_positions)) {
        $paragraph_positions [] = 0;
        $active_paragraph_positions [0] = 1;
      }
    } else $paragraph_start = '<' . $paragraph_start_string;

    if ($multibyte) {
      $paragraph_start_len = mb_strlen ($paragraph_start);
      while (mb_stripos ($content, $paragraph_start, $last_position + 1) !== false) {
        $last_position = mb_stripos ($content, $paragraph_start, $last_position + 1);
        if ($paragraph_start_string == "#") {
          $paragraph_positions [] = $last_position + 4;
          $active_paragraph_positions [$last_position + 4] = 1;
        } elseif (mb_substr ($content, $last_position + $paragraph_start_len, 1) == ">" || mb_substr ($content, $last_position + $paragraph_start_len, 1) == " ") {
            $paragraph_positions [] = $last_position;
            $active_paragraph_positions [$last_position] = 1;
          }
      }
    } else {
        $paragraph_start_len = strlen ($paragraph_start);
        while (stripos ($content, $paragraph_start, $last_position + 1) !== false) {
          $last_position = stripos ($content, $paragraph_start, $last_position + 1);
          if ($paragraph_start_string == "#") {
            $paragraph_positions [] = $last_position + 4;
            $active_paragraph_positions [$last_position + 4] = 1;
          } elseif ($content [$last_position + $paragraph_start_len] == ">" || $content [$last_position + $paragraph_start_len] == " ") {
              $paragraph_positions [] = $last_position;
              $active_paragraph_positions [$last_position] = 1;
            }
        }
      }
  }

  // Consistency check
  if (count ($paragraph_end_positions) != 0) {
    foreach ($paragraph_end_positions as $index => $paragraph_end_position) {
      if ($index == 0) {
        if (!isset ($paragraph_positions [$index]) || $paragraph_positions [$index] >= $paragraph_end_position) {
          $paragraph_positions [$index] = 0;
        }
      } else {
          if (!isset ($paragraph_positions [$index]) || $paragraph_positions [$index] >= $paragraph_end_position || $paragraph_positions [$index] <= $paragraph_end_positions [$index - 1]) {
            $paragraph_positions [$index] = $paragraph_end_positions [$index - 1] + 1;
          }
        }
    }
  }
}

function get_paragraph_end_positions ($content, $multibyte, $paragraph_start_positions, $paragraph_end_strings, &$paragraph_positions, &$active_paragraph_positions) {

  $no_closing_tag = array ('img', 'hr', 'br');

  foreach ($paragraph_end_strings as $paragraph_end_string) {

    $last_position = - 1;

    $paragraph_end_string = trim ($paragraph_end_string);
    if ($paragraph_end_string == '') continue;

    if (in_array ($paragraph_end_string, $no_closing_tag)) {
      if (preg_match_all ("/<$paragraph_end_string([^>]*?)>/", $content, $images)) {
        foreach ($images [0] as $paragraph_end) {
          if ($multibyte) {
            $last_position = mb_stripos ($content, $paragraph_end, $last_position + 1) + mb_strlen ($paragraph_end) - 1;
            $paragraph_positions [] = $last_position;
            $active_paragraph_positions [$last_position] = 1;
          } else {
              $last_position = stripos ($content, $paragraph_end, $last_position + 1) + strlen ($paragraph_end) - 1;
              $paragraph_positions [] = $last_position;
              $active_paragraph_positions [$last_position] = 1;
            }
        }
      }
      continue;
    }
    elseif ($paragraph_end_string == "#") {
      $paragraph_end = "\r\n\r\n";
      if (!in_array ($last_content_position, $paragraph_positions)) {
        $paragraph_positions [] = $last_content_position;
        $active_paragraph_positions [$last_content_position] = 1;
      }
    } else $paragraph_end = '</' . $paragraph_end_string . '>';

    if ($multibyte) {
      while (mb_stripos ($content, $paragraph_end, $last_position + 1) !== false) {
        $last_position = mb_stripos ($content, $paragraph_end, $last_position + 1) + mb_strlen ($paragraph_end) - 1;
        if ($paragraph_end_string == "#") {
          $paragraph_positions [] = $last_position - 4;
          $active_paragraph_positions [$last_position - 4] = 1;
        } else {
            $paragraph_positions [] = $last_position;
            $active_paragraph_positions [$last_position] = 1;
          }
      }
    } else {
        while (stripos ($content, $paragraph_end, $last_position + 1) !== false) {
          $last_position = stripos ($content, $paragraph_end, $last_position + 1) + strlen ($paragraph_end) - 1;
          if ($paragraph_end_string == "#") {
            $paragraph_positions [] = $last_position - 4;
            $active_paragraph_positions [$last_position - 4] = 1;
          } else {
              $paragraph_positions [] = $last_position;
              $active_paragraph_positions [$last_position] = 1;
            }
        }
      }
  }

  // Consistency check
  if (count ($paragraph_start_positions) != 0) {
    foreach ($paragraph_start_positions as $index => $paragraph_start_position) {
      if ($index == count ($paragraph_start_positions) - 1) {
        if (!isset ($paragraph_positions [$index]) || $paragraph_positions [$index] <= $paragraph_start_position) {
          $paragraph_positions [$index] = strlen ($content) - 1;
        }
      } else {
          if (!isset ($paragraph_positions [$index]) || $paragraph_positions [$index] <= $paragraph_start_position || $paragraph_positions [$index] >= $paragraph_start_positions [$index + 1]) {
            $paragraph_positions [$index] = $paragraph_start_positions [$index + 1] - 1;
          }
        }
    }
  }
}

function ai_secret_key () {
  $key = '';
  if (defined ('NONCE_KEY')) {
    $key = NONCE_KEY;
  }
  $key .= AD_INSERTER_VERSION;
  return (substr (preg_replace ("/[^A-Za-z]+/", '', base64_encode ($key)), 0, 16));
}

function ai_get_unique_string ($start = 0, $length = 32, $seed = '') {
  $string = 'AI#1' . $seed;
  if (defined ('AUTH_KEY')) $string .= AUTH_KEY;
  if (defined ('SECURE_AUTH_KEY')) $string .= SECURE_AUTH_KEY;
  if (defined ('LOGGED_IN_KEY')) $string .= LOGGED_IN_KEY;
  if (defined ('NONCE_KEY')) $string .= NONCE_KEY;
  if (defined ('AUTH_SALT')) $string .= AUTH_SALT;
  if (defined ('SECURE_AUTH_SALT')) $string .= SECURE_AUTH_SALT;
  if (defined ('LOGGED_IN_SALT')) $string .= LOGGED_IN_SALT;
  if (defined ('NONCE_SALT')) $string .= NONCE_SALT;

  return (substr (md5 ($string), $start, $length));
}

//function ai_the_generator ($generator) {
////  return preg_replace ('/content="(.*?)"/', 'content="$1, '.AD_INSERTER_NAME.' '. AD_INSERTER_VERSION.'"', $generator);
//  return $generator . PHP_EOL . '<meta name="generator" content="'.AD_INSERTER_NAME.' '.AD_INSERTER_VERSION.'" />';
//}


function ai_yoast_primary_category () {
  $category = get_the_category ();
  // If post has a category assigned.
  if ($category) {
    $primary_category = '';
    if (class_exists ('WPSEO_Primary_Term')) {
      // Show the post's 'Primary' category, if this Yoast feature is available, & one is set
      $wpseo_primary_term = new WPSEO_Primary_Term ('category', get_the_id ());
      $wpseo_primary_term = $wpseo_primary_term->get_primary_term ();
      $term = get_term ($wpseo_primary_term);

      if (is_wp_error ($term)) {
        // Default to first category (not Yoast) if an error is returned
        $primary_category = $category [0]->slug;
      } else {
        // Yoast Primary category
        $primary_category = $term->slug;
      }
    } else {
        // Default, display the first category in WP's list of assigned categories
        $primary_category = $category [0]->slug;
      }
  }
  return $primary_category;
}


// ===========================================================================================


global $block_object, $ai_wp_data, $ad_inserter_globals, $ai_last_check, $ai_last_time, $ai_total_plugin_time, $ai_total_php_time, $ai_processing_log, $ai_db_options_extract, $ai_db_options, $block_insertion_log;

if (!defined ('AD_INSERTER_PLUGIN_DIR'))
  define ('AD_INSERTER_PLUGIN_DIR', plugin_dir_path (__FILE__));

define ('AI_WP_DEBUGGING_',                0);
define ('AI_DEBUG_PROCESSING_',            0x01);
define ('AI_URL_DEBUG_',                   'ai-debug');
define ('AI_URL_DEBUG_PROCESSING_',        'ai-debug-processing');
define ('AI_URL_DEBUG_PHP_',               'ai-debug-php');

if (isset ($_GET [AI_URL_DEBUG_PHP_]) && $_GET [AI_URL_DEBUG_PHP_] != '') {
  if (isset ($_COOKIE ['AI_WP_DEBUGGING'])) {
    ini_set ('display_errors', 1);
    error_reporting (E_ALL);
  }
}

$ai_wp_data [AI_WP_DEBUGGING_] = 0;

if (!is_admin()) {
  if (!isset ($_GET [AI_URL_DEBUG_]) || $_GET [AI_URL_DEBUG_] != 0)
    if (isset ($_GET [AI_URL_DEBUG_PROCESSING_]) || (isset ($_COOKIE ['AI_WP_DEBUGGING']) && ($_COOKIE ['AI_WP_DEBUGGING'] & AI_DEBUG_PROCESSING_) != 0))  {
      if (!isset ($_GET [AI_URL_DEBUG_PROCESSING_]) || $_GET [AI_URL_DEBUG_PROCESSING_] == 1) {
        $ai_wp_data [AI_WP_DEBUGGING_] |= AI_DEBUG_PROCESSING_;

        $ai_total_plugin_time = 0;
        $start_time = microtime (true);
        $ai_total_php_time = 0;
        $ai_last_time = microtime (true);
        $ai_processing_log = array ();
        ai_log ('INITIALIZATION START');
      }
    }
}

// Version check
global $wp_version, $version_string, $subversion_string;

if (version_compare ($wp_version, "4.0", "<")) {
  exit ('Ad Inserter ' . __('requires WordPress 4.0 or newer', 'ad-inserter') . '. <a href="http://codex.wordpress.org/Upgrading_WordPress" target=_blank">'. __('Please update!', 'ad-inserter') . '</a>');
}

//include required files
require_once AD_INSERTER_PLUGIN_DIR.'class.php';
require_once AD_INSERTER_PLUGIN_DIR.'constants.php';
require_once AD_INSERTER_PLUGIN_DIR.'settings.php';

if (($ai_wp_data [AI_WP_DEBUGGING] & AI_DEBUG_PROCESSING) != 0)
  ai_log ("AFTER REQUIRE: ". number_format (1000 * (microtime (true) - $start_time), 2)." ms");

$subversion_array = explode ("-", AD_INSERTER_VERSION);
$subversion_string = isset ($subversion_array [1]) ? '-'.$subversion_array [1] : '';
$version_array = explode (".", $subversion_array [0]);
$version_string = "";
foreach ($version_array as $number) {
  $version_string .= sprintf ("%02d", $number);
}

$ai_wp_data [AI_WP_URL] = remove_debug_parameters_from_url ();

$ad_inserter_globals = array ();
$block_object = array ();
$block_insertion_log = array ();

$ai_wp_data [AI_WP_PAGE_TYPE]           = AI_PT_NONE;
$ai_wp_data [AI_WP_AMP_PAGE]            = false;
$ai_wp_data [AI_WP_USER_SET]            = false;
$ai_wp_data [AI_WP_USER]                = AI_USER_NOT_LOGGED_IN;
$ai_wp_data [AI_CONTEXT]                = AI_CONTEXT_NONE;

$ai_wp_data [AI_SERVER_SIDE_DETECTION]  = false;
$ai_wp_data [AI_CLIENT_SIDE_DETECTION]  = false;
$ai_wp_data [AI_TRACKING]               = false;
$ai_wp_data [AI_STICKY_WIDGETS]         = false;
$ai_wp_data [AI_STICK_TO_THE_CONTENT]   = false;
$ai_wp_data [AI_ANIMATION]              = false;
$ai_wp_data [AI_CLOSE_BUTTONS]          = false;
$ai_wp_data [AI_IFRAMES]                = false;
$ai_wp_data [AI_DISABLE_CACHING]        = false;
$ai_wp_data [AI_CLIENT_SIDE_INSERTION]  = false;
$ai_wp_data [AI_LAZY_LOADING]           = false;
$ai_wp_data [AI_PAGE_BLOCKS]            = 0;
$ai_wp_data [AI_GEOLOCATION]            = false;
$ai_wp_data [AI_HTML_ELEMENT_SELECTION] = isset ($_POST ['html_element_selection']) ? $_POST ['html_element_selection'] : false;
$ai_wp_data [AI_MBSTRING_LOADED]        = extension_loaded ('mbstring');
$ai_wp_data [AI_PROCESSING_TIME]        = false;
$ai_wp_data [AI_FORCE_SERVERSIDE_CODE]  = false;
$ai_wp_data [AI_CODE_FOR_IFRAME]        = false;
$ai_wp_data [AI_HEAD_CODES]             = array ();
$ai_wp_data [AI_HEAD_GROUPS]            = array ();
$ai_wp_data [AI_ACTIVE_GROUP_NAMES]     = array ();
$ai_wp_data [AI_CHECK_BLOCK]            = false;

ai_load_settings ();

if (($ai_wp_data [AI_WP_DEBUGGING] & AI_DEBUG_PROCESSING) != 0)
  ai_log ("AFTER LOAD SETTINGS: ". number_format (1000 * (microtime (true) - $start_time), 2)." ms");

$ai_wp_data [AI_BACKEND_JS_DEBUGGING]  = get_backend_javascript_debugging ();
$ai_wp_data [AI_FRONTEND_JS_DEBUGGING] = get_frontend_javascript_debugging ();

if (isset ($_GET [AI_URL_DEBUG_PHP]) && $_GET [AI_URL_DEBUG_PHP] == '1') {
  if (get_remote_debugging ()) {
    ini_set ('display_errors', 1);
    error_reporting (E_ALL);
  }
}

if (isset ($_GET [AI_URL_DEBUG_JAVASCRIPT]) && $_GET [AI_URL_DEBUG_JAVASCRIPT] == '1') {
  if (get_remote_debugging ()) {
    $ai_wp_data [AI_FRONTEND_JS_DEBUGGING] = true;
  }
}

if (defined ('AI_ADBLOCKING_DETECTION') && AI_ADBLOCKING_DETECTION) {
  $ai_wp_data [AI_ADB_DETECTION] = $block_object [AI_ADB_MESSAGE_OPTION_NAME]->get_enable_manual ();

  if ($ai_wp_data [AI_ADB_DETECTION]) {
    $adb_2_name = AI_ADB_2_DEFAULT_NAME;
    define ('AI_ADB_COOKIE_VALUE', substr (preg_replace ("/[^A-Za-z]+/", '', strtolower (md5 (LOGGED_IN_KEY.md5 (NONCE_KEY)))), 0, 8));

    $script_path = AD_INSERTER_PLUGIN_DIR.'js';
    $script = $script_path.'/sponsors.js';

    if (is_writable ($script_path) && is_writable ($script)) {
      $adb_2_name = substr (preg_replace ("/[^A-Za-z]+/", '', strtolower (md5 (LOGGED_IN_KEY).md5 (NONCE_KEY))), 0, 8);

      $js_ok = false;
      if (file_exists ($script)) {
        if (strpos (file_get_contents ($script), $adb_2_name) !== false) $js_ok = true;
      }

      if (!$js_ok) {
        file_put_contents ($script, 'window.' . $adb_2_name . '=true;');
        define ('AI_ADB_2_FILE_RECREATED', true);
      }
    }

    define ('AI_ADB_2_NAME', $adb_2_name);

    if (function_exists ('ai_check_files')) ai_check_files ();
  }
}

if (function_exists ('ai_load_globals')) ai_load_globals ();

if (($ai_wp_data [AI_WP_DEBUGGING] & AI_DEBUG_PROCESSING) != 0)
  ai_log ("AFTER LOAD GLOBALS: ". number_format (1000 * (microtime (true) - $start_time), 2)." ms");

if (get_dynamic_blocks () == AI_DYNAMIC_BLOCKS_SERVER_SIDE_W3TC) {
  if (!in_array ('w3-total-cache/w3-total-cache.php', get_option ('active_plugins'))) {
    define ('AI_NO_W3TC', true);
    if (!defined ('W3TC_DYNAMIC_SECURITY')) define ('W3TC_DYNAMIC_SECURITY', 'W3 Total Cache plugin not active');
  }
  if (!defined ('W3TC_DYNAMIC_SECURITY')) {
    $string = AD_INSERTER_PLUGIN_DIR;
    if (defined ('AUTH_KEY'))      $string .= AUTH_KEY;
    if (defined ('LOGGED_IN_KEY')) $string .= LOGGED_IN_KEY;

    define ('W3TC_DYNAMIC_SECURITY', md5 ($string));
  }
}

if ($ai_wp_data [AI_SERVER_SIDE_DETECTION]) {
  require_once AD_INSERTER_PLUGIN_DIR.'includes/Mobile_Detect.php';

  $detect = new ai_Mobile_Detect;

  define ('AI_MOBILE',   $detect->isMobile ());
  define ('AI_TABLET',   $detect->isTablet ());
  define ('AI_PHONE',    AI_MOBILE && !AI_TABLET);
  define ('AI_DESKTOP',  !AI_MOBILE);
} else {
    define ('AI_MOBILE',   true);
    define ('AI_TABLET',   true);
    define ('AI_PHONE',    true);
    define ('AI_DESKTOP',  true);
  }

if (isset ($_POST [AI_FORM_SAVE]))
  define ('AI_SYNTAX_HIGHLIGHTING', isset ($_POST ["syntax-highlighter-theme"]) && $_POST ["syntax-highlighter-theme"] != AI_OPTION_DISABLED); else
    define ('AI_SYNTAX_HIGHLIGHTING', get_syntax_highlighter_theme () != AI_OPTION_DISABLED);

if (isset ($_POST [AI_FORM_SAVE])) {
  $ai_wp_data [AI_DISABLE_TRANSLATION] = isset ($_POST ['disable_translation']) ? $_POST ['disable_translation'] : DEFAULT_DISABLE_TRANSLATION;
} else $ai_wp_data [AI_DISABLE_TRANSLATION] = get_disable_translation ();

if (!$ai_wp_data [AI_DISABLE_TRANSLATION]) {
  add_action ('plugins_loaded',             'ai_load_plugin_textdomain_hook');
  add_filter ('load_textdomain_mofile',     'ai_load_textdomain_mofile', 10, 2);
}

add_action ('init',                       'ai_init_hook');
add_action ('wp_loaded',                  'ai_wp_loaded_hook');
add_action ('admin_menu',                 'ai_admin_menu_hook');
add_action ('admin_notices',              'ai_admin_notice_hook');
add_action ('wp',                         'ai_wp_hook');
add_action ('wp_enqueue_scripts',         'ai_wp_enqueue_scripts_hook' );
//add_action ('upgrader_process_complete',  'ai_upgrader_process_complete_hook', 10, 2);

if (function_exists ('ai_system_output_check')) $ai_system_output = ai_system_output_check (); else $ai_system_output = false;

//if (defined ('AI_BUFFERING')) {
//  add_action ('get_header',       'ai_buffering_start_hook', 99999);
//}

if (($ai_wp_data [AI_WP_DEBUGGING] & AI_DEBUG_PROCESSING) != 0 || $ai_system_output) {
  add_action ('shutdown',         'ai_shutdown_hook', 0);
}

add_action ('widgets_init',       'ai_widgets_init_hook');
add_action ('add_meta_boxes',     'ai_add_meta_box_hook');
add_action ('save_post',          'ai_save_meta_box_data_hook');

if (function_exists ('ai_hooks')) ai_hooks ();

add_filter ('plugin_action_links_'.plugin_basename (__FILE__), 'ai_plugin_action_links');
add_filter ('plugin_row_meta',    'ai_set_plugin_meta', 10, 2);
//add_filter ('the_generator',      'ai_the_generator');

if (is_admin () === true) {
  add_action ('wp_ajax_ai_ajax_backend', 'ai_ajax_backend');
  add_action ('wp_ajax_ai_ajax',         'ai_ajax');
  add_action ('wp_ajax_nopriv_ai_ajax',  'ai_ajax');
}

if (!get_option (AI_INSTALL_NAME)) {
  update_option (AI_INSTALL_NAME, time ());
}



if (defined ('AI_PLUGIN_TRACKING') && AI_PLUGIN_TRACKING) {

  add_action ('plugins_loaded', 'ai_plugins_loaded');

  function ai_plugins_loaded () {
    global $ai_wp_data, $ai_total_plugin_time;

    if (($ai_wp_data [AI_WP_DEBUGGING] & AI_DEBUG_PROCESSING) != 0) {
      ai_log ("PLUGINS LOADED START");
      $ai_wp_data [AI_PROCESSING_TIME] = true;
      $start_time = microtime (true);
    }

    if (!class_exists ('DST_Client')) {
      require_once dirname (__FILE__) . '/includes/dst/dst.php';
    }

    if (!function_exists ('ai_start_dst') && defined ('DST_Client::DST_FILTER_OPTIONS')) {
      function ai_start_dst () {
        global $ai_dst;

        $dst_settings = array (
            'main_file'           => __FILE__,
            'tracking_url'        => 'https://analytics.adinserter.pro/',
            'track_local'         => true,
            'tracking'            => DST_Client::DST_TRACKING_OPTIN,
            'use_email'           => DST_Client::DST_USE_EMAIL_OFF,
            'multisite_tracking'  => DST_Client::DST_MULTISITE_SITES_TRACKING_WAIT_FOR_MAIN,
            'deactivation_form'   => true,
            'admin_ip_tracking'   => true,
            'notice_icon'         => AD_INSERTER_PLUGIN_IMAGES_URL.'icon-50x50.jpg',
          );

        if (function_exists ('ai_dst_settings')) ai_dst_settings ($dst_settings);

        $ai_dst = new DST_Client ($dst_settings);
      }

      function ai_notice_text ($text) {
        $text =
          // translators: Opt-in message: Thank you for installing Ad Inserter (plugin name with HTML tags will be added)
          __("Thank you for installing", 'ad-inserter') . ' [STRONG][NAME][/STRONG]. ' .
          // translators: Opt-in message: %s: HTML tags
          sprintf (__("We would like to %s track its usage %s on your site. This is completely optional and can be disabled at any time.", 'ad-inserter'),
            '<a href="https://wordpress.org/plugins/ad-inserter/#privacy%20policy%20%E2%80%93%20plugin%20usage%20tracking" target=_blank" style="text-decoration: none; box-shadow: 0 0 0;">', '</a>') . '[P]' .
          __("We don't record any sensitive data, only information regarding the WordPress environment and plugin usage, which will help us to make improvements to the plugin.", 'ad-inserter');

        return $text;
      }

      function ai_dst_options ($options) {
        global $ai_db_options, $ai_db_options_extract;

        if (isset ($ai_db_options_extract [AI_EXTRACT_USED_BLOCKS])) {
          $used_blocks = count (unserialize ($ai_db_options_extract [AI_EXTRACT_USED_BLOCKS]));
        } else $used_blocks = '';

        $install_timestamp = get_option (AI_INSTALL_NAME);
        if ($install_timestamp) {
          $install_date = $install_timestamp;
        } else $install_date = '';

        if (isset ($ai_db_options [AI_OPTION_GLOBAL]['TIMESTAMP'])) {
          $settings_date = $ai_db_options [AI_OPTION_GLOBAL]['TIMESTAMP'];
        } else $settings_date = '';

        $count_posts = wp_count_posts ();

        $options ['posts']             = is_numeric ($count_posts->publish) ? $count_posts->publish : 0;
        $options ['blocks']            = $used_blocks;
        $options ['installation']      = $install_date;
        $options ['settings']          = $settings_date;
        $options ['notice_review']     = ($review = get_option ('ai-notice-review')) ? $review : '';
        $options ['remote_debugging']  = get_remote_debugging ();
        $options ['block_class']       = get_block_class_name ();
        return ($options);
      }

      function ai_dst_form_text ($form) {
        $form ['body'] =
          '</p>' .
          // translators: Deactivation message: %s: HTML tags
          sprintf (__("Looking for %s Documentation, %s %s Common Settings, %s %s Quick Start %s or help for %s AdSense ads? %s The plugin doesn't work with your theme? %s Let us know %s and we'll try to help you.", 'ad-inserter'),
          '<a href="https://adinserter.pro/documentation" target="_blank" style="text-decoration: none; box-shadow: 0 0 0;">', '</a>',
          '<a href="https://adinserter.pro/documentation/common-settings" target="_blank" style="text-decoration: none; box-shadow: 0 0 0;">', '</a>',
          '<a href="https://adinserter.pro/documentation/quick-start" target="_blank" style="text-decoration: none; box-shadow: 0 0 0;">', '</a>',
          '<a href="https://adinserter.pro/documentation/adsense-ads" target="_blank" style="text-decoration: none; box-shadow: 0 0 0;">', '</a>',
          '<a href="https://adinserter.pro/contact#help" target="_blank" style="text-decoration: none; box-shadow: 0 0 0;">', '</a>') .
          '<hr /><p>' .
          $form ['body'];
        return ($form);
      }

      add_filter (DST_Client::DST_FILTER_OPTIN_NOTICE_TEXT . AD_INSERTER_SLUG, 'ai_notice_text');
      add_filter (DST_Client::DST_FILTER_OPTIONS .           AD_INSERTER_SLUG, 'ai_dst_options');
      add_filter (DST_Client::DST_FILTER_FORM_TEXT .         AD_INSERTER_SLUG, 'ai_dst_form_text');

      ai_start_dst ();
    }

    if (($ai_wp_data [AI_WP_DEBUGGING] & AI_DEBUG_PROCESSING) != 0) {
      $ai_total_plugin_time += microtime (true) - $start_time;
      ai_log ("PLUGINS LOADED END: ". number_format (1000 * (microtime (true) - $start_time), 2)." ms\n");
      $ai_wp_data [AI_PROCESSING_TIME] = false;
    }
  }
}

if (($ai_wp_data [AI_WP_DEBUGGING] & AI_DEBUG_PROCESSING) != 0) {
  $ai_total_plugin_time += microtime (true) - $start_time;
  ai_log ("INITIALIZATION END: ". number_format (1000 * (microtime (true) - $start_time), 2)." ms\n");
}

// ===========================================================================================

if (!class_exists ('ai_widget')) {
  class ai_widget extends WP_Widget {

    function __construct () {
      parent::__construct (
        false,                                  // Base ID
        AD_INSERTER_NAME,                       // Name
        array (                                 // Args
          'classname'   => 'ai_widget',
                                    // translators: %s: Ad Inserter
          'description' => sprintf (__('%s block.', 'ad-inserter'), AD_INSERTER_NAME)
        )
      );
    }

    function form ($instance) {
      global $block_object;

      // Output admin widget options form

      $widget_title = !empty ($instance ['widget-title']) ? $instance ['widget-title'] : '';
      $block  = isset ($instance ['block'])   ? $instance ['block']   : 1;
      if ($block > 96) $block = 1;
      $sticky = isset ($instance ['sticky'])  ? $instance ['sticky']  : 0;

      // translators: widget title
      if ($block == 0) $title = __('Processing log', 'ad-inserter');
      // translators: widget title
      elseif ($block == - 1) $title = __('Dummy widget', 'ad-inserter');
      // translators: widget title
      elseif ($block == - 2) $title = __('Debugging tools', 'ad-inserter');
      elseif ($block >= 1) {
        $obj = $block_object [$block];

        $title = '[' . $block . '] ' . $obj->get_ad_name();
        if (!empty ($widget_title)) $title .= ' - ' . $widget_title;
        // translators: block status (widget title)
        if ($obj->get_disable_insertion ()) $title .= ' - ' . _x('PAUSED', 'block', 'ad-inserter') . ' ';
        if (!$obj->get_enable_widget ()) $title .= ' - ' . __('WIDGET DISABLED', 'ad-inserter');
      } else $title = __('Unknown block', 'ad-inserter');

      $url_parameters = "";
      if (function_exists ('ai_settings_url_parameters')) $url_parameters = ai_settings_url_parameters ($block);

      ?>
      <input id="<?php echo $this->get_field_id ('title'); ?>" name="<?php echo $this->get_field_name ('title'); ?>" type="hidden" value="<?php echo esc_attr ($title); ?>">

      <p>
        <label for="<?php echo $this->get_field_id ('widget-title'); ?>"><?php _e('Title', 'ad-inserter'); ?>: &nbsp;</label>
        <input id="<?php echo $this->get_field_id ('widget-title'); ?>" name="<?php echo $this->get_field_name ('widget-title'); ?>" type="text" value="<?php echo esc_attr ($widget_title); ?>" style="width: 100%;">
      </p>

      <p>
        <label for="<?php echo $this->get_field_id ('block'); ?>"><a href='<?php echo admin_url ('options-general.php?page=ad-inserter.php'), $url_parameters, "&tab=", $block; ?>' title='Click for block settings' style='text-decoration: none;'><?php _e('Block', 'ad-inserter'); ?></a>:</label>
        <select id="<?php echo $this->get_field_id ('block'); ?>" name="<?php echo $this->get_field_name('block'); ?>" style="width: 100%;">
          <?php
            for ($block_index = 1; $block_index <= 96; $block_index ++) {
              $obj = $block_object [$block_index];
          ?>
          <option value='<?php echo $block_index; ?>' <?php if ($block_index == $block) echo 'selected="selected"'; ?>><?php echo $block_index, ' - ', $obj->get_ad_name(), $obj->get_disable_insertion () ? ' - PAUSED' : ''; ?></option>
          <?php } ?>
          <option value='-2' <?php if ($block == - 2) echo 'selected="selected"'; ?>><?php _e('Debugging tools', 'ad-inserter'); ?></option>
          <option value='0' <?php if ($block == 0) echo 'selected="selected"'; ?>><?php _e('Processing log', 'ad-inserter'); ?></option>
          <option value='-1' <?php if ($block == - 1) echo 'selected="selected"'; ?>><?php _e('Dummy widget', 'ad-inserter'); ?></option>
        </select>
      </p>

      <p>
        <input type="hidden"   name='<?php echo $this->get_field_name ('sticky'); ?>' value="0" />
        <input type='checkbox' id='<?php echo $this->get_field_id ('sticky'); ?>' name='<?php echo $this->get_field_name ('sticky'); ?>' value='1' <?php if ($sticky) echo 'checked '; ?>>
        <label for='<?php echo $this->get_field_id ('sticky'); ?>'><?php _ex('Sticky', 'Widget', 'ad-inserter'); ?></label>
      </p>
      <?php
    }

    function update ($new_instance, $old_instance) {
      // Save widget options
      $instance = $old_instance;

      $instance ['widget-title'] = (!empty ($new_instance ['widget-title'])) ? strip_tags ($new_instance ['widget-title']) : '';
      $instance ['title']   = (!empty ($new_instance ['title'])) ?  ($new_instance ['title']) : '';
      $instance ['block']   = (isset ($new_instance ['block'])) ? $new_instance ['block'] : 1;
      $instance ['sticky']  = (isset ($new_instance ['sticky'])) ? $new_instance ['sticky'] : 0;

      return $instance;
    }

    function widget ($args, $instance) {
      global $ai_last_check, $ai_wp_data, $ai_total_plugin_time;

      $debug_processing = ($ai_wp_data [AI_WP_DEBUGGING] & AI_DEBUG_PROCESSING) != 0;
      if ($debug_processing) $start_time = microtime (true);

      $ai_last_check = AI_CHECK_NONE;

      $block = 0;
      ai_widget_draw ($args, $instance, $block);

      if ($debug_processing) {
        $ai_total_plugin_time += microtime (true) - $start_time;
        if ($ai_last_check != AI_CHECK_NONE) ai_log (ai_log_block_status ($block, $ai_last_check));
        ai_log ("WIDGET END: ". number_format (1000 * (microtime (true) - $start_time), 2)." ms\n");
      }
    }
  }
}


} else {
    if (!function_exists ('ai_activation_error')) {
      require_once ABSPATH . 'wp-admin/includes/plugin.php';

      function ai_activation_error () {
?>
        <div class="notice notice-error is-dismissible">
          <div class="ai-notice-element">
            <img src="<?php echo AD_INSERTER_PLUGIN_IMAGES_URL; ?>icon-50x50.jpg" style="width: 50px; margin: 5px 10px 0px 10px;" />
          </div>
          <div class="ai-notice-element" style="width: 100%; padding: 0 10px 0;">
            <p><?php _e("Ad Inserter can't be used while Ad Inserter Pro is active! To activate Ad Inserter you need to first deactivate Ad Inserter Pro.", 'ad-inserter'); ?></p>
            <p><?php _e("<strong>WARNING</strong>: Please note that saving settings in Ad Inserter will clear all settings that are available only in the Pro version (additional block and plugin settings)!", 'ad-inserter'); ?></p>
          </div>
        </div>
<?php
      }

      unset ($_GET ['activate']);
      deactivate_plugins ('ad-inserter/ad-inserter.php');
      add_action ('admin_notices', 'ai_activation_error');
    }
  }

