@extends('host.setup.host-setup')
@section('content')
<div class="left-side">
    <div class="left-heading">
        <img src="{{asset('assets/img/logo/jayga-01.png')}}" alt="" style="width: 100px; height: 100px;" srcset="">
        <span style="font-weight: 900;">Host Setup</span>
    </div>
    <div class="steps-content">
        <h3>Step <span class="step-number">7</span></h3>
        <p class="step-number-content active">Please complete your account information to host your own place.</p>
        <p class="step-number-content d-none">Whether it’s a room for stay or an experience to offer, Jayga has got you covered</p>
        <p class="step-number-content d-none">Provide basic info about your house</p>
        
        <p class="step-number-content d-none">You’ll add more details later, such as bed types.</p>
        <p class="step-number-content d-none">Tell guests what your place has to offer</p>
        <p class="step-number-content d-none">What are not allowed?</p>
        <p class="step-number-content d-none">Make it stand out with some images</p>
        
       
    </div>
    <ul class="progress-bar">
        <li class="active">Personal Information</li>
        <li>Hosting Type</li>
        <li>Lister Owners Verification</li>
        <li>Basic Listing info</li>
        <li>Share some info about your place</li>
        <li>Amenities for guests</li>
        <li class="active">Restrictions for guests</li>
        <li>Upload Listing Images</li>
        
        
    </ul>
    

    
</div>
<div class="right-side">
    
    
        
            <div class="main active">
                <small><img src="{{ asset('assets/img/logo/jayga-appicon1.png')}}" style="width: 50px; height: 50px;" alt="" srcset=""></small>
                <div class="text">
                    <h2>Restrictions</h2>
                    <p>Let the guests know what are not allowed</p>
                </div>
                <div class="input-text">
                    <div class="input-div">
                        
                    
                        <input type="hidden" name="indoor_smoking" value="0">
                        <input type="checkbox" name="indoor_smoking" value=1 data-toggle="toggle" data-onstyle="success"
                            data-offstyle="danger">
                        <label>Indoor Smoking</label>
                    </div>
                    <div class="input-div"> 
                        <input type="hidden" name="party" value="0">
                        <input type="checkbox" name="party" value=1 data-toggle="toggle" data-onstyle="success"
                            data-offstyle="danger">
                        <label>Party</label>
                    </div>
                </div>
                <div class="input-text">
                    <div class="input-div">
                        <input type="hidden" name="pets" value="0">
                        <input type="checkbox" name="pets" value=1 data-toggle="toggle" data-onstyle="success"
                            data-offstyle="danger">
                        <label>Pets</label>
                    </div>
                    <div class="input-div">
                        <input type="hidden" name="late_night_entry" value="0">
                        <input type="checkbox" name="late_night_entry" value=1 data-toggle="toggle" data-onstyle="success"
                            data-offstyle="danger">
                        <label>Late Night Entry</label>
                    </div>
                </div>
                <div class="input-text">
                    <div class="input-div">
                        <input type="hidden" name="unknown_guest_entry" value="0">
                        <input type="checkbox" name="unknown_guest_entry" value=1 data-toggle="toggle" data-onstyle="success"
                            data-offstyle="danger">
                        <label >Unknown Guest Entry</label>
                    </div>
                    
                </div>
                
                
            
                <div class="buttons button_space">
                    <button class="back_button">Back</button>
                    <button class="next_button">Next Step</button>
                </div>
            </div>
            
            
           
   
    
     

  



</div>
@endsection