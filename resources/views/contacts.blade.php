@extends('layouts.app')

@section('scripts')

@endsection

@section('styles')
@endsection

@section('content')
<section class="contacts p-5 contactsFromLeft">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-5 col-sm-10 col ml-lg-0 mx-auto pb-4 fromDown">
                <h3 class="display-5 mb-3 text-white">
                    Напишите мне
                </h3>
                <form class="contact-form" method="POST">
                @csrf
                    <div class="form-group py-4">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <input type="text" name="name" class="form-control my-2 p-2 input" placeholder="Имя *">
                        <label for="name" class="label">Имя</label>
                    </div>
                    <div class="form-group py-4">
                        @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <input type="text" name="phone" class="form-control my-2 p-2 input" placeholder="Телефон *" id="phone">
                        <label for="phone" class="label">Телефон</label>
                    </div>
                    <div class="form-group py-4">
                        <input type="text" class="form-control my-2 p-2 input" placeholder="Комментарий">
                        <label for="commentar" class="label">Комментарий</label>
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
