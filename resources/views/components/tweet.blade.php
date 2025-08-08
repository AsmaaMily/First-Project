@props([
    'tweet',
])

<div class="card border font-bold">
    <a href="{{ route( 'tweet.view', $tweet->baseTweet->id) }}">
        <div class="card-body pb-1">
            <p class="mb-2 text-lg px-1">{{ $tweet->content }}</p>     
        </div>
    </a>
    <div class="card-actions p-4 pt-1 flex justify-between items-center">
        @if (request()->routeIs('home'))
            <a 
                class="btn btn-text btn-square" 
                href="{{ route( 'tweet.view', $tweet->id) }}">
                <span class="icon-[tabler--message] size-6 mx-2"></span>
            </a>
        @else
            <button 
                onclick="
                    document.querySelector(`input[name='parent_tweet_id']`).value = '{{ $tweet->id }}';
                    document.querySelector(`#content`).placeholder = 'ردًا على {{ $tweet->user->name }}';
                    document.querySelector(`#content`).focus();
                "
                class="btn btn-text  btn-square">
                <span class="icon-[tabler--message] size-6 mx-2"></span>
            </button>    
        @endif
    
        <a  href="{{ route('profile', $tweet->user->id) }}" class="flex items-center btn btn-text h-12 pl-0 gap-2">   
            <div class="font-semibold">
                {{ $tweet->user->name }}
            </div>
            <div class="avatar">
                <div class="size-10 rounded-full overflow-hidden">
                    <img src="/storage/{{ $tweet->user->avatar }}" alt="avatar" />
                </div>
            </div>
        </a>
    </div>
</div>
@if (request()->routeIs('tweet.view'))
<div class="ms-6 ps-2 space-y-2 border-s-3 border-white">
    @foreach ($tweet->childTweets as $childTweet)
        <x-tweet :tweet="$childTweet" />
    @endforeach    
</div> 
@endif
