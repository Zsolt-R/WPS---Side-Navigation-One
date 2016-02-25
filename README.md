# wps-menu-one
WPS Theme Component - Side Navigation One


**Add module to your child theme**

1) link module  in functions.php

`require get_stylesheet_directory() . '/theme-modules/wps-menu-one/wps-module-sno-init.php';`


2) Copy .scss component to SCSS project: `_components.slideout.scss`


3) Import into style.scss:  `@import "project/components.slideout";`


4) Extend default component: `_components.page-head.scss`

```css
html,.site{
    background-color: $color-body;
}
// Adjust logo
.brand-logo{
    @include media-query(palm){
    display: block;
    max-height:45px;
    float:left;
    }
}
```

5) Extend site.js

```javascript
jQuery(document).ready(function($) { 

//Slideout Nav
  var slideout = new Slideout({
    'panel': document.getElementById('page'),
    'menu': document.getElementById('sidenav'),
    'padding': -200,
    'tolerance': 70
  });

  $('.toggle-button').on('click', function() {
    slideout.toggle();
    $('.move-side').toggleClass('move-side--active');
    $('.site-nav__toggler').toggleClass('nav-is-visible');
  });

});
```
****

ref: https://github.com/Mango/slideout
