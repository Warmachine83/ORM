<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class womanOnly extends Model
{
    /**
    *Trouver les emlpopyer de sexe f�minin par emp_no, limit� aux 10 premiers
    */
    $gender = DB::table('employees')->where('gender', 'F')->find(3);
    echo $gender;
}
