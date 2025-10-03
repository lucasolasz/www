<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Custom Styles -->
    <link href="<?php echo URL . 'public/css/estilos.css' ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <title><?php echo APP_NOME; ?></title>

    <!-- Custom Scripts -->
    <script src="<?php echo URL . 'public/js/jquery.funcoes.js' ?>"></script>
</head>

<body>

    <header>

        <nav class="bg-black text-white p-4">
            <div class="flex justify-between items-center max-w-7xl mx-auto">

                <!-- Logo -->
                <div class="cursor-pointer">
                    <a href="https://www.renault.com.br/">
                        <img
                            src="/assets/logo-renault.jpg"
                            alt="Logo da Empresa LEAUTO"
                            width="80"
                            height="40"
                            class="w-20 sm:w-40 lg:w-20 h-auto" />
                    </a>
                </div>

                <!-- Links do menu (desktop) -->
                <div class="hidden md:flex flex-grow justify-center">
                    <div class="flex items-center space-x-6">
                        <a href="#ofertas" class="p-2 font-semibold hover:text-gray-400">Ofertas</a>
                        <a href="#unidades" class="p-2 font-semibold hover:text-gray-400">Lojas</a>
                        <a href="#quemsomos" class="p-2 font-semibold hover:text-gray-400">Quem somos</a>
                    </div>
                </div>

                <!-- Botão de cotação (desktop) -->
                <div class="hidden md:block">
                    <button class="bg-[#EFDF00] h-10 px-4 cursor-pointer text-black font-semibold hover:bg-black hover:border hover:text-white active:border transition-colors">
                        Peça uma cotação
                    </button>
                </div>

                <!-- Ícone do menu (mobile) -->
                <div class="block md:hidden z-50">

                    <!-- Checkbox oculto para controlar estado -->
                    <input type="checkbox" id="menu-toggle" class="hidden peer" />

                    <!-- Botão hamburguer/fechar -->
                    <!-- Botão de abrir/fechar -->
                    <label for="menu-toggle" class="cursor-pointer text-white text-2xl z-50">
                        <!-- Ícone menu (hambúrguer) -->
                        <i class="fa-solid fa-bars block peer-checked:hidden"></i>
                        <!-- Ícone fechar (X) -->
                        <!-- <i class="fa-solid fa-xmark hidden peer-checked:block"></i> -->
                    </label>

                    <!-- Menu lateral mobile -->
                    <div
                        class="fixed left-[-100%] top-0 w-[60%] h-full bg-black border-r border-gray-900 ease-in-out duration-500 z-40 
               peer-checked:left-0">
                        <div class="p-4 mt-20">
                            <ul>
                                <li class="p-4 border-b border-gray-600">
                                    <a href="#ofertas" class="font-semibold hover:text-gray-400">Ofertas</a>
                                </li>
                                <li class="p-4 border-b border-gray-600">
                                    <a href="#unidades" class="font-semibold hover:text-gray-400">Lojas</a>
                                </li>
                                <li class="p-4 border-b border-gray-600">
                                    <a href="#quemsomos" class="font-semibold hover:text-gray-400">Quem somos</a>
                                </li>
                                <li class="mt-4">
                                    <button
                                        class="font-semibold w-full h-10 bg-[#EFDF00] text-center p-2 text-black hover:bg-black hover:text-white active:border active:bg-black active:text-white cursor-pointer">
                                        Peça uma cotação
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">


    </header>