<?php

$opcoesUnidade = [
    [
        "nome" => "Leauto Renault Abolição",
        "idUnidade" => 7
    ],
    [
        "nome" => "Leauto Renault Botafogo",
        "idUnidade" => 5
    ],
    [
        "nome" => "Leauto Renault Penha",
        "idUnidade" => 9
    ],
    [
        "nome" => "Leauto Renault Tijuca",
        "idUnidade" => 6
    ]
];

$opcoesContato = ["WhatsApp", "Telefone", "E-mail"];

?>


<div class="bg-white p-6 flex flex-col justify-center">

    <h3 class="text-xl md:text-2xl font-bold text-center mb-8">
        fale conosco
    </h3>

    <form action="processa_formulario.php" method="POST" class="space-y-4 text-sm font-semibold">

        <!-- Linha 1: Nome e E-mail -->
        <div class="flex flex-col md:flex-row gap-4">
            <input
                type="text"
                name="nome"
                placeholder="Nome"
                class="w-full h-10 border border-gray-300 p-3 focus:outline-none focus:ring-2 focus:ring-yellow-500"
                required />
            <input
                type="email"
                name="email"
                placeholder="E-mail"
                class="w-full h-10 border border-gray-300 p-3 focus:outline-none focus:ring-2 focus:ring-yellow-500"
                required />
        </div>

        <!-- Linha 2: Telefone e Unidade -->
        <div class="flex flex-col md:flex-row gap-4">
            <input
                type="tel"
                name="telefone"
                placeholder="(21) 99999-9999"
                class="w-full h-12 border border-gray-300 p-3 focus:outline-none focus:ring-2 focus:ring-yellow-500" />

            <select
                name="unidade"
                class="w-full h-12 border border-gray-300 p-3 bg-white focus:outline-none focus:ring-2 focus:ring-yellow-500"
                aria-label="Selecione a unidade">
                <option value="" hidden>Unidade</option>
                <?php
                foreach ($opcoesUnidade as $unidade) {
                    echo "<option value=\"{$unidade['idUnidade']}\">{$unidade['nome']}</option>";
                }
                ?>
            </select>
        </div>

        <!-- Linha 3: Desejo contato por -->
        <select
            name="contatoPor"
            class="w-full h-12 border border-gray-300 p-3 bg-white focus:outline-none focus:ring-2 focus:ring-yellow-500"
            aria-label="Selecione o tipo de contato">
            <option value="" hidden>Desejo contato por</option>
            <?php

            foreach ($opcoesContato as $opcao) {
                echo "<option value=\"$opcao\">$opcao</option>";
            }
            ?>
        </select>

        <!-- Linha 4: Mensagem -->
        <textarea
            name="mensagem"
            placeholder="Mensagem"
            rows="4"
            class="w-full border h-15 border-gray-300 p-3 resize-y focus:outline-none focus:ring-2 focus:ring-yellow-500"></textarea>

        <!-- Aceito a política de privacidade -->
        <div class="flex items-center justify-center pt-2">
            <input
                type="checkbox"
                name="aceitoTermos"
                value="1"
                class="w-4 h-4 text-yellow-500 rounded focus:ring-yellow-500"
                required
                checked />
            <label for="aceitoTermos" class="ml-2 text-sm">Aceito a política de privacidade</label>
        </div>

        <!-- Botão de envio -->
        <div class="text-center pt-4">
            <button
                type="submit"
                class="w-full md:w-70 bg-black text-white font-semibold py-3 px-6 hover:bg-[#EFDF00] hover:text-black active:bg-[#EFDF00] active:text-black cursor-pointer transition-colors">
                enviar
            </button>
        </div>

    </form>
</div>