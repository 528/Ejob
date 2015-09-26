
<div class='grid_area' style="width:880px;">
    <?php
    if ($msg != "") {
        echo "$msg";
    }

    ?>
    <div class="tooolbars">
        <button id="add" title="tutorial/add_tutorial"  class="jadd_button">ADD</button>
        <button title="tutorial/edit_tutorial" class="jedit_button">EDIT</button>
        <button title="tutorial/enable_tutorial" class="jedit_button">Enable</button>
         <button title="tutorial/disable_tutorial" class="jedit_button">Disabled</button>
<!--       <button title="sub_category/delete_sub_category" class="jdelete_button">Delete</button>-->
    </div>
    <hr />
    <?php echo $grid_data ?>
</div>