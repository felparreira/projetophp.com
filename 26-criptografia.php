<?php
$senha = "1234567";

$senha_db = '$2y$10$XY3V6IGECYB2TJaAhKSr8uyVjUHPFVjc3DWM81WtwpDFHcr/TUvKi';

if(password_verify($senha, $senha_db)):
    echo "Senha váldia";
else:
    echo "Senha inváldia";
endif;