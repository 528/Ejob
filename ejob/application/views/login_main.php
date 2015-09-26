<html>
    <head><title>The biggest Job Search site</title>
        <base href="<?= base_url() ?>" />
        <link rel="stylesheet" id="defaultStyle" href="styles/style1.css" type="text/css" media="screen, projection" />

        <link type="text/css" rel="Stylesheet" href="scripts/jquery-ui.css"/>
        <script type="text/javascript" src="scripts/jquery.min.js"></script>
        <script type="text/javascript" src="scripts/jquery-ui.min.js"></script>

        <link href="scripts/tabs.css" rel="stylesheet" type="text/css" />

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
                $("#apply_date").datepicker(options);
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
                            <li><a href="<?= site_url(); ?>user">Home</a></li>
                            <li><a href="<?= site_url(); ?>user/my_application">My Application</a></li>
                            <li><a href="<?= site_url(); ?>user/my_inbox">Inbox</a></li>
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

                <?php include_once $dir . '/' . $page . '.php'; ?>

                <?php include_once 'common/footer.php'; ?>

            </div>
        </div>
    </body>

</html>