@extends('layouts.agency')
@section('content')
<div class="page-content">
    <div class="container-fluid">
        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="row">
                        <div class="col">
                            <h4 class="page-title">Analytics</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active">Summary of your account</li>
                            </ol>
                        </div><!--end col-->
                        <div class="col-auto align-self-center">
                            <a href="#" class="btn btn-sm btn-outline-primary" id="Dash_Date">
                                <span class="ay-name" id="Day_Name">Today:</span>&nbsp;
                                <span class="" id="Select_date">Jan 11</span>
                                <i data-feather="calendar" class="align-self-center icon-xs ms-1"></i>
                            </a>
                            <a href="#" class="btn btn-sm btn-outline-primary">
                                <i data-feather="download" class="align-self-center icon-xs"></i>
                            </a>
                        </div><!--end col-->  
                    </div><!--end row-->                                                              
                </div><!--end page-title-box-->
            </div><!--end col-->
        </div><!--end row-->
        <!-- end page title end breadcrumb -->
        <div class="row">
            <div class="col-lg-9">
                <div class="row justify-content-center">
                    <div class="col-md-6 col-lg-3">
                        <div class="card report-card">
                            <div class="card-body">
                                <div class="row d-flex justify-content-center">
                                    <div class="col">
                                        <p class="text-dark mb-0 fw-semibold">Working Hours</p>
                                        <h3 class="m-0">8hrs Per Day</h3>
                                        <p class="mb-0 text-truncate text-muted">
                                            <span class="text-success">20hrs</span> Completed in 7 days</p>
                                    </div>
                                    <div class="col-auto align-self-center">
                                        <div class="report-main-icon bg-light-alt">
                                            <i data-feather="clock" class="align-self-center text-muted icon-sm"></i>  
                                        </div>
                                    </div>
                                </div>
                            </div><!--end card-body--> 
                        </div><!--end card--> 
                    </div> <!--end col--> 
                    <div class="col-md-6 col-lg-3">
                        <div class="card report-card">
                            <div class="card-body">
                                <div class="row d-flex justify-content-center">                                                
                                    <div class="col">
                                        <p class="text-dark mb-0 fw-semibold">Weekly Task</p>
                                        <h3 class="m-0">10 Tasks</h3>
                                        <p class="mb-0 text-truncate text-muted"><span class="text-success">5</span> Completed in 7 Days</p>
                                    </div>
                                    <div class="col-auto align-self-center">
                                        <div class="report-main-icon bg-light-alt">
                                            <i data-feather="clock" class="align-self-center text-muted icon-sm"></i>  
                                        </div>
                                    </div> 
                                </div>
                            </div><!--end card-body--> 
                        </div><!--end card--> 
                    </div> <!--end col--> 
                    <div class="col-md-6 col-lg-3">
                        <div class="card report-card">
                            <div class="card-body">
                                <div class="row d-flex justify-content-center">                                                
                                    <div class="col">
                                        <p class="text-dark mb-0 fw-semibold">Login Counts</p>
                                        <h3 class="m-0">450</h3>
                                        <p class="mb-0 text-truncate text-muted"><span class="text-danger"><i class="mdi mdi-trending-down"></i>200</span> in last 7 Days</p>
                                    </div>
                                    <div class="col-auto align-self-center">
                                        <div class="report-main-icon bg-light-alt">
                                            <i data-feather="activity" class="align-self-center text-muted icon-sm"></i>  
                                        </div>
                                    </div> 
                                </div>
                            </div><!--end card-body--> 
                        </div><!--end card--> 
                    </div> <!--end col--> 
                    <div class="col-md-6 col-lg-3">
                        <div class="card report-card">
                            <div class="card-body">
                                <div class="row d-flex justify-content-center">
                                    <div class="col">  
                                        <p class="text-dark mb-0 fw-semibold">Registered Users</p>                                         
                                        <h3 class="m-0">10</h3>
                                        <p class="mb-0 text-truncate text-muted"><span class="text-success"><i class="mdi mdi-trending-up"></i>8</span> in Last 7 Days</p>
                                    </div>
                                    <div class="col-auto align-self-center">
                                        <div class="report-main-icon bg-light-alt">
                                            <i data-feather="users" class="align-self-center text-muted icon-sm"></i>  
                                        </div>
                                    </div> 
                                </div>
                            </div><!--end card-body--> 
                        </div><!--end card--> 
                    </div> <!--end col-->                               
                </div><!--end row-->
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">                      
                                <h4 class="card-title">Earnings Reports</h4>                      
                            </div><!--end col-->                                        
                        </div>  <!--end row-->                                  
                    </div><!--end card-header-->
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th class="border-top-0">Date</th>                                                            
                                        <th class="border-top-0">Item Count</th>
                                        <th class="border-top-0">Text</th>
                                        <th class="border-top-0">Earnings</th>
                                    </tr><!--end tr-->
                                </thead>
                                <tbody>
                                    <tr>                                                        
                                        <td>01 January</td>                                                            
                                        <td>50</td>
                                        <td class="text-danger">-$70</td>
                                        <td>$15,000</td>
                                    </tr><!--end tr-->     
                                    <tr>                                                        
                                        <td>02 January</td>
                                        <td>25</td>
                                        <td>-</td>
                                        <td>$9,500</td>
                                        
                                    </tr><!--end tr-->    
                                    <tr>                                                        
                                        <td>03 January</td>
                                        <td>65</td>
                                        <td class="text-danger">-$115</td>
                                        <td>$35,000</td>
                                        
                                    </tr><!--end tr-->    
                                    <tr>                                                        
                                        <td>04 January</td>
                                        <td>20</td>
                                        <td>-</td>
                                        <td>$8,500</td>
                                    </tr><!--end tr-->    
                                    <tr>                                                        
                                        <td>05 January</td>
                                        <td>40</td>
                                        <td class="text-danger">-$60</td>
                                        <td>$12,000</td>                                                            
                                    </tr><!--end tr-->    
                                    <tr>                                                        
                                        <td>06 January</td>
                                        <td>45</td>
                                        <td class="text-danger">-$65</td>
                                        <td>$13,500</td>                                                            
                                    </tr><!--end tr-->                            
                                </tbody>
                            </table> <!--end table-->                                               
                        </div><!--end /div-->
                    </div><!--end card-body--> 
                </div><!--end card--> 
            </div><!--end col-->
            <div class="col-lg-3">
                <div class="card overflow-hidden"> 
                    <div class="card-body">                                    
                        <div class="row">
                            <div class="col">
                                <div class="media">
                                    <img src="assets/images/money-beg.png" alt="" class="align-self-center" height="40">
                                    <div class="media-body align-self-center ms-3"> 
                                        <h6 class="m-0 font-20">$1850.00</h6>
                                        <p class="text-muted mb-0">Total Revenue</p>                                                                                                                                               
                                    </div><!--end media body-->
                                </div><!--end media-->
                            </div><!--end col-->  
                            <div class="col-auto align-self-center">
                                <p class="mb-0"><span class="text-success"><i class="mdi mdi-trending-up"></i>4.8%</span> Then Last Month</p>
                            </div><!--end col-->                                      
                        </div><!--end row-->
                    </div><!--end card-body-->
                   
                </div> <!--end card-->  
                <div class="card">   
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">                      
                                <h4 class="card-title">Activity</h4>                      
                            </div><!--end col-->
                            <div class="col-auto"> 
                                <div class="dropdown">
                                    <a href="#" class="btn btn-sm btn-outline-light dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        All<i class="las la-angle-down ms-1"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">Purchases</a>
                                        <a class="dropdown-item" href="#">Emails</a>
                                    </div>
                                </div>          
                            </div><!--end col-->
                        </div>  <!--end row-->                                  
                    </div><!--end card-header-->                                              
                    <div class="card-body"> 
                        <div class="analytic-dash-activity" data-simplebar>
                            <div class="activity">
                                <div class="activity-info">
                                    <div class="icon-info-activity">
                                        <i class="las la-user-clock bg-soft-primary"></i>
                                    </div>
                                    <div class="activity-info-text">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <p class="text-muted mb-0 font-13 w-75"><span>Donald</span> 
                                                updated the status of <a href="#">Refund #1234</a> to awaiting customer response
                                            </p>
                                            <small class="text-muted">10 Min ago</small>
                                        </div>    
                                    </div>
                                </div>   

                                <div class="activity-info">
                                    <div class="icon-info-activity">
                                        <i class="mdi mdi-timer-off bg-soft-primary"></i>
                                    </div>
                                    <div class="activity-info-text">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <p class="text-muted mb-0 font-13 w-75"><span>Lucy Peterson</span> 
                                                was added to the group, group name is <a href="#">Overtake</a>
                                            </p>
                                            <small class="text-muted">50 Min ago</small>
                                        </div>    
                                    </div>
                                </div>  

                                <div class="activity-info">
                                    <div class="icon-info-activity">
                                        <i class="mdi mdi-clock-outline bg-soft-primary"></i>
                                    </div>
                                    <div class="activity-info-text">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <p class="text-muted mb-0 font-13 w-75"><span>Donald</span> 
                                                updated the status of <a href="#">Refund #1234</a> to awaiting customer response
                                            </p>
                                            <small class="text-muted">Yesterday</small>
                                        </div>    
                                    </div>
                                </div>   
                                <div class="activity-info">
                                    <div class="icon-info-activity">
                                        <i class="mdi mdi-alert-outline bg-soft-primary"></i>
                                    </div>
                                    <div class="activity-info-text">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <p class="text-muted mb-0 font-13 w-75"><span>Lucy Peterson</span> 
                                                was added to the group, group name is <a href="#">Overtake</a>
                                            </p>
                                            <small class="text-muted">14 Nov 2019</small>
                                        </div>    
                                    </div>
                                </div>                                                                                                                                      
                            </div><!--end activity-->
                        </div><!--end analytics-dash-activity-->
                    </div>  <!--end card-body-->                                     
                </div><!--end card--> 
            </div><!-- end col-->    
        </div><!--end row-->
    </div><!-- container -->
    
@endsection