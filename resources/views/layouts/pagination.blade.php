<style>
    .break-spaces {
    white-space: break-spaces !important;
}
</style>
<div class="d-flex gap-3 py-auto pb-2  ">
    <div class="my-auto"> <a href="{{ route('pdf_form1') }}">
        <i class="fas fa-chevron-left text-dark"></i><i class="fas fa-chevron-left text-dark"></i></a>
    </div>
        @if($page > 1)
            @php
                $nextPage = $page - 1;
                $routeName = "pdf_form{$nextPage}";
            @endphp
            <a href="{{ route($routeName) }}" class="text-dark ps-2 my-auto">   <i class="fas fa-chevron-left"></i> </a>
        @endif

    <div class="dropdown">
        <button class="btn border dropdown-toggle" type="button"
            id="pagination_dropdown" data-bs-toggle="dropdown" aria-expanded="false">
           {{$page}}
        </button>
        <ul class="dropdown-menu" aria-labelledby="pagination_dropdown">
            <li><a class="dropdown-item" href="{{ route('pdf_form1') }}">1. MD.pdf</a></li>
            <li><a class="dropdown-item" href="{{ route('pdf_form2') }}">2. MD partially filled out to check formulas.pdf</a></li>
            <li  ><a class="dropdown-item break-spaces" href="{{ route('pdf_form3') }}">3. domestic-relations-financial-affidavit_type-in-form GA.pdf</a></li>
            <li><a class="dropdown-item" href="{{ route('pdf_form4') }}">4. rev-488 PA.pdf</a></li>
            <li><a class="dropdown-item" href="{{ route('pdf_form5') }}">5. 10482_fam_cis NJ.pd</a></li>
            <li><a class="dropdown-item" href="{{ route('pdf_form6') }}">6. fm006-short  CT.pdf</a></li>
            <li><a class="dropdown-item" href="{{ route('pdf_form7') }}">7. fm006-short  CT.pdf</a></li>
            <li><a class="dropdown-item" href="{{ route('pdf_form8') }}">8. CT Long.pdf</a></li>
            <li><a class="dropdown-item" href="{{ route('pdf_form9') }}">9. fl140  CA.pdf</a></li>
            <li><a class="dropdown-item" href="{{ route('pdf_form10') }}">10. fl161 CA.pdf</a></li>
            <li><a class="dropdown-item" href="{{ route('pdf_form11') }}">11. fl160  CA.pdf</a></li>
            <li><a class="dropdown-item" href="{{ route('pdf_form12') }}">12. FAM108_Current.pdf</a></li>
            <li><a class="dropdown-item" href="{{ route('pdf_form13') }}">13. fl142  CA.pdf</a></li>
            <li><a class="dropdown-item" href="{{ route('pdf_form14') }}">14. fl150  CA.pdf</a></li>
            <li><a class="dropdown-item" href="{{ route('pdf_form15') }}">15. Sworn-Financial-Statement  CO.pdf</a></li>
            <li><a class="dropdown-item" href="{{ route('pdf_form16') }}">16. 902c10-21  FL long form.pdf</a></li>
            <li><a class="dropdown-item" href="{{ route('pdf_form17') }}">17. 902b 11-20   FL short form.pdf</a></li>
            <li><a class="dropdown-item" href="{{ route('pdf_form18') }}">18. FL Long Form Spanish.pdf</a></li>
            <li><a class="dropdown-item" href="{{ route('pdf_form19') }}">19. financial-disclosure-form-pdf-fillable.pdf</a></li>
            <li><a class="dropdown-item" href="{{ route('pdf_form20') }}">20. 1352FA_Financial_Declaration.pdf</a></li>
            <li><a class="dropdown-item" href="{{ route('pdf_form21') }}">21. WI FA-4139V.pdf</a></li>
            <li><a class="dropdown-item" href="{{ route('pdf_form22') }}">22. WI SPANISH FA-4139V_es.pdf</a></li>
            <li><a class="dropdown-item" href="{{ route('pdf_form23') }}">23. KY Disclosure statement 238-239.pdf</a></li>
        </ul>
    </div>
    @if($page < 23)
        @php
            $nextPage = $page + 1;
            $routeName = "pdf_form{$nextPage}";
        @endphp
    <a href="{{ route($routeName) }}" class="text-dark ps-2 my-auto">   <i class="fas fa-chevron-right"></i> </a>
        @endif
    <div class="my-auto ps-2" ><a href="{{route('pdf_form23')}}" class="text-dark"> <i class="fas fa-chevron-right"></i><i class="fas fa-chevron-right"></i> </a></div>

</div>


