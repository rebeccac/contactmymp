<?php
class Electorate extends Eloquent {

  public static function getMaps($reps) {
    foreach($reps as $rep) {
      $rep->map = Electorate::where('constituency', '=', $rep->constituency)->first()->map;
      $rep->map_thumb = Electorate::where('constituency', '=', $rep->constituency)->first()->map_thumb;
    }
    return $reps;
  }



}

 ?>
