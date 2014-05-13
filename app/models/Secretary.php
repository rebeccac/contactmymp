<?php
   class Secretary extends Eloquent {

      public static function getSecretaryDetails($secretaries) {
         foreach($secretaries as $secretary) {
            if ($secretary->house == 1) {
               $secretary->image = Electorate::where('member_id', '=', $secretary->member_id)->first()->image;
               $secretary->twitter = Electorate::where('member_id', '=', $secretary->member_id)->first()->twitter;
               $secretary->facebook = Electorate::where('member_id', '=', $secretary->member_id)->first()->facebook;
               $secretary->showid = Electorate::where('member_id', '=', $secretary->member_id)->first()->id;
            }
            else if ($secretary->house == 2) {
               $secretary->image = Senator::where('member_id', '=', $secretary->member_id)->first()->image;
               $secretary->twitter = Senator::where('member_id', '=', $secretary->member_id)->first()->twitter;
               $secretary->facebook = Senator::where('member_id', '=', $secretary->member_id)->first()->facebook;
               $secretary->showid = Senator::where('member_id', '=', $secretary->member_id)->first()->id;
            }
         }
         return $secretaries;
      }

   }
 ?>
