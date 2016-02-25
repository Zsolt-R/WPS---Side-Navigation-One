# wps-menu-one
WPS Theme Component - Side Navigation One


**Add module to your child theme**

1) link module  in functions.php

`require get_stylesheet_directory() . '/theme-modules/wps-menu-one/wps-module-sno-init.php';`


2) Copy .scss component to SCSS project

`_components.slideout.scss`


3) Import into style.scss

`@import "project/components.slideout";`


4) Extend default component:

`_components.page-head.scss`

`html,.site{
    background-color: $color-body;
}`

`// Adjust logo
.brand-logo{
    @include media-query(palm){
    display: block;
    max-height:45px;
    float:left;
    }
}`
****

ref: https://github.com/Mango/slideout
