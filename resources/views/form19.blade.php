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
        a {
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
            .pb_checkbox {
                display: block !important;
            }
            .d_sm_block {
                display: block !important;

            }

            .small_text {
                height: auto !important;
            }

            .top_flex_text {
                display: block !important;
            }

            .footer_padding {
                padding-top: 50px !important;
            }


            .responsive_input {
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

            <form action="{{ route('form5.submit') }}" method="post">
                @csrf
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show">{{ session('success') }} <button
                            type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <section class="section_area row page1 bg-white pt-5 p-lg-5 pe-2 pe-lg-5 p-lg-3 m-3 mt-4  pt-lg-5 pt-4"
                    id="first_section">
                    <div class="col-lg-10 mx-auto">
                        <div class="row">
                            <div class="col-lg-6">
                                <h5>FDF</h5>
                                <div class='d-flex d_sm_block'>
                                    <span>Name: </span><input type="text" name="fdf_name"
                                        class="w-50 form-control border-none responsive_input border-0 border-bottom border-dotted shadow-none">
                                </div>

                                <div class='d-flex d_sm_block'>
                                    <span>Address: </span><input type="text" name="fdf_address1"
                                        class="  form-control border-none border-0 border-bottom border-dotted shadow-none responsive_input" style="width:213px ">
                                </div>

                                <div class='d-flex d_sm_block'>
                                 <input type="text" name="fdf_address2"
                                        class="responsive_input form-control border-none border-0 border-bottom border-dotted shadow-none" style="width:284px ">
                                </div>
                                <div class='d-flex d_sm_block'>
                                    <span>Phone: </span><input type="text" name="fdf_phone"
                                        class=" responsive_input form-control border-none border-0 border-bottom border-dotted shadow-none"  style="width:230px ">
                                </div>
                                <div class='d-flex d_sm_block'>
                                    <span>Email: </span><input type="text" name="fdf_email"
                                        class="responsive_input form-control border-none border-0 border-bottom border-dotted shadow-none"  style="width:237px ">
                                </div>
                                <div class='d-flex d_sm_block'>
                                    <span>Attorney for  </span><input type="text" name="fdf_attorney"
                                        class=" responsive_input form-control border-none border-0 border-bottom border-dotted shadow-none"  style="width:186px ">
                                </div>
                                <div class='d-flex d_sm_block'>
                                    <span>Nevada State Bar No. </span><input type="text" name="fdf_nevada_sb"
                                        class=" responsive_input form-control border-none border-0 border-bottom border-dotted shadow-none"  style="width:111px  ">
                                </div>
                            </div>
                        </div>
                        <div class="row my-3">
                            <div class='d-flex d_sm_block justify-content-center'>
                               <input type="text" name="ju_dis_Court" class="responsive_input form-control border-none border-0 border-bottom border-dotted shadow-none" style="width:111px ">
                               <span>Judicial District Court </span>
                            </div>
                            <div class='d-flex d_sm_block justify-content-center'>
                               <input type="text" name="nevada" class="responsive_input form-control border-none border-0 border-bottom border-dotted shadow-none" style="width:222px ">
                               <span>Nevada</span>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-lg-6 border border-dark py-3">
                                <div class="px-lg-0">
                                    <input type="text" name="Plaintiff_name"
                                        class="form-control border-none border-0 border-bottom border-dotted shadow-none">
                                    <div class="text-center fw-bold "> Plaintiff,</div>
                                </div>
                                <div class="small_text fw-bold">vs.</div>
                                <div class="  px-lg-0">
                                    <input type="text" name="defendant_name"
                                        class="form-control border-none border-0 border-bottom border-dotted shadow-none">
                                    <div class="text-center fw-bold "> Defendant.</div>
                                </div>
                            </div>
                            <div class="col-lg-6 border border-dark">


                                <div class='d-flex justify-content-center pt-3'>
                                    Case No. <input type="text" name="case_no"
                                        class="w-50 form-control border-none border-0 border-bottom border-dotted shadow-none">
                                </div>
                                <div class='d-flex justify-content-center pt-3'>
                                    Dept. <input type="text" name="dept_no" class="w-50 form-control border-none border-0 border-bottom border-dotted shadow-none" style="max-width:256px !important">
                                </div>

                            </div>
                        </div>

                        <div class="row mt-3">
                            <h5 class="text-center fw-bold py-2">GENERAL FINANCIAL DISCLOSURE FORM</h5>
                            <div class="fw-bold py-2">A. Personal Information:</div>
                            <div class="ms-lg-3 d-flex small_text d_sm_block">1. What is your full name? (first, middle, last)
                                <input type="text" min="0" name="pi_first_name" style="width: 630px"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control ms-3">
                            </div>
                            <div class="ms-lg-3 d-flex small_text d_sm_block">
                                <span>2. How old are you?</span>
                                <input type="text" min="0" name="pi_age" style="width: 290px" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control ms-3">
                                <span>3.What is your date of birth?</span>
                                <input type="text" min="0" name="pi_dob" style="width: 303px"  class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control ms-3">
                            </div>
                            <div class="ms-lg-3 d-flex small_text d_sm_block">4. What is your highest level of education?
                                <input type="text" min="0" name="pi_high_education" style="width: 648px"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control ms-3">
                            </div>


                            <div class="fw-bold py-2">B. Employment Information:</div>

                            <div class="ms-lg-4">
                            <div class=" d-flex small_text d_sm_block">1. Are you currently employed/ self-employed? (<input type="checkbox"   name="rbcc" class=" mx-1" checked  > check one)  </div>

                            <div class="d-flex justify-content-end d_sm_block"> <input type="checkbox" name="self_emp" value="No" class="mx-1"> <span>No</span> <span class="ms-lg-5 invisible d-none d-sm-block"> If yes, complete the table below. Attached an additional page if needed.</span>  </div>
                            <div class="d-flex justify-content-end d_sm_block"> <input type="checkbox" name="self_emp" value="Yes" class="mx-1"> <span>Yes</span> <span class="ms-lg-5">If yes, complete the table below. Attached an additional page if needed.</span> </div>
                            <div class="table-responsive">
                                <table class="table table-bordered border-dark">
                                    <tbody>
                                        <tr>
                                            <td class="text-center">Date of Hire</td>
                                            <td class="text-center">Employer Name</td>
                                            <td class="text-center">Job Title</td>
                                            <td class="text-center">Work Schedule
                                                (days)</td>
                                            <td class="text-center">Work Schedule
                                                (shift times)</td>
                                        </tr>
                                        <tr>
                                            <td><input type="text" name="ei_doh1" class="border-0 form-control"></td>
                                            <td><input type="text" name="ei_empname1" class="border-0 form-control"></td>
                                            <td><input type="text" name="ei_jobtitle1" class="border-0 form-control"></td>
                                            <td><input type="text" name="ei_workschedule1" class="border-0 form-control"></td>
                                            <td><input type="text" name="ei_workschedule_time_1" class="border-0 form-control"></td>
                                        </tr>
                                        <tr>
                                            <td><input type="text" name="ei_doh2" class="border-0 form-control"></td>
                                            <td><input type="text" name="ei_empname2" class="border-0 form-control"></td>
                                            <td><input type="text" name="ei_jobtitle2" class="border-0 form-control"></td>
                                            <td><input type="text" name="ei_workschedule2" class="border-0 form-control"></td>
                                            <td><input type="text" name="ei_workschedule_time_2" class="border-0 form-control"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="  d-flex small_text">2. Are you disabled? (<input type="checkbox"   name="rbcc" class=" mx-1" checked  > check one)</div>
                            <div class="d-flex justify-content-end d_sm_block"> <input type="checkbox" name="disable" value="Yes" class="mx-1"> <span>No</span> <span class="ms-lg-5 invisible d-none d-sm-block">  complete the table below. Attached an additional page if needed.</span>  </div>
                            <div class="d-flex justify-content-end d_sm_block"> <input type="checkbox" name="disable" value="No" class="mx-1"> <span>Yes</span> <span class="ms-lg-5">If yes, what is your level of disability?</span> <input type="text" min="0" name="level_of_disability" style="max-width: 203px"  class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control ms-3">  </div>
                            <div class="d-flex justify-content-end d_sm_block">  <span class="ms-lg-5">What agency certified you disabled?</span> <input type="text" min="0" name="agency_certified" style="width: 203px"  class="responsive_input border-bottom border-0  responsive_input bg-transparent border outline-none form-control ms-3">  </div>
                            <div class="d-flex justify-content-end d_sm_block">  <span class="ms-lg-5">What is the nature of your disability?</span> <input type="text" min="0" name="nature_disability" style="width: 203px"  class="responsive_input border-bottom border-0  responsive_input bg-transparent border outline-none form-control ms-3">  </div>
                        </div>

                        <div class="fw-bold py-2">
                            <div class="row">
                                <div class="col-lg-1" style="max-width:20px;"> C.</div>
                                <div class="col-lg-11"> Prior Employment: If you are unemployed or have been working at your current job for less than 2 years,
                                    complete the following information.</div>
                            </div>
                        </div>
                        <div class="ms-lg-4">
                            <div class=" d-flex small_text d_sm_block">
                                <span>Prior Employer:</span>
                                <input type="text" min="0" name="prior_employer" style="width: 193px" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control ms-lg-3">
                                <span>Date of Hire:</span>
                                <input type="text" min="0" name="date_of_hire" style="width: 193px"  class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control ms-lg-3">
                                <span>Date of Termination:</span>
                                <input type="text" min="0" name="date_of_termination" style="width: 193px"  class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control ms-lg-3">
                            </div>
                            <div class=" d-flex small_text d_sm_block">
                                <span>Reason for Leaving:</span>
                                  <input type="text" min="0" name="leaving_reason" style="width: 804px"  class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control ms-lg-3">
                            </div>
                        </div>

                        </div>
                        @include('layouts.footer14', ['page' => 1])
                        {{-- <div class="d-flex gap-3 py-auto mb-2  ">
                            <div class="my-auto"> <a href="#first_section" ><i class="fas fa-chevron-left"></i><i class="fas fa-chevron-left"></i></a></div>
                            <div class="my-auto ps-2"> <a href="#first_section" ><i class="fas fa-chevron-left"></i></a> </div>
                            <div>
                                <select class="form-select w-100 sectionSelect">
                                    <option value="#first_section" selected>1</option>
                                    <option value="#case_information">2</option>
                                    <option value="#attach_affidavit">3</option>
                                    <option value="#gross_income">4</option>
                                    <option value="#did_you_receive">5</option>
                                    <option value="#monthly_expenses">6</option>
                                    <option value="#schedule_personal">7</option>
                                    <option value="#balance_sheet1">8</option>
                                    <option value="#balance_sheet2">9</option>
                                    <option value="#last_section">10</option>
                                </select>
                            </div>
                            <div class="my-auto"> <a href="#case_information" ><i class="fas fa-chevron-right"></i> </a></div>
                            <div class="my-auto ps-2" ><a href="#last_section" > <i class="fas fa-chevron-right"></i><i class="fas fa-chevron-right"></i> </a></div>
                        </div> --}}

                    </div>
                </section>

                <section class="section_area row page1 bg-white pt-5 p-lg-5 pe-2 pe-lg-5 p-lg-3 m-3 mt-4  pt-lg-5 pt-4"
                    id="case_information">
                    <div class="col-lg-10 mx-auto">

                        <div class="row mt-lg-3">
                            <div class="fw-bold text-center">Monthly Personal Income Schedule</div>
                            <div class="fw-bold py-2">A. Year-to-date Income.</div>
                            <div class="ms-lg-4">
                                <div class=" d-flex d_sm_block small_text">
                                    <span>As of the pay period ending</span>
                                    <input type="text" min="0" name="periond_ending" style="width: 263px" class=" responsive_input border-bottom border-0  responsive_input bg-transparent border outline-none form-control ms-lg-3">
                                    <span class="ps-lg-1">my gross year to date pay is </span>
                                    <input type="text" min="0" name="gross_year_date" style="width: 263px"  class=" responsive_input border-bottom border-0  responsive_input bg-transparent border outline-none form-control ms-lg-3">
                                    </div>
                            </div>

                            <div class="fw-bold py-2">B. Determine your Gross Monthly Income.</div>
                            <div class="ms-lg-4">
                                <div>Hourly Wage</div>
                                <div class="ms-lg-3 table-responsive">
                                    <table class="table table-bordered border-dark">
                                        <tbody>
                                            <tr>
                                                <td rowspan="2">
                                                    <div class="border-bottom"><input type="text" name="" class="border-0 form-control "></div>
                                                    <div class='small_text'>Hourly Wage</div>
                                                </td>
                                                <td class="small_text pt-3 px-1">X</td>
                                                <td rowspan="2">
                                                    <div class="border-bottom"><input type="text" name="" class="border-0 form-control "></div>
                                                    <div class='small_text'>Number of hours <br> worked per week</div>
                                                </td>
                                                 <td class='small_text pt-3 px-1'>=</td>

                                                 <td rowspan="2">
                                                     <div class="border-bottom"><input type="text" name="" class="border-0 form-control "></div>
                                                     <div class='small_text'> Weekly  Income </div>
                                                    </td>
                                                    <td class='small_text pt-3 px-1'>×</Annualtd>
                                                <td class='small_text text-center pt-2'>52 Weeks</td>
                                                <td class='small_text pt-3 px-1'>=</td>
                                                <td rowspan="2">
                                                    <div class="border-bottom"><input type="text" name="" class="border-0 form-control "></div>
                                                    <div class='small_text'> Annual Income </div>
                                                </td>
                                                 <td class='small_text pt-3 px-1'>÷</td>
                                                 <td rowspan="2" class='small_text  text-center pt-2'>12 Months </td>
                                                 <td class='small_text pt-3 px-1'>=</td>
                                                 <td rowspan="2">
                                                    <div class="border-bottom"><input type="text" name="" class="border-0 form-control "></div>
                                                    <div class='small_text'> Gross Monthly Income </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div>Annual Salary</div>
                                <div class="ms-lg-3 table-responsive">
                                    <table class="table table-bordered border-dark w-50">
                                        <tbody>
                                            <tr>
                                                <td rowspan="2">
                                                    <div class="border-bottom"><input type="text" name="" class="border-0 form-control "></div>
                                                    <div class='small_text'>Annual  Income</div>
                                                </td>
                                                <td class="small_text pt-3 px-1">÷</td>
                                                <td rowspan="2" class='small_text  text-center pt-2'>12 Months </td>


                                                 <td class='small_text pt-3 px-1'>=</td>


                                                 <td rowspan="2">
                                                    <div class="border-bottom"><input type="text" name="" class="border-0 form-control "></div>
                                                    <div class='small_text'> Gross Monthly Income </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="fw-bold py-2">C. Other Sources of Income.</div>
                            <div class="ms-lg-4">
                                <div class="table-responsive">
                                    <table class="table table-bordered border-dark">
                                        <tbody>
                                            <tr>
                                                <td>Source of Income</td>
                                                <td>Frequency</td>
                                                <td>Amount</td>
                                                <td>12 Month Average</td>
                                            </tr>
                                            <tr>
                                                <td>Annuity or Trust Income</td>
                                                <td><input type="text" name="" class="border-0 form-control text-center">  </td>
                                                <td><input type="text" name="" class="border-0 form-control text-center">  </td>
                                                <td><input type="text" name="" class="border-0 form-control text-end">  </td>
                                            </tr>

                                            <tr>
                                                <td>Bonuses</td>
                                                <td><input type="text" name="" class="border-0 form-control text-center">  </td>
                                                <td><input type="text" name="" class="border-0 form-control text-center">  </td>
                                                <td><input type="text" name="" class="border-0 form-control text-end">  </td>
                                            </tr>

                                            <tr>
                                                <td>Car, Housing, or Other allowance:</td>
                                                <td><input type="text" name="" class="border-0 form-control text-center">  </td>
                                                <td><input type="text" name="" class="border-0 form-control text-center">  </td>
                                                <td><input type="text" name="" class="border-0 form-control text-end">  </td>
                                            </tr>

                                            <tr>
                                                <td>Commissions or Tips:</td>
                                                <td><input type="text" name="" class="border-0 form-control text-center">  </td>
                                                <td><input type="text" name="" class="border-0 form-control text-center">  </td>
                                                <td><input type="text" name="" class="border-0 form-control text-end">  </td>
                                            </tr>

                                            <tr>
                                                <td>Net Rental Income:</td>
                                                <td><input type="text" name="" class="border-0 form-control text-center">  </td>
                                                <td><input type="text" name="" class="border-0 form-control text-center">  </td>
                                                <td><input type="text" name="" class="border-0 form-control text-end">  </td>
                                            </tr>

                                            <tr>
                                                <td>Overtime Pay</td>
                                                <td><input type="text" name="" class="border-0 form-control text-center">  </td>
                                                <td><input type="text" name="" class="border-0 form-control text-center">  </td>
                                                <td><input type="text" name="" class="border-0 form-control text-end">  </td>
                                            </tr>

                                            <tr>
                                                <td>Pension/Retirement:</td>
                                                <td><input type="text" name="" class="border-0 form-control text-center">  </td>
                                                <td><input type="text" name="" class="border-0 form-control text-center">  </td>
                                                <td><input type="text" name="" class="border-0 form-control text-end">  </td>
                                            </tr>

                                            <tr>
                                                <td>Social Security Income (SSI):</td>
                                                <td><input type="text" name="" class="border-0 form-control text-center">  </td>
                                                <td><input type="text" name="" class="border-0 form-control text-center">  </td>
                                                <td><input type="text" name="" class="border-0 form-control text-end">  </td>
                                            </tr>

                                            <tr>
                                                <td>Social Security Disability (SSD):</td>
                                                <td><input type="text" name="" class="border-0 form-control text-center">  </td>
                                                <td><input type="text" name="" class="border-0 form-control text-center">  </td>
                                                <td><input type="text" name="" class="border-0 form-control text-end">  </td>
                                            </tr>

                                            <tr>
                                                <td>Spousal Support</td>
                                                <td><input type="text" name="" class="border-0 form-control text-center">  </td>
                                                <td><input type="text" name="" class="border-0 form-control text-center">  </td>
                                                <td><input type="text" name="" class="border-0 form-control text-end">  </td>
                                            </tr>

                                            <tr>
                                                <td>Child Support</td>
                                                <td><input type="text" name="" class="border-0 form-control text-center">  </td>
                                                <td><input type="text" name="" class="border-0 form-control text-center">  </td>
                                                <td><input type="text" name="" class="border-0 form-control text-end">  </td>
                                            </tr>

                                            <tr>
                                                <td>Workman’s Compensation</td>
                                                <td><input type="text" name="" class="border-0 form-control text-center">  </td>
                                                <td><input type="text" name="" class="border-0 form-control text-center">  </td>
                                                <td><input type="text" name="" class="border-0 form-control text-end">  </td>
                                            </tr>

                                            <tr>
                                                <td class="d-flex"><span>Other: </span><input type="text" name="" class="border-0 form-control  border-bottom"> </td>
                                                <td><input type="text" name="" class="border-0 form-control text-center">  </td>
                                                <td><input type="text" name="" class="border-0 form-control text-center">  </td>
                                                <td><input type="text" name="" class="border-0 form-control text-end">  </td>
                                            </tr>
                                            <tr>
                                                <td colspan="3" class="text-end fw-bold pe-3">Total Average Other Income Received</td>
                                                <td><input type="text" name="" class="border-0 form-control text-end" value="0">  </td>

                                            </tr>
                                        </tbody>
                                    </table>
                                    <table class="table table-bordered border-dark">
                                        <tbody>
                                            <tr>
                                                <td colspan="3">Total Average Gross Monthly Income (add totals from B and C above)</td>
                                                <td><input type="text" name="" class="border-0 form-control text-end" value="0">  </td>

                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            @include('layouts.footer14', ['page' => 2])

                        </div>
                </section>

                <section class="section_area row page1 bg-white pt-5 p-lg-5 pe-2 pe-lg-5 p-lg-3 m-3 mt-4  pt-lg-5 pt-4" id="attach_affidavit">
                    <div class="col-lg-10 mx-auto">
                        <div class="fw-bold py-2">D. Monthly Deductions</div>
                        <div class="table-responsive">
                            <table class="table table-bordered border-dark">
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td class="text-center">Type of Deduction</td>
                                        <td class="text-center">Amount</td>
                                    </tr>

                                    <tr>
                                        <td>1.</td>
                                        <td class="small_text">Court Ordered Child Support (automatically deducted from paycheck)</td>
                                        <td><input type="text" name="" class="border-0 form-control text-end" >  </td>
                                    </tr>

                                    <tr>
                                        <td>2.</td>
                                        <td class="small_text">Federal Health Savings Plan</td>
                                        <td><input type="text" name="" class="border-0 form-control text-end" >  </td>
                                    </tr>

                                    <tr>
                                        <td>3.</td>
                                        <td class="small_text">Federal Income Tax</td>
                                        <td><input type="text" name="" class="border-0 form-control text-end" >  </td>
                                    </tr>
                                    <tr>
                                        <td>4.</td>
                                        <td>
                                            <div class="row">
                                                <div class="col-lg-5 small_text my-auto">Health Insurance</div>
                                                <div class="col-lg-7">
                                                    <div class="small_text d-flex">Amount for you: <input type="text" name="" class="border-0 text-end border-bottom responsive_input" style="max-width:142px !important">  </div>
                                                    <div class="small_text d-flex">For Opposing Party:<input type="text" name="" class="border-0 text-end border-bottom responsive_input" style="max-width:116px !important" >  </div>
                                                    <div class="small_text d-flex">For your Child(ren): <input type="text" name="" class="border-0 text-end border-bottom responsive_input" style="max-width:121px !important" > </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="my-auto"><input type="text" name="" class="border-0 form-control text-end" value="0" >  </td>
                                    </tr>

                                    <tr>
                                        <td>5.</td>
                                        <td class="small_text">5. Life, Disability, or Other Insurance Premiums</td>
                                        <td><input type="text" name="" class="border-0 form-control text-end" >  </td>
                                    </tr>

                                    <tr>
                                        <td>6.</td>
                                        <td class="small_text">Medicare</td>
                                        <td><input type="text" name="" class="border-0 form-control text-end" >  </td>
                                    </tr>

                                    <tr>
                                        <td>7.</td>
                                        <td class="small_text"> Retirement, Pension, IRA, or 401(k)</td>
                                        <td><input type="text" name="" class="border-0 form-control text-end" >  </td>
                                    </tr>

                                    <tr>
                                        <td>8.</td>
                                        <td class="small_text">Savings</td>
                                        <td><input type="text" name="" class="border-0 form-control text-end" >  </td>
                                    </tr>

                                    <tr>
                                        <td>9.</td>
                                        <td class="small_text">Social Security</td>
                                        <td><input type="text" name="" class="border-0 form-control text-end" >  </td>
                                    </tr>

                                    <tr>
                                        <td>10.</td>
                                        <td class="small_text">  Union Dues</td>
                                        <td><input type="text" name="" class="border-0 form-control text-end" >  </td>
                                    </tr>

                                    <tr>
                                        <td>11.</td>
                                        {{-- <td class="small_text">Federal Income Tax</td> --}}
                                        <td class="d-flex"><span>Other: (Type of Deduction) : </span><input type="text" name="" class="border-0     w-50 border-bottom"> </td>

                                        <td><input type="text" name="" class="border-0 form-control text-end" >  </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="text-end fw-bold pe-3">Total Monthly Deductions (Lines 1-11)</td>
                                        <td><input type="text" name="" class="border-0 form-control text-end" value="0">  </td>

                                    </tr>
                                </tbody>
                            </table>
                            <div class="fw-bold text-center">Business/Self-Employment Income & Expense Schedule</div>
                        </div>
                    </div>
                        <div class="fw-bold py-2">A. Business Income:</div>
                        <div class="ms-lg-4 ">
                            <div class="d-flex d_sm_block">
                            <div >What is your average gross (pre-tax) monthly income/revenue from self-employment or businesses?    </div>  <div class="d-flex ps-lg-3"> $
                                <input type="text" name="disablity"
                                    class="border-0 border-bottom text-end fw-bold responsive_input ">
                            </div>
                        </div>
                    </div>
                        <div class="fw-bold py-2">B. Business Expenses: Attach an additional page if needed.</div>
                        <div class="ps-lg-5">
                            <div class="table-responsive">
                                <table class="table table-bordered border-dark">
                                    <tbody>
                                        <tr>
                                            <td>Type of Business Expense</td>
                                            <td>Frequency</td>
                                            <td>Amount</td>
                                            <td>12 Month Average</td>
                                        </tr>
                                        <tr>
                                            <td>Advertising</td>
                                            <td><input type="text" name="" class="border-0 form-control text-center">  </td>
                                            <td><input type="text" name="" class="border-0 form-control text-center">  </td>
                                            <td><input type="text" name="" class="border-0 form-control text-end">  </td>
                                        </tr>

                                        <tr>
                                            <td>Car and truck used for business</td>
                                            <td><input type="text" name="" class="border-0 form-control text-center">  </td>
                                            <td><input type="text" name="" class="border-0 form-control text-center">  </td>
                                            <td><input type="text" name="" class="border-0 form-control text-end">  </td>
                                        </tr>
                                        <tr>
                                            <td>Commissions, wages or fees</td>
                                            <td><input type="text" name="" class="border-0 form-control text-center">  </td>
                                            <td><input type="text" name="" class="border-0 form-control text-center">  </td>
                                            <td><input type="text" name="" class="border-0 form-control text-end">  </td>
                                        </tr>
                                        <tr>
                                            <td>Business Entertainment/Travel</td>
                                            <td><input type="text" name="" class="border-0 form-control text-center">  </td>
                                            <td><input type="text" name="" class="border-0 form-control text-center">  </td>
                                            <td><input type="text" name="" class="border-0 form-control text-end">  </td>
                                        </tr>
                                        <tr>
                                            <td>Insurance</td>
                                            <td><input type="text" name="" class="border-0 form-control text-center">  </td>
                                            <td><input type="text" name="" class="border-0 form-control text-center">  </td>
                                            <td><input type="text" name="" class="border-0 form-control text-end">  </td>
                                        </tr>
                                        <tr>
                                            <td>Legal and professional</td>
                                            <td><input type="text" name="" class="border-0 form-control text-center">  </td>
                                            <td><input type="text" name="" class="border-0 form-control text-center">  </td>
                                            <td><input type="text" name="" class="border-0 form-control text-end">  </td>
                                        </tr>
                                        <tr>
                                            <td>Mortgage or Rent</td>
                                            <td><input type="text" name="" class="border-0 form-control text-center">  </td>
                                            <td><input type="text" name="" class="border-0 form-control text-center">  </td>
                                            <td><input type="text" name="" class="border-0 form-control text-end">  </td>
                                        </tr>
                                        <tr>
                                            <td>Pension and profit-sharing plans</td>
                                            <td><input type="text" name="" class="border-0 form-control text-center">  </td>
                                            <td><input type="text" name="" class="border-0 form-control text-center">  </td>
                                            <td><input type="text" name="" class="border-0 form-control text-end">  </td>
                                        </tr>
                                        <tr>
                                            <td>Repairs and maintenance</td>
                                            <td><input type="text" name="" class="border-0 form-control text-center">  </td>
                                            <td><input type="text" name="" class="border-0 form-control text-center">  </td>
                                            <td><input type="text" name="" class="border-0 form-control text-end">  </td>
                                        </tr>
                                        <tr>
                                            <td>Supplies</td>
                                            <td><input type="text" name="" class="border-0 form-control text-center">  </td>
                                            <td><input type="text" name="" class="border-0 form-control text-center">  </td>
                                            <td><input type="text" name="" class="border-0 form-control text-end">  </td>
                                        </tr>
                                        <tr>
                                            <td>Taxes and licenses (include est. tax payments)</td>
                                            <td><input type="text" name="" class="border-0 form-control text-center"></td>
                                            <td><input type="text" name="" class="border-0 form-control text-center"></td>
                                            <td><input type="text" name="" class="border-0 form-control text-end"></td>
                                        </tr>
                                        <tr>
                                            <td>Utilities</td>
                                            <td><input type="text" name="" class="border-0 form-control text-center"></td>
                                            <td><input type="text" name="" class="border-0 form-control text-center"></td>
                                            <td><input type="text" name="" class="border-0 form-control text-end"></td>
                                        </tr>
                                        <tr>

                                             <td  > Other:  <input type="text" name="" class="border-0 w-75 border-bottom"> </td>

                                            <td><input type="text" name="" class="border-0 form-control text-end"></td>
                                            <td><input type="text" name="" class="border-0 form-control text-end"></td>
                                            <td><input type="text" name="" class="border-0 form-control text-end"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="3" class="fw-bold text-end pe-2">Total Average Business Expenses</td>
                                            <td><input type="text" name="" class="border-0 form-control text-end" >  </td>

                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                            @include('layouts.footer14', ['page' => 3])


                </section>
                <section class="section_area row page1 bg-white pt-5 p-lg-5 pe-2 pe-lg-5 p-lg-3 m-3 mt-4  pt-lg-5 pt-4"
                    id="gross_income">
                    <div class="col-lg-10 mx-auto">

                            <div class="text-center fw-bold">Personal Expense Schedule (Monthly)</div>
                            <div class="py-2 text-center">A. Fill in the table with the amount of money you spend each month on the following expenses and
                                check whether you pay the expense for you, for the other party, or for both of you.</div>


                                <div class="table-responsive">
                                    <table class="table table-bordered border-dark">
                                        <tbody>
                                            <tr>
                                                <td class="text-center">Expense</td>
                                                <td class="text-center">Monthly Amount I Pay</td>
                                                <td class="text-center">For Me</td>
                                                <td class="text-center">Other Party</td>
                                                <td class="text-center">For Both</td>
                                            </tr>
                                            <tr>
                                                <td>Alimony/Spousal Support</td>
                                                <td><input type="text" name="" class="border-0 form-control text-end"></td>
                                                <td><input type="text" name="" class="border-0 form-control text-end"></td>
                                                <td><input type="text" name="" class="border-0 form-control text-end"></td>
                                                <td><input type="text" name="" class="border-0 form-control text-end"></td>
                                            </tr>

                                            <tr>
                                                <td>Auto Insurance</td>
                                                <td><input type="text" name="" class="border-0 form-control text-end"></td>
                                                <td><input type="text" name="" class="border-0 form-control text-end"></td>
                                                <td><input type="text" name="" class="border-0 form-control text-end"></td>
                                                <td><input type="text" name="" class="border-0 form-control text-end"></td>
                                            </tr>

                                            <tr>
                                                <td>Car Loan/Lease Payment</td>
                                                <td><input type="text" name="" class="border-0 form-control text-end"></td>
                                                <td><input type="text" name="" class="border-0 form-control text-end"></td>
                                                <td><input type="text" name="" class="border-0 form-control text-end"></td>
                                                <td><input type="text" name="" class="border-0 form-control text-end"></td>
                                            </tr>

                                            <tr>
                                                <td>Cell Phone</td>
                                                <td><input type="text" name="" class="border-0 form-control text-end"></td>
                                                <td><input type="text" name="" class="border-0 form-control text-end"></td>
                                                <td><input type="text" name="" class="border-0 form-control text-end"></td>
                                                <td><input type="text" name="" class="border-0 form-control text-end"></td>
                                            </tr>

                                            <tr>
                                                <td>Child Support (not deducted from pay)</td>
                                                <td><input type="text" name="" class="border-0 form-control text-end"></td>
                                                <td><input type="text" name="" class="border-0 form-control text-end"></td>
                                                <td><input type="text" name="" class="border-0 form-control text-end"></td>
                                                <td><input type="text" name="" class="border-0 form-control text-end"></td>
                                            </tr>

                                            <tr>
                                                <td>Clothing, Shoes, Etc...</td>
                                                <td><input type="text" name="" class="border-0 form-control text-end"></td>
                                                <td><input type="text" name="" class="border-0 form-control text-end"></td>
                                                <td><input type="text" name="" class="border-0 form-control text-end"></td>
                                                <td><input type="text" name="" class="border-0 form-control text-end"></td>
                                            </tr>

                                            <tr>
                                                <td>Credit Card Payments (minimum due)</td>
                                                <td><input type="text" name="" class="border-0 form-control text-end"></td>
                                                <td><input type="text" name="" class="border-0 form-control text-end"></td>
                                                <td><input type="text" name="" class="border-0 form-control text-end"></td>
                                                <td><input type="text" name="" class="border-0 form-control text-end"></td>
                                            </tr>

                                            <tr>
                                                <td>Dry Cleaning</td>
                                                <td><input type="text" name="" class="border-0 form-control text-end"></td>
                                                <td><input type="text" name="" class="border-0 form-control text-end"></td>
                                                <td><input type="text" name="" class="border-0 form-control text-end"></td>
                                                <td><input type="text" name="" class="border-0 form-control text-end"></td>
                                            </tr>

                                            <tr>
                                                <td>Electric</td>
                                                <td><input type="text" name="" class="border-0 form-control text-end"></td>
                                                <td><input type="text" name="" class="border-0 form-control text-end"></td>
                                                <td><input type="text" name="" class="border-0 form-control text-end"></td>
                                                <td><input type="text" name="" class="border-0 form-control text-end"></td>
                                            </tr>

                                            <tr>
                                                <td>Food (groceries & restaurants)</td>
                                                <td><input type="text" name="" class="border-0 form-control text-end"></td>
                                                <td><input type="text" name="" class="border-0 form-control text-end"></td>
                                                <td><input type="text" name="" class="border-0 form-control text-end"></td>
                                                <td><input type="text" name="" class="border-0 form-control text-end"></td>
                                            </tr>

                                            <tr>
                                                <td>Fuel</td>
                                                <td><input type="text" name="" class="border-0 form-control text-end"></td>
                                                <td><input type="text" name="" class="border-0 form-control text-end"></td>
                                                <td><input type="text" name="" class="border-0 form-control text-end"></td>
                                                <td><input type="text" name="" class="border-0 form-control text-end"></td>
                                            </tr>

                                            <tr>
                                                <td>Gas (for home)</td>
                                                <td><input type="text" name="" class="border-0 form-control text-end"></td>
                                                <td><input type="text" name="" class="border-0 form-control text-end"></td>
                                                <td><input type="text" name="" class="border-0 form-control text-end"></td>
                                                <td><input type="text" name="" class="border-0 form-control text-end"></td>
                                            </tr>

                                            <tr>
                                                <td>Health Insurance (not deducted from pay)</td>
                                                <td><input type="text" name="" class="border-0 form-control text-end"></td>
                                                <td><input type="text" name="" class="border-0 form-control text-end"></td>
                                                <td><input type="text" name="" class="border-0 form-control text-end"></td>
                                                <td><input type="text" name="" class="border-0 form-control text-end"></td>
                                            </tr>

                                            <tr>
                                                <td>HOA</td>
                                                <td><input type="text" name="" class="border-0 form-control text-end"></td>
                                                <td><input type="text" name="" class="border-0 form-control text-end"></td>
                                                <td><input type="text" name="" class="border-0 form-control text-end"></td>
                                                <td><input type="text" name="" class="border-0 form-control text-end"></td>
                                            </tr>

                                            <tr>
                                                <td>Home Insurance (if not included in mortgage)</td>
                                                <td><input type="text" name="" class="border-0 form-control text-end"></td>
                                                <td><input type="text" name="" class="border-0 form-control text-end"></td>
                                                <td><input type="text" name="" class="border-0 form-control text-end"></td>
                                                <td><input type="text" name="" class="border-0 form-control text-end"></td>
                                            </tr>

                                            <tr>
                                                <td>Home Phone</td>
                                                <td><input type="text" name="" class="border-0 form-control text-end"></td>
                                                <td><input type="text" name="" class="border-0 form-control text-end"></td>
                                                <td><input type="text" name="" class="border-0 form-control text-end"></td>
                                                <td><input type="text" name="" class="border-0 form-control text-end"></td>
                                            </tr>

                                            <tr>
                                                <td>Internet/Cable</td>
                                                <td><input type="text" name="" class="border-0 form-control text-end"></td>
                                                <td><input type="text" name="" class="border-0 form-control text-end"></td>
                                                <td><input type="text" name="" class="border-0 form-control text-end"></td>
                                                <td><input type="text" name="" class="border-0 form-control text-end"></td>
                                            </tr>

                                            <tr>
                                                <td>Lawn Care</td>
                                                <td><input type="text" name="" class="border-0 form-control text-end"></td>
                                                <td><input type="text" name="" class="border-0 form-control text-end"></td>
                                                <td><input type="text" name="" class="border-0 form-control text-end"></td>
                                                <td><input type="text" name="" class="border-0 form-control text-end"></td>
                                            </tr>

                                            <tr>
                                                <td>Membership Fees</td>
                                                <td><input type="text" name="" class="border-0 form-control text-end"></td>
                                                <td><input type="text" name="" class="border-0 form-control text-end"></td>
                                                <td><input type="text" name="" class="border-0 form-control text-end"></td>
                                                <td><input type="text" name="" class="border-0 form-control text-end"></td>
                                            </tr>

                                            <tr>
                                                <td>Mortgage/Rent/Lease</td>
                                                <td><input type="text" name="" class="border-0 form-control text-end"></td>
                                                <td><input type="text" name="" class="border-0 form-control text-end"></td>
                                                <td><input type="text" name="" class="border-0 form-control text-end"></td>
                                                <td><input type="text" name="" class="border-0 form-control text-end"></td>
                                            </tr>

                                            <tr>
                                                <td>Pest Control</td>
                                                <td><input type="text" name="" class="border-0 form-control text-end"></td>
                                                <td><input type="text" name="" class="border-0 form-control text-end"></td>
                                                <td><input type="text" name="" class="border-0 form-control text-end"></td>
                                                <td><input type="text" name="" class="border-0 form-control text-end"></td>
                                            </tr>

                                            <tr>
                                                <td>Pets</td>
                                                <td><input type="text" name="" class="border-0 form-control text-end"></td>
                                                <td><input type="text" name="" class="border-0 form-control text-end"></td>
                                                <td><input type="text" name="" class="border-0 form-control text-end"></td>
                                                <td><input type="text" name="" class="border-0 form-control text-end"></td>
                                            </tr>

                                            <tr>
                                                <td>Pool Service</td>
                                                <td><input type="text" name="" class="border-0 form-control text-end"></td>
                                                <td><input type="text" name="" class="border-0 form-control text-end"></td>
                                                <td><input type="text" name="" class="border-0 form-control text-end"></td>
                                                <td><input type="text" name="" class="border-0 form-control text-end"></td>
                                            </tr>

                                            <tr>
                                                <td>Property Taxes (if not included in mortgage)</td>
                                                <td><input type="text" name="" class="border-0 form-control text-end"></td>
                                                <td><input type="text" name="" class="border-0 form-control text-end"></td>
                                                <td><input type="text" name="" class="border-0 form-control text-end"></td>
                                                <td><input type="text" name="" class="border-0 form-control text-end"></td>
                                            </tr>

                                            <tr>
                                                <td>Security</td>
                                                <td><input type="text" name="" class="border-0 form-control text-end"></td>
                                                <td><input type="text" name="" class="border-0 form-control text-end"></td>
                                                <td><input type="text" name="" class="border-0 form-control text-end"></td>
                                                <td><input type="text" name="" class="border-0 form-control text-end"></td>
                                            </tr>

                                            <tr>
                                                <td>Sewer</td>
                                                <td><input type="text" name="" class="border-0 form-control text-end"></td>
                                                <td><input type="text" name="" class="border-0 form-control text-end"></td>
                                                <td><input type="text" name="" class="border-0 form-control text-end"></td>
                                                <td><input type="text" name="" class="border-0 form-control text-end"></td>
                                            </tr>

                                            <tr>
                                                <td>Student Loans</td>
                                                <td><input type="text" name="" class="border-0 form-control text-end"></td>
                                                <td><input type="text" name="" class="border-0 form-control text-end"></td>
                                                <td><input type="text" name="" class="border-0 form-control text-end"></td>
                                                <td><input type="text" name="" class="border-0 form-control text-end"></td>
                                            </tr>

                                            <tr>
                                                <td>Unreimbursed Medical Expense</td>
                                                <td><input type="text" name="" class="border-0 form-control text-end"></td>
                                                <td><input type="text" name="" class="border-0 form-control text-end"></td>
                                                <td><input type="text" name="" class="border-0 form-control text-end"></td>
                                                <td><input type="text" name="" class="border-0 form-control text-end"></td>
                                            </tr>

                                            <tr>
                                                <td>Water</td>
                                                <td><input type="text" name="" class="border-0 form-control text-end"></td>
                                                <td><input type="text" name="" class="border-0 form-control text-end"></td>
                                                <td><input type="text" name="" class="border-0 form-control text-end"></td>
                                                <td><input type="text" name="" class="border-0 form-control text-end"></td>
                                            </tr>

                                            <tr>
                                                {{-- <td colspan="3" class="text-end fw-bold pe-3">Other</td> --}}
                                                <td   > Other:  <input type="text" name="" class="border-0 w-75 border-bottom"> </td>

                                                <td><input type="text" name="" class="border-0 form-control text-end">  </td>
                                                <td><input type="text" name="" class="border-0 form-control text-end">  </td>
                                                <td><input type="text" name="" class="border-0 form-control text-end">  </td>
                                                <td><input type="text" name="" class="border-0 form-control text-end">  </td>

                                            </tr>
                                            <tr>
                                                <td colspan="4" class="text-end fw-bold pe-3">Total Monthly Expenses</td>
                                                <td><input type="text" name="" class="border-0 form-control text-end">  </td>

                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                @include('layouts.footer14', ['page' => 4])

                    </div>

                </section>
                <section  class="section_area row page1 bg-white pt-5 p-lg-5 pe-2 pe-lg-5 p-lg-3 m-3 mt-4  pt-lg-5 pt-4"  >
                    <div class="col-lg-10 mx-auto">
                        <div class="py-2 fw-bold text-center">Household Information</div>
                        <div class="text-center">
                            <div class="row">
                                    <div class="col-lg-1" style="max-width:20px;"> A.</div>
                                   <div class="col-lg-11"> Fill in the table below with the name and date of birth of each child, the person the child is living with, and whether the child is from this relationship. Attached a separate sheet if needed.</div>
                            </div>
                        </div>
                        <div class="ms-lg-5">
                            <div class="table-responsive">
                                <table class="table table-bordered border-dark">
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td class="small_text">Child’s Name</td>
                                            <td class="small_text">Child’s DOB</td>
                                            <td class="small_text">Whom is this DOB child living with?</td>
                                            <td class="small_text">Is this child from this relationship?</td>
                                            <td class="small_text">Has this child been certified as special needs/disabled?</td>
                                        </tr>
                                        <tr>
                                            <td class="px-3">1<sup>st</sup></td>
                                            <td><input type="text" name="" class="border-0 form-control text-center"></td>
                                            <td><input type="text" name="" class="border-0 form-control text-center"></td>
                                            <td><input type="text" name="" class="border-0 form-control text-center"></td>
                                            <td><input type="text" name="" class="border-0 form-control text-center"></td>
                                            <td><input type="text" name="" class="border-0 form-control text-center"></td>
                                        </tr>
                                        <tr>
                                            <td class="px-3">2<sup>nd</sup></td>
                                            <td><input type="text" name="" class="border-0 form-control text-center"></td>
                                            <td><input type="text" name="" class="border-0 form-control text-center"></td>
                                            <td><input type="text" name="" class="border-0 form-control text-center"></td>
                                            <td><input type="text" name="" class="border-0 form-control text-center"></td>
                                            <td><input type="text" name="" class="border-0 form-control text-center"></td>
                                        </tr>
                                        <tr>
                                            <td class="px-3">3<sup>rd</sup></td>
                                            <td><input type="text" name="" class="border-0 form-control text-center"></td>
                                            <td><input type="text" name="" class="border-0 form-control text-center"></td>
                                            <td><input type="text" name="" class="border-0 form-control text-center"></td>
                                            <td><input type="text" name="" class="border-0 form-control text-center"></td>
                                            <td><input type="text" name="" class="border-0 form-control text-center"></td>
                                        </tr>
                                        <tr>
                                            <td class="px-3">4<sup>th</sup></td>
                                            <td><input type="text" name="" class="border-0 form-control text-center"></td>
                                            <td><input type="text" name="" class="border-0 form-control text-center"></td>
                                            <td><input type="text" name="" class="border-0 form-control text-center"></td>
                                            <td><input type="text" name="" class="border-0 form-control text-center"></td>
                                            <td><input type="text" name="" class="border-0 form-control text-center"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                             <div class="row">
                                    <div class="col-lg-1" style="max-width:20px;">B.</div>
                                   <div class="col-lg-11">  Fill in the table below with the amount of money you spend each month on the following expenses for each child.</div>
                            </div>
                            <div class="ms-lg-5">
                                <div class="table-responsive">
                               <table class="table table-bordered border-dark">
                                <tbody>
                                    <tr>
                                        <td>Type of Expense</td>
                                        <td>1<sup>st</sup>Child</td>
                                        <td>2<sup>nd</sup>Child</td>
                                        <td>3<sup>rd</sup>Child</td>
                                        <td>4<sup>th</sup>Child</td>
                                    </tr>

                                    <tr>
                                        <td>Cellular Phone</td>
                                        <td><input type="text" name="" class="border-0 form-control text-center"></td>
                                        <td><input type="text" name="" class="border-0 form-control text-center"></td>
                                        <td><input type="text" name="" class="border-0 form-control text-center"></td>
                                        <td><input type="text" name="" class="border-0 form-control text-center"></td>
                                    </tr>

                                    <tr>
                                        <td>Child Care</td>
                                        <td><input type="text" name="" class="border-0 form-control text-center"></td>
                                        <td><input type="text" name="" class="border-0 form-control text-center"></td>
                                        <td><input type="text" name="" class="border-0 form-control text-center"></td>
                                        <td><input type="text" name="" class="border-0 form-control text-center"></td>
                                    </tr>

                                    <tr>
                                        <td>Clothing</td>
                                        <td><input type="text" name="" class="border-0 form-control text-center"></td>
                                        <td><input type="text" name="" class="border-0 form-control text-center"></td>
                                        <td><input type="text" name="" class="border-0 form-control text-center"></td>
                                        <td><input type="text" name="" class="border-0 form-control text-center"></td>
                                    </tr>

                                    <tr>
                                        <td>Education</td>
                                        <td><input type="text" name="" class="border-0 form-control text-center"></td>
                                        <td><input type="text" name="" class="border-0 form-control text-center"></td>
                                        <td><input type="text" name="" class="border-0 form-control text-center"></td>
                                        <td><input type="text" name="" class="border-0 form-control text-center"></td>
                                    </tr>

                                    <tr>
                                        <td>Entertainment</td>
                                        <td><input type="text" name="" class="border-0 form-control text-center"></td>
                                        <td><input type="text" name="" class="border-0 form-control text-center"></td>
                                        <td><input type="text" name="" class="border-0 form-control text-center"></td>
                                        <td><input type="text" name="" class="border-0 form-control text-center"></td>
                                    </tr>

                                    <tr>
                                        <td>Extracurricular & Sports</td>
                                        <td><input type="text" name="" class="border-0 form-control text-center"></td>
                                        <td><input type="text" name="" class="border-0 form-control text-center"></td>
                                        <td><input type="text" name="" class="border-0 form-control text-center"></td>
                                        <td><input type="text" name="" class="border-0 form-control text-center"></td>
                                    </tr>

                                    <tr>
                                        <td>Health Insurance (if not deducted from pay)</td>
                                        <td><input type="text" name="" class="border-0 form-control text-center"></td>
                                        <td><input type="text" name="" class="border-0 form-control text-center"></td>
                                        <td><input type="text" name="" class="border-0 form-control text-center"></td>
                                        <td><input type="text" name="" class="border-0 form-control text-center"></td>
                                    </tr>

                                    <tr>
                                        <td>Summer Camp/Programs</td>
                                        <td><input type="text" name="" class="border-0 form-control text-center"></td>
                                        <td><input type="text" name="" class="border-0 form-control text-center"></td>
                                        <td><input type="text" name="" class="border-0 form-control text-center"></td>
                                        <td><input type="text" name="" class="border-0 form-control text-center"></td>
                                    </tr>

                                    <tr>
                                        <td>Transportation Costs for Visitation</td>
                                        <td><input type="text" name="" class="border-0 form-control text-center"></td>
                                        <td><input type="text" name="" class="border-0 form-control text-center"></td>
                                        <td><input type="text" name="" class="border-0 form-control text-center"></td>
                                        <td><input type="text" name="" class="border-0 form-control text-center"></td>
                                    </tr>

                                    <tr>
                                        <td>Unreimbursed Medical Expenses</td>
                                        <td><input type="text" name="" class="border-0 form-control text-center"></td>
                                        <td><input type="text" name="" class="border-0 form-control text-center"></td>
                                        <td><input type="text" name="" class="border-0 form-control text-center"></td>
                                        <td><input type="text" name="" class="border-0 form-control text-center"></td>
                                    </tr>

                                    <tr>
                                        <td>Vehicle</td>
                                        <td><input type="text" name="" class="border-0 form-control text-center"></td>
                                        <td><input type="text" name="" class="border-0 form-control text-center"></td>
                                        <td><input type="text" name="" class="border-0 form-control text-center"></td>
                                        <td><input type="text" name="" class="border-0 form-control text-center"></td>
                                    </tr>
                                    <tr>
                                        <td>Other: <input type="text" name="" class="border-0"></td>
                                        <td><input type="text" name="" class="border-0 form-control text-center"></td>
                                        <td><input type="text" name="" class="border-0 form-control text-center"></td>
                                        <td><input type="text" name="" class="border-0 form-control text-center"></td>
                                        <td><input type="text" name="" class="border-0 form-control text-center"></td>
                                    </tr>
                                    <tr>
                                        <td>Total Monthly Expenses</td>
                                        <td><input type="text" name="" class="border-0 form-control text-center" value="0"></td>
                                        <td><input type="text" name="" class="border-0 form-control text-center" value="0"></td>
                                        <td><input type="text" name="" class="border-0 form-control text-center" value="0"></td>
                                        <td><input type="text" name="" class="border-0 form-control text-center" value="0"></td>
                                    </tr>

                                </tbody>
                               </table>
                                </div>
                            </div>

                            <div class="row py-2">
                                <div class="col-lg-1" style="max-width:20px;">C.</div>
                               <div class="col-lg-11">Fill in the table below with the names, ages, and the amount of money contributed by all persons living in the home over the age of eighteen. If more than 4 adult household members attached a separate sheet.</div>
                            </div>

                            <div class="ms-lg-5 pt-2">
                                <div class="table-responsive">
                                    <table class="table table-bordered border-dark">
                                        <tbody>
                                            <tr>
                                                <td class="small_text">Name</td>
                                                <td class="small_text">Age</td>
                                                <td class="small_text">Person’s Relationship to You <Br> (i.e. sister, friend, cousin, etc...) </td>
                                                <td class="small_text">Monthly Contribution</td>
                                            </tr>

                                            <tr>
                                                <td><input type="text" name="" class="border-0 form-control text-center"></td>
                                                <td><input type="text" name="" class="border-0 form-control text-center"></td>
                                                <td><input type="text" name="" class="border-0 form-control text-center"></td>
                                                <td><input type="text" name="" class="border-0 form-control text-center"></td>
                                            </tr>

                                            <tr>
                                                <td><input type="text" name="" class="border-0 form-control text-center"></td>
                                                <td><input type="text" name="" class="border-0 form-control text-center"></td>
                                                <td><input type="text" name="" class="border-0 form-control text-center"></td>
                                                <td><input type="text" name="" class="border-0 form-control text-center"></td>
                                            </tr>

                                            <tr>
                                                <td><input type="text" name="" class="border-0 form-control text-center"></td>
                                                <td><input type="text" name="" class="border-0 form-control text-center"></td>
                                                <td><input type="text" name="" class="border-0 form-control text-center"></td>
                                                <td><input type="text" name="" class="border-0 form-control text-center"></td>
                                            </tr>

                                            <tr>
                                                <td><input type="text" name="" class="border-0 form-control text-center"></td>
                                                <td><input type="text" name="" class="border-0 form-control text-center"></td>
                                                <td><input type="text" name="" class="border-0 form-control text-center"></td>
                                                <td><input type="text" name="" class="border-0 form-control text-center"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            @include('layouts.footer14', ['page' => 5])
                </section>


                {{-- 6 page  --}}



                <section  class="section_area row page1 bg-white pt-5 p-lg-5 pe-2 pe-lg-5 p-lg-3 m-3 mt-4  pt-lg-5 pt-4"  >
                    <div class="col-lg-10 mx-auto">
                        <div class="text-center fw-bold">Personal Asset and Debt Chart</div>
                           <div class="row py-2">
                                <div class="col-lg-1" style="max-width:20px;">C.</div>
                               <div class="col-lg-11">Fill in the table below with the names, ages, and the amount of money contributed by all persons living in the home over the age of eighteen. If more than 4 adult household members attached a separate sheet.</div>
                            </div>
                        <div class="ms-lg-5 pt-2">
                            <div class="table-responsive">
                                <table class="table table-bordered border-dark">

                                    <tbody>
                                        <tr>
                                            <td class="small_text">Line</td>
                                            <td class="small_text">Description of Asset and Debt Thereon</td>
                                            <td class="small_text">Gross Value</td>
                                            <td class="small_text"> </td>
                                            <td class="small_text">Total Amount Owed</td>
                                            <td class="small_text"></td>
                                            <td class="small_text">Net Value</td>
                                            <td class="small_text">Whose Name is<br> on the Account?<br> You, Your <Br> Spouse/Domestic Partner <br> or Both</td>
                                        </tr>
                                        <tr>
                                            <td>1.</td>
                                            <td><input type="text" name="" class="border-0 form-control "></td>
                                            <td>  <div class="d-flex w-100 mx-auto">
                                                <span>$</span><input type="text" name="FI_job1"
                                                    class="border-0  w-100 text-end">
                                            </div> </td>
                                            <td class="px-2">-</td>
                                            <td> <div class="d-flex w-100 mx-auto">
                                                <span>$</span><input type="text" name="FI_job1"
                                                    class="border-0  w-100 text-end">
                                            </div></td>
                                            <td class="px-2">=</td>
                                            <td>  <div class="d-flex w-100 mx-auto">
                                                <span>$</span><input type="text" name="FI_job1"
                                                    class="border-0   w-100 text-end">
                                            </div></td>
                                            <td><input type="text" name="" class="border-0 form-control  "></td>
                                        </tr>


                                        <tr>
                                            <td>2.</td>
                                            <td><input type="text" name="" class="border-0 form-control "></td>
                                            <td>  <div class="d-flex w-100 mx-auto">
                                                <span>$</span><input type="text" name="FI_job1"
                                                    class="border-0  w-100 text-end">
                                            </div> </td>
                                            <td class="px-2">-</td>
                                            <td> <div class="d-flex w-100 mx-auto">
                                                <span>$</span><input type="text" name="FI_job1"
                                                    class="border-0  w-100 text-end">
                                            </div></td>
                                            <td class="px-2">=</td>
                                            <td>  <div class="d-flex w-100 mx-auto">
                                                <span>$</span><input type="text" name="FI_job1"
                                                    class="border-0   w-100 text-end">
                                            </div></td>
                                            <td><input type="text" name="" class="border-0 form-control  "></td>
                                        </tr>

                                        <tr>
                                            <td>3.</td>
                                            <td><input type="text" name="" class="border-0 form-control "></td>
                                            <td>  <div class="d-flex w-100 mx-auto">
                                                <span>$</span><input type="text" name="FI_job1"
                                                    class="border-0  w-100 text-end">
                                            </div> </td>
                                            <td class="px-2">-</td>
                                            <td> <div class="d-flex w-100 mx-auto">
                                                <span>$</span><input type="text" name="FI_job1"
                                                    class="border-0  w-100 text-end">
                                            </div></td>
                                            <td class="px-2">=</td>
                                            <td>  <div class="d-flex w-100 mx-auto">
                                                <span>$</span><input type="text" name="FI_job1"
                                                    class="border-0   w-100 text-end">
                                            </div></td>
                                            <td><input type="text" name="" class="border-0 form-control  "></td>
                                        </tr>

                                        <tr>
                                            <td>4.</td>
                                            <td><input type="text" name="" class="border-0 form-control "></td>
                                            <td>  <div class="d-flex w-100 mx-auto">
                                                <span>$</span><input type="text" name="FI_job1"
                                                    class="border-0  w-100 text-end">
                                            </div> </td>
                                            <td class="px-2">-</td>
                                            <td> <div class="d-flex w-100 mx-auto">
                                                <span>$</span><input type="text" name="FI_job1"
                                                    class="border-0  w-100 text-end">
                                            </div></td>
                                            <td class="px-2">=</td>
                                            <td>  <div class="d-flex w-100 mx-auto">
                                                <span>$</span><input type="text" name="FI_job1"
                                                    class="border-0   w-100 text-end">
                                            </div></td>
                                            <td><input type="text" name="" class="border-0 form-control  "></td>
                                        </tr>

                                        <tr>
                                            <td>5.</td>
                                            <td><input type="text" name="" class="border-0 form-control "></td>
                                            <td>  <div class="d-flex w-100 mx-auto">
                                                <span>$</span><input type="text" name="FI_job1"
                                                    class="border-0  w-100 text-end">
                                            </div> </td>
                                            <td class="px-2">-</td>
                                            <td> <div class="d-flex w-100 mx-auto">
                                                <span>$</span><input type="text" name="FI_job1"
                                                    class="border-0  w-100 text-end">
                                            </div></td>
                                            <td class="px-2">=</td>
                                            <td>  <div class="d-flex w-100 mx-auto">
                                                <span>$</span><input type="text" name="FI_job1"
                                                    class="border-0   w-100 text-end">
                                            </div></td>
                                            <td><input type="text" name="" class="border-0 form-control  "></td>
                                        </tr>

                                        <tr>
                                            <td>6.</td>
                                            <td><input type="text" name="" class="border-0 form-control "></td>
                                            <td>  <div class="d-flex w-100 mx-auto">
                                                <span>$</span><input type="text" name="FI_job1"
                                                    class="border-0  w-100 text-end">
                                            </div> </td>
                                            <td class="px-2">-</td>
                                            <td> <div class="d-flex w-100 mx-auto">
                                                <span>$</span><input type="text" name="FI_job1"
                                                    class="border-0  w-100 text-end">
                                            </div></td>
                                            <td class="px-2">=</td>
                                            <td>  <div class="d-flex w-100 mx-auto">
                                                <span>$</span><input type="text" name="FI_job1"
                                                    class="border-0   w-100 text-end">
                                            </div></td>
                                            <td><input type="text" name="" class="border-0 form-control  "></td>
                                        </tr>

                                        <tr>
                                            <td>7.</td>
                                            <td><input type="text" name="" class="border-0 form-control "></td>
                                            <td>  <div class="d-flex w-100 mx-auto">
                                                <span>$</span><input type="text" name="FI_job1"
                                                    class="border-0  w-100 text-end">
                                            </div> </td>
                                            <td class="px-2">-</td>
                                            <td> <div class="d-flex w-100 mx-auto">
                                                <span>$</span><input type="text" name="FI_job1"
                                                    class="border-0  w-100 text-end">
                                            </div></td>
                                            <td class="px-2">=</td>
                                            <td>  <div class="d-flex w-100 mx-auto">
                                                <span>$</span><input type="text" name="FI_job1"
                                                    class="border-0   w-100 text-end">
                                            </div></td>
                                            <td><input type="text" name="" class="border-0 form-control  "></td>
                                        </tr>

                                        <tr>
                                            <td>8.</td>
                                            <td><input type="text" name="" class="border-0 form-control "></td>
                                            <td>  <div class="d-flex w-100 mx-auto">
                                                <span>$</span><input type="text" name="FI_job1"
                                                    class="border-0  w-100 text-end">
                                            </div> </td>
                                            <td class="px-2">-</td>
                                            <td> <div class="d-flex w-100 mx-auto">
                                                <span>$</span><input type="text" name="FI_job1"
                                                    class="border-0  w-100 text-end">
                                            </div></td>
                                            <td class="px-2">=</td>
                                            <td>  <div class="d-flex w-100 mx-auto">
                                                <span>$</span><input type="text" name="FI_job1"
                                                    class="border-0   w-100 text-end">
                                            </div></td>
                                            <td><input type="text" name="" class="border-0 form-control  "></td>
                                        </tr>

                                        <tr>
                                            <td>1.</td>
                                            <td><input type="text" name="" class="border-0 form-control "></td>
                                            <td>  <div class="d-flex w-100 mx-auto">
                                                <span>$</span><input type="text" name="FI_job1"
                                                    class="border-0  w-100 text-end">
                                            </div> </td>
                                            <td class="px-2">-</td>
                                            <td> <div class="d-flex w-100 mx-auto">
                                                <span>$</span><input type="text" name="FI_job1"
                                                    class="border-0  w-100 text-end">
                                            </div></td>
                                            <td class="px-2">=</td>
                                            <td>  <div class="d-flex w-100 mx-auto">
                                                <span>$</span><input type="text" name="FI_job1"
                                                    class="border-0   w-100 text-end">
                                            </div></td>
                                            <td><input type="text" name="" class="border-0 form-control  "></td>
                                        </tr>

                                        <tr>
                                            <td>9.</td>
                                            <td><input type="text" name="" class="border-0 form-control "></td>
                                            <td>  <div class="d-flex w-100 mx-auto">
                                                <span>$</span><input type="text" name="FI_job1"
                                                    class="border-0  w-100 text-end">
                                            </div> </td>
                                            <td class="px-2">-</td>
                                            <td> <div class="d-flex w-100 mx-auto">
                                                <span>$</span><input type="text" name="FI_job1"
                                                    class="border-0  w-100 text-end">
                                            </div></td>
                                            <td class="px-2">=</td>
                                            <td>  <div class="d-flex w-100 mx-auto">
                                                <span>$</span><input type="text" name="FI_job1"
                                                    class="border-0   w-100 text-end">
                                            </div></td>
                                            <td><input type="text" name="" class="border-0 form-control  "></td>
                                        </tr>

                                        <tr>
                                            <td>10.</td>
                                            <td><input type="text" name="" class="border-0 form-control "></td>
                                            <td>  <div class="d-flex w-100 mx-auto">
                                                <span>$</span><input type="text" name="FI_job1"
                                                    class="border-0  w-100 text-end">
                                            </div> </td>
                                            <td class="px-2">-</td>
                                            <td> <div class="d-flex w-100 mx-auto">
                                                <span>$</span><input type="text" name="FI_job1"
                                                    class="border-0  w-100 text-end">
                                            </div></td>
                                            <td class="px-2">=</td>
                                            <td>  <div class="d-flex w-100 mx-auto">
                                                <span>$</span><input type="text" name="FI_job1"
                                                    class="border-0   w-100 text-end">
                                            </div></td>
                                            <td><input type="text" name="" class="border-0 form-control  "></td>
                                        </tr>

                                        <tr>
                                            <td>11.</td>
                                            <td><input type="text" name="" class="border-0 form-control "></td>
                                            <td>  <div class="d-flex w-100 mx-auto">
                                                <span>$</span><input type="text" name="FI_job1"
                                                    class="border-0  w-100 text-end">
                                            </div> </td>
                                            <td class="px-2">-</td>
                                            <td> <div class="d-flex w-100 mx-auto">
                                                <span>$</span><input type="text" name="FI_job1"
                                                    class="border-0  w-100 text-end">
                                            </div></td>
                                            <td class="px-2">=</td>
                                            <td>  <div class="d-flex w-100 mx-auto">
                                                <span>$</span><input type="text" name="FI_job1"
                                                    class="border-0   w-100 text-end">
                                            </div></td>
                                            <td><input type="text" name="" class="border-0 form-control  "></td>
                                        </tr>

                                        <tr>
                                            <td>12.</td>
                                            <td><input type="text" name="" class="border-0 form-control "></td>
                                            <td>  <div class="d-flex w-100 mx-auto">
                                                <span>$</span><input type="text" name="FI_job1"
                                                    class="border-0  w-100 text-end">
                                            </div> </td>
                                            <td class="px-2">-</td>
                                            <td> <div class="d-flex w-100 mx-auto">
                                                <span>$</span><input type="text" name="FI_job1"
                                                    class="border-0  w-100 text-end">
                                            </div></td>
                                            <td class="px-2">=</td>
                                            <td>  <div class="d-flex w-100 mx-auto">
                                                <span>$</span><input type="text" name="FI_job1"
                                                    class="border-0   w-100 text-end">
                                            </div></td>
                                            <td><input type="text" name="" class="border-0 form-control  "></td>
                                        </tr>

                                        <tr>
                                            <td>13.</td>
                                            <td><input type="text" name="" class="border-0 form-control "></td>
                                            <td>  <div class="d-flex w-100 mx-auto">
                                                <span>$</span><input type="text" name="FI_job1"
                                                    class="border-0  w-100 text-end">
                                            </div> </td>
                                            <td class="px-2">-</td>
                                            <td> <div class="d-flex w-100 mx-auto">
                                                <span>$</span><input type="text" name="FI_job1"
                                                    class="border-0  w-100 text-end">
                                            </div></td>
                                            <td class="px-2">=</td>
                                            <td>  <div class="d-flex w-100 mx-auto">
                                                <span>$</span><input type="text" name="FI_job1"
                                                    class="border-0   w-100 text-end">
                                            </div></td>
                                            <td><input type="text" name="" class="border-0 form-control  "></td>
                                        </tr>
                                        <tr>
                                            <td>14.</td>
                                            <td><input type="text" name="" class="border-0 form-control "></td>
                                            <td>  <div class="d-flex w-100 mx-auto">
                                                <span>$</span><input type="text" name="FI_job1"
                                                    class="border-0  w-100 text-end">
                                            </div> </td>
                                            <td class="px-2">-</td>
                                            <td> <div class="d-flex w-100 mx-auto">
                                                <span>$</span><input type="text" name="FI_job1"
                                                    class="border-0  w-100 text-end">
                                            </div></td>
                                            <td class="px-2">=</td>
                                            <td>  <div class="d-flex w-100 mx-auto">
                                                <span>$</span><input type="text" name="FI_job1"
                                                    class="border-0   w-100 text-end">
                                            </div></td>
                                            <td><input type="text" name="" class="border-0 form-control  "></td>
                                        </tr>
                                        <tr>
                                            <td>15.</td>
                                            <td><input type="text" name="" class="border-0 form-control "></td>
                                            <td>  <div class="d-flex w-100 mx-auto">
                                                <span>$</span><input type="text" name="FI_job1"
                                                    class="border-0  w-100 text-end">
                                            </div> </td>
                                            <td class="px-2">-</td>
                                            <td> <div class="d-flex w-100 mx-auto">
                                                <span>$</span><input type="text" name="FI_job1"
                                                    class="border-0  w-100 text-end">
                                            </div></td>
                                            <td class="px-2">=</td>
                                            <td>  <div class="d-flex w-100 mx-auto">
                                                <span>$</span><input type="text" name="FI_job1"
                                                    class="border-0   w-100 text-end">
                                            </div></td>
                                            <td><input type="text" name="" class="border-0 form-control  "></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" class="small_text text-center">Total Value of Assets (add lines 1-15)</td>
                                             <td>  <div class="d-flex w-100 mx-auto">
                                                <span>$</span><input type="text" name="FI_job1"
                                                    class="border-0  w-100 text-end" value="0">
                                            </div> </td>
                                            <td class="px-2">-</td>
                                            <td> <div class="d-flex w-100 mx-auto">
                                                <span>$</span><input type="text" name="FI_job1"
                                                    class="border-0  w-100 text-end" value="0">
                                            </div></td>
                                            <td class="px-2">=</td>
                                            <td>  <div class="d-flex w-100 mx-auto">
                                                <span>$</span><input type="text" name="FI_job1"
                                                    class="border-0   w-100 text-end" value="0">
                                            </div></td>
                                            <td></td>
                                        </tr>


                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row py-2 mx-auto text-center">
                            <div class="col-lg-1" style="max-width:20px;">B.</div>
                           <div class="col-lg-11">Complete this chart by listing all of your unsecured debt, the amount owed on each account, and whose name the debt is under. If more than 5 unsecured debts, attach a separate sheet.</div>
                        </div>

                        <div class="ms-lg-5 pt-2">
                            <div class="table-responsive">
                                <table class="table table-bordered border-dark">

                                    <tbody>
                                        <tr>
                                            <td class="small_text text-center">Line #</td>
                                            <td class="small_text text-center">Description of Credit Card or Other Unsecured Debt</td>
                                            <td class="small_text text-center">Total Amount owed</td>
                                            <td class="small_text text-center">Whose Name is on the Account?
                                                You, Your Spouse/Domestic Partner or Both</td>
                                        </tr>
                                        <tr>
                                            <td class="px-2">1.</td>
                                            <td><input type="text" name="" class="border-0 form-control "></td>

                                            <td>  <div class="d-flex w-100 mx-auto">
                                                <span>$</span><input type="text" name="FI_job1"
                                                    class="border-0   w-100  " >
                                            </div></td>
                                            <td><input type="text" name="" class="border-0 form-control "></td>
                                        </tr>
                                        <tr>
                                            <td class="px-2">2.</td>
                                            <td><input type="text" name="" class="border-0 form-control "></td>

                                            <td>  <div class="d-flex w-100 mx-auto">
                                                <span>$</span><input type="text" name="FI_job1"
                                                    class="border-0   w-100  "  >
                                            </div></td>
                                            <td><input type="text" name="" class="border-0 form-control "></td>
                                        </tr>
                                        <tr>
                                            <td class="px-2">3.</td>
                                            <td><input type="text" name="" class="border-0 form-control "></td>

                                            <td>  <div class="d-flex w-100 mx-auto">
                                                <span>$</span><input type="text" name="FI_job1"
                                                    class="border-0   w-100  " >
                                            </div></td>
                                            <td><input type="text" name="" class="border-0 form-control "></td>
                                        </tr>
                                        <tr>
                                            <td class="px-2">4.</td>
                                            <td><input type="text" name="" class="border-0 form-control "></td>

                                            <td>  <div class="d-flex w-100 mx-auto">
                                                <span>$</span><input type="text" name="FI_job1"
                                                    class="border-0   w-100  "  >
                                            </div></td>
                                            <td><input type="text" name="" class="border-0 form-control "></td>
                                        </tr>
                                        <tr>
                                            <td class="px-2">5.</td>
                                            <td><input type="text" name="" class="border-0 form-control "></td>

                                            <td>  <div class="d-flex w-100 mx-auto">
                                                <span>$</span><input type="text" name="FI_job1"
                                                    class="border-0   w-100  " >
                                            </div></td>
                                            <td><input type="text" name="" class="border-0 form-control "></td>
                                        </tr>
                                        <tr>
                                            <td class="px-2">6.</td>
                                            <td><input type="text" name="" class="border-0 form-control "></td>

                                            <td>  <div class="d-flex w-100 mx-auto">
                                                <span>$</span><input type="text" name="FI_job1"
                                                    class="border-0   w-100  "  >
                                            </div></td>
                                            <td><input type="text" name="" class="border-0 form-control "></td>
                                        </tr>
                                        <tr>
                                            <td colspan="3" class="fw-bold text-end pe-3">Total Unsecured Debt (add lines 1-6)</td>
                                            <td>  <div class="d-flex w-100 mx-auto">
                                                <span>$</span><input type="text" name="FI_job1"
                                                    class="border-0   w-100  "  >
                                            </div></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>








                            @include('layouts.footer14', ['page' => 6])
                            {{-- <div class="d-flex gap-3 py-auto mb-2  ">
                                <div class="my-auto"> <a href="#first_section"><i
                                            class="fas fa-chevron-left"></i><i class="fas fa-chevron-left"></i></a>
                                </div>
                                <div class="my-auto ps-2"> <a href="#did_you_receive"><i
                                            class="fas fa-chevron-left"></i></a> </div>
                                <div>
                                    <select class="form-select w-100 sectionSelect">
                                        <option value="#first_section">1</option>
                                        <option value="#case_information">2</option>
                                        <option value="#attach_affidavit">3</option>
                                        <option value="#gross_income">4</option>
                                        <option value="#did_you_receive">5</option>
                                        <option value="#monthly_expenses" selected>6</option>
                                        <option value="#schedule_personal">7</option>
                                        <option value="#balance_sheet1">8</option>
                                        <option value="#balance_sheet2">9</option>
                                        <option value="#last_section">10</option>
                                    </select>
                                </div>
                                <div class="my-auto"> <a href="#schedule_personal"><i
                                            class="fas fa-chevron-right"></i> </a></div>
                                <div class="my-auto ps-2"><a href="#last_section"> <i
                                            class="fas fa-chevron-right"></i><i class="fas fa-chevron-right"></i>
                                    </a></div>
                            </div> --}}

                    </div>

                </section>


                <section  class="section_area row page1 bg-white pt-5 p-lg-5 pe-2 pe-lg-5 p-lg-3 m-3 mt-4  pt-lg-5 pt-4" >
                    <div class="col-lg-10 mx-auto">
                        <div class="py-2 fw-bold text-center">CERTIFICATION</div>
                        <div><strong>Attorney Information: </strong>Complete the following sentences:</div>
                        <div class="ms-lg-5">

                            <div class="row">
                                <div class="col-lg-1">1.</div>
                                <div class="col-lg-11"> I (have/have not) <span><input type="text" class="w-50 border-0 border-bottom"></span>retained an attorney for this case.</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-1">2.</div>
                                <div class="col-lg-11"> As of the date of today, the attorney has been paid a total of <span>$<input type="text" name="" class="responsive_input  border-0 border-bottom"></span>on my behalf.</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-1">3.</div>
                                <div class="col-lg-11"> I have a credit with my attorney in the amount of  <span>$<input type="text" name="" class=" responsive_input border-0 border-bottom w-50"></span ></div>
                            </div>

                            <div class="row">
                                <div class="col-lg-1">4.</div>
                                <div class="col-lg-11"> I currently owe my attorney a total of <span>$<input type="text" class="  border-0 border-bottom w-50 responsive_input responsive_input" name="" style="max-width:506px !important"></span></div>
                            </div>
                            <div class="row">
                                <div class="col-lg-1">5.</div>
                                <div class="col-lg-11">I owe my prior attorney a total of  <span>$<input type="text" class="  border-0 border-bottom w-50 responsive_input responsive_input" name="" style="max-width:541px !important"></span ></div>
                            </div>
                        </div>
                        <div class="py-5"><strong>IMPORTANT:</strong>  Read the following paragraphs carefully and initial each one.</div>


                        <div class="ms-lg-5">

                            <div class="pt-2"><input type="text" name="" class="border-0 border-bottom">I swear or affirm under penalty of perjury that I have read and followed all instructions in completing this Financial Disclosure Form. I understand that, by my signature, I guarantee the truthfulness of the information on this Form. I also understand that if I knowingly make false statements I may be subject to punishment, including contempt of court.</div>
                            <div class="pt-2 fw-bold"><input type="text" name="" class="border-0 border-bottom">I have attached a copy of my 3 most recent pay stubs to this form.</div>
                            <div class="pt-2 fw-bold"><input type="text" name="" class="border-0 border-bottom">I have attached a copy of my most recent YTD income statement/P&L  statement to this form, if self-employed.</div>
                            <div class="pt-2 fw-bold"><input type="text" name="" class="border-0 border-bottom">I have not attached a copy of my pay stubs to this form because I am currently unemployed.</div>
                            <div class="row mt-lg-3">

                                <div class="col-lg-6">
                                   <input type="text" name="" class="border-0 form-control border-bottom">
                                   <div>Signature</div>

                                </div>
                                <div class="col-lg-6">
                                   <input type="text" name="" class="border-0 form-control border-bottom">
                                   <div>Date</div>

                                </div>
                            </div>
                        </div>






                        @include('layouts.footer14', ['page' => 7])

                        {{-- <div class="d-flex gap-3 py-auto mb-2  ">
                            <div class="my-auto"> <a href="#first_section"><i class="fas fa-chevron-left"></i><i
                                        class="fas fa-chevron-left"></i></a></div>
                            <div class="my-auto ps-2"> <a href="#monthly_expenses"><i
                                        class="fas fa-chevron-left"></i></a> </div>
                            <div>
                                <select class="form-select w-100 sectionSelect">
                                    <option value="#first_section">1</option>
                                    <option value="#case_information">2</option>
                                    <option value="#attach_affidavit">3</option>
                                    <option value="#gross_income">4</option>
                                    <option value="#did_you_receive">5</option>
                                    <option value="#monthly_expenses">6</option>
                                    <option value="#schedule_personal" selected>7</option>
                                    <option value="#balance_sheet1">8</option>
                                    <option value="#balance_sheet2">9</option>
                                    <option value="#last_section">10</option>
                                </select>
                            </div>
                            <div class="my-auto"> <a href="#balance_sheet1"><i class="fas fa-chevron-right"></i>
                                </a></div>
                            <div class="my-auto ps-2"><a href="#last_section"> <i
                                        class="fas fa-chevron-right"></i><i class="fas fa-chevron-right"></i> </a>
                            </div>
                        </div> --}}
                    </div>
                </section>


                <section  class="section_area row page1 bg-white pt-5 p-lg-5 pe-2 pe-lg-5 p-lg-3 m-3 mt-4  pt-lg-5 pt-4" >
                    <div class="col-lg-10 mx-auto">
                        <div class="py-2 text-center fw-bold">CERTIFICATE OF SERVICE</div>
                        <div class="text-center">I hereby declare under the penalty of perjury of the State of Nevada that the following is true and</div>
                        <div>correct:</div>

                        <div class="ps-lg-4">That on (date) <input type="text" name="" class="border-0 border-bottom"> <span>service of the General Financial Disclosure Form was made to the following interested parties in the following manner:</span></div>
                        <div>
                          <div class="py-lg-5 " >  <input type="checkbox" name="" class="border-0 border-bottom"> <span>Via 1st Class U.S. Mail, postage fully prepaid addressed as follows:</span></div>
                          <input type="text" name="" class="border-0 border-bottom w-100">
                        </div>


                        <div>
                          <div class="py-lg-5 " >  <input type="checkbox" name="" class="border-0 border-bottom"> <span>Via Electronic Service, in accordance with the Master Service List, pursuant to NEFCR 9, to:</span></div>
                          <input type="text" name="" class="border-0 border-bottom w-100">
                        </div>

                        <div>
                          <div class="py-lg-5 " >  <input type="checkbox" name="" class="border-0 border-bottom"> <span>Via Facsimile and/or Email Pursuant to the Consent of Service by Electronic Means on file</span></div>
                          <input type="text" name="" class="border-0 border-bottom w-100">
                        </div>
                        <div >
                            <div class="py-lg-5">herein to: <input type="text" name="" class="border-0  w-75 border-bottom responsive_input" style="max-width: 91% !important;"> </div>
                        </div>
                        <div>
                            <div><span>Executed on the </span> <input type="text" class="border-0 border-bottom responsive_input" style="max-width:100px !important"> <span>day of </span>  <input type="text" class="border-0 border-bottom" style="max-width:250px !important"> <span>, 20</span> <input type="text" class="border-0 border-bottom" style="max-width:50px !important"> .</div>
                        </div>


                        @include('layouts.footer14', ['page' => 8])

                    </div>
                </section>





            </form>
        </div>
    </div>

</body>

</html>
