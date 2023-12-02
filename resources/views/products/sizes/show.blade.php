<x-ui.master>
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold text-gray-800 mb-4">Size Details</h1>

        <div class="bg-white shadow-sm rounded-md p-4">
            <div class="mb-4">
                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name:</label>
                <p class="bg-gray-100 p-2 rounded-md">{{ $size->name }}</p>
            </div>
          
            <div class="flex justify-end">
                <a href="{{ route('sizes.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded-md">Back</a>
            </div>
        </div>
    </div>
</x-ui.master>
