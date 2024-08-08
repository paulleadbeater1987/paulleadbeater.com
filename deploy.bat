@echo off
set HOST=ftp.yourserver.com
set USER=yourusername
set PASS=yourpassword
set LOCAL_DIR=C:\xampp\htdocs\paulleadbeater
set REMOTE_DIR=/home/englnigd/publichtml

WinSCP.com /command ^
  "open ftp://%USER%:%PASS%@%HOST%" ^
  "lcd %LOCAL_DIR%" ^
  "cd %REMOTE_DIR%" ^
  "put -delete *" ^
  "exit"