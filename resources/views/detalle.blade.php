<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Kawasaki Ninja H2 Carbon 2017 — Detalle</title>
  <meta name="description" content="Landing page de detalle para la Kawasaki Ninja H2 Carbon 2017: potencia, lujo y exclusividad en edición limitada.">
  <style>
    :root{
      --bg:#0b0b0d;
      --panel:#111115;
      --soft:#17171c;
      --muted:#9ea2ab;
      --text:#f5f6f8;
      --brand:#d2a54b; /* dorado lujo */
      --accent:#b88a2b;
      --radius:18px;
      --shadow:0 10px 30px rgba(0,0,0,.45);
      --shadow-soft:0 6px 20px rgba(0,0,0,.35);
    }
    *{box-sizing:border-box}
    body{margin:0;background:var(--bg);color:var(--text);font-family:Inter,ui-sans-serif,system-ui}
    img{max-width:100%;display:block;border-radius:var(--radius)}
    .container{width:min(1200px,92%);margin-inline:auto}

    header{padding:18px 0;text-align:center;font-weight:700;letter-spacing:.5px;color:var(--brand)}
    .hero{position:relative;isolation:isolate}
    .hero::before{content:"";position:absolute;inset:0;background:url('https://i.blogs.es/5769df/kawasaki-ninja-h2-carbon-2017-3-/1366_2000.jpg') center/cover no-repeat;filter:grayscale(.1) contrast(1.05);z-index:-2}
    .hero::after{content:"";position:absolute;inset:0;background:linear-gradient(180deg, rgba(11,11,13,.4), rgba(11,11,13,.95));z-index:-1}
    .hero-wrap{padding:120px 0;display:grid;grid-template-columns:1.1fr .9fr;gap:36px;align-items:center}
    h1{font-size:clamp(36px,4.5vw,60px);line-height:1.1;margin:0;color:var(--brand)}
    .lead{font-size:18px;color:var(--muted);margin-top:12px;max-width:58ch}
    .btn{display:inline-block;padding:12px 20px;border-radius:999px;font-weight:700;margin-top:20px;text-decoration:none}
    .btn-primary{background:linear-gradient(135deg,var(--brand),var(--accent));color:#0b0b0d;box-shadow:var(--shadow-soft)}

    .stats{display:grid;grid-template-columns:repeat(3,1fr);gap:16px;margin-top:28px}
    .stat{background:rgba(255,255,255,.03);border:1px solid rgba(255,255,255,.08);padding:16px;border-radius:var(--radius);text-align:center}
    .stat b{font-size:22px;color:var(--brand)}

    section{padding:68px 0}
    .section-title{font-size:28px;margin-bottom:14px;color:var(--brand)}
    .muted{color:var(--muted)}

    .features{display:grid;grid-template-columns:repeat(3,1fr);gap:18px}
    .feature{background:var(--panel);border:1px solid rgba(255,255,255,.08);border-radius:var(--radius);padding:18px;box-shadow:var(--shadow)}
    .feature h3{margin:6px 0 8px}

    .specs-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:16px}
    .spec{background:var(--soft);border:1px solid rgba(255,255,255,.08);border-radius:var(--radius);padding:14px;box-shadow:var(--shadow-soft)}
    .spec b{color:var(--brand)}

    footer{border-top:1px solid rgba(255,255,255,.08);padding:28px 0;color:var(--muted);text-align:center}
    @media(max-width:900px){.hero-wrap{grid-template-columns:1fr}.features{grid-template-columns:1fr 1fr}.stats{grid-template-columns:1fr 1fr}}
    @media(max-width:600px){.features,.specs-grid{grid-template-columns:1fr}.stats{grid-template-columns:1fr}}
  </style>
</head>
<body>
  <header>
    Kawasaki Ninja H2 Carbon 2017 — Edición Limitada
  </header>

  <!-- HERO -->
  <section class="hero">
    <div class="container hero-wrap">
      <div>
        <h1>Kawasaki Ninja H2 Carbon</h1>
        <p class="lead">Exclusiva, poderosa y refinada: la edición Carbon 2017 redefine lo que significa una superbike. Fibra de carbono, 210 caballos de fuerza y ADN de competición.</p>
        <a class="btn btn-primary" href="#detalles">Ver especificaciones</a>
        <div class="stats">
          <div class="stat"><div class="muted">Potencia</div><b>210 HP</b></div>
          <div class="stat"><div class="muted">Peso</div><b>238 kg</b></div>
          <div class="stat"><div class="muted">0–100 km/h</div><b>3.2 s</b></div>
        </div>
      </div>
      <aside>
        <img src="https://i.blogs.es/5769df/kawasaki-ninja-h2-carbon-2017-3-/1366_2000.jpg" alt="Kawasaki Ninja H2 Carbon 2017 vista lateral">
      </aside>
    </div>
  </section>

  <!-- FEATURES -->
  <section id="features">
    <div class="container">
      <h2 class="section-title">Características exclusivas</h2>
      <p class="muted">Cada detalle fue diseñado para la perfección: lujo, rendimiento y seguridad.</p>
      <div class="features">
        <div class="feature">
          <h3>Fibra de carbono CFRP</h3>
          <p class="muted">Carenado superior inspirado en la H2R, ultraligero y con acabado de lujo.</p>
        </div>
        <div class="feature">
          <h3>Suspensión Öhlins</h3>
          <p class="muted">TTX36 totalmente ajustable para precisión en pista y comodidad en ciudad.</p>
        </div>
        <div class="feature">
          <h3>IMU Bosch de 6 ejes</h3>
          <p class="muted">Cornering ABS, control de tracción avanzado y máxima seguridad en cada curva.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- SPECS -->
  <section id="detalles">
    <div class="container">
      <h2 class="section-title">Ficha técnica</h2>
      <div class="specs-grid">
        <div class="spec"><b>Cilindrada:</b> 998 cc (4 cilindros en línea, sobrealimentado)</div>
        <div class="spec"><b>Potencia:</b> 200 CV (210 CV con Ram Air)</div>
        <div class="spec"><b>Suspensión:</b> Horquilla invertida Ø 43 mm / Öhlins TTX trasero</div>
        <div class="spec"><b>Frenos:</b> Brembo® doble disco 330 mm / disco trasero 250 mm</div>
        <div class="spec"><b>Chasis:</b> Tubular de acero con basculante monobrazo</div>
        <div class="spec"><b>Altura del asiento:</b> 825 mm</div>
        <div class="spec"><b>Depósito:</b> 17 L</div>
        <div class="spec"><b>Velocidad máxima:</b> 300+ km/h</div>
      </div>
    </div>
  </section>

  <footer>
    © <span id="y"></span> Detalle Kawasaki Ninja H2 Carbon • Página estática HTML+CSS
  </footer>
  <script>document.getElementById('y').textContent = new Date().getFullYear();</script>
</body>
</html>
