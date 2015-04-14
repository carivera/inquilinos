echo on
echo off
cls
echo "Se va a crear un archivo .sql en la misma ruta de este archivo"
echo "El cual incluye el backup de la base de datos 'pdrms'"
pause
del rentapen.sql
mysqldump -u root --opt --routines rentapen > rentapen.sql
pause
exit
exit