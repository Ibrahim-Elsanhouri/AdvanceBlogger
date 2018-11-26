@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form  method="POST" action="">
                        {{ csrf_field() }}

<div class="form-group">
<label for="email">Email</label> 
<div class="input-group">
<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
<input type="email" name="email"  class="form-control" placeholder="example@example.com" value="{{ old('email')}}" required/>
</div>
</div>

<div class="form-group">
<label for="username">username</label> 
<div class="input-group">
<span class="input-group-addon"><i class="fa fa-user"></i></span>
<input type="text" name="username"  class="form-control" placeholder=" your user name" value="{{ old('username')}}" required/>
</div>
</div>

<div class="form-group">
<label for="fname">First Name</label> 
<div class="input-group">
<span class="input-group-addon"><i class="fa fa-user"></i></span>
<input type="text" name="fname"  class="form-control" placeholder="First Name" value="{{ old('fname')}}" required/>
</div>
</div>

<div class="form-group">
<label for="lname">Last Name</label> 
<div class="input-group">
<span class="input-group-addon"><i class="fa fa-user"></i></span>
<input type="text" name="lname"  class="form-control" placeholder="Last name" value="{{ old('lname')}}" required/>
</div>
</div>

<div class="form-group">
<label for="location">location</label> 
<div class="input-group">
<span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
<input type="text" name="location"  class="form-control" placeholder="UK , USA , SDN , KSA" value="{{ old('location')}}" required/>
</div>
</div>
<div class="form-group">
<label for="password">Password</label> 
<div class="input-group">
<span class="input-group-addon"><i class="fa fa-key"></i></span>
<input type="password" name="password"  class="form-control" placeholder="*************" required/>
</div>
</div>
<div class="form-group">
<label for="cpassword">Confirm Password</label> 
<div class="input-group">
<span class="input-group-addon"><i class="fa fa-key"></i></span>
<input type="password" name="password_confirmation"  class="form-control"  placeholder="*************"  required/>
</div>
</div>
<div class="form-group">
<label for="dob">Date of Birth</label> 
<div class="input-group">
<span class="input-group-addon"><i class="fa fa-birthday-cake "></i></span>
<input type="date" name="dob"  class="form-control" required/>
</div>
</div>

       <div class="form-group">
                     
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
