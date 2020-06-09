@extends('layouts.app')
@section('title', 'Редактирование пользователя')

@section('content')
    <div class="col-6 mt-5">

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('company.update', $company->id) }}" method="POST">
            @csrf
            @method('PUT')
            @include('company.partials.form')
            <div class="form-group">
                <input type="submit" class="btn btn-success" value="Обновить">
            </div>
        </form>
    </div>
@endsection
