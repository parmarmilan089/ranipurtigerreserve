<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Edit Geographical Section</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 bg-white p-6 shadow sm:rounded-lg">
            <form method="POST" action="{{ route('geographical-section.update', $section->id) }}" class="space-y-6">
                @csrf
                @method('PUT')

                <!-- Title -->
                <div>
                    <x-input-label for="title" :value="__('Title')" />
                    <x-text-input id="title" name="title" type="text" class="mt-1 block w-full" :value="old('title', $section->title)" required />
                    @error('title')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Description -->
                <div>
                    <x-input-label for="description" :value="__('Description')" />
                    <textarea name="description" class="w-full border-gray-300 rounded" rows="4">{{ old('description', $section->description) }}</textarea>
                    @error('description')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Bullet Title -->
                <div>
                    <x-input-label for="bullet_title" :value="__('Bullet Title')" />
                    <x-text-input id="bullet_title" name="bullet_title" type="text" class="mt-1 block w-full" :value="old('bullet_title', $section->bullet_title)" />
                    @error('bullet_title')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Bullet Points -->
                <div>
                    <x-input-label :value="__('Bullet Points')" />
                    <div id="bullet-container">
                        @foreach (json_decode($section->bullet_points, true) ?? [] as $point)
                            <div class="flex items-center gap-2 mb-2">
                                <input type="text" name="bullet_points[]" class="bullet-point w-full" value="{{ $point }}" />
                                <button type="button" class="text-red-600" onclick="removeBullet(this)">Remove</button>
                            </div>
                        @endforeach
                    </div>
                    <button type="button" onclick="addBullet()" class="text-blue-600 mt-2">+ Add Bullet Point</button>

                    @error('bullet_points')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                    @error('bullet_points.*')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <x-primary-button>Update Section</x-primary-button>
            </form>
        </div>
    </div>

    <script>
        function addBullet() {
            const container = document.getElementById('bullet-container');
            const wrapper = document.createElement('div');
            wrapper.className = 'flex items-center gap-2 mb-2';
            wrapper.innerHTML = `
                <input type="text" name="bullet_points[]" class="bullet-point w-full" />
                <button type="button" class="text-red-600" onclick="removeBullet(this)">Remove</button>
            `;
            container.appendChild(wrapper);
        }

        function removeBullet(button) {
            const wrapper = button.parentElement;
            wrapper.remove();
        }
    </script>
</x-app-layout>
