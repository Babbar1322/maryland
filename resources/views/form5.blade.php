{{-- 10482_fam_cis NJ.pdf --}}
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

            .d_sm_block {
                display: block !important;

            }

            .responsive_input {
                width: 100% !important;
            }
            .pb_checkbox {
                display: block !important;
            }


            .responsive_input {
                max-width: 100% !important;
                overflow: hidden;
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

            <form action="{{ route('form5.submit') }}" class="mb-5" method="post">
                @csrf


                <section class="section_area row page1 bg-white pt-5 p-lg-5 pe-2 pe-lg-5 p-lg-3 m-3 mt-4  pt-lg-5 pt-4" id="first_section" >
                            @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show">{{ session('success') }} <button
                                    type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
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
                                    <input type="text" name="Plaintiff_name"
                                        class="form-control border-none border-0 border-bottom border-dotted shadow-none">
                                    <div class="text-end"> Plaintiff,</div>
                                </div>
                                <div class="small_text">vs</div>
                                <div class="  px-lg-0">
                                    <input type="text" name="defendant_name"
                                        class="form-control border-none border-0 border-bottom border-dotted shadow-none">
                                    <div class="text-end"> Defendant.</div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <h5 class="text-end">SUPERIOR COURT OF NEW JERSEY</h5>
                                <h5 class="text-end">CHANCERY DIVISION, FAMILY PART</h5>
                                <div class="d-flex justify-content-end d_sm_block ">
                                    <select id="county" name="county"
                                        class="w-50 responsive_input  form-select form-control border-0 border-bottom">
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
                                <h5 class='d-flex d_sm_block justify-content-end pt-3'>
                                    DOCKET NO. <input type="text" name="docket_no"
                                        class="w-75 form-control border-none border-0 border-bottom border-dotted shadow-none responsive_input ">

                                </h5>
                                <h5 class="ps-lg-2">CASE INFORMATION STATEMENT</h5>
                                <h5 class='d-flex d_sm_block justify-content-end ps-2'>
                                    OF <input type="text" name="cis"
                                        class=" form-control border-none border-0 border-bottom border-dotted shadow-none responsive_input" >

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
                        @include('layouts.footer4', ['page' => 1])


                    </div>
                </section>

                <section class="section_area row page1 bg-white pt-5 p-lg-5 pe-2 pe-lg-5 p-lg-3 m-3 mt-4  pt-lg-5 pt-4"
                    id="second_section">
                    <div class="col-lg-10 mx-auto">

                        <div class="row mt-lg-3">
                            <div class="col-lg-6">
                                <h5>Part A - Case Information:</h5>
                                <hr class=" border-dark border">
                                <div class="d-flex d_sm_block">
                                    {{-- <input type="text" name="a_ci"
                                        class=" responsive_input form-control w-100 border-none border-0 border-bottom border-dotted shadow-none"> --}}
                                </div>
                                <div class='d-flex d_sm_block pt-2'>
                                    <small class="small_text"> Date of Statement : </small> <input type="date"
                                        name="a_dos"
                                        class="responsive_input form-control  border-none border-0 border-bottom border-dotted shadow-none"
                                        style="width:333px">

                                </div>
                                <div class='d-flex d_sm_block pt-2'>
                                    <small class="small_text pe-4">Date of Divorce, Dissolution of Civil </small>
                                    <input type="date" name="a_dod"
                                        class="responsive_input form-control  border-none border-0 border-bottom border-dotted shadow-none  "
                                        style="width:200px">

                                </div>
                                <div class='pt-2'>
                                    <div class="small_text pe-4">Union or Termination of Domestic </div>
                                    <div class="small_text pe-4">Partnership (post-Judgment matters) </div>

                                </div>
                                <div class='d-flex d_sm_block pt-2'>
                                    <small class="small_text pe-4">Date(s) of Prior Statement(s)</small> <input
                                        type="date" name="dateofproir"
                                        class="responsive_input form-control  border-none border-0 border-bottom border-dotted shadow-none "
                                        style="width:247px">

                                </div>
                                <div class='d-flex d_sm_block pt-2 justify-content-end'> <input type="text" name="a_dops"
                                        class="responsive_input form-control  border-none border-0 border-bottom border-dotted shadow-none  "
                                        style="width:247px">

                                </div>
                                <div class='d-flex d_sm_block pt-2'>
                                    <small class="small_text pe-4">Your Birthdate</small> <input type="date"
                                        name="a_yb"
                                        class=" form-control responsive_input border-none border-0 border-bottom border-dotted shadow-none "
                                        style="width:343px">

                                </div>
                                <div class='d-flex d_sm_block pt-2'>
                                    <small class="small_text pe-4">Date of Marriage, or entry into Civil Union</small>
                                    <input type="date" name="a_dom"
                                        class="responsive_input form-control  border-none border-0 border-bottom border-dotted shadow-none "
                                        style="width:160px">

                                </div>
                                <div class='d-flex d_sm_block pt-2'>
                                    <small class="small_text pe-4">or Domestic Partnership</small>

                                </div>

                                <div class='d-flex d_sm_block pt-2'>
                                    <small class="small_text pe-4">Date of Separation</small> <input type="date"
                                        name="a_dos1"
                                        class="responsive_input form-control  border-none border-0 border-bottom border-dotted shadow-none "
                                        style="width:310px">

                                </div>
                                <div class='d-flex d_sm_block pt-2'>
                                    <small class="small_text pe-4">Date of Complaint</small> <input type="date"
                                        name="a_doc"
                                        class="responsive_input form-control  border-none border-0 border-bottom border-dotted shadow-none "
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

                                <div class='d-flex pt-2 d_sm_block'>
                                    <small class="small_text"> Cause of Action</small> <input type="text"
                                        name="a_coa"
                                        class="responsive_input form-control  border-none border-0 border-bottom border-dotted shadow-none ms-lg-4"
                                        style="width:333px">

                                </div>
                                <div class='d-flex pt-2 d_sm_block'>
                                    <small class="small_text pe-4">Custody </small> <input type="text"
                                        name="a_custody"
                                        class="responsive_input form-control  border-none border-0 border-bottom border-dotted shadow-none  ms-lg-4"
                                        style="width:360px">

                                </div>

                                <div class='d-flex pt-2 d_sm_block'>
                                    <small class="small_text pe-4"> Parenting Time</small> <input type="text"
                                        name="a_ptime"
                                        class="responsive_input form-control  border-none border-0 border-bottom border-dotted shadow-none "
                                        style="width:337px">

                                </div>

                                <div class='d-flex pt-2 d_sm_block'>
                                    <small class="small_text pe-4">Alimony</small> <input type="text"
                                        name="a_alimony"
                                        class="responsive_input form-control  border-none border-0 border-bottom border-dotted shadow-none "
                                        style="width:382px">

                                </div>
                                <div class='d-flex pt-2 d_sm_block'>
                                    <small class="small_text pe-4">Child Support</small> <input type="text"
                                        name="a_csupport"
                                        class="responsive_input form-control  border-none border-0 border-bottom border-dotted shadow-none "
                                        style="width:345px">

                                </div>
                                <div class=' pt-2'>
                                    <div class="small_text pe-4">Anticipated College/Post-</div>
                                    <div class="small_text pe-4">Secondary Education</div>
                                </div>

                                <div class='d-flex pt-2 d_sm_block'>
                                    <small class="small_text pe-4">Expenses</small> <input type="text"
                                        name="a_expenses"
                                        class="responsive_input form-control  border-none border-0 border-bottom border-dotted shadow-none "
                                        style="width:370px">

                                </div>

                                <div class='d-flex pt-2 d_sm_block'>
                                    <small class="small_text pe-4">Other issues (be specific)</small> <input
                                        type="text" name="a_oibs1"
                                        class="responsive_input form-control  border-none border-0 border-bottom border-dotted shadow-none "
                                        style="width:270px">

                                </div>
                                <div class='d-flex pt-2 d_sm_block justify-content-end'>
                                    <input type="text" name="a_oibs2"
                                        class="responsive_input form-control  border-none border-0 border-bottom border-dotted shadow-none "
                                        style="width:270px">

                                </div>
                                <div class='d-flex pt-2 d_sm_block justify-content-end'>
                                    <input type="text" name="a_oibs3"
                                        class="responsive_input form-control  border-none border-0 border-bottom border-dotted shadow-none "
                                        style="width:270px">

                                </div>
                                <div class="d-flex d_sm_block">
                                    <div class='d-flex me-4 '>
                                        <input type="checkbox" name="a_yon" value="Yes"
                                            class="responsive_inputborder-none border-0 border-bottom border-dotted shadow-none  me-2">Yes
                                    </div>
                                    <div class="d-flex d_sm_block">

                                        <input type="checkbox" name="a_yon" value="No"
                                            class="responsive_inputborder-none border-0 border-bottom border-dotted shadow-none me-2 ">No
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
                            <div class='d-flex d_sm_block pt-2'>
                                <small class="  pe-4">Your Name</small> <input type="text" name="a_name"
                                    class="form-control responsive_input border-none border-0 border-bottom border-dotted shadow-none "
                                    style="width:850px">

                            </div>
                            <div class="row pt-3">
                                <div class="col-lg-2  ">Street Address</div>
                                <div class="col-lg-4 px-lg-0"><input type="text" name="a_sa1"
                                        class="form-control  border-none border-0 border-bottom border-dotted shadow-none ">
                                </div>
                                <div class=" " style="width:50px;">City</div>
                                <div class="col-lg-2 px-lg-0"><input type="text" name="a_c1"
                                        class="form-control  border-none border-0 border-bottom border-dotted shadow-none ">
                                </div>
                                <div class="col-lg-1 px-lg-0">State/Zip </div>
                                <div class="col-lg-2 px-lg-0"><input type="text" name="a_sz1"
                                        class="form-control responsive_input border-none border-0 border-bottom border-dotted shadow-none "
                                        style="width:200px"></div>
                            </div>

                            <div class='d-flex d_sm_block pt-2'>
                                <small class="  pe-lg-4">Email :</small> <input type="text" name="a_email1"
                                    class="form-control  border-none border-0 responsive_input border-bottom border-dotted shadow-none "
                                    style="width:882px">

                            </div>
                            <div class='d-flex d_sm_block pt-2'>
                                <small class="  pe-lg-4">Other Party’s Name :</small> <input type="text"
                                    name="a_opn"
                                    class="form-control responsive_input border-none border-0 border-bottom border-dotted shadow-none "
                                    style="width:782px">

                            </div>

                            <div class="row pt-3">
                                <div class="col-lg-2  ">Street Address</div>
                                <div class="col-lg-4 px-lg-0"><input type="text" name="a_sa2"
                                        class="form-control responsive_input border-none border-0 border-bottom border-dotted shadow-none ">
                                </div>
                                <div class=" " style="width:50px;">City</div>
                                <div class="col-lg-2 px-lg-0"><input type="text" name="a_c2"
                                        class="form-control  border-none border-0 border-bottom border-dotted shadow-none ">
                                </div>
                                <div class="col-lg-1 px-lg-0">State/Zip </div>
                                <div class="col-lg-2 px-lg-0"><input type="text" name="a_sz2"
                                        class="form-control responsive_input border-none border-0 border-bottom border-dotted shadow-none "
                                        style="width:200px"></div>
                            </div>
                            <div class='d-flex d_sm_block pt-2'>
                                <small class="  pe-4">Email :</small> <input type="text" name="a_email2"
                                    class="form-control responsive_input border-none border-0 border-bottom border-dotted shadow-none"
                                    style="width:882px">
                            </div>


                            <div class="row pt-lg-3">
                                <div class="small_text">2. Name, Address, Birthdate and Person with whom children
                                    reside:</div>
                                <div class="small_text">a. Child(ren) From This Relationship</div>
                                <div class="col-lg-3">
                                    <h5 class="small_text">Child’s Full Name </h5><input type="text"
                                        name="cn1"
                                        class=" form-control border-none border-0 border-bottom border-dotted shadow-none "><input
                                        type="text" name="cn2"
                                        class=" form-control  border-none border-0 border-bottom border-dotted shadow-none "><input
                                        type="text" name="cn3"
                                        class=" form-control border-none border-0 border-bottom border-dotted shadow-none "><input
                                        type="text" name="cn4"
                                        class=" form-control border-none border-0 border-bottom border-dotted shadow-none ">
                                </div>

                                <div class="col-lg-4">
                                    <h5 class="small_text">Address</h5> <input type="text" name="ccc1"
                                        class="form-control  border-none border-0 border-bottom border-dotted shadow-none "><input
                                        type="text" name="cca2"
                                        class="form-control  border-none border-0 border-bottom border-dotted shadow-none "><input
                                        type="text" name="cca3"
                                        class="form-control  border-none border-0 border-bottom border-dotted shadow-none "><input
                                        type="text" name="cca4"
                                        class="form-control  border-none border-0 border-bottom border-dotted shadow-none ">
                                </div>

                                <div class="col-lg-2">
                                    <h5 class="small_text">Birthdate</h5> <input type="date" name="cb1"
                                        class="form-control  border-none border-0 border-bottom border-dotted shadow-none ">
                                    <input type="date" name="cb2"
                                        class="form-control  border-none border-0 border-bottom border-dotted shadow-none ">
                                    <input type="date" name="cb3"
                                        class="form-control  border-none border-0 border-bottom border-dotted shadow-none ">
                                    <input type="date" name="cb4"
                                        class="form-control  border-none border-0 border-bottom border-dotted shadow-none ">
                                </div>

                                <div class="col-lg-3">
                                    <h5 class="small_text">Person’s Name</h5><input type="text" name="cpn1"
                                        class="form-control border-none border-0 border-bottom border-dotted shadow-none "><input
                                        type="text" name="cpn2"
                                        class="form-control border-none border-0 border-bottom border-dotted shadow-none "><input
                                        type="text" name="cpn3"
                                        class="form-control border-none border-0 border-bottom border-dotted shadow-none "><input
                                        type="text" name="cpn4"
                                        class="form-control border-none border-0 border-bottom border-dotted shadow-none ">
                                </div>

                                </div>
                            </div>
                            <div class="row pt-lg-3">
                                <div>b. Child(ren) From Other Relationships</div>
                                <div class="col-lg-3">
                                    <h5 class="small_text">Child’s Full Name </h5><input type="text"
                                        name="cn5"
                                        class="form-control  border-none border-0 border-bottom border-dotted shadow-none "><input
                                        type="text" name="cn6"
                                        class="form-control  border-none border-0 border-bottom border-dotted shadow-none "><input
                                        type="text" name="cn7"
                                        class="form-control  border-none border-0 border-bottom border-dotted shadow-none "><input
                                        type="text" name="cn8"
                                        class="form-control  border-none border-0 border-bottom border-dotted shadow-none ">
                                </div>

                                <div class="col-lg-4">
                                    <h5 class="small_text">Address</h5> <input type="text" name="ca5"
                                        class="form-control  border-none border-0 border-bottom border-dotted shadow-none "><input
                                        type="text" name="ca6"
                                        class="form-control  border-none border-0 border-bottom border-dotted shadow-none "><input
                                        type="text" name="ca7"
                                        class="form-control  border-none border-0 border-bottom border-dotted shadow-none "><input
                                        type="text" name="ca8"
                                        class="form-control  border-none border-0 border-bottom border-dotted shadow-none ">
                                </div>

                                <div class="col-lg-2">
                                    <h5 class="small_text">Birthdate</h5> <input type="date" name="cb5"
                                        class="form-control  border-none border-0 border-bottom border-dotted shadow-none ">
                                    <input type="date" name="cb6"
                                        class="form-control  border-none border-0 border-bottom border-dotted shadow-none ">
                                    <input type="date" name="cb7"
                                        class="form-control  border-none border-0 border-bottom border-dotted shadow-none ">
                                    <input type="date" name="cb8"
                                        class="form-control  border-none border-0 border-bottom border-dotted shadow-none ">
                                </div>

                                <div class="col-lg-3">
                                    <h5 class="small_text">Person’s Name</h5><input type="text" name="cpn5"
                                        class="form-control  border-none border-0 border-bottom border-dotted shadow-none "><input
                                        type="text" name="cpn6"
                                        class="form-control  border-none border-0 border-bottom border-dotted shadow-none "><input
                                        type="text" name="cpn7"
                                        class="form-control  border-none border-0 border-bottom border-dotted shadow-none "><input
                                        type="text" name="cpn8"
                                        class="form-control  border-none border-0 border-bottom border-dotted shadow-none ">
                                </div>


                                <div>
                                </div>

                            </div>

                            <div class="row pt-lg-3">
                                <h5 class="">Part B - Miscellaneous Information:</h5>
                                <div class="small_text">1. Information about Employment (Provide Name & Address of
                                    Business, if
                                    Self-employed)</div>
                                <div class="col-lg-3">
                                    <h5 style="width: 250px;" class="small_text responsive_input">Name of
                                        Employer/Business </h5>
                                </div>
                                <div class="col-lg-3"><input type="text" name="b_mi"
                                        class="form-control  border-none border-0 border-bottom border-dotted shadow-none ">
                                </div>
                                <div class="col-lg-1 small_text">Address</div>
                                <div class="col-lg-5"><input type="text" name="b_address1"
                                        class="form-control responsive_input border-none border-0 border-bottom border-dotted shadow-none "
                                        style="width: 373px;"></div>


                                <div>
                                </div>

                            </div>
                            <div class="row d-flex justify-content-end">
                                <div class="col-lg-5 "><input type="text" name="b_address2"
                                        class="form-control  border-none responsive_input border-0 border-bottom border-dotted shadow-none "
                                        style="width: 373px;"></div>
                            </div>

                            <div class="row pt-lg-3">
                                <div class="col-lg-3">
                                    <h5 style="width: 250px;" class="small_text responsive_input">Name of
                                        Employer/Business </h5>
                                </div>
                                <div class="col-lg-3"><input type="text" name="b_noe"
                                        class="form-control responsive_input border-none border-0 border-bottom border-dotted shadow-none ">
                                </div>
                                <div class="col-lg-1 small_text">Address</div>
                                <div class="col-lg-5"><input type="text" name="b_e_address1"
                                        class="form-control responsive_input border-none border-0 border-bottom border-dotted shadow-none "
                                        style="width: 373px;"></div>
                                <div>
                                </div>

                            </div>
                            <div class="row d-flex justify-content-end">
                                <div class="col-lg-5 "><input type="text" name="b_e_address2"
                                        class="form-control responsive_input border-none border-0 border-bottom border-dotted shadow-none "
                                        style="width: 373px;"></div>
                            </div>

                            <div class="row mt-lg-3">
                                <div class="col-lg-6 small_text">2. Do you have Insurance obtained through
                                    Employment/Business?</div>
                                <div class="col-lg-6 d-flex">

                                    <div class="d-flex "><input class="me-2 " type="checkbox" name="b_ibt"
                                            value="Yes" id=""> Yes</div>
                                    <div class="d-flex mx-lg-5"><input class="me-2" type="checkbox" name="b_ibt"
                                            value="No" id=""> No</div>
                                    <div class="d-flex">Type of Insurance:</div>


                                </div>
                            </div>
                            <div class="row   mt-lg-3">
                                <div class=" d-flex mx-lg-1 small_text pb_checkbox">
                                    <div class="small_text">Medical</div>
                                    <div class="d-flex mx-lg-1 small_text"><input class="me-lg-2 me-1" type="checkbox"
                                            value="Yes" name="b_medical" id=""> Yes</div>
                                    <div class="d-flex mx-lg-1 small_text"><input class="me-lg-4 me-1" type="checkbox"
                                            value="No" name="b_medical" id=""> No;</div>
                                    <div class="small_text">Dental</div>
                                    <div class="d-flex mx-lg-1 small_text"><input class="me-lg-2 me-1" type="checkbox"
                                            name="dental" value="Yes" id=""> Yes</div>
                                    <div class="d-flex mx-lg-1 small_text"><input class="me-lg-4 me-1" type="checkbox"
                                            name="dental" value="No" id=""> No;</div>
                                    <small class="small_text">Prescription Drug</small>
                                    <div class="d-flex mx-lg-1 small_text"><input class="me-lg-2 me-1" type="checkbox"
                                            name="prescription_drug" value="Yes" id=""> Yes</div>
                                    <div class="d-flex mx-lg-1 small_text"><input class="me-lg-4 me-1" type="checkbox"
                                            name="prescription_drug" value="No" id=""> No;</div>
                                    <div class="small_text">Life</div>
                                    <div class="d-flex mx-lg-1 small_text"><input class="me-1 me-lg-2" type="checkbox"
                                            name="lift" value="Yes" id=""> Yes</div>
                                    <div class="d-flex mx-lg-1 small_text"><input class="me-lg-4 me-1" type="checkbox"
                                            name="lift" value="No" id=""> No;</div>
                                    <div class="small_text">Disability</div>
                                    <div class="d-flex mx-lg-1 small_text"><input class="me-lg-4 me-1" type="checkbox"
                                            name="disability" value="Yes" id=""> Yes</div>
                                    <div class="d-flex mx-lg-1 small_text"><input class="me-lg-4 me-1" type="checkbox"
                                            name="disability" value="No" id=""> No</div>
                                </div>
                            </div>
                            <div class='d-flex d_sm_block pt-2'>
                                <small class=" me-2">Other (explain)</small> <input type="text"
                                    name="other_explain"
                                    class="form-control responsive_input  border-none border-0 border-bottom border-dotted shadow-none "
                                    style="width:820px">
                            </div>
                            <div class="row mt-lg-3">
                                <div class="col-lg-5 small_text">Is Insurance available through Employment/Business?
                                </div>
                                <div class="col-lg-7 d-flex d_sm_block">
                                    <div class="d-flex "><input class="me-2" type="checkbox" name="insurance_available" value="Yes" id=""> Yes</div>
                                    <div class="d-flex mx-lg-5"><input class="me-2" type="checkbox" name="insurance_available" value="No" id=""> No</div>
                                </div>
                            </div>
                            <div class='d-flex pt-2 d_sm_block'>
                                <small class="ms-lg-4 me-lg-2">Explain</small> <input type="text" name="explain"
                                    class="form-control responsive_input border-none border-0 border-bottom border-dotted shadow-none"
                                    style="width:850px">
                            </div>
                            @include('layouts.footer4', ['page' => 2])

                        </div>
                </section>

                <section class="section_area row page1 bg-white pt-5 p-lg-5 pe-2 pe-lg-5 p-lg-3 m-3 mt-4  pt-lg-5 pt-4"
                    id="third_section">
                    <div class="col-lg-10 mx-auto">

                        <div class="row mt-lg-3">
                            <div class="small_text pt-lg-2"> 3. ATTACH Affidavit of Insurance Coverage as required by
                                Court Rule 5:4-2 (f) (See Part G) </div>
                            <div class="small_text pt-lg-2"> 4. Additional Identification: </div>
                            <div class="small_text d-flex d_sm_block"> Confidential Litigant Information Sheet: <span
                                    class="px-lg-3">Filed</span>
                                <div class="d-flex ps-lg-3 "><input type="checkbox" class="me-1"
                                        name="additional_identification" value="Yes" id=""> Yes</div>
                                <div class="d-flex mx-lg-2 "><input type="checkbox" class="me-1"
                                        name="additional_identification" value="No" id=""> No</div>
                            </div>
                            <div class="small_text pt-lg-2"> 5. ATTACH a list of all prior/pending family actions
                                involving support, custody or Domestic Violence, with the Docket Number, County, State
                                and the disposition reached. Attach copies of all existing Orders in effect. </div>

                            <div class="row mt-lg-4">
                                <div class="col-lg-5">
                                    <h5>Part C. - Income Information:</h5>
                                    <div class="text_small">1. Gross earned income last calendar (year)</div>
                                    <div class="text_small">2. Unearned income (same year) </div>
                                    <div class="text_small">3. Total Income Taxes paid on income (Fed., State, $
                                        F.I.C.A., and S.U.I.). If Joint Return, use middle column</div>
                                    <div class="text_small">4.Netincome(1+2-3)</div>
                                </div>

                                <div class="col-lg-7">
                                    <div class="small_text">Complete this section for self and (if known) for other
                                        party. If W-2 wage earner, gross earned income refers to Medicare wages.</div>
                                    <div class="small_text pt-lg-3">1. Last Year’s Income</div>

                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="small_text text-center">Yours</div>
                                            <div class="d-flex"><small>$</small><input type="number" min="0"
                                                    name="lyey1"
                                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                            </div>
                                            <div class="d-flex pt-lg-2"><small>$</small><input type="number"
                                                    min="0" name="lyey2"
                                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                            </div>
                                            <div class="d-flex pt-lg-2"><small>$</small><input type="number"
                                                    min="0" name="lyey3"
                                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                            </div>
                                            <div class="d-flex pt-lg-2"><small>$</small><input type="number"
                                                    min="0" name="lyey4"
                                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="small_text text-center">Joint</div>
                                            <div class="d-flex"><small>$</small><input type="number" min="0"
                                                    name="lyej1"
                                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                            </div>
                                            <div class="d-flex pt-lg-2"><small>$</small><input type="number"
                                                    min="0" name="lyej2"
                                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                            </div>
                                            <div class="d-flex pt-lg-2"><small>$</small><input type="number"
                                                    min="0" name="lyej3"
                                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                            </div>
                                            <div class="d-flex pt-lg-2"><small>$</small><input type="number"
                                                    min="0" name="lyej4"
                                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="small_text text-center">Other Party</div>
                                            <div class="d-flex"><small>$</small><input type="number" min="0"
                                                    name="lyep1"
                                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                            </div>
                                            <div class="d-flex pt-lg-2"><small>$</small><input type="number"
                                                    min="0" name="lyep2"
                                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                            </div>
                                            <div class="d-flex pt-lg-2"><small>$</small><input type="number"
                                                    min="0" name="lyep3"
                                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                            </div>
                                            <div class="d-flex pt-lg-2"><small>$</small><input type="number"
                                                    min="0" name="lyep4"
                                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                            <strong class="text_small pt-lg-3">ATTACH to this form a corporate benefits statement as
                                well as a statement of all fringe benefits of employment. (See Part G)</strong>
                            <strong class="text_small pt-lg-3">ATTACH a full and complete copy of last year’s Federal
                                and State Income Tax Returns. ATTACH W-2 statements, 1099’s, Schedule C’s, etc., to show
                                total income plus a copy of the most recently filed Tax Returns. (See Part G)</strong>
                            <div class="d-flex d_sm_block">
                                <div>Check if attached:</div>
                                <div class="d-flex  pb_checkbox mx-lg-4"><input class="me-2" type="checkbox"
                                        name="check_if_attached" value="Federal Tax Return" id=""> Federal
                                    Tax Return</div>
                                <div class="d-flex  pb_checkbox mx-lg-4"><input class="me-2" type="checkbox"
                                        name="check_if_attached" value="State Tax Return" id="">State Tax
                                    Return</div>
                                <div class="d-flex  pb_checkbox mx-lg-4"><input class="me-2" type="checkbox"
                                        name="check_if_attached" value="W-2" id="">W-2</div>
                                <div class="d-flex pb_checkbox  mx-lg-4"><input class="me-2" type="checkbox"
                                        name="check_if_attached" value="Other" id="">Other</div>


                            </div>
                            <div class="text-center py-3">2. Present Earned Income and Expenses</div>

                            <div class="row">
                                <div class="col-lg-9">
                                    <div class="small_text">1. Average gross weekly income (based on last 3 pay periods
                                        – ATTACH pay stubs)</div>
                                    <div class="d-flex d_sm_block" >
                                        <div class="d-flex mx-lg-4"><input class="me-2" type="checkbox"
                                                name="earned_incode_expenses" value="included"
                                                id="">included</div>
                                        <div class="d-flex mx-lg-4"><input class="me-2" type="checkbox"
                                                name="earned_incode_expenses" value="not included" id="">not
                                            included*</div>
                                        <div class="d-flex mx-lg-4"><input class="me-2" type="checkbox"
                                                name="earned_incode_expenses" value="not paid to you"
                                                id="">not paid to you.</div>


                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="row">


                                        <div class="col-lg-6">
                                            <div class="small_text text-center">Yours</div>
                                            <div class="d-flex mt-lg-1"><small>$</small><input type="number"
                                                    min="0" name="earned_incode_expenses_yours1"
                                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                            </div>

                                        </div>
                                        <div class="col-lg-6">
                                            <div class="small_text text-center">Other Party (if known) </div>
                                            <div class="d-flex"><small>$</small><input type="number" min="0"
                                                    name="earned_incode_expenses_op1"
                                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="small_text">*ATTACH details of basis thereof, including, but not limited
                                    to, percentage overrides, timing of payments, etc.</div>
                                <div class="small_text">ATTACH copies of last three statements of such bonuses,
                                    commissions, etc.</div>
                            </div>





                            <div class="row mt-lg-5">
                                <div class="col-lg-9">
                                    <div class="small_text">2. Deductions per week (check all types of withholdings):
                                    </div>
                                    <div class="d-flex pb_checkbox">
                                        <div class="d-flex mx-lg-4"><input class="me-2" type="checkbox"
                                                name="deducation_per_week" value="Federal" id="">Federal
                                        </div>
                                        <div class="d-flex mx-lg-4"><input class="me-2" type="checkbox"
                                                name="deducation_per_week" value="State" id="">State</div>
                                        <div class="d-flex mx-lg-4"><input class="me-2" type="checkbox"
                                                name="deducation_per_week" value="F.I.C.A" id="">F.I.C.A
                                        </div>
                                        <div class="d-flex mx-lg-4"><input class="me-2" type="checkbox"
                                                name="deducation_per_week" value="S.U.I" id="">S.U.I</div>
                                        <div class="d-flex mx-lg-4"><input class="me-2" type="checkbox"
                                                name="deducation_per_week" value="Other" id="">Other</div>


                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="row">


                                        <div class="col-lg-6">
                                            <div class="d-flex  "><small>$</small><input type="number"
                                                    min="0" name="earned_incode_expenses_yours2"
                                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                            </div>

                                        </div>
                                        <div class="col-lg-6">
                                            <div class="d-flex"><small>$</small><input type="number" min="0"
                                                    name="earned_incode_expenses_op2"
                                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="row mt-lg-5">
                                    <div class="col-lg-9">
                                        <div class="small_text">3. Net average weekly income (1 - 2)</div>

                                    </div>
                                    <div class="col-lg-3">
                                        <div class="row">


                                            <div class="col-lg-6">
                                                <div class="d-flex  "><small>$</small><input type="number"
                                                        min="0" name="earned_incode_expenses_yours3"
                                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                                </div>

                                            </div>
                                            <div class="col-lg-6">
                                                <div class="d-flex"><small>$</small><input type="number"
                                                        min="0" name="earned_incode_expenses_op3"
                                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="small_text text-center py-3">3. Your Current Year-to-Date Earned Income</div>
                                        <div class="d_flex d_sm_block justify-content-end text-end">
                                             <span>Provide Dates: From</span>
                                            <input type="text"  name="yve_from" class="border-bottom border-0  responsive_input bg-transparent border outline-none">
                                            <span class="px-lg-3">To</span>
                                            <input type="text"  name="yve_to" class="border-bottom border-0  responsive_input bg-transparent border outline-none">
                                        </div>
                                        <div class="row  mt-lg-3">
                                            <div class="col-lg-7 small_text">
                                                <div class=" d-flex d_sm_block small_text">1. GROSS EARNED INCOME: <div
                                                        class="d-flex"><small>$</small><input type="number"
                                                            min="0" name="gee"
                                                            class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                                    </div>

                                                </div>
                                                <div class=" d-flex d_sm_block small_text">2. TAX DEDUCTIONS: (Number of
                                                    Dependents: <div class="d-flex"><input type="number"
                                                            min="0" name="tdnod"
                                                            class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control"
                                                            style="width:80px;">)
                                                    </div>
                                                </div>
                                                <div class="small_text"><span class="me-lg-4">a.</span> Federal Income
                                                    Taxes</div>
                                                <div class="small_text"><span class="me-lg-4">b.</span> N.J. Income
                                                    Taxes</div>
                                                <div class="small_text"><span class="me-lg-4">c.</span> Other State
                                                    Income Taxes</div>
                                                <div class="small_text"><span class="me-lg-4">d.</span> F.I.C.A.</div>
                                                <div class="small_text"><span class="me-lg-4">e.</span> Medicare</div>
                                                <div class="small_text"><span class="me-lg-4">f.</span> S.U.I. /
                                                    S.D.I.</div>
                                                <div class="small_text"><span class="me-lg-4">g.</span> Estimated tax
                                                    payments in excess of withholding</div>
                                                <div class="small_text d-flex"><span class="me-lg-4">h.</span> <input
                                                        type="number" min="0" name="h"
                                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                                </div>
                                                <div class="small_text d-flex"><span class="me-lg-4">i.</span> <input
                                                        type="number" min="0" name="i"
                                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                                </div>
                                                <div class="small_text pt-lg-3 text-end"><span
                                                        class="text-end">TOTAL</span> </div>





                                            </div>
                                            <div class=" col-lg-4 ">
                                                <div class="d-flex ms-lg-4"><small class="mx-2">Number of
                                                        Weeks</small><input type="number" min="0"
                                                        name="now" style="width: 100px"
                                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                                </div>
                                                <div class="d-flex pt-lg-3"><small class="me-lg-3">a. </small><small
                                                        class="ms-2">$</small><input type="number" min="0"
                                                        name="fit" style="width: 365px"
                                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                                </div>
                                                <div class="d-flex"><small class="me-lg-3">b. </small><small
                                                        class="ms-2">$</small><input type="number" min="0"
                                                        name="n.j.i" style="width: 365px"
                                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                                </div>
                                                <div class="d-flex"><small class="me-lg-3">c. </small><small
                                                        class="ms-2">$</small><input type="number" min="0"
                                                        name="osit" style="width: 365px"
                                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                                </div>
                                                <div class="d-flex"><small class="me-lg-3">d. </small><small
                                                        class="ms-2">$</small><input type="number" min="0"
                                                        name="fica" style="width: 365px"
                                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                                </div>
                                                <div class="d-flex"><small class="me-lg-3">e. </small><small
                                                        class="ms-2">$</small><input type="number" min="0"
                                                        name="medicare" style="width: 365px"
                                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                                </div>
                                                <div class="d-flex"><small class="me-lg-3">f. </small><small
                                                        class="ms-2">$</small><input type="number" min="0"
                                                        name="S.U.I" style="width: 365px"
                                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                                </div>
                                                <div class="d-flex"><small class="me-lg-3">g. </small><small
                                                        class="ms-2">$</small><input type="number" min="0"
                                                        name="epew" style="width: 365px"
                                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                                </div>
                                                <div class="d-flex"><small class="me-lg-3">h. </small><small
                                                        class="ms-2">$</small><input type="number" min="0"
                                                        name="h_value" style="width: 365px"
                                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                                </div>
                                                <div class="d-flex"><small class="me-lg-3">i. </small><small
                                                        class="ms-2">$</small><input type="number" min="0"
                                                        name="i_value1" style="width: 365px"
                                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                                </div>
                                                <div class="d-flex ms-lg-4"><small class="ms-2">$</small><input
                                                        type="number" min="0" name="i_value2"
                                                        style="width: 365px"
                                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                                </div>
                                            </div>
                                            @include('layouts.footer4', ['page' => 3])
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </section>
                <section class="section_area row page1 bg-white pt-5 p-lg-5 pe-2 pe-lg-5 p-lg-3 m-3 mt-4  pt-lg-5 pt-4"
                    id="fourth_section">
                    <div class="col-lg-10 mx-auto">



                        {{-- div - 3 --}}
                        <div class="row  mt-lg-3">
                            <div class="col-lg-6 small_text">3. GROSS INCOME NET OF TAXES</div>
                            <div class="d-flex col-lg-6 pt-lg-2"><small>$</small><input type="number" min="0"
                                    name="ginof" style="width: 365px"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                            </div>
                        </div>

                        {{-- div -4 --}}
                        <div class="row  mt-lg-3">
                            <div class="col-lg-9 small_text">4. OTHER DEDUCTIONS </div>
                            <div class="d-flex col-lg-3 small_text ">If mandatory, check box
                            </div>
                        </div>
                        <div class="row  mt-lg-3">
                            <div class="col-lg-6 small_text">
                                <p class="m-0 p-0">a. Hospitalization/Medical Insurance </p>
                                <p class="m-0 p-0">b. Life Insurance</p>
                                <p class="m-0 p-0">c. Union Dues </p>
                                <p class="m-0 p-0">d. 401(k) Plans </p>
                                <p class="m-0 p-0">e. Pension/Retirement Plans </p>
                                <p class="m-0 p-0 d-flex d_sm_block">f. Other Plans - specify <input type="number"
                                        min="0" name="other_plains" style="width: 220px;"
                                        class="border-bottom border-0 ms-3  responsive_input bg-transparent border outline-none form-control">
                                </p>
                                <p class="m-0 p-0">g. Charity </p>
                                <p class="m-0 p-0">h. Wage Execution</p>
                                <p class="m-0 p-0">i. Medical Reimbursement (flex fund)</p>
                                <p class="m-0 p-0  d_sm_block  d-flex">j. Other: <input type="number" min="0"
                                        name="j_others" style="width: 315px;"
                                        class="border-bottom border-0 ms-3  responsive_input bg-transparent border outline-none form-control">
                                </p>
                                <p class="m-0 p-0 text-end">TOTAL </p>

                            </div>
                            <div class=" col-lg-6 ">
                                <div class="d-flex m-0 p-0"><small>a. </small><small class="ms-2">$</small><input
                                        type="number" min="0" name="hmi" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                    <div class="ps-5 "> <input class="my-auto" type="checkbox" name="hmi_f"
                                            id=""></div>
                                </div>
                                <div class="d-flex m-0 p-0"><small>b. </small><small class="ms-2">$</small><input
                                        type="number" min="0" name="lift_insurance" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                    <div class="ps-5 "> <input class="my-auto" type="checkbox"
                                            name="lift_insurance_f" id=""></div>
                                </div>
                                <div class="d-flex m-0 p-0"><small>c. </small><small class="ms-2">$</small><input
                                        type="number" min="0" name="401kplans" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                    <div class="ps-5 "> <input class="my-auto" type="checkbox" name="401kplans_f"
                                            id=""></div>
                                </div>
                                <div class="d-flex m-0 p-0"><small>d. </small><small class="ms-2">$</small><input
                                        type="number" min="0" name="retirement_plans" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                    <div class="ps-5 "> <input class="my-auto" type="checkbox"
                                            name="retirement_plans_f" id=""></div>
                                </div>
                                <div class="d-flex m-0 p-0"><small>e. </small><small class="ms-2">$</small><input
                                        type="number" min="0" name="other_plan_specify"
                                        style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                    <div class="ps-5 "> <input class="my-auto" type="checkbox"
                                            name="other_plan_specify_f" id=""></div>
                                </div>
                                <div class="d-flex m-0 p-0"><small>f. </small><small class="ms-2">$</small><input
                                        type="number" min="0" name="charity" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                    <div class="ps-5 "> <input class="my-auto" type="checkbox" name="charity_f"
                                            id=""></div>
                                </div>
                                <div class="d-flex m-0 p-0 "><small>g. </small><small class="ms-2">$</small><input
                                        type="number" min="0" name="wage_execution" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                    <div class="ps-5 "> <input class="my-auto" type="checkbox"
                                            name="wage_execution_f" id=""></div>
                                </div>
                                <div class="d-flex m-0 p-0"><small>h. </small><small class="ms-2">$</small><input
                                        type="number" min="0" name="medical_reimbursement"
                                        style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                    <div class="ps-5 "> <input class="my-auto" type="checkbox"
                                            name="medical_reimbursement_f" id=""></div>
                                </div>
                                <div class="d-flex m-0 p-0"><small>i. </small><small class="ms-2">$</small><input
                                        type="number" min="0" name="medical_reimbursement1"
                                        style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                    <div class="ps-5 "> <input class="my-auto" type="checkbox"
                                            name="medical_reimbursement1_f" id=""></div>
                                </div>
                                <div class="d-flex m-0 p-0"><small>j. </small><small class="ms-2">$</small><input
                                        type="number" min="0" name="medical_reimbursement2"
                                        style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                    <div class="ps-5 "> <input class="my-auto" type="checkbox"
                                            name="medical_reimbursement2_2" id=""></div>
                                </div>
                                <div class="d-flex m-0 p-0"><small class="ms-3">$</small><input type="number"
                                        min="0" name="medical_reimbursement3" style="width: 305px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                            </div>
                        </div>
                        {{--  div - 5 --}}

                        <div class="row  mt-lg-1">
                            <div class="col-lg-6 small_text">
                                <p class="p-0 m-0">5. NET YEAR-TO-DATE EARNED INCOME:</p>
                                <p class="p-0 m-0 ps-3">NET AVERAGE EARNED INCOME PER MONTH: </p>
                                <p class="p-0 m-0 ps-3">NET AVERAGE EARNED INCOME PER WEEK </h5>
                            </div>
                            <div class=" col-lg-6 ">
                                <div class="d-flex"><small>$</small><input type="number" min="0"
                                        name="netdei" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex"><small>$</small><input type="number" min="0"
                                        name="naeipm" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex"><small>$</small><input type="number" min="0"
                                        name="naeipw" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                            </div>

                        </div>

                        <h6 class="mt-5 text-center">4. Your Year-to-Date Gross Unearned Income From All Sources </h6>

                        <p class="small_text text-center">(including, but not limited to, income from unemployment,
                            disability
                            and/or social security
                            payments, interest, dividends,
                            rental income and any other miscellaneous unearned income)
                        </p>

                        <div class="row mt-lg-3">
                            <div class="col-lg-6">
                                <p class="text-center small_text m-0 p-0">Source</p>
                                <input type="text" min="0" name="source1"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="source2"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="source3"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="source4"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="source5"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="source6"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="source7"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="source8"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="source9"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <p class="mt-2 p-0  ps-lg-3 small_text">TOTAL GROSS UNEARNED INCOME YEAR TO DATE </p>
                            </div>
                            <div class="col-lg-3">
                                <p class="text-center small_text m-0 p-0">How often paid</p>
                                <input type="text" min="0" name="how_often_paid1"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="how_often_paid2"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="how_often_paid3"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="how_often_paid4"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="how_often_paid5"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="how_often_paid6"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="how_often_paid7"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="how_often_paid8"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="how_often_paid9"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">


                            </div>
                            <div class="col-lg-3">
                                <p class="text-center small_text m-0 p-0">Year to date amount</p>
                                <div class="d-flex"><small class="ms-2">$</small><input type="number"
                                        min="0" name="yda1"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex"><small class="ms-2">$</small><input type="number"
                                        min="0" name="yda2"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex"><small class="ms-2">$</small><input type="number"
                                        min="0" name="yda3"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex"><small class="ms-2">$</small><input type="number"
                                        min="0" name="yda4"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex"><small class="ms-2">$</small><input type="number"
                                        min="0" name="yda5"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex"><small class="ms-2">$</small><input type="number"
                                        min="0" name="yda6"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex"><small class="ms-2">$</small><input type="number"
                                        min="0" name="yda7"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex"><small class="ms-2">$</small><input type="number"
                                        min="0" name="yda8"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex"><small class="ms-2">$</small><input type="number"
                                        min="0" name="yda9"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex"><small class="ms-2">$</small><input type="number"
                                        min="0" name="yda10"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                            </div>
                        </div>

                        <h6 class="mt-5 text-center">5. Additional Information: </h6>

                        <div class="row">
                            <div class="d-flex d_sm_block  my-auto pt-3">
                                <p class="small_text p-0 m-0"><span class="me-lg-3">1.</span> How often are you paid?
                                </p>
                                <input type="number" min="0" name="hop" style="width: 435px"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control ms-3">
                            </div>
                            <div class="d-flex d_sm_block  my-auto pt-3">
                                <p class="small_text p-0 m-0"><span class="me-3">2.</span> What is your annual
                                    salary?
                                </p>
                                <small class="ms-lg-3">$</small><input type="number" min="0"
                                    name="wiya" style="width: 250px"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                            </div>
                            <div class="d-flex my-auto d_sm_block row pt-3">
                                <div class="col-lg-6 small_text">
                                    <div>
                                        <span class="me-3">3.</span>Have you received any raises in the current year? If yes, provide the date and the gross/net amount.
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <input type="number" min="0" name="current_year" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control ">
                                </div>
                                <div class='d-flex col-lg-1 my-auto '>
                                    <input type="checkbox" name="current_year_f" value="Yes" class="border-none border-0 border-bottom border-dotted shadow-none  me-2">Yes
                                </div>
                                <div class="d-flex  col-lg-1 my-auto">

                                    <input type="checkbox" name="current_year_f" value="No"
                                        class="border-none border-0 border-bottom border-dotted shadow-none me-2 ">No
                                </div>
                            </div>
                            <div class="d-flex my-auto d_sm_block pt-3 ">
                                <p class="small_text p-0 m-0"><span class="me-3">4.</span>Do you receive bonuses,
                                    commissions, or other compensation, including distributions, taxable or nontaxable,
                                    in addition to your regular salary?
                                </p>
                                <div class='d-flex col-lg-1 my-auto '>
                                    <input type="checkbox" name="receive_bonuses_f" value='Yes'
                                        class="border-none border-0 border-bottom border-dotted shadow-none  me-2">Yes
                                </div>
                                <div class="d-flex  col-lg-1 my-auto">

                                    <input type="checkbox" name="receive_bonuses_f" value='No'
                                        class="border-none border-0 border-bottom border-dotted shadow-none me-2 ">No
                                </div>
                            </div>
                            <div class="ms-lg-3 d-flex d_sm_block small_text">If yes, explain:
                                <input type="number" min="0" name="rbcc" style="width: 525px"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control ms-lg-3">
                            </div>
                            <div class="d-flex d_sm_block my-auto  pt-3">
                                <p class="small_text p-0 m-0"><span class="me-3">5.</span>Does your employer pay
                                    for or provide you with an automobile (lease or purchase), automobile expenses,
                                    gas, repairs, lodging and other.
                                </p>
                                <div class='d-flex col-lg-1 my-auto '>
                                    <input type="checkbox" name="employer_pay_f" value="Yes"
                                        class="border-none border-0 border-bottom border-dotted shadow-none  me-2">Yes
                                </div>
                                <div class="d-flex   col-lg-1 my-auto">

                                    <input type="checkbox" name="employer_pay_f" value="No"
                                        class="border-none border-0 border-bottom border-dotted shadow-none me-2 ">No
                                </div>
                            </div>
                            <div class="ms-lg-3 small_text">If yes, explain:
                                <input type="number" min="0" name="employer_pay" style="width: 625px"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control ms-lg-2">
                            </div>

                            @include('layouts.footer4', ['page' => 4])
                        </div>
                    </div>
                </section>
                <section
                    class="section_area row page1 bg-white pt-5 p-lg-5 pe-2 pe-lg-5 p-lg-3 m-3 mt-4  pt-lg-5 pt-4"
                    id="fifth_section">
                    <div class="col-lg-10 mx-auto">

                        <div class="row">
                            <div class="col-lg-10 border-bottom border-dark pb-2">
                                <div class="small_text"> 6.Did you receive bonuses, commissions, or other
                                    compensation, including distributions, taxable or nontaxable, in addition to your
                                    regular salary during the current or immediate past 2 calendar years? </div>
                                <div class="small_text">If yes, explain and state the date(s) of receipt and set forth
                                    the gross and net amounts received:</div>
                            </div>
                            <div class="col-lg-2">
                                <div class='d-flex   my-auto ps-2 '>
                                    <div>
                                        <input type="checkbox" name="rbc_f" value="Yes"
                                            class="border-none border-0 border-bottom border-dotted shadow-none  me-2">Yes
                                    </div>
                                    <div class="ms-lg-4 ms-2">
                                        <input type="checkbox" name="rbc_f" value="No"
                                            class="border-none border-0 border-bottom border-dotted shadow-none me-2 ">No
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-10  pb-2">
                                <div class="small_text"> 7. Do you receive cash or distributions not otherwise listed
                                </div>
                                <div class="small_text">
                                    <div class="d-flex d_sm_block">If yes, explain.<input type="text" min="0"
                                            name="rcd"
                                            class="border-0 responsive_input bg-transparent border border-bottom outline-none form-control"
                                            style="width:694px">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class='d-flex   my-auto ps-2 '>
                                    <div>
                                        <input type="checkbox" name="rcd_f" value="Yes"
                                            class="border-none border-0 border-bottom border-dotted shadow-none  me-2">Yes
                                    </div>
                                    <div class="ms-lg-4 ms-2">
                                        <input type="checkbox" name="rcd_f" value="No"
                                            class="border-none border-0 border-bottom border-dotted shadow-none me-2 ">No
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-10  pb-2">
                                <div class="small_text">8. Have you received income from overtime work during either
                                    the current or immediate past calendar year?</div>
                                <div class="small_text">
                                    <div class="d-flex d_sm_block">If yes, explain. <input type="text" min="0"
                                            name="rio"
                                            class="border-0  responsive_input  bg-transparent border border-bottom outline-none form-control"
                                            style="width:694px">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class='d-flex   my-auto ps-2 '>
                                    <div>
                                        <input type="checkbox" name="roi_f" value="Yes"
                                            class="border-none border-0 border-bottom border-dotted shadow-none  me-2">Yes
                                    </div>
                                    <div class="ms-lg-4 ms-2">
                                        <input type="checkbox" name="roi_f" value="No"
                                            class="border-none border-0 border-bottom border-dotted shadow-none me-2 ">No
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-10  pb-2">
                                <div class="small_text">9. Have you been awarded or granted stock options, restricted
                                    stock or any other non-cash compensation or entitlement during the current or
                                    immediate past calendar year?</div>
                                <div class="small_text">
                                    <div class="d-flex d_sm_block">If yes, explain. <input type="text" min="0"
                                            name="aogs"
                                            class="border-0 responsive_input   bg-transparent border border-bottom outline-none form-control"
                                            style="width:694px">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class='d-flex   my-auto ps-2 '>
                                    <div>
                                        <input type="checkbox" name="aogs_f" value="Yes"
                                            class="border-none border-0 border-bottom border-dotted shadow-none  me-2">Yes
                                    </div>
                                    <div class="ms-lg-4 ms-2">
                                        <input type="checkbox" name="aogs_f" value="No"
                                            class="border-none border-0 border-bottom border-dotted shadow-none me-2 ">No
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-10  pb-2">
                                <div class="small_text">10. Have you received any other supplemental compensation
                                    during either the current or immediate past calendar year?</div>
                                <div class="small_text">If yes, state the date(s) of receipt and set forth the gross
                                    and net amounts received. Also describe the nature of any supplemental compensation
                                    received.</div>
                                <div class="small_text">
                                    <div class="d-flex">
                                        <input type="text" min="0" name="hyr1"
                                            class="border-0    bg-transparent border border-bottom outline-none form-control">
                                    </div>
                                    <div class="d-flex">
                                        <input type="text" min="0" name="hyr2"
                                            class="border-0    bg-transparent border border-bottom outline-none form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class='d-flex   my-auto ps-2 '>
                                    <div>
                                        <input type="checkbox" name="hyr_f" value="Yes"
                                            class="border-none border-0 border-bottom border-dotted shadow-none  me-2">Yes
                                    </div>
                                    <div class="ms-lg-4">
                                        <input type="checkbox" name="hyr_f" value="No"
                                            class="border-none border-0 border-bottom border-dotted shadow-none me-2 ">No
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-lg-10  pb-2">
                                <div class="small_text">11. Have you received income from unemployment, disability
                                    and/or social security during either the current or immediate past calendar year?
                                </div>
                                <div class="small_text">If yes, state the date(s) of receipt and set forth the gross
                                    and net amounts received.</div>
                                <div class="d-flex">
                                    <input type="text" min="0" name="uds"
                                        class="border-0    bg-transparent border border-bottom outline-none form-control">

                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class='d-flex   my-auto ps-2 '>
                                    <div>
                                        <input type="checkbox" name="uds_f" value="Yes"
                                            class="border-none border-0 border-bottom border-dotted shadow-none  me-2">Yes
                                    </div>
                                    <div class="ms-lg-4">
                                        <input type="checkbox" name="uds_f" value="No"
                                            class="border-none border-0 border-bottom border-dotted shadow-none me-2 ">No
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-10  pb-2">
                                <div class="small_text">
                                    <div class="d-flex">12. List the names of the dependents you claim: <input
                                            type="text" min="0" name="lonc"
                                            class="border-0    bg-transparent border border-bottom outline-none form-control"
                                            style="width:468px">
                                    </div>
                                    <div class="d-flex"> <input type="text" min="0" name="lnd"
                                            class="border-0    bg-transparent border border-bottom outline-none form-control">

                                    </div>
                                </div>
                                <div class="col-lg-2">

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-10  pb-2">
                                    <div class="small_text">13. Are you paying or receiving any alimony?</div>
                                    <div class="small_text">
                                        <div class="d-flex">If yes, how much and from or to whom? <input
                                                type="text" min="0" name="pra1"
                                                class="border-0    bg-transparent border border-bottom outline-none form-control"
                                                style="width:505px">
                                        </div>
                                        <div class="d-flex"> <input type="text" min="0" name="pra2"
                                                class="border-0    bg-transparent border border-bottom outline-none form-control">

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class='d-flex   my-auto ps-2 '>
                                        <div>
                                            <input type="checkbox" name="pra_f" value="Yes"
                                                class="border-none border-0 border-bottom border-dotted shadow-none  me-2">Yes
                                        </div>
                                        <div class="ms-lg-4">
                                            <input type="checkbox" name="pra_f" value="No"
                                                class="border-none border-0 border-bottom border-dotted shadow-none me-2 ">No
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-10  pb-2">
                                    <div class="small_text">14. Are you paying or receiving any child support?</div>
                                    <div class="small_text">If yes, list names of the children, the amount paid or
                                        received for each child and to whom paid or from whom
                                        received.</div>

                                    <div class="d-flex"> <input type="text" min="0" name="child_s1"
                                            class="border-0    bg-transparent border border-bottom outline-none form-control">
                                    </div>

                                    <div class="d-flex"> <input type="text" min="0" name="child_s2"
                                            class="border-0    bg-transparent border border-bottom outline-none form-control">
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class='d-flex   my-auto ps-2 '>
                                        <div>
                                            <input type="checkbox" name="child_s_f" value="Yes"
                                                class="border-none border-0 border-bottom border-dotted shadow-none  me-2">Yes
                                        </div>
                                        <div class="ms-lg-4">
                                            <input type="checkbox" name="child_s_f" value="No"
                                                class="border-none border-0 border-bottom border-dotted shadow-none me-2 ">No
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-10  pb-2">
                                    <div class="small_text">15. Is there a wage execution in connection with support?
                                    </div>
                                    <div class="small_text">
                                        <div class="small_text">
                                            <div class="d-flex">If yes, explain. <input type="text"
                                                    min="0" name="conn_w_support"
                                                    class="border-0    bg-transparent border border-bottom outline-none form-control"
                                                    style="width:671px">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class='d-flex   my-auto ps-2 '>
                                        <div>
                                            <input type="checkbox" name="conn_w_support_f" value="Yes"
                                                class="border-none border-0 border-bottom border-dotted shadow-none  me-2">Yes
                                        </div>
                                        <div class="ms-lg-4">
                                            <input type="checkbox" name="conn_w_support_f" value="No"
                                                class="border-none border-0 border-bottom border-dotted shadow-none me-2 ">No
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-10  pb-2">
                                    <div class="small_text">16. Does a Safe Deposit Box exist and if so, at which
                                        bank?</div>
                                </div>
                                <div class="col-lg-2">
                                    <div class='d-flex   my-auto ps-2 '>
                                        <div>
                                            <input type="checkbox" name="sdb_f" value="Yes"
                                                class="border-none border-0 border-bottom border-dotted shadow-none  me-2">Yes
                                        </div>
                                        <div class="ms-lg-4">
                                            <input type="checkbox" name="sdb_f" value="No"
                                                class="border-none border-0 border-bottom border-dotted shadow-none me-2 ">No
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-10  pb-2">
                                    <div class="small_text">17. Has a dependent child of yours received income from
                                        social security, SSI or other government program during either the current or
                                        immediate past calendar year?</div>
                                    <div class="small_text">If yes, explain the basis and state the date(s) of receipt
                                        and set forth the gross and net amounts received</div>
                                    <div class="d-flex">

                                        <input type="text" min="0" name="dcoyri"
                                            class="border-0    bg-transparent border border-bottom outline-none form-control">
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class='d-flex   my-auto ps-2 '>
                                        <div>
                                            <input type="checkbox" name="dcoyri_f" value="Yes"
                                                class="border-none border-0 border-bottom border-dotted shadow-none  me-2">Yes
                                        </div>
                                        <div class="ms-lg-4">
                                            <input type="checkbox" name="dcoyri_f" value="No"
                                                class="border-none border-0 border-bottom border-dotted shadow-none me-2 ">No
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-10  pb-2">
                                    <div class="small_text">18. Explanation of Income or Other Information:</div>
                                    <div class="d-flex">

                                        <input type="text" min="0" name="eioi"
                                            class="border-0 bg-transparent border border-bottom outline-none form-control">
                                    </div>
                                </div>
                                <div class="col-lg-2">

                                </div>
                            </div>
                            @include('layouts.footer4', ['page' => 5])
                </section>

                <section class="section_area row page1 bg-white pt-5 p-lg-5 pe-2 pe-lg-5 p-lg-3 m-3 mt-4  pt-lg-5 pt-4"
                    id="sixth_section">
                    <div class="col-lg-10 mx-auto">

                        <div class="row mt-lg-3">
                            <div class=" pt-lg-2">Part D - Monthly Expenses (computed at 4.3 wks/mo.)</div>
                            <div class="small_text">Joint Marital or Civil Union Life Style should reflect standard of
                                living established during marriage or civil union. Current expenses should reflect the
                                current life style. Do not repeat those income deductions listed in Part C – 3.</div>

                            <div class="col-lg-7"></div>
                            <div class="col-lg-5 d-flex d_sm_block">
                                <div class="small_text pe-lg-5">
                                    Joint Life Style Family, including <input type="text" name="jlsf_children1"
                                        class="border-bottom responsive_input border-0 w-25 responsive_input">children
                                </div>
                                <div class="small_text d_sm_block">
                                    Current Life Style Yours and<input type="text" name="clsy_children1"
                                        class="border-bottom border-0 w-25 responsive_input">children
                                </div>

                            </div>


                        </div>

                        <div class="row">
                            <div class="small_text">SCHEDULE A: SHELTER</div>
                            <div class="col-lg-7 ">
                                <div class="ps-lg-5">
                                    <div class="small_text">If Tenant:</div>
                                    <div class="ps-lg-3">
                                        <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Rent </span>
                                            <div class="d-flex"> <input type="text" min="0"
                                                    name="rent" style="width: 438px"
                                                    class="border-bottom border-0 responsive_input  bg-transparent border outline-none form-control">
                                            </div>

                                        </div>
                                        <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text"> Heat (if not
                                                furnished)
                                            </span>
                                            <div class="d-flex"> <input type="text" min="0"
                                                    name="hear" style="width: 322px"
                                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                            </div>
                                        </div>
                                        <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text"> Electric & Gas (if not
                                                furnished) </span>
                                            <div class="d-flex"> <input type="text" min="0"
                                                    name="electric" style="width: 261px"
                                                    class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">
                                            </div>
                                        </div>
                                        <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Renter’s
                                                Insurance</span>
                                            <div class="d-flex"> <input type="text" min="0"
                                                    name="renters" style="width: 344px"
                                                    class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">
                                            </div>
                                        </div>
                                        <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Parking (at
                                                Apartment)</span>
                                            <div class="d-flex"> <input type="text" min="0"
                                                    name="parking" style="width: 311px"
                                                    class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">
                                            </div>
                                        </div>
                                        <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Other charges
                                                (Itemize)</span>
                                            <div class="d-flex"> <input type="text" min="0"
                                                    name="other_charges" style="width: 309px"
                                                    class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="d-flex mt-lg-1">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="rent1" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="heat1" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="electric1" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="renters1" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="parking1" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="other_charges1" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="d-flex mt-lg-1">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="rent2" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="heat2" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="electric3" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="renters3" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="parking3" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="other_charges3" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row pt-lg-4">
                            <div class="col-lg-7 ps-lg-5">
                                <div class="small_text">If Homeowner:</div>
                                <div class="ps-lg-3">
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Mortgage </span>
                                        <div class="d-flex"> <input type="text" min="0"
                                                name="mortgage" style="width: 400px"
                                                class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">
                                        </div>

                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text"> Real Estate Taxes (if not
                                            included w/mortgage payment)
                                        </span>
                                        <div class="d-flex"> <input type="text" min="0"
                                                name="real_estate_taxes" style="width: 90px"
                                                class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">
                                        </div>
                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Homeowners Ins. (if not
                                            included w/mortgage payment)</span>
                                        <div class="d-flex"> <input type="text" min="0"
                                                name="homeowners_ins" style="width: 94px"
                                                class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">
                                        </div>
                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Other Mortgages or Home
                                            Equity Loans</span>
                                        <div class="d-flex"> <input type="text" min="0"
                                                name="other_mortgages" style="width: 200px"
                                                class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">
                                        </div>
                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Heat (unless Electric or
                                            Gas)</span>
                                        <div class="d-flex"> <input type="text" min="0"
                                                name="unless_electric" style="width: 278px"
                                                class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">
                                        </div>
                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Electric & Gas</span>
                                        <div class="d-flex"> <input type="text" min="0" name="gas"
                                                style="width: 374px"
                                                class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">
                                        </div>
                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Water & Sewer</span>
                                        <div class="d-flex"> <input type="text" min="0"
                                                name="water_sewer" style="width: 362px"
                                                class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">
                                        </div>
                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Garbage Removal</span>
                                        <div class="d-flex"> <input type="text" min="0"
                                                name="garbage_removal" style="width: 345px"
                                                class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">
                                        </div>
                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Snow Removal</span>
                                        <div class="d-flex"> <input type="text" min="0"
                                                name="snow_removal" style="width: 362px"
                                                class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">
                                        </div>
                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Lawn Care</span>
                                        <div class="d-flex"> <input type="text" min="0"
                                                name="lawn_care" style="width: 391px"
                                                class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">
                                        </div>
                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Maintenance/Repairs</span>
                                        <div class="d-flex"> <input type="text" min="0"
                                                name="maintenance" style="width: 324px"
                                                class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">
                                        </div>
                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Condo, Co-op or Association
                                            Fees</span>
                                        <div class="d-flex"> <input type="text" min="0" name="condo"
                                                style="width: 238px"
                                                class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">
                                        </div>
                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Other Charges
                                            (Itemize)</span>
                                        <div class="d-flex"> <input type="text" min="0"
                                                name="other_chages_itemsize" style="width: 306px"
                                                class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">


                                <div class="d-flex mt-lg-1">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="mortgage1" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="real_estate_taxes1" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="homeowners_ins1" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="other_mortgages1" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="unless_electric1" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="gas1" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="water_sewer1" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="garbage_removal1" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="snow_removal1" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="lawn_care1" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="maintenance1" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="condo1" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="other_chages_itemsize1" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="d-flex mt-lg-1">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="mortgage2" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="real_estate_taxes2" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="homeowners_ins2" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="other_mortgages2" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="unless_electric2" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="gas2" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="water_sewer2" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="garbage_removal2" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="snow_removal2" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="lawn_care2" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="maintenance2" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="condo2" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="other_chages_itemsize2" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                            </div>
                        </div>



                        <div class="row pt-lg-4">
                            <div class="col-lg-7 ps-lg-5">
                                <div class="small_text">Tenant or Homeowner:</div>
                                <div class="ps-lg-3">
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Telephone </span>
                                        <div class="d-flex"> <input type="text" min="0"
                                                name="1telephone" style="width: 397px"
                                                class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">
                                        </div>

                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text"> Mobile/Cellular
                                            Telephone</span>
                                        <div class="d-flex"> <input type="text" min="0"
                                                name="1mobile_cellular" style="width: 292px"
                                                class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">
                                        </div>
                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Service Contracts on
                                            Equipment</span>
                                        <div class="d-flex"> <input type="text" min="0"
                                                name="1service_contracts" style="width: 255px"
                                                class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">
                                        </div>
                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Cable TV</span>
                                        <div class="d-flex"> <input type="text" min="0"
                                                name="1cable_tv" style="width: 406px"
                                                class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">
                                        </div>
                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Plumber/Electrician</span>
                                        <div class="d-flex"> <input type="text" min="0"
                                                name="1plumber_electrician" style="width: 339px"
                                                class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">
                                        </div>
                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Equipment &
                                            Furnishings</span>
                                        <div class="d-flex"> <input type="text" min="0"
                                                name="1equipment_furnishings" style="width: 299px"
                                                class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">
                                        </div>
                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Internet Charges</span>
                                        <div class="d-flex"> <input type="text" min="0"
                                                name="1internet_charges" style="width: 355px"
                                                class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">
                                        </div>
                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Home Security System</span>
                                        <div class="d-flex"> <input type="text" min="0"
                                                name="1home_security_system" style="width: 314px"
                                                class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">
                                        </div>
                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Other (itemize)</span>

                                    </div>
                                    <div class="text-end pt-2"><span class="pe-lg-4 small_text">TOTAL</span>

                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-3 pt-lg-4">



                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="1telephone1" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="1mobile_cellular1" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>

                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="1service_contracts1" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="1cable_tv1" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="1plumber_electrician1" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="1equipment_furnishings1" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="1internet_charges1" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="1home_security_system1" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="1other_charges1" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="1other_charges2" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                            </div>
                            <div class="col-lg-2 pt-lg-4">

                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="1telephone2" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="1mobile_cellular2" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="1service_contracts2" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="1cable_tv2" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="1plumber_electrician2" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="1equipment_furnishings2" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="1internet_charges2" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="1home_security_system2" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="1other_charges3" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="1other_charges4" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row pt-lg-4">
                            <div class="col-lg-7 ps-lg-5">
                                <div class="small_text">Tenant or Homeowner:</div>
                                <div class="ps-lg-3">
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Telephone </span>
                                        <div class="d-flex"> <input type="text" min="0"
                                                name="2telephone" style="width: 397px"
                                                class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">
                                        </div>

                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text"> Mobile/Cellular
                                            Telephone</span>
                                        <div class="d-flex"> <input type="text" min="0"
                                                name="2moblie_cellular" style="width: 292px"
                                                class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">
                                        </div>
                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Service Contracts on
                                            Equipment</span>
                                        <div class="d-flex"> <input type="text" min="0"
                                                name="2service_contracts" style="width: 255px"
                                                class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">
                                        </div>
                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Cable TV</span>
                                        <div class="d-flex"> <input type="text" min="0"
                                                name="2cable_tv" style="width: 406px"
                                                class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">
                                        </div>
                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Plumber/Electrician</span>
                                        <div class="d-flex"> <input type="text" min="0"
                                                name="2plumber_electrician" style="width: 339px"
                                                class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">
                                        </div>
                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Equipment &
                                            Furnishings</span>
                                        <div class="d-flex"> <input type="text" min="0"
                                                name="2equipment_furnishings" style="width: 299px"
                                                class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">
                                        </div>
                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Internet Charges</span>
                                        <div class="d-flex"> <input type="text" min="0"
                                                name="2internet_charges" style="width: 355px"
                                                class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">
                                        </div>
                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Home Security System</span>
                                        <div class="d-flex"> <input type="text" min="0"
                                                name="2home_security_system" style="width: 314px"
                                                class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">
                                        </div>
                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Other (itemize)</span>

                                    </div>
                                    <div class="text-end pt-2"><span class="pe-lg-4 small_text">TOTAL</span>

                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-3 pt-lg-4">



                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="2telephone1" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="2moblie_cellular1" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>

                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="2service_contracts2" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="2cable_tv2" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="2plumber_electrician2" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="2equipment_furnishings2" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="2internet_charges" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="2home_security_system2" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="1other_charges5" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="1other_charges6" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                            </div>
                            <div class="col-lg-2 pt-lg-4">

                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="2telephone2" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="2moblie_cellular2" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="2service_contracts2" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="2cable_tv2" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="2plumber_electrician2" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="2equipment_furnishings2" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="2internet_charges2" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="2home_security_system2" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="1other_charges7" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="1other_charges8" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row pt-lg-4">
                            <div class="small_text">SCHEDULE B: TRANSPORTATION</div>
                            <div class="col-lg-7 ps-lg-5">
                                <div class="ps-lg-3">
                                    <div class="d-flex d_sm_block"><span class="pe-lg-3 small_text">Auto Payment </span>
                                        <div class="d-flex"> <input type="text" min="0"
                                                name="auto_payment" style="width: 377px"
                                                class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">
                                        </div>

                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text"> Auto Insurance</span>
                                        <div class="d-flex"> <input type="text" min="0"
                                                name="auto_insurance" style="width: 366px"
                                                class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">
                                        </div>
                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Registration,
                                            License</span>
                                        <div class="d-flex"> <input type="text" min="0"
                                                name="registration_license" style="width: 329px"
                                                class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">
                                        </div>
                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Maintenance</span>
                                        <div class="d-flex"> <input type="text" min="0"
                                                name="maintenance" style="width: 381px"
                                                class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">
                                        </div>
                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Fuel and Oil</span>
                                        <div class="d-flex"> <input type="text" min="0"
                                                name="fuel_and_oil" style="width: 387px"
                                                class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">
                                        </div>
                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Commuting Expenses</span>
                                        <div class="d-flex"> <input type="text" min="0"
                                                name="commuting_expenses" style="width: 322px"
                                                class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">
                                        </div>
                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Other Charges
                                            (Itemize)</span>
                                        <div class="d-flex"> <input type="text" min="0"
                                                name="pg6_other_charges" style="width: 307px"
                                                class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">
                                        </div>

                                    </div>
                                    <div class="text-end pt-2"><span class="pe-lg-4 small_text">TOTAL</span></div>


                                </div>
                            </div>
                            <div class="col-lg-3 pt-lg-1">


                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="auto_payment1" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="auto_insurance1" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="registration_license1" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="maintenance1" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="fuel_and_oil1" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="commuting_expenses1" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="pg6_other_charges1" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                            </div>
                            <div class="col-lg-2 pt-lg-1">

                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="auto_payment2" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="auto_insurance2" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="registration_license2" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="maintenance2" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="fuel_and_oil2" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="commuting_expenses2" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="pg6_other_charges2" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                            </div>
                            @include('layouts.footer4', ['page' => 6])

                        </div>
                    </div>

                </section>


                <section
                    class="section_area row page1 bg-white pt-5 p-lg-5 pe-2 pe-lg-5 p-lg-3 m-3 mt-4  pt-lg-5 pt-4"
                    id="seventh_section">
                    <div class="col-lg-10 mx-auto">

                        <div class="row mt-lg-3">

                            <div class="col-lg-7">
                                <div class="small_text">SCHEDULE C: PERSONAL</div>

                            </div>
                            <div class="col-lg-5 d-flex d_sm_block">
                                <div class="small_text pe-lg-5">
                                    Joint Life Style Family, including <input type="text" name="jlsf_children2" class="responsive_input border-bottom border-0 w-25">children
                                </div>
                                <div class="small_text d_sm_block"> Current Life Style Yours and<input type="text" name="clsy_children2" class="responsive_input border-bottom border-0 w-25">children
                                </div>

                            </div>


                        </div>

                        <div class="row">
                            <div class="col-lg-7 ps-lg-5">
                                <div class="ps-lg-3">
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Food at Home & household
                                            supplies </span>
                                        <div class="d-flex"> <input type="text" min="0"
                                                name="food_at_home" style="width: 226px"
                                                class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">
                                        </div>

                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text"> Prescription Drugs</span>
                                        <div class="d-flex"> <input type="text" min="0"
                                                name="prescription_drugs" style="width: 344px"
                                                class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">
                                        </div>
                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Non-prescription drugs,
                                            cosmetics, toiletries & sundries</span>
                                        <div class="d-flex"> <input type="text" min="0"
                                                name="non_prescription_drugs" style="width: 99px"
                                                class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">
                                        </div>
                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">School Lunch </span>
                                        <div class="d-flex"> <input type="text" min="0"
                                                name="school_lunch" style="width: 379px"
                                                class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">
                                        </div>
                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Restaurants</span>
                                        <div class="d-flex"> <input type="text" min="0"
                                                name="restaurants" style="width: 388px"
                                                class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">
                                        </div>
                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Clothing</span>
                                        <div class="d-flex"> <input type="text" min="0"
                                                name="clothing" style="width: 410px"
                                                class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">
                                        </div>
                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Dry Cleaning, Commercial
                                            Laundry</span>
                                        <div class="d-flex"> <input type="text" min="0"
                                                name="dry_cleaning" style="width: 234px"
                                                class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">
                                        </div>
                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Hair Care</span>
                                        <div class="d-flex"> <input type="text" min="0"
                                                name="hair_care" style="width: 405px"
                                                class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">
                                        </div>
                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Domestic Help</span>
                                        <div class="d-flex"> <input type="text" min="0"
                                                name="domestic_help" style="width: 368px"
                                                class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">
                                        </div>
                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Medical (exclusive of
                                            psychiatric)*</span>
                                        <div class="d-flex"> <input type="text" min="0"
                                                name="medical_exclusive" style="width: 242px"
                                                class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">
                                        </div>
                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Eye Care*</span>
                                        <div class="d-flex"> <input type="text" min="0"
                                                name="eye_care" style="width: 403px"
                                                class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">
                                        </div>
                                    </div>
                                    <div class="d-flex d_sm_block"><span
                                            class="pe-lg-4 small_text">Psychiatric/psychological/counseling*</span>
                                        <div class="d-flex"> <input type="text" min="0"
                                                name="psychiatric_psychological" style="width: 216px"
                                                class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">
                                        </div>
                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Dental (exclusive of
                                            Orthodontic*</span>
                                        <div class="d-flex"> <input type="text" min="0"
                                                name="dental_exclusive" style="width: 242px"
                                                class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">
                                        </div>
                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Orthodontic* </span>
                                        <div class="d-flex"> <input type="text" min="0"
                                                name="orthodontic" style="width: 379px"
                                                class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">
                                        </div>
                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Medical Insurance
                                            (hospital, etc.)*</span>
                                        <div class="d-flex"> <input type="text" min="0"
                                                name="medical_insurance" style="width: 241px"
                                                class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">
                                        </div>
                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Club Dues and Memberships
                                        </span>
                                        <div class="d-flex"> <input type="text" min="0"
                                                name="club_dues_memberships" style="width: 272px"
                                                class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">
                                        </div>
                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Sports and Hobbies </span>
                                        <div class="d-flex"> <input type="text" min="0"
                                                name="sports_and_hobbies" style="width: 333px"
                                                class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">
                                        </div>
                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Camps</span>
                                        <div class="d-flex"> <input type="text" min="0" name="camps"
                                                style="width: 421px"
                                                class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">
                                        </div>
                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Vacations </span>
                                        <div class="d-flex"> <input type="text" min="0"
                                                name="vacations" style="width: 403px"
                                                class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">
                                        </div>
                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Children’s Private School
                                            Costs </span>
                                        <div class="d-flex"> <input type="text" min="0"
                                                name="childrens_private_school_costs" style="width: 259px"
                                                class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">
                                        </div>
                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Parent’s Educational
                                            Costs</span>
                                        <div class="d-flex"> <input type="text" min="0"
                                                name="parents_educational_costs" style="width: 290px"
                                                class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">
                                        </div>
                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Children’s Lessons
                                            (dancing, music, sports, etc.)</span>
                                        <div class="d-flex"> <input type="text" min="0"
                                                name="childrens_lessons" style="width: 150px"
                                                class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">
                                        </div>
                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Babysitting</span>
                                        <div class="d-flex"> <input type="text" min="0"
                                                name="babysitting" style="width: 391px"
                                                class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">
                                        </div>
                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Day-Care Expenses</span>
                                        <div class="d-flex"> <input type="text" min="0"
                                                name="day_care_expenses" style="width: 335px"
                                                class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">
                                        </div>
                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Entertainment </span>
                                        <div class="d-flex"> <input type="text" min="0"
                                                name="entertainment" style="width: 371px"
                                                class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">
                                        </div>
                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Alcohol and Tobacco </span>
                                        <div class="d-flex"> <input type="text" min="0"
                                                name="alcohol_and_tobacco" style="width: 328px"
                                                class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">
                                        </div>
                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Newspapers and Periodicals
                                        </span>
                                        <div class="d-flex"> <input type="text" min="0"
                                                name="newspapers_and_periodicals" style="width: 276px"
                                                class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">
                                        </div>
                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Gifts</span>
                                        <div class="d-flex"> <input type="text" min="0" name="gifts"
                                                style="width: 436px"
                                                class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">
                                        </div>
                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Contributions</span>
                                        <div class="d-flex"> <input type="text" min="0"
                                                name="contributions" style="width: 377px"
                                                class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">
                                        </div>
                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Payments to Non-Child
                                            Dependents </span>
                                        <div class="d-flex"> <input type="text" min="0"
                                                name="payments_non_child_dependents" style="width: 225px"
                                                class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">
                                        </div>
                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Prior Existing Support
                                            Obligations this family/other families </span>

                                    </div>
                                    <div class="d-flex d_sm_block justify-content-between"><span class="pe-lg-4 small_text">
                                            (specify)</span>
                                        <div class="d-flex justify-content-end"> <input type="text"
                                                min="0" name="prior_existing_support" style="width: 80px"
                                                class="border-bottom text-end border-0 responsive_input bg-transparent border outline-none form-control">
                                        </div>
                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Tax Reserve (not listed
                                            elsewhere)</span>
                                        <div class="d-flex"> <input type="text" min="0"
                                                name="tax_reserve" style="width: 237px"
                                                class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">
                                        </div>
                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Life Insurance</span>
                                        <div class="d-flex"> <input type="text" min="0"
                                                name="life_insurance" style="width: 376px"
                                                class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">
                                        </div>
                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Savings/Investment</span>
                                        <div class="d-flex"> <input type="text" min="0"
                                                name="savings_investment" style="width: 337px"
                                                class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">
                                        </div>
                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Debt Service (from page 7)
                                            (not listed elsewhere)</span>
                                        <div class="d-flex"> <input type="text" min="0"
                                                name="debt_service" style="width: 137px"
                                                class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">
                                        </div>
                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Parenting Time
                                            Expenses</span>
                                        <div class="d-flex"> <input type="text" min="0"
                                                name="parenting_time_expenses" style="width: 296px"
                                                class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">
                                        </div>
                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Professional Expenses
                                            (other than this proceeding)</span>
                                        <div class="d-flex"> <input type="text" min="0"
                                                name="professional_expenses" style="width: 125px"
                                                class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">
                                        </div>
                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Pet Care and
                                            Expenses</span>
                                        <div class="d-flex"> <input type="text" min="0"
                                                name="pet_care_expenses" style="width: 310px"
                                                class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">
                                        </div>
                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Other (specify)</span>
                                        <div class="d-flex"> <input type="text" min="0"
                                                name="other_specify" style="width: 366px"
                                                class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-3">


                                <div class="d-flex mt-lg-1">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="food_at_home1" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="prescription_drugs1" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="non_prescription_drugs1" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="school_lunch1" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="restaurants1" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="clothing1" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="dry_cleaning1" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="hair_care1" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="domestic_help1" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="medical_exclusive1" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="eye_care1" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="psychiatric_psychological1" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="dental_exclusive1" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="orthodontic1" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="medical_insurance1" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="club_dues_memberships1" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="sports_and_hobbies1" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="sports_and_hobbies1" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>

                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="camps1" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="vacations1" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="childrens_private_school_costs1" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="parents_educational_costs1" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="childrens_lessons1" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex mt-lg-1">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="babysitting1" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="day_care_expenses1" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="entertainment1" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="alcohol_and_tobacco1" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="newspapers_and_periodicals1" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="gifts1" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex mt-lg-1">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="contributions1" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="payments_non_child_dependents1" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="prior_existing_support1" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="tax_reserve1" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="life_insurance1" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="savings_investment1" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex ">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="debt_service1" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="parenting_time_expenses1" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="professional_expenses1" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex mt-lg-1">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="pet_care_expenses1" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex mt-lg-1">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="other_specify" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                            </div>
                            <div class="col-lg-2">

                                <div class="d-flex mt-lg-1">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="food_at_home2" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="prescription_drugs2" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex mt-lg-1">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="non_prescription_drugs2" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="school_lunch2" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="restaurants2" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="psychiatric_psychological211" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="clothing2" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="dry_cleaning2" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="hair_care2" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex mt-lg-1">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="domestic_help2" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="medical_exclusive2" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="eye_care2" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="psychiatric_psychological21" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex mt-lg-1">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="psychiatric_psychological2" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="dental_exclusive2" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="orthodontic2" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="medical_insurance2" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>

                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="club_dues_memberships2" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="sports_and_hobbies2" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="sports_and_hobbies2" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="camps2" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex mt-lg-1">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="vacations2" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="childrens_private_school_costs2" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="parents_educational_costs2" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="childrens_lessons2" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="babysitting2" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="day_care_expenses2" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex mt-lg-1">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="entertainment2" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="alcohol_and_tobacco2" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="newspapers_and_periodicals2" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="gifts2" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="contributions2" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="payments_non_child_dependents2" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex mt-lg-1">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="prior_existing_support2" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="tax_reserve2" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="life_insurance2" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="savings_investment2" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="debt_service2" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="parenting_time_expenses2" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="professional_expenses2" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="pet_care_expenses2" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="other_specify2" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                            </div>
                        </div>


                        <div class="row pt-lg-4">
                            <div class="small_text">*unreimbursed only</div>

                            <div class="col-lg-7 ps-lg-5 ">
                                <div class="text-end"><span class="pe-lg-4 small_text">Total </span>
                                </div>
                            </div>
                            <div class="col-lg-3 ">
                                <div class="d-flex">
                                    <small class="ms-2">$</small>
                                    <input type="number" min="0" name="unreimbursed_total1"
                                        style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                            </div>
                            <div class="col-lg-2  ">
                                <div class="d-flex">
                                    <small class="ms-2">$</small>
                                    <input type="number" min="0" name="unreimbursed_total2"
                                        style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                            </div>


                        </div>

                        <div class="row  ">
                            <div class="small_text ps-lg-5">
                                Please Note: If you are paying expenses for a spouse or civil union partner and/or
                                children not reflected in this budget, attach a schedule of such payments.
                            </div>
                            <div class="col-lg-7 ps-lg-5 ">
                                <div class="ps-lg-3">



                                    <div class="d-flex"><span class="pe-lg-4 small_text">Schedule A: Shelter</span>
                                        <div class="d-flex"> <input type="text" min="0"
                                                name="schedule_shelter1" style="width: 332px"
                                                class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">
                                        </div>
                                    </div>
                                    <div class="d-flex"><span class="pe-lg-4 small_text">Schedule B:
                                            Transportation</span>
                                        <div class="d-flex"> <input type="text" min="0"
                                                name="schedule_transportation1" style="width: 285px"
                                                class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">
                                        </div>
                                    </div>
                                    <div class="d-flex"><span class="pe-lg-4 small_text">Schedule C: Personal</span>
                                        <div class="d-flex"> <input type="text" min="0"
                                                name="schedule_personal1" style="width: 324px"
                                                class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">
                                        </div>
                                    </div>
                                    <div class="d-flex mt-lg-1"><span class="pe-lg-4 small_text">Grand Totals</span>
                                        <div class="d-flex"> <input type="text" min="0"
                                                name="grand_total1" style="width: 381px"
                                                class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-3">


                                <div class="d-flex mt-lg-1">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="schedule_shelter2" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>



                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="schedule_transportation2" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="schedule_personal2" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex mt-lg-1">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="grand_total2" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>

                            </div>
                            <div class="col-lg-2">
                                <div class="d-flex mt-lg-1">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="schedule_shelter3" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>


                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="schedule_transportation3" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="schedule_personal3" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex mt-lg-1">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="grand_total3" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                            </div>
                        </div>
                        @include('layouts.footer4', ['page' => 7])

                    </div>
                </section>


                <section
                    class="section_area row page1 bg-white pt-5 p-lg-5 pe-2 pe-lg-5 p-lg-3 m-3 mt-4  pt-lg-5 pt-4"
                    id="eighth_section">
                    <div class="col-lg-10 mx-auto">
                        <div class="ps-lg-5">Part E - Balance Sheet of All Family Assets and Liabilities</div>
                        <div class="text-center">Statement of Assets</div>
                        <div class="row mt-lg-3">
                            <div class="col-lg-4">
                                <div class="small_text">Description</div>
                            </div>
                            <div class="col-lg-1">
                                <div class="small_text">Title to Property (P, D, J)1</div>
                            </div>
                            <div class="col-lg-3">
                                <div class="small_text">Date of purchase/acquisition. If claim that asset is exempt,
                                    state reason and value of what is claimed to be exempt</div>
                            </div>
                            <div class="col-lg-2">
                                <div class="small_text">Value $ Put * after exempt</div>
                            </div>
                            <div class="col-lg-2">
                                <div class="small_text">Date of Evaluation Mo./Day/ Yr.</div>
                            </div>


                        </div>

                        {{-- 1 --}}
                        <div class="row">
                            <div class="small_text">1. Real Property</div>
                            <div class="col-lg-4">
                                <input type="number" min="0" name="real_property_d1"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="real_property_d2"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                            </div>
                            <div class="col-lg-1">
                                <input type="number" min="0" name="real_property_title1"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="real_property_title2"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                            </div>
                            <div class="col-lg-3">
                                <input type="number" min="0" name="real_property_dop1"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="real_property_dop2"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                            </div>
                            <div class="col-lg-2">
                                <div class="d-flex">
                                    <input type="text" min="0" name="real_property_v1"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                    <input type="checkbox" name="real_property_c1" id=""
                                        class="mt-2">
                                </div>
                                <div class="d-flex">
                                    <input type="text" min="0" name="real_property_v2"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                    <input type="checkbox" name="real_property_c2" id=""
                                        class="mt-2">
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <input type="number" min="0" name="real_property_doe1"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="real_property_doe2"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                            </div>
                        </div>

                        {{-- 2  --}}
                        <div class="row">
                            <div class="small_text">2. Bank Accounts, CD’s (identify institution and type of
                                account(s))</div>
                            <div class="col-lg-4">
                                <input type="number" min="0" name="bank_account_d1"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="bank_account_d2"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="bank_account_d3"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="bank_account_d4"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                            </div>
                            <div class="col-lg-1">
                                <input type="number" min="0" name="bank_account_title1"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="bank_account_title2"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="bank_account_title3"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="bank_account_title4"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">


                            </div>
                            <div class="col-lg-3">
                                <input type="number" min="0" name="bank_account_dop1"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="bank_account_dop2"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="bank_account_dop3"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="bank_account_dop4"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                            </div>
                            <div class="col-lg-2">
                                <div class="d-flex"> <input type="text" min="0" name="bank_account_v1"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                    <input type="checkbox" name="bank_account_c1" value="True" id=""
                                        class="mt-2">
                                </div>
                                <div class="d-flex"> <input type="text" min="0" name="bank_account_v2"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                    <input type="checkbox" name="bank_account_c1" value="True" id=""
                                        class="mt-2">
                                </div>
                                <div class="d-flex"> <input type="text" min="0" name="bank_account_v3"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                    <input type="checkbox" name="bank_account_c1" value="True" id=""
                                        class="mt-2">
                                </div>
                                <div class="d-flex"> <input type="text" min="0" name="bank_account_v4"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                    <input type="checkbox" name="bank_account_c1" value="True" id=""
                                        class="mt-2">
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <input type="number" min="0" name="bank_account_doe1"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="bank_account_doe2"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="bank_account_doe3"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="bank_account_doe4"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                            </div>
                        </div>


                        {{-- 3 --}}
                        <div class="row">
                            <div class="small_text">3. Vehicles</div>
                            <div class="col-lg-4">
                                <input type="number" min="0" name="vehicles_d1"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="vehicles_d2"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                            </div>
                            <div class="col-lg-1">
                                <input type="number" min="0" name="vehicles_title1"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="vehicles_title2"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">


                            </div>
                            <div class="col-lg-3">

                                <input type="number" min="0" name="vehicles_dop1"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="vehicles_dop2"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">

                            </div>
                            <div class="col-lg-2">
                                <div class="d-flex">
                                    <input type="text" min="0" name="vehicles_v1"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                    <input type="checkbox" name="vehicles_c1" id="" value="True"
                                        class="mt-2">
                                </div>
                                <div class="d-flex">
                                    <input type="text" min="0" name="vehicles_v2"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                    <input type="checkbox" name="vehicles_c1" id="" value="True"
                                        class="mt-2">
                                </div>

                            </div>
                            <div class="col-lg-2">
                                <input type="number" min="0" name="vehicles_doe1"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="vehicles_doe2"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">


                            </div>
                        </div>

                        {{-- 4  --}}
                        <div class="row">
                            <div class="small_text">4. Tangible Personal Property</div>
                            <div class="col-lg-4">
                                <input type="number" min="0" name="tangible_personal_d1"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="tangible_personal_d2"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="tangible_personal_d3"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="tangible_personal_d4"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                            </div>
                            <div class="col-lg-1">
                                <input type="number" min="0" name="tangible_personal_title1"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="tangible_personal_title2"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="tangible_personal_title3"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="tangible_personal_title4"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">


                            </div>
                            <div class="col-lg-3">

                                <input type="number" min="0" name="tangible_personal_dop1"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="tangible_personal_dop2"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="tangible_personal_dop3"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="tangible_personal_dop4"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">

                            </div>
                            <div class="col-lg-2">
                                <div class="d-flex">
                                    <input type="text" min="0" name="tangible_personal_v1"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                    <input type="checkbox" name="tangible_personal_c1" value="True"
                                        id="" class="mt-2">
                                </div>
                                <div class="d-flex">
                                    <input type="text" min="0" name="tangible_personal_v2"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                    <input type="checkbox" name="tangible_personal_c2" value="True"
                                        id="" class="mt-2">
                                </div>
                                <div class="d-flex">
                                    <input type="text" min="0" name="tangible_personal_v3"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                    <input type="checkbox" name="tangible_personal_c3" value="True"
                                        id="" class="mt-2">
                                </div>
                                <div class="d-flex">
                                    <input type="text" min="0" name="tangible_personal_v4"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                    <input type="checkbox" name="tangible_personal_c4" value="True"
                                        id="" class="mt-2">
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <input type="number" min="0" name="tangible_personal_doe1"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="tangible_personal_doe2"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="tangible_personal_doe3"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="tangible_personal_doe4"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">


                            </div>
                        </div>


                        {{-- 5 --}}

                        <div class="row">
                            <div class="small_text">5. Stocks, Bonds and Securities (identify institution and type of
                                account(s))</div>
                            <div class="col-lg-4">
                                <input type="number" min="0" name="stocks_bonds_d1"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="stocks_bonds_d2"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="stocks_bonds_d3"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="stocks_bonds_d4"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                            </div>
                            <div class="col-lg-1">
                                <input type="number" min="0" name="stocks_bonds_title1"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="stocks_bonds_title2"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="stocks_bonds_title3"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="stocks_bonds_title4"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">


                            </div>
                            <div class="col-lg-3">

                                <input type="number" min="0" name="stocks_bonds_dop1"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="stocks_bonds_dop2"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="stocks_bonds_dop3"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="stocks_bonds_dop4"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">

                            </div>
                            <div class="col-lg-2">
                                <div class="d-flex">
                                    <input type="text" min="0" name="stocks_bonds_v1"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                    <input type="checkbox" name="stocks_bonds_c1" value="True" id=""
                                        class="mt-2">
                                </div>
                                <div class="d-flex">
                                    <input type="text" min="0" name="stocks_bonds_v2"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                    <input type="checkbox" name="stocks_bonds_c2" value="True" id=""
                                        class="mt-2">
                                </div>
                                <div class="d-flex">
                                    <input type="text" min="0" name="stocks_bonds_v3"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                    <input type="checkbox" name="stocks_bonds_c3" value="True" id=""
                                        class="mt-2">
                                </div>
                                <div class="d-flex">
                                    <input type="text" min="0" name="stocks_bonds_v4"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                    <input type="checkbox" name="stocks_bonds_c4" value="True" id=""
                                        class="mt-2">
                                </div>

                            </div>
                            <div class="col-lg-2">
                                <input type="number" min="0" name="stocks_bonds_doe1"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="stocks_bonds_doe2"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="stocks_bonds_doe3"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="stocks_bonds_doe4"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">


                            </div>
                        </div>


                        {{-- 6 --}}

                        <div class="row">
                            <div class="small_text">6. Pension, Profit Sharing, Retirement Plan(s), 40l(k)s, etc.
                                (identify each institution or employer)</div>
                            <div class="col-lg-4">
                                <input type="number" min="0" name="pension_profit_d1"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="pension_profit_d2"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                            </div>
                            <div class="col-lg-1">
                                <input type="number" min="0" name="pension_profit_title1"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="pension_profit_title2"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">


                            </div>
                            <div class="col-lg-3">

                                <input type="number" min="0" name="pension_profit_dop1"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="pension_profit_dop2"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">

                            </div>
                            <div class="col-lg-2">
                                <div class="d-flex">
                                    <input type="text" min="0" name="pension_profit_v1"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                    <input type="checkbox" name="pension_profit_c1" id=""
                                        value="True" class="mt-2">
                                </div>
                                <div class="d-flex">
                                    <input type="text" min="0" name="pension_profit_v2"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                    <input type="checkbox" name="pension_profit_c2" id=""value="True"
                                        class="mt-2">
                                </div>

                            </div>
                            <div class="col-lg-2">
                                <input type="number" min="0" name="pension_profit_doe1"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="pension_profit_doe2"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">


                            </div>
                        </div>

                        {{-- 7 --}}


                        <div class="row">
                            <div class="small_text">7. IRAs</div>
                            <div class="col-lg-4">
                                <input type="number" min="0" name="iras_d1"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="iras_d2"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="iras_d3"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                            </div>
                            <div class="col-lg-1">
                                <input type="number" min="0" name="iras_title1"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="iras_title2"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="iras_title3"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">


                            </div>
                            <div class="col-lg-3">

                                <input type="number" min="0" name="iras_dop1"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="iras_dop2"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="iras_dop3"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">

                            </div>
                            <div class="col-lg-2">
                                <div class="d-flex">
                                    <input type="text" min="0" name="iras_v1"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control"><input
                                        type="checkbox" name="iras_c1" value="True" id=""
                                        class="mt-2">
                                </div>
                                <div class="d-flex">
                                    <input type="text" min="0" name="iras_v2"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control"><input
                                        type="checkbox" name="iras_c2" value="True" id=""
                                        class="mt-2">
                                </div>
                                <div class="d-flex">
                                    <input type="text" min="0" name="iras_v3"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control"><input
                                        type="checkbox" name="iras_c3" value="True" id=""
                                        class="mt-2">
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <input type="number" min="0" name="iras_doe1"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="iras_doe2"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="iras_doe3"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                            </div>
                        </div>
                        {{-- 8 --}}


                        <div class="row">
                            <div class="small_text">8. Businesses, Partnerships, Professional Practices</div>
                            <div class="col-lg-4">
                                <input type="number" min="0" name="bpp_d1"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="bpp_d2"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="bpp_d3"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                            </div>
                            <div class="col-lg-1">
                                <input type="number" min="0" name="bpp_title1"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="bpp_title2"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="bpp_title3"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">


                            </div>
                            <div class="col-lg-3">

                                <input type="number" min="0" name="bpp_dop1"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="bpp_dop2"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="bpp_dop3"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">

                            </div>
                            <div class="col-lg-2">
                                <div class="d-flex">
                                    <input type="text" min="0" name="bpp_v1"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control"><input
                                        type="checkbox" name="bpp_c1" value="True" id=""
                                        class="mt-2">
                                </div>
                                <div class="d-flex">
                                    <input type="text" min="0" name="bpp_v2"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control"><input
                                        type="checkbox" name="bpp_c2" value="True" id=""
                                        class="mt-2">
                                </div>
                                <div class="d-flex">
                                    <input type="text" min="0" name="bpp_v3"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control"><input
                                        type="checkbox" name="bpp_c3" value="True" id=""
                                        class="mt-2">
                                </div>

                            </div>
                            <div class="col-lg-2">
                                <input type="number" min="0" name="bpp_doe1"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="bpp_doe2"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="bpp_doe3"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                            </div>
                        </div>
                        {{-- 9 --}}
                        <div class="row">
                            <div class="small_text">9. Life Insurance (cash surrender value)</div>
                            <div class="col-lg-4">
                                <input type="number" min="0" name="li_d1"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="li_d2"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                            </div>
                            <div class="col-lg-1">
                                <input type="number" min="0" name="li_title1"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="li_title2"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">


                            </div>
                            <div class="col-lg-3">

                                <input type="number" min="0" name="li_dob1"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="li_dob2"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">

                            </div>
                            <div class="col-lg-2">
                                <div class="d-flex">
                                    <input type="text" min="0" name="li_v1"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control"><input
                                        type="checkbox" name="li_c1" id="" class="mt-2">
                                </div>
                                <div class="d-flex">
                                    <input type="text" min="0" name="li_v2"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control"><input
                                        type="checkbox" name="li_c2" id="" class="mt-2">
                                </div>

                            </div>
                            <div class="col-lg-2">
                                <input type="number" min="0" name="li_doe1"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="li_doe2"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                            </div>
                        </div>
                        {{-- 10 --}}

                        <div class="row">
                            <div class="small_text">10. Loans Receivable</div>
                            <div class="col-lg-4">
                                <input type="number" min="0" name="lr_d1"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="lr_d2"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                            </div>
                            <div class="col-lg-1">
                                <input type="number" min="0" name="lr_title1"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="lr_title2"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">


                            </div>
                            <div class="col-lg-3">

                                <input type="number" min="0" name="lr_dob1"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="lr_dob2"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">

                            </div>
                            <div class="col-lg-2">
                                <div class="d-flex">
                                    <input type="text" min="0" name="lr_v1"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control"><input
                                        type="checkbox" name="lr_c1" id="" class="mt-2">
                                </div>
                                <div class="d-flex">
                                    <input type="text" min="0" name="lr_v2"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control"><input
                                        type="checkbox" name="lr_c2" id="" class="mt-2">
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <input type="number" min="0" name="lr_doe1"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="lr_doe2"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                            </div>
                        </div>
                        {{-- 11 --}}


                        <div class="row">
                            <div class="small_text">11. Other (specify)</div>
                            <div class="col-lg-4">
                                <input type="number" min="0" name="other_d1"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="other_d2"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                            </div>
                            <div class="col-lg-1">
                                <input type="number" min="0" name="other_title1"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="other_title2"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">


                            </div>
                            <div class="col-lg-3">

                                <input type="number" min="0" name="other_dob1"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="other_dob2"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">

                            </div>
                            <div class="col-lg-2">
                                <div class="d-flex">
                                    <input type="text" min="0" name="other_v1"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control"><input
                                        type="checkbox" name="other_c1" value="True" id=""
                                        class="mt-2">
                                </div>
                                <div class="d-flex">
                                    <input type="text" min="0" name="other_v2"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control"><input
                                        type="checkbox" name="other_c2" value="True" id=""
                                        class="mt-2">
                                </div>

                            </div>
                            <div class="col-lg-2">
                                <input type="number" min="0" name="other_doe1"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="other_doe2"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                            </div>
                        </div>
                        <div class="row pt-lg-2">

                            <div class="col-lg-10">
                                <div class="small_text text-end pt-1">TOTAL GROSS ASSETS:</div>
                                <div class="small_text text-end pt-1">TOTAL SUBJECT TO EQUITABLE DISTRIBUTION:</div>
                                <div class="small_text text-end pt-1">TOTAL NOT SUBJECT TO EQUITABLE DISTRIBUTION:
                                </div>

                            </div>

                            <div class="col-lg-2">
                                <div class="d-flex">$<input type="number" min="0"
                                        name="total_gross_assets"
                                        class="border-0  responsive_input border-bottom bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">$<input type="number" min="0" name="t_stwd"
                                        class="border-0  responsive_input border-bottom bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">$<input type="number" min="0" name="t_nsted"
                                        class="border-0  responsive_input border-bottom bg-transparent border outline-none form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row pt-lg-5">
                            <div class="col-lg-6">
                                <div class="border-bottom w-50"></div>
                                <p>1 P = Plaintiff; D = Defendant; J = Joint</p>

                            </div>
                        </div>

                        @include('layouts.footer4', ['page' => 8])

                    </div>
                </section>

                <section
                    class="section_area row page1 bg-white pt-5 p-lg-5 pe-2 pe-lg-5 p-lg-3 m-3 mt-4  pt-lg-5 pt-4"
                    id="ninth_section">
                    <div class="col-lg-10 mx-auto">
                        <div class="ps-lg-5">Part E - Balance Sheet of All Family Assets and Liabilities</div>
                        <div class="text-center">Statement of Assets</div>
                        <div class="row mt-lg-3">
                            <div class="col-lg-3">
                                <div class="small_text">Description</div>
                            </div>
                            <div class="col-lg-1">
                                <div class="small_text">Name of Responsible Party (P, D, J)</div>
                            </div>
                            <div class="col-lg-3">
                                <div class="small_text text-center">If you contend liability should not be shared, state reason
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="small_text">Monthly Payment</div>
                            </div>
                            <div class="col-lg-2">
                                <div class="small_text">Total Owed</div>
                            </div>
                            <div class="col-lg-1">
                                <div class="small_text">Date</div>
                            </div>


                        </div>

                        {{-- 1 --}}
                        <div class="row">
                            <div class="small_text">1. Real Estate Mortgages</div>
                            <div class="col-lg-3">
                                <input type="text" min="0" name="real_state_d1"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="real_state_d2"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="real_state_d3"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="real_state_d4"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                            </div>
                            <div class="col-lg-1">
                                <input type="text" min="0" name="real_state_name1"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="real_state_name2"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="real_state_name3"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="real_state_name4"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">


                            </div>
                            <div class="col-lg-3">
                                <input type="text" min="0" name="real_state_reason1"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="real_state_reason2"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="real_state_reason3"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="real_state_reason4"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                            </div>
                            <div class="col-lg-2">
                                <input type="number" min="0" name="real_state_mp1"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="real_state_mp2"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="real_state_mp3"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="real_state_mp4"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                            </div>
                            <div class="col-lg-2">
                                <input type="number" min="0" name="real_state_to1"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="real_state_to2"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="real_state_to3"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="real_state_to4"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                            </div>
                            <div class="col-lg-1">
                                <input type="date" min="0" name="real_state_date1"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="date" min="0" name="real_state_date2"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="date" min="0" name="real_state_date3"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="date" min="0" name="real_state_date4"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                            </div>
                        </div>

                        {{-- 2  --}}
                        <div class="row">
                            <div class="small_text">2. Other Long Term Debts</div>
                            <div class="col-lg-3">
                                <input type="text" min="0" name="other_login_d1"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="other_login_d2"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="other_login_d3"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="other_login_d4"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                            </div>
                            <div class="col-lg-1">
                                <input type="text" min="0" name="other_login_name1"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="other_login_name2"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="other_login_name3"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="other_login_name4"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">


                            </div>
                            <div class="col-lg-3">

                                <input type="text" min="0" name="other_login_reason1"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="other_login_reason2"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="other_login_reason3"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="other_login_reason4"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">

                            </div>
                            <div class="col-lg-2">
                                <input type="number" min="0" name="other_login_mp1"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="other_login_mp2"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="other_login_mp3"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="other_login_mp4"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">


                            </div>
                            <div class="col-lg-2">
                                <input type="number" min="0" name="other_login_to1"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="other_login_to2"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="other_login_to3"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="other_login_to4"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">


                            </div>
                            <div class="col-lg-1">
                                <input type="date" min="0" name="other_login_date1"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="date" min="0" name="other_login_date2"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="date" min="0" name="other_login_date3"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="date" min="0" name="other_login_date4"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">


                            </div>
                        </div>


                        {{-- 3 --}}
                        <div class="row">
                            <div class="small_text">3. Revolving Charges</div>
                            <div class="col-lg-3">
                                <input type="text" min="0" name="revolving_charges_d1"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="revolving_charges_d2"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="revolving_charges_d3"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="revolving_charges_d4"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="revolving_charges_d5"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="revolving_charges_d6"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="revolving_charges_d7"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="revolving_charges_d8"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="revolving_charges_d9"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="revolving_charges_d10"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="revolving_charges_d11"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                            </div>
                            <div class="col-lg-1">
                                <input type="text" min="0" name="revolving_charges_name1"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="revolving_charges_name2"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="revolving_charges_name3"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="revolving_charges_name4"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="revolving_charges_name5"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="revolving_charges_name6"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="revolving_charges_name7"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="revolving_charges_name8"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="revolving_charges_name9"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="revolving_charges_name10"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="revolving_charges_name11"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">


                            </div>
                            <div class="col-lg-3">

                                <input type="text" min="0" name="revolving_charges_reason1"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="revolving_charges_reason2"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="revolving_charges_reason3"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="revolving_charges_reason4"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="revolving_charges_reason5"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="revolving_charges_reason6"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="revolving_charges_reason7"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="revolving_charges_reason8"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="revolving_charges_reason9"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="revolving_charges_reason10"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="revolving_charges_reason11"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">

                            </div>
                            <div class="col-lg-2">
                                <input type="number" min="0" name="revolving_charges_mp1"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="revolving_charges_mp2"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="revolving_charges_mp3"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="revolving_charges_mp4"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="revolving_charges_mp5"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="revolving_charges_mp6"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="revolving_charges_mp7"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="revolving_charges_mp8"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="revolving_charges_mp9"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="revolving_charges_mp10"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="revolving_charges_mp11"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">


                            </div>
                            <div class="col-lg-2">
                                <input type="number" min="0" name="revolving_charges_tw1"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="revolving_charges_tw2"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="revolving_charges_tw3"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="revolving_charges_tw4"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="revolving_charges_tw5"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="revolving_charges_tw6"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="revolving_charges_tw7"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="revolving_charges_tw8"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="revolving_charges_tw9"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="revolving_charges_tw10"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="revolving_charges_tw11"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">


                            </div>
                            <div class="col-lg-1">
                                <input type="date" min="0" name="revolving_charges_date1"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="date" min="0" name="revolving_charges_date2"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="date" min="0" name="revolving_charges_date3"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="date" min="0" name="revolving_charges_date4"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="date" min="0" name="revolving_charges_date5"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="date" min="0" name="revolving_charges_date6"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="date" min="0" name="revolving_charges_date7"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="date" min="0" name="revolving_charges_date8"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="date" min="0" name="revolving_charges_date9"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="date" min="0" name="revolving_charges_date10"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="date" min="0" name="revolving_charges_date11"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">


                            </div>
                        </div>

                        {{-- 4  --}}
                        <div class="row">
                            <div class="small_text">4. Other Short Term Debts</div>
                            <div class="col-lg-3">
                                <input type="text" min="0" name="other_short_d1"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="other_short_d2"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="other_short_d3"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="other_short_d4"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                            </div>
                            <div class="col-lg-1">
                                <input type="text" min="0" name="other_short_name1"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="other_short_name2"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="other_short_name3"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="other_short_name4"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">


                            </div>
                            <div class="col-lg-3">

                                <input type="text" min="0" name="other_short_reason1"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="other_short_reason2"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="other_short_reason3"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="other_short_reason4"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">

                            </div>
                            <div class="col-lg-2">
                                <input type="number" min="0" name="other_short_mp1"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="other_short_mp2"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="other_short_mp3"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="other_short_mp4"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">

                            </div>
                            <div class="col-lg-2">
                                <input type="number" min="0" name="other_short_to1"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="other_short_to2"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="other_short_to2"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="other_short_to4"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">


                            </div>
                            <div class="col-lg-1">
                                <input type="date" min="0" name="other_short_date1"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="date" min="0" name="other_short_date2"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="date" min="0" name="other_short_date3"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="date" min="0" name="other_short_date4"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">


                            </div>
                        </div>


                        <div class="row">
                            <div class="small_text">5. Contingent Liabilities</div>
                            <div class="col-lg-3">
                                <input type="text" min="0" name="contingent_liabilities_d1"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="contingent_liabilities_d2"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="contingent_liabilities_d3"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                            </div>
                            <div class="col-lg-1">
                                <input type="text" min="0" name="contingent_liabilities_name1"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="contingent_liabilities_name2"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="contingent_liabilities_name3"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">


                            </div>
                            <div class="col-lg-3">

                                <input type="text" min="0" name="contingent_liabilities_reason1"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="contingent_liabilities_reason2"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="contingent_liabilities_reason3"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">

                            </div>
                            <div class="col-lg-2">
                                <input type="number" min="0" name="contingent_liabilities_mp1"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="contingent_liabilities_mp2"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="contingent_liabilities_mp3"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">


                            </div>
                            <div class="col-lg-2">
                                <input type="number" min="0" name="contingent_liabilities_to1"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="contingent_liabilities_to2"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="contingent_liabilities_to3"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">


                            </div>
                            <div class="col-lg-1">
                                <input type="date" min="0" name="contingent_liabilities_date1"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="date" min="0" name="contingent_liabilities_date2"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="date" min="0" name="contingent_liabilities_date3"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">


                            </div>
                        </div>

                        <div class="row pt-lg-2">
                            <div class="col-lg-10">
                                <div class="small_text text-end">TOTAL GROSS ASSETS:
                                    <br><small>(excluding contingent liabilities)</small>
                                </div>
                                <div class="small_text text-end">NET WORTH: <br> <span>(subject to equitable
                                        distribution)</span></div>
                                <div class="small_text text-end">TOTAL SUBJECT TO EQUITABLE DISTRIBUTION:</div>
                                <div class="small_text text-end">TOTAL NOT SUBJECT TO EQUITABLE DISTRIBUTION:</div>

                            </div>

                            <div class="col-lg-2">
                                <input type="number" min="0" name="total_ga"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="total_nw"
                                    class="border-bottom border-0 mt-lg-4  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="tsted"
                                    class="border-bottom border-0 mt-lg-4 responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="tnsted"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">

                            </div>
                        </div>

                        @include('layouts.footer4', ['page' => 9])

                    </div>
                </section>

                <section
                    class="section_area row page1 bg-white pt-5 p-lg-5 pe-2 pe-lg-5 p-lg-3 m-3 mt-4  pt-lg-5 pt-4"
                    id="last_section">
                    <div class="col-lg-10 mx-auto">
                        <div class=" ">Part F - Statement of Special Problems</div>
                        <div class=" ">Provide a Brief Narrative Statement of Any Special Problems Involving This
                            Case: As example, state if the matter involves complex valuation problems (such as for a
                            closely held business) or special medical problems of any family member, etc.</div>
                        <textarea name="partf_provide" class="form-control" id="" rows="5"></textarea>
                        <div class=" ">Part G - Required Attachments</div>
                        <div class="text-center">Check If You Have Attached the Following Required Documents</div>

                        <div class="row pt-lg-3">
                            <div class="col-1">1.</div>
                            <div class="col-10">A full and complete copy of your last federal and state income tax
                                returns with all schedules and attachments. (Part C-1)</div>
                            <div class="col-1"> <input type="checkbox" name="pg1" id=""> </div>
                        </div>
                        <div class="row pt-lg-3">
                            <div class="col-1">2.</div>
                            <div class="col-10">Your last calendar year’s W-2 statements, 1099’s, K-1 statements.
                            </div>
                            <div class="col-1"> <input type="checkbox" name="pg2" id=""> </div>
                        </div>
                        <div class="row pt-lg-3">
                            <div class="col-1">3.</div>
                            <div class="col-10">Your three most recent pay stubs.</div>
                            <div class="col-1"> <input type="checkbox" name="pg3" id=""> </div>
                        </div>
                        <div class="row pt-lg-3">
                            <div class="col-1">4.</div>
                            <div class="col-10">Bonus information including, but not limited to, percentage
                                overrides, timing of payments, etc.; the last three statements of such bonuses,
                                commissions, etc. (Part C)</div>
                            <div class="col-1"> <input type="checkbox" name="pg4" id=""> </div>
                        </div>
                        <div class="row pt-lg-3">
                            <div class="col-1">5.</div>
                            <div class="col-10">Your most recent corporate benefit statement or a summary thereof
                                showing the nature, amount and status of retirement plans, savings plans, income
                                deferral plans, insurance benefits, etc. (Part C)</div>
                            <div class="col-1"> <input type="checkbox" name="pg5" id=""> </div>
                        </div>
                        <div class="row pt-lg-3">
                            <div class="col-1">6.</div>
                            <div class="col-10">Affidavit of Insurance Coverage as required by Court Rule 5:4-2(f)
                                (Part B-3)</div>
                            <div class="col-1"> <input type="checkbox" name="pg6" id=""> </div>
                        </div>
                        <div class="row pt-lg-3">
                            <div class="col-1">7.</div>
                            <div class="col-10">List of all prior/pending family actions involving support, custody
                                or Domestic Violence, with the Docket Number, County, State and the disposition reached.
                                Attach copies of all existing Orders in effect. (Part B-5)</div>
                            <div class="col-1"> <input type="checkbox" name="pg7" id=""> </div>
                        </div>
                        <div class="row pt-lg-3">
                            <div class="col-1">8.</div>
                            <div class="col-10">Attach details of each wage execution (Part C-5)</div>
                            <div class="col-1"> <input type="checkbox" name="pg8" id=""> </div>
                        </div>
                        <div class="row pt-lg-3">
                            <div class="col-1">9.</div>
                            <div class="col-10">Schedule of payments made for a spouse or civil union partner
                                and/or children not reflected in Part D.</div>
                            <div class="col-1"> <input type="checkbox" name="pg9" id=""> </div>
                        </div>
                        <div class="row pt-lg-3">
                            <div class="col-1">10.</div>
                            <div class="col-10">Any agreements between the parties.</div>
                            <div class="col-1"> <input type="checkbox" name="pg10" id=""> </div>
                        </div>
                        <div class="row pt-lg-3">
                            <div class="col-1">11.</div>
                            <div class="col-10">An Appendix IX Child Support Guideline Worksheet, as applicable,
                                based upon available information.</div>
                            <div class="col-1"> <input type="checkbox" name="pg11" id=""> </div>
                        </div>
                        <div class="row pt-lg-3">
                            <div class="col-1">12.</div>
                            <div class="col-10">If a request has been made for college or post-secondary school
                                contribution, all relevant information pertaining to that request, including but not
                                limited to documentation of all costs and reimbursements or assistance for which
                                contribution is sought, such as invoices or receipts for tuition, board and books; proof
                                of enrollment; and proof of all financial aid, scholarships, grants and student loans
                                obtained. A list of the information as promulgated by the Administrative Director of the
                                Courts can be found on the Judiciary website.</div>
                            <div class="col-1"> <input type="checkbox" name="pg12" id=""> </div>
                        </div>
                        <div class="row pt-lg-3">
                            <div class="col-lg-1"> </div>
                            <div class="col-lg-10 ps-lg-5">I certify that, other than in this form and its
                                attachments, confidential personal identifiers have been redacted from documents now
                                submitted to the court, and will be redacted from all documents submitted in the future
                                in accordance with Rule 1:38-7(b).</div>
                            <div class="col-lg-1"> </div>
                        </div>
                        <div class="row pt-lg-3">
                            <div class="col-lg-1"> </div>
                            <div class="col-lg-10 ps-lg-5">I certify that the foregoing information contained herein
                                is true. I am aware that if any of the foregoing information contained therein is
                                willfully false, I am subject to punishment.
                            </div>
                            <div class="col-lg-1"> </div>
                        </div>
                        @include('layouts.footer4', ['page' => 10])

                        {{-- @include('layouts.pagination', ['page' => 5]) --}}
                    </div>
                </section>
            </form>
        </div>

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
                <option value="#last_section">Tenth Section</option>
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
