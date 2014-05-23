@extends('layouts.index')

@section('content')
   <h2 class="sub-heading">About Us</h2>

   <div class="text-page">
      Your MP and Senators represent you in the Australian Parliament and you have the right to
      contact them with any concerns or problems you might have.
      We hope that <em>Contact My MP</em> will help to faciliate easy communication between constituents and
      their representatives in the Federal Parliament.
      <br><br>
      Your emails to MPs and Senators are completely private and not accessible by anyone involved with <em>Contact My MP</em>.
      For further information, please see the <a href="{{ URL::to('privacy') }}">Privacy Policy</a>.
      <br><br>
      <em>Contact My MP</em> is not affiliated with the Australian Parliament or any Australian politicians.
      <br><br>
      If you have any comments, we would love to hear from you via our <a href="{{URL::to('contact')}}">contact form</a>.
   </div>

@stop
