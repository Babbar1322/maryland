{{-- rev-488 PA.pdf  --}}
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
           .backdrop_filter{
            backdrop-filter: blur(5px) !important;
            -webkit-backdrop-filter: blur(5px) !important;
        }
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
            /* height : 100% !important; */

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
        @media screen and (max-width : 1600px) {
            .d_sm_block {
                display: block !important;
            }
            .responsive_input {
                width: 100% !important;
            }
        }
    </style>
</head>

<body>
    <div class="container-fluid py-1 py-lg-3">
        <div class="container bg_color p-lg-3 p-1">
            <form action="{{route('form4.submit')}}"   method="post">
                @csrf
                <section class="section_area row page1 bg-white pt-5 p-5 pe-2 pe-lg-5 m-3 mt-4  pt-lg-5 pt-4" id="first_section">
                    <div class="col-lg-12 mx-auto">
                        <div class="text-danger fw-bold text-center">IMPORTANT: FILL IN FORM MUST BE DOWNLOADED ONTO YOUR COMPUTER PRIOR TO COMPLETING</div>
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
                                    <div class="col-lg-3 h3 ">  REV-488</div>
                                    <div class="col-lg-3"></div>
                                    <div class="col-lg-5 ">
                                        <div class="border-bottom top_flex_text border-dark d-flex"><small>OFFICIAL USE ONLY</small>
                                            <span><input type="text" name="Official Use Only" class="w-100 border-0 responsive_input border-0"></span>
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
                                                    name="Taxpayer Name"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td>
                                                <div class="small_text">Date of Birth</div><input type="date" min="0"
                                                    name="Taxpayer's Date of Birth"
                                                    class="border-0  expires_input bg-transparent border   outline-none form-control">
                                            </td>
                                            <td>
                                                <div class="small_text">SSN</div><input type="text" name="Taxpayer SSN"
                                                    class="border-0  expires_input bg-transparent border   outline-none form-control">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="6">
                                                <div class="small_text">Taxpayer’s Street Address</div><input
                                                    type="text" name="Taxpayer's Street Address"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                        </tr>

                                        <tr>
                                            <td colspan="2">
                                                <div class="small_text">City</div><input type="number" min="0" name="Taxpayer's City"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td colspan="2">
                                                <div class="small_text">County</div><input type="text" name="Taxpayer's County"
                                                    class="border-0  expires_input bg-transparent border   outline-none form-control">
                                            </td>
                                            <td>
                                                <div class="small_text">State</div><input type="text" name="Taxpayer's State"
                                                    class="border-0  expires_input bg-transparent border   outline-none form-control">
                                            </td>
                                            <td>
                                                <div class="small_text">Zip Code</div><input type="text"
                                                    name="Taxpayer's ZIP Code"
                                                    class="border-0  expires_input bg-transparent border   outline-none form-control">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="4">
                                                <div class="small_text">Spouse’s Name (if applicable)</div><input
                                                    type="text" name="Spouse’s Name"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td>
                                                <div class="small_text">Date of Birth</div><input type="date" min="0"
                                                    name="Spouse’s Date of Birth"
                                                    class="border-0  expires_input bg-transparent border   outline-none form-control">
                                            </td>
                                            <td>
                                                <div class="small_text">SSN</div><input type="text" name="Spouse’s SSN"
                                                    class="border-0  expires_input bg-transparent border   outline-none form-control">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="6">
                                                <div class="small_text">Spouse’s Street Address (if different from
                                                    above)</div><input type="text" name="Spouse’s Street Address"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <div class="small_text">City</div><input type="text" name="Spouse’s City"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td colspan="2">
                                                <div class="small_text">County</div><input type="text"
                                                    name="Spouse’s County"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td>
                                                <div class="small_text">State</div><input type="text"
                                                    name="Spouse’s State"
                                                    class="border-0 expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td>
                                                <div class="small_text">Zip Code</div><input type="text"
                                                    name="Spouse’s Zip Code"
                                                    class="border-0  expires_input bg-transparent border   outline-none form-control">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="small_text">Phone Number</div><input type="number" min="0"
                                                    name="Taxpayer's Phone Number"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td colspan="2">
                                                <div class="small_text">Marital Status</div><input type="text"
                                                    name="Taxpayer's Marital Status"
                                                    class="border-0  expires_input bg-transparent border   outline-none form-control">
                                            </td>
                                            <td colspan="3">
                                                <div class="small_text">Number of Exemptions Claimed on W-4</div>
                                                 <input
                                                    type="text" name="Number of Exemptions Claimed on W-4"
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
                                                    type="text" name="Employer or Business Name"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="6">
                                                <div class="small_text">Employer or Business Street Address</div><input
                                                    type="text" name="Employer or Business Street Address"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                        </tr>

                                        <tr>
                                            <td colspan="2">
                                                <div class="small_text">City</div><input type="text"
                                                    name="Employer or Business City"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td colspan="2">
                                                <div class="small_text">County</div><input type="text"
                                                    name="Employer or Business County"
                                                    class="border-0  expires_input bg-transparent border   outline-none form-control">
                                            </td>
                                            <td>
                                                <div class="small_text">State</div><input type="text"
                                                    name="Employer or Business State"
                                                    class="border-0  expires_input bg-transparent border   outline-none form-control">
                                            </td>
                                            <td>
                                                <div class="small_text">Zip Code</div><input type="text"
                                                    name="Employer or Business ZIP Code"
                                                    class="border-0  expires_input bg-transparent border   outline-none form-control">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="small_text">Business Phone Number</div><input
                                                    type="number" min="0" name="Business Phone Number"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td>
                                                <div class="small_text">Occupation</div><input type="text"
                                                    name="Occupation"
                                                    class="border-0  expires_input bg-transparent border   outline-none form-control">
                                            </td>
                                            <td>
                                                <div class="small_text">Payday</div><input type="text"
                                                    name="Paydays"
                                                    class="border-0  expires_input bg-transparent border   outline-none form-control">
                                            </td>
                                            <td colspan="3">
                                                <div class="small_text">Fill In Appropriate Oval</div>
                                                <div class="row">
                                                <div class="col-lg-4"> <span class="small_text"> <input type="radio" name="Wage Earner 1" id="" value="Wage Earner" > Wage Earner</span></div>
                                                <div class="col-lg-4"> <span class="small_text"> <input type="radio" name="Partner 1" id="" value="Partner"> Partner</span></div>
                                                <div class="col-lg-4"> <span class="small_text"> <input type="radio" name="Sole Proprietor 1" id="" value="Sole Proprietor"> Sole Proprietor</span></div>
                                            </div>

                                        </tr>
                                        <tr>
                                            <td colspan="6">
                                                <div class="small_text">Spouse’s Employer or Business Name</div><input
                                                    type="text" name="Spouse’s Employer or Business Name"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="6">
                                                <div class="small_text">Employer or Business Street Address</div><input
                                                    type="text" name="Spouse’s Employer or Business Street Address"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                        </tr>

                                        <tr>
                                            <td colspan="2">
                                                <div class="small_text">City</div><input type="text"
                                                    name="Spouse’s City 2"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td colspan="2">
                                                <div class="small_text">County</div><input type="text"
                                                    name="Spouse’s County 2"
                                                    class="border-0  expires_input bg-transparent border   outline-none form-control">
                                            </td>
                                            <td>
                                                <div class="small_text">State</div><input type="text"
                                                    name="Spouse’s State 2"
                                                    class="border-0  expires_input bg-transparent border   outline-none form-control">
                                            </td>
                                            <td>
                                                <div class="small_text">Zip Code</div><input type="text"
                                                    name="Spouse’s Zip Code 2"
                                                    class="border-0  expires_input bg-transparent border   outline-none form-control">
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="small_text">Business Phone Number</div><input
                                                    type="number" min="0" name="Spouse’s Business Phone Number"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td>
                                                <div class="small_text">Occupation</div><input type="text"
                                                    name="Spouse’s Occupation"
                                                    class="border-0  expires_input bg-transparent border   outline-none form-control">
                                            </td>
                                            <td>
                                                <div class="small_text">Payday</div><input type="text"
                                                    name="Spouse’s Payday"
                                                    class="border-0  expires_input bg-transparent border   outline-none form-control">
                                            </td>
                                            <td colspan="3">
                                                <div class="small_text">Fill In Appropriate Oval</div>
                                                <div class="row">
                                                <div class="col-lg-4"> <span class="small_text"> <input type="radio" name="Wage Earner 2" id="" value="Wage Earner" > Wage Earner</span></div>
                                                <div class="col-lg-4"> <span class="small_text"> <input type="radio" name="Partner 2" id="" value="Partner"> Partner</span></div>
                                                <div class="col-lg-4"> <span class="small_text"> <input type="radio" name="Sole Proprietor 2" id="" value="Sole Proprietor"> Sole Proprietor</span></div>
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
                                                <input type="text" name="Next of Kin or Other Reference"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td colspan="2">
                                                <div class="small_text">Phone Number</div><input type="number" min="0"
                                                    name="Next of Kin or Other Reference Phone Number"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="6">
                                                <div class="small_text">Next of Kin or Other Reference Street Address
                                                </div><input type="text" name="Next of Kin or Other Reference Street Address"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <div class="small_text">City</div><input type="text"
                                                    name="Next of Kin or Other Reference City"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td colspan="2">
                                                <div class="small_text">County</div><input type="text"
                                                    name="Next of Kin or Other Reference County"
                                                    class="border-0  expires_input bg-transparent border   outline-none form-control">
                                            </td>
                                            <td>
                                                <div class="small_text">State</div><input type="text"
                                                    name="Next of Kin or Other Reference State"
                                                    class="border-0  expires_input bg-transparent border   outline-none form-control">
                                            </td>
                                            <td>
                                                <div class="small_text">Zip Code</div><input type="number" min="0"
                                                    name="Next of Kin or Other Reference ZIP Code"
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
                                            <td class="text-center"><input type="text" name="Dependent Age 1"
                                                    class="border-0  expires_input bg-transparent border   outline-none form-control">
                                            </td>
                                            <td colspan="2" class="text-center"><input type="text"
                                                    name="Dependent Relationship 1"
                                                    class="border-0  expires_input bg-transparent border   outline-none form-control">
                                            </td>
                                            <td class="text-center"><input type="text" name="Dependent Age 2"
                                                    class="border-0  expires_input bg-transparent border   outline-none form-control">
                                            </td>
                                            <td colspan="2" class="text-center"><input type="text"
                                                    name="Dependent Relationship 2"
                                                    class="border-0  expires_input bg-transparent border   outline-none form-control">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center"><input type="text" name="Dependent Age 3"
                                                    class="border-0  expires_input bg-transparent border   outline-none form-control">
                                            </td>
                                            <td colspan="2" class="text-center"><input type="text"
                                                    name="Dependent Relationship 3"
                                                    class="border-0  expires_input bg-transparent border   outline-none form-control">
                                            </td>
                                            <td class="text-center"><input type="text" name="Dependent Age 4"
                                                    class="border-0  expires_input bg-transparent border   outline-none form-control">
                                            </td>
                                            <td colspan="2" class="text-center"><input type="text"
                                                    name="Dependent Relationship 4"
                                                    class="border-0  expires_input bg-transparent border   outline-none form-control">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center"><input type="text" name="Dependent Age 5"
                                                    class="border-0  expires_input bg-transparent border   outline-none form-control">
                                            </td>
                                            <td colspan="2" class="text-center"><input type="text"
                                                    name="Dependent Relationship 5"
                                                    class="border-0  expires_input bg-transparent border   outline-none form-control">
                                            </td>
                                            <td class="text-center"><input type="text" name="Dependent Age 6"
                                                    class="border-0  expires_input bg-transparent border   outline-none form-control">
                                            </td>
                                            <td colspan="2" class="text-center"><input type="text"
                                                    name="Dependent Relationship 6"
                                                    class="border-0  expires_input bg-transparent border   outline-none form-control">
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>

                            @include('layouts.footer3', ['page' => 1])

                        </div>
                    </div>
                </section>
                <section class="section_area row page1 bg-white pt-5 p-5 pe-2 pe-lg-5  m-3 mt-4  pt-lg-5 pt-4" id="second_section">
                    <div class="col-lg-10 mx-auto" id="second_section">
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
                                                </div><input type="text" name="Latest PA Income Tax Return Filed (Tax Year)"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td colspan="3">
                                                <div class="small_text">Adjusted Gross Income on Return</div><input
                                                    type="text" name="Adjusted Gross Income on Return"
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
                                            <td colspan="2"> <input type="text" name="Name of Institution 1"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td> <input type="text" name="Address of Institution 1"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td> <input type="text" name="Type of Account 1"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td> <input type="number" min="0" name="Account Number 1"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="Balance 1"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td colspan="2"> <input type="text" name="Name of Institution 2"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td> <input type="text" name="Address of Institution 2"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td> <input type="text" name="Type of Account 2"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td> <input type="number" min="0" name="Account Number 2"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="Balance 2"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"> <input type="text" name="Name of Institution 3"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td> <input type="text" name="Address of Institution 3"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td> <input type="text" name="Type of Account 3"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td> <input type="number" min="0" name="Account Number 3"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="Balance 3"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"> <input type="text" name="Name of Institution 4"
                                                    class="border-0 expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td> <input type="text" name="Address of Institution 4"
                                                    class="border-0 expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td> <input type="text" name="Type of Account 4"
                                                    class="border-0 expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td> <input type="number" min="0" name="Account Number 4"
                                                    class="border-0 expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="Balance 4"
                                                        class="border-0 expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="5" class="text-end small_text">TOTAL (Enter in Section V,
                                                Line 2) </td>
                                            <td>
                                                <div class="d-flex">$<input type="text" name="Total Balance"
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
                                            <td><input type="text" name="Type of Account or Card 1"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td colspan="3"> <input type="text" name="Name and Address of Financial Institution 1"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="Monthly Payment 1"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="Credit Limit 1"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="Amount Owed 1"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="Credit Available 1"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td><input type="text" name="Type of Account or Card 2"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td colspan="3"> <input type="text" name="Name and Address of Financial Institution 2"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="Monthly Payment 2"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="Credit Limit 2"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="Amount Owed 2"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="Credit Available 2"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td><input type="text" name="Type of Account or Card 3"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td colspan="3"> <input type="text" name="Name and Address of Financial Institution 3"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="Monthly Payment 3"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="Credit Limit 3"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="Amount Owed 3"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="Credit Available 3"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td><input type="text" name="Type of Account or Card 4" class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td colspan="3"> <input type="text" name="Name and Address of Financial Institution 4" class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="Monthly Payment 4" class="border-0  expires_input bg-transparent border outline-none form-control"> </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="Credit Limit 4" class="border-0  expires_input bg-transparent border outline-none form-control"> </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="Amount Owed 4" class="border-0  expires_input bg-transparent border outline-none form-control"> </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="Credit Available 4" class="border-0  expires_input bg-transparent border outline-none form-control"> </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="4" class="text-end small_text"> TOTAL (Enter in Section V,
                                                Line 8)</td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="Total Monthly Payment" class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="Total Credit Limit" class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="Total Amount Owed" class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="Total Credit Available" class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>

                                        </tr>
                                    </tbody>
                                </table>
                                <small>Safe Deposit Boxes Rented or Accessed (list all locations, box numbers and
                                    contents)</small>
                                <table class="  table-bordered mt-1 border-black table  my-lg-1">
                                    <tbody>
                                        <tr>
                                            <td class="small_text text-center">BOX NUMBER</td>


                                            <td colspan="4" class="small_text text-center">SAFE DEPOSIT BOX
                                                LOCATION</td>
                                            <td colspan="3" class="small_text text-center">CONTENTS</td>
                                        </tr>
                                        <tr>
                                            <td><input type="text" name="Box Number 1" class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td colspan="4"><input type="text" name="Safe Deposit Box Location 1" class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td colspan="3"><input type="text" name="Contents 1" class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><input type="text" name="Box Number 2" class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td colspan="4"><input type="text" name="Safe Deposit Box Location 2" class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td colspan="3"><input type="text" name="Contents 2" class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><input type="text" name="Box Number 3" class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td colspan="4"><input type="text" name="Safe Deposit Box Location 3" class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td colspan="3"><input type="text" name="Contents 3" class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                        </tr>

                                    <tbody>
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
                                            <td colspan="2"><input type="text" name="a. Real Property Description"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td><input type="text" name="a. Type of Ownership"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td colspan="4"><input type="text" name="a. Address (Include County and State)"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="" style="width:1px;">
                                                <div class=" px-2">b.</div>
                                            </td>
                                            <td colspan="2"><input type="text" name="b. Real Property Description"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td><input type="text" name="b. Type of Ownership"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td colspan="4"><input type="text" name="b. Address (Include County and State)"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="" style="width:1px;">
                                                <div class=" px-2">c.</div>
                                            </td>
                                            <td colspan="2"><input type="text" name="c. Real Property Description"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td><input type="text" name="c. Type of Ownership"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td colspan="4"><input type="text" name="c. Address (Include County and State)"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="" style="width:1px;">
                                                <div class=" px-2">d.</div>
                                            </td>
                                            <td colspan="2"><input type="text" name="d. Real Property Description"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td><input type="text" name="d. Type of Ownership"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td colspan="4"><input type="text" name="d. Address (Include County and State)"
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
                                            <td colspan="3"> <input type="text" name="Name of Life Insurance Company 1" class="border-0  expires_input bg-transparent border outline-none form-control"> </td>
                                            <td> <input type="number" min="0" name="Poicy Number 1" class="border-0  expires_input bg-transparent border outline-none form-control"> </td>
                                            <td> <input type="text" name="Type 1" class="border-0  expires_input bg-transparent border outline-none form-control"> </td>
                                            <td>  <div class="d-flex">$<input type="number" min="0" name="Face Value 1" class="border-0  expires_input bg-transparent border outline-none form-control"> </div> </td>
                                            <td> <div class="d-flex">$<input type="number" min="0" name="Available Loan Value 1" class="border-0  expires_input bg-transparent border outline-none form-control"> </div> </td>
                                        </tr>
                                        <tr>
                                            <td colspan="3"> <input type="text" name="Name of Life Insurance Company 2" class="border-0  expires_input bg-transparent border outline-none form-control"> </td>
                                            <td> <input type="number" min="0" name="Poicy Number 2" class="border-0  expires_input bg-transparent border outline-none form-control"> </td>
                                            <td> <input type="text" name="Type 2" class="border-0  expires_input bg-transparent border outline-none form-control"> </td>
                                            <td>  <div class="d-flex">$<input type="number" min="0" name="Face Value 2" class="border-0  expires_input bg-transparent border outline-none form-control"> </div> </td>
                                            <td> <div class="d-flex">$<input type="number" min="0" name="Available Loan Value 2" class="border-0  expires_input bg-transparent border outline-none form-control"> </div> </td>
                                        </tr>
                                        <tr>
                                            <td colspan="3"> <input type="text" name="Name of Life Insurance Company 3" class="border-0  expires_input bg-transparent border outline-none form-control"> </td>
                                            <td> <input type="number" min="0" name="Poicy Number 3" class="border-0  expires_input bg-transparent border outline-none form-control"> </td>
                                            <td> <input type="text" name="Type 3" class="border-0  expires_input bg-transparent border outline-none form-control"> </td>
                                            <td>  <div class="d-flex">$<input type="number" min="0" name="Face Value 3" class="border-0  expires_input bg-transparent border outline-none form-control"> </div> </td>
                                            <td> <div class="d-flex">$<input type="number" min="0" name="Available Loan Value 3" class="border-0  expires_input bg-transparent border outline-none form-control"> </div> </td>
                                        </tr>
                                        <tr>
                                            <td colspan="3"> <input type="text" name="Name of Life Insurance Company 4" class="border-0  expires_input bg-transparent border outline-none form-control"> </td>
                                            <td> <input type="number" min="0" name="Poicy Number 4" class="border-0  expires_input bg-transparent border outline-none form-control"> </td>
                                            <td> <input type="text" name="Type 4" class="border-0  expires_input bg-transparent border outline-none form-control"> </td>
                                            <td>  <div class="d-flex">$<input type="number" min="0" name="Face Value 4" class="border-0  expires_input bg-transparent border outline-none form-control"> </div> </td>
                                            <td> <div class="d-flex">$<input type="number" min="0" name="Available Loan Value 4" class="border-0  expires_input bg-transparent border outline-none form-control"> </div> </td>
                                        </tr>

                                    </tbody>
                                </table>

                            </div>
                            @include('layouts.footer3', ['page' => 2])

                    </div>
                </section>
                <section class="section_area row page1 bg-white pt-5 p-5 pe-2 pe-lg-5  m-3 mt-4  pt-lg-5 pt-4" id="third_section">
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
                                            <td colspan="3"> <input type="text" name="1. Cash Description"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="1. Cash Current Market Value"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                            <td colspan="2" class="bg-secondary"> </td>
                                        </tr>
                                        <tr>
                                            <td>2. Bank Accounts</td>
                                            <td colspan="3"> <input type="yrcy" name="2. Bank Accounts Description"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="2. Bank Accounts Current Market Value" class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                            <td colspan="2" class="bg-secondary"> </td>
                                        </tr>
                                        <tr>
                                            <td>3. Stocks, bonds, investments</td>
                                            <td colspan="3"> <input type="text" name="3. Stocks, Bonds, Investments Description"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="3. Stocks, Bonds, Investments Current Market Value"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="3. Stocks, Bonds, Investments Liability Balance Due"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="3. Stocks, Bonds, Investments Amount of Monthly Payment"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4. Cash or loan value of insurance</td>
                                            <td colspan="3"> <input type="text" name="4. Cash or Loan Value or Insurance Description"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="4. Cash or Loan Value or Insurance Current Market Value"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="4. Cash or Loan Value or Insurance Liability Balance Due"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="4. Cash or Loan Value or Insurance Amount of Monthly Payment"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td rowspan="2">5. Vehicles (model, year, license)</td>
                                            <td class="" style="width:1px;">
                                                <div class=" px-2">a.</div>
                                            </td>
                                            <td colspan="2"> <input type="text" name="5a. Vehicles Description"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="5a. Vehicles Current Market Value"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="5a. Vehicles Liability Balance Due"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="5a. Vehicles Amount of Monthly Payment"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="" style="width:1px;">
                                                <div class=" px-2">b.</div>
                                            </td>
                                            <td colspan="2"> <input type="text" name="5b. Vehicles Description"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="5b. Vehicles Current Market Value"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="5b. Vehicles Liability Balance Due"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="5b. Vehicles Amount of Monthly Payment"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td rowspan="2">6. Real Property</td>
                                            <td class="" style="width:1px;">
                                                <div class=" px-2">a.</div>
                                            </td>
                                            <td colspan="2"> <input type="text" name="6a. Real Property Description"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="6a. Real Property Current Market Value"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="6a. Real Property Liability Balance Due"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="6a. Real Property Amount of Monthly Payment"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="" style="width:1px;">
                                                <div class=" px-2">b.</div>
                                            </td>
                                            <td colspan="2"> <input type="text" name="6b. Real Property Description"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="6b. Real Property Current Market Value"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="6b. Real Property Liability Balance Due"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="6b. Real Property Amount of Monthly Payment"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td rowspan="2">7. Other Assets</td>
                                            <td class="" style="width:1px;">
                                                <div class=" px-2">a.</div>
                                            </td>
                                            <td colspan="2"> <input type="text" name="7a. Other Assets Description"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="7a. Other Assets Current Market Value"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="7a. Other Assets Liability Balance Due"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="7a. Other Assets Amount of Monthly Payment"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="" style="width:1px;">
                                                <div class=" px-2">b.</div>
                                            </td>
                                            <td colspan="2"> <input type="text" name="7b. Other Assets Description"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="7b. Other Assets Current Market Value"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="7b. Other Assets Liability Balance Due"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="7b. Other Assets Amount of Monthly Payment"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>8. Bank Revolving Credit</td>
                                             <td colspan="3"> <input type="text" name="8. Bank Revolving Credit Description"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="8. Bank Revolving Credit Current Market Value"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="8. Bank Revolving Credit Liability Balance Due"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="8. Bank Revolving Credit Amount of Monthly Payment"
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
                                            <td colspan="2"> <input type="text" name="9a. Other Liabilities Description"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="9a. Other Liabilities Current Market Value"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="9a. Other Liabilities Liability Balance Due"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="9a. Other Liabilities Amount of Monthly Payment"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="" style="width:1px;">
                                                <div class=" px-2">b.</div>
                                            </td>
                                            <td colspan="2"> <input type="text" name="9b. Other Liabilities Amount of Monthly Payment"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="9b. Other Liabilities Liability Balance Due"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="9b. Other Liabilities Current Market Value"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="9b. Other Liabilities Description"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="" style="width:1px;">
                                                <div class=" px-2">c.</div>
                                            </td>
                                            <td colspan="2"> <input type="text" name="9c. Other Liabilities Description"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="9c. Other Liabilities Current Market Value"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="9c. Other Liabilities Liability Balance Due"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="9c. Other Liabilities Amount of Monthly Payment"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>10. Federal Taxes Owed</td>
                                            <td colspan="3"> <input type="text" name="10. Federal Taxes Owed Description"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="10. Federal Taxes Owed Current Market Value"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="10. Federal Taxes Owed Liability Balance Due"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="10. Federal Taxes Owed Amount of Monthly Payment"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>11. State Taxes Owed</td>
                                            <td colspan="3"> <input type="text" name="11. Sales Taxes Owed Description"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="11. Sales Taxes Owed Current Market Value"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="11. Sales Taxes Owed Liability Balance Due"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="11. Sales Taxes Owed Amount of Monthly Payment"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>12. TOTALS</td>
                                            <td colspan="3"> <input type="text" name="12. Total Description"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="12. Total Current Market Value"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="12. Total Liability Balance Due"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" min="0" name="12. Total Amount of Monthly Payment"
                                                        class="border-0  expires_input bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            @include('layouts.footer3', ['page' => 3])

                        </div>
                    </div>
                </section>
                <section class="section_area row page1 bg-white pt-5 p-5 pe-2 pe-lg-5 m-3 mt-4  pt-lg-5 pt-4" id="fourth_section">
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
                                            <div class="d-flex">$<input type="number" min="0" name="13. Wages/Salary (Taxpayer) Gross"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex">$<input type="number" min="0" name="13. Wages/Salary (Taxpayer) Net"
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
                                            <div class="d-flex">$<input type="number" min="0" name="14. Wages/Salary (Spouse) Gross"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex">$<input type="number" min="0" name="14. Wages/Salary (Spouse) Net"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="5">15. Interest - Dividends</td>
                                        <td>
                                            <div class="d-flex">$<input type="number" min="0" name="15. Interest - Dividends Gross"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex">$<input type="number" min="0" name="15. Interest - Dividends Net"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="5">16. Net business Income (from Form REV-484 or REV-488)
                                        </td>
                                        <td>
                                            <div class="d-flex">$<input type="number" min="0" name="16. Net Business Income Gross"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex">$<input type="number" min="0" name="16. Net Business Income Net"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="5">17. Rental Income</td>
                                        <td>
                                            <div class="d-flex">$<input type="number" min="0" name="17. Rental Income Gross"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex">$<input type="number" min="0" name="17. Rental Income Net"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="5"><div class="d-flex">18. Pension (Taxpayer) Source: <input type="text"  name="18. Pension (Taxpayer) Source"
                                            class="border-0  expires_input bg-transparent border outline-none  ">
                                    </div></td>
                                        <td>
                                            <div class="d-flex">$<input type="number" min="0" name="18. Pension (Taxpayer) Gross"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex">$<input type="number" min="0" name="18. Pension (Taxpayer) Net"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                         <td colspan="5"><div class="d-flex">19. Pension (Spouse) Source: <input type="text"  name="19. Pension (Spouse) Source"
                                            class="border-0  expires_input bg-transparent border outline-none  ">
                                    </div></td>
                                        <td>
                                            <div class="d-flex">$<input type="number" min="0" name="19. Pension (Spouse) Gross"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex">$<input type="number" min="0" name="19. Pension (Spouse) Net"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="5">20. TOTAL</td>
                                        <td>
                                            <div class="d-flex">$<input type="number" min="0" name="20. Total Gross"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex">$<input type="number" min="0" name="20. Total Net"
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
                                            <div class="d-flex">$<input type="number" min="0" name="21. Rent/House Payment"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="6">22. Groceries</td>
                                        <td>
                                            <div class="d-flex">$<input type="number" min="0" name="22. Groceries"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="6">23. Allowable Installment Payments</td>
                                        <td>
                                            <div class="d-flex">$<input type="number" min="0" name="23. Allowable Installment Payments"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="6">24. Utilities</td>
                                        <td>
                                            <div class="d-flex">$<input type="number" min="0" name="24. Utilities"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="6">25. Transportation</td>
                                        <td>
                                            <div class="d-flex">$<input type="number" min="0" name="25. Transportation"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="6">26. Insurance</td>
                                        <td>
                                            <div class="d-flex">$<input type="number" min="0" name="26. Insurance"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="6">27. Medical</td>
                                        <td>
                                            <div class="d-flex">$<input type="number" min="0" name="27. Medical"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="6">28. Estimated Tax Payments (federal-state)</td>
                                        <td>
                                            <div class="d-flex">$<input type="number" min="0" name="28. Estimated Tax Payments (federal-state)"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="6">29. Other Expenses (specify)</td>
                                        <td>
                                            <div class="d-flex">$<input type="number" min="0" name="29. Other Expenses (specifiy)"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="6">30. TOTAL</td>
                                        <td>
                                            <div class="d-flex">$<input type="number" min="0" name="30. Total"
                                                    class="border-0  expires_input bg-transparent border outline-none form-control">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="6">31. Net Difference (income less necessary living
                                            expenses)</td>
                                        <td>
                                            <div class="d-flex">$<input type="number" min="0" name="31. Net Difference (income less necessary living expenses)"
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
                                        <td colspan="2">Print Name<input type="text" name="Print Name" class="border-0  expires_input bg-transparent border outline-none form-control">
                                        </td>
                                        <td colspan="4">Signature <input type="text" name="SIGN AFTER PRINTING" class="border-0  expires_input bg-transparent border outline-none form-control">
                                        </td>
                                        <td>Date<input type="date" name="Certification Date 1" class="border-0  expires_input bg-transparent border outline-none form-control">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Spouse, Attorney or Accountant Print Name<input
                                                type="text" name="Spouse, Attorney or Accountant Print Name"
                                                class="border-0  expires_input bg-transparent border outline-none form-control">
                                        </td>
                                        <td colspan="4">Spouse, Attorney or Accountant Signature (POA Attached)
                                            <input type="text" name="Spouse, Attorney or Accountant Signature (POA Attached)"
                                                class="border-0  expires_input bg-transparent border outline-none form-control">
                                        </td>
                                        <td>Date<input type="date" name="Certification Date 2"
                                                class="border-0  expires_input bg-transparent border outline-none form-control">
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>

                        @include('layouts.footer3', ['page' => 4])

                    </div>
                     </div>
                </section>
                <section class="section_area row page1 bg-white pt-5 p-lg-5 pe-2 pe-5 m-3 mt-4  pt-lg-5 pt-4" id="fifth_section">
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

                        @include('layouts.footer3', ['page' => 5])

                    </div>
                </section>
                <section class="section_area row page1 bg-white pt-5 p-lg-5 pe-2 pe-5 m-3 mt-4  pt-lg-5 pt-4">
                    <div class="col-lg-10 mx-auto" id="sixth_section">
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
                        @include('layouts.footer3', ['page' => 6])
                        {{-- @include('layouts.pagination', ['page' => 4]) --}}

                    </div>
                </section>
            </div>
            <div class="position-absolute position-fixed top-0 py-3 backdrop_filter end-0 px-3">
                <div class="col">
                    <button type="submit" class="btn btn-success px-4">Save</button>
                </div>
                <div class="pt-3">
                    <button type="button" class="btn btn-dark px-4">Back</button>
                </div>
            </div>
        </form>
    </div>
    <div class="position-absolute position-fixed bottom-0 py-2 backdrop_filter px-3">
        <select name="" id="" class="sectionSelect form-select  mx-auto ">
            <option value="" disabled selected>Select a section</option>
            <option value="#first_section">First Section</option>
            <option value="#second_section">Second Section</option>
            <option value="#third_section">Third Section</option>
            <option value="#fourth_section">Fourth Section</option>
            <option value="#fifth_section">Fifth Section</option>
            <option value="#sixth_section">Sixth Section</option>
        </select>
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
