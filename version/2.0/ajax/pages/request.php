<?php
  include 'config/config.php';
?>

<!--Author      : @arboshiki-->
<div id="data-tables">
    <!--Basic example-->
    <div class="panel panel-light">
        <div class="panel-heading">
            <div class="panel-title">
                <h4>Divisi</h4>
            </div>
        </div>
        <div class="panel-body table-responsive">
            <table id="data-table-example1" class="display table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th rowspan=2>Kode Request</th>
                        <th rowspan=2>Deskripsi</th>
                        <th rowspan=2>Status</th>
                        <th colspan=3>Tanggal</th>
                        <th rowspan=2>Requester</th>
                        <th colspan=3>Tujuan</th>
                        <th colspan=2>Catatan</th>
                        <th rowspan=2>Progress</th>
                    </tr>
                    <tr>
                      <th>Request</th>
                      <th>Dikerjakan</th>
                      <th>Done</th>
                      <th>Manager</th>
                      <th>Pekerja</th>
                      <th>Divisi</th>
                      <th>Done</th>
                      <th>Tugas</th>
                </thead>

                <tbody>
                  <?php
                    $result = mysqli_query($connect,"SELECT * from request");
                    while ($row = mysqli_fetch_array($result)) {
                      echo "<tr>";
                      echo "<td>{$row['kodeRequest']}</td>";
                      echo "<td>{$row['deskripsi']}</td>";
                      echo "<td>{$row['status']}</td>";
                      echo "<td>{$row['tanggalRequest']}</td>";
                      echo "<td>{$row['tanggalDikerjakan']}</td>";
                      echo "<td>{$row['tanggalDone']}</td>";
                      echo "<td>{$row['requester']}</td>";
                      echo "<td>{$row['managerTujuan']}</td>";
                      echo "<td>{$row['dikerjakanOleh']}</td>";
                      echo "<td>{$row['divisiTujuan']}</td>";
                      echo "<td>{$row['catatanDone']}</td>";
                      echo "<td>{$row['catatanTugas']}</td>";
                      echo "<td>{$row['progress']}</td>";
                      echo "</tr>";
                    }
                  ?>
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
              "scrollY": 300,
              "scrollX": true
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
