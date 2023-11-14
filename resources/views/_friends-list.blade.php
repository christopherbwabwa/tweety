<div class="bg-gray-200 border border-gray-300 rounded-lg py-4 px-6">
    <h3 class="font-bold text-xl mb-4">Following</h3>

    <ul>
        @auth
            @forelse (auth()->user()->follows as $user)
                <li class="{{ $loop->last ? '' : 'mb-4' }}">
                    <div>
                        <a href="{{ route('profile', $user) }}" class="flex items-center text-sm">
                            <img class="mr-2 rounded-full" src="{{ $user->avatar }}" width="40px" height="40px">

                            {{ $user->name }}
                        </a>
                        
                    </div>
                </li>
            @empty
            <p>No friends yet.</p>

            @endforelse
        @endauth

    </ul>
</div>
