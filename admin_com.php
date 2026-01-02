<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Admin Reviews Management</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <script>
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
        /* Custom scrollbar for better aesthetics */
        .custom-scrollbar::-webkit-scrollbar {
            width: 6px;
            height: 6px;
        }

        .custom-scrollbar::-webkit-scrollbar-track {
            background: transparent;
        }

        .custom-scrollbar::-webkit-scrollbar-thumb {
            background-color: #cbd5e1;
            border-radius: 20px;
        }

        .dark .custom-scrollbar::-webkit-scrollbar-thumb {
            background-color: #475569;
        }
    </style>
</head>

<body class="bg-background-light dark:bg-background-dark text-[#111418] dark:text-white font-display overflow-hidden">
    <div class="flex h-screen w-full">
        <!-- Sidebar (Adapted from Component) -->
        <aside
            class="hidden lg:flex w-[280px] flex-col border-r border-[#f0f2f4] dark:border-gray-800 bg-white dark:bg-[#111a22] shrink-0 h-full overflow-y-auto custom-scrollbar">
            <div class="flex h-full min-h-[700px] flex-col justify-between p-4">
                <div class="flex flex-col gap-4">
                    <div class="flex gap-3 px-2">
                        <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10"
                            data-alt="Abstract blue logo shape"
                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAeah2mmDpZ9JiskIOy0QISmI7kgO3cXYvGeVovjwB-aJ99zmb6GSxAOxUIfewVretc4vf5prA-TqIXBtqDYez6DR_DGruVeXe4ZCqRzWb60e1-V9AyBF6FGIHSBY0UVH08QPeLgPbZHRFM2hYXiqQwADOt6invjyp9fvRUj4eCj994QR00l4LLnimFTvwaFBA5gCgoLOhKUPBWBQkN2ElKGvIxa78KnR8RbWGJxxf-9dw31gpXZ5EVr6InAIP2BuvORP5UzzoyK0k");'>
                        </div>
                        <div class="flex flex-col justify-center">
                            <h1 class="text-[#111418] dark:text-white text-base font-bold leading-normal">Admin Portal
                            </h1>
                            <p class="text-[#617589] dark:text-gray-400 text-sm font-normal leading-normal">Car Rental
                                Platform</p>
                        </div>
                    </div>
                    <div class="flex flex-col gap-2 mt-4">
                        <a class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-[#f0f2f4] dark:hover:bg-gray-800 transition-colors group"
                            href="#">
                            <span
                                class="material-symbols-outlined text-[#111418] dark:text-gray-400 group-hover:text-primary"
                                style="font-size: 24px;">dashboard</span>
                            <p class="text-[#111418] dark:text-gray-300 text-sm font-medium leading-normal">Dashboard
                            </p>
                        </a>
                        <a class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-[#f0f2f4] dark:hover:bg-gray-800 transition-colors group"
                            href="#">
                            <span
                                class="material-symbols-outlined text-[#111418] dark:text-gray-400 group-hover:text-primary"
                                style="font-size: 24px;">calendar_month</span>
                            <p class="text-[#111418] dark:text-gray-300 text-sm font-medium leading-normal">Bookings</p>
                        </a>
                        <a class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-[#f0f2f4] dark:hover:bg-gray-800 transition-colors group"
                            href="#">
                            <span
                                class="material-symbols-outlined text-[#111418] dark:text-gray-400 group-hover:text-primary"
                                style="font-size: 24px;">directions_car</span>
                            <p class="text-[#111418] dark:text-gray-300 text-sm font-medium leading-normal">Fleet</p>
                        </a>
                        <!-- Active Item -->
                        <a class="flex items-center gap-3 px-3 py-2 rounded-lg bg-primary/10 text-primary" href="#">
                            <span class="material-symbols-outlined text-primary fill-current"
                                style="font-variation-settings: 'FILL' 1; font-size: 24px;">star</span>
                            <p class="text-primary text-sm font-bold leading-normal">Reviews</p>
                        </a>
                        <a class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-[#f0f2f4] dark:hover:bg-gray-800 transition-colors group"
                            href="#">
                            <span
                                class="material-symbols-outlined text-[#111418] dark:text-gray-400 group-hover:text-primary"
                                style="font-size: 24px;">settings</span>
                            <p class="text-[#111418] dark:text-gray-300 text-sm font-medium leading-normal">Settings</p>
                        </a>
                    </div>
                </div>
                <div class="flex flex-col gap-2 border-t border-[#f0f2f4] dark:border-gray-800 pt-4">
                    <div class="flex items-center gap-3 px-3 py-2">
                        <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-8"
                            data-alt="Admin user profile picture"
                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAQCSvkLKFgBIsi2eD-ePu4OswC0u0ErtXpz0gAn9FNjZYP95y-nGGCwhLI-5aA1Rd3GAc5Qpe1nVJ4qGujMs_8o8M-f6VeSYMsnkFkdQm6oH3mYJCIEWnd3KR5dLJyV5ljXOod7jtZ-GzVyAi8cvXnIy4wienfvAYFt6p5gZaPwrSRUAGR1YLHKOlkyG4f6PKDxPJ91UnKnFXeyX4tQIEqvUqEkMBn3q69h6RbuZpNagi0gGax5f2f8uTEWoSj2RJTE9MBo1sC16A");'>
                        </div>
                        <div class="flex flex-col">
                            <p class="text-[#111418] dark:text-white text-sm font-medium">Alex Morgan</p>
                            <p class="text-[#617589] dark:text-gray-500 text-xs">Super Admin</p>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
        <!-- Main Content Wrapper -->
        <main class="flex flex-1 flex-col h-full overflow-hidden bg-background-light dark:bg-background-dark relative">
            <!-- Top Navbar (Adapted) -->
            <header
                class="flex items-center justify-between whitespace-nowrap border-b border-solid border-[#dbe0e6] dark:border-gray-800 bg-white dark:bg-[#111a22] px-6 py-3 shrink-0">
                <div class="flex items-center gap-4 text-[#111418] dark:text-white lg:hidden">
                    <button class="text-[#111418] dark:text-white">
                        <span class="material-symbols-outlined">menu</span>
                    </button>
                    <h2 class="text-[#111418] dark:text-white text-lg font-bold leading-tight">Reviews</h2>
                </div>
                <!-- Desktop Title Placeholder -->
                <div class="hidden lg:flex items-center gap-4 text-[#111418] dark:text-white">
                    <h2 class="text-[#111418] dark:text-white text-lg font-bold leading-tight">Reviews Management</h2>
                </div>
                <div class="flex flex-1 justify-end gap-6">
                    <div class="flex gap-2">
                        <button
                            class="flex items-center justify-center rounded-lg size-10 hover:bg-[#f0f2f4] dark:hover:bg-gray-800 text-[#111418] dark:text-white transition-colors">
                            <span class="material-symbols-outlined" style="font-size: 20px;">search</span>
                        </button>
                        <button
                            class="flex items-center justify-center rounded-lg size-10 hover:bg-[#f0f2f4] dark:hover:bg-gray-800 text-[#111418] dark:text-white transition-colors relative">
                            <span class="material-symbols-outlined" style="font-size: 20px;">notifications</span>
                            <span
                                class="absolute top-2 right-2 size-2 bg-red-500 rounded-full border border-white dark:border-[#111a22]"></span>
                        </button>
                    </div>
                </div>
            </header>
            <!-- Scrollable Page Content -->
            <div class="flex-1 overflow-y-auto custom-scrollbar p-6 lg:px-12 pb-20">
                <div class="max-w-[1200px] mx-auto flex flex-col gap-6">
                    <!-- Breadcrumbs (Adapted) -->
                    <div class="flex flex-wrap gap-2 items-center">
                        <a class="text-[#617589] dark:text-gray-400 text-sm font-medium hover:text-primary transition-colors"
                            href="#">Dashboard</a>
                        <span class="text-[#617589] dark:text-gray-600 text-sm font-medium">/</span>
                        <span class="text-[#111418] dark:text-white text-sm font-medium">Reviews</span>
                    </div>
                    <!-- Page Heading (Adapted) -->
                    <div class="flex flex-wrap justify-between gap-4">
                        <div class="flex flex-col gap-1">
                            <h1
                                class="text-[#111418] dark:text-white text-3xl font-black leading-tight tracking-[-0.033em]">
                                Reviews Management</h1>
                            <p class="text-[#617589] dark:text-gray-400 text-base font-normal">Monitor, approve, and
                                moderate customer feedback across the fleet.</p>
                        </div>
                        <div class="flex items-end">
                            <button
                                class="flex items-center gap-2 bg-primary hover:bg-primary/90 text-white px-4 py-2.5 rounded-lg font-bold text-sm transition-colors shadow-sm">
                                <span class="material-symbols-outlined" style="font-size: 20px;">download</span>
                                Export Report
                            </button>
                        </div>
                    </div>
                    <!-- Stats (Adapted) -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <div
                            class="flex flex-col gap-2 rounded-xl p-5 border border-[#dbe0e6] dark:border-gray-700 bg-white dark:bg-[#15202b] shadow-sm">
                            <div class="flex items-center justify-between">
                                <p class="text-[#617589] dark:text-gray-400 text-sm font-medium">Total Reviews</p>
                                <span class="material-symbols-outlined text-primary bg-primary/10 p-1 rounded-md"
                                    style="font-size: 20px;">reviews</span>
                            </div>
                            <div class="flex items-end gap-2">
                                <p class="text-[#111418] dark:text-white text-2xl font-bold leading-tight">8,432</p>
                                <p
                                    class="text-[#078838] text-xs font-medium mb-1 bg-[#078838]/10 px-1.5 py-0.5 rounded">
                                    +5.2%</p>
                            </div>
                        </div>
                        <div
                            class="flex flex-col gap-2 rounded-xl p-5 border border-[#dbe0e6] dark:border-gray-700 bg-white dark:bg-[#15202b] shadow-sm">
                            <div class="flex items-center justify-between">
                                <p class="text-[#617589] dark:text-gray-400 text-sm font-medium">Pending Approval</p>
                                <span class="material-symbols-outlined text-orange-500 bg-orange-500/10 p-1 rounded-md"
                                    style="font-size: 20px;">pending_actions</span>
                            </div>
                            <div class="flex items-end gap-2">
                                <p class="text-[#111418] dark:text-white text-2xl font-bold leading-tight">12</p>
                                <p
                                    class="text-[#078838] text-xs font-medium mb-1 bg-[#078838]/10 px-1.5 py-0.5 rounded">
                                    +2 new</p>
                            </div>
                        </div>
                        <div
                            class="flex flex-col gap-2 rounded-xl p-5 border border-[#dbe0e6] dark:border-gray-700 bg-white dark:bg-[#15202b] shadow-sm">
                            <div class="flex items-center justify-between">
                                <p class="text-[#617589] dark:text-gray-400 text-sm font-medium">Soft Deleted</p>
                                <span class="material-symbols-outlined text-red-500 bg-red-500/10 p-1 rounded-md"
                                    style="font-size: 20px;">delete_sweep</span>
                            </div>
                            <div class="flex items-end gap-2">
                                <p class="text-[#111418] dark:text-white text-2xl font-bold leading-tight">145</p>
                                <p
                                    class="text-[#e73908] text-xs font-medium mb-1 bg-[#e73908]/10 px-1.5 py-0.5 rounded">
                                    -1 recovered</p>
                            </div>
                        </div>
                    </div>
                    <!-- Filters & Search Bar -->
                    <div
                        class="flex flex-col sm:flex-row justify-between items-center gap-4 bg-white dark:bg-[#15202b] p-2 rounded-xl border border-[#dbe0e6] dark:border-gray-700 shadow-sm">
                        <!-- Tabs -->
                        <div class="flex p-1 bg-[#f0f2f4] dark:bg-gray-800 rounded-lg w-full sm:w-auto overflow-x-auto">
                            <button
                                class="px-4 py-1.5 rounded-md bg-white dark:bg-[#15202b] text-[#111418] dark:text-white text-sm font-semibold shadow-sm border border-gray-200 dark:border-gray-600 transition-all">All</button>
                            <button
                                class="px-4 py-1.5 rounded-md text-[#617589] dark:text-gray-400 text-sm font-medium hover:bg-gray-200 dark:hover:bg-gray-700 transition-all whitespace-nowrap">Published</button>
                            <button
                                class="px-4 py-1.5 rounded-md text-[#617589] dark:text-gray-400 text-sm font-medium hover:bg-gray-200 dark:hover:bg-gray-700 transition-all whitespace-nowrap flex items-center gap-1">
                                Pending <span class="bg-orange-500 text-white text-[10px] px-1.5 rounded-full">12</span>
                            </button>
                            <button
                                class="px-4 py-1.5 rounded-md text-[#617589] dark:text-gray-400 text-sm font-medium hover:bg-gray-200 dark:hover:bg-gray-700 transition-all whitespace-nowrap">Deleted</button>
                        </div>
                        <!-- Search -->
                        <div class="relative w-full sm:w-[320px]">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <span class="material-symbols-outlined text-[#9aa2ac]"
                                    style="font-size: 20px;">search</span>
                            </div>
                            <input
                                class="block w-full pl-10 pr-3 py-2 border-none ring-1 ring-[#dbe0e6] dark:ring-gray-700 rounded-lg leading-5 bg-white dark:bg-[#111a22] text-[#111418] dark:text-white placeholder-[#9aa2ac] focus:outline-none focus:ring-2 focus:ring-primary sm:text-sm"
                                placeholder="Search reviews, users, or booking ID..." type="text" />
                        </div>
                    </div>
                    <!-- Reviews Table -->
                    <div
                        class="bg-white dark:bg-[#15202b] border border-[#dbe0e6] dark:border-gray-700 rounded-xl overflow-hidden shadow-sm">
                        <div class="overflow-x-auto">
                            <table class="min-w-full text-left">
                                <thead
                                    class="bg-[#f8fafc] dark:bg-[#1e2936] border-b border-[#dbe0e6] dark:border-gray-700">
                                    <tr>
                                        <th class="px-6 py-4 text-xs font-semibold text-[#617589] dark:text-gray-400 uppercase tracking-wider"
                                            scope="col">Customer</th>
                                        <th class="px-6 py-4 text-xs font-semibold text-[#617589] dark:text-gray-400 uppercase tracking-wider"
                                            scope="col">Vehicle</th>
                                        <th class="px-6 py-4 text-xs font-semibold text-[#617589] dark:text-gray-400 uppercase tracking-wider"
                                            scope="col">Rating &amp; Review</th>
                                        <th class="px-6 py-4 text-xs font-semibold text-[#617589] dark:text-gray-400 uppercase tracking-wider"
                                            scope="col">Status</th>
                                        <th class="px-6 py-4 text-xs font-semibold text-[#617589] dark:text-gray-400 uppercase tracking-wider text-right"
                                            scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-[#eff1f3] dark:divide-gray-800">
                                    <!-- Row 1: Normal / Published -->
                                    <tr class="hover:bg-[#f8fafc] dark:hover:bg-[#1e2936] transition-colors group">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center gap-3">
                                                <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10 border border-gray-100 dark:border-gray-700"
                                                    data-alt="Portrait of Sarah Jenkins"
                                                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCauleN9HRbWOnSR5dRI47sG7_NfE4aMwdY4CTQqSbtJR9OZT2EJMnQUzCYFYRKfRcRA3v56y2U_AyWkDAGejx3D_nySy_x5SJ9m8EJYOXsycoB6-daMDdakj3xGD59F_t1UXBZtn04XkLPLHA2Vgv4-RB-G3J_HqLh6SibvG3iZMKCl83DzET_7OYhRZzNV6-krXEKl-w-lBduGmaCqUqwuqNbDxwX2fsYtMxYmmGlkbKijHKnM-XxYzl8rHCBJ3c76mgHUiga_M0");'>
                                                </div>
                                                <div class="flex flex-col">
                                                    <p class="text-sm font-bold text-[#111418] dark:text-white">Sarah
                                                        Jenkins</p>
                                                    <p class="text-xs text-[#617589] dark:text-gray-500">2 days ago</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex flex-col">
                                                <p class="text-sm font-medium text-[#111418] dark:text-gray-200">Tesla
                                                    Model 3</p>
                                                <p class="text-xs text-primary cursor-pointer hover:underline">#BK-9281
                                                </p>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 max-w-[300px]">
                                            <div class="flex flex-col gap-1">
                                                <div class="flex text-yellow-400">
                                                    <span class="material-symbols-outlined"
                                                        style="font-size: 16px; font-variation-settings: 'FILL' 1;">star</span>
                                                    <span class="material-symbols-outlined"
                                                        style="font-size: 16px; font-variation-settings: 'FILL' 1;">star</span>
                                                    <span class="material-symbols-outlined"
                                                        style="font-size: 16px; font-variation-settings: 'FILL' 1;">star</span>
                                                    <span class="material-symbols-outlined"
                                                        style="font-size: 16px; font-variation-settings: 'FILL' 1;">star</span>
                                                    <span class="material-symbols-outlined"
                                                        style="font-size: 16px; font-variation-settings: 'FILL' 1;">star</span>
                                                </div>
                                                <p class="text-sm text-[#111418] dark:text-gray-300 truncate">Absolutely
                                                    loved the car! It was clean and fully charged when I picked it up.
                                                </p>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span
                                                class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800 dark:bg-green-900/30 dark:text-green-400 border border-green-200 dark:border-green-800">
                                                <span
                                                    class="size-1.5 rounded-full bg-green-600 dark:bg-green-400"></span>
                                                Published
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            <div
                                                class="flex items-center justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                                                <button
                                                    class="text-[#617589] hover:text-[#111418] dark:hover:text-white p-1 rounded-md hover:bg-gray-100 dark:hover:bg-gray-700"
                                                    title="Hide Review">
                                                    <span class="material-symbols-outlined"
                                                        style="font-size: 20px;">visibility_off</span>
                                                </button>
                                                <button
                                                    class="text-[#617589] hover:text-red-600 dark:hover:text-red-400 p-1 rounded-md hover:bg-red-50 dark:hover:bg-red-900/20"
                                                    title="Delete">
                                                    <span class="material-symbols-outlined"
                                                        style="font-size: 20px;">delete</span>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- Row 2: Pending -->
                                    <tr
                                        class="hover:bg-[#f8fafc] dark:hover:bg-[#1e2936] transition-colors group bg-orange-50/30 dark:bg-orange-900/10">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center gap-3">
                                                <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10 border border-gray-100 dark:border-gray-700"
                                                    data-alt="Portrait of Mike Ross"
                                                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDWU4l2Bt3R4ElgycY9TEUeHVbvINYVF3aRVssVxnPb4RhcBfkm8akhfllo7VnI-TUa4cAuZZcitUACrnaguJ1DGrA5oOlnWuZkwruEWJdqnHxAI81IGF8yATvLE0zY2moAfdqNSA0zTx3GMd_FXiRIotJjYuYhPoE1ObdY2pc_rsShfUm2EHSjlQKmSWUO8-3jZofzUUFFDGxutIgRXF6gI2Y9Zr64mjEMJWQ7gWDqoGSwzFz2xq_bQVG8U5c6oAtUqAvK6yXHiag");'>
                                                </div>
                                                <div class="flex flex-col">
                                                    <p class="text-sm font-bold text-[#111418] dark:text-white">Mike
                                                        Ross</p>
                                                    <p class="text-xs text-[#617589] dark:text-gray-500">5 hours ago</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex flex-col">
                                                <p class="text-sm font-medium text-[#111418] dark:text-gray-200">Ford
                                                    Mustang GT</p>
                                                <p class="text-xs text-primary cursor-pointer hover:underline">#BK-3847
                                                </p>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 max-w-[300px]">
                                            <div class="flex flex-col gap-1">
                                                <div class="flex text-yellow-400">
                                                    <span class="material-symbols-outlined"
                                                        style="font-size: 16px; font-variation-settings: 'FILL' 1;">star</span>
                                                    <span class="material-symbols-outlined"
                                                        style="font-size: 16px; font-variation-settings: 'FILL' 1;">star</span>
                                                    <span class="material-symbols-outlined"
                                                        style="font-size: 16px; font-variation-settings: 'FILL' 1;">star</span>
                                                    <span
                                                        class="material-symbols-outlined text-gray-300 dark:text-gray-600"
                                                        style="font-size: 16px; font-variation-settings: 'FILL' 1;">star</span>
                                                    <span
                                                        class="material-symbols-outlined text-gray-300 dark:text-gray-600"
                                                        style="font-size: 16px; font-variation-settings: 'FILL' 1;">star</span>
                                                </div>
                                                <p class="text-sm text-[#111418] dark:text-gray-300 truncate">Car was
                                                    fast, but the interior smelled like cigarettes...</p>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span
                                                class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-medium bg-orange-100 text-orange-800 dark:bg-orange-900/30 dark:text-orange-400 border border-orange-200 dark:border-orange-800">
                                                <span class="size-1.5 rounded-full bg-orange-500"></span>
                                                Pending
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            <div class="flex items-center justify-end gap-2">
                                                <button
                                                    class="flex items-center gap-1 bg-primary text-white text-xs px-2 py-1.5 rounded hover:bg-primary/90 transition-colors">
                                                    <span class="material-symbols-outlined"
                                                        style="font-size: 16px;">check</span> Approve
                                                </button>
                                                <button
                                                    class="flex items-center gap-1 bg-white dark:bg-transparent border border-[#dbe0e6] dark:border-gray-600 text-[#111418] dark:text-white text-xs px-2 py-1.5 rounded hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors">
                                                    <span class="material-symbols-outlined"
                                                        style="font-size: 16px;">close</span> Reject
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- Row 3: Soft Deleted -->
                                    <tr class="bg-gray-50 dark:bg-[#18212a] opacity-80 group">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center gap-3">
                                                <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10 border border-gray-200 dark:border-gray-600 grayscale"
                                                    data-alt="Portrait of an anonymous user"
                                                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuD-VG_rHKheLkMohJ3yo106Uyy2uYQutr93dNksaKbq52bLL7vOnjjh-mukyMykeaojX_3GOuMMOsZ-wBl2VVX599WF7W7TlgPEkaFhv8Sw30EiW8-WI2JlTob61CemTFdeksOLoRHVJYTQ7QoFoBBJy6S22DczZ1hck0sukGpba1xyWp5vufq1WDEk-GDcbnninPNgLy7kqMRwnoe70oaM0_J9_C1zF_-4fb4gYOpkpuRhnfkG8-EoiSUaD66zgTF-mc-m0LfoDnM");'>
                                                </div>
                                                <div class="flex flex-col">
                                                    <p
                                                        class="text-sm font-bold text-[#617589] dark:text-gray-400 line-through">
                                                        Unknown User</p>
                                                    <p class="text-xs text-[#9aa2ac] dark:text-gray-600">1 week ago</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex flex-col opacity-60">
                                                <p class="text-sm font-medium text-[#617589] dark:text-gray-400">BMW X5
                                                </p>
                                                <p class="text-xs text-[#617589] dark:text-gray-500">#BK-1102</p>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 max-w-[300px]">
                                            <div class="flex flex-col gap-1 opacity-60">
                                                <div class="flex text-gray-300 dark:text-gray-600">
                                                    <span class="material-symbols-outlined text-yellow-500/50"
                                                        style="font-size: 16px; font-variation-settings: 'FILL' 1;">star</span>
                                                    <span class="material-symbols-outlined"
                                                        style="font-size: 16px; font-variation-settings: 'FILL' 1;">star</span>
                                                    <span class="material-symbols-outlined"
                                                        style="font-size: 16px; font-variation-settings: 'FILL' 1;">star</span>
                                                    <span class="material-symbols-outlined"
                                                        style="font-size: 16px; font-variation-settings: 'FILL' 1;">star</span>
                                                    <span class="material-symbols-outlined"
                                                        style="font-size: 16px; font-variation-settings: 'FILL' 1;">star</span>
                                                </div>
                                                <p class="text-sm text-[#617589] dark:text-gray-500 italic">This review
                                                    has been hidden by moderation due to policy violation.</p>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span
                                                class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-medium bg-gray-200 text-gray-700 dark:bg-gray-700 dark:text-gray-300">
                                                <span class="material-symbols-outlined text-xs"
                                                    style="font-size: 14px;">visibility_off</span>
                                                Hidden
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            <div class="flex items-center justify-end gap-2">
                                                <button
                                                    class="flex items-center gap-1 text-primary hover:text-primary/80 hover:bg-primary/5 px-2 py-1.5 rounded transition-colors"
                                                    title="Restore this review">
                                                    <span class="material-symbols-outlined"
                                                        style="font-size: 18px;">restore</span>
                                                    <span class="text-xs font-bold">Restore</span>
                                                </button>
                                                <button
                                                    class="text-[#e73908] hover:text-[#e73908]/80 p-1.5 rounded-md hover:bg-red-50 dark:hover:bg-red-900/20"
                                                    title="Permanently Delete">
                                                    <span class="material-symbols-outlined"
                                                        style="font-size: 18px;">delete_forever</span>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- Row 4: Normal / Published -->
                                    <tr class="hover:bg-[#f8fafc] dark:hover:bg-[#1e2936] transition-colors group">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center gap-3">
                                                <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10 border border-gray-100 dark:border-gray-700"
                                                    data-alt="Portrait of David Kim"
                                                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAEi-DMVRrO1o3VMpwyfVPVz1Ka8CLxGZJIXpjZfomSfgZWXwj8vIg2ywx8NIEZrC9y8KkmDfz45PVviIrX2HCT1Te_88HlkzBLIZ6DFgxMuFNjsClHzVeNv15_Sdw-o9L4XJmcmcM3C6k4-FJ0Qz56YwU7tWiYAsnA6alo1GCpyXyAA7SiTovvfK_zH8aFD4tK0BKO84JoMPIG77QmZ6eCCeDo8vghWDDaBbjNiGdQ6mJqXiMWHeICc7ZBPE7o4XzJs0AZGqhut2c");'>
                                                </div>
                                                <div class="flex flex-col">
                                                    <p class="text-sm font-bold text-[#111418] dark:text-white">David
                                                        Kim</p>
                                                    <p class="text-xs text-[#617589] dark:text-gray-500">2 weeks ago</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex flex-col">
                                                <p class="text-sm font-medium text-[#111418] dark:text-gray-200">Toyota
                                                    Camry</p>
                                                <p class="text-xs text-primary cursor-pointer hover:underline">#BK-5521
                                                </p>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 max-w-[300px]">
                                            <div class="flex flex-col gap-1">
                                                <div class="flex text-yellow-400">
                                                    <span class="material-symbols-outlined"
                                                        style="font-size: 16px; font-variation-settings: 'FILL' 1;">star</span>
                                                    <span class="material-symbols-outlined"
                                                        style="font-size: 16px; font-variation-settings: 'FILL' 1;">star</span>
                                                    <span class="material-symbols-outlined"
                                                        style="font-size: 16px; font-variation-settings: 'FILL' 1;">star</span>
                                                    <span class="material-symbols-outlined"
                                                        style="font-size: 16px; font-variation-settings: 'FILL' 1;">star</span>
                                                    <span
                                                        class="material-symbols-outlined text-gray-300 dark:text-gray-600"
                                                        style="font-size: 16px; font-variation-settings: 'FILL' 1;">star</span>
                                                </div>
                                                <p class="text-sm text-[#111418] dark:text-gray-300 truncate">Decent
                                                    car, reliable but the pickup process was a bit slow.</p>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span
                                                class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800 dark:bg-green-900/30 dark:text-green-400 border border-green-200 dark:border-green-800">
                                                <span
                                                    class="size-1.5 rounded-full bg-green-600 dark:bg-green-400"></span>
                                                Published
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            <div
                                                class="flex items-center justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                                                <button
                                                    class="text-[#617589] hover:text-[#111418] dark:hover:text-white p-1 rounded-md hover:bg-gray-100 dark:hover:bg-gray-700"
                                                    title="Hide Review">
                                                    <span class="material-symbols-outlined"
                                                        style="font-size: 20px;">visibility_off</span>
                                                </button>
                                                <button
                                                    class="text-[#617589] hover:text-red-600 dark:hover:text-red-400 p-1 rounded-md hover:bg-red-50 dark:hover:bg-red-900/20"
                                                    title="Delete">
                                                    <span class="material-symbols-outlined"
                                                        style="font-size: 20px;">delete</span>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- Row 5: Pending -->
                                    <tr
                                        class="hover:bg-[#f8fafc] dark:hover:bg-[#1e2936] transition-colors group bg-orange-50/30 dark:bg-orange-900/10">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center gap-3">
                                                <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10 border border-gray-100 dark:border-gray-700"
                                                    data-alt="Portrait of Emily Chen"
                                                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDbBToQjk6QfJMuGeXuthsjXidKVhHJJTnNOnxbN9Dm0snwAPokkRzKzqg6ffIVAgjTwgrRP-_prgCjwhEkgTwEhIjUKd0jmdRS2qtjuK34C-8SOrXyuF7Ub_mK-iyb3NWrvyDfoAwaMKpZ3-eI2R9Mr6QkC_1TgBl49K5nVKeIJetHbssleiHgzvTI4nih5AvhJk8zEygXa_yXFbvXbZxxICHiom4-lApcxZrBENzLanwxNV_6XsaNxKpaNmTy83h7dwar89zlJYU");'>
                                                </div>
                                                <div class="flex flex-col">
                                                    <p class="text-sm font-bold text-[#111418] dark:text-white">Emily
                                                        Chen</p>
                                                    <p class="text-xs text-[#617589] dark:text-gray-500">Just now</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex flex-col">
                                                <p class="text-sm font-medium text-[#111418] dark:text-gray-200">Jeep
                                                    Wrangler</p>
                                                <p class="text-xs text-primary cursor-pointer hover:underline">#BK-8839
                                                </p>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 max-w-[300px]">
                                            <div class="flex flex-col gap-1">
                                                <div class="flex text-yellow-400">
                                                    <span class="material-symbols-outlined"
                                                        style="font-size: 16px; font-variation-settings: 'FILL' 1;">star</span>
                                                    <span class="material-symbols-outlined"
                                                        style="font-size: 16px; font-variation-settings: 'FILL' 1;">star</span>
                                                    <span class="material-symbols-outlined"
                                                        style="font-size: 16px; font-variation-settings: 'FILL' 1;">star</span>
                                                    <span class="material-symbols-outlined"
                                                        style="font-size: 16px; font-variation-settings: 'FILL' 1;">star</span>
                                                    <span class="material-symbols-outlined"
                                                        style="font-size: 16px; font-variation-settings: 'FILL' 1;">star</span>
                                                </div>
                                                <p class="text-sm text-[#111418] dark:text-gray-300 truncate">Best
                                                    weekend ever! The car handled the terrain perfectly.</p>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span
                                                class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-medium bg-orange-100 text-orange-800 dark:bg-orange-900/30 dark:text-orange-400 border border-orange-200 dark:border-orange-800">
                                                <span class="size-1.5 rounded-full bg-orange-500"></span>
                                                Pending
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            <div class="flex items-center justify-end gap-2">
                                                <button
                                                    class="flex items-center gap-1 bg-primary text-white text-xs px-2 py-1.5 rounded hover:bg-primary/90 transition-colors">
                                                    <span class="material-symbols-outlined"
                                                        style="font-size: 16px;">check</span> Approve
                                                </button>
                                                <button
                                                    class="flex items-center gap-1 bg-white dark:bg-transparent border border-[#dbe0e6] dark:border-gray-600 text-[#111418] dark:text-white text-xs px-2 py-1.5 rounded hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors">
                                                    <span class="material-symbols-outlined"
                                                        style="font-size: 16px;">close</span> Reject
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- Pagination -->
                        <div
                            class="flex items-center justify-between border-t border-[#dbe0e6] dark:border-gray-700 bg-white dark:bg-[#15202b] px-4 py-3 sm:px-6">
                            <div class="flex flex-1 justify-between sm:hidden">
                                <a class="relative inline-flex items-center rounded-md border border-[#dbe0e6] bg-white px-4 py-2 text-sm font-medium text-[#111418] hover:bg-gray-50"
                                    href="#">Previous</a>
                                <a class="relative ml-3 inline-flex items-center rounded-md border border-[#dbe0e6] bg-white px-4 py-2 text-sm font-medium text-[#111418] hover:bg-gray-50"
                                    href="#">Next</a>
                            </div>
                            <div class="hidden sm:flex sm:flex-1 sm:items-center sm:justify-between">
                                <div>
                                    <p class="text-sm text-[#617589] dark:text-gray-400">
                                        Showing <span class="font-medium">1</span> to <span class="font-medium">5</span>
                                        of <span class="font-medium">8,432</span> results
                                    </p>
                                </div>
                                <div>
                                    <nav aria-label="Pagination"
                                        class="isolate inline-flex -space-x-px rounded-md shadow-sm">
                                        <a class="relative inline-flex items-center rounded-l-md px-2 py-2 text-[#617589] dark:text-gray-400 ring-1 ring-inset ring-[#dbe0e6] dark:ring-gray-700 hover:bg-gray-50 dark:hover:bg-gray-800 focus:z-20 focus:outline-offset-0"
                                            href="#">
                                            <span class="material-symbols-outlined"
                                                style="font-size: 20px;">chevron_left</span>
                                        </a>
                                        <a aria-current="page"
                                            class="relative z-10 inline-flex items-center bg-primary px-4 py-2 text-sm font-semibold text-white focus:z-20 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary"
                                            href="#">1</a>
                                        <a class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-[#111418] dark:text-white ring-1 ring-inset ring-[#dbe0e6] dark:ring-gray-700 hover:bg-gray-50 dark:hover:bg-gray-800 focus:z-20 focus:outline-offset-0"
                                            href="#">2</a>
                                        <a class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-[#111418] dark:text-white ring-1 ring-inset ring-[#dbe0e6] dark:ring-gray-700 hover:bg-gray-50 dark:hover:bg-gray-800 focus:z-20 focus:outline-offset-0"
                                            href="#">3</a>
                                        <span
                                            class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-[#617589] dark:text-gray-500 ring-1 ring-inset ring-[#dbe0e6] dark:ring-gray-700 focus:outline-offset-0">...</span>
                                        <a class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-[#111418] dark:text-white ring-1 ring-inset ring-[#dbe0e6] dark:ring-gray-700 hover:bg-gray-50 dark:hover:bg-gray-800 focus:z-20 focus:outline-offset-0"
                                            href="#">12</a>
                                        <a class="relative inline-flex items-center rounded-r-md px-2 py-2 text-[#617589] dark:text-gray-400 ring-1 ring-inset ring-[#dbe0e6] dark:ring-gray-700 hover:bg-gray-50 dark:hover:bg-gray-800 focus:z-20 focus:outline-offset-0"
                                            href="#">
                                            <span class="material-symbols-outlined"
                                                style="font-size: 20px;">chevron_right</span>
                                        </a>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>

</html>