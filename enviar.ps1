# enviar.ps1
Write-Host "--- Enviando alterações para o servidor ---" -ForegroundColor Cyan
git add .
$msg = Read-Host "Mensagem do commit (deixe vazio para 'Atualização')"
if ($msg -eq "") { $msg = "Atualização" }
git commit -m $msg
git push origin main
Write-Host "--- Sincronizando com o servidor... ---" -ForegroundColor Yellow
Invoke-WebRequest -Uri "https://planetacorpoclubmais.com.br/deploy.php" -UseBasicParsing
Write-Host "--- Concluído! O site já deve estar atualizado. ---" -ForegroundColor Green
