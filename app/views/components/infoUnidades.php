<?php
// Exemplo de como as variáveis seriam definidas antes do include.
// Você pode ajustar os nomes e valores conforme a necessidade.
$tituloLoja = $tituloLoja ?? 'Título da Loja';
$endereco = $endereco ?? 'Endereço da Loja';
$whatsapp = $whatsapp ?? '00987654321'; // Apenas números
$telefone = $telefone ?? '00123456789'; // Apenas números
$enderecoSeguro = urlencode($endereco); // Codifica o endereço para a URL do Maps

?>

<div class="flex m-2 justify-center">
    <div class="flex flex-col text-white p-7 max-w-120 md:max-w-105">
        <div class="flex items-center justify-items-start">
            <i class="fa-solid fa-location-dot text-2xl mr-2" id="location-<?= $tituloLoja ?>"></i>
            <p class="text-[#E8D900] text-2xl font-bold"><?= $tituloLoja ?></p>
        </div>
        <a
            href="https://www.google.com/maps/search/?api=1&query=<?= $enderecoSeguro ?>"
            target="_blank"
            rel="noopener noreferrer"
            class="my-2 font-semibold hover:underline active:underline"
            aria-label="Abrir o endereço <?= $endereco ?> no Google Maps">
            <?= $endereco ?>
        </a>
        <div class="flex flex-col gap-4 md:flex-row">
            <a
                href="tel:+55<?= $whatsapp ?>"
                target="_blank"
                class="flex items-center mr-4 gap-2"
                aria-label="Ligar para +55<?= $whatsapp ?>">
                <i class="fa-brands fa-whatsapp text-white md:text-xl"></i>
                <p class="md:text-xl font-bold text-[#E8D900]"><?= $whatsapp ?></p>
            </a>
            <a
                href="tel:+55<?= $telefone ?>"
                target="_blank"
                class="flex items-center gap-2"
                aria-label="Ligar para +55<?= $telefone ?>">
                <i class="fa-solid fa-phone text-white md:text-xl"></i>
                <p class="md:text-xl font-bold text-[#E8D900]"><?= $telefone ?></p>
            </a>
        </div>
    </div>
    <div class="flex flex-col text-white text-sm pt-4 md:text-base md:max-w-105">
        <p class="font-extrabold">Vendas</p>
        <p>Segunda a Sexta-feira das 8h às 18h</p>
        <p>Sábado das 9h às 17h</p>
        <p class="mt-4 font-extrabold">Serviços</p>
        <p>Segunda a Sexta-feira das 8h às 18h</p>
        <p>Sábado: Regime de Plantão (Favor Consultar Previamente)</p>
    </div>
</div>