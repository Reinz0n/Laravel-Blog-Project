<x-app-layout>
    <div class="py-4">
        <div class="sm:px-6 lg:px-8" style="max-width: 75%; margin: auto;">
            <div class=" bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg justify-center text-white"
                style="padding: 2rem;">
                <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">

                    {{-- @dump($errors) --}}
                    @csrf

                    <!-- Image -->
                    <div>
                        <x-input-label for="image" :value="__('Image')" />
                        <x-text-input id="image" class="block mt-1 w-full" type="file" name="image"
                            :value="old('image')" autofocus />
                        <x-input-error :messages="$errors->get('image')" class="mt-2" />
                    </div>

                    <!-- Title -->
                    <div class="mt-4">
                        <x-input-label for="title" :value="__('Title')" />
                        <x-text-input id="title" class="block mt-1 w-full" type="text" name="title"
                            :value="old('title')" autofocus />
                        <x-input-error :messages="$errors->get('title')" class="mt-2" />
                    </div>

                    <!-- Category -->
                    <div class="mt-4">
                        <x-input-label for="category_id" :value="__('Category')" />
                        <select class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" name="category_id" id="category_id">
                            <option value="">Select a Category</option>
                            @foreach ( $categories as $category )
                                <option value="{{ $category->id }}" @selected(old('category_id') == $category->id)>
                                    {{  $category->name }}
                                </option>
                            @endforeach
                        </select>
                        <x-input-error :messages="$errors->get('category_id')" class="mt-2" />
                    </div>

                    <!-- Content -->
                    <div class="mt-4">
                        <x-input-label for="content" :value="__('Content')" />
                        <x-input-textarea id="content" class="block mt-1 w-full" type="text" name="content">{{ old('content') }}</x-input-textarea>
                        <x-input-error :messages="$errors->get('content')" class="mt-2" />
                    </div>

                    <x-primary-button class="mt-4">
                        Submit
                    </x-primary-button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>