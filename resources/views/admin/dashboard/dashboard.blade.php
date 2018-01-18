
@extends('admin.dashboard-layout.app')

@section('content')
<!-- container -->     
<div class="container">
        <!--row -->
    <div class="row">
        <!-- user block -->
        @foreach($users as $user)
        <div class="col-sm-2 col-lg-2 dash-block" >
            <div class="dash-unit dash_height">
                <dtitle class="dash_font color-white">
                User Id: {{ $user->id }}
                </dtitle>
                <hr>                        
                    <div class="dash-image" align="center" >
                        <img class="img-circle dash_img" src="{{asset('default-user.jpeg')}}" style="width: 100px" >
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
                <button type="button" class="btn btn-success dash-button" style="margin-right: 10px;">Edit</button>
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
@endsection

