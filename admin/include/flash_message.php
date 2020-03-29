<?php


// flash message notification
function hello($name, $text = '')
{
    if (isset($_SESSION[$name])) {
        $message = $_SESSION[$name];
        unset($_SESSION[$name]);
        return $message;
    } else {
        $_SESSION[$name] = $text;
    }

    return '';
}
