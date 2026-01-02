<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Vehicle Details - Tesla Model 3</title>
    <!-- Fonts: Plus Jakarta Sans -->
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&amp;display=swap"
        rel="stylesheet" />
    <!-- Material Symbols -->
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <!-- Theme Config -->
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#137fec",
                        "background-light": "#f6f7f8",
                        "background-dark": "#101922",
                        "surface-light": "#ffffff",
                        "surface-dark": "#1a242d",
                        "text-main": "#111418",
                        "text-secondary": "#617589",
                    },
                    fontFamily: {
                        "display": ["Plus Jakarta Sans", "sans-serif"],
                        "body": ["Plus Jakarta Sans", "sans-serif"],
                    },
                    borderRadius: { "DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px" },
                },
            },
        }
    </script>
</head>

<body
    class="bg-background-light dark:bg-background-dark text-text-main dark:text-white font-display transition-colors duration-200">
    <div class="relative flex min-h-screen w-full flex-col overflow-x-hidden">
        <!-- Top Navigation -->
        <header
            class="sticky top-0 z-50 flex items-center justify-between whitespace-nowrap border-b border-solid border-b-[#f0f2f4] dark:border-b-gray-800 bg-surface-light dark:bg-surface-dark px-4 py-3 md:px-10 shadow-sm">
            <div class="flex items-center gap-4 text-text-main dark:text-white">
                <div class="size-8 flex items-center justify-center text-primary">
                    <span class="material-symbols-outlined text-3xl">directions_car</span>
                </div>
                <h2 class="text-text-main dark:text-white text-xl font-bold leading-tight tracking-[-0.015em]">Rentals
                </h2>
            </div>
            <!-- Desktop Nav -->
            <div class="hidden md:flex flex-1 justify-end gap-8 items-center">
                <div class="flex items-center gap-9">
                    <a class="text-text-main dark:text-gray-200 text-sm font-medium leading-normal hover:text-primary transition-colors"
                        href="#">Search</a>
                    <a class="text-text-main dark:text-gray-200 text-sm font-medium leading-normal hover:text-primary transition-colors"
                        href="#">Locations</a>
                    <a class="text-text-main dark:text-gray-200 text-sm font-medium leading-normal hover:text-primary transition-colors"
                        href="#">My Trips</a>
                </div>
                <button
                    class="flex cursor-pointer items-center justify-center overflow-hidden rounded-full size-10 bg-[#f0f2f4] dark:bg-gray-700 text-text-main dark:text-white hover:bg-gray-200 dark:hover:bg-gray-600 transition-colors">
                    <span class="material-symbols-outlined text-[20px]">person</span>
                </button>
            </div>
            <!-- Mobile Menu Icon -->
            <button class="md:hidden text-text-main dark:text-white">
                <span class="material-symbols-outlined">menu</span>
            </button>
        </header>
        <!-- Main Content Area -->
        <main class="flex-1 w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Left Column (Detail Content) -->
                <div class="lg:col-span-2 flex flex-col gap-8">
                    <!-- Page Heading & Title -->
                    <div class="flex flex-col gap-2">
                        <div class="flex items-center gap-2 mb-1">
                            <span
                                class="bg-primary/10 text-primary text-xs font-bold px-2 py-1 rounded-md uppercase tracking-wider">Premium</span>
                            <div class="flex items-center gap-1 text-orange-400">
                                <span class="material-symbols-outlined text-sm fill-current">star</span>
                                <span class="text-sm font-bold text-text-main dark:text-white">4.9</span>
                                <span class="text-sm text-text-secondary dark:text-gray-400">(124 reviews)</span>
                            </div>
                        </div>
                        <h1
                            class="text-text-main dark:text-white text-3xl md:text-4xl font-black leading-tight tracking-[-0.033em]">
                            Tesla Model 3 Long Range</h1>
                        <p
                            class="text-text-secondary dark:text-gray-400 text-base font-normal leading-normal flex items-center gap-2">
                            Luxury Electric Sedan
                            <span class="size-1 rounded-full bg-gray-400"></span>
                            Automatic
                            <span class="size-1 rounded-full bg-gray-400"></span>
                            San Francisco, CA
                        </p>
                    </div>
                    <!-- Image Gallery -->
                    <div class="flex flex-col gap-4">
                        <!-- Main Hero Image -->
                        <div
                            class="w-full aspect-[16/9] md:aspect-[21/9] bg-gray-100 dark:bg-gray-800 rounded-xl overflow-hidden relative group cursor-pointer shadow-md">
                            <div class="w-full h-full bg-center bg-cover bg-no-repeat transition-transform duration-500 group-hover:scale-105"
                                data-alt="Tesla Model 3 exterior side profile in white driving on a coastal highway"
                                style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuD_80NXTljaW5wvlcU4h6sMETdWIajphyjK9EZnYkpI3nN-9f4p7jBjhNP4iaQr7LaNuJMfurU8o8R6G6sZXP3pELRUvhaZ5X4pv6fZpWBNwfOqqhtifzqpz6baW1ExnPaUu-z_KYES4E17Ttdx2lQYGI2kcN9FKZEVav_OxzUWzuoUwY0OIsVJNds_pNW650E0EfNFWDG_thmRmB6_z9k5GJWkDIY8y9REs3SqmFXp34A90Y_LMdYUIIFC7yA3OSk6iFlBLiz4PkY");'>
                            </div>
                            <div
                                class="absolute bottom-4 right-4 bg-black/70 backdrop-blur-sm text-white px-3 py-1.5 rounded-lg text-sm font-medium flex items-center gap-2">
                                <span class="material-symbols-outlined text-sm">grid_view</span>
                                View Gallery
                            </div>
                        </div>
                        <!-- Thumbnails -->
                        <div class="grid grid-cols-4 gap-3 md:gap-4">
                            <div
                                class="aspect-[4/3] rounded-lg overflow-hidden cursor-pointer opacity-90 hover:opacity-100 transition-opacity">
                                <div class="w-full h-full bg-center bg-cover bg-no-repeat"
                                    data-alt="Tesla Model 3 interior dashboard and steering wheel view"
                                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuC3fyxta_l9J5bR4BWAzI-nQm4q9uHCqtO4E29xPo_DNbK9MVb5JQGWPByok5lDhfuN2yMq3A7lBeEe_XMSM2fF2MXsteoZPkxLz694Rgm5WMhB2rOuFWTYkHi4XO8CoaxVxAu8XCnMv3xfXcRBl2hhd8FbT0VHNsxOj8IFbjdR1q5QOBn24-kHNYy6XNiyDeehqYG13SNqA7yGQ-aZbcfOdzucCLcc7xY1-XQPyHRAxuixfLzKLHQbl4_Q8auULWq8VbpflqNEsC0");'>
                                </div>
                            </div>
                            <div
                                class="aspect-[4/3] rounded-lg overflow-hidden cursor-pointer opacity-90 hover:opacity-100 transition-opacity">
                                <div class="w-full h-full bg-center bg-cover bg-no-repeat"
                                    data-alt="Close up of Tesla Model 3 front wheel and headlight"
                                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuD3tmmi0rPGcyStwgc6Gqv8BLDjDfzp2KO1C3addlbFahN5JgLM5W5o96e5rAk3ZKW0ZIwaOowwrwRABxTln_LiEFohvwW2AzhCLDKLfG5ERe_zcjwAx5S67RCCMrrTid7bUDFXkDqy6QD3UZnitUeGW-OeP8525wc_XsKgfwmUWJ_Fg_pNPaHD2nFozfBCZvb5jkioLXec7Po8WHD23ydbRXUi52sy-NrqtsBJWKEq0prP_ddKqCMs51QbngEf2zly4Ywel_Y_dUQ");'>
                                </div>
                            </div>
                            <div
                                class="aspect-[4/3] rounded-lg overflow-hidden cursor-pointer opacity-90 hover:opacity-100 transition-opacity">
                                <div class="w-full h-full bg-center bg-cover bg-no-repeat"
                                    data-alt="Tesla Model 3 charging at a supercharger station"
                                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuC53hAfVWjzYYfF6Z1DUOtjoGEowRNn7BPVJ_I-7vddeHqOiQ8RrYRWF1dQYrF0XFcQl10GeyBCsNtFpR3bkVPehPRqqgxoAd6xlLPVBGNz8jjc39WCEjNlTM9zjeDFoS9tfvbPsI-up23iYa2RNKB-XI2FU055mB7KiDqiuDUh2h--Ty15ydw3ef-5AJ09YJF1a94WJ2JfCcPv1ZTPbpqDjXoQ25lWkCtrqMrxJ7YgaAy1q0QLxSIF0H5OQJdSP61o20T8D2RPNKU");'>
                                </div>
                            </div>
                            <div
                                class="aspect-[4/3] rounded-lg overflow-hidden cursor-pointer opacity-90 hover:opacity-100 transition-opacity relative">
                                <div class="w-full h-full bg-center bg-cover bg-no-repeat"
                                    data-alt="Back seat interior of a luxury sedan"
                                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDahUC4uL5mA5mszHRWRth6IwHIpFw8Xm7oHhql1abyyYkgNWi9C-q3EcZWtIK3eHaB7g85KqaTqSPMF7qSIhScUvfengrylQ9iTED_SK3RVaaKo3wv8ddoDHu7xWH1FlLNPa72bkfRfzfy_qnFt6JzJpw6PsfC_CnCDAKudnfVV8PoOQPnhkUwV9JgEetpsq8wHRUgx_eXr6ZNk4sqlnu7jscRjzPnV2uFZEuqrJBKhiCLJrjAEIcTG8X3jR_c-pE6W8__i6DJbBA");'>
                                </div>
                                <div
                                    class="absolute inset-0 bg-black/40 flex items-center justify-center text-white font-bold text-lg">
                                    +5
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Specs Grid -->
                    <div
                        class="grid grid-cols-2 md:grid-cols-4 gap-4 p-6 bg-surface-light dark:bg-surface-dark border border-gray-100 dark:border-gray-800 rounded-xl shadow-sm">
                        <div class="flex flex-col gap-1">
                            <span class="material-symbols-outlined text-primary mb-1">speed</span>
                            <span class="text-sm text-text-secondary dark:text-gray-400">0-60 mph</span>
                            <span class="text-base font-bold text-text-main dark:text-white">3.1 sec</span>
                        </div>
                        <div class="flex flex-col gap-1">
                            <span class="material-symbols-outlined text-primary mb-1">battery_charging_full</span>
                            <span class="text-sm text-text-secondary dark:text-gray-400">Range</span>
                            <span class="text-base font-bold text-text-main dark:text-white">333 miles</span>
                        </div>
                        <div class="flex flex-col gap-1">
                            <span class="material-symbols-outlined text-primary mb-1">airline_seat_recline_normal</span>
                            <span class="text-sm text-text-secondary dark:text-gray-400">Seats</span>
                            <span class="text-base font-bold text-text-main dark:text-white">5 Adults</span>
                        </div>
                        <div class="flex flex-col gap-1">
                            <span class="material-symbols-outlined text-primary mb-1">luggage</span>
                            <span class="text-sm text-text-secondary dark:text-gray-400">Cargo</span>
                            <span class="text-base font-bold text-text-main dark:text-white">2 Large Bags</span>
                        </div>
                    </div>
                    <!-- Description -->
                    <div class="flex flex-col gap-4">
                        <h3 class="text-xl font-bold text-text-main dark:text-white">About this car</h3>
                        <div class="text-text-secondary dark:text-gray-300 leading-relaxed space-y-4">
                            <p>
                                Experience the future of driving with the Tesla Model 3 Long Range. This all-electric
                                sedan combines exhilarating performance with minimalist luxury. Featuring dual motor
                                all-wheel drive, it delivers instant torque and superior traction in all weather
                                conditions.
                            </p>
                            <p>
                                The interior is a sanctuary of calm, centered around a 15-inch touchscreen that controls
                                everything from navigation to your favorite streaming apps. With Autopilot capabilities
                                included, highway driving becomes safer and less stressful. Perfect for weekend getaways
                                or business trips, offering substantial range so you can spend more time on the road and
                                less time charging.
                            </p>
                        </div>
                        <button class="text-primary font-bold text-sm w-fit hover:underline">Read more</button>
                    </div>
                    <!-- Availability / Calendar -->
                    <div class="flex flex-col gap-4 pt-4 border-t border-gray-100 dark:border-gray-800">
                        <h3 class="text-xl font-bold text-text-main dark:text-white">Availability</h3>
                        <div
                            class="bg-surface-light dark:bg-surface-dark border border-gray-100 dark:border-gray-700 rounded-xl overflow-hidden shadow-sm">
                            <!-- Injected Calendar Component -->
                            <div class="flex flex-wrap items-center justify-center gap-6 p-4 md:p-6">
                                <div class="flex min-w-72 max-w-[336px] flex-1 flex-col gap-0.5">
                                    <div class="flex items-center p-1 justify-between mb-2">
                                        <button
                                            class="hover:bg-gray-100 dark:hover:bg-gray-700 rounded-full p-1 transition-colors">
                                            <span
                                                class="material-symbols-outlined text-text-main dark:text-white">chevron_left</span>
                                        </button>
                                        <p
                                            class="text-text-main dark:text-white text-base font-bold leading-tight flex-1 text-center">
                                            September 2023</p>
                                    </div>
                                    <div class="grid grid-cols-7 gap-y-1">
                                        <p
                                            class="text-text-secondary dark:text-gray-400 text-[13px] font-bold text-center h-8 flex items-center justify-center">
                                            S</p>
                                        <p
                                            class="text-text-secondary dark:text-gray-400 text-[13px] font-bold text-center h-8 flex items-center justify-center">
                                            M</p>
                                        <p
                                            class="text-text-secondary dark:text-gray-400 text-[13px] font-bold text-center h-8 flex items-center justify-center">
                                            T</p>
                                        <p
                                            class="text-text-secondary dark:text-gray-400 text-[13px] font-bold text-center h-8 flex items-center justify-center">
                                            W</p>
                                        <p
                                            class="text-text-secondary dark:text-gray-400 text-[13px] font-bold text-center h-8 flex items-center justify-center">
                                            T</p>
                                        <p
                                            class="text-text-secondary dark:text-gray-400 text-[13px] font-bold text-center h-8 flex items-center justify-center">
                                            F</p>
                                        <p
                                            class="text-text-secondary dark:text-gray-400 text-[13px] font-bold text-center h-8 flex items-center justify-center">
                                            S</p>
                                        <!-- Days -->
                                        <div class="col-start-4 h-10 w-full p-0.5">
                                            <div
                                                class="flex size-full items-center justify-center rounded-full text-text-main dark:text-white text-sm font-medium">
                                                1</div>
                                        </div>
                                        <div class="h-10 w-full p-0.5">
                                            <div
                                                class="flex size-full items-center justify-center rounded-full text-text-main dark:text-white text-sm font-medium">
                                                2</div>
                                        </div>
                                        <div class="h-10 w-full p-0.5">
                                            <div
                                                class="flex size-full items-center justify-center rounded-full text-text-main dark:text-white text-sm font-medium">
                                                3</div>
                                        </div>
                                        <div class="h-10 w-full p-0.5">
                                            <div
                                                class="flex size-full items-center justify-center rounded-full text-text-main dark:text-white text-sm font-medium">
                                                4</div>
                                        </div>
                                        <!-- Selected Range Start -->
                                        <div class="h-10 w-full pl-0.5 py-0.5 pr-0 bg-primary/10 rounded-l-full">
                                            <div
                                                class="flex size-full items-center justify-center rounded-full bg-primary text-white text-sm font-medium shadow-md">
                                                5</div>
                                        </div>
                                        <!-- In Range -->
                                        <div class="h-10 w-full py-0.5 px-0 bg-primary/10">
                                            <div
                                                class="flex size-full items-center justify-center rounded-full text-text-main dark:text-white text-sm font-medium">
                                                6</div>
                                        </div>
                                        <!-- Selected Range End -->
                                        <div class="h-10 w-full pr-0.5 py-0.5 pl-0 bg-primary/10 rounded-r-full">
                                            <div
                                                class="flex size-full items-center justify-center rounded-full bg-primary text-white text-sm font-medium shadow-md">
                                                7</div>
                                        </div>
                                        <div class="h-10 w-full p-0.5">
                                            <div
                                                class="flex size-full items-center justify-center rounded-full text-text-main dark:text-white text-sm font-medium">
                                                8</div>
                                        </div>
                                        <div class="h-10 w-full p-0.5">
                                            <div
                                                class="flex size-full items-center justify-center rounded-full text-text-main dark:text-white text-sm font-medium">
                                                9</div>
                                        </div>
                                        <div class="h-10 w-full p-0.5">
                                            <div
                                                class="flex size-full items-center justify-center rounded-full text-text-main dark:text-white text-sm font-medium">
                                                10</div>
                                        </div>
                                        <div class="h-10 w-full p-0.5">
                                            <div
                                                class="flex size-full items-center justify-center rounded-full text-text-main dark:text-white text-sm font-medium">
                                                11</div>
                                        </div>
                                        <div class="h-10 w-full p-0.5">
                                            <div
                                                class="flex size-full items-center justify-center rounded-full text-text-main dark:text-white text-sm font-medium">
                                                12</div>
                                        </div>
                                        <div class="h-10 w-full p-0.5">
                                            <div
                                                class="flex size-full items-center justify-center rounded-full text-text-main dark:text-white text-sm font-medium">
                                                13</div>
                                        </div>
                                        <div class="h-10 w-full p-0.5">
                                            <div
                                                class="flex size-full items-center justify-center rounded-full text-text-main dark:text-white text-sm font-medium">
                                                14</div>
                                        </div>
                                        <div class="h-10 w-full p-0.5">
                                            <div
                                                class="flex size-full items-center justify-center rounded-full text-text-main dark:text-white text-sm font-medium">
                                                15</div>
                                        </div>
                                        <!-- More days simulated -->
                                        <div class="h-10 w-full p-0.5">
                                            <div
                                                class="flex size-full items-center justify-center rounded-full text-text-main dark:text-white text-sm font-medium opacity-30">
                                                ...</div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Second Month (Hidden on small mobile) -->
                                <div
                                    class="hidden sm:flex min-w-72 max-w-[336px] flex-1 flex-col gap-0.5 border-l border-gray-100 dark:border-gray-800 pl-6">
                                    <div class="flex items-center p-1 justify-between mb-2">
                                        <p
                                            class="text-text-main dark:text-white text-base font-bold leading-tight flex-1 text-center">
                                            October 2023</p>
                                        <button
                                            class="hover:bg-gray-100 dark:hover:bg-gray-700 rounded-full p-1 transition-colors">
                                            <span
                                                class="material-symbols-outlined text-text-main dark:text-white">chevron_right</span>
                                        </button>
                                    </div>
                                    <div class="grid grid-cols-7 gap-y-1">
                                        <p
                                            class="text-text-secondary dark:text-gray-400 text-[13px] font-bold text-center h-8 flex items-center justify-center">
                                            S</p>
                                        <p
                                            class="text-text-secondary dark:text-gray-400 text-[13px] font-bold text-center h-8 flex items-center justify-center">
                                            M</p>
                                        <p
                                            class="text-text-secondary dark:text-gray-400 text-[13px] font-bold text-center h-8 flex items-center justify-center">
                                            T</p>
                                        <p
                                            class="text-text-secondary dark:text-gray-400 text-[13px] font-bold text-center h-8 flex items-center justify-center">
                                            W</p>
                                        <p
                                            class="text-text-secondary dark:text-gray-400 text-[13px] font-bold text-center h-8 flex items-center justify-center">
                                            T</p>
                                        <p
                                            class="text-text-secondary dark:text-gray-400 text-[13px] font-bold text-center h-8 flex items-center justify-center">
                                            F</p>
                                        <p
                                            class="text-text-secondary dark:text-gray-400 text-[13px] font-bold text-center h-8 flex items-center justify-center">
                                            S</p>
                                        <!-- Days -->
                                        <div class="col-start-4 h-10 w-full p-0.5">
                                            <div
                                                class="flex size-full items-center justify-center rounded-full text-text-main dark:text-white text-sm font-medium">
                                                1</div>
                                        </div>
                                        <div class="h-10 w-full p-0.5">
                                            <div
                                                class="flex size-full items-center justify-center rounded-full text-text-main dark:text-white text-sm font-medium">
                                                2</div>
                                        </div>
                                        <div class="h-10 w-full p-0.5">
                                            <div
                                                class="flex size-full items-center justify-center rounded-full text-text-main dark:text-white text-sm font-medium">
                                                3</div>
                                        </div>
                                        <div class="h-10 w-full p-0.5">
                                            <div
                                                class="flex size-full items-center justify-center rounded-full text-text-main dark:text-white text-sm font-medium">
                                                4</div>
                                        </div>
                                        <div class="h-10 w-full p-0.5">
                                            <div
                                                class="flex size-full items-center justify-center rounded-full text-text-main dark:text-white text-sm font-medium">
                                                5</div>
                                        </div>
                                        <div class="h-10 w-full p-0.5">
                                            <div
                                                class="flex size-full items-center justify-center rounded-full text-text-main dark:text-white text-sm font-medium">
                                                6</div>
                                        </div>
                                        <div class="h-10 w-full p-0.5">
                                            <div
                                                class="flex size-full items-center justify-center rounded-full text-text-main dark:text-white text-sm font-medium">
                                                7</div>
                                        </div>
                                        <div class="h-10 w-full p-0.5">
                                            <div
                                                class="flex size-full items-center justify-center rounded-full text-text-main dark:text-white text-sm font-medium">
                                                8</div>
                                        </div>
                                        <div class="h-10 w-full p-0.5">
                                            <div
                                                class="flex size-full items-center justify-center rounded-full text-text-main dark:text-white text-sm font-medium opacity-30">
                                                ...</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Reviews Section -->
                    <div class="flex flex-col gap-6 pt-4 border-t border-gray-100 dark:border-gray-800">
                        <div class="flex items-center justify-between">
                            <h3 class="text-xl font-bold text-text-main dark:text-white">Reviews</h3>
                            <div class="flex items-center gap-1">
                                <span class="text-primary font-bold">Write a review</span>
                            </div>
                        </div>
                        <div class="grid gap-6">
                            <!-- Review Card 1 -->
                            <div
                                class="flex flex-col gap-3 p-4 rounded-xl bg-surface-light dark:bg-surface-dark border border-gray-100 dark:border-gray-800 shadow-sm">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center gap-3">
                                        <div class="size-10 rounded-full bg-gray-200 bg-cover bg-center"
                                            data-alt="User avatar for Sarah Jenkins"
                                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDsQd9e_Q9_46EkiRADPv8Q8QSw9-bR1rsOz7AWpMPip_0r4KQ31yoPa4GgkjxyNF-7-y888VzrRA_-reXg_1-aiTFGMjQeav0r1liqxvCrgy7NfxFNb2pK597gATgibZzOg4EiKEbu3xG790MWB0Z7OXRLSebDF41nbwDd6iGuTsg_sQoGVq_6yhpwLNtD44lZ9SmUc4UKOuoR5Zun1BDuH_GxLCgSPUxLZNX96IIHG6nol9q0DGat4FoIVUUg6dgVPomg90XZ1hI");'>
                                        </div>
                                        <div>
                                            <p class="text-sm font-bold text-text-main dark:text-white">Sarah Jenkins
                                            </p>
                                            <p class="text-xs text-text-secondary dark:text-gray-400">September 5, 2023
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex text-orange-400">
                                        <span class="material-symbols-outlined text-sm fill-current">star</span>
                                        <span class="material-symbols-outlined text-sm fill-current">star</span>
                                        <span class="material-symbols-outlined text-sm fill-current">star</span>
                                        <span class="material-symbols-outlined text-sm fill-current">star</span>
                                        <span class="material-symbols-outlined text-sm fill-current">star</span>
                                    </div>
                                </div>
                                <p class="text-sm text-text-secondary dark:text-gray-300">
                                    The car was in pristine condition. Pickup was seamless and the host was very
                                    communicative. The autopilot feature made the highway drive a breeze. Highly
                                    recommend!
                                </p>
                            </div>
                            <!-- Review Card 2 -->
                            <div
                                class="flex flex-col gap-3 p-4 rounded-xl bg-surface-light dark:bg-surface-dark border border-gray-100 dark:border-gray-800 shadow-sm">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center gap-3">
                                        <div class="size-10 rounded-full bg-gray-200 bg-cover bg-center"
                                            data-alt="User avatar for Michael Chen"
                                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCTW0tu6oFQEG1NjXTCUV_ITuDJ9L0JQ_TetTtNhyOAenLhPofwzkAwjv22gQ7XPeKiW_ztFOJX2eY7DwDRFG07kNPP-5E7rPoL4hIXgEUHqOVd6NagNlyeAYOlXjB4x4YysZoQ7nbBGdGOsXZhHTwtN-RnAKemaejwmUs9rqJuUwRCnKImOpXqk5MbJ0oHzuvodjtwBNefx7khI06V_dftwmCzwQqjLeB-vyjlLKiAf6wR77GawtHeVcf1gNyhZy9B-X0_vanqR98");'>
                                        </div>
                                        <div>
                                            <p class="text-sm font-bold text-text-main dark:text-white">Michael Chen</p>
                                            <p class="text-xs text-text-secondary dark:text-gray-400">August 28, 2023
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex text-orange-400">
                                        <span class="material-symbols-outlined text-sm fill-current">star</span>
                                        <span class="material-symbols-outlined text-sm fill-current">star</span>
                                        <span class="material-symbols-outlined text-sm fill-current">star</span>
                                        <span class="material-symbols-outlined text-sm fill-current">star</span>
                                        <span class="material-symbols-outlined text-sm">star_half</span>
                                    </div>
                                </div>
                                <p class="text-sm text-text-secondary dark:text-gray-300">
                                    Great experience overall. The range was exactly as advertised. Only giving 4.5 stars
                                    because the charging cable in the trunk was a bit tangled when I got it, but
                                    otherwise perfect.
                                </p>
                            </div>
                        </div>
                        <button
                            class="w-full py-3 text-sm font-medium text-text-secondary dark:text-gray-400 border border-gray-200 dark:border-gray-700 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors">
                            Show all 124 reviews
                        </button>
                    </div>
                </div>
                <!-- Right Column (Sticky Booking Card) -->
                <div class="lg:col-span-1">
                    <div
                        class="sticky top-24 flex flex-col gap-6 p-6 rounded-2xl bg-surface-light dark:bg-surface-dark border border-gray-200 dark:border-gray-700 shadow-lg">
                        <!-- Price Header -->
                        <div class="flex items-end justify-between border-b border-gray-100 dark:border-gray-700 pb-4">
                            <div>
                                <span class="text-text-secondary dark:text-gray-400 text-sm line-through">$145</span>
                                <div class="flex items-baseline gap-1">
                                    <span class="text-3xl font-bold text-text-main dark:text-white">$120</span>
                                    <span class="text-text-secondary dark:text-gray-400 font-medium">/ day</span>
                                </div>
                            </div>
                            <div
                                class="flex items-center gap-1 bg-green-50 dark:bg-green-900/30 text-green-700 dark:text-green-400 px-2 py-1 rounded text-xs font-bold">
                                <span class="material-symbols-outlined text-sm">savings</span>
                                Save 15%
                            </div>
                        </div>
                        <!-- Date Inputs -->
                        <div class="flex flex-col gap-3">
                            <div class="grid grid-cols-2 gap-3">
                                <div class="flex flex-col gap-1.5">
                                    <label
                                        class="text-xs font-bold text-text-secondary dark:text-gray-400 uppercase tracking-wider">Pick-up</label>
                                    <div class="relative">
                                        <div
                                            class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <span
                                                class="material-symbols-outlined text-gray-400 text-[18px]">calendar_today</span>
                                        </div>
                                        <input
                                            class="block w-full pl-10 pr-3 py-2.5 text-sm font-medium text-text-main dark:text-white bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-600 rounded-lg focus:ring-primary focus:border-primary"
                                            readonly="" type="text" value="Sep 05, 10:00 AM" />
                                    </div>
                                </div>
                                <div class="flex flex-col gap-1.5">
                                    <label
                                        class="text-xs font-bold text-text-secondary dark:text-gray-400 uppercase tracking-wider">Drop-off</label>
                                    <div class="relative">
                                        <div
                                            class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <span
                                                class="material-symbols-outlined text-gray-400 text-[18px]">calendar_today</span>
                                        </div>
                                        <input
                                            class="block w-full pl-10 pr-3 py-2.5 text-sm font-medium text-text-main dark:text-white bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-600 rounded-lg focus:ring-primary focus:border-primary"
                                            readonly="" type="text" value="Sep 07, 10:00 AM" />
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col gap-1.5">
                                <label
                                    class="text-xs font-bold text-text-secondary dark:text-gray-400 uppercase tracking-wider">Pick-up
                                    Location</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <span
                                            class="material-symbols-outlined text-gray-400 text-[18px]">location_on</span>
                                    </div>
                                    <select
                                        class="block w-full pl-10 pr-8 py-2.5 text-sm font-medium text-text-main dark:text-white bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-600 rounded-lg focus:ring-primary focus:border-primary appearance-none">
                                        <option>San Francisco Int. Airport</option>
                                        <option>Downtown SF</option>
                                        <option>Oakland Airport</option>
                                    </select>
                                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                        <span
                                            class="material-symbols-outlined text-gray-400 text-[18px]">expand_more</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Price Breakdown -->
                        <div class="flex flex-col gap-2 py-4 border-t border-gray-100 dark:border-gray-700">
                            <div class="flex justify-between text-sm text-text-secondary dark:text-gray-300">
                                <span>$120 x 3 days</span>
                                <span>$360</span>
                            </div>
                            <div class="flex justify-between text-sm text-text-secondary dark:text-gray-300">
                                <span>Service Fee</span>
                                <span>$25</span>
                            </div>
                            <div class="flex justify-between text-sm text-text-secondary dark:text-gray-300">
                                <span>Insurance</span>
                                <span class="text-green-600 dark:text-green-400">Free</span>
                            </div>
                            <div
                                class="flex justify-between text-base font-bold text-text-main dark:text-white pt-2 mt-2 border-t border-gray-100 dark:border-gray-700 border-dashed">
                                <span>Total</span>
                                <span>$385</span>
                            </div>
                        </div>
                        <!-- CTA Button -->
                        <button
                            class="w-full bg-primary hover:bg-blue-600 text-white font-bold text-base py-3.5 rounded-lg shadow-md transition-all active:scale-[0.98] flex items-center justify-center gap-2">
                            Reserve Now
                            <span class="material-symbols-outlined text-[20px]">arrow_forward</span>
                        </button>
                        <p class="text-xs text-center text-text-secondary dark:text-gray-500">You won't be charged yet
                        </p>
                        <!-- Trust Signals -->
                        <div class="flex flex-col gap-2 pt-2">
                            <div class="flex items-center gap-2 text-xs text-text-secondary dark:text-gray-400">
                                <span
                                    class="material-symbols-outlined text-sm text-green-600 dark:text-green-400">check_circle</span>
                                <span>Free cancellation up to 48h before</span>
                            </div>
                            <div class="flex items-center gap-2 text-xs text-text-secondary dark:text-gray-400">
                                <span
                                    class="material-symbols-outlined text-sm text-green-600 dark:text-green-400">check_circle</span>
                                <span>Instant confirmation</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Similar Vehicles Section (Bottom) -->
            <div class="mt-16 flex flex-col gap-6">
                <div class="flex items-center justify-between">
                    <h2 class="text-2xl font-bold text-text-main dark:text-white">Similar Vehicles</h2>
                    <a class="text-primary text-sm font-bold hover:underline" href="#">View all</a>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <!-- Card 1 -->
                    <div
                        class="group flex flex-col rounded-xl overflow-hidden border border-gray-100 dark:border-gray-800 bg-surface-light dark:bg-surface-dark shadow-sm hover:shadow-md transition-shadow">
                        <div class="aspect-[16/10] bg-gray-200 dark:bg-gray-700 bg-cover bg-center group-hover:scale-105 transition-transform duration-500"
                            data-alt="Polestar 2 electric vehicle in silver"
                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBRfriSEWTSOwzXRVWKhi0be0d4bNdhKWrJ2DDdK4HrcOMWT9excJiOHwKU8qVfd-_uycZSLeBjHfqN4yr6mjuA_IKPNIFh3b8PNIbiPD0SKChJnp-kszTzLH2CUXQsYOkP3qAWLpWkvCIVEpEkFnYhBW9wvKqmBL5QW395PVS4bgBDtjDHO5uk1QZ-HU0sKgHMzq0ewj9VSuYunzAm8jBiOQUlysSkwASkE1UEG8OOzkU884BVVIihJWkVVtxYgAn48KnNATnd4zA");'>
                        </div>
                        <div class="p-4 flex flex-col gap-2 relative bg-surface-light dark:bg-surface-dark">
                            <h3 class="font-bold text-lg text-text-main dark:text-white">Polestar 2</h3>
                            <p class="text-sm text-text-secondary dark:text-gray-400">Electric • Automatic</p>
                            <div class="flex items-center justify-between mt-2">
                                <span class="font-bold text-text-main dark:text-white">$110 <span
                                        class="text-sm font-normal text-text-secondary dark:text-gray-400">/
                                        day</span></span>
                                <div class="flex items-center gap-1 text-orange-400 text-sm font-bold">
                                    <span class="material-symbols-outlined text-sm fill-current">star</span> 4.8
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card 2 -->
                    <div
                        class="group flex flex-col rounded-xl overflow-hidden border border-gray-100 dark:border-gray-800 bg-surface-light dark:bg-surface-dark shadow-sm hover:shadow-md transition-shadow">
                        <div class="aspect-[16/10] bg-gray-200 dark:bg-gray-700 bg-cover bg-center group-hover:scale-105 transition-transform duration-500"
                            data-alt="BMW i4 blue electric sedan front view"
                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuALMi6oaO5-VRuOdUy94_sgx6VHZzn7loiEi95I7y8I8GZmvp6XdEEbIRX-YMG1F8ac9wCAs_5M68ZS0jlIk8MprXBPd_b54XOgBsFLqjX7ARC6-wgY_xrqlS9zYqZ--MaA5BK3cplyQCxxpLsnJPik9NBK2Py2Jfl0JarlvdCB49YZyE3SPCiDMMdl0S78jXfPszMVOdDV7iEb_Rewdi0QzijkNSsfc48GFY5EgeZQWt96IYqHb9yvO4ZmChNUyqGaPgRKUpk5RbY");'>
                        </div>
                        <div class="p-4 flex flex-col gap-2 relative bg-surface-light dark:bg-surface-dark">
                            <h3 class="font-bold text-lg text-text-main dark:text-white">BMW i4</h3>
                            <p class="text-sm text-text-secondary dark:text-gray-400">Electric • Automatic</p>
                            <div class="flex items-center justify-between mt-2">
                                <span class="font-bold text-text-main dark:text-white">$135 <span
                                        class="text-sm font-normal text-text-secondary dark:text-gray-400">/
                                        day</span></span>
                                <div class="flex items-center gap-1 text-orange-400 text-sm font-bold">
                                    <span class="material-symbols-outlined text-sm fill-current">star</span> 4.9
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card 3 -->
                    <div
                        class="group flex flex-col rounded-xl overflow-hidden border border-gray-100 dark:border-gray-800 bg-surface-light dark:bg-surface-dark shadow-sm hover:shadow-md transition-shadow">
                        <div class="aspect-[16/10] bg-gray-200 dark:bg-gray-700 bg-cover bg-center group-hover:scale-105 transition-transform duration-500"
                            data-alt="Mercedes Benz E-Class side profile"
                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDdkSX72cz17Ci_yBuEZm437TXXEPyIiNFH8JNPHB1Z2BHd3wwMNDmyWMsgMltr15LJJZp9jGZcJDZpwcDCGv8MYN2Ydah-YMKIZddO8ZkumYN362zrrsEbZP8AOVb_iHb5pPu93nqz_zN0EbhOOItK28gU_WTHaIcXLT-b5XWpIF-mvYNMwVsgUJ3YLQiqBu8dB5ToD75VLAzLUhlv1pOcwT6lbBNUUNa7utjLttMbbeenD9UHsqpCqRGWcBqd-jfHMB0gicGBjBg");'>
                        </div>
                        <div class="p-4 flex flex-col gap-2 relative bg-surface-light dark:bg-surface-dark">
                            <h3 class="font-bold text-lg text-text-main dark:text-white">Mercedes E-Class</h3>
                            <p class="text-sm text-text-secondary dark:text-gray-400">Hybrid • Automatic</p>
                            <div class="flex items-center justify-between mt-2">
                                <span class="font-bold text-text-main dark:text-white">$125 <span
                                        class="text-sm font-normal text-text-secondary dark:text-gray-400">/
                                        day</span></span>
                                <div class="flex items-center gap-1 text-orange-400 text-sm font-bold">
                                    <span class="material-symbols-outlined text-sm fill-current">star</span> 4.7
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- Footer -->
        <footer class="bg-surface-light dark:bg-surface-dark border-t border-gray-100 dark:border-gray-800 mt-10 py-10">
            <div
                class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row justify-between items-center gap-6">
                <div class="flex items-center gap-2 text-text-main dark:text-white">
                    <span class="material-symbols-outlined text-primary">directions_car</span>
                    <span class="font-bold text-lg tracking-tight">Rentals</span>
                </div>
                <div class="flex gap-8 text-sm text-text-secondary dark:text-gray-400 font-medium">
                    <a class="hover:text-primary" href="#">About</a>
                    <a class="hover:text-primary" href="#">Careers</a>
                    <a class="hover:text-primary" href="#">Policy</a>
                    <a class="hover:text-primary" href="#">Contact</a>
                </div>
                <p class="text-sm text-text-secondary dark:text-gray-500">© 2023 Rentals Inc. All rights reserved.</p>
            </div>
        </footer>
    </div>
</body>

</html>