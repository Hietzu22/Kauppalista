document.forms['addItemsForm'].addEventListener('submit', addItems);

function addItems(event) {
    event.preventDefault();

    const items = document.forms['addItemsForm']['addItems'].value;

    let postData = ("items="+items);

    console.log(postData);

    let ajax = new XMLHttpRequest();
    ajax.onload = function() {
        const data = JSON.parse(this.responseText);
        if (data.hasOwnProperty('success')) {
            alert('Tuote lisätty!');
        } else {
            showMessage('error',data.error);
        }
    }
    ajax.open("POST", "backend/saveItems.php", true);
    ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    ajax.send(postData);

}