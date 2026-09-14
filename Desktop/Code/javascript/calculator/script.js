const display = document.getElementById("display");

function ajoutADisplay(input) {
    display.value += input;
}

function supprimerEcran() {
    display.value = "";
}

function calculer() {
    try {
        display.value = math.evaluate(display.value);
    }
    catch(error) {
        display.value = "Error";
    }
}