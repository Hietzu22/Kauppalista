<?php include_once 'layout/top.inc.php'; ?>
<?php include_once 'layout/nav.inc.php'; ?>

    <div class="jumbotron">
        <h1 class="display-3">Lisää tuotteita</h1>
    </div>

<div class="container">
    <div class="form-group">
        <label class="col-form-label mt-4" for="addItems">Lisää tuotteita kauppalistaan</label>
        <input type="text" class="form-control" placeholder="Lisää tuote" id="addItems">
    </div>
    <button type="submit" class="btn btn-primary">Lisää</button>
</div>

<?php include_once 'layout/bot.inc.php'; ?>