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

        @media screen and (max-width : 768px) {
            .d_sm_block {
                display: block !important;
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

        .backdrop_filter {
            backdrop-filter: blur(5px) !important;
            -webkit-backdrop-filter: blur(5px) !important;
        }
    </style>
</head>

<body>
    <div class="container-fluid py-1 py-lg-3">
        <form action="{{ route('form20.submit') }}" method="post">
            @csrf
            <div class="container bg_color p-lg-3 p-1  ">

                <section class="section_area  row page1 bg-white pt-5 p-lg-5 pe-2 pe-lg-5 p-lg-3 m-3 mt-4  pt-lg-5 pt-4"
                    id="first_section">

                    <div class="col-lg-10 mx-auto">
                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show">{{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif
                        <div class="row pt-lg-5 align-items-end">
                            <div class="col-lg-6">
                                <div>
                                    <input type="text" name="basic_name"
                                        class="form-control border-none responsive_input border-0 border-bottom border-dotted shadow-none">
                                    <div class="small_text">Name: </div>
                                </div>

                                <div>
                                    <input type="text" name="basic_address"
                                        class="form-control border-none border-0 border-bottom border-dotted shadow-none responsive_input">
                                    <div class="small_text">Address: </div>
                                </div>


                                <div>
                                    <input type="text" name="basic_zip_code"
                                        class="responsive_input form-control border-none border-0 border-bottom border-dotted shadow-none">
                                    <div class="small_text">City, State, Zip</div>
                                </div>
                                <div>
                                    <input type="text" name="basic_phone"
                                        class="responsive_input form-control border-none border-0 border-bottom border-dotted shadow-none">
                                    <div class="small_text">Phone</div>
                                </div>
                                <div>
                                    <input type="text" name="basic_email"
                                        class="responsive_input form-control border-none border-0 border-bottom border-dotted shadow-none">
                                    <span class="small_text">Email: </span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div><b>Check your email.</b> You will receive information and documents at this email
                                    address.</div>
                            </div>
                        </div>

                        <div class="row py-lg-2 border-bottom">
                            <div class="d-flex small_text d_sm_block">
                                <span>I am [ <input type="checkbox" name="petitioner" value="Yes"> ]
                                    Petitioner</span>
                                <input type="text" min="0" name="basic_petitioner" style="width:190px"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control ms-3">
                                <span>[ <input type="checkbox" name="respondent" value="Yes"> ] Respondent</span>
                                <input type="text" min="0" name="basic_respondent" style="width: 190px"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control ms-3">
                            </div>
                            <div class="d-flex small_text d_sm_block">
                                <span>[ <input type="checkbox" name="Petitioners_attorney" value="Yes"> ]
                                    Petitioner’s Attorney</span>
                                <input type="text" min="0" name="basic_petitioner" style="width:190px"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control ms-3">
                                <span>Respondent’s Attorney (Utah Bar #:</span>
                                <input type="text" min="0" name="basic_respondent_utah" style="width: 190px"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control ms-3">
                                <span>)</span>
                            </div>
                            <div class="d-flex small_text d_sm_block">
                                <span>[ <input type="checkbox" name="Petitioners_licensed" value="Yes"> ]
                                    Petitioner’s Licensed Paralegal Practitioner</span>
                                <input type="text" min="0" name="basic_petitioners_licensed"
                                    style="width:190px"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control ms-3">
                            </div>

                            <div class="d-flex small_text d_sm_block">
                                <span>[ <input type="checkbox" name="Petitioners_licensed" value="Yes"> ]
                                    Respondent’s Licensed Paralegal Practitioner</span>
                                <input type="text" min="0" name="basic_respondents_licensed"
                                    style="width:190px"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control ms-3">
                                <span>(Utah Bar #:</span>
                                <input type="text" min="0" name="basic_respondents_licensed_uth"
                                    style="width: 190px"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control ms-3">
                                <span>)</span>
                            </div>
                        </div>
                        <div class="text-center py-2">In the District Court of Utah</div>
                        <div class="row my-3">
                            <div class='d-flex d_sm_block justify-content-center'>
                                <input type="text" name="ju_dis_Court"
                                    class="responsive_input form-control border-none border-0 border-bottom border-dotted shadow-none"
                                    style="width:111px ">
                                <span>Judicial District Court </span>
                                <input type="text" name="county"
                                    class="responsive_input form-control border-none border-0 border-bottom border-dotted shadow-none"
                                    style="width:222px ">
                                <span>County</span>
                            </div>
                            <div class='d-flex d_sm_block'>
                                <span>Court Address </span><input type="text" name="court_address"
                                    class=" responsive_input form-control border-none border-0 border-bottom border-dotted shadow-none"
                                    style="width:835px  ">
                            </div>

                        </div>
                        <div class="row border-top border-bottom border-dark">
                            <div class="col-lg-6 border-end border-dark">
                                <div>In the Matter of (select one)</div>

                                <div>[ <input type="checkbox" name="marriage" value="Yes"> ] the Marriage of (
                                    <small> for a divorce with or without children, annulment, separate maintenance, or
                                        temporary separation case </small>)</div>

                                <div>[ <input type="checkbox" name="children" value="Yes"> ] the Children of (
                                    <small> to establish custody, parent- time or child support </small>)</div>

                                <div>[ <input type="checkbox" name="parentage_the_children" value="Yes"> ] the
                                    Parentage of the Children of ( <small> for a paternity case </small>)</div>


                                <div class='pt-1'>
                                    <input type="text" name="basic_name_pe"
                                        class="form-control border-none border-0 border-bottom border-dotted shadow-none responsive_input">
                                    <div class="small_text">(name of Petitioner) </div>
                                    <div class="small_text">and </div>
                                </div>
                                <div class='pt-1'>
                                    <input type="text" name="basic_name_re"
                                        class="form-control border-none border-0 border-bottom border-dotted shadow-none responsive_input">
                                    <div class="small_text">(name of Respondent)</div>
                                </div>
                                <div class='py-1'>
                                    <input type="text" name="basic_other"
                                        class="form-control border-none border-0 border-bottom border-dotted shadow-none responsive_input">
                                    <div class="small_text">Other parties (if any)</div>
                                </div>
                            </div>

                            <div class="col-lg-6 pt-3">
                                <div><b>Financial Declaration</b></div>
                                <small>(Utah Rule of Civil Procedure 26.1)</small>

                                <div class='pt-1'>
                                    <input type="text" name="basic_case_no"
                                        class="form-control border-none border-0 border-bottom border-dotted shadow-none responsive_input">
                                    <div class="small_text">Case Number </div>
                                </div>

                                <div class='pt-1'>
                                    <input type="text" name="basic_judge"
                                        class="form-control border-none border-0 border-bottom border-dotted shadow-none responsive_input">
                                    <div class="small_text">Judge </div>
                                </div>

                                <div class='pt-1'>
                                    <input type="text" name="basic_commissioner"
                                        class="form-control border-none border-0 border-bottom border-dotted shadow-none responsive_input">
                                    <div class="small_text">Commissioner </div>
                                </div>

                            </div>
                        </div>
                        <div class="py-2">You must fully and accurately disclose all assets and income in this
                            document and
                            provide attachments. If you fail to disclose all assets and income, you could be subject
                            to sanctions under Utah Rule of Civil Procedure 37. Sanctions can include an award of
                            non-disclosed assets to the other party, attorney’s fees or other sanctions.</div>


                        @include('layouts.footer15', ['page' => 1])
                    </div>

                </section>

                <section class="section_area row page1 bg-white pt-5 p-lg-5 pe-2 pe-lg-5 p-lg-3 m-3 mt-4  pt-lg-5 pt-4"
                    id="second_section">
                    <div class="col-lg-10 mx-auto">
                        <div class="row mt-lg-3">
                            <div class="fw-bold py-2"><span class="me-lg-4">1.</span> i am this form to the other
                                party and
                                (Choose one.):</div>
                            <div class="ms-lg-5">
                                <div class="row">
                                    <div class="col-1 " style="width:60px"> [ <input type="checkbox"
                                            name="not_financial_declaration" value="Yes"> ]</div>
                                    <div class="col-lg-11 col-sm-10 col-12"> <b>I am not filing the Financial
                                            Declaration with the court</b>
                                        because a hearing about child support, spousal support, property, debts,
                                        attorney fees and court costs is not scheduled, or because the court has not
                                        ordered me to file it.</div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-1 col-2" style="width:60px"> [ <input type="checkbox"
                                            name="financial_declaration" value="Yes"> ]</div>
                                    <div class="col-lg-11 col-sm-10 col-12"> <b>I am filing the Financial Declaration
                                            with the court</b> because
                                        a hearing
                                        about child support, spousal support, property, debts, attorney fees and
                                        court costs is scheduled, or the court has ordered me to file it.
                                        I am also filing the separate Certificate of Service of Financial Declaration.
                                    </div>
                                </div>

                            </div>

                            <div class="fw-bold py-2">2.</div>
                            <div>I am attaching the following documents, if available:</div>
                            <div class="ms-lg-5 pt-2">
                                <div class="table-responsive">
                                    <table class="border table-bordered">
                                        <thead>
                                            <tr>
                                                <td>
                                                    <div><b>Tax returns.</b> For the two years before the petition was
                                                        filed :
                                                    </div>
                                                    <ul>
                                                        <li>federal and state income tax returns – personal and for
                                                            any entities in which I have a majority or controlling
                                                            interest</li>
                                                        <li> all documents used to prepare the tax returns</li>
                                                    </ul>
                                                </td>
                                                <td class="w-25 py-lg-4">
                                                    <div class="small_text">[ <input type="checkbox" name="attached1"
                                                            value="Yes"> ] Attached</div>
                                                    <div class="small_text">[ <input type="checkbox"
                                                            name="non_attached1" value="Yes"> ] Not attached</div>
                                                    <div class="small_text">[ <input type="checkbox"
                                                            name="doesnt_apply1" value="Yes"> ] Doesn’t apply</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div><b>Pay stubs or other proof of income.</b> For the 12 months
                                                        before the petition was filed:</div>
                                                    <ul>
                                                        <li>pay stubs</li>
                                                        <li>other proof of all earned and un-earned income</li>
                                                    </ul>
                                                </td>
                                                <td class="w-25 py-lg-4">
                                                    <div class="small_text">[ <input type="checkbox"
                                                            name="doesnt_apply2" value="Yes"> ] Attached</div>
                                                    <div class="small_text">[ <input type="checkbox"
                                                            name="non_attached2" value="Yes"> ] Not attached</div>
                                                    <div class="small_text">[ <input type="checkbox"
                                                            name="doesnt_apply2" value="Yes"> ] Doesn’t apply</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div><b>Loan applications.</b> For the 12 months before the petition
                                                        was filed:</div>
                                                    <ul>
                                                        <li>all loan applications</li>
                                                        <li>financial statements used to apply for the loans</li>
                                                    </ul>
                                                </td>
                                                <td class="w-25 py-lg-4">
                                                    <div class="small_text">[ <input type="checkbox"
                                                            name="doesnt_apply3" value="Yes"> ] Attached</div>
                                                    <div class="small_text">[ <input type="checkbox"
                                                            name="non_attached3" value="Yes"> ] Not attached</div>
                                                    <div class="small_text">[ <input type="checkbox"
                                                            name="doesnt_apply3" value="Yes"> ] Doesn’t apply</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div><b> Real estate documents.</b> Documents verifying the value of
                                                        all real estate in which I have an interest. This includes the
                                                        most recent appraisal, tax valuation, and refinance
                                                        documents.</div>

                                                </td>
                                                <td class="w-25 py-lg-4">
                                                    <div class="small_text">[ <input type="checkbox"
                                                            name="doesnt_apply4" value="Yes"> ] Attached</div>
                                                    <div class="small_text">[ <input type="checkbox"
                                                            name="non_attached4" value="Yes"> ] Not attached</div>
                                                    <div class="small_text">[ <input type="checkbox"
                                                            name="doesnt_apply4" value="Yes"> ] Doesn’t apply</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div><b>Financial statements. </b>For the <b> 3 months </b>before
                                                        the
                                                        petition
                                                        was filed all financial statements. This includes, but is not
                                                        limited to, checking, savings, credit cards, money transfer
                                                        apps, money market funds, certificates of deposit, brokerage,
                                                    </div>

                                                </td>
                                                <td class="w-25 py-lg-4">
                                                    <div class="small_text">[ <input type="checkbox"
                                                            name="doesnt_apply5" value="Yes"> ] Attached</div>
                                                    <div class="small_text">[ <input type="checkbox"
                                                            name="non_attached5" value="Yes"> ] Not attached</div>
                                                    <div class="small_text">[ <input type="checkbox"
                                                            name="doesnt_apply5" value="Yes"> ] Doesn’t apply</div>
                                                </td>
                                            </tr>

                                        </thead>
                                    </table>
                                </div>


                            </div>


                            @include('layouts.footer15', ['page' => 2])

                        </div>
                </section>

                <section class="section_area row page1 bg-white pt-5 p-lg-5 pe-2 pe-lg-5 p-lg-3 m-3 mt-4  pt-lg-5 pt-4"
                    id="third_section">
                    <div class="col-lg-10 mx-auto">
                        <div class="table-responsive pt-lg-5 ms-lg-5">
                            <table class="table table-bordered border-dark">
                                <tbody>
                                    <tr>


                                        <td>
                                            <div>investment, and retirement.</div>
                                        </td>
                                        <td class="w-25"></td>
                                    </tr>


                                </tbody>
                            </table>
                            <div class="">You do not have to disclose all of the information above if your case
                                does not
                                involve dividing property or other valuables. This could include paternity,
                                modification, and grandparents’ rights cases. If you are not dividing property or
                                other valuables in your case you must only serve:</div>
                            <div class="ms-lg-5">
                                <ul>
                                    <li>your last three current paystubs and the previous year tax return;</li>
                                    <li>six months of bank and profit and loss statements if you are self-
                                        employed; and</li>
                                    <li>proof of any other assets or income that the court might need when
                                        deciding how much child support to order.</li>
                                </ul>
                            </div>
                            <div>You and the other party may be required to complete a full Financial Declaration
                                later.</div>
                            <div>[ <input type="checkbox" name="not_attached" value="Yes"> ] I marked some
                                documents above as “not attached” because:</div>
                            <div class="table-responsive ms-lg-5">
                                <table class="table table-bordered border-dark">
                                    <tbody>
                                        <tr>
                                            <td class="text-center w-25">Document</td>
                                            <td class="text-center w-75">Reason</td>
                                        </tr>
                                        <tr>
                                            <td><input type="text" name="basic_document1"
                                                    class="border-0 form-control"> </td>
                                            <td><input type="text" name="basic_reason1"
                                                    class="border-0 form-control"> </td>
                                        </tr>
                                        <tr>
                                            <td><input type="text" name="basic_document2"
                                                    class="border-0 form-control"> </td>
                                            <td><input type="text" name="basic_reason2"
                                                    class="border-0 form-control"> </td>
                                        </tr>
                                        <tr>
                                            <td><input type="text" name="basic_document3"
                                                    class="border-0 form-control"> </td>
                                            <td><input type="text" name="basic_reason3"
                                                    class="border-0 form-control"> </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>

                        </div>
                        <div class="row py-2">
                            <div class="col-lg-1 col-2" style="max-width:30px;">3.</div>
                            <div class="col-lg-11 ">
                                <div> Employment (You must attach proof of amounts listed. If the proof is not
                                    available,
                                    estimate
                                    the amount and explain how you reached that amount.)</div>

                                <div class="pt-2">[ <input type="checkbox" name="employed" value="Yes"> ] I am
                                    employed as (Choose all that apply):</div>
                                <div class="ms-lg-5">
                                    <div>[ <input type="checkbox" name="hourly_employee" value="Yes"> ] an hourly
                                        employee (Form W-2)</div>
                                    <div>[ <input type="checkbox" name="salaried_employee" value="Yes"> ] a
                                        salaried employee (Form W-2)</div>
                                    <div>[ <input type="checkbox" name="self_employed" value="Yes"> ]
                                        self-employed ( <small> Form 1099, Form K-1, Schedule C, etc. </small>)</div>
                                    <div>[ <input type="checkbox" name="not_attached" value="Yes"> ] other
                                        (Explain): <input type="text" name="employment_others"
                                            class="border-0 border-bottom footer_field w-75"></div>
                                </div>
                                <div class="table-responsive pt-1">
                                    <table class="table table-bordered border-dark">
                                        <tbody>
                                            <tr>
                                                <td class="text-center">Name of employer</td>
                                                <td class="text-center">Employer's address and phone number</td>
                                                <td class="text-center">Job title</td>
                                                <td class="text-center">Hourly rate or annual salary</td>
                                                <td class="text-center">Hours per week (If hourly)</td>
                                            </tr>
                                            <tr>
                                                <td><input type="text" name="employment_name1"
                                                        class="border-0 form-control"> </td>
                                                <td><input type="text" name="employment_address1"
                                                        class="border-0 form-control"> </td>
                                                <td><input type="text" name="employment_jobtitle1"
                                                        class="border-0 form-control"> </td>
                                                <td class="d-flex">
                                                    <div class="">$</div>
                                                    <input type="text" name="employment_hourlyrate_sallery1"
                                                        class="border-0 form-control">
                                                </td>
                                                <td><input type="text" name="employment_hourlyrate_week1"
                                                        class="border-0 form-control"> </td>
                                            </tr>


                                            <tr>
                                                <td><input type="text" name="employment_name2"
                                                        class="border-0 form-control"> </td>
                                                <td><input type="text" name="employment_address2"
                                                        class="border-0 form-control"> </td>
                                                <td><input type="text" name="employment_jobtitle2"
                                                        class="border-0 form-control"> </td>
                                                <td class="d-flex">
                                                    <div class="">$</div>
                                                    <input type="text" name="employment_hourlyrate_sallery2"
                                                        class="border-0 form-control">
                                                </td>
                                                <td><input type="text" name="employment_hourlyrate_week2"
                                                        class="border-0 form-control"> </td>

                                            </tr>
                                            <tr>
                                                <td><input type="text" name="employment_name3"
                                                        class="border-0 form-control"> </td>
                                                <td><input type="text" name="employment_address3"
                                                        class="border-0 form-control"> </td>
                                                <td><input type="text" name="employment_jobtitle3"
                                                        class="border-0 form-control"> </td>
                                                <td class="d-flex">
                                                    <div class="">$</div><input type="text"
                                                        name="employment_hourlyrate_sallery3"
                                                        class="border-0 form-control">
                                                </td>
                                                <td><input type="text" name="employment_hourlyrate_week3"
                                                        class="border-0 form-control"> </td>

                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        @include('layouts.footer15', ['page' => 3])
                    </div>
                </section>
                <section class="section_area row page1 bg-white pt-5 p-lg-5 pe-2 pe-lg-5 p-lg-3 m-3 mt-4  pt-lg-5 pt-4"
                    id="fourth_section">
                    <div class="col-lg-10 mx-auto">
                        <div class="row">
                            <div class="col-lg-1 col-2" style="max-width:30px;"> </div>
                            <div class="col-lg-11  ">

                                <div>[ <input type="checkbox" name="unemployed" value="Yes"> ] I am unemployed
                                    because:</div>

                                <div class="ps-lg-5">
                                    <div><input type="text" name="employment_umemployed1"
                                            class="border-0 border-bottom footer_field form-control"> </div>
                                    <div><input type="text" name="employment_umemployed2"
                                            class="border-0 border-bottom footer_field form-control"> </div>
                                    <div><input type="text" name="employment_umemployed3"
                                            class="border-0 border-bottom footer_field form-control"> </div>

                                </div>
                                <div class="pt-3">[ <input type="checkbox" name="estimated_amounts3"
                                        value="Yes"> ] I have estimated the amounts in paragraph 3.</div>
                                <div class="table-responsive ps-lg-5 py-2">
                                    <table class="table table-bordered border-dark">
                                        <tbody>
                                            <tr>
                                                <td class="text-center w-25">Item estimated</td>
                                                <td class="text-center w-75">Basis for estimation</td>
                                            </tr>
                                            <tr>
                                                <td><input type="text" name="employment_item1"
                                                        class="border-0 form-control"> </td>
                                                <td><input type="text" name="employment_basis1"
                                                        class="border-0 form-control"> </td>
                                            </tr>
                                            <tr>
                                                <td><input type="text" name="employment_item2"
                                                        class="border-0 form-control"> </td>
                                                <td><input type="text" name="employment_basis2"
                                                        class="border-0 form-control"> </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-1 col-2" style="max-width:30px;">4 </div>
                            <div class="col-lg-11 ">
                                <div> <b>Gross Monthly Income </b> (You must attach proof of amounts listed. If the
                                    proof is not
                                    available, estimate the amount and explain how you reached that amount.)</div>

                                <div class="row">
                                    <div class="col-lg-1 col-sm-2" style="max-width:60px;">[ <input type="checkbox"
                                            name="gross_monthly_income" value="Yes"> ] </div>
                                    <div class="col-lg-11  ">
                                        <div>I have the following monthly income before tax deductions:</div>
                                        (<small>Print your pre-tax income in the boxes below. For income that changes
                                            from month to month, calculate the annual total and divide by 12 months to
                                            list a monthly average.</small>)
                                    </div>
                                </div>
                                <div class="table-responsive py-2">
                                    <table class="table table-bordered border-dark">
                                        <tbody>
                                            <tr>
                                                <td class="text-center w-75">Source of income</td>
                                                <td class="text-center w-25">Monthly amount</td>
                                            </tr>
                                            <tr>
                                                <td class="small_text">Work (Including self employment, wages,
                                                    salaries,
                                                    commissions, bonuses, tips and overtime)</td>
                                                <td>
                                                    <div class="d-flex w-100 mx-auto">
                                                        <span>$</span><input type="employment_work_including1"
                                                            name="gross_value1" class="border-0 w-100">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="small_text">Rental income</td>
                                                <td>
                                                    <div class="d-flex w-100 mx-auto  ">
                                                        <span>$</span><input type="text" name="employment_rental1"
                                                            class="border-0 w-100">
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="small_text">Business income</td>
                                                <td>
                                                    <div class="d-flex w-100 mx-auto">
                                                        <span>$</span><input type="text"
                                                            name="employment_businessincome1" class="border-0 w-100">
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="small_text">Interest</td>
                                                <td>
                                                    <div class="d-flex w-100 mx-auto">
                                                        <span>$</span><input type="text"
                                                            name="employment_interest1" class="border-0 w-100">
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="small_text">Dividends</td>
                                                <td>
                                                    <div class="d-flex w-100 mx-auto">
                                                        <span>$</span><input type="text"
                                                            name="employment_dividends1" class="border-0 w-100">
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="small_text">Retirement income (Including pensions, 401(k),
                                                    IRA, etc.) </td>
                                                <td>
                                                    <div class="d-flex w-100 mx-auto  ">
                                                        <span>$</span><input type="text"
                                                            name="employment_retirement1" class="border-0 w-100">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="small_text">Worker’s compensation</td>
                                                <td>
                                                    <div class="d-flex w-100 mx-auto  ">
                                                        <span>$</span><input type="text" name="employment_workers1"
                                                            class="border-0 w-100">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="small_text">Private disability insurance</td>
                                                <td>
                                                    <div class="d-flex w-100 mx-auto  ">
                                                        <span>$</span><input type="text"
                                                            name="employment_pvt_inurance1" class="border-0 w-100">
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="small_text">Social Security Disability Income (SSDI)</td>
                                                <td>
                                                    <div class="d-flex w-100 mx-auto  ">
                                                        <span>$</span><input type="text"
                                                            name="employment_social_security_income1"
                                                            class="border-0 w-100">
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="small_text">Supplemental Security Income (SSI)</td>
                                                <td>
                                                    <div class="d-flex w-100 mx-auto  ">
                                                        <span>$</span><input type="text"
                                                            name="employment_supplemental1" class="border-0 w-100">
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="small_text">Social Security (Other than SSDI or SSI)</td>
                                                <td>
                                                    <div class="d-flex w-100 mx-auto  ">
                                                        <span>$</span><input type="text"
                                                            name="employment_social_security1" class="border-0 w-100">
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="small_text">Unemployment benefits</td>
                                                <td>
                                                    <div class="d-flex w-100 mx-auto  ">
                                                        <span>$</span><input type="text"
                                                            name="employment_unemployment_benefit1"
                                                            class="border-0 w-100">
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="small_text">Education benefits (Including grants, loans,
                                                    cash
                                                    scholarships, etc.) </td>
                                                <td>
                                                    <div class="d-flex w-100 mx-auto  ">
                                                        <span>$</span><input type="text"
                                                            name="employment_edu_benefit1" class="border-0 w-100">
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="small_text">Veteran’s benefits</td>
                                                <td>
                                                    <div class="d-flex w-100 mx-auto  ">
                                                        <span>$</span><input type="text"
                                                            name="employment_veteran_benefits1"
                                                            class="border-0 w-100">
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="small_text">Alimony</td>
                                                <td>
                                                    <div class="d-flex w-100 mx-auto  ">
                                                        <span>$</span><input type="text" name="employment_alimony1"
                                                            class="border-0 w-100">
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="small_text">Child support</td>
                                                <td>
                                                    <div class="d-flex w-100 mx-auto  ">
                                                        <span>$</span><input type="text"
                                                            name="employment_cld_support1" class="border-0 w-100">
                                                    </div>
                                                </td>
                                            </tr>


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            @include('layouts.footer15', ['page' => 4])
                        </div>



                    </div>

                </section>
                <section class="section_area row page1 bg-white pt-5 p-lg-5 pe-2 pe-lg-5 p-lg-3 m-3 mt-4  pt-lg-5 pt-4"
                    id="fifth_section">
                    <div class="col-lg-10 mx-auto">

                        <div class="row pt-lg-5">
                            <div class="col-lg-1 col-2" style="max-width:30px;"> </div>
                            <div class="col-lg-11   pt-lg-5">
                                <div class="table-responsive py-2">
                                    <table class="table table-bordered border-dark">
                                        <tbody>
                                            <tr>
                                                <td class="text-center w-75">Source of income</td>
                                                <td class="text-center w-25">Monthly amount</td>
                                            </tr>


                                            <tr>
                                                <td class="small_text">Payments from civil litigation </td>
                                                <td>
                                                    <div class="d-flex w-100 mx-auto  ">
                                                        <span>$</span><input type="text" name="payment_civil"
                                                            class="border-0 w-100">
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="small_text">Victim restitution </td>
                                                <td>
                                                    <div class="d-flex w-100 mx-auto  ">
                                                        <span>$</span><input type="text" name="victim_restitution"
                                                            class="border-0 w-100">
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="small_text">Public assistance (Including AFDC, FEP, TANF,
                                                    welfare,
                                                    etc.)</td>
                                                <td>
                                                    <div class="d-flex w-100 mx-auto">
                                                        <span>$</span><input type="text" name="public_assistance"
                                                            class="border-0 w-100">
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="small_text">Financial support from household members</td>
                                                <td>
                                                    <div class="d-flex w-100 mx-auto">
                                                        <span>$</span><input type="text"
                                                            name="finacial_support_household" class="border-0 w-100">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="small_text">Financial support from non-household members
                                                </td>
                                                <td>
                                                    <div class="d-flex w-100 mx-auto">
                                                        <span>$</span><input type="text"
                                                            name="finacial_support_nonhousehold"
                                                            class="border-0 w-100">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="small_text">Trust income</td>
                                                <td>
                                                    <div class="d-flex w-100 mx-auto">
                                                        <span>$</span><input type="text" name="trust_income"
                                                            class="border-0 w-100">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="small_text">Annuity income</td>
                                                <td>
                                                    <div class="d-flex w-100 mx-auto  ">
                                                        <span>$</span><input type="text" name="annuity_income"
                                                            class="border-0 w-100">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="small_text">Other (Describe) </td>
                                                <td>
                                                    <div class="d-flex w-100 mx-auto  ">
                                                        <span>$</span><input type="text" name="other_describe1"
                                                            class="border-0 w-100">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="small_text">Other (Describe) </td>
                                                <td>
                                                    <div class="d-flex w-100 mx-auto  ">
                                                        <span>$</span><input type="text" name="other_describe2"
                                                            class="border-0 w-100">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="small_text text-end pe-lg-3">Total gross monthly income
                                                </td>
                                                <td>
                                                    <div class="d-flex w-100 mx-auto  ">
                                                        <span>$</span><input type="text" name="total_gross_mi"
                                                            class="border-0 w-100">
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div>[ <input type="checkbox" name="estimated_amounts4" value="Yes"> ] I have
                                    estimated the amounts in paragraph 4.</div>
                                <div class="ps-lg-5">
                                    <div class="table-responsive">
                                        <table class="table table-bordered border-dark">
                                            <tbody>
                                                <tr>
                                                    <td class="w-25 text-center">Item estimated</td>
                                                    <td class="w-75 text-center">Basis for estimation</td>
                                                </tr>
                                                <tr>
                                                    <td><input type="text" name="estimated_item1"
                                                            class="border-0 form-control"> </td>
                                                    <td><input type="text" name="estimated_basis1"
                                                            class="border-0 form-control"> </td>
                                                </tr>
                                                <tr>
                                                    <td><input type="text" name="estimated_item2"
                                                            class="border-0 form-control"> </td>
                                                    <td><input type="text" name="estimated_basis2"
                                                            class="border-0 form-control"> </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div>[ <input type="checkbox" name="no_income" value="Yes"> ] I have no income
                                    because:</div>
                                <div class="ps-lg-5">
                                    <div><input type="text" name="noincome_because1"
                                            class="border-0 border-bottom footer_field form-control"> </div>
                                    <div><input type="text" name="noincome_because2"
                                            class="border-0 border-bottom footer_field form-control"> </div>
                                    <div><input type="text" name="noincome_because3"
                                            class="border-0 border-bottom footer_field form-control"> </div>

                                </div>
                            </div>

                            <div class="row pt-lg-5">
                                <div class="col-lg-1 col-2" style="max-width:30px;"> 5 </div>
                                <div class=" col-lg-10">
                                    <b>Monthly Tax Deductions</b> (<small> You must attach proof of amounts listed. If
                                        the proof
                                        is not
                                        available, estimate the amount and explain how you reached that amount.</small>)
                                    <div>[ <input type="checkbox" name="no_monthly_tax" value="Yes"> ] I have no
                                        monthly tax deductions because I have no income.</div>
                                    <div>[ <input type="checkbox" name="monthly_tax" value="Yes"> ] I have the
                                        following monthly tax deductions.</div>
                                    <div class="table-responsive">
                                        <table class="table table-bordered border-dark w-50 responsive_input    ">
                                            <tbody>
                                                <tr>
                                                    <td class="w-75">Type of tax deduction</td>
                                                    <td class="w-25">Amount</td>
                                                </tr>
                                                <tr>
                                                    <td class="small_text">Federal income tax</td>
                                                    <td>
                                                        <div class="d-flex w-100 mx-auto  ">
                                                            <span>$</span><input type="text"
                                                                name="federal_income_tax" class="border-0 w-100">
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="small_text">State income tax</td>
                                                    <td>
                                                        <div class="d-flex w-100 mx-auto">
                                                            <span>$</span><input type="text"
                                                                name="state_income_tax" class="border-0 w-100">
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="small_text">Municipal income tax</td>
                                                    <td>
                                                        <div class="d-flex w-100 mx-auto  ">
                                                            <span>$</span><input type="text"
                                                                name="muncipal_income_tax" class="border-0 w-100">
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="small_text">FICA</td>
                                                    <td>
                                                        <div class="d-flex w-100 mx-auto  ">
                                                            <span>$</span><input type="text" name="fica"
                                                                class="border-0 w-100">
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="small_text">Medicare</td>
                                                    <td>
                                                        <div class="d-flex w-100 mx-auto">
                                                            <span>$</span><input type="text" name="medicare"
                                                                class="border-0 w-100">
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                                @include('layouts.footer15', ['page' => 5])
                            </div>
                        </div>
                </section>
                <section class="section_area row page1 bg-white pt-5 p-lg-5 pe-2 pe-lg-5 p-lg-3 m-3 mt-4  pt-lg-5 pt-4"
                    id="sixth_section">
                    <div class="col-lg-10 mx-auto">
                        <div class="row pt-lg-5">
                            <div class="col-lg-1 col-2" style="max-width:30px;"> </div>
                            <div class="col-lg-11 ">
                                <div class="table-responsive">
                                    <table class="table table-bordered border-dark w-50 responsive_input">
                                        <tbody>
                                            <tr>
                                                <td class="w-75">Type of tax deduction</td>
                                                <td class="w-25">Amount</td>
                                            </tr>
                                            <tr>
                                                <td class="small_text">Total monthly tax deductions</td>
                                                <td>
                                                    <div class="d-flex w-100 mx-auto">
                                                        <span>$</span><input type="text" name="total_monthly_tax"
                                                            class="border-0 w-100">
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div> [ <input type="checkbox" name="estimated_amounts5" value="Yes"> ] I have
                                    estimated the amounts in paragraph 5.</div>
                                <div class="table-responsive ms-lg-5">
                                    <table class="table table-bordered border-dark ">
                                        <tbody>
                                            <tr>
                                                <td class="w-25 text-center">Item estimated</td>
                                                <td class="w-75 text-center">Basis for estimation</td>
                                            </tr>
                                            <tr>
                                                <td class=""> <input type="text" name="mtd_item1"
                                                        class="border-0 w-100"></td>
                                                <td> <input type="text" name="mtd_basis1" class="border-0 w-100">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class=""> <input type="text" name="mtd_item2"
                                                        class="border-0 w-100"></td>
                                                <td> <input type="text" name="mtd_basis2" class="border-0 w-100">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="row pt-lg-5">
                            <div class="col-lg-1 col-2" style="max-width:30px;"> 6. </div>
                            <div class="col-lg-11  ">
                                <div class="fw-bold">After Tax Income</div>
                                <div class="row">
                                    <div class="col-lg-1 col-3" style="max-width:60px;"> [ <input type="checkbox"
                                            name="monthly_income" value="Yes"> ]</div>
                                    <div class="col-lg-11  ">
                                        <div>My monthly income is:</div>
                                        <div class="ps-lg-5">
                                            <div class="d-flex d_sm_block ms-2 w-100 mx-auto">
                                                <span>$</span><input type="text" name="ati_gmi"
                                                    class="border-0  border-bottom footer_input ">
                                                <div class="ps-lg-3 small_text"><small>Gross monthly income from
                                                        section
                                                        4</small></div>
                                            </div>
                                            <div class="d-flex d_sm_block w-100 mx-auto">
                                                - <span>$</span><input type="text" name="ati_mmt"
                                                    class="border-0  border-bottom footer_input ">
                                                <div class="ps-lg-3 small_text"><small>Minus monthly tax deductions
                                                        from
                                                        section 5</small></div>
                                            </div>
                                            <hr class="w-50 text-dark">
                                            <div class="d-flex d_sm_block w-100 mx-auto">
                                                = <span>$</span><input type="text" name="ati_eatm"
                                                    class="border-0  border-bottom footer_input">
                                                <div class="ps-lg-3 small_text"><small>Equals after-tax monthly
                                                        income</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div>[ <input type="checkbox" name="no_income" value="Yes"> ] I have no
                                            income.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row pt-lg-5">
                            <div class="col-lg-1 col-2" style="max-width:30px;"> 7. </div>
                            <div class="col-lg-11 ">
                                <div> <b>Monthly Expenses</b> (<small>You must attach proof of amounts listed. If the
                                        proof is
                                        not available,
                                        estimate the amount and explain how you reached that amount. Include amounts you
                                        pay for
                                        yourself and any spouse, children or other dependents in your
                                        household.</small>)</div>

                                <div class="row ps-lg-3">
                                    <div class="col-lg-1 col-3" style="max-width:60px;"> [ <input type="checkbox"
                                            name="no_party_requested" value="Yes"> ] </div>
                                    <div class="col-lg-11 col-9">No party has requested alimony so I am only completing
                                        the "Current
                                        Amount" column, which represents the amount I pay now. </div>
                                </div>
                                <div class="row ps-lg-3">
                                    <div class="col-lg-1 col-3" style="max-width:60px;"> [ <input type="checkbox"
                                            name="party_requested" value="Yes"> ] </div>
                                    <div class="col-lg-11 col-9">One of the parties has requested alimony so I am
                                        completing both the
                                        "Current Amount" and the "Marital Expenses" column, which represents
                                        the amount paid during the marriage prior to separation. </div>
                                </div>

                                <div class="table-responsive py-3">
                                    <table class="table table-bordered">
                                        <tbody>
                                            <tr>
                                                <td class="w-50 text-center">Monthly expense</td>
                                                <td class=" text-center">Current Amount</td>
                                                <td class=" text-center">Marital Expenses</td>
                                            </tr>
                                            <tr>
                                                <td class="small_text">Rent or mortgage</td>
                                                <td>
                                                    <div class="d-flex w-100 mx-auto">
                                                        <span>$</span><input type="text" name="me_current_amount1"
                                                            class="border-0">
                                                    </div>
                                                </td>
                                                <td class="bg-secondary">
                                                    <div class="d-flex w-100 mx-auto">
                                                        <span>$</span><input type="text"
                                                            name="me_marital_expenses1" class="border-0">
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="small_text">Real estate taxes (if not included in mortgage)
                                                </td>
                                                <td>
                                                    <div class="d-flex w-100 mx-auto">
                                                        <span>$</span><input type="text" name="me_current_amount2"
                                                            class="border-0">
                                                    </div>
                                                </td>
                                                <td class="bg-secondary">
                                                    <div class="d-flex w-100 mx-auto">
                                                        <span>$</span><input type="text"
                                                            name="me_marital_expenses2" class="border-0">
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="small_text">Real estate insurance (if not included in
                                                    mortgage)</td>
                                                <td>
                                                    <div class="d-flex w-100 mx-auto">
                                                        <span>$</span><input type="text" name="me_current_amount3"
                                                            class="border-0">
                                                    </div>
                                                </td>
                                                <td class="bg-secondary">
                                                    <div class="d-flex w-100 mx-auto">
                                                        <span>$</span><input type="text"
                                                            name="me_marital_expenses3" class="border-0">
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="small_text">Real estate maintenance</td>
                                                <td>
                                                    <div class="d-flex w-100 mx-auto">
                                                        <span>$</span><input type="text" name="me_current_amount4"
                                                            class="border-0">
                                                    </div>
                                                </td>
                                                <td class="bg-secondary">
                                                    <div class="d-flex w-100 mx-auto">
                                                        <span>$</span><input type="text"
                                                            name="me_marital_expenses4" class="border-0">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="small_text">Food and household supplies</td>
                                                <td>
                                                    <div class="d-flex w-100 mx-auto">
                                                        <span>$</span><input type="text" name="me_current_amount5"
                                                            class="border-0">
                                                    </div>
                                                </td>
                                                <td class="bg-secondary">
                                                    <div class="d-flex w-100 mx-auto">
                                                        <span>$</span><input type="text"
                                                            name="me_marital_expenses5" class="border-0">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="small_text">Clothing</td>
                                                <td>
                                                    <div class="d-flex w-100 mx-auto">
                                                        <span>$</span><input type="text" name="me_current_amount6"
                                                            class="border-0">
                                                    </div>
                                                </td>
                                                <td class="bg-secondary">
                                                    <div class="d-flex w-100 mx-auto">
                                                        <span>$</span><input type="text"
                                                            name="me_marital_expenses6" class="border-0">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="small_text">Automobile payments</td>
                                                <td>
                                                    <div class="d-flex w-100 mx-auto">
                                                        <span>$</span><input type="text" name="me_current_amount7"
                                                            class="border-0">
                                                    </div>
                                                </td>
                                                <td class="bg-secondary">
                                                    <div class="d-flex w-100 mx-auto">
                                                        <span>$</span><input type="text"
                                                            name="me_marital_expenses7" class="border-0">
                                                    </div>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


                        @include('layouts.footer15', ['page' => 6])

                    </div>

                </section>
                <section class="section_area row page1 bg-white pt-5 p-lg-5 pe-2 pe-lg-5 p-lg-3 m-3 mt-4  pt-lg-5 pt-4"
                    id="seventh_section">
                    <div class="col-lg-10 mx-auto">





                        <div class="row pt-lg-5">
                            <div class="col-lg-1 col-2" style="max-width:30px;"> </div>
                            <div class="col-lg-11  pt-lg-5">



                                <div class="table-responsive py-3">
                                    <table class="table table-bordered">
                                        <tbody>
                                            <tr>
                                                <td class="w-50 text-center">Monthly expense</td>
                                                <td class=" text-center">Current Amount</td>
                                                <td class=" text-center">Marital Expenses</td>
                                            </tr>
                                            <tr>
                                                <td class="small_text">Automobile insurance</td>
                                                <td>
                                                    <div class="d-flex w-100 mx-auto">
                                                        <span>$</span><input type="text" name="me_current_amount8"
                                                            class="border-0">
                                                    </div>
                                                </td>
                                                <td class="bg-secondary">
                                                    <div class="d-flex w-100 mx-auto">
                                                        <span>$</span><input type="text"
                                                            name="me_marital_expenses8" class="border-0">
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="small_text">Automobile fuel</td>
                                                <td>
                                                    <div class="d-flex w-100 mx-auto">
                                                        <span>$</span><input type="text" name="me_current_amount9"
                                                            class="border-0">
                                                    </div>
                                                </td>
                                                <td class="bg-secondary">
                                                    <div class="d-flex w-100 mx-auto">
                                                        <span>$</span><input type="text"
                                                            name="me_marital_expenses9" class="border-0">
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="small_text">Automobile maintenance</td>
                                                <td>
                                                    <div class="d-flex w-100 mx-auto">
                                                        <span>$</span><input type="text" name="me_current_amount10"
                                                            class="border-0">
                                                    </div>
                                                </td>
                                                <td class="bg-secondary">
                                                    <div class="d-flex w-100 mx-auto">
                                                        <span>$</span><input type="text"
                                                            name="me_marital_expenses10" class="border-0">
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="small_text">Other transportation costs (public
                                                    transportation,
                                                    parking, etc.)</td>
                                                <td>
                                                    <div class="d-flex w-100 mx-auto">
                                                        <span>$</span><input type="text" name="me_current_amount11"
                                                            class="border-0">
                                                    </div>
                                                </td>
                                                <td class="bg-secondary">
                                                    <div class="d-flex w-100 mx-auto">
                                                        <span>$</span><input type="text"
                                                            name="me_marital_expenses11" class="border-0">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="small_text">Utilities (such as electricity, gas, water,
                                                    sewer,
                                                    garbage)</td>
                                                <td>
                                                    <div class="d-flex w-100 mx-auto">
                                                        <span>$</span><input type="text" name="me_current_amount12"
                                                            class="border-0">
                                                    </div>
                                                </td>
                                                <td class="bg-secondary">
                                                    <div class="d-flex w-100 mx-auto">
                                                        <span>$</span><input type="text"
                                                            name="me_marital_expenses12" class="border-0">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="small_text">Telephone</td>
                                                <td>
                                                    <div class="d-flex w-100 mx-auto">
                                                        <span>$</span><input type="text" name="me_current_amount13"
                                                            class="border-0">
                                                    </div>
                                                </td>
                                                <td class="bg-secondary">
                                                    <div class="d-flex w-100 mx-auto">
                                                        <span>$</span><input type="text"
                                                            name="me_marital_expenses13" class="border-0">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="small_text">Paid television, cable, satellite</td>
                                                <td>
                                                    <div class="d-flex w-100 mx-auto">
                                                        <span>$</span><input type="text" name="me_current_amount14"
                                                            class="border-0">
                                                    </div>
                                                </td>
                                                <td class="bg-secondary">
                                                    <div class="d-flex w-100 mx-auto">
                                                        <span>$</span><input type="text"
                                                            name="me_marital_expenses14" class="border-0">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="small_text">Internet</td>
                                                <td>
                                                    <div class="d-flex w-100 mx-auto">
                                                        <span>$</span><input type="text" name="me_current_amount15"
                                                            class="border-0">
                                                    </div>
                                                </td>
                                                <td class="bg-secondary">
                                                    <div class="d-flex w-100 mx-auto">
                                                        <span>$</span><input type="text"
                                                            name="me_marital_expenses15" class="border-0">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="small_text">Credit card payments</td>
                                                <td>
                                                    <div class="d-flex w-100 mx-auto">
                                                        <span>$</span><input type="text" name="me_current_amount16"
                                                            class="border-0">
                                                    </div>
                                                </td>
                                                <td class="bg-secondary">
                                                    <div class="d-flex w-100 mx-auto">
                                                        <span>$</span><input type="text"
                                                            name="me_marital_expenses16" class="border-0">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="small_text">Loans and other debt payments</td>
                                                <td>
                                                    <div class="d-flex w-100 mx-auto">
                                                        <span>$</span><input type="text" name="me_current_amount17"
                                                            class="border-0">
                                                    </div>
                                                </td>
                                                <td class="bg-secondary">
                                                    <div class="d-flex w-100 mx-auto">
                                                        <span>$</span><input type="text"
                                                            name="me_marital_expenses17" class="border-0">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="small_text">Alimony</td>
                                                <td>
                                                    <div class="d-flex w-100 mx-auto">
                                                        <span>$</span><input type="text" name="me_current_amount18"
                                                            class="border-0">
                                                    </div>
                                                </td>
                                                <td class="bg-secondary">
                                                    <div class="d-flex w-100 mx-auto">
                                                        <span>$</span><input type="text"
                                                            name="me_marital_expenses18" class="border-0">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="small_text">Child support</td>
                                                <td>
                                                    <div class="d-flex w-100 mx-auto">
                                                        <span>$</span><input type="text" name="me_current_amount20"
                                                            class="border-0">
                                                    </div>
                                                </td>
                                                <td class="bg-secondary">
                                                    <div class="d-flex w-100 mx-auto">
                                                        <span>$</span><input type="text"
                                                            name="me_marital_expenses20" class="border-0">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="small_text">Child care</td>
                                                <td>
                                                    <div class="d-flex w-100 mx-auto">
                                                        <span>$</span><input type="text" name="me_current_amount21"
                                                            class="border-0">
                                                    </div>
                                                </td>
                                                <td class="bg-secondary">
                                                    <div class="d-flex w-100 mx-auto">
                                                        <span>$</span><input type="text"
                                                            name="me_marital_expenses21" class="border-0">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="small_text">Extracurricular activities for children</td>
                                                <td>
                                                    <div class="d-flex w-100 mx-auto">
                                                        <span>$</span><input type="text" name="me_current_amount22"
                                                            class="border-0">
                                                    </div>
                                                </td>
                                                <td class="bg-secondary">
                                                    <div class="d-flex w-100 mx-auto">
                                                        <span>$</span><input type="text"
                                                            name="me_marital_expenses22" class="border-0">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="small_text">Education (children)</td>
                                                <td>
                                                    <div class="d-flex w-100 mx-auto">
                                                        <span>$</span><input type="text" name="me_current_amount23"
                                                            class="border-0">
                                                    </div>
                                                </td>
                                                <td class="bg-secondary">
                                                    <div class="d-flex w-100 mx-auto">
                                                        <span>$</span><input type="text"
                                                            name="me_marital_expenses23" class="border-0">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="small_text">Education (self)</td>
                                                <td>
                                                    <div class="d-flex w-100 mx-auto">
                                                        <span>$</span><input type="text" name="me_current_amount24"
                                                            class="border-0">
                                                    </div>
                                                </td>
                                                <td class="bg-secondary">
                                                    <div class="d-flex w-100 mx-auto">
                                                        <span>$</span><input type="text"
                                                            name="me_marital_expenses24" class="border-0">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="small_text">Health care insurance</td>
                                                <td>
                                                    <div class="d-flex w-100 mx-auto">
                                                        <span>$</span><input type="text" name="me_current_amount25"
                                                            class="border-0">
                                                    </div>
                                                </td>
                                                <td class="bg-secondary">
                                                    <div class="d-flex w-100 mx-auto">
                                                        <span>$</span><input type="text"
                                                            name="me_marital_expenses25" class="border-0">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="small_text">Health care expenses (excluding insurance listed
                                                    above)
                                                </td>
                                                <td>
                                                    <div class="d-flex w-100 mx-auto">
                                                        <span>$</span><input type="text" name="me_current_amount26"
                                                            class="border-0">
                                                    </div>
                                                </td>
                                                <td class="bg-secondary">
                                                    <div class="d-flex w-100 mx-auto">
                                                        <span>$</span><input type="text"
                                                            name="me_marital_expenses26" class="border-0">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="small_text">Other insurance (describe)</td>
                                                <td>
                                                    <div class="d-flex w-100 mx-auto">
                                                        <span>$</span><input type="text" name="me_current_amount27"
                                                            class="border-0">
                                                    </div>
                                                </td>
                                                <td class="bg-secondary">
                                                    <div class="d-flex w-100 mx-auto">
                                                        <span>$</span><input type="text"
                                                            name="me_marital_expenses27" class="border-0">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="small_text">Entertainment</td>
                                                <td>
                                                    <div class="d-flex w-100 mx-auto">
                                                        <span>$</span><input type="text"
                                                            name="me_current_amount28" class="border-0">
                                                    </div>
                                                </td>
                                                <td class="bg-secondary">
                                                    <div class="d-flex w-100 mx-auto">
                                                        <span>$</span><input type="text"
                                                            name="me_marital_expenses28" class="border-0">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="small_text">Laundry and dry cleaning</td>
                                                <td>
                                                    <div class="d-flex w-100 mx-auto">
                                                        <span>$</span><input type="text"
                                                            name="me_current_amount29" class="border-0">
                                                    </div>
                                                </td>
                                                <td class="bg-secondary">
                                                    <div class="d-flex w-100 mx-auto">
                                                        <span>$</span><input type="text"
                                                            name="me_marital_expenses29" class="border-0">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="small_text">Donations</td>
                                                <td>
                                                    <div class="d-flex w-100 mx-auto">
                                                        <span>$</span><input type="text"
                                                            name="me_current_amount30" class="border-0">
                                                    </div>
                                                </td>
                                                <td class="bg-secondary">
                                                    <div class="d-flex w-100 mx-auto">
                                                        <span>$</span><input type="text"
                                                            name="me_marital_expenses30" class="border-0">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="small_text">Gifts</td>
                                                <td>
                                                    <div class="d-flex w-100 mx-auto">
                                                        <span>$</span><input type="text"
                                                            name="me_current_amount31" class="border-0">
                                                    </div>
                                                </td>
                                                <td class="bg-secondary">
                                                    <div class="d-flex w-100 mx-auto">
                                                        <span>$</span><input type="text"
                                                            name="me_marital_expenses31" class="border-0">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="small_text">Union and other dues</td>
                                                <td>
                                                    <div class="d-flex w-100 mx-auto">
                                                        <span>$</span><input type="text"
                                                            name="me_current_amount32" class="border-0">
                                                    </div>
                                                </td>
                                                <td class="bg-secondary">
                                                    <div class="d-flex w-100 mx-auto">
                                                        <span>$</span><input type="text"
                                                            name="me_marital_expenses32" class="border-0">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="small_text">Garnishment or income withholding order</td>
                                                <td>
                                                    <div class="d-flex w-100 mx-auto">
                                                        <span>$</span><input type="text"
                                                            name="me_current_amount33" class="border-0">
                                                    </div>
                                                </td>
                                                <td class="bg-secondary">
                                                    <div class="d-flex w-100 mx-auto">
                                                        <span>$</span><input type="text"
                                                            name="me_marital_expenses33" class="border-0">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="small_text"> Retirement deposits (including pensions,
                                                    401(k), IRA,
                                                    etc.)</td>
                                                <td>
                                                    <div class="d-flex w-100 mx-auto">
                                                        <span>$</span><input type="text"
                                                            name="me_current_amount34" class="border-0">
                                                    </div>
                                                </td>
                                                <td class="bg-secondary">
                                                    <div class="d-flex w-100 mx-auto">
                                                        <span>$</span><input type="text"
                                                            name="me_marital_expenses34" class="border-0">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="small_text"> Other (describe)</td>
                                                <td>
                                                    <div class="d-flex w-100 mx-auto">
                                                        <span>$</span><input type="text"
                                                            name="me_current_amount35" class="border-0">
                                                    </div>
                                                </td>
                                                <td class="bg-secondary">
                                                    <div class="d-flex w-100 mx-auto">
                                                        <span>$</span><input type="text"
                                                            name="me_marital_expenses35" class="border-0">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="small_text">Other (describe)</td>
                                                <td>
                                                    <div class="d-flex w-100 mx-auto">
                                                        <span>$</span><input type="text"
                                                            name="me_current_amount36" class="border-0">
                                                    </div>
                                                </td>
                                                <td class="bg-secondary">
                                                    <div class="d-flex w-100 mx-auto">
                                                        <span>$</span><input type="text"
                                                            name="me_marital_expenses36" class="border-0">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="small_text text-end pe-lg-3">Total monthly expenses</td>
                                                <td>
                                                    <div class="d-flex w-100 mx-auto">
                                                        <span>$</span><input type="text"
                                                            name="me_current_amount37" class="border-0">
                                                    </div>
                                                </td>
                                                <td class="bg-secondary">
                                                    <div class="d-flex w-100 mx-auto">
                                                        <span>$</span><input type="text"
                                                            name="me_marital_expenses37" class="border-0">
                                                    </div>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                                <div>[ <input type="checkbox" name="estimated_amounts7" value="Yes"> ] I have
                                    estimated the amounts in paragraph 7.</div>
                            </div>
                        </div>
                        @include('layouts.footer15', ['page' => 7])
                    </div>
                </section>

                <section
                    class="section_area row page1 bg-white pt-5 p-lg-5 pe-2 pe-lg-5 p-lg-3 m-3 mt-4  pt-lg-5 pt-4"
                    id="eighth_section">
                    <div class="col-lg-10 mx-auto">
                        <div class="row pt-lg-5">
                            <div class="col-lg-1 col-2" style="max-width:30px;"> </div>
                            <div class="col-lg-11  pt-lg-5">

                                <div class="table-responsive ps-lg-5 py-2">
                                    <table class="table table-bordered border-dark">
                                        <tbody>
                                            <tr>
                                                <td class="text-center w-25">Item estimated</td>
                                                <td class="text-center w-75">Basis for estimation</td>
                                            </tr>
                                            <tr>
                                                <td><input type="text" name="me_item1"
                                                        class="border-0 form-control"> </td>
                                                <td><input type="text" name="me_basis1"
                                                        class="border-0 form-control"> </td>
                                            </tr>
                                            <tr>
                                                <td><input type="text" name="me_item2"
                                                        class="border-0 form-control"> </td>
                                                <td><input type="text" name="me_basis2"
                                                        class="border-0 form-control"> </td>
                                            </tr>
                                            <tr>
                                                <td><input type="text" name="me_item3"
                                                        class="border-0 form-control"> </td>
                                                <td><input type="text" name="me_basis3"
                                                        class="border-0 form-control"> </td>
                                            </tr>
                                            <tr>
                                                <td><input type="text" name="me_item4"
                                                        class="border-0 form-control"> </td>
                                                <td><input type="text" name="me_basis4"
                                                        class="border-0 form-control"> </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-1 col-2" style="max-width:30px;">8 </div>
                            <div class="col-lg-11  ">
                                <div> <b>Business Interests </b> (You must attach proof of amounts listed. If the proof
                                    is not
                                    available,
                                    estimate the amount and explain how you reached that amount. Add additional sheets
                                    if
                                    needed.)</div>


                                <div class="row">
                                    <div class="col-lg-1 col-3" style="max-width:60px;">[ <input type="checkbox"
                                            name="no_business_interests" value="Yes"> ] </div>
                                    <div class="col-lg-11 col-9">
                                        <div>I have no business interests.</div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-1 col-3" style="max-width:60px;">[ <input type="checkbox"
                                            name="business_interests" value="Yes"> ] </div>
                                    <div class="col-lg-11 col-9">
                                        <div> I have the following business interests.</div>
                                    </div>
                                </div>


                                <div class="table-responsive   py-2">
                                    <table class="table table-bordered border-dark">
                                        <tbody>
                                            <tr>
                                                <td class="small_text w-25">Business name</td>
                                                <td class="small_text" colspan="2"><input type="text"
                                                        name="gross_value1" class="border-0 w-100"></td>
                                            </tr>
                                            <tr>
                                                <td class="small_text w-25">Address & phone</td>
                                                <td class="small_text" colspan="2"><input type="text"
                                                        name="gross_value1" class="border-0 w-100"></td>
                                            </tr>
                                            <tr>
                                                <td class="small_text w-25">Nature of business</td>
                                                <td class="small_text" colspan="2"><input type="text"
                                                        name="gross_value1" class="border-0 w-100"></td>
                                            </tr>
                                            <tr>
                                                <td class="small_text w-25">
                                                    <div>Current value of the business</div>
                                                    <div class="d-flex w-100 mx-auto">
                                                        <span>$</span><input type="text" name="gross_value1"
                                                            class="border-0">
                                                    </div>
                                                </td>
                                                <td class="small_text w-25">
                                                    <div>Date of formation:</div>
                                                    <input type="text" name="gross_value1" class="border-0">

                                                </td>
                                                <td class="small_text" colspan="2">
                                                    <div>Percent owned by</div>
                                                    <input type="text" name="gross_value1"
                                                        class="border-0 border-bottom w-25">% Petitioner
                                                    <input type="text" name="gross_value1"
                                                        class="border-0 border-bottom w-25">% Respondent

                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div>[ <input type="checkbox" name="estimated_amounts8" value="Yes"> ] I have
                                    estimated the amounts in paragraph 8.</div>
                                <div class="table-responsive ps-lg-5 py-2">
                                    <table class="table table-bordered border-dark">
                                        <tbody>
                                            <tr>
                                                <td class="text-center w-25">Item estimated</td>
                                                <td class="text-center w-75">Basis for estimation</td>
                                            </tr>
                                            <tr>
                                                <td><input type="text" name="commission_wages_fees1"
                                                        class="border-0 form-control"> </td>
                                                <td><input type="text" name="commission_wages_fees1"
                                                        class="border-0 form-control"> </td>
                                            </tr>
                                            <tr>
                                                <td><input type="text" name="commission_wages_fees1"
                                                        class="border-0 form-control"> </td>
                                                <td><input type="text" name="commission_wages_fees1"
                                                        class="border-0 form-control"> </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        @include('layouts.footer15', ['page' => 8])
                    </div>
                </section>
                <section
                    class="section_area row page1 bg-white pt-5 p-lg-5 pe-2 pe-lg-5 p-lg-3 m-3 mt-4  pt-lg-5 pt-4"
                    id="ninth_section">
                    <div class="col-lg-10 mx-auto">

                        <div class="row">
                            <div class="col-lg-1 col-2" style="max-width:30px;">9 </div>
                            <div class="col-lg-11  ">
                                <div> <b>Financial Assets</b> ( <small>You must attach proof of amounts listed. If the
                                        proof is
                                        not available,
                                        estimate the amount and explain how you reached that amount. Add additional
                                        sheets if
                                        needed.</small>)</div>


                                <div class="row">
                                    <div class="col-lg-1 col-3" style="max-width:60px;">[ <input type="checkbox"
                                            name="no_financial_assets" value="Yes"> ] </div>
                                    <div class="col-lg-11 col-9">
                                        <div>I have no financial assets.</div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-1 col-3" style="max-width:60px;">[ <input type="checkbox"
                                            name="financial_assets" value="Yes"> ] </div>
                                    <div class="col-lg-11 col-9">
                                        <div> I have the following financial assets.</div>
                                    </div>
                                </div>


                                <div class="table-responsive py-2">
                                    <table class="table table-bordered border-dark">
                                        <tbody>
                                            <tr>
                                                <td class="text-center w-25">Asset</td>
                                                <td class="text-center">Name & address of institution</td>
                                                <td class="text-center">Names on account</td>
                                                <td class="text-center">Current balance</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="fw-bold">Bank or credit union</div>
                                                    <div class="small_text">Account number:</div>
                                                    <div><input type="text" name="fa_account_no1"
                                                            class="border-0 form-control border-bottom w-75"></div>
                                                    <div class="small_text">Date opened:</div>
                                                    <div><input type="text" name="fa_date_opened1"
                                                            class="border-0 form-control border-bottom w-75"></div>
                                                    <div class="small_text">Type:</div>
                                                    <div class="small_text">[ <input type="checkbox"
                                                            name="fa_checking1" value="Yes"> ] checking</div>
                                                    <div class="small_text">[ <input type="checkbox"
                                                            name="savings1" value="Yes"> ] savings</div>
                                                    <div class="small_text">[ <input type="checkbox"
                                                            name="other1" value="Yes"> ] other</div>
                                                    <div><input type="text" name="fa_other1"
                                                            class="border-0 form-control border-bottom w-75 mb-1">
                                                    </div>

                                                </td>
                                                <td>
                                                    <textarea type="text" name="fa_name_address1" class="border-0 form-control " rows="11"></textarea>
                                                </td>

                                                <td>
                                                    <textarea type="text" name="fa_account_name1" class="border-0 form-control " rows="11"></textarea>
                                                </td>

                                                <td class="small_text w-25">
                                                    <div class="d-flex w-100 mx-auto">
                                                        <span>$</span>
                                                        <textarea type="text" name="fa_current_balance1" class="border-0 form-control " rows="11"></textarea>

                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>

                                                    <div class="fw-bold">Bank or credit union</div>
                                                    <div class="small_text">Account number:</div>
                                                    <div><input type="text" name="fa_account_no2"
                                                            class="border-0 form-control border-bottom w-75"></div>
                                                    <div class="small_text">Date opened:</div>
                                                    <div><input type="text" name="fa_date_opened2"
                                                            class="border-0 form-control border-bottom w-75"></div>
                                                    <div class="small_text">Type:</div>
                                                    <div class="small_text">[ <input type="checkbox"
                                                            name="fa_checking2" value="Yes"> ] checking</div>
                                                    <div class="small_text">[ <input type="checkbox"
                                                            name="fa_savings2" value="Yes"> ] savings</div>
                                                    <div class="small_text">[ <input type="checkbox"
                                                            name="fa_other2" value="Yes"> ] other</div>
                                                    <div><input type="text" name="fa_other2"
                                                            class="border-0 form-control border-bottom w-75 mb-1">
                                                    </div>

                                                </td>
                                                <td>
                                                    <textarea type="text" name="fa_name_address2" class="border-0 form-control " rows="11"></textarea>
                                                </td>

                                                <td>
                                                    <textarea type="text" name="fa_account_name2" class="border-0 form-control " rows="11"></textarea>
                                                </td>
                                                <td class="small_text w-25">
                                                    <div class="d-flex w-100 mx-auto">
                                                        <span>$</span>
                                                        <textarea type="text" name="fa_current_balance2" class="border-0 form-control " rows="11"></textarea>

                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="fw-bold">Stocks, bonds, securities, money market
                                                        account</div>
                                                    <div class="small_text">Account number:</div>
                                                    <div><input type="text" name="fa_account_no3"
                                                            class="border-0 form-control border-bottom w-75"></div>
                                                    <div class="small_text">Date opened:</div>
                                                    <div><input type="text" name="fa_date_opened3"
                                                            class="border-0 form-control border-bottom w-75 mb-1">
                                                    </div>
                                                </td>
                                                <td>
                                                    <textarea type="text" name="fa_name_address3" class="border-0 form-control " rows="11"></textarea>
                                                </td>
                                                <td>
                                                    <textarea type="text" name="fa_account_name3" class="border-0 form-control " rows="11"></textarea>
                                                </td>
                                                <td class="small_text w-25">
                                                    <div class="d-flex w-100 mx-auto">
                                                        <span>$</span>
                                                        <textarea type="text" name="fa_current_balance3" class="border-0 form-control " rows="11"></textarea>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="fw-bold">Retirement account</div>
                                                    <div class="small_text">Account number:</div>
                                                    <div><input type="text" name="fa_account_no4"
                                                            class="border-0 form-control border-bottom w-75"></div>
                                                    <div class="small_text">Date opened:</div>
                                                    <div><input type="text" name="fa_date_opened4"
                                                            class="border-0 form-control border-bottom w-75"></div>
                                                    <div class="small_text">Plan name:</div>
                                                    <div><input type="text" name="fa_plan_name1"
                                                            class="border-0 form-control border-bottom w-75"></div>
                                                    <div class="small_text">Plan representative:</div>
                                                    <div><input type="text" name="fa_plan_representative1"
                                                            class="border-0 form-control border-bottom w-75 mb-1">
                                                    </div>
                                                </td>
                                                <td>
                                                    <textarea type="text" name="fa_name_address4" class="border-0 form-control " rows="11"></textarea>
                                                </td>
                                                <td>
                                                    <textarea type="text" name="fa_account_name4" class="border-0 form-control " rows="11"></textarea>
                                                </td>
                                                <td class="small_text w-25">
                                                    <div class="d-flex w-100 mx-auto">
                                                        <span>$</span>
                                                        <textarea type="text" name="fa_current_balance4" class="border-0 form-control " rows="11"></textarea>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        @include('layouts.footer15', ['page' => 9])
                    </div>
                </section>
                <section
                    class="section_area row page1 bg-white pt-5 p-lg-5 pe-2 pe-lg-5 p-lg-3 m-3 mt-4  pt-lg-5 pt-4"
                    id="tenth_section">
                    <div class="col-lg-10 mx-auto">
                        <div class="row pt-lg-5">
                            <div class="col-lg-1 col-2" style="max-width:30px;"> </div>
                            <div class="col-lg-11  pt-lg-5">
                                <div class="table-responsive py-2">
                                    <table class="table table-bordered border-dark">
                                        <tbody>
                                            <tr>
                                                <td class="text-center w-25">Asset</td>
                                                <td class="text-center">Name & address of institution</td>
                                                <td class="text-center">Names on account</td>
                                                <td class="text-center">Current balance</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="fw-bold">Profit sharing plan</div>
                                                    <div class="small_text">Account number:</div>
                                                    <div><input type="text" name="fa_account_no5"
                                                            class="border-0 form-control border-bottom w-75"></div>
                                                    <div class="small_text">Date opened:</div>
                                                    <div><input type="text" name="fa_date_opened5"
                                                            class="border-0 form-control border-bottom w-75"></div>
                                                    <div class="small_text">Plan name:</div>
                                                    <div><input type="text" name="fa_plan_name2"
                                                            class="border-0 form-control border-bottom w-75"></div>
                                                    <div class="small_text">Plan representative:</div>
                                                    <div><input type="text" name="fa_plan_representative2"
                                                            class="border-0 form-control border-bottom w-75 mb-1">
                                                    </div>

                                                </td>
                                                <td>
                                                    <textarea type="text" name="fa_name_address5" class="border-0 form-control " rows="11"></textarea>
                                                </td>
                                                <td>
                                                    <textarea type="text" name="fa_account_name5" class="border-0 form-control " rows="11"></textarea>
                                                </td>
                                                <td class="small_text w-25">
                                                    <div class="d-flex w-100 mx-auto">
                                                        <span>$</span>
                                                        <textarea type="text" name="fa_current_balance5" class="border-0 form-control " rows="11"></textarea>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="fw-bold">Annuity</div>
                                                    <div class="small_text">Account number:</div>
                                                    <div><input type="text" name="fa_account_no6"
                                                            class="border-0 form-control border-bottom w-75"></div>
                                                    <div class="small_text">Date opened:</div>
                                                    <div><input type="text" name="fa_date_opened6"
                                                            class="border-0 form-control border-bottom w-75"></div>
                                                    <div class="small_text">Plan name:</div>
                                                    <div><input type="text" name="fa_plan_name3"
                                                            class="border-0 form-control border-bottom w-75"></div>
                                                    <div class="small_text">Plan representative:</div>
                                                    <div><input type="text" name="fa_plan_representative3"
                                                            class="border-0 form-control border-bottom w-75 mb-1">
                                                    </div>
                                                </td>
                                                <td>
                                                    <textarea type="text" name="fa_name_address6" class="border-0 form-control " rows="11"></textarea>
                                                </td>
                                                <td>
                                                    <textarea type="text" name="fa_account_name6" class="border-0 form-control " rows="11"></textarea>
                                                </td>
                                                <td class="small_text w-25">
                                                    <div class="d-flex w-100 mx-auto">
                                                        <span>$</span>
                                                        <textarea type="text" name="fa_current_balance6" class="border-0 form-control " rows="11"></textarea>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="fw-bold">Life insurance</div>
                                                    <div class="small_text">Account number:</div>
                                                    <div><input type="text" name="fa_account_no7"
                                                            class="border-0 form-control border-bottom w-75"></div>
                                                    <div class="small_text">Date opened:</div>
                                                    <div><input type="text" name="fa_date_opened7"
                                                            class="border-0 form-control border-bottom w-75"></div>
                                                    <div class="small_text">Plan name:</div>
                                                    <div><input type="text" name="fa_plan_name4"
                                                            class="border-0 form-control border-bottom w-75"></div>
                                                    <div class="small_text">Plan representative:</div>
                                                    <div><input type="text" name="fa_plan_representative4"
                                                            class="border-0 form-control border-bottom w-75 mb-1">
                                                    </div>
                                                </td>
                                                <td>
                                                    <textarea type="text" name="fa_name_address7" class="border-0 form-control " rows="11"></textarea>
                                                </td>
                                                <td>
                                                    <textarea type="text" name="fa_account_name7" class="border-0 form-control " rows="11"></textarea>
                                                </td>
                                                <td class="small_text w-25">
                                                    <div class="d-flex w-100 mx-auto">
                                                        <span>$</span>
                                                        <textarea type="text" name="fa_current_balance7" class="border-0 form-control " rows="11"></textarea>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="fw-bold">Money owed to me</div>
                                                    <div class="small_text">Date of loan:</div>

                                                    <div><input type="text" name="fa_date_of_loan1"
                                                            class="border-0 form-control border-bottom w-75 mb-1">
                                                    </div>

                                                </td>
                                                <td>
                                                    <textarea type="text" name="fa_name_address8" class="border-0 form-control " rows="11"></textarea>
                                                </td>
                                                <td>
                                                    <textarea type="text" name="fa_account_name8" class="border-0 form-control " rows="11"></textarea>
                                                </td>
                                                <td class="small_text w-25">
                                                    <div class="d-flex w-100 mx-auto">
                                                        <span>$</span>
                                                        <textarea type="text" name="fa_current_balance8" class="border-0 form-control " rows="11"></textarea>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>

                                                    <div class="fw-bold">Cash</div>
                                                    <div><input type="text" name="fa_cash1"
                                                            class="border-0 form-control border-bottom w-75"></div>

                                                </td>
                                                <td>
                                                    <textarea type="text" name="fa_name_address9" class="border-0 form-control " rows="11"></textarea>
                                                </td>
                                                <td>
                                                    <textarea type="text" name="fa_account_name9" class="border-0 form-control " rows="11"></textarea>
                                                </td>
                                                <td class="small_text w-25">
                                                    <div class="d-flex w-100 mx-auto">
                                                        <span>$</span>
                                                        <textarea type="text" name="fa_current_balance9" class="border-0 form-control " rows="11"></textarea>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="fw-bold">Money transfer app</div>
                                                    <div class="small_text">(describe, e.g. Paypal, Venmo, Zelle,
                                                        etc.)</div>
                                                </td>
                                                <td>
                                                    <textarea type="text" name="fa_name_address10" class="border-0 form-control " rows="11"></textarea>
                                                </td>
                                                <td>
                                                    <textarea type="text" name="fa_account_name10" class="border-0 form-control " rows="11"></textarea>
                                                </td>
                                                <td class="small_text w-25">
                                                    <div class="d-flex w-100 mx-auto">
                                                        <span>$</span>
                                                        <textarea type="text" name="fa_current_balance10" class="border-0 form-control " rows="11"></textarea>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        @include('layouts.footer15', ['page' => 10])
                    </div>
                </section>
                <section
                    class="section_area row page1 bg-white pt-5 p-lg-5 pe-2 pe-lg-5 p-lg-3 m-3 mt-4  pt-lg-5 pt-4"
                    id="eleventh_section">
                    <div class="col-lg-10 mx-auto">
                        <div class="row pt-lg-5">
                            <div class="col-lg-1 col-2" style="max-width:30px;"> </div>
                            <div class="col-lg-11   pt-lg-5">
                                <div class="table-responsive py-2">
                                    <table class="table table-bordered border-dark">
                                        <tbody>
                                            <tr>
                                                <td class="text-center w-25">Asset</td>
                                                <td class="text-center">Name & address of institution</td>
                                                <td class="text-center">Names on account</td>
                                                <td class="text-center">Current balance</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div><b>Other</b> (describe)</div>
                                                    <div><input type="text" name="fa_other1"
                                                            class="border-0 form-control border-bottom w-75"></div>
                                                </td>
                                                <td>
                                                    <textarea type="text" name="fa_name_address11" class="border-0 form-control " rows="11"></textarea>
                                                </td>
                                                <td>
                                                    <textarea type="text" name="fa_account_name11" class="border-0 form-control " rows="11"></textarea>
                                                </td>
                                                <td class="small_text w-25">
                                                    <div class="d-flex w-100 mx-auto">
                                                        <span>$</span>
                                                        <textarea type="text" name="fa_current_balance11" class="border-0 form-control " rows="11"></textarea>

                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div>[ <input type="checkbox" name="estimated_amounts9" value="No"> ] I have
                                    estimated the amounts in paragraph 9.</div>
                                <div class="ps-lg-5">
                                    <div class="table-responsive">
                                        <table class="table table-bordered border-dark">
                                            <tbody>
                                                <tr>
                                                    <td class="w-25 text-center">Item estimated</td>
                                                    <td class="w-75 text-center">Basis for estimation</td>
                                                </tr>
                                                <tr>
                                                    <td><input type="text" name="fa_item1"
                                                            class="border-0 form-control"> </td>
                                                    <td><input type="text" name="fa_basis1"
                                                            class="border-0 form-control"> </td>
                                                </tr>
                                                <tr>
                                                    <td><input type="text" name="fa_item2"
                                                            class="border-0 form-control"> </td>
                                                    <td><input type="text" name="fa_basis2"
                                                            class="border-0 form-control"> </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-1 col-2" style="max-width:30px;">10. </div>
                                <div class="col-lg-11 ">
                                    <div> <b>Real Estate</b> ( <small>You must attach proof of amounts listed. If the
                                            proof is not available, estimate the amount and explain how you reached that
                                            amount. Add additional sheets if needed.</small>)</div>

                                    <div>[ <input type="checkbox" name="real_estate" value="No"> ] I have no
                                        real estate.</div>
                                    <div>[ <input type="checkbox" name="real_estate" value="Yes"> ] I have the
                                        following real estate.</div>

                                    <div class="fw-bold">Home</div>
                                    <div class="row pt-3">

                                        <div>
                                            <input type="text" name="re_address1"
                                                class="border-0 form-control w-100 border-bottom">
                                            <div class="small_text">Address</div>
                                        </div>
                                        <div class="col-lg-3">
                                            <input type="text" name="re_date_acquired1"
                                                class="border-0 form-control w-100 border-bottom">
                                            <div class="small_text">Date acquired</div>
                                        </div>
                                        <div class="col-lg-4">
                                            <input type="text" name="re_name"
                                                class="border-0 form-control w-100 border-bottom">
                                            <div class="small_text">Name(s) on title</div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="d-flex w-100 mx-auto">
                                                <small>$</small><input type="text" name="re_original_cost1"
                                                    class="border-0  border-bottom w-100">
                                            </div>
                                            <div class="small_text">Original cost</div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="d-flex w-100 mx-auto">
                                                <small>$</small><input type="text" name="re_current_value"
                                                    class="border-0  border-bottom w-100">
                                            </div>
                                            <div class="small_text">Current value</div>
                                        </div>
                                    </div>

                                    <div class="row pt-2">
                                        <div class="col-lg-7">
                                            <input type="text" name="re_first_mortgage"
                                                class="border-0 form-control w-100 border-bottom">
                                            <div class="small_text">First mortgage or lien holder (name & address)
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="d-flex w-100 mx-auto">
                                                <small>$</small><input type="text" name="re_amountowed"
                                                    class="border-0  border-bottom w-100">
                                            </div>
                                            <div class="small_text">Amount owed</div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="d-flex w-100 mx-auto">
                                                <small>$</small><input type="text" name="re_monthly_payments"
                                                    class="border-0  border-bottom w-100">
                                            </div>
                                            <div class="small_text">Monthly payments</div>
                                        </div>
                                    </div>
                                    <div class="row pt-2">
                                        <div class="col-lg-7">
                                            <input type="text" name="re_second_mortgage"
                                                class="border-0 form-control w-100 border-bottom">
                                            <div class="small_text">Second mortgage or lien holder (name & address)
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="d-flex w-100 mx-auto">
                                                <small>$</small><input type="text" name="re_amount_owed"
                                                    class="border-0  border-bottom w-100">
                                            </div>
                                            <div class="small_text text-center">Amount owed</div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="d-flex w-100 mx-auto">
                                                <small>$</small><input type="text" name="re_monthly_payments"
                                                    class="border-0  border-bottom w-100 ">
                                            </div>
                                            <div class="small_text text-center">Monthly payments</div>
                                        </div>
                                    </div>

                                    <div class="py-2 fw-bold">Other real estate</div>
                                    <div class="row pt-3">
                                        <div>
                                            <input type="text" name="ore_other_reak_estate"
                                                class="border-0 form-control w-100 border-bottom">
                                            <div class="small_text">Address</div>
                                        </div>
                                        <div class="col-lg-3">
                                            <input type="text" name="ore_date_acquired"
                                                class="border-0 form-control w-100 border-bottom">
                                            <div class="small_text">Date acquired</div>
                                        </div>
                                        <div class="col-lg-4">
                                            <input type="text" name="ore_name1"
                                                class="border-0 form-control w-100 border-bottom">
                                            <div class="small_text">Name(s) on title</div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="d-flex w-100 mx-auto">
                                                <small>$</small><input type="text" name="ore_original_cost1"
                                                    class="border-0  border-bottom w-100">
                                            </div>
                                            <div class="small_text">Original cost</div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="d-flex w-100 mx-auto">
                                                <small>$</small><input type="text" name="ore_original_cost2"
                                                    class="border-0  border-bottom w-100">
                                            </div>
                                            <div class="small_text">Original cost</div>
                                        </div>
                                    </div>

                                    <div class="row pt-2">
                                        <div class="col-lg-7">
                                            <input type="text" name="ore_first_mortgage1"
                                                class="border-0 form-control w-100 border-bottom">
                                            <div class="small_text">First mortgage or lien holder (name & address)
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="d-flex w-100 mx-auto">
                                                <small>$</small><input type="text" name="ore_amount_owed1"
                                                    class="border-0  border-bottom w-100">
                                            </div>
                                            <div class="small_text">Amount owed</div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="d-flex w-100 mx-auto">
                                                <small>$</small>
                                                <input type="text" name="ore_monthly_payments1"
                                                    class="border-0 border-bottom w-100">
                                            </div>
                                            <div class="small_text">Monthly payments</div>
                                        </div>
                                    </div>
                                    <div class="row pt-2">
                                        <div class="col-lg-7">
                                            <input type="text" name="ore_second_morgage"
                                                class="border-0 form-control w-100 border-bottom">
                                            <div class="small_text">Second mortgage or lien holder (name & address)
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="d-flex w-100 mx-auto">
                                                <small>$</small><input type="text" name="ore_amount_owed2"
                                                    class="border-0  border-bottom w-100">
                                            </div>
                                            <div class="small_text text-center">Amount owed</div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="d-flex w-100 mx-auto">
                                                <small>$</small><input type="text" name="ore_monthly_payments2"
                                                    class="border-0  border-bottom w-100 ">
                                            </div>
                                            <div class="small_text text-center">Monthly payments</div>
                                        </div>
                                    </div>
                                    <div>[ <input type="checkbox" name="estimated_amount10" value="Yes"> ] I
                                        have estimated the amounts in paragraph 10.</div>
                                </div>
                            </div>

                            @include('layouts.footer15', ['page' => 11])
                        </div>
                </section>

                <section
                    class="section_area row page1 bg-white pt-5 p-lg-5 pe-2 pe-lg-5 p-lg-3 m-3 mt-4  pt-lg-5 pt-4"
                    id="twelfth_section">
                    <div class="col-lg-10 mx-auto">
                        <div class="row pt-lg-5">
                            <div class="col-lg-1 col-2" style="max-width:30px;"> </div>
                            <div class="col-lg-11   pt-lg-5">
                                <div class="table-responsive ps-lg-5 py-2">
                                    <table class="table table-bordered border-dark">
                                        <tbody>
                                            <tr>
                                                <td class="text-center w-25">Item estimated</td>
                                                <td class="text-center w-75">Basis for estimation</td>
                                            </tr>
                                            <tr>
                                                <td><input type="text" name="ore_item1"
                                                        class="border-0 form-control"> </td>
                                                <td><input type="text" name="ore_basis1"
                                                        class="border-0 form-control"> </td>
                                            </tr>
                                            <tr>
                                                <td><input type="text" name="ore_item1"
                                                        class="border-0 form-control"> </td>
                                                <td><input type="text" name="ore_basis1"
                                                        class="border-0 form-control"> </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="row pt-lg-5">
                            <div class="col-lg-1 col-2" style="max-width:30px;"> 11 </div>
                            <div class="col-lg-11 ">
                                <div><b>Personal Property </b>( <small>Such as vehicles, boats, trailers, major
                                        equipment, furniture, jewelry, and collectibles. You must attach proof of
                                        amounts listed. If the proof is not available, estimate the amount and explain
                                        how you reached that amount. Add additional sheets if needed.
                                    </small> )</div>

                                <div>[ <input type="checkbox" name="personal_property" value="No"> ] I have no
                                    personal property.</div>
                                <div>[ <input type="checkbox" name="personal_property" value="Yes"> ] I have
                                    the following personal property.</div>

                                <div class="table-responsive ps-lg-5 py-2">
                                    <table class="table table-bordered border-dark">
                                        <tbody>
                                            <tr>
                                                <td class="small_text text-center w-25">Property description (if
                                                    automobile, include year, make, and model)</td>
                                                <td class="small_text text-center my-auto text-aligns-center">Debt
                                                    owed to (name and address)</td>
                                                <td class="small_text text-center">Names on title (if applicable)</td>
                                                <td class="small_text text-center">Current value</td>
                                                <td class="small_text text-center">Amount owed</td>
                                                <td class="small_text text-center">Minimum monthly payments</td>
                                            </tr>
                                            <tr>
                                                <td>Vehicle</td>
                                                <td><input type="text" name="pp_debt_owed1"
                                                        class="border-0 form-control"> </td>
                                                <td><input type="text" name="pp_name1"
                                                        class="border-0 form-control"> </td>
                                                <td>
                                                    <div class="d-flex w-100 mx-auto">
                                                        <small>$</small><input type="text"
                                                            name="pp_current_value1" class="border-0 w-100 ">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex w-100 mx-auto">
                                                        <small>$</small><input type="text" name="pp_amount_owed1"
                                                            class="border-0 w-100 ">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex w-100 mx-auto">
                                                        <small>$</small><input type="text" name="pp_mmp1"
                                                            class="border-0 w-100 ">
                                                    </div>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>Vehicle</td>
                                                <td><input type="text" name="pp_debt_owed2"
                                                        class="border-0 form-control"> </td>
                                                <td><input type="text" name="pp_name2"
                                                        class="border-0 form-control"> </td>
                                                <td>
                                                    <div class="d-flex w-100 mx-auto">
                                                        <small>$</small><input type="text"
                                                            name="pp_current_value2" class="border-0 w-100 ">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex w-100 mx-auto">
                                                        <small>$</small><input type="text" name="pp_amount_owed2"
                                                            class="border-0 w-100 ">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex w-100 mx-auto">
                                                        <small>$</small><input type="text" name="pp_mmp2"
                                                            class="border-0 w-100 ">
                                                    </div>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td><input type="text" name="pp_property_description3"
                                                        class="border-0 form-control"> </td>
                                                <td><input type="text" name="pp_debt_owed3"
                                                        class="border-0 form-control"> </td>
                                                <td><input type="text" name="commission_wages_fees3"
                                                        class="border-0 form-control"> </td>
                                                <td>
                                                    <div class="d-flex w-100 mx-auto">
                                                        <small>$</small><input type="text"
                                                            name="pp_current_value3" class="border-0 w-100 ">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex w-100 mx-auto">
                                                        <small>$</small><input type="text" name="pp_amount_owed3"
                                                            class="border-0 w-100 ">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex w-100 mx-auto">
                                                        <small>$</small><input type="text" name="pp_mmp3"
                                                            class="border-0 w-100 ">
                                                    </div>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td><input type="text" name="pp_property_description4"
                                                        class="border-0 form-control"> </td>
                                                <td><input type="text" name="pp_debt_owed4"
                                                        class="border-0 form-control"> </td>
                                                <td><input type="text" name="commission_wages_fees4"
                                                        class="border-0 form-control"> </td>
                                                <td>
                                                    <div class="d-flex w-100 mx-auto">
                                                        <small>$</small><input type="text"
                                                            name="pp_current_value4" class="border-0 w-100 ">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex w-100 mx-auto">
                                                        <small>$</small><input type="text" name="pp_amount_owed4"
                                                            class="border-0 w-100 ">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex w-100 mx-auto">
                                                        <small>$</small><input type="text" name="pp_mmp4"
                                                            class="border-0 w-100 ">
                                                    </div>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td><input type="text" name="pp_property_description5"
                                                        class="border-0 form-control"> </td>
                                                <td><input type="text" name="pp_debt_owed5"
                                                        class="border-0 form-control"> </td>
                                                <td><input type="text" name="commission_wages_fees5"
                                                        class="border-0 form-control"> </td>
                                                <td>
                                                    <div class="d-flex w-100 mx-auto">
                                                        <small>$</small><input type="text"
                                                            name="pp_current_value5" class="border-0 w-100 ">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex w-100 mx-auto">
                                                        <small>$</small><input type="text" name="pp_amount_owed5"
                                                            class="border-0 w-100 ">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex w-100 mx-auto">
                                                        <small>$</small><input type="text" name="pp_mmp5"
                                                            class="border-0 w-100 ">
                                                    </div>
                                                </td>

                                            </tr>
                                        </tbody>
                                    </table>
                                    <div>[ <input type="checkbox" name="estimated_amounts11" value="Yes"> ] I
                                        have estimated the amounts in paragraph 11.</div>
                                    <div class="table-responsive ps-lg-5 py-2">
                                        <table class="table table-bordered border-dark">
                                            <tbody>
                                                <tr>
                                                    <td class="text-center w-25">Item estimated</td>
                                                    <td class="text-center w-75">Basis for estimation</td>
                                                </tr>
                                                <tr>
                                                    <td><input type="text" name="pp_item1"
                                                            class="border-0 form-control"> </td>
                                                    <td><input type="text" name="pp_basis1"
                                                            class="border-0 form-control"> </td>
                                                </tr>
                                                <tr>
                                                    <td><input type="text" name="pp_item2"
                                                            class="border-0 form-control"> </td>
                                                    <td><input type="text" name="pp_basis2"
                                                            class="border-0 form-control"> </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-1 col-2" style="max-width:30px;">12</div>
                            <div class="col-lg-11  ">
                                <div><b>Debts Owed </b>( <small>Do not include amounts you owe on property reported in
                                        the Real Estate or Personal Property sections. You must attach proof of amounts
                                        listed. You must also
                                        attach 3 months of credit/debit account statements. If the proof is not
                                        available, estimate the amount and explain how you reached that amount. Add
                                        additional sheets if needed. </small> )</div>
                                <div>[ <input type="checkbox" name="debts" value="not_debts"> ] I do not owe any
                                    debts.</div>
                                <div>[ <input type="checkbox" name="debts" value="debts"> ] I owe the following
                                    debts.</div>
                                <div class="table-responsive ps-lg-5 py-2">
                                    <table class="table table-bordered border-dark">
                                        <tbody>
                                            <tr>
                                                <td class="small_text text-center w-25">Type of debt (such as credit
                                                    card, cash loan, or installment payment and account number, if any)
                                                </td>
                                                <td class="small_text text-center">Debt owed to (name and address and
                                                    phone number)</td>
                                                <td class="small_text text-center">Names on debt</td>
                                                <td class="small_text text-center">Amount owed</td>
                                                <td class="small_text text-center">Minimum monthly payments</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>

                        @include('layouts.footer15', ['page' => 12])
                    </div>
                </section>
                <section
                    class="section_area row page1 bg-white pt-5 p-lg-5 pe-2 pe-lg-5 p-lg-3 m-3 mt-4  pt-lg-5 pt-4"
                    id="thirteenth_section">
                    <div class="col-lg-10 mx-auto">
                        <div class="row pt-lg-5">
                            <div class="col-lg-1 col-2" style="max-width:30px;"> </div>
                            <div class="col-lg-11  pt-lg-5">
                                <div class="table-responsive ps-lg-5 py-2">
                                    <table class="table table-bordered border-dark">
                                        <tbody>
                                            <tr>
                                                <td class="small_text text-center w-25">Type of debt (such as credit
                                                    card,
                                                    cash loan, or installment payment and account number, if any)</td>
                                                <td class="small_text text-center">Debt owed to (name and address and
                                                    phone
                                                    number)</td>
                                                <td class="small_text text-center">Names on debt</td>
                                                <td class="small_text text-center">Amount owed</td>
                                                <td class="small_text text-center">Minimum monthly payments</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div>Type of debt:</div>
                                                    <div><input type="text" name="type_of_debit1"
                                                            class="border-0 form-control w-75"> </div>
                                                    <div>Account number:</div>
                                                    <div><input type="text" name="account_number1"
                                                            class="border-0 form-control w-75"> </div>
                                                </td>
                                                <td>
                                                    <textarea type="text" name="debt_owed_to1" class="border-0 form-control " rows="5"></textarea>
                                                </td>

                                                <td>
                                                    <textarea type="text" name="names_on_debt1" class="border-0 form-control " rows="5"></textarea>
                                                </td>

                                                <td>
                                                    <div class="d-flex w-100 mx-auto">
                                                        <small>$</small>
                                                        <textarea type="text" name="amount_owed1" class="border-0 form-control " rows="5"></textarea>

                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex w-100 mx-auto">
                                                        <small>$</small>
                                                        <textarea type="text" name="minimum_monthly_payments1" class="border-0 form-control " rows="5"></textarea>

                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div>Type of debt:</div>
                                                    <div><input type="text" name="type_of_debit2"
                                                            class="border-0 form-control w-75"> </div>
                                                    <div>Account number:</div>
                                                    <div><input type="text" name="account_number2"
                                                            class="border-0 form-control w-75"> </div>
                                                </td>
                                                <td>
                                                    <textarea type="text" name="debt_owed_to2" class="border-0 form-control " rows="5"></textarea>
                                                </td>

                                                <td>
                                                    <textarea type="text" name="names_on_debt2" class="border-0 form-control " rows="5"></textarea>
                                                </td>

                                                <td>
                                                    <div class="d-flex w-100 mx-auto">
                                                        <small>$</small>
                                                        <textarea type="text" name="amount_owed2" class="border-0 form-control " rows="5"></textarea>

                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex w-100 mx-auto">
                                                        <small>$</small>
                                                        <textarea type="text" name="minimum_monthly_payments2" class="border-0 form-control " rows="5"></textarea>

                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div>Type of debt:</div>
                                                    <div><input type="text" name="type_of_debit3"
                                                            class="border-0 form-control w-75"> </div>
                                                    <div>Account number:</div>
                                                    <div><input type="text" name="account_number3"
                                                            class="border-0 form-control w-75"> </div>
                                                </td>
                                                <td>
                                                    <textarea type="text" name="debt_owed_to3" class="border-0 form-control " rows="5"></textarea>
                                                </td>

                                                <td>
                                                    <textarea type="text" name="names_on_debt3" class="border-0 form-control " rows="5"></textarea>
                                                </td>

                                                <td>
                                                    <div class="d-flex w-100 mx-auto">
                                                        <small>$</small>
                                                        <textarea type="text" name="amount_owed3" class="border-0 form-control " rows="5"></textarea>

                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex w-100 mx-auto">
                                                        <small>$</small>
                                                        <textarea type="text" name="minimum_monthly_payments3" class="border-0 form-control " rows="5"></textarea>

                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div>Type of debt:</div>
                                                    <div><input type="text" name="type_of_debit4"
                                                            class="border-0 form-control w-75"> </div>
                                                    <div>Account number:</div>
                                                    <div><input type="text" name="account_number4"
                                                            class="border-0 form-control w-75"> </div>
                                                </td>

                                                <td>
                                                    <textarea type="text" name="debt_owed_to6" class="border-0 form-control " rows="5"></textarea>
                                                </td>

                                                <td>
                                                    <textarea type="text" name="names_on_debt4" class="border-0 form-control " rows="5"></textarea>
                                                </td>

                                                <td>
                                                    <div class="d-flex w-100 mx-auto">
                                                        <small>$</small>
                                                        <textarea type="text" name="amount_owed4" class="border-0 form-control " rows="5"></textarea>

                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex w-100 mx-auto">
                                                        <small>$</small>
                                                        <textarea type="text" name="minimum_monthly_payments4" class="border-0 form-control " rows="5"></textarea>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div>Type of debt:</div>
                                                    <div><input type="text" name="type_of_debit5"
                                                            class="border-0 form-control w-75"> </div>
                                                    <div>Account number:</div>
                                                    <div><input type="text" name="account_number5"
                                                            class="border-0 form-control w-75"> </div>
                                                </td>
                                                <td>
                                                    <textarea type="text" name="debt_owed_to5" class="border-0 form-control " rows="5"></textarea>
                                                </td>
                                                <td>
                                                    <textarea type="text" name="names_on_debt5" class="border-0 form-control " rows="5"></textarea>
                                                </td>

                                                <td>
                                                    <div class="d-flex w-100 mx-auto">
                                                        <small>$</small>
                                                        <textarea type="text" name="amount_owed5" class="border-0 form-control " rows="5"></textarea>

                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex w-100 mx-auto">
                                                        <small>$</small>
                                                        <textarea type="text" name="minimum_monthly_payments5" class="border-0 form-control " rows="5"></textarea>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div>Type of debt:</div>
                                                    <div><input type="text" name="type_of_debit6"
                                                            class="border-0 form-control w-75"> </div>
                                                    <div>Account number:</div>
                                                    <div><input type="text" name="account_number6"
                                                            class="border-0 form-control w-75"> </div>
                                                </td>
                                                <td>
                                                    <textarea type="text" name="debt_owed_to6" class="border-0 form-control " rows="5"></textarea>
                                                </td>

                                                <td>
                                                    <textarea type="text" name="names_on_debt6" class="border-0 form-control " rows="5"></textarea>
                                                </td>

                                                <td>
                                                    <div class="d-flex w-100 mx-auto">
                                                        <small>$</small>
                                                        <textarea type="text" name="amount_owed6" class="border-0 form-control " rows="5"></textarea>

                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex w-100 mx-auto">
                                                        <small>$</small>
                                                        <textarea type="text" name="minimum_monthly_payments6" class="border-0 form-control " rows="5"></textarea>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div>[ <input type="checkbox" name="estimated_amounts12"> ] I have estimated the
                                        amounts in paragraph 12.</div>

                                    <div class="table-responsive ps-lg-5 py-2">
                                        <table class="table table-bordered border-dark">
                                            <tbody>
                                                <tr>
                                                    <td class="text-center w-25">Item estimated</td>
                                                    <td class="text-center w-75">Basis for estimation</td>
                                                </tr>
                                                <tr>
                                                    <td><input type="text" name="do_item1"
                                                            class="border-0 form-control"> </td>
                                                    <td><input type="text" name="do_basis1"
                                                            class="border-0 form-control"> </td>
                                                </tr>
                                                <tr>
                                                    <td><input type="text" name="do_item2"
                                                            class="border-0 form-control"> </td>
                                                    <td><input type="text" name="do_basis2"
                                                            class="border-0 form-control"> </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @include('layouts.footer15', ['page' => 13])
                    </div>
                </section>
                <section
                    class="section_area row page1 bg-white pt-5 p-lg-5 pe-2 pe-lg-5 p-lg-3 m-3 mt-4  pt-lg-5 pt-4"
                    id="fourteenth_section">
                    <div class="col-lg-10 mx-auto">
                        <div class="row pt-lg-5">
                            <div class="col-lg-1 col-2" style="max-width:30px;"> </div>
                            <div class="col-lg-11  pt-lg-5">
                                <div class="table-responsive ps-lg-5 py-2">
                                    <div class="table-responsive ps-lg-5 py-2">
                                        <table class="table table-bordered border-dark">
                                            <tbody>
                                                <tr>
                                                    <td class="text-center w-25">Item estimated</td>
                                                    <td class="text-center w-75">Basis for estimation</td>
                                                </tr>
                                                <tr>
                                                    <td><input type="text" name="commission_wages_fees1"
                                                            class="border-0 form-control"> </td>
                                                    <td><input type="text" name="commission_wages_fees1"
                                                            class="border-0 form-control"> </td>
                                                </tr>
                                                <tr>
                                                    <td><input type="text" name="commission_wages_fees1"
                                                            class="border-0 form-control"> </td>
                                                    <td><input type="text" name="commission_wages_fees1"
                                                            class="border-0 form-control"> </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="fw-bold">Warning</div>
                        <p>If you do not fully disclose all assets and income in this document and provide
                            attachments you could be subject to sanctions under Utah Rule of Civil Procedure 37.</p>
                        <p>Sanctions can include an award of non-disclosed assets to the other party, attorney’s fees or
                            other sanctions</p>
                        <textarea name="warning" id="" class="form-control" rows="3"></textarea>
                        <div class="fw-bold py-lg-3">Petitioner or Respondent</div>
                        <small>I declare under criminal penalty under the law of Utah that everything stated in this
                            document is true.</small>
                        <div class="small_text">Signed at <input type="text" name="signed_at"
                                class="border-0 w-75 border-bottom"> (city, and state or country).</div>
                        <div class="w-100 mt-3">
                            <div class="row">
                                <div class="col-lg-6 col-sm-6">
                                    <div class="col-lg-12 ">
                                        <div class="">
                                            <input type="text" name="date1"
                                                class="form-control  border-none w-100 border-0 border-bottom footer_field shadow-none">
                                            <label for="">Date</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="col-lg-12 d-flex d_sm_block">
                                        <div class="">Signature of </div>
                                        <input type="text" name="signature1"
                                            class="ms-lg-3 w-75 border-none  border-0 border-bottom footer_field shadow-none responsive_input">
                                    </div>
                                    <div class="col-lg-12 d-flex d_sm_block">
                                        <div class="">Printed Name </div>
                                        <input type="text" name="print_name1"
                                            class="ms-lg-1 w-75 border-none  border-0 border-bottom footer_field shadow-none responsive_input">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="py-3 fw-bold">Attorney or Licensed Paralegal Practitioner of record (if
                            applicable)</div>
                        <div class="w-100 mt-3 mb-5">
                            <div class="row">
                                <div class="col-lg-6 col-sm-6">
                                    <div class="col-lg-12 ">
                                        <div>
                                            <input type="text" name="date2"
                                                class="form-control  border-none w-100 border-0 border-bottom footer_field shadow-none">
                                            <label for="">Date</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-sm-6">
                                    <div class="col-lg-12 d-flex d_sm_block">
                                        <div>Signature of</div>
                                        <input type="text" name="signature2"
                                            class="ms-lg-3 w-75 border-none border-0 border-bottom footer_field shadow-none responsive_input">
                                    </div>
                                    <div class="col-lg-12 d-flex d_sm_block">
                                        <div>Printed Name </div>
                                        <input type="text" name="print_name2"
                                            class="ms-lg-1 w-75 border-none border-0 border-bottom footer_field shadow-none responsive_input">
                                    </div>
                                </div>
                            </div>
                        </div>
                        @include('layouts.footer15', ['page' => 14])
                        @include('layouts.pagination', ['page' => 20])
                    </div>
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
        <select name="" id="" class="sectionSelect form-select  mx-auto ">
            <option value="" disabled selected>Select a section</option>
            <option value="#first_section">First Section</option>
            <option value="#second_section">Second Section</option>
            <option value="#third_section">Third Section</option>
            <option value="#fourth_section">Fourth Section</option>
            <option value="#fifth_section">Fifth Section</option>
            <option value="#sixth_section">Sixth Section</option>
            <option value="#seventh_section">Seventh Section</option>
            <option value="#eighth_section">Eighth Section</option>
            <option value="#ninth_section">Ninth Section</option>
            <option value="#tenth_section">Tenth Section</option>
            <option value="#eleventh_section">Eleventh Section</option>
            <option value="#twelfth_section">Twelfth Section</option>
            <option value="#thirteenth_section">Thirteenth Section</option>
            <option value="#fourteenth_section">Fourteenth Section</option>
        </select>
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
