<?php
$meta = [
    'title' => 'Login'
];
if(post('submit'))
{
    
    $username = post('username');
    $password = post('password');

    if(!$username)
    {
        $error = 'Username required.';
    }  elseif(!$password){
        $error = 'Password required.';
    }  else {
           //User control
            $row = User::userExist($username);

            if($row){
                //Password Control
                $password_verify = password_verify($password,$row['user_password']);
                if($password_verify){
                        $success = 'You are in! Redirecting...';
                        User::Login($row);
                        header('Refresh:2;url=' . site_url());
                } else {
                    $error = 'Invalid password';
                }
                
            } else{
                $error = 'User not found.';
            }
    }

}
require view('login');
