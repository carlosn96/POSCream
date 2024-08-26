@echo off
setlocal

:: Define las extensiones
set "ext_origen=html"
set "ext_destino=php"

:: Obtiene el directorio actual
set "directorio=%~dp0"

:: Cambia al directorio actual
cd /d "%directorio%"

:: Recorre todos los archivos con la extensión de origen
for %%f in (*.%ext_origen%) do (
    :: Cambia la extensión del archivo
    ren "%%f" "%%~nf.%ext_destino%"
)

echo Extensiones cambiadas de *.%ext_origen% a *.%ext_destino%
pause
