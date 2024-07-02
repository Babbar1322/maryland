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
        .border_3{
            border-bottom : 3px solid black;
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
            <form action="{{ route('form24.submit') }}" method="post">
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
                    <div><b>This Divorce Set Contains </b><span class="small_text"> instructions and seven forms: an Affidavit of Indigency, an Original Petition for Divorce, a Waiver of Service, a Final Decree of Divorce, a Certificate of Last Known Address, a Notice of Change of Address, and an AffidavitofMilitaryStatus. The chart on the next page describes each form and when to use it.</span></div>
                    <div class="fw-bold">Do Not Use This Divorce Set if:</div>
                    <ul>
                        <li>You and your spouse disagree about any issue in your divorce.</li>
                        <li>You or your spouse wants to file specific grounds for divorce, such as cruelty or adultery. This Set provides for a
                            no-fault divorce, for example, you do not get along and do not plan to get back together.</li>
                            <li>The wife is pregnant, even if the husband is not the father.</li>
                            <li>The wife has had a child by another man since the date of marriage.</li>
                            <li>You and your spouse have a disabled child, regardless of that child’s age.</li>
                            <li>You and your spouse have a biological or adopted child together who is either under 18 years old or who is 18 years old and still in high school.</li>
                            <li>You or your spouse wants spousal support or maintenance, referred to as “alimony” in some states.</li>
                            <li>You or your spouse owns or is buying real property (such as a house, building, piece of land, or other real
                                estate).</li>
                            <li>You or your spouse has an ongoing bankruptcy case.</li>
                    </ul>
                    <div class="fw-bold">Use This Divorce Set if:</div>
                    <ul>
                        <li>Nothing in the above “Do Not Use This Divorce Set” section applies to you.</li>
                        <li>You think you and your spouse will agree on every issue in your divorce or you do not think your spouse will
                            participate in the divorce process.</li>
                        <li>You or your spouse has lived in Texas for at least 6 months and in the county where you are filing for divorce for
                            at least 90 days.
                            <ul>
                                <li><span class="border-bottom">Immigrants</span>: You may file for divorce in Texas even if you do not have legal status in the United States if
                                    you have lived in Texas and in your county for the above time periods.</li>
                                    <li><span class="border-bottom">Military Families</span>: If you are serving in the armed forces outside of Texas, or you have accompanied your
                                        spouse who is serving in the armed forces outside of Texas, you may still use these forms if Texas has been the home state for either spouse for at least 6 months and the county where you plan to file the divorce has been the home county of either spouse for at least 90 days.</li>
                            </ul>
                        </li>

                    </ul>

                    <div class="fw-bold">Need Help?</div>
                    <ul>
                        <li>It is always best to hire a lawyer. To get a referral to a lawyer or, if you are poor, to a free Legal Aid program, call the State Bar of Texas Lawyer Referral Information Service at 1-800-252-9690.</li>
                        <li>If you are a victim of domestic violence, or if at any time you feel unsafe, you can get confidential help from the National Domestic Violence Hotline at 1-800-799-7233 or legal help from the Texas Advocacy Project Family Violence Legal Line at 1-800-374-4673.</li>
                        <li>If you are poor, you may be able to talk to an attorney online by live chat at <a href="https://texaslawhelp.org/" target="_blank">www.TexasLawHelp.org.</a></li>
                    </ul>
                    <div class="fw-bold">Note on Retirement Funds (for example, pension, profit-sharing, and stock option plans, 401ks, and IRAs):</div>
                    <ul>
                        <li>If you use these forms to divide retirement funds, you will need to obtain an additional court order, usually called a “qualified domestic relations order” (QDRO), to make the division effective. A QDRO form is not included in this Divorce Set. It is recommended that you hire a lawyer to prepare a QDRO. If you and your spouse keep your own retirement funds or do not have any retirement funds, you do not need a QDRO.</li>
                    </ul>

                        @include('layouts.footer22', ['page' => 1])
                </section>

                <section class="section_area p-5" id="second_section">
                    <div>
                        <div class="fw-bold">Contents of Divorce Set 1 - Uncontested, No Minor Children, No Real Property:</div>
                        <div class="table-responsive">
                            <table class="table table-bordered border-dark">
                                <tbody>
                                    <tr>
                                        <th class="bg-secondary" style="width:200px;">Name of Form</th>
                                        <th class="bg-secondary">What It Is and How to Use It</th>
                                    </tr>
                                    <tr>
                                        <th>Affidavit of Indigency</th>
                                        <td>If you are poor, or on government benefits because you are poor, or you cannot pay court fees, you may fill out this form to ask the Court if you can file for divorce without paying the court and filing fees. The Court may ask you to present evidence of your income and expenses at a hearing. The Court may or may not decide to let you file without paying. It is sometimes called a “Pauper’s Oath” or an “Affidavit of Inability to Pay Costs.”</td>
                                    </tr>

                                    <tr>
                                        <th>Original Petition for Divorce</th>
                                        <td>This form must be filed at the courthouse to start your divorce case. It tells the Court and your spouse that you want a divorce and states what you want the Court to order in the Final Decree of Divorce. It is sometimes called the “Original Petition” or “Petition.”</td>
                                    </tr>

                                    <tr>
                                        <th>Waiver of Service</th>
                                        <td>This form may be filled out by your spouse, if he or she agrees to sign it. It tells the Court that your spouse has received a copy of the Original Petition for Divorce and does not want to be formally given a copy by a constable, sheriff, or process server. This form allows the judge to finalize your divorce as long as your spouse has signed the Final Decree of Divorce, and allows your spouse to be notified of any hearings in the case. Other Waiver of Service forms are not the same. Your spouse must sign the Waiver <span class="border-bottom"> in front of a notary.</span> The Waiver must be signed at least one day <span class="border-bottom">  after </span> the Original Petition for Divorce is filed.</td>
                                    </tr>

                                    <tr>
                                        <th>Final Decree of Divorce</th>
                                        <td>This form finalizes your divorce and states what the Court has ordered in your case. Fill it out and bring it to your final divorce hearing.</td>
                                    </tr>

                                    <tr>
                                        <th>Certificate of Last Known Address</th>
                                        <td>This form tells the Court what your spouse’s last known address is and is filled out only in certain situations. If a Waiver or an Answer (see below for definition) has not been filed and your spouse has not signed the Final Decree of Divorce, you must bring this form to the final divorce hearing.</td>
                                    </tr>

                                    <tr>
                                        <th>Notice of Change of Address</th>
                                        <td>This form <span class="border-bottom">must</span> be filed if you or your spouse moves. It tells the Court what the new address is so that the Court can contact you about hearings, etc.</td>
                                    </tr>
                                    <tr>
                                        <th>Affidavit of Military Status</th>
                                        <td>This form tells the Court whether or not your spouse is on active military duty. If a Waiver or an Answer (see below for definition) has not been filed and your spouse has not signed the Final Decree of Divorce, you must bring this form to the final divorce hearing.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="fw-bold pt-lg-3">Glossary:</div>
                        <div class="table-responsive">
                            <table class="table table-bordered border-dark">
                                <tr>
                                    <th class="bg-secondary">Term</th>
                                    <th class="bg-secondary">Definition</th>
                                </tr>

                                <tr>
                                    <th>Legal Notice</th>
                                    <td>Your spouse has a right to know, in writing, that you are filing for divorce. You cannot simply send your spouse a letter. You must use a legally acceptable way and prove to the Court that you did so. There are (3) ways to give legal notice: Waiver of Service, Official Service of Process, or by Posting or Publication. Each is described in Step 4 in these instructions.</td>
                                </tr>

                                <tr>
                                    <th>Official Service of Process</th>
                                    <td>Official service of process is when your spouse is formally “served” with (given) the Original Petition for Divorce by a constable, sheriff, or private process server, or when the clerk sends it by certified mail, return receipt requested. You must use official service of process if a Waiver of Service form has not been filed in your case. It is always best to officially serve your spouse if there has been domestic violence in the relationship or a Protective Order is in effect.</td>
                                </tr>

                                <tr>
                                    <th>Waiving Service of Process</th>
                                    <td>When your spouse tells the Court in writing that s/he has received a copy of the Original Petition for Divorce and does not want to be formally “served” with the Original Petition for Divorce, your spouse is “waiving service of process.”</td>
                                </tr>

                                <tr>
                                    <th>Answer</th>
                                    <td>If your spouse contests the divorce, your spouse may file an “answer” instead of signing the Waiver of Service. This Set has no answer form because it is for uncontested cases. However, you may still use this Set if your spouse signs the Final Decree of Divorce after filing an answer.</td>
                                </tr>

                                <tr>
                                    <th>Qualified Domestic Relations Order (QDRO)</th>
                                    <td>An additional court order that is necessary to complete the division of a retirement fund. A QDRO form is not included in this Divorce Set. It is recommended that you hire a lawyer to prepare a QDRO if you use these forms to divide retirement funds.</td>
                                </tr>

                            </table>
                        </div>
                    </div>

                        @include('layouts.footer22', ['page' => 2])
                </section>

                <section class="section_area p-5" id="third_section">
                    <div>
                        <div class="fw-bold h3">How to Use this Set:</div>
                        <div class="ps-lg-3">
                            <div class="fw-bold pt-lg-3">Step 1: Read These General Instructions</div>
                            <ul>
                                <li>Do not change the forms to include children, spousal support or maintenance (called “alimony” in some states), or real estate. This Set is NOT to be used for those situations.</li>
                                <li>Use blue ink to complete the forms. Pencil and other color ink will not scan clearly.</li>
                                <li>You must fill out all the spaces on the forms unless instructed otherwise. The judge and court personnel will not
                                    fill them out for you. The judge may require you to correct errors that you may make or may deny the divorce if
                                    the information is inaccurate or incomplete.</li>
                                <li>Make two copies of each form you complete. Keep one copy. The other copy is for your spouse.</li>
                                <li  class="overflow-auto">Find out where to file for divorce in your county at the TexasLawHelp.org website
                                    (<a href="https://texaslawhelp.org/TX/courts/" target="_blank">http://www.texaslawhelp.org/TX/courts/</a>) by answering the questions at the bottom of the page.  </li>
                            </ul>
                            <div class="fw-bold pt-lg-3">Step 2: Fill out the Original Petition for Divorce and, if you are poor, the Affidavit of Indigency</div>
                            <ul>
                                <li>Fill out the Original Petition for Divorce and sign it. You are the Petitioner. Your spouse is the Respondent.</li>
                                <li>If you are poor, are receiving public assistance, or do not think you have enough money to pay the court costs
                                    for your divorce, fill out the Affidavit of Indigency.</li>
                                <li>You will need to fill out a Civil Case Information Sheet form, which you can get at the courthouse.</li>
                                <li>Make two copies of the Original Petition for Divorce and, if you are using it, the Affidavit of Indigency.</li>
                            </ul>
                            <div class="fw-bold pt-lg-3">Step 3: File (turn in) your Original Petition for Divorce, and if applicable, your Affidavit of Indigency</div>
                            <ul>
                                <li>Take the original and the two copies of your Original Petition for Divorce and your Affidavit of Indigency, if applicable, to the courthouse and file them (turn them in) with the District or County Court at Law Clerk.
                                    <ul>
                                        <li>NOTE: If you are using an Affidavit of Indigency, you must sign it span <span class="border-dark"> in front of a notary </span> and you must file the Original Petition for Divorce and the Affidavit of Indigen <span class="border-dark"> at the same time</span>.</li>
                                    </ul>
                                 </li>
                                <li> Ask the clerk:
                                    <ul>
                                        <li>If there is a local standing order that you need to follow or attach to any of your     documents.    </li>
                                        <li>If there are local rules that you need to know about for your divorce case.</li>
                                        <li>For a Civil Case Information Sheet. Fill it out and file it with your Original Petition for Divorce.</li>
                                        <li>For an Information on Suit Affecting the Family Relationship form, also called a BVS or Bureau of Vital
                                            Statistics form. It changes state records about your marital status, etc. Fill it out and file it with your
                                            Original Petition for Divorce.</li>
                                            <li>To “file-stamp” your copies. The clerk will stamp your papers with the date and time you turned them
                                                in. The clerk will keep the original and give you back your file-stamped copies.</li>
                                    </ul>
                                </li>
                                <li>If you are not filing an Affidavit of Indigency, you will need to pay a filing fee. The fee may be between $150-
                                    $300, depending on where you live.</li>
                                    <li> The clerk will ask you if you want to have your spouse “served” with the papers. See Step 4 for an explanation.</li>
                            </ul>
                            <div class="  pt-lg-3"><b>Step 4: Give Your Spouse “ Legal Notice ” that You Have Filed for Divorce.</b>(<small>See definitio non page2</small>)</div>
                            <ul>
                                <li>There are three ways to give legal notice for this Set. Choose the one method that best fits your situation:</li>
                            </ul>
                        </div>

                    </div>

                        @include('layouts.footer22', ['page' => 3])
                </section>

                <section class="section_area p-5" id="fourth_section">
                    <div>
                        <div>1. <b>By Waiver of Service.</b> If your spouse agrees to fill out the Waiver of Service form in this Set, you do not need to have your spouse served by Official Service of Process. Follow the steps below to use the Waiver of Service.</div>
                        <ul>
                            <li>Mail or hand-delivera “file-stamped” copy of the Original Petition for Divorce and a blank Waiver of Service form to your spouse <b>WARNING: Do not hand-deliver these papers if there has been domestic violence in the relationship,</b> especially if a judge has signed a Protective Order ordering you or your spouse to stay away from the other. Mail or give legal notice by official service of process instead.</li>
                            <li>Tell yours pouse to sign the Waiver in <span class="border-bottom"> front of a notary </span> public at least <span class="border-bottom"> one day after</span> you filed the Original Petition for Divorce. Otherwise, your spouse will have to redo it.</li>
                            <li>You or yours pouse must file (turnin) the Waiver where you filed your Original Petition for Divorce.</li>
                        </ul>
                        <div>2. <b>By Official Service of Process</b>. This method must be used in certain situations, described in the Glossary chart on page 2. Follow the steps below to use Official Service of Process.</div>
                        <ul>
                        <li>Tell the clerk where you filed your Original Petition for Divorce that you need to “serve” your spouse with the Original Petition for Divorce. There will be a fee for this service.</li>
                        <li>Tell the clerk if you want a constable ,sheriff ,or private process server to handle service of process or if you want the clerk to handle it by certified mail, return receipt requested.
                            <ul>
                                <li>If a constable, sheriff or private process server handles it, they will complete a Return of Service form stating where and when your spouse was served. This form is proof to the Court that you gave your spouse legal notice. They may file the Return of Service at the courthouse or give it to you. If they give it to you, make a copy and file the original.</li>
                                <li>If the clerk handles it, the return receipt (or, “green card”) is proof to the Court that you gave your spouse legal notice. The return receipt must be signed by your spouse, so only use this option if you know that your spouse is the only person who will sign for the letter when the mailman delivers it.</li>
                            </ul>
                        </li>
                        <li>Check to make sure the Return of Service or the return receipt is filed (turned in) to the court where you filed your Original Petition for Divorce, at least 12 days before your final hearing.</li>
                    </ul>
                    <div>3. <b>By Posting or Publication.</b> If you do not know where your spouse is, you will need to give legal notice by posting (posting the paperwork at the courthouse) or by publication (publishing legal notice in the newspaper).</div>
                        <ul>
                                 <ul>
                            <li>Go to <a href="https://texaslawhelp.org/" target="_blank">www.TexasLawHelp.org</a> and look at the Legal Notice, Service by Posting, and Service by Publication Sets for more details.</li>
                        </ul>
                        <li>
                            If you change anything in the Original Petition for Divorce after giving your spouse legal notice, you must give your spouse a copy of the Amended (changed) Original Petition for Divorce and file it with the court. You can give your spouse a copy by using the methods listed above, or you can use any method allowed under Texas Rule of Civil Procedure 21a, which is available online and may be available at the court. If you use a method allowed under Texas Rule of Civil Procedure 21a, the Amended (changed) Original Petition that you file with the court must include a signed statement showing you complied with the rule.
                        </li>

                        </ul>
                        <div class="fw-bold pt-lg-3">Step 5. Complete Final Forms and Prepare for Court.</div>
                        <ul>
                            <li>Fill out the Final Decree of Divorce form and sign it. If your spouse has filed an Answer or a Waiver, your spouse <span class="border-bottom">must</span> sign the Final Decree of Divorce.</li>
                        </ul>

                    </div>

                        @include('layouts.footer22', ['page' => 4])
                </section>
                <section class="section_area p-5" id="fifth_section">
                    <div>
                        <ul>
                            <ul>
                                <li> NOTE: A creditor’s right to collect on a debt is not affected by a divorce decree. So, if the Court orders your spouse to pay a specific debt from the marriage and your spouse does not pay it, the creditor can still seek payment from you.</li>
                            </ul>
                            <li>If a Waiver or an Answer has not been filed, you must fill out the Certificate of Last Known Address form and the Military Status Affidavit form. Make two copies.</li>
                            <li>Prepare for Court.
                                <ul>
                                    <li>You will need to give testimony when talking to the judge. Some judges will ask you questions, others
                                        want you to read a “script” of testimony. You can find sample “prove up” testimony online
                                        at <a href="https://texaslawhelp.org/"> www.TexasLawHelp.org.</a></li>
                                        <li>Learn tips on what to do when you go to court and when the judgecal ls your case on line at <a href="https://texaslawhelp.org/">www.TexasLawHelp.org.</a></li>
                                </ul>
                            </li>
                        </ul>
                        <div class="fw-bold pt-lg-3">Step 6. Go to Court and Present Your Divorce Case to the Judge</div>
                        <ul>
                            <li>After 61 days have passed since you filed the Original Petition for Divorce, you may finalize your divorce.</li>
                            <ul>
                                <li>Victims of domestic violence may be able to finalize a divorce earlier. Call 1-800-374-4673 to get advice
                                    from an attorney at no charge.</li>
                            </ul>
                            <li>Ask the clerk or court coordinator when uncontested divorce cases are heard and bring the following to court
                                with you on that day:
                            <ul>
                                <div class="row">
                                    <div class="col-lg-6 border-end border-dark pb-lg-5">
                                        <div class="fw-bold">If your spouse has signed the Final Decree of Divorce, bring:</div>
                                        <ol>
                                            <li>A file-stamped copy of your Original Petition for Divorce;</li>
                                            <li>Your completed Final Decree of Divorce form, signed by you and your spouse; and</li>
                                            <li>The Waiver of Service signed by your spouse (if not already filed) or a file-stamped copy of the Return of Service(if a Waiver or Answer has not been filed).</li>
                                        </ol>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="fw-bold">If your spouse has not signed the Final Decree of Divorce or filed a Waiver or an Answer, bring:</div>
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
                                    <li>Ask if you need the court file, a docket sheet (list of what has been filed ), or any thing else from their
                                        office to bring with you to court.</li>
                                    <li>If a Waiver or an Answer has not been filed, you need to file the Certificate of Last Known Address and
                                        the Military Status Affidavit in the clerk’s office <span class="border-bottom">before</span> you go to court, then bring a file-stamped copy of each with you to court.</li>
                                </ul>
                            </li>
                        </ul>
                        <div class="fw-bold pt-lg-3">Step 7. Finalize Your Divorce</div>
                        <ul>
                            <li>Once the judge has signed your Final Decree of Divorce, take it to the clerk’s office and file it. Your divorce is NOT final until you do so.</li>
                            <li>Turn in the Information on Suit Affecting the Family Relationship form (a BVS, or Bureau of Vital Statistics form) if you did not turn it in when you filed your Original Petition for Divorce.</li>
                        </ul>
                    </div>
                        @include('layouts.footer22', ['page' => 5])
                </section>
                <section class="section_area p-5" id="sixth_section">
                    <div>


                         <ul>
                            <li>Get a certified copy of your Final Decree of Divorce from the clerk while you are there. You will need one if you are changing your name or dealing with creditors and may need one for other circumstances. Theclerkmay charge a fee for the certified copy.</li>
                            <li>NOTES:
                                <ul>
                                    <li>You cannot get married to someone else until 30 days after your Final Decree of Divorce is signed.</li>
                                    <li>After your divorce is final, remember to sign documents to get car titles changed; revise your will;
                                        change beneficiaries on your life insurance policies, retirement plans, bank accounts, etc; prepare and submit a QDRO if you use these forms to divide retirements funds.</li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div style="padding-bottom:400px;"></div>
                        @include('layouts.footer22', ['page' => 6])
                </section>
                <section class="section_area p-5" id="seventh_section">
                    <div>

                        <div class="border border-dark p-2"><b>WARNING</b>: Without the advice and help of an attorney, you may be putting yourself, your personal property, and your money at risk. To get a referral to an attorney, call the State Bar of Texas Lawyer Referral Information Service at 1-800-252-9690. If you are a victim of domestic violence, or if at any time you feel unsafe, you can get confidential help from the National Domestic Violence Hotline at 1-800-799-7233 or legal help from the Texas Advocacy Project Family Violence Legal Line at 1-800-374-4673.</div>
                        <div>Print your answers in blue ink)</div>
                        <div class="text-center">Cause Number: <input type="text" name="" id="" class="border-0 border-bottom responsive_input w-50"></div>
                        <div class="small_text text-center">The Clerk’s office will fill in the Cause Number when you file this form)</div>
                        <div class="pt-lg-2 fw-bold">IN THE MATTER OF THE MARRIAGE OF</div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div>Petitioner:<input type="text" name="" class="border-0 border-bottom responsive_input w-75 ms-lg-3"></div>
                                <div class="small_text text-end me-lg-5">(Print first, middle, and last name of the spouse filing for divorce)</div>
                                <div class="text-center fw-bold">And</div>
                                <div>Respondent:<input type="text" name="" class="border-0 border-bottom responsive_input w-75 ms-lg-3"></div>
                                <div class="small_text text-end me-lg-5">(Print first, middle, and last name of other spouse)</div>
                            </div>
                            <div class="col-lg-6">
                                <div>In the (check one):</div>
                                <div><input type="text" name="" class="border-0 border-bottom responsive_input "><input type="radio" name="" class=" me-lg-1">District Court  <input type="radio" name="" class=" mx-lg-1">    County Court at Law of:</div>
                                <div class="small_text">(Court Number)</div>
                                <div><input type="text" name="" class="border-0 border-bottom responsive_input w-75">County, Texas</div>
                                <div class="small_text">(County)</div>

                            </div>
                        </div>
                        <div class="h4 fw-bold pt-lg-3 text-center">Affidavit of Indigency</div>
                        <div class="h4 fw-bold  text-center">(Divorce Set 1 - Uncontested, No Minor Children, No Real Property)</div>
                        <div class="pt-1 border border-dark p-1 mx-4"> <span class="pe-3 fw-bold">WARNING:</span> Read all of the Instructions for Divorce Set 1 before filling out this form.</div>

                        <div class="fw-bold">The person who signed this affidavit appeared, in person, before me, the undersigned notary, and stated under oath:</div>
                        <div>“My name is <input type="text" name="" id="" class="border-0 border-bottom responsive_input w-50"> My phone number is:  <input type="text" name="" id="" class="border-0 border-bottom responsive_input w-25"></div>
                        <div>“My mailing address is:<input type="text" name="" id="" class="border-0 border-bottom responsive_input w-75"> </div>
                        <div>“I am above the age of eighteen (18) years, and I am fully competent to make this affidavit. I am unable to pay court costs. The nature and amount of my income, resources, debts, and expenses are described in this form.</div>
                        <div class="">Check ALL boxes that apply and fill in the blanks describing the amounts and sources of your income.</div>
                        <div>“I receive these public benefits/government entitlements that are based on indigency: <span class="mx-lg-3"><input type="checkbox" name=""> SSI</span>    <span class="ms-lg-3"><input type="checkbox" name=""> WIC</span>      <span class="ms-lg-3"><input type="checkbox" name=""> Food stamps/SNAP</span>    <span class="ms-lg-3"><input type="checkbox" name=""> TANF</span>    <span class="ms-lg-3"><input type="checkbox" name=""> Medicaid</span>    <span class="ms-lg-3"><input type="checkbox" name=""> CHIP</span>    <span class="ms-lg-3"><input type="checkbox" name=""> Needs-based VA Pension</span>       <span class="ms-lg-3"><input type="checkbox" name=""> County Assistance, County Health Care, or General Assistance (GA)</span>     <span class="ms-lg-3"><input type="checkbox" name=""> Community Care via DADS</span>      <span class="ms-lg-3"><input type="checkbox" name=""> AABD</span>      <span class="ms-lg-3"><input type="checkbox" name=""> Public Housing</span>         <span class="ms-lg-3"><input type="checkbox" name=""> Low-Income Energy Assistance</span>       <span class="ms-lg-3"><input type="checkbox" name=""> LIS in Medicare ("Extra Help")</span>        <span class="ms-lg-3"><input type="checkbox" name=""> Emergency Assistance</span>              <span class="ms-lg-3"><input type="checkbox" name=""> Child Care Assistance under Child Care and Development Block Grant</span>             <span class="ms-lg-3"><input type="checkbox" name=""> Other: <input type="text" name="" class="border-0 border-bottom responsive_input w-25"> </span></div>

                        <div class="py-lg-2">If you receive any of the above public benefits, you may attach proof to this form and label it “Exhibit: Proof of Public Benefits.”</div>
                        <div><input type="checkbox" name="" id=""> Unemployed since: <input type="text" name="" id="" class="border-0 border-bottom responsive_input"></div>
                        <small class="me-lg-5">-or-</small>

                        <small class="ms-lg-5">Date</small>
                        <div><input type="checkbox" name="" id=""> Wages: I work as a <input type="text" name="" id="" class="border-0 border-bottom responsive_input"> for<input type="text" name="" id="" class="border-0 border-bottom responsive_input"></div>
                        <small class="ms-lg-5">Your Job Title</small>

                        <div>
                             <span class="ms-lg-1"><input type="checkbox" name="" id=""> Child/spousal support </span>
                             <span class="ms-lg-1"><input type="checkbox" name="" id=""> My spouse’s income or income from another member of my household (if available) </span>
                             <span class="ms-lg-1"><input type="checkbox" name="" id=""> Tips, bonuses </span>
                             <span class="ms-lg-1"><input type="checkbox" name="" id=""> Military Housing </span>
                             <span class="ms-lg-1"><input type="checkbox" name="" id=""> Worker’s Comp </span>
                             <span class="ms-lg-1"><input type="checkbox" name="" id=""> Disability </span>
                             <span class="ms-lg-1"><input type="checkbox" name="" id=""> Unemployment </span>
                             <span class="ms-lg-1"><input type="checkbox" name="" id=""> Social Security </span>
                             <span class="ms-lg-1"><input type="checkbox" name="" id=""> Retirement/Pension </span>
                             <span class="ms-lg-1"><input type="checkbox" name="" id=""> Dividends, interest, royalties </span>
                             <span class="ms-lg-1"><input type="checkbox" name="" id=""> 2 <sup>nd</sup> job or other income <input type="text" name="" class="border-0 border-bottom responsive_input" id=""> </span>
                            </div>

                            <div class="pt-lg-2">“My income amounts are stated below.</div>
                            <div class="d-flex justify-content-between d_sm_block">
                                <div>(A) My monthly take-home wages:</div>
                                <div class="d-flex">
                                    <small>  Total amount received →</small>
                                    <div class="d-flex border border-dark ms-lg-3"><span>$</span> <input type="text" name="" id="" class="border-0 border-bottom"></div>
                                </div>
                            </div>


                            <div class="d-flex justify-content-between d_sm_block">
                                <div>(B) The amount I receive each month in public benefits is:</div>
                                <div class="d-flex">
                                    <small>  Total amount received →</small>
                                    <div class="d-flex border border-dark ms-lg-3"><span>$</span> <input type="text" name="" id="" class="border-0 border-bottom"></div>
                                </div>
                            </div>


                            <div class="d-flex justify-content-between d_sm_block">
                                <div>(C) The amount of income from other people in my household:</div>
                                <div class="d-flex">
                                    <small>  Total amount received →</small>
                                    <div class="d-flex border border-dark ms-lg-3"><span>$</span> <input type="text" name="" id="" class="border-0 border-bottom"></div>
                                </div>
                            </div>
                            <div class="small_text">(list this income only if other members contribute to your household income )</div>

                            <div class="d-flex justify-content-between d_sm_block">
                                <div>(D) The amount I receive each month from other sources is:</div>
                                <div class="d-flex">
                                    <small>  Total amount received → </small>
                                    <div class="d-flex border border-dark ms-lg-3"><span>$</span> <input type="text" name="" id="" class="border-0 border-bottom"></div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between d_sm_block">
                                <div>(E) My TOTAL monthly income</div>
                                <div class="d-flex">
                                    <small>  Add all sources of income above →</small>
                                    <div class="d-flex border border-dark ms-lg-3"><span>$</span> <input type="text" name="" id="" class="border-0 border-bottom"></div>
                                </div>
                            </div>
                    </div>

                         @include('layouts.footer22', ['page' => 7])
                </section>

                <section class="section_area p-5" id="eighth_section">
                    <div class="small_text">
                        <div>About my <b>dependents</b>:</div>
                        <div>“The people who depend on me financially are listed below:</div>
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="ps-lg-4">Name</div>
                                <div class="d-flex">1.<input type="text" name="" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                <div class="d-flex">2.<input type="text" name="" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                <div class="d-flex">3.<input type="text" name="" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                <div class="d-flex">4.<input type="text" name="" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                <div class="d-flex">5.<input type="text" name="" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                <div class="d-flex">6.<input type="text" name="" id="" class="border-0 border-bottom responsive_input w-100"></div>
                            </div>
                            <div class="col-lg-2">
                                <div class="text-center">Age</div>
                                <div class=""><input type="text" name="" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                <div class=""><input type="text" name="" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                <div class=""><input type="text" name="" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                <div class=""><input type="text" name="" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                <div class=""><input type="text" name="" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                <div class=""><input type="text" name="" id="" class="border-0 border-bottom responsive_input w-100"></div>

                            </div>
                            <div class="col-lg-3">
                                <div class="text-center">Relationship to Me</div>
                                <div class=""><input type="text" name="" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                <div class=""><input type="text" name="" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                <div class=""><input type="text" name="" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                <div class=""><input type="text" name="" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                <div class=""><input type="text" name="" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                <div class=""><input type="text" name="" id="" class="border-0 border-bottom responsive_input w-100"></div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div>“My property includes:</div>
                                <div>Cash</div>
                                <div>Bank accounts, other financial assets</div>
                                <div><input type="text" name="" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                <div><input type="text" name="" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                <div><input type="text" name="" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                <div>Vehicles (cars, boats) </div>
                                <div><input type="text" name="" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                <div><input type="text" name="" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                <div><input type="text" name="" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                <div>Other property (like jewelry, stocks, etc.) </div>
                                <div><input type="text" name="" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                <div><input type="text" name="" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                <div><input type="text" name="" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                <div class="fw-bold mt-lg-3">Total value of property →</div>
                            </div>
                            <div class="col-lg-2">
                                <div>Value*</div>
                                <div class="d-flex">$ <input type="text" name="" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                <div> (List)</div>
                                <div class="d-flex">$ <input type="text" name="" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                <div class="d-flex">$ <input type="text" name="" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                <div class="d-flex">$ <input type="text" name="" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                <div>(List make and year)</div>
                                <div class="d-flex">$ <input type="text" name="" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                <div class="d-flex">$ <input type="text" name="" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                <div class="d-flex">$ <input type="text" name="" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                <div>(Describe)</div>
                                <div class="d-flex">$ <input type="text" name="" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                <div class="d-flex">$ <input type="text" name="" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                <div class="d-flex">$ <input type="text" name="" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                <div class="d-flex p-1 border border-dark border-3 mt-lg-3">=$ <input type="text" name="" id="" class="border-0 border-bottom responsive_input w-100"></div>
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
                                <div class="fw-bold mt-lg-3">Total Monthly Expenses → </div>

                             </div>
                            <div class="col-lg-2">
                                <div>Amount</div>
                                <div class="d-flex">$ <input type="text" name="" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                <div class="d-flex">$ <input type="text" name="" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                <div class="d-flex">$ <input type="text" name="" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                <div class="d-flex">$ <input type="text" name="" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                <div class="d-flex">$ <input type="text" name="" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                <div class="d-flex">$ <input type="text" name="" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                <div class="d-flex">$ <input type="text" name="" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                <div class="d-flex">$ <input type="text" name="" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                <div class="d-flex">$ <input type="text" name="" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                <div class="d-flex">$ <input type="text" name="" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                <div class="d-flex">$ <input type="text" name="" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                <div class="d-flex p-1 border border-dark border-3 mt-lg-3">=$ <input type="text" name="" id="" class="border-0 border-bottom responsive_input w-100"></div>


                            </div>
                        </div>
                        <div>*The value is the amount the item would sell for less the amount you still owe on it, if anything.</div>

                        <div class="pt-lg-3">“My <b>debts</b> include: (List debt and amount owed)</div>
                        <div><input type="text" name="" id="" class="border-0 border-bottom responsive_input w-100"></div>
                        <div><input type="text" name="" id="" class="border-0 border-bottom responsive_input w-100"></div>
                        <div><input type="text" name="" id="" class="border-0 border-bottom responsive_input w-100"></div>
                        <div class="fw-bold">“I am unable to pay court costs. I verify that the statements made in this affidavit are true and correct.”</div>
                        <div>To list any other facts you want the court to know, such as unusual medical expenses, family emergencies, etc., attach another page to this form and label it “Exhibit: Additional Supporting Facts.” Check here if you attach another page.
                            <input type="checkbox" name="" id="">
                        </div>
                        <div class="fw-bold">Do not sign until you are in front of a notary.</div>
                        <div class="row">
                            <div class="col-lg-8">
                                <input type="text" name="" id="" class="border-0 border-bottom responsive_input w-100">
                                <div class="small_text">Signature of Person Signing Affidavit</div>
                            </div>
                            <div class="col-lg-2">
                                <input type="date" name="" id="" class="border-0 border-bottom responsive_input w-100">
                                <div class="small_text">Date</div>
                            </div>
                        </div>
                        <div class="fw-bold">Notary fills out below.</div>
                        <div class="">State of Texas, County of  <input type="text" name="" id="" class="border-0 border-bottom responsive_input w-50"></div>
                        <small>(Print the name of county where this Affidavit is notarized)</small>
                        <div>Sworn to and subscribed before me, the undersigned notary, on this date:<input type="text" name="" id="" class="border-0 border-bottom responsive_input">/<input type="text" name="" id="" class="border-0 border-bottom responsive_input">/20<input type="text" name="" id="" class="border-0 border-bottom responsive_input"> at <input type="text" name="" id="" class="border-0 border-bottom responsive_input ">a.m./p.m. </div>
                        <small>month day year time (circle one)</small>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="d-flex"> by <input type="text" name="" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                <div>(Print name of person who is signing this Affidavit. NOT the notary’s name.)</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6"></div>
                            <div class="col-lg-6">
                                <div>  <input type="text" name="" id="" class="border-0 border-bottom responsive_input w-100"></div>
                                <div>Notary’s Signature</div>
                            </div>
                        </div>
                    </div>
                         @include('layouts.footer22', ['page' => 8])
                </section>
                <section class="section_area p-5" id="ninth_section">
                    <div class="border border-dark p-2"><b>WARNING</b>: Without the advice and help of an attorney, you may be putting yourself, your personal property, and your money at risk. To get a referral to an attorney, call the State Bar of Texas Lawyer Referral Information Service at 1-800-252-9690. If you are a victim of domestic violence, or if at any time you feel unsafe, you can get confidential help from the National Domestic Violence Hotline at 1-800-799-7233 or legal help from the Texas Advocacy Project Family Violence Legal Line at 1-800-374-4673.</div>
                    <div>Print your answers in blue ink)</div>
                    <div class="text-center">Cause Number: <input type="text" name="" id="" class="border-0 border-bottom responsive_input w-50"></div>
                    <div class="small_text text-center">The Clerk’s office will fill in the Cause Number when you file this form)</div>
                    <div class="pt-lg-2 fw-bold">IN THE MATTER OF THE MARRIAGE OF</div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div>Petitioner:<input type="text" name="" class="border-0 border-bottom responsive_input w-75 ms-lg-3"></div>
                            <div class="small_text text-end me-lg-5">(Print first, middle, and last name of the spouse filing for divorce)</div>
                            <div class="text-center fw-bold">And</div>
                            <div>Respondent:<input type="text" name="" class="border-0 border-bottom responsive_input w-75 ms-lg-3"></div>
                            <div class="small_text text-end me-lg-5">(Print first, middle, and last name of other spouse)</div>
                        </div>
                        <div class="col-lg-6">
                            <div>In the (check one):</div>
                            <div><input type="text" name="" class="border-0 border-bottom responsive_input "><input type="radio" name="" class=" me-lg-1">District Court  <input type="radio" name="" class=" mx-lg-1">    County Court at Law of:</div>
                            <div class="small_text">(Court Number)</div>
                            <div><input type="text" name="" class="border-0 border-bottom responsive_input w-75">County, Texas</div>
                            <div class="small_text">(County)</div>

                        </div>
                    </div>
                    <div class="h4 fw-bold pt-lg-3 text-center">Affidavit of Indigency</div>
                    <div class="h4 fw-bold  text-center">(Divorce Set 1 - Uncontested, No Minor Children, No Real Property)</div>
                    <div class="pt-1 border border-dark p-1 mx-4"> <span class="pe-3 fw-bold">WARNING:</span> Read all of the Instructions for Divorce Set 1 before filling out this form.</div>
                    <div class="pt-lg-2 fw-bold">1. Parties</div>
                    <div class="fw-bold  ps-lg-3">Petitioner</div>
                    <div class="ps-lg-3">
                        <div class="ps-lg-3 small_text">
                        <div>My name is: <input type="text" name="" id="" class="border-0 border-bottom responsive_input"> <input type="text" name="" id="" class="border-0 border-bottom responsive_input"> <input type="text" name="" id="" class="border-0 border-bottom responsive_input"></div>
                        <div>First Middle
                            Last</div>
                            <div>The last three numbers of my driver’s license number are: <input type="text" name="" id="" class="border-0 border-bottom responsive_input">  <input type="text" name="" id="" class="border-0 border-bottom responsive_input">  <input type="text" name="" id="" class="border-0 border-bottom responsive_input">       . My driver’s license was issued in <input type="text" name="" id="" class="border-0 border-bottom responsive_input"> .
                            <small>State</small></div>
                            <div class="py-2  ps-lg-4 "><b>Or</b> <input type="checkbox" name="" id=""> I do not have a driver’s license number.</div>
                            <div>The last three numbers of my social security number are: <input type="text" name="" id="" class="border-0 border-bottom responsive_input">  <input type="text" name="" id="" class="border-0 border-bottom responsive_input">  <input type="text" name="" id="" class="border-0 border-bottom responsive_input">       .</div>
                            <div class="py-2  ps-lg-4 "><b>Or</b> <input type="checkbox" name="" id=""> I do not have a social security number.</div>
                        </div>
                            <div class="fw-bold">Respondent</div>
                            <div class="ps-lg-3 small_text">My spouse’s name is: <input type="text" name="" id="" class="border-0 border-bottom responsive_input"> <input type="text" name="" id="" class="border-0 border-bottom responsive_input"> <input type="text" name="" id="" class="border-0 border-bottom responsive_input"></div>
                            <div class="ps-lg-3">First  Middle Last</div>

                            </div>
                            <div class="fw-bold">2. Discovery</div>
                            <div class="ps-lg-3 small_text">The discovery level in this case is Level 2.</div>
                            <div class="fw-bold">3. LegalNotice</div>
                            <div class="ps-lg-3 small_text">
                                <small>(Check one box)</small>
                                <div><input type="checkbox" name="" id=""> I do not think my spouse will sign a Waiver of Service. I will have a sheriff, constable, process server, or the clerk serve my spouse with this Original Petition at this address:</div>
                                <div><input type="text" name="" id="" class="border-0 border-bottom responsive_input"> <input type="text" name="" id="" class="border-0 border-bottom responsive_input"> <input type="text" name="" id="" class="border-0 border-bottom responsive_input"> <input type="text" name="" id="" class="border-0 border-bottom responsive_input"></div>
                                <div>Street Address City State Zip</div>
                                <div>If this is a work address, name of business: <input type="text" name="" id="" class="border-0 border-bottom responsive_input"></div>
                                <div class="py-2">I ask the clerk to issue a Citation of Service (the form necessary to provide legal notice to my spouse). I understand that I will need to  <b>pay the fee </b> (or file an Affidavit of Indigency form to show the Court that I am unable to pay the fee) and  <b>arrange for service</b>.</div>
                            </div>


                         @include('layouts.footer22', ['page' => 9])
                </section>
                <section class="section_area p-5" id="tenth_section">

                    <div class="small_text">
                        <div class="ps-lg-3">

                            <input type="checkbox" name="" id=""> I think my spouse will sign a Waiver of Service. Do not send a sheriff, constable, or process server to serve my spouse with this Original Petition.
                            <div>If my spouse does not sign a Waiver of Service, I will ask a sheriff, constable, process server, or the clerk to serve my spouse with this Original Petition at this address:</div>
                            <div> <input type="text" name="" id="" class="border-0 border-bottom responsive_input"> <input type="text" name="" id="" class="border-0 border-bottom responsive_input"> <input type="text" name="" id="" class="border-0 border-bottom responsive_input"> <input type="text" name="" id="" class="border-0 border-bottom responsive_input">.</div>
                            <div>Street Address City State  Zip</div>
                            <div>If this is a work address, name of business: <input type="text" name="" id="" class="border-0 border-bottom responsive_input">.</div>
                            <div>Name of business</div>
                            <div class="py-3">IwillasktheclerktoissuetheCitationofService (theformnecessarytoprovidelegalnoticeto my spouse). I understand that I will need to <b>pay the fee </b>(or file an Affidavit of Indigency form to show the Court that I am unable to pay the fee) and <b>arrange for service</b>.</div>
                        </div>
                    </div>
                    <div class="fw-bold">4. Jurisdiction</div>
                    <div class="ps-lg-3 small_text">
                        <div>County of Residence: (<small>Check all boxes that apply</small>)</div>
                        <div class="ps-lg-3">
                            <div> <input type="checkbox" name="" id=""> I have lived in this county for the last 90 days.</div>
                            <div> <input type="checkbox" name="" id=""> My spouse has lived in this county for the last 90 days.</div>
                            <div> <input type="checkbox" name="" id=""> I am serving in the armed forces outside of Texas, but this county has been the home county of either my spouse or me for at least 90 days.</div>
                            <div> <input type="checkbox" name="" id=""> I have accompanied my spouse who is serving in the armed forces outside of Texas, but this county has been the home county of either my spouse or me for at least 90 days.</div>
                            <div> <input type="checkbox" name="" id=""> None of the above apply.</div>
                        </div>
                        <div>State of Residence: ( <small>Check all boxes that apply</small> )</div>
                        <div class="ps-lg-3">
                            <div> <input type="checkbox" name="" id=""> I have lived in Texas for the last six months.</div>
                            <div> <input type="checkbox" name="" id=""> My spouse has lived in Texas for the last six months.</div>
                            <div> <input type="checkbox" name="" id=""> My spouse does not reside in Texas but Texas is the last state where we lived together as a married couple. This petition is filed less than two years after we separated.</div>
                            <div> <input type="checkbox" name="" id=""> I am serving in the armed forces outside of Texas, but Texas is the home state of either my spouse or me and has been for at least six months.</div>
                            <div> <input type="checkbox" name="" id=""> I have accompanied my spouse who is serving in the armed forces outside of Texas, but Texas is the home state of either my spouse or me and has been for at least six months.</div>
                            <div> <input type="checkbox" name="" id=""> None of the above apply.</div>
                        </div>
                    </div>
                    <div class="fw-bold">5. ProtectiveOrderStatement</div>
                    <div class="ps-lg-3 small_text">(Select Option A, B, or C and check the appropriate box(es).)</div>
                    <div class="ps-lg-3">
                        <div class="fw-bold">A. NoProtectiveOrder–</div>
                        <div class="ps-lg-3">
                            <div><input type="checkbox" name="" id=""> I do not have a Protective Order against my spouse and I have not asked for one.</div>
                            <div>AND</div>
                            <div><input type="checkbox" name="" id=""> My spouse does not have a Protective Order against me and has not asked for one.</div>
                        </div>
                        <div class="fw-bold pt-lg-3">B. PendingProtectiveOrder–
                            <div class="ps-lg-3 small_text">
                                <div><input type="checkbox" name="" id=""> I have filed paperwork asking for a Protective Order against my spouse, but a judge has not
                                    decided if I should get it. I asked for a Protective Order on <input type="text" name="" id="" class="border-0 border-bottom responsive_input"> in</div>
                                    <div>Date Filed</div>
                            </div>
                    </div>

                    </div>


                         @include('layouts.footer22', ['page' => 10])
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
