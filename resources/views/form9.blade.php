{{-- fl140  CA.pdf --}}
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

        input[type='radio'] {
            accent-color: #8c8a8a !important;
        }

        body {
            font-family: "unset";
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

        .top:focus {
            border-bottom: none !important;
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
    </style>
</head>

<body>
    <div class="container-fluid   py-1 py-lg-3">
        <div class="container bg_color p-lg-3 p-1  ">



            <form action="{{ route('form9.submit') }}" method="post">
                @csrf
                <section class="section_area">

                    <div class="row  px-lg-5 px-2   pt-2">
                        @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show">{{ session('success') }} <button
                                type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                        <div class="small_text text-end fw-bold">FL-140</div>
                        <div class="col-lg-8 border border-dark">
                            <div class="small_text">ATTORNEY OR PARTY WITHOUT ATTORNEY (Name, State Bar number, and
                                address):</div>
                            <textarea name="" id="" cols="6" class="form-control p-0 m-0"></textarea>
                            <div class="p-2 border-bottom border-dark">
                                <div class="">
                                    <div class="d-flex">
                                        <div class="small_text">TELEPHONE NO.:</div>
                                        <div> <input type="text" name="phone" class="border-0 "></div>
                                    </div>
                                </div>

                                <div class="">
                                    <div class="d-flex">
                                        <div class="small_text">E-MAIL ADDRESS:</div>
                                        <div> <input type="text" name="email" class="border-0 "></div>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="d-flex">
                                        <div class="small_text">ATTORNEY FOR (Name):</div>
                                        <div> <input type="text" name="name" class="border-0 "></div>
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
                            <div class="p-2   border-dark">

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
                            <div class="">
                                <div class="text-center">DECLARATION OF DISCLOSURE</div>
                                <div class="row mx-auto">
                                    <div class="col-lg-6 mx-auto text-center">
                                        <div class="d-flex gap-2">
                                            <input type="radio" value="Yes" name="d_petitioner"  >
                                            <label for="">Petitioner's</label>
                                        </div>
                                        <div class="d-flex gap-2">
                                            <input type="radio" value="Yes" name="d_respondent" >
                                            <label for="">Respondent's</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mx-auto text-center">
                                        <div class="d-flex gap-2">
                                            <input type="radio" value="Yes" name="preliminary"  >
                                            <label for="">Preliminary</label>
                                        </div>
                                        <div class="d-flex gap-2">
                                            <input type="radio" value="Yes" name="final"  >
                                            <label for="">Final</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 border border-dark">
                            <div class="small_text">CASE NUMBER:</div>
                             <input type="text" name="case_number" class="border-0 w-100">
                        </div>
                    </div>
                    <div class="px-lg-5 px-2  pt-0 row">
                        <div class="text-center fw-bold">
                            DO NOT FILE DECLARATIONS OF DISCLOSURE OR FINANCIAL ATTACHMENTS WITH THE COURT
                        </div>
                        <div class="small_text">In a dissolution, legal separation, or nullity action, both a preliminary and a final declaration of disclosure must be served on the other
                            party with certain exceptions. Neither disclosure is filed with the court. Instead, a declaration stating that service of disclosure
                            documents was completed or waived must be filed with the court (see form FL-141)</div>

<ol  style="list-style-type: none">
    <li>
        <ol   style="list-style-type: none">
            <li>
                In summary dissolution cases, each spouse or domestic partner must exchange preliminary disclosures as described in Summary
Dissolution Information (form FL-810). Final disclosures are not required (see Family Code section 2109).
            </li>
            <li>
                In a default judgment case that is not a stipulated judgment or a judgment based on a marital settlement agreement, only the
petitioner is required to complete and serve a preliminary declaration of disclosure. A final disclosure is not required of either party
(see Family Code section 2110).
            </li>
            <li>Service of preliminary declarations of disclosure may not be waived by an agreement between the parties.</li>
            <li>Parties who agree to waive final declarations of disclosure must file their written agreement with the court (see form FL-144).</li>
        </ol>
    </li>
</ol>
<div class="small_text">
    The petitioner must serve a preliminary declaration of disclosure at the same time as the Petition or within 60 days of filing the Petition.
The respondent must serve a preliminary declaration of disclosure at the same time as the Response or within 60 days of filing the
Response. The time periods may be extended by written agreement of the parties or by court order (see Family Code section 2104(f)).
</div>
<div class="small_text fw-bold">Attached are the following:</div>

<ol class="ps-5">
    <li><span><input type="radio" value="Yes" name="fl_142" id="" class="me-3"></span> A completed Schedule of Assets and Debts (form FL-142) or<span><input type="radio" value="Yes" name="fl_160" id="" class="mx-3"></span> A Property Declaration (form FL-160) for (specify): <span><input type="radio" value="Yes" name="c_q_c" id="" class="mx-3"></span>Community and Quasi-Community Property<span><input type="radio" value="Yes" name="s_p" id="" class="mx-3"></span>Separate Property.</li>
    <li><span><input type="radio" value="Yes" name="c_i_e" id="" class="me-3"></span>A completed Income and Expense Declaration (form FL-150).</li>
    <li><span><input type="radio" value="Yes" name="a_t_r" id="" class="me-3"></span>All tax returns filed by the party in the two years before the date that the party served the disclosure documents</li>
    <div> <input type="text" name="atr_input" class="border-0 form-control "></div>
    <li><span><input type="radio" value="Yes" name="s_am4" id="" class="me-3"></span>A statement of all material facts and information regarding valuation of all assets that are community property or in which the
        community has an interest (not a form).</li>
        <div> <input type="text" name="sam4_input" class="border-0 form-control "></div>

    <li><span><input type="radio" value="Yes" name="s_am5" id="" class="me-3"></span>A statement of all material facts and information regarding obligations for which the community is liable (not a form).</li>
    <div> <input type="text" name="sam5_input" class="border-0 form-control "></div>

    <li><span><input type="radio" value="Yes" name="a_c_c" id="" class="me-3"></span>An accurate and complete written disclosure of any investment opportunity, business opportunity, or other income-producing
        opportunity presented since the date of separation that results from any investment, significant business, or other income-
        producing opportunity from the date of marriage to the date of separation (not a form).</li>
        <div> <input type="text" name="acc_input" class="border-0 form-control "></div>

</ol>
<div class="ps-5">
<div class="small_text">I declare under penalty of perjury under the laws of the State of California that the foregoing is true and correct.</div>
<div class="d-flex">
    <div class="small_text">Date</div>
    <div> <input type="text" name="date" class="border-0 "></div>
</div>

<div class="row border-bottom border-dark">
    <div class="col-lg-6">
              <div> <input type="text" name="topn" class="border-0 border-bottom form-control "></div>
              <div class="small_text text-center">(TYPE OR PRINT NAME)</div>
            </div>
            <div class="col-lg-6">
                <div> <input type="text" name="signature" class="border-0 border-bottom form-control "></div>
                <div class="small_text text-center">SIGNATURE</div>
     </div>
</div>
<div class="small_text text-end">Page 1 of 1</div>
     <div class="row">
        <div class="col-md-4 lh-1 py-2">
            <h4 class="fs-6">Form Adopted for Mandatory Use</h4>
            <div class="fs-6">Judicial Council of California</div>
            <div class="fs-6">FL-140 [Rev. July 1, 2013]</div>
        </div>
        <div class="col-md-4 text-center">
            <h4 class="mb-0 fw-bold">DECLARATION OF DISCLOSURE</h4>
            <h4 class="mb-0 ">(Family Law)</h4>
         </div>
        <div class="col-md-4 text-end">
            <h4 class="mb-0 fs-6">Family Code, §§ 2102, 2104,</h4>
            <h4 class="mb-0 fs-6">2105, 2106, 2112</h4>
            <a href="#" class="text-decoration-none text-dark fs-6">
                www.courts.ca.gov</a>
        </div>
    </div>
    <div class="row pb-4">
        <div class="col-lg-4  mt-3 mt-lg-0 small_text text-danger fw-bold" style="background-color:#99CCFF">For your protection and privacy, please press the Clear
            This Form button after you have printed the form.</div>
        <div class="col-lg-4  mt-3 mt-lg-0 text-center mx-auto">
            <button class="  btn-success" onclick="window.print()" style="background-color: #91FF90">Print this form</button>
            <button type="submit" class="  btn-warning" style="background-color: #FEFE98">Save this form</button>
        </div>
        <div class="col-lg-4 my-3 my-lg-0 text-center mx-auto">
            <button type="reset"  style="background-color: #F59292 ">Clear this form</button>
        </div>
    </div>
</div>

@include('layouts.pagination', ['page' => 9 ])
                    </div>
                </section>

            </form>
        </div>
    </div>

</body>

</html>
