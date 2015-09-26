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
    <form id="valid_sub_category_add" method="post" action='<?= site_url($action) ?>' enctype ="multipart/form-data">
        <table width="100%" border="0" cellspacing="3" cellpadding="2">
            <tr>
                    <th>Select Category <font color="red">*</font></th>
                <td>
                <span>
                <select name="category_name" class="text required ui-widget-content ui-corner-all" onchange="javascript:showHint(this.value);">
                    <option value="">Select</option>
                    <?php foreach ($category_name as $value) {?>
                    <option value="<?=$value['category_name']?>"><?=$value['category_name']?></option>

                    <?php }?>
                </select>
            </span>
               <font color="red">   <?=form_error('category_name', '<span>', '</span>')?>        </font>            </td>
                </tr>
            <tr>
                <th valign="top"><label for="Title">Enter Sub Category<span class="req_mark">*</span></label></th>
                <td><input type='text' name='subcategory_name'id ='subcategory_name' value="<?=$subcategory_name ?>" class='text required ui-widget-content ui-corner-all' /><?= form_error('subcategory_name', '<span>', '</span>')?></td>
            </tr>
             
            <tr>
                <th>&nbsp;</th><td><input type='submit' name='save' value='save' class='button' /><input type='button' name='cancel' value='Cancel' class='btn'onclick="window.history.back(-1)"/></td>
            </tr>
        </table>
    </form>

</div>