<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MAX IT - Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .notification-dot {
            position: absolute;
            top: -2px;
            right: -2px;
            width: 8px;
            height: 8px;
            background-color: #ef4444;
            border-radius: 50%;
        }
    </style>
</head>
<body class="bg-black min-h-screen ">
    <header class="bg-black border-b border-gray-700 px-6 py-4 max-w-5xl mx-auto">
        <div class="flex items-center justify-between">

        <div class="flex items-center space-x-3">
                <div class="bg-orange-500 p-2 rounded-md">
                    <span class="text-white font-bold text-xs">MAX</span>
                </div>
                <h1 class="text-white text-xl font-bold">
                    MAX <span class="text-orange-500">IT</span>
                </h1>
            </div>


            <div class="flex items-center space-x-4">
                <div class="text-right">
                    <div class="text-white font-medium">Abzo Dieng</div>
                    <div class="text-orange-500 text-sm font-semibold">785474553</div>
                </div>
                <div class="relative">
                    <div class="w-10 h-10 bg-gray-600 rounded-full flex items-center justify-center">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                    <div class="notification-dot"></div>
                </div>
                <div class="relative">
                    <svg class="w-6 h-6 text-white cursor-pointer" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-5 5v-5z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7H6a2 2 0 00-2 2v9a2 2 0 002 2h3m8-13V5a2 2 0 00-2-2H6a2 2 0 00-2 2v9a2 2 0 002 2h3"></path>
                    </svg>
                    <div class="notification-dot"></div>
                </div>
            </div>
        </div>
    </header>

    <?php  ?>
    
</body>
</html>