<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
	protected $primaryKey = "dept_no"; 
	public function employees() {
		return $this->belongsToMany('App\Employee', 'dept_emp', 'dept_no', 'emp_no')->withPivot('from_date', 'to_date'); 
	}
	public function managers() {
		return $this->belongsToMany('App\Employee', 'dept_manager')->withPivot('from_date', 'to_date'); 
	}
}
