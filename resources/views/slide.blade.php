@extends('layouts.app')

@section('title', 'სლაიდი და პოსტები')

@section('content')
    <div class="slideshow-container">
        @foreach($slides as $index => $slide)
            <div class="slide">
                <img src="{{ $slide['image'] }}">
            </div>
        @endforeach

        <a class="prev" onclick="changeSlide(-1)">&#10094;</a>
        <a class="next" onclick="changeSlide(1)">&#10095;</a>
    </div>

    <div class="posts-container">
        <h2>პოსტები</h2>
        <div class="posts-grid">
            @foreach($posts as $post)
                <div class="post-card">
                    <h3>{{ $post['title'] }}</h3>
                    <p>{{ $post['content'] }}</p>
                    <small>თარიღი: {{ $post['date'] }}</small>
                </div>
            @endforeach
        </div>
    </div>

    <script>
        let slideIndex = 0;
        showSlides(slideIndex);

        function changeSlide(n) {
            showSlides(slideIndex += n);
        }

        function showSlides(n) {
            let slides = document.getElementsByClassName("slide");

            if (n >= slides.length) {slideIndex = 0}
            if (n < 0) {slideIndex = slides.length - 1}

            for (let i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }

            slides[slideIndex].style.display = "block";
        }
    </script>
@endsection
