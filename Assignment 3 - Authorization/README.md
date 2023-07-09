# Assignment 3 Web Application Security

## Enhanced details.php
Add login and logout button at the top of the page. Removed the requirement to login first from assignment 2; all users can access and view the forms, but only users with successful login can submit the forms (Submit button is shown when user is successfully logging in). Below login and logout button is added Welcome! greeting. Normal viewer will have this as "Welcome! Guest" but user with successful login will have "Welcome!" followed by their email. Login button is only shown when the role is guest (user without logging in), and logout button is shown to the user that has logged in.

## logout.php
Used for user to log out. After the user clicks on the logout button, they will be redirected again to the forms and the welcome greeting is changed into "Welcome! User" indicating they are now is a guest not a logged in user.

## User roles
Have two roles here which are guest and user. "Guest" is the normal viewer of the page, and they can only view the forms and cannot submit the details. "User" is the user that has successfully logging in, and they can submit the details in the forms.
