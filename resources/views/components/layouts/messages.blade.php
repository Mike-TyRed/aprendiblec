<div>
    @if (session('yellow'))
        <div class="flex justify-center ml-5 mt-5">
            <div class="rounded-xl bg-yellow-500 text-white w-fit h-fit p-1 shadow-md">
                {{ session('yellow') }}
            </div>
        </div>
    @endif

    @if (session('red'))
        <div class="flex justify-center ml-5 mt-5">
            <div class="rounded-xl bg-red-500 text-white w-fit h-fit p-1 shadow-md">
                {{ session('red') }}
            </div>
        </div>
    @endif

    @if (session('green'))
        <div class="flex justify-center ml-5 mt-5">
            <div class="rounded-xl bg-green-500 text-white w-fit h-fit p-1 shadow-md">
                {{ session('green') }}
            </div>
        </div>
    @endif
</div>
