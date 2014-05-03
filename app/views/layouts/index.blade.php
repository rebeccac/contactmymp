@include('includes/dtd')
<title>{{ $page_title }}</title>
<link rel="stylesheet" href="{{ URL::asset('css/jquery.slidermenu.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/general.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/theme.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
<link rel="stylesheet" href="{{ URL::asset('font-awesome/css/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/mediaqueries.css') }}">
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400' rel='stylesheet' type='text/css'>
</head>
<body>
<div class="container">
   <div class="row header">
     <div class="large-12 medium-12 columns">
     <h1 class="heading dark_text">Contact My MP</h1>
     </div>
   </div> <!-- row header -->
   @include('includes/menu')
  <div class="content">


   <div class="row contents" data-equalizer>
     <div class="large-12 medium-12 columns main" data-equalizer-watch>
       @yield('content')
     </div>
  </div><!-- row contents -->
@include('includes/footer')
