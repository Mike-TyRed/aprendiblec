<x-layouts.app title="Iniciar sesion" meta-description="Formulario para iniciar sesion">

    <div class="mt-5 flex justify-center items-center">
        <div class="rounded-3xl p-10 shadow-lg text-lg">

            <form action="{{ route('login') }}" method="POST">

                <strong>Iniciar sesion</strong>

                @csrf

                <input class="rounded-lg border flex flex-col mt-4 indent-2" name="email" type="email" placeholder="Email"
                    autofocus="autofocus" value="{{ old('email') }}">

                @error('email')
                    <small style="color:red">{{ $message }}</small>
                @enderror

                <input class="rounded-lg border flex flex-col mt-4 indent-2" name="password" type="password"
                    placeholder="Password" autofocus="autofocus" value="{{ old('password') }}">

                @error('password')
                    <small style="color:red">{{ $message }}</small>
                @enderror

                <div class="mt-4">
                    <input type="checkbox" name="remember">
                    <span class="ml-1">
                        Remember
                    </span>
                </div>

                <div class="flex justify-center">
                    <button class="bg-green-500 hover:bg-green-600 text-indigo-50 mt-2 rounded-3xl w-20 shadow-md"
                        type="submit">Login</button>
                </div>
                <div class="flex justify-center">
                    <a class="bg-gray-500 hover:bg-gray-600 shadow-md mt-2 rounded-xl text-center w-20 text-indigo-50"
                        href="{{ route('register') }}">Register</a>
                </div>

            </form>
        </div>
    </div>

</x-layouts.app>
