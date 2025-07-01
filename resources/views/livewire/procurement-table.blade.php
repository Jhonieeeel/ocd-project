<div class="max-w-auto relative rounded p-4">
    <div class="flex items-center justify-start sm:justify-between">
        @livewire('create-procurement')
        <div class="hs-dropdown relative flex rounded-lg border-2 border-orange-600 bg-white">
            <div class="space-y-3 sm:max-w-lg">
                <input
                    type="search"
                    wire:model.live.debounce.400ms="search"
                    class="h-8 truncate rounded-lg border-r-2 border-none border-orange-200 px-4 text-xs placeholder:text-gray-400 focus:border-orange-500 focus:ring-0 disabled:pointer-events-none disabled:opacity-50 sm:w-full sm:py-3"
                    placeholder="Search Procurement"
                />
            </div>
            <button
                id="hs-dropdown-default"
                type="button"
                class="hs-dropdown-toggle inline-flex h-8 items-center gap-x-2 rounded-md border border-none border-orange-200 px-2 py-1 text-xs font-medium text-gray-800 shadow-2xs placeholder:text-gray-400 focus:border-orange-500 focus:ring-orange-500 focus:outline-hidden disabled:pointer-events-none disabled:opacity-50"
                aria-haspopup="menu"
                aria-expanded="false"
                aria-label="Dropdown"
            >
                {{ $wildCardValue ? $wildCardValue : 'Category' }}
                <svg
                    class="hs-dropdown-open:rotate-180 size-4"
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
                    <path d="m6 9 6 6 6-6" />
                </svg>
            </button>

            <div
                class="hs-dropdown-menu duration hs-dropdown-open:opacity-100 mt-2 hidden min-w-60 rounded-lg bg-white opacity-0 shadow-md transition-[opacity,margin] before:absolute before:start-0 before:-top-4 before:h-4 before:w-full after:absolute after:start-0 after:-bottom-4 after:h-4 after:w-full"
                role="menu"
                aria-orientation="vertical"
                aria-labelledby="hs-dropdown-default"
            >
                <div class="space-y-0.5 p-1">
                    <button
                        wire:click="selectCategory('codePap','CODE')"
                        class="inline-flex w-full items-center gap-x-3.5 rounded-lg bg-white px-3 py-2 text-sm text-gray-800 hover:bg-orange-100 focus:bg-white focus:outline-hidden"
                    >
                        CODE
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- table -->
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
                <th
                    scope="col"
                    class="hidden px-6 py-3 text-start text-xs font-medium whitespace-nowrap uppercase sm:table-cell xl:hidden 2xl:table-cell"
                >
                    Early Procurement
                </th>
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
                ></th>
            </tr>
        </thead>
        <tbody class="divide-y divide-orange-200">
            @forelse ($procurements as $procurement)
                <tr
                    class="cursor-default border-b-orange-200 text-white transition duration-150 ease-in-out not-hover:bg-gray-100 hover:bg-orange-100 sm:flex-row sm:text-wrap"
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
                        <button class="cursor-pointer">View</button>
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

    <!-- MODAL -->

    <!-- <div class="fixed inset-0 z-50 m-auto w-full" x-data="{ show: true }" x-show="show">
        <div x-on class="fixed inset-0 bg-gray-300 opacity-50"></div>
        <!-- form/content -->
        <div class="fixed inset-0 m-auto max-w-2xl bg-white p-2">
            <p>Modal</p>
        </div>
    </div> -->

    <div class="mt-2">{{ $procurements->links() }}</div>
</div>
