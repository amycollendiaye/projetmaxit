
            
            <!-- Éléments décoratifs optionnels -->
      
           <div class="w-[50%] h-[80%] shadow-lg shadow-red-500/50  rounded-lg  gap-[10px] flex-col  flex  justify-center  p-10 "> 
            <div class="flex  gap-4 justify-center items-center">
                <h1 class="text-2xl font-bold text-center text-gray-800 mb-8 ">
                    CRÉATION DE COMPTE MAXIT                                    
                </h1>
                <h1 class="text-2xl font-bold text-center text-maxit-orange mb-8">
                    SA
                </h1>
            </div>
            
            <!-- Formulaire -->
                
            <form class="space-y-6   flex-col flex gap-[20px]" method=  "post" action="login">
                <!-- Numéro de téléphone -->
              <div>
                    <label class="block text-gray-700 font-medium mb-2">Numéro de télephone</label>
                    <input type="text" class="w-full p-4 bg-maxit-peach border-0 rounded-lg focus:ring-2 focus:ring-maxit-orange focus:outline-none" name= "numero" placeholder="Numéro  de téléphone">
                </div>
                
                <!-- Mot de passe -->
               <!-- <div>
                    <label class="block text-gray-700 font-medium mb-2">Votre mot de passe </label>
                    <input type="text" class="w-full p-4 bg-maxit-peach border-0 rounded-lg focus:ring-2 focus:ring-maxit-orange focus:outline-none" placeholder="Votre mot de passe secret">
                </div> -->
                
                <!-- Bouton de connexion -->
               
                
                <!-- Lien d'inscription -->
                <div class="text-center mt-6 space-y-2">
                    <p class="text-sm text-gray-600">
                        <i class="fa-solid fa-file-invoice"></i>
                         <span class="font-bold text-maxit-dark">AVEZ-VOUS INSCRIT SUR MAXIT</span>
                    </p>
                    <p class="text-sm text-gray-500">
                        Pas encore de compte? 
                        <a href="sign" class="text-maxit-orange font-bold hover:underline hover:text-maxit-orange-light transition-colors duration-300">
                            Créer un compte
                        </a>
                    </p>
                </div>
                <div class="pt-10 flex justify-center items-center">
                    <button type="submit" class="w-[40%] bg-maxit-orange hover:bg-maxit-light-orange text-white font-bold py-4 px-6 rounded-lg transform hover:scale-105 transition-all duration-200 shadow-lg">
                        SE CONNECTER
                    </button>
                </div>
            </form>
        </div>
