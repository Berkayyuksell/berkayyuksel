<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kişisel Portfolyo | Geleceğin Tasarımı</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <style>
        :root {
            --primary-color: #00f2ea;
            --secondary-color: #ff00ff;
            --accent-color: #7c3aed;
            --bg-dark: #0a0a0f;
            --text-light: #e0e0e0;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: var(--bg-dark);
            color: var(--text-light);
            font-family: 'Inter', 'Segoe UI', sans-serif;
            overflow-x: hidden;
        }

        /* 3D Canvas */
        #canvas-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 0;
        }

        /* Content Overlay */
        .content-wrapper {
            position: relative;
            z-index: 1;
        }

        /* Navbar */
        .navbar {
            background: rgba(10, 10, 15, 0.7) !important;
            backdrop-filter: blur(20px);
            border-bottom: 1px solid rgba(0, 242, 234, 0.2);
            transition: all 0.3s ease;
        }

        .navbar.scrolled {
            background: rgba(10, 10, 15, 0.95) !important;
            box-shadow: 0 5px 30px rgba(0, 242, 234, 0.1);
        }

        .navbar-brand {
            font-weight: 800;
            letter-spacing: 3px;
            color: #fff !important;
            text-shadow: 0 0 20px rgba(0, 242, 234, 0.5);
        }

        .nav-link {
            color: #fff !important;
            margin: 0 15px;
            position: relative;
            transition: all 0.3s ease;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
            transition: width 0.3s ease;
        }

        .nav-link:hover::after {
            width: 100%;
        }

        /* Hero Section */
        .hero-section {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            position: relative;
            padding: 100px 20px;
        }

        .hero-content {
            max-width: 900px;
        }
        
        .hero-title {
            font-size: clamp(2.5rem, 8vw, 5rem);
            font-weight: 900;
            background: linear-gradient(135deg, #00f2ea 0%, #ff00ff 50%, #7c3aed 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 20px;
            animation: glow 3s ease-in-out infinite;
        }

        @keyframes glow {
            0%, 100% { filter: drop-shadow(0 0 20px rgba(0, 242, 234, 0.5)); }
            50% { filter: drop-shadow(0 0 40px rgba(255, 0, 255, 0.8)); }
        }

        .hero-subtitle {
            font-size: 1.5rem;
            color: var(--text-light);
            margin-bottom: 30px;
            opacity: 0.9;
        }

        .cta-button {
            padding: 15px 40px;
            font-size: 1.1rem;
            border: 2px solid var(--primary-color);
            background: transparent;
            color: var(--primary-color);
            border-radius: 50px;
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
            z-index: 1;
        }

        .cta-button::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
            transition: left 0.4s ease;
            z-index: -1;
        }

        .cta-button:hover {
            color: #000;
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(0, 242, 234, 0.4);
        }

        .cta-button:hover::before {
            left: 0;
        }

        /* Sections */
        section {
            padding: 100px 0;
            position: relative;
        }

        .section-title {
            font-size: clamp(2rem, 5vw, 3rem);
            font-weight: 800;
            margin-bottom: 60px;
            position: relative;
            display: inline-block;
            color: #fff;
        }

        .section-title::before {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 60%;
            height: 4px;
            background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
            border-radius: 2px;
        }

        /* Glass Cards */
        .glass-card {
            background: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            padding: 40px;
            transition: all 0.4s ease;
            height: 100%;
            position: relative;
            overflow: hidden;
        }

        .glass-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(0, 242, 234, 0.1), transparent);
            transition: left 0.6s ease;
        }

        .glass-card:hover::before {
            left: 100%;
        }
        
        .glass-card:hover {
            transform: translateY(-15px) scale(1.02);
            background: rgba(255, 255, 255, 0.08);
            box-shadow: 0 20px 60px rgba(0, 242, 234, 0.3);
            border-color: var(--primary-color);
        }

        /* Project Icons */
        .project-icon {
            font-size: 3.5rem;
            margin-bottom: 25px;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        /* Skills Badges */
        .skill-badge {
            display: inline-block;
            padding: 10px 20px;
            margin: 5px;
            background: rgba(0, 242, 234, 0.1);
            border: 1px solid var(--primary-color);
            border-radius: 25px;
            font-size: 0.9rem;
            transition: all 0.3s ease;
        }

        .skill-badge:hover {
            background: var(--primary-color);
            color: #000;
            transform: translateY(-3px);
        }

        /* Code Block */
        .code-block {
            background: rgba(0, 0, 0, 0.5);
            border-left: 3px solid var(--primary-color);
            padding: 30px;
            font-family: 'Courier New', monospace;
            font-size: 1rem;
            line-height: 1.8;
        }

        /* Contact Form */
        .contact-input {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            color: white;
            padding: 15px 20px;
            margin-bottom: 20px;
            width: 100%;
            border-radius: 10px;
            transition: all 0.3s ease;
        }

        .contact-input:focus {
            background: rgba(255, 255, 255, 0.08);
            color: white;
            outline: none;
            border-color: var(--primary-color);
            box-shadow: 0 0 20px rgba(0, 242, 234, 0.3);
        }

        .contact-input::placeholder {
            color: rgba(255, 255, 255, 0.5);
        }

        .submit-btn {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            border: none;
            padding: 15px;
            border-radius: 10px;
            font-weight: 700;
            transition: all 0.3s ease;
        }

        .submit-btn:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 30px rgba(0, 242, 234, 0.4);
        }

        /* Scroll Indicator */
        .scroll-indicator {
            position: absolute;
            bottom: 30px;
            left: 50%;
            transform: translateX(-50%);
            animation: bounce 2s infinite;
        }

        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% { transform: translateY(0) translateX(-50%); }
            40% { transform: translateY(-20px) translateX(-50%); }
            60% { transform: translateY(-10px) translateX(-50%); }
        }

        /* Responsive */
        @media (max-width: 768px) {
            .hero-title { font-size: 2.5rem; }
            section { padding: 60px 0; }
        }
    </style>
</head>
<body>

    <div id="canvas-container"></div>

    <div class="content-wrapper">
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#">PORTFOLIO</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" style="border-color: rgba(255,255,255,0.3);">
                    <span class="navbar-toggler-icon" style="filter: invert(1);"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="#home">Ana Sayfa</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">Hakkımda</a></li>
                        <li class="nav-item"><a class="nav-link" href="#projects">Projeler</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">İletişim</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <section id="home" class="hero-section">
            <div class="hero-content" data-aos="fade-up" data-aos-duration="1500">
                <h1 class="hero-title">DİJİTAL EVRENİ<br>YENİDEN TASARLIYORUM</h1>
                <p class="hero-subtitle">Full Stack Developer • Creative Coder • Digital Artist</p>
                <button class="cta-button" onclick="document.getElementById('about').scrollIntoView({behavior: 'smooth'})">
                    Keşfet
                </button>
            </div>
            <div class="scroll-indicator">
                <i class="fas fa-chevron-down fa-2x" style="color: var(--primary-color);"></i>
            </div>
        </section>

        <section id="about">
            <div class="container">
                <h2 class="section-title" data-aos="fade-right">Hakkımda</h2>
                <div class="row align-items-center g-5">
                    <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
                        <p class="lead mb-4">Modern teknolojileri kullanarak dijital deneyimler yaratıyorum. Her proje, bir sanat eseri gibi özenle şekillendiriliyor.</p>
                        <p class="mb-4">Kullanıcı deneyimini merkeze alan, performans odaklı ve görsel açıdan etkileyici web uygulamaları geliştiriyorum. Kod yazmak benim için sadece bir iş değil, bir tutku.</p>
                        <div class="mt-5">
                            <span class="skill-badge">React & Next.js</span>
                            <span class="skill-badge">Three.js & WebGL</span>
                            <span class="skill-badge">Node.js & Express</span>
                            <span class="skill-badge">TypeScript</span>
                            <span class="skill-badge">Python & AI</span>
                            <span class="skill-badge">UI/UX Design</span>
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-left" data-aos-delay="400">
                        <div class="code-block">
                            <span style="color: #ff79c6">class</span> <span style="color: #50fa7b">Developer</span> {<br>
                            &nbsp;&nbsp;<span style="color: #ff79c6">constructor</span>() {<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #8be9fd">this</span>.name = <span style="color: #f1fa8c">"Sizin Adınız"</span>;<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #8be9fd">this</span>.passion = <span style="color: #f1fa8c">"Innovation"</span>;<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #8be9fd">this</span>.skills = [<span style="color: #f1fa8c">"React"</span>, <span style="color: #f1fa8c">"Three.js"</span>];<br>
                            &nbsp;&nbsp;}<br><br>
                            &nbsp;&nbsp;<span style="color: #50fa7b">create</span>() {<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #ff79c6">return</span> <span style="color: #f1fa8c">"Amazing Things"</span>;<br>
                            &nbsp;&nbsp;}<br>
                            }
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="projects">
            <div class="container">
                <h2 class="section-title" data-aos="fade-right">Projelerim</h2>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                        <div class="glass-card text-center">
                            <div class="project-icon">
                                <i class="fas fa-rocket"></i>
                            </div>
                            <h3 class="mb-3">Quantum E-Commerce</h3>
                            <p class="text-muted">Next.js ve AI destekli alışveriş deneyimi. Gerçek zamanlı ürün önerileri ve 3D ürün görselleştirme.</p>
                            <button class="btn btn-outline-primary mt-3">Detaylar</button>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                        <div class="glass-card text-center">
                            <div class="project-icon">
                                <i class="fas fa-brain"></i>
                            </div>
                            <h3 class="mb-3">Neural Dashboard</h3>
                            <p class="text-muted">React ve Three.js ile yapılmış interaktif veri görselleştirme platformu. Real-time analytics ve tahminleme.</p>
                            <button class="btn btn-outline-primary mt-3">Detaylar</button>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="500">
                        <div class="glass-card text-center">
                            <div class="project-icon">
                                <i class="fas fa-gamepad"></i>
                            </div>
                            <h3 class="mb-3">Cyber Arena</h3>
                            <p class="text-muted">WebGL tabanlı multiplayer oyun. Gerçek zamanlı fizik simülasyonu ve etkileyici shader efektleri.</p>
                            <button class="btn btn-outline-primary mt-3">Detaylar</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="contact" style="padding-bottom: 100px;">
            <div class="container">
                <h2 class="section-title" data-aos="fade-right">İletişime Geç</h2>
                <div class="row justify-content-center">
                    <div class="col-lg-8" data-aos="fade-up">
                        <div class="glass-card">
                            <form>
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" class="contact-input" placeholder="Adınız" required>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="email" class="contact-input" placeholder="E-posta Adresiniz" required>
                                    </div>
                                </div>
                                <input type="text" class="contact-input" placeholder="Konu" required>
                                <textarea rows="5" class="contact-input" placeholder="Mesajınız..." required></textarea>
                                <button type="submit" class="btn submit-btn w-100">
                                    <i class="fas fa-paper-plane me-2"></i> Mesajı Gönder
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>

    <script>
        AOS.init({
            once: false,
            offset: 100,
            duration: 1000,
            easing: 'ease-out-cubic'
        });

        // Navbar scroll effect
        window.addEventListener('scroll', () => {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        // Three.js Setup
        const scene = new THREE.Scene();
        const camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
        const renderer = new THREE.WebGLRenderer({ alpha: true, antialias: true });
        
        renderer.setSize(window.innerWidth, window.innerHeight);
        renderer.setPixelRatio(window.devicePixelRatio);
        document.getElementById('canvas-container').appendChild(renderer.domElement);

        camera.position.z = 30;

        // Earth
        const earthGeometry = new THREE.SphereGeometry(8, 64, 64);
        const textureLoader = new THREE.TextureLoader();
        
        const earthTexture = textureLoader.load('https://raw.githubusercontent.com/mrdoob/three.js/master/examples/textures/planets/earth_atmos_2048.jpg');
        const earthBumpMap = textureLoader.load('https://raw.githubusercontent.com/mrdoob/three.js/master/examples/textures/planets/earth_normal_2048.jpg');
        
        const earthMaterial = new THREE.MeshPhongMaterial({
            map: earthTexture,
            bumpMap: earthBumpMap,
            bumpScale: 0.3,
            shininess: 10
        });
        
        const earth = new THREE.Mesh(earthGeometry, earthMaterial);
        scene.add(earth);

        // Atmosphere Glow
        const atmosphereGeometry = new THREE.SphereGeometry(8.3, 64, 64);
        const atmosphereMaterial = new THREE.MeshBasicMaterial({
            color: 0x00f2ea,
            transparent: true,
            opacity: 0.15,
            side: THREE.BackSide
        });
        const atmosphere = new THREE.Mesh(atmosphereGeometry, atmosphereMaterial);
        scene.add(atmosphere);

        // Stars
        const starGeometry = new THREE.BufferGeometry();
        const starCount = 8000;
        const starPositions = new Float32Array(starCount * 3);
        const starColors = new Float32Array(starCount * 3);

        for (let i = 0; i < starCount * 3; i += 3) {
            starPositions[i] = (Math.random() - 0.5) * 400;
            starPositions[i + 1] = (Math.random() - 0.5) * 400;
            starPositions[i + 2] = (Math.random() - 0.5) * 400;
            
            const colorChoice = Math.random();
            if (colorChoice > 0.9) {
                starColors[i] = 0;
                starColors[i + 1] = 0.96;
                starColors[i + 2] = 0.92;
            } else if (colorChoice > 0.8) {
                starColors[i] = 1;
                starColors[i + 1] = 0;
                starColors[i + 2] = 1;
            } else {
                starColors[i] = 1;
                starColors[i + 1] = 1;
                starColors[i + 2] = 1;
            }
        }

        starGeometry.setAttribute('position', new THREE.BufferAttribute(starPositions, 3));
        starGeometry.setAttribute('color', new THREE.BufferAttribute(starColors, 3));

        const starMaterial = new THREE.PointsMaterial({
            size: 0.7,
            vertexColors: true,
            transparent: true,
            opacity: 0.8
        });

        const stars = new THREE.Points(starGeometry, starMaterial);
        scene.add(stars);

        // Lighting
        const ambientLight = new THREE.AmbientLight(0xffffff, 0.3);
        scene.add(ambientLight);

        const directionalLight = new THREE.DirectionalLight(0xffffff, 1);
        directionalLight.position.set(5, 3, 5);
        scene.add(directionalLight);

        const pointLight1 = new THREE.PointLight(0x00f2ea, 1, 100);
        pointLight1.position.set(-20, 10, -10);
        scene.add(pointLight1);

        const pointLight2 = new THREE.PointLight(0xff00ff, 1, 100);
        pointLight2.position.set(20, -10, 10);
        scene.add(pointLight2);

        // Mouse interaction
        let mouseX = 0;
        let mouseY = 0;
        let targetX = 0;
        let targetY = 0;

        document.addEventListener('mousemove', (e) => {
            mouseX = (e.clientX / window.innerWidth) * 2 - 1;
            mouseY = -(e.clientY / window.innerHeight) * 2 + 1;
        });

        // Scroll effect
        let scrollY = 0;
        window.addEventListener('scroll', () => {
            scrollY = window.scrollY;
        });

        // Animation
        function animate() {
            requestAnimationFrame(animate);

            targetX = mouseX * 0.3;
            targetY = mouseY * 0.3;

            earth.rotation.y += 0.002;
            earth.rotation.x += (targetY - earth.rotation.x) * 0.02;
            earth.rotation.y += (targetX - earth.rotation.y) * 0.02;

            atmosphere.rotation.y += 0.001;
            stars.rotation.y += 0.0002;

            const scrollFactor = scrollY * 0.001;
            camera.position.y = scrollFactor * 5;
            camera.rotation.x = scrollFactor * 0.1;

            pointLight1.position.x = Math.sin(Date.now() * 0.001) * 20;
            pointLight1.position.z = Math.cos(Date.now() * 0.001) * 20;

            pointLight2.position.x = Math.cos(Date.now() * 0.0015) * 20;
            pointLight2.position.z = Math.sin(Date.now() * 0.0015) * 20;

            renderer.render(scene, camera);
        }

        animate();

        // Resize handler
        window.addEventListener('resize', () => {
            camera.aspect = window.innerWidth / window.innerHeight;
            camera.updateProjectionMatrix();
            renderer.setSize(window.innerWidth, window.innerHeight);
        });
    </script>
</body>
</html>