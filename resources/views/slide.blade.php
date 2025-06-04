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
        <div class="posts-header">
            <h2>პოსტები</h2>
            <div>
                <a href="{{ route('posts.create') }}" class="btn-create">ახალი პოსტის შექმნა</a>
                <a href="{{ route('posts.index') }}" class="btn-view-all">ყველა პოსტის ნახვა</a>
            </div>
        </div>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="posts-grid">
            @forelse($posts->take(3) as $post)
                <div class="post-card">
                    @if($post->image)
                        <img src="{{ $post->image }}" alt="{{ $post->title }}">
                    @endif
                    <h3>{{ $post->title }}</h3>
                    <p>{{ $post->content }}</p>
                    <small>თარიღი: {{ $post->created_at ? $post->created_at->format('Y-m-d H:i') : $post['date'] ?? 'N/A' }}</small>
                </div>
            @empty
                <p>პოსტები არ არის.</p>
            @endforelse
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

    <style>
        .posts-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        .btn-create, .btn-view-all {
            background-color: #007bff;
            color: white;
            padding: 8px 16px;
            text-decoration: none;
            border-radius: 4px;
            margin-left: 10px;
        }
        .btn-create {
            background-color: #28a745;
        }
        .post-card img {
            width: 100%;
            height: 150px;
            object-fit: cover;
            border-radius: 4px;
            margin-bottom: 10px;
        }
        .alert-success {
            background-color: #d4edda;
            color: #155724;
            padding: 10px;
            border-radius: 4px;
            margin-bottom: 20px;
        }
    </style>
@endsection
