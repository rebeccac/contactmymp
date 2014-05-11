@extends('layouts.index')

@section('content')
   <h2 class="sub-heading">Thank you for your feedback</h2>
   <div class="thankyou">
      You have sent the following feedback:
      <br><br>
      <strong>Name: </strong>{{ $data['name'] }}
      <br>
      <strong>Email: </strong>{{ $data['email'] }}
      <br>
      <strong>Subject: </strong>{{ $data['subject'] }}
      <br>
      <strong>Message: </strong>{{ $data['message'] }}
   </div>
@stop
