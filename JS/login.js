document.forms['login'].addEventListener('submit', loginUser);

function loginUser(event) {
    event.preventDefault();
    const username = document.forms['login']['username'].value;
    const password = document.forms['login']['password'].value;

    if (username.length <= 0) {
        showMessage('error','Käyttäjänimi on pakollinen!');
        return;
    }

    if (password.length < 3) {
        showMessage('error','Salasanan minimipituus on 3 merkkiä!');
        return;
    }

    let ajax = new XMLHttpRequest();
    ajax.onload = function() {
        const data = JSON.parse(this.responseText);
        console.log(data);
        if (data.hasOwnProperty('success')) {
            window.location.href = "index.php?type=success&msg=Kirjauduttu onnistuneesti, Tervetuloa!"
            return;
        } else {
            showMessage('error', 'Kirjautuminen epäonnistui!')
        }
    }
    ajax.open("POST", "backend/loginUser.php", true);
    ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    ajax.send("username="+username+"&password="+password);
}