@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row"> <br><br>              
        <form action="/edit-profile" method="POST" class="form-horizontal profile_pge" enctype="multipart/form-data">
            <div class="form-group">
                <label for="inputName" class="col-sm-3 control-label">Name</label>
                <div class="col-sm-9">
                    <input type="text" name ="name" value="{{ Auth::user()->name }}"class="form-control" id="inputName" placeholder="Name">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail" class="col-sm-3 control-label">Email</label>
                <div class="col-sm-9">
                    <input type="email" name ="email" value="{{ Auth::user()->email }}" class="form-control" id="inputEmail" placeholder="Email">
                </div>
            </div>
            <div class="form-group">
                <label for="inputName"  class="col-sm-3 control-label">Password</label>
                <div class="col-sm-9">
                    <input type="password" name="password"  value="{{ Auth::user()->password }}" class="form-control" id="inputName" placeholder="New Password" >
                </div>
            </div>
            <div class="form-group">
                <label for="inputName" class="col-sm-3 control-label">Contact No</label>
                <div class="col-sm-9">
                    <input type="number" name="contact_no" value="{{ Auth::user()->contact_no }}" class="form-control" id="inputName" placeholder="Phone Number" >
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-9">
                    <center>
                        <button type="submit" class="btn btn-danger">Edit Profile</button>
                    </center>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
