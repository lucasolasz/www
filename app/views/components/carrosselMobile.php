<?php
$imagens = [
    "/images/carrossel/carrossel-mobile/banner1.png",
    "/images/carrossel/carrossel-mobile/banner2.png",
];

?>

<div class="relative swiper mySwiper h-auto">

    <h1 class="sr-only">
        Ofertas de veículos Renault na concessionária Leauto
    </h1>

    <div class="absolute top-15 right-30 z-2 hidden h-full w-1/3 md:block">
        <?php include COMPONENTES . 'formulario.php'; ?>
    </div>

    <div class="swiper-wrapper">
        <?php
        // Exemplo de imagens para o carrossel
        foreach ($imagens as $img) {
            echo "
            <div class='swiper-slide h-auto'>
                <img src='{$img}' alt='Imagem do carrossel' class='w-full h-full'>
            </div>
            ";
        }
        ?>
    </div>

    <!-- Navegação -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>

    <!-- Paginação -->
    <div class="swiper-pagination"></div>

</div>

<script>
    const swiper = new Swiper(".mySwiper", {
        loop: true,
        autoplay: {
            delay: 4000,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
</script>