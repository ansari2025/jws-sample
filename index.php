<?php

// Include the file
require 'token.php';

// Define a key
const KEY = 'testkey';

// Generate token
$token = token::Sign(['id' => 'std_id'],['stu_type' => 'stu_type'], KEY, 60*5);


// Vefity token
$payload = token::Verify($token, KEY);
