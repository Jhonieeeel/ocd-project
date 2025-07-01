<div class="w-full rounded p-4">
    <table
        class="min-w-full table-fixed divide-y divide-gray-200 overflow-x-auto border border-gray-300 shadow-md"
    >
        <thead class="bg-orange-600 text-white">
            <tr>
                <th
                    scope="col"
                    class="px-6 py-3 text-start text-xs font-medium whitespace-nowrap uppercase"
                >
                    Code Pap
                </th>
                {{-- hidden --}}
                <th
                    scope="col"
                    class="hidden px-6 py-3 text-start text-xs font-medium whitespace-nowrap uppercase sm:table-cell"
                >
                    Procurement Project
                </th>
                <th
                    scope="col"
                    class="hidden px-6 py-3 text-start text-xs font-medium whitespace-nowrap uppercase sm:table-cell xl:hidden 2xl:table-cell"
                >
                    PMO End User
                </th>
                {{-- hidden --}}
                <th
                    scope="col"
                    class="hidden px-6 py-3 text-start text-xs font-medium whitespace-nowrap uppercase sm:table-cell xl:hidden 2xl:table-cell"
                >
                    Early Procurement
                </th>
                {{-- hidden --}}
                <th
                    scope="col"
                    class="hidden px-6 py-3 text-start text-xs font-medium whitespace-nowrap uppercase sm:table-cell"
                >
                    Mode of Procurement
                </th>
                <th
                    scope="col"
                    class="hidden px-6 py-3 text-start text-xs font-medium whitespace-nowrap uppercase sm:table-cell"
                >
                    Estimated Budget Total
                </th>
                <th
                    scope="col"
                    class="px-6 py-3 text-start text-xs font-medium whitespace-nowrap uppercase"
                >
                    Action
                </th>
            </tr>
        </thead>
        <tbody class="divide-y divide-orange-200">
            @forelse ($procurements as $procurement)
                <tr
                    class="border-b-orange-200 text-white transition duration-150 ease-in-out not-hover:bg-gray-100 hover:bg-orange-100 sm:flex-row sm:text-wrap"
                >
                    <td
                        class="w-full max-w-0 px-6 py-4 text-sm font-bold whitespace-nowrap text-gray-800 sm:w-auto sm:font-normal xl:max-w-sm"
                    >
                        <span class="text-gray-500 xl:font-semibold">
                            {{ $procurement->codePap }}
                        </span>
                        <dl class="mt-4 space-y-1 font-normal xl:block">
                            <div class="overflow-x-hidden xl:hidden">
                                <dt class="text-xs text-gray-500">Project Name</dt>
                                <dd class="truncate text-sm text-gray-900">
                                    {{ $procurement->procurementName }}
                                </dd>
                            </div>
                            <div class="xl:block">
                                <dt class="text-xs text-gray-500">PMO End User</dt>
                                <dd class="text-sm text-gray-900">
                                    {{ $procurement->pmoEndUser }}
                                </dd>
                            </div>

                            <div class="xl:hidden">
                                <dt class="text-xs text-gray-500">Mode of Procurement</dt>
                                <dd class="text-sm text-wrap text-gray-900">
                                    {{ $procurement->modeProcurement }}
                                </dd>
                            </div>

                            <div class="xl:hidden">
                                <dt class="text-xs text-gray-500">Estimated Budget</dt>
                                <dd class="text-sm text-gray-900">
                                    ₱{{ number_format($procurement->estimatedBudgetTotal, 2) }}
                                </dd>
                            </div>
                            <div class="xl:block">
                                <dt class="text-xs text-gray-500">Early Procurement</dt>
                                <dd class="text-sm text-gray-900 xl:truncate">
                                    {{ $procurement->earlyProcurement ? 'Yes' : 'No' }}
                                </dd>
                            </div>
                        </dl>
                    </td>
                    <td
                        class="hidden px-6 py-4 text-sm text-wrap text-gray-800 sm:table-cell xl:py-6"
                    >
                        {{ $procurement->procurementName }}
                    </td>
                    <td
                        class="hidden px-6 py-4 text-sm whitespace-nowrap text-gray-800 sm:table-cell xl:hidden 2xl:table-cell"
                    >
                        {{ $procurement->pmoEndUser }}
                    </td>
                    <td
                        class="hidden px-3 py-2 text-sm whitespace-nowrap text-gray-800 sm:table-cell sm:px-6 sm:py-4 xl:hidden 2xl:table-cell"
                    >
                        {{ $procurement->earlyProcurement ? 'Yes' : 'No' }}
                    </td>
                    <td
                        class="hidden px-6 py-4 text-sm whitespace-nowrap text-gray-800 sm:table-cell"
                    >
                        {{ $procurement->modeProcurement }}
                    </td>
                    <td
                        class="hidden px-6 py-4 text-sm whitespace-nowrap text-gray-800 sm:table-cell"
                    >
                        ₱ {{ number_format($procurement->fund?->estimatedBudgetTotal ?? 0, 2) }}
                    </td>
                    <td class="px-6 py-4 text-sm font-semibold whitespace-nowrap text-blue-500">
                        <a href="{{ route('procurement.show', $procurement) }}">View</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td
                        colspan="6"
                        class="px-6 py-4 text-center text-sm whitespace-nowrap text-gray-800"
                    >
                        No documents have been uploaded or inputted yet.
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
