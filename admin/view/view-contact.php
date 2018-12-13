<?php require admin_view('static/header');?>

    <div class="box-">
        <h1>
            View Message
        </h1>
    </div>

    <div class="clear" style="height: 10px;"></div>

    <div class="box-container container-50">

      <?php if($row['contact_read'] == 1 ): ?>
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

</div>

<div class="box-container container-50">
        <div class="box" id="div-3">
            <h3>
                Reply Message
            </h3>

            <div class="box-content">

                    <div class="message success box-" style="display:none" id="success"></div>
                    <div class="message error box-" style="display:none" id="error"></div>

                <form action="" id="email-form" onsubmit="return false;" class="form">
                  <input type="hidden" name="name" value="<?=$row['contact_name']?>">
                    <ul>
                        <li>
                            <label for="title" class="title">Message Title</label>
                            <input name="subject" value="Re: <?=$row['contact_subject']?>" type="text" id="title">
                        </li>
                        <li>
                            <label for="title" class="title">E-Mail</label>
                            <input name="email" value="<?=$row['contact_email']?>" type="text" id="title">
                        </li>
                        <li>
                            <label for="message" class="title">Message</label>
                            <textarea name="message" id="message" cols="30" rows="5"></textarea>
                        </li>
                        <li>
                            <button onclick="send_email('#email-form')" type="submit">Submit</button>
                        </li>
                    </ul>
                </form>
            </div>
        </div>
    </div>
<?php require admin_view('static/footer');?>
