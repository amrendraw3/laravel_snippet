@extends('admin.dashboard-layout.app')

@section('content')
<!-- container -->     
<div class="container">
        <!--row -->
    <div class="row">
        <!-- user block -->
        @if(Session::has('delete_success'))
            <div class='alert alert-success' role="alert" id="confirm"><span>{{session()->get('delete_success')}}</span></div>
         @endif 
        @foreach($users as $user)
        <div class="col-sm-2 col-lg-2 dash-block" >
            <div class="dash-unit dash_height">
                <dtitle class="dash_font color-white">
                User Id: {{ $user->id }}
                </dtitle>
                <hr>                        
                    <div class="dash-image" align="center" >
                        <img class="img-circle dash_img img-width" src="{{asset('admin/images/default-user.jpeg')}}">
                        </img>     
                    </div>                       
                   <h1 class="dash_user_font color-white">
                      {{ $user->name }}
                    </h1> 
                    <h3 class="dash_user_font">
                      {{ $user->email }}
                    </h3> 
                    <h3 class="dash_user_font">
                      {{ $user->contact_no }}
                    </h3>                     
                </hr>
            </div>
            <a href="/user-profile/{{ $user->id }}">
                <button type="button" class="btn btn-success dash-button mar-right-10">Edit</button>
            </a>
            <a href="/user-delete/{{ $user->id }}" >
                <button type="button" class="btn btn-success dash-button">Delete</button>
            </a>
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

