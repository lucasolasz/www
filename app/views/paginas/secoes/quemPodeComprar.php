  <div
      class="w-full flex flex-col justify-center items-center p-10"
      id="quempodecomprar">

      <div class="flex flex-col items-center">
          <h2 class="text-2xl">QUEM PODE</h2>
          <h2 class="text-5xl font-extrabold mb-4">COMPRAR</h2>
      </div>

      <div class="flex flex-col gap-10 lg:flex-row lg:mb-10">

          <?php
            // Banner 1
            $srcImagem = "/images/banner/cadeirante-leve.png";
            $titulo = "PCD";
            $subtitulo = "Veículos com";
            $subtituloNegrito = "isenção de impostos e condições especiais.";
            $tituloModal = "Venda Direta Renault para PCD – Compre com Benefícios Exclusivos na Leauto";
            $descricaoModal = "Na Leauto, você que possui direito à compra com isenção de impostos encontra condições especiais na venda direta Renault para PCD. Oferecemos descontos direto da fábrica, apoio completo no processo de isenção e um atendimento humanizado, pensado para tornar sua experiência simples, segura e sem complicações.";
            $detailsComponent = "<p>Detalhes adicionais aqui...</p>";
            include COMPONENTES . "bannerQuemPodeComprar.php";


            // Banner 2
            $srcImagem = "/images/banner/motorista-aplicativo-leve.png";
            $titulo = "TAXISTA / APLICATIVO";
            $subtitulo = "Veículos com";
            $subtituloNegrito = "isenção de impostos e condições especiais";
            $tituloModal = "Venda Direta Renault para Táxi e Aplicativo – Economia e Agilidade na Leauto";
            $descricaoModal = "Aqui na Leauto, você que trabalha como taxista ou motorista de aplicativo pode aproveitar todas as vantagens da venda direta Renault. Oferecemos descontos exclusivos, isenção de impostos (como IPI e ICMS, quando aplicável) e todo o suporte necessário para facilitar sua compra.";
            $detailsComponent = "<p>Mais detalhes adicionais aqui...</p>";

            include COMPONENTES . "bannerQuemPodeComprar.php";
            ?>

      </div>

      <div class="flex flex-col gap-10 lg:flex-row">
          <?php
            // Banner CNPJ
            $srcImagem = "/images/banner/carro-cnpj-leve.png";
            $titulo = "CNPJ";
            $subtitulo = "Condições especiais e vantagens exclusivas para sua empresa.";
            $subtituloNegrito = "";
            $tituloModal = "Venda Direta Renault para CNPJ – Soluções Inteligentes para Sua Empresa na Leauto";
            $descricaoModal = "Se você possui empresa registrada com CNPJ, na Leauto oferecemos condições exclusivas na venda direta Renault, ideais para quem busca economia, praticidade e eficiência na hora de renovar ou ampliar sua frota. Trabalhamos com descontos direto da fábrica, prazos diferenciados e um atendimento dedicado para entender as necessidades do seu negócio. Nossa equipe especializada acompanha todo o processo, desde a escolha do modelo ideal até o suporte na documentação e faturamento.";
            $detailsComponent = "<p>Mais detalhes adicionais aqui...</p>";

            // Inclui o componente
            include COMPONENTES . "bannerQuemPodeComprar.php";

            // Banner Produtor Rural
            $srcImagem = "/images/banner/produtor-rural-leve.png";
            $titulo = "PRODUTOR RURAL";
            $subtitulo = "Veículos robustos com";
            $subtituloNegrito = " condições especiais para o campo.";
            $tituloModal = "Venda Direta Renault para Produtor Rural – Economia e Facilidade com a Leauto";
            $descricaoModal = "Se você é produtor rural, a Leauto tem condições especiais para a sua próxima conquista. Através da venda direta Renault, oferecemos descontos exclusivos direto da fábrica e atendimento personalizado para facilitar a aquisição do seu veículo com todos os benefícios garantidos por lei.
Nossa equipe está pronta para te orientar em cada etapa, desde a documentação necessária (como o comprovante de atividade rural) até a escolha do modelo ideal para o seu dia a dia no campo ou na cidade.";
            $detailsComponent = "<p>Mais detalhes adicionais aqui...</p>";

            // Inclui o componente
            include COMPONENTES . "bannerQuemPodeComprar.php";
            ?>
      </div>