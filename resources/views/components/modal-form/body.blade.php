
<!-- body -->
<div class="w-full p-3">
    {{ $slot }}
</div>

<!-- footer -->
<div class="flex items-center justify-end w-full gap-3 px-4 py-3 border-t border-gray-200">
    <x-button-secondary
        onclick="openModal(false)"
        class="px-2.5 py-1.5"
    >Cancel</x-button-secondary>
    <x-button-primary type="submit" class="px-3 py-2">Send</x-button-primary>
</div>
