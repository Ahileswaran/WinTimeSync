@echo off
start /b /min php -S localhost:8000
start "" "http://localhost:8000/index.html"
