<x-app>
    <header class="mb-6 relative">
        <div class="relative">
            <img src="/images/default-profile-banner.jpg" alt="" class="mb-2">
    
            <img src="{{ $user->avatar }}" alt="" 
            class="rounded-full mr-2 absolute bottom-0 transform -translate-x-1/2 translate-y-1/2"
            style="left:50%;" 
            width="150">
        </div>

        <div class="flex justify-between items-center mb-6">
            
            <div>
                <h2 class="font-bold text-2xl mb-0">{{ $user->name }}</h2>
                <p class="text-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
            </div>

            <div class="flex">
                <a href="" class="rounded-full border border-gray-300 py-2 px-2 text-black text-xs mr-2">Edit Profile</a>
                
                <x-follow-button :user="$user"></x-follow-button>

            </div>

        </div>

        <p class="text sm">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, fuga eligendi et vero excepturi ab quos sint non recusandae quasi cum unde sed iusto sequi provident aperiam facere voluptatum beatae!
        </p>

    </header>

    @include('_timeline', [
        'tweets' => $user->tweets
    ])
    
</x-app>
