
<div class='grid_area' style="width:880px;">
    <?php
    if ($msg != "") {
        echo "$msg";
    }

    ?>
    <div class="tooolbars">
        <button id="add" title="add_question/add_mod_question"  class="jadd_button">ADD</button>
        <button title="add_question/edit_add_question" class="jedit_button">EDIT</button>
        <button title="add_question/enable_add_question" class="jedit_button">Enable</button>
         <button title="add_question/disable_add_question" class="jedit_button">Disabled</button>
<!--       <button title="sub_category/delete_sub_category" class="jdelete_button">Delete</button>-->
    </div>
    <hr />
    <?php echo $grid_data ?>
</div>