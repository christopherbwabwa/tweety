@component('components.app')
    <form method="POST" action="{{ $user->path() }}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')


        <div class="mb-6">
            <label for="name" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                Name
            </label>
            <input class="border border-gray-400 p-2 w-full" type="text" name="name" id="name"
                value="{{ $user->name }}" required>
        </div>


        @error('name')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
        @enderror

        <div class="mb-6">
            <label for="username" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                Username
            </label>
            <input class="border border-gray-400 p-2 w-full" type="text" name="username" id="username"
                value="{{ $user->username }}" required>
        </div>


        @error('username')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
        @enderror


        <div class="mb-6">

            <label for="avatar" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                Avatar
            </label>

            <div class="flex">

                <input class="border border-gray-400 p-2 w-full" type="file" name="avatar" id="avatar">

                <img src="{{ $user->avatar }}" alt="your avatar" width="40px">

            </div>
            @error('avatar')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror


        </div>

        <div class="mb-6">
            <label for="email" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                Email
            </label>
            <input class="border border-gray-400 p-2 w-full" type="email" name="email" id="email"
                value="{{ $user->email }}" required>
        </div>


        @error('email')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
        @enderror


        <div class="mb-6">
            <label for="password" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                Password
            </label>
            <input class="border border-gray-400 p-2 w-full" type="password" name="password" id="password" required>
        </div>


        @error('password')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
        @enderror

        <div class="mb-6">
            <label for="password_confirmation" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                Password confirmation
            </label>
            <input class="border border-gray-400 p-2 w-full" type="password" name="password_confirmation"
                id="password_confirmation" required>
        </div>


        @error('password_confirmation')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
        @enderror

        <div class="mb-6">
            <button type="submit" class="bg-blue-500 text-white rounded py-2 px-4 hover:bg-blue-500">
                Submit
            </button>

            <a href="{{ $user->path() }}" class="hover:underline text-red-500 ml-4">Cancel</a>
        </div>
    </form>
@endcomponent
