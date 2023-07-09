# Assignment 4 Web Application Security

## header.php
Where the implementation occurs. CSP, XSS and CSRF defense is added here so every page can have the same defense. All file is added with ```include 'header.php';``` to standardize the defense

## Same Origin Policy and Content Security Policy Implementation
- Implement ```header("X-Frame-Options: SAMEORIGIN");``` and ```header("Content-Security-Policy: default-src 'self'");```

## XSS Defense
- Implement HttpOnly at the session_start() as ```session_start(['cookie_httponly' => true]);```

## Better CSRF Defense
- Implement CSRF token
- Add ```<input type="hidden" name="csrf_token" value="<?php echo $csrfToken; ?>">``` at the beginning of each forms.

## References
- https://developer.mozilla.org/en-US/docs/Web/HTTP/CSP
- https://alexwebdevelop.com/php-csrf-tokens/
- https://www.php.net/manual/en/function.session-set-cookie-params.php