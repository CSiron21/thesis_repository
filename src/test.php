<?php
session_start();
var_dump($_SERVER['HTTP_X_CSRF_TOKEN'] ?? null);
var_dump($_SESSION['csrf_token'] ?? null);
var_dump($_POST);
