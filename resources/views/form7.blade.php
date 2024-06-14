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
            height : 100% !important;

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
        input[type='radio'] {
    accent-color:  #8c8a8a !important;
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
            .d_sm_block{
                display: block !important;

            }


            .responsive_input {
                width: 100% !important;
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
            font-size: 16px;
        }

        .pb-500 {
            padding-bottom: 500px;
        }

        .tdata input:focus,
        .tdata textarea:focus {
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
    <div class="container-fluid   py-1 py-lg-3">
        <div class="container bg_color p-lg-3 p-1  ">



            <form action="{{ route('form7.submit') }}" method="post">
                @csrf
                <section class="section_area" id="first_section">


                    <div class="row px-lg-5 px-2 py-5 pt-2">
                        @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show">{{ session('success') }} <button
                                type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>

                    @endif

                    <div class="text-center py-4"><a href="#" class="text-dark">Click here</a> to get more
                        information
                        about the fields on this form.</div>
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
                                        <input type="text" name="dn1" class="border-0" style="width: 29px"
                                            maxlength="3">
                                        <div class="fw-bold">- FA -</div>
                                        <input type="text" name="dn2" class="border-0 " style="width: 29px"
                                            maxlength="2">
                                        <div class="fw-bold">-</div>
                                        <input type="text" name="dn3" class="border-0 " style="width: 45px"
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
                                        <input type="radio" name="affiant_type" value="plaintiff">
                                        <label for="">Plaintiff</label>
                                    </div>
                                    <div class="d-flex gap-2">
                                        <input type="radio" name="affiant_type" value="defendant">
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
                                    <textarea name="I_gwi" id="" rows="2" class="border-0 w-100"></textarea>
                                </div>
                                <div class="d-flex gap-3 d_sm_block">
                                    <div>Paid:</div>
                                    <div class="d-flex gap-2">
                                        <input type="radio" name="paid_type" value="Weekly">
                                        <label for="">Weekly</label>
                                    </div>
                                    <div class="d-flex gap-2">
                                        <input type="radio" name="paid_type" value="Bi-weekly">
                                        <label for="">Bi-weekly</label>
                                    </div>
                                    <div class="d-flex gap-2">
                                        <input type="radio" name="paid_type" value="Monthly">
                                        <label for="">Monthly</label>
                                    </div>
                                    <div class="d-flex gap-2">
                                        <input type="radio" name="paid_type" value="Semi-monthly">
                                        <label for="">Semi-monthly</label>
                                    </div>
                                    <div class="d-flex gap-2">
                                        <input type="radio" name="paid_type" value="Annually">
                                        <label for="">Annually</label>
                                    </div>

                                </div>

                                <div class="py-2">If income is not paid weekly, adjust the rate of pay to weekly as
                                    follows:</div>
                                    <div class="table-responsive">
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
                        </div>

                        <div class="col-1  pt-3 p-0" style="width: 10px;">
                            <div>(a)</div>
                        </div>
                        <div class="col  pt-3 text-center">
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
                        <div class="col  pt-3">
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
                            <div class="d-flex gap-3 pt-3 d_sm_block">
                                <div>
                                    <input type="radio" name="job1_salary" value="salary1">
                                    <label for=""> Salary</label>
                                </div>
                                <div>
                                    <input type="radio" name="job1_wages" value="wages1">
                                    <label for=""> Wages</label>
                                </div>
                                <div>$ <input type="text" name="base_pay1" class="border-0 border-bottom responsive_input"></div>
                            </div>
                            <div class="d-flex gap-3 pt-3 d_sm_block">
                                <div>
                                    <input type="radio" name="job2_salary" value="salary2">
                                    <label for=""> Salary</label>
                                </div>
                                <div>
                                    <input type="radio" name="job2_wages" value="wages2">
                                    <label for=""> Wages</label>
                                </div>
                                <div>$ <input type="text" name="base_pay2" class="border-0 border-bottom"></div>
                            </div>
                            <div class="d-flex gap-3 pt-3 d_sm_block">
                                <div>
                                    <input type="radio" name="job3_salary" value="salary3">
                                    <label for=""> Salary</label>
                                </div>
                                <div>
                                    <input type="radio" name="job3_wages" value="wages3">
                                    <label for=""> Wages</label>
                                </div>
                                <div>$ <input type="text" name="base_pay3" class="border-0 border-bottom"></div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="row ps-lg-3 pe-lg-5 pt-3">
                                <div class="col-lg-10 col-sm-12 d-flex d_sm_block">
                                    <div class="fw-bold">
                                        Total of base pay from salary and wages of all jobs
                                    </div>
                                    <div class="responsive_input">
                                        ...................................................................................................................
                                    </div>
                                </div>
                                <div class="col-lg-2" col-sm-12>
                                    <div class="d-flex">$
                                        <input type="text" name="base_pay4"
                                            class="border-0 border-bottom text-end fw-bold" value="0" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 d-flex ps-0">
                            <div>(b)</div>
                            <div class="ps-3 d-flex w-100 d_sm_block">
                                <div class="d-flex w-100 mt-auto">
                                    <div>Overtime</div>
                                    <div>...........................................</div>
                                </div>
                                <div class="d-flex w-100">$
                                    <input type="text" name="overtime"
                                        class="border-0 border-bottom responsive_input text-end fw-bold w-100">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex ps-3">
                            <div>(j)</div>
                            <div class="ps-3 d-flex w-100 d_sm_block">
                                <div class="d-flex col-lg-7 col-sm-12 d_sm_block mt-auto ">
                                    <div>Child Support (Actually received)</div>
                                    <div>...........</div>
                                </div>
                                <div class="d-flex col-lg-5 col-sm-12 d_sm_block justify-content-center">$
                                    <input type="text" name="child_spt"
                                        class="border-0 responsive_input border-bottom text-end fw-bold">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex ps-0">
                            <div>(c)</div>
                            <div class="ps-3 d-flex w-100 d_sm_block">
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
                            <div class="  ps-3 d-flex w-100 d_sm_block">
                                <div class="d-flex col-lg-7 d_sm_block   col-sm-12 ">
                                    <div>Alimony (Actually received) </div>
                                    <div>...................</div>
                                </div>
                                <div class="d-flex col-lg-5 d_sm_block justify-content-center col-sm-12">$
                                    <input type="text" name="alimony"
                                        class="border-0 border-bottom text-end fw-bold">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex ps-0">
                            <div>(d)</div>
                            <div class="ps-3 d-flex w-100 d_sm_block">
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
                            <div class="ps-3 d-flex w-100 d_sm_block">
                                <div class="d-flex col-lg-7 d_sm_block  col-sm-12 ">
                                    <div>Rental and income producing property</div>
<div>......</div>
                                </div>
                                <div class="d-flex col-lg-5 d_sm_block justify-content-center col-sm-12">$
                                    <input type="text" name="prop_income"
                                        class="responsive_input border-0 border-bottom text-end fw-bold">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex ps-0">
                            <div class="my-auto">(e)</div>
                            <div class="ps-3 d-flex w-100 d_sm_block my-auto">
                                <div class="d-flex w-100 ">
                                    <div>Social Security </div>
                                    <div>..................................</div>
                                </div>
                                <div class="d-flex w-100">$
                                    <input type="text" name="security"
                                        class=" responsive_input border-0 border-bottom text-end fw-bold w-100">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex ps-3">
                            <div>(m)</div>
                            <div class="ps-3 d-flex w-100 d_sm_block">
                                <div class="d-flex col-lg-7 d_sm_block  col-sm-12 ">
                                    <div>Contributions from household member(s)</div>
                                 </div>
                                <div class="d-flex col-lg-5 d_sm_block justify-content-center col-sm-12">$
                                    <input type="text" name="contri"
                                        class="border-0 border-bottom text-end fw-bold">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex ps-0">
                            <div>(f)</div>
                            <div class="ps-3 d-flex w-100 d_sm_block">
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
                            <div>(n)</div>
                            <div class="ps-3 d-flex w-100 d_sm_block">
                                <div class="d-flex col-lg-7 d_sm_block  col-sm-12 ">
                                    <div>Cash income </div>
                                    <div>...............................................</div>
                                </div>
                                <div class="d-flex col-lg-5 d_sm_block justify-content-center col-sm-12">$
                                    <input type="text" name="cash_income"
                                        class="border-0 border-bottom text-end fw-bold">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex ps-0">
                            <div>(g)</div>
                            <div class="ps-3 d-flex w-100 d_sm_block">
                                <div class="d-flex w-100 mt-auto">
                                    <div>Unemployment </div>
                                    <div>................................</div>
                                </div>
                                <div class="d-flex w-100">$
                                    <input type="text" name="unemployment"
                                        class="border-0 border-bottom text-end fw-bold w-100">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex ps-3">
                            <div>(o)</div>
                            <div class="ps-3 d-flex w-100 d_sm_block">
                                <div class="d-flex col-lg-7 d_sm_block   col-sm-12 ">
                                    <div>Veterans Benefits</div>
                                    <div>........................................</div>
                                </div>
                                <div class="d-flex col-lg-5 d_sm_block justify-content-center col-sm-12">$
                                    <input type="text" name="veterans_benifits"
                                        class="border-0 border-bottom text-end fw-bold">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex ps-0">
                            <div>(h)</div>
                            <div class="ps-3 d-flex w-100 d_sm_block">
                                <div class="d-flex w-100 mt-auto">
                                    <div>Worker's compensation </div>
                                    <div>...................</div>
                                </div>
                                <div class="d-flex w-100">$
                                    <input type="text" name="compensation"
                                        class="border-0 border-bottom text-end fw-bold w-100">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex ps-3">
                            <div>(p)</div>
                            <div class="ps-3 d-flex w-100 d_sm_block">
                                <div class="d-flex col-lg-7 d_sm_block   col-sm-12 ">
                                    <div>Other</div>
                                     <div class="w-100"><input type="text" name="others"
                                            class="border-0 border-bottom w-100 "></div>
                                </div>
                                <div class="d-flex col-lg-5 d_sm_block justify-content-center  col-sm-12">$
                                    <input type="text" name="royalties_other_rights"
                                        class="border-0 border-bottom text-end fw-bold">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex ps-0">
                            <div>(q)</div>
                            <div class="ps-3 d-flex w-100 d_sm_block">
                                <div class="d-flex w-100 mt-auto">
                                    <div>Public Assistance (Welfare, TFA  payments) .......................................</div>
                                 </div>
                                <div class="d-flex w-100 pt-5">$
                                    <input type="text" name="trusts"
                                        class="border-0 border-bottom  text-end fw-bold w-100">
                                </div>
                            </div>
                        </div>


                         <div class="col-md-12 pt-3 px-0 ">
                            <div class="d-flex d_sm_block">
                                <div class="d-flex d_sm_block col-md-9 ">
                                    <h5 class="fw-bold col">(q) Total Gross Weekly Income/Monies and Benefits From All  Sources
                                    </h5><span>(Add items a through p)</span>
                                </div>
                                <div class="col-md-3  ps-lg-5"><span>$</span>
                                    <input type="text" name="total_weekly_gross" class="border-0 border-bottom text-end fw-bold">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="ps-lg-3 d-flex d_sm_block">
                                <div>Hours worked per week</div>
                                <input type="text" name="hours_per_week" class="border-0 border-bottom">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="d-flex gap-4 d_sm_block ">
                                <div class=" ">Gross yearly income from prior tax year. Provide amount of income, not copies of
                                    forms <div class="responsive_input">................................................................. </div></div>
                                <div>
                                    <span>$</span>
                                    <input type="text" name="total_weekly_gross" class="border-0 border-bottom">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div>List here and explain any other income including but not limited to: non-reported  income; and support provided by relatives, friends, and others:</div>
                        </div>
                        @include('layouts.footer5', ['page' => 1])

                    </div>
                </section>
                <section class="section_area p-5" id="mandatory_deductions">
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
                                <div class="d-flex d_sm_block">
                                    <div class="pe-3 w-75   d-flex d_sm_block">
                                        <div class="fw-bold">3) Net Weekly Income </div>
                                        <div class="responsive_input">.................................................................................................................................................</div>
                                    </div>
                                    <div class="d-flex mx-auto  d_sm_block w-25 justify-content-center">
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
                                                    <input type="radio" name="mortgage" value="mortgage">
                                                </div>
                                            </td>
                                            <td class="d-flex w-100">
                                                <div>$</div>
                                                <input type="text" name="nwi"
                                                    class="border-0 border-bottom w-100">
                                            </td>
                                            <td>
                                                <div style="width:430px;">Property taxes and assessments
                                                    .........................................</div>
                                            </td>
                                            <td class="d-flex w-100 gap-2 w-50">
                                                <input type="radio" name="pta" value="pta">
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
                                                        ...............................................................
                                                    </div>
                                                    <input type="radio" name="oil" value="oil">
                                                </div>
                                            </td>
                                            <td class="d-flex w-100">
                                                <div>$</div>
                                                <input type="text" name="oil_val"
                                                    class="border-0 border-bottom w-100">
                                            </td>
                                            <td>
                                                <div style="width:430px;">Telephone/Cell/Internet
                                                    ...................................................</div>
                                            </td>
                                            <td class="d-flex w-100 gap-2 w-50">
                                                <input type="radio" name="tel" value="tel">
                                                <div>$</div>
                                                <input type="text" name="tel_val"
                                                    class="border-0 border-bottom w-50">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex gap-2">
                                                    <div style="width:320px;">Electricity
                                                        ...................................................
                                                    </div>
                                                    <input type="radio" name="electricity" value="electricity">
                                                </div>
                                            </td>
                                            <td class="d-flex w-100">
                                                <div>$</div>
                                                <input type="text" name="oil_val"
                                                    class="border-0 border-bottom w-100">
                                            </td>
                                            <td>
                                                <div style="width:430px;">Trash Collection
                                                    ...............................................................</div>
                                            </td>
                                            <td class="d-flex w-100 gap-2 w-50">
                                                <input type="radio" name="trash" value="trash">
                                                <div>$</div>
                                                <input type="text" name="trash_val"
                                                    class="border-0 border-bottom w-50">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex gap-2">
                                                    <div style="width:320px;">Gas
                                                        .............................................................
                                                    </div>
                                                    <input type="radio" name="gas" value="gas">
                                                </div>
                                            </td>
                                            <td class="d-flex w-100">
                                                <div>$</div>
                                                <input type="text" name="gas_val"
                                                    class="border-0 border-bottom w-100">
                                            </td>
                                            <td>
                                                <div style="width:430px;">T.V./Internet
                                                    .....................................................................</div>
                                            </td>
                                            <td class="d-flex w-100 gap-2 w-50">
                                                <input type="radio" name="tv_int" value="trash">
                                                <div>$</div>
                                                <input type="text" name="tv_int_val"
                                                    class="border-0 border-bottom w-50">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex gap-2">
                                                    <div style="width:320px;">Water and Sewer
                                                        ........................................
                                                    </div>
                                                    <input type="radio" name="sewar" value="sewar">
                                                </div>
                                            </td>
                                            <td class="d-flex w-100">
                                                <div>$</div>
                                                <input type="text" name="sewar_val"
                                                    class="border-0 border-bottom w-100">
                                            </td>

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
                                                        .......................................................
                                                    </div>
                                                    <input type="radio" name="trans" value="oil">
                                                </div>
                                            </td>
                                            <td class="d-flex w-100">
                                                <div>$</div>
                                                <input type="text" name="trans_oil_val"
                                                    class="border-0 border-bottom w-100">
                                            </td>
                                            <td>
                                                <div style="width:430px;">Auto Loan or Lease
                                                    ..........................................................</div>
                                            </td>
                                            <td class="d-flex w-100 gap-2 w-50">
                                                <input type="radio" name="auto_loan" value="trash">
                                                <div>$</div>
                                                <input type="text" name="auto_loan_val"
                                                    class="border-0 border-bottom w-50">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex gap-2">
                                                    <div style="width:320px;">Repairs/Maintenance
                                                        .................................
                                                    </div>
                                                    <input type="radio" name="repairs" value="repairs">
                                                </div>
                                            </td>
                                            <td class="d-flex w-100">
                                                <div>$</div>
                                                <input type="text" name="repairs_val"
                                                    class="border-0 border-bottom w-100">
                                            </td>
                                            <td>
                                                <div style="width:430px;">Public Transportation
                                                    .......................................................</div>
                                            </td>
                                            <td class="d-flex w-100 gap-2 w-50">
                                                <input type="radio" name="pub_trans" value="trash">
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
                                                    <input type="radio" name="auto_ins" value="auto_ins">
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
                                                    <input type="radio" name="med_ins" value="med_ins">
                                                </div>
                                            </td>
                                            <td class="d-flex w-100">
                                                <div>$</div>
                                                <input type="text" name="med_ins_val"
                                                    class="border-0 border-bottom w-100">
                                            </td>
                                            <td>
                                                <div style="width:430px;">Life
                                                    ...................................................................................</div>
                                            </td>
                                            <td class="d-flex w-100 gap-2 w-50">
                                                <input type="radio" name="life" value="life">
                                                <div>$</div>
                                                <input type="text" name="life_val"
                                                    class="border-0 border-bottom w-50">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">
                                                <div>Uninsured Medical/Dental not paid by
                                                    insurance...................................................................................................................................
                                                </div>
                                            </td>
                                            <td class="d-flex w-100 gap-2 w-50">
                                                <input type="radio" name="unins_med" value="unins_med">
                                                <div>$</div>
                                                <input type="text" name="pub_trans_val"
                                                    class="border-0 border-bottom w-50">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">
                                                <div>Clothing
                                                    ..................................................................................................................................................................................................
                                                </div>
                                            </td>
                                            <td class="d-flex w-100 gap-2 w-50">
                                                <input type="radio" name="unins_cloth" value="unins_cloth">
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
                                                    <div style="width:320px;">Child Support of this case ...........................
                                                    </div>
                                                    <input type="radio" name="child_supp" value="child_supp">
                                                </div>
                                            </td>
                                            <td class="d-flex w-100">
                                                <div>$</div>
                                                <input type="text" name="child_supp_val"
                                                    class="border-0 border-bottom w-100">
                                            </td>
                                            <td>
                                                <div style="width:430px;">Child Care Expense (after deductions,
                                                    credits and subsidies)............................................................................</div>
                                            </td>
                                            <td class="d-flex w-100 gap-2 w-50">
                                                <input type="radio" name="child_care" value="child_care">
                                                <div>$</div>
                                                <input type="text" name="child_care_val"
                                                    class="border-0 border-bottom w-50">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex gap-2">
                                                    <div style="width:320px;">Child Support of other children other than
                                                        this case (attach a copy of the order) ...........
                                                    </div>
                                                    <input type="radio" name="oth_child_supp" value="oth_child_supp">
                                                </div>
                                            </td>
                                            <td class="d-flex w-100">
                                                <div>$</div>
                                                <input type="text" name="oth_child_supp_val"
                                                    class="border-0 border-bottom w-100">
                                            </td>
                                            <td>
                                                <div style="width:430px;">Child(ren)'s activities (e.g., lessons, sports,
                                                    etc.) ............................................................................................</div>
                                            </td>
                                            <td class="d-flex w-100 gap-2 w-50">
                                                <input type="radio" name="child_acts" value="child_acts">
                                                <div>$</div>
                                                <input type="text" name="child_acts_val"
                                                    class="border-0 border-bottom w-50">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex gap-2">
                                                    <div style="width:320px;">Alimony: Payable to this spouse .................
                                                    </div>
                                                    <input type="radio" name="alim_pay" value="alim_pay">
                                                </div>
                                            </td>
                                            <td class="d-flex w-100">
                                                <div>$</div>
                                                <input type="text" name="alim_pay_val"
                                                    class="border-0 border-bottom w-100">
                                            </td>
                                            <td>
                                                <div style="width:430px;">Alimony: Payable to another spouse .................................</div>
                                            </td>
                                            <td class="d-flex w-100 gap-2 w-50">
                                                <input type="radio" name="oth_alimin_pay" value="oth_alimin_pay">
                                                <div>$</div>
                                                <input type="text" name="oth_alimin_pay_val"
                                                    class="border-0 border-bottom w-50">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">
                                                <div>Extraordinary travel expenses for visitation with child(ren) ..................................................................................................................</div>
                                            </td>
                                            <td class="d-flex w-100 gap-2 w-50">
                                                <input type="radio" name="extord_trav_exp" value="extord_trav_exp">
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
                                                <input type="radio" name="child_oth_type" value="child_oth_type">
                                                <div>$</div>
                                                <input type="text" name="child_oth_type_val"
                                                    class="border-0 border-bottom w-50">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">
                                                <div><span class="fw-bold">Total Weekly Expenses Not Deducted From Pay</span>................................................................................................................................</div>
                                            </td>
                                            <td class="d-flex w-100 gap-2 w-50">
                                                <input type="radio" name="child_oth_type" value="child_oth_type">
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
                                <table class="w-100">
                                    <tr>
                                        <td class="py-2 text-center border border-dark" style="width: 700px;" >Creditor Name /Type of Debt</td>
                                        <td class="py-2 text-center border border-dark" style="">Balance Due</td>
                                        <td class="p-2 text-center border border-dark" style="width: 50px;" >Date Debt Incurred/Revolving</td>
                                        <td class="py-2 text-center border border-dark" style="width: 100px;">Weekly Payment</td>
                                    </tr>
                                    <tr>
                                        <td class="border border-dark">
                                            <div>Credit Card, Consumer, Tax, Health Care, Other Debt</div>
                                        </td>
                                        <td colspan="3"></td>
                                    </tr>
                                    <tr>
                                        <td class="border border-dark">

                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="border border-dark py-2"></td>
                                        <td>
                                            <div>
                                                <input type="text" name="child_oth"
                                                class="border-0 border-bottom w-100">
                                                <label for=""></label>
                                            </div>
                                        </td>
                                        <td></td>
                                    </tr>
                                </table>
                                </div>
                            </div>
                            @include('layouts.footer5', ['page' => 2])


                        </div>
                </section>


                <section class="section_area p-5" id="assets">
                    <div>




                        <div class="pt-5 lh-1">
                             <div class="ps-3">

                                <div class="table-responsive">
                                <table class="table-bordered border border-1 border-dark w-100">


                                      <tr>
                                        <td class="  text-center tdata"  colspan="3" >
                                            <input type="text" name="L_cn3" class="border-0 w-100">
                                        </td>
                                        <td class=" text-center"  colspan="2"  >
                                              <div class="d-flex gap-2">
                                                <div>
                                                    <input type="radio" name="L_cntype3" value="Sole">
                                                    <label for="">Sole</label>
                                                </div>
                                                <div>
                                                    <input type="radio" name="L_cntype3" value="Joint">
                                                    <label for="">Joint</label>
                                                </div>
                                        </div></td>
                                        <td class="  " >
                                             <div class="d-flex tdata">$ <input type="text" name="L_blcdue3" class="border-0 w-100 text-end"></div>
                                        </td>
                                        <td><div class="  tdata"> <input type="text" name="L_ddi3" class="text-center border-0 w-100"></div></td>
                                        <td>
                                            <div class="d-flex tdata">$ <input type="text" name="L_wp3" class="border-0 w-100 text-end"></div>

                                        </td>
                                    </tr>

                                      <tr>
                                        <td class="  text-center tdata"  colspan="3" >
                                            <input type="text" name="L_cn4" class="border-0 w-100">
                                        </td>
                                        <td class=" text-center"  colspan="2"  >
                                              <div class="d-flex gap-2">
                                                <div>
                                                    <input type="radio" name="L_cntype4" value="Sole">
                                                    <label for="">Sole</label>
                                                </div>
                                                <div>
                                                    <input type="radio" name="L_cntype4" value="Joint">
                                                    <label for="">Joint</label>
                                                </div>
                                        </div></td>
                                        <td class="  " >
                                             <div class="d-flex tdata">$ <input type="text" name="L_blcdue4" class="border-0 w-100 text-end"></div>
                                        </td>
                                        <td><div class="  tdata"> <input type="text" name="L_ddi4" class="text-center border-0 w-100"></div></td>
                                        <td>
                                            <div class="d-flex tdata">$ <input type="text" name="L_wp4" class="border-0 w-100 text-end"></div>

                                        </td>
                                    </tr>
                                      <tr>
                                        <td class="  text-center tdata"  colspan="3" >
                                            <input type="text" name="L_cn5" class="border-0 w-100">
                                        </td>
                                        <td class=" text-center"  colspan="2"  >
                                              <div class="d-flex gap-2">
                                                <div>
                                                    <input type="radio" name="L_cntype5" value="Sole">
                                                    <label for="">Sole</label>
                                                </div>
                                                <div>
                                                    <input type="radio" name="L_cntype5" value="Joint">
                                                    <label for="">Joint</label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                             <div class="d-flex tdata">$ <input type="text" name="L_blcdue5" class="border-0 w-100 text-end"></div>
                                        </td>
                                        <td><div class="tdata"> <input type="text" name="L_ddi5" class="text-center border-0 w-100"></div></td>
                                        <td>
                                            <div class="d-flex tdata">$ <input type="text" name="L_wp5" class="border-0 w-100 text-end"></div>

                                        </td>
                                    </tr>
                                      <tr>
                                        <td class="  text-center tdata"  colspan="5" >
                                            (A). Total Liabilities (Total Balance Due on Debts) ...................................                                        </td>

                                        <td>
                                             <div class="d-flex tdata">$ <input type="text" name="L_tl" class="border-0 w-100 text-end"></div>
                                        </td>
                                         <td>
                                            <div class="d-flex tdata border-0"> </div>
                                       </td>
                                    </tr>
                                      <tr>
                                        <td class="tdata"  colspan="7" >  (B). Total Weekly Liabilities Expense....................................................................................................................................................</td>
                                        <td> <div class="d-flex tdata">$ <input type="text" name="L_twle" class="border-0 w-100 text-end"></div> </td>
                                    </tr>
                                </table>
                                </div>
                                <div class="pt-lg-4">
                                <h3 class="fw-bold">IV. Assets</h3>
                                <div>Note: Under "Ownership" indicate S for sole, JTS for joint with spouse, and JTO for joint with other. </div>
                                <div>You must complete the last column to the right "Value of Your Interest" in each applicable section. </div>
                                <div>A. Real Estate (including time share) </div>
                            </div>
                            <div class="table-responsive">
                            <table class="table-bordered border border-1 border-dark w-100">
                                <tr>
                                    <td class="py-2 text-center">Address</td>
                                    <td class="py-2 text-center">
                                        <div class="border-bottom">Ownership</div>
                                        <div class="d-flex">
                                            <div class="border-end border-dark p-1 mx-auto text-center">S</div>
                                            <div class="border-end border-dark p-1 mx-auto text-center">JTS</div>
                                            <div class="border-dark p-1 mx-auto text-center">JTO</div>
                                        </div>
                                    </td>
                                    <td class="p-2 text-center"> a. Fair Market  Value (Estimate)</td>
                                    <td class="py-2 text-center">b. Mortgage  Current Principal Balance</td>
                                    <td class="py-2 text-center">c. Equity Line of  Credit and Other  Liens</td>
                                    <td class="py-2 text-center">d. Equity  (d = a minus (b + c))</td>
                                    <td class="py-2 text-center">e. Value of Your  Interest</td>
                                </tr>
                                <tr>
                                    <td  class="py-2" colspan="2" >Home</td>
                                </tr>
                                <tr>
                                    <td class="text-center tdata"><input type="text" name="a_a1" class="border-0 w-100"> </td>
                                     <td class="tdata">
                                        <div class="d-flex justify-content-center">
                                            <div class="border-end border-dark  p-1 mx-auto text-center">

                                                <input class="mx-auto text-center"  type="radio" name="a_o1" style="width:30px;"  value="S">
                                            </div>
                                            <div class="border-end border-dark  p-1 mx-auto text-center">
                                                <input  class="p-1" type="radio" name="a_o1" style="width:30px;" value="JTS">
                                            </div>
                                            <div class=" border-dark  p-1 mx-auto text-center">
                                            <input class="p-1"  type="radio" name="a_o1" style="width:30px;" value="JTO">
                                        </div>


                                        </div>
                                    </td>
                                    <td><div class="  tdata"> <input type="text" name="a_fmv1" class="text-center border-0 w-100"></div></td>
                                    <td> <div class="d-flex tdata">$ <input type="text" name="a_mcpb1" class="border-0 w-100 text-end"></div>  </td>
                                    <td> <div class="d-flex tdata">$ <input type="text" name="a_elc1" class="border-0 w-100 text-end"></div>  </td>
                                    <td> <div class="d-flex tdata">$ <input type="text" name="a_em1" class="border-0 w-100 text-end" value="0"></div>  </td>
                                    <td> <div class="d-flex tdata">$ <input type="text" name="a_voyi1" class="border-0 w-100 text-end"></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td  class="py-2" colspan="2" >Other</td>
                                </tr>
                                <tr>
                                    <td class="text-center tdata"><input type="text" name="a_a2" class="border-0 w-100"> </td>
                                     <td class="tdata">
                                        <div class="d-flex justify-content-center">
                                            <div class="border-end border-dark  p-1 mx-auto text-center">

                                                <input class="mx-auto text-center"  type="radio" name="a_o2" style="width:30px;"  value="S">
                                            </div>
                                            <div class="border-end border-dark  p-1 mx-auto text-center">
                                                <input  class="p-1" type="radio" name="a_o2" style="width:30px;" value="JTS">
                                            </div>
                                            <div class=" border-dark  p-1 mx-auto text-center">
                                            <input class="p-1"  type="radio" name="a_o2" style="width:30px;" value="JTO">
                                        </div>


                                        </div>
                                    </td>
                                    <td><div class="  tdata"> <input type="text" name="a_fmv2" class="text-center border-0 w-100"></div></td>
                                    <td> <div class="d-flex tdata">$ <input type="text" name="a_mcpb2" class="border-0 w-100 text-end"></div>  </td>
                                    <td> <div class="d-flex tdata">$ <input type="text" name="a_elc2" class="border-0 w-100 text-end"></div>  </td>
                                    <td> <div class="d-flex tdata">$ <input type="text" name="a_em2" class="border-0 w-100 text-end" value="0"></div>  </td>
                                    <td> <div class="d-flex tdata">$ <input type="text" name="a_voyi2" class="border-0 w-100 text-end"></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center tdata"><input type="text" name="a_a3" class="border-0 w-100"> </td>
                                    <td class="tdata">
                                        <div class="d-flex justify-content-center">
                                            <div class="border-end border-dark  p-1 mx-auto text-center">

                                                <input class="mx-auto text-center"  type="radio" name="a_o3" style="width:30px;"  value="S">
                                            </div>
                                            <div class="border-end border-dark  p-1 mx-auto text-center">
                                                <input  class="p-1" type="radio" name="a_o3" style="width:30px;" value="JTS">
                                            </div>
                                            <div class=" border-dark  p-1 mx-auto text-center">
                                            <input class="p-1"  type="radio" name="a_o3" style="width:30px;" value="JTO">
                                        </div>


                                        </div>
                                    </td>
                                    <td><div class="  tdata"> <input type="text" name="a_fmv3" class="text-center border-0 w-100"></div></td>
                                    <td> <div class="d-flex tdata">$ <input type="text" name="a_mcpb3" class="border-0 w-100 text-end"></div>  </td>
                                    <td> <div class="d-flex tdata">$ <input type="text" name="a_elc3" class="border-0 w-100 text-end"></div>  </td>
                                    <td> <div class="d-flex tdata">$ <input type="text" name="a_em3" class="border-0 w-100 text-end" value="0"></div>  </td>
                                    <td> <div class="d-flex tdata">$ <input type="text" name="a_voyi3" class="border-0 w-100 text-end"></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3"></td>
                                    <td  colspan="3" class="text-center tdata">Total Net Value of Real Estate:</td>
                                     <td> <div class="d-flex tdata">$ <input type="text" name="a_tnv" class="border-0 w-100 text-end"></div>
                                    </td>
                                </tr>
                            </table>
                            </div>


                            <div class="pt-lg-2">B. Motor Vehicles</div>
                         <div class="table-responsive">
                            <table class="table-bordered border border-1 border-dark w-100">
                                <tr>
                                    <td class="py-2 text-center" colspan="2">Year</td>

                                    <td class="p-2 text-center">Make</td>
                                    <td class="py-2 text-center">Model</td>
                                    <td class="py-2 text-center">
                                        <div class="border-bottom">Ownership</div>
                                        <div class="d-flex">
                                            <div class="border-end border-dark p-1  mx-auto text-center">S</div>
                                            <div class="border-end border-dark p-1  mx-auto text-center">JTS</div>
                                            <div class="border-dark p-1  mx-auto text-center">JTO</div>
                                        </div>
                                    </td>
                                    <td class="py-2 text-center">a. Value</td>
                                    <td class="py-2 text-center">b. Loan Balance</td>
                                    <td class="py-2 text-center">c. Equity (c = a minus b)</td>
                                    <td class="py-2 text-center">d. Value of Your Interest</td>
                                </tr>
                                <tr>
                                    <td>1.</td>
                                    <td class="tdata"><input type="text" name="MV_y1" class="border-0 w-100 text-center"></td>
                                    <td class="tdata"><input type="text" name="MV_make1" class="border-0 w-100 text-center"></td>
                                     <td class="tdata"><input type="text" name="MV_model1" class="border-0 w-100 text-center"></td>
                                     <td class="tdata">
                                        <div class="d-flex justify-content-center">
                                            <div class="border-end border-dark  p-1 mx-auto text-center">

                                                <input class="mx-auto text-center"  type="radio" name="MV_ownership1" style="width:30px;"  value="S">
                                            </div>
                                            <div class="border-end border-dark  p-1 mx-auto text-center">
                                                <input  class="p-1" type="radio" name="MV_ownership1" style="width:30px;" value="JTS">
                                            </div>
                                            <div class=" border-dark  p-1 mx-auto text-center">
                                            <input class="p-1"  type="radio" name="MV_ownership1" style="width:30px;" value="JTO">
                                        </div>


                                        </div>
                                    </td>
                                     <td> <div class="d-flex tdata">$ <input type="text" name="MV_avalue1" class="border-0 w-100 text-end"></div>
                                        <td> <div class="d-flex tdata">$ <input type="text" name="MV_lb1" class="border-0 w-100 text-end"></div>
                                            <td> <div class="d-flex tdata">$ <input type="text" name="MV_em1" class="border-0 w-100 text-end"></div>
                                                <td> <div class="d-flex tdata">$ <input type="text" name="MV_voyi1" class="border-0 w-100 text-end"></div>

                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td class="tdata"><input type="text" name="MV_y2" class="border-0 w-100 text-center"></td>
                                    <td class="tdata"><input type="text" name="MV_make2" class="border-0 w-100 text-center"></td>
                                     <td class="tdata"><input type="text" name="MV_model2" class="border-0 w-100 text-center"></td>
                                     <td class="tdata">
                                        <div class="d-flex justify-content-center">
                                            <div class="border-end border-dark  p-1 mx-auto text-center">

                                                <input class="mx-auto text-center"  type="radio" name="MV_ownership2" style="width:30px;"  value="S">
                                            </div>
                                            <div class="border-end border-dark  p-1 mx-auto text-center">
                                                <input  class="p-1" type="radio" name="MV_ownership2" style="width:30px;" value="JTS">
                                            </div>
                                            <div class=" border-dark  p-1 mx-auto text-center">
                                            <input class="p-1"  type="radio" name="MV_ownership2" style="width:30px;" value="JTO">
                                        </div>


                                        </div>
                                    </td>
                                     <td> <div class="d-flex tdata">$ <input type="text" name="MV_avalue2" class="border-0 w-100 text-end"></div>
                                        <td> <div class="d-flex tdata">$ <input type="text" name="MV_lb2" class="border-0 w-100 text-end"></div>
                                            <td> <div class="d-flex tdata">$ <input type="text" name="MV_em2" class="border-0 w-100 text-end"></div>
                                                <td> <div class="d-flex tdata">$ <input type="text" name="MV_voyi2" class="border-0 w-100 text-end"></div>

                                </tr>

                                <tr>
                                    <td colspan="5"></td>
                                    <td  colspan="3" class="text-center tdata">Total Net Value of Motor Vehicles</td>
                                     <td> <div class="d-flex tdata">$ <input type="text" name="MV_tnv" class="border-0 w-100 text-end"></div>
                                    </td>
                                </tr>
                            </table>
            </div>

                            <div class="mt-lg-2">C. Bank Accounts</div>
                            <div>Do not include custodial accounts or child(ren)'s assets — complete Section V. below.</div>
                            <div class="table-responsive">
                            <table class="table-bordered border border-1 border-dark w-100">
                                <tr>
                                    <td class="py-2 text-center" style="width:400px">Institution</td>
                                    <td class="p-2 text-center">Account Number <br>
                                       <span> (last 4 numbers only)</span></td>
                                     <td class="py-2 text-center">
                                        <div class="border-bottom">Ownership</div>
                                        <div class="d-flex">
                                            <div class="border-end border-dark p-1 mx-auto text-center">S</div>
                                            <div class="border-end border-dark p-1 mx-auto text-center">JTS</div>
                                            <div class="border-dark p-1 mx-auto text-center">JTO</div>
                                        </div>
                                    </td>
                                    <td class="py-2 text-center">Current Balance/ Value</td>
                                    <td class="py-2 text-center">Value of Your Interest</td>
                                </tr>
                                <tr>
                                     <td class="  tdata">Checking</td>
                                 </tr>
                                 <tr>
                                    <td class="tdata"  style="width:400px"><input type="text" name="C_institution1" class="border-0 w-100"></td>
                                    <td class="tdata"><input type="text" name="C_an1" class="border-0 w-100 text-center"></td>
                                    <td class="tdata">
                                        <div class="d-flex justify-content-center">
                                            <div class="border-end border-dark  p-1 mx-auto text-center">

                                                <input class="mx-auto text-center"  type="radio" name="C_ownership1" style="width:30px;"  value="S">
                                            </div>
                                            <div class="border-end border-dark  p-1 mx-auto text-center">
                                                <input  class="p-1" type="radio" name="C_ownership1" style="width:30px;" value="JTS">
                                            </div>
                                            <div class=" border-dark  p-1 mx-auto text-center">
                                            <input class="p-1"  type="radio" name="C_ownership1" style="width:30px;" value="JTO">
                                        </div>


                                        </div>
                                    </td>
                                    <td> <div class="d-flex tdata">$ <input type="C_cb1" name="base_pay1" class="border-0 w-100 text-end"></div>
                                    <td> <div class="d-flex tdata">$ <input type="C_voyi1" name="base_pay1" class="border-0 w-100 text-end"></div>
                                </tr>
                                <tr>
                                     <td class="  tdata">Savings</td>
                                 </tr>
                                 <tr>

                                    <td class="tdata"  style="width:400px"><input type="text" name="C_institution2" class="border-0 w-100"></td>
                                    <td class="tdata"><input type="text" name="C_an2" class="border-0 w-100 text-center"></td>
                                    <td class="tdata">
                                        <div class="d-flex justify-content-center">
                                            <div class="border-end border-dark  p-1 mx-auto text-center">

                                                <input class="mx-auto text-center"  type="radio" name="C_ownership2" style="width:30px;"  value="S">
                                            </div>
                                            <div class="border-end border-dark  p-1 mx-auto text-center">
                                                <input  class="p-1" type="radio" name="C_ownership2" style="width:30px;" value="JTS">
                                            </div>
                                            <div class=" border-dark  p-1 mx-auto text-center">
                                            <input class="p-1"  type="radio" name="C_ownership2" style="width:30px;" value="JTO">
                                        </div>


                                        </div>
                                    </td>

                                         <td> <div class="d-flex tdata">$ <input type="text" name="C_cb2" class="border-0 w-100 text-end"></div>
                                            <td> <div class="d-flex tdata">$ <input type="text" name="C_voyi2" class="border-0 w-100 text-end"></div>
                                </tr>
                                <tr>
                                     <td class="  tdata">Other</td>
                                 </tr>
                                 <tr>

                                    <td class="tdata"  style="width:400px"><input type="text" name="C_institution3" class="border-0 w-100"></td>
                                    <td class="tdata"><input type="text" name="C_an3" class="border-0 w-100 text-center"></td>
                                    <td class="tdata">
                                        <div class="d-flex justify-content-center">
                                            <div class="border-end border-dark  p-1 mx-auto text-center">

                                                <input class="mx-auto text-center"  type="radio" name="C_ownership3" style="width:30px;"  value="S">
                                            </div>
                                            <div class="border-end border-dark  p-1 mx-auto text-center">
                                                <input  class="p-1" type="radio" name="C_ownership3" style="width:30px;" value="JTS">
                                            </div>
                                            <div class=" border-dark  p-1 mx-auto text-center">
                                            <input class="p-1"  type="radio" name="C_ownership3" style="width:30px;" value="JTO">
                                        </div>


                                        </div>
                                    </td>
                                         <td> <div class="d-flex tdata">$ <input type="text" name="C_cb3" class="border-0 w-100 text-end"></div>
                                            <td> <div class="d-flex tdata">$ <input type="text" name="C_voyi3" class="border-0 w-100 text-end"></div>
                                </tr>
                                <tr>
                                    <td colspan="2"></td>
                                    <td  colspan="2" class="  tdata">Total Net Value of Bank Accounts:</td>
                                     <td> <div class="d-flex tdata">$ <input type="text" name="C_tnv" class="border-0 w-100 text-end"></div>
                                    </td>
                                </tr>

                            </table>

                            </div>

                            <div class="mt-lg-2">D. Stocks, Bonds, Mutual Funds</div>
                            <div class="table-responsive">
                             <table class="table-bordered border border-1 border-dark w-100">
                                <tr>
                                    <td class="py-2 text-center" style="width:600px">Company</td>
                                    <td class="p-2 text-center">Account Number <br>
                                       <span> (last 4 numbers only)</span></td>

                                    <td class="py-2 text-center">Listed Beneficiary</td>
                                    <td class="py-2 text-center">Current Balance/ Value</td>
                                </tr>

                                 <tr>
                                    <td class="tdata"  style="width:600px"><input type="text" name="SBM_company1" class="border-0 w-100"></td>
                                    <td class="tdata"><input type="text" name="SBM_an1" class="border-0 w-100 text-center"></td>
                                    <td class="tdata"><input type="text" name="SMB_lb1" class="border-0 w-100 text-center"></td>
                                    <td> <div class="d-flex tdata">$ <input type="text" name="SMB_cbv1" class="border-0 w-100 text-end"></div>
                                 </tr>
                                 <tr>
                                    <td class="tdata"  style="width:600px"><input type="text" name="SBM_company2" class="border-0 w-100"></td>
                                    <td class="tdata"><input type="text" name="SBM_an2" class="border-0 w-100 text-center"></td>
                                    <td class="tdata"><input type="text" name="SMB_lb2" class="border-0 w-100 text-center"></td>
                                    <td> <div class="d-flex tdata">$ <input type="text" name="SMB_cbv2" class="border-0 w-100 text-end"></div>
                                 </tr>
                                 <tr>
                                    <td  colspan="3" class="text-end  tdata">Total Net Value of Stocks, Bonds, Mutual Funds:</td>
                                     <td> <div class="d-flex tdata">$ <input type="text" name="SMB_tnv" class="border-0 w-100 text-end"></div>
                                    </td>
                                </tr>


                            </table>
                            </div>


                            <div class="mt-lg-2">E. Insurance (exclude children) D = Disability L = Life</div>
                            <div class="table-responsive">
                             <table class="table-bordered border border-1 border-dark w-100">
                                <tr>
                                    <td class="py-2 text-center" style="width:300px">Name of Insured</td>
                                    <td class="p-2 text-center">D  </td>
                                    <td class="p-2 text-center">L </td>

                                    <td class="py-2 text-center"  >Company</td>
                                    <td class="py-2 text-center"  >Account Number <br>
                                        <span>(last 4 numbers only)</span></td>
                                     <td class="py-2 text-center">Listed Beneficiary</td>
                                     <td class="py-2 text-center">Current Balance/
                                        Value</td>
                                </tr>

                                 <tr>
                                    <td class="tdata"  style="width:600px"><input type="text" name="I_noi1" class="border-0 w-100"></td>
                                    <td class="tdata"><input type="text" name="I_d1" class="border-0 w-100 text-center"></td>
                                    <td class="tdata"><input type="text" name="I_l1" class="border-0 w-100 text-center"></td>
                                    <td class="tdata"><input type="text" name="I_c1" class="border-0 w-100 text-center"></td>
                                    <td class="tdata"><input type="text" name="I_an1" class="border-0 w-100 text-center"></td>
                                    <td class="tdata"><input type="text" name="I_lb1" class="border-0 w-100 text-center"></td>
                                    <td> <div class="d-flex tdata">$ <input type="text" name="I_cbv1" class="border-0 w-100 text-end"></div>
                                 </tr>
                                 <tr>
                                    <td class="tdata"  style="width:600px"><input type="text" name="I_noi2" class="border-0 w-100"></td>
                                    <td class="tdata"><input type="text" name="I_d2" class="border-0 w-100 text-center"></td>
                                    <td class="tdata"><input type="text" name="I_l2" class="border-0 w-100 text-center"></td>
                                    <td class="tdata"><input type="text" name="I_c2" class="border-0 w-100 text-center"></td>
                                    <td class="tdata"><input type="text" name="I_an2" class="border-0 w-100 text-center"></td>
                                    <td class="tdata"><input type="text" name="I_lb2" class="border-0 w-100 text-center"></td>
                                    <td> <div class="d-flex tdata">$ <input type="text" name="I_cbv2" class="border-0 w-100 text-end"></div>
                                 </tr>
                                 <tr>
                                    <td colspan="3"></td>
                                    <td  colspan="3" class="text-end  tdata">Total Net Value of Insurance:</td>
                                     <td> <div class="d-flex tdata">$ <input type="text" name="I_tna" class="border-0 w-100 text-end"></div>
                                    </td>
                                </tr>


                            </table>

                            </div>

                            <div class="mt-lg-2">F. Retirement Plans (Pensions on Interest, Individual IRA, 401K, Keogh, etc.)</div>
                            <div class="table-responsive">
                             <table class="table-bordered border border-1 border-dark w-100">
                                <tr>
                                    <td class="py-2 text-center" style="width:300px">Type of Plan</td>
                                    <td class="p-2 text-center">Name of Plan/Bank/Company</td>

                                     <td class="py-2 text-center"  >Account Number <br>
                                        <span>(last 4 numbers only)</span></td>
                                     <td class="py-2 text-center">Listed Beneficiary</td>
                                     <td class="py-2 text-center">Receiving Payments</td>
                                     <td class="py-2 text-center">Current Balance/Value</td>
                                </tr>

                                 <tr>
                                    <td class="tdata"  style="width:600px"><input type="text" name="RP_top1" class="border-0 w-100"></td>
                                    <td class="tdata"><input type="text" name="RP_nop1" class="border-0 w-100 text-center"></td>
                                    <td class="tdata"><input type="text" name="RP_an1" class="border-0 w-100 text-center"></td>
                                    <td class="tdata"><input type="text" name="RP_lb1" class="border-0 w-100 text-center"></td>
                                     <td class="tdata">
                                        <div class="d-flex">
                                            <div class="d-flex gap-2">
                                                <input type="radio" name="RP_rp1" value="Yes">
                                                <label for="">Yes</label>
                                            </div>
                                            <div class="d-flex gap-2 ps-lg-3">
                                                <input type="radio" name="RP_rp1" value="No">
                                                <label for="">No</label>
                                            </div>
                                        </div> </td>
                                    <td> <div class="d-flex tdata">$ <input type="text" name="RP_cb1" class="border-0 w-100 text-end"></div>
                                 </tr>
                                 <tr>
                                    <td class="tdata"  style="width:600px"><input type="text" name="RP_top2" class="border-0 w-100"></td>
                                    <td class="tdata"><input type="text" name="RP_nop2" class="border-0 w-100 text-center"></td>
                                    <td class="tdata"><input type="text" name="RP_an2" class="border-0 w-100 text-center"></td>
                                    <td class="tdata"><input type="text" name="RP_lb2" class="border-0 w-100 text-center"></td>
                                    <td class="tdata">
                                        <div class="d-flex">
                                            <div class="d-flex gap-2">
                                                <input type="radio" name="RP_rp2" value="Yes">
                                                <label for="">Yes</label>
                                            </div>
                                            <div class="d-flex gap-2 ps-lg-3">
                                                <input type="radio" name="RP_rp2" value="No">
                                                <label for="">No</label>
                                            </div>
                                        </div> </td>
                                     <td> <div class="d-flex tdata">$ <input type="text" name="RP_cb2" class="border-0 w-100 text-end"></div>
                                 </tr>
                                 <tr>
                                    <td colspan="1"></td>
                                    <td  colspan="4" class="text-end  tdata">Total Net Value of Retirement Plans:</td>
                                     <td> <div class="d-flex tdata">$ <input type="text" name="RP_tnv1" class="border-0 w-100 text-end"></div>
                                    </td>
                                </tr>


                            </table>
                            </div>
<h5>G. Business Interest/Self-Employment</h5>
                            <div class="mt-lg-2">If you own an interest in a business, or are self-employed, complete this section.</div>
                            <div class="table-responsive">
                             <table class="table-bordered border border-1 border-dark w-100">
                                <tr>
                                    <td class="py-2 text-center" style="width:600px">Name of Business</td>
                                    <td class="p-2 text-center">Percent Owne</td>

                                     <td class="py-2 text-center"  >Value <br>
                                       </td>

                                </tr>
                                 <tr>
                                     <td> <div class=" tdata"> <input type="text" name="BI_nob" class="border-0 w-100 text-end"></div>
                                    <td> <div class="d-flex tdata"> <input type="text" name="BI_po" class="border-0 w-100 text-end">%</div>

                                      <td> <div class="d-flex tdata">$ <input type="text" name="BI_v" class="border-0 w-100 text-end"></div>
                                    </td>
                                </tr>
                                 <tr>

                                    <td   colspan="2" class="text-end  tdata">Total Net Value of Business Interest/Self-Employment:</td>
                                     <td> <div class="d-flex tdata">$ <input type="text" name="BI_tnv" class="border-0 w-100 text-end"></div>
                                    </td>
                                </tr>


                            </table>
                            </div>
                            </div>
                            @include('layouts.footer5', ['page' => 3])
                        </div>
                </section>


                <section class="section_area p-5" id="last_section">
                    <div>




                        <div class="pt-5 lh-1">
                            <div>H. Other Assets</div>
                            <div class="table-responsive">
                         <table class="table-bordered border border-1 border-dark w-100">
                            <tr>
                                <th> Name of Asset</th>
                                <th>Current Balance/  Value</th>
                                <th> Name of Asset</th>
                                <th> Current Balance/ Value</th>
                            </tr>

                                 <tr>
                                     <td> <div class=" tdata"> <input type="text" name="OA_noa1" class="border-0 w-100 text-end"></div>

                                        <td> <div class="d-flex tdata">$ <input type="text" name="OA_cb1" class="border-0 w-100 text-end"></div>
                                            <td> <div class=" tdata"> <input type="text" name="OA_noa2" class="border-0 w-100 text-end"></div>
                                                <td> <div class="d-flex tdata">$ <input type="text" name="OA_cb2" class="border-0 w-100 text-end"></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td> <div class=" tdata"> <input type="text" name="OA_noa3" class="border-0 w-100 text-end"></div>

                                       <td> <div class="d-flex tdata">$ <input type="text" name="OA_cb3" class="border-0 w-100 text-end"></div>
                                           <td> <div class=" tdata"> <input type="text" name="OA_noa4" class="border-0 w-100 text-end"></div>
                                               <td> <div class="d-flex tdata">$ <input type="text" name="OA_cb5" class="border-0 w-100 text-end"></div>
                                   </td>
                               </tr>
                                <tr>
                                    <td> <div class=" tdata"> <input type="text" name="OA_noa5" class="border-0 w-100 text-end"></div>

                                    <td> <div class="d-flex tdata">$ <input type="text" name="OA_cb5" class="border-0 w-100 text-end"></div>
                                        <td> <div class=" tdata"> <input type="text" name="OA_noa6" class="border-0 w-100 text-end"></div>
                                            <td> <div class="d-flex tdata">$ <input type="text" name="OA_cb6" class="border-0 w-100 text-end"></div>
                                </td>
                                </tr>
                                <tr>
                                    <td> <div class=" tdata"> <input type="text" name="OA_noa7" class="border-0 w-100 text-end"></div>

                                    <td> <div class="d-flex tdata">$ <input type="text" name="OA_cb7" class="border-0 w-100 text-end"></div>
                                        <td> <div class=" tdata"> <input type="text" name="OA_noa8" class="border-0 w-100 text-end"></div>
                                            <td> <div class="d-flex tdata">$ <input type="text" name="OA_cb8" class="border-0 w-100 text-end"></div>
                                </td>
                                </tr>
                                 <tr>

                                    <td   colspan="2" class="text-end  tdata">Total Net Value of Other Assets:</td>
                                     <td> <div class="d-flex tdata">$ <input type="text" name="OA_tnv" class="border-0 w-100 text-end"></div>
                                    </td>
                                </tr>


                            </table>
                            </div>
                             <div class="d-flex pt-lg-3 d_sm_block">


                                <div class="responsive_input">I. Total Net Value All Assets (add items A through H)........................................................................................................................</div>
                                <div class="d-flex  d_sm_block ms-lg-3">$ <input type="text" name="h_tnv" class="border-0 w-100 border-bottom text-end"></div>
                            </div>

                            <div class="pt-lg-3">
                               <h4> V. Child(ren)'s Assets</h4>

                                <div>Include Uniform Gift to Minor Account, Uniform Trust to Minor Account, College Accounts/529 Account, Custodial Account, etc.</div>
                            </div>

                            <div class="table-responsive">
                            <table class="table-bordered border border-1 border-dark w-100">
                                <tr>
                                    <td class="text-center"> Institution</td>
                                    <td class="text-center">Account Number <span>(last 4 numbers only)</span>  </td>
                                    <td class="text-center">Listed Beneficiary</td>
                                    <td class="text-center">Person Who Controls the Account (Fiduciary)</td>
                                        <td class="text-center">Current Balance/  Value</td>
                                </tr>

                                     <tr>
                                        <td> <div class=" tdata"> <input type="text" name="cld_i1" class="border-0 w-100  "></div> </td>
                                        <td> <div class=" tdata"> <input type="text" name="cld_an1" class="border-0 w-100 text-center"></div>
                                        <td> <div class=" tdata"> <input type="text" name="cld_an1" class="border-0 w-100  "></div>
                                        <td> <div class=" tdata"> <input type="text" name="cld_pwc1" class="border-0 w-100  "></div>
                                        <td> <div class="d-flex tdata">$ <input type="text" name="cld_cb1" class="border-0 w-100 text-end"></div>
                                    </tr>
                                     <tr>
                                        <td> <div class=" tdata"> <input type="text" name="cld_i2" class="border-0 w-100  "></div> </td>
                                        <td> <div class=" tdata"> <input type="text" name="cld_an2" class="border-0 w-100 text-center"></div>
                                        <td> <div class=" tdata"> <input type="text" name="cld_an2" class="border-0 w-100  "></div>
                                        <td> <div class=" tdata"> <input type="text" name="cld_pwc2" class="border-0 w-100  "></div>
                                        <td> <div class="d-flex tdata">$ <input type="text" name="cld_cb2" class="border-0 w-100 text-end"></div>
                                    </tr>

                                     <tr>

                                        <td   colspan="4" class="text-end  tdata">Total Net Value of Child(ren)'s Assets:</td>
                                         <td> <div class="d-flex tdata">$ <input type="text" name="cld_tnv" class="border-0 w-100 text-end"></div>
                                        </td>
                                    </tr>


                                </table>

                            </div>
                            <div class="pt-lg-3">
                               <h4>VI. Health (Medical and/or Dental Insurance)</h4>

                             </div>
                             <div class="table-responsive">

                                <table class="table-bordered border border-1 border-dark w-100">
                                    <tr>
                                        <td class="text-center">Company</td>
                                        <td class="text-center">Name of Insured Person(s) Covered by the Policy</td>
                                    </tr>

                                     <tr>
                                        <td> <div class=" tdata"> <input type="text" name="H_com1" class="border-0 w-100  "></div> </td>
                                        <td> <div class=" tdata"> <input type="text" name="H_noi1" class="border-0 w-100 text-center"></div>
                                    </tr>
                                     <tr>
                                        <td> <div class=" tdata"> <input type="text" name="H_com2" class="border-0 w-100  "></div> </td>
                                        <td> <div class=" tdata"> <input type="text" name="H_noi2" class="border-0 w-100 text-center"></div>
                                    </tr>
                                </table>
                             </div>
                                <div class="d-flex d_sm_block pt-1">
                                   <div>Do you or any member of your family have HUSKY Health Insurance Coverage?</div>
                                    <div class=" ps-3 gap-2">
                                        <input type="radio" name="h_type" value="Yes">
                                        <label for="">Yes</label>
                                    </div>
                                    <div class=" ps-3 gap-2">
                                        <input type="radio" name="h_type" value="No">
                                        <label for="">No</label>
                                    </div>
                                    <div class=" ps-3 gap-2">
                                        <input type="radio" name="h_type" value="I Don't Know">
                                        <label for="">I Don't Know</label>
                                    </div>
                                </div>
                                <div>If Yes, whom?</div>
                                <div class=" tdata"> <textarea type="text" name="h_whom" class="border-0 w-100 border-dark  " rows="4"></textarea></div>

                                <div class="pt-2">
                                    <div>  <strong>If Yes, whom?</strong></div>
                                   <div> <strong>If you have other financial information that has not yet been disclosed, you have an affirmative duty to disclose that
                                        information. List additional information below:</strong></div>
                                        <div class=" tdata"> <textarea type="text" name="h_ib" class="border-0 w-100 border-dark  responsive_input" rows="4"></textarea></div>

                                </div>

                                <div>
                                    <div><strong>Summary</strong> (Use the amounts shown in Sections I. through IV.)</div>

                                    <div class="row">
                                        <div class="col-lg-9 responsive_input">
                                            <div class="pt-2"><strong>Total Net Weekly Income </strong>(See Section I. 3)......................................................................................................................... </div>
                                        </div>
                                        <div class="col-lg-3">
                                           <div class="d-flex w-100 gap-2"> <div>$</div>   <input type="text" name="s_tnwi" class="responsive_input border-0 border-bottom text-end" value="0"></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-9 responsive_input">
                                            <div class="pt-2"><strong>Total Weekly Expenses and Liabilities   </strong>(Total From Section II. + III.(B)) ..........................................................................</div>
                                        </div>
                                        <div class="col-lg-3">
                                           <div class="d-flex w-100 gap-2"> <div>$</div>   <input type="text" name="s_twel" class="responsive_input border-0 border-bottom text-end" value="0"></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-9 responsive_input ">
                                            <div class="pt-2"><strong>Total Cash Value of Assets </strong>(See Section IV. I.) ....................................................................................................................</div>
                                        </div>
                                        <div class="col-lg-3">
                                           <div class="d-flex w-100 gap-2"> <div>$</div>   <input type="text" name="s_tcva" class="responsive_input border-0 border-bottom text-end" value="0"></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-9 responsive_input">
                                            <div class="pt-2  responsive_input"><strong>Total Liabilities </strong> (Total Balance Due on Debts) (See Section III. (A))...................................................................................</div>
                                        </div>
                                        <div class="col-lg-3">
                                           <div class="d-flex w-100 gap-2"> <div>$</div>   <input type="text" name="s_tl" class="border-0 responsive_input border-bottom text-end" value="0"></div>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <div class="pt-3"> <strong>Certification</strong> </div>
                                    <div>I certify under the penalties of perjury that the information stated on this Financial Statement and the attached Schedules, if
                                        any, is complete, true, and accurate. <strong> I understand that willful misrepresentation of any of the information provided will
                                        subject me to sanctions and may result in criminal charges being filed against me. </strong></div>
                                </div>

                                <div>
                                    <div class="d-flex d_sm_block">
                                        <div class="d-flex d_sm_block gap-2 responsive_input" style="width:450px;"> <div class="pt-2">I,</div>   <input type="text" name="S_tcv" class="border-0 w-100 border-bottom responsive_input" value="Total Cash Value of Assets (See Section IV. I.)"> <div class="pt-2">The</div> </div>
                                        <div class=" pt-2 ps-3  ">
                                            <input type="radio" name="S_tcvt" value="plaintiff">
                                            <label for="">Plaintiff</label>
                                        </div>
                                        <div class=" pt-2 ps-3  ">
                                            <input type="radio" name="S_tcvt" value="Defendant">
                                            <label for="">Defendant herein, residing at</label>
                                        </div>
                                        <div class="pt-2 ps-3">
                                            <input type="text" name="S_tcvat" class="border-0  responsive_input border-bottom text-end"  style="width:350px;">
                                        </div>

                                    </div>
                                    <div class="d-flex d_sm_block w-100">
                                        <div class="d-flex d_sm_block w-50 responsive_input gap-2" > <span class="pt-2">telephone number</span>   <input type="text" name="S_residing" class="border-0 w-75 border-bottom responsive_input"   > </div>
                                        <div class="d-flex d_sm_block w-50 responsive_input gap-2" >   <input type="text" name="s_tn" class="border-0 w-50 border-bottom responsive_input" > <div class="pt-2"> being duly sworn, depose and say that </div> </div>


                                    </div>
                                    <div>the following is an accurate statement of my income from all sources, my liabilities, my assets
                                        and my net worth, from whatever sources, and whatever kind and nature, and wherever situated.</div>
                                </div>
                                <div class="pb-2 border-bottom border-dark">

                                <div class="d-flex lh-4 border-top border-dark">
                                    <div class="fs-6 ps-2 pe-4 w-75">
                                        <div>Signed (Affiant)</div>
                                        <div class="tdata w-100">
                                            <input type="text" name="signed_affiant1" class="border-0 w-100">
                                        </div>
                                    </div>
                                    <div class="border border-1 border-dark border-start-0 border-bottom-0 border-top-0">
                                    </div>
                                    <div class="fs-6 ps-2 pe-4 w-25">
                                        <div> Date signed <br>
                                        <small>Total Cash Value of Assets (See Section IV. I.)</small></div>
                                        <div class="tdata w-100">
                                            <input type="text" name="date_signed1" class="border-0 w-100">
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex lh-4 border-top border-bottom  border-dark">
                                    <div class="fs-6 ps-2 pe-4 w-50 ">
                                        <div>Signed (Notary, Commissioner of Superior Court, Assistant Clerk, Other
                                            Proper Officer under Section 1-24 of the Connecticut General Statutes)</div>
                                        <div class="tdata w-100">
                                            <input type="text" name="signed" class="border-0 w-100">
                                        </div>
                                    </div>
                                    <div class="border border-1 border-dark border-start-0 border-bottom-0 border-top-0">
                                    </div>
                                    <div class="fs-6 ps-2 pe-4 w-25">
                                        <div> Print name and title of person signing at left</div>
                                        <div class="tdata w-100">
                                            <input type="text" name="print_name_title" class="border-0 w-100">
                                        </div>
                                    </div>
                                    <div class="border border-1 border-dark border-start-0 border-bottom-0 border-top-0">
                                    </div>
                                    <div class="fs-6 ps-2 pe-4 w-25 ">
                                        <div> Date signed</div>
                                        <div class="tdata w-100">
                                            <input type="text" name="date_signed2" class="border-0 w-100">
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>

                            </div>
                            @include('layouts.footer5', ['page' => 4])

                            @include('layouts.pagination', ['page' => 7 ])

                        </div>
                </section>
            </form>
        </div>
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
