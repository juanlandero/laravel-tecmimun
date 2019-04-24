$(document).ready(function(){
    $('#tabla-posiciones').bootstrapTable({
        url: 'posiciones/tabla',
        search: true,
        columns: [{
            field: 'id',
            title: 'ID',
          }, {
            field: 'alumno',
            title: 'ALUMNO'
          }, {
            field: 'delegacion',
            title: 'DELEGACIÓN'
          }, {
            field: 'total',
            title: 'PUNTOS',
          }
        ]
    });
});