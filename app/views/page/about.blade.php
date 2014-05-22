@extends('layouts.index')

@section('content')
   <h2 class="sub-heading">About Us</h2>

   <div class="text-page">
      <em>Contact My MP</em> is not affiliated with the Australian Parliament or any Australian politicians.
      <br><br>
      It is designed to faciliate easy communication between constituents and their MPs and Senators.
      <br><br>
      If you have any comments, we would love to hear from you via our <a href="{{URL::to('contact')}}">contact</a> form.
   </div>

@stop
