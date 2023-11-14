@component('components.app')

    <header class="mb-2 relative">
        <div class="relative">

            <img src="/images/amaterasu.png" alt="">
            <img 
            src="{{ $user->avatar }}" 
            alt="Your avatar" 
            class="rounded-full mr-2 absolute bottom-0 transform -translate-x-1/2 translate-y-1/2"
            style="left: 50%"
            width="150px"

            >

        </div>

        <div class="flex justify-between items-center mb-6">
            <div style="max-width: 270px">
                <h2 class="font-bold text-2xl">{{ $user->name }}</h2>
                <p class="text-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
            </div>

            <div class="flex">
                @can('edit', $user)
                    
                    <a 
                        href="{{ $user->path('edit') }}" 
                        class="rounded-full border border-gray-300 py-2 px-4 text-black text-xs mr-3 hover:text-red-400"
                        >
                        Edit Profile
                    </a> 

                @endcan
                

                @component('components._follow-button', ['user' => $user])

                @endcomponent

            </div>
        </div>

        <p class="text-sm">
            Dus, beide die regering en die toesig geword van die volk en die verouderde definisie van demokrasie, demokrasie
            is die toesig van die regering deur die mense, verouderde
        </p>


    </header>


    @include('_timeline', [
        'tweets'=> $tweets
    ])


@endcomponent
