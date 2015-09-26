
<div class='grid_area' style="width:880px;">
    <?php
    if ($msg != ""&& $upload_success_msg!="") {
        echo "<div class='success'>$msg And $upload_success_msg</div>";
    }
     elseif ($msg != "") {
        echo "<div class='success'>$msg</div>";
    }
    elseif($upload_success_msg != "") {
        echo "<div class='success'>$upload_success_msg</div>";
    }
    ?>
    <div class="tooolbars">
<!--        <button id="add" title="ipo_form/add_ipo_form"  class="jadd_button">ADD</button>
        <button title="ipo_form/edit_ipo_form" class="jedit_button">EDIT</button>-->
        <button id="add" title="member/activate_member" class="jedit_button">Activate</button>
         <button title="member/deactivate_member" class="jedit_button">DeActivate</button>
<!--       <button title="member/delete_member" class="jdelete_button">Delete</button>-->
    </div>
    <hr />
    <?php echo $grid_data ?>
</div>