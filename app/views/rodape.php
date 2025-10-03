<?php

$modelos = [
    [
        "nomeCarro" => "Renault Kwid",
        "url_externa" => "https://www.renault.com.br/modelos/kwid.html"
    ],
    [
        "nomeCarro" => "Renault Duster",
        "url_externa" => "https://www.renault.com.br/modelos/duster.html"
    ],
    [
        "nomeCarro" => "Renault Captur",
        "url_externa" => "https://www.renault.com.br/modelos/captur.html"
    ]
];

$vendasDiretas = [
    "PCD",
    "Taxista / Aplicativo",
    "CNPJ",
    "Produtor Rural"
];

$redesSociais = [
    [
        "nome" => "Facebook",
        "link" => "https://www.facebook.com/LeautoRenault",
        "icone" => "<i class=\"fab fa-facebook\"></i>"
    ],
    [
        "nome" => "Instagram",
        "link" => "https://www.instagram.com/renaultleauto",
        "icone" => "<i class=\"fab fa-instagram\"></i>"
    ],
    [
        "nome" => "WhatsApp",
        "link" => URL_WHATSAPP,
        "icone" => "<i class=\"fab fa-whatsapp\"></i>"
    ]
];


?>

<footer class="py-12 bg-gray-100 text-center w-full">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 md:gap-12 justify-items-center">

            <!-- Seção Modelos -->
            <div>
                <h3 class="text-lg font-bold mb-4">Modelos</h3>
                <ul class="space-y-2">
                    <?php
                    foreach ($modelos as $modelo) {
                        echo "<li><a href=\"{$modelo['url_externa']}\" class=\"hover:underline\">{$modelo['nomeCarro']}</a></li>";
                    }
                    ?>
                </ul>
            </div>

            <!-- Seção Vendas Diretas -->
            <div>
                <h3 class="text-lg font-bold mb-4">Vendas Diretas</h3>
                <ul class="space-y-2">
                    <?php

                    foreach ($vendasDiretas as $item) {
                        echo "<li><a href=\"#quempodecomprar\" class=\"hover:underline\">{$item}</a></li>";
                    }
                    ?>
                </ul>
            </div>

            <!-- Seção Redes Sociais -->
            <div>
                <h3 class="text-lg font-bold mb-4">Redes Sociais</h3>
                <div class="flex justify-center space-x-4">
                    <?php

                    foreach ($redesSociais as $rede) {
                        echo "<a href=\"{$rede['link']}\" class=\"text-2xl hover:text-gray-600 transition-colors\" target=\"_blank\" aria-label=\"Link para rede social {$rede['nome']}\">{$rede['icone']}</a>";
                    }
                    ?>
                </div>
            </div>

        </div>

    </div>
</footer>