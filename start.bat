@echo off
title Bueno Portfolio Server
cd /d "%~dp0"

if exist "C:\xampp\php83\php.exe" (
    set "PHP=C:\xampp\php83\php.exe"
) else (
    set "PHP=C:\xampp\php\php.exe"
)

"%PHP%" artisan serve

echo.
echo The server stopped. If you see a PHP version error above, open this file
echo in a text editor and fix the "PHP=" path to a PHP 8.3+ executable.
echo.
pause