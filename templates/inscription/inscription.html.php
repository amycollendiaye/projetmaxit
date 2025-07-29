<?php
$errors =$this->session->get('errors');
$this->session->unset("errors");



 
?>
<div class="max-w-md mx-auto  p-6"> 
            <div class="flex gap-4">
                <h1 class="text-2xl font-bold text-center text-gray-800 mb-8">
                    CRÉATION DE COMPTE MAXIT                                    
                </h1>
                <h1 class="text-2xl font-bold text-center text-maxit-orange mb-8">
                    SA
                </h1>
            </div>
            
            <form class="space-y-6" method="post" action="inscrire" enctype="multipart/form-data">
                <!-- Nom et Prénom -->
                        <div>
    <div role="status" class=" absolute hidden  right-3 top-3" id="spinner">
                            <svg aria-hidden="true" class="w-8 h-8 text-gray-200 animate-spin dark:text-gray-600 fill-red-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor" />
                                <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill" />
                            </svg>
                            <span class="sr-only">Loading...</span>
                        </div>
                    <label class="block text-gray-700 font-medium mb-2">Numéro de la pièce d'identité</label>
                    <input type="text"    id="pieceidentite"
                            name="piece_identite"
                            pattern="^[1-2][0-9]{12}$"

 class="w-full p-4 bg-maxit-peach border-0 rounded-lg focus:ring-2 focus:ring-maxit-orange focus:outline-none" placeholder="Numéro de votre pièce d'identité">
                    <?php if (isset($errors['piece_identite'])): ?>
    <div class="text-red-500 text-sm"><?= htmlspecialchars($errors['piece_identite']) ?></div>
<?php endif; ?>
<div class="messages">
                            <p class="error-message hidden text-green-800 text-xs mt-1"></p>
                            <p class="success-message hidden text-red-800 text-xs mt-1"></p>
                        </div>
                </div>

                        <div>
   
                    <label class="block text-gray-700 font-medium mb-2">Date de Naissance</label>
                    <input  readonly type ="text"    id="datenaissance"
                            name="datenaissance"
 class="w-full p-4 bg-maxit-peach border-0 rounded-lg focus:ring-2 focus:ring-maxit-orange focus:outline-none" placeholder="Date de naissance">
                    <?php if (isset($errors['datenaissance'])): ?>
    <div class="text-red-500 text-sm"><?= htmlspecialchars($errors['datenaissance']) ?></div>
<?php endif; ?>
                </div>
                <div class="grid grid-cols-2 gap-4">
                
                    <div>
                  
                        <label class="block text-gray-700 font-medium mb-2">Nom:</label>
                        <input readonly type="text" name="nom"  id="nom" class="w-full p-4 bg-maxit-peach border-0 rounded-lg focus:ring-2 focus:ring-maxit-orange focus:outline-none" placeholder="Votre nom">
                        <?php if (isset($errors['nom'])): ?>
    <div class="text-red-500 text-sm"><?= htmlspecialchars($errors['prenom']) ?></div>
<?php endif; ?>
                    </div>
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Prénom:</label>
                        <input type="text"  readonly name="prenom"  id="prenom" class="w-full p-4 bg-maxit-peach border-0 rounded-lg focus:ring-2 focus:ring-maxit-orange focus:outline-none" placeholder="Votre prénom">
                        <?php if (isset($errors['prenom'])): ?>
                            <div class="text-red-500 text-sm"><?= htmlspecialchars($errors['prenom']) ?></div>
                        <?php endif; ?>
                    </div>
                </div>
                
                <!-- Adresse et Téléphone -->
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Adresse:</label>
                        <input readonly id="adresse"  type="text" class="w-full p-4 bg-maxit-peach border-0 rounded-lg focus:ring-2 focus:ring-maxit-orange focus:outline-none" placeholder="Votre adresse" name="adresse">
                        <?php if (isset($errors['adresse'])): ?>
                            <div class="text-red-500 text-sm"><?= htmlspecialchars($errors['adresse']) ?></div>
                        <?php endif; ?>
                    </div>
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Téléphone:</label>
                        <input type="tel"  class="w-full p-4 bg-maxit-peach border-0 rounded-lg focus:ring-2 focus:ring-maxit-orange focus:outline-none"  name="numerotelephone" placeholder="Votre téléphone">
                        <?php if (isset($errors['numerotelephone'])): ?>
                            <div class="text-red-500 text-sm"><?= htmlspecialchars($errors['numerotelephone']) ?></div>
                        <?php endif; ?>
                    </div>
                </div>
                
             
                
                <div>
   
                    <label class="block text-gray-700 font-medium mb-2"> Mot de passe</label>
                    <input type="text"    id="motdepasse"
                            name="motdepasse"
 class="w-full p-4 bg-maxit-peach border-0 rounded-lg focus:ring-2 focus:ring-maxit-orange focus:outline-none" placeholder=" Le mot de passe  secret de votre compte">
                    <?php if (isset($errors['motdepasse'])): ?>
    <div class="text-red-500 text-sm"><?= htmlspecialchars($errors['motdepasse']) ?></div>
<?php endif; ?>
                </div>
                
                <!-- Bouton CRÉER -->
                <div class="pt-4">
                    <button type="submit" class="w-full bg-maxit-orange hover:bg-maxit-light-orange text-white font-bold py-4 px-6 rounded-lg transform hover:scale-105 transition-all duration-200 shadow-lg">
                        CRÉER
                    </button>
                </div>
            </form>
        </div>
    </div>
      <script type="module" src="/assets/js/main.js"></script>



