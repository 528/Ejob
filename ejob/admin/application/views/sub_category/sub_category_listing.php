
<div class='grid_area' style="width:880px;">
    <?php
    if ($msg != "") {
        echo "$msg";
    }
    
    ?>
    <div class="tooolbars">
        <button id="add" title="sub_category/add_sub_category"  class="jadd_button">ADD</button>
        <button title="sub_category/edit_sub_category" class="jedit_button">EDIT</button>
        <button title="sub_category/enable_sub_category" class="jedit_button">Enable</button>
         <button title="sub_category/disable_sub_category" class="jedit_button">Disabled</button>
<!--       <button title="sub_category/delete_sub_category" class="jdelete_button">Delete</button>-->
    </div>
    <hr />
    <?php echo $grid_data ?>
</div>