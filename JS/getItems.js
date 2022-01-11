window.addEventListener('load', getItems);
document.getElementById('itemsUl').addEventListener('click', clickItem);

function getItems() {
    console.log('Haetaan ostoslistaa');

    let ajax = new XMLHttpRequest();
    ajax.onload = function() {
        const data = JSON.parse(this.responseText);
        showItems(data);
    }

    ajax.open("GET", "backend/getItems.php");
    ajax.send();
}

function showItems(data) {
    const targetUl = document.getElementById("itemsUl");

    data.forEach(item => {
        const newLi = document.createElement('li');
        newLi.classList.add('list-group-item');
        newLi.dataset.itemId = item.id;

        const newDeleteBtn = document.createElement('button');
        newDeleteBtn.dataset.action = 'delete';
        const deleteText = document.createTextNode('Poista');
        newDeleteBtn.className = "btn btn-primary float-right";
        newDeleteBtn.appendChild(deleteText);

        newLi.appendChild(newDeleteBtn);

        const liText = document.createTextNode(item.itemname);
        newLi.appendChild(liText);

        targetUl.appendChild(newLi);
    });
}

function clickItem(event) {
    console.log(event.target.dataset.itemId);
    console.log(event.target.dataset.action);

    const action = event.target.dataset.action;

    if (action == 'delete') {
        let itemId = event.target.parentElement.dataset.itemId;
        deleteItem(itemId);
        return;
    }
}

function deleteItem(id) {
    let ajax = new XMLHttpRequest();
    ajax.onload = function() {
        data = JSON.parse(this.responseText);
        console.log(data);
        let liToDelete = document.querySelector('[data-item-id="' + id + '"]');
        let parent = liToDelete.parentElement;
        parent.removeChild(liToDelete);
    }
    ajax.open ("GET", "backend/deleteItem.php?id=" + id);
    ajax.send();
}