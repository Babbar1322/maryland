<div class="small_text text-end fw-bold">Page {{ $page }} of 4</div>
<div class="border-bottom border-dark "></div>

<div class="row pb-5">
    <div class="col-md-3 lh-1 py-2">
        <h4 class="fs-6 m-0">Form Adopted for Mandatory Use</h4>
        <div class="fs-6">Judicial Council of California</div>
        <div class="fs-6">FL-150 [Rev. July 1, 2019]</div>
    </div>
    <div class="col-md-6 text-center">
        <h4 class="mb-0 fw-bold">INCOME AND EXPENSE DECLARATION</h4>
    </div>
    <div class="col-md-3 text-end lh-1">
        <h4 class="mb-0 fs-6 ">Family Code, §§ 2030-2032, 2100-2113,</h4>
        <h4 class="mb-0 fs-6">3552, 3620-3634, 4050-4076, 4300-4339</h4>
        <a href="https://www.courts.ca.gov/" target="_blank"
            class="text-decoration-none text-dark fs-6">www.courts.ca.gov</a>
    </div>
</div>

@if ($page == 4)
    <div class="row pb-4">
        <div class="col-lg-4  mt-3 mt-lg-0 small_text text-dark fw-bold ">
            <div class="" style="background-color:#C0C0C0">For your protection and privacy, please press the Clear
                This Form button after you have printed the form.</div>
        </div>
        <div class="col-lg-4  mt-3 mt-lg-0 text-center mx-auto">
            <button class="  btn-success" onclick="window.print()" style="background-color: #91FF90">Print this
                form</button>
            <button type="submit" class="  btn-warning" style="background-color: #FEFE98">Save this
                form</button>
        </div>
        <div class="col-lg-4 my-3 my-lg-0 text-center mx-auto">
            <button type="reset" style="background-color: #F59292 ">Clear this form</button>
        </div>
    </div>
@endif
