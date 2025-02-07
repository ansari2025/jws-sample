<?php

// Include the file
require 'token.php';

// Define a key
const KEY = 'thisisademokey';

// Generate token
$token = Token::Sign(['id' => 'demoid'], KEY, 60*5);


// Vefity token
$payload = Token::Verify($token, KEY);
