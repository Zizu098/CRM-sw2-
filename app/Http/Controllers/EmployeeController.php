<?php

namespace App\Http\Controllers;
use App\Employee;
use App\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::paginate(10);
        return view('Employee.view',compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $companies = Company::get();
        return view('Employee.create',compact('companies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        request()->validate([
        'firstName' => 'required',
        'firstName' => 'required',
        ]);

        $newEmployee = new Employee();
        $newEmployee->firstName = $request->input('firstName');
        $newEmployee->lastName = $request->input('lastName');
        $newEmployee->email = $request->input('email');                
        $newEmployee->phone = $request->input('phone');
        if($request->input('company_id') != 0)
            $newEmployee->company_id = $request->input('company_id');
        $newEmployee->role = $request->input('role');
        $newEmployee->save();
        return redirect("displayEmployees");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employee = Employee::findOrfail($id);
        return view('Employee.detail',compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee = Employee::findOrfail($id);
        $companies = Company::all();
        
        return view("Employee.update",compact('employee','companies'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        request()->validate([
        'firstName' => 'required',
        'firstName' => 'required',
        ]);
        $updateEmployee = Employee::findOrfail($id);
        $updateEmployee->firstName = $request->input('firstName');
        $updateEmployee->lastName = $request->input('lastName');
        $updateEmployee->email = $request->input('email');
        $updateEmployee->phone = $request->input('phone');
        $updateEmployee->company_id = $request->input('company_id');
        $updateEmployee->role = $request->input('role');
        $updateEmployee->save();
        return redirect("displayEmployees");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employee = Employee::findOrfail($id);
        $employee->delete();
        return redirect("displayEmployees");
    }
     public function showSearch()
    {
        return view('Employee.showSearch');
    }
    public function search(Request $request)
    {

        $employees = Employee::where('firstName',$request->name)->get();
        return view('Employee.search',compact('employees'));
    }

    public function change($id)
    {
        return view("Employee.changeRole",compact('id'));
    }

    public function changeRole(Request $request, $id)
    {
        $updateEmployee = Employee::findOrfail($id);
        $updateEmployee->role = $request->input('role');
        $updateEmployee->save();
        return redirect("displayEmployees");
    }
}
