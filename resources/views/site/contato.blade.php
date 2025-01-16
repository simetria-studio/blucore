@extends('layouts.site')

@section('title', 'Contato - ' . config('app.name'))
@section('description', 'Entre em contato conosco. Estamos prontos para atender suas necessidades.')

@section('og_title', 'Contato - ' . config('app.name'))
@section('og_description', 'Entre em contato conosco através de nossos canais de atendimento.')

@section('additional_meta_tags')
    <meta name="keywords" content="contato,atendimento,suporte,fale conosco">
@endsection

@section('content')
    <main class="contact-page">
        <h1>Entre em Contato</h1>

        <div class="contact-container">
            <div class="contact-info">
                <h2>Informações de Contato</h2>
                <div class="info-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <div>
                        <h3>Endereço</h3>
                        <p>Av. Principal, 1234</p>
                        <p>Centro - São Paulo/SP</p>
                        <p>CEP: 01234-567</p>
                    </div>
                </div>

                <div class="info-item">
                    <i class="fas fa-phone"></i>
                    <div>
                        <h3>Telefones</h3>
                        <p>+55 (11) 1234-5678</p>
                        <p>+55 (11) 98765-4321</p>
                    </div>
                </div>

                <div class="info-item">
                    <i class="fas fa-envelope"></i>
                    <div>
                        <h3>E-mail</h3>
                        <p>contato@blucore.com.br</p>
                        <p>suporte@blucore.com.br</p>
                    </div>
                </div>

                <div class="social-media">
                    <h3>Redes Sociais</h3>
                    <div class="social-links">
                        <a href="#" class="social-icon"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-linkedin"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>

            <div class="contact-form">
                <h2>Envie sua Mensagem</h2>
                <form action="#" method="POST">
                    <div class="form-group">
                        <label for="name">Nome Completo</label>
                        <input type="text" id="name" name="name" required>
                    </div>

                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="email" id="email" name="email" required>
                    </div>

                    <div class="form-group">
                        <label for="phone">Telefone</label>
                        <input type="tel" id="phone" name="phone">
                    </div>

                    <div class="form-group">
                        <label for="subject">Assunto</label>
                        <select id="subject" name="subject" required>
                            <option value="">Selecione um assunto</option>
                            <option value="orcamento">Solicitar Orçamento</option>
                            <option value="suporte">Suporte Técnico</option>
                            <option value="parceria">Parceria</option>
                            <option value="outro">Outro Assunto</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="message">Mensagem</label>
                        <textarea id="message" name="message" rows="5" required></textarea>
                    </div>

                    <button type="submit" class="submit-btn">Enviar Mensagem</button>
                </form>
            </div>
        </div>
    </main>
@endsection
