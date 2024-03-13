<?php include 'header/header.php'; ?>

<body class="bg-white dark:bg-gray-900">

    <!--session-->
    <?php
        session_start();

        if (isset($_SESSION['success_message'])) {
            echo '<div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">';
            echo '<strong class="font-bold">Success!</strong>';
            echo '<span class="block sm:inline">' . $_SESSION['success_message'] . '</span>';
            echo '</div>';

            unset($_SESSION['success_message']);
        }

        if (isset($_SESSION['error_message'])) {
            echo '<div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">';
            echo '<strong class="font-bold">Error!</strong>';
            echo '<span class="block sm:inline">' . $_SESSION['error_message'] . '</span>';
            echo '</div>';

            unset($_SESSION['error_message']);
        }
    ?>

    <!--nav-->
    <?php  $currentPage = 'support'; include 'header/navigation.php'; ?>

    <!--hero-->
    <?php include 'sections/contact-hero.php'; ?>

    <!--feedbacks-->
    <?php include 'sections/contact-form.php'; ?>

    <!--feedbacks-->
    <?php include 'sections/faq.php'; ?>

    <br />
    <!--footer-->
    <?php include 'header/footer.php'; ?>

</body>

</html>