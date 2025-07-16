<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('About Section') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-4 sm:space-y-6 bg-white">
            @if (session('status'))
                <div class="mb-4 text-green-600">{{ session('status') }}</div>
            @endif

            <form method="POST" action="{{ route('about.save') }}" enctype="multipart/form-data" class="space-y-6">
                @csrf

                <div>
                    <x-input-label for="title" :value="__('Title')" />
                    <x-text-input id="title" name="title" type="text" class="mt-1 block w-full"
                        :value="old('title', $about->title ?? '')" required />
                    <x-input-error :messages="$errors->get('title')" />
                </div>

                <div>
                    <x-input-label for="description" :value="__('Description')" />
                    <textarea name="description" rows="5" class="w-full border-gray-300 rounded">{{ old('description', $about->description ?? '') }}</textarea>
                    <x-input-error :messages="$errors->get('description')" />
                </div>

                <div>
                    <x-input-label for="image" :value="__('Image')" />
                    <input type="file" name="image" id="image" onchange="previewAboutImage(event)" class="block w-full" />
                    <x-input-error :messages="$errors->get('image')" />

                    @if (!empty($about?->image))
                        <div class="mt-4">
                            <p class="text-sm text-gray-500">Current Image:</p>
                            <img src="{{ asset('storage/' . $about->image) }}" class="w-40 rounded shadow">
                        </div>
                    @endif

                    <div class="mt-4">
                        <img id="image-preview" class="w-40 rounded shadow" style="display: none;" />
                    </div>
                </div>

                <x-primary-button>{{ $about ? __('Update') : __('Create') }}</x-primary-button>
            </form>
        </div>
    </div>

    <script>
        function previewAboutImage(event) {
            const preview = document.getElementById('image-preview');
            const reader = new FileReader();

            reader.onload = function (e) {
                preview.src = e.target.result;
                preview.style.display = 'block';
            };

            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
</x-app-layout>
