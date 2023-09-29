<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p allign="center"><img src="public\storageExample\tapm-logo.png" width="400" alt="TAPM Logo"></p>

## About TAPM ##

<p>TAPM or Tracking Activit Project Management is a Project Tracker Web Application focusing on PBL (Project Based Learning) Projects that is made in Asia Pacific College.</p><br>
<p>This Project is made as a fullfilment for PBL course made by Group Abyss of BSCS-SS201 from Asia Pacific College S.Y. 2020-2024, with its client, Mr. Jayvee M. Cabardo, Director of Project Development Office</p>

## How to Install ##

<p>The Project is still currently on its Development Phase. To be able to use this, Follow the Instructions below:</p><br>
Make sure that you have [XAMPP](https://www.apachefriends.org/download.html) and [Node.js](https://nodejs.org/en/download/current) Installed.
1. Open Visual Studio Code.
2. Clone the [Repository](https://github.com/APC-SoCIT/APC_2023_2024_T1_TAPM.git) to /xampp/htdocs/repository_here
3. Once the repository has been saved locally to your system, look for the '.env.example' file on the files side bar and make a copy of that file in the same place (Right-click+Copy then Paste)
4. Remove '.example' from the copied file.
5. Make sure you have XAMPP active and its port is the same in the '.env' file.
6. Launch the terminal and execute 'composer install'
7. Then 'npm install'
8. Then 'php artisan key:generate'
9. Then 'php artisan migrate'
10. Then 'php artisan db:seed'
11. Then 'php artisan storage:link'
12. Then look for path public/storageExample and copy-paste its content to public/storage
13. Lastly, 'php artisan serve'. Activate a new terminal then type 'npm run dev'

<p>If any error persists, please do contact the developers to solve the problems.<p>