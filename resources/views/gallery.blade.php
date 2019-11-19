@extends('layouts.app')

@section('scripts')

@endsection

@section('styles')
@endsection

@section('content')
<div class="container bg-white fromDown gallery">
    <div class="row">
        <div class="col">
            <div class="masonry">
                @foreach($images as $img)
                    @php
                        $filename = explode('.', $img)
                    @endphp
                    <div class="card border-0 card-shadow mx-1">
                        <div class="card-content">
                            <a href={{ asset("images/gallery/" . $filename[0] . "." . $filename[1]) }} data-toggle="lightbox" data-gallery="gallery">
                                <img src={{ asset("images/gallery/500w/" . $filename[0] . "-500px." . $filename[1]) }} class="card-img rounded-0">
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
