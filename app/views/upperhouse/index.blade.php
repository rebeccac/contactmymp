@extends('layouts.index')
@section('content')

      {{ Form::open(array('action' => 'SenatorController@postIndex', 'class' => 'selection-form right')) }}
      {{ Form::label('mp', 'Select a Senator: ') }}
      <select id="senator" name="senator">
         <option value=""> -- </option>
         @foreach($senators as $senator)
            <option value="{{$senator['member_id']}}">{{ $senator['last_name'] }}, {{ $senator['first_name'] }} ({{ $senator['state'] }})</option>
         @endforeach
      </select>
      {{ Form::submit('Submit'); }}
   {{ Form::close() }}

   {{ Form::open(array('action' => 'SenatorController@postIndex', 'class' => 'selection-form'))}}
      {{ Form::label('order', 'Sort Senators by: ') }}
      {{ Form::select('order', array('state' => 'State', 'last_name' => 'Last Name')); }}
      {{ Form::submit('Submit'); }}
   {{ Form::close() }}

   <div id="politicians_container">
      @foreach( $senators as $senator )
         <div class="politician senator_light">
            <div class="constituency senator_dark">
               <p class="politician_title">{{ $senator['state'] }}</p>
            </div>
            <div class="clear"></div>
            <div class="senator_name senator_medium">
               <p class="politician_title">{{ $senator['first_name'] }} {{ $senator['last_name'] }}</p>
            </div>
            <div class="politician_row1">
               <img class="politician_img" src="/images/senator/{{ $senator['image'] }}">
               <div class="sm-links">
                  <i class="fa fa-twitter smt"></i>
                  @if(!is_null($senator['twitter']))
                    <a href="http://www.twitter.com/{{ $senator['twitter'] }}">Twitter</a>
                  @else
                    <span class="dark_text">N/A</span>
                  @endif
                  <br><br>
                  <i class="fa fa-facebook smf"></i>
                  @if(!is_null($senator['facebook']))
                    <a href="{{ $senator['facebook'] }}">Facebook</a>
                  @else
                    <span class="dark_text">N/A</span>
                  @endif
                  <br>
               </div>
            </div>
            <div class="politician_row2">
               <span class="party">{{ $senator['party'] }}</span>
               <br><br>
               <a href="/upperhouse/{{ $senator->id }}" class="button_link senator_dark">Contact</a>
            </div>
         </div>
      @endforeach
   </div>

@stop
