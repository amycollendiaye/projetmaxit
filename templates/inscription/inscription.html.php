<?php $errors = $this->session->get('errors'); 
$this->session->unset()
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
                <div class="grid grid-cols-2 gap-4">
                    <div>
                  
                        <label class="block text-gray-700 font-medium mb-2">Nom:</label>
                        <input type="text" name="nom" class="w-full p-4 bg-maxit-peach border-0 rounded-lg focus:ring-2 focus:ring-maxit-orange focus:outline-none" placeholder="Votre nom">
                        <?php if (isset($errors['nom'])): ?>
    <div class="text-red-500 text-sm"><?= htmlspecialchars($errors['prenom']) ?></div>
<?php endif; ?>
                    </div>
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Prénom:</label>
                        <input type="text" name="prenom" class="w-full p-4 bg-maxit-peach border-0 rounded-lg focus:ring-2 focus:ring-maxit-orange focus:outline-none" placeholder="Votre prénom">
                        <?php if (isset($errors['prenom'])): ?>
                            <div class="text-red-500 text-sm"><?= htmlspecialchars($errors['prenom']) ?></div>
                        <?php endif; ?>
                    </div>
                </div>
                
                <!-- Adresse et Téléphone -->
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Adresse:</label>
                        <input type="text" class="w-full p-4 bg-maxit-peach border-0 rounded-lg focus:ring-2 focus:ring-maxit-orange focus:outline-none" placeholder="Votre adresse" name="adresse">
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
                
                <!-- Numéro de pièce d'identité -->
                <div>
                    <label class="block text-gray-700 font-medium mb-2">Numéro de la pièce d'identité</label>
                    <input type="text" name="pieceidentite"
 class="w-full p-4 bg-maxit-peach border-0 rounded-lg focus:ring-2 focus:ring-maxit-orange focus:outline-none" placeholder="Numéro de votre pièce d'identité">
                    <?php if (isset($errors['piece_identite'])): ?>
    <div class="text-red-500 text-sm"><?= htmlspecialchars($errors['piece_identite']) ?></div>
<?php endif; ?>
                </div>
                
                <!-- Photos -->
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Photo NIN recto</label>
                            <label for="fileRecto" class="w-full h-32 bg-maxit-peach rounded-lg border-2 border-dashed border-maxit-orange flex items-center justify-center cursor-pointer hover:bg-opacity-80 transition-all block">

                    <input type="file" name="photo_recto" id="fileRecto" class="hidden" accept="image/*">
                            <div class="text-maxit-orange text-4xl">
                                <i class="fa-solid fa-images"></i>
                            </div>
                        </label>
                        <?php if (isset($errors['recto'])): ?>
    <div class="text-red-500 text-sm"><?= htmlspecialchars($errors['recto']) ?></div>
<?php endif; ?>
                    </div>
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Photo NIN verso</label>
                        <label for="fileVerso" class="w-full h-32 bg-maxit-peach rounded-lg border-2 border-dashed border-maxit-orange flex items-center justify-center cursor-pointer hover:bg-opacity-80 transition-all block">
                            <input type="file" name="photo_verso" id="fileVerso" class="hidden" accept="image/*">
                            <div class="text-maxit-orange text-4xl">
                                <i class="fa-solid fa-images"></i>
                            </div>
                        </label>
                        <?php if (isset($errors['verso'])): ?>
    <div class="text-red-500 text-sm"><?= htmlspecialchars($errors['verso']) ?></div>
<?php endif; ?>
                    </div>
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


</body>
</html>