@extends('layouts.index')
@section('content')
   <h2 class="sub-heading">Contact Government Ministers</h2>
   <h3 class="ministers-sub-heading">Ministry</h3>
   @foreach($ministers as $minister)
      {{ $minister->first_name }} {{ $minister->last_name }}: {{ $minister->position }}
      <br>
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


@stop
