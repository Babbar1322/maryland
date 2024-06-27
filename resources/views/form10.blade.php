{{-- fl161 CA.pdf --}}
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

        a {
            color: black !important;
        }

        td {
            padding: 0px !important;
            padding-left: 5px !important;
            background-color: transparent important;
        }

        input:focus {
            border: none !important;
            /* border-bottom: 1px solid black !important; */
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
            /* border-bottom: 1px solid black !important; */

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
            /* border-bottom: 2px solid black !important; */

        }

        .table> :not(caption)>*>* {
            background-color: white;
        }

        .section_area {
            background-color: white !important;
            margin: 10px !important;
            /* margin-top: 29px !important; */

        }

        /* .table-bordered > :not(caption) > * {
            border:none;
        } */

        .top:focus {
            /* border-bottom: none !important; */
        }

        input:focus-visible {
            outline: none !important;
            /* border-bottom: 2px solid black !important; */
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

        @media screen and (max-width : 1600px) {
            .d_sm_block {
                display: block !important;
            }

            .responsive_input {
                width: 100% !important;
            }
        }
    </style>
</head>

<body>
    <div class="container-fluid   py-1 py-lg-3">
        <form action="{{ route('form10.submit') }}" method="post">
            @csrf
            <div class="container bg_color p-lg-3 p-1  ">



                <section class="section_area pt-lg-5 px-lg-5 px-2 " id="first_section">
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show">{{ session('success') }} <button
                                type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <div class="row pt-2">
                        <div class="small_text text-end fw-bold">FL-161</div>
                        <div class="col-lg-8 border border-dark">
                            <div class="p-2 border-dark">

                                <div class="">
                                    <div class="d-flex ps-lg-5">
                                        <div class="small_text">PETITIONER :</div>
                                        <div> <input type="text" name="form1[0].#subform[0].#area[0].P2Header_gp[0].CaseName[0].Petitioner_ft[0]" class="border-0 "></div>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="d-flex ps-lg-5">
                                        <div class="small_text">RESPONDENT:</div>
                                        <div> <input type="text" name="form1[0].#subform[0].#area[0].Respondent_ft[0]" class="border-0 "></div>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="d-flex ps-lg-5">
                                        <div class="small_text">OTHER PARENT/PARTY:</div>
                                        <div> <input type="text" name="form1[0].#subform[0].#area[0].P2Header_gp[0].CaseName[0].OtherParty_ft[0]" class="border-0 "></div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-4 border border-dark">
                            <div class="small_text">CASE NUMBER:</div>
                            <input type="number" name="form1[0].#subform[0].#area[0].P2Header_gp[0].CaseNumber[0].CaseNumber_ft[0]" class="border-0 w-100">
                        </div>
                    </div>
                    <div class="    d-flex    pt-3 ">

                        <div class="d-flex gap-2">
                            <input type="radio" value="Yes" name="form1[0].#subform[0].#area[2].Parties[0]">
                            <label for="" class="fw-semibold">PETITIONER’S</label>
                        </div>
                        <div class="d-flex gap-2 ps-3">
                            <input type="radio" value="Yes" name="form1[0].#subform[0].#area[2].Parties[0]">
                            <label for="" class="fw-semibold"> RESPONDENT'S</label>
                        </div>
                    </div>
                    <div class="d-flex gap-2   pb-3">
                        <input type="radio" value="Yes" name="form1[0].#subform[0].#area[3].Community_Separate_Property[0]"
                            value="COMMUNITY AND QUASI-COMMUNITY PROPERTY DECLARATION">
                        <label for="" class="fw-semibold">COMMUNITY AND QUASI-COMMUNITY PROPERTY
                            DECLARATION</label>
                    </div>
                    <div class="d-flex gap-2">
                        <input type="radio" value="Yes" name="form1[0].#subform[0].Table5[0].AssetItem1_rw[0].Item1_Desc_ft[0]" value="SEPARATE PROPERTY DECLARATION">
                        <label for="" class="fw-semibold">SEPARATE PROPERTY DECLARATION</label>
                    </div>

                    <div class="table-responsive">
                        <table class="table-bordered border border-2 border-dark">
                            <thead>
                                <tr>
                                    <td></td>
                                    <td>A</td>
                                    <td>B</td>
                                    <td colspan="3"> C - D = E</td>
                                    <td colspan="3">F</td>
                                </tr>
                                <tr>
                                    <td class="text-center small_text">ITEM NO</td>
                                    <td class="text-center small_text">BRIEF DESCRIPTION</td>
                                    <td class="text-center small_text">DATE ACQUIRED (mm/dd/yyyy)</td>
                                    <td class="text-center small_text">GROSS FAIR MARKET VALUE</td>
                                    <td class="text-center small_text">AMOUNT OF DEBT</td>
                                    <td class="text-center small_text">NET FAIR MARKET VALUE</td>
                                    <td class="text-center small_text" colspan="2">PROPOSAL FOR DIVISION Award or Confirm to PETITIONER RESPONDENT</td>
                                </tr>

                                <tr>
                                    <td colspan="2"> <input type="text" name="form1[0].#subform[0].Table5[0].AssetItem1_rw[0].Item1_Desc_ft[0]" class="w-100  border-0"></td>

                                    <td> <div class="d-flex"> $ <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem1_rw[0].Item1_DateAcq_dt[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> $ <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem1_rw[0].Item1_GrossFMV_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> $ <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem1_rw[0].Item1_Debt_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> $ <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem1_rw[0].Item1_NetFMV_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> $ <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem1_rw[0].Item1_DivPet_ft[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex">$ <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem1_rw[0].Item1_DivRes_ft[0]" class="w-100  border-0"></div> </td>
                                </tr>

                                <tr>
                                    <td colspan="2"> <input type="text" name="form1[0].#subform[0].Table5[0].AssetItem2_rw[0].Item2_Desc_ft[0]" class="w-100  border-0"></td>

                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem2_rw[0].Item2_DateAcq_dt[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem2_rw[0].Item2_GrossFMV_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem2_rw[0].Item2_Debt_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem2_rw[0].Item2_NetFMV_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem2_rw[0].Item2_DivPet_ft[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"><input type="number" name="form1[0].#subform[0].Table5[0].AssetItem2_rw[0].Item2_DivRes_ft[0]" class="w-100  border-0"></div> </td>
                                </tr>



                                <tr>
                                    <td colspan="2"> <input type="text" name="form1[0].#subform[0].Table5[0].AssetItem3_rw[0].Item3_Desc_ft[0]" class="w-100  border-0"></td>

                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem3_rw[0].Item3_DateAcq_dt[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem3_rw[0].Item3_GrossFMV_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem3_rw[0].Item3_Debt_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem3_rw[0].Item3_NetFMV_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem3_rw[0].Item3_DivPet_ft[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"><input type="number" name="form1[0].#subform[0].Table5[0].AssetItem3_rw[0].Item3_DivRes_ft[0]" class="w-100  border-0"></div> </td>
                                </tr>

                                <tr>
                                    <td colspan="2"> <input type="text" name="form1[0].#subform[0].Table5[0].AssetItem4_rw[0].Item4_Desc_ft[0]" class="w-100  border-0"></td>

                                    <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem4_rw[0].Item4_DateAcq_dt[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem4_rw[0].Item4_GrossFMV_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem4_rw[0].Item4_Debt_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem4_rw[0].Item4_NetFMV_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem4_rw[0].Item4_DivPet_ft[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem4_rw[0].Item4_DivRes_ft[0]" class="w-100  border-0"></div> </td>
                                </tr>

                                <tr>
                                    <td colspan="2"> <input type="text" name="form1[0].#subform[0].Table5[0].AssetItem5_rw[0].Item5_Desc_ft[0]" class="w-100  border-0"></td>

                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem5_rw[0].Item5_DateAcq_dt[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem5_rw[0].Item5_GrossFMV_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem5_rw[0].Item5_Debt_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem5_rw[0].Item5_NetFMV_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem5_rw[0].Item5_DivPet_ft[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"><input type="number" name="form1[0].#subform[0].Table5[0].AssetItem5_rw[0].Item5_DivRes_ft[0]" class="w-100  border-0"></div> </td>
                                </tr>

                                <tr>
                                    <td colspan="2"> <input type="text" name="form1[0].#subform[0].Table5[0].AssetItem6_rw[0].Item6_Desc_ft[0]" class="w-100  border-0"></td>

                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem6_rw[0].Item6_DateAcq_dt[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem6_rw[0].Item6_GrossFMV_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem6_rw[0].Item6_Debt_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem6_rw[0].Item6_NetFMV_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem6_rw[0].Item6_DivPet_ft[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"><input type="number" name="form1[0].#subform[0].Table5[0].AssetItem6_rw[0].Item6_DivRes_ft[0]" class="w-100  border-0"></div> </td>
                                </tr>


                                <tr>
                                    <td colspan="2"> <input type="text" name="form1[0].#subform[0].Table5[0].AssetItem7_rw[0].Item7_Desc_ft[0]" class="w-100  border-0"></td>

                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem7_rw[0].Item7_DateAcq_dt[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem7_rw[0].Item7_GrossFMV_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem7_rw[0].Item7_Debt_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem7_rw[0].Item7_NetFMV_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem7_rw[0].Item7_DivPet_ft[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"><input type="number" name="form1[0].#subform[0].Table5[0].AssetItem7_rw[0].Item7_DivRes_ft[0]" class="w-100  border-0"></div> </td>
                                </tr>


                                <tr>
                                    <td colspan="2"> <input type="text" name="form1[0].#subform[0].Table5[0].AssetItem8_rw[0].Item8_Desc_ft[0]" class="w-100  border-0"></td>

                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem8_rw[0].Item8_DateAcq_dt[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem8_rw[0].Item8_GrossFMV_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem8_rw[0].Item8_Debt_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem8_rw[0].Item8_NetFMV_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem8_rw[0].Item8_DivPet_ft[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"><input type="number" name="form1[0].#subform[0].Table5[0].AssetItem8_rw[0].Item8_DivRes_ft[0]" class="w-100  border-0"></div> </td>
                                </tr>


                                <tr>
                                    <td colspan="2"> <input type="text" name="form1[0].#subform[0].Table5[0].AssetItem9_rw[0].Item9_Desc_ft[0]" class="w-100  border-0"></td>

                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem9_rw[0].Item9_DateAcq_dt[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem9_rw[0].Item9_GrossFMV_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem9_rw[0].Item9_Debt_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem9_rw[0].Item9_NetFMV_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem9_rw[0].Item9_DivPet_ft[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"><input type="number" name="form1[0].#subform[0].Table5[0].AssetItem9_rw[0].Item9_DivRes_ft[0]" class="w-100  border-0"></div> </td>
                                </tr>

                                <tr>
                                    <td colspan="2"> <input type="text" name="form1[0].#subform[0].Table5[0].AssetItem10_rw[0].Item10_Desc_ft[0]" class="w-100  border-0"></td>

                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem10_rw[0].Item10_DateAcq_dt[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem10_rw[0].Item10_GrossFMV_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem10_rw[0].Item10_Debt_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem10_rw[0].Item10_NetFMV_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem10_rw[0].Item10_DivPet_ft[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"><input type="number" name="form1[0].#subform[0].Table5[0].AssetItem10_rw[0].Item10_DivRes_ft[0]" class="w-100  border-0"></div> </td>
                                </tr>

                                <tr>
                                    <td colspan="2"> <input type="text" name="form1[0].#subform[0].Table5[0].AssetItem11_rw[0].Item11_Desc_ft[0]" class="w-100  border-0"></td>

                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem11_rw[0].Item11_DateAcq_dt[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem11_rw[0].Item11_GrossFMV_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem11_rw[0].Item11_Debt_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem11_rw[0].Item11_NetFMV_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem11_rw[0].Item11_DivPet_ft[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"><input type="number" name="form1[0].#subform[0].Table5[0].AssetItem11_rw[0].Item11_DivRes_ft[0]" class="w-100  border-0"></div> </td>
                                </tr>


                                <tr>
                                    <td colspan="2"> <input type="text" name="form1[0].#subform[0].Table5[0].AssetItem12_rw[0].Item12_Desc_ft[0]" class="w-100  border-0"></td>

                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem12_rw[0].Item12_DateAcq_dt[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem12_rw[0].Item12_GrossFMV_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem12_rw[0].Item12_Debt_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem12_rw[0].Item12_NetFMV_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem12_rw[0].Item12_DivPet_ft[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"><input type="number" name="form1[0].#subform[0].Table5[0].AssetItem12_rw[0].Item12_DivRes_ft[0]" class="w-100  border-0"></div> </td>
                                </tr>

                                <tr>
                                    <td colspan="2"> <input type="text" name="form1[0].#subform[0].Table5[0].AssetItem13_rw[0].Item13_Desc_ft[0]" class="w-100  border-0"></td>

                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem13_rw[0].Item13_DateAcq_dt[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem13_rw[0].Item13_GrossFMV_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem13_rw[0].Item13_Debt_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem13_rw[0].Item13_NetFMV_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem13_rw[0].Item13_DivPet_ft[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"><input type="number" name="form1[0].#subform[0].Table5[0].AssetItem13_rw[0].Item13_DivRes_ft[0]" class="w-100  border-0"></div> </td>
                                </tr>

                                <tr>
                                    <td colspan="2"> <input type="text" name="form1[0].#subform[0].Table5[0].AssetItem14_rw[0].Item14_Desc_ft[0]" class="w-100  border-0"></td>

                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem14_rw[0].Item14_DateAcq_dt[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem14_rw[0].Item14_GrossFMV_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem14_rw[0].Item14_Debt_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem14_rw[0].Item14_NetFMV_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem14_rw[0].Item14_DivPet_ft[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"><input type="number" name="form1[0].#subform[0].Table5[0].AssetItem14_rw[0].Item14_DivRes_ft[0]" class="w-100  border-0"></div> </td>
                                </tr>

                                <tr>
                                    <td colspan="2"> <input type="text" name="form1[0].#subform[0].Table5[0].AssetItem15_rw[0].Item15_Desc_ft[0]" class="w-100  border-0"></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem15_rw[0].Item15_DateAcq_dt[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem15_rw[0].Item15_GrossFMV_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem15_rw[0].Item15_Debt_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem15_rw[0].Item15_NetFMV_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem15_rw[0].Item15_DivPet_ft[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"><input type="number" name="form1[0].#subform[0].Table5[0].AssetItem15_rw[0].Item15_DivRes_ft[0]" class="w-100  border-0"></div> </td>
                                </tr>              <tr>
                                    <td colspan="2"> <input type="text" name="form1[0].#subform[0].Table5[0].AssetItem16_rw[0].Item16_Desc_ft[0]" class="w-100  border-0"></td>

                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem16_rw[0].Item16_DateAcq_dt[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem16_rw[0].Item16_GrossFMV_dc[0]"  class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem16_rw[0].Item16_Debt_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem16_rw[0].Item16_NetFMV_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem16_rw[0].Item16_DivPet_ft[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"><input type="number" name="form1[0].#subform[0].Table5[0].AssetItem16_rw[0].Item16_DivRes_ft[0]" class="w-100  border-0"></div> </td>
                                </tr>

                                <tr>
                                    <td colspan="2"> <input type="text" name="form1[0].#subform[0].Table5[0].AssetItem17_rw[0].Item17_Desc_ft[0]" class="w-100  border-0"></td>

                                    <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem17_rw[0].Item17_DateAcq_dt[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem17_rw[0].Item17_GrossFMV_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem17_rw[0].Item17_Debt_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem17_rw[0].Item17_NetFMV_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem17_rw[0].Item17_DivPet_ft[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem17_rw[0].Item17_DivRes_ft[0]" class="w-100  border-0"></div> </td>
                                </tr>
                                 <tr>
                                    <td colspan="2"> <input type="text" name="form1[0].#subform[0].Table5[0].AssetItem18_rw[0].Item18_Desc_ft[0]" class="w-100  border-0"></td>

                                    <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem18_rw[0].Item18_DateAcq_dt[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem18_rw[0].Item18_GrossFMV_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem18_rw[0].Item18_Debt_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem18_rw[0].Item18_NetFMV_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem18_rw[0].Item18_DivPet_ft[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem18_rw[0].Item18_DivRes_ft[0]" class="w-100  border-0"></div> </td>
                                </tr>
                                 <tr>
                                    <td colspan="2"> <input type="text" name="form1[0].#subform[0].Table5[0].AssetItem19_rw[0].Item19_Desc_ft[0]" class="w-100  border-0"></td>

                                    <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem19_rw[0].Item19_DateAcq_dt[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem19_rw[0].Item19_GrossFMV_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem19_rw[0].Item19_Debt_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem19_rw[0].Item19_NetFMV_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem19_rw[0].Item19_DivPet_ft[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem19_rw[0].Item19_DivRes_ft[0]" class="w-100  border-0"></div> </td>
                                </tr>
                                 <tr>
                                    <td colspan="2"> <input type="text" name="form1[0].#subform[0].Table5[0].AssetItem20_rw[0].Item20_Desc_ft[0]" class="w-100  border-0"></td>
                                    <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem20_rw[0].Item20_DateAcq_dt[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem20_rw[0].Item20_GrossFMV_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem20_rw[0].Item20_Debt_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem20_rw[0].Item20_NetFMV_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem20_rw[0].Item20_DivPet_ft[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem20_rw[0].Item20_DivRes_ft[0]" class="w-100  border-0"></div> </td>
                                </tr>
                                 <tr>
                                    <td colspan="2"> <input type="text" name="form1[0].#subform[0].Table5[0].AssetItem21_rw[0].Item21_Desc_ft[0]" class="w-100  border-0"></td>
                                    <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem21_rw[0].Item21_DateAcq_dt[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem21_rw[0].Item21_GrossFMV_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem21_rw[0].Item21_Debt_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem21_rw[0].Item21_NetFMV_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem21_rw[0].Item21_DivPet_ft[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem21_rw[0].Item21_DivRes_ft[0]" class="w-100  border-0"></div> </td>
                                </tr>
                                 <tr>
                                    <td colspan="2"> <input type="text" name="form1[0].#subform[0].Table5[0].AssetItem22_rw[0].Item22_Desc_ft[0]" class="w-100  border-0"></td>
                                    <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem22_rw[0].Item22_DateAcq_dt[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem22_rw[0].Item22_GrossFMV_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem22_rw[0].Item22_Debt_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem22_rw[0].Item22_NetFMV_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem22_rw[0].Item22_DivPet_ft[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem22_rw[0].Item22_DivRes_ft[0]" class="w-100  border-0"></div> </td>
                                </tr>
                                 <tr>
                                    <td colspan="2"> <input type="text" name="form1[0].#subform[0].Table5[0].AssetItem23_rw[0].Item23_Desc_ft[0]" class="w-100  border-0"></td>
                                    <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem23_rw[0].Item23_DateAcq_dt[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem23_rw[0].Item23_GrossFMV_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem23_rw[0].Item23_Debt_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem23_rw[0].Item23_NetFMV_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem23_rw[0].Item23_DivPet_ft[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem23_rw[0].Item23_DivRes_ft[0]" class="w-100  border-0"></div> </td>
                                </tr>
                                 <tr>
                                    <td colspan="2"> <input type="text" name="form1[0].#subform[0].Table5[0].AssetItem24_rw[0].Item24_Desc_ft[0]" class="w-100  border-0"></td>
                                    <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem24_rw[0].Item24_DateAcq_dt[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem24_rw[0].Item24_GrossFMV_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem24_rw[0].Item24_Debt_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem24_rw[0].Item24_NetFMV_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem24_rw[0].Item24_DivPet_ft[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem24_rw[0].Item24_DivRes_ft[0]" class="w-100  border-0"></div> </td>
                                </tr>
                                 <tr>
                                    <td colspan="2"> <input type="text" name="form1[0].#subform[0].Table5[0].AssetItem25_rw[0].Item25_Desc_ft[0]" class="w-100  border-0"></td>
                                    <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem25_rw[0].Item25_DateAcq_dt[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem25_rw[0].Item25_GrossFMV_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem25_rw[0].Item25_Debt_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem25_rw[0].Item25_NetFMV_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem25_rw[0].Item25_DivPet_ft[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem25_rw[0].Item25_DivRes_ft[0]" class="w-100  border-0"></div> </td>
                                </tr>
                                 <tr>
                                    <td colspan="2"> <input type="text" name="form1[0].#subform[0].Table5[0].AssetItem26_rw[0].Item26_Desc_ft[0]" class="w-100  border-0"></td>
                                    <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem26_rw[0].Item26_DateAcq_dt[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem26_rw[0].Item26_GrossFMV_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem26_rw[0].Item26_Debt_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem26_rw[0].Item26_NetFMV_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem26_rw[0].Item26_DivPet_ft[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem26_rw[0].Item26_DivRes_ft[0]" class="w-100  border-0"></div> </td>
                                </tr>
                                 <tr>
                                    <td colspan="2"> <input type="text" name="form1[0].#subform[0].Table5[0].AssetItem27_rw[0].Item27_Desc_ft[0]" class="w-100  border-0"></td>
                                    <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem27_rw[0].Item27_DateAcq_dt[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem27_rw[0].Item27_GrossFMV_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem27_rw[0].Item27_Debt_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem27_rw[0].Item27_NetFMV_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem27_rw[0].Item27_DivPet_ft[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem27_rw[0].Item27_DivRes_ft[0]" class="w-100  border-0"></div> </td>
                                </tr>
                                 <tr>
                                    <td colspan="2"> <input type="text" name="form1[0].#subform[0].Table5[0].AssetItem28_rw[0].Item28_Desc_ft[0]" class="w-100  border-0"></td>
                                    <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem28_rw[0].Item28_DateAcq_dt[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem28_rw[0].Item28_GrossFMV_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem28_rw[0].Item28_Debt_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem28_rw[0].Item28_NetFMV_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem28_rw[0].Item28_DivPet_ft[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem28_rw[0].Item28_DivRes_ft[0]" class="w-100  border-0"></div> </td>
                                </tr>
                                 <tr>
                                    <td colspan="2"> <input type="text" name="form1[0].#subform[0].Table5[0].AssetItem29_rw[0].Item29_Desc_ft[0]" class="w-100  border-0"></td>
                                    <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem29_rw[0].Item29_DateAcq_dt[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem29_rw[0].Item29_GrossFMV_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem29_rw[0].Item29_Debt_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem29_rw[0].Item29_NetFMV_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem29_rw[0].Item29_DivPet_ft[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem29_rw[0].Item29_DivRes_ft[0]" class="w-100  border-0"></div> </td>
                                </tr>
                                 <tr>
                                    <td colspan="2"> <input type="text" name="form1[0].#subform[0].Table5[0].AssetItem30_rw[0].Item30_Desc_ft[0]" class="w-100  border-0"></td>
                                    <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem30_rw[0].Item30_DateAcq_dt[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem30_rw[0].Item30_GrossFMV_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem30_rw[0].Item30_Debt_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem30_rw[0].Item30_NetFMV_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem30_rw[0].Item30_DivPet_ft[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem30_rw[0].Item30_DivRes_ft[0]" class="w-100  border-0"></div> </td>
                                </tr>
                                 <tr>
                                    <td colspan="2"> <input type="text" name="form1[0].#subform[0].Table5[0].AssetItem31_rw[0].Item31_Desc_ft[0]" class="w-100  border-0"></td>
                                    <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem31_rw[0].Item31_DateAcq_dt[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem31_rw[0].Item31_GrossFMV_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem31_rw[0].Item31_Debt_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem31_rw[0].Item31_NetFMV_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem31_rw[0].Item31_DivPet_ft[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem31_rw[0].Item31_DivRes_ft[0]" class="w-100  border-0"></div> </td>
                                </tr>

                                <tr>
                                    <td colspan="2"> <input type="text" name="form1[0].#subform[0].Table5[0].AssetItem32_rw[0].Item32_Desc_ft[0]" class="w-100  border-0"></td>
                                    <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem32_rw[0].Item32_DateAcq_dt[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem32_rw[0].Item32_GrossFMV_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem32_rw[0].Item32_Debt_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem32_rw[0].Item32_NetFMV_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem32_rw[0].Item32_DivPet_ft[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem32_rw[0].Item32_DivRes_ft[0]" class="w-100  border-0"></div> </td>
                                </tr>
                                <tr>
                                    <td colspan="2"> <input type="text" name="form1[0].#subform[0].Table5[0].AssetItem33_rw[0].Item33_Desc_ft[0]" class="w-100  border-0"></td>
                                    <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem33_rw[0].Item33_DateAcq_dt[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem33_rw[0].Item33_GrossFMV_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem33_rw[0].Item33_Debt_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem33_rw[0].Item33_NetFMV_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem33_rw[0].Item33_DivPet_ft[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem33_rw[0].Item33_DivRes_ft[0]" class="w-100  border-0"></div> </td>
                                </tr><tr>
                                    <td colspan="2"> <input type="text" name="form1[0].#subform[0].Table5[0].AssetItem34_rw[0].Item34_Desc_ft[0]" class="w-100  border-0"></td>
                                    <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem34_rw[0].Item34_DateAcq_dt[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem34_rw[0].Item34_GrossFMV_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem34_rw[0].Item34_Debt_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem34_rw[0].Item34_NetFMV_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem34_rw[0].Item34_DivPet_ft[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem34_rw[0].Item34_DivRes_ft[0]" class="w-100  border-0"></div> </td>
                                </tr>
                                <tr>
                                    <td colspan="2"> <input type="text" name="form1[0].#subform[0].Table5[0].AssetItem35_rw[0].Item35_Desc_ft[0]" class="w-100  border-0"></td>
                                    <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem35_rw[0].Item35_DateAcq_dt[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem35_rw[0].Item35_GrossFMV_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem35_rw[0].Item35_Debt_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem35_rw[0].Item35_NetFMV_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem35_rw[0].Item35_DivPet_ft[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem35_rw[0].Item35_DivRes_ft[0]" class="w-100  border-0"></div> </td>
                                </tr>
                                <tr>
                                    <td colspan="2"> <input type="text" name="form1[0].#subform[0].Table5[0].AssetItem36_rw[0].Item36_Desc_ft[0]" class="w-100  border-0"></td>
                                    <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem36_rw[0].Item36_DateAcq_dt[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem36_rw[0].Item36_GrossFMV_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem36_rw[0].Item36_Debt_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem36_rw[0].Item36_NetFMV_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem36_rw[0].Item36_DivPet_ft[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem36_rw[0].Item36_DivRes_ft[0]" class="w-100  border-0"></div> </td>
                                </tr>
                                <tr>
                                    <td colspan="2"> <input type="text" name="form1[0].#subform[0].Table5[0].AssetItem37_rw[0].Item37_Desc_ft[0]" class="w-100  border-0"></td>
                                    <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem37_rw[0].Item37_DateAcq_dt[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem37_rw[0].Item37_GrossFMV_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem37_rw[0].Item37_Debt_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem37_rw[0].Item37_NetFMV_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem37_rw[0].Item37_DivPet_ft[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem37_rw[0].Item37_DivRes_ft[0]" class="w-100  border-0"></div> </td>
                                </tr>
                                <tr>
                                    <td colspan="2"> <input type="text" name="form1[0].#subform[0].Table5[0].AssetItem38_rw[0].Item38_Desc_ft[0]" class="w-100  border-0"></td>
                                    <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem38_rw[0].Item38_DateAcq_dt[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem38_rw[0].Item38_GrossFMV_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem38_rw[0].Item38_Debt_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem38_rw[0].Item38_NetFMV_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem38_rw[0].Item38_DivPet_ft[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem38_rw[0].Item38_DivRes_ft[0]" class="w-100  border-0"></div> </td>
                                </tr>
                                <tr>
                                    <td colspan="2"> <input type="text" name="form1[0].#subform[0].Table5[0].AssetItem39_rw[0].Item39_Desc_ft[0]" class="w-100  border-0"></td>
                                    <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem39_rw[0].Item39_DateAcq_dt[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem39_rw[0].Item39_GrossFMV_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem39_rw[0].Item39_Debt_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem39_rw[0].Item39_NetFMV_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem39_rw[0].Item39_DivPet_ft[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[0].Table5[0].AssetItem39_rw[0].Item39_DivRes_ft[0]" class="w-100  border-0"></div> </td>
                                </tr>
                            </thead>
                        </table>
                    </div>
                    <div class="small_text text-end fw-bold">Page 1 of 2</div>
                    <div class="border-bottom border-dark "></div>

                    <div class="row pb-5">
                        <div class="col-md-4 lh-1 py-2">
                            <h4 class="fs-6">Form Adopted for Mandatory Use</h4>
                            <div class="fs-6">Judicial Council of California</div>
                            <div class="fs-6">FL-161 [Rev. July 1, 2013]</div>
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
                </section>
                <section class="section_area  px-lg-5 px-2 " id="second_section">
                    <div class="table-responsive pt-5">
                        <table class="table-bordered border border-2 border-dark">
                            <thead>
                                <tr>
                                    <td></td>
                                    <td>A</td>
                                    <td>B</td>
                                    <td> C </td>
                                    <td colspan="2">D</td>
                                </tr>
                                <tr>
                                    <td class="text-center small_text">ITEM NO</td>
                                    <td class="text-center small_text">DEBTS— SHOW TO WHOM OWED</td>
                                    <td class="text-center small_text">DATE INCURRED</td>
                                    <td class="text-center small_text">AMOUNT OF DEBT</td>
                                    <td class="text-center small_text" colspan="2">PROPOSAL FOR DIVISION Award or Confirm to
                                        PETITIONER RESPONDENT</td>
                                </tr>
                                <tr>
                                    <td colspan="2"> <input type="text" name="form1[0].#subform[4].Table4[0].DebtItem1_rw[0].Debt_Item1_Desc_ft[0]" class="w-100  border-0"></td>
                                    <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem1_rw[0].Debt_Item1_Date_dt[0]" class="w-100  border-0"></div></td>
                                     <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem1_rw[0].Debt_Item1_Amount_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem1_rw[0].Debt_Item1_DivPet_ft[0]" class="w-100  border-0"></div></td>
                                     <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem1_rw[0].Debt_Item1_DivResp_ft[0]" class="w-100  border-0"></div> </td>
                                </tr>

                                <tr>
                                    <td colspan="2"> <input type="text" name="form1[0].#subform[4].Table4[0].DebtItem2_rw[0].Debt_Item2_Desc_ft[0]" class="w-100  border-0"></td>
                                    <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem2_rw[0].Debt_Item2_Date_dt[0]" class="w-100  border-0"></div></td>
                                     <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem2_rw[0].Debt_Item2_Amount_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem2_rw[0].Debt_Item2_DivPet_ft[0]" class="w-100  border-0"></div></td>
                                     <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem2_rw[0].Debt_Item2_DivResp_ft[0]" class="w-100  border-0"></div> </td>
                                </tr>
                                <tr>
                                    <td colspan="2"> <input type="text" name="form1[0].#subform[4].Table4[0].DebtItem3_rw[0].Debt_Item3_Desc_ft[0]" class="w-100  border-0"></td>
                                    <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem3_rw[0].Debt_Item3_Date_dt[0]" class="w-100  border-0"></div></td>
                                     <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem3_rw[0].Debt_Item3_Amount_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem3_rw[0].Debt_Item3_DivPet_ft[0]" class="w-100  border-0"></div></td>
                                     <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem3_rw[0].Debt_Item3_DivResp_ft[0]" class="w-100  border-0"></div> </td>
                                </tr>
                                <tr>
                                    <td colspan="2"> <input type="text" name="form1[0].#subform[4].Table4[0].DebtItem4_rw[0].Debt_Item4_Desc_ft[0]" class="w-100  border-0"></td>
                                    <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem4_rw[0].Debt_Item4_Date_dt[0]" class="w-100  border-0"></div></td>
                                     <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem4_rw[0].Debt_Item4_Amount_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem4_rw[0].Debt_Item4_DivPet_ft[0]" class="w-100  border-0"></div></td>
                                     <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem4_rw[0].Debt_Item4_DivResp_ft[0]" class="w-100  border-0"></div> </td>
                                </tr>
                                <tr>
                                    <td colspan="2"> <input type="text" name="form1[0].#subform[4].Table4[0].DebtItem5_rw[0].Debt_Item5_Desc_ft[0]" class="w-100  border-0"></td>
                                    <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem5_rw[0].Debt_Item5_Date_dt[0]" class="w-100  border-0"></div></td>
                                     <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem5_rw[0].Debt_Item5_Amount_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem5_rw[0].Debt_Item5_DivPet_ft[0]" class="w-100  border-0"></div></td>
                                     <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem5_rw[0].Debt_Item5_DivResp_ft[0]" class="w-100  border-0"></div> </td>
                                </tr>
                                <tr>
                                    <td colspan="2"> <input type="text" name="form1[0].#subform[4].Table4[0].DebtItem6_rw[0].Debt_Item6_Desc_ft[0]" class="w-100  border-0"></td>
                                    <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem6_rw[0].Debt_Item6_Date_dt[0]" class="w-100  border-0"></div></td>
                                     <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem6_rw[0].Debt_Item6_Amount_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem6_rw[0].Debt_Item6_DivPet_ft[0]" class="w-100  border-0"></div></td>
                                     <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem6_rw[0].Debt_Item6_DivResp_ft[0]" class="w-100  border-0"></div> </td>
                                </tr>
                                <tr>
                                    <td colspan="2"> <input type="text" name="form1[0].#subform[4].Table4[0].DebtItem7_rw[0].Debt_Item7_Desc_ft[0]" class="w-100  border-0"></td>
                                    <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem7_rw[0].Debt_Item7_Date_dt[0]" class="w-100  border-0"></div></td>
                                     <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem7_rw[0].Debt_Item7_Amount_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem7_rw[0].Debt_Item7_DivPet_ft[0]" class="w-100  border-0"></div></td>
                                     <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem7_rw[0].Debt_Item7_DivResp_ft[0]" class="w-100  border-0"></div> </td>
                                </tr>
                                <tr>
                                    <td colspan="2"> <input type="text" name="form1[0].#subform[4].Table4[0].DebtItem8_rw[0].Debt_Item8_Desc_ft[0]" class="w-100  border-0"></td>
                                    <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem8_rw[0].Debt_Item8_Date_dt[0]" class="w-100  border-0"></div></td>
                                     <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem8_rw[0].Debt_Item8_Amount_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem8_rw[0].Debt_Item8_DivPet_ft[0]" class="w-100  border-0"></div></td>
                                     <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem8_rw[0].Debt_Item8_DivResp_ft[0]" class="w-100  border-0"></div> </td>
                                </tr>
                                <tr>
                                    <td colspan="2"> <input type="text" name="form1[0].#subform[4].Table4[0].DebtItem9_rw[0].Debt_Item9_Desc_ft[0]" class="w-100  border-0"></td>
                                    <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem9_rw[0].Debt_Item9_Date_dt[0]" class="w-100  border-0"></div></td>
                                     <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem9_rw[0].Debt_Item9_Amount_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem9_rw[0].Debt_Item9_DivPet_ft[0]" class="w-100  border-0"></div></td>
                                     <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem9_rw[0].Debt_Item9_DivResp_ft[0]" class="w-100  border-0"></div> </td>
                                </tr>
                                <tr>
                                    <td colspan="2"> <input type="text" name="form1[0].#subform[4].Table4[0].DebtItem10_rw[0].Debt_Item10_Desc_ft[0]" class="w-100  border-0"></td>
                                    <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem10_rw[0].Debt_Item10_Date_dt[0]" class="w-100  border-0"></div></td>
                                     <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem10_rw[0].Debt_Item10_Amount_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem10_rw[0].Debt_Item10_DivPet_ft[0]" class="w-100  border-0"></div></td>
                                     <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem10_rw[0].Debt_Item10_DivResp_ft[0]" class="w-100  border-0"></div> </td>
                                </tr>
                                {{-- 10 --}}
                                <tr>
                                    <td colspan="2"> <input type="text" name="form1[0].#subform[4].Table4[0].DebtItem11_rw[0].Debt_Item11_Desc_ft[0]" class="w-100  border-0"></td>
                                    <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem11_rw[0].Debt_Item11_Date_dt[0]" class="w-100  border-0"></div></td>
                                     <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem11_rw[0].Debt_Item11_Amount_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem11_rw[0].Debt_Item11_DivPet_ft[0]" class="w-100  border-0"></div></td>
                                     <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem11_rw[0].Debt_Item11_DivResp_ft[0]" class="w-100  border-0"></div> </td>
                                </tr>
                                <tr>
                                    <td colspan="2"> <input type="text" name="form1[0].#subform[4].Table4[0].DebtItem12_rw[0].Debt_Item12_Desc_ft[0]" class="w-100  border-0"></td>
                                    <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem12_rw[0].Debt_Item12_Date_dt[0]" class="w-100  border-0"></div></td>
                                     <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem12_rw[0].Debt_Item12_Amount_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem12_rw[0].Debt_Item12_DivPet_ft[0]" class="w-100  border-0"></div></td>
                                     <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem12_rw[0].Debt_Item12_DivResp_ft[0]" class="w-100  border-0"></div> </td>
                                </tr>
                                <tr>
                                    <td colspan="2"> <input type="text" name="form1[0].#subform[4].Table4[0].DebtItem13_rw[0].Debt_Item13_Desc_ft[0]" class="w-100  border-0"></td>
                                    <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem13_rw[0].Debt_Item13_Date_dt[0]" class="w-100  border-0"></div></td>
                                     <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem13_rw[0].Debt_Item13_Amount_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem13_rw[0].Debt_Item13_DivPet_ft[0]" class="w-100  border-0"></div></td>
                                     <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem13_rw[0].Debt_Item13_DivResp_ft[0]" class="w-100  border-0"></div> </td>
                                </tr>
                                <tr>
                                    <td colspan="2"> <input type="text" name="form1[0].#subform[4].Table4[0].DebtItem14_rw[0].Debt_Item14_Desc_ft[0]" class="w-100  border-0"></td>
                                    <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem14_rw[0].Debt_Item14_Date_dt[0]" class="w-100  border-0"></div></td>
                                     <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem14_rw[0].Debt_Item14_Amount_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem14_rw[0].Debt_Item14_DivPet_ft[0]" class="w-100  border-0"></div></td>
                                     <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem14_rw[0].Debt_Item14_DivResp_ft[0]" class="w-100  border-0"></div> </td>
                                </tr>
                                <tr>
                                    <td colspan="2"> <input type="text" name="form1[0].#subform[4].Table4[0].DebtItem15_rw[0].Debt_Item15_Desc_ft[0]" class="w-100  border-0"></td>
                                    <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem15_rw[0].Debt_Item15_Date_dt[0]" class="w-100  border-0"></div></td>
                                     <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem15_rw[0].Debt_Item15_Amount_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem15_rw[0].Debt_Item15_DivPet_ft[0]" class="w-100  border-0"></div></td>
                                     <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem15_rw[0].Debt_Item15_DivResp_ft[0]" class="w-100  border-0"></div> </td>
                                </tr>
                                <tr>
                                    <td colspan="2"> <input type="text" name="form1[0].#subform[4].Table4[0].DebtItem16_rw[0].Debt_Item16_Desc_ft[0]" class="w-100  border-0"></td>
                                    <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem16_rw[0].Debt_Item16_Date_dt[0]" class="w-100  border-0"></div></td>
                                     <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem16_rw[0].Debt_Item16_Amount_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem16_rw[0].Debt_Item16_DivPet_ft[0]" class="w-100  border-0"></div></td>
                                     <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem16_rw[0].Debt_Item16_DivResp_ft[0]" class="w-100  border-0"></div> </td>
                                </tr>
                                <tr>
                                    <td colspan="2"> <input type="text" name="form1[0].#subform[4].Table4[0].DebtItem17_rw[0].Debt_Item17_Desc_ft[0]" class="w-100  border-0"></td>
                                    <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem17_rw[0].Debt_Item17_Date_dt[0]" class="w-100  border-0"></div></td>
                                     <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem17_rw[0].Debt_Item17_Amount_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem17_rw[0].Debt_Item17_DivPet_ft[0]" class="w-100  border-0"></div></td>
                                     <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem17_rw[0].Debt_Item17_DivResp_ft[0]" class="w-100  border-0"></div> </td>
                                </tr>
                                <tr>
                                    <td colspan="2"> <input type="text" name="form1[0].#subform[4].Table4[0].DebtItem18_rw[0].Debt_Item18_Desc_ft[0]" class="w-100  border-0"></td>
                                    <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem18_rw[0].Debt_Item18_Date_dt[0]" class="w-100  border-0"></div></td>
                                     <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem18_rw[0].Debt_Item18_Amount_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem18_rw[0].Debt_Item18_DivPet_ft[0]" class="w-100  border-0"></div></td>
                                     <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem18_rw[0].Debt_Item18_DivResp_ft[0]" class="w-100  border-0"></div> </td>
                                </tr>
                                <tr>
                                    <td colspan="2"> <input type="text" name="form1[0].#subform[4].Table4[0].DebtItem19_rw[0].Debt_Item19_Desc_ft[0]" class="w-100  border-0"></td>
                                    <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem19_rw[0].Debt_Item19_Date_dt[0]" class="w-100  border-0"></div></td>
                                     <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem19_rw[0].Debt_Item19_Amount_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem19_rw[0].Debt_Item19_DivPet_ft[0]" class="w-100  border-0"></div></td>
                                     <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem19_rw[0].Debt_Item19_DivResp_ft[0]" class="w-100  border-0"></div> </td>
                                </tr>
                                <tr>
                                    <td colspan="2"> <input type="text" name="form1[0].#subform[4].Table4[0].DebtItem20_rw[0].Debt_Item20_Desc_ft[0]" class="w-100  border-0"></td>
                                    <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem20_rw[0].Debt_Item20_Date_dt[0]" class="w-100  border-0"></div></td>
                                     <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem20_rw[0].Debt_Item20_Amount_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem20_rw[0].Debt_Item20_DivPet_ft[0]" class="w-100  border-0"></div></td>
                                     <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem20_rw[0].Debt_Item20_DivResp_ft[0]" class="w-100  border-0"></div> </td>
                                </tr>

                                {{-- 20 --}}
                                <tr>
                                    <td colspan="2"> <input type="text" name="form1[0].#subform[4].Table4[0].DebtItem21_rw[0].Debt_Item21_Desc_ft[0]" class="w-100  border-0"></td>
                                    <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem21_rw[0].Debt_Item21_Date_dt[0]" class="w-100  border-0"></div></td>
                                     <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem21_rw[0].Debt_Item21_Amount_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem21_rw[0].Debt_Item21_DivPet_ft[0]" class="w-100  border-0"></div></td>
                                     <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem21_rw[0].Debt_Item21_DivResp_ft[0]" class="w-100  border-0"></div> </td>
                                </tr>
                                <tr>
                                    <td colspan="2"> <input type="text" name="form1[0].#subform[4].Table4[0].DebtItem22_rw[0].Debt_Item22_Desc_ft[0]" class="w-100  border-0"></td>
                                    <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem22_rw[0].Debt_Item22_Date_dt[0]" class="w-100  border-0"></div></td>
                                     <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem22_rw[0].Debt_Item22_Amount_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem22_rw[0].Debt_Item22_DivPet_ft[0]" class="w-100  border-0"></div></td>
                                     <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem22_rw[0].Debt_Item22_DivResp_ft[0]" class="w-100  border-0"></div> </td>
                                </tr>
                                <tr>
                                    <td colspan="2"> <input type="text" name="form1[0].#subform[4].Table4[0].DebtItem23_rw[0].Debt_Item23_Desc_ft[0]" class="w-100  border-0"></td>
                                    <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem23_rw[0].Debt_Item23_Date_dt[0]" class="w-100  border-0"></div></td>
                                     <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem23_rw[0].Debt_Item23_Amount_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem23_rw[0].Debt_Item23_DivPet_ft[0]" class="w-100  border-0"></div></td>
                                     <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem23_rw[0].Debt_Item23_DivResp_ft[0]" class="w-100  border-0"></div> </td>
                                </tr>
                                <tr>
                                    <td colspan="2"> <input type="text" name="form1[0].#subform[4].Table4[0].DebtItem24_rw[0].Debt_Item24_Desc_ft[0]" class="w-100  border-0"></td>
                                    <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem24_rw[0].Debt_Item24_Date_dt[0]" class="w-100  border-0"></div></td>
                                     <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem24_rw[0].Debt_Item24_Amount_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem24_rw[0].Debt_Item24_DivPet_ft[0]" class="w-100  border-0"></div></td>
                                     <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem24_rw[0].Debt_Item24_DivResp_ft[0]" class="w-100  border-0"></div> </td>
                                </tr>
                                <tr>
                                    <td colspan="2"> <input type="text" name="form1[0].#subform[4].Table4[0].DebtItem25_rw[0].Debt_Item25_Desc_ft[0]" class="w-100  border-0"></td>
                                    <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem25_rw[0].Debt_Item25_Date_dt[0]" class="w-100  border-0"></div></td>
                                     <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem25_rw[0].Debt_Item25_Amount_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem25_rw[0].Debt_Item25_DivPet_ft[0]" class="w-100  border-0"></div></td>
                                     <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem25_rw[0].Debt_Item25_DivResp_ft[0]" class="w-100  border-0"></div> </td>
                                </tr>
                                <tr>
                                    <td colspan="2"> <input type="text" name="form1[0].#subform[4].Table4[0].DebtItem26_rw[0].Debt_Item26_Desc_ft[0]" class="w-100  border-0"></td>
                                    <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem26_rw[0].Debt_Item26_Date_dt[0]" class="w-100  border-0"></div></td>
                                     <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem26_rw[0].Debt_Item26_Amount_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem26_rw[0].Debt_Item26_DivPet_ft[0]" class="w-100  border-0"></div></td>
                                     <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem26_rw[0].Debt_Item26_DivResp_ft[0]" class="w-100  border-0"></div> </td>
                                </tr>
                                <tr>
                                    <td colspan="2"> <input type="text" name="form1[0].#subform[4].Table4[0].DebtItem27_rw[0].Debt_Item27_Desc_ft[0]" class="w-100  border-0"></td>
                                    <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem27_rw[0].Debt_Item27_Date_dt[0]" class="w-100  border-0"></div></td>
                                     <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem27_rw[0].Debt_Item27_Amount_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem27_rw[0].Debt_Item27_DivPet_ft[0]" class="w-100  border-0"></div></td>
                                     <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem27_rw[0].Debt_Item27_DivResp_ft[0]" class="w-100  border-0"></div> </td>
                                </tr>
                                <tr>
                                    <td colspan="2"> <input type="text" name="form1[0].#subform[4].Table4[0].DebtItem28_rw[0].Debt_Item28_Desc_ft[0]" class="w-100  border-0"></td>
                                    <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem28_rw[0].Debt_Item28_Date_dt[0]" class="w-100  border-0"></div></td>
                                     <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem28_rw[0].Debt_Item28_Amount_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem28_rw[0].Debt_Item28_DivPet_ft[0]" class="w-100  border-0"></div></td>
                                     <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem28_rw[0].Debt_Item28_DivResp_ft[0]" class="w-100  border-0"></div> </td>
                                </tr>
                                <tr>
                                    <td colspan="2"> <input type="text" name="form1[0].#subform[4].Table4[0].DebtItem29_rw[0].Debt_Item29_Desc_ft[0]" class="w-100  border-0"></td>
                                    <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem29_rw[0].Debt_Item29_Date_dt[0]" class="w-100  border-0"></div></td>
                                     <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem29_rw[0].Debt_Item29_Amount_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem29_rw[0].Debt_Item29_DivPet_ft[0]" class="w-100  border-0"></div></td>
                                     <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem29_rw[0].Debt_Item29_DivResp_ft[0]" class="w-100  border-0"></div> </td>
                                </tr>
                                <tr>
                                    <td colspan="2"> <input type="text" name="form1[0].#subform[4].Table4[0].DebtItem30_rw[0].Debt_Item30_Desc_ft[0]" class="w-100  border-0"></td>
                                    <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem30_rw[0].Debt_Item30_Date_dt[0]" class="w-100  border-0"></div></td>
                                     <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem30_rw[0].Debt_Item30_Amount_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem30_rw[0].Debt_Item30_DivPet_ft[0]" class="w-100  border-0"></div></td>
                                     <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem30_rw[0].Debt_Item30_DivResp_ft[0]" class="w-100  border-0"></div> </td>
                                </tr>
                                <tr>
                                    <td colspan="2"> <input type="text" name="form1[0].#subform[4].Table4[0].DebtItem31_rw[0].Debt_Item31_Desc_ft[0]" class="w-100  border-0"></td>
                                    <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem31_rw[0].Debt_Item31_Date_dt[0]" class="w-100  border-0"></div></td>
                                     <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem31_rw[0].Debt_Item31_Amount_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem31_rw[0].Debt_Item31_DivPet_ft[0]" class="w-100  border-0"></div></td>
                                     <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem31_rw[0].Debt_Item31_DivResp_ft[0]" class="w-100  border-0"></div> </td>
                                </tr>
                                <tr>
                                   <td colspan="2"> <input type="text" name="form1[0].#subform[4].Table4[0].DebtItem32_rw[0].Debt_Item32_Desc_ft[0]" class="w-100  border-0"></td>
                                    <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem32_rw[0].Debt_Item32_Date_dt[0]" class="w-100  border-0"></div></td>
                                     <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem32_rw[0].Debt_Item32_Amount_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem32_rw[0].Debt_Item32_DivPet_ft[0]" class="w-100  border-0"></div></td>
                                     <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem32_rw[0].Debt_Item32_DivResp_ft[0]" class="w-100  border-0"></div> </td>
                                </tr>
                                <tr>
                                  <td colspan="2"> <input type="text" name="form1[0].#subform[4].Table4[0].DebtItem33_rw[0].Debt_Item33_Desc_ft[0]" class="w-100  border-0"></td>
                                    <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem33_rw[0].Debt_Item33_Date_dt[0]" class="w-100  border-0"></div></td>
                                     <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem33_rw[0].Debt_Item33_Amount_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem33_rw[0].Debt_Item33_DivPet_ft[0]" class="w-100  border-0"></div></td>
                                     <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem33_rw[0].Debt_Item33_DivResp_ft[0]" class="w-100  border-0"></div> </td>
                                </tr>
                                <tr>
                                    <td colspan="2"> <input type="text" name="form1[0].#subform[4].Table4[0].DebtItem34_rw[0].Debt_Item34_Desc_ft[0]" class="w-100  border-0"></td>
                                    <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem34_rw[0].Debt_Item34_Date_dt[0]" class="w-100  border-0"></div></td>
                                     <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem34_rw[0].Debt_Item34_Amount_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem34_rw[0].Debt_Item34_DivPet_ft[0]" class="w-100  border-0"></div></td>
                                     <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem34_rw[0].Debt_Item34_DivResp_ft[0]" class="w-100  border-0"></div> </td>
                                </tr>
                                <tr>
                                  <td colspan="2"> <input type="text" name="form1[0].#subform[4].Table4[0].DebtItem35_rw[0].Debt_Item35_Desc_ft[0]" class="w-100  border-0"></td>
                                    <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem35_rw[0].Debt_Item35_Date_dt[0]" class="w-100  border-0"></div></td>
                                     <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem35_rw[0].Debt_Item35_Amount_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem35_rw[0].Debt_Item35_DivPet_ft[0]" class="w-100  border-0"></div></td>
                                     <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem35_rw[0].Debt_Item35_DivResp_ft[0]" class="w-100  border-0"></div> </td>
                                </tr>
                                <tr>
                                    <td colspan="2"> <input type="text" name="form1[0].#subform[4].Table4[0].DebtItem36_rw[0].Debt_Item36_Desc_ft[0]" class="w-100  border-0"></td>
                                    <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem36_rw[0].Debt_Item36_Date_dt[0]" class="w-100  border-0"></div></td>
                                     <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem36_rw[0].Debt_Item36_Amount_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem36_rw[0].Debt_Item36_DivPet_ft[0]" class="w-100  border-0"></div></td>
                                     <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem36_rw[0].Debt_Item36_DivResp_ft[0]" class="w-100  border-0"></div> </td>
                                </tr>
                                <tr>
                                    <td colspan="2"> <input type="text" name="form1[0].#subform[4].Table4[0].DebtItem37_rw[0].Debt_Item37_Desc_ft[0]" class="w-100  border-0"></td>
                                    <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem37_rw[0].Debt_Item37_Date_dt[0]" class="w-100  border-0"></div></td>
                                     <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem37_rw[0].Debt_Item37_Amount_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem37_rw[0].Debt_Item37_DivPet_ft[0]" class="w-100  border-0"></div></td>
                                     <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem37_rw[0].Debt_Item37_DivResp_ft[0]" class="w-100  border-0"></div> </td>
                                </tr>
                                <tr>
                                    <td colspan="2"> <input type="text" name="form1[0].#subform[4].Table4[0].DebtItem38_rw[0].Debt_Item38_Desc_ft[0]" class="w-100  border-0"></td>
                                    <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem38_rw[0].Debt_Item38_Date_dt[0]" class="w-100  border-0"></div></td>
                                     <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem38_rw[0].Debt_Item38_Amount_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem38_rw[0].Debt_Item38_DivPet_ft[0]" class="w-100  border-0"></div></td>
                                     <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem38_rw[0].Debt_Item38_DivResp_ft[0]" class="w-100  border-0"></div> </td>
                                </tr>
                                <tr>
                                    <td colspan="2"> <input type="text" name="form1[0].#subform[4].Table4[0].DebtItem39_rw[0].Debt_Item39_Desc_ft[0]" class="w-100  border-0"></td>
                                    <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem39_rw[0].Debt_Item39_Date_dt[0]" class="w-100  border-0"></div></td>
                                     <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem39_rw[0].Debt_Item39_Amount_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem39_rw[0].Debt_Item39_DivPet_ft[0]" class="w-100  border-0"></div></td>
                                     <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem39_rw[0].Debt_Item39_DivResp_ft[0]" class="w-100  border-0"></div> </td>
                                </tr>
                                <tr>
                                    <td colspan="2"> <input type="text" name="form1[0].#subform[4].Table4[0].DebtItem40_rw[0].Debt_Item40_Desc_ft[0]" class="w-100  border-0"></td>
                                    <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem40_rw[0].Debt_Item40_Date_dt[0]" class="w-100  border-0"></div></td>
                                     <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem40_rw[0].Debt_Item40_Amount_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem40_rw[0].Debt_Item40_DivPet_ft[0]" class="w-100  border-0"></div></td>
                                     <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem40_rw[0].Debt_Item40_DivResp_ft[0]" class="w-100  border-0"></div> </td>
                                </tr>
                                <tr>
                                    <td colspan="2"> <input type="text" name="form1[0].#subform[4].Table4[0].DebtItem41_rw[0].Debt_Item41_Desc_ft[0]" class="w-100  border-0"></td>
                                    <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem41_rw[0].Debt_Item41_Date_dt[0]" class="w-100  border-0"></div></td>
                                     <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem41_rw[0].Debt_Item41_Amount_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem41_rw[0].Debt_Item41_DivPet_ft[0]" class="w-100  border-0"></div></td>
                                     <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem41_rw[0].Debt_Item41_DivResp_ft[0]" class="w-100  border-0"></div> </td>
                                </tr>
                                <tr>
                                    <td colspan="2"> <input type="text" name="form1[0].#subform[4].Table4[0].DebtItem42_rw[0].Debt_Item42_Desc_ft[0]" class="w-100  border-0"></td>
                                    <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem42_rw[0].Debt_Item42_Date_dt[0]" class="w-100  border-0"></div></td>
                                     <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem42_rw[0].Debt_Item42_Amount_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem42_rw[0].Debt_Item42_DivPet_ft[0]" class="w-100  border-0"></div></td>
                                     <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem42_rw[0].Debt_Item42_DivResp_ft[0]" class="w-100  border-0"></div> </td>
                                </tr>
                                <tr>
                                    <td colspan="2"> <input type="text" name="form1[0].#subform[4].Table4[0].DebtItem43_rw[0].Debt_Item43_Desc_ft[0]" class="w-100  border-0"></td>
                                    <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem43_rw[0].Debt_Item43_Date_dt[0]" class="w-100  border-0"></div></td>
                                     <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem43_rw[0].Debt_Item43_Amount_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem43_rw[0].Debt_Item43_DivPet_ft[0]" class="w-100  border-0"></div></td>
                                     <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem43_rw[0].Debt_Item43_DivResp_ft[0]" class="w-100  border-0"></div> </td>
                                </tr>
                                <tr>
                                    <td colspan="2"> <input type="text" name="form1[0].#subform[4].Table4[0].DebtItem44_rw[0].Debt_Item44_Desc_ft[0]" class="w-100  border-0"></td>
                                    <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem44_rw[0].Debt_Item44_Date_dt[0]" class="w-100  border-0"></div></td>
                                     <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem44_rw[0].Debt_Item44_Amount_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem44_rw[0].Debt_Item44_DivPet_ft[0]" class="w-100  border-0"></div></td>
                                     <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem44_rw[0].Debt_Item44_DivResp_ft[0]" class="w-100  border-0"></div> </td>
                                </tr>
                                <tr>
                                    <td colspan="2"> <input type="text" name="form1[0].#subform[4].Table4[0].DebtItem45_rw[0].Debt_Item45_Desc_ft[0]" class="w-100  border-0"></td>
                                    <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem45_rw[0].Debt_Item45_Date_dt[0]" class="w-100  border-0"></div></td>
                                     <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem45_rw[0].Debt_Item45_Amount_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem45_rw[0].Debt_Item45_DivPet_ft[0]" class="w-100  border-0"></div></td>
                                     <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem45_rw[0].Debt_Item45_DivResp_ft[0]" class="w-100  border-0"></div> </td>
                                </tr>
                                <tr>
                                    <td colspan="2"> <input type="text" name="form1[0].#subform[4].Table4[0].DebtItem46_rw[0].Debt_Item46_Desc_ft[0]" class="w-100  border-0"></td>
                                    <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem46_rw[0].Debt_Item46_Date_dt[0]" class="w-100  border-0"></div></td>
                                     <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem46_rw[0].Debt_Item46_Amount_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem46_rw[0].Debt_Item46_DivPet_ft[0]" class="w-100  border-0"></div></td>
                                     <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem46_rw[0].Debt_Item46_DivResp_ft[0]" class="w-100  border-0"></div> </td>
                                </tr>
                                <tr>
                                    <td colspan="2"> <input type="text" name="form1[0].#subform[4].Table4[0].DebtItem47_rw[0].Debt_Item47_Desc_ft[0]" class="w-100  border-0"></td>
                                    <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem47_rw[0].Debt_Item47_Date_dt[0]" class="w-100  border-0"></div></td>
                                     <td> <div class="d-flex">  <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem47_rw[0].Debt_Item47_Amount_dc[0]" class="w-100  border-0"></div></td>
                                    <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem47_rw[0].Debt_Item47_DivPet_ft[0]" class="w-100  border-0"></div></td>
                                     <td> <div class="d-flex"> <input type="number" name="form1[0].#subform[4].Table4[0].DebtItem47_rw[0].Debt_Item47_DivResp_ft[0]" class="w-100  border-0"></div> </td>
                                </tr>

                            </thead>
                        </table>
                    </div>
                    <div class="border-bottom border-dark pt-3"></div>
                    <div class="row pb-5">
                        <div class="col-md-4 lh-1 py-2">
                            <div class="fs-6">FL-161 [Rev. July 1, 2013]</div>
                        </div>
                        <div class="col-md-4 text-center">
                            <h4 class="mb-0 fw-bold">DECLARATION OF DISCLOSURE</h4>
                            <h4 class="mb-0 ">(Family Law)</h4>
                        </div>
                        <div class="col-md-4 text-end">
                            <h4 class="mb-0 fs-6">Page 2 of 2</h4>
                        </div>
                    </div>
                    <div class="row pb-4">
                        <div class="col-lg-4  mt-3 mt-lg-0 small_text text-danger fw-bold ">
                            <div style="background-color:#99CCFF"> For your protection and privacy, please press the
                                Clear
                                This Form button after you have printed the form. </div>
                        </div>
                        <div class="col-lg-4  mt-3 mt-lg-0 text-center mx-auto">
                            <button class="  btn-success" onclick="window.print()"
                                style="background-color: #91FF90">Print this form</button>
                            {{-- <button type="submit" class="  btn-warning" style="background-color: #FEFE98">Save this
                                form</button> --}}
                        </div>
                        <div class="col-lg-4 my-3 my-lg-0 text-center mx-auto">
                            <button type="reset" style="background-color: #F59292 ">Clear this form</button>
                        </div>
                    </div>


                    {{-- @include('layouts.pagination', ['page' => 10]) --}}

                </section>

            </div>
            <div class="position-absolute position-fixed top-0 py-3 backdrop_filter end-0 px-3">
                <div class="col">
                    <button type="submit" class="btn btn-success px-4">Save</button>
                </div>
                <div class="pt-3">
                    <button type="button" class="btn btn-dark px-4">Back</button>
                </div>
            </div>
        </form>
        <div class="position-absolute position-fixed bottom-0 py-2   backdrop_filter  px-3">
            <select name="" id="" class="sectionSelect form-select  mx-auto ">
                <option value="" disabled selected>Select a section</option>
                <option value="#first_section">First Section</option>
                <option value="#second_section">Second Section</option>
        </div>
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
