<div>
    <div class="flex justify-start sm:hidden">
        <button
            type="button"
            class="inline-flex cursor-pointer items-center justify-center gap-x-2 rounded-lg px-2 py-1 align-middle text-sm font-medium text-gray-800 shadow-2xs transition-all duration-400 hover:bg-gray-400 focus:bg-gray-900 focus:outline-hidden"
            aria-haspopup="dialog"
            aria-expanded="false"
            aria-controls="hs-sidebar-basic-usage"
            aria-label="Toggle navigation"
            data-hs-overlay="#hs-sidebar-basic-usage"
        >
            <svg
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
                class="lucide lucide-menu-icon lucide-menu"
            >
                <path d="M4 12h16" />
                <path d="M4 18h16" />
                <path d="M4 6h16" />
            </svg>
        </button>
    </div>

    <div
        id="hs-sidebar-basic-usage"
        class="hs-overlay hs-overlay-open:translate-x-0 fixed start-0 top-0 bottom-0 z-60 hidden h-full w-64 -translate-x-full transform border-e border-gray-200 bg-white transition-all duration-300 [--auto-close:lg] lg:end-auto lg:bottom-0 lg:block lg:translate-x-0 dark:border-neutral-700 dark:bg-neutral-800"
        role="dialog"
        tabindex="-1"
        aria-label="Sidebar"
    >
        <div class="relative flex h-full max-h-full flex-col sm:mt-6">
            <header class="flex items-center justify-between gap-x-2 p-4">
                <a
                    class="flex-none text-xl font-semibold text-black focus:opacity-80 focus:outline-hidden dark:text-white"
                    href="/"
                    wire:navigate
                    aria-label="Brand"
                >
                    Project
                </a>

                <div class="-me-2 lg:hidden">
                    <button
                        type="button"
                        class="flex size-6 items-center justify-center gap-x-3 rounded-full border border-gray-200 bg-white text-sm text-gray-600 hover:bg-gray-100 focus:bg-gray-100 focus:outline-hidden disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-700 dark:bg-neutral-800 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-200 dark:focus:bg-neutral-700 dark:focus:text-neutral-200"
                        data-hs-overlay="#hs-sidebar-basic-usage"
                    >
                        <svg
                            class="size-4 shrink-0"
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
                            <path d="M18 6 6 18" />
                            <path d="m6 6 12 12" />
                        </svg>
                        <span class="sr-only">Close</span>
                    </button>
                </div>
            </header>

            <nav
                class="h-full overflow-y-auto sm:mt-12 [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500 [&::-webkit-scrollbar-track]:bg-gray-100 dark:[&::-webkit-scrollbar-track]:bg-neutral-700"
            >
                <div class="flex w-full flex-col flex-wrap px-2 pb-0">
                    <ul class="space-y-1">
                        <li>
                            <a
                                class="over:bg-orange-300 flex items-center gap-x-3.5 rounded-lg px-2.5 py-2 text-sm transition-all duration-300 hover:text-orange-600"
                                wire:navigate
                                wire:current.exact="font-semibold text-orange-600"
                                href="/"
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
                                >
                                    <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
                                    <polyline points="9 22 9 12 15 12 15 22" />
                                </svg>
                                Procurements
                            </a>
                        </li>
                        <li>
                            <a
                                class="over:bg-orange-300 flex items-center gap-x-3.5 rounded-lg px-2.5 py-2 text-sm transition-all duration-300 hover:text-orange-600"
                                wire:navigate
                                wire:current.exact="font-semibold text-orange-600"
                                href="{{ route('procurement.requests') }}"
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
                                    class="lucide lucide-git-pull-request-icon lucide-git-pull-request"
                                >
                                    <circle cx="18" cy="18" r="3" />
                                    <circle cx="6" cy="6" r="3" />
                                    <path d="M13 6h3a2 2 0 0 1 2 2v7" />
                                    <line x1="6" x2="6" y1="9" y2="21" />
                                </svg>
                                Procurement Requests
                            </a>
                        </li>
                        <li>
                            <a
                                class="over:bg-orange-300 flex items-center gap-x-3.5 rounded-lg px-2.5 py-2 text-sm transition-all duration-300 hover:text-orange-600"
                                wire:navigate
                                wire:current.exact="font-semibold text-orange-600"
                                href="{{ route('procurement.orders') }}"
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
                                    class="lucide lucide-list-ordered-icon lucide-list-ordered"
                                >
                                    <path d="M10 12h11" />
                                    <path d="M10 18h11" />
                                    <path d="M10 6h11" />
                                    <path d="M4 10h2" />
                                    <path d="M4 6h1v4" />
                                    <path d="M6 18H4c0-1 2-2 2-3s-1-1.5-2-1" />
                                </svg>
                                Procurement Orders
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>
