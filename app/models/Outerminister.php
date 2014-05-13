<?php
   class Outerminister extends Eloquent {
      public static function getOuterMinistersDetails($outerministers) {
         foreach($outerministers as $outerminister) {
            if ($outerminister->house == 1) {
               $outerminister->image = Electorate::where('member_id', '=', $outerminister->member_id)->first()->image;
               $outerminister->twitter = Electorate::where('member_id', '=', $outerminister->member_id)->first()->twitter;
               $outerminister->facebook = Electorate::where('member_id', '=', $outerminister->member_id)->first()->facebook;
               $outerminister->showid = Electorate::where('member_id', '=', $outerminister->member_id)->first()->id;
            }
            else if ($outerminister->house == 2) {
               $outerminister->image = Senator::where('member_id', '=', $outerminister->member_id)->first()->image;
               $outerminister->twitter = Senator::where('member_id', '=', $outerminister->member_id)->first()->twitter;
               $outerminister->facebook = Senator::where('member_id', '=', $outerminister->member_id)->first()->facebook;
               $outerminister->showid = Senator::where('member_id', '=', $outerminister->member_id)->first()->id;
            }
         }
         return $outerministers;
      }
   }
 ?>
