<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Vehicle Reviews - CarRental</title>
    <!-- Material Symbols -->
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&amp;family=Noto+Sans:wght@400;500;600;700&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#137fec",
                        "background-light": "#f6f7f8",
                        "background-dark": "#101922",
                    },
                    fontFamily: {
                        "display": ["Inter", "sans-serif"]
                    },
                    borderRadius: { "DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px" },
                },
            },
        }
    </script>
    <style>
        /* Custom scrollbar for cleanliness */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: transparent;
        }

        ::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #94a3b8;
        }
    </style>
</head>

<body
    class="bg-background-light dark:bg-background-dark font-display antialiased text-[#111418] dark:text-white transition-colors duration-200">
    <div class="relative flex min-h-screen w-full flex-col overflow-x-hidden">
        <!-- Top Navigation -->
        <header
            class="sticky top-0 z-50 flex items-center justify-between whitespace-nowrap border-b border-solid border-b-[#e5e7eb] dark:border-b-[#2a3441] bg-white dark:bg-[#101922] px-6 py-3 lg:px-10">
            <div class="flex items-center gap-4 lg:gap-8">
                <div class="flex items-center gap-4 text-[#111418] dark:text-white">
                    <div class="size-8 flex items-center justify-center text-primary">
                        <span class="material-symbols-outlined text-3xl">directions_car</span>
                    </div>
                    <h2
                        class="text-[#111418] dark:text-white text-lg font-bold leading-tight tracking-[-0.015em] hidden sm:block">
                        CarRental</h2>
                </div>
                <div class="hidden md:flex items-center gap-6 lg:gap-9">
                    <a class="text-[#111418] dark:text-gray-300 hover:text-primary dark:hover:text-primary text-sm font-medium leading-normal transition-colors"
                        href="#">Vehicles</a>
                    <a class="text-[#111418] dark:text-gray-300 hover:text-primary dark:hover:text-primary text-sm font-medium leading-normal transition-colors"
                        href="#">Locations</a>
                    <a class="text-[#111418] dark:text-gray-300 hover:text-primary dark:hover:text-primary text-sm font-medium leading-normal transition-colors"
                        href="#">Deals</a>
                    <a class="text-[#111418] dark:text-gray-300 hover:text-primary dark:hover:text-primary text-sm font-medium leading-normal transition-colors"
                        href="#">My Bookings</a>
                </div>
            </div>
            <div class="flex flex-1 justify-end gap-4 lg:gap-8">
                <label class="hidden sm:flex flex-col min-w-40 !h-10 max-w-64">
                    <div
                        class="flex w-full flex-1 items-stretch rounded-lg h-full ring-1 ring-[#e5e7eb] dark:ring-[#2a3441] focus-within:ring-primary overflow-hidden">
                        <div
                            class="text-[#617589] flex border-none bg-[#f9fafb] dark:bg-[#1a2632] items-center justify-center pl-4 border-r-0">
                            <span class="material-symbols-outlined text-[20px]">search</span>
                        </div>
                        <input
                            class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden text-[#111418] dark:text-white focus:outline-0 focus:ring-0 border-none bg-[#f9fafb] dark:bg-[#1a2632] focus:border-none h-full placeholder:text-[#617589] px-3 pl-2 text-sm font-normal leading-normal"
                            placeholder="Search" value="" />
                    </div>
                </label>
                <div class="flex items-center gap-3">
                    <button
                        class="flex size-10 items-center justify-center rounded-full bg-[#f0f2f4] dark:bg-[#1a2632] sm:hidden">
                        <span class="material-symbols-outlined text-[#111418] dark:text-white">search</span>
                    </button>
                    <button
                        class="flex min-w-[84px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-primary hover:bg-blue-600 transition-colors text-white text-sm font-bold leading-normal tracking-[0.015em] shadow-sm">
                        <span class="truncate">Sign In</span>
                    </button>
                </div>
            </div>
        </header>
        <!-- Main Content -->
        <main class="flex flex-1 flex-col py-6 px-4 md:px-8 lg:px-40">
            <div class="mx-auto w-full max-w-[1200px]">
                <!-- Breadcrumbs -->
                <nav class="flex flex-wrap gap-2 py-4 text-sm">
                    <a class="text-[#617589] hover:text-primary font-medium" href="#">Home</a>
                    <span class="text-[#617589] font-medium">/</span>
                    <a class="text-[#617589] hover:text-primary font-medium" href="#">Vehicles</a>
                    <span class="text-[#617589] font-medium">/</span>
                    <span class="text-[#111418] dark:text-white font-medium">Toyota Camry</span>
                </nav>
                <!-- Page Header -->
                <div class="border-b border-gray-200 dark:border-gray-800 pb-6 mb-8">
                    <h1
                        class="text-[#111418] dark:text-white text-3xl md:text-4xl font-bold leading-tight tracking-tight">
                        Vehicle Reviews</h1>
                    <p class="mt-2 text-[#617589] dark:text-gray-400 text-lg">See what other drivers are saying about
                        the Toyota Camry 2024</p>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-start">
                    <!-- Left Sidebar: Summary & Form (Sticky on desktop) -->
                    <aside class="lg:col-span-4 lg:sticky lg:top-24 flex flex-col gap-6">
                        <!-- Rating Summary Card -->
                        <div
                            class="rounded-xl border border-gray-200 dark:border-gray-800 bg-white dark:bg-[#1a2632] p-6 shadow-sm">
                            <h3 class="text-lg font-bold text-[#111418] dark:text-white mb-4">Rating Summary</h3>
                            <div class="flex items-end gap-3 mb-6">
                                <span
                                    class="text-5xl font-black tracking-tighter text-[#111418] dark:text-white">4.8</span>
                                <div class="flex flex-col mb-1.5">
                                    <div class="flex text-[#facc15]">
                                        <span class="material-symbols-outlined text-[20px] fill-current">star</span>
                                        <span class="material-symbols-outlined text-[20px] fill-current">star</span>
                                        <span class="material-symbols-outlined text-[20px] fill-current">star</span>
                                        <span class="material-symbols-outlined text-[20px] fill-current">star</span>
                                        <span
                                            class="material-symbols-outlined text-[20px] fill-current">star_half</span>
                                    </div>
                                    <span class="text-xs font-medium text-[#617589] mt-0.5">Based on 124 reviews</span>
                                </div>
                            </div>
                            <!-- Progress Bars -->
                            <div class="space-y-3">
                                <div class="flex items-center gap-3 text-sm">
                                    <span class="w-3 font-medium text-[#111418] dark:text-white">5</span>
                                    <div
                                        class="flex h-2 flex-1 overflow-hidden rounded-full bg-[#f0f2f4] dark:bg-gray-700">
                                        <div class="rounded-full bg-primary" style="width: 80%;"></div>
                                    </div>
                                    <span class="w-8 text-right text-[#617589]">80%</span>
                                </div>
                                <div class="flex items-center gap-3 text-sm">
                                    <span class="w-3 font-medium text-[#111418] dark:text-white">4</span>
                                    <div
                                        class="flex h-2 flex-1 overflow-hidden rounded-full bg-[#f0f2f4] dark:bg-gray-700">
                                        <div class="rounded-full bg-primary" style="width: 10%;"></div>
                                    </div>
                                    <span class="w-8 text-right text-[#617589]">10%</span>
                                </div>
                                <div class="flex items-center gap-3 text-sm">
                                    <span class="w-3 font-medium text-[#111418] dark:text-white">3</span>
                                    <div
                                        class="flex h-2 flex-1 overflow-hidden rounded-full bg-[#f0f2f4] dark:bg-gray-700">
                                        <div class="rounded-full bg-primary" style="width: 5%;"></div>
                                    </div>
                                    <span class="w-8 text-right text-[#617589]">5%</span>
                                </div>
                                <div class="flex items-center gap-3 text-sm">
                                    <span class="w-3 font-medium text-[#111418] dark:text-white">2</span>
                                    <div
                                        class="flex h-2 flex-1 overflow-hidden rounded-full bg-[#f0f2f4] dark:bg-gray-700">
                                        <div class="rounded-full bg-primary" style="width: 3%;"></div>
                                    </div>
                                    <span class="w-8 text-right text-[#617589]">3%</span>
                                </div>
                                <div class="flex items-center gap-3 text-sm">
                                    <span class="w-3 font-medium text-[#111418] dark:text-white">1</span>
                                    <div
                                        class="flex h-2 flex-1 overflow-hidden rounded-full bg-[#f0f2f4] dark:bg-gray-700">
                                        <div class="rounded-full bg-primary" style="width: 2%;"></div>
                                    </div>
                                    <span class="w-8 text-right text-[#617589]">2%</span>
                                </div>
                            </div>
                        </div>
                        <!-- Write Review Form -->
                        <div
                            class="rounded-xl border border-gray-200 dark:border-gray-800 bg-white dark:bg-[#1a2632] p-6 shadow-sm">
                            <h3 class="text-lg font-bold text-[#111418] dark:text-white mb-4">Write a Review</h3>
                            <form class="flex flex-col gap-4">
                                <div>
                                    <label
                                        class="block text-sm font-medium text-[#111418] dark:text-gray-300 mb-2">Score</label>
                                    <div class="flex gap-1">
                                        <button class="text-[#facc15] hover:scale-110 transition-transform"
                                            type="button"><span
                                                class="material-symbols-outlined fill-current text-[28px]">star</span></button>
                                        <button class="text-[#facc15] hover:scale-110 transition-transform"
                                            type="button"><span
                                                class="material-symbols-outlined fill-current text-[28px]">star</span></button>
                                        <button class="text-[#facc15] hover:scale-110 transition-transform"
                                            type="button"><span
                                                class="material-symbols-outlined fill-current text-[28px]">star</span></button>
                                        <button class="text-[#facc15] hover:scale-110 transition-transform"
                                            type="button"><span
                                                class="material-symbols-outlined fill-current text-[28px]">star</span></button>
                                        <button
                                            class="text-gray-300 dark:text-gray-600 hover:text-[#facc15] hover:scale-110 transition-all"
                                            type="button"><span
                                                class="material-symbols-outlined fill-current text-[28px]">star</span></button>
                                    </div>
                                </div>
                                <div>
                                    <label
                                        class="block text-sm font-medium text-[#111418] dark:text-gray-300 mb-2">Review</label>
                                    <textarea
                                        class="w-full rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-[#101922] px-4 py-3 text-sm text-[#111418] dark:text-white placeholder-gray-400 focus:border-primary focus:ring-1 focus:ring-primary min-h-[120px] resize-none"
                                        placeholder="Share your experience with this vehicle..."></textarea>
                                </div>
                                <button
                                    class="w-full rounded-lg bg-primary py-2.5 text-sm font-bold text-white shadow-sm hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2 transition-colors"
                                    type="submit">Submit Review</button>
                            </form>
                        </div>
                    </aside>
                    <!-- Right Column: Review List -->
                    <div class="lg:col-span-8 space-y-6">
                        <div class="flex items-center justify-between pb-2">
                            <h3 class="text-xl font-bold text-[#111418] dark:text-white">Recent Reviews</h3>
                            <div class="flex items-center gap-2">
                                <label class="text-sm text-[#617589]">Sort by:</label>
                                <select
                                    class="rounded-lg border-none bg-[#f0f2f4] dark:bg-[#1a2632] py-1.5 pl-3 pr-8 text-sm font-medium text-[#111418] dark:text-white focus:ring-0">
                                    <option>Most Recent</option>
                                    <option>Highest Rating</option>
                                    <option>Lowest Rating</option>
                                </select>
                            </div>
                        </div>
                        <!-- Review Item: Standard -->
                        <div
                            class="flex flex-col gap-4 rounded-xl border border-gray-100 dark:border-gray-800 bg-white dark:bg-[#1a2632] p-6 shadow-sm">
                            <div class="flex items-start justify-between">
                                <div class="flex items-center gap-3">
                                    <div class="size-10 overflow-hidden rounded-full bg-gray-200">
                                        <img alt="User avatar" class="h-full w-full object-cover"
                                            data-alt="Portrait of a smiling man with glasses"
                                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuCvgIGLe6i_XNcpjErrkDQU5sYz2B8Rc-f0FOpOJkkhPhuazXZTH7lm2_xkqo_BwFzOyGu23MueJ2kRNMM_FRAabn8yOwvHDBG6cAMh3VKYHgKUZKnfJBkzcUPJlbKmmSGnjWIXDR9qAbYFc8UqQfb7iv4YI8oVCfPLVISgQGIUxzbyDWxqHY8zgkLCwI-_XzUNIwk3ULgwv5-WPboaxvorsUMDE9zU1KD6ClW8XGsZm2rwQVuWQ-zEIV-TnoF_MQkmoqoT23hUuAU" />
                                    </div>
                                    <div>
                                        <p class="text-sm font-bold text-[#111418] dark:text-white">James Anderson</p>
                                        <p class="text-xs text-[#617589]">Verified Renter • 2 days ago</p>
                                    </div>
                                </div>
                                <div class="flex text-[#facc15]">
                                    <span class="material-symbols-outlined text-[18px] fill-current">star</span>
                                    <span class="material-symbols-outlined text-[18px] fill-current">star</span>
                                    <span class="material-symbols-outlined text-[18px] fill-current">star</span>
                                    <span class="material-symbols-outlined text-[18px] fill-current">star</span>
                                    <span class="material-symbols-outlined text-[18px] fill-current">star</span>
                                </div>
                            </div>
                            <div class="text-sm leading-relaxed text-[#111418] dark:text-gray-300">
                                <p>The car was in pristine condition and the pick-up process was seamless. I really
                                    appreciated the cleanliness and the fuel economy of the Camry. Would definitely rent
                                    again for my next business trip.</p>
                            </div>
                            <div class="flex items-center gap-4 pt-2">
                                <button
                                    class="flex items-center gap-1.5 text-xs font-medium text-[#617589] hover:text-primary transition-colors">
                                    <span class="material-symbols-outlined text-[16px]">thumb_up</span> Helpful (12)
                                </button>
                            </div>
                        </div>
                        <!-- Review Item: Current User (With Actions) -->
                        <div
                            class="flex flex-col gap-4 rounded-xl border-l-4 border-l-primary border-y border-r border-gray-100 dark:border-y-gray-800 dark:border-r-gray-800 bg-blue-50/30 dark:bg-blue-900/10 p-6 shadow-sm">
                            <div class="flex items-start justify-between">
                                <div class="flex items-center gap-3">
                                    <div
                                        class="size-10 overflow-hidden rounded-full bg-primary/10 flex items-center justify-center text-primary font-bold">
                                        JD
                                    </div>
                                    <div>
                                        <p class="text-sm font-bold text-[#111418] dark:text-white">John Doe (You)</p>
                                        <p class="text-xs text-[#617589]">Verified Renter • 1 week ago</p>
                                    </div>
                                </div>
                                <div class="flex items-center gap-2">
                                    <div class="flex text-[#facc15]">
                                        <span class="material-symbols-outlined text-[18px] fill-current">star</span>
                                        <span class="material-symbols-outlined text-[18px] fill-current">star</span>
                                        <span class="material-symbols-outlined text-[18px] fill-current">star</span>
                                        <span class="material-symbols-outlined text-[18px] fill-current">star</span>
                                        <span
                                            class="material-symbols-outlined text-[18px] text-gray-300 dark:text-gray-600">star</span>
                                    </div>
                                    <!-- User Actions Dropdown Trigger (Simplified for UI) -->
                                    <button class="ml-2 text-gray-400 hover:text-gray-600 dark:hover:text-gray-200">
                                        <span class="material-symbols-outlined text-[20px]">more_horiz</span>
                                    </button>
                                </div>
                            </div>
                            <div class="text-sm leading-relaxed text-[#111418] dark:text-gray-300">
                                <p>Decent experience overall. The car drove well but I noticed a small scratch on the
                                    rear bumper that wasn't documented. Staff was helpful in resolving it quickly
                                    though.</p>
                            </div>
                            <div
                                class="flex items-center gap-3 pt-2 border-t border-gray-200/50 dark:border-gray-700/50 mt-1">
                                <button
                                    class="flex items-center gap-1.5 rounded-md px-3 py-1.5 text-xs font-semibold text-primary hover:bg-primary/10 transition-colors">
                                    <span class="material-symbols-outlined text-[16px]">edit</span> Edit Review
                                </button>
                                <button
                                    class="flex items-center gap-1.5 rounded-md px-3 py-1.5 text-xs font-semibold text-red-500 hover:bg-red-50 dark:hover:bg-red-900/20 transition-colors">
                                    <span class="material-symbols-outlined text-[16px]">delete</span> Delete
                                </button>
                            </div>
                        </div>
                        <!-- Review Item: Soft Deleted -->
                        <div
                            class="group relative flex flex-col gap-3 rounded-xl border border-dashed border-gray-300 dark:border-gray-700 bg-gray-50 dark:bg-gray-800/50 p-6 opacity-80 hover:opacity-100 transition-opacity">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-3 opacity-50">
                                    <div
                                        class="size-10 overflow-hidden rounded-full bg-gray-200 dark:bg-gray-700 flex items-center justify-center">
                                        <span class="material-symbols-outlined text-gray-400">person_off</span>
                                    </div>
                                    <div>
                                        <p class="text-sm font-bold text-gray-500 dark:text-gray-400 line-through">Sarah
                                            Jenkins</p>
                                        <p class="text-xs text-gray-400">Posted 3 weeks ago</p>
                                    </div>
                                </div>
                                <span
                                    class="rounded-full bg-gray-200 dark:bg-gray-700 px-2.5 py-0.5 text-xs font-medium text-gray-600 dark:text-gray-400">Deleted</span>
                            </div>
                            <div class="flex flex-col gap-2 pl-[52px]">
                                <p class="text-sm italic text-gray-500 dark:text-gray-400">
                                    This review has been deleted by the user.
                                </p>
                                <!-- Undo Action (Visible if user owns it or admin) -->
                                <div class="flex items-center gap-2 mt-1">
                                    <button
                                        class="flex items-center gap-1 text-xs font-semibold text-primary hover:underline">
                                        <span class="material-symbols-outlined text-[14px]">undo</span> Restore Review
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- Review Item: Standard -->
                        <div
                            class="flex flex-col gap-4 rounded-xl border border-gray-100 dark:border-gray-800 bg-white dark:bg-[#1a2632] p-6 shadow-sm">
                            <div class="flex items-start justify-between">
                                <div class="flex items-center gap-3">
                                    <div class="size-10 overflow-hidden rounded-full bg-gray-200">
                                        <img alt="User avatar" class="h-full w-full object-cover"
                                            data-alt="Portrait of a young woman smiling outdoors"
                                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuDSUVJoAdQ7toHGeqDvuYpJWRpbwBIjBiA13jddIeOgitP6bw5e6xz5bg6x5mhV75IttOvJ1u9xHTGYe_W3xQXGNijD4Tno-SjTBqIplookPZg-D70NqCSmL97kt_B0an2Ar57AgZx8Xf6rppMWNOpuVyUQDZ_6GUGrf2rKkYPvnliAqkY6fXQYpov2XpGLyNXvFI7a0-MEgjF9NcEeZgyBCG7jbxuaYJXYGMUOkVPca0E0h_NfMoGgOx9FWBUBvZ_voREbvuBFcE4" />
                                    </div>
                                    <div>
                                        <p class="text-sm font-bold text-[#111418] dark:text-white">Emily Chen</p>
                                        <p class="text-xs text-[#617589]">Verified Renter • 1 month ago</p>
                                    </div>
                                </div>
                                <div class="flex text-[#facc15]">
                                    <span class="material-symbols-outlined text-[18px] fill-current">star</span>
                                    <span class="material-symbols-outlined text-[18px] fill-current">star</span>
                                    <span class="material-symbols-outlined text-[18px] fill-current">star</span>
                                    <span class="material-symbols-outlined text-[18px] fill-current">star</span>
                                    <span
                                        class="material-symbols-outlined text-[18px] text-gray-300 dark:text-gray-600">star</span>
                                </div>
                            </div>
                            <div class="text-sm leading-relaxed text-[#111418] dark:text-gray-300">
                                <p>Car was okay, but the smell of cigarettes was quite strong when I first got in. Had
                                    to drive with windows down for a while. Mechanically it was fine.</p>
                            </div>
                            <div class="flex items-center gap-4 pt-2">
                                <button
                                    class="flex items-center gap-1.5 text-xs font-medium text-[#617589] hover:text-primary transition-colors">
                                    <span class="material-symbols-outlined text-[16px]">thumb_up</span> Helpful (2)
                                </button>
                            </div>
                        </div>
                        <!-- Load More -->
                        <div class="pt-4 flex justify-center">
                            <button
                                class="rounded-lg border border-gray-200 dark:border-gray-700 bg-white dark:bg-[#1a2632] px-6 py-2.5 text-sm font-bold text-[#111418] dark:text-white hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors shadow-sm">
                                Load More Reviews
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>

</html>