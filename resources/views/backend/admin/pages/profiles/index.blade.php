@extends('backend.admin.master')

@section('content')
   
<div class="container">
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
</div>

@endsection