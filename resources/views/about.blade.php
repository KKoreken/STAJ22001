
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

        <main class="grid grid-cols-1 gap-4 lg:grid-cols-3 lg:gap-6">
            <!-- Intro -->
            <div class="">
                <div class="rounded-2xl bg-white p-6 shadow dark:bg-black dark:shadow-dark lg:sticky lg:top-24">
                    <div class="aspect-6/4 overflow-hidden rounded-lg bg-light pt-4 text-center dark:bg-dark-2">
                        <img src="assets/img/profile.png" alt="" class="inline-block h-full w-full scale-110 object-contain object-bottom" />
                    </div>

                    <div class="mt-6">
                        <?=$hakkimda->text?>
                        <!-- Social -->
                        <div class="mt-8 flex flex-wrap items-center gap-2">
                            <a href="#" class="flex h-10 w-10 items-center justify-center rounded-lg border border-slate-200 bg-transparent text-center text-slate-600 transition hover:text-primary focus:outline-none focus:ring disabled:pointer-events-none disabled:opacity-50 dark:border-transparent dark:bg-dark-2 dark:text-slate-500 dark:hover:text-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-6 w-6">
                                    <path d="M12 2C6.477 2 2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.879V14.89h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.989C18.343 21.129 22 16.99 22 12c0-5.523-4.477-10-10-10Z" />
                                </svg>
                            </a>
                            <a href="#" class="flex h-10 w-10 items-center justify-center rounded-lg border border-slate-200 bg-transparent text-center text-slate-600 transition hover:text-primary focus:outline-none focus:ring disabled:pointer-events-none disabled:opacity-50 dark:border-transparent dark:bg-dark-2 dark:text-slate-500 dark:hover:text-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-6 w-6">
                                    <path d="M13.37 2.094A10.003 10.003 0 0 0 8.002 21.17a7.757 7.757 0 0 1 .163-2.293c.185-.839 1.296-5.463 1.296-5.463a3.74 3.74 0 0 1-.324-1.577c0-1.485.857-2.593 1.923-2.593a1.334 1.334 0 0 1 1.342 1.508c0 .9-.578 2.262-.88 3.54a1.544 1.544 0 0 0 1.575 1.923c1.898 0 3.17-2.431 3.17-5.301 0-2.2-1.457-3.848-4.143-3.848a4.746 4.746 0 0 0-4.93 4.794 2.96 2.96 0 0 0 .648 1.97.48.48 0 0 1 .162.554c-.046.184-.162.623-.208.784a.354.354 0 0 1-.51.254c-1.384-.554-2.036-2.077-2.036-3.816 0-2.847 2.384-6.255 7.154-6.255 3.796 0 6.32 2.777 6.32 5.747 0 3.909-2.177 6.848-5.394 6.848a2.862 2.862 0 0 1-2.454-1.246s-.578 2.316-.692 2.754a8.026 8.026 0 0 1-1.019 2.131c.923.28 1.882.42 2.846.416a9.99 9.99 0 0 0 9.996-10.003 10.002 10.002 0 0 0-8.635-9.903l-.002-.001Z" />
                                </svg>
                            </a>
                            <a href="#" class="flex h-10 w-10 items-center justify-center rounded-lg border border-slate-200 bg-transparent text-center text-slate-600 transition hover:text-primary focus:outline-none focus:ring disabled:pointer-events-none disabled:opacity-50 dark:border-transparent dark:bg-dark-2 dark:text-slate-500 dark:hover:text-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-6 w-6">
                                    <path d="M12 2C6.475 2 2 6.475 2 12a9.994 9.994 0 0 0 6.838 9.488c.5.087.687-.213.687-.476 0-.237-.013-1.024-.013-1.862-2.512.463-3.162-.612-3.362-1.175-.113-.288-.6-1.175-1.025-1.413-.35-.187-.85-.65-.013-.662.788-.013 1.35.725 1.538 1.025.9 1.512 2.338 1.087 2.912.825.088-.65.35-1.087.638-1.337-2.225-.25-4.55-1.113-4.55-4.938 0-1.088.387-1.987 1.025-2.688-.1-.25-.45-1.275.1-2.65 0 0 .837-.262 2.75 1.026a9.28 9.28 0 0 1 2.5-.338c.85 0 1.7.112 2.5.337 1.912-1.3 2.75-1.024 2.75-1.024.55 1.375.2 2.4.1 2.65.637.7 1.025 1.587 1.025 2.687 0 3.838-2.337 4.688-4.562 4.938.362.312.675.912.675 1.85 0 1.337-.013 2.412-.013 2.75 0 .262.188.574.688.474A10.016 10.016 0 0 0 22 12c0-5.525-4.475-10-10-10Z" />
                                </svg>
                            </a>
                            <a href="#" class="flex h-10 w-10 items-center justify-center rounded-lg border border-slate-200 bg-transparent text-center text-slate-600 transition hover:text-primary focus:outline-none focus:ring disabled:pointer-events-none disabled:opacity-50 dark:border-transparent dark:bg-dark-2 dark:text-slate-500 dark:hover:text-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-6 w-6">
                                    <path d="M21.543 6.498C22 8.28 22 12 22 12s0 3.72-.457 5.502c-.254.985-.997 1.76-1.938 2.022C17.896 20 12 20 12 20s-5.893 0-7.605-.476c-.945-.266-1.687-1.04-1.938-2.022C2 15.72 2 12 2 12s0-3.72.457-5.502c.254-.985.997-1.76 1.938-2.022C6.107 4 12 4 12 4s5.896 0 7.605.476c.945.266 1.687 1.04 1.938 2.022ZM10 15.5l6-3.5-6-3.5v7Z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- about -->
            <div class="rounded-2xl bg-white p-6 shadow dark:bg-black dark:shadow-dark lg:col-span-2 lg:p-10">
                <div class="flex flex-col-reverse items-start gap-6 lg:flex-row lg:gap-10">
                    <div class="">
                        <h2 class="text-3xl font-semibold text-dark dark:text-light lg:text-[40px]">
                            Hi, This Is <span class="text-primary">Cris Rayaan</span> 👋
                        </h2>
                        <p class="mt-4 text-lg text-muted dark:text-light/70 lg:mt-6 lg:text-2xl">
                            A Passionate
                            <span class="font-semibold text-dark dark:text-white">
									Full Stack Developer
								</span>
                            🖥️ &
                            <span class="font-semibold text-dark dark:text-white">
									Product Designer
								</span>
                            having
                            <span class="font-semibold text-dark dark:text-white">
									12 years
								</span>
                            of Experiences over 24+ Country Worldwide.
                        </p>
                    </div>
                    <div class="flex items-center justify-center gap-2 whitespace-nowrap rounded-lg bg-light px-4 py-2 text-center text-base font-medium leading-none text-primary dark:bg-dark-2 lg:text-lg">
                        <span class="relative flex h-2 w-2 shrink-0">
								<span
									class="absolute inline-flex h-full w-full animate-ping rounded-full bg-primary opacity-75 dark:bg-light"></span>
                        <span
									class="relative inline-flex h-2 w-2 rounded-full bg-primary"></span>
                        </span>
                    </div>
                </div>

                <div class="mt-8 flex flex-wrap justify-between gap-6 lg:mt-12 lg:gap-10">
                    <div class="flex flex-wrap items-start gap-6 lg:gap-10">
                        <div class="">
                            <h2 class="text-3xl font-semibold text-dark dark:text-light lg:text-[40px]">
                                <span>40</span>+
                            </h2>
                            <p class="mt-2 text-muted">Year of Experience</p>
                        </div>
                        <div class="">
                            <h2 class="text-3xl font-semibold text-dark dark:text-light lg:text-[40px]">
                                <span>86</span>+
                            </h2>
                            <p class="mt-2 text-muted">Project Completed</p>
                        </div>
                        <div class="">
                            <h2 class="text-3xl font-semibold text-dark dark:text-light lg:text-[40px]">
                                <span>72</span>+
                            </h2>
                            <p class="mt-2 text-muted">Happy Client</p>
                        </div>
                    </div>

                    <div class="relative -mt-6 hidden h-[100px] w-[100px] p-4 lg:block xl:-mt-10">
                        <img src="assets/img/circle-text.svg" alt="" class="absolute inset-0 h-full w-full animate-spin-slow dark:hidden" />
                        <img src="assets/img/circle-text-light.svg" alt="" class="absolute inset-0 hidden h-full w-full animate-spin-slow dark:block" />
                        <div class="grid h-full w-full place-content-center rounded-full bg-primary text-light">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="h-10 w-10">
                                <path d="M20 5v30m-5-5 5 5 5-5" />
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Brands -->
                <div class="mt-10 lg:mt-14">
                    <h3 class="text-2xl font-medium text-dark dark:text-light lg:text-3xl">
                        Working With 50+ Brands ✨ Worldwide
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

                <!-- Reviews -->
                <div class="mt-10 lg:mt-14">
                    <div class="flex flex-wrap items-center justify-between gap-6">
                        <h3 class="text-2xl font-medium text-dark dark:text-light lg:text-3xl">
                            Trusted By 1200+ Clients
                        </h3>

                        <div class="flex items-center gap-2">
                            <button class="review-carousel-button-prev grid h-9 w-9 place-content-center rounded-lg border border-muted/30 text-muted transition hover:border-primary hover:text-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" class="h-5 w-5 shrink-0">
                                    <path d="M4.167 10h11.666M4.167 10l5 5m-5-5 5-5" />
                                </svg>
                            </button>
                            <button class="review-carousel-button-next grid h-9 w-9 place-content-center rounded-lg border border-muted/30 text-muted transition hover:border-primary hover:text-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" class="h-5 w-5 shrink-0">
                                    <path d="M4.167 10h11.666m-5 5 5-5m-5-5 5 5" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="mt-8">
                        <div class="swiper review-carousel">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="flex h-full flex-col justify-between rounded-lg bg-light p-6 dark:bg-dark-2">
                                        <div class="flex flex-wrap items-center justify-between gap-4">
                                            <!-- stars -->
                                            <div class="flex flex-wrap items-center gap-1">
                                                <img src="assets/img/star-full.svg" alt="" class="h-4 w-4 shrink-0" />
                                                <img src="assets/img/star-full.svg" alt="" class="h-4 w-4 shrink-0" />
                                                <img src="assets/img/star-full.svg" alt="" class="h-4 w-4 shrink-0" />
                                                <img src="assets/img/star-full.svg" alt="" class="h-4 w-4 shrink-0" />
                                                <img src="assets/img/star-full.svg" alt="" class="h-4 w-4 shrink-0" />
                                            </div>

                                            <a href="#" class="inline-flex items-center gap-2 rounded bg-white px-2 py-1 text-sm leading-none text-primary transition hover:bg-primary hover:text-white dark:bg-black">
                                                <span>framer.com</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 15" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" class="h-3.5 w-3.5 shrink-0">
                                                    <path d="m9.917 4.583-5.834 5.834m.584-5.834h5.25v5.25" />
                                                </svg>
                                            </a>
                                        </div>

                                        <blockquote class="mt-6 flex-1 text-lg">
                                            "We've been using BentoFolio for over a year now,
                                            and I must say, it's been a game-changer for us. The
                                            user interface is intuitive and the feature.
                                        </blockquote>

                                        <p class="mt-8 font-medium">
                                            Oliver Clain -
                                            <span class="font-normal text-muted">
													Product Designer
												</span>
                                        </p>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="flex h-full flex-col justify-between rounded-lg bg-light p-6 dark:bg-dark-2">
                                        <div class="flex flex-wrap items-center justify-between gap-4">
                                            <!-- stars -->
                                            <div class="flex flex-wrap items-center gap-1">
                                                <img src="assets/img/star-full.svg" alt="" class="h-4 w-4 shrink-0" />
                                                <img src="assets/img/star-full.svg" alt="" class="h-4 w-4 shrink-0" />
                                                <img src="assets/img/star-full.svg" alt="" class="h-4 w-4 shrink-0" />
                                                <img src="assets/img/star-full.svg" alt="" class="h-4 w-4 shrink-0" />
                                                <img src="assets/img/star-full.svg" alt="" class="h-4 w-4 shrink-0" />
                                            </div>

                                            <a href="#" class="inline-flex items-center gap-2 rounded bg-white px-2 py-1 text-sm leading-none text-primary transition hover:bg-primary hover:text-white dark:bg-black">
                                                <span>framer.com</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 15" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" class="h-3.5 w-3.5 shrink-0">
                                                    <path d="m9.917 4.583-5.834 5.834m.584-5.834h5.25v5.25" />
                                                </svg>
                                            </a>
                                        </div>

                                        <blockquote class="mt-6 flex-1 text-lg">
                                            "We've been using BentoFolio for over a year now,
                                            and I must say, it's been a game-changer for us. The
                                            user interface is intuitive and the feature.
                                        </blockquote>

                                        <p class="mt-8 font-medium">
                                            Oliver Clain -
                                            <span class="font-normal text-muted">
													Product Designer
												</span>
                                        </p>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="flex h-full flex-col justify-between rounded-lg bg-light p-6 dark:bg-dark-2">
                                        <div class="flex flex-wrap items-center justify-between gap-4">
                                            <!-- stars -->
                                            <div class="flex flex-wrap items-center gap-1">
                                                <img src="assets/img/star-full.svg" alt="" class="h-4 w-4 shrink-0" />
                                                <img src="assets/img/star-full.svg" alt="" class="h-4 w-4 shrink-0" />
                                                <img src="assets/img/star-full.svg" alt="" class="h-4 w-4 shrink-0" />
                                                <img src="assets/img/star-full.svg" alt="" class="h-4 w-4 shrink-0" />
                                                <img src="assets/img/star-full.svg" alt="" class="h-4 w-4 shrink-0" />
                                            </div>

                                            <a href="#" class="inline-flex items-center gap-2 rounded bg-white px-2 py-1 text-sm leading-none text-primary transition hover:bg-primary hover:text-white dark:bg-black">
                                                <span>framer.com</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 15" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" class="h-3.5 w-3.5 shrink-0">
                                                    <path d="m9.917 4.583-5.834 5.834m.584-5.834h5.25v5.25" />
                                                </svg>
                                            </a>
                                        </div>

                                        <blockquote class="mt-6 flex-1 text-lg">
                                            "We've been using BentoFolio for over a year now,
                                            and I must say, it's been a game-changer for us. The
                                            user interface is intuitive and the feature.
                                        </blockquote>

                                        <p class="mt-8 font-medium">
                                            Oliver Clain -
                                            <span class="font-normal text-muted">
													Product Designer
												</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Awards -->
                <div class="mt-10 lg:mt-14">
                    <h3 class="text-2xl font-medium text-dark dark:text-light lg:text-3xl">
                        Awards and Recognitions
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
                        <div class="group relative grid grid-cols-1 items-center gap-4 rounded-lg border border-transparent bg-light p-6 transition hover:border-light hover:bg-white dark:bg-dark-2 dark:hover:border-primary dark:hover:bg-black md:grid-cols-4 xl:gap-10">
                            <div class="flex flex-col gap-4 md:col-span-2 md:flex-row md:items-center md:gap-6">
                                <div class="grid h-10 w-10 shrink-0 place-content-center rounded-lg bg-white transition group-hover:bg-light dark:bg-black dark:group-hover:bg-dark-2">
                                    <img src="assets/img/dribbble.svg" alt="" class="h-6 w-6 shrink-0" />
                                </div>
                                <div class="">
                                    <h5 class="font-medium leading-tight text-dark dark:text-light xl:text-lg xl:leading-tight">
                                        Dribbble Design Contest
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
                                    Gold Winner
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
                        <div class="group relative grid grid-cols-1 items-center gap-4 rounded-lg border border-transparent bg-light p-6 transition hover:border-light hover:bg-white dark:bg-dark-2 dark:hover:border-primary dark:hover:bg-black md:grid-cols-4 xl:gap-10">
                            <div class="flex flex-col gap-4 md:col-span-2 md:flex-row md:items-center md:gap-6">
                                <div class="grid h-10 w-10 shrink-0 place-content-center rounded-lg bg-white transition group-hover:bg-light dark:bg-black dark:group-hover:bg-dark-2">
                                    <img src="assets/img/awwwards.png" alt="" class="h-6 w-6 shrink-0" />
                                </div>
                                <div class="">
                                    <h5 class="font-medium leading-tight text-dark dark:text-light xl:text-lg xl:leading-tight">
                                        Awwwards Nominee
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
                        <div class="group relative grid grid-cols-1 items-center gap-4 rounded-lg border border-transparent bg-light p-6 transition hover:border-light hover:bg-white dark:bg-dark-2 dark:hover:border-primary dark:hover:bg-black md:grid-cols-4 xl:gap-10">
                            <div class="flex flex-col gap-4 md:col-span-2 md:flex-row md:items-center md:gap-6">
                                <div class="grid h-10 w-10 shrink-0 place-content-center rounded-lg bg-white transition group-hover:bg-light dark:bg-black dark:group-hover:bg-dark-2">
                                    <img src="assets/img/behance.svg" alt="" class="h-6 w-6 shrink-0" />
                                </div>
                                <div class="">
                                    <h5 class="font-medium leading-tight text-dark dark:text-light xl:text-lg xl:leading-tight">
                                        Behance Design Contest
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
                                    Gold Winner
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

                <!-- Blog -->
                <div class="mt-10 lg:mt-14">
                    <div class="flex flex-wrap items-center justify-between gap-6">
                        <h3 class="text-2xl font-medium text-dark dark:text-light lg:text-3xl">
                            Article and Publications
                        </h3>

                        <div class="flex items-center gap-2">
                            <button class="blog-carousel-button-prev grid h-9 w-9 place-content-center rounded-lg border border-muted/30 text-muted transition hover:border-primary hover:text-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" class="h-5 w-5 shrink-0">
                                    <path d="M4.167 10h11.666M4.167 10l5 5m-5-5 5-5" />
                                </svg>
                            </button>
                            <button class="blog-carousel-button-next grid h-9 w-9 place-content-center rounded-lg border border-muted/30 text-muted transition hover:border-primary hover:text-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" class="h-5 w-5 shrink-0">
                                    <path d="M4.167 10h11.666m-5 5 5-5m-5-5 5 5" />
                                </svg>
                            </button>
                        </div>
                    </div>

                    <div class="mt-8">
                        <div class="swiper blog-carousel">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="">
                                        <div class="relative">
                                            <a href="article.html" class="group block aspect-6/4 overflow-hidden rounded-lg">
                                                <img src="assets/img/blog-img-1.jpg" alt="" class="h-full w-full rounded-lg object-cover transition duration-700 group-hover:scale-105" />
                                            </a>

                                            <!-- Tags -->
                                            <div class="absolute bottom-4 left-4 flex flex-wrap gap-2">
                                                <a href="#" class="inline-flex items-center justify-center gap-2 rounded bg-white px-2 py-1 text-center text-xs leading-none text-primary shadow transition hover:bg-primary hover:text-white">
                                                    Development
                                                </a>
                                            </div>
                                        </div>
                                        <div class="mt-6">
                                            <h2 class="text-xl font-medium xl:text-2xl">
                                                <a href="article.html" class="inline-block text-dark transition hover:text-primary dark:text-light/70 dark:hover:text-primary">
                                                    Want To Upgrade Your Brain? Stop Doing These
                                                    7 Things
                                                </a>
                                            </h2>

                                            <ul class="mt-4 flex flex-wrap items-center gap-2">
                                                <li class="relative text-sm text-muted/50 before:mr-1 before:content-['\2022'] dark:text-muted">
                                                    15 min read
                                                </li>
                                                <li class="relative text-sm text-muted/50 before:mr-1 before:content-['\2022'] dark:text-muted">
                                                    Nov 6, 2023
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="">
                                        <div class="relative">
                                            <a href="article.html" class="group block aspect-6/4 overflow-hidden rounded-lg">
                                                <img src="assets/img/blog-img-2.jpg" alt="" class="h-full w-full rounded-lg object-cover transition duration-700 group-hover:scale-105" />
                                            </a>

                                            <!-- Tags -->
                                            <div class="absolute bottom-4 left-4 flex flex-wrap gap-2">
                                                <a href="#" class="inline-flex items-center justify-center gap-2 rounded bg-white px-2 py-1 text-center text-xs leading-none text-primary shadow transition hover:bg-primary hover:text-white">
                                                    Development
                                                </a>
                                            </div>
                                        </div>
                                        <div class="mt-6">
                                            <h2 class="text-xl font-medium xl:text-2xl">
                                                <a href="article.html" class="inline-block text-dark transition hover:text-primary dark:text-light/70 dark:hover:text-primary">
                                                    Want To Upgrade Your Brain? Stop Doing These
                                                    7 Things
                                                </a>
                                            </h2>

                                            <ul class="mt-4 flex flex-wrap items-center gap-2">
                                                <li class="relative text-sm text-muted/50 before:mr-1 before:content-['\2022'] dark:text-muted">
                                                    15 min read
                                                </li>
                                                <li class="relative text-sm text-muted/50 before:mr-1 before:content-['\2022'] dark:text-muted">
                                                    Nov 6, 2023
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="">
                                        <div class="relative">
                                            <a href="article.html" class="group block aspect-6/4 overflow-hidden rounded-lg">
                                                <img src="assets/img/blog-img-3.jpg" alt="" class="h-full w-full rounded-lg object-cover transition duration-700 group-hover:scale-105" />
                                            </a>

                                            <!-- Tags -->
                                            <div class="absolute bottom-4 left-4 flex flex-wrap gap-2">
                                                <a href="#" class="inline-flex items-center justify-center gap-2 rounded bg-white px-2 py-1 text-center text-xs leading-none text-primary shadow transition hover:bg-primary hover:text-white">
                                                    Development
                                                </a>
                                            </div>
                                        </div>
                                        <div class="mt-6">
                                            <h2 class="text-xl font-medium xl:text-2xl">
                                                <a href="article.html" class="inline-block text-dark transition hover:text-primary dark:text-light/70 dark:hover:text-primary">
                                                    Want To Upgrade Your Brain? Stop Doing These
                                                    7 Things
                                                </a>
                                            </h2>

                                            <ul class="mt-4 flex flex-wrap items-center gap-2">
                                                <li class="relative text-sm text-muted/50 before:mr-1 before:content-['\2022'] dark:text-muted">
                                                    15 min read
                                                </li>
                                                <li class="relative text-sm text-muted/50 before:mr-1 before:content-['\2022'] dark:text-muted">
                                                    Nov 6, 2023
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact -->
                <div class="mt-10 lg:mt-14">
                    <div class="group flex gap-6 overflow-hidden rounded-lg bg-light p-6 dark:bg-dark-2">
                        <div class="relative flex min-w-full shrink-0 animate-infinite-scroll gap-6 group-hover:[animation-play-state:paused]">
                            <a href="contact.html" class="relative inline-block whitespace-nowrap text-3xl font-medium text-muted transition before:mr-3 before:content-['\2022'] hover:text-dark dark:text-muted dark:hover:text-white md:text-[40px]">
                                Let's 👋 Work Together
                            </a>
                            <a href="contact.html" class="relative inline-block whitespace-nowrap text-3xl font-medium text-muted transition before:mr-3 before:content-['\2022'] hover:text-dark dark:text-muted dark:hover:text-white md:text-[40px]">
                                Let's 👋 Work Together
                            </a>
                        </div>
                        <div class="relative flex min-w-full shrink-0 animate-infinite-scroll gap-6 group-hover:[animation-play-state:paused]">
                            <a href="contact.html" class="relative inline-block whitespace-nowrap text-3xl font-medium text-muted transition before:mr-3 before:content-['\2022'] hover:text-dark dark:text-muted dark:hover:text-white md:text-[40px]">
                                Let's 👋 Work Together
                            </a>
                            <a href="contact.html" class="relative inline-block whitespace-nowrap text-3xl font-medium text-muted transition before:mr-3 before:content-['\2022'] hover:text-dark dark:text-muted dark:hover:text-white md:text-[40px]">
                                Let's 👋 Work Together
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <!-- Footer -->
        <footer class="text-center">
            <p class="text-sm dark:text-light/70">
                @ BentoFolio 2023, Design By
                <a href="#" class="inline-block border-b border-b-transparent text-primary transition hover:border-b-primary hover:text-blue-600">
                    MarvelTheme
                </a>
            </p>
        </footer>
    </div>

    <div class="shapes">
        <div class="fixed -left-1/2 -top-1/2 -z-10 animate-spin-very-slow xl:-left-[20%] xl:-top-1/3">
            <img src="assets/img/gradient-1.png" alt="" class="" />
        </div>

        <div class="fixed -right-[50%] top-[10%] -z-10 animate-spin-very-slow xl:-right-[15%] xl:top-[10%]">
            <img src="assets/img/gradient-2.png" alt="" class="" />
        </div>

        <div class="move-with-cursor fixed left-[10%] top-[20%] -z-10">
            <img src="assets/img/object-3d-1.png" alt="" class="" />
        </div>

        <div class="move-with-cursor fixed bottom-[20%] right-[10%] -z-10">
            <img src="assets/img/object-3d-2.png" alt="" class="" />
        </div>
    </div>    @endsection
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
