<ul class="flex text-sm font-medium text-center justify-center" style="display: flex; flex-wrap: wrap;">
    <li class="me-2">
        <a href="/" class="{{ request('category') ? 'inline-block px-4 py-2 rounded-lg text-gray-200 hover:bg-gray-700 hover:text-white transition' : 'inline-block px-4 py-2 rounded-lg bg-white text-black active' }} ">All
        </a>
    </li>
    @forelse ($categories as $category)
        <li class="me-2">
            <a href="{{ route('post.byCategory', $category) }}" class="{{ Route::currentRouteNamed('post.byCategory') && request('category')->id == $category->id ? 'inline-block px-4 py-2 rounded-lg bg-white text-black active' : 'inline-block px-4 py-2 rounded-lg text-gray-200 hover:bg-gray-700 hover:text-white transition' }}">{{ $category->name }}
            </a>
        </li>
    @empty
        {{ $slot }}
    @endforelse
</ul>