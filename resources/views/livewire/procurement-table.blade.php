<div class="flex flex-col text-blue-900">
    <div class="-m-1.5 overflow-x-auto">
        <div class="inline-block min-w-full p-1.5 align-middle">
            <div class="overflow-hidden overflow-x-auto">
                
                <table
                    class="overflow-hidden rounded-lg border border-gray-200 text-justify dark:border-neutral-700"
                >
                
                    <thead class="truncate bg-orange-400">
                        <tr>
                            <th
                                scope="col"
                                class="px-6 py-3 text-start text-xs font-medium uppercase dark:text-neutral-500"
                            >
                                Code Pap
                            </th>
                            <th
                                scope="col"
                                class="py- px-6 text-start text-xs font-medium uppercase dark:text-neutral-500"
                            >
                                Procurement Project
                            </th>
                            <th
                                scope="col"
                                class="hidden px-6 py-3 text-start text-xs font-medium uppercase sm:table-cell dark:text-neutral-500"
                            >
                                PMO End User
                            </th>
                            <th
                                scope="col"
                                class="hidden px-6 py-3 text-start text-xs font-medium uppercase sm:table-cell dark:text-neutral-500"
                            >
                                Early Procurement
                            </th>
                            <th
                                scope="col"
                                class="hidden px-6 py-3 text-start text-xs font-medium uppercase lg:table-cell dark:text-neutral-500"
                            >
                                Mode of Procurement
                            </th>
                            <th
                                scope="col"
                                class="px-6 py-3 text-start text-xs font-medium uppercase dark:text-neutral-500"
                            >
                                Estimated Budget Total
                            </th>
                            <th
                                scope="col"
                                class="px-6 py-3 text-end text-xs font-medium uppercase dark:text-neutral-500"
                            >
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        @forelse ($procurements as $procurement)
                            <tr
                                class="transition duration-150 ease-in-out hover:bg-gray-100 sm:flex-row sm:text-wrap"
                            >
                                <td
                                    class="w-full max-w-0 px-6 py-4 text-sm font-bold whitespace-nowrap text-gray-800 sm:w-auto sm:font-normal"
                                >
                                    {{ $procurement->codePap }}
                                    <dl class="mt-4 space-y-1 font-normal sm:hidden">
                                        <div class="overflow-x-hidden">
                                            <dt class="text-xs text-gray-500">Project Name</dt>
                                            <dd class="truncate text-sm text-gray-900">
                                                {{ $procurement->procurementName }}
                                            </dd>
                                        </div>
                                        <div>
                                            <dt class="text-xs text-gray-500">PMO / End User</dt>
                                            <dd class="text-sm text-gray-900">
                                                {{ $procurement->pmoEndUser }}
                                            </dd>
                                        </div>

                                        <div>
                                            <dt class="text-xs text-gray-500">
                                                Mode of Procurement
                                            </dt>
                                            <dd class="text-sm text-gray-900">
                                                {{ $procurement->modeProcurement }}
                                            </dd>
                                        </div>

                                        <div>
                                            <dt class="text-xs text-gray-500">Estimated Budget</dt>
                                            <dd class="text-sm text-gray-900">
                                                ₱{{ number_format($procurement->estimatedBudgetTotal, 2) }}
                                            </dd>
                                        </div>
                                    </dl>
                                </td>
                                <td
                                    class="hidden px-6 py-4 text-sm text-wrap text-gray-800 sm:table-cell"
                                >
                                    {{ $procurement->procurementName }}
                                </td>
                                <td
                                    class="hidden px-6 py-4 text-sm whitespace-nowrap text-gray-800 sm:table-cell"
                                >
                                    {{ $procurement->pmoEndUser }}
                                </td>
                                <td
                                    class="px-3 py-2 text-sm whitespace-nowrap text-gray-800 sm:px-6 sm:py-4"
                                >
                                    {{ $procurement->earlyProcurement ? 'Yes' : 'No' }}
                                </td>
                                <td
                                    class="hidden px-6 py-4 text-justify text-sm whitespace-nowrap text-gray-800 sm:table-cell md:text-wrap"
                                >
                                    {{ $procurement->modeProcurement }}
                                </td>
                                <td
                                    class="hidden px-6 py-4 text-sm whitespace-nowrap text-gray-800 sm:table-cell"
                                >
                                    ₱
                                    {{ number_format($procurement->fund?->estimatedBudgetTotal ?? 0, 2) }}
                                </td>
                                <td class="px-6 py-4 text-sm whitespace-nowrap text-gray-800">
                                    <a href="{{ route('procurement.show', $procurement) }}">
                                        View
                                    </a>
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
                <!-- Pagination -->
                <nav class="flex items-center justify-center gap-x-1" aria-label="Pagination">
                    <button
                        type="button"
                        class="inline-flex min-h-9.5 min-w-9.5 items-center justify-center gap-x-1.5 rounded-lg px-2.5 py-2 text-sm text-gray-800 hover:bg-gray-100 focus:bg-gray-100 focus:outline-hidden disabled:pointer-events-none disabled:opacity-50 dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"
                        aria-label="Previous"
                        disabled=""
                    >
                        <svg
                            class="size-3.5 shrink-0"
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        >
                            <path d="m15 18-6-6 6-6"></path>
                        </svg>
                        <span>Previous</span>
                    </button>
                    <div class="flex items-center gap-x-1">
                        <button
                            type="button"
                            class="flex min-h-9.5 min-w-9.5 items-center justify-center rounded-lg bg-gray-200 px-3 py-2 text-sm text-gray-800 focus:bg-gray-300 focus:outline-hidden disabled:pointer-events-none disabled:opacity-50 dark:bg-neutral-600 dark:text-white dark:focus:bg-neutral-500"
                            aria-current="page"
                        >
                            1
                        </button>
                        <button
                            type="button"
                            class="flex min-h-9.5 min-w-9.5 items-center justify-center rounded-lg px-3 py-2 text-sm text-gray-800 hover:bg-gray-100 focus:bg-gray-100 focus:outline-hidden disabled:pointer-events-none disabled:opacity-50 dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"
                        >
                            2
                        </button>
                        <button
                            type="button"
                            class="flex min-h-9.5 min-w-9.5 items-center justify-center rounded-lg px-3 py-2 text-sm text-gray-800 hover:bg-gray-100 focus:bg-gray-100 focus:outline-hidden disabled:pointer-events-none disabled:opacity-50 dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"
                        >
                            3
                        </button>
                    </div>
                    <button
                        type="button"
                        class="inline-flex min-h-9.5 min-w-9.5 items-center justify-center gap-x-1.5 rounded-lg px-2.5 py-2 text-sm text-gray-800 hover:bg-gray-100 focus:bg-gray-100 focus:outline-hidden disabled:pointer-events-none disabled:opacity-50 dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"
                        aria-label="Next"
                    >
                        <span>Next</span>
                        <svg
                            class="size-3.5 shrink-0"
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        >
                            <path d="m9 18 6-6-6-6"></path>
                        </svg>
                    </button>
                </nav>
                <!-- End Pagination -->
            </div>
        </div>
    </div>
</div>
