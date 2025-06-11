<x-app-layout>
    <div class="py-4">
        <div class="sm:px-6 lg:px-8" style="max-width: 75%; margin: auto;">
            <div class=" bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg justify-center text-white" style="padding: 2rem;">
                <h1 class="text-5xl mb-4" style="font-size: 3rem; line-height: 1;">{{ $post->title }}</h1>
                <div class="flex gap-4">
                    @if ($post->user->image)
                        <img src="{{  $post->user->imageUrl() }}" alt="{{ $post->user->name }}" class="w-12 h-12 rounded-full" style="width: 3rem; height: 3rem;">
                    @else
                        <img src="https://cdn12.picryl.com/photo/2016/12/31/head-the-dummy-avatar-people-b61cdb-1024.png" alt="Dummy avatar" class="w-12 h-12 rounded-full" style="width: 3rem; height: 3rem;">
                    @endif
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>