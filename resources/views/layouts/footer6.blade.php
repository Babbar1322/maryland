<div class="row py-5">

     <h6 class="{{$page == 6 ? ' col':' col-lg-3 col-6'}}"><span class="fw-bold h5">JD-FM-6-LONG Rev. 2-16</h6>
        <div class="{{$page == 6 ? ' col':' col-lg-3 col-6'}}">
           <button  onclick="window.print()" class="bg-body-secondary">Print Form</button>
       </div>
      <div class="{{$page == 6 ? ' text-center col':' col-lg-3 col-6'}}"> Page {{$page}} of 6</div>

    {{-- @if($page == 6 )
    <div class="col">
        <button type="submit" class=" bg-body-secondary">Submit</button>
    </div>
   @endif --}}
    <div class="{{$page == 6 ? ' col':' col-lg-3 col-6'}}  ">
        <button type="reset" class=" px-4 bg-body-secondary">Reset Form</button>
    </div>
</div>
