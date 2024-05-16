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
            <form action="{{ route('form11.submit') }}" method="post">
                @csrf
                <section class="section_area">
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show">{{ session('success') }} <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <div class="row  px-lg-5 px-2   pt-2">
                        <div class="small_text text-end fw-bold">FL-160</div>
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

                    </div>
                </section>
            </form>
        </div>
    </div>
</body>
</html>
