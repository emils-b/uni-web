<?php

function isLoggedIn():bool
{
    return $_SESSION['loggedIn'];
}

function setIsAuthorised():void
{
    $_SESSION['loggedIn'] = true;
}

function unsetIsAuthorised():void
{
    unset($_SESSION['loggedIn']);
}
