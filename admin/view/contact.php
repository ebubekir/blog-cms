<?php require admin_view('static/header');?>

    <div class="box-">
        <h1>
            Inbox
            <!-- <a href="#">Add New</a> -->
        </h1>
    </div>

    <div class="clear" style="height: 10px;"></div>

    <div class="table">
        <table>
            <thead>
                <tr>
                    <th width="100">&nbsp;</th>
                    <th>From</th>
                    <th class="hide">Subject</th>
                    <th class="hide">Date</th>
                    <th>View / Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($query as $row):?>
                <tr>
                    <td>
                        <?php if($row['contact_read'] == 1):?>
                            <div style="background:green;text-align:center;color:#fff;padding:3px 6px;border-radius:3px;">
                                Readed.
                            </div>
                        <?php else:?>
                            <div style="background:red;text-align:center;color:#fff;padding:3px 6px;border-radius:3px;">
                                    Not Readed.
                            </div>
                        <?php endif; ?>
                    </td>
                    <td>
                        <p>
                            <?=$row['contact_name']?> (<?=$row['contact_email']?>)
                        </p>
                        <?=$row['contact_phone']?>
                    </td>
                    <td class="hide">
                        <?=$row['contact_subject']?>
                    </td>
                    <td class="hide">
                        <?=timeConvert($row['contact_date'])?>
                        <?php if($row['contact_read_date']):?>
                            <div style="color:#999;font-size:12px;">
                            Read Date : <?=timeConvert($row['contact_read_date'])?>
                            <br>
                            <strong>By </strong><?=$row['user_name']?>
                            </div>
                        <?php endif; ?>
                    </td>

                    <td>
                        <?php if (permission('contact','edit')):?>
                        <a href="<?=admin_url() . 'view-contact?id='.$row['contact_id']?>" class="btn">View</a>
                        <?php endif;?><?php if (permission('users','delete')):?>
                        <a onclick="return confirm('Are you sure?')" href="<?=admin_url('delete?table=contact&column=contact_id&id='.$row['contact_id'])?>" class="btn">Delete</a>
                        <?php endif;?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <?php if($totalRecord > $pageLimit):?>
    <div class="pagination">
        <ul>
            <?=$db->showPagination( admin_url( route(1) ) . '?'.$pageParam.'=[page]' )?>
        </ul>
    </div>
    <?php endif;?>


<?php require admin_view('static/footer');?>