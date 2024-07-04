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
                        <div>Section <input type="text" name="section_1" ></div>
                         <div class="pt-1"><textarea rows="6" type="text" name="text_1" class="w-100    border-dark border-2" ></textarea></div>
                    </div>
                    <div>
                        <div>Section <input type="text" name="section_2"></div>
                         <div class="pt-1"><textarea rows="6" type="text" name="text_2" class="w-100    border-dark border-2" ></textarea></div>
                    </div>
                    <div>
                        <div>Section <input type="text" name="section_3"></div>
                         <div class="pt-1"><textarea rows="6" type="text" name="text_3" class="w-100    border-dark border-2" ></textarea></div>
                    </div>
                    <div>
                        <div>Section <input type="text" name="section_4"></div>
                         <div class="pt-1"><textarea rows="6" type="text" name="text_4" class="w-100    border-dark border-2" ></textarea></div>
                    </div>
                    <div>
                        <div>Section <input type="text" name="section_5"></div>
                         <div class="pt-1"><textarea rows="6" type="text" name="text_5" class="w-100    border-dark border-2" ></textarea></div>
                    </div>
                    <div>
                        <div>Section <input type="text" name="section_6"></div>
                         <div class="pt-1"><textarea rows="6" type="text" name="text_6" class="w-100    border-dark border-2" ></textarea></div>
                    </div>


                    @include('layouts.footer23', ['page' => 1])
                </section>

                <section class="section_area p-5" id="second_section">

                    <div class="text-center fw-bold text-danger py-2">60 Additional Text Fields - Please identify the section that you are adding to.</div>
                    <div>
                        <div>Section <input type="text" name="section_7"></div>
                         <div class="pt-1"><textarea rows="6" type="text" name="text_7" class="w-100    border-dark border-2" ></textarea></div>
                    </div>
                    <div>
                        <div>Section <input type="text" name="section_8"></div>
                         <div class="pt-1"><textarea rows="6" type="text" name="text_8" class="w-100    border-dark border-2" ></textarea></div>
                    </div>
                    <div>
                        <div>Section <input type="text" name="section_9"></div>
                         <div class="pt-1"><textarea rows="6" type="text" name="text_9" class="w-100    border-dark border-2" ></textarea></div>
                    </div>
                    <div>
                        <div>Section <input type="text" name="section_10"></div>
                         <div class="pt-1"><textarea rows="6" type="text" name="text_10" class="w-100    border-dark border-2" ></textarea></div>
                    </div>
                    <div>
                        <div>Section <input type="text" name="section_11"></div>
                         <div class="pt-1"><textarea rows="6" type="text" name="text_11" class="w-100    border-dark border-2" ></textarea></div>
                    </div>
                    <div>
                        <div>Section <input type="text" name="section_12"></div>
                         <div class="pt-1"><textarea rows="6" type="text" name="text_12" class="w-100    border-dark border-2" ></textarea></div>
                    </div>


                    @include('layouts.footer23', ['page' => 2])
                </section>

                <section class="section_area p-5" id="third_section">

                    <div class="text-center fw-bold text-danger py-2">60 Additional Text Fields - Please identify the section that you are adding to.</div>
                    <div>
                        <div>Section <input type="text" name="section_13"></div>
                         <div class="pt-1"><textarea rows="6" type="text" name="text_13" class="w-100    border-dark border-2" ></textarea></div>
                    </div>
                    <div>
                        <div>Section <input type="text" name="section_14"></div>
                         <div class="pt-1"><textarea rows="6" type="text" name="text_14" class="w-100    border-dark border-2" ></textarea></div>
                    </div>
                    <div>
                        <div>Section <input type="text" name="section_15"></div>
                         <div class="pt-1"><textarea rows="6" type="text" name="text_15" class="w-100    border-dark border-2" ></textarea></div>
                    </div>
                    <div>
                        <div>Section <input type="text" name="section_16"></div>
                         <div class="pt-1"><textarea rows="6" type="text" name="text_16" class="w-100    border-dark border-2" ></textarea></div>
                    </div>
                    <div>
                        <div>Section <input type="text" name="section_17"></div>
                         <div class="pt-1"><textarea rows="6" type="text" name="text_17" class="w-100    border-dark border-2" ></textarea></div>
                    </div>
                    <div>
                        <div>Section <input type="text" name="section_18"></div>
                         <div class="pt-1"><textarea rows="6" type="text" name="text_18" class="w-100    border-dark border-2" ></textarea></div>
                    </div>


                    @include('layouts.footer23', ['page' => 3])
                </section>

                <section class="section_area p-5" id="fourth_section">

                    <div class="text-center fw-bold text-danger py-2">60 Additional Text Fields - Please identify the section that you are adding to.</div>
                    <div>
                        <div>Section <input type="text" name="section_19"></div>
                         <div class="pt-1"><textarea rows="6" type="text" name="text_19" class="w-100    border-dark border-2" ></textarea></div>
                    </div>
                    <div>
                        <div>Section <input type="text" name="section_20"></div>
                         <div class="pt-1"><textarea rows="6" type="text" name="text_20" class="w-100    border-dark border-2" ></textarea></div>
                    </div>
                    <div>
                        <div>Section <input type="text" name="section_21"></div>
                         <div class="pt-1"><textarea rows="6" type="text" name="text_21" class="w-100    border-dark border-2" ></textarea></div>
                    </div>
                    <div>
                        <div>Section <input type="text" name="section_22"></div>
                         <div class="pt-1"><textarea rows="6" type="text" name="text_22" class="w-100    border-dark border-2" ></textarea></div>
                    </div>
                    <div>
                        <div>Section <input type="text" name="section_23"></div>
                         <div class="pt-1"><textarea rows="6" type="text" name="text_23" class="w-100    border-dark border-2" ></textarea></div>
                    </div>
                    <div>
                        <div>Section <input type="text" name="section_24"></div>
                         <div class="pt-1"><textarea rows="6" type="text" name="text_24" class="w-100    border-dark border-2" ></textarea></div>
                    </div>
                    @include('layouts.footer23', ['page' => 4])
                </section>

                <section class="section_area p-5" id="fifth_section">

                    <div class="text-center fw-bold text-danger py-2">60 Additional Text Fields - Please identify the section that you are adding to.</div>
                    <div>
                        <div>Section <input type="text" name="section_25"></div>
                         <div class="pt-1"><textarea rows="6" type="text" name="text_25" class="w-100    border-dark border-2" ></textarea></div>
                    </div>
                    <div>
                        <div>Section <input type="text" name="section_26"></div>
                         <div class="pt-1"><textarea rows="6" type="text" name="text_26" class="w-100    border-dark border-2" ></textarea></div>
                    </div>
                    <div>
                        <div>Section <input type="text" name="section_27"></div>
                         <div class="pt-1"><textarea rows="6" type="text" name="text_27" class="w-100    border-dark border-2" ></textarea></div>
                    </div>
                    <div>
                        <div>Section <input type="text" name="section_28"></div>
                         <div class="pt-1"><textarea rows="6" type="text" name="text_28" class="w-100    border-dark border-2" ></textarea></div>
                    </div>
                    <div>
                        <div>Section <input type="text" name="section_29"></div>
                         <div class="pt-1"><textarea rows="6" type="text" name="text_29" class="w-100    border-dark border-2" ></textarea></div>
                    </div>
                    <div>
                        <div>Section <input type="text" name="section_30"></div>
                         <div class="pt-1"><textarea rows="6" type="text" name="text_30" class="w-100    border-dark border-2" ></textarea></div>
                    </div>
                    @include('layouts.footer23', ['page' => 5])
                </section>

                <section class="section_area p-5" id="sixth_section">

                    <div class="text-center fw-bold text-danger py-2">60 Additional Text Fields - Please identify the section that you are adding to.</div>
                    <div>
                        <div>Section <input type="text" name="section_31"></div>
                         <div class="pt-1"><textarea rows="6" type="text" name="text_31" class="w-100    border-dark border-2" ></textarea></div>
                    </div>
                    <div>
                        <div>Section <input type="text" name="section_32"></div>
                         <div class="pt-1"><textarea rows="6" type="text" name="text_32" class="w-100    border-dark border-2" ></textarea></div>
                    </div>
                    <div>
                        <div>Section <input type="text" name="section_33"></div>
                         <div class="pt-1"><textarea rows="6" type="text" name="text_33" class="w-100    border-dark border-2" ></textarea></div>
                    </div>
                    <div>
                        <div>Section <input type="text" name="section_34"></div>
                         <div class="pt-1"><textarea rows="6" type="text" name="text_34" class="w-100    border-dark border-2" ></textarea></div>
                    </div>
                    <div>
                        <div>Section <input type="text" name="section_35"></div>
                         <div class="pt-1"><textarea rows="6" type="text" name="text_35" class="w-100    border-dark border-2" ></textarea></div>
                    </div>
                    <div>
                        <div>Section <input type="text" name="section_36"></div>
                         <div class="pt-1"><textarea rows="6" type="text" name="text_36" class="w-100    border-dark border-2" ></textarea></div>
                    </div>
                    @include('layouts.footer23', ['page' => 6])
                </section>

                <section class="section_area p-5" id="seventh_section">

                    <div class="text-center fw-bold text-danger py-2">60 Additional Text Fields - Please identify the section that you are adding to.</div>
                    <div>
                        <div>Section <input type="text" name="section_37"></div>
                         <div class="pt-1"><textarea rows="6" type="text" name="text_37" class="w-100    border-dark border-2" ></textarea></div>
                    </div>
                    <div>
                        <div>Section <input type="text" name="section_38"></div>
                         <div class="pt-1"><textarea rows="6" type="text" name="text_38" class="w-100    border-dark border-2" ></textarea></div>
                    </div>
                    <div>
                        <div>Section <input type="text" name="section_39"></div>
                         <div class="pt-1"><textarea rows="6" type="text" name="text_39" class="w-100    border-dark border-2" ></textarea></div>
                    </div>
                    <div>
                        <div>Section <input type="text" name="section_40"></div>
                         <div class="pt-1"><textarea rows="6" type="text" name="text_40" class="w-100    border-dark border-2" ></textarea></div>
                    </div>
                    <div>
                        <div>Section <input type="text" name="section_41"></div>
                         <div class="pt-1"><textarea rows="6" type="text" name="text_41" class="w-100    border-dark border-2" ></textarea></div>
                    </div>
                    <div>
                        <div>Section <input type="text" name="section_42"></div>
                         <div class="pt-1"><textarea rows="6" type="text" name="text_42" class="w-100    border-dark border-2" ></textarea></div>
                    </div>
                    @include('layouts.footer23', ['page' => 7])
                </section>

                <section class="section_area p-5" id="eighth_section">

                    <div class="text-center fw-bold text-danger py-2">60 Additional Text Fields - Please identify the section that you are adding to.</div>
                    <div>
                        <div>Section <input type="text" name="section_43"></div>
                         <div class="pt-1"><textarea rows="6" type="text" name="text_43" class="w-100    border-dark border-2" ></textarea></div>
                    </div>
                    <div>
                        <div>Section <input type="text" name="section_44"></div>
                         <div class="pt-1"><textarea rows="6" type="text" name="text_44" class="w-100    border-dark border-2" ></textarea></div>
                    </div>
                    <div>
                        <div>Section <input type="text" name="section_45"></div>
                         <div class="pt-1"><textarea rows="6" type="text" name="text_45" class="w-100    border-dark border-2" ></textarea></div>
                    </div>
                    <div>
                        <div>Section <input type="text" name="section_46"></div>
                         <div class="pt-1"><textarea rows="6" type="text" name="text_46" class="w-100    border-dark border-2" ></textarea></div>
                    </div>
                    <div>
                        <div>Section <input type="text" name="section_47"></div>
                         <div class="pt-1"><textarea rows="6" type="text" name="text_47" class="w-100    border-dark border-2" ></textarea></div>
                    </div>
                    <div>
                        <div>Section <input type="text" name="section_48"></div>
                         <div class="pt-1"><textarea rows="6" type="text" name="text_48" class="w-100    border-dark border-2" ></textarea></div>
                    </div>
                    @include('layouts.footer23', ['page' => 8])
                </section>

                <section class="section_area p-5" id="ninth_section">

                    <div class="text-center fw-bold text-danger py-2">60 Additional Text Fields - Please identify the section that you are adding to.</div>
                    <div>
                        <div>Section <input type="text" name="section_49"></div>
                         <div class="pt-1"><textarea rows="6" type="text" name="text_49" class="w-100    border-dark border-2" ></textarea></div>
                    </div>
                    <div>
                        <div>Section <input type="text" name="section_50"></div>
                         <div class="pt-1"><textarea rows="6" type="text" name="text_50" class="w-100    border-dark border-2" ></textarea></div>
                    </div>
                    <div>
                        <div>Section <input type="text" name="section_51"></div>
                         <div class="pt-1"><textarea rows="6" type="text" name="text_51" class="w-100    border-dark border-2" ></textarea></div>
                    </div>
                    <div>
                        <div>Section <input type="text" name="section_52"></div>
                         <div class="pt-1"><textarea rows="6" type="text" name="text_52" class="w-100    border-dark border-2" ></textarea></div>
                    </div>
                    <div>
                        <div>Section <input type="text" name="section_53"></div>
                         <div class="pt-1"><textarea rows="6" type="text" name="text_53" class="w-100    border-dark border-2" ></textarea></div>
                    </div>
                    <div>
                        <div>Section <input type="text" name="section_54"></div>
                         <div class="pt-1"><textarea rows="6" type="text" name="text_54" class="w-100    border-dark border-2" ></textarea></div>
                    </div>
                    @include('layouts.footer23', ['page' => 9])
                </section>

                <section class="section_area p-5" id="tenth_section">

                    <div class="text-center fw-bold text-danger py-2">60 Additional Text Fields - Please identify the section that you are adding to.</div>
                    <div>
                        <div>Section <input type="text" name="section_55"></div>
                         <div class="pt-1"><textarea rows="6" type="text" name="text_55" class="w-100    border-dark border-2" ></textarea></div>
                    </div>
                    <div>
                        <div>Section <input type="text" name="section_56"></div>
                         <div class="pt-1"><textarea rows="6" type="text" name="text_56" class="w-100    border-dark border-2" ></textarea></div>
                    </div>
                    <div>
                        <div>Section <input type="text" name="section_57"></div>
                         <div class="pt-1"><textarea rows="6" type="text" name="text_57" class="w-100    border-dark border-2" ></textarea></div>
                    </div>
                    <div>
                        <div>Section <input type="text" name="section_58"></div>
                         <div class="pt-1"><textarea rows="6" type="text" name="text_58" class="w-100    border-dark border-2" ></textarea></div>
                    </div>
                    <div>
                        <div>Section <input type="text" name="section_59"></div>
                         <div class="pt-1"><textarea rows="6" type="text" name="text_59" class="w-100    border-dark border-2" ></textarea></div>
                    </div>
                    <div>
                        <div>Section <input type="text" name="section_60"></div>
                         <div class="pt-1"><textarea rows="6" type="text" name="text_60" class="w-100    border-dark border-2" ></textarea></div>
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
