$(document).ready(function () {
    $('#relatorio').DataTable({
        dom: 'Bfrtip',
         buttons: [
             {
                extend: 'print',
                text: 'Imprimir'
             }
         ]
    });
});