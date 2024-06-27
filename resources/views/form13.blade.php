{{-- fl142  CA.pdf --}}
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
        .backdrop_filter{
            backdrop-filter: blur(5px) !important;
            -webkit-backdrop-filter: blur(5px) !important;
        }
    </style>
</head>

<body>
    <div class="container-fluid py-1 py-lg-3">
    <form action="{{ route('form13.submit') }}" method="post">
      @csrf
        <div class="container bg_color p-lg-3 p-1">
                <section class="section_area" id="first_section">

                    <div class="row  px-lg-5 px-2 pt-2">
                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show mt-lg-3">{{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                        <div class="small_text text-end fw-bold">FL-142</div>
                        <div class="border border-dark p-0">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="small_text">ATTORNEY OR PARTY WITHOUT ATTORNEY (Name and Address):</div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="d-flex">
                                        <div class="small_text">TELEPHONE NO.:</div>
                                        <div> <input type="text" name="FL-142[0].Page1[0].P1Caption[0].AttyPartyInfo[0].Phone[0]" class="border-0 table_input"></div>
                                    </div>
                                </div>
                            </div>
                            <textarea name="FL-142[0].Page1[0].P1Caption[0].AttyPartyInfo[0].TextField1[0]" class="form-control" rows="5"></textarea>
                            <div class="d-flex pt-3">
                                <div class="small_text">ATTORNEY FOR (Name):</div>
                                <div> <input type="text" name="FL-142[0].Page1[0].P1Caption[0].AttyPartyInfo[0].Email[0]" class="border-0 table_input "></div>
                            </div>
                        </div>
                        <div class="p-2 border border-dark">
                            <div class="">
                                <div>
                                    <div>SUPERIOR COURT OF CALIFORNIA, COUNTY OF</div>
                                    <div> <input type="text" name="FL-142[0].Page1[0].P1Caption[0].CourtInfo[0].CrtCounty[0]" class="border-0 table_input w-100 ">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="p-2 border border-dark">

                            <div>
                                <div class="d-flex w-100">
                                    <div class="small_text">PETITIONER:</div>
                                    <div> <input type="text" name="FL-142[0].Page1[0].P1Caption[0].TitlePartyName[0].Party1[0]"
                                            class="border-0 table_input w-100"></div>
                                </div>
                            </div>
                            <div>
                                <div class="d-flex">
                                    <div class="small_text">RESPONDENT:</div>
                                    <div> <input type="text" name="FL-142[0].Page1[0].P1Caption[0].TitlePartyName[0].Party2[0]" class="border-0 table_input ">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row px-lg-5 px-2 py-2 pt-0">
                        <div class="col-lg-8 border border-dark">
                            <div class="text-center">SCHEDULE OF ASSETS AND DEBTS</div>
                            <div class="d-flex justify-content-center">
                                <div class="d-flex gap-2">
                                    <input type="checkbox" value="On" name="FL-142[0].Page1[0].P1Caption[0].FormTitle[0].RB2Choice2[0]">
                                    <label for="" class="">Petitioner's</label>
                                </div>
                                <div class="d-flex gap-2 ps-3">
                                    <input type="checkbox" value="On" name="FL-142[0].Page1[0].P1Caption[0].FormTitle[0].RB2Choice2[1]">
                                    <label for="" class=""> Respondent's</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 border border-dark">
                            <div class="small_text">CASE NUMBER:</div>
                            <input type="text" name="FL-142[0].Page1[0].P1Caption[0].CaseNumber[0].CaseNumber[0]" class="border-0 table_input w-100">
                        </div>
                    </div>
                    <div class="px-lg-5 px-2 row">
                        <div class="p-2">
                            <div class="text-center "> — INSTRUCTIONS — </div>
                            <div class="lh-1">List all your known community and separate assets or debts. Include
                                assets even if they are in the possession of another person, including your spouse. If
                                you contend an asset or debt is separate, put P (for Petitioner) or R (for Respondent)
                                in the first column (separate property) to indicate to whom you contend it belongs.
                            </div>
                            <div class="lh-1 pt-3"> All values should be as of the date of signing the declaration
                                unless you specify a different valuation date with the description. For additional
                                space, use a continuation sheet numbered to show which item is being continued</div>
                        </div>
                        <div class="table-responsive">
                            <table class="table-bordered border border-2 border-dark">
                                <thead>
                                    <tr>
                                        <td colspan="2" class="text-center">
                                            <div class="d-flex gap-5 justify-content-center">
                                                <span>ITEM NO.</span>
                                                <span>ASSETS DESCRIPTION</span>
                                            </div>
                                        </td>
                                        <td class="text-center">SEP.PROP</td>
                                        <td>DATE ACQUIRED</td>
                                        <td>CURRENT GROSS FAIR MARKET VALUE</td>
                                        <td>AMOUNT OF MONEY OWED OR ENCUMBRANCE</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td colspan="2" class="small_text p-0">
                                            1. REAL ESTATE (Give street addresses and attach copies of deeds with legal
                                            descriptions and latest lender's statement.)
                                            <textarea name="FL-142[0].Page1[0].Table1[0].Row2[0].on_date[0]" id="" class="form-control" rows="12"></textarea>
                                        </td>
                                        <td class="small_text p-0">
                                            <textarea name="FL-142[0].Page1[0].Table1[0].Row2[0].TextField1[0]" id="" class="form-control" rows="14"></textarea>
                                        </td>
                                        <td class="small_text p-0">
                                            <textarea name="FL-142[0].Page1[0].Table1[0].Row2[0].TextField7[0]" id="" class="form-control" rows="14"></textarea>
                                        </td>
                                        <td class="small_text p-0 d-flex">$
                                            <textarea name="FL-142[0].Page1[0].Table1[0].Row2[0].DecimalField44[0]" id="" class="form-control" rows="14"></textarea>
                                        </td>

                                        <td class="small_text p-0">
                                            <div class="d-flex">$
                                                <textarea name="FL-142[0].Page1[0].Table1[0].Row2[0].DecimalField5[0]" id="" class="form-control" rows="14"></textarea>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="small_text p-0">
                                            2. HOUSEHOLD FURNITURE, FURNISHINGS, APPLIANCES (Identify.)
                                            <textarea name="FL-142[0].Page1[0].Table1[0].Row3[0].on_date[0]" id="" class="form-control" rows="7"></textarea>
                                        </td>
                                        <td class="small_text p-0">
                                            <textarea name="FL-142[0].Page1[0].Table1[0].Row3[0].TextField1[0]" id="" class="form-control" rows="8"></textarea>
                                        </td>
                                        <td class="small_text p-0">
                                            <textarea name="FL-142[0].Page1[0].Table1[0].Row3[0].TextField6[0]" id="" class="form-control" rows="8"></textarea>
                                        </td>
                                        <td class="small_text p-0">
                                            <textarea name="FL-142[0].Page1[0].Table1[0].Row3[0].DecimalField4[0]" id="" class="form-control" rows="8"></textarea>
                                        </td>
                                        <td class="small_text p-0">
                                            <textarea name="FL-142[0].Page1[0].Table1[0].Row3[0].DecimalField3[0]" id="" class="form-control" rows="8"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="small_text p-0">
                                            3. JEWELRY, ANTIQUES, ART, COIN COLLECTIONS, etc.(Identify.)
                                            <textarea name="FL-142[0].Page1[0].Table1[0].Row4[0].on_date[0]" id="" class="form-control" rows="4"></textarea>
                                        </td>
                                        <td class="small_text p-0">
                                            <textarea name="FL-142[0].Page1[0].Table1[0].Row4[0].TextField1[0]" id="" class="form-control" rows="5"></textarea>
                                        </td>
                                        <td class="small_text p-0">
                                            <textarea name="FL-142[0].Page1[0].Table1[0].Row4[0].TextField5[0]" id="" class="form-control" rows="5"></textarea>
                                        </td>
                                        <td class="small_text p-0">
                                            <textarea name="FL-142[0].Page1[0].Table1[0].Row4[0].DecimalField2[0]" id="" class="form-control" rows="5"></textarea>
                                        </td>
                                        <td class="small_text p-0">
                                            <textarea name="FL-142[0].Page1[0].Table1[0].Row4[0].DecimalField1[0]" id="" class="form-control" rows="5"></textarea>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        @include('layouts.footer9', ['page' => 1])
                    </div>
                </section>

                <section class="section_area  px-lg-5 px-2 " id="second_section">
                    <div class="table-responsive pt-5">
                        <table class="table-bordered border border-2 border-dark">
                            <thead>
                                <tr>
                                    <td colspan="2" class="text-center">
                                        <div class="d-flex gap-5 justify-content-center">
                                            <span>ITEM NO.</span>
                                            <span>ASSETS DESCRIPTION</span>
                                        </div>
                                    </td>
                                    <td class="text-center">SEP.PROP</td>
                                    <td>DATE ACQUIRED</td>
                                    <td>CURRENT GROSS FAIR MARKET VALUE</td>
                                    <td>AMOUNT OF MONEY OWED OR ENCUMBRANCE</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="2" class="small_text p-0">
                                        4. VEHICLES, BOATS, TRAILERS (Describe and attach copy of title document.)

                                        <textarea name="FL-142[0].Page2[0].Table2[0].Row2[0].on_date[0]" id="" class="form-control" rows="12"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="FL-142[0].Page2[0].Table2[0].Row2[0].TextField1[0]" id="" class="form-control" rows="14"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="FL-142[0].Page2[0].Table2[0].Row2[0].TextField10[0]" id="" class="form-control" rows="14"></textarea>
                                    </td>
                                    <td class="small_text p-0 d-flex">$
                                        <textarea name="FL-142[0].Page2[0].Table2[0].Row2[0].DecimalField12[0]" id="" class="form-control" rows="14"></textarea>
                                    </td>

                                    <td class="small_text p-0">
                                        <div class="d-flex">$
                                            <textarea name="FL-142[0].Page2[0].Table2[0].Row2[0].DecimalField7[0]" id="" class="form-control" rows="14"></textarea>
                                        </div>
                                    </td>

                                </tr>
                                <tr>
                                    <td colspan="2" class="small_text p-0">
                                        5. SAVINGS ACCOUNTS (Account name, account number, bank, and branch. Attach copy of latest statement.)
                                        <textarea name="FL-142[0].Page2[0].Table2[0].Row3[0].on_date[0]" id="" class="form-control" rows="6"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="FL-142[0].Page2[0].Table2[0].Row3[0].TextField1[0]" id="" class="form-control" rows="8"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="FL-142[0].Page2[0].Table2[0].Row3[0].TextField9[0]" id="" class="form-control" rows="8"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="FL-142[0].Page2[0].Table2[0].Row3[0].DecimalField11[0]" id="" class="form-control" rows="8"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="FL-142[0].Page2[0].Table2[0].Row3[0].DecimalField8[0]" id="" class="form-control" rows="8"></textarea>
                                    </td>

                                </tr>
                                <tr>
                                    <td colspan="2" class="small_text p-0">
                                        6. CHECKING ACCOUNTS (Account name and number, bank, and branch. Attach copy of
                                        latest statement.)
                                        <textarea name="FL-142[0].Page2[0].Table2[0].Row4[0].on_date[0]" id="" class="form-control" rows="4"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="FL-142[0].Page2[0].Table2[0].Row4[0].TextField1[0]" id="" class="form-control" rows="6"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="FL-142[0].Page2[0].Table2[0].Row4[0].TextField8[0]" id="" class="form-control" rows="6"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="FL-142[0].Page2[0].Table2[0].Row4[0].DecimalField10[0]" id="" class="form-control" rows="6"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="FL-142[0].Page2[0].Table2[0].Row4[0].DecimalField9[0]" id="" class="form-control" rows="6"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="small_text p-0">
                                        7. CREDIT UNION, OTHER DEPOSIT ACCOUNTS (Account name and number, bank, and
                                        branch. Attach copy of latest statement.)
                                        <textarea name="FL-142[0].Page2[0].Table2[0].Row5[0].on_date[0]" id="" class="form-control" rows="7"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="FL-142[0].Page2[0].Table2[0].Row5[0].TextField1[0]" id="" class="form-control" rows="9"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="FL-142[0].Page2[0].Table2[0].Row5[0].TextField14[0]" id="" class="form-control" rows="9"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="FL-142[0].Page2[0].Table2[0].Row5[0].DecimalField20[0]" id="" class="form-control" rows="9"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="FL-142[0].Page2[0].Table2[0].Row5[0].DecimalField19[0]" id="" class="form-control" rows="9"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="small_text p-0">
                                        8. CASH (Give location.)
                                        <textarea name="FL-142[0].Page2[0].Table2[0].Row6[0].on_date[0]" id="" class="form-control" rows="6"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="FL-142[0].Page2[0].Table2[0].Row6[0].TextField1[0]" id="" class="form-control" rows="7"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="FL-142[0].Page2[0].Table2[0].Row6[0].TextField13[0]" id="" class="form-control" rows="7"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="FL-142[0].Page2[0].Table2[0].Row6[0].DecimalField18[0]" id="" class="form-control" rows="7"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="FL-142[0].Page2[0].Table2[0].Row6[0].DecimalField17[0]" id="" class="form-control" rows="7"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="small_text p-0">
                                        9. TAX REFUND
                                        <textarea name="FL-142[0].Page2[0].Table2[0].Row7[0].on_date[0]" id="" class="form-control" rows="6"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="FL-142[0].Page2[0].Table2[0].Row7[0].TextField1[0]" id="" class="form-control" rows="7"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="FL-142[0].Page2[0].Table2[0].Row7[0].TextField12[0]" id="" class="form-control" rows="7"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="FL-142[0].Page2[0].Table2[0].Row7[0].DecimalField16[0]" id="" class="form-control" rows="7"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="FL-142[0].Page2[0].Table2[0].Row7[0].DecimalField15[0]" id="" class="form-control" rows="7"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="small_text p-0">
                                        10. LIFE INSURANCE WITH CASH SURRENDER OR LOAN VALUE (Attach copy of declaration page for each policy.)
                                        <textarea name="FL-142[0].Page2[0].Table2[0].Row8[0].on_date[0]" id="" class="form-control" rows="5"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="FL-142[0].Page2[0].Table2[0].Row8[0].TextField1[0]" id="" class="form-control" rows="7"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="FL-142[0].Page2[0].Table2[0].Row8[0].TextField11[0]" id="" class="form-control" rows="7"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="FL-142[0].Page2[0].Table2[0].Row8[0].DecimalField14[0]" id="" class="form-control" rows="7"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="FL-142[0].Page2[0].Table2[0].Row8[0].DecimalField13[0]" id="" class="form-control" rows="7"></textarea>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    @include('layouts.footer9', ['page' => 2])
                </section>
                <section class="section_area  px-lg-5 px-2" id="third_section">
                    <div class="table-responsive pt-5">
                        <table class="table-bordered border border-2 border-dark">
                            <thead>
                                <tr>
                                    <td colspan="2" class="text-center">
                                        <div class="d-flex gap-5 justify-content-center">
                                            <span>ITEM NO.</span>
                                            <span>ASSETS DESCRIPTION</span>
                                        </div>
                                    </td>
                                    <td class="text-center">SEP.PROP</td>
                                    <td>DATE ACQUIRED</td>
                                    <td>CURRENT GROSS FAIR MARKET VALUE</td>
                                    <td>AMOUNT OF MONEY OWED OR ENCUMBRANCE</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="2" class="small_text p-0">
                                        11. STOCKS, BONDS, SECURED NOTES, MUTUAL FUNDS
                                        (Give certificate number and attach copy of the certificate or
                                        copy of latest statement.)
                                        <textarea name="FL-142[0].Page3[0].Table3[0].Row2[0].on_date[0]" id="" class="form-control" rows="7"></textarea>
                                    </td>

                                    <td class="small_text p-0">
                                        <textarea name="FL-142[0].Page3[0].Table3[0].Row2[0].TextField1[0]" id="" class="form-control" rows="9"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="FL-142[0].Page3[0].Table3[0].Row2[0].TextField2[0]" id="" class="form-control" rows="9"></textarea>
                                    </td>
                                    <td class="small_text p-0 d-flex">$
                                        <textarea name="FL-142[0].Page3[0].Table3[0].Row2[0].TextFiel3[0]" id="" class="form-control" rows="9"></textarea>
                                    </td>

                                    <td class="small_text p-0">
                                        <div class="d-flex">$
                                            <textarea name="FL-142[0].Page3[0].Table3[0].Row2[0].DecimalField21[0]" id="" class="form-control" rows="9"></textarea>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="small_text p-0">
                                        12. RETIREMENT AND PENSIONS (Attach copy of latest
                                        summary plan documents and latest benefit statement.)
                                        <textarea name="FL-142[0].Page3[0].Table3[0].Row3[0].on_date[0]" id="" class="form-control" rows="8"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="FL-142[0].Page3[0].Table3[0].Row3[0].TextField1[0]" id="" class="form-control" rows="10"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="FL-142[0].Page3[0].Table3[0].Row3[0].TextField2[0]" id="" class="form-control" rows="10"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="FL-142[0].Page3[0].Table3[0].Row3[0].DecimalField25[0]" id="" class="form-control" rows="10"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="FL-142[0].Page3[0].Table3[0].Row3[0].DecimalField22[0]" id="" class="form-control" rows="10"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="small_text p-0">
                                        13. PROFIT - SHARING, ANNUITIES, IRAS, DEFERRED
                                        COMPENSATION (Attach copy of latest statement.)
                                        <textarea name="FL-142[0].Page3[0].Table3[0].Row4[0].on_date[0]" id="" class="form-control" rows="6"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="FL-142[0].Page3[0].Table3[0].Row4[0].TextField1[0]" id="" class="form-control" rows="8"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="FL-142[0].Page3[0].Table3[0].Row4[0].TextField2[0]" id="" class="form-control" rows="8"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="FL-142[0].Page3[0].Table3[0].Row4[0].DecimalField24[0]" id="" class="form-control" rows="8"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="FL-142[0].Page3[0].Table3[0].Row4[0].DecimalField23[0]" id="" class="form-control" rows="8"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="small_text p-0">
                                        14. ACCOUNTS RECEIVABLE AND UNSECURED NOTES (Attach copy of each.)
                                        <textarea name="FL-142[0].Page3[0].Table3[0].Row5[0].on_date[0]" id="" class="form-control" rows="7"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="FL-142[0].Page3[0].Table3[0].Row5[0].TextField1[0]" id="" class="form-control" rows="9"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="FL-142[0].Page3[0].Table3[0].Row5[0].TextField2[0]" id="" class="form-control" rows="9"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="FL-142[0].Page3[0].Table3[0].Row5[0].DecimalField31[0]" id="" class="form-control" rows="9"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="FL-142[0].Page3[0].Table3[0].Row5[0].DecimalField30[0]" id="" class="form-control" rows="9"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="small_text p-0">
                                        15. PARTNERSHIPS AND OTHER BUSINESS INTERESTS
                                        (Attach copy of most current K-1 form and Schedule C.)
                                        <textarea name="FL-142[0].Page3[0].Table3[0].Row6[0].on_date[0]" id="" class="form-control" rows="5"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="FL-142[0].Page3[0].Table3[0].Row6[0].TextField1[0]" id="" class="form-control" rows="7"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="FL-142[0].Page3[0].Table3[0].Row6[0].TextField2[0]" id="" class="form-control" rows="7"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="FL-142[0].Page3[0].Table3[0].Row6[0].DecimalField29[0]" id="" class="form-control" rows="7"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="FL-142[0].Page3[0].Table3[0].Row6[0].DecimalField28[0]" id="" class="form-control" rows="7"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="small_text p-0">
                                        16. OTHER ASSETS
                                        <textarea name="FL-142[0].Page3[0].Table3[0].Row7[0].on_date[0]" id="" class="form-control" rows="10"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="FL-142[0].Page3[0].Table3[0].Row7[0].TextField1[0]" id="" class="form-control" rows="12"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="FL-142[0].Page3[0].Table3[0].Row7[0].TextField2[0]" id="" class="form-control" rows="12"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="FL-142[0].Page3[0].Table3[0].Row7[0].DecimalField27[0]" id="" class="form-control" rows="12"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="FL-142[0].Page3[0].Table3[0].Row7[0].DecimalField26[0]" id="" class="form-control" rows="12"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="small_text p-0"> 17. TOTAL ASSETS FROM CONTINUATION
                                        SHEET </td>
                                    <td class="small_text p-0">
                                        <input name="FL-142[0].Page3[0].Table3[0].Row8[0].TextField1[0]" id=""
                                            class="form-control border-0">
                                    </td>
                                    <td class="small_text p-0">
                                        <input name="FL-142[0].Page3[0].Table3[0].Row8[0].TextField2[0]" id=""
                                            class="form-control border-0">
                                    </td>
                                    <td class="small_text p-0">
                                        <input name="FL-142[0].Page3[0].Table3[0].Row8[0].DecimalField35[0]" id=""
                                            class="form-control border-0">
                                    </td>
                                    <td class="small_text p-0">
                                        <input name="FL-142[0].Page3[0].Table3[0].Row8[0].DecimalField34[0]" id=""
                                            class="form-control border-0">
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="4" class="small_text p-0"> 18. TOTAL ASSETS</td>
                                    <td class="small_text p-0 d-flex">$ <input name="FL-142[0].Page3[0].Table3[0].Row9[0].DecimalField33[0]" id="" class="form-control border-0"></input></td>
                                    <td class="small_text p-0">
                                        <div class="d-flex">$ <input name="FL-142[0].Page3[0].Table3[0].Row9[0].DecimalField32[0]" id="" class="form-control border-0"></input> </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    @include('layouts.footer9', ['page' => 3])
                </section>
                <section class="section_area  px-lg-5 px-2" id="fourth_section">
                    <div class="table-responsive pt-5">
                        <table class="table-bordered border border-2 border-dark">
                            <thead>
                                <tr>
                                    <td colspan="2" class="text-center">
                                        <div class="d-flex gap-5 justify-content-center">
                                            <span>ITEM NO.</span>
                                            <span>DEBTS—SHOW TO WHOM OWED</span>
                                        </div>
                                    </td>
                                    <td class="text-center">SEP.PROP</td>
                                    <td>TOTAL OWING</td>
                                    <td>DATE INCURRED</td>
                                 </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="2" class="small_text p-0">
                                        19. STUDENT LOANS (Give details.)
                                        <textarea name="FL-142[0].Page4[0].Table4[0].Row2[0].on_date[0]" id="" class="form-control" rows="3"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="FL-142[0].Page4[0].Table4[0].Row2[0].TextField1[0]" id="" class="form-control" rows="4"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="FL-142[0].Page4[0].Table4[0].Row2[0].DecimalField40[0]" id="" class="form-control" rows="4"></textarea>
                                    </td>
                                    <td class="small_text p-0 d-flex">$
                                        <textarea name="FL-142[0].Page4[0].Table4[0].Row2[0].TextField3[0]" id="" class="form-control" rows="4"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="small_text p-0"> 20. TAXES (Give details.)
                                        <textarea name="FL-142[0].Page4[0].Table4[0].Row3[0].on_date[0]" id="" class="form-control" rows="4"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="FL-142[0].Page4[0].Table4[0].Row3[0].TextField1[0]" id="" class="form-control" rows="5"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="FL-142[0].Page4[0].Table4[0].Row3[0].DecimalField39[0]" id="" class="form-control" rows="5"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="FL-142[0].Page4[0].Table4[0].Row3[0].TextField3[0]" id="" class="form-control" rows="5"></textarea>
                                    </td>


                                </tr>
                                <tr>
                                    <td colspan="2" class="small_text p-0">21. SUPPORT ARREARAGES (Attach copies of
                                        orders and statements.)
                                        <textarea name="FL-142[0].Page4[0].Table4[0].Row4[0].on_date[0]" id="" class="form-control" rows="5"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="FL-142[0].Page4[0].Table4[0].Row4[0].TextField1[0]" id="" class="form-control" rows="6"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="FL-142[0].Page4[0].Table4[0].Row4[0].DecimalField38[0]" id="" class="form-control" rows="6"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="FL-142[0].Page4[0].Table4[0].Row4[0].TextField3[0]" id="" class="form-control" rows="6"></textarea>
                                    </td>

                                </tr>
                                <tr>
                                    <td colspan="2" class="small_text p-0">
                                        22. LOANS—UNSECURED (Give bank name and loan number and attach copy of latest
                                        statement.)
                                        <textarea name="FL-142[0].Page4[0].Table4[0].Row5[0].on_date[0]" id="" class="form-control" rows="4"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="FL-142[0].Page4[0].Table4[0].Row5[0].TextField1[0]" id="" class="form-control" rows="6"></textarea>
                                    </td>

                                    <td class="small_text p-0">
                                        <textarea name="FL-142[0].Page4[0].Table4[0].Row5[0].DecimalField37[0]" id="" class="form-control" rows="6"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="FL-142[0].Page4[0].Table4[0].Row5[0].TextField3[0]" id="" class="form-control" rows="6"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="small_text p-0">23. CREDIT CARDS (Give creditor's name
                                        and address and the account number. Attach copy of latest statement.)
                                        <textarea name="FL-142[0].Page4[0].Table4[0].Row6[0].on_date[0]" id="" class="form-control" rows="8"></textarea>
                                    </td>

                                    <td class="small_text p-0">
                                        <textarea name="FL-142[0].Page4[0].Table4[0].Row6[0].TextField1[0]" id="" class="form-control" rows="10"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="FL-142[0].Page4[0].Table4[0].Row6[0].DecimalField36[0]" id="" class="form-control" rows="10"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="FL-142[0].Page4[0].Table4[0].Row6[0].TextField3[0]" id="" class="form-control" rows="10"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="small_text p-0">
                                        24. OTHER DEBTS (Specify.):
                                        <textarea name="FL-142[0].Page4[0].Table4[0].Row7[0].on_date[0]" id="" class="form-control" rows="15"></textarea>
                                    </td>

                                    <td class="small_text p-0">
                                        <textarea name="FL-142[0].Page4[0].Table4[0].Row7[0].TextField1[0]" id="" class="form-control" rows="16"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="FL-142[0].Page4[0].Table4[0].Row7[0].DecimalField43[0]" id="" class="form-control" rows="16"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="FL-142[0].Page4[0].Table4[0].Row7[0].TextField3[0]" id="" class="form-control" rows="16"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="small_text p-0">
                                        25. TOTAL DEBTS FROM CONTINUATION SHEET</td>
                                    <td class="small_text p-0">
                                        <input name="FL-142[0].Page4[0].Table4[0].Row8[0].TextField1[0]" class="form-control border-0">
                                    </td>
                                    <td class="small_text p-0">
                                        <input name="FL-142[0].Page4[0].Table4[0].Row8[0].DecimalField42[0]" class="form-control border-0">
                                    </td>

                                    <td class="small_text p-0">
                                        <input name="FL-142[0].Page4[0].Table4[0].Row8[0].TextField3[0]" class="form-control border-0">
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3" class="small_text p-0"> 26. TOTAL DEBTS</td>

                                    <td class="small_text p-0 d-flex">$ <input name="FL-142[0].Page4[0].Table4[0].Row9[0].DecimalField41[0]" id=""
                                            class="form-control border-0"> </td>
                                    <td class=" ">

                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                    <div class=" pt-1">
                        <div class="d-flex d_sm_block">
                            <span>27.</span> <input type="checkbox" class="mx-2" name="FL-142[0].Page4[0].Choice2[0]"
                                value="On"> (Specify number): <input type="number"
                                class="border-0 border-bottom footer_field" name="FL-142[0].Page4[0].FillText1[0]"> <span>pages are attached as continuation
                                sheets.</span>
                        </div>
                        <div class="small_text">I declare under penalty of perjury under the laws of the State of
                            California that the foregoing is true and correct.</div>
                        <div class="d-flex d_sm_block">
                            <div class="  me-2">Date</div>
                            <div> <input type="date" name="FL-142[0].Page4[0].SignSub[0].SigDate[0]" class="border-0 border-bottom footer_field responsive_input">
                            </div>
                        </div>
                        <div class="row  ">
                            <div class="col-lg-6">
                                <div> <input type="text" name="FL-142[0].Page4[0].SignSub[0].SigName[0]"
                                        class="border-0 border-bottom form-control footer_field "></div>
                                <div class="small_text text-center">(TYPE OR PRINT NAME)</div>
                            </div>
                            <div class="col-lg-6">
                                <div> <input type="text" name="signature"
                                        class="border-0 border-bottom form-control footer_field "></div>
                                <div class="small_text text-center">(SIGNATURE OF DECLARANT)</div>
                            </div>
                        </div>
                    </div>
                    @include('layouts.footer9', ['page' => 4])
                    {{-- @include('layouts.pagination', ['page' => 13 ]) --}}
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
