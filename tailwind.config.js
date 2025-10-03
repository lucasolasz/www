/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./*.php", // Exemplo para arquivos .php na raiz do projeto
    "./**/*.php", // Exemplo para arquivos .php em subpastas
    // Adicione outros tipos de arquivos se você tiver (ex: html)
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}