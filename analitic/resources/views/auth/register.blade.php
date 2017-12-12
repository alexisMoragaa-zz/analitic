@extends('app')

@section('content')
<div class="container-fluid mb-3">
	<div class="row  justify-content-md-center">
		<div class="col-md-6">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title center-tittle">User Register</h4>
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif


					<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/register') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label class="col-md-4 col-form-label offset-md-1">Name</label>
							<div class="col-md-10 offset-md-1">
								<input type="text" class="form-control" name="name" value="{{ old('name') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 offset-md-1 col-form-label">E-Mail</label>
							<div class="col-md-10 offset-md-1">
								<input type="email" class="form-control" name="email" value="{{ old('email') }}">
							</div>
						</div>

						<div class="form-group ">
							<label class="col-md-4 offset-md-1 col-form-label">Password</label>
							<div class="col-md-10 offset-md-1">
								<input type="password" class="form-control" name="password">
							</div>
						</div>

						<div class="form-group ">
							<label class="col-md-4 offset-md-1 col-form-label">Confirm Password</label>
							<div class="col-md-10 offset-md-1">
								<input type="password" class="form-control" name="password_confirmation">
							</div>
						</div>

						<div class="form-group ">
							<div class="col-md-10 offset-md-1 ">
								<button type="submit" class="btn btn-primary col-md-12 mt-3">
									Register
								</button>
							</div>
						</div>
					</form>{{--fin form--}}

				</div>{{--fin cardbody--}}
			</div>{{--fin card--}}
		</div>{{--fin col-md-7--}}
	</div>{{--fin row--}}

</div>{{--fin container fluid--}}
@endsection
