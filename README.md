# User-Registration-System
For any CMS application, User Registration & Login system is a very basic requirement. This is an initial work while starting a project. <br /> 
A User Registartion / Login System serves many purposes : 
  - A way for people to sign up for your event
  - One of the first impressions people get about your event brand
  - A data-collection tool that’s critical to your event planning <br />
  
This repository is about the same, where the user initially sees a **Home Page**, then registers him/herself and once he/she is logged in, he/she sees something called as a **Dashboard Page**. <br />
This simple implementation of the **User Registration & Login System** was done using **PHP** & **MySQL** Database.   
<br />

# Setting Up The Environment
- Make sure that the `XAMPP` server is installed on your system.

- Clone this repository in your local system. <br> 
  Open the command line and type the following command <br />
    `git clone https://github.com/shubhamjha25/User-Registration-System`
    
- Once you have cloned the repository, move it to the `C:\xampp\htdocs` folder.

- Creating the Database and Database Table <br />
  Log in to the **PHPMyAdmin** and then create the database using the follwing command <br />
  `CREATE DATABASE LoginSystem;` <br />
  
  Once the database is successfully created, the create a table using the following SQL query <br />
  
  *CREATE TABLE IF NOT EXISTS `` `users` ``* ( <br />
  *`` `id` `` int(11) NOT NULL AUTO_INCREMENT,* <br />
 *`` `username` `` varchar(50) NOT NULL,* <br />
 *`` `email` `` varchar(50) NOT NULL,* <br />
 *`` `password` `` varchar(50) NOT NULL,* <br />
 *`` `create_datetime` `` datetime NOT NULL,* <br />
  *PRIMARY KEY (`` `id` `` )* <br />
  *);* <br />
  
  (**Note** : You can give any name to the database and the table. Make sure to give correct names while connecting to the database.)
- Connecting to the Database <br />
  In the file `server\databse.php` on Line 2, Mention the correct name of the database. If you have set the database password on localhost then mention it otherwise, leave it empty.<br />
  `$con = mysqli_connect("localhost","root"," ","LoginSystem");` <br />
  
- With this, we are done. Start the **Apache** & **MySQL** servers from the *XAMPP Control Panel* and open the `index.php` file in the localhost to use the Login System. 
<br />

## Bug / Feature Request
If you find a bug (the application couldn't handle the query and / or gave undesired results), kindly open an issue [here](https://github.com/shubhamjha25/User-Registration-System/issues/new) by including your search query and the expected result.
If you'd like to request a new function, feel free to do so by opening an issue [here](https://github.com/shubhamjha25/User-Registration-System/issues/new). Please include sample queries and their corresponding results. <br />
<br />

This was my first try on backend web development. If you liked it, show some ❤ by starring the repository.
