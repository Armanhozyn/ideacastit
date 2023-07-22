<?php

namespace App\Http\Controllers;

use App\Models\Career;
use App\Models\Leed;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $careers = Career::with('leeds')->select('id', 'topic')->where('status', 0)->latest()->get();
        $leeds = Leed::with('careers')->select('user_id', 'career_id')->where('name', null)->latest()->get();
        $users = User::all();
        return view('backend.career.index', compact('careers','leeds','users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.career.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'topic' => 'required',
            'description' => 'required'
        ]);

        Career::create([
            'topic' => $request->topic,
            'description' => $request->description,
            'date' => $request->date,
            'time' => $request->time,
            'created_at' => Carbon::now()
        ]);
        return back()->with('success', 'Stored Successfully');
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
        $career = Career::where('id', $id)->first();
        return view('backend.career.edit', compact('career'));
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
        Career::where('id',$id)->update([
            'topic' => $request->topic,
            'description' => $request->description,
            'date' => $request->date,
            'time' => $request->time,
            'updated_at' => Carbon::now()
        ]);
        return back()->with('success', 'Stored Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $career = Career::find($id);
        $career->delete();
        return back()->with('success', 'Deleted Successfuly');
    }

    public function status(Request $request, $id)
    {
        $career = Career::find($id);
        if ($career->status == 0) {
            $career->status = 1;
        } else {
            $career->status = 0;
        }
        $career->save();
        return back()->with('success', 'Status Updated Successfuly');
    }

    // careers information
    public function SBCareer($id)
    {
        $career = Career::where('id', $id)->first();
        return view('backend.career.SBCareer', compact('career'));
    }
    public function allCareer()
    {
        $careers = Career::where('status', 0)->get();
        return view('backend.career.all_careers', compact('careers'));
    }
    public function allCareerArchive()
    {
        $careers = Career::where('status', 1)->get();
        return view('backend.career.archived_careers', compact('careers'));
    }
    public function allLeedArchive()
    {
        $careers = Career::with('leeds')->select('id', 'topic')->where('status', 1)->latest()->get();
        return view('backend.career.index_archive', compact('careers'));
    }
}
