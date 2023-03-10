@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="my-3">
            <div class="d-flex">
                <div class="">
                    <button class="btn btn-primary">+</button>
                </div>

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
                <div class="">
                    <button class="btn btn-primary">+</button>
                </div>

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
                <div class="">
                    <button class="btn btn-primary">+</button>
                </div>

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
                <div class="">
                    <button class="btn btn-primary">+</button>
                </div>

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
                <div class="">
                    <button class="btn btn-primary">+</button>
                </div>

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
                <div class="">
                    <button class="btn btn-primary">+</button>
                </div>

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

                    <button type="submit" class="btn btn-danger text-light">Удалить</button>
                </form>
            @endauth

        </div>
    </div>
@endsection
