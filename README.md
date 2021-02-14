
## About Online Recruitment System (ORS)

Online Recruitment System (ORS) is an online platform used by a company to recruit employees. Employers through the Human Resource Department post available job opportunities on their website for only registered users' consuption. The viewers once interested start feeding in their details such as profile details, resumes and cover letters in order to apply for a certain opportunity of interest. After receiving applications, the recruiter goes through the candicates' profile one at ago and selects item for an interview. 
The HR schedules an iterview for the shortlisted candidate.

For demo [clck here](http://18.191.119.30/). Admin login admin@admin.com password: helloworld

For installation instructions
1. Clone the repository in your root folder e.g htdocs folder
2. Open example.env and save in the same path as .env
3. Open cmd or any command terminal and c.d into your project folder
4. Generate a key for the project using "php artisan key:generate" command.
5. Install dependencies using "composer install" command.  I assume you've composer installed already. If not download form [here](https://getcomposer.org).
Open a .env file and fill in your database username, database and password if any.
6. Run the migrations using "php artisan migrate --seed" command. This will install the tables and create an administrator user.
7. Start the server using "php artisan serve" command
8. Open your favorite browser and run [127.0.0.1:8000](127.0.0.1:8000)
9. Enjoy your app. (modify where possible)


If you discover a security vulnerability within ORS, please send an e-mail toa [markbrightbaraka@gmail.com](mailto:markbrightbaraka@gmail.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
