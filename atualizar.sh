#!/bin/bash
# atualizar.sh - Localizado na raiz do site

echo "--- Entrando na pasta do Git ---"
cd public_html

echo "--- Baixando novos arquivos do GitHub ---"
git pull origin main

echo "--- Sincronizando arquivos com o site ---"
# Copia o tema para a pasta ativa (subindo um nível)
cp -r wp-content/themes/fitness-club/* ../wp-content/themes/fitness-club/

# Garante a pasta de uploads e a imagem na raiz do site
mkdir -p ../wp-content/uploads/espaco-aluno/
cp wp-content/uploads/espaco-aluno/academia-bg.png ../wp-content/uploads/espaco-aluno/

echo "--- TUDO PRONTO! Verifique o site. ---"
