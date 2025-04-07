<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Detalhes do Produto - Calabouço dos Jogos</title>
</head>
<body>
    <?php include 'includes/header.php'; ?>
    

    <!-- Verifica se o parametro ID foi passado -->
    <?php
    if (!isset($_GET['id'])) {
        echo "<div class='erro'>Produto não encontrado</div>";
        exit;
    }

    $id = $_GET['id'];
    $jogos_json = file_get_contents('data/jogos.json');
    $jogos = json_decode($jogos_json, true);
    /* Inicializa a variavel $jogo como null e então percorre o array $jogos e encontra o jogo com o id igual ao id passado como parametro */
    $jogo = null;
    foreach ($jogos as $j) {
        if ($j['id'] == $id) {
            $jogo = $j;
            break;
        }
    }

    if (!$jogo) {
        echo "<div class='erro'>Produto não encontrado</div>";
        exit;
    }
    ?>

<div class="produto-container">
    <a href="catalogo.php" class="btn voltar">Voltar para o Catálogo</a>
    
    <div class="produto-detalhe">
        <div class="produto-imagem">
            <?php
            /* Pega a imagem atual da URL, se não estiver setada, pega a imagem principal */
            $current_image = isset($_GET['img']) ? $_GET['img'] : $jogo['imagem_principal'];
            
            /* Exibe a imagem atual */
            echo '<img src="img/' . $current_image . '" id="imagem-principal" class="imagem-principal" alt="' . $jogo['nome'] . '">';
            
            /* Exibe o carrossel de imagens */
            echo '<div class="carrossel">';
            foreach ($jogo['imagens'] as $imagem) {
                /* Cada imagem do carrossel é um link que pega o id do produto e a imagem selecionada e passa como parametro para a url */
                echo '<a href="produto.php?id=' . $jogo['id'] . '&img=' . $imagem . '">';
                echo '<img src="img/' . $imagem . '" class="carrossel-imagem" alt="' . $jogo['nome'] . '">';
                echo '</a>';
            }
            echo '</div>';
            ?>
        </div>
        
        <div class="produto-info">
            <h1><?php echo $jogo['nome']; ?></h1>
            <span class="categoria">Categoria: <?php echo $jogo['categoria']; ?></span>
            <p class="preco">R$ <?php echo number_format($jogo['preco'], 2, ',', '.'); ?></p>
            <p class="descricao"><strong>Descrição:</strong> <?php echo $jogo['descricao']; ?></p>
            
            <div class="componentes">
                <h3>Componentes Inclusos:</h3>
                <ul>
                    <?php 
                    foreach ($jogo['componentes'] as $componente) {
                        echo '<li>' . $componente . '</li>';
                    }
                    ?>
                </ul>
            </div>
            
          
        </div>
    </div>
</div>

</body>
</html>


