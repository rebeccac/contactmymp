@include('includes/dtd')
<title>{{ $page_title }}</title>
<meta name="viewport" content="width=device-width, initial-scale=1, content=minimal-ui">
<meta name="description" content="{{ $description }}">
<meta name="robots" content="noindex, follow">
<LINK REL="apple-touch-icon-precomposed" href="http://www.contactmymp.com/images/apple-touch-icon.jpg" />
<link rel="shortcut icon" href="http://www.contactmymp.com/images/favicon.ico">
<link rel="stylesheet" href="{{ URL::asset('css/style.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('font-awesome/css/font-awesome.min.css') }}">
<!-- ShareThis script -->
<script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "ec7fc08b-7b94-46a6-bdba-63333d7f0444", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
<!-- end ShareThis script -->
</head>
<body class="page-body page-body-left">
<div class="container">

   <div id="menu-button" class="menu-button-left"><i class="fa fa-bars dark_text"></i></div>

   <div class="row header">
     <div class="large-12 medium-12 columns">
        <h1 class="heading dark_text"><a href="{{ URL::to('/') }}">Contact<br>My MP</a></h1>
        <a href="{{ URL::to('/') }}"><img class="logo" src="/images/logo_200.png" alt="Contact My MP logo"></a>
     </div>
   </div> <!-- row header -->

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

   <div class="clear"></div>
  <div class="content">


   <div class="row contents" data-equalizer>
     <div class="large-12 medium-12 columns main" data-equalizer-watch>
       @yield('content')
     </div>
  </div><!-- row contents -->

  @include('includes/menu')

@include('includes/footer')
