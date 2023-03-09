@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="text-primary fw-bold">{{ $company->name }}</h2>

        <div class="my-3">
            <div class="text-primary h4">
                ИНН
            </div>
            <div>
                {{ $company->inn }}
            </div>
        </div>

        <div class="my-3">
            <div class="text-primary h4">
                Общая информация
            </div>
            <div>
                {{ $company->info }}
            </div>
        </div>

        <div class="my-3">
            <div class="text-primary h4">
                Адрес
            </div>
            <div>
                {{ $company->address }}
            </div>
        </div>

        <div class="my-3">
            <div class="text-primary h4">
                Телефон
            </div>
            <div>
                {{ $company->phone }}
            </div>
        </div>

        <div class="my-3">
            <div class="text-primary h4">
                Генеральный директор
            </div>
            <div>
                {{ $company->ceo }}
            </div>
        </div>

        <div class="d-flex">

            @auth
                <form action="{{ route('companies.destroy', $company->id) }}" method="POST">
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger text-light">Удалить</button>
                </form>
            @endauth

        </div>
    </div>
@endsection
