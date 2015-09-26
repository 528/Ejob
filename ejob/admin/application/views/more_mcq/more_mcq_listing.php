
<div class='grid_area' style="width:880px;">
    <?php
    if ($msg != "") {
        echo "$msg";
    }

    ?>
    <div class="tooolbars">
        <button id="add" title="more_mcq/add_more_mcq"  class="jadd_button">ADD</button>
        <button title="more_mcq/edit_more_mcq" class="jedit_button">EDIT</button>
        <button title="more_mcq/enable_more_mcq" class="jedit_button">Enable</button>
         <button title="more_mcq/disable_more_mcq" class="jedit_button">Disabled</button>
<!--       <button title="sub_category/delete_sub_category" class="jdelete_button">Delete</button>-->
    </div>
    <hr />
    <?php echo $grid_data ?>
</div>