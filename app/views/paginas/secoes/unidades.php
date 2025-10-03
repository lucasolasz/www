 <style>
     /* Padrão dos círculos */
     .unidadesSwiper .swiper-pagination-bullet {
         width: 25px;
         height: 25px;
         text-align: center;
         line-height: 20px;
         font-size: 12px;
         color: #000;
         opacity: 1;
         background: black;
         cursor: pointer;
         border: #fff 2px solid;
     }

     /* Círculo ativo */
     .unidadesSwiper .swiper-pagination-bullet-active {
         color: #fff;
         background: #efdf00;
     }
 </style>

 <div
     class="flex flex-col items-center justify-center bg-black mb-5 h-70 md:h-80"
     id="unidades">

     <h2 class="sr-only">Unidades da concessionária Leauto</h2>

     <div class="swiper mySwiperUnidades unidadesSwiper w-full h-70">
         <div class="swiper-wrapper">
             <div class="swiper-slide">
                 <?php
                    $tituloLoja = "Abolição";
                    $endereco = "Av. Dom Hélder Câmara, 8424 - Abolição, Rio de Janeiro - RJ, 20751-003";
                    $whatsapp = "(21) 2197-0700";
                    $telefone = "(21) 2197-0700";

                    include COMPONENTES . 'infoUnidades.php';
                    ?>
             </div>
             <div class="swiper-slide">
                 <?php
                    $tituloLoja = "Tijuca";
                    $endereco = "Rua Conde de Bonfim, 220 - Tijuca, Rio de Janeiro - RJ, 20520-054";
                    $whatsapp = "(21) 2114-7190"; // Apenas números
                    $telefone = "(21) 2204-9292"; // Apenas números

                    include COMPONENTES . 'infoUnidades.php';
                    ?>
             </div>
             <div class="swiper-slide">
                 <?php
                    $tituloLoja = "Botafogo";
                    $endereco = "R. Gen. Polidoro, 316 - Botafogo, Rio de Janeiro - RJ, 22280-004";
                    $whatsapp = "(21) 2114-7190";
                    $telefone = "(21) 2197-7200";

                    include COMPONENTES . 'infoUnidades.php';
                    ?>
             </div>
             <div class="swiper-slide">
                 <?php
                    $tituloLoja = "Penha";
                    $endereco = "Av. Lobo Júnior, 1408 - Penha Circular, Rio de Janeiro - RJ, 21020-123";
                    $whatsapp = "(21) 2114-7190";
                    $telefone = "(21) 3836-1999";

                    include COMPONENTES . 'infoUnidades.php';
                    ?>
             </div>


         </div>

         <div class="swiper-pagination"></div>
     </div>
 </div>

 </div>

 <script>
     $(document).ready(function() {
         const swiper = new Swiper(".mySwiperUnidades", {

             pagination: {
                 el: ".mySwiperUnidades .swiper-pagination",
                 clickable: true,
             },
             navigation: {
                 nextEl: ".mySwiperUnidades .swiper-button-next",
                 prevEl: ".mySwiperUnidades .swiper-button-prev",
             },
         });
     });
 </script>