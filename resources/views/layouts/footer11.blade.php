<div class="row py-5">
    <h6 class="{{$page == 6 ? 'col':'col-lg-8 col-8 '}}"  >JDF 1111 R7/06 SWORN FINANCIAL STATEMENT – FORM 35.2</h6>
      <div class="{{$page == 6 ? 'col':'col-lg-4 col-4 '}} text-center"> Page {{$page}} of 6</div>

      @if($page == 6 )
      <div class="col-1 me-4">

          <button type="submit" class="bg-transparent px-4">Submit</button>
      </div>
      <div class="col-1">

          <button type="reset" class="bg-transparent px-4">Reset</button>
      </div>

      @endif

    </div>
