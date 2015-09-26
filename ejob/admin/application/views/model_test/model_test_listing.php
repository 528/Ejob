
<div class='grid_area' style="width:880px;">
    <?php
    if ($msg != "") {
        echo "$msg";
    }

    ?>
    <div class="tooolbars">
        <button id="add" title="model_test/add_model_test"  class="jadd_button">ADD</button>
        <button title="model_test/edit_model_test" class="jedit_button">EDIT</button>
        <button title="model_test/enable_model_test" class="jedit_button">Enable</button>
         <button title="model_test/disable_model_test" class="jedit_button">Disabled</button>
<!--       <button title="sub_category/delete_sub_category" class="jdelete_button">Delete</button>-->
    </div>
    <hr />
    <?php echo $grid_data ?>
</div>