

    <!-- Main Content -->
    <main class="p-2 w-[100%] flex justify-center">
        <div class="bg-black border border-gray-600 rounded-3xl p-4  w-[55%]">
            
            <!-- Search Filters -->
            <div class="flex items-center justify-between mb-8">
                <!-- Search by Date -->
                <div class="relative">
                    <div class="bg-gray-200 rounded-full px-4 py-3 flex items-center space-x-3 min-w-[200px]">
                        <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                        <input type="text" placeholder="Recherche par date" class="bg-transparent text-gray-600 placeholder-gray-500 outline-none flex-1">
                        <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                </div>

                <!-- Search by Type -->
                <div class="relative">
                    <div class="bg-gray-200 rounded-full px-4 py-3 flex items-center space-x-3 min-w-[200px]">
                        <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                        <input type="text" placeholder="Recherche par type" class="bg-transparent text-gray-600 placeholder-gray-500 outline-none flex-1">
                        <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </div>
                </div>

                <!-- Close button -->
                <div class="flex items-center space-x-4">
                    <button class="text-gray-400 hover:text-white">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                    <button class="bg-orange-500 hover:bg-orange-600 text-white px-6 py-3 rounded-full font-medium transition-colors">
                        Confirmer
                    </button>
                </div>
            </div>

            <!-- Transactions List Container -->
            <div class="bg-black border border-gray-600 rounded-2xl p-6 mb-6">
                <div class="space-y-4">
                    <!-- Transaction 1 -->
                    <div class="flex items-center justify-between py-3">
                        <div>
                            <div class="text-white font-medium text-lg">Paiement marchand</div>
                            <div class="text-gray-400 text-sm">909760</div>
                        </div>
                        <div class="text-red-400 font-bold text-lg">-1999.00 FCFA</div>
                    </div><hr>

                    <!-- Transaction 2 -->
                    <div class="flex items-center justify-between py-3">
                        <div>
                            <div class="text-white font-medium text-lg">Dépôt reçu</div>
                            <div class="text-gray-400 text-sm">786574896</div>
                        </div>
                        <div class="text-green-400 font-bold text-lg">+1189.00 FCFA</div>
                    </div><hr>

                    <!-- Transaction 3 -->
                    <div class="flex items-center justify-between py-3">
                        <div>
                            <div class="text-white font-medium text-lg">Recharge crédit effectuée</div>
                            <div class="text-gray-400 text-sm">779087654</div>
                        </div>
                        <div class="text-red-400 font-bold text-lg">-600 FCFA</div>
                    </div><hr>

                    <!-- Transaction 4 -->
                    <div class="flex items-center justify-between py-3">
                        <div>
                            <div class="text-white font-medium text-lg">Paiement marchand</div>
                            <div class="text-gray-400 text-sm">909760</div>
                        </div>
                        <div class="text-red-400 font-bold text-lg">-1999.00 FCFA</div>
                    </div><hr>

                    <!-- Transaction 5 -->
                    <div class="flex items-center justify-between py-3">
                        <div>
                            <div class="text-white font-medium text-lg">Dépôt reçu</div>
                            <div class="text-gray-400 text-sm">786574896</div>
                        </div>
                        <div class="text-green-400 font-bold text-lg">+1189.00 FCFA</div>
                    </div><hr>

                    <!-- Transaction 6 -->
                    <div class="flex items-center justify-between py-3">
                        <div>
                            <div class="text-white font-medium text-lg">Recharge crédit effectuée</div>
                            <div class="text-gray-400 text-sm">779087654</div>
                        </div>
                        <div class="text-red-400 font-bold text-lg">-600 FCFA</div>
                    </div>
                </div>
            </div>

            <!-- Pagination -->
            <div class="flex items-center justify-center space-x-2">
                <!-- Previous button -->
                <button class="text-gray-400 hover:text-white p-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                </button>

                <!-- Page numbers -->
                <button class="text-white bg-gray-800 hover:bg-gray-700 px-3 py-2 rounded font-medium">1</button>
                <button class="text-orange-500 hover:text-orange-400 px-3 py-2 rounded font-medium">2</button>
                <button class="text-white hover:text-gray-300 px-3 py-2 rounded font-medium">3</button>

                <!-- Next button -->
                <button class="text-gray-400 hover:text-white p-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </button>
            </div>
        </div>
    </main>

  