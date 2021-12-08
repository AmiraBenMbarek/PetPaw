function saisirNom() {
    var name = document.getElementById('nom_regime').value;
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
    var name = document.getElementById('type_nourriture').value;
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



function saisirWeight() {
    var weight = document.getElementById('nbr_repas').value;

    
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


function ajout(event) {
    if (saisirrace() == 0 || saisirWeight() == 0 || saisirgenre() == 0)
        event.preventDefault();
}