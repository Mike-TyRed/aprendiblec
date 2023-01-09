<nav>
    <ul class="navContainer">
        <li><a href="{{ route('home') }}" class="{{request()->routeIs('home') ? 'font-bold' : '' }}">Home</a></li>
        <li><a href="{{ route('posts.index') }}" class="{{request()->routeIs('posts.*') ? 'font-bold' : '' }}">Blog</a></li>
        <li><a href="{{ route('about') }}" class="{{request()->routeIs('about') ? 'font-bold' : '' }}">About</a></li>
        <li><a href="{{ route('contact') }}" class="{{request()->routeIs('contact') ? 'font-bold' : '' }}">Contact</a></li>
    </ul>
</nav>