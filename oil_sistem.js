$(document).ready(function(){

    let dataCarros

    let createCarroModal = $('#createCarroModal')
    let createCarroForm = $('#createCarroForm')

    let deleteId

    createCarroForm.submit(e => {

        e.preventDefault()
        createCarro()

    })

    function getCarros() {

        $.ajax({

            url: "controller.php", 
            method: "POST",
            data: { type: "get-carros" },
            dataType: "json",
            success: json => {

                dataCarros = json
                listCarros()

            }

        })

    }

    function listCarros() {

        let table = $('tbody')

        table.html('')

        let dataLength = dataCarros.length

        if(dataLength == 0) {
            table.append(`
            
                <tr>
                <td colspan="3" class="text-center">Nenhum carro cadastrado</td>
                </tr>

            `)
        } else {
            for (let i in dataCarros) {

                table.append(`
                
                    <tr>
                    <td>${dataCarros[i].carro_id}</td>
                    <td>${dataCarros[i].carro_name}</td>
                    <td class="d-flex justify-content-center"><button class="btn btn-danger py-0 deleteCarBtn" id="deleteCarBtn" data-id="${dataCarros[i].carro_id}">Apagar</button></td>
                    </tr>
    
                `)
    
            }
        }
        


        $(".deleteCarBtn").click(function() {

            deleteId = $(this).attr("data-id")
            deleteCarro(deleteId)

        })

    }

    function createCarro() {

        let carroInput = $("#carroInput").val()

        $.ajax({

            url: "controller.php",
            method: 'POST',
            dataType: 'json',
            data: { type: "create-carro", carro: carroInput },
            success: () => {
                createCarroModal.modal('hide')
                getCarros()
            }   

        })

    }

    function deleteCarro(deleteid) {



        $.ajax({

            url: "controller.php",
            method: 'POST',
            dataType: 'json',
            data: { type: "delete-carro", id: deleteid },
            success: () => {

                getCarros()

            }

        })

    }

    function renderPage() {
        getCarros()
    }
    

    renderPage()

})