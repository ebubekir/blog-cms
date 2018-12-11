<?php require admin_view('static/header');?>

    <div class="box-">
        <h1>
            Edit User 
        </h1>
    </div>

    <div class="clear" style="height: 10px;"></div>

    <div class="box-">
        <form action="" method="post" class="form label">
            <ul>
                <li>
                    <label>Username</label>
                    <div class="form-content">
                        <input name="user_name" value="<?=post('user_name') ? post('user_name'): $row['user_name'] ?>"type="text" id="title">
                    </div>
                </li>
                <li>
                    <label>E-Mail</label>
                    <div class="form-content">
                        <input name="user_email" value="<?=post('user_email') ? post('user_email') : $row['user_email']?>"type="text" id="title">
                    </div>
                </li>
                <li>
                    <label>Rank</label>
                    <div class="form-content">
                        <select name="user_rank">
                            <option value="">-Select Rank-</option>
                            <?php foreach(user_ranks() as $id => $rank): ?>
                                     <option <?=(post('user_rank') ? post('user_rank') : $row['user_rank'] )  == $id ? 'selected' : null?> value="<?=$id?>"><?=$rank?></option>
                            <?php endforeach;?> 
                        </select>
                    </div>
                </li>
                <li>
                    <label>Permissions</label>
                    <div class="form-content">
                        <div class="permissions">
                            <?php foreach($menus as $url => $menu): ?>
                                <div>
                                    <h3><?=$menu['title']?></h3>
                                    <div class="list">
                                        <?php foreach($menu['permissions'] as $key =>$val ):?>
                                            <label>
                                                <input <?=isset($permissions[$url][$key]) && isset($permissions[$url][$key]) == 1 ? ' checked':null ?> name="user_permissions[<?=$url?>][<?=$key?>]" value="1" type="checkbox">
                                                <?=$val?>
                                            </label>
                                        <?php endforeach;?>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <style>
                        .permissions{
                            border:1px solid #ccc;
                            background:#fff;
                            max-width:400px;
                            padding:10px;
                        }
                        .permissions h3{
                            font-weight:bold;
                        }
                        .permissions div:last-child .list{
                            padding-bottom:0px;
                        }
                        .permissions .list{
                            padding-bottom:15px;
                        }
                        .permissions .list label{
                            float:none !important;
                            display:inline-block;
                            width:auto !important;
                            font-weight:normal !important;
                            margin-right:10px;
                        }
                    </style>
                </li>
                <li class="submit">
                    <button name="submit" value="1"type="submit">Save Changes</button>
                </li>

            </ul>
        </form>
    </div>


<?php require admin_view('static/footer');?>