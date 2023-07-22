<?php

namespace App\Http\Controllers;

use App\Models\Leed;
use Carbon\Carbon;
use Illuminate\Http\Request;

class LeedController extends Controller
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
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
        // dd($request);
        $request->validate([
            'name' => 'required|max:50',
            'email' => 'required|email',
            'career_id' => 'required',
            'phone' => 'required|numeric',
            'file' => 'required|mimes:pdf|max:3072',
        ]);

        $cvFile = $request->file;
        $extension = $cvFile->getClientOriginalExtension();
        $originName = $cvFile->getClientOriginalName();
        $fileName = pathinfo($originName, PATHINFO_FILENAME);
        $fileName = $fileName.'_'.time().'.'.$extension;

        $path = public_path('assets/career/');
        $cvFile->move($path, $fileName);

        Leed::create([
            'career_id' => $request->career_id,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
            'file' => $fileName,
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
        //
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
    }

}
