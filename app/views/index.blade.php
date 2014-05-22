<!doctype html>
<!-- Background image credit: JJ Harrison http://en.wikipedia.org/wiki/File:Parliament_House_Canberra_Dusk_Panorama.jpg -->
   <html>
     <head>
       <title>Contact My MP</title>
       <meta name="viewport" content="width=device-width, initial-scale=1, content=minimal-ui">

      <link rel "stylesheet" href="{{ URL::asset('css/menu_mediaqueries.css') }}">
       <link rel="stylesheet" href="{{ URL::asset('css/frontpage_styles.css') }}">
      <link rel="stylesheet" href="{{ URL::asset('font-awesome/css/font-awesome.min.css') }}">
     </head>
     <body class="page-body page-body-left">
        <div class="row container">
              @include('includes/menu')
            <div id="menu-button" class="menu-button-left white_text"><i class="fa fa-bars"></i></div>
      <div class="row header" data-equalizer>
        <div class="large-2 medium-2 small-2 columns" data-equalizer-watch></div>
        <div class="large-10 medium-10 small-10 columns title" data-equalizer-watch>
          <h1 class="heading dark_text"><a href="{{ URL::to('/') }}">Contact<br>My MP</a></h1>
          <a href="{{ URL::to('/') }}"><img class="logo" src="/images/logo_200.png" alt="Contact My MP logo"></a>
        </div>
      </div> <!-- row header -->

      <div class="clear"></div>


      <div class="row postcode-search" data-equalizer>
        <div class="large-9 medium-9 columns" data-equalizer-watch></div>
        <div class="large-3 medium-3 columns postcode-form" data-equalizer-watch>
          <form class='form' action='/select' method='post'>
            <div class="top-row">
              <label for='postcode'>Your Postcode: </label>
              <input type='number' name='postcode' id='postcode' maxlength='4' placeholder='&#xf041;'>
              <input type='submit' id='submit' name='submit' value='Submit'>
              @if (isset($error))
                <div class="error">
                   {{ $error }}
                </div>
              @endif
          </form>
        </div>
      </div>

       </div><!-- container -->
       <footer>
          <div class="row s-m" data-equalizer>
            <div class="large-4 medium-4 s-m-i columns" data-equalizer-watch>

            </div>
            <div class="large-4 medium-4 s-m-i columns" data-equalizer-watch>
              <a href="http://www.twitter.com/ContactMyMp" target="_blank">
                 <i class="fa fa-twitter"></i>
              </a>
              <a href="https://www.facebook.com/contactmympaustralia" target="_blank">
                 <i class="fa fa-facebook"></i>
              </a>
              <a href="{{ URL::to('contact') }}">
                 <i class="fa fa-envelope-o"></i>
              </a>
            </div>
            <div class="large-4 medium-4 s-m-i columns" data-equalizer-watch>

            </div>
          </div><!-- row s-m -->

          <div class="row copyright" data-equalizer>
            <div class="large-12 medium-12 columns" data-equalizer-watch>
              &copy; contactmymp.com 2014
            </div>
          </div><!-- row copyright -->

      </footer>

      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
      <script src="{{ URL::asset('js/foundation/foundation.js') }}"></script>
      <script src="{{ URL::asset('js/foundation/foundation.equalizer.js') }}"></script>
      <script src="{{ URL::asset('js/jquery.menu.js')}}"></script>
      <script>
        $(document).foundation();
      </script>
     </body>
   </html>
