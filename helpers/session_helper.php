<?php
if (!session_id()) {
    session_start();
}

function setFlashMessage($name, $message, $class = 'form-message form-message-red')
{
    $_SESSION[$name] = $message;
    $_SESSION[$name . '_class'] = $class;
}

function displayFlashMessage($name)
{
    if (isset($_SESSION[$name])) {
        $class = isset($_SESSION[$name . '_class']) ? $_SESSION[$name . '_class'] : 'form-message form-message-red';
        echo '<div class="' . $class . '">' . $_SESSION[$name] . '</div>';
        unset($_SESSION[$name]);
        unset($_SESSION[$name . '_class']);
    }
}

function redirect($location)
{
    header("Location: $location");
    exit();
}
?>