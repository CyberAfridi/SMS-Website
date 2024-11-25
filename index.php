<?php
session_start(); // Start the session to check if the user is logged in
?>
    <!-- Header -->
    <?php include_once 'views/layout/header.php'; ?>
<hr>

<body>
    <main>
        <!-- Intro Section -->
        <section id="intro">
            <?php include 'views/sections/intro.php'; ?>
        </section>
        <hr>
        <!-- new Section -->
        <section id="port" class="pb-3">
            <?php include 'views/sections/port.php'; ?>
        </section>
        <hr>
        <!-- Quote Section -->
        <section id="quote">
            <?php include 'views/sections/quote.php'; ?>
        </section>
        <hr>
        <!-- Features Section -->
        <section id="features" class="pb-3">
            <?php include 'views/sections/features.php'; ?>
        </section>
        <hr>
        <!-- Visitor Count -->
        <!-- Reviews Section -->
        <section id="reviews">
            <?php include 'views/sections/review.php'; ?>
        </section>
        <hr>
        <!-- contact Section -->
        <section id="form" class="pb-3">
            <?php include 'views/sections/contact.php'; ?>
        </section>
        <!-- <hr> -->
        <!-- Popups Section -->
        <section id="popups">
            <?php include 'views/sections/popups.php'; ?>
        </section>
    </main>
</body>
<footer id="footer">
    <!-- Footer -->
    <?php include_once 'views/layout/footer.php'; ?>
</footer>

</html>