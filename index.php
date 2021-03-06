<?php session_start(); ?>
<?php include_once 'layout/top.inc.php'; ?>
<?php include_once 'layout/nav.inc.php'; ?>

<div class="jumbotron">
    <h1 class="display-3">Tervetuloa</h1>
    <?php if (isset($_SESSION['logged_in'])): ?>
        <p>Olet kirjautunut käyttäjänä <?php echo $_SESSION['username']; ?></p>
    <?php endif; ?>
</div>

<div class="container">

    <div id="msg" class="alert alert-dismissible alert-warning d-none">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <h4 class="alert-heading"></h4>
        <p class="mb-0"></p>
    </div>

<h1>Kauppalista</h1>

<ul id="itemsUl" class="list-group"></ul>

</div>

<script src="js/getItems.js"></script>
<script src="js/common.js"></script>

<?php include_once 'layout/bot.inc.php'; ?>

