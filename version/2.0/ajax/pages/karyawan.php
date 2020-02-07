<?php
  include_once 'config/config.php';
  include_once 'model/jabatan.php';
  include_once 'model/divisi.php';
?>

<!--Author      : @arboshiki-->
<div id="data-tables">
    <!--Basic example-->
    <div class="panel panel-light">
        <div class="panel-heading">
            <div class="panel-title">
                <h4>Karyawan</h4>
            </div>
        </div>
        <div class="panel-body table-responsive">
            <table id="data-table-example1" class="display table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>NIK</th>
                        <th>Nama Lengkap</th>
                        <th>Email</th>
                        <th>Divisi</th>
                        <th>Jabatan</th>
                    </tr>
                </thead>

                <tbody>
                </tbody>

            </table>
        </div>
    </div>
    <!--Scroll-->
    <script type="text/javascript">
        LobiAdmin.loadScript([
            'js/plugin/datatables/jquery.dataTables.min.js'
        ], function(){
            LobiAdmin.loadScript([
                'js/plugin/datatables/dataTables.bootstrap.min.js',
                'js/plugin/datatables/dataTables.responsive.min.js',
                'js/plugin/bootstrap-datepicker/bootstrap-datepicker.js'
            ], initPage);
        });

        function initPage(){
            $('#data-table-example2').DataTable({
            });
            $('#data-table-example1').DataTable({
              ajax:{
                  url: "http://localhost/task-it/version/2.0/ajax/pages/data/karyawan.php",
                  type:"POST",
                  dataSrc: ""
              },
              aoColumns:[
                  {data:"nik"},
                  {data:"nama"},
                  {data:"email"},
                  {data:"divisi",
      			render: function(data,type,row,meta){
                      var found = divisi.find(function(element) {
                        return element.id == data;
                      });
                      return (found==undefined)?("kesalahan kode"):(found.divisi);
                   }},
                  {data:"jabatan",
                   render: function(data,type,row,meta){
                      var found = jabatan.find(function(element) {
                        return element.id == data;
                      });
                      return (found==undefined)?("kesalahan kode"):(found.jabatan);
                   }}
              ]
            });
            $('#data-table-example3').DataTable({
                "columnDefs": [
                    {
                        // The `data` parameter refers to the data for the cell (defined by the
                        // `data` option, which defaults to the column being worked with, in
                        // this case `data: 0`.
                        "render": function ( data, type, row ) {
                            var val = data.replace(/[\$,]/g, '');
                            if (val > 100000){
                                return '<span class="text-success">'+data+'</span>';
                            }else{
                                return '<span class="text-danger">'+data+'</span>';
                            }
                        },
                        "targets": 5
                    },
                    { "visible": false,  "targets": [ 3 ] }
                ],
                responsive: true
            });
            var table = $('#data-table-example4').DataTable({
                responsive: true
            });
            // Apply the search
            $("#data-table-example4 thead th input[type=text]").on( 'keyup change', function () {

	        table
	            .column( $(this).closest('th').index()+':visible' )
	            .search( this.value )
	            .draw();

	    });
            // Apply the search
            $("#data-table-example4 thead th select").on('change', function () {

                var val = $.fn.dataTable.util.escapeRegex(
                    $(this).val()
                );

	        table
	            .column( $(this).closest('th').index()+':visible' )
	            .search( val ? '^'+val+'$' : '', true, false )
	            .draw();

	    } );
            $('.datepicker-demo').datepicker({
                format: 'yyyy/mm/dd'
            });

            $('.panel').lobiPanel({
                reload: false,
                editTitle: false
            });
        }
    </script>
</div>
