@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Post List</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('posts.create') }}">{{ trans('form.post.add') }}</a>
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
            <th>{{ trans('form.post.title') }}</th>
            <th>{{ trans('form.post.body') }}</th>
            <th width="280px">{{ trans('form.user.action') }}</th>
        </tr>

        <tr>
            <td>1</td>
            <td>Football</td>
            <td>ABCD</td>
            <td>
                <form action="{{ route('posts.destroy',1) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('posts.show', 1) }}">{{ trans('form.user.show') }}</a>

                    <a class="btn btn-primary" href="{{ route('posts.edit', 1) }}">{{ trans('form.user.edit') }}</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">{{ trans('form.user.delete') }}</button>
                </form>
            </td>
        </tr>
    </table>


@endsection