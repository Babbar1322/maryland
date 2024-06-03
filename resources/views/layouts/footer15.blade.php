<div class="row my-5 pt-1 border-top border-dark">
    <h6 class="{{$page == 14 ? 'col':'col-lg-4 col-4 '}}"  >

        <div>1352FAJ Approved February 25, 2019</div>
        <div>/ Revised November 21, 2022</div>  </h6>
      <div class="{{$page == 14 ? 'col':'col-lg-4 col-4 '}} text-center fw-bold">Financial Declaration</div>
      {{-- <div class="{{$page == 14 ? 'col':'col-lg-4 col-4 '}} text-center"></div> --}}

      @if($page == 14 )
      <div class="col">

          <button type="submit" class="bg-transparent px-4">Submit</button>
      </div>
      <div class="col">

          <button type="reset" class="bg-transparent px-4">Reset</button>
      </div>

      @endif
       <h5 class="{{$page == 14 ? 'col':'col-lg-4 col-4   '}} text-center"> Page {{$page}} of 14</h5>


