<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personagens de Yugioh</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Personagens de Yugioh</h1>

        <!-- Container dos cards -->
        <div class="container">

            <div class="card">
                <img src="img/1.png" alt="Yugi Muto">
                <form action="personagem.php" method="get">
                    <button type="submit" name="personagem" value="Yugi">Yugi Muto</button>
                </form>
            </div>

            <div class="card">
                <img src="img/2.png" alt="Seto Kaiba">
                <form action="personagem.php" method="get">
                    <button type="submit" name="personagem" value="Kaiba">Seto Kaiba</button>
                </form>
            </div>

            <div class="card">
                <img src="img/3.png" alt="Joey Wheeler">
                <form action="personagem.php" method="get">
                    <button type="submit" name="personagem" value="Joey">Joey Wheeler</button>
                </form>
            </div>

            <div class="card">
                <img src="img/4.png" alt="Téa Gardner">
                <form action="personagem.php" method="get">
                    <button type="submit" name="personagem" value="Tea">Téa Gardner</button>
                </form>
            </div>

            <div class="card">
                <img src="img/5.png" alt="Tristan Taylor">
                <form action="personagem.php" method="get">
                    <button type="submit" name="personagem" value="Tristan">Tristan Taylor</button>
                </form>
            </div>

        </div>
    </main>

    <?php
// Recebe o personagem do link
$personagem = $_GET['personagem'] ?? null;

// Array com informações dos personagens
$info = [
    "Yugi" => [
        "nome" => "Yugi Muto",
        "img" => "img/1.png",
        "descricao" => "O protagonista da série, mestre do jogo de cartas Duel Monsters."
    ],
    "Kaiba" => [
        "nome" => "Seto Kaiba",
        "img" => "img/2.png",
        "descricao" => "O rival de Yugi, dono da KaibaCorp e especialista em Dragão Branco de Olhos Azuis."
    ],
    "Joey" => [
        "nome" => "Joey Wheeler",
        "img" => "img/3.png",
        "descricao" => "Amigo leal de Yugi e duelista talentoso."
    ],
    "Tea" => [
        "nome" => "Téa Gardner",
        "img" => "img/4.png",
        "descricao" => "Amiga de Yugi, apoia o grupo e incentiva os duelistas."
    ],
    "Tristan" => [
        "nome" => "Tristan Taylor",
        "img" => "img/5.png",
        "descricao" => "Amigo de Yugi e membro do grupo, sempre protege seus amigos."
    ]
];

// Verifica se o personagem existe
if (!$personagem || !isset($info[$personagem])) {
    echo "Personagem não encontrado!";
    exit;
}

$dados = $info[$personagem];
?>


</body>
</html>
