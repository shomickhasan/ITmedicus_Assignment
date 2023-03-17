<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Companies;

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
}
