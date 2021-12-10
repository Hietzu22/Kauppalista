document.forms['addOftenItemsForm'].addEventListener('submit', addOftenItems);

function addOftenItems(event) {
    event.preventDefault();

    const oftenItems = document.forms['addOftenItemsForm']['addOftenItems'].value;

    let postData = ("oftenItems="+oftenItems);

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
    ajax.open("POST", "backend/saveOftenItems.php", true);
    ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    ajax.send(postData);

}