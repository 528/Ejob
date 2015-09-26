
<div class='grid_area' style="width:880px;">
    <?php
    if ($msg != "") {
        echo "$msg";
    }

    ?>
    <div class="tooolbars">
        <button id="add" title="matching/add_matching"  class="jadd_button">ADD</button>
<!--        <button title="matching/edit_matching" class="jedit_button">EDIT</button>-->
<!--        <button title="matching/enable_matching" class="jedit_button">Enable</button>
         <button title="matching/disable_matching" class="jedit_button">Disabled</button>-->
       <button title="matching/delete_matching" class="jdelete_button">Delete</button>
    </div>
    <hr />
    <?php echo $grid_data ?>
</div>