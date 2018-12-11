<?php 
if(!permission('index','show'))
{
    permission_page();
    exit;
}

require admin_view('index');