@extends('layouts.index')
@section('content')
   <h2 class="sub-heading">Contact Us</h2>
      <div class="contact-form-content">
         {{ Form::open(array('action' => 'PageController@postContact', 'class' => 'contact_form')) }}
            @foreach($errors->all('
               :message
               ') as $message) {{ $message }}
            @endforeach
            {{ Form::label('name', 'Your name: ') }}
            {{ Form::text('name', '', array('placeholder' => 'Name')) }}
            <br>
            {{ Form::label('email', 'Your email address: ') }}
            {{ Form::email('email', '', array('placeholder' => 'example@example.com')) }}
            <br>
            {{ Form::label('subject', 'Subject: ') }}
            {{ Form::text('subject', '', array('placeholder' => 'Subject')) }}
            <br>
            {{ Form::label('message', 'Message: ') }}
            {{ Form::textarea('message', '', array('placeholder' => 'Message')) }}
            <br>
            {{ Form::submit('Submit', array('id' => 'contact_form_submit')) }}
         {{ Form::close() }}
      </div><!-- contact-form-content -->
@stop
