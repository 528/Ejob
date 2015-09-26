<div class="form_content">
    <h3><?=$this->page_title
?></h3>
    <?php
    if ($msg != "") {
        echo "<div class='success'>$msg</div>";
    }
    ?>
    <form id="valid_admin" method="post" action='<?=site_url($action)
    ?>' enctype ="multipart/form-data">
        <table width="100%" border="0" cellspacing="3" cellpadding="2">
            <tr>
                <th valign="top"><label for="Title">Username<span class="req_mark">*</span></label></th>
                <td><input type='text' name='user_name'id ="news_title" value="<?=$user_id ?>" class='text required ui-widget-content ui-corner-all width_250' /><?=form_error('user_name', '<span>', '</span>')?></td>
            </tr>
            <tr>
                <th><label for="Description">Password</label><span class="req_mark">*</span></th>
                  <td><input type='password' name='password'id ="news_title" value="<?=$password ?>" class='text required ui-widget-content ui-corner-all width_250' /><?=form_error('password', '<span>', '</span>')
    ?></td>
            </tr>
              <tr>
                <th><label for="Description">Email</label><span class="req_mark">*</span></th>
                  <td><input type='text' name='email'id ="news_title" value="<?=$email ?>" class='text required ui-widget-content ui-corner-all width_250' /><?=form_error('email', '<span>', '</span>')
    ?></td>
            </tr>

            <tr>
                <th>&nbsp;</th><td><input type='submit' name='save' value='save' class='button' /><input type='button' name='cancel' value='Cancel' class='btn'onclick="window.history.back(-1)"/></td>
            </tr>
        </table>
    </form>

</div>