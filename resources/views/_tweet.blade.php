<div class="flex p-4 {{ $loop->last ? '' : 'border-b border-b-gray-400' }}">
    <div class="mr-2 flex-shrink-0">
        <a href="{{ $tweet->user->path() }}">
            <img src="{{ $tweet->user->avatar }}" alt="" class="rounded-full mr-2" height="40px" width="40px">
        </a>
    </div>

    <div>

        <h5 class="font-bold mb-4">
            <a href="{{ $tweet->user->path() }}">
                {{ $tweet->user->name }}
            </a>

        </h5>

        <p class="text-sm mb-3"> {{ $tweet->body }}</p>

       @component('components.like-button', ['tweet' => $tweet])
           
       @endcomponent
    </div>
</div>
