<?php
$titulo_pagina = 'Calabouço dos Jogos - Home';
include 'includes/header.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Calabouço dos Jogos</title>

</head>

<body>

<section class="destaques">
    <section class="outter_container">
    <div class="container">
        <h2>Bem-vindo ao site da Calabouço dos Jogos!</h2>
        <p>Somos uma comunidade especializada em Board Games e RPGs, onde você encontra uma seleção criteriosa dos melhores jogos do mercado. Aqui, nossa paixão por jogos se reflete na curadoria dos nossos produtos, com recomendações mensais que destacam as novidades e os clássicos que não podem faltar na sua coleção.</p>

        <h2>Explore nosso catálogo completo!</h2>
        <p>Além das sugestões do mês, convidamos você a explorar o nosso catálogo completo, que reúne uma variedade de jogos para todos os gostos e níveis de experiência – desde estratégias elaboradas até aventuras épicas de RPG. Cada jogo é escolhido pensando na diversão e na qualidade da experiência, garantindo que você tenha sempre o que há de melhor para suas sessões de jogos com amigos e familiares. Seja bem-vindo à nossa comunidade e divirta-se descobrindo novas aventuras!</p>

    </div>
    </section>
    <h2>Sugestões Do Mês:</h2>
    <div class="produtos-grid">
        <!-- Este trecho recebe o conteudo do arquivo jogos.json e então exibe os 4 primeiros jogos através do foreach. -->
    <?php
    $jogos_json = file_get_contents('data/jogos.json');
    $jogos = json_decode($jogos_json, true);
    
    $contador = 0;
    foreach ($jogos as $jogo) {
        if ($contador >= 4) break;
        
        echo '<div class="produto-card">';
        echo '<img src="img/' . $jogo['imagem_principal'] . '" alt="' . $jogo['nome'] . '">';
        echo '<h3>' . $jogo['nome'] . '</h3>';
        echo '<p class="preco">R$ ' . number_format($jogo['preco'], 2, ',', '.') . '</p>';
        echo '<a href="produto.php?id=' . $jogo['id'] . '" class="btn">Ver detalhes</a>';
        echo '</div>';
        
        $contador++;
    }
    ?>
</div>
</section>

    
    

</body>

</html>
