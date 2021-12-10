<?php session_start(); ?>
<?php 
if (!isset($_SESSION['logged_in'])) {
    header('Location:index.php');
    die();
}
?>

<?php include_once 'layout/top.inc.php'; ?>
<?php include_once 'layout/nav.inc.php'; ?>

    <div class="jumbotron">
        <h1 class="display-3">Lisää tuotteita</h1>
    </div>

<form name="addItemsForm">
    <div class="container">
        <div class="form-group">
            <label for="addItems" class="col-form-label mt-4">Lisää tuotteita kauppalistaan</label>
            <input name="addItems" type="text" class="form-control" placeholder="Lisää tuote">
        </div>
        <button type="submit" class="btn btn-primary">Lisää</button>
    </div>
</form>

<script src="JS/addItems.js"></script>

<?php include_once 'layout/bot.inc.php'; ?>