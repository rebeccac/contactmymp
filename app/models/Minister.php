<?php
   class Minister extends Eloquent {
      public static function getMinistersDetails($ministers) {

         foreach($ministers as $minister) {
            if ($minister->house == 1) {
               $minister->image = Electorate::where('member_id', '=', $minister->member_id)->first()->image;
               $minister->twitter = Electorate::where('member_id', '=', $minister->member_id)->first()->twitter;
               $minister->facebook = Electorate::where('member_id', '=', $minister->member_id)->first()->facebook;
               $minister->showid = Electorate::where('member_id', '=', $minister->member_id)->first()->id;
            }
            else if ($minister->house == 2) {
               $minister->image = Senator::where('member_id', '=', $minister->member_id)->first()->image;
               $minister->twitter = Senator::where('member_id', '=', $minister->member_id)->first()->twitter;
               $minister->facebook = Senator::where('member_id', '=', $minister->member_id)->first()->facebook;
               $minister->showid = Senator::where('member_id', '=', $minister->member_id)->first()->id;
            }
         }
         return $ministers;
      }
   }
 ?>
