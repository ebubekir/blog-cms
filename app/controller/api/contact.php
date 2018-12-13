<?php 

if($data = form_control('phone')){

    if(!filter_var($data['email'], FILTER_VALIDATE_EMAIL)  ){
        $json['error'] = 'Invalid E-Mail address';
        exit;
    }
    //Add to database
    $query = $db->insert('contact')
                ->set([
                    'contact_name'=> $data['name'],
                    'contact_email' => $data['email'],
                    'contact_phone' => $data['phone'],
                    'contact_subject' => $data['subject'],
                    'contact_message' => $data['message']    
                ]);
    if($query){
        $json['success'] = 'Your message has reached us. Thanks.';
    } else {
        $json['error'] = 'An error occured.';
    }
} else {
    $json['error'] = 'Please fill all inputs.';
}