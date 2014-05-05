<?php
class Electorate extends Eloquent {

  public static function queryValues($reps) {
    foreach($reps as $rep) {
      $rep->map = Electorate::where('member_id', '=', $rep->member_id)->first()->map;
      $rep->map_thumb = Electorate::where('member_id', '=', $rep->member_id)->first()->map_thumb;
      $rep->id = Electorate::where('member_id', '=', $rep->member_id)->first()->id;
    }
    return $reps;
  }



}

 ?>
