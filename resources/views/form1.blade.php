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
    <style>
        td {
            padding: 0px !important;
            padding-left: 5px !important;
            background-color: transparent important;
        }

        input:focus {
            border: none !important;
            border-bottom: 1px dotted black !important;
            box-shadow: none !important;
        }

        input,
        table {
            background-color: transparent !important;
        }

        .form-control:focus-visible {
            border-bottom: 1px dotted black !important;

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
            border-bottom: 1px dotted black !important;
        }

        .border_bottom {
            border-bottom: 2px solid black !important;

        }
        .table > :not(caption) > * > * {
            background-color : white;
        }
        .section_area {
            background-color: white !important;
            margin: 10px;
            padding-left: 300px !important;
            padding-right: 100px !important;
        }

        input:focus-visible {
            outline: none !important;
            border-bottom: 2px dotted black !important;
        }

        .children_table {
            min-width: 30rem !important;
        }

        .top_text {
            width: 50% !important;
            font-size: 21px;
        }
        @media screen and (min-width : 1600px) {

            .top_select_box{
                width: 75% !important;
                        }

                        .case_input_top {
                            min-width: 490px !important;
                        }
        }

        @media screen and (min-width : 700px) {

            .top_select_box{
                width: 58.33% ;
                        }

                        .case_input_top {
                            min-width: 275px ;
                        }
        }


        @media screen and (max-width : 768px) {
            .top_select_box{
                width: 58.33333% ;
                        }
            .case_input_top {
                            min-width: 275px !important;
                        }
            .top_text_width{
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
    </style>
</head>

<body>
    <div class="container-fluid  bg_color py-1 py-lg-3">

        <form action="{{ route('form.store') }}" class="" method="post">
            @csrf

            <section class="section_area page1 pt-5 pe-2 pe-lg-5 p-lg-0 ps-2 pt-lg-5 pt-4">
                <div class="form-area   pt-5 ">
                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif
                    <div class="border border-dark fw-bolder p-1  top_text">This form contains Restricted Information.
                    </div>

                    <div class="row mt-3">
                        <div class="col-lg-1 col-sm-1 ps-4 col-3  mb-sm-0 "> <img src="{{ asset('logo.png') }}" alt="" class="w-100"> </div>
                        <div class="col-lg-11">
                            <div class="row">
                                <div class="col-md-3   fw-bolder  h5  top_text_width px-lg-0 " style="max-width: 180px; "> CIRCUIT COURT FOR </div>
                                <div class="col-md-7 px-lg-0 top_select_box" >

                                    <select id="county" name="county" class="form-select form-control border-0 border-bottom">
                                        <option selected=""> </option>
                                        <option value="CIRCUIT COURT LOCATIONS">CIRCUIT COURT LOCATIONS</option>
                                        <option value="Allegany Country (CC)">Allegany Country (CC)</option>
                                        <option value="Anne Arundel  Country (CC)">Anne Arundel Country (CC)</option>
                                        <option value="Baltimore City (CC)">Baltimore City (CC)</option>
                                        <option value="Baltimore County (CC)">Baltimore County (CC)</option>
                                        <option value="Calvert County (CC)">Calvert County (CC)</option>
                                        <option value="Caroline County (CC)">Caroline County (CC)</option>
                                        <option value="Carroll County (CC)">Carroll County (CC)</option>
                                        <option value="Cecil County (CC)">Cecil County (CC)</option>
                                        <option value="Charles County (CC)">Charles County (CC)</option>
                                        <option value="Dorchester County (CC)">Dorchester County (CC)</option>
                                        <option value="Frederick County (CC)">Frederick County (CC)</option>
                                        <option value="Garrett County (CC)">Garrett County (CC)</option>
                                        <option value="Harford County (CC)">Harford County (CC)</option>
                                        <option value="Howard County (CC)">Howard County (CC)</option>
                                        <option value="Kent County (CC)">Kent County (CC)</option>
                                        <option value="Montgomery County (CC)">Montgomery County (CC)</option>
                                        <option value="Prince George's County (CC)">Prince George's County (CC)</option>
                                        <option value="Queen Anne's County (CC)">Queen Anne's County (CC)</option>
                                        <option value="Somerset County (CC)">Somerset County (CC)</option>
                                        <option value="St. Mary's County (CC)">St. Mary's County (CC)</option>
                                        <option value="Talbot County (CC)">Talbot County (CC)</option>
                                        <option value="Washington County (CC)">Washington County (CC)</option>
                                        <option value="Wicomico County (CC)">Wicomico County (CC)</option>
                                        <option value="Worcester County (CC)">Worcester County (CC)</option>
                                    </select>
                                    <div class="text-center"> City/County </div>
                                </div>
                                <h5 class="col-md-1  d-flex gap-1 px-lg-0"> <span class="fw-bold fs-3">, </span><span class="fs-4">MARYLAND</span>
                                </h5>
                            </div>

                            <div class="row">

                                <div class="col-md-1 col-lg-2 px-lg-0" style="max-width: 77px;">Located at</div>
                                <div class="col-md-6 px-lg-0">
                                    <input type="text" name="court_address" class="form-control border-none border-0 border-bottom border-dotted shadow-none">
                                    <div class="text-center"> Court Address </div>
                                </div>
                                <div class="col-md-2 px-lg-0" style="max-width: 89px;">
                                    <div>Case Number</div>
                                </div>
                                <div class="col-md-3">
                                    <input type="number" name="case_no" class="case_input_top form-control border-none border-0 border-bottom border-dotted shadow-none" style="min-width: 195px;">
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- <div class=" w-100 mt-2">
                        <div class="row">
                            <div class="col-lg-1 col-sm-1 ps-4 col-3 pb-3 mb-sm-0 "> <img src="{{ asset('logo.png') }}"
                                    alt="" class="w-100"> </div>
                             <div class="col-lg-2 fw-bolder p-lg-0 h5 col-sm-5 " style="max-width:200px;"> CIRCUIT COURT FOR </div>
                            <div class="col-lg-5 col-xl-7 col-sm-5 p-lg-0">
                                <select id="county" name="county" class="form-select form-control border-0 border-bottom">
                                    <option selected> </option>
                                    <option value="CIRCUIT COURT LOCATIONS">CIRCUIT COURT LOCATIONS</option>
                                    <option value="Allegany Country (CC)">Allegany Country (CC)</option>
                                    <option value="Anne Arundel  Country (CC)">Anne Arundel Country (CC)</option>
                                    <option value="Baltimore City (CC)">Baltimore City (CC)</option>
                                    <option value="Baltimore County (CC)">Baltimore County (CC)</option>
                                    <option value="Calvert County (CC)">Calvert County (CC)</option>
                                    <option value="Caroline County (CC)">Caroline County (CC)</option>
                                    <option value="Carroll County (CC)">Carroll County (CC)</option>
                                    <option value="Cecil County (CC)">Cecil County (CC)</option>
                                    <option value="Charles County (CC)">Charles County (CC)</option>
                                    <option value="Dorchester County (CC)">Dorchester County (CC)</option>
                                    <option value="Frederick County (CC)">Frederick County (CC)</option>
                                    <option value="Garrett County (CC)">Garrett County (CC)</option>
                                    <option value="Harford County (CC)">Harford County (CC)</option>
                                    <option value="Howard County (CC)">Howard County (CC)</option>
                                    <option value="Kent County (CC)">Kent County (CC)</option>
                                    <option value="Montgomery County (CC)">Montgomery County (CC)</option>
                                    <option value="Prince George's County (CC)">Prince George's County (CC)</option>
                                    <option value="Queen Anne's County (CC)">Queen Anne's County (CC)</option>
                                    <option value="Somerset County (CC)">Somerset County (CC)</option>
                                    <option value="St. Mary's County (CC)">St. Mary's County (CC)</option>
                                    <option value="Talbot County (CC)">Talbot County (CC)</option>
                                    <option value="Washington County (CC)">Washington County (CC)</option>
                                    <option value="Wicomico County (CC)">Wicomico County (CC)</option>
                                    <option value="Worcester County (CC)">Worcester County (CC)</option>
                                </select>
                                <div class="text-center"> City/County </div>
                            </div>
                            <h5 class="col-lg-1 col-sm-2 d-flex gap-1"> <span class="fw-bold fs-3">, </span><span class="fs-4">MARYLAND</span>  </h5>


                        </div>
                    </div>
                    <div class=" w-100">
                        <div class="row">
                             <div class="col-lg-1 col-sm-3 text-center p-lg-0" style="max-width:105px;"> Located at</div>
                            <div class="col-lg-5 col-sm-9"  style="max-width: 900px;">
                                <input type="text" name="court_address" class="form-control border-none border-0 border-bottom border-dotted shadow-none">
                                <div class="text-center"> Court Address </div>
                            </div>
                            <div class="col-lg-1 col-sm-4">
                                <div  style="max-width:119px;">Case Number</div></div>
                            <div class="col-lg-5 col-sm-8 p-lg-0" >
                                <input type="number" name="case_no" class="form-control border-none border-0 border-bottom border-dotted shadow-none">
                            </div>
                        </div>
                    </div> --}}
                    <div class="w-100 ">
                        <div class="row">
                            <div class="col-lg-5 col-sm-5">
                                <div class="col-lg-12  ">
                                    <input type="number" name="plaintiff" class="form-control  border-none  border-0 border-bottom border-dotted shadow-none">
                                    <div class="">Plaintiff</div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-2">
                                <div class="col-lg-1  mx-auto text-center d-none d-sm-block"> VS. </div>
                            </div>
                            <div class="col-lg-5 col-sm-5">
                                <div class="col-lg-12 ">
                                    <input type="text" name="defendant" class="form-control  border-none  border-0 border-bottom border-dotted shadow-none">
                                    <div class="">Defendant</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-100 ">
                        <div class="row">
                            <div class="col-lg-5  col-sm-6">
                                <div class="col-lg-12  ">
                                    <input type="text" name="plaintiff_street_address" class="form-control  border-none  border-0 border-bottom border-dotted shadow-none">
                                    <div class=""> Street Address</div>
                                </div>
                            </div>
                            <div class="col-lg-2  d-none d-lg-block">
                                <div class="col-lg-1  mx-auto text-center"> </div>
                            </div>
                            <div class="col-lg-5  col-sm-6">
                                <div class="col-lg-12 ">
                                    <input type="text" name="defendant_street_address" class="form-control  border-none  border-0 border-bottom border-dotted shadow-none">
                                    <div class=""> Street Address</div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" w-100 ">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="row">
                                    <div class="col-lg-8 col-sm-6 ">
                                        <input type="text" name="plaintiff_csz" class="form-control  border-none  border-0 border-bottom border-dotted shadow-none">
                                        <div>City, State, Zip</div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6">
                                        <input type="number" name="plaintiff_tel" class="form-control  border-none  border-0 border-bottom border-dotted shadow-none">
                                        <div>Telephone</div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2"> </div>
                            <div class="col-lg-5">
                                <div class="row">
                                    <div class="col-lg-8 col-sm-6">
                                        <input type="text" name="defendant_csz" class="form-control  border-none  border-0 border-bottom border-dotted shadow-none">
                                        <div>City, State, Zip</div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6">
                                        <input type="number" name="defendant_tel" class="form-control  border-none  border-0 border-bottom border-dotted shadow-none">
                                        <div>Telephone</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" w-100 ">
                        <div class="row">
                            <div class="col-lg-5 col-sm-6">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <input type="email" name="plaintiff_email" class="form-control  border-none  border-0 border-bottom border-dotted shadow-none">
                                        <div>E-mail</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-2 d-none  d-lg-block"> </div>
                            <div class="col-lg-5 col-sm-6">
                                <div class="col-sm-12">
                                    <input type="email" name="defendant_email" class="form-control  border-none  border-0 border-bottom border-dotted shadow-none">
                                    <div>E-mail</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" w-100 ">
                        <div class="row">
                            <div class="col-lg-7 col-sm-12">
                                <div class="text-end fw-bold">FINANCIAL STATEMENT OF</div>
                            </div>
                            <div class="col-lg-5 col-sm-12">
                                <input type="text" name="statement_name" class=" w-100 form-control border-none border-0 border-bottom shadow-none">
                                <div class="text-center">Name</div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <h4 class="text-center fw-bold m-0">(General)</h4>
                        <h4 class="text-center fw-bold">(Md Rule 9-203(a))</h4>
                        <h5>MDEC counties only: You must file a Notice Regarding Restricted Information Pursuant to Rule
                            20-201.1 (form MDJ-008) with this submission.</h5>
                        <div class="table-responsive">
                            <table class="table-bordered mt-3 border-black table m-0">
                                <thead class="text-center bg-primary">
                                    <tr>
                                        <th colspan="8" class="bg-secondary children_table">Children</th>
                                        <th class="bg-secondary">Age</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td colspan="8"><input type="text" name="child1"
                                                class="form-control border-0"></td>
                                        <td><input type="number" name="age1" class="form-control border-0"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="8"><input type="text" name="child2" class="form-control border-0"></td>
                                        <td><input type="number" name="age2" class="form-control border-0"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="8"><input type="text" name="child3" class="form-control border-0"></td>
                                        <td><input type="number" name="age3" class="form-control border-0"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="8"><input type="text" name="child4" class="form-control border-0"></td>
                                        <td><input type="number" name="age4" class="form-control border-0"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="8"><input type="text" name="child5" class="form-control border-0"></td>
                                        <td><input type="number" name="age5" class="form-control border-0"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row  ">
                        <h4 class="text-center m-0"> <span class="border_bottom"> MONTHLY EXPENSES</span></h4>
                        <div class="table-responsive">
                            <table class="table-bordered mt-1 border-black table  ">
                                <thead class="text-center">
                                    <tr>
                                        <th class="fw-bold">ITEM</th>
                                        <th class="fw-bold">SELF</th>
                                        <th class="fw-bold">CHILDREN</th>
                                        <th class="fw-bold">TOTAL</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td colspan="5" class="py-3 bg-secondary"></td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold" colspan="12">A. PRIMARY RESIDENCE</td>
                                    </tr>
                                    <tr>
                                        <td class="w-50">Mortgage</td>
                                        <td><input type="number" name="p_mortgage_self" class="form-control border-0"></td>
                                        <td><input type="number" name="p_mortgage_child" class="form-control border-0"></td>
                                        <td><input type="number" name="p_mortgage_total" class="form-control border-0" value='0'></td>
                                    </tr>
                                    <tr>
                                        <td class="w-50">Insurance (homeowners)</td>
                                        <td><input type="number" name="p_insurance_self" class="form-control border-0"></td>
                                        <td><input type="number" name="p_insurance_child" class="form-control border-0"></td>
                                        <td><input type="number" name="p_insurance_total" class="form-control border-0" value='0'></td>
                                    </tr>
                                    <tr>
                                        <td class="w-50">Rent/Ground Rent</td>
                                        <td><input type="number" name="p_rent_self" class="form-control border-0"></td>
                                        <td><input type="number" name="p_rent_child" class="form-control border-0"></td>
                                        <td><input type="number" name="p_rent_total" class="form-control border-0" value='0'></td>
                                    </tr>
                                    <tr>
                                        <td class="w-50">Taxes</td>
                                        <td><input type="number" name="p_taxes_self" class="form-control border-0"></td>
                                        <td><input type="number" name="p_taxes_child" class="form-control border-0"></td>
                                        <td><input type="number" name="p_taxes_total" class="form-control border-0" value='0'></td>
                                    </tr>
                                    <tr>
                                        <td class="w-50">Gas & Electric</td>
                                        <td><input type="number" name="p_gas_self" class="form-control border-0"></td>
                                        <td><input type="number" name="p_gas_child" class="form-control border-0"></td>
                                        <td><input type="number" name="p_gas_total" class="form-control border-0" value='0'></td>
                                    </tr>
                                    <tr>
                                        <td class="w-50">Electric Only</td>
                                        <td><input type="number" name="p_electric_self" class="form-control border-0"></td>
                                        <td><input type="number" name="p_electric_child" class="form-control border-0"></td>
                                        <td><input type="number" name="p_electric_total" class="form-control border-0" value='0'></td>
                                    </tr>
                                    <tr>
                                        <td class="w-50">Heat (oil)</td>
                                        <td><input type="number" name="p_heat_self" class="form-control border-0">
                                        </td>
                                        <td><input type="number" name="p_heat_child" class="form-control border-0">
                                        </td>
                                        <td><input type="number" name="p_heat_total" class="form-control border-0" value='0'></td>
                                    </tr>
                                    <tr>
                                        <td class="w-50">Telephone</td>
                                        <td><input type="number" name="p_tel_self" class="form-control border-0">
                                        </td>
                                        <td><input type="number" name="p_tel_child" class="form-control border-0">
                                        </td>
                                        <td><input type="number" name="p_tel_total" class="form-control border-0" value='0'></td>
                                    </tr>
                                    <tr>
                                        <td class="w-50">Trash Removal</td>
                                        <td><input type="number" name="p_trash_self" class="form-control border-0">
                                        </td>
                                        <td><input type="number" name="p_trash_child" class="form-control border-0">
                                        </td>
                                        <td><input type="number" name="p_trash_total" class="form-control border-0" value='0'></td>
                                    </tr>
                                    <tr>
                                        <td class="w-50">Water Bill</td>
                                        <td><input type="number" name="p_water_self" class="form-control border-0">
                                        </td>
                                        <td><input type="number" name="p_water_child" class="form-control border-0">
                                        </td>
                                        <td><input type="number" name="p_water_total" class="form-control border-0" value='0'></td>
                                    </tr>
                                    <tr>
                                        <td class="w-50">Cell Phone/Pager</td>
                                        <td><input type="number" name="p_pager_self" class="form-control border-0">
                                        </td>
                                        <td><input type="number" name="p_pager_child" class="form-control border-0">
                                        </td>
                                        <td><input type="number" name="p_pager_total" class="form-control border-0" value='0'></td>
                                    </tr>
                                    <tr>
                                        <td class="w-50">Repairs</td>
                                        <td><input type="number" name="p_repairs_self" class="form-control border-0"></td>
                                        <td><input type="number" name="p_repairs_child" class="form-control border-0"></td>
                                        <td><input type="number" name="p_repairs_total" class="form-control border-0" value='0'></td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                        @include('layouts.footer', ['page' => 1])
                    </div>
                </div>
            </section>

            <section class="section_area page2 mt-2 mt-lg-4  pe-2 pe-lg-5 p-lg-0 ps-2 pt-lg-5 pt-4">
                <div class="row   ">
                    <div class="col-md-12 d-flex justify-content-end gap-3">
                        <div>Case Number</div>
                        <input type="number"
                            class="border-0 bg-transparent border border-dashed border-bottom outline-none">
                    </div>
                    <div class="table-responsive">

                        <table class="table-bordered mt-3 border-black table ">
                            <tr>
                                <td>Lawn & Yard Care (snow removal)</td>
                                <td><input type="number" name="p_lawn_self"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="p_lawn_child"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="p_lawn_total"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                            </tr>
                            <tr>
                                <td class="w-50">Replacement Furnishings/Appliances</td>
                                <td><input type="number" name="p_furnishings_self"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="p_furnishings_child"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="p_furnishings_total"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                            </tr>
                            <tr>
                                <td class="w-50">Condominium Fee (not included elsewhere)</td>
                                <td><input type="number" name="p_condominium_self"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="p_condominium_child"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="p_condominium_total"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                            </tr>
                            <tr>
                                <td class="w-50">Painting/Wallpapering</td>
                                <td><input type="number" name="p_painting_self"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="p_painting_child"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="p_painting_total"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                            </tr>
                            <tr>
                                <td class="w-50">Carpet Cleaning</td>
                                <td><input type="number" name="p_carpt_self"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="p_carpt_child"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="p_carpt_total"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                            </tr>
                            <tr>
                                <td class="w-50">Domestic Assistance/Housekeeper</td>
                                <td><input type="number" name="p_assistance_self"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="p_assistance_child"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="p_assistance_total"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                            </tr>
                            <tr>
                                <td class="w-50">Pool</td>
                                <td><input type="number" name="p_pool_self"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="p_pool_child"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="p_pool_total"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                            </tr>
                            <tr class="w-50">
                                <td>Other: <span class="border-bottom "><input type="text" name="p_others"
                                            class="border-0 bg-transparent w-50">
                                    </span>
                                </td>
                                <td><input type="number" name="p_other_self"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="p_other_child"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="p_other_total"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                            </tr>
                            <tr>
                                <td class="">
                                    <h5 class="pt-3">SUB TOTAL</h5>
                                </td>
                                <td><input type="number" name="p_subtotal_self"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                                <td><input type="number" name="p_subtotal_child"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                                <td><input type="number" name="p_subtotal_total"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="5" class="py-3 bg-secondary"></td>
                            </tr>
                            <tr>
                                <td colspan="5">
                                    <div class="">B. SECONDARY RESIDENCE</div>
                                    <div>(i.e. Summer Home/Rental)</div>
                                </td>
                            </tr>
                            <tr>
                                <td>Mortgage</td>
                                <td><input type="number" name="s_mortgage_self"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="s_mortgage_child"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="s_mortgage_total"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                            </tr>
                            <tr>
                                <td>Insurance (homeowners)</td>
                                <td><input type="number" name="s_insurance_self"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="s_insurance_child"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="s_insurance_total"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                            </tr>
                            <tr>
                                <td>Rent/Ground Rent</td>
                                <td><input type="number" name="s_rent_self"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="s_rent_child"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="s_rent_total"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                            </tr>
                            <tr>
                                <td>Taxes</td>
                                <td><input type="number" name="s_taxes_self"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="s_taxes_child"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="s_taxes_total"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                            </tr>
                            <tr>
                                <td>Gas & Electric</td>
                                <td><input type="number" name="s_gas_self"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="s_gas_child"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="s_gas_total"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                            </tr>
                            <tr>
                                <td>Electric Only</td>
                                <td><input type="number" name="s_electric_self"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="s_electric_child"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="s_electric_total"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                            </tr>
                            <tr>
                                <td>Heat (oil)</td>
                                <td><input type="number" name="s_heat_self"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="s_heat_child"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="s_heat_total"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                            </tr>
                            <tr>
                                <td>Telephone</td>
                                <td><input type="number" name="s_tel_self"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="s_tel_child"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="s_tel_total"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                            </tr>
                            <tr>
                                <td>Trash Removal</td>
                                <td><input type="number" name="s_trash_self"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="s_trash_child"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="s_trash_total"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                            </tr>
                            <tr>
                                <td>Water Bill</td>
                                <td><input type="number" name="s_water_self"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="s_water_child"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="s_water_total"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                            </tr>
                            <tr>
                                <td>Cell Phone/Pager</td>
                                <td><input type="number" name="s_pager_self"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="s_pager_child"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="s_pager_total"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                            </tr>
                            <tr>
                                <td>Repairs</td>
                                <td><input type="number" name="s_repairs_self"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="s_repairs_child"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="s_repairs_total"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                            </tr>
                            <tr>
                                <td>Lawn & Yard Care (snow removal)</td>
                                <td><input type="number" name="s_lawn_self"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="s_lawn_child"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="s_lawn_total"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                            </tr>
                            <tr>
                                <td>Replacement Furnishings/Appliances</td>
                                <td><input type="number" name="s_furnishings_self"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="s_furnishings_child"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="s_furnishings_total"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                            </tr>
                            <tr>
                                <td>Condominium Fee (not included elsewhere)</td>
                                <td><input type="number" name="s_condominium_self"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="s_condominium_child"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="s_condominium_total"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                            </tr>
                            <tr>
                                <td>Painting/Wallpapering</td>
                                <td><input type="number" name="s_painting_self"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="s_painting_child"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="s_painting_total"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                            </tr>
                            <tr>
                                <td>Carpet Cleaning</td>
                                <td><input type="number" name="s_carpt_self"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="s_carpt_child"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="s_carpt_total"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                            </tr>
                            <tr>
                                <td>Domestic Assistance/Housekeeper</td>
                                <td><input type="number" name="s_assistance_self"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="s_assistance_child"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="s_assistance_total"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                            </tr>
                            <tr>
                                <td>Pool</td>
                                <td><input type="number" name="s_pool_self"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="s_pool_child"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="s_pool_total"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                            </tr>
                            <tr>
                                <td>Other: <span class="  border-dashed border-bottom outline-none"><input type="text" name="s_others"
                                        class="  w-50 border-0 bg-transparent"></span>
                                </td>
                                <td><input type="number" name="s_other_self"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="s_other_child"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="s_other_total"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5 class="pt-3">SUB TOTAL</h5>
                                </td>
                                <td><input type="number" name="s_subtotal_self"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                                <td><input type="number" name="s_subtotal_child"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                                <td><input type="number" name="s_subtotal_total"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="5" class="py-3 bg-secondary"></td>
                            </tr>
                            <tr>
                                <td colspan="5">
                                    <div>C. OTHER HOUSEHOLD NECESSITIES</div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div>Food</div>
                                </td>
                                <td><input type="number" name="c_food_self"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="c_food_child"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="c_food_total"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                            </tr>

                        </table>
                        @include('layouts.footer', ['page' => 2])
                    </div>
                </div>
            </section>


            <section class="section_area page3 mt-2 mt-lg-4  pe-2 pe-lg-5 p-lg-0 ps-2 pt-lg-5 pt-4">
                <div class="row  ">
                    <div class="col-md-12 d-flex justify-content-end gap-3">
                        <div>Case Number</div>
                        <input type="number" name="case_no"
                            class="border-0 bg-transparent border border-dashed border-bottom outline-none">
                    </div>
                    <div class="table-responsive">

                        <table class="table-bordered mt-3 border-black table ">
                            <tr>
                                <td>Drug Store Items</td>
                                <td><input type="number" name="c_dsi_self"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="c_dsi_child"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="c_dsi_total"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                            </tr>
                            <tr>
                                <td class="w-50">Household Supplies</td>
                                <td><input type="number" name="c_hs_self"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="c_hs_child"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="c_hs_total"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                            </tr>
                            <tr>
                                <td class="w-50">Other: <span class="  border-dashed border-bottom outline-none"><input type="text" name="c_others"
                                        class="border-0 bg-transparent w-50"></span>
                                </td>

                                <td><input type="number" name="c_other_self"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="c_other_child"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="c_other_total"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                            </tr>


                            <tr>
                                <td class="">
                                    <div>SUB TOTAL</div>
                                </td>
                                <td><input type="number" name="c_subtotal_self"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                                <td><input type="number" name="c_subtotal_child"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                                <td><input type="number" name="c_subtotal_total"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="5" class="py-3 bg-secondary"></td>
                            </tr>
                            <tr>
                                <td colspan="5">
                                    <div class="">D. MEDICAL/DENTAL</div>
                                    <div>(i.e. Summer Home/Rental)</div>
                                </td>
                            </tr>
                            <tr>
                                <td>Health Insurance</td>
                                <td><input type="number" name="d_hi_self"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="d_hi_child"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="d_hi_total"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                            </tr>
                            <tr>
                                <td>Therapist/Counselor</td>
                                <td><input type="number" name="d_tc_self"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="d_tc_child"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="d_tc_total"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                            </tr>
                            <tr>
                                <td>Extraordinary Medical</td>
                                <td><input type="number" name="d_em_self"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="d_em_child"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="d_em_total"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                            </tr>
                            <tr>
                                <td>Dental/Orthodontia</td>
                                <td><input type="number" name="d_do_self"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="d_do_child"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="d_do_total"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                            </tr>
                            <tr>
                                <td>Ophthalmologist/Glasses</td>
                                <td><input type="number" name="d_og_self"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="d_og_child"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="d_og_total"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                            </tr>

                            <tr>
                                <td>Other: <span class="  border-dashed border-bottom outline-none"><input type="text" name="d_others"
                                        class="  w-50 border-0 bg-transparent"></span>
                                </td>
                                <td><input type="number" name="d_other_self"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="d_other_child"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="d_other_total"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div>SUB TOTAL</div>
                                </td>
                                <td><input type="number" name="d_subtotal_self"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                                <td><input type="number" name="d_subtotal_child"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                                <td><input type="number" name="d_subtotal_total"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="5" class="py-3 bg-secondary"></td>
                            </tr>
                            <tr>
                                <td colspan="5">
                                    <div>E. SCHOOL EXPENSES</div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div>Tuition/Books</div>
                                </td>
                                <td><input type="number" name="e_tb_self"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="e_tb_child"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="e_tb_total"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div>School lunch</div>
                                </td>
                                <td><input type="number" name="e_sl_self"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="e_sl_child"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="e_sl_total"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div>Extracurricular activities</div>
                                </td>
                                <td><input type="number" name="e_ea_self"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="e_ea_child"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="e_ea_total"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div>Clothing/Uniforms</div>
                                </td>
                                <td><input type="number" name="e_cu_self"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="e_cu_child"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="e_cu_total"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div>Room & Board</div>
                                </td>
                                <td><input type="number" name="e_rb_self"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="e_rb_child"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="e_rb_total"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div>Daycare/Nursery School</div>
                                </td>
                                <td><input type="number" name="e_dn_self"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="e_dn_child"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="e_dn_total"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                            </tr>
                            <tr class="w-50">
                                <td>Other: <span class="  border-dashed border-bottom outline-none"><input type="text" name="e_others"
                                        class="border-0 bg-transparent w-50"></span>
                                </td>
                                <td><input type="number" name="e_other_self"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="e_other_child"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="e_other_total"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                            </tr>
                            <tr>
                                <td class="">
                                    <div>SUB TOTAL</div>
                                </td>
                                <td><input type="number" name="e_subtotal_self"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                                <td><input type="number" name="e_subtotal_child"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                                <td><input type="number" name="e_subtotal_total"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="5" class="py-3 bg-secondary"></td>
                            </tr>
                            <tr>
                                <td colspan="5">
                                    <div>F. RECREATION & ENTERTAINMENT</div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div>Vacations</div>
                                </td>
                                <td><input type="number" name="f_vac_self"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="f_vac_child"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="f_vac_total"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div>Videos/Theater</div>
                                </td>
                                <td><input type="number" name="f_vt_self"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="f_vt_child"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="f_vt_total"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div>Dining Out</div>
                                </td>
                                <td><input type="number" name="f_do_self"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="f_do_child"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="f_do_total"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div>Cable TV/Internet</div>
                                </td>
                                <td><input type="number" name="f_ci_self"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="f_ci_child"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="f_ci_total"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div>Allowance</div>
                                </td>
                                <td><input type="number" name="f_allow_self"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="f_allow_child"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="f_allow_total"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div>Camp</div>
                                </td>
                                <td><input type="number" name="f_camp_self"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="f_camp_child"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="f_camp_total"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div>Memberships</div>
                                </td>
                                <td><input type="number" name="f_ms_self"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="f_ms_child"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="f_ms_total"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div>Dance/Music Lessons etc.</div>
                                </td>
                                <td><input type="number" name="f_dm_self"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="f_dm_child"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="f_dm_total"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div>Horseback Riding</div>
                                </td>
                                <td><input type="number" name="f_hr_self"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="f_hr_child"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="f_hr_total"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                            </tr>

                            <tr class="w-50">
                                <td>Other: <span class="  border-dashed border-bottom outline-none"><input type="text" name="f_others"
                                        class="border-0 bg-transparent w-50"></span>
                                </td>
                                <td><input type="number" name="f_other_self"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="f_other_child"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="f_other_total"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                            </tr>
                            <tr>
                                <td class="">
                                    <div>SUB TOTAL</div>
                                </td>
                                <td><input type="number" name="f_subtotal_self"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                                <td><input type="number" name="f_subtotal_child"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                                <td><input type="number" name="f_subtotal_total"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="5" class="py-3 bg-secondary"></td>
                            </tr>
                        </table>
                        @include('layouts.footer', ['page' => 3])
                    </div>
                </div>
            </section>






            <section class="section_area page4  mt-2 mt-lg-4 pe-2 pe-lg-5 p-lg-0 ps-2 pt-lg-5 pt-lg-5 pt-4">
                <div class="row  ">
                    <div class="col-md-12 d-flex justify-content-end gap-3">
                        <div>Case Number</div>
                        <input type="number" name="case_no"
                            class="border-0 bg-transparent border border-dashed border-bottom outline-none">
                    </div>
                    <div class="table-responsive">

                        <table class="table-bordered mt-3 border-black table ">
                            <tr>
                                <td colspan="5">
                                    <div>G. TRANSPORTATION EXPENSE</div>
                                </td>
                            </tr>
                            <tr>
                                <td class="w-50">Automobile Payment</td>
                                <td><input type="number" name="g_ap_self"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="g_ap_child"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="g_ap_total"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                            </tr>
                            <tr>
                                <td class="w-50">Automobile Repairs</td>
                                <td><input type="number" name="g_ar_self"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="g_ar_child"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="g_ar_total"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                            </tr>
                            <tr>
                                <td class="w-50">Maintenance/Tags/Tires/etc.</td>
                                <td><input type="number" name="g_mtt_self"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="g_mtt_child"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="g_mtt_total"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                            </tr>
                            <tr>
                                <td class="w-50">Oil/Gas</td>
                                <td><input type="number" name="g_og_self"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="g_og_child"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="g_og_total"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                            </tr>
                            <tr>
                                <td class="w-50">Automobile Insurance</td>
                                <td><input type="number" name="g_ai_self"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="g_ai_child"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="g_ai_total"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                            </tr>
                            <tr>
                                <td class="w-50">Parking Fees</td>
                                <td><input type="number" name="g_pf_self"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="g_pf_child"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="g_pf_total"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                            </tr>
                            <tr>
                                <td class="w-50">Bus/Taxi</td>
                                <td><input type="number" name="g_bt_self"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="g_bt_child"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="g_bt_total"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                            </tr>
                            <tr>
                                <td class="w-50">Other: <span class="border-dashed border-bottom outline-none"><input type="text" name="g_others"
                                        class="border-0 bg-transparent w-50"><span class="  border-dashed border-bottom outline-none">
                                </td>

                                <td><input type="number" name="g_other_self"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="g_other_child"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="g_other_total"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                            </tr>


                            <tr>
                                <td class="">
                                    <div>SUB TOTAL</div>
                                </td>
                                <td><input type="number" name="g_subtotal_self"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                                <td><input type="number" name="g_subtotal_child"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                                <td><input type="number" name="g_subtotal_total"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="5" class="py-3 bg-secondary"></td>
                            </tr>
                            <tr>
                                <td colspan="5">
                                    <div class="">H. GIFTS</div>
                                </td>
                            </tr>
                            <tr>
                                <td>Holiday Gifts</td>
                                <td><input type="number" name="h_hg_self"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="h_hg_child"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="h_hg_total"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                            </tr>
                            <tr>
                                <td>Birthdays</td>
                                <td><input type="number" name="h_bdy_self"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="h_bdy_child"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="h_bdy_total"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                            </tr>
                            <tr>
                                <td>Gifts to Others</td>
                                <td><input type="number" name="h_gto_self"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="h_gto_child"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="h_gto_total"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                            </tr>
                            <tr>
                                <td>Charities</td>
                                <td><input type="number" name="h_char_self"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="h_char_child"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="h_char_total"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                            </tr>


                            <tr>
                                <td>Other: <span class="  border-dashed border-bottom outline-none"><input type="text" name="h_others"
                                        class="  w-50 border-0 bg-transparent"></span>
                                </td>
                                <td><input type="number" name="h_other_self"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="h_other_child"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="h_other_total"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div>SUB TOTAL</div>
                                </td>
                                <td><input type="number" name="h_subtotal_self"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                                <td><input type="number" name="h_subtotal_child"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                                <td><input type="number" name="h_subtotal_total"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="5" class="py-3 bg-secondary"></td>
                            </tr>
                            <tr>
                                <td colspan="5">
                                    <div>I. CLOTHING</div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div>Purchasing</div>
                                </td>
                                <td><input type="number" name="i_pur_self"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="i_pur_child"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="i_pur_total"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div>Laundry</div>
                                </td>
                                <td><input type="number" name="i_lau_self"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="i_lau_child"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="i_lau_total"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div>Extracurricular activities</div>
                                </td>
                                <td><input type="number" name="i_ea_self"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="i_ea_child"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="i_ea_total"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div>Alterations/Dry Cleaning</div>
                                </td>
                                <td><input type="number" name="i_ad_self"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="i_ad_child"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="i_ad_total"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                            </tr>

                            <tr class="w-50">
                                <td>Other: <span class="  border-dashed border-bottom outline-none"><input type="text" name="i_others" class="w-50 border-0 bg-transparent"></span>
                                </td>
                                <td><input type="number" name="i_other_self"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="i_other_child"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="i_other_total"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                            </tr>
                            <tr>
                                <td class="">
                                    <div>SUB TOTAL</div>
                                </td>
                                <td><input type="number" name="i_subtotal_self"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                                <td><input type="number" name="i_subtotal_child"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                                <td><input type="number" name="i_subtotal_total"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="5" class="py-3 bg-secondary"></td>
                            </tr>
                            <tr>
                                <td colspan="5">
                                    <div>J. INCIDENTALS</div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div>Books & Magazines</div>
                                </td>
                                <td><input type="number" name="j_bn_self"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="j_bn_child"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="j_bn_total"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div>Newspapers</div>
                                </td>
                                <td><input type="number" name="j_np_self"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="j_np_child"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="j_np_total"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div>Stamps/Stationery</div>
                                </td>
                                <td><input type="number" name="j_ss_self"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="j_ss_child"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="j_ss_total"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div>Banking Expense</div>
                                </td>
                                <td><input type="number" name="j_be_self"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="j_be_child"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="j_be_total"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                            </tr>

                            <tr class="w-50">
                                <td>Other:<span class="  border-dashed border-bottom outline-none"> <input type="text" name="j_others"
                                        class="border-0 bg-transparent w-50"></span>
                                </td>
                                <td><input type="number" name="j_other_self"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="j_other_child"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="j_other_total"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                            </tr>
                            <tr>
                                <td class="">
                                    <div>SUB TOTAL</div>
                                </td>
                                <td><input type="number" name="j_subtotal_self"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                                <td><input type="number" name="j_subtotal_child"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                                <td><input type="number" name="j_subtotal_total"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="5" class="py-3 bg-secondary"></td>
                            </tr>
                        </table>
                        @include('layouts.footer', ['page' => 4])
                    </div>
                </div>
            </section>


            <section class="section_area page5 mt-2 mt-lg-4 pe-2 pe-lg-5 p-lg-0 ps-2 pt-lg-5 pt-lg-5 pt-4">
                <div class="row  ">
                    <div class="col-md-12 d-flex justify-content-end gap-3">
                        <div>Case Number</div>
                        <input type="number" name="case_no"
                            class="border-0 bg-transparent border border-dashed border-bottom outline-none">
                    </div>
                    <div class="table-responsive">

                        <table class="table-bordered mt-3 border-black table ">
                            <tr>
                                <td colspan="5">
                                    <div>K. MISCELLANEOUS/OTHER</div>
                                </td>
                            </tr>
                            <tr>
                                <td class="w-50">Alimony/Child Support (from a previous Order)</td>
                                <td><input type="number" name="k_ac_self"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="k_ac_child"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="k_ac_total"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                            </tr>
                            <tr>
                                <td class="w-50">Religious Contributions</td>
                                <td><input type="number" name="k_rc_self"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="k_rc_child"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="k_rc_total"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                            </tr>
                            <tr>
                                <td class="w-50">Hairdresser/Haircuts</td>
                                <td><input type="number" name="k_hh_self"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="k_hh_child"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="k_hh_total"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                            </tr>
                            <tr>
                                <td class="w-50">Manicure/Pedicure</td>
                                <td><input type="number" name="k_mp_self"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="k_mp_child"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="k_mp_total"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                            </tr>
                            <tr>
                                <td class="w-50">Pets/Boarding</td>
                                <td><input type="number" name="k_pb_self"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="k_pb_child"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="k_pb_total"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                            </tr>
                            <tr>
                                <td class="w-50">Life Insurance</td>
                                <td><input type="number" name="k_li_self"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="k_li_child"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="k_li_total"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                            </tr>

                            <tr>
                                <td class="w-50">Other: <span class="  border-dashed border-bottom outline-none"><input type="text" name="k_others"
                                        class="border-0 bg-transparent w-50">
                                        </span>
                                </td>

                                <td><input type="number" name="k_other_self"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="k_other_child"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td><input type="number" name="k_other_total"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                            </tr>


                            <tr>
                                <td class="">
                                    <div>SUB TOTAL</div>
                                </td>
                                <td><input type="number" name="k_subtotal_self"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                                <td><input type="number" name="k_subtotal_child"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                                <td><input type="number" name="k_subtotal_total"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                            </tr>

                            <tr>
                                <td colspan="5" class="py-3 bg-secondary"></td>
                            </tr>
                            <tr>
                                <td class="">
                                    <div>TOTAL MONTHLY EXPENSES:</div>
                                </td>
                                <td><input type="number" name="tme_self"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                                <td><input type="number" name="tme_child"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                                <td><input type="number" name="tme_total"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                            </tr>
                        </table>
                        <div>Number of dependent children, including children who have not attained the age of 19 years,
                            are
                            not
                            married or self-supporting, and are enrolled in secondary school: <input type="number"
                                name="ss"
                                class="border-0 bg-transparent border border-dashed border-bottom outline-none"></div>
                        <h4 class="text-center fw-bold pt-3"><span class="border_bottom">INCOME STATEMENT</span>
                        </h4>

                        <table class="table-bordered mt-3 border-black table ">
                            <tr>
                                <td colspan="2">
                                    <div class="">GROSS MONTHLY WAGES:</div>
                                </td>
                                <td class="bg-secondary">
                                </td>
                                <td><input type="number" name="gmw"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2"> Deductions:
                                </td>
                                <td class="bg-secondary">
                                </td>
                                <td class="bg-secondary"> </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <div class="">Federal</div>
                                </td>
                                <td><input type="number" name="federal"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td rowspan="6" class="bg-secondary">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <div class="">State</div>
                                </td>
                                <td><input type="number" name="state"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <div class="">Medicare</div>
                                </td>
                                <td><input type="number" name="medicare"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <div class="">F.I.C.A.</div>
                                </td>
                                <td><input type="number" name="fica"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>

                            </tr>
                            <tr>
                                <td colspan="2">
                                    <div class="">Retirement</div>
                                </td>
                                <td><input type="number" name="retirement"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>

                            </tr>
                            <tr>
                                <td colspan="2">
                                    <div class="">Total Deductions:</div>
                                </td>
                                <td><input type="number" name="niw"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <div class="">NET INCOME FROM WAGES:</div>
                                </td>
                                <td class="bg-secondary">
                                </td>
                                <td><input type="number" name=""
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <div class="">OTHER GROSS INCOME:
                                        (alimony, part-time job, rentals etc.)</div>
                                </td>
                                <td class="bg-secondary">
                                </td>
                                <td><input type="text" name="ogi"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <div class="">Deductions:</div>
                                </td>
                                <td colspan="2" class="bg-secondary"> </td>

                            </tr>
                            <tr>
                                <td class="" style="width:1px;">
                                    <div class=" px-2">a.</div>
                                </td>
                                <td> <input type="number" name="da1"
                                        class="border-0 bg-transparent border outline-none form-control"></td>

                                <td class="py-0">
                                    <input type="number" name="da2"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                <td class="py-0 bg-secondary" rowspan="4">
                                </td>
                            </tr>
                            <tr>
                                <td class="" style="width:1px;">
                                    <div class=" px-2">b.</div>
                                </td>
                                <td> <input type="number" name="db1"
                                        class="border-0 bg-transparent border outline-none form-control"></td>

                                <td class="py-0"><input type="number" name="db2"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>

                            </tr>
                            <tr>
                                <td class="" style="width:1px;">
                                    <div class="px-2">c.</div>
                                </td>
                                <td> <input type="number" name="dc1"
                                        class="border-0 bg-transparent border outline-none form-control"></td>

                                <td class="py-0"><input type="number" name="dc2"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                            </tr>




                            <tr class="w-50">
                                <td colspan="2">Total deductions from Other income:
                                </td>

                                <td><input type="number" name="tdoi"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>

                            </tr>
                            <tr>
                                <td colspan="2" class="">
                                    <div>NET OTHER INCOME</div>
                                </td>

                                <td class="bg-secondary">
                                </td>
                                <td><input type="number" name="noi"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" class="">
                                    <div>TOTAL MONTHLY INCOME</div>
                                </td>

                                <td class="bg-secondary">
                                </td>
                                <td><input type="number" name="tmi"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                            </tr>

                        </table>
                        @include('layouts.footer', ['page' => 5])
                    </div>
                </div>
            </section>


            <section class="section_area page6 mt-2 mt-lg-4 pe-2 pe-lg-5 p-lg-0 ps-2 pt-lg-5 pt-4">
                <div class="row  ">
                    <div class="col-md-12 d-flex justify-content-end gap-3">
                        <div class=>Case Number</div>
                        <input type="number"
                            class="border-0 bg-transparent border border-dashed border-bottom outline-none">
                    </div>
                    <div class="table-responsive">
                        <h4 class="text-center fw-bold pt-3"><span class="border_bottom">ASSETS & LIABILITIES</span>
                        </h4>
                        <table class="table-bordered mt-3 border-black table ">
                            <tr>
                                <td colspan="2">
                                    <div class="">ASSETS:</div>
                                </td>
                                <td colspan="2" class="bg-secondary"></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <div class="">Real Estate:</div>
                                </td>
                                <td><input type="number" name="as_real_estate"
                                        class="border-0 bg-transparent border outline-none form-control"></td>
                                <td rowspan="10" class="bg-secondary w-25"></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <div class="">Furniture (in the marital house)</div>
                                </td>
                                <td><input type="number" name="as_furt"
                                        class="border-0 bg-transparent border outline-none form-control"></td>

                            </tr>
                            <tr>
                                <td colspan="2">
                                    <div class="">Bank Accounts/Savings</div>
                                </td>
                                <td><input type="number" name="as_bs"
                                        class="border-0 bg-transparent border outline-none form-control"></td>
                                </tr>
                            <tr>
                                <td colspan="2">
                                    <div class="">U.S. Bonds</div>
                                </td>
                                <td><input type="number" name="as_usb"
                                        class="border-0 bg-transparent border outline-none form-control"></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <div class="">Stocks/Investments</div>
                                </td>
                                <td><input type="number" name="as_si"
                                        class="border-0 bg-transparent border outline-none form-control"></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <div class="">Personal Property</div>
                                </td>
                                <td><input type="number" name="as_pp"
                                        class="border-0 bg-transparent border outline-none form-control"></td>
                            </tr>

                            <tr>
                                <td colspan="2">
                                    <div class="">Jewelry</div>
                                </td>
                                <td><input type="number" name="as_jew"
                                        class="border-0 bg-transparent border outline-none form-control"></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <div class="">Automobiles</div>
                                </td>
                                <td><input type="number" name="as_am"
                                        class="border-0 bg-transparent border outline-none form-control"></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <div class="">Boats</div>
                                </td>
                                <td><input type="number" name="as_boats"
                                        class="border-0 bg-transparent border outline-none form-control"></td>
                            </tr>
                            <tr class="w-50">
                                <td colspan="2">Other: <span class="  border-dashed border-bottom outline-none"><input type="text" name="as_others"
                                        class="border-0 bg-transparent w-50">
                                    </span>
                                </td>

                                <td><input type="number" name="as_other"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" class="">
                                    <div>TOTAL ASSETS:</div>
                                </td>

                                <td><input type="number" name="as_te"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                                <td class="bg-secondary"></td>
                            </tr>
                            {{-- <tr>
                            <td>
                                <div class=""></div>
                             </td>
                             <td></td>
                             <td></td>
                        </tr> --}}


                            <tr>
                                <td colspan="5" class="py-3 bg-secondary"></td>
                            </tr>

                            <tr>
                                <td colspan="2">
                                    <div class="">LIABILITIES:</div>
                                </td>
                                <td colspan="2" class=" bg-secondary" ></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <div class="">Mortgage</div>
                                </td>
                                <td><input type="number" name="mortgage"
                                        class="border-0 bg-transparent border outline-none form-control"></td>
                                <td rowspan="10" class=" bg-secondary" > </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <div class="">Automobiles</div>
                                </td>
                                <td><input type="number" name="lb_am"
                                        class="border-0 bg-transparent border outline-none form-control"></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <div class="">Notes payable to relatives</div>
                                </td>
                                <td><input type="number" name="lb_np"
                                        class="border-0 bg-transparent border outline-none form-control"></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <div class="">Bank Loans</div>
                                </td>
                                <td><input type="number" name="lb_bl"
                                        class="border-0 bg-transparent border outline-none form-control"></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <div class="">Accrued Taxes</div>
                                </td>
                                <td><input type="number" name="lb_at"
                                        class="border-0 bg-transparent border outline-none form-control"></td>
                            </tr>

                            <tr>
                                <td colspan="2">
                                    <div class="">Balance of Credit Card Accounts</div>
                                </td>
                                <td><input type="number" name="lb_bcca"
                                        class="border-0 bg-transparent border outline-none form-control"></td>
                            </tr>

                            <tr>
                                <td class="" style="width:1px;">
                                    <div class=" px-2">a.</div>
                                </td>
                                <td> <input type="number" name="da1"
                                        class="border-0 bg-transparent border outline-none form-control"></td>

                                <td class="py-0">
                                    <input type="number" name="da2"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                                {{-- <td class="py-0 bg-secondary" rowspan="4">
                                </td> --}}
                            </tr>
                            <tr>
                                <td class="" style="width:1px;">
                                    <div class=" px-2">b.</div>
                                </td>
                                <td> <input type="number" name="db1"
                                        class="border-0 bg-transparent border outline-none form-control"></td>

                                <td class="py-0"><input type="number" name="db2"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>

                            </tr>
                            <tr>
                                <td class="" style="width:1px;">
                                    <div class=" px-2">c.</div>
                                </td>
                                <td> <input type="number" name="dc1"
                                        class="border-0 bg-transparent border outline-none form-control"></td>

                                <td class="py-0"><input type="number" name="dc2"
                                        class="border-0 bg-transparent border outline-none form-control">
                                </td>
                            </tr>
                            <tr class="w-50">
                                <td colspan="2">Other: <span class="border-bottom">
                                        <input type="text" name="lb_others"
                                            class="w-50 border-0 bg-transparent"></span>
                                </td>

                                <td><input type="text" name="lb_other"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" class="">
                                    <div>TOTAL LIABILITIES</div>
                                </td>

                                <td class="bg-secondary"></td>
                                <td><input type="number" name="lb_te"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" class="">
                                    <div>TOTAL NET WORTH:</div>
                                </td>
                                <td class="bg-secondary"></td>
                                <td><input type="number" name="lb_tnw"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" class="">
                                    <div>SUMMARY:</div>
                                </td>
                                <td class="bg-secondary">
                                </td>
                                <td class="bg-secondary">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" class="">
                                    <div>TOTAL INCOME:</div>
                                </td>
                                <td class="bg-secondary"></td>

                                <td><input type="number" name="lb_ti"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" class="">
                                    <div>TOTAL EXPENSES:</div>
                                </td>
                                <td class="bg-secondary"></td>

                                <td><input type="number" name="lb_ti"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" class="">
                                    <div>EXCESS OR DEFICIT:</div>
                                </td>

                                <td class="bg-secondary"></td>
                                <td><input type="number" name="eod"
                                        class="border-0 bg-transparent border outline-none form-control"
                                        value="0">
                                </td>
                            </tr>
                            </tr>

                        </table>
                        @include('layouts.footer', ['page' => 6])
                    </div>
                </div>
            </section>






            {{-- <section class="section_area mt-2 mt-lg-4 page7 pe-2 pe-lg-4   p-lg-0 ps-2 pt-lg-5 pt-4"> --}}
            <section class="section_area page6 mt-2 mt-lg-4 pe-2 pe-lg-5 p-lg-0 ps-2 pt-lg-5 pt-4">
                <div class="form-area    pt-3 ">
                    <div class="mx-auto h4 fw-bold  ">I solemnly affirm under the penalties of perjury that the
                        contents of this document, Monthly Expense List,
                        Income Statement, and Assets and Liabilities Statement are true to the best of my knowledge,
                        information,
                        and belief.</div>
                    @csrf

                    <div class="w-100 mt-3">
                        <div class="row">
                            <div class="col-lg-6 col-sm-6">
                                <div class="col-lg-12  ">
                                    <input type="text" name="date"
                                        class="form-control  border-none  border-0 border-bottom border-dotted shadow-none">
                                    <div class="text-center">Date</div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-sm-6">
                                <div class="col-lg-12 ">
                                    <input type="text" name="sign"
                                        class="form-control  border-none  border-0 border-bottom border-dotted shadow-none">
                                    <div class="text-center">Signature</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="w-100 mt-3">
                        <div class="row">
                            <div class="col-lg-6 col-sm-6">

                            </div>

                            <div class="col-lg-6 col-sm-6">
                                <div class="col-lg-12 ">
                                    <input type="text" name="pr_name"
                                        class="form-control  border-none  border-0 border-bottom border-dotted shadow-none">
                                    <div class="text-center">Printed Name</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-100 mt-3">
                        <div class="row">
                            <div class="col-lg-6 col-sm-6">

                            </div>

                            <div class="col-lg-6 col-sm-6">
                                <div class="col-lg-12 ">
                                    <input type="text" name="address"
                                        class="form-control  border-none  border-0 border-bottom border-dotted shadow-none">
                                    <div class="text-center">Address</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-100 mt-3">
                        <div class="row">
                            <div class="col-lg-6 col-sm-6">

                            </div>

                            <div class="col-lg-6 col-sm-6">
                                <div class="col-lg-12 ">
                                    <input type="text" name="csz"
                                        class="form-control  border-none  border-0 border-bottom border-dotted shadow-none">
                                    <div class="text-center">City, State, Zip</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-100 mt-3">
                        <div class="row">
                            <div class="col-lg-6 col-sm-6">

                            </div>

                            <div class="col-lg-6 col-sm-6">
                                <div class="col-lg-12 ">
                                    <input type="text" name="phn"
                                        class="form-control  border-none  border-0 border-bottom border-dotted shadow-none">
                                    <div class="text-center">Telephone Number</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-100 mt-3">
                        <div class="row">
                            <div class="col-lg-6 col-sm-6">

                            </div>

                            <div class="col-lg-6 col-sm-6">
                                <div class="col-lg-12 ">
                                    <input type="email" name="email"
                                        class="form-control  border-none  border-0 border-bottom border-dotted shadow-none">
                                    <div class="text-center">E-mail</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-100 mt-3">
                        <div class="row">
                            <div class="col-lg-6 col-sm-6">

                            </div>

                            <div class="col-lg-6 col-sm-6">
                                <div class="col-lg-12 ">
                                    <input type="text" name="fax"
                                        class="form-control  border-none  border-0 border-bottom border-dotted shadow-none">
                                    <div class="text-center">Fax</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mx-auto h5 fw-bold  mb-5">
                        <div class="mb-5">
                            NOTE: If you are not filing this statement with a pleading or your response to the other
                            party’s
                            claim, mail (postage prepaid) or hand deliver this statement to the other party and file a
                            Certificate of Service (CC-DR-058) with the court.
                        </div>
                    </div>
                    @include('layouts.footer', ['page' => 7])
                </div>
        </form>

        </section>
    </div>
</body>

</html>
