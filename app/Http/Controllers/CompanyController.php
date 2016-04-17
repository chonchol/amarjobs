<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $companies = Company::where('id','>=',1)->paginate(10);
        return view('company.allCompany',['companies'=>$companies]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('company.addCompany');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $company = [];
        $company['companyName'] = $request->input('companyName');
        $company['city'] = $request->input('city');
        $company['district'] = $request->input('district');
        $company['postcode'] = $request->input('postcode');
        $company['address'] = $request->input('address');
        $company['phone'] = $request->input('phone');
        $company['email'] = $request->input('email');
        $company['website'] = $request->input('website');
        $company['logo'] = $request->input('logo');

        Company::create($company);
        return redirect(route('addCompany'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $company = Company::findOrfail($id);
        return view('company.editCompany',['id'=>$id,'company'=>$company]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id=0)
    {
        //

        $id = $request->input('id');
        $company = Company::findOrfail($id);
        $company->companyName = $request->input('companyName');
        $company->city = $request->input('city');
        $company->district = $request->input('district');
        $company->postcode = $request->input('postcode');
        $company->address = $request->input('address');
        $company->phone = $request->input('phone');
        $company->email = $request->input('email');
        $company->website = $request->input('website');
        $company->logo = $request->input('logo');

        $company->save();
        return redirect(route('allCompany'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
