$("#menu-button").click( function() {
   event.preventDefault();
   $("#slider").toggleClass("slidermenu-left").toggleClass("slidermenu-pushed");
   $("#menu-button").toggleClass("menu-button-left").toggleClass("menu-button-pushed");
});
