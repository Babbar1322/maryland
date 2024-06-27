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
                                        class="form-select form-control border-0 border-bottom ms-lg-2"  name="plaintiff_name" style="width:1060px;">
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
                            <div>
                                <small>(if known)</small>
                            </div>
                            <div class="fw-bold text-center">FINANCIAL AFFIDAVIT</div>
                        </div>
                    </div>
                        @include('layouts.footer19', ['page' => 2])
                    </div>
                </section>
               {{--   <section class="section_area p-5" id="third_section">

                    <div class="pt-lg-5">

                        @include('layouts.footer19', ['page' => 3])
                    </div>
                </section>
                <section class="section_area p-5" id="fourth_section">



                        @include('layouts.footer19', ['page' => 4])
                </section>

                <section class="section_area p-5" id="fifth_section">

                    @include('layouts.footer19', ['page' => 5])

                </section> --}}

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
