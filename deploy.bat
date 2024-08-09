@echo off
set HOST=premium43.web-hosting.com
set USER=paul@paulleadbeater.com
set LOCAL_DIR=C:\xampp\htdocs\paulleadbeater
set REMOTE_DIR=/
set LOG_FILE=C:\xampp\htdocs\paulleadbeater\log\file.log

set /p PASS="FTP password: "

"C:\Program Files (x86)\WinSCP\WinSCP.com" /log=%LOG_FILE% /command ^
  "open ftp://%USER%:%PASS%@%HOST%" ^
  "lcd %LOCAL_DIR%" ^
  "cd %REMOTE_DIR%" ^
  "put -neweronly * -filemask=""|.git/""" ^
  "exit"