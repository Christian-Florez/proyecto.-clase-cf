<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Presentación</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <style>
    body {
      margin: 0;
      font-family: "Segoe UI", Arial, sans-serif;
      background: #ffffff;
      color: #111;
      overflow: hidden;
    }

    .slides {
      display: flex;
      width: 400vw;
      height: 100vh;
      transition: transform 0.4s ease;
    }

    section {
      width: 100vw;
      height: 100vh;
      padding: 70px;
      box-sizing: border-box;
      display: flex;
      flex-direction: column;
      justify-content: center;
    }

    h1 {
      font-size: 3rem;
      margin-bottom: 20px;
      border-bottom: 2px solid #000;
      display: inline-block;
      padding-bottom: 5px;
    }

    h2 {
      font-size: 2.2rem;
      margin-bottom: 15px;
    }

    p, li {
      font-size: 1.3rem;
      line-height: 1.6;
      max-width: 900px;
    }

    ul {
      margin-left: 25px;
    }

    .footer {
      position: fixed;
      bottom: 20px;
      right: 30px;
      font-size: 0.9rem;
      color: #444;
    }
  </style>
</head>

<body>

<div class="slides" id="slides">

  <!-- SLIDE 1 -->
  <section>
    <h1>Presentación Personal</h1>
    <p>
      Mi nombre es <strong>Christian Flórez</strong>, tengo <strong>20 años</strong>
      y soy estudiante de <strong>Ingeniería de Sistemas</strong>.
    </p>
  </section>

  <!-- SLIDE 2 -->
  <section>
    <h2>Perfil Académico</h2>
    <p>
      Actualmente me encuentro cursando la carrera de Ingeniería de Sistemas,
      adquiriendo conocimientos en programación, análisis y lógica computacional.
    </p>
  </section>

  <!-- SLIDE 3 -->
  <section>
    <h2>Conocimientos</h2>
    <ul>
      <li>Fundamentos de programación</li>
      <li>Algoritmos y estructuras básicas</li>
      <li>Bases de datos (conceptos generales)</li>
      <li>Sistemas informáticos</li>
    </ul>
  </section>

  <!-- SLIDE 4 -->
  <section>
    <h2>Objetivo</h2>
    <p>
      Continuar fortaleciendo mis competencias académicas y profesionales,
      con el fin de convertirme en un ingeniero de sistemas competente.
    </p>
  </section>

</div>

<div class="footer">
  Usa ← → para navegar
</div>

<script>
  let index = 0;
  const slides = document.getElementById("slides");
  const total = 4;

  document.addEventListener("keydown", (e) => {
    if (e.key === "ArrowRight" && index < total - 1) index++;
    if (e.key === "ArrowLeft" && index > 0) index--;

    slides.style.transform = `translateX(-${index * 100}vw)`;
  });
</script>

</body>
</html>


