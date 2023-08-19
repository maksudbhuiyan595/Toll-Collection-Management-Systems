@extends('backend.admin.master')

@section('content')

<style>
    body{
    margin-top:20px;
    color: #1a202c;
    text-align: left;
    background-color: #e2e8f0;    
}
.main-body {
    padding: 15px;
}
.card {
    box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid rgba(0,0,0,.125);
    border-radius: .25rem;
}

.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1rem;
}

.gutters-sm {
    margin-right: -8px;
    margin-left: -8px;
}

.gutters-sm>.col, .gutters-sm>[class*=col-] {
    padding-right: 8px;
    padding-left: 8px;
}
.mb-3, .my-3 {
    margin-bottom: 1rem!important;
}

.bg-gray-300 {
    background-color: #e2e8f0;
}
.h-100 {
    height: 100%!important;
}
.shadow-none {
    box-shadow: none!important;
}
</style>




<div class="container">
    <div class="main-body">
    
          <!-- Breadcrumb -->
         
          <!-- /Breadcrumb -->
    
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4>{{auth()->user()->name}}</h4>
                      <p class="text-secondary mb-1">{{auth()->user()->email}}</p>
               
                   
                    </div>
                  </div>
                </div>
              </div>
             
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                  <form action="{{route('profile.index')}}" method="post">
                            <div class="mb-3">
                            <label for="">User Name:</label>
                            <input type="text" class="form-control" name="user_name" value="" placeholder="user name">
                            </div>
                            <div class="mb-3">
                            <label for="">User Email</label>
                            <input type="email" class="form-control" name="user_email" value="" placeholder="user email">
                            </div>
                            <div class="mb-3">
                            <!-- <label for="">Choose Image</label>
                            <input type="file" class="form-control" name="user_image" >
                            </div> -->
                            <div class="mb-3">
                            <label for="">Change Password</label>
                            <input type="password" class="form-control" name="change_pass" value="" placeholder="password">
                            </div>
                            <button type="submit" class="btn btn-success">Update</button>
                        </form>
                </div>
          </div>    
        </div>
    </div>





<!-- <div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card mt-5">
                <div class="card-header">
                    <h1 class="text-center"><strong>Profile</strong></h1>
                    <div class="card-body">
                        <form action="">
                            <div class="mb-3">
                            <label for="">User Name:</label>
                            <input type="text" class="form-control" name="user_name" placeholder="user name">
                            </div>
                            <div class="mb-3">
                            <label for="">User Email</label>
                            <input type="email" class="form-control" name="user_email" placeholder="user email">
                            </div>
                            <div class="mb-3">
                            <label for="">Choose Image</label>
                            <input type="file" class="form-control" name="user_image" >
                            </div>
                            <div class="mb-3">
                            <label for="">Change Password</label>
                            <input type="password" class="form-control" name="password" placeholder="password">
                            </div>
                            <button type="submit" class="btn btn-success">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->

@endsection