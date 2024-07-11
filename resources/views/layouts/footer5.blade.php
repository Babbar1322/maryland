<div class="row  py-5">

     <h6 class="{{$page == 4 ? ' col':' col-lg-3 col-6'}}"  ><span class="fw-bold h5">JD-FM-6-SHORT Rev. 2-16</h6>
        <div class="{{$page == 4 ? ' col':' col-lg-3 col-6'}}">
           <button  onclick="window.print()" class="bg-transparent  ">Print Form</button>
       </div>
      <div class="{{$page == 4 ? ' text-center col':' col-lg-3 col-6'}}"> Page {{$page}} of 4</div>
    {{-- @if($page == 4 )
    <div class="col">
       <button type="submit" class="bg-transparent">Submit</button>
    </div>
   @endif --}}
    <div class="{{$page == 4 ? ' col':' col-lg-3 col-6'}}">
        <button type="reset" class="bg-transparent px-4">Reset Form</button>
    </div>
</div>
