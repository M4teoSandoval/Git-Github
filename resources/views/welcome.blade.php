<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>HYPERROAD — Motos de Alto Cilindraje y Lujo</title>
  <meta name="description" content="Landing page de ecommerce para motos premium: alto cilindraje, diseño de lujo y rendimiento excepcional.">
  <style>
    :root{
      --bg:#0b0b0d;
      --panel:#111115;
      --soft:#17171c;
      --muted:#9ea2ab;
      --text:#f5f6f8;
      --brand:#d2a54b; /* dorado lujo */
      --accent:#b88a2b; /* hover */
      --ok:#2ecc71;
      --danger:#ff6b6b;
      --radius:18px;
      --shadow:0 10px 30px rgba(0,0,0,.45);
      --shadow-soft:0 6px 20px rgba(0,0,0,.35);
    }
    *{box-sizing:border-box}
    html,body{margin:0;height:100%;scroll-behavior:smooth;background:var(--bg);color:var(--text);font-family:Inter,ui-sans-serif,system-ui,-apple-system,Segoe UI,Roboto,"Helvetica Neue",Arial}
    a{color:inherit;text-decoration:none}
    img{max-width:100%;display:block}
    .container{width:min(1200px,92%);margin-inline:auto}

    /* NAV */
    header{position:sticky;top:0;z-index:50;background:linear-gradient(180deg, rgba(11,11,13,.9), rgba(11,11,13,.65) 60%, rgba(11,11,13,0));backdrop-filter:blur(8px)}
    .nav{display:flex;align-items:center;justify-content:space-between;padding:14px 0}
    .brand{display:flex;gap:10px;align-items:center;font-weight:700;letter-spacing:.5px}
    .brand-badge{width:36px;height:36px;border-radius:12px;display:grid;place-items:center;background:linear-gradient(135deg,var(--brand),#7c5d1a);box-shadow:inset 0 0 20px rgba(0,0,0,.25)}
    .nav a.link{opacity:.9;margin-left:18px}
    .nav a.link:hover{opacity:1;color:var(--brand)}
    .cta{padding:10px 16px;border-radius:999px;background:linear-gradient(135deg,var(--brand),var(--accent));color:#0b0b0d;font-weight:700;box-shadow:var(--shadow-soft)}
    .cta:hover{transform:translateY(-1px)}

    /* HERO */
    .hero{position:relative;isolation:isolate}
    .hero::before{content:"";position:absolute;inset:0;background:url('https://images.unsplash.com/photo-1493236296276-d17357e2880e?q=80&w=2400&auto=format&fit=crop') center/cover no-repeat;filter:grayscale(.2) contrast(1.05);z-index:-2}
    .hero::after{content:"";position:absolute;inset:0;background:radial-gradient(1200px 600px at 70% 40%, rgba(210,165,75,.25), transparent 50%), linear-gradient(180deg, rgba(11,11,13,.75), rgba(11,11,13,.92));z-index:-1}
    .hero-wrap{padding:96px 0 88px;display:grid;grid-template-columns:1.1fr .9fr;gap:36px;align-items:center}
    .kicker{display:inline-flex;gap:8px;align-items:center;background:rgba(255,255,255,.06);border:1px solid rgba(255,255,255,.08);padding:8px 12px;border-radius:999px;font-size:12px;letter-spacing:.12em;text-transform:uppercase}
    .kicker svg{width:16px;height:16px}
    h1{font-size:clamp(36px,4.5vw,64px);line-height:1.04;margin:14px 0 10px}
    .lead{font-size:clamp(15px,1.4vw,18px);color:var(--muted);max-width:58ch}
    .hero-actions{display:flex;gap:14px;margin-top:22px;flex-wrap:wrap}
    .btn{display:inline-flex;align-items:center;gap:10px;padding:12px 18px;border-radius:999px;font-weight:700;border:1px solid transparent}
    .btn-primary{background:linear-gradient(135deg,var(--brand),var(--accent));color:#0b0b0d}
    .btn-primary:focus,.btn-outline:focus{outline:3px solid rgba(210,165,75,.35)}
    .btn-outline{border-color:rgba(255,255,255,.14);background:rgba(255,255,255,.02)}
    .hero-card{background:rgba(255,255,255,.03);border:1px solid rgba(255,255,255,.08);padding:18px;border-radius:var(--radius);box-shadow:var(--shadow-soft)}
    .hero-stats{display:grid;grid-template-columns:repeat(3,1fr);gap:12px;margin-top:12px}
    .stat{background:linear-gradient(180deg, rgba(255,255,255,.06), rgba(255,255,255,.03));border:1px solid rgba(255,255,255,.08);padding:14px;border-radius:14px;text-align:center}
    .stat b{font-size:20px}

    /* BADGES */
    .badges{display:flex;gap:22px;align-items:center;flex-wrap:wrap;padding:24px 0 10px}
    .badge{display:flex;gap:10px;align-items:center;opacity:.85}
    .badge svg{width:18px;height:18px;color:var(--brand)}

    /* FEATURES */
    section{padding:68px 0}
    .section-title{font-size:clamp(22px,2.4vw,32px);margin:0 0 16px}
    .muted{color:var(--muted)}
    .features{display:grid;grid-template-columns:repeat(3,1fr);gap:18px}
    .feature{background:var(--panel);border:1px solid rgba(255,255,255,.08);border-radius:var(--radius);padding:18px;box-shadow:var(--shadow)}
    .feature h3{margin:6px 0 8px}

    /* CATALOGO */
    .catalogo-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:18px}
    .card{background:var(--soft);border:1px solid rgba(255,255,255,.08);border-radius:var(--radius);overflow:hidden;box-shadow:var(--shadow-soft);display:flex;flex-direction:column}
    .card-media{position:relative;aspect-ratio:16/10;background:linear-gradient(135deg,#1c1c22,#0e0e12)}
    .card-media::after{content:"";position:absolute;inset:0;background:radial-gradient(800px 300px at 70% 20%, rgba(210,165,75,.2), transparent 60%)}
    .card-body{padding:16px}
    .chip{font-size:12px;padding:6px 10px;border-radius:999px;border:1px solid rgba(255,255,255,.1);opacity:.9}
    .price{margin-left:auto;font-weight:800;color:var(--brand)}
    .specs{display:flex;gap:12px;flex-wrap:wrap;margin-top:10px;color:var(--muted);font-size:14px}
    .buy{margin-top:14px;display:flex;gap:10px}
    .btn-ghost{flex:1;text-align:center;padding:10px 14px;border-radius:12px;border:1px solid rgba(255,255,255,.1)}
    .btn-ghost:hover{border-color:rgba(210,165,75,.6);color:var(--brand)}

    /* DESTACADOS */
    .highlight{display:grid;grid-template-columns:1.2fr .8fr;gap:22px;align-items:center;background:linear-gradient(135deg,#121218,#0b0b0d);border:1px solid rgba(255,255,255,.08);border-radius:var(--radius);padding:22px}
    .highlight figure{border-radius:14px;overflow:hidden;margin:0;border:1px solid rgba(255,255,255,.08)}

    /* TESTIMONIOS (estáticos) */
    .testimonials{display:grid;grid-template-columns:repeat(3,1fr);gap:18px}
    blockquote{margin:0;background:var(--panel);border:1px solid rgba(255,255,255,.08);padding:18px;border-radius:14px}
    blockquote footer{margin-top:10px;color:var(--muted)}

    /* CONTACTO */
    .contact{display:grid;grid-template-columns:1fr 1fr;gap:18px}
    .contact .panel{background:var(--panel);border:1px solid rgba(255,255,255,.08);border-radius:var(--radius);padding:18px}
    .contact form{display:grid;gap:12px}
    input,textarea,select{width:100%;padding:12px 14px;border-radius:12px;border:1px solid rgba(255,255,255,.12);background:#0f0f13;color:var(--text)}
    .disclaimer{font-size:12px;color:var(--muted)}

    /* FOOTER */
    footer{border-top:1px solid rgba(255,255,255,.08);padding:28px 0;color:var(--muted)}

    /* RESPONSIVE */
    @media (max-width:1000px){
      .hero-wrap{grid-template-columns:1fr}
      .highlight{grid-template-columns:1fr}
      .features,.catalogo-grid,.testimonials,.contact{grid-template-columns:1fr 1fr}
    }
    @media (max-width:640px){
      .features,.catalogo-grid,.testimonials,.contact{grid-template-columns:1fr}
      .hero-wrap{padding:88px 0 72px}
      .hero-stats{grid-template-columns:1fr 1fr}
      .nav a.link{display:none}
    }
  </style>
</head>
<body>
  <!-- NAV -->
  <header>
    <nav class="container nav" aria-label="Principal">
      <div class="brand">
        <span class="brand-badge" aria-hidden="true">
          <!-- simple logo -->
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <path d="M3 16c6-8 12-8 18 0" stroke="#0b0b0d" stroke-width="2"/>
            <path d="M7 16h10l2 3H5l2-3Z" fill="#0b0b0d"/>
          </svg>
        </span>
        <span>HYPERROAD</span>
      </div>
      <div>
        <a class="link" href="#features">Características</a>
        <a class="link" href="#catalogo">Catálogo</a>
        <a class="link" href="#contacto">Contacto</a>
        <a class="cta" href="#catalogo">Ver modelos</a>
      </div>
    </nav>
  </header>

  <!-- HERO -->
  <section class="hero" role="banner" aria-label="Portada">
    <div class="container hero-wrap">
      <div>
        <span class="kicker">
          <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path d="M3 12h18M12 3v18" stroke="currentColor" stroke-width="2"/></svg>
          Alto cilindraje • Lujo
        </span>
        <h1>Potencia que impone. Diseño que enamora.</h1>
        <p class="lead">Descubre motos premium cuidadosamente seleccionadas para quienes exigen rendimiento puro, acabados de lujo y presencia inconfundible. Ediciones limitadas, garantía extendida y entrega en todo el país.</p>
        <div class="hero-actions">
          <a class="btn btn-primary" href="#catalogo">
            <!-- cart icon -->
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path d="M6 6h15l-1.5 9h-12L6 6Z" stroke="#0b0b0d" stroke-width="2"/><circle cx="9" cy="20" r="1.5" fill="#0b0b0d"/><circle cx="18" cy="20" r="1.5" fill="#0b0b0d"/></svg>
            Comprar ahora
          </a>
          <a class="btn btn-outline" href="#features">Ver detalles</a>
        </div>
        <div class="badges" aria-label="Beneficios">
          <div class="badge">
            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4 12l4 4 12-12" stroke="currentColor" stroke-width="2"/></svg>
            Garantía 2 años
          </div>
          <div class="badge">
            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12 2v20M2 12h20" stroke="currentColor" stroke-width="2"/></svg>
            Envío nacional
          </div>
          <div class="badge">
            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12 8a4 4 0 100 8 4 4 0 000-8Z" stroke="currentColor" stroke-width="2"/><path d="M12 2v3m0 14v3m9-9h-3M6 12H3m13.95-6.95l-2.12 2.12M8.17 17.83l-2.12 2.12m12.12 0l-2.12-2.12M8.17 6.17 6.05 4.05" stroke="currentColor" stroke-width="2"/></svg>
            Ediciones limitadas
          </div>
        </div>
      </div>
      <aside class="hero-card" aria-label="Resumen de rendimiento">
        <h2 class="section-title" style="margin:0 0 8px">Serie Carbon X</h2>
        <p class="muted" style="margin:0">La combinación perfecta de potencia y precisión. Optimizada para pista y ciudad.</p>
        <div class="hero-stats">
          <div class="stat"><div class="muted">0–100 km/h</div><b>3.2 s</b></div>
          <div class="stat"><div class="muted">Potencia</div><b>210 HP</b></div>
          <div class="stat"><div class="muted">Peso</div><b>189 kg</b></div>
        </div>
      </aside>
    </div>
  </section>

  <!-- FEATURES -->
  <section id="features" aria-labelledby="t-feat">
    <div class="container">
      <h2 id="t-feat" class="section-title">Ingeniería sin concesiones</h2>
      <p class="muted">Tecnología de competición, materiales livianos y acabados premium para una experiencia superior.</p>
      <div class="features" role="list">
        <article class="feature" role="listitem">
          <h3>Frenos Brembo® y ABS Pro</h3>
          <p class="muted">Control absoluto en cualquier condición, con discos sobredimensionados y modulaciones precisas.</p>
        </article>
        <article class="feature" role="listitem">
          <h3>Suspensión adaptable</h3>
          <p class="muted">Configura el comportamiento en milisegundos para ciudad, touring o pista.</p>
        </article>
        <article class="feature" role="listitem">
          <h3>Fibra de carbono y titanio</h3>
          <p class="muted">Chasis y escape ultraligeros, mayor rigidez y una estética inconfundible.</p>
        </article>
      </div>
    </div>
  </section>

  <!-- CATALOGO -->
  <section id="catalogo" aria-labelledby="t-cat">
    <div class="container">
      <h2 id="t-cat" class="section-title">Catálogo exclusivo</h2>
      <p class="muted">Modelos seleccionados para quienes buscan el equilibrio perfecto entre lujo y desempeño.</p>
      <div class="catalogo-grid" role="list">
        <!-- Card 1 -->
        <article class="card" role="listitem" aria-label="Carbon X RR">
          <div class="card-media" style="background:url('https://images.unsplash.com/photo-1503376780353-7e6692767b70?q=80&w=1600&auto=format&fit=crop') center/cover no-repeat"></div>
          <div class="card-body">
            <div style="display:flex;align-items:center;gap:10px">
              <span class="chip">Carbon X RR</span>
              <span class="price">$ 38.900</span>
            </div>
            <div class="specs">
              <span>1199 cc</span>
              <span>V4</span>
              <span>210 HP</span>
              <span>189 kg</span>
            </div>
            <div class="buy">
              <a class="btn-ghost" href="#contacto">Cotizar</a>
              <a class="btn-ghost" href="#contacto">Más info</a>
            </div>
          </div>
        </article>
        <!-- Card 2 -->
        <article class="card" role="listitem" aria-label="Apex GT Limited">
          <div class="card-media" style="background:url('https://www.incolmotos-yamaha.com.co/wp-content/uploads/2018/03/Azul-5-1.jpg') center/cover no-repeat"></div>
          <div class="card-body">
            <div style="display:flex;align-items:center;gap:10px">
              <span class="chip">Mt - 09v2</span>
              <span class="price">$ 29.500</span>
            </div>
            <div class="specs">
              <span>999 cc</span>
              <span>L4</span>
              <span>168 HP</span>
              <span>199 kg</span>
            </div>
            <div class="buy">
              <a class="btn-ghost" href="#contacto">Cotizar</a>
              <a class="btn-ghost" href="#contacto">Más info</a>
            </div>
          </div>
        </article>
        <!-- Card 3 -->
        <article class="card" role="listitem" aria-label="Valkyria R Black">
          <div class="card-media" style="background:url('https://images.unsplash.com/photo-1542362567-b07e54358753?q=80&w=1600&auto=format&fit=crop') center/cover no-repeat"></div>
          <div class="card-body">
            <div style="display:flex;align-items:center;gap:10px">
              <span class="chip">Valkyria R Black</span>
              <span class="price">$ 33.200</span>
            </div>
            <div class="specs">
              <span>1285 cc</span>
              <span>V2</span>
              <span>197 HP</span>
              <span>201 kg</span>
            </div>
            <div class="buy">
              <a class="btn-ghost" href="#contacto">Cotizar</a>
              <a class="btn-ghost" href="#contacto">Más info</a>
            </div>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- DESTACADO -->
  <section aria-labelledby="t-high">
    <div class="container highlight">
      <div>
        <h2 id="t-high" class="section-title">Edición Signature "Black Gold"</h2>
        <p class="muted">Numerada y certificada. Acabados en oro anodizado, carenado en fibra de carbono y escape en titanio. Un ícono de colección con alma de circuito.</p>
        <ul class="muted" style="line-height:1.9">
          <li>Quickshifter bidireccional</li>
          <li>Control de tracción de 6 ejes</li>
          <li>Modo pista con telemetría</li>
        </ul>
        <div class="hero-actions">
          <a class="btn btn-primary" href="#contacto">Reservar unidad</a>
          <a class="btn btn-outline" href="#catalogo">Volver al catálogo</a>
        </div>
      </div>
      <figure>
        <img src="https://images.unsplash.com/photo-1516981879613-4f458edc4c34?q=80&w=1600&auto=format&fit=crop" alt="Moto edición Black Gold con detalles en dorado y fibra de carbono"/>
      </figure>
    </div>
  </section>

  <!-- TESTIMONIOS -->
  <section aria-labelledby="t-test">
    <div class="container">
      <h2 id="t-test" class="section-title">Lo que dicen nuestros riders</h2>
      <div class="testimonials" role="list">
        <blockquote role="listitem">
          “Impresionante en recta y sorprendentemente dócil en curvas. El acabado es de otra liga.”
          <footer>— Camilo R., Medellín</footer>
        </blockquote>
        <blockquote role="listitem">
          “Servicio impecable, entrega puntual y asesoría de primera. Repetiría sin dudar.”
          <footer>— Laura V., Bogotá</footer>
        </blockquote>
        <blockquote role="listitem">
          “La mejor inversión para pista de fin de semana. Potencia con control total.”
          <footer>— Andrés P., Cali</footer>
        </blockquote>
      </div>
    </div>
  </section>

  <!-- CONTACTO -->
  <section id="contacto" aria-labelledby="t-contact">
    <div class="container contact">
      <div class="panel">
        <h2 id="t-contact" class="section-title">Hablemos de tu próxima moto</h2>
        <p class="muted">Déjanos tus datos y un asesor experto te contactará para armar la configuración ideal. (Formulario sin funcionalidad para esta demo)</p>
        <form aria-disabled="true">
          <div style="display:grid;grid-template-columns:1fr 1fr;gap:12px">
            <input type="text" placeholder="Nombre" aria-label="Nombre" disabled>
            <input type="tel" placeholder="Teléfono" aria-label="Teléfono" disabled>
          </div>
          <input type="email" placeholder="Correo" aria-label="Correo" disabled>
          <select aria-label="Modelo de interés" disabled>
            <option>Modelo de interés</option>
            <option>Carbon X RR</option>
            <option>Apex GT Limited</option>
            <option>Valkyria R Black</option>
          </select>
          <textarea rows="4" placeholder="Mensaje" aria-label="Mensaje" disabled></textarea>
          <div class="disclaimer">* Esta es una landing estática (HTML+CSS). Integraremos funcionalidades cuando lo necesites.</div>
        </form>
      </div>
      <div class="panel" aria-label="Información">
        <h3>Por qué elegirnos</h3>
        <ul class="muted" style="line-height:1.9">
          <li>Stock real y acceso a unidades bajo pedido</li>
          <li>Inspección técnica previa a entrega</li>
          <li>Accesorios premium y financiación</li>
          <li>Envíos asegurados a todo el país</li>
        </ul>
        <div style="margin-top:16px;display:flex;gap:10px;flex-wrap:wrap">
          <a class="btn-ghost" href="#">WhatsApp</a>
          <a class="btn-ghost" href="#">Instagram</a>
          <a class="btn-ghost" href="#">Ubicación</a>
        </div>
      </div>
    </div>
  </section>

  <footer>
    <div class="container" style="display:flex;justify-content:space-between;gap:12px;flex-wrap:wrap">
      <div>© <span id="y"></span> HYPERROAD. Todos los derechos reservados.</div>
      <div>Diseño estático HTML + CSS • Hecho para mostrar lujo y alto rendimiento</div>
    </div>
  </footer>

  <!-- Pequeño script inline sólo para el año dinámico (puedes borrar si no lo quieres) -->
  <script>document.getElementById('y').textContent = new Date().getFullYear();</script>
</body>
</html>