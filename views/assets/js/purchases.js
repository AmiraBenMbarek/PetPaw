function saisirNom() {
    var name = document.getElementById('name').value;
    var regex = /^[A-Za-z]+$/;


    if (!(regex.test(name))) {
        document.getElementById("errorName").textContent = "Name has to be composed of letters only!";
        document.getElementById("errorName").style.color = "red";
        return 0;
    } else if (name[0] == name[0].toLowerCase()) {
        document.getElementById("errorName").textContent = "Name has to start by a capital letter!";
        document.getElementById("errorName").style.color = "red";
        return 0;
    } else {
        document.getElementById("errorName").textContent = "Name Verified";
        document.getElementById("errorName").style.color = "green";
        return 1;
    }
}

function saisirPrice() {
    var price = document.getElementById('price').value;

    if (price <= 0) {
        document.getElementById("errorPrice").textContent = "Price has to be positive!";
        document.getElementById("errorPrice").style.color = "red";
        return 0;
    } else {
        document.getElementById("errorPrice").textContent = "Price Verified";
        document.getElementById("errorPrice").style.color = "green";
        return 1;
    }
}

function saisirQuantity() {
    var quantity = document.getElementById('quantity').value;

    if (quantity <= 0) {
        document.getElementById("errorQuantity").textContent = "Quantity has to be positive!";
        document.getElementById("errorQuantity").style.color = "red";
        return 0;
    } else {
        document.getElementById("errorQuantity").textContent = "Quantity Verified";
        document.getElementById("errorQuantity").style.color = "green";
        return 1;
    }
}

function saisirWeight() {
    var weight = document.getElementById('weight').value;

    if (weight <= 0) {
        document.getElementById("errorWeight").textContent = "Weight has to be positive!";
        document.getElementById("errorWeight").style.color = "red";
        return 0;
    } else {
        document.getElementById("errorWeight").textContent = "Weight Verified";
        document.getElementById("errorWeight").style.color = "green";
        return 1;
    }
}

function saisirDescription() {
    var desc = document.getElementById('desc').value;
    var regex = /^[A-Za-z0-9]+$/;

    if (!(regex.test(desc))) {
        document.getElementById("errorDescription").textContent = "Description has to be composed of letters/numbers only!";
        document.getElementById("errorDescription").style.color = "red";
        return 0;
    } else if (desc[0] == desc[0].toLowerCase()) {
        document.getElementById("errorDescription").textContent = "Description has to start by a capital letter!";
        document.getElementById("errorDescription").style.color = "red";
        return 0;
    } else {
        document.getElementById("errorDescription").textContent = "Description Verified";
        document.getElementById("errorDescription").style.color = "green";
        return 1;
    }
}

function ajoutproduit(event) {
    if (saisirDescription() == 0 || saisirWeight() == 0 || saisirQuantity() == 0 ||
        saisirPrice() == 0 || saisirNom() == 0)
        event.preventDefault();
}