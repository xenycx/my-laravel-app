@extends('layouts.app')

@section('title', 'ჩვენს შესახებ')

@section('content')
    <h1 style="text-align: center;">ჩვენს შესახებ</h1>
    <div style="display: flex; align-items: center; justify-content: center; margin-top: 20px;">
        <img src="https://institutes.gtu.ge/images/logos/1.png" style="width: 100px; margin-right: 20px;">
        <div>
            @foreach($names as $name)
                <span>{{ $name }}</span>
            @endforeach
        </div>
    </div>
@endsection
