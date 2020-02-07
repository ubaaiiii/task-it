<?php
  include 'config/config.php';
?>

<!--Author      : @arboshiki-->
<div id="data-tables">
    <!--Basic example-->
    <div class="panel panel-light">
        <div class="panel-heading">
            <div class="panel-title">
                <h4>Request</h4>
            </div>
        </div>
        <div class="panel-body table-responsive">
            <table id="data-table-example1" class="display table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th rowspan=2>Kode Request</th>
                        <th rowspan=2>Deskripsi</th>
                        <th rowspan=2>Progress</th>
                        <th rowspan=2>Status</th>
                        <th colspan=2>Request</th>
                        <th colspan=2>Done</th>
                    </tr>
                    <tr>
                        <th>Tanggal</th>
                        <th>Oleh</th>
                        <th>Tanggal</th>
                        <th>Catatan</th>
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
            $('#data-table-example1').DataTable({
              ajax:{
                  url: "http://localhost/task-it/version/2.0/ajax/pages/data/request.php",
                  type:"POST",
                  dataSrc: ""
              },
              aoColumns:[
                  {data:"kodeRequest"},
                  {data:"deskripsi"},
                  {data:"progress",
                  render:function( data, type, row, meta, dataToSet ) {
                    switch (row.status) {
                      case "done":
                        return '<button id="bDone" data="'+data.kodeRequest+'" class="btn btn-success btn-3d btn-xs">Done</button><br><br><div class="progress progress-xs"><div class="progress-bar progress-bar-striped progress-bar-success active" role="progressbar" aria-valuenow="'+data+'" aria-valuemin="0" aria-valuemax="100" style="width: '+data+'%"><span class="sr-only">'+data+'% Complete</span></div></div>';
                        break;
                      case "rejected":
                        return '<button id="bRejected" data="'+data.kodeRequest+'" class="btn btn-danger btn-3d btn-xs">Rejected</button><br><br><div class="progress progress-xs"><div class="progress-bar progress-bar-striped progress-bar-danger active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"><span class="sr-only">0% Complete</span></div></div>';
                        break;
                      case "onprogress":
                        return '<button id="bProgress" data="'+data.kodeRequest+'" class="btn btn-warning btn-3d btn-xs">On Progress</button><br><br><div class="progress progress-xs"><div class="progress-bar progress-bar-striped progress-bar-warning active" role="progressbar" aria-valuenow="'+data+'" aria-valuemin="0" aria-valuemax="100" style="width: '+data+'%"><span class="sr-only">'+data+'% Complete</span></div></div>';
                        break;
                      default:
                        return '<button id="bNew" data="'+data.kodeRequest+'" class="btn btn-info btn-3d btn-xs">New</button><br><br><div class="progress progress-xs"><div class="progress-bar progress-bar-striped progress-bar-info active" role="progressbar" aria-valuenow="'+data+'" aria-valuemin="0" aria-valuemax="100" style="width: '+data+'%"><span class="sr-only">'+data+'% Complete</span></div></div>';
                        break;
                    }
                  }},
                  {data:"status",visible:false},
                  {data:"tanggalRequest"},
                  {data:"requester",
                  render:function( data, type, row, meta, dataToSet ) {
                    // return '<button class="btn btn-warning btn-outline btn-3d btn-circle btn-lg><i class="fa fa-github"></i></button>';
                    return '<button class="btn btn-info btn-outline btn-3d btn-circle btn-lg"><img src="img/users/6.jpg" class="img-circle" alt="" width="50" style="position:relative;top:-6px;left:-7px;"></button>';
                  }},
                  {data:"tanggalDone"},
                  {data:"catatanDone"}
              ]
            });
            $('#data-table-example2').DataTable({
                "scrollY": 300,
                "scrollX": true,
//                responsive: true
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
