<style>
    .pt-100 {
        padding-top:200px;

    }
</style>

@if($page == 5)
<div class="pt-100"></div>
@endif
    <div class="row  m-0 pt-3">

        <div class="col-lg-4  mt-3 mt-lg-0 small_text text-dark fw-bold ">

            <div>NHJB-2065-F (06/15/2020)</div>

        </div>
        <div class="col-lg-4  mt-3 mt-lg-0 text-center mx-auto">
            Page {{$page}} of 5
            {{-- <button type="submit" class="  btn-warning" style="background-color: #FEFE98">Save this
                form</button> --}}
        </div>
        <div class="col-lg-4 my-3 my-lg-0 text-center mx-auto">
            <button > <a href="#" class="text-dark text-decoration-none">Top of 1st Page</a></button>
        </div>
    </div>

