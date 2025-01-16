@extends('layouts.site')

@section('title', 'Página Inicial - ' . config('app.name'))
@section('description', 'Descrição otimizada da sua página inicial para mecanismos de busca.')

@section('og_title', 'Página Inicial - ' . config('app.name'))
@section('og_description', 'Descrição otimizada da sua página inicial para compartilhamento em redes sociais.')

@section('additional_meta_tags')
    <meta name="keywords" content="palavras-chave,relacionadas,ao,seu,site">
@endsection

@section('content')
<section class="hero" id="home">
    <div class="hero-content">
        <h1>Transforme sua presença digital</h1>
        <p>Desenvolvimento de sites, aplicativos e sistemas sob medida para seu negócio</p>
        <div class="hero-buttons">
            <a href="{{ route('contato') }}" class="cta-button">Começar Projeto</a>
            <a href="#services" class="secondary-button">Nossos Serviços</a>
        </div>
    </div>
    <div class="hero-stats">
        <div class="stat-item">
            <i class="fas fa-check-circle"></i>
            <span class="stat-number">500+</span>
            <span class="stat-text">Projetos Entregues</span>
        </div>
        <div class="stat-item">
            <i class="fas fa-users"></i>
            <span class="stat-number">300+</span>
            <span class="stat-text">Clientes Satisfeitos</span>
        </div>
        <div class="stat-item">
            <i class="fas fa-globe"></i>
            <span class="stat-number">10+</span>
            <span class="stat-text">Anos de Experiência</span>
        </div>
    </div>
</section>

<section class="about" id="about">
    <div class="about-container">
        <div class="about-text">
            <h2>Por que escolher a BluCore?</h2>
            <p>Somos especialistas em transformar ideias em soluções digitais inovadoras. Nossa equipe combina criatividade e tecnologia para entregar resultados excepcionais.</p>
            <div class="about-features">
                <div class="feature">
                    <i class="fas fa-rocket"></i>
                    <h3>Tecnologia Avançada</h3>
                    <p>Utilizamos as mais recentes tecnologias do mercado</p>
                </div>
                <div class="feature">
                    <i class="fas fa-clock"></i>
                    <h3>Suporte 24/7</h3>
                    <p>Assistência técnica disponível a qualquer momento</p>
                </div>
                <div class="feature">
                    <i class="fas fa-shield-alt"></i>
                    <h3>Segurança Garantida</h3>
                    <p>Proteção total para seus dados e aplicações</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="services" id="services">
    <h2>Nossos Serviços</h2>
    <div class="services-grid">
        <div class="service-card">
            <i class="fas fa-laptop-code"></i>
            <h3>Desenvolvimento Web</h3>
            <p>Sites responsivos e modernos para sua empresa</p>
            <ul class="service-features">
                <li>Design Responsivo</li>
                <li>Otimização SEO</li>
                <li>Interface Moderna</li>
                <li>Painel Administrativo</li>
            </ul>
            <a href="{{ route('contato') }}" class="service-button">Saiba Mais</a>
        </div>
        <div class="service-card">
            <i class="fas fa-mobile-alt"></i>
            <h3>Aplicativos Mobile</h3>
            <p>Apps nativos para iOS e Android</p>
            <ul class="service-features">
                <li>UX/UI Design</li>
                <li>Performance Otimizada</li>
                <li>Integração com APIs</li>
                <li>Publicação nas Lojas</li>
            </ul>
            <a href="{{ route('contato') }}" class="service-button">Saiba Mais</a>
        </div>
        <div class="service-card">
            <i class="fas fa-cogs"></i>
            <h3>Sistemas</h3>
            <p>Sistemas personalizados para gestão empresarial</p>
            <ul class="service-features">
                <li>Automação de Processos</li>
                <li>Relatórios Avançados</li>
                <li>Integração com ERPs</li>
                <li>Suporte Técnico</li>
            </ul>
            <a href="{{ route('contato') }}" class="service-button">Saiba Mais</a>
        </div>
        <div class="service-card">
            <i class="fas fa-server"></i>
            <h3>Hospedagem</h3>
            <p>Hospedagem segura e confiável</p>
            <ul class="service-features">
                <li>99.9% de Uptime</li>
                <li>Backup Diário</li>
                <li>SSL Gratuito</li>
                <li>Suporte 24/7</li>
            </ul>
            <a href="{{ route('contato') }}" class="service-button">Saiba Mais</a>
        </div>
    </div>
</section>

<section class="process">
    <h2>Como Trabalhamos</h2>
    <div class="process-steps">
        <div class="step">
            <div class="step-number">1</div>
            <i class="fas fa-comments"></i>
            <h3>Consultoria</h3>
            <p>Entendemos suas necessidades e objetivos</p>
        </div>
        <div class="step">
            <div class="step-number">2</div>
            <i class="fas fa-pencil-ruler"></i>
            <h3>Planejamento</h3>
            <p>Desenvolvemos a melhor estratégia</p>
        </div>
        <div class="step">
            <div class="step-number">3</div>
            <i class="fas fa-code"></i>
            <h3>Desenvolvimento</h3>
            <p>Transformamos ideias em realidade</p>
        </div>
        <div class="step">
            <div class="step-number">4</div>
            <i class="fas fa-rocket"></i>
            <h3>Lançamento</h3>
            <p>Seu projeto no ar com suporte contínuo</p>
        </div>
    </div>
</section>

<section class="pricing" id="pricing">
    <h2>Planos de Hospedagem</h2>
    <div class="pricing-toggle">
        <span class="toggle-option">Mensal</span>
        <label class="switch">
            <input type="checkbox" id="billing-toggle">
            <span class="slider round"></span>
        </label>
        <span class="toggle-option">Anual <span class="discount-badge">-10%</span></span>
    </div>
    <div class="pricing-grid">
        <div class="price-card">
            <div class="price-header">
                <h3>Básico</h3>
                <div class="price-tag">
                    <div class="monthly-price">
                        R$ 14,90<span>/mês</span>
                    </div>
                    <div class="annual-price hidden">
                        R$ 160,92<span>/ano</span>
                        <div class="original-price">R$ 178,80</div>
                    </div>
                </div>
            </div>
            <ul class="price-features">
                <li><i class="fas fa-check"></i> 5GB de Espaço</li>
                <li><i class="fas fa-check"></i> 10 Contas de E-mail</li>
                <li><i class="fas fa-check"></i> Certificado SSL</li>
                <li><i class="fas fa-check"></i> Backup Semanal</li>
            </ul>
            <a href="{{ route('contato') }}" class="price-button">Contratar</a>
        </div>
        <div class="price-card popular">
            <div class="popular-tag">Mais Popular</div>
            <div class="price-header">
                <h3>Profissional</h3>
                <div class="price-tag">
                    <div class="monthly-price">
                        R$ 29,90<span>/mês</span>
                    </div>
                    <div class="annual-price hidden">
                        R$ 322,92<span>/ano</span>
                        <div class="original-price">R$ 358,80</div>
                    </div>
                </div>
            </div>
            <ul class="price-features">
                <li><i class="fas fa-check"></i> 20GB de Espaço</li>
                <li><i class="fas fa-check"></i> 30 Contas de E-mail</li>
                <li><i class="fas fa-check"></i> Certificado SSL</li>
                <li><i class="fas fa-check"></i> Backup Diário</li>
                <li><i class="fas fa-check"></i> CDN Inclusa</li>
            </ul>
            <a href="{{ route('contato') }}" class="price-button">Contratar</a>
        </div>
        <div class="price-card">
            <div class="price-header">
                <h3>Empresarial</h3>
                <div class="price-tag">
                    <div class="monthly-price">
                        R$ 49,90<span>/mês</span>
                    </div>
                    <div class="annual-price hidden">
                        R$ 538,92<span>/ano</span>
                        <div class="original-price">R$ 598,80</div>
                    </div>
                </div>
            </div>
            <ul class="price-features">
                <li><i class="fas fa-check"></i> 50GB de Espaço</li>
                <li><i class="fas fa-check"></i> E-mails Ilimitados</li>
                <li><i class="fas fa-check"></i> Certificado SSL</li>
                <li><i class="fas fa-check"></i> Backup em Tempo Real</li>
                <li><i class="fas fa-check"></i> CDN Premium</li>
                <li><i class="fas fa-check"></i> IP Dedicado</li>
            </ul>
            <a href="{{ route('contato') }}" class="price-button">Contratar</a>
        </div>
    </div>
</section>

<section class="cta">
    <div class="cta-content">
        <h2>Pronto para transformar seu negócio?</h2>
        <p>Entre em contato conosco e descubra como podemos ajudar sua empresa a crescer no mundo digital.</p>
        <a href="{{ route('contato') }}" class="cta-button">Fale Conosco</a>
    </div>
</section>
@endsection