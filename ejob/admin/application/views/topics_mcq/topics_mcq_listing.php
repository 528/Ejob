
<div class='grid_area' style="width:880px;">
    <?php
    if ($msg != "") {
        echo "$msg";
    }

    ?>
    <div class="tooolbars">
        <button id="add" title="topics_mcq/add_topics_mcq"  class="jadd_button">ADD</button>
        <button title="topics_mcq/edit_topics_mcq" class="jedit_button">EDIT</button>
        <button title="topics_mcq/enable_topics_mcq" class="jedit_button">Enable</button>
         <button title="topics_mcq/disable_topics_mcq" class="jedit_button">Disabled</button>
<!--       <button title="sub_category/delete_sub_category" class="jdelete_button">Delete</button>-->
    </div>
    <hr />
    <?php echo $grid_data ?>
</div>