<?php

if( post('submit') )
{
    if($data = form_control()){
        $row = $db->from('users')
                ->where('user_url',permalink($data['user_name']))
                ->where('user_rank',3,'!=')
                ->first();
        if(!$row){
            $error = 'Username or password invalid.';
        } else {
            $password_verify = password_verify($data['user_password'],$row['user_password']);
            if($password_verify){
                    if($row['user_rank'] == 3)
                    {
                        $error = 'You are not  allowed to enter this page';
                    } 
                    else {
                    User::Login($row);
                    header('Location:' . admin_url());
                    }
            } else{
                $error = 'Invalid password';
            }
        }

    } else {
        $error = 'Username or password invalid.';
    }
}


require admin_view('login');