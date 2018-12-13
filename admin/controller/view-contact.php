<?php
if(!permission('contact','edit'))
{
    permission_page();
    exit;
}
$id = get('id');
if(!$id){
    header('Location:' . admin_url('contact'));
    exit;
}

$row = $db->from('contact')
        ->join('users','%s.user_id= %s.contact_read_user','left')
        ->where('contact_id',$id)
        ->first();

if(!$row){
    header('Location:' . admin_url('contact'));
    exit;
}

if($row['contact_read'] == 0){
        $db->update('contact')
            ->where('contact_id',$id)
            ->set([
                'contact_read' => 1,
                'contact_read_date' => date('Y:m:d H:i:s'),
                'contact_read_user' => session('user_id')
            ]);
}

if(post('submit'))
{
    if($data = form_control('contact_permissions')){
            $data['user_url'] = permalink($data['contact_name']);
            $data['user_permissions'] = json_encode($_POST['user_permissions']);
            $query = $db->update('contact')
            ->where('user_id',$id)
            ->set($data);
            if($query){
                header('Location:' . admin_url('users'));
            }else {
                $error = "An error occured.";
            }
    } else {
        $error = 'There is  blank input(s). Please control again.';
    }
}
require admin_view('view-contact');