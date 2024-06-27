{{-- cc320.pdf --}}
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

        .top:focus {
            border-bottom: none !important;
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

        .tdata input:focus {
            border-bottom: none !important;
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
    <div class="container-fluid   py-1 py-lg-3 overflow-x-hidden">
        <form action="{{ route('form6.submit') }}"   method="post">
            @csrf
            <div class="container bg_color p-lg-3 p-1  ">
                    <section class="section_area row p-5" id="first_section">
                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show">{{ session('success') }} <button
                                    type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                        <div class="col-md-4 border border-2 border-dark pb-5 border-start-0 border-end-0 ">
                            <h4 class="fw-bold text-center">STATE OF MICHIGAN</h4>
                            <div class="d-flex">
                                <input type="text" class="border-0 border-bottom responsive_input   col-5" name="Circuit">
                                <h4 class="fw-bold col text-end ">  JUDICIAL CIRCUIT</h4>
                            </div>
                        </div>
                        <div class="col-md-4 col-md-4 border border-2 border-dark py-2">
                            <h4 class="fw-bold">DOMESTIC RELATIONS VERIFIED</h4>
                            <h4 class="fw-bold">FINANCIAL INFORMATION FORM</h4>
                        </div>
                        <div class="col-md-4 border border-2 border-start-0 border-end-0 border-dark">
                            <h4 class="fw-bold">CASE NO. and JUDGE</h4>
                            <input type="number" name="CASE NO" class="border-0 border-bottom responsive_input">
                            <input type="number" name="Judge" class="border-0 border-bottom responsive_input">
                        </div>

                        <div class="row mt-4">
                            <div class="col-md-5 border border-dark border-1 px-0 ">
                                <div class="fs-6">Plaintiff’s name</div>
                                <input type="text" class="border-0 top" name="Plaintiffs name">
                            </div>
                            <div class="col-md-2 text-center my-auto">
                                <div class="fw-bold">V</div>
                            </div>
                            <div class="col-md-5 border border-dark border-1 px-0 ">
                                <div class="fs-6">Defendant’s name</div>
                                <input type="text" class="border-0 top" name="Defendants name">
                            </div>
                        </div>

                        <ul class="mt-3 px-4 pe-5">
                            <li class="fw-bolder py-1 "> Failure to complete and serve this form may result in sanctions
                                consistent with MCR 2.313.</li>
                            <li class="fw-bolder py-1"> Each party must complete a copy of this form and sign page 7 before
                                a notary public. All the applicable sections must be completed.</li>
                            <li class="fw-bolder py-1"> You must serve a completed copy of your form on the other party
                                within 28 days after the date of service of defendant’s initial responsive pleading to the
                                complaint that started the case</li>
                            <li class="fw-bolder py-1"> Completing this form is not necessary if you and the other party
                                agreed in writing not to exchange the form, or if a
                                settlement agreement, consent judgment, or other final order that resolves the case has been
                                signed by you and the
                                other party at the time the case is filed.</li>
                            <li class="fw-bolder py-1">A proof of service must be filed with the court after you have served
                                this form on the other party.</li>
                            <li class="fw-bolder py-1">Do not file this document with the court.</li>
                        </ul>
                        <div class="mt-2"><span class="fw-bold h4">Note:</span> If you are a victim of domestic violence,
                            sexual assault, or stalking by another party in this case, you may leave out
                            any information which might lead to the location of where you live or work, or where a minor
                            child (if any) may be found.
                            If you are self-represented and do not provide your address because of domestic violence, you
                            will need to give this
                            form to the other party at the first scheduled matter, or as otherwise directed by the court or
                            agreed to by the parties. If
                            you leave out information, you must explain the reasons why in a sworn affidavit and file it
                            with the court by the date this
                            disclosure form is due to the other party.</div>

                        <div>
                            <div class="my-3">
                                <div class="border border-1 border-dark" style="width:278px">
                                    <h4 class="fw-bold m-0 p-0 px-1">PERSONAL INFORMATION</h4>
                                </div>
                            </div>

                            <div class="row px-2">

                                <div class="col-md-7">
                                    <div class="d-flex">
                                        <div class="pe-1 my-auto">Name:</div>
                                        <div class="w-100">
                                            <input type="text" name="Name"
                                                class="w-100 border-none border-0 border-bottom  shadow-none my-auto">
                                            <div class="text-sm fs-6">First, middle, and last name</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="d-flex">
                                        <div class="px-2 my-auto ">Phone:</div>
                                        <input type="number" name="Phone"
                                            class="w-100 border-none border-0 border-bottom  shadow-none my-auto">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="d-flex">
                                        <div class="pe-1 my-auto">Address:</div>
                                        <div class="w-100">
                                            <input type="text" name="Address"
                                                class="w-100 border-none border-0 border-bottom  shadow-none my-auto">
                                            <div class="text-sm fs-6">
                                                <div class="row">
                                                    <div class="col-4">Street</div>
                                                    <div class="col-3">City</div>
                                                    <div class="col-3">State</div>
                                                    <div class="col-2">Zip</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="d-flex">
                                        <div class="my-auto" style="width:150px;">Date of birth:</div>
                                        <input type="date" name="Date of birth"
                                            class="w-100 border-none border-0 border-bottom  shadow-none my-auto">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex">
                                        <div class=" my-auto " style="width:350px;">Social Security Number:</div>
                                        <input type="text" name="Social Security Number"
                                            class="w-100 border-none border-0 border-bottom  shadow-none my-auto">
                                    </div>
                                </div>

                                <div class="col-md-6 pt-2">
                                    <div class="d-flex">
                                        <div class="my-auto" style="width:650px;">Driver's license number and state:</div>
                                        <input type="text" name="Drivers license number and state"
                                            class="w-100 border-none border-0 border-bottom  shadow-none my-auto">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="my-3">
                                <div class="border border-1 border-dark" style="width:310px;">
                                    <h4 class="fw-bold m-0 p-0 px-1">EMPLOYMENT INFORMATION</h4>
                                </div>
                            </div>
                            <div class="row px-2">
                                <div>Provide information for each source of employment income. <span class="fs-6">Use
                                        additional sheets if necessary.</span></div>
                                <div class="col-md-10 pt-1">
                                    <div class="d-flex">
                                        <div class="my-auto" style="width:170px;">Employer name:</div>
                                        <input type="text" name="Employer name"
                                            class="w-100 border-none border-0 border-bottom  shadow-none my-auto">
                                    </div>
                                </div>
                                <div class="col-md-2 pt-1 text-end">
                                    <input type="checkbox" name="self_employed">
                                    <label>Self Employed</label>
                                </div>

                                <div class="col-md-12 pt-1">
                                    <div class="d-flex d_sm_block">
                                        <div class="pe-1 my-auto" style="width:185px"> Employer Address:</div>
                                        <div class="w-100">
                                            <input type="text" name="Employer address"
                                                class="w-100 border-none border-0 border-bottom  shadow-none my-auto">
                                            <div class="text-sm fs-6">
                                                <div class="row">
                                                    <div class="col-4">Street</div>
                                                    <div class="col-3">City</div>
                                                    <div class="col-3">State</div>
                                                    <div class="col-2">Zip</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-5">
                                    <div class="d-flex d_sm_block">
                                        <div class=" my-auto ">Occupation:</div>
                                        <input type="text" name="Occupation"
                                            class="w-100 border-none border-0 border-bottom  shadow-none my-auto">
                                    </div>
                                </div>

                                <div class="col-md-7">
                                    <div class="d-flex d_sm_block">
                                        <div class="my-auto" style="width:490px;">Professional license, type and no.:
                                        </div>
                                        <input type="text" name="Professional license type and no"
                                            class="w-100 border-none border-0 border-bottom  shadow-none my-auto">
                                    </div>
                                </div>


                                <div class="col-md-7 pt-1">
                                    <div class="d-flex d_sm_block">
                                        <div class="my-auto responsive_input" style="width:395px;">Gross income <span class="fs-6">
                                                (before taxes and other deductions)</span>:</div>
                                        <span>$</span>
                                        <input type="number" name="Gross income before taxes and other deductions"
                                            class="w-50 border-none border-0 border-bottom  shadow-none my-auto">
                                    </div>
                                </div>

                                <div class="col-md-5 pt-2">
                                    <div class="d-flex gap-4 d_sm_block ">
                                        <div>
                                            <input type="checkbox" name="weekly" value="weekly">
                                            <label for="">weekly</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" name="biweekly" value="biweekly">
                                            <label for="">biweekly</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" name="bimonthly" value="bimonthly">
                                            <label for="">bimonthly</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" name="monthly" value="monthly">
                                            <label for="">monthly</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 pt-2">
                                    <div class="d-flex d_sm_block">
                                        <div class="responsive_input my-auto" style="width:595px;">Hourly pay rate (including shift premium and cost of living adjustment):</div>
                                        <span>$</span>
                                        <input type="number" name="Hourly pay rate including shift premium and cost of living adjustment" style="width:200px;" class="responsive_input border-none border-0 border-bottom  shadow-none my-auto">
                                    </div>
                                </div>

                                <div class="col-md-6 pt-2">
                                    <div class="d-flex d_sm_block">
                                        <div class="responsive_input my-auto" style="width:595px;">Total regular hours worked per pay period:</div>
                                        <input type="text" name="Total regular hours worked per pay period" style="width:200px;" class="responsive_input border-none border-0 border-bottom  shadow-none my-auto">
                                    </div>
                                </div>
                                <div class="col-md-6 pt-2">
                                    <div class="d-flex d_sm_block">
                                        <div class="responsive_input my-auto" style="width:595px;">Average overtime hours for past 12 months:</div>
                                        <input type="text" name="Average overtime hours for past 12 months" style="width:200px;" class="responsive_input border-none border-0 border-bottom  shadow-none my-auto">
                                    </div>
                                </div>

                                <div class="col-md-12 pt-2">
                                    <div class="d-flex d_sm_block">
                                        <div class="responsive_input my-auto" style="width:660px;">Total amount of owner’s draws during the
                                            past twelve months (if self-employed):</div>
                                        <input type="number" name="Total amount of owners draws during the past twelve months if selfemployed" style="width:300px;"
                                            class="responsive_input border-none border-0 border-bottom  shadow-none my-auto">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="border border-1  mt-3 border-start-0 border-end-0 border-dark" style="padding:1px;">
                        </div>
                        <div class="fs-6">
                            <div>Approved, SCAO</div>
                            <div>Form CC 320, Rev. 6/22</div>
                            <div>MCR 3.206</div>
                            <div><span>Page 1 of </span><span> <input type="text" name="page" style="width:20px;"
                                        class="border-none border-0 border-bottom  shadow-none "></span></div>
                        </div>
                    </section>
                    <section class="section_area row p-5" id="second_section">
                        <div class="col-md-6">
                            <div class="h5 mb-0">Domestic Relations Verified Financial Information Form (6/22)</div>
                            <div class="fs-6"><span>Page 2 of </span><span> <input type="text" name="Page 1 of#1"
                                        style="width:20px;"
                                        class="border-none border-0 border-bottom  shadow-none "></span></div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex justify-content-end">
                                <div>Case No.</div>
                                <input type="text" name="CASE NO#1"
                                    class="border-none border-0 border-bottom  shadow-none my-auto">
                            </div>
                        </div>
                        <div class="col-md-12 pt-2">
                            <div>Employment benefits:</div>
                        </div>
                        <div class="col-md-12 d-flex gap-5 mt-3 px-4 d_sm_block">
                            <div>
                                <input type="checkbox" name="health insurance" value="health insurance">
                                <label for="">health insurance</label>
                            </div>
                            <div>
                                <input type="checkbox" name="vision insurance" value="vision insurance">
                                <label for="">vision insurance</label>
                            </div>
                            <div>
                                <input type="checkbox" name="dental insurance" value="dental insurance">
                                <label for="">dental insurance</label>
                            </div>
                            <div>
                                <input type="checkbox" name="life insurance" value="life insurance">
                                <label for="">life insurance</label>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex  mt-3 px-4">
                            <div style="width:120px">
                                <input type="checkbox" name="retirement" value="retirement">
                                <label for="">retirement</label>
                            </div>
                            <div class="w-100"><input type="text"
                                    class="border-none border-0 border-bottom  shadow-none w-100" name="ret_val"></div>
                        </div>
                        <div class="col-md-12 d-flex  mt-3 px-4">
                            <div>
                                <input type="checkbox" name="car allowance" value="car allowance">
                                <label for="">car allowance</label>
                            </div>
                            <div class="w-25"><input type="number" name="Amount" class="border-none border-0 border-bottom  shadow-none w-100">
                                <div class="fs-6">Amount</div>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex  mt-3 px-4">
                            <div style="width:280px">
                                <input type="checkbox" name="expense reimbursements" value="expense reimbursements">
                                <label for="">expense reimbursements</label>
                            </div>
                            <div class="w-100"><input type="text"
                                    class="border-none border-0 border-bottom  shadow-none w-100" name="undefined_2">
                            </div>
                        </div>
                        <div class="col-md-12 d-flex  mt-3 px-4">
                            <div style="width:70px">
                                <input type="checkbox" name="other" value="other">
                                <label for="">other</label>
                            </div>
                            <div class="w-100"><input type="Text4"
                                    class="border-none border-0 border-bottom  shadow-none w-100" name="Text4"></div>
                        </div>
                        <div class="col-md-12  mt-3 ">
                            <div>If unemployed and not receiving unemployment or worker’s compensation benefits, or working
                                part-time only, provide the
                                following information regarding your last full-time employer:
                                <span class="ms-5">
                                    <input type="checkbox" name="Never employed fulltime" value="Never employed fulltime">
                                    <label for="">Never employed full-time</label>
                                </span>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="d-flex d_sm_block">
                                <div class="pe-1 my-auto" style="width:450px;">Name of last full-time employer:</div>
                                <div class="w-100">
                                    <input type="text" name="Name of last fulltime employer"
                                        class="w-100 border-none border-0 border-bottom  shadow-none my-auto">
                                    <div class="text-sm fs-6">Name</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="d-flex d_sm_block">
                                <div class="px-lg-2 my-auto ">Position:</div>
                                <input type="text" name="Position"
                                    class="w-100 border-none border-0 border-bottom  shadow-none my-auto">
                            </div>
                        </div>

                        <div class="col-md-12 pt-2">
                            <div class="d-flex d_sm_block">
                                <div class="pe-1 my-auto" style="width:385px"> Address of last full-time employer:</div>
                                <div class="w-100">
                                    <input type="text" name="Address of last fulltime employer" class="w-100 border-none border-0 border-bottom  shadow-none my-auto">
                                    <div class="text-sm fs-6">
                                        <div class="row">
                                            <div class="col-4">Street</div>
                                            <div class="col-3">City</div>
                                            <div class="col-3">State</div>
                                            <div class="col-2">Zip</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex d_sm_block">
                                <div class="pe-1 my-auto" style="width:430px">Last day employed full-time:</div>
                                <div class="w-100">
                                    <input type="date" name="Last day employed fulltime"
                                        class="w-100 border-none border-0 border-bottom  shadow-none my-auto">
                                    <div class="text-sm fs-6">Date</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex d_sm_block">
                                <div class="px-lg-2 my-auto" style="width:390px">Length of time employed:</div>
                                <input type="text" name="Length of time employed" class="w-100 border-none border-0 border-bottom  shadow-none my-auto">
                            </div>
                        </div>
                        <div class="col-md-12 pt-2">
                            <div class="d-flex d_sm_block">
                                <div class="pe-1 my-auto responsive_input" style="width:570px"> Reason for leaving last full-time
                                    employment:</div>
                                <div class="w-100">
                                    <input type="text" name="Reason for leaving last fulltime employment" class="w-100 border-none border-0 border-bottom  shadow-none my-auto">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 pt-2">
                            <div class="d-flex d_sm_block">
                                <div class="pe-1 my-auto responsive_input" style="width:440px;"> Gross earnings per pay period (earnings
                                    before taxes):</div>
                                <span>$</span>
                                <input type="text" name="Gross earnings per pay period earnings before taxes" class="border-none border-0 border-bottom shadow-none my-auto">
                            </div>
                        </div>

                        <div>
                            <div class="my-3">
                                <div class="border border-1 border-dark" style="width:173px;">
                                    <h4 class="fw-bold m-0 p-0 px-1">OTHER INCOME</h4>
                                </div>
                            </div>

                            <div class="row">
                                <div>Provide monthly income from all other sources.</div>
                                <div class="col-md-4 pt-2">
                                    <div class="d-flex d_sm_block">
                                        <div>Commissions</div>
                                        <input type="text" name="commissions" class="responsive_input border-none border-0 border-bottom  shadow-none my-auto ms-auto">
                                    </div>
                                </div>
                                <div class="col-md-4 pt-2">
                                    <div class="d-flex d_sm_block">
                                        <div>Unemp. Benefits</div>
                                        <input type="text" name="Unemp Benefits 1" class="responsive_input border-none border-0 border-bottom  shadow-none my-auto ms-auto">
                                    </div>
                                </div>
                                <div class="col-md-4 pt-2">
                                    <div class="d-flex d_sm_block">
                                        <div style="width:300px;">Nat’l Guard/Res. Drill</div>
                                        <input type="text" name="Natl GuardRes Drill" class="responsive_input  w-75 border-none border-0 border-bottom  shadow-none my-auto ms-auto">
                                    </div>
                                </div>

                                <div class="col-md-4 pt-2">
                                    <div class="d-flex d_sm_block">
                                        <div>Bonuses</div>
                                        <input type="text" name="bonuses" class="responsive_input border-none border-0 border-bottom  shadow-none my-auto ms-auto">
                                    </div>
                                </div>
                                <div class="col-md-4 pt-2">
                                    <div class="d-flex d_sm_block">
                                        <div>Strike Pay</div>
                                        <input type="text" name="Strike Pay"
                                            class="responsive_input border-none border-0 border-bottom  shadow-none my-auto ms-auto">
                                    </div>
                                </div>
                                <div class="col-md-4 pt-2">
                                    <div class="d-flex d_sm_block">
                                        <div style="width:300px;">Armed Services</div>
                                        <input type="text" name="Armed Services"
                                            class="responsive_input  w-75 border-none border-0 border-bottom  shadow-none my-auto ms-auto">
                                    </div>
                                </div>

                                <div class="col-md-4 pt-2">
                                    <div class="d-flex d_sm_block">
                                        <div>Profit Sharing</div>
                                        <input type="text" name="Profit Sharing 1"
                                            class="responsive_input border-none border-0 border-bottom  shadow-none my-auto ms-auto">
                                    </div>
                                </div>
                                <div class="col-md-4 pt-2">
                                    <div class="d-flex d_sm_block">
                                        <div>SUB Pay</div>
                                        <input type="text" name="Unemp Benefits 3"
                                            class="responsive_input border-none border-0 border-bottom  shadow-none my-auto ms-auto">
                                    </div>
                                </div>
                                <div class="col-md-4 pt-2">
                                    <div class="d-flex d_sm_block">
                                        <div style="width:300px;">Allowance for Rent</div>
                                        <input type="text" name="Allowance for Rent"
                                            class="responsive_input  w-75 border-none border-0 border-bottom  shadow-none my-auto ms-auto">
                                    </div>
                                </div>

                                <div class="col-md-4 pt-2">
                                    <div class="d-flex d_sm_block">
                                        <div>Interest</div>
                                        <input type="text" name="Profit Sharing 2"
                                            class="responsive_input border-none border-0 border-bottom  shadow-none my-auto ms-auto">
                                    </div>
                                </div>
                                <div class="col-md-4 pt-2">
                                    <div class="d-flex d_sm_block">
                                        <div>Sick Benefits</div>
                                        <input type="text" name="Sick Benefits"
                                            class="responsive_input border-none border-0 border-bottom  shadow-none my-auto ms-auto">
                                    </div>
                                </div>
                                <div class="col-md-4 pt-2">
                                    <div class="d-flex d_sm_block">
                                        <div style="width:300px;">Rental Income</div>
                                        <input type="text" name="Rental Income"
                                            class="responsive_input  w-75 border-none border-0 border-bottom  shadow-none my-auto ms-auto">
                                    </div>
                                </div>

                                <div class="col-md-4 pt-2">
                                    <div class="d-flex d_sm_block">
                                        <div>Dividends</div>
                                        <input type="text" name="Profit Sharing 3"
                                            class="responsive_input border-none border-0 border-bottom  shadow-none my-auto ms-auto">
                                    </div>
                                </div>
                                <div class="col-md-4 pt-2">
                                    <div class="d-flex d_sm_block">
                                        <div>Workers’ Comp.</div>
                                        <input type="text" name="Workers Comp"
                                            class="responsive_input border-none border-0 border-bottom  shadow-none my-auto ms-auto">
                                    </div>
                                </div>
                                <div class="col-md-4 pt-2">
                                    <div class="d-flex d_sm_block">
                                        <div style="width:300px;">Spousal Support</div>
                                        <input type="text" name="Spousal Support"
                                            class="responsive_input  w-75 border-none border-0 border-bottom  shadow-none my-auto ms-auto">
                                    </div>
                                </div>

                                <div class="col-md-4 pt-2">
                                    <div class="d-flex d_sm_block">
                                        <div>Annuities</div>
                                        <input type="text" name="Profit Sharing 4"
                                            class="responsive_input border-none border-0 border-bottom  shadow-none my-auto ms-auto">
                                    </div>
                                </div>
                                <div class="col-md-4 pt-2">
                                    <div class="d-flex d_sm_block">
                                        <div>Soc. Sec. Benefits</div>
                                        <input type="text" name="Soc Sec Benefits"
                                            class="responsive_input border-none border-0 border-bottom  shadow-none my-auto ms-auto">
                                    </div>
                                </div>
                                <div class="col-md-4 pt-2">
                                    <div class="d-flex d_sm_block">
                                        <div style="width:300px;">State Disability Asst.</div>
                                        <input type="text" name="State Disability Asst 1"
                                            class="responsive_input  w-75 border-none border-0 border-bottom  shadow-none my-auto ms-auto">
                                    </div>
                                </div>

                                <div class="col-md-4 pt-2">
                                    <div class="d-flex d_sm_block">
                                        <div>Pensions/Longevity</div>
                                        <input type="text" name="PensionsLongevity" class="responsive_input border-none border-0 border-bottom responsive_input shadow-none my-auto ms-auto">
                                    </div>
                                </div>
                                <div class="col-md-4 pt-2">
                                    <div class="d-flex d_sm_block">
                                        <div>VA Benefits</div>
                                        <input type="text" name="VA Benefits" class="responsive_input border-none border-0 border-bottom  shadow-none my-auto ms-auto">
                                    </div>
                                </div>
                                <div class="col-md-4 pt-2">
                                    <div class="d-flex d_sm_block">
                                        <div>F I P</div>
                                        <input type="text" name="State Disability Asst 2" class="responsive_input  w-75 border-none border-0 border-bottom  shadow-none my-auto ms-auto">
                                    </div>
                                </div>

                                <div class="col-md-4 pt-2">
                                    <div class="d-flex d_sm_block">
                                        <div>Deferred Comp/IRA</div>
                                        <input type="text" name="Deferred CompIRA" class="responsive_input border-none border-0 border-bottom  shadow-none my-auto ms-auto">
                                    </div>
                                </div>
                                <div class="col-md-4 pt-2">
                                    <div class="d-flex d_sm_block">
                                        <div>Disability Ins.</div>
                                        <input type="text" name="Disability Ins"
                                            class=" responsive_input border-none border-0 border-bottom  shadow-none my-auto ms-auto">
                                    </div>
                                </div>
                                <div class="col-md-4 pt-2">
                                    <div class="d-flex d_sm_block">
                                        <div>SSI</div>
                                        <input type="text" name="State Disability Asst 3"
                                            class="responsive_input  w-75 border-none border-0 border-bottom  shadow-none my-auto ms-auto">
                                    </div>
                                </div>

                                <div class="col-md-4 pt-2">
                                    <div class="d-flex d_sm_block">
                                        <div>Trust Funds</div>
                                        <input type="text" name="Trust Funds"
                                            class="responsive_input border-none border-0 border-bottom  shadow-none my-auto ms-auto">
                                    </div>
                                </div>
                                <div class="col-md-4 pt-2">
                                    <div class="d-flex d_sm_block">
                                        <div>GI Benefits</div>
                                        <input type="text" name="GI Benefits"
                                            class="responsive_input border-none border-0 border-bottom  shadow-none my-auto ms-auto">
                                    </div>
                                </div>
                                <div class="col-md-4 pt-2">
                                    <div class="d-flex d_sm_block">
                                        <div>Others</div>
                                        <input type="text" name="State Disability Asst 4"
                                            class="responsive_input  w-75 border-none border-0 border-bottom  shadow-none my-auto ms-auto">
                                    </div>
                                </div>

                                <div class="col-md-6 pt-2">
                                    <div>Does anyone pay any living or housing expenses on your behalf?</div>
                                </div>
                                <div class="col-md-6 pt-2 d-flex gap-5">
                                    <div>
                                        <input type="checkbox" name="yes1" value="yes">
                                        <label for="">Yes</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" name="no1" value="no">
                                        <label for="">No</label>
                                    </div>
                                </div>
                                <div class="col-md-12 pt-2">
                                    <div class="px-lg-4 row">
                                        <div class="col-md-8">
                                            <div style="width:705px;" class="responsive_input">
                                                If yes, provide details of the payments including amount per month paid on
                                                your behalf:
                                            </div>
                                        </div>
                                        <div class="col-md-4 text-end">
                                            <input type="text" name="If yes provide details of the payments including amount per month paid on your behalf 1"
                                                class=" w-100 border-none border-0 border-bottom  shadow-none my-auto ms-auto">
                                        </div>
                                        <div class="col-md-12">
                                            <input type="text" name="If yes provide details of the payments including amount per month paid on your behalf 2"
                                                class=" w-100 border-none border-0 border-bottom  shadow-none my-auto ms-auto">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-5 pt-3"><span class="fw-bold h4">Note:</span> Attach your four most recent
                                paycheck stubs, or a statement from your employer(s) of wages and deductions, and
                                year-to-date earnings, and a copy of your last federal and state income tax returns,
                                including all schedules to this form. If
                                self-employed, also attach a copy of your three most recent business tax returns and/or
                                corporate returns.</div>
                    </section>
                    <section class="section_area p-5" id="third_section">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="h5 mb-0">Domestic Relations Verified Financial Information Form (6/22)</div>
                                <div class="fs-6"><span>Page 3 of </span><span> <input type="text" name="Page 1 of#2"
                                            style="width:20px;"
                                            class="border-none border-0 border-bottom  shadow-none "></span></div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex justify-content-end">
                                    <div>Case No.</div>
                                    <input type="number" name="CASE NO#2"
                                        class="border-none border-0 border-bottom  shadow-none my-auto">
                                </div>
                            </div>

                            <div class="col-md-12 pt-2">
                                <div class="my-3">
                                    <div class="border border-1 border-dark" style="width:233px;">
                                        <h4 class="fw-bold m-0 p-0 px-1">ASSET INFORMATION</h4>
                                    </div>
                                </div>
                                <div>Provide asset information for divorce, separate maintenance, and annulment cases only
                                    (DO and DM case types).</div>
                                <div class="fw-bold text-decoration-underline">Real Property</div>
                            </div>
                            <div class="col-md-12 pt-2">
                                <span>Provide the following information for any real estate in which you own an
                                    interest.</span><span class="fs-6"> Use additional sheets if necessary.</span>
                            </div>
                            <div class="col-md-12 pt-2">
                                <div class="d-flex">
                                    <div class="my-auto" style="width: 205px;">Address of property:</div>
                                    <div class="w-100">
                                        <input type="text" name="Address of property" class="w-100 border-none border-0 border-bottom  shadow-none my-auto">
                                        <div class="text-sm fs-6">
                                            <div class="row">
                                                <div class="col-4">Street</div>
                                                <div class="col-3">City</div>
                                                <div class="col-3">State</div>
                                                <div class="col-2">Zip</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 pt-2">
                                <div class="d-flex">
                                    <div class="pe-1 my-auto" style="width: 245px">Date of purchase:</div>
                                    <div class="w-100">
                                        <input type="date" name="Date of purchase" class="w-100 border-none border-0 border-bottom shadow-none my-auto">
                                        <div class="text-sm fs-6">Date</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 pt-2">
                                <div class="d-flex">
                                    <div class="pe-1 my-auto" style="width: 245px">Estimated value:</div>
                                    <span>$</span>
                                    <input type="number" name="Estlmated value"
                                        class="w-100 border-none border-0 border-bottom  shadow-none my-auto">
                                </div>
                            </div>
                            <div class="col-md-4 pt-2">
                                <div class="d-flex">
                                    <div class="pe-1 my-auto">SEV:</div>
                                    <span>$</span>
                                    <input type="number" name="SEV"
                                        class="w-100 border-none border-0 border-bottom  shadow-none my-auto">
                                </div>
                            </div>
                            <div class="col-md-12 pt-2">
                                <div class="d-flex">
                                    <div class="pe-1 my-auto" style="width:295px">Balance on mortgage/land contract:</div>
                                    <span>$</span>
                                    <input type="number" name="Balance on mortgageland contract" class="border-none border-0 border-bottom  shadow-none my-auto">
                                </div>
                            </div>
                            <div class="col-md-6 pt-4">
                                <div class="d-flex">
                                    <div class="pe-1 my-auto" style="width:200px">Monthly payment:</div>
                                    <span>$</span>
                                    <input type="number" name="Monthly payment" class="w-75 border-none border-0 border-bottom  shadow-none my-auto">
                                </div>
                            </div>
                            <div class="col-md-6 pt-4">
                                <div class="d-flex">
                                    <div class="pe-1 my-auto" style="width:265px">The monthly payment includes:</div>
                                    <div class="px-2">
                                        <input type="checkbox" name="taxes" value="taxes">
                                        <label for="">taxes.</label>
                                    </div>
                                    <div class="px-4">
                                        <input type="checkbox" name="insurance" value="insurance">
                                        <label for="">insurance.</label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 pt-2">
                                <div class="d-flex">
                                    <div class="pe-1 my-auto" style="width:155px;">Name of lender:</div>
                                    <input type="text" name="Name of lender"
                                        class="w-100 border-none border-0 border-bottom  shadow-none my-auto">
                                </div>
                            </div>
                            <div class="col-md-12 pt-2">
                                <div class="d-flex">
                                    <div class="pe-1 my-auto" style="width: 290px">Property is titled as follows:</div>
                                    <div class="w-100">
                                        <input type="text" name="Property is titled as follows"
                                            class="w-100 border-none border-0 border-bottom  shadow-none my-auto">
                                        <div class="text-sm fs-6">Name(s) and specific ownership interest in property</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 pt-2">
                                <div>
                                    <input type="checkbox" name="Primary residence" value="Primary residence">
                                    <label for="">Primary residence</label>
                                </div>
                            </div>
                            <div class="col-md-4 pt-2">
                                <div>
                                    <input type="checkbox" name="undefined _3" value="Other">
                                    <label for="">Other</label>
                                    <input type="text" name="Other_2"
                                        class="border-none border-0 border-bottom  shadow-none my-auto">
                                </div>
                            </div>
                            <div class="col-md-6 pt-2"></div>
                            <div class="col-md-6 pt-2">
                                <div class="d-flex">
                                    <div class="pe-1 my-auto" style="width:735px">Balance of equity loan or line of
                                        credit:</div>
                                    <span>$</span>
                                    <input type="number" name="Balance of equity loan or line of credit"
                                        class="w-100 border-none border-0 border-bottom  shadow-none my-auto">
                                </div>
                            </div>
                            <div class="col-md-6 pt-2">
                                <div class="d-flex">
                                    <div class="pe-1 my-auto" style="width:250px">Monthly payment:</div>
                                    <span>$</span>
                                    <input type="number" name="Monthly payment_2"
                                        class="w-100 border-none border-0 border-bottom  shadow-none my-auto">
                                </div>
                            </div>

                            <div class="col-md-12 pt-2">
                                <div class="d-flex">
                                    <div class="pe-1 my-auto" style="width:570px;">Name of lender for equity loan or line
                                        of credit:</div>
                                    <input type="text" name="Name of lender for equity loan or line of credit"
                                        class="w-100 border-none border-0 border-bottom  shadow-none my-auto">
                                </div>
                            </div>
                            <div class="col-md-12 py-3">
                                <div class="fw-bold text-decoration-underline">Financial Accounts</div>
                                <div class="pt-4">
                                    <div>List all financial accounts including, but not limited to, bank, credit union, CDs,
                                        stocks, annuities, IRAs, 401(k), 403(b), trust,
                                        Michigan Education Savings Program (MESP), and health savings accounts in which you
                                        have an interest <span class="float-end fs-6">Use additional
                                            sheets if necessary</span></div>
                                </div>
                            </div>
                            <div class="col-md-12 pt-3 table-responsive">
                                <table class="table-bordered  border border-dark border-2 w-100">
                                    <tr class="fw-bold">
                                        <td style="width:600px;">
                                            <div class="d-flex tdata">
                                                <div style="width:175px;">Type of account</div>
                                                <input type="text" name="Type of account"
                                                    class="w-100 border-none border-0 shadow-none my-auto ">
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div>Current balance</div>
                                            <div>(before taxes)</div>
                                        </td>
                                        <td class="text-center">
                                            <div>Balance 90 days before</div>
                                            <div>current balance</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width:600px;">
                                            <div class="d-flex tdata">
                                                <div style="width:115px;">Account no.</div>
                                                <input type="text" name="Account no"
                                                    class="w-100 border-none border-0 shadow-none my-auto ">
                                            </div>
                                        </td>
                                        <td rowspan="3">
                                            <div class="tdata d-flex">
                                                <div>$</div><input type="number" name="as of"
                                                    class="w-100 border-none border-0 shadow-none my-auto ">
                                            </div>
                                            <div class="tdata d-flex"><span style="width:50px;">as of</span><input
                                                    type="text" name="Texts"
                                                    class="w-100 border-none border-0 shadow-none my-auto "> </div>

                                        </td>
                                        <td rowspan="3">
                                            <div class="tdata">
                                                <div>$</div><input type="number" name="filL17"
                                                    class="w-100 border-none border-0 shadow-none my-auto ">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width:600px;">
                                            <div class="d-flex tdata">
                                                <div style="width:210px;">Name of institution</div>
                                                <input type="text" name="Name of institution"
                                                    class="w-100 border-none border-0 shadow-none my-auto ">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width:600px;">
                                            <div class="d-flex tdata">
                                                <div style="width:210px;">Name on account</div>
                                                <input type="text" name="Name on account"
                                                    class="w-100 border-none border-0 shadow-none my-auto ">
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-md-12 pt-4 table-responsive">
                                <table class="table-bordered  border border-dark border-2 w-100">
                                    <tr class="fw-bold">
                                        <td style="width:600px;">
                                            <div class="d-flex tdata">
                                                <div style="width:175px;">Type of account</div>
                                                <input type="text" name="Type of account_2"
                                                    class="w-100 border-none border-0 shadow-none my-auto ">
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div>Current balance</div>
                                            <div>(before taxes)</div>
                                        </td>
                                        <td class="text-center">
                                            <div>Balance 90 days before</div>
                                            <div>current balance</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width:600px;">
                                            <div class="d-flex tdata">
                                                <div style="width:115px;">Account no.</div>
                                                <input type="text" name="Account no_2"
                                                    class="w-100 border-none border-0 shadow-none my-auto ">
                                            </div>
                                        </td>
                                        <td rowspan="3">
                                            <div class="tdata d-flex">
                                                <div>$</div><input type="number" name="as of_2"
                                                    class="w-100 border-none border-0 shadow-none my-auto ">
                                            </div>
                                            <div class="tdata d-flex"><span style="width:50px;">as of</span><input
                                                    type="text" name="Text6"
                                                    class="w-100 border-none border-0 shadow-none my-auto "> </div>

                                        </td>
                                        <td rowspan="3">
                                            <div class="tdata ">
                                                <div>$</div><input type="text" name="fill_23"
                                                    class="w-100 border-none border-0 shadow-none my-auto ">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width:600px;">
                                            <div class="d-flex tdata">
                                                <div style="width:210px;">Name of institution</div>
                                                <input type="text" name="Name of institution_2"
                                                    class="w-100 border-none border-0 shadow-none my-auto ">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width:600px;">
                                            <div class="d-flex tdata">
                                                <div style="width:210px;">Name on account</div>
                                                <input type="text" name="Name on account 2"
                                                    class="w-100 border-none border-0 shadow-none my-auto ">
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-md-12 pt-4 table-responsive">
                                <table class="table-bordered  border border-dark border-2 w-100">
                                    <tr class="fw-bold">
                                        <td style="width:600px;">
                                            <div class="d-flex tdata">
                                                <div style="width:175px;">Type of account</div>
                                                <input type="text" name="Type of account_3"
                                                    class="w-100 border-none border-0 shadow-none my-auto ">
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div>Current balance</div>
                                            <div>(before taxes)</div>
                                        </td>
                                        <td class="text-center">
                                            <div>Balance 90 days before</div>
                                            <div>current balance</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width:600px;">
                                            <div class="d-flex tdata">
                                                <div style="width:115px;">Account no.</div>
                                                <input type="text" name="Account no_3"
                                                    class="w-100 border-none border-0 shadow-none my-auto ">
                                            </div>
                                        </td>
                                        <td rowspan="3">
                                            <div class="tdata d-flex">
                                                <div>$</div><input type="number" name="as of_3"
                                                    class="w-100 border-none border-0 shadow-none my-auto ">
                                            </div>
                                            <div class="tdata d-flex"><span style="width:50px;">as of</span><input
                                                    type="text" name="Text7"
                                                    class="w-100 border-none border-0 shadow-none my-auto "> </div>

                                        </td>
                                        <td rowspan="3">
                                            <div class="tdata ">
                                                <div>$</div><input type="text" name="filL_29"
                                                    class="w-100 border-none border-0 shadow-none my-auto ">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width:600px;">
                                            <div class="d-flex tdata">
                                                <div style="width:210px;">Name of institution</div>
                                                <input type="text" name="Name of institution_3"
                                                    class="w-100 border-none border-0 shadow-none my-auto ">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width:600px;">
                                            <div class="d-flex tdata">
                                                <div style="width:210px;">Name on account</div>
                                                <input type="text" name="Name on account_3"
                                                    class="w-100 border-none border-0 shadow-none my-auto ">
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-md-12 pt-4 table-responsive">
                                <table class="table-bordered  border border-dark border-2 w-100">
                                    <tr class="fw-bold">
                                        <td style="width:600px;">
                                            <div class="d-flex tdata">
                                                <div style="width:175px;">Type of account</div>
                                                <input type="text" name="Type of account_4"
                                                    class="w-100 border-none border-0 shadow-none my-auto ">
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div>Current balance</div>
                                            <div>(before taxes)</div>
                                        </td>
                                        <td class="text-center">
                                            <div>Balance 90 days before</div>
                                            <div>current balance</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width:600px;">
                                            <div class="d-flex tdata">
                                                <div style="width:115px;">Account no.</div>
                                                <input type="text" name="Account no_4"
                                                    class="w-100 border-none border-0 shadow-none my-auto ">
                                            </div>
                                        </td>
                                        <td rowspan="3">
                                            <div class="tdata d-flex">
                                                <div>$</div><input type="number" name="as of_4"
                                                    class="w-100 border-none border-0 shadow-none my-auto ">
                                            </div>
                                            <div class="tdata d-flex"><span style="width:50px;">as of</span><input
                                                    type="text" name="Text8"
                                                    class="w-100 border-none border-0 shadow-none my-auto "> </div>

                                        </td>
                                        <td rowspan="3">
                                            <div class="tdata ">
                                                <div>$</div><input type="text" name="fill_35"
                                                    class="w-100 border-none border-0 shadow-none my-auto ">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width:600px;">
                                            <div class="d-flex tdata">
                                                <div style="width:210px;">Name of institution</div>
                                                <input type="text" name="Name of institution_4"
                                                    class="w-100 border-none border-0 shadow-none my-auto ">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width:600px;">
                                            <div class="d-flex tdata">
                                                <div style="width:210px;">Name on account</div>
                                                <input type="text" name="Name on account_4"
                                                    class="w-100 border-none border-0 shadow-none my-auto ">
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                    </section>
                    <section class="section_area p-5" id="fourth_section">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="h5 mb-0">Domestic Relations Verified Financial Information Form (6/22)</div>
                                <div class="fs-6"><span>Page 4 of </span><span> <input type="text" name="Page 1 of#3"
                                            style="width:20px;"
                                            class="border-none border-0 border-bottom  shadow-none "></span></div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex justify-content-end">
                                    <div>Case No.</div>
                                    <input type="text" name="CASE NO#4"
                                        class="border-none border-0 border-bottom  shadow-none my-auto">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 py-2">
                                <div class="fw-bold text-decoration-underline">Pension</div>
                            </div>
                            <div class="col-md-12 pt-2">
                                <span>List all defined benefit plans that will pay you a monthly benefit at retirement
                                    age.</span>
                                <span class="fs-6">Use additional sheets if necessary.</span>
                            </div>

                            <div class="col-md-12 pt-2">
                                <div class="d-flex">
                                    <div class="pe-1 my-auto" style="width:300px;">Company or employer name:</div>
                                    <input type="text" name="Company or employer name"
                                        class="w-100 border-none border-0 border-bottom  shadow-none my-auto">
                                </div>
                            </div>

                            <div class="col-md-4 pt-2">
                                <div class="d-flex">
                                    <div class="pe-1 my-auto">Lump sum value:</div>
                                    <span>$</span>
                                    <input type="text" name="Lump sum value"
                                        class="border-none border-0 border-bottom  shadow-none my-auto">
                                </div>
                            </div>
                            <div class="col-md-5 pt-2">
                                <div class="d-flex">
                                    <div class="pe-1 my-auto">Estimated monthly payment:</div>
                                    <span>$</span>
                                    <input type="text" name="Estimated monthly payment"
                                        class="border-none border-0 border-bottom  shadow-none my-auto">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="d-flex">
                                    <div class="pe-1 my-auto" style="width:83rem">Earliest date you are eligible to
                                        receive your pension benefit:</div>
                                    <div class="w-100">
                                        <input type="text" name="Earliest date you are eligible to receive your pension benefit"
                                            class="w-75 border-none border-0 border-bottom  shadow-none my-auto">
                                        <div class="text-sm fs-6">Date</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 py-2">
                                <div class="fw-bold text-decoration-underline pb-2">Life Insurance</div>
                            </div>
                            <div class="col-md-12 pt-2">
                                <span>Provide the following information for all life insurance policies in which you have an
                                    interest</span>
                                <span class="fs-6">Use additional sheets if necessary.</span>
                            </div>
                            <div class="col-md-6 pt-2">
                                <div class="d-flex d_sm_block">
                                    <div class="pe-1 my-auto" style="width:300px;">Insurance Company:</div>
                                    <input type="text" name="Insurance Company"
                                        class="w-100 border-none border-0 border-bottom  shadow-none my-auto responsive_input">
                                </div>
                            </div>
                            <div class="col-md-6 pt-2">
                                <div class="d-flex d_sm_block">
                                    <div class="pe-1 my-auto" style="width:300px;">Policy no.:</div>
                                    <input type="text" name="Policy no"
                                        class="w-100 border-none border-0 border-bottom  shadow-none my-auto responsive_input">
                                </div>
                            </div>

                            <div class="col-md-6 pt-2">
                                <div class="d-flex d_sm_block">
                                    <div class="pe-1 my-auto" style="width:300px;">Policy owner:</div>
                                    <input type="text" name="Policy owner"
                                        class="w-100 border-none border-0 border-bottom  shadow-none my-auto responsive_input">
                                </div>
                            </div>
                            <div class="col-md-6 pt-2">
                                <div class="d-flex d_sm_block">
                                    <div class="pe-1 my-auto" style="width:300px;">Beneficiary:</div>
                                    <input type="text" name="Beneficiary"
                                        class="w-100 border-none border-0 border-bottom  shadow-none my-auto responsive_input">
                                </div>
                            </div>

                            <div class="col-md-6 pt-2">
                                <div class="d-flex d_sm_block">
                                    <div class="pe-1 my-auto" style="width:153px;">Death benefit:</div>
                                    <div class="my-auto">$</div>
                                    <input type="text" name="Death benefit"
                                        class="w-100 border-none border-0 border-bottom  shadow-none my-auto responsive_input">
                                </div>
                            </div>
                            <div class="col-md-6 pt-2">
                                <div class="d-flex d_sm_block">
                                    <div class="pe-1 ">Premium:</div>
                                    <div class="">$</div>
                                    <input type="text" name="Premium"
                                        class="border-none border-0 border-bottom  shadow-none h-100 responsive_input">
                                    <div class="">per</div>
                                    <div class="">
                                        <input type="date" name="per"
                                            class="w-100 border-none border-0 border-bottom  shadow-none responsive_input ">
                                        <div class="text-sm fs-6">week/month/year</div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-7 pt-2">
                                <div class="d-flex d_sm_block">
                                    <div class="pe-1 " style="width: 180px;">Cash/surrender value:</div>
                                    <div class="">$</div>
                                    <input type="text" name="Cashsurrender value"
                                        class="border-none border-0 border-bottom  shadow-none h-100 ">
                                    <div class="" style="width: 50px">as of</div>
                                    <div class="">
                                        <input type="text" name="asof"
                                            class="border-none border-0 border-bottom  shadow-none ">
                                        <span>.</span>
                                        <div class="text-sm fs-6">Date</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 pt-2 my-auto">
                                <div class="ms-3">
                                    <input type="checkbox" name="Taxable" value="Taxable">
                                    <label for="">Taxable</label>
                                </div>
                            </div>
                            <div class="col-md-6 pt-2">
                                <span>Employer provided:</span>
                                <span class="ps-3">
                                    <input type="checkbox" name="yes2" value="yes2">
                                    <label for="">Yes</label>
                                </span>
                                <span>
                                    <input type="checkbox" name="no2" value="no2">
                                    <label for="">No</label>
                                </span>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-12 py-2">
                                <div class="fw-bold text-decoration-underline pb-2">Motorized Vehicles</div>
                            </div>
                            <div class="col-md-12 pt-2">
                                <span>List all motorized vehicles in which you own an interest. Include automobiles, boats,
                                    snowmobiles, motorcycles, recreational
                                    vehicles, etc. Include information on any loans that you co-signed for the benefit of
                                    another person</span>
                                <span class="fs-6">Use additional sheets if necessary.</span>
                            </div>
                            <div class="col-md-12 pt-4 table-responsive">
                                <table class="table-bordered  border border-dark border-2 w-100">
                                    <tr class="fw-bold">
                                        <td style="width:600px;">
                                            <div class="d-flex tdata">
                                                <div style="width:275px;">Year, make and model</div>
                                                <input type="text" name="Year make and model"
                                                    class="w-100 border-none border-0 shadow-none my-auto ">
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div>Amount owed</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width:600px;">
                                            <div class="d-flex tdata">
                                                <div style="width:115px;">Title holder</div>
                                                <input type="text" name="Title holder"
                                                    class="w-100 border-none border-0 shadow-none my-auto ">
                                            </div>
                                        </td>
                                        <td rowspan="3">
                                            <div class="tdata d-flex">
                                                <div>$</div><input type="number" name="as of_5"
                                                    class="w-100 border-none border-0 shadow-none my-auto ">
                                            </div>
                                            <div class="tdata d-flex"><span style="width:50px;">as of</span><input
                                                    type="text" name="Text9"
                                                    class="w-100 border-none border-0 shadow-none my-auto "> </div>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width:600px;">
                                            <div class="d-flex tdata">
                                                <div style="width:210px;">Lender</div>
                                                <input type="text" name="Lender"
                                                    class="w-100 border-none border-0 shadow-none my-auto ">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width:600px;">
                                            <div class="d-flex tdata">
                                                <div style="width:210px;">Estimated value</div>
                                                <input type="text" name="Estimated value _2"
                                                    class="w-100 border-none border-0 shadow-none my-auto ">
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>

                            <div class="col-md-12 pt-4 table-responsive">
                                <table class="table-bordered  border border-dark border-2 w-100">
                                    <tr class="fw-bold">
                                        <td style="width:600px;">
                                            <div class="d-flex tdata">
                                                <div style="width:275px;">Year, make and model</div>
                                                <input type="text" name="Year make and model_2"
                                                    class="w-100 border-none border-0 shadow-none my-auto ">
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div>Amount owed</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width:600px;">
                                            <div class="d-flex tdata">
                                                <div style="width:115px;">Title holder</div>
                                                <input type="text" name="Title holder_2"
                                                    class="w-100 border-none border-0 shadow-none my-auto ">
                                            </div>
                                        </td>
                                        <td rowspan="3">
                                            <div class="tdata d-flex">
                                                <div>$</div><input type="number" name="as of 6"
                                                    class="w-100 border-none border-0 shadow-none my-auto ">
                                            </div>
                                            <div class="tdata d-flex"><span style="width:50px;">as of</span><input
                                                    type="text" name="Text10"
                                                    class="w-100 border-none border-0 shadow-none my-auto "> </div>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width:600px;">
                                            <div class="d-flex tdata">
                                                <div style="width:210px;">Lender</div>
                                                <input type="text" name="Lender_2"
                                                    class="w-100 border-none border-0 shadow-none my-auto ">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width:600px;">
                                            <div class="d-flex tdata">
                                                <div style="width:210px;">Estimated value</div>
                                                <input type="text" name="Estimated value_3"
                                                    class="w-100 border-none border-0 shadow-none my-auto ">
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-md-12 pt-4 table-responsive">
                                <table class="table-bordered  border border-dark border-2 w-100">
                                    <tr class="fw-bold">
                                        <td style="width:600px;">
                                            <div class="d-flex tdata">
                                                <div style="width:275px;">Year, make and model</div>
                                                <input type="text" name="Year make and model_3"
                                                    class="w-100 border-none border-0 shadow-none my-auto ">
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div>Amount owed</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width:600px;">
                                            <div class="d-flex tdata">
                                                <div style="width:115px;">Title holder</div>
                                                <input type="text" name="Title holder_3"
                                                    class="w-100 border-none border-0 shadow-none my-auto ">
                                            </div>
                                        </td>
                                        <td rowspan="3">
                                            <div class="tdata d-flex">
                                                <div>$</div><input type="text" name="asof_7"
                                                    class="w-100 border-none border-0 shadow-none my-auto ">
                                            </div>
                                            <div class="tdata d-flex"><span style="width:50px;">as of</span><input
                                                    type="text" name="Text11"
                                                    class="w-100 border-none border-0 shadow-none my-auto "> </div>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width:600px;">
                                            <div class="d-flex tdata">
                                                <div style="width:210px;">Lender</div>
                                                <input type="text" name="Lender_3"
                                                    class="w-100 border-none border-0 shadow-none my-auto ">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width:600px;">
                                            <div class="d-flex tdata">
                                                <div style="width:210px;">Estimated value</div>
                                                <input type="text" name="Estimated value_4"
                                                    class="w-100 border-none border-0 shadow-none my-auto ">
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-md-12 pt-4 table-responsive">
                                <table class="table-bordered  border border-dark border-2 w-100">
                                    <tr class="fw-bold">
                                        <td style="width:600px;">
                                            <div class="d-flex tdata">
                                                <div style="width:275px;">Year, make and model</div>
                                                <input type="text" name="Year make and model_5"
                                                    class="w-100 border-none border-0 shadow-none my-auto ">
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div>Amount owed</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width:600px;">
                                            <div class="d-flex tdata">
                                                <div style="width:115px;">Title holder</div>
                                                <input type="text" name="Title holder_5"
                                                    class="w-100 border-none border-0 shadow-none my-auto ">
                                            </div>
                                        </td>
                                        <td rowspan="3">
                                            <div class="tdata d-flex">
                                                <div>$</div><input type="text" name="asof_8"
                                                    class="w-100 border-none border-0 shadow-none my-auto ">
                                            </div>
                                            <div class="tdata d-flex"><span style="width:50px;">as of</span><input
                                                    type="text" name="Text12"
                                                    class="w-100 border-none border-0 shadow-none my-auto "> </div>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width:600px;">
                                            <div class="d-flex tdata">
                                                <div style="width:210px;">Lender</div>
                                                <input type="text" name="Lender_5"
                                                    class="w-100 border-none border-0 shadow-none my-auto ">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width:600px;">
                                            <div class="d-flex tdata">
                                                <div style="width:210px;">Estimated value</div>
                                                <input type="text" name="Estimated value_5"
                                                    class="w-100 border-none border-0 shadow-none my-auto ">
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </section>
                    <section class="section_area p-5" id="fifth_section">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="h5 mb-0">Domestic Relations Verified Financial Information Form (6/22)</div>
                                <div class="fs-6"><span>Page 5 of </span><span> <input type="text" name="Page 1 of#4"
                                            style="width:20px;"
                                            class="border-none border-0 border-bottom  shadow-none "></span></div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex justify-content-end">
                                    <div>Case No.</div>
                                    <input type="text" name="CASE NO#5"
                                        class="border-none border-0 border-bottom  shadow-none my-auto">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 py-2">
                                <div class="fw-bold text-decoration-underline">Personal Property</div>
                            </div>
                            <div class="col-md-12 pt-2">
                                <span>List all other items of personal property such as furniture, jewelry, gold, silver,
                                    collectibles, artwork, guns, furs, tools, etc.
                                    Do not include items of minimal value such as clothing.</span>
                                <span class="fs-6">Use additional sheets if necessary.</span>
                            </div>
                            <div class="col-md-12 pt-2">
                                <table class="table-bordered w-100 border-dark">
                                    <tr class="fs-6 p-2">
                                        <td class="pb-4" style="width:600px;">
                                            <div class="text-center">Description of property</div>
                                        </td>
                                        <td class="pb-4" style="width:200px;">
                                            <div class="text-center">Estimated value</div>
                                        </td>
                                        <td class="pb-4" style="width:200px;">
                                            <div class="text-center">Date purchased or acquired</div>
                                        </td>
                                    </tr>
                                    <tr class="fs-6 p-2">
                                        <td class="tdata">
                                            <input type="text" name="Description of propertyRow1"
                                                class="w-100 border-none border-0 shadow-none my-2 ">
                                        </td>
                                        <td class="tdata d-flex border-0">
                                            <span class="my-auto">$</span>
                                            <input type="number" name="Estimated value_Row1"
                                                class="w-100 border-none border-0 shadow-none my-2 ">
                                        </td>
                                        <td class="tdata">
                                            <input type="text" name="Date purchased or acquired"
                                                class="w-100 border-none border-0 shadow-none my-2 ">
                                        </td>
                                    </tr>
                                    <tr class="fs-6 p-2">
                                        <td class="tdata">
                                            <input type="text" name="Description of propertyRow2"
                                                class="w-100 border-none border-0 shadow-none my-2 ">
                                        </td>
                                        <td class="tdata d-flex border-0">
                                            <span class="my-auto">$</span>
                                            <input type="number" name="Estimated value_Row2"
                                                class="w-100 border-none border-0 shadow-none my-2 ">
                                        </td>
                                        <td class="tdata">
                                            <input type="text" name="Date purchased or acquired_2"
                                                class="w-100 border-none border-0 shadow-none my-2 ">
                                        </td>
                                    </tr>
                                    <tr class="fs-6 p-2">
                                        <td class="tdata">
                                            <input type="text" name="Description of propertyRow3"
                                                class="w-100 border-none border-0 shadow-none my-2 ">
                                        </td>
                                        <td class="tdata d-flex border-0">
                                            <span class="my-auto">$</span>
                                            <input type="number" name="Estimated value_Row3"
                                                class="w-100 border-none border-0 shadow-none my-2 ">
                                        </td>
                                        <td class="tdata">
                                            <input type="text" name="Date purchased or acquired_3"
                                                class="w-100 border-none border-0 shadow-none my-2 ">
                                        </td>
                                    </tr>
                                    <tr class="fs-6 p-2">
                                        <td class="tdata">
                                            <input type="text" name="Description of propertyRow4"
                                                class="w-100 border-none border-0 shadow-none my-2 ">
                                        </td>
                                        <td class="tdata d-flex border-0">
                                            <span class="my-auto">$</span>
                                            <input type="number" name="Estimated value_Row4"
                                                class="w-100 border-none border-0 shadow-none my-2 ">
                                        </td>
                                        <td class="tdata">
                                            <input type="text" name="Date purchased or acquired_4"
                                                class="w-100 border-none border-0 shadow-none my-2 ">
                                        </td>
                                    </tr>
                                    <tr class="fs-6 p-2">
                                        <td class="tdata">
                                            <input type="text" name="Description of propertyRow5"
                                                class="w-100 border-none border-0 shadow-none my-2 ">
                                        </td>
                                        <td class="tdata d-flex border-0">
                                            <span class="my-auto">$</span>
                                            <input type="number" name="Estimated value_Row5"
                                                class="w-100 border-none border-0 shadow-none my-2 ">
                                        </td>
                                        <td class="tdata">
                                            <input type="text" name="Date purchased or acquired_5"
                                                class="w-100 border-none border-0 shadow-none my-2 ">
                                        </td>
                                    </tr>
                                    <tr class="fs-6 p-2">
                                        <td class="tdata">
                                            <input type="text" name="Description of propertyRow6"
                                                class="w-100 border-none border-0 shadow-none my-2 ">
                                        </td>
                                        <td class="tdata d-flex border-0">
                                            <span class="my-auto">$</span>
                                            <input type="number" name="Estimated value_Row6"
                                                class="w-100 border-none border-0 shadow-none my-2 ">
                                        </td>
                                        <td class="tdata">
                                            <input type="text" name="Date purchased or acquired_6"
                                                class="w-100 border-none border-0 shadow-none my-2 ">
                                        </td>
                                    </tr>
                                    <tr class="fs-6 p-2">
                                        <td class="tdata">
                                            <input type="text" name="Description of propertyRow7"
                                                class="w-100 border-none border-0 shadow-none my-2 ">
                                        </td>
                                        <td class="tdata d-flex border-0">
                                            <span class="my-auto">$</span>
                                            <input type="number" name="Estimated value _Row7"
                                                class="w-100 border-none border-0 shadow-none my-2 ">
                                        </td>
                                        <td class="tdata">
                                            <input type="text" name="Date purchased or acquired_7"
                                                class="w-100 border-none border-0 shadow-none my-2 ">
                                        </td>
                                    </tr>
                                    <tr class="fs-6 p-2">
                                        <td class="tdata">
                                            <input type="text" name="Description of propertyRow8"
                                                class="w-100 border-none border-0 shadow-none my-2 ">
                                        </td>
                                        <td class="tdata d-flex border-0">
                                            <span class="my-auto">$</span>
                                            <input type="number" name="Estimated value _Row8"
                                                class="w-100 border-none border-0 shadow-none my-2 ">
                                        </td>
                                        <td class="tdata">
                                            <input type="text" name="Date purchased or acquired_8"
                                                class="w-100 border-none border-0 shadow-none my-2 ">
                                        </td>
                                    </tr>
                                    <tr class="fs-6 p-2">
                                        <td class="tdata">
                                            <input type="text" name="Description of propertyRow9"
                                                class="w-100 border-none border-0 shadow-none my-2 ">
                                        </td>
                                        <td class="tdata d-flex border-0">
                                            <span class="my-auto">$</span>
                                            <input type="number" name="Estimated value_Row9"
                                                class="w-100 border-none border-0 shadow-none my-2 ">
                                        </td>
                                        <td class="tdata">
                                            <input type="text" name="Date purchased or acquired_9"
                                                class="w-100 border-none border-0 shadow-none my-2 ">
                                        </td>
                                    </tr>
                                </table>
                                <div class="row mt-3">
                                    <div class="col-7"></div>
                                    <div class="col-4">
                                        <span>Total:</span>
                                        <span class="fs-6">$</span>
                                        <input type="text" name="Total"
                                            class="border-none border-0 border-bottom responsive_input  shadow-none my-auto">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-md-12 py-2">
                                <span class="fw-bold text-decoration-underline">Miscellaneous</span>
                                <span class="fs-6">Use additional sheets if necessary.</span>
                            </div>
                            <div class="col-md-12 pt-2 d-flex gap-3">
                                <div>1. Do you own or have access to any safe deposit boxes?</div>
                                <div>
                                    <input type="checkbox" name="yes3" value="yes">
                                    <label for="">Yes</label>
                                </div>
                                <div>
                                    <input type="checkbox" name="no3" value="no">
                                    <label for="">No</label>
                                </div>
                                <div class="ps-5">
                                    If yes, provide information on where it is located and a list of the
                                </div>
                            </div>
                            <div class="col-md-12 ">
                                <div class="d-flex">
                                    <div class="pe-1 my-auto" style="width:80px;">contents:</div>
                                    <input type="text" name="1 Do you own or have access to any safe deposit boxes"
                                        class="w-100 border-none border-0 border-bottom  shadow-none my-auto">
                                </div>
                            </div>

                            <div class="col-md-12 pt-3 d-flex gap-3">
                                <div>2. Are any accounts, money, or assets being held for your benefit?</div>
                                <div>
                                    <input type="checkbox" name="yes4" value="yes">
                                    <label for="">Yes</label>
                                </div>
                                <div>
                                    <input type="checkbox" name="no4" value="no">
                                    <label for="">No</label>
                                </div>
                                <div class="ps-5">
                                    If yes, provide amount, where it is held, and the reason it
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="d-flex">
                                    <div class="pe-1 my-auto" style="width:130px;"> is being held:</div>
                                    <input type="text" name="2 Are any accounts money or assets being held for your benefit"
                                        class="w-100 border-none border-0 border-bottom  shadow-none my-auto">
                                </div>
                            </div>

                            <div class="col-md-12 pt-3 d-flex gap-3">
                                <div>3. Are you holding or acting as the custodian of any money, accounts, or asset for the
                                    benefit of someone else?</div>
                            </div>
                            <div class="col-md-12">
                                <div class="d-flex gap-5">
                                    <div class="ps-3">
                                        <input type="checkbox" name="yes5" value="yes">
                                        <label for="">Yes</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" name="no5" value="no">
                                        <label for="">No</label>
                                    </div>
                                    <div class="ps-5">
                                        If yes,describe what it is, where it is located, and why you are holding it or
                                        acting as custodian:
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 ">
                                <div class="d-flex ps-3">
                                    <input type="text" name="describe5"
                                        class="w-100 border-none border-0 border-bottom  shadow-none my-auto">
                                </div>
                            </div>

                            <div class="col-md-12 pt-4 d-flex gap-3">
                                <div>4. Do you have any ownership interests in any type of business?</div>
                                <div>
                                    <input type="checkbox" name="yes6" value="yes">
                                    <label for="">Yes</label>
                                </div>
                                <div>
                                    <input type="checkbox" name="no6" value="no">
                                    <label for="">No</label>
                                </div>
                                <div class="ps-5">
                                    If yes, describe the business and what your ownership
                                </div>
                            </div>
                            <div class="col-md-12 ">
                                <div class="d-flex">
                                    <div class="pe-1 my-auto" style="width:130px;">interests are:</div>
                                    <input type="text" name="4 Do you have any ownership interests in any type of business"
                                        class="w-100 border-none border-0 border-bottom  shadow-none my-auto">
                                    <input type="text" name="what your ownership interests are"
                                        class="w-100 border-none border-0 border-bottom  shadow-none my-auto">
                                </div>
                            </div>

                            <div class="col-md-12 pt-3 d-flex gap-3">
                                <div>5. Are there any other assets or income to which you are entitled, or to which you
                                    believe you will become entitled?</div>
                            </div>
                            <div class="col-md-12">
                                <div class="d-flex gap-5">
                                    <div class="ps-3">
                                        <input type="checkbox" name="yes7" value="yes">
                                        <label for="">Yes</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" name="no7" value="no">
                                        <label for="">No</label>
                                    </div>
                                    <div class="ps-5">
                                        If yes, describe the assets, their value, and why you believe you are or will be
                                        entitled to them:
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 ">
                                <div class="d-flex ps-3">
                                    <input type="text" name="describe7"
                                        class="w-100 border-none border-0 border-bottom  shadow-none my-auto">
                                </div>
                            </div>
                        </div>
                    </section>







                    <section class="section_area p-5" id="sixth_section">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="h5 mb-0">Domestic Relations Verified Financial Information Form (6/22)</div>
                                <div class="fs-6"><span>Page 6 of </span><span> <input type="text" name="Page 1 of#5"
                                            style="width:20px;"
                                            class="border-none border-0 border-bottom  shadow-none "></span></div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex justify-content-end">
                                    <div>Case No.</div>
                                    <input type="text" name="CASE NO#3"
                                        class="border-none border-0 border-bottom  shadow-none my-auto">
                                </div>
                            </div>

                            <div class="col-md-12 pt-4 d-flex gap-3">
                                <div style="width:430px">6. Are there any debts that are owed to you?</div>
                                <div>
                                    <input type="checkbox" name="yes8" value="yes">
                                    <label for="">Yes</label>
                                </div>
                                <div>
                                    <input type="checkbox" name="no8" value="no">
                                    <label for="">No</label>
                                </div>
                                <div class="ps-5">
                                    If yes, describe who owes the money, how much is owed, the amount
                                </div>
                            </div>
                            <div class="col-md-12 ">
                                <div class="d-flex">
                                    <div class="pe-1 my-auto" style="width:880px;">of payments, the purpose of the loan,
                                        and the loan end date:</div>
                                    <input type="text" name="If yes describe who owes the money how much is"
                                        class="w-100 border-none border-0 border-bottom  shadow-none my-auto">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <input type="text" name="owed the amount and frequency of payments the purpose of the loan and the loan end"
                                    class="w-100 border-none border-0 border-bottom  shadow-none my-auto">
                            </div>

                            <div class="col-md-12 pt-3">
                                <div>7. Are there any other items you own that have financial value such as electronic
                                    assets, season tickets, or electronic
                                    currency such as bitcoin?</div>
                            </div>
                            <div class="col-md-12">
                                <div class="d-flex gap-5">
                                    <div class="ps-3">
                                        <input type="checkbox" name="yes9" value="yes">
                                        <label for="">Yes</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" name="no9" value="no">
                                        <label for="">No</label>
                                    </div>
                                    <div class="ps-5">
                                        If yes, describe asset, where it is held and its current value as of a
                                        specific date:
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 ">
                                <div class="d-flex ps-3">
                                    <input type="text" name="currency such as bitcoin"
                                        class="w-100 border-none border-0 border-bottom  shadow-none my-auto">
                                </div>
                            </div>

                            <div class="col-md-12 pt-3">
                                <div>8. Are there any outstanding court cases other than this one involving you, your
                                    spouse, or family members that may
                                    result in an award for or</div>
                            </div>
                            <div class="col-md-12">
                                <div class="d-flex gap-5 d_sm_block">
                                    <div class="ps-3">against you</div>
                                    <div class="ps-3">
                                        <input type="checkbox" name="yes10" value="yes">
                                        <label for="">Yes</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" name="no10" value="no">
                                        <label for="">No</label>
                                    </div>
                                    <div class="ps-5 d-flex">
                                        <div style="width:530px" class="responsive_input">If yes, describe the case,
                                            where it is filed and the
                                            possible liability:</div>
                                        <input type="text" name="result in an award for or against you"
                                            class="border-none border-0 border-bottom  shadow-none my-auto">
                                        <input type="text" name="award or liability"
                                            class="border-none border-0 border-bottom  shadow-none my-auto">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="ps-3">
                                    <input type="text" name="elec_curr_desc1"
                                        class="w-100 border-none border-0 border-bottom  shadow-none my-auto">
                                </div>
                            </div>

                            <div class="col-md-12 pt-5">
                                <div class="my-3">
                                    <div class="border border-1 border-dark" style="width:80px;">
                                        <h4 class="fw-bold m-0 p-0 px-1">DEBTS</h4>
                                    </div>
                                </div>
                                <div>Provide debt information for divorce, separate maintenance, and annulment cases only
                                    (DO and DM case types).</div>
                                <div class="fw-bold text-decoration-underline pt-2">Credit cards, personal loans, student
                                    financial aid loans, other unsecured loans</div>
                                <div class="pt-2">Include all loans that are for your benefit or that you are a
                                    co-signer on for another person. <span class="fs-6 ps-2">Use additional sheets if
                                        necessary.</span></div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-12 pt-4">
                                <table class="table-bordered  border border-dark border-2 w-100">
                                    <tr class="fw-bold">
                                        <td style="width:600px;">
                                            <div class="d-flex tdata">
                                                <div style="width:125px;">Type of debt</div>
                                                <input type="text" name="Type of debt"
                                                    class="w-100 border-none border-0 shadow-none my-auto ">
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div>Balance owed</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width:600px;">
                                            <div class="d-flex tdata">
                                                <div style="width:175px;">Name of lender</div>
                                                <input type="text" name="Name of lender_2"
                                                    class="w-100 border-none border-0 shadow-none my-auto ">
                                            </div>
                                        </td>
                                        <td rowspan="3">
                                            <div class="tdata d-flex">
                                                <div>$</div><input type="number" name="asof_9"
                                                    class="w-100 border-none border-0 shadow-none my-auto ">
                                            </div>
                                            <div class="tdata d-flex"><span style="width:50px;">as of</span><input
                                                    type="text" name="Text13"
                                                    class="w-100 border-none border-0 shadow-none my-auto "> </div>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width:600px;">
                                            <div class="d-flex tdata">
                                                <div style="width:110px;">Account no</div>
                                                <input type="text" name="Account no_5"
                                                    class="w-100 border-none border-0 shadow-none my-auto ">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width:600px;">
                                            <div class="d-flex tdata">
                                                <div style="width:220px;">Name(s) on account</div>
                                                <input type="text" name="Names on account"
                                                    class="w-100 border-none border-0 shadow-none my-auto ">
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-md-12 pt-4">
                                <table class="table-bordered  border border-dark border-2 w-100">
                                    <tr class="fw-bold">
                                        <td style="width:600px;">
                                            <div class="d-flex tdata">
                                                <div style="width:125px;">Type of debt</div>
                                                <input type="text" name="Type of debt_2"
                                                    class="w-100 border-none border-0 shadow-none my-auto ">
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div>Balance owed</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width:600px;">
                                            <div class="d-flex tdata">
                                                <div style="width:175px;">Name of lender</div>
                                                <input type="text" name="Name of lender_3"
                                                    class="w-100 border-none border-0 shadow-none my-auto ">
                                            </div>
                                        </td>
                                        <td rowspan="3">
                                            <div class="tdata d-flex">
                                                <div>$</div><input type="number" name="as of_10"
                                                    class="w-100 border-none border-0 shadow-none my-auto ">
                                            </div>
                                            <div class="tdata d-flex"><span style="width:50px;">as of</span><input
                                                    type="text" name="Text14"
                                                    class="w-100 border-none border-0 shadow-none my-auto "> </div>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width:600px;">
                                            <div class="d-flex tdata">
                                                <div style="width:110px;">Account no</div>
                                                <input type="text" name="Account no_6"
                                                    class="w-100 border-none border-0 shadow-none my-auto ">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width:600px;">
                                            <div class="d-flex tdata">
                                                <div style="width:220px;">Name(s) on account</div>
                                                <input type="text" name="Names on account_2"
                                                    class="w-100 border-none border-0 shadow-none my-auto ">
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>

                            <div class="col-md-12 pt-4">
                                <table class="table-bordered  border border-dark border-2 w-100">
                                    <tr class="fw-bold">
                                        <td style="width:600px;">
                                            <div class="d-flex tdata">
                                                <div style="width:125px;">Type of debt</div>
                                                <input type="text" name="Type of debt_3"
                                                    class="w-100 border-none border-0 shadow-none my-auto ">
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div>Balance owed</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width:600px;">
                                            <div class="d-flex tdata">
                                                <div style="width:175px;">Name of lender</div>
                                                <input type="text" name="Name of lender_4"
                                                    class="w-100 border-none border-0 shadow-none my-auto ">
                                            </div>
                                        </td>
                                        <td rowspan="3">
                                            <div class="tdata d-flex">
                                                <div>$</div><input type="number" name="asof_11"
                                                    class="w-100 border-none border-0 shadow-none my-auto ">
                                            </div>
                                            <div class="tdata d-flex"><span style="width:50px;">as of</span><input
                                                    type="text" name="Text15"
                                                    class="w-100 border-none border-0 shadow-none my-auto "> </div>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width:600px;">
                                            <div class="d-flex tdata">
                                                <div style="width:110px;">Account no</div>
                                                <input type="text" name="Account no_7"
                                                    class="w-100 border-none border-0 shadow-none my-auto ">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width:600px;">
                                            <div class="d-flex tdata">
                                                <div style="width:220px;">Name(s) on account</div>
                                                <input type="text" name="Names on account 3"
                                                    class="w-100 border-none border-0 shadow-none my-auto ">
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>

                            <div class="col-md-12 pt-4">
                                <table class="table-bordered  border border-dark border-2 w-100">
                                    <tr class="fw-bold">
                                        <td style="width:600px;">
                                            <div class="d-flex tdata">
                                                <div style="width:125px;">Type of debt</div>
                                                <input type="text" name="Type of debt_4"
                                                    class="w-100 border-none border-0 shadow-none my-auto ">
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div>Balance owed</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width:600px;">
                                            <div class="d-flex tdata">
                                                <div style="width:175px;">Name of lender</div>
                                                <input type="text" name="Name of lender_5"
                                                    class="w-100 border-none border-0 shadow-none my-auto ">
                                            </div>
                                        </td>
                                        <td rowspan="3">
                                            <div class="tdata d-flex">
                                                <div>$</div><input type="number" name="as of_12"
                                                    class="w-100 border-none border-0 shadow-none my-auto ">
                                            </div>
                                            <div class="tdata d-flex"><span style="width:50px;">as of</span><input
                                                    type="text" name="Text16"
                                                    class="w-100 border-none border-0 shadow-none my-auto "> </div>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width:600px;">
                                            <div class="d-flex tdata">
                                                <div style="width:110px;">Account no</div>
                                                <input type="text" name="Account no_8"
                                                    class="w-100 border-none border-0 shadow-none my-auto ">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width:600px;">
                                            <div class="d-flex tdata">
                                                <div style="width:220px;">Name(s) on account</div>
                                                <input type="text" name="Names on account_4"
                                                    class="w-100 border-none border-0 shadow-none my-auto ">
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>

                            <div class="col-md-12 pt-5">
                                <div>Attach the last three statements for all accounts.</div>
                            </div>

                        </div>
                    </section>
                    <section class="section_area p-5" id="seventh_section">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="h5 mb-0">Domestic Relations Verified Financial Information Form (6/22)</div>
                                <div class="fs-6"><span>Page 7 of </span><span> <input type="text" name="Page 1 of#6"
                                            style="width:20px;"
                                            class="border-none border-0 border-bottom  shadow-none "></span></div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex justify-content-end">
                                    <div>Case No.</div>
                                    <input type="text" name="CASE NO#6"
                                        class="border-none border-0 border-bottom  shadow-none my-auto">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 pt-2">
                                <div class="fw-bold text-decoration-underline pt-2">Court ordered financial obligations
                                </div>
                                <div class="pt-2">Provide the following information for all your court-ordered financial
                                    obligations including, but not limited to, child or spousal
                                    support in a different case, garnishment, civil judgment against you, and court-ordered
                                    fines, fees or restitution. <span class="fs-6 ps-2">Use additional sheets if
                                        necessary.</span></div>
                            </div>

                            <div class="col-md-12 pt-2">
                                <div class="d-flex">
                                    <div class="pe-1 my-auto" style="width: 180px">Type of obligation:</div>
                                    <div class="w-100">
                                        <input type="text" name="Type of obligation"
                                            class="w-100 border-none border-0 border-bottom  shadow-none my-auto">
                                        <div class="text-sm fs-6">Child support, spousal support, garnishment, judgment,
                                            etc.</div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 pt-2">
                                <div class="d-flex">
                                    <div class="pe-1" style="width:150px;">Payment amount:</div>
                                    <div class="">$</div>
                                    <input type="number" name="Payment amount"
                                        class="border-none border-0 border-bottom  shadow-none h-100 ">
                                    <div class="">per</div>
                                    <div class="">
                                        <input type="text" name=" per_2"
                                            class="w-100 border-none border-0 border-bottom  shadow-none ">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 pt-2">
                                <div class="d-flex">
                                    <div class=" " style="width:300px;">Balance (if applicable):</div>
                                    <input type="text" name="Balance if applicable"
                                        class="w-100 border-none border-0 border-bottom  shadow-none ">
                                </div>
                            </div>
                            <div class="col-md-6 pt-2">
                                <div class="d-flex">
                                    <div class="" style="width:600px;">Estimated end date (if applicable):</div>
                                    {{-- <div>$</div> --}}
                                    <div class="w-100">
                                        <input type="date" name="Estimated end date if applicable"
                                            class="w-100 border-none border-0 border-bottom  shadow-none ">
                                        <div class="text-sm fs-6">Date</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex">
                                    <div>Court:</div>
                                    <input type="text" name="Court"
                                        class="w-100 border-none border-0 border-bottom  shadow-none ">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex">
                                    <div style="width:100px;">Case No.:</div>
                                    <input type="number" name="case_no"
                                        class="w-100 border-none border-0 border-bottom  shadow-none ">
                                </div>
                            </div>

                            <div class="col-md-12 pt-5">
                                <div class="my-3">
                                    <div class="border border-1 border-dark" style="width:190px;">
                                        <h4 class="fw-bold m-0 p-0 px-1">MISCELLANEOUS</h4>
                                    </div>
                                </div>
                                <div>Provide miscellaneous information for divorce, separate maintenance, and annulment
                                    cases only (DO and DM case
                                    types).</div>
                            </div>
                            <div class="col-md-12 pt-2 d-flex gap-3 d_sm_block">
                                <div>1. Have you ever filed for bankruptcy?</div>
                                <div class="px-3">
                                    <input type="checkbox" name="yes11" value="yes">
                                    <label for="">Yes</label>
                                </div>
                                <div class="px-3">
                                    <input type="checkbox" name="no11" value="no">
                                    <label for="">No</label>
                                </div>
                                <div class="ps-5">
                                    If yes, provide the date, case number, and current status
                                    of the bankruptcy
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="ps-3">
                                    <input type="text" name="of the bankruptcy"
                                        class="w-100 border-none border-0 border-bottom  shadow-none ">
                                </div>
                            </div>

                            <div class="col-md-12 pt-2 d-flex gap-3">
                                <div>2. Do you claim that any of the assets or debts that you listed are your separate
                                    property?</div>
                                <div class="px-3">
                                    <input type="checkbox" name="yes12" value="yes">
                                    <label for="">Yes</label>
                                </div>
                                <div class="px-3">
                                    <input type="checkbox" name="no12" value="no">
                                    <label for="">No</label>
                                </div>
                                <div class="ps-3">
                                    If yes, provide detailed
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="ps-3">information on which asset(s) or debt(s) and why you think they are
                                    your separate property:</div>
                            </div>
                            <div class="col-md-12">
                                <div class="ps-3">
                                    <input type="text" name="provide detailed information on which assets or debts and why you think they are your"
                                        class="w-100 border-none border-0 border-bottom  shadow-none ">
                                </div>
                            </div>

                            <div class="col-md-12 pt-4">
                                <div>3. If there is any additional information regarding assets, debts, business interests,
                                    stocks, bonds, anticipated income, or
                                    any financially related <span class="ps-3"> information of any kind that has not
                                        been disclosed on this form, provide that information below. </span></div>
                            </div>
                            <div class="col-md-12">
                                <div class="ps-3">
                                    <div>
                                        <input type="text" name="any financially related information of any kind that has not been disclosed on this form1"
                                            class="w-100 border-none border-0 border-bottom  shadow-none ">

                                    </div>
                                    <div class="pt-3">
                                        <input type="text" name="any financially related information of any kind that has not been disclosed on this form2"
                                        class="w-100 border-none border-0 border-bottom  shadow-none ">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 py-5">
                                <div>I declare that the statements above are true to the best of my information, knowledge,
                                    and belief.</div>
                            </div>

                            <div class="col-md-7">
                                <div>
                                    <input type="date" name="Date"
                                        class="border-none border-0 border-bottom  shadow-none ">
                                    <div class="fs-6">Date</div>
                                </div>
                            </div>

                            <div class="col-md-5">
                                <div>
                                    <input type="text" name="Text17"
                                        class="border-none border-0 border-bottom  shadow-none w-100">
                                    <div class="fs-6">Signature</div>
                                </div>
                            </div>

                            <div class="col-md-12 pt-5">
                                <div class="d-flex ps-3">
                                    <div style="width:430px;">Subscribed and sworn to before me on</div>
                                    <div class="w-100">
                                        <input type="date" name="Subscribed and sworn to before me on"
                                            class="border-none border-0 border-bottom  shadow-none w-100">
                                        <div class="fs-6">Date</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6"></div>
                            <div class="col-md-6 ms-auto">
                                <div class="w-100 ">
                                    <input type="date" name="Text18"
                                        class="border-none border-0 border-bottom  shadow-none w-100">
                                    <div class="fs-6">Deputy clerk/Notary public signature</div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="d-flex ps-3">
                                    <div style="width:355px;">My commission expires on</div>
                                    <input type="date" name="My commission expires on"
                                        class="border-none border-0 border-bottom  shadow-none w-100">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div>
                                    <input type="text" name="undefined_7"
                                        class="border-none border-0 border-bottom  shadow-none ">
                                    <div class="fs-6">Name (type or print)</div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="ps-3">Notary public, State of Michigan, County of
                                    <input type="text" name="Notary public State of Michigan County of"
                                        class="border-none border-0 border-bottom  shadow-none ">
                                    <span>.</span>
                                    <input type="checkbox" name="Acting in the County of">
                                    Acting in the County of
                                    <input type="text" name="undefined_8"
                                        class="border-none border-0 border-bottom  shadow-none">
                                    <span>.</span>
                                </div>
                            </div>
                            <div class="col-md-12 pb-5 mb-5">
                                <div class="ps-3">
                                    <input type="checkbox" name="This notarial act was performed using an electronic notarization system or a remote" value="True">
                                    This notarial act was performed using an electronic notarization system or a remote
                                    electronic notarization platform.
                                </div>
                            </div>
                        </div>
                        <div class="text-center mt-3">
                            <button type="reset" class="bg-transparent px-4 me-4">Reset Form</button>

                        </div>
                            {{-- @include('layouts.pagination', ['page' => 6 ]) --}}
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
    <div class="position-absolute position-fixed bottom-0 py-2 backdrop_filter px-3">
        <select name="" id="" class="sectionSelect form-select   mx-auto ">
            <option value="" disabled selected>Select a section</option>
            <option value="#first_section">First Section</option>
            <option value="#second_section">Second Section</option>
            <option value="#third_section">Third Section</option>
            <option value="#fourth_section">Fourth Section</option>
            <option value="#fifth_section">Fifth Section</option>
            <option value="#sixth_section">Sixth Section</option>
            <option value="#seventh_section">Seventh Section</option>
        </select>
    </div>

</body>
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
</html>
