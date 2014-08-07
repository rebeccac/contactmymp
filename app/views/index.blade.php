<!doctype html>
<!-- Background image credit: JJ Harrison http://en.wikipedia.org/wiki/File:Parliament_House_Canberra_Dusk_Panorama.jpg -->
   <html>
     <head>
       <title>Email Australian Federal Politicians - MPs &amp; Senators | Contact My MP Australia</title>
       <meta charset="UTF-8">
       <meta name="description" content="Easily find and email your Australian Federal MP &amp; Senators and government Ministers.">
       <meta name="viewport" content="width=device-width, initial-scale=1, content=minimal-ui">
       <meta name="robots" content="noindex, follow">
       <link rel="canonical" href="http://www.contactmymp.com" />
       <LINK REL="apple-touch-icon-precomposed" href="http://www.contactmymp.com/images/apple-touch-icon.jpg" />
		 <link rel="shortcut icon" href="http://www.contactmymp.com/images/favicon.ico">
       <link rel="stylesheet" href="{{ URL::asset('css/frontpage_styles.min.css') }}">
      <link rel="stylesheet" href="{{ URL::asset('font-awesome/css/font-awesome.min.css') }}">
      <meta name="google-site-verification" content="8TN4pcqS7FfgNgp_Xn3kwy359jSuYRFXT_RglU0QBXA" />
      <!-- ShareThis script -->
      <script type="text/javascript">var switchTo5x=true;</script>
      <script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
      <script type="text/javascript">stLight.options({publisher: "ec7fc08b-7b94-46a6-bdba-63333d7f0444", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
      <!-- end ShareThis script -->
     </head>
     <body class="page-body page-body-left">
        <!-- Facebook Like script -->
        <div id="fb-root"></div>
         <script>(function(d, s, id) {
           var js, fjs = d.getElementsByTagName(s)[0];
           if (d.getElementById(id)) return;
           js = d.createElement(s); js.id = id;
           js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.0";
           fjs.parentNode.insertBefore(js, fjs);
         }(document, 'script', 'facebook-jssdk'));</script>
         <!-- end Facebook Like script -->
        <div class="row container">
           <div id="menu-button" class="menu-button-left white_text"><i class="fa fa-bars"></i></div>

      <div class="row header" data-equalizer>
        <div class="large-2 medium-2 small-2 columns" data-equalizer-watch></div>
        <div class="large-10 medium-10 small-10 columns title" data-equalizer-watch>
          <h1 class="heading dark_text"><a href="{{ URL::to('/') }}">Contact My <br>MP Australia</a></h1>
          <a href="{{ URL::to('/') }}"><img class="logo" src="/images/logo_200.png" alt="Contact My MP logo - email Australian politicians"></a>
        </div>
      </div>

      <div class="clear"></div>

      <div class="row stlinks" data-equalizer>
         <div class="large-8 medium-8 columns" data-equalizer-watch></div>
         <div class="large-4 medium-4 columns st" data-equalizer-watch>
            <span class='st_twitter'></span>
            <span class='st_facebook'></span>
            <span class='st_googleplus'></span>
            <span class='st_reddit'></span>
            <span class='st_sharethis'></span>
            <span class='st_email'></span>
         </div><!-- end 3 st -->
      </div><!-- end row stlinks -->

      <div class="intro" data-equalizer>
         <div class="large-2 medium-2 columns" data-equalizer-watch></div>
         <div class="large-7 medium-7 columns introduction" data-equalizer-watch>
            <h2>Find and write to your Australian Federal MP and Senators</h2>
         </div>
         <div class="large-3 medium-3 columns" data-equalizer-watch></div>
      </div><!-- end intro -->

      <div class="row postcode-search" data-equalizer>
        <div class="large-9 medium-9 columns" data-equalizer-watch></div>
        <div class="large-3 medium-3 columns postcode-form" data-equalizer-watch>
          <form class='form' action='/select' method='post'>
            <div class="top-row">
              <h3>Search for MP & Senators</h3>
              <label for='postcode'>My Postcode: </label>
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



      @include('includes/menu')
       </div><!-- container -->
       <footer>
          <div class="row s-m" data-equalizer>
            <div class="large-4 medium-4 s-m-i columns" data-equalizer-watch>

            </div>
            <div class="large-4 medium-4 s-m-i columns" data-equalizer-watch>
              <a href="https://twitter.com/ContactMyMP" class="twitter-follow-button" data-show-count="false" data-show-screen-name="false">Follow @ContactMyMP</a>
              <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

              <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button" data-action="like" data-show-faces="false" data-share="false"></div>

            </div>
            <div class="large-4 medium-4 s-m-i columns" data-equalizer-watch>

            </div>
          </div><!-- row s-m -->

          <div class="row copyright" data-equalizer>
            <div class="large-12 medium-12 columns" data-equalizer-watch>
              &copy; contactmymp.com {{date("Y")}}
            </div>
          </div><!-- row copyright -->

      </footer>

      <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
      <script src="{{ URL::asset('js/foundation/foundation.js') }}"></script>
      <script src="{{ URL::asset('js/foundation/foundation.equalizer.js') }}"></script>
      <script src="{{ URL::asset('js/jquery.menu.js')}}"></script>
      <script>
        $(document).foundation();
      </script>

      <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-44449664-2', 'contactmymp.com');
        ga('send', 'pageview');

      </script>
     </body>
   </html>
