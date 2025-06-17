<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg text-white">
                <div class="flex">
                    <div class="flex-1 pr-8" style="padding-right: 2rem;">
                        <h1 class="text-5xl" style="font-size: 3rem; line-height: 1;">{{ $user->name }}</h1>

                        <div class="mt-8" style="margin-top: 2rem;">
                            @forelse ($posts as $p)
                                <x-post-item :post="$p"></x-post-item>
                            @empty
                                <div class="text-center text-gray-400" style="padding-top: 4rem; padding-bottom: 4rem;">
                                    No Posts Found
                                </div>
                            @endforelse
                        </div>
                    </div>
                    <x-follow-ctr :user="$user">
                        <x-user-avatar :user="$user" />
                        <h3 style="margin-top: 0.5rem;">{{ $user->name }}</h3>
                        <p class="text-gray-400">
                            <span x-text="followersCount"></span> followers</p>
                        <p>
                            {{ $user->bio }}
                        </p>

                        @if(auth()->user() && auth()->user()->id !== $user->id)
                        <div class="mt-4" style="margin-top: 1rem">
                            <button @click="follow()" class="rounded-full py-2 px-4 text-white" x-text="following ? 'Unfollow' : 'Follow'"
                                style="background-color: white; color:black; border-radius: 625rem;">
                            </button>
                        </div>
                        @endif
                    </x-follow-ctr>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>