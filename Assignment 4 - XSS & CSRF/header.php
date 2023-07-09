<?php

// XSS
session_start(['cookie_httponly' => true]);

// ini_set('session.gc_maxlifetime', 1800); // Set session timeout to 30 minutes

// CSP
header("X-Frame-Options: SAMEORIGIN");
header("Content-Security-Policy: default-src 'self'");

// CSRF
if (!isset($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32)); // Generate a random token
}

$csrfToken = $_SESSION['csrf_token'];


header("Content-Security-Policy: default-src 'self' *.google.com ; script-src 'self' 'unsafe-inline'; style-src 'self' 'unsafe-inline' https://fonts.googleapis.com https://cdnjs.cloudflare.com/ ; img-src 'self' data:; font-src 'self' https://cdnjs.cloudflare.com/ https://fonts.gstatic.com ;");
header("Strict-Transport-Security: max-age=31536000; includeSubDomains; preload");
header("X-Content-Type-Options: nosniff");
header("Referrer-Policy: same-origin");
header("X-XSS-Protection: 1; mode=block");

?>