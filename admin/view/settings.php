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
                        <input type="text" name="settings[title]" value="<?=post('settings[title]') ? post('settings[title]') : setting('title') ?>">
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
                </ul>
                <h1>Theme Settings</h1>
            <ul>
                <li>
                    <label>Logo Title</label>
                    <div class="form-content">
                        <input type="text" name="settings[logo-title]" value="<?=setting('logo-title')?>">
                    </div>
                </li>
                <li>
                    <label>Search Input Placeholder</label>
                    <div class="form-content">
                        <input type="text" name="settings[search-placeholder]" value="<?=setting('search-placeholder')?>">
                    </div>
                </li>
                <li>
                    <label>Welcome Title</label>
                    <div class="form-content">
                        <input type="text" name="settings[welcome-title]" value="<?=setting('welcome-title')?>">
                    </div>
                </li>
                <li>
                    <label>Welcome Text</label>
                    <div class="form-content">
                        <textarea name="settings[welcome-text]"  cols="30" rows=5><?=setting('welcome-text')?></textarea>
                    </div>
                </li>
                <li>
                    <label>Footer About Text</label>
                    <div class="form-content">
                        <textarea name="settings[footer-about]"  cols="30" rows=5><?=setting('footer-about')?></textarea>
                    </div>
                </li>
                <li>
                    <label>Facebook Username</label>
                    <div class="form-content">
                        <input type="text" name="settings[facebook]" value="<?=setting('facebook')?>">
                    </div>
                </li>
                <li>
                    <label>Twitter Username</label>
                    <div class="form-content">
                        <input type="text" name="settings[twitter]" value="<?=setting('twitter')?>">
                    </div>
                </li>
                <li>
                    <label>Instagram Username</label>
                    <div class="form-content">
                        <input type="text" name="settings[instagram]" value="<?=setting('instagram')?>">
                    </div>
                </li>
                <li>
                    <label>Linkedin Username</label>
                    <div class="form-content">
                        <input type="text" name="settings[linkedin]" value="<?=setting('linkedin')?>">
                    </div>
                </li>
            </ul>
                <h1>Maintenance Mode Settings</h1>
            <ul>
                <li>
                    <label>Maintenance Mode</label>
                    <div class="form-content">
                        <select name="settings[maintenance-mode]">
                             <option <?= setting('maintenance-mode') == 1 ? 'selected' : null ?> value="1">Enable</option>
                             <option <?= setting('maintenance-mode') == 2 ? 'selected' : null ?> value="2">Disable</option>
                        </select>
                    </div>
                </li>
                <li>
                    <label>Maintenance Mode Title</label>
                    <div class="form-content">
                        <input type="text" name="settings[maintenance-mode-title]" value="<?=setting('maintenance-mode-title')?>">
                    </div>
                </li>
                <li>
                    <label>Maintenance Mode Description</label>
                    <div class="form-content">
                        <textarea name="settings[maintenance-mode-desc]"  cols="30" rows=5><?=setting('maintenance-mode-desc')?></textarea>
                    </div>
                </li>
            </ul>

            <ul>
                <li class="submit">
                    <input type="hidden" name="submit" value="1">
                    <button type="submit">Save Changes</button>
                </li>
            </ul>
            </ul>
        </form>
    </div>

<?php require admin_view('static/footer');?>