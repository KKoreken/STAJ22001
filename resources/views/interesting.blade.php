
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

            <!-- Services -->
            <div class="rounded-2xl bg-white p-6 shadow dark:bg-black dark:shadow-dark lg:col-span-2 lg:p-10">
                <div class="flex flex-col-reverse items-start gap-6 lg:flex-row lg:gap-10">
                    <div class="">
                        <h2 class="text-3xl font-semibold text-dark dark:text-light lg:text-[40px]">
                            İlgi  Alanlarım I <span class="text-primary">Teknolojiler</span>
                        </h2>
                        <p class="mt-4 text-lg text-muted dark:text-light/70 lg:mt-6 lg:text-2xl">
                            <span class="font-semibold text-dark dark:text-white">
									Kendimi geliştirmeye devam ettiğim  alanlar ve bu alanlarda daha efektif projeler geliştirebilmek için kullandığım teknolojiler
								</span>
                        </p>
                    </div>
                </div>

                <!-- Service cards -->
                <div class="mt-10 grid grid-cols-2 gap-6 md:grid-cols-4 lg:mt-14">
                    <div class="rounded-2xl bg-light p-2 text-center dark:bg-dark-2 md:p-4">
                        <div class="grid place-content-center rounded-lg bg-white p-6 dark:bg-black">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="h-12 w-12 text-primary lg:h-16 lg:w-16">
                                <path d="M8 13.333A5.333 5.333 0 0 1 13.333 8h37.334A5.333 5.333 0 0 1 56 13.333v37.334A5.333 5.333 0 0 1 50.667 56H13.333A5.333 5.333 0 0 1 8 50.667V13.333ZM40 8 8 40M25.334 8l-16 16M53.333 9.333 38.667 24M24 40 10.666 53.333" />
                                <path d="M56 24H24v32" />
                            </svg>
                        </div>
                        <p class="mt-3 text-base font-medium text-dark dark:text-light/70">
                            UI UX Design
                        </p>
                    </div>
                    <div class="rounded-2xl bg-light p-2 text-center dark:bg-dark-2 md:p-4">
                        <div class="grid place-content-center rounded-lg bg-white p-6 dark:bg-black">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="h-12 w-12 text-primary lg:h-16 lg:w-16">
                                <path d="M26.666 18.667A5.333 5.333 0 0 1 32 13.333h16a5.333 5.333 0 0 1 5.333 5.334v26.666A5.333 5.333 0 0 1 48 50.667H32a5.333 5.333 0 0 1-5.334-5.334V18.667Zm-8 0v26.666m-8-24v21.334" />
                            </svg>
                        </div>
                        <p class="mt-3 text-base font-medium text-dark dark:text-light/70">
                            Mobile App
                        </p>
                    </div>
                    <div class="rounded-2xl bg-light p-2 text-center dark:bg-dark-2 md:p-4">
                        <div class="grid place-content-center rounded-lg bg-white p-6 dark:bg-black">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="h-12 w-12 text-primary lg:h-16 lg:w-16">
                                <path d="M10.666 13.333a2.667 2.667 0 0 1 2.667-2.666h37.334a2.667 2.667 0 0 1 2.666 2.666v5.334a2.667 2.667 0 0 1-2.666 2.666H13.332a2.666 2.666 0 0 1-2.667-2.666v-5.334Zm0 21.334A2.667 2.667 0 0 1 13.333 32H24a2.667 2.667 0 0 1 2.666 2.667v16A2.667 2.667 0 0 1 24 53.333H13.333a2.666 2.666 0 0 1-2.667-2.666v-16ZM37.334 32h16m-16 10.667h16m-16 10.666h16" />
                            </svg>
                        </div>
                        <p class="mt-3 text-base font-medium text-dark dark:text-light/70">
                            Product Design
                        </p>
                    </div>
                    <div class="rounded-2xl bg-light p-2 text-center dark:bg-dark-2 md:p-4">
                        <div class="grid place-content-center rounded-lg bg-white p-6 dark:bg-black">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="h-12 w-12 text-primary lg:h-16 lg:w-16">
                                <path d="M36.214 36.773a15.982 15.982 0 0 1 1.12 5.894A15.86 15.86 0 0 1 32 54.56a15.814 15.814 0 0 1-10.666 4.107c-8.827 0-16-7.174-16-16 0-7.36 5.013-13.6 11.786-15.44" />
                                <path d="M46.88 27.227c6.773 1.84 11.787 8.08 11.787 15.44 0 8.826-7.174 16-16 16A15.814 15.814 0 0 1 32 54.56" />
                                <path d="M16 21.333a16 16 0 1 0 32 0 16 16 0 0 0-32 0Z" />
                            </svg>
                        </div>
                        <p class="mt-3 text-base font-medium text-dark dark:text-light/70">
                            Branding
                        </p>
                    </div>
                    <div class="rounded-2xl bg-light p-2 text-center dark:bg-dark-2 md:p-4">
                        <div class="grid place-content-center rounded-lg bg-white p-6 dark:bg-black">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="h-12 w-12 text-primary lg:h-16 lg:w-16">
                                <path d="M13.333 18.667H16a5.334 5.334 0 0 0 5.333-5.334A2.667 2.667 0 0 1 24 10.667h16a2.667 2.667 0 0 1 2.667 2.666A5.333 5.333 0 0 0 48 18.667h2.667A5.334 5.334 0 0 1 56 24v24a5.333 5.333 0 0 1-5.333 5.333H13.333A5.333 5.333 0 0 1 8 48V24a5.333 5.333 0 0 1 5.333-5.333Z" />
                                <path d="M24 34.667a8 8 0 1 0 16 0 8 8 0 0 0-16 0Z" />
                            </svg>
                        </div>
                        <p class="mt-3 text-base font-medium text-dark dark:text-light/70">
                            Photography
                        </p>
                    </div>
                    <div class="rounded-2xl bg-light p-2 text-center dark:bg-dark-2 md:p-4">
                        <div class="grid place-content-center rounded-lg bg-white p-6 dark:bg-black">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="h-12 w-12 text-primary lg:h-16 lg:w-16">
                                <path d="m49.621 47.333-10.4.715h-.072a36.88 36.88 0 0 0-9.925 2.208l-6.696 2.421a10.962 10.962 0 0 1-8.765-.576 10.188 10.188 0 0 1-5.28-6.738l-3.67-16.134a9.784 9.784 0 0 1 1.43-7.626 10.57 10.57 0 0 1 6.637-4.43l30-6.277c5.699-1.195 11.325 2.267 12.568 7.733l3.741 16.432a9.806 9.806 0 0 1-1.858 8.23 10.686 10.686 0 0 1-7.707 4.032v.005l-.003.005Z" />
                                <path d="M24 26.667 27.221 40l11.446-10.667L24 26.667Z" />
                            </svg>
                        </div>
                        <p class="mt-3 text-base font-medium text-dark dark:text-light/70">
                            Motion Design
                        </p>
                    </div>
                    <div class="rounded-2xl bg-light p-2 text-center dark:bg-dark-2 md:p-4">
                        <div class="grid place-content-center rounded-lg bg-white p-6 dark:bg-black">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="h-12 w-12 text-primary lg:h-16 lg:w-16">
                                <path d="M33.333 42.667H10.667A2.667 2.667 0 0 1 8 40V13.333a2.667 2.667 0 0 1 2.667-2.666h42.666A2.667 2.667 0 0 1 56 13.333v21.334M18.667 53.333h10.666M24 42.667v10.666M53.333 56l5.334-5.333-5.334-5.334m-8 0L40 50.667 45.333 56" />
                            </svg>
                        </div>
                        <p class="mt-3 text-base font-medium text-dark dark:text-light/70">
                            Web Development
                        </p>
                    </div>
                    <div class="rounded-2xl bg-light p-2 text-center dark:bg-dark-2 md:p-4">
                        <div class="grid place-content-center rounded-lg bg-white p-6 dark:bg-black">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="h-12 w-12 text-primary lg:h-16 lg:w-16">
                                <path d="M26.667 32a5.333 5.333 0 1 0 10.666 0 5.333 5.333 0 0 0-10.666 0Z" />
                                <path d="M56 32c-6.4 10.667-14.4 16-24 16S14.4 42.667 8 32c6.4-10.667 14.4-16 24-16s17.6 5.333 24 16Z" />
                            </svg>
                        </div>
                        <p class="mt-3 text-base font-medium text-dark dark:text-light/70">
                            Visualization
                        </p>
                    </div>
                </div>


                <!-- Logolar -->
                <div class="mt-10 lg:mt-14">
                    <h3 class="text-2xl font-medium text-capitalize text-dark dark:text-light lg:text-3xl">
                        Projelerde Kullandığım Teknolojiler ✨ 
                    </h3>
                    <div class="mt-8 grid grid-cols-[repeat(auto-fit,_minmax(60px,1fr))] gap-2 lg:grid-cols-[repeat(auto-fit,_minmax(80px,1fr))] lg:gap-4">
                        <div class="grid h-16 place-content-center rounded-lg bg-light p-3 dark:bg-dark-2 lg:h-20 lg:rounded-2xl lg:p-4">
                            <img src="assets/img/notion.svg" alt="" class="h-8 w-8 lg:h-10 lg:w-10" />
                        </div>
                        <div class="grid h-16 place-content-center rounded-lg bg-light p-3 dark:bg-dark-2 lg:h-20 lg:rounded-2xl lg:p-4">
                            <img src="assets/img/webflow.svg" alt="" class="h-8 w-8 lg:h-10 lg:w-10" />
                        </div>
                        <div class="grid h-16 place-content-center rounded-lg bg-light p-3 dark:bg-dark-2 lg:h-20 lg:rounded-2xl lg:p-4">
                            <img src="assets/img/mico.svg" alt="" class="h-8 w-8 lg:h-10 lg:w-10" />
                        </div>
                        <div class="grid h-16 place-content-center rounded-lg bg-light p-3 dark:bg-dark-2 lg:h-20 lg:rounded-2xl lg:p-4">
                            <img src="assets/img/framer.svg" alt="" class="h-8 w-8 lg:h-10 lg:w-10" />
                        </div>
                        <div class="grid h-16 place-content-center rounded-lg bg-light p-3 dark:bg-dark-2 lg:h-20 lg:rounded-2xl lg:p-4">
                            <img src="assets/img/zeplin.svg" alt="" class="h-8 w-8 lg:h-10 lg:w-10" />
                        </div>
                        <div class="grid h-16 place-content-center rounded-lg bg-light p-3 dark:bg-dark-2 lg:h-20 lg:rounded-2xl lg:p-4">
                            <img src="assets/img/figma.svg" alt="" class="h-8 w-8 lg:h-10 lg:w-10" />
                        </div>
                        <div class="grid h-16 place-content-center rounded-lg bg-light p-3 dark:bg-dark-2 lg:h-20 lg:rounded-2xl lg:p-4">
                            <img src="assets/img/notion.svg" alt="" class="h-8 w-8 lg:h-10 lg:w-10" />
                        </div>
                        <div class="grid h-16 place-content-center rounded-lg bg-light p-3 dark:bg-dark-2 lg:h-20 lg:rounded-2xl lg:p-4">
                            <img src="assets/img/webflow.svg" alt="" class="h-8 w-8 lg:h-10 lg:w-10" />
                        </div>
                        <div class="grid h-16 place-content-center rounded-lg bg-light p-3 dark:bg-dark-2 lg:h-20 lg:rounded-2xl lg:p-4">
                            <img src="assets/img/mico.svg" alt="" class="h-8 w-8 lg:h-10 lg:w-10" />
                        </div>
                        <div class="grid h-16 place-content-center rounded-lg bg-light p-3 dark:bg-dark-2 lg:h-20 lg:rounded-2xl lg:p-4">
                            <img src="assets/img/framer.svg" alt="" class="h-8 w-8 lg:h-10 lg:w-10" />
                        </div>
                        <div class="grid h-16 place-content-center rounded-lg bg-light p-3 dark:bg-dark-2 lg:h-20 lg:rounded-2xl lg:p-4">
                            <img src="assets/img/zeplin.svg" alt="" class="h-8 w-8 lg:h-10 lg:w-10" />
                        </div>
                        <div class="grid h-16 place-content-center rounded-lg bg-light p-3 dark:bg-dark-2 lg:h-20 lg:rounded-2xl lg:p-4">
                            <img src="assets/img/figma.svg" alt="" class="h-8 w-8 lg:h-10 lg:w-10" />
                        </div>
                        <div class="grid h-16 place-content-center rounded-lg bg-light p-3 dark:bg-dark-2 lg:h-20 lg:rounded-2xl lg:p-4">
                            <img src="assets/img/notion.svg" alt="" class="h-8 w-8 lg:h-10 lg:w-10" />
                        </div>
                        <div class="grid h-16 place-content-center rounded-lg bg-light p-3 dark:bg-dark-2 lg:h-20 lg:rounded-2xl lg:p-4">
                            <img src="assets/img/webflow.svg" alt="" class="h-8 w-8 lg:h-10 lg:w-10" />
                        </div>
                        <div class="grid h-16 place-content-center rounded-lg bg-light p-3 dark:bg-dark-2 lg:h-20 lg:rounded-2xl lg:p-4">
                            <img src="assets/img/mico.svg" alt="" class="h-8 w-8 lg:h-10 lg:w-10" />
                        </div>
                        <div class="grid h-16 place-content-center rounded-lg bg-light p-3 dark:bg-dark-2 lg:h-20 lg:rounded-2xl lg:p-4">
                            <img src="assets/img/framer.svg" alt="" class="h-8 w-8 lg:h-10 lg:w-10" />
                        </div>
                    </div>
                </div>

                <!-- Awards -->
                <div class="mt-10 lg:mt-14">
                    <h3 class="text-2xl font-medium text-dark dark:text-light lg:text-3xl">
                        Sertifika ve Kurslar
                    </h3>

                    <div class="mt-8 space-y-4">
                        <div class="group relative grid grid-cols-1 items-center gap-4 rounded-lg border border-transparent bg-light p-6 transition hover:border-light hover:bg-white dark:bg-dark-2 dark:hover:border-primary dark:hover:bg-black md:grid-cols-4 xl:gap-10">
                            <div class="flex flex-col gap-4 md:col-span-2 md:flex-row md:items-center md:gap-6">
                                <div class="grid h-10 w-10 shrink-0 place-content-center rounded-lg bg-white transition group-hover:bg-light dark:bg-black dark:group-hover:bg-dark-2">
                                    <img src="assets/img/adobe.svg" alt="" class="h-6 w-6 shrink-0" />
                                </div>
                                <div class="">
                                    <h5 class="font-medium leading-tight text-dark dark:text-light xl:text-lg xl:leading-tight">
                                        Adobe Design Contest
                                    </h5>
                                    <p class="text-muted">2022 - 2023</p>
                                </div>
                            </div>

                            <div class="flex items-center gap-1.5">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 25" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" class="h-5 w-5 shrink-0">
                                    <path d="M6 9.5a6 6 0 1 0 12 0 6 6 0 0 0-12 0Z" />
                                    <path d="m12 15.5 3.4 5.89 1.598-3.233 3.598.232-3.4-5.889m-10.394 0-3.4 5.89L7 18.157l1.598 3.232 3.4-5.889" />
                                </svg>
                                <h5 class="font-medium leading-tight text-dark dark:text-light">
                                    Runner Up
                                </h5>
                            </div>

                            <div class="text-right">
                                <a href="#" class="inline-flex items-center justify-center gap-2 rounded bg-white px-3 py-2 text-center text-sm leading-none text-dark transition after:absolute after:inset-0 after:h-full after:w-full after:content-[''] hover:bg-light hover:text-primary dark:bg-black dark:text-light/70 dark:hover:bg-dark-2 dark:hover:text-primary">
                                    <span>View Project</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 15" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" class="h-3.5 w-3.5 shrink-0">
                                        <path d="m9.917 4.583-5.834 5.834m.584-5.834h5.25v5.25" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
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