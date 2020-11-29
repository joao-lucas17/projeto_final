$(document).ready(function() {
    var table = $('#relatorio').DataTable( {
        lengthChange: false,
        buttons: [ 'csv', 'excel', 'pdf', {extend: 'colvis',
                collectionLayout: 'fixed two-column'}, 'print']
    } );
 
    table.buttons().container()
        .appendTo( '#relatorio_wrapper .col-md-6:eq(0)' );
} );