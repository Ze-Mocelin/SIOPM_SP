<style>
/* -- import Roboto Font ---------------------------- */
@import "https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic&subset=latin,cyrillic";

/* -- import Material Icons Font -------------------- */
@font-face {
  font-family: 'Material Design Iconic Font';
  src: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/53474/Material-Design-Iconic-Font.eot?v=1.0');
  src: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/53474/Material-Design-Iconic-Font.eot?#iefix&v=1.0') format('embedded-opentype'),
  url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/53474/Material-Design-Iconic-Font.woff?v=1.0') format('woff'),
  url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/53474/Material-Design-Iconic-Font.ttf?v=1.0') format('truetype'),
  url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/53474/Material-Design-Iconic-Font.svg?v=1.0#Material-Design-Iconic-Font') format('svg');
  font-weight: normal;
  font-style: normal;
}
// For more information about Material Design Iconic Font (examples and downloads) visit website: https://zavoloklom.github.io/material-design-iconic-font/

[class^="md-"], [class*=" md-"] {
  display: inline-block;
  font: normal normal normal 14px/1 'Material Design Iconic Font';
  font-size: inherit;
  speak: none;
  text-rendering: auto;

  // Better Font Rendering
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

.md {
  line-height: inherit;
  vertical-align: bottom;
}

.md-inbox:before {
  content: "\f10c";
}
.md-star:before {
  content: "\f2e5";
}
.md-send:before {
  content: "\f119";
}
.md-drafts:before {
  content: "\f107";
}
.md-arrow-back:before {
  content: "\f297";
}
.md-arrow-forward:before {
  content: "\f298";
}

/* -- You can use this sidebar in Bootstrap (v3) projects. HTML-markup like Navbar bootstrap component will make your work easier. -- */
// @import "//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css";


/* -- Box model ------------------------------- */
*,
*:after,
*:before {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}

/* -- Demo style ------------------------------- */
html, body {
  position: relative;
  min-height: 100%;
  height: 100%;
}

body {
  font-family: 'RobotoDraft', 'Roboto', 'Helvetica Neue, Helvetica, Arial', sans-serif;
  font-style: normal;
  font-weight: 300;
  font-size: 14px;
  line-height: 1.4;
  color: #212121;
  background-color: #f5f5f5;

  // Font Rendering
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-rendering: optimizeLegibility;
}

.sidebar-overlay {
  visibility: hidden;
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  opacity: 0;
  background: #000;
  z-index: @zindex-sidebar-fixed - 1;

  -webkit-transition: visibility 0 linear .4s,opacity .4s cubic-bezier(.4,0,.2,1);
  -moz-transition: visibility 0 linear .4s,opacity .4s cubic-bezier(.4,0,.2,1);
  transition: visibility 0 linear .4s,opacity .4s cubic-bezier(.4,0,.2,1);
  -webkit-transform: translateZ(0);
  -moz-transform: translateZ(0);
  -ms-transform: translateZ(0);
  -o-transform: translateZ(0);
  transform: translateZ(0);
}

.sidebar-overlay.active {
  opacity: 0.5;
  visibility: visible;
  -webkit-transition-delay: 0;
  -moz-transition-delay: 0;
  transition-delay: 0;
}

.top-bar {
  height: 25px;
  background: rgba(0, 0, 0, 0.1);
}

/* -- Google typography ------------------------------- */
.headline {
  font-size: 24px;
  font-weight: 300;
  line-height: 1.1;
  color: #212121;
  text-transform: inherit;
  letter-spacing: inherit;
}
.subhead {
  font-size: 16px;
  font-weight: 300;
  line-height: 1.1;
  color: #212121;
  text-transform: inherit;
  letter-spacing: inherit;
}

/* -- Bootstrap-like style ------------------------------- */
.caret {
  display: inline-block;
  width: 0;
  height: 0;
  margin-left: 2px;
  vertical-align: middle;
  border-top: 4px solid;
  border-right: 4px solid transparent;
  border-left: 4px solid transparent;
}

.dropdown-menu {
  display: none;
}

/* -- Constructor style ------------------------------- */
.constructor {
  position: relative;
  margin: 0;
  padding: 0 50px;
  .transition(all 0.5s cubic-bezier(0.55, 0, 0.1, 1));
}

// Positioning layout: default
.sidebar, .wrapper {
  display: table-cell;
  vertical-align: top;
}

// Positioning layout: stacked
.sidebar-stacked.open + .wrapper .constructor{
  margin-left: @sidebar-desktop-width;
}
@media (max-width: @screen-tablet) {
  .sidebar-stacked.open + .wrapper .constructor{
    margin-left: @sidebar-width;
  }
}


// Base variables
// --------------------------------------------------
@screen-tablet:          768px;

@gray-darker:            #212121; // #212121 - text
@gray-dark:              #757575; // #757575 - secondary text, icons
@gray:                   #bdbdbd; // #bdbdbd - hint text
@gray-light:             #e0e0e0; // #e0e0e0 - divider
@gray-lighter:           #f5f5f5; // #f5f5f5 - background

// Pink Material Colors
@pink-50:   #fce4ec;
@pink-100:  #f8bbd0;
@pink-200:  #f48fb1;
@pink-300:  #f06292;
@pink-400:  #ec407a;
@pink-500:  #e91e63;
@pink-600:  #d81b60;
@pink-700:  #c2185b;
@pink-800:  #ad1457;
@pink-900:  #880e4f;
@pink-A100: #ff80ab;
@pink-A200: #ff4081;
@pink-A400: #f50057;
@pink-A700: #c51162;

// Base mixins
// --------------------------------------------------
.clearfix() {
  &:before,
  &:after {
    content: " "; // 1
    display: table; // 2
  }
  &:after {
    clear: both;
  }
}

.text-overflow() {
  overflow: hidden;
  -o-text-overflow: ellipsis;
  text-overflow: ellipsis;
  white-space: nowrap;
}

.translate3d(@x; @y; @z) {
  -webkit-transform: translate3d(@x, @y, @z);
  transform: translate3d(@x, @y, @z);
}
.transition(@transition) {
  -webkit-transition: @transition;
  -o-transition: @transition;
  transition: @transition;
}
.box-shadow(@shadow) {
  -webkit-box-shadow: @shadow; // iOS <4.3 & Android <4.1
  box-shadow: @shadow;
}
.background-size(@background-size) {
  -webkit-background-size: @background-size;
  -moz-background-size: @background-size;
  -o-background-size: @background-size;
  background-size: @background-size;
}

/* -- Sidebar style ------------------------------- */

// Sidebar variables
// --------------------------------------------------
@zindex-sidebar-fixed: 1035;

@sidebar-desktop-width: 280px;
@sidebar-width: 240px;


@sidebar-padding: 16px;
@sidebar-divider: @sidebar-padding/2;

@sidebar-nav-height: 48px;

@sidebar-icon-width: 40px;
@sidebar-icon-size: 20px;

@sidebar-badge-size: @sidebar-nav-height/2;
@sidebar-badge-font-size: 10px;

@sidebar-brand-color: @gray-dark;
@sidebar-icon-color: @gray-dark;
@sidebar-menu-color: @gray-darker;


@sidebar-font-weight: 500;

// Sidebar mixins
// --------------------------------------------------

// Sidebar horizontal block
//
// This settings will extended by .sidebar-text, .sidebar-brand and .sidebar-nav>li>a
.sidebar-block() {
  display: block;
  height: @sidebar-nav-height;
  line-height: @sidebar-nav-height;
  padding: 0;
  padding-left: @sidebar-padding;
  padding-right: (@sidebar-padding + @sidebar-badge-size) + @sidebar-padding;
  text-decoration: none;
  clear: both;
  font-weight: @sidebar-font-weight;
  .text-overflow();
  .transition(all .2s ease-in-out);

  &:hover, &:focus {
    .box-shadow(none);
    outline: none;
  }

  // positioning caret in sidebar block
  .caret {
    position: absolute;
    right: @sidebar-padding + @sidebar-badge-size/2 - 4px; // caret centered by badge position; 4px - caret width
    top: @sidebar-nav-height/2;
  }
  // positioning badge in sidebar block
  .sidebar-badge {
    position: absolute;
    right: @sidebar-padding;
    top: (@sidebar-nav-height - @sidebar-badge-size)/2 ;
  }
}

// Sidebar design template
//
// You can make own sidebar style with this template
.sidebar-template(
  @color,
  @bg,
  @header-bg,
  @brand-color,
  @brand-bg,
  @brand-hover-color,
  @brand-hover-bg,
  @divider,
  @badge-color,
  @badge-bg,
  @icon-color,
  @icon-hover-color,
  @link-color,
  @link-bg,
  @link-hover-color,
  @link-hover-bg,
  @link-active-color,
  @link-active-bg,
  @link-disabled-color,
  @link-disabled-bg
) {

  background-color: @bg;

  .sidebar-header {
    background-color: @header-bg;
  }

  .sidebar-toggle {
    color: @brand-hover-color;
    background-color: transparent;
  }

  .sidebar-brand {
    color: @brand-color;
    background-color: @brand-bg;
    &:hover,
    &:focus {
      color: @brand-hover-color;
      background-color: @brand-hover-bg;
    }
  }

  .sidebar-badge {
    color: @badge-color;
    background-color: @badge-bg;
  }

  .sidebar-divider, .sidebar-nav .divider {
    background-color: @divider;
  }

  .sidebar-text {
    color: @color;
  }

  .sidebar-nav {
    li > a {
      color: @link-color;
      background-color: @link-bg;

      i {
        color: @icon-color;
      }
    }
    li:hover > a, li > a:hover {
      color: @link-hover-color;
      background-color: @link-hover-bg;

      i {
        color: @icon-hover-color;
      }
    }
    li:focus > a, li > a:focus {
      color: @link-color;
      background-color: @link-bg;

      i {
        color: @icon-hover-color;
      }
    }

    > .open > a {
      &,
      &:hover,
      &:focus {
        color: @link-hover-color;
        background-color: @link-hover-bg;
      }
    }

    > .active > a {
      &,
      &:hover,
      &:focus {
        color: @link-active-color;
        background-color: @link-active-bg;
      }
    }
    > .disabled > a {
      &,
      &:hover,
      &:focus {
        color: @link-disabled-color;
        background-color: @link-disabled-bg;
      }
    }
    > li > .ink {
      //background: #80d8ff;
      //opacity: 0.5;
    }

    // Dropdown menu items
    > .dropdown {
      // Remove background color from open dropdown
      > .dropdown-menu {

        background-color: @link-hover-bg;

        > li > a {
          &:focus {
            background-color: @link-hover-bg;
            color: @link-hover-color;
          }
          &:hover {
            background-color: darken(@link-hover-bg, 7%);
            color: @link-hover-color;
          }
        }

        > .active > a {
          &,
          &:hover,
          &:focus {
            color: @link-active-color;
            background-color: @link-active-bg;
          }
        }
      }
    }
  }
}

//
// Sidebars
// --------------------------------------------------

// Wrapper and base class
//
// Provide a static sidebar from which we expand to create other sidebar variations.
.sidebar {
  position: relative;
  display: block;
  min-height: 100%;
  overflow-y: auto;
  overflow-x: hidden;
  border: none;
  .transition(all 0.5s cubic-bezier(0.55, 0, 0.1, 1));


  // Prevent floats from breaking the sidebar
  // &:extend(.clearfix all);
  .clearfix();

  // Scrollbar style for webkit browsers
  &::-webkit-scrollbar-track {
    border-radius: 2px;
  }

  &::-webkit-scrollbar {
    width: 5px;
    background-color: #F7F7F7;
  }

  &::-webkit-scrollbar-thumb {
    border-radius: 10px;
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
    background-color: #BFBFBF;
  }
}

// Sidebar Elements
//
// Basic style of sidebar elements
.sidebar {

  //** Sidebar heading
  //----------------
  .sidebar-header {
    position: relative;
    height: @sidebar-desktop-width * 9/16; // 16:9 header dimension
    margin-bottom: @sidebar-divider;
    .transition(all .2s ease-in-out);

    // Brand/project cover
    // Addition class for sidebar header
    &.header-cover {
      background-repeat: no-repeat;
      background-position: center center;
      .background-size(cover);
    }

    &:hover {
      .sidebar-toggle {
        opacity: 1;
      }
    }
  }

  //** Sidebar toggle
  //
  // You can bind click on this button and toggle sidebar via javascript
  .sidebar-toggle {
    position: relative;
    float: right;
    margin: @sidebar-padding;
    padding: 0;
    background-image: none; // Reset unusual Firefox-on-Android default style;
    border: none;
    height: @sidebar-icon-width;
    width: @sidebar-icon-width;
    font-size: @sidebar-icon-size;
    opacity: 0.7;
    .transition(all .2s ease-in-out);
    .clearfix();
  }

  //** Sidebar arrow
  //----------------
  .icon-material-sidebar-arrow:before {
    content: "\e610"; // icon-material-arrow-back
  }

  //** Brand/project image
  //
  // In google guideline used for user profile image
  .sidebar-image {
    img {
      width: @sidebar-desktop-width/4 - @sidebar-padding;
      height: @sidebar-desktop-width/4 - @sidebar-padding;
      margin: @sidebar-padding;
      border-radius: 50%;
      .transition(all .2s ease-in-out);
    }
  }

  //** Brand/project name
  //
  // In google guideline used for email dropdown
  .sidebar-brand {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    .sidebar-block();

    &:hover,
    &:focus {
      text-decoration: none;
    }
  }

  //** Sidebar badge
  //----------------
  .sidebar-badge {
    display: inline-block;
    min-width: @sidebar-badge-size;
    height: @sidebar-badge-size;
    line-height: @sidebar-badge-size;
    padding: 0 3px;
    font-size: @sidebar-badge-font-size;
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    &.badge-circle {
      border-radius: 50%;
    }
  }

  //** Sidebar divider
  //----------------
  .sidebar-divider, .sidebar-nav .divider {
    position: relative;
    display: block;
    height: 1px;
    margin: @sidebar-divider 0;
    padding: 0;
    overflow: hidden;
  }

  //** Sidebar text
  //----------------
  .sidebar-text {
    .sidebar-block();
  }

  //** Sidebar icons
  //----------------
  .sidebar-icon {
    display: inline-block;
    margin-right: @sidebar-padding;
    min-width: @sidebar-icon-width;
    width: @sidebar-icon-width;
    text-align: left;
    font-size: @sidebar-icon-size;

    &:before, &:after {
      vertical-align: middle;
    }
  }
}



// Sidebar navigation class
// ------------------------
.sidebar .sidebar-nav {
  margin: 0;
  padding: 0;

  //** Links
  //----------------
  li {
    position: relative;
    list-style-type: none;

    a {
      position: relative;
      cursor: pointer;
      user-select: none;
      .sidebar-block();

      &:hover {
        background: transparent;
      }
    }
  }

  //** Dropdown menu
  //----------------
  .dropdown-menu {
    position: relative;
    width: 100%;
    margin: 0;
    padding: 0;
    border: none;
    border-radius: 0;
    .box-shadow(none);
  }
}

// Sidebar color theme variations
//
// ------------------------
.sidebar-default {
  .sidebar-template(
  @color: @gray-darker,
  @bg: #fff,
  @header-bg: #eceff1,
  @brand-color: @gray-dark,
  @brand-bg: transparent,
  @brand-hover-color: @gray-darker,
  @brand-hover-bg: rgba(0, 0, 0, 0.10),
  @divider: @gray,
  @badge-color: #fff,
  @badge-bg: @gray,
  @icon-color: @gray-dark,
  @icon-hover-color: @gray-dark,
  @link-color: @gray-darker,
  @link-bg: transparent,
  @link-hover-color: @gray-darker,
  @link-hover-bg: @gray-light,
  @link-active-color: @gray-darker,
  @link-active-bg: @gray-light,
  @link-disabled-color: @gray-light,
  @link-disabled-bg: transparent
  );
}
.sidebar-inverse {
  .sidebar-template(
  @color: @gray-lighter,
  @bg: @gray-darker,
  @header-bg: #eceff1,
  @brand-color: @gray-dark,
  @brand-bg: transparent,
  @brand-hover-color: @gray-darker,
  @brand-hover-bg: rgba(0, 0, 0, 0.10),
  @divider: @gray,
  @badge-color: @gray-darker,
  @badge-bg: @gray-light,
  @icon-color: @gray,
  @icon-hover-color: @gray,
  @link-color: @gray-lighter,
  @link-bg: transparent,
  @link-hover-color: @gray,
  @link-hover-bg: #000,
  @link-active-color: @gray-lighter,
  @link-active-bg: #000,
  @link-disabled-color: @gray-dark,
  @link-disabled-bg: transparent
  );
}
.sidebar-colored {
  .sidebar-template(
  @color: @gray-darker,
  @bg: #fff,
  @header-bg: @pink-500,
  @brand-color: @gray-light,
  @brand-bg: transparent,
  @brand-hover-color: @gray-lighter,
  @brand-hover-bg: rgba(0, 0, 0, 0.10),
  @divider: @gray,
  @badge-color: #fff,
  @badge-bg: @pink-400,
  @icon-color: @gray-dark,
  @icon-hover-color: @pink-300,
  @link-color: @gray-darker,
  @link-bg: transparent,
  @link-hover-color: @pink-500,
  @link-hover-bg: @gray-light,
  @link-active-color: @gray-darker,
  @link-active-bg: @gray-lighter,
  @link-disabled-color: @gray-light,
  @link-disabled-bg: transparent
  );
}
.sidebar-colored-inverse {
  .sidebar-template(
  @color: @gray-light,
  @bg: @pink-500,
  @header-bg: #eceff1,
  @brand-color: @gray-dark,
  @brand-bg: transparent,
  @brand-hover-color: @gray-darker,
  @brand-hover-bg: rgba(0, 0, 0, 0.10),
  @divider: @gray,
  @badge-color: @gray-darker,
  @badge-bg: @gray-light,
  @icon-color: @gray-light,
  @icon-hover-color: @gray-lighter,
  @link-color: @gray-lighter,
  @link-bg: transparent,
  @link-hover-color: @gray-lighter,
  @link-hover-bg: rgba(0, 0, 0, 0.10),
  @link-active-color: @gray-lighter,
  @link-active-bg: rgba(0, 0, 0, 0.20),
  @link-disabled-color: @gray,
  @link-disabled-bg: transparent
  );
}

// Sidebar toggling
//
// Hide sidebar
.sidebar {
  width: 0;
  .translate3d(-@sidebar-desktop-width, 0, 0);

  &.open {
    min-width: @sidebar-desktop-width;
    width: @sidebar-desktop-width;
    .translate3d(0, 0, 0);
  }
}

// Sidebar positions: fix the left/right sidebars
.sidebar-fixed-left,
.sidebar-fixed-right,
.sidebar-stacked {
  position: fixed;
  top: 0;
  bottom: 0;
  z-index: @zindex-sidebar-fixed;
}
.sidebar-stacked {
  left: 0;
}
.sidebar-fixed-left {
  left: 0;
  box-shadow: 2px 0px 15px rgba(0,0,0,0.35);
  -webkit-box-shadow: 2px 0px 15px rgba(0,0,0,0.35);
}
.sidebar-fixed-right {
  right: 0;
  box-shadow: 0px 2px 15px rgba(0,0,0,0.35);
  -webkit-box-shadow: 0px 2px 15px rgba(0,0,0,0.35);

  .translate3d(@sidebar-desktop-width, 0, 0);
  &.open {
    .translate3d(0, 0, 0);
  }
  .icon-material-sidebar-arrow:before {
    content: "\e614"; // icon-material-arrow-forward
  }
}

// Sidebar size
//
// Change size of sidebar and sidebar elements on small screens
@media (max-width: @screen-tablet) {
  .sidebar.open {
    min-width: @sidebar-width;
    width: @sidebar-width;
  }

  .sidebar .sidebar-header {
    height: @sidebar-width * 9/16; // 16:9 header dimension
  }

  .sidebar .sidebar-image {
    img {
      width: @sidebar-width/4 - @sidebar-padding;
      height: @sidebar-width/4 - @sidebar-padding;
    }
  }
}
</style>

<!-- Overlay for fixed sidebar -->
<div class="sidebar-overlay"></div>

<!-- Material sidebar -->
<aside id="sidebar" class="sidebar sidebar-default open" role="navigation">
    <!-- Sidebar header -->
    <div class="sidebar-header header-cover" style="background-image: url(https://2.bp.blogspot.com/-2RewSLZUzRg/U-9o6SD4M6I/AAAAAAAADIE/voax99AbRx0/s1600/14%2B-%2B1%2B%281%29.jpg);">
        <!-- Top bar -->
        <div class="top-bar"></div>
        <!-- Sidebar toggle button -->
        <button type="button" class="sidebar-toggle">
            <i class="icon-material-sidebar-arrow"></i>
        </button>
        <!-- Sidebar brand image -->
        <div class="sidebar-image">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/53474/atom_profile_01.jpg">
        </div>
        <!-- Sidebar brand name -->
        <a data-toggle="dropdown" class="sidebar-brand" href="#settings-dropdown">
            john.doe@gmail.com
            <b class="caret"></b>
        </a>
    </div>

    <!-- Sidebar navigation -->
    <ul class="nav sidebar-nav">
        <li class="dropdown">
            <ul id="settings-dropdown" class="dropdown-menu">
                <li>
                    <a href="#" tabindex="-1">
                        Profile
                    </a>
                </li>
                <li>
                    <a href="#" tabindex="-1">
                        Settings
                    </a>
                </li>
                <li>
                    <a href="#" tabindex="-1">
                        Help
                    </a>
                </li>
                <li>
                    <a href="#" tabindex="-1">
                        Exit
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#">
                <i class="sidebar-icon md-inbox"></i>
                Inbox
            </a>
        </li>
        <li>
            <a href="#">
                <i class="sidebar-icon md-star"></i>
                Starred
            </a>
        </li>
        <li>
            <a href="#">
                <i class="sidebar-icon md-send"></i>
                Sent Mail
            </a>
        </li>
        <li>
            <a href="#">
                <i class="sidebar-icon md-drafts"></i>
                Drafts
            </a>
        </li>
        <li class="divider"></li>
        <li class="dropdown">
            <a class="ripple-effect dropdown-toggle" href="#" data-toggle="dropdown">
                All Mail
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
                <li>
                    <a href="#" tabindex="-1">
                        Social
                        <span class="sidebar-badge">12</span>
                    </a>
                </li>
                <li>
                    <a href="#" tabindex="-1">
                        Promo
                        <span class="sidebar-badge">0</span>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#">
                Trash
                <span class="sidebar-badge">3</span>
            </a>
        </li>
        <li>
            <a href="#">
                Spam
                <span class="sidebar-badge">456</span>
            </a>
        </li>
        <li>
            <a href="#">
                Follow Up
                <span class="sidebar-badge badge-circle">i</span>
            </a>
        </li>
    </ul>
    <!-- Sidebar divider -->
    <!-- <div class="sidebar-divider"></div> -->

    <!-- Sidebar text -->
    <!--  <div class="sidebar-text">Text</div> -->
</aside>

<div class="wrapper">
    <!-- Sidebar Constructor -->
    <div class="constructor">
        <h2 class="headline">Material Sidebar (Profile menu)</h2>
        <p class="subhead">Based on <a href="https://www.google.com/design/spec/material-design/introduction.html" target="_blank">Material Design by Google</a>.</p>
        <p>Icons from <a href="https://zavoloklom.github.io/material-design-iconic-font" target="_blank">Material Design Iconic Font</a></p>
        <p>Tested on Win8.1 with browsers: Chrome 37,  Firefox 32, Opera 25, IE 11, Safari 5.1.7</p>
        <hr />
        <p>You can use this sidebar in Bootstrap (v3) projects. HTML-markup like <a href="https://getbootstrap.com/components/#navbar" target="_blank">Navbar bootstrap component</a> will make your work easier.</p>
        <p>Dropdown menu and sidebar toggle button works with JQuery and Bootstrap.min.js</p>
        <hr />
        <h2 class="headline">Sidebar Constructor</h2>
        <p>
            <label for="sidebar-position">Sidebar postion</label>
            <select id="sidebar-position" name="sidebar-position">
                <option value="">Default</option>
                <option value="sidebar-fixed-left">Float on left</option>
                <option value="sidebar-fixed-right">Float on right</option>
                <option value="sidebar-stacked">Stacked on left</option>
            </select>
        </p>
        <p>
            <label for="sidebar-theme">Sidebar theme</label>
            <select id="sidebar-theme" name="sidebar-theme">
                <option value="sidebar-default">Default</option>
                <option value="sidebar-inverse">Inverse</option>
                <option value="sidebar-colored">Colored</option>
                <option value="sidebar-colored-inverse">Colored-Inverse</option>
            </select>
        </p>
        <p>
            <label for="sidebar-header">Sidebar header cover</label>
            <select id="sidebar-header" name="sidebar-header">
                <option value="header-cover">Image cover</option>
                <option value="">Color cover</option>
            </select>
        </p>
        <p><button class="sidebar-toggle">Toggle sidebar</button></p>
    </div>
</div>
<script>
/**
 * Created by Kupletsky Sergey on 17.10.14.
 *
 * Material Sidebar (Profile menu)
 * Tested on Win8.1 with browsers: Chrome 37, Firefox 32, Opera 25, IE 11, Safari 5.1.7
 * You can use this sidebar in Bootstrap (v3) projects. HTML-markup like Navbar bootstrap component will make your work easier.
 * Dropdown menu and sidebar toggle button works with JQuery and Bootstrap.min.js
 */

// Sidebar toggle
//
// -------------------
$(document).ready(function() {
    var overlay = $('.sidebar-overlay');

    $('.sidebar-toggle').on('click', function() {
        var sidebar = $('#sidebar');
        sidebar.toggleClass('open');
        if ((sidebar.hasClass('sidebar-fixed-left') || sidebar.hasClass('sidebar-fixed-right')) && sidebar.hasClass('open')) {
            overlay.addClass('active');
        } else {
            overlay.removeClass('active');
        }
    });

    overlay.on('click', function() {
        $(this).removeClass('active');
        $('#sidebar').removeClass('open');
    });

});

// Sidebar constructor
//
// -------------------
$(document).ready(function() {

    var sidebar = $('#sidebar');
    var sidebarHeader = $('#sidebar .sidebar-header');
    var sidebarImg = sidebarHeader.css('background-image');
    var toggleButtons = $('.sidebar-toggle');

    // Hide toggle buttons on default position
    toggleButtons.css('display', 'none');
    $('body').css('display', 'table');


    // Sidebar position
    $('#sidebar-position').change(function() {
        var value = $( this ).val();
        sidebar.removeClass('sidebar-fixed-left sidebar-fixed-right sidebar-stacked').addClass(value).addClass('open');
        if (value == 'sidebar-fixed-left' || value == 'sidebar-fixed-right') {
            $('.sidebar-overlay').addClass('active');
        }
        // Show toggle buttons
        if (value != '') {
            toggleButtons.css('display', 'initial');
            $('body').css('display', 'initial');
        } else {
            // Hide toggle buttons
            toggleButtons.css('display', 'none');
            $('body').css('display', 'table');
        }
    });

    // Sidebar theme
    $('#sidebar-theme').change(function() {
        var value = $( this ).val();
        sidebar.removeClass('sidebar-default sidebar-inverse sidebar-colored sidebar-colored-inverse').addClass(value)
    });

    // Header cover
    $('#sidebar-header').change(function() {
        var value = $(this).val();

        $('.sidebar-header').removeClass('header-cover').addClass(value);

        if (value == 'header-cover') {
            sidebarHeader.css('background-image', sidebarImg)
        } else {
            sidebarHeader.css('background-image', '')
        }
    });
});

/**
 * Created by Kupletsky Sergey on 08.09.14.
 *
 * Add JQuery animation to bootstrap dropdown elements.
 */

(function($) {
    var dropdown = $('.dropdown');

    // Add slidedown animation to dropdown
    dropdown.on('show.bs.dropdown', function(e){
        $(this).find('.dropdown-menu').first().stop(true, true).slideDown();
    });

    // Add slideup animation to dropdown
    dropdown.on('hide.bs.dropdown', function(e){
        $(this).find('.dropdown-menu').first().stop(true, true).slideUp();
    });
})(jQuery);



(function(removeClass) {

	jQuery.fn.removeClass = function( value ) {
		if ( value && typeof value.test === "function" ) {
			for ( var i = 0, l = this.length; i < l; i++ ) {
				var elem = this[i];
				if ( elem.nodeType === 1 && elem.className ) {
					var classNames = elem.className.split( /\s+/ );

					for ( var n = classNames.length; n--; ) {
						if ( value.test(classNames[n]) ) {
							classNames.splice(n, 1);
						}
					}
					elem.className = jQuery.trim( classNames.join(" ") );
				}
			}
		} else {
			removeClass.call(this, value);
		}
		return this;
	}

})(jQuery.fn.removeClass);
</script>
