@extends('layouts.index')

@section('content')

   {{ Form::open(array('action' => 'PageController@postFindPolitician')) }}
      {{ Form::label('mp', 'Select an MP: ') }}
      <select id="mp" name="mp">
         @foreach($mps as $mp)
            <option value="{{$mp['id']}}">{{ $mp['last_name'] }}, {{ $mp['first_name'] }} ({{ $mp['constituency'] }})</option>
         @endforeach
      </select>
      {{ Form::submit('Submit') }}
   {{ Form::close() }}


   {{ Form::open(array('action' => 'PageController@postFindPolitician')) }}
      {{ Form::label('senator', 'Select a Senator: ') }}
      <select id="senator" name="senator">
         @foreach($senators as $senator)
            <option value="{{$senator['id']}}">{{ $senator['last_name'] }}, {{ $senator['first_name'] }} ({{ $senator['state'] }})</option>
         @endforeach
      </select>
      {{ Form::submit('Submit') }}
   {{ Form::close() }}

@stop
