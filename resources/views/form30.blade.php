{{-- TX divorceset1forms.pdf --}}
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
        .border_3 {
            border-bottom: 3px solid black;
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
             border-bottom: 1px solid black !important;
            box-shadow: none !important;
        }

        textarea:focus {
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

        input:focus-visible {
            outline: none !important;
            border-bottom: 2px solid black !important;
        }

        textarea:focus-visible {
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
            <form action="{{ route('form30.submit') }}" method="post">
                @csrf
                <section class="section_area p-5" id="first_section">
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show">{{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                    @endif
                    <div class="text-center fw-bold text-danger py-2">60 Additional Text Fields - Please identify the section that you are adding to.</div>
                    <div>
                        <div>Section <input type="text" name="Section 1_9Q2c846z" ></div>
                         <div class="pt-1"><textarea rows="6" type="text" name="Text 1_jTmsiD2p" class="w-100 border-dark border-2" ></textarea></div>
                    </div>
                    <div>
                        <div>Section <input type="text" name="Section 2_1U4zEV31"></div>
                         <div class="pt-1"><textarea rows="6" type="text" name="Text 2_79XZ1P2a" class="w-100 border-dark border-2" ></textarea></div>
                    </div>
                    <div>
                        <div>Section <input type="text" name="Section 3_33PvB4ge"></div>
                         <div class="pt-1"><textarea rows="6" type="text" name="Text 3_eGT9ApGW" class="w-100 border-dark border-2" ></textarea></div>
                    </div>
                    <div>
                        <div>Section <input type="text" name="Section 4_L03hhPMT"></div>
                         <div class="pt-1"><textarea rows="6" type="text" name="Text 4_0kJk3Ge7" class="w-100 border-dark border-2" ></textarea></div>
                    </div>
                    <div>
                        <div>Section <input type="text" name="Section 5_9TJiG1v9"></div>
                         <div class="pt-1"><textarea rows="6" type="text" name="Text 5_B4gr6Twq" class="w-100 border-dark border-2" ></textarea></div>
                    </div>
                    <div>
                        <div>Section <input type="text" name="Section 6_5z0J0k8b"></div>
                         <div class="pt-1"><textarea rows="6" type="text" name="Text 6_NAoPZJr1" class="w-100 border-dark border-2" ></textarea></div>
                    </div>


                    @include('layouts.footer23', ['page' => 1])
                </section>

                <section class="section_area p-5" id="second_section">

                    <div class="text-center fw-bold text-danger py-2">60 Additional Text Fields - Please identify the section that you are adding to.</div>
                    <div>
                        <div>Section <input type="text" name="Section 7_jeWDLPpY"></div>
                         <div class="pt-1"><textarea rows="6" type="text" name="Text 7_69jXERh1" class="w-100 border-dark border-2" ></textarea></div>
                    </div>
                    <div>
                        <div>Section <input type="text" name="Section 8_2134HwzD"></div>
                         <div class="pt-1"><textarea rows="6" type="text" name="Text 8_o4u4hTZE" class="w-100 border-dark border-2" ></textarea></div>
                    </div>
                    <div>
                        <div>Section <input type="text" name="Section 9_fgk3CAW5"></div>
                         <div class="pt-1"><textarea rows="6" type="text" name="Text 9_yTMT12wq" class="w-100 border-dark border-2" ></textarea></div>
                    </div>
                    <div>
                        <div>Section <input type="text" name="Section 10_88eDV2mo"></div>
                         <div class="pt-1"><textarea rows="6" type="text" name="Text 10_4zPH8qAL" class="w-100 border-dark border-2" ></textarea></div>
                    </div>
                    <div>
                        <div>Section <input type="text" name="Section 11_kqHp0v37"></div>
                         <div class="pt-1"><textarea rows="6" type="text" name="Text 11_52iqqlns" class="w-100 border-dark border-2" ></textarea></div>
                    </div>
                    <div>
                        <div>Section <input type="text" name="Section 12_9noeGmLz"></div>
                         <div class="pt-1"><textarea rows="6" type="text" name="Text 12_mlTZleup" class="w-100 border-dark border-2" ></textarea></div>
                    </div>


                    @include('layouts.footer23', ['page' => 2])
                </section>

                <section class="section_area p-5" id="third_section">

                    <div class="text-center fw-bold text-danger py-2">60 Additional Text Fields - Please identify the section that you are adding to.</div>
                    <div>
                        <div>Section <input type="text" name="Section 13_LOflIB5p"></div>
                         <div class="pt-1"><textarea rows="6" type="text" name="Text 13_Z8I57MAW" class="w-100 border-dark border-2" ></textarea></div>
                    </div>
                    <div>
                        <div>Section <input type="text" name="Section 14_OA2J8502"></div>
                         <div class="pt-1"><textarea rows="6" type="text" name="Text 14_Estzq85h" class="w-100 border-dark border-2" ></textarea></div>
                    </div>
                    <div>
                        <div>Section <input type="text" name="Section 15_sSF6iLoR"></div>
                         <div class="pt-1"><textarea rows="6" type="text" name="Text 15_jmcW2JGz" class="w-100 border-dark border-2" ></textarea></div>
                    </div>
                    <div>
                        <div>Section <input type="text" name="Section 16_BAuJ92Mx"></div>
                         <div class="pt-1"><textarea rows="6" type="text" name="Text 16_qJZ1hL3C" class="w-100 border-dark border-2" ></textarea></div>
                    </div>
                    <div>
                        <div>Section <input type="text" name="Section 17_55X1aRq8"></div>
                         <div class="pt-1"><textarea rows="6" type="text" name="Text 17_oO0dlQy8" class="w-100 border-dark border-2" ></textarea></div>
                    </div>
                    <div>
                        <div>Section <input type="text" name="Section 18_1S9X17Yz"></div>
                         <div class="pt-1"><textarea rows="6" type="text" name="Text 18_Tz6JxoD9" class="w-100 border-dark border-2" ></textarea></div>
                    </div>


                    @include('layouts.footer23', ['page' => 3])
                </section>

                <section class="section_area p-5" id="fourth_section">

                    <div class="text-center fw-bold text-danger py-2">60 Additional Text Fields - Please identify the section that you are adding to.</div>
                    <div>
                        <div>Section <input type="text" name="Section 19_180dd3iP"></div>
                         <div class="pt-1"><textarea rows="6" type="text" name="Text 19_911QFIA4" class="w-100 border-dark border-2" ></textarea></div>
                    </div>
                    <div>
                        <div>Section <input type="text" name="Section 20_rO9xUQ6f"></div>
                         <div class="pt-1"><textarea rows="6" type="text" name="Text 20_u0qOja33" class="w-100 border-dark border-2" ></textarea></div>
                    </div>
                    <div>
                        <div>Section <input type="text" name="Section 21_Pl59u58m"></div>
                         <div class="pt-1"><textarea rows="6" type="text" name="Text 21_4aKQ5Qx9" class="w-100 border-dark border-2" ></textarea></div>
                    </div>
                    <div>
                        <div>Section <input type="text" name="Section 22_544vZwZv"></div>
                         <div class="pt-1"><textarea rows="6" type="text" name="Text 22_3UZ1v682" class="w-100 border-dark border-2" ></textarea></div>
                    </div>
                    <div>
                        <div>Section <input type="text" name="Section 23_77yUX43R"></div>
                         <div class="pt-1"><textarea rows="6" type="text" name="Text 23_H9jeu5LL" class="w-100 border-dark border-2" ></textarea></div>
                    </div>
                    <div>
                        <div>Section <input type="text" name="Section 24_5X32I03N"></div>
                         <div class="pt-1"><textarea rows="6" type="text" name="Text 24_eEV6vx7V" class="w-100 border-dark border-2" ></textarea></div>
                    </div>
                    @include('layouts.footer23', ['page' => 4])
                </section>

                <section class="section_area p-5" id="fifth_section">

                    <div class="text-center fw-bold text-danger py-2">60 Additional Text Fields - Please identify the section that you are adding to.</div>
                    <div>
                        <div>Section <input type="text" name="Section 25_Our85h2g"></div>
                         <div class="pt-1"><textarea rows="6" type="text" name="Text 25_qqmUkJ29" class="w-100    border-dark border-2" ></textarea></div>
                    </div>
                    <div>
                        <div>Section <input type="text" name="Section 26_L2FZ42ew"></div>
                         <div class="pt-1"><textarea rows="6" type="text" name="Text 26_kxQ1Ozoq" class="w-100    border-dark border-2" ></textarea></div>
                    </div>
                    <div>
                        <div>Section <input type="text" name="Section 27_68p6Ua76"></div>
                         <div class="pt-1"><textarea rows="6" type="text" name="Text 27_sbSpp83n" class="w-100    border-dark border-2" ></textarea></div>
                    </div>
                    <div>
                        <div>Section <input type="text" name="Section 28_S9DOoKWv"></div>
                         <div class="pt-1"><textarea rows="6" type="text" name="Text 28_O7o9F77X" class="w-100    border-dark border-2" ></textarea></div>
                    </div>
                    <div>
                        <div>Section <input type="text" name="Section 29_53pK0SMI"></div>
                         <div class="pt-1"><textarea rows="6" type="text" name="Text 29_6LeK29Na" class="w-100    border-dark border-2" ></textarea></div>
                    </div>
                    <div>
                        <div>Section <input type="text" name="Section 30_50XLs9N0"></div>
                         <div class="pt-1"><textarea rows="6" type="text" name="Text 30_EQk14pq3" class="w-100    border-dark border-2" ></textarea></div>
                    </div>
                    @include('layouts.footer23', ['page' => 5])
                </section>

                <section class="section_area p-5" id="sixth_section">

                    <div class="text-center fw-bold text-danger py-2">60 Additional Text Fields - Please identify the section that you are adding to.</div>
                    <div>
                        <div>Section <input type="text" name="Section 31_aT3X5UoO"></div>
                         <div class="pt-1"><textarea rows="6" type="text" name="Text 31_I3897c4T" class="w-100 border-dark border-2" ></textarea></div>
                    </div>
                    <div>
                        <div>Section <input type="text" name="Section 32_o25182Jj"></div>
                         <div class="pt-1"><textarea rows="6" type="text" name="Text 32_23Y1z1a3" class="w-100 border-dark border-2" ></textarea></div>
                    </div>
                    <div>
                        <div>Section <input type="text" name="Section 33_40bFd8Mj"></div>
                         <div class="pt-1"><textarea rows="6" type="text" name="Text 33_13w4vmAi" class="w-100 border-dark border-2" ></textarea></div>
                    </div>
                    <div>
                        <div>Section <input type="text" name="Section 34_o7PS3Jpf"></div>
                         <div class="pt-1"><textarea rows="6" type="text" name="Text 34_3DbQdiQl" class="w-100 border-dark border-2" ></textarea></div>
                    </div>
                    <div>
                        <div>Section <input type="text" name="Section 35_FffOoY8h"></div>
                         <div class="pt-1"><textarea rows="6" type="text" name="Text 35_VIxE4Mc5" class="w-100 border-dark border-2" ></textarea></div>
                    </div>
                    <div>
                        <div>Section <input type="text" name="Section 36_6hsv4055"></div>
                         <div class="pt-1"><textarea rows="6" type="text" name="Text 36_3QTy194S" class="w-100 border-dark border-2" ></textarea></div>
                    </div>
                    @include('layouts.footer23', ['page' => 6])
                </section>

                <section class="section_area p-5" id="seventh_section">

                    <div class="text-center fw-bold text-danger py-2">60 Additional Text Fields - Please identify the section that you are adding to.</div>
                    <div>
                        <div>Section <input type="text" name="Section 37_P8ezrU2o"></div>
                         <div class="pt-1"><textarea rows="6" type="text" name="Text 37_2jSJqqP5" class="w-100 border-dark border-2" ></textarea></div>
                    </div>
                    <div>
                        <div>Section <input type="text" name="Section 38_Ag3p9epV"></div>
                         <div class="pt-1"><textarea rows="6" type="text" name="Text 38_hIQzrSb8" class="w-100 border-dark border-2" ></textarea></div>
                    </div>
                    <div>
                        <div>Section <input type="text" name="Section 39_BH5zuj16"></div>
                         <div class="pt-1"><textarea rows="6" type="text" name="Text 39_Y25x3y1W" class="w-100 border-dark border-2" ></textarea></div>
                    </div>
                    <div>
                        <div>Section <input type="text" name="Section 40_o4ER0O0N"></div>
                         <div class="pt-1"><textarea rows="6" type="text" name="Text 40_8ETEtrIz" class="w-100 border-dark border-2" ></textarea></div>
                    </div>
                    <div>
                        <div>Section <input type="text" name="Section 41_0hTX96y9"></div>
                         <div class="pt-1"><textarea rows="6" type="text" name="Text 41_7n2s7qc2" class="w-100 border-dark border-2" ></textarea></div>
                    </div>
                    <div>
                        <div>Section <input type="text" name="Section 42_35JW22nu"></div>
                         <div class="pt-1"><textarea rows="6" type="text" name="Text 42_1J10S3vA" class="w-100 border-dark border-2" ></textarea></div>
                    </div>
                    @include('layouts.footer23', ['page' => 7])
                </section>

                <section class="section_area p-5" id="eighth_section">

                    <div class="text-center fw-bold text-danger py-2">60 Additional Text Fields - Please identify the section that you are adding to.</div>
                    <div>
                        <div>Section <input type="text" name="Section 43_H1AXdZ5X"></div>
                         <div class="pt-1"><textarea rows="6" type="text" name="Text 43_x66KS157" class="w-100 border-dark border-2" ></textarea></div>
                    </div>
                    <div>
                        <div>Section <input type="text" name="Section 44_Jsn1ZQG9"></div>
                         <div class="pt-1"><textarea rows="6" type="text" name="Text 44_JO5vD102" class="w-100 border-dark border-2" ></textarea></div>
                    </div>
                    <div>
                        <div>Section <input type="text" name="Section 45_FT6J77yP"></div>
                         <div class="pt-1"><textarea rows="6" type="text" name="Text 45_VKKHDuN5" class="w-100 border-dark border-2" ></textarea></div>
                    </div>
                    <div>
                        <div>Section <input type="text" name="Section 46_KUh3JrYk"></div>
                         <div class="pt-1"><textarea rows="6" type="text" name="Text 46_XoD90hOD" class="w-100 border-dark border-2" ></textarea></div>
                    </div>
                    <div>
                        <div>Section <input type="text" name="Section 47_14W7LyQR"></div>
                         <div class="pt-1"><textarea rows="6" type="text" name="Text 47_TC4kuEcQ" class="w-100 border-dark border-2" ></textarea></div>
                    </div>
                    <div>
                        <div>Section <input type="text" name="Section 48_OzNiSah5"></div>
                         <div class="pt-1"><textarea rows="6" type="text" name="Text 48_8u79x25N" class="w-100 border-dark border-2" ></textarea></div>
                    </div>
                    @include('layouts.footer23', ['page' => 8])
                </section>

                <section class="section_area p-5" id="ninth_section">

                    <div class="text-center fw-bold text-danger py-2">60 Additional Text Fields - Please identify the section that you are adding to.</div>
                    <div>
                        <div>Section <input type="text" name="Section 49_MCuwESJq"></div>
                         <div class="pt-1"><textarea rows="6" type="text" name="Text 49_4c0HuH4V" class="w-100 border-dark border-2" ></textarea></div>
                    </div>
                    <div>
                        <div>Section <input type="text" name="Section 50_99yu0LJp"></div>
                         <div class="pt-1"><textarea rows="6" type="text" name="Text 50_4RD0r0lC" class="w-100 border-dark border-2" ></textarea></div>
                    </div>
                    <div>
                        <div>Section <input type="text" name="Section 51_i557OxPa"></div>
                         <div class="pt-1"><textarea rows="6" type="text" name="Text 51_43Fj7h6t" class="w-100 border-dark border-2" ></textarea></div>
                    </div>
                    <div>
                        <div>Section <input type="text" name="Section 52_1jqib6gR"></div>
                         <div class="pt-1"><textarea rows="6" type="text" name="Text 52_V10OhHmS" class="w-100 border-dark border-2" ></textarea></div>
                    </div>
                    <div>
                        <div>Section <input type="text" name="Section 53_OK2wN587"></div>
                         <div class="pt-1"><textarea rows="6" type="text" name="Text 53_Ri6N55z8" class="w-100 border-dark border-2" ></textarea></div>
                    </div>
                    <div>
                        <div>Section <input type="text" name="Section 54_5XrBU4mB"></div>
                         <div class="pt-1"><textarea rows="6" type="text" name="Text 54_W8NXxcM3" class="w-100 border-dark border-2" ></textarea></div>
                    </div>
                    @include('layouts.footer23', ['page' => 9])
                </section>

                <section class="section_area p-5" id="tenth_section">

                    <div class="text-center fw-bold text-danger py-2">60 Additional Text Fields - Please identify the section that you are adding to.</div>
                    <div>
                        <div>Section <input type="text" name="Section 55_wAx4IqSZ"></div>
                         <div class="pt-1"><textarea rows="6" type="text" name="Text 55_0FllCTq6" class="w-100    border-dark border-2" ></textarea></div>
                    </div>
                    <div>
                        <div>Section <input type="text" name="Section 56_fwONI0P7"></div>
                         <div class="pt-1"><textarea rows="6" type="text" name="Text 56_s10otU18" class="w-100    border-dark border-2" ></textarea></div>
                    </div>
                    <div>
                        <div>Section <input type="text" name="Section 57_UK05m97W"></div>
                         <div class="pt-1"><textarea rows="6" type="text" name="Text 57_M203Ku0G" class="w-100    border-dark border-2" ></textarea></div>
                    </div>
                    <div>
                        <div>Section <input type="text" name="Section 58_mv6w12e4"></div>
                         <div class="pt-1"><textarea rows="6" type="text" name="Text 58_V3y4Ih0R" class="w-100    border-dark border-2" ></textarea></div>
                    </div>
                    <div>
                        <div>Section <input type="text" name="Section 59_l40pYS8c"></div>
                         <div class="pt-1"><textarea rows="6" type="text" name="Text 59_UQ85H1Au" class="w-100    border-dark border-2" ></textarea></div>
                    </div>
                    <div>
                        <div>Section <input type="text" name="Section 60_Lgb5Xe75"></div>
                         <div class="pt-1"><textarea rows="6" type="text" name="Text 60_PeW4ftLa" class="w-100    border-dark border-2" ></textarea></div>
                    </div>
                    @include('layouts.footer23', ['page' => 10])
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
            <option value="#tenth_section">Tenth Section</option>
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
