<?php 
    echo __FILE__;
    // /Applications/MAMP/htdocs/php_learning/mainte/test.php
    echo '<br>';
    // パスワード暗号化
    echo (password_hash('password123', PASSWORD_BCRYPT));
    

    // $contactFile = '.contact.dat';


    // $fileContents = file_get_contents($contactFile);

    // echo $fileContents;

    // file_put_contents($contactFile, 'テストです。');

     
?>