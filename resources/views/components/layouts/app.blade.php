<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <title>{{ $title ?? 'Page Title' }}</title>

        @vite('resources/css/app.css')
        @vite('resources/js/app.js')
    </head>
    <body class="min-h-screen bg-gray-100">
        <!-- ========== HEADER ========== -->
        <header
            class="sticky inset-x-0 top-0 z-50 flex w-full flex-wrap bg-orange-400 md:flex-nowrap md:justify-start lg:before:mx-auto"
        >
            <nav
                class="relative mx-2 flex w-full max-w-5xl basis-full flex-wrap items-center justify-between py-2 ps-5 pe-2 md:flex-nowrap md:py-0 lg:mx-auto"
            >
                <div class="flex items-center">
                    <!-- Logo -->
                    <a
                        class="inline-block flex-none rounded-md text-xl font-semibold focus:opacity-80 focus:outline-hidden"
                        href="../templates/agency/index.html"
                        aria-label="Preline"
                    >
                        <img
                            class="h-10 max-w-90 cursor-pointer rounded-sm grayscale filter transition-all duration-300 hover:grayscale-0"
                            src="images/ocd-removebg-preview.png"
                            alt="image description"
                        />
                    </a>
                    <!-- End Logo -->

                    <div class="ms-1 sm:ms-2"></div>
                </div>

                <!-- Button Group -->
                <div class="flex items-center gap-x-3 md:order-3">
                    <div class="md:ps-3">
                        <a
                            class="group inline-flex items-center gap-x-2 rounded-full bg-white px-3 py-2 text-sm font-medium text-nowrap text-neutral-800 focus:outline-hidden"
                            href="#"
                        >
                            Upload File
                        </a>
                    </div>

                    <div class="md:hidden">
                        <button
                            type="button"
                            class="hs-collapse-toggle flex size-9 items-center justify-center rounded-full bg-neutral-800 text-sm font-semibold text-white disabled:pointer-events-none disabled:opacity-50"
                            id="hs-navbar-floating-dark-collapse"
                            aria-expanded="false"
                            aria-controls="hs-navbar-floating-dark"
                            aria-label="Toggle navigation"
                            data-hs-collapse="#hs-navbar-floating-dark"
                        >
                            <svg
                                class="hs-collapse-open:hidden size-4 shrink-0"
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
                                <line x1="3" x2="21" y1="6" y2="6" />
                                <line x1="3" x2="21" y1="12" y2="12" />
                                <line x1="3" x2="21" y1="18" y2="18" />
                            </svg>
                            <svg
                                class="hs-collapse-open:block hidden size-4 shrink-0"
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
                        </button>
                    </div>
                </div>
                <!-- End Button Group -->

                <!-- Collapse -->
                <div
                    id="hs-navbar-floating-dark"
                    class="hs-collapse hidden grow basis-full overflow-hidden transition-all duration-300 md:block"
                    aria-labelledby="hs-navbar-floating-dark-collapse"
                >
                    <div
                        class="flex flex-col gap-y-3 py-2 md:flex-row md:items-center md:justify-end md:py-0 md:ps-7"
                    >
                        <a
                            class="ps-px pe-3 text-sm text-white hover:text-neutral-300 focus:text-neutral-300 focus:outline-hidden sm:px-3 md:py-4"
                            href="../templates/agency/index.html"
                            aria-current="page"
                        >
                            Annual Procurement Plan
                        </a>
                        <a
                            class="ps-px pe-3 text-sm text-white hover:text-neutral-300 focus:text-neutral-300 focus:outline-hidden sm:px-3 md:py-4"
                            href="#"
                        >
                            Procurement Request
                        </a>
                        <a
                            class="ps-px pe-3 text-sm text-white hover:text-neutral-300 focus:text-neutral-300 focus:outline-hidden sm:px-3 md:py-4"
                            href="#"
                        >
                            Procurement Purchase Order
                        </a>

                        
                            <div
                                class="hs-dropdown-menu hs-dropdown-open:opacity-100 relative end-0 top-full z-10 mt-2 hidden w-full rounded-2xl bg-neutral-800 p-1 opacity-0 transition-[opacity,margin] duration-[0.1ms] before:absolute before:start-0 before:-top-4 before:h-5 before:w-full md:mt-0 md:w-150 md:after:hidden lg:duration-[150ms]"
                                role="menu"
                                aria-orientation="vertical"
                                aria-labelledby="hs-pro-anpd"
                            >
                                <div class="flex flex-col gap-y-1">
                                    <!-- Grid -->
                                    <div class="grid grid-cols-1 gap-1 md:grid-cols-2">
                                        <div
                                            class="flex min-h-50 flex-col justify-between rounded-t-xl bg-neutral-900 p-5 md:rounded-tl-xl md:rounded-tr-none"
                                        >
                                            <!-- Heading -->
                                            <div class="mb-5">
                                                <a
                                                    class="group flex items-center gap-x-2 text-sm font-medium text-neutral-200 hover:text-[#ff0] focus:text-[#ff0] focus:outline-hidden"
                                                    href="#"
                                                >
                                                    Build
                                                    <span
                                                        class="ms-auto flex size-6 shrink-0 items-center justify-center rounded-sm bg-[#ff0] text-black"
                                                    >
                                                        <svg
                                                            class="size-4 shrink-0 transition group-hover:translate-x-0.5 group-focus:translate-x-0.5"
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
                                                            <path d="M5 12h14"></path>
                                                            <path d="m12 5 7 7-7 7"></path>
                                                        </svg>
                                                    </span>
                                                </a>
                                            </div>
                                            <!-- End Heading -->

                                            <!-- List -->
                                            <ul class="flex flex-col">
                                                <li
                                                    class="border-t border-neutral-800 py-2 first:border-t-0 first:pt-0 last:pb-0"
                                                >
                                                    <a
                                                        class="group flex items-center gap-x-2 text-sm font-medium text-neutral-200 hover:text-[#ff0] focus:text-[#ff0] focus:outline-hidden"
                                                        href="#"
                                                    >
                                                        <span
                                                            class="size-1 rounded-full bg-[#ff0]"
                                                        ></span>
                                                        Websites
                                                        <span
                                                            class="ms-auto flex size-6 shrink-0 items-center justify-center"
                                                        >
                                                            <svg
                                                                class="size-4 shrink-0 transition group-hover:translate-x-0.5 group-focus:translate-x-0.5"
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
                                                                <path d="M5 12h14"></path>
                                                                <path d="m12 5 7 7-7 7"></path>
                                                            </svg>
                                                        </span>
                                                    </a>
                                                </li>

                                                <li
                                                    class="border-t border-neutral-800 py-2 first:border-t-0 first:pt-0 last:pb-0"
                                                >
                                                    <a
                                                        class="group flex items-center gap-x-2 text-sm font-medium text-neutral-200 hover:text-[#ff0] focus:text-[#ff0] focus:outline-hidden"
                                                        href="#"
                                                    >
                                                        <span
                                                            class="size-1 rounded-full bg-[#ff0]"
                                                        ></span>
                                                        Mobile apps
                                                        <span
                                                            class="ms-auto flex size-6 shrink-0 items-center justify-center"
                                                        >
                                                            <svg
                                                                class="size-4 shrink-0 transition group-hover:translate-x-0.5 group-focus:translate-x-0.5"
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
                                                                <path d="M5 12h14"></path>
                                                                <path d="m12 5 7 7-7 7"></path>
                                                            </svg>
                                                        </span>
                                                    </a>
                                                </li>

                                                <li
                                                    class="border-t border-neutral-800 py-2 first:border-t-0 first:pt-0 last:pb-0"
                                                >
                                                    <a
                                                        class="group flex items-center gap-x-2 text-sm font-medium text-neutral-200 hover:text-[#ff0] focus:text-[#ff0] focus:outline-hidden"
                                                        href="#"
                                                    >
                                                        <span
                                                            class="size-1 rounded-full bg-[#ff0]"
                                                        ></span>
                                                        Pages
                                                        <span
                                                            class="ms-auto flex size-6 shrink-0 items-center justify-center"
                                                        >
                                                            <svg
                                                                class="size-4 shrink-0 transition group-hover:translate-x-0.5 group-focus:translate-x-0.5"
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
                                                                <path d="M5 12h14"></path>
                                                                <path d="m12 5 7 7-7 7"></path>
                                                            </svg>
                                                        </span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <!-- End List -->
                                        </div>
                                        <!-- End Col -->

                                        <div
                                            class="flex min-h-50 flex-col justify-between bg-neutral-900 p-5 md:rounded-tr-xl"
                                        >
                                            <!-- Heading -->
                                            <div class="mb-5">
                                                <a
                                                    class="group flex items-center gap-x-3 text-sm font-medium text-neutral-200 hover:text-[#ff0] focus:text-[#ff0] focus:outline-hidden"
                                                    href="#"
                                                >
                                                    Resources
                                                    <span
                                                        class="ms-auto flex size-6 shrink-0 items-center justify-center rounded-sm bg-[#ff0] text-black"
                                                    >
                                                        <svg
                                                            class="size-4 shrink-0 transition group-hover:translate-x-0.5 group-focus:translate-x-0.5"
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
                                                            <path d="M5 12h14"></path>
                                                            <path d="m12 5 7 7-7 7"></path>
                                                        </svg>
                                                    </span>
                                                </a>
                                            </div>
                                            <!-- End Heading -->

                                            <!-- List -->
                                            <ul class="flex flex-col">
                                                <li
                                                    class="border-t border-neutral-800 py-2 first:border-t-0 first:pt-0 last:pb-0"
                                                >
                                                    <a
                                                        class="group flex items-center gap-x-2 text-sm font-medium text-neutral-200 hover:text-[#ff0] focus:text-[#ff0] focus:outline-hidden"
                                                        href="#"
                                                    >
                                                        <span
                                                            class="size-1 rounded-full bg-[#ff0]"
                                                        ></span>
                                                        Documentation
                                                        <span
                                                            class="ms-auto flex size-6 shrink-0 items-center justify-center"
                                                        >
                                                            <svg
                                                                class="size-4 shrink-0 transition group-hover:translate-x-0.5 group-focus:translate-x-0.5"
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
                                                                <path d="M5 12h14"></path>
                                                                <path d="m12 5 7 7-7 7"></path>
                                                            </svg>
                                                        </span>
                                                    </a>
                                                </li>

                                                <li
                                                    class="border-t border-neutral-800 py-2 first:border-t-0 first:pt-0 last:pb-0"
                                                >
                                                    <a
                                                        class="group flex items-center gap-x-2 text-sm font-medium text-neutral-200 hover:text-[#ff0] focus:text-[#ff0] focus:outline-hidden"
                                                        href="#"
                                                    >
                                                        <span
                                                            class="size-1 rounded-full bg-[#ff0]"
                                                        ></span>
                                                        Support
                                                        <span
                                                            class="ms-auto flex size-6 shrink-0 items-center justify-center"
                                                        >
                                                            <svg
                                                                class="size-4 shrink-0 transition group-hover:translate-x-0.5 group-focus:translate-x-0.5"
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
                                                                <path d="M5 12h14"></path>
                                                                <path d="m12 5 7 7-7 7"></path>
                                                            </svg>
                                                        </span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <!-- End List -->
                                        </div>
                                        <!-- End Col -->
                                    </div>
                                    <!-- End Grid -->

                                    <!-- Footer -->
                                    <div class="rounded-b-xl bg-neutral-900 p-2">
                                        <div
                                            class="flex flex-wrap items-center justify-between gap-1"
                                        >
                                            <a
                                                class="group flex items-center gap-x-1 py-1.5 ps-3 pe-2 text-sm font-medium text-neutral-200 hover:text-[#ff0] focus:text-[#ff0] focus:outline-hidden"
                                                href="#"
                                            >
                                                Sessions 2025 ‐ Watch the product keynote live
                                                <svg
                                                    class="size-4 shrink-0 transition group-hover:translate-x-0.5 group-focus:translate-x-0.5"
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
                                                    <path d="M5 12h14"></path>
                                                    <path d="m12 5 7 7-7 7"></path>
                                                </svg>
                                            </a>

                                            <a
                                                class="rounded-full px-3 py-1.5 text-sm font-medium text-[#ff0] hover:bg-neutral-800 focus:bg-neutral-800 focus:outline-hidden"
                                                href="#"
                                            >
                                                Changelog
                                            </a>
                                        </div>
                                    </div>
                                    <!-- End Footer -->
                                </div>
                            </div>
                            <!-- End Dropdown Menu -->
                        </div>
                        <!-- End Dropdown Link -->
                    </div>
                </div>
                <!-- End Collapse -->
            </nav>
        </header>
        <!-- ========== END HEADER ========== -->
        <main class="font-poppins flex-1 sm:p-8">
            <div class="w-full rounded-lg">
                {{ $slot }}
            </div>
        </main>
    </body>
</html>
