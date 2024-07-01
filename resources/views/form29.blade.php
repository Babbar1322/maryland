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
    <div class="container-fluid   py-1 py-lg-3">
        <div class="container bg_color p-lg-3 p-1  ">
            <form action="{{ route('form24.submit') }}" method="post">
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
                                    <span>Name: </span>
                                    <input type="text"
                                        class="border-none border-0 border-bottom responsive_input shadow-none my-auto responsive_input"
                                        name="plaintiff_name">
                                </div>
                                <div class=" d_sm_block">
                                    <div class="fw-bold text-center  ">Commonwealth of Massachusetts <br>The Trial Court
                                        <br> Probate and Family Court Department <br> FINANCIAL STATEMENT
                                    </div>
                                </div>
                                <div class="d-flex d_sm_block  my-auto ">
                                    <span>Docket No.</span>
                                    <input type="text"
                                        class="border-none border-0 border-bottom responsive_input shadow-none my-auto responsive_input"
                                        name="plaintiff_name">
                                </div>
                            </div>
                            <div class="text-center">(Long form)</div>
                            <div><b>INSTRUCTIONS:</b> If your income is less than $75,000.00 annually, you must complete
                                the SHORT FORM financial statement, unless otherwise ordered by the court.</div>

                            <div class="d-flex d_sm_block justify-content-between">
                                <div class="w-75 responsive_input">
                                    <input type="text" name="" id=""
                                        class="border-0 border-bottom w-75 responsive_input">
                                    <div class="small_text text-center">Plaintiff/Petitioner</div>
                                </div>
                                <div> VS. </div>
                                <div class="w-75  responsive_input  text-end">
                                    <input type="text" name="" id=""
                                        class="border-0 border-bottom w-75  responsive_input ">
                                    <div class="small_text text-center">Plaintiff/Petitioner</div>
                                </div>
                            </div>
                        </div>

                        <div class="fw-bold pt-3">I. PERSONAL INFORMATION</div>
                        <div class="ps-lg-5">
                            <div class=" small_text">
                                <span>Your Name</span>
                                <span><input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input" style="width:754px;"> </span>
                                <span>Social Security No.</span>
                                <span><input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input"></span>
                            </div>

                            <div class="d-flex d_sm_block pt-lg-1 small_text">
                                <div>Address</div>
                                <div>
                                    <input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input" style="width:473px;">
                                    <div class="text-center">(Street address)</div>

                                </div>
                                <div class="ms-lg-3">
                                    <input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input" style="width:320px;">
                                    <div class="text-center">(City/Town)</div>
                                </div>
                                <div class="ms-lg-3">
                                    <input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input" style="width:120px;">
                                    <div class="text-center">(State)</div>
                                </div>
                                <div class="ms-lg-3">
                                    <input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input"style="width:120px;">
                                    <div class="text-center">(Zip)</div>
                                </div>
                            </div>
                            <div class="d-flex d_sm_block pt-lg-1 small_text">
                                <div>Tel. No.</div>
                                <div> <input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input"style="width:332px;"></div>
                                <div>Date of Birth</div>
                                <div> <input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input"style="width:332px;"></div>
                                <div>No. of children living with you</div>
                                <div> <input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input"style="width:135px;"></div>
                            </div>
                            <div class="d-flex d_sm_block pt-lg-1 small_text">
                                <div>Occupation</div>
                                <div> <input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input"style="width:430px;"></div>
                                <div>Employer</div>
                                <div> <input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input"style="width:568px;"></div>
                            </div>

                            <div class="d-flex d_sm_block pt-lg-1 small_text">
                                <div>Employer's Address</div>
                                <div>
                                    <input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input" style="width:400px;">
                                    <div class="text-center">(Street address)</div>

                                </div>
                                <div class="ms-lg-3">
                                    <input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input" style="width:312px;">
                                    <div class="text-center">(City/Town)</div>
                                </div>
                                <div class="ms-lg-3">
                                    <input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input" style="width:120px;">
                                    <div class="text-center">(State)</div>
                                </div>
                                <div class="ms-lg-3">
                                    <input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input"style="width:120px;">
                                    <div class="text-center">(Zip)</div>
                                </div>
                            </div>

                            <div class="d-flex d_sm_block pt-lg-1 small_text">
                                <div>Tel. No.</div>
                                <div><input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input" style="width:708px"></div>
                                <div>Do you have health insurance coverage?</div>
                                <div><input type="checkbox" name="" id="" class="mx-2">
                                    <span>Yes</span>
                                </div>
                                <div><input type="checkbox" name="" id="" class="mx-2">
                                    <span>No</span>
                                </div>
                            </div>

                            <div class="d-flex d_sm_block pt-lg-1 small_text">
                                <div>if yes, name of health insurance provider</div>
                                <div><input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input" style="width:862px"></div>

                            </div>
                        </div>
                        <div class="fw-bold pt-3"> II. GROSS WEEKLY INCOME/RECEIPTS FROM ALL SOURCES</div>
                        <div class="ps-lg-5 pt-lg-1 small_text">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div> a) Base pay from <input type="checkbox" name="" class="mx-1"
                                            id=""> <span>Salary</span> <input type="checkbox" name=""
                                            class="mx-1" id=""> <span>Wages</span></div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>
                                        <div class="responsive_input"><input type="number" name=""
                                                class="border-0 border-bottom responsive_input"></div>
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
                                        <div class="responsive_input"><input type="number" name=""
                                                class="border-0 border-bottom responsive_input"></div>
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
                                        <div class="responsive_input"><input type="number" name=""
                                                class="border-0 border-bottom responsive_input"></div>
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
                                        <div class="responsive_input"><input type="number" name=""
                                                class="border-0 border-bottom responsive_input"></div>
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
                                        <div class="responsive_input"><input type="number" name=""
                                                class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-8">
                                    <div> f) <input type="checkbox" name="" id="" class="ms-lg-3">
                                        <span>Commissions</span>
                                        <input type="checkbox" name="" class="ms-lg-2" id="">
                                        <span>Bonuses</span>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>
                                        <div class="responsive_input"><input type="number" name=""
                                                class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-8">
                                    <div> g) <input type="checkbox" name="" id="" class="ms-lg-3">
                                        <span>Dividends</span>
                                        <input type="checkbox" name="" class="ms-lg-4" id="">
                                        <span>Interest</span>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>
                                        <div class="responsive_input"><input type="number" name=""
                                                class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-8">
                                    <div> h) <input type="checkbox" name="" id="" class="ms-lg-3">
                                        <span>Trusts</span>
                                        <input type="checkbox" name="" class="ms-lg-5" id="">
                                        <span>Annuities</span>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>
                                        <div class="responsive_input"><input type="number" name=""
                                                class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-8">
                                    <div> i) <input type="checkbox" name="" id="" class="ms-lg-3">
                                        <span>Pensions</span>
                                        <input type="checkbox" name="" class="ms-lg-4" id="">
                                        <span>Retirement funds</span>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>
                                        <div class="responsive_input"><input type="number" name=""
                                                class="border-0 border-bottom responsive_input"></div>
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
                                        <div class="responsive_input"><input type="number" name=""
                                                class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="d-flex d_sm_block"> k) <input type="checkbox" name=""
                                            id="" class="ms-lg-3 me-1">
                                        <span>Disability</span>
                                        <input type="checkbox" name="" id="" class="ms-lg-3 me-1">
                                        <span> Unemployment insurance</span>
                                        <input type="checkbox" name="" id="" class="ms-lg-3 me-1">
                                        <span> Worker's compensation</span>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>
                                        <div class="responsive_input"><input type="number" name=""
                                                class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="d-flex d_sm_block">l) Public Assistance (e.g. welfare, TAFDC, SNAP)
                                        (not included in gross income for child support)</div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>
                                        <div class="responsive_input"><input type="number" name=""
                                                class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="d-flex d_sm_block"> m) <input type="checkbox" name=""
                                            id="" class="ms-lg-3 me-1">
                                        <span>Child Support</span>
                                        <input type="checkbox" name="" id="" class="ms-lg-3 me-1">
                                        <span> Alimony (actually received)</span>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>
                                        <div class="responsive_input"><input type="number" name=""
                                                class="border-0 border-bottom responsive_input"></div>
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
                                        <div class="responsive_input"><input type="number" name=""
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
                                        <div class="responsive_input"><input type="number" name=""
                                                class="border-0 border-bottom responsive_input"></div>
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
                                        <div class="responsive_input"><input type="number" name=""
                                                class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="d-flex d_sm_block">q) Other (specify)</div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>
                                        <div class="responsive_input"><input type="number" name=""
                                                class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-8 ps-lg-5">
                                    <div><input type="number" name=""
                                            class="border-0 border-bottom responsive_input w-75"></div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>
                                        <div class="responsive_input"><input type="number" name=""
                                                class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-8 ps-lg-5">
                                    <div><input type="number" name=""
                                            class="border-0 border-bottom responsive_input w-75"></div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>
                                        <div class="responsive_input"><input type="number" name=""
                                                class="border-0 border-bottom responsive_input"></div>
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
                                        <div class="responsive_input"><input type="number" name=""
                                                class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @include('layouts.footer22', ['page' => 1])
                </section>
                <section class="section_area p-5" id="second_section">

                    <div class="row">
                        <div class=" ">
                            <div class="d-flex d_sm_block justify-content-between">
                                <div class="d-flex d_sm_block my-auto">
                                    <span>Name: </span>
                                    <input type="text"
                                        class="border-none border-0 border-bottom responsive_input shadow-none my-auto responsive_input"
                                        name="plaintiff_name">
                                </div>
                                <div class=" d_sm_block">
                                    <div class="fw-bold text-center  ">Commonwealth of Massachusetts <br>The Trial
                                        Court <br> Probate and Family Court Department <br> FINANCIAL STATEMENT </div>
                                </div>
                                <div class="d-flex d_sm_block  my-auto ">
                                    <span>Docket No.</span>
                                    <input type="text"
                                        class="border-none border-0 border-bottom responsive_input shadow-none my-auto responsive_input"
                                        name="plaintiff_name">
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
                                                    name="" class="border-0 border-bottom responsive_input"
                                                    id=""> </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="d-flex justify-content-md-end">
                                                <div>$</div>
                                                <div class="responsive_input"><input type="number" name=""
                                                        class="border-0 border-bottom responsive_input"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div> b) State tax witholding/estimated payments <br>
                                                Number of withholding allowances claimed<input type="text"
                                                    name="" class="border-0 border-bottom responsive_input"
                                                    id=""> </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="d-flex justify-content-md-end">
                                                <div>$</div>
                                                <div class="responsive_input"><input type="number" name=""
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
                                                <div class="responsive_input"><input type="number" name=""
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
                                                <div class="responsive_input"><input type="number" name=""
                                                        class="border-0 border-bottom responsive_input"></div>
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
                                                <div class="responsive_input"><input type="number" name=""
                                                        class="border-0 border-bottom responsive_input"></div>
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
                                                <div class="responsive_input"><input type="number" name=""
                                                        class="border-0 border-bottom responsive_input"></div>
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
                                                <div class="responsive_input"><input type="number" name=""
                                                        class="border-0 border-bottom responsive_input"></div>
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
                                                <div class="responsive_input"><input type="number" name=""
                                                        class="border-0 border-bottom responsive_input"></div>
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
                                                <div class="responsive_input"><input type="number" name=""
                                                        class="border-0 border-bottom responsive_input"></div>
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
                                                <div class="responsive_input"><input type="number" name=""
                                                        class="border-0 border-bottom responsive_input"></div>
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
                                                <div class="responsive_input"><input type="number" name=""
                                                        class="border-0 border-bottom responsive_input"></div>
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
                                                <div class="responsive_input"><input type="number" name=""
                                                        class="border-0 border-bottom responsive_input"></div>
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
                                                <div class="responsive_input"><input type="number" name=""
                                                        class="border-0 border-bottom responsive_input"></div>
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
                                                <div class="responsive_input"><input type="number" name=""
                                                        class="border-0 border-bottom responsive_input"></div>
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
                                                <div class="responsive_input"><input type="number" name=""
                                                        class="border-0 border-bottom responsive_input"></div>
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
                                                <div class="responsive_input"><input type="number" name=""
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
                                                <div class="responsive_input"><input type="number" name=""
                                                        class="border-0 border-bottom responsive_input"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div>r) Other (specify) <input type="text" name=""
                                                    id=""
                                                    class="border-0 border-bottom responsive_input w-50"></div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="d-flex justify-content-md-end">
                                                <div>$</div>
                                                <div class="responsive_input"><input type="number" name=""
                                                        class="border-0 border-bottom responsive_input"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div> <input type="text" name="" id=""
                                                    class="border-0 border-bottom responsive_input w-75"></div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="d-flex justify-content-md-end">
                                                <div>$</div>
                                                <div class="responsive_input"><input type="number" name=""
                                                        class="border-0 border-bottom responsive_input"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div> <input type="text" name="" id=""
                                                    class="border-0 border-bottom responsive_input w-75"></div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="d-flex justify-content-md-end">
                                                <div>$</div>
                                                <div class="responsive_input"><input type="number" name=""
                                                        class="border-0 border-bottom responsive_input"></div>
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
                                                <div class="responsive_input"><input type="number" name=""
                                                        class="border-0 border-bottom responsive_input"></div>
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
                                            <div class="responsive_input"><input type="number" name=""
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
                                            <div class="responsive_input"><input type="number" name=""
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
                                            <div class="responsive_input"><input type="number" name=""
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
                                            <div class="responsive_input"><input type="number" name=""
                                                    class="border-0 border-bottom responsive_input"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row  ps-lg-3 small_text">
                                    <div class="col-lg-8 ps-lg-5">
                                        <div>Number of years you have paid into Social Security <input type="number"
                                                name="" class="border-0 border-bottom responsive_input"></div>
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
                                    <span>Name: </span>
                                    <input type="text"
                                        class="border-none border-0 border-bottom responsive_input shadow-none my-auto responsive_input"
                                        name="plaintiff_name">
                                </div>
                                <div class=" d_sm_block">
                                    <div class="fw-bold text-center">Commonwealth of Massachusetts <br>The Trial Court
                                        <br> Probate and Family Court Department <br> FINANCIAL STATEMENT </div>
                                </div>
                                <div class="d-flex d_sm_block  my-auto">
                                    <span>Docket No.</span>
                                    <input type="text"
                                        class="border-none border-0 border-bottom responsive_input shadow-none my-auto responsive_input"
                                        name="plaintiff_name">
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
                                        <div class="responsive_input"><input type="number" name=""
                                                class="border-0 border-bottom responsive_input"></div>
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
                                        <div class="responsive_input"><input type="number" name=""
                                                class="border-0 border-bottom responsive_input"></div>
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
                                        <div class="responsive_input"><input type="number" name=""
                                                class="border-0 border-bottom responsive_input"></div>
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
                                        <div class="responsive_input"><input type="number" name=""
                                                class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="row small_text">
                                <div class="col-lg-8">
                                    <div><input type="checkbox" name="" id=""> Maintenance Fees
                                        <input type="checkbox" name="" class="ms-lg-4" id="">
                                        Condominium Fees </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>
                                        <div class="responsive_input"><input type="number" name=""
                                                class="border-0 border-bottom responsive_input"></div>
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
                                        <div class="responsive_input"><input type="number" name=""
                                                class="border-0 border-bottom responsive_input"></div>
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
                                        <div class="responsive_input"><input type="number" name=""
                                                class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>


                            <div class="row small_text">
                                <div class="col-lg-8">
                                    <div><input type="checkbox" name="" id=""> Propane <input
                                            type="checkbox" name="" class="ms-lg-5" id=""> Natural
                                        Gas </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>
                                        <div class="responsive_input"><input type="number" name=""
                                                class="border-0 border-bottom responsive_input"></div>
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
                                        <div class="responsive_input"><input type="number" name=""
                                                class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>



                            <div class="row small_text">
                                <div class="col-lg-8">
                                    <div><input type="checkbox" name="" id=""> Water <input
                                            type="checkbox" name="" class="ms-lg-5" id=""> Sewer
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>
                                        <div class="responsive_input"><input type="number" name=""
                                                class="border-0 border-bottom responsive_input"></div>
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
                                        <div class="responsive_input"><input type="number" name=""
                                                class="border-0 border-bottom responsive_input"></div>
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
                                        <div class="responsive_input"><input type="number" name=""
                                                class="border-0 border-bottom responsive_input"></div>
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
                                        <div class="responsive_input"><input type="number" name=""
                                                class="border-0 border-bottom responsive_input"></div>
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
                                        <div class="responsive_input"><input type="number" name=""
                                                class="border-0 border-bottom responsive_input"></div>
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
                                        <div class="responsive_input"><input type="number" name=""
                                                class="border-0 border-bottom responsive_input"></div>
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
                                        <div class="responsive_input"><input type="number" name=""
                                                class="border-0 border-bottom responsive_input"></div>
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
                                        <div class="responsive_input"><input type="number" name=""
                                                class="border-0 border-bottom responsive_input"></div>
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
                                        <div class="responsive_input"><input type="number" name=""
                                                class="border-0 border-bottom responsive_input"></div>
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
                                        <div class="responsive_input"><input type="number" name=""
                                                class="border-0 border-bottom responsive_input"></div>
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
                                        <div class="responsive_input"><input type="number" name=""
                                                class="border-0 border-bottom responsive_input"></div>
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
                                        <div class="responsive_input"><input type="number" name=""
                                                class="border-0 border-bottom responsive_input"></div>
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
                                        <div class="responsive_input"><input type="number" name=""
                                                class="border-0 border-bottom responsive_input"></div>
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
                                        <div class="responsive_input"><input type="number" name=""
                                                class="border-0 border-bottom responsive_input"></div>
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
                                        <div class="responsive_input"><input type="number" name=""
                                                class="border-0 border-bottom responsive_input"></div>
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
                                        <div class="responsive_input"><input type="number" name=""
                                                class="border-0 border-bottom responsive_input"></div>
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
                                        <div class="responsive_input"><input type="number" name=""
                                                class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row small_text ">
                                <div class="col-lg-8">
                                    <div>Entertainment</div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>
                                        <div class="responsive_input"><input type="number" name=""
                                                class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="row small_text ">
                                <div class="col-lg-8">
                                    <div>Vacation</div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>
                                        <div class="responsive_input"><input type="number" name=""
                                                class="border-0 border-bottom responsive_input"></div>
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
                                        <div class="responsive_input"><input type="number" name=""
                                                class="border-0 border-bottom responsive_input"></div>
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
                                        <div class="responsive_input"><input type="number" name=""
                                                class="border-0 border-bottom responsive_input"></div>
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
                                        <div class="responsive_input"><input type="number" name=""
                                                class="border-0 border-bottom responsive_input"></div>
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
                                        <div class="responsive_input"><input type="number" name=""
                                                class="border-0 border-bottom responsive_input"></div>
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
                                        <div class="responsive_input"><input type="number" name=""
                                                class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>

                            @include('layouts.footer22', ['page' => 3])
                        </div>
                    </div>
                </section>
                <section class="section_area p-5" id="fourth_section">

                    <div class="row">
                        <div class=" ">
                            <div class="d-flex d_sm_block justify-content-between">
                                <div class="d-flex d_sm_block my-auto">
                                    <span>Name: </span>
                                    <input type="text"
                                        class="border-none border-0 border-bottom responsive_input shadow-none my-auto responsive_input"
                                        name="plaintiff_name">
                                </div>
                                <div class=" d_sm_block">
                                    <div class="fw-bold text-center">Commonwealth of Massachusetts <br>The Trial Court
                                        <br> Probate and Family Court Department <br> FINANCIAL STATEMENT </div>
                                </div>
                                <div class="d-flex d_sm_block  my-auto">
                                    <span>Docket No.</span>
                                    <input type="text"
                                        class="border-none border-0 border-bottom responsive_input shadow-none my-auto responsive_input"
                                        name="plaintiff_name">
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
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>
                                        <div class="responsive_input"><input type="number" name=""
                                                class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="row small_text ps-lg-4">
                                <div class="col-lg-8">
                                    <div>Uniforms</div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>
                                        <div class="responsive_input"><input type="number" name=""
                                                class="border-0 border-bottom responsive_input"></div>
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
                                        <div class="responsive_input"><input type="number" name=""
                                                class="border-0 border-bottom responsive_input"></div>
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
                                        <div class="responsive_input"><input type="number" name=""
                                                class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="row small_text ps-lg-4">
                                <div class="col-lg-8">
                                    <div>Other (specify) <input type="text" name="" id=""
                                            class="border-0 border-bottom"></div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>
                                        <div class="responsive_input"><input type="number" name=""
                                                class="border-0 border-bottom responsive_input"></div>
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
                                        <div class="responsive_input"><input type="number" name=""
                                                class="border-0 border-bottom responsive_input"></div>
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
                                        <div class="responsive_input"><input type="number" name=""
                                                class="border-0 border-bottom responsive_input"></div>
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
                                        <div class="responsive_input"><input type="number" name=""
                                                class="border-0 border-bottom responsive_input"></div>
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
                                        <div class="responsive_input"><input type="number" name=""
                                                class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="row small_text">
                                <div class="col-lg-8">
                                    <div>Other (specify) <input type="text" name="" id=""
                                            class="border-0 border-bottom"></div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>
                                        <div class="responsive_input"><input type="number" name=""
                                                class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="row small_text">
                                <div class="col-lg-8">
                                    <div> <input type="text" name="" id=""
                                            class="border-0 border-bottom"></div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>
                                        <div class="responsive_input"><input type="number" name=""
                                                class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="row small_text">
                                <div class="col-lg-8">
                                    <div> <input type="text" name="" id=""
                                            class="border-0 border-bottom"></div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>
                                        <div class="responsive_input"><input type="number" name=""
                                                class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="row small_text">
                                <div class="col-lg-8">
                                    <div> <input type="text" name="" id=""
                                            class="border-0 border-bottom"></div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>
                                        <div class="responsive_input"><input type="number" name=""
                                                class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="row small_text my-lg-4">
                                <div class="col-lg-8 fw-bold">
                                    <div>TOTAL WEEKLY EXPENSES NOT DEDUCTED FROM PAY</div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>
                                        <div class="responsive_input"><input type="number" name=""
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
                                    <div>$</div><input type="number" name=""
                                        class="border-0 border-bottom responsive_input">
                                </div>
                            </div>
                            <div class="d-flex justify-content-between d_sm_block ">
                                <div> Legal fees incurred, to date, against retainer(s)</div>
                                <div class="d-flex">
                                    <div>$</div><input type="number" name=""
                                        class="border-0 border-bottom responsive_input">
                                </div>
                            </div>
                            <div class="d-flex justify-content-between d_sm_block ">
                                <div> Anticipated range of total legal expense to litigate this action</div>
                                <div class="d-flex">
                                    <div>$</div><input type="number" name=""
                                        class="border-0 border-bottom responsive_input me-2"> to <div
                                        class="ms-2">$</div><input type="number" name=""
                                        class="border-0 border-bottom responsive_input ">
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
                                    <input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input" style="width:473px;">
                                    <div class="text-center">(Street address)</div>

                                </div>
                                <div class="ms-lg-3">
                                    <input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input" style="width:380px;">
                                    <div class="text-center">(City/Town)</div>
                                </div>
                                <div class="ms-lg-3">
                                    <input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input" style="width:180px;">
                                    <div class="text-center">(State)</div>
                                </div>
                            </div>
                            <div class="d-flex d_sm_block pt-lg-1 small_text">
                                <div>Title held in the name of</div>
                                <div>
                                    <input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input" style="width:473px;">

                                </div>

                            </div>
                            <div class="row small_text">
                                <div class="col-lg-4">
                                    Purchase Price of the Property
                                </div>
                                <div class="col-lg-1    ">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>
                                        <div class="responsive_input"><input type="number" name=""
                                                class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="row small_text">
                                <div class="col-lg-4">Year of Purchase </div>
                                <div class="col-lg-1">
                                    <div class="d-flex justify-content-md-end">
                                        <div class="responsive_input"><input type="number" name=""
                                                class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="row small_text">
                                <div class="col-lg-4">Current Assessed Value of the Property</div>
                                <div class="col-lg-1">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>

                                        <div class="responsive_input"><input type="number" name=""
                                                class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row small_text">
                                <div class="col-lg-4">Date of Last Assessment</div>
                                <div class="col-lg-1">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>

                                        <div class="responsive_input"><input type="number" name=""
                                                class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row small_text">
                                <div class="col-lg-8">Fair Market Value of the Property</div>
                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>

                                        <div class="responsive_input"><input type="number" name=""
                                                class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row small_text">
                                <div class="col-lg-8">Outstanding 1st mortgage</div>
                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>- $</div>

                                        <div class="responsive_input"><input type="number" name=""
                                                class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row small_text">
                                <div class="col-lg-8">Outstanding 2nd mortgage or home equity loan</div>
                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>- $</div>

                                        <div class="responsive_input"><input type="number" name=""
                                                class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row small_text">
                                <div class="col-lg-8">Equity</div>
                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>= $</div>

                                        <div class="responsive_input"><input type="number" name=""
                                                class="border-0 border-bottom responsive_input"></div>
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
                                    <span>Name: </span>
                                    <input type="text"
                                        class="border-none border-0 border-bottom responsive_input shadow-none my-auto responsive_input"
                                        name="plaintiff_name">
                                </div>
                                <div class=" d_sm_block">
                                    <div class="fw-bold text-center">Commonwealth of Massachusetts <br>The Trial Court
                                        <br> Probate and Family Court Department <br> FINANCIAL STATEMENT </div>
                                </div>
                                <div class="d-flex d_sm_block  my-auto">
                                    <span>Docket No.</span>
                                    <input type="text"
                                        class="border-none border-0 border-bottom responsive_input shadow-none my-auto responsive_input"
                                        name="plaintiff_name">
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
                                    <input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input" style="width:473px;">
                                    <div class="text-center">(Street address)</div>

                                </div>
                                <div class="ms-lg-3">
                                    <input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input" style="width:380px;">
                                    <div class="text-center">(City/Town)</div>
                                </div>
                                <div class="ms-lg-3">
                                    <input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input" style="width:180px;">
                                    <div class="text-center">(State)</div>
                                </div>
                            </div>
                            <div class="d-flex d_sm_block pt-lg-1 small_text">
                                <div>Title held in the name of</div>
                                <div>
                                    <input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input" style="width:473px;">

                                </div>

                            </div>
                            <div class="row small_text">
                                <div class="col-lg-4">
                                    Purchase Price of the Property
                                </div>
                                <div class="col-lg-1    ">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>
                                        <div class="responsive_input"><input type="number" name=""
                                                class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="row small_text">
                                <div class="col-lg-4">Year of Purchase </div>
                                <div class="col-lg-1">
                                    <div class="d-flex justify-content-md-end">
                                        <div class="responsive_input"><input type="number" name=""
                                                class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="row small_text">
                                <div class="col-lg-4">Current Assessed Value of the Property</div>
                                <div class="col-lg-1">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>

                                        <div class="responsive_input"><input type="number" name=""
                                                class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row small_text">
                                <div class="col-lg-4">Date of Last Assessment</div>
                                <div class="col-lg-1">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>

                                        <div class="responsive_input"><input type="number" name=""
                                                class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row small_text">
                                <div class="col-lg-8">Fair Market Value of the Property</div>
                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>

                                        <div class="responsive_input"><input type="number" name=""
                                                class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row small_text">
                                <div class="col-lg-8">Outstanding 1st mortgage</div>
                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>- $</div>

                                        <div class="responsive_input"><input type="number" name=""
                                                class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row small_text">
                                <div class="col-lg-8">Outstanding 2nd mortgage or home equity loan</div>
                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>- $</div>

                                        <div class="responsive_input"><input type="number" name=""
                                                class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row small_text">
                                <div class="col-lg-8">Equity</div>
                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>= $</div>

                                        <div class="responsive_input"><input type="number" name=""
                                                class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="">B. <span class="border-bottom border-dark">MOTOR VEHICLES </span>
                            including cars, trucks, ATV's, snowmobiles, tractors,
                            motorcycles, boats, recreational vehicles, aircraft, farm machinery etc.</div>
                        <div class="ps-lg-5 small_text">
                            <div>Type <input type="text" name="" id=""
                                    class="border-0 border-bottom responsive_input"></div>
                            <div>Make <input type="text" name="" id=""
                                    class="border-0 border-bottom responsive_input"> </div>
                            <div>Model <input type="text" name="" id=""
                                    class="border-0 border-bottom responsive_input"></div>
                            <div> Purchase Price of Vehicle $ <input type="text" name="" id=""
                                    class="border-0 border-bottom responsive_input"></div>
                            <div>Year of Purchase <input type="text" name="" id=""
                                    class="border-0 border-bottom responsive_input"></div>
                            <div class="row">
                                <div class="col-lg-8">Fair Market Value</div>
                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>
                                        <div class="responsive_input"><input type="text" name=""
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
                                        <div class="responsive_input"><input type="text" name=""
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
                                        <div class="responsive_input"><input type="text" name=""
                                                id="" class="border-0 border-bottom responsive_input">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>Type <input type="text" name="" id=""
                                class="border-0 border-bottom responsive_input"></div>
                        <div>Make <input type="text" name="" id=""
                                class="border-0 border-bottom responsive_input"> </div>
                        <div>Model <input type="text" name="" id=""
                                class="border-0 border-bottom responsive_input"></div>
                        <div> Purchase Price of Vehicle $ <input type="text" name="" id=""
                                class="border-0 border-bottom responsive_input"></div>
                        <div>Year of Purchase <input type="text" name="" id=""
                                class="border-0 border-bottom responsive_input"></div>
                                <div class="row">
                                    <div class="col-lg-8">Fair Market Value</div>
                                    <div class="col-lg-4">
                                        <div class="d-flex justify-content-md-end">
                                            <div>$</div>
                                            <div class="responsive_input"><input type="text" name=""
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
                                            <div class="responsive_input"><input type="text" name=""
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
                                            <div class="responsive_input"><input type="text" name=""
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
                                            <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                            <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                            <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                            <td class="border border-dark"><div class="d-flex">$<input type="text" name="" id="" class="border-0 w-100"></div></td>
                                        </tr>
                                        <tr>
                                            <td class="border border-dark">Defined Contribution Plan</td>
                                            <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                            <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                            <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                            <td class="border border-dark"><div class="d-flex">$<input type="text" name="" id="" class="border-0 w-100"></div></td>
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
                                    <span>Name: </span>
                                    <input type="text"
                                        class="border-none border-0 border-bottom responsive_input shadow-none my-auto responsive_input"
                                        name="plaintiff_name">
                                </div>
                                <div class=" d_sm_block">
                                    <div class="fw-bold text-center">Commonwealth of Massachusetts <br>The Trial Court
                                        <br> Probate and Family Court Department <br> FINANCIAL STATEMENT </div>
                                </div>
                                <div class="d-flex d_sm_block  my-auto">
                                    <span>Docket No.</span>
                                    <input type="text"
                                        class="border-none border-0 border-bottom responsive_input shadow-none my-auto responsive_input"
                                        name="plaintiff_name">
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
                                            <td rowspan="2" class="border border-dark align-content-around">Defined Benefit Plan</td>
                                            <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                            <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                            <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                            <td class="border border-dark"><div class="d-flex">$<input type="text" name="" id="" class="border-0 w-100"></div></td>
                                        </tr>
                                        <tr class=" border_3">
                                             <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                            <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                            <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                            <td class="border border-dark"><div class="d-flex">$<input type="text" name="" id="" class="border-0 w-100"></div></td>
                                        </tr>

                                        <tr>
                                            <td rowspan="2" class="border border-dark align-content-around">Savings Account(s)</td>
                                            <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                            <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                            <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                            <td class="border border-dark"><div class="d-flex">$<input type="text" name="" id="" class="border-0 w-100"></div></td>
                                        </tr>
                                        <tr class=" border_3">
                                             <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                            <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                            <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                            <td class="border border-dark"><div class="d-flex">$<input type="text" name="" id="" class="border-0 w-100"></div></td>
                                        </tr>


                                        <tr class=" border_3">
                                            <td class="border border-dark">Cash on Hand</td>
                                            <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                            <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                            <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                            <td class="border border-dark"><div class="d-flex">$<input type="text" name="" id="" class="border-0 w-100"></div></td>
                                        </tr>

                                                                                <tr>
                                                                                    <td rowspan="2" class="border border-dark align-content-around">Certificate(s) of Deposit</td>
                                                                                    <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><div class="d-flex">$<input type="text" name="" id="" class="border-0 w-100"></div></td>
                                                                                </tr>
                                                                                <tr class=" border_3">
                                                                                     <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><div class="d-flex">$<input type="text" name="" id="" class="border-0 w-100"></div></td>
                                                                                </tr>

                                                                                <tr>
                                                                                    <td rowspan="2" class="border border-dark align-content-around">Credit Union Account(s)</td>
                                                                                    <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><div class="d-flex">$<input type="text" name="" id="" class="border-0 w-100"></div></td>
                                                                                </tr>
                                                                                <tr class=" border_3">
                                                                                     <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><div class="d-flex">$<input type="text" name="" id="" class="border-0 w-100"></div></td>
                                                                                </tr>

                                                                                <tr>
                                                                                    <td rowspan="2" class="border border-dark align-content-around">Funds Held in Escrow</td>
                                                                                    <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><div class="d-flex">$<input type="text" name="" id="" class="border-0 w-100"></div></td>
                                                                                </tr>
                                                                                <tr class=" border_3">
                                                                                     <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><div class="d-flex">$<input type="text" name="" id="" class="border-0 w-100"></div></td>
                                                                                </tr>

                                                                                <tr>
                                                                                    <td rowspan="2" class="border border-dark align-content-around">Stocks</td>
                                                                                    <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><div class="d-flex">$<input type="text" name="" id="" class="border-0 w-100"></div></td>
                                                                                </tr>
                                                                                <tr class=" border_3">
                                                                                     <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><div class="d-flex">$<input type="text" name="" id="" class="border-0 w-100"></div></td>
                                                                                </tr>

                                                                                <tr>
                                                                                    <td rowspan="2" class="border border-dark align-content-around">Bonds</td>
                                                                                    <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><div class="d-flex">$<input type="text" name="" id="" class="border-0 w-100"></div></td>
                                                                                </tr>
                                                                                <tr class=" border_3">
                                                                                     <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><div class="d-flex">$<input type="text" name="" id="" class="border-0 w-100"></div></td>
                                                                                </tr>

                                                                                <tr>
                                                                                    <td rowspan="2" class="border border-dark align-content-around">Bond Fund(s)</td>
                                                                                    <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><div class="d-flex">$<input type="text" name="" id="" class="border-0 w-100"></div></td>
                                                                                </tr>
                                                                                <tr class=" border_3">
                                                                                     <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><div class="d-flex">$<input type="text" name="" id="" class="border-0 w-100"></div></td>
                                                                                </tr>

                                                                                <tr>
                                                                                    <td rowspan="2" class="border border-dark align-content-around">Notes Held</td>
                                                                                    <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><div class="d-flex">$<input type="text" name="" id="" class="border-0 w-100"></div></td>
                                                                                </tr>
                                                                                <tr class=" border_3">
                                                                                     <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><div class="d-flex">$<input type="text" name="" id="" class="border-0 w-100"></div></td>
                                                                                </tr>

                                                                                <tr>
                                                                                    <td rowspan="2" class="border border-dark align-content-around">Cash in Brokerage Account(s)</td>
                                                                                    <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><div class="d-flex">$<input type="text" name="" id="" class="border-0 w-100"></div></td>
                                                                                </tr>
                                                                                <tr class=" border_3">
                                                                                     <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><div class="d-flex">$<input type="text" name="" id="" class="border-0 w-100"></div></td>
                                                                                </tr>

                                                                                <tr>
                                                                                    <td rowspan="2" class="border border-dark align-content-around">Money Market Account(s)</td>
                                                                                    <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><div class="d-flex">$<input type="text" name="" id="" class="border-0 w-100"></div></td>
                                                                                </tr>
                                                                                <tr class=" border_3">
                                                                                     <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><div class="d-flex">$<input type="text" name="" id="" class="border-0 w-100"></div></td>
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
                                    <span>Name: </span>
                                    <input type="text"
                                        class="border-none border-0 border-bottom responsive_input shadow-none my-auto responsive_input"
                                        name="plaintiff_name">
                                </div>
                                <div class=" d_sm_block">
                                    <div class="fw-bold text-center">Commonwealth of Massachusetts <br>The Trial Court
                                        <br> Probate and Family Court Department <br> FINANCIAL STATEMENT </div>
                                </div>
                                <div class="d-flex d_sm_block  my-auto">
                                    <span>Docket No.</span>
                                    <input type="text"
                                        class="border-none border-0 border-bottom responsive_input shadow-none my-auto responsive_input"
                                        name="plaintiff_name">
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
                                            <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                            <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                            <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                            <td class="border border-dark"><div class="d-flex">$<input type="text" name="" id="" class="border-0 w-100"></div></td>
                                        </tr>
                                        <tr class=" border_3">
                                             <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                            <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                            <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                            <td class="border border-dark"><div class="d-flex">$<input type="text" name="" id="" class="border-0 w-100"></div></td>
                                        </tr>

                                        <tr>
                                            <td rowspan="2" class="border border-dark align-content-around">IRAs</td>
                                            <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                            <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                            <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                            <td class="border border-dark"><div class="d-flex">$<input type="text" name="" id="" class="border-0 w-100"></div></td>
                                        </tr>
                                        <tr class=" border_3">
                                             <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                            <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                            <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                            <td class="border border-dark"><div class="d-flex">$<input type="text" name="" id="" class="border-0 w-100"></div></td>
                                        </tr>

{{--
                                        <tr class=" border_3">
                                            <td class="border border-dark">Cash on Hand</td>
                                            <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                            <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                            <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                            <td class="border border-dark"><div class="d-flex">$<input type="text" name="" id="" class="border-0 w-100"></div></td>
                                        </tr> --}}

                                                                                <tr>
                                                                                    <td rowspan="2" class="border border-dark align-content-around">Keough</td>
                                                                                    <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><div class="d-flex">$<input type="text" name="" id="" class="border-0 w-100"></div></td>
                                                                                </tr>
                                                                                <tr class=" border_3">
                                                                                     <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><div class="d-flex">$<input type="text" name="" id="" class="border-0 w-100"></div></td>
                                                                                </tr>

                                                                                <tr>
                                                                                    <td rowspan="2" class="border border-dark align-content-around">Profit Sharing</td>
                                                                                    <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><div class="d-flex">$<input type="text" name="" id="" class="border-0 w-100"></div></td>
                                                                                </tr>
                                                                                <tr class=" border_3">
                                                                                     <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><div class="d-flex">$<input type="text" name="" id="" class="border-0 w-100"></div></td>
                                                                                </tr>

                                                                                <tr>
                                                                                    <td rowspan="2" class="border border-dark align-content-around">Deferred Compensation</td>
                                                                                    <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><div class="d-flex">$<input type="text" name="" id="" class="border-0 w-100"></div></td>
                                                                                </tr>
                                                                                <tr class=" border_3">
                                                                                     <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><div class="d-flex">$<input type="text" name="" id="" class="border-0 w-100"></div></td>
                                                                                </tr>

                                                                                <tr>
                                                                                    <td rowspan="2" class="border border-dark align-content-around">Other Retirement Plans</td>
                                                                                    <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><div class="d-flex">$<input type="text" name="" id="" class="border-0 w-100"></div></td>
                                                                                </tr>
                                                                                <tr class=" border_3">
                                                                                     <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><div class="d-flex">$<input type="text" name="" id="" class="border-0 w-100"></div></td>
                                                                                </tr>

                                                                                <tr>
                                                                                    <td rowspan="2" class="border border-dark align-content-around">Annuity <small>(please specify whether a tax deferred annuity or a tax sheltered annuity)</small></td>
                                                                                    <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><div class="d-flex">$<input type="text" name="" id="" class="border-0 w-100"></div></td>
                                                                                </tr>
                                                                                <tr class=" border_3">
                                                                                     <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><div class="d-flex">$<input type="text" name="" id="" class="border-0 w-100"></div></td>
                                                                                </tr>

                                                                                <tr>
                                                                                    <td rowspan="2" class="border border-dark align-content-around">Life Insurance Cash Value <small>(please specify whether a term or a whole universal life insurance policy)</small></td>
                                                                                    <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><div class="d-flex">$<input type="text" name="" id="" class="border-0 w-100"></div></td>
                                                                                </tr>
                                                                                <tr class=" border_3">
                                                                                     <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><div class="d-flex">$<input type="text" name="" id="" class="border-0 w-100"></div></td>
                                                                                </tr>

                                                                                <tr>
                                                                                    <td rowspan="2" class="border border-dark align-content-around">Judgments/Liens</td>
                                                                                    <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><div class="d-flex">$<input type="text" name="" id="" class="border-0 w-100"></div></td>
                                                                                </tr>
                                                                                <tr class=" border_3">
                                                                                     <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><div class="d-flex">$<input type="text" name="" id="" class="border-0 w-100"></div></td>
                                                                                </tr>

                                                                                <tr  class=" border_3">
                                                                                    <td   class="border border-dark align-content-around">Pending Legacies and/or Inheritances</td>
                                                                                    <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><div class="d-flex">$<input type="text" name="" id="" class="border-0 w-100"></div></td>
                                                                                </tr>


                                                                                <tr  class=" border_3">
                                                                                    <td   class="border border-dark align-content-around">Jewelry</td>
                                                                                    <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><div class="d-flex">$<input type="text" name="" id="" class="border-0 w-100"></div></td>
                                                                                </tr>
                                                                                <tr  class=" border_3">
                                                                                    <td   class="border border-dark align-content-around">Contents of Safe or Safe Deposit Box</td>
                                                                                    <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><div class="d-flex">$<input type="text" name="" id="" class="border-0 w-100"></div></td>
                                                                                </tr>
                                                                                <tr  class=" border_3">
                                                                                    <td   class="border border-dark align-content-around">Firearms</td>
                                                                                    <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><div class="d-flex">$<input type="text" name="" id="" class="border-0 w-100"></div></td>
                                                                                </tr>
                                                                                <tr  class=" border_3">
                                                                                    <td   class="border border-dark align-content-around">Collections</td>
                                                                                    <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><div class="d-flex">$<input type="text" name="" id="" class="border-0 w-100"></div></td>
                                                                                </tr>
                                                                                <tr  class=" border_3">
                                                                                    <td   class="border border-dark align-content-around">Tools/Equipment</td>
                                                                                    <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><div class="d-flex">$<input type="text" name="" id="" class="border-0 w-100"></div></td>
                                                                                </tr>
                                                                                <tr  class=" border_3">
                                                                                    <td   class="border border-dark align-content-around">Crops/Livestock</td>
                                                                                    <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><div class="d-flex">$<input type="text" name="" id="" class="border-0 w-100"></div></td>
                                                                                </tr>
                                                                                <tr  class=" border_3">
                                                                                    <td   class="border border-dark align-content-around">Home Furnishings</td>
                                                                                    <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><div class="d-flex">$<input type="text" name="" id="" class="border-0 w-100"></div></td>
                                                                                </tr>
                                                                                <tr  class=" border_3">
                                                                                    <td   class="border border-dark align-content-around">Arts and Antiques</td>
                                                                                    <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><div class="d-flex">$<input type="text" name="" id="" class="border-0 w-100"></div></td>
                                                                                </tr>
                                                                                <tr  class=" border_3">
                                                                                    <td   class="border border-dark align-content-around">Other (please specify):  <div><input type="text" name="" id="" class="border-0 w-100 border-bottom"></div></td>
                                                                                    <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><div class="d-flex">$<input type="text" name="" id="" class="border-0 w-100"></div></td>
                                                                                </tr>
                                                                                <tr  class=" border_3">
                                                                                    <td   class="border border-dark align-content-around">Other (please specify): <div><input type="text" name="" id="" class="border-0 w-100 border-bottom"></div></td>
                                                                                    <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><input type="text" name="" id="" class="border-0 w-100"></td>
                                                                                    <td class="border border-dark"><div class="d-flex">$<input type="text" name="" id="" class="border-0 w-100"></div></td>
                                                                                </tr>


                                    </table>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <div class="fw-bold">TOTAL ASSETS</div>
                                    <div class="border border-dark"><div class="d-flex">$<input type="text" name="" id="" class="border-0 w-100"></div></div>
                                </div>

                            @include('layouts.footer22', ['page' => 7])
                        </div>
                    </div>
                </section>
                <div class="position-absolute position-fixed top-0 py-3 backdrop_filter end-0 px-3">
                    <div class="col">
                        <button type="button" class="btn btn-success px-4">Save</button>
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
