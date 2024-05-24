<div class="row py-5">
    <div class="{{$page == 6 ? 'col-sm-6':'col-lg-6  '}}"  >JDF 1111 R7/06 SWORN FINANCIAL STATEMENT – FORM 35.2</div>
      <div class="{{$page == 6 ? 'col-lg-3':'col-lg-4  '}} text-center"> Page {{$page}} of 6</div>

      @if($page == 6 )
      <div class="col-lg-2 ">

          <button type="submit" class="bg-transparent px-4">Submit</button>
      </div>
      <div class="col-lg-1  mt-lg-0 mt-4">

          <button type="reset" class="bg-transparent px-4">Reset</button>
      </div>

      @endif

    </div>

