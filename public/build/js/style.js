const btnList = document.getElementById("btn-list");
const btnGrid = document.getElementById("btn-grid");
const senaraiList = document.getElementById("senarai-list");
const senaraiGrid = document.getElementById("senarai-grid");

function showStep(stepIndex) {
    var steps = document.getElementsByClassName("step");
    steps[stepIndex].style.display = "block";
}

function nextStep(currentStep) {
    var steps = document.getElementsByClassName("step");
    steps[currentStep].style.display = "none";
    steps[currentStep + 1].style.display = "block";
}

function switchToCarta(jr, button) {
    const cardMode = document.getElementById("card-" + jr);
    const treeMode = document.getElementById("tree-" + jr);
    cardMode.classList.toggle("d-none");
    treeMode.classList.toggle("d-none");

    if (button.textContent == "Tampilkan Pseudo") {
        button.textContent = "Switch to Carta Organisasi";
    } else {
        button.textContent = "Tampilkan Pseudo";
    }
}

function switchToCartaCOPK(button) {
    const cardMode = document.getElementById("card-copk");
    const treeMode = document.getElementById("tree");
    cardMode.classList.toggle("d-none");
    treeMode.classList.toggle("d-none");

    if (button.textContent == "Tampilkan Pseudo") {
        button.textContent = "Switch to Carta Organisasi";
    } else {
        button.textContent = "Tampilkan Pseudo";
    }
}

function switchToList() {
    btnGrid.classList.remove("btn-secondary");
    btnGrid.classList.add("btn-outline-secondary");

    btnList.classList.remove("btn-outline-secondary");
    btnList.classList.add("btn-secondary");

    if (senaraiList.classList.contains("d-none")) {
        senaraiGrid.classList.toggle("d-none");
        senaraiList.classList.toggle("d-none");
    }
}

function switchToGrid() {
    btnGrid.classList.remove("btn-outline-secondary");
    btnGrid.classList.add("btn-secondary");

    btnList.classList.remove("btn-secondary");
    btnList.classList.add("btn-outline-secondary");

    if (senaraiGrid.classList.contains("d-none")) {
        senaraiGrid.classList.toggle("d-none");
        senaraiList.classList.toggle("d-none");
    }
}

$(document).ready(function () {
    $("#btn-register").click(function () {
        if ($("#useremail").val().includes("@")) {
            nextStep(0);
        } else {
            $("#emelalert").removeClass("d-none");
        }
    });
});
