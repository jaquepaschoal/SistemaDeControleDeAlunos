<?php
include_once "auto.php";

class LoginControle {

  function openLogin() {
    require_once "view/login.php";
  }


  function openHome() {
    require_once "view/adm_home.php";
  }
}