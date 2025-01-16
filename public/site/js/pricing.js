$(document).ready(function() {
    // Função para animar a mudança de preços
    function animatePriceChange($element, newContent) {
        $element.fadeOut(300, function() {
            $(this).html(newContent).fadeIn(300);
        });
    }

    // Manipulador do evento de alteração do toggle
    $('#billing-toggle').change(function() {
        const isAnnual = $(this).is(':checked');
        
        // Animação para cada card de preço
        $('.price-card').each(function() {
            const $monthlyPrice = $(this).find('.monthly-price');
            const $annualPrice = $(this).find('.annual-price');
            
            if (isAnnual) {
                $monthlyPrice.addClass('hidden');
                $annualPrice.removeClass('hidden');
            } else {
                $monthlyPrice.removeClass('hidden');
                $annualPrice.addClass('hidden');
            }
        });

        // Atualiza o texto do botão
        $('.price-button').each(function() {
            const buttonText = isAnnual ? 'Contratar Anual' : 'Contratar Mensal';
            $(this).text(buttonText);
        });

        // Adiciona classe de destaque para mostrar a economia
        $('.price-card').toggleClass('highlight-savings', isAnnual);
    });

    // Efeito hover nos cards de preço
    $('.price-card').hover(
        function() {
            $(this).find('.price-tag').addClass('price-hover');
        },
        function() {
            $(this).find('.price-tag').removeClass('price-hover');
        }
    );
}); 