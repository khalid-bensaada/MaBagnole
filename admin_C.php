<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Admin Management Page</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap"
        rel="stylesheet" />
    <!-- Material Symbols -->
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
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
        body {
            font-family: 'Inter', sans-serif;
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
</head>

<body class="bg-background-light dark:bg-background-dark text-[#111418] dark:text-white font-display">
    <div class="relative flex h-screen w-full bg-background-light dark:bg-background-dark overflow-hidden">
        <!-- SideNavBar -->
        <div
            class="w-64 flex-shrink-0 h-full bg-white dark:bg-[#1a2632] border-r border-[#f0f2f4] dark:border-[#2a3642] flex flex-col justify-between p-4 hidden lg:flex">
            <div class="flex flex-col gap-4">
                <div class="flex gap-3 items-center mb-4">
                    <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10"
                        data-alt="Abstract blue logo for car rental admin"
                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAddEOvKsxoHnIkUzq9yemnwyNfZqEbEszrQvRbl4PSQCoW5ZQd_lUBZQyzJEojtMQjJGJB2gntIBtpxTldzL5vUIgA7b0uht-HBjEsCnPOac9qJ7JADs---y-epfuN15hmj7vJh0rkJaXC1jIVY_yPu5X9-UgRg-ZxVPN9RehEzgI0PcBdoshWyNtSR1uTyEOBHFbJQzm0au2p3aT7O1MJTGinSCUOA5jz1kmm8K5UusotA_V78tdkWW4zf3ozjpAdIvh1nkw0xys");'>
                    </div>
                    <div class="flex flex-col">
                        <h1 class="text-[#111418] dark:text-white text-base font-bold leading-normal">Admin Portal</h1>
                        <p class="text-[#617589] dark:text-[#9ca3af] text-sm font-normal leading-normal">Car Rental Mgmt
                        </p>
                    </div>
                </div>
                <div class="flex flex-col gap-1">
                    <div
                        class="flex items-center gap-3 px-3 py-2 text-[#617589] dark:text-[#9ca3af] hover:bg-[#f0f2f4] dark:hover:bg-[#2a3642] rounded-lg cursor-pointer transition-colors">
                        <span class="material-symbols-outlined text-[24px]">pie_chart</span>
                        <p class="text-sm font-medium leading-normal">Dashboard</p>
                    </div>
                    <div class="flex items-center gap-3 px-3 py-2 rounded-lg bg-primary/10 text-primary cursor-pointer">
                        <span class="material-symbols-outlined text-[24px] fill-1">directions_car</span>
                        <p class="text-sm font-medium leading-normal">Vehicles</p>
                    </div>
                    <div
                        class="flex items-center gap-3 px-3 py-2 text-[#617589] dark:text-[#9ca3af] hover:bg-[#f0f2f4] dark:hover:bg-[#2a3642] rounded-lg cursor-pointer transition-colors">
                        <span class="material-symbols-outlined text-[24px]">category</span>
                        <p class="text-sm font-medium leading-normal">Categories</p>
                    </div>
                    <div
                        class="flex items-center gap-3 px-3 py-2 text-[#617589] dark:text-[#9ca3af] hover:bg-[#f0f2f4] dark:hover:bg-[#2a3642] rounded-lg cursor-pointer transition-colors">
                        <span class="material-symbols-outlined text-[24px]">calendar_month</span>
                        <p class="text-sm font-medium leading-normal">Bookings</p>
                    </div>
                    <div
                        class="flex items-center gap-3 px-3 py-2 text-[#617589] dark:text-[#9ca3af] hover:bg-[#f0f2f4] dark:hover:bg-[#2a3642] rounded-lg cursor-pointer transition-colors">
                        <span class="material-symbols-outlined text-[24px]">settings</span>
                        <p class="text-sm font-medium leading-normal">Settings</p>
                    </div>
                </div>
            </div>
            <div
                class="flex items-center gap-3 px-3 py-2 text-[#617589] dark:text-[#9ca3af] hover:bg-[#f0f2f4] dark:hover:bg-[#2a3642] rounded-lg cursor-pointer transition-colors mt-auto">
                <span class="material-symbols-outlined text-[24px]">logout</span>
                <p class="text-sm font-medium leading-normal">Logout</p>
            </div>
        </div>
        <!-- Main Content Area -->
        <div class="flex-1 flex flex-col h-full overflow-hidden relative">
            <!-- TopNavBar -->
            <header
                class="flex items-center justify-between whitespace-nowrap border-b border-solid border-[#f0f2f4] dark:border-[#2a3642] bg-white dark:bg-[#1a2632] px-6 py-3 shrink-0 z-10">
                <div class="flex items-center gap-4 lg:hidden">
                    <button class="text-[#617589] dark:text-[#9ca3af]">
                        <span class="material-symbols-outlined">menu</span>
                    </button>
                </div>
                <!-- Breadcrumbs -->
                <div class="hidden md:flex flex-wrap gap-2 items-center">
                    <a class="text-[#617589] dark:text-[#9ca3af] text-sm font-medium hover:text-primary transition-colors"
                        href="#">Dashboard</a>
                    <span
                        class="material-symbols-outlined text-[#617589] dark:text-[#9ca3af] text-sm">chevron_right</span>
                    <span class="text-[#111418] dark:text-white text-sm font-medium">Vehicle Management</span>
                </div>
                <div class="flex flex-1 justify-end gap-4 items-center">
                    <div class="flex gap-2">
                        <button
                            class="flex items-center justify-center rounded-full size-10 hover:bg-[#f0f2f4] dark:hover:bg-[#2a3642] text-[#617589] dark:text-[#9ca3af] transition-colors relative">
                            <span class="material-symbols-outlined">notifications</span>
                            <span
                                class="absolute top-2 right-2 size-2 bg-red-500 rounded-full border-2 border-white dark:border-[#1a2632]"></span>
                        </button>
                        <button
                            class="flex items-center justify-center rounded-full size-10 hover:bg-[#f0f2f4] dark:hover:bg-[#2a3642] text-[#617589] dark:text-[#9ca3af] transition-colors">
                            <span class="material-symbols-outlined">help</span>
                        </button>
                    </div>
                    <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-9 ring-2 ring-gray-100 dark:ring-gray-700 cursor-pointer"
                        data-alt="User avatar profile picture"
                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCK9yXxQv5_YA4GQ9bGq7FuTLgkzeGWAUd9HP0t0ZZVUGG-mWwXh4e0l19U2W2NDZs1zTWrj32sLg8Jit_nxei2735Gcf7P5FKJ8fD3z4NLOiRxOKPlK_fNvE-loHoCdNrERB92MOETfNzdrQg4so86fzDrxgPqimgXgfguBF6pfUB0p6JCGWMETG999JJHEEBGRXhPgMabWoh04rnHyvN8guc6YBbWnntSrKM9Sgy_rb2SmQEDOmD_LUAVFhUUlV5ebvSZ6CJpjoc");'>
                    </div>
                </div>
            </header>
            <!-- Scrollable Content -->
            <main class="flex-1 overflow-y-auto p-4 md:p-8 scroll-smooth">
                <div class="mx-auto max-w-6xl flex flex-col gap-6 pb-20">
                    <!-- Page Heading & Actions -->
                    <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4">
                        <div class="flex flex-col gap-1">
                            <h1 class="text-[#111418] dark:text-white text-2xl md:text-[32px] font-bold leading-tight">
                                Vehicle Inventory</h1>
                            <p class="text-[#617589] dark:text-[#9ca3af] text-sm font-normal">Manage your fleet, update
                                statuses, and add new vehicles.</p>
                        </div>
                        <div class="flex gap-3 w-full md:w-auto">
                            <button
                                class="flex-1 md:flex-none flex items-center justify-center gap-2 px-4 py-2 bg-white dark:bg-[#2a3642] border border-[#d1d5db] dark:border-[#4b5563] text-[#111418] dark:text-white rounded-lg text-sm font-medium hover:bg-gray-50 dark:hover:bg-[#374151] transition-colors shadow-sm">
                                <span class="material-symbols-outlined text-[20px]">file_upload</span>
                                <span>Export</span>
                            </button>
                            <button
                                class="flex-1 md:flex-none flex items-center justify-center gap-2 px-4 py-2 bg-primary text-white rounded-lg text-sm font-medium hover:bg-blue-600 transition-colors shadow-sm shadow-blue-200 dark:shadow-none">
                                <span class="material-symbols-outlined text-[20px]">add</span>
                                <span>Add New</span>
                            </button>
                        </div>
                    </div>
                    <!-- Search and Filters -->
                    <div
                        class="bg-white dark:bg-[#1a2632] p-4 rounded-xl border border-[#f0f2f4] dark:border-[#2a3642] shadow-sm flex flex-col md:flex-row gap-4 justify-between items-center">
                        <div class="w-full md:max-w-md relative">
                            <span
                                class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-[#617589] dark:text-[#9ca3af]">search</span>
                            <input
                                class="w-full pl-10 pr-4 py-2.5 bg-[#f6f7f8] dark:bg-[#2a3642] border-none rounded-lg text-[#111418] dark:text-white placeholder:text-[#617589] dark:placeholder:text-[#6b7280] focus:ring-2 focus:ring-primary/50 text-sm"
                                placeholder="Search by VIN, Model, or Plate..." type="text" />
                        </div>
                        <div class="flex gap-2 w-full md:w-auto">
                            <select
                                class="flex-1 md:flex-none bg-[#f6f7f8] dark:bg-[#2a3642] border-none rounded-lg px-4 py-2.5 text-sm text-[#111418] dark:text-white focus:ring-2 focus:ring-primary/50 cursor-pointer">
                                <option>All Categories</option>
                                <option>SUV</option>
                                <option>Sedan</option>
                                <option>Luxury</option>
                            </select>
                            <select
                                class="flex-1 md:flex-none bg-[#f6f7f8] dark:bg-[#2a3642] border-none rounded-lg px-4 py-2.5 text-sm text-[#111418] dark:text-white focus:ring-2 focus:ring-primary/50 cursor-pointer">
                                <option>All Statuses</option>
                                <option>Available</option>
                                <option>Rented</option>
                                <option>Maintenance</option>
                            </select>
                        </div>
                    </div>
                    <!-- Bulk Actions Toolbar (Hidden by default, shown when items selected - simulated here as static for design) -->
                    <!-- Ideally this would be hidden/shown via JS based on checkboxes. Showing layout for design purposes. -->
                    <div
                        class="bg-primary/10 border border-primary/20 rounded-lg p-3 flex justify-between items-center px-4 animate-fade-in">
                        <div class="flex items-center gap-2">
                            <span
                                class="flex items-center justify-center bg-primary text-white text-xs font-bold rounded px-2 py-0.5">2</span>
                            <span class="text-sm font-medium text-primary dark:text-blue-400">items selected</span>
                        </div>
                        <div class="flex gap-2">
                            <button
                                class="text-xs font-medium text-primary dark:text-blue-400 hover:underline px-2 py-1">Unselect
                                All</button>
                            <button
                                class="flex items-center gap-1 px-3 py-1.5 bg-white dark:bg-[#2a3642] text-[#111418] dark:text-white text-xs font-medium rounded border border-gray-200 dark:border-gray-600 hover:bg-gray-50 dark:hover:bg-[#374151]">
                                <span class="material-symbols-outlined text-[16px]">edit</span> Edit
                            </button>
                            <button
                                class="flex items-center gap-1 px-3 py-1.5 bg-red-50 dark:bg-red-900/20 text-red-600 dark:text-red-400 text-xs font-medium rounded border border-red-100 dark:border-red-900/30 hover:bg-red-100 dark:hover:bg-red-900/30">
                                <span class="material-symbols-outlined text-[16px]">delete</span> Delete
                            </button>
                        </div>
                    </div>
                    <!-- Data Table -->
                    <div
                        class="bg-white dark:bg-[#1a2632] rounded-xl border border-[#f0f2f4] dark:border-[#2a3642] shadow-sm overflow-hidden">
                        <div class="overflow-x-auto">
                            <table class="w-full text-left border-collapse">
                                <thead>
                                    <tr
                                        class="bg-[#f9fafb] dark:bg-[#232d38] border-b border-[#f0f2f4] dark:border-[#2a3642]">
                                        <th class="py-3 px-4 w-12">
                                            <input
                                                class="rounded border-gray-300 text-primary focus:ring-primary/50 size-4"
                                                type="checkbox" />
                                        </th>
                                        <th
                                            class="py-3 px-4 text-xs font-semibold text-[#617589] dark:text-[#9ca3af] uppercase tracking-wider">
                                            Vehicle Info</th>
                                        <th
                                            class="py-3 px-4 text-xs font-semibold text-[#617589] dark:text-[#9ca3af] uppercase tracking-wider">
                                            Category</th>
                                        <th
                                            class="py-3 px-4 text-xs font-semibold text-[#617589] dark:text-[#9ca3af] uppercase tracking-wider">
                                            Plate No.</th>
                                        <th
                                            class="py-3 px-4 text-xs font-semibold text-[#617589] dark:text-[#9ca3af] uppercase tracking-wider">
                                            Daily Rate</th>
                                        <th
                                            class="py-3 px-4 text-xs font-semibold text-[#617589] dark:text-[#9ca3af] uppercase tracking-wider">
                                            Status</th>
                                        <th
                                            class="py-3 px-4 text-xs font-semibold text-[#617589] dark:text-[#9ca3af] uppercase tracking-wider text-right">
                                            Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-[#f0f2f4] dark:divide-[#2a3642]">
                                    <!-- Row 1 -->
                                    <tr class="group hover:bg-[#f9fafb] dark:hover:bg-[#232d38] transition-colors">
                                        <td class="py-3 px-4">
                                            <input checked=""
                                                class="rounded border-gray-300 text-primary focus:ring-primary/50 size-4"
                                                type="checkbox" />
                                        </td>
                                        <td class="py-3 px-4">
                                            <div class="flex items-center gap-3">
                                                <div class="w-12 h-8 rounded bg-gray-200 dark:bg-gray-700 bg-cover bg-center"
                                                    data-alt="White Tesla Model 3 side view"
                                                    style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBhffKtQ9tS7GHrc5YDhqc2GotgJHYN5vjv_mGmFZbJwECtKDmv0itUrO-ecnXTdRhYgxXJYTYqnDvnT36p9fKrosVW93viQ6vMlUQSlSOy5WuXyqlLQkuPWLi9_DDktFf0Gby0_RoMqUk5RSs7ycKzzrVdUUip-gVQprfckbD4ayCDDnpqh5xthVPKtAKEWNZXspVHglbp9E-ofd9PBhbib5Ym1-OazjxpvxeUowCBczNDhqR1Aflua52ESJaQudvqvz5Tepep0do');">
                                                </div>
                                                <div class="flex flex-col">
                                                    <span
                                                        class="text-sm font-medium text-[#111418] dark:text-white">Tesla
                                                        Model 3</span>
                                                    <span class="text-xs text-[#617589] dark:text-[#9ca3af]">VIN:
                                                        ...8392</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="py-3 px-4 text-sm text-[#111418] dark:text-gray-300">Electric / Sedan
                                        </td>
                                        <td class="py-3 px-4 text-sm font-mono text-[#111418] dark:text-gray-300">
                                            ABC-1234</td>
                                        <td class="py-3 px-4 text-sm font-medium text-[#111418] dark:text-white">$85.00
                                        </td>
                                        <td class="py-3 px-4">
                                            <span
                                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800 dark:bg-green-900/30 dark:text-green-400">
                                                Available
                                            </span>
                                        </td>
                                        <td class="py-3 px-4 text-right">
                                            <div
                                                class="flex items-center justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                                                <button
                                                    class="p-1 hover:bg-gray-100 dark:hover:bg-gray-700 rounded text-gray-500 dark:text-gray-400"><span
                                                        class="material-symbols-outlined text-[18px]">edit</span></button>
                                                <button
                                                    class="p-1 hover:bg-red-50 dark:hover:bg-red-900/20 rounded text-red-500 dark:text-red-400"><span
                                                        class="material-symbols-outlined text-[18px]">delete</span></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- Row 2 -->
                                    <tr class="group hover:bg-[#f9fafb] dark:hover:bg-[#232d38] transition-colors">
                                        <td class="py-3 px-4">
                                            <input checked=""
                                                class="rounded border-gray-300 text-primary focus:ring-primary/50 size-4"
                                                type="checkbox" />
                                        </td>
                                        <td class="py-3 px-4">
                                            <div class="flex items-center gap-3">
                                                <div class="w-12 h-8 rounded bg-gray-200 dark:bg-gray-700 bg-cover bg-center"
                                                    data-alt="Blue BMW X5 SUV side view"
                                                    style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuB5eJMzvpmzyZtNY5ksBYdzIOt5gY8yUA47ahGT7VpzzxeqExNEuCIbWvHTRpaXeexA87T9Um_imrjHrokzO-22VPo1toZMkhJLJ1uFfKdJIzaZKv790GtnuvhObxlZPVwY3SR1XwNHsFljM-i2KPr2vIqcWXA3M7dbtj-fyA0pGZr3g99CdLVXHx5oFar6WMCYEJxBObPAFAodcn3bN2Ctx84bnsX9aLgPj_9kVT3_rsCkGjUpq8zylqDipSQT84VR4o1Lz2lfoj0');">
                                                </div>
                                                <div class="flex flex-col">
                                                    <span class="text-sm font-medium text-[#111418] dark:text-white">BMW
                                                        X5</span>
                                                    <span class="text-xs text-[#617589] dark:text-[#9ca3af]">VIN:
                                                        ...1029</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="py-3 px-4 text-sm text-[#111418] dark:text-gray-300">SUV / Luxury
                                        </td>
                                        <td class="py-3 px-4 text-sm font-mono text-[#111418] dark:text-gray-300">
                                            XYZ-9876</td>
                                        <td class="py-3 px-4 text-sm font-medium text-[#111418] dark:text-white">$120.00
                                        </td>
                                        <td class="py-3 px-4">
                                            <span
                                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800 dark:bg-blue-900/30 dark:text-blue-400">
                                                Rented
                                            </span>
                                        </td>
                                        <td class="py-3 px-4 text-right">
                                            <div
                                                class="flex items-center justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                                                <button
                                                    class="p-1 hover:bg-gray-100 dark:hover:bg-gray-700 rounded text-gray-500 dark:text-gray-400"><span
                                                        class="material-symbols-outlined text-[18px]">edit</span></button>
                                                <button
                                                    class="p-1 hover:bg-red-50 dark:hover:bg-red-900/20 rounded text-red-500 dark:text-red-400"><span
                                                        class="material-symbols-outlined text-[18px]">delete</span></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- Row 3 -->
                                    <tr class="group hover:bg-[#f9fafb] dark:hover:bg-[#232d38] transition-colors">
                                        <td class="py-3 px-4">
                                            <input
                                                class="rounded border-gray-300 text-primary focus:ring-primary/50 size-4"
                                                type="checkbox" />
                                        </td>
                                        <td class="py-3 px-4">
                                            <div class="flex items-center gap-3">
                                                <div class="w-12 h-8 rounded bg-gray-200 dark:bg-gray-700 bg-cover bg-center"
                                                    data-alt="Silver Toyota Camry side view"
                                                    style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDRbNxMTrdktVHL4NnqjwJm6Awu1WD27Lw3bntjCSfaU_mkDnPo7e67UqktAevTOOP_re_nNGC0kn1gLM2nsUT2wJLdR8qQmdmy8gOdmYNCv1X8RHnYrzZWLM7J4H9Ai5TdBWj4FaD8BWCTNDFCX2-xB7z6zqxed9d5iivWkLFlYiR_Yatw28vCNx1IaGFtb_futIDq3a4WFdtpa-hrd6xTDNX6Mjn41rGBr2hCkpyOUtdI_gfueiq9hIT6IBk4f1y2fwdwFG-Q-Zw');">
                                                </div>
                                                <div class="flex flex-col">
                                                    <span
                                                        class="text-sm font-medium text-[#111418] dark:text-white">Toyota
                                                        Camry</span>
                                                    <span class="text-xs text-[#617589] dark:text-[#9ca3af]">VIN:
                                                        ...5512</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="py-3 px-4 text-sm text-[#111418] dark:text-gray-300">Sedan / Standard
                                        </td>
                                        <td class="py-3 px-4 text-sm font-mono text-[#111418] dark:text-gray-300">
                                            JKL-4567</td>
                                        <td class="py-3 px-4 text-sm font-medium text-[#111418] dark:text-white">$55.00
                                        </td>
                                        <td class="py-3 px-4">
                                            <span
                                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-orange-100 text-orange-800 dark:bg-orange-900/30 dark:text-orange-400">
                                                Maintenance
                                            </span>
                                        </td>
                                        <td class="py-3 px-4 text-right">
                                            <div
                                                class="flex items-center justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                                                <button
                                                    class="p-1 hover:bg-gray-100 dark:hover:bg-gray-700 rounded text-gray-500 dark:text-gray-400"><span
                                                        class="material-symbols-outlined text-[18px]">edit</span></button>
                                                <button
                                                    class="p-1 hover:bg-red-50 dark:hover:bg-red-900/20 rounded text-red-500 dark:text-red-400"><span
                                                        class="material-symbols-outlined text-[18px]">delete</span></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- Row 4 -->
                                    <tr class="group hover:bg-[#f9fafb] dark:hover:bg-[#232d38] transition-colors">
                                        <td class="py-3 px-4">
                                            <input
                                                class="rounded border-gray-300 text-primary focus:ring-primary/50 size-4"
                                                type="checkbox" />
                                        </td>
                                        <td class="py-3 px-4">
                                            <div class="flex items-center gap-3">
                                                <div class="w-12 h-8 rounded bg-gray-200 dark:bg-gray-700 bg-cover bg-center"
                                                    data-alt="Black Ford Explorer side view"
                                                    style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCCvcJPThaxIMJJZKQaMaKWMJ2iQjZkVDWFVBQ2PL9AkuhyeS9g1I2yn8BVMA0QGvtK0eWFCJ2jbLB2F6qOn7lORGShDsPwTtzyZaE2iwqSEGIIjgPBIJrVSK9GgGsDVE7zWRxDgG_NIDLXrsutrE08txNAGO-R274E0ZQMWnWXsuSeWuAjATplsWbtVDfEjwTwPpymUJZ3GxZEVqUx7Tli2-lOsMedKiiqS-e1pfAodHs31wZID6mji7nNw28yvLW3R-5ovmAFJoQ');">
                                                </div>
                                                <div class="flex flex-col">
                                                    <span
                                                        class="text-sm font-medium text-[#111418] dark:text-white">Ford
                                                        Explorer</span>
                                                    <span class="text-xs text-[#617589] dark:text-[#9ca3af]">VIN:
                                                        ...9921</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="py-3 px-4 text-sm text-[#111418] dark:text-gray-300">SUV / Standard
                                        </td>
                                        <td class="py-3 px-4 text-sm font-mono text-[#111418] dark:text-gray-300">
                                            FRD-2023</td>
                                        <td class="py-3 px-4 text-sm font-medium text-[#111418] dark:text-white">$75.00
                                        </td>
                                        <td class="py-3 px-4">
                                            <span
                                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800 dark:bg-green-900/30 dark:text-green-400">
                                                Available
                                            </span>
                                        </td>
                                        <td class="py-3 px-4 text-right">
                                            <div
                                                class="flex items-center justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                                                <button
                                                    class="p-1 hover:bg-gray-100 dark:hover:bg-gray-700 rounded text-gray-500 dark:text-gray-400"><span
                                                        class="material-symbols-outlined text-[18px]">edit</span></button>
                                                <button
                                                    class="p-1 hover:bg-red-50 dark:hover:bg-red-900/20 rounded text-red-500 dark:text-red-400"><span
                                                        class="material-symbols-outlined text-[18px]">delete</span></button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- Pagination -->
                        <div
                            class="flex items-center justify-between px-4 py-3 bg-white dark:bg-[#1a2632] border-t border-[#f0f2f4] dark:border-[#2a3642]">
                            <div class="text-sm text-[#617589] dark:text-[#9ca3af]">
                                Showing <span class="font-medium text-[#111418] dark:text-white">1</span> to <span
                                    class="font-medium text-[#111418] dark:text-white">4</span> of <span
                                    class="font-medium text-[#111418] dark:text-white">24</span> results
                            </div>
                            <div class="flex gap-2">
                                <button
                                    class="px-3 py-1 text-sm border border-[#f0f2f4] dark:border-[#4b5563] rounded hover:bg-gray-50 dark:hover:bg-[#374151] disabled:opacity-50 text-[#111418] dark:text-white">Previous</button>
                                <button
                                    class="px-3 py-1 text-sm border border-[#f0f2f4] dark:border-[#4b5563] rounded hover:bg-gray-50 dark:hover:bg-[#374151] text-[#111418] dark:text-white">Next</button>
                            </div>
                        </div>
                    </div>
                    <!-- Bulk Insert Section -->
                    <div class="flex flex-col gap-4">
                        <div class="flex justify-between items-center">
                            <h2 class="text-lg font-bold text-[#111418] dark:text-white">Bulk Insert Vehicles</h2>
                            <button class="text-sm text-primary font-medium hover:underline">Download Template</button>
                        </div>
                        <div
                            class="bg-white dark:bg-[#1a2632] rounded-xl border border-[#f0f2f4] dark:border-[#2a3642] shadow-sm p-4 md:p-6">
                            <div
                                class="grid grid-cols-1 md:grid-cols-12 gap-4 mb-4 font-medium text-xs text-[#617589] dark:text-[#9ca3af] uppercase tracking-wider hidden md:grid">
                                <div class="col-span-3">Make &amp; Model</div>
                                <div class="col-span-2">Category</div>
                                <div class="col-span-2">License Plate</div>
                                <div class="col-span-2">Daily Rate ($)</div>
                                <div class="col-span-2">Status</div>
                                <div class="col-span-1 text-center">Remove</div>
                            </div>
                            <div class="flex flex-col gap-4">
                                <!-- Input Row 1 -->
                                <div
                                    class="grid grid-cols-1 md:grid-cols-12 gap-3 md:gap-4 items-start pb-4 border-b border-[#f0f2f4] dark:border-[#2a3642] md:border-none md:pb-0">
                                    <div class="col-span-3">
                                        <label class="md:hidden text-xs font-semibold mb-1 block">Make &amp;
                                            Model</label>
                                        <input
                                            class="w-full px-3 py-2 bg-[#f6f7f8] dark:bg-[#2a3642] border-none rounded-lg text-sm text-[#111418] dark:text-white focus:ring-1 focus:ring-primary"
                                            placeholder="e.g. Honda Civic" type="text" />
                                    </div>
                                    <div class="col-span-2">
                                        <label class="md:hidden text-xs font-semibold mb-1 block">Category</label>
                                        <select
                                            class="w-full px-3 py-2 bg-[#f6f7f8] dark:bg-[#2a3642] border-none rounded-lg text-sm text-[#111418] dark:text-white focus:ring-1 focus:ring-primary">
                                            <option>Select...</option>
                                            <option>Sedan</option>
                                            <option>SUV</option>
                                        </select>
                                    </div>
                                    <div class="col-span-2">
                                        <label class="md:hidden text-xs font-semibold mb-1 block">License Plate</label>
                                        <input
                                            class="w-full px-3 py-2 bg-[#f6f7f8] dark:bg-[#2a3642] border-none rounded-lg text-sm text-[#111418] dark:text-white focus:ring-1 focus:ring-primary uppercase"
                                            placeholder="ABC-1234" type="text" />
                                    </div>
                                    <div class="col-span-2">
                                        <label class="md:hidden text-xs font-semibold mb-1 block">Daily Rate</label>
                                        <input
                                            class="w-full px-3 py-2 bg-[#f6f7f8] dark:bg-[#2a3642] border-none rounded-lg text-sm text-[#111418] dark:text-white focus:ring-1 focus:ring-primary"
                                            placeholder="0.00" type="number" />
                                    </div>
                                    <div class="col-span-2">
                                        <label class="md:hidden text-xs font-semibold mb-1 block">Status</label>
                                        <select
                                            class="w-full px-3 py-2 bg-[#f6f7f8] dark:bg-[#2a3642] border-none rounded-lg text-sm text-[#111418] dark:text-white focus:ring-1 focus:ring-primary">
                                            <option>Available</option>
                                            <option>Maintenance</option>
                                        </select>
                                    </div>
                                    <div class="col-span-1 flex justify-center mt-1">
                                        <button class="text-[#617589] hover:text-red-500 transition-colors">
                                            <span
                                                class="material-symbols-outlined text-[20px]">remove_circle_outline</span>
                                        </button>
                                    </div>
                                </div>
                                <!-- Input Row 2 -->
                                <div
                                    class="grid grid-cols-1 md:grid-cols-12 gap-3 md:gap-4 items-start pb-4 border-b border-[#f0f2f4] dark:border-[#2a3642] md:border-none md:pb-0">
                                    <div class="col-span-3">
                                        <label class="md:hidden text-xs font-semibold mb-1 block">Make &amp;
                                            Model</label>
                                        <input
                                            class="w-full px-3 py-2 bg-[#f6f7f8] dark:bg-[#2a3642] border-none rounded-lg text-sm text-[#111418] dark:text-white focus:ring-1 focus:ring-primary"
                                            placeholder="e.g. Honda Civic" type="text" />
                                    </div>
                                    <div class="col-span-2">
                                        <label class="md:hidden text-xs font-semibold mb-1 block">Category</label>
                                        <select
                                            class="w-full px-3 py-2 bg-[#f6f7f8] dark:bg-[#2a3642] border-none rounded-lg text-sm text-[#111418] dark:text-white focus:ring-1 focus:ring-primary">
                                            <option>Select...</option>
                                            <option>Sedan</option>
                                            <option>SUV</option>
                                        </select>
                                    </div>
                                    <div class="col-span-2">
                                        <label class="md:hidden text-xs font-semibold mb-1 block">License Plate</label>
                                        <input
                                            class="w-full px-3 py-2 bg-[#f6f7f8] dark:bg-[#2a3642] border-none rounded-lg text-sm text-[#111418] dark:text-white focus:ring-1 focus:ring-primary uppercase"
                                            placeholder="ABC-1234" type="text" />
                                    </div>
                                    <div class="col-span-2">
                                        <label class="md:hidden text-xs font-semibold mb-1 block">Daily Rate</label>
                                        <input
                                            class="w-full px-3 py-2 bg-[#f6f7f8] dark:bg-[#2a3642] border-none rounded-lg text-sm text-[#111418] dark:text-white focus:ring-1 focus:ring-primary"
                                            placeholder="0.00" type="number" />
                                    </div>
                                    <div class="col-span-2">
                                        <label class="md:hidden text-xs font-semibold mb-1 block">Status</label>
                                        <select
                                            class="w-full px-3 py-2 bg-[#f6f7f8] dark:bg-[#2a3642] border-none rounded-lg text-sm text-[#111418] dark:text-white focus:ring-1 focus:ring-primary">
                                            <option>Available</option>
                                            <option>Maintenance</option>
                                        </select>
                                    </div>
                                    <div class="col-span-1 flex justify-center mt-1">
                                        <button class="text-[#617589] hover:text-red-500 transition-colors">
                                            <span
                                                class="material-symbols-outlined text-[20px]">remove_circle_outline</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- Bulk Actions Footer -->
                            <div class="mt-6 flex flex-col sm:flex-row gap-3">
                                <button
                                    class="flex items-center justify-center gap-2 px-4 py-2 bg-gray-100 dark:bg-[#2a3642] text-[#111418] dark:text-white rounded-lg text-sm font-medium hover:bg-gray-200 dark:hover:bg-[#374151] transition-colors w-full sm:w-auto">
                                    <span class="material-symbols-outlined text-[20px]">add</span>
                                    Add Another Row
                                </button>
                                <div class="flex-1"></div>
                                <button
                                    class="px-6 py-2 bg-transparent text-[#617589] dark:text-[#9ca3af] hover:text-[#111418] dark:hover:text-white text-sm font-medium transition-colors">Cancel</button>
                                <button
                                    class="px-6 py-2 bg-primary text-white rounded-lg text-sm font-medium hover:bg-blue-600 transition-colors shadow-lg shadow-blue-500/30">Save
                                    All Entries</button>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>

</html>