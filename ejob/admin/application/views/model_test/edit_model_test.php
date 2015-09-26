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
    <form id="valid_model_test_edit" method="post" action='<?= site_url($action) ?>' enctype ="multipart/form-data">
        <table width="100%" border="0" cellspacing="3" cellpadding="2">
            <tr>
                    <th>Select Category <font color="red">*</font></th>
                <td>
                <span>
                <select name="category" class="text required ui-widget-content ui-corner-all" onchange="javascript:showHint(this.value);">
                    <option value="">Select</option>
                    <?php foreach ($category as $value) {?>
                    <option value="<?=$value['category']?>"><?=$value['category']?></option>

                    <?php }?>
                </select>
            </span>
               <font color="red"><?=form_error('category', '<span>', '</span>')?></font></td>
                </tr>

             <tr>
                    <th>Model Test Name <font color="red">*</font></th>
                <td>
                <span class='block margin_2_0'><font color="black"></font>
                    <input type='text' name='test_name' value='<?=$test_name?>' class='text required ui-widget-content ui-corner-all' />
            </span>
               <font color="red">   <?=form_error('test_name', '<span>', '</span>')?>        </font>            </td>
                </tr>

            <tr>
                <th>&nbsp;</th><td><input type='submit' name='save' value='save' class='button' /><input type='button' name='cancel' value='Cancel' class='btn'onclick="window.history.back(-1)"/></td>
            </tr>
        </table>
    </form>

</div>