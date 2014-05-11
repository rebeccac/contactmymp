@extends('layouts.index')

@section('content')
   <h2 class="sub-heading">Thank you for your feedback</h2>
   <p>
      Thank you!
      <br>
      You have sent the following feedback:
      <br>
      <strong>Name: </strong>{{ $data['name'] }}
      <br>
      <strong>Email: </strong>{{ $data['email'] }}
      <br>
      <strong>Subject: </strong>{{ $data['subject'] }}
      <br>
      <strong>Message: </strong>{{ $data['message'] }}
   </p>
@stop
