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

        @media screen and (min-width : 1400px) {
            .age_input_top {
                min-width: 280px !important;
             }
             .age1_input{
                min-width: 210px !important;

             }
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
    </style>
</head>

<body>
    <div class="container-fluid   py-1 py-lg-3">
        <div class="container bg_color p-lg-3 p-1  ">

            <form action="#" class="" method="post">
                @csrf
                <section class="section_area row page1 bg-white pt-5 p-lg-5 pe-2 pe-lg-5 p-lg-3 m-3 mt-4  pt-lg-5 pt-4">
                    <div class="col-lg-10 mx-auto">
                        <div class="form-area   pt-5 ">
                            @if (session('success'))
                                <div class="alert alert-success">{{ session('success') }}</div>
                            @endif

                            <div class=" w-100 mt-2">
                                <div class="row">
                                    <div class="mx-auto d-flex top_flex_text h5 justify-content-center"><span>IN THE
                                            SUPERIOR COURT OF
                                        </span> <input type="text" name="plaintiff"
                                            class="form-control w-25  border-none  flex_input border-0 border-bottom border-solid shadow-none">
                                        <span>COUNTY STATE OF GEORGIA</span>
                                    </div>
                                    <span class="text-center h5"> </span>
                                    <div class="">
                                        <div class="row pt-2">
                                            <div class="col-lg-5 col-sm-5">
                                                <div class="col-lg-12  ">
                                                    <input type="text" name="plaintiff"
                                                        class="form-control  border-none  border-0 border-bottom border-solid shadow-none">
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-sm-2">
                                                <div class="col-lg-1  mx-auto text-center d-none d-sm-block"> § </div>
                                            </div>
                                            <div class="col-lg-5 col-sm-5">
                                                <div class="col-lg-12 ">

                                                </div>
                                            </div>
                                        </div>
                                        <div class="row pt-2">
                                            <div class="col-lg-5 col-sm-5">
                                                <div class="col-lg-12  ">
                                                    <h5 class="ps-lg-5">Plaintiff,</h5>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-sm-2">
                                                <div class="col-lg-1  mx-auto text-center d-none d-sm-block"> § </div>
                                            </div>
                                            <div class="col-lg-5 col-sm-5">
                                                <div class="col-lg-12 ">

                                                </div>
                                            </div>
                                        </div>
                                        <div class="row pt-2">
                                            <div class="col-lg-5 col-sm-5">
                                                <div class="col-lg-12  ">
                                                    <h5 class="">v.</h5>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-sm-2">
                                                <div class="col-lg-1  mx-auto text-center d-none d-sm-block"> § </div>
                                            </div>
                                            <div class="col-lg-5 col-sm-5">
                                                <div class="col-lg-12 ">

                                                </div>
                                            </div>
                                        </div>

                                        <div class="row pt-2">
                                            <div class="col-lg-5 col-sm-5">
                                                <div class="col-lg-12  ">
                                                    <input type="text" name="plaintiff"
                                                        class="form-control  border-none  border-0 border-bottom border-solid shadow-none">
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-sm-2">
                                                <div class="col-lg-1  mx-auto text-center d-none d-sm-block"> § </div>
                                            </div>
                                            <div class="col-lg-5 col-sm-5 mt-lg-0 mt-2">
                                                <div class="col-lg-12 ">
                                                    <h5>CIVIL ACTION</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row pt-2">
                                            <div class="col-lg-5 col-sm-5">
                                                <div class="col-lg-12  ">
                                                    <h5 class="ps-lg-5">Defendant</h5>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-sm-2">
                                                <div class="col-lg-1  mx-auto text-center d-none d-sm-block"> § </div>
                                            </div>
                                            <div class="col-lg-5 col-sm-5">
                                                <div class="col-lg-12 ">
                                                    <div class="d-flex">
                                                        <span class="h5">FILE NO.</span> <input type="text"
                                                            name="plaintiff"
                                                            class="form-control w-75  border-none  border-0 border-bottom border-solid shadow-none">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h5 class="text-center py-3">DOMESTIC RELATIONS FINANCIAL AFFIDAVIT</h5>

                                        <div class="row">
                                            <div class="col-lg-3 " style="width: 219px;">
                                                <span class="pe-lg-4 pe-2">1.</span>
                                                AFFIANT’S NAME:
                                            </div>
                                            <div class="col-lg-6">
                                                <input type="text" name="plaintiff"
                                                    class="form-control  border-none  border-0 border-bottom border-solid shadow-none">
                                            </div>
                                            <div class="col-1 p-lg-0" style="max-width:35px;">Age</div>
                                            <div class="col-lg-2 p-lg-0">
                                                <input type="text" name="plaintiff"
                                                    class="form-control  border-none age1_input  border-0 border-bottom border-solid shadow-none"
                                                     >
                                            </div>
                                        </div>
                                        <div class="row pt-2">
                                            <div class="col-lg-3 col  " style="width: 153px;">Spouse’s Name:</div>
                                            <div class="col-lg-6 p-lg-0">
                                                <input type="text" name="plaintiff"
                                                    class="form-control  border-none  border-0 border-bottom border-solid shadow-none">
                                            </div>
                                            <div class="col-1 p-lg-0" style="max-width:35px;">Age</div>
                                            <div class="col-lg-2  ">
                                                <input type="text" name="plaintiff"
                                                    class="form-control  border-none age_input_top border-0 border-bottom border-solid shadow-none"
                                                    style="width:190px !important;" >
                                            </div>
                                        </div>
                                        <div class="row pt-2">
                                            <div class="col-lg-3    " style="width: 165px;">Date of Marriage:</div>
                                            <div class="col-lg-4 p-lg-0">
                                                <input type="text" name="plaintiff"
                                                    class="form-control  border-none  border-0 border-bottom border-solid shadow-none">
                                            </div>
                                            <div class="col-lg-3 col  " style="width: 180px;">Date of Separation:
                                            </div>

                                            <div class="col-lg-2 p-lg-0">
                                                <input type="text" name="plaintiff"
                                                    class="form-control  border-none age_input_top border-0 border-bottom border-solid shadow-none"
                                                    style="width:186px !important;">
                                            </div>
                                        </div>
                                        <div class="text-center h5 py-3">Names and year of birth of children for whom
                                            support is to be determined in this action:</div>
                                    </div>
                                </div>




                                <div class="row">
                                    <div class="table-responsive">
                                        <table class="table-bordered mt-1 border-black table  my-lg-1">
                                            <thead>
                                                <tr>
                                                    <th class="bg-secondary fw-bold">Name:</th>
                                                    <th class="bg-secondary fw-bold">Year of Birth:</th>
                                                    <th class="bg-secondary fw-bold">Resides with:</th>
                                                </tr>
                                            </thead>
                                            <tbody>


                                                <tr>
                                                    <td> <input type="number" name="p_mortgage_self"
                                                            class="form-control border-0 my-1"></td>
                                                    <td><input type="number" name="p_mortgage_self"
                                                            class="form-control border-0"></td>
                                                    <td><input type="number" name="p_mortgage_child"
                                                            class="form-control border-0"></td>

                                                </tr>
                                                <tr>
                                                    <td><input type="number" name="p_mortgage_self"
                                                            class="form-control border-0 my-1"></td>
                                                    <td><input type="number" name="p_insurance_self"
                                                            class="form-control border-0"></td>
                                                    <td><input type="number" name="p_insurance_child"
                                                            class="form-control border-0"></td>

                                                </tr>
                                                <tr>
                                                    <td><input type="number" name="p_mortgage_self"
                                                            class="form-control border-0 my-1"></td>
                                                    <td><input type="number" name="p_rent_self"
                                                            class="form-control border-0"></td>
                                                    <td><input type="number" name="p_rent_child"
                                                            class="form-control border-0"></td>

                                                </tr>
                                                <tr>
                                                    <td class="w-50"><input type="number" name="p_mortgage_self"
                                                            class="form-control border-0 my-1"></td>
                                                    <td><input type="number" name="p_taxes_self"
                                                            class="form-control border-0  "></td>
                                                    <td><input type="number" name="p_taxes_child"
                                                            class="form-control border-0"></td>
                                                </tr>


                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div>Names and year of birth of Affiant’s other children:</div>
                                <div class="row">
                                    <div class="table-responsive">
                                        <table class="table-bordered mt-1 border-black table my-lg-1 ">
                                            <thead>
                                                <tr>
                                                    <th class="bg-secondary fw-bold">Name:</th>
                                                    <th class="bg-secondary fw-bold">Year of Birth:</th>
                                                    <th class="bg-secondary fw-bold">Resides with:</th>
                                                </tr>
                                            </thead>
                                            <tbody>


                                                <tr>
                                                    <td> <input type="number" name="p_mortgage_self"
                                                            class="form-control border-0 my-1"></td>
                                                    <td><input type="number" name="p_mortgage_self"
                                                            class="form-control border-0"></td>
                                                    <td><input type="number" name="p_mortgage_child"
                                                            class="form-control border-0"></td>

                                                </tr>
                                                <tr>
                                                    <td><input type="number" name="p_mortgage_self"
                                                            class="form-control border-0 my-1"></td>
                                                    <td><input type="number" name="p_insurance_self"
                                                            class="form-control border-0"></td>
                                                    <td><input type="number" name="p_insurance_child"
                                                            class="form-control border-0"></td>

                                                </tr>
                                                <tr>
                                                    <td><input type="number" name="p_mortgage_self"
                                                            class="form-control border-0 my-1"></td>
                                                    <td><input type="number" name="p_rent_self"
                                                            class="form-control border-0"></td>
                                                    <td><input type="number" name="p_rent_child"
                                                            class="form-control border-0"></td>

                                                </tr>
                                                <tr>
                                                    <td class="w-50"><input type="number" name="p_mortgage_self"
                                                            class="form-control border-0 my-1"></td>
                                                    <td><input type="number" name="p_taxes_self"
                                                            class="form-control border-0  "></td>
                                                    <td><input type="number" name="p_taxes_child"
                                                            class="form-control border-0"></td>
                                                </tr>


                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="pt-lg-5 pt-2">

                                        @include('layouts.footer2', ['page' => 1])
                                    </div>
                                </div>
                            </div>
                </section>
                <section
                    class="section_area row page1 bg-white pt-5 p-lg-5 pe-2 pe-lg-5 p-lg-3 m-3 mt-4  pt-lg-5 pt-4">

                    {{-- <section
                    class="section_area row page1 bg-white pt-5 p-lg-5 pe-2 pe-lg-5 p-lg-3 m-3 mt-4  pt-lg-5 pt-4"> --}}
                    <div class="col-lg-10 mx-auto">
                        <div class="form-area   pt-5 ">
                            <div class=""> <span class="pe-lg-4">2.</span> SUMMARY OF AFFIANT’S INCOME AND NEEDS
                            </div>
                            <div class="row px-lg-5">
                                <div class="table-responsive">
                                    <table class="table-bordered mt-3 border-black table ">
                                        <tr>
                                            <td>a.</td>
                                            <td>Gross monthly income (item 3A)</td>

                                            <td>
                                                <div class="d-flex">$<input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>b.</td>
                                            <td> Net monthly income (item 3B) </td>

                                            <td>
                                                <div class="d-flex">$<input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>c.</td>
                                            <td>Average monthly expenses (item 5A)</td>

                                            <td>
                                                <div class="d-flex">$<input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>d.</td>
                                            <td>Monthly payment to creditors (item 5B) + </td>

                                            <td>
                                                <div class="d-flex">$<input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>Total of (c.) and (d.) above:</td>
                                            <td>
                                                <div class="d-flex">$<input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="form-area pt-5">
                            <div class=""><span class="me-lg-4">3. </span><span
                                    class="me-lg-4">A.</span><span>Affiant’s Gross Monthly Income
                                    (complete this section or attach Child
                                    Support Schedule A) (All income must be entered based on monthly average regardless
                                    of
                                    date of receipt.)</span>
                            </div>
                            <div class="row px-lg-5">
                                <div class="table-responsive">
                                    <table class="table-bordered mt-3 border-black table ">
                                        <tr>
                                            <td>Salary or Wages (<span class="border-bottom">attach copies of 2 most
                                                    recent $ wage statement</span>)</td>
                                            <td>Affiant’s</td>
                                        </tr>
                                        <tr>
                                            <td>Commissions, Fees, Tips </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            {{-- <td>Income from self-employment, partnerships, close corporations and independent contracts (gross receipts minus ordinary and necessary expenses required to produce income). <span class="border-bottom">Attach sheet itemizing your calculations.</span></td> --}}
                                            <td> Income from self-employment, partnerships, close corporations and
                                                independent contracts (gross receipts minus ordinary and necessary
                                                expenses required to produce income). <span
                                                    class="border-bottom">Attach sheet itemizing your
                                                    calculations.</span> </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Gross receipts minus ordinary and necessary expenses required to produce
                                                income. </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Bonuses</td>
                                            <td>
                                                <div class="d-flex">$<input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Overtime Payments</td>
                                            <td>
                                                <div class="d-flex">$<input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Severance Pay</td>
                                            <td>
                                                <div class="d-flex">$<input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Recurring Income from Pensions or Retirement Plans</td>
                                            <td>
                                                <div class="d-flex">$<input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Interest and Dividends</td>
                                            <td>
                                                <div class="d-flex">$<input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Trust Income</td>
                                            <td>
                                                <div class="d-flex">$<input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Income from Annuities</td>
                                            <td>
                                                <div class="d-flex">$<input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Capital Gains</td>
                                            <td>
                                                <div class="d-flex">$<input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Social Security Disability or Retirement Benefits</td>
                                            <td>
                                                <div class="d-flex">$<input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>

                        </div>
                        <div class="pt-lg-2 pt-2">
                            @include('layouts.footer2', ['page' => 2])
                        </div>
                </section>



                <section
                    class="section_area row page1 bg-white pt-5 p-lg-5 pe-2 pe-lg-5 p-lg-3 m-3 mt-4  pt-lg-5 pt-4">
                    <div class="col-lg-10 mx-auto">



                        <div class="form-area   pt-5 ">

                            <div class="row  px-lg-5">
                                <div class="table-responsive">
                                    <table class="table-bordered mt-3 border-black table ">
                                        <tr>
                                            <td>Workers’ Compensation Benefits</td>
                                            <td>
                                                <div class="d-flex">$<input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </div>
                                        </tr>
                                        <tr>
                                            <td>Unemployment Benefits</td>
                                            <td>
                                                <div class="d-flex">$<input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Judgments from Personal Injury or other Civil Cases</td>
                                            <td>
                                                <div class="d-flex">$<input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </div>
                                        </tr>
                                        <tr>
                                            <td>Gifts (cash or other gifts that can be converted to cash)</td>
                                            <td>
                                                <div class="d-flex">$<input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </div>
                                        </tr>
                                        <tr>
                                            <td>Prizes/Lottery Winnings </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </div>
                                        </tr>
                                        <tr>
                                            <td>Alimony and Maintenance from Persons not in this Case</td>
                                            <td>
                                                <div class="d-flex">$<input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </div>
                                        </tr>
                                        <tr>
                                            <td>Assets which are used for support of family</td>
                                            <td>
                                                <div class="d-flex">$<input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </div>
                                        </tr>
                                        <tr>
                                            <td>Fringe Benefits (if significantly reduce living expenses) </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </div>
                                        </tr>
                                        <tr>
                                            <td>Any Other Income (do NOT include means-tested public assistance, such as
                                                TANF or food stamps)
                                            </td>
                                            <td>
                                                <div class="d-flex">$<input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="h5">TOTAL GROSS MONTHLY INCOME:</td>
                                            <td>
                                                <div class="d-flex">$<input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </div>
                                        </tr>

                                    </table>
                                </div>
                            </div>

                        </div>



                        <div class="form-area   px-lg-5 pt-2 ">
                            <div class=""><span class="pe-lg-4 ">B.</span> Affiant’s Net Monthly Income from
                                Employment </div>
                            <div class="row ">
                                <div class="table-responsive">
                                    <table class="table-bordered mt-3 border-black table ">
                                        <tr>
                                            <td>Gross Wage minus withheld federal, state and FICA taxes</td>
                                            <td>
                                                <div class="d-flex">$<input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Affiant’s Pay Period (i.e. weekly, monthly, etc.)</td>
                                            <td><input type="number" name="nmi"
                                                    class="border-0 bg-transparent border outline-none form-control">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Number of Exemptions Claimed:</td>
                                            <td><input type="number" name="nmi"
                                                    class="border-0 bg-transparent border outline-none form-control">
                                        </tr>
                                    </table>
                                </div>
                            </div>

                        </div>

                        <div class="form-area   pt-4 ">
                            <div class=""><span class="pe-lg-5 pe-3">4.</span> ASSETS
                                <div>
                                    (If you claim or agree that all or part of an asset is non-marital, indicate the
                                    non-marital portion under the appropriate spouse’s column and state the amount and
                                    the basis: pre-marital, gift, inheritance, source of funds, etc.)

                                </div>
                            </div>
                            <div class="row ">
                                <div class="table-responsive">
                                    <table class="table-bordered mt-3 border-black table ">
                                        <thead>
                                            <tr>
                                                <td class="w-25 bg-secondary">Description</td>
                                                <td class="bg-secondary">Value</td>
                                                <td class="bg-secondary">Separate Asset of Husband</td>
                                                <td class="bg-secondary">Separate Asset of Wife</td>
                                                <td class="bg-secondary">Basis of the Claim</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Cash</td>
                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Stocks, Bonds</td>
                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>CD’s, Money Market</td>
                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="bg-secondary">Bank Accounts:</td>
                                                <td class=" bg-secondary"> </td>
                                                <td class="bg-secondary"> </td>
                                                <td class="bg-secondary"> </td>
                                                <td class="bg-secondary"> </td>
                                            </tr>
                                            <tr>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>
                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td> <input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>
                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>
                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                        <div class=" ">
                            @include('layouts.footer2', ['page' => 3])
                        </div>
                </section>


                <section
                    class="section_area row page1 bg-white pt-5 p-lg-5 pe-2 pe-lg-5 p-lg-3 m-3 mt-4  pt-lg-5 pt-4">
                    <div class="col-lg-10 mx-auto">
                        <div class="form-area pt-4">
                            <div class="row">
                                <div class="table-responsive">
                                    <table class="table-bordered mt-3 border-black table ">
                                        <thead>
                                            <tr>
                                                <td class="w-25 bg-secondary">Description</td>
                                                <td class="bg-secondary">Value</td>
                                                <td class="bg-secondary">Separate Asset of Husband</td>
                                                <td class="bg-secondary">Separate Asset of Wife</td>
                                                <td class="bg-secondary">Basis of the Claim</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Retirement/ Pensions</td>
                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>401(K) Accounts</td>
                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>IRA Accounts</td>
                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Profit Sharing Accts</td>
                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Money owed you: </td>
                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td> Tax Refund owed you</td>
                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Real Estate: Home </td>
                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Debt on home </td>
                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Other Real Estate: </td>
                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Debt owed</td>
                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="bg-secondary">Automobiles </td>
                                                <td class="  bg-secondary"> </td>
                                                <td class="bg-secondary"> </td>
                                                <td class="bg-secondary"> </td>
                                                <td class="bg-secondary"> </td>
                                            </tr>
                                            <tr>
                                                <td>Vehicle 1 </td>
                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Debt owed: </td>
                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Vehicle 2 </td>
                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Debt owed: </td>
                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Life Insurance (net cash value)</td>
                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Furniture/Furnishings</td>
                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Debt owed: </td>
                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Jewelry</td>
                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Collectibles </td>
                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Other Assets (list): </td>
                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td> </td>
                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td> </td>
                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td> </td>
                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td> </td>
                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td> TOTAL ASSETS:</td>
                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div>
                            @include('layouts.footer2', ['page' => 4])
                        </div>
                </section>



                <section
                    class="section_area row page1 bg-white pt-5 p-lg-5 pe-2 pe-lg-5 p-lg-3 m-3 mt-4  pt-lg-5 pt-4">
                    <div class="col-lg-10 mx-auto">
                        <div class="form-area pt-4">
                            <div class=""> <span class="pe-lg-4">5</span> <span
                                    class="pe-lg-4">A.</span>Average Monthly Expenses</div>

                            <div class="row px-lg-4">
                                <div class="table-responsive">
                                    <table class="table-bordered mt-3 border-black table ">
                                        <thead>
                                            <tr>
                                                <td colspan="2" class="  bg-secondary">HOUSEHOLD</td>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Mortgage or Rent Payments</td>
                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Property Taxes</td>
                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Homeowner/Renter Insurance</td>
                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Electricity</td>
                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Water</td>
                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Garbage and Sewer</td>
                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Residential Line Telephone</td>
                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Cellular Telephone</td>
                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Internet Service</td>
                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Gas (natural or propane)</td>
                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Repairs and Maintenance</td>
                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Lawn Care</td>
                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Pest Control</td>
                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Cable or Satellite TV</td>
                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Grocery & Misc. Household Expenses</td>
                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Meals Outside the Home</td>
                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Retirement/ Pensions</td>
                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Other:</td>
                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td> <input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>
                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>TOTAL HOUSEHOLD EXPENSES:</td>
                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class='bg-secondary'>AUTOMOBILE</td>
                                            </tr>
                                            <tr>
                                                <td>Gasoline and Oil</td>
                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Repairs</td>
                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Auto Tags and License</td>
                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Insurance</td>
                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>TOTAL AUTO EXPENSES:</td>
                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div>
                            @include('layouts.footer2', ['page' => 5])
                        </div>
                </section>




                <section
                    class="section_area row page1 bg-white pt-5 p-lg-5 pe-2 pe-lg-5 p-lg-3 m-3 mt-4  pt-lg-5 pt-4">
                    <div class="col-lg-10 mx-auto">
                        <div class="form-area pt-4">

                            <div class="row px-lg-4">
                                <div class="table-responsive">
                                    <table class="table-bordered mt-3 border-black table ">
                                        <thead>
                                            <tr>
                                                <td colspan="2" class="  bg-secondary">OTHER VEHICLES (boats, RV’s,
                                                    trailers, etc.:</td>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Gasoline and Oil</td>
                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Repairs</td>
                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Tags and License</td>
                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Insurance</td>
                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>TOTAL OTHER VEHICLES EXPENSES:</td>
                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="bg-secondary">CHILDREN’S EXPENSES:</td>
                                            </tr>
                                            <tr>
                                                <td>Child Care (total monthly cost)</td>
                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>School Tuition</td>
                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Tutoring</td>
                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Private Lessons (e.g., music, dance)</td>
                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>School Supplies/Expenses</td>
                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Lunch Money</td>
                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Other Educational Expenses:</td>
                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>
                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>
                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Allowance</td>
                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Clothing</td>
                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Diapers</td>
                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td> Medical, Dental, Prescriptions <br> (out of pocket/uncovered
                                                    expenses)
                                                </td>
                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Grooming, Hygiene</td>
                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Gifts from Children to Others</td>
                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Entertainment</td>
                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Activities (extra-curricular, school, religious, $ cultural, etc.)
                                                </td>
                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Summer Camps</td>
                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>TOTAL CHILDREN’S EXPENSES:</td>
                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div>
                            @include('layouts.footer2', ['page' => 6])
                        </div>
                </section>




                <section
                    class="section_area row page1 bg-white pt-5 p-lg-5 pe-2 pe-lg-5 p-lg-3 m-3 mt-4  pt-lg-5 pt-4">
                    <div class="col-lg-10 mx-auto">
                        <div class="form-area pt-4">

                            <div class="row px-lg-4">
                                <div class="table-responsive">
                                    <table class="table-bordered mt-3 border-black table ">
                                        <thead>
                                            <tr>
                                                <td class="bg-secondary">AFFIANT’S OTHER EXPENSES:</td>
                                                <td class="bg-secondary"> </td>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Dry Cleaning/Laundry</td>
                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Clothing</td>
                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Medical, Dental, Prescriptions<br> <span>(out of pocket/uncovered
                                                        expenses)</span></td>
                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Affiant’s Gifts (special holiday)</td>
                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Entertainment</td>
                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="bg-secondary">CHILDREN’S EXPENSES:</td>
                                            </tr>
                                            <tr>
                                                <td>Recreational Expenses (e.g., fitness)</td>
                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Vacations</td>
                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Travel Expenses for Visitation</td>
                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Publications</td>
                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Dues, Clubs</td>
                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Religious and charities</td>
                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Pet Expenses</td>
                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td> Alimony paid to former spouse</td>
                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Child Support paid for other children $ Date of Initial Order: </td>
                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Other (attach sheet)</td>
                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>TOTAL OTHER EXPENSES:</td>
                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="bg-secondary">OTHER INSURANCE:</td>
                                            </tr>
                                            <tr>
                                                <td> Health</td>
                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Health: Children’s portion</td>
                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Dental</td>
                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Dental: Children’s portion</td>
                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Vision</td>
                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Vision: Children’s portion</td>
                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Life<br>
                                                    Relationship of Beneficiary:</td>
                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Disability</td>
                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div>
                            @include('layouts.footer2', ['page' => 7])
                        </div>
                </section>


                <section
                    class="section_area row page1 bg-white pt-5 p-lg-5 pe-2 pe-lg-5 p-lg-3 m-3 mt-4  pt-lg-5 pt-4">
                    <div class="col-lg-10 mx-auto">
                        <div class="form-area pt-4">

                            <div class="row px-lg-4">
                                <div class="table-responsive">
                                    <table class="table-bordered mt-3 border-black table ">
                                        <thead>
                                            <tr>
                                                <td colspan="2" class="bg-secondary">AFFIANT’S OTHER EXPENSES:
                                                </td>
                                                <td class="bg-secondary"> </td>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td style="width:130px;">Other (specify)</td>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>
                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">TOTAL OTHER INSURANCE:</td>
                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="3" class="bg-secondary">SUMMARY:</span></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">Total Household Expenses</td>
                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">Total Other Vehicles Expenses</td>
                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">Total Children’s Expenses</td>
                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">Total Affiant’s Other Expenses</td>
                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">Total Other Insurance</td>
                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">GRAND TOTAL 5. A. <br> Average Monthly Expenses
                                                </td>
                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                            </tr>


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="form-area pt-4">
                            <div class=""> <span class="pe-lg-4">5</span><span
                                    class="pe-lg-4">B.</span>PAYMENTS TO CREDITORS

                                <div>
                                    Put an X under the J column if the debt is a joint debt, an X under the W column if
                                    it is the Wife’s debt, and an X under the H column if the debt is the Husband’s
                                    debt.
                                </div>
                            </div>

                            <div class="row">
                                <div class="table-responsive">
                                    <table class="table-bordered mt-3 border-black table">
                                        <thead>
                                            <tr>
                                                <td class="bg-secondary" class="w-25">Name of Creditor</td>
                                                <td class="bg-secondary"> Balance Due</td>
                                                <td class="bg-secondary">Monthly Payment</td>
                                                <td class="bg-secondary" style="width:80px;">J</td>
                                                <td class="bg-secondary" style="width:80px;">W</td>
                                                <td class="bg-secondary" style="width:80px;">H</td>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>

                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control"
                                                        value="1"></td>
                                            </tr>
                                            <tr>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>

                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>

                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>

                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>

                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>

                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>

                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2"> Total Monthly Payments to Creditors:</td>
                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>
                                                <td><input type="number" name="nmi"
                                                        class="border-0 bg-transparent border outline-none form-control">
                                                </td>
                                            </tr>


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="form-area pt-4">
                            <div class=""> <span class="pe-lg-4">5</span><span
                                    class="pe-lg-4">C.</span>TOTAL MONTHLY EXPENSES:
                            </div>

                            <div class="row px-lg-5">
                                <div class="table-responsive px-lg-5">
                                    <table class="table-bordered mt-3 border-black table">

                                        <tbody>
                                            <tr>
                                                <td> 5.A. Average Monthly Expenses:</td>
                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>5.B. Payments to Creditors:</td>
                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td> Total of 5. A & B =</td>
                                                <td>
                                                    <div class="d-flex">$<input type="number" name="nmi"
                                                            class="border-0 bg-transparent border outline-none form-control">
                                                    </div>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div>
                            @include('layouts.footer2', ['page' => 8])
                        </div>
                </section>







                <section
                    class="section_area row page1 bg-white pt-5 p-lg-5 pe-2 pe-lg-5 p-lg-3 m-3 mt-4  pt-lg-5 pt-4">
                    <div class="col-lg-10 mx-auto">
                        <div class="form-area pt-4">
                            <div class=" " style="text-indent: 70px;"> Personally appeared before me, an
                                officer authorized to administer oaths, the undersigned Affiant, who upon being sworn,
                                swears that he/she is legally competent to make this affidavit, that the affidavit is
                                based upon personal knowledge, and that the contents of the affidavit are true.</div>
                            <div class="row">
                                <div class="col-lg-6"></div>
                                <div class="col-lg-6">
                                    <input type="text" name="nmi"
                                        class="border-0 bg-transparent border border-bottom outline-none form-control">
                                    <div>

                                        Affiant (signed in the presence of a notary public)
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-lg-5 p-lg-0" style=" width: 330px;">Sworn to and subscribed
                                        before me, this</div>
                                    <div class="col-lg-1 p-lg-0"> <input type="text" name="nmi"
                                            class="border-0 bg-transparent border border-bottom outline-none form-control">
                                    </div>
                                    <div class="col-lg-1 p-lg-0 bottom_day" style="width: 55px;">day of</div>
                                    <div class="col-lg-2 p-lg-0 d-flex"> <input type="text" name="nmi"
                                            class="border-0 bg-transparent border border-bottom outline-none form-control">
                                        <span>,</span>
                                    </div>
                                    <div class="col-lg-1 p-lg-0" style="width:25px">20</div>
                                    <div class="col-lg-1 p-lg-0 d-flex"> <input type="text" name="nmi"
                                            class="border-0 bg-transparent border border-bottom outline-none form-control">
                                        <span>.</span>

                                    </div>
                                </div>
                                <div class="row mt-lg-5 mt-3 ps-lg-0">
                                    <div class="col-lg-6">
                                        <input type="text" name="nmi"
                                            class="border-0 bg-transparent border border-bottom outline-none form-control">
                                        <div>

                                            Notary Public </div>
                                        <div class="col-lg-6"></div>
                                    </div>
                                </div>
                                <div class="row mt-3 d-flex expires_row">
                                    My commission expires: <input type="text" name="nmi"
                                        class="border-0 w-25 expires_input bg-transparent border border-bottom outline-none form-control">
                                </div>

                                <div>
                                    @include('layouts.footer2', ['page' => 9])
                                </div>
                </section>
            </form>
        </div>
    </div>
    </div>
    </div>
</body>

</html>
