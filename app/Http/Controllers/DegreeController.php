<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Degree;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class DegreeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $degrees = Degree::where('id', '>=', 1)->paginate(2);
        return view('jobs.allDegree', ['degrees' => $degrees]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('jobs.addDegree');
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
        $degree = [];
        $degree['sortInd'] = $request->input('sortInd');
        $degree['degreeName'] = $request->input('degreeName');
        
        Degree::create($degree);
        return redirect(route('addDegree'));
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
        $degree = Degree::findOrFail($id);
        return view('jobs.editDegree', ['id' => $id, 'degree' => $degree]);
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
        $id = $request->input("id");
        $degree = Degree::find($id);
        $degree->sortInd = $request->input('sortInd');
        $degree->degreeName = $request->input('degreeName');
        
        $degree->save();
         
        return redirect(route('allDegree'));
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
        $degree = Degree::find($id);
        $degree->delete();
         
        return redirect(route('allDegree'));
    }
}
