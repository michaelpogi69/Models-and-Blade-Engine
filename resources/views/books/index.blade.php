@extends('layouts.app')

@section('content')
<div class="bg-white rounded-2xl shadow-lg overflow-hidden">
    <div class="px-6 py-5 border-b border-slate-200 flex items-center justify-between">
        <div>
            <h2 class="text-2xl font-semibold text-slate-800">Book List</h2>
            <p class="text-slate-500 text-sm mt-1">Showing 20 generated books from the database.</p>
        </div>
        <span class="inline-flex items-center rounded-full bg-indigo-100 px-3 py-1 text-sm font-medium text-indigo-700">
            Total: {{ $books->count() }}
        </span>
    </div>

    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-slate-200">
            <thead class="bg-slate-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-bold uppercase tracking-wider text-slate-600">ID</th>
                    <th class="px-6 py-3 text-left text-xs font-bold uppercase tracking-wider text-slate-600">ISBN</th>
                    <th class="px-6 py-3 text-left text-xs font-bold uppercase tracking-wider text-slate-600">Title</th>
                    <th class="px-6 py-3 text-left text-xs font-bold uppercase tracking-wider text-slate-600">Author</th>
                    <th class="px-6 py-3 text-left text-xs font-bold uppercase tracking-wider text-slate-600">Description</th>
                    <th class="px-6 py-3 text-left text-xs font-bold uppercase tracking-wider text-slate-600">Date Published</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-200 bg-white">
                @forelse ($books as $book)
                    <tr class="hover:bg-slate-50">
                        <td class="px-6 py-4 text-sm text-slate-700">{{ $book->id }}</td>
                        <td class="px-6 py-4 text-sm text-slate-700 whitespace-nowrap">{{ $book->isbn }}</td>
                        <td class="px-6 py-4 text-sm font-semibold text-slate-900">{{ $book->title }}</td>
                        <td class="px-6 py-4 text-sm text-slate-700">{{ $book->author }}</td>
                        <td class="px-6 py-4 text-sm text-slate-700 max-w-md">{{ $book->description }}</td>
                        <td class="px-6 py-4 text-sm text-slate-700 whitespace-nowrap">{{ $book->date_published }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="px-6 py-10 text-center text-slate-500">No books found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
