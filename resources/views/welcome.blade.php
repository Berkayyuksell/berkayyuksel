<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berkay Yüksel | Full Stack Developer</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Arial, sans-serif;
            background-color: #000000;
            color: #ffffff;
            line-height: 1.6;
            padding: 40px 20px;
            transition: background-color 0.3s, color 0.3s;
        }

        body.light-mode {
            background-color: #ffffff;
            color: #000000;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            position: relative;
        }

        .theme-toggle {
            position: fixed;
            top: 20px;
            right: 20px;
            background: transparent;
            border: 1px solid #ffffff;
            color: #ffffff;
            padding: 8px 16px;
            cursor: pointer;
            font-size: 0.9rem;
            transition: all 0.3s;
        }

        body.light-mode .theme-toggle {
            border-color: #000000;
            color: #000000;
        }

        .theme-toggle:hover {
            background: rgba(255, 255, 255, 0.1);
        }

        body.light-mode .theme-toggle:hover {
            background: rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 2.5rem;
            margin-bottom: 10px;
            font-weight: 400;
        }

        h2 {
            font-size: 1.2rem;
            margin-bottom: 30px;
            font-weight: 300;
            color: #cccccc;
            transition: color 0.3s;
        }

        body.light-mode h2 {
            color: #666666;
        }

        p {
            font-size: 1rem;
            margin-bottom: 50px;
            color: #aaaaaa;
            transition: color 0.3s;
        }

        body.light-mode p {
            color: #666666;
        }

        .blogs {
            margin-top: 60px;
        }

        .blogs h3 {
            font-size: 1.5rem;
            margin-bottom: 30px;
            font-weight: 400;
        }

        .blog-item {
            margin-bottom: 30px;
            padding-bottom: 30px;
            border-bottom: 1px solid #333333;
            transition: border-color 0.3s;
        }

        body.light-mode .blog-item {
            border-bottom: 1px solid #e0e0e0;
        }

        .blog-item:last-child {
            border-bottom: none;
        }

        .blog-title {
            font-size: 1.3rem;
            margin-bottom: 10px;
            color: #ffffff;
            transition: color 0.3s;
        }

        body.light-mode .blog-title {
            color: #000000;
        }

        .blog-date {
            font-size: 0.9rem;
            color: #666666;
            margin-bottom: 10px;
            transition: color 0.3s;
        }

        body.light-mode .blog-date {
            color: #999999;
        }

        .blog-excerpt {
            font-size: 0.95rem;
            color: #aaaaaa;
            transition: color 0.3s;
        }

        body.light-mode .blog-excerpt {
            color: #666666;
        }

        a {
            color: #ffffff;
            text-decoration: none;
            transition: color 0.3s;
        }

        body.light-mode a {
            color: #000000;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <button class="theme-toggle" onclick="toggleTheme()">Dark Mode</button>

            <div class="container">
        <h1>Berkay Yüksel</h1>
        <h2>Full Stack Developer</h2>
        <p>Recently graduated from Iskenderun Technical University as a Computer Engineer. Currently working as a Full Stack Developer at MTSoft.</p>

        <div class="blogs">
            <h3>Blogs</h3>
            <div class="blog-item">
                <div class="blog-title">Getting Started with React Hooks</div>
                <div class="blog-date">January 15, 2024</div>
                <div class="blog-excerpt">An introduction to React Hooks and how they can simplify your component logic. Learn about useState, useEffect, and custom hooks.</div>
            </div>

            <div class="blog-item">
                <div class="blog-title">Building RESTful APIs with Node.js</div>
                <div class="blog-date">February 3, 2024</div>
                <div class="blog-excerpt">A comprehensive guide to creating RESTful APIs using Node.js and Express. Best practices and common patterns.</div>
            </div>

            <div class="blog-item">
                <div class="blog-title">Database Design Principles</div>
                <div class="blog-date">March 10, 2024</div>
                <div class="blog-excerpt">Understanding the fundamentals of database design, normalization, and optimization techniques for better performance.</div>
                </div>
            </div>
    </div>

    <script>
        function toggleTheme() {
            const body = document.body;
            const button = document.querySelector('.theme-toggle');
            
            if (body.classList.contains('light-mode')) {
                body.classList.remove('light-mode');
                button.textContent = 'Dark Mode';
                localStorage.setItem('theme', 'dark');
            } else {
                body.classList.add('light-mode');
                button.textContent = 'Light Mode';
                localStorage.setItem('theme', 'light');
            }
        }

        // Load saved theme
        window.addEventListener('DOMContentLoaded', () => {
            const savedTheme = localStorage.getItem('theme');
            const button = document.querySelector('.theme-toggle');
            
            if (savedTheme === 'light') {
                document.body.classList.add('light-mode');
                button.textContent = 'Light Mode';
            } else {
                button.textContent = 'Dark Mode';
            }
        });
    </script>
</body>
</html>
