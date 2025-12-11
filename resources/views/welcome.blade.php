<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berkay Yüksel | Full Stack Developer</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --glass-bg: rgba(255, 255, 255, 0.1);
            --glass-border: rgba(255, 255, 255, 0.2);
            --glass-shadow: rgba(0, 0, 0, 0.2);
            --text-primary: #1a1a1a;
            --text-secondary: rgba(0, 0, 0, 0.7);
            --accent: #000000;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
            background: linear-gradient(135deg, rgba(245, 245, 245, 0.9) 0%, rgba(232, 232, 232, 0.9) 25%, rgba(211, 211, 211, 0.9) 50%, rgba(192, 192, 192, 0.9) 75%, rgba(168, 168, 168, 0.9) 100%),
                        url('https://images.unsplash.com/photo-1441974231531-c6227db76b6e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2071&q=80');
            background-size: 400% 400%, cover;
            background-position: 0% 50%, center;
            background-attachment: fixed, fixed;
            background-blend-mode: overlay, normal;
            animation: gradientShift 20s ease infinite;
            min-height: 100vh;
            overflow-x: hidden;
            position: relative;
        }

        @keyframes gradientShift {
            0% { background-position: 0% 50%, center; }
            50% { background-position: 100% 50%, center; }
            100% { background-position: 0% 50%, center; }
        }

        /* MacBook Window Container */
        .macbook-window {
            max-width: 1200px;
            margin: 50px auto;
            background: rgba(255, 255, 255, 0.12);
            backdrop-filter: blur(40px) saturate(180%);
            -webkit-backdrop-filter: blur(40px) saturate(180%);
            border-radius: 20px;
            border: 1px solid rgba(255, 255, 255, 0.25);
            box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.2),
                        inset 0 1px 0 rgba(255, 255, 255, 0.3);
            overflow: hidden;
            position: relative;
        }

        /* MacBook Window Controls */
        .window-controls {
            display: flex;
            align-items: center;
            padding: 15px 20px;
            background: rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
            gap: 10px;
        }

        .window-btn {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            border: none;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .window-btn:hover {
            transform: scale(1.1);
            opacity: 0.8;
        }

        .window-btn.close {
            background: #ff5f57;
        }

        .window-btn.minimize {
            background: #ffbd2e;
        }

        .window-btn.maximize {
            background: #28ca42;
        }

        /* Window Content */
        .window-content {
            padding: 80px 60px;
            min-height: calc(100vh - 200px);
        }

        /* Hero Section */
        .hero-section {
            text-align: center;
            margin-bottom: 100px;
        }

        .hero-name {
            font-size: clamp(3rem, 8vw, 6rem);
            font-weight: 800;
            color: var(--text-primary);
            margin-bottom: 20px;
            letter-spacing: -2px;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            animation: fadeInUp 1s ease;
        }
        
        .hero-title {
            font-size: clamp(1.2rem, 3vw, 1.8rem);
            font-weight: 400;
            color: var(--text-secondary);
            letter-spacing: 2px;
            text-transform: uppercase;
            animation: fadeInUp 1s ease 0.2s both;
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

        /* Projects Section */
        .projects-section {
            margin-top: 80px;
        }

        .section-title {
            font-size: clamp(1.8rem, 4vw, 2.5rem);
            font-weight: 700;
            color: var(--text-primary);
            margin-bottom: 50px;
            text-align: center;
            letter-spacing: -1px;
        }

        .projects-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }

        /* Liquid Glass Card */
        .glass-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(35px) saturate(180%);
            -webkit-backdrop-filter: blur(35px) saturate(180%);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 20px;
            padding: 40px;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            position: relative;
            overflow: hidden;
            cursor: pointer;
            box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.15),
                        inset 0 1px 0 rgba(255, 255, 255, 0.2);
        }

        .glass-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.6s ease;
        }

        .glass-card:hover::before {
            left: 100%;
        }
        
        .glass-card:hover {
            transform: translateY(-10px) scale(1.02);
            background: rgba(255, 255, 255, 0.18);
            backdrop-filter: blur(40px) saturate(200%);
            -webkit-backdrop-filter: blur(40px) saturate(200%);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2),
                        inset 0 1px 0 rgba(255, 255, 255, 0.3);
            border-color: rgba(255, 255, 255, 0.35);
        }

        .project-icon {
            font-size: 3rem;
            margin-bottom: 20px;
            color: var(--text-primary);
            opacity: 0.9;
        }

        .project-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--text-primary);
            margin-bottom: 15px;
            letter-spacing: -0.5px;
        }

        .project-description {
            font-size: 1rem;
            color: var(--text-secondary);
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .project-tech {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin-top: 20px;
        }

        .tech-badge {
            padding: 6px 14px;
            background: rgba(255, 255, 255, 0.15);
            border: 1px solid rgba(255, 255, 255, 0.25);
            border-radius: 20px;
            font-size: 0.85rem;
            color: var(--text-primary);
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
            transition: all 0.3s ease;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .tech-badge:hover {
            background: rgba(255, 255, 255, 0.25);
            border-color: rgba(255, 255, 255, 0.35);
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        }

        /* Floating Particles */
        .particles {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 0;
        }

        .particle {
            position: absolute;
            width: 4px;
            height: 4px;
            background: rgba(0, 0, 0, 0.2);
            border-radius: 50%;
            animation: float 20s infinite ease-in-out;
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0) translateX(0);
                opacity: 0;
            }
            10% {
                opacity: 1;
            }
            90% {
                opacity: 1;
            }
            100% {
                transform: translateY(-100vh) translateX(100px);
                opacity: 0;
            }
        }

        /* Responsive */
        @media (max-width: 768px) {
            .window-content {
                padding: 40px 30px;
            }

            .projects-grid {
                grid-template-columns: 1fr;
            }

            .hero-name {
                font-size: 2.5rem;
            }

            .hero-title {
                font-size: 1rem;
            }
        }

        /* Smooth Scroll */
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>
<body>
    <!-- Floating Particles -->
    <div class="particles" id="particles"></div>

    <!-- MacBook Window -->
    <div class="macbook-window">
        <!-- Window Controls -->
        <div class="window-controls">
            <button class="window-btn close" onclick="window.close()"></button>
            <button class="window-btn minimize" onclick="minimizeWindow()"></button>
            <button class="window-btn maximize" onclick="maximizeWindow()"></button>
            </div>

        <!-- Window Content -->
        <div class="window-content">
            <!-- Hero Section -->
            <div class="hero-section">
                <h1 class="hero-name">Berkay Yüksel</h1>
                <p class="hero-title">Full Stack Developer</p>
            </div>

            <!-- Projects Section -->
            <div class="projects-section">
                <h2 class="section-title">Projelerim</h2>
                <div class="projects-grid">
                    <!-- Project 1 -->
                    <div class="glass-card" data-aos="fade-up" data-aos-delay="100">
                        <div class="project-icon">
                            <i class="fas fa-shopping-cart"></i>
                        </div>
                        <h3 class="project-title">E-Commerce Platform</h3>
                        <p class="project-description">
                            Modern ve kullanıcı dostu e-ticaret platformu. Gerçek zamanlı ödeme sistemi ve admin paneli ile tam özellikli alışveriş deneyimi.
                        </p>
                        <div class="project-tech">
                            <span class="tech-badge">React</span>
                            <span class="tech-badge">Node.js</span>
                            <span class="tech-badge">MongoDB</span>
                            <span class="tech-badge">Stripe</span>
                        </div>
                    </div>

                    <!-- Project 2 -->
                    <div class="glass-card" data-aos="fade-up" data-aos-delay="200">
                            <div class="project-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h3 class="project-title">Analytics Dashboard</h3>
                        <p class="project-description">
                            İş zekası ve veri görselleştirme platformu. Gerçek zamanlı veri analizi, interaktif grafikler ve raporlama özellikleri.
                        </p>
                        <div class="project-tech">
                            <span class="tech-badge">Vue.js</span>
                            <span class="tech-badge">Python</span>
                            <span class="tech-badge">PostgreSQL</span>
                            <span class="tech-badge">D3.js</span>
                        </div>
                    </div>

                    <!-- Project 3 -->
                    <div class="glass-card" data-aos="fade-up" data-aos-delay="300">
                            <div class="project-icon">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <h3 class="project-title">Social Media App</h3>
                        <p class="project-description">
                            Mobil öncelikli sosyal medya uygulaması. Anlık mesajlaşma, hikaye paylaşımı ve içerik keşfetme özellikleri ile modern bir deneyim.
                        </p>
                        <div class="project-tech">
                            <span class="tech-badge">React Native</span>
                            <span class="tech-badge">Express</span>
                            <span class="tech-badge">Socket.io</span>
                            <span class="tech-badge">Redis</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        // Initialize AOS
        AOS.init({
            duration: 800,
            easing: 'ease-out-cubic',
            once: true
        });

        // Window Controls Functions
        function minimizeWindow() {
            const window = document.querySelector('.macbook-window');
            window.style.transform = 'scale(0.95)';
            window.style.opacity = '0.8';
            setTimeout(() => {
                window.style.transform = 'scale(1)';
                window.style.opacity = '1';
            }, 300);
        }

        function maximizeWindow() {
            const window = document.querySelector('.macbook-window');
            if (window.style.width === '100%') {
                window.style.width = '';
                window.style.height = '';
                window.style.maxWidth = '1200px';
                window.style.margin = '50px auto';
            } else {
                window.style.width = '100%';
                window.style.height = '100vh';
                window.style.maxWidth = '100%';
                window.style.margin = '0';
                window.style.borderRadius = '0';
            }
        }

        // Create Floating Particles
        function createParticles() {
            const particlesContainer = document.getElementById('particles');
            const particleCount = 30;

            for (let i = 0; i < particleCount; i++) {
                const particle = document.createElement('div');
                particle.className = 'particle';
                particle.style.left = Math.random() * 100 + '%';
                particle.style.top = Math.random() * 100 + '%';
                particle.style.animationDelay = Math.random() * 20 + 's';
                particle.style.animationDuration = (Math.random() * 10 + 15) + 's';
                particle.style.opacity = Math.random() * 0.3 + 0.1;
                particlesContainer.appendChild(particle);
            }
        }

        // Card Hover Effects
        document.querySelectorAll('.glass-card').forEach(card => {
            card.addEventListener('mousemove', (e) => {
                const rect = card.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;

                const centerX = rect.width / 2;
                const centerY = rect.height / 2;

                const rotateX = (y - centerY) / 10;
                const rotateY = (centerX - x) / 10;

                card.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) translateY(-10px) scale(1.02)`;
            });

            card.addEventListener('mouseleave', () => {
                card.style.transform = '';
            });
        });

        // Initialize particles on load
        createParticles();
    </script>
</body>
</html>
