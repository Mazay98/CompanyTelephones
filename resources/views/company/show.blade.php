@extends('layouts.app')
@section('title', "Компания")

@section('content')
    <div class="card mt-5 mx-auto" style="width: 18rem;">
        <div class="card-body position-relative">
            <h5 class="card-title">{{$company->name}}</h5>
            <h6 class="card-subtitle mb-2 text-muted card-link"><a href="mailto:{{$company->email}}"></a>{{$company->email}}</h6>
            <a href="tel:{{$company->phone}}" class="card-link">{{$company->phone}}</a>
            <p class="card-text">{{$company->activity}}</p>
            <div class="row position-absolute mr-3" style="top:0; right:0">
                <a href="{{ route('company.edit', $company->id) }}"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                <form onsubmit=" if(confirm('Удалить?')){ return true} else {return false}" action=" {{ route('company.destroy', $company) }} " method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn-link border-0 bg-transparent">
                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                    </button>
                </form>
            </div>

        </div>
    </div>
@endsection
