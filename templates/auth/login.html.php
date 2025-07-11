<div class="container mx-auto px-4 py-8">
        <div class="flex flex-col lg:flex-row items-center justify-center gap-8 max-w-6xl mx-auto">
            
            <!-- Section gauche - Présentation -->
            <div class="flex-1 text-white space-y-6 max-w-md">
                <div class="space-y-4">
                    <h1 class="text-4xl lg:text-5xl font-bold">
                        Max tes offres<br>
                        <span class="text-3xl lg:text-4xl">et services</span>
                    </h1>
                    
                    <div class="flex items-center space-x-3">
                        <div class="w-12 h-12 bg-orange-500 rounded-lg flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z"/>
                            </svg>
                        </div>
                        <span class="text-2xl font-bold">Max it</span>
                    </div>
                </div>
                
                <div class="space-y-4">
                    <p class="text-lg">
                        <span class="font-semibold">Tout Orange</span> au même endroit<br>
                        avec la nouvelle application
                    </p>
                    
                    <div class="space-y-2">
                        <p class="text-sm">Disponible sur</p>
                        <div class="flex space-x-2">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3c/Download_on_the_App_Store_Badge.svg/135px-Download_on_the_App_Store_Badge.svg.png" alt="App Store" class="h-8">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/78/Google_Play_Store_badge_EN.svg/135px-Google_Play_Store_badge_EN.svg.png" alt="Google Play" class="h-8">
                        </div>
                        <p class="text-xs">Medibox 1777</p>
                    </div>
                </div>
            </div>
            
            <!-- Section droite - Formulaire de connexion -->
            <div class="flex-1 max-w-md w-full">
                <div class="bg-white rounded-2xl shadow-2xl p-8 space-y-6">
                    <div class="text-center">
                        <h2 class="text-2xl font-bold text-gray-800 mb-2">MAX IT</h2>
                        <div class="w-12 h-1 bg-orange-500 mx-auto rounded-full"></div>
                    </div>
                    
                    <?php
$errors = $_SESSION['flash_errors'] ?? [];
unset($_SESSION['flash_errors']);
?>
<?php if (!empty($errors)): ?>
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded-lg text-sm mb-4">
        <?php foreach ($errors as $field => $messages): ?>
            <?php foreach ($messages as $msg): ?>
                <div><?php echo htmlspecialchars($msg); ?></div>
            <?php endforeach; ?>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
                    
                    <form action="/login" method="POST" class="space-y-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                            Entrez votre numéro
                            </label>
                            <input 
                                type="text" 
                                name="login"
                                placeholder="Entrez votre numéro"
                                class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-orange-500 focus:border-transparent outline-none transition-all duration-200"
                                value="<?php echo htmlspecialchars($_POST['login'] ?? ''); ?>"
                            >
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                Entrer votre mot de passe
                            </label>
                            <input 
                                type="password" 
                                name="password"
                                placeholder="Mot de passe"
                                class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-orange-500 focus:border-transparent outline-none transition-all duration-200"
                                autocomplete="new-password"

                            >
                        </div>
                        
                        <div class="text-right">
                            <a href="forgot-password.php" class="text-sm text-orange-600 hover:text-orange-700 transition-colors">
                                Mot de passe oublié?
                            </a>
                        </div>
                        
                        <button 
                            type="submit"
                            class="w-full bg-gray-800 text-white py-3 rounded-lg font-semibold hover:bg-gray-700 transition-colors duration-200 transform hover:scale-105"
                        >
                            Se connecter
                        </button>
                        
                        <div class="text-center">
                            <span class="text-gray-500 text-sm">ou</span>
                        </div>
                        
                        <a 
                            href="/account/create"
                            class="w-full block text-center bg-white border-2 border-gray-300 text-gray-700 py-3 rounded-lg font-semibold hover:bg-gray-50 transition-colors duration-200"
                        >
                            Créer Compte
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>

