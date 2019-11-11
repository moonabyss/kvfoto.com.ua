@extends('layouts.app')

@section('scripts')

@endsection

@section('styles')
@endsection

@section('content')
<section class="contacts p-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-5 col-8 ml-lg-0 mx-auto pb-4 fromDown">
                <h3 class="display-5 mb-3 text-white">
                    Напишите мне
                </h3>
                <form class="contact-form">
                    <div class="form-group py-4">
                        <input type="text" class="form-control my-2 p-2 input" placeholder="Имя *" required>
                        <label for="name" class="label">Имя</label>
                    </div>
                    <div class="form-group py-4">
                        <input type="text" class="form-control my-2 p-2 input" placeholder="Телефон *" required>
                        <label for="phone" class="label">Телефон</label>
                    </div>
                    <div class="form-group py-4">
                        <input type="text" class="form-control my-2 p-2 input" placeholder="Какое событие">
                        <label for="event" class="label">Какое событие</label>
                    </div>
                    <button type="submit" class="btn btn-block p-2 font-weight-bold text-uppercase mt-5 submit-button">Отправить</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection

@section('last_scripts')
@endsection
