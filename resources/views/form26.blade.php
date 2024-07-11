{{-- MA Financial Statement Schedule A (CJ-D 301)_06-05-2024_1343.pdf --}}
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
        .backdrop_filter {
            backdrop-filter: blur(5px) !important;
            -webkit-backdrop-filter: blur(5px) !important;
        }
        .blue_border {
            border: 2px solid #4e4ed8;
        }
        td {
            padding: 0px !important;
            padding-left: 5px !important;
            background-color: transparent !important;
        }
        input:focus {
            border: none !important;
            border-bottom: 1px solid black !important;
            box-shadow: none !important;
        }
        .input_box:focus {
            border: 1px solid black !important;

        }
        input,
        table {
            background-color: transparent !important;
            /* height : 100% !important; */
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

        .table> :not(caption)>*>* {
            background-color: white;
        }

        .section_area {
            background-color: white !important;
            margin: 10px !important;
        }

        .top:focus {
            border-bottom: none !important;
        }

        input:focus-visible {
            outline: none !important;
            border-bottom: 2px solid black !important;
        }

        .footer_padding {
            padding-top: 400px !important;
        }

        @media screen and (max-width : 1600px) {
            .d_sm_block {
                display: block !important;
            }

            .responsive_input {
                width: 100% !important;
            }

            .ms_sm_0 {
                margin-left: 0px !important;
            }
        }

        @media screen and (max-width : 768px) {
            .d_sm_block {
                display: block !important;
            }

            .small_text {
                height: auto !important;
            }

            .footer_padding {
                padding-top: 50px !important;
            }

            .responsive_input {
                width: 100% !important;
            }
            .input_box{
                width: 100% !important;

            }

            .section_area {
                padding-left: 10px !important;
                padding-right: 10px !important;
            }

            .container-fluid {
                padding-right: 0px !important;
                padding-left: 0px !important;
            }
        }

        .bg_color {
            background-color: #8c8a8a;
        }

        .bg-secondary {
            background-color: rgb(184 188 192) !important;
        }

        body {
            font-size: 18px !important;
        }

        .small_text {
            font-size: 15px;
        }

        .tdata input:focus {
            border-bottom: none !important;
        }

        input[type='radio'] {
            accent-color: #8c8a8a !important;
        }

        input[type='checkbox'] {
            accent-color: #8c8a8a !important;
        }
        .w-96 {
            width: 96% !important;
        }
    </style>
</head>

<body>
    <div class="container-fluid   py-1 py-lg-3">
        <div class="container bg_color p-lg-3 p-1  ">
            <form action="{{ route('form26.submit') }}" method="post">
                @csrf
                <section class="section_area p-5" id="first_section">
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show">{{ session('success') }} <button
                                type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <div class="row">
                        <div class="fw-bold text-center">FINANCIAL STATEMENT SCHEDULE A</div>
                          <div class=" ">

                            <div class="d-flex justify-content-between">
                            <div class="d-flex d_sm_block">
                                <span>Name: </span>
                                <input type="text" class="border-none border-0 border-bottom responsive_input shadow-none my-auto responsive_input" name="Name" style="width:475px;">
                            </div>
                            <div class="d-flex d_sm_block">
                                <span>Docket No.</span>
                                <input type="text" class="border-none border-0 border-bottom responsive_input shadow-none my-auto responsive_input" name="Docket No" style="width:457px;">
                            </div>
                        </div>
                        <div class="text-center fw-bold">MONTHLY SELF-EMPLOYMENT OR BUSINESS INCOME</div>
                        <div class="d-flex justify-content-between d_sm_block">GROSS MONTHLY RECEIPTS<span> <input type="text" name="MONTHLY SELF-EMPLOYMENT OR BUSINESS INCOME" id="" class="border border-dark input_box  " ></span></div>

                        </div>

                        <div class="fw-bold   py-lg-3">Monthly Business Expenses</div>
                        <div class="small_text d-flex justify-content-between d_sm_block">Cost of goods sold<span>$<input type="text" name="undefined" id="" class="border-0 border-bottom responsive_input" ></span></div>
                        <div class="small_text d-flex justify-content-between d_sm_block">Advertising<span>$<input type="text" name="undefined_2" id="" class="border-0 border-bottom responsive_input" ></span></div>
                        <div class="small_text d-flex justify-content-between d_sm_block">Bad Debts<span>$<input type="text" name="undefined_3" id="" class="border-0 border-bottom responsive_input" ></span></div>
                        <div class="small_text d-flex justify-content-between d_sm_block">Motor Vehicles:<span>$<input type="text" name="undefined_4" id="" class="border-0 border-bottom responsive_input" ></span></div>
                        <div class="small_text d-flex justify-content-between d_sm_block ps-lg-5">Gas<span>$<input type="text" name="undefined_5" id="" class="border-0 border-bottom responsive_input" ></span></div>
                        <div class="small_text d-flex justify-content-between d_sm_block ps-lg-5">Insurance<span>$<input type="text" name="undefined_6" id="" class="border-0 border-bottom responsive_input" ></span></div>
                        <div class="small_text d-flex justify-content-between d_sm_block ps-lg-5">Maintenance<span>$<input type="text" name="undefined_7" id="" class="border-0 border-bottom responsive_input" ></span></div>
                        <div class="small_text d-flex justify-content-between d_sm_block ps-lg-5">Registration<span>$<input type="text" name="undefined_8" id="" class="border-0 border-bottom responsive_input" ></span></div>
                        <div class="small_text d-flex justify-content-between d_sm_block">Commissions<span>$<input type="text" name="undefined_9" id="" class="border-0 border-bottom responsive_input" ></span></div>
                        <div class="small_text d-flex justify-content-between d_sm_block">Depletion<span>$<input type="text" name="undefined_10" id="" class="border-0 border-bottom responsive_input" ></span></div>
                        <div class="small_text d-flex justify-content-between d_sm_block">Dues and Publications<span>$<input type="text" name="undefined_11" id="" class="border-0 border-bottom responsive_input" ></span></div>
                        <div class="small_text d-flex justify-content-between d_sm_block">Employee Benefit Programs<span>$<input type="text" name="undefined_12" id="" class="border-0 border-bottom responsive_input" ></span></div>
                        <div class="small_text d-flex justify-content-between d_sm_block">Freight<span>$<input type="text" name="undefined_13" id="" class="border-0 border-bottom responsive_input" ></span></div>
                        <div class="small_text d-flex justify-content-between d_sm_block">Insurance (other than health), please specify type of insurance:</div>
                        <div class="small_text d-flex justify-content-between d_sm_block ps-lg-5"><input type="text" name="Insurance other than health please specify type of insurance 1" id="" class=" w-50 border-0 border-bottom responsive_input" ><span>$<input type="text" name="undefined_14" id="" class="border-0 border-bottom responsive_input" ></span></div>
                        <div class="small_text d-flex justify-content-between d_sm_block ps-lg-5"><input type="text" name="Insurance other than health please specify type of insurance 2" id="" class=" w-50 border-0 border-bottom responsive_input" ><span>$<input type="text" name="undefined_15" id="" class="border-0 border-bottom responsive_input" ></span></div>
                        <div class="small_text d-flex justify-content-between d_sm_block">Interest on mortgage to banks<span>$<input type="text" name="undefined_16" id="" class="border-0 border-bottom responsive_input" ></span></div>
                        <div class="small_text d-flex justify-content-between d_sm_block">Interest on loans<span>$<input type="text" name="undefined_17" id="" class="border-0 border-bottom responsive_input" ></span></div>
                        <div class="small_text d-flex justify-content-between d_sm_block">Legal and Professional services<span>$<input type="text" name="undefined_18" id="" class="border-0 border-bottom responsive_input" ></span></div>
                        <div class="small_text d-flex justify-content-between d_sm_block">Office expenses<span>$<input type="text" name="undefined_19" id="" class="border-0 border-bottom responsive_input" ></span></div>
                        <div class="small_text d-flex justify-content-between d_sm_block">Laundry and cleaning<span>$<input type="text" name="undefined_20" id="" class="border-0 border-bottom responsive_input" ></span></div>
                        <div class="small_text d-flex justify-content-between d_sm_block">Pension and profit sharing<span>$<input type="text" name="undefined_21" id="" class="border-0 border-bottom responsive_input" ></span></div>
                        <div class="small_text d-flex justify-content-between d_sm_block">Rent on leased equipment<span>$<input type="text" name="undefined_22" id="" class="border-0 border-bottom responsive_input" ></span></div>
                        <div class="small_text d-flex justify-content-between d_sm_block">Machinery/Equipment<span>$<input type="text" name="undefined_23" id="" class="border-0 border-bottom responsive_input" ></span></div>
                        <div class="small_text d-flex justify-content-between d_sm_block">Other business property<span>$<input type="text" name="undefined_24" id="" class="border-0 border-bottom responsive_input" ></span></div>
                        <div class="small_text d-flex justify-content-between d_sm_block">Repairs<span>$<input type="text" name="undefined_25" id="" class="border-0 border-bottom responsive_input" ></span></div>
                        <div class="small_text d-flex justify-content-between d_sm_block">Supplies<span>$<input type="text" name="undefined_26" id="" class="border-0 border-bottom responsive_input" ></span></div>
                        <div class="small_text d-flex justify-content-between d_sm_block">Taxes<span>$<input type="text" name="undefined_27" id="" class="border-0 border-bottom responsive_input" ></span></div>
                        <div class="small_text d-flex justify-content-between d_sm_block">Travel<span>$<input type="text" name="undefined_28" id="" class="border-0 border-bottom responsive_input" ></span></div>
                        <div class="small_text d-flex justify-content-between d_sm_block">Meals and entertainment<span>$<input type="text" name="undefined_29" id="" class="border-0 border-bottom responsive_input" ></span></div>
                        <div class="small_text d-flex justify-content-between d_sm_block">Utilities and phones<span>$<input type="text" name="undefined_30" id="" class="border-0 border-bottom responsive_input" ></span></div>
                        <div class="small_text d-flex justify-content-between d_sm_block">Wages<span>$<input type="text" name="undefined_31" id="" class="border-0 border-bottom responsive_input" ></span></div>
                        <div class="small_text d-flex justify-content-between d_sm_block">Other expenses (specify) </div>
                        <div class="small_text d-flex justify-content-between d_sm_block ps-lg-5"><input type="text" name="Other expenses specify 1" id="" class=" w-50 border-0 border-bottom responsive_input" ><span>$<input type="text" name="undefined_32" id="" class="border-0 border-bottom responsive_input" ></span></div>
                        <div class="small_text d-flex justify-content-between d_sm_block ps-lg-5"><input type="text" name="Other expenses specify 2" id="" class=" w-50 border-0 border-bottom responsive_input" ><span>$<input type="text" name="undefined_33" id="" class="border-0 border-bottom responsive_input" ></span></div>
                    </div>
                    @include('layouts.footer20', ['page' => 1])
                </section>
               <section class="section_area p-5" id="second_section">

                    <div class="pt-lg-3">
                    <div class="row">
                        <div class="fw-bold text-center">FINANCIAL STATEMENT SCHEDULE A</div>

                        <div class="d-flex justify-content-between d_sm_block">TOTAL MONTHLY EXPENSES<span> <input type="text" name="FINANCIAL STATEMENT SCHEDULE A" id="" class="border border-dark input_box input_box " ></span></div>
                        <div class="d-flex justify-content-between d_sm_block pt-3"> WEEKLY BUSINESS INCOME  (Gross monthly receipts less total monthly expenses divided by 4.3.) Enter this amount in Section II, line (d) of CJ-D 301-L or Section 2(d) of CJ-D 301-S.<span> <input type="text" name="00" id="" class="border border-dark input_box  " ></span></div>
                        <div class="text-center fw-bold py-lg-2">NATURE OF SELF-EMPLOYMENT OR BUSINESS</div>

                        <div class="row small_text pt-2">
                            <div class="col-1" style="width: 30px;">1.</div>
                            <div class="col-11">
                                <div class="d-flex d_sm_block">Is this business seasonal in nature? <div> <input type="radio" name="undefined_34" value="Yes" class="me-2 ms-3">Yes</div>  <div> <input type="radio" name="undefined_34" class="me-2 ms-3"  value="No">No</div></div>

                            </div>
                        </div>

                        <div class="row small_text pt-2">
                            <div class="col-lg-1" style="width: 30px;">2.</div>
                            <div class="col-lg-11">
                                <div class="d-flex d_sm_block">2. If a seasonal business, please specify percentage of income received and expenses incurred for each month of the year.</div>

                                <div class="table-responsive w-50 mx-auto responsive_input">
                                    <table class="table table-bordered border-dark">
                                        <tbody>
                                            <tr>
                                                <td>MONTH
                                                    <input type="text" name="MONTH" id="" class="border-0 border-bottom w-100">
                                                </td>
                                                <td>PERCENTAGE OF INCOME RECEIVED</td>
                                                <td>EXPENSES INCURRED</td>
                                            </tr>
                                            <tr>
                                                <td>January</td>
                                                <td><input type="text" name="PERCENTAGE OF INCOME RECEIVEDJanuary" class="border-0 w-100"></td>
                                                <td><input type="text" name="EXPENSES INCURREDJanuary" class="border-0 w-100"> </td>
                                            </tr>
                                            <tr>
                                                <td>February</td>
                                                <td><input type="text" name="PERCENTAGE OF INCOME RECEIVEDFebruary" class="border-0 w-100"></td>
                                                <td><input type="text" name="EXPENSES INCURREDFebruary" class="border-0 w-100"> </td>
                                            </tr>
                                            <tr>
                                                <td>March</td>
                                                <td><input type="text" name="PERCENTAGE OF INCOME RECEIVEDMarch" class="border-0 w-100"></td>
                                                <td><input type="text" name="EXPENSES INCURREDMarch" class="border-0 w-100"></td>
                                            </tr>
                                            <tr>
                                                <td>April</td>
                                                <td><input type="text" name="PERCENTAGE OF INCOME RECEIVEDApril" class="border-0 w-100"></td>
                                                <td><input type="text" name="EXPENSES INCURREDApril" class="border-0 w-100"></td>
                                            </tr>
                                            <tr>
                                                <td>May</td>
                                                <td><input type="text" name="PERCENTAGE OF INCOME RECEIVEDMay" class="border-0 w-100"></td>
                                                <td><input type="text" name="EXPENSES INCURREDMay" class="border-0 w-100"></td>
                                            </tr>
                                            <tr>
                                                <td>June</td>
                                                <td> <input type="text" name="PERCENTAGE OF INCOME RECEIVEDJune" class="border-0 w-100"></td>
                                                <td><input type="text" name="EXPENSES INCURREDJune" class="border-0 w-100"></td>
                                            </tr>
                                            <tr>
                                                <td>July</td>
                                                <td><input type="text" name="PERCENTAGE OF INCOME RECEIVEDJuly" class="border-0 w-100"></td>
                                                <td><input type="text" name="EXPENSES INCURREDJuly" class="border-0 w-100"> </td>
                                            </tr>
                                            <tr>
                                                <td>August</td>
                                                <td><input type="text" name="PERCENTAGE OF INCOME RECEIVEDAugust" class="border-0 w-100"></td>
                                                <td><input type="text" name="EXPENSES INCURREDAugust" class="border-0 w-100"></td>
                                            </tr>

                                            <tr>
                                                <td>September</td>
                                                <td><input type="text" name="PERCENTAGE OF INCOME RECEIVEDSeptember" class="border-0 w-100"></td>
                                                <td><input type="text" name="EXPENSES INCURREDSeptember" class="border-0 w-100"></td>
                                            </tr>
                                            <tr>
                                                <td>October</td>
                                                <td><input type="text" name="PERCENTAGE OF INCOME RECEIVEDOctober" class="border-0 w-100"></td>
                                                <td><input type="text" name="EXPENSES INCURREDOctober" class="border-0 w-100"></td>
                                            </tr>
                                            <tr>
                                                <td>November</td>
                                                <td><input type="text" name="PERCENTAGE OF INCOME RECEIVEDNovember" class="border-0 w-100"></td>
                                                <td><input type="text" name="EXPENSES INCURREDNovember" class="border-0 w-100"></td>
                                            </tr>
                                            <tr>
                                                <td>December</td>
                                                <td><input type="text" name="PERCENTAGE OF INCOME RECEIVEDDecember" class="border-0 w-100"></td>
                                                <td><input type="text" name="EXPENSES INCURREDDecember" class="border-0 w-100"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>


                        <div class="row small_text pt-2">
                            <div class="col-1" style="width: 30px;">3.</div>
                            <div class="col-11">
                                <div class="d-flex d_sm_block"> State whether your business accounts on a calendar year basis or fiscal year basis: <div> <input type="checkbox" name="CALENDAR" class="me-2 ms-3"  value="Yes">CALENDAR</div>  <div> <input type="checkbox" name="FISCAL" class="me-2 ms-3"  value="Yes">FISCAL</div></div>

                            </div>
                        </div>

                        <div class="row small_text pt-2">
                            <div class="col-1" style="width: 30px;">4.</div>
                            <div class="col-11">
                                <div class="d-flex d_sm_block">4. If your business accounts on a fiscal year basis, give the starting and ending dates of your chosen fiscal year:</div>

                            </div>
                        </div>
                        <div class="row small_text pt-2">
                            <div class="col-lg-6">

                                <div>
                                    <input type="text" name="starting" id="" class="border-0 border-bottom responsive_input w-100">
                                    <div>starting</div>
                                </div>
                            </div>
                            <div class="col-lg-6">

                                <div>
                                    <input type="text" name="ending" id="" class="border-0 border-bottom responsive_input w-100">
                                    <div>ending</div>
                                </div>
                            </div>

                        </div>

                        <div class="d-flex justify-content-between d_sm_block pt-3">5. State your gross receipts, year to date:<span> $<input type="text" name="undefined_35" id="" class="border border-dark  input_box " ></span></div>
                        <div class="d-flex justify-content-between d_sm_block pt-2">6. State your gross expenses, year to date:<span> $<input type="text" name="undefined_36" id="" class="border border-dark  input_box " ></span></div>


                    </div>
                        @include('layouts.footer20', ['page' => 2])
                    </div>

                </section>


                <div class="position-absolute position-fixed top-0 py-3 backdrop_filter end-0 px-3">
                    <div class="col">
                        <button type="submit" class="btn btn-success px-4">Save</button>
                    </div>
                    <div class="pt-3">
                        <button type="button" class="btn btn-dark px-4">Back</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="position-absolute position-fixed bottom-0 py-2 backdrop_filter px-3">
        <select name="" id="" class="sectionSelect form-select  mx-auto ">
            <option value="" disabled selected>Select a section</option>
            <option value="#first_section">First Section</option>
            <option value="#second_section">Second Section</option>
        </select>
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
