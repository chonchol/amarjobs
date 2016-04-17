<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;
use App\Http\Requests;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $jobs = Job::where('id','>=',1)->paginate(10);
        return view('jobs.allJob',['jobs'=>$jobs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('jobs.addJob');
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
        $job = [];
        $job['jobTitle'] = $request->input('jobTitle');
        $job['jobSummary'] = $request->input('jobSummary');
        $job['jobDescription'] = $request->input('jobDescription');
        $job['jobType'] = $request->input('jobType');
        $job['jobLocation'] = $request->input('jobLocation');
        $job['applicationEndDate'] = $request->input('applicationEndDate');
        $job['salary'] = $request->input('salary');
        $job['applicationInstruction'] = $request->input('applicationInstruction');
        $job['featuredJob'] = $request->input('featuredJob');
        $job['numberOfPosition'] = $request->input('numberOfPosition');
        $job['minimumExperience'] = $request->input('minimumExperience');
        $job['minimumAge'] = $request->input('minimumAge');
        $job['others'] = $request->input('others');

        Job::create($job);
        return redirect(route('allJob'));
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
        $job = Job::findOrFail($id);

        return view('jobs.editJob',['id'=>$id,'job'=>$job]);
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
        //

        
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
        $job = Job::findOrFail($id);

        $job->delete($id);
        return redirect(route('allJob'));
    }
}
