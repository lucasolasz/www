<?php
// Garantir que as variáveis foram definidas
$srcImagem = $srcImagem ?? '';
$titulo = $titulo ?? '';
$subtitulo = $subtitulo ?? '';
$subtituloNegrito = $subtituloNegrito ?? '';
$tituloModal = $tituloModal ?? '';
$descricaoModal = $descricaoModal ?? '';
$detailsComponent = $detailsComponent ?? '';

?>

<div class="relative w-110 h-150">
    <!-- Imagem -->
    <img
        src="<?= $srcImagem ?>"
        alt="Banner para saber mais sobre carros renault do tipo <?= htmlspecialchars($titulo) ?>"
        class="absolute h-full z-[-1]" />

    <div class="text-white">
        <div class="mx-5 mt-10">
            <h3 class="text-5xl font-bold break-words"><?= htmlspecialchars($titulo) ?></h3>
            <p class="mt-2">
                <?= htmlspecialchars($subtitulo) ?>
                <strong class="font-bold text-base"><?= htmlspecialchars($subtituloNegrito) ?></strong>
            </p>
        </div>
    </div>

    <div class="absolute bottom-15 right-15 text-white flex flex-col gap-6">
        <a href="/" target="_blank" class="flex gap-2 p-2 justify-center items-center h-10 w-40 
            font-bold cursor-pointer border-white text-white self-end
            bg-black hover:bg-white hover:text-black active:bg-white active:text-black transition-colors">
            <i class="fa-brands fa-whatsapp text-xl"></i> fale conosco!
        </a>

        <button class="h-10 w-40 font-bold cursor-pointer border border-white text-white 
         self-end hover:bg-white hover:text-black active:bg-white active:text-black transition-colors">
            saiba mais
        </button>
    </div>


</div>