{{-- 902b 11-20   FL short form.pdf --}}
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
            /* height : 100% !important; */

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
            /* border-bottom: 2px solid black !important; */
        }

        .footer_field:focus-visible {
            outline: none !important;
            border-bottom: 2px solid black !important;
        }

        @media screen and (max-width : 768px) {


            .small_text {
                height: auto !important;
            }
            .d_sm_block {
                display: block !important;

            }


            .responsive_input {
                max-width: 100% !important;
                overflow: hidden;
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
            background-color: black;
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
    <div class="container-fluid py-1 py-lg-3">
        <form action="{{ route('form17.submit') }}" method="post">
            @csrf
            <div class="container bg_color p-lg-3 p-1">
                <section class="section_area" id="first_section">

                    <div class="row">
                        <div class="col-lg-10 mx-auto">
                            @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show mt-lg-5">{{ session('success') }} <button
                                    type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                            <div class="px-lg-5 px-2 py-5">
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
                                <div class="fw-bold text-center h3 mt-3">IMPORTANT INFORMATION REGARDING E-FILING </div>

                                <div class="mt-3">
                                    The Florida Rules of General Practice and Judicial Administration now require that
                                    all petitions, pleadings,
                                    and documents be filed electronically except in certain circumstances. <span
                                        class="fw-bold">Self-represented litigants may file
                                        petitions or other pleadings or documents electronically; however, they are not
                                        required to do so.</span> If
                                    you choose to file your pleadings or other documents electronically, you must do so
                                    in accordance with
                                    Florida Rule of General Practice and Judicial Administration 2.525, and you must
                                    follow the procedures of
                                    the judicial circuit in which you file. The rules and procedures should be carefully
                                    read and followed. </div>


                                <div class="fw-bold text-center h3 mt-3">IMPORTANT INFORMATION REGARDING E-SERVICE
                                    ELECTION</div>


                                <div class="mt-3">After the initial service of process of the petition or supplemental
                                    petition by the Sheriff or certified
                                    process server, the Florida Rules of General Practice and Judicial Administration
                                    now require that all
                                    documents required or permitted to be served on the other party must be served by
                                    electronic mail (e-
                                    mail) except in certain circumstances. <b>You must strictly comply with the format
                                        requirements set forth
                                        in the Florida Rules of General Practice and Judicial Administration.</b> If you
                                    elect
                                    to participate in
                                </div>
                                {{-- @include('layouts.footer12', ['page' => 1]) --}}
                                <div class='pt-3'>Instructions for Florida Family Law Rules of Procedure Form 12.902(b), Family Law Financial Affidavit (Short Form)
                                    (10/21)</div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="section_area py-5" id="second_section">
                    <div class="row">
                        <div class="col-lg-10 mx-auto">
                            <div class="row px-lg-5 px-2 py-2 pt-0">

                                <div>
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

                                <div class="fw-bold h3 text-center mt-3">Special notes . . .</div>
                                <div class="mt-3">If you want to keep your address confidential because you have been
                                    found by a judge to be the victim of sexual battery, aggravated child abuse,
                                    aggravated stalking, harassment, aggravated battery, or domestic violence do not
                                    enter the address, telephone, and fax information at the bottom of this form.
                                    Instead, file <b> Request for Confidential Filing of Address,</b> Florida Supreme
                                    Court
                                    Approved Family Law Form
                                    12.980(h).</div>
                                <div class="mt-3">The affidavit must be completed using <b>monthly</b> income and
                                    expense
                                    amounts. If you are paid or your
                                    bills are due on a schedule which is not monthly, you must convert those amounts.
                                    Hints are provided
                                    below for making these conversions.
                                </div>

                                <div class="row  pt-2">
                                    <div class="">
                                        <div class="mt-3">
                                            <span class="fw-bold h5">Hourly</span>
                                            - If you are paid by the hour, you may convert your income to monthly as
                                            follows:
                                            <div class="row">
                                                <div class="col-lg-2 col-sm-2 col-md-2">
                                                    <div class="m-0 p-0"> Hourly amount</div>
                                                    <div class="m-0 p-0"> Weekly amount</div>
                                                    <div class="m-0 p-0"> Yearly amount</div>
                                                </div>
                                                <div class="col-lg-1 col-sm-1 col-md-1">
                                                    <div>x</div>
                                                    <div>x</div>
                                                    <div>÷</div>
                                                </div>
                                                <div class="col-lg-3 col-sm-3 col-md-3">
                                                    <div> Hours worked per week</div>
                                                    <div>52 Weeks per year</div>
                                                    <div>12 Months per year</div>
                                                </div>
                                                <div class="col-lg-1 col-sm-1 col-md-1">
                                                    <div>=</div>
                                                    <div>=</div>
                                                    <div>=</div>
                                                </div>
                                                <div class="col-lg-5 col-sm-5 col-md-5">
                                                    <div>Weekly amount</div>
                                                    <div>Yearly amount</div>
                                                    <div class="fw-bold ">Monthly Amount</div>
                                                </div>
                                            </div>

                                        </div>

                                        <div>
                                            <span class="fw-bold h5">Daily</span>
                                            - If you are paid by the day, you may convert your income to monthly as
                                            follows:
                                            <div class="row">
                                                <div class="col-lg-2 col-sm-2 col-md-2">
                                                    <div class="m-0 p-0"> Daily amount</div>
                                                    <div class="m-0 p-0"> Weekly amount</div>
                                                    <div class="m-0 p-0"> Yearly amount</div>
                                                </div>
                                                <div class="col-lg-1 col-sm-1 col-md-1">
                                                    <div>x</div>
                                                    <div>x</div>
                                                    <div>÷</div>
                                                </div>
                                                <div class="col-lg-3 col-sm-3 col-md-1">
                                                    <div>Days worked per week</div>
                                                    <div>52 Weeks per year</div>
                                                    <div>12 Months per year</div>
                                                </div>
                                                <div class="col-lg-1 col-sm-1 col-md-1">
                                                    <div>=</div>
                                                    <div>=</div>
                                                    <div>=</div>
                                                </div>
                                                <div class="col-lg-5 col-sm-5 col-md-5">
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
                                                <div class="col-lg-2 col-sm-2 col-md-2">
                                                    <div class="m-0 p-0"> Weekly amount</div>
                                                </div>
                                                <div class="col-lg-1 col-sm-1 col-md-1">
                                                    <div>x</div>
                                                </div>
                                                <div class="col-lg-3 col-sm-3 col-md-3">
                                                    <div>52 Weeks per year</div>
                                                </div>
                                                <div class="col-lg-1 col-sm-1 col-md-1">
                                                    <div>=</div>
                                                </div>
                                                <div class="col-lg-5 col-sm-5 col-md-5">
                                                    <div>Yearly amount</div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    {{-- @include('layouts.footer12', ['page' => 2]) --}}
                                    <div class='pt-3'>Instructions for Florida Family Law Rules of Procedure Form 12.902(b), Family Law Financial Affidavit (Short Form)
                                        (10/21)</div>
                                </div>
                            </div>
                        </div>
                </section>
                <section class="section_area py-5" id="third_section">
                    <div class="row">
                        <div class="col-lg-10 mx-auto">
                            <div class="row px-lg-5 py-2 pt-0">
                                <div class="">
                                    <div class="row">
                                        <div class="col-lg-2 col-sm-2 col-md-2">
                                            <div class="m-0 p-0">Yearly amount</div>
                                        </div>
                                        <div class="col-lg-1 col-sm-1 col-md-1">
                                            <div>÷</div>
                                        </div>
                                        <div class="col-lg-3 col-sm-3 col-md-3">
                                            <div>12 Months per year</div>
                                        </div>
                                        <div class="col-lg-1 col-sm-1 col-md-1">
                                            <div>=</div>
                                        </div>
                                        <div class="col-lg-5 col-sm-5 col-md-5">
                                            <div class="fw-bold">Monthly Amount</div>
                                        </div>
                                    </div>
                                    <div><span class="fw-bold h5">Bi-weekly</span> - If you are paid every two weeks,
                                        you
                                        may
                                        convert your income to monthly as follows:
                                        <div class="row">
                                            <div class="col-lg-2 col-sm-2 col-md-2">
                                                <div class="m-0 p-0"> Bi-weekly amount</div>
                                                <div class="m-0 p-0"> Yearly amount</div>
                                            </div>
                                            <div class="col-lg-1 col-sm-1 col-md-1">
                                                <div>x</div>
                                                <div>÷</div>
                                            </div>
                                            <div class="col-lg-3 col-sm-3 col-md-3">
                                                <div class="ps-5">26</div>
                                                <div>12 Months per year</div>
                                            </div>
                                            <div class="col-lg-1 col-sm-1 col-md-1">
                                                <div>=</div>
                                                <div>=</div>
                                            </div>
                                            <div class="col-lg-5 col-sm-5 col-md-5">
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
                                            <div class="col-lg-3 col-sm-3 col-md-3">
                                                <div class="m-0 p-0"> Semi-monthly amount</div>
                                            </div>
                                            <div class="col-lg-1 col-sm-1 col-md-1">
                                                <div>x</div>
                                            </div>
                                            <div class="col-lg-3 col-sm-3 col-md-3">
                                                <div class="">2</div>
                                            </div>
                                            <div class="col-lg-1 col-sm-1 col-md-1">
                                                <div>=</div>
                                            </div>
                                            <div class="col-lg-4 col-sm-4 col-md-4">
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

                                {{-- @include('layouts.footer12', ['page' => 3]) --}}
                                <div>Florida Family Law Rules of Procedure Form 12.902(b), Family Law Financial Affidavit (Short Form) (10/21)</div>

                            </div>
                        </div>
                    </div>
                </section>
                <section class="section_area py-5" id="fourth_section">
                    <div class="row">
                        <div class="col-lg-10 mx-auto">
                            <div class="row px-lg-5 px-2 py-2 pt-0">
                                <div class=" justify-content-center d-flex d_sm_block">IN THE CIRCUIT COURT OF THE
                                    <input type="text" min="0" name="Circuit No"
                                        class="border-0 footer_field border-bottom"> JUDICIAL CIRCUIT,
                                </div>
                                <div class=" justify-content-center m-0 p-0  d-flex d_sm_block">IN AND FOR
                                    <input type="text" min="0" name="county"
                                        class="border-0 m-0 p-0 footer_field border-bottom"> COUNTY, FLORIDA
                                </div>
                                <div class="d-flex d_sm_block justify-content-end mt-2">Case No.: <input
                                        type="text" min="0" name="Case No"
                                        class="border-0 m-0 p-0 footer_field border-bottom">
                                </div>
                                <div class="d-flex d_sm_block justify-content-end">Division: <input type="text"
                                        min="0" name="Division"
                                        class="border-0 m-0 p-0  footer_field border-bottom">
                                </div>
                                <div class="d-flex d_sm_block  mt-2"><input type="text" min="0"
                                        name="Petitioner" class="border-0 m-0 p-0 footer_field border-bottom">,
                                </div>
                                <div class="" style="padding-left: 130px">Petitioner,</div>

                                <div class="mt-1 ps-lg-5">and</div>
                                <div class="d-flex d_sm_block  mt-1"><input type="text" min="0"
                                        name="Respondent" class="border-0 m-0 p-0 footer_field border-bottom">,
                                </div>
                                <div class="" style="padding-left: 115px">Respondent.</div>
                                <div class="text-center h3 fw-bold mt-4">FAMILY LAW FINANCIAL AFFIDAVIT (SHORT FORM)
                                </div>
                                <div class="text-center">(Under $50,000 Individual Gross Annual Income)</div>

                                <div class="d-flex d_sm_block mt-3">I, <i> {full legal name}</i>
                                    <input type="text" min="0" name="full legal name"
                                        class="border-0 w-50 footer_field border-bottom">,
                                    being sworn, certify that the following
                                </div>
                                <div>information is true:</div>
                                <div class="d-flex d_sm_block  "> My occupation is:
                                    <input type="text" min="0" name="occupation"
                                        class="border-0 footer_field border-bottom ">
                                    Employed by:
                                    <input type="text" min="0" name="employed by"
                                        class="border-0 footer_field border-bottom ">
                                </div>
                                <div class="d-flex d_sm_block  "> Business Address
                                    <input type="text" min="0" name="business address"
                                        class="border-0 footer_field border-bottom w-75">

                                </div>

                                <div class="d-flex d_sm_block ">Pay rate: <div class="d-flex d_sm_block px-2 "> $
                                        <input type="text" min="0" name="pay rate"
                                            class="border-0 m-0 p-0 footer_field border-bottom">
                                    </div> <input type="checkbox" name="every week check box" class=""> <span
                                        class="px-2">every week</span> <input type="checkbox" name="every other week check box" class=""> <span
                                        class="px-2">every other
                                        week</span>
                                    <input type="checkbox" name="twice a month check box" class=""> <span
                                        class="px-2">twice
                                        a week</span> <input type="checkbox" name="monthly check box" class=""> <span
                                        class="px-2">monthly</span>
                                </div>
                                <div class="d-flex d_sm_block ">
                                    <input type="checkbox" name="other check box" class=""> <span
                                        class="ps-2">other:</span>
                                    <input type="text" min="0" style="width: 875px;" name="other description"
                                        class="border-0 m-0 p-0 footer_field border-bottom responsive_input">
                                </div>
                                <div class="d-flex d_sm_block ">
                                    <input type="checkbox" name="unemployed check box" class=""> <span
                                        class="ps-2">Check
                                        here if unemployed and explain on a separate sheet your efforts to find
                                        employment.</span>
                                </div>



                                <div class="pt-4">
                                    <div class="fw-bold">SECTION I. PRESENT MONTHLY GROSS INCOME:</div>
                                    <div> <strong>All amounts must be MONTHLY. </strong> See the instructions with this
                                        form
                                        to figure out money amounts for anything that is NOT paid monthly. Attach more
                                        paper, if needed. Items included under “other” should be listed separately with
                                        separate dollar amounts.</div>
                                </div>
                                <div>

                                    <div class="row mt-1">
                                        <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">1.</span>
                                            <div class="d-flex d_sm_block ">$<input type="text" min="0"
                                                    name="monthly gross salary or wages"
                                                    class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                            </div>
                                        </div>
                                        <div class="col-lg-10">Monthly gross salary or wages</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">2.</span>
                                            <div class="d-flex d_sm_block "> <input type="text" min="0"
                                                    name="monthly bonuses, commissions, allowances,"
                                                    class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                            </div>
                                        </div>
                                        <div class="col-lg-10">Monthly bonuses, commissions, allowances, overtime,
                                            tips,
                                            and
                                            similar payments</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">3.</span> <input
                                                type="text" min="0" name="monthly business income from sources such"
                                                class="border-0 p-0 m-0 mb-5  border-bottom footer_field w-100">
                                        </div>
                                        <div class="col-lg-10">Monthly business income from sources such as
                                            self-employment,
                                            partnerships, close
                                            corporations, and/or independent contracts (gross receipts minus ordinary
                                            and
                                            necessary
                                            expenses required to produce income) (Attach sheet itemizing such income and
                                            expenses.)
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">4.</span>
                                            <div class="d-flex d_sm_block "> <input type="text" min="0"
                                                    name="monthly disability benfits/ssi"
                                                    class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                            </div>
                                        </div>
                                        <div class="col-lg-10">Monthly disability benefits/SSI</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">5.</span>
                                            <div class="d-flex d_sm_block "> <input type="text" min="0"
                                                    name="monthly workers comp"
                                                    class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                            </div>
                                        </div>
                                        <div class="col-lg-10">Monthly Workers’ Compensation</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">6.</span>
                                            <div class="d-flex d_sm_block "> <input type="text" min="0"
                                                    name="monthly unemployment compensation"
                                                    class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                            </div>
                                        </div>
                                        <div class="col-lg-10"> Monthly Unemployment Compensation</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">7.</span>
                                            <div class="d-flex d_sm_block "> <input type="text" min="0"
                                                    name="monthly pension, retirement, or annuity pay"
                                                    class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                            </div>
                                        </div>
                                        <div class="col-lg-10">Monthly pension, retirement, or annuity payments</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">8.</span>
                                            <div class="d-flex d_sm_block "> <input type="text" min="0"
                                                    name="monthly social security payments"
                                                    class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                            </div>
                                        </div>
                                        <div class="col-lg-10"> Monthly Social Security benefits</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">9.</span>
                                            <div class="d-flex d_sm_block "> <input type="text" min="0"
                                                    name="monthly alimony actually received"
                                                    class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                            </div>
                                        </div>
                                        <div class="col-lg-10"> Monthly alimony actually received (Add 9a and 9b)</div>
                                    </div>

                                    <div class="ms-5 mt-2 ps-5 d-flex d_sm_block"><span class="me-3">9a.</span>From
                                        this
                                        case: <div class="d-flex d_sm_block ms-1 ">$<input type="text"
                                                min="0" name="alimony from this case"
                                                class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                        </div>
                                    </div>

                                    <div class="ms-5  ps-5 d-flex d_sm_block"><span class="me-3">9b.</span>From
                                        other
                                        case(s): <div class="d-flex d_sm_block ms-1 ">$<input type="text"
                                                min="0" name="alimony From other cases"
                                                class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                        </div>
                                    </div>

                                </div>
                                {{-- @include('layouts.footer12', ['page' => 4]) --}}
                                <div>Florida Family Law Rules of Procedure Form 12.902(b), Family Law Financial Affidavit (Short Form) (10/21)</div>

                            </div>
                        </div>
                </section>
                <section class="section_area py-5" id="fifth_section">
                    <div class="row">
                        <div class="col-lg-10 mx-auto">
                            <div>
                                <div class="row">
                                    <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">10.</span>
                                        <div class="d-flex d_sm_block "> <input type="text" min="0" name="monthlv interest and dividends" class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                        </div>
                                    </div>
                                    <div class="col-lg-10">Monthly interest and dividends</div>
                                </div>


                                <div class="row">
                                    <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">11.</span>
                                        <div class="d-flex d_sm_block "> <input type="text" min="0"
                                                name="monthly rental income"
                                                class="border-0 p-0 m-0 mb-4 border-bottom footer_field w-100">
                                        </div>
                                    </div>
                                    <div class="col-lg-10">Monthly rental income (gross receipts minus ordinary and
                                        necessary expenses required to
                                        produce income) (Attach sheet itemizing such income and expense items.)</div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">12.</span>
                                        <div class="d-flex d_sm_block "> <input type="text" min="0"
                                                name="monthly income from royalties, trusts"
                                                class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                        </div>
                                    </div>
                                    <div class="col-lg-10">Monthly income from royalties, trusts, or estates</div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">13.</span>
                                        <div class="d-flex d_sm_block "> <input type="text" min="0"
                                                name="Monthly reimbursed expenses and in-kind"
                                                class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                        </div>
                                    </div>
                                    <div class="col-lg-10">Monthly reimbursed expenses and in-kind payments to the
                                        extent that they
                                        reduce personal living expenses</div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">14.</span>
                                        <div class="d-flex d_sm_block "> <input type="text" min="0"
                                                name="monthly gains derived from dealing in"
                                                class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                        </div>
                                    </div>
                                    <div class="col-lg-10">Monthly gains derived from dealing in property (not
                                        including nonrecurring gains)</div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">15.</span>
                                        <div class="d-flex d_sm_block "> <input type="text" min="0"
                                                name="any other income of a recring nature"
                                                class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                        </div>
                                    </div>
                                    <div class="col-lg-10 d-flex">Any other income of a recurring nature (list source): <div class="d-flex d_sm_block ms-1 "><input type="text" min="0" name="section1_15b" class="border-0 p-0 m-0 border-bottom footer_field w-100">

                                    </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 d-flex d_sm_block">
                                        <span class="me-3">16.</span>
                                        <div class="d-flex d_sm_block w-100 "> <input type="text" min="0"
                                                name="other income of a recurring nature source"
                                                class="border-0 p-0 m-0  border-bottom footer_field w-100">
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-1">
                                    <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">17.</span>
                                        <div class="d-flex   ">$<input type="text" min= "0"
                                                name="total present monthly gross income"
                                                class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                        </div>
                                    </div>
                                    <div class="col-lg-10 fw-bold">TOTAL PRESENT MONTHLY GROSS INCOME (Add lines 1-16.)
                                    </div>
                                </div>


                                <div class="pt-5    ">
                                    <div class="fw-bold">PRESENT MONTHLY DEDUCTIONS:</div>
                                </div>

                                <div class="row mt-1">
                                    <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">18.</span>
                                        <div class="d-flex d_sm_block ">$<input type="text" min="0"
                                                name="monthly federal, state, and local income tax"
                                                class="border-0 p-0 m-0 mb-4 border-bottom footer_field w-100">
                                        </div>
                                    </div>
                                    <div class="col-lg-10">Monthly federal, state, and local income tax (corrected for
                                        filing status and allowable
                                        dependents and income tax liabilities)</div>
                                </div>
                                <div class=" ps-5 d-flex d_sm_block"><span class="me-3"> a.</span>Filing
                                    Status
                                    <div class="d-flex d_sm_block ms-1 "><input type="text" min="0"
                                            name="filing status"
                                            class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                    </div>
                                </div>

                                <div class="  ps-5 d-flex d_sm_block">
                                    <span class="me-3"> b.</span>
                                    Number of dependents claimed:
                                    <div class="d-flex d_sm_block ms-1 ">
                                        <input type="text" min="0" name="Number of dependents claimed"
                                            class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                    </div>
                                </div>

                                <div class="row mt-1">
                                    <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">19.</span>
                                        <input type="text" min="0" name="monthly FICA or self-employment taxes"
                                            class="border-0 p-0 m-0 border-bottom footer_field w-100">

                                    </div>
                                    <div class="col-lg-10">Monthly FICA or self-employment taxes</div>
                                </div>
                                <div class="row mt-1">
                                    <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">20.</span>
                                        <input type="text" min="0" name="monthly medicare payments"
                                            class="border-0 p-0 m-0 border-bottom footer_field w-100">

                                    </div>
                                    <div class="col-lg-10">Monthly Medicare payments</div>
                                </div>

                                <div class="row mt-1">
                                    <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">21.</span>
                                        <input type="text" min="0" name="monthly mandatory union dues"
                                            class="border-0 p-0 m-0 border-bottom footer_field w-100">

                                    </div>
                                    <div class="col-lg-10">Monthly mandatory union dues</div>
                                </div>

                                <div class="row mt-1">
                                    <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">22.</span>
                                        <input type="text" min="0" name="monthly mandatory retirement payments"
                                            class="border-0 p-0 m-0 border-bottom footer_field w-100">

                                    </div>
                                    <div class="col-lg-10">Monthly mandatory retirement payments</div>
                                </div>

                                <div class="row mt-1">
                                    <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">23.</span>
                                        <input type="text" min="0" name="monthly health insurance payments"
                                            class="border-0 p-0 m-0 border-bottom footer_field w-100">

                                    </div>
                                    <div class="col-lg-10">Monthly health insurance payments (including dental
                                        insurance), excluding portion paid for
                                        any minor children of this relationship</div>
                                </div>

                                <div class="row mt-1">
                                    <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">24.</span>
                                        <input type="text" min="0" name="monthly court-ordered child support"
                                            class="border-0 p-0 m-0 border-bottom footer_field w-100">

                                    </div>
                                    <div class="col-lg-10">Monthly court-ordered child support actually paid for
                                        children from another relationship</div>
                                </div>

                                <div class="row mt-1">
                                    <div class="col-lg-2 d-flex  "><span class="me-3">25.</span>
                                        <input type="text" min="0" name="monthly court-ordered alimony actually"
                                            class="border-0 p-0 m-0 border-bottom footer_field w-100">

                                    </div>
                                    <div class="col-lg-10">Monthly court-ordered alimony actually paid (Add 25a and
                                        25b)</div>
                                </div>
                                <div class="ms-lg-5 mt-2 ps-lg-5 d-flex  "><span class="me-3">25a.</span>From this
                                    case:
                                    <div class="d-flex d_sm_block ms-1 ">$<input type="text" min="0"
                                            name="25b"
                                            class="border-0 p-0 m-0 border-bottom responsive_input footer_field w-100">
                                    </div>
                                </div>

                                <div class="ms-lg-5  ps-lg-5 d-flex d_sm_block"><span class="me-3">25b.</span>From
                                    other
                                    case(s): <div class="d-flex d_sm_block ms-1 ">$<input type="text"
                                            min="0" name="25b from other cases"
                                            class="border-0 p-0 m-0 border-bottom responsive_input footer_field w-100">

                                    </div>
                                </div>
                                <div class="row mt-1">
                                    <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">26.</span>
                                        <div class="d-flex d_sm_block ">$<input type="text" min="0"
                                                name="total deductions allowable under section 61.3" class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                        </div>
                                    </div>
                                    <div class="col-lg-10 fw-bold">TOTAL DEDUCTIONS ALLOWABLE UNDER SECTION 61.30, FLORIDA STATUTES </div>
                                    <div class="row mt-1">
                                        <div class="col-lg-2 d-flex d_sm_block">
                                        </div>
                                        <div class="col-lg-10  ">
                                            <div>(Add lines 18 through 25.)</div>
                                        </div>
                                        <div class="row mt-1" style="padding-bottom: 250px">
                                            <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">27.</span>
                                                <div class="d-flex d_sm_block ">$<input type="text" min="0" name="present net monthly income"
                                                        class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                                </div>
                                            </div>
                                            <div class="col-lg-10 fw-bold">PRESENT NET MONTHLY INCOME <span
                                                    class="fw-normal">(Subtract line 26 from line 17.)</span>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- @include('layouts.footer12', ['page' => 5]) --}}
                                    <div>Florida Family Law Rules of Procedure Form 12.902(b), Family Law Financial Affidavit (Short Form) (10/21)</div>

                                </div>
                            </div>
                </section>
                <section class="section_area py-5" id="sixth_section">
                    <div class="row">
                        <div class="col-lg-10 mx-auto">
                            <div class="row px-lg-5 px-2 py-2 pt-0">
                                <div class=" text-dark fw-bold mt-4">SECTION II.  AVERAGE MONTHLY EXPENSES</div>
                                <div><strong>Proposed/Estimated Expenses.</strong> If this is a dissolution
                                    of marriage case and your expenses as listed below do not reflect what
                                    you actually pay currently, you should write “estimate” next to each
                                    amount that is estimated.</div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="fw-bold pt-3"><span class="me-2">A.</span>HOUSEHOLD:</div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="fw-bold pt-3"><span class="me-2">O.</span>OTHER EXPENSES NOT LISTED ABOVE</div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4">Mortgage or rent</div>
                                    <div class="col-lg-2 col-md-2 col-sm-2">
                                        <div class="d-flex  ">$<input type="text" min="0"
                                                name="mortgage or rent" style="width:100px"
                                                class="border-0 p-0 m-0 border-bottom footer_field responsive_input">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">Clothing</div>
                                    <div class="col-lg-2 ">
                                        <div class="d-flex  ">$<input type="text" min="0" name="clothing 2"
                                                style="width:100px"
                                                class="border-0 p-0 m-0 border-bottom footer_field ">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">Property taxes</div>
                                    <div class="col-lg-2 justify-content-end">
                                        <div class="d-flex  ">$<input type="text" min="0"
                                                name="property taxes" style="width:100px"
                                                class="border-0 p-0 m-0 border-bottom footer_field ">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">Medical/Dental (uninsured)</div>
                                    <div class="col-lg-2 justify-content-end">
                                        <div class="d-flex  ">$<input type="text" min="0"
                                                name="medical/dental2" style="width:100px"
                                                class="border-0 p-0 m-0 border-bottom footer_field ">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-4">Utilitiest</div>
                                    <div class="col-lg-2 ">
                                        <div class="d-flex  ">$<input type="text" min="0"
                                                name="utilities" style="width:100px"
                                                class="border-0 p-0 m-0 border-bottom footer_field ">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">Grooming</div>
                                    <div class="col-lg-2 ">
                                        <div class="d-flex  ">$<input type="text" min="0" name="grooming"
                                                style="width:100px"
                                                class="border-0 p-0 m-0 border-bottom footer_field ">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">Telephone</div>
                                    <div class="col-lg-2 ">
                                        <div class="d-flex  ">$<input type="text" min="0"
                                                name="telephone" style="width:100px"
                                                class="border-0 p-0 m-0 border-bottom footer_field ">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">Entertainment</div>
                                    <div class="col-lg-2 ">
                                        <div class="d-flex  ">$<input type="text" min="0"
                                                name="entertainment" style="width:100px"
                                                class="border-0 p-0 m-0 border-bottom footer_field ">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-4">Food</div>
                                    <div class="col-lg-2">
                                        <div class="d-flex">$<input type="text" min="0" name="food"
                                                style="width:100px"
                                                class="border-0 p-0 m-0 border-bottom footer_field ">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">Gifts</div>
                                    <div class="col-lg-2 ">
                                        <div class="d-flex  ">$<input type="text" min="0" name="gifts"
                                                style="width:100px"
                                                class="border-0 p-0 m-0 border-bottom footer_field ">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-4">Meals outside home</div>
                                    <div class="col-lg-2 ">
                                        <div class="d-flex  ">$<input type="text" min="0"
                                                name="meals outside home" style="width:100px"
                                                class="border-0 p-0 m-0 border-bottom footer_field ">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">Religious organizations</div>
                                    <div class="col-lg-2 ">
                                        <div class="d-flex  ">$<input type="text" min="0"
                                                name="religious_org" style="width:100px"
                                                class="border-0 p-0 m-0 border-bottom footer_field ">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-4">Maintenance/Repairs</div>
                                    <div class="col-lg-2 ">
                                        <div class="d-flex  ">$<input type="text" min="0"
                                                name="maintenance repairs" style="width:100px"
                                                class="border-0 p-0 m-0 border-bottom footer_field ">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">Miscellaneous</div>
                                    <div class="col-lg-2 ">
                                        <div class="d-flex  ">$<input type="text" min="0"
                                                name="miscellaneous" style="width:100px"
                                                class="border-0 p-0 m-0 border-bottom footer_field ">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-4">Other:<input type="text" min="0" name="other amount 2"
                                            style="width:100px" class="border-0 p-0 m-0 border-bottom footer_field ">
                                    </div>
                                    <div class="col-lg-2 ">
                                        <div class="d-flex  ">$<input type="text" min="0" name="other amount 3"
                                                style="width:100px"
                                                class="border-0 p-0 m-0 border-bottom footer_field ">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">Other:<input type="text" min="0" name="other 3"
                                            style="width:175px" class="border-0 p-0 m-0 border-bottom footer_field ">
                                    </div>
                                    <div class="col-lg-2 ">
                                        <div class="d-flex  ">$<input type="text" min="0" name="other amount 3"
                                                style="width:100px"
                                                class="border-0 p-0 m-0 border-bottom footer_field ">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-4">
                                    </div>
                                    <div class="col-lg-2 ">
                                    </div>
                                    <div class="col-lg-4"><input type="text" min="0" name="other 4"
                                            class="border-0 p-0 m-0 border-bottom footer_field w-75">
                                    </div>
                                    <div class="col-lg-2 ">
                                        <div class="d-flex  ">$<input type="text" min="0" name="other amount 4"
                                                style="width:100px"
                                                class="border-0 p-0 m-0 border-bottom footer_field ">
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="fw-bold pt-3"><span class="me-2">B.</span>AUTOMOBILE:</div>

                                    </div>
                                    <div class="col-lg-6">
                                        <div class="row  pt-3">
                                            <div class="col-lg-8"><input type="text" min="0"
                                                    name="other amount 5"
                                                    class="border-0 p-0 m-0 border-bottom footer_field"
                                                    style="width: 225px">
                                            </div>

                                            <div class="col-lg-4 d-flex">
                                                $<input type="text" min="0" name="other amount 5"
                                                    class="border-0 p-0 m-0 border-bottom footer_field w-75">
                                            </div>
                                        </div>
                                    </div>

                                </div>


                                <div class="row">
                                    <div class="col-lg-4 ">Gasoline</div>
                                    <div class="col-lg-2 ">
                                        <div class="d-flex  ">$<input type="text" min="0" name="gasoline"
                                                style="width:100px"
                                                class="border-0 p-0 m-0 border-bottom footer_field ">
                                        </div>
                                    </div>
                                    <div class="col-lg-4"><input type="text" min="0" name="other 6"
                                            class="border-0 p-0 m-0 border-bottom footer_field" style="width: 225px">
                                    </div>
                                    <div class="col-lg-2 ">
                                        <div class="d-flex  ">$<input type="text" min="0" name="other amount 6"
                                                style="width:100px"
                                                class="border-0 p-0 m-0 border-bottom footer_field ">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 ">Repairs</div>
                                    <div class="col-lg-2 ">
                                        <div class="d-flex  ">$<input type="text" min="0" name="repairs"
                                                style="width:100px"
                                                class="border-0 p-0 m-0 border-bottom footer_field ">
                                        </div>
                                    </div>
                                    <div class="col-lg-4"><input type="text" min="0" name="other 7"
                                            class="border-0 p-0 m-0 border-bottom footer_field" style="width: 225px">
                                    </div>
                                    <div class="col-lg-2 ">
                                        <div class="d-flex  ">$<input type="text" min="0" name="other amount 7"
                                                style="width:100px"
                                                class="border-0 p-0 m-0 border-bottom footer_field ">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 ">Insurance</div>
                                    <div class="col-lg-2 ">
                                        <div class="d-flex  ">$<input type="text" min="0"
                                                name="insurance" style="width:100px"
                                                class="border-0 p-0 m-0 border-bottom footer_field ">
                                        </div>
                                    </div>
                                    <div class="col-lg-4"><input type="text" min="0" name="other 8"
                                            class="border-0 p-0 m-0 border-bottom footer_field" style="width: 225px">
                                    </div>
                                    <div class="col-lg-2 ">
                                        <div class="d-flex  ">$<input type="text" min="0" name="other amount 8"
                                                style="width:100px"
                                                class="border-0 p-0 m-0 border-bottom footer_field ">
                                        </div>
                                    </div>
                                </div>


                                <div class="row " style="margin-bottom: 250px">
                                    <div class="col-lg-6">
                                        <div class="fw-bold pt-3"><span class="me-2">C.</span>CHILD(REN)’S EXPENSES
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-8">Day care</div>
                                            <div class="col-lg-4 ">
                                                <div class="d-flex  ">$<input type="text" min="0"
                                                        name="day care" style="width:100px"
                                                        class="border-0 p-0 m-0 border-bottom footer_field ">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-8">Lunch money</div>
                                            <div class="col-lg-4 ">
                                                <div class="d-flex  ">$<input type="text" min="0"
                                                        name="lunch money" style="width:100px"
                                                        class="border-0 p-0 m-0 border-bottom footer_field ">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-8">Clothing</div>
                                            <div class="col-lg-4 ">
                                                <div class="d-flex  ">$<input type="text" min="0"
                                                        name="clothing" style="width:100px"
                                                        class="border-0 p-0 m-0 border-bottom footer_field ">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-8">Grooming</div>
                                            <div class="col-lg-4 ">
                                                <div class="d-flex">$<input type="text" min="0"
                                                        name="grooming 2" style="width:100px"
                                                        class="border-0 p-0 m-0 border-bottom footer_field ">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-8">Gifts for holidays</div>
                                            <div class="col-lg-4 ">
                                                <div class="d-flex  ">$<input type="text" min="0"
                                                        name="gifts for holidays" style="width:100px"
                                                        class="border-0 p-0 m-0 border-bottom footer_field ">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-8">Medical/Dental (uninsured)</div>
                                            <div class="col-lg-4 ">
                                                <div class="d-flex  ">$<input type="text" min="0"
                                                        name="medical/dental" style="width:100px"
                                                        class="border-0 p-0 m-0 border-bottom footer_field ">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-8">Other:<input type="text" min="0"
                                                    name=" other childrens expenses" style="width:100px"
                                                    class="border-0 p-0 m-0 border-bottom footer_field ">
                                            </div>
                                            <div class="col-lg-4 ">
                                                <div class="d-flex  ">$<input type="text" min="0"
                                                        name="c_other2" style="width:100px"
                                                        class="border-0 p-0 m-0 border-bottom footer_field ">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="fw-bold pt-4"><span class="me-2">D.</span>INSURANCE</div>

                                        <div class="row">
                                            <div class="col-lg-8">Medical/Dental (if not listed on
                                                lines 23 or 45)</div>
                                            <div class="col-lg-4 mt-3 ">
                                                <div class="d-flex  ">$<input type="text" min="0"
                                                        name="medical/dental insurance amount" style="width:100px"
                                                        class="border-0 p-0 m-0 border-bottom footer_field ">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-8">Child(ren)’s medical/dental</div>
                                            <div class="col-lg-4 ">
                                                <div class="d-flex  ">$<input type="text" min="0"
                                                        name="childrens medical/dental insurance amount" style="width:100px"
                                                        class="border-0 p-0 m-0 border-bottom footer_field ">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-8">Life</div>
                                            <div class="col-lg-4 ">
                                                <div class="d-flex  ">$<input type="text" min="0"
                                                        name="life insurance amount" style="width:100px"
                                                        class="border-0 p-0 m-0 border-bottom footer_field ">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-8">Other:<input type="text" min="0"
                                                    name="other insurance" style="width:100px"
                                                    class="border-0 p-0 m-0 border-bottom footer_field ">
                                            </div>
                                            <div class="col-lg-4 ">
                                                <div class="d-flex  ">$<input type="text" min="0"
                                                        name="other insurance amount" style="width:100px"
                                                        class="border-0 p-0 m-0 border-bottom footer_field ">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-6 mt-4">
                                        <div class="fw-bold pt-3"><span class="me-2">F.</span>O. PAYMENTS TO
                                            CREDITORS</div>
                                        <div class="row">
                                            <div class="col-lg-8">CREDITOR:</div>
                                            <div class="col-lg-4">MONTHLY PAYMENT</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-8"><input type="text" min="0"
                                                    name="creditor 1"
                                                    class="border-0 p-0 m-0 border-bottom footer_field"
                                                    style="width: 225px">
                                            </div>
                                            <div class="col-lg-4 ">
                                                <div class="d-flex  ">$<input type="text" min="0"
                                                        name="creditor monthly payment amount 1" style="width:100px"
                                                        class="border-0 p-0 m-0 border-bottom footer_field ">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-8"><input type="text" min="0"
                                                    name="creditor 2"
                                                    class="border-0 p-0 m-0 border-bottom footer_field"
                                                    style="width: 225px">
                                            </div>
                                            <div class="col-lg-4 ">
                                                <div class="d-flex  ">$<input type="text" min="0"
                                                        name="creditor monthly payment amount 2" style="width:100px"
                                                        class="border-0 p-0 m-0 border-bottom footer_field ">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-8"><input type="text" min="0"
                                                    name="creditor 3"
                                                    class="border-0 p-0 m-0 border-bottom footer_field"
                                                    style="width: 225px">
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="d-flex">$<input type="text" min="0"
                                                        name="creditor monthly payment amount 3" style="width:100px"
                                                        class="border-0 p-0 m-0 border-bottom footer_field ">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-8"><input type="text" min="0"
                                                    name="creditor 4"
                                                    class="border-0 p-0 m-0 border-bottom footer_field"
                                                    style="width: 225px">
                                            </div>
                                            <div class="col-lg-4 ">
                                                <div class="d-flex  ">$<input type="text" min="0"
                                                        name="creditor monthly payment amount 4" style="width:100px"
                                                        class="border-0 p-0 m-0 border-bottom footer_field ">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-8"><input type="text" min="0"
                                                    name="creditor 5"
                                                    class="border-0 p-0 m-0 border-bottom footer_field"
                                                    style="width: 225px">
                                            </div>
                                            <div class="col-lg-4 ">
                                                <div class="d-flex  ">$<input type="text" min="0"
                                                        name="creditor monthly payment amount 5" style="width:100px"
                                                        class="border-0 p-0 m-0 border-bottom footer_field ">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-8"><input type="text" min="0"
                                                    name="creditor 6"
                                                    class="border-0 p-0 m-0 border-bottom footer_field"
                                                    style="width: 225px">
                                            </div>
                                            <div class="col-lg-4 ">
                                                <div class="d-flex  ">$<input type="text" min="0"
                                                        name="creditor monthly payment amount 6" style="width:100px"
                                                        class="border-0 p-0 m-0 border-bottom footer_field ">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-8"><input type="text" min="0"
                                                    name="creditor 7"
                                                    class="border-0 p-0 m-0 border-bottom footer_field"
                                                    style="width: 225px">
                                            </div>
                                            <div class="col-lg-4 ">
                                                <div class="d-flex  ">$<input type="text" min="0"
                                                        name="creditor monthly payment amount 7" style="width:100px"
                                                        class="border-0 p-0 m-0 border-bottom footer_field ">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-8"><input type="text" min="0"
                                                    name="creditor 8" class="border-0 p-0 m-0 border-bottom footer_field" style="width: 225px">
                                            </div>
                                            <div class="col-lg-4 ">
                                                <div class="d-flex  ">$<input type="text" min="0"
                                                        name="creditor monthly payment amount 8" style="width:100px"
                                                        class="border-0 p-0 m-0 border-bottom footer_field ">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-8"><input type="text" min="0"
                                                    name="creditor 9"
                                                    class="border-0 p-0 m-0 border-bottom footer_field"
                                                    style="width: 225px">
                                            </div>
                                            <div class="col-lg-4 ">
                                                <div class="d-flex  ">$<input type="text" min="0"
                                                        name="creditor monthly payment amount 9" style="width:100px"
                                                        class="border-0 p-0 m-0 border-bottom footer_field ">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-8"><input type="text" min="0"
                                                    name="creditor 10"
                                                    class="border-0 p-0 m-0 border-bottom footer_field"
                                                    style="width: 225px">
                                            </div>
                                            <div class="col-lg-4 ">
                                                <div class="d-flex  ">$<input type="text" min="0"
                                                        name="creditor monthly payment amount 10" style="width:100px"
                                                        class="border-0 p-0 m-0 border-bottom footer_field ">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-8"><input type="text" min="0"
                                                    name="creditor 11"
                                                    class="border-0 p-0 m-0 border-bottom footer_field"
                                                    style="width: 225px">
                                            </div>
                                            <div class="col-lg-4 ">
                                                <div class="d-flex  ">$<input type="text" min="0"
                                                        name="creditor monthly payment amount 11" style="width:100px"
                                                        class="border-0 p-0 m-0 border-bottom footer_field ">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- @include('layouts.footer12', ['page' => 6]) --}}
                            <div>Florida Family Law Rules of Procedure Form 12.902(b), Family Law Financial Affidavit (Short Form) (10/21)</div>

                        </div>
                    </div>
                </section>










                <section class="section_area py-5" id="seventh_section">
                    <div class="row">
                        <div class="col-lg-10 mx-auto">
                            <div class="row px-lg-5 px-2 py-2 pt-0">
                                <div class="row mt-1">
                                    <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">28.</span>
                                        <div class="d-flex d_sm_block ">$<input type="text" min="0"
                                                name="total monthly expenses 1"
                                                class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                        </div>
                                    </div>
                                    <div class="col-lg-10"><b>TOTAL MONTHLY EXPENSES</b> (add <b>ALL</b> monthly
                                        amounts in A through F above)
                                    </div>
                                </div>
                                <div class="pt-4 fw-bold">SUMMARY</div>

                                <div class="row mt-1">
                                    <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">29.</span>
                                        <div class="d-flex d_sm_block ">$<input type="text" min="0"
                                                name="total present monthly net income"
                                                class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                        </div>
                                    </div>
                                    <div class="col-lg-10"><b>TOTAL PRESENT MONTHLY NET INCOME</b> (from line 27 of
                                        SECTION I. INCOME)</div>
                                </div>
                                <div class="row mt-1">
                                    <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">30.</span>
                                        <div class="d-flex d_sm_block ">$<input type="text" min="0"
                                                name="total monthly expenses 2"
                                                class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                        </div>
                                    </div>
                                    <div class="col-lg-10"><b>TOTAL MONTHLY EXPENSES </b> (from line 28 above)</div>
                                </div>
                                <div class="row mt-1">
                                    <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">31.</span>
                                        <div class="d-flex d_sm_block ">$<input type="text" min="0"
                                                name="surplus"
                                                class="border-0 p-0 m-0 border-bottom footer_field w-100">
                                        </div>
                                    </div>
                                    <div class="col-lg-10"><b>SURPLUS </b> (If line 29 is more than line 30,
                                        subtract line 30 from line 29. This is the amount of your surplus. Enter that
                                        amount here.)</div>
                                </div>
                                <div class="row mt-1">
                                    <div class="col-lg-2 d-flex d_sm_block"><span class="me-3">32.</span>
                                        <div class="d-flex d_sm_block ">($<input type="text" min="0"
                                                name="deficit"
                                                class="border-0 mb-5 m-0 border-bottom footer_field w-100">)
                                        </div>
                                    </div>
                                    <div class="col-lg-10"><b>(DEFICIT) </b> (If line 30 is more than line 29, subtract line 29 from line 30. This is the amount
                                        of your deficit. Enter that amount here.)</div>
                                </div>

                                <div class="fw-bold  text-dark mt-4">SECTION III. ASSETS AND
                                    LIABILITIES</div>

                                <div><b>Use the nonmarital column only if this is a petition for dissolution of marriage
                                        and you believe an item
                                        is “nonmarital,” meaning it belongs to only one of you and should not be
                                        divided.</b> You should indicate
                                    to whom you believe the item(s) or debt belongs. (Typically, you will only use this
                                    column if property/debt
                                    was owned/owed by one spouse before the marriage. See the <b>“General Information
                                        for Self-
                                        Represented Litigants”</b> found at the beginning of these forms and section
                                    61.075(1), Florida Statutes, for
                                    definitions of “marital” and “nonmarital” assets and liabilities.)</div>

                                <div class="fw-bold mt-5">A. <span class="ps-2">ASSETS:</span></div>
                                <div class="table-responsive ">
                                    <table class="table-bordered  border border-dark border-2 w-100">
                                        <tbody>
                                            <tr>
                                                <td class="bg-secondary" colspan="2" rowspan="2"
                                                    style="    width: 550px;
                                                            ">
                                                    <div class="fw-bold">DESCRIPTION OF ITEM(S). List a description of
                                                        each separate
                                                        item owned by you (and/or your spouse, if this is a petition
                                                        for dissolution of marriage). LIST ONLY LAST 4 DIGITS OF
                                                        ACCOUNT NUMBERS. Check the line next to any asset(s)
                                                        which you are requesting the judge award to you.</div>
                                                </td>
                                                <td class="bg-secondary" rowspan="2">
                                                    <div class="text-center mt-5 fw-bold">Current Fair Market Value
                                                    </div>
                                                </td>
                                                <td class="bg-secondary" colspan="2">
                                                    <div class="text-center fw-bold">Nonmarital </div>
                                                    <div class="text-center fw-bold"> (Check correct column)</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="bg-secondary">Petitioner</td>
                                                <td class="bg-secondary">Respondent</td>
                                            </tr>

                                            <tr>
                                                <td><input type="checkbox" name="cash on hand check box" value="True"></td>
                                                <td>
                                                    <div>Cash (on hand) <span></div>
                                                </td>
                                                <td>
                                                    <div class="d-flex d_sm_block ">$<input type="text"
                                                            min="0" name="cash on hand current fair market value"
                                                            class="border-0 text-center w-100"> </div>
                                                </td>
                                                <td class="mx-auto text-center"><input type="checkbox" name="cash on hand petitioner check box" value="Petitioner"></td>
                                                <td class="mx-auto text-center"><input type="checkbox" name="cash on hand respondent check box" value="Respondent"></td>
                                            </tr>

                                            <tr>
                                                <td><input type="checkbox" name="cash in banks check box" value="True"></td>
                                                <td>
                                                    <div>Cash (in banks or credit unions) </div>
                                                </td>
                                                <td> <input type="text" min="0" name="Cash in banks or credit unions current fair market value"
                                                        class="border-0 text-center w-100"> </td>
                                                <td class="mx-auto text-center"><input type="checkbox" name="cash in banks petitioner check box" value="petitioner"></td>
                                                <td class="mx-auto text-center"><input type="checkbox" name="cash in banks respondent check box" value="respondent"></td>
                                            </tr>

                                            <tr>
                                                <td><input type="checkbox" name="stocks, bonds, notes check box"  value="True"></td>
                                                <td>
                                                    <div> Stocks, Bonds, Notes</div>
                                                </td>
                                                <td> <input type="text" min="0" name="Stocks Bonds Notes current fair market value"
                                                        class="border-0 text-center w-100"> </td>
                                                        <td class="mx-auto text-center"><input type="checkbox" name="stocks, bonds, notes petitioner check box" value="petitioner"></td>
                                                        <td class="mx-auto text-center"><input type="checkbox" name="stocks, bonds, notes respondent check box" value="respondent"></td>
                                            </tr>

                                            <tr>
                                                <td><input type="checkbox" name="real estate check box"  value="True"></td>
                                                <td>
                                                    <div> Real estate: (Home)</div>
                                                </td>
                                                <td> <input type="text" min="0" name="Real estate Home current fair market value"
                                                        class="border-0 text-center w-100"> </td>
                                                        <td class="mx-auto text-center"><input type="checkbox" name="real estate petitioner check box" value="petitioner"></td>
                                                        <td class="mx-auto text-center"><input type="checkbox" name="real estate respondent check box" value="respondent"></td>
                                            </tr>





                                            <tr>
                                                <td><input type="checkbox" name="other real estate"  value="True"></td>
                                                <td>(Other) </td>
                                                <td> <input type="text" min="0" name="Other real estate current fair market value "
                                                        class="border-0 text-center w-100"> </td>
                                                        <td class="mx-auto text-center"><input type="checkbox" name="other real estate petitioner check box" value="petitioner"></td>
                                                        <td class="mx-auto text-center"><input type="checkbox" name="non_resp2" value="other real estate respondent check box"></td>
                                            </tr>


                                            <tr>
                                                <td><input type="checkbox" name="automobiles check box"  value="True"></td>
                                                <td>
                                                    <div>Automobiles</div>
                                                </td>
                                                <td><input type="text" min="0" name="Automobiles current fair market value"
                                                        class="border-0 text-center w-100"></td>
                                                        <td class="mx-auto text-center"><input type="checkbox" name="automobiles petitioner check box" value="petitioner"></td>
                                                        <td class="mx-auto text-center"><input type="checkbox" name="automobiles respondent check box" value="respondent"></td>
                                            </tr>



                                            <tr>
                                                <td><input type="checkbox" name="other personal property check box"  value="True"></td>
                                                <td>
                                                    <div>Other personal property</div>
                                                </td>
                                                <td><input type="text" min="0" name="Other personal property current fair market value"
                                                        class="border-0 text-center w-100"></td>
                                                        <td class="mx-auto text-center"><input type="checkbox" name="other personal property petitioner check box" value="petitioner"></td>
                                                        <td class="mx-auto text-center"><input type="checkbox" name="other personal property respondent check box" value="respondent"></td>
                                            </tr>

                                            <tr>
                                                <td><input type="checkbox" name="retirement plans check box"  value="True"></td>
                                                <td>
                                                    <div>Retirement plans (Profit Sharing, Pension, IRA, 401(k)s, etc.)
                                                    </div>
                                                </td>
                                                <td><input type="text" min="0" name="Retirement plans Profit Sharing Pension IRA current fair market value"
                                                        class="border-0 text-center w-100"></td>
                                                        <td class="mx-auto text-center"><input type="checkbox" name="retirement plans petitioner check box" value="petitioner"></td>
                                                        <td class="mx-auto text-center"><input type="checkbox" name="retirement plans respondent check box" value="respondent"></td>
                                            </tr>
                                            <tr>
                                                <td> </td>
                                                <td>Other</td>
                                                <td> </td>
                                                <td> </td>
                                                <td> </td>
                                            </tr>

                                            <tr>
                                                <td><input type="checkbox" name="other row 1 check box"  value="True"></td>
                                                <td>
                                                    <div> <span><input type="text" class="border-0 w-100 text-center" name="Other Row 1"></span></div>
                                                </td>
                                                <td> <input type="text" min="0" name="other row 1 current fair market value" class="border-0 text-center w-100"> </td>
                                                        <td class="mx-auto text-center"><input type="checkbox" name="other row 1 petitioner check box" value="petitioner"></td>
                                                        <td class="mx-auto text-center"><input type="checkbox" name="other row 1 respondent check box" value="respondent"></td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" name="other row 2 check box"  value="True"></td>
                                                <td>
                                                    <div> <span><input type="text" class="border-0 w-100 text-center" name="Other Row 2"></span></div>
                                                </td>
                                                <td> <input type="text" min="0" name="other row 2 current fair market value" class="border-0 text-center w-100"> </td>
                                                        <td class="mx-auto text-center"><input type="checkbox" name="other row 2 petitioner check box" value="petitioner"></td>
                                                        <td class="mx-auto text-center"><input type="checkbox" name="other row 2 respondent check box" value="respondent"></td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" name="other row 3 check box"  value="True"></td>
                                                <td>
                                                    <div> <span><input type="text" class="border-0 w-100 text-center" name=" Other Row 3"></span></div>
                                                </td>
                                                <td> <input type="text" min="0" name="other row 3 current fair market value" class="border-0 text-center w-100"> </td>
                                                        <td class="mx-auto text-center"><input type="checkbox" name="other row 3 petitioner check box" value="petitioner"></td>
                                                        <td class="mx-auto text-center"><input type="checkbox" name="other row 3 respondent check box" value="respondent"></td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" name="other row 4 check box"  value="True"></td>
                                                <td>
                                                    <div> <span><input type="text" class="border-0 w-100 text-center" name="Other Row 4"></span></div>
                                                </td>
                                                <td> <input type="text" min="0" name="other row 4 current fair market value" class="border-0 text-center w-100"> </td>
                                                        <td class="mx-auto text-center"><input type="checkbox" name="other row 4 petitioner check box" value="petitioner"></td>
                                                        <td class="mx-auto text-center"><input type="checkbox" name="other row 4 respondent check box" value="respondent"></td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" name="other row 5 check box"  value="True"></td>
                                                <td>
                                                    <div> <span><input type="text" class="border-0 w-100 text-center" name="Other Row 5"></span></div>
                                                </td>
                                                <td> <input type="text" min="0" name="other row 5 current fair market value"
                                                        class="border-0 text-center w-100"> </td>
                                                        <td class="mx-auto text-center"><input type="checkbox" name="other row 5 petitioner check box" value="petitioner"></td>
                                                        <td class="mx-auto text-center"><input type="checkbox" name="other row 5 respondent check box" value="respondent"></td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" name="other row 6 check box" value="True"></td>
                                                <td>
                                                    <div> <span><input type="text" class="border-0 w-100 text-center" name="Other Row 6"></span></div>
                                                </td>
                                                <td> <input type="text" min="0" name="other row 6 current fair market value" class="border-0 text-center w-100"> </td>
                                                        <td class="mx-auto text-center"><input type="checkbox" name="other row 6 petitioner check box" value="petitioner"></td>
                                                        <td class="mx-auto text-center"><input type="checkbox" name="other row 6 respondent check box" value="respondent"></td>
                                            </tr>

                                            <tr>
                                                <td> </td>
                                                <td><span class="mx-2"><input type="checkbox"
                                                            name="check here if additional pages are attached" value="True"></span><span
                                                        class="bg-secondary">Check
                                                        here if additional pages are attached.</span></td>
                                                <td> </td>
                                                <td> </td>
                                                <td> </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="bg-secondary"><b>Total Assets</b> (add
                                                    next
                                                    column)
                                                </td>
                                                <td class="bg-secondary">
                                                    <div class="d-flex ">$<input type="text" min="0"
                                                            name="total assets current fair market value" class="border-0 text-center w-100">
                                                    </div>
                                                </td>
                                                <td class="mx-auto text-center"><input type="checkbox" name="total assets petitioner check box" value="petitioner"></td>
                                                <td class="mx-auto text-center"><input type="checkbox" name="total assets respondent check box" value="respondent"></td>
                                            </tr>


                                        </tbody>

                                    </table>
                                </div>
                                {{-- @include('layouts.footer12', ['page' => 9]) --}}
                                <div>Florida Family Law Rules of Procedure Form 12.902(b), Family Law Financial Affidavit (Short Form) (10/21)</div>

                            </div>
                        </div>
                    </div>
                </section>
                <section class="section_area py-5" id="eighth_section">
                    <div class="row">
                        <div class="col-lg-10 mx-auto">
                            <div class="row  px-2 py-2 pt-0">
                                <div class="fw-bold ">B. <span class="ps-2">LIABILTIES:</span></div>
                                <div class="table-responsive ">
                                    <table class="table-bordered  border border-dark border-2 w-100">
                                        <tbody>
                                            <tr>
                                                <td class="bg-secondary" colspan="2" rowspan="2"
                                                    style="    width: 550px;
                                                    ">
                                                    <div class="fw-bold">DESCRIPTION OF ITEM(S). List a description of
                                                        each separate
                                                        debt owed by you (and/or your spouse, if this is a petition for
                                                        dissolution of marriage). LIST ONLY LAST 4 DIGITS OF
                                                        ACCOUNT NUMBERS. Check the line next to any debt(s) for
                                                        which you believe you should be responsible.</div>
                                                </td>
                                                <td class="bg-secondary" rowspan="2">
                                                    <div class="text-center mt-5 fw-bold">Current Amount Owed</div>
                                                </td>
                                                <td class="bg-secondary" colspan="2">
                                                    <div class="text-center fw-bold">Nonmarital </div>
                                                    <div class="text-center fw-bold"> (Check correct column)</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="bg-secondary">Petitioner</td>
                                                <td class="bg-secondary">Respondent</td>
                                            </tr>

                                            <tr>
                                                <td><input type="checkbox" name="b_chk1"></td>
                                                <td>
                                                    <div>Mortgages on real estate: First mortgage on home <span></div>
                                                </td>
                                                <td>
                                                    <div class="d-flex d_sm_block ">$<input type="text"
                                                            min="0" name="ca_owed1"
                                                            class="border-0 text-center w-100"> </div>
                                                </td>
                                                <td><input type="checkbox" name="bn_pet1"></td>
                                                <td><input type="checkbox" name="bn_resp1"></td>
                                            </tr>




                                            <tr>
                                                <td><input type="checkbox" name="b_chk2"></td>
                                                <td>
                                                    <div> Second mortgage on home</div>
                                                </td>
                                                <td> <input type="text" min="0" name="ca_owed2"
                                                        class="border-0 text-center w-100"> </td>
                                                <td><input type="checkbox" name="bn_pet2"></td>
                                                <td><input type="checkbox" name="bn_resp2"></td>
                                            </tr>

                                            <tr>
                                                <td><input type="checkbox" name="b_chk3"></td>
                                                <td>
                                                    <div> Other mortgages</div>
                                                </td>
                                                <td> <input type="text" min="0" name="ca_owed3"
                                                        class="border-0 text-center w-100"> </td>
                                                <td><input type="checkbox" name="bn_pet3"></td>
                                                <td><input type="checkbox" name="bn_resp3"></td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" name="b_chk4"></td>
                                                <td>
                                                    <div> <span><input type="text"
                                                                class="border-0 w-100 text-center"
                                                                name="b_val1"></span></div>
                                                </td>
                                                <td> <input type="text" min="0" name="ca_owed4"
                                                        class="border-0 text-center w-100"> </td>
                                                <td><input type="checkbox" name="bn_pet4"></td>
                                                <td><input type="checkbox" name="bn_resp4"></td>
                                            </tr>

                                            <tr>
                                                <td> </td>
                                                <td>Auto loans</td>
                                                <td> </td>
                                                <td> </td>
                                                <td> </td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" name="b_chk5"></td>
                                                <td>
                                                    <div> <span><input type="text"
                                                                class="border-0 w-100 text-center"
                                                                name="b_val2"></span></div>
                                                </td>
                                                <td> <input type="text" min="0" name="ca_owed5"
                                                        class="border-0 text-center w-100"> </td>
                                                <td><input type="checkbox" name="bn_pet5"></td>
                                                <td><input type="checkbox" name="bn_resp5"></td>
                                            </tr>
                                            <tr>
                                                <td> </td>
                                                <td>charge/credit card accounts</td>
                                                <td> </td>
                                                <td> </td>
                                                <td> </td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" name="b_chk6"></td>
                                                <td>
                                                    <div> <span><input type="text"
                                                                class="border-0 w-100 text-center"
                                                                name="b_val3"></span></div>
                                                </td>
                                                <td> <input type="text" min="0" name="ca_owed6"
                                                        class="border-0 text-center w-100"> </td>
                                                <td><input type="checkbox" name="bn_pet6"></td>
                                                <td><input type="checkbox" name="bn_resp6"></td>
                                            </tr>

                                            <tr>
                                                <td><input type="checkbox" name="b_chk7"></td>
                                                <td>
                                                    <div> <span><input type="text"
                                                                class="border-0 w-100 text-center"
                                                                name="b_val4"></span></div>
                                                </td>
                                                <td> <input type="text" min="0" name="ca_owed7"
                                                        class="border-0 text-center w-100"> </td>
                                                <td><input type="checkbox" name="bn_pet7"></td>
                                                <td><input type="checkbox" name="bn_resp7"></td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" name="b_chk8"></td>
                                                <td>
                                                    <div> <span><input type="text"
                                                                class="border-0 w-100 text-center"
                                                                name="b_val5"></span></div>
                                                </td>
                                                <td> <input type="text" min="0" name="ca_owed8"
                                                        class="border-0 text-center w-100"> </td>
                                                <td><input type="checkbox" name="bn_pet8"></td>
                                                <td><input type="checkbox" name="bn_resp8"></td>
                                            </tr>

                                            <tr>
                                                <td> </td>
                                                <td>Other</td>
                                                <td> </td>
                                                <td> </td>
                                                <td> </td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" name="b_chk9"></td>
                                                <td>
                                                    <div> <span><input type="text"
                                                                class="border-0 w-100 text-center"
                                                                name="b_val6"></span></div>
                                                </td>
                                                <td> <input type="text" min="0" name="ca_owed9"
                                                        class="border-0 text-center w-100"> </td>
                                                <td><input type="checkbox" name="bn_pet9"></td>
                                                <td><input type="checkbox" name="bn_resp9"></td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" name="b_chk10"></td>
                                                <td>
                                                    <div> <span><input type="text"
                                                                class="border-0 w-100 text-center"
                                                                name="b_val7"></span></div>
                                                </td>
                                                <td> <input type="text" min="0" name="ca_owed10"
                                                        class="border-0 text-center w-100"> </td>
                                                <td><input type="checkbox" name="bn_pet10"></td>
                                                <td><input type="checkbox" name="bn_rep10"></td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" name="b_chk11"></td>
                                                <td>
                                                    <div> <span><input type="text"
                                                                class="border-0 w-100 text-center"
                                                                name="b_val8"></span></div>
                                                </td>
                                                <td> <input type="text" min="0" name="ca_owed11"
                                                        class="border-0 text-center w-100"> </td>
                                                <td><input type="checkbox" name="bn_pet11"></td>
                                                <td><input type="checkbox" name="bn_resp11"></td>
                                            </tr>




                                            <tr>
                                                <td> </td>
                                                <td class="d-flex"><input type="text" min="0"
                                                        name="b_chk_add" class="border-0 border-bottom text-center "
                                                        style="width: 50px"><span class="bg-secondary">Check here if
                                                        additional pages are attached.</span></td>
                                                <td> </td>
                                                <td> </td>
                                                <td> </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="bg-secondary"><b>Total Debts</b> (add next
                                                    column)
                                                </td>
                                                <td class="bg-secondary">
                                                    <div class="d-flex ">$<input type="text" min="0"
                                                            name="t_ca_owed" class="border-0 text-center w-100">
                                                    </div>
                                                </td>
                                                <td><input type="checkbox" name="t_bn_pet"></td>
                                                <td><input type="checkbox" name="t_bn_resp"></td>
                                            </tr>


                                        </tbody>

                                    </table>
                                </div>

                                <div class="fw-bold mt-4 ">C. <span class="ps-2">CONTINGENT ASSETS AND
                                        LIABILITIES:</span></div>
                                <div>
                                    INSTRUCTIONS: If you have any <b>POSSIBLE assets</b> (income potential, accrued
                                    vacation or sick leave, bonus,
                                    inheritance, etc.) or <b>POSSIBLE liabilities</b> (possible lawsuits, future unpaid
                                    taxes, contingent tax liabilities,
                                    debts assumed by another), you must list them here.
                                </div>

                                <div class="table-responsiv mt-3 ">
                                    <table class="table-bordered  border border-dark border-2 w-100">
                                        <tbody>
                                            <tr>
                                                <td class="bg-secondary" colspan="2" rowspan="2"
                                                    style="    width: 550px;
                                                    ">
                                                    <div class="text-center fw-bold">Contingent Assets</div>
                                                    <div class="fw-bold mt-2">Check the line next to any contingent
                                                        asset(s) which you
                                                        are requesting the judge award to you.</div>
                                                </td>
                                                <td class="bg-secondary" rowspan="2">
                                                    <div class="text-center mt-5 fw-bold">Possible Value</div>
                                                </td>
                                                <td class="bg-secondary" colspan="2">
                                                    <div class="text-center fw-bold">Nonmarital </div>
                                                    <div class="text-center fw-bold"> (Check correct column)</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="bg-secondary">Petitioner</td>
                                                <td class="bg-secondary">Respondent</td>
                                            </tr>

                                            <tr>
                                                <td><input type="checkbox" name="ca_chk1"></td>
                                                <td>
                                                    <div> <span><input type="text"
                                                                class="border-0 w-100 text-center"
                                                                name="ca_val1"></span></div>
                                                </td>
                                                <td class="">
                                                    <div class="d-flex ">$<input type="text" min="0"
                                                            name="ca_possible1" class="border-0 text-center w-100">
                                                    </div>
                                                </td>
                                                <td><input type="checkbox" name="can_pet1"></td>
                                                <td><input type="checkbox" name="can_resp1"></td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" name="ca_chk2"></td>
                                                <td>
                                                    <div> <span><input type="text"
                                                                class="border-0 w-100 text-center"
                                                                name="ca_val2"></span></div>
                                                </td>
                                                <td> <input type="text" min="0" name="ca_possible2"
                                                        class="border-0 text-center w-100"> </td>
                                                <td><input type="checkbox" name="can_pet2"></td>
                                                <td><input type="checkbox" name="can_resp2"></td>
                                            </tr>


                                            <tr>
                                                <td colspan="2" class="bg-secondary fw-bold">Total Contingent
                                                    Assets
                                                </td>
                                                <td class="">
                                                    <div class="d-flex ">$<input type="text" min="0"
                                                            name="t_ca_poss" class="border-0 text-center w-100">
                                                    </div>
                                                </td>
                                                <td><input type="checkbox" name="t_can_pet"></td>
                                                <td><input type="checkbox" name="t_can_resp"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="table-responsiv mt-3 ">
                                    <table class="table-bordered  border border-dark border-2 w-100">
                                        <tbody>
                                            <tr>
                                                <td class="bg-secondary" colspan="2" rowspan="2"
                                                    style="    width: 550px;
                                                    ">
                                                    <div class="text-center fw-bold">Contingent Liabilities</div>
                                                    <div class="fw-bold mt-2">Check the line next to any contingent
                                                        debt(s) for which
                                                        you believe you should be responsible.</div>
                                                </td>
                                                <td class="bg-secondary" rowspan="2">
                                                    <div class="text-center mt-5 fw-bold">Possible Amount
                                                        Owed</div>
                                                </td>
                                                <td class="bg-secondary" colspan="2">
                                                    <div class="text-center fw-bold">Nonmarital </div>
                                                    <div class="text-center fw-bold"> (Check correct column)</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="bg-secondary">Petitioner</td>
                                                <td class="bg-secondary">Respondent</td>
                                            </tr>

                                            <tr>
                                                <td><input type="checkbox" name="cl_chk1"></td>
                                                <td>
                                                    <div> <span><input type="text"
                                                                class="border-0 w-100 text-center"
                                                                name="cl_val1"></span></div>
                                                </td>
                                                <td class="">
                                                    <div class="d-flex ">$<input type="text" min="0"
                                                            name="cl_pao1" class="border-0 text-center w-100">
                                                    </div>
                                                </td>
                                                <td><input type="checkbox" name="cln_pet1"></td>
                                                <td><input type="checkbox" name="cln_resp1"></td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" name="cl_chk2"></td>
                                                <td>
                                                    <div> <span><input type="text"
                                                                class="border-0 w-100 text-center"
                                                                name="cl_val2"></span></div>
                                                </td>
                                                <td> <input type="text" min="0" name="cl_pao2"
                                                        class="border-0 text-center w-100"> </td>
                                                <td><input type="checkbox" name="cln_pet2"></td>
                                                <td><input type="checkbox" name="cln_resp2"></td>
                                            </tr>


                                            <tr>
                                                <td colspan="2" class="bg-secondary fw-bold">Total Contingent
                                                    Liabilities
                                                </td>
                                                <td class="">
                                                    <div class="d-flex ">$<input type="text" min="0"
                                                            name="t_cl_pao" class="border-0 text-center w-100">
                                                    </div>
                                                </td>
                                                <td><input type="checkbox" name="t_cln_pet"></td>
                                                <td><input type="checkbox" name="t_cln_resp"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="pt-5">
                                    {{-- @include('layouts.footer12', ['page' => 11]) --}}
                                    <div>Florida Family Law Rules of Procedure Form 12.902(b), Family Law Financial Affidavit (Short Form) (10/21)</div>

                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="section_area py-5" id="ninth_section">
                    <div class="row">
                        <div class="col-lg-10 mx-auto">
                            <div class="row px-lg-5 px-2 py-2 pt-0">
                                <div class="fw-bold"><span class="pe-2">SECTION IV. </span> CHILD SUPPORT
                                    GUIDELINES WORKSHEET</div>
                                <div>(Florida Family Law Rules of Procedure Form 12.902(e), Child Support Guidelines
                                    Worksheet, MUST be
                                    filed with the court at or prior to a hearing to establish or modify child support.
                                    This requirement cannot
                                    be waived by the parties.)</div>
                                <div class="mt-3">[Check <b>one</b> only]</div>
                                <div class=""><input type="checkbox" name="section4_chk1" id="">
                                    <b>A
                                        Child Support Guidelines Worksheet IS or WILL BE filed in this case.</b> This
                                    case involves the
                                    establishment or modification of child support.
                                </div>

                                <div class=""><input type="checkbox" name="section4_chk2" id="">
                                    <b>A
                                        Child Support Guidelines Worksheet IS NOT being filed in this case.</b> The
                                    establishment or modification of child support is not an issue in this case.
                                </div>

                                <div class="fw-bold">I certify that a copy of this document was [check all used]: <span>(<input type="checkbox" name="emailed">)</span> e-mailed
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
                                <div class="pt-5 fw-bold">IF A NONLAWYER HELPED YOU FILL OUT THIS FORM, HE/SHE MUST
                                    FILL IN THE BLANKS BELOW:</div>


                                <div>[fill in all blanks] This form was prepared for the: {choose only one} <span>
                                        (<input type="checkbox" name="coo_pet">) </span> Petitioner <span> (<input
                                            type="checkbox" name="coo_resp">) </span> Respondent <span>This form was
                                        completed with the assistance of: </div>
                                <div><i>{name of individual}</i> <span> <input type="text"
                                            class="border-0 border-bottom footer_field  responsive_input"
                                            style="width: 780px;" name="no_individual">, </span> </div>
                                <div><i>{name of business}</i> <span> <input type="text"
                                            class="border-0 border-bottom footer_field  responsive_input "
                                            name="no_business" style="width: 790px !important">, </span> </div>
                                <div><i>{address} </i><span> <input type="text"
                                            class="border-0 border-bottom footer_field w-75 responsive_input"
                                            name="nl_address" style="width: 860px !important">, </span> </div>
                                <div><i>{city} </i><span> <input type="text"
                                            class="border-0 border-bottom footer_field " name="nl_city"> </span>
                                    <i>, {state}</i> <span> <input type="text" style="width: 50px"
                                            class="border-0 border-bottom footer_field " name="nl_state"> </span>
                                    <i> , {zip code}</i> <span> <input type="text" style="width: 90px"
                                            class="border-0 border-bottom footer_field " name="nl_zipcode"> </span>
                                    <i>,{telephone number} </i><span> <input type="text"
                                            class="border-0 border-bottom footer_field " name="nl_tnumber"
                                            style="width: 240px !important">, </span>
                                </div>
                            </div>
                            <div style="padding-bottom:300px;"></div>
                            {{-- @include('layouts.footer12', ['page' => 15]) --}}
                            <div>Florida Family Law Rules of Procedure Form 12.902(b), Family Law Financial Affidavit (Short Form) (10/21)</div>


                            <div class="row pb-5 pt-3 mx-auto text-center">
                                {{-- <div class="col-lg-2 col-6 pt-lg-0 pt-3 ">
                                    <button type="submit" class="bg-transparent px-4">Submit</button>
                                </div> --}}
                                <div class="col-lg-1  col-6 pt-lg-0 pt-3 ">

                                    <button type="reset" class="bg-transparent px-4">Reset</button>
                                </div>

                            </div>

                            {{-- @include('layouts.pagination', ['page' => 17]) --}}
                        </div>
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
