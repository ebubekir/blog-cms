<?php require admin_view('static/header');?>

    <div class="box-">
        <h1>
            Menu Management 
            <a href="<?=admin_url('add-menu')?>">Add New</a>
        </h1>
    </div>

    <div class="clear" style="height: 10px;"></div>

    <div class="table">
        <table>
            <thead>
                <tr>
                    <th>Title</th>
                    <th class="hide">Create Date</th>
                    <th>Edit/Delete</th>
                </tr>
            </thead>
            <tbody>

                <?php foreach($rows as $row):?>
                <tr>
                    <td>
                    <?=$row['menu_title']?>
                    </td>
                    <td>
                        <?=$row['menu_date']?>
                    </td>
                    <td>
                        <a href="<?=admin_url('edit-menu?id=' . $row['menu_id'])?>" class="btn">Edit</a>
                        <a href="<?=admin_url('delete?table=menu&column=menu_id&id'.$row['menu_id'])?>" class="btn">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>

            </tbody>
        </table>
    </div>

<?php require admin_view('static/footer');?>