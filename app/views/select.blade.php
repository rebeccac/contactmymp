@extends('layouts.index')

@section('content')
<h2 class="sub-heading">{{ $postcode }}</h2>

<div id="politicians_container">
   <div class="house-results">
      <h3 class="house-sub-heading">House of Representatives</h3>
      @include('includes/mp_info')
   </div>
   <div class="house-results">
      <h2 class="house-sub-heading">Australian Senate</h2>
      @include('includes/senator_info')
   </div>
</div>
@stop
