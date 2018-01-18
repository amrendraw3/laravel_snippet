@extends('admin.dashboard-layout.app')

@section('content')
<!-- container -->     
<div class="container">
        <!--row -->
    <div class="row">
        <!-- user block -->
        @foreach($user_info as $user)
        <div class="col-sm-6 col-lg-6">
          <div id="register-wraper" style="margin-top: 0px;">
            <form id="register-form" class="form" method="POST" style="background-color: cadetblue;" action="/user-profile/{{$user->id}}" enctype="multipart/form-data" >
              <input type="hidden" name="_Token" value="{{ csrf_token() }}">
              <legend>Profile</legend>
              <hr>
                <div class="body user-data">
                  <label class="margin-left-5" for="profile_name">Name</label><br>
                  <input name="profile_name" class="input-huge margin-left-5" type="text" value="{{$user->name}}">
                  <br><br>
                  <label class="margin-left-5" for="profile_email">Email</label><br>
                  <input name="profile_email" class="input-huge margin-left-5" type="email" value="{{$user->email}}">
                  <br><br>
                  <label class="margin-left-5" for="profile_password">Password</label><br>
                  <input  name="profile_password" class="input-huge margin-left-5" type="password" value="{{$user->password}}"><br><br>
                  <label class="margin-left-5" for="profile_phone">Phone</label><br>
                  <input name="profile_phone" class="input-huge margin-left-5" type="number" value="{{$user->contact_no}}" ><br><br>
                </div>
                <div class="footer">
                  <button type="submit" class="btn btn-success" style="margin-left: 180px; width: 100px">Update</button>
                  <br><br>
                </div>
            </form>
          </div>
        </div>
        @endforeach
        <!-- /user block -->        
    </div>
    <!--/row -->
</div>
<!-- /container -->     
@endsection

