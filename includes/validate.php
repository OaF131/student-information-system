<?php

function validateEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

function validatePersonalCode($code) {
    return preg_match('/^[0-9]{11}$/', $code);
}

function formatName($name) {
    return ucfirst(strtolower($name));
}

?>
