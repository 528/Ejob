
<div class='grid_area' style="width:880px;">
    <?php
    if ($msg != "") {
        echo "$msg";
    }

    ?>
    <div class="tooolbars">
        <button id="add" title="sub_cat_detail/add_sub_cat_detail"  class="jadd_button">ADD</button>
        <button title="sub_cat_detail/edit_sub_cat_detail" class="jedit_button">EDIT</button>
        <button title="sub_cat_detail/enable_sub_cat_detail" class="jedit_button">Enable</button>
         <button title="sub_cat_detail/disable_sub_cat_detail" class="jedit_button">Disabled</button>
<!--       <button title="sub_category/delete_sub_category" class="jdelete_button">Delete</button>-->
    </div>
    <hr />
    <?php echo $grid_data ?>
</div>