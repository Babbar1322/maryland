<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/bootstrap.js') }}" defer></script>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />

    <style>
        a{
            color: black !important;
        }
        td {
            padding: 0px !important;
            padding-left: 5px !important;
            background-color: transparent important;
        }

        input:focus {
            border: none !important;
            /* border-bottom: 1px solid black !important; */
            box-shadow: none !important;
        }

        input,
        table {
            background-color: transparent !important;
        }

        input[type='radio'] {
            accent-color: black !important;
        }

        body {
            font-family: "unset";
        }

        .form-control:focus-visible {
            /* border-bottom: 1px solid black !important; */

            box-shadow: none !important;
        }

        .form-control {
            border-radius: 0 !important;
            padding: 0px !important;

        }

        .table input:focus {
            border: none !important;

            box-shadow: none !important;
        }

        .border-bottom {
            border-bottom: 1px solid black !important;
        }

        .border_bottom {
            border-bottom: 2px solid black !important;

        }

        .table> :not(caption)>*>* {
            background-color: white;
        }

        .section_area {
            background-color: white !important;
            margin: 10px !important;
            /* margin-top: 29px !important; */

        }

        .top:focus {
            border-bottom: none !important;
        }

        input:focus-visible {
            outline: none !important;
            /* border-bottom: 2px solid black !important; */
        }

        .footer_field:focus-visible {
            outline: none !important;
            border-bottom: 2px solid black !important;
        }

        .children_table {
            min-width: 30rem !important;
        }

        .top_text {
            width: 50% !important;
            font-size: 21px;
        }

        .footer_padding {
            padding-top: 400px !important;
        }

        @media screen and (min-width : 1600px) {

            .top_select_box {
                width: 75% !important;
            }

            .case_input_top {
                min-width: 490px !important;
            }
        }

        @media screen and (min-width : 700px) {
            .top_select_box {
                width: 58.33%;
            }

            .case_input_top {
                min-width: 275px;
            }
        }

        @media screen and (max-width : 768px) {


            .small_text {
                height: auto !important;
            }

            .top_flex_text {
                display: block !important;
            }

            .footer_padding {
                padding-top: 50px !important;
            }

            .d_sm_block {
                display: block !important;

            }


            .responsive_input {
                max-width: 100% !important;
                overflow: hidden;
            }

            .expires_row {
                padding-right: 1.5rem !important;
                padding-left: 1.5rem !important;
            }

            .bottom_day {
                width: 90px !important;
            }

            .top_flex_text {
                display: block !important;
            }

            .flex_input {
                width: 100% !important;
                margin-bottom: 10px !important;
            }

            .age_input_top {
                width: 100% !important;
            }

            /* .section_area {
            background-color: white !important;
             margin-top: 15px !important;
        } */
            .top_select_box {
                width: 58.33333%;
            }

            .case_input_top {
                min-width: 275px !important;
            }

            .top_text_width {
                min-width: 100% !important;
            }

            .children_table {
                min-width: 0 !important;
            }

            .section_area {
                padding-left: 10px !important;
                padding-right: 10px !important;


            }

            .top_text {
                width: 100% !important;
                font-size: 17px;
            }

            .container-fluid {
                padding-right: 0px !important;
                padding-left: 0px !important;
            }
        }

        .bg_color {
            background-color: #8c8a8a;
        }

        .font_bold {
            font-weight: bolder !important;
        }

        .bg-secondary {
            --bs-bg-opacity: 1;
            background-color: rgb(184 188 192) !important;
        }

        body {
            font-size: 18px !important;
        }

        .small_text {
            font-size: 14px;
        }

        .pb-500 {
            padding-bottom: 500px;
        }

        .tdata input:focus,
        .tdata textarea:focus {
            border-bottom: none !important;
        }

        td[rowspan] {
            vertical-align: top;
        }

        .table_input:hover {
            background-color: #e4eaf9 !important;
        }
    </style>
</head>

<body>
    <div class="container-fluid py-1 py-lg-3">
        <div class="container bg_color p-lg-3 p-1">
            <form action="{{ route('form15.submit') }}" method="post">
                @csrf

                {{-- section_first --}}
                <section class="section_area" id="section_first">
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show">{{ session('success') }} <button
                                type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <div class="row  px-lg-5 px-2   pt-2">
                        <div class="small_text text-end fw-bold">FL-150</div>
                        <div class="col-lg-8 border border-dark">
                            <div class="row">
                                <div class="col pt-2">
                                    <h6 class="d-flex  ">
                                        <div class="d-flex ps-2">
                                            <div> <input type="checkbox" name="district_court"
                                                    class="border-0 table_input "></div>
                                            <div class="small_text ps-2">District Court</div>
                                        </div>
                                        <div class="d-flex ps-2  ">
                                            <div> <input type="checkbox" name="denver_court"
                                                    class="border-0 table_input "></div>
                                            <div class="small_text ps-2">Denver Juvenile Court</div>
                                        </div>
                                    </h6>
                                </div>

                            </div>
                            <div class="p-2 border-bottom border-dark">
                                <div class="">
                                    <div class="d-flex">
                                        <div class="w-50"> <input type="text" name="county_colorado"
                                                class="border-0   border-bottom footer_field w-100"></div>
                                        <div class="small_text">County, Colorado</div>
                                    </div>
                                </div>

                                <div class="">
                                    <div class="d-flex">
                                        <div class="small_text">Court Address:</div>
                                        <div> <input type="text" name="court_address" class="border-0 table_input ">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="p-2 border-bottom border-dark">
                                <div class="">
                                    <div class="d-flex">
                                        <div class="small_text ">In re:</div>
                                        {{-- <div> <input type="text" name="county_of" class="border-0 table_input "></div> --}}
                                    </div>
                                </div>
                                <div class="">
                                    <div class="d-flex d_sm_block">
                                        <div class="small_text"> <input type="checkbox" class="" name="marriage">
                                            The Marriage of:
                                        </div>
                                        <div class="w-75"> <input type="text" name="marriage_value"
                                                class="border-0 table_input w-100"></div>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="d-flex d_sm_block">
                                        <div class="small_text"> <input name="parental" type="checkbox" class="">
                                            Parental
                                            Responsibilities concerning:</div>
                                        <div class="w-50"> <input type="text" name="parental_value"
                                                class="border-0 table_input w-100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="p-2  ">
                                <div class="">
                                    <div class="d-flex d_sm_block">
                                        <div class="small_text">Petitioner:</div>
                                        <div class="w-75"> <input type="text" name="petitioner"
                                                class="border-0 table_input w-100"></div>
                                    </div>
                                </div>
                                <div class="pb-2">
                                    <div class="d-flex ">
                                        <div class="small_text">and</div>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="d-flex d_sm_block w-100">
                                        <div class="small_text">Co-Petitioner/Respondent:</div>
                                        <div class="w-75"> <input type="text" name="co_petitioner"
                                                class="border-0 table_input w-100"></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-4 border border-dark">
                            <div class="text-center fw-bold pt-3">FOR COURT USE ONLY</div>
                        </div>
                    </div>
                    <div class="row px-lg-5 px-2 py-2 pt-0">
                        <div class="col-lg-8 border border-dark">
                            <div class="p-2 border-dark">
                                <div class="">
                                    <div class=" ">
                                        <div class="small_text">Attorney or Party Without Attorney (Name and Address):
                                        </div>
                                        <div class="w-100"> <input type="text" name="attorney_name"
                                                class="border-0 table_input w-100"></div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="d-flex w-100 d_sm_block">
                                            <div class="small_text">Phone Number:</div>
                                            <div class="w-75"> <input type="text" name="phone_number"
                                                    class="border-0 table_input w-100"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="d-flex w-100 d_sm_block">
                                            <div class="small_text">E-mail:</div>
                                            <div class="w-75"> <input type="text" name="e_mail"
                                                    class="border-0 table_input w-100"></div>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-lg-6 ">
                                        <div class="d-flex w-100 d_sm_block">
                                            <div class="small_text">FAX Number:</div>
                                            <div class="w-75"> <input type="text" name="fax_number"
                                                    class="border-0 table_input w-100"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 ">
                                        <div class="d-flex w-100 d_sm_block">
                                            <div class="small_text">Atty. Reg. #:</div>
                                            <div class="w-75"> <input type="text" name="atty_reg"
                                                    class="border-0 table_input w-100"></div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 border border-dark">
                            <div>
                                <div class="small_text">CASE NUMBER:</div>
                                <input type="text" name="case_number" class="border-0 table_input w-100">
                            </div>
                            <div class="row pt-lg-5">
                                <div class="col-lg-6">
                                    <div class="d-flex d_sm_block">
                                        <div class="small_text">Division</div>
                                        <div class=""> <input type="text" name="division"
                                                class="border-0 table_input w-100"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex d_sm_block">
                                        <div class="small_text">Courtroom</div>
                                        <div class=""> <input type="text" name="courtroom"
                                                class="border-0 table_input w-100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center fw-bold border border-dark">SWORN FINANCIAL STATEMENT</div>


                    </div>
                    <div class="row px-lg-5 px-2 py-2 pt-0">
                        <h6 class="d-flex d_sm_block w-100"><span>I,</span>
                            <div class="d-flex pt-2">
                                <div class=" "> <input type="text" name="full_name"
                                        class="border-0 footer_field  border-bottom"></div>
                                <div class="small_text ps-2">(full name) </div>
                            </div>
                            <div class="d-flex ps-2 pt-2">
                                <div> <input type="checkbox" name="full_name_check1" class="border-0 footer_field ">
                                </div>
                                <div class="small_text ps-2">am</div>
                            </div>
                            <div class="d-flex ps-2 pt-2">
                                <div> <input type="checkbox" name="full_name_check2" class="border-0 footer_field ">
                                </div>
                                <div class="small_text ps-2">am not currently employed.</div>
                            </div>
                        </h6>


                        <h6 class="d-flex  d_sm_block"><span>I am employed,</span>
                            <div class="d-flex pt-2 ">
                                <div class=""> <input type="text" name="employed"
                                        class="border-0 footer_field w-100 border-bottom"></div>
                                <div class="small_text ps-2"> hours per week. I am paid </div>
                            </div>
                            <div class="d-flex ps-2 pt-2">
                                <div> <input type="checkbox" name="weekly" class="border-0 footer_field "></div>
                                <div class="small_text ps-2">weekly</div>
                            </div>
                            <div class="d-flex ps-2 pt-2">
                                <div> <input type="checkbox" name="bi_weekly" class="border-0 footer_field "></div>
                                <div class="small_text ps-2">bi-weekly</div>
                            </div>
                            <div class="d-flex ps-2 pt-2">
                                <div> <input type="checkbox" name="twice_month" class="border-0 footer_field "></div>
                                <div class="small_text ps-2">twice a month</div>
                            </div>
                            <div class="d-flex ps-2 pt-2">
                                <div> <input type="checkbox" name="monthly" class="border-0 footer_field "></div>
                                <div class="small_text ps-2">monthly</div>
                            </div>
                        </h6>
                        <h6 class="d-flex d_sm_block "><span class="pt-2">My pay is based on a,</span>
                            <div class="d-flex ps-2 pt-2">
                                <div> <input type="checkbox" name="monthly_salary" class="border-0 footer_field ">
                                </div>
                                <div class="small_text ps-2">Monthly Salary</div>
                            </div>
                            <div class="d-flex ps-2 pt-2">
                                <div> <input type="checkbox" name="hourly_rate" class="border-0 footer_field "></div>
                                <div class="small_text ps-2">Hourly rate of </div>
                            </div>
                            <div class="d-flex ps-2 pt-2">$<input type="number" min="0"
                                    name="hourly_rate_value" class="border-0 footer_field w-100 border-bottom">
                            </div>
                            <div class="d-flex pt-2">
                                <div class="small_text ps-2"> <input type="checkbox" name="hourly_rate_other_ch">
                                    Other: </div>
                                <div class=""> <input type="text" name="hourly_rate_other_val"
                                        class="border-0 footer_field w-100 border-bottom"></div>
                            </div>
                        </h6>
                        <h6 class="d-flex d_sm_block">
                            <div class="d-flex d_sm_block">
                                <div class="small_text  ">Date employment began</div>
                                <div class="d-flex"> <input type="text" name="employment_began"
                                        class="border-0 footer_field   table_input w-100 border-bottom"> <small
                                        class="pt-1">.</small>
                                </div>
                            </div>
                        </h6>
                        <h6 class="d-flex d_sm_block ">
                            <div class="d-flex d_sm_block">
                                <div class="small_text">My occupation is:</div>
                                <div class=""> <input type="text" name="my_occupation"
                                        class="border-0 footer_field   table_input w-100 border-bottom"></div>
                            </div>
                            <div class="d-flex d_sm_block  ">
                                <div class="small_text">Name of employer:</div>
                                <div class=" "> <input type="text" name="name_employer"
                                        class="border-0 footer_field   table_input w-100 border-bottom"></div>
                            </div>
                        </h6>

                        <h6 class="d-flex d_sm_block ">
                            <div class="d-flex d_sm_block ">
                                <div class="small_text">Address of employer:</div>
                                <div class=""> <input type="text" name="address_employer"
                                        class="border-0 footer_field   table_input w-100 border-bottom"></div>
                            </div>
                        </h6>
                        <h6 class="d-flex d_sm_block ">
                            <div class="d-flex d_sm_block">
                                <div class="small_text">If unemployed, what date did you last work? </div>
                                <div class=""> <input type="text" name="last_work"
                                        class="border-0 footer_field   table_input w-100 border-bottom"></div>
                            </div>
                        </h6>
                        <h6 class="d-flex d_sm_block "><span class="pt-2">I am unemployed due to </span>
                            <div class="d-flex ps-2 pt-2">
                                <div> <input type="checkbox" name="disability" class="border-0 footer_field "></div>
                                <div class="small_text ps-2">disability</div>
                            </div>
                            <div class="d-flex ps-2 pt-2">
                                <div> <input type="checkbox" name="involuntary" class="border-0 footer_field "></div>
                                <div class="small_text ps-2">involuntary layoff at work </div>
                            </div>
                            <div class="d-flex pt-2">
                                <div class="small_text ps-2"> <input type="checkbox" name="involuntary_other_ch">
                                    Other: </div>
                                <div class=""> <input type="text" name="involuntary_other_val"
                                        class="border-0 footer_field w-100 border-bottom"></div>
                            </div>
                        </h6>
                        <h6 class="d-flex d_sm_block ">
                            <div class="d-flex d_sm_block">
                                <div class="small_text">This household consists of</div>
                                <div class=""> <input type="text" name="household_consists_adult"
                                        class="border-0 footer_field   table_input w-100 border-bottom"></div>
                            </div>
                            <div class="d-flex d_sm_block">
                                <div class="small_text">adult(s), and </div>
                                <div> <input type="text" name="household_consists_children"
                                        class="border-0 footer_field   table_input w-100 border-bottom"></div>
                            </div>
                            <div class="">minor child(ren).</div>
                        </h6>

                        <h6 class="d-flex d_sm_block ">
                            <span class="pt-2">I believe the monthly gross income of the other party is</span>
                            <div class="d-flex ps-2 pt-2">$<input type="number" min="0"
                                    name="monthly_gross_income_party"
                                    class="border-0 footer_field w-100 border-bottom"> <span class="pt-1">.</span>
                            </div>
                        </h6>

                        <h6 class="d-flex d_sm_block ">
                            <div class="d-flex d_sm_block">
                                <span class="pt-2">Annual gross income (last tax year) for Petitioner</span>
                                <div class="d-flex ps-2 pt-2">$<input type="number" min="0"
                                        name="annual_gross_income_petitioner"
                                        class="border-0 footer_field w-100 border-bottom"> <span
                                        class="pt-1">,</span></div>
                            </div>
                            <div class="d-flex d_sm_block  pt-2">
                                <span class="pt-2"> <input name="co_respondent_ch" type="checkbox"
                                        class="mx-2">Co-Petitioner/Respondent</span>
                                <div class="d-flex ps-2 pt-2">$<input type="number" min="0"
                                        name="co_respondent_val" class="border-0 footer_field w-100 border-bottom">
                                </div>
                            </div>
                        </h6>

                    </div>

                    <div class="row px-lg-5 px-2 py-2 pt-0">
                        <div> <span class="pe-lg-3 ps-2">1. </span> Monthly Income (Convert annual, bi-monthly, and
                            weekly amounts to monthly amounts.)</div>

                        <div class="table-responsive pt-3">
                            <table class="table-bordered border border-2 table  ">

                                <tbody>
                                    <tr>
                                        <td class=" small_text" style="max-width: 300px">Gross Monthly Income (before
                                            taxes and deductions) from salary and wages, including commissions, bonuses,
                                            overtime, self- employment, business income, other jobs, and monthly
                                            reimbursed expenses.</td>
                                        <td class=" small_text">
                                            <div class="">
                                                <div class="d-flex ">$<input type="text" min="0"
                                                        name="gmi_before_taxes" class="border-0 footer_field w-100">
                                                </div>
                                            </div>
                                        </td>
                                        <td class=" small_text">
                                            <div class="">Social Security Benefits (SSA)</div>
                                            <div class="d-flex"> <input type="checkbox" name="ssdi"
                                                    class="me-2">
                                                <div>SSDI (Disability insurance – entitlement program)</div>
                                            </div>
                                            <div class="d-flex"> <input type="checkbox" name="ssi"
                                                    class="me-2">
                                                <div>SSI (supplemental income – need based)</div>
                                            </div>
                                        </td>
                                        <td class=" small_text">
                                            <div class=" ">
                                                <div class="d-flex ">$<input type="text" min="0"
                                                        name="ssa_value" class="border-0 footer_field w-100"> </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="small_text">Unemployment & Veterans’ Benefits</td>
                                        <td class=" small_text"> <input type="text" min="0"
                                                name="unemployment_veterans" class="border-0 footer_field w-100">
                                        </td>
                                        <td class="small_text">Disability, Workers’ Compensation</td>
                                        <td class=" small_text"> <input type="text" min="0"
                                                name="disability_workers_compensation"
                                                class="border-0 footer_field w-100"> </td>
                                    </tr>

                                    <tr>
                                        <td class="small_text">Pension & Retirement Benefits</td>
                                        <td class=" small_text"> <input type="text" min="0"
                                                name="pension_retirement" class="border-0 footer_field w-100"> </td>
                                        <td class="small_text">Interest & Dividends</td>
                                        <td class=" small_text"> <input type="text" min="0"
                                                name="interest_dividends" class="border-0 footer_field w-100"> </td>
                                    </tr>

                                    <tr>
                                        <td class="small_text">Public Assistance (TANF)</td>
                                        <td class=" small_text"> <input type="text" min="0" name="tanf"
                                                class="border-0 footer_field w-100"> </td>
                                        <td class=" small_text">
                                            <div class="d-flex small_text">Other-<input type="text" min="0"
                                                    name="tanf_other1" class="border-0 footer_field w-100"></div>
                                        </td>
                                        <td class=" small_text"> <input type="text" min="0"
                                                name="tanf_other2" class="border-0 footer_field w-100"> </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3" class="text-end bg-secondary pe-2">Total Monthly Income
                                        </td>
                                        <td class=" small_text">
                                            <div class=" ">
                                                <div class="d-flex ">$<input type="text" min="0"
                                                        name="total_monthly_income"
                                                        class="border-0 footer_field w-100"> </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="fw-bold">Miscellaneous Income</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>

                                    <tr>
                                        <td class=" small_text">Royalties, Trusts, and Other Investments</td>
                                        <td class=" small_text">
                                            <div class="d-flex ">$<input type="text" min="0"
                                                    name="royalties_trusts" class="border-0 footer_field w-100">
                                            </div>
                                        </td>
                                        <td class=" small_text"> Contributions from Others</td>
                                        <td class=" small_text">
                                            <div class="d-flex ">$<input type="text" min="0"
                                                    name="contributions_others" class="border-0 footer_field w-100">
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class=" small_text">
                                            <div class="d-flex">Dependent Children’s monthly gross income. Source of
                                                Income <span><input type="text" name="dependent_children_income1"
                                                        class="border-0 footer_field w-100"></span></div>
                                        </td>
                                        <td class=" small_text">
                                            <div class="d-flex ">$<input type="text" min="0"
                                                    name="dependent_children_income2"
                                                    class="border-0 footer_field w-100"> </div>
                                        </td>
                                        <td class=" small_text">All other sources, i.e. personal injury settlement,
                                            non-reported income, etc.</td>
                                        <td class=" small_text">
                                            <div class="d-flex ">$<input type="text" min="0"
                                                    name="all_others_ie" class="border-0 footer_field w-100"> </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class=" small_text">Rental Net Income</td>
                                        <td class=" small_text"> <input type="text" min="0"
                                                name="rental_net_income" class="border-0 footer_field w-100"> </td>
                                        <td class=" small_text">Expense Accounts.</td>
                                        <td class=" small_text"> <input type="text" min="0"
                                                name="expense_accounts" class="border-0 footer_field w-100"> </td>
                                    </tr>

                                    <tr>
                                        <td class=" small_text">Child Support from Others</td>
                                        <td class=" small_text"> <input type="text" min="0"
                                                name="child_support_from" class="border-0 footer_field w-100"> </td>
                                        <td class=" small_text">
                                            <div class="d-flex small_text">Other-<input type="text" min="0"
                                                    name="child_support_form_other1"
                                                    class="border-0 footer_field w-100 border-bottom">
                                            </div>
                                        </td>
                                        <td class=" small_text"> <input type="text" min="0"
                                                name="child_support_form_other2" class="border-0 footer_field w-100">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class=" small_text">Spousal Support from Others</td>
                                        <td class=" small_text"> <input type="text" min="0"
                                                name="spousal_support_from" class="border-0 footer_field w-100"> </td>
                                        <td class=" small_text">
                                            <div class="d-flex small_text">Other-<input type="text" min="0"
                                                    name="spousal_support_from_other1"
                                                    class="border-0 footer_field w-100 border-bottom">
                                            </div>
                                        </td>
                                        <td class=" small_text"> <input type="text" min="0"
                                                name="spousal_support_from_other2"
                                                class="border-0 footer_field w-100"> </td>
                                    </tr>

                                    <tr>
                                        <td colspan="3" class="bg-secondary text-end pe-2">Total Monthly
                                            Miscellaneous Income</td>
                                        <td class=" small_text">
                                            <div class="d-flex ">$<input type="text" min="0"
                                                    name="tm_miscellaneous_income1"
                                                    class="border-0 footer_field w-100"> </div>
                                        </td>

                                    </tr>

                                    <tr>
                                        <td colspan="3" class=" text-end pe-2">Total Income</td>
                                        <td class=" small_text">
                                            <div class="d-flex ">$<input type="text" min="0"
                                                    name="tm_miscellaneous_income2"
                                                    class="border-0 footer_field w-100"> </div>
                                        </td>

                                    </tr>

                                </tbody>
                            </table>
                        </div>
                        @include('layouts.footer11', ['page' => 1])

                        {{-- <div class="d-flex gap-3 py-auto pb-3  ">
                            <div class="my-auto"> <i class="fas fa-chevron-left"></i><i class="fas fa-chevron-left"></i></a></div>
                            <div class="my-auto ps-2"> <i class="fas fa-chevron-left"></i></a> </div>
                            <div>
                                <select class="form-select w-100 sectionSelect">
                                    <option value="#section_first" selected>1</option>
                                    <option value="#section_two">2</option>
                                    <option value="#section_three">3</option>
                                    <option value="#section_four" >4</option>
                                    <option value="#section_five" >5</option>
                                    <option value="#section_last" >6</option>
                                </select>
                            </div>
                            <div class="my-auto"> <a href="#section_two" > <i class="fas fa-chevron-right"></i></a>  </div>
                            <div class="my-auto ps-2" ><a href="#section_last" > <i class="fas fa-chevron-right"></i><i class="fas fa-chevron-right"></i> </a></div>
                        </div> --}}
                    </div>
                </section>

                {{--  section_two --}}
                <section class="section_area pt-5" id="section_two">
                    <div class="row px-lg-5 px-2 py-2 pt-0">
                        <div> <span class="pe-lg-3 ps-2">2. </span>Monthly Deductions (Mandatory and Voluntary)</div>
                        <div class="table-responsive pt-3">
                            <table class="table-bordered border border-2 table  ">
                                <tbody>
                                    <tr>
                                        <td class="small_text fw-bold">Mandatory Deductions</td>
                                        <td class="small_text fw-bold">Cost Per Month </td>
                                        <td></td>
                                        <td class="small_text fw-bold"> Cost Per Month</td>
                                    </tr>

                                    <tr>
                                        <td class="small_text">Federal Income Tax</td>
                                        <td class="small_text">
                                            <div class="d-flex ">$<input type="text" min="0"
                                                    name="federal_income" class="border-0 footer_field w-100"></div>
                                        </td>
                                        <td class="small_text">State/Local Income Tax</td>
                                        <td class="small_text">
                                            <div class="d-flex ">$<input type="text" min="0"
                                                    name="state_local_income" class="border-0 footer_field w-100">
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="small_text">PERA/Civil Service</td>
                                        <td class="small_text"> <input type="text" min="0"
                                                name="pera_civil_service" class="border-0 footer_field w-100"> </td>
                                        <td class="small_text">Social Security Tax</td>
                                        <td class="small_text"> <input type="text" min="0"
                                                name="social_security_tax" class="border-0 footer_field w-100"> </td>
                                    </tr>

                                    <tr>
                                        <td class="small_text">Medicare Tax</td>
                                        <td class="small_text"> <input type="text" min="0"
                                                name="medicare_tax" class="border-0 footer_field w-100"> </td>
                                        <td class="small_text">
                                            <div class="d-flex small_text">Other-<input type="text" min="0"
                                                    name="medicare_tax_other1"
                                                    class="border-0 border_bottom footer_field w-100">
                                            </div>
                                        </td>
                                        <td class="small_text"> <input type="text" min="0"
                                                name="medicare_tax_other2" class="border-0 footer_field w-100 "> </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3" class="text-end bg-secondary pe-2">Total Mandatory
                                            Deductions</td>
                                        <td class="small_text">
                                            <div class=" ">
                                                <div class="d-flex ">$<input type="text" min="0"
                                                        name="total_mandatory_deductions"
                                                        class="border-0 footer_field w-100"> </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="fw-bold small_text">Voluntary Deductions</td>
                                        <td class="fw-bold small_text">Cost Per Month</td>
                                        <td></td>
                                        <td class="fw-bold small_text">Cost Per Month</td>
                                    </tr>

                                    <tr>
                                        <td class=" small_text">Life and Disability Insurance</td>
                                        <td class=" small_text">
                                            <div class="d-flex">$<input type="text" min="0"
                                                    name="life_disability_insurance"
                                                    class="border-0 footer_field w-100"> </div>
                                        </td>
                                        <td class=" small_text">Stocks/Bonds</td>
                                        <td class=" small_text">
                                            <div class="d-flex">$<input type="text" min="0"
                                                    name="stocks_bonds" class="border-0 footer_field w-100"> </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class=" small_text">
                                            <div class="d-flex">Health, Dental, Vision Insurance Premium Total number
                                                of people covered on Plan -></div>
                                        </td>
                                        <td class=" small_text">
                                            <div class="d-flex ">$<input type="text" min="0"
                                                    name="health_dental_plan" class="border-0 footer_field w-100">
                                            </div>
                                        </td>
                                        <td class=" small_text">Retirement & Deferred Compensation</td>
                                        <td class=" small_text">
                                            <div class="d-flex ">$<input type="text" min="0"
                                                    name="retirement_deferred_compensation"
                                                    class="border-0 footer_field w-100"> </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class=" small_text">Child Care</td>
                                        <td class=" small_text"> <input type="text" min="0"
                                                name="child_care" class="border-0 footer_field w-100"> </td>
                                        <td class=" small_text">
                                            <div class="d-flex small_text">Other-<input type="text" min="0"
                                                    name="child_care_other1"
                                                    class="border-0 footer_field w-100 border-bottom">
                                            </div>
                                        </td>
                                        <td class=" small_text"> <input type="text" min="0"
                                                name="child_care_other2" class="border-0 footer_field w-100"> </td>
                                    </tr>
                                    <tr>
                                        <td class=" small_text">Flex Benefit Cafeteria Plan</td>
                                        <td class=" small_text"> <input type="text" min="0"
                                                name="flex_benefit_plan" class="border-0 footer_field w-100"> </td>
                                        <td class=" small_text">
                                            <div class="d-flex small_text">Other-<input type="text" min="0"
                                                    name="flex_benefit_plan_other1"
                                                    class="border-0 footer_field w-100 border-bottom">
                                            </div>
                                        </td>
                                        <td class=" small_text"> <input type="text" min="0"
                                                name="flex_benefit_plan_other2" class="border-0 footer_field w-100">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="3" class="bg-secondary text-end pe-2">Total Voluntary
                                            Deductions</td>
                                        <td class=" small_text">
                                            <div class="d-flex ">$<input type="text" min="0"
                                                    name="total_voluntary_deductions"
                                                    class="border-0 footer_field w-100"> </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3" class=" text-end pe-2">Total Monthly Deductions</td>
                                        <td class=" small_text">
                                            <div class="d-flex ">$<input type="text" min="0"
                                                    name="total_monthly_deductions"
                                                    class="border-0 footer_field w-100"> </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div> <span class="pe-lg-3 ps-2">3. </span>Monthly Expenses</div>
                        <div class="ps-lg-4 ps-2 small_text fw-bold">Note: List regular monthly expenses below that you
                            pay on an on-going basis and that are not identified in the deductions above</div>
                        <div class="ps-lg-4 ps-2 small_text fw-bold pt-2">A. Housing</div>
                        <div class="table-responsive  ">
                            <table class="table-bordered border border-2 table  ">
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td class="small_text fw-bold">Cost Per Month </td>
                                        <td></td>
                                        <td class="small_text fw-bold"> Cost Per Month</td>
                                    </tr>

                                    <tr>
                                        <td class="small_text">1<sup>st</sup> Mortgage</td>
                                        <td class="small_text">
                                            <div class="d-flex ">$<input type="text" min="0"
                                                    name="1st_mortgage" class="border-0 footer_field w-100"></div>
                                        </td>
                                        <td class="small_text">2<sup>st</sup> Mortgage</td>
                                        <td class="small_text">
                                            <div class="d-flex ">$<input type="text" min="0"
                                                    name="2st_mortgage" class="border-0 footer_field w-100"> </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="small_text">Insurance (Home/Rental) & Property Taxes (not included
                                            in mortgage payment)</td>
                                        <td class="small_text"> <input type="text" min="0"
                                                name="insurance_home_rental" class="border-0 footer_field w-100">
                                        </td>
                                        <td class="small_text">Condo/Homeowner’s/Maintenance Fees</td>
                                        <td class="small_text"> <input type="text" min="0"
                                                name="condo_homeowner_fees" class="border-0 footer_field w-100"> </td>
                                    </tr>

                                    <tr>
                                        <td class="small_text">Rent</td>
                                        <td class="small_text"> <input type="text" min="0" name="rent"
                                                class="border-0 footer_field w-100"> </td>
                                        <td class="small_text">
                                            <div class="d-flex small_text">Other-<input type="text" min="0"
                                                    name="rent_other1"
                                                    class="border-0 border_bottom footer_field w-100">
                                            </div>
                                        </td>
                                        <td class="small_text"> <input type="text" min="0"
                                                name="rent_other2" class="border-0 footer_field w-100 "> </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3" class="text-end bg-secondary pe-2">Total Housing</td>
                                        <td class="small_text">
                                            <div class=" ">
                                                <div class="d-flex ">$<input type="text" min="0"
                                                        name="total_housing" class="border-0 footer_field w-100">
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="ps-lg-4 ps-2 small_text fw-bold pt-2"> B. Utilities and Miscellaneous Housing
                            Services</div>
                        <div class="table-responsive  ">
                            <table class="table-bordered border border-2 table  ">
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td class="small_text fw-bold">Cost Per Month </td>
                                        <td></td>
                                        <td class="small_text fw-bold"> Cost Per Month</td>
                                    </tr>

                                    <tr>
                                        <td class="small_text">Gas & Electricity</td>
                                        <td class="small_text">
                                            <div class="d-flex ">$<input type="text" min="0"
                                                    name="gas_electricity" class="border-0 footer_field w-100"></div>
                                        </td>
                                        <td class="small_text">Water, Sewer, Trash Removal</td>
                                        <td class="small_text">
                                            <div class="d-flex ">$<input type="text" min="0"
                                                    name="water_sewer_tersh" class="border-0 footer_field w-100">
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="small_text">Telephone (local, long distance, cellular & pager)</td>
                                        <td class="small_text"> <input type="text" min="0"
                                                name="telephone_locallong" class="border-0 footer_field w-100"> </td>
                                        <td class="small_text">Property Care (Lawn, snow removal, cleaning, security
                                            system, etc.)</td>
                                        <td class="small_text"> <input type="text" min="0"
                                                name="property_care" class="border-0 footer_field w-100"> </td>
                                    </tr>

                                    <tr>
                                        <td class="small_text">Internet Provider, Cable & Satellite TV</td>
                                        <td class="small_text"> <input type="text" min="0"
                                                name="internet_provider" class="border-0 footer_field w-100"> </td>
                                        <td class="small_text">
                                            <div class="d-flex small_text">Other-<input type="text" min="0"
                                                    name="ipo1" class="border-0 border_bottom footer_field w-100">
                                            </div>
                                        </td>
                                        <td class="small_text"> <input type="text" min="0" name="ipo2"
                                                class="border-0 footer_field w-100 "> </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3" class="text-end bg-secondary pe-2">Total Utilities and
                                            Miscellaneous Housing Services</td>
                                        <td class="small_text">
                                            <div class=" ">
                                                <div class="d-flex ">$<input type="text" min="0"
                                                        name="tumh_services" class="border-0 footer_field w-100">
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="ps-lg-4 ps-2 small_text fw-bold pt-2"> C. Food & Supplies</div>
                        <div class="table-responsive  ">
                            <table class="table-bordered border border-2 table  ">
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td class="small_text fw-bold">Cost Per Month </td>
                                        <td></td>
                                        <td class="small_text fw-bold"> Cost Per Month</td>
                                    </tr>

                                    <tr>
                                        <td class="small_text">Groceries & Supplies</td>
                                        <td class="small_text">
                                            <div class="d-flex ">$<input type="text" min="0"
                                                    name="groceries_supplies" class="border-0 footer_field w-100">
                                            </div>
                                        </td>
                                        <td class="small_text">Dining Out</td>
                                        <td class="small_text">
                                            <div class="d-flex ">$<input type="text" min="0"
                                                    name="dining_out" class="border-0 footer_field w-100"> </div>
                                        </td>
                                    </tr>


                                    <tr>
                                        <td colspan="3" class="text-end bg-secondary pe-2">Total Food & Supplies
                                        </td>
                                        <td class="small_text">
                                            <div class=" ">
                                                <div class="d-flex ">$<input type="text" min="0"
                                                        name="t_food_s" class="border-0 footer_field w-100"> </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="ps-lg-4 ps-2 small_text fw-bold pt-2"> D. Health Care Costs (Co-pays, Premiums,
                            etc.)</div>
                        <div class="table-responsive  ">
                            <table class="table-bordered border border-2 table  ">
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td class="small_text fw-bold">Cost Per Month </td>
                                        <td></td>
                                        <td class="small_text fw-bold"> Cost Per Month</td>
                                    </tr>

                                    <tr>
                                        <td class="small_text">Doctor & Vision Care</td>
                                        <td class="small_text">
                                            <div class="d-flex ">$<input type="text" min="0"
                                                    name="docter_vc" class="border-0 footer_field w-100"></div>
                                        </td>
                                        <td class="small_text">Dentist and Orthodontist</td>
                                        <td class="small_text">
                                            <div class="d-flex ">$<input type="text" min="0"
                                                    name="dentist_orthod" class="border-0 footer_field w-100"> </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="small_text">Medicine & RX Drugs</td>
                                        <td class="small_text"> <input type="text" min="0"
                                                name="m_rx_drugs" class="border-0 footer_field w-100"> </td>
                                        <td class="small_text">Therapist</td>
                                        <td class="small_text"> <input type="text" min="0"
                                                name="therapist" class="border-0 footer_field w-100"> </td>
                                    </tr>

                                    <tr>
                                        <td class="small_text">Premiums (if not paid by employer)</td>
                                        <td class="small_text"> <input type="text" min="0"
                                                name="premimums_e" class="border-0 footer_field w-100"> </td>
                                        <td class="small_text">
                                            <div class="d-flex small_text">Other-<input type="text" min="0"
                                                    name="premimums_e_o1"
                                                    class="border-0 border_bottom footer_field w-100">
                                            </div>
                                        </td>
                                        <td class="small_text"> <input type="text" min="0"
                                                name="premimums_e_o2" class="border-0 footer_field w-100 "> </td>
                                    </tr>

                                    <tr>
                                        <td colspan="3" class="text-end bg-secondary pe-2">Total Health Care </td>
                                        <td class="small_text">
                                            <div class=" ">
                                                <div class="d-flex ">$<input type="text" min="0"
                                                        name="t_healthcare" class="border-0 footer_field w-100">
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        @include('layouts.footer11', ['page' => 2])
                        {{-- <div class="d-flex gap-3 py-auto pb-3  ">
                            <div class="my-auto"> <a href="#section_first" ><i class="fas fa-chevron-left"></i><i class="fas fa-chevron-left"></i></a></div>
                            <div class="my-auto ps-2"> <a href="#section_first" ><i class="fas fa-chevron-left"></i></a> </div>
                            <div>
                                <select class="form-select w-100 sectionSelect">
                                    <option value="#section_first" >1</option>
                                    <option value="#section_two" selected>2</option>
                                    <option value="#section_three">3</option>
                                    <option value="#section_four" >4</option>
                                    <option value="#section_five" >5</option>
                                    <option value="#section_last" >6</option>
                                </select>
                            </div>
                            <div class="my-auto"> <a href="#section_three" > <i class="fas fa-chevron-right"></i></a>  </div>
                            <div class="my-auto ps-2" ><a href="#section_last" > <i class="fas fa-chevron-right"></i><i class="fas fa-chevron-right"></i> </a></div>
                        </div> --}}
                    </div>
                </section>


                {{-- section_three --}}
                <section class="section_area pt-5" id="section_three">
                    <div class="row px-lg-5 px-2 py-2 pt-0">


                        <div class="ps-lg-4 ps-2 small_text fw-bold pt-2">E. Transportation & Recreation Vehicles
                            (Motorcycles, Motor Homes, Boats, ATV, Snowmobiles, etc.)</div>
                        <div class="table-responsive  ">
                            <table class="table-bordered border border-2 table  ">
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td class="small_text fw-bold">Cost Per Month </td>
                                        <td></td>
                                        <td class="small_text fw-bold"> Cost Per Month</td>
                                    </tr>

                                    <tr>
                                        <td class="small_text">Primary Vehicle Payment</td>
                                        <td class="small_text">
                                            <div class="d-flex ">$<input type="text" min="0"
                                                    name="pv_payment" class="border-0 footer_field w-100"></div>
                                        </td>
                                        <td class="small_text">Other Vehicle Payments</td>
                                        <td class="small_text">
                                            <div class="d-flex ">$<input type="text" min="0"
                                                    name="ov_payment" class="border-0 footer_field w-100"> </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="small_text">Fuel, Parking, and Maintenance</td>
                                        <td class="small_text"> <input type="text" min="0" name="fuel_p_m"
                                                class="border-0 footer_field w-100"> </td>
                                        <td class="small_text">Insurance & Registration/Tax Payments (yearly
                                            amount(s)/12)</td>
                                        <td class="small_text"> <input type="text" min="0" name="i_r_tax"
                                                class="border-0 footer_field w-100"> </td>
                                    </tr>

                                    <tr>
                                        <td class="small_text"> Bus & Commuter Fees</td>
                                        <td class="small_text"> <input type="text" min="0" name="b_c_fees"
                                                class="border-0 footer_field w-100"> </td>
                                        <td class="small_text">
                                            <div class="d-flex small_text">Other-<input type="text" min="0"
                                                    name="b_c_f_o1" class="border-0 border_bottom footer_field w-100">
                                            </div>
                                        </td>
                                        <td class="small_text"> <input type="text" min="0" name="b_c_f_o2"
                                                class="border-0 footer_field w-100 "> </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3" class="text-end bg-secondary pe-2">Total Transportation
                                        </td>
                                        <td class="small_text">
                                            <div class=" ">
                                                <div class="d-flex ">$<input type="text" min="0"
                                                        name="t_transportation" class="border-0 footer_field w-100">
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="ps-lg-4 ps-2 small_text fw-bold pt-2">F. Children’s Expenses and Activities</div>
                        <div class="table-responsive  ">
                            <table class="table-bordered border border-2 table  ">
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td class="small_text fw-bold">Cost Per Month </td>
                                        <td></td>
                                        <td class="small_text fw-bold"> Cost Per Month</td>
                                    </tr>

                                    <tr>
                                        <td class="small_text"> Clothing & Shoes</td>
                                        <td class="small_text">
                                            <div class="d-flex ">$<input type="text" min="0"
                                                    name="cloth_shoe" class="border-0 footer_field w-100"></div>
                                        </td>
                                        <td class="small_text">Child Care</td>
                                        <td class="small_text">
                                            <div class="d-flex ">$<input type="text" min="0"
                                                    name="child_care" class="border-0 footer_field w-100"> </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="small_text">Extraordinary Expenses i.e. Special Needs, etc.</td>
                                        <td class="small_text"> <input type="text" min="0"
                                                name="e_expenses" class="border-0 footer_field w-100"> </td>
                                        <td class="small_text">Misc. Expenses, i.e. Tutor, Books, Activities, Fees,
                                            Lunch, etc.</td>
                                        <td class="small_text"> <input type="text" min="0" name="m_e_t"
                                                class="border-0 footer_field w-100"> </td>
                                    </tr>

                                    <tr>
                                        <td class="small_text">Tuition</td>
                                        <td class="small_text"> <input type="text" min="0" name="tution"
                                                class="border-0 footer_field w-100"> </td>
                                        <td class="small_text">
                                            <div class="d-flex small_text">Other-<input type="text" min="0"
                                                    name="tution_o1"
                                                    class="border-0 border_bottom footer_field w-100">
                                            </div>
                                        </td>
                                        <td class="small_text"> <input type="text" min="0"
                                                name="tution_o2" class="border-0 footer_field w-100 "> </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3" class="text-end bg-secondary pe-2">Total Utilities and
                                            Miscellaneous Housing Services</td>
                                        <td class="small_text">
                                            <div class=" ">
                                                <div class="d-flex ">$<input type="text" min="0"
                                                        name="t_u_m_service" class="border-0 footer_field w-100">
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="ps-lg-4 ps-2 small_text fw-bold pt-2"> G. Education for you - Please identify
                            status: <span><input type="checkbox" name="f_t_student" class="ms-2"> Full-time
                                student</span> <span><input type="checkbox" name="p_t_student" class="ms-2">
                                Part-time student</span></div>
                        <div class="table-responsive  ">
                            <table class="table-bordered border border-2 table  ">
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td class="small_text fw-bold">Cost Per Month </td>
                                        <td></td>
                                        <td class="small_text fw-bold"> Cost Per Month</td>
                                    </tr>

                                    <tr>
                                        <td class="small_text">Tuition, Books, Supplies, Fees, etc.</td>
                                        <td class="small_text">
                                            <div class="d-flex ">$<input type="text" min="0"
                                                    name="t_b_s_f" class="border-0 footer_field w-100"></div>
                                        </td>
                                        <td class="small_text">
                                            <div class="d-flex small_text">Other-<input type="text" min="0"
                                                    name="t_b_s_f_o1"
                                                    class="border-0 border_bottom footer_field w-100">
                                            </div>
                                        </td>
                                        <td class="small_text">
                                            <div class="d-flex ">$<input type="text" min="0"
                                                    name="t_b_s_f_o2" class="border-0 footer_field w-100"> </div>
                                        </td>
                                    </tr>


                                    <tr>
                                        <td colspan="3" class="text-end bg-secondary pe-2">Total Education</td>
                                        <td class="small_text">
                                            <div class=" ">
                                                <div class="d-flex ">$<input type="text" min="0"
                                                        name="t_education" class="border-0 footer_field w-100"> </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="ps-lg-4 ps-2 small_text fw-bold pt-2"> H. Maintenance & Child Support (that you
                            pay)</div>
                        <div class="table-responsive  ">
                            <table class="table-bordered border border-2 table  ">
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td class="small_text fw-bold">Cost Per Month </td>
                                        <td></td>
                                        <td class="small_text fw-bold"> Cost Per Month</td>
                                    </tr>

                                    <tr>
                                        <td class="small_text">Spousal Maintenance</td>
                                        <td class="small_text">
                                            <div class="d-flex ">$<input type="text" min="0"
                                                    name="sp_maintenance" class="border-0 footer_field w-100"></div>
                                        </td>
                                        <td class="small_text">Child Support</td>
                                        <td class="small_text">
                                            <div class="d-flex ">$<input type="text" min="0"
                                                    name="c_support" class="border-0 footer_field w-100"> </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="small_text"> <input type="checkbox" name="t_family_ch1"> This
                                            family</td>
                                        <td class="small_text">
                                            <div class="d-flex ">$<input type="text" min="0"
                                                    name="t_family_v1" class="border-0 footer_field w-100"> </div>
                                        </td>
                                        <td class="small_text"> <input name="t_family_ch2" type="checkbox"> This
                                            family</td>
                                        <td class="small_text"> <input type="text" min="0"
                                                name="t_family_v2" class="border-0 footer_field w-100"> </td>
                                    </tr>
                                    <tr>
                                        <td class="small_text"> <input name="o_family_c1" type="checkbox"> Other
                                            family</td>
                                        <td class="small_text">
                                            <div class="d-flex ">$<input type="text" min="0"
                                                    name="o_family_v1" class="border-0 footer_field w-100"> </div>
                                        </td>
                                        <td class="small_text"> <input name="o_family_c2" type="checkbox"> Other
                                            family</td>
                                        <td class="small_text">
                                            <div class="d-flex ">$<input type="text" min="0"
                                                    name="o_family_v2" class="border-0 footer_field w-100"> </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3" class="text-end bg-secondary pe-2">Total Maintenance and
                                            Child Support </td>
                                        <td class="small_text">
                                            <div class=" ">
                                                <div class="d-flex ">$<input type="text" min="0"
                                                        name="t_mc_support" class="border-0 footer_field w-100">
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="ps-lg-4 ps-2 small_text fw-bold pt-2"> I. Miscellaneous (Please list on-going
                            expenses not covered in the sections above)</div>
                        <div class="table-responsive  ">
                            <table class="table-bordered border border-2 table  ">
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td class="small_text fw-bold">Cost Per Month </td>
                                        <td></td>
                                        <td class="small_text fw-bold"> Cost Per Month</td>
                                    </tr>

                                    <tr>
                                        <td class="small_text">Recreation/Entertainment</td>
                                        <td class="small_text">
                                            <div class="d-flex ">$<input type="text" min="0"
                                                    name="recreation_e" class="border-0 footer_field w-100"></div>
                                        </td>
                                        <td class="small_text">Personal Care (Hair, Nail, Clothing, etc.)</td>
                                        <td class="small_text">
                                            <div class="d-flex ">$<input type="text" min="0"
                                                    name="p_care" class="border-0 footer_field w-100"> </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="small_text"> Legal/Accounting Fees</td>
                                        <td class="small_text"> <input type="text" min="0"
                                                name="la_fee" class="border-0 footer_field w-100"> </td>
                                        <td class="small_text">Subscriptions (Newspapers, Magazines, etc.)</td>
                                        <td class="small_text"> <input type="text" min="0"
                                                name="subscriptions_nm" class="border-0 footer_field w-100"> </td>
                                    </tr>

                                    <tr>
                                        <td class="small_text">Charity/Worship</td>
                                        <td class="small_text"> <input type="text" min="0"
                                                name="charity_worship" class="border-0 footer_field w-100"> </td>
                                        <td class="small_text">Movie & Video Rentals</td>
                                        <td class="small_text"> <input type="text" min="0"
                                                name="mv_result" class="border-0 footer_field w-100"> </td>
                                    </tr>

                                    <tr>
                                        <td class="small_text">Vacation/Travel/Hobbies</td>
                                        <td class="small_text"> <input type="text" min="0"
                                                name="v_t_h" class="border-0 footer_field w-100"> </td>
                                        <td class="small_text">Investments (Not part of payroll deductions)</td>
                                        <td class="small_text"> <input type="text" min="0"
                                                name="investment_npd" class="border-0 footer_field w-100"> </td>
                                    </tr>

                                    <tr>
                                        <td class="small_text">Membership/Clubs</td>
                                        <td class="small_text"> <input type="text" min="0"
                                                name="m_clubs" class="border-0 footer_field w-100"> </td>
                                        <td class="small_text">Home Furnishings</td>
                                        <td class="small_text"> <input type="text" min="0"
                                                name="h_furnishings" class="border-0 footer_field w-100"> </td>
                                    </tr>

                                    <tr>
                                        <td class="small_text">Pets/Pet Care</td>
                                        <td class="small_text"> <input type="text" min="0"
                                                name="pp_care" class="border-0 footer_field w-100"> </td>
                                        <td class="small_text">Sports Events/Participation</td>
                                        <td class="small_text"> <input type="text" min="0"
                                                name="sports_ep" class="border-0 footer_field w-100"> </td>
                                    </tr>
                                    <tr>
                                        <td class="small_text">
                                            <div class="d-flex small_text">Other-<input type="text"
                                                    min="0" name="other_1"
                                                    class="border-0 border_bottom footer_field w-100"></div>
                                        </td>
                                        <td class="small_text"> <input type="text" min="0"
                                                name="other_v1" class="border-0 footer_field w-100"> </td>
                                        <td class="small_text">
                                            <div class="d-flex small_text">Other-<input type="text"
                                                    min="0" name="other_2"
                                                    class="border-0 border_bottom footer_field w-100"></div>
                                        </td>
                                        <td class="small_text"> <input type="text" min="0"
                                                name="other_v2" class="border-0 footer_field w-100 "> </td>
                                    </tr>
                                    <tr>
                                        <td class="small_text">
                                            <div class="d-flex small_text">Other-<input type="text"
                                                    min="0" name="other_3"
                                                    class="border-0 border_bottom footer_field w-100"></div>
                                        </td>
                                        <td class="small_text"> <input type="text" min="0"
                                                name="other_v3" class="border-0 footer_field w-100"> </td>
                                        <td class="small_text">
                                            <div class="d-flex small_text">Other-<input type="text"
                                                    min="0" name="other_4"
                                                    class="border-0 border_bottom footer_field w-100"></div>
                                        </td>
                                        <td class="small_text"> <input type="text" min="0"
                                                name="other_v4" class="border-0 footer_field w-100 "> </td>
                                    </tr>
                                    <tr>
                                        <td class="small_text">
                                            <div class="d-flex small_text">Other-<input type="text"
                                                    min="0" name="other_5"
                                                    class="border-0 border_bottom footer_field w-100"></div>
                                        </td>
                                        <td class="small_text"> <input type="text" min="0"
                                                name="other_v5" class="border-0 footer_field w-100"> </td>
                                        <td class="small_text">
                                            <div class="d-flex small_text">Other-<input type="text"
                                                    min="0" name="other_6"
                                                    class="border-0 border_bottom footer_field w-100"></div>
                                        </td>
                                        <td class="small_text"> <input type="text" min="0"
                                                name="other_v6" class="border-0 footer_field w-100 "> </td>
                                    </tr>
                                    <tr>
                                        <td class="small_text">
                                            <div class="d-flex small_text">Other-<input type="text"
                                                    min="0" name="other_7"
                                                    class="border-0 border_bottom footer_field w-100"></div>
                                        </td>
                                        <td class="small_text"> <input type="text" min="0"
                                                name="other_v7" class="border-0 footer_field w-100"> </td>
                                        <td class="small_text">
                                            <div class="d-flex small_text">Other-<input type="text"
                                                    min="0" name="other_8"
                                                    class="border-0 border_bottom footer_field w-100"></div>
                                        </td>
                                        <td class="small_text"> <input type="text" min="0"
                                                name="other_v8" class="border-0 footer_field w-100 "> </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3" class="text-end bg-secondary pe-2">Total Miscellaneous
                                        </td>
                                        <td class="small_text">
                                            <div class=" ">
                                                <div class="d-flex ">$<input type="text" min="0"
                                                        name="tm_month" class="border-0 footer_field w-100"> </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3" class="text-end pe-2">Total Monthly Expenses (Totals from
                                            A – I)</td>
                                        <td class="small_text">
                                            <div class=" ">
                                                <div class="d-flex ">$<input type="text" min="0"
                                                        name="tme_ai" class="border-0 footer_field w-100"> </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        @include('layouts.footer11', ['page' => 3])
                        {{-- <div class="d-flex gap-3 py-auto pb-3  ">
                            <div class="my-auto"> <a href="#section_first" ><i class="fas fa-chevron-left"></i><i class="fas fa-chevron-left"></i></a></div>
                            <div class="my-auto ps-2"> <a href="#section_two" ><i class="fas fa-chevron-left"></i></a> </div>
                            <div>
                                <select class="form-select w-100 sectionSelect">
                                    <option value="#section_first" >1</option>
                                    <option value="#section_two">2</option>
                                    <option value="#section_three" selected>3</option>
                                    <option value="#section_four" >4</option>
                                    <option value="#section_five" >5</option>
                                    <option value="#section_last" >6</option>
                                </select>
                            </div>
                            <div class="my-auto"> <a href="#section_four" > <i class="fas fa-chevron-right"></i></a>  </div>
                            <div class="my-auto ps-2" ><a href="#section_last" > <i class="fas fa-chevron-right"></i><i class="fas fa-chevron-right"></i> </a></div>
                        </div> --}}
                    </div>
                </section>


                {{-- section_four --}}
                <section class="section_area pt-5" id="section_four">
                    <div class="row px-lg-5 px-2 py-2 pt-0">
                        <div> <span class="pe-lg-3 ps-2">4. </span> Debts (unsecured)</div>
                        <div class="small_text">List unsecured debts such as credit cards, store charge accounts,
                            loans from family members, back taxes owed to the I.R.S., etc. Do not list debts that are
                            liens against your property, such as mortgages and car loans, because that payment is
                            already listed as an expense above, and the total of the debt is shown elsewhere as a
                            deduction from value where that asset is listed, such as under Real Estate or Motor
                            Vehicles.</div>
                        <div class="fw-bold">For name on account, "P" = Petitioner, "C/R” = Co-Petitioner or
                            Respondent, "J" = Joint.</div>
                        <div class="table-responsive pt-3">
                            <table class="table-bordered border border-2 table  ">
                                <tbody>
                                    <tr>
                                        <td class="bg-secondary small_text">Name of Creditor</td>
                                        <td class="bg-secondary small_text">Account Number (last 4- digits only) </td>
                                        <td class="bg-secondary small_text">P</td>
                                        <td class="bg-secondary small_text">C/R</td>
                                        <td class="bg-secondary small_text">J</td>
                                        <td class="bg-secondary small_text">Date of Balance</td>
                                        <td class="bg-secondary small_text">Balance</td>
                                        <td class="bg-secondary small_text">Minimum Monthly Payment Required</td>
                                        <td class="bg-secondary small_text">Principal Purchase(s) for Which Debt Was
                                            Incurred</td>
                                    </tr>

                                    <tr>
                                        <td class="small_text">
                                            <input type="text" min="0" name="noc_1"
                                                class="border-0 footer_field w-100">
                                        </td>
                                        <td class="small_text">
                                            <input type="text" min="0" name="an_1"
                                                class="border-0 footer_field w-100">
                                        </td>
                                        <td class="small_text">
                                            <input type="checkbox" min="0" name="p_1"
                                                class="border-0 footer_field w-100">
                                        </td>
                                        <td class="small_text">
                                            <input type="checkbox" min="0" name="cr_1"
                                                class="border-0 footer_field w-100">
                                        </td>
                                        <td class="small_text">
                                            <input type="checkbox" min="0" name="j_1"
                                                class="border-0 footer_field w-100">
                                        </td>

                                        <td class="small_text">
                                            <div class=" ">
                                                <div class="d-flex "><input type="text" min="0"
                                                        name="dob_1" class="border-0 footer_field w-100"> </div>
                                            </div>
                                        </td>
                                        <td class="small_text">
                                            <div class=" ">
                                                <div class="d-flex ">$<input type="text" min="0"
                                                        name="b_1" class="border-0 footer_field w-100"> </div>
                                            </div>
                                        </td>
                                        <td class="small_text">
                                            <div class=" ">
                                                <div class="d-flex ">$<input type="text" min="0"
                                                        name="mmpr_1" class="border-0 footer_field w-100"> </div>
                                            </div>
                                        </td>
                                        <td class="small_text">
                                            <div class=" ">
                                                <div class="d-flex "><input type="text" min="0"
                                                        name="ppi_1" class="border-0 footer_field w-100"> </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="small_text">
                                            <input type="text" min="0" name="noc_2"
                                                class="border-0 footer_field w-100">
                                        </td>
                                        <td class="small_text">
                                            <input type="text" min="0" name="an_2"
                                                class="border-0 footer_field w-100">
                                        </td>
                                        <td class="small_text">
                                            <input type="checkbox" min="0" name="p_2"
                                                class="border-0 footer_field w-100">
                                        </td>
                                        <td class="small_text">
                                            <input type="checkbox" min="0" name="cr_2"
                                                class="border-0 footer_field w-100">
                                        </td>
                                        <td class="small_text">
                                            <input type="checkbox" min="0" name="j_2"
                                                class="border-0 footer_field w-100">
                                        </td>

                                        <td class="small_text">
                                            <div class=" ">
                                                <div class="d-flex "><input type="text" min="0"
                                                        name="dob_2" class="border-0 footer_field w-100"> </div>
                                            </div>
                                        </td>
                                        <td class="small_text">
                                            <div class=" ">
                                                <div class="d-flex "><input type="text" min="0"
                                                        name="b_2" class="border-0 footer_field w-100"> </div>
                                            </div>
                                        </td>
                                        <td class="small_text">
                                            <div class=" ">
                                                <div class="d-flex "><input type="text" min="0"
                                                        name="mmpr_2" class="border-0 footer_field w-100"> </div>
                                            </div>
                                        </td>
                                        <td class="small_text">
                                            <div class=" ">
                                                <div class="d-flex "><input type="text" min="0"
                                                        name="ppi_2" class="border-0 footer_field w-100"> </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="small_text">
                                            <input type="text" min="0" name="noc_3"
                                                class="border-0 footer_field w-100">
                                        </td>
                                        <td class="small_text">
                                            <input type="text" min="0" name="an_3"
                                                class="border-0 footer_field w-100">
                                        </td>
                                        <td class="small_text">
                                            <input type="checkbox" min="0" name="p-3"
                                                class="border-0 footer_field w-100">
                                        </td>
                                        <td class="small_text">
                                            <input type="checkbox" min="0" name="cr_3"
                                                class="border-0 footer_field w-100">
                                        </td>
                                        <td class="small_text">
                                            <input type="checkbox" min="0" name="j_3"
                                                class="border-0 footer_field w-100">
                                        </td>

                                        <td class="small_text">
                                            <div class=" ">
                                                <div class="d-flex "><input type="text" min="0"
                                                        name="dob_3" class="border-0 footer_field w-100"> </div>
                                            </div>
                                        </td>
                                        <td class="small_text">
                                            <div class=" ">
                                                <div class="d-flex "><input type="text" min="0"
                                                        name="b_3" class="border-0 footer_field w-100"> </div>
                                            </div>
                                        </td>
                                        <td class="small_text">
                                            <div class=" ">
                                                <div class="d-flex "><input type="text" min="0"
                                                        name="mmpr_3" class="border-0 footer_field w-100"> </div>
                                            </div>
                                        </td>
                                        <td class="small_text">
                                            <div class=" ">
                                                <div class="d-flex "><input type="text" min="0"
                                                        name="ppi_3" class="border-0 footer_field w-100"> </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="small_text">
                                            <input type="text" min="0" name="noc_4"
                                                class="border-0 footer_field w-100">
                                        </td>
                                        <td class="small_text">
                                            <input type="text" min="0" name="an_4"
                                                class="border-0 footer_field w-100">
                                        </td>
                                        <td class="small_text">
                                            <input type="checkbox" min="0" name="p_4"
                                                class="border-0 footer_field w-100">
                                        </td>
                                        <td class="small_text">
                                            <input type="checkbox" min="0" name="cr_4"
                                                class="border-0 footer_field w-100">
                                        </td>
                                        <td class="small_text">
                                            <input type="checkbox" min="0" name="j_4"
                                                class="border-0 footer_field w-100">
                                        </td>

                                        <td class="small_text">
                                            <div class=" ">
                                                <div class="d-flex "><input type="text" min="0"
                                                        name="dob_4" class="border-0 footer_field w-100"> </div>
                                            </div>
                                        </td>
                                        <td class="small_text">
                                            <div class=" ">
                                                <div class="d-flex "><input type="text" min="0"
                                                        name="b_4" class="border-0 footer_field w-100"> </div>
                                            </div>
                                        </td>
                                        <td class="small_text">
                                            <div class=" ">
                                                <div class="d-flex "><input type="text" min="0"
                                                        name="mmpr_4" class="border-0 footer_field w-100"> </div>
                                            </div>
                                        </td>
                                        <td class="small_text">
                                            <div class=" ">
                                                <div class="d-flex "><input type="text" min="0"
                                                        name="ppi_4" class="border-0 footer_field w-100"> </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="small_text">
                                            <input type="text" min="0" name="noc_5"
                                                class="border-0 footer_field w-100">
                                        </td>
                                        <td class="small_text">
                                            <input type="text" min="0" name="an_5"
                                                class="border-0 footer_field w-100">
                                        </td>
                                        <td class="small_text">
                                            <input type="checkbox" min="0" name="p_5"
                                                class="border-0 footer_field w-100">
                                        </td>
                                        <td class="small_text">
                                            <input type="checkbox" min="0" name="cr_5"
                                                class="border-0 footer_field w-100">
                                        </td>
                                        <td class="small_text">
                                            <input type="checkbox" min="0" name="j_5"
                                                class="border-0 footer_field w-100">
                                        </td>

                                        <td class="small_text">
                                            <div class=" ">
                                                <div class="d-flex "><input type="text" min="0"
                                                        name="dob_5" class="border-0 footer_field w-100"> </div>
                                            </div>
                                        </td>
                                        <td class="small_text">
                                            <div class=" ">
                                                <div class="d-flex "><input type="text" min="0"
                                                        name="b_5" class="border-0 footer_field w-100"> </div>
                                            </div>
                                        </td>
                                        <td class="small_text">
                                            <div class=" ">
                                                <div class="d-flex "><input type="text" min="0"
                                                        name="mmpr_5" class="border-0 footer_field w-100"> </div>
                                            </div>
                                        </td>
                                        <td class="small_text">
                                            <div class=" ">
                                                <div class="d-flex "><input type="text" min="0"
                                                        name="ppi_5" class="border-0 footer_field w-100"> </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="small_text">
                                            <input type="text" min="0" name="noc_6"
                                                class="border-0 footer_field w-100">
                                        </td>
                                        <td class="small_text">
                                            <input type="text" min="0" name="an_6"
                                                class="border-0 footer_field w-100">
                                        </td>
                                        <td class="small_text">
                                            <input type="checkbox" min="0" name="p_6"
                                                class="border-0 footer_field w-100">
                                        </td>
                                        <td class="small_text">
                                            <input type="checkbox" min="0" name="cr_6"
                                                class="border-0 footer_field w-100">
                                        </td>
                                        <td class="small_text">
                                            <input type="checkbox" min="0" name="j_6"
                                                class="border-0 footer_field w-100">
                                        </td>

                                        <td class="small_text">
                                            <div class=" ">
                                                <div class="d-flex "><input type="text" min="0"
                                                        name="dob_6" class="border-0 footer_field w-100"> </div>
                                            </div>
                                        </td>
                                        <td class="small_text">
                                            <div class=" ">
                                                <div class="d-flex "><input type="text" min="0"
                                                        name="b_6" class="border-0 footer_field w-100"> </div>
                                            </div>
                                        </td>
                                        <td class="small_text">
                                            <div class=" ">
                                                <div class="d-flex "><input type="text" min="0"
                                                        name="mmpr_6" class="border-0 footer_field w-100"> </div>
                                            </div>
                                        </td>
                                        <td class="small_text">
                                            <div class=" ">
                                                <div class="d-flex "><input type="text" min="0"
                                                        name="ppi_6" class="border-0 footer_field w-100"> </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="small_text">
                                            <input type="text" min="0" name="noc_7"
                                                class="border-0 footer_field w-100">
                                        </td>
                                        <td class="small_text">
                                            <input type="text" min="0" name="an_7"
                                                class="border-0 footer_field w-100">
                                        </td>
                                        <td class="small_text">
                                            <input type="checkbox" min="0" name="p_7"
                                                class="border-0 footer_field w-100">
                                        </td>
                                        <td class="small_text">
                                            <input type="checkbox" min="0" name="cr_7"
                                                class="border-0 footer_field w-100">
                                        </td>
                                        <td class="small_text">
                                            <input type="checkbox" min="0" name="j_7"
                                                class="border-0 footer_field w-100">
                                        </td>

                                        <td class="small_text">
                                            <div class=" ">
                                                <div class="d-flex "><input type="text" min="0"
                                                        name="dob_7" class="border-0 footer_field w-100"> </div>
                                            </div>
                                        </td>
                                        <td class="small_text">
                                            <div class=" ">
                                                <div class="d-flex "><input type="text" min="0"
                                                        name="b_7" class="border-0 footer_field w-100"> </div>
                                            </div>
                                        </td>
                                        <td class="small_text">
                                            <div class=" ">
                                                <div class="d-flex "><input type="text" min="0"
                                                        name="mmpr_7" class="border-0 footer_field w-100"> </div>
                                            </div>
                                        </td>
                                        <td class="small_text">
                                            <div class=" ">
                                                <div class="d-flex "><input type="text" min="0"
                                                        name="ppi_7" class="border-0 footer_field w-100"> </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="small_text">
                                            <input type="text" min="0" name="noc_8"
                                                class="border-0 footer_field w-100">
                                        </td>
                                        <td class="small_text">
                                            <input type="text" min="0" name="an_8"
                                                class="border-0 footer_field w-100">
                                        </td>
                                        <td class="small_text">
                                            <input type="checkbox" min="0" name="p_8"
                                                class="border-0 footer_field w-100">
                                        </td>
                                        <td class="small_text">
                                            <input type="checkbox" min="0" name="cr_8"
                                                class="border-0 footer_field w-100">
                                        </td>
                                        <td class="small_text">
                                            <input type="checkbox" min="0" name="j_8"
                                                class="border-0 footer_field w-100">
                                        </td>

                                        <td class="small_text">
                                            <div class=" ">
                                                <div class="d-flex "><input type="text" min="0"
                                                        name="dob_8" class="border-0 footer_field w-100"> </div>
                                            </div>
                                        </td>
                                        <td class="small_text">
                                            <div class=" ">
                                                <div class="d-flex "><input type="text" min="0"
                                                        name="b_8" class="border-0 footer_field w-100"> </div>
                                            </div>
                                        </td>
                                        <td class="small_text">
                                            <div class=" ">
                                                <div class="d-flex "><input type="text" min="0"
                                                        name="mmpr_8" class="border-0 footer_field w-100"> </div>
                                            </div>
                                        </td>
                                        <td class="small_text">
                                            <div class=" ">
                                                <div class="d-flex "><input type="text" min="0"
                                                        name="ppi_8" class="border-0 footer_field w-100"> </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="small_text">
                                            <input type="text" min="0" name="noc_9"
                                                class="border-0 footer_field w-100">
                                        </td>
                                        <td class="small_text">
                                            <input type="text" min="0" name="an-9"
                                                class="border-0 footer_field w-100">
                                        </td>
                                        <td class="small_text">
                                            <input type="checkbox" min="0" name="p_9"
                                                class="border-0 footer_field w-100">
                                        </td>
                                        <td class="small_text">
                                            <input type="checkbox" min="0" name="cr_9"
                                                class="border-0 footer_field w-100">
                                        </td>
                                        <td class="small_text">
                                            <input type="checkbox" min="0" name="j_9"
                                                class="border-0 footer_field w-100">
                                        </td>

                                        <td class="small_text">
                                            <div class=" ">
                                                <div class="d-flex "><input type="text" min="0"
                                                        name="dob_9" class="border-0 footer_field w-100"> </div>
                                            </div>
                                        </td>
                                        <td class="small_text">
                                            <div class=" ">
                                                <div class="d-flex "><input type="text" min="0"
                                                        name="b_9" class="border-0 footer_field w-100"> </div>
                                            </div>
                                        </td>
                                        <td class="small_text">
                                            <div class=" ">
                                                <div class="d-flex "><input type="text" min="0"
                                                        name="mmpr_9" class="border-0 footer_field w-100"> </div>
                                            </div>
                                        </td>
                                        <td class="small_text">
                                            <div class=" ">
                                                <div class="d-flex "><input type="text" min="0"
                                                        name="ppi_9" class="border-0 footer_field w-100"> </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="small_text">
                                            <input type="text" min="0" name="noc_10"
                                                class="border-0 footer_field w-100">
                                        </td>
                                        <td class="small_text">
                                            <input type="text" min="0" name="an_10"
                                                class="border-0 footer_field w-100">
                                        </td>
                                        <td class="small_text">
                                            <input type="checkbox" min="0" name="p_10"
                                                class="border-0 footer_field w-100">
                                        </td>
                                        <td class="small_text">
                                            <input type="checkbox" min="0" name="cr_10"
                                                class="border-0 footer_field w-100">
                                        </td>
                                        <td class="small_text">
                                            <input type="checkbox" min="0" name="j_10"
                                                class="border-0 footer_field w-100">
                                        </td>

                                        <td class="small_text">
                                            <div class=" ">
                                                <div class="d-flex "><input type="text" min="0"
                                                        name="dob_10" class="border-0 footer_field w-100"> </div>
                                            </div>
                                        </td>
                                        <td class="small_text">
                                            <div class=" ">
                                                <div class="d-flex "><input type="text" min="0"
                                                        name="b_10" class="border-0 footer_field w-100"> </div>
                                            </div>
                                        </td>
                                        <td class="small_text">
                                            <div class=" ">
                                                <div class="d-flex "><input type="text" min="0"
                                                        name="mmpr_10" class="border-0 footer_field w-100"> </div>
                                            </div>
                                        </td>
                                        <td class="small_text">
                                            <div class=" ">
                                                <div class="d-flex "><input type="text" min="0"
                                                        name="ppi_10" class="border-0 footer_field w-100"> </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="small_text">
                                            <input type="text" min="0" name="noc_11"
                                                class="border-0 footer_field w-100">
                                        </td>
                                        <td class="small_text">
                                            <input type="text" min="0" name="an_11"
                                                class="border-0 footer_field w-100">
                                        </td>
                                        <td class="small_text">
                                            <input type="checkbox" min="0" name="p_11"
                                                class="border-0 footer_field w-100">
                                        </td>
                                        <td class="small_text">
                                            <input type="checkbox" min="0" name="cr_11"
                                                class="border-0 footer_field w-100">
                                        </td>
                                        <td class="small_text">
                                            <input type="checkbox" min="0" name="j_11"
                                                class="border-0 footer_field w-100">
                                        </td>

                                        <td class="small_text">
                                            <div class=" ">
                                                <div class="d-flex "><input type="text" min="0"
                                                        name="dob_11" class="border-0 footer_field w-100"> </div>
                                            </div>
                                        </td>
                                        <td class="small_text">
                                            <div class=" ">
                                                <div class="d-flex "><input type="text" min="0"
                                                        name="b_3" class="border-0 footer_field w-100"> </div>
                                            </div>
                                        </td>
                                        <td class="small_text">
                                            <div class=" ">
                                                <div class="d-flex "><input type="text" min="0"
                                                        name="mmpr_11" class="border-0 footer_field w-100"> </div>
                                            </div>
                                        </td>
                                        <td class="small_text">
                                            <div class=" ">
                                                <div class="d-flex "><input type="text" min="0"
                                                        name="ppi_11" class="border-0 footer_field w-100"> </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="small_text">
                                            <input type="text" min="0" name="noc_12"
                                                class="border-0 footer_field w-100">
                                        </td>
                                        <td class="small_text">
                                            <input type="text" min="0" name="an_12"
                                                class="border-0 footer_field w-100">
                                        </td>
                                        <td class="small_text">
                                            <input type="checkbox" min="0" name="p_12"
                                                class="border-0 footer_field w-100">
                                        </td>
                                        <td class="small_text">
                                            <input type="checkbox" min="0" name="cr_12"
                                                class="border-0 footer_field w-100">
                                        </td>
                                        <td class="small_text">
                                            <input type="checkbox" min="0" name="j_12"
                                                class="border-0 footer_field w-100">
                                        </td>

                                        <td class="small_text">
                                            <div class=" ">
                                                <div class="d-flex "><input type="text" min="0"
                                                        name="dob_12" class="border-0 footer_field w-100"> </div>
                                            </div>
                                        </td>
                                        <td class="small_text">
                                            <div class=" ">
                                                <div class="d-flex "><input type="text" min="0"
                                                        name="b_12" class="border-0 footer_field w-100"> </div>
                                            </div>
                                        </td>
                                        <td class="small_text">
                                            <div class=" ">
                                                <div class="d-flex "><input type="text" min="0"
                                                        name="mmpr_12" class="border-0 footer_field w-100"> </div>
                                            </div>
                                        </td>
                                        <td class="small_text">
                                            <div class=" ">
                                                <div class="d-flex "><input type="text" min="0"
                                                        name="ppi_12" class="border-0 footer_field w-100"> </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="bg-secondary small_text " colspan="6" rowspan="6">
                                            Unsecured Debt Balance</td>
                                        <td class="small_text" rowspan="6">
                                            <div class=" ">
                                                <div class="d-flex ">$<input type="text" min="0"
                                                        name="udb_1" class="border-0 footer_field w-100"> </div>
                                            </div>
                                        </td>
                                        <td class="small_text " rowspan="6">
                                            <div class=" ">
                                                <div class="d-flex ">$<input type="text" min="0"
                                                        name="udb_2" class="border-0 footer_field w-100"> </div>
                                            </div>
                                        </td>
                                        <td class="small_text border-none">
                                            <p>→Total Minimum Monthly Payment</p>
                                        </td>

                                    </tr>






                                </tbody>
                            </table>


                            <h1 class="text-center mt-5">
                                SWORN FINANCIAL STATEMENT SUMMARY (INCOME/EXPENSES)
                            </h1>

                            <div class="row mt-4">
                                <div class="col-lg-9 fw-bold">
                                    <p>Total Income <small class="fw-normal">(from Page 1)</small></p>
                                    <p>Total Monthly Deductions <small class="fw-normal">(from Page 2)</small></p>
                                    <p class="ms-5">Total Monthly Net Income (A minus B)</p>
                                    <p>Total Monthly Expenses <small class="fw-normal">(from Page 3)</small></p>
                                    <p>Total Minimum Monthly Payment Required - Debts Unsecured <small
                                            class="fw-normal">(from Page 4)</small></p>
                                    <p class="ms-5">Total Monthly Expenses and Payments (C plus D)</p>
                                </div>
                                <div class="col-lg-2">
                                    <div class=" ">
                                        <div class="d-flex ">$<input type="text" min="0"
                                                name="ti_p1" class="border-0 border-bottom footer_field w-100">
                                        </div>
                                    </div>
                                    <div class=" ">
                                        <div class="d-flex ">$<input type="text" min="0"
                                                name="tmd_p2" class="border-0 border-bottom footer_field w-100">
                                        </div>
                                    </div>
                                    <div class=" ">
                                        <div class="d-flex ms-5">$<input type="text" min="0"
                                                name="tmni_ab" class="border-0 border-bottom footer_field w-100">
                                        </div>
                                    </div>
                                    <div class=" ">
                                        <div class="d-flex ">$<input type="text" min="0"
                                                name="tme_p3" class="border-0 border-bottom footer_field w-100">
                                        </div>
                                    </div>
                                    <div class=" ">
                                        <div class="d-flex ">$<input type="text" min="0"
                                                name="tmpr_p4" class="border-0 border-bottom footer_field w-100">
                                        </div>
                                    </div>
                                    <div class=" ">
                                        <div class="d-flex ms-5">$<input type="text" min="0"
                                                name="tmep_cd" class="border-0 border-bottom footer_field w-100">
                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-1   align-self-center">
                                    <p>A</p>
                                    <p>B</p>
                                    <pre> </pre>
                                    <p>C</p>
                                    <p>D</p>
                                    <pre> </pre>
                                </div>

                            </div>

                            <div class="border d-flex px-4 pt-2">
                                <div class="col-lg-9">
                                    <p class="fw-bold">Net Excess or Shortfall <span class="small">(Monthly Net
                                            Income less Monthly Expenses and Payments)</span></p>
                                </div>
                                <div class="col-lg-1">(+/-)</div>
                                <div class="col-lg-2">
                                    <div class=" ">
                                        <div class="d-flex ms-5">$<input type="text" min="0"
                                                name="nes_payments"
                                                class="border-0 border-bottom footer_field w-100">
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                        @include('layouts.footer11', ['page' => 4])
                        {{-- <div class="d-flex gap-3 py-auto pb-3  ">
                            <div class="my-auto"> <a href="#section_first" ><i class="fas fa-chevron-left"></i><i class="fas fa-chevron-left"></i></a></div>
                            <div class="my-auto ps-2"> <a href="#section_three" ><i class="fas fa-chevron-left"></i></a> </div>
                            <div>
                                <select class="form-select w-100 sectionSelect">
                                    <option value="#section_first" >1</option>
                                    <option value="#section_two">2</option>
                                    <option value="#section_three" >3</option>
                                    <option value="#section_four" selected>4</option>
                                    <option value="#section_five" >5</option>
                                    <option value="#section_last" >6</option>
                                </select>
                            </div>
                            <div class="my-auto"> <a href="#section_five" > <i class="fas fa-chevron-right"></i></a>  </div>
                            <div class="my-auto ps-2" ><a href="#section_last" > <i class="fas fa-chevron-right"></i><i class="fas fa-chevron-right"></i> </a></div>
                        </div> --}}
                    </div>
                </section>

                {{-- section_five --}}
                <section class="section_area pt-5" id="section_five">
                    <div class="row px-lg-5 px-2 py-2 pt-0">

                        <div class="fw-bold">
                            5. <span class="ps-5">Assets</span>
                        </div>
                        <div class="fw-bold mt-2">
                            You MUST disclose all assets correctly. By indicating “None”, you are stating affirmatively
                            that you or the other party do not have assets in that category. Please attach additional
                            copies of pages 5 & 6 to identify your assets, if necessary.
                        </div>

                        <div class="fw-bold mt-4">If the parties are married, <span class="fw-normal"> check under
                                the heading Joint (J) all assets acquired during the marriage but not by gift or
                                inheritance. Under the headings of Petitioner (P) or Co-Petitioner/Respondent (C/R),
                                check assets owned before this marriage and assets acquired by gift or inheritance.
                            </span></div>

                        <div class="fw-bold mt-4">If the parties were NEVER married to each other or are using this
                            form to modify child support, <span class="fw-normal">list all of each party’s assets
                                under the headings of Petitioner (P) or Co-Petitioner/Respondent (C/R).
                            </span></div>

                        <div class="fw-bold mt-4 text-center fs-5">"P" = Petitioner, "C/R” = Co-Petitioner or
                            Respondent, "J" = Joint.</div>


                        <div class="table-responsive pt-3">
                            <table class="table-bordered border border-2 table  ">
                                <tbody>
                                    <tr>
                                        <td class="bg-secondary small_text fw-bold">A. Real Estate (Address or
                                            Property Description and Name of Creditor/ Lender)
                                            <div class="small_text d-flex">
                                                <input type="checkbox" min="0" name="a_re_c"
                                                    class="border-0 footer_field ">None
                                            </div>
                                        </td>
                                        <td class="bg-secondary small_text">P</td>
                                        <td class="bg-secondary small_text">C/R</td>
                                        <td class="bg-secondary small_text">J</td>
                                        <td class="bg-secondary small_text">Amount Owed</td>
                                        <td class="bg-secondary small_text">Estimated Value as of Today. Value = what
                                            you could sell it for in its current condition.</td>
                                        <td class="bg-secondary small_text">Net Value/Equity</td>
                                    </tr>

                                    <tr>
                                        <td class="small_text">
                                            <input type="text" min="0" name="a_re_v1"
                                                class="border-0 footer_field w-100">
                                        </td>
                                        <td class="small_text">
                                            <input type="checkbox" min="0" name="a_p_1"
                                                class="border-0 footer_field w-100">
                                        </td>
                                        <td class="small_text">
                                            <input type="checkbox" min="0" name="a_cr_1"
                                                class="border-0 footer_field w-100">
                                        </td>
                                        <td class="small_text">
                                            <input type="checkbox" min="0" name="a_j_1"
                                                class="border-0 footer_field w-100">
                                        </td>

                                        <td class="small_text">
                                            <div class=" ">
                                                <div class="d-flex ">$<input type="text" min="0"
                                                        name="a_ao_1" class="border-0 footer_field w-100"> </div>
                                            </div>
                                        </td>
                                        <td class="small_text">
                                            <div class=" ">
                                                <div class="d-flex ">$<input type="text" min="0"
                                                        name="a_ev_1" class="border-0 footer_field w-100"> </div>
                                            </div>
                                        </td>
                                        <td class="small_text">
                                            <div class=" ">
                                                <div class="d-flex ">$<input type="text" min="0"
                                                        name="a_nve_1" class="border-0 footer_field w-100"> </div>
                                            </div>
                                        </td>
                                    </tr>


                                    <tr>
                                        <td class="small_text">
                                            <input type="text" min="0" name="a_re_v2"
                                                class="border-0 footer_field w-100">
                                        </td>
                                        <td class="small_text">
                                            <input type="checkbox" min="0" name="a_p_2"
                                                class="border-0 footer_field w-100">
                                        </td>
                                        <td class="small_text">
                                            <input type="checkbox" min="0" name="a_cr_2"
                                                class="border-0 footer_field w-100">
                                        </td>
                                        <td class="small_text">
                                            <input type="checkbox" min="0" name="a_j_2"
                                                class="border-0 footer_field w-100">
                                        </td>

                                        <td class="small_text">
                                            <div class=" ">
                                                <div class="d-flex "><input type="text" min="0"
                                                        name="a_ao_2" class="border-0 footer_field w-100"> </div>
                                            </div>
                                        </td>
                                        <td class="small_text">
                                            <div class=" ">
                                                <div class="d-flex "><input type="text" min="0"
                                                        name="a_ev_2" class="border-0 footer_field w-100"> </div>
                                            </div>
                                        </td>
                                        <td class="small_text">
                                            <div class=" ">
                                                <div class="d-flex "><input type="text" min="0"
                                                        name="a_nev_2" class="border-0 footer_field w-100"> </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="4" class="text-end bg-secondary pe-2">Total </td>

                                        <td class="small_text">
                                            <div class=" ">
                                                <div class="d-flex ">$<input type="text" min="0"
                                                        name="a_t_ao" class="border-0 footer_field w-100"> </div>
                                            </div>
                                        </td>
                                        <td class="small_text">
                                            <div class=" ">
                                                <div class="d-flex ">$<input type="text" min="0"
                                                        name="a_t_ev" class="border-0 footer_field w-100"> </div>
                                            </div>
                                        </td>
                                        <td class="small_text">
                                            <div class=" ">
                                                <div class="d-flex ">$<input type="text" min="0"
                                                        name="a_t_nev" class="border-0 footer_field w-100"> </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="bg-s small_text bg-secondary fw-bold">B. Motor Vehicles &
                                            Recreation Vehicles Including Motorcycles, ATV’s,
                                            Boats, etc.) (Year, Make, Model) (Name of Creditor/Lender)
                                            <div class="small_text d-flex">
                                                <input type="checkbox" min="0" name="b_mv_c"
                                                    class="border-0 footer_field ">None
                                            </div>
                                        </td>
                                        <td class="bg-secondary small_text">P</td>
                                        <td class="bg-secondary small_text">C/R</td>
                                        <td class="bg-secondary small_text">J</td>
                                        <td class="bg-secondary small_text">Amount Owed</td>
                                        <td class="bg-secondary small_text">Estimated Value as of Today. Value = what
                                            you could sell it for in its current condition.</td>
                                        <td class="bg-secondary small_text">Net Value/Equity</td>
                                    </tr>
                                    <tr>
                                        <td class="small_text">
                                            <input type="text" min="0" name="b_mv1"
                                                class="border-0 footer_field w-100">
                                        </td>
                                        <td class="small_text">
                                            <input type="checkbox" min="0" name="b_p1"
                                                class="border-0 footer_field w-100">
                                        </td>
                                        <td class="small_text">
                                            <input type="checkbox" min="0" name="b_cr1"
                                                class="border-0 footer_field w-100">
                                        </td>
                                        <td class="small_text">
                                            <input type="checkbox" min="0" name="b_j1"
                                                class="border-0 footer_field w-100">
                                        </td>

                                        <td class="small_text">
                                            <div class=" ">
                                                <div class="d-flex "><input type="text" min="0"
                                                        name="b_aw1" class="border-0 footer_field w-100"> </div>
                                            </div>
                                        </td>
                                        <td class="small_text">
                                            <div class=" ">
                                                <div class="d-flex "><input type="text" min="0"
                                                        name="b_ev1" class="border-0 footer_field w-100"> </div>
                                            </div>
                                        </td>
                                        <td class="small_text">
                                            <div class=" ">
                                                <div class="d-flex "><input type="text" min="0"
                                                        name="b_nv1" class="border-0 footer_field w-100"> </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="small_text">
                                            <input type="text" min="0" name="b_mv2"
                                                class="border-0 footer_field w-100">
                                        </td>
                                        <td class="small_text">
                                            <input type="checkbox" min="0" name="b_p2"
                                                class="border-0 footer_field w-100">
                                        </td>
                                        <td class="small_text">
                                            <input type="checkbox" min="0" name="b_cr2"
                                                class="border-0 footer_field w-100">
                                        </td>
                                        <td class="small_text">
                                            <input type="checkbox" min="0" name="b_j2"
                                                class="border-0 footer_field w-100">
                                        </td>

                                        <td class="small_text">
                                            <div class=" ">
                                                <div class="d-flex "><input type="text" min="0"
                                                        name="b_aw2" class="border-0 footer_field w-100"> </div>
                                            </div>
                                        </td>
                                        <td class="small_text">
                                            <div class=" ">
                                                <div class="d-flex "><input type="text" min="0"
                                                        name="b_ev2" class="border-0 footer_field w-100"> </div>
                                            </div>
                                        </td>
                                        <td class="small_text">
                                            <div class=" ">
                                                <div class="d-flex "><input type="text" min="0"
                                                        name="b_nv2" class="border-0 footer_field w-100"> </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="small_text">
                                            <input type="text" min="0" name="b_mv3"
                                                class="border-0 footer_field w-100">
                                        </td>
                                        <td class="small_text">
                                            <input type="checkbox" min="0" name="b_p3"
                                                class="border-0 footer_field w-100">
                                        </td>
                                        <td class="small_text">
                                            <input type="checkbox" min="0" name="b_cr3"
                                                class="border-0 footer_field w-100">
                                        </td>
                                        <td class="small_text">
                                            <input type="checkbox" min="0" name="b_j3"
                                                class="border-0 footer_field w-100">
                                        </td>

                                        <td class="small_text">
                                            <div class=" ">
                                                <div class="d-flex "><input type="text" min="0"
                                                        name="b_aw3" class="border-0 footer_field w-100"> </div>
                                            </div>
                                        </td>
                                        <td class="small_text">
                                            <div class=" ">
                                                <div class="d-flex "><input type="text" min="0"
                                                        name="b_ev3" class="border-0 footer_field w-100"> </div>
                                            </div>
                                        </td>
                                        <td class="small_text">
                                            <div class=" ">
                                                <div class="d-flex "><input type="text" min="0"
                                                        name="b_nv3" class="border-0 footer_field w-100"> </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="small_text">
                                            <input type="text" min="0" name="b_mv4"
                                                class="border-0 footer_field w-100">
                                        </td>
                                        <td class="small_text">
                                            <input type="checkbox" min="0" name="b_p4"
                                                class="border-0 footer_field w-100">
                                        </td>
                                        <td class="small_text">
                                            <input type="checkbox" min="0" name="b_cr4"
                                                class="border-0 footer_field w-100">
                                        </td>
                                        <td class="small_text">
                                            <input type="checkbox" min="0" name="b_j4"
                                                class="border-0 footer_field w-100">
                                        </td>

                                        <td class="small_text">
                                            <div class=" ">
                                                <div class="d-flex "><input type="text" min="0"
                                                        name="b_aw4" class="border-0 footer_field w-100"> </div>
                                            </div>
                                        </td>
                                        <td class="small_text">
                                            <div class=" ">
                                                <div class="d-flex "><input type="text" min="0"
                                                        name="b_ev4" class="border-0 footer_field w-100"> </div>
                                            </div>
                                        </td>
                                        <td class="small_text">
                                            <div class=" ">
                                                <div class="d-flex "><input type="text" min="0"
                                                        name="b_nv4" class="border-0 footer_field w-100"> </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="4" class="text-end bg-secondary pe-2">Total </td>

                                        <td class="small_text">
                                            <div class=" ">
                                                <div class="d-flex ">$<input type="text" min="0"
                                                        name="b_t_aw" class="border-0 footer_field w-100"> </div>
                                            </div>
                                        </td>
                                        <td class="small_text">
                                            <div class=" ">
                                                <div class="d-flex ">$<input type="text" min="0"
                                                        name="b_t_ev" class="border-0 footer_field w-100"> </div>
                                            </div>
                                        </td>
                                        <td class="small_text">
                                            <div class=" ">
                                                <div class="d-flex ">$<input type="text" min="0"
                                                        name="b_t_nv" class="border-0 footer_field w-100"> </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="bg-s small_text bg-secondary fw-bold">C. Cash on Hand, Bank,
                                            Checking, Savings, or Health Accounts (Name of Bank or Financial
                                            Institution)
                                            <div class="small_text d-flex">
                                                <input type="checkbox" min="0" name="c_mv_c"
                                                    class="border-0 footer_field ">None
                                            </div>
                                        </td>
                                        <td class="bg-secondary small_text">P</td>
                                        <td class="bg-secondary small_text">C/R</td>
                                        <td class="bg-secondary small_text">J</td>
                                        <td class="bg-secondary small_text">Type of Account </td>
                                        <td class="bg-secondary small_text">EAccount # (last 4-digits only)</td>
                                        <td class="bg-secondary small_text">Balance as of Today</td>
                                    </tr>
                                    <tr>
                                        <td class="small_text">
                                            <input type="text" min="0" name="c_mv1"
                                                class="border-0 footer_field w-100">
                                        </td>
                                        <td class="small_text">
                                            <input type="checkbox" min="0" name="c_p1"
                                                class="border-0 footer_field w-100">
                                        </td>
                                        <td class="small_text">
                                            <input type="checkbox" min="0" name="c_cr1"
                                                class="border-0 footer_field w-100">
                                        </td>
                                        <td class="small_text">
                                            <input type="checkbox" min="0" name="c_j1"
                                                class="border-0 footer_field w-100">
                                        </td>

                                        <td class="small_text">
                                            <div class=" ">
                                                <div class="d-flex "><input type="text" min="0"
                                                        name="c_toa1" class="border-0 footer_field w-100"> </div>
                                            </div>
                                        </td>
                                        <td class="small_text">
                                            <div class=" ">
                                                <div class="d-flex "><input type="text" min="0"
                                                        name="c_ea1" class="border-0 footer_field w-100"> </div>
                                            </div>
                                        </td>
                                        <td class="small_text">
                                            <div class=" ">
                                                <div class="d-flex ">$<input type="text" min="0"
                                                        name="c_bof1" class="border-0 footer_field w-100"> </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="small_text">
                                            <input type="text" min="0" name="c_mv2"
                                                class="border-0 footer_field w-100">
                                        </td>
                                        <td class="small_text">
                                            <input type="checkbox" min="0" name="c_p2"
                                                class="border-0 footer_field w-100">
                                        </td>
                                        <td class="small_text">
                                            <input type="checkbox" min="0" name="c_cr2"
                                                class="border-0 footer_field w-100">
                                        </td>
                                        <td class="small_text">
                                            <input type="checkbox" min="0" name="c_j2"
                                                class="border-0 footer_field w-100">
                                        </td>

                                        <td class="small_text">
                                            <div class=" ">
                                                <div class="d-flex "><input type="text" min="0"
                                                        name="c_toa2" class="border-0 footer_field w-100"> </div>
                                            </div>
                                        </td>
                                        <td class="small_text">
                                            <div class=" ">
                                                <div class="d-flex "><input type="text" min="0"
                                                        name="c_ea2" class="border-0 footer_field w-100"> </div>
                                            </div>
                                        </td>
                                        <td class="small_text">
                                            <div class=" ">
                                                <div class="d-flex "><input type="text" min="0"
                                                        name="c_bof2" class="border-0 footer_field w-100"> </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="small_text">
                                            <input type="text" min="0" name="c_mv3"
                                                class="border-0 footer_field w-100">
                                        </td>
                                        <td class="small_text">
                                            <input type="checkbox" min="0" name="c_p3"
                                                class="border-0 footer_field w-100">
                                        </td>
                                        <td class="small_text">
                                            <input type="checkbox" min="0" name="c_cr3"
                                                class="border-0 footer_field w-100">
                                        </td>
                                        <td class="small_text">
                                            <input type="checkbox" min="0" name="c_j3"
                                                class="border-0 footer_field w-100">
                                        </td>

                                        <td class="small_text">
                                            <div class=" ">
                                                <div class="d-flex "><input type="text" min="0"
                                                        name="c_toa3" class="border-0 footer_field w-100"> </div>
                                            </div>
                                        </td>
                                        <td class="small_text">
                                            <div class=" ">
                                                <div class="d-flex "><input type="text" min="0"
                                                        name="c_ea3" class="border-0 footer_field w-100"> </div>
                                            </div>
                                        </td>
                                        <td class="small_text">
                                            <div class=" ">
                                                <div class="d-flex "><input type="text" min="0"
                                                        name="c_bof3" class="border-0 footer_field w-100"> </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="small_text">
                                            <input type="text" min="0" name="c_mv4"
                                                class="border-0 footer_field w-100">
                                        </td>
                                        <td class="small_text">
                                            <input type="checkbox" min="0" name="c_p4"
                                                class="border-0 footer_field w-100">
                                        </td>
                                        <td class="small_text">
                                            <input type="checkbox" min="0" name="c_cr4"
                                                class="border-0 footer_field w-100">
                                        </td>
                                        <td class="small_text">
                                            <input type="checkbox" min="0" name="c_j4"
                                                class="border-0 footer_field w-100">
                                        </td>

                                        <td class="small_text">
                                            <div class=" ">
                                                <div class="d-flex "><input type="text" min="0"
                                                        name="c_toa4" class="border-0 footer_field w-100"> </div>
                                            </div>
                                        </td>
                                        <td class="small_text">
                                            <div class=" ">
                                                <div class="d-flex "><input type="text" min="0"
                                                        name="c_ea4" class="border-0 footer_field w-100"> </div>
                                            </div>
                                        </td>
                                        <td class="small_text">
                                            <div class=" ">
                                                <div class="d-flex "><input type="text" min="0"
                                                        name="c_bof4" class="border-0 footer_field w-100"> </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="6" class="text-end bg-secondary pe-2">Total </td>

                                        <td class="small_text">
                                            <div class=" ">
                                                <div class="d-flex ">$<input type="text" min="0"
                                                        name="c_t_bof" class="border-0 footer_field w-100"> </div>
                                            </div>
                                        </td>

                                    </tr>

                                    <tr>
                                        <td class="bg-s small_text bg-secondary fw-bold">D. Life Insurance
                                            (Name of Company/Beneficiary)
                                            <div class="small_text d-flex">
                                                <input type="checkbox" min="0" name="d_li_c"
                                                    class="border-0 footer_field ">None
                                            </div>
                                        </td>
                                        <td class="bg-secondary small_text">P</td>
                                        <td class="bg-secondary small_text">C/R</td>
                                        <td class="bg-secondary small_text">J</td>
                                        <td class="bg-secondary small_text">Type of Policy </td>
                                        <td class="bg-secondary small_text">Face Amount of Policy</td>
                                        <td class="bg-secondary small_text">Cash Value today
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="small_text">
                                            <input type="text" min="0" name="d_li1"
                                                class="border-0 footer_field w-100">
                                        </td>
                                        <td class="small_text">
                                            <input type="checkbox" min="0" name="d_p1"
                                                class="border-0 footer_field w-100">
                                        </td>
                                        <td class="small_text">
                                            <input type="checkbox" min="0" name="d_cr1"
                                                class="border-0 footer_field w-100">
                                        </td>
                                        <td class="small_text">
                                            <input type="checkbox" min="0" name="d_j1"
                                                class="border-0 footer_field w-100">
                                        </td>

                                        <td class="small_text">
                                            <div class=" ">
                                                <div class="d-flex "><input type="text" min="0"
                                                        name="d_toa1" class="border-0 footer_field w-100"> </div>
                                            </div>
                                        </td>
                                        <td class="small_text">
                                            <div class=" ">
                                                <div class="d-flex ">$<input type="text" min="0"
                                                        name="d_fap1" class="border-0 footer_field w-100"> </div>
                                            </div>
                                        </td>
                                        <td class="small_text">
                                            <div class=" ">
                                                <div class="d-flex ">$<input type="text" min="0"
                                                        name="d_cvt1" class="border-0 footer_field w-100"> </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="small_text">
                                            <input type="text" min="0" name="d_li2"
                                                class="border-0 footer_field w-100">
                                        </td>
                                        <td class="small_text">
                                            <input type="checkbox" min="0" name="d_p2"
                                                class="border-0 footer_field w-100">
                                        </td>
                                        <td class="small_text">
                                            <input type="checkbox" min="0" name="d_cr2"
                                                class="border-0 footer_field w-100">
                                        </td>
                                        <td class="small_text">
                                            <input type="checkbox" min="0" name="d_j2"
                                                class="border-0 footer_field w-100">
                                        </td>

                                        <td class="small_text">
                                            <div class=" ">
                                                <div class="d-flex "><input type="text" min="0"
                                                        name="d_toa2" class="border-0 footer_field w-100"> </div>
                                            </div>
                                        </td>
                                        <td class="small_text">
                                            <div class=" ">
                                                <div class="d-flex "><input type="text" min="0"
                                                        name="d_fap2" class="border-0 footer_field w-100"> </div>
                                            </div>
                                        </td>
                                        <td class="small_text">
                                            <div class=" ">
                                                <div class="d-flex "><input type="text" min="0"
                                                        name="d_cvt2" class="border-0 footer_field w-100"> </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="small_text">
                                            <input type="text" min="0" name="d_li3"
                                                class="border-0 footer_field w-100">
                                        </td>
                                        <td class="small_text">
                                            <input type="checkbox" min="0" name="d_p3"
                                                class="border-0 footer_field w-100">
                                        </td>
                                        <td class="small_text">
                                            <input type="checkbox" min="0" name="d_cr3"
                                                class="border-0 footer_field w-100">
                                        </td>
                                        <td class="small_text">
                                            <input type="checkbox" min="0" name="d_j3"
                                                class="border-0 footer_field w-100">
                                        </td>

                                        <td class="small_text">
                                            <div class=" ">
                                                <div class="d-flex "><input type="text" min="0"
                                                        name="d_toa3" class="border-0 footer_field w-100"> </div>
                                            </div>
                                        </td>
                                        <td class="small_text">
                                            <div class=" ">
                                                <div class="d-flex "><input type="text" min="0"
                                                        name="d_fap3" class="border-0 footer_field w-100"> </div>
                                            </div>
                                        </td>
                                        <td class="small_text">
                                            <div class=" ">
                                                <div class="d-flex "><input type="text" min="0"
                                                        name="d_cvt3" class="border-0 footer_field w-100"> </div>
                                            </div>
                                        </td>
                                    </tr>


                                    <tr>
                                        <td colspan="5" class="text-end bg-secondary pe-2">Total </td>

                                        <td class="small_text">
                                            <div class=" ">
                                                <div class="d-flex ">$<input type="text" min="0"
                                                        name="d_t_fap" class="border-0 footer_field w-100"> </div>
                                            </div>
                                        </td>
                                        <td class="small_text">
                                            <div class=" ">
                                                <div class="d-flex ">$<input type="text" min="0"
                                                        name="d_t_cvt" class="border-0 footer_field w-100"> </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        @include('layouts.footer11', ['page' => 5])

                        {{-- <div class="d-flex gap-3 py-auto pb-3  ">
                            <div class="my-auto"> <a href="#section_first" ><i class="fas fa-chevron-left"></i><i class="fas fa-chevron-left"></i></a></div>
                            <div class="my-auto ps-2"> <a href="#section_four" ><i class="fas fa-chevron-left"></i></a> </div>
                            <div>
                                <select class="form-select w-100 sectionSelect">
                                    <option value="#section_first" >1</option>
                                    <option value="#section_two">2</option>
                                    <option value="#section_three" >3</option>
                                    <option value="#section_four" >4</option>
                                    <option value="#section_five" selected>5</option>
                                    <option value="#section_last" >6</option>
                                </select>
                            </div>
                            <div class="my-auto"> <a href="#section_last" > <i class="fas fa-chevron-right"></i></a>  </div>
                            <div class="my-auto ps-2" ><a href="#section_last" > <i class="fas fa-chevron-right"></i><i class="fas fa-chevron-right"></i> </a></div>
                        </div> --}}
                    </div>
                </section>

                {{-- section_last --}}
                <section class="section_area pt-5" id="section_last">
                    <div class="row px-lg-5 px-2 py-2 pt-0">

                        <div class="table-responsive pt-3">
                            <table class="table-bordered border border-2 table mb-0  ">
                                <tbody>
                                    <tr>
                                        <td class="bg-secondary small_text fw-bold">E. Furniture, Household Goods, and
                                            Other Personal Property, i.e. Jewelry, Antiques, Collectibles, Artwork,
                                            Power Tools, etc. Identify Items and report in total.

                                            <div class="small_text d-flex">
                                                <input type="checkbox" min="0" name="e_fh_c"
                                                    class="border-0 footer_field ">None
                                            </div>
                                        </td>
                                        <td class="bg-secondary small_text">P</td>
                                        <td class="bg-secondary small_text">C/R</td>
                                        <td class="bg-secondary small_text">J</td>
                                        <td class="bg-secondary small_text" colspan="3">Current Possession Held
                                            by

                                        </td>
                                        <td class="bg-secondary small_text">Estimated Value as of Today.
                                            Value = what you could sell it for in its current condition.</td>
                                    </tr>

                                    <tr>
                                        <td class="small_text">
                                            <input type="text" min="0" name="e_fh1"
                                                class="border-0 footer_field w-100">
                                        </td>
                                        <td class="small_text">
                                            <input type="checkbox" min="0" name="e_p1"
                                                class="border-0 footer_field w-100">
                                        </td>
                                        <td class="small_text">
                                            <input type="checkbox" min="0" name="e_cr1"
                                                class="border-0 footer_field w-100">
                                        </td>
                                        <td class="small_text">
                                            <input type="checkbox" min="0" name="e_j1"
                                                class="border-0 footer_field w-100">
                                        </td>
                                        <td class="small_text">
                                            <input type="checkbox" min="0" name="e_cph11"
                                                class="border-0 footer_field w-100">
                                        </td>
                                        <td class="small_text">
                                            <input type="checkbox" min="0" name="e_cph12"
                                                class="border-0 footer_field w-100">
                                        </td>
                                        <td class="small_text">
                                            <input type="checkbox" min="0" name="e_cph13"
                                                class="border-0 footer_field w-100">
                                        </td>


                                        <td class="small_text">
                                            <div class=" ">
                                                <div class="d-flex ">$<input type="text" min="0"
                                                        name="e_ev1" class="border-0 footer_field w-100"> </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="small_text">
                                            <input type="text" min="0" name="e_fh2"
                                                class="border-0 footer_field w-100">
                                        </td>
                                        <td class="small_text">
                                            <input type="checkbox" min="0" name="e_p2"
                                                class="border-0 footer_field w-100">
                                        </td>
                                        <td class="small_text">
                                            <input type="checkbox" min="0" name="e_cr2"
                                                class="border-0 footer_field w-100">
                                        </td>
                                        <td class="small_text">
                                            <input type="checkbox" min="0" name="e_j2"
                                                class="border-0 footer_field w-100">
                                        </td>
                                        <td class="small_text">
                                            <input type="checkbox" min="0" name="e_cph21"
                                                class="border-0 footer_field w-100">
                                        </td>
                                        <td class="small_text">
                                            <input type="checkbox" min="0" name="e_cph22"
                                                class="border-0 footer_field w-100">
                                        </td>
                                        <td class="small_text">
                                            <input type="checkbox" min="0" name="e_cph23"
                                                class="border-0 footer_field w-100">
                                        </td>


                                        <td class="small_text">
                                            <div class=" ">
                                                <div class="d-flex "><input type="text" min="0"
                                                        name="e_ev2" class="border-0 footer_field w-100"> </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="small_text">
                                            <input type="text" min="0" name="e_fh3"
                                                class="border-0 footer_field w-100">
                                        </td>
                                        <td class="small_text">
                                            <input type="checkbox" min="0" name="e_p3"
                                                class="border-0 footer_field w-100">
                                        </td>
                                        <td class="small_text">
                                            <input type="checkbox" min="0" name="e_cr3"
                                                class="border-0 footer_field w-100">
                                        </td>
                                        <td class="small_text">
                                            <input type="checkbox" min="0" name="e_j3"
                                                class="border-0 footer_field w-100">
                                        </td>
                                        <td class="small_text">
                                            <input type="checkbox" min="0" name="e_cph31"
                                                class="border-0 footer_field w-100">
                                        </td>
                                        <td class="small_text">
                                            <input type="checkbox" min="0" name="e_cph32"
                                                class="border-0 footer_field w-100">
                                        </td>
                                        <td class="small_text">
                                            <input type="checkbox" min="0" name="e_cph33"
                                                class="border-0 footer_field w-100">
                                        </td>


                                        <td class="small_text">
                                            <div class=" ">
                                                <div class="d-flex "><input type="text" min="0"
                                                        name="e_ev3" class="border-0 footer_field w-100"> </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="small_text">
                                            <input type="text" min="0" name="e_fh4"
                                                class="border-0 footer_field w-100">
                                        </td>
                                        <td class="small_text">
                                            <input type="checkbox" min="0" name="e_p4"
                                                class="border-0 footer_field w-100">
                                        </td>
                                        <td class="small_text">
                                            <input type="checkbox" min="0" name="e_cr4"
                                                class="border-0 footer_field w-100">
                                        </td>
                                        <td class="small_text">
                                            <input type="checkbox" min="0" name="e_j4"
                                                class="border-0 footer_field w-100">
                                        </td>
                                        <td class="small_text">
                                            <input type="checkbox" min="0" name="e_cph41"
                                                class="border-0 footer_field w-100">
                                        </td>
                                        <td class="small_text">
                                            <input type="checkbox" min="0" name="e_cph42"
                                                class="border-0 footer_field w-100">
                                        </td>
                                        <td class="small_text">
                                            <input type="checkbox" min="0" name="e_cph43"
                                                class="border-0 footer_field w-100">
                                        </td>


                                        <td class="small_text">
                                            <div class=" ">
                                                <div class="d-flex "><input type="text" min="0"
                                                        name="e_ev4" class="border-0 footer_field w-100"> </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="small_text">
                                            <input type="text" min="0" name="e_fh5"
                                                class="border-0 footer_field w-100">
                                        </td>
                                        <td class="small_text">
                                            <input type="checkbox" min="0" name="e_p5"
                                                class="border-0 footer_field w-100">
                                        </td>
                                        <td class="small_text">
                                            <input type="checkbox" min="0" name="e_cv5"
                                                class="border-0 footer_field w-100">
                                        </td>
                                        <td class="small_text">
                                            <input type="checkbox" min="0" name="e_j5"
                                                class="border-0 footer_field w-100">
                                        </td>
                                        <td class="small_text">
                                            <input type="checkbox" min="0" name="e_cph51"
                                                class="border-0 footer_field w-100">
                                        </td>
                                        <td class="small_text">
                                            <input type="checkbox" min="0" name="e_cph52"
                                                class="border-0 footer_field w-100">
                                        </td>
                                        <td class="small_text">
                                            <input type="checkbox" min="0" name="e_cph53"
                                                class="border-0 footer_field w-100">
                                        </td>


                                        <td class="small_text">
                                            <div class=" ">
                                                <div class="d-flex "><input type="text" min="0"
                                                        name="e_ev5" class="border-0 footer_field w-100"> </div>
                                            </div>
                                        </td>
                                    </tr>


                                    <tr>
                                        <td colspan="7" class="text-end bg-secondary pe-2">Total </td>

                                        <td class="small_text">
                                            <div class=" ">
                                                <div class="d-flex pt-1 ">$<input type="text" min="0"
                                                        name="e_t_ev" class="border-0 footer_field w-100"> </div>
                                            </div>
                                        </td>

                                    </tr>

                                    <tr>
                                        <td colspan="6" class="bg-secondary small_text fw-bold">F. Stocks, Bonds,
                                            Mutual Funds, Securities & Investment Accounts
                                            <div class="small_text d-flex">
                                                <input type="checkbox" min="0" name="f_c1"
                                                    class="border-0 footer_field "> None <input type="f_c2"
                                                    min="0" name="blc_1"
                                                    class="border-0 footer_field  ms-4"> If owned please attach JDF
                                                1111-SS.
                                            </div>

                                        </td>
                                        <td class="text-end bg-secondary pe-2 pt-2">Total </td>
                                        <td class="small_text">
                                            <div class=" ">
                                                <div class="d-flex pt-2 ">$<input type="text" min="0"
                                                        name="f_t_ev" class="border-0 footer_field w-100"> </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="6" class="bg-secondary small_text fw-bold">G. Pension,
                                            Profit Sharing, or Retirement Funds
                                            <div class="small_text d-flex">
                                                <input type="checkbox" min="0" name="g_c1"
                                                    class="border-0 footer_field "> None <input type="checkbox"
                                                    min="0" name="g_c2"
                                                    class="border-0 footer_field  ms-4"> If owned please attach JDF
                                                1111-SS.
                                            </div>

                                        </td>
                                        <td class="text-end bg-secondary pe-2 pt-2">Total </td>
                                        <td class="small_text">
                                            <div class=" ">
                                                <div class="d-flex pt-2 ">$<input type="text" min="0"
                                                        name="g_t_ev" class="border-0 footer_field w-100"> </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="9" class="bg-secondary small_text fw-bold">H. Miscellaneous
                                            Assets
                                            <div class="small_text d-flex">
                                                <input type="checkbox" min="0" name="h_check"
                                                    class="border-0 footer_field "> None <span class="ms-5"> If
                                                    you own any of the assets identified below, please check the
                                                    appropriate box and attach JDF 1111-SS to report the value.
                                                </span>
                                            </div>

                                        </td>
                                    </tr>
                                </tbody>
                            </table>


                            <div class="table-responsive ">
                            <table class="table-bordered border border-2 border-top-none table mb-0  ">
                                <tbody>
                                    <tr>
                                        <td class=" small_text ">
                                            <div class="small_text d-flex">
                                                <input type="checkbox" min="0" name="b_interests"
                                                    class="border-0 footer_field "> Business Interests
                                            </div>

                                        </td>
                                        <td class=" small_text ">
                                            <div class="small_text d-flex">
                                                <input type="checkbox" min="0" name="s_options"
                                                    class="border-0 footer_field "> Stock Options
                                            </div>

                                        </td>
                                        <td class=" small_text ">
                                            <div class="small_text d-flex">
                                                <input type="checkbox" min="0" name="money_loans"
                                                    class="border-0 footer_field "> Money/Loans owed to you
                                            </div>

                                        </td>
                                        <td class=" small_text ">
                                            <div class="small_text d-flex">
                                                <input type="checkbox" min="0" name="irs"
                                                    class="border-0 footer_field "> IRS Refunds due to you
                                            </div>

                                        </td>
                                    </tr>

                                    <tr>
                                        <td class=" small_text ">
                                            <div class="small_text d-flex">
                                                <input type="checkbox" min="0" name="c_club"
                                                    class="border-0 footer_field "> Country Club &
                                                Other Memberships
                                            </div>

                                        </td>
                                        <td class=" small_text ">
                                            <div class="small_text d-flex">
                                                <input type="checkbox" min="0" name="lc_equipment"
                                                    class="border-0 footer_field "> Livestock, Crops,
                                                Farm Equipment
                                            </div>

                                        </td>
                                        <td class=" small_text ">
                                            <div class="small_text d-flex">
                                                <input type="checkbox" min="0" name="p_lawsuit"
                                                    class="border-0 footer_field "> Pending lawsuit or claim
                                                by you
                                            </div>

                                        </td>
                                        <td class=" small_text ">
                                            <div class="small_text d-flex">
                                                <input type="checkbox" min="0" name="apl"
                                                    class="border-0 footer_field "> Accrued Paid Leave (sick,
                                                vacation, personal)
                                            </div>

                                        </td>
                                    </tr>

                                    <tr>
                                        <td class=" small_text ">
                                            <div class="small_text d-flex">
                                                <input type="checkbox" min="0" name="ogr"
                                                    class="border-0 footer_field "> Oil and Gas Rights
                                            </div>

                                        </td>
                                        <td class=" small_text ">
                                            <div class="small_text d-flex">
                                                <input type="checkbox" min="0" name="vcp"
                                                    class="border-0 footer_field "> Vacation Club Points
                                            </div>

                                        </td>
                                        <td class=" small_text ">
                                            <div class="small_text d-flex">
                                                <input type="checkbox" min="0" name="sdbv"
                                                    class="border-0 footer_field "> Safety Deposit Box/Vault
                                            </div>

                                        </td>
                                        <td class=" small_text ">
                                            <div class="small_text d-flex">
                                                <input type="checkbox" min="0" name="t_beneficiary"
                                                    class="border-0 footer_field "> Trust Beneficiary
                                            </div>

                                        </td>
                                    </tr>

                                    <tr>
                                        <td class=" small_text ">
                                            <div class="small_text d-flex">
                                                <input type="checkbox" min="0" name="ffm"
                                                    class="border-0 footer_field "> Frequent Flyer Miles
                                            </div>

                                        </td>
                                        <td class=" small_text ">
                                            <div class="small_text d-flex">
                                                <input type="checkbox" min="0" name="e_accounts"
                                                    class="border-0 footer_field "> Education Accounts
                                            </div>

                                        </td>
                                        <td class=" small_text ">
                                            <div class="small_text d-flex">
                                                <input type="checkbox" min="0" name="hs_accounts"
                                                    class="border-0 footer_field "> Health Savings Accounts
                                            </div>

                                        </td>
                                        <td class=" small_text ">
                                            <div class="small_text d-flex">
                                                <input type="checkbox" min="0" name="mw_rights"
                                                    class="border-0 footer_field "> Mineral and Water Rights
                                            </div>

                                        </td>
                                    </tr>


                                    <tr>
                                        <td class=" small_text ">
                                            <div class="small_text d-flex">
                                                <input type="checkbox" min="0" name="oc1"
                                                    class="border-0 footer_field me-2 "> Other -
                                                <input type="text" min="0" name="ov1"
                                                    class="border-0 border-bottom footer_fields">

                                            </div>

                                        </td>
                                        <td class=" small_text ">
                                            <div class="small_text d-flex">
                                                <input type="checkbox" min="0" name="oc2"
                                                    class="border-0 footer_field me-2 "> Other -
                                                <input type="text" min="0" name="ov2"
                                                    class="border-0 border-bottom footer_fields">

                                            </div>

                                        </td>
                                        <td class=" small_text ">
                                            <div class="small_text d-flex">
                                                <input type="checkbox" min="0" name="oc3"
                                                    class="border-0 footer_field me-2 "> Other -
                                                <input type="text" min="0" name="ov3"
                                                    class="border-0 border-bottom footer_fields">

                                            </div>

                                        </td>
                                        <td class=" small_text ">
                                            <div class="small_text d-flex">
                                                <input type="checkbox" min="0" name="oc4"
                                                    class="border-0 footer_field me-2 "> Other -
                                                <input type="text" min="0" name="ov4"
                                                    class="border-0 border-bottom footer_fields">

                                            </div>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3"
                                            class="bg-secondary small_text fw-bold text-end pe-2 pt-4">Total

                                        </td>
                                        {{-- <td class="text-end bg-secondary pe-2">Total </td> --}}
                                        <td class="small_text">
                                            <div class=" ">
                                                <div class="d-flex  text-bottom mt-3">$<input type="text"
                                                        min="0" name="h_total"
                                                        class="border-0 footer_field w-100"> </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="bg-secondary small_text fw-bold">I. Separate
                                            Property
                                            <div class="small_text d-flex">
                                                <input type="checkbox" min="0" name="i_c1"
                                                    class="border-0 footer_field "> None <input type="checkbox"
                                                    min="0" name="i_c2"
                                                    class="border-0 footer_field  ms-4"> If owned please attach JDF
                                                1111-SS to identify the property and to report the value.
                                            </div>

                                        </td>
                                        <td class="text-end bg-secondary pe-2 pt-2 ">Total </td>
                                        <td class="small_text">
                                            <div class=" ">
                                                <div class="d-flex mt-2 ">$<input type="text" min="0"
                                                        name="i_total" class="border-0 footer_field w-100"> </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="3"
                                            class="bg-secondary small_text fw-bold fs-4 text-center p-2">Total
                                            Value/Balance of All Assets (A – I)
                                        </td>
                                        <td class="small_text">
                                            <div class=" ">
                                                <div class="d-flex  text-end">$<input type="text"
                                                        min="0" name="tv_assets"
                                                        class="border-0 footer_field w-100"> </div>
                                            </div>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                            </div>

                            <div class="mt-4 fw-bold">I swear or affirm under oath that this Sworn Financial
                                Statement, attached schedules, and mandatory disclosures contain a complete disclosure
                                of my income, expenses, assets, and debt as of the date of my signature. I understand
                                that if the information I have provided changes or needs to be updated before a final
                                decree or order is issued by the Court, that I have a duty to provide the correct or
                                updated information. I understand that this oath is made under penalty of perjury. I
                                understand that if I have omitted or misstated any material information, intentionally
                                or not, the Court will have the power to enter orders to address those matters,
                                including the power to punish me for any statements made with the intent to defraud or
                                mislead the Court or the other party.</div>

                            <div class="row mt-3">
                                <div class="col-lg-6">
                                    <div class=" d-flex">
                                        <div class="d-flex ">Date : <input type="text" min="0"
                                                name="date" class="border-0 border-bottom footer_field "> </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class=" ">
                                        <div class="d-flex "><input type="text" min="0"
                                                name="signature" class="border-0 border-bottom footer_field w-100">
                                        </div>
                                    </div>
                                    <div class="small_text d-flex mt-1 ">
                                        Signature of
                                        <input type="checkbox" min="0" name="s_petitioner"
                                            class="border-0 footer_field ms-2 "> Petitioner or <input
                                            type="checkbox" min="0" name="s_copetitioner"
                                            class="border-0 footer_field  ms-2"> Co-Petitioner/Respondent
                                    </div>
                                </div>
                            </div>
                            <div class=" ">
                                <div class="d-flex "><input type="text" min="0" name="subscribed"
                                        class="border-0 border-bottom footer_field w-100"> </div>
                            </div>

                            <div class="mt-1 d-flex">
                                Subscribed and affirmed, or sworn to before me in the County of <div
                                    class="d-flex  me-2"><input type="text" min="0" name="countryof"
                                        class="border-0 border-bottom footer_field ">, </div> State of <div
                                    class="d-flex  me-2 "><input type="text" min="0" name="stateof"
                                        class="border-0 border-bottom footer_field ">, </div> this <div
                                    class="d-flex  me-2 "><input type="text" min="0" name="this"
                                        class="border-0 border-bottom footer_field "></div>
                            </div>
                            <div class="mt-2 d-flex">day of <div class="d-flex  me-2"><input type="text"
                                        min="0" name="dayof"
                                        class="border-0 border-bottom footer_field ">, </div> 20 <div
                                    class="d-flex  me-2 "><input type="text" min="0" name="20"
                                        class="border-0 border-bottom footer_field "> . </div>
                            </div>


                            <div class="row mt-3">
                                <div class="col-lg-6">
                                    <div class=" d-flex">
                                        <div class="d-flex ">My Commission Expires: <input type="text"
                                                min="0" name="c_expires"
                                                class="border-0 border-bottom footer_field "> </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class=" ">
                                        <div class="d-flex "><input type="text" min="0"
                                                name="np_clerk" class="border-0 border-bottom footer_field w-100">
                                        </div>
                                    </div>
                                    <div class="small_text d-flex mt-1 ">Notary Public/Deputy Clerk
                                    </div>
                                </div>
                            </div>


                        </div>

                        @include('layouts.footer11', ['page' => 6])

                        {{-- <div class="d-flex gap-3 py-auto pb-3  ">
                            <div class="my-auto"> <a href="#section_first" ><i class="fas fa-chevron-left"></i><i class="fas fa-chevron-left"></i></a></div>
                            <div class="my-auto ps-2"> <a href="#section_five" ><i class="fas fa-chevron-left"></i></a> </div>
                            <div>
                                <select class="form-select w-100 sectionSelect">
                                    <option value="#section_first" >1</option>
                                    <option value="#section_two">2</option>
                                    <option value="#section_three" >3</option>
                                    <option value="#section_four" >4</option>
                                    <option value="#section_five" >5</option>
                                    <option value="#section_last" selected>6</option>
                                </select>
                            </div>
                            <div class="my-auto">  <i class="fas fa-chevron-right"></i></a>  </div>
                            <div class="my-auto ps-2" > <i class="fas fa-chevron-right"></i><i class="fas fa-chevron-right"></i> </a></div>
                        </div> --}}


                        @include('layouts.pagination', ['page' => 15])
                    </div>
                </section>

            </form>
        </div>
    </div>
</body>

</html>
