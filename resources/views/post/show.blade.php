<x-app-layout>
    <style>
        .my-button {
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: color 0.3s, stroke 0.3s;
            color: grey;
        }

        .my-button:hover {
            color: white;
        }

        .my-button svg {
            stroke: grey;
            transition: stroke 0.3s;
        }

        .my-button:hover svg {
            stroke: white;
        }

        .profile-show {
            text-decoration: none;
        }

        .profile-show:hover {
            text-decoration: underline;
        }
    </style>
    <div class="py-4">
        <div class="sm:px-6 lg:px-8" style="max-width: 75%; margin: auto;">
            <div class=" bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg justify-center text-white"
                style="padding: 2rem;">
                <h1 class="text-5xl mb-4" style="font-size: 1.5rem; line-height: 1;">{{ $post->title }}</h1>

                <!-- User Avatar -->
                <div class="flex gap-4" style="gap: 1rem;">
                    <x-user-avatar :user="$post->user"/>
                    <div>
                        <div class="flex gap-2" style="gap: 0.5rem;">
                            <a href="{{ route('profile.show', $post->user) }}" class="profile-show">
                                {{ $post->user->name }}
                            </a>
                            &middot;
                            <a href="#" class="text-emerald-500" style="color: lightblue">Follow</a>
                        </div>

                        <div class="flex gap-2 text-sm text-gray-500">
                            {{ $post->readTime() }} min read
                            &middot;
                            {{ $post->created_at->format('M d, Y') }}
                        </div>
                    </div>
                </div>
                <!-- End User Avatar -->

                <!-- Clap Section -->
                <x-clap-button />
                <!-- End Clap Section -->

                <!-- Content Section-->
                <div class="mt-8" style="margin-top: 2rem;">
                    <img src="{{ $post->imageUrl() }}" alt="{{ $post->title }}" class="w-full" style="width: 100%;">

                    <div class="mt-4" style="margin-top: 1rem;">
                        {{ $post->content }}
                    </div>
                </div>
                <!-- End Content Section -->

                <!-- Category Section -->
                <div class="mt-8" style="margin-top: 2rem;">
                    <span class="px-4 py-2 bg-gray-800 rounded-2xl"
                        style="padding: 1rem 0.5 rem 1rem 0.5rem; border-radius: 1rem; background-color: gray; opacity: 0.5">
                        {{ $post->category->name }}
                    </span>
                </div>
                <!-- End Category Section -->

                <!-- Clap Section -->
                <x-clap-button />
                <!-- End Clap Section -->
            </div>
        </div>
    </div>
</x-app-layout>