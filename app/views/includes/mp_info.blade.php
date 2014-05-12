@if(isset($reps))
   @if(count($reps) > 1)
      <div class="box">
         <i class="fa fa-map-marker"></i>
         <br>
         Your postcode returned more than one possible electorate.
         <br><br>
         Please use the maps to find your correct electorate.
      </div>
   @endif

   @foreach($reps as $rep)
      <div class="politician mp_light">
         <div class="constituency mp_dark">
            <p class="politician_title">{{ $rep->constituency }}</p>
         </div>
         <div class="clear"></div>
         <div class="mp_name mp_medium">
            <p class="politician_title">{{ $rep->first_name }} {{ $rep->last_name }}</p>
         </div>
         <div class="row politician_row1">
            <div class="large-6 medium-6 small-6 columns">
               <img class="politician_img" src="http://www.openaustralia.org/{{ $rep->image }}">
            </div>
            <div class="large-6 medium-6 small-6 columns">
               <a href="/maps/{{ $rep->map }}" target="_blank"><img class="politician_img" src="/images/map_thumb/{{ $rep->map_thumb }}"></a>
            </div>
         </div>
         <div class="politician_row2">
            <span class="party">{{ $rep->party }}</span>
            <br><br>
            <a href="/lowerhouse/{{ $rep->id }}" class="button_link mp_dark">Contact</a>
         </div>
      </div>
   @endforeach
@endif
