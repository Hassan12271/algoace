<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Algoace — Web, AI & Mobile Development Agency</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700;800&family=DM+Sans:ital,wght@0,300;0,400;0,500;1,300&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <?php wp_head(); ?>
</head>

<body>

    <div class="cursor" id="cursor"></div>
    <div class="cursor-ring" id="cursorRing"></div>
    <div class="grid-bg"></div>
    <button class="scroll-top" id="scrollTop">↑</button>

    <!-- ============ HEADER ============ -->
    <header id="header">
        <a class="logo" onclick="showPage('home')">
            <div class="logo-mark">
                <svg viewBox="0 0 24 24">
                    <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5" />
                </svg>
            </div>
            Algo<span class="accent">ace</span>
        </a>
        <nav id="mainNav">
            <a onclick="showPage('home')" class="active" data-page="home">Home</a>
            <a onclick="showPage('about')" data-page="about">About</a>
            <a onclick="showPage('services')" data-page="services">Services</a>
            <a onclick="showPage('blog')" data-page="blog">Blog</a>
            <a onclick="showPage('contact')" class="nav-cta" data-page="contact">Get Started</a>
        </nav>
        <div class="hamburger" id="hamburger">
            <span></span><span></span><span></span>
        </div>
    </header>

    <div class="mobile-nav" id="mobileNav">
        <a onclick="showPage('home');closeMobile()">Home</a>
        <a onclick="showPage('about');closeMobile()">About</a>
        <a onclick="showPage('services');closeMobile()">Services</a>
        <a onclick="showPage('blog');closeMobile()">Blog</a>
        <a onclick="showPage('contact');closeMobile()" style="color:var(--accent)">Get Started</a>
    </div>

    <!-- ============ HOME PAGE ============ -->
    <div class="page active" id="page-home">

        <!-- HERO -->
        <section class="hero">
            <div class="hero-orb hero-orb-1"></div>
            <div class="hero-orb hero-orb-2"></div>
            <div class="hero-content">
                <div class="hero-badge">
                    <div class="hero-badge-dot"></div>
                    <span>🚀 Now accepting <strong>Q2 2025</strong> projects</span>
                </div>
                <h1>We Build<br><span class="line-accent">Digital</span><br><span class="line-purple">Experiences.</span></h1>
                <p>Algoace crafts cutting-edge web platforms, AI-powered systems, and mobile apps that transform businesses and
                    delight users worldwide.</p>
                <div class="hero-btns">
                    <button class="btn btn-primary" onclick="showPage('services')">
                        Explore Services
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M5 12h14M12 5l7 7-7 7" />
                        </svg>
                    </button>
                    <button class="btn btn-outline" onclick="showPage('contact')">
                        Let's Talk
                    </button>
                </div>
                <div class="hero-stats">
                    <div class="stat-item">
                        <div class="stat-num counter" data-target="200">0</div>
                        <div
                            style="color:var(--accent);font-size:1.5rem;display:inline;font-weight:800;font-family:var(--font-head)">+
                        </div>
                        <div class="stat-label">Projects Delivered</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-num counter" data-target="98">0</div>
                        <div
                            style="color:var(--accent);font-size:1.5rem;display:inline;font-weight:800;font-family:var(--font-head)">%
                        </div>
                        <div class="stat-label">Client Satisfaction</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-num counter" data-target="7">0</div>
                        <div
                            style="color:var(--accent);font-size:1.5rem;display:inline;font-weight:800;font-family:var(--font-head)">+
                        </div>
                        <div class="stat-label">Years Experience</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-num counter" data-target="40">0</div>
                        <div
                            style="color:var(--accent);font-size:1.5rem;display:inline;font-weight:800;font-family:var(--font-head)">+
                        </div>
                        <div class="stat-label">Expert Team</div>
                    </div>
                </div>
            </div>
            <div class="hero-visual">
                <div class="code-block">
                    <div><span class="ln">1</span><span class="code-comment">// Algoace builds magic</span></div>
                    <div><span class="ln">2</span><span class="code-kw">const</span> <span class="code-fn">agency</span> = {</div>
                    <div><span class="ln">3</span>&nbsp;&nbsp;name: <span class="code-str">'Algoace'</span>,</div>
                    <div><span class="ln">4</span>&nbsp;&nbsp;services: [<span class="code-str">'Web'</span>, <span
                            class="code-str">'AI'</span>, <span class="code-str">'Mobile'</span>],</div>
                    <div><span class="ln">5</span>&nbsp;&nbsp;quality: <span class="code-num">100</span>,</div>
                    <div><span class="ln">6</span>&nbsp;&nbsp;clients: <span class="code-fn">satisfied</span>,</div>
                    <div><span class="ln">7</span>};</div>
                    <div><span class="ln">8</span>&nbsp;</div>
                    <div><span class="ln">9</span><span class="code-fn">launch</span>(agency).<span
                            class="code-fn">then</span>(result => {</div>
                    <div><span class="ln">10</span>&nbsp;&nbsp;console.<span class="code-fn">log</span>(<span class="code-str">'🚀
                            Success!'</span>);</div>
                    <div><span class="ln">11</span>});</div>
                </div>
                <div class="floating-card fc-1">
                    <div class="fc-icon" style="background:rgba(0,245,212,0.1);">🌐</div>
                    <div>
                        <div style="font-weight:700;font-size:0.88rem;">Web Platform Live</div>
                        <div style="color:var(--accent);font-size:0.78rem;">+2.3k users today</div>
                    </div>
                </div>
                <div class="floating-card fc-2">
                    <div class="fc-icon" style="background:rgba(124,58,237,0.15);">🤖</div>
                    <div>
                        <div style="font-weight:700;font-size:0.88rem;">AI Model Trained</div>
                        <div style="color:#a78bfa;font-size:0.78rem;">98.7% accuracy</div>
                    </div>
                </div>
                <div class="floating-card fc-3">
                    <div class="fc-icon" style="background:rgba(245,158,11,0.1);">📱</div>
                    <div>
                        <div style="font-weight:700;font-size:0.88rem;">App Deployed</div>
                        <div style="color:var(--accent3);font-size:0.78rem;">5★ on App Store</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- MARQUEE -->
        <div class="marquee-section">
            <div class="marquee-track">
                <div class="marquee-item">🌐 Web Development</div>
                <div class="marquee-dot"></div>
                <div class="marquee-item">🤖 Artificial Intelligence</div>
                <div class="marquee-dot"></div>
                <div class="marquee-item">📱 Mobile Apps</div>
                <div class="marquee-dot"></div>
                <div class="marquee-item">☁️ Cloud Architecture</div>
                <div class="marquee-dot"></div>
                <div class="marquee-item">🔐 Cybersecurity</div>
                <div class="marquee-dot"></div>
                <div class="marquee-item">📊 Data Analytics</div>
                <div class="marquee-dot"></div>
                <div class="marquee-item">⚡ API Development</div>
                <div class="marquee-dot"></div>
                <div class="marquee-item">🎨 UI/UX Design</div>
                <div class="marquee-dot"></div>
                <!-- duplicate for infinite -->
                <div class="marquee-item">🌐 Web Development</div>
                <div class="marquee-dot"></div>
                <div class="marquee-item">🤖 Artificial Intelligence</div>
                <div class="marquee-dot"></div>
                <div class="marquee-item">📱 Mobile Apps</div>
                <div class="marquee-dot"></div>
                <div class="marquee-item">☁️ Cloud Architecture</div>
                <div class="marquee-dot"></div>
                <div class="marquee-item">🔐 Cybersecurity</div>
                <div class="marquee-dot"></div>
                <div class="marquee-item">📊 Data Analytics</div>
                <div class="marquee-dot"></div>
                <div class="marquee-item">⚡ API Development</div>
                <div class="marquee-dot"></div>
                <div class="marquee-item">🎨 UI/UX Design</div>
                <div class="marquee-dot"></div>
            </div>
        </div>

        <!-- SERVICES PREVIEW -->
        <section>
            <div class="text-center reveal">
                <div class="section-label">What We Do</div>
                <h2 class="section-title">Services That <span class="grad">Drive Growth</span></h2>
                <p class="section-sub">From concept to launch, we deliver solutions that exceed expectations and push the
                    boundaries of what's possible.</p>
            </div>
            <div class="services-grid">
                <div class="service-card reveal" onclick="showPage('service-detail','web')">
                    <div class="service-icon" style="background:rgba(0,245,212,0.1);">🌐</div>
                    <h3>Web Development</h3>
                    <p>Blazing-fast, scalable web applications built with modern frameworks. From e-commerce platforms to complex
                        SaaS products.</p>
                    <div class="service-arr">Learn More <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" width="16" height="16">
                            <path d="M5 12h14M12 5l7 7-7 7" />
                        </svg></div>
                </div>
                <div class="service-card reveal" style="transition-delay:0.1s" onclick="showPage('service-detail','ai')">
                    <div class="service-icon" style="background:rgba(124,58,237,0.15);">🤖</div>
                    <h3>AI & Machine Learning</h3>
                    <p>Intelligent automation, NLP systems, predictive analytics, and custom AI models that give your business a
                        competitive edge.</p>
                    <div class="service-arr">Learn More <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" width="16" height="16">
                            <path d="M5 12h14M12 5l7 7-7 7" />
                        </svg></div>
                </div>
                <div class="service-card reveal" style="transition-delay:0.2s" onclick="showPage('service-detail','mobile')">
                    <div class="service-icon" style="background:rgba(245,158,11,0.1);">📱</div>
                    <h3>Mobile App Development</h3>
                    <p>Native iOS & Android apps and cross-platform solutions with stunning UIs and exceptional performance.</p>
                    <div class="service-arr">Learn More <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" width="16" height="16">
                            <path d="M5 12h14M12 5l7 7-7 7" />
                        </svg></div>
                </div>
            </div>
        </section>

        <!-- PROCESS -->
        <section style="background:var(--bg2);border-top:1px solid var(--border);border-bottom:1px solid var(--border);">
            <div class="text-center reveal">
                <div class="section-label">How We Work</div>
                <h2 class="section-title">Our Proven <span class="grad">Process</span></h2>
                <p class="section-sub">A streamlined approach that delivers results on time, every time.</p>
            </div>
            <div class="process-grid">
                <div class="process-step reveal">
                    <div class="process-num">01</div>
                    <h4>Discovery</h4>
                    <p>Deep dive into your goals, market, and technical requirements to form a solid foundation.</p>
                </div>
                <div class="process-step reveal" style="transition-delay:0.1s">
                    <div class="process-num">02</div>
                    <h4>Design</h4>
                    <p>User-centered designs with interactive prototypes to validate ideas before development.</p>
                </div>
                <div class="process-step reveal" style="transition-delay:0.2s">
                    <div class="process-num">03</div>
                    <h4>Build</h4>
                    <p>Agile development sprints with continuous testing and transparent communication.</p>
                </div>
                <div class="process-step reveal" style="transition-delay:0.3s">
                    <div class="process-num">04</div>
                    <h4>Launch</h4>
                    <p>Deployment, performance tuning, monitoring, and ongoing support for long-term success.</p>
                </div>
            </div>
        </section>

        <!-- TESTIMONIALS -->
        <section>
            <div class="text-center reveal">
                <div class="section-label">Client Love</div>
                <h2 class="section-title">What Our <span class="grad">Clients Say</span></h2>
                <p class="section-sub">Don't take our word for it — hear from businesses we've helped transform.</p>
            </div>
            <div class="testimonials-grid">
                <div class="testimonial-card reveal">
                    <div class="quote-mark">"</div>
                    <div class="stars">★★★★★</div>
                    <p class="testimonial-text">Algoace completely reimagined our platform. The AI integration they built
                        increased our conversion rate by 340%. Truly exceptional work.</p>
                    <div class="testimonial-author">
                        <div class="author-avatar" style="background:rgba(0,245,212,0.1);color:var(--accent);">SJ</div>
                        <div>
                            <div class="author-name">Sarah Johnson</div>
                            <div class="author-role">CEO, TechVentures</div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card reveal" style="transition-delay:0.1s">
                    <div class="quote-mark">"</div>
                    <div class="stars">★★★★★</div>
                    <p class="testimonial-text">The mobile app they built for us has over 100k downloads in 3 months. Beautiful
                        design, flawless performance. Algoace delivers on every promise.</p>
                    <div class="testimonial-author">
                        <div class="author-avatar" style="background:rgba(124,58,237,0.15);color:#a78bfa;">MR</div>
                        <div>
                            <div class="author-name">Marcus Rivera</div>
                            <div class="author-role">Founder, LaunchPad</div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card reveal" style="transition-delay:0.2s">
                    <div class="quote-mark">"</div>
                    <div class="stars">★★★★★</div>
                    <p class="testimonial-text">Their team understood our vision immediately. The web platform they delivered is
                        exactly what we needed — scalable, fast, and gorgeous.</p>
                    <div class="testimonial-author">
                        <div class="author-avatar" style="background:rgba(245,158,11,0.1);color:var(--accent3);">AK</div>
                        <div>
                            <div class="author-name">Aisha Khan</div>
                            <div class="author-role">CTO, DataFlow Inc</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA -->
        <div class="cta-section reveal">
            <div class="section-label" style="display:inline-flex;margin-bottom:20px;">Let's Create Something</div>
            <h2 class="section-title">Ready to Build Your <span class="grad">Dream Product?</span></h2>
            <p>Join 200+ companies that chose Algoace to bring their digital vision to life. Your success story starts with a
                conversation.</p>
            <div class="cta-btns">
                <button class="btn btn-primary" onclick="showPage('contact')">Start Your Project <svg viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M5 12h14M12 5l7 7-7 7" />
                    </svg></button>
                <button class="btn btn-outline" onclick="showPage('about')">Learn About Us</button>
            </div>
        </div>

    </div><!-- end home -->

    <!-- ============ ABOUT PAGE ============ -->
    <div class="page" id="page-about">

        <div class="about-hero">
            <div class="about-hero-bg"></div>
            <div style="position:relative;z-index:1;">
                <div class="section-label">About Algoace</div>
                <h1 class="section-title" style="font-size:clamp(2.5rem,5vw,4.5rem);">We're a Team of<br><span
                        class="grad">Passionate Builders</span></h1>
                <p class="section-sub" style="font-size:1.1rem;">Founded in 2017, Algoace is a full-service digital agency that
                    combines technical excellence with strategic thinking to create transformative digital products.</p>
            </div>
        </div>

        <!-- STORY -->
        <section style="padding-top:60px;">
            <div class="about-grid">
                <div class="reveal-left">
                    <div class="section-label">Our Story</div>
                    <h2 class="section-title">Built with <span class="grad">Purpose</span></h2>
                    <p style="color:var(--text2);line-height:1.8;margin-top:20px;">Algoace was born from a simple belief: that
                        technology, when crafted with care, can fundamentally transform how businesses operate and how people
                        experience the world.</p>
                    <p style="color:var(--text2);line-height:1.8;margin-top:16px;">What started as a two-person web studio in 2017
                        has grown into a 40+ person powerhouse delivering AI-driven platforms, mobile apps, and web experiences for
                        clients across 25+ countries.</p>
                    <div style="display:flex;gap:16px;margin-top:32px;">
                        <button class="btn btn-primary" onclick="showPage('contact')">Work With Us</button>
                        <button class="btn btn-outline" onclick="showPage('services')">Our Services</button>
                    </div>
                </div>
                <div class="reveal-right">
                    <div class="about-img-wrap">
                        <div class="about-img-box">
                            <svg viewBox="0 0 200 200" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="100" cy="100" r="80" stroke="currentColor" stroke-width="2" />
                                <path d="M60 100 L100 60 L140 100 L100 140 Z" stroke="currentColor" stroke-width="2" />
                                <circle cx="100" cy="100" r="20" fill="currentColor" />
                            </svg>
                            <div
                                style="position:absolute;inset:0;background:radial-gradient(circle at 60% 40%,rgba(0,245,212,0.15),transparent 60%);">
                            </div>
                        </div>
                        <div class="about-accent-card">
                            <div class="num">200+</div>
                            <div class="label">Projects Completed</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- VALUES -->
        <section style="background:var(--bg2);border-top:1px solid var(--border);border-bottom:1px solid var(--border);">
            <div class="text-center reveal">
                <div class="section-label">Our Values</div>
                <h2 class="section-title">What We <span class="grad">Stand For</span></h2>
                <p class="section-sub">Four core values that guide everything we build and every partnership we form.</p>
            </div>
            <div class="about-values" style="margin-top:60px;">
                <div class="value-card reveal">
                    <div class="value-icon">⚡</div>
                    <h4>Excellence First</h4>
                    <p>We set the bar high and clear it every single time. Mediocrity isn't in our vocabulary.</p>
                </div>
                <div class="value-card reveal" style="transition-delay:0.1s">
                    <div class="value-icon">🔍</div>
                    <h4>Radical Transparency</h4>
                    <p>Open communication, honest timelines, and no surprises. You always know where things stand.</p>
                </div>
                <div class="value-card reveal" style="transition-delay:0.2s">
                    <div class="value-icon">🚀</div>
                    <h4>Innovation Always</h4>
                    <p>We're obsessed with emerging tech. AI, edge computing, WebAssembly — we stay ahead.</p>
                </div>
                <div class="value-card reveal" style="transition-delay:0.3s">
                    <div class="value-icon">🤝</div>
                    <h4>Partner Mindset</h4>
                    <p>We're not vendors, we're partners. Your growth is our growth. Long-term relationships over quick wins.</p>
                </div>
            </div>
        </section>

        <!-- TEAM -->
        <section>
            <div class="text-center reveal">
                <div class="section-label">The Team</div>
                <h2 class="section-title">Meet the <span class="grad">Minds</span> Behind It</h2>
                <p class="section-sub">A diverse crew of engineers, designers, and strategists united by a passion for digital
                    excellence.</p>
            </div>
            <div class="team-grid">
                <div class="team-card reveal">
                    <div class="team-avatar" style="background:rgba(0,245,212,0.1);color:var(--accent);">AZ</div>
                    <h4>Alex Zhang</h4>
                    <div class="role">Co-Founder & CEO</div>
                    <p>10 years in tech leadership. Ex-Google. Passionate about AI and scalable systems.</p>
                </div>
                <div class="team-card reveal" style="transition-delay:0.1s">
                    <div class="team-avatar" style="background:rgba(124,58,237,0.15);color:#a78bfa;">PR</div>
                    <h4>Priya Rajan</h4>
                    <div class="role">CTO & Co-Founder</div>
                    <p>Full-stack wizard. Built systems serving 10M+ users. MIT Computer Science alumni.</p>
                </div>
                <div class="team-card reveal" style="transition-delay:0.2s">
                    <div class="team-avatar" style="background:rgba(245,158,11,0.1);color:var(--accent3);">JO</div>
                    <h4>James Okafor</h4>
                    <div class="role">Head of AI/ML</div>
                    <p>PhD in Machine Learning. Specializes in NLP and computer vision applications.</p>
                </div>
                <div class="team-card reveal" style="transition-delay:0.3s">
                    <div class="team-avatar" style="background:rgba(236,72,153,0.1);color:#f472b6;">SM</div>
                    <h4>Sofia Martinez</h4>
                    <div class="role">Design Director</div>
                    <p>Award-winning UX designer. Former head of design at two unicorn startups.</p>
                </div>
            </div>
        </section>

        <!-- SKILLS / MILESTONES -->
        <section style="background:var(--bg2);border-top:1px solid var(--border);">
            <div style="display:grid;grid-template-columns:1fr 1fr;gap:80px;align-items:center;" class="about-grid">
                <div class="reveal-left">
                    <div class="section-label">Our Expertise</div>
                    <h2 class="section-title">Technical <span class="grad">Mastery</span></h2>
                    <p style="color:var(--text2);margin:20px 0 40px;line-height:1.7;">Years of honing our craft across the entire
                        technology stack.</p>
                    <div class="skills-bar-section">
                        <div class="skill-bar">
                            <div class="skill-bar-header"><span>Web Development</span><span>96%</span></div>
                            <div class="skill-bar-track">
                                <div class="skill-bar-fill" data-width="96"></div>
                            </div>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-bar-header"><span>AI & Machine Learning</span><span>90%</span></div>
                            <div class="skill-bar-track">
                                <div class="skill-bar-fill" data-width="90"></div>
                            </div>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-bar-header"><span>Mobile Development</span><span>93%</span></div>
                            <div class="skill-bar-track">
                                <div class="skill-bar-fill" data-width="93"></div>
                            </div>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-bar-header"><span>Cloud & DevOps</span><span>88%</span></div>
                            <div class="skill-bar-track">
                                <div class="skill-bar-fill" data-width="88"></div>
                            </div>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-bar-header"><span>UI/UX Design</span><span>94%</span></div>
                            <div class="skill-bar-track">
                                <div class="skill-bar-fill" data-width="94"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="reveal-right">
                    <div class="milestones">
                        <div class="milestone">
                            <div class="milestone-num counter" data-target="200">0</div><span
                                style="color:var(--accent);font-family:var(--font-head);font-size:1.5rem;font-weight:800;">+</span>
                            <p>Projects Completed</p>
                        </div>
                        <div class="milestone">
                            <div class="milestone-num counter" data-target="25">0</div><span
                                style="color:var(--accent);font-family:var(--font-head);font-size:1.5rem;font-weight:800;">+</span>
                            <p>Countries Served</p>
                        </div>
                        <div class="milestone">
                            <div class="milestone-num counter" data-target="40">0</div><span
                                style="color:var(--accent);font-family:var(--font-head);font-size:1.5rem;font-weight:800;">+</span>
                            <p>Team Members</p>
                        </div>
                        <div class="milestone">
                            <div class="milestone-num counter" data-target="7">0</div><span
                                style="color:var(--accent);font-family:var(--font-head);font-size:1.5rem;font-weight:800;">+</span>
                            <p>Years Operating</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA -->
        <div class="cta-section reveal">
            <div class="section-label" style="display:inline-flex;margin-bottom:20px;">Join Our Journey</div>
            <h2 class="section-title">Let's Build Something <span class="grad">Extraordinary</span></h2>
            <p>We're always looking for ambitious projects and talented collaborators. Let's create together.</p>
            <div class="cta-btns">
                <button class="btn btn-primary" onclick="showPage('contact')">Start a Project</button>
                <button class="btn btn-outline">View Careers</button>
            </div>
        </div>
    </div>

    <!-- ============ SERVICES PAGE ============ -->
    <div class="page" id="page-services">

        <div class="services-hero">
            <div class="section-label">Our Services</div>
            <h1 class="section-title" style="font-size:clamp(2.5rem,5vw,4.5rem);">Everything You Need to <span
                    class="grad">Succeed Digitally</span></h1>
            <p class="section-sub" style="font-size:1.1rem;">End-to-end digital solutions from strategy and design through
                development, launch, and beyond.</p>
        </div>

        <!-- ALL SERVICES -->
        <section style="padding-top:40px;">
            <div class="all-services-grid">
                <div class="big-service-card reveal" onclick="showPage('service-detail','web')">
                    <div class="bsc-icon" style="background:rgba(0,245,212,0.1);">🌐</div>
                    <div class="bsc-content">
                        <h3>Web Development</h3>
                        <p>High-performance web applications using React, Next.js, Vue, Node.js, and more. From landing pages to
                            enterprise platforms — built to scale.</p>
                        <div class="tech-tags">
                            <span class="tech-tag">React</span><span class="tech-tag">Next.js</span><span
                                class="tech-tag">Node.js</span><span class="tech-tag">TypeScript</span><span
                                class="tech-tag">PostgreSQL</span><span class="tech-tag">AWS</span>
                        </div>
                        <div class="service-arr" style="margin-top:20px;">View Details <svg viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" width="16" height="16">
                                <path d="M5 12h14M12 5l7 7-7 7" />
                            </svg></div>
                    </div>
                </div>
                <div class="big-service-card reveal" style="transition-delay:0.1s" onclick="showPage('service-detail','ai')">
                    <div class="bsc-icon" style="background:rgba(124,58,237,0.15);">🤖</div>
                    <div class="bsc-content">
                        <h3>AI & Machine Learning</h3>
                        <p>Custom AI models, NLP pipelines, computer vision, recommendation engines, and intelligent automation
                            tailored to your business needs.</p>
                        <div class="tech-tags">
                            <span class="tech-tag">Python</span><span class="tech-tag">TensorFlow</span><span
                                class="tech-tag">PyTorch</span><span class="tech-tag">OpenAI</span><span
                                class="tech-tag">LangChain</span><span class="tech-tag">RAG</span>
                        </div>
                        <div class="service-arr" style="margin-top:20px;">View Details <svg viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" width="16" height="16">
                                <path d="M5 12h14M12 5l7 7-7 7" />
                            </svg></div>
                    </div>
                </div>
                <div class="big-service-card reveal" onclick="showPage('service-detail','mobile')">
                    <div class="bsc-icon" style="background:rgba(245,158,11,0.1);">📱</div>
                    <div class="bsc-content">
                        <h3>Mobile App Development</h3>
                        <p>Beautiful, feature-rich iOS and Android apps. Native development with Swift & Kotlin, or cross-platform
                            with React Native and Flutter.</p>
                        <div class="tech-tags">
                            <span class="tech-tag">React Native</span><span class="tech-tag">Flutter</span><span
                                class="tech-tag">Swift</span><span class="tech-tag">Kotlin</span><span class="tech-tag">Firebase</span>
                        </div>
                        <div class="service-arr" style="margin-top:20px;">View Details <svg viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" width="16" height="16">
                                <path d="M5 12h14M12 5l7 7-7 7" />
                            </svg></div>
                    </div>
                </div>
                <div class="big-service-card reveal" style="transition-delay:0.1s">
                    <div class="bsc-icon" style="background:rgba(236,72,153,0.1);">☁️</div>
                    <div class="bsc-content">
                        <h3>Cloud & DevOps</h3>
                        <p>AWS, GCP, and Azure architecture, CI/CD pipelines, containerization, and infrastructure-as-code for
                            scalable, resilient systems.</p>
                        <div class="tech-tags">
                            <span class="tech-tag">AWS</span><span class="tech-tag">Docker</span><span
                                class="tech-tag">Kubernetes</span><span class="tech-tag">Terraform</span><span class="tech-tag">GitHub
                                Actions</span>
                        </div>
                        <div class="service-arr" style="margin-top:20px;">View Details <svg viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" width="16" height="16">
                                <path d="M5 12h14M12 5l7 7-7 7" />
                            </svg></div>
                    </div>
                </div>
            </div>
        </section>

        <!-- PRICING -->
        <section style="background:var(--bg2);border-top:1px solid var(--border);border-bottom:1px solid var(--border);">
            <div class="text-center reveal">
                <div class="section-label">Pricing</div>
                <h2 class="section-title">Simple, <span class="grad">Transparent</span> Pricing</h2>
                <p class="section-sub">No hidden fees. Choose the package that fits your needs, or reach out for a custom quote.
                </p>
            </div>
            <div class="pricing-grid">
                <div class="pricing-card reveal">
                    <div class="pricing-name">Starter</div>
                    <div class="pricing-price">$2,500<span>/project</span></div>
                    <ul class="pricing-features">
                        <li>5-page website or app</li>
                        <li>Responsive design</li>
                        <li>Basic CMS integration</li>
                        <li>2 revision rounds</li>
                        <li>1 month support</li>
                    </ul>
                    <button class="btn btn-outline" style="width:100%;justify-content:center;" onclick="showPage('contact')">Get
                        Started</button>
                </div>
                <div class="pricing-card featured reveal" style="transition-delay:0.1s">
                    <div class="pricing-badge">Most Popular</div>
                    <div class="pricing-name">Professional</div>
                    <div class="pricing-price">$8,000<span>/project</span></div>
                    <ul class="pricing-features">
                        <li>Full custom development</li>
                        <li>AI/ML integration</li>
                        <li>API development</li>
                        <li>Unlimited revisions</li>
                        <li>3 months support</li>
                        <li>Performance optimization</li>
                    </ul>
                    <button class="btn btn-primary" style="width:100%;justify-content:center;" onclick="showPage('contact')">Get
                        Started</button>
                </div>
                <div class="pricing-card reveal" style="transition-delay:0.2s">
                    <div class="pricing-name">Enterprise</div>
                    <div class="pricing-price">Custom<span> quote</span></div>
                    <ul class="pricing-features">
                        <li>Everything in Pro</li>
                        <li>Dedicated team</li>
                        <li>Custom AI solutions</li>
                        <li>SLA guarantee</li>
                        <li>12 months support</li>
                        <li>White-glove onboarding</li>
                    </ul>
                    <button class="btn btn-outline" style="width:100%;justify-content:center;"
                        onclick="showPage('contact')">Contact Us</button>
                </div>
            </div>
        </section>

        <!-- FAQ -->
        <section>
            <div class="text-center reveal">
                <div class="section-label">FAQ</div>
                <h2 class="section-title">Frequently Asked <span class="grad">Questions</span></h2>
                <p class="section-sub">Everything you need to know before starting your project with us.</p>
            </div>
            <div class="faq-list" style="max-width:800px;margin:0 auto;">
                <div class="faq-item reveal">
                    <div class="faq-q" onclick="toggleFaq(this)">How long does a typical project take? <svg width="20" height="20"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M6 9l6 6 6-6" />
                        </svg></div>
                    <div class="faq-a">
                        <div class="faq-a-inner">Project timelines vary based on scope. A simple website takes 2–4 weeks, a complex
                            web app 8–16 weeks, and an AI-integrated platform 12–24 weeks. We provide detailed timelines during
                            discovery.</div>
                    </div>
                </div>
                <div class="faq-item reveal">
                    <div class="faq-q" onclick="toggleFaq(this)">Do you work with startups and small businesses? <svg width="20"
                            height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M6 9l6 6 6-6" />
                        </svg></div>
                    <div class="faq-a">
                        <div class="faq-a-inner">Absolutely! We love working with ambitious startups and growing businesses. Our
                            Starter and Professional packages are specifically designed to make top-tier development accessible at
                            every stage.</div>
                    </div>
                </div>
                <div class="faq-item reveal">
                    <div class="faq-q" onclick="toggleFaq(this)">What's your development process? <svg width="20" height="20"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M6 9l6 6 6-6" />
                        </svg></div>
                    <div class="faq-a">
                        <div class="faq-a-inner">We follow an agile methodology with 2-week sprints. You'll have a dedicated project
                            manager, weekly calls, access to our project management tool, and demos after each sprint to review
                            progress.</div>
                    </div>
                </div>
                <div class="faq-item reveal">
                    <div class="faq-q" onclick="toggleFaq(this)">Do you provide post-launch support? <svg width="20" height="20"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M6 9l6 6 6-6" />
                        </svg></div>
                    <div class="faq-a">
                        <div class="faq-a-inner">Yes, all packages include post-launch support. We offer ongoing maintenance plans
                            ranging from 1 to 12 months, covering bug fixes, performance monitoring, security updates, and feature
                            enhancements.</div>
                    </div>
                </div>
                <div class="faq-item reveal">
                    <div class="faq-q" onclick="toggleFaq(this)">Can you work with our existing codebase? <svg width="20"
                            height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M6 9l6 6 6-6" />
                        </svg></div>
                    <div class="faq-a">
                        <div class="faq-a-inner">Definitely. We regularly audit and extend existing codebases. Our team will do a
                            thorough technical assessment first to understand the architecture and provide a plan for improvements or
                            additions.</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA -->
        <div class="cta-section reveal">
            <h2 class="section-title">Ready to Start? <span class="grad">Let's Talk.</span></h2>
            <p>Get a free consultation and project estimate. No commitment required.</p>
            <div class="cta-btns">
                <button class="btn btn-primary" onclick="showPage('contact')">Get Free Quote <svg viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M5 12h14M12 5l7 7-7 7" />
                    </svg></button>
            </div>
        </div>
    </div>

    <!-- ============ SERVICE DETAIL ============ -->
    <div class="page" id="page-service-detail">
        <div class="service-detail-hero">
            <button class="btn btn-outline" onclick="showPage('services')" style="margin-bottom:32px;">← Back to
                Services</button>
            <div style="display:flex;gap:16px;align-items:center;margin-bottom:24px;">
                <span id="sd-emoji" style="font-size:2.5rem;"></span>
                <div class="section-label" id="sd-tag">Web Development</div>
            </div>
            <h1 class="section-title" id="sd-title" style="font-size:clamp(2rem,4vw,3.5rem);"></h1>
            <p class="section-sub" id="sd-desc"></p>
        </div>

        <section style="padding-top:20px;">
            <div class="service-detail-content">
                <div>
                    <h2 style="font-size:1.8rem;font-weight:800;margin-bottom:24px;">What's Included</h2>
                    <div id="sd-features" style="display:grid;grid-template-columns:1fr 1fr;gap:20px;margin-bottom:60px;"></div>

                    <h2 style="font-size:1.8rem;font-weight:800;margin-bottom:24px;">Our Approach</h2>
                    <div id="sd-approach" style="color:var(--text2);line-height:1.8;"></div>

                    <h2 style="font-size:1.8rem;font-weight:800;margin:48px 0 24px;">Technologies We Use</h2>
                    <div id="sd-tech" class="tech-tags" style="gap:12px;flex-wrap:wrap;"></div>

                    <div
                        style="margin-top:60px;background:linear-gradient(135deg,rgba(0,245,212,0.06),rgba(124,58,237,0.06));border:1px solid var(--border);border-radius:24px;padding:40px;">
                        <h3 style="font-size:1.4rem;font-weight:800;margin-bottom:12px;">Ready to get started?</h3>
                        <p style="color:var(--text2);margin-bottom:24px;">Let's discuss your project and create something amazing
                            together.</p>
                        <button class="btn btn-primary" onclick="showPage('contact')">Start Your Project →</button>
                    </div>
                </div>
                <div>
                    <div class="service-detail-sidebar">
                        <h3 style="font-weight:800;font-size:1.1rem;margin-bottom:24px;">Project Details</h3>
                        <div id="sd-sidebar"></div>
                        <button class="btn btn-primary" style="width:100%;justify-content:center;margin-top:32px;"
                            onclick="showPage('contact')">Get a Quote</button>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- ============ BLOG PAGE ============ -->
    <div class="page" id="page-blog">

        <div class="blog-hero">
            <div class="section-label">Algoace Blog</div>
            <h1 class="section-title" style="font-size:clamp(2.5rem,5vw,4.5rem);">Insights, Tutorials &<br><span
                    class="grad">Industry News</span></h1>
            <p class="section-sub" style="font-size:1.1rem;">Deep dives into web development, AI, mobile apps, and the future
                of digital technology.</p>
        </div>

        <!-- FEATURED -->
        <section style="padding-top:20px;">
            <div class="section-label" style="margin-bottom:32px;">Featured Posts</div>
            <div class="blog-featured">
                <div class="blog-feature-card reveal" onclick="showPage('blog-detail','ai-future')">
                    <div class="blog-card-img">🤖</div>
                    <div class="blog-card-body">
                        <div class="blog-card-meta">
                            <span class="tag teal">AI & ML</span>
                            <span class="dot"></span>
                            <span>Mar 15, 2025</span>
                            <span class="dot"></span>
                            <span>8 min read</span>
                        </div>
                        <h3>The Future of AI in Enterprise Software Development</h3>
                        <p>How large language models and agentic AI are fundamentally changing how software gets built, tested, and
                            deployed at scale.</p>
                    </div>
                </div>
                <div style="display:flex;flex-direction:column;gap:24px;">
                    <div class="blog-feature-card reveal" style="transition-delay:0.1s"
                        onclick="showPage('blog-detail','react-2025')">
                        <div class="blog-card-img small">⚛️</div>
                        <div class="blog-card-body">
                            <div class="blog-card-meta">
                                <span class="tag">Web Dev</span>
                                <span class="dot"></span>
                                <span>Mar 10, 2025</span>
                            </div>
                            <h4>React Server Components: A 2025 Deep Dive</h4>
                        </div>
                    </div>
                    <div class="blog-feature-card reveal" style="transition-delay:0.2s"
                        onclick="showPage('blog-detail','mobile-trends')">
                        <div class="blog-card-img small">📱</div>
                        <div class="blog-card-body">
                            <div class="blog-card-meta">
                                <span class="tag amber">Mobile</span>
                                <span class="dot"></span>
                                <span>Mar 5, 2025</span>
                            </div>
                            <h4>5 Mobile App Trends Dominating 2025</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- MORE POSTS -->
        <section>
            <div class="section-label" style="margin-bottom:32px;">Latest Articles</div>
            <div class="blog-grid">
                <div class="blog-small-card reveal" onclick="showPage('blog-detail','nextjs-performance')">
                    <div class="blog-card-img" style="height:160px;">⚡</div>
                    <div class="blog-card-body">
                        <div class="blog-card-meta"><span class="tag">Performance</span><span class="dot"></span><span>Feb 28</span>
                        </div>
                        <h4>Optimizing Next.js for Core Web Vitals</h4>
                        <p>Practical techniques to achieve perfect Lighthouse scores on production apps.</p>
                    </div>
                </div>
                <div class="blog-small-card reveal" style="transition-delay:0.1s" onclick="showPage('blog-detail','llm-apps')">
                    <div class="blog-card-img" style="height:160px;">🧠</div>
                    <div class="blog-card-body">
                        <div class="blog-card-meta"><span class="tag teal">AI & ML</span><span class="dot"></span><span>Feb
                                22</span></div>
                        <h4>Building Production LLM Apps That Don't Fail</h4>
                        <p>Lessons learned from shipping AI-powered applications to millions of users.</p>
                    </div>
                </div>
                <div class="blog-small-card reveal" style="transition-delay:0.2s"
                    onclick="showPage('blog-detail','design-systems')">
                    <div class="blog-card-img" style="height:160px;">🎨</div>
                    <div class="blog-card-body">
                        <div class="blog-card-meta"><span class="tag amber">Design</span><span class="dot"></span><span>Feb
                                15</span></div>
                        <h4>Building a Scalable Design System from Scratch</h4>
                        <p>The complete guide to creating a design system that grows with your product.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- CATEGORIES -->
        <section style="background:var(--bg2);border-top:1px solid var(--border);border-bottom:1px solid var(--border);">
            <div class="text-center reveal">
                <div class="section-label">Browse by Topic</div>
                <h2 class="section-title">Find What <span class="grad">Interests You</span></h2>
            </div>
            <div style="display:flex;gap:16px;flex-wrap:wrap;justify-content:center;margin-top:48px;">
                <button class="btn btn-primary">All Posts</button>
                <button class="btn btn-outline">Web Development</button>
                <button class="btn btn-outline">AI & Machine Learning</button>
                <button class="btn btn-outline">Mobile Apps</button>
                <button class="btn btn-outline">Design</button>
                <button class="btn btn-outline">DevOps</button>
            </div>
        </section>

        <!-- NEWSLETTER -->
        <section>
            <div class="newsletter-box reveal">
                <div>
                    <h3 class="section-title" style="font-size:1.8rem;">Stay in the Loop 📬</h3>
                    <p>Get the latest insights on web dev, AI, and digital trends delivered weekly to your inbox.</p>
                </div>
                <div class="newsletter-form">
                    <input type="email" placeholder="Enter your email">
                    <button class="btn btn-primary"
                        onclick="this.textContent='Subscribed! ✓';this.style.background='#10b981'">Subscribe</button>
                </div>
            </div>
        </section>

        <!-- CTA -->
        <div class="cta-section reveal">
            <h2 class="section-title">Want Expert Help with Your <span class="grad">Project?</span></h2>
            <p>Stop reading, start building. Let's create your digital product together.</p>
            <div class="cta-btns">
                <button class="btn btn-primary" onclick="showPage('contact')">Start Today</button>
                <button class="btn btn-outline" onclick="showPage('services')">Explore Services</button>
            </div>
        </div>
    </div>

    <!-- ============ BLOG DETAIL ============ -->
    <div class="page" id="page-blog-detail">
        <div class="blog-detail-hero">
            <button class="btn btn-outline" onclick="showPage('blog')" style="margin-bottom:32px;">← Back to Blog</button>
            <div class="blog-card-meta" style="margin-bottom:24px;" id="bd-meta"></div>
            <h1 class="section-title" id="bd-title" style="font-size:clamp(1.8rem,4vw,3rem);max-width:760px;"></h1>
            <p style="color:var(--text2);font-size:1.05rem;margin-top:16px;max-width:640px;" id="bd-intro"></p>
        </div>
        <div class="blog-detail-layout">
            <article class="blog-body" id="bd-body"></article>
            <aside>
                <div class="blog-sidebar-widget">
                    <h4>About Algoace</h4>
                    <div style="display:flex;gap:12px;align-items:center;margin-bottom:16px;">
                        <div class="logo-mark"><svg viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5" />
                            </svg></div>
                        <div style="font-family:var(--font-head);font-weight:800;">Algoace</div>
                    </div>
                    <p style="color:var(--text2);font-size:0.85rem;line-height:1.6;margin-bottom:20px;">Web, AI & Mobile
                        development agency building the next generation of digital products.</p>
                    <button class="btn btn-primary" style="width:100%;justify-content:center;" onclick="showPage('contact')">Work
                        With Us</button>
                </div>
                <div class="blog-sidebar-widget">
                    <h4>Related Articles</h4>
                    <div class="related-post" onclick="showPage('blog-detail','ai-future')">
                        <div class="related-post-img">🤖</div>
                        <div>
                            <div class="related-post-title">The Future of AI in Enterprise Software</div>
                            <div class="related-post-date">Mar 15, 2025</div>
                        </div>
                    </div>
                    <div class="related-post" onclick="showPage('blog-detail','react-2025')">
                        <div class="related-post-img">⚛️</div>
                        <div>
                            <div class="related-post-title">React Server Components: 2025 Deep Dive</div>
                            <div class="related-post-date">Mar 10, 2025</div>
                        </div>
                    </div>
                    <div class="related-post" onclick="showPage('blog-detail','mobile-trends')">
                        <div class="related-post-img">📱</div>
                        <div>
                            <div class="related-post-title">5 Mobile Trends Dominating 2025</div>
                            <div class="related-post-date">Mar 5, 2025</div>
                        </div>
                    </div>
                </div>
                <div class="blog-sidebar-widget">
                    <h4>Categories</h4>
                    <div class="category-list">
                        <a>Web Development <span>12</span></a>
                        <a>AI & Machine Learning <span>8</span></a>
                        <a>Mobile Apps <span>6</span></a>
                        <a>Design <span>5</span></a>
                        <a>DevOps <span>4</span></a>
                    </div>
                </div>
            </aside>
        </div>
    </div>

    <!-- ============ CONTACT PAGE ============ -->
    <div class="page" id="page-contact">

        <div class="contact-hero">
            <div class="section-label">Get In Touch</div>
            <h1 class="section-title" style="font-size:clamp(2.5rem,5vw,4.5rem);">Let's Build Something<br><span
                    class="grad">Amazing Together</span></h1>
            <p class="section-sub" style="font-size:1.1rem;">Ready to turn your idea into reality? Fill in the form and we'll
                get back to you within 24 hours.</p>
        </div>

        <div class="contact-grid">
            <!-- FORM -->
            <div class="contact-form-box reveal-left">
                <h3 style="font-size:1.4rem;font-weight:800;margin-bottom:8px;">Send Us a Message</h3>
                <p style="color:var(--text2);font-size:0.9rem;margin-bottom:32px;">We'll get back to you within 24 hours.</p>
                <div id="contactForm">
                    <div class="form-row">
                        <div class="form-group">
                            <label>First Name</label>
                            <input type="text" placeholder="John">
                        </div>
                        <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" placeholder="Doe">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Email Address</label>
                        <input type="email" placeholder="john@company.com">
                    </div>
                    <div class="form-group">
                        <label>Company (Optional)</label>
                        <input type="text" placeholder="Your company name">
                    </div>
                    <div class="form-group">
                        <label>Service Interested In</label>
                        <select>
                            <option>Web Development</option>
                            <option>AI & Machine Learning</option>
                            <option>Mobile App Development</option>
                            <option>Cloud & DevOps</option>
                            <option>Full Package</option>
                            <option>Other</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Budget Range</label>
                        <select>
                            <option>Under $5,000</option>
                            <option>$5,000 – $15,000</option>
                            <option>$15,000 – $50,000</option>
                            <option>$50,000+</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Tell Us About Your Project</label>
                        <textarea placeholder="Describe your project, goals, and timeline..."></textarea>
                    </div>
                    <button class="btn btn-primary" style="width:100%;justify-content:center;" onclick="submitForm()">
                        Send Message
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M22 2L11 13M22 2l-7 20-4-9-9-4 20-7z" />
                        </svg>
                    </button>
                </div>
                <div class="form-success" id="formSuccess">
                    <div class="check">✓</div>
                    <h3>Message Sent!</h3>
                    <p style="color:var(--text2);">Thanks for reaching out. We'll get back to you within 24 hours.</p>
                </div>
            </div>

            <!-- INFO -->
            <div class="contact-info reveal-right">
                <h3>We'd Love to Hear From You</h3>
                <p>Whether you have a detailed brief or just an idea, our team is ready to help you shape and build your vision.
                </p>

                <div class="contact-items">
                    <div class="contact-item">
                        <div class="contact-item-icon">📧</div>
                        <div>
                            <h4>Email Us</h4>
                            <p>hello@algoace.com</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-item-icon">📞</div>
                        <div>
                            <h4>Call Us</h4>
                            <p>+1 (555) 123-4567</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-item-icon">📍</div>
                        <div>
                            <h4>Our Office</h4>
                            <p>42 Innovation Drive, San Francisco, CA 94102</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-item-icon">⏰</div>
                        <div>
                            <h4>Working Hours</h4>
                            <p>Mon–Fri, 9:00 AM – 6:00 PM PST</p>
                        </div>
                    </div>
                </div>

                <h4 style="font-weight:700;margin-bottom:16px;">Connect on Social</h4>
                <div class="social-links" style="margin-bottom:48px;">
                    <a class="social-link" title="Twitter">𝕏</a>
                    <a class="social-link" title="LinkedIn">in</a>
                    <a class="social-link" title="GitHub">⌨</a>
                    <a class="social-link" title="Dribbble">◎</a>
                    <a class="social-link" title="YouTube">▶</a>
                </div>

                <div class="map-box">
                    <div class="map-pin">📍</div>
                    <svg viewBox="0 0 400 200" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 100 Q50 60 100 80 Q150 100 200 70 Q250 40 300 80 Q350 120 400 90" stroke="currentColor"
                            stroke-width="2" fill="none" />
                        <path d="M0 140 Q80 120 160 130 Q240 140 320 120 Q360 110 400 130" stroke="currentColor" stroke-width="1"
                            fill="none" />
                        <circle cx="230" cy="90" r="8" fill="currentColor" />
                    </svg>
                </div>

                <div style="margin-top:48px;">
                    <h4 style="font-weight:700;margin-bottom:20px;">Trusted by Leading Brands</h4>
                    <div class="partners-strip">
                        <div class="partner-logo">TechVentures</div>
                        <div class="partner-logo">DataFlow</div>
                        <div class="partner-logo">LaunchPad</div>
                        <div class="partner-logo">NovaCorp</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ============ FOOTER ============ -->
    <footer>
        <div class="footer-grid">
            <div class="footer-brand">
                <a class="logo" onclick="showPage('home')">
                    <div class="logo-mark"><svg viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5" />
                        </svg></div>
                    Algo<span class="accent">ace</span>
                </a>
                <p>We design and build digital products that transform businesses and delight users. Your vision, our expertise.
                </p>
                <div class="footer-social">
                    <a title="Twitter">𝕏</a>
                    <a title="LinkedIn">in</a>
                    <a title="GitHub">⌨</a>
                    <a title="Dribbble">◎</a>
                </div>
            </div>
            <div class="footer-col">
                <h4>Services</h4>
                <a onclick="showPage('service-detail','web')">Web Development</a>
                <a onclick="showPage('service-detail','ai')">AI & Machine Learning</a>
                <a onclick="showPage('service-detail','mobile')">Mobile Apps</a>
                <a>Cloud & DevOps</a>
                <a>UI/UX Design</a>
            </div>
            <div class="footer-col">
                <h4>Company</h4>
                <a onclick="showPage('about')">About Us</a>
                <a onclick="showPage('blog')">Blog</a>
                <a>Careers</a>
                <a>Case Studies</a>
                <a onclick="showPage('contact')">Contact</a>
            </div>
            <div class="footer-col">
                <h4>Legal</h4>
                <a>Privacy Policy</a>
                <a>Terms of Service</a>
                <a>Cookie Policy</a>
                <a>Sitemap</a>
            </div>
        </div>
        <div class="footer-bottom">
            <p>© 2025 <span>Algoace</span>. All rights reserved. Built with ❤️ and ☕</p>
            <p style="color:var(--text2);font-size:0.82rem;">Web · AI · Mobile · The Future</p>
        </div>
    </footer>
    <?php wp_footer(); ?>
</body>

</html>