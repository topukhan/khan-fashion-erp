<x-ui.master>
    <div class="container mx-auto p-4">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-bold">Categories</h1>
            <a href="{{ route('categories.create') }}" class="bg-green-500 text-white px-4 py-2 rounded-md">Create Category</a>
        </div>

        <table class="min-w-full bg-white border border-gray-300">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b">Sl No</th>
                    <th class="py-2 px-4 border-b">Name</th>
                    <th class="py-2 px-4 border-b">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $key => $category)
                    <tr>
                        <td class="py-2 px-4 border-b">{{ $key + 1 }}</td>
                        <td class="py-2 px-4 border-b">{{ $category->name }}</td>
                        <td class="py-2 px-4 border-b">
                            <a href="{{ route('categories.show', $category->id) }}" class="text-indigo-500 hover:underline mr-2">Show</a>
                            <a href="{{ route('categories.edit', $category->id) }}" class="text-yellow-500 hover:underline mr-2">Edit</a>
                            <button onclick="confirmDelete('{{ route('categories.destroy', $category->id) }}')" class="text-red-500 hover:underline">Delete</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script>
        function confirmDelete(url) {
            if (confirm('Are you sure you want to delete this category?')) {
                window.location.href = url;
            }
        }
    </script>
</x-ui.master>
