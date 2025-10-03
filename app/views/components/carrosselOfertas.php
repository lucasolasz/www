<?php

$imagens = [
    ["src" => "/images/carrossel/carrossel-ofertas/oferta1.png", "nome" => "Carro 1", "url" => "#"],
    ["src" => "/images/carrossel/carrossel-ofertas/oferta2.png", "nome" => "Carro 2", "url" => "#"],
    ["src" => "/images/carrossel/carrossel-ofertas/oferta3.png", "nome" => "Carro 3", "url" => "#"],
    ["src" => "/images/carrossel/carrossel-ofertas/oferta4.png", "nome" => "Carro 4", "url" => "#"],
    ["src" => "/images/carrossel/carrossel-ofertas/oferta5.png", "nome" => "Carro 5", "url" => "#"],
    ["src" => "/images/carrossel/carrossel-ofertas/oferta6.png", "nome" => "Carro 6", "url" => "#"],

];
?>

<style>
    /* Padrão dos círculos */
    .ofertasSwiper .swiper-pagination-bullet {
        width: 15px;
        height: 15px;
        background: white;
        border: 0.5px solid black;
        opacity: 1;
    }

    /* Círculo ativo */
    .ofertasSwiper .swiper-pagination-bullet-active {
        background: black;
        width: 18px;
        height: 18px;
    }
</style>


<div class="h-130 px-5 my-10 md:px-15" id="ofertas">
    <div class="flex justify-center">
        <h2 class="text-2xl font-bold my-4 md:text-4xl">Ofertas Imperdíveis</h2>
    </div>
    <div class="swiper mySwiperOfertas ofertasSwiper h-110">
        <div class="swiper-wrapper">
            <?php foreach ($imagens as $img) : ?>
                <div class="swiper-slide">
                    <img src="<?= $img['src'] ?>" alt="<?= $img['nome'] ?>" class="m-auto">
                    <p class="text-black text-xl font-bold mt-2"><?= $img['nome'] ?></p>
                    <div class="flex gap-2">
                        <a href="<?= $img['url'] ?>" class="bg-black text-white p-2 mt-2 w-full">Conheça</a>
                        <a href="<?= $img['url'] ?>" class="border p-2 mt-2 w-full">Conheça</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="swiper-pagination"></div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</div>

<script>
    $(document).ready(function() {
        const swiper = new Swiper(".mySwiperOfertas", {
            slidesPerView: 3,
            spaceBetween: 10,
            pagination: {
                el: ".mySwiperOfertas .swiper-pagination",
                clickable: true
            },
            navigation: {
                nextEl: ".mySwiperOfertas .swiper-button-next",
                prevEl: ".mySwiperOfertas .swiper-button-prev"
            },
            breakpoints: {
                0: {
                    slidesPerView: 1,
                    spaceBetween: 0
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 10
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 10
                }
            }
        });
    });
</script>