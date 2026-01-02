<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Admin Vehicle Listing</title>
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700;900&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
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
                        "surface-light": "#ffffff",
                        "surface-dark": "#182430",
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
        /* Custom scrollbar for better admin feel */
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
            background: #334155;
        }
    </style>
</head>

<body
    class="bg-background-light dark:bg-background-dark text-slate-800 dark:text-slate-100 font-display transition-colors duration-200">
    <!-- Main Layout -->
    <div class="flex h-screen overflow-hidden">
        <!-- Sidebar Navigation -->
        <aside
            class="hidden md:flex flex-col w-64 bg-surface-light dark:bg-surface-dark border-r border-slate-200 dark:border-slate-800 h-full shrink-0">
            <div class="p-6 flex items-center gap-3">
                <div class="h-10 w-10 bg-primary rounded-lg flex items-center justify-center text-white">
                    <span class="material-symbols-outlined">local_taxi</span>
                </div>
                <h1 class="text-lg font-bold tracking-tight">Rental Admin</h1>
            </div>
            <nav class="flex-1 px-4 flex flex-col gap-2 overflow-y-auto">
                <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors group"
                    href="#">
                    <span
                        class="material-symbols-outlined text-[20px] group-hover:text-primary transition-colors">dashboard</span>
                    <span class="font-medium text-sm">Dashboard</span>
                </a>
                <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors group"
                    href="#">
                    <span
                        class="material-symbols-outlined text-[20px] group-hover:text-primary transition-colors">group</span>
                    <span class="font-medium text-sm">Users</span>
                </a>
                <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors group"
                    href="#">
                    <span
                        class="material-symbols-outlined text-[20px] group-hover:text-primary transition-colors">calendar_month</span>
                    <span class="font-medium text-sm">Bookings</span>
                </a>
                <!-- Active Item -->
                <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg bg-primary/10 text-primary dark:text-primary font-medium"
                    href="#">
                    <span class="material-symbols-outlined text-[20px] fill-1">directions_car</span>
                    <span class="text-sm">Vehicles</span>
                </a>
                <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors group"
                    href="#">
                    <span
                        class="material-symbols-outlined text-[20px] group-hover:text-primary transition-colors">settings</span>
                    <span class="font-medium text-sm">Settings</span>
                </a>
            </nav>
            <div class="p-4 border-t border-slate-200 dark:border-slate-800">
                <button
                    class="flex items-center gap-3 px-3 py-2 w-full rounded-lg text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors">
                    <div class="h-8 w-8 rounded-full bg-slate-200 dark:bg-slate-700 overflow-hidden bg-cover bg-center"
                        data-alt="User profile avatar"
                        style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBo9YAmDSCQKZj1YQrMI2vJxXVSBE6qkIu350EMimrqUs5sj4ziJ1qrHg2i-_DkgV8M01sbDNwIBWdWgoVTgd7LlP9031NokIWcP7YUc2gfj7YuB53-aue_fooRXnF4bfdINzTsti_eIlsOIIanNZ08N7Xq7Vz9gxDrjDCO0Hx8ky_zmQfliID9Kwxxla_hpQdWB_BkcuixAYA6ITT2DSoRfwzB9BFfE2IQtV7upSFGu0BXTGKHLOEhqEQEu-KkBHVqL38b2mUD4CY');">
                    </div>
                    <div class="flex flex-col items-start">
                        <span class="text-xs font-semibold text-slate-900 dark:text-white">Admin User</span>
                        <span class="text-[10px] text-slate-500">View Profile</span>
                    </div>
                </button>
            </div>
        </aside>
        <!-- Main Content -->
        <main class="flex-1 flex flex-col h-full min-w-0 overflow-hidden relative">
            <!-- Sticky Header Section -->
            <header class="bg-background-light dark:bg-background-dark z-10 flex-shrink-0">
                <!-- Breadcrumbs & Top Nav -->
                <div class="px-6 pt-6 pb-2">
                    <div class="flex flex-wrap gap-2 text-sm text-slate-500 dark:text-slate-400 items-center">
                        <a class="hover:text-primary transition-colors" href="#">Dashboard</a>
                        <span class="material-symbols-outlined text-[16px]">chevron_right</span>
                        <span class="font-medium text-slate-900 dark:text-white">Fleet Inventory</span>
                    </div>
                </div>
                <!-- Page Heading & Primary Action -->
                <div class="px-6 py-4 flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                    <div>
                        <h2 class="text-3xl font-black tracking-tight text-slate-900 dark:text-white">Fleet Inventory
                        </h2>
                        <p class="text-slate-500 dark:text-slate-400 mt-1">Manage, track, and update your vehicle
                            assets.</p>
                    </div>
                    <button
                        class="bg-primary hover:bg-blue-600 text-white px-5 py-2.5 rounded-lg font-semibold shadow-sm hover:shadow-md transition-all flex items-center gap-2">
                        <span class="material-symbols-outlined text-[20px]">add</span>
                        Add New Vehicle
                    </button>
                </div>
                <!-- Filter Toolbar -->
                <div class="px-6 pb-6 space-y-4">
                    <!-- Search & Secondary Actions -->
                    <div class="flex flex-col md:flex-row gap-4">
                        <div class="relative flex-1 group">
                            <span
                                class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 group-focus-within:text-primary transition-colors">search</span>
                            <input
                                class="w-full pl-10 pr-4 py-3 bg-white dark:bg-surface-dark border border-slate-200 dark:border-slate-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary/50 focus:border-primary transition-all text-sm shadow-sm placeholder-slate-400 text-slate-900 dark:text-white"
                                placeholder="Search by VIN, Make, Model or License Plate..." type="text" />
                        </div>
                        <div class="flex gap-2">
                            <button
                                class="px-4 py-2.5 bg-white dark:bg-surface-dark border border-slate-200 dark:border-slate-700 rounded-lg text-slate-700 dark:text-slate-300 font-medium text-sm flex items-center gap-2 hover:bg-slate-50 dark:hover:bg-slate-700/50 transition-colors shadow-sm">
                                <span class="material-symbols-outlined text-[20px]">sort</span>
                                Sort
                            </button>
                            <button
                                class="px-4 py-2.5 bg-white dark:bg-surface-dark border border-slate-200 dark:border-slate-700 rounded-lg text-slate-700 dark:text-slate-300 font-medium text-sm flex items-center gap-2 hover:bg-slate-50 dark:hover:bg-slate-700/50 transition-colors shadow-sm md:hidden">
                                <span class="material-symbols-outlined text-[20px]">filter_list</span>
                                Filter
                            </button>
                        </div>
                    </div>
                    <!-- Category Chips -->
                    <div class="flex gap-2 overflow-x-auto pb-1 no-scrollbar mask-fade">
                        <button
                            class="flex items-center gap-2 px-4 py-1.5 rounded-full bg-slate-900 dark:bg-white text-white dark:text-slate-900 text-sm font-medium whitespace-nowrap shadow-md transition-transform active:scale-95">
                            <span class="material-symbols-outlined text-[18px]">apps</span>
                            All
                        </button>
                        <button
                            class="flex items-center gap-2 px-4 py-1.5 rounded-full bg-white dark:bg-surface-dark border border-slate-200 dark:border-slate-700 text-slate-600 dark:text-slate-300 text-sm font-medium whitespace-nowrap hover:bg-slate-50 dark:hover:bg-slate-700 transition-colors active:scale-95">
                            <span class="material-symbols-outlined text-[18px]">savings</span>
                            Economy
                        </button>
                        <button
                            class="flex items-center gap-2 px-4 py-1.5 rounded-full bg-white dark:bg-surface-dark border border-slate-200 dark:border-slate-700 text-slate-600 dark:text-slate-300 text-sm font-medium whitespace-nowrap hover:bg-slate-50 dark:hover:bg-slate-700 transition-colors active:scale-95">
                            <span class="material-symbols-outlined text-[18px]">diamond</span>
                            Luxury
                        </button>
                        <button
                            class="flex items-center gap-2 px-4 py-1.5 rounded-full bg-white dark:bg-surface-dark border border-slate-200 dark:border-slate-700 text-slate-600 dark:text-slate-300 text-sm font-medium whitespace-nowrap hover:bg-slate-50 dark:hover:bg-slate-700 transition-colors active:scale-95">
                            <span class="material-symbols-outlined text-[18px]">airport_shuttle</span>
                            SUVs
                        </button>
                        <button
                            class="flex items-center gap-2 px-4 py-1.5 rounded-full bg-white dark:bg-surface-dark border border-slate-200 dark:border-slate-700 text-slate-600 dark:text-slate-300 text-sm font-medium whitespace-nowrap hover:bg-slate-50 dark:hover:bg-slate-700 transition-colors active:scale-95">
                            <span class="material-symbols-outlined text-[18px]">electric_bolt</span>
                            Electric
                        </button>
                    </div>
                </div>
            </header>
            <!-- Scrollable Content Area -->
            <div class="flex-1 overflow-y-auto p-6 pt-0">
                <!-- Vehicle Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 pb-20">
                    <!-- Card 1: Available -->
                    <div
                        class="group bg-surface-light dark:bg-surface-dark rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm hover:shadow-lg hover:border-primary/50 transition-all duration-300 flex flex-col overflow-hidden relative">
                        <!-- Status Badge -->
                        <div class="absolute top-3 right-3 z-10">
                            <span
                                class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-bold bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-400 backdrop-blur-md shadow-sm">
                                <span class="w-1.5 h-1.5 rounded-full bg-green-500 animate-pulse"></span>
                                Available
                            </span>
                        </div>
                        <!-- Image -->
                        <div class="aspect-[4/3] w-full bg-slate-100 dark:bg-slate-800 relative overflow-hidden">
                            <div class="absolute inset-0 bg-cover bg-center group-hover:scale-105 transition-transform duration-500"
                                data-alt="White Tesla Model 3 parked on asphalt"
                                style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBMICwG_-Cq-_KWBlCB3yvZ41fYP2uTUVBT7NoSZcwti02hbYcz6KhGzltRlo0sHcqzMkgywBJ28vFw4LvwtObdiSMnOwjt4RceVT55VhfSCsoUy3-n-ymjVoWCBzTYB4VxYcUTe9lnfmqR-LflVX_BW7dMo460Ls7gY_YRYPAeSJ3OBAWpN73baZXJ12TPKoABqWA6frLtjfeBT5NPkXK-t3-EB1FwhrqKE4EHLawiPVIeYf1-BicBIC4sEwLvUSvo_gTZH06BfQE');">
                            </div>
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            </div>
                        </div>
                        <!-- Content -->
                        <div class="p-4 flex flex-col flex-1">
                            <div class="mb-3">
                                <h3 class="text-lg font-bold text-slate-900 dark:text-white leading-tight">Tesla Model 3
                                </h3>
                                <p class="text-sm text-slate-500 dark:text-slate-400 mt-0.5">2023 • Electric</p>
                            </div>
                            <!-- Specs Grid -->
                            <div
                                class="grid grid-cols-2 gap-y-2 gap-x-1 mb-4 text-xs text-slate-600 dark:text-slate-400">
                                <div class="flex items-center gap-1.5">
                                    <span class="material-symbols-outlined text-[16px]">speed</span>
                                    <span>0-60 3.1s</span>
                                </div>
                                <div class="flex items-center gap-1.5">
                                    <span
                                        class="material-symbols-outlined text-[16px]">airline_seat_recline_normal</span>
                                    <span>5 Seats</span>
                                </div>
                                <div class="flex items-center gap-1.5">
                                    <span class="material-symbols-outlined text-[16px]">settings</span>
                                    <span>Auto</span>
                                </div>
                                <div class="flex items-center gap-1.5">
                                    <span class="material-symbols-outlined text-[16px]">pin</span>
                                    <span>XYZ-982</span>
                                </div>
                            </div>
                            <div
                                class="mt-auto pt-4 border-t border-slate-100 dark:border-slate-800 flex items-center justify-between">
                                <div class="flex flex-col">
                                    <span class="text-xs text-slate-500">Daily Rate</span>
                                    <span class="text-lg font-bold text-primary">$129</span>
                                </div>
                                <div class="flex gap-1">
                                    <button
                                        class="p-2 text-slate-400 hover:text-primary hover:bg-primary/5 rounded-lg transition-colors"
                                        title="Edit">
                                        <span class="material-symbols-outlined text-[20px]">edit</span>
                                    </button>
                                    <button
                                        class="p-2 text-slate-400 hover:text-red-500 hover:bg-red-50 dark:hover:bg-red-900/20 rounded-lg transition-colors"
                                        title="Delete">
                                        <span class="material-symbols-outlined text-[20px]">delete</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card 2: Rented -->
                    <div
                        class="group bg-surface-light dark:bg-surface-dark rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm hover:shadow-lg hover:border-primary/50 transition-all duration-300 flex flex-col overflow-hidden relative">
                        <div class="absolute top-3 right-3 z-10">
                            <span
                                class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-bold bg-blue-100 text-blue-700 dark:bg-blue-900/30 dark:text-blue-300 backdrop-blur-md shadow-sm">
                                <span class="material-symbols-outlined text-[14px]">key</span>
                                Rented
                            </span>
                        </div>
                        <div class="aspect-[4/3] w-full bg-slate-100 dark:bg-slate-800 relative overflow-hidden">
                            <div class="absolute inset-0 bg-cover bg-center group-hover:scale-105 transition-transform duration-500"
                                data-alt="Silver BMW SUV front angle"
                                style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuD6L1uSq0EqbHn5j0PZTT7yBIswOlDc6ZfwBHuenpcECE_kOHoJ82wBOYw20c46ACJ7IZAVpxRM3jk6oRukbuRyFU17tPKRqYb40q_sVuDld2_i90htj_In9QD3aqnFyN0PgIwOqQmkyd0n2hRniOK7xNYB7hqXzD7ckoEGms0GWHhGbNOy43hUGhAVuK12YNIyfQD_7NreL4ZJ7Vra2CeMncQTtuBurGaX6NtartECNM8GgZVKRYNql2395X1W8Kkixc6CMjIzx0w');">
                            </div>
                            <div
                                class="absolute inset-0 bg-white/10 dark:bg-black/20 group-hover:bg-transparent transition-colors">
                            </div>
                        </div>
                        <div class="p-4 flex flex-col flex-1">
                            <div class="mb-3">
                                <h3 class="text-lg font-bold text-slate-900 dark:text-white leading-tight">BMW X5</h3>
                                <p class="text-sm text-slate-500 dark:text-slate-400 mt-0.5">2022 • SUV</p>
                            </div>
                            <div
                                class="grid grid-cols-2 gap-y-2 gap-x-1 mb-4 text-xs text-slate-600 dark:text-slate-400">
                                <div class="flex items-center gap-1.5">
                                    <span class="material-symbols-outlined text-[16px]">local_gas_station</span>
                                    <span>Gasoline</span>
                                </div>
                                <div class="flex items-center gap-1.5">
                                    <span
                                        class="material-symbols-outlined text-[16px]">airline_seat_recline_normal</span>
                                    <span>7 Seats</span>
                                </div>
                                <div class="flex items-center gap-1.5">
                                    <span class="material-symbols-outlined text-[16px]">settings</span>
                                    <span>Auto</span>
                                </div>
                                <div class="flex items-center gap-1.5">
                                    <span class="material-symbols-outlined text-[16px]">pin</span>
                                    <span>BMW-881</span>
                                </div>
                            </div>
                            <div
                                class="mt-auto pt-4 border-t border-slate-100 dark:border-slate-800 flex items-center justify-between">
                                <div class="flex flex-col">
                                    <span class="text-xs text-slate-500">Daily Rate</span>
                                    <span class="text-lg font-bold text-primary">$180</span>
                                </div>
                                <div class="flex gap-1">
                                    <button
                                        class="p-2 text-slate-400 hover:text-primary hover:bg-primary/5 rounded-lg transition-colors">
                                        <span class="material-symbols-outlined text-[20px]">edit</span>
                                    </button>
                                    <button
                                        class="p-2 text-slate-400 hover:text-red-500 hover:bg-red-50 dark:hover:bg-red-900/20 rounded-lg transition-colors">
                                        <span class="material-symbols-outlined text-[20px]">delete</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card 3: Maintenance -->
                    <div
                        class="group bg-surface-light dark:bg-surface-dark rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm hover:shadow-lg hover:border-primary/50 transition-all duration-300 flex flex-col overflow-hidden relative opacity-75 hover:opacity-100">
                        <div class="absolute top-3 right-3 z-10">
                            <span
                                class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-bold bg-amber-100 text-amber-700 dark:bg-amber-900/30 dark:text-amber-400 backdrop-blur-md shadow-sm">
                                <span class="material-symbols-outlined text-[14px]">build</span>
                                Maintenance
                            </span>
                        </div>
                        <div class="aspect-[4/3] w-full bg-slate-100 dark:bg-slate-800 relative overflow-hidden">
                            <div class="absolute inset-0 bg-cover bg-center grayscale group-hover:grayscale-0 transition-all duration-500"
                                data-alt="Black Ford Mustang sports car"
                                style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBwHQSqFaPPMa7m3Wejhx_asGS2RUGQ3LEDrRM_5TrjEqVQ4a9gi1BGy1fAEbRaK-xj_ct49up2wUFUAegAya9zm0JGfNmhyGZ9AICNbVjhcRYplXUHNolENY4ICDYDYkewo4xhv6lOps9YaBIEEo-TM30TzeKOxkYMqyGsU3T22tmMwhB1eFXLyc9ORCUrVq2GjoEtdlukqmQ2H5xa7mygbOOYXbYY9R8fqWBhys6imDxvfnpJLX-A06N_RY0L50tX2DU5Fq0WarA');">
                            </div>
                        </div>
                        <div class="p-4 flex flex-col flex-1">
                            <div class="mb-3">
                                <h3 class="text-lg font-bold text-slate-900 dark:text-white leading-tight">Ford Mustang
                                </h3>
                                <p class="text-sm text-slate-500 dark:text-slate-400 mt-0.5">2021 • Sports</p>
                            </div>
                            <div
                                class="grid grid-cols-2 gap-y-2 gap-x-1 mb-4 text-xs text-slate-600 dark:text-slate-400">
                                <div class="flex items-center gap-1.5">
                                    <span class="material-symbols-outlined text-[16px]">local_gas_station</span>
                                    <span>Gasoline</span>
                                </div>
                                <div class="flex items-center gap-1.5">
                                    <span
                                        class="material-symbols-outlined text-[16px]">airline_seat_recline_normal</span>
                                    <span>4 Seats</span>
                                </div>
                                <div class="flex items-center gap-1.5">
                                    <span class="material-symbols-outlined text-[16px]">settings_b_roll</span>
                                    <span>Manual</span>
                                </div>
                                <div class="flex items-center gap-1.5">
                                    <span class="material-symbols-outlined text-[16px]">pin</span>
                                    <span>MST-442</span>
                                </div>
                            </div>
                            <div
                                class="mt-auto pt-4 border-t border-slate-100 dark:border-slate-800 flex items-center justify-between">
                                <div class="flex flex-col">
                                    <span class="text-xs text-slate-500">Daily Rate</span>
                                    <span class="text-lg font-bold text-primary">$150</span>
                                </div>
                                <div class="flex gap-1">
                                    <button
                                        class="p-2 text-slate-400 hover:text-primary hover:bg-primary/5 rounded-lg transition-colors">
                                        <span class="material-symbols-outlined text-[20px]">edit</span>
                                    </button>
                                    <button
                                        class="p-2 text-slate-400 hover:text-red-500 hover:bg-red-50 dark:hover:bg-red-900/20 rounded-lg transition-colors">
                                        <span class="material-symbols-outlined text-[20px]">delete</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card 4: Available -->
                    <div
                        class="group bg-surface-light dark:bg-surface-dark rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm hover:shadow-lg hover:border-primary/50 transition-all duration-300 flex flex-col overflow-hidden relative">
                        <div class="absolute top-3 right-3 z-10">
                            <span
                                class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-bold bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-400 backdrop-blur-md shadow-sm">
                                <span class="w-1.5 h-1.5 rounded-full bg-green-500 animate-pulse"></span>
                                Available
                            </span>
                        </div>
                        <div class="aspect-[4/3] w-full bg-slate-100 dark:bg-slate-800 relative overflow-hidden">
                            <div class="absolute inset-0 bg-cover bg-center group-hover:scale-105 transition-transform duration-500"
                                data-alt="Toyota Camry sedan silver"
                                style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuD0Bnj_TfHJpS9RGaJipMwzAHT7UuTNKLcvCbcje9v80a4P_AwqY-UsdVTSJV-dKCS1Ot3PcDbZO5ztRwqIEilhOuKpjBmoPeK6aApbtM6-u3f2gSzNZ1uo8kTTNuG3oJILcOuDPdoEiSTPH3I7O0Y7x-2z1flwAedVExCyjo8qjblNtoMruae7Fx3pPe5PQyGipKaaWbd8S-j45Z5FpInbnAA4PkDFtLV8FuEeBDBMBFlx8Mk42TLyt-gNj7pDE-0eoRwL0fIZHso');">
                            </div>
                        </div>
                        <div class="p-4 flex flex-col flex-1">
                            <div class="mb-3">
                                <h3 class="text-lg font-bold text-slate-900 dark:text-white leading-tight">Toyota Camry
                                </h3>
                                <p class="text-sm text-slate-500 dark:text-slate-400 mt-0.5">2023 • Economy</p>
                            </div>
                            <div
                                class="grid grid-cols-2 gap-y-2 gap-x-1 mb-4 text-xs text-slate-600 dark:text-slate-400">
                                <div class="flex items-center gap-1.5">
                                    <span class="material-symbols-outlined text-[16px]">eco</span>
                                    <span>Hybrid</span>
                                </div>
                                <div class="flex items-center gap-1.5">
                                    <span
                                        class="material-symbols-outlined text-[16px]">airline_seat_recline_normal</span>
                                    <span>5 Seats</span>
                                </div>
                                <div class="flex items-center gap-1.5">
                                    <span class="material-symbols-outlined text-[16px]">settings</span>
                                    <span>Auto</span>
                                </div>
                                <div class="flex items-center gap-1.5">
                                    <span class="material-symbols-outlined text-[16px]">pin</span>
                                    <span>CAM-101</span>
                                </div>
                            </div>
                            <div
                                class="mt-auto pt-4 border-t border-slate-100 dark:border-slate-800 flex items-center justify-between">
                                <div class="flex flex-col">
                                    <span class="text-xs text-slate-500">Daily Rate</span>
                                    <span class="text-lg font-bold text-primary">$65</span>
                                </div>
                                <div class="flex gap-1">
                                    <button
                                        class="p-2 text-slate-400 hover:text-primary hover:bg-primary/5 rounded-lg transition-colors">
                                        <span class="material-symbols-outlined text-[20px]">edit</span>
                                    </button>
                                    <button
                                        class="p-2 text-slate-400 hover:text-red-500 hover:bg-red-50 dark:hover:bg-red-900/20 rounded-lg transition-colors">
                                        <span class="material-symbols-outlined text-[20px]">delete</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card 5: Available -->
                    <div
                        class="group bg-surface-light dark:bg-surface-dark rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm hover:shadow-lg hover:border-primary/50 transition-all duration-300 flex flex-col overflow-hidden relative">
                        <div class="absolute top-3 right-3 z-10">
                            <span
                                class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-bold bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-400 backdrop-blur-md shadow-sm">
                                <span class="w-1.5 h-1.5 rounded-full bg-green-500 animate-pulse"></span>
                                Available
                            </span>
                        </div>
                        <div class="aspect-[4/3] w-full bg-slate-100 dark:bg-slate-800 relative overflow-hidden">
                            <div class="absolute inset-0 bg-cover bg-center group-hover:scale-105 transition-transform duration-500"
                                data-alt="Jeep Wrangler outdoors"
                                style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCr8-mjnuq76g68U7Zzyse1UmfBGgYlsBXvQI6El1VkCYrZcWAQt2I7LXM31_FsqF4voJinDY-FZDwwEkopk48ef1cUix7SpWGhn1CWCI0LsaDdlBZQ2S74H0KZYcEqs0et-8mmxU86yIT2Yj49GxQmudNyD4k9V_d5jXJeMXGjVi3EwdCdFJzcRE8F5UxGV-AVsNulOwcN9ecXo0Ed44nhNxA3vFEq7F19m-iR0wJjk68PuQvOITMpiN8FaIddq4fWtL9Ob5bJf2A');">
                            </div>
                        </div>
                        <div class="p-4 flex flex-col flex-1">
                            <div class="mb-3">
                                <h3 class="text-lg font-bold text-slate-900 dark:text-white leading-tight">Jeep Wrangler
                                </h3>
                                <p class="text-sm text-slate-500 dark:text-slate-400 mt-0.5">2022 • SUV</p>
                            </div>
                            <div
                                class="grid grid-cols-2 gap-y-2 gap-x-1 mb-4 text-xs text-slate-600 dark:text-slate-400">
                                <div class="flex items-center gap-1.5">
                                    <span class="material-symbols-outlined text-[16px]">terrain</span>
                                    <span>4x4</span>
                                </div>
                                <div class="flex items-center gap-1.5">
                                    <span
                                        class="material-symbols-outlined text-[16px]">airline_seat_recline_normal</span>
                                    <span>4 Seats</span>
                                </div>
                                <div class="flex items-center gap-1.5">
                                    <span class="material-symbols-outlined text-[16px]">settings</span>
                                    <span>Auto</span>
                                </div>
                                <div class="flex items-center gap-1.5">
                                    <span class="material-symbols-outlined text-[16px]">pin</span>
                                    <span>JEP-555</span>
                                </div>
                            </div>
                            <div
                                class="mt-auto pt-4 border-t border-slate-100 dark:border-slate-800 flex items-center justify-between">
                                <div class="flex flex-col">
                                    <span class="text-xs text-slate-500">Daily Rate</span>
                                    <span class="text-lg font-bold text-primary">$110</span>
                                </div>
                                <div class="flex gap-1">
                                    <button
                                        class="p-2 text-slate-400 hover:text-primary hover:bg-primary/5 rounded-lg transition-colors">
                                        <span class="material-symbols-outlined text-[20px]">edit</span>
                                    </button>
                                    <button
                                        class="p-2 text-slate-400 hover:text-red-500 hover:bg-red-50 dark:hover:bg-red-900/20 rounded-lg transition-colors">
                                        <span class="material-symbols-outlined text-[20px]">delete</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Empty State UI (Hidden by default, can be toggled via logic) -->
                <!-- Remove 'hidden' class to see empty state -->
                <div class="hidden flex flex-col items-center justify-center py-20 text-center">
                    <div
                        class="w-24 h-24 bg-slate-100 dark:bg-slate-800 rounded-full flex items-center justify-center mb-6">
                        <span class="material-symbols-outlined text-[48px] text-slate-400">no_crash</span>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-2">No vehicles found</h3>
                    <p class="text-slate-500 dark:text-slate-400 max-w-sm mb-8">We couldn't find any vehicles matching
                        your search criteria. Try adjusting your filters or search terms.</p>
                    <button
                        class="px-6 py-2.5 bg-white dark:bg-surface-dark border border-slate-300 dark:border-slate-700 rounded-lg font-medium text-slate-700 dark:text-white hover:bg-slate-50 dark:hover:bg-slate-700 transition-colors shadow-sm">
                        Clear all filters
                    </button>
                </div>
            </div>
            <!-- Footer Pagination (Sticky at bottom) -->
            <div
                class="bg-surface-light dark:bg-surface-dark border-t border-slate-200 dark:border-slate-800 px-6 py-4 flex items-center justify-between flex-shrink-0">
                <p class="text-sm text-slate-500 dark:text-slate-400">Showing <span
                        class="font-medium text-slate-900 dark:text-white">1-5</span> of <span
                        class="font-medium text-slate-900 dark:text-white">48</span> vehicles</p>
                <div class="flex items-center gap-1">
                    <button
                        class="w-9 h-9 flex items-center justify-center rounded-lg border border-slate-200 dark:border-slate-700 text-slate-500 hover:bg-slate-50 dark:hover:bg-slate-800 disabled:opacity-50 disabled:cursor-not-allowed transition-colors"
                        disabled="">
                        <span class="material-symbols-outlined text-[20px]">chevron_left</span>
                    </button>
                    <button
                        class="w-9 h-9 flex items-center justify-center rounded-lg bg-primary text-white font-medium shadow-sm transition-colors">1</button>
                    <button
                        class="w-9 h-9 flex items-center justify-center rounded-lg border border-transparent text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 font-medium transition-colors">2</button>
                    <button
                        class="w-9 h-9 flex items-center justify-center rounded-lg border border-transparent text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 font-medium transition-colors">3</button>
                    <span class="w-9 h-9 flex items-center justify-center text-slate-400">...</span>
                    <button
                        class="w-9 h-9 flex items-center justify-center rounded-lg border border-transparent text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 font-medium transition-colors">10</button>
                    <button
                        class="w-9 h-9 flex items-center justify-center rounded-lg border border-slate-200 dark:border-slate-700 text-slate-500 hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors">
                        <span class="material-symbols-outlined text-[20px]">chevron_right</span>
                    </button>
                </div>
            </div>
        </main>
    </div>
</body>

</html>