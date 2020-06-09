@extends('layouts.app')
@section('title', 'Добавление - компании')

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

        <form action="{{ route('company.store') }}" method="POST">
            @csrf
            @include('company.partials.form')
            <div class="form-group">
                <input type="submit" class="btn btn-success" value="Создать">
            </div>
        </form>
    </div>
@endsection
