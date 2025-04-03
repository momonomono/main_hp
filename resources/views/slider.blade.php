@extends("layout.app")

@section('title','スライダー')

@section('content')
    <div class="l-content u-mt-3">
        <h1>スライダー</h1>

        <article class="u-mt-5">
            <ul class="p-gird__slider-nav">
                <li class="p-text__slider-item" >犬</li>
                <li class="p-text__slider-item" id="neko">猫</li>
            </ul>
        </article>

        <div class="p-gird__slider u-mt-3">
            <img src="{{ asset('img/inu.webp')  }}" 
            class="p-image__slider" >
        </div>

        <div class="p-gird__slideshow">
            <div class="p-gird__slideshow-container" id="js-container">
                <img src="{{ asset('img/inu.webp') }}" class="p-image__slider">
                <img src="{{ asset('img/neko.webp') }}" class="p-image__slider">
            </div>
        </div>
        <ul class="p-gird__slideshow-nav u-mt-3 u-mb-10">
            <li class="p-gird__slideshow-item">
                <img
                    class="p-image__slideshow" 
                    src="{{ asset('img/left.png') }}"
                    id="left"
                >
                    
            </li>
            <li class="p-gird__slideshow-item">
                <img
                    class="p-image__slideshow"
                    src="{{ asset('img/right.png') }}"
                    id="right"
                >
            </li>
        </ul>
    </div>

    
@endsection