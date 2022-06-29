<?php
include_once 'dados.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>JUSPSI</title>

  <!-- ICON -->
  <link rel="icon" href="assets/images/icon/icon-web.svg" type="image/icon">

  <!-- BOOTSTRAP CSS -->
  <link rel="stylesheet" href="assets/bootstrap/bootstrap.min.css">

  <!-- SWIPER -->
  <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

  <!-- CSS -->
  <link rel="stylesheet" href="style.css">

  <!-- JQUERY -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

  <!-- JS -->
  <script src="assets/js/script.js"></script>
</head>

<body>
  <!-- INICIO HEADER -->
  <header class="header">

    <!-- COOKIES -->
    <div id="cookie" class="gradient fixed-top">
      <div class="container-fluid">
        <div class="centerd py-3 text-branco">
          <p class="m-0 font18 fw400">Só Hoje! Desconto de 50% nos <span class="underline-branco">cursos preparatórios </span> - <strong>Termina em 00:58:16h</strong></p>
        </div>
      </div>
    </div>
    <!-- FIM COOKIES -->

    <!-- MENU LINKS -->
    <div class="navbar-menu">

      <div class="container-navbar ">
        <div class="part1">
          <ul>
            <li><a href="#">HOME</a></li>
            <li><a href="#">INSTITUCIONAL</a></li>
            <li><a href="#">NOVIDADES</a></li>
            <li><a href="#">MATERIAIS GRATUITOS</a></li>
            <li><a href="#">DEPOIMENTOS</a></li>
            <li><a href="#">CONTATO</a></li>
          </ul>
        </div>

        <div class="part2">
          <ul>
            <li><a href="#">Cursos de Direito</a></li>
            <li><a href="#">Cursos de Psicologia</a></li>
            <li><a href="#">Cursos de Serviço Social</a></li>
            <li><a href="#">Cursos Preparatórios</a></li>
            <li><a href="#">Coaching e Inteligência Emocional</a></li>
            <li><a href="#">Cursos Para sua Empresa</a></li>
          </ul>
        </div>

        <div class="final-navbar centerd gap-2">
          <!-- SEARCH -->
          <button class="button-circle background-laranja">
            <img src="assets/images/icon/lupa.svg" alt="Lupa">
          </button>
          <a href="#" class="button gap-2 text-branco background-laranja font16 fw600 whitespace-nowrap">
            <img src="assets/images/icon/user.svg" alt="User">
            Login | Criar conta
          </a>
        </div>
      </div>
    </div>
    </div>

    <!-- SWIPER -->
    <div class="container-swiper-header">
      <div class="swiper swiper-header">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img src="assets/images/background-header1.png" alt="">
          </div>
          <div class="swiper-slide">
            <img src="assets/images/background-header1.png" alt="">
          </div>
          <div class="swiper-slide">
            <img src="assets/images/background-header1.png" alt="">
          </div>
        </div>

        <!-- CONTROLES SWIPER -->
        <div class="control-swiper">
          <div class="pagination-header">

          </div>
          <div class="button-prev">
            <img src="assets/images/icon/seta-swiper.svg" alt="Proximo Slide">
          </div>
          <div class="button-next">
            <img src="assets/images/icon/seta-swiper.svg" alt="Proximo Slide">
          </div>
        </div>
      </div>
    </div>
    <!-- MENU -->
    <div class="menu container-fluid max-width1920">
      <div class="space-between pt-4">
        <!-- LOGO -->
        <div class="logo">
          <a href="#">
            <img src="assets/images/logo.svg" alt="Logo">
          </a>
        </div>
        <!-- LINKS -->
        <div>
          <div class="alignCenter gap-5">
            <!-- SEARCH -->
            <button class="button-circle background-laranja d-none d-md-block">
              <img src="assets/images/icon/lupa.svg" alt="Lupa">
            </button>
            <a href="#" class="button gap-2 text-branco background-laranja font16 fw600 d-none d-md-block">
              <img src="assets/images/icon/user.svg" alt="User">
              Login | Criar conta
            </a>
            <button id="button-burguer" class="button alignCenter gap-2 text-laranja background-branco font18 fw600">
              <img src="assets/images/icon/burguer.svg" alt="Burguer Menu">
              MENU
            </button>
          </div>
        </div>
      </div>
    </div>
    <!-- FIM MENU -->

    <!-- TITLE HEADER -->
    <div class="container">
      <div class="title-header">
        <div class="text-branco text-center">
          <h1 class="font64 fw900 my-2">Terapia cognitivo comportamental</h1>
          <h2 class="font24 fw500">Passo a passo para se tornar um excelente psicoterapeuta.</h2>
          <div class="mt-4 centerd">
            <a href="#" class="button background-laranja font14 fw800 text-branco px-5">CLIQUE E CONHEÇA</a>
          </div>
        </div>
      </div>
    </div>
    <!-- FIM TITLE HEADER -->

    <!-- FINAL HEADER -->
    <div>
      <div class="descer-pagina d-none d-md-block">
        <a href="#main" class="font12 fw500 uppercase">DESCER PÁGINA</a>
      </div>
      <!-- CARROUSEl -->
    </div>

  </header>
  <!-- FIM HEADER -->

  <!-- INICIO MAIN -->
  <main class="background-azul py-5" id="main">
    <div class="container-fluid max-width1920">
      <!-- PRINCIPAIS CATEGORIAS   -->
      <div>
        <div class="text-center text-branco max-width924 pt-md-5 pb-3">
          <h3 class="font35 fw700 uppercase pt-3">Principais Categorias</h3>
          <p class="font-roboto font24 fw500  ">Acesse conteúdos da sua área, e experimente novos campos de atuação, expandindo as suas estratégias, técnicas e possibilidades de ingresso no mercado de trabalho</p>
        </div>
        <!-- CATEGORIAS -->
        <div class="container-grid-categoria">
          <?php
          $i = 0;
          foreach ($categorias as $categoria) :
          ?>
            <div class="container-categoria text-branco">
              <img class="img-categoria" src="assets/images/<?= $categoria['image'] ?>" alt="<?= $cateoria['titulo'] ?>">
              <div class="conteudo-categoria text-center">
                <h4 class="font29 fw800 "><?= $categoria['titulo'] ?></h4>
                <p class="m-0"><?= $categoria['paragrafo'] ?></p>
                <button class="button-circle border-laranja mt-3" onclick="hiddenCategoria(this, <?= $i ?>)">
                  <img src="assets/images/icon/icon-mais.svg" alt="Icon Ler Mais">
                </button>
              </div>
            </div>
          <?php
            $i++;
          endforeach;
          ?>
        </div>
      </div>
      <!-- PRINCIPAIS CURSOS -->
      <div class="container-fluid max-width1920">
        <div class="text-branco text-center max-width924 mt-5 pt-5 pb-3">
          <h3 class="font35 fw700 uppercase pt-3">Principais Cursos</h3>
          <p class="font-roboto font24 fw500">Cursos estruturados para alavancar sua carreira</p>
        </div>
        <!-- Swiper -->
        <div class="swiper swiper-cursos">
          <div class="swiper-wrapper">
            <?php foreach ($cursos as $curso) : ?>
              <div class="swiper-slide">
                <!-- CARD -->
                <div class="container-cursos">
                  <!-- IMG CARD -->
                  <img class="img-cursos" src="assets/images/<?= $curso['image'] ?>" alt="Capa do Curso">
                  <?php if ($curso['vagas-ilimitadas']) : ?>
                    <!-- IMG VAGAS LIMITADAS -->
                    <div class="vagas-ilimitadas">
                      <img src="assets/images/vagas-limitadas.svg" alt="Vagas limitadas">
                    </div>
                  <?php endif; ?>
                  <!-- CURSO ONLINE -->
                  <div class="curso-online">
                    <span class="font12 fw800 text-azul background-branco">
                      <?php
                      if ($curso['curso-online'])
                        echo 'CURSO ONLINE';
                      else
                        echo 'CURSO PRESENCIAL';
                      ?>
                    </span>
                  </div>
                  <!-- DESCRIÇÃO -->
                  <div class="container-cursos-descricao text-branco">
                    <!-- TITULO -->
                    <h4 class="font23 fw600"><?= $curso['titulo'] ?></h4>
                    <!-- ESTRELAS -->
                    <div class="alignCenter gap-1 pb-3">
                      <?php
                      for ($i = $curso['classificacao']; $i >= 1; $i--)
                        echo '<img src="assets/images/icon/estrela.svg" alt="estrela">';
                      if ($i > 0)
                        echo '<img src="assets/images/icon/estrela-meia.svg" alt="estrela">';
                      ?>
                      <span>
                        <?= $curso['classificacao'] ?>
                      </span>
                    </div>
                    <!-- ADICIONAL -->
                    <div class="d-flex gap-3">
                      <div class="font17 fw500">
                        <!-- CERTIFICADO -->
                        <span class="alignCenter gap-1 pb-2">
                          <img src="assets/images/icon/icon-certificado.svg" alt="Icon Cerficiado">
                          <span>Certificado <?= $curso['certificado'] ?>h</span>
                        </span>
                        <span class="font17 fw400 alignCenter gap-1">
                          <img src="assets/images/icon/icon-valor.svg" alt="Icon Valor">
                          <span>R$ <strong class="fw900"><?= $curso['preco'] ?></strong></span>
                        </span>
                      </div>
                      <div>
                        <?php if ($curso['curso-online']) { ?>
                          <!-- POR ONDE A AULA -->
                          <span class="alignCenter gap-1 pb-2">
                            <img src="assets/images/icon/icon-gravador.svg" alt="Icon Gravador">
                            <span><?= $curso['plataforma'] ?></span>
                          </span>
                        <?php } else { ?>
                          <!-- LOCALIDADE -->
                          <span class="alignCenter gap-1 pb-2">
                            <img src="assets/images/icon/icon-localidade.svg" alt="Icon Localidade">
                            <?= $curso['localidade'] ?>
                          </span>
                          <!-- DATA -->
                          <span class="alignCenter gap-1">
                            <img src="assets/images/icon/icon-data.svg" alt="Icon Data">
                            <?= $curso['data'] ?>
                          </span>
                        <?php } ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            <?php endforeach;  ?>
          </div>
          <div class="control-swiper-cursos space-between">
            <div class="button-next">
              <img src="assets/images/icon/seta-cursos.svg" alt="Próximo">
            </div>
            <div class="button-prev">
              <img src="assets/images/icon/seta-cursos.svg" alt="Anterior">
            </div>
          </div>
        </div>
        <!-- VER TODOS OS CURSOR -->
        <div class="centerd  py-5">
          <a href="#" class="button background-laranja text-branco font14 fw800 px-5">VER TODOS OS CURSOS</a>
        </div>
      </div>
    </div>
  </main>
  <!-- FIM MAIN -->

  <!-- CONHEÇA JUSPSI -->
  <section class="py-5">
    <div class="container">
      <div class="row text-cinza py-md-5">
        <div class="col-6 img-conheca p-0 d-none d-md-block">
          <img src="assets/images/transforme-sua-vida.png" alt="Transform sua Vida">
        </div>
        <div class="col-md-6 p-5">
          <div class="linha pb-5">
            <h3 class="font35 fw700 uppercase">Transforme sua vida ATRAVÉS dos cursos juspsi</h3>
            <!-- LINHA -->
          </div>
          <div class="letras-roxas font16 fw700 text-roxo d-flex gap-4 pb-5">
            <span class="alignCenter gap-2 font-roboto">
              <img src="assets/images/icon/icon-relogio.svg" alt="Icon Relogio">
              APRENDA OS CURSOS NO SEU TEMPO
            </span>

            <span class="alignCenter gap-2 font-roboto">
              <img src="assets/images/icon/icon-folha.png" alt="Icon Folha">
              CERTIFICADOS VÁLIDOS EM TODO O BRASIL
            </span>
          </div>

          <p class="font-roboto font18 fw500 line21 pb-4">Aprenda tudo que não te ensinaram na faculdade, passo a passo na prática e alcance os melhores resultados profissionais</p>

          <a href="#" class="button button-shadow font14 fw800 text-branco background-laranja px-5">CONHEÇA A JUSPSI</a>
        </div>
      </div>
    </div>
  </section>
  <!-- FIM JUSPSI -->

  <!-- DIFERENÇA JUSPSI -->
  <section class="gradient text-branco text-center py-5 d-none d-md-block">
    <div class="container">
      <h3 class="font35 fw700 uppercase py-5">Diferenciais JUSPSI</h3>
      <div class="alignCenter gap-3 font18 fw400 metodologia pb-5">
        <!-- METODOLOGIA -->
        <div>
          <img src="assets/images/icon/icon-medotologia.svg" alt="Icon Medotologia">
          <p class="font-roboto">Metodologia didática, prática e transformadora.</p>
        </div>
        <!-- MÉTODOS -->
        <div>
          <img src="assets/images/icon/icon-metodos.svg" alt="Icon Metodos">
          <p class="font-roboto">Trabalhamos com métodos de disciplinas multidisciplinares.</p>
        </div>
        <!-- NEUROCIENCIA -->
        <div>
          <img src="assets/images/icon/icon-neurociencia.svg" alt="Icon Neurociencia">
          <p class="font-roboto">Utilizamos neurociência que garante maior absorção dos conteúdos.</p>
        </div>
        <!-- SUPORTE -->
        <div>
          <img src="assets/images/icon/icon-suporte.svg" alt="Icon Suporte">
          <p class="font-roboto">Damos suporte ao aluno para ingresso no mercado de trabalho.</p>
        </div>
      </div>
    </div>
  </section>
  <!-- FIM DIFERENÇA JUSPSI -->

  <!-- INICIO DEPOIMENTOS -->
  <section class="py-5 d-none d-md-block">
    <div class="container-fluid">
      <div class="pt-5">
        <div class="">
          <div class="text-cinza">
            <h4 class="font35 fw700 uppercase m-0">Depoimentos</h4>
            <p class="font-roboto font24 fw500">Opinião de nossos alunos sobre os cursos JUSPSI</p>
          </div>
        </div>
        <!-- CARROUSEL -->
        <!-- Swiper -->
        <div class="swiper swiper-depoimentos">
          <div class="swiper-wrapper">
            <?php
            for ($i = 0; $i < 2; $i++)
              foreach ($depoimentos as $depoimento) : ?>
              <div class="swiper-slide">
                <!-- CARD -->
                <div class="container-depoimento text-center">
                  <!-- HEDAER CARD -->
                  <div class="header-depoimento">
                    <img src="assets/images/<?= $depoimento['image'] ?>" alt="Imagem de Perfil">
                  </div>
                  <!-- CONTEUDO CARD -->
                  <div class="px-4 ">
                    <h5 class="font24 fw400 text-azul pb-3"><?= $depoimento['nome'] ?></h5>
                    <p class="font17 fw400 line17 text-depoimento"><?= $depoimento['depoimento'] ?></p>
                  </div>
                  <!-- FOOTER CARD -->
                  <div class="footer-depoimento centerd py-4 mx-4 border-top">
                    <a href="#" class="alignCenter gap-2">
                      <img src="assets/images/icon/icon-seta.svg" alt="Icon Seta">
                      <span class="font13 fw700 text-laranja uppercase"><?= $depoimento['curso'] ?></span>
                    </a>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
          <div class="control-swiper-depoimentos">
            <div class="swiper-pagination-depoimento"></div>

            <div class="button-prev">
              <img src="assets/images/icon/seta-swiper.svg" alt="Proximo Slide">
            </div>
            <div class="button-next">
              <img src="assets/images/icon/seta-swiper.svg" alt="Proximo Slide">
            </div>

          </div>
        </div>

        <div class="container-grid-depoimentos gap-3">

        </div>
      </div>
      <div class="py-5 centerd">
        <a href="#" class="font14 fw800 text-branco background-laranja button button-shadow px-5">VER TODOS OS DEPOIMENTOS</a>
      </div>
    </div>
  </section>
  <!-- FIM DEPOIMENTOS -->

  <!-- INICIO FOOTER -->
  <footer class="footer background-azul pt-5">
    <div class="container">
      <div class="space-between align-items-start container-flex-footer pt-5">
        <!-- PART 1 -->
        <div>
          <h5>INSTITUCIONAL</h5>
          <ul>
            <li><a href=" #">A empresa</a></li>
            <li><a href="#">Novidades</a></li>
            <li><a href="#">Materiais gratuitos</a></li>
            <li><a href="#">Depoimentos</a></li>
            <li><a href="#">Contato</a></li>
          </ul>
          <a href="#" class="button background-laranja text-branco alignCenter gap-2 mt-4">
            <img src="assets/images/icon/user.svg" alt="User">
            Login | Criar conta
          </a>
        </div>
        <!-- PART 2 -->
        <div>
          <h5>Cursos preparatórios</h5>
          <ul>
            <li><a href="#">Presenciais</a></li>
            <li><a href="#">Telepresenciais</a></li>
            <li><a href="#">Simulados online</a></li>
          </ul>

          <h5 class="mt-5">Coaching e Inteligência emocional</h5>
          <ul>
            <li><a href="#">Coaching para concursos publicos</a></li>
            <li><a href="#">Coaching de carreira</a></li>
            <li><a href="#">Inteligencia emocional</a></li>
          </ul>
        </div>
        <!-- PART 3 -->
        <div>
          <h5>Para sua empresa</h5>
          <h6>EMPRESAS PÚBLICAS</h6>
          <ul>
            <li><a href="#">Cursos e treinamentos</a></li>
            <li><a href="#">Assessoria tecnica</a></li>
          </ul>

          <h6>EMPRESAS PRIVADAS</h6>
          <ul>
            <li><a href="#">Cursos e treinamentos</a></li>
            <li><a href="#">Assessoria tecnica</a></li>
          </ul>
        </div>
        <!-- PART 4 -->
        <div>
          <h5>Cursos</h5>

          <h6>DIREITO</h6>
          <ul>
            <li><a href="#">Clubes de assinatura</a></li>
            <li><a href="#">Cursos presenciais</a></li>
            <li><a href="#">Cursos online</a></li>
          </ul>

          <h6>PSICOLOGIA</h6>
          <ul>
            <li><a href="#">Clubes de assinatura</a></li>
            <li><a href="#">Cursos presenciais</a></li>
            <li><a href="#">Cursos online</a></li>
          </ul>

          <h6>SERVIÇO SOCIAL</h6>
          <ul>
            <li><a href="#">Clubes de assinatura</a></li>
            <li><a href="#">Cursos presenciais</a></li>
            <li><a href="#">Cursos online</a></li>
          </ul>
        </div>
      </div>

      <!-- CERTIFICAÇÕES -->
      <div class="certificacoes p-4 mt-5">
        <div class="text-center">
          <h5 class="font20 fw700 text-cinza pb-2 pt-4">CERTIFICAÇÕES</h5>
          <img src="assets/images/certificacoes.png" alt="Certificações">
        </div>
        <div class="space-between pt-5">
          <div class="alignCenter gap-2">
            <img src="assets/images/icon/icon-web.svg" alt="Logo">
            <p class="font-roboto font13 fw400 text-depoimento mb-1">2021 © Todos os direitos reservados - JUSPSI. Seja a sua melhor versão profissional | Criação</p>
            <img src="assets/images/oxigen-logo.svg" alt="Logo OxigenWeb">
          </div>
          <div class="alignCenter font16 fw500 gap-3">
            <a href="#" class="font-roboto text-roxo">Política de privacidade</a>
            <a href="#" class="font-roboto text-roxo">Política de cookies</a>
          </div>
        </div>
      </div>
    </div>
    <!-- FINAL -->
    <div class="footer-app gradient py-3 centerd gap-5 mt-5">
      <!-- WHATSAPP -->
      <div class="whatsapp-footer">
        <a href="#">
          <img src="assets/images/icon/icon-whatsapp.svg" alt="Icon Whatsapp">
        </a>
      </div>
      <!-- ICON YOUTUBE -->
      <a href="#">
        <img src="assets/images/icon/icon-youtube.svg" alt="Icon Youtube">
      </a>
      <!-- ICON LINKEDIN -->
      <a href="#">
        <img src="assets/images/icon/icon-linkedin.svg" alt="Icon Linkedin">
      </a>
      <!-- ICON FACEBOOK -->
      <a href="#">
        <img src="assets/images/icon/icon-facebook.svg" alt="Icon Facebook">
      </a>
      <!-- ICON INSTAGRAM -->
      <a href="#">
        <img src="assets/images/icon/icon-instagram.svg" alt="Icon Instagram">
      </a>
      <!-- ICON TWITTER -->
      <a href="#">
        <img src="assets/images/icon/icon-twitter.svg" alt="Icon Twitter">
      </a>
    </div>
  </footer>
  <!-- FIM FOOTER -->

  <!-- BOOTSTRAP JS -->
  <script src="assets/bootstrap/bootstrap.min.js"></script>

  <!-- SWIPER JS -->
  <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
  <script>
    var swiper = new Swiper(".swiper-header", {
      cssMode: true,
      loop: true,
      autoplay: {
        delay: 5000
      },
      navigation: {
        nextEl: ".button-next",
        prevEl: ".button-prev",
      },
      pagination: {
        el: ".pagination-header",
      },
      mousewheel: true,
      keyboard: true,
    });

    // CURSOS
    var swiper = new Swiper(".swiper-cursos", {
      slidesPerView: 1.5,
      spaceBetween: 15,
      centeredSlides: false,
      navigation: {
        nextEl: ".button-prev ",
        prevEl: ".button-next",
      },
    });

    // DEPOIMENTOS
    var swiper = new Swiper(".swiper-depoimentos", {
      slidesPerView: 3,
      spaceBetween: 30,
      pagination: {
        el: ".swiper-pagination-depoimento",
        clickable: true,
      },
      navigation: {
        nextEl: ".button-next ",
        prevEl: ".button-prev",
      }
    });
  </script>

</body>

</html>