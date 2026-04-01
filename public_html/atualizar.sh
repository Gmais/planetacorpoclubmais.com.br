#!/bin/bash
# atualizar.sh - Localizado em public_html/

echo "--- Entrando na pasta raiz do repositório ---"
cd /home/planeta4/repositories/planetacorpoclubmais.com.br/

echo "--- Baixando novos arquivos do GitHub ---"
git pull origin main

echo "--- Sincronizando apenas a pasta DESAFIO (Muito mais rápido) ---"
# Sincroniza apenas o que mudou de fato
cp -rv public_html/desafio/ /home/planeta4/public_html/
cp -v public_html/deploy.php /home/planeta4/public_html/

echo "--- TUDO PRONTO! ---"
