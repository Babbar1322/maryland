<?php

namespace App\Http\Controllers;

use App\Models\cc320_form;
use App\Models\cc320_form_data;
use App\Models\ct_long_form;
use App\Models\ct_long_form_data;
use App\Models\ct_short_form;
use App\Models\ct_short_form_data;
use App\Models\fa_4139_form;
use App\Models\fa_4139_form_data;
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
use App\Models\me_financial_form;
use App\Models\me_financial_form_data;
use App\Models\nj_form;
use App\Models\nj_form_data;
use App\Models\judicial;
use App\Models\ky_disclosure_statement_form;
use App\Models\ky_disclosure_statement_form_data;
use App\Models\md_form;
use App\Models\md_form_data;
use App\Models\md_partially_form;
use App\Models\md_partially_form_data;
use App\Models\pa_form;
use App\Models\sfs_co_form;
use App\Models\sfs_co_form_data;
use App\Models\spanish_form;
use App\Models\spanish_form_data;
use App\Models\wi_spanish_form;
use App\Models\wi_spanish_form_data;
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

                  // MD.pdf

            // judicial::create($request->all());

            $md_form = new md_form();
            $md_form->save();

            foreach($request->all() as $key=>$req){
                if($key == "_token"){
                    continue;
                }
                $md_form_data = new md_form_data();
                $md_form_data->md_form_id = $md_form->id;
                $md_form_data->keyss = $key;
                $md_form_data->valuess= $req;
                $md_form_data->save();
            }

            return redirect()->back()->with('success', 'Data Submitted Successfully.');
        }

    public function form2() {
        // MD partially filled out to check formulas.pdf
        return view('form2');
    }


    public function form2_post(Request $request) {

            // MD partially filled out to check formulas.pdf

        $md_partially = new md_partially_form();
        $md_partially->save();

        foreach($request->all() as $key=>$req){
            if($key == "_token"){
                continue;
            }
            $md_partially_data = new md_partially_form_data();
            $md_partially_data->ky_disclosure_statement_id = $md_partially->id;
            $md_partially_data->keyss = $key;
            $md_partially_data->valuess= $req;
            $md_partially_data->save();
        }
        return  redirect()->back()->with('success', 'Data Submitted Successfully.');
    }

    public function form3() {
        // domestic-relations-financial-affidavit_type-in-form GA.pdf
        return view('form3');
    }

    public function form3_post(Request $request){

        // domestic-relations-financial-affidavit_type-in-form GA.pdf


        $domestic_relations = new ga_form();
        $domestic_relations->save();

        foreach($request->all() as $key=>$req){
            if($key == "_token"){
                continue;
            }
            $domestic_relations_data = new form3();
            $domestic_relations_data->ga_form_id = $domestic_relations->id;
            $domestic_relations_data->keyss = $key;
            $domestic_relations_data->valuess= $req;
            $domestic_relations_data->save();
        }

        return  redirect()->back()->with('success', 'Data Submitted Successfully.');
    }

    public function form4() {
        // rev-488 PA.pdf
        return view('form4');
    }

    public function form4_post(Request $request) {

        // rev-488 PA.pdf


        $rev_pa = new pa_form();
        $rev_pa->save();

        foreach($request->all() as $key=>$req){
            if($key == "_token"){
                continue;
            }
            $rev_pa_data = new form4();
            $rev_pa_data->pa_form_id = $rev_pa->id;
            $rev_pa_data->keyss = $key;
            $rev_pa_data->valuess= $req;
            $rev_pa_data->save();
        }
        return  redirect()->back()->with('success', 'Data Submitted Successfully.');
    }



    public function form5(){
        // 10482_fam_cis NJ.pdf
        return view('form5');
    }


    public function form5_post(Request $request) {

        // 10482_fam_cis NJ.pdf


        $fam_cis_nj = new nj_form();
        $fam_cis_nj->save();

        foreach($request->all() as $key=>$req){
            if($key == "_token"){
                continue;
            }
            $fam_cis_nj_data = new nj_form_data();
            $fam_cis_nj_data->nj_form_id = $fam_cis_nj->id;
            $fam_cis_nj_data->keyss = $key;
            $fam_cis_nj_data->valuess= $req;
            $fam_cis_nj_data->save();
        }
        return redirect()->back()->with('success', 'Data Submitted Successfully.');
    }


    public function form6(){

        // cc320.pdf
        return view('form6');
    }

    public function form6_post(Request $request){
          // fm006-short  CT.pdf
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

          // fm006-short  CT.pdf


        $ct_short = new ct_short_form();
        $ct_short->save();

        foreach($request->all() as $key=>$req){
            if($key == "_token"){
                continue;
            }
            $ct_short_data = new ct_short_form_data();
            $ct_short_data->ct_form_id = $ct_short->id;
            $ct_short_data->keyss = $key;
            $ct_short_data->valuess= $req;
            $ct_short_data->save();
        }
        return redirect()->back()->with('success', 'Data Submitted Successfully.');
    }


    public function form8(){
        // CT Long.pdf
        return view('form8');
    }



    public function form8_post(Request $request) {

        // CT Long.pdf


        $ct_long = new ct_long_form();
        $ct_long->save();

        foreach($request->all() as $key=>$req){
            if($key == "_token"){
                continue;
            }
            $ct_long_data = new ct_long_form_data();
            $ct_long_data->cslong_form_id = $ct_long->id;
            $ct_long_data->keyss = $key;
            $ct_long_data->valuess= $req;
            $ct_long_data->save();
        }
        return redirect()->back()->with('success', 'Data Submitted Successfully.');
    }



    public function form9() {
        // fl140  CA.pdf

        return view('form9');
    }

    public function form9_post(Request $request) {

         // fl140  CA.pdf


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
        // fl161 CA.pdf


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

        // fl160  CA.pdf


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

        // FAM108_Current.pdf

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

        // fl142  CA.pdf

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
    // fl150  CA.pdf
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

        // Sworn-Financial-Statement  CO.pdf


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

          // 902c10-21  FL long form.pdf

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
        // 902b 11-20 FL short form.pdf
        return  view('form17');
    }


    public function form17_post(Request $request){
           // 902b 11-20 FL short form.pdf
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

                // FL Long Form Spanish.pdf

        $spanish = new spanish_form();
        $spanish->save();

        foreach($request->all() as $key=>$req){
            if($key == "_token"){
                continue;
            }
            $spanish_data = new spanish_form_data();
            $spanish_data->spanish_id = $spanish->id;
            $spanish_data->keyss = $key;
            $spanish_data->valuess= $req;
            $spanish_data->save();
        }
        return redirect()->back()->with('success', 'Data Submitted Successfully.');
    }


    public function form19() {

        // financial-disclosure-form-pdf-fillable.pdf
        return view('form19');
    }



    public function form19_post(Request $request){

                // financial-disclosure-form-pdf-fillable.pdf

        $financial_disclosure = new financial_disclosure_form();
        $financial_disclosure->save();

        foreach($request->all() as $key=>$req){
            if($key == "_token"){
                continue;
            }
            $financial_disclosure_data = new financial_disclosure_form_data();
            $financial_disclosure_data->financial_disclosure_id = $financial_disclosure->id;
            $financial_disclosure_data->keyss = $key;
            $financial_disclosure_data->valuess= $req;
            $financial_disclosure_data->save();
        }
        return redirect()->back()->with('success', 'Data Submitted Successfully.');
    }


    public function form20() {
        // 1352FA_Financial_Declaration.pdf
        return view('form20');
    }

    public function form20_post(Request $request) {
        // 1352FA_Financial_Declaration.pdf


        $financial_declaration = new financial_declaration_form();
        $financial_declaration->save();

        foreach($request->all() as $key=>$req){
            if($key == "_token"){
                continue;
            }
            $financial_declaration_data = new financial_declaration_form_data();
            $financial_declaration_data->financial_id = $financial_declaration->id;
            $financial_declaration_data->keyss = $key;
            $financial_declaration_data->valuess= $req;
            $financial_declaration_data->save();
        }
        return redirect()->back()->with('success', 'Data Submitted Successfully.');

    }


    public function form21() {
        // WI FA-4139V.pdf
        return view('form21');
    }


    public function form21_post(Request $request) {

       // WI FA-4139V.pdf
        $fa_4139 = new fa_4139_form();
        $fa_4139->save();

        foreach($request->all() as $key=>$req){
            if($key == "_token"){
                continue;
            }
            $fa_4139_data = new fa_4139_form_data();
            $fa_4139_data->fa_4139_id = $fa_4139->id;
            $fa_4139_data->keyss = $key;
            $fa_4139_data->valuess= $req;
            $fa_4139_data->save();
        }
        return redirect()->back()->with('success', 'Data Submitted Successfully.');
    }


    public function form22() {
        // WI SPANISH FA-4139V_es.pdf
        return view('form22');
    }


    public function form22_post(Request $request) {
        // WI SPANISH FA-4139V_es.pdf

        $wi_spanish_form = new wi_spanish_form();
        $wi_spanish_form->save();

        foreach($request->all() as $key=>$req){
            if($key == "_token"){
                continue;
            }
            $wi_spanish_form_data = new wi_spanish_form_data();
            $wi_spanish_form_data->fa_spanish_id = $wi_spanish_form->id;
            $wi_spanish_form_data->keyss = $key;
            $wi_spanish_form_data->valuess= $req;
            $wi_spanish_form_data->save();
        }
        return redirect()->back()->with('success', 'Data Submitted Successfully.');
    }

    public function form23() {

        // KY Disclosure statement 238-239.pdf
        return view('form23');
    }
    public function form23_post(Request $request) {

        // KY Disclosure statement 238-239.pdf

        $ky_disclosure_statement = new ky_disclosure_statement_form();
        $ky_disclosure_statement->save();
        foreach($request->all() as $key=>$req){
            if($key == "_token"){
                continue;
            }
            $ky_disclosure_statement_data = new ky_disclosure_statement_form_data();
            $ky_disclosure_statement_data->ky_disclosure_statement_id = $ky_disclosure_statement->id;
            $ky_disclosure_statement_data->keyss = $key;
            $ky_disclosure_statement_data->valuess= $req;
            $ky_disclosure_statement_data->save();
        }
        return redirect()->back()->with('success', 'Data Submitted Successfully.');
    }


    public function form24() {
        // ME financial statement MJB-Form-fm-043 .pdf
        return view('form24');
    }

    public function form24_post(Request $request) {
        // ME financial statement MJB-Form-fm-043 .pdf
        $me_financial = new me_financial_form();
        $me_financial->save();

        foreach($request->all() as $key=>$req) {
            if($key == "_token") {
                continue;
            }
            $me_financial_data = new me_financial_form_data();
            $me_financial_data->me_financial_id = $me_financial->id;
            $me_financial_data->keyss = $key;
            $me_financial_data->valuess = $req;
            $me_financial_data->save();
        }

        return redirect()->back()->with('success', 'Data Submitted Successfully');
    }


    public function form25() {
        return view('form25');
    }

}
