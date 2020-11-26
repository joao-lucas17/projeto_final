$(document).ready(function() {
    var table = $('#relatorio').DataTable( {
        lengthChange: false,
        buttons: [ 'excel', 'pdf', 'colvis' ]
    } );
 
    table.buttons().container()
        .appendTo( '#relatorio_wrapper .col-md-6:eq(0)' );
} );