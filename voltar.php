<?php

if(!isset($_SESSION)) {
    session_start();
}

header("Location: index.html");