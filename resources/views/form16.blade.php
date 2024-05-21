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
                        <div class="alert alert-success alert-dismissible fade show">{{ session('success') }} <button
                                type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    {{-- page 1 --}}
                    <section class="px-lg-5 px-2   py-5">
                        <div class="fw-bold text-center  ">
                            <h2 class="fw-bold">INSTRUCTIONS FOR FLORIDA FAMILY LAW RULES OF PROCEDURE</h2>
                            <h2 class="fw-bold">FORM 12.902(b)</h2>
                            <h2 class="fw-bold">FAMILY LAW FINANCIAL AFFIDAVIT (SHORT FORM)</h2>
                            <h2 class="fw-bold">(10/21)</h2>

                            <h3 class="mt-3 fw-bold">When should this form be used?</h3>
                        </div>

                        <div class="mt-3">
                            This form should be used when you are involved in a family law case which requires a <a
                                class="text-dark fw-bold" href="#" class="decoration-none">financial affidavit</a>
                            <span class="fw-bold">and your individual gross income is UNDER $50,000 per year</span>
                            unless:
                            <div class="p-4">
                                <p class="m-0 p-0">(1) You are filing a simplified dissolution of marriage under rule
                                    12.105 and both parties have waived
                                    the filing of a financial affidavit;</p>
                                <p class="m-0 p-0">(2) You have no minor children, no support issues, and have filed a
                                    written settlement agreement
                                    disposing of all financial issues; or</p>
                                <p class="m-0 p-0">(3) The court lacks jurisdiction to determine any financial issues.
                                </p>
                            </div>
                            This form should be typed or printed in black ink. You should <a href="#"
                                class="fw-bold text-dark">file</a> this document with the <a href="#"
                                class="fw-bold text-dark">clerk of the
                                circuit court</a> in the county where the <a href="#"
                                class="fw-bold text-dark">petition</a> was filed and keep a copy for your records.
                        </div>
                        <div class="fw-bold text-center h3 mt-3">What should I do next?</div>

                        <div class="mt-3">A copy of this form must be filed with the court and served on the other
                            party or his or her attorney in
                            your case within 45 days of being served with the petition, if it is not served on him or
                            her with your initial
                            papers. The copy you are serving to the other party must be either mailed, e-mailed, or
                            hand-delivered to
                            the opposing party or his or her attorney on the same day indicated on the certificate of
                            service. If it is
                            mailed, it must be postmarked on the date indicated in the certificate of service. <span
                                class="fw-bold">Service</span> must be in
                            accordance with Florida Rule of General Practice and Judicial Administration 2.516.</div>

                        <div class="fw-bold text-center h3 mt-3">IMPORTANT INFORMATION REGARDING E-FILING</div>

                        <div class="mt-3">The Florida Rules of General Practice and Judicial Administration now
                            require that all petitions, pleadings,
                            and documents be filed electronically except in certain circumstances. <span
                                class="fw-bold">Self-represented litigants may file
                                petitions or other pleadings or documents electronically; however, they are not required
                                to do so.</span> If
                            you choose to file your pleadings or other documents electronically, you must do so in
                            accordance with
                            Florida Rule of General Practice and Judicial Administration 2.525, and you must follow the
                            procedures of
                            the judicial circuit in which you file. The rules and procedures should be carefully read
                            and followed.</div>

                        <div class="fw-bold text-center h3 mt-3">IMPORTANT INFORMATION REGARDING E-SERVICE ELECTION
                        </div>

                        <div class="mt-3">
                            After the initial service of process of the petition or supplemental petition by the Sheriff
                            or certified
                            process server, the Florida Rules of General Practice and Judicial Administration now
                            require that all
                            documents required or permitted to be served on the other party must be served by electronic
                            mail (e-
                            mail) except in certain circumstances. <span class="fw-bold">You must strictly comply with
                                the format requirements set forth
                                in the Florida Rules of General Practice and Judicial Administration.</span> If you
                            elect to participate in
                        </div>

                    </section>
                </section>

                {{-- page 2 --}}
                <section class="section_area py-5">
                    <div class="row px-lg-5 px-2 py-2 pt-0">
                        <div>electronic service, which means serving or receiving pleadings by electronic mail (e-mail),
                            or through the
                            Florida Courts E-Filing Portal, you must review Florida Rule of General Practice and
                            Judicial
                            Administration 2.516. You may find this rule at www.flcourts.org through the link to the
                            Rules of General
                            Practice and Judicial Administration provided under either Family Law Forms: Getting
                            Started, or Rules
                            of Court in the A-Z Topical Index.</div>
                        <div class="mt-3">
                            <span class="fw-bold h5"> SELF-REPRESENTED LITIGANTS MAY SERVE DOCUMENTS BY E-MAIL; HOWEVER,
                                THEY ARE NOT
                                REQUIRED TO DO SO.</span> If a self-represented litigant elects to serve and receive
                            documents by email, the
                            procedures must always be followed once the initial election is made.
                        </div>

                        <div class="mt-3">
                            To serve and receive documents by e-mail, you must designate your e-mail addresses by using
                            the
                            Designation of Current Mailing and E-mail Address, Florida Supreme Court Approved Family Law
                            Form
                            12.915, and you must provide your e-mail address on each form on which your signature
                            appears.
                            Please <span class="fw-bold f5">CAREFULLY</span> read the rules and instructions for: <span
                                class="fw-bold h5">Certificate of Service (General), Florida Supreme
                                Court Approved Family Law Form 12.914; Designation of Current Mailing and E-mail
                                Address,</span> Florida
                            Supreme Court Approved Family Law Form 12.915; and Florida Rule of General Practice and
                            Judicial
                            Administration 2.516.
                        </div>

                        <div class="fw-bold h3 text-center mt-3">Where can I look for more information?</div>

                        <div class="mt-3">
                            <span class="fw-bold h5">Before proceeding, you should read “General Information for
                                Self-Represented Litigants” found at the
                                beginning of these forms. </span>The words that are in <a href="#"
                                class="fw-bold text-dark h5">“bold underline”</a> in these instructions are defined
                            there.
                            For further information, see Florida Family Law Rule of Procedure 12.285.
                        </div>

                        <div class="fw-bold h3 text-center mt-3">Special notes . . .</div>
                        <div class="mt-3">If you want to keep your address confidential because you have been found by
                            a judge to be the victim of
                            sexual battery, aggravated child abuse, aggravated stalking, harassment, aggravated battery,
                            or domestic
                            violence, do not enter the address, telephone, and fax information at the bottom of this
                            form. Instead,
                            file <span class="fw-bold h5">Request for Confidential Filing of Address,</span> Florida
                            Supreme Court Approved Family Law Form
                            12.980(h).</div>

                        <div class="mt-3"><span class="fw-bold h5">Hourly</span> - If you are paid by the hour, you
                            may convert your income to monthly as follows:


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
                        <div><span class="fw-bold h5">Daily</span> - If you are paid by the day, you may convert your
                            income to monthly as follows:


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

                        <div><span class="fw-bold h5">Weekly</span> - If you are paid by the week, you may convert your
                            income to monthly as follows:
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
                    </div>


                </section>

                {{--  page 3 --}}

                <section class="section_area py-5">
                    <div class="row px-lg-5 px-2 py-2 pt-0">
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
                        <div><span class="fw-bold h5">Bi-weekly</span> - If you are paid every two weeks, you may
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

                        <div><span class="fw-bold h5">Semi-monthly </span> - If you are paid twice per month, you may
                            convert your income to monthly as follows:
                            <div class="row">
                                <div class="col-lg-2">
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
                                <div class="col-lg-5">
                                    <div class="fw-bold ">Monthly Amount</div>
                                </div>
                            </div>

                        </div>


                        <div class="mt-3">Expenses may be converted in the same manner.</div>

                        <div class="mt-3" style="padding-bottom: 750px">Remember, a person who is NOT an attorney is
                            called a nonlawyer. If a nonlawyer helps you fill out these
                            forms, that person must give you a copy of a <span class="fw-bold">Disclosure from
                                Nonlawyer,</span> Florida Family Law Rules of
                            Procedure Form 12.900(a), before he or she helps you. A nonlawyer helping you fill out these
                            forms also
                            <span class="fw-bold">must</span> put his or her name, address, and telephone number on the
                            bottom of the last page of every form
                            he or she helps you complete.
                        </div>

                    </div>
                </section>

                {{-- page 4 --}}
                <section class="section_area py-5">
                    <div class="row px-lg-5 px-2 py-2 pt-0">
                        <div class=" justify-content-center d-flex">IN THE CIRCUIT COURT OF THE <input type="text"
                                min="0" name="federal_income" class="border-0 footer_field border-bottom">
                            JUDICIAL CIRCUIT,</div>
                        <div class=" justify-content-center m-0 p-0  d-flex">IN AND FOR <input type="text"
                                min="0" name="federal_income"
                                class="border-0 m-0 p-0  footer_field border-bottom"> COUNTY, FLORIDA</div>

                        <div class="d-flex justify-content-end mt-2">Case No.: <input type="text" min="0"
                                name="federal_income" class="border-0 m-0 p-0 footer_field border-bottom"></div>
                        <div class="d-flex justify-content-end">Division: <input type="text" min="0"
                                name="federal_income" class="border-0 m-0 p-0  footer_field border-bottom"></div>

                        <div class="d-flex  mt-2"><input type="text" min="0" name="federal_income"
                                class="border-0 m-0 p-0 footer_field border-bottom">,</div>
                        <div class="" style="padding-left: 130px">Petitioner,</div>

                        <div class="mt-1">and</div>
                        <div class="d-flex  mt-1"><input type="text" min="0" name="federal_income"
                                class="border-0 m-0 p-0 footer_field border-bottom">,</div>
                        <div class="" style="padding-left: 115px">Respondent.</div>

                        <div class="text-center h3 fw-bold mt-4">FAMILY LAW FINANCIAL AFFIDAVIT (SHORT FORM)</div>
                        <div class="text-center">(Under $50,000 Individual Gross Annual Income)</div>

                        <div class="d-flex mt-3">I, {full legal name} <input type="text" min="0"
                                name="federal_income" class="border-0 m-0 p-0 footer_field border-bottom">, being
                            sworn, certify that the following
                            information is true:</div>
                        <div class="d-flex">My Occupation:<input type="text" min="0" name="federal_income"
                                class="border-0 m-0 p-0 footer_field border-bottom">Employed by: <input type="text"
                                min="0" name="federal_income"
                                class="border-0 m-0 p-0 footer_field border-bottom"></div>

                        <div class="d-flex">Business Address:<input type="text" min="0"
                                name="federal_income" class="border-0 m-0 p-0 footer_field border-bottom "> </div>

                        <div class="d-flex">Pay rate: <div class="d-flex px-2 "> $ <input type="text"
                                    min="0" name="federal_income"
                                    class="border-0 m-0 p-0 footer_field border-bottom"></div> <input type="checkbox"
                                name="f_t_student" class=""> <span class="px-2">every week</span> <input
                                type="checkbox" name="f_t_student" class=""> <span class="px-2">every other
                                week</span>
                            <input type="checkbox" name="f_t_student" class=""> <span class="px-2">twice a
                                week</span> <input type="checkbox" name="f_t_student" class=""> <span
                                class="px-2">monthly</span> <input type="checkbox" name="f_t_student"
                                class=""> <span class="ps-2">other:</span><input type="text"
                                min="0" name="federal_income"
                                class="border-0 m-0 p-0 footer_field border-bottom">
                        </div>

                        <div class="d-flex mt-2"><input type="checkbox" name="f_t_student" class="me-1">Check here
                            if unemployed and explain on a separate sheet your efforts to find employment.</div>


                        <div class="fw-bold mt-3">SECTION I. PRESENT MONTHLY GROSS INCOME:</div>


                        <div><span class="fw-bold pe-2">All amounts must be MONTHLY.</span> See the instructions with
                            this form to figure out money amounts for
                            anything that is NOT paid monthly. Attach more paper, if needed. Items included under
                            “other” should
                            be listed separately with separate dollar amounts.</div>

                            <div class="row mt-1">
                                <div class="col-lg-2 d-flex"><span class="me-3">1.</span>  <div class="d-flex ">$<input type="text" min="0"
                                    name="t_u_m_service" class="border-0 p-0 m-0 border-bottom footer_field w-100">
                            </div></div>
                                <div class="col-lg-10">Monthly gross salary or wages</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-2 d-flex"><span class="me-3">2.</span>  <div class="d-flex "> <input type="text" min="0"
                                    name="t_u_m_service" class="border-0 p-0 m-0 border-bottom footer_field w-100">
                            </div></div>
                                <div class="col-lg-10">Monthly bonuses, commissions, allowances, overtime, tips, and similar payments</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-2 d-flex"><span class="me-3">3.</span>   <input type="text" min="0"
                                    name="t_u_m_service" class="border-0 p-0 m-0 mb-5 pb-5 border-bottom footer_field w-100">
                            </div>
                                <div class="col-lg-10">Monthly business income from sources such as self-employment, partnerships, close
                                    corporations, and/or independent contracts (gross receipts minus ordinary and necessary
                                    expenses required to produce income) (Attach sheet itemizing such income and expenses.)</div>
                            </div>
                    </div>
                </section>







            </form>
        </div>
    </div>
</body>

</html>
