<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Contact Form Detail</h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-4 sm:space-y-6">
            <div class="bg-white p-6 shadow-sm rounded space-y-4">
                <div><strong>Name:</strong> {{ $form->name }}</div>
                <div><strong>Email:</strong> {{ $form->email }}</div>
                <div><strong>Subject:</strong> {{ $form->subject }}</div>
                <div><strong>Message:</strong> <p class="mt-1">{{ $form->message }}</p></div>
                <div><strong>Submitted At:</strong> {{ $form->created_at->format('d M Y, h:i A') }}</div>

                <a href="{{ route('contact-forms.index') }}" class="text-blue-600 hover:underline">← Back to list</a>
            </div>
        </div>
    </div>
</x-app-layout>
