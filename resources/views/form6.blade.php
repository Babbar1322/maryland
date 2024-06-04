{{-- fm006-short  CT.pdf --}}
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
    </style>
</head>

<body>
    <div class="container-fluid   py-1 py-lg-3">
        <div class="container bg_color p-lg-3 p-1  ">

            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show">{{ session('success') }} <button
                        type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <form action="{{ route('form6.submit') }}" method="post">
                @csrf

                {{-- section_first --}}
                <section class="section_area row p-5" id="section_first">
                    <div class="col-md-4 border border-2 border-dark pb-5 border-start-0 border-end-0 ">
                        <h4 class="fw-bold text-center">STATE OF MICHIGAN</h4>
                        <div class="d-flex">
                            <input type="text" class="border-0 top col-5" name="judical_circuit">
                            <h4 class="fw-bold col text-end">JUDICIAL CIRCUIT</h4>
                        </div>
                    </div>
                    <div class="col-md-4 col-md-4 border border-2 border-dark py-2">
                        <h4 class="fw-bold">DOMESTIC RELATIONS VERIFIED</h4>
                        <h4 class="fw-bold">FINANCIAL INFORMATION FORM</h4>
                    </div>
                    <div class="col-md-4 border border-2 border-start-0 border-end-0 border-dark">
                        <h4 class="fw-bold">CASE NO. and JUDGE</h4>
                    </div>

                    <div class="row mt-4">
                        <div class="col-md-5 border border-dark border-1 px-0 ">
                            <div class="fs-6">Plaintiff’s name</div>
                            <input type="text" class="border-0 top" name="plaintiff_name">
                        </div>
                        <div class="col-md-2 text-center my-auto">
                            <div class="fw-bold">V</div>
                        </div>
                        <div class="col-md-5 border border-dark border-1 px-0 ">
                            <div class="fs-6">Defendant’s name</div>
                            <input type="text" class="border-0 top" name="defendant_name">
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
                                        <input type="text" name="name"
                                            class="w-100 border-none border-0 border-bottom  shadow-none my-auto">
                                        <div class="text-sm fs-6">First, middle, and last name</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="d-flex">
                                    <div class="px-2 my-auto ">Phone:</div>
                                    <input type="text" name="phone"
                                        class="w-100 border-none border-0 border-bottom  shadow-none my-auto">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="d-flex">
                                    <div class="pe-1 my-auto">Address:</div>
                                    <div class="w-100">
                                        <input type="text" name="address"
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
                                    <input type="text" name="dob"
                                        class="w-100 border-none border-0 border-bottom  shadow-none my-auto">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex">
                                    <div class=" my-auto " style="width:350px;">Social Security Number:</div>
                                    <input type="text" name="ssn"
                                        class="w-100 border-none border-0 border-bottom  shadow-none my-auto">
                                </div>
                            </div>

                            <div class="col-md-6 pt-2">
                                <div class="d-flex">
                                    <div class="my-auto" style="width:650px;">Driver's license number and state:</div>
                                    <input type="text" name="dns"
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
                                    <input type="text" name="emp_name"
                                        class="w-100 border-none border-0 border-bottom  shadow-none my-auto">
                                </div>
                            </div>
                            <div class="col-md-2 pt-1 text-end">
                                <input type="checkbox" name="self_employed">
                                <label>Self Employed</label>
                            </div>

                            <div class="col-md-12 pt-1">
                                <div class="d-flex">
                                    <div class="pe-1 my-auto" style="width:185px"> Employer Address:</div>
                                    <div class="w-100">
                                        <input type="text" name="emp_address"
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
                                <div class="d-flex">
                                    <div class=" my-auto ">Occupation:</div>
                                    <input type="text" name="occupation"
                                        class="w-100 border-none border-0 border-bottom  shadow-none my-auto">
                                </div>
                            </div>

                            <div class="col-md-7">
                                <div class="d-flex">
                                    <div class="my-auto" style="width:490px;">Professional license, type and no.:
                                    </div>
                                    <input type="text" name="plt_no"
                                        class="w-100 border-none border-0 border-bottom  shadow-none my-auto">
                                </div>
                            </div>


                            <div class="col-md-7 pt-1">
                                <div class="d-flex">
                                    <div class="my-auto" style="width:395px;">Gross income <span class="fs-6">
                                            (before taxes and other deductions)</span>:</div>
                                    <span>$</span>
                                    <input type="text" name="occupation"
                                        class="w-50 border-none border-0 border-bottom  shadow-none my-auto">
                                </div>
                            </div>

                            <div class="col-md-5 pt-2">
                                <div class="d-flex gap-4 d_sm_block ">
                                    <div>
                                        <input type="checkbox" name="income_type" value="weekly">
                                        <label for="">weekly</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" name="income_type" value="biweekly">
                                        <label for="">biweekly</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" name="income_type" value="bimonthly">
                                        <label for="">bimonthly</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" name="income_type" value="monthly">
                                        <label for="">monthly</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 pt-2">
                                <div class="d-flex">
                                    <div class="my-auto" style="width:595px;">Hourly pay rate (including shift premium
                                        and cost of living adjustment):</div>
                                    <span>$</span>
                                    <input type="number" name="hpr" style="width:200px;"
                                        class="border-none border-0 border-bottom  shadow-none my-auto">
                                </div>
                            </div>

                            <div class="col-md-6 pt-2">
                                <div class="d-flex">
                                    <div class="my-auto" style="width:595px;">Total regular hours worked per pay
                                        period:</div>
                                    <input type="text" name="trh" style="width:200px;"
                                        class="border-none border-0 border-bottom  shadow-none my-auto">
                                </div>
                            </div>
                            <div class="col-md-6 pt-2">
                                <div class="d-flex">
                                    <div class="my-auto" style="width:595px;">Average overtime hours for past 12
                                        months:</div>
                                    <input type="text" name="aoh" style="width:200px;"
                                        class="border-none border-0 border-bottom  shadow-none my-auto">
                                </div>
                            </div>

                            <div class="col-md-12 pt-2">
                                <div class="d-flex">
                                    <div class="my-auto" style="width:660px;">Total amount of owner’s draws during the
                                        past twelve months (if self-employed):</div>
                                    <input type="text" name="hpr" style="width:300px;"
                                        class="border-none border-0 border-bottom  shadow-none my-auto">
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

                {{-- section_two --}}
                <section class="section_area row p-5" id="section_two">
                    <div class="col-md-6">
                        <div class="h5 mb-0">Domestic Relations Verified Financial Information Form (6/22)</div>
                        <div class="fs-6"><span>Page 2 of </span><span> <input type="text" name="page"
                                    style="width:20px;"
                                    class="border-none border-0 border-bottom  shadow-none "></span></div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex justify-content-end">
                            <div>Case No.</div>
                            <input type="text" name="case_no"
                                class="border-none border-0 border-bottom  shadow-none my-auto">
                        </div>
                    </div>
                    <div class="col-md-12 pt-2">
                        <div>Employment benefits:</div>
                    </div>
                    <div class="col-md-12 d-flex gap-5 mt-3 px-4 d_sm_block">
                        <div>
                            <input type="checkbox" name="insurance" value="health_ins">
                            <label for="">health insurance</label>
                        </div>
                        <div>
                            <input type="checkbox" name="insurance" value="vision_ins">
                            <label for="">vision insurance</label>
                        </div>
                        <div>
                            <input type="checkbox" name="insurance" value="dental_insurance">
                            <label for="">dental insurance</label>
                        </div>
                        <div>
                            <input type="checkbox" name="insurance" value="life_insurance">
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
                            <input type="checkbox" name="retirement" value="car_allowance">
                            <label for="">car allowance</label>
                        </div>
                        <div class="w-25"><input type="text"
                                class="border-none border-0 border-bottom  shadow-none w-100">
                            <div class="fs-6">Amount</div>
                        </div>
                    </div>
                    <div class="col-md-12 d-flex  mt-3 px-4">
                        <div style="width:280px">
                            <input type="checkbox" name="expense" value="expense">
                            <label for="">expense reimbursements</label>
                        </div>
                        <div class="w-100"><input type="text"
                                class="border-none border-0 border-bottom  shadow-none w-100" name="expense_val">
                        </div>
                    </div>
                    <div class="col-md-12 d-flex  mt-3 px-4">
                        <div style="width:70px">
                            <input type="checkbox" name="expense" value="other">
                            <label for="">other</label>
                        </div>
                        <div class="w-100"><input type="text"
                                class="border-none border-0 border-bottom  shadow-none w-100" name="other_val"></div>
                    </div>
                    <div class="col-md-12  mt-3 ">
                        <div>If unemployed and not receiving unemployment or worker’s compensation benefits, or working
                            part-time only, provide the
                            following information regarding your last full-time employer:
                            <span class="ms-5">
                                <input type="checkbox" name="neft" value="neft">
                                <label for="">Never employed full-time</label>
                            </span>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="d-flex">
                            <div class="pe-1 my-auto" style="width:450px;">Name of last full-time employer:</div>
                            <div class="w-100">
                                <input type="text" name="nlfte"
                                    class="w-100 border-none border-0 border-bottom  shadow-none my-auto">
                                <div class="text-sm fs-6">Name</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="d-flex">
                            <div class="px-2 my-auto ">Position:</div>
                            <input type="text" name="position"
                                class="w-100 border-none border-0 border-bottom  shadow-none my-auto">
                        </div>
                    </div>

                    <div class="col-md-12 pt-2">
                        <div class="d-flex">
                            <div class="pe-1 my-auto" style="width:385px"> Address of last full-time employer:</div>
                            <div class="w-100">
                                <input type="text" name="empfte_address"
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
                            <div class="pe-1 my-auto" style="width:430px">Last day employed full-time:</div>
                            <div class="w-100">
                                <input type="text" name="nlfte"
                                    class="w-100 border-none border-0 border-bottom  shadow-none my-auto">
                                <div class="text-sm fs-6">Date</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex">
                            <div class="px-2 my-auto" style="width:390px">Length of time employed:</div>
                            <input type="text" name="lte"
                                class="w-100 border-none border-0 border-bottom  shadow-none my-auto">
                        </div>
                    </div>
                    <div class="col-md-12 pt-2">
                        <div class="d-flex">
                            <div class="pe-1 my-auto" style="width:570px"> Reason for leaving last full-time
                                employment:</div>
                            <div class="w-100">
                                <input type="text" name="empfte_address"
                                    class="w-100 border-none border-0 border-bottom  shadow-none my-auto">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 pt-2">
                        <div class="d-flex">
                            <div class="pe-1 my-auto" style="width:440px;"> Gross earnings per pay period (earnings
                                before taxes):</div>
                            <span>$</span>
                            <input type="text" name="gross_period"
                                class="border-none border-0 border-bottom  shadow-none my-auto">
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
                                <div class="d-flex">
                                    <div>Commissions</div>
                                    <input type="text" name="commissions"
                                        class="border-none border-0 border-bottom  shadow-none my-auto ms-auto">
                                </div>
                            </div>
                            <div class="col-md-4 pt-2">
                                <div class="d-flex">
                                    <div>Unemp. Benefits</div>
                                    <input type="text" name="benefits"
                                        class="border-none border-0 border-bottom  shadow-none my-auto ms-auto">
                                </div>
                            </div>
                            <div class="col-md-4 pt-2">
                                <div class="d-flex">
                                    <div style="width:300px;">Nat’l Guard/Res. Drill</div>
                                    <input type="text" name="res_drill"
                                        class=" w-75 border-none border-0 border-bottom  shadow-none my-auto ms-auto">
                                </div>
                            </div>

                            <div class="col-md-4 pt-2">
                                <div class="d-flex">
                                    <div>Bonuses</div>
                                    <input type="text" name="bonuses"
                                        class="border-none border-0 border-bottom  shadow-none my-auto ms-auto">
                                </div>
                            </div>
                            <div class="col-md-4 pt-2">
                                <div class="d-flex">
                                    <div>Strike Pay</div>
                                    <input type="text" name="strike_pay"
                                        class="border-none border-0 border-bottom  shadow-none my-auto ms-auto">
                                </div>
                            </div>
                            <div class="col-md-4 pt-2">
                                <div class="d-flex">
                                    <div style="width:300px;">Armed Services</div>
                                    <input type="text" name="armed_services"
                                        class=" w-75 border-none border-0 border-bottom  shadow-none my-auto ms-auto">
                                </div>
                            </div>

                            <div class="col-md-4 pt-2">
                                <div class="d-flex">
                                    <div>Profit Sharing</div>
                                    <input type="text" name="profit_sharing"
                                        class="border-none border-0 border-bottom  shadow-none my-auto ms-auto">
                                </div>
                            </div>
                            <div class="col-md-4 pt-2">
                                <div class="d-flex">
                                    <div>SUB Pay</div>
                                    <input type="text" name="sub_pay"
                                        class="border-none border-0 border-bottom  shadow-none my-auto ms-auto">
                                </div>
                            </div>
                            <div class="col-md-4 pt-2">
                                <div class="d-flex">
                                    <div style="width:300px;">Allowance for Rent</div>
                                    <input type="text" name="allowance_rent"
                                        class=" w-75 border-none border-0 border-bottom  shadow-none my-auto ms-auto">
                                </div>
                            </div>

                            <div class="col-md-4 pt-2">
                                <div class="d-flex">
                                    <div>Interest</div>
                                    <input type="text" name="interest"
                                        class="border-none border-0 border-bottom  shadow-none my-auto ms-auto">
                                </div>
                            </div>
                            <div class="col-md-4 pt-2">
                                <div class="d-flex">
                                    <div>Sick Benefits</div>
                                    <input type="text" name="sick_benefits"
                                        class="border-none border-0 border-bottom  shadow-none my-auto ms-auto">
                                </div>
                            </div>
                            <div class="col-md-4 pt-2">
                                <div class="d-flex">
                                    <div style="width:300px;">Rental Income</div>
                                    <input type="text" name="rental_income"
                                        class=" w-75 border-none border-0 border-bottom  shadow-none my-auto ms-auto">
                                </div>
                            </div>

                            <div class="col-md-4 pt-2">
                                <div class="d-flex">
                                    <div>Dividends</div>
                                    <input type="text" name="dividends"
                                        class="border-none border-0 border-bottom  shadow-none my-auto ms-auto">
                                </div>
                            </div>
                            <div class="col-md-4 pt-2">
                                <div class="d-flex">
                                    <div>Workers’ Comp.</div>
                                    <input type="text" name="workers_comp"
                                        class="border-none border-0 border-bottom  shadow-none my-auto ms-auto">
                                </div>
                            </div>
                            <div class="col-md-4 pt-2">
                                <div class="d-flex">
                                    <div style="width:300px;">Spousal Support</div>
                                    <input type="text" name="spousal_support"
                                        class=" w-75 border-none border-0 border-bottom  shadow-none my-auto ms-auto">
                                </div>
                            </div>

                            <div class="col-md-4 pt-2">
                                <div class="d-flex">
                                    <div>Annuities</div>
                                    <input type="text" name="annuities"
                                        class="border-none border-0 border-bottom  shadow-none my-auto ms-auto">
                                </div>
                            </div>
                            <div class="col-md-4 pt-2">
                                <div class="d-flex">
                                    <div>Soc. Sec. Benefits</div>
                                    <input type="text" name="ss_benefits"
                                        class="border-none border-0 border-bottom  shadow-none my-auto ms-auto">
                                </div>
                            </div>
                            <div class="col-md-4 pt-2">
                                <div class="d-flex">
                                    <div style="width:300px;">State Disability Asst.</div>
                                    <input type="text" name="sda"
                                        class=" w-75 border-none border-0 border-bottom  shadow-none my-auto ms-auto">
                                </div>
                            </div>

                            <div class="col-md-4 pt-2">
                                <div class="d-flex">
                                    <div>Pensions/Longevity</div>
                                    <input type="text" name="pl"
                                        class="border-none border-0 border-bottom responsive_input shadow-none my-auto ms-auto">
                                </div>
                            </div>
                            <div class="col-md-4 pt-2">
                                <div class="d-flex">
                                    <div>VA Benefits</div>
                                    <input type="text" name="va_benefits"
                                        class="border-none border-0 border-bottom  shadow-none my-auto ms-auto">
                                </div>
                            </div>
                            <div class="col-md-4 pt-2">
                                <div class="d-flex">
                                    <div>F I P</div>
                                    <input type="text" name="sda"
                                        class=" w-75 border-none border-0 border-bottom  shadow-none my-auto ms-auto">
                                </div>
                            </div>

                            <div class="col-md-4 pt-2">
                                <div class="d-flex">
                                    <div>Deferred Comp/IRA</div>
                                    <input type="text" name="ira"
                                        class="border-none border-0 border-bottom  shadow-none my-auto ms-auto">
                                </div>
                            </div>
                            <div class="col-md-4 pt-2">
                                <div class="d-flex">
                                    <div>Disability Ins.</div>
                                    <input type="text" name="ins"
                                        class="border-none border-0 border-bottom  shadow-none my-auto ms-auto">
                                </div>
                            </div>
                            <div class="col-md-4 pt-2">
                                <div class="d-flex">
                                    <div>SSI</div>
                                    <input type="text" name="ssi"
                                        class=" w-75 border-none border-0 border-bottom  shadow-none my-auto ms-auto">
                                </div>
                            </div>

                            <div class="col-md-4 pt-2">
                                <div class="d-flex">
                                    <div>Trust Funds</div>
                                    <input type="text" name="trust_funds"
                                        class="border-none border-0 border-bottom  shadow-none my-auto ms-auto">
                                </div>
                            </div>
                            <div class="col-md-4 pt-2">
                                <div class="d-flex">
                                    <div>GI Benefits</div>
                                    <input type="text" name="gi_benifits"
                                        class="border-none border-0 border-bottom  shadow-none my-auto ms-auto">
                                </div>
                            </div>
                            <div class="col-md-4 pt-2">
                                <div class="d-flex">
                                    <div>Others</div>
                                    <input type="text" name="others"
                                        class=" w-75 border-none border-0 border-bottom  shadow-none my-auto ms-auto">
                                </div>
                            </div>

                            <div class="col-md-6 pt-2">
                                <div>Does anyone pay any living or housing expenses on your behalf?</div>
                            </div>
                            <div class="col-md-6 pt-2 d-flex gap-5">
                                <div>
                                    <input type="checkbox" name="pay_expense" value="yes">
                                    <label for="">Yes</label>
                                </div>
                                <div>
                                    <input type="checkbox" name="pay_expense" value="no">
                                    <label for="">No</label>
                                </div>
                            </div>
                            <div class="col-md-12 pt-2">
                                <div class="px-4 row">
                                    <div class="col-md-8">
                                        <div style="width:705px;" class="responsive_input">
                                            If yes, provide details of the payments including amount per month paid on
                                            your behalf:
                                        </div>
                                    </div>
                                    <div class="col-md-4 text-end">
                                        <input type="text" name="expense_details"
                                            class=" w-100 border-none border-0 border-bottom  shadow-none my-auto ms-auto">
                                    </div>
                                    <div class="col-md-12">
                                        <input type="text" name="expense_details1"
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

                {{-- section_three --}}
                <section class="section_area p-5" id="section_three">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="h5 mb-0">Domestic Relations Verified Financial Information Form (6/22)</div>
                            <div class="fs-6"><span>Page 3 of </span><span> <input type="text" name="page"
                                        style="width:20px;"
                                        class="border-none border-0 border-bottom  shadow-none "></span></div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex justify-content-end">
                                <div>Case No.</div>
                                <input type="text" name="case_no"
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
                                    <input type="text" name="property_address"
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

                        <div class="col-md-4 pt-2">
                            <div class="d-flex">
                                <div class="pe-1 my-auto" style="width: 245px">Date of purchase:</div>
                                <div class="w-100">
                                    <input type="text" name="pur_date"
                                        class="w-100 border-none border-0 border-bottom  shadow-none my-auto">
                                    <div class="text-sm fs-6">Date</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 pt-2">
                            <div class="d-flex">
                                <div class="pe-1 my-auto" style="width: 245px">Estimated value:</div>
                                <span>$</span>
                                <input type="text" name="estm_val"
                                    class="w-100 border-none border-0 border-bottom  shadow-none my-auto">
                            </div>
                        </div>
                        <div class="col-md-4 pt-2">
                            <div class="d-flex">
                                <div class="pe-1 my-auto">SEV:</div>
                                <span>$</span>
                                <input type="text" name="sev"
                                    class="w-100 border-none border-0 border-bottom  shadow-none my-auto">
                            </div>
                        </div>
                        <div class="col-md-12 pt-2">
                            <div class="d-flex">
                                <div class="pe-1 my-auto" style="width:295px">Balance on mortgage/land contract:</div>
                                <span>$</span>
                                <input type="text" name="land_contract"
                                    class="border-none border-0 border-bottom  shadow-none my-auto">
                            </div>
                        </div>
                        <div class="col-md-6 pt-4">
                            <div class="d-flex">
                                <div class="pe-1 my-auto" style="width:200px">Monthly payment:</div>
                                <span>$</span>
                                <input type="text" name="sev"
                                    class="w-75 border-none border-0 border-bottom  shadow-none my-auto">
                            </div>
                        </div>
                        <div class="col-md-6 pt-4">
                            <div class="d-flex">
                                <div class="pe-1 my-auto" style="width:265px">The monthly payment includes:</div>
                                <div class="px-2">
                                    <input type="checkbox" name="pay_includes" value="taxes">
                                    <label for="">taxes.</label>
                                </div>
                                <div class="px-4">
                                    <input type="checkbox" name="pay_includes" value="insurance">
                                    <label for="">insurance.</label>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 pt-2">
                            <div class="d-flex">
                                <div class="pe-1 my-auto" style="width:155px;">Name of lender:</div>
                                <input type="text" name="lender_name"
                                    class="w-100 border-none border-0 border-bottom  shadow-none my-auto">
                            </div>
                        </div>
                        <div class="col-md-12 pt-2">
                            <div class="d-flex">
                                <div class="pe-1 my-auto" style="width: 290px">Property is titled as follows:</div>
                                <div class="w-100">
                                    <input type="text" name="prop_title"
                                        class="w-100 border-none border-0 border-bottom  shadow-none my-auto">
                                    <div class="text-sm fs-6">Name(s) and specific ownership interest in property</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 pt-2">
                            <div>
                                <input type="checkbox" name="residence" value="primary">
                                <label for="">Primary residence</label>
                            </div>
                        </div>
                        <div class="col-md-4 pt-2">
                            <div>
                                <input type="checkbox" name="residence" value="Other">
                                <label for="">Other</label>
                                <input type="text" name="res_other"
                                    class="border-none border-0 border-bottom  shadow-none my-auto">
                            </div>
                        </div>
                        <div class="col-md-6 pt-2"></div>
                        <div class="col-md-6 pt-2">
                            <div class="d-flex">
                                <div class="pe-1 my-auto" style="width:735px">Balance of equity loan or line of
                                    credit:</div>
                                <span>$</span>
                                <input type="text" name="bal_credit"
                                    class="w-100 border-none border-0 border-bottom  shadow-none my-auto">
                            </div>
                        </div>
                        <div class="col-md-6 pt-2">
                            <div class="d-flex">
                                <div class="pe-1 my-auto" style="width:250px">Monthly payment:</div>
                                <span>$</span>
                                <input type="text" name="monthly_payment"
                                    class="w-100 border-none border-0 border-bottom  shadow-none my-auto">
                            </div>
                        </div>

                        <div class="col-md-12 pt-2">
                            <div class="d-flex">
                                <div class="pe-1 my-auto" style="width:570px;">Name of lender for equity loan or line
                                    of credit:</div>
                                <input type="text" name="equ_loan_lender_name"
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
                                            <input type="text" name="account_type"
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
                                            <input type="text" name="acc_no"
                                                class="w-100 border-none border-0 shadow-none my-auto ">
                                        </div>
                                    </td>
                                    <td rowspan="3">
                                        <div class="tdata d-flex">
                                            <div>$</div><input type="number" name="cur_bal"
                                                class="w-100 border-none border-0 shadow-none my-auto ">
                                        </div>
                                        <div class="tdata d-flex"><span style="width:50px;">as of</span><input
                                                type="text" name="as_cur_bal"
                                                class="w-100 border-none border-0 shadow-none my-auto "> </div>

                                    </td>
                                    <td rowspan="3">
                                        <div class="tdata ">
                                            <div>$</div><input type="number" name="bef_bal"
                                                class="w-100 border-none border-0 shadow-none my-auto ">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:600px;">
                                        <div class="d-flex tdata">
                                            <div style="width:210px;">Name of institution</div>
                                            <input type="text" name="inst_name"
                                                class="w-100 border-none border-0 shadow-none my-auto ">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:600px;">
                                        <div class="d-flex tdata">
                                            <div style="width:210px;">Name on account</div>
                                            <input type="text" name="acc_name"
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
                                            <input type="text" name="account_type1"
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
                                            <input type="text" name="acc_no1"
                                                class="w-100 border-none border-0 shadow-none my-auto ">
                                        </div>
                                    </td>
                                    <td rowspan="3">
                                        <div class="tdata d-flex">
                                            <div>$</div><input type="number" name="cur_bal1"
                                                class="w-100 border-none border-0 shadow-none my-auto ">
                                        </div>
                                        <div class="tdata d-flex"><span style="width:50px;">as of</span><input
                                                type="text" name="as_cur_bal"
                                                class="w-100 border-none border-0 shadow-none my-auto "> </div>

                                    </td>
                                    <td rowspan="3">
                                        <div class="tdata ">
                                            <div>$</div><input type="number" name="bef_bal1"
                                                class="w-100 border-none border-0 shadow-none my-auto ">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:600px;">
                                        <div class="d-flex tdata">
                                            <div style="width:210px;">Name of institution</div>
                                            <input type="text" name="inst_name1"
                                                class="w-100 border-none border-0 shadow-none my-auto ">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:600px;">
                                        <div class="d-flex tdata">
                                            <div style="width:210px;">Name on account</div>
                                            <input type="text" name="acc_name1"
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
                                            <input type="text" name="account_type1"
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
                                            <input type="text" name="acc_no1"
                                                class="w-100 border-none border-0 shadow-none my-auto ">
                                        </div>
                                    </td>
                                    <td rowspan="3">
                                        <div class="tdata d-flex">
                                            <div>$</div><input type="number" name="cur_bal1"
                                                class="w-100 border-none border-0 shadow-none my-auto ">
                                        </div>
                                        <div class="tdata d-flex"><span style="width:50px;">as of</span><input
                                                type="text" name="as_cur_bal1"
                                                class="w-100 border-none border-0 shadow-none my-auto "> </div>

                                    </td>
                                    <td rowspan="3">
                                        <div class="tdata ">
                                            <div>$</div><input type="number" name="bef_bal1"
                                                class="w-100 border-none border-0 shadow-none my-auto ">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:600px;">
                                        <div class="d-flex tdata">
                                            <div style="width:210px;">Name of institution</div>
                                            <input type="text" name="inst_name1"
                                                class="w-100 border-none border-0 shadow-none my-auto ">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:600px;">
                                        <div class="d-flex tdata">
                                            <div style="width:210px;">Name on account</div>
                                            <input type="text" name="acc_name1"
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
                                            <input type="text" name="account_type2"
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
                                            <input type="text" name="acc_no2"
                                                class="w-100 border-none border-0 shadow-none my-auto ">
                                        </div>
                                    </td>
                                    <td rowspan="3">
                                        <div class="tdata d-flex">
                                            <div>$</div><input type="number" name="cur_bal2"
                                                class="w-100 border-none border-0 shadow-none my-auto ">
                                        </div>
                                        <div class="tdata d-flex"><span style="width:50px;">as of</span><input
                                                type="text" name="as_cur_bal2"
                                                class="w-100 border-none border-0 shadow-none my-auto "> </div>

                                    </td>
                                    <td rowspan="3">
                                        <div class="tdata ">
                                            <div>$</div><input type="number" name="bef_bal2"
                                                class="w-100 border-none border-0 shadow-none my-auto ">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:600px;">
                                        <div class="d-flex tdata">
                                            <div style="width:210px;">Name of institution</div>
                                            <input type="text" name="inst_name2"
                                                class="w-100 border-none border-0 shadow-none my-auto ">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:600px;">
                                        <div class="d-flex tdata">
                                            <div style="width:210px;">Name on account</div>
                                            <input type="text" name="acc_name2"
                                                class="w-100 border-none border-0 shadow-none my-auto ">
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                </section>

                {{-- section_four --}}
                <section class="section_area p-5" id="section_four">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="h5 mb-0">Domestic Relations Verified Financial Information Form (6/22)</div>
                            <div class="fs-6"><span>Page 4 of </span><span> <input type="text" name="page"
                                        style="width:20px;"
                                        class="border-none border-0 border-bottom  shadow-none "></span></div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex justify-content-end">
                                <div>Case No.</div>
                                <input type="text" name="case_no"
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
                                <input type="text" name="ce_name"
                                    class="w-100 border-none border-0 border-bottom  shadow-none my-auto">
                            </div>
                        </div>

                        <div class="col-md-4 pt-2">
                            <div class="d-flex">
                                <div class="pe-1 my-auto">Lump sum value:</div>
                                <span>$</span>
                                <input type="text" name="lum_sum_val"
                                    class="border-none border-0 border-bottom  shadow-none my-auto">
                            </div>
                        </div>
                        <div class="col-md-5 pt-2">
                            <div class="d-flex">
                                <div class="pe-1 my-auto">Estimated monthly payment:</div>
                                <span>$</span>
                                <input type="text" name="est_monthly_payment"
                                    class="border-none border-0 border-bottom  shadow-none my-auto">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="d-flex">
                                <div class="pe-1 my-auto" style="width:83rem">Earliest date you are eligible to
                                    receive your pension benefit:</div>
                                <div class="w-100">
                                    <input type="text" name="pension_benefit_date"
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
                            <div class="d-flex">
                                <div class="pe-1 my-auto" style="width:300px;">Insurance Company:</div>
                                <input type="text" name="ins_comp"
                                    class="w-100 border-none border-0 border-bottom  shadow-none my-auto">
                            </div>
                        </div>
                        <div class="col-md-6 pt-2">
                            <div class="d-flex">
                                <div class="pe-1 my-auto" style="width:300px;">Policy no.:</div>
                                <input type="text" name="policy_no"
                                    class="w-100 border-none border-0 border-bottom  shadow-none my-auto">
                            </div>
                        </div>

                        <div class="col-md-6 pt-2">
                            <div class="d-flex">
                                <div class="pe-1 my-auto" style="width:300px;">Policy owner:</div>
                                <input type="text" name="policy_owner"
                                    class="w-100 border-none border-0 border-bottom  shadow-none my-auto">
                            </div>
                        </div>
                        <div class="col-md-6 pt-2">
                            <div class="d-flex">
                                <div class="pe-1 my-auto" style="width:300px;">Beneficiary:</div>
                                <input type="text" name="beneficiary"
                                    class="w-100 border-none border-0 border-bottom  shadow-none my-auto">
                            </div>
                        </div>

                        <div class="col-md-6 pt-2">
                            <div class="d-flex">
                                <div class="pe-1 my-auto" style="width:153px;">Death benefit:</div>
                                <div class="my-auto">$</div>
                                <input type="text" name="death_benefit"
                                    class="w-100 border-none border-0 border-bottom  shadow-none my-auto">
                            </div>
                        </div>
                        <div class="col-md-6 pt-2">
                            <div class="d-flex d_sm_block">
                                <div class="pe-1 ">Premium:</div>
                                <div class="">$</div>
                                <input type="text" name="premium"
                                    class="border-none border-0 border-bottom  shadow-none h-100 ">
                                <div class="">per</div>
                                <div class="">
                                    <input type="text" name="pension_benefit_date"
                                        class="w-100 border-none border-0 border-bottom  shadow-none ">
                                    <div class="text-sm fs-6">week/month/year</div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-7 pt-2">
                            <div class="d-flex d_sm_block">
                                <div class="pe-1 " style="width: 180px;">Cash/surrender value:</div>
                                <div class="">$</div>
                                <input type="text" name="premium"
                                    class="border-none border-0 border-bottom  shadow-none h-100 ">
                                <div class="" style="width: 50px">as of</div>
                                <div class="">
                                    <input type="text" name="pension_benefit_date"
                                        class="border-none border-0 border-bottom  shadow-none ">
                                    <span>.</span>
                                    <div class="text-sm fs-6">Date</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 pt-2 my-auto">
                            <div class="ms-3">
                                <input type="checkbox" name="taxable" value="taxable">
                                <label for="">Taxable</label>
                            </div>
                        </div>
                        <div class="col-md-6 pt-2">
                            <span>Employer provided:</span>
                            <span class="ps-3">
                                <input type="checkbox" name="emp_provided" value="yes">
                                <label for="">Yes</label>
                            </span>
                            <span>
                                <input type="checkbox" name="emp_provided" value="no">
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
                                            <input type="text" name="year_model"
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
                                            <input type="text" name="title_holder"
                                                class="w-100 border-none border-0 shadow-none my-auto ">
                                        </div>
                                    </td>
                                    <td rowspan="3">
                                        <div class="tdata d-flex">
                                            <div>$</div><input type="number" name="owned_amnt"
                                                class="w-100 border-none border-0 shadow-none my-auto ">
                                        </div>
                                        <div class="tdata d-flex"><span style="width:50px;">as of</span><input
                                                type="text" name="as_owned_amnt"
                                                class="w-100 border-none border-0 shadow-none my-auto "> </div>

                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:600px;">
                                        <div class="d-flex tdata">
                                            <div style="width:210px;">Lender</div>
                                            <input type="text" name="lender"
                                                class="w-100 border-none border-0 shadow-none my-auto ">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:600px;">
                                        <div class="d-flex tdata">
                                            <div style="width:210px;">Estimated value</div>
                                            <input type="text" name="m_estm_val"
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
                                            <input type="text" name="year_model1"
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
                                            <input type="text" name="title_holder1"
                                                class="w-100 border-none border-0 shadow-none my-auto ">
                                        </div>
                                    </td>
                                    <td rowspan="3">
                                        <div class="tdata d-flex">
                                            <div>$</div><input type="number" name="owned_amnt1"
                                                class="w-100 border-none border-0 shadow-none my-auto ">
                                        </div>
                                        <div class="tdata d-flex"><span style="width:50px;">as of</span><input
                                                type="text" name="as_owned_amnt1"
                                                class="w-100 border-none border-0 shadow-none my-auto "> </div>

                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:600px;">
                                        <div class="d-flex tdata">
                                            <div style="width:210px;">Lender</div>
                                            <input type="text" name="lender1"
                                                class="w-100 border-none border-0 shadow-none my-auto ">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:600px;">
                                        <div class="d-flex tdata">
                                            <div style="width:210px;">Estimated value</div>
                                            <input type="text" name="m_estm_val1"
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
                                            <input type="text" name="year_model2"
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
                                            <input type="text" name="title_holder2"
                                                class="w-100 border-none border-0 shadow-none my-auto ">
                                        </div>
                                    </td>
                                    <td rowspan="3">
                                        <div class="tdata d-flex">
                                            <div>$</div><input type="number" name="owned_amnt2"
                                                class="w-100 border-none border-0 shadow-none my-auto ">
                                        </div>
                                        <div class="tdata d-flex"><span style="width:50px;">as of</span><input
                                                type="text" name="as_owned_amnt1"
                                                class="w-100 border-none border-0 shadow-none my-auto "> </div>

                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:600px;">
                                        <div class="d-flex tdata">
                                            <div style="width:210px;">Lender</div>
                                            <input type="text" name="lender2"
                                                class="w-100 border-none border-0 shadow-none my-auto ">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:600px;">
                                        <div class="d-flex tdata">
                                            <div style="width:210px;">Estimated value</div>
                                            <input type="text" name="m_estm_val2"
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
                                            <input type="text" name="year_model3"
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
                                            <input type="text" name="title_holder3"
                                                class="w-100 border-none border-0 shadow-none my-auto ">
                                        </div>
                                    </td>
                                    <td rowspan="3">
                                        <div class="tdata d-flex">
                                            <div>$</div><input type="number" name="owned_amnt3"
                                                class="w-100 border-none border-0 shadow-none my-auto ">
                                        </div>
                                        <div class="tdata d-flex"><span style="width:50px;">as of</span><input
                                                type="text" name="as_owned_amnt3"
                                                class="w-100 border-none border-0 shadow-none my-auto "> </div>

                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:600px;">
                                        <div class="d-flex tdata">
                                            <div style="width:210px;">Lender</div>
                                            <input type="text" name="lender3"
                                                class="w-100 border-none border-0 shadow-none my-auto ">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:600px;">
                                        <div class="d-flex tdata">
                                            <div style="width:210px;">Estimated value</div>
                                            <input type="text" name="m_estm_val3"
                                                class="w-100 border-none border-0 shadow-none my-auto ">
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </section>

                {{-- section_five --}}
                <section class="section_area p-5" id="section_five">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="h5 mb-0">Domestic Relations Verified Financial Information Form (6/22)</div>
                            <div class="fs-6"><span>Page 5 of </span><span> <input type="text" name="page"
                                        style="width:20px;"
                                        class="border-none border-0 border-bottom  shadow-none "></span></div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex justify-content-end">
                                <div>Case No.</div>
                                <input type="text" name="case_no"
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
                                        <input type="text" name="prop_desc"
                                            class="w-100 border-none border-0 shadow-none my-2 ">
                                    </td>
                                    <td class="tdata d-flex border-0">
                                        <span class="my-auto">$</span>
                                        <input type="number" name="prop_estm_val"
                                            class="w-100 border-none border-0 shadow-none my-2 ">
                                    </td>
                                    <td class="tdata">
                                        <input type="text" name="prop_pur_date"
                                            class="w-100 border-none border-0 shadow-none my-2 ">
                                    </td>
                                </tr>
                                <tr class="fs-6 p-2">
                                    <td class="tdata">
                                        <input type="text" name="prop_desc1"
                                            class="w-100 border-none border-0 shadow-none my-2 ">
                                    </td>
                                    <td class="tdata d-flex border-0">
                                        <span class="my-auto">$</span>
                                        <input type="number" name="prop_estm_val1"
                                            class="w-100 border-none border-0 shadow-none my-2 ">
                                    </td>
                                    <td class="tdata">
                                        <input type="text" name="prop_pur_date1"
                                            class="w-100 border-none border-0 shadow-none my-2 ">
                                    </td>
                                </tr>
                                <tr class="fs-6 p-2">
                                    <td class="tdata">
                                        <input type="text" name="prop_desc2"
                                            class="w-100 border-none border-0 shadow-none my-2 ">
                                    </td>
                                    <td class="tdata d-flex border-0">
                                        <span class="my-auto">$</span>
                                        <input type="number" name="prop_estm_val2"
                                            class="w-100 border-none border-0 shadow-none my-2 ">
                                    </td>
                                    <td class="tdata">
                                        <input type="text" name="prop_pur_date2"
                                            class="w-100 border-none border-0 shadow-none my-2 ">
                                    </td>
                                </tr>
                                <tr class="fs-6 p-2">
                                    <td class="tdata">
                                        <input type="text" name="prop_desc3"
                                            class="w-100 border-none border-0 shadow-none my-2 ">
                                    </td>
                                    <td class="tdata d-flex border-0">
                                        <span class="my-auto">$</span>
                                        <input type="number" name="prop_estm_val3"
                                            class="w-100 border-none border-0 shadow-none my-2 ">
                                    </td>
                                    <td class="tdata">
                                        <input type="text" name="prop_pur_date3"
                                            class="w-100 border-none border-0 shadow-none my-2 ">
                                    </td>
                                </tr>
                                <tr class="fs-6 p-2">
                                    <td class="tdata">
                                        <input type="text" name="prop_desc4"
                                            class="w-100 border-none border-0 shadow-none my-2 ">
                                    </td>
                                    <td class="tdata d-flex border-0">
                                        <span class="my-auto">$</span>
                                        <input type="number" name="prop_estm_val4"
                                            class="w-100 border-none border-0 shadow-none my-2 ">
                                    </td>
                                    <td class="tdata">
                                        <input type="text" name="prop_pur_date4"
                                            class="w-100 border-none border-0 shadow-none my-2 ">
                                    </td>
                                </tr>
                                <tr class="fs-6 p-2">
                                    <td class="tdata">
                                        <input type="text" name="prop_desc5"
                                            class="w-100 border-none border-0 shadow-none my-2 ">
                                    </td>
                                    <td class="tdata d-flex border-0">
                                        <span class="my-auto">$</span>
                                        <input type="number" name="prop_estm_val5"
                                            class="w-100 border-none border-0 shadow-none my-2 ">
                                    </td>
                                    <td class="tdata">
                                        <input type="text" name="prop_pur_date5"
                                            class="w-100 border-none border-0 shadow-none my-2 ">
                                    </td>
                                </tr>
                                <tr class="fs-6 p-2">
                                    <td class="tdata">
                                        <input type="text" name="prop_desc6"
                                            class="w-100 border-none border-0 shadow-none my-2 ">
                                    </td>
                                    <td class="tdata d-flex border-0">
                                        <span class="my-auto">$</span>
                                        <input type="number" name="prop_estm_val6"
                                            class="w-100 border-none border-0 shadow-none my-2 ">
                                    </td>
                                    <td class="tdata">
                                        <input type="text" name="prop_pur_date6"
                                            class="w-100 border-none border-0 shadow-none my-2 ">
                                    </td>
                                </tr>
                                <tr class="fs-6 p-2">
                                    <td class="tdata">
                                        <input type="text" name="prop_desc7"
                                            class="w-100 border-none border-0 shadow-none my-2 ">
                                    </td>
                                    <td class="tdata d-flex border-0">
                                        <span class="my-auto">$</span>
                                        <input type="number" name="prop_estm_val7"
                                            class="w-100 border-none border-0 shadow-none my-2 ">
                                    </td>
                                    <td class="tdata">
                                        <input type="text" name="prop_pur_date7"
                                            class="w-100 border-none border-0 shadow-none my-2 ">
                                    </td>
                                </tr>
                                <tr class="fs-6 p-2">
                                    <td class="tdata">
                                        <input type="text" name="prop_desc8"
                                            class="w-100 border-none border-0 shadow-none my-2 ">
                                    </td>
                                    <td class="tdata d-flex border-0">
                                        <span class="my-auto">$</span>
                                        <input type="number" name="prop_estm_val9"
                                            class="w-100 border-none border-0 shadow-none my-2 ">
                                    </td>
                                    <td class="tdata">
                                        <input type="text" name="prop_pur_date9"
                                            class="w-100 border-none border-0 shadow-none my-2 ">
                                    </td>
                                </tr>
                            </table>
                            <div class="row mt-3">
                                <div class="col-7"></div>
                                <div class="col-4">
                                    <span>Total:</span>
                                    <span class="fs-6">$</span>
                                    <input type="text" name="prop_total"
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
                                <input type="checkbox" name="pay_expense" value="yes">
                                <label for="">Yes</label>
                            </div>
                            <div>
                                <input type="checkbox" name="pay_expense" value="no">
                                <label for="">No</label>
                            </div>
                            <div class="ps-5">
                                If yes, provide information on where it is located and a list of the
                            </div>
                        </div>
                        <div class="col-md-12 ">
                            <div class="d-flex">
                                <div class="pe-1 my-auto" style="width:80px;">contents:</div>
                                <input type="text" name="contents"
                                    class="w-100 border-none border-0 border-bottom  shadow-none my-auto">
                            </div>
                        </div>

                        <div class="col-md-12 pt-3 d-flex gap-3">
                            <div>2. Are any accounts, money, or assets being held for your benefit?</div>
                            <div>
                                <input type="checkbox" name="acc_benifit" value="yes">
                                <label for="">Yes</label>
                            </div>
                            <div>
                                <input type="checkbox" name="acc_benifit" value="no">
                                <label for="">No</label>
                            </div>
                            <div class="ps-5">
                                If yes, provide amount, where it is held, and the reason it
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="d-flex">
                                <div class="pe-1 my-auto" style="width:130px;"> is being held:</div>
                                <input type="text" name="contents"
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
                                    <input type="checkbox" name="acc_benifit" value="yes">
                                    <label for="">Yes</label>
                                </div>
                                <div>
                                    <input type="checkbox" name="acc_benifit" value="no">
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
                                <input type="text" name="cust_loc"
                                    class="w-100 border-none border-0 border-bottom  shadow-none my-auto">
                            </div>
                        </div>

                        <div class="col-md-12 pt-4 d-flex gap-3">
                            <div>4. Do you have any ownership interests in any type of business?</div>
                            <div>
                                <input type="checkbox" name="pay_expense" value="yes">
                                <label for="">Yes</label>
                            </div>
                            <div>
                                <input type="checkbox" name="pay_expense" value="no">
                                <label for="">No</label>
                            </div>
                            <div class="ps-5">
                                If yes, describe the business and what your ownership
                            </div>
                        </div>
                        <div class="col-md-12 ">
                            <div class="d-flex">
                                <div class="pe-1 my-auto" style="width:130px;">interests are:</div>
                                <input type="text" name="contents"
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
                                    <input type="checkbox" name="oth_income" value="yes">
                                    <label for="">Yes</label>
                                </div>
                                <div>
                                    <input type="checkbox" name="oth_income" value="no">
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
                                <input type="text" name="oth_income_desc"
                                    class="w-100 border-none border-0 border-bottom  shadow-none my-auto">
                            </div>
                        </div>
                    </div>
                </section>

                {{-- section_six --}}
                <section class="section_area p-5" id="section_six">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="h5 mb-0">Domestic Relations Verified Financial Information Form (6/22)</div>
                            <div class="fs-6"><span>Page 6 of </span><span> <input type="text" name="page"
                                        style="width:20px;"
                                        class="border-none border-0 border-bottom  shadow-none "></span></div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex justify-content-end">
                                <div>Case No.</div>
                                <input type="text" name="case_no"
                                    class="border-none border-0 border-bottom  shadow-none my-auto">
                            </div>
                        </div>

                        <div class="col-md-12 pt-4 d-flex gap-3">
                            <div style="width:430px">6. Are there any debts that are owed to you?</div>
                            <div>
                                <input type="checkbox" name="own_debt" value="yes">
                                <label for="">Yes</label>
                            </div>
                            <div>
                                <input type="checkbox" name="own_debt" value="no">
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
                                <input type="text" name="own_debt_desc"
                                    class="w-100 border-none border-0 border-bottom  shadow-none my-auto">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <input type="text" name="own_debt_desc1"
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
                                    <input type="checkbox" name="elec_curr" value="yes">
                                    <label for="">Yes</label>
                                </div>
                                <div>
                                    <input type="checkbox" name="elec_curr" value="no">
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
                                <input type="text" name="cust_loc"
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
                                    <input type="checkbox" name="elec_curr" value="yes">
                                    <label for="">Yes</label>
                                </div>
                                <div>
                                    <input type="checkbox" name="elec_curr" value="no">
                                    <label for="">No</label>
                                </div>
                                <div class="ps-5 d-flex">
                                    <div style="width:530px" class="responsive_input">If yes, describe the case,
                                        where it is filed and the
                                        possible liability:</div>
                                    <input type="text" name="elec_curr_desc"
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
                                            <input type="text" name="debt_type"
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
                                            <input type="text" name="debt_lender_name"
                                                class="w-100 border-none border-0 shadow-none my-auto ">
                                        </div>
                                    </td>
                                    <td rowspan="3">
                                        <div class="tdata d-flex">
                                            <div>$</div><input type="number" name="debt_own_bal"
                                                class="w-100 border-none border-0 shadow-none my-auto ">
                                        </div>
                                        <div class="tdata d-flex"><span style="width:50px;">as of</span><input
                                                type="text" name="debt_as_own_bal"
                                                class="w-100 border-none border-0 shadow-none my-auto "> </div>

                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:600px;">
                                        <div class="d-flex tdata">
                                            <div style="width:110px;">Account no</div>
                                            <input type="text" name="debt_acc_no"
                                                class="w-100 border-none border-0 shadow-none my-auto ">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:600px;">
                                        <div class="d-flex tdata">
                                            <div style="width:220px;">Name(s) on account</div>
                                            <input type="text" name="debt_acc_name"
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
                                            <input type="text" name="debt_type1"
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
                                            <input type="text" name="debt_lender_name1"
                                                class="w-100 border-none border-0 shadow-none my-auto ">
                                        </div>
                                    </td>
                                    <td rowspan="3">
                                        <div class="tdata d-flex">
                                            <div>$</div><input type="number" name="debt_own_bal1"
                                                class="w-100 border-none border-0 shadow-none my-auto ">
                                        </div>
                                        <div class="tdata d-flex"><span style="width:50px;">as of</span><input
                                                type="text" name="debt_as_own_bal1"
                                                class="w-100 border-none border-0 shadow-none my-auto "> </div>

                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:600px;">
                                        <div class="d-flex tdata">
                                            <div style="width:110px;">Account no</div>
                                            <input type="text" name="debt_acc_no1"
                                                class="w-100 border-none border-0 shadow-none my-auto ">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:600px;">
                                        <div class="d-flex tdata">
                                            <div style="width:220px;">Name(s) on account</div>
                                            <input type="text" name="debt_acc_name1"
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
                                            <input type="text" name="debt_type2"
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
                                            <input type="text" name="debt_lender_name2"
                                                class="w-100 border-none border-0 shadow-none my-auto ">
                                        </div>
                                    </td>
                                    <td rowspan="3">
                                        <div class="tdata d-flex">
                                            <div>$</div><input type="number" name="debt_own_bal2"
                                                class="w-100 border-none border-0 shadow-none my-auto ">
                                        </div>
                                        <div class="tdata d-flex"><span style="width:50px;">as of</span><input
                                                type="text" name="debt_as_own_bal2"
                                                class="w-100 border-none border-0 shadow-none my-auto "> </div>

                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:600px;">
                                        <div class="d-flex tdata">
                                            <div style="width:110px;">Account no</div>
                                            <input type="text" name="debt_acc_no2"
                                                class="w-100 border-none border-0 shadow-none my-auto ">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:600px;">
                                        <div class="d-flex tdata">
                                            <div style="width:220px;">Name(s) on account</div>
                                            <input type="text" name="debt_acc_name2"
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
                                            <input type="text" name="debt_type3"
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
                                            <input type="text" name="debt_lender_name3"
                                                class="w-100 border-none border-0 shadow-none my-auto ">
                                        </div>
                                    </td>
                                    <td rowspan="3">
                                        <div class="tdata d-flex">
                                            <div>$</div><input type="number" name="debt_own_bal3"
                                                class="w-100 border-none border-0 shadow-none my-auto ">
                                        </div>
                                        <div class="tdata d-flex"><span style="width:50px;">as of</span><input
                                                type="text" name="debt_as_own_bal3"
                                                class="w-100 border-none border-0 shadow-none my-auto "> </div>

                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:600px;">
                                        <div class="d-flex tdata">
                                            <div style="width:110px;">Account no</div>
                                            <input type="text" name="debt_acc_no3"
                                                class="w-100 border-none border-0 shadow-none my-auto ">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:600px;">
                                        <div class="d-flex tdata">
                                            <div style="width:220px;">Name(s) on account</div>
                                            <input type="text" name="debt_acc_name3"
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

                {{-- section_last --}}
                <section class="section_area p-5" id="section_last">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="h5 mb-0">Domestic Relations Verified Financial Information Form (6/22)</div>
                            <div class="fs-6"><span>Page 7 of </span><span> <input type="text" name="page"
                                        style="width:20px;"
                                        class="border-none border-0 border-bottom  shadow-none "></span></div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex justify-content-end">
                                <div>Case No.</div>
                                <input type="text" name="case_no"
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
                                    <input type="text" name="obg_type"
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
                                <input type="text" name="pay_amount"
                                    class="border-none border-0 border-bottom  shadow-none h-100 ">
                                <div class="">per</div>
                                <div class="">
                                    <input type="text" name="per_pay_amount"
                                        class="w-100 border-none border-0 border-bottom  shadow-none ">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 pt-2">
                            <div class="d-flex">
                                <div class=" " style="width:300px;">Balance (if applicable):</div>
                                <input type="text" name="ap_bal"
                                    class="w-100 border-none border-0 border-bottom  shadow-none ">
                            </div>
                        </div>
                        <div class="col-md-6 pt-2">
                            <div class="d-flex">
                                <div class="" style="width:600px;">Estimated end date (if applicable):</div>
                                <div>$</div>
                                <div class="w-100">
                                    <input type="text" name="ap_est_date"
                                        class="w-100 border-none border-0 border-bottom  shadow-none ">
                                    <div class="text-sm fs-6">Date</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex">
                                <div>Court:</div>
                                <input type="text" name="court"
                                    class="w-100 border-none border-0 border-bottom  shadow-none ">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex">
                                <div style="width:100px;">Case No.:</div>
                                <input type="text" name="case_no"
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
                                <input type="checkbox" name="bankruptcy" value="yes">
                                <label for="">Yes</label>
                            </div>
                            <div class="px-3">
                                <input type="checkbox" name="bankruptcy" value="no">
                                <label for="">No</label>
                            </div>
                            <div class="ps-5">
                                If yes, provide the date, case number, and current status
                                of the bankruptcy
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="ps-3">
                                <input type="text" name="bankruptcy_desc"
                                    class="w-100 border-none border-0 border-bottom  shadow-none ">
                            </div>
                        </div>

                        <div class="col-md-12 pt-2 d-flex gap-3">
                            <div>2. Do you claim that any of the assets or debts that you listed are your separate
                                property?</div>
                            <div class="px-3">
                                <input type="checkbox" name="sep_prop" value="yes">
                                <label for="">Yes</label>
                            </div>
                            <div class="px-3">
                                <input type="checkbox" name="sep_prop" value="no">
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
                                <input type="text" name="sep_prop_desc"
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
                                    <input type="text" name="sep_prop_desc"
                                        class="w-100 border-none border-0 border-bottom  shadow-none ">
                                </div>
                                <div class="pt-3">
                                    <input type="text" name="sep_prop_desc"
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
                                <input type="text" name="date"
                                    class="border-none border-0 border-bottom  shadow-none ">
                                <div class="fs-6">Date</div>
                            </div>
                        </div>

                        <div class="col-md-5">
                            <div>
                                <input type="text" name="sign"
                                    class="border-none border-0 border-bottom  shadow-none w-100">
                                <div class="fs-6">Signature</div>
                            </div>
                        </div>

                        <div class="col-md-12 pt-5">
                            <div class="d-flex ps-3">
                                <div style="width:430px;">Subscribed and sworn to before me on</div>
                                <div class="w-100">
                                    <input type="text" name="subs_date"
                                        class="border-none border-0 border-bottom  shadow-none w-100">
                                    <div class="fs-6">Date</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6"></div>
                        <div class="col-md-6 ms-auto">
                            <div class="w-100 ">
                                <input type="text" name="subs_date"
                                    class="border-none border-0 border-bottom  shadow-none w-100">
                                <div class="fs-6">Deputy clerk/Notary public signature</div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="d-flex ps-3">
                                <div style="width:355px;">My commission expires on</div>
                                <input type="text" name="com_date"
                                    class="border-none border-0 border-bottom  shadow-none w-100">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div>
                                <input type="text" name="print_name"
                                    class="border-none border-0 border-bottom  shadow-none ">
                                <div class="fs-6">Name (type or print)</div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="ps-3">Notary public, State of Michigan, County of
                                <input type="text" name="notary"
                                    class="border-none border-0 border-bottom  shadow-none ">
                                <span>.</span>
                                <input type="checkbox" name="notry_county">
                                Acting in the County of
                                <input type="text" name="print_name"
                                    class="border-none border-0 border-bottom  shadow-none">
                                <span>.</span>
                            </div>
                        </div>
                        <div class="col-md-12 pb-5 mb-5">
                            <div class="ps-3">
                                <input type="checkbox" name="elec_notr">
                                This notarial act was performed using an electronic notarization system or a remote
                                electronic notarization platform.
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-3">
                        <button type="butt  on" class="bg-transparent px-4 me-4">Submit</button>

                    </div>
                    {{-- <div class="mx-5 px-5"> --}}
                        @include('layouts.pagination', ['page' => 6 ])
                    {{-- </div> --}}
                </section>
            </form>
        </div>
    </div>
</body>

</html>
