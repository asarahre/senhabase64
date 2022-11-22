<?php

define('SENHA2', md5('123'));


$senha = md5($_POST['senha']);


if ($senha == SENHA2) {
  echo ("Senha correeta" . $senha);
  echo ("Senha correeta" . SENHA2);
} else {
  echo ("Senha incorreta");
}