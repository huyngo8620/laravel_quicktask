@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>{{ trans('form.user.list') }}</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('users.create') }}">{{ trans('form.user.add') }}</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>{{ trans('form.user.no') }}</th>
            <th>{{ trans('form.user.username') }}</th>
            <th>{{ trans('form.user.email') }}</th>
            <th width="280px">{{ trans('form.user.action') }}</th>
        </tr>

        <tr>
            <td>1</td>
            <td>huyngo</td>
            <td>conghuy2k86@gmail.com</td>
            <td>
                <form action="{{ route('users.destroy',1) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('users.show', 1) }}">{{ trans('form.user.show') }}</a>

                    <a class="btn btn-primary" href="{{ route('users.edit', 1) }}">{{ trans('form.user.edit') }}</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">{{ trans('form.user.delete') }}</button>
                </form>
            </td>
        </tr>
    </table>


@endsection
