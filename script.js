    const cursor = document.getElementById('cursor');
const cursorRing = document.getElementById('cursorRing');
let mouseX = 0,
    mouseY = 0,
    ringX = 0,
    ringY = 0;
document.addEventListener('mousemove', e => {
    mouseX = e.clientX;
    mouseY = e.clientY;
    cursor.style.left = mouseX + 'px';
    cursor.style.top = mouseY + 'px';
});

function animateRing() {
    ringX += (mouseX - ringX) * 0.12;
    ringY += (mouseY - ringY) * 0.12;
    cursorRing.style.left = ringX + 'px';
    cursorRing.style.top = ringY + 'px';
    requestAnimationFrame(animateRing);
}
animateRing();
document.querySelectorAll('a, button, .service-card, .blog-feature-card, .blog-small-card, .faq-q').forEach(el => {
    el.addEventListener('mouseenter', () => {
        cursor.style.width = '20px';
        cursor.style.height = '20px';
        cursor.style.background = 'rgba(0,245,212,0.5)';
        cursorRing.style.width = '50px';
        cursorRing.style.height = '50px';
    });
    el.addEventListener('mouseleave', () => {
        cursor.style.width = '12px';
        cursor.style.height = '12px';
        cursor.style.background = 'var(--accent)';
        cursorRing.style.width = '36px';
        cursorRing.style.height = '36px';
    });
});

// ============ HEADER ============
window.addEventListener('scroll', () => {
    document.getElementById('header').classList.toggle('scrolled', window.scrollY > 40);
    document.getElementById('scrollTop').classList.toggle('visible', window.scrollY > 400);
});
document.getElementById('scrollTop').onclick = () => window.scrollTo({
    top: 0,
    behavior: 'smooth'
});
document.getElementById('hamburger').onclick = () => {
    const m = document.getElementById('mobileNav');
    m.style.display = m.style.display === 'flex' ? 'none' : 'flex';
};

function closeMobile() {
    document.getElementById('mobileNav').style.display = 'none';
}

// ============ PAGE ROUTING ============
// Helper to get base path (supports subdirectory installs, e.g. /algoace/)
function getBasePath() {
    const path = window.location.pathname;
    const parts = path.split('/');
    if (parts[parts.length - 1] !== '') {
        parts.pop();
    }
    let base = parts.join('/');
    if (!base.endsWith('/')) base += '/';
    return base;
}

// Map internal page state to a "pretty" path
function getPathForState(pageId, extra) {
    const base = getBasePath();
    let slug = '';
    switch (pageId) {
        case 'home':
            slug = '';
            break;
        case 'about':
        case 'services':
        case 'blog':
        case 'contact':
            slug = pageId;
            break;
        case 'service-detail':
            slug = 'services' + (extra ? '/' + extra : '');
            break;
        case 'blog-detail':
            slug = 'blog' + (extra ? '/' + extra : '');
            break;
        default:
            slug = '';
    }
    return base + slug;
}

function showPage(pageId, extra, skipPush) {
    document.querySelectorAll('.page').forEach(p => p.classList.remove('active'));
    const target = document.getElementById('page-' + pageId);
    if (target) {
        target.classList.add('active');
    }
    document.querySelectorAll('nav a, .mobile-nav a').forEach(a => {
        a.classList.remove('active');
        if (a.dataset.page === pageId) a.classList.add('active');
    });
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });

    if (pageId === 'service-detail' && extra) loadServiceDetail(extra);
    if (pageId === 'blog-detail' && extra) loadBlogDetail(extra);

    setTimeout(initReveal, 100);
    setTimeout(initCounters, 200);
    setTimeout(initSkillBars, 300);

    // Update browser URL using History API for pretty slugs (e.g. /about instead of /#about)
    if (!skipPush && window.history && window.history.pushState) {
        const newPath = getPathForState(pageId, extra);
        const current = window.location.pathname;
        if (current !== newPath) {
            window.history.pushState({ pageId, extra }, '', newPath);
        }
    }
}

// Handle back/forward navigation via path (pretty URLs)
function handlePathNavigation() {
    const base = getBasePath();
    let rel = window.location.pathname;
    if (rel.startsWith(base)) {
        rel = rel.slice(base.length);
    }
    rel = rel.replace(/^\/+|\/+$/g, '');

    if (!rel) {
        showPage('home', null, true);
        return;
    }

    const parts = rel.split('/');
    const slug = parts[0] || '';
    const extra = parts[1] || null;

    let pageId = 'home';
    switch (slug) {
        case 'about':
            pageId = 'about';
            break;
        case 'services':
            pageId = extra ? 'service-detail' : 'services';
            break;
        case 'blog':
            pageId = extra ? 'blog-detail' : 'blog';
            break;
        case 'contact':
            pageId = 'contact';
            break;
        default:
            pageId = 'home';
    }

    showPage(pageId, extra, true);
}

// ============ REVEAL ON SCROLL ============
function initReveal() {
    const revealEls = document.querySelectorAll('.reveal, .reveal-left, .reveal-right');
    const obs = new IntersectionObserver((entries) => {
        entries.forEach(e => {
            if (e.isIntersecting) {
                e.target.classList.add('visible');
                obs.unobserve(e.target);
            }
        });
    }, {
        threshold: 0.15
    });
    revealEls.forEach(el => {
        el.classList.remove('visible');
        obs.observe(el);
    });
}

// ============ COUNTERS ============
function initCounters() {
    document.querySelectorAll('.counter').forEach(el => {
        if (el.dataset.animated) return;
        const target = +el.dataset.target;
        let start = 0;
        const dur = 2000;
        const startTime = performance.now();

        function update(now) {
            const elapsed = now - startTime;
            const progress = Math.min(elapsed / dur, 1);
            const ease = 1 - Math.pow(1 - progress, 3);
            el.textContent = Math.floor(ease * target);
            if (progress < 1) requestAnimationFrame(update);
            else el.textContent = target;
        }
        requestAnimationFrame(update);
        el.dataset.animated = '1';
    });
}

// ============ SKILL BARS ============
function initSkillBars() {
    document.querySelectorAll('.skill-bar-fill').forEach(bar => {
        setTimeout(() => {
            bar.style.width = bar.dataset.width + '%';
        }, 200);
    });
}

// ============ FAQ ============
function toggleFaq(el) {
    const item = el.parentElement;
    const wasOpen = item.classList.contains('open');
    document.querySelectorAll('.faq-item').forEach(i => i.classList.remove('open'));
    if (!wasOpen) item.classList.add('open');
}

// ============ FORM ============
function submitForm() {
    document.getElementById('contactForm').style.display = 'none';
    document.getElementById('formSuccess').style.display = 'block';
}
const serviceData = {
    web: {
        emoji: '🌐',
        tag: 'Web Development',
        title: 'World-Class Web Development',
        desc: 'We craft high-performance, visually stunning web applications that convert visitors into customers and scale effortlessly as your business grows.',
        features: [{
            icon: '⚡',
            title: 'Lightning Performance',
            desc: 'Sub-1s load times with SSR, ISR, and edge computing.'
        },
        {
            icon: '📱',
            title: 'Mobile-First Design',
            desc: 'Pixel-perfect across every screen size and device.'
        },
        {
            icon: '🔐',
            title: 'Enterprise Security',
            desc: 'OWASP compliance, penetration testing, and SOC 2 ready.'
        },
        {
            icon: '🔌',
            title: 'API Integration',
            desc: 'RESTful and GraphQL APIs connecting any third-party service.'
        },
        {
            icon: '📊',
            title: 'Analytics Built-in',
            desc: 'Real-time dashboards and conversion tracking from day one.'
        },
        {
            icon: '♿',
            title: 'Accessible',
            desc: 'WCAG 2.1 AA compliance ensuring everyone can use your app.'
        },
        ],
        approach: `<p>Our web development process starts with deep discovery — we understand your business goals, target users, and technical constraints before writing a single line of code.</p><p>We follow a component-driven architecture that makes your codebase maintainable and your team productive. Every project gets CI/CD pipelines, comprehensive testing, and documentation as standard.</p>`,
        tech: ['React', 'Next.js', 'TypeScript', 'Node.js', 'PostgreSQL', 'Redis', 'AWS', 'Vercel', 'Tailwind CSS', 'GraphQL'],
        sidebar: [{
            label: 'Timeline',
            val: '4–16 weeks'
        },
        {
            label: 'Team Size',
            val: '3–6 people'
        },
        {
            label: 'Starting From',
            val: '$5,000'
        },
        {
            label: 'Revisions',
            val: 'Unlimited'
        },
        {
            label: 'Support',
            val: '3 months'
        },
        {
            label: 'Hosting',
            val: 'Included'
        },
        ]
    },
    ai: {
        emoji: '🤖',
        tag: 'AI & Machine Learning',
        title: 'AI Solutions That Actually Work',
        desc: 'We build intelligent systems that learn, adapt, and deliver measurable ROI — not AI for the sake of AI, but AI that solves real business problems.',
        features: [{
            icon: '🧠',
            title: 'Custom LLM Apps',
            desc: 'RAG systems, fine-tuned models, and agent frameworks.'
        },
        {
            icon: '👁️',
            title: 'Computer Vision',
            desc: 'Object detection, image classification, and video analysis.'
        },
        {
            icon: '💬',
            title: 'NLP & Chatbots',
            desc: 'Context-aware assistants that understand your domain.'
        },
        {
            icon: '📈',
            title: 'Predictive Analytics',
            desc: 'ML models that forecast trends and customer behavior.'
        },
        {
            icon: '🔄',
            title: 'Automation',
            desc: 'Intelligent workflows that eliminate repetitive tasks.'
        },
        {
            icon: '🛡️',
            title: 'AI Safety',
            desc: 'Robust guardrails, bias testing, and responsible AI practices.'
        },
        ],
        approach: `<p>We begin every AI project with a feasibility assessment — identifying which problems AI can genuinely solve better than traditional software, and which it cannot.</p><p>Our ML engineers evaluate the best model architecture (fine-tuned LLM, classical ML, or hybrid), build evaluation frameworks to measure accuracy, and deploy with robust monitoring to catch model drift in production.</p>`,
        tech: ['Python', 'TensorFlow', 'PyTorch', 'OpenAI API', 'LangChain', 'Hugging Face', 'FastAPI', 'Vector DBs', 'MLflow', 'Kubernetes'],
        sidebar: [{
            label: 'Timeline',
            val: '8–24 weeks'
        },
        {
            label: 'Team Size',
            val: '4–8 people'
        },
        {
            label: 'Starting From',
            val: '$15,000'
        },
        {
            label: 'Model Training',
            val: 'Included'
        },
        {
            label: 'Support',
            val: '6 months'
        },
        {
            label: 'Data Privacy',
            val: 'Enterprise-grade'
        },
        ]
    },
    mobile: {
        emoji: '📱',
        tag: 'Mobile App Development',
        title: 'Mobile Apps Users Love',
        desc: 'Beautiful, fast, and intuitive mobile applications for iOS and Android that keep users coming back and drive real business results.',
        features: [{
            icon: '🎨',
            title: 'Stunning UI',
            desc: 'Native-feel interfaces that win design awards.'
        },
        {
            icon: '⚡',
            title: '60fps Performance',
            desc: 'Buttery smooth animations and instant interactions.'
        },
        {
            icon: '🔔',
            title: 'Push Notifications',
            desc: 'Smart, personalized engagement that boosts retention.'
        },
        {
            icon: '📴',
            title: 'Offline Mode',
            desc: 'Full functionality even without an internet connection.'
        },
        {
            icon: '🔒',
            title: 'Biometric Auth',
            desc: 'Face ID, Touch ID, and device security integration.'
        },
        {
            icon: '🛒',
            title: 'In-App Purchases',
            desc: 'Seamless payment flows with Stripe and App Store billing.'
        },
        ],
        approach: `<p>We build for both platforms from day one — using React Native or Flutter for most projects (95% code sharing) or native Swift/Kotlin for performance-critical applications.</p><p>Our mobile team follows App Store and Play Store guidelines from the start, ensuring smooth review processes. We also set up analytics, crash reporting, and A/B testing infrastructure during development.</p>`,
        tech: ['React Native', 'Flutter', 'Swift', 'Kotlin', 'Firebase', 'Expo', 'App Center', 'Stripe', 'RevenueCat', 'Amplitude'],
        sidebar: [{
            label: 'Timeline',
            val: '8–20 weeks'
        },
        {
            label: 'Platforms',
            val: 'iOS & Android'
        },
        {
            label: 'Starting From',
            val: '$10,000'
        },
        {
            label: 'App Store Sub.',
            val: 'Managed'
        },
        {
            label: 'Support',
            val: '3 months'
        },
        {
            label: 'Analytics',
            val: 'Included'
        },
        ]
    }
};

function loadServiceDetail(key) {
    const d = serviceData[key] || serviceData.web;
    document.getElementById('sd-emoji').textContent = d.emoji;
    document.getElementById('sd-tag').textContent = d.tag;
    document.getElementById('sd-title').textContent = d.title;
    document.getElementById('sd-desc').textContent = d.desc;
    document.getElementById('sd-features').innerHTML = d.features.map(f => `
    <div class="value-card reveal">
      <div class="value-icon">${f.icon}</div>
      <h4>${f.title}</h4>
      <p>${f.desc}</p>
    </div>
  `).join('');
    document.getElementById('sd-approach').innerHTML = d.approach;
    document.getElementById('sd-tech').innerHTML = d.tech.map(t => `<span class="tech-tag">${t}</span>`).join('');
    document.getElementById('sd-sidebar').innerHTML = d.sidebar.map(s => `
    <div class="sidebar-item"><span>${s.label}</span><span>${s.val}</span></div>
  `).join('');
}

// ============ BLOG DATA ============
const blogData = {
    'ai-future': {
        tag: 'AI & ML',
        emoji: '🤖',
        date: 'March 15, 2025',
        read: '8 min read',
        title: 'The Future of AI in Enterprise Software Development',
        intro: 'How large language models and agentic AI are fundamentally changing how software gets built, tested, and deployed at enterprise scale.',
        body: `
      <h2>The Paradigm Shift Is Already Here</h2>
      <p>The question is no longer whether AI will change software development — it already has. The question is how deeply and how quickly organizations will adapt their engineering processes to harness this transformation.</p>
      <p>In 2024 alone, Algoace's engineering teams reported a 40% reduction in time spent on boilerplate code, 60% faster debugging cycles, and significantly improved code documentation quality — all attributable to AI-assisted development workflows.</p>
      <div class="callout">"The engineers who embrace AI tools don't become less valuable — they become dramatically more productive. We're seeing 10x output from the same headcount." — Alex Zhang, Algoace CEO</div>
      <h2>Agentic AI: Beyond Autocomplete</h2>
      <p>The early wave of AI developer tools — GitHub Copilot, Tabnine, and others — focused on autocomplete and small code suggestions. The next wave is far more ambitious: agentic systems that can plan, execute, and debug multi-step coding tasks with minimal human input.</p>
      <p>We've already deployed agentic AI systems at several enterprise clients that autonomously handle routine tasks: writing unit tests for new code, updating dependencies, generating documentation, and even opening pull requests for minor bug fixes.</p>
      <h3>Key Agentic Capabilities in 2025</h3>
      <ul>
        <li>Multi-file code generation and refactoring</li>
        <li>Autonomous debugging with real-time error analysis</li>
        <li>Automated test writing and maintenance</li>
        <li>CI/CD pipeline optimization</li>
        <li>Intelligent code review and security scanning</li>
      </ul>
      <h2>The Organizational Challenge</h2>
      <p>Technology is the easy part. The harder challenge is organizational: how do you integrate AI tools into existing engineering workflows, ensure code quality, manage IP and data privacy concerns, and upskill a workforce accustomed to traditional development?</p>
      <p>Organizations that will win are those treating AI adoption as a cultural transformation, not just a tool procurement exercise. This means training, governance frameworks, and leadership buy-in from day one.</p>
      <h2>What This Means for Your Business</h2>
      <p>If you're not already piloting AI-assisted development, you're falling behind. We recommend starting with a focused experiment: pick one team, one product area, and measure concrete productivity metrics over 90 days. The results will speak for themselves.</p>
    `
    },
    'react-2025': {
        tag: 'Web Dev',
        emoji: '⚛️',
        date: 'March 10, 2025',
        read: '6 min read',
        title: 'React Server Components: A 2025 Deep Dive',
        intro: 'Server Components have matured dramatically. Here\'s everything you need to know to use them effectively in production applications today.',
        body: `
      <h2>Why Server Components Matter Now</h2>
      <p>React Server Components (RSC) started as an experimental feature and have matured into a production-ready paradigm that fundamentally changes how we think about rendering boundaries in React applications.</p>
      <p>After shipping several large RSC-based applications, our team at Algoace has developed strong opinions on when to use them, common pitfalls, and patterns that work in production.</p>
      <h2>The Mental Model</h2>
      <p>The key insight with RSC is thinking about your component tree as having two zones: a server zone where components run only on the server (no JS sent to client), and a client zone where components hydrate and run in the browser.</p>
      <div class="callout">Server Components are not Server-Side Rendering. SSR renders React to HTML once on the server. RSC creates a persistent server-side execution environment for components.</div>
      <h3>When to Use Server Components</h3>
      <ul>
        <li>Data fetching directly from databases or APIs</li>
        <li>Accessing server-side resources (file system, secrets)</li>
        <li>Large dependencies that don't need client interactivity</li>
        <li>Static or infrequently updated content</li>
      </ul>
      <h2>Performance Numbers from Production</h2>
      <p>Across our recent projects, converting appropriate components to server components resulted in 35–60% reduction in JavaScript bundle size and 20–40% improvement in Time to Interactive. These aren't theoretical numbers — they're from real production apps serving real users.</p>
    `
    },
    'mobile-trends': {
        tag: 'Mobile',
        emoji: '📱',
        date: 'March 5, 2025',
        read: '5 min read',
        title: '5 Mobile App Trends Dominating 2025',
        intro: 'The mobile landscape shifts fast. These five trends are shaping what users expect and what teams need to build in 2025.',
        body: `
      <h2>1. AI-Native User Experiences</h2>
      <p>The breakout apps of 2025 don't bolt AI onto existing features — they're built AI-first. From adaptive interfaces that personalize to user behavior in real-time, to on-device ML models that work offline, AI is becoming infrastructure.</p>
      <h2>2. App Clips and Instant Apps</h2>
      <p>The friction of downloading an app before experiencing it is increasingly being removed. App Clips (iOS) and Instant Apps (Android) let users access lightweight versions without installation — dramatically increasing conversion rates at the top of the funnel.</p>
      <div class="callout">Apps with App Clip integration see 34% higher conversion from ad to install compared to traditional deep links.</div>
      <h2>3. Cross-Platform is Now Table Stakes</h2>
      <p>The React Native vs Flutter debate has largely settled in most organizations' favor of cross-platform first, native when necessary. The tooling, performance, and component libraries have matured to the point where native development is the exception, not the rule.</p>
      <h2>4. Spatial Computing Readiness</h2>
      <p>With Apple Vision Pro maturing and spatial computing becoming real, forward-thinking teams are designing experiences that will translate to 3D environments. This doesn't mean building visionOS apps today — it means thinking spatially in your design language.</p>
      <h2>5. Edge-First Architecture</h2>
      <p>Pushing computation and data closer to users via edge computing is transforming mobile app performance. Apps that leverage edge functions for personalization and real-time features are winning on engagement metrics.</p>
    `
    },
    'nextjs-performance': {
        tag: 'Performance',
        emoji: '⚡',
        date: 'February 28, 2025',
        read: '7 min read',
        title: 'Optimizing Next.js for Core Web Vitals',
        intro: 'A practical guide to achieving perfect Lighthouse scores on production Next.js applications — with real code examples from our client projects.',
        body: `
      <h2>Why Core Web Vitals Still Matter</h2>
      <p>Google's Core Web Vitals directly influence search rankings, and they correlate strongly with real user experience and conversion rates. A 100ms improvement in page load time has been shown to increase conversion rates by 8% in e-commerce contexts.</p>
      <h2>LCP: Largest Contentful Paint</h2>
      <p>LCP is usually the hardest metric to nail. The most impactful optimizations target your hero image or video — the element that's typically the LCP candidate. Using next/image with priority prop, sizing correctly, and serving from a CDN with good geolocation coverage.</p>
      <h3>Quick Wins for LCP</h3>
      <ul>
        <li>Use &lt;Image priority&gt; for above-the-fold images</li>
        <li>Set explicit width and height attributes</li>
        <li>Preconnect to your image CDN domain</li>
        <li>Use AVIF format with WebP fallback</li>
      </ul>
      <h2>CLS: Cumulative Layout Shift</h2>
      <p>Layout shift is the invisible tax on user experience. Reserve space for dynamic content, use skeleton screens instead of spinners, and ensure ads and embeds have dimensions specified before they load.</p>
      <h2>INP: Interaction to Next Paint</h2>
      <p>INP replaced FID as a Core Web Vital in 2024, measuring the latency of all interactions during a page visit. Optimizing for INP means keeping JavaScript off the main thread, using React transitions for expensive state updates, and debouncing user inputs appropriately.</p>
    `
    },
    'llm-apps': {
        tag: 'AI & ML',
        emoji: '🧠',
        date: 'February 22, 2025',
        read: '9 min read',
        title: 'Building Production LLM Apps That Don\'t Fail',
        intro: 'Lessons learned from shipping AI-powered applications to millions of users across multiple enterprise deployments.',
        body: `
      <h2>The Gap Between Demo and Production</h2>
      <p>Building an impressive LLM demo takes an afternoon. Building a production LLM application that handles real users, edge cases, adversarial inputs, hallucinations, latency spikes, and cost at scale is an entirely different challenge.</p>
      <p>Over the past 18 months, Algoace has shipped six major LLM-powered features to production. Here's what we learned — often the hard way.</p>
      <h2>Lesson 1: Evals Before You Ship</h2>
      <p>You cannot improve what you don't measure. Before writing the first prompt, define your evaluation criteria and build automated eval pipelines. What does "good" look like for your use case? Create a golden dataset of 50–200 examples and run every prompt change against it.</p>
      <div class="callout">Teams that invest in evals early ship 3x faster with significantly fewer production incidents than teams that test manually.</div>
      <h2>Lesson 2: Prompt Management is Engineering</h2>
      <p>Prompts are code. They should be version-controlled, reviewed, tested, and deployed with the same rigor as application code. Use a prompt management system and never let prompts live in environment variables or hardcoded strings.</p>
      <h2>Lesson 3: Latency and Cost Are Your Second Product</h2>
      <p>An LLM feature that works perfectly but costs $0.50 per user interaction or takes 8 seconds to respond is not production-ready. Design for both P95 latency and cost per query from day one. Caching, streaming, and model selection are engineering decisions, not afterthoughts.</p>
    `
    },
    'design-systems': {
        tag: 'Design',
        emoji: '🎨',
        date: 'February 15, 2025',
        read: '6 min read',
        title: 'Building a Scalable Design System from Scratch',
        intro: 'The complete guide to creating a design system that grows with your product and keeps teams aligned at scale.',
        body: `
      <h2>Why Most Design Systems Fail</h2>
      <p>Building a design system is easy. Building one that teams actually adopt, that stays up to date, and that genuinely speeds up product development is hard. Most fail not because of poor design decisions, but because of poor adoption strategies.</p>
      <h2>Start with Tokens, Not Components</h2>
      <p>Design tokens are the foundation everything else is built on — colors, spacing, typography, shadow, motion. Get these right first. Your component library is only as good as the token system beneath it.</p>
      <h3>Token Hierarchy</h3>
      <ul>
        <li>Primitive tokens (raw values: blue-500, spacing-4)</li>
        <li>Semantic tokens (meaning: color-primary, spacing-component)</li>
        <li>Component tokens (specific: button-background, input-border)</li>
      </ul>
      <h2>The Component Checklist</h2>
      <p>Every component in a mature design system needs: design documentation, Storybook stories for all variants, accessibility testing, unit tests, changelog, and a named owner. Missing any of these is how systems decay.</p>
      <div class="callout">Design systems are products, not projects. They need roadmaps, versioning, and dedicated resources — not just a team sprint once a quarter.</div>
      <h2>Making It Stick: Adoption Strategies</h2>
      <p>The secret to adoption is making the design system the path of least resistance. Auto-import components, provide copy-paste code snippets, run office hours, and track usage metrics to identify gaps in your library.</p>
    `
    }
};

function loadBlogDetail(key) {
    const d = blogData[key] || blogData['ai-future'];
    document.getElementById('bd-meta').innerHTML = `<span class="tag teal">${d.tag}</span><span class="dot" style="width:3px;height:3px;background:var(--text2);border-radius:50%;display:inline-block;"></span><span>${d.date}</span><span class="dot" style="width:3px;height:3px;background:var(--text2);border-radius:50%;display:inline-block;"></span><span>${d.read}</span>`;
    document.getElementById('bd-title').textContent = d.title;
    document.getElementById('bd-intro').textContent = d.intro;
    document.getElementById('bd-body').innerHTML = d.body;
}

// ============ INIT ============
window.addEventListener('load', () => {
    initReveal();
    initCounters();
    // Navigate based on current path (or default to home)
    handlePathNavigation();
    // run initial reveal after a moment
    setTimeout(() => {
        document.querySelectorAll('#page-home .reveal, #page-home .reveal-left, #page-home .reveal-right').forEach(el => {
            const rect = el.getBoundingClientRect();
            if (rect.top < window.innerHeight) el.classList.add('visible');
        });
    }, 300);
});

// React to back/forward buttons
window.addEventListener('popstate', handlePathNavigation);

// Add intersection observer for scroll-based reveals
const globalObserver = new IntersectionObserver((entries) => {
    entries.forEach(e => {
        if (e.isIntersecting) {
            e.target.classList.add('visible');
            globalObserver.unobserve(e.target);
        }
    });
    // Animate skill bars when visible
    document.querySelectorAll('.skill-bar-fill').forEach(bar => {
        const rect = bar.getBoundingClientRect();
        if (rect.top < window.innerHeight && bar.style.width === '') {
            setTimeout(() => {
                bar.style.width = bar.dataset.width + '%';
            }, 300);
        }
    });
}, {
    threshold: 0.1
});

function setupObserver() {
    document.querySelectorAll('.reveal, .reveal-left, .reveal-right').forEach(el => globalObserver.observe(el));
}
setupObserver();

// Counter on scroll
const counterObs = new IntersectionObserver((entries) => {
    entries.forEach(e => {
        if (e.isIntersecting && !e.target.dataset.animated) initCounters();
    });
}, {
    threshold: 0.5
});
document.querySelectorAll('.counter').forEach(el => counterObs.observe(el));