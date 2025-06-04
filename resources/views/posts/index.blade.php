@extends('layouts.app')

@section('title', 'ყველა პოსტი')

@section('content')
    <div class="container">
        <div class="header">
            <h2>ყველა პოსტი</h2>
            <a href="{{ route('posts.create') }}" class="btn-create">ახალი პოსტის შექმნა</a>
        </div>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="posts-grid">
            @forelse($posts as $post)
                <div class="post-card">
                    @if($post->image)
                        <img src="{{ $post->image }}" alt="{{ $post->title }}">
                    @endif
                    <h3>{{ $post->title }}</h3>
                    <p>{{ $post->content }}</p>
                    <small>თარიღი: {{ $post->created_at->format('Y-m-d H:i') }}</small>
                </div>
            @empty
                <p>პოსტები არ არის.</p>
            @endforelse
        </div>
    </div>
@endsection

