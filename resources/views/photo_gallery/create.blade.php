<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Add Photo to Gallery</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 bg-white p-6 shadow sm:rounded-lg">
            <form method="POST" action="{{ route('photo-gallery.store') }}" enctype="multipart/form-data">
                @csrf

                <div class="mb-4">
                    <x-input-label for="image" :value="__('Photo')" />
                    <input type="file" name="image" id="image" class="block w-full border-gray-300 rounded mt-2" accept="image/*" required onchange="previewImage(event)">
                    <x-input-error :messages="$errors->get('image')" class="mt-2" />
                </div>

                <div class="mb-4">
                    <img id="preview" src="#" alt="Preview" style="display:none; max-height: 200px;" class="mt-4 rounded shadow">
                </div>

                <x-primary-button>Upload Photo</x-primary-button>
            </form>
        </div>
    </div>

    <script>
        function previewImage(event) {
            const output = document.getElementById('preview');
            output.src = URL.createObjectURL(event.target.files[0]);
            output.style.display = 'block';
        }
    </script>
</x-app-layout>
