<table>
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