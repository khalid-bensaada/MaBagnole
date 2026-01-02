<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Admin Reservations Management</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;900&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
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
                        "primary-hover": "#1066be",
                        "background-light": "#f6f7f8",
                        "background-dark": "#101922",
                        "surface-light": "#ffffff",
                        "surface-dark": "#1a2632",
                        "text-main": "#111418",
                        "text-secondary": "#617589",
                        "border-light": "#dbe0e6",
                        "border-dark": "#2d3b4a",
                    },
                    fontFamily: {
                        "display": ["Inter", "sans-serif"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
</head>

<body
    class="bg-background-light dark:bg-background-dark text-text-main dark:text-white font-display min-h-screen flex overflow-hidden">
    <!-- Sidebar (Desktop Fixed, Mobile Hidden implementation for this single view) -->
    <aside
        class="hidden lg:flex flex-col w-72 bg-surface-light dark:bg-surface-dark border-r border-border-light dark:border-border-dark h-screen fixed left-0 top-0 overflow-y-auto z-20">
        <div class="p-4 flex flex-col gap-4 h-full">
            <!-- Brand -->
            <div class="flex items-center gap-3 px-2 py-3">
                <div class="bg-center bg-no-repeat bg-cover rounded-lg size-10 shadow-sm" data-alt="Admin portal logo"
                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBPto-27cxJa-HPD7ynoT2SYZkRlZ3FvlhffhTu8yXLHxv5CsReLGi9tICtx7E7e13OVPlZc1d3o9FnYw9XETVTXGJmmW23PWdgs-ApZBoyP7diGB73H3958g_LDa__-T1Yq4TM0DHu__9nfBHe7BU9oL7AxgPvD8cn3_WFUAV9IKNIVsQoQ7yytLGQ5ISqEUd47q9fPSzIqJnlZ3bRaIC__-3McM3lzRsXkNuT_-caFgLFyHkDO8zP5DoWgtXGPpa1rq_URfDcorM");'>
                </div>
                <div class="flex flex-col">
                    <h1 class="text-text-main dark:text-white text-base font-bold leading-normal">Admin Portal</h1>
                    <p class="text-text-secondary dark:text-gray-400 text-xs font-normal leading-normal">Car Rental
                        Platform</p>
                </div>
            </div>
            <!-- Navigation -->
            <nav class="flex flex-col gap-2 grow">
                <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-text-main dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors"
                    href="#">
                    <span class="material-symbols-outlined text-text-secondary dark:text-gray-400">dashboard</span>
                    <span class="text-sm font-medium">Dashboard</span>
                </a>
                <!-- Active State -->
                <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg bg-primary/10 text-primary dark:text-primary"
                    href="#">
                    <span class="material-symbols-outlined text-primary fill-1">calendar_month</span>
                    <span class="text-sm font-bold">Reservations</span>
                </a>
                <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-text-main dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors"
                    href="#">
                    <span class="material-symbols-outlined text-text-secondary dark:text-gray-400">directions_car</span>
                    <span class="text-sm font-medium">Fleet</span>
                </a>
                <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-text-main dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors"
                    href="#">
                    <span class="material-symbols-outlined text-text-secondary dark:text-gray-400">group</span>
                    <span class="text-sm font-medium">Users</span>
                </a>
                <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-text-main dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors"
                    href="#">
                    <span class="material-symbols-outlined text-text-secondary dark:text-gray-400">bar_chart</span>
                    <span class="text-sm font-medium">Reports</span>
                </a>
            </nav>
            <!-- Bottom Settings -->
            <div class="mt-auto flex flex-col gap-2 pt-4 border-t border-border-light dark:border-border-dark">
                <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-text-main dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors"
                    href="#">
                    <span class="material-symbols-outlined text-text-secondary dark:text-gray-400">settings</span>
                    <span class="text-sm font-medium">Settings</span>
                </a>
                <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-red-600 hover:bg-red-50 dark:hover:bg-red-900/20 transition-colors"
                    href="#">
                    <span class="material-symbols-outlined text-red-600">logout</span>
                    <span class="text-sm font-medium">Log Out</span>
                </a>
            </div>
        </div>
    </aside>
    <!-- Main Content Area -->
    <main class="flex-1 lg:ml-72 flex flex-col h-screen overflow-x-hidden relative">
        <!-- Top Bar (Mobile Only) -->
        <div
            class="lg:hidden flex items-center justify-between p-4 bg-surface-light dark:bg-surface-dark border-b border-border-light dark:border-border-dark sticky top-0 z-30">
            <div class="flex items-center gap-2">
                <div class="bg-center bg-no-repeat bg-cover rounded-lg size-8" data-alt="Logo small"
                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDNLnLNYS2Q4i6FemBb5eeAtep3O-7ouK5UJaVRx8o_lg8THi1KX795XfH-PLFt0nM5KapVfxyfNpjrwZBS6JTx3yUwkS4b_7oN7KIrozgAZzIhyaNOfuxquR59cIs_bPcIwPmCuUFUuHkxTR26a7JZWbPj5sWuxtHMruyEYsZeZVotqPo7EniAB_KeExlqeDM395M9R0V6uuDrF6tipLdBmjUa74zP4muWa133EEzWDHj5KnvDKqiQgTiys7bGNiYfo3C-rjZvlP4");'>
                </div>
                <span class="font-bold text-lg dark:text-white">Admin Portal</span>
            </div>
            <button class="text-text-main dark:text-white">
                <span class="material-symbols-outlined">menu</span>
            </button>
        </div>
        <div class="flex flex-col p-4 md:p-8 lg:p-10 max-w-7xl mx-auto w-full gap-8">
            <!-- Header Section -->
            <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
                <div class="flex flex-col gap-1">
                    <h1 class="text-text-main dark:text-white text-3xl md:text-4xl font-black tracking-tight">
                        Reservations Management</h1>
                    <p class="text-text-secondary dark:text-gray-400 text-base">Manage and track all vehicle bookings
                    </p>
                </div>
                <button
                    class="flex items-center justify-center gap-2 bg-primary hover:bg-primary-hover text-white px-5 py-2.5 rounded-lg font-bold text-sm transition-colors shadow-sm whitespace-nowrap">
                    <span class="material-symbols-outlined text-[20px]">add</span>
                    <span>Add Manual Reservation</span>
                </button>
            </div>
            <!-- Stats Overview -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                <div
                    class="bg-surface-light dark:bg-surface-dark border border-border-light dark:border-border-dark rounded-xl p-5 flex flex-col gap-1 shadow-sm">
                    <p class="text-text-secondary dark:text-gray-400 text-sm font-medium">Total Active</p>
                    <div class="flex items-end justify-between">
                        <p class="text-text-main dark:text-white text-2xl font-bold">124</p>
                        <span
                            class="text-green-600 dark:text-green-400 text-xs font-bold bg-green-50 dark:bg-green-900/30 px-2 py-1 rounded-full">+12%</span>
                    </div>
                </div>
                <div
                    class="bg-surface-light dark:bg-surface-dark border border-border-light dark:border-border-dark rounded-xl p-5 flex flex-col gap-1 shadow-sm">
                    <p class="text-text-secondary dark:text-gray-400 text-sm font-medium">Pending Action</p>
                    <div class="flex items-end justify-between">
                        <p class="text-text-main dark:text-white text-2xl font-bold">8</p>
                        <span
                            class="text-orange-600 dark:text-orange-400 text-xs font-bold bg-orange-50 dark:bg-orange-900/30 px-2 py-1 rounded-full">Needs
                            Review</span>
                    </div>
                </div>
                <div
                    class="bg-surface-light dark:bg-surface-dark border border-border-light dark:border-border-dark rounded-xl p-5 flex flex-col gap-1 shadow-sm">
                    <p class="text-text-secondary dark:text-gray-400 text-sm font-medium">Completed Today</p>
                    <div class="flex items-end justify-between">
                        <p class="text-text-main dark:text-white text-2xl font-bold">12</p>
                        <span
                            class="text-green-600 dark:text-green-400 text-xs font-bold bg-green-50 dark:bg-green-900/30 px-2 py-1 rounded-full">+5%</span>
                    </div>
                </div>
                <div
                    class="bg-surface-light dark:bg-surface-dark border border-border-light dark:border-border-dark rounded-xl p-5 flex flex-col gap-1 shadow-sm">
                    <p class="text-text-secondary dark:text-gray-400 text-sm font-medium">Total Revenue (Oct)</p>
                    <div class="flex items-end justify-between">
                        <p class="text-text-main dark:text-white text-2xl font-bold">$42.5k</p>
                        <span
                            class="text-gray-500 dark:text-gray-400 text-xs font-bold bg-gray-100 dark:bg-gray-800 px-2 py-1 rounded-full">0%</span>
                    </div>
                </div>
            </div>
            <!-- Filters & Search -->
            <div
                class="flex flex-col lg:flex-row gap-4 items-end bg-surface-light dark:bg-surface-dark p-5 rounded-xl border border-border-light dark:border-border-dark shadow-sm">
                <label class="flex flex-col w-full lg:flex-1 gap-2">
                    <span class="text-text-main dark:text-white text-sm font-medium">Search</span>
                    <div class="relative">
                        <span
                            class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-gray-400">search</span>
                        <input
                            class="w-full pl-10 pr-4 py-2.5 bg-white dark:bg-gray-800 border border-border-light dark:border-border-dark rounded-lg text-sm focus:ring-2 focus:ring-primary focus:border-transparent outline-none dark:text-white transition-shadow"
                            placeholder="Search by client, vehicle or reservation ID" type="text" />
                    </div>
                </label>
                <label class="flex flex-col w-full sm:w-1/2 lg:w-48 gap-2">
                    <span class="text-text-main dark:text-white text-sm font-medium">Status</span>
                    <div class="relative">
                        <span
                            class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-gray-400">filter_list</span>
                        <select
                            class="w-full pl-10 pr-8 py-2.5 bg-white dark:bg-gray-800 border border-border-light dark:border-border-dark rounded-lg text-sm focus:ring-2 focus:ring-primary focus:border-transparent outline-none dark:text-white appearance-none cursor-pointer">
                            <option>All Statuses</option>
                            <option>Pending</option>
                            <option>Confirmed</option>
                            <option>Active</option>
                            <option>Completed</option>
                            <option>Canceled</option>
                        </select>
                        <span
                            class="material-symbols-outlined absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 pointer-events-none text-base">expand_more</span>
                    </div>
                </label>
                <label class="flex flex-col w-full sm:w-1/2 lg:w-48 gap-2">
                    <span class="text-text-main dark:text-white text-sm font-medium">Date Range</span>
                    <div class="relative">
                        <span
                            class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-gray-400">date_range</span>
                        <input
                            class="w-full pl-10 pr-4 py-2.5 bg-white dark:bg-gray-800 border border-border-light dark:border-border-dark rounded-lg text-sm focus:ring-2 focus:ring-primary focus:border-transparent outline-none dark:text-white"
                            placeholder="Oct 1 - Oct 31" type="text" />
                    </div>
                </label>
                <button
                    class="w-full lg:w-auto px-5 py-2.5 bg-gray-100 dark:bg-gray-800 text-text-main dark:text-white border border-border-light dark:border-border-dark rounded-lg font-medium text-sm hover:bg-gray-200 dark:hover:bg-gray-700 transition-colors">
                    Export
                </button>
            </div>
            <!-- Table Section -->
            <div
                class="flex flex-col bg-surface-light dark:bg-surface-dark rounded-xl border border-border-light dark:border-border-dark shadow-sm overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="w-full min-w-[1000px]">
                        <thead>
                            <tr
                                class="bg-gray-50 dark:bg-gray-800/50 border-b border-border-light dark:border-border-dark text-left">
                                <th
                                    class="px-6 py-4 text-xs font-semibold text-text-secondary dark:text-gray-400 uppercase tracking-wider w-24">
                                    ID</th>
                                <th
                                    class="px-6 py-4 text-xs font-semibold text-text-secondary dark:text-gray-400 uppercase tracking-wider w-64">
                                    Client</th>
                                <th
                                    class="px-6 py-4 text-xs font-semibold text-text-secondary dark:text-gray-400 uppercase tracking-wider">
                                    Vehicle</th>
                                <th
                                    class="px-6 py-4 text-xs font-semibold text-text-secondary dark:text-gray-400 uppercase tracking-wider">
                                    Dates</th>
                                <th
                                    class="px-6 py-4 text-xs font-semibold text-text-secondary dark:text-gray-400 uppercase tracking-wider">
                                    Total</th>
                                <th
                                    class="px-6 py-4 text-xs font-semibold text-text-secondary dark:text-gray-400 uppercase tracking-wider">
                                    Status</th>
                                <th
                                    class="px-6 py-4 text-xs font-semibold text-text-secondary dark:text-gray-400 uppercase tracking-wider text-right">
                                    Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-border-light dark:divide-border-dark">
                            <!-- Row 1: Pending -->
                            <tr class="group hover:bg-gray-50 dark:hover:bg-gray-800/50 transition-colors">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span
                                        class="text-sm font-medium text-primary cursor-pointer hover:underline">#RES-2094</span>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-3">
                                        <div class="size-10 rounded-full bg-cover bg-center shrink-0"
                                            data-alt="Client avatar John Doe"
                                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBEBmp-mnocdl0EVVpxRYlEiNWIXkXutu1Bjv0URyakzCIZzveE5lTK6EWTDF4FwgoUDeAU-5BFUgBThSBWVsgwK_RSUqeU7lJB1kNghtfW_XnaHxin0xtgUvOYu6sDw-T81-sVd3Ld5lHM-cuYYMxYbnJz5-TMEdPJZs1leSWt1HWVVoYTgCPkc9HvDQhlB2utjWGID1-sC6_iw2Iem1hRd40nzjAig6kV-InpcYG_H7rPzMBt0dtrZe-I13p7ynAuIj7ZQrV1zII");'>
                                        </div>
                                        <div class="flex flex-col">
                                            <span class="text-sm font-semibold text-text-main dark:text-white">John
                                                Doe</span>
                                            <span
                                                class="text-xs text-text-secondary dark:text-gray-400">john.doe@example.com</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-3">
                                        <div class="w-12 h-8 rounded bg-cover bg-center shrink-0 border border-gray-100 dark:border-gray-700"
                                            data-alt="Tesla Model 3 car thumbnail"
                                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCps44bpLGae9D0JqYY0Fd9jE6ViGLEDNhPIibPEB597NHX11xzrNik9gluCtmMuot9rX9Px7o-f2cQcDLC3OVcQzhGMqmjvSne9k72x4k-N71Vv2DqOTbNl82zu_Q6JCpSZ08W4XD_pLyIGX2RiS4BD34SBCxkQ5z_vvOJzMNzm_ETkf6d5EzwsA_Jv_fbIBqSUJdJoyXyWmWZ7RPazgNjC8E0vpNwRxiHlk6Fr7CErack7pFdJGcv3v9BxQNgYHOXxIY1_jw32MY");'>
                                        </div>
                                        <div class="flex flex-col">
                                            <span class="text-sm font-medium text-text-main dark:text-white">Tesla Model
                                                3</span>
                                            <span class="text-xs text-text-secondary dark:text-gray-400">ABC-1234</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex flex-col">
                                        <span class="text-sm text-text-main dark:text-white tabular-nums">Oct 12 - Oct
                                            15</span>
                                        <span class="text-xs text-text-secondary dark:text-gray-400">3 days</span>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span
                                        class="text-sm font-bold text-text-main dark:text-white tabular-nums">$450.00</span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span
                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-bold bg-yellow-100 text-yellow-800 dark:bg-yellow-900/30 dark:text-yellow-300 border border-yellow-200 dark:border-yellow-800/30">
                                        Pending
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right">
                                    <div class="flex items-center justify-end gap-2">
                                        <button
                                            class="flex items-center gap-1 px-3 py-1.5 bg-green-50 hover:bg-green-100 text-green-700 dark:bg-green-900/20 dark:hover:bg-green-900/40 dark:text-green-400 text-xs font-bold rounded-md transition-colors border border-green-200 dark:border-green-800/30">
                                            <span class="material-symbols-outlined text-[16px]">check</span>
                                            Approve
                                        </button>
                                        <button
                                            class="flex items-center gap-1 px-3 py-1.5 bg-gray-50 hover:bg-gray-100 text-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 dark:text-gray-300 text-xs font-bold rounded-md transition-colors border border-gray-200 dark:border-gray-700">
                                            <span class="material-symbols-outlined text-[16px]">close</span>
                                            Cancel
                                        </button>
                                        <button class="text-text-secondary hover:text-primary p-1 rounded">
                                            <span class="material-symbols-outlined">more_vert</span>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <!-- Row 2: Confirmed -->
                            <tr class="group hover:bg-gray-50 dark:hover:bg-gray-800/50 transition-colors">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span
                                        class="text-sm font-medium text-primary cursor-pointer hover:underline">#RES-2093</span>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-3">
                                        <div class="size-10 rounded-full bg-cover bg-center shrink-0"
                                            data-alt="Client avatar Sarah Smith"
                                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAx-gV9s-RRIgD5cnbfgYzXPElFIXTsJzPepd8V3yfKexFWUJ9e_ue1zW6oqi3RnrI4XTlNoKwWHaTHPJr2V_hrXnXWqbY-G7wmoq0sUJ498rtQF-Uk3JRQaIPnlu2s-6yUeMViWdV_qGuPmIeSxaD1LKD-jK_Ey9TjU5QAASm9CdYOTtM0LI811Wqih0JiH7FlTmVKccXBDp_3aeUT_xKuc6oNogPMT05aKD4CQaRsCsE1xz4PDiLpQFNN2xCAVVj9uVzCpvejhDk");'>
                                        </div>
                                        <div class="flex flex-col">
                                            <span class="text-sm font-semibold text-text-main dark:text-white">Sarah
                                                Smith</span>
                                            <span
                                                class="text-xs text-text-secondary dark:text-gray-400">sarah.s@example.com</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-3">
                                        <div class="w-12 h-8 rounded bg-cover bg-center shrink-0 border border-gray-100 dark:border-gray-700"
                                            data-alt="BMW X5 car thumbnail"
                                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBnXNIgJeRtfmABGECKN3JtWvE8hc11yPVbX6X1FbodguFzq20v42ScBDCfilAwXyDvpb1tYFphhMd7IVyp_FLFINH9oAub5dk456EOCLYaoS9PPkFtZzqwme9gRIEpYGNRJBgJce8T7V5rB4yS5HKwnHe25m0KdrM668YcjdFE-uyzKXRVJh4KJmTMtqznAqNtRhr7HU6fYbHI-FkYZGD5I6TDFcTwHxBEyX1DZiP9mZ4pCg5fmqq_IZcPD_IYsqMIvuXiDbY8GBk");'>
                                        </div>
                                        <div class="flex flex-col">
                                            <span class="text-sm font-medium text-text-main dark:text-white">BMW
                                                X5</span>
                                            <span class="text-xs text-text-secondary dark:text-gray-400">XYZ-9876</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex flex-col">
                                        <span class="text-sm text-text-main dark:text-white tabular-nums">Oct 10 - Oct
                                            12</span>
                                        <span class="text-xs text-text-secondary dark:text-gray-400">2 days</span>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span
                                        class="text-sm font-bold text-text-main dark:text-white tabular-nums">$320.00</span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span
                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-bold bg-purple-100 text-purple-800 dark:bg-purple-900/30 dark:text-purple-300 border border-purple-200 dark:border-purple-800/30">
                                        Confirmed
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right">
                                    <div class="flex items-center justify-end gap-2">
                                        <button
                                            class="flex items-center gap-1 px-3 py-1.5 bg-gray-50 hover:bg-gray-100 text-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 dark:text-gray-300 text-xs font-bold rounded-md transition-colors border border-gray-200 dark:border-gray-700">
                                            View Details
                                        </button>
                                        <button class="text-text-secondary hover:text-primary p-1 rounded">
                                            <span class="material-symbols-outlined">more_vert</span>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <!-- Row 3: Active -->
                            <tr class="group hover:bg-gray-50 dark:hover:bg-gray-800/50 transition-colors">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span
                                        class="text-sm font-medium text-primary cursor-pointer hover:underline">#RES-2092</span>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-3">
                                        <div class="size-10 rounded-full bg-cover bg-center shrink-0"
                                            data-alt="Client avatar Michael Brown"
                                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuB26hwOpZF9hEyZ7RXAdR70pKIGmEvbj6KiUsppjAJ7txCcnjIBHNfzUNVqIy7oL3GPHAqnEtLMjvprC-LSvFNhbw-tVrw-0SM3Ls_aEqhkTqEFFgTJtmXoOU5AEkQ19PZ5HLjZ0jveJdjqd5yqs8FOVudCY2ge0YLDj9NVunJvWtv97xRLhwvECTj9zbkHDYWbaKAtw0riEgC7ffj_9TIkwc8oLbUfQfBY7GaQcgqrzUPamJbRh-X4HJtza58rMsfIHZSah44itVI");'>
                                        </div>
                                        <div class="flex flex-col">
                                            <span class="text-sm font-semibold text-text-main dark:text-white">Michael
                                                Brown</span>
                                            <span
                                                class="text-xs text-text-secondary dark:text-gray-400">m.brown@web.com</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-3">
                                        <div class="w-12 h-8 rounded bg-cover bg-center shrink-0 border border-gray-100 dark:border-gray-700"
                                            data-alt="Mercedes C Class car thumbnail"
                                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCkIbaOEI8h3P1BQqGByljL0IJg9OZiwgqFH-6fgxilxO_foPzVvHfyRpxnUQMWff29a3C4PoNJ52y0QoAy47zOYTpIt0Dfo7lh-SbfpUARvbMaS_fJWf6mAUipysUvrnVA7-3s8aBd9DPwfnXL8O9OQnTchjH849kAN5dX3o5yIM23rOxpeJo_n02kRDydBDBmnUxxnyGnCCjp8-IHg4uCL0kNYPROaN3u-ENe5P3o1dCVVwCyWE6ct4ew5bZ2oxTnfQ3Rao9t3A0");'>
                                        </div>
                                        <div class="flex flex-col">
                                            <span class="text-sm font-medium text-text-main dark:text-white">Mercedes
                                                C-Class</span>
                                            <span class="text-xs text-text-secondary dark:text-gray-400">DEF-4567</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex flex-col">
                                        <span class="text-sm text-text-main dark:text-white tabular-nums">Oct 08 - Oct
                                            15</span>
                                        <span class="text-xs text-text-secondary dark:text-gray-400">7 days</span>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span
                                        class="text-sm font-bold text-text-main dark:text-white tabular-nums">$850.00</span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span
                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-bold bg-blue-100 text-blue-800 dark:bg-blue-900/30 dark:text-blue-300 border border-blue-200 dark:border-blue-800/30">
                                        Active
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right">
                                    <div class="flex items-center justify-end gap-2">
                                        <button
                                            class="flex items-center gap-1 px-3 py-1.5 bg-gray-50 hover:bg-gray-100 text-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 dark:text-gray-300 text-xs font-bold rounded-md transition-colors border border-gray-200 dark:border-gray-700">
                                            Manage
                                        </button>
                                        <button class="text-text-secondary hover:text-primary p-1 rounded">
                                            <span class="material-symbols-outlined">more_vert</span>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <!-- Row 4: Canceled -->
                            <tr class="group hover:bg-gray-50 dark:hover:bg-gray-800/50 transition-colors">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span
                                        class="text-sm font-medium text-primary cursor-pointer hover:underline">#RES-2090</span>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-3">
                                        <div class="size-10 rounded-full bg-cover bg-center shrink-0"
                                            data-alt="Client avatar David Wilson"
                                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDb-HpiJF7g0wE5kQVUCNLW7wGpx0sOwStd-K7GRcOHwE57hY_zG-TrpH40ZKwVgfNh3Ai0eH3gfZM7fP6C5i0k0DsMXHa5GwRrusty4q2gqBPFpYTwQ_JV1w2SlCuO9RYgGKFKNlxwe6tqcDtCwn_EdQVKYzBCVjYC1ttp7-u9pztMMYRpgBLlpRnEvTWsxgen06s10jjw1Sp6hTBj5Db9XWWgVf49d8qJIHdxYRavwmt-nSntHsW0X2WSSW0GPPRSRpxVe-xtzwY");'>
                                        </div>
                                        <div class="flex flex-col">
                                            <span class="text-sm font-semibold text-text-main dark:text-white">David
                                                Wilson</span>
                                            <span
                                                class="text-xs text-text-secondary dark:text-gray-400">david.w@gmail.com</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-3">
                                        <div class="w-12 h-8 rounded bg-cover bg-center shrink-0 border border-gray-100 dark:border-gray-700"
                                            data-alt="Ford Mustang car thumbnail"
                                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAww4aCPpkWyMNiEYFXRZocakuLcVlNyZF7nSeEiAbTK1WI9o-qb7z3nEGhz8uae2LfNVJOPkXHFLbVnku763xRqX81wCRWA91AjegiPAoiE-Ta-beGe2Ik8YwffInVCHMtpt-mBQaAYae66ke3cTGZUvYmVQkroCUj_z7QSSoc0dymKYRc7OMi6VA4a_k122iSy8D1sh6s7D6B-Z-JpZjJc_5foD8u83wHdegKwCMzUKwI3eiTxyM0XCcsylFsqS8uzgrsRk883Ok");'>
                                        </div>
                                        <div class="flex flex-col">
                                            <span class="text-sm font-medium text-text-main dark:text-white">Ford
                                                Mustang</span>
                                            <span class="text-xs text-text-secondary dark:text-gray-400">MUS-1965</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex flex-col">
                                        <span class="text-sm text-text-main dark:text-white tabular-nums">Oct 01 - Oct
                                            05</span>
                                        <span class="text-xs text-text-secondary dark:text-gray-400">4 days</span>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span
                                        class="text-sm font-bold text-text-main dark:text-white tabular-nums">$600.00</span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span
                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-bold bg-gray-100 text-gray-800 dark:bg-gray-700 dark:text-gray-300 border border-gray-200 dark:border-gray-600">
                                        Canceled
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right">
                                    <div class="flex items-center justify-end gap-2">
                                        <button class="text-text-secondary hover:text-primary p-1 rounded">
                                            <span class="material-symbols-outlined">more_vert</span>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- Pagination Footer -->
                <div
                    class="flex flex-col sm:flex-row items-center justify-between p-4 border-t border-border-light dark:border-border-dark gap-4">
                    <p class="text-sm text-text-secondary dark:text-gray-400">
                        Showing <span class="font-bold text-text-main dark:text-white">1</span> to <span
                            class="font-bold text-text-main dark:text-white">4</span> of <span
                            class="font-bold text-text-main dark:text-white">124</span> results
                    </p>
                    <div class="flex items-center gap-2">
                        <button
                            class="px-3 py-1.5 rounded-lg border border-border-light dark:border-border-dark text-text-secondary dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-gray-800 disabled:opacity-50 text-sm font-medium flex items-center gap-1">
                            <span class="material-symbols-outlined text-[16px]">chevron_left</span>
                            Previous
                        </button>
                        <div class="flex items-center gap-1">
                            <button
                                class="size-8 rounded-lg bg-primary text-white text-sm font-bold flex items-center justify-center">1</button>
                            <button
                                class="size-8 rounded-lg text-text-main dark:text-white hover:bg-gray-50 dark:hover:bg-gray-800 text-sm font-medium flex items-center justify-center">2</button>
                            <button
                                class="size-8 rounded-lg text-text-main dark:text-white hover:bg-gray-50 dark:hover:bg-gray-800 text-sm font-medium flex items-center justify-center">3</button>
                            <span class="text-text-secondary dark:text-gray-400 px-1">...</span>
                            <button
                                class="size-8 rounded-lg text-text-main dark:text-white hover:bg-gray-50 dark:hover:bg-gray-800 text-sm font-medium flex items-center justify-center">12</button>
                        </div>
                        <button
                            class="px-3 py-1.5 rounded-lg border border-border-light dark:border-border-dark text-text-main dark:text-white hover:bg-gray-50 dark:hover:bg-gray-800 text-sm font-medium flex items-center gap-1">
                            Next
                            <span class="material-symbols-outlined text-[16px]">chevron_right</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>