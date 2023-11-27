<!DOCTYPE html>
<html lang="en">
<x-ui.partials.head />

<body>
    <div class="flex h-screen bg-gray-100">
        <x-ui.partials.aside />
        <div class="flex flex-col flex-1 w-full">
            <x-ui.partials.header />
            <main class="h-full overflow-y-auto p-2">
                {{ $slot }}
            </main>
        </div>
    </div>
    @stack('scripts')
</body>

</html>
