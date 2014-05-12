@if(isset($senators))
   @foreach($senators as $senator)
      <div class="politician senator_light">
         <div class="constituency senator_dark">
            <p class="politician_title">{{ $senator['state'] }}</p>
         </div>
         <div class="clear"></div>
         <div class="senator_name senator_medium">
            <p class="politician_title">{{ $senator['first_name'] }} {{ $senator['last_name'] }}</p>
         </div>
         <div class="row politician_row1">
            <div class="large-6 medium-6 small-6 columns">
               <img class="politician_img" src="/images/politicians/{{ $senator['image'] }}">
            </div>
            <div class="large-6 medium-6 small-6 columns">
               <img class="senate_map" src="/images/state_thumbs/{{ $senator['map_thumb'] }}">
            </div>
         </div>
         <div class="politician_row2">
            <span class="party">{{ $senator['party'] }}</span>
            <br><br>
            <a href="/upperhouse/{{ $senator['id'] }}" class="button_link senator_dark">Contact</a>
         </div>
      </div>
   @endforeach
@endif
