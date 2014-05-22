@extends('layouts.index')
@section('content')
   <h2 class="sub-heading">Contact Us</h2>
      <div class="contact-form-content">
         <div class="s-m-i">
            <a href="http://www.twitter.com/contactmymp" target="_blank"><i class="fa fa-twitter"></i></a>
            <a href="https://www.facebook.com/contactmympaustralia" target="_blank"><i class="fa fa-facebook"></i></a>
         </div>
         {{ Form::open(array('action' => 'PageController@postContact', 'class' => 'contact_form')) }}
            {{ Form::label('name', 'Your name: ') }}
            {{ Form::text('name', '', array('placeholder' => 'Name')) }}
		          {{ $errors->first('name', '<p class="error">* :message</p>') }}
            <br>
            {{ Form::label('email', 'Your email address: ') }}
            {{ Form::email('email', '', array('placeholder' => 'example@example.com')) }}
		          {{ $errors->first('email', '<p class="error">* :message</p>') }}
            <br>
            {{ Form::label('subject', 'Subject: ') }}
            {{ Form::text('subject', '', array('placeholder' => 'Subject')) }}
		          {{ $errors->first('subject', '<p class="error">* :message</p>') }}
            <br>
            {{ Form::label('message', 'Message: ') }}
            {{ Form::textarea('message', '', array('placeholder' => 'Message')) }}
		          {{ $errors->first('message', '<p class="error">* :message</p>') }}
            <br>
            {{ Form::submit('Submit', array('id' => 'contact_form_submit')) }}
         {{ Form::close() }}
      </div>
@stop
