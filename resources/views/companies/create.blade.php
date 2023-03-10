@extends('layouts.app')

@section('content')
    <div class="container">
        <form id="createCompany" action="{{ route('companies.store') }}" class="col-md-6 col-12" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name">Название компании</label>
                <input type="text" name="name" class="form-control text-white" id="name">
            </div>
            <div class="mb-3">
                <label for="inn">ИНН</label>
                <input type="number" name="inn" class="form-control text-white" id="inn">
            </div>
            <div class="mb-3">
                <label for="info">Общая информация</label>
                <input type="text" name="info" class="form-control text-white" id="info">
            </div>
            <div class="mb-3">
                <label for="ceo">Генеральный директор</label>
                <input type="text" name="ceo" class="form-control text-white" id="ceo">
            </div>
            <div class="mb-3">
                <label for="address">Адрес</label>
                <input type="text" name="address" class="form-control text-white" id="address">
            </div>
            <div class="mb-3">
                <label for="phone">Телефон</label>
                <input type="number" name="phone" class="form-control text-white" id="phone">
            </div>
            <div class="mb-3">
                <button class="btn btn-primary text-white" type="submit">Сохранить</button>
            </div>
        </form>
    </div>
@endsection
