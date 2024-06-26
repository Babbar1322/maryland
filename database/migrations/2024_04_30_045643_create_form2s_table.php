<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForm2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('2_md_partially_form_data', function (Blueprint $table) {
            $table->id();

            $table->string("county")->nullable();
            $table->string("court_address")->nullable();
            $table->bigInteger("case_no")->nullable();
            $table->bigInteger("plaintiff")->nullable();
            $table->string("plaintiff_street_address")->nullable();
            $table->string("plaintiff_csz")->nullable();
            $table->string("plaintiff_tel")->nullable();
            $table->string("plaintiff_email")->nullable();
            $table->string("defendant")->nullable();
            $table->string("defendant_street_address")->nullable();
            $table->string("defendant_csz")->nullable();
            $table->string("defendant_tel")->nullable();
            $table->string("defendant_email")->nullable();
            $table->string("statement_name")->nullable();
            $table->string("child1")->nullable();
            $table->bigInteger("age1")->nullable();
            $table->string("child2")->nullable();
            $table->bigInteger("age2")->nullable();
            $table->string("child3")->nullable();
            $table->bigInteger("age3")->nullable();
            $table->string("child4")->nullable();
            $table->bigInteger("age4")->nullable();
            $table->string("child5")->nullable();
            $table->bigInteger("age5")->nullable();
            $table->bigInteger("p_mortgage_self")->nullable();
            $table->bigInteger("p_mortgage_child")->nullable();
            $table->bigInteger("p_mortgage_total")->nullable();
            $table->bigInteger("p_insurance_self")->nullable();
            $table->bigInteger("p_insurance_child")->nullable();
            $table->bigInteger("p_insurance_total")->nullable();
            $table->bigInteger("p_rent_self")->nullable();
            $table->bigInteger("p_rent_child")->nullable();
            $table->bigInteger("p_rent_total")->nullable();
            $table->bigInteger("p_taxes_self")->nullable();
            $table->bigInteger("p_taxes_child")->nullable();
            $table->bigInteger("p_taxes_total")->nullable();
            $table->bigInteger("p_gas_self")->nullable();
            $table->bigInteger("p_gas_child")->nullable();
            $table->bigInteger("p_gas_total")->nullable();
            $table->bigInteger("p_electric_self")->nullable();
            $table->bigInteger("p_electric_child")->nullable();
            $table->bigInteger("p_electric_total")->nullable();
            $table->bigInteger("p_heat_self")->nullable();
            $table->bigInteger("p_heat_child")->nullable();
            $table->bigInteger("p_heat_total")->nullable();
            $table->bigInteger("p_tel_self")->nullable();
            $table->bigInteger("p_tel_child")->nullable();
            $table->bigInteger("p_tel_total")->nullable();
            $table->bigInteger("p_trash_self")->nullable();
            $table->bigInteger("p_trash_child")->nullable();
            $table->bigInteger("p_trash_total")->nullable();
            $table->bigInteger("p_water_self")->nullable();
            $table->bigInteger("p_water_child")->nullable();
            $table->bigInteger("p_water_total")->nullable();
            $table->bigInteger("p_pager_self")->nullable();
            $table->bigInteger("p_pager_child")->nullable();
            $table->bigInteger("p_pager_total")->nullable();
            $table->bigInteger("p_repairs_self")->nullable();
            $table->bigInteger("p_repairs_child")->nullable();
            $table->bigInteger("p_repairs_total")->nullable();
            $table->bigInteger("p_lawn_self")->nullable();
            $table->bigInteger("p_lawn_child")->nullable();
            $table->bigInteger("p_lawn_total")->nullable();
            $table->bigInteger("p_furnishings_self")->nullable();
            $table->bigInteger("p_furnishings_child")->nullable();
            $table->bigInteger("p_furnishings_total")->nullable();
            $table->bigInteger("p_condominium_self")->nullable();
            $table->bigInteger("p_condominium_child")->nullable();
            $table->bigInteger("p_condominium_total")->nullable();
            $table->bigInteger("p_painting_self")->nullable();
            $table->bigInteger("p_painting_child")->nullable();
            $table->bigInteger("p_painting_total")->nullable();
            $table->bigInteger("p_carpt_self")->nullable();
            $table->bigInteger("p_carpt_child")->nullable();
            $table->bigInteger("p_carpt_total")->nullable();
            $table->bigInteger("p_assistance_self")->nullable();
            $table->bigInteger("p_assistance_child")->nullable();
            $table->bigInteger("p_assistance_total")->nullable();
            $table->bigInteger("p_pool_self")->nullable();
            $table->bigInteger("p_pool_child")->nullable();
            $table->bigInteger("p_pool_total")->nullable();
            $table->string("p_others")->nullable();
            $table->bigInteger("p_other_self")->nullable();
            $table->bigInteger("p_other_child")->nullable();
            $table->bigInteger("p_other_total")->nullable();
            $table->bigInteger("p_subtotal_self")->nullable();
            $table->bigInteger("p_subtotal_child")->nullable();
            $table->bigInteger("p_subtotal_total")->nullable();
            $table->bigInteger("s_mortgage_self")->nullable();
            $table->bigInteger("s_mortgage_child")->nullable();
            $table->bigInteger("s_mortgage_total")->nullable();
            $table->bigInteger("s_insurance_self")->nullable();
            $table->bigInteger("s_insurance_child")->nullable();
            $table->bigInteger("s_insurance_total")->nullable();
            $table->bigInteger("s_rent_self")->nullable();
            $table->bigInteger("s_rent_child")->nullable();
            $table->bigInteger("s_rent_total")->nullable();
            $table->bigInteger("s_taxes_self")->nullable();
            $table->bigInteger("s_taxes_child")->nullable();
            $table->bigInteger("s_taxes_total")->nullable();
            $table->bigInteger("s_gas_self")->nullable();
            $table->bigInteger("s_gas_child")->nullable();
            $table->bigInteger("s_gas_total")->nullable();
            $table->bigInteger("s_electric_self")->nullable();
            $table->bigInteger("s_electric_child")->nullable();
            $table->bigInteger("s_electric_total")->nullable();
            $table->bigInteger("s_heat_self")->nullable();
            $table->bigInteger("s_heat_child")->nullable();
            $table->bigInteger("s_heat_total")->nullable();
            $table->bigInteger("s_tel_self")->nullable();
            $table->bigInteger("s_tel_child")->nullable();
            $table->bigInteger("s_tel_total")->nullable();
            $table->bigInteger("s_trash_self")->nullable();
            $table->bigInteger("s_trash_child")->nullable();
            $table->bigInteger("s_trash_total")->nullable();
            $table->bigInteger("s_water_self")->nullable();
            $table->bigInteger("s_water_child")->nullable();
            $table->bigInteger("s_water_total")->nullable();
            $table->bigInteger("s_pager_self")->nullable();
            $table->bigInteger("s_pager_child")->nullable();
            $table->bigInteger("s_pager_total")->nullable();
            $table->bigInteger("s_repairs_self")->nullable();
            $table->bigInteger("s_repairs_child")->nullable();
            $table->bigInteger("s_repairs_total")->nullable();
            $table->bigInteger("s_lawn_self")->nullable();
            $table->bigInteger("s_lawn_child")->nullable();
            $table->bigInteger("s_lawn_total")->nullable();
            $table->bigInteger("s_furnishings_self")->nullable();
            $table->bigInteger("s_furnishings_child")->nullable();
            $table->bigInteger("s_furnishings_total")->nullable();
            $table->bigInteger("s_condominium_self")->nullable();
            $table->bigInteger("s_condominium_child")->nullable();
            $table->bigInteger("s_condominium_total")->nullable();
            $table->bigInteger("s_painting_self")->nullable();
            $table->bigInteger("s_painting_child")->nullable();
            $table->bigInteger("s_painting_total")->nullable();
            $table->bigInteger("s_carpt_self")->nullable();
            $table->bigInteger("s_carpt_child")->nullable();
            $table->bigInteger("s_carpt_total")->nullable();
            $table->bigInteger("s_assistance_self")->nullable();
            $table->bigInteger("s_assistance_child")->nullable();
            $table->bigInteger("s_assistance_total")->nullable();
            $table->bigInteger("s_pool_self")->nullable();
            $table->bigInteger("s_pool_child")->nullable();
            $table->bigInteger("s_pool_total")->nullable();
            $table->string("s_others")->nullable();
            $table->bigInteger("s_other_self")->nullable();
            $table->bigInteger("s_other_child")->nullable();
            $table->bigInteger("s_other_total")->nullable();
            $table->bigInteger("s_subtotal_self")->nullable();
            $table->bigInteger("s_subtotal_child")->nullable();
            $table->bigInteger("s_subtotal_total")->nullable();
            $table->bigInteger("c_food_self")->nullable();
            $table->bigInteger("c_food_child")->nullable();
            $table->bigInteger("c_food_total")->nullable();
            $table->bigInteger("c_dsi_self")->nullable();
            $table->bigInteger("c_dsi_child")->nullable();
            $table->bigInteger("c_dsi_total")->nullable();
            $table->bigInteger("c_hs_self")->nullable();
            $table->bigInteger("c_hs_child")->nullable();
            $table->bigInteger("c_hs_total")->nullable();
            $table->string("c_others")->nullable();
            $table->bigInteger("c_other_self")->nullable();
            $table->bigInteger("c_other_child")->nullable();
            $table->bigInteger("c_other_total")->nullable();
            $table->bigInteger("c_subtotal_self")->nullable();
            $table->bigInteger("c_subtotal_child")->nullable();
            $table->bigInteger("c_subtotal_total")->nullable();
            $table->bigInteger("d_hi_self")->nullable();
            $table->bigInteger("d_hi_child")->nullable();
            $table->bigInteger("d_hi_total")->nullable();
            $table->bigInteger("d_tc_self")->nullable();
            $table->bigInteger("d_tc_child")->nullable();
            $table->bigInteger("d_tc_total")->nullable();
            $table->bigInteger("d_em_self")->nullable();
            $table->bigInteger("d_em_child")->nullable();
            $table->bigInteger("d_em_total")->nullable();
            $table->bigInteger("d_do_self")->nullable();
            $table->bigInteger("d_do_child")->nullable();
            $table->bigInteger("d_do_total")->nullable();
            $table->bigInteger("d_og_self")->nullable();
            $table->bigInteger("d_og_child")->nullable();
            $table->bigInteger("d_og_total")->nullable();
            $table->string("d_others")->nullable();
            $table->bigInteger("d_other_self")->nullable();
            $table->bigInteger("d_other_child")->nullable();
            $table->bigInteger("d_other_total")->nullable();
            $table->bigInteger("d_subtotal_self")->nullable();
            $table->bigInteger("d_subtotal_child")->nullable();
            $table->bigInteger("d_subtotal_total")->nullable();
            $table->bigInteger("e_tb_self")->nullable();
            $table->bigInteger("e_tb_child")->nullable();
            $table->bigInteger("e_tb_total")->nullable();
            $table->bigInteger("e_sl_self")->nullable();
            $table->bigInteger("e_sl_child")->nullable();
            $table->bigInteger("e_sl_total")->nullable();
            $table->bigInteger("e_ea_self")->nullable();
            $table->bigInteger("e_ea_child")->nullable();
            $table->bigInteger("e_ea_total")->nullable();
            $table->bigInteger("e_cu_self")->nullable();
            $table->bigInteger("e_cu_child")->nullable();
            $table->bigInteger("e_cu_total")->nullable();
            $table->bigInteger("e_rb_self")->nullable();
            $table->bigInteger("e_rb_child")->nullable();
            $table->bigInteger("e_rb_total")->nullable();
            $table->bigInteger("e_dn_self")->nullable();
            $table->bigInteger("e_dn_child")->nullable();
            $table->bigInteger("e_dn_total")->nullable();
            $table->string("e_others")->nullable();
            $table->bigInteger("e_other_self")->nullable();
            $table->bigInteger("e_other_child")->nullable();
            $table->bigInteger("e_other_total")->nullable();
            $table->bigInteger("e_subtotal_self")->nullable();
            $table->bigInteger("e_subtotal_child")->nullable();
            $table->bigInteger("e_subtotal_total")->nullable();
            $table->bigInteger("f_vac_self")->nullable();
            $table->bigInteger("f_vac_child")->nullable();
            $table->bigInteger("f_vac_total")->nullable();
            $table->bigInteger("f_vt_self")->nullable();
            $table->bigInteger("f_vt_child")->nullable();
            $table->bigInteger("f_vt_total")->nullable();
            $table->bigInteger("f_do_self")->nullable();
            $table->bigInteger("f_do_child")->nullable();
            $table->bigInteger("f_do_total")->nullable();
            $table->bigInteger("f_ci_self")->nullable();
            $table->bigInteger("f_ci_child")->nullable();
            $table->bigInteger("f_ci_total")->nullable();
            $table->bigInteger("f_allow_self")->nullable();
            $table->bigInteger("f_allow_child")->nullable();
            $table->bigInteger("f_allow_total")->nullable();
            $table->bigInteger("f_camp_self")->nullable();
            $table->bigInteger("f_camp_child")->nullable();
            $table->bigInteger("f_camp_total")->nullable();
            $table->bigInteger("f_ms_self")->nullable();
            $table->bigInteger("f_ms_child")->nullable();
            $table->bigInteger("f_ms_total")->nullable();
            $table->bigInteger("f_dm_self")->nullable();
            $table->bigInteger("f_dm_child")->nullable();
            $table->bigInteger("f_dm_total")->nullable();
            $table->bigInteger("f_hr_self")->nullable();
            $table->bigInteger("f_hr_child")->nullable();
            $table->bigInteger("f_hr_total")->nullable();
            $table->string("f_others")->nullable();
            $table->bigInteger("f_other_self")->nullable();
            $table->bigInteger("f_other_child")->nullable();
            $table->bigInteger("f_other_total")->nullable();
            $table->bigInteger("f_subtotal_self")->nullable();
            $table->bigInteger("f_subtotal_child")->nullable();
            $table->bigInteger("f_subtotal_total")->nullable();
            $table->bigInteger("g_ap_self")->nullable();
            $table->bigInteger("g_ap_child")->nullable();
            $table->bigInteger("g_ap_total")->nullable();
            $table->bigInteger("g_ar_self")->nullable();
            $table->bigInteger("g_ar_child")->nullable();
            $table->bigInteger("g_ar_total")->nullable();
            $table->bigInteger("g_mtt_self")->nullable();
            $table->bigInteger("g_mtt_child")->nullable();
            $table->bigInteger("g_mtt_total")->nullable();
            $table->bigInteger("g_og_self")->nullable();
            $table->bigInteger("g_og_child")->nullable();
            $table->bigInteger("g_og_total")->nullable();
            $table->bigInteger("g_ai_self")->nullable();
            $table->bigInteger("g_ai_child")->nullable();
            $table->bigInteger("g_ai_total")->nullable();
            $table->bigInteger("g_pf_self")->nullable();
            $table->bigInteger("g_pf_child")->nullable();
            $table->bigInteger("g_pf_total")->nullable();
            $table->bigInteger("g_bt_self")->nullable();
            $table->bigInteger("g_bt_child")->nullable();
            $table->bigInteger("g_bt_total")->nullable();
            $table->bigInteger("g_other_self")->nullable();
            $table->string("g_others")->nullable();
            $table->bigInteger("g_other_child")->nullable();
            $table->bigInteger("g_other_total")->nullable();
            $table->bigInteger("g_subtotal_self")->nullable();
            $table->bigInteger("g_subtotal_child")->nullable();
            $table->bigInteger("g_subtotal_total")->nullable();
            $table->bigInteger("h_hg_self")->nullable();
            $table->bigInteger("h_hg_child")->nullable();
            $table->bigInteger("h_hg_total")->nullable();
            $table->bigInteger("h_bdy_self")->nullable();
            $table->bigInteger("h_bdy_child")->nullable();
            $table->bigInteger("h_bdy_total")->nullable();
            $table->bigInteger("h_gto_self")->nullable();
            $table->bigInteger("h_gto_child")->nullable();
            $table->bigInteger("h_gto_total")->nullable();
            $table->bigInteger("h_char_self")->nullable();
            $table->bigInteger("h_char_child")->nullable();
            $table->bigInteger("h_char_total")->nullable();
            $table->bigInteger("h_others")->nullable();
            $table->bigInteger("h_other_self")->nullable();
            $table->bigInteger("h_other_child")->nullable();
            $table->bigInteger("h_other_total")->nullable();
            $table->bigInteger("h_subtotal_self")->nullable();
            $table->bigInteger("h_subtotal_child")->nullable();
            $table->bigInteger("h_subtotal_total")->nullable();
            $table->bigInteger("i_pur_self")->nullable();
            $table->bigInteger("i_pur_child")->nullable();
            $table->bigInteger("i_pur_total")->nullable();
            $table->bigInteger("i_lau_self")->nullable();
            $table->bigInteger("i_lau_child")->nullable();
            $table->bigInteger("i_lau_total")->nullable();
            // $table->bigInteger("i_ea_self")->nullable();
            // $table->bigInteger("i_ea_child")->nullable();
            // $table->bigInteger("i_ea_total")->nullable();
            $table->bigInteger("i_ad_self")->nullable();
            $table->bigInteger("i_ad_child")->nullable();
            $table->bigInteger("i_ad_total")->nullable();
            $table->string("i_others")->nullable();
            $table->bigInteger("i_other_self")->nullable();
            $table->bigInteger("i_other_child")->nullable();
            $table->bigInteger("i_other_total")->nullable();
            $table->bigInteger("i_subtotal_self")->nullable();
            $table->bigInteger("i_subtotal_child")->nullable();
            $table->bigInteger("i_subtotal_total")->nullable();
            $table->bigInteger("j_bn_self")->nullable();
            $table->bigInteger("j_bn_child")->nullable();
            $table->bigInteger("j_bn_total")->nullable();
            $table->bigInteger("j_np_self")->nullable();
            $table->bigInteger("j_np_child")->nullable();
            $table->bigInteger("j_np_total")->nullable();
            $table->bigInteger("j_ss_self")->nullable();
            $table->bigInteger("j_ss_child")->nullable();
            $table->bigInteger("j_ss_total")->nullable();
            $table->bigInteger("j_be_self")->nullable();
            $table->bigInteger("j_be_child")->nullable();
            $table->bigInteger("j_be_total")->nullable();
            $table->string("j_others")->nullable();
            $table->bigInteger("j_other_self")->nullable();
            $table->bigInteger("j_other_child")->nullable();
            $table->bigInteger("j_other_total")->nullable();
            $table->bigInteger("j_subtotal_self")->nullable();
            $table->bigInteger("j_subtotal_child")->nullable();
            $table->bigInteger("j_subtotal_total")->nullable();
            $table->bigInteger("k_ac_self")->nullable();
            $table->bigInteger("k_ac_child")->nullable();
            $table->bigInteger("k_ac_total")->nullable();
            $table->bigInteger("k_rc_self")->nullable();
            $table->bigInteger("k_rc_child")->nullable();
            $table->bigInteger("k_rc_total")->nullable();
            $table->bigInteger("k_hh_self")->nullable();
            $table->bigInteger("k_hh_child")->nullable();
            $table->bigInteger("k_hh_total")->nullable();
            $table->bigInteger("k_mp_self")->nullable();
            $table->bigInteger("k_mp_child")->nullable();
            $table->bigInteger("k_mp_total")->nullable();
            $table->bigInteger("k_pb_self")->nullable();
            $table->bigInteger("k_pb_child")->nullable();
            $table->bigInteger("k_pb_total")->nullable();
            $table->bigInteger("k_li_self")->nullable();
            $table->bigInteger("k_li_child")->nullable();
            $table->bigInteger("k_li_total")->nullable();
            $table->string("k_others")->nullable();
            $table->bigInteger("k_other_self")->nullable();
            $table->bigInteger("k_other_child")->nullable();
            $table->bigInteger("k_other_total")->nullable();
            $table->bigInteger("k_subtotal_self")->nullable();
            $table->bigInteger("k_subtotal_child")->nullable();
            $table->bigInteger("k_subtotal_total")->nullable();
            $table->bigInteger("tme_self")->nullable();
            $table->bigInteger("tme_child")->nullable();
            $table->bigInteger("tme_total")->nullable();
            $table->bigInteger("ss")->nullable();
            $table->bigInteger("gmw")->nullable();
            $table->bigInteger("federal")->nullable();
            $table->bigInteger("state")->nullable();
            $table->bigInteger("medicare")->nullable();
            $table->bigInteger("fica")->nullable();
            $table->bigInteger("retirement")->nullable();
            $table->bigInteger("niw")->nullable();
            $table->string("da1")->nullable();
            $table->bigInteger("da2")->nullable();
            $table->string("db1")->nullable();
            $table->bigInteger("db2")->nullable();
            $table->string("dc1")->nullable();
            $table->bigInteger("dc2")->nullable();
            $table->string("gda1")->nullable();
            $table->bigInteger("gda2")->nullable();
            $table->string("gdb1")->nullable();
            $table->bigInteger("gdb2")->nullable();
            $table->string("gdc1")->nullable();
            $table->bigInteger("gdc2")->nullable();
         $table->bigInteger("tdoi")->nullable();
            $table->bigInteger("noi")->nullable();
            $table->bigInteger("tmi")->nullable();
            $table->bigInteger("as_real_estate")->nullable();
            $table->bigInteger("as_furt")->nullable();
            $table->bigInteger("as_bs")->nullable();
            $table->bigInteger("as_usb")->nullable();
            $table->bigInteger("as_si")->nullable();
            $table->bigInteger("as_pp")->nullable();
            $table->bigInteger("as_jew")->nullable();
            $table->bigInteger("as_am")->nullable();
            $table->bigInteger("as_boats")->nullable();
            $table->string("as_others")->nullable();
            $table->string("as_other")->nullable();
            $table->bigInteger("as_te")->nullable();


            $table->bigInteger("mortgage")->nullable();
            $table->bigInteger("lb_am")->nullable();
            $table->bigInteger("lb_np")->nullable();
            $table->bigInteger("lb_bl")->nullable();
            $table->bigInteger("lb_at")->nullable();
            $table->bigInteger("lb_bcca")->nullable();
            $table->bigInteger("lb_other")->nullable();
            $table->bigInteger("lb_tnw")->nullable();
            $table->bigInteger("lb_ti")->nullable();
            $table->bigInteger("lb_te")->nullable();
            $table->bigInteger("eod")->nullable();
            $table->string("date")->nullable();
            $table->string("sign")->nullable();
            $table->string("pr_name")->nullable();
            $table->string("address")->nullable();
            $table->string("csz")->nullable();
            $table->string("phn")->nullable();
            $table->string("email")->nullable();
            $table->string("fax")->nullable();
            $table->string("ogi")->nullable();
            $table->string("lb_others")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('2_md_partially_form_data');
    }
}
