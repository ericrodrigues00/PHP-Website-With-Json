<?php
include 'includes/header.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Catálogo - Board Game Dungeon</title>
    <link rel="stylesheet" href="css/style.css">

    
</head>

<body>
  
    <!-- São listadas as categorias, cada uma delas recebe a classe btn, que é estilizada no css. E cada uma passa um parametro para o link, que é a categoria selecionada. -->
    <div class="catalogo-container">
        <div class="categorias">
            <h3>Filtrar por categoria:</h3>
            <a href="catalogo.php" class="btn">Todos</a>
            <a href="catalogo.php?categoria=Estratégia" class="btn">Estratégia</a>
            <a href="catalogo.php?categoria=RPG" class="btn">RPG</a>
            <a href="catalogo.php?categoria=Cooperativo" class="btn">Cooperativo</a>
            <a href="catalogo.php?categoria=Familia" class="btn">Familia</a>
        </div>

        <div class="produtos-grid">
            <?php
            $jogos_json = file_get_contents('data/jogos.json');
            $jogos = json_decode($jogos_json, true);
            
            /*  Verificar se há um filtro de categoria */
            $categoria_filtro = isset($_GET['categoria']) ? $_GET['categoria'] : null;
            
            foreach ($jogos as $jogo) {
                /* Se houver filtro de categoria e o jogo não for dessa categoria, pular, caso contrario, segue o resto do loop e exibe o jogo.*/
                if ($categoria_filtro && $jogo['categoria'] != $categoria_filtro) {
                    continue;
                }
                echo '<div class="produto-card">';
                echo '<img src="img/' . $jogo['imagem_principal'] . '" alt="' . $jogo['nome'] . '">';
                echo '<h3>' . $jogo['nome'] . '</h3>';
                echo '<h3>' . $jogo['categoria'] . '</h3>';
                echo '<p class="preco">R$ ' . number_format($jogo['preco'], 2, ',', '.') . '</p>';
                echo '<a href="produto.php?id=' . $jogo['id'] . '" class="btn">Ver detalhes</a>';
                echo '</div>';
            }
            ?>
            
        </div>
    </div>
</body>

</html>