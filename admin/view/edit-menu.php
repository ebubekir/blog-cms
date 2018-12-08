<?php require admin_view('static/header');?>
<div class="box- menu-container">
    <h2>Edit Menu (#<?=$id?>)</h2>
    <form action="" method="post">
        <div style="padding-bottom:10px;max-width:400px;">
            <input type="text" name="menu_title" value="<?=post('menu_title') ? post('menu_title') : $row['menu_title'];?>" placeholder="Menu Title">
        </div>
        <ul id="menu" class="menu">
            
        <?php foreach ($menuData as $key => $menu):?>
            <li>
            <div class="handle"><i class="fa fa-arrows-alt"></i></div>
                <div class="menu-item">
                    <a href="#" class="delete-menu">
                        <i class="fa fa-times"></i>
                    </a>
                    <input name="title[]" type="text" value="<?=$menu['title']?>"placeholder="Name">
                    <input name="url[]" type="text" value="<?=$menu['url']?>" placeholder="Link">
                </div>
                <div class="sub-menu">
                        <ul class="menu"> 
                            
                            <?php if(isset($menu['submenu'])):?>
                                <?php foreach($menu['submenu'] as $k => $submenu ):?>
                                
                                <li>
                                <div class="handle"><i class="fa fa-arrows-alt"></i></div>
                                    <div class="menu-item">
                                        <a href="#" class="delete-menu">
                                            <i class="fa fa-times"></i>
                                        </a>
                                        <input type="text" name="sub_title_<?=$key?>[]" value="<?=$submenu['title']?>" placeholder="Menü Adı">
                                        <input type="text" name="sub_url_<?=$key?>[]" value="<?=$submenu['url']?>" placeholder="Menü Linki">
                                    </div>
                                </li>
                                <?php endforeach;?> 
                            <?php endif; ?>
                            
                        </ul>
                 
                 </div>
                <a href="#" class="btn add-submenu">Add Sub Menu</a>
            </li>
        <?php endforeach;?>
        </ul>
        <div class="menu-btn">
            <a href="#" id="add-menu"class="btn">Add New Item</a>
            <button type="submit" value="1" name="submit">Save</button>
        </div>
    </form>
</div>
<script>
    $(function(){
        $('#add-menu').on('click' , function(e){
            $('#menu').append('<li>\n' +
            '                    <div class="handle"><i class="fa fa-arrows-alt"></i></div><div class="menu-item">\n' +
            '                        <a href="#" class="delete-menu">\n' +
            '                            <i class="fa fa-times"></i>\n' +
            '                        </a>\n' +
            '                        <input type="text" name="title[]" placeholder="Name">\n' +
            '                        <input type="text" name="url[]" placeholder="Link">\n' +
            '                    </div>' +
                                '<div class="sub-menu"><ul></ul></div>\n' +
            '                    <a href="#" class="add-submenu btn">Add Sub Menu</a>\n' +
            '                </li>');

                e.preventDefault();
                
        });

                    
        $(document.body).on('click', '.add-submenu', function (e) {
            var index = $(this).closest('li').index();
                $(this).prev('.sub-menu').find('ul').append('<li>\n' +
'                                <div class="handle"><i class="fa fa-arrows-alt"></i></div><div class="menu-item">\n' +
'                                    <a href="#" class="delete-menu">\n' +
'                                        <i class="fa fa-times"></i>\n' +
'                                    </a>\n' +
'                                    <input type="text" name="sub_title_' + index + '[]" placeholder="Name">\n' +
'                                    <input type="text" name="sub_url_' + index + '[]" placeholder="Link">\n' +
'                                </div>\n' +
'                            </li>');
                e.preventDefault();
            });

        $(document.body).on('click', '.delete-menu', function (e) {
                if ($('#menu li').length === 1){
                    alert('You must have at least one item.');
                } else {
                    $(this).closest('li').remove();
                }
                e.preventDefault();
            });
    });
</script>
    <?php require admin_view('static/footer');?>