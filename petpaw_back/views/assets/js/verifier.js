function saisirNom() {
    var name = document.getElementById('nom_Animal').value;
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

function saisirrace() {
    var name = document.getElementById('race').value;
    var regex = /^[A-Za-z]+$/;


    if (!(regex.test(name))) {
        document.getElementById("errorrace").textContent = "race has to be composed of letters only!";
        document.getElementById("errorrace").style.color = "red";
        return 0;
    }else {
        document.getElementById("errorrace").textContent = "race Verified";
        document.getElementById("errorrace").style.color = "green";
        return 1;
    }
}

function saisirgenre() {
    var name = document.getElementById('genre').value;
    var regex = /^[A-Za-z]+$/;


    if (!(regex.test(name))) {
        document.getElementById("errorgenre").textContent = "genre has to be composed of letters only!";
        document.getElementById("errorgenre").style.color = "red";
        return 0;
    }else {
        document.getElementById("errorgenre").textContent = "genre Verified";
        document.getElementById("errorName").style.color = "green";
        return 1;
    }
}

function saisirWeight() {
    var weight = document.getElementById('poid').value;

    
    if (weight <= 0) {
        document.getElementById("errorWeight").textContent = "Weight has to be positive!";
        document.getElementById("errorWeight").style.color = "red";
        return 0;
    } 
   
    else {
        document.getElementById("errorWeight").textContent = "Weight Verified";
        document.getElementById("errorWeight").style.color = "green";
        return 1;
    }
}

function saisirendroit_recuperation() {
    var name = document.getElementById('endroit_recuperation').value;
    var regex = /^[A-Za-z]+$/;


    if (!(regex.test(name))) {
        document.getElementById("errorendroit_recuperation").textContent = "genre has to be composed of letters only!";
        document.getElementById("errorendroit_recuperation").style.color = "red";
        return 0;
    }else {
        document.getElementById("errorendroit_recuperation").textContent = "genre Verified";
        document.getElementById("errorendroit_recuperation").style.color = "green";
        return 1;
    }
}

function saisirdate_recuperation() {
    var DateFond = document.getElementById('date_recuperation').value;
    var dat=new Date();

    if (new Date(DateFond).getTime() >= dat.getTime())
    {
        document.getElementById("errorDF").textContent = "date superiour";
        document.getElementById("errorDF").style.color = "red";
        return 0;
    }
    else
    {
        document.getElementById("errorDF").textContent = "date verified";
        document.getElementById("errorDF").style.color="green";
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
function ajout(event) {
    if (saisirrace() == 0 || saisirWeight() == 0 || saisirgenre() == 0 ||
         saisirendroit_recuperation() == 0 || saisirNom() == 0 || saisirdate_recuperation() == 0 || saisirDescription()==0)
        event.preventDefault();
}