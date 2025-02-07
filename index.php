<?php

// Include the file
require 'Token.php';

// Define a key
const KEY = 'testkey';

// Generate token
$token = Token::Sign(['stu_type' => 'type'], KEY, 60*5);


// Vefity token
$payload = Token::Verify($token, KEY);
