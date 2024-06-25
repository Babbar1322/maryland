<div class=" mx-auto text-center  py-5">

    @if($page == 9 )
    <div class="footer_padding"></div>
    @endif
    <h6 class="{{$page == 9 ? 'col-':' '}}"  >Pataula Judicial Circuit </h6>
    <h6 class="{{$page == 9 ? 'col-':' '}}"  ><span class="fw-bold h5"> Domestic Relations Financial Affidavit </span> - Revised 2016 </h6>
      <div class="{{$page == 9 ? 'col-':'c '}} text-center"> Page {{$page}} of 9</div>

      @if($page == 9 )
       <div class="col d-flex justify-content-center mt-3">

          {{-- <button type="submit" class="bg-transparent px-4 me-4">Submit</button> --}}
          <button type="reset" class="bg-transparent px-4">Reset</button>

      </div>
      <div class="mt-4">

      </div>

      @endif

    </div>
