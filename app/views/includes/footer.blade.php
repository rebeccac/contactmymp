    </div> <!-- row content -->
</div><!-- container -->
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
      <script src="{{ URL::asset('js/jquery.fittext.js') }}"></script>
      <script src="{{ URL::asset('js/foundation/foundation.js') }}"></script>
      <script src="{{ URL::asset('js/foundation/foundation.equalizer.js') }}"></script>
      <script src="{{ URL::asset('js/jquery.slidermenu.js') }}"></script>
      <script>
      $("#slider").slidermenu( {
        title: "Contact My MP",
        menuBgColor: "rgba(25,52,65,0.9)",
        menuItemTitles: ["Home", "About", "Email My MP",  "Email My Senators", "Contact Ministers", "Contact Us"],
        menuItemIcons: ["fa fa-home", "fa fa-info", "fa fa-search", "fa fa-search", "fa fa-pencil", "fa fa-envelope"],
        menuItemLinks: ["index.php", "about.html", "sourcecode.html", "github.html", "readme.html", "contact.html"],
        pageTitle: "Contact My MP",
        pageLink: "http://www.contactmymp.com",
      });
      </script>
      <script>
        $(document).foundation();
      </script>
<!--       // <script>
      //    $(".heading").fitText(0.55);
      // </script> -->
  </body>
</html>
