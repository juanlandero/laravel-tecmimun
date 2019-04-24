$(document).ready(function(){
    $('#tabla-detalle').bootstrapTable({
        url: 'getInfo',
        pagination: true,
        search: true,
        columns: [{
            field: 'id',
            title: 'ID',
          }, {
            field: 'pais',
            title: 'PAÍS'
          }, {
            field: 'mail',
            title: 'EMAIL',
            align: 'center'
          },  {
            field: 'codigo',
            title: 'CÓDIGO',
            align: 'center'
          }, {
            field: 'recepcionado',
            title: 'RECEPCIÓN',
            align: 'center'
          }, {
            field: 'escuela',
            title: 'ESCUELA'
          },]
    });
});