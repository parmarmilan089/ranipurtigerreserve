<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Add Geographical Section</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 bg-white p-6 shadow sm:rounded-lg">
            <form method="POST" action="{{ route('geographical-section.store') }}" class="space-y-6" onsubmit="return prepareBulletPoints()">
                @csrf

                <div>
                    <x-input-label for="title" :value="__('Title')" />
                    <x-text-input id="title" name="title" type="text" class="mt-1 block w-full" :value="old('title')" required />
                    @error('title') <p class="text-red-600">{{ $message }}</p> @enderror
                </div>

                <div>
                    <x-input-label for="description" :value="__('Description')" />
                    <textarea name="description" class="w-full border-gray-300 rounded" rows="4">{{ old('description') }}</textarea>
                    @error('description') <p class="text-red-600">{{ $message }}</p> @enderror
                </div>

                <div>
                    <x-input-label for="bullet_title" :value="__('Bullet Title')" />
                    <x-text-input id="bullet_title" name="bullet_title" type="text" class="mt-1 block w-full" :value="old('bullet_title')" />
                    @error('bullet_title') <p class="text-red-600">{{ $message }}</p> @enderror
                </div>

                <div>
                    <x-input-label :value="__('Bullet Points')" />
                    <div id="bullet-container">
                        <div class="flex items-center mb-2">
                            <input type="text" name="bullet_points[]" class="bullet-point w-full" />
                            <button type="button" onclick="removeBullet(this)" class="ml-2 text-red-600 font-bold">×</button>
                        </div>
                    </div>
                    <button type="button" onclick="addBullet()" class="text-blue-600 mt-2">+ Add Bullet Point</button>
                    @error('bullet_points') <p class="text-red-600">{{ $message }}</p> @enderror
                </div>

                <x-primary-button>Save Section</x-primary-button>
            </form>
        </div>
    </div>

    <script>
        function addBullet() {
            const container = document.getElementById('bullet-container');
            const div = document.createElement('div');
            div.className = 'flex items-center mb-2';
            
            const input = document.createElement('input');
            input.type = 'text';
            input.name = 'bullet_points[]';
            input.className = 'bullet-point w-full';

            const btn = document.createElement('button');
            btn.type = 'button';
            btn.innerText = '×';
            btn.className = 'ml-2 text-red-600 font-bold';
            btn.onclick = function () { removeBullet(btn); };

            div.appendChild(input);
            div.appendChild(btn);

            container.appendChild(div);
        }

        function removeBullet(button) {
            button.parentElement.remove();
        }

        function prepareBulletPoints() {
            // Optional: Validate if at least one bullet point is filled (not required though)
            const inputs = document.querySelectorAll('.bullet-point');
            let hasValue = false;
            inputs.forEach(input => {
                if (input.value.trim() !== '') {
                    hasValue = true;
                }
            });

            // If you want to enforce at least one bullet point uncomment below
            // if (!hasValue) {
            //     alert('Please add at least one bullet point.');
            //     return false;
            // }
            return true;
        }
    </script>
</x-app-layout>
