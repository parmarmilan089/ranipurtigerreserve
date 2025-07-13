<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Photo Gallery</h2>
            <a href="{{ route('photo-gallery.create') }}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">+ Add Photo</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 bg-white p-6 shadow sm:rounded-lg">
            @if (session('status'))
                <div class="mb-4 text-green-600">{{ session('status') }}</div>
            @endif

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                @forelse ($photos as $photo)
                    <div class="border rounded shadow p-2">
                        <img src="{{ asset('storage/' . $photo->image) }}" class="w-full h-48 object-cover rounded" style="width: 100px">
                        <form action="{{ route('photo-gallery.destroy', $photo->id) }}" method="POST" onsubmit="return confirm('Are you sure?')" class="mt-2 text-center">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:underline">Delete</button>
                        </form>
                    </div>
                @empty
                    <p class="text-gray-500">No photos uploaded yet.</p>
                @endforelse
            </div>

            <div class="mt-6">{{ $photos->links() }}</div>
        </div>
    </div>
</x-app-layout>
