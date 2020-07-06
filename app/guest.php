<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class guest extends Model
{   
    protected $table = "guest_tbl";
     public function insertGuest($object, $gc){
        $guestId = DB::table($this->table)
        ->insertGetId([
            "guest_first_name" => $object["first_name"],
            "guest_last_name" => $object["last_name"],
            "guest_email" => $object["email"],
            "guest_gender" => $object["gender"],
            "guest_birthdate" => $object["first_name"],
            "guest_card_code" => $gc
        ]);
        return $guestId;

     }
}
