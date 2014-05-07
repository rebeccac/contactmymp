@extends('layouts.index')
@section('content')

   <div class="box">
      {{ Form::open(array('action' => 'MPController@postIndex', 'class' => 'selection-form'))}}
         {{ Form::label('order', 'Sort MPs by: ') }}
         {{ Form::select('order', array('constituency' => 'Electorate', 'last_name' => 'Last Name')); }}
         {{ Form::submit('Submit'); }}
      {{ Form::close() }}
   </div>

   <div id="politicians_container">
      @foreach( $mps as $mp )
         <div class="politician mp_light">
            <div class="constituency mp_dark">
               <p class="politician_title">{{ $mp['constituency'] }}</p>
            </div>
            <div class="clear"></div>
            <div class="mp_name mp_medium">
               <p class="politician_title">{{ $mp['first_name'] }} {{ $mp['last_name'] }}</p>
            </div>
            <div class="politician_row1">
               <img class="politician_img" src="/images/mp/{{ $mp['image'] }}">
               <div class="sm-links">
                  <i class="fa fa-twitter smt"></i>
                  @if(!is_null($mp['twitter']))
                    <a href="http://www.twitter.com/{{ $mp['twitter'] }}">Twitter</a>
                  @else
                    <span class="dark_text">N/A</span>
                  @endif
                  <br><br>
                  <i class="fa fa-facebook smf"></i>
                  @if(!is_null($mp['facebook']))
                    <a href="{{ $mp['facebook'] }}">Facebook</a>
                  @else
                    <span class="dark_text">N/A</span>
                  @endif
                  <br>
               </div>
            </div>
            <div class="politician_row2">

               <span class="party">{{ $mp['party'] }}</span>
               <br><br>
               <a href="/lowerhouse/{{ $mp->id }}" class="button_link mp_dark">Contact</a>
            </div>
         </div>
      @endforeach
   </div>

@stop
