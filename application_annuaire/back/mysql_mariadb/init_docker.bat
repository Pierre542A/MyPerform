@echo off
echo Debut.
echo.
echo docker-compose down -v
docker-compose down -v
echo.
echo docker-compose up -d
docker-compose up -d
echo.
echo Fin.
pause>nul
