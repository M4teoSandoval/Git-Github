<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Carrito de Compras - Motos de Lujo</title>
  <style>
    :root {
      --bg: #0b0b0d;
      --panel: #111115;
      --soft: #17171c;
      --muted: #9ea2ab;
      --text: #f5f6f8;
      --brand: #d2a54b; /* dorado */
      --accent: #b88a2b;
      --radius: 18px;
      --shadow: 0 10px 30px rgba(0, 0, 0, .45);
      --shadow-soft: 0 6px 20px rgba(0, 0, 0, .35);
    }

    * { box-sizing: border-box; margin: 0; padding: 0; }
    body {
      font-family: Inter, Arial, sans-serif;
      background: var(--bg);
      color: var(--text);
    }

    header {
      text-align: center;
      padding: 2rem 1rem;
      background: var(--panel);
      border-bottom: 1px solid rgba(255,255,255,.08);
      box-shadow: var(--shadow);
    }

    header h1 {
      color: var(--brand);
      font-size: 2rem;
      margin-bottom: .5rem;
    }

    header p {
      color: var(--muted);
    }

    .container {
      width: min(1100px, 92%);
      margin: 2rem auto;
    }

    .cart {
      background: var(--soft);
      border-radius: var(--radius);
      padding: 2rem;
      box-shadow: var(--shadow);
      border: 1px solid rgba(255,255,255,.08);
    }

    .cart-item {
      display: flex;
      align-items: center;
      justify-content: space-between;
      border-bottom: 1px solid rgba(255,255,255,.08);
      padding: 1.5rem 0;
      gap: 1.5rem;
    }

    .cart-item:last-child {
      border-bottom: none;
    }

    .cart-item img {
      width: 140px;
      border-radius: var(--radius);
      box-shadow: var(--shadow-soft);
    }

    .item-details {
      flex: 1;
    }

    .item-details h3 {
      color: var(--brand);
      font-size: 1.2rem;
    }

    .item-details p {
      color: var(--muted);
      font-size: .9rem;
      margin-top: .3rem;
    }

    .price {
      font-size: 1.2rem;
      font-weight: bold;
      color: var(--brand);
    }

    .total {
      text-align: right;
      margin-top: 1.5rem;
      font-size: 1.5rem;
      font-weight: bold;
      color: var(--accent);
    }

    .checkout {
      margin-top: 2rem;
      text-align: right;
    }

    .checkout button {
      background: linear-gradient(135deg, var(--brand), var(--accent));
      color: #0b0b0d;
      border: none;
      padding: 1rem 2rem;
      font-size: 1rem;
      font-weight: bold;
      border-radius: 999px;
      cursor: pointer;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      box-shadow: var(--shadow-soft);
    }

    .checkout button:hover {
      transform: scale(1.05);
      box-shadow: var(--shadow);
    }

    @media(max-width: 768px) {
      .cart-item {
        flex-direction: column;
        align-items: flex-start;
      }
      .cart-item img {
        width: 100%;
        max-width: 280px;
      }
      .total, .checkout {
        text-align: center;
      }
    }
  </style>
</head>
<body>
  <header>
    <h1>Carrito de Compras</h1>
    <p>Motos de lujo seleccionadas</p>
  </header>

  <div class="container">
    <div class="cart">
      <!-- Item 1 -->
      <div class="cart-item">
        <img src="https://i.blogs.es/5769df/kawasaki-ninja-h2-carbon-2017-3-/1366_2000.jpg" alt="Kawasaki Ninja H2 Carbon">
        <div class="item-details">
          <h3>Kawasaki Ninja H2 Carbon</h3>
          <p>2017 - 998cc - 231 HP</p>
        </div>
        <div class="price">$38,000 USD</div>
      </div>

      <!-- Item 2 -->
      <div class="cart-item">
        <img src="https://www.incolmotos-yamaha.com.co/wp-content/uploads/2022/04/mt09Sp_gris.png" alt="Yamaha MT-09 SP">
        <div class="item-details">
          <h3>Yamaha MT-09 SP</h3>
          <p>2024 - 890cc - 119 HP</p>
        </div>
        <div class="price">$12,500 USD</div>
      </div>

      <!-- Item 3 -->
      <div class="cart-item">
        <img src="https://imgd.aeplcdn.com/1280x720/n/cw/ec/23190/cbr1000rr-right-front-three-quarter.jpeg?isig=0" alt="Honda CBR1000RR-R">
        <div class="item-details">
          <h3>Honda CBR1000RR-R</h3>
          <p>2024 - 1000cc - 214 HP</p>
        </div>
        <div class="price">$28,000 USD</div>
      </div>

      <!-- Total -->
      <div class="total">
        Total: $78,500 USD
      </div>

      <!-- Botón checkout -->
      <div class="checkout">
        <button>Finalizar Compra</button>
      </div>
    </div>
  </div>
</body>
</html>
