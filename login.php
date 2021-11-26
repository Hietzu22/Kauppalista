<?php include_once 'layout/top.inc.php'; ?>
<?php include_once 'layout/nav.inc.php'; ?>

<div class="container">

    <div id="msg" class="alert alert-dismissible alert-warning d-none">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <h4 class="alert-heading">Warning!</h4>
        <p class="mb-0"></p>
    </div>

    <form>
        <fieldset>
            <legend>Kirjaudu</legend>
            <div class="form-group">
                <label for="username">Käyttäjänimi</label>
                <input name="username" type="text" class="form-control" placeholder="Käyttäjänimi">
            </div>
            <div class="form-group">
                <label for="password">Salasana</label>
                <input name="password" type="password" class="form-control" placeholder="Salasana">
            </div>
            <button type="submit" class="btn btn-primary">Kirjaudu</button>
        </fieldset>
    </form>
</div>

<script src="JS/common.js"></script>
<script src="JS/login.js"></script>

<?php include_once 'layout/bot.inc.php'; ?>
