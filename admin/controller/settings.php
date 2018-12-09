<?php 
$themes = [];
foreach (glob(PATH . '/app/view/*/') as $folder) {
    $folder = explode('/' , rtrim($folder , '/'));
    $themes[]=  end($folder);
}

if(post('submit'))
{
    $html = '<?php'.PHP_EOL.PHP_EOL;
    foreach(post('settings') as $key => $val){
        $html .= '$settings["'. $key .'"] = "'. $val .'";'.PHP_EOL;
    }
    file_put_contents(PATH . '/app/settings.php' , $html);
    sleep(1);
    header('Refresh:0;url=' . admin_url('settings'));
}

require admin_view('settings');