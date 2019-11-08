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
                    <div class="card border-0 card-shadow mx-1">
                        <div class="card-content">
                            <a href={{ asset("images/".$img) }} data-toggle="lightbox" data-gallery="gallery">
                                <img src={{ asset("images/".$img) }} class="card-img rounded-0">
                            </a>
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
