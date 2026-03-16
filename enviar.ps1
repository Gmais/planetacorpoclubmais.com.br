# enviar.ps1
Write-Host "--- Enviando alterações para o servidor ---" -ForegroundColor Cyan
git add .
$msg = Read-Host "Mensagem do commit (deixe vazio para 'Atualização')"
if ($msg -eq "") { $msg = "Atualização" }
git commit -m $msg
git push origin main
Write-Host "--- Concluído! Agora rode o script no servidor ---" -ForegroundColor Green
