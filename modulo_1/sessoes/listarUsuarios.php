<?php
session_start();
require_once "ManipulaSessoes.php";
(new ManipulaSessoes())->buscaTodosUsuarios();
