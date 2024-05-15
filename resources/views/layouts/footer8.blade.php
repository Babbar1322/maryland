<div class="py-5">
    @if($page == 8 )
    <div class="footer_padding"></div>
@endif
<div class="fs-5">Parenting/Financial Disclosure Statement</div>
<div class="row  d-flex justify-content-around ">

    <div class="col-lg-6">
<div class="row">
        <div class="col"> FAM108</div>
    <div class="col"> State</div>
    <div class="col"> ENG</div>
    <div class="col"> Rev 1/21</div>
    </div></div>
    <div class="col"> <a href="http://www.mncourts.gov/forms" target="_blank" class="text-dark text-decoration-none">www.mncourts.gov/forms </a></div>
    <div class="col"> Page {{$page}} of 8</div>
    </div>

    @if($page == 8 )
    <div class="col d-flex justify-content-center mt-3">

       <button type="button" class="bg-transparent px-4 me-4">Submit</button>
       <button type="reset" class="bg-transparent px-4">Reset</button>
   </div>
   @endif
</div>
