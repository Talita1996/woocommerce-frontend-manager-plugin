<?php 
include_once( '../../../../wp-load.php' );
header("Content-type: text/css; charset: UTF-8"); 

?>

<style>
      
      /* Links */
      
      a {
        color: <?php echo get_option( 'admin_panel_colors_editor_option' )['links']; ?>;
      }

      a:hover, a:active, a:focus {
        color: <?php echo get_option( 'admin_panel_colors_editor_option' )['links']; ?>;
      }
      
      #post-body .misc-pub-post-status:before,
      #post-body #visibility:before,
      .curtime #timestamp:before,
      #post-body .misc-pub-revisions:before,
      span.wp-media-buttons-icon:before {
        color: currentColor;
      }
      /* Body */
      
      body {
        background-color: <?php echo get_option( 'admin_panel_colors_editor_option' )['background']; ?>;
      }

      /* Forms */
      input[type=checkbox]:checked::before {
        content: url("data:image/svg+xml;utf8,%3Csvg%20xmlns%3D%27http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%27%20viewBox%3D%270%200%2020%2020%27%3E%3Cpath%20d%3D%27M14.83%204.89l1.34.94-5.81%208.38H9.02L5.78%209.67l1.34-1.25%202.57%202.4z%27%20fill%3D%27%23<?php echo str_replace('#', '', get_option( 'admin_panel_colors_editor_option' )['links']); ?>%27%2F%3E%3C%2Fsvg%3E");
      }
      
      input[type=radio]:checked::before {
        background: <?php echo get_option( 'admin_panel_colors_editor_option' )['forms_inputs']; ?>;
      }
      
      .wp-core-ui input[type="reset"]:hover,
      .wp-core-ui input[type="reset"]:active {
        color: #0096dd;
      }
      
      input[type="text"]:focus,
      input[type="password"]:focus,
      input[type="color"]:focus,
      input[type="date"]:focus,
      input[type="datetime"]:focus,
      input[type="datetime-local"]:focus,
      input[type="email"]:focus,
      input[type="month"]:focus,
      input[type="number"]:focus,
      input[type="search"]:focus,
      input[type="tel"]:focus,
      input[type="text"]:focus,
      input[type="time"]:focus,
      input[type="url"]:focus,
      input[type="week"]:focus,
      input[type="checkbox"]:focus,
      input[type="radio"]:focus,
      select:focus,
      textarea:focus {
        border-color: <?php echo get_option( 'admin_panel_colors_editor_option' )['highlight']; ?>;
        box-shadow: 0 0 0 1px <?php echo get_option( 'admin_panel_colors_editor_option' )['highlight']; ?>;
      }
      
      /* Core UI */
      .wp-core-ui .button,
      .wp-core-ui .button-secondary {
        color: <?php echo get_option( 'admin_panel_colors_editor_option' )['buttons']; ?>;
        border-color: <?php echo get_option( 'admin_panel_colors_editor_option' )['buttons']; ?>;
      }
      
      .wp-core-ui .button.hover,
      .wp-core-ui .button:hover,
      .wp-core-ui .button-secondary:hover,
      .wp-core-ui .button.focus,
      .wp-core-ui .button:focus,
      .wp-core-ui .button-secondary:focus {
        border-color: #563e4c;
        color: #563e4c;
      }
      
      .wp-core-ui .button.focus,
      .wp-core-ui .button:focus,
      .wp-core-ui .button-secondary:focus {
        border-color: <?php echo get_option( 'admin_panel_colors_editor_option' )['buttons']; ?>;
        color: #563e4c;
        box-shadow: 0 0 0 1px <?php echo get_option( 'admin_panel_colors_editor_option' )['buttons']; ?>;
      }
      
      .wp-core-ui .button:active {
        background: #563e4c;
        border-color: #563e4c;
      }
      
      .wp-core-ui .button.active,
      .wp-core-ui .button.active:focus,
      .wp-core-ui .button.active:hover {
        border-color: #563e4c;
        color: #563e4c;
        box-shadow: inset 0 2px 5px -3px #563e4c;
      }
      
      .wp-core-ui .button-primary {
        background: <?php echo get_option( 'admin_panel_colors_editor_option' )['buttons']; ?>;
        border-color: <?php echo get_option( 'admin_panel_colors_editor_option' )['buttons']; ?>;
        color: #fff;
      }
      
      .wp-core-ui .button-primary:hover, .wp-core-ui .button-primary:focus {
        background: #6e4f61;
        border-color: #5c4351;
        color: #fff;
      }
      
      .wp-core-ui .button-primary:focus {
        box-shadow: 0 0 0 1px #fff, 0 0 0 3px <?php echo get_option( 'admin_panel_colors_editor_option' )['buttons']; ?>;
      }
      
      .wp-core-ui .button-primary:active {
        background: #563e4c;
        border-color: #563e4c;
        color: #fff;
      }
      
      .wp-core-ui .button-primary.active, .wp-core-ui .button-primary.active:focus, .wp-core-ui .button-primary.active:hover {
        background: <?php echo get_option( 'admin_panel_colors_editor_option' )['buttons']; ?>;
        color: #fff;
        border-color: #392932;
        box-shadow: inset 0 2px 5px -3px black;
      }
      
      .wp-core-ui .button-primary[disabled], .wp-core-ui .button-primary:disabled, .wp-core-ui .button-primary.button-primary-disabled, .wp-core-ui .button-primary.disabled {
        color: #d1c7cd !important;
        background: #4d3844 !important;
        border-color: #4d3844 !important;
        text-shadow: none !important;
      }
      
      .wp-core-ui .button-group > .button.active {
        border-color: <?php echo get_option( 'admin_panel_colors_editor_option' )['buttons']; ?>;
      }
      
      .wp-core-ui .wp-ui-primary {
        color: #fff;
        background-color: #000000;
      }
      
      .wp-core-ui .wp-ui-text-primary {
        color: #000000;
      }
      
      .wp-core-ui .wp-ui-highlight {
        color: #fff;
        background-color: <?php echo get_option( 'admin_panel_colors_editor_option' )['highlight']; ?>;
      }
      
      .wp-core-ui .wp-ui-text-highlight {
        color: <?php echo get_option( 'admin_panel_colors_editor_option' )['highlight']; ?>;
      }
      
      .wp-core-ui .wp-ui-notification {
        color: #fff;
        background-color: <?php echo get_option( 'admin_panel_colors_editor_option' )['notification']; ?>;
      }
      
      .wp-core-ui .wp-ui-text-notification {
        color: <?php echo get_option( 'admin_panel_colors_editor_option' )['notification']; ?>;
      }
      
      .wp-core-ui .wp-ui-text-icon {
        color: #f3f1f1;
      }
      
      /* List tables */
      .wrap .add-new-h2:hover,
      .wrap .page-title-action:hover {
        color: #fff;
        background-color: #000000;
      }
      
      .view-switch a.current:before {
        color: #000000;
      }
      
      .view-switch a:hover:before {
        color: <?php echo get_option( 'admin_panel_colors_editor_option' )['notification']; ?>;
      }
      
      /* Admin Menu */
      #adminmenuback,
      #adminmenuwrap,
      #adminmenu {
        background: <?php echo get_option( 'admin_panel_colors_editor_option' )['menu_background']; ?>;
      }
      
      #adminmenu a {
        color: <?php echo get_option( 'admin_panel_colors_editor_option' )['menu_text']; ?>;
      }
      
      #adminmenu div.wp-menu-image:before {
        color: <?php echo get_option( 'admin_panel_colors_editor_option' )['menu_text']; ?>;
      }
      
      #adminmenu a:hover,
      #adminmenu li.menu-top:hover,
      #adminmenu li.opensub > a.menu-top,
      #adminmenu li > a.menu-top:focus {
        color: <?php echo get_option( 'admin_panel_colors_editor_option' )['menu_text']; ?>;
        background-color: <?php echo get_option( 'admin_panel_colors_editor_option' )['highlight']; ?>;
      }
      
      #adminmenu li.menu-top:hover div.wp-menu-image:before,
      #adminmenu li.opensub > a.menu-top div.wp-menu-image:before {
        color: <?php echo get_option( 'admin_panel_colors_editor_option' )['menu_text']; ?>;
      }
      
      /* Active tabs use a bottom border color that matches the page background color. */
      .about-wrap .nav-tab-active,
      .nav-tab-active,
      .nav-tab-active:hover {
        background-color: <?php echo get_option( 'admin_panel_colors_editor_option' )['background']; ?>;
        border-bottom-color: <?php echo get_option( 'admin_panel_colors_editor_option' )['background']; ?>;
      }
      
      /* Admin Menu: submenu */
      #adminmenu .wp-submenu,
      #adminmenu .wp-has-current-submenu .wp-submenu,
      #adminmenu .wp-has-current-submenu.opensub .wp-submenu,
      .folded #adminmenu .wp-has-current-submenu .wp-submenu,
      #adminmenu a.wp-has-current-submenu:focus + .wp-submenu {
        background: black;
      }
      
      #adminmenu li.wp-has-submenu.wp-not-current-submenu.opensub:hover:after {
        border-right-color: black;
      }
      
      #adminmenu .wp-submenu .wp-submenu-head {
        color: #b3b3b3;
      }
      
      #adminmenu .wp-submenu a,
      #adminmenu .wp-has-current-submenu .wp-submenu a,
      .folded #adminmenu .wp-has-current-submenu .wp-submenu a,
      #adminmenu a.wp-has-current-submenu:focus + .wp-submenu a,
      #adminmenu .wp-has-current-submenu.opensub .wp-submenu a {
        color: #b3b3b3;
      }
      
      #adminmenu .wp-submenu a:focus, #adminmenu .wp-submenu a:hover,
      #adminmenu .wp-has-current-submenu .wp-submenu a:focus,
      #adminmenu .wp-has-current-submenu .wp-submenu a:hover,
      .folded #adminmenu .wp-has-current-submenu .wp-submenu a:focus,
      .folded #adminmenu .wp-has-current-submenu .wp-submenu a:hover,
      #adminmenu a.wp-has-current-submenu:focus + .wp-submenu a:focus,
      #adminmenu a.wp-has-current-submenu:focus + .wp-submenu a:hover,
      #adminmenu .wp-has-current-submenu.opensub .wp-submenu a:focus,
      #adminmenu .wp-has-current-submenu.opensub .wp-submenu a:hover {
        color: <?php echo get_option( 'admin_panel_colors_editor_option' )['highlight']; ?>;
      }
      
      /* Admin Menu: current */
      #adminmenu .wp-submenu li.current a,
      #adminmenu a.wp-has-current-submenu:focus + .wp-submenu li.current a,
      #adminmenu .wp-has-current-submenu.opensub .wp-submenu li.current a {
        color: <?php echo get_option( 'admin_panel_colors_editor_option' )['menu_text']; ?>;
      }
      
      #adminmenu .wp-submenu li.current a:hover, #adminmenu .wp-submenu li.current a:focus,
      #adminmenu a.wp-has-current-submenu:focus + .wp-submenu li.current a:hover,
      #adminmenu a.wp-has-current-submenu:focus + .wp-submenu li.current a:focus,
      #adminmenu .wp-has-current-submenu.opensub .wp-submenu li.current a:hover,
      #adminmenu .wp-has-current-submenu.opensub .wp-submenu li.current a:focus {
        color: <?php echo get_option( 'admin_panel_colors_editor_option' )['highlight']; ?>;
      }
      
      ul#adminmenu a.wp-has-current-submenu:after,
      ul#adminmenu > li.current > a.current:after {
        border-right-color: <?php echo get_option( 'admin_panel_colors_editor_option' )['background']; ?>;
      }
      
      #adminmenu li.current a.menu-top,
      #adminmenu li.wp-has-current-submenu a.wp-has-current-submenu,
      #adminmenu li.wp-has-current-submenu .wp-submenu .wp-submenu-head,
      .folded #adminmenu li.current.menu-top {
        color: #fff;
        background: <?php echo get_option( 'admin_panel_colors_editor_option' )['highlight']; ?>;
      }
      
      #adminmenu li.wp-has-current-submenu div.wp-menu-image:before,
      #adminmenu a.current:hover div.wp-menu-image:before,
      #adminmenu li.wp-has-current-submenu a:focus div.wp-menu-image:before,
      #adminmenu li.wp-has-current-submenu.opensub div.wp-menu-image:before,
      #adminmenu li:hover div.wp-menu-image:before,
      #adminmenu li a:focus div.wp-menu-image:before,
      #adminmenu li.opensub div.wp-menu-image:before,
      .ie8 #adminmenu li.opensub div.wp-menu-image:before {
        color: <?php echo get_option( 'admin_panel_colors_editor_option' )['menu_text']; ?>;
      }
      
      /* Admin Menu: bubble */
      #adminmenu .awaiting-mod,
      #adminmenu .update-plugins {
        color: #fff;
        background: <?php echo get_option( 'admin_panel_colors_editor_option' )['notification']; ?>;
      }
      
      #adminmenu li.current a .awaiting-mod,
      #adminmenu li a.wp-has-current-submenu .update-plugins,
      #adminmenu li:hover a .awaiting-mod,
      #adminmenu li.menu-top:hover > a .update-plugins {
        color: #fff;
        background: black;
      }
      
      /* Admin Menu: collapse button */
      #collapse-button {
        color: #f3f1f1;
      }
      
      #collapse-button:hover,
      #collapse-button:focus {
        color: <?php echo get_option( 'admin_panel_colors_editor_option' )['highlight']; ?>;
      }
      
      /* Admin Bar */
      #wpadminbar {
        color: <?php echo get_option( 'admin_panel_colors_editor_option' )['menu_text']; ?>;
        background: <?php echo get_option( 'admin_panel_colors_editor_option' )['menu_background']; ?>;
      }
      
      #wpadminbar .ab-item,
      #wpadminbar a.ab-item,
      #wpadminbar > #wp-toolbar span.ab-label,
      #wpadminbar > #wp-toolbar span.noticon {
        color: <?php echo get_option( 'admin_panel_colors_editor_option' )['menu_text']; ?>;
      }
      
      #wpadminbar .ab-icon,
      #wpadminbar .ab-icon:before,
      #wpadminbar .ab-item:before,
      #wpadminbar .ab-item:after {
        color: #f3f1f1;
      }
      
      #wpadminbar:not(.mobile) .ab-top-menu > li:hover > .ab-item,
      #wpadminbar:not(.mobile) .ab-top-menu > li > .ab-item:focus,
      #wpadminbar.nojq .quicklinks .ab-top-menu > li > .ab-item:focus,
      #wpadminbar.nojs .ab-top-menu > li.menupop:hover > .ab-item,
      #wpadminbar .ab-top-menu > li.menupop.hover > .ab-item {
        color: <?php echo get_option( 'admin_panel_colors_editor_option' )['highlight']; ?>;
        background: black;
      }
      
      #wpadminbar:not(.mobile) > #wp-toolbar li:hover span.ab-label,
      #wpadminbar:not(.mobile) > #wp-toolbar li.hover span.ab-label,
      #wpadminbar:not(.mobile) > #wp-toolbar a:focus span.ab-label {
        color: <?php echo get_option( 'admin_panel_colors_editor_option' )['highlight']; ?>;
      }
      
      #wpadminbar:not(.mobile) li:hover .ab-icon:before,
      #wpadminbar:not(.mobile) li:hover .ab-item:before,
      #wpadminbar:not(.mobile) li:hover .ab-item:after,
      #wpadminbar:not(.mobile) li:hover #adminbarsearch:before {
        color: #fff;
      }
      
      /* Admin Bar: submenu */
      #wpadminbar .menupop .ab-sub-wrapper {
        background: black;
      }
      
      #wpadminbar .quicklinks .menupop ul.ab-sub-secondary,
      #wpadminbar .quicklinks .menupop ul.ab-sub-secondary .ab-submenu {
        background: #121212;
      }
      
      #wpadminbar .ab-submenu .ab-item,
      #wpadminbar .quicklinks .menupop ul li a,
      #wpadminbar .quicklinks .menupop.hover ul li a,
      #wpadminbar.nojs .quicklinks .menupop:hover ul li a {
        color: #b3b3b3;
      }
      
      #wpadminbar .quicklinks li .blavatar,
      #wpadminbar .menupop .menupop > .ab-item:before {
        color: #f3f1f1;
      }
      
      #wpadminbar .quicklinks .menupop ul li a:hover,
      #wpadminbar .quicklinks .menupop ul li a:focus,
      #wpadminbar .quicklinks .menupop ul li a:hover strong,
      #wpadminbar .quicklinks .menupop ul li a:focus strong,
      #wpadminbar .quicklinks .ab-sub-wrapper .menupop.hover > a,
      #wpadminbar .quicklinks .menupop.hover ul li a:hover,
      #wpadminbar .quicklinks .menupop.hover ul li a:focus,
      #wpadminbar.nojs .quicklinks .menupop:hover ul li a:hover,
      #wpadminbar.nojs .quicklinks .menupop:hover ul li a:focus,
      #wpadminbar li:hover .ab-icon:before,
      #wpadminbar li:hover .ab-item:before,
      #wpadminbar li a:focus .ab-icon:before,
      #wpadminbar li .ab-item:focus:before,
      #wpadminbar li .ab-item:focus .ab-icon:before,
      #wpadminbar li.hover .ab-icon:before,
      #wpadminbar li.hover .ab-item:before,
      #wpadminbar li:hover #adminbarsearch:before,
      #wpadminbar li #adminbarsearch.adminbar-focused:before {
        color: <?php echo get_option( 'admin_panel_colors_editor_option' )['highlight']; ?>;
      }
      
      #wpadminbar .quicklinks li a:hover .blavatar,
      #wpadminbar .quicklinks li a:focus .blavatar,
      #wpadminbar .quicklinks .ab-sub-wrapper .menupop.hover > a .blavatar,
      #wpadminbar .menupop .menupop > .ab-item:hover:before,
      #wpadminbar.mobile .quicklinks .ab-icon:before,
      #wpadminbar.mobile .quicklinks .ab-item:before {
        color: <?php echo get_option( 'admin_panel_colors_editor_option' )['highlight']; ?>;
      }
      
      #wpadminbar.mobile .quicklinks .hover .ab-icon:before,
      #wpadminbar.mobile .quicklinks .hover .ab-item:before {
        color: #f3f1f1;
      }
      
      /* Admin Bar: search */
      #wpadminbar #adminbarsearch:before {
        color: #f3f1f1;
      }
      
      #wpadminbar > #wp-toolbar > #wp-admin-bar-top-secondary > #wp-admin-bar-search #adminbarsearch input.adminbar-input:focus {
        color: #fff;
        background: #121212;
      }
      
      /* Admin Bar: recovery mode */
      #wpadminbar #wp-admin-bar-recovery-mode {
        color: #fff;
        background-color: <?php echo get_option( 'admin_panel_colors_editor_option' )['notification']; ?>;
      }
      
      #wpadminbar #wp-admin-bar-recovery-mode .ab-item,
      #wpadminbar #wp-admin-bar-recovery-mode a.ab-item {
        color: #fff;
      }
      
      #wpadminbar .ab-top-menu > #wp-admin-bar-recovery-mode.hover > .ab-item,
      #wpadminbar.nojq .quicklinks .ab-top-menu > #wp-admin-bar-recovery-mode > .ab-item:focus,
      #wpadminbar:not(.mobile) .ab-top-menu > #wp-admin-bar-recovery-mode:hover > .ab-item,
      #wpadminbar:not(.mobile) .ab-top-menu > #wp-admin-bar-recovery-mode > .ab-item:focus {
        color: #fff;
        background-color: #c0461e;
      }
      
      /* Admin Bar: my account */
      #wpadminbar .quicklinks li#wp-admin-bar-my-account.with-avatar > a img {
        border-color: #121212;
        background-color: #121212;
      }
      
      #wpadminbar #wp-admin-bar-user-info .display-name {
        color: #fff;
      }
      
      #wpadminbar #wp-admin-bar-user-info a:hover .display-name {
        color: <?php echo get_option( 'admin_panel_colors_editor_option' )['highlight']; ?>;
      }
      
      #wpadminbar #wp-admin-bar-user-info .username {
        color: #b3b3b3;
      }
      
      /* Pointers */
      .wp-pointer .wp-pointer-content h3 {
        background-color: <?php echo get_option( 'admin_panel_colors_editor_option' )['highlight']; ?>;
        border-color: #d3007d;
      }
      
      .wp-pointer .wp-pointer-content h3:before {
        color: <?php echo get_option( 'admin_panel_colors_editor_option' )['highlight']; ?>;
      }
      
      .wp-pointer.wp-pointer-top .wp-pointer-arrow,
      .wp-pointer.wp-pointer-top .wp-pointer-arrow-inner,
      .wp-pointer.wp-pointer-undefined .wp-pointer-arrow,
      .wp-pointer.wp-pointer-undefined .wp-pointer-arrow-inner {
        border-bottom-color: <?php echo get_option( 'admin_panel_colors_editor_option' )['highlight']; ?>;
      }
      
      /* Media */
      .media-item .bar,
      .media-progress-bar div {
        background-color: <?php echo get_option( 'admin_panel_colors_editor_option' )['highlight']; ?>;
      }
      
      .details.attachment {
        box-shadow: inset 0 0 0 3px #fff, inset 0 0 0 7px <?php echo get_option( 'admin_panel_colors_editor_option' )['highlight']; ?>;
      }
      
      .attachment.details .check {
        background-color: <?php echo get_option( 'admin_panel_colors_editor_option' )['highlight']; ?>;
        box-shadow: 0 0 0 1px #fff, 0 0 0 2px <?php echo get_option( 'admin_panel_colors_editor_option' )['highlight']; ?>;
      }
      
      .media-selection .attachment.selection.details .thumbnail {
        box-shadow: 0 0 0 1px #fff, 0 0 0 3px <?php echo get_option( 'admin_panel_colors_editor_option' )['highlight']; ?>;
      }
      
      /* Themes */
      .theme-browser .theme.active .theme-name,
      .theme-browser .theme.add-new-theme a:hover:after,
      .theme-browser .theme.add-new-theme a:focus:after {
        background: <?php echo get_option( 'admin_panel_colors_editor_option' )['highlight']; ?>;
      }
      
      .theme-browser .theme.add-new-theme a:hover span:after,
      .theme-browser .theme.add-new-theme a:focus span:after {
        color: <?php echo get_option( 'admin_panel_colors_editor_option' )['highlight']; ?>;
      }
      
      .theme-section.current,
      .theme-filter.current {
        border-bottom-color: #000000;
      }
      
      body.more-filters-opened .more-filters {
        color: #fff;
        background-color: #000000;
      }
      
      body.more-filters-opened .more-filters:before {
        color: #fff;
      }
      
      body.more-filters-opened .more-filters:hover,
      body.more-filters-opened .more-filters:focus {
        background-color: <?php echo get_option( 'admin_panel_colors_editor_option' )['highlight']; ?>;
        color: #fff;
      }
      
      body.more-filters-opened .more-filters:hover:before,
      body.more-filters-opened .more-filters:focus:before {
        color: #fff;
      }
      
      /* Widgets */
      .widgets-chooser li.widgets-chooser-selected {
        background-color: <?php echo get_option( 'admin_panel_colors_editor_option' )['highlight']; ?>;
        color: #fff;
      }
      
      .widgets-chooser li.widgets-chooser-selected:before,
      .widgets-chooser li.widgets-chooser-selected:focus:before {
        color: #fff;
      }
      
      /* Responsive Component */
      div#wp-responsive-toggle a:before {
        color: #f3f1f1;
      }
      
      .wp-responsive-open div#wp-responsive-toggle a {
        border-color: transparent;
        background: <?php echo get_option( 'admin_panel_colors_editor_option' )['highlight']; ?>;
      }
      
      .wp-responsive-open #wpadminbar #wp-admin-bar-menu-toggle a {
        background: black;
      }
      
      .wp-responsive-open #wpadminbar #wp-admin-bar-menu-toggle .ab-icon:before {
        color: #f3f1f1;
      }
      
      /* TinyMCE */
      .mce-container.mce-menu .mce-menu-item:hover,
      .mce-container.mce-menu .mce-menu-item.mce-selected,
      .mce-container.mce-menu .mce-menu-item:focus,
      .mce-container.mce-menu .mce-menu-item-normal.mce-active,
      .mce-container.mce-menu .mce-menu-item-preview.mce-active {
        background: <?php echo get_option( 'admin_panel_colors_editor_option' )['highlight']; ?>;
      }
</style>