@extends('host.setup.host-setup')
@section('content')
<div class="left-side">
    <div class="left-heading">
        <a href="{{route('userdash')}}"><img src="{{asset('assets/img/logo/jayga-01.png')}}" alt="" style="width: 100px; height: 100px;" srcset=""></a>
        <span style="font-weight: 900;">Host Setup</span>
    </div>
    <div class="steps-content">
        <h3>Step <span class="step-number">9</span></h3>
        
        <p class="step-number-content d-none">Whether it’s a room for stay or an experience to offer, Jayga has got you covered</p>
        <p class="step-number-content d-none">Provide basic info about your house</p>
        
        <p class="step-number-content d-none">You’ll add more details later, such as bed types.</p>
        <p class="step-number-content d-none">Tell guests what your place has to offer</p>
        <p class="step-number-content d-none">What are not allowed?</p>
        <p class="step-number-content d-none">Make it stand out with some images</p>
        
       
    </div>
    <ul class="progress-bar">
        
        <li class="active">Hosting Type</li>
        <li class="active">Basic Listing info</li>
        <li class="active">Share some info about your place</li>
        <li class="active">Attach NID Documents</li>
        <li class="active">Amenities for guests</li>
        <li class="active">Restrictions for guests</li>
        <li class="active">Upload Listing Images</li>
        
        
    </ul>
    

    
</div>
<div class="right-side">
    
    
           
            <div class="main active">
                <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                    <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"/>
                    <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"/>
                </svg>
                
                <div class="text congrats">
                    <h2>Congratulations!</h2>
                    <p>Thanks Mr./Mrs. <span class="shown_name"></span> your information have been submitted successfully for the future reference we will contact you soon.</p>
                </div>
                <div class="mt-3 text-center">
                    <a class="btn btn-success" href="{{route('userdash')}}">Back to Dashboard</a>
                </div>
            </div>
   
    
     

  



</div>
@endsection