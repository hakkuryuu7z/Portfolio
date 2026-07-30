<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $settings['name'] ?? 'Portfolio' }} - {{ $settings['profession'] ?? 'Professional' }}</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;800&family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        :root {
            --accent-color: #00e5ff; /* Cyan-Green */
            --accent-glow: rgba(0, 229, 255, 0.4);
            --bg-gradient: linear-gradient(135deg, #0b0f19 0%, #1a1f33 100%);
            --glass-bg: rgba(255, 255, 255, 0.03);
            --glass-border: rgba(255, 255, 255, 0.08);
        }
        
        body {
            font-family: 'Inter', sans-serif;
            background: var(--bg-gradient);
            background-attachment: fixed;
            color: #e2e8f0;
            overflow-x: hidden;
        }

        section[id] {
            scroll-margin-top: 100px;
        }

        h1, h2, h3, h4, h5, h6, .brand-font {
            font-family: 'Outfit', sans-serif;
        }

        /* Glassmorphism Navbar */
        .navbar-glass {
            background: rgba(11, 15, 25, 0.7);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border-bottom: 1px solid var(--glass-border);
        }

        .navbar-brand {
            font-weight: 800;
            letter-spacing: -0.5px;
            color: #fff !important;
        }

        .nav-link {
            font-weight: 600;
            color: #cbd5e1 !important;
            transition: all 0.3s ease;
        }

        .nav-link:hover {
            color: var(--accent-color) !important;
        }

        /* Hero Section */
        .hero-section {
            min-height: 100vh;
            display: flex;
            align-items: center;
            position: relative;
            padding-top: 80px;
        }

        .hero-text-gradient {
            background: linear-gradient(45deg, #fff, var(--accent-color));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .hero-blob {
            position: absolute;
            top: 50%;
            right: 10%;
            transform: translateY(-50%);
            width: 400px;
            height: 400px;
            background: var(--accent-color);
            border-radius: 50%;
            filter: blur(100px);
            opacity: 0.2;
            z-index: -1;
            animation: pulseBlob 8s infinite alternate;
        }

        @keyframes pulseBlob {
            0% { transform: translateY(-50%) scale(1); opacity: 0.15; }
            100% { transform: translateY(-50%) scale(1.2); opacity: 0.25; }
        }

        .btn-accent {
            background: transparent;
            color: var(--accent-color);
            border: 2px solid var(--accent-color);
            border-radius: 30px;
            padding: 10px 30px;
            font-weight: 600;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .btn-accent:hover {
            background: var(--accent-color);
            color: #0b0f19;
            box-shadow: 0 0 20px var(--accent-glow);
            transform: translateY(-3px);
        }

        /* Sections */
        .section-title {
            font-size: 2.5rem;
            font-weight: 800;
            margin-bottom: 3rem;
            position: relative;
            display: inline-block;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 50%;
            height: 4px;
            background: var(--accent-color);
            border-radius: 2px;
        }

        /* Glass Cards for Projects */
        .glass-card {
            background: var(--glass-bg);
            backdrop-filter: blur(10px);
            border: 1px solid var(--glass-border);
            border-radius: 20px;
            overflow: hidden;
            transition: all 0.4s ease;
        }

        .glass-card:hover {
            transform: translateY(-10px);
            border-color: rgba(0, 229, 255, 0.3);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.4), 0 0 15px var(--accent-glow);
        }

        .card-img-wrapper {
            overflow: hidden;
            height: 220px;
        }

        .card-img-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .glass-card:hover .card-img-wrapper img {
            transform: scale(1.05);
        }

        .card-body {
            padding: 2rem;
        }

        .card-title {
            font-weight: 700;
            font-size: 1.3rem;
            margin-bottom: 1rem;
        }

        .btn-outline-custom {
            color: #fff;
            border: 1px solid rgba(255,255,255,0.2);
            border-radius: 20px;
            padding: 5px 15px;
            font-size: 0.9rem;
            transition: all 0.3s;
        }
        
        .btn-outline-custom:hover {
            background: rgba(255,255,255,0.1);
            color: var(--accent-color);
            border-color: var(--accent-color);
        }

        /* Skills Badges */
        .skill-badge {
            background: var(--glass-bg);
            border: 1px solid var(--glass-border);
            color: #cbd5e1;
            padding: 12px 25px;
            border-radius: 30px;
            font-size: 1rem;
            font-weight: 600;
            display: inline-block;
            margin: 0.5rem;
            transition: all 0.3s ease;
        }

        .skill-badge:hover {
            background: rgba(0, 229, 255, 0.1);
            color: var(--accent-color);
            border-color: var(--accent-color);
            transform: scale(1.05);
        }

        /* Contact Form */
        .form-control {
            background: rgba(0,0,0,0.2);
            border: 1px solid var(--glass-border);
            color: #fff;
            border-radius: 10px;
            padding: 12px 20px;
        }

        .form-control:focus {
            background: rgba(0,0,0,0.3);
            border-color: var(--accent-color);
            box-shadow: 0 0 0 0.25rem var(--accent-glow);
            color: #fff;
        }

        .form-label {
            font-weight: 600;
            color: #cbd5e1;
        }

        footer {
            background: rgba(0,0,0,0.3);
            border-top: 1px solid var(--glass-border);
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-glass fixed-top">
        <div class="container">
            <a class="navbar-brand fs-4" href="#">
                {{ $settings['name'] ?? 'Portfolio' }}<span style="color: var(--accent-color)">.</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav gap-3">
                    <li class="nav-link"><a href="#about" class="nav-link text-decoration-none">About</a></li>
                    <li class="nav-link"><a href="#skills" class="nav-link text-decoration-none">Skills</a></li>
                    <li class="nav-link"><a href="#projects" class="nav-link text-decoration-none">Projects</a></li>
                    <li class="nav-link"><a href="#contact" class="nav-link text-decoration-none">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section" id="hero">
        <div class="hero-blob"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <p class="fs-5 text-uppercase tracking-widest mb-2" style="color: var(--accent-color); font-weight: 600; letter-spacing: 2px;">
                        Hello, I'm
                    </p>
                    <h1 class="display-2 fw-bold mb-3">
                        {{ $settings['name'] ?? 'Your Name' }}
                    </h1>
                    <h2 class="display-5 hero-text-gradient mb-4">
                        {{ $settings['profession'] ?? 'Full Stack Developer' }}
                    </h2>
                    <p class="lead text-secondary mb-5" style="max-width: 600px;">
                        Passionate about building scalable applications and creating beautiful, dynamic user experiences on the web.
                    </p>
                    <div class="d-flex gap-3">
                        <a href="#projects" class="btn btn-accent">View My Work</a>
                        <a href="#contact" class="btn btn-outline-custom" style="padding: 10px 30px; border-radius: 30px;">Contact Me</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="py-5 my-5" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto text-center">
                    <h2 class="section-title text-center mb-5">About Me</h2>
                    <div class="glass-card p-5 text-start fs-5 lh-lg text-secondary">
                        {!! nl2br(e($settings['about_me'] ?? 'I am a passionate developer...')) !!}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section class="py-5 my-5" id="skills">
        <div class="container text-center">
            <h2 class="section-title text-center mb-5">My Skills</h2>
            <div class="d-flex flex-wrap justify-content-center gap-2 max-w-4xl mx-auto">
                @forelse($skills as $skill)
                    <div class="skill-badge">
                        <i class="bi bi-check2-circle me-2" style="color: var(--accent-color)"></i>{{ $skill->name }}
                    </div>
                @empty
                    <p class="text-secondary">No skills listed yet.</p>
                @endforelse
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section class="py-5 my-5" id="projects">
        <div class="container">
            <h2 class="section-title mb-5">Featured Projects</h2>
            <div class="row g-4">
                @forelse($projects as $project)
                <div class="col-md-6 col-lg-4">
                    <div class="glass-card h-100 d-flex flex-column" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#projectModal{{ $project->id }}">
                        <div class="card-img-wrapper">
                            @if($project->image_path)
                                <img src="{{ asset('storage/'.$project->image_path) }}" alt="{{ $project->title }}">
                            @else
                                <div class="w-100 h-100 d-flex align-items-center justify-content-center" style="background: rgba(0,0,0,0.5);">
                                    <i class="bi bi-image text-secondary" style="font-size: 3rem;"></i>
                                </div>
                            @endif
                        </div>
                        <div class="card-body flex-grow-1 d-flex flex-column">
                            <h3 class="card-title">{{ $project->title }}</h3>
                            <p class="card-text text-secondary mb-4 flex-grow-1">
                                {{ Str::limit($project->description, 120) }}
                            </p>
                            <div class="d-flex gap-2 mt-auto" onclick="event.stopPropagation();">
                                @if($project->github_url)
                                    <a href="{{ $project->github_url }}" target="_blank" class="btn btn-outline-custom">
                                        <i class="bi bi-github me-1"></i> Code
                                    </a>
                                @endif
                                @if($project->demo_url)
                                    <a href="{{ $project->demo_url }}" target="_blank" class="btn btn-outline-custom" style="color: var(--accent-color); border-color: var(--accent-color);">
                                        <i class="bi bi-box-arrow-up-right me-1"></i> Demo
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal for {{ $project->title }} -->
                <div class="modal fade" id="projectModal{{ $project->id }}" tabindex="-1" aria-labelledby="projectModalLabel{{ $project->id }}" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content" style="background: rgba(11, 15, 25, 0.95); backdrop-filter: blur(15px); border: 1px solid var(--glass-border); border-radius: 20px; overflow: hidden;">
                            <div class="modal-header border-0 pb-0">
                                <h5 class="modal-title fs-3 fw-bold" id="projectModalLabel{{ $project->id }}">{{ $project->title }}</h5>
                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                                @if($project->image_path)
                                    <img src="{{ asset('storage/'.$project->image_path) }}" alt="{{ $project->title }}" class="img-fluid rounded mb-4" style="width: 100%; max-height: 400px; object-fit: cover;">
                                @endif
                                <div class="text-secondary lh-lg mb-4 text-break">
                                    {!! nl2br(e($project->description)) !!}
                                </div>
                                <div class="d-flex gap-3">
                                    @if($project->github_url)
                                        <a href="{{ $project->github_url }}" target="_blank" class="btn btn-outline-custom">
                                            <i class="bi bi-github me-1"></i> View Code
                                        </a>
                                    @endif
                                    @if($project->demo_url)
                                        <a href="{{ $project->demo_url }}" target="_blank" class="btn btn-accent">
                                            <i class="bi bi-box-arrow-up-right me-1"></i> Live Demo
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                    <div class="col-12 text-center text-secondary py-5">
                        <p>No projects to display right now.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="py-5 my-5" id="contact">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="glass-card p-5">
                        <h2 class="section-title mb-4">Get In Touch</h2>
                        <p class="text-secondary mb-4">Have a project in mind or want to work together? Leave a message below.</p>
                        
                        @if(session('success'))
                            <div class="alert alert-success bg-transparent" style="border-color: var(--accent-color); color: var(--accent-color);">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form action="{{ route('contact.store') }}" method="POST">
                            @csrf
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label">Your Name</label>
                                    <input type="text" name="sender_name" class="form-control" required placeholder="John Doe">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Email Address</label>
                                    <input type="email" name="sender_email" class="form-control" required placeholder="john@example.com">
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Message</label>
                                    <textarea name="message_content" rows="5" class="form-control" required placeholder="How can I help you?"></textarea>
                                </div>
                                <div class="col-12 mt-4">
                                    <button type="submit" class="btn btn-accent w-100">Send Message <i class="bi bi-send ms-2"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="py-4 text-center mt-auto">
        <div class="container">
            <p class="mb-0 text-secondary">&copy; {{ date('Y') }} {{ $settings['name'] ?? 'Portfolio' }}. All rights reserved.</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
