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
                <li class="submit">
                    <button name="submit" value="1"type="submit">Save Changes</button>
                </li>
            </ul>
        </form>
    </div>


<?php require admin_view('static/footer');?>