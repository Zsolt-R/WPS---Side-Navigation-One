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
