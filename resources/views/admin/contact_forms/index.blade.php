<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Contact Forms</h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 shadow-sm rounded">
                <table class="min-w-full table-auto">
                    <thead>
                        <tr>
                            <th class="px-4 py-2">Name</th>
                            <th class="px-4 py-2">Email</th>
                            <th class="px-4 py-2">Subject</th>
                            <th class="px-4 py-2">Submitted At</th>
                            <th class="px-4 py-2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($forms as $form)
                            <tr class="border-t">
                                <td class="px-4 py-2">{{ $form->name }}</td>
                                <td class="px-4 py-2">{{ $form->email }}</td>
                                <td class="px-4 py-2">{{ $form->subject }}</td>
                                <td class="px-4 py-2">{{ $form->created_at->format('d M Y') }}</td>
                                <td class="px-4 py-2">
                                    <a href="{{ route('contact-forms.show', $form->id) }}" class="text-blue-600 hover:underline">View</a>
                                    <form action="{{ route('contact-forms.destroy', $form->id) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:underline ml-2"
                                            onclick="return confirm('Are you sure?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <div class="mt-4">
                    {{ $forms->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
