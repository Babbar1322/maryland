<?php

namespace App\Http\Controllers;

use App\Models\cc320_form;
use App\Models\cc320_form_data;
use App\Models\ct_long_form;
use App\Models\ct_long_form_data;
use App\Models\fam108_current_form;
use App\Models\fam108_current_form_data;
use App\Models\fl140_ca_form;
use App\Models\fl140_ca_form_data;
use App\Models\fl142_ca_form;
use App\Models\fl142_ca_form_data;
use App\Models\fl160_ca_form;
use App\Models\fl160_ca_form_data;
use App\Models\fl161_ca_form;
use App\Models\fl161_ca_form_data;
use App\Models\form2;
use App\Models\form3;
use App\Models\ga_form;
use App\Models\form4;
use App\Models\nj_form;
use App\Models\nj_form_data;
use App\Models\judicial;
use App\Models\pa_form;
use App\Models\sfs_co_form;
use App\Models\sfs_co_form_data;
use Illuminate\Http\Request;

class FormController extends Controller
{

    public function index()
    {
        //

        return view('form1');
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //

        judicial::create($request->all());

        return redirect()->back()->with('success', 'Data Submitted Successfully.');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


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

    public function form3_post(Request $request){
        // form3::create($request->all());

        $nj = new ga_form();
        $nj->save();

        foreach($request->all() as $key=>$req){
            if($key == "_token"){
                continue;
            }
            $nj_data = new form3();
            $nj_data->ga_form_id = $nj->id;
            $nj_data->keyss = $key;
            $nj_data->valuess= $req;
            $nj_data->save();
        }

        return  redirect()->back()->with('success', 'Data Submitted Successfully.');
    }

    public function form4() {
        return view('form4');
    }

    public function form4_post(Request $request) {
        $nj = new pa_form();
        $nj->save();

        foreach($request->all() as $key=>$req){
            if($key == "_token"){
                continue;
            }
            $nj_data = new form4();
            $nj_data->pa_form_id = $nj->id;
            $nj_data->keyss = $key;
            $nj_data->valuess= $req;
            $nj_data->save();
        }
        return  redirect()->back()->with('success', 'Data Submitted Successfully.');
    }



    public function form5(){
        return view('form5');
    }


    public function form5_post(Request $request) {
        $nj = new nj_form();
        $nj->save();

        foreach($request->all() as $key=>$req){
            if($key == "_token"){
                continue;
            }
            $nj_data = new nj_form_data();
            $nj_data->nj_form_id = $nj->id;
            $nj_data->keyss = $key;
            $nj_data->valuess= $req;
            $nj_data->save();
        }
        return redirect()->back()->with('success', 'Data Submitted Successfully.');
    }


    public function form6(){
        return view('form6');
    }

    public function form6_post(Request $request){
        $form = new cc320_form();
        $form->save();
        foreach($request->all() as $key=>$req){
            if($key == "_token"){
                continue;
            }
            $form_data = new cc320_form_data();
            $form_data->cshort_form_id = $form->id;
            $form_data->keyss = $key;
            $form_data->valuess= $req;
            $form_data->save();
        }
        return redirect()->back()->with('success', 'Data Submitted Successfully.');
    }

    public function form7(){
        return view('form7');
    }

    public function form7_post(Request $request) {
        $cshort = new cc320_form();
        $cshort->save();

        foreach($request->all() as $key=>$req){
            if($key == "_token"){
                continue;
            }
            $cshort_data = new cc320_form_data();
            $cshort_data->cshort_form_id = $cshort->id;
            $cshort_data->keyss = $key;
            $cshort_data->valuess= $req;
            $cshort_data->save();
        }
        return redirect()->back()->with('success', 'Data Submitted Successfully.');
    }


    public function form8(){
        return view('form8');
    }



    public function form8_post(Request $request) {
        $cshort = new ct_long_form();
        $cshort->save();

        foreach($request->all() as $key=>$req){
            if($key == "_token"){
                continue;
            }
            $cshort_data = new ct_long_form_data();
            $cshort_data->cslong_form_id = $cshort->id;
            $cshort_data->keyss = $key;
            $cshort_data->valuess= $req;
            $cshort_data->save();
        }
        return redirect()->back()->with('success', 'Data Submitted Successfully.');
    }



    public function form9() {

        return view('form9');
    }





    public function form9_post(Request $request) {
        $fl140_ca = new fl140_ca_form();
        $fl140_ca->save();

        foreach($request->all() as $key=>$req){
            if($key == "_token"){
                continue;
            }
            $fl140_data = new fl140_ca_form_data();
            $fl140_data->fl140_form_id = $fl140_ca->id;
            $fl140_data->keyss = $key;
            $fl140_data->valuess= $req;
            $fl140_data->save();
        }
        return redirect()->back()->with('success', 'Data Submitted Successfully.');
    }


    public function form10(){
        return  view('form10');
    }


    public function form10_post(Request $request) {
        $fl161_ca = new fl161_ca_form();
        $fl161_ca->save();

        foreach($request->all() as $key=>$req){
            $fl161_ca_data = new fl161_ca_form_data();
            $fl161_ca_data->fl161_form_id = $fl161_ca->id;
            $fl161_ca_data->keyss = $key;
            $fl161_ca_data->valuess= $req;
            $fl161_ca_data->save();
        }
        return redirect()->back()->with('success', 'Data Submitted Successfully.');
    }


    public function form11() {
        return view('form11');
    }


    public function form11_post(Request $request) {
        $fl160_ca = new fl160_ca_form();
        $fl160_ca->save();

        foreach($request->all() as $key=>$req){
            $fl160_ca_data = new fl160_ca_form_data();
            $fl160_ca_data->fl160_form_id = $fl160_ca->id;
            $fl160_ca_data->keyss = $key;
            $fl160_ca_data->valuess= $req;
            $fl160_ca_data->save();
        }
        return redirect()->back()->with('success', 'Data Submitted Successfully.');
    }


    public function form12() {
        return view('form12');
    }


    public function form12_post(Request $request) {
        $fam108_current = new fam108_current_form();
        $fam108_current->save();

        foreach($request->all() as $key=>$req){
            $fam108_current_data = new fam108_current_form_data();
            $fam108_current_data->fam108_current_form_id = $fam108_current->id;
            $fam108_current_data->keyss = $key;
            $fam108_current_data->valuess= $req;
            $fam108_current_data->save();
        }
        return redirect()->back()->with('success', 'Data Submitted Successfully.');
    }


    public function form13(){
        return view('form13');
    }


    public function form13_post(Request $request) {
        $fl140_ca = new fl142_ca_form();
        $fl140_ca->save();

        foreach($request->all() as $key=>$req){
            if($key == "_token"){
                continue;
            }
            $fl140_data = new fl142_ca_form_data();
            $fl140_data->fl142_form_id = $fl140_ca->id;
            $fl140_data->keyss = $key;
            $fl140_data->valuess= $req;
            $fl140_data->save();
        }
        return redirect()->back()->with('success', 'Data Submitted Successfully.');
    }


    public function form14(){
        return view('form14');
    }



    public function form15() {
        return  view('form15');
    }


    public function form15_post(Request $request) {
        $sfs_co_form = new sfs_co_form();
        $sfs_co_form->save();

        foreach($request->all() as $key=>$req){
            if($key == "_token"){
                continue;
            }
            $sfs_co_form_data = new sfs_co_form_data();
            $sfs_co_form_data->sfs_form_id = $sfs_co_form->id;
            $sfs_co_form_data->keyss = $key;
            $sfs_co_form_data->valuess= $req;
            $sfs_co_form_data->save();
        }
        return redirect()->back()->with('success', 'Data Submitted Successfully.');
    }

    public function form16() {
        return  view('form16');
    }
    public function form17() {
        return  view('form17');
    }



}

