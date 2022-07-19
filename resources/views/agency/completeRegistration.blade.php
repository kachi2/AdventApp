@extends('layouts.agency_auth')
@section('content')

    <!-- Log In page -->
    <div class="container account-body accountbg">
        <div class="row vh-100 d-flex justify-content-center">
            <div class="col-12 align-self-center">
                <div class="row">
                    <div class="col-lg-5 mx-auto">
                        <div class="card">
                            <div class="card-body p-0 auth-header-box">
                                <div class="text-center p-3">
                                    <p class="text-muted  mb-0">Account Setup</p>  
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <ul class="nav-border nav nav-pills" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active fw-semibold" data-bs-toggle="tab" href="#Register_Tab" role="tab">Complete Account Registration to access your Mazeoptions Agency Portal</a>
                                    </li>
                                </ul>
                                 <!-- Tab panes -->
                                <div class="tab-content">
                                    <div class="tab-pane active px-3 pt-3" id="Register_Tab" role="tabpanel">
                                        <form class="form-horizontal auth-form" action="{{route('agency.AccountCompleted')}}" method="post">
                                            @csrf
                                            <div class="form-group mb-2">
                                                <label class="form-label" for="useremail">Account Password</label>
                                                <div class="input-group">                                                                                         
                                                    <input type="password" class="form-control {{ form_invalid('password') }}" value="{{old('password')}}" name="password" placeholder="***************">
                                                    @showError('email')
                                                </div>                                    
                                            </div><!--end form-group-->
                                            <div class="form-group mb-2">
                                                <label class="form-label" for="useremail">Confirm Password</label>
                                                <div class="input-group">                                                                                         
                                                    <input type="password" class="form-control {{ form_invalid('password_confirmation') }}" value="{{old('password_confirmation')}}" name="password_confirmation" placeholder="***********">
                                                    @showError('email')
                                                </div>                                    
                                            </div><!--end form-group-->
                                            <div class="form-group mb-2">
                                                <label class="form-label" for="useremail">Address</label>
                                                <div class="input-group">                                                                                         
                                                    <input type="text" class="form-control {{ form_invalid('name') }}" value="{{old('name')}}" name="name" placeholder="Enter Full Address">
                                                    @showError('email')
                                                </div>                                    
                                            </div><!--end form-group-->
                                            <div class="form-group mb-2">
                                                <label class="form-label" for="useremail">State</label>
                                                <div class="input-group">                                                                                         
                                                    <input type="email" class="form-control {{ form_invalid('email') }}" value="{{old('email')}}" name="email" id="useremail" placeholder="Enter State">
                                                    @showError('email')
                                                </div>                                    
                                            </div><!--end form-group-->
                                            <div class="form-group mb-2">
                                                <label class="form-label" for="mo_number">Country</label>                                            
                                                <div class="input-group">                                 
                                                    <input type="text" class="form-control {{ form_invalid('phone')}}" name="phone" value="{{old('phone')}}" id="mo_number" placeholder="Enter Country">
                                                    @showError('phone')
                                                </div>                               
                                            </div><!--end form-group-->  
                                            <div class="form-group mb-2">
                                                <label class="form-label" for="mo_number">Upload any Valid ID</label>                                            
                                                <div class="input-group">                                 
                                                    <input type="file" class="form-control {{ form_invalid('image')}}" name="image"  id="mo_number">
                                                    @showError('phone')
                                                </div>                               
                                            </div><!--end form-group-->  
                                            <div class="form-group mb-0 row">
                                                <div class="col-12">
                                                    <button class="btn btn-primary w-100 waves-effect waves-light" type="submit">Complete Account Setup <i class="fas fa-sign-in-alt ms-1"></i></button>
                                                </div><!--end col--> 
                                            </div> <!--end form-group-->                           
                                        </form>              
                                    </div>
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
    <!-- End Log In page -->
@endsection