<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Add Event Section</h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 bg-white p-6 shadow sm:rounded-lg">

            {{-- Display all validation errors --}}
            @if ($errors->any())
                <div class="mb-4 text-red-600">
                    <ul class="list-disc pl-5">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('event-section.store') }}"
                enctype="multipart/form-data" class="space-y-6" onsubmit="combineBullets()">
                @csrf

                {{-- Title --}}
                <div>
                    <x-input-label for="title" :value="__('Title')" />
                    <x-text-input id="title" name="title" type="text" class="mt-1 block w-full"
                        :value="old('title')" required />
                    @error('title')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Description --}}
                <div>
                    <x-input-label for="description" :value="__('Description')" />
                    <textarea name="description"
                        class="w-full border-gray-300 rounded">{{ old('description') }}</textarea>
                    @error('description')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Bullet Points --}}
                <div>
                    <x-input-label :value="__('Bullet Points')" />
                    <div id="bullet-container">
                        <div class="bullet-wrapper flex items-center gap-2 mb-2">
                            <input type="text" name="bullet_points[]" class="bullet-point w-full" />
                            <button type="button" class="text-red-500 delete-bullet"
                                onclick="removeBullet(this)">Delete</button>
                        </div>
                    </div>
                    <button type="button" onclick="addBullet()" class="text-blue-600">+ Add Bullet Point</button>
                    <input type="hidden" name="bullet_points" id="bullet_points_combined" />
                    @error('bullet_points')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Image --}}
                <div>
                    <x-input-label for="image" :value="__('Image')" />
                    <input type="file" name="image" id="image" class="block w-full">
                    @error('image')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Submit Button --}}
                <x-primary-button>Save Event Section</x-primary-button>
            </form>
        </div>
    </div>

    {{-- JavaScript --}}
    <script>
        function addBullet() {
            const container = document.getElementById('bullet-container');

            const wrapper = document.createElement('div');
            wrapper.className = 'bullet-wrapper flex items-center gap-2 mb-2';

            const input = document.createElement('input');
            input.type = 'text';
            input.name = 'bullet_points[]';
            input.className = 'bullet-point w-full';

            const deleteBtn = document.createElement('button');
            deleteBtn.type = 'button';
            deleteBtn.className = 'text-red-500 delete-bullet';
            deleteBtn.innerText = 'Delete';
            deleteBtn.onclick = function () {
                removeBullet(deleteBtn);
            };

            wrapper.appendChild(input);
            wrapper.appendChild(deleteBtn);
            container.appendChild(wrapper);
        }

        function removeBullet(button) {
            button.closest('.bullet-wrapper').remove();
        }

        function combineBullets() {
            const inputs = document.querySelectorAll('.bullet-point');
            const values = [...inputs].map(i => i.value.trim()).filter(Boolean);
            document.getElementById('bullet_points_combined').value = values.join(',');
        }
    </script>
</x-app-layout>
