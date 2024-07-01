{{-- NH financial affidavit nhjb-2065-f.pdf --}}
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
        .backdrop_filter {
            backdrop-filter: blur(5px) !important;
            -webkit-backdrop-filter: blur(5px) !important;
        }
        .blue_border {
            border: 2px solid #4e4ed8;
        }
        td {
            padding: 0px !important;
            padding-left: 5px !important;
            background-color: transparent !important;
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

        .table> :not(caption)>*>* {
            background-color: white;
        }

        .section_area {
            background-color: white !important;
            margin: 10px !important;
        }

        .top:focus {
            border-bottom: none !important;
        }

        input:focus-visible {
            outline: none !important;
            border-bottom: 2px solid black !important;
        }

        .footer_padding {
            padding-top: 400px !important;
        }

        @media screen and (max-width : 1600px) {
            .d_sm_block {
                display: block !important;
            }

            .responsive_input {
                width: 100% !important;
            }

            .ms_sm_0 {
                margin-left: 0px !important;
            }
        }

        @media screen and (max-width : 768px) {
            .d_sm_block {
                display: block !important;
            }

            .small_text {
                height: auto !important;
            }

            .footer_padding {
                padding-top: 50px !important;
            }

            .responsive_input {
                width: 100% !important;
            }

            .section_area {
                padding-left: 10px !important;
                padding-right: 10px !important;
            }

            .container-fluid {
                padding-right: 0px !important;
                padding-left: 0px !important;
            }
        }

        .bg_color {
            background-color: #8c8a8a;
        }

        .bg-secondary {
            background-color: rgb(184 188 192) !important;
        }

        body {
            font-size: 18px !important;
        }

        .small_text {
            font-size: 15px;
        }

        .tdata input:focus {
            border-bottom: none !important;
        }

        input[type='radio'] {
            accent-color: #8c8a8a !important;
        }

        input[type='checkbox'] {
            accent-color: #8c8a8a !important;
        }
        .w-96 {
            width: 96% !important;
        }
    </style>
</head>

<body>
    <div class="container-fluid   py-1 py-lg-3">
        <div class="container bg_color p-lg-3 p-1  ">
            <form action="{{ route('form24.submit') }}" method="post">
                @csrf
                <section class="section_area p-5" id="first_section">
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show">{{ session('success') }} <button
                                type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <div class="row">
                        <div class="fw-bold text-center">THE STATE OF NEW HAMPSHIRE</div>
                        <div class="fw-bold text-center">JUDICIAL BRANCH</div>
                        <h6 class="fw-bold text-center"><a href="https://www.courts.nh.gov/" class="text-dark" target="_blank">http://www.courts.state.nh.us</a></h6>
                        <div class=" ">
                            <div class="d-flex d_sm_block">
                                <span>Court Name: </span>
                                {{-- <input type="text" class="border-none border-0 border-bottom responsive_input shadow-none my-auto responsive_input" name="plaintiff_name" style="width:1070px;"> --}}
                                <select
                                        class="form-select form-control border-0 border-bottom ms-lg-2 responsive_input"  name="plaintiff_name" style="width:1060px;">
                                        <option selected=""> </option>
                                        <option value="1st Circuit - Family Division - Berlin">1st Circuit - Family Division - Berlin</option>
                                        <option value="1st Circuit - Family Division - Colebrook">1st Circuit - Family Division - Colebrook</option>
                                        <option value="1st Circuit - Family Division - Lancaster">1st Circuit - Family Division - Lancaster</option>
                                        <option value="2nd Circuit - Family Division - Haverhill">2nd Circuit - Family Division - Haverhill</option>
                                        <option value="2nd Circuit - Family Division - Lebanon">2nd Circuit - Family Division - Lebanon</option>
                                        <option value="2nd Circuit - Family Division -Littleton">2nd Circuit - Family Division - Littleton</option>
                                        <option value="2nd Circuit - Family Division - Plymouth">2nd Circuit - Family Division - Plymouth</option>
                                        <option value="3rd Circuit - Family Division - Conway">3rd Circuit - Family Division - Conway</option>
                                        <option value="3rd Circuit - Family Division - Ossipee">3rd Circuit - Family Division - Ossipee</option>
                                        <option value="4th Circuit - Family Division - Laconia">4th Circuit - Family Division - Laconia</option>
                                        <option value="5th Circuit - Family Division - Claremont">5th Circuit - Family Division - Claremont</option>
                                        <option value="5th Circuit - Family Division - Newport">5th Circuit - Family Division - Newport</option>
                                        <option value="6th Circuit - Family Division - Concord">6th Circuit - Family Division - Concord</option>
                                        <option value="6th Circuit - Family Division - Franklin">6th Circuit - Family Division - Franklin</option>
                                        <option value="6th Circuit - Family Division - Hillsborough">6th Circuit - Family Division - Hillsborough</option>
                                        <option value="6th Circuit - Family Division - Hooksett">6th Circuit - Family Division - Hooksett</option>
                                        <option value="7th Circuit - Family Division - Dover">7th Circuit - Family Division - Dover</option>
                                        <option value="7th Circuit - Family Division - Rochester at Rochester Courthouse">7th Circuit - Family Division - Rochester at Rochester Courthouse</option>
                                        <option value="7th Circuit - Family Division - Rochester at Strafford County Building">7th Circuit - Family Division - Rochester at Strafford County Building</option>
                                        <option value="8th Circuit - Family Division - Jaffrey">8th Circuit - Family Division - Jaffrey</option>
                                        <option value="8th Circuit - Family Division - Keene">8th Circuit - Family Division - Keene</option>
                                        <option value="9th circuit - Family Division - Goffstown">9th circuit - Family Division - Goffstown</option>
                                        <option value="9th circuit - Family Division - Manchester">9th Circuit - Family Division - Manchester</option>
                                        <option value="9th circuit - Family Division - Merrimack">9th Circuit - Family Division - Merrimack</option>
                                        <option value="9th Circuit - Family Division - Milford">9th Circuit - Family Division - Milford</option>
                                        <option value="9th Circuit - Family Division - Nashua">9th Circuit - Family Division - Nashua</option>
                                        <option value="10th Circuit - Family Division - Brentwood">10th Circuit - Family Division - Brentwood</option>
                                        <option value="10th Circuit - Family Division - Candia">10th Circuit - Family Division - Candia</option>
                                        <option value="10th Circuit - Family Division - Derry">10th Circuit - Family Division - Derry</option>
                                        <option value="10th Circuit - Family Division - Hampton">10th Circuit - Family Division - Hampton</option>
                                        <option value="10th Circuit - Family Division - Portsmouth">10th Circuit - Family Division - Portsmouth</option>
                                        <option value="10th Circuit - Family Division - Salem">10th Circuit - Family Division - Salem</option>
                                    </select>
                            </div>
                            <div class="d-flex d_sm_block">
                                <span>Case Name: </span>
                                <input type="text" class="border-none border-0 border-bottom responsive_input shadow-none my-auto responsive_input" name="plaintiff_name" style="width:1075px;">
                            </div>
                            <div class="d-flex d_sm_block">
                                <span>Case Number:</span>
                                <input type="text" class="border-none border-0 border-bottom responsive_input shadow-none my-auto responsive_input" name="plaintiff_name" style="width:1057px;">
                            </div>
                            <div>
                                <small>(if known)</small>
                            </div>
                            <div class="fw-bold text-center">FINANCIAL AFFIDAVIT</div>
                        </div>
                    </div>
                    <div class="border border-dark p-1 row">
                         <div class="col-lg-6 border-end border-dark p-3 small_text">
                            <div class=" fw-bold">1. General Information</div>
                            <div class=" ">Name <input type="text" name="" id="" class="border-0 border-bottom responsive_input"  style="width:512px;"></div>
                            <div class=" ">Street Address <input type="text" name="" id="" class="border-0 border-bottom responsive_input"  style="width:452px;"></div>
                            <div class=" ">Town/City, State, Zip <input type="text" name="" id="" class="border-0 border-bottom responsive_input"  style="width:413px;"></div>
                            <div class=" ">Mailing Address, if different <input type="text" name="" id="" class="border-0 border-bottom responsive_input"  style="width:365px;"></div>
                            <div class=" ">Telephone Number: <input type="text" name="" id="" class="border-0 border-bottom responsive_input"  style="width:418px;"></div>
                            <div class=" ">Date of Birth <input type="text" name="" id="" class="border-0 border-bottom responsive_input"  style="width:465px;"></div>
                            <div class=" ">Social Security Number <input type="text" name="" id="" class="border-0 border-bottom responsive_input"  style="width:395px;"></div>
                            <div class=" ">Highest Grade or Degree Completed <input type="text" name="" id="" class="border-0 border-bottom responsive_input"  style="width:305px;"></div>
                            <div class=" ">Date of Marriage <input type="text" name="" id="" class="border-0 border-bottom responsive_input"  style="width:440px;"></div>
                            <div class=" ">Date of Separation or Divorce <input type="text" name="" id="" class="border-0 border-bottom responsive_input" style="width:352px;"></div>
                            <div class=" ">2. Children born to, or adopted by, the Parties (Full Name, DOB, and SSN)</div>
                            <div class=" "> <input type="text" name="" id="" class="border-0 border-bottom w-100 responsive_input" ></div>
                            <div class=" "> <input type="text" name="" id="" class="border-0 border-bottom w-100 responsive_input"></div>
                            <div class=" "> <input type="text" name="" id="" class="border-0 border-bottom w-100 responsive_input"></div>
                            <div class=" "> <input type="text" name="" id="" class="border-0 border-bottom w-100 responsive_input"></div>
                            <div class=" d-flex d_sm_block">2a. Number of people currently living in household including self: <input type="text" name="" id="" class="border-0 border-bottom responsive_input" style="width:120px;"></div>
                            <div class="  ">3. Employment Information
                                Name, Address, and Phone Number of Employer</div>
                                <div class=" "> <input type="text" name="" id="" class="border-0 border-bottom w-100 responsive_input"></div>
                                <div class=" "> <input type="text" name="" id="" class="border-0 border-bottom w-100 responsive_input"></div>
                                <div class=" "> <input type="text" name="" id="" class="border-0 border-bottom w-100 responsive_input"></div>
                                <div>Date and Place of Last Employment</div>

                                <div class=" "> <input type="text" name="" id="" class="border-0 border-bottom w-100 responsive_input"></div>
                                <div class=" "> <input type="text" name="" id="" class="border-0 border-bottom w-100 responsive_input"></div>
                                <div>Job Skills</div>

                                <div class=" "> <input type="text" name="" id="" class="border-0 border-bottom w-100 responsive_input"></div>
                                <div class=" "> <input type="text" name="" id="" class="border-0 border-bottom w-100 responsive_input"></div>
                        </div>
                        <div class="col-lg-6  p-3 small_text">

                            <div class=" fw-bold">4. Monthly Income - Miscellaneous</div>
                            <div class=" d-flex justify-content-between d_sm_block">AFDC, TANF, and Food Stamps <span>$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></span></div>
                            <div class=" d-flex justify-content-between d_sm_block">Other Public Assistance <span>$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></span></div>
                            <div class=" d-flex justify-content-between d_sm_block">Children's Income <span>$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></span></div>
                            <div class=" d-flex justify-content-between d_sm_block">Child Support <span>$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></span></div>
                            <div class=" d-flex justify-content-between d_sm_block">5. Monthly Income Before Taxes</div>
                            <div class=" d-flex justify-content-between d_sm_block">Base Pay from Salary, Wages <span>$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></span></div>
                            <div class=" d-flex justify-content-between d_sm_block">Overtime and Shift Differential <span>$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></span></div>
                            <div class=" d-flex justify-content-between d_sm_block">Commissions, Tips, Bonuses <span>$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></span> </div>
                            <div class=" d-flex justify-content-between d_sm_block">Part-time Employment <span>$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></span></div>
                            <div class=" d-flex justify-content-between d_sm_block">Self-employment <span>$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></span></div>
                            <div class=" d-flex justify-content-between d_sm_block">Unemployment and Veteran's Benefits <span>$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></span></div>
                            <div class=" d-flex justify-content-between d_sm_block">Disability, Workers' Compensation <span>$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></span></div>
                            <div class=" d-flex justify-content-between d_sm_block">Pension and Retirement Benefits <span>$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></span></div>
                            <div class=" d-flex justify-content-between d_sm_block">Social Security Benefits (SSA) <span>$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></span></div>
                            <div class=" d-flex justify-content-between d_sm_block">Interest and Dividends <span>$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></span></div>
                            <div class=" d-flex justify-content-between d_sm_block">Trust and Other Investment Income <span>$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></span></div>
                            <div class=" d-flex justify-content-between d_sm_block">Rental Income and Business Profits <span>$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></span></div>
                            <div class=" d-flex justify-content-between d_sm_block">All other sources </div>
                            <div class=" d-flex justify-content-between d_sm_block"><input type="text" name="" id="" class="border-0 border-bottom responsive_input"  style="width:212px;"> <span>$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></span></div>
                            <div class="d-flex justify-content-between fw-bold d_sm_block">Total Section 5 Monthly Income <span>$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></span></div>
                            <div>6. Monthly Expenses</div>
                            <div class=" d-flex justify-content-between d_sm_block">Court Ordered Support for Others <span>$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></span></div>
                            <div class=" d-flex justify-content-between d_sm_block">State Income Taxes <span>$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></span></div>
                            <div class=" d-flex justify-content-between d_sm_block">Mandatory Pension <span>$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></span></div>
                            <div class=" d-flex justify-content-between d_sm_block">50% of actual self-employment taxes paid <span>$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></span></div>
                            <div class=" d-flex justify-content-between d_sm_block">Health Insurance for Parties' Children <span>$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></span></div>
                            <div class=" d-flex justify-content-between d_sm_block">Day Care for Parties' Children <span>$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></span></div>
                            <div class="fw-bold d-flex justify-content-between d_sm_block">Total Section 6 Monthly Expenses <span>$<input type="text" name="" id="" class="border-0 border-bottom responsive_input"></span></div>

                        </div>
                    </div>
                    <div class="row small_text">
                        <div class="col-lg-2">7. Assets</div>
                        <div class="col-lg-3">Fair Market Value</div>
                        <div class="col-lg-3">Related Debt</div>
                        <div class="col-lg-3">Additional Information</div>
                    </div>

                    <div class="row small_text">
                        <div class="col-lg-2">Homestead</div>
                        <div class="col-lg-3">
                            <div class="w-100"> $<input type="text" name="" id="" class="border-0 border-bottom responsive_input w-96" > </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="w-100">  $<input type="text" name="" id="" class="border-0 border-bottom responsive_input w-96" > </div>
                        </div>
                        <div class="col-lg-4">
                            <input type="text" name="" id="" class="border-0 border-bottom responsive_input w-100" >
                        </div>
                    </div>

                    <div class="row small_text">
                        <div class="col-lg-2">Other Real Estate</div>
                        <div class="col-lg-3">
                            <div class="w-100"> $<input type="text" name="" id="" class="border-0 border-bottom responsive_input w-96" > </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="w-100">  $<input type="text" name="" id="" class="border-0 border-bottom responsive_input w-96" > </div>
                        </div>
                        <div class="col-lg-4">
                            <input type="text" name="" id="" class="border-0 border-bottom responsive_input w-100" >
                        </div>
                    </div>

                    <div class="row small_text">
                        <div class="col-lg-2">Primary Motor Vehicle</div>
                        <div class="col-lg-3">
                            <div class="w-100"> $<input type="text" name="" id="" class="border-0 border-bottom responsive_input w-96" > </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="w-100">  $<input type="text" name="" id="" class="border-0 border-bottom responsive_input w-96" > </div>
                        </div>
                        <div class="col-lg-4">
                            <input type="text" name="" id="" class="border-0 border-bottom responsive_input w-100" >
                        </div>
                    </div>

                    <div class="row small_text">
                        <div class="col-lg-2">Other Motor Vehicles</div>
                        <div class="col-lg-3">
                            <div class="w-100"> $<input type="text" name="" id="" class="border-0 border-bottom responsive_input w-96" > </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="w-100">  $<input type="text" name="" id="" class="border-0 border-bottom responsive_input w-96" > </div>
                        </div>
                        <div class="col-lg-4">
                            <input type="text" name="" id="" class="border-0 border-bottom responsive_input w-100" >
                        </div>
                    </div>
                    <div class="row small_text">
                        <div class="col-lg-2">Furniture and Appliances</div>
                        <div class="col-lg-3">
                            <div class="w-100"> $<input type="text" name="" id="" class="border-0 border-bottom responsive_input w-96" > </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="w-100">  $<input type="text" name="" id="" class="border-0 border-bottom responsive_input w-96" > </div>
                        </div>
                        <div class="col-lg-4">
                            <input type="text" name="" id="" class="border-0 border-bottom responsive_input w-100" >
                        </div>
                    </div>
                    <div class="row small_text">
                        <div class="col-lg-2">Checking Accounts</div>
                        <div class="col-lg-3">
                            <div class="w-100"> $<input type="text" name="" id="" class="border-0 border-bottom responsive_input w-96" > </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="w-100">  $<input type="text" name="" id="" class="border-0 border-bottom responsive_input w-96" > </div>
                        </div>
                        <div class="col-lg-4">
                            <input type="text" name="" id="" class="border-0 border-bottom responsive_input w-100" >
                        </div>
                    </div>
                    <div class="row small_text">
                        <div class="col-lg-2">Investments</div>
                        <div class="col-lg-3">
                            <div class="w-100"> $<input type="text" name="" id="" class="border-0 border-bottom responsive_input w-96" > </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="w-100">  $<input type="text" name="" id="" class="border-0 border-bottom responsive_input w-96" > </div>
                        </div>
                        <div class="col-lg-4">
                            <input type="text" name="" id="" class="border-0 border-bottom responsive_input w-100" >
                        </div>
                    </div>
                    <div class="row small_text">
                        <div class="col-lg-2">Life Insurance</div>
                        <div class="col-lg-3">
                            <div class="w-100"> $<input type="text" name="" id="" class="border-0 border-bottom responsive_input w-96" > </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="w-100">  $<input type="text" name="" id="" class="border-0 border-bottom responsive_input w-96" > </div>
                        </div>
                        <div class="col-lg-4">
                            <input type="text" name="" id="" class="border-0 border-bottom responsive_input w-100" >
                        </div>
                    </div>
                    <div class="row small_text">
                        <div class="col-lg-2">Business Interests</div>
                        <div class="col-lg-3">
                            <div class="w-100"> $<input type="text" name="" id="" class="border-0 border-bottom responsive_input w-96" > </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="w-100">  $<input type="text" name="" id="" class="border-0 border-bottom responsive_input w-96" > </div>
                        </div>
                        <div class="col-lg-4">
                            <input type="text" name="" id="" class="border-0 border-bottom responsive_input w-100" >
                        </div>
                    </div>
                    <div class="row small_text">
                        <div class="col-lg-2">Pensions</div>
                        <div class="col-lg-3">
                            <div class="w-100"> $<input type="text" name="" id="" class="border-0 border-bottom responsive_input w-96" > </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="w-100">  $<input type="text" name="" id="" class="border-0 border-bottom responsive_input w-96" > </div>
                        </div>
                        <div class="col-lg-4">
                            <input type="text" name="" id="" class="border-0 border-bottom responsive_input w-100" >
                        </div>
                    </div>
                    <div class="row small_text">
                        <div class="col-lg-2">Retirement Accounts</div>
                        <div class="col-lg-3">
                            <div class="w-100"> $<input type="text" name="" id="" class="border-0 border-bottom responsive_input w-96" > </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="w-100">  $<input type="text" name="" id="" class="border-0 border-bottom responsive_input w-96" > </div>
                        </div>
                        <div class="col-lg-4">
                            <input type="text" name="" id="" class="border-0 border-bottom responsive_input w-100" >
                        </div>
                    </div>

                    @include('layouts.footer19', ['page' => 1])



                </section>
               <section class="section_area p-5" id="second_section">

                    <div class="pt-lg-5">
                    <div class="row">
                         <div class=" ">
                            <div class="d-flex d_sm_block">
                                <span>Case Name: </span>
                                <input type="text" class="border-none border-0 border-bottom responsive_input shadow-none my-auto responsive_input" name="plaintiff_name" style="width:1075px;">
                            </div>
                            <div class="d-flex d_sm_block">
                                <span>Case Number:</span>
                                <input type="text" class="border-none border-0 border-bottom responsive_input shadow-none my-auto responsive_input" name="plaintiff_name" style="width:1057px;">
                            </div>
                            <div class="fw-bold border-bottom mb-1">
                                FINANCIAL AFFIDAVIT
                             </div>
                             <div class="small_text border-top pb-2 border-bottom border-dark">8. Additional Assets - If you have an interest in any property which is held solely by or jointly with any other person or entity, and which has not already been disclosed, or if you are owed money from any source, please explain</div>
                             <div class="row small_text">
                                <div class="col-lg-6 ">

                                <div>9. Tax Return Information</div>
                                <div class=" d-flex d_sm_block">Year of last return filed <span><input type="text" name="" id="" class="border-0 border-bottom responsive_input" style="width:420px;"></span></div>
                                <div class=" d-flex d_sm_block">Single or joint return<span><input type="text" name="" id="" class="border-0 border-bottom responsive_input" style="width:435px;"></span></div>
                                <div class=" d-flex d_sm_block">My Total W-2s and 1099s = <span> $ <input type="text" name="" id="" class="border-0 border-bottom responsive_input" style="width:370px;"></span></div>
                                <div class=" d-flex d_sm_block"><span><input type="checkbox" name="" id="" class="me-2" ></span> If Self-employed, check here and attach copy of most recent IRS Schedule C.</div>
                                {{-- <div class=" d-flex   d_sm_block">Year of last return filed <span>$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></span></div> --}}
                                <div>10. Insurance</div>
                                <div class=" d-flex d_sm_block">Life Company<span><input type="text" name="" id="" class="border-0 border-bottom responsive_input" style="width:480px;"></span></div>
                                <div class=" d-flex d_sm_block">Type and Face Amount <span><input type="text" name="" id="" class="border-0 border-bottom responsive_input"  style="width:415px;"></span></div>
                                <div class=" d-flex d_sm_block">Beneficiaries <span><input type="text" name="" id="" class="border-0 border-bottom responsive_input" style="width:485px;"></span></div>
                                <div class=" d-flex d_sm_block">Health Company <span><input type="text" name="" id="" class="border-0 border-bottom responsive_input" style="width:458px;"></span></div>
                                <div class=" d-flex d_sm_block">Type <span><input type="text" name="" id="" class="border-0 border-bottom responsive_input"  style="width:538px;"></span></div>
                                <div>Description of Coverage</div>
                                <div><input type="text" name="" id="" class="border-0 border-bottom responsive_input w-100" ></div>
                                 <div class=" d-flex d_sm_block">Dental Company <span><input type="text" name="" id="" class="border-0 border-bottom responsive_input"  style="width:460px;"></span></div>
                                <div>Description of Coverage</div>
                                <div class=""><input type="text" name="" id="" class="w-100 border-0 border-bottom responsive_inputw-100 " ></div>

                                </div>
                                <div class="col-lg-6 small_text">

                                    <div class="small_text">11. Debts</div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="small_text">Who is debt owed to?</div>
                                            <div><input type="text" name="" class="border-0 border-bottom responsive_input" ></div>
                                            <div><input type="text" name="" class="border-0 border-bottom responsive_input" ></div>
                                            <div><input type="text" name="" class="border-0 border-bottom responsive_input" ></div>

                                        </div>
                                        <div class="col-lg-4">
                                            <div class="small_text">Who owes debt?</div>
                                            <div><input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></div>
                                            <div><input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></div>
                                            <div><input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></div>

                                        </div>
                                        <div class="col-lg-4">
                                            <div class="small_text">Balance</div>
                                            <div class="d-flex">$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></div>
                                            <div class="d-flex">$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></div>
                                            <div class="d-flex">$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></div>
                                        </div>
                                        <div>12. Retirement Plans</div>
                                        <div class=" d-flex d_sm_block">Plan or Account Name<span><input type="text" name="" id="" class="border-0 border-bottom responsive_input"  style="width:420px;"></span></div>
                                        <div class=" d-flex d_sm_block">Type <span><input type="text" name="" id="" class="border-0 border-bottom responsive_input"  style="width:538px;"></span></div>
                                        <div class=" d-flex d_sm_block">Most Recent Value <span class="ms-lg-4">$<input type="text" name="" id="" class="border-0 border-bottom responsive_input"></span></div>
                                         <div class=" d-flex d_sm_block">Value at Filing <span class="ms-lg-5">$<input type="text" name="" id="" class="border-0 border-bottom responsive_input"></span></div>
                                        <div class="sm_text">If Defined Benefit, status of vesting and description of Benefit</div>
                                        <div><input type="text" name="" id="" class="border-0 border-bottom responsive_input w-100" ></div>
                                        <div>13. Attachments:</div>
                                        <div class="d-flex d_sm_block ms-lg-3">
                                            <div class="me-lg-5"><input type="checkbox" name="" id="" class="me-1">Pay Stub</div>
                                            <div><input type="checkbox" name="" id="" class="me-1">Monthly Expenses</div>
                                        </div>

                                        <div class="d-flex d_sm_block ms-lg-3">
                                            <div class="me-lg-4"><input type="checkbox" name="" id="" class="me-1" >Schedule C</div>
                                            <div><input type="checkbox" name="" id="" class="me-1">Other (describe) <input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></div>
                                        </div>
                                        <div class="d-flex ms-lg-3">
                                             <div><input type="checkbox" name="" id="" class="me-1">Check here if parties agree to waive Monthly Expenses form.</div>
                                        </div>


                                    </div>
                                </div>


                                <div>14. Additional Information</div>
                                <div><input type="text" name="" id="" class="border-0 border-bottom responsive_input w-100" ></div>
                                <div><input type="text" name="" id="" class="border-0 border-bottom responsive_input w-100" ></div>

                                <div>
                                    <div>I swear (affirm) that:</div>
                                    <div>A. To the best of my knowledge and belief, I have fully disclosed all income and all assets having any substantial value; and</div>
                                    <div>B. I have reasonably estimated the fair market value of each asset; and</div>
                                    <div>C. I understand that I have a duty to update the information provided in this financial affidavit for each court hearing; and</div>
                                    <div>D. I understand that if a support order is issued in this case obligating me to pay support, it shall be my responsibility to immediately provide the Court with any change of address in writing. If I fail to do so, I may be held in default, found in contempt of court and a warrant may be issued for my arrest. (See USO Standing Order SO-4C.)</div>
                                    <div>E <b> Rule 1.25-A Compliance -- Family Division Only: (Initial one)</b></div>
                                    <div class="ms-lg-3"><input type="text" name="" id="" class="border-0 border-bottom">I have complied with Rule 1.25-A regarding mandatory disclosure; OR</div>
                                    <div class="ms-lg-3"><input type="text" name="" id="" class="border-0 border-bottom">I understand my obligation to comply with Rule 1.25-A regarding mandatory disclosure. I have not fully complied with Rule 1.25-A due to: <input type="text" name="" id="" class="border-0 border-bottom w-100"></div>
                                    <div class="d-flex d_sm_block justify-content-between w-100">
                                        <div class="w-25 responsive_input">
                                            <input type="text" name="" id="" class="border-bottom  border-0 w-100 responsive_input">
                                            <div class="small_text">Date</div>
                                        </div>
                                        <div class="w-25 responsive_input">
                                            <input type="text" name="" id="" class="border-bottom  border-0 w-100  responsive_input">
                                            <div class="small_text">Signature</div>
                                        </div>
                                    </div>
                                    <div class="d-flex  d_sm_block justify-content-around w-100">
                                        <div class="w-25 d-flex responsive_input d_sm_block">
                                            State of <input type="text" name="" id="" class="border-bottom  border-0 w-75 responsive_input">
                                         </div>
                                        <div class="w-25 d-flex responsive_input d_sm_block">
                                            County of<input type="text" name="" id="" class="border-bottom  border-0 w-75  responsive_input">
                                         </div>
                                    </div>
                                    <div class="small_text">The person signing this financial affidavit appeared and signed this before me and took oath that the statements set forth in this Financial Affidavit, together with any attachments listed in section 13 above, are true to the best of his or her knowledge and belief.</div>
                                    <div>This instrument was acknowledged before me on <input type="text" name="" id="" class="border-bottom  border-0  responsive_input w-25"> by <input type="text" name="" id="" class="border-bottom  border-0   w-25 responsive_input"> </div>

                                    <div class="d-flex justify-content-between d_sm_block  w-100">
                                        <div class="w-100">
                                           <div class="d-flex d_sm_block"> My commission expires:<input type="text" name="" id="" class="border-bottom  border-0 w-25 responsive_input"></div>
                                            <div class="small_text">Affix seal, if any</div>
                                        </div>
                                        <div class="w-25 responsive_input">
                                            <input type="text" name="" id="" class="border-bottom  border-0 w-100  responsive_input">
                                            <div class="small_text">Signature of Notarial Officer / Title</div>
                                        </div>
                                    </div>

                                    <div>I certify that on this date I provided a copy of this document to <input type="text" name="" id="" class="border-0 border-bottom border-dark"> (other party) or to <input type="text" name="" id="" class="border-0 border-bottom border-dark">(other party’s attorney) by: <input type="checkbox" name="" id="" class="mx-2"> Hand-delivery OR  <input type="checkbox" name="" id="" class="mx-2"> US Mail OR <input type="checkbox" name="" id="" class="mx-2"> E-mail (E-mail only by prior agreement of the parties based on Circuit Court Administrative Order). </div>

                                    <div class="d-flex justify-content-between w-100 d_sm_block">
                                        <div class="w-25 responsive_input">
                                            <input type="text" name="" id="" class="border-bottom  border-0 w-100 responsive_input">
                                            <div class="small_text">Date</div>
                                        </div>
                                        <div class="w-25 responsive_input">
                                            <input type="text" name="" id="" class="border-bottom  border-0 w-100  responsive_input">
                                            <div class="small_text">Signature</div>
                                        </div>
                                    </div>
                                </div>
                             </div>
                         </div>

                    </div>
                        @include('layouts.footer19', ['page' => 2])
                    </div>
                </section>
               <section class="section_area p-5" id="third_section">

                    <div class="pt-lg-5">
                        <div>
                            <div class="d-flex d_sm_block">
                                <span>Case Name: </span>
                                <input type="text" class="border-none border-0 border-bottom responsive_input shadow-none my-auto responsive_input" name="plaintiff_name" style="width:1075px;">
                            </div>
                            <div class="d-flex d_sm_block">
                                <span>Case Number:</span>
                                <input type="text" class="border-none border-0 border-bottom responsive_input shadow-none my-auto responsive_input" name="plaintiff_name" style="width:1057px;">
                            </div>
                                <div class="fw-bold border-bottom mb-1">FINANCIAL AFFIDAVIT</div>
                                <div class="small_text">
                                    NOTE: Round all numbers to the nearest dollar. To convert weekly expenses to monthly, multiply by 4.33.
                                </div>

                                <div class="row small_text">
                                    <div class="col-lg-6 border-end border-dark">
                                        <div>1. Housing</div>
                                        <div class=" d-flex justify-content-between d_sm_block">Rent <span>$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></span></div>
                                        <div class=" d-flex justify-content-between d_sm_block">Mortgage Payment <span>$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></span></div>
                                        <div class=" d-flex justify-content-between d_sm_block">Property Tax <span>$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></span></div>
                                        <div class=" d-flex justify-content-between d_sm_block">Condo Fee <span>$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></span></div>
                                        <div class=" d-flex justify-content-between d_sm_block">Home Maintenance <span>$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></span></div>
                                        <div class=" d-flex justify-content-between d_sm_block">Snow Removal and Lawn Care <span>$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></span></div>
                                        <div class=" d-flex justify-content-between d_sm_block"><input type="text" name="" id="" class="border-0 border-bottom responsive_input w-50" > <span>$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></span></div>
                                        <div class="pt-lg-2">2. Utilities</div>
                                        <div class=" d-flex justify-content-between d_sm_block">Heating Oil <span>$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></span></div>
                                        <div class=" d-flex justify-content-between d_sm_block">Wood and Coal <span>$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></span></div>
                                        <div class=" d-flex justify-content-between d_sm_block">Propane and Natural Gas <span>$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></span></div>
                                        <div class=" d-flex justify-content-between d_sm_block">Telephone<span>$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></span></div>
                                        <div class=" d-flex justify-content-between d_sm_block">Electricity<span>$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></span></div>
                                        <div class=" d-flex justify-content-between d_sm_block">Cable Television<span>$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></span></div>
                                        <div class=" d-flex justify-content-between d_sm_block">Water and Sewer<span>$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></span></div>
                                        <div class=" d-flex justify-content-between d_sm_block">Trash Collection<span>$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></span></div>
                                        <div class=" d-flex justify-content-between d_sm_block"><input type="text" name="" id="" class="border-0 border-bottom responsive_input w-50" > <span>$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></span></div>
                                        <div class="pt-lg-2">3. Insurance</div>
                                        <div class=" d-flex justify-content-between d_sm_block">Homeowner<span>$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></span></div>
                                        <div class=" d-flex justify-content-between d_sm_block">Renter<span>$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></span></div>
                                        <div class=" d-flex justify-content-between d_sm_block">Vehicle<span>$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></span></div>
                                        <div class=" d-flex justify-content-between d_sm_block">Health<span>$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></span></div>
                                        <div class=" d-flex justify-content-between d_sm_block">Dental<span>$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></span></div>
                                        <div class=" d-flex justify-content-between d_sm_block">Life<span>$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></span></div>
                                        <div class=" d-flex justify-content-between d_sm_block">Disability<span>$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></span></div>
                                        <div class="pt-lg-2">4. Uninsured Health Care</div>
                                        <div class=" d-flex justify-content-between d_sm_block">Medical<span>$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></span></div>
                                        <div class=" d-flex justify-content-between d_sm_block">Dental<span>$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></span></div>
                                        <div class=" d-flex justify-content-between d_sm_block">Orthodontics<span>$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></span></div>
                                        <div class=" d-flex justify-content-between d_sm_block">Medical<span>$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></span></div>
                                        <div class=" d-flex justify-content-between d_sm_block">Eye Care/Glasses/Contacts <span>$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></span></div>
                                        <div class=" d-flex justify-content-between d_sm_block">Prescription Drugs<span>$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></span></div>
                                        <div class=" d-flex justify-content-between d_sm_block">Therapy and Counseling<span>$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></span></div>
                                        <div class=" d-flex justify-content-between d_sm_block"><input type="text" name="" id="" class="border-0 border-bottom responsive_input w-50" > <span>$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></span></div>
                                        <div class="pt-lg-2">5. Transportation</div>
                                        <div class=" d-flex justify-content-between d_sm_block">Primary Vehicle Payment<span>$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></span></div>
                                        <div class=" d-flex justify-content-between d_sm_block">Other Vehicle Payments<span>$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></span></div>
                                        <div class=" d-flex justify-content-between d_sm_block">Vehicle Maintenance<span>$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></span></div>
                                        <div class=" d-flex justify-content-between d_sm_block">Gas and Oil<span>$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></span></div>
                                        <div class=" d-flex justify-content-between d_sm_block">Registration and Tax<span>$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></span></div>
                                        <div class=" d-flex justify-content-between d_sm_block"><input type="text" name="" id="" class="border-0 border-bottom responsive_input w-50" > <span>$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></span></div>
                                        <div class=" d-flex justify-content-between d_sm_block"><input type="text" name="" id="" class="border-0 border-bottom responsive_input w-50" > <span>$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></span></div>

                                    </div>
                                    <div class="col-lg-6">
                                        <div>6. General and Personal</div>
                                        <div class=" d-flex justify-content-between d_sm_block">Groceries<span>$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></span></div>
                                        <div class=" d-flex justify-content-between d_sm_block">Meals Eaten Out<span>$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></span></div>
                                        <div class=" d-flex justify-content-between d_sm_block">Tobacco/Alcohol Products<span>$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></span></div>
                                        <div class=" d-flex justify-content-between d_sm_block">Clothing and Shoes<span>$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></span></div>
                                        <div class=" d-flex justify-content-between d_sm_block">Hair Care<span>$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></span></div>
                                        <div class=" d-flex justify-content-between d_sm_block">Toiletries and Cosmetics<span>$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></span></div>
                                        <div class=" d-flex justify-content-between d_sm_block">Pet Food and Care<span>$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></span></div>
                                        <div class=" d-flex justify-content-between d_sm_block">Church and Charities<span>$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></span></div>
                                        <div class=" d-flex justify-content-between d_sm_block">Laundry and Dry Cleaning<span>$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></span></div>
                                        <div class=" d-flex justify-content-between d_sm_block">Gifts<span>$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></span></div>
                                        <div class=" d-flex justify-content-between d_sm_block">Newspapers and Magazines<span>$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></span></div>
                                        <div class=" d-flex justify-content-between d_sm_block">Education (personal)<span>$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></span></div>
                                        <div class=" d-flex justify-content-between d_sm_block">Dues and Memberships<span>$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></span></div>
                                        <div class=" d-flex justify-content-between d_sm_block">Vacations<span>$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></span></div>
                                        <div class=" d-flex justify-content-between d_sm_block">Entertainment and Recreation<span>$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></span></div>
                                        <div class=" d-flex justify-content-between d_sm_block">Visitation Expenses<span>$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></span></div>
                                        <div class=" d-flex justify-content-between d_sm_block"><input type="text" name="" id="" class="border-0 border-bottom responsive_input w-50" > <span>$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></span></div>
                                        <div class="pt-lg-2">7. Children's Expenses and Activities</div>
                                        <div class=" d-flex justify-content-between d_sm_block">Children's Clothing and Shoes<span>$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></span></div>
                                        <div class=" d-flex justify-content-between d_sm_block">Diapers<span>$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></span></div>
                                        <div class=" d-flex justify-content-between d_sm_block">Day Care<span>$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></span></div>
                                        <div class=" d-flex justify-content-between d_sm_block">School Supplies<span>$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></span></div>
                                        <div class=" d-flex justify-content-between d_sm_block">School Lunches<span>$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></span></div>
                                        <div class=" d-flex justify-content-between d_sm_block">Tuition and Lessons<span>$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></span></div>
                                        <div class=" d-flex justify-content-between d_sm_block">Sports and Camp<span>$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></span></div>
                                        <div class=" d-flex justify-content-between d_sm_block"><input type="text" name="" id="" class="border-0 border-bottom responsive_input w-50" > <span>$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></span></div>
                                        <div class="pt-lg-2">8. Financial</div>
                                        <div class=" d-flex justify-content-between d_sm_block">Federal Income Tax <span>$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></span></div>
                                        <div class=" d-flex justify-content-between d_sm_block">Social Security and Medicare<span>$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></span></div>
                                        <div class=" d-flex justify-content-between d_sm_block">Loan Payments<span>$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></span></div>
                                        <div class=" d-flex justify-content-between d_sm_block">Other Debts<span>$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></span></div>
                                        <div class=" d-flex justify-content-between d_sm_block">Savings<span>$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></span></div>
                                        <div class=" d-flex justify-content-between d_sm_block">401(k)<span>$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></span></div>
                                        <div class=" d-flex justify-content-between d_sm_block">IRA<span>$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></span></div>
                                        <div class=" d-flex justify-content-between d_sm_block">Other Retirement Plans<span>$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></span></div>
                                        <div class=" d-flex justify-content-between d_sm_block"><input type="text" name="" id="" class="border-0 border-bottom responsive_input w-50" > <span>$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></span></div>
                                        <div class=" d-flex justify-content-between d_sm_block"><input type="text" name="" id="" class="border-0 border-bottom responsive_input w-50" > <span>$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></span></div>
                                        <div class="pt-lg-2">9. Other Expenses</div>
                                        <div class=" d-flex justify-content-between d_sm_block"><input type="text" name="" id="" class="border-0 border-bottom responsive_input w-50" > <span>$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></span></div>
                                        <div class=" d-flex justify-content-between d_sm_block"><input type="text" name="" id="" class="border-0 border-bottom responsive_input w-50" > <span>$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></span></div>
                                        <div class=" d-flex justify-content-between d_sm_block"><input type="text" name="" id="" class="border-0 border-bottom responsive_input w-50" > <span>$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></span></div>
                                        <div class=" d-flex justify-content-between d_sm_block"><input type="text" name="" id="" class="border-0 border-bottom responsive_input w-50" > <span>$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></span></div>
                                        <div class=" d-flex justify-content-between d_sm_block"><input type="text" name="" id="" class="border-0 border-bottom responsive_input w-50" > <span>$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></span></div>
                                        <div class=" d-flex justify-content-between d_sm_block fw-bold">TOTAL MONTHLY EXPENSES<span>$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></span></div>

                                    </div>
                                </div>
                        @include('layouts.footer19', ['page' => 3])
                    </div>
                </div>
                </section>
                  <section class="section_area p-5" id="fourth_section">

                        <div class="pt-lg-5">
                             <div class="d-flex d_sm_block">
                                <span>Case Name: </span>
                                <input type="text" class="border-none border-0 border-bottom responsive_input shadow-none my-auto responsive_input" name="plaintiff_name" style="width:1075px;">
                            </div>
                            <div class="d-flex d_sm_block">
                                <span>Case Number:</span>
                                <input type="text" class="border-none border-0 border-bottom responsive_input shadow-none my-auto responsive_input" name="plaintiff_name" style="width:1057px;">
                            </div>
                                <div class="fw-bold border-bottom mb-1">FINANCIAL AFFIDAVIT</div>
                                <div class="fw-bold h4 text-center">THE STATE OF NEW HAMPSHIRE</div>
                                <div class="pt-lg-3 font-italic">General Instructions for Completing the Financial Affidavit Form NHJB-2065-F</div>
                                <div class="row small_text">
                                    <div class="col-1" style="width: 30px;">A.</div>
                                    <div class="col-11">
                                        <p>When this form is needed - You must fill out and file this form with the Court.</p>
                                        <div>If you are the petitioner or respondent in a divorce, legal separation, or civil union dissolution case.</div>
                                        <div>If you are the petitioner or respondent in an after-divorce, custody/parenting, child support, or paternity case.</div>
                                        <div>If either side is requesting child support or alimony or a change in an existing support or alimony order.</div>
                                        <div>If a person's ability to pay an obligation is an issue.</div>
                                        <div>Any other time that the Court may require.</div>
                                    </div>
                                </div>
                                <div class="row small_text pt-2">
                                    <div class="col-1" style="width: 30px;">B.</div>
                                    <div class="col-11">
                                        <div>If you need more space for any answer, either add an attachment and note it at section 13, or use section 14. When using section 14, put in the number of the answer needing more space, and then the information.</div>
                                    </div>
                                </div>
                                <div class="row small_text pt-2">
                                    <div class="col-1" style="width: 30px;">C.</div>
                                    <div class="col-11">
                                        <div>The importance of the oath - This form must be sworn to under oath and signed before a Notary Public or N.H. Justice of the Peace. All information must be true, accurate, and complete, to the best of your knowledge and belief, under the pains and penalties of perjury.</div>
                                    </div>
                                </div>
                                <div class="row small_text pt-2">
                                    <div class="col-1" style="width: 30px;">D.</div>
                                    <div class="col-11">
                                        <div>Monthly Expenses form - You must always fill out and attach the Monthly Expenses form <b>in the following cases.</b></div>
                                        <ul>
                                            <li>If child support is an issue and either side claims that the Child Support Guidelines should not apply.</li>
                                            <li>If either side is requesting alimony or payment of college expenses.</li>
                                            <li>If you and the other side do not agree how to divide your debts.</li>
                                            <li>If either side requests it.</li>
                                            <li>If the Court requires it.</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="pt-2 small_text">It is not required in other cases, if both sides agree by checking the box in section 13, or if the Office of Child Support Enforcement (OCSE) does not request it and the Court approves.</div>

                                <div class="row small_text pt-2">
                                    <div class="col-1" style="width: 30px;">E.</div>
                                    <div class="col-11">
                                        <div>Duty to Update - You must fill out and file a new Financial Affidavit for every hearing.</div>

                                    </div>
                                </div>

                                <div class="row small_text pt-2">
                                    <div class="col-1" style="width: 30px;">F.</div>
                                    <div class="col-11">
                                        <div>Use of Forms - You may use the Financial Affidavit and Monthly Expenses forms provided by the Court or your own forms, as long as the format and content are identical to the Court version. You may design other attachments as you see fit.</div>
                                    </div>
                                </div>

                                <div class="row small_text pt-2">
                                    <div class="col-1" style="width: 30px;">G.</div>
                                    <div class="col-11">
                                        <div> Child Support - If child support is an issue, read the Uniform Support Order and its Instructions.</div>
                                    </div>
                                </div>

                                <div class="pt-2 small_text">Specific Instructions for Numbered Sections of the Financial Affidavit Form</div>

                                <div class="row small_text pt-2">
                                    <div class="col-1" style="width: 30px;">1.</div>
                                    <div class="col-11">
                                        <div>General Information - Street Address means your complete residence address. If you have filed a Domestic Violence Petition, or if there are restraining orders, you do not have to give your address. The last two lines in section 1 apply only to divorce and post-divorce cases.</div>
                                    </div>
                                </div>

                                <div class="row small_text pt-2">
                                    <div class="col-1" style="width: 30px;">2.</div>
                                    <div class="col-11">
                                        <div>Children of the Parties - Fill in the first and last name, with middle initial, if any, for each child. Give date of birth and Social Security Number.</div>
                                    </div>
                                </div>

                                <div class="row small_text pt-2">
                                    <div class="col-1" style="width: 30px;">3.</div>
                                    <div class="col-11">
                                        <div>Employment Information - Fill in name, address and phone number of current employer. List date and place of last employment. List job skills.</div>
                                    </div>
                                </div>

                                <div class="row small_text pt-2">
                                    <div class="col-1" style="width: 30px;">4.</div>
                                    <div class="col-11">
                                        <div>Monthly Income - Miscellaneous - List all public assistance income, including AFDC, TANF, food stamps, SSI, APTD, and general assistance from town or county. If your dependent children receive income from employment, investments, or other sources, list it here. This income is excluded when calculating child support.</div>
                                    </div>
                                </div>

                                <div class="row small_text pt-2">
                                    <div class="col-1" style="width: 30px;">5.</div>
                                    <div class="col-11">
                                        <div>Monthly Income - Before Taxes- List all income, except from those sources specified in section 4. If you are paid weekly, multiply the weekly amount by 4.33 to get monthly. If you are paid every 2 weeks, multiply the bi-weekly amount by 2.17 to get monthly. If income is occasional or irregular, fill in the average amount.</div>
                                    </div>
                                </div>

                                <div class="row small_text pt-2">
                                    <div class="col-1" style="width: 30px;">6.</div>
                                    <div class="col-11">
                                        <div>Monthly Expenses - Support for Others means child support or alimony you are paying under court order for children other than the children of the parties, or for alimony for another ex-spouse. Health Insurance means the actual amount paid for medical insurance coverage for the children of the parties.</div>
                                    </div>
                                </div>
                        </div>


                        @include('layouts.footer19', ['page' => 4])
                </section>

                <section class="section_area p-5" id="fifth_section">
                    <div class="pt-lg-5">
                        <div class="d-flex d_sm_block">
                           <span>Case Name: </span>
                           <input type="text" class="border-none border-0 border-bottom responsive_input shadow-none my-auto responsive_input" name="plaintiff_name" style="width:1075px;">
                       </div>
                       <div class="d-flex d_sm_block">
                           <span>Case Number:</span>
                           <input type="text" class="border-none border-0 border-bottom responsive_input shadow-none my-auto responsive_input" name="plaintiff_name" style="width:1057px;">
                       </div>
                           <div class="fw-bold border-bottom mb-1">FINANCIAL AFFIDAVIT</div>

                           <div>
                            <div class="row small_text pt-2">
                                <div class="col-1" style="width: 30px;">7/8.</div>
                                <div class="col-11">
                                    <div>Asset Information - You must list all of your assets in these sections. In section 7, the first column is for your good-faith estimate
                                        of the total fair market value of assets in each category. Fair Market Value is what you could sell an asset for, not the purchase price or replacement cost. It is not necessary to have every asset appraised. However, you must consider all factors known to you when stating values. The second column is to list any debts that are owed against the asset, such as a mortgage or a vehicle loan. You may put any additional information in the third column.</div>
                                        <div class="pt-lg-3">Asset Information - You must list all of your assets in these sections. In section 7, the first column is for your good-faith estimate
                                            of the total fair market value of assets in each category. Fair Market Value is what you could sell an asset for, not the purchase price or replacement cost. It is not necessary to have every asset appraised. However, you must consider all factors known to you when stating values. The second column is to list any debts that are owed against the asset, such as a mortgage or a vehicle loan. You may put any additional information in the third column.</div>
                                            <div class="pt-lg-3">Life insurance means the cash value of any life insurance policy that you own or have an interest in. Pension means a defined benefit retirement plan. What you receive is based on years of service and pay. Retirement Account means a defined contribution plan or other retirement account in your name.
                                                Examples are: 401(k) plans, thrift/savings plans, Keoghs, IRAs.</div>
                                </div>
                            </div>
                            <div class="pt-2 small_text">The extra lines are for other categories of assets that are not listed on the form, or for providing more details on listed assets. You
                                must list all assets. Assets include, but are not limited to, the following:</div>

                                <div class="row small_text pt-2">
                                    <div class="col-1" style="width: 30px;"></div>
                                    <div class="col-11">
                                        <div>Any asset in which you have an interest, but that is being held in the name of someone else. For example, if a relative is holding money or an asset that you own, or can get back under any circumstances, you must include it.</div>
                                        <div class="pt-lg-3">Any assets that are owned partly by you and partly by someone else, such as a jointly owned bank account, motorcycle, or piece of real estate.</div>
                                        <div class="pt-lg-3">Any asset of substantial value that you either gave away or sold for less than fair market value, within 6 months of the date of the Financial Affidavit.</div>
                                        <div class="pt-lg-3">Any debt that anyone owes you, whether or not repayment is expected or likely.</div>
                                    </div>
                                </div>

                                <div class="row small_text pt-2">
                                    <div class="col-1" style="width: 30px;">9</div>
                                    <div class="col-11">
                                        <div>Tax Return Information - Total W-2s and 1099s refer to those tax forms from work done by you and from assets in your
                                            name. Do not include those that result from your spouse's income.</div>
                                           </div>
                                </div>
                                <div class="row small_text pt-2">
                                    <div class="col-1" style="width: 30px;">10</div>
                                    <div class="col-11">
                                        <div>Insurance - List all insurance coverage you have. Description means any deductibles and co-pays.</div>
                                    </div>
                                </div>
                                <div class="row small_text pt-2">
                                    <div class="col-1" style="width: 30px;">11</div>
                                    <div class="col-11">
                                        <div>Debts - List all debts in your name or joint names. Debt means loans, credit cards, past due bills, and the like. For each debt, list the name of the person or business you owe the debt to, whether the debt is in your name or in joint names,
                                            and the amount currently owed.</div>
                                    </div>
                                </div>

                                <div class="row small_text pt-2">
                                    <div class="col-1" style="width: 30px;">12</div>
                                    <div class="col-11">
                                        <div>Pension and Retirement Accounts - Name your retirement plans or accounts. On the second line, note if your retirement account is a 401(k) plan, profit-sharing plan, defined benefit plan, or other specific type of plan. A defined benefit plan is one where what you receive is based upon years of service and pay. Value at filing refers to the value of your retirement plan at the time the divorce was filed, and needs to be filled in only in divorce cases.
                                        </div>
                                    </div>
                                </div>
                                <div class="row small_text pt-2">
                                    <div class="col-1" style="width: 30px;">13</div>
                                    <div class="col-11">
                                        <div>List of Attachments - Check off which forms and documents you are attaching to your Financial Affidavit. If the attachment is not listed, check off other and write in what it is.
                                        </div>
                                    </div>
                                </div>

                                <div class="row small_text pt-2">
                                    <div class="col-1" style="width: 30px;">14</div>
                                    <div class="col-11">
                                        <div>Additional Information - Use this space to provide information that will not fit in prior sections and to provide additional information that you wish the Court to consider.</div>
                                    </div>
                                </div>
                                <div class="pt-2 small_text">Certification of Copies - You must give a copy of your Financial Affidavit with all attachments to the other side. The other side means the lawyer representing your spouse, ex-spouse, or the other parent. If he or she does not have a lawyer, give it to your spouse, ex- spouse, or the other parent. If the State is a party, also give a copy to Office of Child Support Enforcement (OCSE). Write in the names of each person you have given a copy to.</div>
                                <div class="pt-2 small_text">Monthly Expenses - Section D above explains who must complete the Monthly Expenses form.</div>



                           </div>
                    @include('layouts.footer19', ['page' => 5])
                    </div>

                </section>

                <div class="position-absolute position-fixed top-0 py-3 backdrop_filter end-0 px-3">
                    <div class="col">
                        <button type="button" class="btn btn-success px-4">Save</button>
                    </div>
                    <div class="pt-3">
                        <button type="button" class="btn btn-dark px-4">Back</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="position-absolute position-fixed bottom-0 py-2 backdrop_filter px-3">
        <select name="" id="" class="sectionSelect form-select  mx-auto ">
            <option value="" disabled selected>Select a section</option>
            <option value="#first_section">First Section</option>
            <option value="#second_section">Second Section</option>
            <option value="#third_section">Third Section</option>
            <option value="#fourth_section">Fourth Section</option>
            <option value="#fifth_section">Fifth Section</option>
        </select>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
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
