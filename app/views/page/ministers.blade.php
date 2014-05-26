@extends('layouts.index')
@section('content')
   <h2 class="sub-heading">Contact Ministers</h2>
   <h3 class="ministers-sub-heading">Ministry</h3>

   <div id="politicians_container">

      @foreach($ministers as $minister)
         <div class="politician minister_light">
            <div class="politician_position minister_dark">
               <span class="minister_position">{{ $minister['position'] }}</span>
            </div>
            <div class="clear"></div>
            <div class="minister_name minister_medium">
               @if($minister['house'] == 1)
                  <a href="/lowerhouse/{{ $minister->showid }}">
                     <span class="politician_title">{{ $minister['first_name'] }} {{ $minister['last_name'] }}</span>
                  </a>
               @elseif($minister['house'] == 2)
                  <a href="/upperhouse/{{ $minister->showid }}">
                      <span class="politician_title">{{ $minister['first_name'] }} {{ $minister['last_name'] }}</span>
                  </a>
               @endif
            </div>
            <div class="politician_row1">
                  <img class="politician_img" src="/images/politicians/{{ $minister['image'] }}">
                  <div class="sm-links">
                     <i class="fa fa-twitter smt"></i>
                     @if(!is_null($minister['twitter']))
                       <a href="http://www.twitter.com/{{ $minister['twitter'] }}" target="_blank">Twitter</a>
                     @else
                       <span class="dark_text">N/A</span>
                     @endif
                     <br><br>
                     <i class="fa fa-facebook smf"></i>
                     @if(!is_null($minister['facebook']))
                       <a href="{{ $minister['facebook'] }}" target="_blank">Facebook</a>
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
      <br><br>
      <h3 class="ministers-sub-heading">Outer Ministry</h3>

      @foreach($outerministers as $outerminister)
         <div class="politician minister_light">
            <div class="politician_position minister_dark">
               <span class="minister_position">{{ $outerminister['position'] }}</span>
            </div>
            <div class="clear"></div>
            <div class="minister_name minister_medium">
               @if($outerminister['house'] == 1)
                  <a href="/lowerhouse/{{ $outerminister->showid }}">
                     <span class="politician_title">{{ $outerminister['first_name'] }} {{ $outerminister['last_name'] }}</span>
                  </a>
               @elseif($outerminister['house'] == 2)
                  <a href="/upperhouse/{{ $outerminister->showid }}">
                     <span class="politician_title">{{ $outerminister['first_name'] }} {{ $outerminister['last_name'] }}</span>
                  </a>
               @endif
            </div>
            <div class="politician_row1">
                  <img class="politician_img" src="/images/politicians/{{ $outerminister['image'] }}">
                  <div class="sm-links">
                     <i class="fa fa-twitter smt"></i>
                     @if(!is_null($outerminister['twitter']))
                       <a href="http://www.twitter.com/{{ $outerminister['twitter'] }}" target="_blank">Twitter</a>
                     @else
                       <span class="dark_text">N/A</span>
                     @endif
                     <br><br>
                     <i class="fa fa-facebook smf"></i>
                     @if(!is_null($outerminister['facebook']))
                       <a href="{{ $outerminister['facebook'] }}" target="_blank">Facebook</a>
                     @else
                       <span class="dark_text">N/A</span>
                     @endif
                     <br>
               </div>
            </div>
            <div class="politician_row2">
               <br>
               @if($outerminister['house'] == 1)
                  <a href="/lowerhouse/{{ $outerminister->showid }}" class="button_link minister_dark">Contact</a>
               @elseif($outerminister['house'] == 2)
                  <a href="/upperhouse/{{ $outerminister->showid }}" class="button_link minister_dark">Contact</a>
               @endif
            </div>
         </div><!-- politician minister_light -->
      @endforeach
      <br><br>
      <h3 class="ministers-sub-heading">Parliamentary Secretaries</h3>
      @foreach($secretaries as $secretary)
         <div class="politician minister_light">
            <div class="politician_position minister_dark">
               <span class="minister_position">{{ $secretary['position'] }}</span>
            </div>
            <div class="clear"></div>
            <div class="minister_name minister_medium">
               @if($secretary['house'] == 1)
                  <a href="/lowerhouse/{{ $secretary->showid }}">
                     <span class="politician_title">{{ $secretary['first_name'] }} {{ $secretary['last_name'] }}</span>
                  </a>
               @elseif($secretary['house'] == 2)
                  <a href="/upperhouse/{{ $secretary->showid }}">
                     <span class="politician_title">{{ $secretary['first_name'] }} {{ $secretary['last_name'] }}</span>
                  </a>
               @endif
            </div>
            <div class="politician_row1">
                  <img class="politician_img" src="/images/politicians/{{ $secretary['image'] }}">
                  <div class="sm-links">
                     <i class="fa fa-twitter smt"></i>
                     @if(!is_null($secretary['twitter']))
                       <a href="http://www.twitter.com/{{ $secretary['twitter'] }}" target="_blank">Twitter</a>
                     @else
                       <span class="dark_text">N/A</span>
                     @endif
                     <br><br>
                     <i class="fa fa-facebook smf"></i>
                     @if(!is_null($secretary['facebook']))
                       <a href="{{ $secretary['facebook'] }}" target="_blank">Facebook</a>
                     @else
                       <span class="dark_text">N/A</span>
                     @endif
                     <br>
               </div>
            </div>
            <div class="politician_row2">
               <br>
               @if($secretary['house'] == 1)
                  <a href="/lowerhouse/{{ $secretary->showid }}" class="button_link minister_dark">Contact</a>
               @elseif($secretary['house'] == 2)
                  <a href="/upperhouse/{{ $secretary->showid }}" class="button_link minister_dark">Contact</a>
               @endif
            </div>
         </div><!-- politician minister_light -->
      @endforeach
   </div><!-- politicians_container -->

@stop
