<div class="formarea1">
        <form id="valid_user_update" method="POST" action="<?=site_url()?>home/register/" enctype ="multipart/form-data">
            <h2>Update Account Info</h2>
                <div>
                    <label for="first_name"><span class="required">*</span>Name</label><br>
                    <input size="30" id="name" name="name" type="text"/><font color="red"><?=form_error('name', '<span>', '</span>')?></font><br>
                    <label for="last_name"><span class="required">*</span>Birth Date:</label><br>
                    <input size="30" id="birthdate" name="birthdate" type="text"/><font color="red"><?=form_error('birthdate', '<span>', '</span>')?></font><br>
                </div>
                <div>
                    <label for="password"><span class="required">*</span> Username</label><br>
                    <input size="30" id="password" name="username" type="text"/><font color="red"><?=form_error('username', '<span>', '</span>')?></font><br>
                    <label for="password"><span class="required">*</span> Password</label><br>
                    <input size="30" id="password" name="password" type="password"/><font color="red"><?=form_error('password', '<span>', '</span>')?></font><br>
                    
                </div>
                <div>
                    <label><span class="required">*</span>Sex</label><br>
                    <select id="sex" name="sex">
                        <option selected="selected" value="1">Male</option>
                        <option value="2">Female</option>
                    </select><br>

                    <label><span class="required">*</span>Marital Status</label><br>
                    <select id="marital" name="marital">
                        <option selected="selected" value="1">Married</option>
                        <option value="2">Unmarried</option>
                    </select><br>
                </div>
                <div>
                    <label for="last_name"><span class="required">*</span>Nationality:</label><br>
                    <input size="30" id="last_name" name="nationality" type="text"/><font color="red"><?=form_error('nationality', '<span>', '</span>')?></font><br>

                    <label for="last_name">Religion:</label><br>
                    <select id="country" name="religion">
                        <option selected="selected" value="1">Islam</option>
                        <option value="2">Hindhu</option>
                        <option value="3">Khristian</option>
                        <option value="4">Bauddish</option>
                        <option value="5">Other</option>
                    </select>
                    <br>

                    <label for="Description">Present Address</label><br>
                    <textarea name="present" cols="50" rows="3" id="Description"></textarea><br>
                    <label for="Description">Permanent Address</label><br>
                    <textarea name="permanent" cols="50" rows="3" id="Description"></textarea><br>

                    <label for="first_name"><span class="required">*</span>Phone</label><br>
                    <input size="30" id="name" name="phone" type="text"/><font color="red"><?=form_error('phone', '<span>', '</span>')?></font><br>
                    <label for="last_name"><span class="required">*</span>Email:</label><br>
                    <input size="30" id="last_name" name="email" type="text"/><font color="red"><?=form_error('email', '<span>', '</span>')?></font><br>
                    <label for="last_name">Image</label><br>
                    <input type="file" name="picture" id="last_name" size="30"/>
                </div><br>
            <div class="buttonsarea">
                <input value="Update !" name="submit_update" type="submit"/>
            </div><br>
        </form>
    </div>