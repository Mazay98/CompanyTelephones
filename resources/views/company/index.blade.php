@extends('layouts.app')
@section('title', 'Компании')

@section('content')
    <div class="icons_user">
        <ul class="row list-unstyled">
            <li class="col-3 text-center">
                <a href="{{ route('company.create') }}">
                    <i class="fa fa-dashboard"></i>
                    <p>Добавить компанию</p>
                </a>
            </li>
        </ul>
    </div>

    <div class="users_list">
        <table class="table table-hover">
            <thead>
            <tr>
                <td></td>
                <th scope="col">#</th>
                <th scope="col">Название</th>
                <th scope="col">Email</th>
                <th scope="col">Телефон</th>
                <th scope="col">Деятельность</th>
                <td></td>
                <td></td>
            </tr>
            </thead>
            <tbody>
            @foreach ($companies as $company)
                <tr>
                    <td><a href="{{ route('company.show', $company->id) }}"><i class="fa fa-address-book-o" aria-hidden="true"></i></a></td>
                    <th scope="row">{{ $company->id }}</th>
                    <td>{{ $company->name }}</td>
                    <td>{{ $company->email }}</td>
                    <td>{{ $company->phone }}</td>
                    <td>{{ $company->activity }}</td>
                    <td><a href="{{ route('company.edit', $company->id) }}"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
                    <td>
                        <form onsubmit=" if(confirm('Удалить?')){ return true} else {return false}" action=" {{ route('company.destroy', $company) }} " method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn-link border-0 bg-transparent">
                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    {{ $companies->links() }}
@endsection
