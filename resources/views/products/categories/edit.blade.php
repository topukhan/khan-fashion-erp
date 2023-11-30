<x-ui.master>
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold text-gray-800 mb-4">Edit Category</h1>

        <form action="{{ route('categories.update', $category->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name:</label>
                <input type="text" id="name" name="name"
                    value="{{ old('name', $category->name) }}"
                    class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 w-full sm:text-sm rounded-md border border-gray-300 p-2"
                    required>
                @error('name')
                    <div class="text-red-600">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Description:</label>
                <textarea id="description" name="description"
                    class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 w-full sm:text-sm rounded-md border border-gray-300 p-2"
                    rows="3">{{ old('description', $category->description) }}</textarea>
                @error('description')
                    <div class="text-red-600">{{ $message }}</div>
                @enderror
            </div>

            <div class="my-3">
                @if (session('message'))
                    <div class="bg-green-500 text-white px-4 py-2 rounded-md text-sm font-bold ">
                        {{ session('message') }}
                    </div>
                @elseif(session('error'))
                    <div class="bg-red-500 text-white px-4 py-2 rounded-md text-sm font-bold ">
                        {{ session('error') }}
                    </div>
                @endif
            </div>

            <div class="flex justify-end space-x-2">
                <a href="{{ route('categories.index') }}" class="text-gray-500 hover:underline px-4 py-2">Back</a>
                <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded-md">Update</button>
            </div>
        </form>
    </div>
</x-ui.master>
