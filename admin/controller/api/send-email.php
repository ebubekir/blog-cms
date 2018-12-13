<?php

if($data = form_control()){
  $send = send_email( $data['email'],$data['name'],$data['subject'],nl2br($data['message']));
  if($send){
    $json['success'] = 'Message sended.';
  } else{
    $json['error'] = 'An error occured.';
  }
} else {
  $json['error']  ='Please fill all inputs.';
}
