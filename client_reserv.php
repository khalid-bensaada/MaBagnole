<!DOCTYPE html>

<html class="light" lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <title>Vehicle Reservation Form</title>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;700&amp;display=swap"
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
          },
          fontFamily: {
            "display": ["Plus Jakarta Sans", "sans-serif"]
          },
          borderRadius: { "DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px" },
        },
      },
    }
  </script>
</head>

<body class="bg-background-light dark:bg-background-dark font-display text-[#111418] dark:text-white antialiased">
  <div class="relative flex min-h-screen w-full flex-col overflow-x-hidden">
    <!-- Header -->
    <header
      class="flex items-center justify-between whitespace-nowrap border-b border-solid border-b-[#f0f2f4] dark:border-gray-800 bg-white dark:bg-[#101922] px-6 lg:px-10 py-3 sticky top-0 z-50">
      <div class="flex items-center gap-4 text-[#111418] dark:text-white">
        <div class="size-8 text-primary">
          <svg class="w-full h-full" fill="none" viewbox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
            <path clip-rule="evenodd" d="M24 4H6V17.3333V30.6667H24V44H42V30.6667V17.3333H24V4Z" fill="currentColor"
              fill-rule="evenodd"></path>
          </svg>
        </div>
        <h2 class="text-[#111418] dark:text-white text-xl font-bold leading-tight tracking-[-0.015em]">RentAWheel</h2>
      </div>
      <div class="flex flex-1 justify-end gap-8">
        <div class="hidden md:flex items-center gap-9">
          <a class="text-[#111418] dark:text-gray-300 text-sm font-medium leading-normal hover:text-primary transition-colors"
            href="#">Back to Results</a>
          <a class="text-[#111418] dark:text-gray-300 text-sm font-medium leading-normal hover:text-primary transition-colors"
            href="#">Support</a>
        </div>
        <button
          class="flex min-w-[84px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-primary hover:bg-primary/90 transition-colors text-white text-sm font-bold leading-normal tracking-[0.015em]">
          <span class="truncate">Sign In</span>
        </button>
      </div>
    </header>
    <div class="layout-container flex h-full grow flex-col">
      <div class="px-4 md:px-10 lg:px-40 flex flex-1 justify-center py-8">
        <div class="layout-content-container flex flex-col max-w-[1200px] flex-1">
          <!-- Progress Bar -->
          <div class="flex flex-col gap-3 mb-8 w-full max-w-3xl mx-auto">
            <div class="flex gap-6 justify-between items-end">
              <p class="text-[#111418] dark:text-white text-lg font-bold leading-normal">Reservation Details</p>
              <p class="text-[#111418] dark:text-gray-400 text-sm font-normal leading-normal">Step 2 of 3</p>
            </div>
            <div class="w-full rounded-full bg-[#dbe0e6] dark:bg-gray-700 h-2 overflow-hidden">
              <div class="h-full rounded-full bg-primary transition-all duration-500" style="width: 66%;"></div>
            </div>
          </div>
          <!-- Main Layout: Grid on Desktop, Stack on Mobile -->
          <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
            <!-- Left Column: Form -->
            <div class="lg:col-span-8 flex flex-col gap-6">
              <!-- Page Heading -->
              <div class="flex flex-col gap-2">
                <h1 class="text-[#111418] dark:text-white tracking-light text-[32px] font-bold leading-tight">Finalize
                  Your Reservation</h1>
                <p class="text-[#617589] dark:text-gray-400 text-base font-normal leading-normal">Complete the form
                  below to secure your vehicle. Free cancellation up to 48 hours before pickup.</p>
              </div>
              <!-- Form Card -->
              <div
                class="rounded-xl bg-white dark:bg-[#1a2632] shadow-[0_0_4px_rgba(0,0,0,0.05)] border border-[#e5e7eb] dark:border-gray-800 p-6 md:p-8">
                <form action="#" class="flex flex-col gap-6" onsubmit="event.preventDefault();">
                  <!-- Location Section -->
                  <div class="flex flex-col gap-4">
                    <h3 class="text-lg font-bold text-[#111418] dark:text-white flex items-center gap-2">
                      <span class="material-symbols-outlined text-primary">location_on</span>
                      Pickup &amp; Drop-off
                    </h3>
                    <div class="grid grid-cols-1 gap-4">
                      <label class="flex flex-col flex-1">
                        <p class="text-[#111418] dark:text-gray-300 text-sm font-medium leading-normal pb-2">Pickup
                          Location</p>
                        <div class="relative flex w-full flex-1 items-stretch rounded-lg group">
                          <input
                            class="flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#111418] dark:text-white dark:bg-[#101922] focus:outline-none focus:ring-2 focus:ring-primary/50 border border-[#dbe0e6] dark:border-gray-700 h-12 px-4 pl-10 text-base font-normal leading-normal transition-all"
                            placeholder="Enter city, airport, or address"
                            value="San Francisco International Airport (SFO)" />
                          <div
                            class="absolute left-3 top-1/2 -translate-y-1/2 text-[#617589] dark:text-gray-500 flex items-center pointer-events-none">
                            <span class="material-symbols-outlined text-[20px]">search</span>
                          </div>
                          <div
                            class="absolute right-3 top-1/2 -translate-y-1/2 text-green-500 flex items-center pointer-events-none">
                            <span class="material-symbols-outlined text-[20px]">check_circle</span>
                          </div>
                        </div>
                      </label>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                      <label class="flex flex-col flex-1">
                        <p class="text-[#111418] dark:text-gray-300 text-sm font-medium leading-normal pb-2">Pickup Date
                          &amp; Time</p>
                        <div class="relative flex w-full flex-1 items-stretch rounded-lg">
                          <input
                            class="flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#111418] dark:text-white dark:bg-[#101922] focus:outline-none focus:ring-2 focus:ring-primary/50 border border-[#dbe0e6] dark:border-gray-700 h-12 px-4 text-base font-normal leading-normal"
                            type="datetime-local" value="2023-10-24T10:00" />
                        </div>
                      </label>
                      <label class="flex flex-col flex-1">
                        <p class="text-[#111418] dark:text-gray-300 text-sm font-medium leading-normal pb-2">Return Date
                          &amp; Time</p>
                        <div class="relative flex w-full flex-1 items-stretch rounded-lg">
                          <input
                            class="flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#111418] dark:text-white dark:bg-[#101922] focus:outline-none focus:ring-2 focus:ring-primary/50 border border-[#dbe0e6] dark:border-gray-700 h-12 px-4 text-base font-normal leading-normal"
                            type="datetime-local" value="2023-10-27T10:00" />
                        </div>
                      </label>
                    </div>
                    <div class="flex items-center gap-2 mt-1">
                      <input class="w-4 h-4 rounded border-gray-300 text-primary focus:ring-primary" id="diff-dropoff"
                        type="checkbox" />
                      <label class="text-sm text-[#617589] dark:text-gray-400" for="diff-dropoff">Return to a different
                        location</label>
                    </div>
                  </div>
                  <hr class="border-[#f0f2f4] dark:border-gray-700 my-2" />
                  <!-- Personal Info Section -->
                  <div class="flex flex-col gap-4">
                    <h3 class="text-lg font-bold text-[#111418] dark:text-white flex items-center gap-2">
                      <span class="material-symbols-outlined text-primary">person</span>
                      Driver Details
                    </h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                      <label class="flex flex-col flex-1">
                        <p class="text-[#111418] dark:text-gray-300 text-sm font-medium leading-normal pb-2">First Name
                        </p>
                        <input
                          class="flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#111418] dark:text-white dark:bg-[#101922] focus:outline-none focus:ring-2 focus:ring-primary/50 border border-[#dbe0e6] dark:border-gray-700 h-12 px-4 text-base font-normal leading-normal"
                          placeholder="John" type="text" />
                      </label>
                      <label class="flex flex-col flex-1">
                        <p class="text-[#111418] dark:text-gray-300 text-sm font-medium leading-normal pb-2">Last Name
                        </p>
                        <input
                          class="flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#111418] dark:text-white dark:bg-[#101922] focus:outline-none focus:ring-2 focus:ring-primary/50 border border-[#dbe0e6] dark:border-gray-700 h-12 px-4 text-base font-normal leading-normal"
                          placeholder="Doe" type="text" />
                      </label>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                      <label class="flex flex-col flex-1">
                        <p class="text-[#111418] dark:text-gray-300 text-sm font-medium leading-normal pb-2">Email
                          Address</p>
                        <input
                          class="flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#111418] dark:text-white dark:bg-[#101922] focus:outline-none focus:ring-2 focus:ring-primary/50 border border-[#dbe0e6] dark:border-gray-700 h-12 px-4 text-base font-normal leading-normal"
                          placeholder="john.doe@example.com" type="email" />
                      </label>
                      <label class="flex flex-col flex-1">
                        <p class="text-[#111418] dark:text-gray-300 text-sm font-medium leading-normal pb-2">Phone
                          Number</p>
                        <!-- Error State Example -->
                        <input
                          class="flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#111418] dark:text-white dark:bg-[#101922] focus:outline-none focus:ring-2 focus:ring-red-200 border border-red-500 h-12 px-4 text-base font-normal leading-normal"
                          placeholder="(555) 123-4567" type="tel" />
                        <p class="text-red-500 text-xs mt-1 ml-1">Please enter a valid phone number.</p>
                      </label>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <!-- Right Column: Vehicle Summary (Sticky) -->
            <div class="lg:col-span-4 flex flex-col gap-6 sticky top-24">
              <div
                class="flex flex-col gap-4 rounded-xl bg-white dark:bg-[#1a2632] shadow-[0_0_15px_rgba(0,0,0,0.05)] border border-[#e5e7eb] dark:border-gray-800 p-5">
                <div class="flex items-center justify-between">
                  <h3 class="text-[#111418] dark:text-white text-lg font-bold">Selected Vehicle</h3>
                  <a class="text-primary text-sm font-medium hover:underline" href="#">Edit</a>
                </div>
                <!-- Vehicle Image -->
                <div class="w-full aspect-[16/9] bg-gray-100 rounded-lg overflow-hidden relative group">
                  <div class="w-full h-full bg-center bg-cover transition-transform duration-700 group-hover:scale-105"
                    data-alt="Silver Tesla Model 3 side view"
                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuC9jUNOZqMKmE_VPvF2gbIIaFy572QyJXGCjws91Q2ltgSI3LrCeQcqD6jyJBkMhlWs4B9Hhi-DS39mpdtSmEZio8_rGe_uxxnUnuK8Koj3XhZ6lTCD0IZxje1yFxWgnm16yaW_bfsKPjVhdL21883ihLssYlLvhNMFpmkSSOsqHHCvXLUbcwLoMfGh4P2ewkWOXKXlL0vQkDt-m0ONHLcL_pzIHOzPPtCI9eRe-HvZyNtlamESH4Tl04szxByJy4gCbO0a-RWJftg");'>
                  </div>
                  <div
                    class="absolute top-2 right-2 bg-white/90 dark:bg-black/70 backdrop-blur-sm px-2 py-1 rounded text-xs font-bold text-[#111418] dark:text-white">
                    Premium
                  </div>
                </div>
                <!-- Vehicle Info -->
                <div>
                  <h4 class="text-[#111418] dark:text-white text-xl font-bold leading-tight">Tesla Model 3</h4>
                  <p class="text-[#617589] dark:text-gray-400 text-sm mt-1">or similar • Electric</p>
                </div>
                <!-- Specs Grid -->
                <div class="grid grid-cols-3 gap-2 py-3 border-y border-[#f0f2f4] dark:border-gray-700">
                  <div class="flex flex-col items-center gap-1 text-center">
                    <span class="material-symbols-outlined text-[#617589] dark:text-gray-400 text-[20px]">person</span>
                    <span class="text-xs font-medium text-[#111418] dark:text-gray-300">5 Seats</span>
                  </div>
                  <div
                    class="flex flex-col items-center gap-1 text-center border-l border-r border-[#f0f2f4] dark:border-gray-700">
                    <span class="material-symbols-outlined text-[#617589] dark:text-gray-400 text-[20px]">work</span>
                    <span class="text-xs font-medium text-[#111418] dark:text-gray-300">2 Bags</span>
                  </div>
                  <div class="flex flex-col items-center gap-1 text-center">
                    <span
                      class="material-symbols-outlined text-[#617589] dark:text-gray-400 text-[20px]">settings</span>
                    <span class="text-xs font-medium text-[#111418] dark:text-gray-300">Auto</span>
                  </div>
                </div>
                <!-- Price Breakdown -->
                <div class="flex flex-col gap-3 py-2">
                  <div class="flex justify-between items-center text-sm">
                    <span class="text-[#617589] dark:text-gray-400">Rate (3 days)</span>
                    <span class="text-[#111418] dark:text-white font-medium">$255.00</span>
                  </div>
                  <div class="flex justify-between items-center text-sm">
                    <span class="text-[#617589] dark:text-gray-400">Taxes &amp; Fees</span>
                    <span class="text-[#111418] dark:text-white font-medium">$45.50</span>
                  </div>
                  <div class="h-px bg-[#f0f2f4] dark:border-gray-700 w-full my-1"></div>
                  <div class="flex justify-between items-center">
                    <span class="text-[#111418] dark:text-white text-base font-bold">Total</span>
                    <span class="text-primary text-xl font-bold">$300.50</span>
                  </div>
                </div>
                <!-- Submit Button -->
                <button
                  class="flex w-full cursor-pointer items-center justify-center overflow-hidden rounded-lg h-12 px-4 bg-primary hover:bg-primary/90 transition-colors text-white text-base font-bold leading-normal tracking-[0.015em] shadow-lg shadow-primary/20 mt-2">
                  Confirm Reservation
                </button>
                <!-- Trust Badges -->
                <div class="flex justify-center gap-4 mt-2">
                  <div class="flex items-center gap-1">
                    <span class="material-symbols-outlined text-green-500 text-[16px]">verified_user</span>
                    <span class="text-xs text-[#617589] dark:text-gray-400">Secure</span>
                  </div>
                  <div class="flex items-center gap-1">
                    <span class="material-symbols-outlined text-green-500 text-[16px]">check</span>
                    <span class="text-xs text-[#617589] dark:text-gray-400">Free Cancel</span>
                  </div>
                </div>
              </div>
              <!-- Help Card -->
              <div
                class="hidden lg:flex flex-col gap-2 rounded-xl bg-white dark:bg-[#1a2632] shadow-sm border border-[#e5e7eb] dark:border-gray-800 p-5">
                <div class="flex items-start gap-3">
                  <div class="bg-primary/10 p-2 rounded-full text-primary">
                    <span class="material-symbols-outlined">support_agent</span>
                  </div>
                  <div>
                    <h4 class="text-sm font-bold text-[#111418] dark:text-white">Need help booking?</h4>
                    <p class="text-xs text-[#617589] dark:text-gray-400 mt-1">Call our customer service team 24/7 at
                      <span class="font-medium text-primary">(555) 0123-4567</span></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>