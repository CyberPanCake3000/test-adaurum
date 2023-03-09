@extends('layouts.app')

@section('content')

    <div class="container">

    </div>
    <div class="container">
        @auth
            <div class="d-flex justify-content-end">
                <a class="btn btn-primary text-light" href="{{ route('companies.create') }}">Новая компания</a>
            </div>
        @endauth

        <div class="row g-3 py-2">
            @foreach($companies as $company)
                <div class="col-6 col-md-4 ">
                    <a class="text-primary fw-bold nav-link"
                       href="{{ route('companies.show', $company->id) }}">{{ $company->name }}</a>

                    <div>Адрес: {{ $company->address }}</div>
                    <div>Телефон: {{ $company->phone }}</div>
                    <div>Генеральный директор: {{ $company->ceo }}</div>
                    @auth
                        <form action="{{ route('companies.destroy', $company->id) }}" method="POST">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger text-light">Удалить</button>
                        </form>
                    @endauth
                </div>

            @endforeach
            {!! $companies->links() !!}
        </div>
    </div>
@endsection
