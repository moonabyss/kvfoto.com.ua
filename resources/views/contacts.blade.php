@extends('layouts.app')

@section('scripts')
<script src='https://www.google.com/recaptcha/api.js' async defer ></script>
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
                <form class="contact-form" method="POST" autocomplete="off">
                @csrf
                    <div class="form-group py-4">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <input type="text" name="name" class="form-control my-2 p-2 input @error('name') is-invalid @enderror" value="{{ old('name') }}" placeholder="Имя *" required autocomplete="off" autofocus>
                        <label for="name" class="label">Имя</label>
                    </div>
                    <div class="form-group py-4">
                        @error('zvonilka')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <input type="text" name="zvonilka" class="form-control my-2 p-2 input @error('zvonilka') is-invalid @enderror" value="{{ old('zvonilka') }}" placeholder="Телефон *" required autocomplete="off">
                        <label for="zvonilka" class="label">Телефон</label>
                    </div>
                    <div class="form-group py-4">
                        @error('commentar')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <input type="text" name="commentar" class="form-control my-2 p-2 input @error('commentar') is-invalid @enderror" value="{{ old('commentar') }}" placeholder="Комментарий *" required autocomplete="off">
                        <label for="commentar" class="label">Комментарий</label>
                    </div>
                    <div class="row justify-content-center">
                        <div class="g-recaptcha form-group pt-5 justify-content-center" data-sitekey="6Lf-icMUAAAAAFsc35n5Re-mNmFlWT1mkvqLkQTV"></div>
                    </div>
                    <button type="submit" class="btn btn-block p-2 font-weight-bold text-uppercase my-5 submit-button">Отправить</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection

@section('last_scripts')
@endsection
