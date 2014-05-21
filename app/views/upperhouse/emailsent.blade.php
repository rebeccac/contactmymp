@extends('layouts.index')
@section('content')
<div class="contact-form-content">
   <br>
   <h3>Your email has been sent to {{ $senator->first_name }} {{ $senator->last_name }}</h3>
   <br><br>
   <a href="javascript:window.print()"><i id="print" class="fa fa-print"></i></a>
   <br><br>
   <div class="label">Date:</div>
   <br>
   <div class="contact-text">{{ $data['date_time'] }}</div>
   <br>
   <div class="label">Name:</div>
   <br>
   <div class="contact-text">{{ $data['name'] }}</div>
   <br>
   <div class="label">Email:</div>
   <br>
   <div class="contact-text">{{ $data['email'] }}</div>
   <br>
   <div class="label">Subject:</div>
   <br>
   <div class="contact-text">{{ $data['subject'] }}</div>
   <br>
   <div class="label">Message:</div>
   <br>
   <div class="contact-text"><?php echo nl2br($data['message']); ?></div>
</div>
@stop
