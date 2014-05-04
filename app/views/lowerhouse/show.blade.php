@extends('layouts.index')
@section('content')

<div class="contact-form-content">
  <div class="row" data-equalizer>
    <div class="large-1 medium-1 small-1 columns" data-equalizer-watch></div>
    <div class="large-11 medium-11 small-1 columns" data-equalizer-watch>
      <h2 class="sub-heading dark_text">{{ $mp['constituency'] }}</h2>
    </div>
  </div>

  <div class="row 1" data-equalizer>
     <div class="large-1 medium-1 small-1 columns empty" data-equalizer-watch></div>

     <div class="large-10 medium-10 small-10 columns main" data-equalizer-watch>
        <div class="row 2" data-equalizer>
           <div class="large-2 medium-2 small-2 columns image no-bg" data-equalizer-watch>
             <img src="/images/mp/{{ $mp['image'] }}" alt="Photo of {{$mp['first_name']}} {{$mp['last_name']}}, MP for {{$mp['constituency']}}" width="130px">
          </div> <!-- image no-bg -->

         <div class="large-10 medium-10 small-10 columns mp_light" data-equalizer-watch>
            <!-- CONTENT -->
            <div class="row 3" data-equalizer>
               <div class="large-12 medium-12 small-12 columns pol_info1 mp_medium" data-equalizer-watch>
                  {{ $mp['first_name'] }} {{ $mp['last_name'] }} | {{ $mp['party'] }}
               </div>
            </div> <!-- row 3 -->

            @if(!is_null($mp['positions']))
               <div class="row 3a" data-equalizer>
                  <div class="large-12 medium-12 small-12 columns pol_info2 mp_dark" data-equalizer-watch>
                        {{ $mp['positions'] }}
                  </div>
               </div><!-- row 3a -->
            @endif

            <div class="row 4 spacing" data-equalizer>
               <div class="large-6 medium-6 small-6 columns pol_info3" data-equalizer-watch>
                  <i class="fa fa-link"></i>
                  @if(!is_null($mp['website']))
                    <a href="{{ $mp['website'] }}">Website</a>
                  @else
                    N/A
                  @endif
               </div><!-- 6 columns pol_info3 -->
               <div class="large-6 medium-6 small-6 columns pol_info3" data-equalizer-watch>
                  <i class="fa fa-envelope"></i>
                  @if(!is_null($mp['email']))
                    <a href="mailto:{{ $mp['email'] }}">Email</a>
                  @else
                    N/A
                  @endif
               </div><!-- 6 columns pol_info3 -->

            </div><!-- row spacing 4 -->

            <div class="row 5 spacing" data-equalizer>
               <div class="large-6 medium-6 small-6 columns pol_info3" data-equalizer-watch>
                  <i class="fa fa-twitter smt"></i>
                  @if(!is_null($mp['twitter']))
                  <a href="http://www.twitter.com/{{ $mp['twitter'] }}">Twitter</a>
                  @else
                    N/A
                  @endif
               </div><!-- 6 columns pol_info3 -->
               <div class="large-6 medium-6 small-6 columns pol_info3" data-equalizer-watch>
                  <i class="fa fa-facebook smf"></i>
                  @if(!is_null($mp['facebook']))
                    <a href="{{ $mp['facebook'] }}">Facebook</a>
                  @else
                    N/A
                  @endif
               </div><!-- 6 columns pol_info3 -->
            </div><!-- row spacing 5 -->

            <div class="row 6 spacing">
               <div class="large-12 medium-12 small-12 columns">
                  <hr class="med_grey">
               </div>
            </div>

            <div class="row 7 spacing" data-equalizer>
               <div class="large-6 medium-6 small-6 columns pol_info3" data-equalizer-watch>
                  <strong>Electoral Office</strong>
                  <br><br>
                  @if(!is_null($mp['electorate_address_line_1']))
                    {{ $mp['electorate_address_line_1'] }}
                    <br>
                  @endif
                  @if(!is_null($mp['electorate_address_line_2']))
                    {{ $mp['electorate_address_line_2'] }}
                    <br>
                  @endif

                  @if(!is_null($mp['electorate_address_suburb']))
                    {{ $mp['electorate_address_suburb'] }}
                  @endif
                  @if(!is_null($mp['electorate_address_state']))
                    {{ $mp['electorate_address_state'] }}
                  @endif
                  @if(!is_null($mp['electorate_address_postcode']))
                    {{ $mp['electorate_address_postcode'] }}
                  @endif

                  <br><br>
                  @if(!is_null($mp['electorate_phone']))
                    <i class="fa fa-phone"></i><strong>Phone: </strong> <a href="tel:{{ $mp['electorate_ph_dial'] }}">{{ $mp['electorate_phone'] }}</a>
                  @endif
                  <br>
                  @if(!is_null($mp['electorate_fax']))
                    <i class="fa fa-print"></i><strong>Fax: </strong>{{ $mp['electorate_fax'] }}
                  @endif

               </div><!-- 6 columns pol_info3 -->

               <div class="large-6 medium-6 small-6 columns pol_info3" data-equalizer-watch>
                  <strong>Parliament Office</strong>
                  <br><br>
                  PO Box 6022
                  <br>
                  House of Representatives
                  <br>
                  Parliament House
                  <br>
                  Canberra ACT 2600
                  <br><br>
                  @if(!is_null($mp['parliament_phone']))
                    <i class="fa fa-phone"></i><strong>Phone: </strong> <a href="tel:{{ $mp['parliament_ph_dial'] }}">{{ $mp['parliament_phone'] }}</a>
                  @endif
                  <br>
                  @if(!is_null($mp['parliament_fax']))
                    <i class="fa fa-print"></i><strong>Fax: </strong>{{ $mp['parliament_fax'] }}
                  @endif

               </div><!-- 6 columns pol_info3 -->

            </div><!-- row 7 spacing -->

            <div class="row 8 spacing">
               <div class="large-12 medium-12 small-12 columns">
                  <hr class="med_grey">
               </div>
            </div>

            <div class="row 9 spacing" data-equalizer>

               <div class="large-12 medium-12 small-12 columns pol_info3" data-equalizer-watch>
                  {{ Form::open(array('url' => 'mp/sendemail', 'class' => 'contact_form')) }}
                     {{ Form::label('email', 'Your email address: ') }}
                     <br>
                     {{ Form::email('email', $value = null, $attributes = array('class' => 'inputs')); }}
                     <br>
                     {{ Form::label('subject', 'Subject:') }}
                     <br>
                     {{ Form::text('subject', $value = null, $attributes = array('class' => 'inputs')); }}
                     <br>
                     {{ Form::label('message', 'Message:') }}
                     <br>
                     {{ Form::textarea('message', $value = null, $attributes = array('class' => 'inputs')); }}
                     <br>
                     <div>
                        <input type="" id="mp_email_submit" name="mp_email_submit" value="Submit">
                     </div>
                  {{ Form::close() }}
               </div>

            </div><!-- row 9 spacing -->


         </div> <!-- 11 light-bg <content> -->

        </div> <!-- row 2 -->

     </div> <!-- 10 main -->
     <div class="large-1 medium-1 small-1 columns empty" data-equalizer-watch></div>
  </div> <!-- row 1 -->
</div>

@stop
