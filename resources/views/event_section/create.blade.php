<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Add Event Section</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 bg-white p-6 shadow sm:rounded-lg">
            <form method="POST" action="{{ route('event-section.store') }}" enctype="multipart/form-data" class="space-y-6">
                @csrf

                <div>
                    <x-input-label for="title" :value="__('Title')" />
                    <x-text-input id="title" name="title" type="text" class="mt-1 block w-full" :value="old('title')" required />
                </div>

                <div>
                    <x-input-label for="description" :value="__('Description')" />
                    <textarea name="description" class="w-full border-gray-300 rounded">{{ old('description') }}</textarea>
                </div>

                <div>
                    <x-input-label :value="__('Bullet Points')" />
                    <div id="bullet-container">
                        <div class="bullet-input-group">
                            <input type="text" name="bullet_points[]" class="bullet-point w-full mt-1 mb-2 inline-block" />
                            <button type="button" class="delete-bullet text-red-600 ml-2" onclick="deleteBullet(this)">Delete</button>
                        </div>
                    </div>
                    <button type="button" onclick="addBullet()" class="text-blue-600">+ Add Bullet Point</button>
                    @error('bullet_points')
                        <div class="text-red-600 text-sm mt-1">{{ $message }}</div>
                    @enderror
                    @error('bullet_points.*')
                        <div class="text-red-600 text-sm mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div>
                    <x-input-label for="image" :value="__('Image')" />
                    <input type="file" name="image" id="image" class="block w-full">
                </div>

                <x-primary-button>Save Event Section</x-primary-button>
            </form>
        </div>
    </div>

    <script>
        function addBullet(value = '') {
            const container = document.getElementById('bullet-container');
            const group = document.createElement('div');
            group.className = 'bullet-input-group';
            group.innerHTML = `<input type="text" name="bullet_points[]" class="bullet-point w-full mt-1 mb-2 inline-block" value="${value}"> <button type="button" class="delete-bullet text-red-600 ml-2" onclick="deleteBullet(this)">Delete</button>`;
            container.appendChild(group);
        }
        function deleteBullet(btn) {
            btn.parentElement.remove();
        }
    </script>
</x-app-layout>
