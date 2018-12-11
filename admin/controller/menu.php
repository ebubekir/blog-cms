<?php
if(!permission('menu','show'))
{
    permission_page();
    exit;
}
$query = $db -> prepare('SELECT * FROM menu ORDER BY menu_id DESC');
$query->execute();
$rows = $query->fetchAll(PDO::FETCH_ASSOC);
require admin_view('menu');