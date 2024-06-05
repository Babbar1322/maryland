{{-- FL Long Form Spanish.pdf --}}
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
        @media screen and (min-width : 350px) {
            .link {
                text-align: center !important;
            }
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

        input[type='checkbox'] {
            accent-color: #8c8a8a !important;
        }

        body {
            font-family: "unset";

        }

        .form-control:focus-visible {
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
        }

        .top:focus {
            border-bottom: none !important;
        }

        input:focus-visible {
            outline: none !important;
        }

        .footer_field:focus-visible {
            outline: none !important;
            border-bottom: 2px solid black !important;
        }

        .footer_padding {
            padding-top: 400px !important;
        }

        @media screen and (max-width : 768px) {
            .small_text {
                height: auto !important;
            }

            .footer_padding {
                padding-top: 50px !important;
            }

            .d_sm_block {
                display: block !important;
            }
            .responsive_input {
                max-width: 100% !important;
              width: 100% !important;
                overflow: hidden;
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
            --bs-bg-opacity: 1;
            background-color: rgb(184 188 192) !important;
        }

        body {
            font-size: 18px !important;
        }

        .small_text {
            font-size: 14px;
        }

        .tdata input:focus,
        .tdata textarea:focus {
            border-bottom: none !important;
        }

        td[rowspan] {
            vertical-align: top;
        }

        .table_input:hover {
            background-color: #e4eaf9 !important;
        }
    </style>
</head>

<body>
    <div class="container-fluid py-1 py-lg-3">
        <div class="container bg_color p-lg-3 p-1">
            <form action="{{ route('form18.submit') }}" method="post">
                @csrf
                <section class="section_area" id="section_first">
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show">{{ session('success') }} <button
                                type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-lg-10 mx-auto">
                            <div class="px-lg-5 mx-auto px-2 py-5 ">
                                <div class="row  d-flex justify-content-between border-bottom">
                                    <div class="col-lg-6  col-md-6 mx-auto ">
                                        <img src="{{ asset('logo11.png') }}" class="image-fluid logo w-25"
                                            alt="...">
                                    </div>
                                    <div class="col-lg-6 col-sm-6 col-md-6 text-end link">
                                        <p class="m-0">201 Spear St, San Francisco, CA 94105</p>

                                        <a href="https://www.suretranslation.com">https://www.suretranslation.com</a>
                                        <p class="m-0">Order ID: 6607400ce5fa90d84a01a9d5</p>
                                    </div>
                                </div>

                                <div class="text-center fs-1 mt-4 fw-bold">Certification of Translation Accuracy</div>
                                <div class="text-center">From English to Spanish</div>

                                <div class="my-3">As a duly authorized representative of SureTranslation, a
                                    professional translation services agency, I hereby confirm that the document has
                                    been translated by a proficient, qualified, and skilled professional translator, who
                                    is fluent in the specified language pair. To the best of my understanding, the
                                    translated text accurately represents the content, meaning, and style of the
                                    original text, and comprises a comprehensive and precise translation of the source
                                    document. This translation was not completed by a family member, friend, or business
                                    associate.</div>


                                <div class="my-3">This certification is solely intended to attest to the accuracy of
                                    the translation. I do not provide any representations or assurances concerning the
                                    authenticity or content of the original document. Moreover, SureTranslation assumes
                                    no liability for the manner in which the translation is employed by the customer or
                                    any third party, including end-users of the translation.</div>

                                <div class="my-3">A copy of the translation is appended to this certification.</div>

                                <div class="row mt-5" style="margin-bottom: 200px">
                                    <div class="col-lg-6 col-sm-6 col-md-6">
                                        <div class="m-5">
                                            signature
                                        </div>
                                        <div class="border-bottom w-50 responsive_input"></div>
                                        <p class="m-0 mt-2">Laura Harris</p>
                                        <p class="m-0">Authorized Representative</p>
                                        <p class="m-0">Order Date: 03/29/2024</p>
                                        <div class="mt-3">
                                            <p class="m-0">SureTranslation</p>
                                            <p class="m-0">201 Spear St</p>
                                            <p class="m-0">San Francisco, CA 94105</p>
                                            <p class="m-0">United States</p>
                                        </div>

                                    </div>
                                    <div class="col-lg-6 col-sm-6 col-md-6 my-5 p-5">Stamp</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section_area">
                    <div class="row">
                        <div class="col-lg-10 mx-auto">
                            <div class="px-lg-5 mx-auto px-2 py-5 ">
                                <div class="text-end border-bottom">Order ID: 6607400ce5fa90d84a01a9d5</div>
                                <div class="text-center mt-5">INSTRUCCIONES PARA LAS NORMAS DE PROCEDIMIENTO DE DERECHO
                                    DE FAMILIA   DE FLORIDA</div>
                                <div class="text-center">FORMULARIO 12.902(c)</div>
                                <div class="text-center">DECLARACIÓN JURADA FINANCIERA DE DERECHO DE FAMILIA (FORMULARIO
                                    LARGO) <br> (10/21)</div>
                                <div class="text-center">¿Cuándo debe utilizarse este formulario?</div>

                                <div class="my-4">Este formulario debe utilizarse cuando usted esté involucrado en un
                                    caso de derecho de familia que requiera una declaración jurada financiera y su
                                    ingreso bruto individual es de $50,000 O MÁS por año a menos que:</div>

                                <div>
                                    <p class="m-0">(1) Esté presentando una disolución simplificada de matrimonio
                                        bajo la regla 12.105 y ambas partes hayan renunciado a la presentación de
                                        declaraciones juradas financieras;</p>
                                    <p class="m-0">(2) no tenga hijos menores, no haya asuntos de manutención y haya
                                        presentado un acuerdo escrito que resuelva todos los asuntos financieros; o</p>
                                    <p class="m-0">(3) el tribunal carezca de jurisdicción para decidir sobre
                                        cualquier asunto financiero.</p>
                                </div>

                                <div class="mt-4">Este formulario debe ser mecanografiado o escrito en tinta negra.
                                    Después de completar este formulario, debe firmar el formulario. Luego debe
                                    presentar este documento ante el secretario del tribunal de circuito en el condado
                                    donde se presentó la petición y guardar una copia para sus registros.</div>

                                <div class="text-center mt-2">¿Qué debería hacer a continuación?</div>
                                <div>Debe entregarse una copia de este formulario a la otra parte en su caso dentro de
                                    los 45 días
                                    de haber sido notificado con la petición, si no se le entrega con sus documentos
                                    iniciales. La notificación debe llevarse a cabo de acuerdo con la Regla de Práctica
                                    General y Administración Judicial de Florida 2.516.</div>

                                <div class="mt-4">
                                    Una copia de este formulario debe presentarse ante el tribunal y entregarse a la
                                    otra parte o a su abogado. La copia que está entregando a la otra parte debe ser
                                    enviada por correo, correo electrónico o entregada en mano al partido opositor o a
                                    su abogado el mismo día indicado en el certificado de servicio. Si se envía por
                                    correo, debe tener el matasellos de la fecha indicada en el certificado de servicio
                                </div>

                                <div class="mt-2 text-center">¿Dónde puedo buscar más información?</div>
                                <div>Antes de continuar, usted debería leer la "Información General para Litigantes que
                                    se
                                    Representan a Sí Mismos" que se encuentra al comienzo de estos formularios. Las
                                    palabras que están en "negrita y subrayadas" en estas instrucciones están definidas
                                    allí. Para más información, consulte la Regla de Procedimiento de Derecho Familiar
                                    de Florida 12.285.</div>
                                <div class="text-center fs-5 ">INFORMACIÓN IMPORTANTE SOBRE LA PRESENTACIÓN ELECTRÓNICA
                                </div>
                                <div>Las Reglas de Práctica General y Administración Judicial de Florida ahora requieren
                                    que todas las peticiones, alegaciones y documentos sean presentados electrónicamente
                                    excepto en ciertas circunstancias. Los litigantes auto representados pueden
                                    presentar peticiones u otros alegatos o documentos electrónicamente; sin embargo, no
                                    están obligados a hacerlo. Si opta por presentar sus alegatos u otros documentos
                                    electrónicamente, debe hacerlo de acuerdo con la Regla de Práctica General y
                                    Administración Judicial de Florida 2.525, y debe seguir los</div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="section_area">
                    <div class="row">
                        <div class="col-lg-10 mx-auto">
                            <div class="px-lg-5 mx-auto px-2 py-5 ">
                                <div class="text-end border-bottom">Order ID: 6607400ce5fa90d84a01a9d5</div>

                                <div class="my-4">procedimientos del circuito judicial en el que presenta. Las reglas
                                    y procedimientos deben ser leídos y seguidos cuidadosamente.</div>
                                <div>Instrucciones para el Formulario de Reglas de Procedimiento de Derecho de Familia
                                    de Florida 12.902(c), Declaración Jurada Financiera de Derecho de Familia
                                    (Formulario Largo) (10/21)</div>
                                <div class="text-center fs-5">INFORMACIÓN IMPORTANTE SOBRE LA ELECCIÓN DE E-SERVICIO
                                </div>
                                <div>Después del servicio inicial del emplazamiento o petición suplementaria por parte
                                    del Sheriff o servidor de proceso certificado, las Reglas de Florida de Práctica
                                    General y Administración Judicial ahora requieren que todos los documentos que se
                                    deban o se permitan entregar a la otra parte deben ser enviados por correo
                                    electrónico (e-mail) excepto en ciertas circunstancias. Usted debe cumplir
                                    estrictamente con los requisitos de formato establecidos en las Reglas de Florida de
                                    Práctica General y Administración Judicial. Si usted elige participar en el servicio
                                    electrónico, lo que significa servir o recibir notificaciones por correo electrónico
                                    (e-mail), o a través del Portal de Presentación Electrónica de los Tribunales de
                                    Florida, usted debe revisar la Regla de Práctica General y Administración Judicial
                                    de Florida 2.516. Puede encontrar esta regla en www.flcourts.org a través del enlace
                                    a las Reglas de Práctica General y Administración Judicial proporcionado bajo
                                    Formularios de Derecho Familiar: Cómo Empezar, o Reglas de Corte en el Índice
                                    Temático de la A a la Z.</div>
                                <div class="my-4">
                                    LOS LITIGANTES QUE SE REPRESENTAN A SÍ MISMOS PUEDEN SERVIR DOCUMENTOS POR CORREO
                                    ELECTRÓNICO; SIN EMBARGO, NO ESTÁN OBLIGADOS A HACERLO. Si un litigante que se
                                    representa a sí mismo elige servir y recibir documentos por correo electrónico, los
                                    procedimientos siempre deben ser seguidos una vez que se haga la elección inicial.
                                </div>

                                <div>Para servir y recibir documentos por correo electrónico, debe designar sus
                                    direcciones de correo electrónico utilizando el Formulario de Derecho Familiar
                                    Aprobado por la Corte Suprema de Florida 12.915, Designación de Dirección de Correo
                                    y Electrónica Actual, y debe proveer su dirección de correo electrónico en cada
                                    formulario donde aparece su firma. Por favor lea CUIDADOSAMENTE las reglas e
                                    instrucciones para: Certificado de Servicio (General), Formulario de Derecho
                                    Familiar Aprobado por la Corte Suprema de Florida 12.914; Designación de Dirección
                                    de Correo y Electrónica Actual, Formulario de Derecho Familiar Aprobado por la Corte
                                    Suprema de Florida 12.915; y la Regla de Práctica General y Administración Judicial
                                    de Florida 2.516.</div>
                                <div class="text-center">Notas especiales...</div>
                                <div>Si desea mantener su dirección confidencial porque un juez ha determinado que usted
                                    es
                                    víctima de agresión sexual, abuso infantil agravado, acecho agravado, acoso,
                                    agresión agravada o violencia doméstica, no ingrese la dirección, la información
                                    telefónica y de fax en la parte inferior de este formulario. En su lugar, presente
                                    la Solicitud de Archivo Confidencial de Dirección, Formulario de Ley de Familia
                                    Aprobado por la Corte Suprema de Florida 12.980(h).</div>
                                <div class="my-4">
                                    La declaración jurada debe completarse utilizando los montos de ingresos y gastos
                                    mensuales. Si usted recibe su salario o sus facturas vencen en un calendario que no
                                    es mensual, debe</div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="section_area">
                    <div class="row">
                        <div class="col-lg-10 mx-auto">
                            <div class="px-lg-5 mx-auto px-2 py-5 ">
                                <div class="text-end border-bottom">Order ID: 6607400ce5fa90d84a01a9d5</div>
                                <div class="my-4">convertir esos montos. A continuación se ofrecen algunos consejos para realizar estas conversiones.</div>
                                <div class="mt-4">Instrucciones para el Formulario de Reglas de Procedimiento de Ley
                                    de Familia de Florida 12.902(c), Declaración Financiera de Ley de Familia (Forma
                                    Larga) (10/21)</div>
                                <div>Por hora - Si le pagan por hora, puede convertir sus ingresos mensuales de la
                                    siguiente manera:</div>
                                <div class="row">
                                    <div class="col-lg-2 col-md-2 col-sm-2">Cantidad por hora</div>
                                    <div class="col-lg-1 col-md-1 col-sm-1" style="width:10px">x</div>
                                    <div class="col-lg-3 col-md-3 col-sm-3">Horas trabajadas por semana</div>
                                    <div class="col-lg-1 col-md-1 col-sm-1" style="width:10px">=</div>
                                    <div class="col-lg-5 col-md-5 col-sm-5">Canidad semanal</div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-2 col-md-2 col-sm-2">Cantidad semanal</div>
                                    <div class="col-lg-1 col-md-1 col-sm-1" style="width:10px">x</div>
                                    <div class="col-lg-3 col-md-3 col-sm-3" style="width:168px;">52 semanas por ano</div>
                                    <div class="col-lg-1 col-md-1 col-sm-1" style="width:10px">=</div>
                                    <div class="col-lg-5 col-md-5 col-sm-5">Canidad anual</div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-2 col-md-2 col-sm-2">Cantidad anual</div>
                                    <div class="col-lg-1 col-md-1 col-sm-1" style="width:10px">÷</div>
                                    <div class="col-lg-3 col-md-3 col-sm-3" style="width:168px;">12 semanas por ano</div>
                                    <div class="col-lg-1 col-md-1 col-sm-1" style="width:10px">=</div>
                                    <div class="col-lg-5 col-md-5 col-sm-5">Canidad mensual</div>
                                </div>
                                <div>Diario - Si le pagan por día, puede convertir sus ingresos mensuales de la
                                    siguiente manera:</div>
                                <div class="row">
                                    <div class="col-lg-2 col-md-2 col-sm-2">Cantidad diaria</div>
                                    <div class="col-lg-1 col-md-1 col-sm-1" style="width:10px">x</div>
                                    <div class="col-lg-3 col-md-3 col-sm-3" style="width:223px">Dias trabajados por semana</div>
                                    <div class="col-lg-1 col-md-1 col-sm-1" style="width:10px">=</div>
                                    <div class="col-lg-5 col-md-5 col-sm-5">Canidad semanal</div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-2 col-md-2 col-lg-2">Cantidad semanal</div>
                                    <div class="col-lg-1 col-md-1 col-lg-1" style="width:10px">x</div>
                                    <div class="col-lg-3 col-md-3 col-lg-3" style="width:168px;">52 semanas por ano</div>
                                    <div class="col-lg-1 col-md-1 col-lg-1" style="width:10px">=</div>
                                    <div class="col-lg-5 col-md-5 col-lg-5">Canidad anual</div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-2 col-md-2 col-sm-2">Cantidad anual</div>
                                    <div class="col-lg-1 col-md-1 col-sm-1" style="width:10px">÷</div>
                                    <div class="col-lg-3 col-md-3 col-sm-3" style="width:168px;">12 semanas por ano</div>
                                    <div class="col-lg-1 col-md-1 col-sm-1" style="width:10px">=</div>
                                    <div class="col-lg-5 col-md-5 col-sm-5">Canidad mensual</div>
                                </div>

                                <div>Semanal - Si le pagan por semana, puede convertir sus ingresos mensuales de la
                                    siguiente manera:
                                </div>
                                <div class="row">
                                    <div class="col-lg-2 col-md-2 col-sm-2">Cantidad semanal</div>
                                    <div class="col-lg-1 col-md-1 col-sm-1" style="width:10px">x</div>
                                    <div class="col-lg-3 col-md-3 col-sm-3" style="width:168px;">52 semanas por ano</div>
                                    <div class="col-lg-1 col-md-1 col-sm-1" style="width:10px">=</div>
                                    <div class="col-lg-5 col-md-5 col-sm-5">Canidad anual</div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-2 col-md-2 col-sm-2">Cantidad anual</div>
                                    <div class="col-lg-1 col-md-1 col-sm-1" style="width:10px">÷</div>
                                    <div class="col-lg-3 col-md-3 col-sm-3" style="width:168px;">12 semanas por ano</div>
                                    <div class="col-lg-1 col-md-1 col-sm-1" style="width:10px">=</div>
                                    <div class="col-lg-5 col-md-5 col-sm-5">Canidad mensual</div>
                                </div>


                                <div>Quincenal - Si le pagan cada dos semanas, puede convertir sus ingresos mensuales de
                                    la siguiente manera:
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3" style="width:170px">Cantidad quincenal</div>
                                    <div class="col-lg-1 col-md-1 col-sm-1" style="width:10px">x</div>
                                    <div class="col-lg-3 col-md-3 col-sm-3" style="width:10px">26</div>
                                    <div class="col-lg-1 col-md-1 col-sm-1" style="width:10px">=</div>
                                    <div class="col-lg-4 col-md-4 col-sm-4">Canidad anual</div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-2 col-md-2 col-sm-2">Cantidad anual</div>
                                    <div class="col-lg-1 col-md-1 col-sm-1" style="width:10px">÷</div>
                                    <div class="col-lg-3 col-md-3 col-sm-3" style="width:168px;">12 semanas por ano</div>
                                    <div class="col-lg-1 col-md-1 col-sm-1" style="width:10px">=</div>
                                    <div class="col-lg-5 col-md-5 col-sm-5">Canidad mensual</div>
                                </div>

                                <div>Dos veces al mes - Si le pagan dos veces por mes, puede convertir sus ingresos
                                    mensuales de la siguiente manera:
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3">Cantidad dos veces al mes </div>
                                    <div class="col-lg-1 col-md-1 col-sm-1" style="width:10px">x</div>
                                    <div class="col-lg-3 col-md-3 col-sm-3" style="width:10px">2</div>
                                    <div class="col-lg-1 col-md-1 col-sm-1" style="width:10px">=</div>
                                    <div class="col-lg-4 col-md-4 col-sm-4">Canidad mensual</div>
                                </div>

                                <div class="my-4">Los gastos se pueden convertir de la misma manera.</div>

                                <div>Recuerde, una persona que NO es abogado se llama no abogado. Si un no abogado le
                                    ayuda a llenar estos formularios, esa persona debe darle una copia de una
                                    Declaración de No Abogado, Formulario de Reglas de Procedimiento de Ley de Familia
                                    de Florida 12.900(a), antes de que él o ella le ayude. Un no abogado que le ayude a
                                    llenar estos formularios también debe poner su nombre, dirección y número de
                                    teléfono en la parte inferior de la última página de cada formulario que él o ella
                                    le ayude a completar.</div>

                                <div class=" justify-content-center d-flex d_sm_block">EN EL TRIBUNAL DE CIRCUITO DE LA
                                    CIRCUNSCRIPCIÓN JUDICIAL
                                    <input type="text" min="0" name="judicial"
                                        class="border-0 footer_field border-bottom"> ,
                                </div>
                                <div class=" justify-content-center m-0 p-0  d-flex d_sm_block">EN Y PARA EL CONDADO DE
                                    <input type="text" min="0" name="florida"
                                        class="border-0 m-0 p-0 footer_field border-bottom"> , FLORIDA
                                </div>

                                <div class="mt-1">N.o de caso:</div>
                                <div>División:</div>
                                <div class=" m-0 p-0  d-flex d_sm_block "> <input type="text" min="0"
                                        name="solicitante" class="border-0 m-0  responsive_input p-0 footer_field border-bottom"> ,
                                </div>
                                <div>Solicitante,</div>
                                <div class="">y</div>
                                <div class=" m-0 p-0  d-flex d_sm_block"> <input type="text" min="0"
                                        name="demandado" class="border-0 m-0 p-0 footer_field border-bottom responsive_input"> ,
                                </div>
                                <div>Demandado.</div>
                                <div class="ms-1">DECLARACIÓN JURADA FINANCIERA DE DERECHO DE FAMILIA (FORMULARIO
                                    LARGO)</div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section_area">
                    <div class="row">
                        <div class="col-lg-10 mx-auto">
                            <div class="px-lg-5 mx-auto px-2 py-5 ">
                                <div class="text-end border-bottom">Order ID: 6607400ce5fa90d84a01a9d5</div>
                                <div class="mt-4 text-center">(Ingresos Brutos Anuales Individuales de $50,000 o más) </div>

                                <div class=" d-flex d_sm_block ">Yo, {nombre legal completo}
                                    <input type="text" min="0" name="nombre_lc"
                                        class="border-0 footer_field border-bottom"> , bajo juramento, certificoque la
                                    siguiente información es verdadera:
                                </div>

                                <div class="mt-4 fs-5">SECCIÓN I. INGRESOS</div>
                                <div class="d-flex align-items-center">
                                    <span class="pe-2">1. </span>Mi edad es:<input type="text" min="0"
                                        name="mi_edad_es"
                                        class="border-0 p-0 m-0 align-middle border-bottom footer_field w-25 ">
                                </div>
                                <div class="d-flex align-items-center">
                                    <span class="pe-2">2. </span>Mi ocupación es:<input type="text"
                                        min="0" name="mi_ocupacion_es"
                                        class="border-0 p-0 m-0 align-middle border-bottom footer_field w-25 ">
                                </div>
                                <div class="d-flex align-items-center">
                                    <span class="pe-2">3. </span> Actualmente estoy
                                </div>
                                <div>[Marcar todo lo que corresponda]</div>
                                <div class="d-flex align-items-center">
                                    <span class="pe-2">a. </span>Desempleado
                                </div>
                                <div>Describa sus esfuerzos para encontrar empleo, cuánto espera estar empleado y el
                                    salario que espera recibir:</div>
                                <div class="d-flex align-items-center">
                                    <span class="pe-2">b. </span> Empleado por:
                                </div>
                                <div>Dirección:</div>
                                <div>Ciudad, Estado, Código postal:</div>
                                <div>Número de teléfono:</div>
                                <div>Salario: $ ( ) cada semana (</div>
                                <div>) cada dos semanas (</div>
                                <div>) dos veces al mes (</div>
                                <div>) mensualmente ( ) otro:</div>
                                Si espera quedar desempleado o cambiar de trabajo pronto, describa el cambio que espera
                                y por qué y cómo afectará a su ingreso:

                                <input type="text" min="0" name="marque_aqui"
                                    class="border-0 m-0 p-0 footer_field border-bottom w-25 mt-4">
                                <div>Marque aquí si actualmente tiene más de un empleo. Liste la información anterior
                                    para el segundo trabajo(s) en una hoja separada y adjúntela a esta declaración
                                    jurada.</div>

                                <div class="my-4">Formulario de Reglas de Procedimiento de Derecho Familiar de
                                    Florida 12.902(c), Declaración Jurada Financiera de Derecho Familiar (Formulario
                                    Largo) (10/21) :no seleccionado:
                                </div>

                                <div class="d-flex d_sm_block align-items-center">
                                    <span class="pe-2">c. </span>Jubilado. Fecha de jubilación:<input type="text"  min="0" name="de_jubilacion" class="border-0 p-0 m-0 responsive_input align-middle border-bottom footer_field   ">
                                </div>
                                <div class="d-flex  d_sm_block align-items-center">Empleador de quien se jubiló<input type="text" min="0" name="jubilo" class="border-0   p-0 m-0 align-middle border-bottom footer_field  responsive_input " style="width:265px !important">
                                </div>
                                <div class="d-flex d_sm_block align-items-center">Dirección:<input type="text" min="0"  name="direccion" class="border-0 p-0 m-0   align-middle border-bottom footer_field responsive_input" style="width:400px !important">
                                </div>
                                <div class="d-flex d_sm_block align-items-center">Ciudad, Estado, Código postal:<input type="text" min="0" name="codigo_postal" class="border-0  responsive_input p-0 m-0 align-middle border-bottom footer_field   ">
                                </div>
                                <div class="d-flex d_sm_block align-items-center">Número de teléfono:<input type="text" min="0" name="de_telefono" class="border-0 responsive_input  p-0 m-0 align-middle border-bottom footer_field   ">
                                </div>

                                <div class="mt-4"> INGRESOS BRUTOS DEL AÑO PASADO:</div>
                                <div>Su ingreso Ingreso de la otra parte (si se conoce)</div>
                                <div class="d-flex align-items-center">AÑO<input type="text" min="0" name="ano" class="border-0 p-0 m-0 align-middle border-bottom footer_field responsive_input" style="width:50px;">
                                </div>
                                <div class="d-flex align-items-center">$<input type="text" min="0" name="ano" class="border-0 p-0 m-0 align-middle border-bottom footer_field responsive_input "  style="width:75px;">
                                </div>
                                <div class="mt-4">INGRESOS BRUTOS MENSUALES ACTUALES:</div>
                                <div>Todos los montos deben ser MENSUALES. Vea las instrucciones de este formulario para
                                    calcular montos de dinero para cualquier cosa que NO se pague mensualmente. Adjunte más</div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="section_area">
                    <div class="row">
                        <div class="col-lg-10 mx-auto">
                            <div class="px-lg-5 mx-auto px-2 py-5 ">
                                <div class="text-end border-bottom">Order ID: 6607400ce5fa90d84a01a9d5</div>
                                <div class="my-4">papel si es necesario. Los elementos incluidos en "otros" deben
                                    listarse por separado con montos en dólares separados.</div>
                                <div class="d-flex d_sm_block">
                                    <span class="me-2">1.</span>
                                    <input type="text" min="0" name="salario_1" class="border-0 p-0 m-0 responsive_input border-bottom footer_field align-top"  style="width: 80px">Salario o sueldo bruto mensual
                                </div>
                                <div class="d-flex d_sm_block">
                                    <span class="me-2">2.</span>
                                    <input type="text" min="0" name="bonos_2" class="border-0 p-0 m-0 responsive_input  border-bottom footer_field align-top " style="width: 80px">Bonos mensuales, comisiones, subsidios, horas extras,
                                    propinas y pagos similares
                                </div>
                                <div class=" d_sm_block">
                                    <span class="me-2">3.</span>
                                    <input type="text" min="0" name="ingresos_3"
                                        class="border-0 p-0  m-0 responsive_input border-bottom footer_field align-top "
                                        style="width: 80px">Ingresos mensuales del negocio de fuentes como autoempleo,
                                    sociedades, corporaciones cerradas y/o contratos independientes (Ingresos brutos
                                    menos los gastos ordinarios y necesarios para producir ingresos.) (Adjunte hoja
                                    detallando tales ingresos y gastos.)
                                </div>
                                <div class="d-flex d_sm_block">
                                    <span class="me-2">4.</span>
                                    <input type="text" min="0" name="beneficios_4"
                                        class="border-0 p-0 m-0 responsive_input border-bottom footer_field align-top "
                                        style="width: 80px"> Beneficios por discapacidad/SSI mensuales
                                </div>

                                <div class="d-flex d_sm_block">
                                    <span class="me-2">5.</span>
                                    <input type="text" min="0" name="compensacion_5" class="border-0 p-0 m-0 border-bottom footer_field align-top " style="width: 80px">Compensación de Trabajadores mensual
                                </div>
                                <div class="d-flex d_sm_block">
                                    <span class="me-2">6.</span>
                                    <input type="text" min="0" name="compensacion_6" class="border-0 p-0 m-0 border-bottom footer_field align-top " style="width: 80px">Compensación por Desempleo mensual
                                </div>
                                <div class="d-flex d_sm_block">
                                    <span class="me-2">7.</span>
                                    <input type="text" min="0" name="pagos_7" class="border-0 p-0 m-0 border-bottom footer_field align-top " style="width: 80px">Pagos mensuales de pensión, jubilación o anualidades
                                </div>
                                <div class="d-flex d_sm_block">
                                    <span class="me-2">8.</span>
                                    <input type="text" min="0" name="beneficios_8" class="border-0 p-0 m-0 border-bottom footer_field align-top" style="width: 80px"> Beneficios del Seguro Social mensuales
                                </div>
                                <div class="d-flex d_sm_block">
                                    <span class="me-2">9.</span>
                                    <input type="text" min="0" name="pension_9"
                                        class="border-0 p-0 m-0 border-bottom footer_field align-top "
                                        style="width: 80px">Pensión alimenticia realmente recibida mensualmente (Sumar 9a y 9b)
                                </div>
                                <div class="d-flex d_sm_block align-items-center">
                                    <span class="pe-2">9a. </span>De este caso: <span class=""> $</span><input
                                        type="text" min="0" name="de_9a"
                                        class="border-0 p-0 m-0 align-middle border-bottom footer_field responsive_input" style="width:118px;">
                                </div>
                                <div class="d-flex d_sm_block align-items-center">
                                    <span class="pe-2">9b. </span> De otros casos: <span
                                        class=""> $</span><input type="text" min="0" name="de_9b"
                                        class="border-0 p-0 m-0 align-middle border-bottom footer_field responsive_input " style="width:100px;">
                                </div>
                                <div class="d-flex d_sm_block">
                                    <span class="me-2">10.</span>
                                    <input type="text" min="0" name="mid_10" class="border-0 p-0 m-0 border-bottom footer_field align-top " style="width: 80px">Intereses y dividendos mensuales
                                </div>
                                <div class=" d_sm_block">
                                    <span class="me-2">11.</span>
                                    <input type="text" min="0" name="ngresos_11" class="border-0 p-0  m-0 border-bottom footer_field align-top " style="width: 80px">ngresos por alquiler mensuales (ingresos brutos menos los
                                    gastos ordinarios y necesarios para producir ingresos) (Adjunte hoja detallando tales ingresos y gastos.)
                                </div>
                                <div class="d-flex d_sm_block">
                                    <span class="me-2">12.</span>
                                    <input type="text" min="0" name="ingresos_12"
                                        class="border-0 p-0 m-0 border-bottom footer_field align-top "
                                        style="width: 80px">Ingresos mensuales por derechos de autor, fideicomisos o herencias
                                </div>
                                <div class=" d_sm_block">
                                    <span class="me-2">13.</span>
                                    <input type="text" min="0" name="igastos_13"
                                        class="border-0 p-0 m-0 border-bottom footer_field align-top "
                                        style="width: 80px">IGastos reembolsados e ingresos en especie mensuales en la medida en que reducen los gastos personales de vida (Adjunte hoja detallando cada elemento y monto.)
                                </div>
                                <div class="d-flex d_sm_block">
                                    <span class="me-2">14.</span>
                                    <input type="text" min="0" name="ganancias_14"  class="border-0 p-0 m-0  border-bottom footer_field align-top "  style="width: 80px">Ganancias mensuales derivadas de tratos con propiedades (no
                                    incluyendo ganancias no recurrentes)
                                </div>
                                <div class="d-flex d_sm_block">
                                    <span class="me-2">15.</span>
                                    <input type="text" min="0" name="cualquier_15"
                                        class="border-0 p-0 m-0  border-bottom footer_field align-top "
                                        style="width: 80px">Cualquier otro ingreso de naturaleza recurrente
                                    (identificar fuente):
                                </div>
                                <div class="d-flex d_sm_block">
                                    <span class="me-2">15.</span>
                                    <input type="text" min="0" name="cualquier_15a"
                                        class="border-0 p-0 m-0  border-bottom footer_field align-top w-100">
                                </div>
                                <div class="d-flex d_sm_block">
                                    <span class="me-2">16.</span>
                                    <input type="text" min="0" name="blank_16"
                                        class="border-0 p-0 m-0  border-bottom footer_field align-top w-100">
                                </div>
                                <div class="d-flex d_sm_block">
                                    <span class="me-2">17.</span>
                                    <sapn class="">$</sapn>
                                    <input type="text" min="0" name="cualquier_17"
                                        class="border-0 p-0 m-0  border-bottom footer_field align-top "
                                        style="width: 80px">Cualquier otro ingreso de naturaleza recurrente
                                    (identificar fuente):
                                </div>

                                <div class="mt-4">DEDUCCIONES MENSUALES ACTUALES:</div>
                                <div>Todos los montos deben ser MENSUALES. Vea las instrucciones de este formulario para
                                    calcular montos de dinero para cualquier cosa que NO se pague mensualmente.</div>
                                <div class="  d_sm_block">
                                    <span class="me-2">18.</span>
                                    <sapn class="">$</sapn>
                                    <input type="text" min="0" name="impuestos_18"
                                        class="border-0 p-0 m-0   border-bottom footer_field align-top "
                                        style="width: 80px">Impuestos mensuales federales, estatales y locales sobre la
                                    renta (corregidos por estado civil para declarar y dependientes permisibles y
                                    obligaciones fiscales)
                                </div>
                                <div class="d-flex d_sm_block">
                                    <span class="me-2">a.</span>Estado civil para declarar
                                </div>
                                <div class="d-flex d_sm_block">
                                    <span class="me-2">b.</span>Número de dependientes reclamados
                                </div>

                                <div class="  d_sm_block">
                                    <span class="me-2">19.</span>
                                    <input type="text" min="0" name="impuestos_19"
                                        class="border-0 p-0 m-0  border-bottom footer_field align-top "
                                        style="width: 80px">Impuestos FICA o impuestos para autoempleados mensuales
                                    Formulario de Reglas de Procedimiento de Derecho Familiar de Florida 12.902(c),
                                    Declaración Jurada Financiera de Derecho Familiar (Formulario Largo) (10/21)
                                </div>
                                <div class="d-flex d_sm_block">
                                    <span class="me-2">20.</span>
                                    <input type="text" min="0" name="pagos_20"
                                        class="border-0 p-0 m-0   border-bottom footer_field align-top "
                                        style="width: 80px">Pagos mensuales de Medicare
                                </div>
                                <div class="d-flex d_sm_block">
                                    <span class="me-2">21.</span>
                                    <input type="text" min="0" name="cuotas_21"
                                        class="border-0 p-0 m-0   border-bottom footer_field align-top "
                                        style="width: 80px">Cuotas sindicales obligatorias mensuales
                                </div>
                                <div class="d-flex d_sm_block">
                                    <span class="me-2">22.</span>
                                    <input type="text" min="0" name="pagos_22"
                                        class="border-0 p-0 m-0   border-bottom footer_field align-top "
                                        style="width: 80px"> Pagos de jubilación obligatorios mensuales
                                </div>
                            </div>
                        </div>
                </section>
                <section class="section_area">
                    <div class="row">
                        <div class="col-lg-10 mx-auto">
                            <div class="px-lg-5 mx-auto px-2 py-5 ">
                                <div class="text-end border-bottom">Order ID: 6607400ce5fa90d84a01a9d5</div>
                                <div class=" mt-4 d_sm_block">
                                    <span class="me-2">23.</span>
                                    <input type="text" min="0" name="pagos_23"
                                        class="border-0 p-0 m-0 responsive_inupt border-bottom footer_field align-top "
                                        style="width: 80px"> Pagos mensuales de seguro de salud (incluyendo seguro
                                    dental), excluyendo la porción pagada por cualquier hijo menor de esta relación
                                </div>
                                <div class="d-flex d_sm_block ">
                                    <span class="me-2 ">24.</span>
                                    <input type="text" min="0" name="manutencion_24"
                                        class="border-0 p-0 m-0 responsive_input border-bottom footer_field align-top "
                                        style="width: 80px">Manutención infantil ordenada por la corte y realmente
                                    pagada para los hijos de otra relación
                                </div>
                                <div class="d-flex d_sm_block ">
                                    <span class="me-2">25.</span>
                                    <input type="text" min="0" name="pension_25"
                                        class="border-0 p-0 m-0  responsive_input  border-bottom footer_field align-top "
                                        style="width: 80px">Pensión alimenticia ordenada por la corte y realmente
                                    pagada mensualmente (Sumar 25a y 25b)
                                </div>
                                <div class="d-flex d_sm_block align-items-center">
                                    <span class="pe-2">25a. </span>de este caso: <span class="">$</span><input
                                        type="text" min="0" name="de_25a"
                                        class="border-0 p-0 m-0 align-middle border-bottom footer_field responsive_input w-25 ">
                                </div>
                                <div class="d-flex d_sm_block align-items-center">
                                    <span class="pe-2">25b. </span>de otros casos:<span
                                        class="">$</span><input type="text" min="0" name="de_25b"
                                        class="border-0 p-0 m-0 align-middle border-bottom footer_field responsive_input w-25 ">
                                </div>
                                <div class=" d_sm_block">
                                    <span class="me-2">26.</span>
                                    <sapn class="">$</sapn>
                                    <input type="text" min="0" name="total_26"
                                        class="border-0 p-0 m-0 responsive_input  border-bottom footer_field align-top "
                                        style="width: 80px">TOTAL DE DEDUCCIONES PERMISIBLES BAJO LA SECCIÓN 61.30,
                                    ESTATUTOS DE FLORIDA (Sumar las líneas 18 a 25.)
                                </div>
                                <div class="d-flex d_sm_block">
                                    <span class="me-2">27.</span>
                                    <sapn class="">$</sapn>
                                    <input type="text" min="0" name="ingreso_27"
                                        class="border-0 p-0 m-0 responsive_input border-bottom footer_field align-top "
                                        style="width: 80px">INGRESO NETO MENSUAL ACTUAL
                                </div>
                                <div>(Restar la línea 26 de la línea 17.)</div>

                                <div class="mt-4">SECCIÓN II. GASTOS MENSUALES PROMEDIO</div>
                                <div>Gastos propuestos/estimados. Si este es un caso de disolución de matrimonio y sus
                                    gastos, como se enumeran a continuación, no reflejan lo que actualmente paga, debe
                                    escribir "estimado" junto a cada monto que sea estimado.</div>

                                <div class="mt-4">HOGAR:</div>
                                <div class="d-flex d_sm_block">
                                    <span class="me-2">1.</span>
                                    <sapn class="">$</sapn>
                                    <input type="text" min="0" name="hogar_1"
                                        class="border-0 p-0 m-0 responsive_input border-bottom footer_field align-top "
                                        style="width: 80px">Pagos mensuales de hipoteca o alquiler
                                </div>
                                <div class="d-flex d_sm_block">
                                    <span class="me-2">2.</span>
                                    <input type="text" min="0" name="hogar_2"
                                        class="border-0 p-0 m-0 responsive_input  border-bottom footer_field align-top "
                                        style="width: 80px">Impuestos de propiedad mensuales (si no están incluidos en
                                    la hipoteca)
                                </div>
                                <div class="d-flex d_sm_block">
                                    <span class="me-2">3.</span>
                                    <input type="text" min="0" name="hogar_3"
                                        class="border-0 p-0 m-0 responsive_input responsive_input  border-bottom footer_field align-top "
                                        style="width: 80px">Seguro mensual de residencia (si no está incluido en la
                                    hipoteca)
                                </div>
                                <div class="d-flex d_sm_block ">
                                    <span class="me-2">4.</span>
                                    <input type="text" min="0" name="hogar_4"
                                        class="border-0 p-0 m-0 responsive_input   border-bottom footer_field align-top "
                                        style="width: 80px">Cuotas mensuales de mantenimiento de condominio y cuotas de
                                    asociación de propietarios
                                </div>
                                <div class="d-flex d_sm_block ">
                                    <span class="me-2">5.</span>
                                    <input type="text" min="0" name="hogar_5"
                                        class="border-0 p-0 m-0 responsive_input   border-bottom footer_field align-top "
                                        style="width: 80px">Electricidad mensual
                                </div>
                                <div class="d-flex d_sm_block ">
                                    <span class="me-2">6.</span>
                                    <input type="text" min="0" name="hogar_6"
                                        class="border-0 p-0 m-0 responsive_input   border-bottom footer_field align-top "
                                        style="width: 80px">Agua, basura y alcantarillado mensuales
                                </div>
                                <div class="d-flex d_sm_block ">
                                    <span class="me-2">7.</span>
                                    <input type="text" min="0" name="hogar_7"
                                        class="border-0 p-0 m-0 responsive_input   border-bottom footer_field align-top "
                                        style="width: 80px">Teléfono mensual
                                </div>
                                <div class="d-flex d_sm_block ">
                                    <span class="me-2">8.</span>
                                    <input type="text" min="0" name="hogar_8"
                                        class="border-0 p-0 m-0 responsive_input   border-bottom footer_field align-top "
                                        style="width: 80px">Aceite para calefacción o gas natural mensuales
                                </div>
                                <div class="d-flex d_sm_block ">
                                    <span class="me-2">9.</span>
                                    <input type="text" min="0" name="hogar_9"
                                        class="border-0 p-0 m-0 responsive_input   border-bottom footer_field align-top "
                                        style="width: 80px">Reparaciones y mantenimiento mensuales
                                </div>
                                <div class="d-flex d_sm_block ">
                                    <span class="me-2">10.</span>
                                    <input type="text" min="0" name="hogar_10"
                                        class="border-0 p-0 m-0 responsive_input   border-bottom footer_field align-top "
                                        style="width: 80px">Cuidado del césped mensual
                                </div>
                                <div class="d-flex d_sm_block ">
                                    <span class="me-2">11.</span>
                                    <input type="text" min="0" name="hogar_11"
                                        class="border-0 p-0 m-0 responsive_input   border-bottom footer_field align-top "
                                        style="width: 80px">Mantenimiento de la piscina mensual
                                </div>
                                <div class="d-flex d_sm_block ">
                                    <span class="me-2">12.</span>
                                    <input type="text" min="0" name="hogar_12"
                                        class="border-0 p-0 m-0 responsive_input   border-bottom footer_field align-top "
                                        style="width: 80px">Control de plagas mensual
                                </div>
                                <div class="d-flex d_sm_block ">
                                    <span class="me-2">13.</span>
                                    <input type="text" min="0" name="hogar_13"
                                        class="border-0 p-0 m-0 responsive_input   border-bottom footer_field align-top "
                                        style="width: 80px">Otros gastos del hogar mensuales
                                </div>
                                <div class="d-flex d_sm_block ">
                                    <span class="me-2">14.</span>
                                    <input type="text" min="0" name="hogar_14"
                                        class="border-0 p-0 m-0 responsive_input   border-bottom footer_field align-top "
                                        style="width: 80px">Alimentos y suministros para el hogar mensuales
                                </div>
                                <div class="d-flex d_sm_block ">
                                    <span class="me-2">15.</span>
                                    <input type="text" min="0" name="hogar_15"
                                        class="border-0 p-0 m-0 responsive_input   border-bottom footer_field align-top "
                                        style="width: 80px">Comidas fuera de casa mensuales
                                </div>
                                <div class="d-flex d_sm_block ">
                                    <span class="me-2">16.</span>
                                    <input type="text" min="0" name="hogar_16"
                                        class="border-0 p-0 m-0 responsive_input   border-bottom footer_field align-top "
                                        style="width: 80px">Televisión por cable mensual
                                </div>
                                <div class="d-flex d_sm_block ">
                                    <span class="me-2">17.</span>
                                    <input type="text" min="0" name="hogar_17"
                                        class="border-0 p-0 m-0 responsive_input   border-bottom footer_field align-top "
                                        style="width: 80px">Contrato de servicio de alarma mensual
                                </div>
                                <div class="d-flex d_sm_block ">
                                    <span class="me-2">18.</span>
                                    <input type="text" min="0" name="hogar_18"
                                        class="border-0 p-0 m-0 responsive_input   border-bottom footer_field align-top "
                                        style="width: 80px">Contratos de servicio para electrodomésticos mensuales
                                </div>
                                <div class="d-flex d_sm_block ">
                                    <span class="me-2">19.</span>
                                    <input type="text" min="0" name="hogar_19"
                                        class="border-0 p-0 m-0 responsive_input   border-bottom footer_field align-top "
                                        style="width: 80px">Servicio de limpieza mensual
                                </div>
                                <div>Others:</div>
                                <div class="d-flex">
                                    <span class="me-2">20.</span>
                                    <input type="text" min="0" name="hogar_20"
                                        class="border-0 p-0 m-0   border-bottom footer_field align-top w-100">
                                </div>
                                <div class="d-flex">
                                    <span class="me-2">21.</span>
                                    <input type="text" min="0" name="hogar_21"
                                        class="border-0 p-0 m-0  border-bottom footer_field align-top w-100">
                                </div>
                                <div class="d-flex">
                                    <span class="me-2">22.</span>
                                    <input type="text" min="0" name="hogar_22"
                                        class="border-0 p-0 m-0  border-bottom footer_field align-top w-100">
                                </div>
                                <div class="d-flex">
                                    <span class="me-2">23.</span>
                                    <input type="text" min="0" name="hogar_23"
                                        class="border-0 p-0 m-0  border-bottom footer_field align-top w-100">
                                </div>

                            </div>
                        </div>
                    </div>
                </section>

                <section class="section_area">
                    <div class="row">
                        <div class="col-lg-10 mx-auto">
                            <div class="px-lg-5 mx-auto px-2 py-5 ">
                                <div class="text-end border-bottom">Order ID: 6607400ce5fa90d84a01a9d5</div>
                                <div class="d-flex mt-4 ">
                                    <span class="me-2">24.</span>
                                    <input type="text" min="0" name="hogar_24"
                                        class="border-0 p-0 m-0  border-bottom footer_field align-top w-100">
                                </div>
                                <div class="d-flex d_sm_block">
                                    <span class="me-2">25.</span>
                                    <sapn class="">$</sapn>
                                    <input type="text" min="0" name="hogar_25"
                                        class="border-0 p-0 m-0 responsive_input border-bottom footer_field align-top "
                                        style="width: 80px">SUBTOTAL (Sumar las líneas 1 a 24.)
                                </div>

                                <div class="my-4">Formulario de Reglas de Procedimiento de Derecho Familiar de
                                    Florida 12.902(c), Declaración Jurada Financiera de Derecho Familiar (Formulario
                                    Largo) (10/21)</div>

                                <div>AUTOMÓVIL:</div>
                                <div class="d-flex d_sm_block">
                                    <span class="me-2">26.</span>
                                    <sapn class="">$</sapn>
                                    <input type="text" min="0" name="automovil_26"
                                        class="border-0 p-0 m-0 responsive_input border-bottom footer_field align-top "
                                        style="width: 80px">Gasolina y aceite mensuales
                                </div>
                                <div class="d-flex d_sm_block ">
                                    <span class="me-2">27.</span>
                                    <input type="text" min="0" name="automovil_27"
                                        class="border-0 p-0 m-0 responsive_input   border-bottom footer_field align-top "
                                        style="width: 80px">Reparaciones mensuales
                                </div>
                                <div class="d-flex d_sm_block ">
                                    <span class="me-2">28.</span>
                                    <input type="text" min="0" name="automovil_28"
                                        class="border-0 p-0 m-0 responsive_input    border-bottom footer_field align-top "
                                        style="width: 80px"> Etiquetas de auto mensuales y pruebas de emisión
                                </div>
                                <div class="d-flex d_sm_block ">
                                    <span class="me-2">29.</span>
                                    <input type="text" min="0" name="automovil_29"
                                        class="border-0 p-0 m-0 responsive_input   border-bottom footer_field align-top "
                                        style="width: 80px">Seguro mensual
                                </div>
                                <div class="d-flex d_sm_block ">
                                    <span class="me-2">30.</span>
                                    <input type="text" min="0" name="automovil_30"
                                        class="border-0 p-0 m-0 responsive_input   border-bottom footer_field align-top "
                                        style="width: 80px">Pagos mensuales (arrendamiento o Financiamiento)
                                </div>
                                <div class="d-flex d_sm_block ">
                                    <span class="me-2">31.</span>
                                    <input type="text" min="0" name="automovil_31"
                                        class="border-0 p-0 m-0 responsive_input   border-bottom footer_field align-top "
                                        style="width: 80px">Alquiler/reemplazos mensuales
                                </div>
                                <div class="d-flex d_sm_block ">
                                    <span class="me-2">32.</span>
                                    <input type="text" min="0" name="automovil_32"
                                        class="border-0 p-0 m-0 responsive_input   border-bottom footer_field align-top "
                                        style="width: 80px">Transporte alternativo mensual (autobús, tren, compartir
                                    coche, etc.)
                                </div>
                                <div class="d-flex d_sm_block ">
                                    <span class="me-2">33.</span>
                                    <input type="text" min="0" name="automovil_33"
                                        class="border-0 p-0 m-0 responsive_input   border-bottom footer_field align-top "
                                        style="width: 80px">Peajes y estacionamiento mensuales
                                </div>
                                <div class="d-flex d_sm_block ">
                                    <span class="me-2">34.</span>
                                    <input type="text" min="0" name="automovil_34"
                                        class="border-0 p-0 m-0 responsive_input   border-bottom footer_field align-top "
                                        style="width: 80px">Otros:<input type="text" min="0"
                                        name="mid_10"
                                        class="border-0 p-0 m-0 responsive_input   border-bottom footer_field align-top w-100">
                                </div>
                                <div class="d-flex d_sm_block">
                                    <span class="me-2">35.</span>
                                    <sapn class="">$</sapn>
                                    <input type="text" min="0" name="automovil_35"
                                        class="border-0 p-0 m-0 responsive_input border-bottom footer_field align-top "
                                        style="width: 80px">SUBTOTAL (Sumar las líneas 26 a 34.)
                                </div>
                                <div class="mt-4">
                                    GASTOS MENSUALES POR HIJOS COMUNES A AMBAS PARTES:</div>
                                <div class="d-flex d_sm_block">
                                    <span class="me-2">36.</span>
                                    <sapn class="">$</sapn>
                                    <input type="text" min="0" name="gastos_36"
                                        class="border-0 p-0 m-0 responsive_input border-bottom footer_field align-top "
                                        style="width: 80px">Guardería, niñera o cuidado diurno mensual
                                </div>
                                <div class="d-flex d_sm_block ">
                                    <span class="me-2">37.</span>
                                    <input type="text" min="0" name="gastos_37"
                                        class="border-0 p-0 m-0 responsive_input   border-bottom footer_field align-top "
                                        style="width: 80px">Colegiatura mensual
                                </div>
                                <div class="d-flex d_sm_block ">
                                    <span class="me-2">38.</span>
                                    <input type="text" min="0" name="gastos_38"
                                        class="border-0 p-0 m-0 responsive_input   border-bottom footer_field align-top "
                                        style="width: 80px">Útiles escolares, libros y cuotas mensuales
                                </div>
                                <div class="d-flex d_sm_block ">
                                    <span class="me-2">39.</span>
                                    <input type="text" min="0" name="gastos_39"
                                        class="border-0 p-0 m-0 responsive_input   border-bottom footer_field align-top "
                                        style="width: 80px">Actividades extracurriculares mensuales
                                </div>
                                <div class="d-flex d_sm_block ">
                                    <span class="me-2">40.</span>
                                    <input type="text" min="0" name="gastos_40"
                                        class="border-0 p-0 m-0 responsive_input   border-bottom footer_field align-top "
                                        style="width: 80px">Dinero para el almuerzo mensual
                                </div>
                                <div class="d-flex d_sm_block ">
                                    <span class="me-2">41.</span>
                                    <input type="text" min="0" name="gastos_41"
                                        class="border-0 p-0 m-0 responsive_input   border-bottom footer_field align-top "
                                        style="width: 80px">Lecciones privadas o tutoría mensual
                                </div>
                                <div class="d-flex d_sm_block ">
                                    <span class="me-2">42.</span>
                                    <input type="text" min="0" name="gastos_42"
                                        class="border-0 p-0 m-0 responsive_input   border-bottom footer_field align-top "
                                        style="width: 80px">Mesada mensual
                                </div>
                                <div class="d-flex d_sm_block ">
                                    <span class="me-2">43.</span>
                                    <input type="text" min="0" name="gastos_43"
                                        class="border-0 p-0 m-0 responsive_input   border-bottom footer_field align-top "
                                        style="width: 80px">Ropa y uniformes mensuales
                                </div>
                                <div class="d-flex d_sm_block ">
                                    <span class="me-2">44.</span>
                                    <input type="text" min="0" name="gastos_44"
                                        class="border-0 p-0 m-0 responsive_input   border-bottom footer_field align-top "
                                        style="width: 80px">Entretenimiento mensual (cine, fiestas, etc.)
                                </div>
                                <div class="d-flex d_sm_block ">
                                    <span class="me-2">45.</span>
                                    <input type="text" min="0" name="gastos_45"
                                        class="border-0 p-0 m-0 responsive_input   border-bottom footer_field align-top "
                                        style="width: 80px">Seguro de salud mensual
                                </div>
                                <div class="d-flex d_sm_block ">
                                    <span class="me-2">46.</span>
                                    <input type="text" min="0" name="gastos_46"
                                        class="border-0 p-0 m-0 responsive_input   border-bottom footer_field align-top "
                                        style="width: 80px">Médico, dental, recetas (solo lo no reembolsado) mensual
                                </div>
                                <div class="d-flex d_sm_block ">
                                    <span class="me-2">47.</span>
                                    <input type="text" min="0" name="gastos_47"
                                        class="border-0 p-0 m-0 responsive_input   border-bottom footer_field align-top "
                                        style="width: 80px">Servicios de psiquiatría/psicología/consejero mensual
                                </div>
                                <div class="d-flex d_sm_block ">
                                    <span class="me-2">48.</span>
                                    <input type="text" min="0" name="gastos_48"
                                        class="border-0 p-0 m-0 responsive_input   border-bottom footer_field align-top "
                                        style="width: 80px">Ortodoncia mensual
                                </div>
                                <div class="d-flex d_sm_block ">
                                    <span class="me-2">49.</span>
                                    <input type="text" min="0" name="gastos_49"
                                        class="border-0 p-0 m-0 responsive_input   border-bottom footer_field align-top "
                                        style="width: 80px"> Vitaminas mensualesal
                                </div>
                                <div class="d-flex d_sm_block ">
                                    <span class="me-2">50.</span>
                                    <input type="text" min="0" name="gastos_50"
                                        class="border-0 p-0 m-0 responsive_input   border-bottom footer_field align-top "
                                        style="width: 80px">Servicios de peluquería/barbería mensualesnsual
                                </div>
                                <div class="d-flex d_sm_block ">
                                    <span class="me-2">51.</span>
                                    <input type="text" min="0" name="gastos_51"
                                        class="border-0 p-0 m-0 responsive_input   border-bottom footer_field align-top "
                                        style="width: 80px">Medicamentos sin receta médica mensuales
                                </div>
                                <div class="d-flex d_sm_block ">
                                    <span class="me-2">52.</span>
                                    <input type="text" min="0" name="gastos_52"
                                        class="border-0 p-0 m-0 responsive_input   border-bottom footer_field align-top "
                                        style="width: 80px">Cosméticos mensuales, artículos de tocador y varios
                                </div>
                                <div class="d-flex d_sm_block ">
                                    <span class="me-2">53.</span>
                                    <input type="text" min="0" name="gastos_53"
                                        class="border-0 p-0 m-0 responsive_input   border-bottom footer_field align-top "
                                        style="width: 80px">Regalos mensuales de hijo(s) a otros (otros niños,
                                    familiares, profesores, etc.)
                                </div>
                                <div class="d-flex d_sm_block ">
                                    <span class="me-2">54.</span>
                                    <input type="text" min="0" name="gastos_54"
                                        class="border-0 p-0 m-0 responsive_input   border-bottom footer_field align-top "
                                        style="width: 80px">Campamentos o actividades de verano mensuales
                                </div>
                                <div class="d-flex d_sm_block ">
                                    <span class="me-2">55.</span>
                                    <input type="text" min="0" name="gastos_55"
                                        class="border-0 p-0 m-0 responsive_input   border-bottom footer_field align-top "
                                        style="width: 80px">Clubes mensuales (Boy/Girl Scouts, etc.)
                                </div>
                                <div class="d-flex d_sm_block ">
                                    <span class="me-2">56.</span>
                                    <input type="text" min="0" name="gastos_56"
                                        class="border-0 p-0 m-0 responsive_input   border-bottom footer_field align-top "
                                        style="width: 80px">Gastos mensuales de tiempo compartido
                                </div>
                                <div class="d-flex d_sm_block ">
                                    <span class="me-2">57.</span>
                                    <input type="text" min="0" name="gastos_57"
                                        class="border-0 p-0 m-0 responsive_input   border-bottom footer_field align-top "
                                        style="width: 80px">Miscelánea mensual
                                </div>
                                <div class="d-flex d_sm_block">
                                    <span class="me-2">58.</span>
                                    <sapn class="">$</sapn>
                                    <input type="text" min="0" name="gastos_58"
                                        class="border-0 p-0 m-0 responsive_input border-bottom footer_field align-top "
                                        style="width: 80px">SUBTOTAL (Sumar las líneas 36 a 57.)
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="section_area">
                    <div class="row">
                        <div class="col-lg-10 mx-auto">
                            <div class="px-lg-5 mx-auto px-2 py-5 ">
                                <div class="text-end border-bottom">Order ID: 6607400ce5fa90d84a01a9d5</div>
                                <div class="mt-4">GASTOS MENSUALES PARA HIJO(S) DE OTRA RELACIÓN (distintos del apoyo
                                    de manutención ordenado por el tribunal)</div>
                                <div class="d-flex">
                                    <span class="me-2">59.</span>
                                    <sapn class="">$</sapn>
                                    <input type="text" min="0" name="gastos_59"
                                        class="border-0 p-0 m-0   border-bottom footer_field align-top w-100">
                                </div>

                                <div class="d-flex">
                                    <span class="me-2">60.</span>
                                    <input type="text" min="0" name="gastos_60"
                                        class="border-0 p-0 m-0   border-bottom footer_field align-top w-100">
                                </div>
                                <div class="d-flex">
                                    <span class="me-2">61.</span>
                                    <input type="text" min="0" name="gastos_61"
                                        class="border-0 p-0 m-0   border-bottom footer_field align-top w-100">
                                </div>
                                <div class="d-flex">
                                    <span class="me-2">62.</span>
                                    <input type="text" min="0" name="gastos_62"
                                        class="border-0 p-0 m-0   border-bottom footer_field align-top w-100">
                                </div>
                                <div class="d-flex d_sm_block">
                                    <span class="me-2">63.</span>
                                    <sapn class="">$</sapn>
                                    <input type="text" min="0" name="gastos_63"
                                        class="border-0 p-0 m-0 responsive_input border-bottom footer_field align-top "
                                        style="width: 80px">SUBTOTAL (Sumar las líneas 59 a 62.)
                                </div>
                                <div>Formulario de Reglas de Procedimiento de Ley de Familia de Florida 12.902(c),
                                    Declaración Financiera de Ley de Familia (Formulario Largo) (10/21)</div>

                                <div class="mt-4">
                                    SEGUROS MENSUALES:</div>
                                <div class="d-flex d_sm_block">
                                    <span class="me-2">64.</span>
                                    <sapn class="">$</sapn>
                                    <input type="text" min="0" name="seguros_64"
                                        class="border-0 p-0 m-0 responsive_input border-bottom footer_field align-top "
                                        style="width: 80px">Seguro de salud (si no se enumera en las líneas 23 o 45)
                                </div>
                                <div class="d-flex d_sm_block ">
                                    <span class="me-2">65.</span>
                                    <input type="text" min="0" name="seguros_65"
                                        class="border-0 p-0 m-0 responsive_input   border-bottom footer_field align-top "
                                        style="width: 80px">Seguro de vida
                                </div>
                                <div class="d-flex d_sm_block ">
                                    <span class="me-2">66.</span>
                                    <input type="text" min="0" name="seguros_66"
                                        class="border-0 p-0 m-0 responsive_input   border-bottom footer_field align-top "
                                        style="width: 80px">Seguro dental.
                                </div>
                                <div>Otro:</div>
                                <div class="d-flex d_sm_block">
                                    <span class="me-2">67.</span>
                                    <input type="text" min="0" name="otro_67"
                                        class="border-0 p-0 m-0 responsive_input   border-bottom footer_field align-top w-100">
                                </div>
                                <div class="d-flex d_sm_block">
                                    <span class="me-2">68.</span>
                                    <input type="text" min="0" name="otro_68"
                                        class="border-0 p-0 m-0 responsive_input   border-bottom footer_field align-top w-100">
                                </div>
                                <div class="d-flex d_sm_block">
                                    <span class="me-2">69.</span>
                                    <sapn class="">$</sapn>
                                    <input type="text" min="0" name="otro_69"
                                        class="border-0 p-0 m-0 responsive_input border-bottom footer_field align-top "
                                        style="width: 80px">SUBTOTAL (Sumar las líneas 66 a 68, excluir las líneas 64
                                    y
                                    65.)
                                </div>
                                <div class="mt-4">OTROS GASTOS MENSUALES NO ENUMERADOS ARRIBA:</div>
                                <div class="d-flex d_sm_block">
                                    <span class="me-2">70.</span>
                                    <sapn class="">$</sapn>
                                    <input type="text" min="0" name="otros_70"
                                        class="border-0 p-0 m-0 responsive_input border-bottom footer_field align-top "
                                        style="width: 80px">Limpieza en seco y lavandería mensual
                                </div>
                                <div class="d-flex d_sm_block ">
                                    <span class="me-2">71.</span>
                                    <input type="text" min="0" name="otros_71"
                                        class="border-0 p-0 m-0 responsive_input   border-bottom footer_field align-top "
                                        style="width: 80px">Ropa mensual
                                </div>
                                <div class="d-flex d_sm_block ">
                                    <span class="me-2">72.</span>
                                    <input type="text" min="0" name="otros_72"
                                        class="border-0 p-0 m-0 responsive_input   border-bottom footer_field align-top "
                                        style="width: 80px">Gastos médicos, dentales y de recetas (solo no
                                    reembolsados)
                                </div>
                                <div class="d-flex d_sm_block ">
                                    <span class="me-2">73.</span>
                                    <input type="text" min="0" name="otros_73"
                                        class="border-0 p-0 m-0 responsive_input   border-bottom footer_field align-top "
                                        style="width: 80px">Gastos psiquiátricos, psicológicos o de consejería (solo
                                    no reembolsados)
                                </div>
                                <div class="d-flex d_sm_block ">
                                    <span class="me-2">74.</span>
                                    <input type="text" min="0" name="otros_74"
                                        class="border-0 p-0 m-0 responsive_input   border-bottom footer_field align-top "
                                        style="width: 80px">Medicamentos sin receta, cosméticos, artículos de tocador
                                    y varios mensuales
                                </div>
                                <div class="d-flex d_sm_block ">
                                    <span class="me-2">75.</span>
                                    <input type="text" min="0" name="otros_75"
                                        class="border-0 p-0 m-0 responsive_input   border-bottom footer_field align-top "
                                        style="width: 80px">Aseo personal mensual
                                </div>
                                <div class="d-flex d_sm_block ">
                                    <span class="me-2">76.</span>
                                    <input type="text" min="0" name="otros_76"
                                        class="border-0 p-0 m-0 responsive_input   border-bottom footer_field align-top "
                                        style="width: 80px">Regalos mensuales
                                </div>
                                <div class="d-flex d_sm_block ">
                                    <span class="me-2">77.</span>
                                    <input type="text" min="0" name="otros_77"
                                        class="border-0 p-0 m-0 responsive_input   border-bottom footer_field align-top "
                                        style="width: 80px">Gastos mensuales de mascotas
                                </div>
                                <div class="d-flex d_sm_block ">
                                    <span class="me-2">78.</span>
                                    <input type="text" min="0" name="otros_78"
                                        class="border-0 p-0 m-0 responsive_input   border-bottom footer_field align-top "
                                        style="width: 80px">Cuotas de clubes y membresías mensuales
                                </div>
                                <div class="d-flex d_sm_block ">
                                    <span class="me-2">79.</span>
                                    <input type="text" min="0" name="otros_79"
                                        class="border-0 p-0 m-0 responsive_input   border-bottom footer_field align-top "
                                        style="width: 80px">Deportes y pasatiempos mensuales
                                </div>
                                <div class="d-flex d_sm_block ">
                                    <span class="me-2">80.</span>
                                    <input type="text" min="0" name="otros_80"
                                        class="border-0 p-0 m-0 responsive_input   border-bottom footer_field align-top "
                                        style="width: 80px">Entretenimiento mensual
                                </div>
                                <div class="d-flex d_sm_block ">
                                    <span class="me-2">81.</span>
                                    <input type="text" min="0" name="otros_81"
                                        class="border-0 p-0 m-0 responsive_input   border-bottom footer_field align-top "
                                        style="width: 80px">Periódicos/libros/cintas/CDs mensuales
                                </div>
                                <div class="d-flex d_sm_block ">
                                    <span class="me-2">82.</span>
                                    <input type="text" min="0" name="otros_82"
                                        class="border-0 p-0 m-0 responsive_input   border-bottom footer_field align-top "
                                        style="width: 80px">Vacaciones mensuales
                                </div>
                                <div class="d-flex d_sm_block ">
                                    <span class="me-2">83.</span>
                                    <input type="text" min="0" name="otros_83"
                                        class="border-0 p-0 m-0 responsive_input   border-bottom footer_field align-top "
                                        style="width: 80px">Organizaciones religiosas mensuales
                                </div>
                                <div class="d-flex d_sm_block ">
                                    <span class="me-2">84.</span>
                                    <input type="text" min="0" name="otros_84"
                                        class="border-0 p-0 m-0 responsive_input   border-bottom footer_field align-top "
                                        style="width: 80px">Comisiones bancarias/cuotas de tarjetas de crédito
                                    mensuales
                                </div>
                                <div class="d-flex d_sm_block ">
                                    <span class="me-2">85.</span>
                                    <input type="text" min="0" name="otros_85"
                                        class="border-0 p-0 m-0 responsive_input   border-bottom footer_field align-top "
                                        style="width: 80px">Gastos de educación mensuales
                                </div>
                                <div class="d-flex d_sm_block ">
                                    <span class="me-2">86.</span>
                                    <input type="text" min="0" name="otros_86"
                                        class="border-0 p-0 m-0 responsive_input  border-bottom footer_field align-top "
                                        style="width: 80px">Otro: (incluir cualquier gasto habitual y acostumbrado no
                                    mencionado en los elementos listados arriba)
                                </div>
                                <input type="text" min="0" name="otros_86a"
                                    class="border-0 p-0 m-0  ps-3 mt-0  responsive_input border-bottom footer_field align-top w-100">
                                <div class="d-flex">
                                    <span class="me-2">87.</span>
                                    <input type="text" min="0" name="otros_87"
                                        class="border-0 p-0 m-0   border-bottom footer_field align-top w-100">
                                </div>
                                <div class="d-flex">
                                    <span class="me-2">88.</span>
                                    <input type="text" min="0" name="otros_88"
                                        class="border-0 p-0 m-0   border-bottom footer_field align-top w-100">
                                </div>
                                <div class="d-flex">
                                    <span class="me-2">89.</span>
                                    <input type="text" min="0" name="otros_89"
                                        class="border-0 p-0 m-0   border-bottom footer_field align-top w-100">
                                </div>

                                <div class="d-flex d_sm_block">
                                    <span class="me-2">90.</span>
                                    <sapn class="">$</sapn>
                                    <input type="text" min="0" name="otros_90"
                                        class="border-0 p-0 m-0 responsive_input border-bottom footer_field align-top "
                                        style="width: 80px">SUBTOTAL (Sumar las líneas 70 a 89.)
                                </div>

                            </div>
                        </div>
                </section>
                <section class="section_area">
                    <div class="row">
                        <div class="col-lg-10 mx-auto">
                            <div class="px-lg-5 mx-auto px-2 py-5 ">
                                <div class="text-end border-bottom">Order ID: 6607400ce5fa90d84a01a9d5</div>
                                <div class="mt-4">PAGOS MENSUALES A ACREEDORES: (solo cuando usted realiza
                                    actualmente pagos sobre saldos pendientes). Listar solo los últimos 4 dígitos de los
                                    números de cuenta. PAGO MENSUAL Y NOMBRE DEL ACREEDOR(es):</div>
                                <div class="d-flex">
                                    <span class="me-2">91.</span>
                                    <sapn class="">$</sapn>
                                    <input type="text" min="0" name="pagos_91"
                                        class="border-0 p-0 m-0   border-bottom footer_field align-top w-100">
                                </div>
                                <div class="d-flex">
                                    <span class="me-2">92.</span>
                                    <input type="text" min="0" name="pagos_92"
                                        class="border-0 p-0 m-0   border-bottom footer_field align-top w-100">
                                </div>
                                <div class="d-flex">
                                    <span class="me-2">93.</span>
                                    <input type="text" min="0" name="pagos_93"
                                        class="border-0 p-0 m-0   border-bottom footer_field align-top w-100">
                                </div>
                                <div class="d-flex">
                                    <span class="me-2">94.</span>
                                    <input type="text" min="0" name="pagos_94"
                                        class="border-0 p-0 m-0   border-bottom footer_field align-top w-100">
                                </div>
                                <div class="d-flex">
                                    <span class="me-2">95.</span>
                                    <input type="text" min="0" name="pagos_95"
                                        class="border-0 p-0 m-0   border-bottom footer_field align-top w-100">
                                </div>
                                <div class="d-flex">
                                    <span class="me-2">96.</span>
                                    <input type="text" min="0" name="pagos_96"
                                        class="border-0 p-0 m-0   border-bottom footer_field align-top w-100">
                                </div>
                                <div class="d-flex">
                                    <span class="me-2">97.</span>
                                    <input type="text" min="0" name="pagos_97"
                                        class="border-0 p-0 m-0   border-bottom footer_field align-top w-100">
                                </div>
                                <div class="d-flex">
                                    <span class="me-2">98.</span>
                                    <input type="text" min="0" name="pagos_98"
                                        class="border-0 p-0 m-0   border-bottom footer_field align-top w-100">
                                </div>
                                <div class="d-flex">
                                    <span class="me-2">99.</span>
                                    <input type="text" min="0" name="pagos_99"
                                        class="border-0 p-0 m-0   border-bottom footer_field align-top w-100">
                                </div>
                                <div class="d-flex">
                                    <span class="me-2">100.</span>
                                    <input type="text" min="0" name="pagos_100"
                                        class="border-0 p-0 m-0   border-bottom footer_field align-top w-100">
                                </div>
                                <div class="d-flex">
                                    <span class="me-2">101.</span>
                                    <input type="text" min="0" name="pagos_101"
                                        class="border-0 p-0 m-0   border-bottom footer_field align-top w-100">
                                </div>
                                <div class="d-flex">
                                    <span class="me-2">102.</span>
                                    <input type="text" min="0" name="pagos_102"
                                        class="border-0 p-0 m-0   border-bottom footer_field align-top w-100">
                                </div>
                                <div class="d-flex">
                                    <span class="me-2">103.</span>
                                    <input type="text" min="0" name="pagos_103"
                                        class="border-0 p-0 m-0   border-bottom footer_field align-top w-100">
                                </div>
                                <div class="d-flex d_sm_block ">
                                    <span class="me-2">104.</span>
                                    <sapn class="">$</sapn>
                                    <input type="text" min="0" name="pagos_104"
                                        class="border-0 p-0 m-0 responsive_input border-bottom footer_field align-top "
                                        style="width: 80px">SUBTOTAL (Sumar las líneas 91 a 103.)
                                </div>
                                <div class="d-flex d_sm_block">
                                    <span class="me-2">105.</span>
                                    <sapn class="">$</sapn>
                                    <input type="text" min="0" name="pagos_105"
                                        class="border-0 p-0 m-0 responsive_input border-bottom footer_field align-top "
                                        style="width: 80px">TOTAL DE GASTOS MENSUALES:
                                </div>
                                <div>(Sumar las líneas 25, 35, 58, 63, 69, 90 y 104 de la Sección II, Gastos.)</div>

                                <div class="mt-4">RESUMEN</div>
                                <div class="d-flex d_sm_block">
                                    <span class="me-2">106.</span>
                                    <sapn class="">$</sapn>
                                    <input type="text" min="0" name="resumen_106"
                                        class="border-0 p-0 m-0 responsive_input border-bottom footer_field align-top "
                                        style="width: 80px">TOTAL DE INGRESOS NETOS MENSUALES ACTUALES (de la línea 27
                                    de la SECCIÓN I. INGRESOS)
                                </div>
                                <div class="d-flex d_sm_block">
                                    <span class="me-2">107.</span>
                                    <sapn class="">$</sapn>
                                    <input type="text" min="0" name="resumen_107"
                                        class="border-0 responsive_input p-0 m-0 border-bottom footer_field align-top "
                                        style="width: 80px">TOTAL DE GASTOS MENSUALES (de la línea 105 arriba)
                                </div>
                                <div class="d-flex d_sm_block">
                                    <span class="me-2">108.</span>
                                    <sapn class="">$</sapn>
                                    <input type="text" min="0" name="resumen_108"
                                        class="border-0 p-0 responsive_input  m-0 border-bottom footer_field align-top  "
                                        style="width: 80px">SUPERÁVIT (Si la línea 106 es mayor que la línea 107,
                                    restar la línea 107 de la línea 106. Esta es la cantidad de su superávit. Ingresar
                                    esa cantidad aquí.)
                                </div>
                                <div class="d-flex d_sm_block">
                                    <span class="me-2">109.</span>
                                    ( <sapn class="">$</sapn>
                                    <input type="text" min="0" name="resumen_109"
                                        class="border-0 p-0 m-0 responsive_input mb-4 border-bottom footer_field align-top "
                                        style="width: 80px">) (DÉFICIT) (Si la línea 107 es mayor que la línea 106,
                                    restar la línea 106 de la línea 107. Esta es la cantidad de su déficit. Ingresar esa
                                    cantidad aquí.)
                                </div>

                                <div class="mt-4">SECCIÓN III. ACTIVOS Y PASIVOS</div>
                                <div>A. ACTIVOS (Aquí se enumeran lo que USTED POSEE.)</div>
                                <div>INSTRUCCIONES:</div>
                                <div>PASO 1: En la columna A, listar una descripción de cada artículo separado que usted
                                    posee (y/o su cónyuge, si se trata de una solicitud de disolución de matrimonio).
                                    Hay espacios en blanco si necesita enumerar más de un artículo</div>
                                <div>PASO 2: Si se trata de una solicitud de disolución de matrimonio, marcar la línea
                                    en la Columna A junto a cualquier artículo que usted esté solicitando que el juez le
                                    otorgue.</div>
                                <div>PASO 3: En la columna B, escribir lo que usted cree que es el valor justo de
                                    mercado actual de todos los artículos listados.</div>
                                <div>PASO 4: Usar la columna C solo si es una solicitud de disolución de matrimonio y
                                    usted cree que un artículo es "no marital", significando que pertenece solo a uno de
                                    ustedes y no debe ser dividido. Debería indicar a quién cree que pertenece el
                                    artículo. (Típicamente, solo usará la</div>
                            </div>
                        </div>
                </section>
                <section class="section_area">
                    <div class="row">
                        <div class="col-lg-10 mx-auto">
                            <div class="px-lg-5 mx-auto px-2 py-5 ">
                                <div class="text-end border-bottom">Order ID: 6607400ce5fa90d84a01a9d5</div>
                                <div class="my-4">Columna C si la propiedad fue poseída por uno de los cónyuges
                                    antes del matrimonio. Vea la "Información General para Litigantes Sin Representación
                                    Legal" encontrada al principio de estos formularios y la sección 61.075(1),
                                    Estatutos de Florida, para definiciones de "activos" y "pasivos" maritales y no
                                    maritales.)</div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6">A</div>
                                    <div class="col-lg-3 col-md-3 col-sm-3">B</div>
                                    <div class="col-lg-3 col-md-3 col-sm-3">C</div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6">ACTIVOS: DESCRIPCIÓN DEL ARTÍCULO(S)</div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 text-end">Valor Justo</div>
                                </div>
                                <div>No Marital</div>
                                <div>de Mercado<span class="ms-5">(Marcar la columna correcta)</span></div>
                                <div>LISTAR SOLO LOS ÚLTIMOS CUATRO DÍGITOS DE LOS NÚMEROS DE CUENTA.</div>
                                <div>Actual</div>
                                <div>Marcar la línea junto a cualquier activo(s) que usted esté</div>
                                <div>Demandante<span class="ms-5">Demandado</span></div>
                                <div>solicitando que el juez le otorgue.</div>
                                <div class="row mt-4">
                                    <div class="col-lg-8">Efectivo (en mano)</div>
                                    <div class="col-lg-4">$</div>
                                </div>
                                <div>Efectivo (en bancos o cooperativas de crédito)</div>
                                <div class="my-4 mb-5">
                                    Acciones/Bonos
                                </div>
                                <div class="my-4">Notas (dinero que le deben por escrito)</div>
                                <div>Dinero que le deben (no evidenciado por una nota)</div>
                                <div>Bienes raíces: (Hogar)</div>
                                <div>(Otro)</div>
                                <div>Intereses comerciales</div>
                                <div>Automóviles</div>
                                <div>Barcos</div>
                                <div class="my-4">
                                    Formulario de Reglas de Procedimiento de Ley de Familia de Florida 12.902(c),
                                    Declaración Financiera de Ley de Familia (Formulario Largo) (10/21)</div>
                                <div class="mb-5">
                                    Otros vehículos
                                </div>
                                <div>Planes de retiro (Participación en Ganancias, Pensión, IRA, 401(k)s, etc.)</div>
                                <div>Muebles y enseres en el hogar</div>
                                <div>Muebles y enseres en otro lugar</div>
                                <div>Coleccionables</div>
                                <div>Joyas</div>
                                <div>
                                    Seguro de vida (valor de rescate en efectivo)</div>
                                <div>Equipos deportivos y de entretenimiento (TV, estéreo, etc.)</div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="section_area">
                    <div class="row">
                        <div class="col-lg-10 mx-auto">
                            <div class="px-lg-5 mx-auto px-2 py-5 ">
                                <div class="text-end border-bottom">Order ID: 6607400ce5fa90d84a01a9d5</div>
                                <div class="my-4">Otros activos:</div>
                                <div class="my-4">Total de Activos (sumar columna B) <br>$</div>
                                <div>Formulario de Reglas de Procedimiento de Ley de Familia de Florida 12.902(c),
                                    Declaración Financiera de Ley de Familia (Formulario Largo) (10/21) :no
                                    seleccionado: :no seleccionado:</div>
                                <div>B. PASIVOS/DEUDAS (Aquí se enumeran lo que USTED DEBE.)</div>
                                <div>INSTRUCCIONES:</div>
                                <div>PASO 1: En la columna A, listar una descripción de cada deuda separada que usted
                                    debe (y/o su cónyuge, si esto es una petición para la disolución del matrimonio). Se
                                    proporcionan espacios en blanco si necesita enumerar más de una deuda.</div>
                                <div>PASO 2: Si esto es una petición para la disolución del matrimonio, marcar la línea
                                    en la Columna A al lado de cualquier deuda(s) por la cual usted cree que debería ser
                                    responsable.</div>
                                <div>PASO 3: En la columna B, escribir lo que usted cree que es la cantidad actual
                                    adeudada para todos los artículos listados.</div>
                                <div>PASO 4: Utilice la columna C únicamente si esto es una petición de disolución de
                                    matrimonio y cree que un artículo es "no conyugal", lo que significa que la deuda
                                    pertenece solo a uno de ustedes y no debería ser dividida. Debe indicar a quién cree
                                    que pertenece la deuda.</div>
                                <div>(Típicamente, usted utilizará la columna C solamente si la deuda era adeudada por
                                    un cónyuge antes del matrimonio. Vea la "Información General para Litigantes que se
                                    Representan a Sí Mismos" encontrada al principio de estos formularios y la sección
                                    61.075(1), Estatutos de Florida, para las definiciones de activos y pasivos
                                    "conyugales" y "no conyugales".)</div>
                                <div class="my-4">Reglas de Procedimiento de Derecho Familiar de Florida Formulario
                                    12.902(c), Declaración Jurada Financiera de Derecho Familiar (Forma Larga) (10/21)
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6">A</div>
                                    <div class="col-lg-3 col-md-3 col-sm-3">B</div>
                                    <div class="col-lg-3 col-md-3 col-sm-3">C</div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6">PASIVOS: DESCRIPCIÓN DEL ARTÍCULO(S)</div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 text-end">Monto Actual</div>
                                </div>
                                <div>No conyugal</div>
                                <div>Adeudado<span class="ms-5">(Marque la columna correcta)</span></div>
                                <div class="mt-4">
                                    ENUMERE SOLAMENTE LOS ÚLTIMOS CUATRO DÍGITOS DE NÚMEROS DE CUENTA. Marque la línea
                                    junto a cualquier deuda(s) por la cual usted crea que</div>
                                <div class="row">
                                    <div class="col-lg-6">debería ser responsable.</div>
                                    <div class="col-lg-6 text-end">Peticionario</div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-lg-8">Hipotecas sobre bienes inmuebles: Primera hipoteca sobre el
                                        hogar</div>
                                    <div class="col-lg-4">$</div>
                                </div>
                                <div>Segunda hipoteca sobre el hogar</div>
                                <div>Otras hipotecas</div>
                                <div class="my-4">Cuentas de tarjetas de crédito/cargo</div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="section_area">
                    <div class="row">
                        <div class="col-lg-10 mx-auto">
                            <div class="px-lg-5 mx-auto px-2 py-5 ">
                                <div class="text-end border-bottom">Order ID: 6607400ce5fa90d84a01a9d5</div>
                                <div class="my-4">Préstamo de auto</div>
                                <div>Préstamo de auto</div>
                                <div>Préstamos de Banco/Unión de Crédito</div>
                                <div>Dinero que debe (no consta en una nota)</div>
                                <div>Juicios</div>
                                <div>Otros:</div>
                                <div class="row my-4">
                                    <div class="col-lg-7">Total de Deudas (sumar la columna B)</div>
                                    <div class="col-lg-5">$</div>
                                </div>
                                <div class="mb-5">Reglas de Procedimiento de Derecho Familiar de Florida Formulario
                                    12.902(c), Declaración Jurada Financiera de Derecho Familiar (Forma Larga) (10/21)
                                </div>
                                <div class="my-4">C. PATRIMONIO NETO (excluyendo activos y pasivos contingentes)
                                </div>
                                <div class="d-flex d_sm_block mt-4">
                                    <sapn class="">$</sapn>
                                    <input type="text" min="0" name="c_tot_activos"
                                        class="border-0 p-0 m-0 responsive_input border-bottom footer_field align-top "
                                        style="width: 80px">Total Activos (introduzca el total de la Columna B en la
                                    Tabla de Activos; Sección A)
                                </div>
                                <div class="d-flex d_sm_block ">
                                    <sapn class="">$</sapn>
                                    <input type="text" min="0" name="c_tot_pasivos"
                                        class="border-0 p-0 m-0 responsive_input border-bottom footer_field align-top "
                                        style="width: 80px">Total Pasivos (introduzca el total de la Columna B en la
                                    Tabla de Pasivos; Sección B)
                                </div>
                                <div class="d-flex d_sm_block ">
                                    <sapn class="">$</sapn>
                                    <input type="text" min="0" name="c_patrimonio"
                                        class="border-0 p-0 m-0 responsive_input border-bottom footer_field align-top "
                                        style="width: 80px">PATRIMONIO NETO TOTAL (Total Activos menos Total Pasivos)
                                </div>
                                <div>(excluyendo activos y pasivos contingentes)</div>
                                <div class="mt-4">D. ACTIVOS Y PASIVOS CONTINGENTES</div>
                                <div>INSTRUCCIONES:</div>
                                <div>Si tiene algún activo POSIBLE (potencial de ingresos, vacaciones acumuladas o
                                    licencia por enfermedad, bonos, herencias, etc.) o pasivos POSIBLES (demandas
                                    posibles, impuestos futuros no pagados, pasivos fiscales contingentes, deudas
                                    asumidas por otro), debe listarlos aquí.</div>
                                <div>usted está solicitando que el juez le otorgue.</div>
                                <div class="row mt-4">
                                    <div class="col-lg-6 col-md-6 col-sm-6">A <br>Activos Contingentes</div>
                                    <div class="col-lg-3 col-md-3 col-sm-3">B <br>Valor Posible</div>
                                    <div class="col-lg-3 col-md-3 col-sm-3">C <br>No</div>
                                </div>
                                <div>conyugal</div>
                                <div>Marque la línea junto a cualquier activo(s) contingente(s) que</div>
                                <div>(Marque la columna correcta)</div>
                                <div>Peticionario<span class="ms-5">Demandado</span></div>
                                <div>$</div>
                                <div class="mt-5">
                                    Total Activos Contingentes
                                </div>
                                <div>$</div>
                                <div class="row my-4">
                                    <div class="col-lg-6 col-md-6 col-sm-6">A </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3">B </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3">C </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="section_area">
                    <div class="row">
                        <div class="col-lg-10 mx-auto">
                            <div class="px-lg-5 mx-auto px-2 py-5 ">
                                <div class="text-end border-bottom">Order ID: 6607400ce5fa90d84a01a9d5</div>
                                <div class="mt-4 row">
                                    <div class="col-lg-6">Pasivos Contingentes</div>
                                    <div class="col-lg-6">Monto Posible Adeudado</div>
                                </div>
                                <div>No conyugal</div>
                                <div>(Marque la columna correcta)</div>
                                <div>Marque la línea junto a cualquier deuda(s) contingente(s) por</div>
                                <div>la cual usted cree que debería ser responsable.</div>
                                <div>Peticionario<span class="ms-5">Demandado</span></div>
                                <div class="my-4">$</div>
                                <div class="my-4">Total Pasivos Contingentes <br>$ </div>
                                <div>E. HOJA DE TRABAJO PARA LAS DIRECTRICES DE MANUTENCIÓN INFANTIL. Reglas de
                                    Procedimiento de Derecho Familiar de Florida Formulario 12.902(e), Hoja de Trabajo
                                    de Manutención Infantil, DEBE ser presentada ante el tribunal en o antes de una
                                    audiencia para establecer o modificar el soporte infantil. Este requisito no puede
                                    ser renunciado por las partes.</div>
                                <div class="my-4 mb-5">Reglas de Procedimiento de Derecho Familiar de Florida
                                    Formulario 12.902(c), Declaración Jurada Financiera de Derecho Familiar (Forma
                                    Larga) (10/21)
                                </div>
                                <div>[Marque solo una]</div>
                                <div>Una Hoja de Trabajo para las Directrices de Manutención Infantil HA sido o SERÁ
                                    presentada en este caso. Este caso implica el establecimiento o modificación de la
                                    manutención infantil. Una Hoja de Trabajo para las Directrices de Manutención
                                    Infantil NO está siendo presentada en este caso. El establecimiento o la
                                    modificación de la manutención infantil no es un problema en este caso.</div>
                                <div class="mt-4">Certifico que una copia de esta declaración jurada financiera fue
                                    [marque todos los que corresponda]: ( ) enviada por correo electrónico () enviada
                                    por correo, () enviada por fax ( ) entregada en mano a la(s) persona(s) indicada(s)
                                    abajo en la fecha {fecha}</div>
                                <div class="d-flex "> <input type="text" min="0" name="certufuco_que"
                                        class="border-0 footer_field align-start border-bottom">.</div>

                                <div class="mt-4">Otra parte o su abogado:</div>
                                <div>Nombre:</div>
                                <div>Dirección:</div>
                                <div>Ciudad, Estado, Código Postal:</div>
                                <div>Número de Teléfono:</div>
                                <div>Número de Fax:</div>
                                <div>Dirección(es) de Correo Electrónico:</div>
                                <div class="my-4">Bajo pena de perjurio, declaro que he leído este documento y los
                                    hechos expuestos en el mismo son verdaderos.</div>

                            </div>
                        </div>
                    </div>
                </section>
                <section class="section_area">
                    <div class="row">
                        <div class="col-lg-10 mx-auto">
                            <div class="px-lg-5 mx-auto px-2 py-5 ">
                                <div class="text-end border-bottom">Order ID: 6607400ce5fa90d84a01a9d5</div>
                                <div class="d-flex my-4 ">Fecha: <input type="text" min="0"
                                        name="fecha" class="border-0 footer_field align-start border-bottom">
                                </div>
                                <div>Firma de la Parte</div>
                                <div>Nombre Impreso:</div>
                                <div>Dirección:</div>
                                <div>Ciudad, Estado, Código Postal:</div>
                                <div>Número de Teléfono:</div>
                                <div>Número de Fax:</div>
                                <div>Dirección(es) de Correo Electrónico:</div>
                                <div class="mt-4">SI UN NO ABOGADO LE AYUDÓ A LLENAR ESTE FORMULARIO, ÉL/ELLA DEBE
                                    LLENAR LOS ESPACIOS A CONTINUACIÓN: [rellene todos los espacios] Este formulario fue
                                    preparado para: {escoja solo uno} ( ) Peticionario ( ) Demandado</div>
                                <div>Este formulario fue completado con la ayuda de:</div>
                                <div class="d-flex d_sm_block">{nombre del individuo} <input type="text" min="0"
                                        name="nom_del_ind"
                                        class="border-0 footer_field responsive_input align-start border-bottom w-50">

                                </div>
                                <div>{nombre del negocio}, </div>
                                <div class="d-flex d_sm_block ">{dirección}<input type="text" min="0"
                                        name="direccion_1"
                                        class="border-0 footer_field responsive_input align-start border-bottom w-25">
                                </div>
                                <div class="d-flex d_sm_block">{ciudad}<input type="text" min="0" name="ciudad"
                                        class="border-0 footer_field responsive_input align-start border-bottom "
                                        style="width: 70px">, {estado}<input type="text" min="0" name="estado" class="border-0 footer_field responsive_input align-start border-bottom " style="width: 135px">,
                                </div>
                                <div>{número de teléfono}</div>
                                <div class="mt-5" style="margin-bottom: 500px">Reglas de Procedimiento de Derecho
                                    Familiar de Florida Formulario 12.902(c), Declaración Jurada Financiera de Derecho
                                    Familiar (Forma Larga) (10/21)</div>
                                <div class="row my-4" >
                                    <div class="col-6">
                                        <button type="submit" class="bg-transparent px-4">Submit</button>
                                    </div>
                                    <div class="col-6  ">
                                        <button type="reset" class="bg-transparent px-4">Reset</button>
                                    </div>
                                </div>
                                    <div>
                                    @include('layouts.pagination', ['page' => 18])</div>

                            </div>
                        </div>
                    </div>
                </section>
            </form>
        </div>
    </div>
</body>

</html>
