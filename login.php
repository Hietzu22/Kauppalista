<?php include_once 'layout/top.inc.php'; ?>
<?php include_once 'layout/nav.inc.php'; ?>

<div class="container">
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

<?php include_once 'layout/bot.inc.php'; ?>