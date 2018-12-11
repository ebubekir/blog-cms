<?php 

function admin_controller($controllerName){
    $controllerName = strtolower($controllerName);
    return PATH . '/admin/controller/' . $controllerName . '.php';
}

function admin_view($viewName){
    return PATH . "/admin/view/" . $viewName . '.php';
}

function admin_url($url = false){
    
    return URL . "/admin/" . $url;
}

function admin_public_url($url = false) {

    return URL . "/admin/public/" . $url;
}

function user_ranks($rankid = null){
    $ranks = [
        1 => 'Admin',
        2 => 'Editor',
        3 => 'Member'
    ];
    return $rankid ? $ranks[$rankid] : $ranks;
}

function permission($url,$action){
    $permissions = json_decode(session('user_permissions'),true);
    if(isset($permissions[$url][$action])){
        return true;}
    return false;
}

function permission_page(){
    require admin_view('permission-denied');
    exit;
}