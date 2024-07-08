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
            <form action="{{ route('form28.submit') }}" method="post">
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
                                    <input type="text" class="border-none border-0 border-bottom responsive_input shadow-none my-auto responsive_input" name="Name" >
                                </div>
                                <div class=" d_sm_block">
                                    <div class="fw-bold text-center  ">Commonwealth of Massachusetts <br>The Trial Court <br> Probate and Family Court Department <br> FINANCIAL STATEMENT </div>
                                </div>
                                <div class="d-flex d_sm_block  my-auto ">
                                    <span>Docket No.</span>
                                    <input type="text" class="border-none border-0 border-bottom responsive_input shadow-none my-auto responsive_input" name="Docket No" >
                                </div>
                            </div>
                            <div class="text-center">(Short form)</div>
                                        <div><b>INSTRUCTIONS:</b> if your income equals or exceeds $75,000.00 annually, you must complete the LONG FORM financial</div>
                                        <div class="d-flex d_sm_block justify-content-between">
                                            <div class="w-75 responsive_input">
                                                <input type="text" name="Plaintiff/Petitioner" id="" class="border-0 border-bottom w-75 responsive_input">
                                                <div class="small_text text-center">Plaintiff/Petitioner</div>
                                            </div>
                                            <div> V. </div>
                                            <div class="w-75  responsive_input  text-end">
                                                <input type="text" name="Defendant/Petitioner" id="" class="border-0 border-bottom w-75  responsive_input ">
                                                <div class="small_text text-center">Defendant/Petitioner</div>
                                            </div>
                                        </div>
                                </div>

                                <div class="fw-bold pt-3">1. PERSONAL INFORMATION</div>
                                <div class="ps-lg-5">
                                    <div class=" small_text">
                                        <span>Your Name</span>
                                        <span><input type="text" name="Your Name" id="" class="border-0 border-bottom responsive_input" style="width:754px;"> </span>
                                        <span>Social Security No.</span>
                                        <span><input type="text" name="Social Security No" id="" class="border-0 border-bottom responsive_input"></span>
                                    </div>

                                    <div class="d-flex d_sm_block pt-lg-1 small_text">
                                        <div>Address</div>
                                        <div>
                                            <input type="text" name="Street address" id="" class="border-0 border-bottom responsive_input" style="width:473px;">
                                            <div class="text-center">(Street address)</div>

                                        </div>
                                        <div class="ms-lg-3">
                                            <input type="text" name="City/Town" id="" class="border-0 border-bottom responsive_input" style="width:320px;">
                                            <div class="text-center">(City/Town)</div>
                                        </div>
                                        <div class="ms-lg-3">
                                            <input type="text" name="State" id="" class="border-0 border-bottom responsive_input"  style="width:120px;">
                                            <div class="text-center">(State)</div>
                                        </div>
                                        <div class="ms-lg-3">
                                        <input type="text" name="Zip" id="" class="border-0 border-bottom responsive_input"style="width:120px;" >
                                            <div class="text-center">(Zip)</div>
                                        </div>
                                    </div>
                                    <div class="d-flex d_sm_block pt-lg-1 small_text">
                                        <div>Tel. No.</div>
                                        <div> <input type="number" name="Tel. No" id="" class="border-0 border-bottom responsive_input"style="width:332px;"></div>
                                        <div>Date of Birth</div>
                                        <div> <input type="date" name="Date of Birth" id="" class="border-0 border-bottom responsive_input"style="width:332px;"></div>
                                        <div>No. of children living with you</div>
                                        <div> <input type="text" name="No. of children living with you" id="" class="border-0 border-bottom responsive_input"style="width:135px;"></div>
                                    </div>
                                    <div class="d-flex d_sm_block pt-lg-1 small_text">
                                        <div>Occupation</div>
                                        <div> <input type="text" name="Occupation" id="" class="border-0 border-bottom responsive_input"style="width:430px;"></div>
                                        <div>Employer</div>
                                        <div> <input type="text" name="Employer" id="" class="border-0 border-bottom responsive_input"style="width:568px;"></div>
                                    </div>

                                    <div class="d-flex d_sm_block pt-lg-1 small_text">
                                        <div>Employer's Address</div>
                                        <div>
                                            <input type="text" name="Employer Street address" id="" class="border-0 border-bottom responsive_input" style="width:400px;">
                                            <div class="text-center">(Street address)</div>

                                        </div>
                                        <div class="ms-lg-3">
                                            <input type="text" name="Employer City/Town" id="" class="border-0 border-bottom responsive_input" style="width:312px;">
                                            <div class="text-center">(City/Town)</div>
                                        </div>
                                        <div class="ms-lg-3">
                                            <input type="text" name="Employer State" id="" class="border-0 border-bottom responsive_input"  style="width:120px;">
                                            <div class="text-center">(State)</div>
                                        </div>
                                        <div class="ms-lg-3">
                                        <input type="text" name="Employer Zip" id="" class="border-0 border-bottom responsive_input"style="width:120px;" >
                                            <div class="text-center">(Zip)</div>
                                        </div>
                                    </div>

                                    <div class="d-flex d_sm_block pt-lg-1 small_text">
                                        <div>Tel. No.</div>
                                        <div><input type="number" name="Employer Tel. No" id="" class="border-0 border-bottom responsive_input" style="width:708px"></div>
                                        <div>Do you have health insurance coverage?</div>
                                        <div><input type="checkbox" name="health insurance coverage" value="Yes" id="" class="mx-2"> <span>Yes</span></div>
                                        <div><input type="checkbox" name="health insurance coverage" value="No" id="" class="mx-2"> <span>No</span></div>
                                    </div>

                                    <div class="d-flex d_sm_block pt-lg-1 small_text">
                                        <div>if yes, name of health insurance provider</div>
                                        <div><input type="text" name="name of health insurance provider" id="" class="border-0 border-bottom responsive_input" style="width:862px"></div>

                                    </div>
                                </div>
                                <div class="fw-bold pt-3">2. GROSS WEEKLY INCOME/RECEIPTS FROM ALL SOURCES</div>
                                <div class="ps-lg-5 pt-lg-1 small_text">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div> a) Base pay from  <input type="checkbox"  value="Yes"  name="Base pay from" class="mx-1" id=""> <span>Salary</span>    <input type="checkbox" name="Salary"  value="Yes"  class="mx-1" id=""> <span>Wages</span></div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="d-flex justify-content-md-end">
                                                <div>$</div>
                                                <div class="responsive_input"><input type="number" name="Wages  " class="border-0 border-bottom responsive_input"></div>
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
                                                <div class="responsive_input"><input type="number" name="Overtime" class="border-0 border-bottom responsive_input"></div>
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
                                                <div class="responsive_input"><input type="number" name="Part-time job" class="border-0 border-bottom responsive_input"></div>
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
                                                <div class="responsive_input"><input type="number" name="Self-employment" class="border-0 border-bottom responsive_input"></div>
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
                                                <div class="responsive_input"><input type="number" name="Tips" class="border-0 border-bottom responsive_input"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div> f) <input type="checkbox" name="Commissions"  value="Yes"   id="" class="ms-lg-3">
                                                <span>Commissions</span>
                                                <input type="checkbox" name="Bonuses"  value="Yes"  class="ms-lg-2" id="">
                                                <span>Bonuses</span>
                                        </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="d-flex justify-content-md-end">
                                                <div>$</div>
                                                <div class="responsive_input"><input type="number" name="Bonuses_val" class="border-0 border-bottom responsive_input"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div> g) <input type="checkbox" name="Dividends" value="Yes"   id="" class="ms-lg-3">
                                                <span>Dividends</span>
                                                <input type="checkbox" name="Interest"  value="Yes" class="ms-lg-4" id="">
                                                <span>Interest</span>
                                        </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="d-flex justify-content-md-end">
                                                <div>$</div>
                                                <div class="responsive_input"><input type="number" name="Interest_val" class="border-0 border-bottom responsive_input"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div> h) <input type="checkbox" value="Yes"  name="Trusts"  id="" class="ms-lg-3">
                                                <span>Trusts</span>
                                                <input type="checkbox" value="Yes"  name="Annuities" class="ms-lg-5" id="">
                                                <span>Annuities</span>
                                        </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="d-flex justify-content-md-end">
                                                <div>$</div>
                                                <div class="responsive_input"><input type="number" name="Annuities_val" class="border-0 border-bottom responsive_input"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div> i) <input type="checkbox" value="Yes"  name="Pensions"  id="" class="ms-lg-3">
                                                <span>Pensions</span>
                                                <input type="checkbox" value="Yes"  name="Retirement funds" class="ms-lg-4" id="">
                                                <span>Retirement funds</span>
                                        </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="d-flex justify-content-md-end">
                                                <div>$</div>
                                                <div class="responsive_input"><input type="number" name="Retirement funds_val" class="border-0 border-bottom responsive_input"></div>
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
                                                <div class="responsive_input"><input type="number" name="Social Security" class="border-0 border-bottom responsive_input"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="d-flex d_sm_block"> k) <input type="checkbox" value="Yes"  name="Disability" id="" class="ms-lg-3 me-1">
                                                <span>Disability</span>
                                                <input type="checkbox" value="Yes"  name="Unemployment insurance"  id="" class="ms-lg-3 me-1">
                                                <span> Unemployment insurance</span>
                                                <input type="checkbox" value="Yes"  name="Worker's compensation"  id="" class="ms-lg-3 me-1">
                                                <span> Worker's compensation</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="d-flex justify-content-md-end">
                                                <div>$</div>
                                                <div class="responsive_input"><input type="number" name="Worker's compensation_val" class="border-0 border-bottom responsive_input"></div>
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
                                                <div class="responsive_input"><input type="number" name="Public Assistance" class="border-0 border-bottom responsive_input"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="d-flex d_sm_block"> m) <input type="checkbox" value="Yes"  name="Child Support" id="" class="ms-lg-3 me-1">
                                                <span>Child Support</span>
                                                <input type="checkbox" value="Yes"  name="Alimony"  id="" class="ms-lg-3 me-1">
                                                <span> Alimony (actually received)</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="d-flex justify-content-md-end">
                                                <div>$</div>
                                                <div class="responsive_input"><input type="number" name="Alimony_val" class="border-0 border-bottom responsive_input"></div>
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
                                                <div class="responsive_input"><input type="number" name="Rental from income producing property" class="border-0 border-bottom responsive_input"></div>
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
                                                <div class="responsive_input"><input type="number" name="Royalties and other rights" class="border-0 border-bottom responsive_input"></div>
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
                                                <div class="responsive_input"><input type="number" name="Contributions from household member" class="border-0 border-bottom responsive_input"></div>
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
                                                <div class="responsive_input"><input type="number" name="Other1" class="border-0 border-bottom responsive_input"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-8 ps-lg-5">
                                            <div><input type="number" name="Other2" class="border-0 border-bottom responsive_input w-75"></div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="d-flex justify-content-md-end">
                                                <div>$</div>
                                                <div class="responsive_input"><input type="number" name="Other3" class="border-0 border-bottom responsive_input"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-8 ps-lg-5">
                                            <div><input type="number" name="Other4" class="border-0 border-bottom responsive_input w-75"></div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="d-flex justify-content-md-end">
                                                <div>$</div>
                                                <div class="responsive_input"><input type="number" name="Other5" class="border-0 border-bottom responsive_input"></div>
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
                                                <div class="responsive_input"><input type="number" name="Total Gross Weekly Income/Receipts" class="border-0 border-bottom responsive_input"></div>
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
                                    <input type="text" class="border-none border-0 border-bottom responsive_input shadow-none my-auto responsive_input" name="Name2">
                                </div>
                                <div class="d_sm_block">
                                    <div class="fw-bold text-center">Commonwealth of Massachusetts <br>The Trial Court <br> Probate and Family Court Department <br> FINANCIAL STATEMENT </div>
                                </div>
                                <div class="d-flex d_sm_block my-auto">
                                    <span>Docket No.</span>
                                    <input type="text" class="border-none border-0 border-bottom responsive_input shadow-none my-auto responsive_input" name="Docket No2">
                                </div>
                            </div>
                            <div class="text-center">(Short form)</div>
                            <div class="fw-bold pt-lg-2">3. ITEMIZED DEDUCTIONS FROM GROSS INCOME </div>
                            <div class="ps-lg-5 pt-lg-1 small_text">
                                <div class="row  mt-lg-1">
                                    <div class="col-lg-8 ">
                                        <div>a) Federal income tax deductions (claiming  <input type="text" name="Federal income tax deductions" id="" class="border-0 border-bottom"> exemptions) </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="d-flex justify-content-md-end">
                                            <div>$</div>
                                            <div class="responsive_input"><input type="number" name="Federal income tax deductions_val" class="border-0 border-bottom responsive_input"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row  mt-lg-1">
                                    <div class="col-lg-8 ">
                                        <div>b) State income tax deductions (claiming  <input type="text" name="State income tax deductions" id="" class="border-0 border-bottom"> exemptions) </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="d-flex justify-content-md-end">
                                            <div>$</div>
                                            <div class="responsive_input"><input type="number" name="State income tax deductions_val" class="border-0 border-bottom responsive_input"></div>
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
                                            <div class="responsive_input"><input type="number" name="F.I.C.A. and Medicare" class="border-0 border-bottom responsive_input"></div>
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
                                            <div class="responsive_input"><input type="number" name="Medical Insurance" class="border-0 border-bottom responsive_input"></div>
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
                                            <div class="responsive_input"><input type="number" name="Union Dues" class="border-0 border-bottom responsive_input"></div>
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
                                            <div class="responsive_input"><input type="number" name="Total Deductions" class="border-0 border-bottom responsive_input"></div>
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
                                        <div class="responsive_input"><input type="number" name="2(r) minus 3(f)" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="fw-bold">5. OTHER DEDUCTIONS FROM SALARY/WAGES</div>
                            <div class="ps-lg-5 pt-lg-1 small_text">
                                <div class="row  mt-lg-1">
                                    <div class="col-lg-8">
                                        <div>a) Credit Union  <input type="checkbox" name="Loan repayment" id="" class="ms-lg-3"  value="Yes" > Loan repayment <input type="checkbox" name="Savings" id="" class="ms-lg-3"  value="Yes" > Savings </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="d-flex justify-content-md-end">
                                            <div>$</div>
                                            <div class="responsive_input"><input type="number" name="Credit Union" class="border-0 border-bottom responsive_input"></div>
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
                                            <div class="responsive_input"><input type="number" name="Savings" class="border-0 border-bottom responsive_input"></div>
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
                                            <div class="responsive_input"><input type="number" name="Retirement" class="border-0 border-bottom responsive_input"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row  mt-lg-1">
                                    <div class="col-lg-8">
                                        <div>d) Other-Specify (i.e. Child Support, Deferred Compensation or 401K) <input type="text" name="Other-Specify" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="d-flex justify-content-md-end">
                                            <div>$</div>
                                            <div class="responsive_input"><input type="number" name="Other-Specify_val" class="border-0 border-bottom responsive_input"></div>
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
                                            <div class="responsive_input"><input type="number" name="Total Deductions" class="border-0 border-bottom responsive_input"></div>
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
                                        <div class="responsive_input"><input type="number" name="4 minus" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="fw-bold">7. GROSS YEARLY INCOME FROM PRIOR YEAR</div>
                            <div class="row  mt-lg-1 small_text">
                                <div class="col-lg-8 ps-lg-5">
                                    <div>(attach copy of all W-2 and 1099 forms for prior year) </div>

                                    <div class="pt-2 ps-lg-5 fw-bold">Number of Years you have paid into Social Security <input type="text" name="umber of Years you have paid into Social Security" id="" class="border-0 border-bottom"></div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>
                                        <div class="responsive_input"><input type="number" name="attach copy of all" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="fw-bold pt-lg-3">8. WEEKLY EXPENSES</div>
                            <div class="row small_text">
                                <div class="col-lg-6 ps-lg-5">
                                    <div class="d-flex justify-content-between d_sm_block ">
                                        <div>a) Rent or Mortage (PIT)</div>
                                         <div class="d-flex"><div>$</div><input type="number" name="Rent or Mortage" class="border-0 border-bottom responsive_input"></div>
                                    </div>

                                    <div class="d-flex justify-content-between d_sm_block">
                                        <div>b) Homeowners/Tenant Insurance</div>
                                        <div class="d-flex"><div>$</div><input type="number" name="Homeowners/Tenant Insurance" class="border-0 border-bottom responsive_input"></div>
                                    </div>

                                    <div class="d-flex justify-content-between d_sm_block">
                                        <div>c) Maintenance and Repair</div>
                                        <div class="d-flex"><div>$</div><input type="number" name="Maintenance and Repair" class="border-0 border-bottom responsive_input"></div>
                                    </div>

                                    <div class="d-flex justify-content-between d_sm_block">
                                        <div>d) Heat</div>
                                        <div class="d-flex"><div>$</div><input type="number" name="Heat" class="border-0 border-bottom responsive_input"></div>
                                    </div>

                                    <div class="d-flex justify-content-between d_sm_block">
                                        <div>e) Electricity and/or Gas</div>
                                        <div class="d-flex"><div>$</div><input type="number" name="Electricity and/or Gas" class="border-0 border-bottom responsive_input"></div>
                                    </div>

                                    <div class="d-flex justify-content-between d_sm_block">
                                        <div>f) Telephone</div>
                                        <div class="d-flex"><div>$</div><input type="number" name="Telephone" class="border-0 border-bottom responsive_input"></div>
                                    </div>

                                    <div class="d-flex justify-content-between d_sm_block">
                                        <div>g) Water/Sewer</div>
                                        <div class="d-flex"><div>$</div><input type="number" name="Water/Sewer" class="border-0 border-bottom responsive_input"></div>
                                    </div>

                                    <div class="d-flex justify-content-between d_sm_block">
                                        <div>h) Food</div>
                                        <div class="d-flex"><div>$</div><input type="number" name="Food" class="border-0 border-bottom responsive_input"></div>
                                    </div>

                                    <div class="d-flex justify-content-between d_sm_block">
                                        <div>i) House Supplies</div>
                                        <div class="d-flex"><div>$</div><input type="number" name="House Supplies" class="border-0 border-bottom responsive_input"></div>
                                    </div>

                                    <div class="d-flex justify-content-between d_sm_block">
                                        <div>j) Laundry and Cleaning</div>
                                        <div class="d-flex"><div>$</div><input type="number" name="Laundry and Cleaning" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                    <div class="d-flex justify-content-between d_sm_block">
                                        <div>k) Clothing</div>
                                        <div class="d-flex"><div>$</div><input type="number" name="Clothing" class="border-0 border-bottom responsive_input"></div>
                                    </div>

                                </div>
                                <div class="col-lg-6 ps-lg-5">
                                    <div class="d-flex justify-content-between d_sm_block">
                                        <div>l) Life Insurance</div>
                                        <div class="d-flex"><div>$</div><input type="number" name="Life Insurance" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                    <div class="d-flex justify-content-between d_sm_block">
                                        <div>m) Medical Insurance</div>
                                        <div class="d-flex"><div>$</div><input type="number" name="Medical Insurance" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                    <div class="d-flex justify-content-between d_sm_block">
                                        <div>n) Uninsured Medicals</div>
                                        <div class="d-flex"><div>$</div><input type="number" name="Uninsured Medicals" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                    <div class="d-flex justify-content-between d_sm_block">
                                        <div>o) Incidentals and Toiletries</div>
                                        <div class="d-flex"><div>$</div><input type="number" name="Incidentals and Toiletries" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                    <div class="d-flex justify-content-between d_sm_block">
                                        <div>p) Motor Vehicle Expenses</div>
                                        <div class="d-flex"><div>$</div><input type="number" name="Motor Vehicle Expenses" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                    <div class="d-flex justify-content-between d_sm_block">
                                        <div>q) Motor Vehicle Payment</div>
                                        <div class="d-flex"><div>$</div><input type="number" name="Motor Vehicle Payment" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                    <div class="d-flex justify-content-between d_sm_block">
                                        <div>r) Child Care</div>
                                        <div class="d-flex"><div>$</div><input type="number" name="Child Care" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                    <div class="d-flex justify-content-between d_sm_block">
                                        <div>s) Other (explain)</div>
                                        <div class="d-flex"><div>$</div><input type="number" name="Other (explain)1" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                    <div class="d-flex justify-content-between d_sm_block">
                                        <div><input type="number" name="Other (explain)2" class="border-0 border-bottom responsive_input"></div>
                                        <div class="d-flex"><div>$</div><input type="number" name="Other (explain)3" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                    <div class="d-flex justify-content-between d_sm_block">
                                        <div><input type="number" name="Other (explain)4" class="border-0 border-bottom responsive_input"></div>
                                        <div class="d-flex"><div>$</div><input type="number" name="Other (explain)5" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between  pt-lg-2">
                                    <div class="fw-bold mx-auto ">t) Total Weekly Expenses (a through s)</div>
                                    <div class="d-flex justify-content-end">$<input type="number" name="Total Weekly Expenses" class="border-0 border-bottom responsive_input"></div>
                                </div>
                            </div>
                            <div class="fw-bold pt-lg-3 pt-2">9. COUNSEL FEES</div>
                            <div class="ps-lg-5 small_text">
                                <div class="d-flex justify-content-between d_sm_block ">
                                    <div>a) Retainer amount(s) paid to your attorney(s)</div>
                                    <div class="d-flex"><div>$</div><input type="number" name="Retainer amount(s) paid to your attorney" class="border-0 border-bottom responsive_input"></div>
                                </div>
                                <div class="d-flex justify-content-between d_sm_block ">
                                    <div>b) Legal fees incurred, to date, against retainer(s)</div>
                                    <div class="d-flex"><div>$</div><input type="number" name="Legal fees incurred, to date" class="border-0 border-bottom responsive_input"></div>
                                </div>
                                <div class="d-flex justify-content-between d_sm_block ">
                                    <div>c) Anticipated range of total legal expense to litigate this action</div>
                                    <div class="d-flex"><div>$</div><input type="number" name="Anticipated range of total legal expense to litigate this action" class="border-0 border-bottom responsive_input"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @include('layouts.footer21', ['page' => 2])
                </section>
                <section class="section_area p-5" id="third_section">
                    <div class="row">
                        <div class="">
                            <div class="d-flex d_sm_block justify-content-between">
                                <div class="d-flex d_sm_block my-auto">
                                    <span>Name: </span>
                                    <input type="text" class="border-none border-0 border-bottom responsive_input shadow-none my-auto responsive_input" name="Name_3">
                                </div>
                                <div class="d_sm_block">
                                    <div class="fw-bold text-center">Commonwealth of Massachusetts <br>The Trial Court <br> Probate and Family Court Department <br> FINANCIAL STATEMENT </div>
                                </div>
                                <div class="d-flex d_sm_block my-auto">
                                    <span>Docket No.</span>
                                    <input type="text" class="border-none border-0 border-bottom responsive_input shadow-none my-auto responsive_input" name="Docket No_3">
                                </div>
                            </div>
                            <div class="text-center">(Short form)</div>
                            <div class="fw-bold pt-lg-2">10. ASSETS (attach additional sheet if necessary) </div>
                            <div class="ps-lg-5 small_text">
                                <div class="pt-lg-1">a) Real Estate</div>
                                <div class="row ps-lg-3">
                                    <div class="col-lg-8">
                                        <div>Location <input type="text" name="Real Estate" id="" class="border-0 border-bottom responsive_input" style="width:669px;"></div>
                                    </div>
                                    <div class="col-lg-4"></div>
                                </div>

                                <div class="row ps-lg-3">
                                    <div class="col-lg-8"> <div>Title held in the name of $<input type="text" name="Title held in the name of" id="" class="border-0 border-bottom responsive_input" style="width:553px;"></div>
                                    </div>
                                    <div class="col-lg-4"></div>
                                    <div class="row ps-lg-3">
                                        <div class="col-lg-4">
                                            <div> Fair Market Value <input type="text" name="Fair Market Value" id="" class="border-0 border-bottom responsive_input" style="width:222px;"></div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div> - Mortgage  $<input type="text" name="Mortgage" id="" class="border-0 border-bottom responsive_input" style="width:255px;"></div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="d-flex justify-content-md-end">
                                                <div>=Equity $</div>
                                                <div  class=" w-80"><input type="number" name="Equity" class="border-0 border-bottom responsive_input"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="pt-lg-1">b) Motor Vehicles</div>
                                <div class= " small_text">
                                <div class="row ps-lg-3">
                                    <div class="col-lg-4">
                                        <div> Fair Market Value <input type="text" name="Fair Market Value_2" id="" class="border-0 border-bottom responsive_input" style="width:222px;"></div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div> - Motor Vehicle Loan $<input type="text" name="Motor Vehicle Loan_2" id="" class="border-0 border-bottom responsive_input" style="width:191px                                                                                                                                    ;"></div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="d-flex justify-content-md-end">
                                            <div>=Equity $</div>
                                            <div  class=" w-80"><input type="number" name="Equity_2" class="border-0 border-bottom responsive_input"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row ps-lg-3">
                                    <div class="col-lg-4">
                                        <div> Fair Market Value <input type="text" name="Fair Market Value_3" id="" class="border-0 border-bottom responsive_input" style="width:222px;"></div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div> - Motor Vehicle Loan $<input type="text" name="Motor Vehicle Loan_3" id="" class="border-0 border-bottom responsive_input" style="width:191px                                                                                                                                    ;"></div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="d-flex justify-content-md-end">
                                            <div>=Equity $</div>
                                            <div  class=" w-80"><input type="number" name="Equity_3" class="border-0 border-bottom responsive_input"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-lg-1">c) IRA, Keogh, Pension, Profit Sharing, Other Retirement Plans: Financial Institution or Plan Name and Account Number</div>
                            <div class="row ps-lg-3">
                                <div class="col-lg-8">
                                    <div> <input type="text" name="IRA, Keogh, Pension, Profit Sharing, Other Retirement Plans1" id="" class="border-0 border-bottom responsive_input w-100" ></div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>
                                        <div class="responsive_input"><input type="number" name="IRA, Keogh, Pension, Profit Sharing, Other Retirement Plans_val1" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row ps-lg-3">
                                <div class="col-lg-8">
                                    <div> <input type="text" name="IRA, Keogh, Pension, Profit Sharing, Other Retirement Plans2" id="" class="border-0 border-bottom responsive_input w-100" ></div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>
                                        <div class="responsive_input"><input type="number" name="IRA, Keogh, Pension, Profit Sharing, Other Retirement Plans_val2" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row ps-lg-3">
                                <div class="col-lg-8">
                                    <div><input type="text" name="IRA, Keogh, Pension, Profit Sharing, Other Retirement Plans3" id="" class="border-0 border-bottom responsive_input w-100" ></div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>
                                        <div class="responsive_input"><input type="number" name="IRA, Keogh, Pension, Profit Sharing, Other Retirement Plans_val3" class="border-0 border-bottom responsive_input"></div>
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
                                        <div class="responsive_input"><input type="number" name="Present Cash Value" class="border-0 border-bottom responsive_input"></div>
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
                                        <div class="responsive_input"><input type="number" name="Savings & Checking Accounts, Money Market Accounts_val1" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="row ps-lg-3">
                                <div class="col-lg-8">
                                    <div>   <input type="text" name="Savings & Checking Accounts, Money Market Accounts1" id="" class="border-0 border-bottom responsive_input w-100" ></div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>
                                        <div  class="responsive_input"><input type="number" name="Savings & Checking Accounts, Money Market Accounts_val2" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="row ps-lg-3">
                                <div class="col-lg-8">
                                    <div>   <input type="text" name="Savings & Checking Accounts, Money Market Accounts2" id="" class="border-0 border-bottom responsive_input w-100" ></div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>
                                        <div  class="responsive_input"><input type="number" name="Savings & Checking Accounts, Money Market Accounts_val3" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="row ps-lg-3">
                                <div class="col-lg-8">
                                    <div class="responsive_input"><input type="text" name="Savings & Checking Accounts, Money Market Accounts3" id="" class="border-0 border-bottom responsive_input w-100" ></div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>
                                        <div class="responsive_input"><input type="number" name="Savings & Checking Accounts, Money Market Accounts_val4" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row pt-lg-1">
                                <div class="col-lg-8">
                                    <div> g) Other (e.g. stocks, bonds, collections)</div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>
                                        <div class="responsive_input"><input type="number" name="Other_val1" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row ps-lg-3">
                                <div class="col-lg-8">
                                    <div class="responsive_input"> <input type="text" name="Other1" id="" class="border-0 border-bottom responsive_input w-100" ></div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>
                                        <div class="responsive_input"><input type="number" name="Other_val2" class="border-0 border-bottom responsive_input"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row ps-lg-3">
                                <div class="col-lg-8">
                                    <div  class="responsive_input">   <input type="text" name="Other2" id="" class="border-0 border-bottom responsive_input w-100" ></div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-md-end">
                                        <div>$</div>
                                        <div class="responsive_input"><input type="number" name="Other_val3" class="border-0 border-bottom responsive_input"></div>
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
                                        <div class="responsive_input"><input type="number" name="Total Assets" class="border-0 border-bottom responsive_input"></div>
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
                                        <td><input type="text" name="Creditor1" id="" class="border-0 w-100"></td>
                                        <td><input type="text" name="Nature of Debt1" id="" class="border-0 w-100"></td>
                                        <td><input type="text" name="Date Incurred1" id="" class="border-0 w-100"></td>
                                        <td><div class="d-flex">$<input type="text" name="Amount Due1" id="" class="border-0 w-100"></div></td>
                                        <td><div class="d-flex">$<input type="text" name="Weekly Payment1" id="" class="border-0 w-100"></div></td>
                                    </tr>

                                    <tr>
                                        <td class="text-center px-2">b)</td>
                                        <td><input type="text" name="Creditor2" id="" class="border-0 w-100"></td>
                                        <td><input type="text" name="Nature of Debt2" id="" class="border-0 w-100"></td>
                                        <td><input type="text" name="Date Incurred2" id="" class="border-0 w-100"></td>
                                        <td><div class="d-flex">$<input type="text" name="Amount Due2" id="" class="border-0 w-100"></div></td>
                                        <td><div class="d-flex">$<input type="text" name="Weekly Payment2" id="" class="border-0 w-100"></div></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center px-2">c)</td>
                                        <td><input type="text" name="Creditor3" id="" class="border-0 w-100"></td>
                                        <td><input type="text" name="Nature of Debt3" id="" class="border-0 w-100"></td>
                                        <td><input type="text" name="Date Incurred3" id="" class="border-0 w-100"></td>
                                        <td><div class="d-flex">$<input type="text" name="Amount Due3" id="" class="border-0 w-100"></div></td>
                                        <td><div class="d-flex">$<input type="text" name="Weekly Payment3" id="" class="border-0 w-100"></div></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center px-2">d)</td>
                                        <td><input type="text" name="Creditor4" id="" class="border-0 w-100"></td>
                                        <td><input type="text" name="Nature of Debt4" id="" class="border-0 w-100"></td>
                                        <td><input type="text" name="Date Incurred4" id="" class="border-0 w-100"></td>
                                        <td><div class="d-flex">$<input type="text" name="Amount Due4" id="" class="border-0 w-100"></div></td>
                                        <td><div class="d-flex">$<input type="text" name="Weekly Payment4" id="" class="border-0 w-100"></div></td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-lg-6  fw-bold text-center">e) Total Liabilities</div>
                            <div class="col-lg-6 text-end  fw-bold"> <div class="border border-dark p-1 d-inline d_sm_block">$ <input type="text" name="Total Liabilities1" class="border-0 "></div>  <div class="border border-dark p-1 mt-3 mt-md-0  d-inline d_sm_block">$ <input type="text" name="Total Liabilities2" class="border-0 "></div></div>
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
                                    <input type="text" class="border-none border-0 border-bottom responsive_input shadow-none my-auto responsive_input" name="Name_4">
                                </div>
                                <div class="d_sm_block">
                                    <div class="fw-bold text-center">Commonwealth of Massachusetts <br>The Trial Court <br> Probate and Family Court Department <br> FINANCIAL STATEMENT </div>
                                </div>
                                <div class="d-flex d_sm_block my-auto">
                                    <span>Docket No.</span>
                                    <input type="text" class="border-none border-0 border-bottom responsive_input shadow-none my-auto responsive_input" name="Docket No_4">
                                </div>
                            </div>
                            <div class="text-center">(Short form)</div>
                            <div class="text-center"> <span class=" fw-bold border-bottom">CERTIFICATION</span></div>
                            <div class="fw-bold py-lg-3 small_text">I certify under the penalties of perjury that the information stated on this Financial Statement and the attached schedules, if any, is complete, true, and accurate. </div>
                            <div class="row small_text mb-lg-5">
                                <div class="col-lg-4">Date <input type="date" name="Date" id="" class="border-0 border-bottom responsive_input" style="width:335px;"></div>
                                <div class="col-lg-8">Signature <input type="text" name="Signature" id="" class="border-0 border-bottom responsive_input" style="width:702px;"></div>
                             </div>

                            <div class="mt-5 text-center"><b class="border-bottom">INSTRUCTIONS</b>: In any case where an attorney is appearing for a party, said attorney
                                MUST complete the Statement by Attorney.</div>
                                <div class="mt-2 text-center"><b class="border-bottom">STATEMENT BY ATTORNEY</b></div>
                                <div class="py-1 small_text">
                                    I the undersigned attorney, am admitted to practice law in the Commonwealth of Massachusetts--am admitted pro hoc vice for the purposes of this case-and am an officer of the court. As the attorney for the party on whose behalf this Financial Statement is submitted, I hereby state to the court that I have no knowledge that any of the information contained herein is false.
                                </div>


                                <div class="row small_text mb-lg-5">
                                    <div class="col-lg-4">Date <input type="Date_2" name="Date2" id="" class="border-0 border-bottom" style="width:335px;"></div>
                                    <div class="col-lg-3"></div>
                                    <div class="col-lg-5 ">
                                        <div>
                                            <input type="text" name="Signature of attorney1" id="" class="border-0 border-bottom w-100 responsive_input">
                                            <div class="small_text text-center">(Signature of attorney)</div>
                                        </div>
                                        <div class="pt-lg-2">
                                            <input type="text" name="Signature of attorney2" id="" class="border-0 border-bottom w-100 responsive_input">
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
                                                <input type="text" name="City/Town" id="" class="border-0 border-bottom responsive_input" style="width:203px;">
                                                <div class="text-center">(City/Town)</div>
                                            </div>
                                            <div class="ms-lg-3">
                                                <input type="text" name="State" id="" class="border-0 border-bottom responsive_input"  style="width:120px;">
                                                <div class="text-center">(State)</div>
                                            </div>
                                            <div class="ms-lg-3">
                                            <input type="text" name="Zip" id="" class="border-0 border-bottom responsive_input"style="width:120px;" >
                                                <div class="text-center">(Zip)</div>
                                            </div>
                                        </div>
                                        <div class="pt-lg-2">Tel. No.<input type="number" name="Tel. No_2" id="" class="border-0 border-bottom responsive_input" style="width:424px;">
                                        <div class="pt-lg-2">B.B.O. #<input type="text" name="B.B.O." id="" class="border-0 border-bottom responsive_input" style="width:420px;">
                                        </div>
                                    </div>
                                 </div>

                        </div>


                    </div>
                    @include('layouts.footer21', ['page' => 4])
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
        <select name="" id="" class="sectionSelect form-select                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      mx-auto ">
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
