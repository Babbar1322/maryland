{{-- 902c10-21  FL long form.pdf --}}
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
            /* border-bottom: 1px solid black !important; */
            box-shadow: none !important;
        }

        input,
        table {
            background-color: transparent !important;
        }

        input[type='radio'] {
            accent-color: #8c8a8a !important;
        }

        input[type='checkbox'] {
            accent-color: #8c8a8a !important;
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
            background-color: black;
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
        <div class="container bg_color p-lg-3 p-1">
            <form action="{{ route('form16.submit') }}" method="post">
                @csrf
                <section class="section_area" id="section_first">
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show">{{ session('success') }} <button
                                type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-lg-10 mx-auto">
                            <section class="px-lg-5 px-2 py-5">
                                <div class="fw-bold text-center">
                                    <h2 class="fw-bold">INSTRUCTIONS FOR FLORIDA FAMILY LAW RULES OF PROCEDURE</h2>
                                    <h2 class="fw-bold">FORM 12.902(b)</h2>
                                    <h2 class="fw-bold">FAMILY LAW FINANCIAL AFFIDAVIT (SHORT FORM)</h2>
                                    <h2 class="fw-bold">(10/21)</h2>

                                    <h3 class="mt-3 fw-bold">When should this form be used?</h3>
                                </div>

                                <div class="mt-3">
                                    This form should be used when you are involved in a family law case which requires a
                                    <a class="text-dark fw-bold" href="#" class="decoration-none">financial
                                        affidavit</a>
                                    <span class="fw-bold">and your individual gross income is UNDER $50,000 per
                                        year</span>
                                    unless:
                                    <div class="p-4">
                                        <p class="m-0 p-0">(1) You are filing a simplified dissolution of marriage under
                                            rule
                                            12.105 and both parties have waived
                                            the filing of a financial affidavit;</p>
                                        <p class="m-0 p-0">(2) You have no minor children, no support issues, and have
                                            filed a
                                            written settlement agreement
                                            disposing of all financial issues; or</p>
                                        <p class="m-0 p-0">(3) The court lacks jurisdiction to determine any financial
                                            issues.
                                        </p>
                                    </div>
                                    This form should be typed or printed in black ink. You should <a href="#"
                                        class="fw-bold text-dark">file</a> this document with the <a href="#"
                                        class="fw-bold text-dark">clerk of the
                                        circuit court</a> in the county where the <a href="#"
                                        class="fw-bold text-dark">petition</a> was filed and keep a copy for your
                                    records.
                                </div>
                                <div class="fw-bold text-center h3 mt-3">What should I do next?</div>

                                <div class="mt-3">A copy of this form must be filed with the court and served on the
                                    other
                                    party or his or her attorney in
                                    your case within 45 days of being served with the petition, if it is not served on
                                    him or
                                    her with your initial
                                    papers. The copy you are serving to the other party must be either mailed, e-mailed,
                                    or
                                    hand-delivered to
                                    the opposing party or his or her attorney on the same day indicated on the
                                    certificate of
                                    service. If it is
                                    mailed, it must be postmarked on the date indicated in the certificate of service.
                                    <span class="fw-bold">Service</span> must be in
                                    accordance with Florida Rule of General Practice and Judicial Administration 2.516.
                                </div>
                                <div class="fw-bold text-center h3 mt-3">Where can I look for more information?
                                </div>

                                <div class="mt-3">
                                    <span class="fw-bold">Before proceeding, you should read “General Information for
                                        Self-Represented
                                        Litigants” found at the
                                        beginning of these forms.</span> The words that are in <a href="#"
                                        class="text-dark fw-bold">“bold underline”</a> in these
                                    instructions are defined there.
                                    For further information, see Florida Family Law Rule of Procedure 12.285.
                                </div>
                                <div class="fw-bold text-center h3 mt-3">IMPORTANT INFORMATION REGARDING E-FILING</div>

                                <div class="mt-3">The Florida Rules of General Practice and Judicial Administration  now
                                    require that all petitions, pleadings, and documents be filed electronically except in certain circumstances. <span class="fw-bold">Self-represented litigants may file petitions or other pleadings or documents electronically; however, they are not
                                        required to do so.</span> If you choose to file your pleadings or other documents electronically, you must do so in  accordance with  Florida Rule of General Practice and Judicial Administration 2.525, and you must
                                    follow the  procedures of  the judicial circuit in which you file. The rules and procedures should be carefully read  and followed.</div>
                                @include('layouts.footer12', ['page' => 1])
                            </section>
                        </div>
                    </div>
                </section>
                <section class="section_area py-5" id="section_two">
                    <div class="row">
                        <div class="col-lg-10 mx-auto">
                            <div class="row px-lg-5 px-2 py-2 pt-0">


                                <div class="fw-bold text-center h3 mt-3">IMPORTANT INFORMATION REGARDING E-SERVICE
                                    ELECTION</div>

                                <div class="mt-3">After the initial service of process of the petition or
                                    supplemental
                                    petition by the Sheriff or certified
                                    process server, the Florida Rules of General Practice and Judicial Administration
                                    now require that all
                                    documents required or permitted to be served on the other party must be served by
                                    electronic mail (e-
                                    mail) except in certain circumstances. You must strictly comply with the format
                                    requirements set forth
                                    in the Florida Rules of General Practice and Judicial Administration. If you elect
                                    to participate in
                                    electronic service, which means serving or receiving pleadings by electronic mail
                                    (e-mail), or through the
                                    Florida Courts E-Filing Portal, you must review Florida Rule of General Practice and
                                    Judicial
                                    Administration 2.516. You may find this rule at www.flcourts.org through the link to
                                    the Rules of General
                                    Practice and Judicial Administration provided under either Family Law Forms: Getting
                                    Started, or Rules
                                    of Court in the A-Z Topical Index.</div>
                                <div class="mt-3">
                                    <span class="fw-bold h5"> SELF-REPRESENTED LITIGANTS MAY SERVE DOCUMENTS BY E-MAIL;
                                        HOWEVER,
                                        THEY ARE NOT
                                        REQUIRED TO DO SO.</span> If a self-represented litigant elects to serve and
                                    receive
                                    documents by email, the
                                    procedures must always be followed once the initial election is made.
                                </div>

                                <div class="mt-3">
                                    To serve and receive documents by e-mail, you must designate your e-mail addresses
                                    by using the Designation of Current Mailing and E-mail Address, Florida Supreme
                                    Court Approved
                                    Family Law Form 12.915, and you must provide your e-mail address on each form on
                                    which your
                                    signature appears. Please <span class="fw-bold f5">CAREFULLY</span> read the rules
                                    and instructions
                                    for: <span class="fw-bold h5">Certificate of Service (General), Florida Supreme
                                        Court Approved Family Law Form 12.914; Designation of Current Mailing and E-mail
                                        Address,</span> Florida Supreme Court Approved Family Law Form 12.915; and
                                    Florida Rule of General Practice and Judicial Administration 2.516.
                                </div>
                                <div class="fw-bold h3 text-center mt-3">Special notes . . .</div>
                                <div class="mt-3">If you want to keep your address confidential because you have been
                                    found by a judge to be the victim of sexual battery, aggravated child abuse,
                                    aggravated stalking, harassment, aggravated battery, or domestic violence do not
                                    enter the address, telephone, and fax information at the bottom of this form.
                                    Instead, file Request for Confidential Filing of Address, Florida Supreme Court
                                    Approved Family Law Form
                                    12.980(h).</div>
                                <div class="mt-3">The affidavit must be completed using monthly income and expense
                                    amounts. If you are paid or your
                                    bills are due on a schedule which is not monthly, you must convert those amounts.
                                    Hints are provided
                                    below for making these conversions.</div>
                                <div class="" style="padding-bottom:200px;"></div>


                                @include('layouts.footer12', ['page' => 2])

                            </div>

                        </div>
                    </div>

                </section>
                <section class="section_area py-5" id="section_three">
                    <div class="row">
                        <div class="col-lg-10 mx-auto">

                            <div class="row px-lg-5 px-2 py-2 pt-0">
                                <div class="px-lg-5">
                                    <div class="mt-3">
                                        <span class="fw-bold h5">Hourly</span>
                                        - If you are paid by the hour, you may convert your income to monthly as
                                        follows:
                                        <div class="row">
                                            <div class="col-lg-2">
                                                <div class="m-0 p-0"> Hourly amount</div>
                                                <div class="m-0 p-0"> Weekly amount</div>
                                                <div class="m-0 p-0"> Yearly amount</div>
                                            </div>
                                            <div class="col-lg-1">
                                                <div>x</div>
                                                <div>x</div>
                                                <div>÷</div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div> Hours worked per week</div>
                                                <div>52 Weeks per year</div>
                                                <div>12 Months per year</div>
                                            </div>
                                            <div class="col-lg-1">
                                                <div>=</div>
                                                <div>=</div>
                                                <div>=</div>
                                            </div>
                                            <div class="col-lg-5">
                                                <div>Weekly amount</div>
                                                <div>Yearly amount</div>
                                                <div class="fw-bold ">Monthly Amount</div>
                                            </div>
                                        </div>

                                    </div>

                                    <div>
                                        <span class="fw-bold h5">Daily</span>
                                        - If you are paid by the day, you may convert your income to monthly as follows:
                                        <div class="row">
                                            <div class="col-lg-2">
                                                <div class="m-0 p-0"> Daily amount</div>
                                                <div class="m-0 p-0"> Weekly amount</div>
                                                <div class="m-0 p-0"> Yearly amount</div>
                                            </div>
                                            <div class="col-lg-1">
                                                <div>x</div>
                                                <div>x</div>
                                                <div>÷</div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div>Days worked per week</div>
                                                <div>52 Weeks per year</div>
                                                <div>12 Months per year</div>
                                            </div>
                                            <div class="col-lg-1">
                                                <div>=</div>
                                                <div>=</div>
                                                <div>=</div>
                                            </div>
                                            <div class="col-lg-5">
                                                <div>Weekly amount</div>
                                                <div>Yearly amount</div>
                                                <div class="fw-bold ">Monthly Amount</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div>
                                        <span class="fw-bold h5">Weekly</span>
                                        - If you are paid by the week, you may convert your income to monthly as
                                        follows:
                                        <div class="row">
                                            <div class="col-lg-2">
                                                <div class="m-0 p-0"> Weekly amount</div>
                                            </div>
                                            <div class="col-lg-1">
                                                <div>x</div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div>52 Weeks per year</div>
                                            </div>
                                            <div class="col-lg-1">
                                                <div>=</div>
                                            </div>
                                            <div class="col-lg-5">
                                                <div>Yearly amount</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <div class="m-0 p-0">Yearly amount</div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div>÷</div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div>12 Months per year</div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div>=</div>
                                        </div>
                                        <div class="col-lg-5">
                                            <div class="fw-bold">Monthly Amount</div>
                                        </div>
                                    </div>
                                    <div><span class="fw-bold h5">Bi-weekly</span> - If you are paid every two weeks,
                                        you
                                        may
                                        convert your income to monthly as follows:
                                        <div class="row">
                                            <div class="col-lg-2">
                                                <div class="m-0 p-0"> Bi-weekly amount</div>
                                                <div class="m-0 p-0"> Yearly amount</div>
                                            </div>
                                            <div class="col-lg-1">
                                                <div>x</div>
                                                <div>÷</div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="ps-5">26</div>
                                                <div>12 Months per year</div>
                                            </div>
                                            <div class="col-lg-1">
                                                <div>=</div>
                                                <div>=</div>
                                            </div>
                                            <div class="col-lg-5">
                                                <div>Yearly amount</div>
                                                <div class="fw-bold ">Monthly Amount</div>
                                            </div>
                                        </div>

                                    </div>

                                    <div><span class="fw-bold h5">Semi-monthly </span> - If you are paid twice per
                                        month,
                                        you may
                                        convert your income to monthly as follows:
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="m-0 p-0"> Semi-monthly amount</div>
                                            </div>
                                            <div class="col-lg-1">
                                                <div>x</div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="ps-5">2</div>
                                            </div>
                                            <div class="col-lg-1">
                                                <div>=</div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="fw-bold ">Monthly Amount</div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="mt-3">Expenses may be converted in the same manner.</div>
                                <div class="mt-3" style="padding-bottom: 750px">Remember, a person who is NOT an
                                    attorney is called a nonlawyer. If a nonlawyer helps you fill out these
                                    forms, that person must give you a copy of a <span class="fw-bold">Disclosure from
                                        Nonlawyer,</span> Florida Family Law Rules of
                                    Procedure Form 12.900(a), before he or she helps you. A nonlawyer helping you fill
                                    out these forms also
                                    <span class="fw-bold">must</span> put his or her name, address, and telephone
                                    number on the bottom of the last page of every form he or she helps you complete.
                                </div>

                                @include('layouts.footer12', ['page' => 3])

                            </div>
                        </div>
                    </div>
                </section>
                <section class="section_area py-5" id="section_four">
                    <div class="row">
                        <div class="col-lg-10 mx-auto">
                            <div class="row px-lg-5 px-2 py-2 pt-0">
                                <div class=" justify-content-center d-flex d_sm_block">IN THE CIRCUIT COURT OF THE
                                    <input type="text" min="0" name="j_circuit"
                                        class="border-0 footer_field border-bottom"> JUDICIAL CIRCUIT,
                                </div>
                                <div class=" justify-content-center m-0 p-0  d-flex d_sm_block">IN AND FOR
                                    <input type="text" min="0" name="country_f"
                                        class="border-0 m-0 p-0 footer_field border-bottom"> COUNTY, FLORIDA
                                </div>
                                <div class="d-flex d_sm_block justify-content-end mt-2">Case No.: <input
                                        type="text" min="0" name="case_no"
                                        class="border-0 m-0 p-0 footer_field border-bottom"></div>
                                <div class="d-flex d_sm_block justify-content-end">Division: <input type="text"
                                        min="0" name="division"
                                        class="border-0 m-0 p-0  footer_field border-bottom"></div>
                                <div class="d-flex d_sm_block  mt-2"><input type="text" min="0"
                                        name="petitioner" class="border-0 m-0 p-0 footer_field border-bottom">,
                                </div>
                                <div class="" style="padding-left: 130px">Petitioner,</div>

                                <div class="mt-1 ps-lg-5">and</div>
                                <div class="d-flex d_sm_block  mt-1"><input type="text" min="0"
                                        name="respondent" class="border-0 m-0 p-0 footer_field border-bottom">,
                                </div>
                                <div class="" style="padding-left: 115px">Respondent.</div>
                                <div class="text-center h3 fw-bold mt-4">FAMILY LAW FINANCIAL AFFIDAVIT (SHORT FORM)
                                </div>
                                <div class="text-center">(Under $50,000 Individual Gross Annual Income)</div>

                                <div class="d-flex d_sm_block mt-3">I, {full legal name}
                                    <input type="text" min="0" name="fl_name"
                                        class="border-0 w-50 footer_field border-bottom">,
                                    being sworn, certify that the following
                                </div>
                                <div>information is true:</div>


                                <div class="border border-dark bg-secondary text-dark mb-4">SECTION I. INCOME</div>
                                <div class="d-flex d_sm_block "><span class="me-2">1.</span> My age is:
                                    <input type="text" min="0" name="m_age"
                                        class="border-0  footer_field border-bottom">
                                </div>

                                <div class="d-flex d_sm_block  "><span class="me-2">2.</span> My occupation is:
                                    <input type="text" min="0" name="m_occupation" style="width:805px"
                                        class="border-0 footer_field border-bottom responsive_input">
                                </div>
                                <div>
                                    <div class="d-flex d_sm_block "><span class="me-2">3.</span> I am currently
                                    </div>
                                    <div class=" ms-3"> [Check all that apply] </div>
                                    <div class=" ms-3 d-flex d_sm_block "> a. <span class="border-bottom ms-3 me-2">
                                            <input type="checkbox" name="a_employed" class=" "> </span>
                                        Unemployed
                                    </div>
                                    <div class="ms-3">Describe your efforts to find employment, how soon you expect
                                        to be employed, and the pay you expect to receive</div>
                                    <div class="ms-3">
                                        <input type="text" min="0" name="a_e_v1"
                                            class="border-0 w-100 footer_field border-bottom">
                                    </div>
                                    <div class="ms-3">
                                        <input type="text" min="0" name="a_e_v2"
                                            class="border-0 w-100 footer_field border-bottom">
                                    </div>


                                    <div class=" ms-3 d-flex d_sm_block "> b. <span class="border-bottom ms-3 me-2">
                                            <input type="checkbox" name="b_employe" class=" "> </span>
                                        <span>Employed by:</span> <input type="text" min="0" name="b_e_val"
                                            class="border-0 w-75 footer_field border-bottom responsive_input"
                                            style="width:788px !important">
                                    </div>


                                    <div class=" ms-3 d-flex d_sm_block "> <span>Address:</span>
                                        <input type="text" min="0" name="b_address"
                                            class="border-0 w-100 footer_field border-bottom">
                                    </div>


                                    <div class=" ms-3 d-flex d_sm_block "> <span>City, State, Zip code:</span>
                                        <input type="text" min="0" name="c_s_z_c"
                                            class="border-0  footer_field border-bottom responsive_input"
                                            style="width:410px; !important">
                                        <span>Telephone Number:</span>
                                        <input type="text" min="0" name="t_number"
                                            class="border-0 w-25   footer_field border-bottom">
                                    </div>
                                    <div class="d-flex d_sm_block ms-lg-3">Pay rate: <div
                                            class="d-flex d_sm_block px-2 "> $ <input type="text" min="0"
                                                name="p_rate" class="border-0 m-0 p-0 footer_field border-bottom">
                                        </div> <input type="checkbox" name="everyweek" class=""> <span
                                            class="px-2">every week</span> <input type="checkbox" name="every_ow"
                                            class=""> <span class="px-2">every other
                                            week</span>
                                        <input type="checkbox" name="t_month" class=""> <span
                                            class="px-2">twice a week</span> <input type="checkbox" name="monthly"
                                            class=""> <span class="px-2">monthly</span>
                                    </div>
                                    <div class="d-flex d_sm_block ms-lg-3">
                                        <input type="checkbox" name="other_c" class=""> <span
                                            class="ps-2">other:</span>
                                        <input type="text" min="0" style="width: 875px;" name="other_val"
                                            class="border-0 m-0 p-0 footer_field border-bottom responsive_input">
                                    </div>
                                    <div class="d-flex d_sm_block ms-lg-3">
                                        <div class="">If you are expecting to become unemployed or change jobs
                                            soon, describe the change you expect and why and how it will affect your
                                            income: <span> <input type="text" min="0" name="income_val1"
                                                    class="border-0 m-0 p-0 footer_field border-bottom responsive_input "
                                                    style="width: 840px;"></span>
                                        </div>
                                    </div>
                                    <div class="ms-lg-3">
                                        <input type="text" min="0" name="income_val2"
                                            style="width: 940px "
                                            class="border-0 m-0 p-0 footer_field  border-bottom responsive_input ">
                                    </div>
                                    <div class="ms-lg-3">
                                        <input type="text" min="0" name="income_val3"
                                            class="border-0 m-0 p-0 footer_field  border-bottom w-100">
                                    </div>

                                    <div class="ms-lg-3"><span class="mx-3"> <input type="checkbox"
                                                name="income_chk" id=""> </span> Check here if you currently
                                        have more than one
                                        job. List the information above for the
                                        second job(s) on a separate sheet and attach it to this affidavit.</div>
                                </div>
                            </div>
                            @include('layouts.footer12', ['page' => 4])

                        </div>
                    </div>
                </section>
                <section class="section_area py-5" id="section_five">
                    <div class="row">
                        <div class="col-lg-10 mx-auto">
                            <div class="row px-lg-5 px-2 py-2 pt-0">
                                <div class=" ms-3 d-flex d_sm_block "> c. <span class="border-bottom ms-3 me-2">
                                        <input type="checkbox" name="c_check" class=" "> </span> <span>Retired.
                                        Date of retirement</span> <input type="text" min="0"
                                        style="    width: 700px !important;" name="c_retirement"
                                        class="border-0 responsive_input  footer_field border-bottom">
                                </div>

                                <div class=" ms-3 d-flex d_sm_block "> <span>Employer from whom retired:</span>
                                    <input type="text" min="0" name="c_retired"
                                        style="width: 725px !important;"
                                        class="border-0  responsive_input footer_field border-bottom">
                                </div>
                                <div class=" ms-3 d-flex d_sm_block "> <span>Address:</span>
                                    <input type="text" min="0" name="c_address"
                                        style="    width: 880px !important;"
                                        class="border-0 responsive_input  footer_field border-bottom">
                                </div>
                                <div class=" ms-3 d-flex d_sm_block "> <span>City, State, Zip code:</span>
                                    <input type="text" min="0" name="c_cszc"
                                        class="border-0 w-25 footer_field border-bottom">
                                    <span>Telephone Number:</span>
                                    <input type="text" min="0" name="c_tn"
                                        style="    width: 410px !important;"
                                        class="border-0 responsive_input   footer_field border-bottom">
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="fw-bold text-center"> LAST YEAR’S GROSS INCOME: </div>
                                    <div class="d-flex d_sm_block justify-content-center"> <span>YEAR</span><input
                                            type="text" class="border-bottom border-0 footer_field w-25 "
                                            name="gi_year"></div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="fw-bold text-center">Your Income </div>
                                    <div class="d-flex d_sm_block justify-content-center">
                                        <span>$</span>
                                        <input type="text" class="border-bottom border-0 footer_field w-25"
                                            name="your_income">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="fw-bold text-center"> Other Party’s Income (if known) </div>
                                    <div class="d-flex d_sm_block justify-content-center">
                                        <span>$</span>
                                        <input type="text" class="border-bottom border-0 footer_field w-25 "
                                            name="op_income">
                                    </div>

                                </div>
                            </div>
                            <div class="pt-4">
                                <div class="fw-bold">PRESENT MONTHLY GROSS INCOME:</div>
                                <div> <strong>All amounts must be MONTHLY. </strong> See the instructions with this form
                                    to figure out money amounts for anything that is NOT paid monthly. Attach more
                                    paper, if needed. Items included under “other” should be listed separately with
                                    separate dollar amounts.</div>
                            </div>
                            <div>

                                <div class="row mt-1">
                                    <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">1.</span>
                                        <div class="d-flex d_sm_block ">$<input type="text" min="0"
                                                name="mgs_wages"
                                                class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                        </div>
                                    </div>
                                    <div class="col-lg-10">Monthly gross salary or wages</div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">2.</span>
                                        <div class="d-flex d_sm_block "> <input type="text" min="0"
                                                name="mbca_payments"
                                                class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                        </div>
                                    </div>
                                    <div class="col-lg-10">Monthly bonuses, commissions, allowances, overtime, tips,
                                        and
                                        similar payments</div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">3.</span> <input
                                            type="text" min="0" name="mbi_ssi"
                                            class="border-0 p-0 m-0 mb-5  border-bottom footer_field w-100">
                                    </div>
                                    <div class="col-lg-10">Monthly business income from sources such as
                                        self-employment,
                                        partnerships, close
                                        corporations, and/or independent contracts (gross receipts minus ordinary and
                                        necessary
                                        expenses required to produce income) (Attach sheet itemizing such income and
                                        expenses.)
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">4.</span>
                                        <div class="d-flex d_sm_block "> <input type="text" min="0"
                                                name="mdb_ssi"
                                                class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                        </div>
                                    </div>
                                    <div class="col-lg-10">Monthly disability benefits/SSI</div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">5.</span>
                                        <div class="d-flex d_sm_block "> <input type="text" min="0"
                                                name="mw_compensation"
                                                class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                        </div>
                                    </div>
                                    <div class="col-lg-10">Monthly Workers’ Compensation</div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">6.</span>
                                        <div class="d-flex d_sm_block "> <input type="text" min="0"
                                                name="mu_compensation"
                                                class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                        </div>
                                    </div>
                                    <div class="col-lg-10"> Monthly Unemployment Compensation</div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">7.</span>
                                        <div class="d-flex d_sm_block "> <input type="text" min="0"
                                                name="mpra_payments"
                                                class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                        </div>
                                    </div>
                                    <div class="col-lg-10">Monthly pension, retirement, or annuity payments</div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">8.</span>
                                        <div class="d-flex d_sm_block "> <input type="text" min="0"
                                                name="mss_benefits"
                                                class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                        </div>
                                    </div>
                                    <div class="col-lg-10"> Monthly Social Security benefits</div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">9.</span>
                                        <div class="d-flex d_sm_block "> <input type="text" min="0"
                                                name="maar"
                                                class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                        </div>
                                    </div>
                                    <div class="col-lg-10"> Monthly alimony actually received (Add 9a and 9b)</div>
                                </div>

                                <div class="ms-5 mt-2 ps-5 d-flex d_sm_block"><span class="me-3">9a.</span>From this
                                    case: <div class="d-flex d_sm_block ms-1 ">$<input type="text" min="0"
                                            name="maar_a" class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                    </div>
                                </div>

                                <div class="ms-5  ps-5 d-flex d_sm_block"><span class="me-3">9b.</span>From other
                                    case(s): <div class="d-flex d_sm_block ms-1 ">$<input type="text"
                                            min="0" name="maar_b"
                                            class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">10.</span>
                                        <div class="d-flex d_sm_block "> <input type="text" min="0"
                                                name="mid_10"
                                                class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                        </div>
                                    </div>
                                    <div class="col-lg-10">Monthly interest and dividends</div>
                                </div>


                                <div class="row">
                                    <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">11.</span>
                                        <div class="d-flex d_sm_block "> <input type="text" min="0"
                                                name="mri_11"
                                                class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                        </div>
                                    </div>
                                    <div class="col-lg-10">Monthly rental income (gross receipts minus ordinary and
                                        necessary expenses required to
                                        produce income) (Attach sheet itemizing such income and expense items.)</div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">12.</span>
                                        <div class="d-flex d_sm_block "> <input type="text" min="0"
                                                name="mif_12"
                                                class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                        </div>
                                    </div>
                                    <div class="col-lg-10">Monthly income from royalties, trusts, or estates</div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">13.</span>
                                        <div class="d-flex d_sm_block "> <input type="text" min="0"
                                                name="mre_13"
                                                class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                        </div>
                                    </div>
                                    <div class="col-lg-10">Monthly reimbursed expenses and in-kind payments to the
                                        extent that they reduce
                                        personal living expenses (Attach sheet itemizing each item and amount.)</div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">14.</span>
                                        <div class="d-flex d_sm_block "> <input type="text" min="0"
                                                name="mgd_14_1"
                                                class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                        </div>
                                    </div>
                                    <div class="col-lg-10">Monthly gains derived from dealing in property (not
                                        including nonrecurring gains)</div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-2 d-flex d_sm_block">
                                        <div class="d-flex d_sm_block ms-5"> <input type="text" min="0"
                                                name="mgd_14_2"
                                                class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                        </div>
                                    </div>
                                    <div class="col-lg-10">Any other income of a recurring nature (identify source):
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 d-flex d_sm_block">
                                        <span class="me-3">15.</span>
                                        <div class="d-flex d_sm_block w-100 "> <input type="text" min="0"
                                                name="no_15"
                                                class="border-0 p-0 m-0  border-bottom footer_field w-100">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12 d-flex d_sm_block">
                                        <span class="me-3">16.</span>
                                        <div class="d-flex d_sm_block w-100 "> <input type="text" min="0"
                                                name="no_16"
                                                class="border-0 p-0 m-0  border-bottom footer_field w-100">
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-1">
                                    <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">17.</span>
                                        <div class="d-flex d_sm_block ">$<input type="text" min="0"
                                                name="tpm_17"
                                                class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                        </div>
                                    </div>
                                    <div class="col-lg-10">TOTAL PRESENT MONTHLY GROSS INCOME (Add lines 1 through 16.)
                                    </div>
                                </div>


                                <div class="pt-5">
                                    <div class="fw-bold">PRESENT MONTHLY DEDUCTIONS:</div>
                                    <div> <b>All amounts must be MONTHLY.</b> See the instructions with this form to
                                        figure out money amounts for
                                        anything that is NOT paid monthly.</div>
                                </div>

                                <div class="row mt-1">
                                    <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">18.</span>
                                        <div class="d-flex d_sm_block ">$<input type="text" min="0"
                                                name="mfs_18"
                                                class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                        </div>
                                    </div>
                                    <div class="col-lg-10">Monthly federal, state, and local income tax (corrected for
                                        filing status and allowable
                                        dependents and income tax liabilities)</div>
                                </div>
                                <div class="ms-5 mt-2 ps-5 d-flex d_sm_block"><span class="me-3"> a.</span>Filing
                                    Status
                                    <div class="d-flex d_sm_block ms-1 ">$<input type="text" min="0"
                                            name="mfs_18_a" class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                    </div>
                                </div>

                                <div class="ms-5  ps-5 d-flex d_sm_block">
                                    <span class="me-3"> b.</span>
                                    Number of dependents claimed:
                                    <div class="d-flex d_sm_block ms-1 ">
                                        $<input type="text" min="0" name="mfs_18_b"
                                            class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                    </div>
                                </div>

                                <div class="row mt-1">
                                    <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">19.</span>
                                        <input type="text" min="0" name="mfica_19"
                                            class="border-0 p-0 m-0 border-bottom footer_field w-100">

                                    </div>
                                    <div class="col-lg-10">Monthly FICA or self-employment taxes</div>
                                </div>
                            </div>
                            @include('layouts.footer12', ['page' => 5])
                        </div>
                    </div>
                </section>
                <section class="section_area py-5" id="section_six">
                    <div class="row">
                        <div class="col-lg-10 mx-auto">
                            <div class="row px-lg-5 px-2 py-2 pt-0">
                                <div class="row mt-1">
                                    <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">20.</span>
                                        <input type="text" min="0" name="mmp_20" class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                    </div>
                                    <div class="col-lg-10">Monthly Medicare payments</div>
                                </div>

                                <div class="row mt-1">
                                    <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">21.</span>
                                        <input type="text" min="0" name="mmud_21"
                                            class="border-0 p-0 m-0 border-bottom footer_field w-100">

                                    </div>
                                    <div class="col-lg-10">Monthly mandatory union dues</div>
                                </div>

                                <div class="row mt-1">
                                    <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">22.</span>
                                        <input type="text" min="0" name="mmrp_22"
                                            class="border-0 p-0 m-0 border-bottom footer_field w-100">

                                    </div>
                                    <div class="col-lg-10">Monthly mandatory retirement payments</div>
                                </div>

                                <div class="row mt-1">
                                    <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">23.</span>
                                        <input type="text" min="0" name="mhi_23"
                                            class="border-0 p-0 m-0 border-bottom footer_field w-100">

                                    </div>
                                    <div class="col-lg-10">Monthly health insurance payments (including dental
                                        insurance), excluding portion paid for
                                        any minor children of this relationship</div>
                                </div>

                                <div class="row mt-1">
                                    <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">24.</span>
                                        <input type="text" min="0" name="mcoc_24"
                                            class="border-0 p-0 m-0 border-bottom footer_field w-100">

                                    </div>
                                    <div class="col-lg-10">Monthly court-ordered child support actually paid for
                                        children from another relationship</div>
                                </div>

                                <div class="row mt-1">
                                    <div class="col-lg-2 d-flex  "><span class="me-3">25.</span>
                                        <input type="text" min="0" name="mcoa_25"
                                            class="border-0 p-0 m-0 border-bottom footer_field w-100">

                                    </div>
                                    <div class="col-lg-10">Monthly court-ordered alimony actually paid (Add 25a and
                                        25b)</div>
                                </div>
                                <div class="ms-lg-5 mt-2 ps-lg-5 d-flex  "><span class="me-3">25a.</span>From this
                                    case:
                                    <div class="d-flex d_sm_block ms-1 ">$<input type="text" min="0"
                                            name="mcoa_25_a"
                                            class="border-0 p-0 m-0 border-bottom responsive_input footer_field w-100">
                                    </div>
                                </div>

                                <div class="ms-lg-5  ps-lg-5 d-flex d_sm_block"><span class="me-3">25b.</span>From
                                    other
                                    case(s): <div class="d-flex d_sm_block ms-1 ">$<input type="text"
                                            min="0" name="mcoa_25_b"
                                            class="border-0 p-0 m-0 border-bottom responsive_input footer_field w-100">

                                    </div>
                                </div>
                                <div class="row mt-1">
                                    <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">26.</span>
                                        <input type="text" min="0" name="tda_26"
                                            class="border-0 p-0 m-0 border-bottom footer_field w-100">

                                    </div>
                                    <div class="col-lg-10 fw-bold">TOTAL DEDUCTIONS ALLOWABLE UNDER SECTION 61.30,
                                        FLORIDA STATUTES
                                    </div>
                                    <div class="row mt-1">
                                        <div class="col-lg-2 d-flex d_sm_block">
                                        </div>
                                        <div class="col-lg-10  ">
                                            <div>(Add lines 18 through 25.)</div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">27.</span>
                                                <input type="text" min="0" name="pnmi_27"
                                                    class="border-0 p-0 m-0 border-bottom footer_field w-100">

                                            </div>
                                            <div class="col-lg-10 fw-bold">PRESENT NET MONTHLY INCOME
                                            </div>
                                            <div class="row mt-1">
                                                <div class="col-lg-2 d-flex d_sm_block"> </div>
                                                <div class="col-lg-10  ">
                                                    <div>(Subtract line 26 from line 17.)</div>
                                                </div>
                                            </div>

                                            <div class="border border-dark bg-secondary text-dark my-4">SECTION II.
                                                AVERAGE MONTHLY EXPENSES</div>
                                            <div><strong>Proposed/Estimated Expenses.</strong> If this is a dissolution
                                                of marriage case and your expenses as listed below do not reflect what
                                                you actually pay currently, you should write “estimate” next to each
                                                amount that is estimated.</div>
                                            <div class="fw-bold pt-3">HOUSEHOLD:</div>
                                            <div class="row mt-1">
                                                <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">1.</span>
                                                    <div class="d-flex d_sm_block ">$<input type="text"
                                                            min="0" name="s2_h1"
                                                            class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                                    </div>
                                                </div>
                                                <div class="col-lg-10">Monthly mortgage or rent payments</div>
                                            </div>

                                            <div class="row mt-1">
                                                <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">2.</span>
                                                    <input type="text" min="0" name="s2_h2"
                                                        class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                                </div>
                                                <div class="col-lg-10">Monthly property taxes (if not included in
                                                    mortgage)</div>
                                            </div>

                                            <div class="row mt-1">
                                                <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">3.</span>
                                                    <input type="text" min="0" name="s2_h3"
                                                        class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                                </div>
                                                <div class="col-lg-10">Monthly insurance on residence (if not included
                                                    in mortgage)</div>
                                            </div>

                                            <div class="row mt-1">
                                                <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">4.</span>
                                                    <input type="text" min="0" name="s2_h4"
                                                        class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                                </div>
                                                <div class="col-lg-10">Monthly condominium maintenance fees and
                                                    homeowner’s association fees</div>
                                            </div>

                                            <div class="row mt-1">
                                                <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">5.</span>
                                                    <input type="text" min="0" name="s2_h5"
                                                        class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                                </div>
                                                <div class="col-lg-10">Monthly electricity</div>
                                            </div>

                                            <div class="row mt-1">
                                                <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">6.</span>
                                                    <input type="text" min="0" name="s2_h6"
                                                        class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                                </div>
                                                <div class="col-lg-10">Monthly water, garbage, and sewer</div>
                                            </div>

                                            <div class="row mt-1">
                                                <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">7.</span>
                                                    <input type="text" min="0" name="s2_h7"
                                                        class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                                </div>
                                                <div class="col-lg-10">Monthly telephone</div>
                                            </div>

                                            <div class="row mt-1">
                                                <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">8.</span>
                                                    <input type="text" min="0" name="s2_h8"
                                                        class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                                </div>
                                                <div class="col-lg-10">Monthly fuel oil or natural gas</div>
                                            </div>
                                            <div class="row mt-1">
                                                <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">9.</span>
                                                    <input type="text" min="0" name="s2_h9"
                                                        class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                                </div>
                                                <div class="col-lg-10"> Monthly repairs and maintenance</div>
                                            </div>
                                            <div class="row mt-1">
                                                <div class="col-lg-2 d-flex d_sm_block"><span
                                                        class="me-3">10.</span>
                                                    <input type="text" min="0" name="s2_h10"
                                                        class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                                </div>
                                                <div class="col-lg-10">Monthly lawn care</div>
                                            </div>

                                            <div class="row mt-1">
                                                <div class="col-lg-2 d-flex d_sm_block"><span
                                                        class="me-3">11.</span>
                                                    <input type="text" min="0" name="s2_h11"
                                                        class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                                </div>
                                                <div class="col-lg-10">Monthly pool maintenance</div>
                                            </div>

                                            <div class="row mt-1">
                                                <div class="col-lg-2 d-flex d_sm_block"><span
                                                        class="me-3">12.</span>
                                                    <input type="text" min="0" name="s2_h12"
                                                        class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                                </div>
                                                <div class="col-lg-10">Monthly pest control</div>
                                            </div>

                                            <div class="row mt-1">
                                                <div class="col-lg-2 d-flex d_sm_block"><span
                                                        class="me-3">13.</span>
                                                    <input type="text" min="0" name="s2_h13"
                                                        class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                                </div>
                                                <div class="col-lg-10">Monthly misc. household</div>
                                            </div>

                                            <div class="row mt-1">
                                                <div class="col-lg-2 d-flex d_sm_block"><span
                                                        class="me-3">14.</span>
                                                    <input type="text" min="0" name="s2_h14"
                                                        class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                                </div>
                                                <div class="col-lg-10">Monthly food and home supplies</div>
                                            </div>
                                            <div class="row mt-1">
                                                <div class="col-lg-2 d-flex d_sm_block"><span
                                                        class="me-3">15.</span>
                                                    <input type="text" min="0" name="s2_h15"
                                                        class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                                </div>
                                                <div class="col-lg-10"> Monthly meals outside home</div>
                                            </div>
                                            <div class="row mt-1">
                                                <div class="col-lg-2 d-flex d_sm_block"><span
                                                        class="me-3">16.</span>
                                                    <input type="text" min="0" name="s2_h16"
                                                        class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                                </div>
                                                <div class="col-lg-10"> Monthly cable t.v.</div>
                                            </div>
                                            <div class="row mt-1">
                                                <div class="col-lg-2 d-flex d_sm_block"><span
                                                        class="me-3">17.</span>
                                                    <input type="text" min="0" name="s2_h17"
                                                        class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                                </div>
                                                <div class="col-lg-10"> Monthly alarm service contract</div>
                                            </div>
                                            <div class="row mt-1">
                                                <div class="col-lg-2 d-flex d_sm_block"><span
                                                        class="me-3">18.</span>
                                                    <input type="text" min="0" name="s2_h18"
                                                        class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                                </div>
                                                <div class="col-lg-10"> Monthly alarm service contract</div>
                                            </div>
                                            <div class="row mt-1">
                                                <div class="col-lg-2 d-flex d_sm_block"><span
                                                        class="me-3">19.</span>
                                                    <input type="text" min="0" name="s2_h19"
                                                        class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                                </div>
                                                <div class="col-lg-10"> Monthly maid service</div>
                                            </div>
                                            <div>Other:</div>

                                            <div class="row mt-1">
                                                <div class="col-lg-12 d-flex d_sm_block"><span
                                                        class="me-3">20.</span>
                                                    <input type="text" min="0" name="s2_h20"
                                                        class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                                </div>
                                            </div>

                                            <div class="row mt-1">
                                                <div class="col-lg-12 d-flex d_sm_block"><span
                                                        class="me-3">21.</span>
                                                    <input type="text" min="0" name="s2_h21"
                                                        class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                                </div>
                                            </div>

                                            <div class="row mt-1">
                                                <div class="col-lg-12 d-flex d_sm_block"><span
                                                        class="me-3">22.</span>
                                                    <input type="text" min="0" name="s2_h22"
                                                        class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                                </div>
                                            </div>

                                            <div class="row mt-1">
                                                <div class="col-lg-12 d-flex d_sm_block"><span
                                                        class="me-3">23.</span>
                                                    <input type="text" min="0" name="s2_h23"
                                                        class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                                </div>
                                            </div>

                                            <div class="row mt-1">
                                                <div class="col-lg-12 d-flex d_sm_block"><span
                                                        class="me-3">24.</span>
                                                    <input type="text" min="0" name="s2_h24"
                                                        class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                                </div>
                                            </div>

                                            <div class="row mt-1">
                                                <div class="col-lg-2 d-flex d_sm_block"><span
                                                        class="me-3">25.</span>
                                                    <div class="d-flex d_sm_block ">$<input type="text"
                                                            min="0" name="s2_h25"
                                                            class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                                    </div>
                                                </div>
                                                <div class="col-lg-10"><b>SUBTOTAL</b> (Add lines 1 through 24.)</div>
                                            </div>

                                        </div>
                                        @include('layouts.footer12', ['page' => 6])
                                    </div>
                                </div>
                </section>

                <section class="section_area py-5" id="section_seven">
                    <div class="row">
                        <div class="col-lg-10 mx-auto">
                            <div class="row px-lg-5 px-2 py-2 pt-0">


                                <div class="fw-bold pt-3">AUTOMOBILE:</div>
                                <div class="row mt-1">
                                    <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">26.</span>
                                        <div class="d-flex s2_a26 ">$<input type="text" min="0"
                                                name="t_u_m_service"
                                                class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                        </div>
                                    </div>
                                    <div class="col-lg-10"> Monthly gasoline and oil</div>
                                </div>

                                <div class="row mt-1">
                                    <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">27.</span>
                                        <input type="text" min="0" name="s2_a27"
                                            class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                    </div>
                                    <div class="col-lg-10">Monthly repairs</div>
                                </div>

                                <div class="row mt-1">
                                    <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">28.</span>
                                        <input type="text" min="0" name="s2_a28"
                                            class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                    </div>
                                    <div class="col-lg-10">Monthly auto tags and emission testing</div>
                                </div>

                                <div class="row mt-1">
                                    <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">29.</span>
                                        <input type="text" min="0" name="s2_a29"
                                            class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                    </div>
                                    <div class="col-lg-10"> Monthly insurance</div>
                                </div>

                                <div class="row mt-1">
                                    <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">30.</span>
                                        <input type="text" min="0" name="s2_a30"
                                            class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                    </div>
                                    <div class="col-lg-10">Monthly payments (lease or financing)</div>
                                </div>

                                <div class="row mt-1">
                                    <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">31.</span>
                                        <input type="text" min="0" name="s2_a31"
                                            class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                    </div>
                                    <div class="col-lg-10">Monthly rental/replacements</div>
                                </div>

                                <div class="row mt-1">
                                    <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">32.</span>
                                        <input type="text" min="0" name="s2_a32"
                                            class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                    </div>
                                    <div class="col-lg-10">Monthly alternative transportation (bus, rail, car pool,
                                        etc.)</div>
                                </div>

                                <div class="row mt-1">
                                    <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">33.</span>
                                        <input type="text" min="0" name="s2_a33"
                                            class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                    </div>
                                    <div class="col-lg-10">Monthly tolls and parking</div>
                                </div>
                                <div class="row mt-1">
                                    <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">34.</span>
                                        <input type="text" min="0" name="s2_a34"
                                            class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                    </div>
                                    <div class="col-lg-9 d-flex d_sm_block ">
                                        <div class="">Other:</div>
                                        <input type="text" min="0" name="t_u_m_service"
                                            class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                    </div>
                                </div>
                                <div class="row mt-1">
                                    <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">35.</span>
                                        <div class="d-flex d_sm_block ">$<input type="text" min="0"
                                                name="s2_a35"
                                                class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                        </div>
                                    </div>
                                    <div class="col-lg-10"><b> SUBTOTAL</b> (Add lines 26 through 34.)</div>
                                </div>


                                <div class="pt-3 fw-bold">MONTHLY EXPENSES FOR CHILDREN COMMON TO BOTH PARTIES:</div>


                                <div class="row mt-1">
                                    <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">36.</span>
                                        <div class="d-flex d_sm_block ">$<input type="text" min="0"
                                                name="s2_m36"
                                                class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                        </div>
                                    </div>
                                    <div class="col-lg-10">Monthly nursery, babysitting, or day care</div>
                                </div>
                                <div class="row mt-1">
                                    <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">37.</span>
                                        <input type="text" min="0" name="s2_m37"
                                            class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                    </div>
                                    <div class="col-lg-10">Monthly school tuition</div>
                                </div>

                                <div class="row mt-1">
                                    <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">38.</span>
                                        <input type="text" min="0" name="s2_m38"
                                            class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                    </div>
                                    <div class="col-lg-10">Monthly school supplies, books, and fees</div>
                                </div>

                                <div class="row mt-1">
                                    <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">39.</span>
                                        <input type="text" min="0" name="s2_m39"
                                            class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                    </div>
                                    <div class="col-lg-10">Monthly after school activities</div>
                                </div>

                                <div class="row mt-1">
                                    <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">40.</span>
                                        <input type="text" min="0" name="s2_m40"
                                            class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                    </div>
                                    <div class="col-lg-10">Monthly lunch money</div>
                                </div>

                                <div class="row mt-1">
                                    <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">41.</span>
                                        <input type="text" min="0" name="s2_m41"
                                            class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                    </div>
                                    <div class="col-lg-10">Monthly private lessons or tutoring</div>
                                </div>
                                <div class="row mt-1">
                                    <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">42.</span>
                                        <input type="text" min="0" name="s2_m42"
                                            class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                    </div>
                                    <div class="col-lg-10">Monthly allowances</div>
                                </div>
                                <div class="row mt-1">
                                    <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">43.</span>
                                        <input type="text" min="0" name="s2_m43"
                                            class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                    </div>
                                    <div class="col-lg-10"> Monthly clothing and uniforms</div>
                                </div>
                                <div class="row mt-1">
                                    <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">44.</span>
                                        <input type="text" min="0" name="s2_m44"
                                            class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                    </div>
                                    <div class="col-lg-10">Monthly entertainment (movies, parties, etc.)</div>
                                </div>
                                <div class="row mt-1">
                                    <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">45.</span>
                                        <input type="text" min="0" name="s2_m45"
                                            class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                    </div>
                                    <div class="col-lg-10">Monthly health insurance</div>
                                </div>
                                <div class="row mt-1">
                                    <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">46.</span>
                                        <input type="text" min="0" name="s2_m46"
                                            class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                    </div>
                                    <div class="col-lg-10">Monthly medical, dental, prescriptions (nonreimbursed only)
                                    </div>
                                </div>
                                <div class="row mt-1">
                                    <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">47.</span>
                                        <input type="text" min="0" name="s2_m47"
                                            class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                    </div>
                                    <div class="col-lg-10">Monthly psychiatric/psychological/counselor</div>
                                </div>
                                <div class="row mt-1">
                                    <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">48.</span>
                                        <input type="text" min="0" name="s2_m48"
                                            class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                    </div>
                                    <div class="col-lg-10">Monthly orthodontic</div>
                                </div>
                                <div class="row mt-1">
                                    <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">49.</span>
                                        <input type="text" min="0" name="s2_m49"
                                            class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                    </div>
                                    <div class="col-lg-10">Monthly vitamins</div>
                                </div>
                                <div class="row mt-1">
                                    <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">50.</span>
                                        <input type="text" min="0" name="s2_m50"
                                            class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                    </div>
                                    <div class="col-lg-10">Monthly beauty parlor/barber shop</div>
                                </div>
                                <div class="row mt-1">
                                    <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">51.</span>
                                        <input type="text" min="0" name="s2_m51"
                                            class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                    </div>
                                    <div class="col-lg-10">Monthly nonprescription medication</div>
                                </div>
                                <div class="row mt-1">
                                    <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">52.</span>
                                        <input type="text" min="0" name="s2_m52"
                                            class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                    </div>
                                    <div class="col-lg-10">Monthly cosmetics, toiletries, and sundries</div>
                                </div>
                                <div class="row mt-1">
                                    <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">53.</span>
                                        <input type="text" min="0" name="s2_m53"
                                            class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                    </div>
                                    <div class="col-lg-10">Monthly gifts from child(ren) to others (other children,
                                        relatives, teachers, etc.)</div>
                                </div>
                                <div class="row mt-1">
                                    <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">54.</span>
                                        <input type="text" min="0" name="s2_m54"
                                            class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                    </div>
                                    <div class="col-lg-10">Monthly camp or summer activities</div>
                                </div>
                                <div class="row mt-1">
                                    <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">55.</span>
                                        <input type="text" min="0" name="s2_m55"
                                            class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                    </div>
                                    <div class="col-lg-10">Monthly clubs (Boy/Girl Scouts, etc.)</div>
                                </div>
                                <div class="row mt-1">
                                    <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">56.</span>
                                        <input type="text" min="0" name="s2_m56"
                                            class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                    </div>
                                    <div class="col-lg-10">Monthly time-sharing expenses</div>
                                </div>
                                <div class="row mt-1">
                                    <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">57.</span>
                                        <input type="text" min="0" name="s2_m57"
                                            class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                    </div>
                                    <div class="col-lg-10">Monthly miscellaneous</div>
                                </div>

                                <div class="row mt-1">
                                    <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">58 .</span>
                                        <div class="d-flex d_sm_block ">$<input type="text" min="0"
                                                name="s2_m58"
                                                class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                        </div>
                                    </div>
                                    <div class="col-lg-10"><b> SUBTOTAL</b> (Add lines 36 through 57.)</div>
                                </div>
                                <div class="fw-bold ">MONTHLY EXPENSES FOR CHILD(REN) FROM ANOTHER RELATIONSHIP</div>
                                <div>(other than court-ordered child support)</div>


                                <div class="row mt-1">
                                    <div class="col-lg-12 d-flex d_sm_block"><span class="me-3">59.</span>
                                        $<input type="text" min="0" name="s2_mo59"
                                            class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                    </div>
                                </div>

                                <div class="row mt-1">
                                    <div class="col-lg-12 d-flex d_sm_block"><span class="me-3">60.</span>
                                        <input type="text" min="0" name="s2_mo60"
                                            class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                    </div>
                                </div>

                                <div class="row mt-1">
                                    <div class="col-lg-12 d-flex d_sm_block"><span class="me-3">61.</span>
                                        <input type="text" min="0" name="s2_mo61"
                                            class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                    </div>
                                </div>

                                <div class="row mt-1">
                                    <div class="col-lg-12 d-flex d_sm_block"><span class="me-3">62.</span>
                                        <input type="text" min="0" name="s2_mo62"
                                            class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                    </div>
                                </div>

                                <div class="row mt-1">
                                    <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">63.</span>
                                        <div class="d-flex d_sm_block ">$<input type="text" min="0"
                                                name="s2_mo63"
                                                class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                        </div>
                                    </div>
                                    <div class="col-lg-10"><b>SUBTOTAL</b> (Add lines 59 through 62.)</div>
                                </div>

                            </div>
                            @include('layouts.footer12', ['page' => 7])
                        </div>
                    </div>
                </section>
                <section class="section_area py-5" id="section_eight">
                    <div class="row">
                        <div class="col-lg-10 mx-auto">
                            <div class="row px-lg-5 px-2 py-2 pt-0">


                                <div class="fw-bold pt-3">MONTHLY INSURANCE:</div>
                                <div class="row mt-1">
                                    <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">64.</span>
                                        <div class="d-flex d_sm_block ">$<input type="text" min="0"
                                                name="s2_mi64"
                                                class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                        </div>
                                    </div>
                                    <div class="col-lg-10"> Health insurance (if not listed on lines 23 or 45)</div>
                                </div>

                                <div class="row mt-1">
                                    <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">65.</span>
                                        <input type="text" min="0" name="s2_mi65"
                                            class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                    </div>
                                    <div class="col-lg-10">Life insurance</div>
                                </div>

                                <div class="row mt-1">
                                    <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">66.</span>
                                        <input type="text" min="0" name="s2_mi66"
                                            class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                    </div>
                                    <div class="col-lg-10">Dental insurance.</div>
                                </div>
                                <div class="ps-5">Other:</div>
                                <div class="row mt-1">
                                    <div class="col-lg-12 d-flex d_sm_block"><span class="me-3">67.</span>
                                        <input type="text" min="0" name="s2_mi67 "
                                            class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                    </div>
                                </div>
                                <div class="row mt-1">
                                    <div class="col-lg-12 d-flex d_sm_block"><span class="me-3">68.</span>
                                        <input type="text" min="0" name="s2_mi68 "
                                            class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                    </div>
                                </div>
                                <div class="row mt-1">
                                    <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">69.</span>
                                        <div class="d-flex d_sm_block ">$<input type="text" min="0"
                                                name="s2_mi69"
                                                class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                        </div>
                                    </div>
                                    <div class="col-lg-10"> SUBTOTAL (Add lines 66 through 68, exclude lines 64 and
                                        65.)</div>
                                </div>
                                <div class="fw-bold">OTHER MONTHLY EXPENSES NOT LISTED ABOVE:</div>
                                <div class="row mt-1">
                                    <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">70.</span>
                                        <div class="d-flex d_sm_block ">$<input type="text" min="0"
                                                name="s2_om70"
                                                class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                        </div>
                                    </div>
                                    <div class="col-lg-10"> Monthly dry cleaning and laundry</div>
                                </div>

                                <div class="row mt-1">
                                    <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">71.</span>
                                        <div class="d-flex d_sm_block ">$<input type="text" min="0"
                                                name="s2_om71"
                                                class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                        </div>
                                    </div>
                                    <div class="col-lg-10">Monthly clothing</div>
                                </div>
                                <div class="row mt-1">
                                    <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">72.</span>
                                        <input type="text" min="0" name="s2_om72"
                                            class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                    </div>
                                    <div class="col-lg-10"> Monthly medical, dental, and prescription (unreimbursed
                                        only)</div>
                                </div>

                                <div class="row mt-1">
                                    <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">73.</span>
                                        <input type="text" min="0" name="s2_om73"
                                            class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                    </div>
                                    <div class="col-lg-10">Monthly psychiatric, psychological, or counselor
                                        (unreimbursed only)</div>
                                </div>

                                <div class="row mt-1">
                                    <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">74.</span>
                                        <input type="text" min="0" name="s2_om74"
                                            class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                    </div>
                                    <div class="col-lg-10">Monthly non-prescription medications, cosmetics,
                                        toiletries, and sundries</div>
                                </div>

                                <div class="row mt-1">
                                    <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">75.</span>
                                        <input type="text" min="0" name="s2_om75"
                                            class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                    </div>
                                    <div class="col-lg-10">Monthly grooming</div>
                                </div>
                                <div class="row mt-1">
                                    <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">76.</span>
                                        <input type="text" min="0" name="s2_om76"
                                            class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                    </div>
                                    <div class="col-lg-10">Monthly gifts</div>
                                </div>
                                <div class="row mt-1">
                                    <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">77.</span>
                                        <input type="text" min="0" name="s2_om77"
                                            class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                    </div>
                                    <div class="col-lg-10">Monthly pet expenses</div>
                                </div>
                                <div class="row mt-1">
                                    <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">78.</span>
                                        <input type="text" min="0" name="s2_om78"
                                            class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                    </div>
                                    <div class="col-lg-10">Monthly club dues and membership</div>
                                </div>
                                <div class="row mt-1">
                                    <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">79.</span>
                                        <input type="text" min="0" name="s2_om79"
                                            class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                    </div>
                                    <div class="col-lg-10">Monthly sports and hobbies</div>
                                </div>
                                <div class="row mt-1">
                                    <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">80.</span>
                                        <input type="text" min="0" name="s2_om80"
                                            class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                    </div>
                                    <div class="col-lg-10">Monthly entertainment</div>
                                </div>
                                <div class="row mt-1">
                                    <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">81.</span>
                                        <input type="text" min="0" name="s2_om81"
                                            class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                    </div>
                                    <div class="col-lg-10">Monthly periodicals/books/tapes/CDs</div>
                                </div>
                                <div class="row mt-1">
                                    <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">82.</span>
                                        <input type="text" min="0" name="s2_om82"
                                            class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                    </div>
                                    <div class="col-lg-10">Monthly vacations</div>
                                </div>
                                <div class="row mt-1">
                                    <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">83.</span>
                                        <input type="text" min="0" name="s2_om83"
                                            class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                    </div>
                                    <div class="col-lg-10">Monthly religious organizations</div>
                                </div>
                                <div class="row mt-1">
                                    <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">84.</span>
                                        <input type="text" min="0" name="s2_om84"
                                            class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                    </div>
                                    <div class="col-lg-10">Monthly bank charges/credit card fees</div>
                                </div>
                                <div class="row mt-1">
                                    <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">85.</span>
                                        <input type="text" min="0" name="s2_om85"
                                            class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                    </div>
                                    <div class="col-lg-10">Monthly education expenses</div>
                                </div>
                                <div class="row mt-1">
                                    <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">86.</span>
                                        <input type="text" min="0" name="s2_om86_1"
                                            class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                    </div>
                                    <div class="col-lg-10">Other: (include any usual and customary expenses not
                                        otherwise mentioned in the items </div>
                                </div>
                                <div class="row mt-1">
                                    <div class="col-lg-2 d-flex d_sm_block"><span class="me-3"> </span>
                                    </div>
                                    <div class="col-lg-10">listed above) <span> <input type="text"
                                                min="0" name="s2_om86_2" style="width: 772px !important;"
                                                class="border-0 p-0 m-0 responsive_input border-bottom footer_field "></span>
                                    </div>
                                </div>


                                <div class="row mt-1">
                                    <div class="col-lg-12 d-flex d_sm_block"><span class="me-3">87.</span>
                                        <input type="text" min="0" name="s2_om87"
                                            class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                    </div>
                                </div>

                                <div class="row mt-1">
                                    <div class="col-lg-12 d-flex d_sm_block"><span class="me-3">88.</span>
                                        <input type="text" min="0" name="s2_om88"
                                            class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                    </div>
                                </div>

                                <div class="row mt-1">
                                    <div class="col-lg-12 d-flex d_sm_block"><span class="me-3">89.</span>
                                        <input type="text" min="0" name="s2_om89"
                                            class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                    </div>
                                </div>


                                <div class="row mt-1">
                                    <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">90.</span>
                                        <div class="d-flex   ">$<input type="text" min="0"
                                                name="s2_om90"
                                                class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                        </div>
                                    </div>
                                    <div class="col-lg-10"><b>SUBTOTAL</b> (Add lines 70 through 89.)</div>
                                </div>
                                <div><b>MONTHLY PAYMENTS TO CREDITORS: </b> (only when payments are currently made by
                                    you on outstanding
                                    balances). List only last 4 digits of account numbers.</div>
                                <div class="fw-normal">MONTHLY PAYMENT AND NAME OF CREDITOR(s):</div>
                                <div class="row mt-1">
                                    <div class="col-lg-12 d-flex d_sm_block"><span class="me-3">91.</span>
                                        <div class="d-flex w-100">$ <input type="text" min="0"
                                                name="s2_mp91"
                                                class="border-0 p-0 m-0 border-bottom footer_field w-100"></div>
                                    </div>
                                </div>


                                <div class="row mt-1">
                                    <div class="col-lg-12 d-flex d_sm_block"><span class="me-3">92.</span>
                                        <input type="text" min="0" name="s2_mp92"
                                            class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                    </div>
                                </div>


                                <div class="row mt-1">
                                    <div class="col-lg-12 d-flex d_sm_block"><span class="me-3">93.</span>
                                        <input type="text" min="0" name="s2_mp93"
                                            class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                    </div>
                                </div>


                                <div class="row mt-1">
                                    <div class="col-lg-12 d-flex d_sm_block"><span class="me-3">94.</span>
                                        <input type="text" min="0" name="s2_mp94"
                                            class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                    </div>
                                </div>

                                <div class="row mt-1">
                                    <div class="col-lg-12 d-flex d_sm_block"><span class="me-3">95.</span>
                                        <input type="text" min="0" name="s2_mp95"
                                            class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                    </div>
                                </div>

                                <div class="row mt-1">
                                    <div class="col-lg-12 d-flex d_sm_block"><span class="me-3">96.</span>
                                        <input type="text" min="0" name="s2_mp96"
                                            class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                    </div>
                                </div>

                                <div class="row mt-1">
                                    <div class="col-lg-12 d-flex d_sm_block"><span class="me-3">97.</span>
                                        <input type="text" min="0" name="s2_mp97"
                                            class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                    </div>
                                </div>

                                <div class="row mt-1">
                                    <div class="col-lg-12 d-flex d_sm_block"><span class="me-3">98.</span>
                                        <input type="text" min="0" name="s2_mp98"
                                            class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                    </div>
                                </div>

                                <div class="row mt-1">
                                    <div class="col-lg-12 d-flex d_sm_block"><span class="me-3">99.</span>
                                        <input type="text" min="0" name="s2_mp99"
                                            class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                    </div>
                                </div>

                                <div class="row mt-1">
                                    <div class="col-lg-12 d-flex d_sm_block"><span class="me-3">100.</span>
                                        <input type="text" min="0" name="s2_mp100"
                                            class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                    </div>
                                </div>

                                <div class="row mt-1">
                                    <div class="col-lg-12 d-flex d_sm_block"><span class="me-3">101.</span>
                                        <input type="text" min="0" name="s2_mp101"
                                            class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                    </div>
                                </div>
                                @include('layouts.footer12', ['page' => 8])
                            </div>
                        </div>
                    </div>
                </section>
                <section class="section_area py-5" id="section_nine">
                    <div class="row">
                        <div class="col-lg-10 mx-auto">
                            <div class="row px-lg-5 px-2 py-2 pt-0">
                                <div class="row mt-1">
                                    <div class="col-lg-12 d-flex d_sm_block"><span class="me-3">102.</span>
                                        <input type="text" min="0" name="s2_mp102"
                                            class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                    </div>
                                </div>
                                <div class="row mt-1">
                                    <div class="col-lg-12 d-flex d_sm_block"><span class="me-3">103.</span>
                                        <input type="text" min="0" name="s2_mp103"
                                            class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                    </div>
                                </div>


                                <div class="row mt-1">
                                    <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">104.</span>
                                        <div class="d-flex d_sm_block ">$<input type="text" min="0"
                                                name="s2_mp104"
                                                class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                        </div>
                                    </div>
                                    <div class="col-lg-10"><b>SUBTOTAL</b> (Add lines 91 through 103.)</div>
                                </div>
                                <div class="row mt-1">
                                    <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">105.</span>
                                        <div class="d-flex d_sm_block ">$<input type="text" min="0"
                                                name="s2_mp105"
                                                class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                        </div>
                                    </div>
                                    <div class="col-lg-10"><b>TOTAL MONTHLY EXPENSES:</b> (Add lines 91 through 103.)
                                    </div>
                                </div>

                                <div class="pt-4">SUMMARY</div>

                                <div class="row mt-1">
                                    <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">106.</span>
                                        <div class="d-flex d_sm_block ">$<input type="text" min="0"
                                                name="s2_mp106"
                                                class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                        </div>
                                    </div>
                                    <div class="col-lg-10"><b>TOTAL PRESENT MONTHLY NET INCOME</b> (from line 27 of
                                        SECTION I. INCOME)</div>
                                </div>
                                <div class="row mt-1">
                                    <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">107.</span>
                                        <div class="d-flex d_sm_block ">$<input type="text" min="0"
                                                name="s2_mp107"
                                                class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                        </div>
                                    </div>
                                    <div class="col-lg-10"><b>TOTAL MONTHLY EXPENSES </b> (from line 105 above)</div>
                                </div>
                                <div class="row mt-1">
                                    <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">108.</span>
                                        <div class="d-flex d_sm_block ">$<input type="text" min="0"
                                                name="s2_mp108"
                                                class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                        </div>
                                    </div>
                                    <div class="col-lg-10"><b>SURPLUS </b> (If line 106 is more than line 107,
                                        subtract line 107 from line 106. This is the amount of your surplus. Enter that
                                        amount here.)</div>
                                </div>
                                <div class="row mt-1">
                                    <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">109.</span>
                                        <div class="d-flex d_sm_block ">$<input type="text" min="0"
                                                name="s2_mp109"
                                                class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                        </div>
                                    </div>
                                    <div class="col-lg-10"><b>(DEFICIT) </b> (If line 107 is more than line 106,
                                        subtract line 106 from line 107. This is
                                        the amount of your deficit. Enter that amount here.)</div>
                                </div>
                                <div class="border border-dark bg-secondary text-dark my-4">SECTION III. ASSETS AND
                                    LIABILITIES</div>
                                <div class="fw-bold"><span class="me-4">A.</span> ASSETS (This is where you list
                                    what you OWN.) </div>
                                <div class="ms-lg-5">
                                    <div class="fw-bold">INSTRUCTIONS:</div>
                                    <div><b class="border-bottom"> STEP 1:</b><b> In column A,</b> list a description
                                        of each separate item owned by you (and/or your spouse, if
                                        this is a petition for dissolution of marriage). Blank spaces are provided if
                                        you need to list more than
                                        one of an item.</div>
                                    <div><b class="border-bottom">STEP 2: </b> If this is a petition for dissolution
                                        of marriage, check the line in Column A next to any item
                                        that you are requesting the judge award to you.</div>
                                    <div><b class="border-bottom"> STEP 3:</b> In column B, write what you believe to
                                        be the current fair market value of all items listed</div>
                                    <div><b class="border-bottom"> STEP 4: </b><b>Use column C only if this is a
                                            petition for dissolution of marriage and you believe an item
                                            is “nonmarital,” meaning it belongs to only one of you and should not be
                                            divided. </b>You should
                                        indicate to whom you believe the item belongs. (Typically, you will only use
                                        Column C if property
                                        was owned by one spouse before the marriage. See the <b>“General Information for
                                            Self-Represented
                                            Litigants” </b> found at the beginning of these forms and section 61.075(1),
                                        Florida Statutes, for
                                        definitions of “marital” and “nonmarital” assets and liabilities.)</div>
                                    <div style="padding-bottom:400px"></div>
                                </div>

                                @include('layouts.footer12', ['page' => 9])
                            </div>
                        </div>
                    </div>
                </section>
                <section class="section_area py-5" id="section_ten">
                    <div class="row">
                        <div class="col-lg-10 mx-auto">
                            <div class="row px-lg-5 px-2 py-2 pt-0">
                                <div class="table-responsive">
                                    <table class="table-bordered  border border-dark border-2 w-100">
                                        <tbody>
                                            <tr>
                                                <td class="bg-secondary" colspan="2" rowspan="2"
                                                    style="min-width: 300px;">
                                                    <div class="text-center">A</div>
                                                    <div class="text-center ">ASSETS: DESCRIPTION OF ITEM(S)</div>
                                                    <div>LIST ONLY LAST FOUR DIGITS OF ACCOUNT NUMBERS.
                                                        Check the line next to any asset(s) which you are
                                                        requesting the judge award to you.</div>
                                                </td>
                                                <td class="bg-secondary" rowspan="2">
                                                    <div>B.</div>
                                                    <div>Current Fair Market Value</div>
                                                </td>
                                                <td class="bg-secondary" colspan="2">
                                                    <div>C</div>
                                                    <div> Nonmarital (Check correct column)</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="bg-secondary">Petitioner</td>
                                                <td class="bg-secondary">Respondent</td>
                                            </tr>

                                            <tr>
                                                <td><input type="checkbox" name="a_chk1"></td>
                                                <td>
                                                    <div>Cash (on hand) <span><input type="text"
                                                                class="border-0 w-75" name="a_val1"></span></div>
                                                </td>
                                                <td>
                                                    <div class="d-flex d_sm_block ">$<input type="text"
                                                            min="0" name="b_val1"
                                                            class="border-0 text-center w-100"> </div>
                                                </td>
                                                <td><input type="checkbox" name="c_p1"></td>
                                                <td><input type="checkbox" name="c_r1"></td>
                                            </tr>

                                            <tr>
                                                <td><input type="checkbox" name="a_chk2"></td>
                                                <td>
                                                    <div>Cash (in banks or credit unions) <span><input type="text"
                                                                class="border-0 w-50" name="a_val2"></span></div>
                                                </td>
                                                <td> <input type="text" min="0" name="b_val2"
                                                        class="border-0 text-center w-100"> </td>
                                                <td><input type="checkbox" name="c_p2"></td>
                                                <td><input type="checkbox" name="c_r2"></td>
                                            </tr>

                                            <tr>
                                                <td><input type="checkbox" name="a_chk3"></td>
                                                <td>
                                                    <div> <span><input type="text" class="border-0 w-100"
                                                                name="a_val3"></span></div>
                                                </td>
                                                <td> <input type="text" min="0" name="b_val3"
                                                        class="border-0 text-center w-100"> </td>
                                                <td><input type="checkbox" name="c_p3"></td>
                                                <td><input type="checkbox" name="c_r3"></td>
                                            </tr>

                                            <tr>
                                                <td><input type="checkbox" name="a-chk4"></td>
                                                <td>
                                                    <div> Stocks/Bonds<span><input type="text"
                                                                class="border-0 w-75" name="a_val4"></span></div>
                                                </td>
                                                <td> <input type="text" min="0" name="b_val4"
                                                        class="border-0 text-center w-100"> </td>
                                                <td><input type="checkbox" name="c_p4"></td>
                                                <td><input type="checkbox" name="c_r4"></td>
                                            </tr>

                                            <tr>
                                                <td><input type="checkbox" name="a_chk5"></td>
                                                <td>
                                                    <div> <span><input type="text" class="border-0 w-100"
                                                                name="a_val5"></span></div>
                                                </td>
                                                <td> <input type="text" min="0" name="b_val5"
                                                        class="border-0 text-center w-100"> </td>
                                                <td><input type="checkbox" name="c_p5"></td>
                                                <td><input type="checkbox" name="c_r5"></td>
                                            </tr>

                                            <tr>
                                                <td><input type="checkbox" name="a_chk6"></td>
                                                <td>
                                                    <div> <span><input type="text" class="border-0 w-100"
                                                                name="a_val6"></span></div>
                                                </td>
                                                <td> <input type="text" min="0" name="b_val6"
                                                        class="border-0 text-center w-100"> </td>
                                                <td><input type="checkbox" name="c_p6"></td>
                                                <td><input type="checkbox" name="c_r6"></td>
                                            </tr>

                                            <tr>
                                                <td> </td>
                                                <td>Notes (money owed to you in writing)</td>
                                                <td> </td>
                                                <td> </td>
                                                <td> </td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" name="a_chk7"></td>
                                                <td>
                                                    <div> <span><input type="text"
                                                                class="border-0 w-100 text-center"
                                                                name="a_val7"></span></div>
                                                </td>
                                                <td> <input type="text" min="0" name="b_val7"
                                                        class="border-0 text-center w-100"> </td>
                                                <td><input type="checkbox" name="c_p7"></td>
                                                <td><input type="checkbox" name="c_r7"></td>
                                            </tr>

                                            <tr>
                                                <td><input type="checkbox" name="a_chk8"></td>
                                                <td>
                                                    <div> <span><input type="text"
                                                                class="border-0 w-100 text-center"
                                                                name="a_val8"></span></div>
                                                </td>
                                                <td> <input type="text" min="0" name="b_val8"
                                                        class="border-0 text-center w-100"> </td>
                                                <td><input type="checkbox" name="c_p8"></td>
                                                <td><input type="checkbox" name="c_r8"></td>
                                            </tr>

                                            <tr>
                                                <td><input type="checkbox" name="a_chk9"></td>
                                                <td>Money owed to you (not evidenced by a note)</td>
                                                <td> <input type="text" min="0" name="b_val9"
                                                        class="border-0 text-center w-100"> </td>
                                                <td><input type="checkbox" name="c_p9"></td>
                                                <td><input type="checkbox" name="c_r9"></td>
                                            </tr>

                                            <tr>
                                                <td><input type="checkbox" name="a_chk10"></td>
                                                <td>
                                                    <div> <span><input type="text"
                                                                class="border-0 w-100 text-center"
                                                                name="a_val9"></span></div>
                                                </td>
                                                <td> <input type="text" min="0" name="b_val10"
                                                        class="border-0 text-center w-100"> </td>
                                                <td><input type="checkbox" name="c_p10"></td>
                                                <td><input type="checkbox" name="c_r10"></td>
                                            </tr>

                                            <tr>
                                                <td><input type="checkbox" name="a_chk11"></td>
                                                <td>
                                                    <div> <span><input type="text"
                                                                class="border-0 w-100 text-center"
                                                                name="a_val10"></span></div>
                                                </td>
                                                <td> <input type="text" min="0" name="b_val11"
                                                        class="border-0 text-center w-100"> </td>
                                                <td><input type="checkbox" name="c_p11"></td>
                                                <td><input type="checkbox" name="c_r11"></td>
                                            </tr>

                                            <tr>
                                                <td><input type="checkbox" name="a_chk12"></td>
                                                <td class="d-flex">Real estate: (Home) <input type="text"
                                                        class="border-0 w-75" name="a_val11"></span></td>
                                                <td> <input type="text" min="0" name="b_val12"
                                                        class="border-0 text-center w-100"> </td>
                                                <td><input type="checkbox" name="c_p12"></td>
                                                <td><input type="checkbox" name="c_r12"></td>
                                            </tr>

                                            <tr>
                                                <td><input type="checkbox" name="a_chk13"></td>
                                                <td>(Other) <input type="text" class="border-0 w-75"
                                                        name="a_val12"></span></td>
                                                <td> <input type="text" min="0" name="b_val13"
                                                        class="border-0 text-center w-100"> </td>
                                                <td><input type="checkbox" name="c_p13"></td>
                                                <td><input type="checkbox" name="c_r13"></td>
                                            </tr>

                                            <tr>
                                                <td><input type="checkbox" name="a_chk14"></td>
                                                <td>
                                                    <div> <span><input type="text"
                                                                class="border-0 w-100 text-center"
                                                                name="a_val13"></span></div>
                                                </td>
                                                <td> <input type="text" min="0" name="b_val14"
                                                        class="border-0 text-center w-100"> </td>
                                                <td><input type="checkbox" name="c_p14"></td>
                                                <td><input type="checkbox" name="c_r14"></td>
                                            </tr>

                                            <tr>
                                                <td><input type="checkbox" name="a_chk15"></td>
                                                <td>
                                                    <div> <span><input type="text"
                                                                class="border-0 w-100 text-center"
                                                                name="a_val14"></span></div>
                                                </td>
                                                <td> <input type="text" min="0" name="b_val15"
                                                        class="border-0 text-center w-100"> </td>
                                                <td><input type="checkbox" name="c_p15"></td>
                                                <td><input type="checkbox" name="c_r15"></td>
                                            </tr>

                                            <tr>
                                                <td><input type="checkbox" name="a_chk16"></td>
                                                <td>
                                                    <div> <span><input type="text"
                                                                class="border-0 w-100 text-center"
                                                                name="a_val15"></span></div>
                                                </td>
                                                <td> <input type="text" min="0" name="b_val16"
                                                        class="border-0 text-center w-100"> </td>
                                                <td><input type="checkbox" name="c_p16"></td>
                                                <td><input type="checkbox" name="c_r16"></td>
                                            </tr>

                                            <tr>
                                                <td><input type="checkbox" name="a_chk17"></td>
                                                <td>
                                                    <div> <span><input type="text"
                                                                class="border-0 w-100 text-center"
                                                                name="a_val16"></span></div>
                                                </td>
                                                <td> <input type="text" min="0" name="b_val17"
                                                        class="border-0 text-center w-100"> </td>
                                                <td><input type="checkbox" name="c_p17"></td>
                                                <td><input type="checkbox" name="c_r17"></td>
                                            </tr>

                                            <tr>
                                                <td><input type="checkbox" name="a_chk18"></td>
                                                <td>
                                                    <div> <span><input type="text"
                                                                class="border-0 w-100 text-center"
                                                                name="a_val17"></span></div>
                                                </td>
                                                <td> <input type="text" min="0" name="b_val18"
                                                        class="border-0 text-center w-100"> </td>
                                                <td><input type="checkbox" name="c_p18"></td>
                                                <td><input type="checkbox" name="c_r18"></td>
                                            </tr>

                                            <tr>
                                                <td><input type="checkbox" name="a_chk19"></td>
                                                <td>
                                                    <div>Business interests<span><input type="text"
                                                                class="border-0 w-75" name="a_val18"></span></div>
                                                </td>
                                                <td><input type="text" min="0" name="b_val19"
                                                        class="border-0 text-center w-100"></td>
                                                <td><input type="checkbox" name="c_p19"></td>
                                                <td><input type="checkbox" name="c_r19"></td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" name="a_chk20"></td>
                                                <td>
                                                    <div> <span><input type="text"
                                                                class="border-0 w-100 text-center"
                                                                name="a_val19"></span></div>
                                                </td>
                                                <td> <input type="text" min="0" name="b_val20"
                                                        class="border-0 text-center w-100"> </td>
                                                <td><input type="checkbox" name="c_p20"></td>
                                                <td><input type="checkbox" name="c_r20"></td>
                                            </tr>

                                            <tr>
                                                <td><input type="checkbox" name="a_chk21"></td>
                                                <td>
                                                    <div> <span><input type="text"
                                                                class="border-0 w-100 text-center"
                                                                name="a_val20"></span></div>
                                                </td>
                                                <td> <input type="text" min="0" name="b_val21"
                                                        class="border-0 text-center w-100"> </td>
                                                <td><input type="checkbox" name="c_p21"></td>
                                                <td><input type="checkbox" name="c_r21"></td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" name="a_chk22"></td>
                                                <td>
                                                    <div> <span><input type="text"
                                                                class="border-0 w-100 text-center"
                                                                name="a_val21"></span></div>
                                                </td>
                                                <td> <input type="text" min="0" name="b_val22"
                                                        class="border-0 text-center w-100"> </td>
                                                <td><input type="checkbox" name="c_p22"></td>
                                                <td><input type="checkbox" name="c_r22"></td>
                                            </tr>

                                            <tr>
                                                <td><input type="checkbox" name="a_chk23"></td>
                                                <td>
                                                    <div> <span><input type="text"
                                                                class="border-0 w-100 text-center"
                                                                name="a_val22"></span></div>
                                                </td>
                                                <td> <input type="text" min="0" name="b_val23"
                                                        class="border-0 text-center w-100"> </td>
                                                <td><input type="checkbox" name="c_p23"></td>
                                                <td><input type="checkbox" name="c_r23"></td>
                                            </tr>


                                            <tr>
                                                <td><input type="checkbox" name="a_chk24"></td>
                                                <td>
                                                    <div>Automobiles<span><input type="text"
                                                                class="border-0 w-75" name="a_val23"></span></div>
                                                </td>
                                                <td><input type="text" min="0" name="b_val24"
                                                        class="border-0 text-center w-100"></td>
                                                <td><input type="checkbox" name="c_p24"></td>
                                                <td><input type="checkbox" name="c_r24"></td>
                                            </tr>

                                            <tr>
                                                <td><input type="checkbox" name="a_chk25"></td>
                                                <td>
                                                    <div> <span><input type="text"
                                                                class="border-0 w-100 text-center"
                                                                name="a_val24"></span></div>
                                                </td>
                                                <td> <input type="text" min="0" name="b_val25"
                                                        class="border-0 text-center w-100"> </td>
                                                <td><input type="checkbox" name="c_p25"></td>
                                                <td><input type="checkbox" name="c_r25"></td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" name="a_chk26"></td>
                                                <td>
                                                    <div> <span><input type="text"
                                                                class="border-0 w-100 text-center"
                                                                name="a_val25"></span></div>
                                                </td>
                                                <td> <input type="text" min="0" name="b_val26"
                                                        class="border-0 text-center w-100"> </td>
                                                <td><input type="checkbox" name="c_p26"></td>
                                                <td><input type="checkbox" name="c_r26"></td>
                                            </tr>

                                            <tr>
                                                <td><input type="checkbox" name="a_chk27"></td>
                                                <td>
                                                    <div> <span><input type="text"
                                                                class="border-0 w-100 text-center"
                                                                name="a_val26"></span></div>
                                                </td>
                                                <td> <input type="text" min="0" name="b_val27"
                                                        class="border-0 text-center w-100"> </td>
                                                <td><input type="checkbox" name="c_p27"></td>
                                                <td><input type="checkbox" name="c_r27"></td>
                                            </tr>


                                            <tr>
                                                <td><input type="checkbox" name="a_chk28"></td>
                                                <td>
                                                    <div>Boats<span><input type="text" class="border-0 w-75"
                                                                name="a_val27"></span></div>
                                                </td>
                                                <td><input type="text" min="0" name="b_val28"
                                                        class="border-0 text-center w-100"></td>
                                                <td><input type="checkbox" name="c_p28"></td>
                                                <td><input type="checkbox" name="c_r28"></td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" name="a_chk29"></td>
                                                <td>
                                                    <div> <span><input type="text"
                                                                class="border-0 w-100 text-center"
                                                                name="a_val28"></span></div>
                                                </td>
                                                <td> <input type="text" min="0" name="b_val29"
                                                        class="border-0 text-center w-100"> </td>
                                                <td><input type="checkbox" name="c_p29"></td>
                                                <td><input type="checkbox" name="c_r29"></td>
                                            </tr>

                                            <tr>
                                                <td><input type="checkbox" name="a_chk30"></td>
                                                <td>
                                                    <div> <span><input type="text"
                                                                class="border-0 w-100 text-center"
                                                                name="a_val29"></span></div>
                                                </td>
                                                <td> <input type="text" min="0" name="b_val30"
                                                        class="border-0 text-center w-100"> </td>
                                                <td><input type="checkbox" name="c_p30"></td>
                                                <td><input type="checkbox" name="c_r30"></td>
                                            </tr>
                                        </tbody>

                                    </table>
                                </div>
                                @include('layouts.footer12', ['page' => 10])
                            </div>
                        </div>
                    </div>
                </section>
                <section class="section_area py-5" id="section_eleven">
                    <div class="row">
                        <div class="col-lg-10 mx-auto">
                            <div class="row px-lg-5 px-2 py-2 pt-0">
                                <div class="table-responsive">
                                    <table class="table-bordered  border border-dark border-2 w-100">
                                        <tbody>


                                            <tr>
                                                <td><input type="checkbox" name="a_chk31" class="m-1"></td>
                                                <td>
                                                    <div>Other vehicles<span><input type="text"
                                                                class="border-0 w-50" name="a_val30"></span></div>
                                                </td>
                                                <td><input type="text" min="0" name="b_val31"
                                                        class="border-0 text-center w-100"></td>
                                                <td><input type="checkbox" name="c_p31" class="my-1 me-5 "
                                                        style="margin-right: 75px !important"></td>
                                                <td><input type="checkbox" name="c_r31" class="my-1 me-5 "
                                                        style="margin-right: 85px !important"></td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" name="a_chk32"></td>
                                                <td>
                                                    <div> <span><input type="text"
                                                                class="border-0 w-100 text-center"
                                                                name="a_val31"></span></div>
                                                </td>
                                                <td> <input type="text" min="0" name="b_val32"
                                                        class="border-0 text-center w-100"> </td>
                                                <td><input type="checkbox" name="c_p32"></td>
                                                <td><input type="checkbox" name="c_r32"></td>
                                            </tr>

                                            <tr>
                                                <td><input type="checkbox" name="a_chk33"></td>
                                                <td>
                                                    <div> <span><input type="text"
                                                                class="border-0 w-100 text-center"
                                                                name="a_val32"></span></div>
                                                </td>
                                                <td> <input type="text" min="0" name="b_val33"
                                                        class="border-0 text-center w-100"> </td>
                                                <td><input type="checkbox" name="c_p33"></td>
                                                <td><input type="checkbox" name="c_r33"></td>
                                            </tr>


                                            <tr>
                                                <td><input type="checkbox" name="a_chk34"></td>
                                                <td>
                                                    <div>Retirement plans (Profit Sharing, Pension, IRA,
                                                        401(k)s, etc.)<span><input type="text"
                                                                class="border-0 w-25" name="a_val33"></span></div>
                                                </td>
                                                <td><input type="text" min="0" name="b_val34"
                                                        class="border-0 text-center "></td>
                                                <td><input type="checkbox" name="c_p34"></td>
                                                <td><input type="checkbox" name="c_r34"></td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" name="a_chk35"></td>
                                                <td>
                                                    <div> <span><input type="text"
                                                                class="border-0 w-100 text-center"
                                                                name="a_val34"></span></div>
                                                </td>
                                                <td> <input type="text" min="0" name="b_val35"
                                                        class="border-0 text-center w-100"> </td>
                                                <td><input type="checkbox" name="c_p35"></td>
                                                <td><input type="checkbox" name="c_r35"></td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" name="a_chk36"></td>
                                                <td>
                                                    <div> <span><input type="text"
                                                                class="border-0 w-100 text-center"
                                                                name="a_val35"></span></div>
                                                </td>
                                                <td> <input type="text" min="0" name="b_val36"
                                                        class="border-0 text-center w-100"> </td>
                                                <td><input type="checkbox" name="c_p36"></td>
                                                <td><input type="checkbox" name="c_r36"></td>
                                            </tr>

                                            <tr>
                                                <td><input type="checkbox" name="a_chk37"></td>
                                                <td>
                                                    <div> <span><input type="text"
                                                                class="border-0 w-100 text-center"
                                                                name="a_val36"></span></div>
                                                </td>
                                                <td> <input type="text" min="0" name="b_val37"
                                                        class="border-0 text-center w-100"> </td>
                                                <td><input type="checkbox" name="c_p37"></td>
                                                <td><input type="checkbox" name="c_r37"></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>Furniture & furnishings in home</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>

                                            <tr>
                                                <td><input type="checkbox" name="a_chk38"></td>
                                                <td>
                                                    <div> <span><input type="text"
                                                                class="border-0 w-100 text-center"
                                                                name="a_val37"></span></div>
                                                </td>
                                                <td> <input type="text" min="0" name="b_val38"
                                                        class="border-0 text-center w-100"> </td>
                                                <td><input type="checkbox" name="c_p38"></td>
                                                <td><input type="checkbox" name="c_r38"></td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" name="a_chk39"></td>
                                                <td>
                                                    <div>Furniture & furnishings elsewhere <span><input type="text"
                                                                class="border-0  text-center" name="a_val38"></span>
                                                    </div>
                                                </td>
                                                <td> <input type="text" min="0" name="b_val39"
                                                        class="border-0 text-center "> </td>
                                                <td><input type="checkbox" name="c_p39"></td>
                                                <td><input type="checkbox" name="c_r39"></td>
                                            </tr>

                                            <tr>
                                                <td><input type="checkbox" name="a_chk40"></td>
                                                <td>
                                                    <div> <span><input type="text"
                                                                class="border-0 w-100 text-center"
                                                                name="a_val39"></span></div>
                                                </td>
                                                <td> <input type="text" min="0" name="b_val40"
                                                        class="border-0 text-center w-100"> </td>
                                                <td><input type="checkbox" name="c_p40"></td>
                                                <td><input type="checkbox" name="c_r40"></td>
                                            </tr>

                                            <tr>
                                                <td><input type="checkbox" name="a_chk41"></td>
                                                <td>
                                                    <div>Collectibles <span><input type="text"
                                                                class="border-0 text-center" name="a_val40"></span>
                                                    </div>
                                                </td>
                                                <td> <input type="text" min="0" name="b_val41"
                                                        class="border-0 text-center w-100"> </td>
                                                <td><input type="checkbox" name="c_p41"></td>
                                                <td><input type="checkbox" name="c_r41"></td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" name="a_chk42"></td>
                                                <td>
                                                    <div> <span><input type="text"
                                                                class="border-0 w-100 text-center"
                                                                name="a_val41"></span></div>
                                                </td>
                                                <td> <input type="text" min="0" name="b_val42"
                                                        class="border-0 text-center w-100"> </td>
                                                <td><input type="checkbox" name="c_p42"></td>
                                                <td><input type="checkbox" name="c_r42"></td>
                                            </tr>

                                            <tr>
                                                <td><input type="checkbox" name="a_chk43"></td>
                                                <td>
                                                    <div>Jewelry <span><input type="text"
                                                                class="border-0  text-center" name="a_val42"></span>
                                                    </div>
                                                </td>
                                                <td> <input type="text" min="0" name="b_val43"
                                                        class="border-0 text-center w-100"> </td>
                                                <td><input type="checkbox" name="c_p43"></td>
                                                <td><input type="checkbox" name="c_r43"></td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" name="a_chk44"></td>
                                                <td>
                                                    <div> <span><input type="text"
                                                                class="border-0 w-100 text-center"
                                                                name="a_val43"></span></div>
                                                </td>
                                                <td> <input type="text" min="0" name="b_val44"
                                                        class="border-0 text-center w-100"> </td>
                                                <td><input type="checkbox" name="c_p44"></td>
                                                <td><input type="checkbox" name="c_r44"></td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" name="a_chk45"></td>
                                                <td>
                                                    <div>Life insurance (cash surrender value) <span><input
                                                                type="text" class="border-0  text-center"
                                                                name="a_val44"></span></div>
                                                </td>
                                                <td> <input type="text" min="0" name="b_val45"
                                                        class="border-0 text-center w-100"> </td>
                                                <td><input type="checkbox" name="c_p45"></td>
                                                <td><input type="checkbox" name="c_r45"></td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" name="a_chk46"></td>
                                                <td>
                                                    <div> <span><input type="text"
                                                                class="border-0 w-100 text-center"
                                                                name="a_val45"></span></div>
                                                </td>
                                                <td> <input type="text" min="0" name="b_val46"
                                                        class="border-0 text-center w-100"> </td>
                                                <td><input type="checkbox" name="c_p46"></td>
                                                <td><input type="checkbox" name="c_r46"></td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" name="a_chk47"></td>
                                                <td>
                                                    <div> <span><input type="text"
                                                                class="border-0 w-100 text-center"
                                                                name="a_val46"></span></div>
                                                </td>
                                                <td> <input type="text" min="0" name="b_val47"
                                                        class="border-0 text-center w-100"> </td>
                                                <td><input type="checkbox" name="c_p47"></td>
                                                <td><input type="checkbox" name="c_r47"></td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" name="a_chk48"></td>
                                                <td>
                                                    <div>Sporting and entertainment (T.V., stereo, etc.)
                                                        equipment <span><input type="text" style="width:20px"
                                                                class="border-0 text-center" name="a_val47"></span>
                                                    </div>
                                                </td>
                                                <td> <input type="text" min="0" name="b_val48"
                                                        class="border-0 text-center w-100"> </td>
                                                <td><input type="checkbox" name="c_p48"></td>
                                                <td><input type="checkbox" name="c_r48"></td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" name="a_chk49"></td>
                                                <td>
                                                    <div> <span><input type="text"
                                                                class="border-0 w-100 text-center"
                                                                name="a_val48"></span></div>
                                                </td>
                                                <td> <input type="text" min="0" name="b_val49"
                                                        class="border-0 text-center w-100"> </td>
                                                <td><input type="checkbox" name="c_p49"></td>
                                                <td><input type="checkbox" name="c_r49"></td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" name="a_chk50"></td>
                                                <td>
                                                    <div> <span><input type="text"
                                                                class="border-0 w-100 text-center"
                                                                name="a_val49"></span></div>
                                                </td>
                                                <td> <input type="text" min="0" name="b_val50"
                                                        class="border-0 text-center w-100"> </td>
                                                <td><input type="checkbox" name="c_p50"></td>
                                                <td><input type="checkbox" name="c_r50"></td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" name="a_chk51"></td>
                                                <td>
                                                    <div> <span><input type="text"
                                                                class="border-0 w-100 text-center"
                                                                name="a_val50"></span></div>
                                                </td>
                                                <td> <input type="text" min="0" name="b_val51"
                                                        class="border-0 text-center w-100"> </td>
                                                <td><input type="checkbox" name="c_p51"></td>
                                                <td><input type="checkbox" name="c_r51"></td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" name="a_chk52"></td>
                                                <td>
                                                    <div> <span><input type="text"
                                                                class="border-0 w-100 text-center"
                                                                name="a_val51"></span></div>
                                                </td>
                                                <td> <input type="text" min="0" name="b_val52"
                                                        class="border-0 text-center w-100"> </td>
                                                <td><input type="checkbox" name="c_p52"></td>
                                                <td><input type="checkbox" name="c_r52"></td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" name="a_chk53"></td>
                                                <td>
                                                    <div>Other assets: <span><input type="text"
                                                                class="border-0  text-center" name="a_val52"></span>
                                                    </div>
                                                </td>
                                                <td> <input type="text" min="0" name="b-val53"
                                                        class="border-0 text-center w-100"> </td>
                                                <td><input type="checkbox" name="c_p53"></td>
                                                <td><input type="checkbox" name="c_r53"></td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" name="a_chk54"></td>
                                                <td>
                                                    <div> <span><input type="text"
                                                                class="border-0 w-100 text-center"
                                                                name="a_val53"></span></div>
                                                </td>
                                                <td> <input type="text" min="0" name="b_val54"
                                                        class="border-0 text-center w-100"> </td>
                                                <td><input type="checkbox" name="c_p54"></td>
                                                <td><input type="checkbox" name="c_r54"></td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" name="a_chk55"></td>
                                                <td>
                                                    <div> <span><input type="text"
                                                                class="border-0 w-100 text-center"
                                                                name="a_val54"></span></div>
                                                </td>
                                                <td> <input type="text" min="0" name="b_val55"
                                                        class="border-0 text-center w-100"> </td>
                                                <td><input type="checkbox" name="c_p55"></td>
                                                <td><input type="checkbox" name="c_r55"></td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" name="a_chk56"></td>
                                                <td>
                                                    <div> <span><input type="text"
                                                                class="border-0 w-100 text-center"
                                                                name="a_val55"></span></div>
                                                </td>
                                                <td> <input type="text" min="0" name="b_val56"
                                                        class="border-0 text-center w-100"> </td>
                                                <td><input type="checkbox" name="c_p56"></td>
                                                <td><input type="checkbox" name="c_r56"></td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" name="a_chk57"></td>
                                                <td>
                                                    <div> <span><input type="text"
                                                                class="border-0 w-100 text-center"
                                                                name="a_val56"></span></div>
                                                </td>
                                                <td> <input type="text" min="0" name="b_val57"
                                                        class="border-0 text-center w-100"> </td>
                                                <td><input type="checkbox" name="c_p57"></td>
                                                <td><input type="checkbox" name="c_r57"></td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" name="a_chk58"></td>
                                                <td>
                                                    <div> <span><input type="text"
                                                                class="border-0 w-100 text-center"
                                                                name="a_val57"></span></div>
                                                </td>
                                                <td> <input type="text" min="0" name="b_val58"
                                                        class="border-0 text-center w-100"> </td>
                                                <td><input type="checkbox" name="c_p58"></td>
                                                <td><input type="checkbox" name="c_r58"></td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" name="a_chk_59"></td>
                                                <td>
                                                    <div> <span><input type="text"
                                                                class="border-0 w-100 text-center"
                                                                name="a_val58"></span></div>
                                                </td>
                                                <td> <input type="text" min="0" name="b_val59"
                                                        class="border-0 text-center w-100"> </td>
                                                <td><input type="checkbox" name="c_p59"></td>
                                                <td><input type="checkbox" name="c_r59"></td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" name="a_chk60"></td>
                                                <td>
                                                    <div> <span><input type="text"
                                                                class="border-0 w-100 text-center"
                                                                name="a_val59"></span></div>
                                                </td>
                                                <td> <input type="text" min="0" name="b_val60"
                                                        class="border-0 text-center w-100"> </td>
                                                <td><input type="checkbox" name="c_p60"></td>
                                                <td><input type="checkbox" name="c_r60"></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="bg-secondary">Total Assets (add column B)
                                                </td>
                                                <td>
                                                    <div class="d-flex">$<input type="text" min="0"
                                                            name="total_b_val" class="border-0 text-center w-100">
                                                    </div>
                                                </td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                        </tbody>

                                    </table>
                                </div>
                                <div class="pt-5">
                                    @include('layouts.footer12', ['page' => 11])
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="section_area py-5" id="section_twelve">
                    <div class="row">
                        <div class="col-lg-10 mx-auto">
                            <div class="row px-lg-5 px-2 py-2 pt-0">
                                <div class="fw-bold"><span class="me-4">B.</span> LIABILITIES/DEBTS (This is where
                                    you list what you OWE.) </div>
                                <div class="ms-lg-5">
                                    <div class="fw-bold">INSTRUCTIONS:</div>
                                    <div><b class="border-bottom"> STEP 1:</b><b> In column A,</b> list a description
                                        of each separate debt owed by you (and/or your spouse, if
                                        this is a petition for dissolution of marriage). Blank spaces are provided if
                                        you need to list more than
                                        one of an item.</div>
                                    <div><b class="border-bottom">STEP 2: </b> If this is a petition for dissolution
                                        of marriage, check the line in Column A next to any debt(s)
                                        for which you believe you should be responsible.</div>
                                    <div><b class="border-bottom"> STEP 3:</b> <b>In column B,</b> write what you
                                        believe to be the current amount owed for all items listed.</div>
                                    <div><b class="border-bottom"> STEP 4: </b><b>Use column C only if this is a
                                            petition for dissolution of marriage and you believe an item
                                            is “nonmarital,” meaning it belongs to only one of you and should not be
                                            divided. </b>You should
                                        indicate to whom you believe the item belongs. (Typically, you will only use
                                        Column C if property
                                        was owned by one spouse before the marriage. See the <b>“General Information for
                                            Self-Represented
                                            Litigants” </b> found at the beginning of these forms and section 61.075(1),
                                        Florida Statutes, for
                                        definitions of “marital” and “nonmarital” assets and liabilities.)</div>
                                    <div style="padding-bottom:500px"></div>
                                </div>

                                @include('layouts.footer12', ['page' => 12])
                            </div>
                        </div>
                    </div>
                </section>
                <section class="section_area py-5" id="section_thirteen">
                    <div class="row">
                        <div class="col-lg-10 mx-auto">
                            <div class="row px-lg-5 px-2 py-2 pt-0">
                                <div class="table-responsive">
                                    <table class="table-bordered  border border-dark border-2 w-100">
                                        <tbody>
                                            <tr>
                                                <td class="bg-secondary" colspan="2" rowspan="2"
                                                    style="min-width: 300px;">
                                                    <div class="text-center">A</div>
                                                    <div class="text-center ">LIABILITIES: DESCRIPTION OF ITEM(S)
                                                    </div>
                                                    <div>LIST ONLY LAST FOUR DIGITS OF ACCOUNT NUMBERS.
                                                        Check the line next to any debt(s) for which you believe
                                                        you should be responsible.</div>
                                                </td>
                                                <td class="bg-secondary" rowspan="2">
                                                    <div>B.</div>
                                                    <div>Current Amount
                                                        Owed</div>
                                                </td>
                                                <td class="bg-secondary" colspan="2">
                                                    <div>C</div>
                                                    <div> Nonmarital
                                                        (Check correct column)</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="bg-secondary">Petitioner</td>
                                                <td class="bg-secondary">Respondent</td>
                                            </tr>

                                            <tr>
                                                <td><input type="checkbox" name="l_chk1"></td>
                                                <td>
                                                    <div>Mortgages on real estate: First mortgage on home <span><input
                                                                type="text" class="border-0 w-25"
                                                                name="l_a1"></span></div>
                                                </td>
                                                <td>
                                                    <div class="d-flex d_sm_block ">$<input type="text"
                                                            min="0" name="l_b1"
                                                            class="border-0 text-center w-100"> </div>
                                                </td>
                                                <td><input type="checkbox" name="lc_p1"></td>
                                                <td><input type="checkbox" name="lc_r1"></td>
                                            </tr>

                                            <tr>
                                                <td><input type="checkbox" name="l_chk2"></td>
                                                <td>
                                                    <div>Second mortgage on home <span><input type="text"
                                                                class="border-0 w-50" name="l_a2"></span></div>
                                                </td>
                                                <td> <input type="text" min="0" name="l_b2"
                                                        class="border-0 text-center w-100"> </td>
                                                <td><input type="checkbox" name="lc_p2"></td>
                                                <td><input type="checkbox" name="lc_r2"></td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" name="l_chk3"></td>
                                                <td>
                                                    <div>Other mortgages <span><input type="text"
                                                                class="border-0 w-50" name="l-a3"></span></div>
                                                </td>
                                                <td> <input type="text" min="0" name="l_b3"
                                                        class="border-0 text-center w-100"> </td>
                                                <td><input type="checkbox" name="lc_p3"></td>
                                                <td><input type="checkbox" name="lc_r3"></td>
                                            </tr>

                                            <tr>
                                                <td><input type="checkbox" name="l_chk4"></td>
                                                <td>
                                                    <div> <span><input type="text" class="border-0 w-100"
                                                                name="l_a4"></span></div>
                                                </td>
                                                <td> <input type="text" min="0" name="l_b4"
                                                        class="border-0 text-center w-100"> </td>
                                                <td><input type="checkbox" name="lc_p4"></td>
                                                <td><input type="checkbox" name="lc_r4"></td>
                                            </tr>

                                            <tr>
                                                <td><input type="checkbox" name="l_chk5"></td>
                                                <td>
                                                    <div> Charge/credit card accounts<span><input type="text"
                                                                class="border-0 w-50" name="l_a5"></span></div>
                                                </td>
                                                <td> <input type="text" min="0" name="l_b5"
                                                        class="border-0 text-center w-100"> </td>
                                                <td><input type="checkbox" name="lc_p5"></td>
                                                <td><input type="checkbox" name="lc_r5"></td>
                                            </tr>

                                            <tr>
                                                <td><input type="checkbox" name="l_chk6"></td>
                                                <td>
                                                    <div> <span><input type="text" class="border-0 w-100"
                                                                name="l_a6"></span></div>
                                                </td>
                                                <td> <input type="text" min="0" name="l_b6"
                                                        class="border-0 text-center w-100"> </td>
                                                <td><input type="checkbox" name="lc_p6"></td>
                                                <td><input type="checkbox" name="lc_r6"></td>
                                            </tr>

                                            <tr>
                                                <td><input type="checkbox" name="l_chk7"></td>
                                                <td>
                                                    <div> <span><input type="text" class="border-0 w-100"
                                                                name="l_a7"></span></div>
                                                </td>
                                                <td> <input type="text" min="0" name="l_b7"
                                                        class="border-0 text-center w-100"> </td>
                                                <td><input type="checkbox" name="lc_p7"></td>
                                                <td><input type="checkbox" name="lc_r7"></td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" name="l_chk8"></td>
                                                <td>
                                                    <div> <span><input type="text" class="border-0 w-100"
                                                                name="l_a8"></span></div>
                                                </td>
                                                <td> <input type="text" min="0" name="l_b8"
                                                        class="border-0 text-center w-100"> </td>
                                                <td><input type="checkbox" name="lc_p8"></td>
                                                <td><input type="checkbox" name="lc_r8"></td>
                                            </tr>

                                            <tr>
                                                <td><input type="checkbox" name="l_chk9"></td>
                                                <td>
                                                    <div> <span><input type="text" class="border-0 w-100"
                                                                name="l_a9"></span></div>
                                                </td>
                                                <td> <input type="text" min="0" name="l_b9"
                                                        class="border-0 text-center w-100"> </td>
                                                <td><input type="checkbox" name="lc_p9"></td>
                                                <td><input type="checkbox" name="lc_r9"></td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" name="l_chk10"></td>
                                                <td>
                                                    <div> <span><input type="text" class="border-0 w-100"
                                                                name="l_a10"></span></div>
                                                </td>
                                                <td> <input type="text" min="0" name="l_b10"
                                                        class="border-0 text-center w-100"> </td>
                                                <td><input type="checkbox" name="lc_p10"></td>
                                                <td><input type="checkbox" name="lc_r10"></td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" name="l_chk11"></td>
                                                <td>
                                                    <div> Auto loan<span><input type="text" class="border-0 w-75"
                                                                name="l_a11"></span></div>
                                                </td>
                                                <td> <input type="text" min="0" name="l_b11"
                                                        class="border-0 text-center w-100"> </td>
                                                <td><input type="checkbox" name="lc_p11"></td>
                                                <td><input type="checkbox" name="lc_r11"></td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" name="l_chk12"></td>
                                                <td>
                                                    <div> Auto loan<span><input type="text" class="border-0 w-75"
                                                                name="l_a12"></span></div>
                                                </td>
                                                <td> <input type="text" min="0" name="l_b12"
                                                        class="border-0 text-center w-100"> </td>
                                                <td><input type="checkbox" name="lc_p12"></td>
                                                <td><input type="checkbox" name="lc_r12"></td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" name="l_chk13"></td>
                                                <td>
                                                    <div> Bank/Credit Union loans<span><input type="text"
                                                                class="border-0 w-50" name="l_a13"></span></div>
                                                </td>
                                                <td> <input type="text" min="0" name="l_b13"
                                                        class="border-0 text-center w-100"> </td>
                                                <td><input type="checkbox" name="lc_p13"></td>
                                                <td><input type="checkbox" name="lc_r13"></td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" name="l_chk14"></td>
                                                <td>
                                                    <div> <span><input type="text" class="border-0 w-100"
                                                                name="l_a14"></span></div>
                                                </td>
                                                <td> <input type="text" min="0" name="l_b14"
                                                        class="border-0 text-center w-100"> </td>
                                                <td><input type="checkbox" name="lc_p14"></td>
                                                <td><input type="checkbox" name="lc_r14"></td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" name="l_chk15"></td>
                                                <td>
                                                    <div> <span><input type="text" class="border-0 w-100"
                                                                name="l_a15"></span></div>
                                                </td>
                                                <td> <input type="text" min="0" name="l_b15"
                                                        class="border-0 text-center w-100"> </td>
                                                <td><input type="checkbox" name="lc_p15"></td>
                                                <td><input type="checkbox" name="lc_r15"></td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" name="l_chk16"></td>
                                                <td>
                                                    <div> <span><input type="text" class="border-0 w-100"
                                                                name="l_a16"></span></div>
                                                </td>
                                                <td> <input type="text" min="0" name="l_b16"
                                                        class="border-0 text-center w-100"> </td>
                                                <td><input type="checkbox" name="lc_p16"></td>
                                                <td><input type="checkbox" name="lc_r16"></td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" name="l_chk17"></td>
                                                <td>
                                                    <div>Money you owe (not evidenced by a note)<span><input
                                                                type="text" class="border-0 w-25"
                                                                name="l_a17"></span></div>
                                                </td>
                                                <td> <input type="text" min="0" name="l_b17"
                                                        class="border-0 text-center w-100"> </td>
                                                <td><input type="checkbox" name="lc_p17"></td>
                                                <td><input type="checkbox" name="lc_r17"></td>
                                            </tr>

                                            <tr>
                                                <td><input type="checkbox" name="l_chk18"></td>
                                                <td>
                                                    <div> <span><input type="text"
                                                                class="border-0 w-100 text-center"
                                                                name="l_a18"></span></div>
                                                </td>
                                                <td> <input type="text" min="0" name="l_b18"
                                                        class="border-0 text-center w-100"> </td>
                                                <td><input type="checkbox" name="lc_r18"></td>
                                            </tr>


                                            <tr>
                                                <td><input type="checkbox" name="l_chk19"></td>
                                                <td>
                                                    <div>Judgments<span><input type="text" class="border-0 w-75"
                                                                name="l_a19"></span></div>
                                                </td>
                                                <td> <input type="text" min="0" name="l_b19"
                                                        class="border-0 text-center w-100"> </td>
                                                <td><input type="checkbox" name="lc_p19"></td>
                                                <td><input type="checkbox" name="lc_r19"></td>
                                            </tr>

                                            <tr>
                                                <td><input type="checkbox" name="l_chk20"></td>
                                                <td> <input type="text" min="0" name="l_a20"
                                                        class="border-0 text-center w-100"> </td>
                                                <td> <input type="text" min="0" name="l_b20"
                                                        class="border-0 text-center w-100"> </td>
                                                <td><input type="checkbox" name="lc_p20"></td>
                                                <td><input type="checkbox" name="lc_r20"></td>
                                            </tr>

                                            <tr>
                                                <td><input type="checkbox" name="l_chk21"></td>
                                                <td>
                                                    <div> Other<span><input type="text"
                                                                class="border-0 w-75 text-center"
                                                                name="l_a21"></span></div>
                                                </td>
                                                <td> <input type="text" min="0" name="l_b21"
                                                        class="border-0 text-center w-100"> </td>
                                                <td><input type="checkbox" name="lc_p21"></td>
                                                <td><input type="checkbox" name="lc_r21"></td>
                                            </tr>



                                            <tr>
                                                <td><input type="checkbox" name="l_chk22"></td>
                                                <td>
                                                    <div> <span><input type="text"
                                                                class="border-0 w-100 text-center"
                                                                name="l_a22"></span></div>
                                                </td>
                                                <td> <input type="text" min="0" name="l_b22"
                                                        class="border-0 text-center w-100"> </td>
                                                <td><input type="checkbox" name="lc_p22"></td>
                                                <td><input type="checkbox" name="lc_r22"></td>
                                            </tr>

                                            <tr>
                                                <td><input type="checkbox" name="l_chk23"></td>
                                                <td>
                                                    <div> <span><input type="text"
                                                                class="border-0 w-100 text-center"
                                                                name="l_a23"></span></div>
                                                </td>
                                                <td> <input type="text" min="0" name="l_b23"
                                                        class="border-0 text-center w-100"> </td>
                                                <td><input type="checkbox" name="lc_p23"></td>
                                                <td><input type="checkbox" name="lc_r23"></td>
                                            </tr>

                                            <tr>
                                                <td><input type="checkbox" name="l_chk24"></td>
                                                <td>
                                                    <div> <span><input type="text"
                                                                class="border-0 w-100 text-center"
                                                                name="l_a24"></span></div>
                                                </td>
                                                <td> <input type="text" min="0" name="l_b24"
                                                        class="border-0 text-center w-100"> </td>
                                                <td><input type="checkbox" name="lc_p24"></td>
                                                <td><input type="checkbox" name="lc_r24"></td>
                                            </tr>

                                            <tr>
                                                <td><input type="checkbox" name="l_chk25"></td>
                                                <td>
                                                    <div> <span><input type="text"
                                                                class="border-0 w-100 text-center"
                                                                name="l_a25"></span></div>
                                                </td>
                                                <td> <input type="text" min="0" name="l_b25"
                                                        class="border-0 text-center w-100"> </td>
                                                <td><input type="checkbox" name="lc_p25"></td>
                                                <td><input type="checkbox" name="lc_r25"></td>
                                            </tr>

                                            <tr>
                                                <td><input type="checkbox" name="l_chk26"></td>
                                                <td>
                                                    <div> <span><input type="text"
                                                                class="border-0 w-100 text-center"
                                                                name="l_a26"></span></div>
                                                </td>
                                                <td> <input type="text" min="0" name="l_b26"
                                                        class="border-0 text-center w-100"> </td>
                                                <td><input type="checkbox" name="lc_p26"></td>
                                                <td><input type="checkbox" name="lc_r26"></td>
                                            </tr>

                                            <tr>
                                                <td><input type="checkbox" name="l_chk27"></td>
                                                <td>
                                                    <div> <span><input type="text"
                                                                class="border-0 w-100 text-center"
                                                                name="l_a27"></span></div>
                                                </td>
                                                <td> <input type="text" min="0" name="l_b27"
                                                        class="border-0 text-center w-100"> </td>
                                                <td><input type="checkbox" name="lc_p27"></td>
                                                <td><input type="checkbox" name="lc_p28"></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="bg-secondary">Total Debts (add column B)
                                                </td>
                                                <td>
                                                    <div class="d-flex">$ <input type="text" min="0"
                                                            name="total_lb" class="border-0 text-center w-100">
                                                    </div>
                                                </td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="pt-5">
                                    @include('layouts.footer12', ['page' => 13])
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section_area py-5" id="section_fourteen">
                    <div class="row">
                        <div class="col-lg-10 mx-auto">
                            <div class="row px-lg-5 px-2 py-2 pt-0">
                                <div class="fw-bold pb-3"> <span class="me-3">C.</span> NET WORTH (excluding
                                    contingent assets and liabilities) </div>
                                <div class="row mt-1">
                                    <div class="col-lg-2 d-flex d_sm_block">
                                        <div class="d-flex d_sm_block ">$<input type="text" min="0"
                                                name="c_t_assets"
                                                class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                        </div>
                                    </div>
                                    <div class="col-lg-10"><b>Total Assets </b> (enter total of Column B in Asset
                                        Table; Section A)</div>
                                </div>
                                <div class="row mt-1">
                                    <div class="col-lg-2 d-flex d_sm_block">
                                        <div class="d-flex d_sm_block ">$<input type="text" min="0"
                                                name="c_t_liabilities"
                                                class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                        </div>
                                    </div>
                                    <div class="col-lg-10"><b>Total Liabilities </b> (enter total of Column B in
                                        Liabilities Table; Section B)</div>
                                </div>
                                <div class="row mt-1">
                                    <div class="col-lg-2 d-flex d_sm_block  bg-secondary ">
                                        <div class="d-flex d_sm_block ">$<input type="text" min="0"
                                                name="c_t_networth"
                                                class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                        </div>
                                    </div>
                                    <div class="col-lg-10  bg-secondary">
                                        <div class="fw-bold">TOTAL NET WORTH (Total Assets minus Total Liabilities)
                                        </div>
                                    </div>
                                </div>
                                <div class="row  ">
                                    <div class="col-lg-2 d-flex d_sm_block bg-secondary">

                                    </div>
                                    <div class="col-lg-10 bg-secondary">
                                        <div>(excluding contingent assets and liabilities) </div>
                                    </div>
                                </div>
                                <div class="fw-bold"><span class="me-lg-3"> D.</span> CONTINGENT ASSETS AND
                                    LIABILITIES</div>
                                <div class="ms-lg-5">
                                    <div class="fw-bold">INSTRUCTIONS:</div>
                                    <div>If you have any <b>POSSIBLE assets</b> (income potential, accrued vacation or
                                        sick leave, bonus, inheritance,
                                        etc.) or <b>POSSIBLE liabilities</b> (possible lawsuits, future unpaid taxes,
                                        contingent tax liabilities, debts
                                        assumed by another), you must list them here.</div>

                                </div>
                                <div class="table-responsive">
                                    <table class="table-bordered  border border-dark border-2 w-100">
                                        <tbody>
                                            <tr>
                                                <td class="bg-secondary" colspan="2" rowspan="2"
                                                    style="min-width: 300px;">
                                                    <div class="text-center">A</div>
                                                    <div class="text-center ">Contingent Assets</div>
                                                    <div>Check the line next to any contingent asset(s) which
                                                        you are requesting the judge award to you.</div>
                                                </td>
                                                <td class="bg-secondary text-center my-auto" rowspan="2">
                                                    <div>B.</div>
                                                    <div>Possible Value</div>
                                                </td>
                                                <td class="bg-secondary text-center" colspan="2">
                                                    <div>C</div>
                                                    <div>Nonmarital
                                                        (Check correct column)</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="bg-secondary">Petitioner</td>
                                                <td class="bg-secondary">Respondent</td>
                                            </tr>

                                            <tr>
                                                <td><input type="checkbox" name="d_a_chk1"></td>
                                                <td> <span><input type="text" class="border-0 w-100"
                                                            name="d_a1">
                                                </td>
                                                <td>
                                                    <div class="d-flex d_sm_block ">$<input type="text"
                                                            min="0" name="d_b1"
                                                            class="border-0 text-center w-100"> </div>
                                                </td>
                                                <td><input type="checkbox" name="dc_p1"></td>
                                                <td><input type="checkbox" name="dc_r1"></td>
                                            </tr>

                                            <tr>
                                                <td><input type="checkbox" name="d_a_chk2"></td>
                                                <td> <input type="text" class="border-0 w-100" name="d_a2">
                                                </td>
                                                <td> <input type="text" min="0" name="d_b2"
                                                        class="border-0 text-center w-100"> </td>
                                                <td><input type="checkbox" name="dc_p2"></td>
                                                <td><input type="checkbox" name="dc_r2"></td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" name="d_a_chk3"></td>
                                                <td> <input type="text" class="border-0 w-100" name="d_a3">
                                                </td>
                                                <td> <input type="text" min="0" name="d_b3"
                                                        class="border-0 text-center w-100"> </td>
                                                <td><input type="checkbox" name="dc_p3"></td>
                                                <td><input type="checkbox" name="dc_r3"></td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" name="d_a_chk4"></td>
                                                <td> <input type="text" class="border-0 w-100" name="d_a4">
                                                </td>
                                                <td> <input type="text" min="0" name="d_b4"
                                                        class="border-0 text-center w-100"> </td>
                                                <td><input type="checkbox" name="dc_p4"></td>
                                                <td><input type="checkbox" name="dc_r4"></td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" name="d_a_chk5"></td>
                                                <td> <input type="text" class="border-0 w-100" name="d_a5">
                                                </td>
                                                <td> <input type="text" min="0" name="d_b5"
                                                        class="border-0 text-center w-100"> </td>
                                                <td><input type="checkbox" name="dc_p5"></td>
                                                <td><input type="checkbox" name="dc_r5"></td>
                                            </tr>



                                            <tr>
                                                <td colspan="2">Total Contingent Assets</td>
                                                <td>
                                                    <div class="d-flex">$ <input type="text" min="0"
                                                            name="d_total_assets"
                                                            class="border-0 text-center w-100">
                                                    </div>
                                                </td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                        </tbody>

                                    </table>


                                    <table class="table-bordered  border border-dark border-2 w-100 mt-4">
                                        <tbody>
                                            <tr>
                                                <td class="bg-secondary" colspan="2" rowspan="2"
                                                    style="min-width: 300px;">
                                                    <div class="text-center">A</div>
                                                    <div class="text-center ">Contingent Assets</div>
                                                    <div>Check the line next to any contingent asset(s) which
                                                        you are requesting the judge award to you.</div>
                                                </td>
                                                <td class="bg-secondary text-center my-auto" rowspan="2">
                                                    <div>B.</div>
                                                    <div>Possible Amount Owed</div>
                                                </td>
                                                <td class="bg-secondary text-center" colspan="2">
                                                    <div>C</div>
                                                    <div>Nonmarital (Check correct column)</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="bg-secondary">Petitioner</td>
                                                <td class="bg-secondary">Respondent</td>
                                            </tr>

                                            <tr>
                                                <td><input type="checkbox" name="dl_a_chk1"></td>
                                                <td> <span><input type="text" class="border-0 w-100"
                                                            name="dl_a1">
                                                </td>
                                                <td>
                                                    <div class="d-flex d_sm_block ">$<input type="text"
                                                            min="0" name="dl_b1"
                                                            class="border-0 text-center w-100"> </div>
                                                </td>
                                                <td><input type="checkbox" name="dl_cp1"></td>
                                                <td><input type="checkbox" name="dl_cr1"></td>
                                            </tr>

                                            <tr>
                                                <td><input type="checkbox" name="dl_a_chk2"></td>
                                                <td> <input type="text" class="border-0 w-100" name="dl_a2">
                                                </td>
                                                <td> <input type="text" min="0" name="dl_b2"
                                                        class="border-0 text-center w-100"> </td>
                                                <td><input type="checkbox" name="dl_cp2"></td>
                                                <td><input type="checkbox" name="dl_cr2"></td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" name="dl_a_chk3"></td>
                                                <td> <input type="text" class="border-0 w-100" name="dl_a3">
                                                </td>
                                                <td> <input type="text" min="0" name="dl_b3"
                                                        class="border-0 text-center w-100"> </td>
                                                <td><input type="checkbox" name="dl_cp3"></td>
                                                <td><input type="checkbox" name="dl_cr3"></td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" name="dl_a_chk4"></td>
                                                <td> <input type="text" class="border-0 w-100" name="dl_a4">
                                                </td>
                                                <td> <input type="text" min="0" name="dl_b4"
                                                        class="border-0 text-center w-100"> </td>
                                                <td><input type="checkbox" name="dl_cp4"></td>
                                                <td><input type="checkbox" name="dl_cr4"></td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" name="dl_a_chk5"></td>
                                                <td> <input type="text" class="border-0 w-100" name="dl_a5">
                                                </td>
                                                <td> <input type="text" min="0" name="dl_b5"
                                                        class="border-0 text-center w-100"> </td>
                                                <td><input type="checkbox" name="dl_cp5"></td>
                                                <td><input type="checkbox" name="dlcr5"></td>
                                            </tr>



                                            <tr>
                                                <td colspan="2">Total Contingent Liabilities </td>
                                                <td>
                                                    <div class="d-flex">$ <input type="text" min="0"
                                                            name="d_total_liabilities"
                                                            class="border-0 text-center w-100">
                                                    </div>
                                                </td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                        </tbody>

                                    </table>
                                </div>
                                <div class="fw-bold pt-3"><span class="me-3"> E.</span> CHILD SUPPORT GUIDELINES
                                    WORKSHEET. Florida Family Law Rules of Procedure Form 12.902(e),
                                    Child Support Guidelines Worksheet, MUST be filed with the court at or prior to a
                                    hearing to
                                    establish or modify child support. This requirement cannot be waived by the parties.
                                </div>

                                <div>
                                    @include('layouts.footer12', ['page' => 14])
                                </div>

                            </div>
                        </div>
                    </div>
                </section>
                <section class="section_area py-5" id="section_last">
                    <div class="row">
                        <div class="col-lg-10 mx-auto">
                            <div class="row px-lg-5 px-2 py-2 pt-0">
                                <div class="">[Check one only]</div>
                                <div class=""><input type="checkbox" name="acs1" id=""> <b>A
                                        Child Support Guidelines Worksheet IS or WILL BE filed in this case.</b> This
                                    case involves the
                                    establishment or modification of child support.</div>

                                <div class=""><input type="checkbox" name="acs2" id=""> <b>A
                                        Child Support Guidelines Worksheet IS NOT being filed in this case.</b> The
                                    establishment or modification of child support is not an issue in this case.</div>

                                <div class="fw-bold">I certify that a copy of this financial affidavit was [check all
                                    used]: <span>(<input type="checkbox" name="emailed">)</span> e-mailed
                                    <span>(<input type="checkbox" name="mailed">)</span> mailed <span>(<input
                                            type="checkbox" name="faxed">)</span>faxed <span>(<input
                                            type="checkbox" name="hand_d">)</span> hand delivered to the person(s)
                                    listed below on {date} <span><input type="text" name="bo_date"
                                            class="border-0 border-bottom footer_field" id=""></span> <span
                                        class="">.</span>
                                </div>
                            </div>


                            <div class="row px-lg-5 px-2 py-2 pt-0">
                                <div class="col-lg-6 ">
                                    <div class="fw-bold">Other party or his/her attorney:</div>
                                    <div class="">Name: <span><input type="text" name="name1"
                                                id="" class="border-0 border-bottom footer_field"
                                                style="width:288px !important"></span></div>
                                    <div class="">Address: <span><input type="text" name="address1"
                                                id="" class="border-0 border-bottom footer_field"
                                                style="width:270px !important"></span></div>
                                    <div class="">City, State, Zip: <span><input type="text"
                                                name="csz1" id=""
                                                class="border-0 border-bottom footer_field"
                                                style="width:220px !important"></span></div>
                                    <div class="">Telephone Number: <span><input type="text"
                                                name="number1" id=""
                                                class="border-0 border-bottom footer_field"></span></div>
                                    <div class="">Fax Number: <span><input type="text" name="fax_numbe1"
                                                id="" class="border-0 border-bottom footer_field"
                                                style="width:240px !important"></span></div>
                                    <div class="">E-mail Address(es): <span><input type="text"
                                                name="em_address1" id=""
                                                class="border-0 border-bottom footer_field"></span></div>
                                </div>

                                <div class="py-5 fw-bold">Under penalties of perjury, I declare that I have read this
                                    document and the facts stated in it are true.</div>
                            </div>


                            <div class="row px-lg-5 px-2 py-2 pt-0">
                                <div class="col-lg-6 ">
                                    <div class="">Dated: <span><input type="text" name="dated"
                                                id=""
                                                class="border-0 border-bottom footer_field  responsive_input"
                                                style="width:334px  !important"></span></div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="">
                                        <input type="text" name="sign_oparty" id=""
                                            class="border-0 border-bottom footer_field responsive_input"
                                            style="width:440px  !important">
                                        <div class="">Signature of Party</div>
                                    </div>
                                    <div class="">Printed Name: <span><input type="text"
                                                name="printed_name" id=""
                                                class="border-0 border-bottom footer_field responsive_input"
                                                style="width:335px !important"></span></div>
                                    <div class="">Address: <span><input type="text" name="address2"
                                                id=""
                                                class="border-0 border-bottom footer_field responsive_input"
                                                style="width:375px !important"></span></div>
                                    <div class="">City, State, Zip: <span><input type="text"
                                                name="csz2" id=""
                                                class="border-0 border-bottom footer_field responsive_input"
                                                style="width:325px !important"></span></div>
                                    <div class="">Telephone Number: <span><input type="text"
                                                name="number2" id=""
                                                class="border-0 border-bottom footer_field responsive_input"
                                                style="width: 295px !important;"></span></div>
                                    <div class="">Fax Number: <span><input type="text" name="fax_number2"
                                                id=""
                                                class="border-0 border-bottom footer_field responsive_input"
                                                style="width:345px !important"></span></div>
                                    <div class="">E-mail Address(es): <span><input type="text"
                                                name="em_address2" id=""
                                                class="border-0 border-bottom footer_field responsive_input"
                                                style="width: 300px !important;"></span></div>
                                </div>
                                <div class="py-5 fw-bold">IF A NONLAWYER HELPED YOU FILL OUT THIS FORM, HE/SHE MUST
                                    FILL IN THE BLANKS BELOW:</div>


                                <div>[fill in all blanks] This form was prepared for the: {choose only one} <span>
                                        (<input type="checkbox" name="coo_p">) </span> Petitioner <span> (<input
                                            type="checkbox" name="coo_r">) </span> Respondent <span>This form was
                                        completed with the assistance of: </div>
                                <div>{name of individual} <span> <input type="text"
                                            class="border-0 border-bottom footer_field  responsive_input"
                                            style="width: 780px;" name="no_individual"> </span> </div>
                                <div>{name of business} <span> <input type="text"
                                            class="border-0 border-bottom footer_field  responsive_input "
                                            name="no_business" style="width: 790px !important"> </span> </div>
                                <div>{address} <span> <input type="text"
                                            class="border-0 border-bottom footer_field w-75 responsive_input"
                                            name="nl_address" style="width: 860px !important"> </span> </div>
                                <div>{city} <span> <input type="text"
                                            class="border-0 border-bottom footer_field " name="nl_city"> </span>
                                    {state} <span> <input type="text"
                                            class="border-0 border-bottom footer_field " name="nl_state"> </span>
                                    {telephone number} <span> <input type="text"
                                            class="border-0 border-bottom footer_field " name="nl_tnumber"
                                            style="width: 290px !important"> </span> </div>
                            </div>
                            <div style="padding-bottom:300px;"></div>
                            @include('layouts.footer12', ['page' => 15])
                            @include('layouts.pagination', ['page' => 16])

                        </div>
                    </div>
                </section>
            </form>
        </div>
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
