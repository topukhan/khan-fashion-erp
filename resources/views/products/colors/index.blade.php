<x-ui.master>
    <div class="container mx-auto p-4">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-bold text-gray-800">colors</h1>
            <a href="{{ route('colors.create') }}" class="bg-green-500 text-white px-4 py-2 rounded-md">Create
                Product Color</a>
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
        @if (count($colors) > 0)
            <table class="min-w-full table-auto">
                <thead>
                    <tr class="bg-gray-200 text-gray-600">
                        <th class="py-4 px-6">Sl No</th>
                        <th class="py-4 px-6">Name</th>
                        <th class="py-4 px-6">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($colors as $key => $color)
                        <tr class="border-b text-center">
                            <td class="py-4 px-6 border-gray-200">{{ $key + 1 }}</td>
                            <td class="py-4 px-6 border-gray-200">{{ $color->name }}</td>
                            <td class="py-4 px-6 border-gray-200">
                                <a href="{{ route('colors.show', $color->id) }}"
                                    class="text-indigo-500 hover:underline mr-2">Details</a>
                                <a href="{{ route('colors.edit', $color->id) }}"
                                    class="text-yellow-500 hover:underline mr-2">Edit</a>
                                <form method="POST" action="{{ route('colors.destroy', $color->id) }}" class="inline">
                                    @csrf
                                    @method('delete')
                                    <button type="submit"
                                        onclick="return confirm('Are you want to delete this color?')"
                                        class="text-red-500 hover:underline">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <span class="flex justify-center">
                No Colors Found
            </span>
        @endif
    </div>

    <script>
        function confirmDelete(url, event) {
            if (confirm('Are you sure you want to delete this color?')) {
                window.location.href = url;
            } else {
                event.preventDefault();
            }
        }
    </script>

</x-ui.master>
