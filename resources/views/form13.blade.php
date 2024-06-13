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
            height : 100% !important;

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
    </style>
</head>

<body>
    <div class="container-fluid   py-1 py-lg-3">
        <div class="container bg_color p-lg-3 p-1  ">

            <form action="{{ route('form13.submit') }}" method="post">
                @csrf
                <section class="section_area" id="first_section">

                    <div class="row  px-lg-5 px-2   pt-2">
                        @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show mt-lg-3">{{ session('success') }}<button
                                type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
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
                                        <div> <input type="text" name="phone_no" class="border-0 table_input"></div>
                                    </div>
                                </div>
                            </div>
                            <textarea name="name_and_address" class="form-control" rows="5"></textarea>
                            <div class="d-flex pt-3">
                                <div class="small_text">ATTORNEY FOR (Name):</div>
                                <div> <input type="text" name="attorey_name" class="border-0 table_input "></div>
                            </div>
                        </div>
                        <div class="p-2 border border-dark">
                            <div class="">
                                <div>
                                    <div>SUPERIOR COURT OF CALIFORNIA, COUNTY OF</div>
                                    <div> <input type="text" name="county_of" class="border-0 table_input w-100 ">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="p-2 border border-dark">

                            <div>
                                <div class="d-flex w-100">
                                    <div class="small_text">PETITIONER:</div>
                                    <div> <input type="text" name="petitioner_val"
                                            class="border-0 table_input w-100"></div>
                                </div>
                            </div>
                            <div>
                                <div class="d-flex">
                                    <div class="small_text">RESPONDENT:</div>
                                    <div> <input type="text" name="respondent_val" class="border-0 table_input ">
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
                                    <input type="checkbox" value="petitioner" name="petitioner">
                                    <label for="" class="">Petitioner's</label>
                                </div>
                                <div class="d-flex gap-2 ps-3">
                                    <input type="checkbox" value="respondent" name="respondent">
                                    <label for="" class=""> Respondent's</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 border border-dark">
                            <div class="small_text">CASE NUMBER:</div>
                            <input type="text" name="case_number" class="border-0 table_input w-100">
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
                                            <textarea name="asseets_description1" id="" class="form-control" rows="12"></textarea>
                                        </td>
                                        <td class="small_text p-0">
                                            <textarea name="sep_prop1" id="" class="form-control" rows="14"></textarea>
                                        </td>
                                        <td class="small_text p-0">
                                            <textarea name="date_acquired1" id="" class="form-control" rows="14"></textarea>
                                        </td>
                                        <td class="small_text p-0 d-flex">$
                                            <textarea name="current_gross_fair1" id="" class="form-control" rows="14"></textarea>
                                        </td>

                                        <td class="small_text p-0">
                                            <div class="d-flex">$
                                                <textarea name="amount_of_money1" id="" class="form-control" rows="14"></textarea>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="small_text p-0">
                                            2. HOUSEHOLD FURNITURE, FURNISHINGS, APPLIANCES (Identify.)
                                            <textarea name="asseets_description2" id="" class="form-control" rows="7"></textarea>
                                        </td>
                                        <td class="small_text p-0">
                                            <textarea name="sep_prop2" id="" class="form-control" rows="8"></textarea>
                                        </td>
                                        <td class="small_text p-0">
                                            <textarea name="date_acquired2" id="" class="form-control" rows="8"></textarea>
                                        </td>
                                        <td class="small_text p-0">
                                            <textarea name="current_gross_fair2" id="" class="form-control" rows="8"></textarea>
                                        </td>
                                        <td class="small_text p-0">
                                            <textarea name="amount_of_money2" id="" class="form-control" rows="8"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="small_text p-0">
                                            3. JEWELRY, ANTIQUES, ART, COIN COLLECTIONS, etc.(Identify.)
                                            <textarea name="asseets_description3" id="" class="form-control" rows="4"></textarea>
                                        </td>
                                        <td class="small_text p-0">
                                            <textarea name="sep_prop3" id="" class="form-control" rows="5"></textarea>
                                        </td>
                                        <td class="small_text p-0">
                                            <textarea name="date_acquired3" id="" class="form-control" rows="5"></textarea>
                                        </td>
                                        <td class="small_text p-0">
                                            <textarea name="current_gross_fair3" id="" class="form-control" rows="5"></textarea>
                                        </td>
                                        <td class="small_text p-0">
                                            <textarea name="amount_of_money3" id="" class="form-control" rows="5"></textarea>
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

                                        <textarea name="asseets_description4" id="" class="form-control" rows="12"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="sep_prop4" id="" class="form-control" rows="14"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="date_acquired4" id="" class="form-control" rows="14"></textarea>
                                    </td>
                                    <td class="small_text p-0 d-flex">$
                                        <textarea name="current_gross_fair4" id="" class="form-control" rows="14"></textarea>
                                    </td>

                                    <td class="small_text p-0">
                                        <div class="d-flex">$
                                            <textarea name="amount_of_money4" id="" class="form-control" rows="14"></textarea>
                                        </div>
                                    </td>

                                </tr>
                                <tr>
                                    <td colspan="2" class="small_text p-0">
                                        5. SAVINGS ACCOUNTS (Account name, account number,
                                        bank, and branch. Attach copy of latest statement.)
                                        <textarea name="asseets_description5" id="" class="form-control" rows="6"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="sep_prop5" id="" class="form-control" rows="8"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="date_acquired5" id="" class="form-control" rows="8"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="current_gross_fair5" id="" class="form-control" rows="8"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="amount_of_money5" id="" class="form-control" rows="8"></textarea>
                                    </td>

                                </tr>
                                <tr>
                                    <td colspan="2" class="small_text p-0">
                                        6. CHECKING ACCOUNTS (Account name and number, bank, and branch. Attach copy of
                                        latest statement.)
                                        <textarea name="asseets_description6" id="" class="form-control" rows="4"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="sep_prop6" id="" class="form-control" rows="6"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="date_acquired6" id="" class="form-control" rows="6"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="current_gross_fair6" id="" class="form-control" rows="6"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="amount_of_money6" id="" class="form-control" rows="6"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="small_text p-0">
                                        7. CREDIT UNION, OTHER DEPOSIT ACCOUNTS (Account name and number, bank, and
                                        branch. Attach copy of latest statement.)
                                        <textarea name="asseets_description7" id="" class="form-control" rows="7"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="sep_prop7" id="" class="form-control" rows="9"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="date_acquired7" id="" class="form-control" rows="9"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="current_gross_fair7" id="" class="form-control" rows="9"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="amount_of_money7" id="" class="form-control" rows="9"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="small_text p-0">
                                        8. CASH (Give location.)
                                        <textarea name="asseets_description8" id="" class="form-control" rows="6"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="sep_prop8" id="" class="form-control" rows="7"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="date_acquired8" id="" class="form-control" rows="7"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="current_gross_fair8" id="" class="form-control" rows="7"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="amount_of_money8" id="" class="form-control" rows="7"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="small_text p-0">
                                        9. TAX REFUND
                                        <textarea name="asseets_description9" id="" class="form-control" rows="6"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="sep_prop9" id="" class="form-control" rows="7"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="date_acquired9" id="" class="form-control" rows="7"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="current_gross_fair9" id="" class="form-control" rows="7"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="amount_of_money9" id="" class="form-control" rows="7"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="small_text p-0">
                                        10. LIFE INSURANCE WITH CASH SURRENDER OR LOAN
                                        VALUE (Attach copy of declaration page for each policy.)
                                        <textarea name="asseets_description10" id="" class="form-control" rows="5"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="sep_prop10" id="" class="form-control" rows="7"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="date_acquired10" id="" class="form-control" rows="7"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="current_gross_fair10" id="" class="form-control" rows="7"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="amount_of_money10" id="" class="form-control" rows="7"></textarea>
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
                                        <textarea name="asseets_description11" id="" class="form-control" rows="7"></textarea>
                                    </td>

                                    <td class="small_text p-0">
                                        <textarea name="sep_prop11" id="" class="form-control" rows="9"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="date_acquired11" id="" class="form-control" rows="9"></textarea>
                                    </td>
                                    <td class="small_text p-0 d-flex">$
                                        <textarea name="current_gross_fair11" id="" class="form-control" rows="9"></textarea>
                                    </td>

                                    <td class="small_text p-0">
                                        <div class="d-flex">$
                                            <textarea name="amount_of_money11" id="" class="form-control" rows="9"></textarea>
                                        </div>
                                    </td>

                                </tr>
                                <tr>
                                    <td colspan="2" class="small_text p-0">
                                        12. RETIREMENT AND PENSIONS (Attach copy of latest
                                        summary plan documents and latest benefit statement.)
                                        <textarea name="asseets_description12" id="" class="form-control" rows="8"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="sep_prop12" id="" class="form-control" rows="10"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="date_acquired12" id="" class="form-control" rows="10"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="current_gross_fair12" id="" class="form-control" rows="10"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="amount_of_money12" id="" class="form-control" rows="10"></textarea>
                                    </td>

                                </tr>
                                <tr>
                                    <td colspan="2" class="small_text p-0">
                                        13. PROFIT - SHARING, ANNUITIES, IRAS, DEFERRED
                                        COMPENSATION (Attach copy of latest statement.)
                                        <textarea name="asseets_description13" id="" class="form-control" rows="6"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="sep_prop13" id="" class="form-control" rows="8"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="date_acquired13" id="" class="form-control" rows="8"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="current_gross_fair13" id="" class="form-control" rows="8"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="amount_of_money13" id="" class="form-control" rows="8"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="small_text p-0">
                                        14. ACCOUNTS RECEIVABLE AND UNSECURED NOTES (Attach copy of each.)
                                        <textarea name="asseets_description14" id="" class="form-control" rows="7"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="sep_prop14" id="" class="form-control" rows="9"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="date_acquired14" id="" class="form-control" rows="9"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="current_gross_fair14" id="" class="form-control" rows="9"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="amount_of_money14" id="" class="form-control" rows="9"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="small_text p-0">
                                        15. PARTNERSHIPS AND OTHER BUSINESS INTERESTS
                                        (Attach copy of most current K-1 form and Schedule C.)
                                        <textarea name="asseets_description15" id="" class="form-control" rows="5"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="sep_prop15" id="" class="form-control" rows="7"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="date_acquired15" id="" class="form-control" rows="7"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="current_gross_fair15" id="" class="form-control" rows="7"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="amount_of_money15" id="" class="form-control" rows="7"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="small_text p-0">
                                        16. OTHER ASSETS
                                        <textarea name="asseets_description16" id="" class="form-control" rows="10"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="sep_prop16" id="" class="form-control" rows="12"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="date_acquired16" id="" class="form-control" rows="12"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="current_gross_fair16" id="" class="form-control" rows="12"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="amount_of_money16" id="" class="form-control" rows="12"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="small_text p-0"> 17. TOTAL ASSETS FROM CONTINUATION
                                        SHEET </td>
                                    <td class="small_text p-0">
                                        <input name="total_asssets_continuation1" id=""
                                            class="form-control border-0">
                                    </td>
                                    <td class="small_text p-0">
                                        <input name="total_asssets_continuation2" id=""
                                            class="form-control border-0">
                                    </td>
                                    <td class="small_text p-0">
                                        <input name="total_asssets_continuation3" id=""
                                            class="form-control border-0">
                                    </td>
                                    <td class="small_text p-0">
                                        <input name="total_asssets_continuation4" id=""
                                            class="form-control border-0">
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="4" class="small_text p-0"> 18. TOTAL ASSETS</td>
                                    <td class="small_text p-0 d-flex">$ <input name="total_assets1" id=""
                                            class="form-control border-0"></input></td>
                                    <td class="small_text p-0">
                                        <div class="d-flex">$ <input name="total_assets2" id=""
                                                class="form-control border-0"></input> </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    @include('layouts.footer9', ['page' => 3])
                </section>
                <section class="section_area  px-lg-5 px-2" id="last_section">
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
                                        19. STUDENT LOANS (Give details.)
                                        <textarea name="asseets_description19" id="" class="form-control" rows="3"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="sep_prop19" id="" class="form-control" rows="4"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="date_acquired19" id="" class="form-control" rows="4"></textarea>
                                    </td>
                                    <td class="small_text p-0 d-flex">$
                                        <textarea name="current_gross_fair19" id="" class="form-control" rows="4"></textarea>
                                    </td>

                                    <td class="small_text p-0">
                                        <div class="d-flex">$
                                            <textarea name="amount_of_money19" id="" class="form-control" rows="4"></textarea>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="small_text p-0"> 20. TAXES (Give details.)
                                        <textarea name="asseets_description20" id="" class="form-control" rows="4"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="sep_prop20" id="" class="form-control" rows="5"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="date_acquired20" id="" class="form-control" rows="5"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="current_gross_fair20" id="" class="form-control" rows="5"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="amount_of_money20" id="" class="form-control" rows="5"></textarea>
                                    </td>

                                </tr>
                                <tr>
                                    <td colspan="2" class="small_text p-0">21. SUPPORT ARREARAGES (Attach copies of
                                        orders and statements.)
                                        <textarea name="asseets_description21" id="" class="form-control" rows="5"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="sep_prop21" id="" class="form-control" rows="6"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="date_acquired21" id="" class="form-control" rows="6"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="current_gross_fair21" id="" class="form-control" rows="6"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="amount_of_money21" id="" class="form-control" rows="6"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="small_text p-0">
                                        22. LOANS—UNSECURED (Give bank name and loan number and attach copy of latest
                                        statement.)
                                        <textarea name="asseets_description22" id="" class="form-control" rows="4"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="sep_prop22" id="" class="form-control" rows="6"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="date_acquired22" id="" class="form-control" rows="6"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="current_gross_fair22" id="" class="form-control" rows="6"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="amount_of_money22" id="" class="form-control" rows="6"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="small_text p-0">23. CREDIT CARDS (Give creditor's name
                                        and address and the account number. Attach copy of latest statement.)
                                        <textarea name="asseets_description23" id="" class="form-control" rows="8"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="sep_prop23" id="" class="form-control" rows="10"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="date_acquired23" id="" class="form-control" rows="10"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="current_gross_fair23" id="" class="form-control" rows="10"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="amount_of_money23" id="" class="form-control" rows="10"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="small_text p-0">
                                        24. OTHER DEBTS (Specify.):
                                        <textarea name="asseets_description24" id="" class="form-control" rows="15"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="sep_prop24" id="" class="form-control" rows="16"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="date_acquired24" id="" class="form-control" rows="16"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="current_gross_fair24" id="" class="form-control" rows="16"></textarea>
                                    </td>
                                    <td class="small_text p-0">
                                        <textarea name="amount_of_money24" id="" class="form-control" rows="16"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="small_text p-0">
                                        25. TOTAL DEBTS FROM CONTINUATION SHEET</td>
                                    <td class="small_text p-0">
                                        <input name="sep_prop25" class="form-control border-0">
                                    </td>
                                    <td class="small_text p-0">
                                        <input name="date_acquired25" class="form-control border-0">
                                    </td>
                                    <td class="small_text p-0">
                                        <input name="current_gross_fair25" class="form-control border-0">
                                    </td>
                                    <td class="small_text p-0">
                                        <input name="amount_of_money25" class="form-control border-0">
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="4" class="small_text p-0"> 26. TOTAL DEBTS</td>

                                    <td class="small_text p-0 d-flex">$ <input name="total_debts1" id=""
                                            class="form-control border-0"> </td>
                                    <td class="small_text p-0">
                                        <div class="d-flex">$ <input name="total_debts2" id=""
                                                class="form-control border-0"> </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                    <div class=" pt-1">
                        <div class="d-flex d_sm_block">
                            <span>27.</span> <input type="checkbox" class="mx-2" name="continuation_declaration"
                                value="Yes"> (Specify number): <input type="text"
                                class="border-0 border-bottom footer_field"> <span>pages are attached as continuation
                                sheets.</span>
                        </div>
                        <div class="small_text">I declare under penalty of perjury under the laws of the State of
                            California that the foregoing is true and correct.</div>
                        <div class="d-flex d_sm_block">
                            <div class="  me-2">Date</div>
                            <div> <input type="text" name="date" class="border-0 border-bottom footer_field responsive_input">
                            </div>
                        </div>
                        <div class="row  ">
                            <div class="col-lg-6">
                                <div> <input type="text" name="topn"
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
                    @include('layouts.pagination', ['page' => 13 ])
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
