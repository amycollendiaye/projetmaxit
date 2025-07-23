<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Création de compte - MAXIT SA</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'maxit-orange': '#FF6B35',
                        'maxit-light-orange': '#FF8C5A',
                        'maxit-orange-light': '#FFA07A',
                        'maxit-peach': '#FFF5F3',
                        'maxit-dark': '#2D3748'
                    }
                }
            }
        }
    </script>
</head>
<body class="min-h-screen bg-gradient-to-br from-orange-50 to-orange-100 flex items-center justify-center p-4">
    <div class="w-full max-w-4xl bg-white rounded-2xl shadow-2xl overflow-hidden">
        <div class="flex min-h-[600px]">
            <!-- Section gauche - Image décorative -->
          

            <!-- Section droite - Formulaire -->
            <div class="w-full lg:w-1/2 flex items-center justify-center p-8">
                <div class="w-full max-w-md">
                    <!-- En-tête -->
                   

                    <!-- Formulaire -->
                    <form class="space-y-6" method="post" action="create-account" >
                        <!-- Numéro de téléphone -->
                        <div>
                            <label class="block text-gray-700 font-medium mb-2">
                                <i class="fas fa-phone mr-2 text-maxit-orange"></i>
                                Numéro de téléphone
                            </label>
                            <input 
                                type="tel" 
                                name="numero" 
                                id="numero"
                                class="w-full p-4 bg-maxit-peach border-0 rounded-lg focus:ring-2 focus:ring-maxit-orange focus:outline-none transition-all duration-200" 
                                placeholder="Ex: +221 77 123 45 67"
                                required
                                pattern="^(\+221|221)?[0-9\s\-]{8,}$"
                            >
                        </div>

                        <!-- Solde initial -->
                        <div>
                            <label class="block text-gray-700 font-medium mb-2">
                                <i class="fas fa-wallet mr-2 text-maxit-orange"></i>
                                Solde initial (FCFA)
                            </label>
                            <input 
                                type="number" 
                                name="solde" 
                                id="solde"
                                class="w-full p-4 bg-maxit-peach border-0 rounded-lg focus:ring-2 focus:ring-maxit-orange focus:outline-none transition-all duration-200" 
                                placeholder="Ex: 5000"
                                min="0"
                                step="1"
                                required
                            >
                        </div>

                        <!-- Conditions d'utilisation -->
                        <div class="flex items-start space-x-3">
                            <input 
                                type="checkbox" 
                                id="terms" 
                                name="terms"
                                class="mt-1 h-4 w-4 text-maxit-orange focus:ring-maxit-orange border-gray-300 rounded"
                                required
                            >
                            <label for="terms" class="text-sm text-gray-600">
                                J'accepte les 
                                <a href="#" class="text-maxit-orange font-medium hover:underline">conditions d'utilisation</a> 
                                et la 
                                <a href="#" class="text-maxit-orange font-medium hover:underline">politique de confidentialité</a>
                            </label>
                        </div>

                        <!-- Bouton de création -->
                        <div class="pt-4">
                            <button 
                                type="submit" 
                                class="w-full bg-maxit-orange hover:bg-maxit-light-orange text-white font-bold py-4 px-6 rounded-lg transform hover:scale-105 transition-all duration-200 shadow-lg focus:outline-none focus:ring-2 focus:ring-maxit-orange focus:ring-offset-2"
                            >
                                <i class="fas fa-user-plus mr-2"></i>
                                CRÉER MON COMPTE
                            </button>
                        </div>

                        <!-- Lien de connexion -->
                    
                    </form>

                    <!-- Message de succès (caché par défaut) -->
                   
                    </div>
                </div>
            </div>
        </div>
    </div>


</html>