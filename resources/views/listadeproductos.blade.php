<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HYPERROAD | Catálogo</title>
  <style>
    :root {
      --brand: #d4af37; /* Dorado */
      --dark: #0a0a0a; /* Negro elegante */
      --light: #f5f5f5; /* Blanco suave */
      --gray: #1e1e1e; /* Gris oscuro */
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    body {
      background-color: var(--dark);
      color: var(--light);
      line-height: 1.6;
    }

    /* Header */
    header {
      background: var(--dark);
      padding: 1rem 2rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
      border-bottom: 2px solid var(--brand);
      position: sticky;
      top: 0;
      z-index: 1000;
    }

    header h1 {
      color: var(--brand);
      font-size: 1.8rem;
      letter-spacing: 2px;
    }

    nav a {
      color: var(--light);
      margin-left: 1.5rem;
      text-decoration: none;
      font-weight: bold;
      transition: color 0.3s ease;
    }

    nav a:hover {
      color: var(--brand);
    }

    /* Sección de filtros */
    .filters {
      background: var(--gray);
      padding: 2rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
      gap: 1rem;
      border-bottom: 2px solid var(--brand);
    }

    .filters input,
    .filters select {
      padding: 0.7rem 1rem;
      border: none;
      border-radius: 5px;
      outline: none;
      font-size: 1rem;
    }

    .filters input {
      flex: 1;
      min-width: 200px;
    }

    .filters select {
      background: var(--brand);
      color: var(--dark);
      font-weight: bold;
      cursor: pointer;
    }

    /* Listado de productos */
    .products {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
      gap: 2rem;
      padding: 2rem;
    }

    .product-card {
      background: var(--gray);
      border: 1px solid var(--brand);
      border-radius: 10px;
      overflow: hidden;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .product-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 16px rgba(212, 175, 55, 0.4);
    }

    .product-card img {
      width: 100%;
      height: 200px;
      object-fit: cover;
      border-bottom: 2px solid var(--brand);
    }

    .product-card .info {
      padding: 1rem;
    }

    .product-card h3 {
      color: var(--brand);
      margin-bottom: 0.5rem;
      font-size: 1.2rem;
    }

    .product-card p {
      font-size: 0.9rem;
      margin-bottom: 0.8rem;
    }

    .price {
      font-size: 1.1rem;
      font-weight: bold;
      color: var(--light);
    }

    .btn {
      display: inline-block;
      background: var(--brand);
      color: var(--dark);
      padding: 0.6rem 1rem;
      border-radius: 5px;
      text-decoration: none;
      font-weight: bold;
      transition: background 0.3s ease;
    }

    .btn:hover {
      background: #b8902f;
    }

    /* Footer */
    footer {
      text-align: center;
      padding: 2rem;
      border-top: 2px solid var(--brand);
      margin-top: 2rem;
      font-size: 0.9rem;
    }

    footer p {
      color: var(--light);
    }

    footer span {
      color: var(--brand);
      font-weight: bold;
    }
  </style>
</head>
<body>

  <!-- Header -->
  <header>
    <h1>HYPERROAD</h1>
    <nav>
      <a href="#">Inicio</a>
      <a href="#">Productos</a>
      <a href="#">Carrito</a>
      <a href="#">Contacto</a>
    </nav>
  </header>

  <!-- Filtros -->
  <section class="filters">
    <input type="text" placeholder="Buscar producto...">
    <select>
      <option value="">Categoría</option>
      <option value="motos">Motos</option>
      <option value="accesorios">Accesorios</option>
      <option value="indumentaria">Indumentaria</option>
    </select>
    <select>
      <option value="">Ordenar por</option>
      <option value="precio-asc">Precio: Menor a Mayor</option>
      <option value="precio-desc">Precio: Mayor a Menor</option>
      <option value="nombre">Nombre</option>
    </select>
  </section>

  <!-- Productos -->
  <section class="products">
    <div class="product-card">
      <img src="https://www.incolmotos-yamaha.com.co/wp-content/uploads/2018/03/mt09-negra.jpg" alt="Yamaha MT-09">
      <div class="info">
        <h3>Yamaha MT-09</h3>
        <p>La naked definitiva, con potencia y estilo premium.</p>
        <p class="price">$45,000,000</p>
        <a href="#" class="btn">Agregar al Carrito</a>
      </div>
    </div>

    <div class="product-card">
      <img src="https://www.motoscortes.com/wp-content/uploads/2024/04/2024-Yamaha-MT07-Tech_Black.jpg" alt="MT-07">
      <div class="info">
        <h3>Yamaha MT-07</h3>
        <p>Equilibrio perfecto entre agilidad y potencia.</p>
        <p class="price">$35,000,000</p>
        <a href="#" class="btn">Agregar al Carrito</a>
      </div>
    </div>

    <div class="product-card">
      <img src="https://imgd.aeplcdn.com/1280x720/n/cw/ec/23190/cbr1000rr-right-front-three-quarter.jpeg?isig=0" alt="CB 1000 RR-R">
      <div class="info">
        <h3>Honda CB1000 RR-R</h3>
        <p>Protección máxima con diseño aerodinámico.</p>
        <p class="price">$2,500,000</p>
        <a href="#" class="btn">Agregar al Carrito</a>
      </div>
    </div>

    <div class="product-card">
      <img src="https://i.blogs.es/5769df/kawasaki-ninja-h2-carbon-2017-3-/1366_2000.jpg" alt="Kawasaki Ninja H2">
      <div class="info">
        <h3>Edición Carbono 2017, potencia y lujo en una sola máquina.</h3>
        <p>Comodidad y seguridad en cada viaje.</p>
        <p class="price">$800,000</p>
        <a href="#" class="btn">Agregar al Carrito</a>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <p>&copy; 2025 <span>HYPERROAD</span>. Todos los derechos reservados.</p>
  </footer>

</body>
</html>
