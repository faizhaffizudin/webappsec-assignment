# Assignment 1 Web Application Security

## index.html
Page for the user to submit their student details in the forms provided. Regex is used for the input for early validation.

## details.php
This is where the processing of the input submitted happens. Regex is used for name, matric number and mobile phone and home phone for late validation. If there is any error, the error will be pushed at the forms. If none, all the details submitted is shown.

## validate.js
Used to detect the wrong input submitted for the user. This file is for input validation when the user submits their details. The Validate() function is activated when the user click the Submit button in the forms.

