@extends('backend.admin.master')

@section('content')
   
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card">
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
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection