<!DOCTYPE html>
<html lang="en">

<head>
    <title>IST Group</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;700;800&family=DM+Sans:ital,wght@0,300;0,400;1,300&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <section class="home">

        <!-- Background elements -->
        <div class="home-glow"></div>
        <div class="home-topline"></div>
        <div class="home-dotgrid"></div>

        <!-- Main content grid -->
        <div class="home-content">

            <!-- LEFT: Text -->
            <div class="home-left">

                <div class="badge">
                    <span class="badge-dot"></span>
                    Now available for projects
                </div>

                <p class="eyebrow">Innovation · Strategy · Technology</p>

                <h1 class="hero-title">
                    Hi, We are<br>
                    the <span class="highlight">IST Group</span>
                </h1>

                <p class="subtitle">Sample Website</p>

                <p class="body-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </p>

                <div class="btn-box">
                    <a href="#" class="btn-primary">Hire us</a>
                    <a href="#" class="btn-outline">About us</a>
                </div>

            </div>

            <!-- RIGHT: Stats -->
            <div class="home-right">

                <div class="stat-cards">

                    <div class="stat-card">
                        <div class="stat-value">12<span class="accent">+</span></div>
                        <div class="stat-label">Years active</div>
                        <div class="stat-icon">📅</div>
                    </div>

                    <div class="stat-card">
                        <div class="stat-value">200<span class="accent">+</span></div>
                        <div class="stat-label">Projects done</div>
                        <div class="stat-icon">🚀</div>
                    </div>

                    <div class="stat-card">
                        <div class="stat-value">98<span class="accent">%</span></div>
                        <div class="stat-label">Client satisfaction</div>
                        <div class="stat-icon">⭐</div>
                    </div>

                    <div class="stat-card accent-card">
                        <div>
                            <div class="stat-value">Let's build together</div>
                            <div class="stat-label">Open for new work</div>
                        </div>
                        <div class="accent-arrow">→</div>
                    </div>

                </div>

                <div class="tech-strip">
                    <span class="tech-tag">Laravel</span>
                    <span class="tech-tag">Vue.js</span>
                    <span class="tech-tag">React</span>
                    <span class="tech-tag">MySQL</span>
                    <span class="tech-tag">Tailwind</span>
                    <span class="tech-tag">Node.js</span>
                </div>

            </div>
        </div>

        <!-- Scroll indicator -->
        <div class="scroll-hint">
            <div class="scroll-line"></div>
            <span>Scroll</span>
        </div>

    </section>
</body>

</html>