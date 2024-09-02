<?php
// Verifica se o usuário está logado
if (!isset($_GET['user'])) {
    header('Location: index.html');
    exit();
}

// Dados dos currículos (exemplo)
$curriculums = [
    'user1' => [
        'name' => 'Luis Silva',
        'bio' => 'Engenheiro de software com 10 anos de experiência em desenvolvimento web.',
        'experience' => 'Trabalhou em empresas como Google, Facebook e Microsoft.',
        'linkedin' => 'https://www.linkedin.com/in/luis-silva-38980a26b/',
        'github' => 'https://github.com/LuisSilva',
        'image' => 'https://media.licdn.com/dms/image/v2/D4D03AQGNkd67-XiQSQ/profile-displayphoto-shrink_800_800/profile-displayphoto-shrink_800_800/0/1679658342999?e=1730937600&v=beta&t=AHEieWaQTs3df9hLNSANTBgvmZzP0RLjHBLg44i2Zk8',
    ],
    'user2' => [
        'name' => 'Rafael Braga',
        'bio' => 'Desenvolvedora Front-End especialista em React e Vue.js.',
        'experience' => 'Desenvolveu interfaces para várias startups e empresas de tecnologia.',
        'linkedin' => 'https://www.linkedin.com/in/rafael-henrique-braga/',
        'github' => 'https://github.com/AnaCosta',
        'image' => 'https://media.licdn.com/dms/image/v2/D5635AQFY3izfqDWhXg/profile-framedphoto-shrink_800_800/profile-framedphoto-shrink_800_800/0/1679661659384?e=1725886800&v=beta&t=uf0cTEDYyZQ8rsXy2rd4Ae7vnzrqjIlDXVblbL9pTtk',
    ],
    'user3' => [
        'name' => 'Cibeli',
        'bio' => 'Engenheiro de dados apaixonado por Big Data e Machine Learning.',
        'experience' => 'Trabalhou com análise de dados em grandes volumes na IBM e Oracle.',
        'linkedin' => 'https://www.linkedin.com/in/carlos-souza-67890/',
        'github' => 'https://github.com/CarlosSouza',
        'image' => 'https://randomuser.me/api/portraits/men/2.jpg',
    ],
    'user4' => [
        'name' => 'João Felicio',
        'bio' => 'UX/UI Designer com foco em criar experiências de usuário envolventes.',
        'experience' => 'Projetou interfaces para aplicativos móveis e web em empresas como Spotify e Airbnb.',
        'linkedin' => 'https://www.linkedin.com/in/jo%C3%A3o-pedro-felicio/',
        'github' => 'https://github.com/MarianaOliveira',
        'image' => 'https://media.licdn.com/dms/image/v2/D4D03AQGrvdMiRk-RWQ/profile-displayphoto-shrink_800_800/profile-displayphoto-shrink_800_800/0/1725282215975?e=1730937600&v=beta&t=wpBxs7niRhLRST8mRAAg5j8cWJ5Kn0RaAtSGS1s2PiE',
    ],
    'user5' => [
        'name' => 'Cadmiel',
        'bio' => 'DevOps Engineer com vasta experiência em automação de infraestrutura.',
        'experience' => 'Implementou CI/CD pipelines em empresas financeiras e de tecnologia.',
        'linkedin' => 'https://www.linkedin.com/in/pedro-fernandes-78901/',
        'github' => 'https://github.com/QR-Cadmiel',
        'image' => 'https://drive.google.com/file/d/1XChFCAacKqAETEj2OT_SABsE48EE_rM8/preview',
    ],
    'user6' => [
        'name' => 'Gabriel Rovida',
        'bio' => 'Desenvolvedora Mobile focada em iOS e Android.',
        'experience' => 'Criou aplicativos móveis usados por milhões de usuários em todo o mundo.',
        'linkedin' => 'https://www.linkedin.com/in/julia-almeida-34567/',
        'github' => 'https://github.com/JuliaAlmeida',
        'image' => 'https://randomuser.me/api/portraits/women/3.jpg',
    ],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currículos da Equipe</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php foreach ($curriculums as $data): ?>
    <div class="profile-container">
        <img src="<?php echo $data['image']; ?>" alt="Profile Picture">
        <h1><?php echo $data['name']; ?></h1>
        <p><strong>Biografia:</strong> <?php echo $data['bio']; ?></p>
        <p><strong>Experiência:</strong> <?php echo $data['experience']; ?></p>
        <a href="<?php echo $data['linkedin']; ?>" class="btn">LinkedIn</a>
        <a href="<?php echo $data['github']; ?>" class="btn">GitHub</a>
    </div>
    <?php endforeach; ?>

    <!-- Adiciona o botão de logout abaixo do último currículo -->
    <div class="logout-container">
        <a href="logout.php" class="btn">Logout</a>
    </div>
</body>
</html>
