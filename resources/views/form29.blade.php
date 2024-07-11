{{-- MA statement (long form) (CJD-301L)_06-05-2024_1332.pdf --}}
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
        .border_3{
            border-bottom : 3px solid black;
        }
        .w-80 {
            width: 80% !important;
        }

        .backdrop_filter {
            backdrop-filter: blur(5px) !important;
            -webkit-backdrop-filter: blur(5px) !important;
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

            .input_box {
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
    </style>
</head>

<body>
    <div class="container-fluid py-1 py-lg-3">
        <div class="container bg_color p-lg-3 p-1">
            <form action="{{ route('form29.submit') }}" method="post">
                @csrf
                <section class="section_area p-5" id="first_section">
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show">{{ session('success') }} <button
                                type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <div class="row">
                        <div class=" ">

                            <div class="d-flex d_sm_block justify-content-between">
                                <div class="d-flex d_sm_block my-auto">
                                    <span>Division: </span>
                                    <input type="text" class="border-none border-0 border-bottom responsive_input shadow-none my-auto responsive_input" name="Division">
                                </div>
                                <div class=" d_sm_block">
                                    <div class="fw-bold text-center  ">Commonwealth of Massachusetts <br>The Trial Court
                                        <br> Probate and Family Court Department <br> FINANCIAL STATEMENT
                                    </div>
                                </div>
                                <div class="d-flex d_sm_block  my-auto ">
                                    <span>Docket No.</span>
                                    <input type="text" class="border-none border-0 border-bottom responsive_input shadow-none my-auto responsive_input" name="Docket No">
                                </div>
                            </div>
                            <div class="text-center">(Long form)</div>
                            <div><b>INSTRUCTIONS:</b> If your income is less than $75,000.00 annually, you must complete
                                the SHORT FORM financial statement, unless otherwise ordered by the court.</div>

                            <div class="d-flex d_sm_block justify-content-between">
                                <div class="w-75 responsive_input">
                                    <input type="text" name="PlaintiffPetitioner" id=""
                                        class="border-0 border-bottom w-75 responsive_input">
                                    <div class="small_text text-center">Plaintiff/Petitioner</div>
                                </div>
                                <div> VS. </div>
                                <div class="w-75 responsive_input text-end">
                                    <input type="text" name="vd" id=""
                                        class="border-0 border-bottom w-75 responsive_input ">
                                    <div class="small_text text-center">Defendant/Petitioner</div>
                                </div>
                            </div>
                        </div>

                        <div class="fw-bold pt-3">I. PERSONAL INFORMATION</div>
                        <div class="ps-lg-5">
                            <div class=" small_text">
                                <span>Your Name</span>
                                <span><input type="text" name="Your Name" id=""
                                        class="border-0 border-bottom responsive_input" style="width:754px;"> </span>
                                <span>Social Security No.</span>
                                <span><input type="text" name="Social Security No" id=""
                                        class="border-0 border-bottom responsive_input"></span>
                            </div>

                            <div class="d-flex d_sm_block pt-lg-1 small_text">
                                <div>Address</div>
                                <div>
                                    <input type="text" name="Address" id=""
                                        class="border-0 border-bottom responsive_input" style="width:473px;">
                                    <div class="text-center">(Street address)</div>

                                </div>
                                <div class="ms-lg-3">
                                    <input type="text" name="CityTown" id=""
                                        class="border-0 border-bottom responsive_input" style="width:320px;">
                                    <div class="text-center">(City/Town)</div>
                                </div>
                                <div class="ms-lg-3">
                                    <input type="text" name="State" id=""
                                        class="border-0 border-bottom responsive_input" style="width:120px;">
                                    <div class="text-center">(State)</div>
                                </div>
                                <div class="ms-lg-3">
                                    <input type="text" name="Zip" id=""
                                        class="border-0 border-bottom responsive_input"style="width:120px;">
                                    <div class="text-center">(Zip)</div>
                                </div>
                            </div>
                            <div class="d-flex d_sm_block pt-lg-1 small_text">
                                <div>Tel. No.</div>
                                <div> <input type="number" name="Tel No" id=""
                                        class="border-0 border-bottom responsive_input"style="width:332px;"></div>
                                <div>Date of Birth</div>
                                <div> <input type="date" name="Date of Birth" id=""
                                        class="border-0 border-bottom responsive_input"style="width:332px;"></div>
                                <div>No. of children living with you</div>
                                <div> <input type="text" name="No of children living with you" id=""
                                        class="border-0 border-bottom responsive_input"style="width:135px;"></div>
                            </div>
                            <div class="d-flex d_sm_block pt-lg-1 small_text">
                                <div>Occupation</div>
                                <div> <input type="text" name="Occupation" id=""
                                        class="border-0 border-bottom responsive_input"style="width:430px;"></div>
                                <div>Employer</div>
                                <div> <input type="text" name="Employer" id=""
                                        class="border-0 border-bottom responsive_input"style="width:568px;"></div>
                            </div>

                            <div class="d-flex d_sm_block pt-lg-1 small_text">
                                <div>Employer's Address</div>
                                <div>
                                    <input type="text" name="Employers address" id=""
                                        class="border-0 border-bottom responsive_input" style="width:400px;">
                                    <div class="text-center">(Street address)</div>

                                </div>
                                <div class="ms-lg-3">
                                    <input type="text" name="CityTown_2" id=""
                                        class="border-0 border-bottom responsive_input" style="width:312px;">
                                    <div class="text-center">(City/Town)</div>
                                </div>
                                <div class="ms-lg-3">
                                    <input type="text" name="State_2" id=""
                                        class="border-0 border-bottom responsive_input" style="width:120px;">
                                    <div class="text-center">(State)</div>
                                </div>
                                <div class="ms-lg-3">
                                    <input type="text" name="Zip_2" id=""
                                        class="border-0 border-bottom responsive_input"style="width:120px;">
                                    <div class="text-center">(Zip)</div>
                                </div>
                            </div>

                            <div class="d-flex d_sm_block pt-lg-1 small_text">
                                <div>Tel. No.</div>
                                <div><input type="number" name="Employer Phone No" id=""
                                        class="border-0 border-bottom responsive_input" style="width:708px"></div>
                                <div>Do you have health insurance coverage?</div>
                                <div><input type="radio" name="Do you have health insurance coverage" id="" class="mx-2">
                                    <span>Yes</span>
                                </div>
                                <div><input type="radio" name="Do you have health insurance coverage" id="" class="mx-2">
                                    <span>No</span>
                                </div>
                            </div>

                            <div class="d-flex d_sm_block pt-lg-1 small_text">
                                <div>if yes, name of health insurance provider</div>
                                <div><input type="text" name="if yes name of health insurance provider" id=""
                                        class="border-0 border-bottom responsive_input" style="width:862px"></div>

                            </div>
                        </div>
                        <div class="fw-bold pt-3"> II. GROSS WEEKLY INCOME/RECEIPTS FROM ALL SOURCES</div>
                        <div class="ps-lg-5 pt-lg-1 small_text">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div> a) Base pay from <input type="checkbox" name="Salary" class="mx-1" id=""> <span>Salary</span> <input type="checkbox" name="Wages" class="mx-1" id=""> <span>Wages</span></div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>
                                        <div class="responsive_input"><input type="number" name="undefined" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-8">
                                    <div> b) Overtime </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>
                                        <div class="responsive_input"><input type="number" name="undefined_2" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-8">
                                    <div> c) Part-time job </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>
                                        <div class="responsive_input"><input type="number" name="undefined_3" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-8">
                                    <div> d) Self-employment (attach a completed schedule A) </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>
                                        <div class="responsive_input"><input type="number" name="undefined_4" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-8">
                                    <div> e) Tips</div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>
                                        <div class="responsive_input"><input type="number" name="undefined_5" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-8">
                                    <div> f) <input type="checkbox" name="Commissions" id="" class="ms-lg-3">
                                        <span>Commissions</span>
                                        <input type="checkbox" name="Bonuses" class="ms-lg-2" id="">
                                        <span>Bonuses</span>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>
                                        <div class="responsive_input"><input type="number" name="undefined_6" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-8">
                                    <div> g) <input type="checkbox" name="Dividends" id="" class="ms-lg-3">
                                        <span>Dividends</span>
                                        <input type="checkbox" name="Interest" class="ms-lg-4" id="">
                                        <span>Interest</span>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>
                                        <div class="responsive_input"><input type="number" name="undefined_7" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-8">
                                    <div> h) <input type="checkbox" name="Trusts" id="" class="ms-lg-3">
                                        <span>Trusts</span>
                                        <input type="checkbox" name="Annuities" class="ms-lg-5" id="">
                                        <span>Annuities</span>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>
                                        <div class="responsive_input"><input type="number" name="undefined_8" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-8">
                                    <div> i) <input type="checkbox" name="Pensions" id="" class="ms-lg-3">
                                        <span>Pensions</span>
                                        <input type="checkbox" name="Retirement funds" class="ms-lg-4" id="">
                                        <span>Retirement funds</span>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>
                                        <div class="responsive_input"><input type="number" name="undefined_9" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-8">
                                    <div> j) Social Security </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>
                                        <div class="responsive_input"><input type="number" name="undefined_10" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="d-flex d_sm_block"> k) <input type="checkbox" name="Disability" id="" class="ms-lg-3 me-1">
                                        <span>Disability</span>
                                        <input type="checkbox" name="Unemployment insurance" id="" class="ms-lg-3 me-1">
                                        <span> Unemployment insurance</span>
                                        <input type="checkbox" name="Workers compensation" id="" class="ms-lg-3 me-1">
                                        <span> Worker's compensation</span>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>
                                        <div class="responsive_input"><input type="number" name="undefined_11" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="d-flex d_sm_block">l) Public Assistance (e.g. welfare, TAFDC, SNAP) (not included in gross income for child support)</div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>
                                        <div class="responsive_input"><input type="number" name="undefined_12" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="d-flex d_sm_block"> m) <input type="checkbox" name="Child Support" id="" class="ms-lg-3 me-1">
                                        <span>Child Support</span>
                                        <input type="checkbox" name="Alimony actually received" id="" class="ms-lg-3 me-1">
                                        <span> Alimony (actually received)</span>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>
                                        <div class="responsive_input"><input type="number" name="undefined_13" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="d-flex d_sm_block">n) Rental from income producing property (attach a
                                        completed Schedule B) </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>
                                        <div class="responsive_input"><input type="number" name="undefined_14"
                                                class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="d-flex d_sm_block">o) Royalties and other rights</div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>
                                        <div class="responsive_input"><input type="number" name="undefined_15" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="d-flex d_sm_block">p) Contributions from household member(s)</div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>
                                        <div class="responsive_input"><input type="number" name="undefined_16" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="d-flex d_sm_block">q) Other (specify)</div>
                                </div>
                                <div class="col-lg-4">
                                    {{-- <div class="d-flex justify-content-md-end">
                                        <div>$</div>
                                        <div class="responsive_input"><input type="number" name="undefined_17"
                                                class="border-0 border-bottom responsive_input"></div>
                                    </div> --}}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-8 ps-lg-5">
                                    <div><input type="number" name="q Other specify 1" class="border-0 border-bottom responsive_input w-75"></div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>
                                        <div class="responsive_input"><input type="number" name="undefined_17" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-8 ps-lg-5">
                                    <div><input type="number" name="q Other specify 2" class="border-0 border-bottom responsive_input w-75"></div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>
                                        <div class="responsive_input"><input type="number" name="undefined_18" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row  mt-lg-3">
                                <div class="col-lg-8 ps-lg-5 text-end fw-bold">
                                    <div>r) Total Gross Weekly Income/Receipts (add items a-q)</div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>
                                        <div class="responsive_input"><input type="number" name="undefined_19" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @include('layouts.footer22', ['page' => 1])
                </section>
                <section class="section_area p-5" id="second_section">
                    <div class="row">
                        <div class="">
                            <div class="d-flex d_sm_block justify-content-between">
                                <div class="d-flex d_sm_block my-auto">
                                    <span>Division: </span>
                                    <input type="text"
                                        class="border-none border-0 border-bottom responsive_input shadow-none my-auto responsive_input"
                                        name="Division_2">
                                </div>
                                <div class=" d_sm_block">
                                    <div class="fw-bold text-center  ">Commonwealth of Massachusetts <br>The Trial
                                        Court <br> Probate and Family Court Department <br> FINANCIAL STATEMENT </div>
                                </div>
                                <div class="d-flex d_sm_block  my-auto ">
                                    <span>Docket No.</span>
                                    <input type="text"
                                        class="border-none border-0 border-bottom responsive_input shadow-none my-auto responsive_input"
                                        name="Docket No_2">
                                </div>
                            </div>
                            <div class="text-center">(Long form)</div>

                            <div class="fw-bold">III. WEEKLY DEDUCTIONS FROM GROSS INCOME</div>
                            <div class="ps-lg-4">
                                <div class="d-inline border-bottom border-dark">TAX WITHOLDING</div>
                                <div class="ps-lg-3 small_text">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div> a) Federal tax witholding/estimated payments <br>
                                                Number of withholding allowances claimed <input type="text"
                                                    name="Number of withholding allowances claimed" class="border-0 border-bottom responsive_input"
                                                    id=""> </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="d-flex justify-content-md-end">
                                                <div>$</div>
                                                <div class="responsive_input"><input type="number" name="undefined_21"
                                                        class="border-0 border-bottom responsive_input"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div> b) State tax witholding/estimated payments <br>
                                                Number of withholding allowances claimed<input type="text"
                                                    name="Number of withholding allowances claimed_2" class="border-0 border-bottom responsive_input"
                                                    id=""> </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="d-flex justify-content-md-end">
                                                <div>$</div>
                                                <div class="responsive_input"><input type="number" name="undefined_22"
                                                        class="border-0 border-bottom responsive_input"></div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="d-inline border-0 border-bottom">OTHER DEDUCTIONS</div>
                                <div class="ps-lg-3 small_text">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div>c) F.I.C.A.</div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="d-flex justify-content-md-end">
                                                <div>$</div>
                                                <div class="responsive_input"><input type="number" name="undefined_23"
                                                        class="border-0 border-bottom responsive_input"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div>d) Medicare</div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="d-flex justify-content-md-end">
                                                <div>$</div>
                                                <div class="responsive_input"><input type="number" name="undefined_24" class="border-0 border-bottom responsive_input"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div>e) Medical Insurance</div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="d-flex justify-content-md-end">
                                                <div>$</div>
                                                <div class="responsive_input"><input type="number" name="undefined_25" class="border-0 border-bottom responsive_input"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div>f) Dental Insurance</div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="d-flex justify-content-md-end">
                                                <div>$</div>
                                                <div class="responsive_input"><input type="number" name="undefined_26" class="border-0 border-bottom responsive_input"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div>g) Vision Insurance</div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="d-flex justify-content-md-end">
                                                <div>$</div>
                                                <div class="responsive_input"><input type="number" name="undefined_27" class="border-0 border-bottom responsive_input"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div>h) Union Dues</div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="d-flex justify-content-md-end">
                                                <div>$</div>
                                                <div class="responsive_input"><input type="number" name="undefined_28" class="border-0 border-bottom responsive_input"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div>i) Child Support</div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="d-flex justify-content-md-end">
                                                <div>$</div>
                                                <div class="responsive_input"><input type="number" name="undefined_29" class="border-0 border-bottom responsive_input"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div>j) Spousal Support</div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="d-flex justify-content-md-end">
                                                <div>$</div>
                                                <div class="responsive_input"><input type="number" name="undefined_30" class="border-0 border-bottom responsive_input"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div>k) Retirement</div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="d-flex justify-content-md-end">
                                                <div>$</div>
                                                <div class="responsive_input"><input type="number" name="undefined_31" class="border-0 border-bottom responsive_input"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div>l) Savings</div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="d-flex justify-content-md-end">
                                                <div>$</div>
                                                <div class="responsive_input"><input type="number" name="undefined_32" class="border-0 border-bottom responsive_input"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div>m) Deferred Compensation</div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="d-flex justify-content-md-end">
                                                <div>$</div>
                                                <div class="responsive_input"><input type="number" name="undefined_33" class="border-0 border-bottom responsive_input"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div>n) Credit Union (Loan)</div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="d-flex justify-content-md-end">
                                                <div>$</div>
                                                <div class="responsive_input"><input type="number" name="undefined_34" class="border-0 border-bottom responsive_input"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div>o) Credit Union (Savings)</div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="d-flex justify-content-md-end">
                                                <div>$</div>
                                                <div class="responsive_input"><input type="number" name="undefined_35" class="border-0 border-bottom responsive_input"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div>p) Charitable Contributions</div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="d-flex justify-content-md-end">
                                                <div>$</div>
                                                <div class="responsive_input"><input type="number" name="undefined_36"
                                                        class="border-0 border-bottom responsive_input"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div>q) Life Insurance</div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="d-flex justify-content-md-end">
                                                <div>$</div>
                                                <div class="responsive_input"><input type="number" name="undefined_37"
                                                        class="border-0 border-bottom responsive_input"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div>r) Other (specify) <input type="text" name="r Other specify 1"
                                                    id=""
                                                    class="border-0 border-bottom responsive_input w-50"></div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="d-flex justify-content-md-end">
                                                <div>$</div>
                                                <div class="responsive_input"><input type="number" name="undefined_38"
                                                        class="border-0 border-bottom responsive_input"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div> <input type="text" name="r Other specify 2" id=""
                                                    class="border-0 border-bottom responsive_input w-75"></div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="d-flex justify-content-md-end">
                                                <div>$</div>
                                                <div class="responsive_input"><input type="number" name="undefined_39" class="border-0 border-bottom responsive_input"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div> <input type="text" name="r Other specify 20" id="" class="border-0 border-bottom responsive_input w-75"></div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="d-flex justify-content-md-end">
                                                <div>$</div>
                                                <div class="responsive_input"><input type="number" name="undefined_40" class="border-0 border-bottom responsive_input"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row pt-lg-3">
                                        <div class="col-lg-8 text-center">
                                            <div><b> s) Total Weekly Deductions from Pay </b>(Add items a-r)</div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="d-flex justify-content-md-end">
                                                <div>$</div>
                                                <div class="responsive_input"><input type="number" name="undefined_41" class="border-0 border-bottom responsive_input"></div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="my-lg-3 fw-bold d-inline border-bottom"> IV. NET WEEKLY INCOME</div>

                                <div class="row  ps-lg-3 small_text">
                                    <div class="col-lg-8 ">
                                        <div> a) Enter total gross weekly income/receipts from II(r)</div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="d-flex justify-content-md-end">
                                            <div>$</div>
                                            <div class="responsive_input"><input type="number" name="undefined_42"
                                                    class="border-0 border-bottom responsive_input"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row  ps-lg-3 small_text">
                                    <div class="col-lg-8 ">
                                        <div>b) Enter total weekly deductions from pay from III(s)</div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="d-flex justify-content-md-end">
                                            <div>-$</div>
                                            <div class="responsive_input"><input type="number" name="undefined_43"
                                                    class="border-0 border-bottom responsive_input"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row  ps-lg-3 small_text">
                                    <div class="col-lg-8 fw-bold text-center">
                                        <div>c) Net Weekly Income</div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="d-flex justify-content-md-end">
                                            <div>=$</div>
                                            <div class="responsive_input"><input type="number" name="undefined_44"
                                                    class="border-0 border-bottom responsive_input"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="fw-bold d-inline border-bottom pt-lg-3">V. GROSS INCOME FROM PRIOR YEAR
                                </div>
                                <div class="row  ps-lg-3 small_text">
                                    <div class="col-lg-8 fw-bold">
                                        <div>(attach copy of all W-2 and 1099 forms for prior year)</div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="d-flex justify-content-md-end">
                                            <div>$</div>
                                            <div class="responsive_input"><input type="number" name="undefined_45"
                                                    class="border-0 border-bottom responsive_input"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row  ps-lg-3 small_text">
                                    <div class="col-lg-8 ps-lg-5">
                                        <div>Number of years you have paid into Social Security <input type="number"
                                                name="Number of years you have paid into Social Security" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                    <div class="col-lg-4">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @include('layouts.footer22', ['page' => 2])
                </section>
                <section class="section_area p-5" id="third_section">

                    <div class="row">
                        <div class=" ">
                            <div class="d-flex d_sm_block justify-content-between">
                                <div class="d-flex d_sm_block my-auto">
                                    <span>Division: </span>
                                    <input type="text"
                                        class="border-none border-0 border-bottom responsive_input shadow-none my-auto responsive_input"
                                        name="Division_3">
                                </div>
                                <div class=" d_sm_block">
                                    <div class="fw-bold text-center">Commonwealth of Massachusetts <br>The Trial Court
                                        <br> Probate and Family Court Department <br> FINANCIAL STATEMENT </div>
                                </div>
                                <div class="d-flex d_sm_block  my-auto">
                                    <span>Docket No.</span>
                                    <input type="text"
                                        class="border-none border-0 border-bottom responsive_input shadow-none my-auto responsive_input"
                                        name="Docket No_3">
                                </div>
                            </div>
                            <div class="text-center">(Long form)</div>

                            <div class="fw-bold">VI. WEEKLY EXPENSES NOT DEDUCTED FROM PAY</div>
                        </div>
                        <div class="ps-lg-5">
                            <div class="row small_text">
                                <div class="col-lg-8">
                                    <div>Rent</div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>
                                        <div class="responsive_input"><input type="number" name="undefined_46" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>


                            <div class="row small_text">
                                <div class="col-lg-8">
                                    <div>Mortgage (Principal, Interest - Taxes and Insurance, if escrowed)</div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>
                                        <div class="responsive_input"><input type="number" name="undefined_47" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="row small_text">
                                <div class="col-lg-8">
                                    <div>Property taxes and assessments</div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>
                                        <div class="responsive_input"><input type="number" name="undefined_48" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="row small_text">
                                <div class="col-lg-8">
                                    <div>Homeowner/Tenant Insurance</div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>
                                        <div class="responsive_input"><input type="number" name="undefined_49" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="row small_text">
                                <div class="col-lg-8">
                                    <div><input type="checkbox" name="Maintenance Fees" id=""> Maintenance Fees <input type="checkbox" name="Condominium Fees" class="ms-lg-4" id=""> Condominium Fees </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>
                                        <div class="responsive_input"><input type="number" name="undefined_50" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="row small_text">
                                <div class="col-lg-8">
                                    <div>Heat</div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>
                                        <div class="responsive_input"><input type="number" name="undefined_51" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="row small_text">
                                <div class="col-lg-8">
                                    <div>Electricity</div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>
                                        <div class="responsive_input"><input type="number" name="undefined_52" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>


                            <div class="row small_text">
                                <div class="col-lg-8">
                                    <div><input type="checkbox" name="Propane" id=""> Propane <input
                                            type="checkbox" name="Natural Gas" class="ms-lg-5" id=""> Natural
                                        Gas </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>
                                        <div class="responsive_input"><input type="number" name="undefined_53" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="row small_text">
                                <div class="col-lg-8">
                                    <div>Telephone</div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>
                                        <div class="responsive_input"><input type="number" name="undefined_54" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>



                            <div class="row small_text">
                                <div class="col-lg-8">
                                    <div><input type="checkbox" name="Water" id=""> Water <input
                                            type="checkbox" name="Sewer" class="ms-lg-5" id=""> Sewer
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>
                                        <div class="responsive_input"><input type="number" name="undefined_55" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="row small_text">
                                <div class="col-lg-8">
                                    <div>Food</div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>
                                        <div class="responsive_input"><input type="number" name="undefined_56" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="row small_text">
                                <div class="col-lg-8">
                                    <div>House Supplies</div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>
                                        <div class="responsive_input"><input type="number" name="undefined_57" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="row small_text">
                                <div class="col-lg-8">
                                    <div>Laundry</div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>
                                        <div class="responsive_input"><input type="number" name="undefined_58" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="row small_text">
                                <div class="col-lg-8">
                                    <div>Dry Cleaning</div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>
                                        <div class="responsive_input"><input type="number" name="undefined_59" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="row small_text">
                                <div class="col-lg-8">
                                    <div>Clothing</div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>
                                        <div class="responsive_input"><input type="number" name="undefined_60" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="row small_text">
                                <div class="col-lg-8">
                                    <div>Life insurance</div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>
                                        <div class="responsive_input"><input type="number" name="undefined_61" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="row small_text">
                                <div class="col-lg-8">
                                    <div>Medical insurance</div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>
                                        <div class="responsive_input"><input type="number" name="undefined_62" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="row small_text">
                                <div class="col-lg-8">
                                    <div>Dental insurance</div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>
                                        <div class="responsive_input"><input type="number" name="undefined_63" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="row small_text">
                                <div class="col-lg-8">
                                    <div>Vision insurance</div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>
                                        <div class="responsive_input"><input type="number" name="undefined_64" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="row small_text">
                                <div class="col-lg-8">
                                    <div>Uninsured Medical</div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>
                                        <div class="responsive_input"><input type="number" name="undefined_65" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="row small_text">
                                <div class="col-lg-8">
                                    <div>Uninsured Dental</div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>
                                        <div class="responsive_input"><input type="number" name="undefined_66" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="row small_text">
                                <div class="col-lg-8">
                                    <div>Motor Vehicle Expenses</div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>
                                        <div class="responsive_input"><input type="number" name="undefined_67" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row small_text ps-lg-4">
                                <div class="col-lg-8">
                                    <div>Fuel</div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>
                                        <div class="responsive_input"><input type="number" name="undefined_68" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row small_text ps-lg-4">
                                <div class="col-lg-8">
                                    <div>Insurance</div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>
                                        <div class="responsive_input"><input type="number" name="undefined_69" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row small_text ps-lg-4">
                                <div class="col-lg-8">
                                    <div>Maintenance</div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>
                                        <div class="responsive_input"><input type="number" name="undefined_70" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row small_text ps-lg-4">
                                <div class="col-lg-8">
                                    <div>Loan payment(s)</div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>
                                        <div class="responsive_input"><input type="number" name="undefined_71" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row small_text">
                                <div class="col-lg-8">
                                    <div>Entertainment</div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>
                                        <div class="responsive_input"><input type="number" name="undefined_72" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="row small_text">
                                <div class="col-lg-8">
                                    <div>Vacation</div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>
                                        <div class="responsive_input"><input type="number" name="undefined_73" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="row small_text ">
                                <div class="col-lg-8">
                                    <div>Cable TV</div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>
                                        <div class="responsive_input"><input type="number" name="undefined_74" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="row small_text ">
                                <div class="col-lg-8">
                                    <div>Child Support (attach a copy of the order, if issued by a different court)
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>
                                        <div class="responsive_input"><input type="number" name="undefined_75" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="row small_text ">
                                <div class="col-lg-8">
                                    <div>Child(ren)'s Day Care Expense</div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>
                                        <div class="responsive_input"><input type="number" name="undefined_76" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="row small_text ">
                                <div class="col-lg-8">
                                    <div>Child(ren)'s Education</div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>
                                        <div class="responsive_input"><input type="number" name="undefined_77" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="row small_text ">
                                <div class="col-lg-8">
                                    <div>Education (self)</div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>
                                        <div class="responsive_input"><input type="number" name="undefined_78" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>

                            @include('layouts.footer22', ['page' => 3])
                        </div>
                    </div>
                </section>
                <section class="section_area p-5" id="fourth_section">

                    <div class="row">
                        <div class="">
                            <div class="d-flex d_sm_block justify-content-between">
                                <div class="d-flex d_sm_block my-auto">
                                    <span>Division: </span>
                                    <input type="text" class="border-none border-0 border-bottom responsive_input shadow-none my-auto responsive_input" name="Division_4">
                                </div>
                                <div class=" d_sm_block">
                                    <div class="fw-bold text-center">Commonwealth of Massachusetts <br>The Trial Court <br> Probate and Family Court Department <br> FINANCIAL STATEMENT </div>
                                </div>
                                <div class="d-flex d_sm_block  my-auto">
                                    <span>Docket No.</span>
                                    <input type="text" class="border-none border-0 border-bottom responsive_input shadow-none my-auto responsive_input" name="Docket No_4">
                                </div>
                            </div>
                            <div class="text-center">(Long form)</div>

                        </div>
                        <div class="ps-lg-5">
                            <div class="row small_text">
                                <div class="col-lg-8">
                                    <div>Employment related expenses (which are not reimbursed)</div>
                                </div>
                                <div class="col-lg-4">
                                    {{-- <div class="d-flex justify-content-md-end">
                                        <div>$</div>
                                        <div class="responsive_input"><input type="number" name="Employment related expenses" class="border-0 border-bottom responsive_input"></div>
                                    </div> --}}
                                </div>
                            </div>

                            <div class="row small_text ps-lg-4">
                                <div class="col-lg-8">
                                    <div>Uniforms</div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>
                                        <div class="responsive_input"><input type="number" name="undefined_80" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="row small_text ps-lg-4">
                                <div class="col-lg-8">
                                    <div>Travel</div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>
                                        <div class="responsive_input"><input type="number" name="undefined_81" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="row small_text ps-lg-4">
                                <div class="col-lg-8">
                                    <div>Required continuing education</div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>
                                        <div class="responsive_input"><input type="number" name="undefined_82" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="row small_text ps-lg-4">
                                <div class="col-lg-8">
                                    <div>Other (specify) <input type="text" name="Other specify" id="" class="border-0 border-bottom responsive_input"></div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>
                                        <div class="responsive_input"><input type="number" name="undefined_83"  class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="row small_text">
                                <div class="col-lg-8">
                                    <div>Lottery tickets</div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>
                                        <div class="responsive_input"><input type="number" name="undefined_84" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="row small_text">
                                <div class="col-lg-8">
                                    <div>Charitable Contributions</div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>
                                        <div class="responsive_input"><input type="number" name="undefined_85" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="row small_text">
                                <div class="col-lg-8">
                                    <div>Child(ren)'s allowance</div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>
                                        <div class="responsive_input"><input type="number" name="undefined_86" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="row small_text">
                                <div class="col-lg-8">
                                    <div>Extraordinary travel expenses for visitation with child(ren)</div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>
                                        <div class="responsive_input"><input type="number" name="undefined_87" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="row small_text">
                                <div class="col-lg-8">
                                    <div>Other (specify) <input type="text" name="Other specify 1" id=""
                                            class="border-0 border-bottom responsive_input"></div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>
                                        <div class="responsive_input"><input type="number" name="undefined_88"
                                                class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="row small_text">
                                <div class="col-lg-8">
                                    <div> <input type="text" name="Other specify 2" id=""
                                            class="border-0 border-bottom responsive_input"></div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>
                                        <div class="responsive_input"><input type="number" name="undefined_89"
                                                class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="row small_text">
                                <div class="col-lg-8">
                                    <div> <input type="text" name="undefined_79" id="" class="border-0 border-bottom responsive_input"></div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>
                                        <div class="responsive_input"><input type="number" name="undefined_90" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>

                            {{-- <div class="row small_text">
                                <div class="col-lg-8">
                                    <div> <input type="text" name="Other_15" id="" class="border-0 border-bottom responsive_input"></div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>
                                        <div class="responsive_input"><input type="number" name="Other_16" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div> --}}

                            <div class="row small_text my-lg-4">
                                <div class="col-lg-8 fw-bold">
                                    <div>TOTAL WEEKLY EXPENSES NOT DEDUCTED FROM PAY</div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>
                                        <div class="responsive_input"><input type="number" name="undefined_91"
                                                class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="fw-bold pt-lg-3">VII. COUNSEL FEES</div>
                        <div class="ps-lg-5 small_text">
                            <div class="d-flex justify-content-between d_sm_block ">
                                <div> Retainer amount(s) paid to your attorney(s)</div>
                                <div class="d-flex">
                                    <div>$</div><input type="number" name="undefined_92" class="border-0 border-bottom responsive_input">
                                </div>
                            </div>
                            <div class="d-flex justify-content-between d_sm_block ">
                                <div> Legal fees incurred, to date, against retainer(s)</div>
                                <div class="d-flex">
                                    <div>$</div><input type="number" name="undefined_94" class="border-0 border-bottom responsive_input">
                                </div>
                            </div>
                            <div class="d-flex justify-content-between d_sm_block ">
                                <div> Anticipated range of total legal expense to litigate this action</div>
                                <div class="d-flex">
                                    <div>$</div><input type="number" name="undefined_93" class="border-0 border-bottom responsive_input me-2"> to <div class="ms-2">$</div><input type="number" name="to" class="border-0 border-bottom responsive_input ">
                                </div>
                            </div>
                        </div>
                        <div class="fw-bold pt-lg-3">VIII. ASSETS</div>
                        <div class="small_text ps-lg-5"><b class="border-bottom border-dark">INSTRUCTIONS:</b> If
                            additional space is needed for any answer or to disclose additional assets not listed below
                            please attach additional pages.</div>
                        <div class="small_text ps-lg-4">A <span class="border-bottom">REAL ESTATE</span> </div>
                        <div class="ps-lg-5 small_text">
                            <span class="div border-bottom border-dark">Real Estate-Primary Residence</span>
                            <div class="d-flex d_sm_block pt-lg-1 small_text">
                                <div>Address</div>
                                <div>
                                    <input type="text" name="Address_2" id="" class="border-0 border-bottom responsive_input" style="width:473px;">
                                    <div class="text-center">(Street address)</div>

                                </div>
                                <div class="ms-lg-3">
                                    <input type="text" name="CityTown_3" id=""
                                        class="border-0 border-bottom responsive_input" style="width:380px;">
                                    <div class="text-center">(City/Town)</div>
                                </div>
                                <div class="ms-lg-3">
                                    <input type="text" name="State_3" id=""
                                        class="border-0 border-bottom responsive_input" style="width:180px;">
                                    <div class="text-center">(State)</div>
                                </div>
                            </div>
                            <div class="d-flex d_sm_block pt-lg-1 small_text">
                                <div>Title held in the name of</div>
                                <div>
                                    <input type="text" name="Title held in the name of" id="" class="border-0 border-bottom responsive_input" style="width:473px;">

                                </div>

                            </div>
                            <div class="row small_text">
                                <div class="col-lg-4">
                                    Purchase Price of the Property
                                </div>
                                <div class="col-lg-1">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>
                                        <div class="responsive_input"><input type="number" name="undefined_95" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="row small_text">
                                <div class="col-lg-4">Year of Purchase </div>
                                <div class="col-lg-1">
                                    <div class="d-flex justify-content-md-end">
                                        <div class="responsive_input"><input type="number" name="undefined_96" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="row small_text">
                                <div class="col-lg-4">Current Assessed Value of the Property</div>
                                <div class="col-lg-1">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>

                                        <div class="responsive_input"><input type="number" name="undefined_97" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row small_text">
                                <div class="col-lg-4">Date of Last Assessment</div>
                                <div class="col-lg-1">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>
                                        <div class="responsive_input"><input type="number" name="undefined_98" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row small_text">
                                <div class="col-lg-8">Fair Market Value of the Property</div>
                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>

                                        <div class="responsive_input"><input type="number" name="undefined_99" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row small_text">
                                <div class="col-lg-8">Outstanding 1st mortgage</div>
                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>- $</div>
                                        <div class="responsive_input"><input type="number" name="undefined_100" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row small_text">
                                <div class="col-lg-8">Outstanding 2nd mortgage or home equity loan</div>
                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>- $</div>

                                        <div class="responsive_input"><input type="number" name="undefined_101" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row small_text">
                                <div class="col-lg-8">Equity</div>
                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>= $</div>
                                        <div class="responsive_input"><input type="number" name="undefined_102" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        @include('layouts.footer22', ['page' => 4])
                    </div>

                </section>

                <section class="section_area p-5" id="fifth_section">

                    <div class="row">
                        <div class=" ">
                            <div class="d-flex d_sm_block justify-content-between">
                                <div class="d-flex d_sm_block my-auto">
                                    <span>Division: </span>
                                    <input type="text"
                                        class="border-none border-0 border-bottom responsive_input shadow-none my-auto responsive_input"
                                        name="Division_5">
                                </div>
                                <div class=" d_sm_block">
                                    <div class="fw-bold text-center">Commonwealth of Massachusetts <br>The Trial Court <br> Probate and Family Court Department <br> FINANCIAL STATEMENT </div>
                                </div>
                                <div class="d-flex d_sm_block  my-auto">
                                    <span>Docket No.</span>
                                    <input type="text"  class="border-none border-0 border-bottom responsive_input shadow-none my-auto responsive_input"
                                        name="Docket No_5">
                                </div>
                            </div>
                            <div class="text-center">(Long form)</div>

                        </div>
                        <div class="ps-lg-5 small_text">
                            <span class="div border-bottom border-dark">Real Estate-Vacation or Second Home (including
                                interest in time share)</span>
                            <div class="d-flex d_sm_block pt-lg-1 small_text">
                                <div>Address</div>
                                <div>
                                    <input type="text" name="Address_3" id=""
                                        class="border-0 border-bottom responsive_input" style="width:473px;">
                                    <div class="text-center">(Street address)</div>

                                </div>
                                <div class="ms-lg-3">
                                    <input type="text" name="CityTown_4" id=""
                                        class="border-0 border-bottom responsive_input" style="width:380px;">
                                    <div class="text-center">(City/Town)</div>
                                </div>
                                <div class="ms-lg-3">
                                    <input type="text" name="State_4" id=""
                                        class="border-0 border-bottom responsive_input" style="width:180px;">
                                    <div class="text-center">(State)</div>
                                </div>
                            </div>
                            <div class="d-flex d_sm_block pt-lg-1 small_text">
                                <div>Title held in the name of</div>
                                <div>
                                    <input type="text" name="Title held in the name of_2" id=""  class="border-0 border-bottom responsive_input" style="width:473px;">
                                </div>

                            </div>
                            <div class="row small_text">
                                <div class="col-lg-4">Purchase Price of the Property</div>
                                <div class="col-lg-1">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>
                                        <div class="responsive_input"><input type="number" name="undefined_103" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="row small_text">
                                <div class="col-lg-4">Year of Purchase </div>
                                <div class="col-lg-1">
                                    <div class="d-flex justify-content-md-end">
                                        <div class="responsive_input"><input type="number" name="undefined_104" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="row small_text">
                                <div class="col-lg-4">Current Assessed Value of the Property</div>
                                <div class="col-lg-1">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>

                                        <div class="responsive_input"><input type="number" name="undefined_105" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row small_text">
                                <div class="col-lg-4">Date of Last Assessment</div>
                                <div class="col-lg-1">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>

                                        <div class="responsive_input"><input type="number" name="undefined_106" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row small_text">
                                <div class="col-lg-8">Fair Market Value of the Property</div>
                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>

                                        <div class="responsive_input"><input type="number" name="undefined_109" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row small_text">
                                <div class="col-lg-8">Outstanding 1st mortgage</div>
                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>- $</div>

                                        <div class="responsive_input"><input type="number" name="undefined_110" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row small_text">
                                <div class="col-lg-8">Outstanding 2nd mortgage or home equity loan</div>
                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>- $</div>

                                        <div class="responsive_input"><input type="number" name="undefined_111" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row small_text">
                                <div class="col-lg-8">Equity</div>
                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>= $</div>
                                        <div class="responsive_input"><input type="number" name="undefined_112" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="">B. <span class="border-bottom border-dark">MOTOR VEHICLES </span>
                            including cars, trucks, ATV's, snowmobiles, tractors,
                            motorcycles, boats, recreational vehicles, aircraft, farm machinery etc.</div>
                        <div class="ps-lg-5 small_text">
                            <div>Type <input type="text" name="Type" id=""
                                    class="border-0 border-bottom responsive_input"></div>
                            <div>Make <input type="text" name="Make" id=""
                                    class="border-0 border-bottom responsive_input"> </div>
                            <div>Model <input type="text" name="Model" id=""
                                    class="border-0 border-bottom responsive_input"></div>
                            <div> Purchase Price of Vehicle $ <input type="text" name="undefined_107" id=""
                                    class="border-0 border-bottom responsive_input"></div>
                            <div>Year of Purchase <input type="text" name="Year of Purchase" id=""
                                    class="border-0 border-bottom responsive_input"></div>
                            <div class="row">
                                <div class="col-lg-8">Fair Market Value</div>
                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>
                                        <div class="responsive_input"><input type="text" name="undefined_113"
                                                id="" class="border-0 border-bottom responsive_input">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-8">Outstanding Loan</div>
                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>- $</div>
                                        <div class="responsive_input"><input type="text" name="undefined_114"
                                                id="" class="border-0 border-bottom responsive_input">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-8">Equity</div>
                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>= $</div>
                                        <div class="responsive_input"><input type="text" name="undefined_115" id="" class="border-0 border-bottom responsive_input">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>Type <input type="text" name="Type_2" id=""
                                class="border-0 border-bottom responsive_input"></div>
                        <div>Make <input type="text" name="Make_2" id=""
                                class="border-0 border-bottom responsive_input"> </div>
                        <div>Model <input type="text" name="Model_2" id=""
                                class="border-0 border-bottom responsive_input"></div>
                        <div> Purchase Price of Vehicle $ <input type="text" name="undefined_108" id=""
                                class="border-0 border-bottom responsive_input"></div>
                        <div>Year of Purchase <input type="text" name="Year of Purchase_2" id=""
                                class="border-0 border-bottom responsive_input"></div>
                                <div class="row">
                                    <div class="col-lg-8">Fair Market Value</div>
                                    <div class="col-lg-4">
                                        <div class="d-flex justify-content-md-end">
                                            <div>$</div>
                                            <div class="responsive_input"><input type="text" name="undefined_116"
                                                    id="" class="border-0 border-bottom responsive_input">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-8">Outstanding Loan</div>
                                    <div class="col-lg-4">
                                        <div class="d-flex justify-content-md-end">
                                            <div>- $</div>
                                            <div class="responsive_input"><input type="text" name="undefined_117"
                                                    id="" class="border-0 border-bottom responsive_input">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-8">Equity</div>
                                    <div class="col-lg-4">
                                        <div class="d-flex justify-content-md-end">
                                            <div>= $</div>
                                            <div class="responsive_input"><input type="text" name="undefined_118"
                                                    id="" class="border-0 border-bottom responsive_input">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>C. <span class="border-bottom border-bottom">PENSIONS</span></div>
                                <div class="table-responsive">
                                    <table class="table  border-dark">
                                        <tr>
                                            <td></td>
                                            <td class="border border-dark">Institution</td>
                                            <td class="border border-dark">Account Number</td>
                                            <td class="border border-dark">Listed Beneficiary</td>
                                            <td class="border border-dark">Current Balance/Value</td>
                                        </tr>
                                        <tr>
                                            <td class="border border-dark">Defined Benefit Plan</td>
                                            <td class="border border-dark"><input type="text" name="InstitutionDefined Benefit Plan" id="" class="border-0 w-100"></td>
                                            <td class="border border-dark"><input type="text" name="Account NumberDefined Benefit Plan" id="" class="border-0 w-100"></td>
                                            <td class="border border-dark"><input type="text" name="Listed BeneficiaryDefined Benefit Plan" id="" class="border-0 w-100"></td>
                                            <td class="border border-dark"><div class="d-flex">$<input type="text" name="fill_36" id="" class="border-0 w-100"></div></td>
                                        </tr>
                                        <tr>
                                            <td class="border border-dark">Defined Contribution Plan</td>
                                            <td class="border border-dark"> </td>
                                            <td class="border border-dark"><input type="text" name="Account NumberRow2" id="" class="border-0 w-100"></td>
                                            <td class="border border-dark"><input type="text" name="Listed BeneficiaryRow2" id="" class="border-0 w-100"></td>
                                            <td class="border border-dark"><div class="d-flex">$<input type="text" name="fill_37" id="" class="border-0 w-100"></div></td>
                                        </tr>
                                    </table>
                                </div>

                            @include('layouts.footer22', ['page' => 5])
                        </div>
                    </div>
                </section>
                <section class="section_area p-5" id="sixth_section">

                    <div class="row">
                        <div class=" ">
                            <div class="d-flex d_sm_block justify-content-between">
                                <div class="d-flex d_sm_block my-auto">
                                    <span>Division: </span>
                                    <input type="text" class="border-none border-0 border-bottom responsive_input shadow-none my-auto responsive_input" name="Division_6">
                                </div>
                                <div class="d_sm_block">
                                    <div class="fw-bold text-center">Commonwealth of Massachusetts <br>The Trial Court <br> Probate and Family Court Department <br> FINANCIAL STATEMENT </div>
                                </div>
                                <div class="d-flex d_sm_block  my-auto">
                                    <span>Docket No.</span>
                                    <input type="text" class="border-none border-0 border-bottom responsive_input shadow-none my-auto responsive_input" name="Docket No_6">
                                </div>
                            </div>
                            <div class="text-center">(Long form)</div>
                        </div>

                        <div class="">D. <span class="border-bottom border-dark">OTHER ASSETS </span>
                            List assets which are held individually, jointly, in the name of another person for your benefit, or held
                            by you for the benefit of your minor child(ren).</div>
                        <div class="ps-lg-5 small_text">
                                 <div class="table-responsive">
                                    <table class="table  border-dark">
                                        <tr>
                                            <td></td>
                                            <td class="border border-dark">Institution</td>
                                            <td class="border border-dark">Account Number</td>
                                            <td class="border border-dark">Listed Beneficiary</td>
                                            <td class="border border-dark">Current Balance/Value</td>
                                        </tr>
                                        <tr>
                                            <td rowspan="2" class="border border-dark align-content-around">Checking Account(s)</td>
                                            <td class="border border-dark"><input type="text" name="InstitutionChecking Accounts" id="" class="border-0 w-100"></td>
                                            <td class="border border-dark"><input type="text" name="Account NumberChecking Accounts" id="" class="border-0 w-100"></td>
                                            <td class="border border-dark"><input type="text" name="Listed BeneficiaryChecking Accounts" id="" class="border-0 w-100"></td>
                                            <td class="border border-dark"><div class="d-flex">$<input type="text" name="fill_70" id="" class="border-0 w-100"></div></td>
                                        </tr>
                                        <tr class=" border_3">
                                             <td class="border border-dark"><input type="text" name="InstitutionChecking Accounts_2" id="" class="border-0 w-100"></td>
                                            <td class="border border-dark"><input type="text" name="Account NumberChecking Accounts_2" id="" class="border-0 w-100"></td>
                                            <td class="border border-dark"><input type="text" name="Listed BeneficiaryChecking Accounts_2" id="" class="border-0 w-100"></td>
                                            <td class="border border-dark"><div class="d-flex">$<input type="text" name="fill_71" id="" class="border-0 w-100"></div></td>
                                        </tr>

                                        <tr>
                                            <td rowspan="2" class="border border-dark align-content-around">Savings Account(s)</td>
                                            <td class="border border-dark"> </td>
                                            <td class="border border-dark"><input type="text" name="Account NumberRow3" id="" class="border-0 w-100"></td>
                                            <td class="border border-dark"><input type="text" name="Listed BeneficiaryRow3" id="" class="border-0 w-100"></td>
                                            <td class="border border-dark"><div class="d-flex">$<input type="text" name="fill_72" id="" class="border-0 w-100"></div></td>
                                        </tr>
                                        <tr class=" border_3">
                                             <td class="border border-dark"> </td>
                                            <td class="border border-dark"><input type="text" name="Account NumberRow4" id="" class="border-0 w-100"></td>
                                            <td class="border border-dark"><input type="text" name="Listed BeneficiaryRow" id="" class="border-0 w-100"></td>
                                            <td class="border border-dark"><div class="d-flex">$<input type="text" name="fill_73" id="" class="border-0 w-100"></div></td>
                                        </tr>


                                        <tr class=" border_3">
                                            <td class="border border-dark">Cash on Hand</td>
                                            <td class="border border-dark"><input type="text" name="Cash on Hand" id="" class="border-0 w-100"></td>
                                            <td class="border border-dark"><input type="text" name="Account NumberCash on Hand" id="" class="border-0 w-100"></td>
                                            <td class="border border-dark"><input type="text" name="Listed BeneficiaryCash on Hand" id="" class="border-0 w-100"></td>
                                            <td class="border border-dark"><div class="d-flex">$<input type="text" name="fill_74" id="" class="border-0 w-100"></div></td>
                                        </tr>

                                                                                <tr>
                                                                                    <td rowspan="2" class="border border-dark align-content-around">Certificate(s) of Deposit</td>
                                                                                    <td class="border border-dark"><input type="text" name="Certificates of Deposit" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="Account NumberCertificates of Deposit" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="Listed BeneficiaryCertificates of Deposit" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><div class="d-flex">$<input type="text" name="fill_75" id="" class="border-0 w-100"></div></td>
                                                                                </tr>
                                                                                <tr class=" border_3">
                                                                                     <td class="border border-dark"><input type="text" name="Certificates of Deposit_2" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="Account NumberCertificates of Deposit_2" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="Listed BeneficiaryCertificates of Deposit_2" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><div class="d-flex">$<input type="text" name="fill_76" id="" class="border-0 w-100"></div></td>
                                                                                </tr>

                                                                                <tr>
                                                                                    <td rowspan="2" class="border border-dark align-content-around">Credit Union Account(s)</td>
                                                                                    <td class="border border-dark"><input type="text" name="Credit Union Accounts" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="Account NumberCredit Union Accounts" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="Listed BeneficiaryCredit Union Accounts" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><div class="d-flex">$<input type="text" name="fill_77" id="" class="border-0 w-100"></div></td>
                                                                                </tr>
                                                                                <tr class=" border_3">
                                                                                     <td class="border border-dark"><input type="text" name="Credit Union Accounts_2" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="Account NumberCredit Union Accounts_2" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="Listed BeneficiaryCredit Union Accounts_2" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><div class="d-flex">$<input type="text" name="fill_78" id="" class="border-0 w-100"></div></td>
                                                                                </tr>

                                                                                <tr>
                                                                                    <td rowspan="2" class="border border-dark align-content-around">Funds Held in Escrow</td>
                                                                                    <td class="border border-dark"><input type="text" name="Funds Held in Escrow" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="Account NumberFunds Held in Escrow" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="Listed BeneficiaryFunds Held in Escrow" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><div class="d-flex">$<input type="text" name="fill_79" id="" class="border-0 w-100"></div></td>
                                                                                </tr>
                                                                                <tr class=" border_3">
                                                                                     <td class="border border-dark"><input type="text" name="Funds Held in Escrow_2" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="Account NumberFunds Held in Escrow_2" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="Listed BeneficiaryFunds Held in Escrow_2" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><div class="d-flex">$<input type="text" name="fill_80" id="" class="border-0 w-100"></div></td>
                                                                                </tr>

                                                                                <tr>
                                                                                    <td rowspan="2" class="border border-dark align-content-around">Stocks</td>
                                                                                    <td class="border border-dark"><input type="text" name="Stocks" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="Account NumberStocks" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="Listed BeneficiaryStocks" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><div class="d-flex">$<input type="text" name="fill_81" id="" class="border-0 w-100"></div></td>
                                                                                </tr>
                                                                                <tr class=" border_3">
                                                                                     <td class="border border-dark"><input type="text" name="Stocks_2" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="Account NumberStocks_2" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="Listed BeneficiaryStocks_2" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><div class="d-flex">$<input type="text" name="fill_82" id="" class="border-0 w-100"></div></td>
                                                                                </tr>

                                                                                <tr>
                                                                                    <td rowspan="2" class="border border-dark align-content-around">Bonds</td>
                                                                                    <td class="border border-dark"><input type="text" name="Bonds" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="Account NumberBonds" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="Listed BeneficiaryBonds" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><div class="d-flex">$<input type="text" name="fill_83" id="" class="border-0 w-100"></div></td>
                                                                                </tr>
                                                                                <tr class=" border_3">
                                                                                     <td class="border border-dark"><input type="text" name="Bonds_2" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="Account NumberBonds_2" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="Listed BeneficiaryBonds_2" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><div class="d-flex">$<input type="text" name="fill_84" id="" class="border-0 w-100"></div></td>
                                                                                </tr>

                                                                                <tr>
                                                                                    <td rowspan="2" class="border border-dark align-content-around">Bond Fund(s)</td>
                                                                                    <td class="border border-dark"><input type="text" name="Bond Funds" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="Account NumberBond Funds" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="Listed BeneficiaryBond Funds" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><div class="d-flex">$<input type="text" name="fill_85" id="" class="border-0 w-100"></div></td>
                                                                                </tr>
                                                                                <tr class=" border_3">
                                                                                     <td class="border border-dark"><input type="text" name="Bond Funds_2" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="Account NumberBond Funds_@" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="Listed BeneficiaryBond Funds_2" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><div class="d-flex">$<input type="text" name="fill_86" id="" class="border-0 w-100"></div></td>
                                                                                </tr>

                                                                                <tr>
                                                                                    <td rowspan="2" class="border border-dark align-content-around">Notes Held</td>
                                                                                    <td class="border border-dark"><input type="text" name="Notes Held" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="Account NumberNotes Held" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="Listed BeneficiaryNotes Held" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><div class="d-flex">$<input type="text" name="fill_87" id="" class="border-0 w-100"></div></td>
                                                                                </tr>
                                                                                <tr class=" border_3">
                                                                                     <td class="border border-dark"><input type="text" name="Notes Held_2" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="Account NumberNotes Held_2" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="Listed BeneficiaryNotes Held_2" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><div class="d-flex">$<input type="text" name="fill_88" id="" class="border-0 w-100"></div></td>
                                                                                </tr>

                                                                                <tr>
                                                                                    <td rowspan="2" class="border border-dark align-content-around">Cash in Brokerage Account(s)</td>
                                                                                    <td class="border border-dark"><input type="text" name="Cash in Brokerage Accounts" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="Account NumberCash in Brokerage Accounts" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="Listed BeneficiaryCash in Brokerage Accounts" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><div class="d-flex">$<input type="text" name="fill_89" id="" class="border-0 w-100"></div></td>
                                                                                </tr>
                                                                                <tr class=" border_3">
                                                                                     <td class="border border-dark"><input type="text" name="Cash in Brokerage Accounts_2" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="Account NumberCash in Brokerage Accounts_2" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="Listed BeneficiaryCash in Brokerage Accounts_2" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><div class="d-flex">$<input type="text" name="fill_90" id="" class="border-0 w-100"></div></td>
                                                                                </tr>

                                                                                <tr>
                                                                                    <td rowspan="2" class="border border-dark align-content-around">Money Market Account(s)</td>
                                                                                    <td class="border border-dark"><input type="text" name="Money Market Accounts" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="Account NumberMoney Market Accounts" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="Listed BeneficiaryMoney Market Accounts" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><div class="d-flex">$<input type="text" name="fill_91" id="" class="border-0 w-100"></div></td>
                                                                                </tr>
                                                                                <tr class=" border_3">
                                                                                     <td class="border border-dark"><input type="text" name="Money Market Accounts_2" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="Account NumberMoney Market Accounts_2" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="Listed BeneficiaryMoney Market Accounts_2" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><div class="d-flex">$<input type="text" name="fill_92" id="" class="border-0 w-100"></div></td>
                                                                                </tr>

                                    </table>
                                </div>

                            @include('layouts.footer22', ['page' => 6])
                        </div>
                    </div>
                </section>
                <section class="section_area p-5" id="seventh_section">
                    <div class="row">
                        <div class=" ">
                            <div class="d-flex d_sm_block justify-content-between">
                                <div class="d-flex d_sm_block my-auto">
                                    <span>Division: </span>
                                    <input type="text" class="border-none border-0 border-bottom responsive_input shadow-none my-auto responsive_input" name="Division_7">
                                </div>
                                <div class=" d_sm_block">
                                    <div class="fw-bold text-center">Commonwealth of Massachusetts <br>The Trial Court
                                        <br> Probate and Family Court Department <br> FINANCIAL STATEMENT </div>
                                </div>
                                <div class="d-flex d_sm_block  my-auto">
                                    <span>Docket No.</span>
                                    <input type="text" class="border-none border-0 border-bottom responsive_input shadow-none my-auto responsive_input" name="Docket No_7">
                                </div>
                            </div>
                            <div class="text-center">(Long form)</div>

                        </div>


                        <div class="ps-lg-5 small_text">
                                 <div class="table-responsive">
                                    <table class="table  border-dark">
                                        <tr>
                                            <td></td>
                                            <td class="border border-dark">Institution</td>
                                            <td class="border border-dark">Account Number</td>
                                            <td class="border border-dark">Listed Beneficiary</td>
                                            <td class="border border-dark">Current Balance/Value</td>
                                        </tr>
                                        <tr>
                                            <td rowspan="2" class="border border-dark align-content-around">U.S. Savings Bond(s)</td>
                                            <td class="border border-dark"><input type="text" name="InstitutionSavings Bonds" id="" class="border-0 w-100"></td>
                                            <td class="border border-dark"><input type="text" name="Account NumberSavings Bonds" id="" class="border-0 w-100"></td>
                                            <td class="border border-dark"><input type="text" name="Listed BeneficiarySavings Bonds" id="" class="border-0 w-100"></td>
                                            <td class="border border-dark"><div class="d-flex">$<input type="text" name="fill_57" id="" class="border-0 w-100"></div></td>
                                        </tr>
                                        <tr class="border_3">
                                             <td class="border border-dark"><input type="text" name="InstitutionSavings Bonds_2" id="" class="border-0 w-100"></td>
                                            <td class="border border-dark"><input type="text" name="Account NumberSavings Bonds_2" id="" class="border-0 w-100"></td>
                                            <td class="border border-dark"><input type="text" name="Listed BeneficiarySavings Bonds_2" id="" class="border-0 w-100"></td>
                                            <td class="border border-dark"><div class="d-flex">$<input type="text" name="fill_58" id="" class="border-0 w-100"></div></td>
                                        </tr>

                                        <tr>
                                            <td rowspan="2" class="border border-dark align-content-around">IRAs</td>
                                            <td class="border border-dark"><input type="text" name="InstitutionIRAs" id="" class="border-0 w-100"></td>
                                            <td class="border border-dark"><input type="text" name="Account NumberIRAs" id="" class="border-0 w-100"></td>
                                            <td class="border border-dark"><input type="text" name="Listed BeneficiaryIRAs" id="" class="border-0 w-100"></td>
                                            <td class="border border-dark"><div class="d-flex">$<input type="text" name="fill_59" id="" class="border-0 w-100"></div></td>
                                        </tr>
                                        <tr class="border_3">
                                             <td class="border border-dark"><input type="text" name="InstitutionIRAs_2" id="" class="border-0 w-100"></td>
                                            <td class="border border-dark"><input type="text" name="Account NumberIRAs_2" id="" class="border-0 w-100"></td>
                                            <td class="border border-dark"><input type="text" name="Listed BeneficiaryIRAs_2" id="" class="border-0 w-100"></td>
                                            <td class="border border-dark"><div class="d-flex">$<input type="text" name="fill_60" id="" class="border-0 w-100"></div></td>
                                        </tr>
                                                                                <tr>
                                                                                    <td rowspan="2" class="border border-dark align-content-around">Keough</td>
                                                                                    <td class="border border-dark"><input type="text" name="InstitutionKeough" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="Account NumberKeough" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="Listed BeneficiaryKeough" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><div class="d-flex">$<input type="text" name="fill_61" id="" class="border-0 w-100"></div></td>
                                                                                </tr>
                                                                                <tr class=" border_3">
                                                                                     <td class="border border-dark"><input type="text" name="InstitutionKeough_2" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="Account NumberKeough_2" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="Listed BeneficiaryKeough_2" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><div class="d-flex">$<input type="text" name="fill_62" id="" class="border-0 w-100"></div></td>
                                                                                </tr>

                                                                                <tr>
                                                                                    <td rowspan="2" class="border border-dark align-content-around">Profit Sharing</td>
                                                                                    <td class="border border-dark"><input type="text" name="InstitutionProfit Sharing" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="Account NumberProfit Sharing" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="Listed BeneficiaryProfit Sharing" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><div class="d-flex">$<input type="text" name="fill_63" id="" class="border-0 w-100"></div></td>
                                                                                </tr>
                                                                                <tr class=" border_3">
                                                                                     <td class="border border-dark"><input type="text" name="InstitutionProfit Sharing_2" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="Account NumberProfit Sharing_2" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="Listed BeneficiaryProfit Sharing_2" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><div class="d-flex">$<input type="text" name="fill_64" id="" class="border-0 w-100"></div></td>
                                                                                </tr>

                                                                                <tr>
                                                                                    <td rowspan="2" class="border border-dark align-content-around">Deferred Compensation</td>
                                                                                    <td class="border border-dark"><input type="text" name="InstitutionDeferred Compensation" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="Account NumberDeferred Compensation" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="Listed BeneficiaryDeferred Compensation" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><div class="d-flex">$<input type="text" name="fill_65" id="" class="border-0 w-100"></div></td>
                                                                                </tr>
                                                                                <tr class=" border_3">
                                                                                     <td class="border border-dark"><input type="text" name="InstitutionDeferred Compensation_2" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="Account NumberDeferred Compensation_2" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="Listed BeneficiaryrDeferred Compensation_2" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><div class="d-flex">$<input type="text" name="fill_66" id="" class="border-0 w-100"></div></td>
                                                                                </tr>

                                                                                <tr>
                                                                                    <td rowspan="2" class="border border-dark align-content-around">Other Retirement Plans</td>
                                                                                    <td class="border border-dark"><input type="text" name="InstitutionOther Retirement Plans" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="Account NumberOther Retirement Plans" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="Listed BeneficiaryOther Retirement Plans" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><div class="d-flex">$<input type="text" name="fill_67" id="" class="border-0 w-100"></div></td>
                                                                                </tr>
                                                                                <tr class=" border_3">
                                                                                     <td class="border border-dark"><input type="text" name="InstitutionOther Retirement Plans_2" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="Account NumberOther Retirement Plans_2" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="Listed BeneficiaryOther Retirement Plans_2" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><div class="d-flex">$<input type="text" name="fill_68" id="" class="border-0 w-100"></div></td>
                                                                                </tr>

                                                                                <tr>
                                                                                    <td rowspan="2" class="border border-dark align-content-around">Annuity <small>(please specify whether a tax deferred annuity or a tax sheltered annuity)</small></td>
                                                                                    <td class="border border-dark"><input type="text" name="fill_67" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="Annuity2" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="Annuity3" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><div class="d-flex">$<input type="text" name="Annuity4" id="" class="border-0 w-100"></div></td>
                                                                                </tr>
                                                                                <tr class=" border_3">
                                                                                      <td class="border border-dark"><input type="text" name="Annuity please specify whether a tax deferred annuity or a tax sheltered annuity" id="" class="border-0 w-100"></td>
                                                                                     <td class="border border-dark"> </td>
                                                                                     <td class="border border-dark"> </td>
                                                                                     <td class="border border-dark"><div class="d-flex">$<input type="text" name="fill_69" id="" class="border-0 w-100"></div></td>
                                                                             </tr>

                                                                                <tr>
                                                                                    <td rowspan="2" class="border border-dark align-content-around">Life Insurance Cash Value <small>(please specify whether a term or a whole universal life insurance policy)</small></td>
                                                                                    <td class="border border-dark"><input type="text" name="Life Insurance Cash Value please specify whether a term or a whole universal life insurance policy" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="Life Insurance Cash Value2" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="Life Insurance Cash Value3" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><div class="d-flex">$<input type="text" name="fill_70_2" id="" class="border-0 w-100"></div></td>
                                                                                </tr>
                                                                                <tr class=" border_3">
                                                                                     <td class="border border-dark"><input type="text" name="Life Insurance Cash Value please specify whether a term or a whole universal life insurance policy_2" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="Life Insurance Cash Value6" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="Life Insurance Cash Value7" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><div class="d-flex">$<input type="text" name="fill_71_2" id="" class="border-0 w-100"></div></td>
                                                                                </tr>

                                                                                <tr>
                                                                                    <td rowspan="2" class="border border-dark align-content-around">Judgments/Liens</td>
                                                                                    <td class="border border-dark"><input type="text" name="JudgmentsLiens" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="Judgments/Liens2" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="Judgments/Liens3" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><div class="d-flex">$<input type="text" name="fill_72_2" id="" class="border-0 w-100"></div></td>
                                                                                </tr>
                                                                                <tr class=" border_3">
                                                                                     <td class="border border-dark"><input type="text" name="JudgmentsLiens_2" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="Judgments/Liens6" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="Judgments/Liens7" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><div class="d-flex">$<input type="text" name="fill_73_2" id="" class="border-0 w-100"></div></td>
                                                                                </tr>

                                                                                <tr  class=" border_3">
                                                                                    <td   class="border border-dark align-content-around">Pending Legacies and/or Inheritances</td>
                                                                                    <td class="border border-dark"><input type="text" name="Pending Legacies andor Inheritances" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="Pending Legacies and/or Inheritances2" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="Pending Legacies and/or Inheritances3" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><div class="d-flex">$<input type="text" name="fill_74_2" id="" class="border-0 w-100"></div></td>
                                                                                </tr>


                                                                                <tr  class=" border_3">
                                                                                    <td   class="border border-dark align-content-around">Jewelry</td>
                                                                                    <td class="border border-dark"><input type="text" name="Jewelry" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="Jewelry2" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="Jewelry3" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><div class="d-flex">$<input type="text" name="fill_75_2" id="" class="border-0 w-100"></div></td>
                                                                                </tr>
                                                                                <tr  class=" border_3">
                                                                                    <td   class="border border-dark align-content-around">Contents of Safe or Safe Deposit Box</td>
                                                                                    <td class="border border-dark"><input type="text" name="Contents of Safe or Safe Deposit Box" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="Contents of Safe or Safe Deposit Box2" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="Contents of Safe or Safe Deposit Box3" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><div class="d-flex">$<input type="text" name="fill_76_2" id="" class="border-0 w-100"></div></td>
                                                                                </tr>
                                                                                <tr  class=" border_3">
                                                                                    <td   class="border border-dark align-content-around">Firearms</td>
                                                                                    <td class="border border-dark"><input type="text" name="Firearms" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="Firearms2" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="Firearms3" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><div class="d-flex">$<input type="text" name="fill_77_2" id="" class="border-0 w-100"></div></td>
                                                                                </tr>
                                                                                <tr  class=" border_3">
                                                                                    <td   class="border border-dark align-content-around">Collections</td>
                                                                                    <td class="border border-dark"><input type="text" name="Collections" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="Collections2" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="Collections3" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><div class="d-flex">$<input type="text" name="fill_78_2" id="" class="border-0 w-100"></div></td>
                                                                                </tr>
                                                                                <tr  class=" border_3">
                                                                                    <td   class="border border-dark align-content-around">Tools/Equipment</td>
                                                                                    <td class="border border-dark"><input type="text" name="ToolsEquipment" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="Tools/Equipment2" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="Tools/Equipment3" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><div class="d-flex">$<input type="text" name="fill_79_2" id="" class="border-0 w-100"></div></td>
                                                                                </tr>
                                                                                <tr  class=" border_3">
                                                                                    <td   class="border border-dark align-content-around">Crops/Livestock</td>
                                                                                    <td class="border border-dark"><input type="text" name="CropsLivestock" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="Crops/Livestock2" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="Crops/Livestock3" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><div class="d-flex">$<input type="text" name="fill_80_2" id="" class="border-0 w-100"></div></td>
                                                                                </tr>
                                                                                <tr  class=" border_3">
                                                                                    <td   class="border border-dark align-content-around">Home Furnishings</td>
                                                                                    <td class="border border-dark"><input type="text" name="Home Furnishings" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="Home Furnishings2" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="Home Furnishings3" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><div class="d-flex">$<input type="text" name="fill_81_2" id="" class="border-0 w-100"></div></td>
                                                                                </tr>
                                                                                <tr  class=" border_3">
                                                                                    <td   class="border border-dark align-content-around">Arts and Antiques</td>
                                                                                    <td class="border border-dark"><input type="text" name="Arts and Antiques" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="Arts and Antiques2" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="Arts and Antiques3" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><div class="d-flex">$<input type="text" name="fill_82_2" id="" class="border-0 w-100"></div></td>
                                                                                </tr>
                                                                                <tr  class=" border_3">
                                                                                    <td   class="border border-dark align-content-around">Other (please specify):  <div><input type="text" name="Other please specify" id="" class="border-0 w-100 border-bottom"></div></td>
                                                                                    <td class="border border-dark"><input type="text" name="Other please specify_2" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="Other please specify3" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="Other please specify4" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><div class="d-flex">$<input type="text" name="fill_83_2" id="" class="border-0 w-100"></div></td>
                                                                                </tr>
                                                                                <tr  class=" border_3">
                                                                                    <td   class="border border-dark align-content-around">Other (please specify): <div><input type="text" name="Other please specify_3" id="" class="border-0 w-100 border-bottom"></div></td>
                                                                                    <td class="border border-dark"><input type="text" name="Other please specify_4" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="Other please specify8" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="Other please specify9" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><div class="d-flex">$<input type="text" name="fill_84_2" id="" class="border-0 w-100"></div></td>
                                                                                </tr>
                                    </table>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <div class="fw-bold">TOTAL ASSETS</div>
                                    <div class="border border-dark"><div class="d-flex">$<input type="text" name="fill_85_2" id="" class="border-0 w-100"></div></div>
                                </div>

                            @include('layouts.footer22', ['page' => 7])
                        </div>
                    </div>
                </section>
                <section class="section_area p-5" id="eighth_section">

                    <div class="row">
                        <div class=" ">
                            <div class="d-flex d_sm_block justify-content-between">
                                <div class="d-flex d_sm_block my-auto">
                                    <span>Division: </span>
                                    <input type="text"
                                        class="border-none border-0 border-bottom responsive_input shadow-none my-auto responsive_input"
                                        name="Division_8">
                                </div>
                                <div class=" d_sm_block">
                                    <div class="fw-bold text-center">Commonwealth of Massachusetts <br>The Trial Court
                                        <br> Probate and Family Court Department <br> FINANCIAL STATEMENT </div>
                                </div>
                                <div class="d-flex d_sm_block  my-auto">
                                    <span>Docket No.</span>
                                    <input type="text"
                                        class="border-none border-0 border-bottom responsive_input shadow-none my-auto responsive_input"
                                        name="Docket No_8">
                                </div>
                            </div>
                            <div class="text-center">(Long form)</div>
                            <div><b>IX. <span class="border-bottom border-dark">LIABILITIES</span> : List Loans, credit card debt, consumer debt, installment debt, etc. which are NOT listed elsewhere.</b></div>

                        </div>


                        <div class="ps-lg-5 small_text">
                                 <div class="table-responsive">
                                    <table class="table table-bordered border-dark my-lg-3">
                                        <tbody>
                                            <tr>
                                                <th class="text-center"> CREDITOR</th>
                                                <th class="text-center">NATURE OF DEBT</th>
                                                <th class="text-center">DATE INCURRED</th>
                                                <th class="text-center">AMOUNT DUE</th>
                                                <th class="text-center">WEEKLY PAYMENT</th>
                                            </tr>
                                            <tr>
                                                <td><input type="text" name="CREDITORRow1" id="" class="border-0 responsive_input  my-lg-2 w-100"></td>
                                                <td><input type="text" name="NATURE OF DEBTRow1" id="" class="border-0 responsive_input  my-lg-2 w-100"></td>
                                                <td><input type="text" name="DATE INCURREDRow1" id="" class="border-0 responsive_input  my-lg-2 w-100"></td>
                                                <td><div class="d-flex d_sm_block align-items-center"> <div>$</div><input type="number" name="fill_36_2" class="border-0 responsive_input w-100 my-lg-2 "></div></td>
                                                <td><div class="d-flex d_sm_block align-items-center"> <div>$</div><input type="number" name="fill_37_2" class="border-0 responsive_input w-100 my-lg-2 "></div></td>
                                            </tr>

                                            <tr>
                                                <td><input type="text" name="CREDITORRow2" id="" class="border-0 responsive_input  my-lg-2 w-100"></td>
                                                <td><input type="text" name="NATURE OF DEBTRow2" id="" class="border-0 responsive_input  my-lg-2 w-100"></td>
                                                <td><input type="text" name="DATE INCURREDRow2" id="" class="border-0 responsive_input  my-lg-2 w-100"></td>
                                                <td><div class="d-flex d_sm_block align-items-center"> <div>$</div><input type="number" name="fill_38" class="border-0 responsive_input w-100 my-lg-2 "></div></td>
                                                <td><div class="d-flex d_sm_block align-items-center"> <div>$</div><input type="number" name="fill_39" class="border-0 responsive_input w-100 my-lg-2 "></div></td>
                                            </tr>

                                            <tr>
                                                <td><input type="text" name="CREDITORRow3" id="" class="border-0 responsive_input  my-lg-2 w-100"></td>
                                                <td><input type="text" name="NATURE OF DEBTRow3" id="" class="border-0 responsive_input  my-lg-2 w-100"></td>
                                                <td><input type="text" name="DATE INCURREDRow3" id="" class="border-0 responsive_input  my-lg-2 w-100"></td>
                                                <td><div class="d-flex d_sm_block align-items-center"> <div>$</div><input type="number" name="fill_40" class="border-0 responsive_input w-100 my-lg-2 "></div></td>
                                                <td><div class="d-flex d_sm_block align-items-center"> <div>$</div><input type="number" name="fill_41" class="border-0 responsive_input w-100 my-lg-2 "></div></td>
                                            </tr>

                                            <tr>
                                                <td><input type="text" name="CREDITORRow4" id="" class="border-0 responsive_input  my-lg-2 w-100"></td>
                                                <td><input type="text" name="NATURE OF DEBTRow4" id="" class="border-0 responsive_input  my-lg-2 w-100"></td>
                                                <td><input type="text" name="DATE INCURREDRow4" id="" class="border-0 responsive_input  my-lg-2 w-100"></td>
                                                <td><div class="d-flex d_sm_block align-items-center"> <div>$</div><input type="number" name="fill_42" class="border-0 responsive_input w-100 my-lg-2 "></div></td>
                                                <td><div class="d-flex d_sm_block align-items-center"> <div>$</div><input type="number" name="fill_43" class="border-0 responsive_input w-100 my-lg-2 "></div></td>
                                            </tr>

                                            <tr>
                                                <td><input type="text" name="CREDITORRow5" id="" class="border-0 responsive_input  my-lg-2 w-100"></td>
                                                <td><input type="text" name="NATURE OF DEBTRow5" id="" class="border-0 responsive_input  my-lg-2 w-100"></td>
                                                <td><input type="text" name="DATE INCURREDRow5" id="" class="border-0 responsive_input  my-lg-2 w-100"></td>
                                                <td><div class="d-flex d_sm_block align-items-center"> <div>$</div><input type="number" name="fill_44" class="border-0 responsive_input w-100 my-lg-2 "></div></td>
                                                <td><div class="d-flex d_sm_block align-items-center"> <div>$</div><input type="number" name="fill_45" class="border-0 responsive_input w-100 my-lg-2 "></div></td>
                                            </tr>

                                            <tr>
                                                <td><input type="text" name="CREDITORRow6" id="" class="border-0 responsive_input  my-lg-2 w-100"></td>
                                                <td><input type="text" name="NATURE OF DEBTRow6" id="" class="border-0 responsive_input  my-lg-2 w-100"></td>
                                                <td><input type="text" name="DATE INCURREDRow6" id="" class="border-0 responsive_input  my-lg-2 w-100"></td>
                                                <td><div class="d-flex d_sm_block align-items-center"> <div>$</div><input type="number" name="fill_46" class="border-0 responsive_input w-100 my-lg-2 "></div></td>
                                                <td><div class="d-flex d_sm_block align-items-center"> <div>$</div><input type="number" name="fill_47" class="border-0 responsive_input w-100 my-lg-2 "></div></td>
                                            </tr>

                                            <tr>
                                                <td><input type="text" name="CREDITORRow7" id="" class="border-0 responsive_input  my-lg-2 w-100"></td>
                                                <td><input type="text" name="NATURE OF DEBTRow7" id="" class="border-0 responsive_input  my-lg-2 w-100"></td>
                                                <td><input type="text" name="DATE INCURREDRow7" id="" class="border-0 responsive_input  my-lg-2 w-100"></td>
                                                <td><div class="d-flex d_sm_block align-items-center"> <div>$</div><input type="number" name="fill_48" class="border-0 responsive_input w-100 my-lg-2 "></div></td>
                                                <td><div class="d-flex d_sm_block align-items-center"> <div>$</div><input type="number" name="fill_49" class="border-0 responsive_input w-100 my-lg-2 "></div></td>
                                            </tr>
                                            <tr>
                                                <td><input type="text" name="CREDITORRow8" id="" class="border-0 responsive_input  my-lg-2 w-100"></td>
                                                <td><input type="text" name="NATURE OF DEBTRow8" id="" class="border-0 responsive_input  my-lg-2 w-100"></td>
                                                <td><input type="text" name="DATE INCURREDRow8" id="" class="border-0 responsive_input  my-lg-2 w-100"></td>
                                                <td><div class="d-flex d_sm_block align-items-center"> <div>$</div><input type="number" name="fill_50" class="border-0 responsive_input w-100 my-lg-2 "></div></td>
                                                <td><div class="d-flex d_sm_block align-items-center"> <div>$</div><input type="number" name="fill_51" class="border-0 responsive_input w-100 my-lg-2 "></div></td>
                                            </tr>

                                            <tr>
                                                <td><input type="text" name="CREDITORRow9" id="" class="border-0 responsive_input  my-lg-2 w-100"></td>
                                                <td><input type="text" name="NATURE OF DEBTRow9" id="" class="border-0 responsive_input  my-lg-2 w-100"></td>
                                                <td><input type="text" name="DATE INCURREDRow9" id="" class="border-0 responsive_input  my-lg-2 w-100"></td>
                                                <td><div class="d-flex d_sm_block align-items-center"> <div>$</div><input type="number" name="fill_53" class="border-0 responsive_input w-100 my-lg-2 "></div></td>
                                                <td><div class="d-flex d_sm_block align-items-center"> <div>$</div><input type="number" name="fill_54" class="border-0 responsive_input w-100 my-lg-2 "></div></td>
                                            </tr>

                                            <tr>
                                                <td><input type="text" name="CREDITORRow10" id="" class="border-0 responsive_input  my-lg-2 w-100"></td>
                                                <td><input type="text" name="NATURE OF DEBTRow10" id="" class="border-0 responsive_input  my-lg-2 w-100"></td>
                                                <td><input type="text" name="DATE INCURREDRow10" id="" class="border-0 responsive_input  my-lg-2 w-100"></td>
                                                <td><div class="d-flex d_sm_block align-items-center"> <div>$</div><input type="number" name="fill_54" class="border-0 responsive_input w-100 my-lg-2 "></div></td>
                                                <td><div class="d-flex d_sm_block align-items-center"> <div>$</div><input type="number" name="fill_55" class="border-0 responsive_input w-100 my-lg-2 "></div></td>
                                            </tr>

                                            <tr>
                                                <td><input type="text" name="CREDITORRow11" id="" class="border-0 responsive_input  my-lg-2 w-100"></td>
                                                <td><input type="text" name="NATURE OF DEBTRow11" id="" class="border-0 responsive_input  my-lg-2 w-100"></td>
                                                <td><input type="text" name="DATE INCURREDRow11" id="" class="border-0 responsive_input  my-lg-2 w-100"></td>
                                                <td><div class="d-flex d_sm_block align-items-center"> <div>$</div><input type="number" name="fill_56" class="border-0 responsive_input w-100 my-lg-2 "></div></td>
                                                <td><div class="d-flex d_sm_block align-items-center"> <div>$</div><input type="number" name="fill_57" class="border-0 responsive_input w-100 my-lg-2 "></div></td>
                                            </tr>

                                         </tbody>


                                    </table>
                                </div>
                                <div class="d-flex justify-content-between pt-lg-3 pb-lg-5">
                                    <div class="fw-bold">TOTAL LIABILITIES</div>
                                    <div class="d-flex d_sm_block">
                                    <div class="border border-dark me-lg-5"><div class="d-flex">$<input type="text" name="fill_58_2" id="" class="border-0 w-100"></div></div>
                                    <div class="border border-dark"><div class="d-flex">$<input type="text" name="fill_59_2" id="" class="border-0 w-100"></div></div>
                                </div>
                                </div>

                            @include('layouts.footer22', ['page' => 8])
                        </div>
                    </div>
                </section>
                <section class="section_area p-5" id="ninth_section">
                    <div class="row">
                        <div class="">
                            <div class="d-flex d_sm_block justify-content-between">
                                <div class="d-flex d_sm_block my-auto">
                                    <span>Division: </span>
                                    <input type="text"
                                        class="border-none border-0 border-bottom responsive_input shadow-none my-auto responsive_input"
                                        name="Division_9">
                                </div>
                                <div class=" d_sm_block">
                                    <div class="fw-bold text-center">Commonwealth of Massachusetts <br>The Trial Court
                                        <br> Probate and Family Court Department <br> FINANCIAL STATEMENT </div>
                                </div>
                                <div class="d-flex d_sm_block  my-auto">
                                    <span>Docket No.</span>
                                    <input type="text"
                                        class="border-none border-0 border-bottom responsive_input shadow-none my-auto responsive_input"
                                        name="Docket No_9">
                                </div>
                            </div>
                            <div class="text-center">(Long form)</div>
                            <div class="text-center"><b class="border-bottom border-dark">CERTIFICATION BY AFFIANT</b></div>
                            <div class="small_text">I certify under the penalties of perjury that the information stated on this Financial Statement and the attached Schedules, if any, is complete, true, and accurate. <b>I UNDERSTAND THAT WILLFUL MISREPRESENTATION OF ANY OF THE INFORMATION PROVIDED WILL SUBJECT ME TO SANCTIONS AND MAY RESULT IN CRIMINAL CHARGES BEING FILED AGAINST ME </b> .</div>
                            <div class="row py-lg-4">

                                <div class="col-lg-6">
                                    <div>
                                        <input type="date" name="Date" id="" class="border-0 border-bottom responsive_input w-100">
                                        <div class="small_text">Date</div>
                                    </div>

                                </div>
                                <div class="col-lg-6">
                                    <div>
                                        <input type="text" name="Signature" id="" class="border-0 border-bottom responsive_input w-100">
                                        <div class="small_text">Signature</div>
                                    </div>
                                </div>
                            </div>

                            <div class="h4 fw-bold text-center pb-4">COMMONWEALTH OF MASSACHUSETTS</div>
                            <div class="small_text"><span>County of</span> <input type="text" name="County of" id="" class="border-0 border-bottom responsive_input w-50"> </div>
                            <div class="small_text py-3" style=" text-indent: 50px;">Then personally appeared the above <input type="text" name="and declared the" id="" class="border-0 border-bottom responsive_input w-25"> and declared the foregoing to be true and correct, before me this <input type="text" name="foregoing to be true and correct, before me this" class="border-0 border-bottom responsive_input"> day of <input type="text" name="day of" class="border-0 border-bottom responsive_input"></div>
                            <div class="row">
                                <div class="col-lg-6"></div>
                                <div class="col-lg-6  ">
                                <input type="text" name="Notary Public" class="border-0 border-bottom responsive_input w-100">
                                <div class="small_text text-center">Notary Public</div>
                            </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6"></div>
                                <div class="col-lg-6 d-flex d_sm_block ">
                                    My Commission Expires:<input type="text" name="My Commission Expires" class="border-0 border-bottom responsive_input" style="width:378px;">
                             </div>
                            </div>
                            <div class="pt-lg-5 pb-lg-2">
                                <b class="border-bottom">INSTRUCTIONS</b>: In any case where an attorney is appearing for a party, said attorney
MUST complete the Statement by Attorney.
                            </div>
                            <div class="mt-2 text-center"><b class="border-bottom">STATEMENT BY ATTORNEY</b></div>
                                <div class="py-1 small_text">
                                     I, the undersigned attorney, am admitted to practice law in the Commonwealth of Massachusetts-am admitted pro hoc vice for the purposes of this case-and am an officer of the court. As the attorney for the party on whose behalf this Financial Statement is submitted, I hereby state to the court that I have no knowledge that any of the information contained herein is false.
                                </div>
                                <div class="row small_text mb-lg-5">
                                    <div class="col-lg-4">Date <input type="Date_2" name="Date2" id="" class="border-0 border-bottom responsive_input" style="width:335px;"></div>
                                    <div class="col-lg-3"></div>
                                    <div class="col-lg-5">
                                        <div clas>
                                            <input type="text" name="Signature of attorney" id="" class="border-0 border-bottom w-100 responsive_input">
                                            <div class="small_text text-center">(Signature of attorney)</div>
                                        </div>

                                        <div class="pt-lg-2">
                                            <input type="text" name="Print name" id="" class="border-0 border-bottom w-100 responsive_input">
                                            <div class="small_text text-center">(Print name)</div>
                                        </div>
                                        <div class="pt-lg-2">
                                            <input type="text" name="Street address" id="" class="border-0 border-bottom w-100 responsive_input">
                                            <div class="small_text text-center">(Street address)</div>
                                        </div>
                                        <div class="d-flex d_sm_block pt-lg-1 small_text">

                                            <div class="">
                                                <input type="text" name="CityTown_5" id="" class="border-0 border-bottom responsive_input" style="width:203px;">
                                                <div class="text-center">(City/Town)</div>
                                            </div>
                                            <div class="ms-lg-3">
                                                <input type="text" name="State_5" id="" class="border-0 border-bottom responsive_input"  style="width:120px;">
                                                <div class="text-center">(State)</div>
                                            </div>
                                            <div class="ms-lg-3">
                                            <input type="text" name="Zip_3" id="" class="border-0 border-bottom responsive_input"style="width:120px;" >
                                                <div class="text-center">(Zip)</div>
                                            </div>
                                        </div>
                                        <div class="pt-lg-2">Tel. No.<input type="number" name="Tel No_2" id="" class="border-0 border-bottom responsive_input" style="width:424px;">
                                        <div class="pt-lg-2">B.B.O. #<input type="text" name="BBO" id="" class="border-0 border-bottom responsive_input" style="width:420px;">
                                        </div>
                                    </div>
                                 </div>

                        </div>
                            @include('layouts.footer22', ['page' => 9])
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
            <option value="#third_section">Third Section</option>
            <option value="#fourth_section">Fourth Section</option>
            <option value="#fifth_section">Fifth Section</option>
            <option value="#sixth_section">Sixth Section</option>
            <option value="#seventh_section">Seventh Section</option>
            <option value="#eighth_section">Eighth Section</option>
            <option value="#ninth_section">Ninth Section</option>
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
