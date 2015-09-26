
<div class='grid_area' style="width:880px;">
    <?php
    if ($msg != "") {
        echo "<div class='success'>$msg</div>";
    }
    ?>
    <div class="tooolbars">
        <button id="add" title="current_affair/add_current_affair"  class="jadd_button">ADD</button>
        <button title="current_affair/edit_current_affair" class="jedit_button">EDIT</button>
        <button title="current_affair/publish_current_affair" class="jedit_button">Publish</button>
         <button title="current_affair/unpublish_current_affair" class="jedit_button">UnPublish</button>
       <button title="current_affair/delete_current_affair" class="jdelete_button">Delete</button>


    </div>
    <hr />
    <?php echo $grid_data ?>
</div>