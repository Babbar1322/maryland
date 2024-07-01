{{-- MA Financial Statement Schedule B (CJ-D 301)_06-05-2024_1346.pdf --}}
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
        @media screen and (max-width : 1600px) {
            .d_sm_block {
                display: block !important;
            }

            .responsive_input {
                width: 100% !important;
            }
        }

        @media screen and (max-width : 768px) {
            .d_sm_block {
                display: block !important;
            }

            .small_text {
                height: auto !important;
            }
            .responsive_input {
                width: 100% !important;
            }
.input_box {
    width: 100%;
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

        body {
            font-size: 18px !important;
        }

        .small_text {
            font-size: 15px;
        }

        .tdata input:focus {
            border-bottom: none !important;
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
                        <div class="fw-bold text-center">FINANCIAL STATEMENT SCHEDULE B</div>
                          <div class=" ">

                            <div class="d-flex justify-content-between">
                            <div class="d-flex d_sm_block">
                                <span>Name: </span>
                                <input type="text" class="border-none border-0 border-bottom responsive_input shadow-none my-auto responsive_input" name="plaintiff_name" style="width:475px;">
                            </div>
                            <div class="d-flex d_sm_block">
                                <span>Docket No.</span>
                                <input type="text" class="border-none border-0 border-bottom responsive_input shadow-none my-auto responsive_input" name="plaintiff_name" style="width:457px;">
                            </div>
                        </div>
                        <div class="text-center fw-bold">RENT FROM INCOME PRODUCING PROPERTY</div>
                        <div class="d-flex justify-content-between d_sm_block">ANNUAL RENT RECEIVED<span> <input type="text" name="" id="" class="border border-dark input_box  " ></span></div>

                        </div>

                        <div class="fw-bold  py-lg-3">ANNUAL RENTAL EXPENSES</div>
                        <div class="small_text d-flex justify-content-between d_sm_block">Advertising<span>$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></span></div>
                        <div class="small_text d-flex justify-content-between d_sm_block">Motor Vehicle and Travel<span>$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></span></div>
                        <div class="small_text d-flex justify-content-between d_sm_block">Insurance<span>$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></span></div>
                        <div class="small_text d-flex justify-content-between d_sm_block">Cleaning and maintenance<span>$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></span></div>
                        <div class="small_text d-flex justify-content-between d_sm_block ps-lg-5">Commissions<span>$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></span></div>
                        <div class="small_text d-flex justify-content-between d_sm_block ps-lg-5">Interest on mortgage to banks<span>$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></span></div>
                        <div class="small_text d-flex justify-content-between d_sm_block ps-lg-5">Other interest (specify)<span>$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></span></div>
                        <div class="small_text d-flex justify-content-between d_sm_block ps-lg-5"><input type="text" name="" id="" class=" w-50 border-0 border-bottom responsive_input" ><span>$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></span></div>
                        <div class="small_text d-flex justify-content-between d_sm_block ps-lg-5"><input type="text" name="" id="" class=" w-50 border-0 border-bottom responsive_input" ><span>$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></span></div>
                        <div class="small_text d-flex justify-content-between d_sm_block">Legal and professional services<span>$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></span></div>
                        <div class="small_text d-flex justify-content-between d_sm_block">Repairs<span>$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></span></div>
                        <div class="small_text d-flex justify-content-between d_sm_block">Supplies<span>$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></span></div>
                        <div class="small_text d-flex justify-content-between d_sm_block">Taxes<span>$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></span></div>
                        <div class="small_text d-flex justify-content-between d_sm_block">Utilities<span>$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></span></div>
                        <div class="small_text d-flex justify-content-between d_sm_block">Wages<span>$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></span></div>
                        <div class="small_text d-flex justify-content-between d_sm_block">Other expenses (specify)<span>$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></span></div>
                        <div class="small_text d-flex justify-content-between d_sm_block ps-lg-5"><input type="text" name="" id="" class="border-0 border-bottom responsive_input w-50" ><span>$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></span></div>
                        <div class="small_text d-flex justify-content-between d_sm_block ps-lg-5"><input type="text" name="" id="" class="border-0 border-bottom responsive_input w-50" ><span>$<input type="text" name="" id="" class="border-0 border-bottom responsive_input" ></span></div>
                        <div class="small_text d-flex justify-content-between d_sm_block fw-bold pt-2">TOTAL ANNUAL EXPENSES<span> <input type="number" name="" id="" class=" border input_box border-dark" ></span></div>
                        <div class="small_text d-flex justify-content-between d_sm_block fw-bold pt-2">TOTAL WEEKLY RENTAL INCOME (Gross rent received less expenses, divided by 52). Enter <br>this amount in Section II, line (n) of CJ-D 301-L or Section 2(n) of CJ-D 301-S<span> $    <input type="number" name="" id="" class=" border input_box border-dark" value=".00" ></span></div>
                    </div>
                    <div class="row  m-0 pt-3">
                        <div class="col-lg-6 col-8  mt-3 mt-lg-0 small_text text-dark fw-bold ">
                            <div class="small_text">CJ-D 301 Schedule B (4/07)</div>
                        </div>

                        <div class="col-lg-6 col-4 my-3 my-lg-0 text-end">
                            <div class="small_text">C.G.F.</div>
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
