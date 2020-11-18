<?php
#パスワードの記録場所
echo __FILE__;
#/Applications/MAMP/htdocs/php_test/mainte/test.php

#パスワードの暗号化
echo "<br>";
echo(password_hash("password123", PASSWORD_BCRYPT));
