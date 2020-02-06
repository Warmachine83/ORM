<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class womanOnly extends Model
{
    /**
    *Trouver les emlpopyer de sexe féminin par emp_no, limité aux 10 premiers
    */
    $gender = DB::table('employees')->where('gender', 'F')->find(3);
    echo $gender;
}
