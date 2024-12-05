<?php

session_start();//session continue
unset($_SESSION);
session_destroy();

header('location: login.php');