<?php $encrypted_mypassword=md5("Hello"); //MD5 Hash for security
echo "$encrypted_mypassword";
$decrypted_mypassword=md5($encrypted_mypassword);
echo "$decrypted_mypassword";
?>