<?php

function is_username_valid($username)
{
  $lowercase = preg_match("/^[a-z]*$/",$username);

  if (!$lowercase || strlen($username) != 8) {
    echo "false";
  }
  else {
    echo "true";
  }
}

function is_email_valid($email) {
    $pecahEmail = explode("@", $email);
    $panjangNama = strlen($pecahEmail[0]);
    $uppercase = preg_match('@[A-Z]@', $email);
    $lowercase = preg_match('@[a-z]@', $email);
    $email = filter_var($email, FILTER_VALIDATE_EMAIL);

    if ($panjangNama != 4 || !$panjangNama || !$uppercase || !$lowercase || !$email) {
      echo "false";
    }
    else {
      echo "true";
    }
}

//jalankan fungsi di bawah

is_username_valid('zeronull');
echo "\n";
echo is_email_valid('aku@kamu.com');
echo "\n";
echo is_email_valid('Kamu@aku.com');

?>
