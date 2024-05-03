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

            .expires_input {
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
    </style>
</head>

<body>
    <div class="container-fluid   py-1 py-lg-3">
        <div class="container bg_color p-lg-3 p-1  ">

            <form action="{{ route('form4.submit') }}" class="" method="post">
                @csrf
                <section class="section_area row page1 bg-white pt-5 p-lg-5 pe-2 pe-lg-5 p-lg-3 m-3 mt-4  pt-lg-5 pt-4">




                    <div class="col-lg-10 mx-auto">
                        <div class="fw-bold text-center">Appendix V</div>
                        <div class="fw-bold text-center">Family Part Case Information Statement</div>
                        <div class="fw-bold text-center">This form and attachments are confidential pursuant to Rules
                            1:38-3(d)(1) and 5:5-2(f)</div>
                        <div class="small_text">Attorney(s):</div>
                        <div class="small_text">Office Address:</div>
                        <div class="small_text">Tel. No./Fax No.</div>
                        <div class="small_text">Attorney(s) for:</div>

                        <div class="row">
                            <div class="col-lg-6 border border-dark py-3">

                                <div class="  px-lg-0">
                                    <input type="text" name="court_address"
                                        class="form-control border-none border-0 border-bottom border-dotted shadow-none">
                                    <div class="text-end"> Plaintiff,</div>
                                </div>
                                <div class="small_text">vs</div>
                                <div class="  px-lg-0">
                                    <input type="text" name="court_address"
                                        class="form-control border-none border-0 border-bottom border-dotted shadow-none">
                                    <div class="text-end"> Defendant.</div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <h5 class="text-end">SUPERIOR COURT OF NEW JERSEY</h5>
                                <h5 class="text-end">CHANCERY DIVISION, FAMILY PART</h5>
                                <div class="d-flex justify-content-end ">
                                    <select id="county" name="county"
                                        class="w-50   form-select form-control border-0 border-bottom">
                                        <option selected=""> </option>
                                        <option value="ATLANTIC">ATLANTIC</option>
                                        <option value="BERGEN">BERGEN</option>
                                        <option value="BURLINGTON">BURLINGTON</option>
                                        <option value="CAMDEN">CAMDEN</option>
                                        <option value="CAPE MAY">CAPE MAY</option>
                                        <option value="CUMBERLAND">CUMBERLAND</option>
                                        <option value="ESSEX">ESSEX</option>
                                        <option value="GLOUCESTER">GLOUCESTER</option>
                                        <option value="HUDSON">HUDSON</option>
                                        <option value="HUNTERDON">HUNTERDON</option>
                                        <option value="MERCER">MERCER</option>
                                        <option value="MIDDLESEX">MIDDLESEX</option>
                                        <option value="MONMOUTH">MONMOUTH</option>
                                        <option value="MORRIS">MORRIS</option>
                                        <option value="OCEAN">OCEAN</option>
                                        <option value="PASSAIC">PASSAIC</option>
                                        <option value="SALEM">SALEM</option>
                                        <option value="SOMERSET">SOMERSET</option>
                                        <option value="SUSSEX">SUSSEX</option>
                                        <option value="UNION">UNION</option>
                                        <option value="WARREN">WARREN</option>
                                    </select>
                                    <h5 class="text-end"> COUNTY</h5>
                                </div>
                                <h5 class='d-flex justify-content-end pt-3'>
                                    DOCKET NO. <input type="text" name="court_address"
                                        class="w-75 form-control border-none border-0 border-bottom border-dotted shadow-none">

                                </h5>
                                <h5 class="ps-lg-2  ">CASE INFORMATION STATEMENT</h5>
                                <h5 class='d-flex justify-content-end ps-2'>
                                    OF <input type="text" name="court_address"
                                        class=" form-control border-none border-0 border-bottom border-dotted shadow-none">

                                </h5>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-lg-1">
                                <h5>NOTICE:</h5>
                            </div>
                            <div class="col-lg-11 ps-3">
                                <p>This statement must be fully completed, filed and served, with all required
                                    attachments, in accordance with Court Rule 5:5-2 based upon the information
                                    available. In those cases where the Case Information Statement is required, it shall
                                    be filed within 20 days after the filing of the Answer or Appearance. Failure to
                                    file a Case Information Statement may result in the dismissal of a party’s
                                    pleadings.
                                </p>
                            </div>

                            <h5 class="pt-2"> INSTRUCTIONS: </h5>

                            <p>The Case Information Statement is a document which is filed with the court setting forth
                                the financial details of your case. The required information includes your income, your
                                spouse's/partner's income, a budget of your joint life style expenses, a budget of your
                                current life style expenses including the expenses of your children, if applicable, an
                                itemization of the amounts which you may be paying in support for your spouse/partner or
                                children if you are contributing to their support, a summary of the value of all assets
                                referenced on page 8 – <strong>It is extremely important that the Case Information
                                    Statement be as accurate as possible because you are required to certify that the
                                    contents of the form are true.</strong> It helps establish your lifestyle which is
                                an important component of alimony/spousal support and child support.</p>
                            <p>The monthly expenses must be reviewed and should be based on actual expenditures such as
                                those shown from checkbook registers, bank statements or credit card statements from the
                                past 24 months. The asset values should be taken, if possible, from actual appraisals or
                                account statements. If the values are estimates, it should be clearly noted that they
                                are estimates.</p>
                            <p>According to the Court Rules, you must update the Case Information Statement as your
                                circumstances change. For example, if you move out of your residence and acquire your
                                own apartment, you should file an Amended Case Information Statement showing your new
                                rental and other living expenses.</p>
                            <p>It is also very important that you attach copies of relevant documents as required by the
                                Case Information Statement, including your most recent tax returns with W-2 forms, 1099s
                                and your three (3) most recent paystubs.</p>
                            <p>If a request has been made for college or post-secondary school contribution, you must
                                also attach all relevant information pertaining to that request, including but not
                                limited to documentation of all costs and reimbursements or assistance for which
                                contribution is sought, such as invoices or receipts for tuition, board and books; proof
                                of enrollment; and proof of all financial aid, scholarships, grants and student loans
                                obtained.</p>
                        </div>



                        @include('layouts.footer', ['page' => 1])
                    </div>
                </section>

                <section class="section_area row page1 bg-white pt-5 p-lg-5 pe-2 pe-lg-5 p-lg-3 m-3 mt-4  pt-lg-5 pt-4">
                    <div class="col-lg-10 mx-auto">

                        <div class="row mt-lg-3">
                            <div class="col-lg-6">
                                <h5>Part A - Case Information:</h5>
                                <div class="d-flex">
                                    <input type="text" name="court_address"
                                        class=" form-control w-100 border-none border-0 border-bottom border-dotted shadow-none">
                                </div>
                                <div class='d-flex pt-2'>
                                    <small class="small_text"> Date of Statement : </small> <input type="text"
                                        name="court_address"
                                        class=" form-control  border-none border-0 border-bottom border-dotted shadow-none"
                                        style="width:333px">

                                </div>
                                <div class='d-flex pt-2'>
                                    <small class="small_text pe-4">Date of Divorce, Dissolution of Civil </small>
                                    <input type="text" name="court_address"
                                        class=" form-control  border-none border-0 border-bottom border-dotted shadow-none  "
                                        style="width:200px">

                                </div>
                                <div class='pt-2'>
                                    <div class="small_text pe-4">Union or Termination of Domestic </div>
                                    <div class="small_text pe-4">Partnership (post-Judgment matters) </div>

                                </div>
                                <div class='d-flex pt-2'>
                                    <small class="small_text pe-4">Date(s) of Prior Statement(s)</small> <input
                                        type="text" name="court_address"
                                        class=" form-control  border-none border-0 border-bottom border-dotted shadow-none "
                                        style="width:247px">

                                </div>
                                <div class='d-flex pt-2 justify-content-end'> <input type="text"
                                        name="court_address"
                                        class=" form-control  border-none border-0 border-bottom border-dotted shadow-none  "
                                        style="width:247px">

                                </div>
                                <div class='d-flex pt-2'>
                                    <small class="small_text pe-4">Your Birthdate</small> <input type="text"
                                        name="court_address"
                                        class=" form-control  border-none border-0 border-bottom border-dotted shadow-none "
                                        style="width:343px">

                                </div>
                                <div class='d-flex pt-2'>
                                    <small class="small_text pe-4">Date of Marriage, or entry into Civil Union</small>
                                    <input type="text" name="court_address"
                                        class=" form-control  border-none border-0 border-bottom border-dotted shadow-none "
                                        style="width:160px">

                                </div>
                                <div class='d-flex pt-2'>
                                    <small class="small_text pe-4">or Domestic Partnership</small>

                                </div>

                                <div class='d-flex pt-2'>
                                    <small class="small_text pe-4">Date of Separation</small> <input type="text"
                                        name="court_address"
                                        class=" form-control  border-none border-0 border-bottom border-dotted shadow-none "
                                        style="width:310px">

                                </div>
                                <div class='d-flex pt-2'>
                                    <small class="small_text pe-4">Date of Complaint</small> <input type="text"
                                        name="court_address"
                                        class=" form-control  border-none border-0 border-bottom border-dotted shadow-none "
                                        style="width:310px">

                                </div>
                                <div>
                                    <div class="small_text">Does an agreement exist between parties relative to any
                                        issue?</div>
                                    <div class="small_text text-center">If Yes, ATTACH a copy (if written) or a summary
                                        (if oral).</div>
                                </div>

                            </div>

                            <div class="col-lg-6">
                                <h5>Issues in Dispute:</h5>

                                <div class='d-flex pt-2'>
                                    <small class="small_text"> Cause of Action</small> <input type="text"
                                        name="court_address"
                                        class=" form-control  border-none border-0 border-bottom border-dotted shadow-none ms-lg-4"
                                        style="width:333px">

                                </div>
                                <div class='d-flex pt-2'>
                                    <small class="small_text pe-4">Custody </small> <input type="text"
                                        name="court_address"
                                        class=" form-control  border-none border-0 border-bottom border-dotted shadow-none  ms-lg-4"
                                        style="width:360px">

                                </div>

                                <div class='d-flex pt-2'>
                                    <small class="small_text pe-4"> Parenting Time</small> <input type="text"
                                        name="court_address"
                                        class=" form-control  border-none border-0 border-bottom border-dotted shadow-none "
                                        style="width:337px">

                                </div>

                                <div class='d-flex pt-2'>
                                    <small class="small_text pe-4">Alimony</small> <input type="text"
                                        name="court_address"
                                        class=" form-control  border-none border-0 border-bottom border-dotted shadow-none "
                                        style="width:382px">

                                </div>
                                <div class='d-flex pt-2'>
                                    <small class="small_text pe-4">Child Support</small> <input type="text"
                                        name="court_address"
                                        class=" form-control  border-none border-0 border-bottom border-dotted shadow-none "
                                        style="width:345px">

                                </div>
                                <div class=' pt-2'>
                                    <div class="small_text pe-4">Anticipated College/Post-</div>
                                    <div class="small_text pe-4">Secondary Education</div>
                                </div>

                                <div class='d-flex pt-2'>
                                    <small class="small_text pe-4">Expenses</small> <input type="text"
                                        name="court_address"
                                        class=" form-control  border-none border-0 border-bottom border-dotted shadow-none "
                                        style="width:370px">

                                </div>

                                <div class='d-flex pt-2'>
                                    <small class="small_text pe-4">Other issues (be specific)</small> <input
                                        type="text" name="court_address"
                                        class=" form-control  border-none border-0 border-bottom border-dotted shadow-none "
                                        style="width:270px">

                                </div>
                                <div class='d-flex pt-2 justify-content-end'>
                                    <input type="text" name="court_address"
                                        class=" form-control  border-none border-0 border-bottom border-dotted shadow-none "
                                        style="width:270px">

                                </div>
                                <div class='d-flex pt-2 justify-content-end'>
                                    <input type="text" name="court_address"
                                        class=" form-control  border-none border-0 border-bottom border-dotted shadow-none "
                                        style="width:270px">

                                </div>
                                <div class="d-flex">
                                    <div class='d-flex me-4 '>
                                        <input type="checkbox" name="court_address"
                                            class="border-none border-0 border-bottom border-dotted shadow-none  me-2">Yes
                                    </div>
                                    <div class="d-flex">

                                        <input type="checkbox" name="court_address"
                                            class="border-none border-0 border-bottom border-dotted shadow-none me-2 ">No
                                    </div>
                                </div>
                                <div>
                                    <div class="small_text">Does an agreement exist between parties relative to any
                                        issue?</div>
                                    <div class="small_text text-center">If Yes, ATTACH a copy (if written) or a summary
                                        (if oral).</div>
                                </div>

                            </div>
                        </div>

                        <div class="row mt-lg-3">
                            <div class="small_text">
                                1. Name and Addresses of Parties:

                            </div>
                            <div class='d-flex pt-2'>
                                <small class="  pe-4">Your Name</small> <input type="text" name="court_address"
                                    class="form-control  border-none border-0 border-bottom border-dotted shadow-none "
                                    style="width:850px">

                            </div>
                            <div class="row pt-3">
                                <div class="col-lg-2  ">Street Address</div>
                                <div class="col-lg-4 px-lg-0"><input type="text" name="court_address"
                                        class="form-control  border-none border-0 border-bottom border-dotted shadow-none ">
                                </div>
                                <div class=" " style="width:50px;">City</div>
                                <div class="col-lg-2 px-lg-0"><input type="text" name="court_address"
                                        class="form-control  border-none border-0 border-bottom border-dotted shadow-none ">
                                </div>
                                <div class="col-lg-1 px-lg-0">State/Zip </div>
                                <div class="col-lg-2 px-lg-0"><input type="text" name="court_address"
                                        class="form-control  border-none border-0 border-bottom border-dotted shadow-none "
                                        style="width:200px"></div>
                            </div>

                            <div class='d-flex pt-2'>
                                <small class="  pe-4">Email :</small> <input type="text" name="court_address"
                                    class="form-control  border-none border-0 border-bottom border-dotted shadow-none "
                                    style="width:882px">

                            </div>
                            <div class='d-flex pt-2'>
                                <small class="  pe-4">Other Party’s Name :</small> <input type="text"
                                    name="court_address"
                                    class="form-control  border-none border-0 border-bottom border-dotted shadow-none "
                                    style="width:782px">

                            </div>

                            <div class="row pt-3">
                                <div class="col-lg-2  ">Street Address</div>
                                <div class="col-lg-4 px-lg-0"><input type="text" name="court_address"
                                        class="form-control  border-none border-0 border-bottom border-dotted shadow-none ">
                                </div>
                                <div class=" " style="width:50px;">City</div>
                                <div class="col-lg-2 px-lg-0"><input type="text" name="court_address"
                                        class="form-control  border-none border-0 border-bottom border-dotted shadow-none ">
                                </div>
                                <div class="col-lg-1 px-lg-0">State/Zip </div>
                                <div class="col-lg-2 px-lg-0"><input type="text" name="court_address"
                                        class="form-control  border-none border-0 border-bottom border-dotted shadow-none "
                                        style="width:200px"></div>
                            </div>
                            <div class='d-flex pt-2'>
                                <small class="  pe-4">Email :</small> <input type="text" name="court_address"
                                    class="form-control  border-none border-0 border-bottom border-dotted shadow-none "
                                    style="width:882px">

                            </div>


                            <div class="row pt-lg-3">
                                <div class="small_text">2. Name, Address, Birthdate and Person with whom children reside:</div>
                                <div class="small_text">a. Child(ren) From This Relationship</div>
                                <div class="col-lg-3">
                                    <h5 class="small_text">Child’s Full Name </h5><input type="text" name="court_address"
                                        class="form-control  border-none border-0 border-bottom border-dotted shadow-none "><input
                                        type="text" name="court_address"
                                        class="form-control  border-none border-0 border-bottom border-dotted shadow-none "><input
                                        type="text" name="court_address"
                                        class="form-control  border-none border-0 border-bottom border-dotted shadow-none "><input
                                        type="text" name="court_address"
                                        class="form-control  border-none border-0 border-bottom border-dotted shadow-none ">
                                </div>

                                <div class="col-lg-4">
                                    <h5 class="small_text">Address</h5> <input type="text" name="court_address"
                                        class="form-control  border-none border-0 border-bottom border-dotted shadow-none "><input
                                        type="text" name="court_address"
                                        class="form-control  border-none border-0 border-bottom border-dotted shadow-none "><input
                                        type="text" name="court_address"
                                        class="form-control  border-none border-0 border-bottom border-dotted shadow-none "><input
                                        type="text" name="court_address"
                                        class="form-control  border-none border-0 border-bottom border-dotted shadow-none ">
                                </div>

                                <div class="col-lg-2">
                                    <h5 class="small_text">Birthdate</h5> <input type="text" name="court_address"
                                        class="form-control  border-none border-0 border-bottom border-dotted shadow-none ">
                                    <input type="text" name="court_address"
                                        class="form-control  border-none border-0 border-bottom border-dotted shadow-none ">
                                    <input type="text" name="court_address"
                                        class="form-control  border-none border-0 border-bottom border-dotted shadow-none ">
                                    <input type="text" name="court_address"
                                        class="form-control  border-none border-0 border-bottom border-dotted shadow-none ">
                                </div>

                                <div class="col-lg-3">
                                    <h5 class="small_text">Person’s Name</h5><input type="text" name="court_address"
                                        class="form-control  border-none border-0 border-bottom border-dotted shadow-none "><input
                                        type="text" name="court_address"
                                        class="form-control  border-none border-0 border-bottom border-dotted shadow-none "><input
                                        type="text" name="court_address"
                                        class="form-control  border-none border-0 border-bottom border-dotted shadow-none "><input
                                        type="text" name="court_address"
                                        class="form-control  border-none border-0 border-bottom border-dotted shadow-none ">
                                </div>


                                <div>
                                </div>

                            </div>

                            <div class="row pt-lg-3">
                                <div>b. Child(ren) From Other Relationships</div>
                                <div class="col-lg-3">
                                    <h5 class="small_text">Child’s Full Name </h5><input type="text" name="court_address"
                                        class="form-control  border-none border-0 border-bottom border-dotted shadow-none "><input
                                        type="text" name="court_address"
                                        class="form-control  border-none border-0 border-bottom border-dotted shadow-none "><input
                                        type="text" name="court_address"
                                        class="form-control  border-none border-0 border-bottom border-dotted shadow-none "><input
                                        type="text" name="court_address"
                                        class="form-control  border-none border-0 border-bottom border-dotted shadow-none ">
                                </div>

                                <div class="col-lg-4">
                                    <h5 class="small_text">Address</h5> <input type="text" name="court_address"
                                        class="form-control  border-none border-0 border-bottom border-dotted shadow-none "><input
                                        type="text" name="court_address"
                                        class="form-control  border-none border-0 border-bottom border-dotted shadow-none "><input
                                        type="text" name="court_address"
                                        class="form-control  border-none border-0 border-bottom border-dotted shadow-none "><input
                                        type="text" name="court_address"
                                        class="form-control  border-none border-0 border-bottom border-dotted shadow-none ">
                                </div>

                                <div class="col-lg-2">
                                    <h5 class="small_text">Birthdate</h5> <input type="text" name="court_address"
                                        class="form-control  border-none border-0 border-bottom border-dotted shadow-none ">
                                    <input type="text" name="court_address"
                                        class="form-control  border-none border-0 border-bottom border-dotted shadow-none ">
                                    <input type="text" name="court_address"
                                        class="form-control  border-none border-0 border-bottom border-dotted shadow-none ">
                                    <input type="text" name="court_address"
                                        class="form-control  border-none border-0 border-bottom border-dotted shadow-none ">
                                </div>

                                <div class="col-lg-3">
                                    <h5 class="small_text">Person’s Name</h5><input type="text" name="court_address"
                                        class="form-control  border-none border-0 border-bottom border-dotted shadow-none "><input
                                        type="text" name="court_address"
                                        class="form-control  border-none border-0 border-bottom border-dotted shadow-none "><input
                                        type="text" name="court_address"
                                        class="form-control  border-none border-0 border-bottom border-dotted shadow-none "><input
                                        type="text" name="court_address"
                                        class="form-control  border-none border-0 border-bottom border-dotted shadow-none ">
                                </div>


                                <div>
                                </div>

                            </div>

                            <div class="row pt-lg-3">
                                <h5 class="">Part B - Miscellaneous Information:</h5>
                                <div class="small_text">1. Information about Employment (Provide Name & Address of Business, if
                                    Self-employed)</div>
                                <div class="col-lg-3">
                                    <h5 style="width: 250px;" class="small_text">Name of Employer/Business </h5>
                                </div>
                                <div class="col-lg-3"><input type="text" name="court_address"
                                        class="form-control  border-none border-0 border-bottom border-dotted shadow-none ">
                                </div>
                                <div class="col-lg-1 small_text">Address</div>
                                <div class="col-lg-5"><input type="text" name="court_address"
                                        class="form-control  border-none border-0 border-bottom border-dotted shadow-none "
                                        style="width: 373px;"></div>


                                <div>
                                </div>

                            </div>
                            <div class="row d-flex justify-content-end">
                                <div class="col-lg-5 "><input type="text" name="court_address"
                                        class="form-control  border-none border-0 border-bottom border-dotted shadow-none "
                                        style="width: 373px;"></div>
                            </div>

                            <div class="row pt-lg-3">
                                <div class="col-lg-3">
                                    <h5 style="width: 250px;" class="small_text">Name of Employer/Business </h5>
                                </div>
                                <div class="col-lg-3"><input type="text" name="court_address"
                                        class="form-control  border-none border-0 border-bottom border-dotted shadow-none ">
                                </div>
                                <div class="col-lg-1 small_text">Address</div>
                                <div class="col-lg-5"><input type="text" name="court_address"
                                        class="form-control  border-none border-0 border-bottom border-dotted shadow-none "
                                        style="width: 373px;"></div>


                                <div>
                                </div>

                            </div>
                            <div class="row d-flex justify-content-end">
                                <div class="col-lg-5 "><input type="text" name="court_address"
                                        class="form-control  border-none border-0 border-bottom border-dotted shadow-none "
                                        style="width: 373px;"></div>
                            </div>

                            <div class="row mt-lg-3">
                                <div class="col-lg-6 small_text">2. Do you have Insurance obtained through Employment/Business?</div>
                                <div class="col-lg-6 d-flex">

                                    <div class="d-flex "><input class="me-2" type="checkbox" name="" id=""> Yes</div>
                                    <div class="d-flex mx-lg-5"><input class="me-2" type="checkbox" name="" id=""> No</div>
                                    <div class="d-flex">Type of Insurance:</div>


                                </div>
                            </div>
                            <div class='d-flex pt-2'>
                                <small class=" me-2">Other (explain)</small> <input type="text" name="court_address"
                                    class="form-control  border-none border-0 border-bottom border-dotted shadow-none "
                                    style="width:820px">

                            </div>

                            <div class="row mt-lg-3">
                                <div class="col-lg-5 small_text">Is Insurance available through Employment/Business?</div>
                                <div class="col-lg-7 d-flex">

                                    <div class="d-flex "><input class="me-2" type="checkbox" name="" id=""> Yes</div>
                                    <div class="d-flex mx-lg-5"><input class="me-2" type="checkbox" name="" id=""> No</div>


                                </div>
                            </div>

                            <div class='d-flex pt-2'>
                                <small class="ms-4 me-2">Explain</small> <input type="text" name="court_address"
                                    class="form-control  border-none border-0 border-bottom border-dotted shadow-none "
                                    style="width:850px">

                            </div>


                        </div>

                </section>
            </form>
        </div>
    </div>
    </div>
    </div>
</body>

</html>
