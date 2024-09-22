<x-error-layout>
@if ($error)
    <div class='font-medium text-red-600'>
        {{ $error }}
    </div>
@endif
</x-error-layout>
