var modal = document.getElementById("modal");
var modalImg = document.getElementById('modal-img');

function showModal(element){
    modalImg.src = element.src;
    modal.style.display = "flex";
}

function closeModal(){
    modal.style.display = "none";
}