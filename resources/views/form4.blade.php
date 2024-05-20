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
            border-bottom: 1px solid black !important;
            box-shadow: none !important;
        }

        input,
        table {
            background-color: transparent !important;
        }

        .form-control:focus-visible {
            border-bottom: 1px solid black !important;

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

        input:focus-visible {
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

            .expires_input {
                width: 100% !important;
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
            height: 18px ;
            font-size: 15px;
        }

        .pb-500 {
            padding-bottom: 500px;
        }
    </style>
</head>

<body>
    <div class="container-fluid   py-1 py-lg-3">
        <div class="container bg_color p-lg-3 p-1  ">

            <form action="{{route('form4.submit')}}" class="" method="post">
                @csrf
                <section class="section_area row page1 bg-white pt-5 p-5 pe-2 pe-lg-5 m-3 mt-4  pt-lg-5 pt-4" id="first_section">

                    <div class="col-lg-12 mx-auto">
                        <div class="text-danger fw-bold text-center">IMPORTANT: FILL IN FORM MUST BE DOWNLOADED
                            ONTO YOUR COMPUTER PRIOR TO COMPLETING</div>
                    </div>
                    <div class="col-lg-10 mx-auto">
                        <div class="form-area border-bottom border-dark  pt-5 ">
                            @if (session('success'))
                                <div class="alert alert-success">{{ session('success') }}</div>
                            @endif
                            <div class="row ">

                                <div class="me-5" style="height:30px; width:60px;border-right: 5px solid black; border-bottom: 5px solid black"></div>
                                <div class="row mt-lg-3">

                                    <div class="col-lg-1 h3 "></div>
                                    <div class="col-lg-3 h3 ">


                                        REV-488</div>
                                    <div class="col-lg-3"></div>
                                    <div class="col-lg-5 ">
                                        <div class="border-bottom top_flex_text border-dark d-flex"><small>OFFICIAL USE
                                                ONLY</small>
                                            <span><input type="text" name="official_use" class="w-100 border-0"></input></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="pt-2 text-center">STATEMENT OF<br> FINANCIAL CONDITION<br> FOR INDIVIDUALS
                                </div>
                            </div>
                        </div>
                        <div class="table_area">
                            <small>If additional space is needed, attach separate sheet</small>
                            <div class="table-responsive">
                                <table class="  table-bordered mt-1 border-black table  my-lg-1">
                                    <thead>
                                        <tr>
                                            <td class="bg-dark text-white w-25">SECTION I</td>
                                            <td colspan="3" class="bg-secondary">TAXPAYER INFORMATION</td>
                                            <td class="w-25 bg-secondary text-danger" colspan="2">
                                                <small>MM/DD/YYYY</small>
                                            </td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td colspan="4">
                                                <div class="small_text">Taxpayer’s Name</div><input type="text"
                                                    name="tpname"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td>
                                                <div class="small_text">Date of Birth</div><input type="number" min="0"
                                                    name="t_dob"
                                                    class="border-0  expires_input bg-transparent border   outline-none form-control">
                                            </td>
                                            <td>
                                                <div class="small_text">SSN</div><input type="text" name="t_ssn"
                                                    class="border-0  expires_input bg-transparent border   outline-none form-control">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="6">
                                                <div class="small_text">Taxpayer’s Street Address</div><input
                                                    type="text" name="tpsa"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                        </tr>

                                        <tr>
                                            <td colspan="2">
                                                <div class="small_text">City</div><input type="number" min="0" name="tcity"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td colspan="2">
                                                <div class="small_text">County</div><input type="text" name="county"
                                                    class="border-0  expires_input bg-transparent border   outline-none form-control">
                                            </td>
                                            <td>
                                                <div class="small_text">State</div><input type="text" name="state"
                                                    class="border-0  expires_input bg-transparent border   outline-none form-control">
                                            </td>
                                            <td>
                                                <div class="small_text">Zip Code</div><input type="text"
                                                    name="tzc"
                                                    class="border-0  expires_input bg-transparent border   outline-none form-control">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="4">
                                                <div class="small_text">Spouse’s Name (if applicable)</div><input
                                                    type="text" name="sname"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td>
                                                <div class="small_text">Date of Birth</div><input type="number" min="0"
                                                    name="s_dob"
                                                    class="border-0  expires_input bg-transparent border   outline-none form-control">
                                            </td>
                                            <td>
                                                <div class="small_text">SSN</div><input type="text" name="s_ssn"
                                                    class="border-0  expires_input bg-transparent border   outline-none form-control">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="6">
                                                <div class="small_text">Spouse’s Street Address (if different from
                                                    above)</div><input type="text" name="ssa"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <div class="small_text">City</div><input type="text" name="s_city"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td colspan="2">
                                                <div class="small_text">County</div><input type="text"
                                                    name="s_county"
                                                    class="border-0  expires_input bg-transparent border   outline-none form-control">
                                            </td>
                                            <td>
                                                <div class="small_text">State</div><input type="text"
                                                    name="s_state"
                                                    class="border-0  expires_input bg-transparent border   outline-none form-control">
                                            </td>
                                            <td>
                                                <div class="small_text">Zip Code</div><input type="text"
                                                    name="s_zc"
                                                    class="border-0  expires_input bg-transparent border   outline-none form-control">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="small_text">Phone Number</div><input type="number" min="0"
                                                    name="s_phone"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td colspan="2">
                                                <div class="small_text">Marital Status</div><input type="text"
                                                    name="m_status"
                                                    class="border-0  expires_input bg-transparent border   outline-none form-control">
                                            </td>
                                            <td colspan="3">
                                                <div class="small_text">Number of Exemptions Claimed on W-4</div>
                                                 <input
                                                    type="text" name="s_ex"
                                                    class="border-0  expires_input bg-transparent border   outline-none form-control">
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="bg-dark text-white w-25">SECTION II</td>
                                            <td colspan="5" class="bg-secondary">EMPLOYMENT INFORMATION</td>
                                        </tr>
                                        <tr>
                                            <td colspan="6">
                                                <div class="small_text">Employer or Business Name</div><input
                                                    type="text" name="e_bn"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="6">
                                                <div class="small_text">Employer or Business Street Address</div><input
                                                    type="text" name="e_bsa"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                        </tr>

                                        <tr>
                                            <td colspan="2">
                                                <div class="small_text">City</div><input type="text"
                                                    name="e_city"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td colspan="2">
                                                <div class="small_text">County</div><input type="text"
                                                    name="e_county"
                                                    class="border-0  expires_input bg-transparent border   outline-none form-control">
                                            </td>
                                            <td>
                                                <div class="small_text">State</div><input type="text"
                                                    name="e_state"
                                                    class="border-0  expires_input bg-transparent border   outline-none form-control">
                                            </td>
                                            <td>
                                                <div class="small_text">Zip Code</div><input type="text"
                                                    name="e_zc"
                                                    class="border-0  expires_input bg-transparent border   outline-none form-control">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="small_text">Business Phone Number</div><input
                                                    type="number" min="0" name="e_phn"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td>
                                                <div class="small_text">Occupation</div><input type="text"
                                                    name="e_oc"
                                                    class="border-0  expires_input bg-transparent border   outline-none form-control">
                                            </td>
                                            <td>
                                                <div class="small_text">Payday</div><input type="text"
                                                    name="e_pd"
                                                    class="border-0  expires_input bg-transparent border   outline-none form-control">
                                            </td>
                                            <td colspan="3">
                                                <div class="small_text">Fill In Appropriate Oval</div>
                                                <div class="row">
                                                <div class="col-lg-4"> <span class="small_text"> <input type="radio" name="ei_box" id="" value="Wage Earner"> Wage Earner</span></div>
                                                <div class="col-lg-4"> <span class="small_text"> <input type="radio" name="ei_box" id="" value="Partner"> Partner</span></div>
                                                <div class="col-lg-4"> <span class="small_text"> <input type="radio" name="ei_box" id="" value="Sole Proprietor"> Sole Proprietor</span></div>
                                            </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td colspan="6">
                                                <div class="small_text">Spouse’s Employer or Business Name</div><input
                                                    type="text" name="se_bn"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="6">
                                                <div class="small_text">Employer or Business Street Address</div><input
                                                    type="text" name="se_bsa"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                        </tr>

                                        <tr>
                                            <td colspan="2">
                                                <div class="small_text">City</div><input type="text"
                                                    name="se_city"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td colspan="2">
                                                <div class="small_text">County</div><input type="text"
                                                    name="se_county"
                                                    class="border-0  expires_input bg-transparent border   outline-none form-control">
                                            </td>
                                            <td>
                                                <div class="small_text">State</div><input type="text"
                                                    name="se_state"
                                                    class="border-0  expires_input bg-transparent border   outline-none form-control">
                                            </td>
                                            <td>
                                                <div class="small_text">Zip Code</div><input type="text"
                                                    name="se_zc"
                                                    class="border-0  expires_input bg-transparent border   outline-none form-control">
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="small_text">Business Phone Number</div><input
                                                    type="number" min="0" name="se_phn"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td>
                                                <div class="small_text">Occupation</div><input type="text"
                                                    name="se_oc"
                                                    class="border-0  expires_input bg-transparent border   outline-none form-control">
                                            </td>
                                            <td>
                                                <div class="small_text">Payday</div><input type="text"
                                                    name="se_pd"
                                                    class="border-0  expires_input bg-transparent border   outline-none form-control">
                                            </td>
                                            <td colspan="3">
                                                <div class="small_text">Fill In Appropriate Oval</div>
                                                <div class="row">
                                                <div class="col-lg-4"> <span class="small_text"> <input type="radio" name="ei_box2" id="" value="Wage Earner" > Wage Earner</span></div>
                                                <div class="col-lg-4"> <span class="small_text"> <input type="radio" name="ei_box2" id="" value="Partner"> Partner</span></div>
                                                <div class="col-lg-4"> <span class="small_text"> <input type="radio" name="ei_box2" id="" value="Sole Proprietor"> Sole Proprietor</span></div>
                                            </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="bg-dark text-white w-25">SECTION III</td>
                                            <td colspan="5" class="bg-secondary">PERSONAL INFORMATION</td>
                                        </tr>

                                        <tr>
                                            <td colspan="4">
                                                <div class="small_text">Name of Next of Kin or Other Reference</div>
                                                <input type="text" name="p_nr"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td colspan="2">
                                                <div class="small_text">Phone Number</div><input type="number" min="0"
                                                    name="p_phn"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="6">
                                                <div class="small_text">Next of Kin or Other Reference Street Address
                                                </div><input type="text" name="p_sa"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <div class="small_text">City</div><input type="text"
                                                    name="p_city"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td colspan="2">
                                                <div class="small_text">County</div><input type="text"
                                                    name="p_county"
                                                    class="border-0  expires_input bg-transparent border   outline-none form-control">
                                            </td>
                                            <td>
                                                <div class="small_text">State</div><input type="text"
                                                    name="p_state"
                                                    class="border-0  expires_input bg-transparent border   outline-none form-control">
                                            </td>
                                            <td>
                                                <div class="small_text">Zip Code</div><input type="number" min="0"
                                                    name="p_zc"
                                                    class="border-0  expires_input bg-transparent border   outline-none form-control">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="6"><small>Dependents Living in Your Household (exclude
                                                    husband and wife)</small></td>
                                        </tr>
                                        <tr>
                                            <td class="text-center"><small>AGE</small> </td>
                                            <td colspan="2" class="text-center"><small>RELATIONSHIP</small> </td>
                                            <td class="text-center"><small>AGE</small> </td>
                                            <td colspan="2" class="text-center"><small>RELATIONSHIP</small> </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center"><input type="text" name="age_1"
                                                    class="border-0  expires_input bg-transparent border   outline-none form-control">
                                            </td>
                                            <td colspan="2" class="text-center"><input type="text"
                                                    name="rel_1"
                                                    class="border-0  expires_input bg-transparent border   outline-none form-control">
                                            </td>
                                            <td class="text-center"><input type="text" name="age_2"
                                                    class="border-0  expires_input bg-transparent border   outline-none form-control">
                                            </td>
                                            <td colspan="2" class="text-center"><input type="text"
                                                    name="rel_2"
                                                    class="border-0  expires_input bg-transparent border   outline-none form-control">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center"><input type="text" name="age_3"
                                                    class="border-0  expires_input bg-transparent border   outline-none form-control">
                                            </td>
                                            <td colspan="2" class="text-center"><input type="text"
                                                    name="rel_3"
                                                    class="border-0  expires_input bg-transparent border   outline-none form-control">
                                            </td>
                                            <td class="text-center"><input type="text" name="age_4"
                                                    class="border-0  expires_input bg-transparent border   outline-none form-control">
                                            </td>
                                            <td colspan="2" class="text-center"><input type="text"
                                                    name="rel_4"
                                                    class="border-0  expires_input bg-transparent border   outline-none form-control">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center"><input type="text" name="age_5"
                                                    class="border-0  expires_input bg-transparent border   outline-none form-control">
                                            </td>
                                            <td colspan="2" class="text-center"><input type="text"
                                                    name="rel_5"
                                                    class="border-0  expires_input bg-transparent border   outline-none form-control">
                                            </td>
                                            <td class="text-center"><input type="text" name="age_6"
                                                    class="border-0  expires_input bg-transparent border   outline-none form-control">
                                            </td>
                                            <td colspan="2" class="text-center"><input type="text"
                                                    name="rel_6"
                                                    class="border-0  expires_input bg-transparent border   outline-none form-control">
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                            <div class="d-flex gap-3 py-auto mb-2  ">
                                <div class="my-auto"> <a href="#first_section" ><i class="fas fa-chevron-left"></i><i class="fas fa-chevron-left"></i></a></div>
                                <div class="my-auto ps-2">  <i class="fas fa-chevron-left"></i> </div>
                                <div>
                                    <select class="form-select w-100 sectionSelect">
                                        <option value="#first_section" selected>1</option>
                                        <option value="#latest_pa_income" >2</option>
                                        <option value="#additional_information">3</option>
                                        <option value="#part_a_income">4</option>
                                        <option value="#general_information">5</option>
                                        <option value="#last_section">6</option>
                                    </select>
                                </div>
                                <div class="my-auto"> <a href="#latest_pa_income" ><i class="fas fa-chevron-right"></i> </a></div>
                                <div class="my-auto ps-2" ><a href="#last_section" > <i class="fas fa-chevron-right"></i><i class="fas fa-chevron-right"></i> </a></div>
                            </div>

                            @include('layouts.footer3', ['page' => 1])

                        </div>
                    </div>
                </section>


                <section
                    class="section_area row page1 bg-white pt-5 p-5 pe-2 pe-lg-5  m-3 mt-4  pt-lg-5 pt-4" id="latest_pa_income">
                    <div class="col-lg-10 mx-auto">
                        <div class="mb-5" style="height:30px; width:60px;border-right: 5px solid black; border-bottom: 5px solid black"></div>


                        <div class="table_area">
                            <small class="ps-lg-5 small_text">REV-488 (ET+) 02-22</small>
                            <div class="table-responsive">
                                <table class="  table-bordered mt-1 border-black table  my-lg-1">
                                    <thead>
                                        <tr>
                                            <td class="bg-dark text-white w-25">SECTION IV</td>
                                            <td colspan="5" class="bg-secondary">GENERAL FINANCIAL INFORMATION</td>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td colspan="3">
                                                <div class="small_text">Latest PA Income Tax Return Filed (Tax Year)
                                                </div><input type="text" name="g_lp"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td colspan="3">
                                                <div class="small_text">Adjusted Gross Income on Return</div><input
                                                    type="text" name="g_agi"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="6"><small>Bank Accounts (include Savings and Loans, Credit Unions, IRA and KEOUGH accounts, Certificates of Deposit,
                                                    etc.)</small></td>
                                        </tr>

                                        <tr>
                                            <td colspan="2" class="small_text"> NAME OF INSTITUTION </td>
                                            <td class="small_text text-center"> ADDRESS </td>
                                            <td class="small_text text-center"> TYPE OF ACCOUNT </td>
                                            <td class="small_text text-center"> ACCOUNT NUMBER </td>
                                            <td class="small_text text-center"> BALANCE </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"> <input type="text" name="ins_1"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td> <input type="text" name="adr_1"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td> <input type="text" name="toa_1"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td> <input type="number" min="0" name="ac_1"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="blc_1"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"> <input type="text" name="ins_2"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td> <input type="text" name="adr_2"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td> <input type="text" name="toa_2"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td> <input type="number" min="0" name="ac_2"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="blc_2"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"> <input type="text" name="ins_3"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td> <input type="text" name="adr_3"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td> <input type="text" name="toa_3"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td> <input type="number" min="0" name="ac_3"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="blc_3"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"> <input type="text" name="ins_4"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td> <input type="text" name="adr_4"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td> <input type="text" name="toa_4"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td> <input type="number" min="0" name="ac_4"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="blc_4"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="5" class="text-end small_text">TOTAL (Enter in Section V,
                                                Line 2) </td>
                                            <td>
                                                <div class="d-flex">$<input type="text" name="g_total"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>

                                <small>Bank Charge Cards, Lines of Credit, etc.</small>
                                <table class="  table-bordered mt-1 border-black table  my-lg-1">
                                    <thead>
                                        <tr>
                                            <td class="small_text text-center">TYPE OF ACCOUNT OR CARD</td>
                                            <td class="small_text text-center" colspan="3">NAME AND ADDRESS
                                                OF FINANCIAL INSTITUTION</td>
                                            <td class="small_text text-center">MONTHLY
                                                PAYMENT</td>
                                            <td class="small_text text-center">CREDIT LIMIT</td>
                                            <td class="small_text text-center">AMOUNT OWED</td>
                                            <td class="small_text text-center">CREDIT AVAILABLE</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><input type="text" name="toc_1"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td colspan="3"> <input type="text" name="nad_1"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="mp_1"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="cl_1"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="ao_1"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="ca_1"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td><input type="text" name="toc_2"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td colspan="3"> <input type="text" name="nad_2"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="mp_2"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="cl_2"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="ao_2"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="ca_2"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td><input type="text" name="toc_3"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td colspan="3"> <input type="text" name="nad_3"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="mp_3"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="cl_3"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="ao_3"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="ca_3"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td><input type="text" name="toc_4"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td colspan="3"> <input type="text" name="nad_4"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="mp_4"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="cl_4"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="ao_4" class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="ca_4"  class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td colspan="4" class="text-end small_text"> TOTAL (Enter in Section V,
                                                Line 8)</td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="mp_total" class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="cl_total" class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="ao_total" class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="ca_total" class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>

                                        </tr>
                                    </tbody>
                                </table>
                                <small>Safe Deposit Boxes Rented or Accessed (list all locations, box numbers and
                                    contents)</small>
                                <table class="  table-bordered mt-1 border-black table  my-lg-1">
                                    <thead>
                                        <tr>
                                            <td class="small_text text-center">BOX NUMBER</td>


                                            <td colspan="4" class="small_text text-center">SAFE DEPOSIT BOX
                                                LOCATION</td>
                                            <td colspan="3" class="small_text text-center">CONTENTS</td>
                                        </tr>
                                        <tr>
                                            <td><input type="text" name="bx_1"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td colspan="4"><input type="text" name="sd_1"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td colspan="3"><input type="text" name="c_1"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><input type="text" name="bx_2"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td colspan="4"><input type="text" name="sd_2"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td colspan="3"><input type="text" name="c_2"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><input type="text" name="bx_3" class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td colspan="4"><input type="text" name="sd_3"  class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td colspan="3"><input type="text" name="c_3"  class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                                <small>Real Estate Property</small>
                                <table class="  table-bordered mt-1 border-black table  my-lg-1">
                                    <thead>
                                        <tr>
                                            <td colspan="3" class="small_text text-center">REAL PROPERTY
                                                DESCRIPTION</td>


                                            <td class="small_text text-center">TYPE OF OWNERSHIP</td>
                                            <td colspan="4" class="small_text text-center">ADDRESS (INCLUDE COUNTY
                                                AND STATE)</td>
                                        </tr>
                                        <tr>
                                            <td class="" style="width:1px;">
                                                <div class=" px-2">a.</div>
                                            </td>
                                            <td colspan="2"><input type="text" name="rp_1"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td><input type="text" name="too_1"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td colspan="4"><input type="text" name="ai_1"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="" style="width:1px;">
                                                <div class=" px-2">b.</div>
                                            </td>
                                            <td colspan="2"><input type="text" name="rp_2"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td><input type="text" name="too_2"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td colspan="4"><input type="text" name="ai_2"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="" style="width:1px;">
                                                <div class=" px-2">c.</div>
                                            </td>
                                            <td colspan="2"><input type="text" name="rp_3"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td><input type="text" name="too_3"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td colspan="4"><input type="text" name="ai_3"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="" style="width:1px;">
                                                <div class=" px-2">d.</div>
                                            </td>
                                            <td colspan="2"><input type="text" name="rp_4"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td><input type="text" name="aoo_4"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td colspan="4"><input type="text" name="ai_4"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                                <small>Life Insurance</small>

                                <table class="  table-bordered mt-1 border-black table  my-lg-1">
                                    <thead>
                                        <tr>
                                            <td colspan="3" class="small_text" style="min-width: 300px"> NAME OF
                                                LIFE INSURANCE COMPANY </td>
                                            <td class="small_text text-center"> POLICY NUMBER </td>
                                            <td class="small_text text-center"> TYPE </td>
                                            <td class="  small_text text-center"> FACE VALUE</td>
                                            <td colspan="2" class="  small_text text-center"
                                                style="min-width: 250px"> AVAILABLE LOAN VALUE </td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td colspan="3"> <input type="text" name="lic_1"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td> <input type="number" min="0" name="pl_1"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td> <input type="text" name="it_1"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="fv_1"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="lv_1"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="3"> <input type="text" name="lic_2"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td> <input type="number" min="0" name="pl_2"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td> <input type="text" name="it_2"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="fv_2"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="lv_2"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="3"> <input type="text" name="lic_3"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td> <input type="number" min="0" name="pl_3"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td> <input type="text" name="it_3"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="fv_3"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="lv_3"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="3"> <input type="text" name="lic_4"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td> <input type="number" min="0" name="pl_4"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td> <input type="text" name="it_4"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="fv_4"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="lv_4"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>

                            </div>
                            <div class="d-flex gap-3 py-auto mb-2  ">
                                <div class="my-auto"> <a href="#first_section" ><i class="fas fa-chevron-left"></i><i class="fas fa-chevron-left"></i></a></div>
                                <div class="my-auto ps-2"> <a href="#first_section" ><i class="fas fa-chevron-left"></i></a> </div>
                                <div>
                                    <select class="form-select w-100 sectionSelect">
                                        <option value="#first_section"  >1</option>
                                        <option value="#latest_pa_income" selected >2</option>
                                        <option value="#additional_information">3</option>
                                        <option value="#part_a_income">4</option>
                                        <option value="#general_information">5</option>
                                        <option value="#last_section">6</option>
                                    </select>
                                </div>
                                <div class="my-auto"> <a href="#additional_information" ><i class="fas fa-chevron-right"></i> </a></div>
                                <div class="my-auto ps-2" ><a href="#last_section" > <i class="fas fa-chevron-right"></i><i class="fas fa-chevron-right"></i> </a></div>
                            </div>

                            @include('layouts.footer3', ['page' => 2])

                    </div>
                </section>
                <section class="section_area row page1 bg-white pt-5 p-5 pe-2 pe-lg-5  m-3 mt-4  pt-lg-5 pt-4" id="additional_information">
                    <div class="col-lg-10 mx-auto">
                        <div class="mb-5" style="height:30px; width:60px;border-right: 5px solid black; border-bottom: 5px solid black"></div>

                        <div class="table_area">
                            <small class="ps-lg-5 small_text">REV-488 (ET+) 02-22</small>
                            <div class="table-responsive">
                                <table class="  table-bordered mt-1 border-black table  my-lg-1">
                                    <tbody>
                                        <tr>
                                            <td class="bg-dark text-white w-25">SECTION IV</td>
                                            <td colspan="5" class="bg-secondary">GENERAL FINANCIAL INFORMATION</td>
                                        </tr>
                                        <tr>
                                            <td colspan="6"><small>Additional Information (court proceedings,
                                                    bankruptcies, repossessions, recent transgers of assets for less
                                                    than full value, anticipated
                                                    increases in income, condition of health, etc., include information
                                                    on trusts, estates, retirement plans, etc., on which you are a
                                                    participant
                                                    of beneficiary)</small>
                                                <input type="text" name="gfi"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control"
                                                    style="height:60px;">
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>

                                <table class="  table-bordered mt-1 border-black table  my-lg-1">
                                    <thead>
                                        <tr>
                                            <td colspan="2" class="bg-dark text-white  ">SECTION V</td>
                                            <td colspan="5" class="bg-secondary">ASSET AND LIABILITY ANALYSIS</td>
                                        </tr>
                                        <tr>
                                            <td class="small_text">(A) ASSET OR LIABILITY</td>
                                            <td class="small_text" colspan="3">(B) DESCRIPTION</td>
                                            <td class="small_text">(C) CURRENT MARKET VALUE</td>
                                            <td class="small_text">(D) LIABILITIES BALANCE DUE</td>
                                            <td class="small_text">(E) AMOUNT OF MONTHLY PAYMENT</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1. Cash</td>
                                            <td colspan="3"> <input type="text" name="d_1"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="cmv_1"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                            <td colspan="2" class="bg-secondary"> </td>
                                        </tr>
                                        <tr>
                                            <td>2. Bank Accounts</td>
                                            <td colspan="3"> <input type="yrcy" name="d_2"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="cmv_2"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                            <td colspan="2" class="bg-secondary"> </td>
                                        </tr>
                                        <tr>
                                            <td>3. Stocks, bonds, investments</td>
                                            <td colspan="3"> <input type="text" name="d_3"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="cmv_3"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="lbd_3"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="amp_3"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4. Cash or loan value of insurance</td>
                                            <td colspan="3"> <input type="text" name="d_4"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="cmv_4"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="lbd_4"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="amp_4"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td rowspan="2">5. Vehicles (model, year, license)</td>
                                            <td class="" style="width:1px;">
                                                <div class=" px-2">a.</div>
                                            </td>
                                            <td colspan="2"> <input type="text" name="d1_5"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="cmv1_5"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="lbd1_5"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="amp1_5"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="" style="width:1px;">
                                                <div class=" px-2">b.</div>
                                            </td>
                                            <td colspan="2"> <input type="text" name="d2_6"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="cmv2_6"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="lbd2_6"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="amp2_6"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td rowspan="2">6. Real Property</td>
                                            <td class="" style="width:1px;">
                                                <div class=" px-2">a.</div>
                                            </td>
                                            <td colspan="2"> <input type="text" name="d1_6"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="cmv1_6"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="lbd1_6"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="amp1_6"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="" style="width:1px;">
                                                <div class=" px-2">b.</div>
                                            </td>
                                            <td colspan="2"> <input type="text" name="d21_6"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="cmv21_6"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="lbd21_6"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="amp21_6"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td rowspan="2">7. Other Assets</td>
                                            <td class="" style="width:1px;">
                                                <div class=" px-2">a.</div>
                                            </td>
                                            <td colspan="2"> <input type="text" name="d1_7"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="cmv1_7"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="lbd1_7"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="amp1_7"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="" style="width:1px;">
                                                <div class=" px-2">b.</div>
                                            </td>
                                            <td colspan="2"> <input type="text" name="d2_7"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="cmv2_7"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="lbd2_7"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="amp2_7"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>8. Bank Revolving Credit</td>
                                            {{-- <td class=""   style="width:1px;">  <div class=" px-2">a.</div>  </td> --}}
                                            <td colspan="3"> <input type="text" name="d_8"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="cmv_8"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="lbd_8"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="amp_8"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td rowspan="3">9. Other Liabilities (include judgements, notes and
                                                other charge accounts)</td>
                                            <td class="" style="width:1px;">
                                                <div class=" px-2">a.</div>
                                            </td>
                                            <td colspan="2"> <input type="text" name="d1_9"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="cmv1_9"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="lbd1_9"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="amp1_9"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="" style="width:1px;">
                                                <div class=" px-2">b.</div>
                                            </td>
                                            <td colspan="2"> <input type="text" name="d2_9"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="cmv2_9"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="lbd2_9"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="amp2_9"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="" style="width:1px;">
                                                <div class=" px-2">c.</div>
                                            </td>
                                            <td colspan="2"> <input type="text" name="d3_9"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="cmv3_9"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="lbd3_9"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="amp3_9"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>10. Federal Taxes Owed</td>
                                            <td colspan="3"> <input type="text" name="d_10"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="cmv_10"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="lbd_10"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="amp_10"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>11. State Taxes Owed</td>
                                            <td colspan="3"> <input type="text" name="d_11"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="cmv_11"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="ldb_11"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="amp_11"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>12. TOTALS</td>
                                            <td colspan="3"> <input type="text" name="d_12"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="cmv_12"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="ldb_12"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="amp_12"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="d-flex gap-3 py-auto mb-2  ">
                                <div class="my-auto"> <a href="#first_section" ><i class="fas fa-chevron-left"></i><i class="fas fa-chevron-left"></i></a></div>
                                <div class="my-auto ps-2"> <a href="#latest_pa_income" ><i class="fas fa-chevron-left"></i></a> </div>
                                <div>
                                    <select class="form-select w-100 sectionSelect">
                                        <option value="#first_section" >1</option>
                                        <option value="#latest_pa_income" >2</option>
                                        <option value="#additional_information" selected>3</option>
                                        <option value="#part_a_income">4</option>
                                        <option value="#general_information">5</option>
                                        <option value="#last_section">6</option>
                                    </select>
                                </div>
                                <div class="my-auto"> <a href="#part_a_income" ><i class="fas fa-chevron-right"></i> </a></div>
                                <div class="my-auto ps-2" ><a href="#last_section" > <i class="fas fa-chevron-right"></i><i class="fas fa-chevron-right"></i> </a></div>
                            </div>

                            @include('layouts.footer3', ['page' => 3])

                        </div>
                    </div>
                </section>
                <section class="section_area row page1 bg-white pt-5 p-5 pe-2 pe-lg-5 m-3 mt-4  pt-lg-5 pt-4" id="part_a_income">
                <div class="col-lg-10 mx-auto">
                    <div class="mb-5" style="height:30px; width:60px;border-right: 5px solid black; border-bottom: 5px solid black"></div>

                    <div class="table_area">
                        <small class="ps-lg-5 small_text">REV-488 (ET+) 02-22</small>
                        <div class="table-responsive">


                            <table class="  table-bordered mt-1 border-black table  my-lg-1">
                                <thead>
                                    <tr>
                                        <td colspan="2" class="bg-dark text-white w-25">SECTION VI</td>
                                        <td colspan="5" class="bg-secondary">INCOME AND EXPENSE ANALYSIS</td>
                                    </tr>
                                    <tr>
                                        <td colspan="7">PART A - INCOME</td>
                                    </tr>
                                    <tr>
                                        <td class="small_text text-center" colspan="5">SOURCE</td>
                                        <td class="small_text text-center">GROSS</td>
                                        <td class="small_text text-center">NET</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td colspan="5">13. Wages/Salary (Taxpayer)</td>
                                        <td>
                                            <div class="d-flex">$<input type="number" min="0" name="g_1"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex">$<input type="number" min="0" name="n_1"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="5">14. Wages/Salary (Spouse) to be completed if you are
                                            married even if your spouse is not liable for the tax.
                                            This information is necessary in order for the Department of Revenue to
                                            calculate household income and expenses.</td>
                                        <td>
                                            <div class="d-flex">$<input type="number" min="0" name="g_2"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex">$<input type="number" min="0" name="n_2"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="5">15. Interest - Dividends</td>
                                        <td>
                                            <div class="d-flex">$<input type="number" min="0" name="g_3"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex">$<input type="number" min="0" name="n_3"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="5">16. Net business Income (from Form REV-484 or REV-488)
                                        </td>
                                        <td>
                                            <div class="d-flex">$<input type="number" min="0" name="g_4"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex">$<input type="number" min="0" name="n_4"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="5">17. Rental Income</td>
                                        <td>
                                            <div class="d-flex">$<input type="number" min="0" name="g_5"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex">$<input type="number" min="0" name="n_5"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="5">18. Pension (Taxpayer) Source:</td>
                                        <td>
                                            <div class="d-flex">$<input type="number" min="0" name="g_6"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex">$<input type="number" min="0" name="n_6"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="5">19. Pension (Spouse) Source:</td>
                                        <td>
                                            <div class="d-flex">$<input type="number" min="0" name="g_7"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex">$<input type="number" min="0" name="n_7"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="5">20. TOTAL</td>
                                        <td>
                                            <div class="d-flex">$<input type="number" min="0" name="g_8"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex">$<input type="number" min="0" name="n_8"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="7">PART B - NECESSARY LIVING EXPENSES</td>
                                    </tr>
                                    <tr>
                                        <td colspan="6">21. Rent/House Payment</td>
                                        <td>
                                            <div class="d-flex">$<input type="number" min="0" name="n_9"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="6">22. Groceries</td>
                                        <td>
                                            <div class="d-flex">$<input type="number" min="0" name="n_10"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="6">23. Allowable Installment Payments</td>
                                        <td>
                                            <div class="d-flex">$<input type="number" min="0" name="n_11"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="6">24. Utilities</td>
                                        <td>
                                            <div class="d-flex">$<input type="number" min="0" name="n_12"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="6">25. Transportation</td>
                                        <td>
                                            <div class="d-flex">$<input type="number" min="0" name="n_13"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="6">26. Insurance</td>
                                        <td>
                                            <div class="d-flex">$<input type="number" min="0" name="n_14"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="6">27. Medical</td>
                                        <td>
                                            <div class="d-flex">$<input type="number" min="0" name="n_15"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="6">28. Estimated Tax Payments (federal-state)</td>
                                        <td>
                                            <div class="d-flex">$<input type="number" min="0" name="n_16"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="6">29. Other Expenses (specify)</td>
                                        <td>
                                            <div class="d-flex">$<input type="number" min="0" name="n_17"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="6">30. TOTAL</td>
                                        <td>
                                            <div class="d-flex">$<input type="number" min="0" name="n_18"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="6">31. Net Difference (income less necessary living
                                            expenses)</td>
                                        <td>
                                            <div class="d-flex">$<input type="number" min="0" name="n_19"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="2" class="bg-dark text-white w-25">SECTION VII</td>
                                        <td colspan="5" class="bg-secondary">CERTIFICATION</td>
                                    </tr>
                                    <tr>
                                        <td colspan="7">Under penalties of perjury, I declare that to the best
                                            of my knowledge and belief this statement of assets, liabilities and
                                            other information is true, correct
                                            and complete.</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Print Name<input type="text" name="prnt"
                                                class="border-0  expires_input bg-transparent border outline-none form-control">
                                        </td>
                                        <td colspan="4">Signature <input type="text" name="sgn"
                                                class="border-0  expires_input bg-transparent border outline-none form-control">
                                        </td>
                                        <td>Date<input type="text" name="dt"
                                                class="border-0  expires_input bg-transparent border outline-none form-control">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Spouse, Attorney or Accountant Print Name<input
                                                type="text" name="saapn"
                                                class="border-0  expires_input bg-transparent border outline-none form-control">
                                        </td>
                                        <td colspan="4">Spouse, Attorney or Accountant Signature (POA Attached)
                                            <input type="text" name="saas"
                                                class="border-0  expires_input bg-transparent border outline-none form-control">
                                        </td>
                                        <td>Date<input type="text" name="dte"
                                                class="border-0  expires_input bg-transparent border outline-none form-control">
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                        <div class="d-flex gap-3 py-auto mb-2  ">
                            <div class="my-auto"> <a href="#first_section" ><i class="fas fa-chevron-left"></i><i class="fas fa-chevron-left"></i></a></div>
                            <div class="my-auto ps-2"> <a href="#additional_information" ><i class="fas fa-chevron-left"></i></a> </div>
                            <div>
                                <select class="form-select w-100 sectionSelect">
                                    <option value="#first_section" >1</option>
                                    <option value="#latest_pa_income" >2</option>
                                    <option value="#additional_information" >3</option>
                                    <option value="#part_a_income" selected>4</option>
                                    <option value="#general_information">5</option>
                                    <option value="#last_section">6</option>
                                </select>
                            </div>
                            <div class="my-auto"> <a href="#general_information" ><i class="fas fa-chevron-right"></i> </a></div>
                            <div class="my-auto ps-2" ><a href="#last_section" > <i class="fas fa-chevron-right"></i><i class="fas fa-chevron-right"></i> </a></div>
                        </div>

                        @include('layouts.footer3', ['page' => 4])

                    </div>
                </div>
            </section>
                <section class="section_area row page1 bg-white pt-5 p-lg-5 pe-2 pe-5 m-3 mt-4  pt-lg-5 pt-4" id="general_information">
                    <div class="col-lg-10 mx-auto">
                        <div class="row border-bottom">
                            <div class="col-lg-6">
                                <small>REV-488 IN (ET+) 02-22</small>
                            </div>
                            <div class="col-lg-6">
                                <h3>Instructions for REV-488</h3>
                                <h5>Statement of Financial Condition for Individuals</h5>
                            </div>
                        </div>
                        <div class="row mt-3 border-bottom">
                            <div class="col-lg-6">
                                <h5 class="text-center bg-dark p-2 text-white">GENERAL INFORMATION</h5>
                                <p>The Statement of Financial Condition for Individuals
                                    provides the Pennsylvania Department of Revenue with
                                    credit and statistical information that will be utilized in
                                    evaluating an individual’s financial status. Every line of the
                                    financial statement must be completed and should reflect
                                    accurate information and amounts. If a line is not applicable
                                    to you, respond "N/A". An incomplete Statement of Financial
                                    Condition for Individuals will not be considered.</p>

                                <p>The Statement of Financial Condition for Individuals is
                                    presented in six sections. Instructions are provided only for
                                    lines requiring clarification. Most of the requested items are
                                    self-explanatory and need no further interpretation.</p>
                                <h5 class="text-center border border-dark p-2 text-dark">LINE INSTRUCTIONS</h5>
                                <h5 class="text-center border border-dark p-2 text-dark">SECTION I</h5>
                                <h4>TAXPAYER INFORMATION</h4>
                                <p>Please verify the Social Security numbers reported.</p>
                                <h5 class="text-center border border-dark p-2 text-dark">SECTION II</h5>
                                <h4>EMPLOYMENT INFORMATION</h4>
                                <p>This section should report all full-time and/or part-time
                                    employers that currently make payment(s) to you in the form
                                    of wages, salaries and/or commissions for services
                                    performed. You may provide attachments if necessary.</p>
                                <h5 class="text-center border border-dark p-2 text-dark">SECTION III</h5>
                                <h4>PERSONAL INFORMATION</h4>
                                <p>Provide personal and household information regarding you,
                                    your spouse and/or your dependents.</p>
                                <h5 class="text-center border border-dark p-2 text-dark">SECTION IV</h5>
                                <h4>GENERAL FINANCIAL INFORMATION</h4>
                                <p>All information furnished in this section should be verified
                                    for accuracy. The department may conduct an inquiry to
                                    substantiate this information.</p>
                                <h4>BANK CHARGE CARD</h4>
                                <p>Include any line of credit available to you from a company credit
                                    union.</p>
                                <h4>REAL PROPERTY</h4>
                                <p>Report all business real estate holdings as well as your personal residence.</p>
                            </div>
                            <div class="col-lg-6">

                                <p>Report insurance information as verified through your
                                    insurance agent.</p>
                                <h4>ADDITIONAL INFORMATION</h4>
                                <p>Report any extraordinary situations, such as recent transfers
                                    of assets, court proceedings and anticipated changes in
                                    employment.</p>
                                <h5 class="text-center border border-dark p-2 text-dark">SECTION V</h5>
                                <h4>ASSET AND LIABILITY ANALYSIS</h4>
                                <p>This section resembles a balance sheet and should reflect
                                    accurate amounts for assets owned and debts owed.</p>
                                <h5 class="text-center bg-dark p-2 text-white">LINE 1</h5>
                                <h4>CASH</h4>
                                <p>Report actual cash on hand, not cash in banks or other
                                    financial institutions.</p>
                                <h5 class="text-center bg-dark p-2 text-white">LINE 5</h5>
                                <h4>VEHICLES</h4>
                                <p>Report the current market value of your vehicle(s) as
                                    determined in an automobile blue book or by other property
                                    valuation sources.</p>

                                <h5 class="text-center bg-dark p-2 text-white">LINE 7</h5>
                                <p>Report other assets such as furniture, recreational vehicles,
                                    recreational or hobby tools, machinery and equipment and
                                    miscellaneous household assets.</p>
                                <h5 class="text-center bg-dark p-2 text-white">LINE 9</h5>
                                <p>Report all other liabilities and debts owed for medical bills,
                                    dental bills and educational expenses, including any formal
                                    promissory note, loan arrangement or financial obligation
                                    currently assigned to you.</p>
                                <h5 class="text-center bg-dark p-2 text-white">LINES 10 - 11</h5>
                                <h4>FEDERAL/STATE TAXES OWED</h4>
                                <p>Report all delinquent federal and state taxes.</p>
                                <h5 class="text-center bg-dark p-2 text-white">LINES 12</h5>
                                <h4>TOTALS</h4>
                                <p>Report totals for all entries made in each column.</p>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p><a href="https://www.revenue.pa.gov" class="text-dark text-decoration-none"
                                    target="_blank">www.revenue.pa.gov</a></p>
                            <p>REV-488</p>
                        </div>
                        <div class="d-flex gap-3 py-auto mb-2  ">
                            <div class="my-auto"> <a href="#first_section" ><i class="fas fa-chevron-left"></i><i class="fas fa-chevron-left"></i></a></div>
                            <div class="my-auto ps-2"> <a href="#part_a_income" ><i class="fas fa-chevron-left"></i></a> </div>
                            <div>
                                <select class="form-select w-100 sectionSelect">
                                    <option value="#first_section" >1</option>
                                    <option value="#latest_pa_income" >2</option>
                                    <option value="#additional_information" >3</option>
                                    <option value="#part_a_income" >4</option>
                                    <option value="#general_information" selected>5</option>
                                    <option value="#last_section">6</option>
                                </select>
                            </div>
                            <div class="my-auto"> <a href="#last_section" ><i class="fas fa-chevron-right"></i> </a></div>
                            <div class="my-auto ps-2" ><a href="#last_section" > <i class="fas fa-chevron-right"></i><i class="fas fa-chevron-right"></i> </a></div>
                        </div>

                        @include('layouts.footer3', ['page' => 5])

                    </div>
                </section>
                <section class="section_area row page1 bg-white pt-5 p-lg-5 pe-2 pe-5 m-3 mt-4  pt-lg-5 pt-4" id="last_section">
                    <div class="col-lg-10 mx-auto">
                        <div class="row mt-3 border-bottom pb-500">
                            <div class="col-lg-6">
                                <h5 class="text-center border border-dark p-2 text-dark">SECTION VI</h5>
                                <h4>MONTHLY INCOME AND EXPENSE ANALYSIS</h4>
                                <p>Report all sources of income, both gross and net, earned
                                    and/or received on a monthly basis and all sources of
                                    necessary living expenses paid and/or incurred on a monthly
                                    basis. Additional lines have been provided for reporting
                                    income and/or expense items not already itemized in
                                    Section V. Each entry should be verified for accuracy. The
                                    department may request supportive documents to
                                    substantiate this information.</p>
                                <h5 class="text-center bg-dark p-2 text-white">LINES 13 - 14</h5>
                                <h4>WAGES/SALARY</h4>
                                <p>Report gross and net income figures obtained from all of
                                    your wage statements. If you are paid on a weekly basis,
                                    multiply your weekly gross and net salary by 4.3 to arrive at
                                    your monthly gross and net income.</p>
                                <h5 class="text-center bg-dark p-2 text-white">LINE 20</h5>
                                <h4>TOTAL INCOME</h4>
                                <p>Report total income, both gross and net, from all income
                                    sources identified under Items 13-19.</p>
                                <h5 class="text-center bg-dark p-2 text-white">LINES 21 - 29</h5>
                                <h4>NECESSARY LIVING EXPENSES</h4>
                                <p>Report accurate amounts for expenses verified by
                                    examining your checkbook for the last six months.</p>
                            </div>
                            <div class="col-lg-6">
                                <h5 class="text-center bg-dark p-2 text-white">LINES 23</h5>
                                <p>Report allowable installment payments, the minimum
                                    payments on secured or legally perfected debts (car
                                    payments, judgments, etc.). Do not include payments on
                                    encumbered assets (boats, recreational vehicle, etc.),
                                    which are not necessary living expenses.</p>
                                <h5 class="text-center bg-dark p-2 text-white">LINES 30</h5>
                                <h4>TOTAL</h4>
                                <p>Report total expenses from all liability sources identified
                                    under Lines 21-29.</p>

                                <h5 class="text-center border border-dark p-2 text-dark">SECTION VII</h5>
                                <h4>CERTIFICATION</h4>
                                <p>Signature by you, your spouse or your attorney/accountant
                                    (POA attached), certifies that statements and entries
                                    contained in the Statement of Financial Condition for
                                    individuals and/or accompanying schedules are correct to
                                    the best knowledge and belief of the undersigned.</p>
                                <p>Provide your signature along with the date your signature
                                    was posted. If a joint income tax return was filed, your
                                    spouse’s signature must also be provided.</p>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p>REV-488</p>
                            <p><a href="https://www.revenue.pa.gov" class="text-dark text-decoration-none"
                                    target="_blank">www.revenue.pa.gov</a></p>
                        </div>
                        <div class="d-flex gap-3 py-auto mb-2  ">
                            <div class="my-auto"> <a href="#first_section" ><i class="fas fa-chevron-left"></i><i class="fas fa-chevron-left"></i></a></div>
                            <div class="my-auto ps-2"> <a href="#general_information" ><i class="fas fa-chevron-left"></i></a> </div>
                            <div>
                                <select class="form-select w-100 sectionSelect">
                                    <option value="#first_section" >1</option>
                                    <option value="#latest_pa_income" >2</option>
                                    <option value="#additional_information" >3</option>
                                    <option value="#part_a_income" >4</option>
                                    <option value="#general_information" >5</option>
                                    <option value="#last_section" selected>6</option>
                                </select>
                            </div>
                            <div class="my-auto">  <i class="fas fa-chevron-right"></i>  </div>
                            <div class="my-auto ps-2" ><a href="#last_section" > <i class="fas fa-chevron-right"></i><i class="fas fa-chevron-right"></i> </a></div>
                        </div>
                        @include('layouts.footer3', ['page' => 6])

                    </div>
                </section>
            </form>
        </div>
    </div>
     <script>
        document.querySelectorAll('.sectionSelect').forEach(function(selectElement) {
            selectElement.addEventListener('change', function() {
                const selectedSection = this.value;
                if (selectedSection) {
                    window.location.hash = selectedSection;
                }
            });
        });
    </script>
</body>

</html>
