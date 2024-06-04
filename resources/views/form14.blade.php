{{-- fl150  CA.pdf --}}
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
        <div class="container bg_color p-lg-3 p-1  ">
            <form action="{{ route('form14.submit') }}" method="post">
                @csrf
                <section class="section_area">
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show">{{ session('success') }} <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <div class="row  px-lg-5 px-2   pt-2">
                        <div class="small_text text-end fw-bold">FL-150</div>
                        <div class="col-lg-8 border border-dark">
                            <div class="row">
                                <div class="col">
                                    <div class="small_text"> PARTY WITHOUT ATTORNEY OR ATTORNEY</div>

                                </div>
                                <div class="col">
                                    <div class="d-flex">
                                        <div class="small_text">STATE BAR NUMBER:</div>
                                        <div> <input type="text" name="name" class="border-0 table_input "></div>
                                    </div>
                                </div>
                            </div>
                            {{-- <textarea name="" id="" cols="6" class="form-control p-0 m-0"></textarea> --}}
                            <div class="p-2 border-bottom border-dark">
                                <div class="">
                                    <div class="d-flex">
                                        <div class="small_text">NAME:</div>
                                        <div> <input type="text" name="name" class="border-0 table_input "></div>
                                    </div>
                                </div>

                                <div class="">
                                    <div class="d-flex">
                                        <div class="small_text">FIRM NAME:</div>
                                        <div> <input type="text" name="f_name" class="border-0 table_input "></div>
                                    </div>
                                </div>

                                <div class="">
                                    <div class="d-flex">
                                        <div class="small_text">STREET ADDRESS:</div>
                                        <div> <input type="text" name="s_address" class="border-0 table_input "></div>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="d-flex">
                                        <div class="small_text">CITY :</div>
                                        <div> <input type="text" name="city" class="border-0 table_input "></div>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="d-flex">
                                        <div class="small_text">TELEPHONE NO :</div>
                                        <div> <input type="text" name="phone" class="border-0 table_input "></div>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="d-flex">
                                        <div class="small_text">EMAIL ADDRESS NO :</div>
                                        <div> <input type="text" name="phone" class="border-0 table_input "></div>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="d-flex">
                                        <div class="small_text">ATTORNEY FOR (name):</div>
                                        <div> <input type="text" name="phone" class="border-0 table_input "></div>
                                    </div>
                                </div>
                            </div>
                            <div class="p-2 border-bottom border-dark">
                                <div class="">
                                    <div class="d-flex">
                                        <div class=" ">SUPERIOR COURT OF CALIFORNIA, COUNTY OF</div>
                                        <div> <input type="text" name="county_of" class="border-0 table_input "></div>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="d-flex">
                                        <div class="small_text">STREET ADDRESS:</div>
                                        <div> <input type="text" name="street_address" class="border-0 table_input "></div>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="d-flex">
                                        <div class="small_text">MAILING ADDRESS:</div>
                                        <div> <input type="text" name="mailing_address" class="border-0 table_input "></div>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="d-flex">
                                        <div class="small_text">CITY AND ZIP CODE:</div>
                                        <div> <input type="text" name="zip_code" class="border-0 table_input "></div>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="d-flex">
                                        <div class="small_text">BRANCH NAME:</div>
                                        <div> <input type="text" name="branch_name" class="border-0 table_input "></div>
                                    </div>
                                </div>
                            </div>
                            <div class="p-2 border-dark">
                                <div class="">
                                    <div class="d-flex ps-lg-5">
                                        <div class="small_text">PETITIONER:</div>
                                        <div> <input type="text" name="petitioner" class="border-0 table_input "></div>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="d-flex ps-lg-5">
                                        <div class="small_text">RESPONDENT:</div>
                                        <div> <input type="text" name="respondent" class="border-0 table_input "></div>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="d-flex ps-lg-5">
                                        <div class="small_text">OTHER PARENT/PARTY:</div>
                                        <div> <input type="text" name="other_party" class="border-0 table_input "></div>
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

                        <div class="text-center fw-bold my-auto py-auto">INCOME AND EXPENSE DECLARATION</div>
                        </div>
                        <div class="col-lg-4 border border-dark">
                            <div class="small_text">CASE NUMBER:</div>
                            <input type="text" name="case_number" class="border-0 table_input w-100">
                        </div>
                    </div>
                    <div class="px-lg-5 px-2">
                        <div>1. <b> Employment </b>(Give information on your current job or, if you’re unemployed, your most recent job.)</div>
                        <div class="row">
                            <div class="col-lg-2 border border-dark">
                                Attach copies of your pay stubs for last two months (black out Social Security numbers)
                            </div>
                            <div class="col-lg-10">
                                <div class="d-flex">
                                    <small> a. Employer: </small>
                                   <input type="text" name="signature" class="border-0  w-75 ">
                                </div>

                                <div class="d-flex">
                                    <small> b. Employer's Address: </small>
                                   <input type="text" name="signature" class="border-0  w-75 ">
                                </div>

                                <div class="d-flex">
                                    <small> c. Employer's phone number: </small>
                                   <input type="text" name="signature" class="border-0  w-75 ">
                                </div>
                                <div class="d-flex">
                                    <small> d. Occupation:</small>
                                   <input type="text" name="signature" class="border-0  w-75 ">
                                </div>
                                <div class="d-flex">
                                    <small> e. Date job started:</small>
                                   <input type="text" name="signature" class="border-0  w-75 ">
                                </div>
                                <div class="d-flex">
                                    <small> f. If unemployed, date job ended :</small>
                                   <input type="text" name="signature" class="border-0  w-75 ">
                                </div>
                                <div class="d-flex">
                                    <small> g. I work about</small>
                                   <input type="text" name="signature" class="border-0  w-25 ">
                                   <small> hours per week:</small>
                                </div>
                                <div class="d-flex">
                                    <small> h. I get paid</small>
                                   <input type="text" name="signature" class="border-0  w-25 ">
                                   <small> gross (before texes):</small>
                                   <span class="d-flex ps-3">
                                    <div class="d-flex  pe-4">
                                        <input type="radio" name="non_marital_claims" value="Yes" class="me-1">
                                        <div>Per month</div>

                                    </div>
                                    <div class="d-flex  pe-4">
                                        <input type="radio" name="non_marital_claims" value="No" class="me-1">
                                        <div>per week</div>

                                    </div>
                                    <div class="d-flex  ">
                                        <input type="radio" name="non_marital_claims" value="No" class="me-1">
                                        <div>per hour</div>

                                    </div>
                                </span>
                                </div>
                            </div>
                        </div>
                        <div class="fow-bold">(If you have more than one job, attach an 8  1/2-by-11-inch sheet of paper and list the same information as above for your other jobs. Write “question 1—Other Jobs” at the top.)</div>


                        <div class="pt-2 fw-bold">2 Age and education</div>

                        <div class="row ps-lg-3">
                            <div class="d-flex">
                                <small> a.<input type="checkbox" name="signature" class="border-0 mx-2  ">
                                </small>
                               <small>I last filed taxes for tax year (specify year):</small>
                            </div>

                            <div class="d-flex d_sm_block">
                                <small> b. My tax filing status is</small>
                                <small> gross (before texes):</small>
                               <span class="d-flex d_sm_block ps-3">
                                    <div class="d-flex    pe-4">
                                        <input type="radio" name="non_marital_claims" value="Yes" class="me-1">
                                        <div>Single</div>

                                    </div>
                                    <div class="d-flex    pe-4">
                                        <input type="radio" name="non_marital_claims" value="No" class="me-1">
                                        <div>Head of household</div>

                                    </div>
                                    <div class="d-flex    pe-4">
                                        <input type="radio" name="non_marital_claims" value="No" class="me-1">
                                        <div>Married, filling separately</div>

                                    </div>
                                    <div class="d-flex    pe-4">
                                        <input type="radio" name="non_marital_claims" value="No" class="me-1">
                                        <div>Married, filling jointly with (specify name):</div>

                                    </div>
                                 </span>

                            </div>
                            <div class="d-flex d_sm_block">
                                <small> c.  Number of years of college completed (specify) : </small>
                                 <span class="d-flex ps-3">
                                    <div class="d-flex  pe-4">
                                        <input type="radio" name="non_marital_claims" value="Yes" class="me-1">
                                        <div>Degree(s) obtained (specify)</div>
                                    </div>
                                </span>
                            </div>

                            <div class="d-flex d_sm_block">
                                <small>d.  Number of years of graduate school completed (specify) :</small>
                                 <span class="d-flex ps-3">
                                    <div class="d-flex  pe-4">
                                        <input type="radio" name="non_marital_claims" value="Yes" class="me-1">
                                        <div>Degree(s) obtained (specify)</div>
                                    </div>
                                </span>
                            </div>
                            <div class="d-flex d_sm_block">
                                <small>e. I have</small>
                                 <span class="d-flex d_sm_block ps-3">
                                    <div class="d-flex  pe-4">
                                        <input type="radio" name="non_marital_claims" value="Yes" class="me-1">
                                        <div>Professional/occupational license(s) (specify)</div>
                                    </div>
                                    <div class="d-flex  pe-4">
                                        <input type="radio" name="non_marital_claims" value="Yes" class="me-1">
                                        <div>Vocational training (specify)</div>
                                    </div>
                                </span>
                            </div>
                        </div>
                        <div class="pt-2 fw-bold">3. Tax Information</div>
                        <div class="row ps-lg-3">
                            <div class="d-flex">
                                <small> a. My age is (specify): </small>
                               <input type="text" name="signature" class="border-0  w-75 ">
                            </div>

                            <div class="d-flex d_sm_block">
                                <small> b. I have completed high school or the equivalent </small>
                                <small> gross (before texes):</small>
                               <span class="d-flex d_sm_block   ps-3">
                                    <div class="d-flex  pe-4">
                                        <input type="radio" name="non_marital_claims" value="Yes" class="me-1">
                                        <div>Yes</div>

                                    </div>
                                    <div class="d-flex  pe-4">
                                        <input type="radio" name="non_marital_claims" value="No" class="me-1">
                                        <div>No</div>

                                    </div>
                                    <div class="">If no, highest grade completed (specify)</div>
                                </span>

                            </div>
                            <div class="d-flex">
                                <small> c. I file state tax returns in </small>
                                 <span class="d-flex ps-3">
                                    <div class="d-flex  pe-4">
                                        <input type="radio" name="non_marital_claims" value="Yes" class="me-1">
                                        <div>California</div>
                                    </div>
                                    <div class="d-flex  pe-4">
                                        <input type="radio" name="non_marital_claims" value="Yes" class="me-1">
                                        <div>other (specify name)</div>
                                    </div>
                                </span>
                            </div>

                            <div class="d-flex">
                                <small>d.  I claim the following number of exemptions (including myself) on my taxes (specify)</small>

                            </div>
                        </div>
                        <div class="pt-2 f ">4. Other party’s Income. I estimate the gross monthly income (before taxes) of the other party in this case at (specify) : $ This estimate is based on (explain)</div>
                        <div class="row ps-lg-3">
                            <div class="fw-bold">(If you need more space to answer any questions on tis form, attach an 8 1/2-by-11-inch sheet of paper and write the question number before your answer.) </div>
                            <div class="d-flex">
                                <small> Number of pages attached:</small>
                               <input type="text" name="signature" class="border-0 border-bottom  w-75 ">
                            </div>
                        </div>
                        <div><small>I declare under penalty of perjury under the laws of the State of California that the information contained on all pages of this form and any attachments is true  and correct</small></div>
                        <div class="d-flex">
                            <div class="  me-2">Date</div>
                            <div> <input type="text" name="date" class="border-0 border-bottom footer_field"></div>
                        </div>
                            <div class="row  ">
                                <div class="col-lg-6">
                                        <div> <input type="text" name="topn" class="border-0 border-bottom form-control footer_field "></div>
                                        <div class="small_text text-center">(TYPE OR PRINT NAME)</div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div> <input type="text" name="signature" class="border-0 border-bottom form-control footer_field "></div>
                                            <div class="small_text text-center">(SIGNATURE OF DECLARANT)</div>
                                </div>
                            </div>
                        @include('layouts.footer10', ['page' => 1])
                    </div>

                </section>

                <section class="section_area pt-5">

                    <div class="row px-lg-5 px-2 py-2 pt-5">
                        <div class="small_text text-end fw-bold">FL-150</div>

                        <div class="col-lg-8 border border-dark">
                            <div class="p-2 border-dark">
                                <div class="">
                                    <div class="d-flex ps-lg-5">
                                        <div class="small_text">PETITIONER:</div>
                                        <div> <input type="text" name="petitioner" class="border-0 table_input "></div>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="d-flex ps-lg-5">
                                        <div class="small_text">RESPONDENT:</div>
                                        <div> <input type="text" name="respondent" class="border-0 table_input "></div>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="d-flex ps-lg-5">
                                        <div class="small_text">OTHER PARENT/PARTY:</div>
                                        <div> <input type="text" name="other_party" class="border-0 table_input "></div>
                                    </div>
                                </div>
                            </div>
                         </div>
                        <div class="col-lg-4 border border-dark">
                            <div class="small_text">CASE NUMBER:</div>
                            <input type="text" name="case_number" class="border-0 table_input w-100">
                        </div>
                    </div>
                    <div class="px-lg-5 px-2">
                    <div class="fw-bold">Attach copies of your pay stubs for the last two months and proof of any other income. Take a copy of your latest federal tax return to the court hearing. (Black out your Social Security number on the pay stub and tax return.)</div>

                    <div class="pt-2 ">5. Income (For average monthly, add up all the income you receive in each category in the last 12 months</div>
                    <div class="row ps-lg-3">
                        <div class="col-lg-6">
                            <div> and divide the total by 12.)</div>
                            <h6 class="responsive_input ">a. Salary or wages (gross, before taxes) .............................................................................................</h6>
                            <h6 class="responsive_input">b. Overtime (gross, before taxes) .......................................................................................................</h6>
                            <h6 class="responsive_input">c. Commissions or bonuses ...............................................................................................................</h6>
                            <h6 class="d-flex">d. Public assistance (for example : TANF, SSI, GA/GR)   <div class="d-flex ps-2  ">
                                <div> <input type="radio" name="other_party" class="border-0 table_input "></div>
                                <div class="small_text ps-2">Currently receiving </div>
                            </div> ............................</h6>
                            <h6 class="d-flex d_sm_block">e. Spousal support
                                 <div class="d-flex ps-2  ">
                                   <div> <input type="radio" name="other_party" class="border-0 table_input "></div>
                                    <div class="small_text ps-2">From this marriage</div>
                                </div>
                                 <div class="d-flex ps-2  ">
                                   <div> <input type="radio" name="other_party" class="border-0 table_input "></div>
                                    <div class="small_text ps-2">From a different marriage</div>
                                </div>
                                 <div class="d-flex ps-2  ">
                                   <div> <input type="radio" name="other_party" class="border-0 table_input "></div>
                                    <div class="small_text ps-2">Federally taxable*</div>
                                </div>..</h6>
                            <h6 class="d-flex d_sm_block">f. Partner  support
                                 <div class="d-flex ps-2">
                                   <div> <input type="radio" name="other_party" class="border-0 table_input "></div>
                                    <div class="small_text ps-2">From this domestic partnership</div>
                                </div>
                                 <div class="d-flex ps-2">
                                   <div> <input type="radio" name="other_party" class="border-0 table_input "></div>
                                   <div class="small_text ps-2">From a different domestic partnership</div>.</div>
                            </h6>
                             <h6 class="responsive_input">g. Pension/retirement fund payments ..............................................................................................</h6>
                            <h6 class="responsive_input">h . Social Security retirement (not SSI) ..........................................................................................</h6>
                            {{-- <h6 class="">j. Commissions or bonuses ...............................................................................</h6> --}}
                            <h6 class="d-flex d_sm_block">i. Disability
                                <div class="d-flex ps-2">
                                  <div> <input type="radio" name="other_party" class="border-0 table_input "></div>
                                   <div class="small_text ps-2">Social Security (not SSI)</div>
                               </div>
                                <div class="d-flex ps-2">
                                  <div> <input type="radio" name="other_party" class="border-0 table_input "></div>
                                  <div class="small_text ps-2">State disability (SDI)</div>
                                </div>
                                <div class="d-flex ps-2">
                                  <div> <input type="radio" name="other_party" class="border-0 table_input "></div>
                                  <div class="small_text ps-2">Private insurance</div>
                                </div>
                                ............
                           </h6>
                            <h6 class="responsive_input">j. Unemployment compensation  .....................................................................................................</h6>
                            <h6 class="responsive_input">k. Workers’ compensation..............................................................................................................</h6>
                            <h6 class="responsive_input">l. Other (military allowances, royalty payments) (specify) </h6>
                        </div>
                        <div class="col-lg-3">
                            <div class="text-center">Last Month</div>
                            <div class="d-flex ">
                                <div class="small_text">$</div>
                                <input type="text" min="0" name="rent1" class="border-bottom border-0 footer_field responsive_input bg-transparent border outline-none form-control">
                            </div>

                            <div class="d-flex ">
                                <div class="small_text">$</div>
                                <input type="text" min="0" name="rent1" class="border-bottom border-0 footer_field responsive_input bg-transparent border outline-none form-control">
                            </div>
                            <div class="d-flex ">
                                <div class="small_text">$</div>
                                <input type="text" min="0" name="rent1" class="border-bottom border-0 footer_field responsive_input bg-transparent border outline-none form-control">
                            </div>

                            <div class="d-flex ">
                                <div class="small_text">$</div>
                                <input type="text" min="0" name="rent1" class="border-bottom border-0 footer_field responsive_input bg-transparent border outline-none form-control">
                            </div>

                            <div class="d-flex ">
                                <small>$</small>
                                <input type="text" min="0" name="rent1" class="border-bottom border-0 footer_field responsive_input bg-transparent border outline-none form-control">
                            </div>

                            <div class="d-flex ">
                                <div class="small_text">$</div>
                                <input type="text" min="0" name="rent1" class="border-bottom border-0 footer_field responsive_input bg-transparent border outline-none form-control">
                            </div>

                            <div class="d-flex ">
                                <div class="small_text">$</div>
                                <input type="text" min="0" name="rent1" class="border-bottom border-0 footer_field responsive_input bg-transparent border outline-none form-control">
                            </div>

                            <div class="d-flex ">
                                <div class="small_text">$</div>
                                <input type="text" min="0" name="rent1" class="border-bottom border-0 footer_field responsive_input bg-transparent border outline-none form-control">
                            </div>

                            <div class="d-flex ">
                                <div class="small_text">$</div>
                                <input type="text" min="0" name="rent1" class="border-bottom border-0 footer_field responsive_input bg-transparent border outline-none form-control">
                            </div>

                            <div class="d-flex ">
                                <div class="small_text">$</div>
                                <input type="text" min="0" name="rent1" class="border-bottom border-0 footer_field responsive_input bg-transparent border outline-none form-control">
                            </div>

                            <div class="d-flex ">
                                <div class="small_text">$</div>
                                <input type="text" min="0" name="rent1" class="border-bottom border-0 footer_field responsive_input bg-transparent border outline-none form-control">
                            </div>

                            <div class="d-flex ">
                                <div class="small_text">$</div>
                                <input type="text" min="0" name="rent1" class="border-bottom border-0 footer_field responsive_input bg-transparent border outline-none form-control">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="text-center">Average monthly</div>
                            <div>
                                <input type="text" min="0"  name="rent1" class="border-bottom border-0 footer_field responsive_input bg-transparent border outline-none form-control">
                            </div>
                            <div>
                                <input type="text" min="0"  name="rent1" class="border-bottom border-0 footer_field responsive_input bg-transparent border outline-none form-control">
                            </div>
                            <div>
                                <input type="text" min="0"  name="rent1" class="border-bottom border-0 footer_field responsive_input bg-transparent border outline-none form-control">
                            </div>
                            <div>
                                <input type="text" min="0"  name="rent1" class="border-bottom border-0 footer_field responsive_input bg-transparent border outline-none form-control">
                            </div>
                            <div>
                                <input type="text" min="0"  name="rent1" class="border-bottom border-0 footer_field responsive_input bg-transparent border outline-none form-control">
                            </div>
                            <div>
                                <input type="text" min="0"  name="rent1" class="border-bottom border-0 footer_field responsive_input bg-transparent border outline-none form-control">
                            </div>
                            <div>
                                <input type="text" min="0"  name="rent1" class="border-bottom border-0 footer_field responsive_input bg-transparent border outline-none form-control">
                            </div>
                            <div>
                                <input type="text" min="0"  name="rent1" class="border-bottom border-0 footer_field responsive_input bg-transparent border outline-none form-control">
                            </div>
                            <div>
                                <input type="text" min="0"  name="rent1" class="border-bottom border-0 footer_field responsive_input bg-transparent border outline-none form-control">
                            </div>
                            <div>
                                <input type="text" min="0"  name="rent1" class="border-bottom border-0 footer_field responsive_input bg-transparent border outline-none form-control">
                            </div>

                            <div>
                                <input type="text" min="0"  name="rent1" class="border-bottom border-0 footer_field responsive_input bg-transparent border outline-none form-control">
                            </div>

                            <div>
                                <input type="text" min="0"  name="rent1" class="border-bottom border-0 footer_field responsive_input bg-transparent border outline-none form-control">
                            </div>

                        </div>
                    </div>

                     <div class="pt-2">6. Investment income (Attach a schedule showing gross receipts less cash expenses for each piece of property.)</div>
                     <div class="row ps-lg-3">
                        <div class="col-lg-6">
                             <h6 class="responsive_input">a. Dividends/interest ...........................................................................................................................</h6>
                            <h6 class="responsive_input">b. Rental property income ..................................................................................................................</h6>
                            <h6 class="responsive_input">c. Trust income ...................................................................................................................................</h6>
                            <h6 class="responsive_input">d. Other (specify): ..............................................................................................................................</h6>
                            <div class="">7. Income from self-employment, after business expenses for all businesses.....</div>

                        </div>
                        <div class="col-lg-3">
                             <div class="d-flex ">
                                <div class="small_text">$</div>
                                <input type="text" min="0" name="rent1" class="border-bottom border-0 footer_field responsive_input bg-transparent border outline-none form-control">
                            </div>

                            <div class="d-flex ">
                                <div class="small_text">$</div>
                                <input type="text" min="0" name="rent1" class="border-bottom border-0 footer_field responsive_input bg-transparent border outline-none form-control">
                            </div>

                            <div class="d-flex ">
                                <div class="small_text">$</div>
                                <input type="text" min="0" name="rent1" class="border-bottom border-0 footer_field responsive_input bg-transparent border outline-none form-control">
                            </div>

                            <div class="d-flex ">
                                <div class="small_text">$</div>
                                <input type="text" min="0" name="rent1" class="border-bottom border-0 footer_field responsive_input bg-transparent border outline-none form-control">
                            </div>
                            <div class="d-flex ">
                                <div class="small_text">$</div>
                                <input type="text" min="0" name="rent1" class="border-bottom border-0 footer_field responsive_input bg-transparent border outline-none form-control">
                            </div>
                        </div>
                        <div class="col-lg-3">
                             <div> <input type="text" min="0"  name="rent1" class="border-bottom border-0 footer_field responsive_input bg-transparent border outline-none form-control">  </div>
                            <div> <input type="text" min="0"  name="rent1" class="border-bottom border-0 footer_field responsive_input bg-transparent border outline-none form-control">  </div>
                            <div> <input type="text" min="0"  name="rent1" class="border-bottom border-0 footer_field responsive_input bg-transparent border outline-none form-control">  </div>
                            <div> <input type="text" min="0"  name="rent1" class="border-bottom border-0 footer_field responsive_input bg-transparent border outline-none form-control">  </div>
                            <div> <input type="text" min="0"  name="rent1" class="border-bottom border-0 footer_field responsive_input bg-transparent border outline-none form-control">  </div>
                        </div>
                    </div>
                    <div class="row">
                        <h6 class="d-flex ps-5"> I am the
                            <div class="d-flex ps-2">
                              <div> <input type="radio" name="other_party" class="border-0 table_input "></div>
                               <div class="small_text ps-2">owner/sole proprietor</div>
                           </div>
                            <div class="d-flex ps-2  ">
                              <div> <input type="radio" name="other_party" class="border-0 table_input "></div>
                               <div class="small_text ps-2">business partner</div>
                           </div>
                            <div class="d-flex ps-2  ">
                              <div> <input type="radio" name="other_party" class="border-0 table_input "></div>
                               <div class="small_text ps-2">other (specify state):</div>
                           </div>
                        <input type="text" class="border-0 footer_field w-50 ">
                        </h6>
                        <h6 class="d-flex ps-lg-5">

                            <div class="d-flex   ">
                                <div class="small_text  ">Number of years in this business (specify):</div>
                            </div>
                        <input type="text" class="border-0 footer_field w-75 ">
                        </h6>
                        <h6 class="d-flex ps-lg-5">

                            <div class="d-flex   ">
                                <div class="small_text  ">Name of business (specify):</div>
                            </div>
                        <input type="text" class="border-0 footer_field w-75 ">
                        </h6>
                        <h6 class="d-flex ps-lg-5">

                            <div class="d-flex   ">
                                <div class="small_text  ">Type of business (specify):</div>
                            </div>
                        <input type="text" class="border-0 footer_field w-75 ">
                        </h6>
                        <div class="fw-bold small_text ps-lg-5"> Attach a profit and loss statement for the last two years or a Schedule C from your last federal tax return. Black out your
                            Social Security number. If you have more than one business, provide the information above for each of your businesses.</div>
                            <div class="small_text"> 8. <input type="checkbox" class="mx-2" name=""> <b>Additional income.</b> I received one-time money (lottery winnings, inheritance, etc.) in the last 12 months (specify source and amount): <input type="text" class="border-0 w-25 "></div>
                            <div class="small_text"> 9. <input type="checkbox" class="mx-2" name=""> <b>Change in income.</b> My financial situation has changed significantly over the last 12 months because (specify):<input type="text" class="border-0 w-50 ps-lg-5"></div>
                            <div class="fw-bold small_text">10. Deductions</div>
                            <div class="row ps-lg-5">
                                <div class="col-lg-9">
                                     <h6 class="responsive_input pt-lg-5">a. Required union dues ...............................................................................................................................................................................................</h6>
                                    <h6 class="responsive_input">b. Required retirement payments (not Social Security, FICA, 401(k), or IRA) .........................................................................................................</h6>
                                    <h6 class="responsive_input">c. Medical, hospital, dental, and other health insurance premiums (total monthly amount) ......................................................................................</h6>
                                    <h6 class="responsive_input">d. Child support that I pay for children from other relationships ...............................................................................................................................</h6>
                                    <h6 class="responsive_input">e. Spousal support that I pay by court order from a different marriage <input type="checkbox" name=""> federally tax deductible* ........................................................................</h6>
                                    <h6 class="responsive_input">f. Partner support that I pay by court order from a different domestic partnership ....................................................................................................</h6>
                                    <h6 class="responsive_input">g. Necessary job-related expenses not reimbursed by my employer (attach explanation labeled "Question 10g") ...................................................</h6>

                                </div>

                                <div class="col-lg-3">
                                    <div class="small_tex t">Last month</div>
                                     <div> <input type="text" min="0"  name="rent1" class="border-bottom border-0 footer_field responsive_input bg-transparent border outline-none form-control">  </div>
                                    <div> <input type="text" min="0"  name="rent1" class="border-bottom border-0 footer_field responsive_input bg-transparent border outline-none form-control">  </div>
                                    <div> <input type="text" min="0"  name="rent1" class="border-bottom border-0 footer_field responsive_input bg-transparent border outline-none form-control">  </div>
                                    <div> <input type="text" min="0"  name="rent1" class="border-bottom border-0 footer_field responsive_input bg-transparent border outline-none form-control">  </div>
                                    <div> <input type="text" min="0"  name="rent1" class="border-bottom border-0 footer_field responsive_input bg-transparent border outline-none form-control">  </div>
                                    <div> <input type="text" min="0"  name="rent1" class="border-bottom border-0 footer_field responsive_input bg-transparent border outline-none form-control">  </div>
                                    <div> <input type="text" min="0"  name="rent1" class="border-bottom border-0 footer_field responsive_input bg-transparent border outline-none form-control">  </div>
                                </div>
                            </div>
                            <div class="fw-bold small_text">11. Assets</div>
                            <div class="row ps-lg-5">
                                <div class="col-lg-9">
                                     <h6 class=" pt-lg-5">a. Cash and checking accounts, savings, credit union, money market, and other deposit accounts ..........................................................................</h6>
                                    <h6 class="responsive_input">b. Stocks, bonds, and other assets I could easily sell .................................................................................................................................................</h6>
                                    <h6 class="">c. All other property, <input type="checkbox" name=""> real and  <input type="checkbox" name=""> personal (estimate fair market value minus the debts you owe) .......................................................................</h6>

                                </div>

                                <div class="col-lg-3">
                                    <div class="small_tex t">Total</div>
                                     <div> <input type="text" min="0"  name="rent1" class="border-bottom border-0 footer_field responsive_input bg-transparent border outline-none form-control">  </div>
                                    <div> <input type="text" min="0"  name="rent1" class="border-bottom border-0 footer_field responsive_input bg-transparent border outline-none form-control">  </div>
                                    <div> <input type="text" min="0"  name="rent1" class="border-bottom border-0 footer_field responsive_input bg-transparent border outline-none form-control">  </div>
                                </div>
                                <div class="small_text pt-3">* Check the box if the spousal support order or judgment was executed by the parties and the court before January 1, 2019, or if a court-ordered change
                                    maintains the spousal support payments as taxable income to the recipient and tax deductible to the payor.  </div>
                            </div>
                    </div>
                        @include('layouts.footer10', ['page' => 2])
                     </div>
                </section>
                <section class="section_area pt-5">

                    <div class="row px-lg-5 px-2 py-2 pt-5">
                        <div class="small_text text-end fw-bold">FL-150</div>

                        <div class="col-lg-8 border border-dark">
                            <div class="p-2 border-dark">
                                <div class="">
                                    <div class="d-flex ps-lg-5">
                                        <div class="small_text">PETITIONER:</div>
                                        <div> <input type="text" name="petitioner" class="border-0 table_input "></div>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="d-flex ps-lg-5">
                                        <div class="small_text">RESPONDENT:</div>
                                        <div> <input type="text" name="respondent" class="border-0 table_input "></div>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="d-flex ps-lg-5">
                                        <div class="small_text">OTHER PARENT/PARTY:</div>
                                        <div> <input type="text" name="other_party" class="border-0 table_input "></div>
                                    </div>
                                </div>
                            </div>
                         </div>
                        <div class="col-lg-4 border border-dark">
                            <div class="small_text">CASE NUMBER:</div>
                            <input type="text" name="case_number" class="border-0 table_input w-100">
                        </div>
                    </div>
                    <div class="px-lg-5">

                        <div><b>12. The following people live with me:</b></div>
                        <div class="responsive-table ps-lg-5">
                            <table class="table table-bordered border-dark">
                                <tbody>
                                    <tr>
                                        <td>Name</td>
                                        <td>Age</td>
                                        <td>How the person is related to me (ex: son)</td>
                                        <td>That person's gross monthly income</td>
                                        <td>Pays some of the household expenses?</td>
                                    </tr>
                                    <tr>
                                        <td><div class="d-flex">a. <input type="text" name="ei_doh1" class="border-0 form-control ms-3"></div></td>
                                        <td><input type="text" name="ei_doh1" class="border-0 form-control"></td>
                                        <td><input type="text" name="ei_doh1" class="border-0 form-control"></td>
                                        <td><input type="text" name="ei_doh1" class="border-0 form-control"></td>
                                        <td><input type="checkbox" name="" id="" class="me-2"> Yes <input type="checkbox" name="" class="ms-4 me-2">No</td>
                                    </tr>
                                    <tr>
                                        <td><div class="d-flex">b. <input type="text" name="ei_doh1" class="border-0 form-control ms-3"></div></td>
                                        <td><input type="text" name="ei_doh1" class="border-0 form-control"></td>
                                        <td><input type="text" name="ei_doh1" class="border-0 form-control"></td>
                                        <td><input type="text" name="ei_doh1" class="border-0 form-control"></td>
                                        <td><input type="checkbox" name="" id="" class="me-2"> Yes <input type="checkbox" name="" class="ms-4 me-2">No</td>
                                    </tr>
                                    <tr>
                                        <td><div class="d-flex">c. <input type="text" name="ei_doh1" class="border-0 form-control ms-3"></div></td>
                                        <td><input type="text" name="ei_doh1" class="border-0 form-control"></td>
                                        <td><input type="text" name="ei_doh1" class="border-0 form-control"></td>
                                        <td><input type="text" name="ei_doh1" class="border-0 form-control"></td>
                                        <td><input type="checkbox" name="" id="" class="me-2"> Yes <input type="checkbox" name="" class="ms-4 me-2">No</td>
                                    </tr>
                                    <tr>
                                        <td><div class="d-flex">d. <input type="text" name="ei_doh1" class="border-0 form-control ms-3"></div></td>
                                        <td><input type="text" name="ei_doh1" class="border-0 form-control"></td>
                                        <td><input type="text" name="ei_doh1" class="border-0 form-control"></td>
                                        <td><input type="text" name="ei_doh1" class="border-0 form-control"></td>
                                        <td><input type="checkbox" name="" id="" class="me-2"> Yes <input type="checkbox" name="" class="ms-4 me-2">No</td>
                                    </tr>
                                    <tr>
                                        <td><div class="d-flex">e. <input type="text" name="ei_doh1" class="border-0 form-control ms-3"></div></td>
                                        <td><input type="text" name="ei_doh1" class="border-0 form-control"></td>
                                        <td><input type="text" name="ei_doh1" class="border-0 form-control"></td>
                                        <td><input type="text" name="ei_doh1" class="border-0 form-control"></td>
                                        <td><input type="checkbox" name="" id="" class="me-2"> Yes <input type="checkbox" name="" class="ms-4 me-2">No</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div>13. <b>Average monthly expenses</b> <input type="checkbox" name="" id="" class="ms-3"> stimated expenses   <input type="checkbox" name="" id="" class="ms-3"> Actual expenses     <input type="checkbox" name="" id="" class="ms-3"> Proposed needs</div>
                        section 13 pending
                        <div class="">14. <b> Installment payments and debts not listed above</b></div>
                        <div class="table-responsive ps-lg-5">
                            <table class="table table-bordered border-dark">
                                <tbody>
                                    <tr>
                                        <td>Paid to</td>
                                        <td>For</td>
                                        <td>Amount</td>
                                        <td>Balance</td>
                                        <td>Date of last payment</td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name="account_name2" class="border-0 form-control "></td>
                                        <td><input type="text" name="account_name2" class="border-0 form-control "></td>
                                        <td><div class="d-flex w-100 mx-auto"> <span>$</span><input type="text" name="total_amount6" class="border-0 w-100">  </div></td>
                                        <td><div class="d-flex w-100 mx-auto"> <span>$</span><input type="text" name="total_amount6" class="border-0 w-100">  </div></td>
                                        <td><input type="text" name="account_name2" class="border-0 form-control "></td>
                                   </tr>
                                    <tr>
                                        <td><input type="text" name="account_name2" class="border-0 form-control "></td>
                                        <td><input type="text" name="account_name2" class="border-0 form-control "></td>
                                        <td><div class="d-flex w-100 mx-auto"> <span>$</span><input type="text" name="total_amount6" class="border-0 w-100">  </div></td>
                                        <td><div class="d-flex w-100 mx-auto"> <span>$</span><input type="text" name="total_amount6" class="border-0 w-100">  </div></td>
                                        <td><input type="text" name="account_name2" class="border-0 form-control "></td>
                                   </tr>
                                    <tr>
                                        <td><input type="text" name="account_name2" class="border-0 form-control "></td>
                                        <td><input type="text" name="account_name2" class="border-0 form-control "></td>
                                        <td><div class="d-flex w-100 mx-auto"> <span>$</span><input type="text" name="total_amount6" class="border-0 w-100">  </div></td>
                                        <td><div class="d-flex w-100 mx-auto"> <span>$</span><input type="text" name="total_amount6" class="border-0 w-100">  </div></td>
                                        <td><input type="text" name="account_name2" class="border-0 form-control "></td>
                                   </tr>
                                    <tr>
                                        <td><input type="text" name="account_name2" class="border-0 form-control "></td>
                                        <td><input type="text" name="account_name2" class="border-0 form-control "></td>
                                        <td><div class="d-flex w-100 mx-auto"> <span>$</span><input type="text" name="total_amount6" class="border-0 w-100">  </div></td>
                                        <td><div class="d-flex w-100 mx-auto"> <span>$</span><input type="text" name="total_amount6" class="border-0 w-100">  </div></td>
                                        <td><input type="text" name="account_name2" class="border-0 form-control "></td>
                                   </tr>
                                    <tr>
                                        <td><input type="text" name="account_name2" class="border-0 form-control "></td>
                                        <td><input type="text" name="account_name2" class="border-0 form-control "></td>
                                        <td><div class="d-flex w-100 mx-auto"> <span>$</span><input type="text" name="total_amount6" class="border-0 w-100">  </div></td>
                                        <td><div class="d-flex w-100 mx-auto"> <span>$</span><input type="text" name="total_amount6" class="border-0 w-100">  </div></td>
                                        <td><input type="text" name="account_name2" class="border-0 form-control "></td>
                                   </tr>
                                    <tr>
                                        <td><input type="text" name="account_name2" class="border-0 form-control "></td>
                                        <td><input type="text" name="account_name2" class="border-0 form-control "></td>
                                        <td><div class="d-flex w-100 mx-auto"> <span>$</span><input type="text" name="total_amount6" class="border-0 w-100">  </div></td>
                                        <td><div class="d-flex w-100 mx-auto"> <span>$</span><input type="text" name="total_amount6" class="border-0 w-100">  </div></td>
                                        <td><input type="text" name="account_name2" class="border-0 form-control "></td>
                                   </tr>
                                </tbody>
                            </table>
                        </div>
                        <div>15. <b>Attorney fees</b> (This information is required if either party is requesting attorney fees):</div>
                        <div class="ps-lg-5">
                            <div>a. To date, I have paid my attorney this amount for fees and costs (specify): $ <input type="text" name="" class="border-0 "> </div>
                            <div>b. The source of this money was (specify): <input type="text" name="" class="border-0 "> </div>
                            <div>c. I still owe the following fees and costs to my attorney (specify total owed): $ <input type="text" name="" class="border-0 "> </div>
                            <div>d. My attorney's hourly rate is (specify): <input type="text" name="" class="border-0 "> </div>
                            {{-- <div>a. Home:</div> --}}

                        </div>
                        <div>I confirm this fee arrangement.</div>
                        <div>Date : <input type="date" name="" id="" class="border-0 border-bottom footer_field"></div>
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" name="" id="" class="border-0 border-bottom footer_field w-100">
                                <div class="small_text text-center">(TYPE OR PRINT NAME)</div>
                            </div>
                            <div class="col-lg-6">
                                <input type="text" name="" id="" class="border-0 border-bottom footer_field w-100">
                                <div class="small_text text-center">(SIGNATURE OF DECLARANT)</div>
                            </div>                        </div>
                        @include('layouts.footer10', ['page' => 3])
                        {{-- @include('layouts.pagination', ['page' => 14 ]) --}}
                    </div>
                </section>



                <section class="section_area pt-5">

                    <div class="row px-lg-5 px-2 py-2 pt-5">
                        <div class="small_text text-end fw-bold">FL-150</div>

                        <div class="col-lg-8 border border-dark">
                            <div class="p-2 border-dark">
                                <div class="">
                                    <div class="d-flex ps-lg-5">
                                        <div class="small_text">PETITIONER:</div>
                                        <div> <input type="text" name="petitioner" class="border-0 table_input "></div>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="d-flex ps-lg-5">
                                        <div class="small_text">RESPONDENT:</div>
                                        <div> <input type="text" name="respondent" class="border-0 table_input "></div>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="d-flex ps-lg-5">
                                        <div class="small_text">OTHER PARENT/PARTY:</div>
                                        <div> <input type="text" name="other_party" class="border-0 table_input "></div>
                                    </div>
                                </div>
                            </div>
                         </div>
                        <div class="col-lg-4 border border-dark">
                            <div class="small_text">CASE NUMBER:</div>
                            <input type="text" name="case_number" class="border-0 table_input w-100">
                        </div>
                    </div>
                    <div class="px-lg-5">

                        <div class="text-center fw-bold">CHILD SUPPORT INFORMATION</div>
                        <div class="text-center fw-bold">(NOTE: Fill out this page only if your case involves child support.)</div>
                        <div class="small_text fw-bold">16. Number of children</div>
                        <div class="ps-lg-5">
                            <div>a. I have (specify number): <input type="text" name="" class="border-0"> children under the age of 18 with the other parent in this case.</div>
                            <div>b. The children spend <input type="text" name="" class="border-0"> percent of their time with me and <input type="text" name="" class="border-0"> percent of their time with the other parent.</div>
                            <div class="ps-lg-3">(If you're not sure about percentage or it has not been agreed on, please describe your parenting schedule here.)</div>
                            <textarea name="" class="ps-lg-3 form-control " id=""  rows="5"></textarea>

                        </div>
                        <div class="small_text fw-bold">17. Children's health-care expenses</div>
                        <div class="ps-lg-5">
                            <div>a. <input type="checkbox" name="" class="border-0"> I do <input type="checkbox" name="" class="border-0"> I do not <span class="ps-lg-3">have health insurance available to me for the children through my job.</span></div>
                            <div>b. Name of insurance company:<input type="text" name="" class="border-0"></div>
                            <div>c. Address of insurance company: </div>
                             <textarea name="" class="ps-lg-3 form-control " id=""  rows="5"></textarea>
                             <div>d. The monthly cost for the children's health insurance is or would be (specify): $<input type="text" name="" class="border-0"></div>
                             <div class="ps-lg-3">(Do not include the amount your employer pays.)</div>

                        </div>
                        <div class="small_text fw-bold">18. Additional expense for the children in this case</div>
                        <div class="row ps-lg-5">
                            <div class="col-lg-9">
                                <div class="responsive_input">a. Childcare so I can work or get job training..................................................................................................................</div>
                                <div class="responsive_input">b. Children's health care not covered by insurance..........................................................................................................</div>
                                <div class="responsive_input">c. Travel expenses for visitation.......................................................................................................................................</div>
                                <div class="responsive_input">d. Children's educational or other special needs (specify below):...................................................................................</div>
                            </div>
                            <div class="col-lg-3">
                                <div class="d-flex ">
                                    <div class="small_text">$</div>
                                    <input type="text" min="0" name="rent1" class="border-bottom border-0 footer_field responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex ">
                                    <div class="small_text">$</div>
                                    <input type="text" min="0" name="rent1" class="border-bottom border-0 footer_field responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex ">
                                    <div class="small_text">$</div>
                                    <input type="text" min="0" name="rent1" class="border-bottom border-0 footer_field responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex ">
                                    <div class="small_text">$</div>
                                    <input type="text" min="0" name="rent1" class="border-bottom border-0 footer_field responsive_input bg-transparent border outline-none form-control">
                                </div>
                            </div>
                        </div>
                        <div class="small_text fw-bold pt-2">19. <b>Special hardships</b>. I ask the court to consider the following special financial circumstances</div>
                        <div class="row ps-lg-5">
                            <div class="col-lg-6">
                                <div>(attach documentation of any item listed here, including court orders):</div>
                                <div class="responsive_input">a. Extraordinary health expenses not included in 18b......................................</div>
                                <div class="responsive_input">b. Major losses not covered by insurance (examples: fire, theft, other
                                    insured loss)...............................................................................................</div>
                                <div class="responsive_input">c.  (1)Expenses for my minor children who are from other relationships and
                                    are living with me..................................................................................</div>
                                    <div class="ps-lg-3">(2) Names and ages of those children (specify):</div>
                            </div>
                            <div class="col-lg-3">
                                <div>Amount per month</div>
                                <div class="d-flex ">
                                    <div class="small_text">$</div>
                                    <input type="text" min="0" name="rent1" class="border-bottom border-0 footer_field responsive_input bg-transparent border outline-none form-control">
                                </div>

                                <div class="d-flex ">
                                    <div class="small_text">$</div>
                                    <input type="text" min="0" name="rent1" class="border-bottom border-0 footer_field responsive_input bg-transparent border outline-none form-control">
                                </div>

                                <div class="d-flex pt-lg-5">
                                    <div class="small_text">$</div>
                                    <input type="text" min="0" name="rent1" class="border-bottom border-0 footer_field responsive_input bg-transparent border outline-none form-control">
                                </div>

                            </div>
                            <div class="col-lg-3">
                                <div>For how many months?</div>
                                <div class=""> <input type="text" min="0" name="rent1" class="border-bottom border-0 footer_field responsive_input bg-transparent border outline-none form-control"> </div>
                                <div class=""> <input type="text" min="0" name="rent1" class="border-bottom border-0 footer_field responsive_input bg-transparent border outline-none form-control"> </div>
                                <div class="pt-lg-5"> <input type="text" min="0" name="rent1" class="border-bottom border-0 footer_field responsive_input bg-transparent border outline-none form-control"> </div>
                            </div>
                            <textarea name="" id="" class="form-control" rows="4"></textarea>
                        </div>
                        <div class="row ps-lg-5">
                            <div class="col-lg-6 ps-lg-4">
                                <div class="responsive_input">(3) Child support I receive for those children...............................................</div>

                            </div>
                            <div class="col-lg-3">
                                <div class="d-flex ">
                                    <div class="small_text">$</div>
                                    <input type="text" min="0" name="rent1" class="border-bottom border-0 footer_field responsive_input bg-transparent border outline-none form-control">
                                </div>
                            </div>
                            <div>The expenses listed in a, b, and c create an extreme financial hardship because (explain):</div>
                            <textarea name="" id="" class="form-control" rows="4"></textarea>

                        </div>
                        <div>20. <b>Other information I want the court to know concerning support in my case (specify):</b></div>
                        <textarea name="" id="" class="form-control ms-lg-4" rows="4"></textarea>

                        @include('layouts.footer10', ['page' => 4])
                        {{-- @include('layouts.pagination', ['page' => 14 ]) --}}
                    </div>
                </section>
            </form>
        </div>
    </div>
</body>
</html>
