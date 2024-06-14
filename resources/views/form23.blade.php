{{-- KY Disclosure statement 238-239.pdf --}}
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
        .blue_border{
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
            <form action="{{ route('form23.submit') }}" method="post">
                @csrf
                <section class="section_area p-5">
                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show">{{ session('success') }} <button
                                    type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                        <div class="row">
                            <div class="col-md-4 border border-2 border-dark   border-start-0 border-end-0 ">
                                <div class="fw-bold small_text"> <input type="checkbox" name="dspv_1"  value="True" id=""> AOC-238 Doc. Code DSPV</div>
                                <div class="fw-bold small_text"> <input type="checkbox" name="dsfv_1"  value="True" id=""> AOC-239 Doc. Code DSFV</div>
                                <div class="small_text">Rev. 1-15</div>
                                <div class="small_text">Page 1 of 10</div>
                                <div class="small_text">Commonwealth of Kentucky</div>
                                <div class="small_text">Court of Justice www.courts.ky.gov</div>
                                <div class="small_text">FCRPP 2 and FCRPP 3</div>
                            </div>
                            <div class="col-md-4 col-md-4  border border-2 border-dark py-2">
                                <div class="mx-auto text-center">
                                    <img src="{{ asset('logo_23.png') }}" alt="" class="w-25 ">
                                </div>
                                    <div class="fw-bold col "> <input type="checkbox" name="pvds_checkbox" value="True" id=""> Preliminary Verified Disclosure Statement*</div>
                                    <div class="fw-bold col "> <input type="checkbox" name="fvds_checkbox" value="True" id=""> Final Verified Disclosure Statement*</div>
                            </div>
                            <div class="col-md-4 border border-2 border-start-0 border-end-0 border-dark pt-lg-3">
                                <div class="d-flex d_sm_block">
                                    <div class="pe-1 my-auto">Case No.</div>
                                    <div class=" ">
                                        <input type="text" name="case_no"  class="responsive_input border-none border-0 border-bottom  shadow-none my-auto" style="width:293px;">
                                    </div>
                                </div>
                                <div class="d-flex d_sm_block">
                                    <div class="pe-1 my-auto">Court</div>
                                    <div class="w-100">
                                        <input type="text" name="court_name" class="w-100 border-none border-0 border-bottom  shadow-none my-auto">
                                    </div>
                                </div>
                                <div class="d-flex d_sm_block">
                                    <div class="pe-1 my-auto">County</div>
                                    <div class="w-100">
                                        <select id="county" name="county_name" class="form-select my-auto mt-2 form-control border-0 border-bottom">
                                            <option selected=""> </option>
                                            <option value="Adair">Adair</option>
                                            <option value="Allen">Allen</option>
                                            <option value="Anderson">Anderson</option>
                                            <option value="Ballard">Ballard</option>
                                            <option value="Barren">Barren</option>
                                            <option value="Bath">Bath</option>
                                            <option value="Bell">Bell</option>
                                            <option value="Boone">Boone</option>
                                            <option value="Bourbon">Bourbon</option>
                                            <option value="Boyd">Boyd</option>
                                            <option value="Boyle">Boyle</option>
                                            <option value="Bracken">Bracken</option>
                                            <option value="Breathitt">Breathitt</option>
                                            <option value="Breckinridge">Breckinridge</option>
                                            <option value="Bullitt">Bullitt</option>
                                            <option value="Butler">Butler</option>
                                            <option value="Caldwell">Caldwell</option>
                                            <option value="Calloway">Calloway</option>
                                            <option value="Campbell">Campbell</option>
                                            <option value="Carlisle">Carlisle</option>
                                            <option value="Carroll">Carroll</option>
                                            <option value="Carter">Carter</option>
                                            <option value="Casey">Casey</option>
                                            <option value="Christian">Christian</option>
                                            <option value="Clark">Clark</option>
                                            <option value="Clay">Clay</option>
                                            <option value="Clinton">Clinton</option>
                                            <option value="Crittenden">Crittenden</option>
                                            <option value="Cumberland">Cumberland</option>
                                            <option value="Daviess">Daviess</option>
                                            <option value="Edmonson">Edmonson</option>
                                            <option value="Elliott">Elliott</option>
                                            <option value="Estill">Estill</option>
                                            <option value="Fayette">Fayette</option>
                                            <option value="Fleming">Fleming</option>
                                             <option value="Floyd">Floyd</option>
                                            <option value="Franklin">Franklin</option>
                                            <option value="Fulton">Fulton</option>
                                            <option value="Gallatin">Gallatin</option>
                                            <option value="Garrard">Garrard</option>
                                            <option value="Grant">Grant</option>
                                            <option value="Graves">Graves</option>
                                            <option value="Grayson">Grayson</option>
                                            <option value="Green">Green</option>
                                            <option value="Greenup">Greenup</option>
                                            <option value="Hancock">Hancock </option>
                                            <option value="Hardin">Hardin </option>
                                            <option value="Harlan">Harlan </option>
                                            <option value="Harrison">Harrison </option>
                                            <option value="Hart">Hart</option>
                                            <option value="Henderson">Henderson</option>
                                            <option value="Henry">Henry</option>
                                            <option value="Hickman">Hickman</option>
                                            <option value="Hopkins">Hopkins</option>
                                            <option value="Hopkins">Hopkins</option>
                                            <option value="Jackson">Jackson</option>
                                            <option value="Jefferson">Jefferson</option>
                                            <option value="Jessamine">Jessamine</option>
                                            <option value="Johnson">Johnson</option>
                                            <option value="Kenton">Kenton</option>
                                            <option value="Knott">Knott</option>
                                            <option value="Knox">Knox</option>
                                            <option value="Larue">Larue</option>
                                             <option value="Laurel">Laurel</option>
                                            <option value="Lawrence">Lawrence</option>
                                            <option value="Lee">Lee</option>
                                            <option value="Leslie">Leslie</option>
                                            <option value="Letcher">Letcher</option>
                                            <option value="Lewis">Lewis</option>
                                            <option value="Lencoin">Lencoin</option>
                                            <option value="Livingston">Livingston</option>
                                            <option value="Logan">Logan</option>
                                            <option value="Lyon">Lyon</option>
                                            <option value="Madison">Madison</option>
                                            <option value="Magoffin">Magoffin</option>
                                            <option value="Martin">Martin</option>
                                            <option value="Masom">Masom</option>
                                            <option value="McCracken">McCracken</option>
                                            <option value="McLean">McLean</option>
                                            <option value="Meade">Meade</option>
                                            <option value="Menifee">Menifee</option>
                                            <option value="Metcalf">Metcalf</option>
                                            <option value="Monroe">Monroe</option>
                                            <option value="Montgomery">Montgomery</option>
                                            <option value="Morgan">Morgan</option>
                                            <option value="Muhlenberg">Muhlenberg</option>
                                            <option value="Nelson">Nelson</option>
                                            <option value="Nicholas">Nicholas</option>
                                            <option value="Ohio">Ohio</option>
                                            <option value="Oldham">Oldham</option>
                                            <option value="Owen">Owen</option>
                                            <option value="Owsley">Owsley</option>
                                            <option value="Pendleton">Pendleton</option>
                                            <option value="Perry">Perry</option>
                                            <option value="Pike">Pike</option>
                                            <option value="Powell">Powell</option>
                                            <option value="Pulaski">Pulaski</option>
                                            <option value="Roberson">Roberson</option>
                                            <option value="Rockcastle">Rockcastle</option>
                                            <option value="Rowal">Rowal</option>
                                            <option value="Russell">Russell</option>
                                            <option value="Scott">Scott</option>
                                            <option value="Shelby">Shelby</option>
                                            <option value="Simpson">Simpson</option>
                                            <option value="Spencer">Spencer</option>
                                            <option value="Taylor">Taylor</option>
                                            <option value="Tood">Tood</option>
                                            <option value="Trigg">Trigg</option>
                                            <option value="Trimble">Trimble</option>
                                            <option value="Union">Union</option>
                                            <option value="Warren">Warren</option>
                                            <option value="Washington">Washington</option>
                                            <option value="Wayne">Wayne</option>
                                            <option value="Webstar">Webstar</option>
                                            <option value="Whitley">Whitley</option>
                                            <option value="Wolfe">Wolfe</option>
                                            <option value="Woodford">Woodford</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="d-flex d_sm_block">
                                    <div class="pe-1 my-auto">Division</div>
                                    <div class="w-100">
                                        <input type="text" name="division" class="w-100 border-none border-0 border-bottom  shadow-none my-auto">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-6 border-1">
                                <input type="text" class=" border-none border-0 border-bottom  shadow-none my-auto w-75 responsive_input" name="petitioner_name">
                                <div class="fs-6 pt-3">and</div>
                                <input type="text" class=" border-none border-0 border-bottom  shadow-none my-auto w-75 responsive_input" name="plaintiff_name">
                            </div>
                            <div class="col-md-6 mx-auto text-center  border-1 px-0 ">
                                <div class="fs-6 pt-lg-4">PETITIONER</div>
                                <div class="fs-6 pt-lg-5">RESPONDENT</div>
                            </div>
                        </div>
                        <div>
                        <div class="pt-lg-3">  <input type="radio" name="soa" value="Petitioner" id=""> Petitioner <input type="radio" name="soa" value="Respondent" id="" class="ps-2">  Respondent submits under oath the following Verified Disclosure Statement pursuant to FCRPP 2 OR
                            FCRPP 3, which requires full and prompt disclosure of the following information:</div>
                            <div class="fw-bold py-lg-3">NOTE: A response of “see attached” is not appropriate for any portion of this statement. Attach documents  requested herein only.</div>
                            <div class="fw-bold"> <span class="me-3">I. </span> IDENTIFYING INFORMATION OF BOTH PARTIES</div>
                            <div class="row pt-lg-3">
                                <div class="col-lg-6">
                                    <div>Petitioner</div>
                                    <div class="d-flex d_sm_block pt-2">
                                        <div class="pe-1 my-auto small_text">Name:</div>
                                        <div>
                                            <input type="text" name="p_name" class="border-none border-0 border-bottom  shadow-none my-auto responsive_input" style="width:500px;">
                                        </div>
                                    </div>
                                    <div class="d-flex d_sm_block pt-2">
                                        <div class="pe-1 my-auto small_text">Street Address: </div>
                                        <div class="">
                                            <input type="text" name="p_street_address" class="border-none border-0 border-bottom  shadow-none my-auto responsive_input" style="width:441px;">
                                        </div>
                                    </div>
                                    <div class="d-flex d_sm_block pt-2">
                                        <div class="pe-1 my-auto small_text">City, State, Zip: </div>
                                        <div class="">
                                            <input type="text" name="p_zipcode" class="border-none border-0 border-bottom  shadow-none my-auto responsive_input" style="width:445px;">
                                        </div>
                                    </div>
                                    <div class="d-flex d_sm_block">
                                        <div class="pe-1 my-auto small_text">Age: </div>
                                        <div class="">
                                            <input type="text" name="p_age" class="border-none border-0 border-bottom  shadow-none my-auto responsive_input" style="width:50px;">
                                        </div>
                                        <div class="pe-1 my-auto small_text ps-lg-4">Phone #: </div>
                                        <div class="">
                                            <input type="text" name="p_phone" class="border-none border-0 border-bottom  shadow-none my-auto responsive_input" style="width:378px;">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div>Respondent</div>
                                    <div class="d-flex d_sm_block pt-2">
                                        <div class="pe-1 my-auto small_text">Name:</div>
                                        <div>
                                            <input type="text" name="r_name" class="border-none border-0 border-bottom  shadow-none my-auto responsive_input" style="width:500px;">
                                        </div>
                                    </div>
                                    <div class="d-flex d_sm_block pt-2">
                                        <div class="pe-1 my-auto small_text">Street Address: </div>
                                        <div class="">
                                            <input type="text" name="r_street_address" class="border-none border-0 border-bottom  shadow-none my-auto responsive_input" style="width:441px;">
                                        </div>
                                    </div>
                                    <div class="d-flex d_sm_block pt-2">
                                        <div class="pe-1 my-auto small_text">City, State, Zip: </div>
                                        <div class="">
                                            <input type="text" name="r_zipcode" class="border-none border-0 border-bottom  shadow-none my-auto responsive_input" style="width:445px;">
                                        </div>
                                    </div>
                                    <div class="d-flex d_sm_block pt-2">
                                        <div class="pe-1 my-auto small_text">Age: </div>
                                        <div class="">
                                            <input type="text" name="r_age" class="border-none border-0 border-bottom  shadow-none my-auto responsive_input" style="width:50px;">
                                        </div>
                                        <div class="pe-1 my-auto small_text ps-lg-4">Phone #: </div>
                                        <div class="">
                                            <input type="text" name="r_phone" class="border-none border-0 border-bottom  shadow-none my-auto responsive_input" style="width:378px;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                             <div class="fw-bold"> <span class="me-3 fw-normal">II. </span>INCOME AND EMPLOYMENT INFORMATION OF BOTH PARTIES (<span class="fw-normal">If self-employed name of company and adjusted gross monthly income</span>) IDENTIFYING INFORMATION OF BOTH PARTIES</div>
                            <div class="row">
                                <div class="">Petitioner</div>
                                <div class="col-lg-6">
                                    <div class="d-flex d_sm_block pt-2">
                                        <div class="pe-1 my-auto small_text">Employer Name:</div>
                                        <div> <input type="text" name="p_employer_name" class="border-none border-0 border-bottom responsive_input shadow-none my-auto"  style="width:435px"> </div>
                                    </div>
                                    <div class="d-flex d_sm_block pt-2">
                                        <div class="pe-1 my-auto small_text">Gross monthly income: $</div>
                                        <div class="">  <input type="text" name="p_gmi" class="border-none border-0 border-bottom responsive_input shadow-none my-auto" style="width:382px"> </div>
                                    </div>
                                    <div class="d-flex d_sm_block pt-2">
                                        <div class="pe-1 my-auto small_text">Other income: $  </div>
                                        <div class="">  <input type="text" name="p_oi" class="border-none border-0 border-bottom responsive_input shadow-none my-auto" style="width:441px"> </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div>Respondent</div>
                                    <div class="d-flex d_sm_block pt-2">
                                        <div class="pe-1 my-auto small_text">Employer Name:</div>
                                        <div class="">
                                            <input type="text" name="r_en" class="border-none border-0 border-bottom responsive_input shadow-none my-auto" style="width:435px">
                                        </div>
                                    </div>
                                    <div class="d-flex d_sm_block pt-2">
                                        <div class="pe-1 my-auto small_text">Gross monthly income: $  </div>
                                        <div class="">
                                            <input type="text" name="r_gmi" class=" border-none border-0 border-bottom responsive_input shadow-none my-auto" style="width:382px">
                                        </div>
                                    </div>
                                    <div class="d-flex d_sm_block pt-2">
                                        <div class="pe-1 my-auto small_text">Other income: $  </div>
                                        <div class="">
                                            <input type="text" name="r_oi" class=" border-none border-0 border-bottom responsive_input shadow-none my-auto" style="width:441px">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="fw-bold"> <span class="me-3 fw-normal">III. </span> MARRIAGE INFORMATION</div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="d-flex d_sm_block pt-2">
                                        <div class="pe-1 my-auto small_text">Date of Marriage:</div>
                                        <div>  <input type="text" name="mi_dom" class="border-none border-0 border-bottom responsive_input shadow-none my-auto"  style="width:430px">  </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 pt-2">
                                    <div class="d-flex d_sm_block pt-2">
                                        <div class="pe-1 my-auto small_text">Date of separation:</div>
                                        <div class=""> <input type="text" name="mi_dos" class="border-none border-0 border-bottom responsive_input shadow-none my-auto" style="width:420px"> </div>
                                    </div>
                                </div>
                                <div class="d-flex d_sm_block pt-2">
                                    <div class="pe-1 my-auto small_text">Place of Marriage (city, county & state):</div>
                                    <div class="">
                                        <input type="text" name="mi_pom" class="border-none border-0 border-bottom responsive_input shadow-none my-auto" style="width:886px">
                                    </div>
                                </div>
                            </div>
                        </div>

                </section>
                <section class="section_area p-5">
                     @include('layouts.header1', ['page' => 2])
                    <div class="fw-bold"> <span class="me-3 fw-normal">IV. </span>CHILDREN’S INFORMATION (<span class="fw-normal">If more than 3 children, continue on a separate sheet</span>)</div>
                    <div class="me-lg-3">A. Minor children born to parties (number <input type="text" name="ci_number" id="" class="border-0 border-bottom responsive_input">)	 <span class="ms-lg-5"><input type="checkbox" name="ci_mca" value="True" id=""> More CHILDREN attached?</span>	</div>
                    <div class="table-responsive pt-lg-3">
                        <table class="table table-bordered border-dark">
                            <tbody>
                                <tr>
                                    <td class="w-75">Name</td>
                                    <td class="w-25">Current Age</td>
                                </tr>
                                <tr>
                                    <td><input type="text" name="ci_name1" class="border-0 form-control"></td>
                                    <td><input type="text" name="ci_ca1" class="border-0 form-control"></td>
                                </tr>
                                <tr>
                                    <td><input type="text" name="ci_name2" class="border-0 form-control"></td>
                                    <td><input type="text" name="ci_ca2" class="border-0 form-control"></td>
                                </tr>
                                <tr>
                                    <td><input type="text" name="ci_name3" class="border-0 form-control"></td>
                                    <td><input type="text" name="ci_ca3" class="border-0 form-control"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div>
                        <div class="small_text"> B. Monthly child care/day care expenses: Cost $ <input type="text" name="ci_mcc" id="" class="border-0 border-bottom responsive_input">   <span class="ps-lg-5">Paid by  <input type="text" name="ci_paidb" id="" class="border-0 border-bottom responsive_input"></span> </div>
                        <div class="small_text"> C. Monthly medical, dental and vision insurance for children: Cost $ <input type="text" name="ci_mmd" id="" class="border-0 border-bottom responsive_input">   <span class="ps-lg-5">Paid by  <input type="text" name="ci_paidc" id="" class="border-0 border-bottom responsive_input"></span> </div>
                        <div class="small_text"> D. Either party court-ordered to pay child support for a child born before the children born of this marriage? <span class="ps-lg-2">   <input type="radio" name="ci_epc_checbox" id="" value="Yes"  > Yes</span> <span class="ps-lg-2">   <input type="radio" name="ci_epc_checbox" value="No" id=" "> No</span> </div>
                        <div class="small_text"> Paying party <input type="text" name="ci_pp" id="" class="border-0 border-bottom responsive_input" style="width:600px;">   <span class="ps-lg-5">Amount: $  <input type="text" name="ci_amount" id="" class="border-0 border-bottom responsive_input"  style="width:355px;"></span> </div>
                        <div class="small_text"> Children: (List names and ages) <input type="text" name="ci_lnaa1" id="" class="border-0 border-bottom responsive_input"  style="width:957px;">   </div>
                        <div> <input type="text" name="ci_lnaa2" id="" class="border-0 border-bottom responsive_input w-100">   </div>

                    </div>

                    <div>
                        <div class="fw-bold py-3 small_text">V. SUMMARY OF ASSETS & DEBTS</div>
                        <div class="small_text">A. REAL ESTATE (If more than 2 properties, continue on a separate sheet)</div>
                        <div class="small_text">Are you making a non-marital claim? <input type="radio" name="soa_non_marital_checkbox" id="" value="Yes">  Yes <input type="radio" name="soa_non_marital_checkbox" id="" value='No'> No If yes, you must comply with Section IX below.</div>
                        <div class="py-lg-2 ">Property 1:</div>

                        <div class="small_text">Address : <input type="text" name="p1_address" id="" class="border-0 border-bottom responsive_input"  style="width:1103px;"></div>
                        <div class="small_text">1st Mortgage Company: <input type="text" name="p1_mc" id="" class="border-0 border-bottom responsive_input"  style="width:1005px;"></div>
                        <div class="small_text">1st Mortgage Payoff Amount: <input type="text" name="p1_mpa" id="" class="border-0 border-bottom responsive_input"  style="width:469px;"></div>
                        <div class="small_text">2nd Mortgage Company or Home Equity Loan: <input type="text" name="p1_mch" id="" class="border-0 border-bottom responsive_input"   style="width:855px;"></div>
                        <div class="small_text">2nd Mortgage or Home Equity Loan Payoff Amount: <input type="text" name="p1_mhe" id="" class="border-0 border-bottom responsive_input"    style="width:438px;"></div>
                        <div class="small_text"> <span>Fair Market Value:</span> <input type="text" name="p1_fmv" id="" class="border-0 border-bottom responsive_input"   style="width:295px;"><span>Valuation Date:</span> <input type="text" name="p1_vd" id="" class="border-0 border-bottom responsive_input"  style="width:295px;"> <span>Equity: </span> <input type="text" name="p1_equity" id="" class="border-0 border-bottom responsive_input"  style="width:295px;"></div>

                        <div class="py-lg-2 ">Property 2:</div>

                        <div class="small_text">Address : <input type="text" name="p2_address" id="" class="border-0 border-bottom responsive_input"  style="width:1103px;"></div>
                        <div class="small_text">1st Mortgage Company: <input type="text" name="p2_mc" id="" class="border-0 border-bottom responsive_input"  style="width:1005px;"></div>
                        <div class="small_text">1st Mortgage Payoff Amount: <input type="text" name="p2_mpa" id="" class="border-0 border-bottom responsive_input"  style="width:469px;"></div>
                        <div class="small_text">2nd Mortgage Company or Home Equity Loan: <input type="text" name="p2_mch" id="" class="border-0 border-bottom responsive_input"   style="width:855px;"></div>
                        <div class="small_text">2nd Mortgage or Home Equity Loan Payoff Amount: <input type="text" name="p2_mhe" id="" class="border-0 border-bottom responsive_input"    style="width:438px;"></div>
                        <div class="small_text"> <span>Fair Market Value:</span> <input type="text" name="p2_fmv" id="" class="border-0 border-bottom responsive_input"   style="width:295px;"><span>Valuation Date:</span> <input type="text" name="p2_vd" id="" class="border-0 border-bottom responsive_input"  style="width:295px;"> <span>Equity: </span> <input type="text" name="p2_equity" id="" class="border-0 border-bottom responsive_input"  style="width:295px;"></div>

                        <div class="row py-3 pt-lg-5">
                            <div class="col-lg-6">
                            <div class="small_text"> More REAL ESTATE attached? <input type="radio" name="mrea_checkbox" value="Yes" id=""> Yes <input type="radio" name="mrea_checkbox" value="No" id=""> No </div>
                            </div>
                            <div class="col-lg-6 text-end">
                                <div class="small_text">Total Real Estate Equity:  <input type="text" name="tree"  class="border-0 border-bottom"></div>
                            </div>
                        </div>
                    </div>


                </section>
                <section class="section_area p-5">
                    @include('layouts.header1', ['page' => 3])

                    <div>B. VEHICLES - Automobiles, Motorcycles, Boats, Trucks, Motor Homes, etc. (If more than 3 vehicles, continue on a separate sheet) Are you making a non-marital claim? <input type="radio" name="v_claim_checkbox" value="No" id="" > Yes <input type="radio" name="v_claim_checkbox" value="Yes" id="" class="ms-lg-2"> No If yes, you must comply with Section IX below.</div>
                    <div class="pt-lg-3">Vehicle 1:</div>
                    <div class="small_text"><span>Primary Driver: </span><input type="text" name="v1_primary_driver1" id="" class="border-0 border-bottom responsive_input" style="width:400px">  <span>Year, Make & Model:</span> <input type="text" name="v1_ymm1" id="" class="border-0 border-bottom responsive_input" style="width:520px"></div>
                    <div class="small_text"> <span>NADA Value:</span> <input type="text" name="v1_nada_v1" id="" class="border-0 border-bottom responsive_input"   style="width:293px;"><span>Valuation Date:</span> <input type="text" name="v1_v_date1" id="" class="border-0 border-bottom responsive_input"  style="width:293px;"> <span>Debt Owed: </span> <input type="text" name="v1_d_owed1" id="" class="border-0 border-bottom responsive_input"  style="width:293px;"></div>
                    <div class="small_text"> <span>Lien Holder:</span> <input type="text" name="v1_lien_holder1" id="" class="border-0 border-bottom responsive_input"   style="width:860px;"><span>Equity:</span> <input type="text" name="v1_equity1" id="" class="border-0 border-bottom responsive_input" >  </div>
                    <div class="small_text"> <span>Is this a leased vehicle? <input type="radio" name="v1_leased_vehicle_checkbox" value="Yes" id=""> Yes  <input type="radio" name="v1_leased_vehicle_checkbox" id="" value="False" class="ms-lg-2"> No If yes, please complete the following: Monthly Payment</span> <input type="text" name="v1_monthly_payment1" id="" class="border-0 border-bottom responsive_input"   style="width:540px;">  </div>
                    <div class="small_text"> <span>Lease Term Ends</span> <input type="text" name="v1_lease_term1" id="" class="border-0 border-bottom responsive_input"   style="width:195px;"> </div>


                    <div class="pt-lg-3">Vehicle 2:</div>
                    <div class="small_text"><span>Primary Driver: </span><input type="text" name="v2_primary_driver1" id="" class="border-0 border-bottom responsive_input" style="width:400px">  <span>Year, Make & Model:</span> <input type="text" name="v2_ymm1" id="" class="border-0 border-bottom responsive_input" style="width:520px"></div>
                    <div class="small_text"> <span>NADA Value:</span> <input type="text" name="v2_nada_v1" id="" class="border-0 border-bottom responsive_input"   style="width:293px;"><span>Valuation Date:</span> <input type="text" name="v2_v_date1" id="" class="border-0 border-bottom responsive_input"  style="width:293px;"> <span>Debt Owed: </span> <input type="text" name="v2_d_owed1" id="" class="border-0 border-bottom responsive_input"  style="width:293px;"></div>
                    <div class="small_text"> <span>Lien Holder:</span> <input type="text" name="v2_lien_holder1" id="" class="border-0 border-bottom responsive_input"   style="width:860px;"><span>Equity:</span> <input type="text" name="v2_equity1" id="" class="border-0 border-bottom responsive_input" >  </div>
                    <div class="small_text"> <span>Is this a leased vehicle? <input type="radio" name="v2_leased_vehicle_checkbox" value="Yes" id=""> Yes  <input type="radio" name="v2_leased_vehicle_checkbox" id="" value="False" class="ms-lg-2"> No If yes, please complete the following: Monthly Payment</span> <input type="text" name="v2_monthly_payment1" id="" class="border-0 border-bottom responsive_input"   style="width:540px;">  </div>
                    <div class="small_text"> <span>Lease Term Ends</span> <input type="text" name="v2_lease_term1" id="" class="border-0 border-bottom responsive_input"   style="width:195px;"> </div>

                    <div class="pt-lg-3">Vehicle 3:</div>
                    <div class="small_text"><span>Primary Driver: </span><input type="text" name="v3_primary_driver1" id="" class="border-0 border-bottom responsive_input" style="width:400px">  <span>Year, Make & Model:</span> <input type="text" name="v3_ymm1" id="" class="border-0 border-bottom responsive_input" style="width:520px"></div>
                    <div class="small_text"> <span>NADA Value:</span> <input type="text" name="v3_nada_v1" id="" class="border-0 border-bottom responsive_input"   style="width:293px;"><span>Valuation Date:</span> <input type="text" name="v3_v_date1" id="" class="border-0 border-bottom responsive_input"  style="width:293px;"> <span>Debt Owed: </span> <input type="text" name="v3_d_owed1" id="" class="border-0 border-bottom responsive_input"  style="width:293px;"></div>
                    <div class="small_text"> <span>Lien Holder:</span> <input type="text" name="v3_lien_holder1" id="" class="border-0 border-bottom responsive_input"   style="width:860px;"><span>Equity:</span> <input type="text" name="v3_equity1" id="" class="border-0 border-bottom responsive_input" >  </div>
                    <div class="small_text"> <span>Is this a leased vehicle? <input type="radio" name="v3_leased_vehicle_checkbox" value="Yes" id=""> Yes  <input type="radio" name="v3_leased_vehicle_checkbox" id="" value="False" class="ms-lg-2"> No If yes, please complete the following: Monthly Payment</span> <input type="text" name="v3_monthly_payment1" id="" class="border-0 border-bottom responsive_input"   style="width:540px;">  </div>
                    <div class="small_text"> <span>Lease Term Ends</span> <input type="text" name="v3_lease_term1" id="" class="border-0 border-bottom responsive_input"   style="width:195px;"> </div>
                    <div class="row py-3 pt-lg-5">
                        <div class="col-lg-6">
                        <div class="small_text"> More VEHICLES attached? <input type="radio" name="more_vehicles_attached_checkbox" id="" value="Yes"> Yes <input type="radio" name="more_vehicles_attached_checkbox" value="No" id=""> No </div>
                        </div>
                        <div class="col-lg-6 text-end">
                            <div class="small_text">Total Vehicle Equity:  <input type="text" name="total_vehicle_equity" id="" class="border-0 border-bottom"></div>
                        </div>
                    </div>

                    <div class="pt-lg-3">   C. BANK ACCOUNTS – Checking, Savings, CDs, Money Market accounts, etc. (If more than 3 accounts, continue on a separate sheet) (Do not list account numbers)</div>
                        <div>Are you making a non-marital claim? <input type="radio" name="ba_non_marital" value="Yes" id=""> Yes <input type="radio" name="ba_non_marital" value="No"  id="" class="ms-lg-2"> No If yes, you must comply with Section IX below.</div>
                        <div class="table-responsive pt-lg-3">
                            <table class="table table-bordered border-dark">
                                <tr>
                                    <td>Owner(s)</td>
                                    <td>Institution Name <br>  [ NO ACCOUNT NUMBERS]</td>
                                    <td>Type of Account </td>
                                    <td>Valuation Date </td>
                                    <td> Balance</td>
                                </tr>
                                <tr>
                                    <td><input type="text" name="ba_owner1" class="border-0 form-control"></td>
                                    <td><input type="text" name="ba_institution_name1" class="border-0 form-control"></td>
                                    <td><input type="text" name="ba_type_of_account1" class="border-0 form-control"></td>
                                    <td><input type="text" name="ba_value_date1" class="border-0 form-control"></td>
                                    <td><input type="text" name="ba_balance1" class="border-0 form-control"></td>
                                </tr>
                                <tr>
                                    <td><input type="text" name="ba_owner2" class="border-0 form-control"></td>
                                    <td><input type="text" name="ba_institution_name2" class="border-0 form-control"></td>
                                    <td><input type="text" name="ba_type_of_account2" class="border-0 form-control"></td>
                                    <td><input type="text" name="ba_value_date2" class="border-0 form-control"></td>
                                    <td><input type="text" name="ba_balance2" class="border-0 form-control"></td>
                                </tr>
                                <tr>
                                    <td><input type="text" name="ba_owner3" class="border-0 form-control"></td>
                                    <td><input type="text" name="ba_institution_name3" class="border-0 form-control"></td>
                                    <td><input type="text" name="ba_type_of_account3" class="border-0 form-control"></td>
                                    <td><input type="text" name="ba_value_date3" class="border-0 form-control"></td>
                                    <td><input type="text" name="ba_balance3" class="border-0 form-control"></td>
                                </tr>
                                <tr>
                                    <td colspan="2">More BANK ACCOUNTS attached? <input type="checkbox" name="more_ba_attached_checkbox" value="Yes" id=""> Yes <input type="checkbox" name="more_ba_attached_checkbox" value="Yes" id=""> No</td>
                                    <td colspan="2">Total Current Balances:</td>
                                    <td><input type="text" name="ba_total_current_balances" class="border-0 form-control"></td>
                                </tr>
                            </table>
                        </div>

                        <div>D. STOCKS, BONDS, PORTFOLIOS, MUTUAL FUNDS, ETC. (If more than 3, continue on a separate sheet)
                            Are you making a non-marital claim? <input type="radio" name="sb_non_marital" value="Yes" id=""> Yes <input type="radio" name="sb_non_marital" value="No" id="" class="ms-lg-2"> No If yes, you must comply with Section IX below.</div>

                            <div class="table-responsive pt-lg-3">
                                <table class="table table-bordered border-dark">
                                    <tr>
                                        <td>Institution Name</td>
                                        <td colspan="2">Stock/Portfolio Name</td>
                                        <td >Valuation Date</td>
                                        <td>Current Value</td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name="sb_instutution_name1" class="border-0 form-control"></td>
                                        <td  colspan="2"><input type="text" name="sb_stock_name1" class="border-0 form-control"></td>
                                        <td  ><input type="text" name="sb_valuation_date1" class="border-0 form-control"></td>
                                        <td><input type="text" name="sb_current_value1" class="border-0 form-control"></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name="sb_instutution_name2" class="border-0 form-control"></td>
                                        <td  colspan="2"><input type="text" name="sb_stock_name2" class="border-0 form-control"></td>
                                        <td  ><input type="text" name="sb_valuation_date2" class="border-0 form-control"></td>
                                        <td><input type="text" name="sb_current_value2" class="border-0 form-control"></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name="sb_instutution_name3" class="border-0 form-control"></td>
                                        <td  colspan="2"><input type="text" name="sb_stock_name3" class="border-0 form-control"></td>
                                        <td><input type="text" name="sb_valuation_date3" class="border-0 form-control"></td>
                                        <td><input type="text" name="sb_current_value3" class="border-0 form-control"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">More INVESTMENTS attached? <input type="radio" name="sb_more_investments_attached_checkbox" value="Yes" id=""  > Yes <input type="radio" name="sb_more_investments_attached_checkbox" value="No" id="" class="ms-lg-2"> No </td>
                                        <td colspan="2">Total Current Values: </td>
                                        <td><input type="text" name="sb_total_current_values" class="border-0 form-control"></td>
                                    </tr>
                                </table>
                            </div>
                </section>
                <section class="section_area p-5" >
                    @include('layouts.header1', ['page' => 4])
                    <div>E. RETIREMENT BENEFITS – IRA, Keogh, 401(K), 403(b), Pension, etc. (If more than 3, continue on a separate sheet)
                        Are you making a non-marital claim? <input type="radio" name="rb_claim_checkbox" id="" value="Yes"  > Yes <input type="radio" name="rb_claim_checkbox" value="No" id="" class="ms-lg-2"> No If yes, you must comply with Section IX below.</div>
                        <div class="table-responsive pt-lg-3">
                            <table class="table table-bordered border-dark">
                                <tbody>
                                <tr>
                                    <td class="small_text"> Participant</td>
                                    <td class="small_text text-center"> Plan Name</td>
                                    <td class="small_text text-center"> Contrib/Non</td>
                                    <td class="small_text text-center"> Vested/Non</td>
                                    <td class="small_text text-center"> Pay Status?</td>
                                    <td class="small_text text-center"> Valuation Date</td>
                                    <td class="small_text text-center"> Balance</td>
                                </tr>
                                <tr>
                                    <td><input type="text" name="rb_participant1" class="border-0 form-control"></td>
                                    <td><input type="text" name="rb_plain_name1" class="border-0 form-control"></td>
                                    <td><input type="text" name="rb_contrib1" class="border-0 form-control"></td>
                                    <td><input type="text" name="rb_vested1" class="border-0 form-control"></td>
                                    <td><input type="text" name="rb_pay_status1" class="border-0 form-control"></td>
                                    <td><input type="text" name="rb_valuation_date1" class="border-0 form-control"></td>
                                    <td><input type="text" name="rb_balance1" class="border-0 form-control"></td>
                                </tr>
                                <tr>
                                    <td><input type="text" name="rb_participant2" class="border-0 form-control"></td>
                                    <td><input type="text" name="rb_plain_name2" class="border-0 form-control"></td>
                                    <td><input type="text" name="rb_contrib2" class="border-0 form-control"></td>
                                    <td><input type="text" name="rb_vested2" class="border-0 form-control"></td>
                                    <td><input type="text" name="rb_pay_status2" class="border-0 form-control"></td>
                                    <td><input type="text" name="rb_valuation_date2" class="border-0 form-control"></td>
                                    <td><input type="text" name="rb_balance2" class="border-0 form-control"></td>
                                </tr>
                                <tr>
                                    <td><input type="text" name="rb_participant3" class="border-0 form-control"></td>
                                    <td><input type="text" name="rb_plain_name3" class="border-0 form-control"></td>
                                    <td><input type="text" name="rb_contrib3" class="border-0 form-control"></td>
                                    <td><input type="text" name="rb_vested3" class="border-0 form-control"></td>
                                    <td><input type="text" name="rb_pay_status3" class="border-0 form-control"></td>
                                    <td><input type="text" name="rb_valuation_date3" class="border-0 form-control"></td>
                                    <td><input type="text" name="rb_balance3" class="border-0 form-control"></td>
                                </tr>
                                <tr>
                                    <td colspan="3"> More RETIREMENT BENEFITS attached? <input type="radio" name="rb_more_retirement_benefits_attached" class=" ms-2" value="Yes" id=""  > Yes <input type="radio" name="rb_more_retirement_benefits_attached" value="No" id="" class="ms-lg-2"> No </td>
                                    <td colspan="3">Total Retirement Benefits Values:</td>
                                    <td><input type="text" name="rb_total_rbv" class="border-0 form-control"></td>
                                </tr>
                                </tbody>this is 23 no form
                            </table>
                        </div>
                        <div class="small_text">Have any loans been taken out against any of these Retirement Benefits? <input type="radio" name="rb_retirement_benefits_checkbox" value="Yes" id=""  > Yes <input type="radio" name="rb_retirement_benefits_checkbox" value="No" id="" class="ms-lg-2"> No</div>
                        <div>If so, describe: <input type="text" name="rb_describe" id="" class="border-0 border-bottom border-dark"></div>
                        <div>
                            <div class="py-3"><b>F. LIFE INSURANCE</b> (If more than 3 policies, continue on a separate sheet)</div>
                            <div>Are you making a non-marital claim?   <input type="radio" name="rb_non_marital_checkbox" id="" value="Yes"  > Yes <input type="radio" name="rb_non_marital_checkbox" value="No" id="" class="ms-lg-2"> No you must comply with Section IX below.</div>
                                 <div class="small_text">Policy 1:</div>
                                <div class="small_text">Company: <input type="text" name="p1_company" id="" class="border-0 border-bottom border-dark responsive_input"  style="width: 704px;"><span>Party Insured:</span>  <input type="text" name="p1_party_insured" id="" class="border-0 border-bottom border-dark responsive_input" style="width: 300px;"></div>
                                <div class="small_text">Beneficiary: <input type="text" name="p1_beneficiary" id="" class="border-0 border-bottom border-dark responsive_input"  style="width: 724px;"> <span>Term/Whole:</span>  <input type="text" name="p1_term" id="" class="border-0 border-bottom border-dark responsive_input" style="width:269px;">  </div>
                                <div class="small_text">Policy #: <input type="text" name="p1_policy" id="" class="border-0 border-bottom border-dark responsive_input" style="width:281px"> <span>Valuation Date:</span>  <input type="text" name="p1_valuation_date" id="" class="border-0 border-bottom border-dark responsive_input" style="width:280px">   <span>Cash Surrender Value:</span>  <input type="text" name="p1_csv" id="" class="border-0 border-bottom border-dark responsive_input" style="width:280px"></div>
                                 <div class="small_text">Policy 2:</div>
                                 <div class="small_text">Company: <input type="text" name="p2_company" id="" class="border-0 border-bottom border-dark responsive_input"  style="width: 704px;"><span>Party Insured:</span>  <input type="text" name="p2_party_insured" id="" class="border-0 border-bottom border-dark responsive_input" style="width: 300px;"></div>
                                <div class="small_text">Beneficiary: <input type="text" name="p2_beneficiary" id="" class="border-0 border-bottom border-dark responsive_input"  style="width: 724px;"> <span>Term/Whole:</span>  <input type="text" name="p2_term" id="" class="border-0 border-bottom border-dark responsive_input" style="width:269px;">  </div>
                                <div class="small_text">Policy #: <input type="text" name="p2_policy" id="" class="border-0 border-bottom border-dark responsive_input" style="width:281px"> <span>Valuation Date:</span>  <input type="text" name="p2_valuation_date" id="" class="border-0 border-bottom border-dark responsive_input" style="width:280px">   <span>Cash Surrender Value:</span>  <input type="text" name="p2_csv" id="" class="border-0 border-bottom border-dark responsive_input" style="width:280px"></div>
                                 <div class="small_text">Policy 3:</div>
                                 <div class="small_text">Company: <input type="text" name="p3_company" id="" class="border-0 border-bottom border-dark responsive_input"  style="width: 704px;"><span>Party Insured:</span>  <input type="text" name="p3_party_insured" id="" class="border-0 border-bottom border-dark responsive_input" style="width: 300px;"></div>
                                 <div class="small_text">Beneficiary: <input type="text" name="p3_beneficiary" id="" class="border-0 border-bottom border-dark responsive_input"  style="width: 724px;"> <span>Term/Whole:</span>  <input type="text" name="p3_term" id="" class="border-0 border-bottom border-dark responsive_input" style="width:269px;">  </div>
                                 <div class="small_text">Policy #: <input type="text" name="p3_policy" id="" class="border-0 border-bottom border-dark responsive_input" style="width:281px"> <span>Valuation Date:</span>  <input type="text" name="p3_valuation_date" id="" class="border-0 border-bottom border-dark responsive_input" style="width:280px">   <span>Cash Surrender Value:</span>  <input type="text" name="p3_csv" id="" class="border-0 border-bottom border-dark responsive_input" style="width:280px"></div>
                        </div>
                        <div class="row py-3 pt-lg-5">
                            <div class="col-lg-6">
                                <div class="small_text"> More LIFE INSURANCE attached? <input type="radio" name="rb_more_lia_checkbox" value="Yes" id=""> Yes <input type="radio"  name="rb_more_lia_checkbox" value="No" id=""> No </div>
                            </div>
                            <div class="col-lg-6 text-end">
                                <div class="small_text">Total Cash Value: <input type="text" name="rb_total_cash_value" id="" class="border-0 border-bottom"></div>
                            </div>
                        </div>
                            G. BUSINESS INTERESTS (If more than 3 businesses, continue on a separate sheet) Are you making a non-marital claim? <input type="radio" name="bi_non_marital_checkbox" value="Yes" id=""  > Yes <input type="radio" name="bi_non_marital_checkbox" value="No" id="" class="ms-lg-2"> No If yes, you must comply with Section IX below.
                            <div class="pt-1 small_text">Name of Business & Owner:  <input type="text" name="bi_nob1" id=""  class="border-0 border-bottom border-dark responsive_input" style="width:979px"> </div>
                            <div class="pt-1 small_text">Percentage of Ownership:  <input type="text" name="bi_poo1" id=""  class="border-0 border-bottom border-dark responsive_input"> <span>Type of Business:</span>  <input type="text" name="bi_tob1" id=""  class="border-0 border-bottom border-dark responsive_input" style="width:698px">  </div>
                            <div class="pt-1 small_text">Corporation, Sole Proprietorship, Partnership, Etc.:  <input type="text" name="bi_csppe1" id=""  class="border-0 border-bottom border-dark responsive_input"  style="width:831px"> </div>
                            <div class="small_text pt-1">Valuation Date: <input type="text" name="bi_vd1" id=""  class="border-0 border-bottom border-dark responsive_input" style="width:253px"> <span>Business Loan(s) Balance:</span>  <input type="text" name="bi_blb1" id="" class="border-0 border-bottom border-dark responsive_input" style="width:253px">   <span>Value of Interest:</span>  <input type="text" name="bi_voi1" id="" class="border-0 border-bottom border-dark responsive_input" style="width:253px"></div>
                            <div class="pt-1 small_text">Name of Business & Owner:  <input type="text" name="bi_nob2" id=""  class="border-0 border-bottom border-dark responsive_input" style="width:979px"> </div>
                            <div class="pt-1 small_text">Percentage of Ownership:  <input type="text" name="bi_poo2" id=""  class="border-0 border-bottom border-dark responsive_input"> <span>Type of Business:</span>  <input type="text" name="bi_tob2" id=""  class="border-0 border-bottom border-dark responsive_input" style="width:698px">  </div>
                            <div class="pt-1 small_text">Corporation, Sole Proprietorship, Partnership, Etc.:  <input type="text" name="bi_csppe2" id=""  class="border-0 border-bottom border-dark responsive_input"  style="width:831px"> </div>
                            <div class="small_text pt-1">Valuation Date: <input type="text" name="bi_vd2" id=""  class="border-0 border-bottom border-dark responsive_input" style="width:253px"> <span>Business Loan(s) Balance:</span>  <input type="text" name="bi_blb2" id="" class="border-0 border-bottom border-dark responsive_input" style="width:253px">   <span>Value of Interest:</span>  <input type="text" name="bi_voi2" id="" class="border-0 border-bottom border-dark responsive_input" style="width:253px"></div>
                </section>
                <section class="section_area p-5">
                    @include('layouts.header1', ['page' => 5])
                    <div class="pt-1 small_text">Name of Business & Owner:  <input type="text" name="bi_nob3" id=""  class="border-0 border-bottom border-dark responsive_input" style="width:979px"> </div>
                    <div class="pt-1 small_text">Percentage of Ownership:  <input type="text" name="bi_poo3" id=""  class="border-0 border-bottom border-dark responsive_input"> <span>Type of Business:</span>  <input type="text" name="bi_tob3" id=""  class="border-0 border-bottom border-dark responsive_input" style="width:698px">  </div>
                    <div class="pt-1 small_text">Corporation, Sole Proprietorship, Partnership, Etc.:  <input type="text" name="bi_csppe3" id=""  class="border-0 border-bottom border-dark responsive_input"  style="width:831px"> </div>
                    <div class="small_text pt-1">Valuation Date: <input type="text" name="bi_vd3" id=""  class="border-0 border-bottom border-dark responsive_input" style="width:253px"> <span>Business Loan(s) Balance:</span>  <input type="text" name="bi_blb3" id="" class="border-0 border-bottom border-dark responsive_input" style="width:253px">   <span>Value of Interest:</span>  <input type="text" name="bi_voi3" id="" class="border-0 border-bottom border-dark responsive_input" style="width:253px"></div>
                    <div class="row py-3 pt-lg-5">
                        <div class="col-lg-6">
                            <div class="small_text"> More BUSINESS INTERESTS attached? <input type="radio" name="bi_mbia_checkbox" value="Yes" id=""> Yes <input type="radio" name="bi_mbia_checkbox" value="No" id="" class="ms-3"> No </div>
                        </div>
                        <div class="col-lg-6 text-end">
                            <div class="small_text">Total Values: <input type="text" name="bi_total_values" id="" class="border-0 border-bottom"></div>
                        </div>
                    </div>
                    <div>H. HOUSEHOLD GOODS:</div>
                    <div>Are you making a non-marital claim? <input type="radio" name="hg_non_marital_checkbox" id="" value="Yes"  > Yes <input type="radio" name="hg_non_marital_checkbox" id="" value="No" class="ms-lg-2"> No If yes, you must comply with Section IX below.</div>
                    <div>Agreed Division? <input type="radio" name="hg_agreed_division_checkbox" id="" value="Yes"> Yes <input type="radio" name="hg_agreed_division_checkbox" value="No" id="" class="ms-lg-4"> No , but not expected to be in dispute.</div>
                    <div><input type="checkbox" name="dispute_anticipated_checkbox" value='Yes' id="" class=" ">  No, but dispute anticipated (Suggested appraiser  <input type="text" name="dispute_anticipated_val" id="" class="border-0 border-bottom"> )</div>
                    <div class="fw-bold">Attached is a list of the disputed household items</div>
                    <div class="pt-lg-3">
                        I. OTHER ASSETS – Cash, Travelers Checks, Debts Others Owe You, Copyrights, Trademarks, Pets or Animals,
                        Jewelry, Collectibles, Tools, Inventions, Other “Liquid Assets,” etc. (If more than 5 items, continue on a separate sheet)
                        Are you making a non-marital claim? <input type="radio" name="hg_non_marital_checkbox" value="Yes" id=""> Yes <input type="radio" name="hg_non_marital_checkbox" value="No" id=""> No If yes, you must comply with Section IX below.
                    </div>
                    <div class="small_text pt-lg-3">Item 1:</div>
                    <div class="small_text">Item Description: <input type="text" class="border-0 border-bottom responsive_input" name="i1_description" style="width:1054px;"></div>
                    <div class="small_text">Who Holds Possession: <input type="text" class="border-0 border-bottom responsive_input" name="i1_hold_possession" style="width:448px;">   Valuation Date: <input type="text" class="border-0 border-bottom responsive_input" name="i1_valuation_date" style="width:448px;"></div>
                    <div class="small_text">Fair Market Value: <input type="text" class="border-0 border-bottom responsive_input" name="i1_fair_market_value" style="width:266px;"> Amount Owed: <input type="text" class="border-0 border-bottom responsive_input" name="i1_amount_owed" style="width:266px;">  Net Value or Equity   <input type="text" class="border-0 border-bottom responsive_input" name="i1_net_value" style="width:266px;"></div>

                    <div class="small_text pt-lg-3">Item 2:</div>
                    <div class="small_text">Item Description: <input type="text" class="border-0 border-bottom responsive_input" name="i2_description" style="width:1054px;"></div>
                    <div class="small_text">Who Holds Possession: <input type="text" class="border-0 border-bottom responsive_input" name="i2_hold_possession" style="width:448px;">   Valuation Date: <input type="text" class="border-0 border-bottom responsive_input" name="i2_valuation_date" style="width:448px;"></div>
                    <div class="small_text">Fair Market Value: <input type="text" class="border-0 border-bottom responsive_input" name="i2_fair_market_value" style="width:266px;"> Amount Owed: <input type="text" class="border-0 border-bottom responsive_input" name="i2_amount_owed" style="width:266px;">  Net Value or Equity   <input type="text" class="border-0 border-bottom responsive_input" name="i2_net_value" style="width:266px;"></div>

                     <div class="small_text pt-lg-3">Item 3:</div>
                     <div class="small_text">Item Description: <input type="text" class="border-0 border-bottom responsive_input" name="i3_description" style="width:1054px;"></div>
                    <div class="small_text">Who Holds Possession: <input type="text" class="border-0 border-bottom responsive_input" name="i3_hold_possession" style="width:448px;">   Valuation Date: <input type="text" class="border-0 border-bottom responsive_input" name="i3_valuation_date" style="width:448px;"></div>
                    <div class="small_text">Fair Market Value: <input type="text" class="border-0 border-bottom responsive_input" name="i3_fair_market_value" style="width:266px;"> Amount Owed: <input type="text" class="border-0 border-bottom responsive_input" name="i3_amount_owed" style="width:266px;">  Net Value or Equity   <input type="text" class="border-0 border-bottom responsive_input" name="i3_net_value" style="width:266px;"></div>

                    <div class="small_text pt-lg-3">Item 4:</div>
                    <div class="small_text">Item Description: <input type="text" class="border-0 border-bottom responsive_input" name="i4_description" style="width:1054px;"></div>
                    <div class="small_text">Who Holds Possession: <input type="text" class="border-0 border-bottom responsive_input" name="i4_hold_possession" style="width:448px;">   Valuation Date: <input type="text" class="border-0 border-bottom responsive_input" name="i4_valuation_date" style="width:448px;"></div>
                    <div class="small_text">Fair Market Value: <input type="text" class="border-0 border-bottom responsive_input" name="i4_fair_market_value" style="width:266px;"> Amount Owed: <input type="text" class="border-0 border-bottom responsive_input" name="i4_amount_owed" style="width:266px;">  Net Value or Equity   <input type="text" class="border-0 border-bottom responsive_input" name="i4_net_value" style="width:266px;"></div>

                        <div class="small_text pt-lg-3">Item 5:</div>
                        <div class="small_text">Item Description: <input type="text" class="border-0 border-bottom responsive_input" name="i5_description" style="width:1054px;"></div>
                        <div class="small_text">Who Holds Possession: <input type="text" class="border-0 border-bottom responsive_input" name="i5_hold_possession" style="width:448px;">   Valuation Date: <input type="text" class="border-0 border-bottom responsive_input" name="i5_valuation_date" style="width:448px;"></div>
                        <div class="small_text">Fair Market Value: <input type="text" class="border-0 border-bottom responsive_input" name="i5_fair_market_value" style="width:266px;"> Amount Owed: <input type="text" class="border-0 border-bottom responsive_input" name="i5_amount_owed" style="width:266px;">  Net Value or Equity   <input type="text" class="border-0 border-bottom responsive_input" name="i5_net_value" style="width:266px;"></div>

                        <div class="row py-3 pt-lg-5">
                        <div class="col-lg-6">
                        <div class="small_text">More OTHER ASSETS attached? <input type="radio" name="hg_moaa_checkbox" value="Yes" id=""> Yes <input type="radio" name="hg_moaa_checkbox" value="No" id=""> No </div>
                        </div>
                        <div class="col-lg-6 text-end">
                            <div class="small_text">Total Values: <input type="text" name="hg_total_values" id="" class="border-0 border-bottom"></div>
                        </div>
                    </div>
                </section>
                <section class="section_area p-5" id="section_six">
                    @include('layouts.header1', ['page' => 6])
                    <div><b>VI. OTHER DEBTS NOT PREVIOUSLY LISTED</b> (Do not list account numbers) Includes credit card balances, credit union loans, signature loans and other unsecured debt. (If more than 5 debts, continue on a separate sheet)</div>
                        <div>
                            <div class="pt-lg-4 pt-2  ">Creditor 1:</div>
                            <div class="small_text">Creditor: <input type="text" name="c1_creditor" id="" class="border-0 border-bottom responsive_input" style="width:1097px"></div>
                            <div class="small_text">Party Named on Debt: <input type="text" name="c1_pnod" id="" class="border-0 border-bottom responsive_input"  style="width:613px"> Premarital Account? <input type="text" name="c1_pa" id="" class="border-0 border-bottom responsive_input"  style="width:250px"></div>
                            <div class="small_text">Valuation Date: <input type="text" name="c1_vd" id="" class="border-0 border-bottom responsive_input" style="width:273px;"> Monthly Payment:  <input type="text" name="c1_mp" id="" class="border-0 border-bottom responsive_input" style="width:273px;"> Total Balance: <input type="text" name="c1_tb" id="" class="border-0 border-bottom responsive_input" style="width:273px;"></div>

                            <div class="pt-lg-4 pt-2  ">Creditor 2:</div>
                            <div class="small_text">Creditor: <input type="text" name="c2_creditor" id="" class="border-0 border-bottom responsive_input" style="width:1097px"></div>
                            <div class="small_text">Party Named on Debt: <input type="text" name="c2_pnod" id="" class="border-0 border-bottom responsive_input"  style="width:613px"> Premarital Account? <input type="text" name="c2_pa" id="" class="border-0 border-bottom responsive_input"  style="width:250px"></div>
                            <div class="small_text">Valuation Date: <input type="text" name="c2_vd" id="" class="border-0 border-bottom responsive_input" style="width:273px;"> Monthly Payment:  <input type="text" name="c2_mp" id="" class="border-0 border-bottom responsive_input" style="width:273px;"> Total Balance: <input type="text" name="c2_tb" id="" class="border-0 border-bottom responsive_input" style="width:273px;"></div>

                            <div class="pt-lg-4 pt-2  ">Creditor 3:</div>
                            <div class="small_text">Creditor: <input type="text" name="c3_creditor" id="" class="border-0 border-bottom responsive_input" style="width:1097px"></div>
                            <div class="small_text">Party Named on Debt: <input type="text" name="c3_pnod" id="" class="border-0 border-bottom responsive_input"  style="width:613px"> Premarital Account? <input type="text" name="c3_pa" id="" class="border-0 border-bottom responsive_input"  style="width:250px"></div>
                            <div class="small_text">Valuation Date: <input type="text" name="c3_vd" id="" class="border-0 border-bottom responsive_input" style="width:273px;"> Monthly Payment:  <input type="text" name="c3_mp" id="" class="border-0 border-bottom responsive_input" style="width:273px;"> Total Balance: <input type="text" name="c3_tb" id="" class="border-0 border-bottom responsive_input" style="width:273px;"></div>

                            <div class="pt-lg-4 pt-2  ">Creditor 4:</div>
                            <div class="small_text">Creditor: <input type="text" name="c4_creditor" id="" class="border-0 border-bottom responsive_input" style="width:1097px"></div>
                            <div class="small_text">Party Named on Debt: <input type="text" name="c4_pnod" id="" class="border-0 border-bottom responsive_input"  style="width:613px"> Premarital Account? <input type="text" name="c4_pa" id="" class="border-0 border-bottom responsive_input"  style="width:250px"></div>
                            <div class="small_text">Valuation Date: <input type="text" name="c4_vd" id="" class="border-0 border-bottom responsive_input" style="width:273px;"> Monthly Payment:  <input type="text" name="c4_mp" id="" class="border-0 border-bottom responsive_input" style="width:273px;"> Total Balance: <input type="text" name="c4_tb" id="" class="border-0 border-bottom responsive_input" style="width:273px;"></div>

                            <div class="pt-lg-4 pt-2  ">Creditor 5:</div>
                            <div class="small_text">Creditor: <input type="text" name="c5_creditor" id="" class="border-0 border-bottom responsive_input" style="width:1097px"></div>
                            <div class="small_text">Party Named on Debt: <input type="text" name="c5_pnod" id="" class="border-0 border-bottom responsive_input"  style="width:613px"> Premarital Account? <input type="text" name="c5_pa" id="" class="border-0 border-bottom responsive_input"  style="width:250px"></div>
                            <div class="small_text">Valuation Date: <input type="text" name="c5_vd" id="" class="border-0 border-bottom responsive_input" style="width:273px;"> Monthly Payment:  <input type="text" name="c5_mp" id="" class="border-0 border-bottom responsive_input" style="width:273px;"> Total Balance: <input type="text" name="c5_tb" id="" class="border-0 border-bottom responsive_input" style="width:273px;"></div>
                                             </div>
                         <div class="row py-3 pt-lg-5 ">
                            <div class="col-lg-6">
                               <div class="small_text"> More DEBTS attached? <input type="radio" name="od_mda_checkbox" value="Yes" id=""> Yes <input type="radio" name="od_mda_checkbox" value="No" id="" class=" ms-lg-2"> No </div>
                            </div>
                            <div class="col-lg-6 text-end">
                                <div class="small_text">Total Debt Balances: <input type="text" name="od_total_debt_balance" id="" class="border-0 border-bottom"></div>
                            </div>
                        </div>
                        <div class="pt-lg-5 pt-3">
                            <div><b><span class="pe-lg-3">VII. </span>EXPECTED POST-DIVORCE LIVING EXPENSES SCHEDULE</b> (Do not include debts)</div>
                            <div class="ps-lg-5">
                                 <div class="small_text">  Not necessary if maintenance or child support are not being claimed</div>
                                 <div class="small_text">  Do the parties’ combined gross incomes exceed $15,000 per month? <span class="ms-lg-5"> <input type="radio" name="epd_cgm_checkbox" value="Yes" id=""> Yes <input type="radio" name="epd_cgm_checkbox" value="No" id="" class=" ms-lg-2"> No</span></div>
                                 <div class="small_text">  If <b>NO</b>, do not include children’s personal expenses below.</div>
                                 <div class="small_text">  If <b>YES</b>, list children’s personal expenses such as private school tuition, tutors,</div>
                                 <div class="small_text">  camps, activity fees, clothing, etc. on a separate sheet. <input type="radio" name="epd_attached_checkbox" value="Yes" id=""> Attached</div>
                            </div>
                        </div>
                </section>
                <section class="section_area p-5" id="section_last">
                    @include('layouts.header1', ['page' => 7])
                    <div class="row pt-3">
                        <div class="col-lg-6">
                            <div class="responsive-table ">
                                <table class="table table-bordered border-dark">
                                    <tbody>
                                        <tr>
                                            <td class="small_text">A. COMMON EXPENSES FOR FAMILY (Party and any children of the marriage)</td>
                                            <td style="width:80px;"> <input type="text" name="cef_ceff" class="border-0 form-control"> </td>
                                        </tr>
                                        <tr>
                                            <td class="small_text">FOOD/GROCERIES FOR FAMILY (Non-entertainment)</td>
                                            <td><input type="text" name="cef_fgff" class="border-0 form-control"></td>
                                        </tr>
                                        <tr>
                                            <td class="small_text">HOUSING</td>
                                            <td class="bg-secondary"></td>
                                        </tr>
                                        <tr>
                                            <td class="small_text">Cable</td>
                                            <td><input type="text" name="cef_cable" class="border-0 form-control"></td>
                                        </tr>
                                        <tr>
                                            <td class="small_text">Garbage collection</td>
                                            <td><input type="text" name="cef_garbage_collection" class="border-0 form-control"></td>
                                        </tr>
                                        <tr>
                                            <td class="small_text">Electric, gas, propane & oil utilities</td>
                                            <td><input type="text" name="cef_electric_gas" class="border-0 form-control"></td>
                                        </tr>
                                        <tr>
                                            <td class="small_text">Home maintenance & repairs</td>
                                            <td><input type="text" name="cef_home_maintenance" class="border-0 form-control"></td>
                                        </tr>
                                        <tr>
                                            <td class="small_text">Homeowner’s insurance</td>
                                            <td><input type="text" name="cef_homeowner_insurance" class="border-0 form-control"></td>
                                        </tr>
                                        <tr>
                                            <td class="small_text">Household supplies</td>
                                            <td><input type="text" name="cef_household_supplies" class="border-0 form-control"></td>
                                        </tr>
                                        <tr>
                                            <td class="small_text">Maid service</td>
                                            <td ><input type="text" name="cef_maid_service" class="border-0 form-control"></td>
                                        </tr>
                                        <tr>
                                            <td class="small_text">Property taxes</td>
                                            <td><input type="text" name="cef_property_taxes" class="border-0 form-control"></td>
                                        </tr>
                                        <tr>
                                            <td class="small_text">Rent or 1st mortgage</td>
                                            <td><input type="text" name="cef_rent_mortgage" class="border-0 form-control"></td>
                                        </tr>
                                        <tr>
                                            <td class="small_text ps-lg-4">2nd mortgage/home equity loan</td>
                                            <td><input type="text" name="cef_mortgage_equity_loan" class="border-0 form-control"></td>
                                        </tr>
                                        <tr>
                                            <td class="small_text">Telephone</td>
                                            <td><input type="text" name="cef_telephone" class="border-0 form-control"></td>
                                        </tr>
                                        <tr>
                                            <td class="small_text ps-lg-4">Mobile phone</td>
                                            <td><input type="text" name="cef_mobile_phone" class="border-0 form-control"></td>
                                        </tr>
                                        <tr>
                                            <td class="small_text ">Vet/pet supplies</td>
                                            <td><input type="text" name="cef_vet_supplies" class="border-0 form-control"></td>
                                        </tr>
                                        <tr>
                                            <td class="small_text ">Yard expense/maintenance</td>
                                            <td ><input type="text" name="cef_yard_expense" class="border-0 form-control"></td>
                                        </tr>
                                        <tr>
                                            <td class="small_text ">Water/sewage</td>
                                            <td ><input type="text" name="cef_water_sewage" class="border-0 form-control"></td>
                                        </tr>
                                        <tr>
                                            <td class="small_text ">TRANSPORTATION</td>
                                            <td class="bg-secondary"></td>
                                        </tr>
                                        <tr>
                                            <td class="small_text ">Gas and oil</td>
                                            <td><input type="text" name="cef_gas_oil" class="border-0 form-control"> </td>
                                        </tr>
                                        <tr>
                                            <td class="small_text ">Liability insurance</td>
                                            <td><input type="text" name="cef_liability_insurance" class="border-0 form-control"> </td>
                                        </tr>
                                        <tr>
                                            <td class="small_text ">License/taxes/tag</td>
                                            <td><input type="text" name="cef_license_taxes_tag" class="border-0 form-control"> </td>
                                        </tr>
                                        <tr>
                                            <td class="small_text ">Payment/loan</td>
                                            <td><input type="text" name="cef_payment_loan" class="border-0 form-control"> </td>
                                        </tr>
                                        <tr>
                                            <td class="small_text ">Repairs/maintenance</td>
                                            <td><input type="text" name="cef_repairs_maintenance" class="border-0 form-control"> </td>
                                        </tr>
                                        <tr>
                                            <td class="small_text ">Other – bus, taxi, tolls & parking</td>
                                            <td><input type="text" name="cef_other_bus_taxi" class="border-0 form-control"> </td>
                                        </tr>
                                        <tr>
                                            <td class="small_text ">OTHER FAMILY EXPENSES (list):</td>
                                            <td class="bg-secondary"> </td>
                                        </tr>
                                        <tr>
                                            <td><input type="text" name="cef_other_family_expenses1" class="border-0 form-control"> </td>
                                            <td><input type="text" name="cef_other_family_expenses2" class="border-0 form-control"> </td>
                                        </tr>
                                        <tr>
                                            <td><input type="text" name="cef_other_family_expenses3" class="border-0 form-control"> </td>
                                            <td><input type="text" name="cef_other_family_expenses4" class="border-0 form-control"> </td>
                                        </tr>
                                        <tr>
                                            <td>SUBTOTAL (Column A)</td>
                                            <td><input type="text" name="cef_subtotal" class="border-0 form-control" value="0"> </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="table-responsive">
                                <table class="table table-bordered border-dark">
                                    <tbody>
                                        <tr>
                                            <td class="small_text">B. YOUR PERSONAL EXPENSES (not including any children’s expenses)</td>
                                                <td><input type="text" name="ype_ype" class="border-0 form-control"> </td>
                                        </tr>
                                        <tr>
                                            <td class="small_text">Church and charitable donations</td>
                                            <td><input type="text" name="ype_church_charitable_donations" class="border-0 form-control"> </td>
                                        </tr>
                                        <tr>
                                            <td class="small_text">Clothing</td>
                                            <td><input type="text" name="ype_clothing" class="border-0 form-control"> </td>
                                        </tr>
                                        <tr>
                                            <td class="small_text">Cosmetics, hygiene & toiletries</td>
                                            <td><input type="text" name="ype_cosmetics_hygiene_toiletries" class="border-0 form-control"> </td>
                                        </tr>

                                        <tr>
                                            <td class="small_text">Disability insurance</td>
                                            <td><input type="text" name="ype_disability_insurance" class="border-0 form-control"> </td>
                                        </tr>

                                        <tr>
                                            <td class="small_text">Dry cleaning & laundry</td>
                                            <td><input type="text" name="ype_dry_cleaning_laundry" class="border-0 form-control"> </td>
                                        </tr>
                                        <tr>
                                            <td class="small_text">Entertainment, including restaurants & movies</td>
                                            <td><input type="text" name="ype_entertainment_including" class="border-0 form-control"> </td>
                                        </tr>
                                        <tr>
                                            <td class="small_text">Hair care (barber, salon, etc.)</td>
                                            <td><input type="text" name="ype_hair_care" class="border-0 form-control"> </td>
                                        </tr>
                                        <tr>
                                            <td class="small_text">Internet access</td>
                                            <td><input type="text" name="ype_internet_access" class="border-0 form-control"> </td>
                                        </tr>
                                        <tr>
                                            <td class="small_text">Life insurance (whole life or term)</td>
                                            <td><input type="text" name="ype_insurance" class="border-0 form-control"> </td>
                                        </tr>
                                        <tr>
                                            <td class="small_text">Manicures & pedicures</td>
                                            <td><input type="text" name="ype_manicures_pedicures" class="border-0 form-control"> </td>
                                        </tr>
                                        <tr>
                                            <td class="small_text">Newspapers, magazines & books</td>
                                            <td><input type="text" name="ype_newspapers_magazines_books" class="border-0 form-control"> </td>
                                        </tr>

                                        <tr>
                                            <td class="small_text">Professional dues or uniforms</td>
                                            <td><input type="text" name="ype_professional_uniforms" class="border-0 form-control"> </td>
                                        </tr>

                                        <tr>
                                            <td class="small_text">Sports, exercise, hobbies, crafts, etc.</td>
                                            <td><input type="text" name="ype_sports_exercise" class="border-0 form-control"> </td>
                                        </tr>

                                        <tr>
                                            <td class="small_text">Travel (monthly average)</td>
                                            <td><input type="text" name="ype_travel" class="border-0 form-control"> </td>
                                        </tr>

                                        <tr>
                                            <td class="small_text">MEDICAL</td>
                                            <td class="bg-secondary">  </td>
                                        </tr>
                                        <tr>
                                            <td class="small_text">Dental (including orthodontics)</td>
                                            <td><input type="text" name="ype_dental" class="border-0 form-control"> </td>
                                        </tr>

                                        <tr>
                                            <td class="small_text">Eyeglasses, contacts & hearing aids,  exams and testing</td>
                                            <td><input type="text" name="ype_eyeglasses" class="border-0 form-control"> </td>
                                        </tr>
                                        <tr>
                                            <td class="small_text">Insurance (hospitalization)</td>
                                            <td><input type="text" name="ype_insurance" class="border-0 form-control"> </td>
                                        </tr>
                                        <tr>
                                            <td class="small_text">Medical doctor(s)</td>
                                            <td><input type="text" name="ype_medical_doctors" class="border-0 form-control"> </td>
                                        </tr>

                                        <tr>
                                            <td class="small_text">Prescription medication</td>
                                            <td><input type="text" name="ype_prescription_medication" class="border-0 form-control"> </td>
                                        </tr>

                                        <tr>
                                            <td class="small_text">OTHER PERSONAL EXPENSES (list):</td>
                                            <td class="bg-secondary"> </td>
                                        </tr>

                                        <tr>
                                            <td><input type="text" name="ype_other_personal_expenses1" class="border-0 form-control"> </td>
                                            <td><input type="text" name="ype_other_personal_expenses2" class="border-0 form-control"> </td>
                                        </tr>

                                        <tr>
                                            <td><input type="text" name="ype_other_personal_expenses3" class="border-0 form-control"> </td>
                                            <td><input type="text" name="ype_other_personal_expenses4" class="border-0 form-control"> </td>
                                        </tr>
                                        <tr>
                                            <td class="small_text">Sub-total from attached other personal expenses, if needed <input type="checkbox" name="subtotal_attached_checkbox" id=""> Attached </td>
                                            <td><input type="text" name="ype_sub_total1" class="border-0 form-control"> </td>
                                        </tr>
                                        <tr>
                                            <td><input type="text" name="ype_sub_total2" class="border-0 form-control"> </td>
                                            <td class="bg-secondary"> </td>
                                        </tr>
                                        <tr>
                                            <td class="small_text">SUBTOTAL FROM COLUMN B</td>
                                            <td><input type="text" name="ype_subtotal_b" class="border-0 form-control" value="0"> </td>
                                        </tr>
                                        <tr>
                                            <td class="small_text">SUBTOTAL FROM COLUMN A</td>
                                            <td><input type="text" name="ype_subtotal_a" class="border-0 form-control" value="0"> </td>
                                        </tr>
                                        <tr>
                                            <td class="small_text">SUBTOTAL FROM CHILDREN’S EXPENSE LIST ATTACHMENT</td>
                                            <td><input type="text" name="ype_subtotal_children_expense" class="border-0 form-control"> </td>
                                        </tr>
                                        <tr>
                                            <td class="small_text">GRAND TOTAL <small> of column a, b, and attachments</small></td>
                                            <td><input type="text" name="ype_grand_total" class="border-0 form-control" value="0"> </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                 </section>
                <section class="section_area p-5"  >
                    @include('layouts.header1', ['page' => 8])
                    <div class="fw-bold"> VIII. OTHER</div>
                    <div class="row">
                        <div class="col-lg-1  responsive_input" style="width: 50px;">A.</div>
                        <div class="col-lg-11">
                            <div>Special needs of parties:</div>
                            <div><input type="text" name="o_snop1" id="" class="border-0 border-bottom w-100 responsive_input"></div>
                            <div><input type="text" name="o_snop2" id="" class="border-0 border-bottom w-100 responsive_input"></div>
                            <div><input type="text" name="o_snop3" id="" class="border-0 border-bottom w-100 responsive_input"></div>
                         </div>
                    </div>
                     <div class="row">
                        <div class="col-lg-1 responsive_input" style="width: 50px;">B.</div>
                        <div class="col-lg-11">
                            <div>Bankruptcy <input type="text" name="o_bankruptcy1" id="" class="border-0 border-bottom    responsive_input" style="width:974px;"></div>
                         </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-1 responsive_input" style="width: 50px;">C.</div>
                        <div class="col-lg-11">
                            <div>Lawsuits <input type="text" name="o_lawsuits1" id="" class="border-0 border-bottom   responsive_input" style="width:995px;"></div>
                         </div>
                    </div>

                    <div><b>IX. REQUIRED ATTACHMENTS</b> (to be sent ONLY to opposing party or opposing counsel and not filed with the Court):
                        To complete this section, you must attach all of the following documents and/or provide the requested information on a
                        separate sheet and attach to this form. In the spaces provided, mark as follows:</div>

                        <div class="pt-lg-3 small_text">“A” = to indicate that the requested document/information is attached.</div>
                        <div class="pt-lg-3 small_text">“U” = to indicate that the requested document/information is unavailable (Provide explanation on a separate page)</div>
                        <div class="pt-lg-3 small_text">“N/A” = if not applicable</div>
                        <div class="row">
                            <div class="col-lg-1 small_text  " style="width: 50px;">A.</div>
                            <div class="col-lg-11 small_text"> PERSONAL INFORMATION OF BOTH PARTIES</div>
                        </div>
                        <div class="row pt-2">
                            <div class="col-lg-1 small_text   " style="width: 50px;">B.</div>
                            <div class="col-lg-11 small_text"> B. INCOME AND EMPLOYMENT OF BOTH PARTIES</div>
                        </div>
                        <div class="table-responsive pt-3">
                            <table class="table table-bordered border-dark">
                                <tbody>
                                    <tr>
                                        <td class="small_text">A, U, N/A</td>
                                        <td class="small_text">Item #</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name="iae_auna1" id="" class="border-0  w-100 responsive_input"></td>
                                        <td class="small_text">1.</td>
                                        <td class="small_text">Three (3) most recent paycheck stubs</td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name="iae_auna2" id="" class="border-0  w-100 responsive_input"></td>
                                        <td class="small_text">2.</td>
                                        <td class="small_text">Federal Income Tax Return for the last year filed</td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name="iae_auna3" id="" class="border-0  w-100 responsive_input"></td>
                                        <td class="small_text">3.</td>
                                        <td class="small_text">State Income Tax Return for the last year filed</td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name="iae_auna4" id="" class="border-0  w-100 responsive_input"></td>
                                        <td class="small_text">4.</td>
                                        <td class="small_text">Documentation of all other income for the past 48 months, including source of income and
                                            amount of income received year-to-date</td>
                                    </tr>
                                </tbody>

                            </table>
                        </div>
                        <div class="fw-bold">C. CHILDREN</div>
                        <div class="table-responsive pt-3">
                            <table class="table table-bordered border-dark">
                                <tbody>
                                    <tr>
                                        <td class="small_text">A, U, N/A</td>
                                        <td class="small_text">Item #</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name="c_auna1" id="" class="border-0  w-100 responsive_input"></td>
                                        <td class="small_text">1.</td>
                                        <td class="small_text">Verification of work-related child care expenses</td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name="c_auna2" id="" class="border-0  w-100 responsive_input"></td>
                                        <td>2.</td>
                                        <td class="small_text">Verification of cost of health/dental insurance for children’s portion (e.g. difference between cost of single and family plan)</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="fw-bold">D. ASSET SCHEDULES</div>
                        <div class="table-responsive pt-3">
                            <table class="table table-bordered border-dark">
                                <tbody>
                                    <tr>
                                        <td class="small_text">A, U, N/A</td>
                                        <td class="small_text">Item#</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name="as_auna1" id="" class="border-0  w-100 responsive_input"></td>
                                        <td class="small_text">1.</td>
                                        <td class="small_text">Most recent statement of each bank account</td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name="as_auna2" id="" class="border-0  w-100 responsive_input"></td>
                                        <td class="small_text">2.</td>
                                        <td class="small_text">Most recent brokerage statement or documentation of purchase and/or value for each investment</td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name="as_auna3" id="" class="border-0  w-100 responsive_input"></td>
                                        <td class="small_text">3.</td>
                                        <td class="small_text">Explanation of source of cash holdings, location and amount of cash</td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name="as_auna4" id="" class="border-0  w-100 responsive_input"></td>
                                        <td class="small_text">4.</td>
                                        <td class="small_text">For each piece of real estate, copy of deed, documentation of all indebtedness (i.e., mortgage, home equity loan, liens, etc.) including unpaid balance and payoff (with date payoff amount obtained) for each debt, and current tax assessment</td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name="as_auna5" id="" class="border-0  w-100 responsive_input"></td>
                                        <td class="small_text">5.</td>
                                        <td class="small_text">Declaration page of life insurance policies and documentation of cash surrender</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                </section>
                <section class="section_area p-5" id="section_six">
                    @include('layouts.header1', ['page' =>9])
                         <div class="table-responsive pt-3">
                            <table class="table table-bordered border-dark">
                                <tbody>
                                    <tr>
                                        <td class="small_text">A, U, N/A</td>
                                        <td class="small_text">Item#</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name="as_auna6" id="" class="border-0 w-100 responsive_input"></td>
                                        <td class="small_text">6.</td>
                                        <td class="small_text">Documentation of benefits accrued in pension, profit sharing, 401(k) or other retirement plans, including most recent statements of each such plan and the name, address and phone number of plan administrator</td>

                                    </tr>
                                    <tr>
                                        <td><input type="text" name="as_auna7" id="" class="border-0 w-100 responsive_input"></td>
                                        <td class="small_text">7.</td>
                                        <td class="small_text">For each vehicle, provide amount of payoff of any indebtedness (including date payoff amount obtained) and copy of title</td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name="as_auna8" id="" class="border-0 w-100 responsive_input"></td>
                                        <td class="small_text">8.</td>
                                        <td class="small_text">For each business interest, list name of business, extent of interest or title in business (i.e.
                                            owner, shareholder, partner, etc.), provide a copy of last income tax return filed by business
                                            and documentation of income earned (or portion received) through business during last
                                            twenty-four (24) months</td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name="as_auna9" id="" class="border-0 w-100 responsive_input"></td>
                                        <td class="small_text">9.</td>
                                        <td class="small_text">Provide a list describing any other assets you have an interest in, including any documentation
                                            as to the value of the non-marital interest, date asset was acquired, and source of non-marital
                                            interest (trace and document non-marital funds used to acquire each asset)</td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name="as_auna10" id="" class="border-0 w-100 responsive_input"></td>
                                        <td class="small_text">10.</td>
                                        <td class="small_text"><b>NON-MARITAL INTEREST.</b> For each asset in which you claim a non-marital interest, provide the basis and approximate value of non-marital claim. Documentation tracing any non-marital asset shall be produced if available, and if not currently available, shall be produced when available, or as specified by separate court order</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="fw-bold pt-3">E. DEBT SCHEDULE</div>
                        <div class="table-responsive pt-3">
                            <table class="table table-bordered border-dark">
                                <tbody>
                                    <tr>
                                        <td class="small_text">A, U, N/A</td>
                                        <td class="small_text">Item#</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name="ds_auna1" id="" class="border-0  w-100 responsive_input"></td>
                                        <td class="small_text">1.</td>
                                        <td class="small_text">For each debt, provide the last statement or documentation of unpaid balance, or explain why documentation is not available</td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name="ds_auna2" id="" class="border-0  w-100 responsive_input"></td>
                                        <td class="small_text">2.</td>
                                        <td class="small_text">For each debt designated as “non-marital”, list the party you think should assume responsibility for said debt and why</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="pt-lg-5 pt-3">
                            <div class="text-center fw-bold mx-auto">VERIFICATION</div>
                            <div>I, <input type="text" name="v_dup1" id="" class="border-0 border-bottom responsive_input"> , declare under penalty of perjury that the information contained herein, including the information provided on any schedules and attachments, is true and accurate to the best of my knowledge, information and belief. Further, I acknowledge that I have read the foregoing instructions and have followed those instructions to the best of my ability.</div>
                            <div class="row">
                                <div class="co-lg-6"></div>
                                <div class="col-lg-6">
                                    <div><input type="text" name="v_dup2" id="" class="border-0 border-bottom responsive_input w-75 "> </div>
                                    <div><input type="radio" name="verification" value="Petitioner" id=""  > Petitioner <input type="radio" name="verification" value="Respondent" id="" class="ms-lg-3"> Respondent {check one}</div>
                                </div>
                            </div>
                        </div>
                </section>
                <section class="section_area p-5" id="section_six">
                    @include('layouts.header1', ['page' => 10])
                      <div class="row">
                          <div class="col-lg-6">
                            <div class="small_text ">STATE OF <input type="text" name="state_of" id="" class="w-25 border-0 border-bottom responsive_input"></div>
                            <div class="small_text pt-lg-3">COUNTY OF <input type="text" name="county_of" id="" class="w-25 border-0 border-bottom responsive_input"></div>
                          </div>
                          <div class="col-lg-6"></div>
                    </div>
                    <div>Subscribed and sworn before me by <input type="text" name="subscribed" id="" class="border-0 border-bottom responsive_input"> this <input type="text" name="before_me" id="" class="  border-0 border-bottom responsive_input"> day of <input type="text" name="this_day1" id="" class=" border-0 border-bottom responsive_input">, <input type="text" name="day_of" id="" class="  border-0 border-bottom responsive_input">.</div>
                    <div>My commission expires <input type="text" name="commisson_expires" id="" class="border-0 border-bottom responsive_input">  </div>
                    <div class="text-end">  <input type="text" name="notary_public" id="" class="border-0 border-bottom responsive_input"> NOTARY PUBLIC/TITLE  </div>
                    <div class="py-4 text-center fw-bold">CERTIFICATE OF SERVICE</div>
                    <div class="small_text">I HEREBY CERTIFY that a copy of this Verified Disclosure Statement (with schedules and attachments) was
                        served by <input type="checkbox" name="mail_checkbox" value='True' id=""> mail, postage prepaid, or <input type="checkbox" name="hand_delivery_checkbox" value="True" id=""> hand-delivery, or <input type="checkbox" name="electronic_checkbox" value="True" id=""> electronic means, in accordance with Kentucky Rule of Civil
                        Procedure (CR) 5.02, on (name) <input type="text" name="cos_name" id="" class="border-0 border-bottom responsive_input"> at (address) <input type="text" name="cos_address" id="" class="border-0 border-bottom responsive_input">, this the <input type="text" name="cos_this" id="" class="border-0 border-bottom responsive_input"> day of <input type="text" name="cos_day_of1" id="" class="border-0 border-bottom responsive_input">, <input type="text" name="cos_day_of2" id="" class="border-0 border-bottom responsive_input">.  </div>
                    <div class="row">
                        <div class="col-lg-8"></div>
                        <div class="col-lg-4">
                            <input type="text" name="cos_signature" id=""  class="border-0 border-bottom responsive_input w-100">
                            <div class="small_text"> Signature</div>
                            <div> <input type="checkbox" name="cos_afp" Value="True" id=""> Attorney for Petitioner <input type="checkbox" name="cos_aop" id=""  Value="True"> Attorney for Petitione  <input type="checkbox"  Value="True" name="cos_petitioner" id="">  Petitioner <input type="checkbox"  Value="True" name="cos_eespondent" id=""> Respondent </div>
                            <div class="">
                                <div> Address:</div>
                                <div><input type="text" name="cos_address1" class="border-0 border-bottom responsive_input w-100"></div>
                                <div><input type="text" name="cos_address2" class="border-0 border-bottom responsive_input w-100"></div>
                                <div><input type="text" name="cos_address3" class="border-0 border-bottom responsive_input w-100"></div>
                                <div>Phone: ( ) <input type="text" name="cos_phone" class="border-0 border-bottom responsive_input" style="width:292px;"></div>
                                <div> Fax: ( ) <input type="text" name="cos_fax" class="border-0 border-bottom responsive_input" style="width:316px;"></div>
                                <div> Email: <input type="text" name="cos_email" class="border-0 border-bottom responsive_input" style="width:320px;"></div>
                            </div>
                        </div>
                    </div>

                    <div class="text-center fw-bold">*NOTE</div>
                    <p class="small_text fw-bold">When this form is utilized as an AOC-238, Preliminary Verified Disclosure Statement, unless otherwise ordered by
                        the Court or required by Local Rule, this form is NOT to be filed with the Court. FCRPP 2(3). However, the entire
                        form and all attachments are to be exchanged between the parties within 45 days of service of the petition on the
                        respondent, and objections thereto shall be exchanged within 20 days thereafter.</p>
                        <p class="small_text fw-bold">When this form is utilized as an AOC-239, Final Verified Disclosure Statement, pursuant to FCRPP 3(3), this form
                            is to be filed with the Court no later than 5 days prior to the trial if property matters are in dispute at that trial.
                            However, the parties may file an AOC-239.2, Affidavit of No Change in Circumstances, since the completion of the
                            AOC-238, Preliminary Verified Disclosure Statement, IF one was filed with the Court. A copy of the Final Verified
                            Disclosure Statement or the Affidavit, together with any supporting documentation, shall be provided to the
                            opposing party 15 days prior to trial unless otherwise ordered by the Court.</p>

                            <div class="buttons py-3">
                                <div class="d-flex justify-content-around">
                                    <button class="blue_border px-lg-5" type="button" onclick="window.print()">Print</button>
                                    <button class="blue_border px-lg-2">Save this form</button>
                                    <button type="reset" class="blue_border px-lg-2">Reset Form</button>
                                </div>
                            </div>
                            @include('layouts.pagination', ['page' => 23])
                </section>
            </form>
        </div>
    </div>
</body>
</html>
