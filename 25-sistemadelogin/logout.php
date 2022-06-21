<?php
//Conexão
require_once('db_connect.php');

//Sessão
session_start();
session_unset();
session_destroy();
header('Location:index.php');