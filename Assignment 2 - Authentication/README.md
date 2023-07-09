# Assignment 2 Web Application Security

## login.html and register.html
User submit their credentials first before they can have the access to the student details forms. If they have no account yet, they need to register first. Input required is email and passowrd.

## login.php
This is where the processing of the credentials happens. Database in mySQL will be connected first and then the input is sanitized and password is hashed too. Database will check the credentials based on the registration submission done by the user. If there is no account, error will be shown prompting the user to the register page.

## register.php
Same as login.php but the difference is inserting the registration details into the database. After successful registration, user will be prompt to login.html so they can insert their details there and then accessing the forms.

## Session Management
session_start() is added at the beginning of each page as session of the user. Without logging in first, the user will be redirected to login.html for authentication process of the user. After successful login, user is now can access the forms of student details.
