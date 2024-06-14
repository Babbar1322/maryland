{{-- FAM108_Current.pdf --}}
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
    <div class="container-fluid   py-1 py-lg-3 ">
        <div class="container bg_color p-lg-3 p-1  ">

            <form action="{{ route('form12.submit') }}" method="post" class=" ">
                @csrf

                <section class="section_area p-5" id="first_section">
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show">{{ session('success') }} <button
                                type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <div class="row">
                        <h5 class="fw-bold col-lg-6 "> State of Minnesota </h5>
                        <h5 class="fw-bold col-lg-6 text-end"> District Court </h5>
                    </div>
                    <div class="row border mx-0">
                        <div class="col-lg-6">County of:
                            <input type="text" name="county_of" class="border-0     ms-4 w-50">
                        </div>
                        <div class="col-lg-6 border">
                            <div>Judicial District: <input type="text" name="judicial_district"
                                    class="border-0 border-bottom footer_field ms-4 w-50"></div>
                            <div>Court File Number: <input type="text" name="court_file_number"
                                    class="border-0 border-bottom footer_field w-50"> </div>
                            <div class="d-flex">
                                <div class="me-5">Case Type:</div> <input type="text" name="case_type"
                                    class="border-0    w-50 ms-3 ">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div><input type="checkbox" name="re_marriage" value="oth_alimin_pay"> In Re the Marriage
                                of:</div>
                        </div>
                        <div class="col-lg-6 ">
                            <div class="d-flex">
                                <div class="d-flex  pe-4">
                                    <input type="checkbox" name="petitioner" value="Petitioner" class="me-1">
                                    <div> Petitioner's</div>

                                </div>
                                <div class="d-flex  ">
                                    <input type="checkbox" name="respondent" value="Respondent" class="me-1">
                                    <div> Respondent's</div>

                                </div>
                            </div>

                        </div>
                    </div>
                    <div><input type="checkbox" name="re_custody" value="oth_alimin_pay"> In Re the Custody of:
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <input type="text" name="peritioner_name"
                                class="border-0 border-bottom w-100 footer_field">
                            <label for="">Name of Petitioner (first, middle, last)</label>
                            <div>and</div>
                        </div>

                        <div class="col-lg-6 text-center">Parenting / Financial Disclosure Statement</div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <input type="text" name="respondent_name"
                                class="border-0 border-bottom w-100 footer_field">
                            <label for="">Name of Respondent (first, middle, last)</label>
                        </div>

                        <div class="col-lg-6 text-center">(Minn. Gen. R. Prac. 305)</div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="fw-bold">1. Background Information</div>
                            <div class="mt-1">a. Full Name</div>
                            <div class="mt-1">b. Age</div>
                            <div class="mt-1">c. Years of Marriage (if applicable) </div>
                            <div class="mt-1">d. Separation Date (if applicable)</div>
                            <div class="mt-1">e. Present Mailing Address</div>
                        </div>

                        <div class="col-lg-4 ">
                            <div class="text-center fw-bold">Petitioner</div>
                            <div class=""> <input type="text" name="full_name1"
                                    class="border-0 border-bottom w-100 footer_field"> </div>
                            <div class=""> <input type="text" name="age1"
                                    class="border-0 border-bottom w-100 footer_field"> </div>
                            <div class=""> <input type="text" name="year_of_marriage1"
                                    class="border-0 border-bottom w-100 footer_field"> </div>
                            <div class=""> <input type="text" name="separation_date1"
                                    class="border-0 border-bottom w-100 footer_field"> </div>
                            <div class=""> <input type="text" name="pm_address1"
                                    class="border-0 border-bottom w-100 footer_field"> </div>
                            <div class=""> <input type="text" name="pm_address3"
                                    class="border-0 border-bottom w-100 footer_field"> </div>
                            <div class=""> <input type="text" name="pm_address5"
                                    class="border-0 border-bottom w-100 footer_field"> </div>
                        </div>

                        <div class="col-lg-4 ">
                            <div class="text-center fw-bold">Respondent</div>
                            <div class=""> <input type="text" name="full_name2"
                                    class="border-0 border-bottom w-100 footer_field"> </div>
                            <div class=""> <input type="text" name="age2"
                                    class="border-0 border-bottom w-100 footer_field"> </div>
                            <div class=""> <input type="text" name="year_of_marriage2"
                                    class="border-0 border-bottom w-100 footer_field"> </div>
                            <div class=""> <input type="text" name="separation_date2"
                                    class="border-0 border-bottom w-100 footer_field"> </div>
                            <div class=""> <input type="text" name="pm_address2"
                                    class="border-0 border-bottom w-100 footer_field"> </div>
                            <div class=""> <input type="text" name="pm_address4"
                                    class="border-0 border-bottom w-100 footer_field"> </div>
                            <div class=""> <input type="text" name="pm_address6"
                                    class="border-0 border-bottom w-100 footer_field"> </div>
                        </div>
                    </div>

                    <div class="fw-bold">2. Court Order(s) Prohibiting Contact</div>
                    <div class="px-lg-5">
                        <div>a. Is there an existing court order between you and the other party? (check all that apply)
                        </div>
                        <div class="px-lg-5">
                            <div class="d-flex  pe-4">
                                <input type="checkbox" name="harassment_restraining_order" value="Petitioner"
                                    class="me-1">
                                <div> Harassment Restraining Order (HRO)</div>
                            </div>
                            <div class="d-flex  pe-4">
                                <input type="checkbox" name="domestic_abuse_order_protection" value="Petitioner"
                                    class="me-1">
                                <div> Domestic Abuse Order for Protection (OFP)</div>
                            </div>
                            <div class="d-flex  pe-4">
                                <input type="checkbox" name="no_contact_order" value="Petitioner" class="me-1">
                                <div>No Contact Order</div>
                            </div>
                            <div class="d-flex  pe-4">
                                <input type="checkbox" name="other_count_order_prohibiting" value="Yes"
                                    class="me-1">
                                <div><span>Other court order prohibiting contact with the other party: </span><input
                                        type="text" name="other_count_order_prohibiting_val"
                                        class="border-0 border-bottom w-25 footer_field"> </div>
                            </div>

                        </div>
                        <div class="d-flex">b. Have you been or are you now afraid of the other party?

                            <span class="d-flex ps-3">
                                <div class="d-flex d_sm_block pe-4">
                                    <input type="radio" name="afraid_other_party" value="Yes" class="me-1">
                                    <div>Yes</div>

                                </div>
                                <div class="d-flex d_sm_block ">
                                    <input type="radio" name="afraid_other_party" value="No" class="me-1">
                                    <div>No</div>

                                </div>
                            </span>
                        </div>
                        <div class="ps-lg-5">
                            <div class=""> <input type="text" name="afraid_other_party_val1"
                                    class="border-0 border-bottom w-100 footer_field"> </div>
                        </div>
                        @include('layouts.footer8', ['page' => 1])
                    </div>
                </section>
                <section class="section_area px-lg-5 px-2 pt-5" id="information_regarding">
                    <div class="pt-5">
                        <div class="ps-lg-5">
                            <div class=""> <input type="text" name="afraid_other_party_val2" class="border-0 border-bottom w-100 footer_field"> </div>
                        </div>
                        <div class="ps-lg-5">
                            <div class=""> <input type="text" name="afraid_other_party_val3" class="border-0 border-bottom w-100 footer_field"> </div>
                        </div>
                        <div class="ps-lg-5 pb-3">

                            <div class=""> <input type="text" name="afraid_other_party_val4" class="border-0 border-bottom w-100 footer_field"> </div>
                        </div>

                        <div class="fw-bold">3. Information Regarding The Minor Joint Children</div>
                        <div class="">List the names, birth dates, and ages of the minor joint children of this
                            legal action:</div>

                        <div class="px-lg-5">
                            <div class="row  ">
                                <div class="col-lg-6">
                                    <div class="text-center">Full Name of Child</div>
                                    <div class=""> <input type="text" name="full_name1"
                                            class="border-0 border-bottom w-100 footer_field"> </div>
                                    <div class=""> <input type="text" name="full_name2"
                                            class="border-0 border-bottom w-100 footer_field"> </div>
                                    <div class=""> <input type="text" name="full_name3"
                                            class="border-0 border-bottom w-100 footer_field"> </div>
                                    <div class=""> <input type="text" name="full_name4"
                                            class="border-0 border-bottom w-100 footer_field"> </div>
                                    <div class=""> <input type="text" name="full_name5"
                                            class="border-0 border-bottom w-100 footer_field"> </div>

                                </div>
                                <div class="col-lg-4">
                                    <div class="text-center">Birth Date</div>
                                    <div class=""> <input type="text" name="birth_date1"
                                            class="border-0 border-bottom w-100 footer_field"> </div>
                                    <div class=""> <input type="text" name="birth_date2"
                                            class="border-0 border-bottom w-100 footer_field"> </div>
                                    <div class=""> <input type="text" name="birth_date3"
                                            class="border-0 border-bottom w-100 footer_field"> </div>
                                    <div class=""> <input type="text" name="birth_date4"
                                            class="border-0 border-bottom w-100 footer_field"> </div>
                                    <div class=""> <input type="text" name="birth_date5"
                                            class="border-0 border-bottom w-100 footer_field"> </div>

                                </div>
                                <div class="col-lg-1">
                                    <div class="text-center">Age</div>
                                    <div class=""> <input type="text" name="age1"
                                            class="border-0 border-bottom w-100 footer_field"> </div>
                                    <div class=""> <input type="text" name="age2"
                                            class="border-0 border-bottom w-100 footer_field"> </div>
                                    <div class=""> <input type="text" name="age3"
                                            class="border-0 border-bottom w-100 footer_field"> </div>
                                    <div class=""> <input type="text" name="age4"
                                            class="border-0 border-bottom w-100 footer_field"> </div>
                                    <div class=""> <input type="text" name="age5"
                                            class="border-0 border-bottom w-100 footer_field"> </div>
                                </div>
                            </div>
                            <div class="d-flex pt-3">a. Do any of the minor joint children have special needs?
                                <span class="d-flex d_sm_block ps-3">
                                    <div class="d-flex   pe-4">
                                        <input type="radio" name="minor_joint_children" value="Yes"
                                            class="me-1">
                                        <div>Yes</div>
                                    </div>
                                    <div class="d-flex">
                                        <input type="radio" name="minor_joint_children" value="No"
                                            class="me-1">
                                        <div>No</div>
                                    </div>
                                </span>
                            </div>
                            <div class="d-flex">b. Is there an agreement regarding parenting time?
                                <span class="d-flex d_sm_block ps-3">
                                    <div class="d-flex pe-4">
                                        <input type="radio" name="agreement_regarding_parenting" value="Yes"
                                            class="me-1">
                                        <div>Yes</div>
                                    </div>
                                    <div class="d-flex">
                                        <input type="radio" name="agreement_regarding_parenting" value="No"
                                            class="me-1">
                                        <div>No</div>
                                    </div>
                                </span>
                            </div>
                            <div class="d-flex">c. Have you and the other party created a parenting plan?

                                <span class="d-flex d_sm_block ps-3">
                                    <div class="d-flex  pe-4">
                                        <input type="radio" name="other_party_created" value="Yes"
                                            class="me-1">
                                        <div>Yes</div>

                                    </div>
                                    <div class="d-flex  ">
                                        <input type="radio" name="other_party_created" value="No"
                                            class="me-1">
                                        <div>No</div>

                                    </div>
                                </span>
                            </div>
                            <div class=" ">d. Is there an agreement regarding legal custody of the children? Legal
                                custody means having a right to participate in the major decisions regarding the child's
                                life, including education, religious upbringing and medical treatment.


                                <span class="d-flex ps-3">
                                    <div class="d-flex  pe-4">
                                        <input type="radio" name="agreement_regarding_legal" value="Yes"
                                            class="me-1">
                                        <div>Yes</div>

                                    </div>
                                    <div class="d-flex  ">
                                        <input type="radio" name="agreement_regarding_legal" value="No"
                                            class="me-1">
                                        <div>No</div>

                                    </div>
                                </span>
                            </div>
                            <div class=" ">e. Is there an agreement regarding physical custody of the children?
                                Physical custody identifies who will handle the routine daily care and control of the
                                child, and who the child will live with.


                                <span class="d-flex ps-3">
                                    <div class="d-flex pe-4">
                                        <input type="radio" name="agreement_regarding_physical" value="Yes"
                                            class="me-1">
                                        <div>Yes</div>

                                    </div>
                                    <div class="d-flex">
                                        <input type="radio" name="agreement_regarding_physical" value="No"
                                            class="me-1">
                                        <div>No</div>

                                    </div>
                                </span>
                            </div>



                            <div class=" ">f. If you have other non-joint children, list first and last initials
                                of each non-joint child's name, age and date of birth:
                                <div class=""> <input type="text" name="other_non_joint_children"
                                        class="border-0 border-bottom w-100 footer_field"> </div>

                            </div>

                            <div class="d-flex d_sm_block">g. Is the wife now pregnant?


                                <span class="d-flex ps-3">
                                    <div class="d-flex  ">
                                        <input type="radio" name="wift_pregnant" value="No" class="me-1">
                                        <div>No</div>

                                    </div>
                                    <div class="d-flex  px-4">
                                        <input type="radio" name="wift_pregnant" value="Yes" class="me-1">
                                        <div>Yes</div>

                                    </div>
                                </span>
                                <span> the due date is:</span>
                                <span><input type="text" name="pregnant_due_date"
                                        class="border-0 border-bottom w-100 footer_field"></span>
                            </div>

                            <div class=" ">h. Please indicate the name of the agency used for complying with the
                                education requirement
                                and the date scheduled or attended:
                                <div class=""> <input type="text" name="agency_name"
                                        class="border-0 border-bottom w-100 footer_field"> </div>

                            </div>
                        </div>
                        <div class="fw-bold">4. Employment and Income:</div>

                        <div class="d-flex ps-lg-5">a. Are you employed?


                            <span class="d-flex ps-3 pb-lg-5">
                                <div class="d-flex  ">
                                    <input type="radio" name="employed" value="No" class="me-1">
                                    <div>No</div>

                                </div>
                                <div class="d-flex  px-4">
                                    <input type="radio" name="employed" value="Yes" class="me-1">
                                    <div>Yes</div>

                                </div>
                            </span>
                        </div>
                        @include('layouts.footer8', ['page' => 2])
                    </div>
                </section>
                <section class="section_area  px-lg-5 px-2" id="if_yes">
                    <div class="table-responsive pt-5">
                        <div class="d-flex ps-lg-5">If yes, where?
                            <div class=""> <input type="text" name="employed_where" class="border-0 border-bottom w-100 footer_field"> </div>
                        </div>
                        <div class="d-flex ps-lg-5">Length of employment?
                            <div class=""> <input type="text" name="employed_length" class="border-0 border-bottom w-100 footer_field"> </div>
                        </div>
                        <table class="table-bordered mt-1 border-black table  my-lg-1">
                            <tbody>
                                <tr>
                                    <td class="text-center"><small>Monthly Income Received</small> </td>
                                    <td class="text-center"><small>Amount</small> </td>
                                    <td class="text-center"><small>Monthly Income Received</small> </td>
                                    <td class="text-center"><small>Amount</small> </td>
                                </tr>
                                <tr>
                                    <td class="small_text">Salary and Wages (before deductions) </td>
                                    <td class="d-flex w-100">
                                        <div>$</div>
                                        <input type="text" name="salary_and_wages" class="border-0 w-100">
                                    </td>
                                    <td class="small_text">Social Security Received (social security disability,
                                        retirement, survivors' benefit) </td>
                                    <td class="">
                                        <div class="d-flex w-100">
                                        <span>$</span>
                                        <input type="text" name="social_security_received" class="border-0 w-100">
                                    </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="small_text">Self-Employment</td>
                                    <td class="d-flex w-100">
                                        <div>$</div>
                                        <input type="text" name="self_employment" class="border-0 w-100">
                                    </td>
                                    <td class="small_text">Child's Derivative Social Security or Veteran's Benefits
                                    </td>
                                    <td class="d-flex w-100">
                                        <span>$</span>
                                        <input type="text" name="child_derivative_social" class="border-0 w-100">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="small_text">Unemployment Benefits</td>
                                    <td class="d-flex w-100">
                                        <div>$</div>
                                        <input type="text" name="unemployment_benefits" class="border-0 w-100">
                                    </td>
                                    <td class="small_text">Workers' Compensation</td>
                                    <td class="d-flex w-100">
                                        <span>$</span>
                                        <input type="text" name="workers_compensation" class="border-0 w-100">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="small_text">Commissions - Average</td>
                                    <td class="d-flex w-100">
                                        <div>$</div>
                                        <input type="text" name="commissions_average" class="border-0 w-100">
                                    </td>
                                    <td class="small_text">Pension or Annuity Payments</td>
                                    <td class="d-flex w-100">
                                        <span>$</span>
                                        <input type="text" name="pension_annuity_payments" class="border-0 w-100">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="small_text">Spousal Maintenance Received</td>
                                    <td class="d-flex w-100">
                                        <div>$</div>
                                        <input type="text" name="spousal_maintenance_received" class="border-0 w-100">
                                    </td>
                                    <td class="small_text">Military and Naval Retirement </td>
                                    <td class="d-flex w-100">
                                        <span>$</span>
                                        <input type="text" name="military_and_naval_Retirement"
                                            class="border-0 w-100">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="small_text">Bonus income - Average</td>
                                    <td class="d-flex w-100">
                                        <div>$</div>
                                        <input type="text" name="bonus_income_average" class="border-0 w-100">
                                    </td>
                                    <td colspan="2" class="small_text">Other source of income (list source below)
                                    </td>
                                </tr>
                                <tr>
                                    <td class="small_text">Supplemental Security (SSI) </td>
                                    <td class="d-flex w-100">
                                        <div>$</div>
                                        <input type="text" name="supplemental_security" class="border-0 w-100">
                                    </td>
                                    <td class="small_text"><input type="text" name="other_source1"
                                            class="border-0 w-100"> </td>
                                    <td class="d-flex w-100">
                                        <span>$</span>
                                        <input type="text" name="other_source2" class="border-0 w-100">
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3" class="fw-bold">Total monthly income received:</td>
                                    <td class="d-flex w-100">
                                        <span>$</span>
                                        <input type="text" name="total_monthly_income" class="border-0 w-100">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="px-4">
                        <div>b. Do you or the other party receive any child support for non-joint children?</div>
                        <div class="d-flex">
                            <div class="d-flex  pe-4">
                                <input type="radio" name="non_joint_children" value="Yes" class="me-1">
                                <div>Yes</div>

                            </div>
                            <div class="d-flex">
                                <input type="radio" name="non_joint_children" value="No" class="me-1">
                                <div>No</div>
                            </div>
                        </div>
                        <div>c. Are you or the joint children currently receiving any form of public assistance?</div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="d-flex">
                                    <div class="d-flex  pe-4">
                                        <input type="radio" name="joint_children_currently" value="Yes"
                                            class="me-1">
                                        <div>Yes (check all that apply)</div>

                                    </div>
                                    <div class="d-flex">
                                        <input type="radio" name="joint_children_currently" value="No"
                                            class="me-1">
                                        <div>No</div>
                                    </div>
                                </div>

                                <div class="d-flex  pe-4">
                                    <input type="radio" name="cash_public_assistance" value="Yes"
                                        class="me-1">
                                    <div>Cash public assistance (MFIP)</div>
                                </div>

                                <div class="d-flex  pe-4">
                                    <input type="radio" name="medical_assistance" value="Yes" class="me-1">
                                    <div>Medical Assistance</div>
                                </div>

                                <div class="d-flex  pe-4">
                                    <input type="radio" name="diversionary_work_program" value="Yes"
                                        class="me-1">
                                    <div>Diversionary Work Program (DWP)</div>
                                </div>
                            </div>

                            <div class="col-lg-4 pt-lg-4">
                                <div class="d-flex  pe-4">
                                    <input type="radio" name="food_stamps" value="Yes" class="me-1">
                                    <div>Food Stamps</div>
                                </div>
                                <div class="d-flex  pe-4">
                                    <input type="radio" name="minnesota_care" value="Yes" class="me-1">
                                    <div>MinnesotaCare</div>
                                </div>
                                <div class="d-flex  pe-4">
                                    <input type="radio" name="tefra" value="Yes" class="me-1">
                                    <div>TEFRA</div>
                                </div>
                            </div>
                            <div class="col-lg-4 pt-lg-4">
                                <div class="d-flex  pe-4">
                                    <input type="radio" name="general_assistance" value="Yes" class="me-1">
                                    <div>General Assistance</div>
                                </div>
                                <div class="d-flex  pe-4">
                                    <input type="radio" name="child_care_subsidy" value="Yes" class="me-1">
                                    <div>Child Care Subsidy</div>
                                </div>
                            </div>

                            <div class="d-flex  pe-4">

                                <input type="radio" name="others" value="Yes" class="me-1">
                                <div>Other:</div>
                                <input type="text" name="others_val"
                                    class="border-0 border-bottom w-75 footer_field">

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-9">
                                <div>d. If you checked any boxes above in 4c above, did you serve the County Attorney's
                                    Office with a copy of your documents, as required?</div>
                                <div>e. If you are not working, what is your source of income or support?</div>
                            </div>
                            <div class="col-lg-3">
                                <div class="d-flex">
                                    <div class="d-flex pe-4">
                                        <input type="radio" name="4c_above" value="Yes">
                                        <div>Yes</div>
                                    </div>
                                    <div class="d-flex">
                                        <input type="radio" name="4c_above" value="No">
                                        <div>No</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="text" name="source_of_income"
                            class="border-0 border-bottom  w-100 footer_field">

                        <div class="pt-5"></div>
                    </div>
                    @include('layouts.footer8', ['page' => 3])
                </section>
                <section class="section_area  px-lg-5 px-2" id="monthly_living">
                    <div class="table-responsive pt-5">
                        <div class="fw-bold">5. Monthly Living Expenses</div>
                        <table class="  table-bordered mt-1 border-black table  my-lg-1">
                            <tbody>
                                <tr>
                                    <td class="text-center"><small>Expense Type</small> </td>
                                    <td class="text-center"><small>Cost</small> </td>
                                    <td class="text-center"><small>Expense Type</small> </td>
                                    <td class="text-center"><small>Cost</small> </td>
                                </tr>
                                <tr>
                                    <td class="small_text">Rent / Mortgage Payment </td>
                                    <td class="d-flex w-100">
                                        <div>$</div>
                                        <input type="text" name="rent_mortgage_payment" class="border-0 w-100">
                                    </td>
                                    <td class="small_text">Transportation (car payment, gasoline, bus, taxi)</td>
                                    <td class="d-flex w-100">
                                        <span>$</span>
                                        <input type="text" name="transportation" class="border-0 w-100">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="small_text">Contract for Deed / 2nd Mortgage</td>
                                    <td class="d-flex w-100">
                                        <div>$</div>
                                        <input type="text" name="contract_for_deed" class="border-0 w-100">
                                    </td>
                                    <td class="small_text">Medical and Dental Expenses (not covered by insurance)</td>
                                    <td class="">
                                        <div class="d-flex w-100">
                                        <span>$</span>
                                        <input type="text" name="medical_and_dental_expenses"
                                            class="border-0 w-100">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="small_text">Homeowner's / Rental Insurance</td>
                                    <td class="d-flex w-100">
                                        <div>$</div>
                                        <input type="text" name="homeowner_rental_insurance"
                                            class="border-0 w-100">
                                    </td>
                                    <td class="small_text">Cable TV / Internet</td>
                                    <td class="d-flex w-100">
                                        <span>$</span>
                                        <input type="text" name="cable_tv_internet" class="border-0 w-100">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="small_text">Property Taxes (if not included in mortgage payment)</td>
                                    <td class="d-flex w-100">
                                        <div>$</div>
                                        <input type="text" name="property_taxes" class="border-0 w-100">
                                    </td>
                                    <td class="small_text">Car Insurance</td>
                                    <td class="">
                                        <div class="d-flex w-100">
                                            <span>$</span>
                                            <input type="text" name="car_insurance" class="border-0 w-100">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="small_text">Heating & Electric</td>
                                    <td class="d-flex w-100">
                                        <div>$</div>
                                        <input type="text" name="heating_electric" class="border-0 w-100">
                                    </td>
                                    <td class="small_text">Clothing</td>
                                    <td class="d-flex w-100">
                                        <span>$</span>
                                        <input type="text" name="clothing" class="border-0 w-100">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="small_text">Food</td>
                                    <td class="d-flex w-100">
                                        <div>$</div>
                                        <input type="text" name="food" class="border-0 w-100">
                                    </td>
                                    <td class="small_text">Other Spousal Maintenance payments</td>
                                    <td class="d-flex w-100">
                                        <span>$</span>
                                        <input type="text" name="other_spousal_maintenance_payments"
                                            class="border-0 w-100">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="small_text">Telephone / Cell Phone</td>
                                    <td class="d-flex w-100">
                                        <div>$</div>
                                        <input type="text" name="telephone_cell_phone" class="border-0 w-100">
                                    </td>
                                    <td class="small_text">Other Child support payments</td>
                                    <td class="d-flex w-100">
                                        <span>$</span>
                                        <input type="text" name="other_child_support_payments"
                                            class="border-0 w-100">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="small_text">Child Care Payments</td>
                                    <td class="d-flex w-100">
                                        <div>$</div>
                                        <input type="text" name="child_care_payments" class="border-0 w-100">
                                    </td>
                                    <td class="small_text">Other Miscellaneous payments</td>
                                    <td class="d-flex w-100">
                                        <span>$</span>
                                        <input type="text" name="other_miscellaneous_payments"
                                            class="border-0 w-100">
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3" class="fw-bold">Total monthly expenses:</td>
                                    <td class="d-flex w-100">
                                        <span>$</span>
                                        <input type="text" name="total_monthly_expenses" class="border-0 w-100">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="">6. Monthly Withholdings:</div>
                    <div class="px-4">
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="mt-1"> a. Federal Income Tax Deductions</div>
                                <div class="mt-1"> b. State Tax Deductions</div>
                                <div class="mt-1 ps-3">Social Security (FICA) and Medicare</div>
                                <div class="mt-1 ps-3">Retirement Contribution </div>
                                <div class="mt-1 ps-3">Union Dues</div>
                                <div class="mt-1">c. Other Paycheck Deductions (specify)</div>
                                <div class=""> <input type="text" name="other_paycheck1"
                                        class="border-0 border-bottom footer_field responsive_input">
                                </div>
                                <div class="mb-3"> <input type="text" name="other_paycheck2"
                                        class="border-0 border-bottom footer_field responsive_input">
                                    <div class="mt-1">d. Subtotal Deductions</div>
                                    <div class="mt-1">e. NET TAKE HOME PAY</div>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="d-flex">
                                    <span>$</span>
                                    <input type="text" name="federal_income_tax_deductions"
                                        class="border-0 border-bottom footer_field responsive_input">
                                </div>

                                <div class="d-flex">
                                    <span>$</span>
                                    <input type="text" name="state_tax_deductions"
                                        class="border-0 border-bottom footer_field responsive_input">
                                </div>
                                <div class="d-flex">
                                    <span>$</span>
                                    <input type="text" name="social_security"
                                        class="border-0 border-bottom footer_field responsive_input">
                                </div>
                                <div class="d-flex">
                                    <span>$</span>
                                    <input type="text" name="retirement_contribution"
                                        class="border-0 border-bottom footer_field responsive_input">
                                </div>
                                <div class="d-flex">
                                    <span>$</span>
                                    <input type="text" name="union_dues"
                                        class="border-0 border-bottom footer_field responsive_input">
                                </div>
                                <div class="d-flex">
                                    <span>$</span>
                                    <input type="text" name="other_paycheck_deductions"
                                        class="border-0 border-bottom footer_field responsive_input">
                                </div>
                                <div class="d-flex">
                                    <span>$</span>
                                    <input type="text" name="other_paycheck3"
                                        class="border-0 border-bottom footer_field responsive_input">
                                </div>
                                <div class="d-flex">
                                    <span>$</span>
                                    <input type="text" name="other_paycheck4"
                                        class="border-0 border-bottom footer_field responsive_input">
                                </div>
                                <div class="d-flex">
                                    <span>$</span>
                                    <input type="text" name="subtotal_deductions"
                                        class="border-0 border-bottom footer_field responsive_input">
                                </div>
                                <div class="d-flex">
                                    <span>$</span>
                                    <input type="text" name="net_take_home_pay"
                                        class="border-0 border-bottom footer_field responsive_input">
                                </div>
                            </div>
                        </div>
                        @include('layouts.footer8', ['page' => 4])
                    </div>
                </section>

                <section class="section_area  px-lg-5 px-2 pt-5" id="tax_withholding">

                    <div class="row pt-lg-5">
                        <div class="col-lg-4 mx-auto">f. Tax withholding figures above are based on Married/Single
                            taxpayer status with what number of deductions?
                            (Example: M-4 or S-2)</div>
                        <div class="col-lg-4 mx-auto">
                            <input type="text" name="tax_withholding_figures"
                                class="border-0 w-100 border-bottom footer_field">

                        </div>
                    </div>
                    <div class="d-flex ps-lg-5">g. Do you have medical and dental insurance coverage in place?
                        <span class="d-flex ps-3">
                            <div class="d-flex  pe-4">
                                <input type="radio" name="medical_and_dental" value="Yes" class="me-1">
                                <div>Yes</div>

                            </div>
                            <div class="d-flex  ">
                                <input type="radio" name="medical_and_dental" value="No" class="me-1">
                                <div>No</div>

                            </div>
                        </span>
                    </div>
                    <div class="fst-italic">Questions 7 through 11 apply only for marital dissolution actions.</div>
                    <div class="">7. <strong> Real Property: </strong> Provide the following information for real
                        property owned by you and/or your spouse. If more room is needed, attach another sheet of paper
                        labeled as Exhibit 7A.</div>

                    <div class=" pt-5">
                        <div class="row ps-lg-5 pb-5">
                            <div class="col-lg-4">
                                <div></div>
                                <div class="pt-4">a. Date Acquired</div>
                                <div class="pt-2">b. Purchase Price</div>
                                <div class="pt-2">c. Present Fair Market Value </div>
                                <div class="pt-2">d. Balance due on Mortgage</div>
                                <div class="pt-2">e. Present New Value (c-d)</div>
                                <div class="pt-2">f. Monthly Payment (PITI)</div>
                                <div class="pt-2">g. Rental Income, if any</div>
                            </div>
                            <div class="col-lg-4">
                                <div class="text-center fw-bold">Homestead</div>
                                <div><input type="text" name="date_acquired1"
                                        class="border-0 w-100 border-bottom footer_field"></div>
                                <div class="d-flex pt-1">$<input type="text" name="purchase_price1"
                                        class="border-0 w-100 border-bottom footer_field"> </div>
                                <div class="d-flex pt-1">$<input type="text" name="present_fair_market_value1"
                                        class="border-0 w-100 border-bottom footer_field"> </div>
                                <div class="d-flex pt-1">$<input type="text" name="balance_due_on_mortgage1"
                                        class="border-0 w-100 border-bottom footer_field"> </div>
                                <div class="d-flex pt-1">$<input type="text" name="present_new_value1"
                                        class="border-0 w-100 border-bottom footer_field"> </div>
                                <div class="d-flex pt-1">$<input type="text" name="monthly_payment1"
                                        class="border-0 w-100 border-bottom footer_field"> </div>
                                <div class="d-flex pt-1">$<input type="text" name="rental_income1"
                                        class="border-0 w-100 border-bottom footer_field"> </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="text-center fw-bold">Other Property</div>
                                <div><input type="text" name="date_acquired2"
                                        class="border-0 w-100 border-bottom footer_field"></div>
                                <div class="d-flex pt-1">$<input type="text" name="purchase_price2"
                                        class="border-0 w-100 border-bottom footer_field"> </div>
                                <div class="d-flex pt-1">$<input type="text" name="present_fair_market_value2" class="border-0 w-100 border-bottom footer_field"> </div>
                                <div class="d-flex pt-1">$<input type="text" name="balance_due_on_mortgage2" class="border-0 w-100 border-bottom footer_field"> </div>
                                <div class="d-flex pt-1">$<input type="text" name="present_new_value2" class="border-0 w-100 border-bottom footer_field"> </div>
                                <div class="d-flex pt-1">$<input type="text" name="monthly_payment2" class="border-0 w-100 border-bottom footer_field"> </div>
                                <div class="d-flex pt-1">$<input type="text" name="rental_income2" class="border-0 w-100 border-bottom footer_field"> </div>
                            </div>
                        </div>
                    </div>
                    <div>8. <strong> Personal Property: </strong> List the fair market value of the following personal
                        property owned by your or your spouse:</div>
                    <div class="ps-lg-5">
                        <div>a. Checking, Savings Accounts (list)</div>
                        <div class="ps-lg-5">
                            <div class="row    pb-5">
                                <div class="col-lg-6">
                                    <div><input type="text" name="chacking_saving_accounts1"
                                            class="border-0 w-100 border-bottom footer_field"></div>
                                    <div><input type="text" name="chacking_saving_accounts3"
                                            class="border-0 w-100 border-bottom footer_field"></div>
                                    <div><input type="text" name="chacking_saving_accounts5"
                                            class="border-0 w-100 border-bottom footer_field"></div>
                                    <div><input type="text" name="chacking_saving_accounts7"
                                            class="border-0 w-100 border-bottom footer_field"></div>
                                    <div><input type="text" name="chacking_saving_accounts9"
                                            class="border-0 w-100 border-bottom footer_field"></div>
                                    <div><input type="text" name="chacking_saving_accounts11"
                                            class="border-0 w-100 border-bottom footer_field"></div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="d-flex">$<input type="text" name="chacking_saving_accounts2"
                                            class="border-0 w-100 border-bottom footer_field"> </div>
                                    <div class="d-flex">$<input type="text" name="chacking_saving_accounts4"
                                            class="border-0 w-100 border-bottom footer_field"> </div>
                                    <div class="d-flex">$<input type="text" name="chacking_saving_accounts6"
                                            class="border-0 w-100 border-bottom footer_field"> </div>
                                    <div class="d-flex">$<input type="text" name="chacking_saving_accounts8"
                                            class="border-0 w-100 border-bottom footer_field"> </div>
                                    <div class="d-flex">$<input type="text" name="chacking_saving_accounts10"
                                            class="border-0 w-100 border-bottom footer_field"> </div>
                                    <div class="d-flex">$<input type="text" name="chacking_saving_accounts12"
                                            class="border-0 w-100 border-bottom footer_field"> </div>

                                </div>
                            </div>
                        </div>
                        <div>b. Investment Accounts, Mutual Funds, Stocks, Bonds, etc. (list)</div>
                        <div class="ps-lg-5">
                            <div class="row    pb-5">
                                <div class="col-lg-6">
                                    <div><input type="text" name="inverstment_accounts1"
                                            class="border-0 w-100 border-bottom footer_field"></div>
                                    <div><input type="text" name="inverstment_accounts3"
                                            class="border-0 w-100 border-bottom footer_field"></div>
                                    <div><input type="text" name="inverstment_accounts5"
                                            class="border-0 w-100 border-bottom footer_field"></div>
                                    <div><input type="text" name="inverstment_accounts7"
                                            class="border-0 w-100 border-bottom footer_field"></div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="d-flex">$<input type="text" name="inverstment_accounts2"
                                            class="border-0 w-100 border-bottom footer_field"> </div>
                                    <div class="d-flex">$<input type="text" name="inverstment_accounts4"
                                            class="border-0 w-100 border-bottom footer_field"> </div>
                                    <div class="d-flex">$<input type="text" name="inverstment_accounts6"
                                            class="border-0 w-100 border-bottom footer_field"> </div>
                                    <div class="d-flex">$<input type="text" name="inverstment_accounts8"
                                            class="border-0 w-100 border-bottom footer_field"> </div>

                                </div>
                            </div>
                        </div>
                        @include('layouts.footer8', ['page' => 5])
                    </div>
                </section>



                <section class="section_area  px-lg-5 px-2 pt-5" id="iras_profit_sharing">

                    <div class="ps-lg-5 pt-5">
                        <div>c. IRAs, Profit Sharing Plans, Savings Plans (e.g. 401K), Pension, etc.</div>
                        <div class="ps-lg-5">
                            <div class="row    pb-3">
                                <div class="col-lg-6">
                                    <div><input type="text" name="iras_profit_sharing1"
                                            class="border-0 w-100 border-bottom footer_field"></div>
                                    <div><input type="text" name="iras_profit_sharing3"
                                            class="border-0 w-100 border-bottom footer_field"></div>
                                    <div><input type="text" name="iras_profit_sharing5"
                                            class="border-0 w-100 border-bottom footer_field"></div>
                                    <div><input type="text" name="iras_profit_sharing7"
                                            class="border-0 w-100 border-bottom footer_field"></div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="d-flex">$<input type="text" name="iras_profit_sharing2"
                                            class="border-0 w-100 border-bottom footer_field"> </div>
                                    <div class="d-flex">$<input type="text" name="iras_profit_sharing4"
                                            class="border-0 w-100 border-bottom footer_field"> </div>
                                    <div class="d-flex">$<input type="text" name="iras_profit_sharing6"
                                            class="border-0 w-100 border-bottom footer_field"> </div>
                                    <div class="d-flex">$<input type="text" name="iras_profit_sharing8"
                                            class="border-0 w-100 border-bottom footer_field"> </div>

                                </div>
                            </div>
                        </div>
                        <div>d. Annuities</div>
                        <div class="ps-lg-5">
                            <div class="row    pb-3">
                                <div class="col-lg-6">
                                    <div><input type="text" name="annuities1"
                                            class="border-0 w-100 border-bottom footer_field"></div>
                                    <div><input type="text" name="annuities3"
                                            class="border-0 w-100 border-bottom footer_field"></div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="d-flex">$<input type="text" name="annuities2"
                                            class="border-0 w-100 border-bottom footer_field"> </div>
                                    <div class="d-flex">$<input type="text" name="annuities4"
                                            class="border-0 w-100 border-bottom footer_field"> </div>

                                </div>
                            </div>
                        </div>
                        <div>e. Household goods and furnishing (including audio/video/computer)</div>
                        <div class="ps-lg-5">
                            <div class="row    pb-3">
                                <div class="col-lg-6">
                                    <div><input type="text" name="household_goods1"
                                            class="border-0 w-100 border-bottom footer_field"></div>
                                    <div><input type="text" name="household_goods3"
                                            class="border-0 w-100 border-bottom footer_field"></div>
                                    <div><input type="text" name="household_goods5"
                                            class="border-0 w-100 border-bottom footer_field"></div>
                                    <div><input type="text" name="household_goods7"
                                            class="border-0 w-100 border-bottom footer_field"></div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="d-flex">$<input type="text" name="household_goods2"
                                            class="border-0 w-100 border-bottom footer_field"> </div>
                                    <div class="d-flex">$<input type="text" name="household_goods4"
                                            class="border-0 w-100 border-bottom footer_field"> </div>
                                    <div class="d-flex">$<input type="text" name="household_goods6"
                                            class="border-0 w-100 border-bottom footer_field"> </div>
                                    <div class="d-flex">$<input type="text" name="household_goods8"
                                            class="border-0 w-100 border-bottom footer_field"> </div>

                                </div>
                            </div>
                        </div>
                        <div>f. Vehicles, Boats, Campers, Snowmobiles, Aircraft, Trailer, etc.:</div>
                        <div class="ps-lg-5">
                            <div class="row    pb-3">
                                <div class="col-lg-6">
                                    <div><input type="text" name="vehicles_boats_campers1"
                                            class="border-0 w-100 border-bottom footer_field"></div>
                                    <div><input type="text" name="vehicles_boats_campers3"
                                            class="border-0 w-100 border-bottom footer_field"></div>
                                    <div><input type="text" name="vehicles_boats_campers5"
                                            class="border-0 w-100 border-bottom footer_field"></div>
                                    <div><input type="text" name="vehicles_boats_campers7"
                                            class="border-0 w-100 border-bottom footer_field"></div>
                                    <div><input type="text" name="vehicles_boats_campers9"
                                            class="border-0 w-100 border-bottom footer_field"></div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="d-flex">$<input type="text" name="vehicles_boats_campers2"
                                            class="border-0 w-100 border-bottom footer_field"> </div>
                                    <div class="d-flex">$<input type="text" name="vehicles_boats_campers4"
                                            class="border-0 w-100 border-bottom footer_field"> </div>
                                    <div class="d-flex">$<input type="text" name="vehicles_boats_campers6"
                                            class="border-0 w-100 border-bottom footer_field"> </div>
                                    <div class="d-flex">$<input type="text" name="vehicles_boats_campers8"
                                            class="border-0 w-100 border-bottom footer_field"> </div>
                                    <div class="d-flex">$<input type="text" name="vehicles_boats_campers10"
                                            class="border-0 w-100 border-bottom footer_field"> </div>

                                </div>
                            </div>
                        </div>
                        <div>g. Farm machinery, equipment, animals, crops, seed, etc.:</div>
                        <div class="ps-lg-5">
                            <div class="row    pb-3">
                                <div class="col-lg-6">
                                    <div><input type="text" name="farm_machinery_equipment1"
                                            class="border-0 w-100 border-bottom footer_field"></div>
                                    <div><input type="text" name="farm_machinery_equipment3"
                                            class="border-0 w-100 border-bottom footer_field"></div>
                                    <div><input type="text" name="farm_machinery_equipment5"
                                            class="border-0 w-100 border-bottom footer_field"></div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="d-flex">$<input type="text" name="farm_machinery_equipment2"
                                            class="border-0 w-100 border-bottom footer_field"> </div>
                                    <div class="d-flex">$<input type="text" name="farm_machinery_equipment4"
                                            class="border-0 w-100 border-bottom footer_field"> </div>
                                    <div class="d-flex">$<input type="text" name="farm_machinery_equipment6"
                                            class="border-0 w-100 border-bottom footer_field"> </div>

                                </div>
                            </div>
                        </div>
                        <div>h. Business or Partnership Interests</div>
                        <div class="ps-lg-5">
                            <div class="row    pb-3">
                                <div class="col-lg-6">
                                    <div><input type="text" name="business_partnership_interests1"
                                            class="border-0 w-100 border-bottom footer_field"></div>
                                    <div><input type="text" name="business_partnership_interests3"
                                            class="border-0 w-100 border-bottom footer_field"></div>
                                    <div><input type="text" name="business_partnership_interests5"
                                            class="border-0 w-100 border-bottom footer_field"></div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="d-flex">$<input type="text"
                                            name="business_partnership_interests2"
                                            class="border-0 w-100 border-bottom footer_field"> </div>
                                    <div class="d-flex">$<input type="text"
                                            name="business_partnership_interests4"
                                            class="border-0 w-100 border-bottom footer_field"> </div>
                                    <div class="d-flex">$<input type="text"
                                            name="business_partnership_interests6"
                                            class="border-0 w-100 border-bottom footer_field"> </div>

                                </div>
                            </div>
                        </div>
                        <div>i. Intellectual Property, such as patents, copyrights, etc.</div>
                        <div class="ps-lg-5">
                            <div class="row    pb-3">
                                <div class="col-lg-6">
                                    <div><input type="text" name="intellectual_property1"
                                            class="border-0 w-100 border-bottom footer_field"></div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="d-flex">$<input type="text" name="intellectual_property2"
                                            class="border-0 w-100 border-bottom footer_field"> </div>

                                </div>
                            </div>
                        </div>
                        @include('layouts.footer8', ['page' => 6])
                    </div>
                </section>

                <section class="section_area  px-lg-5 px-2 pt-5" id="others">

                    <div class="ps-lg-5 pt-5">
                        <div>j. Other</div>
                        <div class="ps-lg-5">
                            <div class="row pb-3">
                                <div class="col-lg-6">
                                    <div><input type="text" name="other1"
                                            class="border-0 w-100 border-bottom footer_field"></div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="d-flex">$<input type="text" name="other2"
                                            class="border-0 w-100 border-bottom footer_field"> </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div>9. Non-marital Claims</div>
                    <div class="ps-lg-5">
                        <div class="d-flex  ">Are you making any claim for non-marital property?
                            <span class="d-flex ps-3">
                                <div class="d-flex  pe-4">
                                    <input type="radio" name="non_marital_claims" value="Yes"
                                        class="me-1">
                                    <div>Yes</div>

                                </div>
                                <div class="d-flex  ">
                                    <input type="radio" name="non_marital_claims" value="No"
                                        class="me-1">
                                    <div>No</div>

                                </div>
                            </span>
                        </div>
                        <div class=" ">
                            <div class="row    pb-3">
                                <div class="col-lg-6">
                                    <div>If yes, list item claimed as non-marital below:</div>
                                    <div><input type="text" name="non_marital1"
                                            class="border-0 w-100 border-bottom footer_field"></div>
                                    <div><input type="text" name="non_marital2"
                                            class="border-0 w-100 border-bottom footer_field"></div>
                                    <div><input type="text" name="non_marital3"
                                            class="border-0 w-100 border-bottom footer_field"></div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="text-center">Amount Claimed</div>
                                    <div class="d-flex">$<input type="text" name="amount_claimed1"
                                            class="border-0 w-100 border-bottom footer_field"> </div>
                                    <div class="d-flex">$<input type="text" name="amount_claimed2"
                                            class="border-0 w-100 border-bottom footer_field"> </div>
                                    <div class="d-flex">$<input type="text" name="amount_claimed3"
                                            class="border-0 w-100 border-bottom footer_field"> </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div>10. Life Insurance: List all insurance policies owned by you and your spouse.</div>
                    <div class="ps-lg-5">

                        <div class=" ">
                            <div class="row pb-3">
                                <div class="col-lg-3">
                                    <div></div>
                                    <div class="pt-5">Company</div>
                                    <div>Type (Whole or Term)</div>
                                    <div>Death Benefit</div>
                                    <div>Cash Value</div>
                                    <div>Loan Balance</div>
                                    <div>Insured under the policy</div>
                                    <div>Beneficiary</div>
                                    <div>Owner of Policy</div>

                                </div>
                                <div class="col-lg-3">
                                    <div class="text-center">Policy 1</div>
                                    <div class="d-flex">$<input type="text" name="company1"
                                            class="border-0 w-100 border-bottom footer_field"> </div>
                                    <div class="d-flex">$<input type="text" name="type1"
                                            class="border-0 w-100 border-bottom footer_field"> </div>
                                    <div class="d-flex">$<input type="text" name="death_benefit1"
                                            class="border-0 w-100 border-bottom footer_field"> </div>
                                    <div class="d-flex">$<input type="text" name="cash_value1"
                                            class="border-0 w-100 border-bottom footer_field"> </div>
                                    <div class="d-flex">$<input type="text" name="loan_balance1"
                                            class="border-0 w-100 border-bottom footer_field"> </div>
                                    <div class="d-flex">$<input type="text" name="insured_under_policy1"
                                            class="border-0 w-100 border-bottom footer_field"> </div>
                                    <div class="d-flex">$<input type="text" name="beneficiary1"
                                            class="border-0 w-100 border-bottom footer_field"> </div>
                                    <div class="d-flex">$<input type="text" name="owner_of_policy1"
                                            class="border-0 w-100 border-bottom footer_field"> </div>

                                </div>
                                <div class="col-lg-3">
                                    <div class="text-center">Policy 2</div>
                                    <div class="d-flex">$<input type="text" name="company2"
                                            class="border-0 w-100 border-bottom footer_field"> </div>
                                    <div class="d-flex">$<input type="text" name="type2"
                                            class="border-0 w-100 border-bottom footer_field"> </div>
                                    <div class="d-flex">$<input type="text" name="death_benefit2"
                                            class="border-0 w-100 border-bottom footer_field"> </div>
                                    <div class="d-flex">$<input type="text" name="cash_value2"
                                            class="border-0 w-100 border-bottom footer_field"> </div>
                                    <div class="d-flex">$<input type="text" name="loan_balance2"
                                            class="border-0 w-100 border-bottom footer_field"> </div>
                                    <div><input type="text" name="insured_under_policy2"
                                            class="border-0 w-100 border-bottom footer_field"> </div>
                                    <div><input type="text" name="beneficiary2"
                                            class="border-0 w-100 border-bottom footer_field"> </div>
                                    <div><input type="text" name="owner_of_policy2"
                                            class="border-0 w-100 border-bottom footer_field"> </div>

                                </div>
                                <div class="col-lg-3">
                                    <div class="text-center">Policy 3</div>
                                    <div class="d-flex">$<input type="text" name="company3"
                                            class="border-0 w-100 border-bottom footer_field"> </div>
                                    <div class="d-flex">$<input type="text" name="type3"
                                            class="border-0 w-100 border-bottom footer_field"> </div>
                                    <div class="d-flex">$<input type="text" name="death_benefit3"
                                            class="border-0 w-100 border-bottom footer_field"> </div>
                                    <div class="d-flex">$<input type="text" name="cash_value3"
                                            class="border-0 w-100 border-bottom footer_field"> </div>
                                    <div class="d-flex">$<input type="text" name="loan_balance3"
                                            class="border-0 w-100 border-bottom footer_field"> </div>
                                    <div><input type="text" name="insured_under_policy3"
                                            class="border-0 w-100 border-bottom footer_field"> </div>
                                    <div><input type="text" name="beneficiary3"
                                            class="border-0 w-100 border-bottom footer_field"> </div>
                                    <div><input type="text" name="beneficiary3"
                                            class="border-0 w-100 border-bottom footer_field"> </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div>11. Debts: List all debts not already listed in paragraph 7. If more room is needed, attach a
                        schedule.</div>
                    <div class="ps-lg-5">

                        <div class=" ">
                            <div class="row    pb-3">
                                <div class="col-lg-3">
                                    <div>Type of Debt (credit care, bank loan, etc.)</div>
                                    <div class=""><input type="text" name="type_of_debit1"
                                            class="border-0 w-100 border-bottom footer_field"> </div>
                                    <div><input type="text" name="type_of_debit2"
                                            class="border-0 w-100 border-bottom footer_field"> </div>
                                    <div><input type="text" name="type_of_debit3"
                                            class="border-0 w-100 border-bottom footer_field"> </div>
                                    <div><input type="text" name="type_of_debit4"
                                            class="border-0 w-100 border-bottom footer_field"> </div>
                                    <div><input type="text" name="type_of_debit5"
                                            class="border-0 w-100 border-bottom footer_field"> </div>
                                    <div><input type="text" name="type_of_debit6"
                                            class="border-0 w-100 border-bottom footer_field"> </div>
                                    <div><input type="text" name="type_of_debit7"
                                            class="border-0 w-100 border-bottom footer_field"> </div>
                                    <div><input type="text" name="type_of_debit8"
                                            class="border-0 w-100 border-bottom footer_field"> </div>


                                </div>
                                <div class="col-lg-3">
                                    <div class="text-center">Debt Owed To</div>
                                    <div class="pt-4"><input type="text" name="debt_owed_at1"
                                            class="border-0 w-100 border-bottom footer_field"> </div>
                                    <div><input type="text" name="debt_owed_at2"
                                            class="border-0 w-100 border-bottom footer_field"> </div>
                                    <div><input type="text" name="debt_owed_at3"
                                            class="border-0 w-100 border-bottom footer_field"> </div>
                                    <div><input type="text" name="debt_owed_at4"
                                            class="border-0 w-100 border-bottom footer_field"> </div>
                                    <div><input type="text" name="debt_owed_at5"
                                            class="border-0 w-100 border-bottom footer_field"> </div>
                                    <div><input type="text" name="debt_owed_at6"
                                            class="border-0 w-100 border-bottom footer_field"> </div>
                                    <div><input type="text" name="debt_owed_at7"
                                            class="border-0 w-100 border-bottom footer_field"> </div>
                                    <div><input type="text" name="debt_owed_at8"
                                            class="border-0 w-100 border-bottom footer_field"> </div>

                                </div>
                                <div class="col-lg-3">
                                    <div class="text-center">Minimum Monthly Payment</div>
                                    <div class="d-flex pt-4">$<input type="text"
                                            name="minimun_monthly_payment1"
                                            class="border-0 w-100 border-bottom footer_field"> </div>
                                    <div class="d-flex">$<input type="text" name="minimun_monthly_payment2"
                                            class="border-0 w-100 border-bottom footer_field"> </div>
                                    <div class="d-flex">$<input type="text" name="minimun_monthly_payment3"
                                            class="border-0 w-100 border-bottom footer_field"> </div>
                                    <div class="d-flex">$<input type="text" name="minimun_monthly_payment4"
                                            class="border-0 w-100 border-bottom footer_field"> </div>
                                    <div class="d-flex">$<input type="text" name="minimun_monthly_payment5"
                                            class="border-0 w-100 border-bottom footer_field"> </div>
                                    <div class="d-flex">$<input type="text" name="minimun_monthly_payment6"
                                            class="border-0 w-100 border-bottom footer_field"> </div>
                                    <div class="d-flex">$<input type="text" name="minimun_monthly_payment7"
                                            class="border-0 w-100 border-bottom footer_field"> </div>
                                    <div class="d-flex">$<input type="text" name="minimun_monthly_payment8"
                                            class="border-0 w-100 border-bottom footer_field"> </div>

                                </div>
                                <div class="col-lg-3">
                                    <div class="text-center">Balance Due</div>
                                    <div class="d-flex pt-4">$<input type="text" name="balance_due1"
                                            class="border-0 w-100 border-bottom footer_field"> </div>
                                    <div class="d-flex">$<input type="text" name="balance_due2"
                                            class="border-0 w-100 border-bottom footer_field"> </div>
                                    <div class="d-flex">$<input type="text" name="balance_due3"
                                            class="border-0 w-100 border-bottom footer_field"> </div>
                                    <div class="d-flex">$<input type="text" name="balance_due4"
                                            class="border-0 w-100 border-bottom footer_field"> </div>
                                    <div class="d-flex">$<input type="text" name="balance_due5"
                                            class="border-0 w-100 border-bottom footer_field"> </div>
                                    <div class="d-flex">$<input type="text" name="balance_due6"
                                            class="border-0 w-100 border-bottom footer_field"> </div>
                                    <div class="d-flex">$<input type="text" name="balance_due7"
                                            class="border-0 w-100 border-bottom footer_field"> </div>
                                    <div class="d-flex">$<input type="text" name="balance_due8"
                                            class="border-0 w-100 border-bottom footer_field"> </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    @include('layouts.footer8', ['page' => 7])
                </section>
                <section class="section_area  px-lg-5 px-2 pt-5" id="last_section">
                    <div class="ps-lg-5 pt-5">
                        <div class="d-flex ps-lg-5">Are you involved in bankruptcy proceedings?
                            <span class="d-flex   ps-3">
                                <div class="d-flex pe-4">
                                    <input type="radio" name="involved_in_bankruptcy" value="Yes"
                                        class="me-1">
                                    <div>Yes</div>
                                </div>
                                <div class="d-flex">
                                    <input type="radio" name="involved_in_bankruptcy" value="No"
                                        class="me-1">
                                    <div>No</div>
                                </div>
                            </span>
                        </div>
                        <div class="d-flex ps-lg-5">Do you intend to file bankruptcy?
                            <span class="d-flex   ps-3">
                                <div class="d-flex   pe-4">
                                    <input type="radio" name="file_bankruptcy" value="Yes" class="me-1">
                                    <div>Yes</div>

                                </div>
                                <div class="d-flex  ">
                                    <input type="radio" name="file_bankruptcy" value="No" class="me-1">
                                    <div>No</div>

                                </div>
                            </span>
                        </div>

                    </div>
                    <div>12. <strong>Documentary Information: </strong> Provide your three (3) most recent paystubs from
                        your employment, your most recent Federal Tax Returns with all attachments, including W-2s and
                        1099s, and any statements from unemployment compensation, workers' compensation, social security
                        benefits statements, and all other documents evidencing earnings or income received during the
                        last three months, including any public financial assistance in money or in-kind services
                        (grants, heating assistance, rental assistance, etc.)</div>
                    <div><strong>NOTE:</strong> Certain information that is filed with the court may be considered
                        confidential based on court rule and not available to the public. To keep this information
                        confidential and not available to the public, you must use the Cover Sheet for Non-Public
                        Documents Form 11.2 (CON112) if you are filing paper documents. Filers who are using eFS to
                        submit their court documents must identify and designate their filings as required in Minn. Gen.
                        R. Prac. 11.03 and 14.06.</div>
                    <div class="pt-2 fw-bold">The failure to use Form 11.2 may result in your document being rejected
                        by court administration, being available to the public, stricken from the court record, and
                        sanctions from the court.
                    </div>
                    <div class="pt-3">The statements made by me in this Parenting / Financial Disclosure Statement
                        are true and correct to the best of my knowledge.</div>
                    <div class="w-100 mt-3">
                        <div class="row">
                            <div class="col-lg-6 col-sm-6">
                                <div class="col-lg-12 ">
                                    <div class="d-flex">
                                        <label for="">Date:</label>
                                        <input type="text" name="date" class="form-control ms-auto  border-none w-75 border-0 border-bottom footer_field shadow-none">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-sm-6">
                                <div class="col-lg-12 ">
                                    <input type="text" name="signature"
                                        class="form-control  border-none  border-0 border-bottom footer_field shadow-none">

                                    <div class="d-flex">Signature of

                                        <span class="d-flex ps-3">
                                            <div class="d-flex  pe-4">
                                                <input type="radio" name="signature_of" value="Petitioner"
                                                    class="me-1">
                                                <div>Petitioner</div>

                                            </div>
                                            <div class="d-flex  ">
                                                <input type="radio" name="signature_of" value="Respondent"
                                                    class="me-1">
                                                <div>Respondent</div>

                                            </div>
                                        </span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="w-100 mt-3">
                        <div class="row">
                            <div class="col-lg-6 col-sm-6">

                            </div>

                            <div class="col-lg-6 col-sm-6">
                                <div class="col-lg-12 ">
                                    <input type="text" name="signature_of_attorney"
                                        class="form-control  border-none  border-0 border-bottom footer_field shadow-none">
                                    <div class="">Signature of Attorney (if any)</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-100 mt-3">
                        <div class="row">
                            <div class="col-lg-6 col-sm-6">

                            </div>

                            <div class="col-lg-6 col-sm-6">
                                <div class="col-lg-12 ">
                                    <div class="d-flex">
                                        <label for="">Attorney ID:</label>
                                        <input type="text" name="attorney_id"
                                            class="form-control  ms-auto border-none w-75 border-0 border-bottom footer_field shadow-none">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-100 mt-3">
                        <div class="row">
                            <div class="col-lg-6 col-sm-6">

                            </div>

                            <div class="col-lg-6 col-sm-6">
                                <div class="col-lg-12 ">
                                    <div class="d-flex">
                                        <label for="">Name:</label>
                                        <input type="text" name="name"
                                            class="form-control ms-auto  border-none w-75 border-0 border-bottom footer_field shadow-none">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-100 mt-3">
                        <div class="row">
                            <div class="col-lg-6 col-sm-6">

                            </div>

                            <div class="col-lg-6 col-sm-6">
                                <div class="col-lg-12 ">
                                    <div class="d-flex">
                                        <label for="">Address:</label>
                                        <input type="text" name="address"
                                            class="form-control ms-auto  border-none w-75 border-0 border-bottom footer_field shadow-none">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-100 mt-3">
                        <div class="row">
                            <div class="col-lg-6 col-sm-6">

                            </div>

                            <div class="col-lg-6 col-sm-6">
                                <div class="col-lg-12 ">
                                    <div class="d-flex">
                                        <label for="">City/State/Zip:</label>
                                        <input type="text" name="zip"
                                            class="form-control ms-auto  border-none w-75 border-0 border-bottom footer_field shadow-none">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-100 mt-3">
                        <div class="row">
                            <div class="col-lg-6 col-sm-6">

                            </div>

                            <div class="col-lg-6 col-sm-6">
                                <div class="col-lg-12 ">
                                    <div class="d-flex">
                                        <label for="">Telephone:</label>
                                        <input type="text" name="telephone"
                                            class="form-control ms-auto  border-none w-75 border-0 border-bottom footer_field shadow-none">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-100 mt-3">
                        <div class="row">
                            <div class="col-lg-6 col-sm-6">
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="col-lg-12 ">
                                    <div class="d-flex">
                                        <label for="">E-mail address:</label>
                                        <input type="text" name="mail_address"
                                            class="form-control ms-auto  border-none w-75 border-0 border-bottom footer_field shadow-none">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @include('layouts.footer8', ['page' => 8])
                    @include('layouts.pagination', ['page' => 12 ])
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
