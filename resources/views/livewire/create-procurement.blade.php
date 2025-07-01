<div class="p-4">
    <!-- FORM -->
    <div class="flex items-center">
        <form wire:submit.prevent="save" enctype="multipart/form-data">
            @if (! $csv)
                <label
                    for="file"
                    class="flex cursor-pointer items-center gap-x-1 text-sm whitespace-nowrap text-orange-700 hover:font-medium hover:text-orange-500"
                >
                    <svg
                        class="size-4"
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="lucide lucide-upload-icon lucide-upload"
                    >
                        <path d="M12 3v12" />
                        <path d="m17 8-5-5-5 5" />
                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4" />
                    </svg>
                    Upload File
                </label>
            @else
                <button
                    type="submit"
                    class="cursor-pointer rounded-md bg-orange-500 px-2 py-1 text-sm text-white"
                >
                    Submit {{ $csv->getClientOriginalName() }}
                </button>
            @endif
            <div wire:loading wire:target="csv" class="text-xs text-gray-400">Uploading...</div>
            <input type="file" id="file" accept=".csv, .txt" wire:model="csv" class="hidden" />
        </form>
    </div>
    <!-- ALERT MESSAGe -->
    @if (session('success'))
        <div class="bg-green-600 p-3 text-gray-700">
            <p>{{ session('success') }}</p>
        </div>
    @endif
</div>
