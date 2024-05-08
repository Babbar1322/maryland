<div class="row  d-flex justify-content-around  py-5">

    @if($page == 10 )
    <div class="footer_padding"></div>
    @endif
     <h6 class="{{$page == 10 ? 'col-lg-9':' col-lg-9'}}"  ><span class="fw-bold h5"> Revised to be effective September 1, 2017. CN: 10482 (Court Rules Appendix V)</h6>
      <div class="{{$page == 10 ? 'col-lg-3':'col-lg-3 text-end'}}"> Page {{$page}} of 10</div>



    </div>

    @if($page == 10 )
    <div class="col d-flex justify-content-center mt-3">

       <button type="submit" class="bg-transparent px-4 me-4">Submit</button>
       <button type="reset" class="bg-transparent px-4">Reset</button>

   </div>
   <div class="mt-4">

   </div>

   @endif
