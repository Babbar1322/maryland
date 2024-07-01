{{-- ME financial statement MJB-Form-fm-043 .pdf  --}}
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
                        <div class="fw-bold text-center">MAINE JUDICIAL BRANCH</div>
                        <div class="col-md-6 col-md-6   border-dark py-2">
                            <div class="d-flex d_sm_block"> <input type="text"
                                    class=" border-none border-0 border-bottom responsive_input  shadow-none my-auto w-75 responsive_input"
                                    name="plaintiff_name"> <span>Plaintiff</span> </div>
                            <div class="fs-6 pt-3">V.</div>
                            <div class="d-flex d_sm_block"> <input type="text"
                                    class=" border-none border-0 border-bottom responsive_input  shadow-none my-auto w-75 responsive_input"
                                    name="defendant_name"> <span>Defendant</span> </div>

                        </div>
                        <div class="col-md-6 border-start-0 border-end-0 border-dark pt-lg-3">
                            <div class="d-flex d_sm_block d_sm_block">
                                <div class="pe-1 my-auto">DISTRICT COURT</div>
                                <div class=" ">
                                </div>
                            </div>
                            <div class="d-flex d_sm_block d_sm_block">
                                <div class="pe-1 my-auto">Location (Town):</div>
                                <div class="w-75 responsive_input">
                                    <input type="text" name="location"
                                        class="w-100 border-none border-0 border-bottom responsive_input  shadow-none my-auto">
                                </div>
                            </div>

                            <div class="d-flex d_sm_block d_sm_block">
                                <div class="pe-1 my-auto">Docket No.:</div>
                                <div class="w-75 ms-lg-4 responsive_input">
                                    <input type="text" name="docket_no"
                                        class="w-100 border-none border-0 border-bottom responsive_input  shadow-none my-auto">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">

                        <div class="col-md-6 mx-auto text-center  border-1 px-0 ">
                            <div class="fs-6 pt-lg-4 fw-bold"> <input type="checkbox" name="plaintiffs_checkbox" value="PLAINTIFF’S"> PLAINTIFF’S
                                <input type="checkbox" name="defendants_checkbox" value="DEFENDANT’S"> DEFENDANT’S
                            </div>
                            <div class="fs-6  fw-bold">FINANCIAL STATEMENT</div>
                        </div>
                    </div>
                    <div class="border border-dark p-1"><b>PLEASE NOTE: If either party wishes to keep an address
                            confidential, that party may complete an Affidavit for
                            Confidential Address (FM-057).</b>This form is available at the Clerk’s Office or at <a
                            href="https://www.courts.maine.gov/" target="_blank">www.courts.maine.gov</a></div>
                    <div>
                        <div class="text-center fw-bold py-2">INSTRUCTIONS</div>

                        <div class="px-lg-2">The financial statement consists of two parts: Part 1, Assets and Debts of
                            Both Parties; and Part 2, Income and Expenses
                            (of the party completing this statement). You <b class="border-bottom">must</b> complete
                            Part 1. Complete Part 2 <b class="border-bottom">only</b> if spousal support (alimony) or
                            attorney fees are involved in your case. You must sign and file the original version of this
                            financial statement with the
                            court and send a copy to the other party three (3) business days before mediation, or as
                            otherwise ordered by the Court. </div>
                        <div class="py-2"><b>IMPORTANT:</b> If you intentionally or recklessly enter inaccurate or
                            misleading information on this form, the court may
                            order penalties and sanctions, including court costs and attorney fees.</div>

                        <div class="py-2 fw-bold"> <input type="checkbox" name="additional_page" id="" value="True"> Check here if
                            you have attached additional page(s) because you need more space to complete one or more
                            sections of this form. </div>
                        <div class="py-2 fw-bold text-center">PART 1 – ASSETS AND DEBTS OF BOTH PARTIES</div>
                        <div class="ps-lg-5 fw-bold">1. Parties' Assets</div>
                        <div class="ps-lg-5">a. Real Estate (Enter information about real estate held by both parties
                            together or individually):</div>

                        <div class="table-responsive">
                            <table class="table table-bordered border-dark">
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td class="text-center">Address</td>
                                        <td class="text-center">Name(s) on Title</td>
                                        <td class="text-center">County Recorded, Book and Page</td>
                                        <td class="text-center">Date Acquired (mm/dd/yyyy)</td>
                                        <td class="text-center">Fair Market Value</td>
                                        <td class="text-center">Debt Owed</td>
                                        <td class="text-center">Non-marital</td>
                                    </tr>
                                    <tr>
                                        <td class="px-2">1.</td>
                                        <td>
                                            <textarea name="aad_address1" class="border-0 form-control" rows="2"></textarea>
                                        </td>
                                        <td>
                                            <textarea name="aad_name1" class="border-0 form-control" rows="2"></textarea>
                                        </td>
                                        <td>
                                            <textarea name="aad_crb1" class="border-0 form-control" rows="2"></textarea>
                                        </td>
                                        <td>
                                            <textarea name="aad_da1" class="border-0 form-control" rows="2"></textarea>
                                        </td>
                                        <td>
                                            <div class="d-flex   w-100 mx-auto"> <span>$</span>
                                                <textarea type="number" name="aad_fmv1" class="border-0 form-control" rows="2"></textarea>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex   w-100 mx-auto"> <span>$</span>
                                                <textarea name="aad_do1" class="border-0 form-control" rows="2"></textarea>
                                            </div>
                                        </td>
                                        <td class="small_text">
                                            <div> <input type="checkbox" name="aad_nm1"  id=""
                                                    value="Yes"> Y </div>
                                            <div> <input type="checkbox" name="aad_nm1"  id=""
                                                    value="No"> N </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-2">2.</td>
                                        <td>
                                            <textarea name="aad_address2" class="border-0 form-control" rows="2"></textarea>
                                        </td>
                                        <td>
                                            <textarea name="aad_name2" class="border-0 form-control" rows="2"></textarea>
                                        </td>
                                        <td>
                                            <textarea name="aad_crb2" class="border-0 form-control" rows="2"></textarea>
                                        </td>
                                        <td>
                                            <textarea name="aad_da2" class="border-0 form-control" rows="2"></textarea>
                                        </td>
                                        <td>
                                            <div class="d-flex   w-100 mx-auto"> <span>$</span>
                                                <textarea name="aad_fmv2" class="border-0 form-control" rows="2"></textarea>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex   w-100 mx-auto"> <span>$</span>
                                                <textarea name="aad_do2" class="border-0 form-control" rows="2"></textarea>
                                            </div>
                                        </td>
                                        <td class="small_text">
                                            <div> <input type="checkbox" name="aad_nm2"  id=""
                                                    value="Yes"> Y </div>
                                            <div> <input type="checkbox" name="aad_nm2"  id=""
                                                    value="No"> N </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-2">3.</td>
                                        <td>
                                            <textarea name="aad_address3" class="border-0 form-control" rows="2"></textarea>
                                        </td>
                                        <td>
                                            <textarea name="aad_name3" class="border-0 form-control" rows="2"></textarea>
                                        </td>
                                        <td>
                                            <textarea name="aad_crb3" class="border-0 form-control" rows="2"></textarea>
                                        </td>
                                        <td>
                                            <textarea name="aad_da3" class="border-0 form-control" rows="2"></textarea>
                                        </td>
                                        <td>
                                            <div class="d-flex   w-100 mx-auto"> <span>$</span>
                                                <textarea name="aad_fmv3" class="border-0 form-control" rows="2"></textarea>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex   w-100 mx-auto"> <span>$</span>
                                                <textarea name="aad_do3" class="border-0 form-control" rows="2"></textarea>
                                            </div>
                                        </td>
                                        <td class="small_text">
                                            <div> <input type="checkbox" name="aad_nm3"  id="" value="Yes"> Y </div>
                                            <div> <input type="checkbox" name="aad_nm3"  id="" value="No"> N </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-2">4.</td>
                                        <td>
                                            <textarea name="aad_address4" class="border-0 form-control" rows="2"></textarea>
                                        </td>
                                        <td>
                                            <textarea name="aad_name4" class="border-0 form-control" rows="2"></textarea>
                                        </td>
                                        <td>
                                            <textarea name="aad_crb4" class="border-0 form-control" rows="2"></textarea>
                                        </td>
                                        <td>
                                            <textarea name="aad_da4" class="border-0 form-control" rows="2"></textarea>
                                        </td>
                                        <td>
                                            <div class="d-flex   w-100 mx-auto"> <span>$</span>
                                                <textarea name="aad_fmv4" class="border-0 form-control" rows="2"></textarea>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex   w-100 mx-auto"> <span>$</span>
                                                <textarea name="aad_do4" class="border-0 form-control" rows="2"></textarea>
                                            </div>
                                        </td>
                                        <td class="small_text">
                                            <div> <input type="checkbox" name="aad_nm4"  id="" value="Yes"> Y </div>
                                            <div> <input type="checkbox" name="aad_nm4"  id="" value="No"> N </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-2">5.</td>
                                        <td>
                                            <textarea name="aad_address5" class="border-0 form-control" rows="2"></textarea>
                                        </td>
                                        <td>
                                            <textarea name="aad_name5" class="border-0 form-control" rows="2"></textarea>
                                        </td>
                                        <td>
                                            <textarea name="aad_crb5" class="border-0 form-control" rows="2"></textarea>
                                        </td>
                                        <td>
                                            <textarea name="aad_da5" class="border-0 form-control" rows="2"></textarea>
                                        </td>
                                        <td>
                                            <div class="d-flex   w-100 mx-auto"> <span>$</span>
                                                <textarea name="aad_fmv5" class="border-0 form-control" rows="2"></textarea>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex   w-100 mx-auto"> <span>$</span>
                                                <textarea name="aad_do5" class="border-0 form-control" rows="2"></textarea>
                                            </div>
                                        </td>
                                        <td class="small_text">
                                            <div> <input type="checkbox" name="aad_nm5"  id="" value="Yes"> Y </div>
                                            <div> <input type="checkbox" name="aad_nm5"  id="" value="No"> N </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        @include('layouts.footer18', ['page' => 1])
                    </div>

                </section>
                <section class="section_area p-5" id="second_section">
                    <div class="fw-bold text-center">MAINE JUDICIAL BRANCH</div>
                    <div class="ps-lg-5">
                        b. <b>Motor Vehicles </b>(Enter information about your and your spouse’s motor vehicles, including cars, boats, trailers, motorcycles, aircrafts, etc.):
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered border-dark">
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td class="text-center">Year, Make, and Model</td>
                                    <td class="text-center">Name on Title</td>
                                    <td class="text-center">Date Acquired (mm/dd/yyyy)</td>
                                    <td class="text-center">Fair Market Value</td>
                                    <td class="text-center">Balance Due</td>
                                    <td class="text-center">Non-marital</td>
                                </tr>
                                <tr>
                                    <td class="px-2">1.</td>
                                    <td> <textarea name="mv_ymam1" class="border-0 form-control" rows="2"></textarea> </td>
                                    <td>  <textarea name="mv_not1" class="border-0 form-control" rows="2"></textarea>  </td>
                                    <td> <textarea name="mv_da1" class="border-0 form-control" rows="2"></textarea> </td>
                                    <td> <div class="d-flex w-100 mx-auto"> <span>$</span> <textarea name="mv_fmv1" class="border-0 form-control" rows="2"></textarea> </div>  </td>
                                    <td> <div class="d-flex w-100 mx-auto"> <span>$</span>  <textarea name="mv_bd1" class="border-0 form-control" rows="2"></textarea> </div>  </td>
                                    <td class="small_text">
                                        <div> <input type="checkbox" name="mv_nm1" id="" value="Yes"> Y </div>
                                        <div> <input type="checkbox" name="mv_nm1" id="" value="No"> N </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-2">2.</td>
                                    <td> <textarea name="mv_ymam2" class="border-0 form-control" rows="2"></textarea> </td>
                                    <td>  <textarea name="mv_not2" class="border-0 form-control" rows="2"></textarea>  </td>
                                    <td> <textarea name="mv_da2" class="border-0 form-control" rows="2"></textarea> </td>
                                    <td> <div class="d-flex w-100 mx-auto"> <span>$</span> <textarea name="mv_fmv2" class="border-0 form-control" rows="2"></textarea> </div>  </td>
                                    <td> <div class="d-flex w-100 mx-auto"> <span>$</span>  <textarea name="mv_bd2" class="border-0 form-control" rows="2"></textarea> </div>  </td>
                                    <td class="small_text">
                                        <div> <input type="checkbox" name="mv_nm2" id="" value="Yes"> Y </div>
                                        <div> <input type="checkbox" name="mv_nm2" id="" value="No"> N </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-2">3.</td>
                                    <td> <textarea name="mv_ymam3" class="border-0 form-control" rows="2"></textarea> </td>
                                    <td>  <textarea name="mv_not3" class="border-0 form-control" rows="2"></textarea>  </td>
                                    <td> <textarea name="mv_da3" class="border-0 form-control" rows="2"></textarea> </td>
                                    <td> <div class="d-flex w-100 mx-auto"> <span>$</span> <textarea name="mv_fmv3" class="border-0 form-control" rows="2"></textarea> </div>  </td>
                                    <td> <div class="d-flex w-100 mx-auto"> <span>$</span>  <textarea name="mv_bd3" class="border-0 form-control" rows="2"></textarea> </div>  </td>
                                    <td class="small_text">
                                        <div> <input type="checkbox" name="mv_nm3" id="" value="Yes"> Y </div>
                                        <div> <input type="checkbox" name="mv_nm3" id="" value="No"> N </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-2">4.</td>
                                    <td> <textarea name="mv_ymam4" class="border-0 form-control" rows="2"></textarea> </td>
                                    <td>  <textarea name="mv_not4" class="border-0 form-control" rows="2"></textarea>  </td>
                                    <td> <textarea name="mv_da4" class="border-0 form-control" rows="2"></textarea> </td>
                                    <td> <div class="d-flex w-100 mx-auto"> <span>$</span> <textarea name="mv_fmv4" class="border-0 form-control" rows="2"></textarea> </div>  </td>
                                    <td> <div class="d-flex w-100 mx-auto"> <span>$</span>  <textarea name="mv_bd4" class="border-0 form-control" rows="2"></textarea> </div>  </td>
                                    <td class="small_text">
                                        <div> <input type="checkbox" name="mv_nm4" id="" value="Yes"> Y </div>
                                        <div> <input type="checkbox" name="mv_nm4" id="" value="No"> N </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-2">5.</td>
                                    <td> <textarea name="mv_ymam5" class="border-0 form-control" rows="2"></textarea> </td>
                                    <td>  <textarea name="mv_not5" class="border-0 form-control" rows="2"></textarea>  </td>
                                    <td> <textarea name="mv_da5" class="border-0 form-control" rows="2"></textarea> </td>
                                    <td> <div class="d-flex w-100 mx-auto"> <span>$</span> <textarea name="mv_fmv5" class="border-0 form-control" rows="2"></textarea> </div>  </td>
                                    <td> <div class="d-flex w-100 mx-auto"> <span>$</span>  <textarea name="mv_bd5" class="border-0 form-control" rows="2"></textarea> </div>  </td>
                                    <td class="small_text">
                                        <div> <input type="checkbox" name="mv_nm5" id="" value="Yes"> Y </div>
                                        <div> <input type="checkbox" name="mv_nm5" id="" value="No"> N </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="ps-lg-5">c. <b>Tangible personal property with a value over $500 each</b> (Enter information about personal property of you and your spouse. Examples may include televisions, laptops, furniture, jewelry):
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered border-dark">
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td class="text-center">Description of each item</td>
                                    <td class="text-center">Date Acquired (mm/dd/yyyy)</td>
                                    <td class="text-center">Fair Market Value</td>
                                    <td class="text-center">Balance Due</td>
                                    <td class="text-center">Non-marital</td>
                                </tr>
                                <tr>
                                    <td class="px-2">1.</td>
                                    <td>  <textarea name="tp_dei1" class="border-0 form-control" rows="2"></textarea> </td>
                                    <td> <textarea name="tp_da1" class="border-0 form-control" rows="2"></textarea> </td>
                                    <td> <div class="d-flex w-100 mx-auto"> <span>$</span> <textarea name="tp_fmv1" class="border-0 form-control" rows="2"></textarea> </div> </td>
                                    <td> <div class="d-flex w-100 mx-auto"> <span>$</span>  <textarea name="tp_bu1" class="border-0 form-control" rows="2"></textarea> </div> </td>
                                    <td>
                                        <div class="small_text"> <input type="checkbox" name="tp_nm1" id="" value="Yes"> Y </div>
                                        <div class="small_text"> <input type="checkbox" name="tp_nm1" id="" value="No"> N </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-2">2.</td>
                                    <td>  <textarea name="tp_dei2" class="border-0 form-control" rows="2"></textarea> </td>
                                    <td> <textarea name="tp_da2" class="border-0 form-control" rows="2"></textarea> </td>
                                    <td> <div class="d-flex w-100 mx-auto"> <span>$</span> <textarea name="tp_fmv2" class="border-0 form-control" rows="2"></textarea> </div> </td>
                                    <td> <div class="d-flex w-100 mx-auto"> <span>$</span>  <textarea name="tp_bu2" class="border-0 form-control" rows="2"></textarea> </div> </td>
                                    <td>
                                        <div class="small_text"> <input type="checkbox" name="tp_nm2" id="" value="Yes"> Y </div>
                                        <div class="small_text"> <input type="checkbox" name="tp_nm2" id="" value="No"> N </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-2">3.</td>
                                    <td>  <textarea name="tp_dei3" class="border-0 form-control" rows="2"></textarea> </td>
                                    <td> <textarea name="tp_da3" class="border-0 form-control" rows="2"></textarea> </td>
                                    <td> <div class="d-flex w-100 mx-auto"> <span>$</span> <textarea name="tp_fmv3" class="border-0 form-control" rows="2"></textarea> </div> </td>
                                    <td> <div class="d-flex w-100 mx-auto"> <span>$</span>  <textarea name="tp_bu3" class="border-0 form-control" rows="2"></textarea> </div> </td>
                                    <td>
                                        <div class="small_text"> <input type="checkbox" name="tp_nm3" id="" value="Yes"> Y </div>
                                        <div class="small_text"> <input type="checkbox" name="tp_nm3" id="" value="No"> N </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-2">4.</td>
                                    <td>  <textarea name="tp_dei4" class="border-0 form-control" rows="2"></textarea> </td>
                                    <td> <textarea name="tp_da4" class="border-0 form-control" rows="2"></textarea> </td>
                                    <td> <div class="d-flex w-100 mx-auto"> <span>$</span> <textarea name="tp_fmv4" class="border-0 form-control" rows="2"></textarea> </div> </td>
                                    <td> <div class="d-flex w-100 mx-auto"> <span>$</span>  <textarea name="tp_bu4" class="border-0 form-control" rows="2"></textarea> </div> </td>
                                    <td>
                                        <div class="small_text"> <input type="checkbox" name="tp_nm4" id="" value="Yes"> Y </div>
                                        <div class="small_text"> <input type="checkbox" name="tp_nm4" id="" value="No"> N </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-2">5.</td>
                                    <td>  <textarea name="tp_dei5" class="border-0 form-control" rows="2"></textarea> </td>
                                    <td> <textarea name="tp_da5" class="border-0 form-control" rows="2"></textarea> </td>
                                    <td> <div class="d-flex w-100 mx-auto"> <span>$</span> <textarea name="tp_fmv5" class="border-0 form-control" rows="2"></textarea> </div> </td>
                                    <td> <div class="d-flex w-100 mx-auto"> <span>$</span>  <textarea name="tp_bu5" class="border-0 form-control" rows="2"></textarea> </div> </td>
                                    <td>
                                        <div class="small_text"> <input type="checkbox" name="tp_nm5" id="" value="Yes"> Y </div>
                                        <div class="small_text"> <input type="checkbox" name="tp_nm5" id="" value="No"> N </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-2">6.</td>
                                    <td>  <textarea name="tp_dei6" class="border-0 form-control" rows="2"></textarea> </td>
                                    <td> <textarea name="tp_da6" class="border-0 form-control" rows="2"></textarea> </td>
                                    <td> <div class="d-flex w-100 mx-auto"> <span>$</span> <textarea name="tp_fmv6" class="border-0 form-control" rows="2"></textarea> </div> </td>
                                    <td> <div class="d-flex w-100 mx-auto"> <span>$</span>  <textarea name="tp_bu6" class="border-0 form-control" rows="2"></textarea> </div> </td>
                                    <td>
                                        <div class="small_text"> <input type="checkbox" name="tp_nm6" id="" value="Yes"> Y </div>
                                        <div class="small_text"> <input type="checkbox" name="tp_nm6" id="" value="No"> N </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-2">7.</td>
                                    <td>  <textarea name="tp_dei7" class="border-0 form-control" rows="2"></textarea> </td>
                                    <td> <textarea name="tp_da7" class="border-0 form-control" rows="2"></textarea> </td>
                                    <td> <div class="d-flex w-100 mx-auto"> <span>$</span> <textarea name="tp_fmv7" class="border-0 form-control" rows="2"></textarea> </div> </td>
                                    <td> <div class="d-flex w-100 mx-auto"> <span>$</span>  <textarea name="tp_bu7" class="border-0 form-control" rows="2"></textarea> </div> </td>
                                    <td>
                                        <div class="small_text"> <input type="checkbox" name="tp_nm7" id="" value="Yes"> Y </div>
                                        <div class="small_text"> <input type="checkbox" name="tp_nm7" id="" value="No"> N </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-2">8.</td>
                                    <td>  <textarea name="tp_dei8" class="border-0 form-control" rows="2"></textarea> </td>
                                    <td> <textarea name="tp_da8" class="border-0 form-control" rows="2"></textarea> </td>
                                    <td> <div class="d-flex w-100 mx-auto"> <span>$</span> <textarea name="tp_fmv8" class="border-0 form-control" rows="2"></textarea> </div> </td>
                                    <td> <div class="d-flex w-100 mx-auto"> <span>$</span>  <textarea name="tp_bu8" class="border-0 form-control" rows="2"></textarea> </div> </td>
                                    <td>
                                        <div class="small_text"> <input type="checkbox" name="tp_nm8" id="" value="Yes"> Y </div>
                                        <div class="small_text"> <input type="checkbox" name="tp_nm8" id="" value="No"> N </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-2">9.</td>
                                    <td>  <textarea name="tp_dei9" class="border-0 form-control" rows="2"></textarea> </td>
                                    <td> <textarea name="tp_da9" class="border-0 form-control" rows="2"></textarea> </td>
                                    <td> <div class="d-flex w-100 mx-auto"> <span>$</span> <textarea name="tp_fmv9" class="border-0 form-control" rows="2"></textarea> </div> </td>
                                    <td> <div class="d-flex w-100 mx-auto"> <span>$</span>  <textarea name="tp_bu9" class="border-0 form-control" rows="2"></textarea> </div> </td>
                                    <td>
                                        <div class="small_text"> <input type="checkbox" name="tp_nm9" id="" value="Yes"> Y </div>
                                        <div class="small_text"> <input type="checkbox" name="tp_nm9" id="" value="No"> N </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-2">10.</td>
                                     <td>  <textarea name="tp_dei10" class="border-0 form-control" rows="2"></textarea> </td>
                                    <td> <textarea name="tp_da10" class="border-0 form-control" rows="2"></textarea> </td>
                                    <td> <div class="d-flex w-100 mx-auto"> <span>$</span> <textarea name="tp_fmv10" class="border-0 form-control" rows="2"></textarea> </div> </td>
                                    <td> <div class="d-flex w-100 mx-auto"> <span>$</span>  <textarea name="tp_bu10" class="border-0 form-control" rows="2"></textarea> </div> </td>
                                    <td>
                                        <div class="small_text"> <input type="checkbox" name="tp_nm10" id="" value="Yes"> Y </div>
                                        <div class="small_text"> <input type="checkbox" name="tp_nm10" id="" value="No"> N </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="ps-lg-5 mb-5">
                        d. Cash amount (Enter the amount of cash you and your spouse have in your possession that is not
                        in a bank account): $ <input type="text" name="tp_cash_amount" id="" class="border-0 border-bottom responsive_input">
                    </div>
                    <div class="pt-lg-5">

                        @include('layouts.footer18', ['page' => 2])
                    </div>
                </section>
                <section class="section_area p-5" id="third_section">
                    <div class="fw-bold text-center">MAINE JUDICIAL BRANCH</div>
                    <div class="ps-lg-5">
                        b. <b>Bank Accounts</b>(Enter information about savings and checking accounts, money market  accounts, certificates of deposit, etc. held by you and your spouse):
                    </div>

                    <div class="table-responsive">
                        <table class="table table-bordered border-dark">
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td class="text-center">Name of Bank</td>
                                    <td class="text-center">Name(s) on Account</td>
                                    <td class="text-center">Account Number</td>
                                    <td class="text-center">Type of Account</td>
                                    <td class="text-center">Balance</td>
                                    <td class="text-center">Non-marital</td>
                                </tr>
                                <tr>
                                    <td class="px-2">1.</td>
                                    <td><textarea name="ba_nob1" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><textarea name="ba_noa1" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><textarea name="ba_an1" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><textarea name="ba_toa1" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><div class="d-flex w-100 mx-auto"> <span>$</span> <textarea name="ba_b1" class="border-0 form-control" rows="2"></textarea></div></td>
                                    <td>
                                        <div class="small_text"> <input type="checkbox" name="ba_nm1" id="" value="Yes"> Y </div>
                                        <div class="small_text"> <input type="checkbox" name="ba_nm1" id="" value="No"> N </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-2">2.</td>
                                    <td><textarea name="ba_nob2" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><textarea name="ba_noa2" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><textarea name="ba_an2" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><textarea name="ba_toa2" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><div class="d-flex w-100 mx-auto"> <span>$</span> <textarea name="ba_b2" class="border-0 form-control" rows="2"></textarea></div></td>
                                    <td>
                                        <div class="small_text"> <input type="checkbox" name="ba_nm2" id="" value="Yes"> Y </div>
                                        <div class="small_text"> <input type="checkbox" name="ba_nm2" id="" value="No"> N </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-2">3.</td>
                                    <td><textarea name="ba_nob3" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><textarea name="ba_noa3" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><textarea name="ba_an3" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><textarea name="ba_toa3" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><div class="d-flex w-100 mx-auto"> <span>$</span> <textarea name="ba_b3" class="border-0 form-control" rows="2"></textarea></div></td>
                                    <td>
                                        <div class="small_text"> <input type="checkbox" name="ba_nm3" id="" value="Yes"> Y </div>
                                        <div class="small_text"> <input type="checkbox" name="ba_nm3" id="" value="No"> N </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-2">4.</td>
                                    <td><textarea name="ba_nob4" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><textarea name="ba_noa4" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><textarea name="ba_an4" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><textarea name="ba_toa4" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><div class="d-flex w-100 mx-auto"> <span>$</span> <textarea name="ba_b4" class="border-0 form-control" rows="2"></textarea></div></td>
                                    <td>
                                        <div class="small_text"> <input type="checkbox" name="ba_nm4" id="" value="Yes"> Y </div>
                                        <div class="small_text"> <input type="checkbox" name="ba_nm4" id="" value="No"> N </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-2">5.</td>
                                    <td><textarea name="ba_nob5" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><textarea name="ba_noa5" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><textarea name="ba_an5" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><textarea name="ba_toa5" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><div class="d-flex w-100 mx-auto"> <span>$</span> <textarea name="ba_b5" class="border-0 form-control" rows="2"></textarea></div></td>
                                    <td>
                                        <div class="small_text"> <input type="checkbox" name="ba_nm5" id="" value="Yes"> Y </div>
                                        <div class="small_text"> <input type="checkbox" name="ba_nm5" id="" value="No"> N </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-2">6.</td>
                                    <td><textarea name="ba_nob6" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><textarea name="ba_noa6" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><textarea name="ba_an6" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><textarea name="ba_toa6" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><div class="d-flex w-100 mx-auto"> <span>$</span> <textarea name="ba_b6" class="border-0 form-control" rows="2"></textarea></div></td>
                                    <td>
                                        <div class="small_text"> <input type="checkbox" name="ba_nm6" id="" value="Yes"> Y </div>
                                        <div class="small_text"> <input type="checkbox" name="ba_nm6" id="" value="No"> N </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-2">7.</td>
                                    <td><textarea name="ba_nob7" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><textarea name="ba_noa7" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><textarea name="ba_an7" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><textarea name="ba_toa7" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><div class="d-flex w-100 mx-auto"> <span>$</span> <textarea name="ba_b7" class="border-0 form-control" rows="2"></textarea></div></td>
                                    <td>
                                        <div class="small_text"> <input type="checkbox" name="ba_nm7" id="" value="Yes"> Y </div>
                                        <div class="small_text"> <input type="checkbox" name="ba_nm7" id="" value="No"> N </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-2">8.</td>
                                    <td><textarea name="ba_nob8" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><textarea name="ba_noa8" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><textarea name="ba_an8" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><textarea name="ba_toa8" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><div class="d-flex w-100 mx-auto"> <span>$</span> <textarea name="ba_b8" class="border-0 form-control" rows="2"></textarea></div></td>
                                    <td>
                                        <div class="small_text"> <input type="checkbox" name="ba_nm8" id="" value="Yes"> Y </div>
                                        <div class="small_text"> <input type="checkbox" name="ba_nm8" id="" value="No"> N </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-2">9.</td>
                                    <td><textarea name="ba_nob9" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><textarea name="ba_noa9" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><textarea name="ba_an9" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><textarea name="ba_toa9" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><div class="d-flex w-100 mx-auto"> <span>$</span> <textarea name="ba_b9" class="border-0 form-control" rows="2"></textarea></div></td>
                                    <td>
                                        <div class="small_text"> <input type="checkbox" name="ba_nm9" id="" value="Yes"> Y </div>
                                        <div class="small_text"> <input type="checkbox" name="ba_nm9" id="" value="No"> N </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-2">10.</td>
                                    <td><textarea name="ba_nob10" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><textarea name="ba_noa10" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><textarea name="ba_an10" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><textarea name="ba_toa10" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><div class="d-flex w-100 mx-auto"> <span>$</span> <textarea name="ba_b10" class="border-0 form-control" rows="2"></textarea></div></td>
                                    <td>
                                        <div class="small_text"> <input type="checkbox" name="ba_nm10" id="" value="Yes"> Y </div>
                                        <div class="small_text"> <input type="checkbox" name="ba_nm10" id="" value="No"> N </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="ps-lg-5">f. Retirement Benefits and Deferred Compensation (Enter information about vested and non-vested retirement benefits, including pension plans, annuities, IRAs, 401(k)s, 403(b)s, and SEPs held by you and your spouse):</div>

                    <div class="table-responsive mb-5">
                        <table class="table table-bordered border-dark">
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td class="text-center">Name of Plan</td>
                                    <td class="text-center">Name of Account Holder</td>
                                    <td class="text-center">Type of Plan</td>
                                    <td class="text-center">Fair Market Value or Account Balance</td>
                                    <td class="text-center">Non-marital</td>
                                </tr>
                                <tr>
                                    <td class="px-2">1.</td>
                                    <td><textarea name="rb_nop1" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><textarea name="rb_noah1" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><textarea name="rb_top1" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><div class="d-flex w-100 mx-auto"> <span>$</span><textarea name="rb_fmv1" class="border-0 form-control" rows="2"></textarea></div></td>
                                    <td>
                                        <div class="small_text"> <input type="checkbox" name="rb_nm1"id="" value="Yes"> Y </div>
                                        <div class="small_text"> <input type="checkbox" name="rb_nm1"id="" value="No"> N </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-2">2.</td>
                                    <td><textarea name="rb_nop2" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><textarea name="rb_noah2" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><textarea name="rb_top2" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><div class="d-flex w-100 mx-auto"> <span>$</span><textarea name="rb_fmv2" class="border-0 form-control" rows="2"></textarea></div></td>
                                    <td>
                                        <div class="small_text"> <input type="checkbox" name="rb_nm2"id="" value="Yes"> Y </div>
                                        <div class="small_text"> <input type="checkbox" name="rb_nm2"id="" value="No"> N </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-2">3.</td>
                                    <td><textarea name="rb_nop3" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><textarea name="rb_noah3" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><textarea name="rb_top3" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><div class="d-flex w-100 mx-auto"> <span>$</span><textarea name="rb_fmv3" class="border-0 form-control" rows="2"></textarea></div></td>
                                    <td>
                                        <div class="small_text"> <input type="checkbox" name="rb_nm3"id="" value="Yes"> Y </div>
                                        <div class="small_text"> <input type="checkbox" name="rb_nm3"id="" value="No"> N </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-2">4.</td>
                                    <td><textarea name="rb_nop4" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><textarea name="rb_noah4" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><textarea name="rb_top4" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><div class="d-flex w-100 mx-auto"> <span>$</span><textarea name="rb_fmv4" class="border-0 form-control" rows="2"></textarea></div></td>
                                    <td>
                                        <div class="small_text"> <input type="checkbox" name="rb_nm4"id="" value="Yes"> Y </div>
                                        <div class="small_text"> <input type="checkbox" name="rb_nm4"id="" value="No"> N </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-2">5.</td>
                                    <td><textarea name="rb_nop5" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><textarea name="rb_noah5" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><textarea name="rb_top5" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><div class="d-flex w-100 mx-auto"> <span>$</span><textarea name="rb_fmv5" class="border-0 form-control" rows="2"></textarea></div></td>
                                    <td>
                                        <div class="small_text"> <input type="checkbox" name="rb_nm5"id="" value="Yes"> Y </div>
                                        <div class="small_text"> <input type="checkbox" name="rb_nm5"id="" value="No"> N </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                    <div class="pt-lg-5">

                        @include('layouts.footer18', ['page' => 3])
                    </div>
                </section>
                <section class="section_area p-5" id="fourth_section">
                    <div class="fw-bold text-center">MAINE JUDICIAL BRANCH</div>
                    <div class="ps-lg-5">g. <b> Investment/Brokerage Accounts, Mutual Funds, Securities Stocks, Bonds, Options, ESOPs, and Secured or Unsecured Notes</b> (Enter information about those held by you and your spouse): </div>
                    <div class="table-responsive">
                        <table class="table table-bordered border-dark">
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td class="text-center">Company Name</td>
                                    <td class="text-center">Type</td>
                                    <td class="text-center">Owner</td>
                                    <td class="text-center">Fair Market Value</td>
                                    <td class="text-center">Non-marital</td>
                                </tr>
                                <tr>
                                    <td class="px-2">1.</td>
                                    <td><textarea name="iba_cn1" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><textarea name="iba_t1" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><textarea name="iba_o1" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><div class="d-flex w-100 mx-auto"> <span>$</span><textarea name="iba_fmv1" class="border-0 form-control" rows="2"></textarea></div></td>
                                    <td>
                                        <div class="small_text"> <input type="checkbox" name="iba_nm1" id="" value="Yes"> Y </div>
                                        <div class="small_text"> <input type="checkbox" name="iba_nm1" id="" value="No"> N </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-2">2.</td>
                                    <td><textarea name="iba_cn2" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><textarea name="iba_t2" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><textarea name="iba_o2" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><div class="d-flex w-100 mx-auto"> <span>$</span><textarea name="iba_fmv2" class="border-0 form-control" rows="2"></textarea></div></td>
                                    <td>
                                        <div class="small_text"> <input type="checkbox" name="iba_nm2" id="" value="Yes"> Y </div>
                                        <div class="small_text"> <input type="checkbox" name="iba_nm2" id="" value="No"> N </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-2">3.</td>
                                    <td><textarea name="iba_cn3" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><textarea name="iba_t3" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><textarea name="iba_o3" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><div class="d-flex w-100 mx-auto"> <span>$</span><textarea name="iba_fmv3" class="border-0 form-control" rows="2"></textarea></div></td>
                                    <td>
                                        <div class="small_text"> <input type="checkbox" name="iba_nm3" id="" value="Yes"> Y </div>
                                        <div class="small_text"> <input type="checkbox" name="iba_nm3" id="" value="No"> N </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-2">4.</td>
                                    <td><textarea name="iba_cn4" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><textarea name="iba_t4" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><textarea name="iba_o4" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><div class="d-flex w-100 mx-auto"> <span>$</span><textarea name="iba_fmv4" class="border-0 form-control" rows="2"></textarea></div></td>
                                    <td>
                                        <div class="small_text"> <input type="checkbox" name="iba_nm4" id="" value="Yes"> Y </div>
                                        <div class="small_text"> <input type="checkbox" name="iba_nm4" id="" value="No"> N </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-2">5.</td>
                                    <td><textarea name="iba_cn5" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><textarea name="iba_t5" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><textarea name="iba_o5" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><div class="d-flex w-100 mx-auto"> <span>$</span><textarea name="iba_fmv5" class="border-0 form-control" rows="2"></textarea></div></td>
                                    <td>
                                        <div class="small_text"> <input type="checkbox" name="iba_nm5" id="" value="Yes"> Y </div>
                                        <div class="small_text"> <input type="checkbox" name="iba_nm5" id="" value="No"> N </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="ps-lg-5">h. <b> Business Interests </b> (Enter information about you and your spouse’s business interests. Under “Type,” enter whether the business is a corporation, S Corp, LLC, etc.):</div>
                    <div class="table-responsive">
                        <table class="table table-bordered border-dark">
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td class="text-center">Name of Business</td>
                                    <td class="text-center">Type</td>
                                    <td class="text-center">% of Ownership</td>
                                    <td class="text-center">Debt</td>
                                    <td class="text-center">Fair Market Value</td>
                                    <td class="text-center">Non-marital</td>
                                </tr>
                                <tr>
                                    <td class="px-2">1.</td>
                                    <td><textarea name="bi_nob1" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><textarea name="bi_t1" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><textarea name="bi_o1" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><div class="d-flex w-100 mx-auto"> <span>$</span><textarea name="bi_b1" class="border-0 form-control" rows="2"></textarea></div></td>
                                    <td><div class="d-flex w-100 mx-auto"> <span>$</span><textarea name="bi_fmv1" class="border-0 form-control" rows="2"></textarea></div></td>
                                    <td>
                                        <div class="small_text"> <input type="checkbox" name="bi_nm1" id="" value="Yes"> Y </div>
                                        <div class="small_text"> <input type="checkbox" name="bi_nm1" id="" value="No"> N </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-2">2.</td>
                                    <td><textarea name="bi_nob2" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><textarea name="bi_t2" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><textarea name="bi_o2" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><div class="d-flex w-100 mx-auto"> <span>$</span><textarea name="bi_b2" class="border-0 form-control" rows="2"></textarea></div></td>
                                    <td><div class="d-flex w-100 mx-auto"> <span>$</span><textarea name="bi_fmv2" class="border-0 form-control" rows="2"></textarea></div></td>
                                    <td>
                                        <div class="small_text"> <input type="checkbox" name="bi_nm2" id="" value="Yes"> Y </div>
                                        <div class="small_text"> <input type="checkbox" name="bi_nm2" id="" value="No"> N </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-2">3.</td>
                                    <td><textarea name="bi_nob3" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><textarea name="bi_t3" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><textarea name="bi_o3" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><div class="d-flex w-100 mx-auto"> <span>$</span><textarea name="bi_b3" class="border-0 form-control" rows="2"></textarea></div></td>
                                    <td><div class="d-flex w-100 mx-auto"> <span>$</span><textarea name="bi_fmv3" class="border-0 form-control" rows="2"></textarea></div></td>
                                    <td>
                                        <div class="small_text"> <input type="checkbox" name="bi_nm3" id="" value="Yes"> Y </div>
                                        <div class="small_text"> <input type="checkbox" name="bi_nm3" id="" value="No"> N </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-2">4.</td>
                                    <td><textarea name="bi_nob4" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><textarea name="bi_t4" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><textarea name="bi_o4" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><div class="d-flex w-100 mx-auto"> <span>$</span><textarea name="bi_b4" class="border-0 form-control" rows="2"></textarea></div></td>
                                    <td><div class="d-flex w-100 mx-auto"> <span>$</span><textarea name="bi_fmv4" class="border-0 form-control" rows="2"></textarea></div></td>
                                    <td>
                                        <div class="small_text"> <input type="checkbox" name="bi_nm4" id="" value="Yes"> Y </div>
                                        <div class="small_text"> <input type="checkbox" name="bi_nm4" id="" value="No"> N </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-2">5.</td>
                                    <td><textarea name="bi_nob5" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><textarea name="bi_t5" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><textarea name="bi_o5" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><div class="d-flex w-100 mx-auto"> <span>$</span><textarea name="bi_b5" class="border-0 form-control" rows="2"></textarea></div></td>
                                    <td><div class="d-flex w-100 mx-auto"> <span>$</span><textarea name="bi_fmv5" class="border-0 form-control" rows="2"></textarea></div></td>
                                    <td>
                                        <div class="small_text"> <input type="checkbox" name="bi_nm5" id="" value="Yes"> Y </div>
                                        <div class="small_text"> <input type="checkbox" name="bi_nm5" id="" value="No"> N </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="ps-lg-5">i. <b> Life Insurance Policies </b> (Enter information about each life insurance policy you have for yourself, your spouse, or your children. Also enter information about policies held by your spouse.): </div>
                    <div class="table-responsive">
                        <table class="table table-bordered border-dark">
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td class="text-center">Name of Insurance Company</td>
                                    <td class="text-center">Type of Policy </td>
                                    <td class="text-center">Name of Insured/Owner</td>
                                    <td class="text-center">Beneficiar(ies)</td>
                                    <td class="text-center">Death Benefit</td>
                                    <td class="text-center">Cash Value</td>
                                    <td class="text-center">Non-marital</td>
                                </tr>
                                <tr>
                                    <td class="px-2">1.</td>
                                    <td><textarea name="lip_noic1" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><textarea name="lip_top1" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><textarea name="lip_noi1" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><textarea name="lip_b1" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><div class="d-flex w-100 mx-auto"> <span>$</span><textarea name="lip_db1" class="border-0 form-control" rows="2"></textarea></div></td>
                                    <td><div class="d-flex w-100 mx-auto"> <span>$</span><textarea name="lip_cv1" class="border-0 form-control" rows="2"></textarea></div></td>
                                    <td>
                                        <div class="small_text"> <input type="checkbox" name="lip_nm1" id="" value="Yes"> Y </div>
                                        <div class="small_text"> <input type="checkbox" name="lip_nm1" id="" value="No"> N </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-2">2.</td>
                                    <td><textarea name="lip_noic2" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><textarea name="lip_top2" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><textarea name="lip_noi2" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><textarea name="lip_b2" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><div class="d-flex w-100 mx-auto"> <span>$</span><textarea name="lip_db2" class="border-0 form-control" rows="2"></textarea></div></td>
                                    <td><div class="d-flex w-100 mx-auto"> <span>$</span><textarea name="lip_cv2" class="border-0 form-control" rows="2"></textarea></div></td>
                                    <td>
                                        <div class="small_text"> <input type="checkbox" name="lip_nm2" id="" value="Yes"> Y </div>
                                        <div class="small_text"> <input type="checkbox" name="lip_nm2" id="" value="No"> N </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-2">3.</td>
                                    <td><textarea name="lip_noic3" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><textarea name="lip_top3" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><textarea name="lip_noi3" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><textarea name="lip_b3" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><div class="d-flex w-100 mx-auto"> <span>$</span><textarea name="lip_db3" class="border-0 form-control" rows="2"></textarea></div></td>
                                    <td><div class="d-flex w-100 mx-auto"> <span>$</span><textarea name="lip_cv3" class="border-0 form-control" rows="2"></textarea></div></td>
                                    <td>
                                        <div class="small_text"> <input type="checkbox" name="lip_nm3" id="" value="Yes"> Y </div>
                                        <div class="small_text"> <input type="checkbox" name="lip_nm3" id="" value="No"> N </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-2">4.</td>
                                    <td><textarea name="lip_noic4" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><textarea name="lip_top4" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><textarea name="lip_noi4" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><textarea name="lip_b4" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><div class="d-flex w-100 mx-auto"> <span>$</span><textarea name="lip_db4" class="border-0 form-control" rows="2"></textarea></div></td>
                                    <td><div class="d-flex w-100 mx-auto"> <span>$</span><textarea name="lip_cv4" class="border-0 form-control" rows="2"></textarea></div></td>
                                    <td>
                                        <div class="small_text"> <input type="checkbox" name="lip_nm4" id="" value="Yes"> Y </div>
                                        <div class="small_text"> <input type="checkbox" name="lip_nm4" id="" value="No"> N </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-2">5.</td>
                                    <td><textarea name="lip_noic5" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><textarea name="lip_top5" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><textarea name="lip_noi5" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><textarea name="lip_b5" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><div class="d-flex w-100 mx-auto"> <span>$</span><textarea name="lip_db5" class="border-0 form-control" rows="2"></textarea></div></td>
                                    <td><div class="d-flex w-100 mx-auto"> <span>$</span><textarea name="lip_cv5" class="border-0 form-control" rows="2"></textarea></div></td>
                                    <td>
                                        <div class="small_text"> <input type="checkbox" name="lip_nm5" id="" value="Yes"> Y </div>
                                        <div class="small_text"> <input type="checkbox" name="lip_nm5" id="" value="No"> N </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>


                        @include('layouts.footer18', ['page' => 4])
                </section>

                <section class="section_area p-5" id="fifth_section">
                    <div class="fw-bold text-center">MAINE JUDICIAL BRANCH</div>
                    <div class="ps-lg-5">j. <b>Lawsuits and Claims</b> (Enter information about lawsuits and claims you and your spouse have filed or intend to file. These can include, for example, claims for workers compensation, disability, etc. If you did not recover anything, enter $0, or if your case is still pending or has not yet been filed, enter unknown.):</div>
                    <div class="table-responsive">
                        <table class="table table-bordered border-dark">
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td class="text-center">Case Number</td>
                                    <td class="text-center">Who Filed the Claim?</td>
                                    <td class="text-center">Date Lawsuit or Claim Filed (mm/dd/yyyy)</td>
                                    <td class="text-center">Claim Pending or Final Decision Issued</td>
                                    <td class="text-center">Amount Recovered (if final decision has issued)</td>
                                    <td class="text-center">Non-marital</td>
                                </tr>
                                <tr>
                                    <td class="px-2">1.</td>
                                    <td><textarea name="cl_cn1" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><textarea name="cl_wfc1" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><textarea name="cl_dl1" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><textarea name="cl_cpf1" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><div class="d-flex w-100 mx-auto"> <span>$</span><textarea name="cl_ar1" class="border-0 form-control" rows="2"></textarea></div></td>
                                    <td>
                                        <div class="small_text"> <input type="checkbox" name="cl_nm1" id="" value="Yes"> Y </div>
                                        <div class="small_text"> <input type="checkbox" name="cl_nm1" id="" value="No"> N </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-2">2.</td>
                                    <td><textarea name="cl_cn2" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><textarea name="cl_wfc2" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><textarea name="cl_dl2" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><textarea name="cl_cpf2" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><div class="d-flex w-100 mx-auto"> <span>$</span><textarea name="cl_ar2" class="border-0 form-control" rows="2"></textarea></div></td>
                                    <td>
                                        <div class="small_text"> <input type="checkbox" name="cl_nm2" id="" value="Yes"> Y </div>
                                        <div class="small_text"> <input type="checkbox" name="cl_nm2" id="" value="No"> N </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-2">3.</td>
                                    <td><textarea name="cl_cn3" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><textarea name="cl_wfc3" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><textarea name="cl_dl3" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><textarea name="cl_cpf3" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><div class="d-flex w-100 mx-auto"> <span>$</span><textarea name="cl_ar3" class="border-0 form-control" rows="2"></textarea></div></td>
                                    <td>
                                        <div class="small_text"> <input type="checkbox" name="cl_nm3" id="" value="Yes"> Y </div>
                                        <div class="small_text"> <input type="checkbox" name="cl_nm3" id="" value="No"> N </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-2">4.</td>
                                    <td><textarea name="cl_cn4" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><textarea name="cl_wfc4" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><textarea name="cl_dl4" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><textarea name="cl_cpf4" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><div class="d-flex w-100 mx-auto"> <span>$</span><textarea name="cl_ar4" class="border-0 form-control" rows="2"></textarea></div></td>
                                    <td>
                                        <div class="small_text"> <input type="checkbox" name="cl_nm4" id="" value="Yes"> Y </div>
                                        <div class="small_text"> <input type="checkbox" name="cl_nm4" id="" value="No"> N </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-2">5.</td>
                                    <td><textarea name="cl_cn5" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><textarea name="cl_wfc5" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><textarea name="cl_dl5" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><textarea name="cl_cpf5" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><div class="d-flex w-100 mx-auto"> <span>$</span><textarea name="cl_ar5" class="border-0 form-control" rows="2"></textarea></div></td>
                                    <td>
                                        <div class="small_text"> <input type="checkbox" name="cl_nm5" id="" value="Yes"> Y </div>
                                        <div class="small_text"> <input type="checkbox" name="cl_nm5" id="" value="No"> N </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="ps-lg-5">k. <b>Income Tax Refunds or Amounts Owed for the Last 2 Years</b> (Enter information about your and your spouse’s federal and state tax returns for the last 2 years. Enter an amount under “Refund” if you received money or “Owed” if you owed additional taxes.):</div>
                    <div class="table-responsive">
                        <table class="table table-bordered border-dark">
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td class="text-center">Tax Year (yyyy)</td>
                                    <td class="text-center">Federal Taxes: Joint or Individual?</td>
                                    <td class="text-center">Federal Tax Owed</td>
                                    <td class="text-center">Federal Refund</td>
                                    <td class="text-center">State Taxes: Joint or Individual?</td>
                                    <td class="text-center">State Tax Owed</td>
                                    <td class="text-center">State Refund</td>
                                </tr>
                                <tr>
                                    <td class="px-2">1.</td>
                                    <td> <textarea name="it_ty1" class="border-0 form-control" rows="3"></textarea></td>
                                    <td><div class="small_text"> <input type="radio" name="it_ft1" id="" value="Joint"> Joint </div>
                                        <div class="small_text"> <input type="radio" name="it_ft1" id="" value="Individual"> Individual </div>
                                    </td>
                                    <td>
                                        <div class="d-flex d_sm_block small_text">$<input type="text" name="it_fto_val1" id="" class="border-0"></div>
                                        <div class="small_text"> <input type="radio" name="it_fto1" id="" value="Paid"> Paid </div>
                                        <div class="small_text"> <input type="radio" name="it_fto1" id="" value="Not yet paid"> Not yet paid </div>
                                    </td>
                                    <td>
                                        <div class="d-flex d_sm_block small_text">$<input type="text" name="it_fr_val1" id="" class="border-0"></div>
                                        <div class="small_text"> <input type="radio" name="it_fr1" id="" value="Refund received "> Refund received </div>
                                        <div class="small_text"> <input type="radio" name="it_fr1" id="" value="Not yet paid received"> Not yet paid received </div>
                                    </td>
                                    <td>
                                        <div class="small_text"> <input type="radio" name="it_st1" id="" value="Joint"> Joint </div>
                                        <div class="small_text"> <input type="radio" name="it_st1" id="" value="Individual"> Individual </div>
                                    </td>
                                    <td>
                                        <div class="d-flex d_sm_block small_text">$<input type="text" name="it_sto_val1" id="" class="border-0"></div>
                                        <div class="small_text"> <input type="radio" name="it_sto1" id="" value="Paid"> Paid </div>
                                        <div class="small_text"> <input type="radio" name="it_sto1" id="" value="Not yet paid"> Not yet paid </div>
                                    </td>
                                    <td>
                                        <div class="d-flex d_sm_block small_text">$<input type="text" name="it_sr_val1" id="" class="border-0"></div>
                                        <div class="small_text"> <input type="radio" name="it_sr1" id="" value="Refund received"> Refund received </div>
                                        <div class="small_text"> <input type="radio" name="it_sr1" id="" value="Refund not yet received"> Refund not yet received</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-2">2.</td>
                                    <td> <textarea name="it_ty2" class="border-0 form-control" rows="3"></textarea></td>
                                    <td><div class="small_text"> <input type="radio" name="it_ft2" id="" value="Joint"> Joint </div>
                                        <div class="small_text"> <input type="radio" name="it_ft2" id="" value="Individual"> Individual </div>
                                    </td>
                                    <td>
                                        <div class="d-flex d_sm_block small_text">$<input type="text" name="it_fto_val2" id="" class="border-0"></div>
                                        <div class="small_text"> <input type="radio" name="it_fto2" id="" value="Paid"> Paid </div>
                                        <div class="small_text"> <input type="radio" name="it_fto2" id="" value="Not yet paid"> Not yet paid </div>
                                    </td>
                                    <td>
                                        <div class="d-flex d_sm_block small_text">$<input type="text" name="it_fr_val2" id="" class="border-0"></div>
                                        <div class="small_text"> <input type="radio" name="it_fr2" id="" value="Refund received "> Refund received </div>
                                        <div class="small_text"> <input type="radio" name="it_fr2" id="" value="Not yet paid received"> Not yet paid received </div>
                                    </td>
                                    <td>
                                        <div class="small_text"> <input type="radio" name="it_st2" id="" value="Joint"> Joint </div>
                                        <div class="small_text"> <input type="radio" name="it_st2" id="" value="Individual"> Individual </div>
                                    </td>
                                    <td>
                                        <div class="d-flex d_sm_block small_text">$<input type="text" name="it_sto_val2" id="" class="border-0"></div>
                                        <div class="small_text"> <input type="radio" name="it_sto2" id="" value="Paid"> Paid </div>
                                        <div class="small_text"> <input type="radio" name="it_sto2" id="" value="Not yet paid"> Not yet paid </div>
                                    </td>
                                    <td>
                                        <div class="d-flex d_sm_block small_text">$<input type="text" name="it_sr_val2" id="" class="border-0"></div>
                                        <div class="small_text"> <input type="radio" name="it_sr2" id="" value="Refund received"> Refund received </div>
                                        <div class="small_text"> <input type="radio" name="it_sr2" id="" value="Refund not yet received"> Refund not yet received</div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="ps-lg-5">
                        2. <b>Parties’ Debts</b> (Enter your and your spouse’s debts including credit cards and past due
                        bills. Do not
                        include debt payments previously listed in 1 above, such as your mortgage or car payment. In
                        “Total
                        Monthly Debt Payments,” add the monthly payment amounts together and enter the total. If you
                        have to add an additional page with information, make sure to include those amounts, as well.):
                    </div>



                    <div class="table-responsive">
                        <table class="table table-bordered border-dark">
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td class="text-center">Creditor Name</td>
                                    <td class="text-center">Describe Nature of Debt (household goods, attorney fees, etc.)</td>
                                    <td class="text-center">Amount Owed</td>
                                    <td class="text-center">Monthly Payment Being Made</td>
                                    <td class="text-center">Non-marital</td>
                                </tr>
                                <tr>
                                    <td class="px-2">1.</td>
                                    <td><textarea name="pd_cn1" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><textarea name="pd_dnob1" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><div class="d-flex w-100 mx-auto"> <span>$</span><textarea name="pd_ao1" class="border-0 form-control" rows="2"></textarea></div></td>
                                    <td><div class="d-flex w-100 mx-auto"> <span>$</span><textarea name="pd_mpbm1" class="border-0 form-control" rows="2"></textarea></div></td>
                                    <td>
                                        <div class="small_text"> <input type="checkbox" name="pd_nm1" id="" value="Yes"> Y </div>
                                        <div class="small_text"> <input type="checkbox" name="pd_nm1" id="" value="No"> N </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-2">2.</td>
                                    <td><textarea name="pd_cn2" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><textarea name="pd_dnob2" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><div class="d-flex w-100 mx-auto"> <span>$</span><textarea name="pd_ao2" class="border-0 form-control" rows="2"></textarea></div></td>
                                    <td><div class="d-flex w-100 mx-auto"> <span>$</span><textarea name="pd_mpbm2" class="border-0 form-control" rows="2"></textarea></div></td>
                                    <td>
                                        <div class="small_text"> <input type="checkbox" name="pd_nm2" id="" value="Yes"> Y </div>
                                        <div class="small_text"> <input type="checkbox" name="pd_nm2" id="" value="No"> N </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-2">3.</td>
                                    <td><textarea name="pd_cn3" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><textarea name="pd_dnob3" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><div class="d-flex w-100 mx-auto"> <span>$</span><textarea name="pd_ao3" class="border-0 form-control" rows="2"></textarea></div></td>
                                    <td><div class="d-flex w-100 mx-auto"> <span>$</span><textarea name="pd_mpbm3" class="border-0 form-control" rows="2"></textarea></div></td>
                                    <td>
                                        <div class="small_text"> <input type="checkbox" name="pd_nm3" id="" value="Yes"> Y </div>
                                        <div class="small_text"> <input type="checkbox" name="pd_nm3" id="" value="No"> N </div>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                    @include('layouts.footer18', ['page' => 5])

                </section>
                <section class="section_area p-5" id="sixth_section">
                    <div class="fw-bold text-center">MAINE JUDICIAL BRANCH</div>
                    <div class="table-responsive">
                        <table class="table table-bordered border-dark">
                            <tbody>
                                <tr>
                                    <td class="px-2">4.</td>
                                    <td><textarea name="pd_cn4" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><textarea name="pd_dnob4" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><div class="d-flex w-100 mx-auto"> <span>$</span><textarea name="pd_ao4" class="border-0 form-control" rows="2"></textarea></div></td>
                                    <td><div class="d-flex w-100 mx-auto"> <span>$</span><textarea name="pd_mpbm4" class="border-0 form-control" rows="2"></textarea></div></td>
                                    <td>
                                        <div class="small_text"> <input type="checkbox" name="pd_nm4" id="" value="Yes"> Y </div>
                                        <div class="small_text"> <input type="checkbox" name="pd_nm4" id="" value="No"> N </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-2">5.</td>
                                    <td><textarea name="pd_cn5" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><textarea name="pd_dnob5" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><div class="d-flex w-100 mx-auto"> <span>$</span><textarea name="pd_ao5" class="border-0 form-control" rows="2"></textarea></div></td>
                                    <td><div class="d-flex w-100 mx-auto"> <span>$</span><textarea name="pd_mpbm5" class="border-0 form-control" rows="2"></textarea></div></td>
                                    <td>
                                        <div class="small_text"> <input type="checkbox" name="pd_nm5" id="" value="Yes"> Y </div>
                                        <div class="small_text"> <input type="checkbox" name="pd_nm5" id="" value="No"> N </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-2">6.</td>
                                    <td><textarea name="pd_cn6" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><textarea name="pd_dnob6" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><div class="d-flex w-100 mx-auto"> <span>$</span><textarea name="pd_ao6" class="border-0 form-control" rows="2"></textarea></div></td>
                                    <td><div class="d-flex w-100 mx-auto"> <span>$</span><textarea name="pd_mpbm6" class="border-0 form-control" rows="2"></textarea></div></td>
                                    <td>
                                        <div class="small_text"> <input type="checkbox" name="pd_nm6" id="" value="Yes"> Y </div>
                                        <div class="small_text"> <input type="checkbox" name="pd_nm6" id="" value="No"> N </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-2">7.</td>
                                    <td><textarea name="pd_cn7" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><textarea name="pd_dnob7" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><div class="d-flex w-100 mx-auto"> <span>$</span><textarea name="pd_ao7" class="border-0 form-control" rows="2"></textarea></div></td>
                                    <td><div class="d-flex w-100 mx-auto"> <span>$</span><textarea name="pd_mpbm7" class="border-0 form-control" rows="2"></textarea></div></td>
                                    <td>
                                        <div class="small_text"> <input type="checkbox" name="pd_nm7" id="" value="Yes"> Y </div>
                                        <div class="small_text"> <input type="checkbox" name="pd_nm7" id="" value="No"> N </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-2">8.</td>
                                    <td><textarea name="pd_cn8" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><textarea name="pd_dnob8" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><div class="d-flex w-100 mx-auto"> <span>$</span><textarea name="pd_ao8" class="border-0 form-control" rows="2"></textarea></div></td>
                                    <td><div class="d-flex w-100 mx-auto"> <span>$</span><textarea name="pd_mpbm8" class="border-0 form-control" rows="2"></textarea></div></td>
                                    <td>
                                        <div class="small_text"> <input type="checkbox" name="pd_nm8" id="" value="Yes"> Y </div>
                                        <div class="small_text"> <input type="checkbox" name="pd_nm8" id="" value="No"> N </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-2">9.</td>
                                    <td><textarea name="pd_cn9" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><textarea name="pd_dnob9" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><div class="d-flex w-100 mx-auto"> <span>$</span><textarea name="pd_ao9" class="border-0 form-control" rows="2"></textarea></div></td>
                                    <td><div class="d-flex w-100 mx-auto"> <span>$</span><textarea name="pd_mpbm9" class="border-0 form-control" rows="2"></textarea></div></td>
                                    <td>
                                        <div class="small_text"> <input type="checkbox" name="pd_nm9" id="" value="Yes"> Y </div>
                                        <div class="small_text"> <input type="checkbox" name="pd_nm9" id="" value="No"> N </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-2">10.</td>
                                    <td><textarea name="pd_cn10" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><textarea name="pd_dnob10" class="border-0 form-control" rows="2"></textarea></td>
                                    <td><div class="d-flex w-100 mx-auto"> <span>$</span><textarea name="pd_ao10" class="border-0 form-control" rows="2"></textarea></div></td>
                                    <td><div class="d-flex w-100 mx-auto"> <span>$</span><textarea name="pd_mpbm10" class="border-0 form-control" rows="2"></textarea></div></td>
                                    <td>
                                        <div class="small_text"> <input type="checkbox" name="pd_nm10" id="" value="Yes"> Y </div>
                                        <div class="small_text"> <input type="checkbox" name="pd_nm10" id="" value="No"> N </div>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex d_sm_block justify-content-end fw-bold">Total Monthly Debt Payments: $ <input type="text" name="tmdp" id="" class="border-0 border-bottom responsive_input"></div>
                    <div class="fw-bold text-center">PART 2 - INCOME AND EXPENSES</div>
                    <div class="row mb-4">
                        <div class="col-lg-3">
                            <div class="border d-inline-block responsive_input w-75 mb-lg-3 p-lg-2 border-dark">In 4, check all that  apply. Provide all information requested about your jobs, including all full- time, part-time, temporary contract, or other work.</div>
                            <div class="border d-inline-block responsive_input w-75 p-lg-2 mt-lg-5 mt-3 border-dark"> In 4e, enter your total gross income from all sources from January 1 of this year through the date you fill out this form</div>
                        </div>
                        <div class="col-lg-9">
                            <div class="small_text fw-bold">3. Information about other household members:</div>
                            <div class="ps-lg-5"> currently live with another adult who is not the plaintiff or defendant in this case who helps pay my expenses:
                                <input type="checkbox" name="ia_clwa" id="" class="me-2" value="Yes"> Yes
                                <input type="checkbox" name="ia_clwa" id="" class="me-2" value="No"> No
                            </div>
                            <div class="small_text fw-bold">4. My employment:</div>
                            <div class="ps-lg-5"> a. I am
                                <input type="checkbox" name="unemployed" id="" class="mx-2" value="unemployed">unemployed
                                 <input type="checkbox" name="self-employed" id="" class="me-2" value="self-employed"> self-employed
                                 <input type="checkbox" name="employed by someone else" id="" class="me-2" value="employed by someone else "> employed by someone else
                                <input type="checkbox" name="retired" id="" class="me-2" value="retired"> retired
                            </div>
                            <div class="ps-lg-5 pt-lg-3">b. Employer name : <input type="text" name="" id="" class="border-0 border-bottom responsive_input responsive_input" style="width:665px;"> </div>
                            <div class="ps-lg-5 pt-lg-3">c. Employer address : <input type="text" name="" id="" class="border-0 border-bottom responsive_input responsive_input" style="width:645px;"> </div>
                            <div style="padding-left:230px" class="small_text">Street Address, Apt.</div>
                            <div class="d-flex d_sm_block d_sm_block ps-lg-5">
                                <div>
                                    <input type="text" name="" id="" class="border-0 border-bottom responsive_input responsive_input" style="width:420px;">
                                    <div class="small_text">City</div>
                                </div>
                                <div>
                                    <input type="text" name="" id="" class="border-0 border-bottom responsive_input responsive_input">
                                    <div class="small_text">State</div>
                                </div>
                                <div>
                                    <input type="text" name="" id="" class="border-0 border-bottom responsive_input responsive_input">
                                    <div class="small_text">Zip</div>
                                </div>
                            </div>
                            <div class="row  pt-lg-3 ps-lg-5">
                                <div class="col-lg-4">
                                    <div class="small_text">d. Number of paychecks per year</div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="small_text"> <input type="checkbox" name="" id="" value="12 (monthly)"> 12 (monthly) </div>
                                    <div class="small_text"> <input type="checkbox" name="" id="" value="24 (two times a month)"> 24 (two times a month) </div>
                                    <div class="small_text"> <input type="checkbox" name="" id="" value="26 (every two weeks)"> 26 (every two weeks) </div>
                                    <div class="small_text"> <input type="checkbox" name="" id="" value="52 (weekly)"> 52 (weekly) </div>
                                    <div class="small_text"> <input type="checkbox" name="" id="" value="I am paid in cash"> I am paid in cash </div>
                                </div>
                            </div>

                            <div class="pt-lg-3 ps-lg-5">e. Gross income (before taxes and deductions) so far this year: <input type="text" name="" id="" class="border-0 border-bottom responsive_input responsive_input" style="width:316px;"></div>
                            <div class="ps-lg-5">as of <input type="text" name="" id="" class="border-0 border-bottom responsive_input responsive_input" style="width:323px;"></div>
                            <div style="padding-left:100px;" class="small_text responsive_input">Date (mm/dd/yyyy) </div>
                            <div class="fw-bold pt-lg-3">5. My gross income and taxes from last year:</div>
                            <div class="row  pt-lg-3 ps-lg-5">
                                <div class="col-lg-4">
                                    <div class="small_text">a. Tax filing status (check only one):</div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="small_text"><input type="checkbox" name="" id="" value="Married (Joint)"> Married (Joint) </div>
                                    <div class="small_text"><input type="checkbox" name="" id="" value="Married (Separate)"> Married (Separate) </div>
                                    <div class="small_text"><input type="checkbox" name="" id="" value="Head of Household"> Head of Household </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="small_text"><input type="checkbox" name="" id="" value="Single"> Single </div>
                                    <div class="small_text"><input type="checkbox" name="" id="" value="Did not file"> Did not file </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @include('layouts.footer18', ['page' => 6])

                </section>
                <section class="section_area p-5" id="seventh_section">
                    <div class="fw-bold text-center">MAINE JUDICIAL BRANCH</div>
                    <div class="row mb-4">
                        <div class="col-lg-3">
                            <div class="border border-dark d-inline-block responsive_input p-2 mt-3">In 5a-d, enter
                                the information you
                                submitted on last year’s IRS tax return. If you did not file a tax return for last year,
                                check Did not file, leave a-d a.</div>
                            <div class="border border-dark d-inline-block responsive_input p-2 mt-3">In 7, Regular
                                employment earnings
                                mean the gross income you receive on a regular basis from employment.</div>
                            <div class="border border-dark d-inline-block responsive_input p-2 mt-3">ncome other than
                                Regular
                                employment earnings, such as Overtime, Commission, or Bonus should be listed separately.
                            </div>
                            <div class="border border-dark d-inline-block responsive_input p-2 mt-3">For Educational
                                funds, include
                                fellowships, stipends, gran , scholarships, etc.</div>
                            <div class="border border-dark d-inline-block responsive_input p-2 mt-3">income other than
                                Regular
                                employment earnings, such as Overtime, Commission, or Bonus should be listed separately.
                            </div>
                        </div>
                        <div class="col-lg-9 small_text">
                            <div class=" ps-lg-3">b. Number of dependent exemptions claimed: <input type="text"
                                    name="" id="" class="border-0 border-bottom responsive_input">
                            </div>
                            <div class="  ps-lg-3 pt-lg-3">c. Total number of exemptions claimed: <input
                                    type="text" name="" id=""
                                    class="border-0 border-bottom responsive_input">
                            </div>
                            <div class="  ps-lg-3 pt-lg-3">d. Gross income (before taxes and deductions) last year: $
                                <input type="text" name="" id=""
                                    class="border-0 border-bottom responsive_input">
                            </div>
                            <div class=" p-0" style="padding-left:380px;">Year: <input type="text"
                                    name="" id="" class="border-0 border-bottom responsive_input">
                            </div>

                            <div class="fw-bold  ">6. Bankruptcy in the last 5 years:</div>
                            <div class="ps-lg-3  ">I filed for bankruptcy in the last 5 years: <input
                                    type="checkbox" name="" id="" value="Yes"> Yes <input
                                    type="checkbox" name="" id="" value="No"> No</div>
                            <div class="fw-bold  ">7. <input type="checkbox" name="" id=""
                                    value="My gross"> My gross <input type="checkbox" name=""
                                    id="" value="weekly"> weekly <input type="checkbox" name=""
                                    id="" value="bi-weekly"> bi-weekly <input type="checkbox"
                                    name="" id="" value="monthly other"> monthly other: <input
                                    type="text" name="" id=""
                                    class="border-0 border-bottom responsive_input">
                                income (before taxes and deductions) is:</div>

                            <div class="d-flex d_sm_block justify-content-between small_text">
                                <div>Employment earnings (salary, wages, self-employed income, etc.)</div>
                                <div>$<input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input"></div>
                            </div>

                            <div class="d-flex d_sm_block justify-content-between small_text">
                                <div>Overtime</div>
                                <div>$<input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input"></div>
                            </div>
                            <div class="d-flex d_sm_block justify-content-between small_text">
                                <div>Commission</div>
                                <div>$<input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input"></div>
                            </div>
                            <div class="d-flex d_sm_block justify-content-between small_text">
                                <div>Tips</div>
                                <div>$<input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input"></div>
                            </div>
                            <div class="d-flex d_sm_block justify-content-between small_text">
                                <div>Bonus</div>
                                <div>$<input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input"></div>
                            </div>
                            <div class="d-flex d_sm_block justify-content-between small_text">
                                <div>Pension and other retirement benefits</div>
                                <div>$<input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input"></div>
                            </div>
                            <div class="d-flex d_sm_block justify-content-between small_text">
                                <div>Annuity</div>
                                <div>$<input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input"></div>
                            </div>
                            <div class="d-flex d_sm_block justify-content-between small_text">
                                <div>Interest income</div>
                                <div>$<input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input"></div>
                            </div>
                            <div class="d-flex d_sm_block justify-content-between small_text">
                                <div>Dividend income</div>
                                <div>$<input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input"></div>
                            </div>
                            <div class="d-flex d_sm_block justify-content-between small_text">
                                <div>Trust income</div>
                                <div>$<input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input"></div>
                            </div>
                            <div class="d-flex d_sm_block justify-content-between small_text">
                                <div>Social Security (check all that apply): <input type="checkbox" name=""
                                        id="" value="SSI"> SSI <input type="checkbox" name=""
                                        id="" value="SSDI"> SSDI retirement</div>
                                <div>$<input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input"></div>
                            </div>
                            <div class="d-flex d_sm_block justify-content-between small_text">
                                <div>Unemployment benefits</div>
                                <div>$<input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input"></div>
                            </div>
                            <div class="d-flex d_sm_block justify-content-between small_text">
                                <div>Disability payment (not Social Security)</div>
                                <div>$<input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input"></div>
                            </div>
                            <div class="d-flex d_sm_block justify-content-between small_text">
                                <div>Workers’ compensation</div>
                                <div>$<input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input"></div>
                            </div>
                            <div class="d-flex d_sm_block justify-content-between small_text">
                                <div>Military allowances</div>
                                <div>$<input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input"></div>
                            </div>
                            <div class="d-flex d_sm_block justify-content-between small_text">
                                <div> Investment income</div>
                                <div>$<input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input"></div>
                            </div>
                            <div class="d-flex d_sm_block justify-content-between small_text">
                                <div> Rental income</div>
                                <div>$<input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input"></div>
                            </div>
                            <div class="d-flex d_sm_block justify-content-between small_text">
                                <div> Partnership income</div>
                                <div>$<input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input"></div>
                            </div>
                            <div class="d-flex d_sm_block justify-content-between small_text">
                                <div>Distributions and draws </div>
                                <div>$<input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input"></div>
                            </div>
                            <div class="d-flex d_sm_block justify-content-between small_text">
                                <div>Royalty income </div>
                                <div>$<input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input"></div>
                            </div>
                            <div class="d-flex d_sm_block justify-content-between small_text">
                                <div> Educational funds (include payments made directly to the school)</div>
                                <div>$<input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input"></div>
                            </div>
                            <div class="d-flex d_sm_block justify-content-between small_text">
                                <div> Spousal support</div>
                                <div>$<input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input"></div>
                            </div>
                            <div class="d-flex d_sm_block justify-content-between small_text">
                                <div>Gifts of money</div>
                                <div>$<input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input"></div>
                            </div>
                            <div class="d-flex d_sm_block justify-content-between small_text">
                                <div>Other <input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input"></div>
                                <div>$<input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input"></div>
                            </div>
                            <div class="d-flex d_sm_block justify-content-end small_text">
                                <div class="fw-bold  pe-lg-3">Total Gross <input type="checkbox" name=""
                                        id="" value="Total Gross"> Weekly <input type="checkbox"
                                        name="" id="" value="Weekly"> Bi-weekly <input
                                        type="checkbox" name="" id="" value="Bi-weekly ">
                                    Monthly <input type="checkbox" name="" id=""
                                        value="Monthly"> Other Income:</div>
                                <div>$<input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input"></div>
                            </div>

                        </div>
                    </div>
                    @include('layouts.footer18', ['page' => 7])

                </section>
                <section class="section_area p-5" id="eighth_section">
                    <div class="fw-bold text-center">MAINE JUDICIAL BRANCH</div>
                    <div class="row">
                        <div class="col-lg-3">
                        </div>
                        <div class="col-lg-9 small_text">


                            <div class="d-flex d_sm_block justify-content-between small_text">
                                <div class="fw-bold  pe-lg-3">Other <input type="checkbox" name=""
                                        id="" value="Other"> Weekly <input type="checkbox"
                                        name="" id="" value="Weekly"> Bi-weekly <input
                                        type="checkbox" name="" id="" value="Bi-weekly ">
                                    monthly (not calculated as income):</div>
                                <div>$<input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input"></div>
                            </div>

                            <div class="d-flex d_sm_block justify-content-between small_text">
                                <div>TANF (Temporary assistance for needy families)</div>
                                <div>$<input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input"></div>
                            </div>
                            <div class="d-flex d_sm_block justify-content-between small_text">
                                <div>Child support for children of this relationship</div>
                                <div>$<input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input"></div>
                            </div>
                            <div class="d-flex d_sm_block justify-content-between small_text">
                                <div>Child support for children not of this relationship</div>
                                <div>$<input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input"></div>
                            </div>
                            <div class="d-flex d_sm_block justify-content-between small_text">
                                <div>Foster care payments from DHHS</div>
                                <div>$<input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input"></div>
                            </div>
                            <div class="d-flex d_sm_block justify-content-end small_text">
                                <div class="pe-3 fw-bold">Total</div>
                                <div>$<input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input"></div>
                            </div>
                            <div class="fw-bold">8. My <input type="checkbox" name="" id=""
                                    value="My"> weekly <input type="checkbox" name="" id=""
                                    value="weekly"> bi-weekly <input type="checkbox" name=""
                                    id="" value="bi-weekly"> monthly <input type="checkbox"
                                    name="" id="" value="monthly"> other: <input type="text"
                                    class="border-0 border-bottom responsive_input responsive_input" name=""
                                    id="" style="width:430px">deductions are :</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="border border-dark p-3 d-inline-block responsive_input mt-3">In 8, use
                                information from your
                                paystubs, tax ecords, and other sources to identify all properly calculated deductions.
                            </div>
                            <div class="border border-dark p-3 d-inline-block responsive_input mt-3">In Total Monthly
                                Deductions, add
                                the amounts from 8 together and enter the total.</div>
                            <div class="border border-dark p-3 d-inline-block responsive_input mt-3">In 9a, enter the
                                amount your
                                household spends on each item each month. If you have more than one household for which
                                you pay expenses, attach an additional page listing the expenses for each additional
                                household.</div>
                        </div>
                        <div class="col-lg-9 small_text">
                            <div class="d-flex d_sm_block justify-content-between small_text">
                                <div>Federal tax</div>
                                <div>$<input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input"></div>
                            </div>


                            <div class="d-flex d_sm_block justify-content-between small_text">
                                <div>State tax</div>
                                <div>$<input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input"></div>
                            </div>

                            <div class="d-flex d_sm_block justify-content-between small_text">
                                <div>FICA (or Social Security equivalent)</div>
                                <div>$<input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input"></div>
                            </div>

                            <div class="d-flex d_sm_block justify-content-between small_text">
                                <div> Medicare tax</div>
                                <div>$<input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input"></div>
                            </div>

                            <div class="d-flex d_sm_block justify-content-between small_text">
                                <div> Mandatory retirement contributions (by law or condition of employment)</div>
                                <div>$<input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input"></div>
                            </div>

                            <div class="d-flex d_sm_block justify-content-between small_text">
                                <div>Union dues </div>
                                <div>$<input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input"></div>
                            </div>

                            <div class="d-flex d_sm_block justify-content-between small_text">
                                <div> Health insurance premiums (medical, dental, vision)</div>
                                <div>$<input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input"></div>
                            </div>

                            <div class="d-flex d_sm_block justify-content-between small_text">
                                <div> Child support actually paid under a court order in a different case</div>
                                <div>$<input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input"></div>
                            </div>

                            <div class="d-flex d_sm_block justify-content-between small_text">
                                <div>Spousal support actually paid under a court order in a different case </div>
                                <div>$<input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input"></div>
                            </div>


                            <div class="d-flex d_sm_block justify-content-between small_text">
                                <div>Spousal support actually paid or payable under a court order in this case </div>
                                <div>$<input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input"></div>
                            </div>

                            <div class="d-flex d_sm_block justify-content-between small_text">
                                <div>Expenditures for repayment of debts that represent reasonable and necessary
                                    expenses for the production of income including, but not limited to, student
                                    loans, medical expenditures necessary to preserve life or health, reasonable
                                    expenditures for the benefit of the child and other parent exclusive of gifts.
                                </div>
                                <div> <input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input"></div>
                            </div>

                            <div class="d-flex d_sm_block justify-content-between small_text">
                                <div>Other: <input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input responsive_input"
                                        style="width:635px;"> </div>
                                <div>$<input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input"></div>
                            </div>
                            <div class="d-flex d_sm_block justify-content-end small_text">
                                <div class="fw-bold pe-lg-3">Total <input type="checkbox" name=""
                                        id="" value="Total"> Weekly Bi-weekly Monthly Other Deductions:
                                </div>
                                <div>$<input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">

                        <div class="col-lg-3">
                            <div class="border border-dark p-3 d-inline-block responsive_input mt-3  ">In 9a, enter
                                the amount your
                                household spends on each item each month. If you have more than one household for which
                                you pay expenses, attach an additional page listing the expenses for each additional
                                household.</div>
                        </div>
                        <div class="col-lg-9 small_text">
                            <div>9. My monthly living expenses are:</div>
                            <div>a. <b>Hsehld enses</b></div>
                            <div class="d-flex d_sm_block justify-content-between small_text">
                                <div>Mortgage</div>
                                <div>$<input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input"></div>
                            </div>
                            <div class="d-flex d_sm_block justify-content-between small_text">
                                <div>Rent</div>
                                <div>$<input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input"></div>
                            </div>
                            <div class="d-flex d_sm_block justify-content-between small_text">
                                <div>Home equity (HELOC) and second mortgage</div>
                                <div>$<input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input"></div>
                            </div>
                            <div class="d-flex d_sm_block justify-content-between small_text">
                                <div> Real estate taxes</div>
                                <div>$<input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input"></div>
                            </div>
                            <div class="d-flex d_sm_block justify-content-between small_text">
                                <div> Homeowners or condo association dues and assessments</div>
                                <div>$<input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input"></div>
                            </div>
                            <div class="d-flex d_sm_block justify-content-between small_text">
                                <div>Homeowner or renter insurance</div>
                                <div>$<input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input"></div>
                            </div>
                            <div class="d-flex d_sm_block justify-content-between small_text">
                                <div>Water and sewer line repair insurance</div>
                                <div>$<input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input"></div>
                            </div>
                            <div class="d-flex d_sm_block justify-content-between small_text">
                                <div>Gas</div>
                                <div>$<input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input"></div>
                            </div>

                            <div class="d-flex d_sm_block justify-content-between small_text">
                                <div>Heating fuel or oil</div>
                                <div>$<input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input"></div>
                            </div>
                            <div class="d-flex d_sm_block justify-content-between small_text">
                                <div>Electric</div>
                                <div>$<input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input"></div>
                            </div>
                            <div class="d-flex d_sm_block justify-content-between small_text">
                                <div>Telephone (landline)</div>
                                <div> $<input type="number" name="" id=""
                                        class="border-0 border-bottom responsive_input"></div>
                            </div>
                            <div class="d-flex d_sm_block justify-content-between small_text">
                                <div>Cell phone</div>
                                <div> $ <input type="number" name="" id=""
                                        class="border-0 border-bottom responsive_input"></div>
                            </div>
                            <div class="d-flex d_sm_block justify-content-between small_text">
                                <div>Cable or satellite TV</div>
                                <div> $ <input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input"></div>
                            </div>
                            <div class="d-flex d_sm_block justify-content-between small_text">
                                <div>Streaming services</div>
                                <div>$ <input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input"></div>
                            </div>
                            <div class="d-flex d_sm_block justify-content-between small_text">
                                <div>Internet</div>
                                <div>$<input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input"></div>
                            </div>
                            <div class="d-flex d_sm_block justify-content-between small_text">
                                <div>Water and sewer</div>
                                <div>$<input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input"></div>
                            </div>
                        </div>
                    </div>
                    @include('layouts.footer18', ['page' => 8])

                </section>
                <section class="section_area p-5" id="ninth_section">
                    <div class="fw-bold text-center">MAINE JUDICIAL BRANCH</div>
                    <div class="row mb-4">

                        <div class="col-lg-3">
                            <div class="border border-dark p-3 d-inline-block responsive_input mt-5  ">In Subtotal
                                Monthly Household
                                Expenses, add the amounts in 9a together and enter the total.</div>
                            <div class="border border-dark p-3 d-inline-block responsive_input mt-5  ">In 9b, enter
                                the amount you
                                spend monthly on each type of transportation expense.</div>
                            <div class="border border-dark p-3 d-inline-block responsive_input mt-3  ">If you have
                                other transportation
                                expenses not listed in 9b, describe in Other and enter the amount.</div>
                            <div class="border border-dark p-3 d-inline-block responsive_input mt-5  ">In 9c, enter
                                the amount you
                                spend monthly only for yourself on each type of expense. Do not include expenses you are
                                reimbursed for through insurance or your employer.</div>
                            <div class="border border-dark p-3 d-inline-block responsive_input mt-3  ">In Subtotal
                                Monthly Personal
                                Expenses, add the amounts in 9c together and enter the total.</div>
                        </div>
                        <div class="col-lg-9 small_text">

                            <div class="d-flex d_sm_block justify-content-between small_text ps-lg-3">
                                <div>Garbage removal</div>
                                <div>$<input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input"></div>
                            </div>
                            <div class="d-flex d_sm_block justify-content-between small_text ps-lg-3">
                                <div>Laundry and dry cleaning</div>
                                <div>$<input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input"></div>
                            </div>
                            <div class="d-flex d_sm_block justify-content-between small_text ps-lg-3">
                                <div>House cleaning service</div>
                                <div>$<input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input"></div>
                            </div>
                            <div class="d-flex d_sm_block justify-content-between small_text ps-lg-3">
                                <div>Necessary repairs and maintenance to my property</div>
                                <div>$<input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input"></div>
                            </div>
                            <div class="d-flex d_sm_block justify-content-between small_text ps-lg-3">
                                <div>Pet care</div>
                                <div>$<input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input"></div>
                            </div>
                            <div class="d-flex d_sm_block justify-content-between small_text ps-lg-3">
                                <div>Groceries, household supplies, and toiletries</div>
                                <div>$<input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input"></div>
                            </div>
                            <div class="d-flex d_sm_block justify-content-between small_text ps-lg-3">
                                <div>Other: <input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input responsive_input"
                                        style="width:615px"></div>
                                <div>$<input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input"></div>
                            </div>
                            <div class="d-flex d_sm_block justify-content-end fw-bold small_text">
                                <div class="pe-lg-3">Subtotal Monthly Household Expenses:</div>
                                <div>$<input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input"></div>
                            </div>
                            <div class=" mt-lg-2">b. <b> Transportation Expenses</b></div>
                            <div class="d-flex d_sm_block justify-content-between small_text ps-lg-3">
                                <div>Vehicle payment</div>
                                <div>$<input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input"></div>
                            </div>
                            <div class="d-flex d_sm_block justify-content-between small_text ps-lg-3">
                                <div>Vehicle repairs</div>
                                <div>$<input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input"></div>
                            </div>
                            <div class="d-flex d_sm_block justify-content-between small_text ps-lg-3">
                                <div>Vehicle maintenance</div>
                                <div> $<input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input"></div>
                            </div>
                            <div class="d-flex d_sm_block justify-content-between small_text ps-lg-3">
                                <div>Insurance</div>
                                <div> $ <input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input"></div>
                            </div>
                            <div class="d-flex d_sm_block justify-content-between small_text ps-lg-3">
                                <div>License</div>
                                <div> $ <input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input"></div>
                            </div>
                            <div class="d-flex d_sm_block justify-content-between small_text ps-lg-3">
                                <div>Gasoline</div>
                                <div>$ <input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input"></div>
                            </div>
                            <div class="d-flex d_sm_block justify-content-between small_text ps-lg-3">
                                <div>Taxi, ride share, bus, and train</div>
                                <div>$<input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input"></div>
                            </div>
                            <div class="d-flex d_sm_block justify-content-between small_text ps-lg-3">
                                <div>Parking</div>
                                <div>$<input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input"></div>
                            </div>
                            <div class="d-flex d_sm_block justify-content-between small_text ps-lg-3">
                                <div>Registration</div>
                                <div>$<input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input"></div>
                            </div>
                            <div class="d-flex d_sm_block justify-content-between small_text ps-lg-3">
                                <div>Other: <input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input responsive_input"
                                        style="width:615px"></div>
                                <div>$<input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input  "></div>
                            </div>
                            <div class="d-flex d_sm_block justify-content-between small_text ps-lg-3">
                                <div>Other: <input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input responsive_input"
                                        style="width:615px"></div>
                                <div>$<input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input"></div>
                            </div>
                            <div class="d-flex d_sm_block justify-content-end small_text ps-lg-3">
                                <div class="fw-bold pe-lg-3">Subtotal Monthly Transportation Expenses: </div>
                                <div>$<input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input"></div>
                            </div>
                            <div>c. <b>Personal expenses</b></div>
                            <div class="ps-lg-3">
                                <div>Medical expenses (out of pocket expenses)</div>

                                <div class="d-flex d_sm_block justify-content-between small_text ps-lg-3">
                                    <div class=" ">Doctor visits</div>
                                    <div>$<input type="text" name="" id=""
                                            class="border-0 border-bottom responsive_input"></div>
                                </div>

                                <div class="d-flex d_sm_block justify-content-between small_text ps-lg-3">
                                    <div class=" ">Therapy and counseling</div>
                                    <div>$<input type="text" name="" id=""
                                            class="border-0 border-bottom responsive_input"></div>
                                </div>

                                <div class="d-flex d_sm_block justify-content-between small_text ps-lg-3">
                                    <div class=" ">Dental and orthodontia</div>
                                    <div>$<input type="text" name="" id=""
                                            class="border-0 border-bottom responsive_input"></div>
                                </div>

                                <div class="d-flex d_sm_block justify-content-between small_text ps-lg-3">
                                    <div class=" ">Optical</div>
                                    <div>$<input type="text" name="" id=""
                                            class="border-0 border-bottom responsive_input"></div>
                                </div>

                                <div class="d-flex d_sm_block justify-content-between small_text ps-lg-3">
                                    <div class=" ">Medicine (including prescribed and over-the-counter)</div>
                                    <div>$<input type="text" name="" id=""
                                            class="border-0 border-bottom responsive_input"></div>
                                </div>

                            </div>
                            <div class="d-flex d_sm_block justify-content-between small_text ps-lg-3">
                                <div class=" ">Life insurance</div>
                                <div>$<input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input"></div>
                            </div>
                            <div class="ps-lg-3">
                                <div class="d-flex d_sm_block justify-content-between small_text ps-lg-3">
                                    <div class=" ">Life (term)</div>
                                    <div>$<input type="text" name="" id=""
                                            class="border-0 border-bottom responsive_input"></div>
                                </div>

                                <div class="d-flex d_sm_block justify-content-between small_text ps-lg-3">
                                    <div class=" ">Life (whole or annuity) </div>
                                    <div>$<input type="text" name="" id=""
                                            class="border-0 border-bottom responsive_input"></div>
                                </div>
                            </div>
                            <div class="d-flex d_sm_block justify-content-between small_text ps-lg-3">
                                <div class=" ">Clothing </div>
                                <div>$<input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input"></div>
                            </div>


                            <div class="d-flex d_sm_block justify-content-between small_text ps-lg-3">
                                <div class=" ">Grooming (hair, nails, spa, etc.) </div>
                                <div>$<input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input"></div>
                            </div>


                            <div class="d-flex d_sm_block justify-content-between small_text ps-lg-3">
                                <div class=" ">Club membership dues</div>
                                <div>$<input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input"></div>
                            </div>

                            <div class="d-flex d_sm_block justify-content-between small_text ps-lg-3">
                                <div class=" ">Periodical/Newspaper subscription(s)</div>
                                <div>$<input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input"></div>
                            </div>
                            <div class="d-flex d_sm_block justify-content-between small_text ps-lg-3">
                                <div class=" ">Other: <input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input responsive_input"
                                        style="width:615px"> </div>
                                <div>$<input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input"></div>
                            </div>
                            <div class="d-flex d_sm_block justify-content-between small_text ps-lg-3">
                                <div class=" ">Other: <input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input responsive_input"
                                        style="width:615px"></div>
                                <div>$<input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input"></div>
                            </div>
                            <div class="d-flex d_sm_block justify-content-end small_text ps-lg-3">
                                <div class="fw-bold pe-lg-3 ">Subtotal Monthly Personal Expenses:</div>
                                <div>$<input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input"></div>
                            </div>

                        </div>
                    </div>
                    @include('layouts.footer18', ['page' => 9])

                </section>
                <section class="section_area p-5" id="tenth_section">
                    <div class="fw-bold text-center">MAINE JUDICIAL BRANCH</div>
                    <div class="row mb-5">

                        <div class="col-lg-3">
                            <div class="border border-dark p-3 d-inline-block responsive_input mt-5  ">In 9d, enter
                                the amount spent
                                monthly on the minor and dependent children of this relationship.</div>
                            <div class="border border-dark p-3 d-inline-block responsive_input mt-5  ">In Medical, do
                                not include
                                expenses you are reimbursed for through insurance or your employer.</div>
                            <div class="border border-dark p-3 d-inline-block responsive_input mt-3  ">If there are
                                other child-
                                related expenses not listed in 9d, describe the expense in Other and enter the amount.
                            </div>
                        </div>
                        <div class="col-lg-9 small_text">
                            <div>d. <b>Minor and Dependent Children Expenses</b></div>
                            <div class="d-flex d_sm_block justify-content-between small_text ps-lg-3">
                                <div>Child care (including before and after school care)</div>
                                <div>$<input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input"></div>
                            </div>
                            <div class="d-flex d_sm_block justify-content-between small_text ps-lg-3">
                                <div>Clothing</div>
                                <div>$<input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input"></div>
                            </div>
                            <div class="d-flex d_sm_block justify-content-between small_text ps-lg-3">
                                <div>Education</div>
                                <div>$<input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input"></div>
                            </div>

                            <div class="ps-lg-3">

                                <div class="d-flex d_sm_block justify-content-between small_text ps-lg-3">
                                    <div class=" ">Tuition</div>
                                    <div>$<input type="text" name="" id=""
                                            class="border-0 border-bottom responsive_input"></div>
                                </div>

                                <div class="d-flex d_sm_block justify-content-between small_text ps-lg-3">
                                    <div class=" ">Books, fees, and supplies</div>
                                    <div>$<input type="text" name="" id=""
                                            class="border-0 border-bottom responsive_input"></div>
                                </div>

                                <div class="d-flex d_sm_block justify-content-between small_text ps-lg-3">
                                    <div class=" ">School lunch</div>
                                    <div>$<input type="text" name="" id=""
                                            class="border-0 border-bottom responsive_input"></div>
                                </div>

                                <div class="d-flex d_sm_block justify-content-between small_text ps-lg-3">
                                    <div class=" ">Tutoring</div>
                                    <div>$<input type="text" name="" id=""
                                            class="border-0 border-bottom responsive_input"></div>
                                </div>

                                <div class="d-flex d_sm_block justify-content-between small_text ps-lg-3">
                                    <div class=" ">Other education: <input type="text" name=""
                                            id=""
                                            class="border-0 border-bottom responsive_input responsive_input"
                                            style="width:535px"></div>
                                    <div>$<input type="text" name="" id=""
                                            class="border-0 border-bottom responsive_input"></div>
                                </div>

                            </div>
                            <div class="d-flex d_sm_block justify-content-between small_text ps-lg-3">
                                <div class=" ">Medical (out of pocket expenses)</div>
                                <div>$<input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input"></div>
                            </div>
                            <div class="ps-lg-3">
                                <div class="d-flex d_sm_block justify-content-between small_text ps-lg-3">
                                    <div class=" ">Doctor visits</div>
                                    <div>$<input type="text" name="" id=""
                                            class="border-0 border-bottom responsive_input"></div>
                                </div>

                                <div class="d-flex d_sm_block justify-content-between small_text ps-lg-3">
                                    <div class=" ">Therapy or counseling </div>
                                    <div>$<input type="text" name="" id=""
                                            class="border-0 border-bottom responsive_input"></div>
                                </div>
                            </div>
                            <div class="d-flex d_sm_block justify-content-between small_text ps-lg-3">
                                <div class=" ">Dental or orthodontia </div>
                                <div>$<input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input"></div>
                            </div>


                            <div class="d-flex d_sm_block justify-content-between small_text ps-lg-3">
                                <div class=" ">Optical</div>
                                <div>$<input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input"></div>
                            </div>


                            <div class="d-flex d_sm_block justify-content-between small_text ps-lg-3">
                                <div class=" ">Medicine/prescriptions</div>
                                <div>$<input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input"></div>
                            </div>

                            <div class="d-flex d_sm_block justify-content-between small_text ps-lg-3">
                                <div class=" ">Other medical: <input type="text" name=""
                                        id=""
                                        class="border-0 border-bottom responsive_input responsive_input"
                                        style="width:565px"></div>
                                <div>$<input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input"></div>
                            </div>



                            <div class="d-flex d_sm_block justify-content-between small_text ps-lg-3">
                                <div class=" ">Extra-curricular activities/lessons/sports fees </div>
                                <div>$<input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input"></div>
                            </div>
                            <div class="d-flex d_sm_block justify-content-between small_text ps-lg-3">
                                <div class=" ">Other: <input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input responsive_input"
                                        style="width:615px"></div>
                                <div>$<input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input"></div>
                            </div>
                            <div class="d-flex d_sm_block justify-content-between small_text ps-lg-3">
                                <div class=" ">Other: <input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input responsive_input"
                                        style="width:615px"></div>
                                <div>$<input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input"></div>
                            </div>
                            <div class="d-flex d_sm_block justify-content-end small_text ps-lg-3">
                                <div class="fw-bold pe-lg-3 ">Subtotal Monthly Children Expenses:</div>
                                <div>$<input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input"></div>
                            </div>
                            <div class="d-flex d_sm_block justify-content-end small_text ps-lg-3 ">
                                <div class="fw-bold pe-lg-3 ">TOTAL MONTHLY LIVING EXPENSES:</div>
                                <div>$<input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input"></div>
                            </div>
                            <div class="d-flex d_sm_block justify-content-end small_text ps-lg-3 mt-2 ">
                                <div class="fw-bold pe-lg-3 ">(add together subtotals from subsections a – d)</div>
                                <div> <input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input invisible"></div>

                            </div>
                            <div class="mt-lg-2">e. <b>Miscellaneous/Lump Sum Expenses</b> (costs in past 12 months)
                            </div>
                            <div class="d-flex d_sm_block justify-content-between small_text ps-lg-3 ">
                                <div class="fw-bold pe-lg-3 ">Vacation</div>
                                <div>$<input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input"></div>

                            </div>
                            <div class="d-flex d_sm_block justify-content-between small_text ps-lg-3  ">
                                <div class=" ">Gifts</div>
                                <div>$<input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input"></div>

                            </div>
                            <div class="d-flex d_sm_block justify-content-between small_text ps-lg-3  ">
                                <div class=" ">Other <input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input responsive_input"
                                        style="width:615px;"></div>
                                <div>$<input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input"></div>

                            </div>
                            <div class="d-flex d_sm_block justify-content-end small_text ps-lg-3 ">
                                <div class="fw-bold pe-lg-3 ">Total Miscellaneous Expenses for Past 12 Months:</div>
                                <div>$<input type="text" name="" id=""
                                        class="border-0 border-bottom responsive_input"></div>

                            </div>
                        </div>

                    </div>
                    <div class="pt-lg-5">

                        @include('layouts.footer18', ['page' => 10])
                    </div>

                </section>
                <section class="section_area p-5" id="eleventh_section">

                    <div class="text-center fw-bold">MAINE JUDICIAL BRANCH</div>
                    <div class="pt-lg-3"><input type="checkbox" name="" id=""> I hereby certify
                        that the information in this Financial Statement is complete and is based on my personal
                        knowledge,
                        information, and belief.</div>
                    <div class="pt-lg-3"><input type="checkbox" name="" id=""> I certify that I
                        will send the opposing party complete copies of this Financial Statement, my federal tax returns
                        for the
                        last two years, and my three most recent paystubs,<b> not later than three days before
                            mediation.</b></div>
                    <div class="pt-lg-3"><input type="checkbox" name="" id=""> I swear under
                        penalty of perjury that the above statements are true and correct. I understand that these
                        statements
                        are made for use as evidence in court and that I am subject to prosecution for perjury
                        punishable by up to 5 years in
                        prison and a fine of up to $5,000.00 for giving false information to the court.</div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div>Date (mm/dd/yyyy): <input type="date" name="" class="border-0 border-bottom responsive_input w-50" id=""></div>
                            <div class="mt-lg-4">Attorney: <input type="text" name="" class="border-0 border-bottom responsive_input" style="width:420px;" id=""></div>
                            <div>Bar No.: <input type="text" name="bar_no" class="border-0 border-bottom responsive_input w-75" id=""></div>
                            <div>Address: <input type="text" name="address_2" class="border-0 border-bottom responsive_input  " style="width:425px;" id=""></div>
                            <div class="responsive_input  ms_sm_0 w-75" style="margin-left:73px;"> <input type="text" name="address_2.1" class="border-0 border-bottom responsive_input w-100" id=""></div>
                            <div class="responsive_input  ms_sm_0 w-75" style="margin-left:73px;"> <input type="text" name="address_2.2" class="border-0 border-bottom responsive_input w-100" id=""></div>
                            <div>Telephone: <input type="number" name="Telephone" class="border-0 border-bottom responsive_input  " style="width:410px;" id=""></div>
                            <div>Email: <input type="text" name="Email" class="border-0 border-bottom responsive_input "  style="width:450px;" id=""></div>
                        </div>
                        <div class="col-lg-6">
                            <div> <input type="text" name=""
                                    class="border-0 border-bottom responsive_input" style="width:495px;" id="">
                                <div class="small_text "> Signature of <input type="checkbox" name="" id="" value="Plaintiff"> Plaintiff <input type="checkbox" name="" id="" value="Defendant"> Defendant</div>
                            </div>
                            <div class="mt-lg-4">Name: <input type="name_2" name="" class="border-0 border-bottom responsive_input" style="width:440px;" id="">
                            <div class="small_text"> <input type="checkbox" name="" id="" value="Address is confidential"> Address is confidential (if so, leave blank below) </div></div>

                        <div>Address: <input type="text" name="address_2.3" class="border-0 border-bottom responsive_input  " style="width:425px;" id=""></div>
                        <div class="responsive_input  ms_sm_0 w-75" style="margin-left:73px;"> <input
                                type="text" name="address_2.4" class="border-0 border-bottom responsive_input w-100" id=""></div>

                        <div>Telephone: <input type="text" name="Telephone_2" class="border-0 border-bottom responsive_input" style="width:410px;" id=""></div>
                        <div>Email: <input type="text" name="Email_2" class="border-0 border-bottom responsive_input "  style="width:450px;" id=""></div>
                        </div>
                    </div>
                    <div class="text-center fw-bold py-lg-3">STATE OF MAINE</div>
                    <div><input type="text" name="" id=""
                            class="border-0 border-bottom responsive_input">County</div>
                    <div class="mt-lg-3">Personally appeared the above-named party <input type="text"
                            name="" id="" class="border-0 border-bottom responsive_input"> , and
                        made oath that
                        the foregoing statements are true under penalty of perjury.</div>
                    <div class="row mt-lg-3 mb-5">
                        <div class="col-lg-6">
                            <div>Date (mm/dd/yyyy): <input type="date" name=""
                                    class="border-0 border-bottom responsive_input w-50" id=""></div>

                        </div>
                        <div class="col-lg-6">
                            <div> <input type="text" name=""
                                    class="border-0 border-bottom responsive_input w-75" id="">
                                <div class="small_text "> <input type="checkbox" name="" id=""
                                        value="Attorney at Law"> Attorney at Law <input type="checkbox"
                                        name="" id="" value="Notary Public"> Notary Public <input
                                        type="checkbox" name="" id="" value="Clerk"> Clerk
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pt-lg-5">

                        @include('layouts.footer18', ['page' => 11])
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
            <option value="#seventh_section">Seventh Section</option>
            <option value="#eighth_section">Eighth Section</option>
            <option value="#ninth_section">Ninth Section</option>
            <option value="#tenth_section">Tenth Section</option>
            <option value="#eleventh_section">Eleventh Section</option>
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

