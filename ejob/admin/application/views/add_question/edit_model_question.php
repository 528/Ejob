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
    <form id="valid_model_que_edit" method="post" action='<?= site_url($action) ?>' enctype ="multipart/form-data">
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
                    <th>Test Name <font color="red">*</font></th>
                <td>
                <span>
                <select name="test_name" class="text required ui-widget-content ui-corner-all" onchange="javascript:showHint(this.value);">
                    <option value="">Select</option>
                    <?php foreach ($test_name as $value) {?>
                    <option value="<?=$value['test_name']?>"><?=$value['test_name']?></option>

                    <?php }?>
                </select>
            </span>
               <font color="red"><?=form_error('test_name', '<span>', '</span>')?></font></td>
                </tr>

              <tr>
			<th>Question ?</th>
			<td><textarea name="question" rows="5" cols="40" class="text required ui-widget-content ui-corner-all"><?=$question?></textarea></td>
		</tr>
		<tr>
			<th>Answers <span class='required'><font color="red">*</font></span></th>
			<td>
				<?php $ans=sql::rows('model_test_answer',"questions_id=$questions_id order by answer_id");?>
				<span class='block margin_2_0'><font color="black">A:</font> <input type='text' name='answer[]' value='<?=$ans[0]['answer']?>' class='text required ui-widget-content ui-corner-all' /> <input type="radio" name="is_correct" <?php if($ans[0]['is_correct']==1){echo 'checked';}?> value='1' /><font color="black"> Is Correct</font></span>
				<span class='block margin_2_0'><font color="black">B:</font> <input type='text' name='answer[]' value='<?=$ans[1]['answer']?>' class='text required ui-widget-content ui-corner-all' /> <input type="radio" name="is_correct" <?php if($ans[1]['is_correct']==1){echo 'checked';}?> value='2'  /> <font color="black">Is Correct</font></span>
				<span class='block margin_2_0'><font color="black">C:</font> <input type='text' name='answer[]' value='<?=$ans[2]['answer']?>' class='text required ui-widget-content ui-corner-all' /> <input type="radio" name="is_correct" <?php if($ans[2]['is_correct']==1){echo 'checked';}?> value='3'  /> <font color="black">Is Correct</font></span>
				<span class='block margin_2_0'><font color="black">D:</font> <input type='text' name='answer[]' value='<?=$ans[3]['answer']?>' class='text required ui-widget-content ui-corner-all' /> <input type="radio" name="is_correct" <?php if($ans[3]['is_correct']==1){echo 'checked';}?> value='4' /><font color="black"> Is Correct</font></span>
			<font color="red"><?=form_error('answer[0]', '<span>', '</span>')?></font>
                        <font color="red"><?=form_error('answer[1]', '<span>', '</span>')?></font>
                        <font color="red"><?=form_error('answer[2]', '<span>', '</span>')?></font>
                        <font color="red"><?=form_error('answer[3]', '<span>', '</span>')?></font>

                        </td>
		</tr>

            <tr>
                <th>&nbsp;</th><td><input type='submit' name='save' value='save' class='button' /><input type='button' name='cancel' value='Cancel' class='btn'onclick="window.history.back(-1)"/></td>
            </tr>
        </table>
    </form>

</div>