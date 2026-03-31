#!/bin/bash
# atualizar.sh - Localizado em public_html/

echo "--- Entrando na pasta raiz do repositório ---"
cd ..

echo "--- Baixando novos arquivos do GitHub ---"
git pull origin main

echo "--- Sincronizando arquivos com o site ---"
# O git pull já atualizou a pasta public_html (onde o site é servido).
# Se houver uma cópia extra no nível acima (como o script original sugeria), mantemos a sincronização:
cp -rv public_html/wp-content/themes/fitness-club/* ./wp-content/themes/fitness-club/

# Garante a pasta de uploads e a imagem na raiz do site (caso o site use o diretório pai)
mkdir -p ./wp-content/uploads/espaco-aluno/
cp -v public_html/wp-content/uploads/espaco-aluno/academia-bg.png ./wp-content/uploads/espaco-aluno/

echo "--- TUDO PRONTO! Verifique o site. ---"
