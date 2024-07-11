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
        .court_fills {
            position: relative;
    bottom: -14px !important;
        }
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
                padding-left: 0px !important;
            }
        }

        @media screen and (max-width : 768px) {
            .p_sm_0{
                padding-left: 0px !important;
                margin-left: 0px !important;
            }
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

        .bg-secondary_1 {
            background-color: rgb(184 188 180) !important;
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
    <div class="container-fluid py-1 py-lg-3">
        <div class="container bg_color p-lg-3 p-1">
            <form action="{{ route('form31.submit') }}" method="post">
                @csrf
                <section class="section_area p-5" id="first_section">
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show">{{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <div class="text-center fw-bold h3 border_3">
                        <div class="">Divorce Set 1</div>
                        <div class="">Uncontested, No Minor Children, No Real Property</div>
                        <div class="">INSTRUCTIONS</div>
                    </div>
                    <div><b>This Divorce Set Contains </b><span class="small_text"> instructions and seven forms: an
                            Affidavit of Indigency, an Original Petition for Divorce, a Waiver of Service, a Final
                            Decree of Divorce, a Certificate of Last Known Address, a Notice of Change of Address, and
                            an AffidavitofMilitaryStatus. The chart on the next page describes each form and when to use
                            it.</span></div>
                    <div class="fw-bold">Do Not Use This Divorce Set if:</div>
                    <ul style="list-style-type:none;">
                        <li><input type="checkbox" name="You and your spouse disagree about any issue in your divorce" value="Yes" id=""> You and your spouse disagree about any issue in your divorce.</li>
                     <li><input type="checkbox" name="You or your spouse wants to file specific grounds for divorce such as cruelty or adultery This Set provides for a"  value="Yes" id=""> You or your spouse wants to file specific grounds for divorce, such as cruelty or adultery.
                            This Set provides for a
                            no-fault divorce, for example, you do not get along and do not plan to get back together.
                        </li>
                        <li><input type="checkbox" value="Yes" name="The wife is pregnant even if the husband is not the father" id=""> The wife is pregnant, even if the husband is not the father.</li>
                        <li><input type="checkbox" value="Yes" name="The wife has had a child by another man since the date of marriage" id=""> The wife has had a child by another man since the date of marriage.</li>
                        <li><input type="checkbox" value="Yes" name="You and your spouse have a disabled child regardless of that childs age" id=""> You and your spouse have a disabled child, regardless of that child’s age.</li>
                        <li><input type="checkbox" value="Yes" name="You and your spouse have a biological or adopted child together who is either under 18 years old or who is 18" id=""> You and your spouse have a biological or adopted child together who is either under 18 years
                            old or who is 18 years old and still in high school.</li>
                        <li><input type="checkbox" value="Yes" name="You or your spouse wants spousal support or maintenance referred to as alimony in some states" id=""> You or your spouse wants spousal support or maintenance, referred to as “alimony” in some
                            states.</li>
                        <li><input type="checkbox" value="Yes" name="You or your spouse owns or is buying real property such as a house building piece of land or other real" id=""> You or your spouse owns or is buying real property (such as a house, building, piece of
                            land, or other real
                            estate).</li>
                        <li><input type="checkbox" value="Yes" name="You or your spouse has an ongoing bankruptcy case" id=""> You or your spouse has an ongoing bankruptcy case.</li>
                    </ul>
                    <div class="fw-bold">Use This Divorce Set if:</div>
                    <ul style="list-style-type:none;">
                        <li> <input type="checkbox" value="Yes" name="Nothing in the above Do Not Use This Divorce Set section applies to you" id=""> Nothing in the above “Do Not Use This Divorce Set” section applies to you.</li>
                        <li> <input type="checkbox" value="Yes" name="You think you and your spouse will agree on every issue in your divorce or you do not think your spouse will" id=""> You think you and your spouse will agree on every issue in your divorce or you do not think
                            your spouse will
                            participate in the divorce process.</li>
                        <li> <input type="checkbox" value="Yes" name="You or your spouse has lived in Texas for at least 6 months and in the county where you are filing for divorce for" id=""> You or your spouse has lived in Texas for at least 6 months and in the county where you are
                            filing for divorce for
                            at least 90 days.
                            <ul>
                                <li><span class="border-bottom">Immigrants</span>: You may file for divorce in Texas
                                    even if you do not have legal status in the United States if
                                    you have lived in Texas and in your county for the above time periods.</li>
                                <li><span class="border-bottom">Military Families</span>: If you are serving in the
                                    armed forces outside of Texas, or you have accompanied your
                                    spouse who is serving in the armed forces outside of Texas, you may still use these
                                    forms if Texas has been the home state for either spouse for at least 6 months and
                                    the county where you plan to file the divorce has been the home county of either
                                    spouse for at least 90 days.</li>
                            </ul>
                        </li>

                    </ul>

                    <div class="fw-bold">Need Help?</div>
                    <ul>
                        <li>It is always best to hire a lawyer. To get a referral to a lawyer or, if you are poor, to a
                            free Legal Aid program, call the State Bar of Texas Lawyer Referral Information Service at
                            1-800-252-9690.</li>
                        <li>If you are a victim of domestic violence, or if at any time you feel unsafe, you can get
                            confidential help from the National Domestic Violence Hotline at 1-800-799-7233 or legal
                            help from the Texas Advocacy Project Family Violence Legal Line at 1-800-374-4673.</li>
                        <li>If you are poor, you may be able to talk to an attorney online by live chat at <a
                                href="https://texaslawhelp.org/" target="_blank">www.TexasLawHelp.org.</a></li>
                    </ul>
                    <div class="fw-bold">Note on Retirement Funds (for example, pension, profit-sharing, and stock
                        option plans, 401ks, and IRAs):</div>
                    <ul>
                        <li>If you use these forms to divide retirement funds, you will need to obtain an additional
                            court order, usually called a “qualified domestic relations order” (QDRO), to make the
                            division effective. A QDRO form is not included in this Divorce Set. It is recommended that
                            you hire a lawyer to prepare a QDRO. If you and your spouse keep your own retirement funds
                            or do not have any retirement funds, you do not need a QDRO.</li>
                    </ul>

                    @include('layouts.footer22', ['page' => 1])
                </section>

                <section class="section_area p-5" id="second_section">
                    @include('layouts.header2', ['page' => 2])

                    <div class="pt-lg-4">
                        <div class="fw-bold">Contents of Divorce Set 1 - Uncontested, No Minor Children, No Real
                            Property:</div>
                        <div class="table-responsive">
                            <table class="table table-bordered border-dark">
                                <tbody>
                                    <tr>
                                        <th class="bg-secondary" style="width:200px;">Name of Form <input type="text" name="Name of Form" class="border-0 responsive_input" id=""></th>
                                        <th class="bg-secondary">What It Is and How to Use It <input type="text" name="What It Is and How to Use It" class="border-0 responsive_input" id=""></th>
                                    </tr>
                                    <tr>
                                        <th>Affidavit of Indigency
                                            <input type="text" name="Affidavit of Indigency" id="" class="border-0 w-100">
                                        </th>
                                        <td>If you are poor, or on government benefits because you are poor, or you
                                            cannot pay court fees, you may fill out this form to ask the Court if you
                                            can file for divorce without paying the court and filing fees. The Court may
                                            ask you to present evidence of your income and expenses at a hearing. The
                                            Court may or may not decide to let you file without paying. It is sometimes
                                            called a “Pauper’s Oath” or an “Affidavit of Inability to Pay Costs.”</td>
                                    </tr>

                                    <tr>
                                        <th>Original Petition for Divorce
                                            <input type="text" name="Original Petition for Divorce" id="" class="border-0 w-100">

                                        </th>
                                        <td>This form must be filed at the courthouse to start your divorce case. It
                                            tells the Court and your spouse that you want a divorce and states what you
                                            want the Court to order in the Final Decree of Divorce. It is sometimes
                                            called the “Original Petition” or “Petition.”</td>
                                    </tr>

                                    <tr>
                                        <th>Waiver of Service
                                            <input type="text" name="Waiver of Service" id="" class="border-0 w-100">

                                        </th>
                                        <td>This form may be filled out by your spouse, if he or she agrees to sign it.
                                            It tells the Court that your spouse has received a copy of the Original
                                            Petition for Divorce and does not want to be formally given a copy by a
                                            constable, sheriff, or process server. This form allows the judge to
                                            finalize your divorce as long as your spouse has signed the Final Decree of
                                            Divorce, and allows your spouse to be notified of any hearings in the case.
                                            Other Waiver of Service forms are not the same. Your spouse must sign the
                                            Waiver <span class="border-bottom"> in front of a notary.</span> The Waiver
                                            must be signed at least one day <span class="border-bottom"> after </span>
                                            the Original Petition for Divorce is filed.</td>
                                    </tr>

                                    <tr>
                                        <th>Final Decree of Divorce</th>
                                        <td>This form finalizes your divorce and states what the Court has ordered in
                                            your case. Fill it out and bring it to your final divorce hearing.</td>
                                    </tr>

                                    <tr>
                                        <th>Certificate of Last Known Address
                                            <input type="text" name="Certificate of Last Known Address" id="" class="border-0 w-100">

                                        </th>
                                        <td>This form tells the Court what your spouse’s last known address is and is
                                            filled out only in certain situations. If a Waiver or an Answer (see below
                                            for definition) has not been filed and your spouse has not signed the Final
                                            Decree of Divorce, you must bring this form to the final divorce hearing.
                                        </td>
                                    </tr>

                                    <tr>
                                        <th>Notice of Change of Address</th>
                                        <td>This form <span class="border-bottom">must</span> be filed if you or your
                                            spouse moves. It tells the Court what the new address is so that the Court
                                            can contact you about hearings, etc.</td>
                                    </tr>
                                    <tr>
                                        <th>Affidavit of Military Status
                                            <input type="text" name="Affidavit of Military Status" id="" class="border-0 w-100">

                                        </th>
                                        <td>This form tells the Court whether or not your spouse is on active military
                                            duty. If a Waiver or an Answer (see below for definition) has not been filed
                                            and your spouse has not signed the Final Decree of Divorce, you must bring
                                            this form to the final divorce hearing.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="fw-bold pt-lg-3">Glossary:</div>
                        <div class="table-responsive">
                            <table class="table table-bordered border-dark">
                                <tr>
                                    <th class="bg-secondary">Term <input type="text" name="Term" id="" class="border-0"> </th>
                                    <th class="bg-secondary">Definition <input type="text" name="Definition" id="" class="border-0"> </th>
                                </tr>

                                <tr>
                                    <th>Legal Notice
                                        <input type="text" name="Legal Notice" id="" class="border-0 w-100">
                                    </th>
                                    <td>Your spouse has a right to know, in writing, that you are filing for divorce.
                                        You cannot simply send your spouse a letter. You must use a legally acceptable
                                        way and prove to the Court that you did so. There are (3) ways to give legal
                                        notice: Waiver of Service, Official Service of Process, or by Posting or
                                        Publication. Each is described in Step 4 in these instructions.</td>
                                </tr>

                                <tr>
                                    <th>Official Service of Process
                                        <input type="text" name="Official Service of Process" id="" class="border-0 w-100">

                                    </th>
                                    <td>Official service of process is when your spouse is formally “served” with
                                        (given) the Original Petition for Divorce by a constable, sheriff, or private
                                        process server, or when the clerk sends it by certified mail, return receipt
                                        requested. You must use official service of process if a Waiver of Service form
                                        has not been filed in your case. It is always best to officially serve your
                                        spouse if there has been domestic violence in the relationship or a Protective
                                        Order is in effect.</td>
                                </tr>

                                <tr>
                                    <th>Waiving Service of Process
                                        <input type="text" name="Waiving Service of Process" id="" class="border-0 w-100">

                                    </th>
                                    <td>When your spouse tells the Court in writing that s/he has received a copy of the
                                        Original Petition for Divorce and does not want to be formally “served” with the
                                        Original Petition for Divorce, your spouse is “waiving service of process.”</td>
                                </tr>

                                <tr>
                                    <th>Answer  <input type="text" name="Answer" id="" class="border-0 w-100">

                                    </th>
                                    <td>If your spouse contests the divorce, your spouse may file an “answer” instead of
                                        signing the Waiver of Service. This Set has no answer form because it is for
                                        uncontested cases. However, you may still use this Set if your spouse signs the
                                        Final Decree of Divorce after filing an answer.</td>
                                </tr>

                                <tr>
                                    <th>Qualified Domestic Relations Order (QDRO)</th>
                                    <td>An additional court order that is necessary to complete the division of a
                                        retirement fund. A QDRO form is not included in this Divorce Set. It is
                                        recommended that you hire a lawyer to prepare a QDRO if you use these forms to
                                        divide retirement funds.</td>
                                </tr>

                            </table>
                        </div>
                    </div>

                </section>

                <section class="section_area p-5" id="third_section">
                    @include('layouts.header2', ['page' => 3])

                    <div class="pt-lg-3">
                        <div class="fw-bold h3">How to Use this Set:</div>
                        <div class="ps-lg-3">
                            <div class="fw-bold pt-lg-3">Step 1: Read These General Instructions</div>
                            <ul>
                                <li>Do not change the forms to include children, spousal support or maintenance (called
                                    “alimony” in some states), or real estate. This Set is NOT to be used for those
                                    situations.</li>
                                <li>Use blue ink to complete the forms. Pencil and other color ink will not scan
                                    clearly.</li>
                                <li>You must fill out all the spaces on the forms unless instructed otherwise. The judge
                                    and court personnel will not
                                    fill them out for you. The judge may require you to correct errors that you may make
                                    or may deny the divorce if
                                    the information is inaccurate or incomplete.</li>
                                <li>Make two copies of each form you complete. Keep one copy. The other copy is for your
                                    spouse.</li>
                                <li class="overflow-auto">Find out where to file for divorce in your county at the
                                    TexasLawHelp.org website
                                    (<a href="https://texaslawhelp.org/TX/courts/"
                                        target="_blank">http://www.texaslawhelp.org/TX/courts/</a>) by answering the
                                    questions at the bottom of the page. </li>
                            </ul>
                            <div class="fw-bold pt-lg-3">Step 2: Fill out the Original Petition for Divorce and, if you
                                are poor, the Affidavit of Indigency</div>
                            <ul>
                                <li>Fill out the Original Petition for Divorce and sign it. You are the Petitioner. Your
                                    spouse is the Respondent.</li>
                                <li>If you are poor, are receiving public assistance, or do not think you have enough
                                    money to pay the court costs
                                    for your divorce, fill out the Affidavit of Indigency.</li>
                                <li>You will need to fill out a Civil Case Information Sheet form, which you can get at
                                    the courthouse.</li>
                                <li>Make two copies of the Original Petition for Divorce and, if you are using it, the
                                    Affidavit of Indigency.</li>
                            </ul>
                            <div class="fw-bold pt-lg-3">Step 3: File (turn in) your Original Petition for Divorce, and
                                if applicable, your Affidavit of Indigency</div>
                            <ul>
                                <li>Take the original and the two copies of your Original Petition for Divorce and your
                                    Affidavit of Indigency, if applicable, to the courthouse and file them (turn them
                                    in) with the District or County Court at Law Clerk.
                                    <ul>
                                        <li>NOTE: If you are using an Affidavit of Indigency, you must sign it span
                                            <span class="border-dark"> in front of a notary </span> and you must file
                                            the Original Petition for Divorce and the Affidavit of Indigen <span
                                                class="border-dark"> at the same time</span>.</li>
                                    </ul>
                                </li>
                                <li> Ask the clerk:
                                    <ul>
                                        <li>If there is a local standing order that you need to follow or attach to any
                                            of your documents. </li>
                                        <li>If there are local rules that you need to know about for your divorce case.
                                        </li>
                                        <li>For a Civil Case Information Sheet. Fill it out and file it with your
                                            Original Petition for Divorce.</li>
                                        <li>For an Information on Suit Affecting the Family Relationship form, also
                                            called a BVS or Bureau of Vital
                                            Statistics form. It changes state records about your marital status, etc.
                                            Fill it out and file it with your
                                            Original Petition for Divorce.</li>
                                        <li>To “file-stamp” your copies. The clerk will stamp your papers with the date
                                            and time you turned them
                                            in. The clerk will keep the original and give you back your file-stamped
                                            copies.</li>
                                    </ul>
                                </li>
                                <li>If you are not filing an Affidavit of Indigency, you will need to pay a filing fee.
                                    The fee may be between $150-
                                    $300, depending on where you live.</li>
                                <li> The clerk will ask you if you want to have your spouse “served” with the papers.
                                    See Step 4 for an explanation.</li>
                            </ul>
                            <div class="  pt-lg-3"><b>Step 4: Give Your Spouse “ Legal Notice ” that You Have Filed for
                                    Divorce.</b>(<small>See definitio non page2</small>)</div>
                            <ul>
                                <li>There are three ways to give legal notice for this Set. Choose the one method that
                                    best fits your situation:</li>
                            </ul>
                        </div>

                    </div>

                 </section>

                <section class="section_area p-5" id="fourth_section">
                    @include('layouts.header2', ['page' => 4])

                    <div class="pt-lg-3">
                        <div>1. <b>By Waiver of Service.</b> If your spouse agrees to fill out the Waiver of Service
                            form in this Set, you do not need to have your spouse served by Official Service of Process.
                            Follow the steps below to use the Waiver of Service.</div>
                        <ul>
                            <li>Mail or hand-delivera “file-stamped” copy of the Original Petition for Divorce and a
                                blank Waiver of Service form to your spouse <b>WARNING: Do not hand-deliver these papers
                                    if there has been domestic violence in the relationship,</b> especially if a judge
                                has signed a Protective Order ordering you or your spouse to stay away from the other.
                                Mail or give legal notice by official service of process instead.</li>
                            <li>Tell yours pouse to sign the Waiver in <span class="border-bottom"> front of a notary
                                </span> public at least <span class="border-bottom"> one day after</span> you filed the
                                Original Petition for Divorce. Otherwise, your spouse will have to redo it.</li>
                            <li>You or yours pouse must file (turnin) the Waiver where you filed your Original Petition
                                for Divorce.</li>
                        </ul>
                        <div>2. <b>By Official Service of Process</b>. This method must be used in certain situations,
                            described in the Glossary chart on page 2. Follow the steps below to use Official Service of
                            Process.</div>
                        <ul>
                            <li>Tell the clerk where you filed your Original Petition for Divorce that you need to
                                “serve” your spouse with the Original Petition for Divorce. There will be a fee for this
                                service.</li>
                            <li>Tell the clerk if you want a constable ,sheriff ,or private process server to handle
                                service of process or if you want the clerk to handle it by certified mail, return
                                receipt requested.
                                <ul>
                                    <li>If a constable, sheriff or private process server handles it, they will complete
                                        a Return of Service form stating where and when your spouse was served. This
                                        form is proof to the Court that you gave your spouse legal notice. They may file
                                        the Return of Service at the courthouse or give it to you. If they give it to
                                        you, make a copy and file the original.</li>
                                    <li>If the clerk handles it, the return receipt (or, “green card”) is proof to the
                                        Court that you gave your spouse legal notice. The return receipt must be signed
                                        by your spouse, so only use this option if you know that your spouse is the only
                                        person who will sign for the letter when the mailman delivers it.</li>
                                </ul>
                            </li>
                            <li>Check to make sure the Return of Service or the return receipt is filed (turned in) to
                                the court where you filed your Original Petition for Divorce, at least 12 days before
                                your final hearing.</li>
                        </ul>
                        <div>3. <b>By Posting or Publication.</b> If you do not know where your spouse is, you will need
                            to give legal notice by posting (posting the paperwork at the courthouse) or by publication
                            (publishing legal notice in the newspaper).</div>
                        <ul>
                            <ul>
                                <li>Go to <a href="https://texaslawhelp.org/" target="_blank">www.TexasLawHelp.org</a>
                                    and look at the Legal Notice, Service by Posting, and Service by Publication Sets
                                    for more details.</li>
                            </ul>
                            <li>
                                If you change anything in the Original Petition for Divorce after giving your spouse
                                legal notice, you must give your spouse a copy of the Amended (changed) Original
                                Petition for Divorce and file it with the court. You can give your spouse a copy by
                                using the methods listed above, or you can use any method allowed under Texas Rule of
                                Civil Procedure 21a, which is available online and may be available at the court. If you
                                use a method allowed under Texas Rule of Civil Procedure 21a, the Amended (changed)
                                Original Petition that you file with the court must include a signed statement showing
                                you complied with the rule.
                            </li>

                        </ul>
                        <div class="fw-bold pt-lg-3">Step 5. Complete Final Forms and Prepare for Court.</div>
                        <ul>
                            <li>Fill out the Final Decree of Divorce form and sign it. If your spouse has filed an
                                Answer or a Waiver, your spouse <span class="border-bottom">must</span> sign the Final
                                Decree of Divorce.</li>
                        </ul>

                    </div>

                 </section>
                <section class="section_area p-5" id="fifth_section">
                    @include('layouts.header2', ['page' => 5])

                    <div class="pt-lg-3">                        <ul>
                            <ul>
                                <li> NOTE: A creditor’s right to collect on a debt is not affected by a divorce decree.
                                    So, if the Court orders your spouse to pay a specific debt from the marriage and
                                    your spouse does not pay it, the creditor can still seek payment from you.</li>
                            </ul>
                            <li>If a Waiver or an Answer has not been filed, you must fill out the Certificate of Last
                                Known Address form and the Military Status Affidavit form. Make two copies.</li>
                            <li>Prepare for Court.
                                <ul>
                                    <li>You will need to give testimony when talking to the judge. Some judges will ask
                                        you questions, others
                                        want you to read a “script” of testimony. You can find sample “prove up”
                                        testimony online
                                        at <a href="https://texaslawhelp.org/"> www.TexasLawHelp.org.</a></li>
                                    <li>Learn tips on what to do when you go to court and when the judgecal ls your case
                                        on line at <a href="https://texaslawhelp.org/">www.TexasLawHelp.org.</a></li>
                                </ul>
                            </li>
                        </ul>
                        <div class="fw-bold pt-lg-3">Step 6. Go to Court and Present Your Divorce Case to the Judge
                        </div>
                        <ul>
                            <li>After 61 days have passed since you filed the Original Petition for Divorce, you may
                                finalize your divorce.</li>
                            <ul>
                                <li>Victims of domestic violence may be able to finalize a divorce earlier. Call
                                    1-800-374-4673 to get advice
                                    from an attorney at no charge.</li>
                            </ul>
                            <li>Ask the clerk or court coordinator when uncontested divorce cases are heard and bring
                                the following to court
                                with you on that day:
                                <ul>
                                    <div class="row">
                                        <div class="col-lg-6 border-end border-dark pb-lg-5">
                                            <div class="fw-bold">If your spouse has signed the Final Decree of Divorce,
                                                bring:</div>
                                            <ol>
                                                <li>A file-stamped copy of your Original Petition for Divorce;</li>
                                                <li>Your completed Final Decree of Divorce form, signed by you and your
                                                    spouse; and</li>
                                                <li>The Waiver of Service signed by your spouse (if not already filed)
                                                    or a file-stamped copy of the Return of Service(if a Waiver or
                                                    Answer has not been filed).</li>
                                            </ol>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="fw-bold">If your spouse has not signed the Final Decree of
                                                Divorce or filed a Waiver or an Answer, bring:</div>
                                            <ol>
                                                <li>A file-stamped copy of your Original Petition
                                                    for Divorce;</li>
                                                <li>A file-stamped copy of the Return of
                                                    Service;</li>
                                                <li>Certificate of Last Known Address;</li>
                                                <li>Military Status Affidavit; and</li>
                                                <li>Your completed Final Decree of Divorce,signed by you.</li>
                                            </ol>
                                        </div>
                                    </div>
                                </ul>
                            </li>
                            <li>When you go to the courthouse, stop by the clerk’s office:

                                <ul>
                                    <li>Ask if you need the court file, a docket sheet (list of what has been filed ),
                                        or any thing else from their
                                        office to bring with you to court.</li>
                                    <li>If a Waiver or an Answer has not been filed, you need to file the Certificate of
                                        Last Known Address and
                                        the Military Status Affidavit in the clerk’s office <span
                                            class="border-bottom">before</span> you go to court, then bring a
                                        file-stamped copy of each with you to court.</li>
                                </ul>
                            </li>
                        </ul>
                        <div class="fw-bold pt-lg-3">Step 7. Finalize Your Divorce</div>
                        <ul>
                            <li>Once the judge has signed your Final Decree of Divorce, take it to the clerk’s office
                                and file it. Your divorce is NOT final until you do so.</li>
                            <li>Turn in the Information on Suit Affecting the Family Relationship form (a BVS, or Bureau
                                of Vital Statistics form) if you did not turn it in when you filed your Original
                                Petition for Divorce.</li>
                        </ul>
                    </div>
                 </section>
                <section class="section_area p-5" id="sixth_section">
                    @include('layouts.header2', ['page' => 6])

                    <div class="pt-lg-3">


                        <ul>
                            <li>Get a certified copy of your Final Decree of Divorce from the clerk while you are there.
                                You will need one if you are changing your name or dealing with creditors and may need
                                one for other circumstances. Theclerkmay charge a fee for the certified copy.</li>
                            <li>NOTES:
                                <ul>
                                    <li>You cannot get married to someone else until 30 days after your Final Decree of
                                        Divorce is signed.</li>
                                    <li>After your divorce is final, remember to sign documents to get car titles
                                        changed; revise your will;
                                        change beneficiaries on your life insurance policies, retirement plans, bank
                                        accounts, etc; prepare and submit a QDRO if you use these forms to divide
                                        retirements funds.</li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div style="padding-bottom:500px;"></div>
                 </section>
                <section class="section_area p-5" id="seventh_section">
                    <div class="pb-lg-5">

                        <div class="border border-dark p-2"><b>WARNING</b>: Without the advice and help of an attorney,
                            you may be putting yourself, your personal property, and your money at risk. To get a
                            referral to an attorney, call the State Bar of Texas Lawyer Referral Information Service at
                            1-800-252-9690. If you are a victim of domestic violence, or if at any time you feel unsafe,
                            you can get confidential help from the National Domestic Violence Hotline at 1-800-799-7233
                            or legal help from the Texas Advocacy Project Family Violence Legal Line at 1-800-374-4673.
                        </div>
                        <div>Print your answers in blue ink)</div>
                        <div class="text-center">Cause Number: <input type="text" name="The Clerk’s office will fill in the Cause Number when you file this form" id=""
                                class="border-0 border-bottom responsive_input w-50"></div>
                        <div class="small_text text-center">The Clerk’s office will fill in the Cause Number when you file this form)</div>
                        <div class="pt-lg-2 fw-bold">IN THE MATTER OF THE MARRIAGE OF</div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div>Petitioner:<input type="text" name="Print first, middle, and last name of the spouse " class="border-0 border-bottom responsive_input w-75 ms-lg-3"></div>
                                <div class="small_text text-end me-lg-5">(Print first, middle, and last name of the spouse filing for divorce)</div>
                                <div class="text-center fw-bold">And</div>
                                <div>Respondent:<input type="text" name="Print first, middle, and last name of other spouse" class="border-0 border-bottom responsive_input w-75 ms-lg-3"></div>
                                <div class="small_text text-end me-lg-5">(Print first, middle, and last name of other spouse)</div>
                            </div>
                            <div class="col-lg-6">
                                <div>In the (check one):</div>
                                <div><input type="text" name="Court Number" class="border-0 border-bottom responsive_input ">
                                    <input type="radio" value="Yes" name="District Court" class="me-lg-1">District Court
                                    <input type="radio" value="Yes" name="County Court at" class="mx-lg-1"> County Court at Law of:</div>
                                <div class="small_text">(Court Number)</div>
                                <div><input type="text" name="County" class="border-0 border-bottom responsive_input w-75">County, Texas</div>
                                <div class="small_text">(County)</div>

                            </div>
                        </div>
                        <div class="h4 fw-bold pt-lg-3 text-center">Affidavit of Indigency</div>
                        <div class="h4 fw-bold  text-center">(Divorce Set 1 - Uncontested, No Minor Children, No Real
                            Property)</div>
                        <div class="pt-1 border border-dark p-1 mx-4"> <span class="pe-3 fw-bold">WARNING:</span> Read
                            all of the Instructions for Divorce Set 1 before filling out this form.</div>

                        <div class="fw-bold">The person who signed this affidavit appeared, in person, before me, the
                            undersigned notary, and stated under oath:</div>
                        <div>“My name is <input type="text" name="My mailing address is" id=""
                                class="border-0 border-bottom responsive_input w-50"> My phone number is: <input
                                type="text" name="I am above the age of eighteen 18 years, and I am fully competent to make this
                                affidavit. I am unable to pay court costs" id=""
                                class="border-0 border-bottom responsive_input w-25"></div>
                        <div>“My mailing address is:<input type="text" name="My mailing address is" id=""
                                class="border-0 border-bottom responsive_input" style="width:83%;"> </div>
                        <div>“I am above the age of eighteen (18) years, and I am fully competent to make this
                            affidavit. I am unable to pay court costs. The nature and amount of my income, resources,
                            debts, and expenses are described in this form.</div>
                        <div class="">Check ALL boxes that apply and fill in the blanks describing the amounts
                            and sources of your income.</div>
                        <div>“I receive these public benefits/government entitlements that are based on indigency: <span
                                class="mx-lg-3"><input type="checkbox" value="Yes" name="SSI"> SSI</span> <span
                                class="ms-lg-3"><input type="checkbox" value="Yes" name="WIC"> WIC</span> <span
                                class="ms-lg-3"><input type="checkbox" value="Yes" name="Food stampsSNAP"> Food stamps/SNAP</span> <span
                                class="ms-lg-3"><input type="checkbox" value="Yes" name="TANF"> TANF</span> <span
                                class="ms-lg-3"><input type="checkbox" value="Yes" name="Medicaid"> Medicaid</span> <span
                                class="ms-lg-3"><input type="checkbox" value="Yes" name="CHIP"> CHIP</span> <span
                                class="ms-lg-3"><input type="checkbox" value="Yes" name="Needsbased VA Pension"> Needs-based VA Pension</span>
                            <span class="ms-lg-3"><input type="checkbox" value="Yes" name="County Assistance"> County Assistance, County
                                Health Care, or General Assistance (GA)</span> <span class="ms-lg-3"><input
                                    type="checkbox"  value="Yes" name=" Community Care via DADS"> Community Care via DADS</span> <span
                                class="ms-lg-3"><input type="checkbox" value="Yes" name="AABD"> AABD</span> <span
                                class="ms-lg-3"><input type="checkbox" value="Yes" name="Public Housin"> Public Housing</span> <span
                                class="ms-lg-3"><input type="checkbox" value="Yes" name="Low-Income Energy Assistance"> Low-Income Energy
                                Assistance</span> <span class="ms-lg-3"><input type="checkbox" value="Yes" name="LIS in Medicare"> LIS in
                                Medicare ("Extra Help")</span> <span class="ms-lg-3"><input type="checkbox" value="Yes"
                                    name="Emergency Assistance"> Emergency Assistance</span> <span class="ms-lg-3"><input
                                    type="checkbox" value="Yes" name="Child Care Assistance under Child Care"> Child Care Assistance under Child Care and
                                Development Block Grant</span> <span class="ms-lg-3"><input type="checkbox" value="Yes"
                                    name="Other"> Other: <input type="text" name="If you receive any of the above public benefits you may attach proof to this form and label it Exhibit Proof of Public Benefits"
                                    class="border-0 border-bottom responsive_input" style="width:43%"> </span></div>

                        <div class="py-lg-2">If you receive any of the above public benefits, you may attach proof to
                            this form and label it “Exhibit: Proof of Public Benefits.”</div>
                        <div><input type="checkbox" value="Yes" name="Unemployed since" id=""> Unemployed since: <input
                                type="text" name="Date" id=""
                                class="border-0 border-bottom responsive_input" ></div>
                        <small class="me-lg-5 small_text">-or-</small>

                        <small  class="small_text" class="p_sm_0" style="padding-left:100px;">Date</small>
                        <div><input type="checkbox" value="Yes" name="Wages: I work as a" id=""> Wages: I work as a <input
                                type="text" name=" Wages: I work as a_val" id=""
                                class="border-0 border-bottom responsive_input" style="width:480px;"> for<input type="text"
                                name="Your Job Title" id="" class="border-0 border-bottom responsive_input" style="width:480px;"></div>
                       <div class="small_text"> <span  class="p_sm_0" style="padding-left:220px;">Your Job Title</span> <span class="p_sm_0" style="padding-left:430px;">Your employer</span></div>

                        <div>
                            <span class="ms-lg-1"><input type="checkbox" value="Yes" name="Childspousal support" id="">
                                Child/spousal support </span>
                            <span class="ms-lg-1"><input type="checkbox" value="Yes" name="My spouse’s income or income from another member of my household if available" id=""> My spouse’s
                                income or income from another member of my household (if available) </span>
                            <span class="ms-lg-1"><input type="checkbox" value="Yes" name="Tips bonuses" id=""> Tips,
                                bonuses </span>
                            <span class="ms-lg-1"><input type="checkbox" value="Yes" name="Military Housing" id=""> Military
                                Housing </span>
                            <span class="ms-lg-1"><input type="checkbox" value="Yes" name="Worker’s Comp" id=""> Worker’s Comp </span>
                            <span class="ms-lg-1"><input type="checkbox" value="Yes" name="Disability" id=""> Disability
                            </span>
                            <span class="ms-lg-1"><input type="checkbox" value="Yes" name="Unemployment" id=""> Unemployment </span>
                            <span class="ms-lg-1"><input type="checkbox" value="Yes" name="Social Security" id=""> Social Security </span>
                            <span class="ms-lg-1"><input type="checkbox" value="Yes" name="RetirementPension" id=""> Retirement/Pension </span>
                            <span class="ms-lg-1"><input type="checkbox" value="Yes" name="Dividends interest royalties" id=""> Dividends, interest, royalties </span>
                            <span class="ms-lg-1"><input type="checkbox" value="Yes" name="2nd job or other income" id=""> 2 <sup>nd</sup> job or other income <input type="text" name="Describe" class="border-0 border-bottom responsive_input" id=""> </span> <div></div>
                        </div>
                        <div class="d-flex justify-content-between d_sm_block">
                            <div class="pt-lg-2">“My income amounts are stated below.</div>
                            <div class="pt-lg-2">Describe</div>
                        </div>
                         <div class="d-flex justify-content-between d_sm_block">
                            <div>(A) My monthly take-home wages:</div>
                            <div class="d-flex">
                                <small> Total amount received →</small>
                                <div class="d-flex border border-dark ms-lg-3"><span>$</span> <input type="text" name="fill_13" id="" class="border-0 border-bottom"></div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between d_sm_block">
                            <div>(B) The amount I receive each month in public benefits is:</div>
                            <div class="d-flex">
                                <small> Total amount received →</small>
                                <div class="d-flex border border-dark ms-lg-3"><span>$</span> <input type="text" name="fill_14" id="" class="border-0 border-bottom"></div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between d_sm_block">
                            <div>(C) The amount of income from other people in my household:</div>
                            <div class="d-flex">
                                <small> Total amount received →</small>
                                <div class="d-flex border border-dark ms-lg-3"><span>$</span> <input type="text" name="fill_15" id="" class="border-0 border-bottom"></div>
                            </div>
                        </div>
                        <div class="small_text">(list this income only if other members contribute to your household income )</div>

                        <div class="d-flex justify-content-between d_sm_block">
                            <div>(D) The amount I receive each month from other sources is:</div>
                            <div class="d-flex">
                                <small> Total amount received → </small>
                                <div class="d-flex border border-dark ms-lg-3"><span>$</span> <input type="text" name="fill_16" id="" class="border-0 border-bottom"></div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between d_sm_block">
                            <div>(E) My TOTAL monthly income</div>
                            <div class="d-flex">
                                <small> Add all sources of income above →</small>
                                <div class="d-flex border border-dark ms-lg-3"><span>$</span> <input type="text" name="fill_17" id="" class="border-0 border-bottom"></div>
                            </div>
                        </div>
                    </div>
                    @include('layouts.footer24', ['page' => 1])
                </section>
                <section class="section_area p-5" id="eighth_section">
                    <div class="small_text pb-lg-5">
                        <div>About my <b>dependents</b>:</div>
                        <div>“The people who depend on me financially are listed below:</div>
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="ps-lg-4">Name</div>
                                <div class="d-flex">1.<input type="text" name="1" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                <div class="d-flex">2.<input type="text" name="2" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                <div class="d-flex">3.<input type="text" name="3" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                <div class="d-flex">4.<input type="text" name="4" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                <div class="d-flex">5.<input type="text" name="5" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                <div class="d-flex">6.<input type="text" name="6" id="" class="border-0 border-bottom responsive_input w-100"></div>
                            </div>
                            <div class="col-lg-2">
                                <div class="text-center">Age</div>
                                <div class=""><input type="text" name="Age1" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                <div class=""><input type="text" name="Age2" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                <div class=""><input type="text" name="Age3" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                <div class=""><input type="text" name="Age4" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                <div class=""><input type="text" name="Age5" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                <div class=""><input type="text" name="Age6" id="" class="border-0 border-bottom responsive_input w-100"></div>

                            </div>
                            <div class="col-lg-3">
                                <div class="text-center">Relationship to Me</div>
                                <div class=""><input type="text" name="Relationship to Me 1" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                <div class=""><input type="text" name="Relationship to Me 2" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                <div class=""><input type="text" name="Relationship to Me 3" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                <div class=""><input type="text" name="Relationship to Me 4" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                <div class=""><input type="text" name="Relationship to Me 5" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                <div class=""><input type="text" name="Relationship to Me 6" id="" class="border-0 border-bottom responsive_input w-100"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div>“My property includes:</div>
                                <div>Cash</div>
                                <div>Bank accounts, other financial assets</div>
                                <div><input type="text" name="Bank accounts, other financial assets1" id=""  class="border-0 border-bottom responsive_input w-100"></div>
                                <div><input type="text" name="Bank accounts, other financial assets2" id=""  class="border-0 border-bottom responsive_input w-100"></div>
                                <div><input type="text" name="Bank accounts, other financial assets3" id=""  class="border-0 border-bottom responsive_input w-100"></div>
                                <div>Vehicles (cars, boats) </div>
                                <div><input type="text" name="Vehicles List make and year 1" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                <div><input type="text" name="Vehicles List make and year 2" id=""  class="border-0 border-bottom responsive_input w-100"></div>
                                <div><input type="text" name="Vehicles List make and year 3" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                <div>Other property (like jewelry, stocks, etc.) </div>
                                <div><input type="text" name="Other property like jewelry, stocks, etc Describe 1" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                <div><input type="text" name="Other property like jewelry, stocks, etc Describe 2" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                <div><input type="text" name="Other property like jewelry, stocks, etc Describe 3" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                <div class="fw-bold mt-lg-3">Total value of property →</div>
                            </div>
                            <div class="col-lg-2">
                                <div>Value*</div>
                                <div class="d-flex">$ <input type="text" name="undefined" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                <div> (List)</div>
                                <div class="d-flex">$ <input type="text" name="undefined_2" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                <div class="d-flex">$ <input type="text" name="undefined_2.1" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                <div class="d-flex">$ <input type="text" name="undefined_2.2" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                <div>(List make and year)</div>
                                <div class="d-flex">$ <input type="text" name="undefined_3" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                <div class="d-flex">$ <input type="text" name="undefined_4" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                <div class="d-flex">$ <input type="text" name="undefined_4.1" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                <div>(Describe)</div>
                                <div class="d-flex">$ <input type="text" name="undefined_5" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                <div class="d-flex">$ <input type="text" name="undefined_6" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                <div class="d-flex">$ <input type="text" name="undefined_6.1" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                <div class="d-flex p-1 border border-dark border-3 mt-lg-3">=$ <input type="text" name="fill_42" id="" class="border-0 border-bottom responsive_input w-100"></div>
                            </div>
                            <div class="col-lg-4">
                                <div>“My monthly expenses are:</div>
                                <div>Rent/house payments/maintenance</div>
                                <div>Food and household supplies</div>
                                <div>Utilities and telephone</div>
                                <div>Clothing and laundry</div>
                                <div>Medical and dental expenses</div>
                                <div>Insurance (life, health, auto, etc.)</div>
                                <div>School and child care</div>
                                <div>Transportation, auto repair, gas</div>
                                <div>Child / spousal support</div>
                                <div>Wages withheld by court order</div>
                                <div>Debt payment paid to: (list)</div>
                                <div class="d-flex">$ <input type="text" name="undefined_7" id="" class="border-0 border-bottom responsive_input w-100"></div>

                                <div class="fw-bold mt-lg-3">Total Monthly Expenses → </div>

                            </div>
                            <div class="col-lg-2">
                                <div>Amount</div>
                                <div class="d-flex">$ <input type="text" name="Rent/house payments/maintenance" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                <div class="d-flex">$ <input type="text" name="Food and household supplies" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                <div class="d-flex">$ <input type="text" name="Utilities and telephone" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                <div class="d-flex">$ <input type="text" name="Clothing and laundry" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                <div class="d-flex">$ <input type="text" name="Medical and dental expenses" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                <div class="d-flex">$ <input type="text" name="Insurance (life, health, auto, etc.)" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                <div class="d-flex">$ <input type="text" name="School and child care" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                <div class="d-flex">$ <input type="text" name="Transportation, auto repair, gas" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                <div class="d-flex">$ <input type="text" name="Child / spousal support" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                <div class="d-flex">$ <input type="text" name="Wages withheld by court order" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                <div class="d-flex">$ <input type="text" name="Debt payment paid to1" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                <div class="d-flex">$ <input type="text" name="Debt payment paid to2" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                <div class="d-flex p-1 border border-dark border-3 mt-lg-3">=$ <input type="text" name="fill_43" id="" class="border-0 border-bottom responsive_input w-100"></div>


                            </div>
                        </div>
                        <div>*The value is the amount the item would sell for less the amount you still owe on it, if
                            anything.</div>

                        <div class="pt-lg-3">“My <b>debts</b> include: (List debt and amount owed)</div>
                        <div><input type="text" name="My debts include List debt and amount owed" id="" class="border-0 border-bottom responsive_input w-100"></div>
                         <div><input type="text" name="I am unable to pay court costs. I verify that the statements made in this affidavit are true and correct" id="" class="border-0 border-bottom responsive_input w-100"></div>
                        <div class="fw-bold">“I am unable to pay court costs. I verify that the statements made in this affidavit are true and correct.”</div>
                        <div>To list any other facts you want the court to know, such as unusual medical expenses, family emergencies, etc., attach another page to this form and label it “Exhibit: Additional Supporting Facts.” Check here if you attach another page.
                            <input type="checkbox"  value="Yes" name="this form and label it Exhibit Additional Supporting Facts Check here if you attach another page" id="">
                        </div>
                        <div class="fw-bold">Do not sign until you are in front of a notary.</div>
                        <div class="row">
                            <div class="col-lg-8">
                                <input type="text" name="Signature of Person Signing Affidavit" id="" class="border-0 border-bottom responsive_input w-100">
                                <div class="small_text">Signature of Person Signing Affidavit</div>
                            </div>
                            <div class="col-lg-2">
                                <input type="date" name="Date_2" id="" class="border-0 border-bottom responsive_input w-100">
                                <div class="small_text">Date</div>
                            </div>
                        </div>
                        <div class="fw-bold">Notary fills out below.</div>
                        <div class="">State of Texas, County of <input type="text" name="State of Texas County of" id="" class="border-0 border-bottom responsive_input w-50"></div>
                        <div class="p_sm_0" style="padding-left:170px;">(Print the name of county where this Affidavit is notarized)</div>
                        <div>Sworn to and subscribed before me, the undersigned notary, on this date:<input
                                type="text" name="Sworn to and subscribed before me the undersigned notary on this date" id=""
                                class="border-0 border-bottom responsive_input" style="width:50px;">/<input type="text" name="undefined_8"
                                id="" class="border-0 border-bottom responsive_input" style="width:50px;">/20<input type="text" name="20" id="" class="border-0 border-bottom responsive_input" style="width:50px;"> at
                               <input type="text" name="at" id="" class="border-0 border-bottom responsive_input ">a.m./p.m. </div>

                         <div class="small_text"><span class="p_sm_0" style="padding-left:495px;">month   </span > <span style="padding-left:15px;"> day</span> <span class="p_sm_0" style="padding-left:50px;">year</span> <span class="p_sm_0" style="padding-left:40px;">time</span><span class="p_sm_0" style="padding-left:170px;">(circle one)</span></div>


                        <div class="row">
                            <div class="col-lg-6">
                                <div class="d-flex"> by <input type="text" name="by" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                <div class="text-center small_text">(Print name of person who is signing this Affidavit. NOT the notary’s name.)</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6"></div>
                            <div class="col-lg-6">
                                <div> <input type="text" name="Notary’s Signature" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                <div>Notary’s Signature</div>
                            </div>
                        </div>
                    </div>
                    @include('layouts.footer24', ['page' => 2])
                </section>
                <section class="section_area p-5" id="ninth_section">
                    <div class="border border-dark p-2"><b>WARNING</b>: Without the advice and help of an attorney, you
                        may be putting yourself, your personal property, and your money at risk. To get a referral to an
                        attorney, call the State Bar of Texas Lawyer Referral Information Service at 1-800-252-9690. If
                        you are a victim of domestic violence, or if at any time you feel unsafe, you can get
                        confidential help from the National Domestic Violence Hotline at 1-800-799-7233 or legal help
                        from the Texas Advocacy Project Family Violence Legal Line at 1-800-374-4673.</div>
                    <div>Print your answers in blue ink)</div>
                    <div class="text-center">Cause Number: <input type="text" name="Cause Number" id="" class="border-0 border-bottom responsive_input w-50"></div>
                    <div class="small_text text-center">The Clerk’s office will fill in the Cause Number when you file this form)</div>
                    <div class="pt-lg-2 fw-bold">IN THE MATTER OF THE MARRIAGE OF</div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div>Petitioner:<input type="text" name="Petitioner" class="border-0 border-bottom responsive_input w-75 ms-lg-3"></div>
                            <div class="small_text text-end me-lg-5">(Print first, middle, and last name of the spouse filing for divorce)</div>
                            <div class="text-center fw-bold">And</div>
                            <div>Respondent:<input type="text" name="Respondent" class="border-0 border-bottom responsive_input w-75 ms-lg-3"></div>
                            <div class="small_text text-end me-lg-5">(Print first, middle, and last name of other spouse)</div>
                        </div>
                        <div class="col-lg-6">
                            <div>In the (check one):</div>
                            <div>
                            <input type="text" name="Court Number_2" class="border-0 border-bottom responsive_input "><input type="radio" value="Yes" name="District Court_2" class=" me-lg-1">District Court
                            <input type="radio"  value="Yes" name="County Court at_2" class=" mx-lg-1"> County Court at Law of:</div>
                            <div class="small_text">(Court Number)</div>
                            <div><input type="text" name="County_2" class="border-0 border-bottom responsive_input w-75">County, Texas</div>
                            <div class="small_text">(County)</div>


                        </div>
                    </div>
                    <div class="h4 fw-bold pt-lg-3 text-center">Affidavit of Indigency</div>
                    <div class="h4 fw-bold  text-center">(Divorce Set 1 - Uncontested, No Minor Children, No Real
                        Property)</div>
                    <div class="pt-1 border border-dark p-1 mx-4"> <span class="pe-3 fw-bold">WARNING:</span> Read all
                        of the Instructions for Divorce Set 1 before filling out this form.
                    <input type="text" name="WARNING Read all of the Instructions for Divorce Set 1 before filling out this form" id="" class="border-0 border-bottom w-100"></div>
                    <div class="pt-lg-2 fw-bold">1. Parties</div>
                    <div class="fw-bold  ps-lg-3">Petitioner</div>
                    <div class="ps-lg-3">
                        <div class="ps-lg-3 small_text">
                            <div>My name is: <input type="text" name="My name is" id=""
                                    class="border-0 border-bottom responsive_input"> <input type="text"
                                    name="My name is2" id="" class="border-0 border-bottom responsive_input">
                                <input type="text" name="My name is3" id=""
                                    class="border-0 border-bottom responsive_input"></div>
                                    <div class="ps-lg-3 small_text"><span class="p_sm_0" style="padding-left:140px">First</span> <span  class="p_sm_0" style="padding-left:120px">Middle</span> <span  class="p_sm_0" style="padding-left:130px">Last</span></div>

                            <div>The last three numbers of my driver’s license number are: <input type="text"
                                    name="The last three numbers1" id="" class="border-0 border-bottom responsive_input" style="width:50px;">
                                <input type="text" name="The last three numbers2" id=""
                                    class="border-0 border-bottom responsive_input" style="width:50px;"> <input type="text"
                                    name="The last three numbers3" id="" class="border-0 border-bottom responsive_input" style="width:50px;"> .
                                My driver’s license was issued in <input type="text" name="was issued in" id=""
                                    class="border-0 border-bottom responsive_input" > .
                                <div><small class="p_sm_0" style="padding-left:850px;">State</small></div>
                            </div>
                            <div class="py-2  ps-lg-4 "><b>Or</b> <input type="checkbox"  value="Yes" name="I do not have a driver’s license number" id=""> I do not have a driver’s license number.</div>
                            <div>The last three numbers of my social security number are: <input type="text" name="The last three numbers of my social security number are" id="" class="border-0 border-bottom responsive_input" style="width:50px;">
                                <input type="text" name="undefined_10" id="" class="border-0 border-bottom responsive_input" style="width:50px;"> <input type="text" name="undefined_11" id="" class="border-0 border-bottom responsive_input" style="width:50px;"> .
                            </div>
                            <div class="py-2  ps-lg-4 "><b>Or</b> <input type="checkbox"  value="Yes" name="I do not have a social security number"
                                    id=""> I do not have a social security number.</div>
                        </div>
                        <div class="fw-bold">Respondent</div>
                        <div class="ps-lg-3 small_text">My spouse’s name is: <input type="text" name="My spouse’s name is" id="" class="border-0 border-bottom responsive_input"> <input type="text" name="My spouse’s name is2" id="" class="border-0 border-bottom responsive_input"> <input type="text" name="My spouse’s name is3" id="" class="border-0 border-bottom responsive_input"></div>
                        <div class="ps-lg-3 small_text"><span class="p_sm_0" style="padding-left:220px">First</span> <span  class="p_sm_0" style="padding-left:120px">Middle</span> <span  class="p_sm_0" style="padding-left:130px">Last</span></div>

                    </div>
                    <div class="fw-bold">2. Discovery</div>
                    <div class="ps-lg-3 small_text">The discovery level in this case is Level 2.</div>
                    <div class="fw-bold">3. Legal Notice</div>
                    <div class="ps-lg-3 small_text pb-lg-3">
                        <small>(Check one box)</small>
                        <div><input type="checkbox"  value="Yes" name="I do not think my spouse will sign a Waiver of Service I will have a sheriff constable process" id=""> I do not think my spouse will sign
                            a Waiver of Service. I will have a sheriff, constable, process server, or the clerk serve my spouse with this Original Petition at this address:</div>
                        <div><input type="text" name="undefined_12" id="" class="border-0 border-bottom responsive_input"> <input type="text" name="undefined_12.1" id="" class="border-0 border-bottom responsive_input"> <input type="text" name="undefined_12.2" id="" class="border-0 border-bottom responsive_input"> <input type="text" name="undefined_12.3" id="" class="border-0 border-bottom responsive_input"></div>
                                <div><span >Street Address</span> <span class="p_sm_0" style="padding-left:140px;">City</span> <span class="p_sm_0" style="padding-left:140px;">State</span> <span class="p_sm_0" style="padding-left:140px;">Zip</span></div>
                                <div>If this is a work address, name of business: <input type="text" name="If this is a work address, name of business" id="" class="border-0 border-bottom responsive_input" style="width:72%"></div>
                        <div class="py-2">I ask the clerk to issue a Citation of Service (the form necessary to
                            provide legal notice to my spouse). I understand that I will need to <b>pay the fee </b> (or
                            file an Affidavit of Indigency form to show the Court that I am unable to pay the fee) and
                            <b>arrange for service</b>.</div>
                    </div>
                    @include('layouts.footer25', ['page' => 1])
                </section>
                <section class="section_area p-5" id="tenth_section">
                    <div class="small_text">
                        <div class="ps-lg-3">

                            <input type="checkbox" name="I think my spouse will sign a Waiver of Service Do not send a sheriff constable or process"  value="Yes" id=""> I think my spouse will sign a
                            Waiver of Service. Do not send a sheriff, constable, or process server to serve my spouse
                            with this Original Petition.
                            <div>If my spouse does not sign a Waiver of Service, I will ask a sheriff, constable,
                                process server, or the clerk to serve my spouse with this Original Petition at this
                                address:</div>
                            <div> <input type="text" name="Street Address" id=""
                                    class="border-0 border-bottom responsive_input"> <input type="text"
                                    name="City" id="" class="border-0 border-bottom responsive_input">
                                <input type="text" name="Legal State_2" id=""
                                    class="border-0 border-bottom responsive_input"> <input type="text"
                                    name="Zip" id="" class="border-0 border-bottom responsive_input">.
                            </div>
                            <div><span >Street Address</span> <span class="p_sm_0" style="padding-left:140px;">City</span> <span class="p_sm_0" style="padding-left:140px;">State</span> <span class="p_sm_0" style="padding-left:140px;">Zip</span></div>
                            <div>If this is a work address, name of business: <input type="text" name="Name of business"
                                    id="" class="border-0 border-bottom responsive_input" style="width:72%">.</div>
                            <div class="p_sm_0" style="padding-left:310px;">Name of business </div>
                            <div class="py-3">IwillasktheclerktoissuetheCitationofService
                                (the form necessary to provide legal notice to my spouse). I understand that I will need to
                                <b>pay the fee </b>(or file an Affidavit of Indigency form to show the Court that I am
                                unable to pay the fee) and <b>arrange for service</b>.</div>
                        </div>
                    </div>
                    <div class="fw-bold">4. Jurisdiction</div>
                    <div class="ps-lg-3 small_text">
                        <div>County of Residence: (<small>Check all boxes that apply</small>)</div>
                        <div class="ps-lg-3">
                            <div> <input type="checkbox" value="Yes" name="I have lived in this county for the last 90 days" id=""> I have lived in this county
                                for the last 90 days.</div>
                            <div> <input type="checkbox" value="Yes" name="My spouse has lived in this county for the last 90 days" id=""> My spouse has lived in this
                                county for the last 90 days.</div>
                            <div> <input type="checkbox" value="Yes" name="I am serving in the armed forces outside of Texas but this county has been the home" id=""> I am serving in the armed
                                forces outside of Texas, but this county has been the home county of either my spouse or
                                me for at least 90 days.</div>
                            <div> <input type="checkbox" value="Yes" name="I have accompanied my spouse who is serving in the armed forces outside of Texas but" id=""> I have accompanied my spouse
                                who is serving in the armed forces outside of Texas, but this county has been the home
                                county of either my spouse or me for at least 90 days.</div>
                            <div> <input type="checkbox" value="Yes" name="None of the above apply" id=""> None of the above apply.
                            </div>
                        </div>
                        <div>State of Residence: ( <small>Check all boxes that apply</small> )</div>
                        <div class="ps-lg-3">
                            <div> <input type="checkbox" value="Yes" name="I have lived in Texas for the last six months" id=""> I have lived in Texas for the
                                last six months.</div>
                            <div> <input type="checkbox" value="Yes" name="My spouse has lived in Texas for the last six months" id=""> My spouse has lived in Texas
                                for the last six months.</div>
                            <div> <input type="checkbox" value="Yes" name="My spouse does not reside in Texas but Texas is the last state where we lived together as a" id=""> My spouse does not reside in Texas but Texas is the last state where we lived together as a married couple. This
                                petition is filed less than two years after we separated.</div>
                            <div> <input type="checkbox" value="Yes" name="I am serving in the armed forces outside of Texas but Texas is the home state of either my" id=""> I am serving in the armed
                                forces outside of Texas, but Texas is the home state of either my spouse or me and has
                                been for at least six months.</div>
                            <div> <input type="checkbox" value="Yes" name="I have accompanied my spouse who is serving in the armed forces outside of Texas but_2" id=""> I have accompanied my spouse
                                who is serving in the armed forces outside of Texas, but Texas is the home state of
                                either my spouse or me and has been for at least six months.</div>
                            <div> <input type="checkbox" value="Yes" name="None of the above apply_2" id=""> None of the above apply.
                            </div>
                        </div>
                    </div>
                    <div class="fw-bold">5. ProtectiveOrderStatement</div>
                    <div class="ps-lg-3 small_text">(Select Option A, B, or C and check the appropriate box(es).)</div>
                    <div class="ps-lg-3 pb-lg-3">
                        <div class="fw-bold">A. NoProtectiveOrder–</div>
                        <div class="ps-lg-3">
                            <div><input type="checkbox" value="Yes" name="I do not have a Protective Order against my spouse and I have not asked for one" id=""> I do not have a Protective
                                Order against my spouse and I have not asked for one.</div>
                            <div>AND</div>
                            <div><input type="checkbox" value="Yes" name="I have filed paperwork asking for a Protective Order against my spouse but a judge has not" id=""> My spouse does not have a
                                Protective Order against me and has not asked for one.</div>
                            </div>
                            <div class="fw-bold pt-lg-3">B. Pending Protective Order–
                                <div class="ps-lg-3 small_text">
                                    <div><input type="checkbox" value="Yes" name="I have filed paperwork" id=""> I have filed paperwork asking for a Protective Order against my spouse, but a judge has not decided if I should get it. I asked for a Protective Order on <input type="date" name="Date Filed" id="" class="border-0 border-bottom responsive_input"> in</div>
                                    <div>Date Filed</div>
                                </div>
                            </div>
                    </div>




                    @include('layouts.footer25', ['page' => 2])
                </section>
                <section class="section_area p-5" id="eleventh_section">
                    <div class="ps-lg-3">
                    <div class="small_text ps-lg-3">
                        <div class=""><input type="text" name="undefined_13" id="" class="border-0 border-bottom responsive_input">, <input type="text" name="The cause number is" id="" class="border-0 border-bottom responsive_input">. The cause number is <input type="text" name="undefined_14" id="" class="border-0 border-bottom responsive_input"> </div>
                        <div><span class="p_sm_0" style="padding-left:50px;">County</span> <span class="p_sm_0" style="padding-left:135px;">State</span> <span class="p_sm_0" style="padding-left:255px;">Cause Number</span></div>
                        <div>If I get the Protective Order, I will file a copy of it before any hearings in this divorce.</div>
                        <div><input type="checkbox"  value="Yes" name="My spouse has filed paperwork asking to get a Protective Order against me but a judge" id=""> My spouse has filed paperwork asking to get a Protective Order against me, but a judge has not decided if my spouse will get it. My spouse asked for a Protective Order on</div>
                        <div> <input type="text" name="in" id="" class="border-0 border-bottom responsive_input">in<input type="text" name="undefined_15" id="" class="border-0 border-bottom responsive_input">,<input type="text" name="The cause" id="" class="border-0 border-bottom responsive_input">. The cause number is <input type="text" name="If my spouse gets the Protective Order I will file a" id="" class="border-0 border-bottom responsive_input">. If my spouse gets the Protective Order, I </div>
                        <div><span class="p_sm_0" style="padding-left:50px;">Date Filed</span>  <span class="p_sm_0" style="padding-left:130px;">County</span> <span class="p_sm_0" style="padding-left:130px;">State</span> <span  class="p_sm_0" style="padding-left:245px;">Cause Number</span></div>
                        <div> will file a copy of it before any hearings in this divorce.  </div>
                    </div>
                    <div class="fw-bold pt-lg-3">C. Protective Order in Place–</div>

                    <div class="ps-lg-3 small_text">
                        <div><input type="checkbox" value="Yes" name="I do have a Protective Order against my spouse I got the Protective Order in" id=""> I <b>do have </b>a Protective Order against my spouse. I got the Protective Order in <input type="text" name="undefined_16" id="" class="border-0 border-bottom responsive_input">, <input type="text" name="on" id="" class="border-0 border-bottom responsive_input">on<input type="text" name="The cause number for the Protective Order" id="" class="border-0 border-bottom responsive_input">. The </div>
                        <div><span class="p_sm_0" style="padding-left:600px;">County</span> <span class="p_sm_0" style="padding-left:120px;">State</span> <span class="p_sm_0" style="padding-left:120px;">Date Ordered</span></div>
                           <div> cause number for the Protective Order is <input type="text" name="Protective Order in Place Cause Number" id="" class="border-0 border-bottom responsive_input">. Either I have attached a copy of the Protetive Order to this Original Petition or I will file a copy of it </div>
                           <div class="p_sm_0" style="padding-left:310px;"> <span>Cause Number</span></div>
                           <div> with the court before any hearings in this divorce.   </div>
                        <div><input type="checkbox" value="Yes" name="My spouse does have_11" id=""> My spouse does have a Protective Order against me. The Order was made in <input type="text" name="My spouse County" id="" class="border-0 border-bottom responsive_input">,<input type="text" name="My spouse State" id="" class="border-0 border-bottom responsive_input">on<input type="text" name="My spouse Date Ordered" id="" class="border-0 border-bottom responsive_input">. The
                        </div>
                        <div><span class="p_sm_0" style="padding-left:600px;">County</span> <span class="p_sm_0" style="padding-left:120px;">State</span> <span class="p_sm_0" style="padding-left:120px;">Date</span> <span>Ordered</span></div>
                        <div> cause number for the Protective order is <input type="text" name="Either I have attached a copy of the Protective Order to this" id="" class="border-0 border-bottom responsive_input">. Either I have attached a  copy of the Protective Order to this Original Petition or I will file a copy of it</div>
                        <div> <span class="p_sm_0" style="padding-left:300px;">Cause Number</span></div>
                        <div> with the court before any hearings in this divorce. </div>
                    </div>
                    </div>
                    <div class="fw-bold pt-lg-3">6. Marriage and Grounds for Divorce</div>
                    <div class="small_text ps-lg-3">
                        <div> My spouse and I got married on or about: <input type="text" name="undefined_18" id="" class="border-0 border-bottom responsive_input"> <input type="text" name="undefined_18.2" id="" class="border-0 border-bottom responsive_input"> <input type="text" name="undefined_18.3" id="" class="border-0 border-bottom responsive_input">.</div>
                        <div><span class="p_sm_0" style="padding-left:330px;">Month</span> <span  class="p_sm_0" style="padding-left:150px;">Day</span> <span class="p_sm_0" style="padding-left:150px;"> Year</span></div>
                        <div>The marriage has become insupportable due to discord or conflict of personalities that destroys the legitimate ends of the marital relationship and prevents any reasonable expectation of reconciliation.</div>
                    </div>
                    <div class="fw-bold pt-lg-3">7. Children</div>
                    <div class="ps-lg-3 small_text pb-lg-5">
                        <div>My spouse and I do not have any biological or adopted children together who are under the age of 18.</div>
                        <div>My spouse and I do not have any biological or adopted children together who are 18 years old or older and are still in high school.</div>
                        <div>My spouse and I do not have any disabled children of any age.</div>
                        <div>The wife has not had a child by another man since the date of marriage.</div>
                        <div>The wife is not pregnant.</div>
                    </div>
                    @include('layouts.footer25', ['page' => 3])
                </section>
                <section class="section_area p-5" id="twelfth_section">
                    <div class="fw-bold">8. Property and Debts</div>
                    <div class="ps-lg-3 pb-lg-3">
                        <div class="fw-bold"> Community Property </div>
                        <div>My spouse and I will try to make an agreement about how to divide the personal property and debts we acquired during our marriage. If we cannot agree, I ask the Court to divide our personal property and debts according to Texas law.   </div>
                        <div class="py-1 fw-bold">Separate Personal Property</div>
                        <div class="py-1">I own the following separate personal property. I owned this personal property before I was married or I received this personal property as a gift or inheritance during my marriage.</div>
                        <div>
                            <div class="fw-bold">1. Cars, trucks, motorcycles or other vehicles</div>
                            <div class="row ps-lg-3">
                                <div>I owned these vehicles before marriage:</div>
                                <div class="col-lg-2">
                                    <div>Year</div>
                                    <div><input type="text" name="Year 1" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                    <div><input type="text" name="Year 2" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                </div>
                                <div class="col-lg-3">
                                    <div>Make</div>
                                    <div><input type="text" name="Make 1" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                    <div><input type="text" name="Make 2" id="" class="border-0 border-bottom responsive_input w-100"></div>

                                </div>
                                <div class="col-lg-3">
                                    <div>Model</div>
                                    <div><input type="text" name="Model 1" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                    <div><input type="text" name="Model 2" id="" class="border-0 border-bottom responsive_input w-100"></div>

                                </div>
                                <div class="col-lg-4">
                                    <div>Vehicle Identification No. [VIN]</div>
                                    <div><input type="text" name="Vehicle Identification No 1" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                    <div><input type="text" name="Vehicle Identification No 2" id="" class="border-0 border-bottom responsive_input w-100"></div>

                                </div>
                                <div class="pt-lg-4">I received these vehicles as a gift or inheritance:</div>
                            </div>
                            <div class="row ps-lg-3">
                                <div class="col-lg-2">
                                    <div>Year</div>
                                    <div><input type="text" name="Year 1_2" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                    <div><input type="text" name="Year 2_2" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                </div>
                                <div class="col-lg-3">
                                    <div>Make</div>
                                    <div><input type="text" name="Make 1_2" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                    <div><input type="text" name="Make 2_2" id="" class="border-0 border-bottom responsive_input w-100"></div>

                                </div>
                                <div class="col-lg-3">
                                    <div>Model</div>
                                    <div><input type="text" name="Model 1_2" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                    <div><input type="text" name="Model 2_2" id="" class="border-0 border-bottom responsive_input w-100"></div>

                                </div>
                                <div class="col-lg-4">
                                    <div>Vehicle Identification No. [VIN]</div>
                                    <div><input type="text" name="Vehicle Identification No 1_2" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                    <div><input type="text" name="Vehicle Identification No 1_2" id="" class="border-0 border-bottom responsive_input w-100"></div>

                                </div>
                            </div>

                            <div>
                                <div class="fw-bold">2. Other Money or Personal Property</div>
                                <div class="  ps-lg-3">
                                    <div>I owned the following money or personal property before my marriage:</div>
                                    <div><input type="text" name="I owned the following money or personal property before my marriage 1" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                    <div><input type="text" name="I owned the following money or personal property before my marriage 2" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                    <div><input type="text" name="I owned the following money or personal property before my marriage 3" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                    <div><input type="text" name="I owned the following money or personal property before my marriage 4" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                    <div><input type="text" name="I owned the following money or personal property before my marriage 5" id="" class="border-0 border-bottom responsive_input w-100"></div>

                                    <div class="pt-lg-1 pb-lg-3">I inherited or received as a gift the following money or personal property during my marriage:</div>

                                    <div><input type="text" name="I inherited or received as a gift the following money or personal property during my marriage 1" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                    <div><input type="text" name="I inherited or received as a gift the following money or personal property during my marriage 2" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                    <div><input type="text" name="I inherited or received as a gift the following money or personal property during my marriage 3" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                    <div><input type="text" name="I inherited or received as a gift the following money or personal property during my marriage 4" id="" class="border-0 border-bottom responsive_input w-100"></div>

                                    <div class="pt-lg-1 pb-lg-3">I received the following money recovery for personal injuries that occurred during the marriage that is not for lost wages or medical expenses:</div>

                                    <div><input type="text" name="that is not for lost wages or medical expenses 1" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                    <div><input type="text" name="that is not for lost wages or medical expenses 2" id="" class="border-0 border-bottom responsive_input w-100"></div>

                                    <div class="pt-lg-2 pb-lg-3">I ask the Court to confirm this personal property as my separate personal property in my Final Decree of Divorce.</div>

                                </div>
                            </div>
                        </div>
                    </div>
                    @include('layouts.footer25', ['page' => 4])
                </section>

                <section class="section_area p-5" id="thirteen_section">
                    <div class="fw-bold">9. Name Change</div>
                    <div class="ps-lg-3">
                        <div class="border border-dark p-1">Note: You cannot use this form to change your name to anything other than a name that you used before you got married.</div>
                        <div class="small">(Check only one)</div>
                        <div><input type="checkbox" value="Yes" name="I am NOT asking the court to change my name" id=""> I am NOT asking the court to change my name.</div>
                        <div><input type="checkbox" value="Yes" name="I ask the Court to change my name back to a name I had before my marriage I am not asking the" id=""> I ask the Court to change my name back to a name I had before my marriage. I am not asking the court to change my name to avoid criminal prosecution or creditors.</div>

                        <div class="row">
                            <div class="col-lg-4">
                                <div><input type="text" name="First" id="" class="border-0 border-bottom w-100 responsive_input"></div>
                                <div class="small">First</div>
                            </div>

                            <div class="col-lg-4">
                                <div><input type="text" name="Middle" id="" class="border-0 border-bottom w-100 responsive_input"></div>
                                <div class="small">Middle</div>
                            </div>

                            <div class="col-lg-4">
                                <div><input type="text" name="Last" id="" class="border-0 border-bottom w-100 responsive_input"></div>
                                <div class="small">Last</div>
                            </div>

                        </div>
                    </div>

                    <div class="pt-lg-3 fw-bold">10. Prayer</div>
                    <div class="ps-lg-3 pb-lg-3">
                        <div>I ask the Court to grant me a divorce.</div>
                        <div>I also ask the Court to make the other orders I have asked for in this Original Petition for Divorce and any other orders to which I am entitled.</div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div><input type="text" name="Petitioners Name Print" id="" class="border-0 border-bottom w-100 responsive_input"></div>
                                <div class="small">Petitioner’s Name (Print)</div>
                            </div>
                            <div class="col-lg-6">
                                <div><input type="date" name="Date_3" id="" class="border-0 border-bottom w-100 responsive_input"></div>
                                <div class="small">Date</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div><input type="text" name="Petitioners Signature" id="" class="border-0 border-bottom w-100 responsive_input"></div>
                                <div class="small">Petitioner’s Signature</div>
                            </div>
                            <div class="col-lg-6">
                                <div><input type="text" name="Name Change Phone Number" id="" class="border-0 border-bottom w-100 responsive_input"></div>
                                <div class="small">Phone Number</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div><input type="text" name="Petitioners Mailing Address" id="" class="border-0 border-bottom w-100 responsive_input"></div>
                                <div class="small">Petitioner’s Mailing Address</div>
                            </div>
                            <div class="col-lg-6">
                               <div class="row">
                                <div class="col-lg-4">
                                    <div><input type="text" name="City_2" id="" class="border-0 border-bottom w-100 responsive_input"></div>
                                    <div class="small">City</div>
                                </div>
                                <div class="col-lg-4">
                                    <div><input type="text" name="State_2" id="" class="border-0 border-bottom w-100 responsive_input"></div>
                                    <div class="small">State</div>
                                </div>
                                <div class="col-lg-4">
                                    <div><input type="text" name="Zip_2" id="" class="border-0 border-bottom w-100 responsive_input"></div>
                                    <div class="small">Zip</div>
                                </div>
                               </div>
                            </div>
                        </div>

                        <div class="pt-lg-3 fw-bold">I understand that I must let the Court and my spouse (or my spouse’s attorney) know in writing if my mailing address or phone number changes during this case. If I don’t, any notices about this case will be sent to me at the address on this form.</div>
                    </div>

                    @include('layouts.footer25', ['page' => 5])
                </section>
                <section class="section_area p-5" id="fourteen_section">
                    <div class="pb-lg-3">
                        <div class="border border-dark p-1"><b>WARNING</b>: Without the advice and help of an attorney, you may be putting yourself, your personal property, and your money at risk. To get a referral to an attorney, call the State Bar of Texas Lawyer Referral Information Service at 1-800-252-9690. If you are a victim of domestic violence, or if at any time you feel unsafe, you can get confidential help from the National Domestic Violence Hotline at 1-800-799-7233 or legal help from the Texas Advocacy Project Family Violence Legal Line at 1-800-374-4673.</div>
                        <div class="text-center">Print court information exactly as it appears on your Original Petition for Divorce.</div>
                        <div>Print your answers in blue ink)</div>
                        <div class="text-center">Cause Number: <input type="text" name="IN THE MATTER OF THE MARRIAGE OF" id="" class="border-0 border-bottom responsive_input w-50"></div>
                        <div class="small_text text-center">The Clerk’s office will fill in the Cause Number when you
                            file this form)</div>
                        <div class="pt-lg-2 fw-bold">IN THE MATTER OF THE MARRIAGE OF</div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div>Petitioner:<input type="text" name="Print first, middle, and last name of the spouse filing"
                                        class="border-0 border-bottom responsive_input w-75 ms-lg-3"></div>
                                <div class="small_text text-end me-lg-5">(Print first, middle, and last name of the
                                    spouse filing for divorce)</div>
                                <div class="text-center fw-bold">And</div>
                                <div>Respondent:<input type="text" name="Print first, middle, and last name of the spouse filing_2"
                                        class="border-0 border-bottom responsive_input w-75 ms-lg-3"></div>
                                <div class="small_text text-end me-lg-5">(Print first, middle, and last name of other
                                    spouse)</div>
                            </div>
                            <div class="col-lg-6">
                                <div>In the (check one):</div>
                                <div><input type="text" name="Court Number_3"
                                        class="border-0 border-bottom responsive_input "><input type="radio"  value="Yes"
                                        name="District Court_3" class=" me-lg-1">District Court <input type="radio"  value="Yes"
                                        name="County Court_3" class=" mx-lg-1"> County Court at Law of:</div>
                                <div class="small_text">(Court Number)</div>
                                <div><input type="text" name="County_3"
                                        class="border-0 border-bottom responsive_input w-75">County, Texas</div>
                                <div class="small_text">(County)</div>

                            </div>
                        </div>
                        <div class="fw-bold h4 text-center pt-lg-2">Waiver of Service</div>
                        <div class="fw-bold h4 text-center pt-lg-2">(Divorce Set 1 - Uncontested, No Minor Children, No Real Property)</div>
                        <div class="border border-dark p-1">
                            <div class="fw-bold">WARNING to Respondent:</div>
                            <div class="small_text">
                            <div>Do not use this form if:</div>

                            <ul>
                                <ul>
                                    <li>You and your spouse disagree about any issue in your divorce.</li>
                                    <li>You or your spouse wants to file specific grounds for divorce, such as cruelty or adultery.</li>
                                    <li>The wife is pregnant, even if the husband is not the father.</li>
                                    <li>The wife has had a child by another man since the date of marriage.</li>
                                    <li>You and your spouse have a disabled child, regardless of that child’s age.</li>
                                    <li>You and your spouse have a biological or adopted child together who is either under 18 years old or who is 18 years old and still in high school.</li>
                                    <li>You or your spouse wants spousal support or maintenance, referred to as “alimony” in some states.</li>
                                    <li>You or your spouse owns or is buying real property (such as a house, building, piece of land, or other real estate).</li>
                                    <li>You or your spouse has an ongoing bankruptcy case.</li>
                                </ul>
                            </ul>
                            <div>Note on Retirement Funds (for example, pension, profit-sharing, and stock option plans, 401ks, and IRAs):</div>
                            <ul>
                                <ul>
                                    <li>If you use these forms to divide retirement funds, you will need to obtain an additional court order, usually called a “qualified
                                        domestic relations order” (QDRO), to make the division effective. A QDRO form is not included in this Divorce Set. It is recommended that you hire a lawyer to prepare a QDRO. If you and your spouse keep your own retirement funds or do not have any retirement funds, you do not need a QDRO.</li>
                                </ul>
                            </ul>
                            <div class="fw-bold">INSTRUCTIONS to Respondent:</div>
                            <div>Talk to a lawyer if you don’t understand this form, or read the instructions for this Divorce Set 1 - Uncontested, No Minor Children, No
                                Real Property, which can be found at <a href="https://texaslawhelp.org/">www.TexasLawHelp.org.</a> If you do use this form:</div>
                                <ul>
                                    <li>Do not sign it until <b class="border-bottom border-dark">at least one day after</b> the Original Petition for Divorce has been filed with the clerk’s office. Your spouse should have given you a copy of the Original Petition for Divorce when he or she gave you this form. The official court stamp on your copy will tell you when it was filed. If you sign this form before then, you will need to redo it.</li>
                                    <li>Fill out this form completely. You must include your address.</li>
                                    <li><b class="border-bottom border-dark">Sign this form in front of a notary</b>. If you sign it beforehand, you will need to redo it.</li>
                                    <li>Give the original signed form back to your spouse or file it (turn it in) to the court where your spouse filed the Original Petition for Divorce. Keep a copy for your records.</li>
                                </ul>

                            </div>
                        </div>
                        <div class="fw-bold">The person who signed this affidavit appeared, in person, before me, the undersigned notary, and stated under oath:</div>
                        <div>“I am the Respondent in this case.</div>
                        <div>My name is: <input type="text" name="First_2" id=""
                            class="border-0 border-bottom responsive_input"> <input type="text"
                            name="Middle_2" id="" class="border-0 border-bottom responsive_input">
                        <input type="text" name="Last_2" id=""
                            class="border-0 border-bottom responsive_input"></div>
                            <div class="ps-lg-3 small_text"><span class="p_sm_0" style="padding-left:140px">First</span> <span class="p_sm_0" style="padding-left:120px">Middle</span> <span  class="p_sm_0" style="padding-left:130px">Last</span></div>
                             <div>“My mailing address is:
                            <input type="text" name="Mailing Address" id="" class="border-0 border-bottom responsive_input">
                            <input type="text" name="City_3" id="" class="border-0 border-bottom responsive_input">
                            <input type="text" name="State_3" id="" class="border-0 border-bottom responsive_input">
                            <input type="text" name="ZIP_3" id="" class="border-0 border-bottom responsive_input"></div>
                            <div class="ps-lg-3 small_text"><span class="p_sm_0" style="padding-left:220px">Mailing Address</span> <span class="p_sm_0" style="padding-left:130px">City</span> <span  class="p_sm_0" style="padding-left:180px">State</span> <span  class="p_sm_0" style="padding-left:170px">ZIP</span></div>
                    </div>

                    @include('layouts.footer26', ['page' => 1])
                </section>
                <section class="section_area p-5" id="fifteen_section">
                        <div>“My phone number is:  (<input type="text" name="My drivers license was issued in" id="" class="border-0 border-bottom responsive_input">) <input type="text" name="undefined_19" id="" class="border-0 border-bottom responsive_input"> - <input type="text" name="The last three numbers of my drivers license number are_2" id="" class="border-0 border-bottom responsive_input">“The last three numbers of my driver’s license number are:
                            <input type="text" name="" id="" class="border-0 border-bottom responsive_input" style="width:50px;">
                            <input type="text" name="license number are_15.2" id="" class="border-0 border-bottom responsive_input" style="width:50px;">
                            <input type="text" name="license number are_15.3" id="" class="border-0 border-bottom responsive_input" style="width:50px;">
                            My driver’s license was issued in
                            <input type="text" name="I do not have a drivers license number The last three numbers of my social security number are" id="" class="border-0 border-bottom responsive_input"  >(State).
                        </div>
                    <div>Or “<input type="checkbox" value="Yes" name="undefined_20" id=""> I do not have a driver’s license number. “The last three numbers of my social security number are: <input type="text" name="Or_2" id="" class="border-0 border-bottom responsive_input" style="width:50px;">
                        <input type="text" name="I do not have a social security number_2" id="" class="border-0 border-bottom responsive_input" style="width:50px;">
                        <input type="text" name="undefined_21" id="" class="border-0 border-bottom responsive_input" style="width:50px;"></div>
                       <div> Or “<input type="checkbox" value="Yes" name="I do not have a social security number." id=""> I do not have a social security number.</div>
                       <div>“<input type="checkbox" value="Yes" name="undefined_22" id=""> I have been given a copy of the Original Petition for Divorce filed in this case. I have read the Original Petition for Divorce and understand what it says. I do not give up my right to review a different Petition for Divorce if it gets changed (amended).</div>
                       <div>“<input type="checkbox" value="Yes" name="undefined_23" id=""> I understand that I have the right to be given a copy of the Original Petition for Divorce by a constable, sheriff or other official process server (legal notice). I do not want to be given legal notice. I give up my right to legal notice.</div>
                       <div>“<input type="checkbox" value="Yes" name="undefined_24" id=""> I request that the Court not enter any orders or judgment if they are not signed by me or if I have not received prior written notice of the date, time, and place of any hearings.</div>
                       <div>“<input type="radio" value="Yes" name="If I reach an agreement and sign a Decree of Divorce the court can enter the Decree without giving me notice" id=""> If I reach an agreement and sign a Decree of Divorce, the court can enter the Decree without giving me notice.</div>
                       <div>“<input type="radio" value="Yes" name="If I reach an agreement and sign a Decree of Divorce the court can enter the Decree without giving me notice" id=""> I understand that I must let the Court and my spouse (or my spouse’s attorney) know in writing if my mailing address or phone number changes during this case. If I don’t, then I understand that any notices about this case will be sent to me at the address on this form.</div>
                       <div>“<input type="checkbox" value="Yes" name="undefined_27" id=""> I understand that by signing this form I am entering an appearance and am not required to go to Court to tell the judge my side of the case. I agree that a Judge or Associate Judge in the county and state where this case is filed may make decisions about my divorce, even if the divorce should have been filed in another county. I do not want a court reporter to make a record of the testimony.</div>


                       <div class="pt-lg-3">Military Status</div>
                       <div class="small">(Check only one)</div>
                       <div>“<input type="radio" value="Yes" name="I am not in the military" id=""> I am not in the military.</div>
                       <div>“<input type="radio" value="Yes" name="I am not in the military" id=""> I am in the military. I agree to the provisions stated above and I waive only the rights, privileges, and exemptions I have under the Servicemembers Civil Relief Act that are contrary to those provisions.</div>
                       <div class="pt-lg-3">Name Change</div>
                       <div class="small">(Check only one)</div>
                       <div class="border border-dark">Note: You cannot use this form to change your name to anything other than a name that you used before you got married.</div>
                       <div>“<input type="radio" value="Yes" name="I am NOT asking the court to change my name_2" id=""> I am NOT asking the court to change my name.</div>
                       <div>“<input type="radio" value="Yes" name="I am NOT asking the court to change my name_2" id=""> I  ask the Court to change my name back to a name I had before my marriage. I am not asking the court to change my name to avoid criminal prosecution or creditors.”</div>
                       <div class="row">
                        <div class="col-lg-4">
                            <div> <input type="text" name="First_3" id="" class="border-0 border-bottom responsive_input w-100"> </div>
                            <div class="small">First</div>
                        </div>
                        <div class="col-lg-4">
                            <div> <input type="text" name="Middle_3" id="" class="border-0 border-bottom responsive_input w-100"> </div>
                            <div class="small text-center">Middle</div>
                        </div>
                        <div class="col-lg-4">
                            <div> <input type="text" name="Last_3" id="" class="border-0 border-bottom responsive_input w-100"> </div>
                            <div class="small text-center">Last</div>
                        </div>
                       </div>
                       <div class="row">
                        <div class="col-lg-8">
                            <input type="text" name="Signature of Person Signing Affidavit_2" id=""
                                class="border-0 border-bottom responsive_input w-100">
                            <div class="small_text">Signature of Person Signing Affidavit</div>
                        </div>
                        <div class="col-lg-2">
                            <input type="date" name="Date_4" id=""
                                class="border-0 border-bottom responsive_input w-100">
                            <div class="small_text">Date</div>
                        </div>
                    </div>
                    <div class="d-flex d_sm_block">
                    <div class="fw-bold">Notary fills out below.</div>
                    <div class="">State of   <input type="text" name="Print name of state where this Affidavit is notarized"
                            id="" class="border-0 border-bottom responsive_input w-75">
                         </div>
                     <div class="">  County of <input type="text" name="Print the name of the county where this Affidavit is notarized"
                            id="" class="border-0 border-bottom responsive_input w-75">
                         </div>
                    </div>
                    <div>Sworn to and subscribed before me, the undersigned notary, on this date:<input
                            type="text" name="month" id=""
                            class="border-0 border-bottom responsive_input" style="width:50px;">/<input type="text" name="day_27"
                            id="" class="border-0 border-bottom responsive_input" style="width:50px;">/20<input
                            type="text" name="20" id=""
                            class="border-0 border-bottom responsive_input" style="width:50px;"> at
                           <input type="text"
                            name="time" id=""
                            class="border-0 border-bottom responsive_input ">a.m./p.m. </div>

                    <div class="small_text"><span class="p_sm_0" style="padding-left:595px;">month   </span > <span style="padding-left:15px;"> day</span> <span class="p_sm_0" style="padding-left:50px;">year</span> <span class="p_sm_0" style="padding-left:40px;">time</span><span class="p_sm_0" style="padding-left:170px;">(circle one)</span></div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="d-flex"> by <input type="text" name="Print name of person who is signing this Affidavit NOT the notarys name" id=""
                                    class="border-0 border-bottom responsive_input w-100"></div>
                            <div class="text-center small_text">(Print name of person who is signing this Affidavit. NOT the notary’s name.)</div>
                        </div>
                    </div>
                    <div class="row pb-lg-3">
                        <div class="col-lg-6"></div>
                        <div class="col-lg-6">
                            <div> <input type="text" name="Notarys Signature_2" id=""
                                    class="border-0 border-bottom responsive_input w-100"></div>
                            <div class="small_text">Notary’s Signature</div>
                        </div>
                    </div>

                    @include('layouts.footer26', ['page' => 2])
                </section>
                <section class="section_area p-5" id="sixteenth_section">
                    <div class="border border-dark p-1"><b>WARNING</b>: Without the advice and help of an attorney, you may be putting yourself, your personal property, and your money at risk. To get a referral to an attorney, call the State Bar of Texas Lawyer Referral Information Service at 1-800- 252-9690. If you are a victim of domestic violence, or if at any time you feel unsafe, you can get confidential help from the National Domestic Violence Hotline at 1-800-799-7233 or legal help from the Texas Advocacy Project Family Violence Legal Line at 1-800-374-4673</div>
                    <div class="text-center">Print court information exactly as it appears on your Original Petition for Divorce.</div>
                        <div>Print your answers in blue ink)</div>
                        <div class="text-center">Cause Number: <input type="text" name="IN THE MATTER OF THE MARRIAGE OF" id=""
                                class="border-0 border-bottom responsive_input w-50"></div>
                        <div class="small_text text-center">The Clerk’s office will fill in the Cause Number when you
                            file this form)</div>
                        <div class="pt-lg-2 fw-bold">IN THE MATTER OF THE MARRIAGE OF</div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div>Petitioner:<input type="text" name="Print first middle and last name of the spouse_2"
                                        class="border-0 border-bottom responsive_input w-75 ms-lg-3"></div>
                                <div class="small_text text-end me-lg-5">(Print first, middle, and last name of the
                                    spouse filing for divorce)</div>
                                <div class="text-center fw-bold">And</div>
                                <div>Respondent:<input type="text" name="Print first middle and last name of the spouse_3"
                                        class="border-0 border-bottom responsive_input w-75 ms-lg-3"></div>
                                <div class="small_text text-end me-lg-5">(Print first, middle, and last name of other
                                    spouse)</div>
                            </div>
                            <div class="col-lg-6">
                                <div>In the (check one):</div>
                                <div><input type="text" name="Court Number_4"
                                        class="border-0 border-bottom responsive_input "><input type="radio" value="Yes"
                                        name="District Court_4" class=" me-lg-1">District Court <input type="radio" value="Yes"
                                        name="County Court_4" class=" mx-lg-1"> County Court at Law of:</div>
                                <div class="small_text">(Court Number)</div>
                                <div><input type="text" name="County_4"
                                        class="border-0 border-bottom responsive_input w-75">County, Texas</div>
                                <div class="small_text">(County)</div>

                            </div>
                        </div>
                        <div class="fw-bold h4 text-center pt-lg-2">Waiver of Service</div>
                        <div class="fw-bold h4 text-center pt-lg-2">(Divorce Set 1 - Uncontested, No Minor Children, No Real Property)</div>
                        <div class="border border-dark p-1">
                            <b>WARNING</b>: Read all of the Instructions for Divorce Set 1 before filling out this form.
                            <input type="text" name="WARNING Read all of the Instructions for Divorce Set 1 before filling out this form_2" id="" class="border-0 border-bottom w-100 responsive_input">
                        </div>

                        <div class="pt-lg-3">A hearing took place on <input type="text" name="Date_5" class="border-0 border-bottom">. There was no jury. Neither the husband nor wife asked for a jury.</div>
                        <div class="py-lg-2 fw-bold">1. Appearances</div>

                        <div class="fw-bold">Petitioner</div>
                          <div class="row">
                                <div class="col-lg-3">
                                    The Petitioner’s name is : </div>
                                <div class="col-lg-3">
                                    <input type="text" name="First_4" id=""  class="border-0 border-bottom responsive_input">
                                    <div class="small_text">First</div>
                                </div>
                                <div class="col-lg-3">
                                    <input type="text" name="Middle_4" id=""  class="border-0 border-bottom responsive_input">
                                    <div class="small_text">Middle</div>

                                </div>
                                <div class="col-lg-3 ">
                                    <input type="text" name="Last_4" id=""  class="border-0 border-bottom responsive_input">.
                                    <div class="small_text">Last</div>

                                </div>
                             </div>
                            <div class="pt-lg-3 small">(Check one box)</div>
                            <div><input type="radio" value="Yes" name="The Petitioner was present representing himherself and has agreed to the terms of this Final" id=""> The Petitioner was present, representing him/herself, and has agreed to the terms of this Final Decree of Divorce (called “Decree” throughout this document).</div>
                            <div><input type="radio" value="Yes" name="The Petitioner was not present but has signed below agreeing to the terms of this Decree" id=""> The Petitioner was not present but has signed below, agreeing to the terms of this Decree.</div>
                            <div class="pt-lg-3 fw-bold">Respondent</div>
                            <div>
                             <div class="row">
                                <div class="col-lg-3">
                                    The Respondent’s name is :</div>
                                <div class="col-lg-3">
                                    <input type="text" name="First_5" id=""  class="border-0 border-bottom responsive_input">
                                    <div class="small_text">First</div>
                                </div>
                                <div class="col-lg-3">
                                    <input type="text" name="Middle_5" id=""  class="border-0 border-bottom responsive_input">
                                    <div class="small_text">Middle</div>
                                </div>
                                <div class="col-lg-3">
                                    <input type="text" name="Last_5" id=""  class="border-0 border-bottom responsive_input">.
                                    <div class="small_text">Last</div>
                                </div>
                             </div>
                                 </div>
                                 <div class="small pt-lg-2">(Check one box)</div>

                                <div><input type="radio" value="Yes" name="The Respondent was present and agrees to the terms in this Decree" id=""> The Respondent was present and agrees to the terms in this Decree.</div>
                                <div><input type="radio" value="Yes" name="The Respondent was not present but has signed below agreeing to the terms in this Decree" id=""> The Respondent was not present but has signed below, agreeing to the terms in this Decree.</div>
                                <div class="pb-lg-3"><input type="radio" value="Yes" name="The Respondent was not present and has defaulted The Petitioner has filed a Certificate of" id=""> The Respondent was not present and has defaulted. The Petitioner has filed a Certificate of Last Known Address and a Military Status Affidavit. The Petitioner has also arranged for a court reporter to record the hearing.</div>


                    @include('layouts.footer27', ['page' => 1])
                </section>
                <section class="section_area p-5" id="seventeenth_section">
                        <div class="pb-lg-3">
                            <div class="text-center court_fills"><span  class="text-center  bg-secondary  ">The Court fills out this box.</span></div>
                            <div class="bg-secondary_1 p-2">
                                <div class="fw-bold">2. Record</div>
                                <div><input type="checkbox" value="Yes" name="A court reporter did not record todays hearing because the husband wife and judge agreed not" id=""> A court reporter did not record today’s hearing because the husband, wife, and judge agreed not to make a record.</div>
                                <div><input type="checkbox" value="Yes" name="A court reporter recorded todays hearing" id=""> A court reporter recorded today’s hearing.</div>
                            </div>
                            <div class="pt-lg-3 fw-bold">3. Jurisdiction</div>
                            <div>The Court heard evidence and finds that it has jurisdiction over this case and the parties, that the residency and notice requirements have been met, and that the Original Petition for Divorce meets all legal requirements.</div>
                            <div>The Court finds that the Original Petition for Divorce was filed more than 60 days ago.</div>
                            <div class="pt-lg-3 fw-bold">4. Children</div>
                            <div>Husband and Wife do not have any biological or adopted children, together, under the age of 18.</div>
                            <div>Husband and Wife do not have any biological or adopted children together who are 18 years old or older and are still in high school.</div>
                            <div>Husband and Wife do not have any disabled children of any age.</div>
                            <div>The wife has not had a child by another man since the date of marriage.</div>
                            <div>The wife is not pregnant.</div>
                            <div class="pt-lg-3 fw-bold">5. Divorce</div>
                            <div>IT IS ORDERED that the Petitioner and the Respondent are divorced.</div>
                            <div class="pt-lg-3 fw-bold">6. PropertyandDebts</div>
                            <div class="border border-dark p-1 small_text">
                                <div>About community property: Texas is a community property state. This means that any new property or debt that either party obtains from the minute they are married until the minute the judge grants the divorce is probably community property, even if the property or debt is only in one spouse’s name. There are only a few exceptions to the law of community property such as gifts, inheritance, or a recovery for personal injuries that occurred during the marriage that is not for lost wages or medical expenses. All community property and debt should be included in the Final Decree of Divorce. </div>
                                <div>About separate property: If either party receives a gift, an inheritance, or a recovery for personal injuries that occurred during the marriage that is not for lost wages or medical expenses, it is separate property. It is a good idea to list separate property obtained during the marriage as that spouse’s separate property in the Final Decree of Divorce.</div>
                                <div>More information about community and separate property can be found by consulting a lawyer, as well as in the Texas Family Code, Chapters 3, 4, and 5.</div>
                            </div>

                            <div class="py-lg-3">The Court makes the following orders regarding the parties’ community and separate property:</div>
                            <div class="py-2 fw-bold border-bottom">Husband’s Property</div>
                            <div class="pt-lg-5">Husband’s Separate Property</div>
                            <div class="small">(Fill in all lines. If you have no property to declare in any particular category, write “none.”)</div>

                        </div>

                    @include('layouts.footer27', ['page' => 2])
                </section>
                <section class="section_area p-5" id="eighteenth_section">
                     <div class="ps-lg-3 pb-lg-3">
                         <div>The Court confirms that Husband owns the following property as his separate personal property:</div>
                          <div>
                            <div class="fw-bold">1. Cars, trucks, motorcycles or other vehicles</div>
                            <div class="row ps-lg-3">
                                 <div class="ps-lg-3"> <input type="checkbox" value="Yes" name="He owned these vehicles before marriage" id=""> He owned these vehicles before marriage:</div>
                                <div class="col-lg-2">
                                    <div>Year</div>
                                    <div><input type="text" name="Year 1_3" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                    <div><input type="text" name="Year 2_3" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                </div>
                                <div class="col-lg-3">
                                    <div>Make</div>
                                    <div><input type="text" name="Make 1_3" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                    <div><input type="text" name="Make 2_3" id="" class="border-0 border-bottom responsive_input w-100"></div>

                                </div>
                                <div class="col-lg-3">
                                    <div>Model</div>
                                    <div><input type="text" name="Model 1_3" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                    <div><input type="text" name="Model 2_3" id="" class="border-0 border-bottom responsive_input w-100"></div>

                                </div>
                                <div class="col-lg-4">
                                    <div>Vehicle Identification No. [VIN]</div>
                                    <div><input type="text" name="Vehicle Identification No VIN 1_3" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                    <div><input type="text" name="Vehicle Identification No VIN 2_3" id="" class="border-0 border-bottom responsive_input w-100"></div>

                                </div>
                                <div class="pt-lg-4"><input type="checkbox" value="Yes" name="He received these vehicles as a gift or inheritance during the marriage" id=""> He received these vehicles as a gift or inheritance during the marriage:</div>
                            </div>
                            <div class="row ps-lg-3">
                                <div class="col-lg-2">
                                    <div>Year</div>
                                    <div><input type="text" name="Year 1_4" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                    <div><input type="text" name="Year 2_4" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                </div>
                                <div class="col-lg-3">
                                    <div>Make</div>
                                    <div><input type="text" name="Make 1_4" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                    <div><input type="text" name="Make 2_4" id="" class="border-0 border-bottom responsive_input w-100"></div>

                                </div>
                                <div class="col-lg-3">
                                    <div>Model</div>
                                    <div><input type="text" name="Model 1_4" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                    <div><input type="text" name="Model 2_4" id="" class="border-0 border-bottom responsive_input w-100"></div>

                                </div>
                                <div class="col-lg-4">
                                    <div>Vehicle Identification No. [VIN]</div>
                                    <div><input type="text" name="Vehicle Identification No VIN 1_4" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                    <div><input type="text" name="Vehicle Identification No VIN 2_4" id="" class="border-0 border-bottom responsive_input w-100"></div>

                                </div>
                            </div>

                            <div>
                                <div class="fw-bold">2. Other Money or Personal Property ( <span>not real property, such as a house or piece of land</span> )</div>
                                <div class="  ps-lg-3">
                                    <div>Husband owned the following money or personal property before marriage:</div>
                                    <div><input type="text" name="Husband owned the following money or personal property before marriage 1" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                    <div><input type="text" name="Husband owned the following money or personal property before marriage 2" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                      <div><input type="text" name="Husband owned the following money or personal property before marriage 3" id="" class="border-0 border-bottom responsive_input w-100"></div>

                                    <div class="pt-lg-1 pb-lg-3"> Husband inherited or received as a gift the following money or personal property during the marriage:</div>

                                     <div><input type="text" name="marrige 1" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                    <div><input type="text" name="marrige 2" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                    <div><input type="text" name="marrige 3" id="" class="border-0 border-bottom responsive_input w-100"></div>

                                    <div class="pt-lg-1 pb-lg-3">Husband received the following money recovery for personal injuries that occurred during the marriage that is not for lost wages or medical expenses:</div>

                                    <div><input type="text" name="marriage that is not for lost wages or medical expenses 1" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                    <div><input type="text" name="marriage that is not for lost wages or medical expenses 2" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                </div>
                                <div class="fw-bold">Community Property</div>
                                <div>The Court ORDERS that Husband gets the following property as his sole and separate property, and Wife conveys (gives) to Husband her interest in such property, and Wife is divested of (loses) all right, title, interest and claim in and to that property. </div>
                                <div>Wife IS ORDERED to sign any documents needed to transfer any personal property listed below to Husband. Husband is responsible for preparing the documents.</div>
                                <ol>
                                    <li>All PERSONAL property in Husband’s care, custody or control, or in Husband’s name, that this Order does not give to Wife.</li>
                                    <li> All of Husband’s cash and money in any bank or other financial institution listed in Husband’s name alone.</li>
                                    <li>Any insurance policy that covers Husband’s life.</li>
                                    <li>Any insurance policy that covers Husband’s life.</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    @include('layouts.footer27', ['page' => 3])
                </section>
                <section class="section_area p-5" id="nineteenth_section">
                     <div class="ps-lg-3 pb-lg-5">
                           <div>
                             <div class="row ps-lg-3">
                                 <div class="col-lg-2">
                                    <div>Year</div>
                                    <div><input type="text" name="Year 1_5" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                    <div><input type="text" name="Year 2_5" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                </div>
                                <div class="col-lg-3">
                                    <div>Make</div>
                                    <div><input type="text" name="Make 1_5" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                    <div><input type="text" name="Make 2_5" id="" class="border-0 border-bottom responsive_input w-100"></div>

                                </div>
                                <div class="col-lg-3">
                                    <div>Model</div>
                                    <div><input type="text" name="Model 1_5" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                    <div><input type="text" name="Model 2_5" id="" class="border-0 border-bottom responsive_input w-100"></div>

                                </div>
                                <div class="col-lg-4">
                                    <div>Vehicle Identification No. [VIN]</div>
                                    <div><input type="text" name="Vehicle Identification No VIN 1_5" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                    <div><input type="text" name="Vehicle Identification No VIN 2_5" id="" class="border-0 border-bottom responsive_input w-100"></div>

                                </div>
                             </div>
                             <div>
                                <div class="fw-bold">5. Husband will keep the following personal property still held jointly:   <small>(For example, a bank account, but not real property such as a house or land.)</small> </div>
                                <div class="  ps-lg-3">
                                     <div><input type="text" name="1not real property such as a house or land" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                    <div><input type="text" name="not real property such as a house or land2" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                      <div><input type="text" name="not real property such as a house or land3" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                      <div><input type="text" name="not real property such as a house or land4" id="" class="border-0 border-bottom responsive_input w-100"></div>

                                             </div>
                                <div class="fw-bold mt-lg-3"><b>Husband’s Retirement Funds</b> <small>(For example, pension, profit-sharing, and stock option plans, 401ks, and IRAs)</small></div>
                                <div>Husband shall pay and shall indemnify and hold the wife and her property harmless for any failure to
                                    discharge the debts listed below:</div>
                                    <ol>
                                        <li> All taxes, bills, liens, and other charges, present and future, that are in Husband’s name alone or that this Order gives to Husband alone, unless this Order requires otherwise.</li>
                                        <li> Any debt Husband incurred after separation. Date of separation: <input type="text" name="that this Order gives to Husband alone unless this Order requires otherwise" id="" class="border-0 border-bottom responsive_input " >
                                            <div class="text-center">Month Day Year</div>
                                        </li>
                                        <li> The balance due on any loan for any vehicles that this Order gives to Husband alone.</li>
                                        <li>
                                            The other debts listed below which are not in Husband’s name alone (such as credit cards, student loans, medical bills, income taxes):
                                        </li>
                                        <div><input type="text" name="student loans medical bills income taxes 1" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                        <div><input type="text" name="student loans medical bills income taxes 2" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                          <div><input type="text" name="student loans medical bills income taxes 3" id="" class="border-0 border-bottom responsive_input w-100"></div>

                                    </ol>
                                <div><input type="checkbox" value="Yes" name="Husband does not have any retirement funds" id=""> Husband does not have any retirement funds. </div>
                                <div><input type="checkbox" value="Yes" name="Husband has the following retirement funds" id=""> Husband has the following retirement funds: </div>
                                <div class="table-responsive">
                                    <table class="table table-bordered border-dark w-50">
                                        <tbody>
                                            <tr>
                                                <td>Identify or Describe Retirement Fund</td>
                                                <td>State Current Value of Fund</td>
                                            </tr>
                                            <tr>
                                                <td><input type="text" name="Identify or Describe Retirement FundRow 1" id="" class="border-0  responsive_input w-100"></td>
                                                <td><input type="text" name="State Current Value of FundRow 1" id="" class="border-0  responsive_input w-100"></td>
                                            </tr>
                                            <tr>
                                                <td><input type="text" name="Identify or Describe Retirement FundRow 2" id="" class="border-0  responsive_input w-100"></td>
                                                <td><input type="text" name="State Current Value of FundRow 2" id="" class="border-0  responsive_input w-100"></td>
                                            </tr>
                                            <tr>
                                                <td><input type="text" name="Identify or Describe Retirement FundRow 3" id="" class="border-0  responsive_input w-100"></td>
                                                <td><input type="text" name="State Current Value of FundRow 3" id="" class="border-0  responsive_input w-100"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div>If Husband has retirement funds, the funds:</div>

                            </div>
                        </div>
                    </div>
                    @include('layouts.footer27', ['page' => 4])
                </section>
                <section class="section_area p-5" id="twentieth_section">
                     <div class="ps-lg-3 pb-lg-3">
                        <div><input type="checkbox" value="Yes" name="accrued between the date of the marriage and the date this Decree is signed by the Court are" id=""> accrued between the date of the marriage and the date this Decree is signed by the Court are awarded 50% to Husband and 50% to Wife.</div>
                        <div><input type="checkbox" value="Yes" name="are awarded" id=""> are awarded <input type="text" name="awarded 50 to Husband and 50 to Wife" id="" class="border-0 border-bottom" style="width: 100px"> to Husband and <input type="text" name="to Wife List dollar amount or percentage" id="" class="border-0 border-bottom" style="width: 100px"> to Wife. <small>(List dollar amount or percentage.)</small></div>
                        <div><input type="checkbox" value="Yes" name="are awarded 100% to Husband" id=""> are awarded 100% to Husband.</div>
                        <div class="text-decoration-underline"> If you divide the retirement funds above by awarding any of Husband’s retirement funds to Wife, you will need to obtain an additional court order, usually called a “qualified domestic relations order” (QDRO), to make the division effective. A QDRO form is not included in this Divorce Set. It is recommended that you hire a lawyer to prepare a QDRO. If you award all of Husband’s retirement funds to Husband or if Husband has no retirement funds, you do not need a QDRO.</div>
                        <div class="py-lg-3 fw-bold  "><span class=" border-bottom">Wife’s Property</span></div>

                        <div class="fw-bold">Wife’s Separate Property</div>
                        <div class="small">(Fill in all lines. If you have no property to declare in any particular category, write “none.”)</div>
                        <div>The Court confirms that Wife owns the following property as her separate personal property:</div>


                        <div>
                            <div class="fw-bold">1. Cars, trucks, motorcycles or other vehicles</div>
                            <div class="row ps-lg-3">
                                <div><input type="checkbox"  value="Yes" name="She owned these vehicles before marriage" id=""> She owned these vehicles before marriage:</div>
                                <div class="col-lg-2">
                                    <div>Year</div>
                                    <div><input type="text" name="Year1 "_6 id="" class="border-0 border-bottom responsive_input w-100"></div>
                                    <div><input type="text" name="Year2 "_6 id="" class="border-0 border-bottom responsive_input w-100"></div>
                                </div>
                                <div class="col-lg-3">
                                    <div>Make</div>
                                    <div><input type="text" name="Make1 "_6 id="" class="border-0 border-bottom responsive_input w-100"></div>
                                    <div><input type="text" name="Make2 "_6 id="" class="border-0 border-bottom responsive_input w-100"></div>

                                </div>
                                <div class="col-lg-3">
                                    <div>Model</div>
                                    <div><input type="text" name="Model 1_6" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                    <div><input type="text" name="Model 2_6" id="" class="border-0 border-bottom responsive_input w-100"></div>

                                </div>
                                <div class="col-lg-4">
                                    <div>Vehicle Identification No. [VIN]</div>
                                    <div><input type="text" name="Vehicle Identification No VIN 1_5" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                    <div><input type="text" name="Vehicle Identification No VIN 2_5" id="" class="border-0 border-bottom responsive_input w-100"></div>

                                </div>
                                <div class="pt-lg-4">I received these vehicles as a gift or inheritance:</div>
                            </div>
                            <div class="row ps-lg-3">
                                <div class="col-lg-2">
                                    <div>Year</div>
                                    <div><input type="text" name="Year1 "_7 id="" class="border-0 border-bottom responsive_input w-100"></div>
                                    <div><input type="text" name="Year2 "_7 id="" class="border-0 border-bottom responsive_input w-100"></div>
                                </div>
                                <div class="col-lg-3">
                                    <div>Make</div>
                                    <div><input type="text" name="Make1 "_7 id="" class="border-0 border-bottom responsive_input w-100"></div>
                                    <div><input type="text" name="Make2 "_7 id="" class="border-0 border-bottom responsive_input w-100"></div>

                                </div>
                                <div class="col-lg-3">
                                    <div>Model</div>
                                    <div><input type="text" name="Model 1_7" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                    <div><input type="text" name="Model 2_7" id="" class="border-0 border-bottom responsive_input w-100"></div>

                                </div>
                                <div class="col-lg-4">
                                    <div>Vehicle Identification No. [VIN]</div>
                                    <div><input type="text" name="Vehicle Identification No VIN 1_6" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                    <div><input type="text" name="Vehicle Identification No VIN 2_6" id="" class="border-0 border-bottom responsive_input w-100"></div>

                                </div>
                            </div>

                            <div>
                                <div class="fw-bold">2. Other Money or Personal Property <small>(not real property, such as a house or piece of land.)</small></div>
                                <div class="ps-lg-3">
                                    <div>Wife owned the following money or personal property before marriage:</div>
                                    <div><input type="text" name="Wife owned the following money or personal property before marriage 1" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                    <div><input type="text" name="Wife owned the following money or personal property before marriage 2" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                      <div><input type="text" name="Wife owned the following money or personal property before marriage 3" id="" class="border-0 border-bottom responsive_input w-100"></div>

                                    <div class="pt-lg-1 pb-lg-3">Wife inherited or received as a gift the following money or personal property during the marriage:</div>

                                     <div><input type="text" name="Wife inherited or received as a gift the following money or personal property during the marriage 1" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                    <div><input type="text" name="Wife inherited or received as a gift the following money or personal property during the marriage 2" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                    <div><input type="text" name="Wife inherited or received as a gift the following money or personal property during the marriage 3" id="" class="border-0 border-bottom responsive_input w-100"></div>

                                    <div class="pt-lg-1 pb-lg-3">Wife received the following money recovery for personal injuries that occurred during the marriage that is not for lost wages or medical expenses.</div>

                                    <div><input type="text" name="marriage that is not for lost wages or medical expenses " id="" class="border-0 border-bottom responsive_input w-100"></div>
                                </div>
                            </div>
                        </div>


                    </div>
                    @include('layouts.footer27', ['page' => 5])
                </section>
                <section class="section_area p-5" id="twenty-one_section">
                     <div class="ps-lg-3 pb-lg-5">
                        <div>
                            <div class="ps-lg-3">
                                <div><input type="text" name="1_2" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                <div><input type="text" name="2_2" id="" class="border-0 border-bottom responsive_input w-100"></div>
                            </div>
                            <div class="fw-bold py-lg-3">Community Property   </div>
                            <div>The Court ORDERS that Wife gets the following property as her sole and separate property, and Husband conveys (gives) to Wife his interest in such property, and Husband is divested of (loses) all right, title, interest, and claim in and to that property.</div>
                            <div>Husband IS ORDERED to sign any documents needed to transfer any personal property listed below to Wife. Wife is responsible for preparing the documents.</div>
                                <ol>
                                    <li>All PERSONAL property in Wife’s care, custody, or control, or in Wife’s name, that this Order does not give to Husband.</li>
                                    <li>All Wife’s cash and money in any bank or other financial institution listed in Wife’s name alone. </li>
                                     <li>Any insurance policy that covers Wife’s life.</li>
                                    <li>Wife’s cars, trucks, motorcycles or other vehicles listed below:</li>
                                    <div class="row ps-lg-3">
                                 <div class="col-lg-2">
                                    <div>Year</div>
                                    <div><input type="text" name="Year1_8" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                    <div><input type="text" name="Year2_8" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                </div>
                                <div class="col-lg-3">
                                    <div>Make</div>
                                    <div><input type="text" name="Make1_8" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                    <div><input type="text" name="Make2_8" id="" class="border-0 border-bottom responsive_input w-100"></div>

                                </div>
                                <div class="col-lg-3">
                                    <div>Model</div>
                                    <div><input type="text" name="Model1_8" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                    <div><input type="text" name="Model2_8" id="" class="border-0 border-bottom responsive_input w-100"></div>

                                </div>
                                <div class="col-lg-4">
                                    <div>Vehicle Identification No. [VIN]</div>
                                    <div><input type="text" name="Vehicle Identification No VIN 1_7" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                    <div><input type="text" name="Vehicle Identification No VIN 2_7" id="" class="border-0 border-bottom responsive_input w-100"></div>

                                </div>
                             </div>
                             <li class="pt-lg-3 ">Wife will keep the following personal property still held jointly: ( <small> For example, a bank account, but not real property such as a house or land.</small>)</li>
                             <div><input type="text" name="property such as a house or land 1" id="" class="border-0 border-bottom responsive_input w-100"></div>
                             <div><input type="text" name="property such as a house or land 2" id="" class="border-0 border-bottom responsive_input w-100"></div>
                             <div><input type="text" name="property such as a house or land 3" id="" class="border-0 border-bottom responsive_input w-100"></div>
                             <div class="pb-lg-5 border-bottom border-dark"><input type="text" name="property such as a house or land 4" id="" class="border-0 border-bottom responsive_input w-100"></div>

                            </ol>
                            <div class="fw-bold">  Wife’s Retirement Funds <small>(For example, pension, profit-sharing, and stock option plans, 401ks, and IRAs)</small></div>
                                <div><input type="checkbox" value="Yes" name="Wife does not have any retirement funds" id=""> Wife does not have any retirement funds.</div>
                                <div><input type="checkbox" value="Yes" name="Wife has the following retirement funds" id=""> Wife has the following retirement funds: </div>
                                <div class="table-responsive">
                                    <table class="table table-bordered border-dark w-50">
                                        <tbody>
                                            <tr>
                                                <td>Identify or Describe Retirement Fund</td>
                                                <td>State Current Value of Fund</td>
                                            </tr>
                                            <tr>
                                                <td><input type="text" name="Identify or Describe Retirement FundRow1_2" id="" class="border-0  responsive_input w-100"></td>
                                                <td><input type="text" name="State Current Value of FundRow1_2" id="" class="border-0  responsive_input w-100"></td>
                                            </tr>
                                            <tr>
                                                <td><input type="text" name="Identify or Describe Retirement FundRow2_2" id="" class="border-0  responsive_input w-100"></td>
                                                <td><input type="text" name="State Current Value of FundRow2_2" id="" class="border-0  responsive_input w-100"></td>
                                            </tr>
                                            <tr>
                                                <td><input type="text" name="Identify or Describe Retirement FundRow2_2" id="" class="border-0  responsive_input w-100"></td>
                                                <td><input type="text" name="State Current Value of FundRow3_3" id="" class="border-0  responsive_input w-100"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div>If Wife has retirement funds, the funds:</div>
                                <div><input type="checkbox" value="Yes" name="accrued between the date of the marriage and the date this Decree is signed by the Court are_2" id=""> accrued between the date of the marriage and the date this Decree is signed by the Court are awarded 50% to Wife and 50% to Husband.</div>
                                <div><input type="checkbox" value="Yes" name="are awarded_2" id=""> are awarded <input type="text" name="awarded 50 to Wife and 50 to Husband" id="" class="border-0 border-bottom responsive_input" style="width:100px"> to Wife and  <input type="text" name="to Husband List dollar amount or percentage" id="" class="border-0 border-bottom responsive_input" style="width:100px">to Husband. <small>(List dollar amount or percentage.)</small> </div>
                        </div>
                    </div>
                    @include('layouts.footer27', ['page' => 6])
                </section>
                <section class="section_area p-5" id="twenty-two_section">
                     <div class="">
                        <div>
                            <div><input type="checkbox"  value="Yes" name="are awarded 100 to Wife" id=""> are awarded 100% to Wife</div>
                            <div class="text-decoration-underline">
                                If you divide the retirement funds above by awarding any of Wife’s retirement funds to Husband, you will need to obtain an additional court order, usually called a “qualified domestic relations order” (QDRO), to make the division effective. A QDRO form is not included in this Divorce Set. It is recommended that you hire a lawyer to prepare a QDRO. If you award all of Wife’s retirement funds to Wife or if Wife has no retirement funds, you do not need a QDRO.</div>

                            {{-- <div class="fw-bold">5. Husband will keep the following personal property still held jointly: <small>(For example, a bank account, but not real property such as a house or land.)
                            </small></div>
                            <div class="ps-lg-3">
                                <div><input type="text" name="Husband will keep1_22" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                <div><input type="text" name="Husband will keep2_22" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                <div><input type="text" name="Husband will keep3_22" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                <div><input type="text" name="Husband will keep4_22" id="" class="border-0 border-bottom responsive_input w-100"></div>
                            </div> --}}
                            <div class="fw-bold">Wife’s Debts <small>(If you do not want Wife to pay these debts, do NOT use this form.)</small></div>
                            <div>Wife shall pay and shall indemnify and hold the husband and his property harmless for any failure to
                                discharge the debts listed below:</div>
                                <ol>
                                    <li>All taxes, bills, liens, and other charges, present and future, that are in Wife’s name alone or that this Order gives to Wife alone, unless this Order requires otherwise.</li>
                                    <li>Any debt Wife incurred after separation. Date of separation
                                        <input type="text" name="this Order gives to Wife alone unless this Order requires otherwise" id="" class="border-0 border-bottom" style="width:100px;">
                                        <input type="text" name="this Order gives to Wife alone unless this Order requires otherwise 2" id="" class="border-0 border-bottom" style="width:100px;">
                                        <input type="text" name="this Order gives to Wife alone unless this Order requires otherwise 3" id="" class="border-0 border-bottom" style="width:100px;">
                                    </li>
                                    <div class="small"><span class="p_sm_0" style="margin-left:530px;">Month</span> <span class="p_sm_0" style="margin-left:60px;">Day</span> <span class="p_sm_0" style="margin-left:70px;">Year</span></div>
                                    <li>The balance due on any loan for any vehicles that this Order gives to Wife alone. </li>
                                    <li>The other debts listed below, which are not in Wife’s name alone (such as credit cards, student loans, medical bills, income taxes):
                                        <input type="text" name="loans medical bills income taxes 1" id="" class="border-0 border-bottom responsive_input w-100">
                                        <input type="text" name="loans medical bills income taxes 2" id="" class="border-0 border-bottom responsive_input w-100">
                                        <input type="text" name="loans medical bills income taxes 3" id="" class="border-0 border-bottom responsive_input w-100">
                                     </li>
                                </ol>

                                <div class="fw-bold pt-lg-3">7. Muniment of Title</div>
                                <div>This Decree shall serve as a muniment of title to transfer ownership of all property awarded to any party in this Final Decree of Divorce. (A “muniment of title” creates an official record of ownership transfer.)</div>
                                <div class="fw-bold pt-lg-3">8. Name Change</div>
                                <div>The Court changes the name of the:</div>
                                <div class="small">(Check all boxes that apply)</div>
                                <div><input type="checkbox" value="Yes" name="Husband back to a name used before marriage as it appears below" id=""> Husband back to a name used before marriage, as it appears below.</div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div><input type="text" name="First_6" id="" class="border-0 border-bottom w-100 responsive_input"></div>
                                        <div class="small">First</div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div><input type="text" name="Middle_6" id="" class="border-0 border-bottom w-100 responsive_input"></div>
                                        <div class="small">Middle</div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div><input type="text" name="Last_6" id="" class="border-0 border-bottom w-100 responsive_input"></div>
                                        <div class="small">Last</div>
                                    </div>

                                </div>
                                <div><input type="checkbox" value="Yes" name="Wife back to a name used before marriage as it appears below" id=""> Wife back to a name used before marriage, as it appears below.</div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div><input type="text" name="First_7" id="" class="border-0 border-bottom w-100 responsive_input"></div>
                                        <div class="small">First</div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div><input type="text" name="Middle_7" id="" class="border-0 border-bottom w-100 responsive_input"></div>
                                        <div class="small">Middle</div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div><input type="text" name="Last_7" id="" class="border-0 border-bottom w-100 responsive_input"></div>
                                        <div class="small">Last</div>
                                    </div>

                                </div>

                                <div class="fw-bold pt-lg-3">9. Court Costs</div>
                                <div class="pb-lg-3">The costs of court are to be borne by the party who incurred them to the extent the party is required to pay such costs. A party who filed an affidavit of indigency that was not successfully contested is not required to pay court costs.</div>
                        </div>
                    </div>
                    @include('layouts.footer27', ['page' => 7])
                </section>
                <section class="section_area p-5" id="twenty-three_section">
                    <div class="pb-lg-3">
                        <div class="fw-bold pt-lg-3">10. Other Orders</div>
                        <div>The court has the right to make other orders, if needed, to clarify or enforce the orders above.</div>
                        <div class="fw-bold pt-lg-3">11. Final Order</div>
                        <div class="pb-lg-5">Any orders requested that do not appear above are denied. This Decree is a final judgment that disposes of all claims and all parties and is appealable.</div>
                        <div class="pt-lg-5">
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" name="Judges Name" id="" class="border-0 border-bottom responsive_input w-100">
                                    <div class="small pb-lg-2">Judge’s Name </div>
                                    <div class="pt-lg-5">
                                        <div class="fw-bold">By signing below, the Petitioner agrees to the form and substance of this Decree.</div>

                                        <div class="row">
                                            <div class="col-lg-8">
                                                <input type="text" name="Petitioners Name print" id="" class="border-0 border-bottom responsive_input w-100">
                                                <div class="small pb-lg-2">Petitioner’s Name (print) </div>

                                            </div>
                                            <div class="col-lg-4">
                                                <input type="text" name="Phone Number" id="" class="border-0 border-bottom responsive_input w-100">
                                                <div class="small pb-lg-2">Phone Number</div>

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <input type="text" name="Respondents Name_2" id="" class="border-0 border-bottom responsive_input w-100">
                                                <div class="small pb-lg-2">Petitioner’s Signature </div>

                                            </div>
                                            <div class="col-lg-4">
                                                <input type="text" name="Date_6" id="" class="border-0 border-bottom responsive_input w-100">
                                                <div class="small pb-lg-2"> Date</div>

                                            </div>
                                        </div>
                                        <div class="small">Mailing Address:</div>
                                        <div><input type="text" name="Address 1" id="" class="border-0 border-bottom responsive_input w-100"> </div>
                                        <div><input type="text" name="Address 2" id="" class="border-0 border-bottom responsive_input w-100"> </div>
                                        <div><input type="text" name="Address 3" id="" class="border-0 border-bottom responsive_input w-100"> </div>
                                        <div><input type="text" name="undefined_32" id="" class="border-0 border-bottom responsive_input w-100"> </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" name="Judges signature" id="" class="border-0 border-bottom responsive_input w-100">
                                    <div class="small">  Judge’s signature </div>
                                    <input type="text" name="Date of Judgment" id="" class="border-0 border-bottom responsive_input w-100">
                                    <div class="small">  Date of Judgment </div>

                                    <div>
                                        <div class="fw-bold">By signing below, the Respondent agrees to the form and substance of this Decree.</div>
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <input type="text" name="Respondents Name print" id="" class="border-0 border-bottom responsive_input w-100">
                                                <div class="small pb-lg-2">Respondent’s Name (print) </div>

                                            </div>
                                            <div class="col-lg-4">
                                                <input type="text" name="Phone Number_2" id="" class="border-0 border-bottom responsive_input w-100">
                                                <div class="small pb-lg-2">Phone Number</div>

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <input type="text" name="Respondents Signature" id="" class="border-0 border-bottom responsive_input w-100">
                                                <div class="small pb-lg-2"> Respondent’s Signature</div>

                                            </div>
                                            <div class="col-lg-4">
                                                <input type="text" name="Date_7" id="" class="border-0 border-bottom responsive_input w-100">
                                                <div class="small pb-lg-2">Date</div>

                                            </div>
                                        </div>
                                        <div class="small">Mailing Address:</div>
                                        <div><input type="text" name="Address 1_2" id="" class="border-0 border-bottom responsive_input w-100"> </div>
                                        <div><input type="text" name="Address 2_2" id="" class="border-0 border-bottom responsive_input w-100"> </div>
                                        <div><input type="text" name="Address 3_2" id="" class="border-0 border-bottom responsive_input w-100"> </div>
                                        <div><input type="text" name="Address 4" id="" class="border-0 border-bottom responsive_input w-100"> </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                   </div>
                   @include('layouts.footer27', ['page' => 8])
               </section>
                <section class="section_area p-5" id="twenty-fourth_section">
                    <div class="">
                         <div class="border border-dark p-1">
                            <b>WARNING</b>: Without the advice and help of an attorney, you may be putting yourself, your personal property, and your money at risk. To get a referral to an attorney, call the State Bar of Texas Lawyer Referral Information Service at 1-800- 252-9690. If you are a victim of domestic violence, or if at any time you feel unsafe, you can get confidential help from the National Domestic Violence Hotline at 1-800-799-7233 or legal help from the Texas Advocacy Project Family Violence Legal Line at 1-800-374-4673.
                         </div>
                         <div class="small_text text-center">Print court information exactly as it appears on your Original Petition for Divorce.</div>
                         <div>(Print your answers in blue ink)</div>
                         <div class="text-center">Cause Number: <input type="text" name="IN THE MATTER OF THE MARRIAGE OF_3" id="" class="border-0 border-bottom responsive_input w-50"></div>
                         <div class="small_text text-center">The Clerk’s office will fill in the Cause Number when you file this form)</div>
                         <div class="pt-lg-2 fw-bold">IN THE MATTER OF THE MARRIAGE OF</div>
                         <div class="row">
                             <div class="col-lg-6">
                                 <div>Petitioner:<input type="text" name="Print first middle and last name of the spouse_3" class="border-0 border-bottom responsive_input w-75 ms-lg-3"></div>
                                 <div class="small_text text-end me-lg-5">(Print first, middle, and last name of the spouse filing for divorce)</div>
                                 <div class="text-center fw-bold">And</div>
                                 <div>Respondent:<input type="text" name="Print first middle and last name of other spouse_4" class="border-0 border-bottom responsive_input w-75 ms-lg-3"></div>
                                 <div class="small_text text-end me-lg-5">(Print first, middle, and last name of other spouse)</div>
                             </div>
                             <div class="col-lg-6">
                                 <div>In the (check one):</div>
                                 <div><input type="text" name="Court Number_5" class="border-0 border-bottom responsive_input "><input type="radio"  value="Yes" name="District Court_5" class=" me-lg-1">District Court <input type="radio"  value="Yes" name="District Court at_5" class=" mx-lg-1"> County Court at Law of:</div>
                                 <div class="small_text">(Court Number)</div>
                                 <div><input type="text" name="County_5" class="border-0 border-bottom responsive_input w-75">County, Texas</div>
                                 <div class="small_text">(County)</div>
                             </div>
                         </div>
                         <div class="h4 fw-bold pt-lg-3 text-center">Certificate of Last Known Mailing Address</div>
                         <div class="h4 fw-bold  text-center">(Divorce Set 1 - Uncontested, No Minor Children, No Real Property)</div>
                         <div class="mx-auto border border-dark px-2"><b>WARNING</b>: Read all of the Instructions for Divorce Set 1 before filling out this form.</div>
                         <div>I, <input type="text" name="Your full name" id="" class="border-0 border-bottom"> certify that the last known mailing address that I have for Respondent, <input type="text" name="Spouses full name" id="" class="border-0 border-bottom responsive_input">is:</div>
                         <div class="small_text"><span class="p_sm_0" style="margin-left:30px;">Your full name</span>  <span class="p_sm_0" style="margin-left:680px;">Spouse’s full name</span></div>

                         <div class="row">
                            <div class="col-lg-6 mx-auto">
                                <div>
                                    <input type="text" name="Spouses Mailing Address" id="" class="border-0 border-bottom responsive_input w-100">
                                    <div class="small_text ms-lg-4">Spouse’s Mailing Address    </div>
                                </div>
                                <div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <input type="text" name="City_4" id="" class="border-0 border-bottom responsive_input w-100">
                                            <div class="small_text ms-lg-4">City</div>
                                        </div>
                                        <div class="col-lg-3">
                                            <input type="text" name="State_4" id="" class="border-0 border-bottom responsive_input w-100">
                                            <div class="small_text ms-lg-4">State</div>
                                        </div>
                                        <div class="col-lg-3">
                                            <input type="text" name="Zip_4" id="" class="border-0 border-bottom responsive_input w-100">
                                            <div class="small_text ms-lg-4">Zip</div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <input type="text" name="Telephone" id="" class="border-0 border-bottom responsive_input w-100">
                                    <div class="small_text ms-lg-4">Telephone </div>
                                </div>
                                <div class="pb-lg-5">
                                    <input type="text" name="Fax" id="" class="border-0 border-bottom responsive_input w-100">
                                    <div class="small_text ms-lg-4">Fax </div>
                                </div>
                            </div>
                            <div class="py-lg-5">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="text" name=">Partys Signature Sign your name" id="" class="border-0 border-bottom responsive_input w-100">
                                        <div class="small_text ms-lg-4">Party’s Signature <small>(Sign your name)</small> </div>

                                    </div>
                                    <div class="col-lg-4">
                                        <input type="text" name="Date_8" id="" class="border-0 border-bottom responsive_input w-100">
                                        <div class="small_text ms-lg-4">Date </div>

                                    </div>
                                </div>
                            </div>
                         </div>
                   </div>

                     <div class="row m-0 pt-lg-3">
                        <div class="col-lg-10 mt-3 mt-lg-0">
                            <div>© Form Approved by the Supreme Court of Texas by order in Misc. Docket No. 13-9085 (June 17, 2013)
                                Certificate of Last Known Mailing Address
                                (Divorce Set 1 - Uncontested, No Minor Children, No Real Property)</div>
                        </div>
                        <div class="col-lg-2 my-3 my-lg-0 text-center mx-auto">
                            <div>Page 1 of 1 </div>
                        </div>
                    </div>



               </section>
                <section class="section_area p-5" id="twenty-fifth_section">
                    <div class="">
                         <div class="border border-dark p-1">
                            <b>WARNING</b>: Without the advice and help of an attorney, you may be putting yourself, your personal property, and your money at risk. To get a referral to an attorney, call the State Bar of Texas Lawyer Referral Information Service at 1-800- 252-9690. If you are a victim of domestic violence, or if at any time you feel unsafe, you can get confidential help from the National Domestic Violence Hotline at 1-800-799-7233 or legal help from the Texas Advocacy Project Family Violence Legal Line at 1-800-374-4673.</div>
                         <div class="small_text text-center">Print court information exactly as it appears on your Original Petition for Divorce.</div>
                         <div>(Print your answers in blue ink)</div>
                         <div class="text-center">Cause Number: <input type="text" name="IN THE MATTER OF THE MARRIAGE OF_4" id=""
                                 class="border-0 border-bottom responsive_input w-50"></div>
                         <div class="small_text text-center">The Clerk’s office will fill in the Cause Number when you
                             file this form)</div>
                         <div class="pt-lg-2 fw-bold">IN THE MATTER OF THE MARRIAGE OF</div>
                         <div class="row">
                             <div class="col-lg-6">
                                 <div>Petitioner:<input type="text" name="Print first middle and last name of the spouse_4"
                                         class="border-0 border-bottom responsive_input w-75 ms-lg-3"></div>
                                 <div class="small_text text-end me-lg-5">(Print first, middle, and last name of the
                                     spouse filing for divorce)</div>
                                 <div class="text-center fw-bold">And</div>
                                 <div>Respondent:<input type="text" name="Print first middle and last name of other spouse_5"
                                         class="border-0 border-bottom responsive_input w-75 ms-lg-3"></div>
                                 <div class="small_text text-end me-lg-5">(Print first, middle, and last name of other
                                     spouse)</div>
                             </div>
                             <div class="col-lg-6">
                                 <div>In the (check one):</div>
                                 <div><input type="text" name="Court Number_6"
                                         class="border-0 border-bottom responsive_input "><input type="radio"  value="Yes" name="District Court_6" class=" me-lg-1">District Court <input type="radio" value="Yes"
                                         name="County Court at_6" class=" mx-lg-1"> County Court at Law of:</div>
                                 <div class="small_text">(Court Number)</div>
                                 <div><input type="text" name="County_25"
                                         class="border-0 border-bottom responsive_input w-75">County, Texas</div>
                                 <div class="small_text">(County)</div>
                             </div>
                         </div>
                         <div class="h4 fw-bold pt-lg-3 text-center">Notice of Change of Address</div>
                         <div class="h4 fw-bold  text-center">(Divorce Set 1 - Uncontested, No Minor Children, No Real Property)</div>
                         <div class="mx-auto border border-dark px-2"><b>WARNING</b>: Read all of the Instructions for Divorce Set 1 before filling out this form.</div>
                         <div>I, <input type="text" name="Print your full name" id="" class="border-0 border-bottom"> certify that i am party to the above-styled cause. My address has changed. I request that the Court’s records be </div>

                         <div class="small_text"><span class="p_sm_0" style="margin-left:30px;">print Your full name</span>  </div>
                         <div>updated accordingly.</div>
                          <div>cause. My address has changed. I request that the Court’s records be updated accordingly.</div>
                         <div class="pt-lg-4">My new address is as follows:</div>
                         <div class="row">
                            <div class="col-lg-6 mx-auto">
                                <div>
                                    <input type="text" name="Mailing Address_2" id="" class="border-0 border-bottom responsive_input w-100">
                                    <div class="small_text ms-lg-4">Mailing Address    </div>
                                </div>
                                <div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <input type="text" name="City_5" id="" class="border-0 border-bottom responsive_input w-100">
                                            <div class="small_text ms-lg-4">City</div>
                                        </div>
                                        <div class="col-lg-3">
                                            <input type="text" name="State_5" id="" class="border-0 border-bottom responsive_input w-100">
                                            <div class="small_text ms-lg-4">State</div>
                                        </div>
                                        <div class="col-lg-3">
                                            <input type="text" name="Zip_5" id="" class="border-0 border-bottom responsive_input w-100">
                                            <div class="small_text ms-lg-4">Zip</div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <input type="text" name="Telephone_2" id="" class="border-0 border-bottom responsive_input w-100">
                                    <div class="small_text ms-lg-4">Telephone </div>
                                </div>
                                <div>
                                    <input type="text" name="Facsimile" id="" class="border-0 border-bottom responsive_input w-100">
                                    <div class="small_text ms-lg-4">Facsimile </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-7"></div>
                                <div class="col-lg-4">
                                    <div class="pb-lg-5">
                                        <input type="text" name="Partys Signature Sign your name_2" id="" class="border-0 border-bottom responsive_input w-100">
                                        <div class="small_text ms-lg-4">Party’s Signature <small>(Sign your name)</small> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="fw-bold">Certificate to Service</div>
                            <div>I gave a true copy of this Notice of Change of Address to my spouse (or my spouse’s attorney, if
                                applicable) in person, by fax, or by certified mail, return receipt requested.</div>
                            <div class="py-lg-5">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="text" name="Party’s Signature Sign your name_3" id="" class="border-0 border-bottom responsive_input w-100">
                                        <div class="small_text ms-lg-4">Party’s Signature <small>(Sign your name)</small> </div>

                                    </div>
                                    <div class="col-lg-4">
                                        <input type="text" name="Date_9" id="" class="border-0 border-bottom responsive_input w-100">
                                        <div class="small_text ms-lg-4">Date </div>

                                    </div>
                                </div>
                            </div>
                         </div>
                    </div>

                   {{-- @include('layouts.footer22', ['page' => 25]) --}}
                    <div class="row m-0 pt-lg-3">
                        <div class="col-lg-10 mt-3 mt-lg-0">
                            <div>© Form Approved by the Supreme Court of Texas by order in Misc. Docket No. 13-9085 (June 17, 2013)
                                Notice of Change of Address (Divorce Set 1 - Uncontested, No Minor Children, No Real Property)</div>
                        </div>
                        <div class="col-lg-2 my-3 my-lg-0 text-center mx-auto">
                            <div>Page 1 of 1 </div>
                        </div>
                    </div>
               </section>
                <section class="section_area p-5" id="twenty-sixth_section">
                    <div class="pb-lg-3">
                         <div class="border border-dark p-1">
                            <b>WARNING</b>: Without the advice and help of an attorney, you may be putting yourself, your personal property, and your money at risk. To get a referral to an attorney, call the State Bar of Texas Lawyer Referral Information Service at 1-800- 252-9690. If you are a victim of domestic violence, or if at any time you feel unsafe, you can get confidential help from the National Domestic Violence Hotline at 1-800-799-7233 or legal help from the Texas Advocacy Project Family Violence Legal Line at 1-800-374-4673.</div>
                         <div class="small_text text-center">Print court information exactly as it appears on your Original Petition for Divorce.</div>
                         <div>(Print your answers in blue ink)</div>
                         <div class="text-center">Cause Number: <input type="text" name="IN THE MATTER OF THE MARRIAGE OF_5" id=""
                                 class="border-0 border-bottom responsive_input w-50"></div>
                         <div class="small_text text-center">The Clerk’s office will fill in the Cause Number when you
                             file this form)</div>
                         <div class="pt-lg-2 fw-bold">IN THE MATTER OF THE MARRIAGE OF</div>
                         <div class="row">
                            <div class="col-lg-6">
                                 <div>Petitioner:<input type="text" name="Print first middle and last name of the spouse_5" class="border-0 border-bottom responsive_input w-75 ms-lg-3"></div>
                                 <div class="small_text text-end me-lg-5">(Print first, middle, and last name of the spouse filing for divorce)</div>
                                 <div class="text-center fw-bold">And</div>
                                 <div>Respondent:<input type="text" name="Print first middle and last name of other spouse_6" class="border-0 border-bottom responsive_input w-75 ms-lg-3"></div>
                                 <div class="small_text text-end me-lg-5">(Print first, middle, and last name of other spouse)</div>
                            </div>
                            <div class="col-lg-6">
                                 <div>In the (check one):</div>
                                 <div><input type="text" name="Court Number_7" class="border-0 border-bottom responsive_input "><input type="radio" value="Yes" name="District Court_7" class=" me-lg-1">District Court <input type="radio" value="Yes" name="County Court at_7" class=" mx-lg-1"> County Court at Law of:</div>
                                 <div class="small_text">(Court Number)</div>
                                 <div><input type="text" name="County_7" class="border-0 border-bottom responsive_input w-75">County, Texas</div>
                                 <div class="small_text">(County)</div>
                            </div>

                         </div>
                         <div class="h4 fw-bold pt-lg-3 text-center">Military Status Affidavit</div>
                         <div class="h4 fw-bold  text-center">(Divorce Set 1 - Uncontested, No Minor Children, No Real Property)</div>
                         <div class="mx-auto border border-dark px-2"><b>WARNING</b>: Read all of the Instructions for Divorce Set 1 before filling out this form.</div>
                         <div>I, <input type="text" name="Print the name of county where this Affidavit is notarized" id="" class="border-0 border-bottom"> certify that i am party to the above-styled cause. My address has changed. I request that the Court’s records be updated accordingly.</div>
                         <div class="fw-bold">State of Texas,</div>
                         <div class="fw-bold">County of <input type="text" name="County of_26" id="" class="border-0 border-bottom"></div>
                         <div class="small_text ms-lg-5">(Print the name of county where this Affidavit is notarized)</div>
                         <div class="pt-lg-3">The person who signed this affidavit appeared, in person, before me, the undersigned notary, and stated under oath:</div>

                         <ol>
                            <li>
                                 <div class="row">
                                    <div class="col-lg-3"> My name is :</div>
                                    <div class="col-lg-3">
                                        <input type="text" name="First_8" id=""  class="border-0 border-bottom responsive_input">
                                        <div class="small_text">First</div>
                                    </div>
                                    <div class="col-lg-3">
                                        <input type="text" name="Middle_8" id=""  class="border-0 border-bottom responsive_input">
                                        <div class="small_text">Middle</div>

                                    </div>
                                    <div class="col-lg-3 ">
                                        <div class="d-flex"><input type="text" name="Last_8" id=""  class="border-0 border-bottom responsive_input">.</div>
                                        <div class="small_text">Last</div>

                                    </div>
                                 </div>
                            </li>
                            <li>
                                 <div class="row">
                                    <div class="col-lg-3"> “The Respondent’s name is: </div>
                                    <div class="col-lg-3">
                                        <input type="text" name="First_9" id=""  class="border-0 border-bottom responsive_input">
                                        <div class="small_text">First</div>

                                    </div>
                                    <div class="col-lg-3">
                                        <input type="text" name="Middle_9" id=""  class="border-0 border-bottom responsive_input">
                                        <div class="small_text">Middle</div>

                                    </div>
                                    <div class="col-lg-3 ">
                                        <div class="d-flex"> <input type="text" name="Last_9" id=""  class="border-0 border-bottom responsive_input">.</div>
                                        <div class="small_text">Last</div>

                                    </div>
                                 </div>
                            </li>
                            <li>
                                <div>“I am the Petitioner in this case. I am an adult and of sound mind.</div>
                                <div>“I have personal knowledge of the facts stated in this affidavit.</div>
                                <div>“The facts stated in this affidavit are true and correct.</div>
                            </li>
                         </ol>
                         <div class="small_text">(Check all boxes that apply)</div>
                         <div class="pt-lg-3"><input type="checkbox" value="Yes" name="I know that the Respondent is not in the military because I asked the US Department of Defense" id=""> “I know that the Respondent is not in the military because I asked the U.S. Department of Defense to check their Defense Manpower Data Center (DMDC) database. DMDC notified me that the Respondent is not on active duty in any of the armed forces.</div>
                         <div class="pt-lg-3">“I attached a true copy of the DMDC verification.
                           <small> (If you check this box, you must attach a copy of the DMDC verification. You can print a copy of the DMDC verification from this web address: <a href="https://www.dmdc.osd.mil/appj/scra/scraHome.do"></a>.)</small></div>

                           <div class="pt-lg-3"><input type="checkbox" value="Yes" name="I know that the Respondent is not now in the military because" id=""> “I know that the Respondent is not now in the military because:
                            <small>(List facts that you know would make your spouse ineligible for military service, such as being in prison, having a serious disability, etc.)</small>
                            </div>



                   </div>

                   @include('layouts.footer28', ['page' => 1])
               </section>
                <section class="section_area p-5" id="twenty-seventh_section">
                    <div class="ps-lg-5">
                        <div><input type="text" name="1_3" id="" class="border-0 border-bottom responsive_input w-100"></div>
                        <div><input type="text" name="2_3" id="" class="border-0 border-bottom responsive_input w-100"></div>
                        <div><input type="text" name="1_4" id="" class="border-0 border-bottom responsive_input w-100"></div>
                        <div><input type="text" name="2_4" id="" class="border-0 border-bottom responsive_input w-100"></div>

                    </div>
                    <div><input type="checkbox" value="Yes" name="I do not know if the Respondent is in the military now" id=""> “I do not know if the Respondent is in the military now.</div>
                    <div><input type="checkbox" value="Yes" name="The Respondent is in the military now" id=""> “The Respondent is in the military now.</div>
                    <div class="fw-bold pt-lg-3">Do not sign until you are in front of a notary.</div>
                    <div class="row">
                        <div class="col-lg-8">
                            <input type="text" name="Signature of Person Signing Affidavit_3" id=""
                                class="border-0 border-bottom responsive_input w-75 ">
                            <div class="small_text">Signature of Person Signing Affidavit</div>
                        </div>
                        <div class="col-lg-2">
                            <input type="date" name="Date_10" id=""
                                class="border-0 border-bottom responsive_input w-100">
                            <div class="small_text">Date</div>
                        </div>
                    </div>
                    <div class="fw-bold">Notary fills out below.</div>
                        <div class="">State of Texas, County of <input type="text" name="Print the name of county where this Affidavit is notarized_2"
                                id="" class="border-0 border-bottom responsive_input w-50"></div>
                        <div class="p_sm_0" style="padding-left:170px;">(Print the name of county where this Affidavit is notarized)</div>
                        <div>Sworn to and subscribed before me, the undersigned notary, on this date:<input
                                type="text" name="month day" id=""
                                class="border-0 border-bottom responsive_input" style="width:50px;">/<input type="text" name="undefined_33"
                                id="" class="border-0 border-bottom responsive_input" style="width:50px;">/20<input
                                type="text" name="year" id=""
                                class="border-0 border-bottom responsive_input" style="width:50px;"> at
                               <input type="text"
                                name="time_2" id=""
                                class="border-0 border-bottom responsive_input ">a.m./p.m. </div>

                        <div class="small_text"><span class="p_sm_0" style="padding-left:595px;">month   </span > <span style="padding-left:15px;"> day</span> <span class="p_sm_0" style="padding-left:50px;">year</span> <span class="p_sm_0" style="padding-left:40px;">time</span><span class="p_sm_0" style="padding-left:170px;">(circle one)</span></div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="d-flex"> by <input type="text" name="Print name of person who is signing this Affidavit NOT the notarys name_2" id=""
                                        class="border-0 border-bottom responsive_input w-100"></div>
                                <div class="text-center small_text">(Print name of person who is signing this Affidavit. NOT the notary’s name.)</div>
                            </div>
                        </div>
                        <div class="row pb-lg-3">
                            <div class="col-lg-6"></div>
                            <div class="col-lg-6">
                                <div> <input type="text" name="Notary’s Signature_3" id=""
                                        class="border-0 border-bottom responsive_input w-100"></div>
                                <div class="small_text">Notary’s Signature</div>
                            </div>
                        </div>
                   @include('layouts.footer28', ['page' => 2])
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
            <option value="#eleventh_section">Eleventh Section</option>
            <option value="#twelfth_section">Twelfth Section</option>
            <option value="#thirteen_section">Thirteen Section</option>
            <option value="#fourteen_section">Fourteen Section</option>
            <option value="#fifteen_section">Fifteen Section</option>
            <option value="#sixteenth_section">Sixteenth Section</option>
            <option value="#seventeenth_section">Seventeenth Section</option>
            <option value="#eighteenth_section">Eighteenth Section</option>
            <option value="#nineteenth_section">Nineteenth Section</option>
            <option value="#twentieth_section">Twentieth Section</option>
            <option value="#twenty-one_section">twenty-one Section</option>
            <option value="#twenty-two_section">twenty-two Section</option>
            <option value="#twenty-three_section">Twenty-Three Section</option>
            <option value="#twenty-fourth_section">Twenty-Fourth Section</option>
            <option value="#twenty-fifth_section">Twenty-Fifth Section</option>
            <option value="#twenty-sixth_section">Twenty-Sixth Section</option>
            <option value="#twenty-seventh_section">Twenty-Seventh Section</option>
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
