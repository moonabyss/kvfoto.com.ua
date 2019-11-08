@extends('layouts.app')

@section('scripts')

@endsection

@section('styles')
@endsection

@section('content')
<div class="container bg-white fromDown">
    <div class="row">
        <div class="col">
            <div class="masonry">
                @foreach($images as $img)
                <div class="">
                    <div class="card border-0 card-shadow">
                        <img src={{ "images/".$img }} class="card-img rounded-0 img-responsive">
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection

@section('last_scripts')
@endsection
