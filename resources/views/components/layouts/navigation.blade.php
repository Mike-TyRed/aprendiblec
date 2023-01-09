<nav>
    <ul class="navContainer">
        <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'font-bold' : '' }}">Home</a></li>
        <li><a href="{{ route('posts.index') }}" class="{{ request()->routeIs('posts.*') ? 'font-bold' : '' }}">Blog</a>
        </li>
        <li><a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'font-bold' : '' }}">About</a></li>
        <li><a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'font-bold' : '' }}">Contact</a>
        </li>

        @guest
            <li><a href="{{ route('register') }}"
                    class="{{ request()->routeIs('register') ? 'font-bold' : '' }}">Registrar</a></li>
            <li class=" text-center bg-green-500 hover:bg-green-600 text-indigo-50 rounded-3xl w-16 shadow-md"><a href="{{ route('login') }}" class="{{ request()->routeIs('Login') ? 'font-bold' : '' }}">Login</a></li>
        @endguest

        @auth
            <form class="bg-red-500 rounded-3xl p-1 ml-2 hover:bg-red-700 shadow-md text-indigo-50"
                action="{{ route('logout') }}" method="POST">
                @csrf
                <button>Logout</button>
            </form>
        @endauth

    </ul>
</nav>
