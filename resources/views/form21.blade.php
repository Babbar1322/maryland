{{-- 1352FA_Financial_Declaration.pdf --}}

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
            height : 100% !important;
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

        input[type='checkbox'] {
            accent-color: #8c8a8a !important;
        }

        .footer_field:focus-visible {
            outline: none !important;
            border-bottom: 2px solid black !important;
        }

        .footer_field:focus {
            outline: none !important;
            border-bottom: 2px solid black !important;
        }

        .footer_field {
            outline: none !important;
            border-bottom: 2px solid black !important;
        }

        input:focus-visible {
            outline: none !important;
            border-bottom: 2px solid black !important;
        }
        .top_text {
            width: 50% !important;
            font-size: 21px;
        }

        .footer_padding {
            padding-top: 400px !important;
        }

        @media screen and (max-width : 768px) {

            .d_sm_block {
                display: block !important;
                overflow: hidden !important;
            }

            .small_text {
                height: auto !important;
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
        @media screen and (max-width : 1600px) {
            .d_sm_block {
                display: block !important;
            }
            .responsive_input {
                width: 100% !important;
            }
        }
        input[type='radio'] {
            accent-color: #8c8a8a !important;
        }
    </style>
</head>
 <body>
    <div class="container-fluid py-1 py-lg-3">
        <div class="container bg_color p-lg-3 p-1  ">
            <form action="{{ route('form21.submit') }}" method="post">
                @csrf

                <section class="section_area  row page1 bg-white pt-5 p-lg-5 pe-2 pe-lg-5 p-lg-3 m-3 mt-4  pt-lg-5 pt-4"
                    id="first_section">

                    <div class="col-lg-10 mx-auto">
                        @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show">{{ session('success') }} <button
                                type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                        <div class="row pt-lg-5 align-items-end border-bottom">
                            <div class="col-lg-8">
                                <div class="">
                                    <div class="small_text d-flex d_sm_block">Petitioner/Joint Petitioner A:   <input type="text" name="1pjp_a"
                                        class=" border-none responsive_input border-0 border-bottom border-dotted shadow-none"></div>

                                </div>
                                <div class="pb-3">
                                    <div class="small_text d-flex d_sm_block">Respondent/Joint Petitioner B:   <input type="text" name="1rjp_b"
                                        class=" border-none responsive_input border-0 border-bottom border-dotted shadow-none"></div>

                                </div>
                                <div class="ps-lg-3 border-end border-dark">
                                    <div class="fw-bold">This form is available in Spanish.</div>
                                    <div class="fw-bold overflow-auto" >

                                        <a href="https://www.wicourts.gov/forms1/circuit/index.htm"  >https://www.wicourts.gov/forms1/circuit/index.htm</a>
                                    </div>
                                    <div class="fw-bold">(Este formulario está disponible en español.)</div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-bordered border-dark">
                                        <tbody>
                                            <tr>
                                                <td class="w-50">Enter the name of the county in which this case is filed.</td>
                                                <td><div class="small_text">STATE OF WISCONSIN, CIRCUIT COURT,</div> <input type="text" name="noc1"  class="border-0 border-bottom"> COUNTY</td>
                                            </tr>
                                            <tr>
                                                <td>Enter the name of the Petitioner/Joint Petitioner A</td>
                                                <td rowspan="4">
                                                    <div>Petitioner/Joint Petitioner A</div>
                                                    <div><input type="text" name="pjp_a" class="border-0 border-bottom"> </div>
                                                    <div class="small_text">Name (First, Middle and Last)</div>
                                                    <div>and</div>
                                                    <div>Respondent/Joint Petitioner B</div>
                                                    <div><input type="text" name="rjp_b" class="border-0 border-bottom"> </div>
                                                    <div class="small_text pb-lg-5">Name (First, Middle and Last)</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="small_text">On the far right, check  Petitioner/Joint Petitioner A or Respondent/Joint Petitioner B.</td>
                                            </tr>
                                            <tr>
                                                <td class="small_text">Enter the name of the Respondent/Joint Petitioner B.</td>
                                            </tr>
                                            <tr>
                                                <td class="small_text">Enter the case number.
                                                <div><input type="text" name="case_number1" class="border-0  "> </div>
                                            </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>


                            </div>
                            <div class="col-lg-4 mx-auto border-top border-dark pb-4">
                                <div>Financial Disclosure Statement of</div>
                                <div><input type="checkbox" name="fd_pjp_checkbox" Value="Petitioner" id=""> Petitioner/Joint Petitioner A</div>
                                <div><input type="checkbox" name="fd_rjpcheckbox" Value="Respondent" id=""> Respondent/Joint Petitioner B</div>
                                <div >Case No: <input type="text" class="border-0 border-bottom responsive_input" name="case_number2" id=""></div>
                            </div>
                        </div>

                        <div class="ps-2">
                            This form must be filed with the court within the time period set by the court but no later than 90 DAYS after the service
                            of the <b>Summons</b> and <b>Petition</b> on the Respondent/Joint Petitioner B or the filing of a Joint Petition. Failure by either
                            party to complete and file this form or attachments as required will authorize the court to accept the statement of the
                            other party as the basis for its decisions. <b>Deliberate failure to provide complete disclosure is perjury.</b>
                        </div>
                        <div><span class="me-3">1.</span> PROOF OF INCOME</div>
                        <div class="ms-lg-4">
                            <ul>
                                <li>Attach a statement reflecting income earned to date for the current year.</li>
                                <li>Attach most recent W-2 Statement.</li>
                            </ul>
                        </div>
                        <div><span class="me-3">2.</span>GENERAL INFORMATION</div>
                        <div class="row mt-1">
                            <div class="col-lg-2">Name</div>
                            <div class="col-lg-10 d-flex d_sm_block">
                                 <input type="text" min="0" name="gi_name" class="border-0 p-0 m-0 border-bottom footer_field w-100">
                            </div>
                        </div>
                        <div class="row mt-1">
                            <div class="col-lg-2">Address</div>
                            <div class="col-lg-10 d-flex d_sm_block">
                                 <input type="text" min="0" name="gi_address1" class="border-0 p-0 m-0 border-bottom footer_field w-100">
                            </div>
                        </div>
                        <div class="row mt-1">
                            <div class="col-lg-2">Address</div>
                            <div class="col-lg-10 d-flex d_sm_block">
                                 <input type="text" min="0" name="gi_address2" class="border-0 p-0 m-0 border-bottom footer_field w-100">
                            </div>
                        </div>
                        <div class="row mt-1">
                            <div class="col-lg-2">City</div>
                            <div class="col-lg-10 d-flex d_sm_block">
                                 <div>
                                     <input type="text" min="0" name="gi_city1" class="border-0 p-0 m-0 border-bottom footer_field w-100 responsive_input" style="min-width: 241px !important"></div>State
                                     <div><input type="text" min="0" name="gi_state1" class="border-0 p-0 m-0 border-bottom footer_field w-100 responsive_input" style="min-width: 241px !important"></div>Zip
                                     <div><input type="text" min="0" name="gi_zip1" class="border-0 p-0 m-0 border-bottom footer_field w-100 responsive_input" style="min-width: 241px !important"></div>
                            </div>
                        </div>
                        <div class="row mt-1">
                            <div class="col-lg-2 small_text">Phone <span>[Day]</span></div>
                            <div class="col-lg-10 d-flex d_sm_block">
                                 <div> <input type="text" min="0" name="gi_phone_day1" class="border-0 p-0 m-0 border-bottom footer_field w-100 responsive_input"  style="min-width :328px !important"></div>Phone [Evening]
                                 <div><input type="text" min="0" name="gi_phone_evening1" class="border-0 p-0 m-0 border-bottom footer_field w-100 responsive_input"  style="min-width:328px !important"></div>
                            </div>
                        </div>
                        <div class="row mt-1">
                            <div class="col-lg-2 small_text">Alternative Phone</div>
                            <div class="col-lg-10 d-flex d_sm_block">
                                 <div> <input type="text" min="0" name="gi_alternative_phone1" class="border-0 p-0 m-0 border-bottom footer_field w-100 responsive_input" style="min-width:  300px !important"></div>Social Security Number
                                 <div><input type="text" min="0" name="gi_ssnumber1" class="border-0 p-0 m-0 border-bottom footer_field w-100 responsive_input" style="min-width:  300px !important"></div>
                            </div>
                        </div>
                        <div class="row mt-1">
                            <div class="col-lg-2 small_text">Occupation</div>
                            <div class="col-lg-10 d-flex d_sm_block">
                                   <input type="text" min="0" name="gi_occupation1" class="border-0 p-0 m-0 border-bottom footer_field w-100">
                            </div>
                        </div>
                        <div class="row mt-1">
                            <div class="col-lg-2 small_text fw-bold">Employer</div>
                            <div class="col-lg-10 d-flex d_sm_block">
                                   <input type="text" min="0" name="gi_employer1" class="border-0 p-0 m-0 border-bottom footer_field w-100">
                            </div>
                        </div>
                        <div class="row mt-1">
                            <div class="col-lg-2 small_text fw-bold">Address</div>
                            <div class="col-lg-10 d-flex d_sm_block">
                                   <input type="text" min="0" name="gi_address3" class="border-0 p-0 m-0 border-bottom footer_field w-100">
                            </div>
                        </div>
                        <div class="row mt-1">
                            <div class="col-lg-2 small_text fw-bold">Address</div>
                            <div class="col-lg-10 d-flex d_sm_block">
                                   <input type="text" min="0" name="gi_address4" class="border-0 p-0 m-0 border-bottom footer_field w-100">
                            </div>
                        </div>
                        <div class="row mt-1">
                            <div class="col-lg-2">City</div>
                            <div class="col-lg-10 d-flex d_sm_block">
                                 {{-- <div> <input type="text" min="0" name="mgs_wages" class="border-0 p-0 m-0 border-bottom footer_field w-100"></div>State <div><input type="text" min="0" name="mgs_wages" class="border-0 p-0 m-0 border-bottom footer_field w-100"></div>Zip<div><input type="text" min="0" name="mgs_wages" class="border-0 p-0 m-0 border-bottom footer_field w-100"></div> --}}
                                 <div>
                                 <input type="text" min="0" name="git_city2" class="border-0 p-0 m-0 border-bottom footer_field w-100 responsive_input" style="min-width: 241px !important"></div>State
                                 <div><input type="text" min="0" name="gi_state2" class="border-0 p-0 m-0 border-bottom footer_field w-100 responsive_input" style="min-width: 241px !important"></div>Zip
                                 <div><input type="text" min="0" name="gi_zip2" class="border-0 p-0 m-0 border-bottom footer_field w-100 responsive_input" style="min-width: 241px   !important"></div>

                            </div>

                        </div>

                        <div class="row mt-1">
                            <div class="col-lg-2 small_text">Phone </div>
                            <div class="col-lg-10 d-flex d_sm_block">
                                 <div> <input type="text" min="0" name="gi_phone2" class="border-0 p-0 m-0 border-bottom footer_field w-100 responsive_input" style="min-width:  381px !important"></div>Fax
                                 <div><input type="text" min="0" name="gi_fax1" class="border-0 p-0 m-0 border-bottom footer_field w-100 responsive_input"  style="min-width:   381px !important"> </div>
                            </div>
                        </div>
                        <div class="row mt-1">
                            <div class="col-lg-2 small_text">Payroll Office</div>
                            <div class="col-lg-10 d-flex  ">
                                 <div> <input type="checkbox" min="0" name="gi_payroll_office1" class="border-0 p-0 m-0 border-bottom footer_field w-100"></div> <div class="fw-bold ps-3">  Same as employer</div>
                            </div>
                        </div>

                        <div class="row mt-1">
                            <div class="col-lg-2 small_text fw-bold">Address</div>
                            <div class="col-lg-10 d-flex d_sm_block">
                                   <input type="text" min="0" name="gi_address5" class="border-0 p-0 m-0 border-bottom footer_field w-100">
                            </div>
                        </div>
                        <div class="row mt-1">
                            <div class="col-lg-2 small_text fw-bold">Address</div>
                            <div class="col-lg-10 d-flex d_sm_block">
                                   <input type="text" min="0" name="gi_address6" class="border-0 p-0 m-0 border-bottom footer_field w-100">
                            </div>
                        </div>
                        <div class="row mt-1">
                            <div class="col-lg-2">City</div>
                            <div class="col-lg-10 d-flex d_sm_block">
                                 <div> <input type="text" min="0" name="git_city3" class="border-0 p-0 m-0 border-bottom footer_field w-100 responsive_input" style="min-width: 241px !important"></div>State
                                 <div><input type="text" min="0" name="gi_state3" class="border-0 p-0 m-0 border-bottom footer_field w-100 responsive_input" style="min-width: 241px !important"></div>Zip
                                 <div><input type="text" min="0" name="gi_zip3" class="border-0 p-0 m-0 border-bottom footer_field w-100 responsive_input" style="min-width: 241px !important"></div>
                            </div>
                        </div>

                        <div class="row mt-1">
                            <div class="col-lg-2 small_text">Phone </div>
                            <div class="col-lg-10 d-flex d_sm_block">
                                 <div> <input type="text" min="0" name="gi_phone3" class="border-0 p-0 m-0 border-bottom footer_field w-100 responsive_input" style="min-width: 381px !important"></div>Fax
                                 <div><input type="text" min="0" name="gi_fax2" class="border-0 p-0 m-0 border-bottom footer_field w-100 responsive_input" style="min-width:  381px !important"></div>
                            </div>
                        </div>

                        <div><span class="me-3">3.</span>MEMBERS OF YOUR HOUSEHOLD</div>
                        <div class="ms-lg-3">
                            <b>Enter the name and relationship </b> of all people living in your household. <b>Check yes or no </b> to identify if they contribute to payment of household expenses.

                        </div>
                        <div class="ms-lg-3">
                            <input type="checkbox" name="i_alone" id=""> I live alone.
                        </div>

                        <div class="ms-lg-3 table-responsive">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <td rowspan="2" class=""></td>
                                        <td rowspan="2" class=" text-center bg-secondary">Name</td>
                                        <td rowspan="2" class=" text-center bg-secondary">Relationship</td>
                                        <td colspan="2" class="w-50 text-center bg-secondary"> This person helps pay expenses</td>
                                    </tr>
                                    <tr>
                                        <td class=" text-center bg-secondary">Yes</td>
                                        <td class=" text-center bg-secondary">No</td>
                                    </tr>
                                    <tr>
                                        <td>1.</td>
                                        <td><input type="text" name="my_name1" class="border-0 form-control"></td>
                                        <td><input type="text" name="my_relationship1" class="border-0 form-control"></td>
                                        <td class="mx-auto text-center"><input type="radio" name="my_help1" value="Yes" class=""></td>
                                        <td class="mx-auto text-center"><input type="radio" name="my_help1" value="No" class=""></td>
                                    </tr>
                                    <tr>
                                        <td>2.</td>
                                        <td><input type="text" name="my_name2" class="border-0 form-control"></td>
                                        <td><input type="text" name="my_relationship2" class="border-0 form-control"></td>
                                        <td class="mx-auto text-center"><input type="radio" name="ei_doh2" value="Yes" class=""></td>
                                        <td class="mx-auto text-center"><input type="radio" name="ei_doh2" value="No" class=""></td>
                                    </tr>
                                    <tr>
                                        <td>3.</td>
                                        <td><input type="text" name="my_name3" class="border-0 form-control"></td>
                                        <td><input type="text" name="my_relationship3" class="border-0 form-control"></td>
                                        <td class="mx-auto text-center"><input type="radio" name="ei_doh3" value="Yes" class=""></td>
                                        <td class="mx-auto text-center"><input type="radio" name="ei_doh3" value="No" class=""></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        @include('layouts.footer16', ['page' => 1])
                    </div>
                </section>
                <section class="section_area row page1 bg-white pt-5 p-lg-5 pe-2 pe-lg-5 p-lg-3 m-3 mt-4  pt-lg-5 pt-4">
                    <div class="col-lg-10 mx-auto">
                        <div class="">
                            <div class="small_text d-flex d_sm_block">Petitioner/Joint Petitioner A:   <input type="text" name="2pjp_a" class=" border-none responsive_input border-0 border-bottom border-dotted shadow-none"></div>
                        </div>
                        <div class="pb-3">
                            <div class="small_text d-flex d_sm_block">Respondent/Joint Petitioner B:   <input type="text" name="2rjp_b" class=" border-none responsive_input border-0 border-bottom border-dotted shadow-none"></div>
                        </div>
                        <div class="ms-lg-3 table-responsive">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr class="invisible">
                                        <td   class=""></td>
                                        <td   class=" text-center bg-secondary">Name</td>
                                        <td   class=" text-center bg-secondary">Relationship</td>
                                        <td colspan="2" class="w-50 text-center bg-secondary"> This person helps pay expenses</td>
                                    </tr>
                                    <tr>
                                        <td>4.</td>
                                        <td><input type="text" name="my_name4" class="border-0 form-control"></td>
                                        <td><input type="text" name="my_relationship4" class="border-0 form-control"></td>
                                        <td class="mx-auto text-center"><input type="radio" name="my_help4" value="Yes"  class=""></td>
                                        <td class="mx-auto text-center"><input type="radio" name="my_help4" value="No"  class=""></td>
                                    </tr>
                                    <tr>
                                        <td>5.</td>
                                        <td><input type="text" name="my_name5" class="border-0 form-control"></td>
                                        <td><input type="text" name="my_relationship5" class="border-0 form-control"></td>
                                        <td class="mx-auto text-center"><input type="radio" name="my_help5" value="Yes"  class=""></td>
                                        <td class="mx-auto text-center"><input type="radio" name="my_help5" value="No"  class=""></td>
                                    </tr>
                                    <tr>
                                        <td>6.</td>
                                        <td><input type="text" name="my_name6" class="border-0 form-control"></td>
                                        <td><input type="text" name="my_relationship6" class="border-0 form-control"></td>
                                        <td class="mx-auto text-center"><input type="radio" name="my_help6" value="Yes"  class=""></td>
                                        <td class="mx-auto text-center"><input type="radio" name="my_help6" value="No"  class=""></td>
                                    </tr>
                                    <tr>
                                        <td>7.</td>
                                        <td><input type="text" name="my_name7" class="border-0 form-control"></td>
                                        <td><input type="text" name="my_relationship7" class="border-0 form-control"></td>
                                        <td class="mx-auto text-center"><input type="radio" name="my_help7" value="Yes"  class=""></td>
                                        <td class="mx-auto text-center"><input type="radio" name="my_help7" value="No"  class=""></td>
                                    </tr>
                                    <tr>
                                        <td>8.</td>
                                        <td><input type="text" name="my_name8" class="border-0 form-control"></td>
                                        <td><input type="text" name="my_relationship8" class="border-0 form-control"></td>
                                        <td class="mx-auto text-center"><input type="radio" name="my_help8" value="Yes"  class=""></td>
                                        <td class="mx-auto text-center"><input type="radio" name="my_help8" value="No"  class=""></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                            <div><span class="me-lg-3 fw-bold">4.</span>MONTHLY INCOME</div>
                            <div class="ms-lg-4"><b>Income</b> from wages / salary is received: (check one)</div>
                            <div class="fw-bold text-center">To calculate monthly gross income use the multiplier shown:</div>
                            <div><input type="checkbox" name="mi_weekly_checkbox" id=""> weekly -multiply weekly income by 4.33 <input type="checkbox" name="mi_other_weekly_checkbox" id=""> every other week (bi-weekly) multiply bi-weekly income by 2.17</div>
                            <div><input type="checkbox" name="mi_monthly_checkbox" id=""> monthly <input type="checkbox" name="mi_monthly_multiply_checkbox" id=""> twice a month-multiply semi-monthly income by 2</div>
<div class="table-responsive">
                            <table class="table table-bordered border-dark">
                                <tbody>
                                    <tr> <td colspan="3" class="bg-secondary">MONTHLY GROSS INCOME</td>  </tr>
                                    <tr>
                                        <td>1.</td>
                                        <td>Gross <b>monthly</b> income (before taxes and deductions) from salary and wages, including commissions, allowances and overtime. (See above how to calculate.)</td>
                                        <td><input type="text" name="mgi_gmi" class="border-0 form-control"></td>
                                    </tr>
                                    <tr>
                                        <td>2.</td>
                                        <td>Pensions and retirement funds received</td>
                                        <td><input type="text" name="mgi_par" class="border-0 form-control"></td>
                                    </tr>
                                    <tr>
                                        <td>3.</td>
                                        <td>Social Security benefits received</td>
                                        <td><input type="text" name="mgi_ssb" class="border-0 form-control"></td>
                                    </tr>
                                    <tr>
                                        <td>4.</td>
                                        <td>Disability and Unemployment Insurance received</td>
                                        <td><input type="text" name="mgi_daui" class="border-0 form-control"></td>
                                    </tr>
                                    <tr>
                                        <td>5.</td>
                                        <td>Public Assistance Funds received    </td>
                                        <td><input type="text" name="mgi_paf" class="border-0 form-control"></td>
                                    </tr>
                                    <tr>
                                        <td>6.</td>
                                        <td>Interest and Dividends received</td>
                                        <td><input type="text" name="mgi_iad" class="border-0 form-control"></td>
                                    </tr>
                                    <tr>
                                        <td>7.</td>
                                        <td>Child Support and maintenance (spousal support) received from any prior
                                            marriage/relationship</td>
                                        <td><input type="text" name="mgi_csam" class="border-0 form-control"></td>
                                    </tr>
                                    <tr>
                                        <td>8.</td>
                                        <td>Rental payments received (from property you rent to others)</td>
                                        <td><input type="text" name="mgi_rps" class="border-0 form-control"></td>
                                    </tr>
                                    <tr>
                                        <td>9.</td>
                                        <td>Bonuses received</td>
                                        <td><input type="text" name="mgi_br" class="border-0 form-control"></td>
                                    </tr>
                                    <tr>
                                        <td>10.</td>
                                        <td>Other sources of income received: (please specify)</td>
                                        <td><input type="text" name="mgi_osi1" class="border-0 form-control"></td>
                                    </tr>
                                    <tr>
                                        <td>11.</td>
                                        <td><input type="text" name="mgi_osi2" class="border-0 form-control"></td>
                                        <td><input type="text" name="mgi_osi3" class="border-0 form-control"></td>
                                    </tr>
                                    <tr>
                                        <td>12.</td>
                                         <td><input type="text" name="mgi_osi4" class="border-0 form-control"></td>
                                        <td><input type="text" name="mgi_osi5" class="border-0 form-control"></td>
                                    </tr>
                                    <tr>
                                        <td>13.</td>
                                         <td><input type="text" name="mgi_osi6" class="border-0 form-control"></td>
                                         <td><input type="text" name="mgi_osi7" class="border-0 form-control"></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                         <td class="text-end">Total Gross Income (add lines 1-12)</td>
                                         <td><input type="text" name="mgi_tgi" class="border-0 form-control"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="3" class="bg-secondary">MONTHLY DEDUCTIONS</td>
                                    </tr>
                                    <tr>
                                        <td>14.</td>
                                        <td>Number of tax exemptions claimed</td>
                                        <td><input type="text" name="md_mte" class="border-0 form-control"></td>
                                    </tr>
                                    <tr>
                                        <td>15.</td>
                                        <td>Monthly federal income tax withheld</td>
                                        <td><input type="text" name="md_mfi" class="border-0 form-control"></td>
                                    </tr>
                                    <tr>
                                        <td>16.</td>
                                        <td>Monthly state income tax withheld</td>
                                        <td><input type="text" name="md_msi" class="border-0 form-control"></td>
                                    </tr>
                                    <tr>
                                        <td>17.</td>
                                        <td>Social Security</td>
                                        <td><input type="text" name="md_ss" class="border-0 form-control"></td>
                                    </tr>
                                    <tr>
                                        <td>18.</td>
                                        <td>Medicare</td>
                                        <td><input type="text" name="md_medicare" class="border-0 form-control"></td>
                                    </tr>
                                    <tr>
                                        <td>19.</td>
                                        <td>Medical insurance</td>
                                        <td><input type="text" name="md_mi" class="border-0 form-control"></td>
                                    </tr>
                                    <tr>
                                        <td>20.</td>
                                        <td>Other insurances</td>
                                        <td><input type="text" name="md_other" class="border-0 form-control"></td>
                                    </tr>
                                    <tr>
                                        <td>21.</td>
                                        <td>Union or other dues</td>
                                        <td><input type="text" name="md_uod" class="border-0 form-control"></td>
                                    </tr>
                                    <tr>
                                        <td>22.</td>
                                        <td>Retirement or pension fund</td>
                                        <td><input type="text" name="md_rpf" class="border-0 form-control"></td>
                                    </tr>
                                    <tr>
                                        <td>23.</td>
                                        <td>Savings plan</td>
                                        <td><input type="text" name="md_sp" class="border-0 form-control"></td>
                                    </tr>
                                    <tr>
                                        <td>24.</td>
                                        <td>Credit union</td>
                                        <td><input type="text" name="md_cu" class="border-0 form-control"></td>
                                    </tr>
                                    <tr>
                                        <td>25.</td>
                                         <td>Child support or spousal support payments</td>
                                        <td><input type="text" name="md_css" class="border-0 form-control"></td>
                                    </tr>
                                    <tr>
                                        <td>26.</td>
                                         <td>Other deductions: (<span  class="small_text">please specify</span>)</td>
                                         <td><input type="text" name="md_other1" class="border-0 form-control"></td>
                                    </tr>
                                    <tr>
                                        <td>27.</td>
                                         <td><input type="text" name="md_other2" class="border-0 form-control"></td>
                                         <td><input type="text" name="md_other3" class="border-0 form-control"></td>
                                    </tr>
                                    <tr>
                                        <td>28</td>
                                         <td class="text-end">Total Gross Income (add lines 1-12)</td>
                                         <td><input type="text" name="md_tgi" class="border-0 form-control"></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                         <td class="text-end h5">MONTHLY NET INCOME (<span class="small_text">subtract line 28 from line 13</span>)</td>
                                         <td class="w-25"><input type="text" name="md_mni" class="border-0 form-control"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div><span class="me-lg-3 fw-bold">5.</span>ANTICIPATED MONTHLY EXPENSES</div>

                        <div class="pt-lg-2 table-responsive">
                            <table class="table table-bordered border-dark">
                                <tbody>
                                    <tr>
                                        <td colspan="3" class="bg-secondary">My Monthly Expenses</td>
                                    </tr>
                                    <tr>
                                        <td>1.</td>
                                        <td>Rent or mortgage payment (primary residence)</td>
                                        <td class="w-25"><input type="text" name="mme_rmp" class="border-0 form-control"></td>
                                    </tr>
                                    <tr>
                                        <td>2.</td>
                                        <td>Real Estate Property taxes (residence)</td>
                                        <td><input type="text" name="mne_rept" class="border-0 form-control"></td>
                                    </tr>
                                    <tr>
                                        <td>3.</td>
                                        <td>Repairs and maintenance (including maintenance of appliances and furnishings)</td>
                                        <td><input type="text" name="mne_ram" class="border-0 form-control"></td>
                                    </tr>
                                    <tr>
                                        <td>4.</td>
                                        <td>Food (include eating out) and household supplies</td>
                                        <td><input type="text" name="mne_fie" class="border-0 form-control"></td>
                                    </tr>
                                    <tr>
                                        <td>5.</td>
                                        <td>Utilities (electricity, heat, water, sewage, trash)  </td>
                                        <td><input type="text" name="mne_ueh" class="border-0 form-control"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        @include('layouts.footer16', ['page' => 2])
                    {{-- </div> --}}
                    </div>
                </section>
                <section class="section_area  row page1 bg-white pt-5 p-lg-5 pe-2 pe-lg-5 p-lg-3 m-3 mt-4  pt-lg-5 pt-4" >
                    <div class="col-lg-10 mx-auto">
                        <div class="border-bottom">
                            <div class="">
                                <div class="small_text d-flex d_sm_block">Petitioner/Joint Petitioner A:
                                      <input type="text" name="3pjp_a"
                                    class=" border-none responsive_input border-0 border-bottom border-dotted shadow-none"></div>

                            </div>
                            <div class="pb-3">
                                <div class="small_text d-flex d_sm_block">Respondent/Joint Petitioner B:   <input type="text" name="3rjp_b"
                                    class=" border-none responsive_input border-0 border-bottom border-dotted shadow-none"></div>

                            </div>

                         </div>
                        <div class="pt-lg-2 ms-lg-3 table-responsive">
                            <table class="table table-bordered border-dark">
                                <tbody>
                                    {{-- <tr>
                                        <td colspan="3" class="bg-secondary">My Monthly Expenses</td>
                                    </tr> --}}
                                    <tr>
                                        <td>6.</td>
                                        <td>Telephone (local, long distance & cellular)</td>
                                        <td class="w-25"><input type="text" name="nme_telephone" class="border-0 form-control"></td>
                                    </tr>
                                    <tr>
                                        <td>7.</td>
                                        <td>Cable and Internet Services</td>
                                        <td><input type="text" name="mne_cais" class="border-0 form-control"></td>
                                    </tr>
                                    <tr>
                                        <td>8.</td>
                                        <td>Laundry and dry cleaning</td>
                                        <td><input type="text" name="mne_ldc" class="border-0 form-control"></td>
                                    </tr>
                                    <tr>
                                        <td>9.</td>
                                        <td>Clothing and shoes</td>
                                        <td><input type="text" name="mne_cas" class="border-0 form-control"></td>
                                    </tr>
                                    <tr>
                                        <td>10.</td>
                                        <td>Medical, dental and prescription drug expenses (not covered by insurance)</td>
                                        <td><input type="text" name="mne_mdp" class="border-0 form-control"></td>
                                    </tr>
                                    <tr>
                                        <td>11.</td>
                                        <td>Insurance (life, health, accident, auto, liability, disability, homeowner’s or renter’s-excluding
                                            insurance that is paid through payroll deductions)</td>
                                        <td><input type="text" name="mne_ilh" class="border-0 form-control"></td>
                                    </tr>
                                    <tr>
                                        <td>12.</td>
                                        <td>Childcare (babysitting and day care)</td>
                                        <td><input type="text" name="mne_cbdc" class="border-0 form-control"></td>
                                    </tr>
                                    <tr>
                                        <td>13.</td>
                                        <td>Child support or spousal support payments (due to previous marriage or relationship)
                                            (Exclude payments made through payroll deductions)</td>
                                        <td><input type="text" name="mne_css" class="border-0 form-control"></td>
                                    </tr>
                                    <tr>
                                        <td>14.</td>
                                        <td>School expenses (child and adult education)</td>
                                        <td><input type="text" name="mne_se" class="border-0 form-control"></td>
                                    </tr>
                                    <tr>
                                        <td>15.</td>
                                        <td>Entertainment (include clubs, social obligations, travel, recreation)</td>
                                        <td><input type="text" name="mne_eic" class="border-0 form-control"></td>
                                    </tr>
                                    <tr>
                                        <td>16.</td>
                                        <td>Incidentals (grooming, tobacco, alcohol, gifts, holidays and special occasions)</td>
                                        <td><input type="text" name="mne_igt" class="border-0 form-control"></td>
                                    </tr>
                                    <tr>
                                        <td>17.</td>
                                        <td>Transportation (other than automobile)</td>
                                        <td><input type="text" name="mne_tot" class="border-0 form-control"></td>
                                    </tr>
                                    <tr>
                                        <td>18.</td>
                                        <td>Auto payments (loans/leases)</td>
                                        <td><input type="text" name="mne_ap" class="border-0 form-control"></td>
                                    </tr>
                                    <tr>
                                        <td>19.</td>
                                        <td>Auto expenses (gas, oil, repairs, maintenance)</td>
                                        <td><input type="text" name="mne_ae" class="border-0 form-control"></td>
                                    </tr>
                                    <tr>
                                        <td>20.</td>
                                        <td>Newspapers, magazines, books</td>
                                        <td><input type="text" name="mne_nmb" class="border-0 form-control"></td>
                                    </tr>
                                    <tr>
                                        <td>21.</td>
                                        <td>Care and maintenance of pets (food, vet, grooming)</td>
                                        <td><input type="text" name="mne_cam" class="border-0 form-control"></td>
                                    </tr>
                                    <tr>
                                        <td>22.</td>
                                        <td>Payments to any dependents not living in your home and not included in a category above
                                            (including college age children)</td>
                                        <td><input type="text" name="mne_pad" class="border-0 form-control"></td>
                                    </tr>
                                    <tr>
                                        <td>23.</td>
                                        <td>Hobbies</td>
                                        <td><input type="text" name="mne_hobbies" class="border-0 form-control"></td>
                                    </tr>
                                    <tr>
                                        <td>24.</td>
                                        <td>Other taxes than those listed above (exclude payroll deductions)</td>
                                        <td><input type="text" name="mne_ott" class="border-0 form-control"></td>
                                    </tr>
                                    <tr>
                                        <td>25.</td>
                                        <td>Other expenses (include expenses of other real properties owned, professional services
                                            such as counseling and tax/legal advice, etc)</td>
                                        <td><input type="text" name="mne_oe" class="border-0 form-control"></td>
                                    </tr>
                                    <tr>
                                        <td> </td>
                                        <td>Other Monthly installment payments:</td>
                                        <td><input type="text" name="mne_omip" class="border-0 form-control"></td>
                                    </tr>
                                    <tr>
                                        <td>26.</td>
                                        <td>Mortgage (other than primary mortgage)</td>
                                        <td><input type="text" name="mne_mortgage" class="border-0 form-control"></td>
                                    </tr>
                                    <tr>
                                        <td>27.</td>
                                        <td>Other vehicle payments</td>
                                        <td><input type="text" name="mne_ovp" class="border-0 form-control"></td>
                                    </tr>
                                    <tr>
                                        <td>28.</td>
                                        <td>Credit card debt (total minimum monthly payments)</td>
                                        <td><input type="text" name="mne_ccd" class="border-0 form-control"></td>
                                    </tr>
                                    <tr>
                                        <td>29.</td>
                                        <td>Court ordered obligations</td>
                                        <td><input type="text" name="mne_coo" class="border-0 form-control"></td>
                                    </tr>
                                    <tr>
                                        <td>30.</td>
                                        <td>Student loans</td>
                                        <td><input type="text" name="mne_sl" class="border-0 form-control"></td>
                                    </tr>
                                    <tr>
                                        <td>31.</td>
                                        <td>Personal loans</td>
                                        <td><input type="text" name="mne_pl1" class="border-0 form-control"></td>
                                    </tr>
                                    <tr>
                                          <td colspan="2"><input type="text" name="mne_pl2" class="border-0 form-control"></td>
                                        <td><input type="text" name="mne_pl3" class="border-0 form-control"></td>
                                    </tr>
                                    <tr>
                                          <td colspan="2" class="text-end pe-lg-3">TOTAL MONTHLY EXPENSES (<span class="small_text">Add lines 1-31</span>)</td>
                                        <td><input type="text" name="mne_tme" class="border-0 form-control"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        {{-- <div><span class=" fw-bold">6.</span><b>ASSETS:</b> List ALL assets that you own individually and together with the other party without regard to

                            how they have been or will be divided later</div> --}}
                            <div class="row">
                                <div class="col-lg-2">6. <b>ASSETS:</b></div>
                                <div class="col-lg-10">  List ALL assets that you own individually and together with the other party without regard to how they have been or will be divided later</div>
                            </div>


                            <div class="ms-lg-3 small_text">If you do not have assets in an asset category, write “none” under the heading and enter “zero” in the
                                estimated value column. If you need more space, please attach additional sheets.</div>

                                <div class="table-responsive">
                                    <table class="table table-bordered border-dark">
                                        <tbody>
                                            <tr>
                                                <td class="small_text px-1  ">
                                                    <div class=> A = Joint Petitioner A</div>
                                                    <div class="d-flex justify-content-between">
                                                        <div class=>B = Joint Petitioner B</div>
                                                        <div class="ps-4">T = Together</div>
                                                    </div>
                                                </td>
                                                <td class="text-center bg-secondary small_text" colspan="3">wnership or Title Held by</td>
                                                <td class="text-center bg-secondary small_text" colspan="3">Current Possession</td>
                                                <td class="text-center bg-secondary small_text">Amount  Owed</td>
                                                <td class="text-center bg-secondary small_text">Estimated Value Today</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center bg-secondary small_text">Household Items</td>
                                                <td class="text-center bg-secondary small_text">A</td>
                                                <td class="text-center bg-secondary small_text">B</td>
                                                <td class="text-center bg-secondary small_text">T</td>
                                                <td class="text-center bg-secondary small_text">A</td>
                                                <td class="text-center bg-secondary small_text">B</td>
                                                <td class="text-center bg-secondary small_text">T</td>
                                                <td class="text-center bg-secondary small_text"></td>
                                                <td class="text-center   small_text"></td>
                                            </tr>

                                            <tr>
                                                <td>Household furniture & accessories</td>
                                                <td class="text-center"><input type="checkbox" name="wa_a1" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="wa_b1" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="wa_t1" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="ct_a1" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="ct_b1" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="ct_t1" value="Yes"></td>
                                                <td><input type="text" name="asset_ao1" class="border-0 form-control"></td>
                                                <td><input type="text" name="asset_evt1" class="border-0 form-control"></td>

                                            </tr>

                                            <tr>
                                                <td>Household appliances</td>
                                                <td class="text-center"><input type="checkbox" name="wa_a2" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="wa_b2" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="wa_t2" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="ct_a2" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="ct_b2" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="ct_t2" value="Yes"></td>
                                                <td><input type="text" name="asset_ao2" class="border-0 form-control"></td>
                                                <td><input type="text" name="asset_evt2" class="border-0 form-control"></td>

                                            </tr>

                                            <tr>
                                                <td>Kitchen equipment</td>
                                                <td class="text-center"><input type="checkbox" name="wa_a3" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="wa_b3" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="wa_t3" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="ct_a3" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="ct_b3" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="ct_t3" value="Yes"></td>
                                                <td><input type="text" name="asset_ao3" class="border-0 form-control"></td>
                                                <td><input type="text" name="asset_evt3" class="border-0 form-control"></td>
                                            </tr>

                                            <tr>
                                                <td>China, silver, crystal</td>
                                                <td class="text-center"><input type="checkbox" name="wa_a4" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="wa_b4" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="wa_t4" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="ct_a4" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="ct_b4" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="ct_t4" value="Yes"></td>
                                                <td><input type="text" name="asset_ao4" class="border-0 form-control"></td>
                                                <td><input type="text" name="asset_evt4" class="border-0 form-control"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                        @include('layouts.footer16', ['page' => 3])
                    </div>

        </section>
                <section class="section_area  row page1 bg-white pt-5 p-lg-5 pe-2 pe-lg-5 p-lg-3 m-3 mt-4  pt-lg-5 pt-4" >
                    <div class="col-lg-10 mx-auto">
                        <div class="border-bottom">
                            <div class="">
                                <div class="small_text d-flex d_sm_block">Petitioner/Joint Petitioner A: <input type="text" name="4pjp_a" class=" border-none responsive_input border-0 border-bottom border-dotted shadow-none"></div>
                            </div>
                            <div class="pb-3">
                                <div class="small_text d-flex d_sm_block">Respondent/Joint Petitioner B: <input type="text" name="4pjp_a" class=" border-none responsive_input border-0 border-bottom border-dotted shadow-none"></div>
                            </div>
                         </div>
                                <div class="table-responsive">
                                    <table class="table table-bordered border-dark">
                                        <tbody>
                                            <tr class="invisible">
                                                <td class="small_text px-1">
                                                    <div class=> A = Joint Petitioner A</div>
                                                    <div class="d-flex justify-content-between">
                                                        <div class=>B = Joint Petitioner B</div>
                                                        <div class="ps-4">T = Together</div>
                                                    </div>
                                                </td>
                                                <td class="text-center bg-secondary small_text" colspan="3">wnership or Title Held by</td>
                                                <td class="text-center bg-secondary small_text" colspan="3">Current Possession</td>
                                                <td class="text-center bg-secondary small_text">Amount  Owed</td>
                                                <td class="text-center bg-secondary small_text">Estimated Value Today</td>
                                            </tr>


                                            <tr>
                                                <td>Jewelry</td>
                                                <td class="text-center"><input type="checkbox" name="wa_a4" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="wa_b4" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="wa_t4" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="ct_a4" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="ct_b4" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="ct_t4" value="Yes"></td>
                                                <td><input type="text" name="asset_ao4" class="border-0 form-control"></td>
                                                <td><input type="text" name="asset_evt4" class="border-0 form-control"></td>

                                            </tr>

                                            <tr>
                                                <td>Clothing</td>
                                                <td class="text-center"><input type="checkbox" name="wa_a5" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="wa_b5" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="wa_t5" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="ct_a5" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="ct_b5" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="ct_t5" value="Yes"></td>
                                                <td><input type="text" name="asset_ao5" class="border-0 form-control"></td>
                                                <td><input type="text" name="asset_evt5" class="border-0 form-control"></td>

                                            </tr>

                                            <tr>
                                                <td>Antiques</td>
                                                <td class="text-center"><input type="checkbox" name="wa_a6" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="wa_b6" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="wa_t6" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="ct_a6" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="ct_b6" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="ct_t6" value="Yes"></td>
                                                <td><input type="text" name="asset_ao6" class="border-0 form-control"></td>
                                                <td><input type="text" name="asset_evt6" class="border-0 form-control"></td>

                                            </tr>

                                            <tr>
                                                <td>Art</td>
                                                <td class="text-center"><input type="checkbox" name="wa_a7" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="wa_b7" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="wa_t7" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="ct_a7" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="ct_b7" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="ct_t7" value="Yes"></td>
                                                <td><input type="text" name="asset_ao7" class="border-0 form-control"></td>
                                                <td><input type="text" name="asset_evt7" class="border-0 form-control"></td>

                                            </tr>
                                            <tr>
                                                <td>Electronic equipment</td>
                                                <td class="text-center"><input type="checkbox" name="wa_a8" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="wa_b8" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="wa_t8" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="ct_a8" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="ct_b8" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="ct_t8" value="Yes"></td>
                                                <td><input type="text" name="asset_ao8" class="border-0 form-control"></td>
                                                <td><input type="text" name="asset_evt8" class="border-0 form-control"></td>

                                            </tr>
                                            <tr>
                                                <td>Sports equipment</td>
                                                <td class="text-center"><input type="checkbox" name="wa_a9" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="wa_b9" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="wa_t9" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="ct_a9" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="ct_b9" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="ct_t9" value="Yes"></td>
                                                <td><input type="text" name="asset_ao9" class="border-0 form-control"></td>
                                                <td><input type="text" name="asset_evt9" class="border-0 form-control"></td>

                                            </tr>
                                            <tr>
                                                <td>Recreational vehicles, boats</td>
                                                <td class="text-center"><input type="checkbox" name="wa_a10" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="wa_b10" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="wa_t10" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="ct_a10" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="ct_b10" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="ct_t10" value="Yes"></td>
                                                <td><input type="text" name="asset_ao10" class="border-0 form-control"></td>
                                                <td><input type="text" name="asset_evt10" class="border-0 form-control"></td>

                                            </tr>
                                            <tr>
                                                <td>Tools</td>
                                                <td class="text-center"><input type="checkbox" name="wa_a11" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="wa_b11" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="wa_t11" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="ct_a11" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="ct_b11" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="ct_t11" value="Yes"></td>
                                                <td><input type="text" name="asset_ao11" class="border-0 form-control"></td>
                                                <td><input type="text" name="asset_evt11" class="border-0 form-control"></td>

                                            </tr>
                                            <tr>
                                                <td>Other:</td>
                                                <td class="text-center"><input type="checkbox" name="wa_a12" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="wa_b12" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="wa_t12" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="ct_a12" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="ct_b12" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="ct_t12" value="Yes"></td>
                                                <td><input type="text" name="asset_ao12" class="border-0 form-control"></td>
                                                <td><input type="text" name="asset_evt12" class="border-0 form-control"></td>

                                            </tr>
                                            <tr>
                                                <td>Other:</td>
                                                <td class="text-center"><input type="checkbox" name="wa_a13" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="wa_b13" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="wa_t13" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="ct_a13" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="ct_b13" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="ct_t13" value="Yes"></td>
                                                <td><input type="text" name="asset_ao13" class="border-0 form-control"></td>
                                                <td><input type="text" name="asset_evt13" class="border-0 form-control"></td>

                                            </tr>
                                            <tr>
                                                <td class="text-center bg-secondary"><b>Automobiles:</b> <br>
                                                    Year, Make, Model</td>
                                                <td class="text-center bg-secondary fw-bold">A</td>
                                                <td class="text-center bg-secondary fw-bold">B</td>
                                                <td class="text-center bg-secondary fw-bold">T</td>
                                                <td class="text-center bg-secondary fw-bold">A</td>
                                                <td class="text-center bg-secondary fw-bold">B</td>
                                                <td class="text-center bg-secondary fw-bold">T</td>
                                                <td class="text-center bg-secondary fw-bold">Amount
                                                    Owed</td>
                                                <td class="text-center bg-secondary fw-bold">Estimated  Value  Today</td>

                                            </tr>
                                            <tr>
                                                <td><input type="text" name="automobile_item1" class="border-0 form-control"></td>
                                                <td class="text-center"><input type="checkbox" name="automobile_wa_a1" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="automobile_wa_b1" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="automobile_wa_t1" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="automobilesct_a1" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="automobilesct_b1" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="automobilesct_at1" value="Yes"></td>
                                                <td><input type="text" name="automobile_ao1" class="border-0 form-control"></td>
                                                <td><input type="text" name="automobile_evt1" class="border-0 form-control"></td>

                                            </tr>
                                            <tr>
                                                <td><input type="text" name="automobile_item2" class="border-0 form-control"></td>
                                                <td class="text-center"><input type="checkbox" name="automobile_wa_a2" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="automobile_wa_b2" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="automobile_wa_t2" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="automobilesct_a2" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="automobilesct_b2" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="automobilesct_at2" value="Yes"></td>
                                                <td><input type="text" name="automobile_ao2" class="border-0 form-control"></td>
                                                <td><input type="text" name="automobile_evt2" class="border-0 form-control"></td>

                                            </tr>
                                            <tr>
                                                <td><input type="text" name="automobile_item3" class="border-0 form-control"></td>
                                                <td class="text-center"><input type="checkbox" name="automobile_wa_a3" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="automobile_wa_b3" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="automobile_wa_t3" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="automobilesct_a3" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="automobilesct_b3" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="automobilesct_at3" value="Yes"></td>
                                                <td><input type="text" name="automobile_ao3" class="border-0 form-control"></td>
                                                <td><input type="text" name="automobile_evt3" class="border-0 form-control"></td>

                                            </tr>
                                            <tr>
                                                <td><input type="text" name="automobile_item4" class="border-0 form-control"></td>
                                                <td class="text-center"><input type="checkbox" name="automobile_wa_a4" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="automobile_wa_b4" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="automobile_wa_t4" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="automobilesct_a4" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="automobilesct_b4" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="automobilesct_at4" value="Yes"></td>
                                                <td><input type="text" name="automobile_ao4" class="border-0 form-control"></td>
                                                <td><input type="text" name="automobile_evt4" class="border-0 form-control"></td>

                                            </tr>
                                            <tr>
                                                <td><input type="text" name="automobile_item5" class="border-0 form-control"></td>
                                                <td class="text-center"><input type="checkbox" name="automobile_wa_a5" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="automobile_wa_b5" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="automobile_wa_t5" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="automobilesct_a5" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="automobilesct_b5" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="automobilesct_at5" value="Yes"></td>
                                                <td><input type="text" name="automobile_ao5" class="border-0 form-control"></td>
                                                <td><input type="text" name="automobile_evt5" class="border-0 form-control"></td>

                                            </tr>
                                            <tr>
                                                <td class="text-center bg-secondary"><b>Life Insurance:</b> <br>  Name of Company & Policy #</td>
                                                <td class="text-center bg-secondary fw-bold">A</td>
                                                <td class="text-center bg-secondary fw-bold">B</td>
                                                <td class="text-center bg-secondary fw-bold">T</td>
                                                <td colspan="3" class="text-center bg-secondary fw-bold">Beneficiary</td>
                                                <td class="text-center bg-secondary fw-bold">Face Amount </td>
                                                <td class="text-center bg-secondary fw-bold">Cash  Value Today</td>

                                            </tr>
                                            <tr>
                                                <td><input type="text" name="li_item1" class="border-0 form-control"></td>
                                                <td class="text-center"><input type="checkbox" name="li_wa_a1" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="li_wa_b1" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="li_wa_t1" value="Yes"></td>
                                                  <td colspan="3"><input type="text" name="li_beneficiary1" class="border-0 form-control"></td>
                                                 <td><input type="text" name="li_amount1" class="border-0 form-control"></td>
                                                <td><input type="text" name="li_esv1" class="border-0 form-control"></td>

                                            </tr>
                                            <tr>
                                                <td><input type="text" name="li_item2" class="border-0 form-control"></td>
                                                <td class="text-center"><input type="checkbox" name="li_wa_a2" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="li_wa_b2" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="li_wa_t2" value="Yes"></td>
                                                  <td colspan="3"><input type="text" name="li_beneficiary2" class="border-0 form-control"></td>
                                                 <td><input type="text" name="li_amount2" class="border-0 form-control"></td>
                                                <td><input type="text" name="li_esv2" class="border-0 form-control"></td>

                                            </tr>
                                            <tr>
                                                <td><input type="text" name="li_item3" class="border-0 form-control"></td>
                                                <td class="text-center"><input type="checkbox" name="li_wa_a3" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="li_wa_b3" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="li_wa_t3" value="Yes"></td>
                                                  <td colspan="3"><input type="text" name="li_beneficiary3" class="border-0 form-control"></td>
                                                 <td><input type="text" name="li_amount3" class="border-0 form-control"></td>
                                                <td><input type="text" name="li_esv3" class="border-0 form-control"></td>

                                            </tr>
                                            <tr>
                                                <td><input type="text" name="li_item4" class="border-0 form-control"></td>
                                                <td class="text-center"><input type="checkbox" name="li_wa_a4" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="li_wa_b4" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="li_wa_t4" value="Yes"></td>
                                                  <td colspan="3"><input type="text" name="li_beneficiary4" class="border-0 form-control"></td>
                                                 <td><input type="text" name="li_amount4" class="border-0 form-control"></td>
                                                <td><input type="text" name="li_esv4" class="border-0 form-control"></td>

                                            </tr>
                                            <tr>
                                                <td><input type="text" name="li_item5" class="border-0 form-control"></td>
                                                <td class="text-center"><input type="checkbox" name="li_wa_a5" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="li_wa_b5" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="li_wa_t5" value="Yes"></td>
                                                  <td colspan="3"><input type="text" name="li_beneficiary5" class="border-0 form-control"></td>
                                                 <td><input type="text" name="li_amount5" class="border-0 form-control"></td>
                                                <td><input type="text" name="li_esv5" class="border-0 form-control"></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center bg-secondary"><b>Business Interests</b> <br>  Name of Business & Address</td>
                                                <td class="text-center bg-secondary fw-bold">A</td>
                                                <td class="text-center bg-secondary fw-bold">B</td>
                                                <td class="text-center bg-secondary fw-bold">T</td>
                                                <td colspan="3" class="text-center bg-secondary fw-bold">Type of  Business</td>
                                                <td class="text-center bg-secondary fw-bold">% of Ownership </td>
                                                <td class="text-center bg-secondary fw-bold">Value MINUS Indebtedness</td>
                                            </tr>
                                            <tr>
                                                <td><input type="text" name="bi_noc1" class="border-0 form-control"></td>
                                                <td class="text-center"><input type="checkbox" name="bi_a1" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="bi_b1" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="bi_ti" value="Yes"></td>
                                                  <td colspan="3"><input type="text" name="bi_tob1" class="border-0 form-control"></td>
                                                 <td><input type="text" name="bi_ownership1" class="border-0 form-control"></td>
                                                <td><input type="text" name="bi_vmi1" class="border-0 form-control"></td>

                                            </tr>
                                            <tr>
                                                <td><input type="text" name="bi_noc2" class="border-0 form-control"></td>
                                                <td class="text-center"><input type="checkbox" name="bi_a2" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="bi_b2" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="bi_t2" value="Yes"></td>
                                                  <td colspan="3"><input type="text" name="bi_tob2" class="border-0 form-control"></td>
                                                 <td><input type="text" name="bi_ownership2" class="border-0 form-control"></td>
                                                <td><input type="text" name="bi_vmi2" class="border-0 form-control"></td>

                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                        @include('layouts.footer16', ['page' => 4])
                    </div>
        </section>
                <section class="section_area row page1 bg-white pt-5 p-lg-5 pe-2 pe-lg-5 p-lg-3 m-3 mt-4  pt-lg-5 pt-4">
                    <div class="col-lg-10 mx-auto">
                        <div class="border-bottom">
                            <div >
                                <div class="small_text d-flex d_sm_block">Petitioner/Joint Petitioner A:  <input type="text" name="5pjp_a" class=" border-none responsive_input border-0 border-bottom border-dotted shadow-none"></div>
                            </div>
                            <div class="pb-3">
                                <div class="small_text d-flex d_sm_block">Respondent/Joint Petitioner B: <input type="text" name="5rjp_a" class=" border-none responsive_input border-0 border-bottom border-dotted shadow-none"></div>
                            </div>
                         </div>
                                <div class="table-responsive">
                                    <table class="table table-bordered border-dark">
                                        <tbody>
                                            <tr>
                                                <td rowspan="2" class="small_text px-1">
                                                    <div class="text-center fw-bold"> Securities: Stocks, Bonds, Mutual Funds, Commodity Accounts</div>
                                                    <div>Name of Company & # of shares</div>
                                                </td>
                                                <td  class=" bg-secondary small_text" colspan="5">
                                                    <div class="text-center">Ownership or Title held by</div>
                                                    <div>A = Joint Petitioner A</div>
                                                    <div>B = Joint Petitioner B</div>
                                                    <div>T = Together</div> </td>
                                                <td class="text-center bg-secondary small_text">Value  Today</td>
                                            </tr>
                                            <tr>
                                                 <td class="text-center bg-secondary small_text px-3">A</td>
                                                <td class="text-center bg-secondary small_text px-3">B</td>
                                                <td class="text-center bg-secondary small_text px-3">T</td>
                                                <td colspan="2" rowspan="7" class=" bg-secondary"> </td>
                                                 <td><input type="text" name="value_today0" class="border-0 form-control"></td>
                                             </tr>
                                            <tr>
                                                <td><input type="text" name="company_name1" class="border-0 form-control"></td>
                                                <td class="text-center"><input type="checkbox" name="ot_a1" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="ot_b1" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="ot_t1" value="Yes"></td>
                                                <td><input type="text" name="value_today_1" class="border-0 form-control"></td>
                                            </tr>
                                            <tr>
                                                <td><input type="text" name="company_name2" class="border-0 form-control"></td>
                                                <td class="text-center"><input type="checkbox" name="ot_a2" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="ot_b2" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="ot_t2" value="Yes"></td>
                                                <td><input type="text" name="value_today_2" class="border-0 form-control"></td>
                                            </tr>
                                            <tr>
                                                <td><input type="text" name="company_name3" class="border-0 form-control"></td>
                                                <td class="text-center"><input type="checkbox" name="ot_a3" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="ot_b3" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="ot_t3" value="Yes"></td>
                                                <td><input type="text" name="value_today_3" class="border-0 form-control"></td>
                                            </tr>
                                            <tr>
                                                <td><input type="text" name="company_name4" class="border-0 form-control"></td>
                                                <td class="text-center"><input type="checkbox" name="ot_a4" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="ot_b4" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="ot_t4" value="Yes"></td>
                                                <td><input type="text" name="value_today_4" class="border-0 form-control"></td>
                                            </tr>
                                            <tr>
                                                <td><input type="text" name="company_name5" class="border-0 form-control"></td>
                                                <td class="text-center"><input type="checkbox" name="ot_a5" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="ot_b5" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="ot_t5" value="Yes"></td>
                                                <td><input type="text" name="value_today_5" class="border-0 form-control"></td>
                                            </tr>
                                            <tr>
                                                <td><input type="text" name="company_name6" class="border-0 form-control"></td>
                                                <td class="text-center"><input type="checkbox" name="ot_a6" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="ot_b6" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="ot_t6" value="Yes"></td>
                                                <td><input type="text" name="value_today_6" class="border-0 form-control"></td>
                                            </tr>

                                            <tr>
                                                <td class="bg-secondary">
                                                    <div class="fw-bold text-center">Pension, Retirement Accounts, Deferred Compensation, 401K Plans, IRAs, Profit Sharing, etc.</div>
                                                    <div class="text-center small_text">Name of Company & Type of PlanName of Company & Type of Plan</div>
                                                </td>
                                                <td class="text-center bg-secondary small_text">A</td>
                                                <td class="text-center bg-secondary small_text">B</td>
                                                <td class="text-center bg-secondary small_text">T</td>
                                                <td class="text-center bg-secondary small_text">% Vested if known</td>
                                                <td class="text-center bg-secondary small_text">Date of  Valuation</td>
                                                <td class="text-center bg-secondary small_text">Value Today</td>
                                            </tr>
                                            <tr>
                                                <td><input type="text" name="pa_noc1" class="border-0 form-control"></td>
                                                <td class="text-center"><input type="checkbox" name="pa_a1" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="pa_b1" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="pa_t1" value="Yes"></td>
                                                <td><input type="text" name="pa_vik1" class="border-0 form-control"></td>
                                                <td><input type="text" name="pa_dov1" class="border-0 form-control"></td>
                                                <td><input type="text" name="pa_vt1" class="border-0 form-control"></td>
                                            </tr>
                                            <tr>
                                                <td><input type="text" name="pa_noc2" class="border-0 form-control"></td>
                                                <td class="text-center"><input type="checkbox" name="pa_a2" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="pa_b2" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="pa_t2" value="Yes"></td>
                                                <td><input type="text" name="pa_vik2" class="border-0 form-control"></td>
                                                <td><input type="text" name="pa_dov2" class="border-0 form-control"></td>
                                                <td><input type="text" name="pa_vt2" class="border-0 form-control"></td>
                                            </tr>
                                            <tr>
                                                <td><input type="text" name="pa_noc3" class="border-0 form-control"></td>
                                                <td class="text-center"><input type="checkbox" name="pa_a3" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="pa_b3" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="pa_t3" value="Yes"></td>
                                                <td><input type="text" name="pa_vik3" class="border-0 form-control"></td>
                                                <td><input type="text" name="pa_dov3" class="border-0 form-control"></td>
                                                <td><input type="text" name="pa_vt3" class="border-0 form-control"></td>
                                            </tr>
                                            <tr>
                                                <td><input type="text" name="pa_noc4" class="border-0 form-control"></td>
                                                <td class="text-center"><input type="checkbox" name="pa_a4" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="pa_b4" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="pa_t4" value="Yes"></td>
                                                <td><input type="text" name="pa_vik4" class="border-0 form-control"></td>
                                                <td><input type="text" name="pa_dov4" class="border-0 form-control"></td>
                                                <td><input type="text" name="pa_vt4" class="border-0 form-control"></td>
                                            </tr>
                                            <tr>
                                                <td><input type="text" name="pa_noc5" class="border-0 form-control"></td>
                                                <td class="text-center"><input type="checkbox" name="pa_a5" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="pa_b5" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="pa_t5" value="Yes"></td>
                                                <td><input type="text" name="pa_vik5" class="border-0 form-control"></td>
                                                <td><input type="text" name="pa_dov5" class="border-0 form-control"></td>
                                                <td><input type="text" name="pa_vt5" class="border-0 form-control"></td>
                                            </tr>
                                            <tr>
                                                <td class="bg-secondary">
                                                    <div class="fw-bold text-center">Cash and Deposit Accounts (Savings and Checking)</div>
                                                    <div class="text-center small_text">Name of Bank or Financial Institution</div>
                                                </td>
                                                <td class="text-center bg-secondary small_text">A</td>
                                                <td class="text-center bg-secondary small_text">B</td>
                                                <td class="text-center bg-secondary small_text">T</td>
                                                <td class="text-center bg-secondary small_text">Type of  Account</td>
                                                <td class="text-center bg-secondary small_text">Account # Last 4 digits</td>
                                                <td class="text-center bg-secondary small_text">Balance Today</td>
                                            </tr>
                                            <tr>
                                                <td><input type="text" name="cad_nob1" class="border-0 form-control"></td>
                                                <td class="text-center"><input type="checkbox" name="cad_a1" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="cad_b1" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="cad_t1" value="Yes"></td>
                                                <td><input type="text" name="cad_toa1" class="border-0 form-control"></td>
                                                <td><input type="text" name="cad_ald1" class="border-0 form-control"></td>
                                                <td><input type="text" name="cad_bt1" class="border-0 form-control"></td>

                                            </tr>
                                            <tr>
                                                <td><input type="text" name="cad_nob2" class="border-0 form-control"></td>
                                                <td class="text-center"><input type="checkbox" name="cad_a2" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="cad_b2" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="cad_t2" value="Yes"></td>
                                                <td><input type="text" name="cad_toa2" class="border-0 form-control"></td>
                                                <td><input type="text" name="cad_ald2" class="border-0 form-control"></td>
                                                <td><input type="text" name="cad_bt2" class="border-0 form-control"></td>

                                            </tr>
                                            <tr>
                                                <td><input type="text" name="cad_nob3" class="border-0 form-control"></td>
                                                <td class="text-center"><input type="checkbox" name="cad_a3" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="cad_b3" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="cad_t3" value="Yes"></td>
                                                <td><input type="text" name="cad_toa3" class="border-0 form-control"></td>
                                                <td><input type="text" name="cad_ald3" class="border-0 form-control"></td>
                                                <td><input type="text" name="cad_bt3" class="border-0 form-control"></td>

                                            </tr>
                                            <tr>
                                                <td><input type="text" name="cad_nob4" class="border-0 form-control"></td>
                                                <td class="text-center"><input type="checkbox" name="cad_a4" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="cad_b4" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="cad_t4" value="Yes"></td>
                                                <td><input type="text" name="cad_toa4" class="border-0 form-control"></td>
                                                <td><input type="text" name="cad_ald4" class="border-0 form-control"></td>
                                                <td><input type="text" name="cad_bt4" class="border-0 form-control"></td>

                                            </tr>
                                            <tr>
                                                <td class="bg-secondary">
                                                    <div class="fw-bold text-center">Other Personal Property</div>
                                                        <div class="text-center small_text">Description of Asset</div>
                                                </td>
                                                <td class="text-center bg-secondary small_text">A</td>
                                                <td class="text-center bg-secondary small_text">B</td>
                                                <td class="text-center bg-secondary small_text">T</td>
                                                <td class="text-center bg-secondary small_text">Type of
                                                    Property</td>
                                                <td rowspan="6" class="text-center bg-secondary small_text"> </td>
                                                <td class="text-center bg-secondary small_text">Value</td>

                                            </tr>

                                            <tr>
                                                <td><input type="text" name="op_doa1" class="border-0 form-control"></td>
                                                <td class="text-center"><input type="checkbox" name="op_a1" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="op_b1" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="op_t1" value="Yes"></td>
                                                <td><input type="text" name="op_top1" class="border-0 form-control"></td>
                                                 <td><input type="text" name="op_v1" class="border-0 form-control"></td>

                                            </tr>

                                            <tr>
                                                <td><input type="text" name="op_doa2" class="border-0 form-control"></td>
                                                <td class="text-center"><input type="checkbox" name="op_a2" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="op_b2" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="op_t2" value="Yes"></td>
                                                <td><input type="text" name="op_top2" class="border-0 form-control"></td>
                                                 <td><input type="text" name="op_v2" class="border-0 form-control"></td>

                                            </tr>
                                            <tr>
                                                <td><input type="text" name="op_doa3" class="border-0 form-control"></td>
                                                <td class="text-center"><input type="checkbox" name="op_a3" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="op_b3" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="op_t3" value="Yes"></td>
                                                <td><input type="text" name="op_top3" class="border-0 form-control"></td>
                                                 <td><input type="text" name="op_v3" class="border-0 form-control"></td>

                                            </tr>
                                            <tr>
                                                <td><input type="text" name="op_doa4" class="border-0 form-control"></td>
                                                <td class="text-center"><input type="checkbox" name="op_a4" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="op_b4" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="op_t4" value="Yes"></td>
                                                <td><input type="text" name="op_top4" class="border-0 form-control"></td>
                                                 <td><input type="text" name="op_v4" class="border-0 form-control"></td>

                                            </tr>
                                            <tr>
                                                <td><input type="text" name="op_doa5" class="border-0 form-control"></td>
                                                <td class="text-center"><input type="checkbox" name="op_a5" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="op_b5" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="op_t5" value="Yes"></td>
                                                <td><input type="text" name="op_top5" class="border-0 form-control"></td>
                                                 <td><input type="text" name="op_v5" class="border-0 form-control"></td>

                                            </tr>

                                        </tbody>
                                    </table>
                                </div>

                        @include('layouts.footer16', ['page' => 5])
                    </div>

        </section>
                <section class="section_area  row page1 bg-white pt-5 p-lg-5 pe-2 pe-lg-5 p-lg-3 m-3 mt-4  pt-lg-5 pt-4" >
                    <div class="col-lg-10 mx-auto">
                        <div class="border-bottom">
                            <div class="">
                                <div class="small_text d-flex d_sm_block">Petitioner/Joint Petitioner A: <input type="text" name="6pjp_a" class=" border-none responsive_input border-0 border-bottom border-dotted shadow-none"></div>
                            </div>
                            <div class="pb-3">
                                <div class="small_text d-flex d_sm_block">Respondent/Joint Petitioner B: <input type="text" name="6rjp_a" class=" border-none responsive_input border-0 border-bottom border-dotted shadow-none"></div>
                            </div>
                         </div>

                                <div class="table-responsive">
                                    <table class="table table-bordered border-dark">
                                        <tbody>
                                            <tr>
                                                <td><input type="text" name="op_doa6" class="border-0 form-control"></td>
                                                <td class="text-center px-3 "></td>
                                                <td class="text-center px-3 "></td>
                                                <td class="text-center px-3 "></td>
                                                <td><input type="text" name="op_top5" class="border-0 form-control"></td>
                                                {{-- <td class="bg-secondary"> </td> --}}
                                                 <td><input type="text" name="op_v5" class="border-0 form-control"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-bordered border-dark">
                                        <tbody>
                                            <tr>
                                                <td rowspan="3" colspan="2" class="small_text px-1  ">
                                                    <div class="text-center fw-bold"> Assets Acquired</div>
                                                    <div>Description of Asset</div>
                                                </td>
                                                <td  class=" bg-secondary small_text ext-center" colspan="3"> Ownership</td>
                                                <td  class=" bg-secondary small_text ext-center" colspan="3"> Acquired by</td>
                                                <td rowspan="3" class="text-center bg-secondary small_text">Date  Acquired</td>
                                                <td rowspan="3" class="text-center bg-secondary small_text">Value Today</td>
                                            </tr>
                                            <tr>
                                                <td colspan="3">
                                                    <div>A = Joint Petitioner A</div>
                                                    <div>B = Joint Petitioner B</div>
                                                    <div>T = Together</div>
                                                </td>
                                                <td colspan="3">
                                                    <div>G - Gift</div>
                                                    <div>I - Inherited</div>
                                                    <div>B - Before Marriage</div>
                                                </td>
                                            </tr>
                                                <tr>
                                                    <td class="text-center">A</td>
                                                    <td class="text-center">B</td>
                                                    <td class="text-center px-3">T</td>
                                                    <td class="text-center">A</td>
                                                    <td class="text-center">B</td>
                                                    <td class="text-center">T</td>
                                                </tr>
                                            <tr>
                                                <td colspan="2"><input type="text" name="aa_doa1" class="border-0 form-control"></td>
                                                <td class="text-center"><input type="checkbox" name="o_a1" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="o_b1" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="o_t1" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="a_a1" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="a_b1" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="a_t1" value="Yes"></td>
                                                <td><input type="text" name="date_acquired1" class="border-0 form-control"></td>
                                                <td><input type="text" name="aa_vt1" class="border-0 form-control"></td>
                                            </tr>

                                            <tr>
                                                <td  colspan="2"><input type="text" name="aa_doa2" class="border-0 form-control"></td>
                                                <td class="text-center"><input type="checkbox" name="o_a2" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="o_b2" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="o_t2" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="a_a2" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="a_b2" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="a_t2" value="Yes"></td>
                                                <td><input type="text" name="date_acquired2" class="border-0 form-control"></td>
                                                <td><input type="text" name="aa_vt2" class="border-0 form-control"></td>
                                            </tr>

                                            <tr>
                                                <td  colspan="2"><input type="text" name="aa_doa3" class="border-0 form-control"></td>
                                                <td class="text-center"><input type="checkbox" name="o_a3" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="o_b3" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="o_t3" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="a_a3" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="a_b3" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="a_t3" value="Yes"></td>
                                                <td><input type="text" name="date_acquired3" class="border-0 form-control"></td>
                                                <td><input type="text" name="aa_vt3" class="border-0 form-control"></td>
                                            </tr>

                                            <tr>
                                                <td  colspan="2"><input type="text" name="aa_doa4" class="border-0 form-control"></td>
                                                <td class="text-center"><input type="checkbox" name="o_a4" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="o_b4" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="o_t4" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="a_a4" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="a_b4" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="a_t4" value="Yes"></td>
                                                <td><input type="text" name="date_acquired4" class="border-0 form-control"></td>
                                                <td><input type="text" name="aa_vt4" class="border-0 form-control"></td>
                                            </tr>

                                            <tr>
                                                <td colspan="2"><input type="text" name="aa_doa5" class="border-0 form-control"></td>
                                                <td class="text-center"><input type="checkbox" name="o_a5" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="o_b5" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="o_t5" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="a_a5" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="a_b5" value="Yes"></td>
                                                <td class="text-center"><input type="checkbox" name="a_t5" value="Yes"></td>
                                                <td><input type="text" name="date_acquired5" class="border-0 form-control"></td>
                                                <td><input type="text" name="aa_vt5" class="border-0 form-control"></td>
                                            </tr>
                                            <tr>
                                                <td >Real Estate</td>
                                                <td colspan="3" class="text-center">Parcel 1</td>
                                                <td colspan="4" class="text-center">Parcel 2</td>
                                                <td colspan="2" class="text-center">Parcel 3</td>
                                            </tr>
                                            <tr>
                                                <td >Type of Property</td>
                                                <td colspan="3" class="text-center"><input type="text" name="top1" class="border-0 form-control"></td>
                                                <td colspan="4" class="text-center"><input type="text" name="top2" class="border-0 form-control"></td>
                                                <td colspan="2" class="text-center"><input type="text" name="top3" class="border-0 form-control"></td>
                                            </tr>
                                            <tr>
                                                <td >Address: Street, City, State</td>
                                                <td colspan="3" class="text-center"><input type="text" name="ascs1" class="border-0 form-control"></td>
                                                <td colspan="4" class="text-center"><input type="text" name="ascs2" class="border-0 form-control"></td>
                                                <td colspan="2" class="text-center"><input type="text" name="ascs3" class="border-0 form-control"></td>
                                            </tr>
                                            <tr>
                                                <td >Ownership/Title</td>
                                                <td colspan="3" class="text-center">
                                                    <input type="checkbox" class="" name="ownership_a1"><span class="pe-2"> A</span>
                                                    <input type="checkbox" class="" name="ownership_b1"><span class="pe-2"> B</span>
                                                    <input type="checkbox" class="" name="ownership_t1"><span class="pe-2"> T</span>
                                                </td>
                                                <td colspan="4" class="text-center">
                                                    <input type="checkbox" class="" name="ownership_a2"><span class="pe-2"> A</span>
                                                    <input type="checkbox" class="" name="ownership_b2"><span class="pe-2"> B</span>
                                                    <input type="checkbox" class="" name="ownership_t2"><span class="pe-2"> T</span>
                                                </td>
                                                <td colspan="2" class="text-center">
                                                    <input type="checkbox" class="" name="ownership_a3"><span class="pe-2"> A</span>
                                                    <input type="checkbox" class="" name="ownership_b3"><span class="pe-2"> B</span>
                                                    <input type="checkbox" class="" name="ownership_t3"><span class="pe-2"> T</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td >Current Fair Market Value</td>
                                                <td colspan="3" class="text-center"><input type="text" name="cfmv1" class="border-0 form-control"></td>
                                                <td colspan="4" class="text-center"><input type="text" name="cfmv2" class="border-0 form-control"></td>
                                                <td colspan="2" class="text-center"><input type="text" name="cfmv3" class="border-0 form-control"></td>
                                            </tr>
                                            <tr>
                                                <td >Current Mortgage Balance</td>
                                                <td colspan="3" class="text-center"><input type="text" name="cmb1" class="border-0 form-control"></td>
                                                <td colspan="4" class="text-center"><input type="text" name="cmb2" class="border-0 form-control"></td>
                                                <td colspan="2" class="text-center"><input type="text" name="cmb3" class="border-0 form-control"></td>
                                            </tr>
                                            <tr>
                                                <td >Other Liens</td>
                                                <td colspan="3" class="text-center"><input type="text" name="ol1" class="border-0 form-control"></td>
                                                <td colspan="4" class="text-center"><input type="text" name="ol2" class="border-0 form-control"></td>
                                                <td colspan="2" class="text-center"><input type="text" name="ol3" class="border-0 form-control"></td>
                                            </tr>
                                            <tr>
                                                <td ><input type="text" name="ol4" class="border-0 form-control"></td>
                                                <td colspan="4" class="text-center"><input type="text" name="ol5" class="border-0 form-control"></td>
                                                <td colspan="2" class="text-center"><input type="text" name="ol6" class="border-0 form-control"></td>
                                                <td colspan="3" class="text-center"><input type="text" name="ol7" class="border-0 form-control"></td>
                                            </tr>
                                            <tr>
                                                <td ><input type="text" name="ol8" class="border-0 form-control"></td>
                                                <td colspan="2" class="text-center"><input type="text" name="ol9" class="border-0 form-control"></td>
                                                <td colspan="3" class="text-center"><input type="text" name="ol10" class="border-0 form-control"></td>
                                                <td colspan="4" class="text-center"><input type="text" name="ol11" class="border-0 form-control"></td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>

                                <div class="row ms-lg-3">
                                    <div class="col-lg-1">7</div>
                                    <div class="col-lg-11">
                                        <div>MEDICAL, HOMEOWNERS/RENTERS, AUTOMOBILE, OTHER INSURANCE  What type of insurance policies do you have?</div>


                                    </div>
                                </div>
                                    <div class="table-responsive ps-lg-3">
                                        <table class="table table-bordered border-dark">
                                            <tbody>

                                                <tr>
                                                    <td class="text-center bg-secondary">Name of Company, Group # & Policy #</td>
                                                    <td class="text-center bg-secondary px-3">A</td>
                                                    <td class="text-center bg-secondary px-3">B</td>
                                                    <td class="text-center bg-secondary px-3">T</td>
                                                    <td class="text-center bg-secondary">Type of Insurance</td>
                                                    <td class="text-center bg-secondary">Date Issued</td>
                                                </tr>
                                                <tr>
                                                    <td ><input type="text" name="mh_noc1" class="border-0 form-control"></td>
                                                    <td  class="text-center"><input type="checkbox" name="mh_a1" class=""></td>
                                                    <td  class="text-center"><input type="checkbox" name="mh_b1" class=""></td>
                                                    <td  class="text-center"><input type="checkbox" name="mh_t1" class=""></td>
                                                    <td  class="text-center"><input type="text" name="mh_toi1" class="border-0 form-control"></td>
                                                    <td  class="text-center"><input type="text" name="mh_di1" class="border-0 form-control"></td>
                                                </tr>
                                                <tr>
                                                    <td ><input type="text" name="mh_noc2" class="border-0 form-control"></td>
                                                    <td  class="text-center"><input type="checkbox" name="mh_a2" class=""></td>
                                                    <td  class="text-center"><input type="checkbox" name="mh_b2" class=""></td>
                                                    <td  class="text-center"><input type="checkbox" name="mh_t2" class=""></td>
                                                    <td  class="text-center"><input type="text" name="mh_toi2" class="border-0 form-control"></td>
                                                    <td  class="text-center"><input type="text" name="mh_di2" class="border-0 form-control"></td>
                                                </tr>
                                                <tr>
                                                    <td ><input type="text" name="mh_noc3" class="border-0 form-control"></td>
                                                    <td  class="text-center"><input type="checkbox" name="mh_a3" class=""></td>
                                                    <td  class="text-center"><input type="checkbox" name="mh_b3" class=""></td>
                                                    <td  class="text-center"><input type="checkbox" name="mh_t3" class=""></td>
                                                    <td  class="text-center"><input type="text" name="mh_toi3" class="border-0 form-control"></td>
                                                    <td  class="text-center"><input type="text" name="mh_di3" class="border-0 form-control"></td>
                                                </tr>
                                                <tr>
                                                    <td ><input type="text" name="mh_noc4" class="border-0 form-control"></td>
                                                    <td  class="text-center"><input type="checkbox" name="mh_a4" class=""></td>
                                                    <td  class="text-center"><input type="checkbox" name="mh_b4" class=""></td>
                                                    <td  class="text-center"><input type="checkbox" name="mh_t4" class=""></td>
                                                    <td  class="text-center"><input type="text" name="mh_toi4" class="border-0 form-control"></td>
                                                    <td  class="text-center"><input type="text" name="mh_di4" class="border-0 form-control"></td>
                                                </tr>
                                                <tr>
                                                    <td><input type="text" name="mh_noc5" class="border-0 form-control"></td>
                                                    <td class="text-center"><input type="checkbox" name="mh_a5" class=""></td>
                                                    <td class="text-center"><input type="checkbox" name="mh_b5" class=""></td>
                                                    <td class="text-center"><input type="checkbox" name="mh_t5" class=""></td>
                                                    <td class="text-center"><input type="text" name="mh_toi5" class="border-0 form-control"></td>
                                                    <td class="text-center"><input type="text" name="mh_di5" class="border-0 form-control"></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="row ms-lg-3">
                                        <div class="col-lg-1">8</div>
                                        <div class="col-lg-11">
                                            <div class="fw-bold">DEBTS: List ALL debts that you owe individually and together with the other party without regard to who
                                                will be responsible for payment later.</div>
                                                    <div class="small_text">If there are additional DEBTS, please attach a separate sheet of paper with the creditor’s name and address, the  type of obligation, who pays (A, B, T) and the current balance.</div>
                                        </div>
                                    </div>

                                    <div class="table-responsive ps-lg-3">
                                        <table class="table table-bordered border-dark">
                                            <tbody>
                                                <tr>
                                                    <td class="text-center bg-secondary" rowspan="2">Creditor’s Name & Address</td>
                                                    <td class="text-center bg-secondary" rowspan="2">Type of Obligation</td>
                                                    <td class="text-center bg-secondary" colspan="3">Who Currently pay </td>
                                                    <td class="text-center bg-secondary">Monthly Payment</td>
                                                    <td class="text-center bg-secondary">Current Balance</td>
                                                 </tr>
                                                 <tr>
                                                    <td class="text-center ">A</td>
                                                    <td class="text-center ">B</td>
                                                    <td class="text-center ">T</td>
                                                    <td class="text-center"><input type="text" name="d_mp_1" class="border-0 form-control"></td>
                                                    <td class="text-center"><input type="text" name="d_cb_1" class="border-0 form-control"></td>
                                                </tr>
                                                <tr>
                                                    <td  class="text-center"><input type="text" name="d_cn1" class="border-0 form-control"></td>
                                                    <td  class="text-center"><input type="text" name="d_too1" class="border-0 form-control"></td>
                                                    <td class="text-center "><input type="checkbox" name="d_a1" class=""></td>
                                                    <td class="text-center "><input type="checkbox" name="d_b1" class=""></td>
                                                    <td class="text-center "><input type="checkbox" name="d_t1" class=""></td>
                                                    <td  class="text-center"><input type="text" name="d_mp1" class="border-0 form-control"></td>
                                                    <td  class="text-center"><input type="text" name="d_cb1" class="border-0 form-control"></td>

                                                </tr>
                                                <tr>
                                                    <td  class="text-center"><input type="text" name="d_cn2" class="border-0 form-control"></td>
                                                    <td  class="text-center"><input type="text" name="d_too2" class="border-0 form-control"></td>
                                                    <td class="text-center "><input type="checkbox" name="d_a2" class=""></td>
                                                    <td class="text-center "><input type="checkbox" name="d_b2" class=""></td>
                                                    <td class="text-center "><input type="checkbox" name="d_t2" class=""></td>
                                                    <td  class="text-center"><input type="text" name="d_mp2" class="border-0 form-control"></td>
                                                    <td  class="text-center"><input type="text" name="d_cb2" class="border-0 form-control"></td>

                                                </tr>
                                                <tr>
                                                    <td  class="text-center"><input type="text" name="d_cn3" class="border-0 form-control"></td>
                                                    <td  class="text-center"><input type="text" name="d_too3" class="border-0 form-control"></td>
                                                    <td class="text-center "><input type="checkbox" name="d_a3" class=""></td>
                                                    <td class="text-center "><input type="checkbox" name="d_b3" class=""></td>
                                                    <td class="text-center "><input type="checkbox" name="d_t3" class=""></td>
                                                    <td  class="text-center"><input type="text" name="d_mp3" class="border-0 form-control"></td>
                                                    <td  class="text-center"><input type="text" name="d_cb3" class="border-0 form-control"></td>

                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>



                        @include('layouts.footer16', ['page' => 6])
                    </div>

        </section>
                <section class="section_area  row page1 bg-white pt-5 p-lg-5 pe-2 pe-lg-5 p-lg-3 m-3 mt-4  pt-lg-5 pt-4" >
                    <div class="col-lg-10 mx-auto">
                        <div class="border-bottom">
                            <div class="">
                                <div class="small_text d-flex d_sm_block">Petitioner/Joint Petitioner A:   <input type="text" name="7pjp_a"  class=" border-none responsive_input border-0 border-bottom border-dotted shadow-none"></div>

                            </div>
                            <div class="pb-3">
                                <div class="small_text d-flex d_sm_block">Respondent/Joint Petitioner B:   <input type="text" name="7rjp_b"  class=" border-none responsive_input border-0 border-bottom border-dotted shadow-none"></div>
                            </div>
                         </div>
                                    <div class="table-responsive ps-lg-3">
                                        <table class="table table-bordered border-dark">
                                            <tbody>
                                                 <tr class="invisible">
                                                    <td class="text-center"><input type="text"  class="border-0 form-control"></td>
                                                    <td class="text-center"><input type="text"   class="border-0 form-control"></td>
                                                    <td class="text-center px-3">A</td>
                                                    <td class="text-center px-3">B</td>
                                                    <td class="text-center px-3">T</td>
                                                    <td class="text-center"><input type="text"  class="border-0 form-control"></td>
                                                    <td class="text-center"><input type="text" class="border-0 form-control"></td>
                                                </tr>
                                                <tr>
                                                    <td  class="text-center"><input type="text" name="d_cn4" class="border-0 form-control"></td>
                                                    <td  class="text-center"><input type="text" name="d_too4" class="border-0 form-control"></td>
                                                    <td class="text-center "><input type="checkbox" name="d_a4" class=""></td>
                                                    <td class="text-center "><input type="checkbox" name="d_b4" class=""></td>
                                                    <td class="text-center "><input type="checkbox" name="d_t4" class=""></td>
                                                    <td  class="text-center"><input type="text" name="d_mp4" class="border-0 form-control"></td>
                                                    <td  class="text-center"><input type="text" name="d_cb4" class="border-0 form-control"></td>

                                                </tr>
                                                <tr>
                                                    <td  class="text-center"><input type="text" name="d_cn5" class="border-0 form-control"></td>
                                                    <td  class="text-center"><input type="text" name="d_too5" class="border-0 form-control"></td>
                                                    <td class="text-center "><input type="checkbox" name="d_a5" class=""></td>
                                                    <td class="text-center "><input type="checkbox" name="d_b5" class=""></td>
                                                    <td class="text-center "><input type="checkbox" name="d_t5" class=""></td>
                                                    <td  class="text-center"><input type="text" name="d_mp5" class="border-0 form-control"></td>
                                                    <td  class="text-center"><input type="text" name="d_cb5" class="border-0 form-control"></td>

                                                </tr>
                                                <tr>
                                                    <td  class="text-center"><input type="text" name="d_cn6" class="border-0 form-control"></td>
                                                    <td  class="text-center"><input type="text" name="d_too6" class="border-0 form-control"></td>
                                                    <td class="text-center "><input type="checkbox" name="d_a6" class=""></td>
                                                    <td class="text-center "><input type="checkbox" name="d_b6" class=""></td>
                                                    <td class="text-center "><input type="checkbox" name="d_t6" class=""></td>
                                                    <td  class="text-center"><input type="text" name="d_mp6" class="border-0 form-control"></td>
                                                    <td  class="text-center"><input type="text" name="d_cb6" class="border-0 form-control"></td>

                                                </tr>
                                                <tr>
                                                    <td  class="text-center"><input type="text" name="d_cn7" class="border-0 form-control"></td>
                                                    <td  class="text-center"><input type="text" name="d_too7" class="border-0 form-control"></td>
                                                    <td class="text-center "><input type="checkbox" name="d_a7" class=""></td>
                                                    <td class="text-center "><input type="checkbox" name="d_b7" class=""></td>
                                                    <td class="text-center "><input type="checkbox" name="d_t7" class=""></td>
                                                    <td  class="text-center"><input type="text" name="d_mp7" class="border-0 form-control"></td>
                                                    <td  class="text-center"><input type="text" name="d_cb7" class="border-0 form-control"></td>

                                                </tr>
                                                <tr>
                                                    <td  class="text-center"><input type="text" name="d_cn8" class="border-0 form-control"></td>
                                                    <td  class="text-center"><input type="text" name="d_too8" class="border-0 form-control"></td>
                                                    <td class="text-center "><input type="checkbox" name="d_a8" class=""></td>
                                                    <td class="text-center "><input type="checkbox" name="d_b8" class=""></td>
                                                    <td class="text-center "><input type="checkbox" name="d_t8" class=""></td>
                                                    <td  class="text-center"><input type="text" name="d_mp8" class="border-0 form-control"></td>
                                                    <td  class="text-center"><input type="text" name="d_cb8" class="border-0 form-control"></td>

                                                </tr>
                                                <tr>
                                                    <td  class="text-center"><input type="text" name="d_cn9" class="border-0 form-control"></td>
                                                    <td  class="text-center"><input type="text" name="d_too9" class="border-0 form-control"></td>
                                                    <td class="text-center "><input type="checkbox" name="d_a9" class=""></td>
                                                    <td class="text-center "><input type="checkbox" name="d_b9" class=""></td>
                                                    <td class="text-center "><input type="checkbox" name="d_t9" class=""></td>
                                                    <td  class="text-center"><input type="text" name="d_mp9" class="border-0 form-control"></td>
                                                    <td  class="text-center"><input type="text" name="d_cb9" class="border-0 form-control"></td>

                                                </tr>
                                                <tr>
                                                    <td  class="text-center"><input type="text" name="d_cn10" class="border-0 form-control"></td>
                                                    <td  class="text-center"><input type="text" name="d_too10" class="border-0 form-control"></td>
                                                    <td class="text-center "><input type="checkbox" name="d_a10" class=""></td>
                                                    <td class="text-center "><input type="checkbox" name="d_b10" class=""></td>
                                                    <td class="text-center "><input type="checkbox" name="d_t10" class=""></td>
                                                    <td  class="text-center"><input type="text" name="d_mp10" class="border-0 form-control"></td>
                                                    <td  class="text-center"><input type="text" name="d_cb10" class="border-0 form-control"></td>

                                                </tr>
                                                <tr>
                                                    <td  class="text-center"><input type="text" name="d_cn11" class="border-0 form-control"></td>
                                                    <td  class="text-center"><input type="text" name="d_too11" class="border-0 form-control"></td>
                                                    <td class="text-center "><input type="checkbox" name="d_a11" class=""></td>
                                                    <td class="text-center "><input type="checkbox" name="d_b11" class=""></td>
                                                    <td class="text-center "><input type="checkbox" name="d_t11" class=""></td>
                                                    <td  class="text-center"><input type="text" name="d_mp11" class="border-0 form-control"></td>
                                                    <td  class="text-center"><input type="text" name="d_cb11" class="border-0 form-control"></td>

                                                </tr>
                                                <tr>
                                                    <td  class="text-center"><input type="text" name="d_cn12" class="border-0 form-control"></td>
                                                    <td  class="text-center"><input type="text" name="d_too12" class="border-0 form-control"></td>
                                                    <td class="text-center "><input type="checkbox" name="d_a12" class=""></td>
                                                    <td class="text-center "><input type="checkbox" name="d_b12" class=""></td>
                                                    <td class="text-center "><input type="checkbox" name="d_t12" class=""></td>
                                                    <td  class="text-center"><input type="text" name="d_mp12" class="border-0 form-control"></td>
                                                    <td  class="text-center"><input type="text" name="d_cb12" class="border-0 form-control"></td>

                                                </tr>
                                                <tr>
                                                    <td  class="text-center"><input type="text" name="d_cn13" class="border-0 form-control"></td>
                                                    <td  class="text-center"><input type="text" name="d_too13" class="border-0 form-control"></td>
                                                    <td class="text-center "><input type="checkbox" name="d_a13" class=""></td>
                                                    <td class="text-center "><input type="checkbox" name="d_b13" class=""></td>
                                                    <td class="text-center "><input type="checkbox" name="d_t13" class=""></td>
                                                    <td  class="text-center"><input type="text" name="d_mp13" class="border-0 form-control"></td>
                                                    <td  class="text-center"><input type="text" name="d_cb13" class="border-0 form-control"></td>

                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>


                                    <div class="  ">

                                        <div class=" "><span class=" me-lg-3">9.</span>
                                            <span class="fw-bold">DISPOSAL OF ASSETS</span>
                                            <div class="small_text ms-lg-4">Did you dispose of any assets (sold, given away, or destroyed) in the 12 months before the case was filed?.</div>
                                            <div class=" text-end">
                                                <input type="checkbox" name="dispose" id="" value="Yes"> <span>Yes</span>
                                                <input type="checkbox" name="dispose" id="" value="No"> <span>No</span>
                                            </div>
                                            <div class="fw-bold ms-lg-4">If yes, complete chart below:</div>
                                        </div>
                                    </div>
                                    <div class="table-responsive ms-lg-4">
                                        <table class="table table-bordered border-dark">
                                            <tbody>
                                                 <tr>
                                                    <td class="w-50 text-center bg-secondary">Property / Asset</td>
                                                    <td class="text-center bg-secondary">Date of Disposal</td>
                                                    <td class="text-center bg-secondary">Fair Market Value on  Date of Disposal</td>
                                                </tr>
                                                <tr>
                                                    <td  class="text-center"><input type="text" name="da_pa1" class="border-0 form-control"></td>
                                                    <td  class="text-center"><input type="text" name="da_dod1" class="border-0 form-control"></td>
                                                    <td  class="text-center"><input type="text" name="da_fmv1" class="border-0 form-control"></td>
                                                </tr>
                                                <tr>
                                                    <td  class="text-center"><input type="text" name="da_pa2" class="border-0 form-control"></td>
                                                    <td  class="text-center"><input type="text" name="da_dod2" class="border-0 form-control"></td>
                                                    <td  class="text-center"><input type="text" name="da_fmv2" class="border-0 form-control"></td>
                                                </tr>
                                                <tr>
                                                    <td  class="text-center"><input type="text" name="da_pa3" class="border-0 form-control"></td>
                                                    <td  class="text-center"><input type="text" name="da_dod3" class="border-0 form-control"></td>
                                                    <td  class="text-center"><input type="text" name="da_fmv3" class="border-0 form-control"></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class=" "><span class=" me-lg-3">10.</span>
                                        <span class="fw-bold">  CURRENT LITIGATION</span>

                                     </div>
                                     <div class="ms-lg-5">
                                        <div>Are you a party in any other lawsuit or litigation?  <input type="radio" name="lawsuit_litigation" id="" value="Yes"> <span class="pe-lg-3"  > Yes</span>  <input type="radio" name="lawsuit_litigation" id="" value="No"><span class="pe-lg-3"> No</span> </div>
                                        <div>If yes, identify the lawsuit or litigation. <input type="text" name="lawsuit_litigation_val" id="" class="border-0 border-bottom"></div>
                                     </div>

                                    <div class=" "><span class=" me-lg-3">11.</span>
                                        <span class="fw-bold">BANKRUPTCY</span>

                                     </div>
                                     <div class="ms-lg-5">
                                        <div>Have you ever filed for bankruptcy?  <input type="checkbox" name="bankruptcy" id="" Value="Yes"> <span class="pe-lg-3" > Yes</span>  <input type="checkbox" name="bankruptcy" id="" value="No"><span class="pe-lg-3"> No</span> </div>
                                        <div>If yes, identify the following:</div>
                                        <div>Type of filing<input type="text" name="filing_type" id="" class="border-0 border-bottom responsive_input"></div>
                                        <div>Date of filing<input type="text" name="filing_date" id="" class="border-0 border-bottom responsive_input"></div>
                                        <div>Current status<input type="text" name="current_status" id="" class="border-0 border-bottom responsive_input"></div>
                                     </div>
                                    <div class=" "><span class=" me-lg-3">12.</span>
                                        <span class="fw-bold">DECLARATION</span>

                                     </div>
                                     <div class="ms-lg-5">
                                        <div>I declare under the penalty of perjury that the above, including all attachments, are complete, true, and correct.</div>
                                     </div>


                                     <div class="row">
                                        <div class="col-lg-5">

                                            <div class="w-50 responsive_input border border-dark p-2">
                                                <div>Sign and print your   name.</div>
                                                <div>Enter the date on  which you signed your name.</div>
                                                <div><b>Note:</b> This signature does not need to be notarized.</div>
                                            </div>
                                        </div>
                                        <div class="col-lg-1">

                                        </div>
                                        <div class="col-lg-6">
                                            <div>
                                                <input type="text" name="aignature" class="border-0 form-control border-bottom">
                                                <div class="text-center mx-auto">Signature</div>
                                            </div>
                                            <div>
                                                <input type="text" name="print_type" class="border-0 form-control border-bottom">
                                                <div class="text-center mx-auto">Print or Type Name</div>
                                            </div>
                                            <div>
                                                <input type="text" name="address" class="border-0 form-control border-bottom">
                                                <div class="text-center mx-auto">Address</div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <input type="text" name="email" class="border-0 form-control border-bottom">
                                                    <div class=" ">Email Address</div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <input type="text" name="telephone_no" class="border-0 form-control border-bottom">
                                                    <div class="text-end">Telephone Number</div>
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <input type="text" name="date" class="border-0 form-control border-bottom">
                                                    <div class=" ">Date</div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <input type="text" name="state_bar" class="border-0 form-control border-bottom">
                                                    <div class="text-end">State Bar No. (if any)</div>
                                                </div>

                                            </div>
                                        </div>
                                     </div>
                        @include('layouts.footer16', ['page' => 7])
                        @include('layouts.pagination', ['page' => 21])

                    </div>

        </section>





        </form>
    </div>
    </div>
</body>
</html>
