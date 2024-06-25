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
        <form action="{{ route('form5.submit') }}"   method="post">
            @csrf
        <div class="container bg_color p-lg-3 p-1  ">

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
                        <div class="small_text">Attorney(s): <input type="text" name="AttyNameFull" class="border-0 border-bottom responsive_input"> </div>
                        <div class="small_text">Office Address: <input type="text" name="AttyAddressFull" class="border-0 border-bottom responsive_input"> </div>
                        <div class="small_text">Tel. No./Fax No. <input type="text" name="AttyPhoneFax" class="border-0 border-bottom responsive_input"> </div>
                        <div class="small_text">Attorney(s) for: <input type="text" name="AttyParty" class="border-0 border-bottom responsive_input"> </div>

                        <div class="row pt-3">
                            <div class="col-lg-6 border border-dark py-3">

                                <div class="px-lg-0">
                                    <input type="text" name="PlaNameFull" class="form-control border-none border-0 border-bottom border-dotted shadow-none">
                                    <div class="text-end"> Plaintiff,</div>
                                </div>
                                <div class="small_text">vs</div>
                                <div class="px-lg-0">
                                    <input type="text" name="DefiNameFulL" class="form-control border-none border-0 border-bottom border-dotted shadow-none">
                                    <div class="text-end"> Defendant.</div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <h5 class="text-end">SUPERIOR COURT OF NEW JERSEY</h5>
                                <h5 class="text-end">CHANCERY DIVISION, FAMILY PART</h5>
                                <div class="d-flex justify-content-end d_sm_block ">
                                    <select id="county" name="CountyCaps"
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
                                    DOCKET NO. <input type="text" name="CaseDocket"
                                        class="w-75 form-control border-none border-0 border-bottom border-dotted shadow-none responsive_input ">

                                </h5>
                                <h5 class="ps-lg-2">CASE INFORMATION STATEMENT</h5>
                                <h5 class='d-flex d_sm_block justify-content-end ps-2'>
                                    OF <input type="text" name="NameCisFull"
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
                                    <small class="small_text"> Date of Statement : </small> <input type="text"
                                        name="CisDt"
                                        class="responsive_input form-control  border-none border-0 border-bottom border-dotted shadow-none"
                                        style="width:333px">

                                </div>
                                <div class='d-flex d_sm_block pt-2'>
                                    <small class="small_text pe-4">Date of Divorce, Dissolution of Civil </small>
                                    <input type="date" name="DivDt"
                                        class="responsive_input form-control  border-none border-0 border-bottom border-dotted shadow-none  "
                                        style="width:200px">

                                </div>
                                <div class='pt-2'>
                                    <div class="small_text pe-4">Union or Termination of Domestic </div>
                                    <div class="small_text pe-4">Partnership (post-Judgment matters) </div>

                                </div>
                                <div class='d-flex d_sm_block pt-2'>
                                    <small class="small_text pe-4">Date(s) of Prior Statement(s)</small> <input
                                        type="Text6" name="dateofproir"
                                        class="responsive_input form-control  border-none border-0 border-bottom border-dotted shadow-none "
                                        style="width:247px">

                                </div>
                                <div class='d-flex d_sm_block pt-2 justify-content-end'> <input type="text" name="Text6"
                                        class="responsive_input form-control  border-none border-0 border-bottom border-dotted shadow-none  "
                                        style="width:247px">

                                </div>
                                <div class='d-flex d_sm_block pt-2'>
                                    <small class="small_text pe-4">Your Birthdate</small> <input type="date"
                                        name="Text7"
                                        class=" form-control responsive_input border-none border-0 border-bottom border-dotted shadow-none "
                                        style="width:343px">

                                </div>
                                <div class='d-flex d_sm_block pt-2'>
                                    <small class="small_text pe-4">Birthdate of Other Party</small> <input type="date"
                                        name="Date3"
                                        class=" form-control responsive_input border-none border-0 border-bottom border-dotted shadow-none "
                                        style="width:276px">

                                </div>
                                <div class='d-flex d_sm_block pt-2'>
                                    <small class="small_text pe-4">Date of Marriage, or entry into Civil Union</small>
                                    <input type="date" name="Date4"
                                        class="responsive_input form-control  border-none border-0 border-bottom border-dotted shadow-none "
                                        style="width:160px">

                                </div>
                                <div class='d-flex d_sm_block pt-2'>
                                    <small class="small_text pe-4">or Domestic Partnership</small>

                                </div>

                                <div class='d-flex d_sm_block pt-2'>
                                    <small class="small_text pe-4">Date of Separation</small> <input type="date"
                                        name="Date5"
                                        class="responsive_input form-control  border-none border-0 border-bottom border-dotted shadow-none "
                                        style="width:310px">

                                </div>
                                <div class='d-flex d_sm_block pt-2'>
                                    <small class="small_text pe-4">Date of Complaint</small> <input type="date"
                                        name="Date6"
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
                                        name="Text4"
                                        class="responsive_input form-control  border-none border-0 border-bottom border-dotted shadow-none ms-lg-4"
                                        style="width:333px">

                                </div>
                                <div class='d-flex pt-2 d_sm_block'>
                                    <small class="small_text pe-4">Custody </small> <input type="text"
                                        name="Text5"
                                        class="responsive_input form-control  border-none border-0 border-bottom border-dotted shadow-none  ms-lg-4"
                                        style="width:360px">

                                </div>

                                <div class='d-flex pt-2 d_sm_block'>
                                    <small class="small_text pe-4"> Parenting Time</small> <input type="text"
                                        name="Text8"
                                        class="responsive_input form-control  border-none border-0 border-bottom border-dotted shadow-none "
                                        style="width:337px">

                                </div>

                                <div class='d-flex pt-2 d_sm_block'>
                                    <small class="small_text pe-4">Alimony</small> <input type="text"
                                        name="Text9"
                                        class="responsive_input form-control  border-none border-0 border-bottom border-dotted shadow-none "
                                        style="width:382px">

                                </div>
                                <div class='d-flex pt-2 d_sm_block'>
                                    <small class="small_text pe-4">Child Support</small> <input type="text"
                                        name="Text10"
                                        class="responsive_input form-control  border-none border-0 border-bottom border-dotted shadow-none "
                                        style="width:345px">

                                </div>
                                <div class='d-flex pt-2 d_sm_block'>
                                    <small class="small_text pe-4">Equitable Distribution</small> <input type="text"
                                        name="Text11"
                                        class="responsive_input form-control  border-none border-0 border-bottom border-dotted shadow-none "
                                        style="width:289px">

                                </div>
                                <div class='d-flex pt-2 d_sm_block'>
                                    <small class="small_text pe-4">Counsel Fees</small> <input type="text"
                                        name="Text12"
                                        class="responsive_input form-control  border-none border-0 border-bottom border-dotted shadow-none "
                                        style="width:345px">

                                </div>
                                <div class=' pt-2'>
                                    <div class="small_text pe-4">Anticipated College/Post-</div>
                                    <div class="small_text pe-4">Secondary Education</div>
                                </div>

                                <div class='d-flex pt-2 d_sm_block'>
                                    <small class="small_text pe-4">Expenses</small> <input type="text"
                                        name="collegeExpenses"
                                        class="responsive_input form-control  border-none border-0 border-bottom border-dotted shadow-none "
                                        style="width:370px">

                                </div>

                                <div class='d-flex pt-2 d_sm_block'>
                                    <small class="small_text pe-4">Other issues (be specific)</small> <input
                                        type="text" name="Text13"
                                        class="responsive_input form-control  border-none border-0 border-bottom border-dotted shadow-none "
                                        style="width:270px">

                                </div>
                                <div class='d-flex pt-2 d_sm_block justify-content-end'>
                                    <input type="text" name="Text13"
                                        class="responsive_input form-control  border-none border-0 border-bottom border-dotted shadow-none "
                                        style="width:270px">

                                </div>
                                <div class='d-flex pt-2 d_sm_block justify-content-end'>
                                    <input type="text" name="Text13"
                                        class="responsive_input form-control  border-none border-0 border-bottom border-dotted shadow-none "
                                        style="width:270px">

                                </div>
                                <div class="d-flex d_sm_block">
                                    <div class='d-flex me-4 '>
                                        <input type="radio" name="Check Box1" value="Yes"
                                            class="responsive_inputborder-none border-0 border-bottom border-dotted shadow-none  me-2">Yes
                                    </div>
                                    <div class="d-flex d_sm_block">

                                        <input type="radio" name="Check Box1" value="No"
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
                                <small class="  pe-4">Your Name</small> <input type="text" name="NameFulll"
                                    class="form-control responsive_input border-none border-0 border-bottom border-dotted shadow-none "
                                    style="width:850px">

                            </div>
                            <div class="row pt-3">
                                <div class="col-lg-2  ">Street Address</div>
                                <div class="col-lg-4 px-lg-0"><input type="text" name="Address1"
                                        class="form-control  border-none border-0 border-bottom border-dotted shadow-none ">
                                </div>
                                <div class=" " style="width:50px;">City</div>
                                <div class="col-lg-2 px-lg-0"><input type="text" name="City1"
                                        class="form-control  border-none border-0 border-bottom border-dotted shadow-none ">
                                </div>
                                <div class="col-lg-1 px-lg-0">State/Zip </div>
                                <div class="col-lg-2 px-lg-0"><input type="text" name="StateZip1"
                                        class="form-control responsive_input border-none border-0 border-bottom border-dotted shadow-none "
                                        style="width:200px"></div>
                            </div>

                            <div class='d-flex d_sm_block pt-2'>
                                <small class="  pe-lg-4">Email :</small> <input type="text" name="email1"
                                    class="form-control  border-none border-0 responsive_input border-bottom border-dotted shadow-none "
                                    style="width:882px">

                            </div>
                            <div class='d-flex d_sm_block pt-2'>
                                <small class="  pe-lg-4">Other Party’s Name :</small> <input type="text"
                                    name="NameFull2"
                                    class="form-control responsive_input border-none border-0 border-bottom border-dotted shadow-none "
                                    style="width:782px">

                            </div>

                            <div class="row pt-3">
                                <div class="col-lg-2  ">Street Address</div>
                                <div class="col-lg-4 px-lg-0"><input type="text" name="Address2"
                                        class="form-control responsive_input border-none border-0 border-bottom border-dotted shadow-none ">
                                </div>
                                <div class=" " style="width:50px;">City</div>
                                <div class="col-lg-2 px-lg-0"><input type="text" name="City2"
                                        class="form-control  border-none border-0 border-bottom border-dotted shadow-none ">
                                </div>
                                <div class="col-lg-1 px-lg-0">State/Zip </div>
                                <div class="col-lg-2 px-lg-0"><input type="text" name="StateZip2"
                                        class="form-control responsive_input border-none border-0 border-bottom border-dotted shadow-none "
                                        style="width:200px"></div>
                            </div>
                            <div class='d-flex d_sm_block pt-2'>
                                <small class="  pe-4">Email :</small> <input type="text" name="email2"
                                    class="form-control responsive_input border-none border-0 border-bottom border-dotted shadow-none"
                                    style="width:882px">
                            </div>


                            <div class="row pt-lg-3">
                                <div class="small_text">2. Name, Address, Birthdate and Person with whom children
                                    reside:</div>
                                <div class="small_text">a. Child(ren) From This Relationship</div>
                                <div class="col-lg-3">
                                    <h5 class="small_text">Child’s Full Name </h5><input type="text"
                                        name="ChildName1"
                                        class=" form-control border-none border-0 border-bottom border-dotted shadow-none "><input
                                        type="text" name="ChildName2"
                                        class=" form-control  border-none border-0 border-bottom border-dotted shadow-none "><input
                                        type="text" name="ChildName3"
                                        class=" form-control border-none border-0 border-bottom border-dotted shadow-none "><input
                                        type="text" name="ChildName4"
                                        class=" form-control border-none border-0 border-bottom border-dotted shadow-none ">
                                </div>

                                <div class="col-lg-4">
                                    <h5 class="small_text">Address</h5> <input type="text" name="ChildAddress1"
                                        class="form-control  border-none border-0 border-bottom border-dotted shadow-none "><input
                                        type="text" name="ChildAddress2"
                                        class="form-control  border-none border-0 border-bottom border-dotted shadow-none "><input
                                        type="text" name="ChildAddress3"
                                        class="form-control  border-none border-0 border-bottom border-dotted shadow-none "><input
                                        type="text" name="ChildAddress4"
                                        class="form-control  border-none border-0 border-bottom border-dotted shadow-none ">
                                </div>

                                <div class="col-lg-2">
                                    <h5 class="small_text">Birthdate</h5> <input type="date" name="ChildDob1"
                                        class="form-control  border-none border-0 border-bottom border-dotted shadow-none ">
                                    <input type="date" name="ChildDob2"
                                        class="form-control  border-none border-0 border-bottom border-dotted shadow-none ">
                                    <input type="date" name="ChildDob3"
                                        class="form-control  border-none border-0 border-bottom border-dotted shadow-none ">
                                    <input type="date" name="ChildDob4"
                                        class="form-control  border-none border-0 border-bottom border-dotted shadow-none ">
                                </div>

                                <div class="col-lg-3">
                                    <h5 class="small_text">Person’s Name</h5><input type="text" name="PersonName1"
                                        class="form-control border-none border-0 border-bottom border-dotted shadow-none "><input
                                        type="text" name="PersonName2"
                                        class="form-control border-none border-0 border-bottom border-dotted shadow-none "><input
                                        type="text" name="PersonName3"
                                        class="form-control border-none border-0 border-bottom border-dotted shadow-none "><input
                                        type="text" name="PersonName4"
                                        class="form-control border-none border-0 border-bottom border-dotted shadow-none ">
                                </div>

                                </div>
                            </div>
                            <div class="row pt-lg-3">
                                <div>b. Child(ren) From Other Relationships</div>
                                <div class="col-lg-3">
                                    <h5 class="small_text">Child’s Full Name </h5><input type="text"
                                        name="ChildName5"
                                        class="form-control  border-none border-0 border-bottom border-dotted shadow-none "><input
                                        type="text" name="ChildName6"
                                        class="form-control  border-none border-0 border-bottom border-dotted shadow-none "><input
                                        type="text" name="ChildName7"
                                        class="form-control  border-none border-0 border-bottom border-dotted shadow-none "><input
                                        type="text" name="ChildName8"
                                        class="form-control  border-none border-0 border-bottom border-dotted shadow-none ">
                                </div>

                                <div class="col-lg-4">
                                    <h5 class="small_text">Address</h5> <input type="text" name="ChildAddress5"
                                        class="form-control  border-none border-0 border-bottom border-dotted shadow-none "><input
                                        type="text" name="ChildAddress6"
                                        class="form-control  border-none border-0 border-bottom border-dotted shadow-none "><input
                                        type="text" name="ChildAddress7"
                                        class="form-control  border-none border-0 border-bottom border-dotted shadow-none "><input
                                        type="text" name="ChildAddress8"
                                        class="form-control  border-none border-0 border-bottom border-dotted shadow-none ">
                                </div>

                                <div class="col-lg-2">
                                    <h5 class="small_text">Birthdate</h5> <input type="date" name="ChildDob5"
                                        class="form-control  border-none border-0 border-bottom border-dotted shadow-none ">
                                    <input type="date" name="ChildDob6"
                                        class="form-control  border-none border-0 border-bottom border-dotted shadow-none ">
                                    <input type="date" name="ChildDob7"
                                        class="form-control  border-none border-0 border-bottom border-dotted shadow-none ">
                                    <input type="date" name="ChildDob8"
                                        class="form-control  border-none border-0 border-bottom border-dotted shadow-none ">
                                </div>

                                <div class="col-lg-3">
                                    <h5 class="small_text">Person’s Name</h5><input type="text" name="PersonName5"
                                        class="form-control  border-none border-0 border-bottom border-dotted shadow-none "><input
                                        type="text" name="PersonName6"
                                        class="form-control  border-none border-0 border-bottom border-dotted shadow-none "><input
                                        type="text" name="PersonName7"
                                        class="form-control  border-none border-0 border-bottom border-dotted shadow-none "><input
                                        type="text" name="PersonName8"
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
                                <div class="col-lg-3"><input type="text" name="Text15"
                                        class="form-control  border-none border-0 border-bottom border-dotted shadow-none ">
                                </div>
                                <div class="col-lg-1 small_text">Address</div>
                                <div class="col-lg-5"><input type="text" name="Text16"
                                        class="form-control responsive_input border-none border-0 border-bottom border-dotted shadow-none "
                                        style="width: 373px;"></div>


                                <div>
                                </div>

                            </div>
                            <div class="row d-flex justify-content-end">
                                <div class="col-lg-5 "><input type="text" name="Text17"
                                        class="form-control  border-none responsive_input border-0 border-bottom border-dotted shadow-none "
                                        style="width: 373px;"></div>
                            </div>

                            <div class="row pt-lg-3">
                                <div class="col-lg-3">
                                    <h5 style="width: 250px;" class="small_text responsive_input">Name of
                                        Employer/Business </h5>
                                </div>
                                <div class="col-lg-3"><input type="text" name="Text18"
                                        class="form-control responsive_input border-none border-0 border-bottom border-dotted shadow-none ">
                                </div>
                                <div class="col-lg-1 small_text">Address</div>
                                <div class="col-lg-5"><input type="text" name="Text19"
                                        class="form-control responsive_input border-none border-0 border-bottom border-dotted shadow-none "
                                        style="width: 373px;"></div>
                                <div>
                                </div>

                            </div>
                            <div class="row d-flex justify-content-end">
                                <div class="col-lg-5 "><input type="text" name="Text20"
                                        class="form-control responsive_input border-none border-0 border-bottom border-dotted shadow-none "
                                        style="width: 373px;"></div>
                            </div>

                            <div class="row mt-lg-3">
                                <div class="col-lg-6 small_text">2. Do you have Insurance obtained through
                                    Employment/Business?</div>
                                <div class="col-lg-6 d-flex">

                                    <div class="d-flex "><input class="me-2 " type="checkbox" name="Check Box2"
                                            value="Yes" id=""> Yes</div>
                                    <div class="d-flex mx-lg-5"><input class="me-2" type="checkbox" name="Check Box2"
                                            value="No" id=""> No</div>
                                    <div class="d-flex">Type of Insurance:</div>


                                </div>
                            </div>
                            <div class="row   mt-lg-3">
                                <div class=" d-flex mx-lg-1 small_text pb_checkbox">
                                    <div class="small_text">Medical</div>
                                    <div class="d-flex mx-lg-1 small_text"><input class="me-lg-2 me-1" type="checkbox"
                                            value="Yes" name="Check Box3" id=""> Yes</div>
                                    <div class="d-flex mx-lg-1 small_text"><input class="me-lg-4 me-1" type="checkbox"
                                            value="No" name="Check Box3" id=""> No;</div>
                                    <div class="small_text">Dental</div>
                                    <div class="d-flex mx-lg-1 small_text"><input class="me-lg-2 me-1" type="checkbox"
                                            name="Check Box4" value="Yes" id=""> Yes</div>
                                    <div class="d-flex mx-lg-1 small_text"><input class="me-lg-4 me-1" type="checkbox"
                                            name="Check Box4" value="No" id=""> No;</div>
                                    <small class="small_text">Prescription Drug</small>
                                    <div class="d-flex mx-lg-1 small_text"><input class="me-lg-2 me-1" type="checkbox"
                                            name="Check Box5" value="Yes" id=""> Yes</div>
                                    <div class="d-flex mx-lg-1 small_text"><input class="me-lg-4 me-1" type="checkbox"
                                            name="Check Box5" value="No" id=""> No;</div>
                                    <div class="small_text">Life</div>
                                    <div class="d-flex mx-lg-1 small_text"><input class="me-1 me-lg-2" type="checkbox"
                                            name="Check Box6" value="Yes" id=""> Yes</div>
                                    <div class="d-flex mx-lg-1 small_text"><input class="me-lg-4 me-1" type="checkbox"
                                            name="Check Box6" value="No" id=""> No;</div>
                                    <div class="small_text">Disability</div>
                                    <div class="d-flex mx-lg-1 small_text"><input class="me-lg-4 me-1" type="checkbox"
                                            name="Check Box7" value="Yes" id=""> Yes</div>
                                    <div class="d-flex mx-lg-1 small_text"><input class="me-lg-4 me-1" type="checkbox"
                                            name="Check Box7" value="No" id=""> No</div>
                                </div>
                            </div>
                            <div class='d-flex d_sm_block pt-2'>
                                <small class=" me-2">Other (explain)</small> <input type="text"
                                    name="Text22"
                                    class="form-control responsive_input  border-none border-0 border-bottom border-dotted shadow-none "
                                    style="width:820px">
                            </div>
                            <div class="row mt-lg-3">
                                <div class="col-lg-5 small_text">Is Insurance available through Employment/Business?
                                </div>
                                <div class="col-lg-7 d-flex d_sm_block">
                                    <div class="d-flex "><input class="me-2" type="checkbox" name="Check Box8" value="Yes" id=""> Yes</div>
                                    <div class="d-flex mx-lg-5"><input class="me-2" type="checkbox" name="Check Box8" value="No" id=""> No</div>
                                </div>
                            </div>
                            <div class='d-flex pt-2 d_sm_block'>
                                <small class="ms-lg-4 me-lg-2">Explain</small> <input type="text" name="Text23" class="form-control responsive_input border-none border-0 border-bottom border-dotted shadow-none"
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
                                        name="Check Box9" value="Yes" id=""> Yes</div>
                                <div class="d-flex mx-lg-2 "><input type="checkbox" class="me-1"
                                        name="Check Box9" value="No" id=""> No</div>
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
                                                    name="Text24"
                                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                            </div>
                                            <div class="d-flex pt-lg-2"><small>$</small><input type="number"
                                                    min="0" name="Text25"
                                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                            </div>
                                            <div class="d-flex pt-lg-2"><small>$</small><input type="number"
                                                    min="0" name="Text26"
                                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                            </div>
                                            <div class="d-flex pt-lg-2"><small>$</small><input type="number"
                                                    min="0" name="Text27"
                                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="small_text text-center">Joint</div>
                                            <div class="d-flex"><small>$</small><input type="number" min="0"
                                                    name="Text28"
                                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                            </div>
                                            <div class="d-flex pt-lg-2"><small>$</small><input type="number"
                                                    min="0" name="Text29"
                                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                            </div>
                                            <div class="d-flex pt-lg-2"><small>$</small><input type="number"
                                                    min="0" name="Text30"
                                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                            </div>
                                            <div class="d-flex pt-lg-2"><small>$</small><input type="number"
                                                    min="0" name="Text31"
                                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="small_text text-center">Other Party</div>
                                            <div class="d-flex"><small>$</small><input type="number" min="0"
                                                    name="Text32" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                            </div>
                                            <div class="d-flex pt-lg-2"><small>$</small><input type="number"
                                                    min="0" name="Text33" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                            </div>
                                            <div class="d-flex pt-lg-2"><small>$</small><input type="number"
                                                    min="0" name="Text34" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                            </div>
                                            <div class="d-flex pt-lg-2"><small>$</small><input type="number"
                                                    min="0" name="Text35" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
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
                                        name="ckbxReturnsFed" value="Federal Tax Return" id=""> Federal
                                    Tax Return</div>
                                <div class="d-flex  pb_checkbox mx-lg-4"><input class="me-2" type="checkbox"
                                        name="ckbxRetumsState" value="State Tax Return" id="">State Tax
                                    Return</div>
                                <div class="d-flex  pb_checkbox mx-lg-4"><input class="me-2" type="checkbox"
                                        name="ckbxReturnsw2" value="ckbxReturnsw2" id="">W-2</div>
                                <div class="d-flex pb_checkbox  mx-lg-4"><input class="me-2" type="checkbox"
                                        name="ckbxReturnsother" value="Other" id="">Other</div>


                            </div>
                            <div class="text-center py-3">2. Present Earned Income and Expenses</div>

                            <div class="row">
                                <div class="col-lg-9">
                                    <div class="small_text">1. Average gross weekly income (based on last 3 pay periods
                                        – ATTACH pay stubs)</div>
                                    <div class="d-flex d_sm_block" >
                                        <div class="d-flex mx-lg-4"><input class="me-2" type="radio"
                                                name="Check Box11" value="included"
                                                id="">included</div>
                                        <div class="d-flex mx-lg-4"><input class="me-2" type="radio"
                                                name="Check Box11" value="not included" id="">not
                                            included*</div>
                                        <div class="d-flex mx-lg-4"><input class="me-2" type="radio"
                                                name="Check Box11" value="not paid to you"
                                                id="">not paid to you.</div>


                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="row">


                                        <div class="col-lg-6">
                                            <div class="small_text text-center">Yours</div>
                                            <div class="d-flex mt-lg-1"><small>$</small><input type="number"
                                                    min="0" name="Text36"
                                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                            </div>

                                        </div>
                                        <div class="col-lg-6">
                                            <div class="small_text text-center">Other Party (if known) </div>
                                            <div class="d-flex"><small>$</small><input type="number" min="0"
                                                    name="Text39"
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
                                        <div class="d-flex mx-lg-4"><input class="me-2" type="checkbox" name="DeductFed" value="Federal" id="">Federal </div>
                                        <div class="d-flex mx-lg-4"><input class="me-2" type="checkbox" name="DeductState" value="State" id="">State</div>
                                        <div class="d-flex mx-lg-4"><input class="me-2" type="checkbox" name="DeductFica" value="F.I.C.A" id="">F.I.C.A </div>
                                        <div class="d-flex mx-lg-4"><input class="me-2" type="checkbox" name="DeductSul" value="S.U.I" id="">S.U.I</div>
                                        <div class="d-flex mx-lg-4"><input class="me-2" type="checkbox" name="DeductOther" value="Other" id="">Other</div>


                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="row">


                                        <div class="col-lg-6">
                                            <div class="d-flex  "><small>$</small><input type="number"
                                                    min="0" name="Text37"
                                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                            </div>

                                        </div>
                                        <div class="col-lg-6">
                                            <div class="d-flex"><small>$</small><input type="number" min="0"
                                                    name="Text40"
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
                                                        min="0" name="Text38"
                                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                                </div>

                                            </div>
                                            <div class="col-lg-6">
                                                <div class="d-flex"><small>$</small><input type="number"
                                                        min="0" name="Text41"
                                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="small_text text-center py-3">3. Your Current Year-to-Date Earned Income</div>
                                        <div class="d_flex d_sm_block justify-content-end text-end">
                                             <span>Provide Dates: From</span>
                                            <input type="text"  name="Date1" class="border-bottom border-0  responsive_input bg-transparent border outline-none">
                                            <span class="px-lg-3">To</span>
                                            <input type="text"  name="Date2" class="border-bottom border-0  responsive_input bg-transparent border outline-none">
                                        </div>
                                        <div class="row  mt-lg-3">
                                            <div class="col-lg-7 small_text">
                                                <div class=" d-flex d_sm_block small_text">1. GROSS EARNED INCOME: <div
                                                        class="d-flex"><small>$</small><input type="number"
                                                            min="0" name="Text42"
                                                            class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                                    </div>

                                                </div>
                                                <div class=" d-flex d_sm_block small_text">2. TAX DEDUCTIONS: (Number of
                                                    Dependents: <div class="d-flex"><input type="number"
                                                            min="0" name="Text44"
                                                            class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control"
                                                            style="width:80px;">)
                                                    </div>
                                                </div>
                                                <div class="small_text"><span class="me-lg-4">a.</span> Federal Income Taxes</div>
                                                <div class="small_text"><span class="me-lg-4">b.</span> N.J. Income Taxes</div>
                                                <div class="small_text"><span class="me-lg-4">c.</span> Other State  Income Taxes</div>
                                                <div class="small_text"><span class="me-lg-4">d.</span> F.I.C.A.</div>
                                                <div class="small_text"><span class="me-lg-4">e.</span> Medicare</div>
                                                <div class="small_text"><span class="me-lg-4">f.</span> S.U.I. / S.D.I.</div>
                                                <div class="small_text"><span class="me-lg-4">g.</span> Estimated tax  payments in excess of withholding</div>
                                                <div class="small_text d-flex"><span class="me-lg-4">h.</span> <input type="number" min="0" name="TexDeductH"
                                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                                </div>
                                                <div class="small_text d-flex"><span class="me-lg-4">i.</span> <input  type="number" min="0" name="TexDeductI" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                                </div>
                                                <div class="small_text pt-lg-3 text-end"><span  class="text-end">TOTAL</span> </div>
                                            </div>
                                            <div class=" col-lg-4 ">
                                                <div class="d-flex ms-lg-4"><small class="mx-2">Number of
                                                        Weeks</small><input type="number" min="0"
                                                        name="Text43" style="width: 100px"
                                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                                </div>
                                                <div class="d-flex pt-lg-3"><small class="me-lg-3">a. </small><small
                                                        class="ms-2">$</small><input type="number" min="0"
                                                        name="Text46" style="width: 365px"
                                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                                </div>
                                                <div class="d-flex"><small class="me-lg-3">b. </small><small
                                                        class="ms-2">$</small><input type="number" min="0"
                                                        name="Text47" style="width: 365px"
                                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                                </div>
                                                <div class="d-flex"><small class="me-lg-3">c. </small><small
                                                        class="ms-2">$</small><input type="number" min="0"
                                                        name="Text48" style="width: 365px"
                                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                                </div>
                                                <div class="d-flex"><small class="me-lg-3">d. </small><small
                                                        class="ms-2">$</small><input type="number" min="0"
                                                        name="Text49" style="width: 365px"
                                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                                </div>
                                                <div class="d-flex"><small class="me-lg-3">e. </small><small
                                                        class="ms-2">$</small><input type="number" min="0"
                                                        name="Text50" style="width: 365px"
                                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                                </div>
                                                <div class="d-flex"><small class="me-lg-3">f. </small><small
                                                        class="ms-2">$</small><input type="number" min="0"
                                                        name="Text51" style="width: 365px"
                                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                                </div>
                                                <div class="d-flex"><small class="me-lg-3">g. </small><small
                                                        class="ms-2">$</small><input type="number" min="0"
                                                        name="Text52" style="width: 365px"
                                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                                </div>
                                                <div class="d-flex"><small class="me-lg-3">h. </small><small
                                                        class="ms-2">$</small><input type="number" min="0"
                                                        name="Text53" style="width: 365px"
                                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                                </div>
                                                <div class="d-flex"><small class="me-lg-3">i. </small><small
                                                        class="ms-2">$</small><input type="number" min="0"
                                                        name="Text54" style="width: 365px"
                                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                                </div>
                                                <div class="d-flex ms-lg-4"><small class="ms-2">$</small><input
                                                        type="number" min="0" name="Text55"
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
                                    name="Text57" style="width: 365px"
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
                                        type="number" min="0" name="Text58" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                    <div class="ps-5 "> <input class="my-auto" type="checkbox" name="Check Box13"
                                            id=""></div>
                                </div>
                                <div class="d-flex m-0 p-0"><small>b. </small><small class="ms-2">$</small><input
                                        type="number" min="0" name="Text59" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                    <div class="ps-5 "> <input class="my-auto" type="checkbox"
                                            name="Check Box14" id=""></div>
                                </div>
                                <div class="d-flex m-0 p-0"><small>c. </small><small class="ms-2">$</small><input
                                        type="number" min="0" name="Text60" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                    <div class="ps-5 "> <input class="my-auto" type="checkbox" name="Check Box15"
                                            id=""></div>
                                </div>
                                <div class="d-flex m-0 p-0"><small>d. </small><small class="ms-2">$</small><input
                                        type="number" min="0" name="Text61" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                    <div class="ps-5 "> <input class="my-auto" type="checkbox"
                                            name="Check Box16" id=""></div>
                                </div>
                                <div class="d-flex m-0 p-0"><small>e. </small><small class="ms-2">$</small><input
                                        type="number" min="0" name="Text62"
                                        style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                    <div class="ps-5 "> <input class="my-auto" type="checkbox"
                                            name="Check Box18" id=""></div>
                                </div>
                                <div class="d-flex m-0 p-0"><small>f. </small><small class="ms-2">$</small><input
                                        type="number" min="0" name="Text63" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                    <div class="ps-5 "> <input class="my-auto" type="checkbox" name="Check Box19"
                                            id=""></div>
                                </div>
                                <div class="d-flex m-0 p-0 "><small>g. </small><small class="ms-2">$</small><input
                                        type="number" min="0" name="Text64" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                    <div class="ps-5 "> <input class="my-auto" type="checkbox"
                                            name="Check Box20" id=""></div>
                                </div>
                                <div class="d-flex m-0 p-0"><small>h. </small><small class="ms-2">$</small><input
                                        type="number" min="0" name="Text65"
                                        style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                    <div class="ps-5 "> <input class="my-auto" type="checkbox"
                                            name="Check Box21" id=""></div>
                                </div>
                                <div class="d-flex m-0 p-0"><small>i. </small><small class="ms-2">$</small><input
                                        type="number" min="0" name="Text66"
                                        style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                    <div class="ps-5 "> <input class="my-auto" type="checkbox"
                                            name="Check Box22" id=""></div>
                                </div>
                                <div class="d-flex m-0 p-0"><small>j. </small><small class="ms-2">$</small><input
                                        type="number" min="0" name="Text67"
                                        style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                    <div class="ps-5 "> <input class="my-auto" type="checkbox"
                                            name="item4jmand" id=""></div>
                                </div>
                                <div class="d-flex m-0 p-0"><small class="ms-3">$</small><input type="number"
                                        min="0" name="Text68" style="width: 305px"
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
                                        name="Text69" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex"><small>$</small><input type="number" min="0"
                                        name="Text70" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex"><small>$</small><input type="number" min="0"
                                        name="netAvgEarnincomeWk" style="width: 365px"
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
                                <input type="text" min="0" name="Text71"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="Text74"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="Text77"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="Text80"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="Text83"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="Text86"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="Text89"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="Text92"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="Text95"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <p class="mt-2 p-0  ps-lg-3 small_text">TOTAL GROSS UNEARNED INCOME YEAR TO DATE </p>
                            </div>
                            <div class="col-lg-3">
                                <p class="text-center small_text m-0 p-0">How often paid</p>
                                <input type="text" min="0" name="Text72"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="Text75"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="Text78"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="Text81"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="Text84"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="Text87"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="Text90"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="Text93"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="Text96"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">


                            </div>
                            <div class="col-lg-3">
                                <p class="text-center small_text m-0 p-0">Year to date amount</p>
                                <div class="d-flex"><small class="ms-2">$</small><input type="number"
                                        min="0" name="Text73"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex"><small class="ms-2">$</small><input type="number"
                                        min="0" name="Text76"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex"><small class="ms-2">$</small><input type="number"
                                        min="0" name="Text79"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex"><small class="ms-2">$</small><input type="number"
                                        min="0" name="Text82"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex"><small class="ms-2">$</small><input type="number"
                                        min="0" name="Text85"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex"><small class="ms-2">$</small><input type="number"
                                        min="0" name="Text88"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex"><small class="ms-2">$</small><input type="number"
                                        min="0" name="Text91"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex"><small class="ms-2">$</small><input type="number"
                                        min="0" name="Text94"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex"><small class="ms-2">$</small><input type="number"
                                        min="0" name="Text97"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex"><small class="ms-2">$</small><input type="number"
                                        min="0" name="Text98"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                            </div>
                        </div>

                        <h6 class="mt-5 text-center">5. Additional Information: </h6>

                        <div class="row">
                            <div class="d-flex d_sm_block  my-auto pt-3">
                                <p class="small_text p-0 m-0"><span class="me-lg-3">1.</span> How often are you paid?
                                </p>
                                <input type="number" min="0" name="Text99" style="width: 435px"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control ms-3">
                            </div>
                            <div class="d-flex d_sm_block  my-auto pt-3">
                                <p class="small_text p-0 m-0"><span class="me-3">2.</span> What is your annual
                                    salary?
                                </p>
                                <small class="ms-lg-3">$</small><input type="number" min="0"
                                    name="Text100" style="width: 250px"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                            </div>
                            <div class="d-flex my-auto d_sm_block row pt-3">
                                <div class="col-lg-6 small_text">
                                    <div>
                                        <span class="me-3">3.</span>Have you received any raises in the current year? If yes, provide the date and the gross/net amount.
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <input type="number" min="0" name="Text101" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control ">
                                </div>
                                <div class='d-flex col-lg-1 my-auto '>
                                    <input type="checkbox" name="Check Box23" value="Yes" class="border-none border-0 border-bottom border-dotted shadow-none  me-2">Yes
                                </div>
                                <div class="d-flex  col-lg-1 my-auto">

                                    <input type="checkbox" name="Check Box23" value="No"
                                        class="border-none border-0 border-bottom border-dotted shadow-none me-2 ">No
                                </div>
                            </div>
                            <div class="d-flex my-auto d_sm_block pt-3 ">
                                <p class="small_text p-0 m-0"><span class="me-3">4.</span>Do you receive bonuses,
                                    commissions, or other compensation, including distributions, taxable or nontaxable,
                                    in addition to your regular salary?
                                </p>
                                <div class='d-flex col-lg-1 my-auto '>
                                    <input type="checkbox" name="Check Box24" value='Yes'
                                        class="border-none border-0 border-bottom border-dotted shadow-none  me-2">Yes
                                </div>
                                <div class="d-flex  col-lg-1 my-auto">

                                    <input type="checkbox" name="Check Box24" value='No'
                                        class="border-none border-0 border-bottom border-dotted shadow-none me-2 ">No
                                </div>
                            </div>
                            <div class="ms-lg-3 d-flex d_sm_block small_text">If yes, explain:
                                <input type="number" min="0" name="Text102" style="width: 525px"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control ms-lg-3">
                            </div>
                            <div class="d-flex d_sm_block my-auto  pt-3">
                                <p class="small_text p-0 m-0"><span class="me-3">5.</span>Does your employer pay
                                    for or provide you with an automobile (lease or purchase), automobile expenses,
                                    gas, repairs, lodging and other.
                                </p>
                                <div class='d-flex col-lg-1 my-auto '>
                                    <input type="checkbox" name="Check Box25" value="Yes"
                                        class="border-none border-0 border-bottom border-dotted shadow-none  me-2">Yes
                                </div>
                                <div class="d-flex   col-lg-1 my-auto">

                                    <input type="checkbox" name="Check Box25" value="No"
                                        class="border-none border-0 border-bottom border-dotted shadow-none me-2 ">No
                                </div>
                            </div>
                            <div class="ms-lg-3 small_text">If yes, explain:
                                <input type="number" min="0" name="sec5q5" style="width: 625px"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control ms-lg-2">
                            </div>

                            @include('layouts.footer4', ['page' => 4])
                        </div>
                    </div>
                </section>
                <section  class="section_area row page1 bg-white pt-5 p-lg-5 pe-2 pe-lg-5 p-lg-3 m-3 mt-4  pt-lg-5 pt-4"
                    id="fifth_section">
                    <div class="col-lg-10 mx-auto">

                        <div class="row">
                            <div class="col-lg-10  pb-2">
                                <div class="small_text"> 6.Did you receive bonuses, commissions, or other
                                    compensation, including distributions, taxable or nontaxable, in addition to your
                                    regular salary during the current or immediate past 2 calendar years? </div>
                                <div class="small_text">If yes, explain and state the date(s) of receipt and set forth
                                    the gross and net amounts received:</div>
                                    <div class="d-flex d_sm_block"> <input type="text" min="0"
                                            name="sec5a6Detail"
                                            class="border-0 responsive_input bg-transparent border border-bottom outline-none form-control"
                                            style="width:694px">
                                    </div>
                            </div>
                            <div class="col-lg-2">
                                <div class='d-flex   my-auto ps-2 '>
                                    <div>
                                        <input type="radio" name="sec5q6" value="Yes" class="border-none border-0 border-bottom border-dotted shadow-none  me-2">Yes
                                    </div>
                                    <div class="ms-lg-4 ms-2">
                                        <input type="radio" name="sec5q6" value="No" class="border-none border-0 border-bottom border-dotted shadow-none me-2 ">No
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
                                            name="Text103"
                                            class="border-0 responsive_input bg-transparent border border-bottom outline-none form-control"
                                            style="width:694px">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class='d-flex   my-auto ps-2 '>
                                    <div>
                                        <input type="radio" name="sec5q7" value="Yes"
                                            class="border-none border-0 border-bottom border-dotted shadow-none  me-2">Yes
                                    </div>
                                    <div class="ms-lg-4 ms-2">
                                        <input type="radio" name="sec5q7" value="No"
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
                                            name="Text104"
                                            class="border-0  responsive_input  bg-transparent border border-bottom outline-none form-control"
                                            style="width:694px">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class='d-flex   my-auto ps-2 '>
                                    <div>
                                        <input type="checkbox" name="Check Box26" value="Yes"
                                            class="border-none border-0 border-bottom border-dotted shadow-none  me-2">Yes
                                    </div>
                                    <div class="ms-lg-4 ms-2">
                                        <input type="checkbox" name="Check Box26" value="No"
                                            class="border-none border-0 border-bottom border-dotted shadow-none me-2 ">No
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-10 pb-2">
                                <div class="small_text">9. Have you been awarded or granted stock options, restricted
                                    stock or any other non-cash compensation or entitlement during the current or
                                    immediate past calendar year?</div>
                                <div class="small_text">
                                    <div class="d-flex d_sm_block">If yes, explain. <input type="text" min="0"
                                            name="Text105"
                                            class="border-0 responsive_input bg-transparent border border-bottom outline-none form-control"
                                            style="width:694px">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class='d-flex   my-auto ps-2 '>
                                    <div>
                                        <input type="checkbox" name="Check Box27" value="Yes"
                                            class="border-none border-0 border-bottom border-dotted shadow-none  me-2">Yes
                                    </div>
                                    <div class="ms-lg-4 ms-2">
                                        <input type="checkbox" name="Check Box27" value="No"
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
                                        <textarea rows="3" type="text" min="0" name="Text107"
                                            class=" form-control"></textarea>
                                    </div>
                                    {{-- <div class="d-flex">
                                        <input type="text" min="0" name="hyr2"
                                            class="border-0    bg-transparent border border-bottom outline-none form-control">
                                    </div> --}}
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class='d-flex   my-auto ps-2 '>
                                    <div>
                                        <input type="checkbox" name="Check Box28" value="Yes"
                                            class="border-none border-0 border-bottom border-dotted shadow-none  me-2">Yes
                                    </div>
                                    <div class="ms-lg-4">
                                        <input type="checkbox" name="Check Box28" value="No"
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
                                    <input type="text" min="0" name="Text106"
                                        class="border-0    bg-transparent border border-bottom outline-none form-control">

                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class='d-flex   my-auto ps-2 '>
                                    <div>
                                        <input type="checkbox" name="Check Box29" value="Yes"
                                            class="border-none border-0 border-bottom border-dotted shadow-none  me-2">Yes
                                    </div>
                                    <div class="ms-lg-4">
                                        <input type="checkbox" name="Check Box29" value="No"
                                            class="border-none border-0 border-bottom border-dotted shadow-none me-2 ">No
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-10  pb-2">
                                <div class="small_text">
                                    <div class="d-flex">12. List the names of the dependents you claim: <input
                                            type="text" min="0" name="sec5q12_1"
                                            class="border-0    bg-transparent border border-bottom outline-none form-control"
                                            style="width:468px">
                                    </div>
                                    <div class="d-flex"> <input type="text" min="0" name="sec5q12_2"
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
                                        <div class="d-flex">If yes, how much and from or to whom? <input type="text" min="0" name="sec5q13_1"
                                                class="border-0 bg-transparent border border-bottom outline-none form-control" style="width:505px">
                                        </div>
                                        <div class="d-flex"> <input type="text" min="0" name="sec5q13_2" class="border-0 bg-transparent border border-bottom outline-none form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class='d-flex   my-auto ps-2 '>
                                        <div>
                                            <input type="checkbox" name="Check Box30" value="Yes"
                                                class="border-none border-0 border-bottom border-dotted shadow-none  me-2">Yes
                                        </div>
                                        <div class="ms-lg-4">
                                            <input type="checkbox" name="Check Box30" value="No"
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

                                    <div class="d-flex"> <textarea rows="3" type="text" min="0" name="Text110"
                                            class=" form-control"> </textarea>


                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class='d-flex   my-auto ps-2 '>
                                        <div>
                                            <input type="checkbox" name="Check Box31" value="Yes"
                                                class="border-none border-0 border-bottom border-dotted shadow-none  me-2">Yes
                                        </div>
                                        <div class="ms-lg-4">
                                            <input type="checkbox" name="Check Box31" value="No"
                                                class="border-none border-0 border-bottom border-dotted shadow-none me-2 ">No
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-10  pb-2">

                                    <div class="small_text">
                                        <div class="small_text">
                                            <div class="d-flex">15. Is there a wage execution in connection with support? <input type="text"
                                                    min="0" name="sec5al5_1"
                                                    class="border-0    bg-transparent border border-bottom outline-none form-control"
                                                    style="width:382px">
                                            </div>
                                        </div>
                                        <div class="small_text">
                                            <div class="d-flex">If yes, explain. <input type="text"
                                                    min="0" name="sec5al5_2"
                                                    class="border-0 bg-transparent border border-bottom outline-none form-control"
                                                    style="width:671px">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class='d-flex   my-auto ps-2 '>
                                        <div>
                                            <input type="checkbox" name="Check Box32" value="Yes"
                                                class="border-none border-0 border-bottom border-dotted shadow-none  me-2">Yes
                                        </div>
                                        <div class="ms-lg-4">
                                            <input type="checkbox" name="Check Box32" value="No"
                                                class="border-none border-0 border-bottom border-dotted shadow-none me-2 ">No
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-10  pb-2">
                                    {{-- <div class="small_text">16. Does a Safe Deposit Box exist and if so, at which
                                        bank?</div> --}}
                                        <div class="small_text">
                                            <div class="d-flex">16. Does a Safe Deposit Box exist and if so, at which
                                                bank? <input type="text"
                                                    min="0" name="Text108"
                                                    class="border-0 bg-transparent border border-bottom outline-none form-control"
                                                    style="width:371px">
                                            </div>
                                        </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class='d-flex   my-auto ps-2 '>
                                        <div>
                                            <input type="checkbox" name="Check Box33" value="Yes"
                                                class="border-none border-0 border-bottom border-dotted shadow-none  me-2">Yes
                                        </div>
                                        <div class="ms-lg-4">
                                            <input type="checkbox" name="Check Box33" value="No"
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

                                        <input type="text" min="0" name="Text112"
                                            class="border-0 bg-transparent border border-bottom outline-none form-control">
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class='d-flex   my-auto ps-2 '>
                                        <div>
                                            <input type="checkbox" name="sec5q16_1" value="Yes"
                                                class="border-none border-0 border-bottom border-dotted shadow-none  me-2">Yes
                                        </div>
                                        <div class="ms-lg-4">
                                            <input type="checkbox" name="sec5q16_2" value="No"
                                                class="border-none border-0 border-bottom border-dotted shadow-none me-2 ">No
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-10  pb-2">
                                    <div class="small_text">18. Explanation of Income or Other Information:</div>
                                    <div class="d-flex">

                                        <input type="text" min="0" name="Text113"
                                            class="border-0 bg-transparent border border-bottom outline-none form-control">
                                    </div>
                                </div>
                                <div class="col-lg-2">

                                </div>
                            </div>
                            @include('layouts.footer4', ['page' => 5])
                </section>
                <section class="section_area row page1 bg-white pt-5 p-lg-5 pe-2 pe-lg-5 p-lg-3 m-3 mt-4  pt-lg-5 pt-4" id="sixth_section">
                    <div class="col-lg-10 mx-auto">

                        <div class="row mt-lg-3">
                            <div class=" pt-lg-2">Part D - Monthly Expenses (computed at 4.3 wks/mo.)</div>
                            <div class="small_text">Joint Marital or Civil Union Life Style should reflect standard of
                                living established during marriage or civil union. Current expenses should reflect the
                                current life style. Do not repeat those income deductions listed in Part C – 3.</div>

                            <div class="col-lg-7"></div>
                            <div class="col-lg-5 d-flex d_sm_block">
                                <div class="small_text pe-lg-5">
                                    Joint Life Style Family, including <input type="text" name="Text115#0"
                                        class="border-bottom responsive_input border-0 w-25 responsive_input">children
                                </div>
                                <div class="small_text d_sm_block">
                                    Current Life Style Yours and<input type="text" name="Text116#0"
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
                                            <div>........................................................................................................</div>
                                        </div>
                                        <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text"> Heat (if not
                                                furnished)
                                            </span>
                                            <div>...........................................................................</div>
                                        </div>
                                        <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text"> Electric & Gas (if not
                                                furnished) </span>
                                                <div>............................................................</div>
                                        </div>
                                        <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Renter’s
                                                Insurance</span>
                                                <div>.................................................................................</div>
                                        </div>
                                        <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Parking (at Apartment)</span>
                                            <div>.........................................................................</div>
                                        </div>
                                        <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Other charges (Itemize)</span>
                                            <div>.........................................................................</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="d-flex mt-lg-4">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="Text117" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="Text119" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="Text121" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="Text123" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex mt-lg-3">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="Text125" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="Text127" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="d-flex mt-lg-4">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="Text118" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="Text120" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="Text122" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="Text124" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex mt-lg-3">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="Text126" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="Text128" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row pt-lg-4">
                            <div class="col-lg-7 ps-lg-5">
                                <div class="small_text">If Homeowner:</div>
                                <div class="ps-lg-3">
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Mortgage </span>
                                        <div>...................................................................................................</div>
                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text"> Real Estate Taxes (if not
                                            included w/mortgage payment)
                                        </span>
                                        <div>......................</div>
                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Homeowners Ins. (if not
                                            included w/mortgage payment)</span>
                                            <div>.......................</div>
                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Other Mortgages or Home
                                            Equity Loans</span>
                                            <div>.................................................</div>
                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Heat (unless Electric or
                                            Gas)</span>
                                            <div>....................................................................</div>
                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Electric & Gas</span>
                                        <div>...........................................................................................</div>
                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Water & Sewer</span>
                                        <div>.........................................................................................</div>
                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Garbage Removal</span>
                                        <div>.....................................................................................</div>
                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Snow Removal</span>
                                        <div>.........................................................................................</div>
                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Lawn Care</span>
                                        <div>................................................................................................</div>

                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Maintenance/Repairs</span>
                                        <div>................................................................................</div>

                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Condo, Co-op or Association Fees</span>
                                        <div>...........................................................</div>

                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Other Charges (Itemize)</span>
                                        <div>...........................................................................</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">


                                <div class="d-flex mt-lg-4">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="Text129" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="Text131" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="Text133" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex mt-lg-2">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="Text135" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="Text137" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="Text139" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="Text141" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex mt-lg-3">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="Text143" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="Text145" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="Text147" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex mt-lg-2">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="Text149" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="stDAssorFeesin" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex mt-lg-1">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="Text153" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                            </div>
                            <div class="col-lg-2">


                                <div class="d-flex mt-lg-4">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="Text130" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="Text132" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="Text134" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex mt-lg-2">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="Text136" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="Text138" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="Text140" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="Text142" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex mt-lg-3">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="Text144" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="Text146" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="Text148" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex mt-lg-2">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="Text150" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="stDAssorFeesC" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex mt-lg-1">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="Text154" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row pt-lg-4">
                            <div class="col-lg-7 ps-lg-5">
                                <div class="small_text">Tenant or Homeowner:</div>
                                <div class="ps-lg-3">
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Telephone </span>
                                        <div>.................................................................................................</div>
                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text"> Mobile/Cellular
                                            Telephone</span>
                                            <div>.......................................................................</div>
                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Service Contracts on
                                            Equipment</span>
                                            <div>.............................................................</div>
                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Cable TV</span>
                                        <div>..................................................................................................</div>
                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Plumber/Electrician</span>
                                        <div>..................................................................................</div>
                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Equipment & Furnishings</span>
                                            <div>.........................................................................</div>
                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Internet Charges</span>
                                        <div>.......................................................................................</div>
                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Home Security System</span>
                                        <div>.............................................................................</div>
                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Other (itemize)</span>
                                        <div>..........................................................................................</div>
                                    </div>
                                    <div class="text-end pt-2"><span class="pe-lg-4 small_text">TOTAL</span>  </div>

                                </div>
                            </div>
                            <div class="col-lg-3 pt-lg-4">
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="Text155" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="Text157" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>

                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="Text159" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="Text161" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex mt-lg-2">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="Text163" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="Text165" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex mt-lg-2" >
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="Text167" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="PtDHomeSec5v" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex  mt-lg-2">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="Text169" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex  mt-lg-3">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="Text171" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                            </div>
                            <div class="col-lg-2 pt-lg-4">
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="Text156" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="Text158" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>

                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="Text160" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="Text162" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex mt-lg-2">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="Text164" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="Text166" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex mt-lg-2" >
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="Text168" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="PotDHomeSec5va" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex  mt-lg-2">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="Text170" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex  mt-lg-3">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="Text172" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                            </div>
                        </div>

                        <div class="row pt-lg-4">
                            <div class="small_text">SCHEDULE B: TRANSPORTATION</div>
                            <div class="col-lg-7 ps-lg-5">
                                <div class="ps-lg-3">
                                    <div class="d-flex d_sm_block"><span class="pe-lg-3 small_text">Auto Payment </span>
                                       <div>.............................................................................................</div>

                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text"> Auto Insurance (number of vehicles: <input type="text" name="" class="border-0 border-bottom"  style="width:30px" id=""> )</span>
                                        <div>.............................................</div>

                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Registration,
                                            License</span>
                                            <div>................................................................................</div>

                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Maintenance</span>
                                        <div>.............................................................................................</div>

                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Fuel and Oil</span>
                                        <div>..............................................................................................</div>
                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Commuting Expenses</span>
                                        <div>..............................................................................</div>

                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Other Charges (Itemize)</span>
                                            <div>...........................................................................</div>


                                    </div>
                                    <div class="text-end pt-2"><span class="pe-lg-4 small_text">TOTAL</span></div>


                                </div>
                            </div>
                            <div class="col-lg-3 pt-lg-1">


                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="Text173" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="Text175" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="Text177" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="Text179" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="Text181" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex mt-lg-3">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="Text183" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="Text185" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex mt-lg-3">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="Text187" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                            </div>
                            <div class="col-lg-2 pt-lg-1">


                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="Text174" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="Text176" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="Text178" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="Text180" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="Text182" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex mt-lg-3">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="Text184" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="Text186" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex mt-lg-3">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="Text188" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                            </div>
                            @include('layouts.footer4', ['page' => 6])

                        </div>
                    </div>

                </section>
                <section class="section_area row page1 bg-white pt-5 p-lg-5 pe-2 pe-lg-5 p-lg-3 m-3 mt-4  pt-lg-5 pt-4"
                    id="seventh_section">
                    <div class="col-lg-10 mx-auto">
                        <div class="row mt-lg-3">
                            <div class="col-lg-7">
                                <div class="small_text">SCHEDULE C: PERSONAL</div>
                            </div>
                            <div class="col-lg-5 d-flex d_sm_block">
                                <div class="small_text pe-lg-5">
                                    Joint Life Style Family, including <input type="text" name="Text115" class="responsive_input border-bottom border-0 w-25">children
                                </div>
                                <div class="small_text d_sm_block"> Current Life Style Yours and<input type="text" name="Text116" class="responsive_input border-bottom border-0 w-25">children </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-7 ps-lg-5">
                                <div class="ps-lg-3">
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Food at Home & household supplies</span>
                                         <div>.......................................................</div>
                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text"> Prescription Drugs</span>
                                        <div>....................................................................................</div>

                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Non-prescription drugs,
                                            cosmetics, toiletries & sundries</span>
                                            <div>........................</div>

                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">School Lunch </span>
                                        <div>............................................................................................</div>

                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Restaurants</span>
                                        <div>...............................................................................................</div>

                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Clothing</span>
                                        <div>...................................................................................................</div>

                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Dry Cleaning, Commercial
                                            Laundry</span>
                                            <div>........................................................</div>

                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Hair Care</span>
                                        <div>..................................................................................................</div>

                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Domestic Help</span>
                                        <div>.........................................................................................</div>

                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Medical (exclusive of psychiatric)*</span>
                                        <div>..........................................................</div>

                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Eye Care*</span>
                                        <div>.................................................................................................</div>

                                    </div>
                                    <div class="d-flex d_sm_block"><span
                                            class="pe-lg-4 small_text">Psychiatric/psychological/counseling*</span>
                                            <div>....................................................</div>

                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Dental (exclusive of
                                            Orthodontic*</span>
                                            <div>..........................................................</div>

                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Orthodontic* </span>
                                        <div>............................................................................................</div>

                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Medical Insurance
                                            (hospital, etc.)*</span>
                                            <div>..........................................................</div>

                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Club Dues and Memberships
                                        </span>
                                        <div>..................................................................</div>

                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Sports and Hobbies </span>
                                        <div>.................................................................................</div>

                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Camps</span>
                                        <div>......................................................................................................</div>

                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Vacations </span>
                                        <div>.................................................................................................</div>

                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Children’s Private School
                                            Costs </span>
                                            <div>..............................................................</div>

                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Parent’s Educational
                                            Costs</span>
                                            <div>......................................................................</div>

                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Children’s Lessons
                                            (dancing, music, sports, etc.)</span>
                                            <div>....................................</div>

                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Babysitting</span>
                                        <div>...............................................................................................</div>

                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Day-Care Expenses</span>
                                        <div>.................................................................................</div>

                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Entertainment </span>
                                        <div>..........................................................................................</div>

                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Alcohol and Tobacco </span>
                                        <div>...............................................................................</div>

                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Newspapers and Periodicals
                                        </span>
                                        <div>...................................................................</div>

                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Gifts</span>
                                        <div>.........................................................................................................</div>

                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Contributions</span>
                                        <div>...........................................................................................</div>

                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Payments to Non-Child
                                            Dependents </span>
                                            <div>......................................................</div>

                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Prior Existing Support
                                            Obligations this family/other families </span>

                                    </div>
                                    <div class="d-flex d_sm_block justify-content-between"><span class="pe-lg-4 small_text">
                                            (specify)</span>
                                            <div>....................</div>

                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Tax Reserve (not listed
                                            elsewhere)</span>
                                            <div>.........................................................</div>

                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Life Insurance</span>
                                        <div>...........................................................................................</div>

                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Savings/Investment</span>
                                        <div>.................................................................................</div>

                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Debt Service (from page 7)
                                            (not listed elsewhere)</span>
                                            <div>.................................</div>

                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Parenting Time
                                            Expenses</span>
                                            <div>........................................................................</div>
                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Professional Expenses
                                            (other than this proceeding)</span>
                                            <div>..............................</div>

                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Pet Care and
                                            Expenses</span>
                                            <div>...........................................................................</div>

                                    </div>
                                    <div class="d-flex d_sm_block"><span class="pe-lg-4 small_text">Other (specify)</span>
                                        <div>..........................................................................................</div>

                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="d-flex mt-lg-1">
                                    <small class="ms-2">$</small><input type="number" min="0" name="Text191" style="width: 365px" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0" name="Text193" style="width: 365px" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0" name="Text195" style="width: 365px" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0" name="Text197" style="width: 365px" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex mt-lg-2">
                                    <small class="ms-2">$</small><input type="number" min="0" name="Text199" style="width: 365px" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0" name="Text201" style="width: 365px" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0" name="Text203" style="width: 365px" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex mt-lg-2">
                                    <small class="ms-2">$</small><input type="number" min="0" name="Text205" style="width: 365px" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0" name="Text207" style="width: 365px" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0" name="Text209" style="width: 365px" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex mt-lg-2">
                                    <small class="ms-2">$</small><input type="number" min="0" name="Text211" style="width: 365px" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0" name="Text213" style="width: 365px" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0" name="Text215" style="width: 365px" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex mt-lg-3">
                                    <small class="ms-2">$</small><input type="number" min="0" name="Text217" style="width: 365px" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0" name="Text219" style="width: 365px" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0" name="Text221" style="width: 365px" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex  mt-lg-3">
                                    <small class="ms-2">$</small><input type="number" min="0" name="Text223" style="width: 365px" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0" name="Text225" style="width: 365px" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>

                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0" name="Text227" style="width: 365px" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0" name="Text229" style="width: 365px" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex mt-lg-3">
                                    <small class="ms-2">$</small><input type="number" min="0" name="Text231" style="width: 365px" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0" name="Text233" style="width: 365px" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0" name="Text235" style="width: 365px" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex  mt-lg-2">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="Text237" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="Text239" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="Text241" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex  mt-lg-3">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="Text243" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="Text245" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="Text247" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex mt-lg-1">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="Text249" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex mt-lg-4">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="Text251" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="Text253" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="Text255" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex  mt-lg-2">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="Text257" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="Text259" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex ">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="Text261" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex  mt-lg-3">
                                    <small class="ms-2">$</small><input type="number" min="0" name="Text263" style="width: 365px" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0" name="ptDpetCareint" style="width: 365px" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex mt-lg-1">
                                    <small class="ms-2">$</small><input type="number" min="0" name="Text265" style="width: 365px" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                            </div>



                            <div class="col-lg-2">
                                <div class="d-flex mt-lg-1">
                                    <small class="ms-2">$</small><input type="number" min="0" name="Text192" style="width: 365px" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0" name="Text194" style="width: 365px" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0" name="Text196" style="width: 365px" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0" name="Text198" style="width: 365px" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex mt-lg-2">
                                    <small class="ms-2">$</small><input type="number" min="0" name="Text200" style="width: 365px" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0" name="Text202" style="width: 365px" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0" name="Text204" style="width: 365px" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex mt-lg-2">
                                    <small class="ms-2">$</small><input type="number" min="0" name="Text206" style="width: 365px" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0" name="Text208" style="width: 365px" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0" name="Text210" style="width: 365px" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex mt-lg-2">
                                    <small class="ms-2">$</small><input type="number" min="0" name="Text212" style="width: 365px" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0" name="Text214" style="width: 365px" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0" name="Text216" style="width: 365px" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex mt-lg-3">
                                    <small class="ms-2">$</small><input type="number" min="0" name="Text218" style="width: 365px" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0" name="Text220" style="width: 365px" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0" name="Text222" style="width: 365px" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex  mt-lg-3">
                                    <small class="ms-2">$</small><input type="number" min="0" name="Text224" style="width: 365px" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0" name="Text226" style="width: 365px" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>

                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0" name="Text228" style="width: 365px" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0" name="Text230" style="width: 365px" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex mt-lg-3">
                                    <small class="ms-2">$</small><input type="number" min="0" name="Text232" style="width: 365px" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0" name="Text234" style="width: 365px" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0" name="Text236" style="width: 365px" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex  mt-lg-2">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="Text238" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="Text240" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="Text242" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex  mt-lg-3">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="Text244" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="Text246" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="Text248" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex mt-lg-1">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="Text250" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex mt-lg-4">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="Text252" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="Text254" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="Text256" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex  mt-lg-2">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="Text258" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="Text260" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex ">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="Text262" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex  mt-lg-3">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="Text264" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="ptDPetCareCurr" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex mt-lg-1">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="Text266" style="width: 365px"
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
                                    <input type="number" min="0" name="Text267"
                                        style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                            </div>
                            <div class="col-lg-2  ">
                                <div class="d-flex">
                                    <small class="ms-2">$</small>
                                    <input type="number" min="0" name="Text268"
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
                                        <div>.................................................................................</div>
                                    </div>
                                    <div class="d-flex"><span class="pe-lg-4 small_text">Schedule B:
                                            Transportation</span>
                                            <div>.....................................................................</div>

                                    </div>
                                    <div class="d-flex"><span class="pe-lg-4 small_text">Schedule C: Personal</span>
                                        <div>...............................................................................</div>

                                    </div>
                                    <div class="d-flex mt-lg-1"><span class="pe-lg-4 small_text">Grand Totals</span>
                                        <div>.............................................................................................</div>

                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-3">


                                <div class="d-flex mt-lg-1">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="scedATortFam" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>



                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="scedBTortFam" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="scedCTortFam" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex mt-lg-1">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="Text275" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>

                            </div>
                            <div class="col-lg-2">
                                <div class="d-flex mt-lg-1">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="scedATotCurr" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>


                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="scedBTotCurr" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="scedCTotCurr" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex mt-lg-1">
                                    <small class="ms-2">$</small><input type="number" min="0"
                                        name="Text275" style="width: 365px"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                </div>
                            </div>
                        </div>
                        @include('layouts.footer4', ['page' => 7])

                    </div>
                </section>
                <section class="section_area row page1 bg-white pt-5 p-lg-5 pe-2 pe-lg-5 p-lg-3 m-3 mt-4  pt-lg-5 pt-4"
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
                                <input type="number" min="0" name="Property1" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="Property2" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                            </div>
                            <div class="col-lg-1">
                                <input type="number" min="0" name="Property1Title"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="Property2Title"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                            </div>
                            <div class="col-lg-3">
                                <input type="number" min="0" name="Property1Desc"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="Property2Desc"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                            </div>
                            <div class="col-lg-2">
                                <div class="d-flex">
                                    <input type="text" min="0" name="Property1Value"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                    <input type="checkbox" name="Property2Value" id=""
                                        class="mt-2">
                                </div>
                                <div class="d-flex">
                                    <input type="text" min="0" name="Property1exempt"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                    <input type="checkbox" name="Property2exempt" id=""
                                        class="mt-2">
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <input type="number" min="0" name="Property1EvalDt" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="PropertyI2EvalDt" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                            </div>
                        </div>

                        {{-- 2  --}}
                        <div class="row">
                            <div class="small_text">2. Bank Accounts, CD’s (identify institution and type of
                                account(s))</div>
                            <div class="col-lg-4">
                                <input type="number" min="0" name="BankAcct1" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="BankAcct2" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="BankAcct3" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="BankAcct4" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                            </div>
                            <div class="col-lg-1">
                                <input type="number" min="0" name="BankAcct1Title" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="BankAcct2Title" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="BankAcct3Title" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="BankAcct4Title" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                            </div>
                            <div class="col-lg-3">
                                <input type="number" min="0" name="BankAcct1Desc" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="BankAcct2Desc" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="BankAcct3Desc" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="BankAcct4Desc" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                            </div>
                            <div class="col-lg-2">
                                <div class="d-flex"> <input type="text" min="0" name="BankAcct1Value" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                    <input type="checkbox" name="BankAcct1exempt" value="True" id="" class="mt-2">
                                </div>
                                <div class="d-flex"> <input type="text" min="0" name="BankAcct2Value" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                    <input type="checkbox" name="BankAcct2exempt" value="True" id="" class="mt-2">
                                </div>
                                <div class="d-flex"> <input type="text" min="0" name="BankAcct3Value" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                    <input type="checkbox" name="BankAcct3exempt" value="True" id="" class="mt-2">
                                </div>
                                <div class="d-flex"> <input type="text" min="0" name="BankAcct4Value" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                    <input type="checkbox" name="BankAcct4exempt" value="True" id="" class="mt-2">
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <input type="number" min="0" name="BankAcct1EvalDt" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="BankAcct2EvalDt" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="BankAcct3EvalDt" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="BankAcct4EvalDt" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                            </div>
                        </div>


                        {{-- 3 --}}
                        <div class="row">
                            <div class="small_text">3. Vehicles</div>
                            <div class="col-lg-4">
                                <input type="number" min="0" name="Vehicles1" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="Vehicles2" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                            </div>
                            <div class="col-lg-1">
                                <input type="number" min="0" name="Vehicles1Title" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="Vehicles2Title" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">


                            </div>
                            <div class="col-lg-3">

                                <input type="number" min="0" name="Vehicles1Desc" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="Vehicles2Desc" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">

                            </div>
                            <div class="col-lg-2">
                                <div class="d-flex">
                                    <input type="text" min="0" name="Vehicles1Value" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                    <input type="checkbox" name="Vehicles1exempt" id="" value="True" class="mt-2">
                                </div>
                                <div class="d-flex">
                                    <input type="text" min="0" name="Vehicles2Value" class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">
                                    <input type="checkbox" name="Vehicles2exempt" id="" value="True" class="mt-2">
                                </div>

                            </div>
                            <div class="col-lg-2">
                                <input type="number" min="0" name="Vehicles1EvalDt" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="Vehicles2EvalDt" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                            </div>
                        </div>

                        {{-- 4  --}}
                        <div class="row">
                            <div class="small_text">4. Tangible Personal Property</div>
                            <div class="col-lg-4">
                                <input type="number" min="0" name="TangProp1" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="TangProp2" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="TangProp3" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="TangProp4" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                            </div>
                            <div class="col-lg-1">
                                <input type="number" min="0" name="TangProp1Title" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="TangProp2Title" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="TangProp3Title" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="TangProp4Title" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                            </div>
                            <div class="col-lg-3">
                                <input type="number" min="0" name="TangProp1Desc" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="TangProp2Desc" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="TangProp3Desc" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="TangProp4Desc" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                            </div>
                            <div class="col-lg-2">
                                <div class="d-flex">
                                    <input type="text" min="0" name="TangProp1Value" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                    <input type="checkbox" name="TangProp1exempt" value="True" id="" class="mt-2">
                                </div>
                                <div class="d-flex">
                                    <input type="text" min="0" name="TangProp2Value" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                    <input type="checkbox" name="TangProp2exempt" value="True" id="" class="mt-2">
                                </div>
                                <div class="d-flex">
                                    <input type="text" min="0" name="TangProp3Value" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                    <input type="checkbox" name="TangProp3exempt" value="True" id="" class="mt-2">
                                </div>
                                <div class="d-flex">
                                    <input type="text" min="0" name="TangProp4Value" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                    <input type="checkbox" name="TangProp4exempt" value="True" id="" class="mt-2">
                                </div>

                            </div>
                            <div class="col-lg-2">
                                <input type="number" min="0" name="TangProp1EvalDt" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="TangProp2EvalDt" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="TangProp3EvalDt" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="TangProp4EvalDt" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                            </div>
                        </div>


                        {{-- 5 --}}

                        <div class="row">
                            <div class="small_text">5. Stocks, Bonds and Securities (identify institution and type of
                                account(s))</div>
                            <div class="col-lg-4">
                                <input type="number" min="0" name="Stocks1" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="Stocks2" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="Stocks3" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="Stocks4" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                            </div>
                            <div class="col-lg-1">
                                <input type="number" min="0" name="Stocks1Title"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="Stocks2Title"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="Stocks3Title"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="Stocks4Title"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">


                            </div>
                            <div class="col-lg-3">

                                <input type="number" min="0" name="Stocks1Desc"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="Stocks2Desc"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="Stocks3Desc"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="Stocks4Desc"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">

                            </div>
                            <div class="col-lg-2">
                                <div class="d-flex">
                                    <input type="text" min="0" name="Stocks1Value"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                    <input type="checkbox" name="Stocks1exempt" value="True" id=""
                                        class="mt-2">
                                </div>
                                <div class="d-flex">
                                    <input type="text" min="0" name="Stocks2Value"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                    <input type="checkbox" name="Stocks2exempt" value="True" id=""
                                        class="mt-2">
                                </div>
                                <div class="d-flex">
                                    <input type="text" min="0" name="Stocks3Value"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                    <input type="checkbox" name="Stocks3exempt" value="True" id=""
                                        class="mt-2">
                                </div>
                                <div class="d-flex">
                                    <input type="text" min="0" name="Stocks4Value"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                    <input type="checkbox" name="Stocks4exempt" value="True" id=""
                                        class="mt-2">
                                </div>

                            </div>
                            <div class="col-lg-2">
                                <input type="number" min="0" name="TangProp1EvalDt" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="TangProp2EvalDt" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="TangProp3EvalDt" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="TangProp4EvalDt" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">


                            </div>
                        </div>


                        {{-- 6 --}}

                        <div class="row">
                            <div class="small_text">6. Pension, Profit Sharing, Retirement Plan(s), 40l(k)s, etc.
                                (identify each institution or employer)</div>
                            <div class="col-lg-4">
                                <input type="number" min="0" name="Pension1"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="Pension2"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                            </div>
                            <div class="col-lg-1">
                                <input type="number" min="0" name="Pension1Title"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="Pension2Title"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">


                            </div>
                            <div class="col-lg-3">

                                <input type="number" min="0" name="Pension1Desc"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="Pension2Desc"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">

                            </div>
                            <div class="col-lg-2">
                                <div class="d-flex">
                                    <input type="text" min="0" name="Pension1Value"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                    <input type="checkbox" name="Pension1exempt" id=""
                                        value="True" class="mt-2">
                                </div>
                                <div class="d-flex">
                                    <input type="text" min="0" name="Pension2Value"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                    <input type="checkbox" name="Pension2exempt" id=""value="True"
                                        class="mt-2">
                                </div>

                            </div>
                            <div class="col-lg-2">
                                <input type="number" min="0" name="Pension1EvalDt"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="Pension2EvalDt"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                            </div>
                        </div>

                        {{-- 7 --}}


                        <div class="row">
                            <div class="small_text">7. IRAs</div>
                            <div class="col-lg-4">
                                <input type="number" min="0" name="Ira1"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="Ira2"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="Ira3"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                            </div>
                            <div class="col-lg-1">
                                <input type="number" min="0" name="Ira1Title"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="Ira2Title"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="Ira3Title"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">


                            </div>
                            <div class="col-lg-3">

                                <input type="number" min="0" name="Ira1Desc"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="Ira2Desc"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="Ira3Desc"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">

                            </div>
                            <div class="col-lg-2">
                                <div class="d-flex">
                                    <input type="text" min="0" name="Ira1Value" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                    <input type="checkbox" name="Ira1exempt" value="True" id="" class="mt-2">
                                </div>
                                <div class="d-flex">
                                    <input type="text" min="0" name="Ira2Value" class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">
                                    <input type="checkbox" name="Ira2exempt" value="True" id="" class="mt-2">
                                </div>
                                <div class="d-flex">
                                    <input type="text" min="0" name="Ira3Value" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                    <input type="checkbox" name="Ira3exempt" value="True" id="" class="mt-2">
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <input type="number" min="0" name="Ira1EvalDt"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="Ira2EvalDt"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="Ira3EvalDt"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                            </div>
                        </div>
                        {{-- 8 --}}


                        <div class="row">
                            <div class="small_text">8. Businesses, Partnerships, Professional Practices</div>
                            <div class="col-lg-4">
                                <input type="number" min="0" name="Partner1"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="Partner2"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="Partner3"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                            </div>
                            <div class="col-lg-1">
                                <input type="number" min="0" name="Partner1Title"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="Partner2Title"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="Partner3Title"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">


                            </div>
                            <div class="col-lg-3">

                                <input type="number" min="0" name="Partner1Desc"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="Partner2Desc"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="Partner3Desc"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">

                            </div>
                            <div class="col-lg-2">
                                <div class="d-flex">
                                    <input type="text" min="0" name="Partner1Value"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control"><input
                                        type="checkbox" name="Ira1exempt" value="True" id="" class="mt-2">
                                </div>
                                <div class="d-flex">
                                    <input type="text" min="0" name="Partner2Value"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control"><input
                                        type="checkbox" name="Ira2exempt" value="True" id="" class="mt-2">
                                </div>
                                <div class="d-flex">
                                    <input type="text" min="0" name="Partner3Value"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control"><input
                                        type="checkbox" name="Ira3exempt" value="True" id="" class="mt-2">
                                </div>

                            </div>
                            <div class="col-lg-2">
                                <input type="number" min="0" name="Partner1EvalDt" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="Partner2EvalDt" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="Partner3EvalDt" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                            </div>
                        </div>
                        {{-- 9 --}}
                        <div class="row">
                            <div class="small_text">9. Life Insurance (cash surrender value)</div>
                            <div class="col-lg-4">
                                <input type="number" min="0" name="Lifeins1"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="Lifeins2"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                            </div>
                            <div class="col-lg-1">
                                <input type="number" min="0" name="Lifeins1Title"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="Lifeins2Title"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">


                            </div>
                            <div class="col-lg-3">

                                <input type="number" min="0" name="Lifeins1Desc"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="Lifeins2Desc"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">

                            </div>
                            <div class="col-lg-2">
                                <div class="d-flex">
                                    <input type="text" min="0" name="Lifeins1Value"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control"><input
                                        type="checkbox" name="Lifeins1exempt" id="" class="mt-2">
                                </div>
                                <div class="d-flex">
                                    <input type="text" min="0" name="Lifeins2Value"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control"><input
                                        type="checkbox" name="Lifeins2exempt" id="" class="mt-2">
                                </div>

                            </div>
                            <div class="col-lg-2">
                                <input type="number" min="0" name="Lifeins1EvalDt" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="Lifeins2EvalDt" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                            </div>
                        </div>
                        {{-- 10 --}}

                        <div class="row">
                            <div class="small_text">10. Loans Receivable</div>
                            <div class="col-lg-4">
                                <input type="number" min="0" name="Loans1"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="Loans2"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                            </div>
                            <div class="col-lg-1">
                                <input type="number" min="0" name="Loans1Title"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="Loans2Title"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                            </div>
                            <div class="col-lg-3">
                                <input type="number" min="0" name="Loans1Desc" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="Loans2Desc" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                            </div>
                            <div class="col-lg-2">
                                <div class="d-flex">
                                    <input type="text" min="0" name="Loans1Value" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control"><input type="checkbox" name="Loans1exempt" id="" class="mt-2">
                                </div>
                                <div class="d-flex">
                                    <input type="text" min="0" name="Loans2Value" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control"><input type="checkbox" name="Loans2exempt" id="" class="mt-2">
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <input type="number" min="0" name="Loans1EvalDt" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="Loans2EvalDt" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                            </div>
                        </div>
                        {{-- 11 --}}

                        <div class="row">
                            <div class="small_text">11. Other (specify)</div>
                            <div class="col-lg-4">
                                <input type="number" min="0" name="Other1"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="Other2"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                            </div>
                            <div class="col-lg-1">
                                <input type="number" min="0" name="Other1Title"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="Other2Title"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">


                            </div>
                            <div class="col-lg-3">

                                <input type="number" min="0" name="Other1Desc"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="Other2Desc"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">

                            </div>
                            <div class="col-lg-2">
                                <div class="d-flex">
                                    <input type="text" min="0" name="Other1Value"
                                        class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control"><input
                                        type="checkbox" name="Other1exempt" value="True" id=""
                                        class="mt-2">
                                </div>
                                <div class="d-flex">
                                    <input type="text" min="0" name="Other2Value"
                                        class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control"><input
                                        type="checkbox" name="Other2exempt" value="True" id=""
                                        class="mt-2">
                                </div>

                            </div>
                            <div class="col-lg-2">
                                <input type="number" min="0" name="Other1EvalDt"
                                    class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="Other2EvalDt"
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
                                <div class="d-flex">$<input type="number" min="0" name="TotalAssets"
                                        class="border-0  responsive_input border-bottom bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">$<input type="number" min="0" name="EqDist"
                                        class="border-0  responsive_input border-bottom bg-transparent border outline-none form-control">
                                </div>
                                <div class="d-flex">$<input type="number" min="0" name="NoneEqDist"
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
                <section class="section_area row page1 bg-white pt-5 p-lg-5 pe-2 pe-lg-5 p-lg-3 m-3 mt-4  pt-lg-5 pt-4"
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
                                <input type="text" min="0" name="Mort1" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="Mort2" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="Mort3" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="Mort4" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                            </div>
                            <div class="col-lg-1">
                                <input type="text" min="0" name="Mort1Title" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="Mort2Title" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="Mort3Title" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="Mort4Title" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">


                            </div>
                            <div class="col-lg-3">
                                <input type="text" min="0" name="Mort1Desc" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="Mort2Desc" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="Mort3Desc" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="Mort4Desc" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                            </div>
                            <div class="col-lg-2">
                                <input type="number" min="0" name="Mort1MoPay" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="Mort2MoPay" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="Mort3MoPay" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="Mort4MoPay" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                            </div>
                            <div class="col-lg-2">
                                <input type="number" min="0" name="Mort1TotalOwe" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="Mort2TotalOwe" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="Mort3TotalOwe" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="Mort4TotalOwe" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                            </div>
                            <div class="col-lg-1">
                                <input type="date" min="0" name="Mort1Dt" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="date" min="0" name="Mort2Dt" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="date" min="0" name="Mort3Dt" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="date" min="0" name="Mort4Dt" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                            </div>
                        </div>

                        {{-- 2  --}}
                        <div class="row">
                            <div class="small_text">2. Other Long Term Debts</div>
                            <div class="col-lg-3">
                                <input type="text" min="0" name="LongTerm1" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="LongTerm2" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="LongTerm3" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="LongTerm4" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                            </div>
                            <div class="col-lg-1">
                                <input type="text" min="0" name="LongTerm1Title" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="LongTerm2Title" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="LongTerm3Title" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="LongTerm4Title" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">


                            </div>
                            <div class="col-lg-3">
                                <input type="text" min="0" name="LongTerm1Desc" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="LongTerm2Desc" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="LongTerm3Desc" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="LongTerm4Desc" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                            </div>
                            <div class="col-lg-2">
                                <input type="number" min="0" name="LongTerm1MoPay" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="LongTerm2MoPay" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="LongTerm3MoPay" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="LongTerm4MoPay" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                            </div>
                            <div class="col-lg-2">
                                <input type="number" min="0" name="LongTerm1TotalOwe" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="LongTerm2TotalOwe" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="LongTerm3TotalOwe" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="LongTerm4TotalOwe" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                            </div>
                            <div class="col-lg-1">
                                <input type="date" min="0" name="LongTerm1Dt" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="date" min="0" name="LongTerm2Dt" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="date" min="0" name="LongTerm3Dt" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="date" min="0" name="LongTerm4Dt" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                            </div>
                        </div>


                        {{-- 3 --}}
                        <div class="row">
                            <div class="small_text">3. Revolving Charges</div>
                            <div class="col-lg-3">
                                <input type="text" min="0" name="Chargest1" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="Chargest2" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="Chargest3" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="Chargest4" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="Chargest5" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="Chargest6" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="Chargest7" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="Chargest8" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="Chargest9" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="Chargest10" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="Chargest11" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                            </div>
                            <div class="col-lg-1">
                                <input type="text" min="0" name="Charges1Title" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="Charges2Title" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="Charges3Title" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="Charges4Title" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="Charges5Title" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="Charges6Title" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="Charges7Title" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="Charges8Title" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="Charges9Title" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="Charges10Title" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="Charges11Title" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">


                            </div>
                            <div class="col-lg-3">

                                <input type="text" min="0" name="Charges1Desc" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="Charges2Desc" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="Charges3Desc" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="Charges4Desc" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="Charges5Desc" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="Charges6Desc" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="Charges7Desc" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="Charges8Desc" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="Charges9Desc" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="Charges10Desc" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="Charges11Desc" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">

                            </div>
                            <div class="col-lg-2">
                                <input type="number" min="0" name="Charges1MoPay" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="Charges2MoPay" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="Charges3MoPay" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="Charges4MoPay" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="Charges5MoPay" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="Charges6MoPay" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="Charges7MoPay" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="Charges8MoPay" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="Charges9MoPay" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="Charges10MoPay" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="Charges11MoPay" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                            </div>
                            <div class="col-lg-2">
                                <input type="number" min="0" name="Charges1TotalOwe" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="Charges2TotalOwe" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="Charges3TotalOwe" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="Charges4TotalOwe" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="Charges5TotalOwe" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="Charges6TotalOwe" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="Charges7TotalOwe" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="Charges8TotalOwe" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="Charges9TotalOwe" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="Charges10TotalOwe" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="Charges11TotalOwe" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                            </div>
                            <div class="col-lg-1">
                                <input type="date" min="0" name="Charges1Dt" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="date" min="0" name="Charges2Dt" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="date" min="0" name="Charges3Dt" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="date" min="0" name="Charges4Dt" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="date" min="0" name="Charges5Dt" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="date" min="0" name="Charges6Dt" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="date" min="0" name="Charges7Dt" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="date" min="0" name="Charges8Dt" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="date" min="0" name="Charges9Dt" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="date" min="0" name="Charges10Dt" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="date" min="0" name="Charges11Dt" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                            </div>
                        </div>

                        {{-- 4  --}}
                        <div class="row">
                            <div class="small_text">4. Other Short Term Debts</div>
                            <div class="col-lg-3">
                                <input type="text" min="0" name="ShortTerm1" class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="ShortTerm2" class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="ShortTerm3" class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="ShortTerm4" class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">
                            </div>
                            <div class="col-lg-1">
                                <input type="text" min="0" name="ShorTerm1Title" class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="ShorTerm2Title" class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="ShorTerm3Title" class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="ShorTerm4Title" class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">
                            </div>
                            <div class="col-lg-3">

                                <input type="text" min="0" name="ShortTerm1Desc" class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="ShortTerm2Desc" class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="ShortTerm3Desc" class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="ShortTerm4Desc" class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">

                            </div>
                            <div class="col-lg-2">
                                <input type="number" min="0" name="ShortTerm1MoPay" class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="ShortTerm2MoPay" class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="ShortTerm3MoPay" class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="ShortTerm4MoPay" class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">

                            </div>
                            <div class="col-lg-2">
                                <input type="number" min="0" name="ShortTerm1TotalOwe" class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="ShortTerm2TotalOwe" class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="ShortTerm3TotalOwe" class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="ShortTerm4TotalOwe" class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">
                            </div>
                            <div class="col-lg-1">
                                <input type="date" min="0" name="ShortTerm1Dt" class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">
                                <input type="date" min="0" name="ShortTerm2Dt" class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">
                                <input type="date" min="0" name="ShortTerm3Dt" class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">
                                <input type="date" min="0" name="ShortTerm4Dt" class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="small_text">5. Contingent Liabilities</div>
                            <div class="col-lg-3">
                                <input type="text" min="0" name="Contingent1" class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="Contingent2" class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="Contingent3" class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">
                            </div>
                            <div class="col-lg-1">
                                <input type="text" min="0" name="Contingent1Title" class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="Contingent2Title" class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="Contingent3Title" class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">
                            </div>
                            <div class="col-lg-3">
                                <input type="text" min="0" name="Contingent1Desc" class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="Contingent2Desc" class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">
                                <input type="text" min="0" name="Contingent3Desc" class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">
                            </div>
                            <div class="col-lg-2">
                                <input type="number" min="0" name="Contingent1MoPay" class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="Contingent2MoPay" class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="Contingent3MoPay" class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">
                            </div>
                            <div class="col-lg-2">
                                <input type="number" min="0" name="Contingent1TotalOwe" class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="Contingent2TotalOwe" class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="Contingent3TotalOwe" class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">
                            </div>
                            <div class="col-lg-1">
                                <input type="date" min="0" name="Contingent1Dt" class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">
                                <input type="date" min="0" name="Contingent2Dt" class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">
                                <input type="date" min="0" name="Contingent3Dt" class="border-bottom border-0 responsive_input bg-transparent border outline-none form-control">
                            </div>
                        </div>

                        <div class="row pt-lg-2">
                            <div class="col-lg-10">
                                <div class="small_text text-end">TOTAL GROSS ASSETS:
                                    <br><small>(excluding contingent liabilities)</small>
                                </div>
                                <div class="small_text text-end">NET WORTH: <br> <span>(subject to equitable distribution)</span></div>
                                <div class="small_text text-end">TOTAL SUBJECT TO EQUITABLE DISTRIBUTION:</div>
                                <div class="small_text text-end">TOTAL NOT SUBJECT TO EQUITABLE DISTRIBUTION:</div>
                            </div>

                            <div class="col-lg-2">
                                <input type="number" min="0" name="TotalLiabilities" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="" class="border-bottom border-0 mt-lg-4  responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="totED" class="border-bottom border-0 mt-lg-4 responsive_input bg-transparent border outline-none form-control">
                                <input type="number" min="0" name="ItotNotED" class="border-bottom border-0  responsive_input bg-transparent border outline-none form-control">

                            </div>
                        </div>

                        @include('layouts.footer4', ['page' => 9])

                    </div>
                </section>
                <section class="section_area row page1 bg-white pt-5 p-lg-5 pe-2 pe-lg-5 p-lg-3 m-3 mt-4  pt-lg-5 pt-4"
                    id="last_section">
                    <div class="col-lg-10 mx-auto">
                        <div class=" ">Part F - Statement of Special Problems</div>
                        <div class=" ">Provide a Brief Narrative Statement of Any Special Problems Involving This
                            Case: As example, state if the matter involves complex valuation problems (such as for a
                            closely held business) or special medical problems of any family member, etc.</div>
                        <textarea name="Summary" class="form-control" id="" rows="5"></textarea>
                        <div class=" ">Part G - Required Attachments</div>
                        <div class="text-center">Check If You Have Attached the Following Required Documents</div>

                        <div class="row pt-lg-3">
                            <div class="col-1">1.</div>
                            <div class="col-10">A full and complete copy of your last federal and state income tax
                                returns with all schedules and attachments. (Part C-1)</div>
                            <div class="col-1"> <input type="checkbox" name="Check Box35" id="" value="True"> </div>
                        </div>
                        <div class="row pt-lg-3">
                            <div class="col-1">2.</div>
                            <div class="col-10">Your last calendar year’s W-2 statements, 1099’s, K-1 statements.
                            </div>
                            <div class="col-1"> <input type="checkbox" name="Check Box36" id=""  value="True"> </div>
                        </div>
                        <div class="row pt-lg-3">
                            <div class="col-1">3.</div>
                            <div class="col-10">Your three most recent pay stubs.</div>
                            <div class="col-1"> <input type="checkbox" name="Check Box37" id=""> </div>
                        </div>
                        <div class="row pt-lg-3">
                            <div class="col-1">4.</div>
                            <div class="col-10">Bonus information including, but not limited to, percentage
                                overrides, timing of payments, etc.; the last three statements of such bonuses,
                                commissions, etc. (Part C)</div>
                            <div class="col-1"> <input type="checkbox" name="Check Box38" id=""> </div>
                        </div>
                        <div class="row pt-lg-3">
                            <div class="col-1">5.</div>
                            <div class="col-10">Your most recent corporate benefit statement or a summary thereof
                                showing the nature, amount and status of retirement plans, savings plans, income
                                deferral plans, insurance benefits, etc. (Part C)</div>
                            <div class="col-1"> <input type="checkbox" name="Check Box39" id="" value="True"> </div>
                        </div>
                        <div class="row pt-lg-3">
                            <div class="col-1">6.</div>
                            <div class="col-10">Affidavit of Insurance Coverage as required by Court Rule 5:4-2(f)
                                (Part B-3)</div>
                            <div class="col-1"> <input type="checkbox" name="Check Box40" id="" value="True"> </div>
                        </div>
                        <div class="row pt-lg-3">
                            <div class="col-1">7.</div>
                            <div class="col-10">List of all prior/pending family actions involving support, custody
                                or Domestic Violence, with the Docket Number, County, State and the disposition reached.
                                Attach copies of all existing Orders in effect. (Part B-5)</div>
                            <div class="col-1"> <input type="checkbox" name="Check Box41" id="" value="True"> </div>
                        </div>
                        <div class="row pt-lg-3">
                            <div class="col-1">8.</div>
                            <div class="col-10">Attach details of each wage execution (Part C-5)</div>
                            <div class="col-1"> <input type="checkbox" name="Check Box42" id="" value="True"> </div>
                        </div>
                        <div class="row pt-lg-3">
                            <div class="col-1">9.</div>
                            <div class="col-10">Schedule of payments made for a spouse or civil union partner
                                and/or children not reflected in Part D.</div>
                            <div class="col-1"> <input type="checkbox" name="Check Box43" id="" value="True"> </div>
                        </div>
                        <div class="row pt-lg-3">
                            <div class="col-1">10.</div>
                            <div class="col-10">Any agreements between the parties.</div>
                            <div class="col-1"> <input type="checkbox" name="Check Box44" id="" value="True"> </div>
                        </div>
                        <div class="row pt-lg-3">
                            <div class="col-1">11.</div>
                            <div class="col-10">An Appendix IX Child Support Guideline Worksheet, as applicable,
                                based upon available information.</div>
                            <div class="col-1"> <input type="checkbox" name="Check Box45" id="" value="True"> </div>
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
                            <div class="col-1"> <input type="checkbox" name="Ichecklist12" id=""  value="True"> </div>
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
