$(document).ready(function () {

    var interval = null;

    $("#btn-Z1").click(()=>{
        clearInterval(interval)
        displayTableau("tagsZ1");
    })
    $("#btn-Z2").click(()=>{
        clearInterval(interval)
        displayTableau("tagsZ2");

    })
    $("#btn-Z3").click(()=>{
        clearInterval(interval)
        displayTableau("tagsZ3");
    })

    function displayTableau(tagType) {
        let table = $('#dataTable').DataTable({
            destroy: true,
            ajax: {url: "/api", dataSrc: tagType},
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ],
            dom: 'Bfrltip',
            columns: [
                {data: 'Id'},
                {data: 'StationId'},
                {data: 'eWONTagId'},
                {data: 'Name'},
                {data: 'Val'},
                {data: 'Description'}]
        })

        interval = setInterval(() => {
            table.ajax.reload(null,false);
        }, 2000)
    }
})