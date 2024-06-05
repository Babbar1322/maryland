{{-- fl161 CA.pdf --}}
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
            /* border-bottom: 2px solid black !important; */

        }

        .table> :not(caption)>*>* {
            background-color: white;
        }

        .section_area {
            background-color: white !important;
            margin: 10px !important;
            /* margin-top: 29px !important; */

        }

        /* .table-bordered > :not(caption) > * {
            border:none;
        } */

        .top:focus {
            /* border-bottom: none !important; */
        }

        input:focus-visible {
            outline: none !important;
            /* border-bottom: 2px solid black !important; */
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
    </style>
</head>

<body>
    <div class="container-fluid   py-1 py-lg-3">
        <div class="container bg_color p-lg-3 p-1  ">



            <form action="{{ route('form10.submit') }}" method="post">
                @csrf
                <section class="section_area  px-lg-5 px-2 " id="first_section">
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show">{{ session('success') }} <button
                                type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <div class="row      pt-2">
                        <div class="small_text text-end fw-bold">FL-161</div>
                        <div class="col-lg-8 border border-dark">


                            <div class="p-2   border-dark">

                                <div class="">
                                    <div class="d-flex ps-lg-5">
                                        <div class="small_text">PETITIONER
                                            :</div>
                                        <div> <input type="text" name="petitioner" class="border-0 "></div>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="d-flex ps-lg-5">
                                        <div class="small_text">RESPONDENT:</div>
                                        <div> <input type="text" name="respondent" class="border-0 "></div>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="d-flex ps-lg-5">
                                        <div class="small_text">OTHER PARENT/PARTY:</div>
                                        <div> <input type="text" name="other_party" class="border-0 "></div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-4 border border-dark">
                            <div class="small_text">CASE NUMBER:</div>
                            <input type="text" name="case_number" class="border-0 w-100">
                        </div>
                    </div>
                    <div class="    d-flex    pt-3 ">

                        <div class="d-flex gap-2">
                            <input type="radio" value="Yes" name="petitioner">
                            <label for="" class="fw-semibold">PETITIONER’S</label>
                        </div>
                        <div class="d-flex gap-2 ps-3">
                            <input type="radio" value="Yes" name="petitioner">
                            <label for="" class="fw-semibold"> RESPONDENT'S</label>
                        </div>
                    </div>
                    <div class="d-flex gap-2   pb-3">
                        <input type="radio" value="Yes" name="community"
                            value="COMMUNITY AND QUASI-COMMUNITY PROPERTY DECLARATION">
                        <label for="" class="fw-semibold">COMMUNITY AND QUASI-COMMUNITY PROPERTY
                            DECLARATION</label>
                    </div>
                    <div class="d-flex gap-2">
                        <input type="radio" value="Yes" name="community" value="SEPARATE PROPERTY DECLARATION">
                        <label for="" class="fw-semibold">SEPARATE PROPERTY DECLARATION</label>
                    </div>

                    <div class="table-responsive">
                        <table class="table-bordered border border-2 border-dark">
                            <thead>
                                <tr>
                                    <td></td>
                                    <td>A</td>
                                    <td>B</td>
                                    <td colspan="3"> C - D = E</td>
                                    <td colspan="3">F</td>
                                </tr>
                                <tr>
                                    <td class="text-center small_text">ITEM NO</td>
                                    <td class="text-center small_text">BRIEF DESCRIPTION</td>
                                    <td class="text-center small_text">DATE ACQUIRED (mm/dd/yyyy)</td>
                                    <td class="text-center small_text">GROSS FAIR MARKET VALUE</td>
                                    <td class="text-center small_text">AMOUNT OF DEBT</td>
                                    <td class="text-center small_text">NET FAIR MARKET VALUE</td>
                                    <td class="text-center small_text">PROPOSAL FOR DIVISION Award or Confirm to PETITIONER
                                        RESPONDENT</td>
                                </tr>

                                <tr>
                                    <td> </td>
                                    <td> </td>
                                    <td> $</td>
                                    <td> $</td>
                                    <td> $</td>
                                    <td> $</td>
                                    <td> $</td>
                                </tr>

                                <tr>
                                    <td> <input type="text" name="item1" class="w-100  border-0"></td>
                                    <td> <input type="text" name="brif_desc1" class="w-100  border-0"></td>
                                    <td> <input type="text" name="date_a1" class="w-100  border-0"></td>
                                    <td> <input type="text" name="gross_fair1" class="w-100  border-0"></td>
                                    <td> <input type="text" name="amount_debit1" class="w-100  border-0"></td>
                                    <td> <input type="text" name="net_fairmarkit1" class="w-100  border-0"></td>
                                    <td> <input type="text" name="proposal_division1" class="w-100  border-0">
                                    </td>
                                </tr>

                                <tr>
                                    <td> <input type="text" name="item2" class="w-100  border-0"></td>
                                    <td> <input type="text" name="brif_desc2" class="w-100  border-0"></td>
                                    <td> <input type="text" name="date_a2" class="w-100  border-0"></td>
                                    <td> <input type="text" name="gross_fair2" class="w-100  border-0"></td>
                                    <td> <input type="text" name="amount_debit2" class="w-100  border-0"></td>
                                    <td> <input type="text" name="net_fairmarkit2" class="w-100  border-0"></td>
                                    <td> <input type="text" name="proposal_division2" class="w-100  border-0">
                                    </td>
                                </tr>

                                <tr>
                                    <td> <input type="text" name="item3" class="w-100  border-0"></td>
                                    <td> <input type="text" name="brif_desc3" class="w-100  border-0"></td>
                                    <td> <input type="text" name="date_a3" class="w-100  border-0"></td>
                                    <td> <input type="text" name="gross_fair3" class="w-100  border-0"></td>
                                    <td> <input type="text" name="amount_debit3" class="w-100  border-0"></td>
                                    <td> <input type="text" name="net_fairmarkit3" class="w-100  border-0"></td>
                                    <td> <input type="text" name="proposal_division3" class="w-100  border-0">
                                    </td>
                                </tr>

                                <tr>
                                    <td> <input type="text" name="item4" class="w-100  border-0"></td>
                                    <td> <input type="text" name="brif_desc4" class="w-100  border-0"></td>
                                    <td> <input type="text" name="date_a4" class="w-100  border-0"></td>
                                    <td> <input type="text" name="gross_fair4" class="w-100  border-0"></td>
                                    <td> <input type="text" name="amount_debit4" class="w-100  border-0"></td>
                                    <td> <input type="text" name="net_fairmarkit4" class="w-100  border-0"></td>
                                    <td> <input type="text" name="proposal_division4" class="w-100  border-0">
                                    </td>
                                </tr>

                                <tr>
                                    <td> <input type="text" name="item5" class="w-100  border-0"></td>
                                    <td> <input type="text" name="brif_desc5" class="w-100  border-0"></td>
                                    <td> <input type="text" name="date_a5" class="w-100  border-0"></td>
                                    <td> <input type="text" name="gross_fair5" class="w-100  border-0"></td>
                                    <td> <input type="text" name="amount_debit5" class="w-100  border-0"></td>
                                    <td> <input type="text" name="net_fairmarkit5" class="w-100  border-0"></td>
                                    <td> <input type="text" name="proposal_division5" class="w-100  border-0">
                                    </td>
                                </tr>

                                <tr>
                                    <td> <input type="text" name="item6" class="w-100  border-0"></td>
                                    <td> <input type="text" name="brif_desc6" class="w-100  border-0"></td>
                                    <td> <input type="text" name="date_a6" class="w-100  border-0"></td>
                                    <td> <input type="text" name="gross_fair6" class="w-100  border-0"></td>
                                    <td> <input type="text" name="amount_debit6" class="w-100  border-0"></td>
                                    <td> <input type="text" name="net_fairmarkit6" class="w-100  border-0"></td>
                                    <td> <input type="text" name="proposal_division6" class="w-100  border-0">
                                    </td>
                                </tr>

                                <tr>
                                    <td> <input type="text" name="item7" class="w-100  border-0"></td>
                                    <td> <input type="text" name="brif_desc7" class="w-100  border-0"></td>
                                    <td> <input type="text" name="date_a7" class="w-100  border-0"></td>
                                    <td> <input type="text" name="gross_fair7" class="w-100  border-0"></td>
                                    <td> <input type="text" name="amount_debit7" class="w-100  border-0"></td>
                                    <td> <input type="text" name="net_fairmarkit7" class="w-100  border-0"></td>
                                    <td> <input type="text" name="proposal_division7" class="w-100  border-0">
                                    </td>
                                </tr>

                                <tr>
                                    <td> <input type="text" name="item8" class="w-100  border-0"></td>
                                    <td> <input type="text" name="brif_desc8" class="w-100  border-0"></td>
                                    <td> <input type="text" name="date_a8" class="w-100  border-0"></td>
                                    <td> <input type="text" name="gross_fair8" class="w-100  border-0"></td>
                                    <td> <input type="text" name="amount_debit8" class="w-100  border-0"></td>
                                    <td> <input type="text" name="net_fairmarkit8" class="w-100  border-0"></td>
                                    <td> <input type="text" name="proposal_division8" class="w-100  border-0">
                                    </td>
                                </tr>

                                <tr>
                                    <td> <input type="text" name="item9" class="w-100  border-0"></td>
                                    <td> <input type="text" name="brif_desc9" class="w-100  border-0"></td>
                                    <td> <input type="text" name="date_a9" class="w-100  border-0"></td>
                                    <td> <input type="text" name="gross_fair9" class="w-100  border-0"></td>
                                    <td> <input type="text" name="amount_debit9" class="w-100  border-0"></td>
                                    <td> <input type="text" name="net_fairmarkit9" class="w-100  border-0"></td>
                                    <td> <input type="text" name="proposal_division9" class="w-100  border-0">
                                    </td>
                                </tr>

                                <tr>
                                    <td> <input type="text" name="item10" class="w-100  border-0"></td>
                                    <td> <input type="text" name="brif_desc10" class="w-100  border-0"></td>
                                    <td> <input type="text" name="date_a10" class="w-100  border-0"></td>
                                    <td> <input type="text" name="gross_fair10" class="w-100  border-0"></td>
                                    <td> <input type="text" name="amount_debit10" class="w-100  border-0"></td>
                                    <td> <input type="text" name="net_fairmarkit10" class="w-100  border-0"></td>
                                    <td> <input type="text" name="proposal_division10" class="w-100  border-0">
                                    </td>
                                </tr>

                                <tr>
                                    <td> <input type="text" name="item11" class="w-100  border-0"></td>
                                    <td> <input type="text" name="brif_desc11" class="w-100  border-0"></td>
                                    <td> <input type="text" name="date_a11" class="w-100  border-0"></td>
                                    <td> <input type="text" name="gross_fair11" class="w-100  border-0"></td>
                                    <td> <input type="text" name="amount_debit11" class="w-100  border-0"></td>
                                    <td> <input type="text" name="net_fairmarkit11" class="w-100  border-0"></td>
                                    <td> <input type="text" name="proposal_division11" class="w-100  border-0">
                                    </td>
                                </tr>

                                <tr>
                                    <td> <input type="text" name="item12" class="w-100  border-0"></td>
                                    <td> <input type="text" name="brif_desc12" class="w-100  border-0"></td>
                                    <td> <input type="text" name="date_a12" class="w-100  border-0"></td>
                                    <td> <input type="text" name="gross_fair12" class="w-100  border-0"></td>
                                    <td> <input type="text" name="amount_debit12" class="w-100  border-0"></td>
                                    <td> <input type="text" name="net_fairmarkit12" class="w-100  border-0"></td>
                                    <td> <input type="text" name="proposal_division12" class="w-100  border-0">
                                    </td>
                                </tr>

                                <tr>
                                    <td> <input type="text" name="item13" class="w-100  border-0"></td>
                                    <td> <input type="text" name="brif_desc13" class="w-100  border-0"></td>
                                    <td> <input type="text" name="date_a13" class="w-100  border-0"></td>
                                    <td> <input type="text" name="gross_fair13" class="w-100  border-0"></td>
                                    <td> <input type="text" name="amount_debit13" class="w-100  border-0"></td>
                                    <td> <input type="text" name="net_fairmarkit13" class="w-100  border-0"></td>
                                    <td> <input type="text" name="proposal_division13" class="w-100  border-0">
                                    </td>
                                </tr>

                                <tr>
                                    <td> <input type="text" name="item14" class="w-100  border-0"></td>
                                    <td> <input type="text" name="brif_desc14" class="w-100  border-0"></td>
                                    <td> <input type="text" name="date_a14" class="w-100  border-0"></td>
                                    <td> <input type="text" name="gross_fair14" class="w-100  border-0"></td>
                                    <td> <input type="text" name="amount_debit14" class="w-100  border-0"></td>
                                    <td> <input type="text" name="net_fairmarkit14" class="w-100  border-0"></td>
                                    <td> <input type="text" name="proposal_division14" class="w-100  border-0">
                                    </td>
                                </tr>

                                <tr>
                                    <td> <input type="text" name="item15" class="w-100  border-0"></td>
                                    <td> <input type="text" name="brif_desc15" class="w-100  border-0"></td>
                                    <td> <input type="text" name="date_a15" class="w-100  border-0"></td>
                                    <td> <input type="text" name="gross_fair15" class="w-100  border-0"></td>
                                    <td> <input type="text" name="amount_debit15" class="w-100  border-0"></td>
                                    <td> <input type="text" name="net_fairmarkit15" class="w-100  border-0"></td>
                                    <td> <input type="text" name="proposal_division15" class="w-100  border-0">
                                    </td>
                                </tr>
                                <tr>
                                    <td> <input type="text" name="item16" class="w-100  border-0"></td>
                                    <td> <input type="text" name="brif_desc16" class="w-100  border-0"></td>
                                    <td> <input type="text" name="date_a16" class="w-100  border-0"></td>
                                    <td> <input type="text" name="gross_fair16" class="w-100  border-0"></td>
                                    <td> <input type="text" name="amount_debit16" class="w-100  border-0"></td>
                                    <td> <input type="text" name="net_fairmarkit16" class="w-100  border-0"></td>
                                    <td> <input type="text" name="proposal_division16" class="w-100  border-0">
                                    </td>
                                </tr>
                                <tr>
                                    <td> <input type="text" name="item17" class="w-100  border-0"></td>
                                    <td> <input type="text" name="brif_desc17" class="w-100  border-0"></td>
                                    <td> <input type="text" name="date_a17" class="w-100  border-0"></td>
                                    <td> <input type="text" name="gross_fair17" class="w-100  border-0"></td>
                                    <td> <input type="text" name="amount_debit17" class="w-100  border-0"></td>
                                    <td> <input type="text" name="net_fairmarkit17" class="w-100  border-0"></td>
                                    <td> <input type="text" name="proposal_division17" class="w-100  border-0">
                                    </td>
                                </tr>
                                <tr>
                                    <td> <input type="text" name="item18" class="w-100  border-0"></td>
                                    <td> <input type="text" name="brif_desc18" class="w-100  border-0"></td>
                                    <td> <input type="text" name="date_a18" class="w-100  border-0"></td>
                                    <td> <input type="text" name="gross_fair18" class="w-100  border-0"></td>
                                    <td> <input type="text" name="amount_debit18" class="w-100  border-0"></td>
                                    <td> <input type="text" name="net_fairmarkit18" class="w-100  border-0"></td>
                                    <td> <input type="text" name="proposal_division18" class="w-100  border-0">
                                    </td>
                                </tr>
                                <tr>
                                    <td> <input type="text" name="item19" class="w-100  border-0"></td>
                                    <td> <input type="text" name="brif_desc19" class="w-100  border-0"></td>
                                    <td> <input type="text" name="date_a19" class="w-100  border-0"></td>
                                    <td> <input type="text" name="gross_fair19" class="w-100  border-0"></td>
                                    <td> <input type="text" name="amount_debit19" class="w-100  border-0"></td>
                                    <td> <input type="text" name="net_fairmarkit19" class="w-100  border-0"></td>
                                    <td> <input type="text" name="proposal_division19" class="w-100  border-0">
                                    </td>
                                </tr>
                                <tr>
                                    <td> <input type="text" name="item20" class="w-100  border-0"></td>
                                    <td> <input type="text" name="brif_desc20" class="w-100  border-0"></td>
                                    <td> <input type="text" name="date_a20" class="w-100  border-0"></td>
                                    <td> <input type="text" name="gross_fair20" class="w-100  border-0"></td>
                                    <td> <input type="text" name="amount_debit20" class="w-100  border-0"></td>
                                    <td> <input type="text" name="net_fairmarkit20" class="w-100  border-0"></td>
                                    <td> <input type="text" name="proposal_division20" class="w-100  border-0">
                                    </td>
                                </tr>
                            </thead>
                        </table>
                    </div>
                    <div class="small_text text-end fw-bold">Page 1 of 2</div>
                    <div class="border-bottom border-dark "></div>

                    <div class="row pb-5">
                        <div class="col-md-4 lh-1 py-2">
                            <h4 class="fs-6">Form Adopted for Mandatory Use</h4>
                            <div class="fs-6">Judicial Council of California</div>
                            <div class="fs-6">FL-161 [Rev. July 1, 2013]</div>
                        </div>
                        <div class="col-md-4 text-center">
                            <h4 class="mb-0 fw-bold">DECLARATION OF DISCLOSURE</h4>
                            <h4 class="mb-0 ">(Family Law)</h4>
                        </div>
                        <div class="col-md-4 text-end">
                            <h4 class="mb-0 fs-6">Family Code, §§ 2102, 2104,</h4>
                            <h4 class="mb-0 fs-6">2105, 2106, 2112</h4>
                            <a href="#" class="text-decoration-none text-dark fs-6">
                                www.courts.ca.gov</a>
                        </div>
                    </div>
                </section>
                <section class="section_area  px-lg-5 px-2 " id="last_section">
                    <div class="table-responsive pt-5">
                        <table class="table-bordered border border-2 border-dark">
                            <thead>
                                <tr>
                                    <td></td>
                                    <td>A</td>
                                    <td>B</td>
                                    <td> C </td>
                                    <td colspan="2">D</td>
                                </tr>
                                <tr>
                                    <td class="text-center small_text">ITEM NO</td>
                                    <td class="text-center small_text">DEBTS— SHOW TO WHOM OWED</td>
                                    <td class="text-center small_text">DATE INCURRED</td>
                                    <td class="text-center small_text">AMOUNT OF DEBT</td>
                                    <td class="text-center small_text">PROPOSAL FOR DIVISION Award or Confirm to PETITIONER RESPONDENT</td>
                                </tr>
                                <tr>
                                    <td> </td>
                                    <td>  </td>
                                    <td> $</td>
                                    <td> $</td>
                                    <td> $</td>
                                </tr>

                                <tr>
                                    <td> <input type="text" name="item21" class="w-100  border-0"></td>
                                    <td> <input type="text" name="debts_show21" class="w-100  border-0"></td>
                                    <td> <input type="text" name="date_i21" class="w-100  border-0"></td>
                                    <td> <input type="text" name="amount_debit21" class="w-100  border-0"></td>
                                    <td> <input type="text" name="proposal_division21" class="w-100  border-0">
                                    </td>
                                </tr>
                                <tr>
                                    <td> <input type="text" name="item22" class="w-100  border-0"></td>
                                    <td> <input type="text" name="debts_show22" class="w-100  border-0"></td>
                                    <td> <input type="text" name="date_i22" class="w-100  border-0"></td>
                                    <td> <input type="text" name="amount_debit22" class="w-100  border-0"></td>
                                    <td> <input type="text" name="proposal_division22" class="w-100  border-0">
                                    </td>
                                </tr>
                                <tr>
                                    <td> <input type="text" name="item23" class="w-100  border-0"></td>
                                    <td> <input type="text" name="debts_show23" class="w-100  border-0"></td>
                                    <td> <input type="text" name="date_i23" class="w-100  border-0"></td>
                                    <td> <input type="text" name="amount_debit23" class="w-100  border-0"></td>
                                    <td> <input type="text" name="proposal_division23" class="w-100  border-0">
                                    </td>
                                </tr>
                                <tr>
                                    <td> <input type="text" name="item24" class="w-100  border-0"></td>
                                    <td> <input type="text" name="debts_show24" class="w-100  border-0"></td>
                                    <td> <input type="text" name="date_i24" class="w-100  border-0"></td>
                                    <td> <input type="text" name="amount_debit24" class="w-100  border-0"></td>
                                    <td> <input type="text" name="proposal_division24" class="w-100  border-0">
                                    </td>
                                </tr>
                                <tr>
                                    <td> <input type="text" name="item25" class="w-100  border-0"></td>
                                    <td> <input type="text" name="debts_show25" class="w-100  border-0"></td>
                                    <td> <input type="text" name="date_i25" class="w-100  border-0"></td>
                                    <td> <input type="text" name="amount_debit25" class="w-100  border-0"></td>
                                    <td> <input type="text" name="proposal_division25" class="w-100  border-0">
                                    </td>
                                </tr>
                                <tr>
                                    <td> <input type="text" name="item26" class="w-100  border-0"></td>
                                    <td> <input type="text" name="debts_show26" class="w-100  border-0"></td>
                                    <td> <input type="text" name="date_i26" class="w-100  border-0"></td>
                                    <td> <input type="text" name="amount_debit26" class="w-100  border-0"></td>
                                    <td> <input type="text" name="proposal_division26" class="w-100  border-0">
                                    </td>
                                </tr>
                                <tr>
                                    <td> <input type="text" name="item27" class="w-100  border-0"></td>
                                    <td> <input type="text" name="debts_show27" class="w-100  border-0"></td>
                                    <td> <input type="text" name="date_i27" class="w-100  border-0"></td>
                                    <td> <input type="text" name="amount_debit27" class="w-100  border-0"></td>
                                    <td> <input type="text" name="proposal_division27" class="w-100  border-0">
                                    </td>
                                </tr>
                                <tr>
                                    <td> <input type="text" name="item28" class="w-100  border-0"></td>
                                    <td> <input type="text" name="debts_show28" class="w-100  border-0"></td>
                                    <td> <input type="text" name="date_i28" class="w-100  border-0"></td>
                                    <td> <input type="text" name="amount_debit28" class="w-100  border-0"></td>
                                    <td> <input type="text" name="proposal_division28" class="w-100  border-0">
                                    </td>
                                </tr>
                                <tr>
                                    <td> <input type="text" name="item29" class="w-100  border-0"></td>
                                    <td> <input type="text" name="debts_show29" class="w-100  border-0"></td>
                                    <td> <input type="text" name="date_i29" class="w-100  border-0"></td>
                                    <td> <input type="text" name="amount_debit29" class="w-100  border-0"></td>
                                    <td> <input type="text" name="proposal_division29" class="w-100  border-0">
                                    </td>
                                </tr>
                                <tr>
                                    <td> <input type="text" name="item30" class="w-100  border-0"></td>
                                    <td> <input type="text" name="debts_show30" class="w-100  border-0"></td>
                                    <td> <input type="text" name="date_i30" class="w-100  border-0"></td>
                                    <td> <input type="text" name="amount_debit30" class="w-100  border-0"></td>
                                    <td> <input type="text" name="proposal_division30" class="w-100  border-0">
                                    </td>
                                </tr>
                                <tr>
                                    <td> <input type="text" name="item31" class="w-100  border-0"></td>
                                    <td> <input type="text" name="debts_show31" class="w-100  border-0"></td>
                                    <td> <input type="text" name="date_i31" class="w-100  border-0"></td>
                                    <td> <input type="text" name="amount_debit31" class="w-100  border-0"></td>
                                    <td> <input type="text" name="proposal_division31" class="w-100  border-0">
                                    </td>
                                </tr>
                                <tr>
                                    <td> <input type="text" name="item32" class="w-100  border-0"></td>
                                    <td> <input type="text" name="debts_show32" class="w-100  border-0"></td>
                                    <td> <input type="text" name="date_i32" class="w-100  border-0"></td>
                                    <td> <input type="text" name="amount_debit32" class="w-100  border-0"></td>
                                    <td> <input type="text" name="proposal_division32" class="w-100  border-0">
                                    </td>
                                </tr>
                                <tr>
                                    <td> <input type="text" name="item33" class="w-100  border-0"></td>
                                    <td> <input type="text" name="debts_show33" class="w-100  border-0"></td>
                                    <td> <input type="text" name="date_i33" class="w-100  border-0"></td>
                                    <td> <input type="text" name="amount_debit33" class="w-100  border-0"></td>
                                    <td> <input type="text" name="proposal_division33" class="w-100  border-0">
                                    </td>
                                </tr>
                                <tr>
                                    <td> <input type="text" name="item34" class="w-100  border-0"></td>
                                    <td> <input type="text" name="debts_show34" class="w-100  border-0"></td>
                                    <td> <input type="text" name="date_i34" class="w-100  border-0"></td>
                                    <td> <input type="text" name="amount_debit34" class="w-100  border-0"></td>
                                    <td> <input type="text" name="proposal_division34" class="w-100  border-0">
                                    </td>
                                </tr>
                                <tr>
                                    <td> <input type="text" name="item35" class="w-100  border-0"></td>
                                    <td> <input type="text" name="debts_show35" class="w-100  border-0"></td>
                                    <td> <input type="text" name="date_i35" class="w-100  border-0"></td>
                                    <td> <input type="text" name="amount_debit35" class="w-100  border-0"></td>
                                    <td> <input type="text" name="proposal_division35" class="w-100  border-0">
                                    </td>
                                </tr>
                                <tr>
                                    <td> <input type="text" name="item36" class="w-100  border-0"></td>
                                    <td> <input type="text" name="debts_show36" class="w-100  border-0"></td>
                                    <td> <input type="text" name="date_i36" class="w-100  border-0"></td>
                                    <td> <input type="text" name="amount_debit36" class="w-100  border-0"></td>
                                    <td> <input type="text" name="proposal_division36" class="w-100  border-0">
                                    </td>
                                </tr>
                                <tr>
                                    <td> <input type="text" name="item37" class="w-100  border-0"></td>
                                    <td> <input type="text" name="debts_show37" class="w-100  border-0"></td>
                                    <td> <input type="text" name="date_i37" class="w-100  border-0"></td>
                                    <td> <input type="text" name="amount_debit37" class="w-100  border-0"></td>
                                    <td> <input type="text" name="proposal_division37" class="w-100  border-0">
                                    </td>
                                </tr>
                                <tr>
                                    <td> <input type="text" name="item38" class="w-100  border-0"></td>
                                    <td> <input type="text" name="debts_show38" class="w-100  border-0"></td>
                                    <td> <input type="text" name="date_i38" class="w-100  border-0"></td>
                                    <td> <input type="text" name="amount_debit38" class="w-100  border-0"></td>
                                    <td> <input type="text" name="proposal_division38" class="w-100  border-0">
                                    </td>
                                </tr>
                                <tr>
                                    <td> <input type="text" name="item39" class="w-100  border-0"></td>
                                    <td> <input type="text" name="debts_show39" class="w-100  border-0"></td>
                                    <td> <input type="text" name="date_i39" class="w-100  border-0"></td>
                                    <td> <input type="text" name="amount_debit39" class="w-100  border-0"></td>
                                    <td> <input type="text" name="proposal_division39" class="w-100  border-0">
                                    </td>
                                </tr>
                                <tr>
                                    <td> <input type="text" name="item40" class="w-100  border-0"></td>
                                    <td> <input type="text" name="debts_show40" class="w-100  border-0"></td>
                                    <td> <input type="text" name="date_i40" class="w-100  border-0"></td>
                                    <td> <input type="text" name="amount_debit40" class="w-100  border-0"></td>
                                    <td> <input type="text" name="proposal_division40" class="w-100  border-0">
                                    </td>
                                </tr>
                            </thead>
                        </table>
                    </div>
                    <div class="border-bottom border-dark pt-3"></div>
                    <div class="row pb-5">
                        <div class="col-md-4 lh-1 py-2">
                            <div class="fs-6">FL-161 [Rev. July 1, 2013]</div>
                        </div>
                        <div class="col-md-4 text-center">
                            <h4 class="mb-0 fw-bold">DECLARATION OF DISCLOSURE</h4>
                            <h4 class="mb-0 ">(Family Law)</h4>
                        </div>
                        <div class="col-md-4 text-end">
                            <h4 class="mb-0 fs-6">Page 2 of 2</h4>
                        </div>
                    </div>
                    <div class="row pb-4">
                        <div class="col-lg-4  mt-3 mt-lg-0 small_text text-danger fw-bold "> <div style="background-color:#99CCFF"> For your protection and privacy, please press the Clear
                            This Form button after you have printed the form. </div></div>
                        <div class="col-lg-4  mt-3 mt-lg-0 text-center mx-auto">
                            <button class="  btn-success" onclick="window.print()"
                                style="background-color: #91FF90">Print this form</button>
                            <button type="submit" class="  btn-warning" style="background-color: #FEFE98">Save this
                                form</button>
                        </div>
                        <div class="col-lg-4 my-3 my-lg-0 text-center mx-auto">
                            <button type="reset" style="background-color: #F59292 ">Clear this form</button>
                        </div>
                    </div>


                    @include('layouts.pagination', ['page' => 10])

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
