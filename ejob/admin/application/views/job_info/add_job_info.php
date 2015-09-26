<div class="form_content">
    <h3><?=$this->page_title
?></h3>
    <?php
    if ($msg != "") {
        echo "<div class='success'>$msg</div>";
    }
    ?>
    <form id="valid_jobs" method="post" action='<?=site_url($action)
    ?>' enctype ="multipart/form-data">
        <table width="100%" border="0" cellspacing="3" cellpadding="2">
            <tr>
                <th valign="top"><label for="Title">Job Title<span class="req_mark">*</span></label></th>
                <td><input type='text' name='job_title'id ="job_title" value="<?=$job_title ?>" class='text required ui-widget-content ui-corner-all width_250' /><?=form_error('job_title', '<span>', '</span>')
    ?></td>
            </tr>
            <tr>
                <th><label for="Description">Job Description</label><span class="req_mark">*</span></th>
                <td><textarea name='job_desc' id= "job_desc" rows="10" cols="50" class="tinymce"><?=$job_desc?></textarea><?=form_error('job_desc', '<span>', '</span>')?></td>
            </tr>
            <tr>
                <th valign="top"><label for="Title">Job Link<span class="req_mark"></span></label></th>
                <td><input type='text' name='job_link'id ="job_link" value="<?=$job_link ?>" class='text required ui-widget-content ui-corner-all width_250' /><?=form_error('job_link', '<span>', '</span>')
    ?></td>
            </tr>

            <tr>
                <th>&nbsp;</th><td><input type='submit' name='save' value='save' class='button' /><input type='button' name='cancel' value='Cancel' class='btn'onclick="window.history.back(-1)"/></td>
            </tr>
        </table>
    </form>

</div>