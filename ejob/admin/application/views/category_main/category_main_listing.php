
<div class='grid_area' style="width:880px;">
    <?php
    if ($msg != "") {
        echo "$msg";
    }

    ?>
    <div class="tooolbars">
        <button id="add" title="category_main/add_main_category"  class="jadd_button">ADD</button>
<!--        <button title="category_main/edit_category_main" class="jedit_button">EDIT</button>-->
        <button title="category_main/enable_category_main" class="jedit_button">Enable</button>
         <button title="category_main/disable_category_main" class="jedit_button">Disabled</button>
<!--       <button title="category/delete_category" class="jdelete_button">Delete</button>-->
    </div>
    <hr />
    <?php echo $grid_data ?>
</div>