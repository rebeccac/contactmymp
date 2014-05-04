<!doctype html>
   <html>
     <head>
       <title>Contact My MP</title>
       <meta name="viewport" content="width=device-width, initial-scale=1, content=minimal-ui">

       <link rel="stylesheet" href="{{ URL::asset('css/frontpage_styles.css') }}">
      <link rel="stylesheet" href="{{ URL::asset('font-awesome/css/font-awesome.min.css') }}">
     </head>
     <body>
        <div class="row container">
              @include('includes/menu')
            <div id="menu-button" class="menu-button-left"><i class="fa fa-bars"></i></div>
      <div class="row header" data-equalizer>
        <div class="large-3 medium-3 columns" data-equalizer-watch></div>
        <div class="large-9 medium-9 columns title" data-equalizer-watch>
          <h1 class="heading">Contact My MP</h1>
        </div>
      </div> <!-- row header -->

      <div class="clear"></div>


      <div class="row postcode-search" data-equalizer>
        <div class="large-9 medium-9 columns" data-equalizer-watch></div>
        <div class="large-3 medium-3 columns postcode-form" data-equalizer-watch>
          <form class='form' action='/mp' method='post'>
            <div class="top-row">
              <label for='postcode'>Your Postcode: </label>
              <input type='text' name='postcode' id='postcode' maxlength='4' placeholder='&#xf041;'>
              <br>
              @if (isset($error))
                <p class="error">{{ $error }}</p>
              @endif
            </div>
            <div class='submit'><input type='submit' id='submit' name='submit' value='Submit'></div>
          </form>
        </div>
      </div>

       </div><!-- container -->
       <footer>
          <div class="row s-m" data-equalizer>
            <div class="large-4 medium-4 s-m-i columns" data-equalizer-watch>

            </div>
            <div class="large-4 medium-4 s-m-i columns" data-equalizer-watch>
              <i class="fa fa-twitter"></i><i class="fa fa-facebook"></i><i class="fa fa-envelope-o"></i>
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
