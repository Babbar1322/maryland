{{-- fl160  CA.pdf --}}
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

            <form action="{{ route('form11.submit') }}" method="post">
                @csrf
                <section class="section_area" id="first_section">

                    <div class="row  px-lg-5 px-2   pt-2">
                        @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show mt-lg-3">{{ session('success') }} <button
                                type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                        <div class="small_text text-end fw-bold">FL-160</div>
                        <div class="col-lg-8 border border-dark">
                            <div class="row">
                                <div class="col">
                                    <div class="small_text"> PARTY WITHOUT ATTORNEY OR ATTORNEY</div>

                                </div>
                                <div class="col">
                                    <div class="d-flex">
                                        <div class="small_text">STATE BAR NUMBER:</div>
                                        <div> <input type="text" name="name" class="border-0 table_input "></div>
                                    </div>
                                </div>
                            </div>
                            <div class="p-2 border-bottom border-dark">
                                <div class="">
                                    <div class="d-flex">
                                        <div class="small_text">NAME:</div>
                                        <div> <input type="text" name="name" class="border-0 table_input "></div>
                                    </div>
                                </div>

                                <div class="">
                                    <div class="d-flex">
                                        <div class="small_text">FIRM NAME:</div>
                                        <div> <input type="text" name="f_name" class="border-0 table_input "></div>
                                    </div>
                                </div>

                                <div class="">
                                    <div class="d-flex">
                                        <div class="small_text">STREET ADDRESS:</div>
                                        <div> <input type="text" name="s_address" class="border-0 table_input "></div>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="d-flex">
                                        <div class="small_text">CITY :</div>
                                        <div> <input type="text" name="city" class="border-0 table_input "></div>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="d-flex">
                                        <div class="small_text">TELEPHONE NO :</div>
                                        <div> <input type="text" name="phone" class="border-0 table_input "></div>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="d-flex">
                                        <div class="small_text">EMAIL ADDRESS NO :</div>
                                        <div> <input type="text" name="phone" class="border-0 table_input "></div>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="d-flex">
                                        <div class="small_text">ATTORNEY FOR (name):</div>
                                        <div> <input type="text" name="phone" class="border-0 table_input "></div>
                                    </div>
                                </div>
                            </div>
                            <div class="p-2 border-bottom border-dark">

                                <div class="">
                                    <div class="d-flex">
                                        <div class=" ">SUPERIOR COURT OF CALIFORNIA, COUNTY OF</div>
                                        <div> <input type="text" name="county_of" class="border-0 table_input "></div>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="d-flex">
                                        <div class="small_text">STREET ADDRESS:</div>
                                        <div> <input type="text" name="street_address" class="border-0 table_input "></div>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="d-flex">
                                        <div class="small_text">MAILING ADDRESS:</div>
                                        <div> <input type="text" name="mailing_address" class="border-0 table_input "></div>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="d-flex">
                                        <div class="small_text">CITY AND ZIP CODE:</div>
                                        <div> <input type="text" name="zip_code" class="border-0 table_input "></div>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="d-flex">
                                        <div class="small_text">BRANCH NAME:</div>
                                        <div> <input type="text" name="branch_name" class="border-0 table_input "></div>
                                    </div>
                                </div>
                            </div>
                            <div class="p-2 border-dark">

                                <div class="">
                                    <div class="d-flex ps-lg-5">
                                        <div class="small_text">PETITIONER:</div>
                                        <div> <input type="text" name="petitioner" class="border-0 table_input "></div>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="d-flex ps-lg-5">
                                        <div class="small_text">RESPONDENT:</div>
                                        <div> <input type="text" name="respondent" class="border-0 table_input "></div>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="d-flex ps-lg-5">
                                        <div class="small_text">OTHER PARENT/PARTY:</div>
                                        <div> <input type="text" name="other_party" class="border-0 table_input "></div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-4 border border-dark"></div>
                    </div>
                    <div class="row px-lg-5 px-2 py-2 pt-0">
                        <div class="col-lg-8 border border-dark">
                            <div class="d-flex  pt-3 ">

                                <div class="d-flex gap-2">
                                    <input type="checkbox" value="petitioner" name="petitioner">
                                    <label for="" class="">PETITIONER’S</label>
                                </div>
                                <div class="d-flex gap-2 ps-3">
                                    <input type="checkbox" value="respondent" name="respondent">
                                    <label for="" class=""> RESPONDENT'S</label>
                                </div>
                            </div>
                            <div class="d-flex gap-2   pb-3">
                                <input type="checkbox" value="community_prop" name="community_prop"
                                    value="COMMUNITY AND QUASI-COMMUNITY PROPERTY DECLARATION">
                                <label for="" class="">COMMUNITY AND QUASI-COMMUNITY PROPERTY
                                    DECLARATION</label>
                            </div>
                            <div class="d-flex gap-2">
                                <input type="checkbox" value="seprate_prop" name="seprate_prop"
                                    value="SEPARATE PROPERTY DECLARATION">
                                <label for="" class="">SEPARATE PROPERTY DECLARATION</label>
                            </div>
                        </div>
                        <div class="col-lg-4 border border-dark">
                            <div class="small_text">CASE NUMBER:</div>
                            <input type="text" name="case_number" class="border-0 table_input w-100">
                        </div>
                    </div>

                    <div class="px-lg-5 px-2 row">
                        <div class="p-2">
                            <div class="lh-1"> See Instructions on page 5 for information about completing this form.
                                For additional space , use Continuation of Property Declaration</div>
                            <div class="lh-1">(<a href="http://www.courts.ca.gov/documents/fl160.pdf">form
                                    FL-160</a> )</div>
                        </div>

                        <div class="table-responsive">
                            <table class="table-bordered border border-2 border-dark">
                                <thead>
                                    <tr>
                                        <td class="text-center">A</td>
                                        <td class="text-center">B</td>
                                        <td colspan="3">
                                            <div class="d-flex gap-5 justify-content-center"> <span>C </span> - <span>  D </span> = <span> E </span></div>
                                        </td>
                                        <td colspan="2" class="text-center">F</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center small_text d-flex gap-3 border-0 table_input">
                                            <div>ITEM NO</div>
                                            <div> BRIEF DESCRIPTION</div>
                                        </td>
                                        <td class="text-center small_text">DATE ACQUIRED (mm/dd/yyyy)</td>
                                        <td class="text-center small_text">GROSS FAIR MARKET VALUE</td>
                                        <td class="text-center small_text">AMOUNT OF DEBT</td>
                                        <td class="text-center small_text">NET FAIR MARKET VALUE</td>
                                        <td class="text-center small_text" colspan="2">
                                            <div>PROPOSAL FOR DIVISION</div>
                                            <div>Award or Confirm to:</div>
                                            <div class="d-flex gap-3 justify-content-center">
                                                <span>PETITIONER</span>
                                                <span>RESPONDENT</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="8" class="small_text">
                                            <div>
                                                <div>1.REAL ESTATE</div>
                                                <div><input type="text" name="brif_desc1" class="w-100 border-0 table_input">
                                                </div>
                                                <div><input type="text" name="brif_desc2" class="w-100 border-0 table_input">
                                                </div>
                                            </div>
                                            <div>
                                                <div> 2.HOUSEHOLD FURNITURE, FURNISHINGS, APPLIANCES </div>
                                                <input type="text" name="applince1" class="w-100 border-0 table_input">
                                                <input type="text" name="applince2" class="w-100 border-0 table_input">
                                                <input type="text" name="applince3" class="w-100 border-0 table_input">
                                                <input type="text" name="applince4" class="w-100 border-0 table_input">
                                                <input type="text" name="applince5" class="w-100 border-0 table_input">
                                            </div>
                                            <div>
                                                <div> 3. JEWELRY, ANTIQUES, ART, COIN COLLECTIONS, ETC </div>
                                                <input type="text" name="jewel1" class="w-100 border-0 table_input">
                                                <input type="text" name="jewel2" class="w-100 border-0 table_input">
                                                <input type="text" name="jewel3" class="w-100 border-0 table_input">
                                            </div>
                                            <div>
                                                <div>4. VEHICLES, BOATS, TRAILERS</div>
                                                <input type="text" name="vehicles1" class="w-100 border-0 table_input">
                                                <input type="text" name="vehicles2" class="w-100 border-0 table_input">
                                                <input type="text" name="vehicles3" class="w-100 border-0 table_input">
                                            </div>
                                            <div>
                                                <div>5. SAVINGS ACCOUNTS</div>
                                                <input type="text" name="sav_acc1" class="w-100 border-0 table_input">
                                                <input type="text" name="sav_acc2" class="w-100 border-0 table_input">
                                                <input type="text" name="sav_acc3" class="w-100 border-0 table_input">
                                            </div>
                                            <div>
                                                <div>6. CHECKING ACCOUNTS</div>
                                                <input type="text" name="check_acc1" class="w-100 border-0 table_input">
                                                <input type="text" name="check_acc2" class="w-100 border-0 table_input">
                                                <input type="text" name="check_acc3" class="w-100 border-0 table_input">
                                            </div>
                                        </td>
                                        <td rowspan="8" class="small_text">
                                            <div>
                                                <br>
                                                <div><input type="text" name="re_date_a1" class="w-100 border-0 table_input"></div>
                                                <div><input type="text" name="re_date_a2" class="w-100 border-0 table_input"></div>
                                            </div>
                                            <br>
                                            <br>
                                            <div>
                                                <input type="text" name="app_date1" class="w-100 border-0 table_input">
                                                <input type="text" name="app_date2" class="w-100 border-0 table_input">
                                                <input type="text" name="app_date3" class="w-100 border-0 table_input">
                                                <input type="text" name="app_date4" class="w-100 border-0 table_input">
                                                <input type="text" name="app_date5" class=" w-100 border-0 table_input">
                                            </div>
                                            <br>
                                            <br>
                                            <div>
                                                <input type="text" name="jew_date1" class="w-100 border-0 table_input">
                                                <input type="text" name="jew_date2" class="w-100 border-0 table_input">
                                                <input type="text" name="jew_date3" class="w-100 border-0 table_input">
                                            </div>  <br><br>
                                            <div>
                                                <input type="text" name="vech_date1" class="w-100 border-0 table_input">
                                                <input type="text" name="vech_date2" class="w-100 border-0 table_input">
                                                <input type="text" name="vech_date3" class="w-100 border-0 table_input">
                                            </div> <br>
                                            <div>
                                                <input type="text" name="sav_date1" class="w-100 border-0 table_input">
                                                <input type="text" name="sav_date2" class="w-100 border-0 table_input">
                                                <input type="text" name="sav_date3" class="w-100 border-0 table_input">
                                            </div><br>
                                            <div>
                                                <input type="text" name="ca_date1" class="w-100 border-0 table_input">
                                                <input type="text" name="ca_date2" class="w-100 border-0 table_input">
                                                <input type="text" name="ca_date3" class="w-100 border-0 table_input">
                                            </div>
                                        </td>
                                        <td rowspan="8" class="small_text">
                                            <div>
                                            <div>$</div>
                                            <div class="small_text">
                                                <div><input type="text" name="re_gross_val1" class="w-100 border-0 table_input text-end"></div>
                                                <div><input type="text" name="re_gross_val2" class="w-100 border-0 table_input text-end"></div>
                                            </div>
                                            </div> <br>
                                            <br>
                                            <div class="small_text">
                                                <input type="text" name="app_gross_val1" class="w-100 border-0 table_input text-end">
                                                <input type="text" name="app_gross_val2" class="w-100  border-0 table_input text-end">
                                                <input type="text" name="app_gross_val3" class="w-100 border-0 table_input text-end">
                                                <input type="text" name="app_gross_val4" class="w-100  border-0 table_input text-end">
                                                <input type="text" name="app_gross_val5" class=" w-100 border-0 table_input text-end">
                                            </div>
                                            <br>
                                            <br>
                                            <div class="small_text">
                                                <input type="text" name="jew_gross_val1" class="w-100 border-0 table_input text-end">
                                                <input type="text" name="jew_gross_val2" class="w-100  border-0 table_input text-end">
                                                <input type="text" name="jew_gross_val3" class="w-100 border-0 table_input text-end">
                                            </div>
                                            <br>
                                            <br>
                                            <div class="small_text">
                                                <input type="text" name="vech_gross_val1" class="w-100 border-0 table_input text-end">
                                                <input type="text" name="vech_gross_val2" class="w-100  border-0 table_input text-end">
                                                <input type="text" name="vech_gross_val3" class="w-100 border-0 table_input text-end">
                                            </div>
                                            <br>
                                            <div class="small_text">
                                                <input type="text" name="sav_gross_val1" class="w-100 border-0 table_input text-end">
                                                <input type="text" name="sav_gross_val2" class="w-100  border-0 table_input text-end">
                                                <input type="text" name="sav_gross_val3" class="w-100 border-0 table_input text-end">
                                            </div>
                                            <br>
                                            <div class="small_text">
                                                <input type="text" name="ca_gross_val1" class="w-100 border-0 table_input text-end">
                                                <input type="text" name="ca_gross_val2" class="w-100  border-0 table_input text-end">
                                                <input type="text" name="ca_gross_val3" class="w-100 border-0 table_input text-end">
                                            </div>
                                        </td>
                                        <td rowspan="8" class="small_text">
                                            <div>
                                                <div>$</div>
                                                <div class="small_text">
                                                    <div><input type="text" name="re_debt_amt1" class="w-100  border-0 table_input text-end"></div>
                                                    <div><input type="text" name="re_debt_amt2" class="w-100  border-0 table_input text-end"></div>
                                                </div>
                                            </div>
                                            <br>
                                            <br>
                                            <div class="small_text">
                                                <input type="text" name="app_debt_amt1" class="w-100 border-0 table_input text-end">
                                                <input type="text" name="app_debt_amt2" class="w-100  border-0 table_input text-end">
                                                <input type="text" name="app_debt_amt3" class="w-100 border-0 table_input text-end">
                                                <input type="text" name="app_debt_amt4" class="w-100  border-0 table_input text-end">
                                                <input type="text" name="app_debt_amt5" class=" w-100 border-0 table_input text-end">
                                            </div>
                                            <br>
                                            <br>
                                            <div class="small_text">
                                                <input type="text" name="jew_debt_amt1" class="w-100 border-0 table_input text-end">
                                                <input type="text" name="jew_debt_amt2" class="w-100  border-0 table_input text-end">
                                                <input type="text" name="jew_debt_amt3" class="w-100 border-0 table_input text-end">
                                            </div>
                                            <br>
                                            <br>
                                            <div class="small_text">
                                                <input type="text" name="vech_debt_amt1" class="w-100 border-0 table_input text-end">
                                                <input type="text" name="vech_debt_amt2" class="w-100  border-0 table_input text-end">
                                                <input type="text" name="vech_debt_amt3" class="w-100 border-0 table_input text-end">
                                            </div>
                                            <br>
                                            <div class="small_text">
                                                <input type="text" name="sav_debt_amt1" class="w-100 border-0 table_input text-end">
                                                <input type="text" name="sav_debt_amt2" class="w-100  border-0 table_input text-end">
                                                <input type="text" name="sav_debt_amt3" class="w-100 border-0 table_input text-end">
                                            </div>
                                            <br>
                                            <div class="small_text">
                                                <input type="text" name="ca_debt_amt1" class="w-100 border-0 table_input text-end">
                                                <input type="text" name="ca_debt_amt2" class="w-100  border-0 table_input text-end">
                                                <input type="text" name="ca_debt_amt3" class="w-100 border-0 table_input text-end">
                                            </div>
                                        </td>
                                        <td rowspan="8" class="small_text">
                                            <div>
                                                <div>$</div>
                                                <div class="small_text">
                                                    <div><input type="text" name="re_mark_val1" class="w-100  border-0 table_input text-end"></div>
                                                    <div><input type="text" name="re_mark_val2" class="w-100  border-0 table_input text-end"></div>
                                                </div>
                                            </div>
                                            <br>
                                            <br>
                                            <div class="small_text">
                                                <input type="text" name="app_mark_val1" class="w-100 border-0 table_input text-end">
                                                <input type="text" name="app_mark_val2" class="w-100  border-0 table_input text-end">
                                                <input type="text" name="app_mark_val3" class="w-100 border-0 table_input text-end">
                                                <input type="text" name="app_mark_val4" class="w-100  border-0 table_input text-end">
                                                <input type="text" name="app_mark_val5" class=" w-100 border-0 table_input text-end">
                                            </div>
                                            <br>
                                            <br>
                                            <div class="small_text">
                                                <input type="text" name="jew_mark_val1" class="w-100 border-0 table_input text-end">
                                                <input type="text" name="jew_mark_val2" class="w-100  border-0 table_input text-end">
                                                <input type="text" name="jew_mark_val3" class="w-100 border-0 table_input text-end">
                                            </div>
                                            <br>
                                            <br>
                                            <div class="small_text">
                                                <input type="text" name="vech_mark_val1" class="w-100 border-0 table_input text-end">
                                                <input type="text" name="vech_mark_val2" class="w-100  border-0 table_input text-end">
                                                <input type="text" name="vech_mark_val3" class="w-100 border-0 table_input text-end">
                                            </div>
                                            <br>
                                            <div class="small_text">
                                                <input type="text" name="sav_mark_val1" class="w-100 border-0 table_input text-end">
                                                <input type="text" name="sav_mark_val2" class="w-100  border-0 table_input text-end">
                                                <input type="text" name="sav_mark_val3" class="w-100 border-0 table_input text-end">
                                            </div>
                                            <br>
                                            <div class="small_text">
                                                <input type="text" name="ca_mark_val1" class="w-100 border-0 table_input text-end">
                                                <input type="text" name="ca_mark_val2" class="w-100  border-0 table_input text-end">
                                                <input type="text" name="ca_mark_val3" class="w-100 border-0 table_input text-end">
                                            </div>
                                        </td>
                                        <td rowspan="8" class="small_text">
                                            <div>
                                                <div>$</div>
                                                <div class="small_text">
                                                    <div><input type="text" name="re_pio1" class="w-100  border-0 table_input text-end"></div>
                                                    <div><input type="text" name="re_pio2" class="w-100  border-0 table_input text-end"></div>
                                                </div>
                                            </div>
                                            <br>
                                            <br>
                                            <div class="small_text">
                                                <input type="text" name="app_pio1" class="w-100 border-0 table_input text-end">
                                                <input type="text" name="app_pio2" class="w-100  border-0 table_input text-end">
                                                <input type="text" name="app_pio3" class="w-100 border-0 table_input text-end">
                                                <input type="text" name="app_pio4" class="w-100  border-0 table_input text-end">
                                                <input type="text" name="app_pio5" class=" w-100 border-0 table_input text-end">
                                            </div>
                                            <br>
                                            <br>
                                            <div class="small_text">
                                                <input type="text" name="jew_pio1" class="w-100 border-0 table_input text-end">
                                                <input type="text" name="jew_pio2" class="w-100  border-0 table_input text-end">
                                                <input type="text" name="jew_pio3" class="w-100 border-0 table_input text-end">
                                            </div>
                                            <br>
                                            <br>
                                            <div class="small_text">
                                                <input type="text" name="vech_pio1" class="w-100 border-0 table_input text-end">
                                                <input type="text" name="vech_pio2" class="w-100  border-0 table_input text-end">
                                                <input type="text" name="vech_pio3" class="w-100 border-0 table_input text-end">
                                            </div>
                                            <br>
                                            <div class="small_text">
                                                <input type="text" name="sav_pio1" class="w-100 border-0 table_input text-end">
                                                <input type="text" name="sav_pio2" class="w-100  border-0 table_input text-end">
                                                <input type="text" name="sav_pio3" class="w-100 border-0 table_input text-end">
                                            </div>
                                            <br>
                                            <div class="small_text">
                                                <input type="text" name="ca_pio1" class="w-100 border-0 table_input text-end">
                                                <input type="text" name="ca_pio2" class="w-100  border-0 table_input text-end">
                                                <input type="text" name="ca_pio3" class="w-100 border-0 table_input text-end">
                                            </div>
                                        </td>
                                        <td rowspan="8" class="small_text">
                                            <div>
                                                <div>$</div>
                                                <div class="small_text">
                                                    <div><input type="text" name="re_resp1" class="w-100  border-0 table_input text-end"></div>
                                                    <div><input type="text" name="re_resp2" class="w-100  border-0 table_input text-end"></div>
                                                </div>
                                            </div>
                                            <br>
                                            <br>
                                            <div class="small_text">
                                                <input type="text" name="app_resp1" class="w-100 border-0 table_input text-end">
                                                <input type="text" name="app_resp2" class="w-100  border-0 table_input text-end">
                                                <input type="text" name="app_resp3" class="w-100 border-0 table_input text-end">
                                                <input type="text" name="app_resp4" class="w-100  border-0 table_input text-end">
                                                <input type="text" name="app_resp5" class=" w-100 border-0 table_input text-end">
                                            </div>
                                            <br>
                                            <br>
                                            <div class="small_text">
                                                <input type="text" name="jew_resp1" class="w-100 border-0 table_input text-end">
                                                <input type="text" name="jew_resp2" class="w-100  border-0 table_input text-end">
                                                <input type="text" name="jew_resp3" class="w-100 border-0 table_input text-end">
                                            </div>
                                            <br>
                                            <br>
                                            <div class="small_text">
                                                <input type="text" name="vech_resp1" class="w-100 border-0 table_input text-end">
                                                <input type="text" name="vech_resp2" class="w-100  border-0 table_input text-end">
                                                <input type="text" name="vech_resp3" class="w-100 border-0 table_input text-end">
                                            </div>
                                            <br>
                                            <div class="small_text">
                                                <input type="text" name="sav_resp1" class="w-100 border-0 table_input text-end">
                                                <input type="text" name="sav_resp2" class="w-100  border-0 table_input text-end">
                                                <input type="text" name="sav_resp3" class="w-100 border-0 table_input text-end">
                                            </div>
                                            <br>
                                            <div class="small_text">
                                                <input type="text" name="ca_resp1" class="w-100 border-0 table_input text-end">
                                                <input type="text" name="ca_resp2" class="w-100  border-0 table_input text-end">
                                                <input type="text" name="ca_resp3" class="w-100 border-0 table_input text-end">
                                            </div>
                                        </td>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                        @include('layouts.footer7', ['page' => 1])
                    </div>
                </section>
                <section class="section_area  px-lg-5 px-2 " id="second_section">
                    <div class="table-responsive pt-5">
                            <table class="table-bordered border border-2 border-dark">
                                <thead>
                                    <tr>
                                        <td class="text-center">A</td>
                                        <td class="text-center">B</td>
                                        <td colspan="3">
                                            <div class="d-flex gap-5 justify-content-center"> <span>C </span> - <span>  D </span> = <span> E </span></div>
                                        </td>
                                        <td colspan="2" class="text-center">F</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center small_text d-flex gap-3 border-0 table_input">
                                            <div>ITEM NO</div>
                                            <div> BRIEF DESCRIPTION</div>
                                        </td>
                                        <td class="text-center small_text">DATE ACQUIRED (mm/dd/yyyy)</td>
                                        <td class="text-center small_text">GROSS FAIR MARKET VALUE</td>
                                        <td class="text-center small_text">AMOUNT OF DEBT</td>
                                        <td class="text-center small_text">NET FAIR MARKET VALUE</td>
                                        <td class="text-center small_text" colspan="2">
                                            <div>PROPOSAL FOR DIVISION</div>
                                            <div> Award or Confirm to:</div>
                                            <div class="d-flex gap-3 justify-content-center">
                                                <span> PETITIONER</span>
                                                <span>RESPONDENT</span>
                                            </div>
                                            </td>
                                    </tr>

                                    <tr>
                                        <td rowspan="8" class="small_text">
                                            <div>
                                                <div>7. CREDIT UNION, OTHER DEPOSITORY ACCOUNTS</div>
                                                <div><input type="text" name="credit_acc1" class="w-100  border-0 table_input"></div>
                                                <div><input type="text" name="credit_acc2" class="w-100  border-0 table_input"> </div>
                                                <div><input type="text" name="credit_acc3" class="w-100  border-0 table_input"> </div>
                                            </div>
                                            <div>
                                                <div>
                                                    8.CASH
                                                </div>
                                                <input type="text" name="cash1" class="w-100  border-0 table_input">
                                                <input type="text" name="cash2" class="w-100  border-0 table_input">
                                            </div>
                                            <div>
                                                <div>
                                                    9. TAX REFUND
                                                </div>
                                                <input type="text" name="tax_refund1" class="w-100  border-0 table_input">
                                                <input type="text" name="tax_refund2" class="w-100  border-0 table_input">
                                            </div>
                                            <div>
                                                <div>10. LIFT INSURANCE WITH CASH SURRNDER OR LOAN VALUE</div>
                                                <input type="text" name="loan_val1" class="w-100  border-0 table_input">
                                                <input type="text" name="loan_val2" class="w-100  border-0 table_input">
                                            </div>
                                            <div>
                                                <div>11. STOCKS, BONDS, SECURED,NOTES, MUTUAL FUNDS</div>
                                                <input type="text" name="mut_funds1" class="w-100  border-0 table_input">
                                                <input type="text" name="mut_funds2" class="w-100  border-0 table_input">
                                                <input type="text" name="mut_funds3" class="w-100  border-0 table_input">
                                            </div>
                                            <div>
                                                <div>12. RETIREMENT AND PENSIONS</div>
                                                <input type="text" name="pensions1" class="w-100  border-0 table_input">
                                                <input type="text" name="pensions2" class="w-100  border-0 table_input">
                                                <input type="text" name="pensions3" class="w-100  border-0 table_input">
                                            </div>
                                            <div>
                                                <div>13. PROFIT-SHARING,IRAS,DEFERRED COMPENSATION ANNUTIES</div>
                                                <input type="text" name="profit_sharing1" class="w-100  border-0 table_input">
                                                <input type="text" name="profit_sharing2" class="w-100  border-0 table_input">
                                                <input type="text" name="profit_sharing3" class="w-100  border-0 table_input">
                                            </div>
                                            <div>
                                                <div>14. ACCOUNT RECIEVABLE,UNSECURED NOTES</div>
                                                <input type="text" name="acc_rec1" class="w-100  border-0 table_input">
                                                <input type="text" name="acc_rec2" class="w-100  border-0 table_input">
                                                <input type="text" name="acc_rec3" class="w-100  border-0 table_input">
                                            </div>
                                            <div>
                                                <div>15. PARTERSHIP ,OTHER BUSINESS INTEREST</div>
                                                <input type="text" name="bus_int1" class="w-100  border-0 table_input">
                                                <input type="text" name="bus_int2" class="w-100  border-0 table_input">
                                                <input type="text" name="bus_int3" class="w-100  border-0 table_input">
                                            </div>
                                            <div>
                                                <div>16. OTHER ASSETS</div>
                                                <input type="text" name="other_ass1" class="w-100  border-0 table_input">
                                                <input type="text" name="other_ass2" class="w-100  border-0 table_input">
                                                <input type="text" name="other_ass3" class="w-100  border-0 table_input">
                                            </div>
                                            <div>
                                                <div>17. ASSETS FROM CONTINUATION SHEET</div>
                                            </div>
                                        </td>
                                        <td rowspan="8" class="small_text">
                                            <div>
                                                <br>
                                                <br>
                                                <div><input type="text" name="ca_date_a1" class="w-100 border-0 table_input"></div>
                                                <div><input type="text" name="ca_date_a2" class=" border-0 table_input"></div>
                                                <div><input type="text" name="ca_date_a2" class=" border-0 table_input"></div>
                                            </div>
                                            <br>
                                            <div>
                                                <input type="text" name="cash_date1" class="w-100 border-0 table_input">
                                                <input type="text" name="cash_date2" class="w-100  border-0 table_input">
                                            </div>
                                            <br>
                                            <div>
                                                <input type="text" name="tr_date1" class="w-100 border-0 table_input">
                                                <input type="text" name="tr_date2" class="w-100  border-0 table_input">
                                            </div>
                                            <br>
                                            <br>
                                            <div>
                                                <input type="text" name="lv_date1" class="w-100 border-0 table_input">
                                                <input type="text" name="lv_date2" class="w-100  border-0 table_input">
                                            </div>
                                            <br>
                                            <br>
                                            <br>
                                            <div>
                                                <input type="text" name="mf_date1" class="w-100 border-0 table_input">
                                                <input type="text" name="mf_date2" class="w-100  border-0 table_input">
                                                <input type="text" name="mf_date3" class="w-100 border-0 table_input">
                                            </div>
                                            <br>
                                            <div>
                                                <input type="text" name="rp_date1" class="w-100 border-0 table_input">
                                                <input type="text" name="rp_date2" class="w-100  border-0 table_input">
                                                <input type="text" name="rp_date3" class="w-100 border-0 table_input">
                                            </div>
                                            <br>
                                            <br>
                                            <br>
                                            <div>
                                                <input type="text" name="ps_date1" class="w-100 border-0 table_input">
                                                <input type="text" name="ps_date2" class="w-100  border-0 table_input">
                                                <input type="text" name="ps_date3" class="w-100 border-0 table_input">
                                            </div>
                                            <br>
                                            <br>
                                            <br>
                                            <div>
                                                <input type="text" name="ar_date1" class="w-100 border-0 table_input">
                                                <input type="text" name="ar_date2" class="w-100  border-0 table_input">
                                                <input type="text" name="ar_date3" class="w-100 border-0 table_input">
                                            </div>
                                            <br>
                                            <br>
                                            <div>
                                                <input type="text" name="bi_date1" class="w-100 border-0 table_input">
                                                <input type="text" name="bi_date2" class="w-100  border-0 table_input">
                                                <input type="text" name="bi_date3" class="w-100 border-0 table_input">
                                            </div>
                                            <br>
                                            <div>
                                                <input type="text" name="oa_date1" class="w-100 border-0 table_input">
                                                <input type="text" name="oa_date2" class="w-100  border-0 table_input">
                                                <input type="text" name="oa_date3" class="w-100 border-0 table_input">
                                            </div>
                                            <br>
                                            <div>
                                                <input type="text" name="cs_date1" class="w-100 border-0 table_input">
                                            </div>
                                        </td>
                                        <td rowspan="8" class="small_text">
                                            <div>
                                            <div>$</div>
                                            <br>
                                            <div class="small_text">
                                                <div><input type="text" name="ca_gross_val1" class="w-100  border-0 table_input text-end"></div>
                                                <div><input type="text" name="ca_gross_val2" class="w-100  border-0 table_input text-end"></div>
                                                <div><input type="text" name="ca_gross_val2" class="w-100  border-0 table_input text-end"></div>
                                            </div>
                                            </div>
                                            <br>
                                            <div class="small_text">
                                                <input type="text" name="cash_gross_val1" class="w-100 border-0 table_input text-end">
                                                <input type="text" name="cash_gross_val2" class="w-100  border-0 table_input text-end">
                                            </div>
                                            <br>
                                            <div class="small_text">
                                                <input type="text" name="tr_gross_val1" class="w-100 border-0 table_input text-end">
                                                <input type="text" name="tr_gross_val2" class="w-100  border-0 table_input text-end">
                                            </div>
                                            <br>
                                            <br>
                                            <div class="small_text">
                                                <input type="text" name="lv_gross_val1" class="w-100 border-0 table_input text-end">
                                                <input type="text" name="lv_gross_val2" class="w-100  border-0 table_input text-end">
                                            </div>
                                            <br>
                                            <br>
                                            <br>
                                            <div class="small_text">
                                                <input type="text" name="mf_gross_val1" class="w-100 border-0 table_input text-end">
                                                <input type="text" name="mf_gross_val2" class="w-100  border-0 table_input text-end">
                                                <input type="text" name="mf_gross_val3" class="w-100 border-0 table_input text-end">
                                            </div>
                                            <br>
                                            <br>
                                            <div class="small_text">
                                                <input type="text" name="rp_gross_val1" class="w-100 border-0 table_input text-end">
                                                <input type="text" name="rp_gross_val2" class="w-100  border-0 table_input text-end">
                                                <input type="text" name="rp_gross_val3" class="w-100 border-0 table_input text-end">
                                            </div>
                                            <br>
                                            <br>
                                            <div>
                                                <input type="text" name="ps_gross1" class="w-100 border-0 table_input">
                                                <input type="text" name="ps_gross2" class="w-100  border-0 table_input">
                                                <input type="text" name="ps_gross3" class="w-100 border-0 table_input">
                                            </div>
                                            <br>
                                            <br>
                                            <br>
                                            <div>
                                                <input type="text" name="ar_gross1" class="w-100 border-0 table_input">
                                                <input type="text" name="ar_gross2" class="w-100  border-0 table_input">
                                                <input type="text" name="ar_gross3" class="w-100 border-0 table_input">
                                            </div>
                                            <br>
                                            <br>
                                            <div>
                                                <input type="text" name="bi_gross1" class="w-100 border-0 table_input">
                                                <input type="text" name="bi_gross2" class="w-100  border-0 table_input">
                                                <input type="text" name="bi_gross3" class="w-100 border-0 table_input">
                                            </div>
                                            <br>
                                            <div>
                                                <input type="text" name="oa_gross1" class="w-100 border-0 table_input">
                                                <input type="text" name="oa_gross2" class="w-100  border-0 table_input">
                                                <input type="text" name="oa_gross3" class="w-100 border-0 table_input">
                                            </div>
                                            <br>
                                            <div>
                                                <input type="text" name="cs_gross1" class="w-100 border-0 table_input">
                                            </div>
                                        </td>
                                        <td rowspan="8" class="small_text">
                                            <div>
                                                <div>$</div>
                                                <br>
                                                <div class="small_text">
                                                    <div><input type="text" name="ca_debt_amt1" class="w-100  border-0 table_input text-end"></div>
                                                    <div><input type="text" name="ca_debt_amt2" class="w-100  border-0 table_input text-end"></div>
                                                    <div><input type="text" name="ca_debt_amt2" class="w-100  border-0 table_input text-end"></div>
                                                </div>
                                                </div>
                                                <br>
                                                <div class="small_text">
                                                    <input type="text" name="cash_debt_amt1" class="w-100 border-0 table_input text-end">
                                                    <input type="text" name="cash_debt_amt2" class="w-100  border-0 table_input text-end">
                                                </div>
                                                <br>
                                                <div class="small_text">
                                                    <input type="text" name="tr_debt_amt1" class="w-100 border-0 table_input text-end">
                                                    <input type="text" name="tr_debt_amt2" class="w-100  border-0 table_input text-end">
                                                </div>
                                                <br>
                                                <br>
                                                <div class="small_text">
                                                    <input type="text" name="lv_debt_amt1" class="w-100 border-0 table_input text-end">
                                                    <input type="text" name="lv_debt_amt2" class="w-100  border-0 table_input text-end">
                                                </div>
                                                <br>
                                                <br>
                                                <br>
                                                <div class="small_text">
                                                    <input type="text" name="mf_debt_amt1" class="w-100 border-0 table_input text-end">
                                                    <input type="text" name="mf_debt_amt2" class="w-100  border-0 table_input text-end">
                                                    <input type="text" name="mf_debt_amt3" class="w-100 border-0 table_input text-end">
                                                </div>
                                                <br>
                                                <br>
                                                <div class="small_text">
                                                    <input type="text" name="rp_debt_amt1" class="w-100 border-0 table_input text-end">
                                                    <input type="text" name="rp_debt_amt2" class="w-100  border-0 table_input text-end">
                                                    <input type="text" name="rp_debt_amt3" class="w-100 border-0 table_input text-end">
                                                </div>
                                                <br>
                                                <br>
                                                <div>
                                                    <input type="text" name="ps_debt_amt1" class="w-100 border-0 table_input">
                                                    <input type="text" name="ps_debt_amt2" class="w-100  border-0 table_input">
                                                    <input type="text" name="ps_debt_amt3" class="w-100 border-0 table_input">
                                                </div>
                                                <br>
                                                <br>
                                                <br>
                                                <div>
                                                    <input type="text" name="ar_debt_amt1" class="w-100 border-0 table_input">
                                                    <input type="text" name="ar_debt_amt2" class="w-100  border-0 table_input">
                                                    <input type="text" name="ar_debt_amt3" class="w-100 border-0 table_input">
                                                </div>
                                                <br>
                                                <br>
                                                <div>
                                                    <input type="text" name="bi_debt_amt1" class="w-100 border-0 table_input">
                                                    <input type="text" name="bi_debt_amt2" class="w-100  border-0 table_input">
                                                    <input type="text" name="bi_debt_amt3" class="w-100 border-0 table_input">
                                                </div>
                                                <br>
                                                <div>
                                                    <input type="text" name="oa_debt_amt1" class="w-100 border-0 table_input">
                                                    <input type="text" name="oa_debt_amt2" class="w-100  border-0 table_input">
                                                    <input type="text" name="oa_debt_amt3" class="w-100 border-0 table_input">
                                                </div>
                                                <br>
                                                <div>
                                                    <input type="text" name="cs_debt_amt1" class="w-100 border-0 table_input">
                                                </div>
                                        </td>
                                        <td rowspan="8" class="small_text">
                                            <div>
                                                <div>$</div>
                                                <br>
                                                <div class="small_text">
                                                    <div><input type="text" name="ca_mark_val1" class="w-100  border-0 table_input text-end"></div>
                                                    <div><input type="text" name="ca_mark_val2" class="w-100  border-0 table_input text-end"></div>
                                                    <div><input type="text" name="ca_mark_val2" class="w-100  border-0 table_input text-end"></div>
                                                </div>
                                                </div>
                                                <br>
                                                <div class="small_text">
                                                    <input type="text" name="cash_mark_val1" class="w-100 border-0 table_input text-end">
                                                    <input type="text" name="cash_mark_val2" class="w-100  border-0 table_input text-end">
                                                </div>
                                                <br>
                                                <div class="small_text">
                                                    <input type="text" name="tr_mark_val1" class="w-100 border-0 table_input text-end">
                                                    <input type="text" name="tr_mark_val2" class="w-100  border-0 table_input text-end">
                                                </div>
                                                <br>
                                                <br>
                                                <div class="small_text">
                                                    <input type="text" name="lv_mark_val1" class="w-100 border-0 table_input text-end">
                                                    <input type="text" name="lv_mark_val2" class="w-100  border-0 table_input text-end">
                                                </div>
                                                <br>
                                                <br>
                                                <br>
                                                <div class="small_text">
                                                    <input type="text" name="mf_mark_val1" class="w-100 border-0 table_input text-end">
                                                    <input type="text" name="mf_mark_val2" class="w-100  border-0 table_input text-end">
                                                    <input type="text" name="mf_mark_val3" class="w-100 border-0 table_input text-end">
                                                </div>
                                                <br>
                                                <br>
                                                <div class="small_text">
                                                    <input type="text" name="rp_mark_val1" class="w-100 border-0 table_input text-end">
                                                    <input type="text" name="rp_mark_val2" class="w-100  border-0 table_input text-end">
                                                    <input type="text" name="rp_mark_val3" class="w-100 border-0 table_input text-end">
                                                </div>
                                                <br>
                                                <br>
                                                <div>
                                                    <input type="text" name="ps_mark_val1" class="w-100 border-0 table_input">
                                                    <input type="text" name="ps_mark_val2" class="w-100  border-0 table_input">
                                                    <input type="text" name="ps_mark_val3" class="w-100 border-0 table_input">
                                                </div>
                                                <br>
                                                <br>
                                                <br>
                                                <div>
                                                    <input type="text" name="ar_mark_val1" class="w-100 border-0 table_input">
                                                    <input type="text" name="ar_mark_val2" class="w-100  border-0 table_input">
                                                    <input type="text" name="ar_mark_val3" class="w-100 border-0 table_input">
                                                </div>
                                                <br>
                                                <br>
                                                <div>
                                                    <input type="text" name="bi_mark_val1" class="w-100 border-0 table_input">
                                                    <input type="text" name="bi_mark_val2" class="w-100  border-0 table_input">
                                                    <input type="text" name="bi_mark_val3" class="w-100 border-0 table_input">
                                                </div>
                                                <br>
                                                <div>
                                                    <input type="text" name="oa_mark_val1" class="w-100 border-0 table_input">
                                                    <input type="text" name="oa_mark_val2" class="w-100  border-0 table_input">
                                                    <input type="text" name="oa_mark_val3" class="w-100 border-0 table_input">
                                                </div>
                                                <br>
                                                <div>
                                                    <input type="text" name="cs_mark_val1" class="w-100 border-0 table_input">
                                                </div>
                                        </td>
                                        <td rowspan="8" class="small_text">
                                            <div>
                                                <div>$</div>
                                                <br>
                                                <div class="small_text">
                                                    <div><input type="text" name="ca_pio1" class="w-100  border-0 table_input text-end"></div>
                                                    <div><input type="text" name="ca_pio2" class="w-100  border-0 table_input text-end"></div>
                                                    <div><input type="text" name="ca_pio2" class="w-100  border-0 table_input text-end"></div>
                                                </div>
                                                </div>
                                                <br>
                                                <div class="small_text">
                                                    <input type="text" name="cash_pio1" class="w-100 border-0 table_input text-end">
                                                    <input type="text" name="cash_pio2" class="w-100  border-0 table_input text-end">
                                                </div>
                                                <br>
                                                <div class="small_text">
                                                    <input type="text" name="tr_pio1" class="w-100 border-0 table_input text-end">
                                                    <input type="text" name="tr_pio2" class="w-100  border-0 table_input text-end">
                                                </div>
                                                <br>
                                                <br>
                                                <div class="small_text">
                                                    <input type="text" name="lv_pio1" class="w-100 border-0 table_input text-end">
                                                    <input type="text" name="lv_pio2" class="w-100  border-0 table_input text-end">
                                                </div>
                                                <br>
                                                <br>
                                                <br>
                                                <div class="small_text">
                                                    <input type="text" name="mf_pio1" class="w-100 border-0 table_input text-end">
                                                    <input type="text" name="mf_pio2" class="w-100  border-0 table_input text-end">
                                                    <input type="text" name="mf_pio3" class="w-100 border-0 table_input text-end">
                                                </div>
                                                <br>
                                                <br>
                                                <div class="small_text">
                                                    <input type="text" name="rp_pio1" class="w-100 border-0 table_input text-end">
                                                    <input type="text" name="rp_pio2" class="w-100  border-0 table_input text-end">
                                                    <input type="text" name="rp_pio3" class="w-100 border-0 table_input text-end">
                                                </div>
                                                <br>
                                                <br>
                                                <div>
                                                    <input type="text" name="ps_pio1" class="w-100 border-0 table_input">
                                                    <input type="text" name="ps_pio2" class="w-100  border-0 table_input">
                                                    <input type="text" name="ps_pio3" class="w-100 border-0 table_input">
                                                </div>
                                                <br>
                                                <br>
                                                <br>
                                                <div>
                                                    <input type="text" name="ar_pio1" class="w-100 border-0 table_input">
                                                    <input type="text" name="ar_pio2" class="w-100  border-0 table_input">
                                                    <input type="text" name="ar_pio3" class="w-100 border-0 table_input">
                                                </div>
                                                <br>
                                                <br>
                                                <div>
                                                    <input type="text" name="bi_pio1" class="w-100 border-0 table_input">
                                                    <input type="text" name="bi_pio2" class="w-100  border-0 table_input">
                                                    <input type="text" name="bi_pio3" class="w-100 border-0 table_input">
                                                </div>
                                                <br>
                                                <div>
                                                    <input type="text" name="oa_pio1" class="w-100 border-0 table_input">
                                                    <input type="text" name="oa_pio2" class="w-100  border-0 table_input">
                                                    <input type="text" name="oa_pio3" class="w-100 border-0 table_input">
                                                </div>
                                                <br>
                                                <div>
                                                    <input type="text" name="cs_pio1" class="w-100 border-0 table_input">
                                                </div>
                                        </td>
                                        <td rowspan="8" class="small_text">
                                            <div>
                                                <div>$</div>
                                                <br>
                                                <div class="small_text">
                                                    <div><input type="text" name="ca_resp1" class="w-100  border-0 table_input text-end"></div>
                                                    <div><input type="text" name="ca_resp2" class="w-100  border-0 table_input text-end"></div>
                                                    <div><input type="text" name="ca_resp2" class="w-100  border-0 table_input text-end"></div>
                                                </div>
                                                </div>
                                                <br>
                                                <div class="small_text">
                                                    <input type="text" name="cash_resp1" class="w-100 border-0 table_input text-end">
                                                    <input type="text" name="cash_resp2" class="w-100  border-0 table_input text-end">
                                                </div>
                                                <br>
                                                <div class="small_text">
                                                    <input type="text" name="tr_resp1" class="w-100 border-0 table_input text-end">
                                                    <input type="text" name="tr_resp2" class="w-100  border-0 table_input text-end">
                                                </div>
                                                <br>
                                                <br>
                                                <div class="small_text">
                                                    <input type="text" name="lv_resp1" class="w-100 border-0 table_input text-end">
                                                    <input type="text" name="lv_resp2" class="w-100  border-0 table_input text-end">
                                                </div>
                                                <br>
                                                <br>
                                                <br>
                                                <div class="small_text">
                                                    <input type="text" name="mf_resp1" class="w-100 border-0 table_input text-end">
                                                    <input type="text" name="mf_resp2" class="w-100  border-0 table_input text-end">
                                                    <input type="text" name="mf_resp3" class="w-100 border-0 table_input text-end">
                                                </div>
                                                <br>
                                                <br>
                                                <div class="small_text">
                                                    <input type="text" name="rp_resp1" class="w-100 border-0 table_input text-end">
                                                    <input type="text" name="rp_resp2" class="w-100  border-0 table_input text-end">
                                                    <input type="text" name="rp_resp3" class="w-100 border-0 table_input text-end">
                                                </div>
                                                <br>
                                                <br>
                                                <div>
                                                    <input type="text" name="ps_resp1" class="w-100 border-0 table_input">
                                                    <input type="text" name="ps_resp2" class="w-100  border-0 table_input">
                                                    <input type="text" name="ps_resp3" class="w-100 border-0 table_input">
                                                </div>
                                                <br>
                                                <br>
                                                <br>
                                                <div>
                                                    <input type="text" name="ar_resp1" class="w-100 border-0 table_input">
                                                    <input type="text" name="ar_resp2" class="w-100  border-0 table_input">
                                                    <input type="text" name="ar_resp3" class="w-100 border-0 table_input">
                                                </div>
                                                <br>
                                                <br>
                                                <div>
                                                    <input type="text" name="bi_resp1" class="w-100 border-0 table_input">
                                                    <input type="text" name="bi_resp2" class="w-100  border-0 table_input">
                                                    <input type="text" name="bi_resp3" class="w-100 border-0 table_input">
                                                </div>
                                                <br>
                                                <div>
                                                    <input type="text" name="oa_resp1" class="w-100 border-0 table_input">
                                                    <input type="text" name="oa_resp2" class="w-100  border-0 table_input">
                                                    <input type="text" name="oa_resp3" class="w-100 border-0 table_input">
                                                </div>
                                                <br>
                                                <div>
                                                    <input type="text" name="cs_resp1" class="w-100 border-0 table_input">
                                                </div>
                                        </td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="small_text"><div>18. TOTAL ASSETS</div></td>
                                        <td class="small_text">
                                            <input type="text" name="ta_date" class="w-100 border-0 table_input">
                                        </td>
                                        <td class="small_text">
                                            <input type="text" name="ta_mark_val" class="w-100 border-0 table_input">
                                        </td>
                                        <td class="small_text">
                                            <input type="text" name="ta_debt_amt" class="w-100 border-0 table_input">
                                        </td>
                                        <td class="small_text">
                                            <input type="text" name="ta_nf" class="w-100 border-0 table_input">
                                        </td>
                                        <td class="small_text">
                                            <input type="text" name="ta_pip" class="w-100 border-0 table_input">
                                        </td>
                                        <td class="small_text">
                                            <input type="text" name="ta_res" class="w-100 border-0 table_input">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                    </div>
                    @include('layouts.footer7', ['page' => 2])
                </section>
                <section class="section_area  px-lg-5 px-2" id="third_section">
                    <div class="table-responsive pt-5">
                        <table class="table-bordered border border-2 border-dark">
                            <thead>
                                <tr>
                                    <td class="text-center">A</td>
                                    <td class="text-center">B</td>
                                    <td class="text-center">C</td>
                                    <td colspan="2" class="text-center">D</td>
                                </tr>
                                <tr>
                                    <td class="text-center small_text d-flex gap-3 border-0 table_input">
                                        <div>ITEM NO</div>
                                        <div> DEBTS— SHOW TO WHOM OWED</div>
                                    </td>
                                    <td class="text-center small_text">DATE INCURRED</td>
                                    <td class="text-center small_text">TOTAL OWING</td>
                                    <td class="text-center small_text" colspan="2">
                                        <div>PROPOSAL FOR DIVISION</div>
                                        <div> Award or Confirm to:</div>
                                        <div class="d-flex gap-3 justify-content-center">
                                            <span> PETITIONER</span>
                                            <span>RESPONDENT</span>
                                        </div>
                                        </td>
                                </tr>
                                <tr>
                                    <td rowspan="8" class="small_text">
                                        <div>
                                            <div>19. STUDENT LOANS</div>
                                            <div><input type="text" name="sl1" class="w-100  border-0 table_input"></div>
                                            <div><input type="text" name="sl2" class="w-100  border-0 table_input"> </div>
                                            <div><input type="text" name="sl3" class="w-100  border-0 table_input"> </div>
                                            <div><input type="text" name="sl4" class="w-100  border-0 table_input"> </div>
                                            <div><input type="text" name="sl5" class="w-100  border-0 table_input"> </div>
                                        </div>
                                        <div>
                                            <div>
                                                20.TAXES
                                            </div>
                                            <input type="text" name="tax1" class="w-100  border-0 table_input">
                                            <input type="text" name="tax2" class="w-100  border-0 table_input">
                                            <input type="text" name="tax3" class="w-100  border-0 table_input">
                                            <input type="text" name="tax4" class="w-100  border-0 table_input">
                                        </div>
                                        <div>
                                            <div>
                                                21. SUPPORT ARREARAGES
                                            </div>
                                            <input type="text" name="sa1" class="w-100  border-0 table_input">
                                            <input type="text" name="sa2" class="w-100  border-0 table_input">
                                            <input type="text" name="sa3" class="w-100  border-0 table_input">
                                            <input type="text" name="sa4" class="w-100  border-0 table_input">
                                        </div>
                                        <div>
                                            <div>22. LOANS—UNSECURED</div>
                                            <input type="text" name="lous1" class="w-100  border-0 table_input">
                                            <input type="text" name="lous2" class="w-100  border-0 table_input">
                                            <input type="text" name="lous3" class="w-100  border-0 table_input">
                                            <input type="text" name="lous4" class="w-100  border-0 table_input">
                                        </div>
                                        <div>
                                            <div>23. CREDIT CARDS</div>
                                            <input type="text" name="credit_card1" class="w-100  border-0 table_input">
                                            <input type="text" name="credit_card2" class="w-100  border-0 table_input">
                                            <input type="text" name="credit_card3" class="w-100  border-0 table_input">
                                            <input type="text" name="credit_card4" class="w-100  border-0 table_input">
                                            <input type="text" name="credit_card5" class="w-100  border-0 table_input">
                                            <input type="text" name="credit_card6" class="w-100  border-0 table_input">
                                        </div>
                                        <div>
                                            <div>24. OTHER DEBTS</div>
                                            <input type="text" name="other_debt1" class="w-100  border-0 table_input">
                                            <input type="text" name="other_debt2" class="w-100  border-0 table_input">
                                            <input type="text" name="other_debt3" class="w-100  border-0 table_input">
                                            <input type="text" name="other_debt4" class="w-100  border-0 table_input">
                                            <input type="text" name="other_debt5" class="w-100  border-0 table_input">
                                            <input type="text" name="other_debt6" class="w-100  border-0 table_input">
                                            <input type="text" name="other_debt7" class="w-100  border-0 table_input">
                                            <input type="text" name="other_debt8" class="w-100  border-0 table_input">
                                        </div>
                                        <div>
                                            <div>25. OTHER DEBTS FROM CONTINUATION SHEET</div>
                                        </div>
                                    </td>
                                    <td rowspan="8" class="small_text">
                                        <div>
                                            <br>
                                             <div><input type="text" name="sl_date_incured1" class="w-100  border-0 table_input"></div>
                                             <div><input type="text" name="sl_date_incured2" class="w-100  border-0 table_input"> </div>
                                             <div><input type="text" name="sl_date_incured3" class="w-100  border-0 table_input"> </div>
                                             <div><input type="text" name="sl_date_incured4" class="w-100  border-0 table_input"> </div>
                                             <div><input type="text" name="sl_date_incured5" class="w-100  border-0 table_input"> </div>
                                         </div>
                                         <div>
                                            <br>
                                             <input type="text" name="tax_date_incured1" class="w-100  border-0 table_input">
                                             <input type="text" name="tax_date_incured2" class="w-100  border-0 table_input">
                                             <input type="text" name="tax_date_incured3" class="w-100  border-0 table_input">
                                             <input type="text" name="tax_date_incured4" class="w-100  border-0 table_input">
                                         </div>
                                         <div>
                                             <br>
                                             <input type="text" name="sa_date_incured1" class="w-100  border-0 table_input">
                                             <input type="text" name="sa_date_incured2" class="w-100  border-0 table_input">
                                             <input type="text" name="sa_date_incured3" class="w-100  border-0 table_input">
                                             <input type="text" name="sa_date_incured4" class="w-100  border-0 table_input">
                                         </div>
                                         <div>
                                           <br>
                                             <input type="text" name="lous_date_incured1" class="w-100  border-0 table_input">
                                             <input type="text" name="lous_date_incured2" class="w-100  border-0 table_input">
                                             <input type="text" name="lous_date_incured3" class="w-100  border-0 table_input">
                                             <input type="text" name="lous_date_incured4" class="w-100  border-0 table_input">
                                         </div>
                                         <div>
                                            <br>
                                             <input type="text" name="credit_card_date_incured1" class="w-100  border-0 table_input">
                                             <input type="text" name="credit_card_date_incured2" class="w-100  border-0 table_input">
                                             <input type="text" name="credit_card_date_incured3" class="w-100  border-0 table_input">
                                             <input type="text" name="credit_card_date_incured4" class="w-100  border-0 table_input">
                                             <input type="text" name="credit_card_date_incured5" class="w-100  border-0 table_input">
                                             <input type="text" name="credit_card_date_incured6" class="w-100  border-0 table_input">
                                         </div>
                                         <div>
                                            <br>
                                             <input type="text" name="other_debt_date_incured1" class="w-100  border-0 table_input">
                                             <input type="text" name="other_debt_date_incured2" class="w-100  border-0 table_input">
                                             <input type="text" name="other_debt_date_incured3" class="w-100  border-0 table_input">
                                             <input type="text" name="other_debt_date_incured4" class="w-100  border-0 table_input">
                                             <input type="text" name="other_debt_date_incured5" class="w-100  border-0 table_input">
                                             <input type="text" name="other_debt_date_incured6" class="w-100  border-0 table_input">
                                             <input type="text" name="other_debt_date_incured7" class="w-100  border-0 table_input">
                                             <input type="text" name="other_debt_date_incured8" class="w-100  border-0 table_input">
                                         </div>
                                         <div>
                                           <br>
                                             <input type="text" name="other_detb_sheet_date_incured" class="w-100  border-0 table_input">
                                         </div>
                                    </td>
                                    <td rowspan="8" class="small_text">
                                        <div>
                                            <br>
                                             <div><input type="text" name="sl_total_owing1" class="w-100  border-0 table_input"></div>
                                             <div><input type="text" name="sl_total_owing2" class="w-100  border-0 table_input"> </div>
                                             <div><input type="text" name="sl_total_owing3" class="w-100  border-0 table_input"> </div>
                                             <div><input type="text" name="sl_total_owing4" class="w-100  border-0 table_input"> </div>
                                             <div><input type="text" name="sl_total_owing5" class="w-100  border-0 table_input"> </div>
                                         </div>
                                         <div>
                                            <br>
                                             <input type="text" name="tax_total_owing1" class="w-100  border-0 table_input">
                                             <input type="text" name="tax_total_owing2" class="w-100  border-0 table_input">
                                             <input type="text" name="tax_total_owing3" class="w-100  border-0 table_input">
                                             <input type="text" name="tax_total_owing4" class="w-100  border-0 table_input">
                                         </div>
                                         <div>
                                             <br>
                                             <input type="text" name="sa_total_owing1" class="w-100  border-0 table_input">
                                             <input type="text" name="sa_total_owing2" class="w-100  border-0 table_input">
                                             <input type="text" name="sa_total_owing3" class="w-100  border-0 table_input">
                                             <input type="text" name="sa_total_owing4" class="w-100  border-0 table_input">
                                         </div>
                                         <div>
                                           <br>
                                             <input type="text" name="lous_total_owing1" class="w-100  border-0 table_input">
                                             <input type="text" name="lous_total_owing2" class="w-100  border-0 table_input">
                                             <input type="text" name="lous_total_owing3" class="w-100  border-0 table_input">
                                             <input type="text" name="lous_total_owing4" class="w-100  border-0 table_input">
                                         </div>
                                         <div>
                                            <br>
                                             <input type="text" name="credit_card_total_owing1" class="w-100  border-0 table_input">
                                             <input type="text" name="credit_card_total_owing2" class="w-100  border-0 table_input">
                                             <input type="text" name="credit_card_total_owing3" class="w-100  border-0 table_input">
                                             <input type="text" name="credit_card_total_owing4" class="w-100  border-0 table_input">
                                             <input type="text" name="credit_card_total_owing5" class="w-100  border-0 table_input">
                                             <input type="text" name="credit_card_total_owing6" class="w-100  border-0 table_input">
                                         </div>
                                         <div>
                                            <br>
                                             <input type="text" name="other_debt_total_owing1" class="w-100  border-0 table_input">
                                             <input type="text" name="other_debt_total_owing2" class="w-100  border-0 table_input">
                                             <input type="text" name="other_debt_total_owing3" class="w-100  border-0 table_input">
                                             <input type="text" name="other_debt_total_owing4" class="w-100  border-0 table_input">
                                             <input type="text" name="other_debt_total_owing5" class="w-100  border-0 table_input">
                                             <input type="text" name="other_debt_total_owing6" class="w-100  border-0 table_input">
                                             <input type="text" name="other_debt_total_owing7" class="w-100  border-0 table_input">
                                             <input type="text" name="other_debt_total_owing8" class="w-100  border-0 table_input">
                                         </div>
                                         <div>
                                           <br>
                                             <input type="text" name="other_detb_sheet_total_owing" class="w-100  border-0 table_input">
                                         </div>
                                    </td>
                                    <td rowspan="8" class="small_text">
                                        <div>
                                            <br>
                                             <div><input type="text" name="sl_pio1" class="w-100  border-0 table_input"></div>
                                             <div><input type="text" name="sl_pio2" class="w-100  border-0 table_input"> </div>
                                             <div><input type="text" name="sl_pio3" class="w-100  border-0 table_input"> </div>
                                             <div><input type="text" name="sl_pio4" class="w-100  border-0 table_input"> </div>
                                             <div><input type="text" name="sl_pio5" class="w-100  border-0 table_input"> </div>
                                         </div>
                                         <div>
                                            <br>
                                             <input type="text" name="tax_pio1" class="w-100  border-0 table_input">
                                             <input type="text" name="tax_pio2" class="w-100  border-0 table_input">
                                             <input type="text" name="tax_pio3" class="w-100  border-0 table_input">
                                             <input type="text" name="tax_pio4" class="w-100  border-0 table_input">
                                         </div>
                                         <div>
                                             <br>
                                             <input type="text" name="sa_pio1" class="w-100  border-0 table_input">
                                             <input type="text" name="sa_pio2" class="w-100  border-0 table_input">
                                             <input type="text" name="sa_pio3" class="w-100  border-0 table_input">
                                             <input type="text" name="sa_pio4" class="w-100  border-0 table_input">
                                         </div>
                                         <div>
                                           <br>
                                             <input type="text" name="lous_pio1" class="w-100  border-0 table_input">
                                             <input type="text" name="lous_pio2" class="w-100  border-0 table_input">
                                             <input type="text" name="lous_pio3" class="w-100  border-0 table_input">
                                             <input type="text" name="lous_pio4" class="w-100  border-0 table_input">
                                         </div>
                                         <div>
                                            <br>
                                             <input type="text" name="credit_card_pio1" class="w-100  border-0 table_input">
                                             <input type="text" name="credit_card_pio2" class="w-100  border-0 table_input">
                                             <input type="text" name="credit_card_pio3" class="w-100  border-0 table_input">
                                             <input type="text" name="credit_card_pio4" class="w-100  border-0 table_input">
                                             <input type="text" name="credit_card_pio5" class="w-100  border-0 table_input">
                                             <input type="text" name="credit_card_pio6" class="w-100  border-0 table_input">
                                         </div>
                                         <div>
                                            <br>
                                             <input type="text" name="other_debt_pio1" class="w-100  border-0 table_input">
                                             <input type="text" name="other_debt_pio2" class="w-100  border-0 table_input">
                                             <input type="text" name="other_debt_pio3" class="w-100  border-0 table_input">
                                             <input type="text" name="other_debt_pio4" class="w-100  border-0 table_input">
                                             <input type="text" name="other_debt_pio5" class="w-100  border-0 table_input">
                                             <input type="text" name="other_debt_pio6" class="w-100  border-0 table_input">
                                             <input type="text" name="other_debt_pio7" class="w-100  border-0 table_input">
                                             <input type="text" name="other_debt_pio8" class="w-100  border-0 table_input">
                                         </div>
                                         <div>
                                           <br>
                                             <input type="text" name="other_detb_sheet_pio" class="w-100  border-0 table_input">
                                         </div>
                                    </td>
                                     <td rowspan="8" class="small_text">
                                        <div>
                                           <br>
                                            <div><input type="text" name="sl_resp1" class="w-100  border-0 table_input"></div>
                                            <div><input type="text" name="sl_resp2" class="w-100  border-0 table_input"> </div>
                                            <div><input type="text" name="sl_resp3" class="w-100  border-0 table_input"> </div>
                                            <div><input type="text" name="sl_resp4" class="w-100  border-0 table_input"> </div>
                                            <div><input type="text" name="sl_resp5" class="w-100  border-0 table_input"> </div>
                                        </div>
                                        <div>
                                           <br>
                                            <input type="text" name="tax_resp1" class="w-100  border-0 table_input">
                                            <input type="text" name="tax_resp2" class="w-100  border-0 table_input">
                                            <input type="text" name="tax_resp3" class="w-100  border-0 table_input">
                                            <input type="text" name="tax_resp4" class="w-100  border-0 table_input">
                                        </div>
                                        <div>
                                            <br>
                                            <input type="text" name="sa_resp1" class="w-100  border-0 table_input">
                                            <input type="text" name="sa_resp2" class="w-100  border-0 table_input">
                                            <input type="text" name="sa_resp3" class="w-100  border-0 table_input">
                                            <input type="text" name="sa_resp4" class="w-100  border-0 table_input">
                                        </div>
                                        <div>
                                          <br>
                                            <input type="text" name="lous_resp1" class="w-100  border-0 table_input">
                                            <input type="text" name="lous_resp2" class="w-100  border-0 table_input">
                                            <input type="text" name="lous_resp3" class="w-100  border-0 table_input">
                                            <input type="text" name="lous_resp4" class="w-100  border-0 table_input">
                                        </div>
                                        <div>
                                           <br>
                                            <input type="text" name="credit_card_resp1" class="w-100  border-0 table_input">
                                            <input type="text" name="credit_card_resp2" class="w-100  border-0 table_input">
                                            <input type="text" name="credit_card_resp3" class="w-100  border-0 table_input">
                                            <input type="text" name="credit_card_resp4" class="w-100  border-0 table_input">
                                            <input type="text" name="credit_card_resp5" class="w-100  border-0 table_input">
                                            <input type="text" name="credit_card_resp6" class="w-100  border-0 table_input">
                                        </div>
                                        <div>
                                           <br>
                                            <input type="text" name="other_debt_resp1" class="w-100  border-0 table_input">
                                            <input type="text" name="other_debt_resp2" class="w-100  border-0 table_input">
                                            <input type="text" name="other_debt_resp3" class="w-100  border-0 table_input">
                                            <input type="text" name="other_debt_resp4" class="w-100  border-0 table_input">
                                            <input type="text" name="other_debt_resp5" class="w-100  border-0 table_input">
                                            <input type="text" name="other_debt_resp6" class="w-100  border-0 table_input">
                                            <input type="text" name="other_debt_resp7" class="w-100  border-0 table_input">
                                            <input type="text" name="other_debt_resp8" class="w-100  border-0 table_input">
                                        </div>
                                        <div>
                                          <br>
                                            <input type="text" name="other_detb_sheet" class="w-100  border-0 table_input">
                                        </div>
                                    </td>
                                </tr>
                            </thead>
                            <tr>
                                <td class="small_text"><div>26. TOTAL DEBTS</div></td>
                                <td class="small_text">
                                    <input type="text" name="tb_di" class="w-100 border-0 table_input">
                                </td>
                                <td class="small_text">
                                    <input type="text" name="tb_to" class="w-100 border-0 table_input">
                                </td>
                                <td class="small_text">
                                    <input type="text" name="tb_pio" class="w-100 border-0 table_input">
                                </td>
                                <td class="small_text">
                                    <input type="text" name="tb_resp" class="w-100 border-0 table_input">
                                </td>
                            </tr>
                        </tbody>
                        </table>
                        <div class="px-3">
                            <div class="d-flex">
                                <input type="checkbox" class="me-2" name="continuation_declaration" value="Yes"> A Continuation of Property Declaration (<div class=" "> <a href="https://www.courts.ca.gov/documents/fl161.pdf" target="_blank">form FL-161</a></div>) is attached and incorported by reference
                            </div>
                            <div class="small_text">I declare under penalty of perjury under the laws of the State of California that, to the best of my knowledge, the foregoing is a true and correct listing of assets and obligations and the amounts shown are correct</div>
                            <div class="d-flex">
                                <div class="small_text me-2">Date</div>
                                <div> <input type="text" name="date" class="border-0 "></div>
                            </div>
                            <div class="row  ">
                                <div class="col-lg-6">
                                        <div> <input type="text" name="topn" class="border-0 border-bottom form-control footer_field "></div>
                                        <div class="small_text text-center">(TYPE OR PRINT NAME)</div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div> <input type="text" name="signature" class="border-0 border-bottom form-control footer_field "></div>
                                            <div class="small_text text-center">SIGNATURE</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @include('layouts.footer7', ['page' => 3])
                    {{-- @include('layouts.pagination', ['page' => 11 ]) --}}
                </section>
            </form>
        </div>
        <div class="position-absolute position-fixed bottom-0 py-2 backdrop_filter px-3">
            <select name="" id="" class="sectionSelect form-select  mx-auto ">
                <option value="" disabled selected>Select a section</option>
                <option value="#first_section">First Section</option>
                <option value="#second_section">Second Section</option>
                <option value="#third_section">Third Section</option>
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
