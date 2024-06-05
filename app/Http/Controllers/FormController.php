<?php

namespace App\Http\Controllers;

use App\Models\cc320_form;
use App\Models\cc320_form_data;
use App\Models\ct_long_form;
use App\Models\ct_long_form_data;
use App\Models\fam108_current_form;
use App\Models\fam108_current_form_data;
use App\Models\financial_declaration_form;
use App\Models\financial_declaration_form_data;
use App\Models\financial_disclosure_form;
use App\Models\financial_disclosure_form_data;
use App\Models\fl140_ca_form;
use App\Models\fl140_ca_form_data;
use App\Models\fl142_ca_form;
use App\Models\fl142_ca_form_data;
use App\Models\fl150_ca_form;
use App\Models\fl150_ca_form_data;
use App\Models\fl160_ca_form;
use App\Models\fl160_ca_form_data;
use App\Models\fl161_ca_form;
use App\Models\fl161_ca_form_data;
use App\Models\fl_long_form;
use App\Models\fl_long_form_data;
use App\Models\fl_short_form;
use App\Models\fl_short_form_data;
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
use App\Models\spanish_form;
use App\Models\spanish_form_data;
use Illuminate\Http\Request;

class FormController extends Controller
{

    public function index()
    {
        //

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

    public function form1() {
        // MD.pdf

        return view('form1');
       }



        public function form1_post(Request $request) {

            judicial::create($request->all());

            return redirect()->back()->with('success', 'Data Submitted Successfully.');
        }

    public function form2() {
        // MD partially filled out to check formulas.pdf
        return view('form2');
    }


    public function form2_post(Request $request) {

        form2::create($request->all());
        return  redirect()->back()->with('success', 'Data Submitted Successfully.');
    }

    public function form3() {
        // domestic-relations-financial-affidavit_type-in-form GA.pdf
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
        // rev-488 PA.pdf
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
        // 10482_fam_cis NJ.pdf
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
        // fm006-short  CT.pdf
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
        // fm006-short  CT.pdf
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
        // CT Long.pdf
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
        // fl140  CA.pdf

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
        // fl161 CA.pdf
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
        // fl160  CA.pdf
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
        // FAM108_Current.pdf
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

        // fl142  CA.pdf
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
        // fl150  CA.pdf
        return view('form14');
    }

    public function form14_post(Request $request) {

        $fl150_ca = new fl150_ca_form();
        $fl150_ca->save();

        foreach($request->all() as $key=>$req){
            if($key == "_token"){
                continue;
            }
            $fl150_data = new fl150_ca_form_data();
            $fl150_data->fl150_form_id = $fl150_ca->id;
            $fl150_data->keyss = $key;
            $fl150_data->valuess= $req;
            $fl150_data->save();
        }
        return redirect()->back()->with('success', 'Data Submitted Successfully.');
    }

    public function form15() {
        // Sworn-Financial-Statement  CO.pdf
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

        // 902c10-21  FL long form.pdf
        return  view('form16');
    }



    public function form16_post(Request $request){
        $fl_long = new fl_long_form();
        $fl_long->save();

        foreach($request->all() as $key=>$req){
            if($key == "_token"){
                continue;
            }
            $fl_long_data = new fl_long_form_data();
            $fl_long_data->fl_long_id = $fl_long->id;
            $fl_long_data->keyss = $key;
            $fl_long_data->valuess= $req;
            $fl_long_data->save();
        }
        return redirect()->back()->with('success', 'Data Submitted Successfully.');
    }
    public function form17() {
        // 902b 11-20   FL short form.pdf
        return  view('form17');
    }


    public function form17_post(Request $request){
        $fl_short = new fl_short_form();
        $fl_short->save();

        foreach($request->all() as $key=>$req){
            if($key == "_token"){
                continue;
            }
            $fl_short_data = new fl_short_form_data();
            $fl_short_data->fl_short_id = $fl_short->id;
            $fl_short_data->keyss = $key;
            $fl_short_data->valuess= $req;
            $fl_short_data->save();
        }
        return redirect()->back()->with('success', 'Data Submitted Successfully.');
    }

    public function form18() {
        // FL Long Form Spanish.pdf
        return  view('form18');
    }
    public function form18_post(Request $request){
        $spanish = new spanish_form();
        $spanish->save();

        foreach($request->all() as $key=>$req){
            if($key == "_token"){
                continue;
            }
            $spanish_form = new spanish_form_data();
            $spanish_form->spanish_id = $spanish->id;
            $spanish_form->keyss = $key;
            $spanish_form->valuess= $req;
            $spanish_form->save();
        }
        return redirect()->back()->with('success', 'Data Submitted Successfully.');
    }


    public function form19() {

        // financial-disclosure-form-pdf-fillable.pdf
        return view('form19');
    }



    public function form19_post(Request $request){
        $financial_disclosure = new financial_disclosure_form();
        $financial_disclosure->save();

        foreach($request->all() as $key=>$req){
            if($key == "_token"){
                continue;
            }
            $financial_disclosure_form = new financial_disclosure_form_data();
            $financial_disclosure_form->financial_disclosure_id = $financial_disclosure->id;
            $financial_disclosure_form->keyss = $key;
            $financial_disclosure_form->valuess= $req;
            $financial_disclosure_form->save();
        }
        return redirect()->back()->with('success', 'Data Submitted Successfully.');
    }


    public function form20() {
        // 1352FA_Financial_Declaration.pdf
        return view('form20');
    }

    public function form20_post(Request $request) {


        $financial_disclosure = new financial_declaration_form();
        $financial_disclosure->save();

        foreach($request->all() as $key=>$req){
            if($key == "_token"){
                continue;
            }
            $financial_form = new financial_declaration_form_data();
            $financial_form->financial_id = $financial_disclosure->id;
            $financial_form->keyss = $key;
            $financial_form->valuess= $req;
            $financial_form->save();
        }
        return redirect()->back()->with('success', 'Data Submitted Successfully.');

    }
}
