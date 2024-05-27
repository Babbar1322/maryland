<div class="d-flex gap-3 py-auto pb-2  ">
    <div class="my-auto"> <a href="{{ route('form1.index') }}"><i
                class="fas fa-chevron-left text-dark"></i><i class="fas fa-chevron-left text-dark"></i></a>
    </div>
    {{-- <div class="my-auto ps-2"><a href="{{ route('pdf_form16') }}"><i
                class="fas fa-chevron-left"></i></a> </div> --}}


    <div class="dropdown">
        <button class="btn border dropdown-toggle" type="button"
            id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
           {{$page}}
           {{$name}}
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="{{ route('form1.index') }}">1 {{$name}}</a></li>
            <li><a class="dropdown-item" href="{{ route('pdf_form2') }}">2 {{$name}}</a></li>
            <li><a class="dropdown-item" href="{{ route('pdf_form3') }}">3 {{$name}}</a></li>
            <li><a class="dropdown-item" href="{{ route('pdf_form4') }}">4 {{$name}}</a></li>
            <li><a class="dropdown-item" href="{{ route('pdf_form5') }}">5 {{$name}}</a></li>
            <li><a class="dropdown-item" href="{{ route('pdf_form6') }}">6 {{$name}}</a></li>
            <li><a class="dropdown-item" href="{{ route('pdf_form7') }}">7 {{$name}}</a></li>
            <li><a class="dropdown-item" href="{{ route('pdf_form8') }}">8 {{$name}}</a></li>
            <li><a class="dropdown-item" href="{{ route('pdf_form9') }}">9 {{$name}}</a></li>
            <li><a class="dropdown-item" href="{{ route('pdf_form10') }}">10 {{$name}}</a></li>
            <li><a class="dropdown-item" href="{{ route('pdf_form11') }}">11 {{$name}}</a></li>
            <li><a class="dropdown-item" href="{{ route('pdf_form12') }}">12 {{$name}}</a></li>
            <li><a class="dropdown-item" href="{{ route('pdf_form13') }}">13 {{$name}}</a></li>
            <li><a class="dropdown-item" href="{{ route('pdf_form14') }}">14 {{$name}}</a></li>
            <li><a class="dropdown-item" href="{{ route('pdf_form15') }}">15 {{$name}}</a></li>
            <li><a class="dropdown-item" href="{{ route('pdf_form16') }}">16 {{$name}}</a></li>
            <li><a class="dropdown-item" href="{{ route('pdf_form17') }}">17 {{$name}}</a></li>
        </ul>
    </div>
    {{-- <div class="my-auto"> <i class="fas fa-chevron-right"></i> </div> --}}
    <div class="my-auto ps-2" ><a href="{{route('pdf_form17')}}" class="text-dark"> <i class="fas fa-chevron-right"></i><i class="fas fa-chevron-right"></i> </a></div>
</div>
