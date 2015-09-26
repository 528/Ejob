
<div class='grid_area' style="width:880px;">
    <?php
    if ($msg != "") {
        echo "<div class='success'>$msg</div>";
    }
    ?>
    <div class="tooolbars">
        <button id="add" title="job_info/add_jobs"  class="jadd_button">ADD</button>
        <button title="job_info/edit_jobs" class="jedit_button">EDIT</button>
        <button title="job_info/publish_jobs" class="jedit_button">Publish</button>
         <button title="job_info/unpublish_jobs" class="jedit_button">UnPublish</button>
       <button title="job_info/delete_jobs" class="jdelete_button">Delete</button>


    </div>
    <hr />
    <?php echo $grid_data ?>
</div>