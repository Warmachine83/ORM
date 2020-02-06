<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;

class EmployeeApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $e = Employee::create($request->all());
	return $e;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        return $employee;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        $employee->update($request->all());
        return $employee;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        $e = $employee;
        $employee->delete();
        return $e;
    }

    protected function validator(array $data)
    {
        return validator::make($data, [
            'first_name' => ['required', 'string', 'max:255'], 
            'last_name' => ['required', 'string', 'max:255'],
            'birth_date' => ['required', 'string', 'date_format:Y-m-d'],
            'hire_date' => ['required', 'date'],
            'gender' => ['required', 'string', 'max:1', 'min:1', 'regex:[MF]'],
        ]);
    }

}
