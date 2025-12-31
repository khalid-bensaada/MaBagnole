<!DOCTYPE html>

<html class="light" lang="fr">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Inscription - MaBagnole</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;700;800&amp;display=swap"
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
                        "primary-hover": "#116acc",
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

<body
    class="font-display bg-background-light dark:bg-background-dark min-h-screen flex flex-col antialiased selection:bg-primary/20 selection:text-primary">
    <!-- Top Navigation -->
    <header
        class="flex items-center justify-between whitespace-nowrap border-b border-solid border-b-slate-200 dark:border-b-slate-800 bg-white dark:bg-slate-900 px-6 lg:px-10 py-3 relative z-10">
        <div class="flex items-center gap-4 text-slate-900 dark:text-white cursor-pointer group">
            <div
                class="size-8 rounded-lg bg-primary/10 flex items-center justify-center text-primary transition-colors group-hover:bg-primary group-hover:text-white">
                <span class="material-symbols-outlined text-xl">directions_car</span>
            </div>
            <h2 class="text-slate-900 dark:text-white text-lg font-bold leading-tight tracking-tight">MaBagnole</h2>
        </div>
        <div class="flex items-center gap-4 sm:gap-8">
            <div class="hidden sm:flex items-center gap-2">
                <span class="text-slate-500 dark:text-slate-400 text-sm font-medium">Déjà membre ?</span>
                <a class="text-primary hover:text-primary-hover text-sm font-bold leading-normal transition-colors"
                    href="login.php">Connexion</a>
            </div>
            <button class="sm:hidden flex items-center justify-center text-slate-900 dark:text-white">
                <span class="material-symbols-outlined">menu</span>
            </button>
        </div>
    </header>
    <!-- Main Content Area -->
    <main class="flex-1 flex items-center justify-center p-4 sm:p-6 lg:p-8 relative overflow-hidden">
        <!-- Abstract Background Decorative Elements -->
        <div class="absolute top-0 left-0 w-full h-full overflow-hidden pointer-events-none z-0">
            <div class="absolute -top-[10%] -left-[10%] w-[50%] h-[50%] rounded-full bg-primary/5 blur-[120px]"></div>
            <div class="absolute top-[20%] right-[10%] w-[30%] h-[30%] rounded-full bg-blue-400/10 blur-[100px]"></div>
            <div class="absolute bottom-[10%] left-[20%] w-[40%] h-[40%] rounded-full bg-indigo-500/5 blur-[130px]">
            </div>
        </div>
        <div class="layout-content-container flex flex-col w-full max-w-[520px] relative z-10">
            <!-- Card Container -->
            <div
                class="bg-white dark:bg-slate-900 rounded-2xl shadow-xl border border-slate-100 dark:border-slate-800 p-6 sm:p-10 transition-all duration-300">
                <!-- Page Heading -->
                <div class="flex flex-col gap-2 mb-8 text-center">
                    <h1 class="text-slate-900 dark:text-white text-3xl font-extrabold leading-tight tracking-tight">
                        Créer un compte</h1>
                    <p class="text-slate-500 dark:text-slate-400 text-base font-normal">Rejoignez MaBagnole et prenez la
                        route en quelques clics.</p>
                </div>
                <!-- Alert Placeholders (Hidden by default, shown for demo) -->
                <!-- Error Alert Example (Hidden) -->
                <div
                    class="hidden mb-6 p-4 rounded-lg bg-red-50 dark:bg-red-900/20 border border-red-200 dark:border-red-800/50 flex items-start gap-3">
                    <span class="material-symbols-outlined text-red-600 dark:text-red-400 mt-0.5 text-xl">error</span>
                    <div class="flex-1">
                        <p class="text-sm font-semibold text-red-800 dark:text-red-300">Erreur d'inscription</p>
                        <p class="text-sm text-red-700 dark:text-red-400/80 mt-1">Cette adresse e-mail est déjà
                            utilisée.</p>
                    </div>
                </div>
                <!-- Form -->
                <form class="flex flex-col gap-5" action="sign.php" method="POST">
                    <!-- Full Name Field -->
                    <div class="flex flex-col gap-2">
                        <label class="text-slate-900 dark:text-white text-sm font-semibold leading-normal"
                            for="full_name">Nom complet</label>
                        <div class="relative flex items-center">
                            <input
                                class="form-input w-full rounded-lg border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-800 text-slate-900 dark:text-white placeholder:text-slate-400 focus:border-primary focus:ring-primary h-12 pl-4 pr-11 text-base transition-colors"
                                id="full_name" placeholder="Jean Dupont" type="text" name="fullname" />
                            <div class="absolute right-4 text-slate-400 pointer-events-none flex items-center">
                                <span class="material-symbols-outlined text-[20px]">person</span>
                            </div>
                        </div>
                    </div>
                    <!-- Email Field -->
                    <div class="flex flex-col gap-2">
                        <label class="text-slate-900 dark:text-white text-sm font-semibold leading-normal"
                            for="email">Adresse e-mail</label>
                        <div class="relative flex items-center">
                            <input
                                class="form-input w-full rounded-lg border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-800 text-slate-900 dark:text-white placeholder:text-slate-400 focus:border-primary focus:ring-primary h-12 pl-4 pr-11 text-base transition-colors"
                                id="email" placeholder="jean@exemple.com" type="email" name="email" />
                            <div class="absolute right-4 text-slate-400 pointer-events-none flex items-center">
                                <span class="material-symbols-outlined text-[20px]">mail</span>
                            </div>
                        </div>
                    </div>
                    <!-- Password Field -->
                    <div class="flex flex-col gap-2">
                        <label class="text-slate-900 dark:text-white text-sm font-semibold leading-normal"
                            for="password">Mot de passe</label>
                        <div class="relative flex items-center group">
                            <input
                                class="form-input w-full rounded-lg border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-800 text-slate-900 dark:text-white placeholder:text-slate-400 focus:border-primary focus:ring-primary h-12 pl-4 pr-11 text-base transition-colors"
                                id="password" placeholder="••••••••" type="password" name="email" />
                            <button
                                class="absolute right-0 top-0 h-full px-4 text-slate-400 hover:text-slate-600 dark:hover:text-slate-300 transition-colors flex items-center focus:outline-none"
                                type="button">
                                <span class="material-symbols-outlined text-[20px]">visibility_off</span>
                            </button>
                        </div>
                        <!-- Password Strength Indicator -->

                    </div>
                    <!-- Confirm Password Field -->
                    <div class="flex flex-col gap-2">
                        <label class="text-slate-900 dark:text-white text-sm font-semibold leading-normal"
                            for="confirm_password">Confirmer le mot de passe</label>
                        <div class="relative flex items-center">
                            <input
                                class="form-input w-full rounded-lg border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-800 text-slate-900 dark:text-white placeholder:text-slate-400 focus:border-primary focus:ring-primary h-12 pl-4 pr-11 text-base transition-colors"
                                id="confirm_password" placeholder="••••••••" type="password" name="Remail" />
                            <div class="absolute right-4 text-slate-400 pointer-events-none flex items-center">
                                <span class="material-symbols-outlined text-[20px]">lock</span>
                            </div>
                        </div>
                    </div>
                    <!-- Terms Checkbox -->
                    <div class="flex items-start gap-3 mt-2">
                        <div class="flex h-6 items-center">
                            <input
                                class="h-4 w-4 rounded border-slate-300 dark:border-slate-600 text-primary focus:ring-primary bg-white dark:bg-slate-800"
                                id="terms" name="terms" type="checkbox" />
                        </div>
                        <label class="text-sm leading-6 text-slate-500 dark:text-slate-400" for="terms">
                            J'accepte les <a class="font-semibold text-primary hover:underline" href="#">Conditions
                                d'utilisation</a> et la <a class="font-semibold text-primary hover:underline"
                                href="#">Politique de confidentialité</a>.
                        </label>
                    </div>
                    <!-- Submit Button -->
                    <button
                        class="flex w-full cursor-pointer items-center justify-center rounded-lg bg-primary hover:bg-primary-hover h-12 px-5 text-white text-base font-bold leading-normal tracking-wide shadow-md shadow-blue-500/20 transition-all active:scale-[0.98] mt-2"
                        type="submit" name="sign">
                        S'inscrire
                    </button>
                </form>
                <!-- Footer Link (Mobile Visible) -->
                <div class="mt-8 pt-6 border-t border-slate-100 dark:border-slate-800 text-center sm:hidden">
                    <p class="text-slate-500 dark:text-slate-400 text-sm">
                        Déjà un compte ? <a class="text-primary font-bold hover:underline" href="#">Se connecter</a>
                    </p>
                </div>
                <!-- Social Login Separator (Optional Addition for Modern Feel) -->
                <div class="relative flex py-6 items-center">
                    <div class="flex-grow border-t border-slate-200 dark:border-slate-700"></div>
                    <span
                        class="flex-shrink-0 mx-4 text-slate-400 dark:text-slate-500 text-xs font-medium uppercase tracking-wider">Ou
                        continuer avec</span>
                    <div class="flex-grow border-t border-slate-200 dark:border-slate-700"></div>
                </div>
                <!-- Social Buttons -->
                <div class="grid grid-cols-2 gap-4">
                    <button
                        class="flex items-center justify-center gap-2 rounded-lg border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800 px-4 py-2.5 text-sm font-medium text-slate-700 dark:text-white hover:bg-slate-50 dark:hover:bg-slate-700 transition-colors">
                        <img alt="Google Logo" class="h-5 w-5" data-alt="Google G logo in color"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuBjtWRrmGpx17MKC_kXmyToZsFJnk3feRzYdXx5yjSq4jkjZDB4xWlNxezc0uCghXEeHgp4KZtyrUZDST28vu80yrgL5bGW3AuvSimyduJGG4bWQ-8op2g3nIUdwIv-uYGqoD3jo_eDu-VY1G_pm79kQ0425UJfTKTTD5kCOaV9fzkUFnCge4YsscoOhrWgxEyIQtRxUDHIiW1ojTGlh4ibg89h9Ii-FnM8cFmqDp9DOChb1fq4J7Ce3I_mmSeKaA7SFLN2LvKJ5yo" />
                        <span>Google</span>
                    </button>
                    <button
                        class="flex items-center justify-center gap-2 rounded-lg border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800 px-4 py-2.5 text-sm font-medium text-slate-700 dark:text-white hover:bg-slate-50 dark:hover:bg-slate-700 transition-colors">
                        <img alt="Facebook Logo" class="h-5 w-5" data-alt="Facebook f logo in blue"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuCodEgthYGxPVrmkpS6cBu1IaE06LPIQhurlENU4dkBHK9IWGkAVOWFNZZXSsdMYqD03aS7QlM4FjZZ7VP3Ws_p_Wlvo796yjCzrnzuert5H5AbC_M6cPtWcFnzd3nwSHmjgqfaUiaXZ9CVYKZQuaiaXPr53rs-v-zjllB4V0gQCGMfYWHlXgP8UIxBBFEFaiHiw07D-v5LDqxSuiPsUV7etoYIsg_94q5tR-M41AeesxZvNS21_Kl0XXscgxOt_N_kcvhIk-8_j-U" />
                        <span>Facebook</span>
                    </button>
                </div>
            </div>
            <!-- Bottom Helper Text -->
            <p class="text-center text-xs text-slate-400 dark:text-slate-500 mt-8">
                © 2024 MaBagnole. Tous droits réservés.
            </p>
        </div>
    </main>
</body>

</html>