<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Like Agencia Creativa - Marketing Digital que Convierte</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
            overflow-x: hidden;
        }

        /* Header con gradiente animado */
        .hero {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 50%, #f093fb 100%);
            background-size: 400% 400%;
            animation: gradientShift 8s ease infinite;
            color: white;
            min-height: 100vh;
            display: flex;
            align-items: center;
            position: relative;
        }

        @keyframes gradientShift {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0,0,0,0.3);
            z-index: 1;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            text-align: center;
        }

        .hero h1 {
            font-size: 3.5rem;
            font-weight: bold;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
            animation: fadeInUp 1s ease;
        }

        .hero .subtitle {
            font-size: 1.5rem;
            margin-bottom: 2rem;
            opacity: 0.9;
            animation: fadeInUp 1s ease 0.3s both;
        }

        .cta-button {
            display: inline-block;
            background: linear-gradient(45deg, #ff6b6b, #ee5a24);
            color: white;
            padding: 18px 40px;
            text-decoration: none;
            border-radius: 50px;
            font-size: 1.2rem;
            font-weight: bold;
            transition: all 0.3s ease;
            box-shadow: 0 10px 30px rgba(0,0,0,0.3);
            animation: fadeInUp 1s ease 0.6s both;
        }

        .cta-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.4);
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Sección de planes */
        .plans-section {
            padding: 100px 20px;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .section-title {
            text-align: center;
            font-size: 3rem;
            color: #2c3e50;
            margin-bottom: 20px;
            position: relative;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: linear-gradient(45deg, #ff6b6b, #ee5a24);
            border-radius: 2px;
        }

        .plans-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 40px;
            margin-top: 60px;
        }

        .plan-card {
            background: white;
            border-radius: 20px;
            padding: 40px 30px;
            text-align: center;
            box-shadow: 0 20px 60px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .plan-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 5px;
            background: linear-gradient(45deg, #667eea, #764ba2);
        }

        .plan-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 30px 80px rgba(0,0,0,0.15);
        }

        .plan-card.featured {
            transform: scale(1.05);
            border: 3px solid #ff6b6b;
        }

        .plan-card.featured::before {
            background: linear-gradient(45deg, #ff6b6b, #ee5a24);
            height: 8px;
        }

        .plan-name {
            font-size: 2rem;
            color: #2c3e50;
            margin-bottom: 10px;
            font-weight: bold;
        }

        .plan-price {
            font-size: 3rem;
            color: #ff6b6b;
            font-weight: bold;
            margin-bottom: 30px;
        }

        .plan-features {
            list-style: none;
            margin-bottom: 30px;
        }

        .plan-features li {
            padding: 8px 0;
            color: #555;
            position: relative;
            padding-left: 25px;
        }

        .plan-features li::before {
            content: '✓';
            position: absolute;
            left: 0;
            color: #27ae60;
            font-weight: bold;
        }

        .plan-button {
            background: linear-gradient(45deg, #667eea, #764ba2);
            color: white;
            padding: 15px 30px;
            border: none;
            border-radius: 25px;
            font-size: 1.1rem;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
            width: 100%;
        }

        .plan-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(102, 126, 234, 0.4);
        }

        .featured .plan-button {
            background: linear-gradient(45deg, #ff6b6b, #ee5a24);
        }

        /* Servicios adicionales */
        .additional-services {
            padding: 80px 20px;
            background: #2c3e50;
            color: white;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            margin-top: 50px;
        }

        .service-item {
            background: rgba(255,255,255,0.1);
            padding: 30px 20px;
            border-radius: 15px;
            text-align: center;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255,255,255,0.2);
            transition: all 0.3s ease;
        }

        .service-item:hover {
            background: rgba(255,255,255,0.2);
            transform: translateY(-5px);
        }

        .service-icon {
            font-size: 3rem;
            margin-bottom: 15px;
            display: block;
        }

        /* Contacto */
        .contact-section {
            padding: 80px 20px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            text-align: center;
        }

        .contact-info {
            font-size: 1.3rem;
            margin: 30px 0;
        }

        .email-link {
            color: #ffeaa7;
            text-decoration: none;
            font-weight: bold;
            font-size: 1.5rem;
            padding: 10px 20px;
            border: 2px solid #ffeaa7;
            border-radius: 25px;
            display: inline-block;
            margin: 20px;
            transition: all 0.3s ease;
        }

        .email-link:hover {
            background: #ffeaa7;
            color: #2c3e50;
            transform: scale(1.05);
        }

        /* Elementos flotantes decorativos */
        .floating-elements {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 1;
        }

        .floating-element {
            position: absolute;
            background: rgba(255,255,255,0.1);
            border-radius: 50%;
            animation: float 6s ease-in-out infinite;
        }

        .floating-element:nth-child(1) {
            width: 80px;
            height: 80px;
            top: 20%;
            left: 10%;
            animation-delay: 0s;
        }

        .floating-element:nth-child(2) {
            width: 120px;
            height: 120px;
            top: 60%;
            right: 15%;
            animation-delay: 2s;
        }

        .floating-element:nth-child(3) {
            width: 60px;
            height: 60px;
            top: 40%;
            left: 80%;
            animation-delay: 4s;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(180deg); }
        }

        /* Responsive */
        @media (max-width: 768px) {
            .hero h1 { font-size: 2.5rem; }
            .hero .subtitle { font-size: 1.2rem; }
            .section-title { font-size: 2.2rem; }
            .plans-grid { grid-template-columns: 1fr; gap: 30px; }
            .plan-card.featured { transform: none; }
            .services-grid { grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); }
        }
    </style>
</head>
<body>
    <!-- Hero Section -->
    <section class="hero">
        <div class="floating-elements">
            <div class="floating-element"></div>
            <div class="floating-element"></div>
            <div class="floating-element"></div>
        </div>
        <div class="hero-content">
            <h1>Like Agencia Creativa</h1>
            <p class="subtitle">Transformamos tu presencia digital en resultados reales</p>
            <a href="#planes" class="cta-button">Ver Nuestros Planes</a>
        </div>
    </section>

    <!-- Plans Section -->
    <section class="plans-section" id="planes">
        <div class="container">
            <h2 class="section-title">Planes de Manejo de Redes Sociales</h2>
            
            <div class="plans-grid">
                <!-- Plan Básico -->
                <div class="plan-card">
                    <h3 class="plan-name">Plan Básico</h3>
                    <div class="plan-price">$70</div>
                    <ul class="plan-features">
                        <li>Creación de Instagram + Facebook</li>
                        <li>Community Manager</li>
                        <li>5 posts a la semana (días a elegir)</li>
                        <li>Diseño gráfico</li>
                        <li>Desarrollo e implementación de estrategias</li>
                    </ul>
                    <button class="plan-button" onclick="contactar('Plan Básico')">Comenzar Ahora</button>
                </div>

                <!-- Plan Medio -->
                <div class="plan-card featured">
                    <h3 class="plan-name">Plan Medio</h3>
                    <div class="plan-price">$100</div>
                    <ul class="plan-features">
                        <li>Creación de Instagram + Facebook</li>
                        <li>Community Manager</li>
                        <li>1 post diario</li>
                        <li>Diseño gráfico</li>
                        <li>Desarrollo e implementación de estrategias</li>
                        <li>Reporte de estadísticas</li>
                        <li>Promoción pagada</li>
                        <li>Asesoría de ventas y/o imagen</li>
                        <li>Creación de artes digitales para impresión</li>
                        <li>Visita a la empresa o cobertura de evento 1 al mes</li>
                        <li>Una taza personalizada de regalo</li>
                        <li>5% de descuento en otros servicios</li>
                    </ul>
                    <button class="plan-button" onclick="contactar('Plan Medio')">¡Más Popular!</button>
                </div>

                <!-- Plan Full -->
                <div class="plan-card">
                    <h3 class="plan-name">Plan Full</h3>
                    <div class="plan-price">$210</div>
                    <ul class="plan-features">
                        <li>Creación de Instagram + Facebook</li>
                        <li>Community Manager</li>
                        <li>1 post diario</li>
                        <li>Diseño gráfico</li>
                        <li>Desarrollo e implementación de estrategias</li>
                        <li>Reporte de estadísticas</li>
                        <li>Promoción pagada</li>
                        <li>Asesoría de ventas y/o imagen</li>
                        <li>Creación de artes digitales para impresión</li>
                        <li>Visitas ilimitadas a la empresa</li>
                        <li>Cobertura de eventos (2 al mes + cita previa)</li>
                        <li>Una taza personalizada de regalo</li>
                        <li>10% de descuento en otros servicios</li>
                        <li>Elaboración de comercial (Voz) para radio</li>
                    </ul>
                    <button class="plan-button" onclick="contactar('Plan Full')">Máximo Impacto</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Additional Services -->
    <section class="additional-services">
        <div class="container">
            <h2 class="section-title" style="color: white;">Servicios Adicionales</h2>
            
            <div class="services-grid">
                <div class="service-item">
                    <span class="service-icon">📱</span>
                    <h4>Otras Redes Sociales</h4>
                    <p>LinkedIn, YouTube, TikTok, Twitter</p>
                </div>
                <div class="service-item">
                    <span class="service-icon">🎥</span>
                    <h4>Edición Multimedia</h4>
                    <p>Fotos y videos profesionales</p>
                </div>
                <div class="service-item">
                    <span class="service-icon">📊</span>
                    <h4>Plan de Medios</h4>
                    <p>Estrategia integral de comunicación</p>
                </div>
                <div class="service-item">
                    <span class="service-icon">📻</span>
                    <h4>Radio y TV</h4>
                    <p>Promociones y voz comercial</p>
                </div>
                <div class="service-item">
                    <span class="service-icon">🪧</span>
                    <h4>Publicidad Física</h4>
                    <p>Letreros, anuncios y promociones POP</p>
                </div>
                <div class="service-item">
                    <span class="service-icon">📧</span>
                    <h4>Email Marketing</h4>
                    <p>Campañas efectivas de correo</p>
                </div>
                <div class="service-item">
                    <span class="service-icon">🌐</span>
                    <h4>Diseño Web</h4>
                    <p>Sitios web que convierten</p>
                </div>
                <div class="service-item">
                    <span class="service-icon">🔍</span>
                    <h4>SEO</h4>
                    <p>Posicionamiento en Google</p>
                </div>
                <div class="service-item">
                    <span class="service-icon">💼</span>
                    <h4>Asesoría Marketing</h4>
                    <p>Consultoría especializada</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact-section">
        <div class="container">
            <h2 class="section-title" style="color: white;">¿Listo para Crecer?</h2>
            <p class="contact-info">Contáctanos hoy y lleva tu negocio al siguiente nivel</p>
            <a href="mailto:like.agenciacreativa@outlook.com" class="email-link">like.agenciacreativa@outlook.com</a>
            <p style="margin-top: 30px; font-size: 1.2rem;">
                🚀 Consulta gratuita disponible<br>
                📈 Resultados garantizados<br>
                💡 Estrategias personalizadas
            </p>
        </div>
    </section>

  
</body>
</html>
