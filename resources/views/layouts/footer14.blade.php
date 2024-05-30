<div class="row  d-flex justify-content-around  py-5">
    @if($page == 8 || $page == 7 )
        <div class="footer_padding"></div>
    @endif
     <div class="{{$page == 8 ? 'col-lg-3 text-center':'col-lg-3 text-end  text-center'}}"> Page {{$page}} of 8</div>


    @if($page == 8 )
    <div class="col col- d-flex justify-content-center mt-3">
       <button type="submit" class="bg-transparent px-4 me-4">Submit</button>
       <button type="reset" class="bg-transparent px-4">Reset</button>
   </div>
</div>
   @endif
