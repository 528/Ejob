<div class="form_content" style="width:780px;">
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
    <form id="valid_tutorial" method="post" action='<?= site_url($action) ?>' enctype ="multipart/form-data">
        <table width="100%" border="0" cellspacing="3" cellpadding="2">
            <tr>
                    <th>Category <font color="red">*</font></th>
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
                    <th>Sub Category <font color="red">*</font></th>
                <td>
                <span>
                <select name="cat" class="text required ui-widget-content ui-corner-all" onchange="javascript:showHint(this.value);">
                    <option value="">Select</option>
                    <?php foreach ($cat as $value1) {?>
                    <option value="<?=$value1['category']?>"><?=$value1['category']?></option>

                    <?php }?>
                </select>
            </span>
               <font color="red">   <?=form_error('category', '<span>', '</span>')?>        </font>            </td>
                </tr>

               <tr>
                <th valign="top"><label for="Title">Topics Name<span class="req_mark">*</span></label></th>
                <td><input type='text' name='tutorial_name'id ='tutorial_name' value="<?=$tutorial_name ?>" class='text required ui-widget-content ui-corner-all' /><?= form_error('tutorial_name', '<span>', '</span>')?></td>
            </tr>

                   <tr>
                       <th><label for="top_description">Description<span class="req_mark">*</span></label></th>
                       <td><textarea name='top_description' id= "top_description" rows="10" cols="50" class="tinymce"><?=$top_description; ?></textarea><?=form_error('top_description', '<span>', '</span>')?></td>
                   </tr>

                   <tr>
                       <th><label for="flow_chart">Flow Chart<span class="req_mark">*</span></label></th>
                       <td><textarea name='flow_chart' id="flow_chart" rows="10" cols="50" class="tinymce"><?=$flow_chart; ?></textarea><?=form_error('flow_chart', '<span>', '</span>')?></td>
                   </tr>
          </table>
<!--          Add More-->
        <div class="txt_center">
            <input type='submit' name='save' value='save' class='button' /><input type='button' name='cancel' value='Cancel' class='btn'onclick="window.history.back(-1)"/>
        </div>
    </form>

</div>