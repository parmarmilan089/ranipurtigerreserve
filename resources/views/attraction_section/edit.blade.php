<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Attraction Section') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 bg-white p-6 shadow sm:rounded-lg">
            <form method="POST" action="{{ route('attraction-section.update', $attraction->id) }}" enctype="multipart/form-data" class="space-y-6">
                @csrf
                @method('PUT')

                <div>
                    <x-input-label for="title" :value="__('Title')" />
                    <x-text-input id="title" name="title" type="text" class="mt-1 block w-full" :value="old('title', $attraction->title)" required />
                    <x-input-error :messages="$errors->get('title')" />
                </div>

                <div>
                    <x-input-label for="button_text" :value="__('Button Text')" />
                    <x-text-input id="button_text" name="button_text" type="text" class="mt-1 block w-full" :value="old('button_text', $attraction->button_text)" />
                    <x-input-error :messages="$errors->get('button_text')" />
                </div>

                <div>
                    <x-input-label for="image" :value="__('Image')" />
                    <input type="file" name="image" id="image" class="block w-full" onchange="previewAttractionImage(event)">
                    <x-input-error :messages="$errors->get('image')" />

                    @if ($attraction->image)
                        <div class="mt-4">
                            <p class="text-sm text-gray-500 mb-1">Current Image:</p>
                            <img src="{{ asset('storage/' . $attraction->image) }}" class="w-40 rounded shadow">
                        </div>
                    @endif

                    <div class="mt-4">
                        <img id="image-preview" class="w-40 rounded shadow" style="display: none;" />
                    </div>
                </div>

                <x-primary-button>{{ __('Update Attraction Section') }}</x-primary-button>
            </form>
        </div>
    </div>

    <script>
        function previewAttractionImage(event) {
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
