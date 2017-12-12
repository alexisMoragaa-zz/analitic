@extends('app')

@section('content')
<div class="container-fluid mb-5 mt-3">
	<div class="row justify-content-md-center">
		<div class="col-md-5 ">
			<div class="card ">
				<div class="panel-body">
					<h4 class="card-tittle center-tittle mt-5 mb-5">Login</h4>
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

					<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group mt-4 mb-4">
							<label class="col-md-4 offset-md-1 mt-4">E-Mail Address</label>
							<div class="col-md-10 offset-md-1">
								<input type="email" class="form-control" name="email" value="{{ old('email') }}">
							</div>
						</div>

						<div class="form-group mt-4 mb-4">
							<label class="col-md-4 offset-md-1">Password</label>
							<div class="col-md-10 offset-md-1">
								<input type="password" class="form-control" name="password">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-10 offset-md-1">
								<button type="submit" class="btn btn-primary col-md-12 mt-4 mb-3">Login</button>
							</div>
						</div>

						<div class="form-group mb-5">
							<div class="col-md-10 offset-md-1">
								<div class="checkbox">
									<label class="col-md-5 ">
										<input type="checkbox" name="remember"> Remember Me
									</label>
									<a class="btn btn-link col-md-5 " href="{{ url('/password/email') }}">Forgot Your Password?</a>
								</div>
							</div>
						</div>

					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
