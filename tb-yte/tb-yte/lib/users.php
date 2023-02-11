<?php
function check_login($username, $password){
    global $list_users;
    foreach($list_users as $user){
        if($username == $user['username'] && $password == $user['password']){
            $_SESSION['user_id'] = $user['user_id'];
            return true;
        }
    }
    return false;
}
function check_admin($username, $password){
    global $list_users;
    foreach($list_users as $user){
        if($username == 'admin123' && $password == 'Admin.123'){
              $_SESSION['user_id'] = $user['user_id'];
            return true;
        }
    }
    return false;
}
function is_login(){
    if(isset($_SESSION['is_login']))
        return true;
    return false;
}
function admin_login(){
    global $username, $password;
    if(is_login()){
        if(check_admin($username, $password))
            return true;
    }
    return false;
}
function user_login(){
    if(!empty($_SESSION['user_login']))
        return $_SESSION['user_login'];
    return false;
}
function info_user($field = 'id'){
    global $list_users;
    if(isset($_SESSION['is_login'])){
        foreach($list_users as $user){
            if($_SESSION['user_login'] == $user['username']){
                if(array_key_exists($field, $user))
                        return $user[$field];
            }
        }
    }
    return false;
}
?>