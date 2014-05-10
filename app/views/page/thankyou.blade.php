@extends('layouts.index')

@section('content')
   <h2 class="sub-heading">Thank you for your feedback</h2>
   Thank you!
   {{ $data['name'] }}
   <br>
   {{ $data['email'] }}
   <br>
   {{ $data['subject'] }}
   <br>
   {{ $data['message'] }}
@stop
