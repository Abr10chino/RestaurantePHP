<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sakura Dreams</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Restaurante Jápones en guatemala">
    <meta name="keywords" content="Comida japonesa, guatemala, postres japoneses">
    <meta name="author" content="Sakura Dreams">
    <meta property="og:title" content="Sakura Dreams">
    <meta property="og:description" content="Menu de comida japonesa en guatemala">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../../imagenes/logo_SakuraDreams.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&family=Sawarabi+Mincho&display=swap" rel="stylesheet">
</head>
<body style="background-color: #fbd5e5;">
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark mi-fondo">
        <div class="container-fluid">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="../../imagenes/logo_SakuraDreams.ico" alt="" width="40" class="d-inline-block align-text-top">
                    SAKURA DREAMS
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <?php 
                        $elementosHeader = [
                            ["directorio" => "../../index.php", "Nombre" => "Inicio", "clase"=> "nav-link"],
                            ["directorio" =>"../../Platillos/menu.php", "Nombre" => "Menú", "clase"=> "nav-link"],
                            ["directorio" =>"../../InfoPersonal/personalSakura.php", "Nombre" => "Nuestro Equipo", "clase"=> "nav-link"],
                            ["directorio" =>"../../recetasPlatillos/recetas.php", "Nombre" => "Nuestras Recetas", "clase"=> "nav-link active"],
                            ["directorio" =>"../../Resenias/resenias.php", "Nombre" => "Reseñas", "clase"=> "nav-link"],
                            ["directorio" =>"../../Reservaciones/index.php", "Nombre" => "Reservaciones", "clase"=> "nav-link"]
                        ];
                        foreach($elementosHeader as $elemento){
                            echo '<li class="nav-item">';
                            echo '<a class="' . $elemento["clase"] . '" href="' . $elemento["directorio"] . '">' . $elemento["Nombre"] . '</a>';
                            echo '</li>';
                        }
                    ?>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container recipe-container">
        <div class="fixed-left">
            <img src="../../imagenes/platofuerte_Maki Rolls.jpg" class="recipe-image" alt="Maki Rolls">
            <p class="recipe-description">Rollitos de sushi rellenos de pescado fresco, verduras y arroz avinagrado.</p>
        </div>
            <div class="steps-container">
                <div class="row ingredients">
                    <div class="col-12">
                    <h4 class="recipe-title">Ingredientes:</h4>
                    <ul>
                        <?php 
                            $listaIngredientes = [
                                ["descripcion" => "2 tazas de arroz para sushi"],
                                ["descripcion" => "2 ½ tazas de agua"],
                                ["descripcion" => "¼ taza de vinagre de arroz"],
                                ["descripcion" => "2 cucharadas de azúcar"],
                                ["descripcion" => "1 cucharadita de sal"],
                                ["descripcion" => "4 hojas de nori (alga)"]
                            ];
                            foreach ($listaIngredientes as $ingrediente){
                                echo'<li class="ingredient-item">'.$ingrediente["descripcion"].'</li>';
                            }
                        ?>
                    </ul>
                    </div>
                </div>
            <div class="row ingredients">
                <div class="col-12">
                    <h4 class="recipe-title">Rellenos:</h4>
                    <ul>
                        <?php 
                            $listaIngredientes = [
                                ["descripcion" => "Pescado fresco en rodajas (atún, salmón, etc.)"],
                                ["descripcion" => "Pepino (en juliana)"],
                                ["descripcion" => "Aguacate (en rodajas)"],
                                ["descripcion" => "Opcional: palitos de cangrejo, camarones tempura o queso crema"]
                            ];
                            foreach ($listaIngredientes as $ingrediente){
                                echo'<li class="ingredient-item">'.$ingrediente["descripcion"].'</li>';
                            }
                        ?>
                    </ul>
                </div>
            </div>
            <div class="row steps">
                <div class="col-12">
                    <h4 class="recipe-title">Pasos:</h4>
                    <ol>
                        <?php 
                            $listaPasos = [
                                ["descripcion" =>"Enjuague el arroz para sushi hasta que el agua salga clara. Cocine con agua en una olla arrocera o en una olla."],
                                ["descripcion" =>"En una cacerola pequeña, caliente el vinagre de arroz, el azúcar y la sal hasta que se disuelva. Mézclalo con el arroz cocido y déjalo enfriar."],
                                ["descripcion" =>"Coloque una hoja de nori sobre una estera de bambú para sushi. Extienda una fina capa de arroz sobre el nori, dejando un borde de 1 pulgada en la parte superior."],
                                ["descripcion" =>"Agregue los rellenos que desee en una línea a lo largo del arroz."],
                                ["descripcion" =>"Enrolle bien el sushi usando el tapete, sellando el borde con un poco de agua."],
                                ["descripcion" =>"Corte el rollo en 6-8 trozos con un cuchillo afilado."],
                                ["descripcion" =>"Sirva con salsa de soja, wasabi y jengibre encurtido."]
                            ];
                            foreach ($listaPasos as $paso){
                                echo'<li class="step-item">'.$paso["descripcion"].'</li>';
                            }
                        ?>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">
        <p>&copy; 2025 Sakura Dreams.</p>
    </footer>
</body>    
</html>