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
                    <th>From</th>
                    <th class="hide">Subject</th>
                    <th class="hide">Date</th>
                    <th>Edit / Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($query as $row):?>
                <tr>
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
                    </td>

                    <td>
                        <?php if (permission('contact','edit')):?>
                        <a href="<?=admin_url() . 'edit-contact?id='.$row['contact_id']?>" class="btn">Edit</a>
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