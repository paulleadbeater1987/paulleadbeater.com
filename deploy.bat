@echo off
set HOST=premium43.web-hosting.com
set USER=paul@paulleadbeater.com
set LOCAL_DIR=C:\xampp\htdocs\paulleadbeater
set REMOTE_DIR=/
set LOG_FILE=C:\xampp\htdocs\paulleadbeater\log\file.log

:: Prompt for FTP password
set /p PASS="FTP password: "

:: Run WinSCP command and log output
(
    echo %date% %time% Starting deployment...

    "C:\Program Files (x86)\WinSCP\WinSCP.com" /log=%LOG_FILE% /command ^
      "open ftp://%USER%:%PASS%@%HOST%" ^
      "lcd %LOCAL_DIR%" ^
      "cd %REMOTE_DIR%" ^
      "put -neweronly * -filemask=""|.git/""" ^
      "exit"

    :: Check if WinSCP executed successfully
    if %ERRORLEVEL% neq 0 (
        echo %date% %time% WinSCP deployment failed with error code %ERRORLEVEL% >> %LOG_FILE%
        exit /b %ERRORLEVEL%
    ) else (
        echo %date% %time% WinSCP deployment completed successfully. >> %LOG_FILE%
    )
) >> %LOG_FILE% 2>&1
