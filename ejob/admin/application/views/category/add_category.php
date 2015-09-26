<div class="form_content">
    <h3><?= $page_title ?></h3>
    <?php
    if ($msg != "") {
        echo "$msg";
    }
    else{
        if($msgs!="")
        echo "$msgs";
    }
    ?>
    <form id="valid_category" method="post" action='<?= site_url($action) ?>' enctype ="multipart/form-data">
        <table width="100%" border="0" cellspacing="3" cellpadding="2">

            <tr>
                <th valign="top"><label for="Title">Enter Category<span class="req_mark">*</span></label></th>
                <td><input type='text' name='category_name'id ="category_name" value="<?=$cat_name;?>" class='text required ui-widget-content ui-corner-all' /><?= form_error('category_name', '<span>', '</span>')?></td>
            </tr>

            <tr>
                       <th><label for="top_description">Description<span class="req_mark">*</span></label></th>
                       <td><textarea name='cat_description' id= "top_description" rows="10" cols="50" class="tinymce"><?=$description; ?></textarea><?=form_error('cat_description', '<span>', '</span>')?></td>
                   </tr>
              

            <tr>
                <th>&nbsp;</th><td><input type='submit' name='save' value='save' class='button' /><input type='button' name='cancel' value='Cancel' class='btn'onclick="window.history.back(-1)"/></td>
            </tr>
        </table>
    </form>

</div>