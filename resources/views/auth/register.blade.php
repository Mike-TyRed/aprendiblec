<x-layouts.app title="Registrar usuario" meta-description="Formulario para registar nuevo usuario">

    <div class="mt-5 flex justify-center items-center">
        <div class="rounded-3xl p-10 shadow-lg text-lg">

            <form action="{{ route('register') }}" method="POST">

                <strong>Registrar nuevo usuario</strong>

                @csrf

                <input class="rounded-lg border flex flex-col mt-4 indent-2" name="name" type="text"
                    placeholder="Name" autofocus="autofocus" value="{{ old('name') }}">

                @error('name')
                    <br>
                    <small style="color:red">{{ $message }}</small>
                @enderror

                <input class="rounded-lg border flex flex-col mt-3 indent-2" name="email" type="text"
                    placeholder="Email" value="{{ old('email') }}">

                @error('email')
                    <br>
                    <small style="color:red">{{ $message }}</small>
                @enderror

                <input class="rounded-lg border flex flex-col mt-3 indent-2" name="password" type="password"
                    placeholder="Password">

                @error('password')
                    <br>
                    <small style="color:red">{{ $message }}</small>
                @enderror

                <input class="rounded-lg border flex flex-col mt-3 indent-2" name="password_confirmation"
                    type="password" placeholder="Password confirmation">

                @error('password_confirmation')
                    <br>
                    <small style="color:red">{{ $message }}</small>
                @enderror

                <div class="flex justify-center">
                    <button class="bg-green-500 hover:bg-green-600 text-indigo-50 mt-2 rounded-xl w-20 shadow-md"
                        type="submit">Register</button>
                </div>
                <div class="flex justify-center">
                    <a class="bg-gray-500 hover:bg-gray-600 shadow-md mt-2 rounded-xl text-center w-16 text-indigo-50"
                        href="{{ route('login') }}">Login</a>
                </div>

            </form>
        </div>
    </div>

</x-layouts.app>
