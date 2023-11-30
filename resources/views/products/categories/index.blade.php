<x-ui.master>
    <div class="container mx-auto p-4">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-bold text-gray-800">Categories</h1>
            <a href="{{ route('categories.create') }}" class="bg-green-500 text-white px-4 py-2 rounded-md">Create
                Category</a>
        </div>
        <div class="my-3">
            @if (session('message'))
                <div class="bg-green-500 text-white px-4 py-2 rounded-md font-bold ">
                    {{ session('message') }}
                </div>
            @elseif(session('error'))
                <div class="bg-red-500 text-white px-4 py-2 rounded-md font-bold ">
                    {{ session('error') }}
                </div>
            @endif
        </div>

        <table class="min-w-full table-auto">
            <thead>
                <tr class="bg-gray-200 text-gray-600">
                    <th class="py-4 px-6">Sl No</th>
                    <th class="py-4 px-6">Name</th>
                    <th class="py-4 px-6">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $key => $category)
                    <tr class="border-b text-center">
                        <td class="py-4 px-6 border-gray-200">{{ $key + 1 }}</td>
                        <td class="py-4 px-6 border-gray-200">{{ $category->name }}</td>
                        <td class="py-4 px-6 border-gray-200">
                            <a href="{{ route('categories.show', $category->id) }}"
                                class="text-indigo-500 hover:underline mr-2">Details</a>
                            <a href="{{ route('categories.edit', $category->id) }}"
                                class="text-yellow-500 hover:underline mr-2">Edit</a>
                            {{-- <a confirm="You want to delete this category"
                                href="{{ route('categories.destroy', $category->id) }}"
                                class="text-red-500 hover:underline">Delete</a> --}}
                            <form method="POST" action="{{ route('categories.destroy', $category->id) }}"
                                class="inline">
                                @csrf
                                @method('delete')
                                <button type="submit" onclick="return confirm('Are you want to delete this category?')" class="text-red-500 hover:underline">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script>
        function confirmDelete(url, event) {
            if (confirm('Are you sure you want to delete this category?')) {
                window.location.href = url;
            } else {
                // Prevent the default behavior of the button click
                event.preventDefault();
            }
        }
    </script>

</x-ui.master>
