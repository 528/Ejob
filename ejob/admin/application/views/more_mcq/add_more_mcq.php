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
    <form id="valid_more_mcq" method="post" action='<?= site_url($action) ?>' enctype ="multipart/form-data">
        <table width="100%" border="0" cellspacing="3" cellpadding="2">
            <tr>
                    <th>Category <?$new_text?><font color="red">*</font></th>
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

                 <tr>
            <th>Question ?<?php echo $new_text;?> <span class='required'><font color="red">*</font></span></th>
            <td><textarea name="question" rows="5" cols="40" class="text required ui-widget-content ui-corner-all"><?=set_value('')?></textarea><?=form_error('question', '<span>', '</span>')?></td>
    </tr>
       <tr>
        <th>Answers <span class='required'><font color="red">*</font></span></th>
        <td>

                <span class='block margin_2_0'><font color="black">A:</font> <input type='text' class="required" name='answer_1[]' value='<?=set_value('answer_1[0]')?>' class='text required ui-widget-content ui-corner-all' /> <input type="radio" name="is_correct" checked value='1' /> <font color="black">Is Correct</font></span>
                <span class='block margin_2_0'><font color="black">B:</font> <input type='text' class="required" name='answer_1[]' value='<?=set_value('answer_1[1]')?>' class='text required ui-widget-content ui-corner-all' /> <input type="radio" name="is_correct" value='2' /> <font color="black">Is Correct</font></span>
                <span class='block margin_2_0'><font color="black">C:</font> <input type='text' class="required" name='answer_1[]' value='<?=set_value('answer_1[2]')?>' class='text required ui-widget-content ui-corner-all' /> <input type="radio" name="is_correct" value='3' /> <font color="black">Is Correct</font></span>
                <span class='block margin_2_0'><font color="black">D:</font> <input type='text' class="required" name='answer_1[]' value='<?=set_value('answer_1[3]')?>' class='text required ui-widget-content ui-corner-all' /> <input type="radio" name="is_correct" value='4' /> <font color="black">Is Correct</font></span>

                        <font color="red"><?=form_error('answer_1[0]', '<span>', '</span>')?></font>
                        <font color="red"><?=form_error('answer_1[1]', '<span>', '</span>')?></font>
                        <font color="red"><?=form_error('answer_1[2]', '<span>', '</span>')?></font>
                        <font color="red"><?=form_error('answer_1[3]', '<span>', '</span>')?></font>


        </td>
    </tr>
          </table>
        <div class="txt_center">
            <input type='submit' name='save' value='save' class='button' /><input type='button' name='cancel' value='Cancel' class='btn'onclick="window.history.back(-1)"/>
        </div>
    </form>

</div>