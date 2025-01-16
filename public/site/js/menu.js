$(document).ready(function() {
    const $menuToggle = $('.menu-toggle');
    const $mobileNav = $('.mobile-nav');
    const $closeMenu = $('.close-menu');
    const $overlay = $('.overlay');
    const $body = $('body');

    // Abrir menu
    $menuToggle.click(function() {
        $mobileNav.addClass('active');
        $overlay.addClass('active');
        $body.addClass('menu-open');
    });

    // Fechar menu
    function closeMenu() {
        $mobileNav.removeClass('active');
        $overlay.removeClass('active');
        $body.removeClass('menu-open');
    }

    $closeMenu.click(closeMenu);
    $overlay.click(closeMenu);

    // Fechar menu ao clicar em um link
    $('.mobile-nav-links a').click(function() {
        closeMenu();
    });

    // Fechar menu ao redimensionar a tela para desktop
    $(window).resize(function() {
        if ($(window).width() > 768) {
            closeMenu();
        }
    });
}); 