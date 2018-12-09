<?php
$meta = [
    'title' => 'Register'
];
if(post('submit'))
{
    
    $username = post('username');
    $email = post('email');
    $password = post('password');
    $password_confirm = post('password-confirm');

    if(!$username)
    {
        $error = 'Username required.';
    } elseif(!$email)    {
        $error = 'E-Mail required.';
    } elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $error = 'Invalid E-Mail';
    } elseif(!$password || !$password_confirm){
        $error = 'Password required.';
    } elseif($password != $password_confirm){
        $error = 'Passwords do not match.';
    } else {
           //User control
            $row = User::userExist($username,$email);
            if($row){
                $error = 'This username or e-mail already exist.';
            } else {
                //Add user
                $result = User::Register([
                    'username' => $username,
                    'userurl' => permalink($username),
                    'email' => $email,
                    'password' => password_hash($password,PASSWORD_DEFAULT)
                ]);
                if($result){
                    $success = 'Registration completed. You redirecting';
                    User::Login([
                        'user_id' => $db->lastInsertId(),
                        'user_name' => $username,
                        'user_rank' => 3
                    ]);
                    header('Refresh:2;url='.site_url());
                } else {
                    $error = 'A problem occured. Please try again later.';
                }
            }
    }

}
require view('register');
