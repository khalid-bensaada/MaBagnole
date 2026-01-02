<?php
session_start();
require_once 'classes/Database.php';
require_once 'classes/Client.php';

$db = new Database();
$pdo = $db->getPdo();

if (isset($_POST['login'])) {

    $errors = [];
    $password = $_POST['password'];
    $email = $_POST['email'];

    $found = $client->foundEmail($email);
    if (!$found) {
        $errors['email_error'] = "sorry email you entered is not valid try again";
    }

    $verify = $client->verifyP($password);
    if (!$verify) {
        $errors['password_error'] = "sorry the password invalid";
    }

    $_SESSION['name'] = $client->getName();
    $_SESSION['role'] = $client->getRole();

    switch($client->getRole()){
        case 'admin':
            header("Location: admin.php");
            
        case 'client':
            header("Location: clientH.php");
            
    }

}

?>
<!DOCTYPE html>

<html class="light" lang="fr">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Connexion - MaBagnole</title>
    <!-- Google Fonts: Plus Jakarta Sans -->
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&amp;display=swap"
        rel="stylesheet" />
    <!-- Material Symbols -->
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <!-- Tailwind CSS with Plugins -->
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
                    },
                    fontFamily: {
                        "display": ["Plus Jakarta Sans", "sans-serif"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "2xl": "1rem",
                        "full": "9999px"
                    },
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

        /* Smooth fade for background image */
        .bg-fade-enter {
            animation: fadeIn 1.5s ease-out forwards;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }
    </style>
</head>

<body
    class="bg-background-light dark:bg-background-dark text-[#111418] dark:text-white font-display antialiased min-h-screen flex flex-col">
    <!-- Background Image with Overlay -->
    <div class="fixed inset-0 z-0 w-full h-full bg-fade-enter">
        <div
            class="absolute inset-0 bg-gradient-to-br from-background-light/90 to-background-light/80 dark:from-background-dark/95 dark:to-background-dark/90 z-10">
        </div>
        <img alt="Modern luxury car on a dark background" class="w-full h-full object-cover object-center"
            data-alt="Modern luxury car on a dark background"
            src="https://lh3.googleusercontent.com/aida-public/AB6AXuB0uyRlvoYi1j4jmQil4DwvFUyt9t7pUTzHAHmwrmMWydumrAGr0uqPYWHkgRKtTPUE6V4VZVdQ7xgPV-BPQ4QtpLuwXP05e11fTh_8lS8fN2RRz6t_q1YrqZGqVfNTdfKXwoSjJK3K4jujJK90Woiux5mTzFif98rmAclXfmZ-ZYrEOJvWOuHSw9OVGI47L4a0k9HMkl3l4ZWwQcVinsCgQ3cR0CzTDIwHc3wDAPNbAE1cYhRBSD1caPg39e8aJzDX51-TGm_qb70" />
    </div>
    <!-- Main Content Wrapper -->
    <div class="relative z-10 flex flex-1 flex-col items-center justify-center w-full px-4 py-12 sm:px-6 lg:px-8">
        <!-- Login Card -->
        <div
            class="w-full max-w-[480px] bg-white dark:bg-[#1a2632] rounded-2xl shadow-xl overflow-hidden border border-[#f0f2f4] dark:border-gray-700">
            <!-- Card Header: Logo & Title -->
            <div class="flex flex-col items-center pt-10 pb-6 px-8 text-center">
                <div class="mb-4 flex items-center justify-center p-3 bg-primary/10 rounded-full text-primary">
                    <svg class="w-8 h-8" fill="none" viewbox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_6_319)">
                            <path
                                d="M8.57829 8.57829C5.52816 11.6284 3.451 15.5145 2.60947 19.7452C1.76794 23.9758 2.19984 28.361 3.85056 32.3462C5.50128 36.3314 8.29667 39.7376 11.8832 42.134C15.4698 44.5305 19.6865 45.8096 24 45.8096C28.3135 45.8096 32.5302 44.5305 36.1168 42.134C39.7033 39.7375 42.4987 36.3314 44.1494 32.3462C45.8002 28.361 46.2321 23.9758 45.3905 19.7452C44.549 15.5145 42.4718 11.6284 39.4217 8.57829L24 24L8.57829 8.57829Z"
                                fill="currentColor"></path>
                        </g>
                        <defs>
                            <clippath id="clip0_6_319">
                                <rect fill="white" height="48" width="48"></rect>
                            </clippath>
                        </defs>
                    </svg>
                </div>
                <h2 class="text-2xl font-bold leading-tight tracking-tight text-[#111418] dark:text-white">Connexion
                </h2>
                <p class="mt-2 text-base text-[#617589] dark:text-gray-400">Accédez à votre espace client MaBagnole</p>
            </div>
            <!-- Form Container -->
            <div class="px-8 pb-10">
                <form action="login.php" class="space-y-5" method="POST">
                    <!-- Email Input -->
                    <div class="space-y-2">
                        <label class="text-sm font-medium leading-normal text-[#111418] dark:text-gray-200" for="email">
                            Email
                        </label>
                        <div class="relative">
                            <input
                                class="form-input flex w-full resize-none rounded-lg border border-[#dbe0e6] dark:border-gray-600 bg-white dark:bg-gray-800 text-[#111418] dark:text-white focus:border-primary focus:ring-1 focus:ring-primary h-12 pl-11 pr-4 text-base placeholder:text-[#617589] dark:placeholder:text-gray-500 transition-colors"
                                id="email" placeholder="votre@email.com" required="" type="email" value=""
                                name="email" />
                            <div
                                class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none text-[#617589] dark:text-gray-500">
                                <span class="material-symbols-outlined text-[20px]">mail</span>
                            </div>
                        </div>
                    </div>
                    <!-- Password Input -->
                    <div class="space-y-2">
                        <div class="flex items-center justify-between">
                            <label class="text-sm font-medium leading-normal text-[#111418] dark:text-gray-200"
                                for="password">
                                Mot de passe
                            </label>
                        </div>
                        <div class="relative flex w-full items-stretch">
                            <input
                                class="form-input flex w-full min-w-0 resize-none rounded-lg border border-[#dbe0e6] dark:border-gray-600 border-r-0 rounded-r-none bg-white dark:bg-gray-800 text-[#111418] dark:text-white focus:border-primary focus:ring-1 focus:ring-primary h-12 pl-11 text-base placeholder:text-[#617589] dark:placeholder:text-gray-500 transition-colors z-10"
                                id="password" placeholder="********" required="" type="password" value=""
                                name="password" />
                            <div
                                class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none text-[#617589] dark:text-gray-500 z-20">
                                <span class="material-symbols-outlined text-[20px]">lock</span>
                            </div>
                            <button
                                class="flex items-center justify-center px-3 border border-[#dbe0e6] dark:border-gray-600 border-l-0 rounded-r-lg bg-white dark:bg-gray-800 text-[#617589] dark:text-gray-400 hover:text-primary dark:hover:text-primary transition-colors"
                                type="button">
                                <span class="material-symbols-outlined text-[20px]">visibility</span>
                            </button>
                        </div>
                    </div>
                    <!-- Checkbox & Forgot Password -->
                    <div class="flex items-center justify-between py-1">
                        <label class="flex items-center gap-x-2 cursor-pointer group">
                            <input
                                class="h-4 w-4 rounded border-[#dbe0e6] dark:border-gray-600 text-primary focus:ring-primary focus:ring-offset-0 bg-transparent"
                                type="checkbox" />
                            <span
                                class="text-sm font-normal text-[#111418] dark:text-gray-300 group-hover:text-primary transition-colors">Se
                                souvenir de moi</span>
                        </label>
                        <a class="text-sm font-medium text-primary hover:text-blue-600 transition-colors" href="#">
                            Mot de passe oublié ?
                        </a>
                    </div>
                    <!-- Error Message Placeholder -->
                    <!-- Un-comment the line below to show an active error state -->
                    <!-- <div class="p-3 rounded bg-red-50 dark:bg-red-900/20 text-red-600 dark:text-red-400 text-sm font-medium flex items-center gap-2"><span class="material-symbols-outlined text-[18px]">error</span> Identifiants incorrects. Veuillez réessayer.</div> -->
                    <!-- Submit Button -->
                    <button
                        class="flex w-full cursor-pointer items-center justify-center overflow-hidden rounded-lg h-12 px-4 bg-primary hover:bg-blue-600 text-white text-base font-bold leading-normal tracking-[0.015em] shadow-md transition-all active:scale-[0.98]"
                        type="submit" name="login">
                        <span class="truncate">Se connecter</span>
                    </button>
                </form>
                <!-- Divider -->
                <div class="relative flex py-6 items-center">
                    <div class="flex-grow border-t border-[#e5e7eb] dark:border-gray-700"></div>
                    <span
                        class="flex-shrink-0 mx-4 text-xs font-medium text-[#617589] dark:text-gray-500 uppercase tracking-wider">Ou</span>
                    <div class="flex-grow border-t border-[#e5e7eb] dark:border-gray-700"></div>
                </div>
                <!-- Sign Up Link -->
                <div class="text-center">
                    <p class="text-sm text-[#617589] dark:text-gray-400">
                        Pas encore de compte ?
                        <a class="font-bold text-primary hover:underline ml-1" href="sign.php">
                            Créer un compte
                        </a>
                    </p>
                </div>
            </div>
        </div>
        <!-- Back to Home Link -->
        <div class="mt-8 flex items-center justify-center">
            <a class="group flex items-center gap-2 text-sm font-medium text-[#617589] dark:text-gray-300 hover:text-[#111418] dark:hover:text-white transition-colors bg-white/80 dark:bg-black/40 backdrop-blur-sm px-4 py-2 rounded-full"
                href="#">
                <span
                    class="material-symbols-outlined text-[18px] transition-transform group-hover:-translate-x-1">arrow_back</span>
                Retour à l'accueil
            </a>
        </div>
    </div>
</body>

</html>