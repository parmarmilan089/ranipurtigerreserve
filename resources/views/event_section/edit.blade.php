<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Edit Event Section</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 bg-white p-6 shadow sm:rounded-lg">
            <form method="POST" action="{{ route('event-section.update', $event->id) }}" enctype="multipart/form-data" class="space-y-6">
                @csrf
                @method('PUT')

                <div>
                    <x-input-label for="title" :value="__('Title')" />
                    <x-text-input id="title" name="title" type="text" class="mt-1 block w-full" :value="old('title', $event->title)" required />
                    @error('title')
                        <div class="text-red-600 text-sm mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div>
                    <x-input-label for="description" :value="__('Description')" />
                    <textarea id="description" name="description" class="w-full border-gray-300 rounded" rows="4">{{ old('description', $event->description) }}</textarea>
                    @error('description')
                        <div class="text-red-600 text-sm mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div>
                    <x-input-label :value="__('Bullet Points')" />
                    <div id="bullet-container">
                        @foreach (($event->bullet_points ?? []) as $point)
                            <div class="bullet-input-group">
                                <input type="text" name="bullet_points[]" class="bullet-point w-full mt-1 mb-2 inline-block" value="{{ $point }}" />
                                <button type="button" class="delete-bullet text-red-600 ml-2" onclick="deleteBullet(this)">Delete</button>
                            </div>
                        @endforeach
                        @if (empty($event->bullet_points))
                            <div class="bullet-input-group">
                                <input type="text" name="bullet_points[]" class="bullet-point w-full mt-1 mb-2 inline-block" />
                                <button type="button" class="delete-bullet text-red-600 ml-2" onclick="deleteBullet(this)">Delete</button>
                            </div>
                        @endif
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
                    <input id="image" name="image" type="file" class="mt-1 block w-full" accept="image/*" />
                    @error('image')
                        <div class="text-red-600 text-sm mt-1">{{ $message }}</div>
                    @enderror
                    @if ($event->image)
                        <img src="{{ asset('storage/' . $event->image) }}" class="w-40 mt-4 rounded shadow">
                    @endif
                </div>

                <x-primary-button>Update Event Section</x-primary-button>
            </form>
        </div>
    </div>

    <script>
        function addBullet(value = '') {
            const container = document.getElementById('bullet-container');
            const group = document.createElement('div');
            group.className = 'bullet-input-group';
            group.innerHTML = `<input type=\"text\" name=\"bullet_points[]\" class=\"bullet-point w-full mt-1 mb-2 inline-block\" value=\"${value}\"> <button type=\"button\" class=\"delete-bullet text-red-600 ml-2\" onclick=\"deleteBullet(this)\">Delete</button>`;
            container.appendChild(group);
        }
        function deleteBullet(btn) {
            btn.parentElement.remove();
        }
    </script>
</x-app-layout>
