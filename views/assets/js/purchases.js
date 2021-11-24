function saisirNom() {
    var name = document.getElementById('Name_Pr').value;
    var regex = /^[A-Za-z]+$/;


    if (name == "") {
        document.getElementById("errorName").textContent = "Name has to be filled!";
        document.getElementById("errorName").style.color = "red";
        return 0;
    } else if (!(regex.test(name))) {
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
    var price = document.getElementById('Price_Pr').value;

    if (price == "") {
        document.getElementById("errorPrice").textContent = "Price has to be filled!";
        document.getElementById("errorPrice").style.color = "red";
        return 0;
    } else if (price <= 0) {
        document.getElementById("errorPrice").textContent = "Price can't be negative or null!";
        document.getElementById("errorPrice").style.color = "red";
        return 0;
    } else {
        document.getElementById("errorPrice").textContent = "Price Verified";
        document.getElementById("errorPrice").style.color = "green";
        return 1;
    }
}

function saisirQuantity() {
    var quantity = document.getElementById('Quantity_Pr').value;

    if (quantity == "") {
        document.getElementById("errorQuantity").textContent = "Quantity has to be filled!";
        document.getElementById("errorQuantity").style.color = "red";
        return 0;
    } else if (quantity <= 0) {
        document.getElementById("errorQuantity").textContent = "Quantity can't be negative or null!";
        document.getElementById("errorQuantity").style.color = "red";
        return 0;
    } else {
        document.getElementById("errorQuantity").textContent = "Quantity Verified";
        document.getElementById("errorQuantity").style.color = "green";
        return 1;
    }
}

function saisirType() {
    var name = document.getElementById('Type_Pr').value;
    var regex = /^[A-Za-z]+$/;


    if (name == "") {
        document.getElementById("errorType").textContent = "Type has to be filled!";
        document.getElementById("errorType").style.color = "red";
        return 0;
    } else if (!(regex.test(name))) {
        document.getElementById("errorType").textContent = "Type has to be composed of letters only!";
        document.getElementById("errorType").style.color = "red";
        return 0;
    } else if (name[0] == name[0].toLowerCase()) {
        document.getElementById("errorType").textContent = "Type has to start by a capital letter!";
        document.getElementById("errorType").style.color = "red";
        return 0;
    } else {
        document.getElementById("errorType").textContent = "Type Verified";
        document.getElementById("errorType").style.color = "green";
        return 1;
    }
}

function saisirCategory() {
    var name = document.getElementById('Category_Pr').value;
    var regex = /^[A-Za-z]+$/;


    if (name == "") {
        document.getElementById("errorCategory").textContent = "Category has to be filled!";
        document.getElementById("errorCategory").style.color = "red";
        return 0;
    } else if (!(regex.test(name))) {
        document.getElementById("errorCategory").textContent = "Category has to be composed of letters only!";
        document.getElementById("errorCategory").style.color = "red";
        return 0;
    } else if (name[0] == name[0].toLowerCase()) {
        document.getElementById("errorCategory").textContent = "Category has to start by a capital letter!";
        document.getElementById("errorCategory").style.color = "red";
        return 0;
    } else {
        document.getElementById("errorCategory").textContent = "Category Verified";
        document.getElementById("errorCategory").style.color = "green";
        return 1;
    }
}

function saisirDescription() {
    var desc = document.getElementById('Description_Pr').value;
    var regex = /^[A-Za-z0-9 ]+$/;

    if (desc == "") {
        document.getElementById("errorDescription").textContent = "Description has to be filled!";
        document.getElementById("errorDescription").style.color = "red";
        return 0;
    } else if (!(regex.test(desc))) {
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
    if (saisirDescription() == 0 || saisirQuantity() == 0 || saisirPrice() == 0 || saisirNom() == 0 ||
        saisirType() == 0 || saisirCategory() == 0)
        event.preventDefault();
}