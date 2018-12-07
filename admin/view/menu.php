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
                <tr>
                    <td>

                    </td>
                    <td>
                        <span class="date">21 hours ago</span>
                    </td>
                    <td>
                        <a href="#" class="btn">Edit</a>
                        <a href="#" class="btn">Delete</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

<?php require admin_view('static/footer');?>