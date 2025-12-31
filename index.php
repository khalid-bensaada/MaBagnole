<!DOCTYPE html>

<html class="light" lang="fr">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>MaBagnole - Location de véhicules simplifiée</title>
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;700;800&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#137fec",
                        "primary-dark": "#0b63c1",
                        "background-light": "#ffffff",
                        "background-offset": "#f6f8fa",
                        "background-dark": "#101922",
                        "text-main": "#111418",
                        "text-secondary": "#617589",
                    },
                    fontFamily: {
                        "display": ["Plus Jakarta Sans", "sans-serif"]
                    },
                    borderRadius: { "DEFAULT": "0.5rem", "lg": "0.75rem", "xl": "1rem", "full": "9999px" },
                },
            },
        }
    </script>
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        /* Smooth scrolling */
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>

<body class="bg-background-light dark:bg-background-dark text-text-main">
    <!-- Navigation -->
    <header class="sticky top-0 z-50 w-full bg-white/90 backdrop-blur-md border-b border-[#f0f2f4]">
        <div class="px-4 lg:px-40 py-3 flex items-center justify-between">
            <div class="flex items-center gap-4">
                <div class="size-8 text-primary flex items-center justify-center">
                    <span class="material-symbols-outlined text-3xl">directions_car</span>
                </div>
                <h2 class="text-text-main text-xl font-bold tracking-tight">MaBagnole</h2>
            </div>
            <!-- Desktop Menu -->
            <div class="hidden md:flex flex-1 justify-end gap-8 items-center">

                <div class="flex gap-3">
                    <button
                        class="flex items-center justify-center rounded-lg h-10 px-4 bg-background-offset text-text-main text-sm font-bold hover:bg-gray-200 transition-colors">
                        <a href="login.php">Se connecter</a>
                    </button>
                    <button
                        class="flex items-center justify-center rounded-lg h-10 px-4 bg-primary text-white text-sm font-bold hover:bg-primary-dark transition-colors shadow-sm shadow-primary/30">
                        <a href="sign.php">Créer un compte</a>
                    </button>
                </div>
            </div>
            <!-- Mobile Menu Icon (Placeholder functionality) -->
            <div class="md:hidden">
                <button class="text-text-main">
                    <span class="material-symbols-outlined">menu</span>
                </button>
            </div>
        </div>
    </header>
    <main>
        <!-- Hero Section -->
        <section class="relative overflow-hidden py-12 lg:py-24 px-4 lg:px-40 bg-background-light">
            <div class="max-w-[1200px] mx-auto w-full">
                <div class="flex flex-col-reverse lg:flex-row gap-12 items-center">
                    <!-- Content -->
                    <div class="flex flex-col gap-6 flex-1 text-center lg:text-left z-10">
                        <div class="space-y-4">
                            <h1 class="text-4xl lg:text-6xl font-extrabold tracking-tight text-text-main leading-[1.1]">
                                Louez votre véhicule en toute <span class="text-primary">simplicité</span>
                            </h1>
                            <p class="text-text-secondary text-lg lg:text-xl max-w-lg mx-auto lg:mx-0 font-normal">
                                La solution la plus rapide pour vos déplacements professionnels et personnels. Réservez
                                en quelques clics.
                            </p>
                        </div>
                        <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start pt-2">
                              
                        </div>
                        <div class="flex items-center justify-center lg:justify-start gap-4 pt-4">
                            <div class="flex -space-x-3">
                                <img alt="User Avatar" class="w-8 h-8 rounded-full border-2 border-white"
                                    data-alt="User avatar 1"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuCO81RH7cDlAUEbcK25rDB_rWJtjPwKkqRwjviNB4G3aWMyrO2mm9vgpTYCCLO0Fb83aEmlc1G2kLjzM5rcN5jgUlMSsL5bYPv7ddynBt4vLET06mGJVFcqkhNImm-ZSOB1gBbW24fmC213oSJpiDZp6Gl5IUS9nHbNgAKNlzNvJaEe8EHCCgP_5Laserne5AO2LesdLuhdIq_Rhwieynh5Y2uOX7FoaaRxEOM5RvBbP6zyyxRDGiDaizedPCqnzJD6ias1LYy0_NQ" />
                                <img alt="User Avatar" class="w-8 h-8 rounded-full border-2 border-white"
                                    data-alt="User avatar 2"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuAIjNCTaWkxedpLvxqjVPnK4va8QMvZ8NVSi3yYwKl8GcbsGtsvt4XE-WfaY-JW3VuuhkhwpUNvMw1vdu_LND656bzRectJFrr45JXsD2zkDRPJMaeE-hl631zzsYlhRLFjzoPSeq88ptikSgq7HdHcH5v2zDbmTzfghUpUM7tM8xLNtIXeU2S3MMwxPYZwsQkbytFDGpboby5ZGyQ-ZKlq1qd5bO28tsyINMpRcUYKDwnfe9DNtnTNriTDYx5Q5iExCqnxb4W1BVQ" />
                                <img alt="User Avatar" class="w-8 h-8 rounded-full border-2 border-white"
                                    data-alt="User avatar 3"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuDJXBrvzMZ5ZqAZtPh7GWaGMgON2es5c93VY_vLsnHMm6QrCggKMhPORtsTp0ovS61k6MnSNUlT7jIuBfNvQwwuBq9PR3suS9oW4YSL-Gxp6LQVXlUpebdRvAdWOvXog17Obp2mXOzHh3KdiwK4xZfbcCTWT4NYs1z4jGL6b0cSfuUejXDVtb1H6AHjrfGzzSzfQqAQzZYCyAGcFRrBDVqvt4VFKf8pWCqMTmKOMVsHlMD6P_qGIhcgnCSzIzVfubfJV5NffEqfmOU" />
                            </div>
                            <p class="text-sm font-medium text-text-secondary">Rejoignez <span
                                    class="text-text-main font-bold">2,000+</span> conducteurs</p>
                        </div>
                    </div>
                    <!-- Image -->
                    <div class="flex-1 w-full relative">
                        <!-- Decorative gradient blob -->
                        <div class="absolute -top-10 -right-10 w-72 h-72 bg-primary/10 rounded-full blur-3xl"></div>
                        <div class="absolute -bottom-10 -left-10 w-72 h-72 bg-blue-400/10 rounded-full blur-3xl"></div>
                        <div class="relative w-full aspect-[4/3] rounded-2xl overflow-hidden shadow-2xl bg-slate-100">
                            <div class="w-full h-full bg-center bg-cover"
                                data-alt="Modern car on the road with clear sky"
                                style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuD4pSJJUKf2qcBqGcSBF5RK4JoX3ufx0csANlyKZQcT-rQoGwcRuaNvWm16MMpSK3eiJUoa93sqqPvYbEMW61ddcaDbD7ZoqdF8nPUToSjczVmhjY9yqSfF4O49Hb7FUQXPa9ZK6QgMD-ygDnL_DVTotYJ1nCMsnE_oc5IJoJN7PFVDdRjeGebTYBw88Mw4x4qK4j-ydSnARrtULSawkdu7m_eHbTg572mgkA-n_wlUQWiPpFCThso2GO01MC_RxyoFZEtGZW30srU');">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Features Section -->
        <section class="py-20 px-4 lg:px-40 bg-background-offset">
            <div class="max-w-[1200px] mx-auto">
                <div class="text-center max-w-3xl mx-auto mb-16">
                    <h2 class="text-3xl font-bold tracking-tight text-text-main sm:text-4xl mb-4">Pourquoi choisir
                        MaBagnole ?</h2>
                    <p class="text-lg text-text-secondary">Nous nous engageons à vous offrir la meilleure expérience de
                        location possible, sans tracas.</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- Card 1 -->
                    <div
                        class="flex flex-col gap-4 rounded-xl border border-slate-200 bg-white p-6 shadow-sm hover:shadow-md transition-shadow">
                        <div
                            class="w-12 h-12 rounded-lg bg-primary/10 flex items-center justify-center text-primary mb-2">
                            <span class="material-symbols-outlined text-3xl">directions_car</span>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-text-main mb-2">Large choix</h3>
                            <p class="text-text-secondary text-sm leading-relaxed">Des citadines agiles aux SUV
                                spacieux, trouvez le véhicule parfaitement adapté à vos besoins.</p>
                        </div>
                    </div>
                    <!-- Card 2 -->
                    <div
                        class="flex flex-col gap-4 rounded-xl border border-slate-200 bg-white p-6 shadow-sm hover:shadow-md transition-shadow">
                        <div
                            class="w-12 h-12 rounded-lg bg-primary/10 flex items-center justify-center text-primary mb-2">
                            <span class="material-symbols-outlined text-3xl">bolt</span>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-text-main mb-2">Réservation rapide</h3>
                            <p class="text-text-secondary text-sm leading-relaxed">Un processus de réservation en ligne
                                simplifié et ultra-rapide, sans paperasse inutile.</p>
                        </div>
                    </div>
                    <!-- Card 3 -->
                    <div
                        class="flex flex-col gap-4 rounded-xl border border-slate-200 bg-white p-6 shadow-sm hover:shadow-md transition-shadow">
                        <div
                            class="w-12 h-12 rounded-lg bg-primary/10 flex items-center justify-center text-primary mb-2">
                            <span class="material-symbols-outlined text-3xl">sell</span>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-text-main mb-2">Prix transparents</h3>
                            <p class="text-text-secondary text-sm leading-relaxed">Pas de frais cachés. Le prix affiché
                                est le prix que vous payez, tout simplement.</p>
                        </div>
                    </div>
                    <!-- Card 4 -->
                    <div
                        class="flex flex-col gap-4 rounded-xl border border-slate-200 bg-white p-6 shadow-sm hover:shadow-md transition-shadow">
                        <div
                            class="w-12 h-12 rounded-lg bg-primary/10 flex items-center justify-center text-primary mb-2">
                            <span class="material-symbols-outlined text-3xl">support_agent</span>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-text-main mb-2">Assistance 7j/7</h3>
                            <p class="text-text-secondary text-sm leading-relaxed">Une équipe dédiée à votre écoute tous
                                les jours pour vous accompagner sur la route.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- How it Works Section -->
        <section class="py-20 px-4 lg:px-40 bg-white">
            <div class="max-w-[1200px] mx-auto">
                <div class="flex flex-col md:flex-row gap-12 items-center">
                    <div class="md:w-1/2 space-y-8">
                        <div>
                            <h2 class="text-3xl font-bold tracking-tight text-text-main sm:text-4xl mb-4">Comment ça
                                marche</h2>
                            <p class="text-lg text-text-secondary">Trois étapes simples pour prendre la route en toute
                                liberté.</p>
                        </div>
                        <div class="space-y-6">
                            <!-- Step 1 -->
                            <div class="flex gap-4">
                                <div
                                    class="flex-shrink-0 w-10 h-10 rounded-full bg-primary text-white flex items-center justify-center font-bold text-lg">
                                    1</div>
                                <div>
                                    <h3 class="text-xl font-bold text-text-main">Créer un compte</h3>
                                    <p class="text-text-secondary mt-1">Inscrivez-vous gratuitement en quelques secondes
                                        avec votre email.</p>
                                </div>
                            </div>
                            <!-- Step 2 -->
                            <div class="flex gap-4">
                                <div
                                    class="flex-shrink-0 w-10 h-10 rounded-full bg-primary text-white flex items-center justify-center font-bold text-lg">
                                    2</div>
                                <div>
                                    <h3 class="text-xl font-bold text-text-main">Choisir un véhicule</h3>
                                    <p class="text-text-secondary mt-1">Parcourez notre catalogue et sélectionnez votre
                                        voiture idéale selon vos dates.</p>
                                </div>
                            </div>
                            <!-- Step 3 -->
                            <div class="flex gap-4">
                                <div
                                    class="flex-shrink-0 w-10 h-10 rounded-full bg-primary text-white flex items-center justify-center font-bold text-lg">
                                    3</div>
                                <div>
                                    <h3 class="text-xl font-bold text-text-main">Réserver en ligne</h3>
                                    <p class="text-text-secondary mt-1">Validez votre réservation sécurisée et récupérez
                                        votre véhicule.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="md:w-1/2 w-full">
                        <div
                            class="relative w-full aspect-square md:aspect-[4/3] rounded-2xl overflow-hidden shadow-xl bg-slate-50">
                            <div class="absolute inset-0 bg-black/10 z-10"></div>
                            <div class="w-full h-full bg-center bg-cover"
                                data-alt="Hand holding car keys with car in background"
                                style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCmEmMqUzhlfaQFkqINT5qdOwu4TPJdsiTHivZWvkz9vL5YO9854DaRfLIBZlEaM1_R8T9xIMXVcF0aufk9QBx867uGCtl-0eT2hxrfh4N39fiPECLOQKRSFa66C_rUdEbbh3vlUjgTA1_S_A_tynv0LxEi18McDJArW5s2CqWJRJJQ4KSPBoPU_NRITpZ47kdK8zRuKdvL22KBmeIiUs3eczd0-2Y4XY24AcJLtAC6utEJk6vU3yfU7Mc4KQkHWD0-ifrioleKfgA');">
                            </div>
                            <!-- Floating UI Card Mockup -->
                            <div
                                class="absolute bottom-6 left-6 right-6 bg-white/95 backdrop-blur rounded-xl p-4 shadow-lg z-20 animate-fade-in-up border border-white/50">
                                <div class="flex items-center justify-between mb-2">
                                    <span class="text-sm font-bold text-text-main">Réservation confirmée</span>
                                    <span class="material-symbols-outlined text-green-500">check_circle</span>
                                </div>
                                <div class="h-2 bg-slate-100 rounded-full w-full overflow-hidden">
                                    <div class="h-full bg-primary w-full rounded-full"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- CTA Section -->
        <section class="py-24 px-4 lg:px-40 bg-background-offset">
            <div
                class="max-w-[960px] mx-auto text-center bg-gradient-to-br from-primary to-blue-600 rounded-3xl p-10 lg:p-16 shadow-xl relative overflow-hidden group">
                <!-- Abstract patterns -->
                <div
                    class="absolute top-0 right-0 w-64 h-64 bg-white/10 rounded-full blur-3xl -translate-y-1/2 translate-x-1/2 group-hover:bg-white/20 transition-colors duration-500">
                </div>
                <div
                    class="absolute bottom-0 left-0 w-48 h-48 bg-black/10 rounded-full blur-2xl translate-y-1/2 -translate-x-1/4">
                </div>
                <div class="relative z-10 flex flex-col items-center gap-6">
                    <h2 class="text-3xl md:text-5xl font-black tracking-tight text-white leading-tight max-w-2xl">
                        Prêt à prendre la route ?
                    </h2>
                    <p class="text-blue-50 text-lg max-w-lg font-medium">
                        Rejoignez la communauté MaBagnole dès aujourd'hui et profitez de la liberté de mouvement à
                        portée de clic.
                    </p>
                    <div class="pt-4 w-full flex justify-center">
                        <button
                            class="flex min-w-[200px] h-14 cursor-pointer items-center justify-center rounded-xl bg-white text-primary text-base font-bold shadow-lg hover:shadow-xl hover:bg-slate-50 hover:-translate-y-1 transition-all duration-300">
                            Accéder à la plateforme
                        </button>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- Footer -->
    <footer class="bg-white border-t border-slate-200 pt-16 pb-8 px-4 lg:px-40">
        <div class="max-w-[1200px] mx-auto flex flex-col gap-10">
            <div class="flex flex-col md:flex-row justify-between items-start gap-10">
                <div class="flex flex-col gap-4 max-w-xs">
                    <div class="flex items-center gap-2 text-text-main">
                        <span class="material-symbols-outlined text-primary text-2xl">directions_car</span>
                        <span class="text-xl font-bold">MaBagnole</span>
                    </div>
                    <p class="text-text-secondary text-sm">
                        La location de voiture repensée pour vous. Simple, rapide et transparente.
                    </p>
                </div>
                <div class="flex flex-wrap gap-10 lg:gap-20">
                    <div class="flex flex-col gap-3">
                        <h4 class="font-bold text-text-main">Navigation</h4>
                        <a class="text-sm text-text-secondary hover:text-primary transition-colors" href="#">Accueil</a>
                        <a class="text-sm text-text-secondary hover:text-primary transition-colors" href="#">À
                            propos</a>
                        <a class="text-sm text-text-secondary hover:text-primary transition-colors"
                            href="#">Véhicules</a>
                    </div>
                    <div class="flex flex-col gap-3">
                        <h4 class="font-bold text-text-main">Support</h4>
                        <a class="text-sm text-text-secondary hover:text-primary transition-colors" href="#">Centre
                            d'aide</a>
                        <a class="text-sm text-text-secondary hover:text-primary transition-colors" href="#">Conditions
                            générales</a>
                        <a class="text-sm text-text-secondary hover:text-primary transition-colors" href="#">Politique
                            de confidentialité</a>
                    </div>
                    <div class="flex flex-col gap-3">
                        <h4 class="font-bold text-text-main">Contact</h4>
                        <a class="text-sm text-text-secondary hover:text-primary transition-colors"
                            href="mailto:contact@mabagnole.com">contact@mabagnole.com</a>
                        <div class="flex gap-4 mt-2">
                            <a class="text-text-secondary hover:text-primary transition-colors" href="#">
                                <span class="sr-only">Facebook</span>
                                <svg class="h-5 w-5" fill="currentColor" viewbox="0 0 24 24">
                                    <path
                                        d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z">
                                    </path>
                                </svg>
                            </a>
                            <a class="text-text-secondary hover:text-primary transition-colors" href="#">
                                <span class="sr-only">Twitter</span>
                                <svg class="h-5 w-5" fill="currentColor" viewbox="0 0 24 24">
                                    <path
                                        d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84">
                                    </path>
                                </svg>
                            </a>
                            <a class="text-text-secondary hover:text-primary transition-colors" href="#">
                                <span class="sr-only">Instagram</span>
                                <svg class="h-5 w-5" fill="currentColor" viewbox="0 0 24 24">
                                    <path clip-rule="evenodd"
                                        d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.468 2.53c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                        fill-rule="evenodd"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="border-t border-slate-100 pt-8 flex flex-col md:flex-row justify-between items-center gap-4">
                <p class="text-xs text-text-secondary">© 2024 MaBagnole. Tous droits réservés.</p>
                <div class="flex gap-6">
                    <a class="text-xs text-text-secondary hover:text-text-main" href="#">Mentions légales</a>
                    <a class="text-xs text-text-secondary hover:text-text-main" href="#">Cookies</a>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>