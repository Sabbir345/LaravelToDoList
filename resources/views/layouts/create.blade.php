@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">
					Add New Student
				</h3>
			</div>
			<div class="panel-body">
				<form class="form-horizontal" method="post" action="{{route('store')}}">
					{{csrf_field()}}
				  <fieldset>
				    
				    <div class="form-group">
				      <label for="firs_name" class="col-md-2 control-label">First Name</label>

				      <div class="col-md-10">
				        <input class="form-control" name="firstname" placeholder="First Name" type="text">
				      </div>
				    </div>
				    <div class="form-group">
				      <label for="last_name" class="col-md-2 control-label">Last Name</label>

				      <div class="col-md-10">
				        <input class="form-control" name="lastname" placeholder="Last Name" type="text">
				      </div>
				    </div>
				    <div class="form-group">
				      <label for="phone" class="col-md-2 control-label">Phone Number</label>

				      <div class="col-md-10">
				        <input class="form-control" name="phone" placeholder="Phone Number" type="number">
				      </div>
				    </div>
				    <div class="form-group">
				      <label for="email" class="col-md-2 control-label">Your Email</label>

				      <div class="col-md-10">
				        <input class="form-control" name="email" placeholder="Email" type="email">
				      </div>
				    </div>
				    <div class="form-group">
				      <div class="col-md-10 col-md-offset-2">
				        <button type="button" class="btn btn-default">Cancel</button>
				        <button type="submit" class="btn btn-primary">Submit</button>
				      </div>
				    </div>
				  </fieldset>
				</form>
			</div>
		</div>
	</div>
@endsection