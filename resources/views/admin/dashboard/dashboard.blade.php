
@extends('admin.dashboard-layout.app')

@section('content')
<!-- container -->     
<div class="container">
        <!--row -->
    <div class="row">
        <!-- user block -->
        @foreach($users as $user)
        <div class="col-sm-2 col-lg-2 dash-block" >
            <a href="/user-profile/{{ $user->id }}"> 
                <div class="dash-unit dash_height">
                    <dtitle class="dash_font">
                    User Id: {{ $user->id }}
                    </dtitle>
                    <hr>                        
                        <div class="dash-image">
                            <img class="img-circle dash_img" src="{{asset('default-user.jpeg')}}" style="width: 100px" >
                            </img>     
                        </div>                       
                       <h1 class="dash_user_font">
                          {{ $user->name }}
                        </h1>                       
                    </hr>
                </div>
            </a>
        </div>
        @endforeach
        <!-- /user block -->        
    </div>
    <!--/row -->
</div>
<!-- /container -->     
@endsection

