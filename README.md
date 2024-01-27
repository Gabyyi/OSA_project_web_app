# OSA_project_web_app
#### Requires mariadb or mysql database with user and password.
#### Replace `"user"` and `"password"` with your username and password.
## `dealerauto.php` is the main web page.
## `login.html` grants access to `dealer_admin.php`.
#### Requires the following tables:
```
CREATE TABLE dealer (
    id int NOT NULL AUTO_INCREMENT,
    brand varchar(255) NOT NULL,
    model varchar(255) NOT NULL,
    mileage int(10) NOT NULL,
    fuel_type varchar(255) NOT NULL,
    year int(10) NOT NULL,
    price int(10) NOT NULL,
    image varchar(255) NOT NULL,
    PRIMARY KEY (id)
); 
```
