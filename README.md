<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <title>Presentación | Ingeniería de Sistemas</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Fuente -->
  <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@300;400;600;800&display=swap" rel="stylesheet">

  <style>
    :root {
      --bg: #0b0f1a;
      --panel: #12172a;
      --accent: #00e5ff;
      --accent2: #7c8cff;
      --text: #e6e8ff;
      --muted: #9aa0c3;
    }

    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      font-family: 'JetBrains Mono', monospace;
    }

    body {
      background:
        radial-gradient(circle at top left, #121a3a, transparent),
        radial-gradient(circle at bottom right, #081028, transparent),
        var(--bg);
      color: var(--text);
      overflow: hidden;
    }

    .slides {
      display: flex;
      width: 400vw;
      height: 100vh;
      transition: transform 0.7s cubic-bezier(.4,0,.2,1);
    }

    section {
      width: 100vw;
      padding: 80px;
      display: grid;
      grid-template-columns: 1.3fr 1fr;
      gap: 60px;
      align-items: center;
    }

    /* HERO */
    .hero h1 {
      font-size: 3.2rem;
      font-weight: 800;
      line-height: 1.1;
      margin-bottom: 18px;
    }

    .hero span {
      color: var(--accent);
    }

    .hero p {
      font-size: 1.1rem;
      color: var(--muted);
      max-width: 520px;
      line-height: 1.6;
    }

    /* FOTO */
    .photo {
      width: 300px;
      height: 380px;
      border-radius: 18px;
      overflow: hidden;
      background: linear-gradient(135deg, #0ff, #7c8cff);
      padding: 2px;
    }

    .photo div {
      width: 100%;
      height: 100%;
      border-radius: 16px;
      overflow: hidden;
      background: var(--panel);
    }

    .photo img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      filter: grayscale(20%);
    }

    /* INFO BLOCKS */
    .blocks {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 22px;
      margin-top: 20px;
    }

    .block {
      background: var(--panel);
      padding: 24px;
      border-radius: 16px;
      border: 1px solid rgba(255,255,255,0.06);
    }

    .block h3 {
      font-size: 1rem;
      color: var(--accent);
      margin-bottom: 8px;
    }

    .block p {
      font-size: 0.95rem;
      color: var(--muted);
      line-height: 1.4;
    }

    /* CENTER */
    .center {
      grid-template-columns: 1fr;
      text-align: center;
    }

    .center h2 {
      font-size: 2.8rem;
      margin-bottom: 20px;
    }

    .indicator {
      position: fixed;
      bottom: 30px;
      right: 40px;
      font-size: 0.9rem;
      color: var(--muted);
    }

    @media (max-width: 900px) {
      section {
        grid-template-columns: 1fr;
        text-align: center;
      }

      .photo {
        margin: auto;
      }
    }
  </style>
</head>

<body>

<div class="slides" id="slides">

  <!-- SLIDE 1 -->
  <section class="hero">
    <div>
      <h1>Hola, soy <span>Christian Florez</span></h1>
      <p>
        Estudiante de <strong>Ingeniería de Sistemas</strong>,
        enfocado en programación, lógica computacional
        y desarrollo de soluciones eficientes.
      </p>
    </div>

    <div class="photo">
      <div>
       <img src="img/cf.jpg" alt="Foto de presentación" />

      </div>
    </div>
  </section>

  <!-- SLIDE 2 -->
  <section>
    <div>
      <h2>Perfil Técnico</h2>
      <p class="muted">
        Formación orientada al análisis, diseño e implementación
        de sistemas informáticos.
      </p>

      <div class="blocks">
        <div class="block">
          <h3>Lenguajes</h3>
          <p>Java, Python, C++, JavaScript</p>
        </div>
        <div class="block">
          <h3>Fundamentos</h3>
          <p>Algoritmos, estructuras de datos, POO</p>
        </div>
        <div class="block">
          <h3>Sistemas</h3>
          <p>Bases de datos, sistemas operativos</p>
        </div>
        <div class="block">
          <h3>Metodología</h3>
          <p>Análisis, diseño y documentación</p>
        </div>
      </div>
    </div>
  </section>

  <!-- SLIDE 3 -->
  <section class="center">
    <h2>Objetivo Profesional</h2>
    <p>
      Desarrollar software de calidad, optimizar procesos
      y crecer como ingeniero aportando soluciones tecnológicas.
    </p>
  </section>

  <!-- SLIDE 4 -->
  <section class="center">
    <h2>Gracias</h2>
    <p>¿Preguntas?</p>
  </section>

</div>

<div class="indicator" id="indicator">1 / 4</div>

<script>
  let index = 0;
  const slides = document.getElementById("slides");
  const indicator = document.getElementById("indicator");
  const total = 4;

  document.addEventListener("keydown", (e) => {
    if (e.key === "ArrowRight" && index < total - 1) index++;
    if (e.key === "ArrowLeft" && index > 0) index--;

    slides.style.transform = `translateX(-${index * 100}vw)`;
    indicator.textContent = `${index + 1} / ${total}`;
  });
</script>

</body>
</html>
