@include('includes/dtd')
<title>{{ $page_title }}</title>
<meta name="viewport" content="width=device-width, initial-scale=1, content=minimal-ui">

<link rel="stylesheet" href="{{ URL::asset('css/mediaqueries.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
<link rel="stylesheet" href="{{ URL::asset('font-awesome/css/font-awesome.min.css') }}">
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400' rel='stylesheet' type='text/css'>
</head>
<body class="page-body page-body-left">
<div class="container">
   <div class="row header">
     <div class="large-12 medium-12 columns">
        <h1 class="heading dark_text"><a href="{{ URL::to('/') }}">Contact<br>My MP</a></h1>
        <a href="{{ URL::to('/') }}"><img class="logo" src="/images/logo_200.png" alt="Contact My MP logo"></a>
     </div>
   </div> <!-- row header -->
   @include('includes/menu')
   <div id="menu-button" class="menu-button-left"><i class="fa fa-bars dark_text"></i></div>
  <div class="content">


   <div class="row contents" data-equalizer>
     <div class="large-12 medium-12 columns main" data-equalizer-watch>
       @yield('content')
     </div>
  </div><!-- row contents -->
@include('includes/footer')
