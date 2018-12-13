<?php require admin_view('static/header');?>

    <div class="box-">
        <h1>
            View Message 
        </h1>
    </div>

    <div class="clear" style="height: 10px;"></div>
    <?php if($row['contact_read_user'] == 1 ): ?>
            <div class="message success box-">
                Message Date : <?=$row['contact_date']?>
                <br>
                <?=timeConvert($row['contact_read_date'])?> <strong></strong>Read by <strong><?=$row['user_name']?></strong> 
            </div>
        <?php endif; ?>

    <div class="box-">
        
        
        <form action="" method="post" class="form label">
            <ul>
                <li>
                    <label>Name</label>
                    <div class="form-content" style="padding-top:12px;">
                       <?=$row['contact_name']?>
                    </div>
                </li>
                <li>
                    <label>E-Mail</label>
                    <div class="form-content" style="padding-top:12px;">
                       <?=$row['contact_email']?>
                    </div>
                </li>
                <?php if($row['contact_phone']):?>
                <li>
                    <label>Phone</label>
                    <div class="form-content" style="padding-top:12px;">
                       <?=$row['contact_phone']?>
                    </div>
                </li>
                <?php endif;?>
                <li>
                    <label>Subject</label>
                    <div class="form-content" style="padding-top:12px;">
                       <?=$row['contact_subject']?>
                    </div>
                </li>
                <li>
                    <label>Message</label>
                    <div class="form-content" style="padding-top:12px;">
                       <?= nl2br($row['contact_message']) ?>
                    </div>
                </li>
            </ul>
        </form>
    </div>


<?php require admin_view('static/footer');?>