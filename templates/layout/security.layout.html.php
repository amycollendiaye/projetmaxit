<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <title>Création de Compte MAXIT</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'maxit-orange': '#FF6B35',
                        'maxit-light-orange': '#FF8C42',
                        'maxit-peach': '#F5F5F5',
                        'maxit-gray': 'white'
                    }
                }
            }
        }
    </script>
</head>
<body class="h-[100vh] w-[100%] flex justify-center items-center bg-maxit-peach">
      <div class="flex w-[80%] h-[90%] justify-center items-center bg-maxit-gray">    
        <div class="w-[50%]  h-full  flex justify-center  items-center h-[100%]">
            <img src="/images/image.png" alt="">
            <!-- Votre contenu optionnel -->
        </div>
                   <?php  echo  $contentForLayout ?>

        </div>

</body>
</html>