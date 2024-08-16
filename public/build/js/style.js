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
    const cardMode = document.getElementById("card-"+jr);
    const treeMode = document.getElementById("tree-"+jr);
    cardMode.classList.toggle("d-none");
    treeMode.classList.toggle("d-none");

    if(button.textContent == "Tampilkan Pseudo") {
        button.textContent = "Switch to Carta Organisasi"
    } else {
        button.textContent = "Tampilkan Pseudo"
    }
}

function switchToCartaCOPK(button) {
    const cardMode = document.getElementById("card-copk");
    const treeMode = document.getElementById("tree");
    cardMode.classList.toggle("d-none");
    treeMode.classList.toggle("d-none");

    if(button.textContent == "Tampilkan Pseudo") {
        button.textContent = "Switch to Carta Organisasi"
    } else {
        button.textContent = "Tampilkan Pseudo"
    }
}

$(document).ready(function(){
    $('#btn-register').click(function(){
        if($('#useremail').val().includes("@")){
            nextStep(0);
        } else {
            $('#emelalert').removeClass ('d-none');
        }
    })
})


