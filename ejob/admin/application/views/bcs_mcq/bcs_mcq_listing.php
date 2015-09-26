
<div class='grid_area' style="width:880px;">
    <?php
    if ($msg != "") {
        echo "$msg";
    }

    ?>
    <div class="tooolbars">
        <button id="add" title="bcs_mcq/add_bcs_mcq"  class="jadd_button">ADD</button>
        <button title="bcs_mcq/edit_bcs_mcq" class="jedit_button">EDIT</button>
        <button title="bcs_mcq/enable_bcs_mcq" class="jedit_button">Enable</button>
         <button title="bcs_mcq/disable_bcs_mcq" class="jedit_button">Disabled</button>
<!--       <button title="sub_category/delete_sub_category" class="jdelete_button">Delete</button>-->
    </div>
    <hr />
    <?php echo $grid_data ?>
</div>