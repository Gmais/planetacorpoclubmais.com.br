#!/bin/bash
# atualizar.sh
echo "--- Baixando novos arquivos do GitHub ---"
git pull origin main

echo "--- Sincronizando arquivos com o site ---"
# Copia o tema
cp -r public_html/wp-content/themes/fitness-club/* wp-content/themes/fitness-club/

# Garante a pasta de uploads e a imagem
mkdir -p wp-content/uploads/espaco-aluno/
cp public_html/wp-content/uploads/espaco-aluno/academia-bg.png wp-content/uploads/espaco-aluno/

echo "--- TUDO PRONTO! Verifique o site. ---"
