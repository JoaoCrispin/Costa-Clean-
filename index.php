<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Costa Clean - Limpeza de Estofados e Sofás</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="style.css">
<link rel="icon" href="img/Logo Costa Clean.png" type="image/png">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <header>
     <div class="header-content">
    <img src="img/Logo Costa Clean.png" alt="Logo Costa Clean" />
    <h1>Costa Clean</h1>
    <p>Especialista em Limpeza de Sofás e Estofados</p>
  </header>

  <nav>
    <a href="#servicos">Serviços</a>
    <a href="#sobre">Sobre Nós</a>
    <a href="#contato">Contato</a>
  </nav>

  <section class="hero">
    <h2>Deixe seus estofados como novos!</h2>
    <p>Com a Costa Clean, seu sofá, colchão e poltronas ganham vida nova com uma limpeza profunda, profissional e segura.</p>
  </section>

  <section id="servicos" class="section">
    <h3>Nossos Serviços</h3>
    <div class="cards">
      <div class="card">
         <img src="img/seater-sofa.png" alt="Ícone de sofá" class="service-icon">
        <h4>Limpeza de Sofás</h4>
        <p>Remoção de sujeiras, manchas e odores com produtos específicos e tecnologia de ponta.</p>
      </div> <div class="card">
         <img src="img/seat.png" alt="Ícone de banco de carro" class="service-icon">
        <h4>Limpeza de Bancos de Carros</h4>
        <p>Higienização profunda , remoção de sujeiras, manchas e odores com produtos específicos com cuidado e eficiência.</p>
      </div>
      <div class="card">
         <img src="img/double-bed.png" alt="Ícone de Colchões" class="service-icon">
        <h4>Limpeza de Colchões</h4>
        <p>Higienização profunda contra ácaros, bactérias e fungos que afetam sua saúde.</p>
      </div>
      <div class="card">
         <img src="img/armchair.png" alt="Ícone de poltronas" class="service-icon">
        <h4>Limpeza de Poltronas</h4>
        <p>Renovamos suas poltronas com cuidado e eficiência, preservando o tecido.</p>
      </div>
    </div>
  </section>

  <section id="sobre" class="section">
    <h3>Sobre a Costa Clean</h3>
    <p>Somos uma empresa especializada em limpeza de estofados, atuando com responsabilidade, profissionalismo e tecnologia de ponta. Garantimos a satisfação de nossos clientes através de um serviço impecável, com atenção aos detalhes e uso de produtos de qualidade. Atendemos a domicílio e prezamos pelo conforto e bem-estar da sua família.</p>
  </section>
  <section class="biografia-container">
  <div class="biografia-img">
    <img src="img/Costa.jpg" alt="Foto do fundador da Costa Clean" />
  </div>
  <div class="biografia-texto">
    <h2>Sobre Mim</h2>
    
    <p>Nome:Guilherme Da Silva Costa</p>
    <p>Idade: 18 anos</p>
    <p>Hobbie:Jogar futebol</p>
    <p>Cursa: Engenharia Civil | UTFPR</p>
    <p></p>

 


  </div>
</section>

<section>
  <h1 class="titulo-centralizado">Antes e Depois de nossos Serviços</h1>
 <div class="carousel">
    <div class="carousel-track">
      <div class="carousel-item">
        <div class="image-container">
          <img src="img/Cadeira antes .jpg" alt="Antes">
          <span class="label antes">Antes</span>
        </div>
        <div class="image-container">
          <img src="img/Cadeira depois.jpg" alt="Depois">
          <span class="label depois">Depois</span>
        </div>
      </div>
      <div class="carousel-item">
        <div class="image-container">
          <img src="img/Banco do Carro antes.jpg" alt="Antes">
          <span class="label antes">Antes</span>
        </div>
        <div class="image-container">
          <img src="img/Banco do carro depois.jpg" alt="Depois">
          <span class="label depois">Depois</span>
        </div>
      </div>
      <div class="carousel-item">
        <div class="image-container">
          <img src="img/colchao antes .jpg" alt="Antes">
          <span class="label antes">Antes</span>
        </div>
        <div class="image-container">
          <img src="img/colchao dps .jpg" alt="Depois">
          <span class="label depois">Depois</span>
        </div>
      </div>
      
    </div>
    
    <div class="carousel-buttons">
      <button class="carousel-button" onclick="prevSlide()">❮</button>
      <button class="carousel-button" onclick="nextSlide()">❯</button>
    </div>
  </div>
  <div class="carousel-dots">
    <div class="dot active" onclick="goToSlide(0)"></div>
    <div class="dot" onclick="goToSlide(1)"></div>
    <div class="dot" onclick="goToSlide(2)"></div>
  </div>
  </section>

  <script>
    const track = document.querySelector('.carousel-track');
    const dots = document.querySelectorAll('.dot');
    let currentSlide = 0;

    function updateSlide() {
      track.style.transform = `translateX(-${currentSlide * 100}%)`;
      dots.forEach(dot => dot.classList.remove('active'));
      dots[currentSlide].classList.add('active');
    }

    function nextSlide() {
      currentSlide = (currentSlide + 1) % 3;
      updateSlide();
    }

    function prevSlide() {
      currentSlide = (currentSlide - 1 + 3) % 3;
      updateSlide();
    }

    function goToSlide(index) {
      currentSlide = index;
      updateSlide();
    }
  </script>
<br>
<style>
    body {
      background-color: #f2f2f2;
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 30px;
    }

    .container {
      max-width: 600px;
      margin: auto;
      background: #fff;
      padding: 25px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    h2 {
      text-align: center;
      margin-bottom: 25px;
    }

    .formulario-contato {
      display: flex;
      flex-direction: column;
      gap: 20px;
    }

    .campo-form {
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .campo-form label {
      width: 150px;
      font-weight: bold;
      display: flex;
      align-items: center;
    }

    .campo-form i {
      margin-right: 6px;
      color: #007bff;
    }

    .campo-form input,
    .campo-form select,
    .campo-form textarea {
      flex: 1;
      padding: 10px;
      font-size: 16px;
      border: 1px solid #ccc;
      border-radius: 6px;
    }

    textarea {
      resize: vertical;
    }

    button {
      padding: 12px;
      background-color: #007bff;
      color: white;
      border: none;
      border-radius: 6px;
      font-size: 18px;
      cursor: pointer;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    button i {
      margin-right: 8px;
    }

    button:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>

<div class="container">
  <h2>Contato</h2>
  <form action="https://formspree.io/f/mvgroewk" method="POST" class="formulario-contato">

    <div class="campo-form">
      <label for="nome"><i class="fas fa-user"></i> Nome:</label>
      <input type="text" id="nome" name="nome" required>
    </div>

    <div class="campo-form">
      <label for="email"><i class="fas fa-envelope"></i> Email:</label>
      <input type="email" id="email" name="email" required>
    </div>

    <div class="campo-form">
      <label for="telefone"><i class="fas fa-phone"></i> Telefone:</label>
      <input type="tel" id="telefone" name="telefone" required>
    </div>

    <div class="campo-form">
      <label for="estofado"><i class="fas fa-couch"></i> Estofado:</label>
      <select id="estofado" name="estofado" required>
        <option value="">Selecione</option>
        <option value="sofa">Sofá</option>
        <option value="poltrona">Poltrona</option>
        <option value="cadeira">Cadeira</option>
        <option value="banco-carro">Banco de Carro</option>
        <option value="banco-carro">Outros</option>
      </select>
    </div>

    <div class="campo-form">
      <label for="endereco"><i class="fas fa-map-marker-alt"></i> Endereço:</label>
      <input type="text" id="endereco" name="endereco" required>
    </div>

    <div class="campo-form">
      <label for="mensagem"><i class="fas fa-comment-dots"></i> Mensagem:</label>
      <textarea id="mensagem" name="mensagem" rows="4"></textarea>
    </div>

    <button type="submit"><i class="fas fa-paper-plane"></i> Enviar</button>
  </form>
</div>

</section>


  
  <section id="depoimentos" style="padding: 3rem 1rem; background-color: #f4f9ff;">
  <h2 style="text-align: center; color: #0077cc; font-size: 2rem; margin-bottom: 2rem;">Depoimentos de Clientes</h2>
  
  <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 2rem; max-width: 1100px; margin: 0 auto;">
    <?php
      $depoimentos = [
        ["nome" => "Marcos S.", "mensagem" => "Meu sofá parecia novo depois da limpeza! Super indico a Costa Clean.", "estrelas" => 5],
        ["nome" => "Fernanda A.", "mensagem" => "Atendimento pontual, preço justo e resultado excelente!", "estrelas" => 4],
        ["nome" => "João L.", "mensagem" => "Achei que teria que trocar meu colchão, mas eles salvaram!", "estrelas" => 5],
        ["nome" => "Vanessa M.", "mensagem" => "Serviço impecável. Equipe profissional e super atenciosa.", "estrelas" => 5],
        ["nome" => "Carlos T.", "mensagem" => "Rápido, limpo e eficiente. Muito obrigado!", "estrelas" => 4],
        ["nome" => "Juliana R.", "mensagem" => "Empresa séria, amei o resultado! Recomendo para todos.", "estrelas" => 5],
      ];

      foreach ($depoimentos as $dep) {
        $estrelas = str_repeat("★", $dep['estrelas']) . str_repeat("☆", 5 - $dep['estrelas']);
        echo "
        <div style='background: white; border-radius: 10px; padding: 1.5rem; box-shadow: 0 4px 12px rgba(0,0,0,0.08);'>
          <div style='font-weight: bold; color: #0077cc; margin-bottom: 0.5rem;'>{$dep['nome']}</div>
          <div style='color: #ffaa00; font-size: 1.2rem; margin-bottom: 0.5rem;'>$estrelas</div>
          <div style='color: #333;'>{$dep['mensagem']}</div>
        </div>
        ";
      }
    ?>
  </div>
</section>

  <footer class="footer">
    <div class="social-highlight">
  <h3>Fale com a gente</h3>
  <p>Entre em contato ou siga a Costa Clean nas redes sociais:</p>
  <div class="social-buttons">
    <a href="https://wa.me/5544988317404?text=Olá,%20gostaria%20de%20contratar%20os%20serviços%20da%20Costa%20Clean!" target="_blank" class="whatsapp" aria-label="WhatsApp">
  <img src="https://cdn-icons-png.flaticon.com/512/733/733585.png" alt="WhatsApp" />
  WhatsApp
</a>
    <a href="https://instagram.com/costaclean_higienizacao/" target="_blank" class="instagram" aria-label="Instagram">
      <img src="https://cdn-icons-png.flaticon.com/512/2111/2111463.png" alt="Instagram" />
      Instagram
    </a>
  <p></div></p>
    <p>&copy;  Todos os direitos reservados.</p>
    <p>Desenvolvido por João Vitor Crispin.</p>
    <div class="footer-logo">
      <img src="img/Logo Costa Clean.png" alt="Logo Costa Clean">
    </div>
  </footer>
  <script>
  let slideAtual = 0;
  const slides = document.querySelectorAll('.slide');

  function mostrarSlide(index) {
    slides.forEach((slide, i) => {
      slide.classList.toggle('active', i === index);
    });
  }

  function mudarSlide(direcao) {
    slideAtual += direcao;
    if (slideAtual < 0) slideAtual = slides.length - 1;
    if (slideAtual >= slides.length) slideAtual = 0;
    mostrarSlide(slideAtual);
  }

  // Inicia com o primeiro slide
  mostrarSlide(slideAtual);
</script>


</body>
</html>
