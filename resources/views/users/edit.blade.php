@extends('layouts.app')
@section('content')
<div class="page-header"><h2 style="text-align: center">Edit User</h2></div>

<p><a class="btn btn-primary" href="{{ url('/users') }}">Back</a></p>

<div class="col-xs-4 col-xs-offset-4">
	<form action="{{ route('users.edit', 1) }}" method="post">
        @method('PUT')
        @csrf
		<div class="form-group">
			<label for="username">Username</label>
			<input type="text" class="form-control" id="username" name="username" placeholder="username" maxlength="255" required />
		</div>
		<div class="form-group">
			<label for="email">Email</label>
            <input type="text" class="form-control" id="email"  name="email" placeholder="email" maxlength="15" required />
		</div>
		<div class="form-group">
            <button class="btn btn-danger" type="submit">Lưu</button>
        </div>
	</form>
</div>
@endsection