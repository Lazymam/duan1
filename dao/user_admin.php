<?php
function get_user_username_pass($user,$pass){
    $sql = "SELECT * FROM user WHERE username=? AND password=?";
    return pdo_query_one($sql, $user,$pass);
}
?>  