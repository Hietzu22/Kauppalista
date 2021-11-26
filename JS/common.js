function showMessage(type, msg) {

    let msgBox = document.getElementById("msg");

    if (type == 'success') {
        msgBox.classList.remove('alert-warning');
        msgBox.classList.add('alert-success');
        msgBox.querySelector('h4').innerHTML = "Success!"
    } else if (type == 'error') {
        msgBox.classList.remove('alert-success');
        msgBox.classList.add('alert-warning');
        msgBox.querySelector('h4').innerHTML = "Warning!"
    }

    msgBox.querySelector('p').innerHTML = msg;
    msgBox.classList.remove('d-none');
}