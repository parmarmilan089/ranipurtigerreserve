<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Add Event Section</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 bg-white p-6 shadow sm:rounded-lg">
            <form method="POST" action="{{ route('event-section.store') }}" enctype="multipart/form-data" class="space-y-6">
                @csrf

                <!-- Title -->
                <div>
                    <x-input-label for="title" :value="__('Title')" />
                    <x-text-input id="title" name="title" type="text" class="mt-1 block w-full" :value="old('title')" required />
                    @error('title')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Description -->
                <div>
                    <x-input-label for="description" :value="__('Description')" />
                    <textarea name="description" class="w-full border-gray-300 rounded">{{ old('description') }}</textarea>
                    @error('description')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Bullet Points -->
                <!-- Bullet Points -->
<div>
    <x-input-label :value="__('Bullet Points')" />
    <div id="bullet-container">
        @if(old('bullet_points'))
            @foreach(old('bullet_points') as $point)
                <div class="flex items-center gap-2 mb-2">
                    <input type="text" name="bullet_points[]" class="bullet-point w-full" value="{{ $point }}" />
                    <button type="button" class="text-red-600" onclick="removeBullet(this)">Remove</button>
                </div>
            @endforeach
        @else
            <div class="flex items-center gap-2 mb-2">
                <input type="text" name="bullet_points[]" class="bullet-point w-full" />
                <button type="button" class="text-red-600" onclick="removeBullet(this)">Remove</button>
            </div>
        @endif
    </div>
    <button type="button" onclick="addBullet()" class="text-blue-600">+ Add Bullet Point</button>

    @error('bullet_points')
        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
    @enderror
    @error('bullet_points.*')
        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
    @enderror
</div>

                <!-- Image -->
                <div>
                    <x-input-label for="image" :value="__('Image')" />
                    <input type="file" name="image" id="image" class="block w-full">
                    @error('image')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <x-primary-button>Save Event Section</x-primary-button>
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
