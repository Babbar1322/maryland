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
            border-bottom: 1px solid black !important;
            box-shadow: none !important;
        }

        input,
        table {
            background-color: transparent !important;
        }

        body {
            font-family: "unset";
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
            font-size: 16px;
        }

        .pb-500 {
            padding-bottom: 500px;
        }

        .tdata input:focus,
        .tdata textarea:focus {
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
                <section class="section_area">
                    <div class="text-center py-4"><a href="#" class="text-dark">Click here</a> to get more
                        information
                        about the fields on this form.</div>
                    <div class="row px-5 py-5 pt-2">
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-6 lh-1 py-2">
                                    <h4 class="fw-bold">FINANCIAL AFFIDAVIT</h4>
                                    <div class="fs-6">JD-FM-6-SHORT Rev. 2-16</div>
                                    <div class="fs-6">P.B. §§ 25-30, 25a-15</div>
                                </div>
                                <div class="col-md-6 text-center lh-1 py-2">
                                    <h4 class="mb-0">STATE OF CONNECTICUT</h4>
                                    <h4 class="mb-0 fw-bold">SUPERIOR COURT</h4>
                                    <a href="#" class="text-decoration-none text-dark fs-6">www.jud.ct.gov</a>
                                </div>
                            </div>

                            <div>
                                <h4 class="fw-bold">Instructions</h4>
                                <p class="small_text pe-5 ps-1 fst-italic">Use this short version if your <span
                                        class="fw-bold ">gross annual income is
                                        less than $75,000 </span> (see Section I.
                                    Income) and your <span class="fw-bold "> total net assets are less than $75,000
                                    </span> (see Section IV. Assets).
                                    Otherwise, use the long version, form JD-FM-6-LONG.</p>
                            </div>
                        </div>
                        <div class="col-md-4 pt-2">
                            <div class="mx-auto row">
                                <div class="col"></div>
                                <div class="col-4 w-50">
                                    <div class="border border-1 border-dark">
                                        <div class="text-center fs-6">Court Use Only</div>
                                    </div>
                                    <div class="border border-1 border-dark">
                                        <h5 class="fw-bold text-center">FINAFFS</h5>
                                    </div>
                                </div>
                                <div class="col">
                                    <div>bar code</div>
                                </div>
                            </div>
                            <div class="border border-2 border-dark lh-1">
                                <h6 class="fw-bold text-center">ADA NOTICE</h6>
                                <div class="fs-6 px-3">The Judicial Branch of the State of Connecticut complies with the
                                    Americans with Disabilities Act (ADA). If you need a reasonable
                                    accommodation in accordance with the ADA, contact a court
                                    clerk or an ADA contact person listed at www.jud.ct.gov/ADA.</div>
                            </div>
                            <div class="col-md-8 float-end">
                                <div class="border border-1 border-dark px-2 border-bottom-0 border-top-0">
                                    <div class="fs-6">Docket number</div>
                                    <div class="tdata d-flex gap-2">
                                        <input type="text" name="account_type" class="border-0" style="width: 29px"
                                            maxlength="3">
                                        <div class="fw-bold">- FA -</div>
                                        <input type="text" name="account_type" class="border-0 " style="width: 29px"
                                            maxlength="2">
                                        <div class="fw-bold">-</div>
                                        <input type="text" name="account_type" class="border-0 " style="width: 45px"
                                            maxlength="7">
                                        <div class="fw-bold">- S</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="border border-1 border-dark border-end-0 border-start-0 border-top-0"></div>
                            <div class="d-flex lh-4">
                                <div class="fs-6 ps-2 pe-4 w-25">
                                    <div>For the Judicial District of</div>
                                    <div class="tdata w-100">
                                        <input type="text" name="jud_dist" class="border-0 w-100">
                                    </div>
                                </div>
                                <div class="border border-1 border-dark border-start-0 border-bottom-0 border-top-0">
                                </div>
                                <div class="fs-6 ps-2 pe-4 w-75">
                                    <div> At (Address of Court) </div>
                                    <div class="tdata w-100">
                                        <input type="text" name="court_address" class="border-0 w-100">
                                    </div>
                                </div>
                            </div>
                            <div class="border border-1 border-dark border-end-0 border-start-0 border-top-0"></div>
                            <div class="ps-2 pe-4">
                                <div class="fs-6">Name of case</div>
                                <div class="tdata w-100">
                                    <input type="text" name="case_name" class="border-0 w-100">
                                </div>
                            </div>
                            <div class="border border-1 border-dark border-end-0 border-start-0 border-top-0"></div>
                            <div class="ps-2 pe-4">
                                <div class="fs-6">Name of affiant (Person submitting this form)</div>
                                <div class="tdata d-flex gap-5 ">
                                    <input type="text" name="affiant_name" class="border-0 w-100">
                                    <div class="d-flex gap-2">
                                        <input type="checkbox" name="affiant_type" value="plaintiff">
                                        <label for="">Plaintiff</label>
                                    </div>
                                    <div class="d-flex gap-2">
                                        <input type="checkbox" name="affiant_type" value="defendant">
                                        <label for="">Defendant</label>
                                    </div>
                                </div>
                            </div>
                            <div class="border border-1 border-dark border-end-0 border-start-0 border-top-0"></div>
                        </div>

                        <div class="col-md-12 pt-5">
                            <h4 class="fw-bold">Certification</h4>
                            <div class="pt-3">
                                <div>I understand that the information stated on this Financial Statement and the
                                    attached Schedules, if any, is complete, true, and
                                    accurate. <span class="fw-bold ">I understand that willful misrepresentation of any
                                        of the information provided will subject me to sanctions
                                        and may result in criminal charges being filed against me.</span></div>
                            </div>
                        </div>

                        <div class="col-md-12 pt-5">
                            <h4 class="fw-bold"> I. Income</h4>
                            <h5 class="fw-bold pt-3"> 1) Gross Weekly Income/Monies and Benefits From All Sources</h5>
                            <div class="ps-3 lh-sm">
                                <div>Computed based on year-to-date, but no less than the last 13 weeks. If computation
                                    is based on less than 13 weeks or if
                                    your computations are not reflective of current wages, explain:</div>
                                <div class="tdata">
                                    <textarea name="" id="" rows="2" class="border-0 w-100"></textarea>
                                </div>
                                <div class="d-flex gap-3">
                                    <div>Paid:</div>
                                    <div class="d-flex gap-2">
                                        <input type="checkbox" name="affiant_type" value="plaintiff">
                                        <label for="">Weekly</label>
                                    </div>
                                    <div class="d-flex gap-2">
                                        <input type="checkbox" name="affiant_type" value="plaintiff">
                                        <label for="">Bi-weekly</label>
                                    </div>
                                    <div class="d-flex gap-2">
                                        <input type="checkbox" name="affiant_type" value="plaintiff">
                                        <label for="">Monthly</label>
                                    </div>
                                    <div class="d-flex gap-2">
                                        <input type="checkbox" name="affiant_type" value="plaintiff">
                                        <label for="">Semi-monthly</label>
                                    </div>
                                    <div class="d-flex gap-2">
                                        <input type="checkbox" name="affiant_type" value="plaintiff">
                                        <label for="">Annually</label>
                                    </div>

                                </div>

                                <div class="py-2">If income is not paid weekly, adjust the rate of pay to weekly as
                                    follows:</div>
                                <table class="table-bordered border border-2 border-dark">
                                    <tr>
                                        <td class="ps-4 pe-0 pb-1">Bi-weekly → divide by 2</td>
                                        <td class="ps-4 pe-0 pb-1">Semi-monthly → multiply by 2, multiply by 12, divide
                                            by 52</td>
                                    </tr>
                                    <tr>
                                        <td class="ps-4 pt-0 pe-0 pb-1">
                                            Monthly → multiply by 12, divide by 52
                                        </td>
                                        <td class="ps-4 pt-0 pb-1">
                                            Annually → divide by 52
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <div class="col-1 pt-3 p-0" style="width: 10px;">
                            <div>(a)</div>
                        </div>
                        <div class="col pt-3 text-center">
                            <div>Employer</div>
                            <div class="d-flex pt-3">
                                <div style="width: 50px;">Job 1</div>
                                <input type="text" name="job1" class="w-100  border-0 border-bottom">
                            </div>
                            <div class="d-flex pt-3">
                                <div style="width: 50px;">Job 2</div>
                                <input type="text" name="job2" class="w-100  border-0 border-bottom">
                            </div>
                            <div class="d-flex pt-3">
                                <div style="width: 50px;">Job 3</div>
                                <input type="text" name="job3" class="w-100  border-0 border-bottom">
                            </div>
                        </div>
                        <div class="col pt-3">
                            <div>Address</div>
                            <div class="pt-3">
                                <input type="text" name="address1" class="w-100  border-0 border-bottom">
                            </div>
                            <div class="pt-3">
                                <input type="text" name="address2" class="w-100  border-0 border-bottom">
                            </div>
                            <div class="pt-3">
                                <input type="text" name="address3" class="w-100  border-0 border-bottom">
                            </div>
                        </div>

                        <div class="col pt-3 ps-0">
                            <div class="text-center">Base Pay:</div>
                            <div class="d-flex gap-3 pt-3">
                                <div>
                                    <input type="checkbox" name="job1_salary" value="salary1">
                                    <label for=""> Salary</label>
                                </div>
                                <div>
                                    <input type="checkbox" name="job1_wages" value="wages1">
                                    <label for=""> Wages</label>
                                </div>
                                <div>$ <input type="text" name="base_pay1" class="border-0 border-bottom"></div>
                            </div>
                            <div class="d-flex gap-3 pt-3">
                                <div>
                                    <input type="checkbox" name="job2_salary" value="salary2">
                                    <label for=""> Salary</label>
                                </div>
                                <div>
                                    <input type="checkbox" name="job2_wages" value="wages2">
                                    <label for=""> Wages</label>
                                </div>
                                <div>$ <input type="text" name="base_pay2" class="border-0 border-bottom"></div>
                            </div>
                            <div class="d-flex gap-3 pt-3">
                                <div>
                                    <input type="checkbox" name="job3_salary" value="salary3">
                                    <label for=""> Salary</label>
                                </div>
                                <div>
                                    <input type="checkbox" name="job3_wages" value="wages3">
                                    <label for=""> Wages</label>
                                </div>
                                <div>$ <input type="text" name="base_pay3" class="border-0 border-bottom"></div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="row ps-3 pe-5 pt-3">
                                <div class="col-10 d-flex">
                                    <div class="fw-bold">
                                        Total of base pay from salary and wages of all jobs
                                    </div>
                                    <div>
                                        ...................................................................................................................
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="d-flex">$
                                        <input type="text" name="base_pay4"
                                            class="border-0 border-bottom text-end fw-bold" value="0" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 d-flex ps-0">
                            <div>(b)</div>
                            <div class="ps-3 d-flex w-100">
                                <div class="d-flex w-100 mt-auto">
                                    <div>Overtime</div>
                                    <div>...........................................</div>
                                </div>
                                <div class="d-flex w-100">$
                                    <input type="text" name="overtime"
                                        class="border-0 border-bottom text-end fw-bold w-100">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex ps-3">
                            <div>(j)</div>
                            <div class="ps-3 d-flex w-100">
                                <div class="d-flex col-7 mt-auto ">
                                    <div>Child Support (Actually received)</div>
                                    <div>........</div>
                                </div>
                                <div class="d-flex col-5 justify-content-center">$
                                    <input type="text" name="child_spt"
                                        class="border-0 border-bottom text-end fw-bold">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex ps-0">
                            <div>(c)</div>
                            <div class="ps-3 d-flex w-100">
                                <div class="d-flex w-100 mt-auto">
                                    <div>Self-employment</div>
                                    <div>...............................</div>
                                </div>
                                <div class="d-flex w-100">$
                                    <input type="text" name="self_emp"
                                        class="border-0 border-bottom text-end fw-bold w-100">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex ps-3">
                            <div>(k)</div>
                            <div class="ps-3 d-flex w-100">
                                <div class="d-flex col-7 mt-auto ">
                                    <div>Alimony (Actually received)</div>
                                    <div>........</div>
                                </div>
                                <div class="d-flex col-5 justify-content-center">$
                                    <input type="text" name="alimony"
                                        class="border-0 border-bottom text-end fw-bold">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex ps-0">
                            <div>(d)</div>
                            <div class="ps-3 d-flex w-100">
                                <div class="d-flex w-100 mt-auto">
                                    <div>Tips</div>
                                    <div>....................................................</div>
                                </div>
                                <div class="d-flex w-100">$
                                    <input type="text" name="tips"
                                        class="border-0 border-bottom text-end fw-bold w-100">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex ps-3">
                            <div>(l)</div>
                            <div class="ps-3 d-flex w-100">
                                <div class="d-flex col-7 mt-auto ">
                                    <div>Rental and income producing property.</div>
                                    <div>.</div>
                                </div>
                                <div class="d-flex col-5 justify-content-center">$
                                    <input type="text" name="prop_income"
                                        class="border-0 border-bottom text-end fw-bold">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex ps-0">
                            <div class="my-auto">(e)</div>
                            <div class="ps-3 d-flex w-100 my-auto">
                                <div class="d-flex w-100 ">
                                    <div>Social Security</div>
                                    <div>...................................</div>
                                </div>
                                <div class="d-flex w-100">$
                                    <input type="text" name="security"
                                        class="border-0 border-bottom text-end fw-bold w-100">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex ps-3">
                            <div>(m)</div>
                            <div class="ps-3 d-flex w-100">
                                <div class="d-flex col-7 mt-auto ">
                                    <div>Contributions from household member(s)</div>
                                    <div></div>
                                </div>
                                <div class="d-flex col-5 justify-content-center">$
                                    <input type="text" name="contri"
                                        class="border-0 border-bottom text-end fw-bold">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex ps-0">
                            <div>(f)</div>
                            <div class="ps-3 d-flex w-100">
                                <div class="d-flex w-100 mt-auto">
                                    <div>Disability</div>
                                    <div>...........................................</div>
                                </div>
                                <div class="d-flex w-100">$
                                    <input type="text" name="disablity"
                                        class="border-0 border-bottom text-end fw-bold w-100">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex ps-3">
                            <div>(j)</div>
                            <div class="ps-3 d-flex w-100">
                                <div class="d-flex col-7 mt-auto ">
                                    <div>Cash Income</div>
                                    <div>...............................................</div>
                                </div>
                                <div class="d-flex col-5 justify-content-center">$
                                    <input type="text" name="cash_income"
                                        class="border-0 border-bottom text-end fw-bold">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex ps-0">
                            <div>(g)</div>
                            <div class="ps-3 d-flex w-100">
                                <div class="d-flex w-100 mt-auto">
                                    <div>Unemployment </div>
                                    <div>..................................</div>
                                </div>
                                <div class="d-flex w-100">$
                                    <input type="text" name="unemployment"
                                        class="border-0 border-bottom text-end fw-bold w-100">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex ps-3">
                            <div>(o)</div>
                            <div class="ps-3 d-flex w-100">
                                <div class="d-flex col-7 mt-auto ">
                                    <div>Veterans Benefits</div>
                                    <div>.......................................</div>
                                </div>
                                <div class="d-flex col-5 justify-content-center">$
                                    <input type="text" name="veterans_benifits"
                                        class="border-0 border-bottom text-end fw-bold">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex ps-0">
                            <div>(b)</div>
                            <div class="ps-3 d-flex w-100">
                                <div class="d-flex w-100 mt-auto">
                                    <div>Worker's compensation</div>
                                    <div>......................</div>
                                </div>
                                <div class="d-flex w-100">$
                                    <input type="text" name="compensation"
                                        class="border-0 border-bottom text-end fw-bold w-100">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex ps-3">
                            <div>(p)</div>
                            <div class="ps-3 d-flex w-100">
                                <div class="d-flex col-7 mt-auto ">
                                    <div>Other</div>
                                    <div class="w-100"><input type="text" name="others"
                                            class="border-0 border-bottom w-100 "></div>
                                </div>
                                <div class="d-flex col-5 justify-content-center">$
                                    <input type="text" name="base_pay_others"
                                        class="border-0 border-bottom text-end fw-bold">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 pt-3 px-0 ">
                            <div class="d-flex">
                                <div class="d-flex col-md-9">
                                    <h5 class="fw-bold col">(q) Total Gross Weekly Income/Monies and Benefits From All
                                        Sources
                                    </h5><span>(Add items a through p)</span>
                                </div>
                                <div class="col-md-3 ps-5"><span>$</span>
                                    <input type="text" name="total_weekly_gross"
                                        class="border-0 border-bottom text-end fw-bold">
                                </div>
                            </div>
                        </div>



                        <div class="col-md-12">
                            <div class="ps-3 d-flex">
                                <div>Hours worked per week</div>
                                <input type="text" name="hours_per_week" class="border-0 border-bottom">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="d-flex gap-4">
                                <div>Gross yearly income from prior tax year. Provide amount of income, not copies of
                                    forms .................................................................</div>
                                <div>
                                    <span>$</span>
                                    <input type="text" name="total_weekly_gross" class="border-0 border-bottom">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div>List here and explain any other income including but not limited to: non-reported
                                income; and support provided by relatives,
                                friends, and others:</div>
                        </div>
                    </div>
                </section>
                <section class="section_area p-5">
                    <div>
                        <div class="d-flex">
                            <div class="fw-bold pe-3">2) Mandatory Deductions</div>
                            <div> (If consistent deductions don't occur every pay check
                                <span class="fw-bold">provide average amounts.</span>
                                )
                            </div>
                        </div>
                        <div class="px-5">
                            <div class="row">
                                <div class="col-md-12">
                                    <table class="table-borderless">
                                        <tr>
                                            <td style="width:400px;"></td>
                                            <td>
                                                <div class="text-center">Job 1</div>
                                            </td>
                                            <td>
                                                <div class="text-center">Job 2</div>
                                            </td>
                                            <td>
                                                <div class="text-center">Job 3</div>
                                            </td>
                                            <td>
                                                <div class="text-center">Totals</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="lh-1 pt-2">(1) Federal income tax deductions <div
                                                        class="ps-4">(claiming <input type="text"
                                                            name="exemptions" class="border-0 border-bottom"
                                                            style="width: 30px;" maxlength="4"> exemptions)</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex w-75 mx-auto">
                                                    <span>$</span><input type="text" name="FI_job1"
                                                        class="border-0 border-bottom w-100 text-end">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex w-75 mx-auto">
                                                    <span>$</span><input type="text" name="FI_job2"
                                                        class="border-0 border-bottom w-100 text-end">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex w-75 mx-auto">
                                                    <span>$</span><input type="text" name="FI_job3"
                                                        class="border-0 border-bottom w-100 text-end">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex w-75 mx-auto">
                                                    <span>$</span><input type="text" name="FI_totals"
                                                        value="0" class="border-0 border-bottom w-100 text-end">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="lh-1 pt-2">(2) Social Security or Mandatory Retirement
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex w-75 mx-auto">
                                                    <span>$</span><input type="text" name="SS_job1"
                                                        class="border-0 border-bottom w-100 text-end">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex w-75 mx-auto">
                                                    <span>$</span><input type="text" name="SS_job2"
                                                        class="border-0 border-bottom w-100 text-end">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex w-75 mx-auto">
                                                    <span>$</span><input type="text" name="SS_job3"
                                                        class="border-0 border-bottom w-100 text-end">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex w-75 mx-auto">
                                                    <span>$</span><input type="text" name="SS_totals"
                                                        value="0" class="border-0 border-bottom w-100 text-end">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="lh-1 pt-2">(3) State income tax deductions <div
                                                        class="ps-4">(claiming <input type="text"
                                                            name="SI_exemptions" class="border-0 border-bottom"
                                                            style="width: 30px;" maxlength="4"> exemptions)</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex w-75 mx-auto">
                                                    <span>$</span><input type="text" name="SI_job1"
                                                        class="border-0 border-bottom w-100 text-end">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex w-75 mx-auto">
                                                    <span>$</span><input type="text" name="SI_job2"
                                                        class="border-0 border-bottom w-100 text-end">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex w-75 mx-auto">
                                                    <span>$</span><input type="text" name="SI_job3"
                                                        class="border-0 border-bottom w-100 text-end">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex w-75 mx-auto">
                                                    <span>$</span><input type="text" name="SI_totals"
                                                        value="0" class="border-0 border-bottom w-100 text-end">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="lh-1 pt-2">(4) Medicare </div>
                                            </td>
                                            <td>
                                                <div class="d-flex w-75 mx-auto">
                                                    <span>$</span><input type="text" name="med_job1"
                                                        class="border-0 border-bottom w-100 text-end">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex w-75 mx-auto">
                                                    <span>$</span><input type="text" name="med_job2"
                                                        class="border-0 border-bottom w-100 text-end">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex w-75 mx-auto">
                                                    <span>$</span><input type="text" name="med_job3"
                                                        class="border-0 border-bottom w-100 text-end">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex w-75 mx-auto">
                                                    <span>$</span><input type="text" name="med_totals"
                                                        value="0" class="border-0 border-bottom w-100 text-end">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="lh-1 pt-2">(5) Health insurance </div>
                                            </td>
                                            <td>
                                                <div class="d-flex w-75 mx-auto">
                                                    <span>$</span><input type="text" name="hi_job1"
                                                        class="border-0 border-bottom w-100 text-end">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex w-75 mx-auto">
                                                    <span>$</span><input type="text" name="hi_job2"
                                                        class="border-0 border-bottom w-100 text-end">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex w-75 mx-auto">
                                                    <span>$</span><input type="text" name="hi_job3"
                                                        class="border-0 border-bottom w-100 text-end">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex w-75 mx-auto">
                                                    <span>$</span><input type="text" name="hi_totals"
                                                        value="0" class="border-0 border-bottom w-100 text-end">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="lh-1 pt-2">(6) Union dues </div>
                                            </td>
                                            <td>
                                                <div class="d-flex w-75 mx-auto">
                                                    <span>$</span><input type="text" name="ud_job1"
                                                        class="border-0 border-bottom w-100 text-end">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex w-75 mx-auto">
                                                    <span>$</span><input type="text" name="ud_job2"
                                                        class="border-0 border-bottom w-100 text-end">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex w-75 mx-auto">
                                                    <span>$</span><input type="text" name="ud_job3"
                                                        class="border-0 border-bottom w-100 text-end">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex w-75 mx-auto">
                                                    <span>$</span><input type="text" name="ud_totals"
                                                        value="0" class="border-0 border-bottom w-100 text-end">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="lh-1 pt-2">(7) Prior court order — child support or alimony
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex w-75 mx-auto">
                                                    <span>$</span><input type="text" name="pc_job1"
                                                        class="border-0 border-bottom w-100 text-end">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex w-75 mx-auto">
                                                    <span>$</span><input type="text" name="pc_job2"
                                                        class="border-0 border-bottom w-100 text-end">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex w-75 mx-auto">
                                                    <span>$</span><input type="text" name="pc_job3"
                                                        class="border-0 border-bottom w-100 text-end">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex w-75 mx-auto">
                                                    <span>$</span><input type="text" name="pc_totals"
                                                        value="0" class="border-0 border-bottom w-100 text-end">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="lh-1 pt-2 ">
                                                    <div class="fw-bold"> (8) Total Mandatory Deductions </div>
                                                    <div class="ps-4">(add items 1 through 7)</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex w-75 mx-auto">
                                                    <span>$</span><input type="text" name="pc_job1"
                                                        class="border-0 border-bottom w-100 text-end" value="0">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex w-75 mx-auto">
                                                    <span>$</span><input type="text" name="pc_job2"
                                                        class="border-0 border-bottom w-100 text-end" value="0">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex w-75 mx-auto">
                                                    <span>$</span><input type="text" name="pc_job3"
                                                        class="border-0 border-bottom w-100 text-end" value="0">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex w-75 mx-auto">
                                                    <span>$</span><input type="text" name="pc_totals"
                                                        value="0" class="border-0 border-bottom w-100 text-end">
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="mt-4">
                            <div>
                                <div class="d-flex">
                                    <div class="pe-3 w-75 d-flex">
                                        <div class="fw-bold">3) Net Weekly Income </div>
                                        <span>.................................................................................................................................................</span>
                                    </div>
                                    <div class="d-flex mx-auto w-25 justify-content-center">
                                        <span>$</span><input type="text" name="nwi"
                                            class="border-0 border-bottom w-50 text-end" value="0">
                                    </div>
                                </div>

                                <div class="ps-3">
                                    <div>Subtract the Total Mandatory Deductions [see item I., 2), (8)] from the Total
                                        Gross Weekly Income/Monies and Benefits
                                        From All Sources [see item I., 1), q) ]</div>
                                </div>
                            </div>
                        </div>

                        <div class="pt-5 lh-1">
                            <h3 class="fw-bold">II. Weekly Expenses Not Deducted From Pay</h3>
                            <div class="ps-3">
                                <div>If expenses are not paid weekly, adjust the rate of payment to weekly as follows:
                                </div>
                                <table class="table-bordered border border-2 border-dark">
                                    <tr>
                                        <td class="ps-4 pe-0 pb-1">Bi-weekly → divide by 2</td>
                                        <td class="ps-4 pe-0 pb-1">Semi-monthly → multiply by 2, multiply by 12, divide
                                            by 52</td>
                                    </tr>
                                    <tr>
                                        <td class="ps-4 pt-0 pe-0 pb-1">
                                            Monthly → multiply by 12, divide by 52
                                        </td>
                                        <td class="ps-4 pt-0 pb-1">
                                            Annually → divide by 52
                                        </td>
                                    </tr>
                                </table>
                                <div>Insert an ("x") in the box if you are not currently paying the expense, or if
                                    someone else is paying the expense.</div>
                            </div>
                            <div>
                                <div class="py-2">Home:</div>
                                <div class="table-responsive">
                                    <table class="table-borderless">
                                        <tr>
                                            <td>
                                                <div class="d-flex gap-2">
                                                    <div style="width:320px;">Rent or Mortgage (Principal, Interest —
                                                        Real Estate Taxes and Insurance if
                                                        escrowed) </div>
                                                    <input type="checkbox" name="mortgage" value="mortgage">
                                                </div>
                                            </td>
                                            <td class="d-flex w-100">
                                                <div>$</div>
                                                <input type="text" name="nwi"
                                                    class="border-0 border-bottom w-100">
                                            </td>
                                            <td>
                                                <div style="width:430px;">Property taxes and assessments
                                                    ....................................</div>
                                            </td>
                                            <td class="d-flex w-100 gap-2 w-50">
                                                <input type="checkbox" name="pta" value="pta">
                                                <div>$</div>
                                                <input type="text" name="pta_val"
                                                    class="border-0 border-bottom w-50">
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div>
                                <div class="py-2">Utilities::</div>
                                <div class="table-responsive">
                                    <table class="table-borderless">
                                        <tr>
                                            <td>
                                                <div class="d-flex gap-2">
                                                    <div style="width:320px;">Oil
                                                        ............................................................
                                                    </div>
                                                    <input type="checkbox" name="oil" value="oil">
                                                </div>
                                            </td>
                                            <td class="d-flex w-100">
                                                <div>$</div>
                                                <input type="text" name="oil_val"
                                                    class="border-0 border-bottom w-100">
                                            </td>
                                            <td>
                                                <div style="width:430px;">Telephone/Cell/Internet
                                                    ....................................</div>
                                            </td>
                                            <td class="d-flex w-100 gap-2 w-50">
                                                <input type="checkbox" name="tel" value="tel">
                                                <div>$</div>
                                                <input type="text" name="tel_val"
                                                    class="border-0 border-bottom w-50">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex gap-2">
                                                    <div style="width:320px;">Electricity
                                                        ..............................................
                                                    </div>
                                                    <input type="checkbox" name="electricity" value="electricity">
                                                </div>
                                            </td>
                                            <td class="d-flex w-100">
                                                <div>$</div>
                                                <input type="text" name="oil_val"
                                                    class="border-0 border-bottom w-100">
                                            </td>
                                            <td>
                                                <div style="width:430px;">Trash Collection
                                                    ....................................</div>
                                            </td>
                                            <td class="d-flex w-100 gap-2 w-50">
                                                <input type="checkbox" name="trash" value="trash">
                                                <div>$</div>
                                                <input type="text" name="trash_val"
                                                    class="border-0 border-bottom w-50">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex gap-2">
                                                    <div style="width:320px;">Gas
                                                        .........................................
                                                    </div>
                                                    <input type="checkbox" name="gas" value="gas">
                                                </div>
                                            </td>
                                            <td class="d-flex w-100">
                                                <div>$</div>
                                                <input type="text" name="gas_val"
                                                    class="border-0 border-bottom w-100">
                                            </td>
                                            <td>
                                                <div style="width:430px;">T.V./Internet
                                                    ....................................</div>
                                            </td>
                                            <td class="d-flex w-100 gap-2 w-50">
                                                <input type="checkbox" name="tv_int" value="trash">
                                                <div>$</div>
                                                <input type="text" name="tv_int_val"
                                                    class="border-0 border-bottom w-50">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex gap-2">
                                                    <div style="width:320px;">Water and Sewer
                                                        .........................................
                                                    </div>
                                                    <input type="checkbox" name="sewar" value="sewar">
                                                </div>
                                            </td>
                                            <td class="d-flex w-100">
                                                <div>$</div>
                                                <input type="text" name="sewar_val"
                                                    class="border-0 border-bottom w-100">
                                            </td>
                                            {{-- <td>
                                                <div style="width:430px;">T.V./Internet
                                                    ....................................</div>
                                            </td>
                                            <td class="d-flex w-100 gap-2 w-50">
                                                <input type="checkbox" name="tv_int" value="trash">
                                                <div>$</div>
                                                <input type="text" name="tv_int_val"
                                                    class="border-0 border-bottom w-50">
                                            </td> --}}
                                        </tr>
                                    </table>
                                </div>
                            </div>

                            <div>
                                <div class="py-2">Transportation:</div>
                                <div class="table-responsive">
                                    <table class="table-borderless">
                                        <tr>
                                            <td>
                                                <div class="d-flex gap-2">
                                                    <div style="width:320px;">Gas/Oil
                                                        ...........................................
                                                    </div>
                                                    <input type="checkbox" name="trans" value="oil">
                                                </div>
                                            </td>
                                            <td class="d-flex w-100">
                                                <div>$</div>
                                                <input type="text" name="trans_oil_val"
                                                    class="border-0 border-bottom w-100">
                                            </td>
                                            <td>
                                                <div style="width:430px;">Auto Loan or Lease
                                                    ....................................</div>
                                            </td>
                                            <td class="d-flex w-100 gap-2 w-50">
                                                <input type="checkbox" name="auto_loan" value="trash">
                                                <div>$</div>
                                                <input type="text" name="auto_loan_val"
                                                    class="border-0 border-bottom w-50">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex gap-2">
                                                    <div style="width:320px;">Repairs/Maintenance
                                                        .............................
                                                    </div>
                                                    <input type="checkbox" name="repairs" value="repairs">
                                                </div>
                                            </td>
                                            <td class="d-flex w-100">
                                                <div>$</div>
                                                <input type="text" name="repairs_val"
                                                    class="border-0 border-bottom w-100">
                                            </td>
                                            <td>
                                                <div style="width:430px;">Public Transportation
                                                    ....................................</div>
                                            </td>
                                            <td class="d-flex w-100 gap-2 w-50">
                                                <input type="checkbox" name="pub_trans" value="trash">
                                                <div>$</div>
                                                <input type="text" name="pub_trans_val"
                                                    class="border-0 border-bottom w-50">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex gap-2">
                                                    <div style="width:320px;">Automobile Insurance/Tax/Registration ...
                                                    </div>
                                                    <input type="checkbox" name="auto_ins" value="auto_ins">
                                                </div>
                                            </td>
                                            <td class="d-flex w-100">
                                                <div>$</div>
                                                <input type="text" name="auto_ins_val"
                                                    class="border-0 border-bottom w-100">
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div>
                                <div class="py-2">Insurance Premiums:</div>
                                <div class="table-responsive">
                                    <table class="table-borderless">
                                        <tr>
                                            <td>
                                                <div class="d-flex gap-2">
                                                    <div style="width:320px;">Medical/Dental (Out-of-pocket expense
                                                        after Health Savings Account/Plan).......
                                                    </div>
                                                    <input type="checkbox" name="med_ins" value="med_ins">
                                                </div>
                                            </td>
                                            <td class="d-flex w-100">
                                                <div>$</div>
                                                <input type="text" name="med_ins_val"
                                                    class="border-0 border-bottom w-100">
                                            </td>
                                            <td>
                                                <div style="width:430px;">Life
                                                    ....................................</div>
                                            </td>
                                            <td class="d-flex w-100 gap-2 w-50">
                                                <input type="checkbox" name="life" value="life">
                                                <div>$</div>
                                                <input type="text" name="life_val"
                                                    class="border-0 border-bottom w-50">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">
                                                <div>Uninsured Medical/Dental not paid by
                                                    insurance...................................................................................
                                                </div>
                                            </td>
                                            <td class="d-flex w-100 gap-2 w-50">
                                                <input type="checkbox" name="unins_med" value="unins_med">
                                                <div>$</div>
                                                <input type="text" name="pub_trans_val"
                                                    class="border-0 border-bottom w-50">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">
                                                <div>Clothing
                                                    .............................................................................................................................................
                                                </div>
                                            </td>
                                            <td class="d-flex w-100 gap-2 w-50">
                                                <input type="checkbox" name="unins_cloth" value="unins_cloth">
                                                <div>$</div>
                                                <input type="text" name="unins_cloth_val"
                                                    class="border-0 border-bottom w-50">
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div>
                                <div class="py-2">Child(ren):</div>
                                <div class="table-responsive">
                                    <table class="table-borderless">
                                        <tr>
                                            <td>
                                                <div class="d-flex gap-2">
                                                    <div style="width:320px;">Child Support of this case .....................
                                                    </div>
                                                    <input type="checkbox" name="child_supp" value="child_supp">
                                                </div>
                                            </td>
                                            <td class="d-flex w-100">
                                                <div>$</div>
                                                <input type="text" name="child_supp_val"
                                                    class="border-0 border-bottom w-100">
                                            </td>
                                            <td>
                                                <div style="width:430px;">Child Care Expense (after deductions,
                                                    credits and subsidies)............................</div>
                                            </td>
                                            <td class="d-flex w-100 gap-2 w-50">
                                                <input type="checkbox" name="child_care" value="child_care">
                                                <div>$</div>
                                                <input type="text" name="child_care_val"
                                                    class="border-0 border-bottom w-50">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex gap-2">
                                                    <div style="width:320px;">Child Support of other children other than
                                                        this case (attach a copy of the order) ...
                                                    </div>
                                                    <input type="checkbox" name="oth_child_supp" value="oth_child_supp">
                                                </div>
                                            </td>
                                            <td class="d-flex w-100">
                                                <div>$</div>
                                                <input type="text" name="oth_child_supp_val"
                                                    class="border-0 border-bottom w-100">
                                            </td>
                                            <td>
                                                <div style="width:430px;">Child(ren)'s activities (e.g., lessons, sports,
                                                    etc.) .....................................................</div>
                                            </td>
                                            <td class="d-flex w-100 gap-2 w-50">
                                                <input type="checkbox" name="child_acts" value="child_acts">
                                                <div>$</div>
                                                <input type="text" name="child_acts_val"
                                                    class="border-0 border-bottom w-50">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex gap-2">
                                                    <div style="width:320px;">Alimony: Payable to this spouse ...............
                                                    </div>
                                                    <input type="checkbox" name="alim_pay" value="alim_pay">
                                                </div>
                                            </td>
                                            <td class="d-flex w-100">
                                                <div>$</div>
                                                <input type="text" name="alim_pay_val"
                                                    class="border-0 border-bottom w-100">
                                            </td>
                                            <td>
                                                <div style="width:430px;">Alimony: Payable to another spouse .......</div>
                                            </td>
                                            <td class="d-flex w-100 gap-2 w-50">
                                                <input type="checkbox" name="oth_alimin_pay" value="oth_alimin_pay">
                                                <div>$</div>
                                                <input type="text" name="oth_alimin_pay_val"
                                                    class="border-0 border-bottom w-50">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">
                                                <div>Extraordinary travel expenses for visitation with child(ren) ........................................................................</div>
                                            </td>
                                            <td class="d-flex w-100 gap-2 w-50">
                                                <input type="checkbox" name="extord_trav_exp" value="extord_trav_exp">
                                                <div>$</div>
                                                <input type="text" name="extord_trav_exp_val"
                                                    class="border-0 border-bottom w-50">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">
                                                <div class="d-flex">Other(Specify):  <input type="text" name="child_oth"
                                                    class="border-0 border-bottom w-100"></div>
                                            </td>
                                            <td class="d-flex w-100 gap-2 w-50">
                                                <input type="checkbox" name="child_oth_type" value="child_oth_type">
                                                <div>$</div>
                                                <input type="text" name="child_oth_type_val"
                                                    class="border-0 border-bottom w-50">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">
                                                <div><span class="fw-bold">Total Weekly Expenses Not Deducted From Pay</span>...................................................................................</div>
                                            </td>
                                            <td class="d-flex w-100 gap-2 w-50">
                                                <input type="checkbox" name="child_oth_type" value="child_oth_type">
                                                <div>$</div>
                                                <input type="text" name="total_we_exp"
                                                    class="border-0 border-bottom w-50 text-end">
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="pt-5 lh-1">
                            <h3 class="fw-bold">III. Liabilities (Debts)</h3>
                            <div class="ps-3">
                                <div>Do not include expenses listed above. Do not include mortgage current principal balance or loan balances that are listed
                                    under "Assets."
                                </div>
                                <div class="table-responsive">
                                <table class="table-bordered border border-1 border-dark w-100">
                                    <tr>
                                        <td class="py-2 text-center" style="width: 700px;" >Creditor Name /Type of Debt</td>
                                        <td class="py-2 text-center" style="">Balance Due</td>
                                        <td class="p-2 text-center" style="width: 50px;" >Date Debt Incurred/Revolving</td>
                                        <td class="py-2 text-center" style="width: 100px;">Weekly Payment</td>
                                    </tr>
                                </table>
                                </div>
                            </div>
                        </div>
                </section>
            </form>
        </div>
    </div>
</body>

</html>
