@echo off
set HOST=premium43.web-hosting.com
set USER=paul@paulleadbeater.com
set LOCAL_DIR=C:\xampp\htdocs\paulleadbeater
set REMOTE_DIR=/

:: Prompt for FTP password
set /p PASS="FTP password: "

:: Run WinSCP command
"C:\Program Files (x86)\WinSCP\WinSCP.com" /command ^
  "open ftp://%USER%:%PASS%@%HOST%" ^
  "lcd %LOCAL_DIR%" ^
  "cd %REMOTE_DIR%" ^
  "put -neweronly * -filemask=""|.git/""" ^
  "exit"