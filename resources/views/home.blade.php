@extends('layouts.app')

@section('title', 'მთავარი გვერდი')

@section('content')
    <h1 style="text-align: center;">მთავარი გვერდი</h1>
    <div style="display: flex; align-items: center; justify-content: center; margin-top: 20px;">
        <div>
            <p>ეს არის Laravel-ის პროექტის მთავარი გვერდი.</p>
            <p>ხილის ჩამონათვალი:</p>
                @foreach($xili as $xili)
                    <span>{{ $xili }}</xpan>
                @endforeach
            <p>გადადი <a href="{{ route('about') }}"><b>"ჩვენს შესახებ"</b></a> გვერდზე.</p>
        </div>
    </div>
@endsection
