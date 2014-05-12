@extends('layouts.index')
@section('content')
   <h2 class="sub-heading">Contact Ministers</h2>
   <h3 class="ministers-sub-heading">Ministry</h3>

   <div id="politicians_container">

      @foreach($ministers as $minister)
         <div class="politician minister_light">
            <div class="politician_position minister_dark">
               <p class="minister_position">{{ $minister['position'] }}</p>
            </div>
            <div class="clear"></div>
            <div class="minister_name minister_medium">
               <p class="politician_title">{{ $minister['first_name'] }} {{ $minister['last_name'] }}</p>
            </div>
            <div class="politician_row1">
                  <img class="politician_img" src="/images/politicians/{{ $minister['image'] }}">
                  <div class="sm-links">
                     <i class="fa fa-twitter smt"></i>
                     @if(!is_null($minister['twitter']))
                       <a href="http://www.twitter.com/{{ $minister['twitter'] }}">Twitter</a>
                     @else
                       <span class="dark_text">N/A</span>
                     @endif
                     <br><br>
                     <i class="fa fa-facebook smf"></i>
                     @if(!is_null($minister['facebook']))
                       <a href="{{ $minister['facebook'] }}">Facebook</a>
                     @else
                       <span class="dark_text">N/A</span>
                     @endif
                     <br>
               </div>
            </div>
            <div class="politician_row2">
               <br>
               @if($minister['house'] == 1)
                  <a href="/lowerhouse/{{ $minister->showid }}" class="button_link minister_dark">Contact</a>
               @elseif($minister['house'] == 2)
                  <a href="/upperhouse/{{ $minister->showid }}" class="button_link minister_dark">Contact</a>
               @endif
            </div>
         </div><!-- politician minister_light -->
      @endforeach
      <h3 class="ministers-sub-heading">Outer Ministry</h3>
      @foreach($outerministers as $outerminister)
         {{ $outerminister->first_name }} {{ $outerminister->last_name }}: {{ $outerminister->position }}
         <br>
      @endforeach
      <h3 class="ministers-sub-heading">Parliamentary Secretaries</h3>
      @foreach($secretaries as $secretary)
         {{ $secretary->first_name }} {{ $secretary->last_name }}: {{ $secretary->position }}
         <br>
      @endforeach
   </div><!-- politicians_container -->

@stop
