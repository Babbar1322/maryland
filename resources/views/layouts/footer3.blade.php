<div class="d-flex justify-content-between py-3">
    <div style="height:30px; width:60px;border-left: 5px solid black; border-bottom: 5px solid black"></div>
    <div style="height:30px; width:60px;border-right: 5px solid black; border-bottom: 5px solid black"></div>
</div>
<div class="row text-center">
    <div class="col-lg-3 col  mx-auto px-0 mx-0 bg-danger my-auto text-white" style="min-width:150px;"> Reset Entrie Form </div>
    <div class="col-lg-3  col mx-auto text-danger my-auto small_text"  >TOP OF PAGE </div>
    <div class="col-lg-2 col  mx-auto text-center my-auto"> <h3> Page {{$page}} </h3></div>
    <div class="col-lg-2 col  mx-auto text-danger  my-auto small_text">NEXT PAGE </div>
    <div class="col-lg-2 col  mx-auto text-white my-auto bg-primary" style="width:100px;">Print</div>
    @if($page == 6 )
    <div class="col d-flex justify-content-center mt-3">
       <button type="submit" class="bg-transparent px-4 me-4">Submit</button>
       <button type="reset" class="bg-transparent px-4">Reset</button>
   </div>
   @endif
 </div>
