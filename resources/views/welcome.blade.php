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
            --primary-color: #00f260;
            --secondary-color: #0575E6;
            --bg-dark: #0b0c10;
            --text-light: #c5c6c7;
        }

        body {
            background-color: var(--bg-dark);
            color: var(--text-light);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            overflow-x: hidden;
            margin: 0;
        }

        /* 3D Canvas Arka Planı */
        #canvas-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            opacity: 0.6;
        }

        /* Navbar */
        .navbar {
            background: rgba(11, 12, 16, 0.8) !important;
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(255,255,255,0.1);
        }
        .navbar-brand {
            font-weight: 700;
            letter-spacing: 2px;
            color: #fff !important;
        }
        .nav-link {
            color: #fff !important;
            transition: 0.3s;
        }
        .nav-link:hover {
            color: var(--primary-color) !important;
        }

        /* Hero Section */
        .hero-section {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            position: relative;
        }
        
        .hero-title {
            font-size: 4rem;
            font-weight: 800;
            background: -webkit-linear-gradient(45deg, var(--primary-color), var(--secondary-color));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-bottom: 20px;
        }

        .scroll-down {
            position: absolute;
            bottom: 30px;
            left: 50%;
            transform: translateX(-50%);
            animation: bounce 2s infinite;
        }

        /* Bölümler Genel */
        section {
            padding: 100px 0;
            position: relative;
            z-index: 1;
        }

        .section-title {
            font-size: 2.5rem;
            margin-bottom: 50px;
            border-left: 5px solid var(--primary-color);
            padding-left: 20px;
            color: white;
        }

        /* Kart Tasarımları */
        .glass-card {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(5px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 15px;
            padding: 30px;
            transition: 0.4s;
            height: 100%;
        }
        
        .glass-card:hover {
            transform: translateY(-10px);
            background: rgba(255, 255, 255, 0.1);
            box-shadow: 0 0 20px rgba(0, 242, 96, 0.3);
            border-color: var(--primary-color);
        }

        /* İletişim */
        .contact-input {
            background: rgba(255,255,255,0.05);
            border: none;
            color: white;
            padding: 15px;
            margin-bottom: 20px;
            width: 100%;
            border-radius: 5px;
        }
        .contact-input:focus {
            background: rgba(255,255,255,0.1);
            color: white;
            outline: 2px solid var(--primary-color);
        }

        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% {transform: translateY(0) translateX(-50%);}
            40% {transform: translateY(-30px) translateX(-50%);}
            60% {transform: translateY(-15px) translateX(-50%);}
        }
    </style>
</head>
<body>

    <div id="canvas-container"></div>

    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">SİZİN ADINIZ</a>
            <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
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
        <div class="container" data-aos="zoom-in" data-aos-duration="1500">
            <h1 class="hero-title">DİJİTAL DÜNYAYI<br>ŞEKİLLENDİRİYORUM</h1>
            <p class="lead text-white mb-4">Web Geliştirici | UI/UX Tasarımcı | Kod Sanatçısı</p>
            <a href="#about" class="btn btn-outline-light btn-lg px-5 rounded-pill">Keşfetmeye Başla</a>
        </div>
        <div class="scroll-down">
            <i class="fas fa-chevron-down fa-2x text-white"></i>
        </div>
    </section>

    <section id="about">
        <div class="container">
            <h2 class="section-title" data-aos="fade-right">Hakkımda</h2>
            <div class="row align-items-center">
                <div class="col-md-6" data-aos="fade-right" data-aos-delay="200">
                    <p class="lead">Merhaba, ben modern web teknolojileri ile yaşayan, kod yazmayı bir sanat olarak gören bir geliştiriciyim.</p>
                    <p>Sıradan tasarımlardan sıkıldıysanız doğru yerdesiniz. Kullanıcı deneyimini en üst düzeye çıkaran, hızlı ve estetik arayüzler tasarlıyorum.</p>
                    <div class="mt-4">
                        <span class="badge bg-primary p-2 m-1">HTML5 / CSS3</span>
                        <span class="badge bg-secondary p-2 m-1">JavaScript (ES6+)</span>
                        <span class="badge bg-info p-2 m-1">React / Vue</span>
                        <span class="badge bg-success p-2 m-1">Three.js</span>
                    </div>
                </div>
                <div class="col-md-6" data-aos="fade-left" data-aos-delay="400">
                    <div class="glass-card p-4 code-block font-monospace">
                        <span style="color: #ff79c6">const</span> developer = {<br>
                        &nbsp;&nbsp;name: <span style="color: #f1fa8c">"Sizin Adınız"</span>,<br>
                        &nbsp;&nbsp;passion: <span style="color: #f1fa8c">"Yaratıcılık"</span>,<br>
                        &nbsp;&nbsp;status: <span style="color: #8be9fd">"Coding..."</span><br>
                        };
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="projects">
        <div class="container">
            <h2 class="section-title" data-aos="fade-right">Projelerim</h2>
            <div class="row g-4">
                <div class="col-md-4" data-aos="flip-left" data-aos-delay="100">
                    <div class="glass-card text-center">
                        <i class="fas fa-rocket fa-3x mb-3" style="color: var(--primary-color)"></i>
                        <h3>E-Ticaret Devrimi</h3>
                        <p class="text-muted">React ve Node.js kullanılarak geliştirilmiş, yüksek performanslı alışveriş platformu.</p>
                        <a href="#" class="btn btn-sm btn-outline-primary">İncele</a>
                    </div>
                </div>
                <div class="col-md-4" data-aos="flip-left" data-aos-delay="300">
                    <div class="glass-card text-center">
                        <i class="fas fa-mobile-alt fa-3x mb-3" style="color: var(--secondary-color)"></i>
                        <h3>Mobil Asistan</h3>
                        <p class="text-muted">Flutter ile yazılmış, günlük işlerinizi organize eden yapay zeka destekli asistan.</p>
                        <a href="#" class="btn btn-sm btn-outline-primary">İncele</a>
                    </div>
                </div>
                <div class="col-md-4" data-aos="flip-left" data-aos-delay="500">
                    <div class="glass-card text-center">
                        <i class="fas fa-gamepad fa-3x mb-3" style="color: #ff0055"></i>
                        <h3>Neon Oyun</h3>
                        <p class="text-muted">Tarayıcı tabanlı, Three.js kullanılarak hazırlanmış 3D macera oyunu.</p>
                        <a href="#" class="btn btn-sm btn-outline-primary">İncele</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" style="padding-bottom: 150px;">
        <div class="container">
            <h2 class="section-title" data-aos="fade-right">İletişime Geç</h2>
            <div class="row justify-content-center">
                <div class="col-md-8" data-aos="zoom-in-up">
                    <div class="glass-card">
                        <form>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" class="contact-input" placeholder="Adınız">
                                </div>
                                <div class="col-md-6">
                                    <input type="email" class="contact-input" placeholder="E-posta">
                                </div>
                            </div>
                            <input type="text" class="contact-input" placeholder="Konu">
                            <textarea rows="4" class="contact-input" placeholder="Mesajınız..."></textarea>
                            <button class="btn btn-primary w-100 btn-lg">Gönder</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>

    <script>
        // 1. AOS Animasyonlarını Başlat
        AOS.init({
            once: false, // Aşağı yukarı yapınca tekrar çalışsın
            offset: 200, // Tetiklenme mesafesi
            duration: 1000,
        });

        // 2. Three.js ile 3D Dünya (Parçacık Küresi)
        const scene = new THREE.Scene();
        const camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
        const renderer = new THREE.WebGLRenderer({ alpha: true, antialias: true });
        
        renderer.setSize(window.innerWidth, window.innerHeight);
        document.getElementById('canvas-container').appendChild(renderer.domElement);

        // Parçacık Küresi Oluşturma
        const geometry = new THREE.BufferGeometry();
        const count = 3000; // Parçacık sayısı
        const positions = new Float32Array(count * 3);

        for(let i = 0; i < count * 3; i++) {
            positions[i] = (Math.random() - 0.5) * 10; // Rastgele dağılım
        }

        geometry.setAttribute('position', new THREE.BufferAttribute(positions, 3));

        const material = new THREE.PointsMaterial({
            size: 0.03,
            color: 0x00f260, // Neon Yeşil
            transparent: true,
            opacity: 0.8
        });

        const particles = new THREE.Points(geometry, material);
        scene.add(particles);

        camera.position.z = 3;

        // Mouse Etkileşimi
        let mouseX = 0;
        let mouseY = 0;
        let targetX = 0;
        let targetY = 0;

        document.addEventListener('mousemove', (event) => {
            mouseX = (event.clientX - window.innerWidth / 2) * 0.001;
            mouseY = (event.clientY - window.innerHeight / 2) * 0.001;
        });

        // Scroll Etkileşimi (Dünyayı kaydırır)
        window.addEventListener('scroll', () => {
            const scrollY = window.scrollY;
            particles.position.y = scrollY * 0.001; // Aşağı indikçe dünya yukarı kaysın
            particles.rotation.x = scrollY * 0.0005; // Dönsün
        });

        const clock = new THREE.Clock();

        function animate() {
            targetX = mouseX * 0.5;
            targetY = mouseY * 0.5;

            // Yumuşak dönüş
            particles.rotation.y += 0.002;
            particles.rotation.x += 0.001;

            // Mouse'a göre hafif hareket
            particles.rotation.y += 0.05 * (targetX - particles.rotation.y);
            particles.rotation.x += 0.05 * (targetY - particles.rotation.x);

            // Dalgalanma efekti (Basit matematiksel animasyon)
            const time = clock.getElapsedTime();
            // Bu kısım kürenin hafifçe "nefes almasını" sağlar
            particles.scale.x = 1 + Math.sin(time * 0.5) * 0.05;
            particles.scale.y = 1 + Math.sin(time * 0.5) * 0.05;
            particles.scale.z = 1 + Math.sin(time * 0.5) * 0.05;

            renderer.render(scene, camera);
            requestAnimationFrame(animate);
        }

        animate();

        // Pencere Boyutu Değişirse Canvas'ı Güncelle
        window.addEventListener('resize', () => {
            camera.aspect = window.innerWidth / window.innerHeight;
            camera.updateProjectionMatrix();
            renderer.setSize(window.innerWidth, window.innerHeight);
        });
    </script>
</body>
</html>