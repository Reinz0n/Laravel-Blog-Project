<x-app-layout>
    <div class="py-4">
        <div class="sm:px-6 lg:px-8" style="max-width: 75%; margin: auto;">
            <div class=" bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg justify-center">
                <div class="p-4">
                    <x-category-tabs>
                        No Categories
                    </x-category-tabs>
                </div>
            </div>
            <div class="mt-8">
                @forelse ($posts as $p)
                    <x-post-item :post="$p"></x-post-item>
                @empty
                    <div class="text-center text-gray-400" style="padding-top: 4rem; padding-bottom: 4rem;">
                        No Posts Found
                    </div>
                @endforelse
            </div>

            {{ $posts->onEachSide(4)->links() }}
        </div>
    </div>
</x-app-layout>