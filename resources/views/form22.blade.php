{{-- 1352FA_Financial_Declaration.pdf --}}

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
            border-bottom: 1px solid black !important;
            box-shadow: none !important;
        }

        input,
        table {
            background-color: transparent !important;
            height: 100% !important;

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

        input[type='checkbox'] {
            accent-color: #8c8a8a !important;
        }

        .footer_field:focus-visible {
            outline: none !important;
            border-bottom: 2px solid black !important;
        }

        .footer_field:focus {
            outline: none !important;
            border-bottom: 2px solid black !important;
        }

        .footer_field {
            outline: none !important;
            border-bottom: 2px solid black !important;
        }

        input:focus-visible {
            outline: none !important;
            border-bottom: 2px solid black !important;
        }

        @media screen and (max-width : 768px) {
            .d_sm_block {
                display: block !important;
                overflow: hidden !important;
            }

            .small_text {
                height: auto !important;
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
    <div class="container-fluid py-1 py-lg-3">
        <form action="{{ route('form22.submit') }}" method="post">
            @csrf
            <div class="container bg_color p-lg-3 p-1  ">

                <section class="section_area  row page1 bg-white pt-5 p-lg-5 pe-2 pe-lg-5 p-lg-3 m-3 mt-4  pt-lg-5 pt-4"
                    id="first_section">

                    <div class="col-lg-10 mx-auto">
                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show">{{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif
                        <div class="row pt-lg-5 align-items-end border-bottom">
                            <div class="col-lg-8">
                                <div class="">
                                    <div class="small_text d-flex d_sm_block">Petitioner/Joint Petitioner A: <input
                                            type="text" name="1pjp_a"
                                            class=" border-none responsive_input border-0 border-bottom border-dotted shadow-none">
                                    </div>

                                </div>
                                <div class="pb-2">
                                    <div class="small_text d-flex d_sm_block">Respondent/Joint Petitioner B: <input
                                            type="text" name="1rjp_b"
                                            class=" border-none responsive_input border-0 border-bottom border-dotted shadow-none">
                                    </div>

                                </div>

                                <div class="table-responsive">
                                    <table class="table table-bordered border-dark">
                                        <tbody>
                                            <tr>
                                                <td class="w-50 small_text">Enter the name of the county in which this
                                                    case is filed. Escriba el nombre del condado en el que se presenta
                                                    este caso.</td>
                                                <td rowspan="5">
                                                    <div class="small_text">STATE OF WISCONSIN, CIRCUIT COURT, <span
                                                            class="small_text">ESTADO DE WISCONSIN, TRIBUNAL DE PRIMERA
                                                            INSTANCIA</span></div> <input type="text" name="noc1"
                                                        class="border-0 border-bottom"> COUNTY CONDADO DE
                                                    <div class="small_text d-flex d_sm_block"> <span>IN RE: / REFERENTE
                                                            AL/A LA: </span><input type="text" name=""
                                                            id=""
                                                            class="border-0 border-bottom footer_field responsive_input w-25">
                                                    </div>

                                                    <div>Petitioner/Joint Petitioner A</div>
                                                    <div><small>Parte Demandante Solicitante Conjunta A</small></div>
                                                    <div><input type="text" name="pjp_a"
                                                            class="border-0 border-bottom w-100"> </div>
                                                    <div class="small_text">Name (First, Middle and Last) Nombre
                                                        (Nombre, Segundo Nombre, y Apellido)</div>
                                                    <div>and</div>
                                                    <div>Respondent/Joint Petitioner B</div>
                                                    <div><input type="text" name="rjp_b"
                                                            class="border-0 border-bottom"> </div>
                                                    <div class="small_text pb-lg-5">Name (First, Middle and Last)</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="small_text">Enter the name of the Petitioner/Joint Petitioner
                                                    A. Escriba el nombre de la Parte Demandante/ Solicitante Conjunta A.
                                                </td>

                                            </tr>
                                            <tr>
                                                <td class="small_text">On the far right, check Petitioner/Joint
                                                    Petitioner A or Respondent/Joint Petitioner B. En el extremo derecho
                                                    marque la casilla para indicar si se trata la Parte
                                                    Demandante/Solicitante Conjunta A o la Parte Demandada/Solicitante
                                                    Conjunta B.</td>
                                            </tr>
                                            <tr>
                                                <td class="small_text">Enter the name of the Respondent/Joint Petitioner
                                                    B. Escriba el nombre de la Parte Demandada/Solicitante Conjunta B.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="small_text">Enter the case number. Escriba el número de caso.
                                                </td>
                                            </tr>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>


                            </div>
                            <div class="col-lg-4 mx-auto border-top border-dark pb-4">
                                <div>Financial Disclosure
                                    Statement of
                                    Declaración de divulgación
                                    financiera de la</div>
                                <div><input type="checkbox" name="fd_pjp_checkbox" Value="Petitioner" id="">
                                    Petitioner/Joint Petitioner A</div>
                                <div><small>Parte Demandante/Solicitante Conjunta A</small></div>
                                <div><input type="checkbox" name="fd_rjpcheckbox" Value="Respondent" id="">
                                    Respondent/Joint Petitioner B</div>
                                <div><small>Parte Demandada/Solicitante Conjunta B</small></div>
                                <div>Case No: <input type="text" class="border-0 border-bottom responsive_input"
                                        name="case_number2" id=""></div>
                                <div class="small_text">Causa no. <input type="text" class="border-0 "
                                        name="case_number2" id=""></div>
                            </div>
                        </div>
                        <div class="border border-dark mt-2 bg-secondary p-1 small_text">
                            <div> This form does not replace the need for an interpreter, any colloquies mandated by
                                law, or the responsibility of court and counsel to
                                ensure that persons with limited English proficiency fully comprehend their rights and
                                obligations. This form must be completed in the English language. </div>
                            <div class="ps-lg-5">
                                Este documento no sustituye el uso de un intérprete, ni los coloquios judiciales
                                exigidos por la ley. Tampoco sustituye la
                                responsabilidad del tribunal y los abogados de asegurarse de que las personas cuya
                                comprensión del idioma inglés sea
                                limitada entiendan por completo sus derechos y obligaciones. Este formulario debe
                                llenarse en inglés.
                            </div>
                        </div>

                        <div class="ps-2">
                            This form must be filed with the court within the time period set by the court but no later
                            than 90 DAYS after the service
                            of the <b>Summons</b> and <b>Petition</b> on the Respondent/Joint Petitioner B or the filing
                            of a <b>Joint Petition. </b> Failure by either
                            party to complete and file this form or attachments as required will authorize the court to
                            accept the statement of the
                            other party as the basis for its decisions. <b>Deliberate failure to provide complete
                                disclosure is perjury.</b>
                        </div>
                        <div class="ps-lg-5 small_text">Se deberá presentar este formulario ante el tribunal dentro del
                            plazo establecido por el tribunal, pero a más tardar 90 DÍAS
                            después de la entrega de la Citación y Petición a la parte demandada (cónyuge) o de la
                            presentación de una Petición
                            Conjunta. Si alguna de las partes no completa y presenta este formulario o anexos tal como
                            se requiere, el tribunal tendrá la
                            autorización de aceptar la declaración de la otra parte como base para sus decisiones. <b>
                                Abstenerse deliberadamente de
                                proveer una declaración completa constituye perjurio.</b></div>


                        <div><span class="me-3">1.</span> PROOF OF INCOME / COMPROBANTE DE INGRESOS</div>
                        <div class="ms-lg-4 small_text">
                            <ul>
                                <li>Attach a statement reflecting income earned to date for the current year.
                                    Adjunte un estado de cuenta que muestre los ingresos obtenidos a la fecha para el
                                    año actual.</li>
                                <li>Attach most recent W-2 Statement. <br>
                                    Adjunte el formulario W-2 más reciente.</li>
                            </ul>
                        </div>
                        <div><span class="me-3">2.</span>GENERAL INFORMATION / INFORMACIÓN GENERAL</div>
                        <div class="row mt-1">
                            <div class="col-lg-2">Name / Nombre</div>
                            <div class="col-lg-10 d-flex d_sm_block">
                                <input type="text" min="0" name="gi_name"
                                    class="border-0 p-0 m-0 border-bottom footer_field w-100">
                            </div>
                        </div>
                        <div class="row mt-1">
                            <div class="col-lg-2">Address / Dirección</div>
                            <div class="col-lg-10 d-flex d_sm_block">
                                <input type="text" min="0" name="gi_address1"
                                    class="border-0 p-0 m-0 border-bottom footer_field w-100">
                            </div>
                        </div>
                        <div class="row mt-1">
                            <div class="col-lg-2">Address / Dirección</div>
                            <div class="col-lg-10 d-flex d_sm_block">
                                <input type="text" min="0" name="gi_address2"
                                    class="border-0 p-0 m-0 border-bottom footer_field w-100">
                            </div>
                        </div>
                        <div class="row mt-1">
                            <div class="col-lg-2">City / Ciudad</div>
                            <div class="col-lg-10 d-flex d_sm_block">
                                <div>
                                    <input type="text" min="0" name="gi_city1"
                                        class="border-0 p-0 m-0 border-bottom footer_field w-100 responsive_input"
                                        style="min-width: 241px !important">
                                </div>State
                                <div><input type="text" min="0" name="gi_state1"
                                        class="border-0 p-0 m-0 border-bottom footer_field w-100 responsive_input"
                                        style="min-width: 241px !important"></div>Zip
                                <div><input type="text" min="0" name="gi_zip1"
                                        class="border-0 p-0 m-0 border-bottom footer_field w-100 responsive_input"
                                        style="min-width: 241px !important"></div>
                            </div>
                        </div>
                        <div class="row mt-1">
                            <div class="col-lg-2 small_text">Phone <span>[Day]</span>
                                <div>Teléfono [de día]</div>
                            </div>
                            <div class="col-lg-10 d-flex d_sm_block">
                                <div> <input type="text" min="0" name="gi_phone_day1"
                                        class="border-0 p-0 m-0 border-bottom footer_field w-100 responsive_input"
                                        style="min-width :247px !important"></div>Phone [Evening] <div>Teléfono [de
                                    noche]</div>
                                <div><input type="text" min="0" name="gi_phone_evening1"
                                        class="border-0 p-0 m-0 border-bottom footer_field w-100 responsive_input"
                                        style="min-width:247px !important"></div>
                            </div>
                        </div>
                        <div class="row mt-1">
                            <div class="col-lg-2 small_text">Alternative Phone
                                <div>Teléfono alternativo</div>
                            </div>
                            <div class="col-lg-10 d-flex d_sm_block">
                                <div> <input type="text" min="0" name="gi_alternative_phone1"
                                        class="border-0 p-0 m-0 border-bottom footer_field w-100 responsive_input"
                                        style="min-width:  150px !important"></div>Social Security Number <div>Número
                                    de Seguro Social</div>
                                <div><input type="text" min="0" name="gi_ssnumber1"
                                        class="border-0 p-0 m-0 border-bottom footer_field w-100 responsive_input"
                                        style="min-width:  150px !important"></div>
                            </div>
                        </div>
                        <div class="row mt-1">
                            <div class="col-lg-2 small_text">Occupation <div>Ocupación</div>
                            </div>
                            <div class="col-lg-10 d-flex d_sm_block">
                                <input type="text" min="0" name="gi_occupation1"
                                    class="border-0 p-0 m-0 border-bottom footer_field responsive_input"
                                    style="min-width: 150px !important">
                            </div>
                        </div>

                        @include('layouts.footer17', ['page' => 1])
                    </div>
                </section>
                <section class="section_area row page1 bg-white pt-5 p-lg-5 pe-2 pe-lg-5 p-lg-3 m-3 mt-4  pt-lg-5 pt-4"
                    id="second_section">
                    <div class="border-bottom border-dark">
                        <div class="">
                            <div class="small_text d-flex d_sm_block">Petitioner/Joint Petitioner A: <input
                                    type="text" name="2pjp_a"
                                    class=" border-none responsive_input border-0 border-bottom border-dotted shadow-none">
                            </div>
                        </div>
                        <div class="pb-2">
                            <div class="small_text d-flex d_sm_block">Respondent/Joint Petitioner B: <input
                                    type="text" name="2rjp_b"
                                    class=" border-none responsive_input border-0 border-bottom border-dotted shadow-none">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-10 mx-auto">
                        <div class="row mt-1">
                            <div class="col-lg-2 small_text fw-bold">Employer
                                <div>Empleador</div>
                            </div>
                            <div class="col-lg-10 d-flex d_sm_block">
                                <input type="text" min="0" name="gi_employer1"
                                    class="border-0 p-0 m-0 border-bottom footer_field w-100">
                            </div>
                        </div>
                        <div class="row mt-1">
                            <div class="col-lg-2 small_text fw-bold">Address / Dirección</div>
                            <div class="col-lg-10 d-flex d_sm_block">
                                <input type="text" min="0" name="gi_address3"
                                    class="border-0 p-0 m-0 border-bottom footer_field w-100">
                            </div>
                        </div>
                        <div class="row mt-1">
                            <div class="col-lg-2 small_text fw-bold">Address / Dirección</div>
                            <div class="col-lg-10 d-flex d_sm_block">
                                <input type="text" min="0" name="gi_address4"
                                    class="border-0 p-0 m-0 border-bottom footer_field w-100">
                            </div>
                        </div>
                        <div class="row mt-1">
                            <div class="col-lg-2">City / Ciudad</div>
                            <div class="col-lg-10 d-flex d_sm_block">
                                {{-- <div> <input type="text" min="0" name="mgs_wages" class="border-0 p-0 m-0 border-bottom footer_field w-100"></div>State <div><input type="text" min="0" name="mgs_wages" class="border-0 p-0 m-0 border-bottom footer_field w-100"></div>Zip<div><input type="text" min="0" name="mgs_wages" class="border-0 p-0 m-0 border-bottom footer_field w-100"></div> --}}
                                <div><input type="text" min="0" name="git_city2"
                                        class="border-0 p-0 m-0 border-bottom footer_field w-100 responsive_input"
                                        style="min-width: 241px !important"> </div>State
                                <div><input type="text" min="0" name="gi_state2"
                                        class="border-0 p-0 m-0 border-bottom footer_field w-100 responsive_input"
                                        style="min-width: 241px !important"> </div>Zip
                                <div><input type="text" min="0" name="gi_zip2"
                                        class="border-0 p-0 m-0 border-bottom footer_field w-100 responsive_input"
                                        style="min-width: 241px   !important"></div>

                            </div>

                        </div>

                        <div class="row mt-1">
                            <div class="col-lg-2 small_text">Phone / Teléfono </div>
                            <div class="col-lg-10 d-flex d_sm_block">
                                <div> <input type="text" min="0" name="gi_phone2"
                                        class="border-0 p-0 m-0 border-bottom footer_field w-100 responsive_input"
                                        style="min-width:  381px !important"></div>Fax
                                <div><input type="text" min="0" name="gi_fax1"
                                        class="border-0 p-0 m-0 border-bottom footer_field w-100 responsive_input"
                                        style="min-width:   381px !important"> </div>
                            </div>
                        </div>
                        <div class="row mt-1">
                            <div class="col-lg-2 small_text">Payroll Office
                                <div>Oficina de nómina</div>
                            </div>
                            <div class="col-lg-10 d-flex  d_sm_block">
                                <div>

                                    <div class="fw-bold "> <input type="checkbox" min="0"
                                            name="gi_payroll_office1"
                                            class="border-0 p-0 m-0 border-bottom footer_field  ms-lg-3"> Same as
                                        employer </div>
                                </div>
                                <div> La misma del empleador</div>
                            </div>
                        </div>

                        <div class="row mt-1">
                            <div class="col-lg-2 small_text fw-bold">Address / Dirección</div>
                            <div class="col-lg-10 d-flex d_sm_block">
                                <input type="text" min="0" name="gi_address5"
                                    class="border-0 p-0 m-0 border-bottom footer_field w-100">
                            </div>
                        </div>
                        <div class="row mt-1">
                            <div class="col-lg-2 small_text fw-bold">Address / Dirección</div>
                            <div class="col-lg-10 d-flex d_sm_block">
                                <input type="text" min="0" name="gi_address6"
                                    class="border-0 p-0 m-0 border-bottom footer_field w-100">
                            </div>
                        </div>
                        <div class="row mt-1">
                            <div class="col-lg-2">City / Ciudad</div>
                            <div class="col-lg-10 d-flex d_sm_block">
                                <div> <input type="text" min="0" name="git_city3"
                                        class="border-0 p-0 m-0 border-bottom footer_field w-100 responsive_input"
                                        style="min-width: 241px !important"></div>State
                                <div><input type="text" min="0" name="gi_state3"
                                        class="border-0 p-0 m-0 border-bottom footer_field w-100 responsive_input"
                                        style="min-width: 241px !important"></div>Zip
                                <div><input type="text" min="0" name="gi_zip3"
                                        class="border-0 p-0 m-0 border-bottom footer_field w-100 responsive_input"
                                        style="min-width: 241px !important"></div>
                            </div>
                        </div>

                        <div class="row mt-1">
                            <div class="col-lg-2 small_text">Phone / Teléfono </div>
                            <div class="col-lg-10 d-flex d_sm_block">
                                <div> <input type="text" min="0" name="gi_phone3"
                                        class="border-0 p-0 m-0 border-bottom footer_field w-100 responsive_input"
                                        style="min-width: 381px !important"></div>Fax
                                <div><input type="text" min="0" name="gi_fax2"
                                        class="border-0 p-0 m-0 border-bottom footer_field w-100 responsive_input"
                                        style="min-width:  381px !important"></div>
                            </div>
                        </div>

                        <div><span class="me-3">3.</span>MEMBERS OF YOUR HOUSEHOLD / MIEMBROS DE SU GRUPO FAMILIAR
                        </div>
                        <div class="ms-lg-3">
                            <b>Enter the name and relationship </b> of all people living in your household. <b>Check yes
                                or no </b> to identify if they contribute to payment of household expenses.
                            <div class="small_text">Escriba el nombre y la relación de todas las personas que vivan en
                                su grupo familiar. Marque sí o no para identificar si la
                                persona contribuye al pago de los gastos del grupo familiar.</div>
                        </div>
                        <div class="ms-lg-3">
                            <input type="checkbox" name="i_alone" id=""> I live alone / Vivo solo(a)
                        </div>

                        <div class="ms-lg-3 table-responsive">
                            <table class="table table-bordered border-dark">
                                <tbody>
                                    <tr>
                                        <td rowspan="2" class=""></td>
                                        <td rowspan="2" class=" text-center bg-secondary">Name / Nombre</td>
                                        <td rowspan="2" class=" text-center bg-secondary">Relationship / Relación
                                        </td>
                                        <td colspan="2" class="w-50 text-center bg-secondary">
                                            <div>This person helps pay expenses</div>
                                            <div class="small_text">Esta persona ayuda a pagar los gastos</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class=" text-center bg-secondary">Yes / Sí</td>
                                        <td class=" text-center bg-secondary">No</td>
                                    </tr>
                                    <tr>
                                        <td>1.</td>
                                        <td>
                                            <textarea type="text" name="my_name1" class="border-0 form-control"></textarea>
                                        </td>
                                        <td>
                                            <textarea type="text" name="my_relationship1" class="border-0 form-control"></textarea>
                                        </td>
                                        <td class="mx-auto text-center"><input type="radio" name="my_help1"
                                                value="Yes" class=""></td>
                                        <td class="mx-auto text-center"><input type="radio" name="my_help1"
                                                value="No" class=""></td>
                                    </tr>
                                    <tr>
                                        <td>2.</td>
                                        <td>
                                            <textarea type="text" name="my_name2" class="border-0 form-control"></textarea>
                                        </td>
                                        <td>
                                            <textarea type="text" name="my_relationship2" class="border-0 form-control"></textarea>
                                        </td>
                                        <td class="mx-auto text-center"><input type="radio" name="ei_doh2"
                                                value="Yes" class=""></td>
                                        <td class="mx-auto text-center"><input type="radio" name="ei_doh2"
                                                value="No" class=""></td>
                                    </tr>
                                    <tr>
                                        <td>3.</td>
                                        <td>
                                            <textarea type="text" name="my_name3" class="border-0 form-control"></textarea>
                                        </td>
                                        <td>
                                            <textarea type="text" name="my_relationship3" class="border-0 form-control"></textarea>
                                        </td>
                                        <td class="mx-auto text-center"><input type="radio" name="ei_doh3"
                                                value="Yes" class=""></td>
                                        <td class="mx-auto text-center"><input type="radio" name="ei_doh3"
                                                value="No" class=""></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div><span class="me-lg-3 fw-bold">4.</span>MONTHLY INCOME / INGRESOS MENSUALES</div>
                        <div class="ms-lg-4"><b>Income</b> from wages / salary is received: (check one) / Los ingresos
                            de sueldos / salario se perciben (marque uno):</div>
                        <div class="fw-bold text-center">To calculate monthly gross income use the multiplier shown:
                        </div>
                        <div class="fw-bold text-center">Para calcular el ingreso mensual bruto use el factor de
                            multiplicación que se indica:</div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="small_text"><input type="checkbox" name="mi_weekly_checkbox"
                                        id=""> weekly -multiply weekly income by 4.33 </div>
                                <div class="small_text">semanalmente–multiplique el ingreso semanal por 4,33.</div>
                            </div>
                            <div class="col-lg-6">
                                <div class="small_text"> <input type="checkbox" name="mi_other_weekly_checkbox"
                                        id=""> every other week (bi-weekly) multiply bi-weekly income by 2.17
                                </div>
                                <div class="small_text">cada dos semanas (quincenalmente) multiplique el ingreso
                                    quincenal por 2,17.</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="small_text"><input type="checkbox" name="mi_monthly_checkbox"
                                        id=""> monthly </div>
                                <div class="small_text">mensualmente</div>
                            </div>
                            <div class="col-lg-6">
                                <div class="small_text"> <input type="checkbox" name="mi_monthly_multiply_checkbox"
                                        id=""> twice a month-multiply semi-monthly income by 2</div>
                                <div class="small_text">dos veces al mes–multiplique el ingreso bimensual por 2</div>
                            </div>
                        </div>


                        <div class="table-responsive">
                            <table class="table table-bordered border-dark">
                                <tbody>
                                    <tr>
                                        <td colspan="3" class="bg-secondary">MONTHLY GROSS INCOME / INGRESO BRUTO
                                            MENSUAL</td>
                                    </tr>
                                    <tr>
                                        <td>1.</td>
                                        <td>
                                            <div class="small_text">Gross <b>monthly</b> income (before taxes and
                                                deductions) from salary and wages, including commissions, allowances and
                                                overtime. (See above how to calculate.) </div>
                                            <div class="small_text">Ingreso bruto mensual (antes de impuestos y
                                                deducciones) de salarios y sueldos, inclusive
                                                comisiones, subvenciones y horas extras. (Vea arriba cómo se calcula).
                                            </div>
                                        </td>
                                        <td>
                                            <textarea type="text" name="mgi_gmi" class="border-0 form-control" rows="4"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2.</td>
                                        <td class="small_text">Pensions and retirement funds received / Pensiones y
                                            fondos de jubilación recibidos</td>
                                        <td>
                                            <textarea type="text" name="mgi_par" class="border-0 form-control"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3.</td>
                                        <td class="small_text">Social Security benefits received / Beneficios de seguro
                                            social recibidos</td>
                                        <td>
                                            <textarea type="text" name="mgi_ssb" class="border-0 form-control"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4.</td>
                                        <td class="small_text">Disability and Unemployment Insurance received <br>
                                            Seguro de discapacidad y de desempleo recibido</td>
                                        <td>
                                            <textarea type="text" name="mgi_daui" class="border-0 form-control"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5.</td>
                                        <td class="small_text">Public Assistance Funds received / Fondos de asistencia
                                            pública recibidos </td>
                                        <td>
                                            <textarea type="text" name="mgi_paf" class="border-0 form-control"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>6.</td>
                                        <td>Interest and Dividends received / Intereses y dividendos recibidos</td>
                                        <td>
                                            <textarea type="text" name="mgi_iad" class="border-0 form-control"></textarea>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        @include('layouts.footer17', ['page' => 2])
                    </div>
                </section>
                <section
                    class="section_area  row page1 bg-white pt-5 p-lg-5 pe-2 pe-lg-5 p-lg-3 m-3 mt-4  pt-lg-5 pt-4"
                    id="third_section">
                    <div class="col-lg-10 mx-auto">
                        <div class="border-bottom">
                            <div class="">
                                <div class="small_text d-flex d_sm_block">Petitioner/Joint Petitioner A:
                                    <input type="text" name="3pjp_a"
                                        class=" border-none responsive_input border-0 border-bottom border-dotted shadow-none">
                                </div>
                            </div>
                            <div class="pb-3">
                                <div class="small_text d-flex d_sm_block">Respondent/Joint Petitioner B:
                                    <input type="text" name="3rjp_b"
                                        class=" border-none responsive_input border-0 border-bottom border-dotted shadow-none">
                                </div>
                            </div>

                        </div>
                        <div class="pt-lg-2 ms-lg-3 table-responsive">
                            <table class="table table-bordered border-dark">
                                <tbody>

                                    <tr>
                                        <td>7.</td>
                                        <td>
                                            <div>Child Support and maintenance (spousal support) received from any prior
                                                marriage/relationship</div>
                                            <div class="small_text">Manutención de menores y mantenimiento (pensión
                                                alimenticia del cónyuge) recibido de cualquier matrimonio/relación
                                                anterior.</div>
                                        </td>
                                        <td>
                                            <textarea type="text" name="mgi_csam" class="border-0 form-control" rows="4"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>8.</td>
                                        <td>
                                            <div> Rental payments received (from property you rent to others) </div>
                                            <div class="small_text">Pagos de alquiler recibidos (de propiedades que
                                                usted alquila a otras personas).</div>
                                        </td>
                                        <td>
                                            <textarea type="text" name="mgi_rps" class="border-0 form-control"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>9.</td>
                                        <td> Bonuses received / Bonos recibidos</td>
                                        <td>
                                            <textarea type="text" name="mgi_br" class="border-0 form-control"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div>10. </div>
                                        </td>
                                        <td>
                                            <div>Other sources of income received: (please specify)</div>
                                            <div class="small_text">Otras fuentes de ingresos recibidos: (especifique,
                                                por favor)</div>
                                        </td>
                                        <td>
                                            <textarea type="text" name="mgi_osi1" class="border-0 form-control"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>11.</td>
                                        <td>
                                            <textarea type="text" name="mgi_osi2" class="border-0 form-control"></textarea>
                                        </td>
                                        <td>
                                            <textarea type="text" name="mgi_osi3" class="border-0 form-control"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>12.</td>
                                        <td>
                                            <textarea type="text" name="mgi_osi4" class="border-0 form-control"></textarea>
                                        </td>
                                        <td>
                                            <textarea type="text" name="mgi_osi5" class="border-0 form-control"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>13.</td>
                                        <td>
                                            <textarea type="text" name="mgi_osi6" class="border-0 form-control"></textarea>
                                        </td>
                                        <td>
                                            <textarea type="text" name="mgi_osi7" class="border-0 form-control"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td class="text-end">
                                            <div>Total Gross Income (add lines 1-12)</div>
                                            <div class="small_text">Ingreso bruto total (sume las cantidades de las
                                                líneas 1 a 12)</div>
                                        </td>
                                        <td>
                                            <textarea type="text" name="mgi_tgi" class="border-0 form-control"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3" class="bg-secondary">MONTHLY DEDUCTIONS / DEDUCCIONES
                                            MENSUALES</td>
                                    </tr>
                                    <tr>
                                        <td>14. </td>
                                        <td>

                                            <div> Number of tax exemptions claimed</div>
                                            <div class="small_text">Cantidad de exenciones reclamadas</div>
                                        </td>
                                        <td style="background-color:#b8e5b8">
                                            <textarea type="text" name="md_mte" class="border-0 form-control p-0 m-0" style="background-color:#b8e5b8"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>15. </td>
                                        <td>Monthly federal income tax withheld / Impuestos federales retenidos
                                            mensualmente</td>
                                        <td>
                                            <textarea type="text" name="md_mfi" class="border-0 form-control"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>16.</td>
                                        <td>Monthly state income tax withheld / Impuestos estatales retenidos
                                            mensualmente</td>
                                        <td>
                                            <textarea type="text" name="md_msi" class="border-0 form-control"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>17.</td>
                                        <td>Social Security / Seguro Social</td>
                                        <td>
                                            <textarea type="text" name="md_ss" class="border-0 form-control"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>18.</td>
                                        <td>Medicare</td>
                                        <td>
                                            <textarea type="text" name="md_medicare" class="border-0 form-control"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>19.</td>
                                        <td>Medical insurance / Seguro médico</td>
                                        <td>
                                            <textarea type="text" name="md_mi" class="border-0 form-control"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>20.</td>
                                        <td>Other insurances / Otros seguros</td>
                                        <td>
                                            <textarea type="text" name="md_other" class="border-0 form-control"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>21.</td>
                                        <td>Union or other dues / Cuotas sindicales u otras cuotas</td>
                                        <td>
                                            <textarea type="text" name="md_uod" class="border-0 form-control"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>22.</td>
                                        <td>Retirement or pension fund / Fondos de jubilación o de pensión</td>
                                        <td>
                                            <textarea type="text" name="md_rpf" class="border-0 form-control"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>23.</td>
                                        <td>Savings plan / Plan de ahorros</td>
                                        <td>
                                            <textarea type="text" name="md_sp" class="border-0 form-control"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>24.</td>
                                        <td>Credit union / Cooperativa de crédito</td>
                                        <td>
                                            <textarea type="text" name="md_cu" class="border-0 form-control"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>25.</td>
                                        <td>Child support or spousal support payments
                                            <div class="small_text"> Pagos de manutención de menores o de mantenimiento
                                                para el excónyuge</div>
                                        </td>
                                        <td>
                                            <textarea type="text" name="md_css" class="border-0 form-control"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>26.</td>
                                        <td>Other deductions: (<span class="small_text">please specify</span>)
                                            <div class="small_text">Otras deducciones: (especifique, por favor)</div>
                                        </td>
                                        <td>
                                            <textarea type="text" name="md_other1" class="border-0 form-control"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>27.</td>
                                        <td>
                                            <textarea type="text" name="md_other2" class="border-0 form-control"></textarea>
                                        </td>
                                        <td>
                                            <textarea type="text" name="md_other3" class="border-0 form-control"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>28</td>
                                        <td class="text-end">Total Gross Income (add lines 1-12)
                                            <div class="small_text">Total de deducciones mensuales (sume las cantidades
                                                de las líneas 14 a 27)</div>
                                        </td>
                                        <td>
                                            <textarea type="text" name="md_tgi" class="border-0 form-control"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td class="text-end h5">MONTHLY NET INCOME (<span class="small_text">subtract
                                                line 28 from line 13</span>)
                                            <div class="small_text">INGRESO MENSUAL NETO (reste la cantidad de la línea
                                                28 de la cantidad de la línea 13)</div>
                                        </td>
                                        <td class="w-25">
                                            <textarea type="text" name="md_mni" class="border-0 form-control"></textarea>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="pt-lg-2 ms-lg-3 table-responsive">
                            <table class="table table-bordered border-dark">
                                <tbody>

                                    <tr>
                                        <td colspan="3" class="bg-secondary">My Monthly Expenses / Mis gastos
                                            mensuales</td>
                                    </tr>
                                    <tr>
                                        <td>1.</td>
                                        <td>Rent or mortgage payment (primary residence)
                                            <div class="small_text">Pago de alquiler o de hipoteca (residencia
                                                principal)</div>

                                        </td>
                                        <td class="w-25">
                                            <textarea type="text" name="mme_rmp" class="border-0 form-control"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2.</td>
                                        <td>Real Estate Property taxes (residence)
                                            <div class="small_text">Impuestos a la propiedad inmobiliaria (residencia)
                                            </div>

                                        </td>
                                        <td>
                                            <textarea type="text" name="mne_rept" class="border-0 form-control"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3.</td>
                                        <td>Repairs and maintenance (including maintenance of appliances and
                                            furnishings)
                                            <div class="small_text">Reparaciones y mantenimiento (inclusive
                                                mantenimiento de electrodomésticos y de mobiliario)</div>

                                        </td>
                                        <td>
                                            <textarea type="text" name="mne_ram" class="border-0 form-control"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4.</td>
                                        <td>Food (include eating out) and household supplies
                                            <div class="small_text">Alimentos (inclusive los de comer fuera de casa) y
                                                suministros domésticos</div>
                                        </td>
                                        <td>
                                            <textarea type="text" name="mne_fie" class="border-0 form-control"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5.</td>
                                        <td>Utilities (electricity, heat, water, sewage, trash)
                                            <div class="small_text">Servicios públicos (electricidad, calefacción,
                                                agua, alcantarillado, recolección de basura)</div>
                                        </td>
                                        <td>
                                            <textarea type="text" name="mne_ueh" class="border-0 form-control"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>6.</td>
                                        <td>Telephone (local, long distance & cellular) / Teléfono (local, de larga
                                            distancia y celular)</td>
                                        <td class="w-25">
                                            <textarea type="text" name="nme_telephone" class="border-0 form-control"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>7.</td>
                                        <td>Cable and Internet Services / Servicios de cable y de Internet</td>
                                        <td>
                                            <textarea type="text" name="mne_cais" class="border-0 form-control"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>8.</td>
                                        <td>Laundry and dry cleaning / Lavado de ropa y tintorería</td>
                                        <td>
                                            <textarea type="text" name="mne_ldc" class="border-0 form-control"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>9.</td>
                                        <td>Clothing and shoes / Ropa y calzado</td>
                                        <td>
                                            <textarea type="text" name="mne_cas" class="border-0 form-control"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>10.</td>
                                        <td>Medical, dental and prescription drug expenses (not covered by insurance)
                                            <div class="small_text">Gastos médicos, dentales y de medicamentos
                                                recetados (no cubiertos por seguro)</div>
                                        </td>
                                        <td>
                                            <textarea type="text" name="mne_mdp" class="border-0 form-control"></textarea>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>


                        @include('layouts.footer17', ['page' => 3])
                    </div>

                </section>
                <section
                    class="section_area  row page1 bg-white pt-5 p-lg-5 pe-2 pe-lg-5 p-lg-3 m-3 mt-4  pt-lg-5 pt-4"
                    id="fourth_section">
                    <div class="border-bottom">
                        <div class="">
                            <div class="small_text d-flex d_sm_block">Petitioner/Joint Petitioner A: <input
                                    type="text" name="4pjp_a"
                                    class=" border-none responsive_input border-0 border-bottom border-dotted shadow-none">
                            </div>
                        </div>
                        <div class="pb-3">
                            <div class="small_text d-flex d_sm_block">Respondent/Joint Petitioner B: <input
                                    type="text" name="4pjp_a"
                                    class=" border-none responsive_input border-0 border-bottom border-dotted shadow-none">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-10 mx-auto">

                        <div class="table-responsive">
                            <table class="table table-bordered border-dark">
                                <tbody>
                                    <tr>
                                        <td>11.</td>
                                        <td>Insurance (life, health, accident, auto, liability, disability, homeowner’s
                                            or renter’s-excluding
                                            insurance that is paid through payroll deductions)
                                            <div class="small_text">Seguro (de vida, médico, de accidentes, de
                                                automóvil, contra terceros, de discapacidad, de
                                                propietarios o de inquilino – excepto seguro pagado por medio de
                                                deducciones del sueldo)</div>
                                        </td>
                                        <td>
                                            <textarea type="text" name="mne_ilh" class="border-0 form-control" rows="4"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>12.</td>
                                        <td>Childcare (babysitting and day care)
                                            <div class="small_text">Cuidado infantil (cuidado de niños y guardería
                                                infantil)</div>
                                        </td>
                                        <td>
                                            <textarea type="text" name="mne_cbdc" class="border-0 form-control"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>13.</td>
                                        <td>Child support or spousal support payments (due to previous marriage or
                                            relationship)
                                            (Exclude payments made through payroll deductions)
                                            <div class="small_text">Pagos de manutención de menores o mantenimiento
                                                para el excónyuge (debido a matrimonio o
                                                relación anteriores) (Excluya pagos hechos por medio de deducciones del
                                                sueldo)</div>
                                        </td>
                                        <td>
                                            <textarea type="text" name="mne_css" class="border-0 form-control" rows="4"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>14.</td>
                                        <td>School expenses (child and adult education)
                                            <div class="small_text">Gastos escolares (educación infantil y de adultos)
                                            </div>
                                        </td>
                                        <td>
                                            <textarea type="text" name="mne_se" class="border-0 form-control"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>15.</td>
                                        <td>Entertainment (include clubs, social obligations, travel, recreation)
                                            <div class="small_text">Diversión (incluya clubes, obligaciones sociales,
                                                viajes, recreación)</div>
                                        </td>
                                        <td>
                                            <textarea type="text" name="mne_eic" class="border-0 form-control"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>16.</td>
                                        <td>Incidentals (grooming, tobacco, alcohol, gifts, holidays and special
                                            occasions)
                                            <div class="small_text">Incidentales (aseo personal, tabaco, alcohol,
                                                regalos, días feriados y ocasiones especiales)</div>
                                        </td>
                                        <td>
                                            <textarea type="text" name="mne_igt" class="border-0 form-control"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>17.</td>
                                        <td>Transportation (other than automobile) / Transporte (que no sea en
                                            automóvil)</td>
                                        <td>
                                            <textarea type="text" name="mne_tot" class="border-0 form-control"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>18.</td>
                                        <td>Auto payments (loans/leases) / Pagos de automóvil (préstamos /
                                            arrendamiento)</td>
                                        <td>
                                            <textarea type="text" name="mne_ap" class="border-0 form-control"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>19.</td>
                                        <td>Auto expenses (gas, oil, repairs, maintenance)
                                            <div class="small_text">Gastos de automóvil (gasolina, aceite,
                                                reparaciones, mantenimiento)</div>
                                        </td>
                                        <td>
                                            <textarea type="text" name="mne_ae" class="border-0 form-control"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>20.</td>
                                        <td>Newspapers, magazines, books / Periódicos, revistas, libros</td>
                                        <td>
                                            <textarea type="text" name="mne_nmb" class="border-0 form-control"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>21.</td>
                                        <td>Care and maintenance of pets (food, vet, grooming)
                                            <div class="small_text">Cuidado y mantenimiento de mascotas (alimentos,
                                                veterinario, aseo)</div>
                                        </td>
                                        <td>
                                            <textarea type="text" name="mne_cam" class="border-0 form-control"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>22.</td>
                                        <td>Payments to any dependents not living in your home and not included in a
                                            category above
                                            (including college age children)
                                            <div class="small_text">Pagos a cualquier persona dependiente que no viva
                                                en su hogar y que no esté incluida en una
                                                categoría arriba mencionada (incluyendo hijos de edad universitaria)
                                            </div>
                                        </td>
                                        <td>
                                            <textarea type="text" name="mne_pad" class="border-0 form-control" rows="4"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>23.</td>
                                        <td>Hobbies / Pasatiempos</td>
                                        <td>
                                            <textarea type="text" name="mne_hobbies" class="border-0 form-control"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>24.</td>
                                        <td>Other taxes than those listed above (exclude payroll deductions)
                                            <div class="small_text">Otros impuestos no mencionados arriba (excluya
                                                deducciones de sueldo)</div>
                                        </td>
                                        <td>
                                            <textarea type="text" name="mne_ott" class="border-0 form-control"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>25.</td>
                                        <td>Other expenses (include expenses of other real properties owned,
                                            professional services
                                            such as counseling and tax/legal advice, etc)
                                            <div class="small_text">Otros gastos (incluya gastos de otra propiedad
                                                mobiliaria suya, de servicios profesionales como
                                                consejería y asesoramiento fiscal /legal, etc.)</div>
                                        </td>
                                        <td>
                                            <textarea type="text" name="mne_oe" class="border-0 form-control" rows="4"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> </td>
                                        <td>Other Monthly installment payments: / Otros pagos a plazos mensuales:</td>
                                        <td>
                                            <textarea type="text" name="mne_omip" class="border-0 form-control"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>26.</td>
                                        <td>Mortgage (other than primary mortgage) / Hipoteca (aparte de la hipoteca
                                            principal)</td>
                                        <td>
                                            <textarea type="text" name="mne_mortgage" class="border-0 form-control"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>27.</td>
                                        <td>Other vehicle payments / Otros pagos de vehículos</td>
                                        <td>
                                            <textarea type="text" name="mne_ovp" class="border-0 form-control"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>28.</td>
                                        <td>Credit card debt (total minimum monthly payments) / Deuda de tarjetas de
                                            crédito (total de pagos mensuales mínimos)</td>
                                        <td>
                                            <textarea type="text" name="mne_ccd" class="border-0 form-control"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>29.</td>
                                        <td>Court ordered obligations / Obligaciones ordenadas por un tribunal</td>
                                        <td>
                                            <textarea type="text" name="mne_coo" class="border-0 form-control"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>30.</td>
                                        <td>Student loans / Préstamos estudiantiles</td>
                                        <td>
                                            <textarea type="text" name="mne_sl" class="border-0 form-control"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>31.</td>
                                        <td>Personal loans / Préstamos personales</td>
                                        <td>
                                            <textarea type="text" name="mne_pl1" class="border-0 form-control"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <textarea type="text" name="mne_pl2" class="border-0 form-control"></textarea>
                                        </td>
                                        <td>
                                            <textarea type="text" name="mne_pl3" class="border-0 form-control"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <textarea type="text" name="mne_pl4" class="border-0 form-control"></textarea>
                                        </td>
                                        <td>
                                            <textarea type="text" name="mne_pl5" class="border-0 form-control"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="text-end pe-lg-3">TOTAL MONTHLY EXPENSES (<span
                                                class="small_text">Add lines 1-31</span>)
                                            <div class="small_text">TOTAL DE GASTOS MENSUALES (Sume las cantidades de
                                                las líneas 1 a 31)</div>
                                        </td>
                                        <td>
                                            <textarea type="text" name="mne_tme" class="border-0 form-control"></textarea>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>


                        @include('layouts.footer17', ['page' => 4])
                    </div>
                </section>
                <section class="section_area row page1 bg-white pt-5 p-lg-5 pe-2 pe-lg-5 p-lg-3 m-3 mt-4  pt-lg-5 pt-4"
                    id="fifth_section">
                    <div class="border-bottom">
                        <div>
                            <div class="small_text d-flex d_sm_block">Petitioner/Joint Petitioner A: <input
                                    type="text" name="5pjp_a"
                                    class=" border-none responsive_input border-0 border-bottom border-dotted shadow-none">
                            </div>
                        </div>
                        <div class="pb-3">
                            <div class="small_text d-flex d_sm_block">Respondent/Joint Petitioner B: <input
                                    type="text" name="5rjp_a"
                                    class=" border-none responsive_input border-0 border-bottom border-dotted shadow-none">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-10 mx-auto">


                        <div class="row">
                            <div class="col-lg-2">6. <b>ASSETS:</b></div>
                            <div class="col-lg-10"> List ALL assets that you own individually and together with the
                                other party without regard to how they have been or will be divided later</div>
                        </div>
                        <div class="row">
                            <div class="col-lg-2 ps-lg-4"> <b>BIENES :</b></div>
                            <div class="col-lg-10"> Enumere TODOS los bienes que sean de su propiedad individual o en
                                conjunto con la otra parte, sin tomar
                                en consideración cómo han sido divididos o cómo van a dividirse más adelante.</div>
                        </div>


                        <div class="ms-lg-3 small_text">If you do not have assets in an asset category, write “none”
                            under the heading and enter “zero” in the
                            estimated value column. If you need more space, please attach additional sheets.</div>
                        <div class="ms-lg-3 small_text">Si no tiene ningún bien en una de las categorías de bienes,
                            escriba “ninguno” debajo del título y escriba “cero” en la columna de
                            valor estimado. Si necesita más espacio, adjunte hojas adicionales, por favor.</div>

                        <div class="table-responsive">
                            <table class="table table-bordered border-dark">
                                <tbody>
                                    <tr>
                                        <td class="small_text px-1  ">
                                            <div class=" small_text"> A = Joint Petitioner A</div>
                                            <div class=" small_text"> A = Solicitante Conjunta A</div>
                                            <div class="d-flex justify-content-between small_text">
                                                <div class="small_text">B=Joint Petitioner B
                                                    <div class="small_text">B=Solicitante Conjunta B</div>
                                                </div>
                                                <div class="ps-2 small_text">T = Together
                                                    <div class="small_text">C = Conjunto</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-center bg-secondary small_text" colspan="3">wnership or
                                            Title Held by <div>Propiedad otitularidad de</div>
                                        </td>
                                        <td class="text-center bg-secondary small_text" colspan="3">Current
                                            Possession <div>Posesión efectiva actual</div>
                                        </td>
                                        <td class="text-center bg-secondary small_text">Amount Owed <div>Monto que se
                                                adeuda</div>
                                        </td>
                                        <td class="text-center bg-secondary small_text">Estimated Value Today</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center bg-secondary small_text">Household Items <div>Valor
                                                estimado al día de hoy</div>
                                        </td>
                                        <td class="text-center bg-secondary small_text">A</td>
                                        <td class="text-center bg-secondary small_text">B</td>
                                        <td class="text-center bg-secondary small_text">T / C</td>
                                        <td class="text-center bg-secondary small_text">A</td>
                                        <td class="text-center bg-secondary small_text">B</td>
                                        <td class="text-center bg-secondary small_text">T / C</td>
                                        <td class="text-center bg-secondary small_text"></td>
                                        <td class="text-center   small_text"></td>
                                    </tr>

                                    <tr>
                                        <td>

                                            <div>Household furniture & accessories </div>
                                            <div class="small_text">Mobiliario y accesorios del hogar</div>
                                        </td>
                                        <td class="text-center"><input type="checkbox" name="wa_a1"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="wa_b1"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="wa_t1"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="ct_a1"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="ct_b1"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="ct_t1"
                                                value="Yes"></td>
                                        <td>
                                            <textarea type="text" name="asset_ao1" class="border-0 form-control" rows="4"></textarea>
                                        </td>
                                        <td>
                                            <textarea type="text" name="asset_evt1" class="border-0 form-control" rows="4"></textarea>
                                        </td>

                                    </tr>

                                    <tr>
                                        <td>
                                            <div>Household appliances</div>
                                            <div>Electrodomésticos</div>
                                        </td>
                                        <td class="text-center"><input type="checkbox" name="wa_a2"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="wa_b2"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="wa_t2"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="ct_a2"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="ct_b2"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="ct_t2"
                                                value="Yes"></td>
                                        <td>
                                            <textarea type="text" name="asset_ao2" class="border-0 form-control"></textarea>
                                        </td>
                                        <td>
                                            <textarea type="text" name="asset_evt2" class="border-0 form-control"></textarea>
                                        </td>

                                    </tr>

                                    <tr>
                                        <td>Kitchen equipment / Equipo de cocina</td>
                                        <td class="text-center"><input type="checkbox" name="wa_a3"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="wa_b3"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="wa_t3"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="ct_a3"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="ct_b3"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="ct_t3"
                                                value="Yes"></td>
                                        <td>
                                            <textarea type="text" name="asset_ao3" class="border-0 form-control"></textarea>
                                        </td>
                                        <td>
                                            <textarea type="text" name="asset_evt3" class="border-0 form-control"></textarea>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <div>China, silver, crystal</div>
                                            <div>Vajilla, platería, cristalería</div>
                                        </td>
                                        <td class="text-center"><input type="checkbox" name="wa_a4"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="wa_b4"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="wa_t4"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="ct_a4"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="ct_b4"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="ct_t4"
                                                value="Yes"></td>
                                        <td>
                                            <textarea type="text" name="asset_ao4" class="border-0 form-control"></textarea>
                                        </td>
                                        <td>
                                            <textarea type="text" name="asset_evt4" class="border-0 form-control"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Jewelry / Joyas</td>
                                        <td class="text-center"><input type="checkbox" name="wa_a4"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="wa_b4"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="wa_t4"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="ct_a4"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="ct_b4"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="ct_t4"
                                                value="Yes"></td>
                                        <td>
                                            <textarea type="text" name="asset_ao4" class="border-0 form-control"></textarea>
                                        </td>
                                        <td>
                                            <textarea type="text" name="asset_evt4" class="border-0 form-control"></textarea>
                                        </td>

                                    </tr>

                                    <tr>
                                        <td>Clothing / Vestimenta</td>
                                        <td class="text-center"><input type="checkbox" name="wa_a5"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="wa_b5"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="wa_t5"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="ct_a5"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="ct_b5"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="ct_t5"
                                                value="Yes"></td>
                                        <td>
                                            <textarea type="text" name="asset_ao5" class="border-0 form-control"></textarea>
                                        </td>
                                        <td>
                                            <textarea type="text" name="asset_evt5" class="border-0 form-control"></textarea>
                                        </td>

                                    </tr>

                                    <tr>
                                        <td>Antiques / Antigüedades</td>
                                        <td class="text-center"><input type="checkbox" name="wa_a6"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="wa_b6"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="wa_t6"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="ct_a6"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="ct_b6"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="ct_t6"
                                                value="Yes"></td>
                                        <td>
                                            <textarea type="text" name="asset_ao6" class="border-0 form-control"></textarea>
                                        </td>
                                        <td>
                                            <textarea type="text" name="asset_evt6" class="border-0 form-control"></textarea>
                                        </td>

                                    </tr>

                                    <tr>
                                        <td>Art / Obras de arte</td>
                                        <td class="text-center"><input type="checkbox" name="wa_a7"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="wa_b7"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="wa_t7"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="ct_a7"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="ct_b7"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="ct_t7"
                                                value="Yes"></td>
                                        <td>
                                            <textarea type="text" name="asset_ao7" class="border-0 form-control"></textarea>
                                        </td>
                                        <td>
                                            <textarea type="text" name="asset_evt7" class="border-0 form-control"></textarea>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <div>Electronic equipment</div>
                                            <div>Equipos electrónicos</div>
                                        </td>
                                        <td class="text-center"><input type="checkbox" name="wa_a8"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="wa_b8"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="wa_t8"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="ct_a8"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="ct_b8"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="ct_t8"
                                                value="Yes"></td>
                                        <td>
                                            <textarea type="text" name="asset_ao8" class="border-0 form-control"></textarea>
                                        </td>
                                        <td>
                                            <textarea type="text" name="asset_evt8" class="border-0 form-control"></textarea>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <div>Sports equipment</div>
                                            <div>Equipos deportivos</div>
                                        </td>
                                        <td class="text-center"><input type="checkbox" name="wa_a9"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="wa_b9"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="wa_t9"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="ct_a9"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="ct_b9"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="ct_t9"
                                                value="Yes"></td>
                                        <td>
                                            <textarea type="text" name="asset_ao9" class="border-0 form-control"></textarea>
                                        </td>
                                        <td>
                                            <textarea type="text" name="asset_evt9" class="border-0 form-control"></textarea>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <div>Recreational vehicles, boats</div>
                                            <div>Botes, vehículos recreativos</div>
                                        </td>
                                        <td class="text-center"><input type="checkbox" name="wa_a10"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="wa_b10"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="wa_t10"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="ct_a10"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="ct_b10"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="ct_t10"
                                                value="Yes"></td>
                                        <td>
                                            <textarea type="text" name="asset_ao10" class="border-0 form-control"></textarea>
                                        </td>
                                        <td>
                                            <textarea type="text" name="asset_evt10" class="border-0 form-control"></textarea>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>Tools / Herramientas</td>
                                        <td class="text-center"><input type="checkbox" name="wa_a11"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="wa_b11"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="wa_t11"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="ct_a11"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="ct_b11"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="ct_t11"
                                                value="Yes"></td>
                                        <td>
                                            <textarea type="text" name="asset_ao11" class="border-0 form-control"></textarea>
                                        </td>
                                        <td>
                                            <textarea type="text" name="asset_evt11" class="border-0 form-control"></textarea>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>Other / Otro</td>
                                        <td class="text-center"><input type="checkbox" name="wa_a12"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="wa_b12"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="wa_t12"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="ct_a12"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="ct_b12"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="ct_t12"
                                                value="Yes"></td>
                                        <td>
                                            <textarea type="text" name="asset_ao12" class="border-0 form-control"></textarea>
                                        </td>
                                        <td>
                                            <textarea type="text" name="asset_evt12" class="border-0 form-control"></textarea>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>Other / Otro</td>
                                        <td class="text-center"><input type="checkbox" name="wa_a13"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="wa_b13"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="wa_t13"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="ct_a13"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="ct_b13"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="ct_t13"
                                                value="Yes"></td>
                                        <td>
                                            <textarea type="text" name="asset_ao13" class="border-0 form-control"></textarea>
                                        </td>
                                        <td>
                                            <textarea type="text" name="asset_evt13" class="border-0 form-control"></textarea>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td class="text-center bg-secondary">
                                            <div><b>Automobiles:</b> <br>
                                                Year, Make, Model</div>
                                            <div><b>Automóviles:</b> <br>Año, marca, modelo</div>
                                        </td>
                                        <td class="text-center bg-secondary fw-bold">A</td>
                                        <td class="text-center bg-secondary fw-bold">B</td>
                                        <td class="text-center bg-secondary fw-bold">T / C</td>
                                        <td class="text-center bg-secondary fw-bold">A</td>
                                        <td class="text-center bg-secondary fw-bold">B</td>
                                        <td class="text-center bg-secondary fw-bold">T / C</td>
                                        <td class="text-center bg-secondary fw-bold">
                                            <div>Amount Owed </div>
                                            <div>Monto que se adeuda</div>
                                        </td>
                                        <td class="text-center bg-secondary fw-bold">
                                            <div>Estimated Value Today</div>
                                            <div>Valor estimado al día de hoy</div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <textarea type="text" name="automobile_item1" class="border-0 form-control"></textarea>
                                        </td>
                                        <td class="text-center"><input type="checkbox" name="automobile_wa_a1"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="automobile_wa_b1"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="automobile_wa_t1"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="automobilesct_a1"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="automobilesct_b1"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="automobilesct_at1"
                                                value="Yes"></td>
                                        <td>
                                            <textarea type="text" name="automobile_ao1" class="border-0 form-control"> </textarea>
                                        </td>
                                        <td>
                                            <textarea type="text" name="automobile_evt1" class="border-0 form-control"></textarea>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <textarea type="text" name="automobile_item2" class="border-0 form-control"></textarea>
                                        </td>
                                        <td class="text-center"><input type="checkbox" name="automobile_wa_a2"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="automobile_wa_b2"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="automobile_wa_t2"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="automobilesct_a2"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="automobilesct_b2"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="automobilesct_at2"
                                                value="Yes"></td>
                                        <td>
                                            <textarea type="text" name="automobile_ao2" class="border-0 form-control"></textarea>
                                        </td>
                                        <td>
                                            <textarea type="text" name="automobile_evt2" class="border-0 form-control"></textarea>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <textarea type="text" name="automobile_item3" class="border-0 form-control"></textarea>
                                        </td>
                                        <td class="text-center"><input type="checkbox" name="automobile_wa_a3"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="automobile_wa_b3"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="automobile_wa_t3"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="automobilesct_a3"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="automobilesct_b3"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="automobilesct_at3"
                                                value="Yes"></td>
                                        <td>
                                            <textarea type="text" name="automobile_ao3" class="border-0 form-control"></textarea>
                                        </td>
                                        <td>
                                            <textarea type="text" name="automobile_evt3" class="border-0 form-control"></textarea>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <textarea type="text" name="automobile_item4" class="border-0 form-control"></textarea>
                                        </td>
                                        <td class="text-center"><input type="checkbox" name="automobile_wa_a4"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="automobile_wa_b4"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="automobile_wa_t4"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="automobilesct_a4"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="automobilesct_b4"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="automobilesct_at4"
                                                value="Yes"></td>
                                        <td>
                                            <textarea type="text" name="automobile_ao4" class="border-0 form-control"></textarea>
                                        </td>
                                        <td>
                                            <textarea type="text" name="automobile_evt4" class="border-0 form-control"></textarea>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <textarea type="text" name="automobile_item5" class="border-0 form-control"></textarea>
                                        </td>
                                        <td class="text-center"><input type="checkbox" name="automobile_wa_a5"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="automobile_wa_b5"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="automobile_wa_t5"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="automobilesct_a5"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="automobilesct_b5"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="automobilesct_at5"
                                                value="Yes"></td>
                                        <td>
                                            <textarea type="text" name="automobile_ao5" class="border-0 form-control"></textarea>
                                        </td>
                                        <td>
                                            <textarea type="text" name="automobile_evt5" class="border-0 form-control"></textarea>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td class="text-center bg-secondary">
                                            <div><b>Life Insurance:</b> <br> Name of Company & Policy #</div>
                                            <div><b>Seguro de vida</b> <br> Nombre de la compañía y N° de póliza</div>
                                        </td>
                                        <td class="text-center bg-secondary fw-bold">A</td>
                                        <td class="text-center bg-secondary fw-bold">B</td>
                                        <td class="text-center bg-secondary fw-bold">T / C</td>
                                        <td colspan="3" class="text-center bg-secondary fw-bold">
                                            <div>Beneficiary</div>
                                            <div>Beneficiario(a)</div>
                                        </td>
                                        <td class="text-center bg-secondary fw-bold">
                                            <div>Face Amount </div>
                                            <div>Valor nominal</div>
                                        </td>
                                        <td class="text-center bg-secondary fw-bold">
                                            <div>Cash Value Today</div>
                                            <div>Valor efectivo al día de hoy</div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <textarea type="text" name="li_item1" class="border-0 form-control"></textarea>
                                        </td>
                                        <td class="text-center"><input type="checkbox" name="li_wa_a1"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="li_wa_b1"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="li_wa_t1"
                                                value="Yes"></td>
                                        <td colspan="3">
                                            <textarea type="text" name="li_beneficiary1" class="border-0 form-control"></textarea>
                                        </td>
                                        <td>
                                            <textarea type="text" name="li_amount1" class="border-0 form-control"></textarea>
                                        </td>
                                        <td>
                                            <textarea type="text" name="li_esv1" class="border-0 form-control"></textarea>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>




                        @include('layouts.footer17', ['page' => 5])
                    </div>

                </section>
                <section
                    class="section_area  row page1 bg-white pt-5 p-lg-5 pe-2 pe-lg-5 p-lg-3 m-3 mt-4  pt-lg-5 pt-4"
                    id="sixth_section">
                    <div class="border-bottom">
                        <div class="">
                            <div class="small_text d-flex d_sm_block">Petitioner/Joint Petitioner A: <input
                                    type="text" name="6pjp_a"
                                    class=" border-none responsive_input border-0 border-bottom border-dotted shadow-none">
                            </div>
                        </div>
                        <div class="pb-3">
                            <div class="small_text d-flex d_sm_block">Respondent/Joint Petitioner B: <input
                                    type="text" name="6rjp_a"
                                    class=" border-none responsive_input border-0 border-bottom border-dotted shadow-none">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-10 mx-auto">


                        <div class="table-responsive">
                            <table class="table table-bordered border-dark">
                                <tbody>
                                    <tr>
                                        <td>
                                            <textarea type="text" name="li_item2" class="border-0 form-control"></textarea>
                                        </td>
                                        <td class="text-center"><input type="checkbox" name="li_wa_a2"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="li_wa_b2"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="li_wa_t2"
                                                value="Yes"></td>
                                        <td colspan="3">
                                            <textarea type="text" name="li_beneficiary2" class="border-0 form-control"></textarea>
                                        </td>
                                        <td>
                                            <textarea type="text" name="li_amount2" class="border-0 form-control"></textarea>
                                        </td>
                                        <td>
                                            <textarea type="text" name="li_esv2" class="border-0 form-control"></textarea>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <textarea type="text" name="li_item3" class="border-0 form-control"></textarea>
                                        </td>
                                        <td class="text-center"><input type="checkbox" name="li_wa_a3"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="li_wa_b3"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="li_wa_t3"
                                                value="Yes"></td>
                                        <td colspan="3">
                                            <textarea type="text" name="li_beneficiary3" class="border-0 form-control"></textarea>
                                        </td>
                                        <td>
                                            <textarea type="text" name="li_amount3" class="border-0 form-control"></textarea>
                                        </td>
                                        <td>
                                            <textarea type="text" name="li_esv3" class="border-0 form-control"></textarea>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <textarea type="text" name="li_item4" class="border-0 form-control"></textarea>
                                        </td>
                                        <td class="text-center"><input type="checkbox" name="li_wa_a4"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="li_wa_b4"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="li_wa_t4"
                                                value="Yes"></td>
                                        <td colspan="3">
                                            <textarea type="text" name="li_beneficiary4" class="border-0 form-control"></textarea>
                                        </td>
                                        <td>
                                            <textarea type="text" name="li_amount4" class="border-0 form-control"></textarea>
                                        </td>
                                        <td>
                                            <textarea type="text" name="li_esv4" class="border-0 form-control"></textarea>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <textarea type="text" name="li_item5" class="border-0 form-control"></textarea>
                                        </td>
                                        <td class="text-center"><input type="checkbox" name="li_wa_a5"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="li_wa_b5"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="li_wa_t5"
                                                value="Yes"></td>
                                        <td colspan="3">
                                            <textarea type="text" name="li_beneficiary5" class="border-0 form-control"></textarea>
                                        </td>
                                        <td>
                                            <textarea type="text" name="li_amount5" class="border-0 form-control"></textarea>
                                        </td>
                                        <td>
                                            <textarea type="text" name="li_esv5" class="border-0 form-control"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center bg-secondary">
                                            <div><b>Business Interests</b> <br> Name of Business & Address</div>
                                            <div><b>Intereses empresariales</b> <br>Nombre y dirección de la empresa
                                            </div>
                                        </td>
                                        <td class="text-center bg-secondary fw-bold">A</td>
                                        <td class="text-center bg-secondary fw-bold">B</td>
                                        <td class="text-center bg-secondary fw-bold">T / C</td>
                                        <td colspan="3" class="text-center bg-secondary fw-bold">
                                            <div>Type of Business</div>
                                            <div>Tipo de empresa</div>
                                        </td>
                                        <td class="text-center bg-secondary fw-bold">
                                            <div>% of Ownership</div>
                                            <div>% de propiedad</div>
                                        </td>
                                        <td class="text-center bg-secondary fw-bold">
                                            <div>Value MINUS Indebtedness</div>
                                            <div>Valor MENOS adeudo</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <textarea type="text" name="bi_noc1" class="border-0 form-control"></textarea>
                                        </td>
                                        <td class="text-center"><input type="checkbox" name="bi_a1"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="bi_b1"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="bi_ti"
                                                value="Yes"></td>
                                        <td colspan="3">
                                            <textarea type="text" name="bi_tob1" class="border-0 form-control"></textarea>
                                        </td>
                                        <td>
                                            <textarea type="text" name="bi_ownership1" class="border-0 form-control"></textarea>
                                        </td>
                                        <td>
                                            <textarea type="text" name="bi_vmi1" class="border-0 form-control"></textarea>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <textarea type="text" name="bi_noc2" class="border-0 form-control"></textarea>
                                        </td>
                                        <td class="text-center"><input type="checkbox" name="bi_a2"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="bi_b2"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="bi_t2"
                                                value="Yes"></td>
                                        <td colspan="3">
                                            <textarea type="text" name="bi_tob2" class="border-0 form-control"></textarea>
                                        </td>
                                        <td>
                                            <textarea type="text" name="bi_ownership2" class="border-0 form-control"></textarea>
                                        </td>
                                        <td>
                                            <textarea type="text" name="bi_vmi2" class="border-0 form-control"></textarea>
                                        </td>

                                    </tr>

                                    <tr>
                                        <td rowspan="2" class="small_text px-1 bg-secondary">
                                            <div class="text-center fw-bold"></div>
                                            <div> Securities: Stocks, Bonds, Mutual Funds, Commodity Accounts</div>
                                            <div>Name of Company & # of shares</div>
                                            <div> Instrumentos bursátiles: acciones, valores, fondos mutuos, cuentas de
                                                activos</div>
                                            <div>Nombre de la compañía y cantidad de acciones</div>
                                        </td>
                                        <td class=" bg-secondary small_text" colspan="5">
                                            <div class="text-center">Ownership or Title held by</div>
                                            <div>Propiedad o titularidad de</div>
                                            <div>A = Joint Petitioner A</div>
                                            <div>A = Solicitante Conjunta A</div>
                                            <div>B = Joint Petitioner B</div>
                                            <div>B = Solicitante Conjunta B</div>
                                            <div>T = Together</div>
                                            <div>C=Conjunto</div>
                                        </td>
                                        <td class="text-center bg-secondary small_text" colspan="3">
                                            <div>Value Today </div>
                                            <div>Valor al día
                                                actual</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center bg-secondary small_text px-3">A</td>
                                        <td class="text-center bg-secondary small_text px-3">B</td>
                                        <td class="text-center bg-secondary small_text px-3">T</td>
                                        <td colspan="2" rowspan="7" class=" bg-secondary"> </td>
                                        <td colspan="3">
                                            <textarea type="text" name="value_today0" class="border-0 form-control"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <textarea type="text" name="company_name1" class="border-0 form-control"></textarea>
                                        </td>
                                        <td class="text-center"><input type="checkbox" name="ot_a1"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="ot_b1"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="ot_t1"
                                                value="Yes"></td>
                                        <td colspan="3">
                                            <textarea type="text" name="value_today_1" class="border-0 form-control"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <textarea type="text" name="company_name2" class="border-0 form-control"></textarea>
                                        </td>
                                        <td class="text-center"><input type="checkbox" name="ot_a2"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="ot_b2"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="ot_t2"
                                                value="Yes"></td>
                                        <td colspan="3">
                                            <textarea type="text" name="value_today_2" class="border-0 form-control"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <textarea type="text" name="company_name3" class="border-0 form-control"></textarea>
                                        </td>
                                        <td class="text-center"><input type="checkbox" name="ot_a3"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="ot_b3"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="ot_t3"
                                                value="Yes"></td>
                                        <td colspan="3">
                                            <textarea type="text" name="value_today_3" class="border-0 form-control"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <textarea type="text" name="company_name4" class="border-0 form-control"></textarea>
                                        </td>
                                        <td class="text-center"><input type="checkbox" name="ot_a4"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="ot_b4"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="ot_t4"
                                                value="Yes"></td>
                                        <td colspan="3">
                                            <textarea type="text" name="value_today_4" class="border-0 form-control"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <textarea type="text" name="company_name5" class="border-0 form-control"></textarea>
                                        </td>
                                        <td class="text-center"><input type="checkbox" name="ot_a5"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="ot_b5"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="ot_t5"
                                                value="Yes"></td>
                                        <td colspan="3">
                                            <textarea type="text" name="value_today_5" class="border-0 form-control"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <textarea type="text" name="company_name6" class="border-0 form-control"></textarea>
                                        </td>
                                        <td class="text-center"><input type="checkbox" name="ot_a6"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="ot_b6"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="ot_t6"
                                                value="Yes"></td>
                                        <td colspan="3">
                                            <textarea type="text" name="value_today_6" class="border-0 form-control"></textarea>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="bg-secondary">
                                            <div class="fw-bold text-center">Pension, Retirement Accounts, Deferred
                                                Compensation, 401K Plans, IRAs, Profit Sharing, etc.</div>
                                            <div class="text-center small_text">Name of Company & Type of PlanName of
                                                Company & Type of Plan</div>
                                            <div class="fw-bold text-center">Pensión, cuentas de jubilación,
                                                remuneración diferida, planes
                                                401K, IRAs (arreglos individuales
                                                de jubilación), participación en
                                                beneficios, etc.</div>
                                            <div class="text-center small_text"> Nombre de la compañía y tipo de plan
                                            </div>
                                        </td>
                                        <td class="text-center bg-secondary small_text">A</td>
                                        <td class="text-center bg-secondary small_text">B</td>
                                        <td class="text-center bg-secondary small_text">T / C</td>
                                        <td class="text-center bg-secondary small_text">% Vested if known <br>%
                                            Adquirido
                                            si se sabe</td>
                                        <td class="text-center bg-secondary small_text">Date of Valuation <br>Fecha de
                                            tasación</td>
                                        <td colspan="3" class="text-center bg-secondary small_text">Value Today
                                            <br>Valor al día
                                            actual
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <textarea type="text" name="pa_noc1" class="border-0 form-control"></textarea>
                                        </td>
                                        <td class="text-center"><input type="checkbox" name="pa_a1"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="pa_b1"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="pa_t1"
                                                value="Yes"></td>
                                        <td>
                                            <textarea type="text" name="pa_vik1" class="border-0 form-control"></textarea>
                                        </td>
                                        <td>
                                            <textarea type="text" name="pa_dov1" class="border-0 form-control"></textarea>
                                        </td>
                                        <td colspan="3">
                                            <textarea type="text" name="pa_vt1" class="border-0 form-control"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <textarea type="text" name="pa_noc2" class="border-0 form-control"></textarea>
                                        </td>
                                        <td class="text-center"><input type="checkbox" name="pa_a2"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="pa_b2"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="pa_t2"
                                                value="Yes"></td>
                                        <td>
                                            <textarea type="text" name="pa_vik2" class="border-0 form-control"></textarea>
                                        </td>
                                        <td>
                                            <textarea type="text" name="pa_dov2" class="border-0 form-control"></textarea>
                                        </td>
                                        <td colspan="3">
                                            <textarea type="text" name="pa_vt2" class="border-0 form-control"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <textarea type="text" name="pa_noc3" class="border-0 form-control"></textarea>
                                        </td>
                                        <td class="text-center"><input type="checkbox" name="pa_a3"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="pa_b3"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="pa_t3"
                                                value="Yes"></td>
                                        <td>
                                            <textarea type="text" name="pa_vik3" class="border-0 form-control"></textarea>
                                        </td>
                                        <td>
                                            <textarea type="text" name="pa_dov3" class="border-0 form-control"></textarea>
                                        </td>
                                        <td colspan="3">
                                            <textarea type="text" name="pa_vt3" class="border-0 form-control"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <textarea type="text" name="pa_noc4" class="border-0 form-control"></textarea>
                                        </td>
                                        <td class="text-center"><input type="checkbox" name="pa_a4"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="pa_b4"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="pa_t4"
                                                value="Yes"></td>
                                        <td>
                                            <textarea type="text" name="pa_vik4" class="border-0 form-control"></textarea>
                                        </td>
                                        <td>
                                            <textarea type="text" name="pa_dov4" class="border-0 form-control"></textarea>
                                        </td>
                                        <td colspan="3">
                                            <textarea type="text" name="pa_vt4" class="border-0 form-control"></textarea>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                        @include('layouts.footer17', ['page' => 6])
                    </div>

                </section>
                <section
                    class="section_area  row page1 bg-white pt-5 p-lg-5 pe-2 pe-lg-5 p-lg-3 m-3 mt-4  pt-lg-5 pt-4"
                    id="seventh_section">
                    <div class="border-bottom">
                        <div class="">
                            <div class="small_text d-flex d_sm_block">Petitioner/Joint Petitioner A: <input
                                    type="text" name="7pjp_a"
                                    class=" border-none responsive_input border-0 border-bottom border-dotted shadow-none">
                            </div>

                        </div>
                        <div class="pb-3">
                            <div class="small_text d-flex d_sm_block">Respondent/Joint Petitioner B: <input
                                    type="text" name="7rjp_b"
                                    class=" border-none responsive_input border-0 border-bottom border-dotted shadow-none">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-10 mx-auto">

                        <div class="table-responsive ps-lg-3">
                            <table class="table table-bordered border-dark">
                                <tbody>
                                    <tr>
                                        <td>
                                            <textarea type="text" name="pa_noc5" class="border-0 form-control"></textarea>
                                        </td>
                                        <td class="text-center px-3"><input type="checkbox" name="pa_a5"
                                                value="Yes"></td>
                                        <td class="text-center px-3"><input type="checkbox" name="pa_b5"
                                                value="Yes"></td>
                                        <td class="text-center px-3"><input type="checkbox" name="pa_t5"
                                                value="Yes"></td>
                                        <td>
                                            <textarea type="text" name="pa_vik5" class="border-0 form-control"></textarea>
                                        </td>
                                        <td>
                                            <textarea type="text" name="pa_dov5" class="border-0 form-control"></textarea>
                                        </td>
                                        <td>
                                            <textarea type="text" name="pa_vt5" class="border-0 form-control"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="bg-secondary">
                                            <div class="fw-bold text-center">Cash and Deposit Accounts (Savings and
                                                Checking)</div>
                                            <div class="text-center small_text">Name of Bank or Financial Institution
                                            </div>
                                            <div class="fw-bold text-center">Cuentas de dinero en efectivo yde
                                                depósitos (caja de ahorro y cuenta corriente)</div>
                                            <div class="text-center small_text">Nombre del banco o de la institución
                                                financiera</div>
                                        </td>
                                        <td class="text-center bg-secondary small_text">A</td>
                                        <td class="text-center bg-secondary small_text">B</td>
                                        <td class="text-center bg-secondary small_text">T / C</td>
                                        <td class="text-center bg-secondary small_text">Type of Account <br> Tipo de
                                            cuenta</td>
                                        <td class="text-center bg-secondary small_text">Account # Last 4 digits <br>
                                            N° de cuenta 4 últimas cifras</td>
                                        <td class="text-center bg-secondary small_text">Balance Today <br> Balance al
                                            día actual</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <textarea type="text" name="cad_nob1" class="border-0 form-control"></textarea>
                                        </td>
                                        <td class="text-center"><input type="checkbox" name="cad_a1"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="cad_b1"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="cad_t1"
                                                value="Yes"></td>
                                        <td>
                                            <textarea type="text" name="cad_toa1" class="border-0 form-control"></textarea>
                                        </td>
                                        <td>
                                            <textarea type="text" name="cad_ald1" class="border-0 form-control"></textarea>
                                        </td>
                                        <td>
                                            <textarea type="text" name="cad_bt1" class="border-0 form-control"></textarea>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <textarea type="text" name="cad_nob2" class="border-0 form-control"></textarea>
                                        </td>
                                        <td class="text-center"><input type="checkbox" name="cad_a2"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="cad_b2"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="cad_t2"
                                                value="Yes"></td>
                                        <td>
                                            <textarea type="text" name="cad_toa2" class="border-0 form-control"></textarea>
                                        </td>
                                        <td>
                                            <textarea type="text" name="cad_ald2" class="border-0 form-control"></textarea>
                                        </td>
                                        <td>
                                            <textarea type="text" name="cad_bt2" class="border-0 form-control"></textarea>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <textarea type="text" name="cad_nob3" class="border-0 form-control"></textarea>
                                        </td>
                                        <td class="text-center"><input type="checkbox" name="cad_a3"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="cad_b3"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="cad_t3"
                                                value="Yes"></td>
                                        <td>
                                            <textarea type="text" name="cad_toa3" class="border-0 form-control"></textarea>
                                        </td>
                                        <td>
                                            <textarea type="text" name="cad_ald3" class="border-0 form-control"></textarea>
                                        </td>
                                        <td>
                                            <textarea type="text" name="cad_bt3" class="border-0 form-control"></textarea>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <textarea type="text" name="cad_nob4" class="border-0 form-control"></textarea>
                                        </td>
                                        <td class="text-center"><input type="checkbox" name="cad_a4"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="cad_b4"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="cad_t4"
                                                value="Yes"></td>
                                        <td>
                                            <textarea type="text" name="cad_toa4" class="border-0 form-control"></textarea>
                                        </td>
                                        <td>
                                            <textarea type="text" name="cad_ald4" class="border-0 form-control"></textarea>
                                        </td>
                                        <td>
                                            <textarea type="text" name="cad_bt4" class="border-0 form-control"></textarea>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td class="bg-secondary">
                                            <div class="fw-bold text-center">Other Personal Property</div>
                                            <div class="text-center small_text">Description of Asset</div>
                                            <div class="fw-bold text-center">Otro bien mueble</div>
                                            <div class="text-center small_text">Descripción del bien</div>
                                        </td>
                                        <td class="text-center bg-secondary small_text">A</td>
                                        <td class="text-center bg-secondary small_text">B</td>
                                        <td class="text-center bg-secondary small_text">T / C</td>
                                        <td class="text-center bg-secondary small_text">Type of
                                            Property <br> Tipo de bien</td>
                                        <td rowspan="6" class="text-center bg-secondary small_text"> </td>
                                        <td class="text-center bg-secondary small_text">Value <br> Valor</td>

                                    </tr>

                                    <tr>
                                        <td>
                                            <textarea type="text" name="op_doa1" class="border-0 form-control"></textarea>
                                        </td>
                                        <td class="text-center"><input type="checkbox" name="op_a1"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="op_b1"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="op_t1"
                                                value="Yes"></td>
                                        <td>
                                            <textarea type="text" name="op_top1" class="border-0 form-control"></textarea>
                                        </td>
                                        <td>
                                            <textarea type="text" name="op_v1" class="border-0 form-control"></textarea>
                                        </td>

                                    </tr>

                                    <tr>
                                        <td>
                                            <textarea type="text" name="op_doa2" class="border-0 form-control"></textarea>
                                        </td>
                                        <td class="text-center"><input type="checkbox" name="op_a2"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="op_b2"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="op_t2"
                                                value="Yes"></td>
                                        <td>
                                            <textarea type="text" name="op_top2" class="border-0 form-control"></textarea>
                                        </td>
                                        <td>
                                            <textarea type="text" name="op_v2" class="border-0 form-control"></textarea>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <textarea type="text" name="op_doa3" class="border-0 form-control"></textarea>
                                        </td>
                                        <td class="text-center"><input type="checkbox" name="op_a3"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="op_b3"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="op_t3"
                                                value="Yes"></td>
                                        <td>
                                            <textarea type="text" name="op_top3" class="border-0 form-control"></textarea>
                                        </td>
                                        <td>
                                            <textarea type="text" name="op_v3" class="border-0 form-control"></textarea>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <textarea type="text" name="op_doa4" class="border-0 form-control"></textarea>
                                        </td>
                                        <td class="text-center"><input type="checkbox" name="op_a4"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="op_b4"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="op_t4"
                                                value="Yes"></td>
                                        <td>
                                            <textarea type="text" name="op_top4" class="border-0 form-control"></textarea>
                                        </td>
                                        <td>
                                            <textarea type="text" name="op_v4" class="border-0 form-control"></textarea>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <textarea type="text" name="op_doa5" class="border-0 form-control"></textarea>
                                        </td>
                                        <td class="text-center"><input type="checkbox" name="op_a5"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="op_b5"
                                                value="Yes"></td>
                                        <td class="text-center"><input type="checkbox" name="op_t5"
                                                value="Yes"></td>
                                        <td>
                                            <textarea type="text" name="op_top5" class="border-0 form-control"></textarea>
                                        </td>
                                        <td>
                                            <textarea type="text" name="op_v5" class="border-0 form-control"></textarea>
                                        </td>

                                    </tr>
                                    <div class="table-responsive">
                                        <table class="table table-bordered border-dark">
                                            <tbody>
                                                <tr>
                                                    <td rowspan="3" colspan="2" class="small_text px-1  ">
                                                        <div class="text-center fw-bold"> Assets Acquired</div>
                                                        <div>Description of Asset</div>
                                                        <div class="text-center fw-bold">Bienes adquiridos</div>
                                                        <div>Descripción del bien</div>
                                                    </td>
                                                    <td class=" bg-secondary small_text ext-center" colspan="3">
                                                        Ownership <br> Propiedad</td>
                                                    <td class=" bg-secondary small_text ext-center" colspan="3">
                                                        Acquired by <br> Fecha de adquisición</td>
                                                    <td rowspan="3" class="text-center bg-secondary small_text">
                                                        Date Acquired <br> Fecha de adquisición</td>
                                                    <td rowspan="3" class="text-center bg-secondary small_text">
                                                        Value Today <br>Valor al día
                                                        actual</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="3">
                                                        <div>A = Joint Petitioner A</div>
                                                        <div>A = Solicitante Conjunta A</div>
                                                        <div>B = Joint Petitioner B</div>
                                                        <div>B = Solicitante
                                                            Conjunta B</div>
                                                        <div>T = Together</div>
                                                        <div>C = Conjunto</div>
                                                    </td>
                                                    <td colspan="3">
                                                        <div>G - Gift</div>
                                                        <div>I - Inherited</div>
                                                        <div>B - Before Marriage</div>
                                                        <div>R – Regalo</div>
                                                        <div>H – Heredado</div>
                                                        <div>A – Antes de matrimonio</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">A</td>
                                                    <td class="text-center">B</td>
                                                    <td class="text-center px-3">T / C</td>
                                                    <td class="text-center">G / R</td>
                                                    <td class="text-center">I / H</td>
                                                    <td class="text-center">B / A</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">
                                                        <textarea type="text" name="aa_doa1" class="border-0 form-control"></textarea>
                                                    </td>
                                                    <td class="text-center"><input type="checkbox" name="o_a1"
                                                            value="Yes"></td>
                                                    <td class="text-center"><input type="checkbox" name="o_b1"
                                                            value="Yes"></td>
                                                    <td class="text-center"><input type="checkbox" name="o_t1"
                                                            value="Yes"></td>
                                                    <td class="text-center"><input type="checkbox" name="a_a1"
                                                            value="Yes"></td>
                                                    <td class="text-center"><input type="checkbox" name="a_b1"
                                                            value="Yes"></td>
                                                    <td class="text-center"><input type="checkbox" name="a_t1"
                                                            value="Yes"></td>
                                                    <td>
                                                        <textarea type="text" name="date_acquired1" class="border-0 form-control"></textarea>
                                                    </td>
                                                    <td>
                                                        <textarea type="text" name="aa_vt1" class="border-0 form-control"></textarea>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td colspan="2">
                                                        <textarea type="text" name="aa_doa2" class="border-0 form-control"></textarea>
                                                    </td>
                                                    <td class="text-center"><input type="checkbox" name="o_a2"
                                                            value="Yes"></td>
                                                    <td class="text-center"><input type="checkbox" name="o_b2"
                                                            value="Yes"></td>
                                                    <td class="text-center"><input type="checkbox" name="o_t2"
                                                            value="Yes"></td>
                                                    <td class="text-center"><input type="checkbox" name="a_a2"
                                                            value="Yes"></td>
                                                    <td class="text-center"><input type="checkbox" name="a_b2"
                                                            value="Yes"></td>
                                                    <td class="text-center"><input type="checkbox" name="a_t2"
                                                            value="Yes"></td>
                                                    <td>
                                                        <textarea type="text" name="date_acquired2" class="border-0 form-control"></textarea>
                                                    </td>
                                                    <td>
                                                        <textarea type="text" name="aa_vt2" class="border-0 form-control"></textarea>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td colspan="2">
                                                        <textarea type="text" name="aa_doa3" class="border-0 form-control"></textarea>
                                                    </td>
                                                    <td class="text-center"><input type="checkbox" name="o_a3"
                                                            value="Yes"></td>
                                                    <td class="text-center"><input type="checkbox" name="o_b3"
                                                            value="Yes"></td>
                                                    <td class="text-center"><input type="checkbox" name="o_t3"
                                                            value="Yes"></td>
                                                    <td class="text-center"><input type="checkbox" name="a_a3"
                                                            value="Yes"></td>
                                                    <td class="text-center"><input type="checkbox" name="a_b3"
                                                            value="Yes"></td>
                                                    <td class="text-center"><input type="checkbox" name="a_t3"
                                                            value="Yes"></td>
                                                    <td>
                                                        <textarea type="text" name="date_acquired3" class="border-0 form-control"></textarea>
                                                    </td>
                                                    <td>
                                                        <textarea type="text" name="aa_vt3" class="border-0 form-control"></textarea>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td colspan="2">
                                                        <textarea type="text" name="aa_doa4" class="border-0 form-control"></textarea>
                                                    </td>
                                                    <td class="text-center"><input type="checkbox" name="o_a4"
                                                            value="Yes"></td>
                                                    <td class="text-center"><input type="checkbox" name="o_b4"
                                                            value="Yes"></td>
                                                    <td class="text-center"><input type="checkbox" name="o_t4"
                                                            value="Yes"></td>
                                                    <td class="text-center"><input type="checkbox" name="a_a4"
                                                            value="Yes"></td>
                                                    <td class="text-center"><input type="checkbox" name="a_b4"
                                                            value="Yes"></td>
                                                    <td class="text-center"><input type="checkbox" name="a_t4"
                                                            value="Yes"></td>
                                                    <td>
                                                        <textarea type="text" name="date_acquired4" class="border-0 form-control"></textarea>
                                                    </td>
                                                    <td>
                                                        <textarea type="text" name="aa_vt4" class="border-0 form-control"></textarea>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td colspan="2">
                                                        <textarea type="text" name="aa_doa5" class="border-0 form-control"></textarea>
                                                    </td>
                                                    <td class="text-center"><input type="checkbox" name="o_a5"
                                                            value="Yes"></td>
                                                    <td class="text-center"><input type="checkbox" name="o_b5"
                                                            value="Yes"></td>
                                                    <td class="text-center"><input type="checkbox" name="o_t5"
                                                            value="Yes"></td>
                                                    <td class="text-center"><input type="checkbox" name="a_a5"
                                                            value="Yes"></td>
                                                    <td class="text-center"><input type="checkbox" name="a_b5"
                                                            value="Yes"></td>
                                                    <td class="text-center"><input type="checkbox" name="a_t5"
                                                            value="Yes"></td>
                                                    <td>
                                                        <textarea type="text" name="date_acquired5" class="border-0 form-control"></textarea>
                                                    </td>
                                                    <td>
                                                        <textarea type="text" name="aa_vt5" class="border-0 form-control"></textarea>
                                                    </td>
                                                </tr>


                                            </tbody>
                                        </table>
                                    </div>


                                </tbody>
                            </table>
                        </div>

                        @include('layouts.footer17', ['page' => 7])

                </section>
                <section
                    class="section_area  row page1 bg-white pt-5 p-lg-5 pe-2 pe-lg-5 p-lg-3 m-3 mt-4  pt-lg-5 pt-4"
                    id="eighth_section">
                    <div class="border-bottom">
                        <div class="">
                            <div class="small_text d-flex d_sm_block">Petitioner/Joint Petitioner A: <input
                                    type="text" name="7pjp_a"
                                    class=" border-none responsive_input border-0 border-bottom border-dotted shadow-none">
                            </div>

                        </div>
                        <div class="pb-3">
                            <div class="small_text d-flex d_sm_block">Respondent/Joint Petitioner B: <input
                                    type="text" name="7rjp_b"
                                    class=" border-none responsive_input border-0 border-bottom border-dotted shadow-none">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-10 mx-auto">

                        <div class="table-responsive ps-lg-3">
                            <table class="table table-bordered border-dark">
                                <tbody>
                                    <tr>
                                        <td>Real Estate / Inmuebles</td>
                                        <td colspan="3" class="text-center">Parcel 1 / Parcela 1</td>
                                        <td colspan="4" class="text-center">Parcel 2 / Parcela 2</td>
                                        <td colspan="2" class="text-center">Parcel 3 / Parcela 3</td>
                                    </tr>
                                    <tr>
                                        <td>Type of Property <br> Tipo de propiedad</td>
                                        <td colspan="3" class="text-center">
                                            <textarea type="text" name="top1" class="border-0 form-control"></textarea>
                                        </td>
                                        <td colspan="4" class="text-center">
                                            <textarea type="text" name="top2" class="border-0 form-control"></textarea>
                                        </td>
                                        <td colspan="2" class="text-center">
                                            <textarea type="text" name="top3" class="border-0 form-control"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Address: Street, City, State <br> State / Dirección: callMONTHLY DEDUCTIONS
                                            / DEDUCCIONES MENSUALES
                                            e,
                                            ciudad, estado</td>
                                        <td colspan="3" class="text-center">
                                            <textarea type="text" name="ascs1" class="border-0 form-control" rows="4"></textarea>
                                        </td>
                                        <td colspan="4" class="text-center">
                                            <textarea type="text" name="ascs2" class="border-0 form-control" rows="4"></textarea>
                                        </td>
                                        <td colspan="2" class="text-center">
                                            <textarea type="text" name="ascs3" class="border-0 form-control" rows="4"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Ownership/Title <br> Propiedad/Titularidad</td>
                                        <td colspan="3" class="text-center">
                                            <input type="checkbox" class="" name="ownership_a1"><span
                                                class="pe-2"> A</span>
                                            <input type="checkbox" class="" name="ownership_b1"><span
                                                class="pe-2"> B</span>
                                            <input type="checkbox" class="" name="ownership_t1"><span
                                                class="pe-2"> T / C</span>
                                        </td>
                                        <td colspan="4" class="text-center">
                                            <input type="checkbox" class="" name="ownership_a2"><span
                                                class="pe-2"> A</span>
                                            <input type="checkbox" class="" name="ownership_b2"><span
                                                class="pe-2"> B</span>
                                            <input type="checkbox" class="" name="ownership_t2"><span
                                                class="pe-2"> T / C</span>
                                        </td>
                                        <td colspan="2" class="text-center">
                                            <input type="checkbox" class="" name="ownership_a3"><span
                                                class="pe-2"> A</span>
                                            <input type="checkbox" class="" name="ownership_b3"><span
                                                class="pe-2"> B</span>
                                            <input type="checkbox" class="" name="ownership_t3"><span
                                                class="pe-2"> T / C</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Current Fair Market Value <br> Valor actual y justo de
                                            mercado</td>
                                        <td colspan="3" class="text-center">
                                            <textarea type="text" name="cfmv1" class="border-0 form-control"></textarea>
                                        </td>
                                        <td colspan="4" class="text-center">
                                            <textarea type="text" name="cfmv2" class="border-0 form-control"></textarea>
                                        </td>
                                        <td colspan="2" class="text-center">
                                            <textarea type="text" name="cfmv3" class="border-0 form-control"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Current Mortgage Balance <br> Saldo actual de la hipoteca</td>
                                        <td colspan="3" class="text-center">
                                            <textarea type="text" name="cmb1" class="border-0 form-control"></textarea>
                                        </td>
                                        <td colspan="4" class="text-center">
                                            <textarea type="text" name="cmb2" class="border-0 form-control"></textarea>
                                        </td>
                                        <td colspan="2" class="text-center">
                                            <textarea type="text" name="cmb3" class="border-0 form-control"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Other Liens <br> Otros gravámenes</td>
                                        <td colspan="3" class="text-center">
                                            <textarea type="text" name="ol1" class="border-0 form-control"></textarea>
                                        </td>
                                        <td colspan="4" class="text-center">
                                            <textarea type="text" name="ol2" class="border-0 form-control"></textarea>
                                        </td>
                                        <td colspan="2" class="text-center">
                                            <textarea type="text" name="ol3" class="border-0 form-control"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <textarea type="text" name="ol4" class="border-0 form-control"></textarea>
                                        </td>
                                        <td colspan="4" class="text-center">
                                            <textarea type="text" name="ol5" class="border-0 form-control"></textarea>
                                        </td>
                                        <td colspan="2" class="text-center">
                                            <textarea type="text" name="ol6" class="border-0 form-control"></textarea>
                                        </td>
                                        <td colspan="3" class="text-center">
                                            <textarea type="text" name="ol7" class="border-0 form-control"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <textarea type="text" name="ol8" class="border-0 form-control"></textarea>
                                        </td>
                                        <td colspan="2" class="text-center">
                                            <textarea type="text" name="ol9" class="border-0 form-control"></textarea>
                                        </td>
                                        <td colspan="3" class="text-center">
                                            <textarea type="text" name="ol10" class="border-0 form-control"></textarea>
                                        </td>
                                        <td colspan="4" class="text-center">
                                            <textarea type="text" name="ol11" class="border-0 form-control"></textarea>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="row ms-lg-3">
                            <div class="col-lg-1">7</div>
                            <div class="col-lg-11">
                                <div>MEDICAL, HOMEOWNERS/RENTERS, AUTOMOBILE, OTHER INSURANCE </div>
                                <div> SEGURO MÉDICO, DE PROPIETARIOS / INQUILINOS, DE AUTOMÓVIL Y OTROS</div>
                                <div> What type of insurance policies do you have? </div>
                                ¿Qué tipo de pólizas de seguro tiene usted?
                            </div>
                        </div>

                        <div class="table-responsive ps-lg-3">
                            <table class="table table-bordered border-dark">
                                <tbody>

                                    <tr>
                                        <td class="text-center bg-secondary">Name of Company, Group # & Policy # <br>
                                            Nombre de la compañía, N° de grupo y
                                            N° de póliza</td>
                                        <td class="text-center bg-secondary px-3">A</td>
                                        <td class="text-center bg-secondary px-3">B</td>
                                        <td class="text-center bg-secondary px-3">T / C</td>
                                        <td class="text-center bg-secondary">Type of Insurance <br> Tipo de seguro
                                        </td>
                                        <td class="text-center bg-secondary">Date Issued <br> Fecha de emisión</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <textarea type="text" name="mh_noc1" class="border-0 form-control"></textarea>
                                        </td>
                                        <td class="text-center"><input type="checkbox" name="mh_a1"
                                                class=""></td>
                                        <td class="text-center"><input type="checkbox" name="mh_b1"
                                                class=""></td>
                                        <td class="text-center"><input type="checkbox" name="mh_t1"
                                                class=""></td>
                                        <td class="text-center">
                                            <textarea type="text" name="mh_toi1" class="border-0 form-control"></textarea>
                                        </td>
                                        <td class="text-center">
                                            <textarea type="text" name="mh_di1" class="border-0 form-control"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <textarea type="text" name="mh_noc2" class="border-0 form-control"></textarea>
                                        </td>
                                        <td class="text-center"><input type="checkbox" name="mh_a2"
                                                class=""></td>
                                        <td class="text-center"><input type="checkbox" name="mh_b2"
                                                class=""></td>
                                        <td class="text-center"><input type="checkbox" name="mh_t2"
                                                class=""></td>
                                        <td class="text-center">
                                            <textarea type="text" name="mh_toi2" class="border-0 form-control"></textarea>
                                        </td>
                                        <td class="text-center">
                                            <textarea type="text" name="mh_di2" class="border-0 form-control"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <textarea type="text" name="mh_noc3" class="border-0 form-control"></textarea>
                                        </td>
                                        <td class="text-center"><input type="checkbox" name="mh_a3"
                                                class=""></td>
                                        <td class="text-center"><input type="checkbox" name="mh_b3"
                                                class=""></td>
                                        <td class="text-center"><input type="checkbox" name="mh_t3"
                                                class=""></td>
                                        <td class="text-center">
                                            <textarea type="text" name="mh_toi3" class="border-0 form-control"></textarea>
                                        </td>
                                        <td class="text-center">
                                            <textarea type="text" name="mh_di3" class="border-0 form-control"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <textarea type="text" name="mh_noc4" class="border-0 form-control"></textarea>
                                        </td>
                                        <td class="text-center"><input type="checkbox" name="mh_a4"
                                                class=""></td>
                                        <td class="text-center"><input type="checkbox" name="mh_b4"
                                                class=""></td>
                                        <td class="text-center"><input type="checkbox" name="mh_t4"
                                                class=""></td>
                                        <td class="text-center">
                                            <textarea type="text" name="mh_toi4" class="border-0 form-control"></textarea>
                                        </td>
                                        <td class="text-center">
                                            <textarea type="text" name="mh_di4" class="border-0 form-control"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <textarea type="text" name="mh_noc5" class="border-0 form-control"></textarea>
                                        </td>
                                        <td class="text-center"><input type="checkbox" name="mh_a5"
                                                class=""></td>
                                        <td class="text-center"><input type="checkbox" name="mh_b5"
                                                class=""></td>
                                        <td class="text-center"><input type="checkbox" name="mh_t5"
                                                class=""></td>
                                        <td class="text-center">
                                            <textarea type="text" name="mh_toi5" class="border-0 form-control"></textarea>
                                        </td>
                                        <td class="text-center">
                                            <textarea type="text" name="mh_di5" class="border-0 form-control"></textarea>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="row ms-lg-3">
                            <div class="col-lg-1">8</div>
                            <div class="col-lg-11">
                                <div class="fw-bold">DEBTS: List ALL debts that you owe individually and together with
                                    the other party without regard to who
                                    will be responsible for payment later.</div>
                            </div>
                        </div>

                        <div class="row ms-lg-3">
                            <div class="col-lg-1 ps-lg-3"> </div>
                            <div class="col-lg-11">
                                <div class="fw-bold">DEUDAS:Enumere TODAS las deudas que Ud. tenga individualmente o
                                    en conjunto con la otra parte sin
                                    tomar en consideración quién va a asumir la responsabilidad de pagarlas más
                                    adelante.</div>
                                <div class="small_text">If there are additional DEBTS, please attach a separate sheet
                                    of paper with the creditor’s name and address, the type of obligation, who pays (A,
                                    B, T) and the current balance.</div>
                                <div class="small_text">Si existe alguna DEUDA adicional, por favor adjunte una hoja
                                    separada con el nombre y la dirección del acreedor, el tipo de
                                    obligación, quién paga (A, B, T/C) y el saldo actual.</div>
                            </div>
                        </div>

                        <div class="table-responsive ps-lg-3">
                            <table class="table table-bordered border-dark">
                                <tbody>
                                    <tr>
                                        <td class="text-center bg-secondary" rowspan="2">Creditor’s Name &
                                            Address <br> Nombre y dirección del acreedor</td>
                                        <td class="text-center bg-secondary" rowspan="2">Type of Obligation <br>
                                            Tipo de obligación</td>
                                        <td class="text-center bg-secondary" colspan="3">Who Currently pay <br>
                                            Quién paga en la
                                            actualidad </td>
                                        <td class="text-center bg-secondary">Monthly Payment <br> Pago Mensual</td>
                                        <td class="text-center bg-secondary">Current Balance <br>Saldo
                                            actual</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center ">A</td>
                                        <td class="text-center ">B</td>
                                        <td class="text-center ">T / C</td>
                                        <td class="text-center">
                                            <textarea type="text" name="d_mp_1" class="border-0 form-control"></textarea>
                                        </td>
                                        <td class="text-center">
                                            <textarea type="text" name="d_cb_1" class="border-0 form-control"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <textarea type="text" name="d_cn1" class="border-0 form-control"></textarea>
                                        </td>
                                        <td class="text-center">
                                            <textarea type="text" name="d_too1" class="border-0 form-control"></textarea>
                                        </td>
                                        <td class="text-center "><input type="checkbox" name="d_a1"
                                                class=""></td>
                                        <td class="text-center "><input type="checkbox" name="d_b1"
                                                class=""></td>
                                        <td class="text-center "><input type="checkbox" name="d_t1"
                                                class=""></td>
                                        <td class="text-center">
                                            <textarea type="text" name="d_mp1" class="border-0 form-control"></textarea>
                                        </td>
                                        <td class="text-center">
                                            <textarea type="text" name="d_cb1" class="border-0 form-control"></textarea>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <textarea type="text" name="d_cn2" class="border-0 form-control"></textarea>
                                        </td>
                                        <td class="text-center">
                                            <textarea type="text" name="d_too2" class="border-0 form-control"></textarea>
                                        </td>
                                        <td class="text-center "><input type="checkbox" name="d_a2"
                                                class=""></td>
                                        <td class="text-center "><input type="checkbox" name="d_b2"
                                                class=""></td>
                                        <td class="text-center "><input type="checkbox" name="d_t2"
                                                class=""></td>
                                        <td class="text-center">
                                            <textarea type="text" name="d_mp2" class="border-0 form-control"></textarea>
                                        </td>
                                        <td class="text-center"><input type="text" name="d_cb2"
                                                class="border-0 form-control"></td>

                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <textarea type="text" name="d_cn3" class="border-0 form-control"></textarea>
                                        </td>
                                        <td class="text-center">
                                            <textarea type="text" name="d_too3" class="border-0 form-control"></textarea>
                                        </td>
                                        <td class="text-center "><input type="checkbox" name="d_a3"
                                                class=""></td>
                                        <td class="text-center "><input type="checkbox" name="d_b3"
                                                class=""></td>
                                        <td class="text-center "><input type="checkbox" name="d_t3"
                                                class=""></td>
                                        <td class="text-center">
                                            <textarea type="text" name="d_mp3" class="border-0 form-control"></textarea>
                                        </td>
                                        <td class="text-center">
                                            <textarea type="text" name="d_cb3" class="border-0 form-control"></textarea>
                                        </td>

                                    </tr>

                                </tbody>
                            </table>
                        </div>








                        @include('layouts.footer17', ['page' => 8])
                        @include('layouts.pagination', ['page' => 22])
                </section>

                <section
                    class="section_area  row page1 bg-white pt-5 p-lg-5 pe-2 pe-lg-5 p-lg-3 m-3 mt-4  pt-lg-5 pt-4"
                    id='ninth_section'>
                    <div class="border-bottom">
                        <div class="">
                            <div class="small_text d-flex d_sm_block">Petitioner/Joint Petitioner A: <input
                                    type="text" name="7pjp_a"
                                    class=" border-none responsive_input border-0 border-bottom border-dotted shadow-none">
                            </div>

                        </div>
                        <div class="pb-3">
                            <div class="small_text d-flex d_sm_block">Respondent/Joint Petitioner B: <input
                                    type="text" name="7rjp_b"
                                    class=" border-none responsive_input border-0 border-bottom border-dotted shadow-none">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-10 mx-auto">

                        <div class="table-responsive ps-lg-3 pt-3">
                            <table class="table table-bordered border-dark">
                                <tbody>

                                    <tr>
                                        <td class="text-center">
                                            <textarea type="text" name="d_cn5" class="border-0 form-control"></textarea>
                                        </td>
                                        <td class="text-center">
                                            <textarea type="text" name="d_too5" class="border-0 form-control"></textarea>
                                        </td>
                                        <td class="text-center "><input type="checkbox" name="d_a5"
                                                class=""></td>
                                        <td class="text-center "><input type="checkbox" name="d_b5"
                                                class=""></td>
                                        <td class="text-center "><input type="checkbox" name="d_t5"
                                                class=""></td>
                                        <td class="text-center">
                                            <textarea type="text" name="d_mp5" class="border-0 form-control"></textarea>
                                        </td>
                                        <td class="text-center">
                                            <textarea type="text" name="d_cb5" class="border-0 form-control"></textarea>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <textarea type="text" name="d_cn6" class="border-0 form-control"></textarea>
                                        </td>
                                        <td class="text-center">
                                            <textarea type="text" name="d_too6" class="border-0 form-control"></textarea>
                                        </td>
                                        <td class="text-center "><input type="checkbox" name="d_a6"
                                                class=""></td>
                                        <td class="text-center "><input type="checkbox" name="d_b6"
                                                class=""></td>
                                        <td class="text-center "><input type="checkbox" name="d_t6"
                                                class=""></td>
                                        <td class="text-center">
                                            <textarea type="text" name="d_mp6" class="border-0 form-control"></textarea>
                                        </td>
                                        <td class="text-center">
                                            <textarea type="text" name="d_cb6" class="border-0 form-control"></textarea>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <textarea type="text" name="d_cn7" class="border-0 form-control"></textarea>
                                        </td>
                                        <td class="text-center">
                                            <textarea type="text" name="d_too7" class="border-0 form-control"></textarea>
                                        </td>
                                        <td class="text-center "><input type="checkbox" name="d_a7"
                                                class=""></td>
                                        <td class="text-center "><input type="checkbox" name="d_b7"
                                                class=""></td>
                                        <td class="text-center "><input type="checkbox" name="d_t7"
                                                class=""></td>
                                        <td class="text-center">
                                            <textarea type="text" name="d_mp7" class="border-0 form-control"></textarea>
                                        </td>
                                        <td class="text-center">
                                            <textarea type="text" name="d_cb7" class="border-0 form-control"></textarea>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <textarea type="text" name="d_cn8" class="border-0 form-control"></textarea>
                                        </td>
                                        <td class="text-center">
                                            <textarea type="text" name="d_too8" class="border-0 form-control"></textarea>
                                        </td>
                                        <td class="text-center "><input type="checkbox" name="d_a8"
                                                class=""></td>
                                        <td class="text-center "><input type="checkbox" name="d_b8"
                                                class=""></td>
                                        <td class="text-center "><input type="checkbox" name="d_t8"
                                                class=""></td>
                                        <td class="text-center">
                                            <textarea type="text" name="d_mp8" class="border-0 form-control"></textarea>
                                        </td>
                                        <td class="text-center">
                                            <textarea type="text" name="d_cb8" class="border-0 form-control"></textarea>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <textarea type="text" name="d_cn9" class="border-0 form-control"></textarea>
                                        </td>
                                        <td class="text-center">
                                            <textarea type="text" name="d_too9" class="border-0 form-control"></textarea>
                                        </td>
                                        <td class="text-center "><input type="checkbox" name="d_a9"
                                                class=""></td>
                                        <td class="text-center "><input type="checkbox" name="d_b9"
                                                class=""></td>
                                        <td class="text-center "><input type="checkbox" name="d_t9"
                                                class=""></td>
                                        <td class="text-center">
                                            <textarea type="text" name="d_mp9" class="border-0 form-control"></textarea>
                                        </td>
                                        <td class="text-center">
                                            <textarea type="text" name="d_cb9" class="border-0 form-control"></textarea>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <textarea type="text" name="d_cn10" class="border-0 form-control"></textarea>
                                        </td>
                                        <td class="text-center">
                                            <textarea type="text" name="d_too10" class="border-0 form-control"></textarea>
                                        </td>
                                        <td class="text-center "><input type="checkbox" name="d_a10"
                                                class=""></td>
                                        <td class="text-center "><input type="checkbox" name="d_b10"
                                                class=""></td>
                                        <td class="text-center "><input type="checkbox" name="d_t10"
                                                class=""></td>
                                        <td class="text-center">
                                            <textarea type="text" name="d_mp10" class="border-0 form-control"></textarea>
                                        </td>
                                        <td class="text-center">
                                            <textarea type="text" name="d_cb10" class="border-0 form-control"></textarea>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <textarea type="text" name="d_cn11" class="border-0 form-control"></textarea>
                                        </td>
                                        <td class="text-center">
                                            <textarea type="text" name="d_too11" class="border-0 form-control"></textarea>
                                        </td>
                                        <td class="text-center "><input type="checkbox" name="d_a11"
                                                class=""></td>
                                        <td class="text-center "><input type="checkbox" name="d_b11"
                                                class=""></td>
                                        <td class="text-center "><input type="checkbox" name="d_t11"
                                                class=""></td>
                                        <td class="text-center">
                                            <textarea type="text" name="d_mp11" class="border-0 form-control"></textarea>
                                        </td>
                                        <td class="text-center">
                                            <textarea type="text" name="d_cb11" class="border-0 form-control"></textarea>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <textarea type="text" name="d_cn12" class="border-0 form-control"></textarea>
                                        </td>
                                        <td class="text-center">
                                            <textarea type="text" name="d_too12" class="border-0 form-control"></textarea>
                                        </td>
                                        <td class="text-center "><input type="checkbox" name="d_a12"
                                                class=""></td>
                                        <td class="text-center "><input type="checkbox" name="d_b12"
                                                class=""></td>
                                        <td class="text-center "><input type="checkbox" name="d_t12"
                                                class=""></td>
                                        <td class="text-center">
                                            <textarea type="text" name="d_mp12" class="border-0 form-control"></textarea>
                                        </td>
                                        <td class="text-center">
                                            <textarea type="text" name="d_cb12" class="border-0 form-control"></textarea>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <textarea type="text" name="d_cn13" class="border-0 form-control"></textarea>
                                        </td>
                                        <td class="text-center">
                                            <textarea type="text" name="d_too13" class="border-0 form-control"></textarea>
                                        </td>
                                        <td class="text-center "><input type="checkbox" name="d_a13"
                                                class="mx-3"></td>
                                        <td class="text-center "><input type="checkbox" name="d_b13"
                                                class="mx-3"></td>
                                        <td class="text-center "><input type="checkbox" name="d_t13"
                                                class="mx-5"></td>
                                        <td class="text-center">
                                            <textarea type="text" name="d_mp13" class="border-0 form-control"></textarea>
                                        </td>
                                        <td class="text-center">
                                            <textarea type="text" name="d_cb13" class="border-0 form-control"></textarea>
                                        </td>

                                    </tr>

                                </tbody>
                            </table>
                        </div>


                        <div class="  ">

                            <div class=" "><span class=" me-lg-3">9.</span>
                                <span class="fw-bold">DISPOSAL OF ASSETS / ENAJENACIÓN DE BIENES</span>
                                <div class="small_text ms-lg-4">Did you dispose of any assets (sold, given away, or
                                    destroyed) in the 12 months before the case was filed?.</div>
                                <div class="small_text ms-lg-4">¿Enajenó usted algún bien (lo vendió, lo regaló o lo
                                    destruyó) durante el año anterior a la presentación de este caso?</div>
                                <div class=" text-end">
                                    <input type="checkbox" name="dispose" id="" value="Yes">
                                    <span>Yes / Sí</span>
                                    <input type="checkbox" name="dispose" id="" value="No">
                                    <span>No</span>
                                </div>
                                <div class="fw-bold ms-lg-4">If yes, complete chart below / Si lo hizo, complete el
                                    cuadro a continuación:</div>
                            </div>
                        </div>
                        <div class="table-responsive ms-lg-4">
                            <table class="table table-bordered border-dark">
                                <tbody>
                                    <tr>
                                        <td class="w-50 text-center bg-secondary">Property / Asset <br> Propiedad /
                                            Bien</td>
                                        <td class="text-center bg-secondary">Date of Disposal <br> Fecha de
                                            enajenación</td>
                                        <td class="text-center bg-secondary">Fair Market Value on Date of Disposal
                                            <br> Valor justo de mercado a la
                                            fecha de enajenación
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <textarea type="text" name="da_pa1" class="border-0 form-control"></textarea>
                                        </td>
                                        <td class="text-center">
                                            <textarea type="text" name="da_dod1" class="border-0 form-control"></textarea>
                                        </td>
                                        <td class="text-center">
                                            <textarea type="text" name="da_fmv1" class="border-0 form-control"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <textarea type="text" name="da_pa2" class="border-0 form-control"></textarea>
                                        </td>
                                        <td class="text-center">
                                            <textarea type="text" name="da_dod2" class="border-0 form-control"></textarea>
                                        </td>
                                        <td class="text-center">
                                            <textarea type="text" name="da_fmv2" class="border-0 form-control"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <textarea type="text" name="da_pa3" class="border-0 form-control"></textarea>
                                        </td>
                                        <td class="text-center">
                                            <textarea type="text" name="da_dod3" class="border-0 form-control"></textarea>
                                        </td>
                                        <td class="text-center">
                                            <textarea type="text" name="da_fmv3" class="border-0 form-control"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <textarea type="text" name="da_pa4" class="border-0 form-control"></textarea>
                                        </td>
                                        <td class="text-center">
                                            <textarea type="text" name="da_dod4" class="border-0 form-control"></textarea>
                                        </td>
                                        <td class="text-center">
                                            <textarea type="text" name="da_fmv4" class="border-0 form-control"></textarea>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class=" "><span class=" me-lg-3">10.</span>
                            <span class="fw-bold"> CURRENT LITIGATION / LITIGIO ACTUAL</span>

                        </div>
                        <div class="ms-lg-5">
                            <div>Are you a party in any other lawsuit or litigation? <input type="radio"
                                    name="lawsuit_litigation" id="" value="Yes"> <span
                                    class="pe-lg-3"> Yes</span> <input type="radio" name="lawsuit_litigation"
                                    id="" value="No"><span class="pe-lg-3"> No</span> </div>
                            <div>¿Es usted parte en cualquier otra demanda o litigio?</div>
                            <div>If yes, identify the lawsuit or litigation. <input type="text"
                                    name="lawsuit_litigation_val" id="" class="border-0 border-bottom">
                            </div>
                            <div>Si lo es, identifique la demanda o el litigio.</div>
                        </div>

                        <div class=" "><span class=" me-lg-3">11. </span>
                            <span class="fw-bold">BANKRUPTCY / QUIEBRA</span>

                        </div>
                        <div class="ms-lg-5">
                            <div>Have you ever filed for bankruptcy? <input type="checkbox" name="bankruptcy"
                                    id="" Value="Yes"> <span class="pe-lg-3"> Yes</span> <input
                                    type="checkbox" name="bankruptcy" id="" value="No"><span
                                    class="pe-lg-3"> No</span> </div>
                            <div>¿Alguna vez se ha declarado en quiebra?</div>
                            <div>If yes, identify the following / Si contestó que sí, identifique lo siguiente:</div>
                            <div>Type of filing<input type="text" name="filing_type" id=""
                                    class="border-0 border-bottom responsive_input"></div>
                            <div class="small_text">Tipo de caso</div>
                            <div>Date of filing<input type="text" name="filing_date" id=""
                                    class="border-0 border-bottom responsive_input"></div>
                            <div class="small_text">Fecha de declararse en quiebra</div>
                            <div>Current status<input type="text" name="current_status" id=""
                                    class="border-0 border-bottom responsive_input"></div>
                            <div class="small_text">Situación actual</div>
                        </div>
                        <div class=" "><span class=" me-lg-3">12.</span>
                            <span class="fw-bold">DECLARATION / DECLARACIÓN</span>

                        </div>
                        <div class="ms-lg-5">
                            <div>I declare under the penalty of perjury that the above, including all attachments, are
                                complete, true, and correct.</div>
                            <div>Declaro bajo pena de perjurio que lo antedicho, incluyendo todos los anexos, es
                                verdadero y correcto.</div>
                        </div>


                        @include('layouts.footer17', ['page' => 9])
                        @include('layouts.pagination', ['page' => 22])
                    </div>
                </section>

                <section
                    class="section_area  row page1 bg-white pt-5 p-lg-5 pe-2 pe-lg-5 p-lg-3 m-3 mt-4  pt-lg-5 pt-4"
                    id="tenth_section">
                    <div class="border-bottom">
                        <div class="">
                            <div class="small_text d-flex d_sm_block">Petitioner/Joint Petitioner A: <input
                                    type="text" name="7pjp_a"
                                    class=" border-none responsive_input border-0 border-bottom border-dotted shadow-none">
                            </div>

                        </div>
                        <div class="pb-3">
                            <div class="small_text d-flex d_sm_block">Respondent/Joint Petitioner B: <input
                                    type="text" name="7rjp_b"
                                    class=" border-none responsive_input border-0 border-bottom border-dotted shadow-none">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-10 mx-auto">

                        {{-- <div class=" "><span class=" me-lg-3">12.</span>
                                        <span class="fw-bold">DECLARATION</span>

                                     </div>
                                     <div class="ms-lg-5">
                                        <div>I declare under the penalty of perjury that the above, including all attachments, are complete, true, and correct.</div>
                                     </div> --}}


                        <div class="row">
                            <div class="col-lg-5">

                                <div class="w-50 responsive_input border border-dark p-2 mt-2">
                                    <div class="small_text">Sign and print your name. Firme y escriba en letra de
                                        molde su nombre.</div>
                                    <div class="small_text">Enter the date on which you signed your name. Escriba la
                                        fecha cuando usted firmó.</div>
                                    <div class="small_text">Enter the date on which you signed your name.</div>
                                    <div class="small_text"><b>Note:</b> This signature does not need to be notarized.
                                    </div>
                                    <div class="small_text"><b>Nota:</b> No es necesario notarizar esta firma.</div>
                                </div>
                            </div>
                            <div class="col-lg-1"> </div>
                            <div class="col-lg-6">
                                <div>
                                    <input type="text" name="aignature"
                                        class="border-0 form-control border-bottom">
                                    <div class="text-center mx-auto">Signature / Firma</div>
                                </div>
                                <div>
                                    <input type="text" name="print_type"
                                        class="border-0 form-control border-bottom">
                                    <div class="text-center mx-auto">Name Printed or Typed / Nombre escrito en letra
                                        de molde o a maquina</div>
                                </div>
                                <div>
                                    <input type="text" name="address"
                                        class="border-0 form-control border-bottom">
                                    <div class="text-center mx-auto">Address / Dirección</div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="text" name="email"
                                            class="border-0 form-control border-bottom">
                                        <div class=" ">Email Address / Dirección de correo electrónico</div>
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" name="telephone_no"
                                            class="border-0 form-control border-bottom">
                                        <div class="text-end">Telephone Number / Teléfono</div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="text" name="date"
                                            class="border-0 form-control border-bottom">
                                        <div>Date / Fecha</div>
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" name="state_bar"
                                            class="border-0 form-control border-bottom">
                                        <div class="text-end">State Bar No. (if any)</div>
                                        <div class="text-end">Número de inscripción en el Colegio de Abogados (si
                                            algo)</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @include('layouts.footer17', ['page' => 10])
                        @include('layouts.pagination', ['page' => 22])
                    </div>
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
