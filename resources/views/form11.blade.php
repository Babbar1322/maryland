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
    </style>
</head>

<body>
    <div class="container-fluid   py-1 py-lg-3">
        <div class="container bg_color p-lg-3 p-1  ">

            <form action="{{ route('form9.submit') }}" method="post">
                @csrf
                <section class="section_area">
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show">{{ session('success') }} <button
                                type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <div class="row  px-lg-5 px-2   pt-2">
                        <div class="small_text text-end fw-bold">FL-161</div>
                        <div class="col-lg-8 border border-dark">
                            <div class="row">
                                <div class="col">
                                    <div class="small_text"> PARTY WITHOUT ATTORNEY OR ATTORNEY</div>

                                </div>
                                <div class="col">
                                    <div class="d-flex">
                                        <div class="small_text">STATE BAR NUMBER:</div>
                                        <div> <input type="text" name="name" class="border-0 "></div>
                                    </div>
                                </div>
                            </div>
                            {{-- <textarea name="" id="" cols="6" class="form-control p-0 m-0"></textarea> --}}
                            <div class="p-2 border-bottom border-dark">
                                <div class="">
                                    <div class="d-flex">
                                        <div class="small_text">Name:</div>
                                        <div> <input type="text" name="name" class="border-0 "></div>
                                    </div>
                                </div>

                                <div class="">
                                    <div class="d-flex">
                                        <div class="small_text">First Name:</div>
                                        <div> <input type="text" name="f_name" class="border-0 "></div>
                                    </div>
                                </div>

                                <div class="">
                                    <div class="d-flex">
                                        <div class="small_text">STREET ADDRESS:</div>
                                        <div> <input type="text" name="s_address" class="border-0 "></div>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="d-flex">
                                        <div class="small_text">CITY :</div>
                                        <div> <input type="text" name="city" class="border-0 "></div>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="d-flex">
                                        <div class="small_text">TELEPHONE NO :</div>
                                        <div> <input type="text" name="phone" class="border-0 "></div>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="d-flex">
                                        <div class="small_text">EMAIL ADDRESS NO :</div>
                                        <div> <input type="text" name="phone" class="border-0 "></div>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="d-flex">
                                        <div class="small_text">ATTORNEY FOR (name):</div>
                                        <div> <input type="text" name="phone" class="border-0 "></div>
                                    </div>
                                </div>
                            </div>
                            <div class="p-2 border-bottom border-dark">

                                <div class="">
                                    <div class="d-flex">
                                        <div class=" ">SUPERIOR COURT OF CALIFORNIA, COUNTY OF</div>
                                        <div> <input type="text" name="county_of" class="border-0 "></div>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="d-flex">
                                        <div class="small_text">STREET ADDRESS:</div>
                                        <div> <input type="text" name="street_address" class="border-0 "></div>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="d-flex">
                                        <div class="small_text">MAILING ADDRESS:</div>
                                        <div> <input type="text" name="mailing_address" class="border-0 "></div>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="d-flex">
                                        <div class="small_text">CITY AND ZIP CODE:</div>
                                        <div> <input type="text" name="zip_code" class="border-0 "></div>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="d-flex">
                                        <div class="small_text">BRANCH NAME:</div>
                                        <div> <input type="text" name="branch_name" class="border-0 "></div>
                                    </div>
                                </div>
                            </div>
                            <div class="p-2 border-dark">

                                <div class="">
                                    <div class="d-flex ps-lg-5">
                                        <div class="small_text">PETITIONER:</div>
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
                            <input type="text" name="case_number" class="border-0 w-100">
                        </div>
                    </div>

                    <div class="px-lg-5 px-2 row">
                        <div class="p-2">
                            <div class="lh-1"> See Instructions on page 5 for information about completing this form.
                                For additional space , use Continuation of Property Declaration</div>
                            <div class="lh-1">(<a href="http://www.courts.ca.gov/documents/fl161.pdf">form
                                    FL-161</a> )</div>
                        </div>

                        <div class="table-responsive">
                            <table class="table-bordered border border-2 border-dark">
                                <thead>
                                    <tr>
                                        <td class="text-center">A</td>
                                        <td class="text-center">B</td>
                                        <td colspan="3">
                                            <div class="d-flex gap-5 justify-content-center"> <span>C </span> - <span>
                                                    D </span> = <span> E </span></div>
                                        </td>
                                        <td colspan="2" class="text-center">F</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center small_text d-flex gap-3 border-0">
                                            <div>ITEM NO</div>
                                            <div> BRIEF DESCRIPTION</div>
                                        </td>
                                        {{-- <td class="text-center small_text">BRIEF DESCRIPTION</td> --}}
                                        <td class="text-center small_text">DATE ACQUIRED (mm/dd/yyyy)</td>
                                        <td class="text-center small_text">GROSS FAIR MARKET VALUE</td>
                                        <td class="text-center small_text">AMOUNT OF DEBT</td>
                                        <td class="text-center small_text">NET FAIR MARKET VALUE</td>
                                        <td class="text-center small_text" colspan="2">
                                            <div>PROPOSAL FOR DIVISION</div>
                                            <div> Award or Confirm to</div>
                                            <div class="d-flex gap-3 justify-content-center">
                                                <span> PETITIONER</span>
                                                <span>RESPONDENT</span>
                                            </div>
                                            </td>
                                    </tr>

                                    <tr>
                                        <td rowspan="8" class="small_text">
                                            <div>
                                                <div>1.REAL ESTATE</div>
                                                <div><input type="text" name="brif_desc1" class="w-100  border-0">
                                                </div>
                                                <div><input type="text" name="brif_desc2" class="w-100  border-0">
                                                </div>
                                            </div>
                                            <div>
                                                <div>
                                                    2.HOUSEHOLD FURNITURE, FURNISHINGS, APPLIANCES
                                                </div>
                                                <input type="text" name="applince1" class="w-100  border-0">
                                                <input type="text" name="applince2" class="w-100  border-0">
                                                <input type="text" name="applince3" class="w-100  border-0">
                                                <input type="text" name="applince4" class="w-100  border-0">
                                                <input type="text" name="applince5" class="w-100  border-0">
                                            </div>
                                            <div>
                                                <div>
                                                    3. JEWELRY, ANTIQUES, ART, COIN COLLECTIONS, ETC
                                                </div>
                                                <input type="text" name="jewel1" class="w-100  border-0">
                                                <input type="text" name="jewel2" class="w-100  border-0">
                                                <input type="text" name="jewel3" class="w-100  border-0">
                                            </div>
                                            <div>
                                                <div>4. VEHICLES, BOATS, TRAILERS</div>
                                                <input type="text" name="vehicles1" class="w-100  border-0">
                                                <input type="text" name="vehicles2" class="w-100  border-0">
                                                <input type="text" name="vehicles3" class="w-100  border-0">
                                            </div>
                                            <div>
                                                <div>5. SAVINGS ACCOUNTS</div>
                                                <input type="text" name="sav_acc1" class="w-100  border-0">
                                                <input type="text" name="sav_acc2" class="w-100  border-0">
                                                <input type="text" name="sav_acc3" class="w-100  border-0">
                                            </div>
                                            <div>
                                                <div>6. CHECKING ACCOUNTS</div>
                                                <input type="text" name="check_acc1" class="w-100  border-0">
                                                <input type="text" name="check_acc2" class="w-100  border-0">
                                                <input type="text" name="check_acc3" class="w-100  border-0">
                                            </div>
                                        </td>
                                        <td rowspan="8" class="small_text">
                                            <div>
                                                <br>
                                                <div><input type="text" name="re_date_a1" class=" border-0"></div>
                                                <div><input type="text" name="re_date_a2" class=" border-0"></div>
                                            </div>
                                            <br>
                                            <br>
                                            <div>
                                                <input type="text" name="app_date1" class="w-100 border-0">
                                                <input type="text" name="app_date2" class="w-100  border-0">
                                                <input type="text" name="app_date3" class="w-100 border-0">
                                                <input type="text" name="app_date4" class="w-100  border-0">
                                                <input type="text" name="app_date5" class=" w-100 border-0">
                                            </div>
                                            <br>
                                            <br>
                                            <div>
                                                <input type="text" name="jew_date1" class="w-100 border-0">
                                                <input type="text" name="jew_date2" class="w-100  border-0">
                                                <input type="text" name="jew_date3" class="w-100 border-0">
                                            </div>
                                            <br>
                                            <div>
                                                <input type="text" name="vech_date1" class="w-100 border-0">
                                                <input type="text" name="vech_date2" class="w-100  border-0">
                                                <input type="text" name="vech_date3" class="w-100 border-0">
                                            </div>
                                            <br>
                                            <div>
                                                <input type="text" name="sav_date1" class="w-100 border-0">
                                                <input type="text" name="sav_date2" class="w-100  border-0">
                                                <input type="text" name="sav_date3" class="w-100 border-0">
                                            </div>
                                            <br>
                                            <div>
                                                <input type="text" name="ca_date1" class="w-100 border-0">
                                                <input type="text" name="ca_date2" class="w-100  border-0">
                                                <input type="text" name="ca_date3" class="w-100 border-0">
                                            </div>
                                            
                                        </td>
                                        <td rowspan="8">
                                            <div>$</div>
                                            <div class="small_text">
                                                <div><input type="text" name="re_gross_val1" class="w-100  border-0 text-end"></div>
                                                <div><input type="text" name="re_gross_val2" class="w-100  border-0 text-end"></div>
                                            </div>
                                        </td>
                                        <td rowspan="8" > 
                                            <div>$</div>
                                            <div class="small_text">
                                                <div><input type="text" name="re_debt_amt1" class="w-100  border-0 text-end"></div>
                                                <div><input type="text" name="re_debt_amt2" class="w-100  border-0 text-end"></div>
                                            </div>
                                        </td>
                                        <td rowspan="8" >  
                                             <div>$</div>
                                            <div class="small_text">
                                                <div><input type="text" name="re_mark_val1" class="w-100  border-0 text-end"></div>
                                                <div><input type="text" name="re_mark_val2" class="w-100  border-0 text-end"></div>
                                            </div>
                                        </td>
                                        <td rowspan="8" > 
                                            <div>$</div>
                                            <div class="small_text">
                                                <div><input type="text" name="re_pio1" class="w-100  border-0 text-end"></div>
                                                <div><input type="text" name="re_pio2" class="w-100  border-0 text-end"></div>
                                            </div>
                                        </td>
                                        <td rowspan="8" > 
                                            <div>
                                                <div>$</div>
                                                <div class="small_text">
                                                    <div><input type="text" name="re_resp1" class="w-100  border-0 text-end"></div>
                                                    <div><input type="text" name="re_resp1" class="w-100  border-0 text-end"></div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        
                                        {{-- <td> <input type="text" name="date_a1" class="w-100  border-0"></td>
                                        <td> <input type="text" name="gross_fair1" class="w-100  border-0"></td>
                                        <td> <input type="text" name="amount_debit1" class="w-100  border-0"></td>
                                        <td> <input type="text" name="net_fairmarkit1" class="w-100  border-0">
                                        </td>
                                        <td> <input type="text" name="proposal_division1" class="w-100  border-0">
                                        </td> --}}
                                    </tr>

                                    <tr>
                                 
                                            {{-- </td>
                                        <td> <input type="text" name="date_a2" class="w-100  border-0"></td>
                                        <td> <input type="text" name="gross_fair2" class="w-100  border-0"></td>
                                        <td> <input type="text" name="amount_debit2" class="w-100  border-0"></td>
                                        <td> <input type="text" name="net_fairmarkit2" class="w-100  border-0">
                                        </td>
                                        <td> <input type="text" name="proposal_division2" class="w-100  border-0">
                                        </td> --}}
                                    </tr>

                                    <tr>
                                       
                                        {{-- <td> <input type="text" name="date_a3" class="w-100  border-0"></td>
                                        <td> <input type="text" name="gross_fair3" class="w-100  border-0"></td>
                                        <td> <input type="text" name="amount_debit3" class="w-100  border-0"></td>
                                        <td> <input type="text" name="net_fairmarkit3" class="w-100  border-0">
                                        </td>
                                        <td> <input type="text" name="proposal_division3" class="w-100  border-0">
                                        </td> --}}
                                    </tr>

                                    <tr>
                                        
                                        {{-- <td> <input type="text" name="date_a4" class="w-100  border-0"></td>
                                        <td> <input type="text" name="gross_fair4" class="w-100  border-0"></td>
                                        <td> <input type="text" name="amount_debit4" class="w-100  border-0"></td>
                                        <td> <input type="text" name="net_fairmarkit4" class="w-100  border-0">
                                        </td>
                                        <td> <input type="text" name="proposal_division4" class="w-100  border-0">
                                        </td> --}}
                                    </tr>

                                    <tr>
                                       
                                        {{-- <td> <input type="text" name="date_a5" class="w-100  border-0"></td>
                                        <td> <input type="text" name="gross_fair5" class="w-100  border-0"></td>
                                        <td> <input type="text" name="amount_debit5" class="w-100  border-0"></td>
                                        <td> <input type="text" name="net_fairmarkit5" class="w-100  border-0">
                                        </td>
                                        <td> <input type="text" name="proposal_division5" class="w-100  border-0">
                                        </td> --}}
                                    </tr>

                                    <tr>
                                        
                                        {{-- <td> <input type="text" name="date_a6" class="w-100  border-0"></td>
                                        <td> <input type="text" name="gross_fair6" class="w-100  border-0"></td>
                                        <td> <input type="text" name="amount_debit6" class="w-100  border-0"></td>
                                        <td> <input type="text" name="net_fairmarkit6" class="w-100  border-0">
                                        </td>
                                        <td> <input type="text" name="proposal_division6" class="w-100  border-0">
                                        </td> --}}
                                    </tr>
                                </thead>
                            </table>
                        </div>
                        @include('layouts.footer7', ['page' => 1])
                        {{-- <div class="small_text">In a dissolution, legal separation, or nullity action, both a preliminary and a final declaration of disclosure must be served on the other
                            party with certain exceptions. Neither disclosure is filed with the court. Instead, a declaration stating that service of disclosure
                            documents was completed or waived must be filed with the court (see form FL-141)</div> --}}

                    </div>
                </section>

                <section class="section_area  px-lg-5 px-2 ">
                    <div class="table-responsive pt-5">
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
                                    <td class="text-center small_text">PROPOSAL FOR DIVISION Award or Confirm to
                                        PETITIONER
                                        RESPONDENT</td>
                                </tr>

                                <tr>
                                    <td> </td>
                                    <td></td>
                                    <td> $</td>
                                    <td> $</td>
                                    <td> $</td>
                                    <td> $</td>
                                    <td> $</td>
                                </tr>

                                <tr>
                                    <td class="small_text">7.</td>
                                    <td class="small_text"> CREDIT UNION, OTHER DEPOSITORY ACCOUNTS


                                        <input type="text" name="brif_desc7" class="w-100  border-0">

                                    </td>
                                    <td> <input type="text" name="date_a7" class="w-100  border-0"></td>
                                    <td> <input type="text" name="gross_fair7" class="w-100  border-0"></td>
                                    <td> <input type="text" name="amount_debit7" class="w-100  border-0"></td>
                                    <td> <input type="text" name="net_fairmarkit7" class="w-100  border-0"></td>
                                    <td> <input type="text" name="proposal_division7" class="w-100  border-0">
                                    </td>
                                </tr>

                                <tr>
                                    <td class="small_text">8.</td>
                                    <td class="small_text"> CASH
                                        <input type="text" name="brif_desc8" class="w-100  border-0">

                                    </td>
                                    <td> <input type="text" name="date_a8" class="w-100  border-0"></td>
                                    <td> <input type="text" name="gross_fair8" class="w-100  border-0"></td>
                                    <td> <input type="text" name="amount_debit8" class="w-100  border-0"></td>
                                    <td> <input type="text" name="net_fairmarkit8" class="w-100  border-0"></td>
                                    <td> <input type="text" name="proposal_division8" class="w-100  border-0">
                                    </td>
                                </tr>

                                <tr>
                                    <td class="small_text"> 9.</td>
                                    <td class="small_text">TAX REFUND

                                        <input type="text" name="brif_desc9" class="w-100  border-0">

                                    </td>
                                    <td> <input type="text" name="date_a9" class="w-100  border-0"></td>
                                    <td> <input type="text" name="gross_fair9" class="w-100  border-0"></td>
                                    <td> <input type="text" name="amount_debit9" class="w-100  border-0"></td>
                                    <td> <input type="text" name="net_fairmarkit9" class="w-100  border-0"></td>
                                    <td> <input type="text" name="proposal_division9" class="w-100  border-0">
                                    </td>
                                </tr>

                                <tr>
                                    <td class="small_text">10.</td>
                                    <td class="small_text"> LIFT INSURANCE WITH CASH SURRNDER OR LOAN VALUE
                                        <input type="text" name="brif_desc10" class="w-100  border-0">

                                    </td>
                                    <td> <input type="text" name="date_a10" class="w-100  border-0"></td>
                                    <td> <input type="text" name="gross_fair10" class="w-100  border-0"></td>
                                    <td> <input type="text" name="amount_debit10" class="w-100  border-0"></td>
                                    <td> <input type="text" name="net_fairmarkit10" class="w-100  border-0"></td>
                                    <td> <input type="text" name="proposal_division10" class="w-100  border-0">
                                    </td>
                                </tr>

                                <tr>
                                    <td class="small_text"> 11.</td>
                                    <td class="small_text">STOCKS, BONDS, SECURED,NOTES, MUTUAL FUNDS
                                        <input type="text" name="brif_desc11" class="w-100  border-0">

                                    </td>
                                    <td> <input type="text" name="date_a11" class="w-100  border-0"></td>
                                    <td> <input type="text" name="gross_fair11" class="w-100  border-0"></td>
                                    <td> <input type="text" name="amount_debit11" class="w-100  border-0"></td>
                                    <td> <input type="text" name="net_fairmarkit11" class="w-100  border-0"></td>
                                    <td> <input type="text" name="proposal_division11" class="w-100  border-0">
                                    </td>
                                </tr>

                                <tr>
                                    <td class="small_text">12.</td>
                                    <td class="small_text">RETIREMENT AND PENSIONS
                                        <input type="text" name="brif_desc12" class="w-100  border-0">
                                    </td>
                                    <td> <input type="text" name="date_a12" class="w-100  border-0"></td>
                                    <td> <input type="text" name="gross_fair12" class="w-100  border-0"></td>
                                    <td> <input type="text" name="amount_debit12" class="w-100  border-0"></td>
                                    <td> <input type="text" name="net_fairmarkit12" class="w-100  border-0"></td>
                                    <td> <input type="text" name="proposal_division12" class="w-100  border-0">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="small_text">13.</td>
                                    <td class="small_text">PROFIT-SHARING, IRAS, DEFERRED COMPENSATION, ANNUITIES
                                        <input type="text" name="brif_desc13" class="w-100  border-0">
                                    </td>
                                    <td> <input type="text" name="date_a13" class="w-100  border-0"></td>
                                    <td> <input type="text" name="gross_fair13" class="w-100  border-0"></td>
                                    <td> <input type="text" name="amount_debit13" class="w-100  border-0"></td>
                                    <td> <input type="text" name="net_fairmarkit13" class="w-100  border-0"></td>
                                    <td> <input type="text" name="proposal_division13" class="w-100  border-0">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="small_text">14.</td>
                                    <td class="small_text">ACCOUNTS RECEIVABLE, UNSECURED NOTES
                                        <input type="text" name="brif_desc14" class="w-100  border-0">
                                    </td>
                                    <td> <input type="text" name="date_a14" class="w-100  border-0"></td>
                                    <td> <input type="text" name="gross_fair14" class="w-100  border-0"></td>
                                    <td> <input type="text" name="amount_debit14" class="w-100  border-0"></td>
                                    <td> <input type="text" name="net_fairmarkit14" class="w-100  border-0"></td>
                                    <td> <input type="text" name="proposal_division14" class="w-100  border-0">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="small_text">15.</td>
                                    <td class="small_text">PARTNERSHIP, OTHER BUSINESS INTERESTS
                                        <input type="text" name="brif_desc15" class="w-100  border-0">
                                    </td>
                                    <td> <input type="text" name="date_a15" class="w-100  border-0"></td>
                                    <td> <input type="text" name="gross_fair15" class="w-100  border-0"></td>
                                    <td> <input type="text" name="amount_debit15" class="w-100  border-0"></td>
                                    <td> <input type="text" name="net_fairmarkit15" class="w-100  border-0"></td>
                                    <td> <input type="text" name="proposal_division15" class="w-100  border-0">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="small_text">16.</td>
                                    <td class="small_text">OTHER ASSETS
                                        <input type="text" name="brif_desc16" class="w-100  border-0">
                                    </td>
                                    <td> <input type="text" name="date_a16" class="w-100  border-0"></td>
                                    <td> <input type="text" name="gross_fair16" class="w-100  border-0"></td>
                                    <td> <input type="text" name="amount_debit16" class="w-100  border-0"></td>
                                    <td> <input type="text" name="net_fairmarkit16" class="w-100  border-0"></td>
                                    <td> <input type="text" name="proposal_division16" class="w-100  border-0">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="small_text">17.</td>
                                    <td class="small_text">ASSETS FROM CONTINUATION SHEET</td>
                                    <td> <input type="text" name="date_a17" class="w-100  border-0"></td>
                                    <td> <input type="text" name="gross_fair17" class="w-100  border-0"></td>
                                    <td> <input type="text" name="amount_debit17" class="w-100  border-0"></td>
                                    <td> <input type="text" name="net_fairmarkit17" class="w-100  border-0"></td>
                                    <td> <input type="text" name="proposal_division17" class="w-100  border-0">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="small_text">18.</td>
                                    <td class="small_text">TOTAL ASSETS</td>
                                    <td> <input type="text" name="date_a18" class="w-100  border-0"></td>
                                    <td> <input type="text" name="gross_fair18" class="w-100  border-0"></td>
                                    <td> <input type="text" name="amount_debit18" class="w-100  border-0"></td>
                                    <td> <input type="text" name="net_fairmarkit18" class="w-100  border-0"></td>
                                    <td> <input type="text" name="proposal_division18" class="w-100  border-0">
                                    </td>
                                </tr>
                            </thead>
                        </table>
                    </div>
                    @include('layouts.footer7', ['page' => 2])
                </section>


                <section class="section_area  px-lg-5 px-2 ">
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
                                    {{-- <td>NET FAIR MARKET VALUE</td> --}}
                                    <td class="text-center small_text">PROPOSAL FOR DIVISION Award or Confirm to
                                        PETITIONER
                                        RESPONDENT</td>
                                </tr>

                                <tr>
                                    <td> </td>
                                    <td> </td>
                                    <td> $</td>
                                    <td> $</td>
                                    {{-- <td> $</td> --}}
                                    <td> $</td>
                                </tr>

                                <tr>
                                    <td class="small_text"> 19</td>
                                    <td class="small_text"> STUDENT LOANS
                                        <input type="text" name="debts_show19" class="w-100  border-0">
                                    </td>

                                    <td> <input type="text" name="date_i19" class="w-100  border-0"></td>
                                    <td> <input type="text" name="amount_debit19" class="w-100  border-0"></td>
                                    {{-- <td> <input type="text" name="gross_fair21" class="w-100  border-0"></td> --}}
                                    <td> <input type="text" name="proposal_division19" class="w-100  border-0">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="small_text">20 </td>
                                    <td class="small_text">
                                        TAXES
                                        <input type="text" name="debts_show20" class="w-100  border-0">
                                    </td>
                                    <td> <input type="text" name="date_i20" class="w-100  border-0"></td>
                                    <td> <input type="text" name="amount_debit20" class="w-100  border-0"></td>
                                    {{-- <td> <input type="text" name="gross_fair22" class="w-100  border-0"></td> --}}
                                    <td> <input type="text" name="proposal_division20" class="w-100  border-0">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="small_text">21</td>
                                    <td class="small_text">SUPPORT ARREARAGES
                                        <input type="text" name="debts_show21" class="w-100  border-0">
                                    </td>
                                    <td> <input type="text" name="date_i21" class="w-100  border-0"></td>
                                    <td> <input type="text" name="amount_debit21" class="w-100  border-0"></td>
                                    {{-- <td> <input type="text" name="gross_fair23" class="w-100  border-0"></td> --}}
                                    <td> <input type="text" name="proposal_division21" class="w-100  border-0">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="small_text"> 22</td>
                                    <td class="small_text">
                                        LOANS—UNSECURED
                                        <input type="text" name="debts_show22" class="w-100  border-0">
                                    </td>
                                    <td> <input type="text" name="date_i22" class="w-100  border-0"></td>
                                    <td> <input type="text" name="amount_debit22" class="w-100  border-0"></td>
                                    {{-- <td> <input type="text" name="gross_fair24" class="w-100  border-0"></td> --}}
                                    <td> <input type="text" name="proposal_division22" class="w-100  border-0">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="small_text"> 23</td>
                                    <td class="small_text">
                                        CREDIT CARDS
                                        <input type="text" name="debts_show23" class="w-100  border-0">
                                    </td>
                                    <td> <input type="text" name="date_i23" class="w-100  border-0"></td>
                                    <td> <input type="text" name="amount_debit23" class="w-100  border-0"></td>
                                    {{-- <td> <input type="text" name="gross_fair25" class="w-100  border-0"></td> --}}
                                    <td> <input type="text" name="proposal_division23" class="w-100  border-0">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="small_text"> 24</td>
                                    <td class="small_text">
                                        OTHER DEBTS
                                        <input type="text" name="debts_show24" class="w-100  border-0">
                                    </td>
                                    <td> <input type="text" name="date_i24" class="w-100  border-0"></td>
                                    <td> <input type="text" name="amount_debit24" class="w-100  border-0"></td>
                                    {{-- <td> <input type="text" name="gross_fair25" class="w-100  border-0"></td> --}}
                                    <td> <input type="text" name="proposal_division24" class="w-100  border-0">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="small_text"> 25</td>
                                    <td class="small_text">
                                        OTHER DEBTS FROM CONTINUATION SHEET
                                    <td> <input type="text" name="date_i24" class="w-100  border-0"></td>
                                    <td> <input type="text" name="amount_debit24" class="w-100  border-0"></td>
                                    {{-- <td> <input type="text" name="gross_fair25" class="w-100  border-0"></td> --}}
                                    <td> <input type="text" name="proposal_division24" class="w-100  border-0">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="small_text"> 25</td>
                                    <td class="small_text">
                                        TOTAL DEBTS
                                    <td> <input type="text" name="date_i25" class="w-100  border-0"></td>
                                    <td> <input type="text" name="amount_debit25" class="w-100  border-0"></td>
                                    {{-- <td> <input type="text" name="gross_fair25" class="w-100  border-0"></td> --}}
                                    <td> <input type="text" name="proposal_division25" class="w-100  border-0">
                                    </td>
                                </tr>




                            </thead>
                        </table>
                    </div>
                    @include('layouts.footer7', ['page' => 3])
                </section>
            </form>
        </div>
    </div>
</body>

</html>
