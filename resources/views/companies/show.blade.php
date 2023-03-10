@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="my-3">
            <div class="d-flex">
                @auth
                    <div class="">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#noteModal"
                                data-bs-property="name">+
                        </button>
                    </div>
                @endauth

                <div class="ms-3 flex-grow-1">
                    <div>
                        <h2 class="text-primary fw-bold">{{ $company->name }}</h2>
                    </div>
                    <div>
                        @foreach($notes as $note)
                            @if($note->property == 'name')
                                <div>
                                    <span>
                                        {{ $note->created_at }}
                                    </span>
                                    <span class="text-primary">
                                    {{ $note->getUser->name }}
                                    </span>
                                    <span>
                                    {{ $note->note }}
                                    </span>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <div class="my-3">
            <div class="d-flex">
                @auth
                    <div class="">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#noteModal"
                                data-bs-property="inn">+
                        </button>
                    </div>
                @endauth

                <div class="ms-3 flex-grow-1">
                    <div>
                        <div class="text-primary h4">
                            ИНН
                        </div>
                        <div>
                            {{ $company->inn }}
                        </div>
                    </div>
                    <div>
                        @foreach($notes as $note)
                            @if($note->property == 'inn')
                                <div>
                                    <span>
                                        {{ $note->created_at }}
                                    </span>
                                    <span class="text-primary">
                                    {{ $note->getUser->name }}
                                    </span>
                                    <span>
                                    {{ $note->note }}
                                    </span>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <div class="my-3">
            <div class="d-flex">
                @auth
                    <div class="">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#noteModal"
                                data-bs-property="info">+
                        </button>
                    </div>
                @endauth

                <div class="ms-3 flex-grow-1">
                    <div>
                        <div class="text-primary h4">
                            Общая информация
                        </div>
                        <div>
                            {{ $company->info }}
                        </div>
                    </div>
                    <div>
                        @foreach($notes as $note)
                            @if($note->property == 'info')
                                <div>
                                    <span>
                                        {{ $note->created_at }}
                                    </span>
                                    <span class="text-primary">
                                    {{ $note->getUser->name }}
                                    </span>
                                    <span>
                                    {{ $note->note }}
                                    </span>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <div class="my-3">
            <div class="d-flex">
                @auth
                    <div class="">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#noteModal"
                                data-bs-property="address">+
                        </button>
                    </div>
                @endauth

                <div class="ms-3 flex-grow-1">
                    <div>
                        <div class="text-primary h4">
                            Адрес
                        </div>
                        <div>
                            {{ $company->address }}
                        </div>
                    </div>
                    <div>
                        @foreach($notes as $note)
                            @if($note->property == 'address')
                                <div>
                                    <span>
                                        {{ $note->created_at }}
                                    </span>
                                    <span class="text-primary">
                                    {{ $note->getUser->name }}
                                    </span>
                                    <span>
                                    {{ $note->note }}
                                    </span>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <div class="my-3">
            <div class="d-flex">
                @auth
                    <div class="">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#noteModal"
                                data-bs-property="phone">+
                        </button>
                    </div>
                @endauth

                <div class="ms-3 flex-grow-1">
                    <div>
                        <div class="text-primary h4">
                            Телефон
                        </div>
                        <div>
                            {{ $company->phone }}
                        </div>
                    </div>
                    <div>
                        @foreach($notes as $note)
                            @if($note->property == 'phone')
                                <div>
                                    <span>
                                        {{ $note->created_at }}
                                    </span>
                                    <span class="text-primary">
                                    {{ $note->getUser->name }}
                                    </span>
                                    <span>
                                    {{ $note->note }}
                                    </span>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <div class="my-3">
            <div class="d-flex">
                @auth
                    <div class="">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#noteModal"
                                data-bs-property="ceo">+
                        </button>
                    </div>
                @endauth

                <div class="ms-3 flex-grow-1">
                    <div>
                        <div class="text-primary h4">
                            Генеральный директор
                        </div>
                        <div>
                            {{ $company->ceo }}
                        </div>
                    </div>
                    <div>
                        @foreach($notes as $note)
                            @if($note->property == 'ceo')
                                <div>
                                    <span>
                                        {{ $note->created_at }}
                                    </span>
                                    <span class="text-primary">
                                    {{ $note->getUser->name }}
                                    </span>
                                    <span>
                                    {{ $note->note }}
                                    </span>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <div class="my-3">
            <div class="d-flex">
                @auth
                    <div class="">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#noteModal"
                                data-bs-property="company">+
                        </button>
                    </div>
                @endauth

                <div class="ms-3 flex-grow-1">
                    <div class="text-primary h4">
                        Комментарии о компании
                    </div>
                    <div>
                        @foreach($notes as $note)
                            @if($note->property == 'company')
                                <div>
                                    <span>
                                        {{ $note->created_at }}
                                    </span>
                                    <span class="text-primary">
                                    {{ $note->getUser->name }}
                                    </span>
                                    <span>
                                    {{ $note->note }}
                                    </span>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex">

            @auth
                <form action="{{ route('companies.destroy', $company->id) }}" method="POST">
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger text-light">Удалить компанию</button>
                </form>
            @endauth

        </div>
    </div>

    <div class="modal fade text-dark" id="noteModal" tabindex="-1" aria-labelledby="noteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form class="modal-content" action="{{ route('createNote') }}" method="POST">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="noteModalLabel">Оставить комментарий</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @csrf
                    <input type="text" class="form-control" id="company_id" name="company_id" value="{{ $company->id }}"
                           hidden>
                    <input type="text" class="form-control" id="user_id" name="user_id" value="{{ Auth::user()->id }}"
                           hidden>
                    <input type="text" class="form-control" id="property" name="property" value="" hidden>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Комментарий</label>
                        <textarea class="form-control bg-white" id="message-text" name="note"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                    <button type="submit" class="btn btn-primary">Создать комментарий</button>
                </div>
            </form>
        </div>
    </div>
@endsection
