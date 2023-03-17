<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employees;
use App\Models\Companies;

class EmployeesController extends Controller
{
    //view employe add form
    public function index(){
        $companies = Companies::all();
        return view('pages.employees.add',compact('companies'));
    }
    //show all empolyees
    public function show(){
        $employees = Employees::with('Companiee')->orderBy('created_at','DESC')->paginate(10);
        return view('pages.employees.manage',compact('employees'));

    }

    //empolye store
    public function store(Request $request){
        $request->validate([
            'employeeName' => 'required',
            'companyName' => 'required',
            'employeeEmail' => 'required',
            'employeePhone' => 'required',

        ]);

        $employees = new Employees;
        $employees->employee_name = $request->employeeName;
        $employees->company_id = $request->companyName;
        $employees->employee_email = $request->employeeEmail;
        $employees->employee_phone = $request->employeePhone;
        $employees->save();
        if($employees){
            $notification = array(
                'message' => ' Empolyee Added Successfully',
                'alert-type' => 'success',
            ); // returns Notification,
            return redirect()->route('admin.showemploye')->with($notification);
        }
    }
    //empolye delete
    public function distroy($id){
        $employees = Employees::find($id);
        $employees->delete();
        if($employees){
            $notification = array(
                'message' => ' Empolyee Delete Successfully',
                'alert-type' => 'warning',
            ); // returns Notification,
            return redirect()->route('admin.showemploye')->with($notification);
        }
    }

    // empolye edit
    public function edit($id){
        $companies = Companies::all();
        $empolye = Employees::find($id);
        return view('pages.employees.edit',compact('companies','empolye'));
    }

    //empolye info update
    public function update($id, Request $request){
        $request->validate([
            'employeeName' => 'required',
            'companyName' => 'required',
            'employeeEmail' => 'required',
            'employeePhone' => 'required',

        ]);
        $employees =Employees::find($id);
        $employees->employee_name = $request->employeeName;
        $employees->company_id = $request->companyName;
        $employees->employee_email = $request->employeeEmail;
        $employees->employee_phone = $request->employeePhone;
        $employees->update();
        if($employees){
            $notification = array(
                'message' => ' Empolyee update Successfully',
                'alert-type' => 'success',
            ); // returns Notification,
            return redirect()->route('admin.showemploye')->with($notification);
        }
    }

}
