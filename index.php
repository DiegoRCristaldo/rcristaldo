<?php 

require('admin.php');

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="./assets/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <title>R Cristaldo Dev Web</title>
</head>

<body>
  <header>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg">
    <div class="container">
      <a class="animate__animated animate__backInLeft navbar-brand" href="index.php">R Cristaldo Desenvolvimento</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="animate__animated animate__backInRight navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Indice</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#motivos">7 Motivos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#servicos">Serviços</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#entreEmContato">Contato</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  
  <!-- Banner -->
  <section id="banner" class="bg-light py-5 text-center">
    <div class="container conteudo-central">
      <h1 class="animate__animated animate__backInLeft display-4 texto-central">R CRISTALDO</h1>
      <h2 class="animate__animated animate__backInRight text-center mb-4"><strong>Desenvolvimento Web</strong></h2>
      <p class="animate__animated animate__backInUp lead">Encontre as melhores soluções em desenvolvimento web para a sua empresa</p>
      <a href="#servicos" class="animate__animated animate__backInUp btn btn-primary btn-lg">Ver Serviços</a>
    </div>
  </section>

  </header>
  <main>
  
  <section>
    <h2>Nossa Missão</h2>
    <div class="conteiner">
      <div class="conteiner-central">
        <img src="./assets/imagens/missao.webp" alt="">
        <h2>Missão:</h2>
        <p>Nossa missão é aproximar pessoas e empresas interessadas em contribuir, de alguma forma, para a melhoria do bem-estar coletivo, reduzindo as dificuldades enfrentadas por aqueles em estado de vulnerabilidade.</p>    
      </div>
      <div class="conteiner-central visao">
        <img src="./assets/imagens/visao.jpg" alt="">
        <h2>Visão:</h2>
        <p>Buscamos obter reconhecimento nacional, permitindo que empresas e instituições de ajuda humanitária ampliem seus horizontes, beneficiando cada vez mais pessoas diariamente.</p>        
      </div>
      <div class="conteiner-central">
        <img src="./assets/imagens/valores.png" alt="">
        <h2>Valores:</h2>
        <p>Comprometemo-nos a sempre nos colocarmos no lugar do próximo e compreender suas dificuldades, visando ajudar de maneira efetiva e humanizada.</p>
      </div>
    </div>  
  </section>

  <!-- Portifólio -->
  <section id="portifolio">
    <div>
      <button>
      <?php foreach($cards as $card){
        ?>
        <a href=<?= $card["link"]?>><img src=<?= $card["imagem"]?>></a>
        <p><?= $card["descricao"]?></p>
        <?php
      }
      ?>
      <button>
    </div>
  </section>

  <!-- Motivos para ter um site -->
  <section id="motivos" class="py-5">
    <div class="container">
      <h2 class="text-center mb-4"><strong>7 Motivos para ter um site</strong></h2>
      <div class="motivos container">
        <div class="motivos-card">
          <img class="numeros" src="./assets/imagens/numeros/1.png">
          <p><strong>Visibilidade Online:</strong> Um site permite que sua empresa seja encontrada na internet, alcançando um público global 24 horas por dia, 7 dias por semana.</p>
        </div>
        <div class="motivos-card par">
          <img class="numeros" src="./assets/imagens/numeros/2.png">
          <p><strong>Credibilidade e Profissionalismo:</strong> Ter um site transmite confiança aos clientes, mostrando que sua empresa está comprometida com uma presença online sólida e profissional.</p>
        </div>
        <div class="motivos-card">
          <img class="numeros" src="./assets/imagens/numeros/3.png">
          <p><strong>Marketing Eficaz:</strong> Um site é uma ferramenta poderosa para o marketing digital, permitindo que você alcance um público-alvo específico, promova ofertas especiais e interaja com os clientes por meio de blogs e mídias sociais.</p>
        </div>
        <div class="motivos-card par">
          <img class="numeros" src="./assets/imagens/numeros/4.png">
          <p><strong>Acesso à Informação:</strong> Seus clientes podem facilmente acessar informações seus produtos, preços, horários de funcionamento e formas de contato a qualquer momento, economizando tempo e esforço.</p>
        </div>
        <div class="motivos-card">
          <img class="numeros" src="./assets/imagens/numeros/5.png">
          <p><strong>Concorrência:</strong> Muitas empresas já têm presença online, ter um site coloca você em pé de igualdade com a concorrência e pode ajudá-lo a se destacar.</p>
        </div>
        <div class="motivos-card par">
          <img class="numeros" src="./assets/imagens/numeros/6.png">
          <p><strong>Acesso a Novos Mercados:</strong> Com um site, você pode expandir seus negócios para novos mercados e regiões, explorando oportunidades de crescimento além do alcance físico da sua empresa.</p>
        </div>
        <div class="motivos-card">
          <img class="numeros" src="./assets/imagens/numeros/7.png">
          <p>Investir em um site pode ser um <strong>passo crucial para o sucesso</strong> do seu negócio, ajudando a atrair e manter mais clientes, expandir sua marca e aumentar suas vendas.</p>
        </div>
    </div>
  </section>

  <!-- Serviços -->
  <section id="servicos" class="py-5">
    <div class="container">
      <h2 class="text-center mb-4"><strong>Nossos Serviços</strong></h2>
      <div class="row">
        <div class="col-lg-4 mb-4">
          <div class="card">
            <img src= './assets/imagens/landingPage.png' class="card-img-top" alt="">
            <div class="card-body">
              <h3 class="card-title">Landing Page</h5>
              <p class="card-text">Ideal para empresas que utilizam as redes sociais para contato com o cliente, otimizando a divulgação, profissionalizando seu negócio e exibindo seu trabalho.</p>
              <a href=<?= $contato["whats"]?> class="btn btn-primary">Tenho Interesse</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card">
            <img src='./assets/imagens/responsivo.jpg'class="card-img-top" alt="">
            <div class="card-body">
              <h3 class="card-title">Site Responsivo</h5>
              <p class="card-text">Um site responsivo se adapta ao tamanho da tela do usuário. O cliente ao acessar o site da sua empresa verá um site profissional respondendo a todos os tipos de tela, sejam eles smartphones, tablets, notebook, entre outros.</p>
              <a href=<?= $contato["whats"]?> class="btn btn-primary">Tenho Interesse</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card">
            <img src='./assets/imagens/dinamico.jpg'class="card-img-top" alt="">
            <div class="card-body">
              <h3 class="card-title">Site dinâmico</h5>
              <p class="card-text">O site dinâmico é ideal para empresas que vendem produtos que podem sofrer alterações de preço com o tempo. O conteúdo do site pode ser trocado e se expande ao longo do tempo.
Esse tipo de site é ideal para loja de roupas, restaurantes e empresas que possuam produtos com estoque rotativo.</p>
              <a href=<?= $contato["whats"]?> class="btn btn-primary">Tenho Interesse</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- Contatos -->
  <section id="contatos" class="py-5">
    <div class="row">
      <div class="col-lg-1 md-1"></div>
      <div class="col-lg-4 mb-4">
          <div class="card">
            <iframe src=<?= $endereco["maps"]?> style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <div class="card-body">
              <h4 class="card-title">Nosso Endereço</h5>
              <p class="card-text"><?= $endereco["rua"]?>, <?= $endereco["numero"]?>, <?=$endereco["bairro"]?>, <?=$endereco["cidade"]?> - <?=$endereco["estado"]?>, <?=$endereco["cep"]?></p>
              <a href="https://maps.app.goo.gl/DkVKvNvgoyy4UzQH6" class="btn btn-primary">Ir para o Maps</a>
            </div>
          </div>
        </div>
      <div class="col-lg-2 md-2"></div>
      <div class="col-lg-4 mb-4">
          <div class="card">
            <div class="card-body">
              <h4 id="entreEmContato" class="card-title">Entre em contato</h5>
              <p class="card-text">Acesse nossas redes</p>
              <p class="card-text"><img class="icone" src="./assets/botoes/whats.webp"><?= $contato["telefone"]?></p>
              <p class="card-text"><img class="icone" src="./assets/botoes/email.png"><?= $contato["email"]?></p>
              <a href=<?= $contato["facebook"]?>><img class="icone" src="./assets/botoes/facebook.png"></a>
              <a href=<?= $contato["instagram"]?>><img class="icone" src="./assets/botoes/instagram.png"></a>
              <a href=<?= $contato["whats"]?>><img class="icone" src="./assets/botoes/whats.webp"></a>
            </div>
          </div>
        </div>
      <div class="col-lg-1 md-1"></div>
    </div>
    <a href=<?= $contato["whats"]?> class="animate__animated animate__bounceInDown whats" target="_blank"><img src="./assets/botoes/whats.webp" alt="Icone do whatsapp"></a>
  </section>
  </main>

  <!-- Footer -->
  <footer class="text-light py-3 text-center">
    <div class="container">
      <p>&copy; 2023 R CRISTALDO Desenvolvimento Web. Todos os direitos reservados. Site desenvolvido por R CRISTALDO Desenvolvimento Web.</p>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="./assets/script.js"></script>
</body>

</html>