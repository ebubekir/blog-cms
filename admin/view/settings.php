<?php require admin_view('static/header');?>

   <div class="box-">
        <h1>
            Settings
        </h1>
    </div>

    <div class="clear" style="height: 10px;"></div>

    <div class="box-">
        <form action="" method="post" class="form label" >
            <ul>
                <li>
                    <label>Site Title</label>
                    <div class="form-content">
                        <input type="text" name="settings[title]" value="<?=setting('title')?>">
                    </div>
                </li>
                <li>
                    <label>Site Description</label>
                    <div class="form-content">
                        <input type="text" name="settings[description]" value="<?=setting('description')?>">
                    </div>
                </li>
                <li>
                    <label>Site Keywords</label>
                    <div class="form-content">
                        <input type="text" name="settings[keywords]" value="<?=setting('keywords')?>">
                    </div>
                </li>
                <li>
                    <label>Site Template</label>
                    <div class="form-content">
                        <select name="settings[theme]">
                             <option>Select theme...</option>
                             <?php foreach ($themes as $theme): ?>
                                    <option <?= setting('theme') == $theme ? 'selected' :null?> value="<?= $theme ?>"><?= $theme ?></option>
                             <?php endforeach; ?>
                        </select>
                    </div>
                </li>
                <li class="submit">
                    <input type="hidden" name="submit" value="1">
                    <button type="submit">Save Changes</button>
                </li>
            </ul>
        </form>
    </div>

<?php require admin_view('static/footer');?>