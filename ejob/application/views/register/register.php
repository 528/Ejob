<div id="content">
    <div class="formarea">
        <form id="valid_user_login" method="POST" action="<?=site_url()?>home/login/" >
            <h2>Already User?</h2>
            <h2>Login</h2>
            <div class="subfieldsset">
              <?=$msg1;?>
                <div>
                    <label for="password"><span class="required">*</span> Username</label>
                    <input size="30" id="password" name="username1" type="text"/><font color="red"><?=form_error('username1', '<span>', '</span>')?></font><br>
                    <label for="password"><span class="required">*</span> Password</label>
                    <input size="30" id="password" name="password1" type="password"/><font color="red"><?=form_error('password1', '<span>', '</span>')?></font><br>
                </div><br>
            </div>
            <div class="buttonsarea">
                <input value="Login !" name="submit_login" type="submit"/>
            </div><br>
        </form>
      <br><br><br>
        <form id="valid_user_reg" method="POST" action="<?=site_url()?>home/register/" enctype ="multipart/form-data">
            <h2>Registration Form</h2>
            <div class="subfieldsset">
<!--                <div class="error">Please fill in all the required fields and try to submit the form</div>
                <div class="information">Fill in the form complately to avoid regular errors.</div>
                <span class="required">*</span>
-->
                <?=$msg;?>
                <div>
                    <label for="first_name"><span class="required">*</span>Name</label>
                    <input size="30" id="name" name="name" type="text"/><font color="red"><?=form_error('name', '<span>', '</span>')?></font><br>
                    <label for="last_name"><span class="required">*</span>Birth Date:</label>
                    <input size="30" id="birthdate" name="birthdate" type="text"/><font color="red"><?=form_error('birthdate', '<span>', '</span>')?></font>
                </div>
                <div>
                    <label for="password"><span class="required">*</span> Username</label>
                    <input size="30" id="password" name="username" type="text"/><font color="red"><?=form_error('username', '<span>', '</span>')?></font><br>
                    <label for="password"><span class="required">*</span> Password</label>
                    <input size="30" id="password" name="password" type="password"/><font color="red"><?=form_error('password', '<span>', '</span>')?></font><br>
                    <label for="country">User Type</label>
                    <select id="country" name="user_type">
                        <option selected="selected" value="1">User</option>
                        <option value="2">Publisher</option>
                    </select>
                    <br>
                </div>
                <div>
                    <label><span class="required">*</span>Sex</label>
                    <label for="premium" class="labelsmall">
                        <input name="sex" id="premium" type="radio" /> Male</label>
                    <label for="free" class="labelsmall">
                        <input name="sex" id="free" type="radio"/> Female</label><font color="red"><?=form_error('sex', '<span>', '</span>')?></font><br>

                    <label><span class="required">*</span>Marital Status</label>
                    <label for="premium" class="labelsmall">
                        <input name="marital" id="premium" type="radio"/> Unmarried</label>
                    <label for="free" class="labelsmall">
                        <input name="marital" id="free" type="radio"/> Married</label><font color="red"><?=form_error('marital', '<span>', '</span>')?></font>
                </div>
                <div>
                    <label for="last_name"><span class="required">*</span>Nationality:</label>
                    <input size="30" id="last_name" name="nationality" type="text"/><font color="red"><?=form_error('nationality', '<span>', '</span>')?></font><br>
                    
                    <label for="last_name">Religion:</label>
                    <select id="country" name="religion">
                        <option selected="selected" value="1">Islam</option>
                        <option value="2">Hindhu</option>
                        <option value="3">Khristian</option>
                        <option value="4">Bauddish</option>
                        <option value="5">Other</option>
                    </select>
                    <br>

                    <label for="Description">Present Address</label>
                    <textarea name="present" cols="50" rows="3" id="Description"></textarea><br>
                    <label for="Description">Permanent Address</label>
                    <textarea name="permanent" cols="50" rows="3" id="Description"></textarea><br>

                    <label for="first_name"><span class="required">*</span>Phone</label>
                    <input size="30" id="name" name="phone" type="text"/><font color="red"><?=form_error('phone', '<span>', '</span>')?></font><br>
                    <label for="last_name"><span class="required">*</span>Email:</label>
                    <input size="30" id="last_name" name="email" type="text"/><font color="red"><?=form_error('email', '<span>', '</span>')?></font><br>
                    <label for="last_name">Image</label>
                    <input type="file" name="picture" id="last_name" size="30"/>
                </div><br>
            </div>
            <div class="buttonsarea">
                <input value="Register Me !" name="submit_reg" type="submit"/>
            </div><br>
        </form>

        <div id="2-column">
            <div id="right_col_reg">
                <h2>Categories and Job</h2>
                <?php
                   for($i = 0;$i < count($nav);$i++)
                   {
                ?>
                <p><a href="<?=site_url().'home/category_navigation_link/'.$nav[$i]['cat_id'];?>"><?=$nav[$i]['cat_name'];?></a>(<?=$nav[$i]['Number'];?>)</p>
                <?php
                   }
                ?>
                <h2>Theme Features</h2>
                <span>
                    "Sometimes life is one big puzzle you wonder why things are so jumbled up
                    even with all the pieces in hand you still struggle to put then all togetheR"
                </span>
            </div>
        </div>
    </div>

</div>