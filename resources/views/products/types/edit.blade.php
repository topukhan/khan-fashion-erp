<x-ui.master>
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold text-gray-800 mb-4">Edit Type</h1>

        <form action="{{ route('types.update', $type->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name:</label>
                <input type="text" id="name" name="name"
                    value="{{ old('name', $type->name) }}"
                    class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 w-8/12 sm:text-sm rounded-md border border-gray-300 p-2"
                    required>
                @error('name')
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

            <div class="flex justify-start space-x-2">
                <a href="{{ route('types.index') }}" class="text-gray-500 hover:underline py-2">Back</a>
                <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded-md">Update</button>
            </div>
        </form>
    </div>
</x-ui.master>
