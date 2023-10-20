const modal = document.querySelector('.modal-container')
 
function openModal($ra) {
    sessionStorage.setItem("ra", $ra)
    modal.classList.add('active')
}

function closeModal() {
    modal.classList.remove('active')
}
