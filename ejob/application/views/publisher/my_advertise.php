<div id="content1">
    <fieldset><legend>View All</legend>
        <table width='100%'  border='0' align='center'>
            <tr bgcolor='#9999BB'>
                <th>Category</th>
                <th>Company Name</th>
                <th>Description</th>
                <th>Dead Line</th>
                <th>Status</th>
                <th>Option</th>
            </tr>
<?php
foreach($query as $row)
{
?>
            <tr bgcolor="#99CCFF">
                <td><?php echo $this->publish_model->get_category_name($row->cat_id);?></td>
                <td><?php echo $row->company_name; ?></td>
                <td><?php echo $row->description; ?></td>
                <td><?php echo $row->dead_line; ?></td>
                <td><?php $status = $row->status == 1 ? 'Active' : 'Inactive'; echo $status; ?></td>
                <td><a href=""><img src="images/nav/b_edit.png"></a>&nbsp;&nbsp;&nbsp;<a href=""><img src="images/nav/b_drop.png"></a></td>
            </tr>

<?php
}?>

            </table>
        </fieldset>
<?php
echo $pagination;
?>

    <div class="formarea2">
        <form id="valid_add_pub" method="POST" action="<?=site_url()?>publisher/insert_advertise/" enctype ="multipart/form-data">
            <h2>New Advertise</h2>
            <div class="subfieldsset1">
                <?=$msg;?>
                <div>
                    <label for="country">Select Category: </label><br>
                    <select id="country" name="category">
                        <?=$option;?>
                    </select><br>
                </div>
                <div>
                    <label for="company_name"><span class="required">*</span> Company Name: </label><br>
                    <input size="30" id="company_name" name="company_name" type="text"/><font color="red"><?=form_error('company_name', '<span>', '</span>')?></font><br>
                    <br>
                </div>
                <div>
                   <label for="description"><span class="required">*</span>Description</label><br>
                    <textarea name="description" cols="50" rows="3" id="description"></textarea><br>
                </div>
                <div>
                    <label for="publish_date"><span class="required">*</span>Publish Date:</label><br>
                    <input size="30" id="birthdate" name="publish_date" type="text"/><font color="red"><?=form_error('publish_date', '<span>', '</span>')?></font><br>
                    <label for="dead_line"><span class="required">*</span>Dead Line:</label><br>
                    <input size="30" id="birthdate1" name="dead_line" type="text"/><font color="red"><?=form_error('dead_line', '<span>', '</span>')?></font><br>

                    <label for="url">URL</label><br>
                    <input size="30" id="name" name="url" type="text"/><font color="red"><?=form_error('phone', '<span>', '</span>')?></font><br>
                    <label for="last_name">Image</label><br>
                    <input type="file" name="picture" id="last_name" size="30"/>
                </div><br>
            </div>
            <div class="buttonsarea">
                <input value="Publish" name="submit_pub" type="submit"/>
            </div><br>
        </form>
    </div>
</div><!--<div id="content">-->