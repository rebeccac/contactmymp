@extends('layouts.index')
@section('content')
<div itemscope itemtype="http://schema.org/Person">
<div class="contact-form-content">

  <div class="row">
     <div class="large-12 medium-12 small-12 columns">
        <h2 class="constituency-heading dark_text">{{ $mp['constituency'] }}</h2>
     </div>
     <div class="politician-info-container">
        <div class="row">
           <div class="large-12 medium-12 small-12 columns">
             <h3>Please use the form below to email <span itemprop="name">{{ $mp['first_name'] }} {{ $mp['last_name'] }}</span>, <span itemprop="jobTitle">Member for {{ $mp['constituency'] }}</span>.</h3>
           </div>
        </div>
           <div class="row">
             <div class="large-12 medium-12 small-12 columns pol_info1 mp_medium">
                <span itemprop="name">{{ $mp['first_name'] }} {{ $mp['last_name'] }}</span> | {{ $mp['party'] }}
             </div>
           </div>

           @if(isset($mp['positions']))
           <div class="row">
             <div class="large-12 medium-12 small-12 columns pol_info2 mp_dark">
                <span itemprop="jobTitle">{{ $mp['positions'] }}</span>
             </div>
           </div>
           @endif

           <div class="row">
             <div class="large-12 medium-12 small-12 columns pol_info3">

                <!-- 320px - 767px -->
                <div class="small">
                <div class="row" data-equalizer>
                   <div class="large-6 medium-6 small-6 columns" data-equalizer-watch>
                      <img src="/images/politicians/{{ $mp['image'] }}" alt="Photo of {{$mp['first_name']}} {{$mp['last_name']}}, Member for {{$mp['constituency']}}" itemprop="image">
                   </div>
                   <div class="large-6 medium-6 small-6 columns links" data-equalizer-watch>
                      <div class="s-l">
                         <i class="fa fa-link"></i>
                         @if(!is_null($mp['website']))
                           <a href="{{ $mp['website'] }}" target="_blank" itemprop="url">Website</a>
                         @else
                           N/A
                         @endif
                         <br>
                      </div>
                      <div class="s-l">
                        <i class="fa fa-envelope"></i>
                         @if(!is_null($mp['email']))
                           <a href="mailto:{{ $mp['email'] }}" itemprop="email">Email</a>
                         @else
                           N/A
                         @endif
                         <br>
                      </div>
                      <div class="s-l">
                         <i class="fa fa-twitter smt"></i>
                         @if(!is_null($mp['twitter']))
                         <a href="http://www.twitter.com/{{ $mp['twitter'] }}" target="_blank">Twitter</a>
                         @else
                           N/A
                         @endif
                         <br>
                     </div>
                     <div class="s-l">
                         <i class="fa fa-facebook smf"></i>
                         @if(!is_null($mp['facebook']))
                           <a href="{{ $mp['facebook'] }}" target="_blank">Facebook</a>
                         @else
                           N/A
                         @endif
                         <br>
                     </div>
                   </div>
                   <div class="clear"></div>
                   <div class="row" data-equalizer>
                      <div class="large-12 medium-12 small-12 pol_info3 padding" data-equalizer-watch>
                        <hr class="med_grey">
                        <strong>Electoral Office</strong>
                        <br><br>
                        <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                           @if(!is_null($mp['electorate_address_line_1']))
                             <span itemprop="streetAddress">{{ $mp['electorate_address_line_1'] }}</span>
                             <br>
                           @endif
                           @if(!is_null($mp['electorate_address_line_2']))
                             <span itemprop="streetAddress">{{ $mp['electorate_address_line_2'] }}</span>
                             <br>
                           @endif
                           @if(!is_null($mp['electorate_address_suburb']))
                              <span itemprop="addressLocality">{{ $mp['electorate_address_suburb'] }}</span>
                           @endif

                           @if(!is_null($mp['electorate_address_state']))
                             <span itemprop="addressRegion">{{ $mp['electorate_address_state'] }}</span>
                           @endif

                           @if(!is_null($mp['electorate_address_postcode']))
                             <span itemprop="postalCode">{{ $mp['electorate_address_postcode'] }}</span>
                           @endif
                        </div><!-- itemprop address -->
                        <br><br>
                        @if(!is_null($mp['electorate_phone']))
                          <span itemprop="telephone"><i class="fa fa-phone"></i><strong>Phone: </strong> <a href="tel:{{ $mp['electorate_ph_dial'] }}">{{ $mp['electorate_phone'] }}</a></span>
                        @endif
                        <br>
                        @if(!is_null($mp['electorate_fax']))
                          <span itemprop="faxNumber"><i class="fa fa-print"></i><strong>Fax: </strong>{{ $mp['electorate_fax'] }}</span>
                        @endif
                      </div>
                   </div>

                   <div class="row" data-equalizer>
                      <div class="large-12 medium-12 small-12 pol_info3 padding" data-equalizer-watch>
                        <hr class="med_grey">
                        <strong>Parliament Office</strong>
                        <br><br>
                        <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                           <span itemprop="streetAddress">PO Box 6022</span>
                           <br>
                           <span itemprop="streetAddress">House of Representatives</span>
                           <br>
                           <span itemprop="streetAddress">Parliament House</span>
                           <br>
                           <span itemprop="addressLocality">Canberra</span> <span itemprop="addressRegion">ACT</span> <span itemprop="postalCode">2600</span>
                        </div><!-- itemprop address -->
                        <br><br>
                           @if(!is_null($mp['parliament_phone']))
                             <span itemprop="telephone"><i class="fa fa-phone"></i><strong>Phone: </strong> <a href="tel:{{ $mp['parliament_ph_dial'] }}">{{ $mp['parliament_phone'] }}</a></span>
                           @endif
                        <br>

                           @if(!is_null($mp['parliament_fax']))
                             <span itemprop="faxNumber"><i class="fa fa-print"></i><strong>Fax: </strong>{{ $mp['parliament_fax'] }}</span>
                           @endif
                        <br>
                        <br>
                      </div>
                   </div>
                </div>
             </div><!-- 12 pol_info3 senator_light -->

             <!-- end 320px - 767px -->



            <!-- 768px+ -->
             <div class="medium-large">
                <div class="row" data-equalizer>
                   <div class="large-3 medium-3 small-3 columns" data-equalizer-watch>
                      <img src="/images/politicians/{{ $mp['image'] }}" alt="Photo of {{$mp['first_name']}} {{$mp['last_name']}}, Member for {{$mp['constituency']}}" itemprop="image">
                   </div>
                   <div class="large-9 medium-9 small-9 columns" data-equalizer-watch>
                      <div class="s-l-icons">
                        <div class="section">
                           @if(!is_null($mp['website']))
                             <a href="{{ $mp['website'] }}" target="_blank" itemprop="url"><i class="fa fa-home" style="color: #8c8c8c;"></i></a>
                           @else
                              <i class="fa fa-home"></i>
                           @endif
                        </div>
                        <div class="section">

                            @if(!is_null($mp['email']))
                              <a href="mailto:{{ $mp['email'] }}" itemprop="email"><i class="fa fa-envelope" style="color: #8c8c8c;"></i></a>
                            @else
                               <i class="fa fa-envelope"></i>
                            @endif
                        </div>
                        <div class="section">
                           @if(!is_null($mp['twitter']))
                             <a href="http://www.twitter.com/{{ $mp['twitter'] }}" target="_blank"><i class="fa fa-twitter" style="color: #8c8c8c;"></i></a>
                           @else
                              <i class="fa fa-twitter"></i>
                           @endif
                        </div>
                        <div class="section">
                           @if(!is_null($mp['facebook']))
                             <a href="{{ $mp['facebook'] }}" target="_blank"><i class="fa fa-facebook" style="color: #8c8c8c;"></i></a>
                           @else
                              <i class="fa fa-facebook"></i>
                           @endif
                        </div>
                      </div>
                   </div>

                   <div class="row 6 spacing">
                      <div class="large-12 medium-12 small-12 columns">
                        <hr class="med_grey">
                      </div>
                   </div>

                   <div class="row" data-equalizer>
                      <div class="large-6 medium-6 small-6 columns pol_3 padding" data-equalizer-watch>
                           <strong>Electoral Office</strong>
                           <br><br>
                           <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">

                                 @if(!is_null($mp['electorate_address_line_1']))
                                   <span itemprop="streetAddress">{{ $mp['electorate_address_line_1'] }}</span>
                                   <br>
                                 @endif

                                 @if(!is_null($mp['electorate_address_line_2']))
                                   <span itemprop="streetAddress">{{ $mp['electorate_address_line_2'] }}</span>
                                   <br>
                                 @endif

                                 @if(!is_null($mp['electorate_address_suburb']))
                                   <span itemprop="addressLocality">{{ $mp['electorate_address_suburb'] }}</span>
                                 @endif

                                 @if(!is_null($mp['electorate_address_state']))
                                   <span itemprop="addressRegion">{{ $mp['electorate_address_state'] }}</span>
                                 @endif

                                 @if(!is_null($mp['electorate_address_postcode']))
                                   <span itemprop="postalCode">{{ $mp['electorate_address_postcode'] }}</span>
                                 @endif
                           </div><!-- itemprop address -->
                           <br><br>

                           @if(!is_null($mp['electorate_phone']))
                             <span itemprop="telephone"><i class="fa fa-phone"></i><strong>Phone: </strong> <a href="tel:{{ $mp['electorate_ph_dial'] }}">{{ $mp['electorate_phone'] }}</a></span>
                           @endif

                           <br>
                           @if(!is_null($mp['electorate_fax']))
                             <span itemprop="faxNumber"><i class="fa fa-print"></i><strong>Fax: </strong>{{ $mp['electorate_fax'] }}</span>
                           @endif
                         </div>
                      <div class="large-6 medium-6 small-6 columns pol_3 padding" data-equalizer-watch>
                        <strong>Parliament Office</strong>
                        <br><br>
                        <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                           <span itemprop="streetAddress">PO Box 6022</span>
                           <br>
                           <span itemprop="streetAddress">House of Representatives</span>
                           <br>
                           <span itemprop="streetAddress">Parliament House</span>
                           <br>
                           <span itemprop="addressLocality">Canberra</span> <span itemprop="addressRegion">ACT</span> <span itemprop="postalCode">2600</span>
                        </div><!-- itemprop address -->
                        <br><br>
                        @if(!is_null($mp['parliament_phone']))
                          <span itemprop="telephone"><i class="fa fa-phone"></i><strong>Phone: </strong> <a href="tel:{{ $mp['parliament_ph_dial'] }}">{{ $mp['parliament_phone'] }}</a></span>
                        @endif
                        <br>
                        @if(!is_null($mp['parliament_fax']))
                          <span itemprop="faxNumber"><i class="fa fa-print"></i><strong>Fax: </strong>{{ $mp['parliament_fax'] }}</span>
                        @endif
                        <br>
                        <br>
                      </div>
                    </div>
                  </div>
             </div>
             <!-- end 768px+ -->
          </div>
      </div><!-- politician-container-box -->
            <!-- all sizes -->
             <div class="row" data-equalizer>
                <div class="large-12 medium-12 small-12 pol_info1 mp_medium" data-equalizer-watch>
                   Email {{ $mp['first_name'] }} {{ $mp['last_name'] }}
                </div>
             </div>
             <div class="row" data-equalizer>
                <div class="large-12 medium-12 small-12 pol_info3 padding" data-equalizer-watch>
                    @if(!is_null($mp['email']))

                       {{ Form::open(array('action' => 'MPController@mpemail', 'id' => 'mp-email', 'class' => 'contact_form')) }}
                          {{ Form::label('name', 'Name:') }}
                          {{ Form::text('name', $value = null, $attributes = array('class' => 'inputs')); }}
                          {{ $errors->first('name', '<p class="error">* :message</p>') }}
                          <br>
                          {{ Form::label('email', 'Your email address: ') }}
                          {{ Form::email('email', $value = null, $attributes = array('class' => 'inputs')); }}
                          {{ $errors->first('email', '<p class="error">* :message</p>') }}
                          <br>
                          {{ Form::label('subject', 'Subject:') }}
                          {{ Form::text('subject', $value = null, $attributes = array('class' => 'inputs')); }}
                          {{ $errors->first('subject', '<p class="error">* :message</p>') }}
                          <br>
                          {{ Form::label('message', 'Message:') }}
                          {{ Form::textarea('message', $value = null, $attributes = array('class' => 'inputs')); }}
                          {{ $errors->first('message', '<p class="error">* :message</p>') }}

                          {{ Form::hidden('id', $mp['id']) }}
                          <br>
                          <div>
                              <input type="submit" id="mp_email_submit" name="mp_email_submit" value="Submit">
                              <a href="{{ URL::to('privacy') }}" target="_blank" class="privacy_policy">
                                 <i class="fa fa-info-circle"></i>Privacy Policy
                              </a>
                          </div>
                       {{ Form::close() }}
                      @else
                         <p><br>Sorry, this MP has chosen not to make an email address available to the public.
                         <br><br>
                         @if($mp['personal_contact_form'])
                            @if($mp['gender'] == 'F')
                               She
                            @else
                               He
                            @endif
                            can be <strong><a href="{{$mp['personal_contact_form']}}" target="_blank">contacted here</a></strong>.
                         @endif</p>
                      @endif
                </div>
             </div>
          </div>
       </div>
    </div><!-- end Person schema -->
@stop
