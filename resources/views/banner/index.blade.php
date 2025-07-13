<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Banner List') }}
            </h2>

            <a href="{{ route('banner.create') }}"
                class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                + Add Banner
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="bg-white p-6 shadow sm:rounded-lg">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-lg font-medium text-gray-900">All Banners</h3>
                </div>

                @if (session('status') === 'banner-deleted')
                <div class="mb-4 text-sm text-green-600">
                    {{ __('Banner deleted successfully.') }}
                </div>
                @endif

                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200" style="width: 100%;">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">#</th>
                                <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Title</th>
                                <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Description
                                </th>
                                <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Image</th>
                                <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @forelse ($banners as $index => $banner)
                            <tr>
                                <td class="px-4 py-2 text-sm text-gray-900">{{ $index + 1 }}</td>
                                <td class="px-4 py-2 text-sm text-gray-900">{{ $banner->title }}</td>
                                <td class="px-4 py-2 text-sm text-gray-600">{{ Str::limit($banner->short_description,
                                    50) }}</td>
                                <td class="px-4 py-2">
                                    @if($banner->banner_image)
                                    <img src="{{ asset('storage/' . $banner->banner_image) }}" alt="Banner Image"
                                        class="w-24 rounded" width="100px">
                                    @else
                                    <span class="text-sm text-gray-500">No Image</span>
                                    @endif
                                </td>
                                <td class="px-4 py-2 text-sm">
                                    <a href="{{ route('banner.edit', $banner->id) }}"
                                        class="text-indigo-600 hover:underline mr-2">Edit</a>

                                    <form action="{{ route('banner.destroy', $banner->id) }}" method="POST"
                                        class="inline-block"
                                        onsubmit="return confirm('Are you sure to delete this banner?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:underline">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="5" class="px-4 py-4 text-center text-sm text-gray-500">No banners found.
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                @if($banners->hasPages())
                <div class="mt-4">
                    {{ $banners->links() }}
                </div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
