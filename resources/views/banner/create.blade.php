<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Banner') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-4 sm:space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <section>
                        <header>
                            <h2 class="text-lg font-medium text-gray-900">
                                {{ __('Add Banner') }}
                            </h2>

                            <p class="mt-1 text-sm text-gray-600">
                                {{ __("Create a new banner with title, description, and image.") }}
                            </p>
                        </header>

                        <form method="POST" action="{{ route('banner.store') }}" enctype="multipart/form-data" class="mt-6 space-y-6">
                            @csrf

                            <div>
                                <x-input-label for="title" :value="__('Title')" />
                                <x-text-input id="title" name="title" type="text" class="mt-1 block w-full"
                                    :value="old('title')" required autofocus />
                                <x-input-error class="mt-2" :messages="$errors->get('title')" />
                            </div>

                            <div>
                                <x-input-label for="short_description" :value="__('Short Description')" />
                                <textarea id="short_description" name="short_description" rows="3"
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">{{ old('short_description') }}</textarea>
                                <x-input-error class="mt-2" :messages="$errors->get('short_description')" />
                            </div>

                            <div>
                                <x-input-label for="button_text" :value="__('Button Text')" />
                                <x-text-input id="button_text" name="button_text" type="text" class="mt-1 block w-full"
                                    :value="old('button_text')" />
                                <x-input-error class="mt-2" :messages="$errors->get('button_text')" />
                            </div>

                            <div>
                                <x-input-label for="banner_image" :value="__('Banner Image')" />
                                <x-text-input id="banner_image" name="banner_image" type="file"
                                    class="mt-1 block w-full" onchange="previewBannerImage(event)" />
                                <x-input-error class="mt-2" :messages="$errors->get('banner_image')" />

                                <!-- Image preview -->
                                <div class="mt-4">
                                    <img id="banner-preview" class="w-full max-w-xs rounded shadow" style="display: none;" />
                                </div>
                            </div>

                            <div class="flex items-center gap-4">
                                <x-primary-button>{{ __('Save Banner') }}</x-primary-button>

                                @if (session('status') === 'banner-saved')
                                    <p x-data="{ show: true }" x-show="show" x-transition
                                        x-init="setTimeout(() => show = false, 2000)" class="text-sm text-gray-600">
                                        {{ __('Banner saved.') }}
                                    </p>
                                @endif
                            </div>
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript for image preview -->
    <script>
        function previewBannerImage(event) {
            const input = event.target;
            const preview = document.getElementById('banner-preview');

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
