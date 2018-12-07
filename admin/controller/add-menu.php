<?php

if(post('submit'))
{
    $menu = [];
    $menu_title = post('menu_title');
    if(!$menu_title)
    {
        $error = 'Please type menu title';
    }elseif(count(array_filter(post('title'))) == 0 ){
        $error = "You must have at least one item.";
    } else {
        $urls = post('url');
        foreach (post('title') as $key => $title) {
            $arr [] = [
                'title' => $title,
                'url' => $urls[$key]
            ];
            if(post('sub_title_'.$key))
            {
                $submenu = [];
                $suburls = post('sub_url_'.$key);
                foreach (post('sub_title_'.$key) as $k => $subtitle) {
                    $submenu[] = [
                            'title' => $subtitle,
                            'url' => $suburls[$k]
                    ];
                }
                $arr['submenu'] = $submenu;
            }
            $menu[] = $arr;
        }
        //Add to database
        $query = $db -> prepare('INSERT INTO menu
                SET menu_title = :menu_title,
                    menu_content = :menu_content');
        $result = $query -> execute([
                'menu_title' => $menu_title,
                'menu_content' => json_encode($menu)
        ]);
        if($result)
        {
            header('Location:' . admin_url('menu'));
        } else {
            $error = 'An error occured.';
        }
    }
}

require admin_view('add-menu');
