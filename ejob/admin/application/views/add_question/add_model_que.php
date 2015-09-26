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
    <form id="valid_que_test_edit" method="post" action='<?= site_url($action) ?>' enctype ="multipart/form-data">
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
			<th>Question ? <span class='required'><font color="red">*</font></span></th>
			<td><textarea name="question" rows="5" cols="40" class="text required ui-widget-content ui-corner-all"><?=set_value('question')?></textarea><?=form_error('question', '<span>', '</span>')?></td>
		</tr>
		<tr>
			<th>Answers <span class='required'><font color="red">*</font></span></th>
			<td>

				<span class='block margin_2_0'><font color="black">A:</font> <input type='text' name='answer[]' value='<?=set_value('answer[0]')?>' class='text required ui-widget-content ui-corner-all' /> <input type="radio" name="is_correct" checked value='1' /> <font color="black">Is Correct</font></span>
				<span class='block margin_2_0'><font color="black">B:</font> <input type='text' name='answer[]' value='<?=set_value('answer[1]')?>' class='text required ui-widget-content ui-corner-all' /> <input type="radio" name="is_correct" value='2'  /> <font color="black">Is Correct</font></span>
				<span class='block margin_2_0'><font color="black">C:</font> <input type='text' name='answer[]' value='<?=set_value('answer[2]')?>' class='text required ui-widget-content ui-corner-all' /> <input type="radio" name="is_correct" value='3'  /> <font color="black">Is Correct</font></span>
				<span class='block margin_2_0'><font color="black">D:</font> <input type='text' name='answer[]' value='<?=set_value('answer[3]')?>' class='text required ui-widget-content ui-corner-all' /> <input type="radio" name="is_correct" value='4' /><font color="black"> Is Correct</font></span>

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