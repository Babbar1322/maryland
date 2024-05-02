<?php

namespace App\Http\Controllers;

use App\Models\form2;
use App\Models\judicial;
use Illuminate\Http\Request;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        return view('form1');
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
        //

        judicial::create($request->all());

        return redirect()->back()->with('success', 'Data Submitted Successfully.');
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

    public function form2() {
        return view('form2');
    }


    public function form2_post(Request $request) {
        form2::create($request->all());

        return  redirect()->back()->with('success', 'Data Submitted Successfully.');
    }

    public function form3() {
        return view('form3');
    }

    public function form4() {
        return view('form4');
    }
    public function form4_post(Request $request) {
        form4::create($request->all());

        return  redirect()->back()->with('success', 'Data Submitted Successfully.');
    }



    public function form5(){
        return view('form5');
    }



}
