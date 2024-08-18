<?php

session_start();

// Flash message helper.
// Example - flash('register_success', 'You are now registered', 'alert alert-danger);
// Display in view: echo flash('register_success');
function flash($name = '', $message = '', $class = 'alert alert-success') {
    if (empty($name)) {
        return; // No name provided, do nothing
    }

    // If message is provided, store it in session
    if (!empty($message)) {
        $_SESSION[$name] = $message;
        $_SESSION[$name . '_class'] = $class;
    } 
    // If no message is provided, but a flash message exists, display it
    elseif (!empty($_SESSION[$name])) {
        $class = $_SESSION[$name . '_class'] ?? '';
        echo '<div class="' . htmlspecialchars($class, ENT_QUOTES, 'UTF-8') . '" id="msg-flash">'
           . htmlspecialchars($_SESSION[$name], ENT_QUOTES, 'UTF-8') 
           . '</div>';
        // Clear the flash message from session
        unset($_SESSION[$name]);
        unset($_SESSION[$name . '_class']);
    }

}
