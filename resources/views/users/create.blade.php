@extends('layouts.app')
@section('content')
<div class="page-header"><h2 style="text-align: center">Add New User</h2></div>

<p><a class="btn btn-primary" href="{{ url('/users') }}">Back</a></p>

<div class="col-xs-4 col-xs-offset-4">
    <form action="{{ url('/users/create') }}" method="post">
        @csrf
		<input type="hidden" id="_token" name="_token" value="{{ csrf_token() }}"/>
		<div class="form-group">
			<label for="username">Username</label>
			<input type="text" class="form-control" id="username" name="username" placeholder="Enter username" maxlength="255" required />
		</div>
		<div class="form-group">
			<label for="email">Email</label>
			<input type="text" class="form-control" id="email"  name="email" placeholder=" Enter email" maxlength="15" required />
		</div>		
        <div class="form-group">
            <button class="btn btn-danger" type="submit">Thêm</button>
        </div>
	</form>
</div>

@endsection