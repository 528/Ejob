<div id="content">
    <div class="formarea">
        <h2>Contact Us</h2>
        <div class="subfieldsset">
            <?=$msg;?>
            <form name="theform" method="post" action="<?= site_url() ?>home/contact_us/">
                <table>
                    <tr>
                        <td>Your Mail:</td>
                        <td><input type="text" name="from" size="50"></td>
                    </tr>
                    <tr>
                        <td>Subject:</td>
                        <td><input type="text" name="subject" size="50"></td>
                    </tr>
                    <tr>
                        <td valign="top">Message:</td>
                        <td><textarea cols="60" rows="10" name="message"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" name="send" value="Send Message">
                            <input type="reset" value="Reset the form">
                        </td>
                    </tr>
                </table>
            </form>
        </div>


        <div id="2-column">
            <div id="right_col_contact">
                <h2>Categories and Job</h2>
                <?php
                for ($i = 0; $i < count($nav); $i++) {
                ?>
                    <p><a href="<?= site_url() . 'home/category_navigation_link/' . $nav[$i]['cat_id']; ?>"><?= $nav[$i]['cat_name']; ?></a>(<?= $nav[$i]['Number']; ?>)</p>
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