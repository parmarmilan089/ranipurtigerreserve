<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Info Section') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 bg-white p-6 shadow sm:rounded-lg">
            <form method="POST" action="{{ route('info-section.store') }}" enctype="multipart/form-data" class="space-y-6">
                @csrf

                <div>
                    <x-input-label for="title" :value="__('Title')" />
                    <x-text-input id="title" name="title" type="text" class="mt-1 block w-full" :value="old('title')" required />
                    <x-input-error :messages="$errors->get('title')" />
                </div>

                <div>
                    <x-input-label for="short_description" :value="__('Short Description')" />
                    <textarea name="short_description" rows="3" class="w-full border-gray-300 rounded">{{ old('short_description') }}</textarea>
                    <x-input-error :messages="$errors->get('short_description')" />
                </div>

                <div>
                    <x-input-label for="image" :value="__('Image')" />
                    <input type="file" name="image" id="image" class="block w-full" onchange="previewInfoImage(event)">
                    <x-input-error :messages="$errors->get('image')" />

                    <!-- Image preview -->
                    <div class="mt-4">
                        <img id="image-preview" class="w-40 rounded shadow" style="display: none; width:100px" />
                    </div>
                </div>

                <div>
                    <x-input-label for="status" :value="__('Status')" />
                    <select name="status" class="block w-full border-gray-300 rounded">
                        <option value="1">Active</option>
                        <option value="0">Deactive</option>
                    </select>
                    <x-input-error :messages="$errors->get('status')" />
                </div>

                <x-primary-button>{{ __('Save Info Section') }}</x-primary-button>
            </form>
        </div>
    </div>

    <!-- JS for live preview -->
    <script>
        function previewInfoImage(event) {
            const input = event.target;
            const preview = document.getElementById('image-preview');

            if (input.files && input.files[0]) {
                const reader = new FileReader();

                reader.onload = function (e) {
                    preview.src = e.target.result;
                    preview.style.display = 'block';
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
</x-app-layout>
