<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>DriveAdmin - Car Rental Dashboard</title>
    <!-- Google Fonts: Inter -->
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&amp;display=swap"
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
    <!-- Theme Configuration -->
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
                        "surface-dark": "#1a2632",
                        "border-light": "#e5e7eb",
                        "border-dark": "#2d3748",
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
        /* Custom scrollbar for better aesthetics */
        ::-webkit-scrollbar {
            width: 8px;
            height: 8px;
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

        .dark ::-webkit-scrollbar-thumb {
            background: #475569;
        }
    </style>
</head>

<body class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-white font-display overflow-hidden">
    <div class="flex h-screen w-full overflow-hidden">
        <!-- Sidebar Navigation -->
        <aside
            class="hidden md:flex w-64 flex-col bg-surface-light dark:bg-surface-dark border-r border-border-light dark:border-border-dark flex-shrink-0 transition-all duration-300">
            <div class="flex h-full flex-col justify-between p-4">
                <div class="flex flex-col gap-6">
                    <!-- User/Brand -->
                    <div class="flex items-center gap-3 px-2">
                        <div class="bg-center bg-no-repeat bg-cover rounded-full h-10 w-10 shadow-sm"
                            data-alt="Admin user profile picture with blue gradient background"
                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuByRGb3jtzKuwzOalSAqMYd-4-2K6k2QpAuoDJg0eDHNQEW1mvBpjv2CAwFQvU7zQO6OYxbnePpemm1XY-GtyOWor83UFNlqDzpAIW4hIgJFIzYBkM1H4BQ-EGMcmOFEROHyHdd8dl4TXvVdTDmvMghDTAoMPgA930dnxQ2WIV82khXPl25HKnrGCeIHC00tc7L5qS8VCzp7ho2UfKF0IlgpijOYVnKF6V5momO4HZtJjynH67a_2ruynq3OkDQ8T-LCwksANipM1c");'>
                        </div>
                        <div class="flex flex-col">
                            <h1 class="text-slate-900 dark:text-white text-base font-bold leading-tight">DriveAdmin</h1>
                            <p class="text-slate-500 dark:text-slate-400 text-xs font-normal">Super Admin</p>
                        </div>
                    </div>
                    <!-- Navigation Links -->
                    <nav class="flex flex-col gap-1">
                        <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg bg-primary/10 text-primary group"
                            href="#">
                            <span class="material-symbols-outlined text-[20px] font-medium">grid_view</span>
                            <span class="text-sm font-semibold">Dashboard</span>
                        </a>
                        <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-600 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors group"
                            href="#">
                            <span
                                class="material-symbols-outlined text-[20px] group-hover:text-primary transition-colors">directions_car</span>
                            <span class="text-sm font-medium">Vehicles</span>
                        </a>
                        <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-600 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors group"
                            href="#">
                            <span
                                class="material-symbols-outlined text-[20px] group-hover:text-primary transition-colors">category</span>
                            <span class="text-sm font-medium">Categories</span>
                        </a>
                        <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-600 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors group"
                            href="#">
                            <span
                                class="material-symbols-outlined text-[20px] group-hover:text-primary transition-colors">calendar_month</span>
                            <span class="text-sm font-medium">Reservations</span>
                        </a>
                        <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-600 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors group"
                            href="#">
                            <span
                                class="material-symbols-outlined text-[20px] group-hover:text-primary transition-colors">star</span>
                            <span class="text-sm font-medium">Reviews</span>
                        </a>
                        <div class="h-px bg-border-light dark:bg-border-dark my-2 mx-3"></div>
                        <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-600 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors group"
                            href="#">
                            <span
                                class="material-symbols-outlined text-[20px] group-hover:text-primary transition-colors">settings</span>
                            <span class="text-sm font-medium">Settings</span>
                        </a>
                    </nav>
                </div>
                <!-- Logout Button -->
                <button
                    class="flex w-full cursor-pointer items-center gap-2 justify-center rounded-lg h-10 px-4 border border-border-light dark:border-border-dark hover:bg-slate-50 dark:hover:bg-slate-800 text-slate-600 dark:text-slate-300 text-sm font-bold transition-colors">
                    <span class="material-symbols-outlined text-[18px]">logout</span>
                    <span>Logout</span>
                </button>
            </div>
        </aside>
        <!-- Main Content Area -->
        <main class="flex-1 flex flex-col h-full relative overflow-y-auto">
            <!-- Top Header -->
            <header
                class="sticky top-0 z-10 flex items-center justify-between bg-surface-light dark:bg-surface-dark border-b border-border-light dark:border-border-dark px-6 py-3 shadow-sm">
                <div class="flex items-center gap-4">
                    <!-- Mobile Menu Button (Visible only on small screens) -->
                    <button class="md:hidden p-2 text-slate-600 dark:text-slate-300">
                        <span class="material-symbols-outlined">menu</span>
                    </button>
                    <h2 class="text-slate-900 dark:text-white text-lg font-bold tracking-tight hidden sm:block">
                        Dashboard Overview</h2>
                </div>
                <div class="flex flex-1 justify-end items-center gap-4 sm:gap-6">
                    <!-- Search Bar -->
                    <div
                        class="hidden sm:flex max-w-xs w-full items-center rounded-lg bg-background-light dark:bg-background-dark border border-transparent focus-within:border-primary focus-within:ring-1 focus-within:ring-primary transition-all h-10">
                        <div class="pl-3 text-slate-400 flex items-center justify-center">
                            <span class="material-symbols-outlined text-[20px]">search</span>
                        </div>
                        <input
                            class="w-full bg-transparent border-none text-sm text-slate-900 dark:text-white placeholder-slate-400 focus:ring-0 px-2"
                            placeholder="Search vehicles, bookings..." type="text" />
                    </div>
                    <!-- Actions -->
                    <div class="flex items-center gap-3">
                        <button
                            class="p-2 rounded-full text-slate-500 hover:bg-slate-100 dark:text-slate-400 dark:hover:bg-slate-800 transition-colors relative">
                            <span class="material-symbols-outlined">notifications</span>
                            <span
                                class="absolute top-2 right-2 h-2 w-2 rounded-full bg-red-500 border border-white dark:border-surface-dark"></span>
                        </button>
                        <button
                            class="hidden sm:flex items-center gap-2 bg-primary hover:bg-blue-600 text-white text-sm font-bold h-10 px-4 rounded-lg transition-colors shadow-sm shadow-blue-500/30">
                            <span class="material-symbols-outlined text-[18px]">add</span>
                            <span>Add Vehicle</span>
                        </button>
                        <div class="md:hidden bg-center bg-no-repeat bg-cover rounded-full h-8 w-8"
                            data-alt="User profile picture mobile"
                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDrpKWkrSdb6JAFU5ZAT88b247id8doVikzKOqZTCCIFkE-jDGRTNr3SL50F7iW_r5cwuzrSKTW_63rFBLbGzkPDY7-lshxCY9MLEHsE9fZt1_PNOdUY1pgiL4sbsdzkwhljvepupMzFZvJFCHCpZAHfT-ZrVNPMUEcII1OpwgwfjszWdAN7_Uj4cAZjj-u665cyMpbbBKddeoe4dC1aUR7R25h_Nse0ERE-THPK_R09eLzgv1AUSuQmvf-3TVr952c45ZxU7Fe0iI");'>
                        </div>
                    </div>
                </div>
            </header>
            <!-- Dashboard Content -->
            <div class="p-6 max-w-7xl mx-auto w-full flex flex-col gap-6">
                <!-- Stats Row -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                    <!-- Stat Card 1 -->
                    <div
                        class="flex flex-col p-5 bg-surface-light dark:bg-surface-dark rounded-xl border border-border-light dark:border-border-dark shadow-sm hover:shadow-md transition-shadow">
                        <div class="flex justify-between items-start mb-4">
                            <div class="p-2 bg-blue-50 dark:bg-blue-900/20 rounded-lg text-primary">
                                <span class="material-symbols-outlined">directions_car</span>
                            </div>
                            <span
                                class="flex items-center text-xs font-medium text-green-600 bg-green-50 dark:bg-green-900/20 px-2 py-1 rounded-full">
                                <span class="material-symbols-outlined text-[14px] mr-1">trending_up</span> +12%
                            </span>
                        </div>
                        <p class="text-slate-500 dark:text-slate-400 text-sm font-medium">Total Vehicles</p>
                        <h3 class="text-2xl font-bold text-slate-900 dark:text-white mt-1">124</h3>
                    </div>
                    <!-- Stat Card 2 -->
                    <div
                        class="flex flex-col p-5 bg-surface-light dark:bg-surface-dark rounded-xl border border-border-light dark:border-border-dark shadow-sm hover:shadow-md transition-shadow">
                        <div class="flex justify-between items-start mb-4">
                            <div class="p-2 bg-purple-50 dark:bg-purple-900/20 rounded-lg text-purple-600">
                                <span class="material-symbols-outlined">confirmation_number</span>
                            </div>
                            <span
                                class="flex items-center text-xs font-medium text-green-600 bg-green-50 dark:bg-green-900/20 px-2 py-1 rounded-full">
                                <span class="material-symbols-outlined text-[14px] mr-1">trending_up</span> +5%
                            </span>
                        </div>
                        <p class="text-slate-500 dark:text-slate-400 text-sm font-medium">Active Reservations</p>
                        <h3 class="text-2xl font-bold text-slate-900 dark:text-white mt-1">45</h3>
                    </div>
                    <!-- Stat Card 3 -->
                    <div
                        class="flex flex-col p-5 bg-surface-light dark:bg-surface-dark rounded-xl border border-border-light dark:border-border-dark shadow-sm hover:shadow-md transition-shadow">
                        <div class="flex justify-between items-start mb-4">
                            <div class="p-2 bg-orange-50 dark:bg-orange-900/20 rounded-lg text-orange-600">
                                <span class="material-symbols-outlined">rate_review</span>
                            </div>
                            <span
                                class="flex items-center text-xs font-medium text-red-600 bg-red-50 dark:bg-red-900/20 px-2 py-1 rounded-full">
                                <span class="material-symbols-outlined text-[14px] mr-1">trending_down</span> -2%
                            </span>
                        </div>
                        <p class="text-slate-500 dark:text-slate-400 text-sm font-medium">Pending Reviews</p>
                        <h3 class="text-2xl font-bold text-slate-900 dark:text-white mt-1">8</h3>
                    </div>
                    <!-- Stat Card 4 -->
                    <div
                        class="flex flex-col p-5 bg-surface-light dark:bg-surface-dark rounded-xl border border-border-light dark:border-border-dark shadow-sm hover:shadow-md transition-shadow">
                        <div class="flex justify-between items-start mb-4">
                            <div class="p-2 bg-green-50 dark:bg-green-900/20 rounded-lg text-green-600">
                                <span class="material-symbols-outlined">payments</span>
                            </div>
                            <span
                                class="flex items-center text-xs font-medium text-green-600 bg-green-50 dark:bg-green-900/20 px-2 py-1 rounded-full">
                                <span class="material-symbols-outlined text-[14px] mr-1">trending_up</span> +18%
                            </span>
                        </div>
                        <p class="text-slate-500 dark:text-slate-400 text-sm font-medium">Total Revenue</p>
                        <h3 class="text-2xl font-bold text-slate-900 dark:text-white mt-1">$34,500</h3>
                    </div>
                </div>
                <!-- Charts Section -->
                <div class="flex flex-col xl:flex-row gap-6">
                    <!-- Main Chart: Revenue -->
                    <div
                        class="flex flex-col flex-[2] bg-surface-light dark:bg-surface-dark rounded-xl border border-border-light dark:border-border-dark shadow-sm p-6">
                        <div class="flex justify-between items-end mb-6">
                            <div>
                                <h3 class="text-slate-900 dark:text-white text-lg font-bold">Revenue Over Time</h3>
                                <div class="flex items-center gap-2 mt-1">
                                    <span
                                        class="text-3xl font-bold text-slate-900 dark:text-white tracking-tight">$12,450</span>
                                    <span
                                        class="text-sm text-green-600 font-medium bg-green-50 dark:bg-green-900/20 px-2 py-0.5 rounded">+15%
                                        vs last week</span>
                                </div>
                            </div>
                            <select
                                class="bg-background-light dark:bg-background-dark border-none text-sm text-slate-600 dark:text-slate-300 rounded-lg focus:ring-1 focus:ring-primary cursor-pointer py-1 pl-3 pr-8">
                                <option>Last 7 Days</option>
                                <option>Last 30 Days</option>
                                <option>This Year</option>
                            </select>
                        </div>
                        <!-- SVG Chart Placeholder -->
                        <div class="w-full h-64 relative">
                            <svg class="w-full h-full overflow-visible" preserveaspectratio="none"
                                viewbox="0 0 478 150">
                                <defs>
                                    <lineargradient id="chartGradient" x1="0" x2="0" y1="0" y2="1">
                                        <stop offset="0%" stop-color="#137fec" stop-opacity="0.2"></stop>
                                        <stop offset="100%" stop-color="#137fec" stop-opacity="0"></stop>
                                    </lineargradient>
                                </defs>
                                <path
                                    d="M0 109C18.15 109 18.15 21 36.3 21C54.46 21 54.46 41 72.6 41C90.7 41 90.7 93 108.9 93C127 93 127 33 145.2 33C163.3 33 163.3 101 181.5 101C199.7 101 199.7 61 217.8 61C236 61 236 45 254.1 45C272.3 45 272.3 121 290.4 121C308.6 121 308.6 149 326.7 149C344.9 149 344.9 1 363 1C381.2 1 381.2 81 399.3 81C417.5 81 417.5 129 435.6 129C453.8 129 453.8 25 472 25V150H0V109Z"
                                    fill="url(#chartGradient)"></path>
                                <path
                                    d="M0 109C18.15 109 18.15 21 36.3 21C54.46 21 54.46 41 72.6 41C90.7 41 90.7 93 108.9 93C127 93 127 33 145.2 33C163.3 33 163.3 101 181.5 101C199.7 101 199.7 61 217.8 61C236 61 236 45 254.1 45C272.3 45 272.3 121 290.4 121C308.6 121 308.6 149 326.7 149C344.9 149 344.9 1 363 1C381.2 1 381.2 81 399.3 81C417.5 81 417.5 129 435.6 129C453.8 129 453.8 25 472 25"
                                    fill="none" stroke="#137fec" stroke-linecap="round" stroke-width="3"
                                    vector-effect="non-scaling-stroke"></path>
                            </svg>
                        </div>
                        <div
                            class="flex justify-between mt-4 text-xs font-semibold text-slate-400 uppercase tracking-wider px-2">
                            <span>Mon</span><span>Tue</span><span>Wed</span><span>Thu</span><span>Fri</span><span>Sat</span><span>Sun</span>
                        </div>
                    </div>
                    <!-- Secondary Chart: Availability -->
                    <div
                        class="flex flex-col flex-1 bg-surface-light dark:bg-surface-dark rounded-xl border border-border-light dark:border-border-dark shadow-sm p-6">
                        <div class="mb-6">
                            <h3 class="text-slate-900 dark:text-white text-lg font-bold">Vehicle Availability</h3>
                            <p class="text-slate-500 dark:text-slate-400 text-sm">Category distribution currently
                                available</p>
                        </div>
                        <div class="flex-1 flex items-end justify-between gap-4 px-2 min-h-[180px]">
                            <!-- Bar 1 -->
                            <div class="flex flex-col items-center gap-2 w-full group">
                                <div
                                    class="w-full bg-slate-100 dark:bg-slate-700 rounded-t-lg relative h-32 overflow-hidden">
                                    <div
                                        class="absolute bottom-0 left-0 w-full bg-blue-500 h-[65%] rounded-t-lg transition-all duration-500 group-hover:bg-blue-600">
                                    </div>
                                </div>
                                <span class="text-xs font-semibold text-slate-500 dark:text-slate-400">Sedan</span>
                            </div>
                            <!-- Bar 2 -->
                            <div class="flex flex-col items-center gap-2 w-full group">
                                <div
                                    class="w-full bg-slate-100 dark:bg-slate-700 rounded-t-lg relative h-32 overflow-hidden">
                                    <div
                                        class="absolute bottom-0 left-0 w-full bg-indigo-500 h-[45%] rounded-t-lg transition-all duration-500 group-hover:bg-indigo-600">
                                    </div>
                                </div>
                                <span class="text-xs font-semibold text-slate-500 dark:text-slate-400">SUV</span>
                            </div>
                            <!-- Bar 3 -->
                            <div class="flex flex-col items-center gap-2 w-full group">
                                <div
                                    class="w-full bg-slate-100 dark:bg-slate-700 rounded-t-lg relative h-32 overflow-hidden">
                                    <div
                                        class="absolute bottom-0 left-0 w-full bg-orange-400 h-[30%] rounded-t-lg transition-all duration-500 group-hover:bg-orange-500">
                                    </div>
                                </div>
                                <span class="text-xs font-semibold text-slate-500 dark:text-slate-400">Van</span>
                            </div>
                            <!-- Bar 4 -->
                            <div class="flex flex-col items-center gap-2 w-full group">
                                <div
                                    class="w-full bg-slate-100 dark:bg-slate-700 rounded-t-lg relative h-32 overflow-hidden">
                                    <div
                                        class="absolute bottom-0 left-0 w-full bg-emerald-500 h-[80%] rounded-t-lg transition-all duration-500 group-hover:bg-emerald-600">
                                    </div>
                                </div>
                                <span class="text-xs font-semibold text-slate-500 dark:text-slate-400">Luxury</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Recent Reservations Table -->
                <div
                    class="flex flex-col bg-surface-light dark:bg-surface-dark rounded-xl border border-border-light dark:border-border-dark shadow-sm overflow-hidden">
                    <div
                        class="flex items-center justify-between p-6 border-b border-border-light dark:border-border-dark">
                        <h2 class="text-slate-900 dark:text-white text-lg font-bold">Recent Reservations</h2>
                        <a class="text-primary text-sm font-semibold hover:underline" href="#">View All</a>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr
                                    class="bg-background-light dark:bg-background-dark/50 border-b border-border-light dark:border-border-dark">
                                    <th
                                        class="py-4 px-6 text-xs font-semibold uppercase tracking-wider text-slate-500 dark:text-slate-400">
                                        Vehicle</th>
                                    <th
                                        class="py-4 px-6 text-xs font-semibold uppercase tracking-wider text-slate-500 dark:text-slate-400">
                                        Customer</th>
                                    <th
                                        class="py-4 px-6 text-xs font-semibold uppercase tracking-wider text-slate-500 dark:text-slate-400">
                                        Date Range</th>
                                    <th
                                        class="py-4 px-6 text-xs font-semibold uppercase tracking-wider text-slate-500 dark:text-slate-400">
                                        Total Price</th>
                                    <th
                                        class="py-4 px-6 text-xs font-semibold uppercase tracking-wider text-slate-500 dark:text-slate-400">
                                        Status</th>
                                    <th
                                        class="py-4 px-6 text-xs font-semibold uppercase tracking-wider text-slate-500 dark:text-slate-400 text-right">
                                        Action</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-border-light dark:divide-border-dark">
                                <!-- Row 1 -->
                                <tr class="group hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors">
                                    <td class="py-4 px-6">
                                        <div class="flex items-center gap-3">
                                            <div class="h-10 w-14 rounded bg-cover bg-center bg-slate-200"
                                                data-alt="White Tesla Model 3 side view"
                                                style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuB7Iwh_W4HlmwUXPgUjc9YLYZHYONy0Phteh6XDXyGw179K3plTu-JfurZBI0YKNlzH-pCDktid0j56GVlKE-TMa3EFzGBN_nM4YoqprDb-RTg1ECdAJk2SGpAzde8vVgjn_MP61w23b_P74F6FxKfFNda3ygbzIhuD2X3WXTaZds7jEJZTSbhWhRfnAr5FEvV_zIaR0YOB6MreXys4VP6gDAm_ch0YDuXzt-YBpkMVz3Q8f9w5Ys0KEhMo5PVSfP9mfhUNqHDJDYE");'>
                                            </div>
                                            <div>
                                                <p class="text-sm font-medium text-slate-900 dark:text-white">Tesla
                                                    Model 3</p>
                                                <p class="text-xs text-slate-500 dark:text-slate-400">Electric • Sedan
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="py-4 px-6">
                                        <div class="flex items-center gap-2">
                                            <div class="h-6 w-6 rounded-full bg-slate-200 bg-cover bg-center"
                                                data-alt="Portrait of Sarah Johnson"
                                                style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDSmiAn6a3dgaUQvy6P7bGNcuSinN2aP_Y1f_INTRF9Il_4ShsZVj6tkcx3-YJu16L4s0aGFfQJEaEUksiJZo2LznG7kHOJrdQYOqBube2rQzNP8G_6qn952NuPprmCtQEzTynpM9swfGS7F3U32Q_4VrNzGNe8CQmQoajFCF5uf7U2cVhaKJ0UKYjHE3Pq_9-lhuWQ9JGEq8Vgr8PZZam1Pucd9AM-47Eutbj_Dm42ENsWfmPwudraXsQSJnJPXVjS9rjcHpqhVWE");'>
                                            </div>
                                            <span class="text-sm text-slate-700 dark:text-slate-300">Sarah
                                                Johnson</span>
                                        </div>
                                    </td>
                                    <td class="py-4 px-6">
                                        <div class="text-sm text-slate-700 dark:text-slate-300">Oct 24 - Oct 28</div>
                                        <div class="text-xs text-slate-400">4 days</div>
                                    </td>
                                    <td class="py-4 px-6 text-sm font-medium text-slate-900 dark:text-white">$480.00
                                    </td>
                                    <td class="py-4 px-6">
                                        <span
                                            class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-medium bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-400">
                                            <span class="h-1.5 w-1.5 rounded-full bg-green-500"></span> Confirmed
                                        </span>
                                    </td>
                                    <td class="py-4 px-6 text-right">
                                        <button class="text-slate-400 hover:text-primary transition-colors">
                                            <span class="material-symbols-outlined text-[20px]">more_vert</span>
                                        </button>
                                    </td>
                                </tr>
                                <!-- Row 2 -->
                                <tr class="group hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors">
                                    <td class="py-4 px-6">
                                        <div class="flex items-center gap-3">
                                            <div class="h-10 w-14 rounded bg-cover bg-center bg-slate-200"
                                                data-alt="Black BMW X5 SUV front view"
                                                style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDnVBQYCqjI4BvXvHVQIrbfYcjgO-DpuSpEe_tsRSlYwCQ765zlmdhOGn6XResGgx2yZxHG16UAgDfzZVxyt83pkrQMBemd_ubv6CerYJ2-24BeEA6KAY0syJ4S0v2SpSOKnPkz7NLfMXYyGyLbzLOnIa5VU3lOEkwnaYF7WMUoIRM1K3eIb-ZUnwAfgyl-s7eRwBMPFyTjmFmte7xjzRD2jUa7BS7VgDloQD2AuHxq4gbEqj80j8K1qoswPW-2Dlw9iyx9X4k6Lpw");'>
                                            </div>
                                            <div>
                                                <p class="text-sm font-medium text-slate-900 dark:text-white">BMW X5</p>
                                                <p class="text-xs text-slate-500 dark:text-slate-400">Gas • SUV</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="py-4 px-6">
                                        <div class="flex items-center gap-2">
                                            <div class="h-6 w-6 rounded-full bg-slate-200 bg-cover bg-center"
                                                data-alt="Portrait of Michael Chen"
                                                style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuD-f0pvjaAHT8_JpY0xw51JxAy1BBNv9pH-fqA4fjILad3Bl212dHWz33SSXTiqnMTUJD-NggEmj6CtR0l6-6p_VSnOchUdwOIDt4ZDlbpcJOi8d3NUkZyi_PrA_q2-QTAFG6vp3KJPX7gOmVrjvAZXtr2yAw45cQ-bhcOE2-N4-x95uK_itplubMsXo7geiPZSwxm76UQ1GhZ9_VMr6xVVLJ2STzBQAC9GQB05YK8UGNQw7RaF6BMBo1uPAFRE-FHblxqV8PLWbfw");'>
                                            </div>
                                            <span class="text-sm text-slate-700 dark:text-slate-300">Michael Chen</span>
                                        </div>
                                    </td>
                                    <td class="py-4 px-6">
                                        <div class="text-sm text-slate-700 dark:text-slate-300">Oct 25 - Oct 26</div>
                                        <div class="text-xs text-slate-400">1 day</div>
                                    </td>
                                    <td class="py-4 px-6 text-sm font-medium text-slate-900 dark:text-white">$150.00
                                    </td>
                                    <td class="py-4 px-6">
                                        <span
                                            class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-medium bg-yellow-100 text-yellow-700 dark:bg-yellow-900/30 dark:text-yellow-400">
                                            <span class="h-1.5 w-1.5 rounded-full bg-yellow-500"></span> Pending
                                        </span>
                                    </td>
                                    <td class="py-4 px-6 text-right">
                                        <button class="text-slate-400 hover:text-primary transition-colors">
                                            <span class="material-symbols-outlined text-[20px]">more_vert</span>
                                        </button>
                                    </td>
                                </tr>
                                <!-- Row 3 -->
                                <tr class="group hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors">
                                    <td class="py-4 px-6">
                                        <div class="flex items-center gap-3">
                                            <div class="h-10 w-14 rounded bg-cover bg-center bg-slate-200"
                                                data-alt="Red Mercedes Benz C Class"
                                                style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDTdFyklGYe0702YTumYydVcZgDq0NWOuqmNyci2EzR1nkRqfURSGSd5254a_vfCE803bTeGFQiRQSeorPCViO_soRu9VYE6En7UWn15gi3h9I1_yaYDa9PvL6OzllebnAhS0xJQ3CLgRBNhOCfRCJsZYsX9R-geQeGT2wtwh87Na9-AeXTo_H9lOw1DGl5JkpGKsM-D34uay_kAANHX3qxMi4HQQQMNtOVGom-EY5O-D0xMAMeyzM5tnBjD-OqTQPhmXtm599iqTI");'>
                                            </div>
                                            <div>
                                                <p class="text-sm font-medium text-slate-900 dark:text-white">Mercedes
                                                    C-Class</p>
                                                <p class="text-xs text-slate-500 dark:text-slate-400">Gas • Luxury</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="py-4 px-6">
                                        <div class="flex items-center gap-2">
                                            <div class="h-6 w-6 rounded-full bg-slate-200 bg-cover bg-center"
                                                data-alt="Portrait of Emily Davis"
                                                style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDKz_YdtKSGHNjWt2MzQXchL01mS2bwZ-M042tiyO7WBi5y0B1iMfoxam6_JGgpxjcnx0TvvOOkP7OAspVu21D_zrpFtDSgDXxNL60AaipBrir6G-BJao6UH4Wbdp_g8bpJK_LvYXg_KbNX8Vy3xVnKXtsaGSsOiSy9GGAAEN-JqrrHj7d5cwy8IWLGWI-VxsiY7hRVEDH63MjtHO5w3WfR0iGDMqgI4aeaut_0UdrZpBXnBwib55pv0pPOXjiOdt4WShtAkYNVKo0");'>
                                            </div>
                                            <span class="text-sm text-slate-700 dark:text-slate-300">Emily Davis</span>
                                        </div>
                                    </td>
                                    <td class="py-4 px-6">
                                        <div class="text-sm text-slate-700 dark:text-slate-300">Oct 20 - Oct 23</div>
                                        <div class="text-xs text-slate-400">3 days</div>
                                    </td>
                                    <td class="py-4 px-6 text-sm font-medium text-slate-900 dark:text-white">$360.00
                                    </td>
                                    <td class="py-4 px-6">
                                        <span
                                            class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-medium bg-blue-100 text-blue-700 dark:bg-blue-900/30 dark:text-blue-400">
                                            <span class="h-1.5 w-1.5 rounded-full bg-blue-500"></span> Active
                                        </span>
                                    </td>
                                    <td class="py-4 px-6 text-right">
                                        <button class="text-slate-400 hover:text-primary transition-colors">
                                            <span class="material-symbols-outlined text-[20px]">more_vert</span>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>

</html>