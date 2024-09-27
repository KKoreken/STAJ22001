
@extends('layouts.user.master')
@section('title')
    Yönetici Paneli
@endsection
@section('page-title')
    Yönetici Paneli
@endsection
@section('body')

<body class="relative h-screen overflow-y-auto overflow-x-hidden bg-light text-dark dark:bg-dark-2 dark:text-light">
    @endsection
    @section('content')
    <div class="mx-auto flex max-w-screen-2xl flex-col justify-between gap-4 p-4 lg:gap-6 lg:p-6">
            @include('layouts.user.topbar')
        <main class="grid grid-cols-1 gap-4  lg:gap-6">
            <div class="rounded-2xl bg-white p-6 shadow dark:bg-black dark:shadow-dark lg:col-span-2 lg:p-10">
                <div class="">
                    <h2 class="text-3xl font-semibold leading-tight text-dark dark:text-light lg:text-[40px] lg:leading-tight">
                        Projelerime |  <span class="text-primary">Gözat</span>
                    </h2>
                    <p class="mt-4 text-lg text-muted dark:text-light/70">
                        Her bir projede farklı bir alanda farklı teknolojileri birlikte kullanmaya ve yeni araçlar kullanmaya dikkat ediyorum.
                    </p>
                </div>

                <!-- Portfolio -->
                <div class="mt-10 lg:mt-14">
                    <div class="mt-6 space-y-6">
                        <div class="">
                            <div class="group relative overflow-hidden rounded-lg bg-light p-4 pb-0 dark:bg-dark-2 md:p-6 md:pb-0 xl:p-10 xl:pb-0">
                                <div class="relative aspect-6/4 overflow-hidden rounded-t-lg">
                                    <img src="assets/img/project-1.png" alt="" class="h-full w-full rounded-t-lg object-cover object-top transition" />

                                    <a href="assets/img/project-1.png" data-gall="project-gallry-1" class="project-gallery-link absolute left-1/2 top-1/2 grid h-10 w-10 -translate-x-1/2 -translate-y-1/2 place-content-center rounded-full bg-white text-primary shadow-lg transition lg:invisible lg:-translate-y-[40%] lg:opacity-0 lg:group-hover:visible lg:group-hover:-translate-y-1/2 lg:group-hover:opacity-100">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" class="h-6 w-6">
                                            <path d="M10 4.167v11.666M4.167 10h11.666" />
                                        </svg>
                                    </a>
                                </div>
                            </div>

                            <div class="flex flex-wrap items-start justify-between py-4 md:p-6">
                                <div class="">
                                    <h3 class="text-lg font-medium md:text-xl lg:text-2xl">
                                        <a href="#" class="border-b border-transparent text-dark transition hover:border-b-primary hover:text-primary dark:text-light/80 dark:hover:text-primary">
                                            FlowSaaS - SaaS Application Tools
                                        </a>
                                    </h3>
                                    <p class="text-sm text-muted lg:text-base">
                                        SaaS App | UI UX Design
                                    </p>
                                </div>

                                <a href="#" class="inline-flex items-center justify-center gap-1 rounded bg-white px-3 py-2 text-center text-sm leading-none text-dark transition hover:text-primary dark:bg-black dark:text-light/70 dark:hover:text-primary">
                                    <span>Visit Site</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 15" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4 shrink-0">
                                        <path d="m9.917 4.583-5.834 5.834m.584-5.834h5.25v5.25" />
                                    </svg>
                                </a>
                            </div>
                        </div>

                        <div class="">
                            <div class="group relative overflow-hidden rounded-lg bg-light p-4 pb-0 dark:bg-dark-2 md:p-6 md:pb-0 xl:p-10 xl:pb-0">
                                <div class="relative aspect-6/4 overflow-hidden rounded-t-lg">
                                    <img src="assets/img/project-2.png" alt="" class="h-full w-full rounded-t-lg object-cover object-top transition" />

                                    <a href="assets/img/project-2.png" data-gall="project-gallry-1" class="project-gallery-link absolute left-1/2 top-1/2 grid h-10 w-10 -translate-x-1/2 -translate-y-1/2 place-content-center rounded-full bg-white text-primary shadow-lg transition lg:invisible lg:-translate-y-[40%] lg:opacity-0 lg:group-hover:visible lg:group-hover:-translate-y-1/2 lg:group-hover:opacity-100">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" class="h-6 w-6">
                                            <path d="M10 4.167v11.666M4.167 10h11.666" />
                                        </svg>
                                    </a>
                                </div>
                            </div>

                            <div class="flex flex-wrap items-start justify-between py-4 md:p-6">
                                <div class="">
                                    <h3 class="text-lg font-medium md:text-xl lg:text-2xl">
                                        <a href="#" class="border-b border-transparent text-dark transition hover:border-b-primary hover:text-primary dark:text-light/80 dark:hover:text-primary">
                                            AIMug - AI Writing Application Tools
                                        </a>
                                    </h3>
                                    <p class="text-sm text-muted lg:text-base">
                                        Product Design | Application
                                    </p>
                                </div>

                                <a href="#" class="inline-flex items-center justify-center gap-1 rounded bg-white px-3 py-2 text-center text-sm leading-none text-dark transition hover:text-primary dark:bg-black dark:text-light/70 dark:hover:text-primary">
                                    <span>Visit Site</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 15" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4 shrink-0">
                                        <path d="m9.917 4.583-5.834 5.834m.584-5.834h5.25v5.25" />
                                    </svg>
                                </a>
                            </div>
                        </div>

                        <div class="">
                            <div class="group relative overflow-hidden rounded-lg bg-light p-4 pb-0 dark:bg-dark-2 md:p-6 md:pb-0 xl:p-10 xl:pb-0">
                                <div class="relative aspect-6/4 overflow-hidden rounded-t-lg">
                                    <img src="assets/img/project-3.png" alt="" class="h-full w-full rounded-t-lg object-cover object-top transition" />

                                    <a href="assets/img/project-3.png" data-gall="project-gallry-1" class="project-gallery-link absolute left-1/2 top-1/2 grid h-10 w-10 -translate-x-1/2 -translate-y-1/2 place-content-center rounded-full bg-white text-primary shadow-lg transition lg:invisible lg:-translate-y-[40%] lg:opacity-0 lg:group-hover:visible lg:group-hover:-translate-y-1/2 lg:group-hover:opacity-100">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" class="h-6 w-6">
                                            <path d="M10 4.167v11.666M4.167 10h11.666" />
                                        </svg>
                                    </a>
                                </div>
                            </div>

                            <div class="flex flex-wrap items-start justify-between py-4 md:p-6">
                                <div class="">
                                    <h3 class="text-lg font-medium md:text-xl lg:text-2xl">
                                        <a href="#" class="border-b border-transparent text-dark transition hover:border-b-primary hover:text-primary dark:text-light/80 dark:hover:text-primary">
                                            FlowArch - Architecture Service Website
                                        </a>
                                    </h3>
                                    <p class="text-sm text-muted lg:text-base">
                                        UI UX Design | Development
                                    </p>
                                </div>

                                <a href="#" class="inline-flex items-center justify-center gap-1 rounded bg-white px-3 py-2 text-center text-sm leading-none text-dark transition hover:text-primary dark:bg-black dark:text-light/70 dark:hover:text-primary">
                                    <span>Visit Site</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 15" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4 shrink-0">
                                        <path d="m9.917 4.583-5.834 5.834m.584-5.834h5.25v5.25" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Pagination -->
                    <nav style='background-color: #f0f8ff24;width: fit-content;margin: auto;' class="mt-10 flex items-center justify-center gap-1.5">
                        <button type="button" class="inline-flex min-h-9 min-w-9 items-center justify-center rounded-lg border border-light text-center text-dark transition hover:border-primary hover:text-primary focus:outline-none focus:ring-2 disabled:pointer-events-none disabled:opacity-50 dark:border-dark dark:text-muted dark:hover:border-primary dark:hover:text-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="h-4 w-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                            </svg>

                            <span aria-hidden="true" class="sr-only">Previous</span>
                        </button>
                        <button type="button" class="inline-flex min-h-9 min-w-9 items-center justify-center rounded-lg border border-light text-center text-dark transition hover:border-primary hover:text-primary focus:outline-none focus:ring-2 disabled:pointer-events-none disabled:opacity-50 dark:border-dark dark:text-muted dark:hover:border-primary dark:hover:text-primary" aria-current="page">
                            1
                        </button>
                        <button type="button" class="inline-flex min-h-9 min-w-9 items-center justify-center rounded-lg border border-light text-center text-dark transition hover:border-primary hover:text-primary focus:outline-none focus:ring-2 disabled:pointer-events-none disabled:opacity-50 dark:border-dark dark:text-muted dark:hover:border-primary dark:hover:text-primary">
                            2
                        </button>
                        <button type="button" class="inline-flex min-h-9 min-w-9 items-center justify-center rounded-lg border border-light text-center text-dark transition hover:border-primary hover:text-primary focus:outline-none focus:ring-2 disabled:pointer-events-none disabled:opacity-50 dark:border-dark dark:text-muted dark:hover:border-primary dark:hover:text-primary">
                            3
                        </button>
                        <div class="hs-tooltip inline-block">
                            <button type="button" class="hs-tooltip-toggle group inline-flex min-h-9 min-w-9 items-center justify-center rounded-lg border border-light text-center text-dark transition hover:border-primary hover:text-primary focus:outline-none focus:ring-2 disabled:pointer-events-none disabled:opacity-50 dark:border-dark dark:text-muted dark:hover:border-primary dark:hover:text-primary">
                                <span class="text-xs group-hover:hidden">•••</span>
                                <svg class="hidden h-5 w-5 flex-shrink-0 group-hover:block" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="m6 17 5-5-5-5" />
                                    <path d="m13 17 5-5-5-5" />
                                </svg>
                                <span
										class="hs-tooltip-content invisible absolute z-10 inline-block rounded bg-gray-900 px-2 py-1 text-xs font-medium text-white opacity-0 shadow-sm transition-opacity hs-tooltip-shown:visible hs-tooltip-shown:opacity-100 dark:bg-slate-700"
										role="tooltip">
										Next 4 pages
									</span>
                            </button>
                        </div>
                        <button type="button" class="inline-flex min-h-9 min-w-9 items-center justify-center rounded-lg border border-light text-center text-dark transition hover:border-primary hover:text-primary focus:outline-none focus:ring-2 disabled:pointer-events-none disabled:opacity-50 dark:border-dark dark:text-muted dark:hover:border-primary dark:hover:text-primary">
                            100
                        </button>
                        <button type="button" class="inline-flex min-h-9 min-w-9 items-center justify-center rounded-lg border border-light text-center text-dark transition hover:border-primary hover:text-primary focus:outline-none focus:ring-2 disabled:pointer-events-none disabled:opacity-50 dark:border-dark dark:text-muted dark:hover:border-primary dark:hover:text-primary">
                            <span aria-hidden="true" class="sr-only">Next</span>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="h-4 w-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                            </svg>
                        </button>
                    </nav>
                    <!-- End Pagination -->
                </div>

            </div>

        </main>
    </div>
    @endsection
    @section('scripts')
        <!-- App js -->
        <script src="{{ URL::asset('public/build/js/app.js') }}"></script>
@endsection

    <script src="./assets/js/preline.js"></script>
    <script src="./assets/js/swiper-bundle.min.js"></script>
    <script src="./assets/js/venobox.min.js"></script>
    <script src="./assets/js/clipboard.min.js"></script>
    <script src="./assets/js/main.js"></script>

</body>

</html>