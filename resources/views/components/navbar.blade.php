<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<nav class="navbar">
    <div class="navbar-container">
        <div class="navbar-brand">
            <img src="https://institutes.gtu.ge/images/logos/1.png" class="navbar-logo">
            <span class="navbar-title">@yield('title', 'Laravel პროექტი')</span>
        </div>
        <div>
            <a href="{{ route('home') }}" class="navbar-link {{ request()->routeIs('home') ? 'active' : '' }}">მთავარი</a>
            <a href="{{ route('about') }}" class="navbar-link {{ request()->routeIs('about') ? 'active' : '' }}">ჩვენს შესახებ</a>
        </div>
    </div>
</nav>
