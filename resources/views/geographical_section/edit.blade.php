<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Edit Geographical Section</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 bg-white p-6 shadow sm:rounded-lg">
            <form method="POST" action="{{ route('geographical-section.update', $section->id) }}" class="space-y-6">
                @csrf
                @method('PUT')

                <div>
                    <x-input-label for="title" :value="__('Title')" />
                    <x-text-input id="title" name="title" type="text" class="mt-1 block w-full" :value="old('title', $section->title)" required />
                </div>

                <div>
                    <x-input-label for="description" :value="__('Description')" />
                    <textarea name="description" class="w-full border-gray-300 rounded" rows="4">{{ old('description', $section->description) }}</textarea>
                </div>

                <div>
                    <x-input-label for="bullet_title" :value="__('Bullet Title')" />
                    <x-text-input id="bullet_title" name="bullet_title" type="text" class="mt-1 block w-full" :value="old('bullet_title', $section->bullet_title)" />
                </div>

                <div>
                    <x-input-label :value="__('Bullet Points')" />
                    <div id="bullet-container">
                        @foreach (explode(',', $section->bullet_points ?? '') as $point)
                            <input type="text" name="bullet_points[]" class="bullet-point w-full mt-1 mb-2" value="{{ $point }}" />
                        @endforeach
                    </div>
                    <button type="button" onclick="addBullet()" class="text-blue-600">+ Add Bullet Point</button>
                    <input type="hidden" name="bullet_points_combined" id="bullet_points_combined" />
                </div>

                <x-primary-button onclick="combineBullets()">Update Section</x-primary-button>
            </form>
        </div>
    </div>

    <script>
        function addBullet() {
            const container = document.getElementById('bullet-container');
            const input = document.createElement('input');
            input.type = 'text';
            input.name = 'bullet_points[]';
            input.className = 'bullet-point w-full mt-1 mb-2';
            container.appendChild(input);
        }

        function combineBullets() {
            const inputs = document.querySelectorAll('.bullet-point');
            const values = [...inputs].map(i => i.value).filter(Boolean);
            document.getElementById('bullet_points_combined').value = values.join(',');
        }
    </script>
</x-app-layout>
