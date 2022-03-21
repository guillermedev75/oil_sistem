(function() {
    
    let modal = document.querySelector("#fundoModal")
    let btnModal = document.querySelector("#abrirModal")
    let btnCloseModal = document.querySelector("#fecharModal")

    btnModal.onclick = abrirModal
    btnCloseModal.onclick = fecharModal

    function abrirModal() {
        document.querySelector("#fundoModal").style.cssText = "transform: translateY(0%);opacity: 1;visibility: visible;"
        btnModal.style.display = "none"
        btnCloseModal.style.display = "block"
    }
    function fecharModal() {
        document.querySelector("#fundoModal").style.cssText = "transform: translateY(-150%);opacity: 0;visibility: hidden;"
        btnModal.style.display = "block"
        btnCloseModal.style.display = "none"
    }


})()