@extends('layouts.main')

@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>

<style>

:root {
    --color-dark: #1F2937; 
    --color-light: #FFFFFF; 
    --color-highlight: #F59E0B; 
    --color-text-dim: #D1D5DB; 
    --color-text-faded: #9CA3AF; 
    --gradient-primary: linear-gradient(90deg, #7B3FE4, #A855F7); 
    --gradient-button: linear-gradient(90deg, #7B3FE4, #A855F7);
}

.hero-section {
    width: 100%;
    background-color: var(--color-dark);
    color: var(--color-light);
    padding-top: 80px;
    padding-bottom: 80px;
}

.hero-content-wrapper {
    max-width: 1152px; 
    margin: 0 auto;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 40px; 
    padding-left: 24px;
    padding-right: 24px;
}
@media (min-width: 768px) {
    .hero-content-wrapper {
        flex-direction: row;
    }
}

.hero-image-area {
    width: 250px;
    height: 300px;
    border-radius: 16px; 
    overflow: hidden;
    border: 2px solid var(--color-highlight);
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2); 
    transition: transform 0.3s, box-shadow 0.3s;
    display: flex;
    justify-content: center;
    align-items: center;
    background: #fff; 
}

.hero-image-area img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.hero-image-area:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 25px rgba(0, 0, 0, 0.25);
}


.hero-text-area {
    flex-grow: 1;
}

.hero-title {
    font-size: 2.25rem; 
    font-weight: 700; 
}

.hero-highlight {
    background: var(--gradient-primary);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    font-weight: 700;
}

.hero-subtitle {
    margin-top: 0.75rem;
    font-size: 1.125rem; 
    color: var(--color-text-dim);
}

.hero-description {
    margin-top: 1rem;
    color: var(--color-text-faded);
    max-width: 512px; 
}


.hero-cta {
    margin-top: 2rem;
    display: flex;
    align-items: center;
    gap: 1rem;
}

.cta-button {
    background: var(--gradient-button);
    color: #fff;
    padding: 0.75rem 1.5rem;
    border-radius: 0.5rem;
    font-weight: 600;
    text-decoration: none;
    transition: all 0.3s;
}

.cta-button:hover {
    background: linear-gradient(90deg, #A855F7, #7B3FE4);
    transform: translateY(-2px);
}

.social-link {
    color: var(--color-text-faded);
    font-size: 1.5rem;
    transition: color 0.3s;
    text-decoration: none;
}
.social-link:hover {
    color: var(--color-highlight);
}


.about-section {
    max-width: 1152px; 
    margin: 0 auto;
    padding-top: 64px;
    padding-bottom: 64px;
    padding-left: 24px;
    padding-right: 24px;
}

.about-title {
    font-size: 1.875rem; 
    font-weight: 700; 
    color: #1F2937; 
    margin-bottom: 1.5rem;
}

.about-paragraph {
    color: #4B5563; 
    line-height: 1.625; 
    font-size: 1.125rem; 
}

.about-paragraph + .about-paragraph {
    margin-top: 1rem;
}

</style>

<section class="hero-section">
    <div class="hero-content-wrapper">
       
        <div class="hero-image-area">
            
            <img src="https://i.pinimg.com/originals/12/18/26/12182689ce57fb249cafb9ac9aad0901.jpg" alt="Sumaya Akter Eva">
        </div>

        <div class="hero-text-area">
            <h1 class="hero-title">Hi, I'm <span class="hero-highlight">Sumaya Akter Eva</span></h1>
           
            <p class="hero-subtitle">
                A Passionate Web Developer | Machine Learning Enthusiast | Tech Explorer
            </p>
           
            <p class="hero-description">
                I specialize in building modern, responsive web applications using Laravel, PHP, JavaScript,
                and backend technologies. I'm also actively working on data science and machine learning projects
                that combine practical innovation with problem-solving.
            </p>

            <div class="hero-cta">
                <a href="/contact" class="cta-button">
                    Contact Me
                </a>
                <a href="https://github.com/SumayaEva" class="social-link" title="GitHub" target="_blank">
                    <i class="fab fa-github"></i> 🔗
                </a>
            </div>
        </div>
    </div>
</section>

<section class="about-section">
    <h2 class="about-title">About Me</h2>

    <p class="about-paragraph">
        I'm Sumaya Akter Eva, a dedicated developer who loves creating impactful solutions through code.
        Over the years, I’ve gained hands-on experience in building real-world applications,
        optimizing workflows, and experimenting with advanced tech like AI, machine learning,
        and full-stack development.
    </p>
    <p class="about-paragraph">
        My journey in programming is fueled by curiosity, continuous learning, and the ambition to build
        software that truly makes a difference. Whether it’s backend logic, UI/UX, or working
        with APIs and databases, I enjoy every part of the development process.
    </p>
</section>

@endsection
