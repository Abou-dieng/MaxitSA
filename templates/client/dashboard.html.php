

    <!-- Main Content -->
    <main class="p-6 h-[90vh]   ">
        <div class="bg-black h-[80%] border border-gray-600 rounded-3xl p-8 max-w-5xl mx-auto">
            
            <!-- Top Row: Solde Compte, Total Balance, Dashboard, Ajouter compte -->
            <div class="flex items-center justify-between mb-4">
                <!-- Left Side -->

                <div class="flex items-center flex-direction-column h-[35%] space-x-6 flex-wrap h-[35%] space-x-6">
                    <div class="bg-orange-500 rounded-2xl p-4 flex items-center space-x-4">
                        <div class="bg-black  p-3 rounded-full">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2-2z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5a2 2 0 012-2h4a2 2 0 012 2v2H8V5z"></path>
                            </svg>
                        </div>
                        <div>
                            <div class="text-white font-bold text-lg">Total Balance</div>
                            <div class="text-white text-2xl font-bold">25000 FCFA</div>
                        </div>
                    </div>
                    <button class="relative top-0  bg-orange-500 hover:bg-orange-600 text-white px-6 py-3 rounded-full font-medium text-sm transition-colors">
                        Solde Compte
                    </button>
                    

                </div>

                <!-- Right Side -->
                <div class="flex items-center space-x-4">
                    <button class="bg-orange-500 hover:bg-orange-600 text-white px-6 py-3 rounded-full font-medium text-sm transition-colors">
                        Dashboard
                    </button>
                    <button class="bg-gray-700 hover:bg-gray-600 text-white px-6 py-3 rounded-full font-medium text-sm transition-colors">
                        Ajouter un compte secondaire
                    </button>
                </div>
            </div>

            <!-- Bottom Row: Voir Transactions and Voir Plus -->
            <div class="flex items-center justify-between mb-8">
                <!-- <button class="bg-orange-500 hover:bg-orange-600 text-white px-6 py-3 rounded-full font-medium text-sm transition-colors">
                    Voir Transactions
                </button> -->
                
                <a href="/client/transactions" class="bg-orange-500 hover:bg-orange-600 text-white px-6 py-3 rounded-full font-medium text-sm transition-colors">
                    Voir Plus
                </a>
            </div>

            <!-- Transactions List -->
            <div class="space-y-1">
                <!-- Transaction 1 -->
                <div class="flex items-center justify-between py-4 border-b border-gray-700 last:border-b-0">
                    <div>
                        <div class="text-white font-medium text-lg">Paiement marchand</div>
                        <div class="text-gray-400 text-sm">909760</div>
                    </div>
                    <div class="text-red-400 font-bold text-lg">-1999.00 FCFA</div>
                </div>

                <!-- Transaction 2 -->
                <div class="flex items-center justify-between py-4 border-b border-gray-700 last:border-b-0">
                    <div>
                        <div class="text-white font-medium text-lg">Dépôt reçu</div>
                        <div class="text-gray-400 text-sm">786574896</div>
                    </div>
                    <div class="text-green-400 font-bold text-lg">+1189.00 FCFA</div>
                </div>

                <!-- Transaction 3 -->
                <div class="flex items-center justify-between py-4 border-b border-gray-700 last:border-b-0">
                    <div>
                        <div class="text-white font-medium text-lg">Recharge crédit effectuée</div>
                        <div class="text-gray-400 text-sm">779087654</div>
                    </div>
                    <div class="text-red-400 font-bold text-lg">-600 FCFA</div>
                </div>
                <div class="flex items-center justify-between py-4 border-b border-gray-700 last:border-b-0">
                    <div>
                        <div class="text-white font-medium text-lg">Paiement marchand</div>
                        <div class="text-gray-400 text-sm">909760</div>
                    </div>
                    <div class="text-red-400 font-bold text-lg">-1999.00 FCFA</div>
                </div>
            </div>
        </div>
    </main>

 