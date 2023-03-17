<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Companies;
use Illuminate\Support\Str;
use Image;
use File;

class CompaniesController extends Controller
{
    //add company form  view
    public function index(){
        return view('pages.companies.add');
    }

    //edit company
    public function edit(){
        return view('pages.companies.edit');
    }
    // show all companies data in table
    public function show(){
        $companies = Companies::orderBy('created_at','DESC')->paginate(10);
        return view('pages.companies.manage',compact('companies'));
    }
    //companie data store
    public function store(Request $request){
        $request->validate([
            'companieName' => 'required',
            'companieEmail' => 'required',
            'companieLogo' => 'required',
            'companieWebsite' => 'required',

        ]);
        $companie = new Companies;
        $companie->companie_name = $request->companieName;
        $companie->companie_slug = Str::slug( $request->companieName);
        $companie->companie_email = $request->companieEmail;
        $companie->companie_website = $request->companieWebsite;
        //logo uoload
        $logo = $request->file('companieLogo');
        $imageCustomeName = rand().'.'.$logo->getClientOriginalExtension();
        $location =public_path('images/'.$imageCustomeName);
        Image::make( $logo)->save($location);
        $companie->companie_logo= $imageCustomeName;
        $companie->save();
        if($companie){
            $notification = array(
                'message' => ' Companie Added Successfully',
                'alert-type' => 'success',
            ); // returns Notification,
            return redirect()->route('admin.managecompany')->with($notification);
        }
    }
    //edit for update a companie
    public function editdata($slug){
        $compaine= Companies::where('companie_slug',$slug)->first();
        return view('pages.companies.edit',compact('compaine'));
    }
    //update companie
    public function update($id,Request $request){
        $request->validate([
            'companieName' => 'required',
            'companieEmail' => 'required',
            'companieWebsite' => 'required',

        ]);
        $compaine= Companies::find($id);
        $compaine->companie_name = $request->companieName;
        $compaine->companie_slug = Str::slug( $request->companieName);
        $compaine->companie_email = $request->companieEmail;
        $compaine->companie_website = $request->companieWebsite;
        if (!empty($request->companieLogo)) {
            if (File::exists('images/'.$compaine->companie_logo)) {
                File::delete('images/' .$compaine->companie_logo);
            }
            $logo = $request->file('companieLogo');
            $imageCustomename = rand() . '.' . $logo->getClientOriginalExtension();
            $location = public_path('images/' . $imageCustomename);
            Image::make($logo)->save($location);
            $compaine->companie_logo = $imageCustomename;
        }
        $compaine->update();
        if($compaine){
            $notification = array(
                'message' => ' Companie Update Successfully',
                'alert-type' => 'success',
            ); // returns Notification,
            return redirect()->route('admin.managecompany')->with($notification);
        }

    }
    //companie delete method
    public function distroy($id){
        $compaine= Companies::find($id);
        $compaine->delete();
        if (File::exists('images/'.$compaine->companie_logo)) {
            File::delete('images/' .$compaine->companie_logo);
        }
        if($compaine){
            $notification = array(
                'message' => ' Companie Delete Successfully',
                'alert-type' => 'warning',
            ); // returns Notification,
            return redirect()->back()->with($notification);
        }
    }

}
