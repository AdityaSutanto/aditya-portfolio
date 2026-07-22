@extends('layouts.app')

@section('title', 'Aditya Portfolio')

@section('content')

<section class="hero-section">

    <div class="container">

        <div class="row align-items-center min-vh-100">

            <div class="col-lg-7">

                <span class="hero-badge">
                    👋 Hello, I'm
                </span>

                <h1 class="hero-title">
                    Aditya Sutanto
                </h1>

                <h2 id="typing-text" class="hero-subtitle">
                    Information Systems Student
                </h2>

                <p class="hero-description">

                    Saya adalah mahasiswa Sistem Informasi yang memiliki minat
                    dalam pengembangan website, UI/UX Design, dan teknologi
                    modern menggunakan Laravel, PHP, JavaScript, dan MySQL.

                </p>

                <div class="hero-buttons">

                    <a href="https://github.com/AdityaSutanto"
                       target="_blank"
                       class="btn btn-primary">

                        GitHub

                    </a>

                    <a href="mailto:aditsusanto2002@gmail.com"
                       class="btn btn-outline-light">

                        Contact Me

                    </a>

                </div>

                <div class="hero-stats">

                    <div>
                        <h3>5+</h3>
                        <p>Projects</p>
                    </div>

                    <div>
                        <h3>10+</h3>
                        <p>Skills</p>
                    </div>

                    <div>
                        <h3>2024</h3>
                        <p>Started</p>
                    </div>

                </div>

            </div>

            <div class="col-lg-5 text-center">

                <div class="profile-placeholder">

                    AS

                </div>

            </div>

        </div>

    </div>

</section>

<!-- ABOUT -->

<section id="about" class="section-padding">

    <div class="container">

        <div class="section-header text-center">

            <h2>About Me</h2>

            <p>
                Mengenal lebih dekat tentang saya
            </p>

        </div>

        <div class="row justify-content-center">

            <div class="col-lg-8">

                <div class="about-card" data-aos="fade-up">

                    <p>
                        Saya adalah mahasiswa Sistem Informasi yang memiliki
                        minat dalam pengembangan website, UI/UX Design,
                        database, dan teknologi modern.

                        Saya terbiasa menggunakan Laravel, PHP, JavaScript,
                        Bootstrap, dan MySQL untuk membangun aplikasi yang
                        fungsional dan mudah digunakan.
                    </p>

                    <div class="about-info">

                        <div>
                            <strong>Pendidikan</strong>
                            <p>Sistem Informasi</p>
                        </div>

                        <div>
                            <strong>Semester</strong>
                            <p>4</p>
                        </div>

                        <div>
                            <strong>Fokus</strong>
                            <p>Web Development</p>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- SKILLS -->

<section id="skills" class="section-padding">

    <div class="container">

        <div class="section-header text-center">

            <h2>Skills</h2>

            <p>
                Teknologi yang saya gunakan
            </p>

        </div>

        <div class="row g-4">

            @php
            $skills = [
                [
                    'name' => 'Laravel',
                    'image' => 'images/skills/laravel.png'
                ],
                [
                    'name' => 'PHP',
                    'image' => 'images/skills/php.png'
                ],
                [
                    'name' => 'JavaScript',
                    'image' => 'images/skills/javascript.png'
                ],
                [
                    'name' => 'Bootstrap',
                    'image' => 'images/skills/bootstrap.png'
                ],
                [
                    'name' => 'MySQL',
                    'image' => 'images/skills/mysql.png'
                ],
                [
                    'name' => 'GitHub',
                    'image' => 'images/skills/github.png'
                ],
                [
                    'name' => 'Figma',
                    'image' => 'images/skills/figma.png'
                ],
                [
                    'name' => 'Node.js',
                    'image' => 'images/skills/nodejs.png'
                ]
            ];
            @endphp

            @foreach($skills as $skill)

            <div class="col-md-3 col-6">

                <div class="skill-card" data-aos="zoom-in">

                    <img
                        src="{{ asset($skill['image']) }}"
                        alt="{{ $skill['name'] }}"
                        class="skill-logo"
                    >

                    <h6>
                        {{ $skill['name'] }}
                    </h6>

                </div>

            </div>

            @endforeach

        </div>

    </div>

</section>


<!-- PROJECTS -->

<section id="projects" class="section-padding">

    <div class="container">

        <div class="section-header text-center">

            <h2>Projects</h2>

            <p>
                Beberapa project yang pernah saya kerjakan
            </p>

        </div>

        <div class="row g-4">

            @foreach($projects as $project)

            <div class="col-lg-4">

                <div class="project-card" data-aos="fade-up">

                    <img
                        src="{{ asset($project->image) }}"
                        alt="{{ $project->title }}"
                        class="project-image"
                    >

                    <div class="project-body">

                        <h4>
                            {{ $project->title}}
                        </h4>

                        <p>
                            {{ $project->description }}
                        </p>

                        <div class="project-tech">

                            @foreach(explode(',', $project->tech) as $tech)
                                <span class="tech-badge">
                                    {{ $tech }}
                                </span>

                            @endforeach

                        </div>

                        <div class="project-buttons">

                            <a
                                href="{{ $project->github}}"
                                target="_blank"
                                class="btn btn-primary btn-sm"
                            >
                                GitHub
                            </a>

                        </div>

                    </div>

                </div>

            </div>

            @endforeach

        </div>
    </div>

</section>

<!-- EDUCATION & EXPERIENCE -->

<section id="journey" class="section-padding">

    <div class="container">

        <div class="section-header text-center">

            <h2>My Journey</h2>

            <p>
                Perjalanan pendidikan dan pengalaman saya
            </p>

        </div>

        <div class="timeline">

            <div class="timeline-item" data-aos="fade-right">

                <div class="timeline-content">

                    <span class="timeline-year">2024</span>

                    <h4>Memulai Perkuliahan</h4>

                    <p>
                        Memulai perjalanan sebagai mahasiswa Sistem Informasi dan mempelajari dasar-dasar pemrograman serta teknologi informasi.
                    </p>

                </div>

            </div>

            <div class="timeline-item" data-aos="fade-left">

                <div class="timeline-content">

                    <span class="timeline-year">2025</span>

                    <h4>Belajar Web Development</h4>

                    <p>
                        Mendalami Laravel, PHP, JavaScript, Bootstrap, dan MySQL untuk membangun aplikasi web modern.
                    </p>

                </div>

            </div>

            <div class="timeline-item" data-aos="fade-right">

                <div class="timeline-content">

                    <span class="timeline-year">2026</span>

                    <h4>Membangun Project Nyata</h4>

                    <p>
                        Mengembangkan berbagai project seperti GadgetHub, Dashboard Admin, UI/UX Design, dan Portfolio Website.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>
<!-- CONTACT -->

<section id="contact" class="section-padding">

    <div class="container">

        <div class="section-header text-center">

            <h2>Get In Touch</h2>

            <p>
                Jangan ragu untuk menghubungi saya
            </p>

        </div>

        <div class="row g-4 justify-content-center">

            <div class="col-md-4">

                <div class="contact-card">

                    <i class="fa-solid fa-envelope"></i>

                    <h5>Email</h5>

                    <p>
                        aditsusanto2002@gmail.com
                    </p>

                    <a href="mailto:aditsusanto2002@gmail.com"
                       class="btn btn-primary btn-sm">

                        Send Email

                    </a>

                </div>

            </div>

            <div class="col-md-4">

                <div class="contact-card">

                    <i class="fa-brands fa-github"></i>

                    <h5>GitHub</h5>

                    <p>
                        github.com/AdityaSutanto
                    </p>

                    <a href="https://github.com/AdityaSutanto"
                       target="_blank"
                       class="btn btn-primary btn-sm">

                        Visit GitHub

                    </a>

                </div>

            </div>

            <div class="col-md-4">

                <div class="contact-card">

                    <i class="fa-solid fa-location-dot"></i>

                    <h5>Status</h5>

                    <p>
                        Information Systems Student in Ukrida University
                    </p>

                    <span class="badge bg-success">
                        Available for Projects
                    </span>

                </div>

            </div>

            <div class="col-md-4">

                <div class="contact-card">

                    <i class="fa-brands fa-whatsapp"></i>

                    <h5>WhatsApp</h5>

                    <p>
                        0877-7175-8056
                    </p>

                    <a
                        href="https://wa.me/628xxxxxxxxxx"
                        target="_blank"
                        class="btn btn-success btn-sm"
                    >
                        Chat Now
                    </a>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- CERTIFICATES -->

<section id="certificates" class="section-padding">

    <div class="container">

        <div class="section-header text-center">

            <h2>Certificates & Achievements</h2>

            <p>
                Pelatihan, workshop, dan pencapaian yang pernah saya ikuti
            </p>

        </div>

        <div class="row g-4">

            <div class="col-lg-4">

                <div class="certificate-card">

                    <div class="certificate-icon">
                        🏆
                    </div>

                    <h5>Workshop AI</h5>

                    <p>
                        Workshop pemanfaatan Artificial Intelligence untuk produktivitas dan pembelajaran.
                    </p>

                </div>

            </div>

            <div class="col-lg-4">

                <div class="certificate-card">

                    <div class="certificate-icon">
                        🎓
                    </div>

                    <h5>Literasi Digital</h5>

                    <p>
                        Pelatihan mengenai penggunaan teknologi digital secara aman dan efektif.
                    </p>

                </div>

            </div>

            <div class="col-lg-4">

                <div class="certificate-card">

                    <div class="certificate-icon">
                        💻
                    </div>

                    <h5>Web Development</h5>

                    <p>
                        Pengembangan website modern menggunakan Laravel dan teknologi web lainnya.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- GITHUB -->

<section id="github" class="section-padding">

    <div class="container">

        <div class="section-header text-center">

            <h2>GitHub Profile</h2>

            <p>
                Aktivitas dan repository pengembangan saya
            </p>

        </div>

        <div class="row g-4">

            <div class="col-lg-3">

                <div class="github-stat">

                    <h3>10+</h3>
                    <p>Repositories</p>

                </div>

            </div>

            <div class="col-lg-3">

                <div class="github-stat">

                    <h3>5+</h3>
                    <p>Projects</p>

                </div>

            </div>

            <div class="col-lg-3">

                <div class="github-stat">

                    <h3>12+</h3>
                    <p>Technologies</p>

                </div>

            </div>

            <div class="col-lg-3">

                <div class="github-stat">

                    <h3>2024</h3>
                    <p>Started Coding</p>

                </div>

            </div>

        </div>

        <div class="text-center mt-5">

            <a
                href="https://github.com/AdityaSutanto"
                target="_blank"
                class="btn btn-primary btn-lg"
            >
                Visit My GitHub
            </a>

        </div>

    </div>

</section>

<button id="backToTop">

    <i class="fa-solid fa-arrow-up"></i>

</button>

@endsection