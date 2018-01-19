@extends('admin.dashboard-layout.app')

@section('content')
<!-- container -->     
<div class="container">
        <!--row -->
    <div class="row">
        <!-- user block -->
        @if(Session::has('update_success'))
            <div class='alert alert-success' role="alert" id="confirm"><span>{{session()->get('update_success')}}</span></div>
         @endif 
        @foreach($user_info as $user)
        <div class="col-sm-6 col-lg-6">
          <div id="register-wraper" style="margin-top: 0px;">
            <form id="register-form" class="form" method="POST" style="background-color: cadetblue;" action="/update-user-profile" enctype="multipart/form-data" >
              <input name="id" type="hidden" value="{{$user->id}}">
              <input type="hidden" name="_Token" value="{{ csrf_token() }}">
              <legend align="center">User Profile</legend>
              <hr>
                <div class="body user-data">
                  <label class="margin-left-5" for="profile_name">Name</label><br>
                  <input name="name" class="input-huge margin-left-5" type="text" value="{{$user->name}}">
                  <br><br>
                  <label class="margin-left-5" for="profile_email">Email</label><br>
                  <input name="email" class="input-huge margin-left-5" type="email" value="{{$user->email}}">
                  <br><br>
                  <label class="margin-left-5" for="profile_password">Password</label><br>
                  <input  name="password" class="input-huge margin-left-5" type="password" value="{{$user->password}}"><br><br>
                  <label class="margin-left-5" for="profile_phone">Phone</label><br>
                  <input name="contact_no" class="input-huge margin-left-5" type="number" value="{{$user->contact_no}}" ><br><br>
                </div>
                <div class="footer" align="center">
                  <button type="submit" class="btn btn-success" style="width: 120px">Update</button>
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
<!-- scripts -->
<script src="http://code.jquery.com/jquery-1.10.2.js"></script>         
<script>    
    $("#confirm").ready(function() {
        setTimeout(function() {
            $('#confirm').fadeOut("slow");
        }, 2000 );        
    });
</script> 
<!-- /scripts -->     
@endsection

