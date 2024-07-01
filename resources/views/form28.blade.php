{{-- MA Financial statement (short form) (CJD-301S)_06-05-2024_1333.pdf --}}
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
        .w-80{
            width: 80% !important;
        }
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
                                        name="plaintiff_name" >
                                </div>
                                <div class=" d_sm_block">
                                    <div class="fw-bold text-center  ">Commonwealth of Massachusetts <br>The Trial Court <br> Probate and Family Court Department <br> FINANCIAL STATEMENT </div>
                                </div>
                                <div class="d-flex d_sm_block  my-auto ">
                                    <span>Docket No.</span>
                                    <input type="text" class="border-none border-0 border-bottom responsive_input shadow-none my-auto responsive_input" name="plaintiff_name" >
                                </div>
                            </div>
                            <div class="text-center">(Short form)</div>
                                        <div><b>INSTRUCTIONS:</b> if your income equals or exceeds $75,000.00 annually, you must complete the LONG FORM financial</div>

                                        <div class="d-flex d_sm_block justify-content-between">
                                            <div class="w-75 responsive_input">
                                                <input type="text" name="" id="" class="border-0 border-bottom w-75 responsive_input">
                                                <div class="small_text text-center">Plaintiff/Petitioner</div>
                                            </div>
                                            <div> V. </div>
                                            <div class="w-75  responsive_input  text-end">
                                                <input type="text" name="" id="" class="border-0 border-bottom w-75  responsive_input ">
                                                <div class="small_text text-center">Plaintiff/Petitioner</div>
                                            </div>
                                        </div>
                                </div>

                                <div class="fw-bold pt-3">1. PERSONAL INFORMATION</div>
                                <div class="ps-lg-5">
                                    <div class=" small_text">
                                        <span>Your Name</span>
                                        <span><input type="text" name="" id="" class="border-0 border-bottom responsive_input" style="width:754px;"> </span>
                                        <span>Social Security No.</span>
                                        <span><input type="text" name="" id="" class="border-0 border-bottom responsive_input"></span>
                                    </div>

                                    <div class="d-flex d_sm_block pt-lg-1 small_text">
                                        <div>Address</div>
                                        <div>
                                            <input type="text" name="" id="" class="border-0 border-bottom responsive_input" style="width:473px;">
                                            <div class="text-center">(Street address)</div>

                                        </div>
                                        <div class="ms-lg-3">
                                            <input type="text" name="" id="" class="border-0 border-bottom responsive_input" style="width:320px;">
                                            <div class="text-center">(City/Town)</div>
                                        </div>
                                        <div class="ms-lg-3">
                                            <input type="text" name="" id="" class="border-0 border-bottom responsive_input"  style="width:120px;">
                                            <div class="text-center">(State)</div>
                                        </div>
                                        <div class="ms-lg-3">
                                        <input type="text" name="" id="" class="border-0 border-bottom responsive_input"style="width:120px;" >
                                            <div class="text-center">(Zip)</div>
                                        </div>
                                    </div>
                                    <div class="d-flex d_sm_block pt-lg-1 small_text">
                                        <div>Tel. No.</div>
                                        <div> <input type="text" name="" id="" class="border-0 border-bottom responsive_input"style="width:332px;"></div>
                                        <div>Date of Birth</div>
                                        <div> <input type="text" name="" id="" class="border-0 border-bottom responsive_input"style="width:332px;"></div>
                                        <div>No. of children living with you</div>
                                        <div> <input type="text" name="" id="" class="border-0 border-bottom responsive_input"style="width:135px;"></div>
                                    </div>
                                    <div class="d-flex d_sm_block pt-lg-1 small_text">
                                        <div>Occupation</div>
                                        <div> <input type="text" name="" id="" class="border-0 border-bottom responsive_input"style="width:430px;"></div>
                                        <div>Employer</div>
                                        <div> <input type="text" name="" id="" class="border-0 border-bottom responsive_input"style="width:568px;"></div>
                                    </div>

                                    <div class="d-flex d_sm_block pt-lg-1 small_text">
                                        <div>Employer's Address</div>
                                        <div>
                                            <input type="text" name="" id="" class="border-0 border-bottom responsive_input" style="width:400px;">
                                            <div class="text-center">(Street address)</div>

                                        </div>
                                        <div class="ms-lg-3">
                                            <input type="text" name="" id="" class="border-0 border-bottom responsive_input" style="width:312px;">
                                            <div class="text-center">(City/Town)</div>
                                        </div>
                                        <div class="ms-lg-3">
                                            <input type="text" name="" id="" class="border-0 border-bottom responsive_input"  style="width:120px;">
                                            <div class="text-center">(State)</div>
                                        </div>
                                        <div class="ms-lg-3">
                                        <input type="text" name="" id="" class="border-0 border-bottom responsive_input"style="width:120px;" >
                                            <div class="text-center">(Zip)</div>
                                        </div>
                                    </div>

                                    <div class="d-flex d_sm_block pt-lg-1 small_text">
                                        <div>Tel. No.</div>
                                        <div><input type="text" name="" id="" class="border-0 border-bottom responsive_input" style="width:708px"></div>
                                        <div>Do you have health insurance coverage?</div>
                                        <div><input type="checkbox" name="" id="" class="mx-2"> <span>Yes</span></div>
                                        <div><input type="checkbox" name="" id="" class="mx-2"> <span>No</span></div>
                                    </div>

                                    <div class="d-flex d_sm_block pt-lg-1 small_text">
                                        <div>if yes, name of health insurance provider</div>
                                        <div><input type="text" name="" id="" class="border-0 border-bottom responsive_input" style="width:862px"></div>

                                    </div>
                                </div>
                                <div class="fw-bold pt-3">2. GROSS WEEKLY INCOME/RECEIPTS FROM ALL SOURCES</div>
                                <div class="ps-lg-5 pt-lg-1 small_text">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div> a) Base pay from  <input type="checkbox" name="" class="mx-1" id=""> <span>Salary</span>    <input type="checkbox" name="" class="mx-1" id=""> <span>Wages</span></div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="d-flex justify-content-md-end">
                                                <div>$</div>
                                                <div class="responsive_input"><input type="number" name="" class="border-0 border-bottom responsive_input"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div> b) Overtime  </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="d-flex justify-content-md-end">
                                                <div>$</div>
                                                <div class="responsive_input"><input type="number" name="" class="border-0 border-bottom responsive_input"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div> c) Part-time job  </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="d-flex justify-content-md-end">
                                                <div>$</div>
                                                <div class="responsive_input"><input type="number" name="" class="border-0 border-bottom responsive_input"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div> d) Self-employment (attach a completed schedule A)  </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="d-flex justify-content-md-end">
                                                <div>$</div>
                                                <div class="responsive_input"><input type="number" name="" class="border-0 border-bottom responsive_input"></div>
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
                                                <div class="responsive_input"><input type="number" name="" class="border-0 border-bottom responsive_input"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div> f) <input type="checkbox" name=""  id="" class="ms-lg-3">
                                                <span>Commissions</span>
                                                <input type="checkbox" name="" class="ms-lg-2" id="">
                                                <span>Bonuses</span>
                                        </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="d-flex justify-content-md-end">
                                                <div>$</div>
                                                <div class="responsive_input"><input type="number" name="" class="border-0 border-bottom responsive_input"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div> g) <input type="checkbox" name=""  id="" class="ms-lg-3">
                                                <span>Dividends</span>
                                                <input type="checkbox" name="" class="ms-lg-4" id="">
                                                <span>Interest</span>
                                        </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="d-flex justify-content-md-end">
                                                <div>$</div>
                                                <div class="responsive_input"><input type="number" name="" class="border-0 border-bottom responsive_input"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div> h) <input type="checkbox" name=""  id="" class="ms-lg-3">
                                                <span>Trusts</span>
                                                <input type="checkbox" name="" class="ms-lg-5" id="">
                                                <span>Annuities</span>
                                        </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="d-flex justify-content-md-end">
                                                <div>$</div>
                                                <div class="responsive_input"><input type="number" name="" class="border-0 border-bottom responsive_input"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div> i) <input type="checkbox" name=""  id="" class="ms-lg-3">
                                                <span>Pensions</span>
                                                <input type="checkbox" name="" class="ms-lg-4" id="">
                                                <span>Retirement funds</span>
                                        </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="d-flex justify-content-md-end">
                                                <div>$</div>
                                                <div class="responsive_input"><input type="number" name="" class="border-0 border-bottom responsive_input"></div>
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
                                                <div class="responsive_input"><input type="number" name="" class="border-0 border-bottom responsive_input"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="d-flex d_sm_block"> k) <input type="checkbox" name="" id="" class="ms-lg-3 me-1">
                                                <span>Disability</span>
                                                <input type="checkbox" name=""  id="" class="ms-lg-3 me-1">
                                                <span> Unemployment insurance</span>
                                                <input type="checkbox" name=""  id="" class="ms-lg-3 me-1">
                                                <span> Worker's compensation</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="d-flex justify-content-md-end">
                                                <div>$</div>
                                                <div class="responsive_input"><input type="number" name="" class="border-0 border-bottom responsive_input"></div>
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
                                                <div class="responsive_input"><input type="number" name="" class="border-0 border-bottom responsive_input"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="d-flex d_sm_block"> m) <input type="checkbox" name="" id="" class="ms-lg-3 me-1">
                                                <span>Child Support</span>
                                                <input type="checkbox" name=""  id="" class="ms-lg-3 me-1">
                                                <span> Alimony (actually received)</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="d-flex justify-content-md-end">
                                                <div>$</div>
                                                <div class="responsive_input"><input type="number" name="" class="border-0 border-bottom responsive_input"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="d-flex d_sm_block">n) Rental from income producing property (attach a completed Schedule B) </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="d-flex justify-content-md-end">
                                                <div>$</div>
                                                <div class="responsive_input"><input type="number" name="" class="border-0 border-bottom responsive_input"></div>
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
                                                <div class="responsive_input"><input type="number" name="" class="border-0 border-bottom responsive_input"></div>
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
                                                <div class="responsive_input"><input type="number" name="" class="border-0 border-bottom responsive_input"></div>
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
                                                <div class="responsive_input"><input type="number" name="" class="border-0 border-bottom responsive_input"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-8 ps-lg-5">
                                            <div><input type="number" name="" class="border-0 border-bottom responsive_input w-75"></div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="d-flex justify-content-md-end">
                                                <div>$</div>
                                                <div class="responsive_input"><input type="number" name="" class="border-0 border-bottom responsive_input"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-8 ps-lg-5">
                                            <div><input type="number" name="" class="border-0 border-bottom responsive_input w-75"></div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="d-flex justify-content-md-end">
                                                <div>$</div>
                                                <div class="responsive_input"><input type="number" name="" class="border-0 border-bottom responsive_input"></div>
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
                                                <div class="responsive_input"><input type="number" name="" class="border-0 border-bottom responsive_input"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                    @include('layouts.footer21', ['page' => 1])
                </section>
                <section class="section_area p-5" id="second_section">

                    <div class="row">
                        <div class=" ">

                            <div class="d-flex d_sm_block justify-content-between">
                                <div class="d-flex d_sm_block my-auto">
                                    <span>Name: </span>
                                    <input type="text" class="border-none border-0 border-bottom responsive_input shadow-none my-auto responsive_input" name="plaintiff_name">
                                </div>
                                <div class="d_sm_block">
                                    <div class="fw-bold text-center">Commonwealth of Massachusetts <br>The Trial Court <br> Probate and Family Court Department <br> FINANCIAL STATEMENT </div>
                                </div>
                                <div class="d-flex d_sm_block my-auto">
                                    <span>Docket No.</span>
                                    <input type="text" class="border-none border-0 border-bottom responsive_input shadow-none my-auto responsive_input" name="plaintiff_name">
                                </div>
                            </div>
                            <div class="text-center">(Short form)</div>
                            <div class="fw-bold pt-lg-2">3. ITEMIZED DEDUCTIONS FROM GROSS INCOME </div>
                            <div class="ps-lg-5 pt-lg-1 small_text">
                                <div class="row  mt-lg-1">
                                    <div class="col-lg-8 ">
                                        <div>a) Federal income tax deductions (claiming  <input type="text" name="" id="" class="border-0 border-bottom"> exemptions) </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="d-flex justify-content-md-end">
                                            <div>$</div>
                                            <div class="responsive_input"><input type="number" name="" class="border-0 border-bottom responsive_input"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row  mt-lg-1">
                                    <div class="col-lg-8 ">
                                        <div>b) State income tax deductions (claiming  <input type="text" name="" id="" class="border-0 border-bottom"> exemptions) </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="d-flex justify-content-md-end">
                                            <div>$</div>
                                            <div class="responsive_input"><input type="number" name="" class="border-0 border-bottom responsive_input"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row  mt-lg-1">
                                    <div class="col-lg-8 ">
                                        <div>c) F.I.C.A. and Medicare </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="d-flex justify-content-md-end">
                                            <div>$</div>
                                            <div class="responsive_input"><input type="number" name="" class="border-0 border-bottom responsive_input"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row  mt-lg-1">
                                    <div class="col-lg-8 ">
                                        <div>d) Medical Insurance </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="d-flex justify-content-md-end">
                                            <div>$</div>
                                            <div class="responsive_input"><input type="number" name="" class="border-0 border-bottom responsive_input"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row  mt-lg-1">
                                    <div class="col-lg-8 ">
                                        <div>e) Union Dues </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="d-flex justify-content-md-end">
                                            <div>$</div>
                                            <div class="responsive_input"><input type="number" name="" class="border-0 border-bottom responsive_input"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row  mt-lg-1">
                                    <div class="col-lg-8 text-center">
                                        <div><b>f) Total Deductions</b> (a through e) </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="d-flex justify-content-md-end">
                                            <div>$</div>
                                            <div class="responsive_input"><input type="number" name="" class="border-0 border-bottom responsive_input"></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="fw-bold">4. ADJUSTED NET WEEKLY INCOME</div>
                            <div class="row  small_text">
                                <div class="col-lg-8 text-center">
                                    <div>2(r) minus 3(f) </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>
                                        <div class="responsive_input"><input type="number" name="" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="fw-bold">5. OTHER DEDUCTIONS FROM SALARY/WAGES</div>
                            <div class="ps-lg-5 pt-lg-1 small_text">
                                <div class="row  mt-lg-1">
                                    <div class="col-lg-8">
                                        <div>a) Credit Union  <input type="checkbox" name="" id="" class="ms-lg-3"> Loan repayment <input type="checkbox" name="" id="" class="ms-lg-3"> Savings </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="d-flex justify-content-md-end">
                                            <div>$</div>
                                            <div class="responsive_input"><input type="number" name="" class="border-0 border-bottom responsive_input"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row  mt-lg-1">
                                    <div class="col-lg-8">
                                        <div>b) Savings</div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="d-flex justify-content-md-end">
                                            <div>$</div>
                                            <div class="responsive_input"><input type="number" name="" class="border-0 border-bottom responsive_input"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row  mt-lg-1">
                                    <div class="col-lg-8">
                                        <div>c) Retirement</div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="d-flex justify-content-md-end">
                                            <div>$</div>
                                            <div class="responsive_input"><input type="number" name="" class="border-0 border-bottom responsive_input"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row  mt-lg-1">
                                    <div class="col-lg-8">
                                        <div>d) Other-Specify (i.e. Child Support, Deferred Compensation or 401K) <input type="text" name="" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="d-flex justify-content-md-end">
                                            <div>$</div>
                                            <div class="responsive_input"><input type="number" name="" class="border-0 border-bottom responsive_input"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row  mt-lg-1">
                                    <div class="col-lg-8 text-center">
                                        <div><b>e) Total Deductions </b> (a through d) </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="d-flex justify-content-md-end">
                                            <div>$</div>
                                            <div class="responsive_input"><input type="number    " name="" class="border-0 border-bottom responsive_input"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="fw-bold">6. NET WEEKLY INCOME</div>
                            <div class="row  mt-lg-1 small_text">
                                <div class="col-lg-8 text-center">
                                    <div>4 minus 5(e)</div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>
                                        <div class="responsive_input"><input type="number" name="" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="fw-bold">7. GROSS YEARLY INCOME FROM PRIOR YEAR</div>
                            <div class="row  mt-lg-1 small_text">
                                <div class="col-lg-8 ps-lg-5">
                                    <div>(attach copy of all W-2 and 1099 forms for prior year) </div>

                                    <div class="pt-2 ps-lg-5 fw-bold">Number of Years you have paid into Social Security <input type="text" name="" id="" class="border-0 border-bottom"></div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>
                                        <div class="responsive_input"><input type="number" name="" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="fw-bold pt-lg-3">8. WEEKLY EXPENSES</div>
                            <div class="row small_text">
                                <div class="col-lg-6 ps-lg-5">
                                    <div class="d-flex justify-content-between d_sm_block ">
                                        <div>a) Rent or Mortage (PIT)</div>
                                         <div class="d-flex"><div>$</div><input type="number" name="" class="border-0 border-bottom responsive_input"></div>
                                    </div>

                                    <div class="d-flex justify-content-between d_sm_block">
                                        <div>b) Homeowners/Tenant Insurance</div>
                                        <div class="d-flex"><div>$</div><input type="number" name="" class="border-0 border-bottom responsive_input"></div>
                                    </div>

                                    <div class="d-flex justify-content-between d_sm_block">
                                        <div>c) Maintenance and Repair</div>
                                        <div class="d-flex"><div>$</div><input type="number" name="" class="border-0 border-bottom responsive_input"></div>
                                    </div>

                                    <div class="d-flex justify-content-between d_sm_block">
                                        <div>d) Heat</div>
                                        <div class="d-flex"><div>$</div><input type="number" name="" class="border-0 border-bottom responsive_input"></div>
                                    </div>

                                    <div class="d-flex justify-content-between d_sm_block">
                                        <div>e) Electricity and/or Gas</div>
                                        <div class="d-flex"><div>$</div><input type="number" name="" class="border-0 border-bottom responsive_input"></div>
                                    </div>

                                    <div class="d-flex justify-content-between d_sm_block">
                                        <div>f) Telephone</div>
                                        <div class="d-flex"><div>$</div><input type="number" name="" class="border-0 border-bottom responsive_input"></div>
                                    </div>

                                    <div class="d-flex justify-content-between d_sm_block">
                                        <div>g) Water/Sewer</div>
                                        <div class="d-flex"><div>$</div><input type="number" name="" class="border-0 border-bottom responsive_input"></div>
                                    </div>

                                    <div class="d-flex justify-content-between d_sm_block">
                                        <div>h) Food</div>
                                        <div class="d-flex"><div>$</div><input type="number" name="" class="border-0 border-bottom responsive_input"></div>
                                    </div>

                                    <div class="d-flex justify-content-between d_sm_block">
                                        <div>i) House Supplies</div>
                                        <div class="d-flex"><div>$</div><input type="number" name="" class="border-0 border-bottom responsive_input"></div>
                                    </div>

                                    <div class="d-flex justify-content-between d_sm_block">
                                        <div>j) Laundry and Cleaning</div>
                                        <div class="d-flex"><div>$</div><input type="number" name="" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                    <div class="d-flex justify-content-between d_sm_block">
                                        <div>k) Clothing</div>
                                        <div class="d-flex"><div>$</div><input type="number" name="" class="border-0 border-bottom responsive_input"></div>
                                    </div>

                                </div>
                                <div class="col-lg-6 ps-lg-5">
                                    <div class="d-flex justify-content-between d_sm_block">
                                        <div>l) Life Insurance</div>
                                        <div class="d-flex"><div>$</div><input type="number" name="" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                    <div class="d-flex justify-content-between d_sm_block">
                                        <div>m) Medical Insurance</div>
                                        <div class="d-flex"><div>$</div><input type="number" name="" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                    <div class="d-flex justify-content-between d_sm_block">
                                        <div>n) Uninsured Medicals</div>
                                        <div class="d-flex"><div>$</div><input type="number" name="" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                    <div class="d-flex justify-content-between d_sm_block">
                                        <div>o) Incidentals and Toiletries</div>
                                        <div class="d-flex"><div>$</div><input type="number" name="" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                    <div class="d-flex justify-content-between d_sm_block">
                                        <div>p) Motor Vehicle Expenses</div>
                                        <div class="d-flex"><div>$</div><input type="number" name="" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                    <div class="d-flex justify-content-between d_sm_block">
                                        <div>q) Motor Vehicle Payment</div>
                                        <div class="d-flex"><div>$</div><input type="number" name="" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                    <div class="d-flex justify-content-between d_sm_block">
                                        <div>r) Child Care</div>
                                        <div class="d-flex"><div>$</div><input type="number" name="" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                    <div class="d-flex justify-content-between d_sm_block">
                                        <div>s) Other (explain)</div>
                                        <div class="d-flex"><div>$</div><input type="number" name="" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                    <div class="d-flex justify-content-between d_sm_block">
                                        <div><input type="number" name="" class="border-0 border-bottom responsive_input"></div>
                                        <div class="d-flex"><div>$</div><input type="number" name="" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                    <div class="d-flex justify-content-between d_sm_block">
                                        <div><input type="number" name="" class="border-0 border-bottom responsive_input"></div>
                                        <div class="d-flex"><div>$</div><input type="number" name="" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between  pt-lg-2">
                                    <div class="fw-bold mx-auto ">t) Total Weekly Expenses (a through s)</div>
                                    <div class="d-flex justify-content-end">$<input type="number" name="" class="border-0 border-bottom responsive_input"></div>
                                </div>
                            </div>
                            <div class="fw-bold pt-lg-3 pt-2">9. COUNSEL FEES</div>
                            <div class="ps-lg-5 small_text">
                                <div class="d-flex justify-content-between d_sm_block ">
                                    <div>a) Retainer amount(s) paid to your attorney(s)</div>
                                    <div class="d-flex"><div>$</div><input type="number" name="" class="border-0 border-bottom responsive_input"></div>
                                </div>
                                <div class="d-flex justify-content-between d_sm_block ">
                                    <div>b) Legal fees incurred, to date, against retainer(s)</div>
                                    <div class="d-flex"><div>$</div><input type="number" name="" class="border-0 border-bottom responsive_input"></div>
                                </div>
                                <div class="d-flex justify-content-between d_sm_block ">
                                    <div>c) Anticipated range of total legal expense to litigate this action</div>
                                    <div class="d-flex"><div>$</div><input type="number" name="" class="border-0 border-bottom responsive_input"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @include('layouts.footer21', ['page' => 2])
                </section>
                <section class="section_area p-5" id="third_section">

                    <div class="row">
                        <div class=" ">

                            <div class="d-flex d_sm_block justify-content-between">
                                <div class="d-flex d_sm_block my-auto">
                                    <span>Name: </span>
                                    <input type="text" class="border-none border-0 border-bottom responsive_input shadow-none my-auto responsive_input" name="plaintiff_name">
                                </div>
                                <div class="d_sm_block">
                                    <div class="fw-bold text-center">Commonwealth of Massachusetts <br>The Trial Court <br> Probate and Family Court Department <br> FINANCIAL STATEMENT </div>
                                </div>
                                <div class="d-flex d_sm_block my-auto">
                                    <span>Docket No.</span>
                                    <input type="text" class="border-none border-0 border-bottom responsive_input shadow-none my-auto responsive_input" name="plaintiff_name">
                                </div>
                            </div>
                            <div class="text-center">(Short form)</div>
                            <div class="fw-bold pt-lg-2">10. ASSETS (attach additional sheet if necessary) </div>
                            <div class="ps-lg-5 small_text">
                                <div class="pt-lg-1">a) Real Estate</div>
                                <div class="row ps-lg-3">
                                    <div class="col-lg-8">
                                        <div>Location <input type="text" name="" id="" class="border-0 border-bottom responsive_input" style="width:669px;"></div>
                                    </div>
                                    <div class="col-lg-4"></div>
                                </div>

                                <div class="row ps-lg-3">
                                    <div class="col-lg-8">
                                        <div>Title held in the name of $<input type="text" name="" id="" class="border-0 border-bottom responsive_input" style="width:553px;"></div>
                                    </div>
                                    <div class="col-lg-4"></div>
                                    <div class="row ps-lg-3">
                                        <div class="col-lg-4">
                                            <div> Fair Market Value <input type="text" name="" id="" class="border-0 border-bottom responsive_input" style="width:222px;"></div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div> - Mortgage  $<input type="text" name="" id="" class="border-0 border-bottom responsive_input" style="width:255px;"></div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="d-flex justify-content-md-end">
                                                <div>=Equity $</div>
                                                <div  class=" w-80"><input type="number" name="" class="border-0 border-bottom responsive_input"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="pt-lg-1">b) Motor Vehicles</div>
                                <div class= " small_text">
                                <div class="row ps-lg-3">
                                    <div class="col-lg-4">
                                        <div> Fair Market Value <input type="text" name="" id="" class="border-0 border-bottom responsive_input" style="width:222px;"></div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div> - Motor Vehicle Loan $<input type="text" name="" id="" class="border-0 border-bottom responsive_input" style="width:191px                                                                                                                                    ;"></div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="d-flex justify-content-md-end">
                                            <div>=Equity $</div>
                                            <div  class=" w-80"><input type="number" name="" class="border-0 border-bottom responsive_input"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row ps-lg-3">
                                    <div class="col-lg-4">
                                        <div> Fair Market Value <input type="text" name="" id="" class="border-0 border-bottom responsive_input" style="width:222px;"></div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div> - Motor Vehicle Loan $<input type="text" name="" id="" class="border-0 border-bottom responsive_input" style="width:191px                                                                                                                                    ;"></div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="d-flex justify-content-md-end">
                                            <div>=Equity $</div>
                                            <div  class=" w-80"><input type="number" name="" class="border-0 border-bottom responsive_input"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-lg-1">c) IRA, Keogh, Pension, Profit Sharing, Other Retirement Plans: Financial Institution or Plan Name and Account Number</div>
                            <div class="row ps-lg-3">
                                <div class="col-lg-8">
                                    <div>   <input type="text" name="" id="" class="border-0 border-bottom responsive_input w-100" ></div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>
                                        <div class="responsive_input"><input type="number" name="" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row ps-lg-3">
                                <div class="col-lg-8">
                                    <div>   <input type="text" name="" id="" class="border-0 border-bottom responsive_input w-100" ></div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>
                                        <div class="responsive_input"><input type="number" name="" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row ps-lg-3">
                                <div class="col-lg-8">
                                    <div><input type="text" name="" id="" class="border-0 border-bottom responsive_input w-100" ></div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>
                                        <div class="responsive_input"><input type="number" name="" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="small_text mt-lg-1">d) Tax Deferred Annuity Plan(s)</div>
                            <div class="row">
                                <div class="col-lg-8">
                                    <div>e) Life Insurance: Present Cash Value</div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>
                                        <div class="responsive_input"><input type="number" name="" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-8">
                                    <div>f) Savings & Checking Accounts, Money Market Accounts, Certificates of Deposit-which are held individually, jointly, in the name of another person for your benefit, or held by you for the benefit of your minor child(ren):
                                        Financial Institution or Plan Name and Account Number</div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>
                                        <div class="responsive_input"><input type="number" name="" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="row ps-lg-3">
                                <div class="col-lg-8">
                                    <div>   <input type="text" name="" id="" class="border-0 border-bottom responsive_input w-100" ></div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>
                                        <div  class="responsive_input"><input type="number" name="" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="row ps-lg-3">
                                <div class="col-lg-8">
                                    <div>   <input type="text" name="" id="" class="border-0 border-bottom responsive_input w-100" ></div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>
                                        <div  class="responsive_input"><input type="number" name="" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="row ps-lg-3">
                                <div class="col-lg-8">
                                    <div class="responsive_input">   <input type="text" name="" id="" class="border-0 border-bottom responsive_input w-100" ></div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>
                                        <div class="responsive_input"><input type="number" name="" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row  pt-lg-1">
                                <div class="col-lg-8">
                                    <div> g) Other (e.g. stocks, bonds, collections)</div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>
                                        <div class="responsive_input"><input type="number" name="" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row ps-lg-3">
                                <div class="col-lg-8">
                                    <div class="responsive_input">   <input type="text" name="" id="" class="border-0 border-bottom responsive_input w-100" ></div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>
                                        <div class="responsive_input"><input type="number" name="" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row ps-lg-3">
                                <div class="col-lg-8">
                                    <div  class="responsive_input">   <input type="text" name="" id="" class="border-0 border-bottom responsive_input w-100" ></div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>
                                        <div class="responsive_input"><input type="number" name="" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row  pt-lg-3">
                                <div class="col-lg-8 text-center">
                                    <div><b> h) Total Assets</b> (a through g)</div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>
                                        <div class="responsive_input"><input type="number" name="" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="fw-bold">11. LIABILITIES (Do not list expenses shown in item 8 above.)</div>
                        <div class="pt-lg-3 table-responsive">
                            <table class="table table-bordered border-dark">
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td>Creditor</td>
                                        <td>Nature of Debt</td>
                                        <td>Date Incurred</td>
                                        <td>Amount Due</td>
                                        <td>Weekly Payment</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center px-2">a)</td>
                                        <td><input type="text" name="" id="" class="border-0 w-100"></td>
                                        <td><input type="text" name="" id="" class="border-0 w-100"></td>
                                        <td><input type="text" name="" id="" class="border-0 w-100"></td>
                                        <td><div class="d-flex">$<input type="text" name="" id="" class="border-0 w-100"></div></td>
                                        <td><div class="d-flex">$<input type="text" name="" id="" class="border-0 w-100"></div></td>
                                    </tr>

                                    <tr>
                                        <td class="text-center px-2">b)</td>
                                        <td><input type="text" name="" id="" class="border-0 w-100"></td>
                                        <td><input type="text" name="" id="" class="border-0 w-100"></td>
                                        <td><input type="text" name="" id="" class="border-0 w-100"></td>
                                        <td><div class="d-flex">$<input type="text" name="" id="" class="border-0 w-100"></div></td>
                                        <td><div class="d-flex">$<input type="text" name="" id="" class="border-0 w-100"></div></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center px-2">c)</td>
                                        <td><input type="text" name="" id="" class="border-0 w-100"></td>
                                        <td><input type="text" name="" id="" class="border-0 w-100"></td>
                                        <td><input type="text" name="" id="" class="border-0 w-100"></td>
                                        <td><div class="d-flex">$<input type="text" name="" id="" class="border-0 w-100"></div></td>
                                        <td><div class="d-flex">$<input type="text" name="" id="" class="border-0 w-100"></div></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center px-2">d)</td>
                                        <td><input type="text" name="" id="" class="border-0 w-100"></td>
                                        <td><input type="text" name="" id="" class="border-0 w-100"></td>
                                        <td><input type="text" name="" id="" class="border-0 w-100"></td>
                                        <td><div class="d-flex">$<input type="text" name="" id="" class="border-0 w-100"></div></td>
                                        <td><div class="d-flex">$<input type="text" name="" id="" class="border-0 w-100"></div></td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-lg-6  fw-bold text-center">e) Total Liabilities</div>
                            <div class="col-lg-6 text-end  fw-bold"> <div class="border border-dark p-1 d-inline d_sm_block">$ <input type="text" class="border-0 "></div>  <div class="border border-dark p-1 mt-3 mt-md-0  d-inline d_sm_block">$ <input type="text" class="border-0 "></div></div>
                        </div>
                    </div>
                    @include('layouts.footer21', ['page' => 3])
                </section>
                <section class="section_area p-5" id="fourth_section">

                    <div class="row">
                        <div class=" ">

                            <div class="d-flex d_sm_block justify-content-between">
                                <div class="d-flex d_sm_block my-auto">
                                    <span>Name: </span>
                                    <input type="text" class="border-none border-0 border-bottom responsive_input shadow-none my-auto responsive_input" name="plaintiff_name">
                                </div>
                                <div class="d_sm_block">
                                    <div class="fw-bold text-center">Commonwealth of Massachusetts <br>The Trial Court <br> Probate and Family Court Department <br> FINANCIAL STATEMENT </div>
                                </div>
                                <div class="d-flex d_sm_block my-auto">
                                    <span>Docket No.</span>
                                    <input type="text" class="border-none border-0 border-bottom responsive_input shadow-none my-auto responsive_input" name="plaintiff_name">
                                </div>
                            </div>
                            <div class="text-center">(Short form)</div>
                            <div class="text-center"> <span class=" fw-bold border-bottom">CERTIFICATION</span></div>
                            <div class="fw-bold py-lg-3 small_text">I certify under the penalties of perjury that the information stated on this Financial Statement and the attached schedules, if any, is complete, true, and accurate. </div>
                            <div class="row small_text mb-lg-5">
                                <div class="col-lg-4">Date <input type="date" name="" id="" class="border-0 border-bottom responsive_input" style="width:335px;"></div>
                                <div class="col-lg-8">Signature <input type="text" name="" id="" class="border-0 border-bottom responsive_input" style="width:702px;"></div>
                             </div>

                            <div class="mt-5 text-center"><b class="border-bottom">INSTRUCTIONS</b>: In any case where an attorney is appearing for a party, said attorney
                                MUST complete the Statement by Attorney.</div>
                                <div class="mt-2 text-center"><b class="border-bottom">STATEMENT BY ATTORNEY</b></div>
                                <div class="py-1 small_text">
                                    I the undersigned attorney, am admitted to practice law in the Commonwealth of Massachusetts--am admitted pro hoc vice for the purposes of this case-and am an officer of the court. As the attorney for the party on whose behalf this Financial Statement is submitted, I hereby state to the court that I have no knowledge that any of the information contained herein is false.
                                </div>


                                <div class="row small_text mb-lg-5">
                                    <div class="col-lg-4">Date <input type="date" name="" id="" class="border-0 border-bottom" style="width:335px;"></div>
                                    <div class="col-lg-3"></div>
                                    <div class="col-lg-5 ">
                                        <div clas>
                                            <input type="text" name="" id="" class="border-0 border-bottom w-100 responsive_input">
                                            <div class="small_text text-center">(Signature of attorney)</div>
                                        </div>
                                        <div class="pt-lg-2">
                                            <input type="text" name="" id="" class="border-0 border-bottom w-100 responsive_input">
                                            <div class="small_text text-center">(Signature of attorney)</div>
                                        </div>
                                        <div class="pt-lg-2">
                                            <input type="text" name="" id="" class="border-0 border-bottom w-100 responsive_input">
                                            <div class="small_text text-center">(Print name)</div>
                                        </div>
                                        <div class="pt-lg-2">
                                            <input type="text" name="" id="" class="border-0 border-bottom w-100 responsive_input">
                                            <div class="small_text text-center">(Street address)</div>
                                        </div>
                                        <div class="d-flex d_sm_block pt-lg-1 small_text">

                                            <div class="">
                                                <input type="text" name="" id="" class="border-0 border-bottom responsive_input" style="width:203px;">
                                                <div class="text-center">(City/Town)</div>
                                            </div>
                                            <div class="ms-lg-3">
                                                <input type="text" name="" id="" class="border-0 border-bottom responsive_input"  style="width:120px;">
                                                <div class="text-center">(State)</div>
                                            </div>
                                            <div class="ms-lg-3">
                                            <input type="text" name="" id="" class="border-0 border-bottom responsive_input"style="width:120px;" >
                                                <div class="text-center">(Zip)</div>
                                            </div>
                                        </div>
                                        <div class="pt-lg-2">Tel. No.<input type="text" name="" id="" class="border-0 border-bottom responsive_input" style="width:424px;">
                                        <div class="pt-lg-2">B.B.O. #<input type="text" name="" id="" class="border-0 border-bottom responsive_input" style="width:420px;">
                                        </div>
                                    </div>
                                 </div>

                        </div>


                    </div>
                    @include('layouts.footer21', ['page' => 4])
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
