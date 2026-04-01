#!/bin/bash
# atualizar.sh - Localizado em public_html/

echo "--- Entrando na pasta raiz do repositório ---"
cd /home/planeta4/repositories/planetacorpoclubmais.com.br/

echo "--- Baixando novos arquivos do GitHub ---"
git pull origin main

echo "--- Sincronizando arquivos com o site live (/home/planeta4/public_html/) ---"
# O git pull atualizou o repo. Agora copiamos para o web root.
cp -rv public_html/* /home/planeta4/public_html/

echo "--- TUDO PRONTO! Verifique o site. ---"
