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
    <form id="valid_topics_mcq" method="post" action='<?= site_url($action) ?>' enctype ="multipart/form-data">
        <table width="100%" border="0" cellspacing="3" cellpadding="2">
            <tr>
                    <th>Category <?$cat?><font color="red">*</font></th>
                <td>
                <span>
                <select name="cat" class="text required ui-widget-content ui-corner-all" onchange="javascript:showHint(this.value);">
                    <option value="">Select</option>
                    <?php foreach ($cat as $value) {?>
                    <option value="<?=$value['category']?>"><?=$value['category']?></option>

                    <?php }?>
                </select>
            </span>
               <font color="red"><?=form_error('cat', '<span>', '</span>')?></font></td>
                </tr>

                <tr>
                    <th>Sub Category <font color="red">*</font></th>
                <td>
                <span>
                <select name="category" class="text required ui-widget-content ui-corner-all" onchange="javascript:showHint(this.value);">
                    <option value="">Select</option>
                    <?php foreach ($category as $value1) {?>
                    <option value="<?=$value1['category']?>"><?=$value1['category']?></option>

                    <?php }?>
                </select>
            </span>
               <font color="red">   <?=form_error('category', '<span>', '</span>')?>        </font>            </td>
                </tr>

                <tr>
                    <th>Select Tutorial <font color="red">*</font></th>
                <td>
                <span>
                <select name="tutorial_name" class="text required ui-widget-content ui-corner-all" onchange="javascript:showHint(this.value);">
                    <option value="">Select</option>
                    <?php foreach ($tutorial_name as $value1) {?>
                    <option value="<?=$value1['tutorial_name']?>"><?=$value1['tutorial_name']?></option>

                    <?php }?>
                </select>
            </span>
               <font color="red">   <?=form_error('tutorial_name', '<span>', '</span>')?>        </font>            </td>
                </tr>             
          </table>
<!--          Add More-->
<div class="jmcq_m">
                    <?php include_once 'question_form.php';?>
              </div>
<!--              <a href="#add_more" class="jadd_qu">Add More question</a>-->
      
        <div class="txt_center">
            <input type='submit' name='save' value='save' class='button' /><input type='button' name='cancel' value='Cancel' class='btn'onclick="window.history.back(-1)"/>
        </div>
    </form>

</div>