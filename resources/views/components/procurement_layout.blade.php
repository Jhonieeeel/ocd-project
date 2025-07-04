<div class="overflow-x-auto">
    <table class="min-w-full table-auto border-collapse">
        <thead class="bg-gray-100">
            <tr>
                @foreach ($headers as $index => $header)
                    <th class="border px-4 py-2 text-left">
                        {{ $header }}
                        <button
                            wire:click="changeHeader({{ $index }}, 'New Header')"
                            class="ml-2 text-blue-500 hover:underline"
                        >
                            Change
                        </button>
                    </th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $row)
                <tr>
                    @foreach ($row as $cell)
                        <td class="border px-4 py-2">{{ $cell }}</td>
                    @endforeach
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
