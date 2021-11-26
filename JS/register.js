//Register-page functionality

document.forms['register'].addEventListener('submit', registerNewUser);

function registerNewUser(event) {
    event.preventDefault();

    const username = document.forms['register']['username'].value;
    const password = document.forms['register']['password'].value;
    const confirmpassword = document.forms['register']['confirmpassword'].value;

    if (username.length <= 0) {
        showMessage('error','Käyttäjänimi on pakollinen!');
        return;
    }

    if (password.length < 3) {
        showMessage('error','Salasanan minimipituus on 3 merkkiä!');
        return;
    }

    if (password.localeCompare(confirmpassword)!= 0) {
        showMessage('error','Salasanat eivät täsmää!');
        return;
    }

    let ajax = new XMLHttpRequest();
    ajax.onload = function() {
        const data = JSON.parse(this.responseText);
        if (data.hasOwnProperty('success')) {
            window.location.href = "login.php?type=success&msg=Rekisteröityminen onnistui! Voit nyt kirjautua käyttäjällesi!";
        } else {
            showMessage('error',data.error);
        }
    }
    ajax.open("POST", "backend/registerNewUser.php", true);
    ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    ajax.send("username="+username+"&password="+password);

}