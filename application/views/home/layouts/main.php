<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>FarmFresh - Organic Farm Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
    <!-- Styles -->
    <?php
    include_once('style.php');
    ?>
    <!-- Styles -->
</head>

<body>

    <!-- Navbar Start -->
    <?php
    include_once('nav.php');
    ?>
    <!-- Navbar End -->

    <!-- content pages -->
    <?php
    $this->load->view('home/' . $page_name);
    ?>
    <!-- content pages -->

    <!-- Contact us -->
    <?php
    include_once('contactus.php');
    ?>

    <!-- Footer Start -->
    <?php
    include_once('footer.php');
    ?>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-secondary py-3 fs-4 back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <?php
    include_once('script.php');
    ?>
    <!-- JavaScript Libraries -->

</body>

</html>
