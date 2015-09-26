<html>
    <head><title>The biggest Job Search site</title>
        <base href="<?= base_url() ?>" />
        <link rel="stylesheet" id="defaultStyle" href="styles/style1.css" type="text/css" media="screen, projection" />

        <link type="text/css" rel="Stylesheet" href="scripts/jquery-ui.css"/>
        <script type="text/javascript" src="scripts/jquery.min.js"></script>
        <script type="text/javascript" src="scripts/jquery-ui.min.js"></script>

        <link href="scripts/tabs.css" rel="stylesheet" type="text/css" />
            <link rel="stylesheet" type="text/css" href="tools/grid/css/ui.jqgrid.css" media="screen" />
    <script type='text/javascript' src='tools/jquery-1.4.2.min.js'></script>
    <script type='text/javascript' src='tools/jquery-ui-1.8.2.custom.min.js'></script>
    <script type='text/javascript' src='tools/grid/grid.locale-en.js'></script>

    <script type='text/javascript' src='tools/grid/jquery.jqGrid.min.js'></script>
    <script type='text/javascript' src='tools/superfish/js/superfish.js'></script>
    <script type='text/javascript' src='tools/jquery.validate.js'></script>

        <script type="text/javascript">
            $(function () {
                var options = {
                    numberOfMonths: 1,
                    changeYear: true,
                    yearRange: "-2:+2"
                }
                $("#birthdate").datepicker(options);
            });
            $(function () {
                var options = {
                    numberOfMonths: 1,
                    changeYear: true,
                    yearRange: "-2:+2"
                }
                $("#birthdate1").datepicker(options);
            });
        </script>
    </head>

    <body>
        <div id="wraper">
            <div id="container">


                <div id="header">
                    <div id="header_top">
                        <div id="logo">
                        </div>
                        <div id="contact">
                            <span style='color:red;'>Call Us:</span>1-800-400-2015
                        </div>
                    </div>
                    <div id="navigation">
                        <ul>
                            <li><a href="<?= site_url(); ?>publisher">Home</a></li>
                            <li><a href="">Services</a></li>
                            <li><a href="">Portfolio</a></li>
                            <li><a href="">Blog</a></li>
                            <li><a href="<?=site_url();?>home/contact_us">Contact Us</a></li>
                            <li><a href="<?=site_url();?>user/do_logout">Logout</a></li>
                        </ul>
                    </div>
                    <div id="banner">
                        <img src="images/banner.png" width="950">
                    </div>
                </div>


                <div id="content">
    <div class="formarea">

        <form id="valid_user_login" method="POST" action="<?= site_url() ?>home/login/" >
            <h2>Search By Category</h2>
            <div class="subfieldsset1">
                <div>
                    <select id="country" name="category">
                       <?=$option;?>
                    </select>

                    <input value="Search" name="submit_login" type="submit"/>
                </div><br>
            </div>
            <br>
        </form>


        <br><br><br>


        <div id="2-column">

            <div id="right_col">
                <h2>Dashboard</h2>
                <p><img src="images/nav/account.png" height="20" width="20"><a href="<?=site_url();?>publisher/account_settings">  &nbsp;&nbsp;Account Settings</a></p>
                <p><img src="images/nav/add.png" height="20" width="20"><a href="<?=site_url();?>publisher/myAdvertise">  &nbsp;&nbsp;My Advertise</a></p>
                <p><img src="images/nav/inbox.png" height="20" width="20"><a href="<?=site_url();?>publisher/my_inbox">  &nbsp;&nbsp;Inbox</a></p>
                <p><img src="images/nav/applicant.png" height="20" width="20"><a href="publisher/applicants">  &nbsp;&nbsp;Applicants</a></p>
                <p><img src="images/nav/user.png" height="20" width="20"><a href="<?=site_url();?>user/do_logout">  &nbsp;&nbsp;Logout</a></p>

            </div>



                <?php include_once $dir . '/' . $page . '.php'; ?>
        </div>
    </div>

</div>

                <?php include_once 'common/footer.php'; ?>

            </div>
        </div>
    </body>

</html>