<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Attraction Sections') }}
            </h2>

            <a href="{{ route('attraction-section.create') }}"
                class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                + Add Attraction Section
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 bg-white p-6 shadow sm:rounded-lg">
            @if (session('status'))
                <div class="mb-4 text-green-600">{{ session('status') }}</div>
            @endif

            <table class="min-w-full divide-y divide-gray-200 mt-6" style="width: 100%">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-4 py-2 text-left">#</th>
                        <th class="px-4 py-2 text-left">Title</th>
                        <th class="px-4 py-2 text-left">Status</th>
                        <th class="px-4 py-2 text-left">Button Text</th>
                        <th class="px-4 py-2 text-left">Image</th>
                        <th class="px-4 py-2 text-left">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @forelse ($attractions as $index => $item)
                        <tr>
                            <td class="px-4 py-2">{{ $index + 1 }}</td>
                            <td class="px-4 py-2">{{ $item->title }}</td>
                            <td class="px-4 py-2">
                                <a href="{{ route('attraction-section.toggle-status', $item->id) }}"
                                    class="inline-block px-2 py-1 text-xs rounded {{ $item->status ? 'bg-green-200 text-green-800' : 'bg-red-200 text-red-800' }}">
                                    {{ $item->status ? 'Active' : 'Deactive' }}
                                </a>
                            </td>
                            <td class="px-4 py-2">{{ $item->button_text }}</td>
                            <td class="px-4 py-2">
                                @if ($item->image)
                                    <img src="{{ asset('storage/' . $item->image) }}" class="w-20 rounded" />
                                @endif
                            </td>
                            <td class="px-4 py-2">
                                <a href="{{ route('attraction-section.edit', $item->id) }}"
                                    class="text-indigo-600 hover:underline">Edit</a>
                                <form action="{{ route('attraction-section.destroy', $item->id) }}" method="POST"
                                    class="inline-block ml-2" onsubmit="return confirm('Delete this section?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="text-red-600 hover:underline">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center py-4 text-gray-500">No attraction sections found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
