@extends('layouts.index')

@section('content')
<h2 class="sub-heading">Find a Politician</h2>
<div class="search">
   <div class="search-box postcode">
      {{ Form::open(array('action' => 'PageController@postSelect', 'class' => 'politician-selection-form')) }}
         {{ Form::label('postcode', 'Find by Postcode') }}
         <i class="fa fa-search"></i>
         <input type='number' name='postcode' id='postcode' maxlength='4' placeholder='&#xf041;'>
         {{ Form::submit('Submit') }}
      {{ Form::close() }}
   </div>
   <div class="search-box mp">
      {{ Form::open(array('action' => 'PageController@postFindPolitician', 'class' => 'politician-selection-form')) }}
         {{ Form::label('mp', 'Select an MP ') }}
         <i class="fa fa-search"></i>
         <select id="mp" name="mp">
            @foreach($mps as $mp)
               <option value="{{$mp['id']}}">{{ $mp['last_name'] }}, {{ $mp['first_name'] }} ({{ $mp['constituency'] }})</option>
            @endforeach
         </select>
         {{ Form::submit('Submit') }}
      {{ Form::close() }}
   </div>

   <div class="search-box senator">
      {{ Form::open(array('action' => 'PageController@postFindPolitician', 'class' => 'politician-selection-form')) }}
         {{ Form::label('senator', 'Select a Senator ') }}
         <i class="fa fa-search"></i>
         <select id="senator" name="senator">
            @foreach($senators as $senator)
               <option value="{{$senator['id']}}">{{ $senator['last_name'] }}, {{ $senator['first_name'] }} ({{ $senator['state'] }})</option>
            @endforeach
         </select>
         {{ Form::submit('Submit') }}
      {{ Form::close() }}
   </div>
</div>
@stop
