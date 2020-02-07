<!--Author     : @arboshiki-->
<div id="dashboard" class="dashboard">
    <div class="row">
        <div class="col-sm-6 col-lg-3">
            <div class="tile-stat bg-white border-1">
                <div class="tile-body min-h-200 text-center">
                    <h3 class="margin-top-5 text-info font-weight-700">Pemasukan</h3>
                    <div class="sparkline-responsive" data-Type="line" data-max-width="200" data-Height="70" data-data="[2,3,1,4,5,3,6,4,7,9,7]"></div>
                    <div class="row">
                        <div class="col-xs-4">
                            <h5>TODAY</h5>
                            <h5>$ 1 723 <i class="fa fa-level-up text-info"></i></h5>
                        </div>
                        <div class="col-xs-4">
                            <h5>WEEK</h5>
                            <h5>$ 32 880 <i class="fa fa-level-up text-info"></i></h5>
                        </div>
                        <div class="col-xs-4">
                            <h5>MONTH</h5>
                            <h5>$ 105 331 <i class="fa fa-level-down text-danger"></i></h5>
                        </div>
                    </div>
                </div>
                <div class="tile-progressbar">
                    <span class="bg-info" style="width: 27.9%;"></span>
                </div>
                <div class="tile-footer">
                    <div class="sparkline vertical-align-middle text-center" data-Type="pie" data-Height="40">6,8,12,4,5</div>
                    <h4>27.9% <i class="fa fa-level-up text-info"></i></h4>
                    <h5>Different currencies</h5>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="tile-stat bg-white border-1">
                <div class="tile-body min-h-200 text-center">
                    <h3 class="margin-top-5 text-info font-weight-700">VISITORS</h3>
                    <div class="sparkline-responsive" data-type="bar" data-max-width="200" data-height="70" data-data="[10,8,5,3,6,4,7,9,10,13,11,16]"></div>
                    <div class="row">
                        <div class="col-xs-4">
                            <h5>TODAY</h5>
                            <h5>57 840 <i class="fa fa-level-up text-info"></i></h5>
                        </div>
                        <div class="col-xs-4">
                            <h5>WEEK</h5>
                            <h5>904 672 <i class="fa fa-level-up text-info"></i></h5>
                        </div>
                        <div class="col-xs-4">
                            <h5>MONTH</h5>
                            <h5>37 876 109 <i class="fa fa-level-down text-danger"></i></h5>
                        </div>
                    </div>
                </div>
                <div class="tile-progressbar">
                    <span class="bg-info" style="width: 65.5%;"></span>
                </div>
                <div class="tile-footer">
                    <span class="sparkline vertical-align-middle text-left" data-Type="bar" data-BarWidth="5" data-Height="30">1,4,5,3,6,4,7,9,7</span>
                    <h4>65.5% <i class="fa fa-level-up text-info"></i></h4>
                    <h5>Statistics of this year</h5>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="tile-stat bg-white border-1">
                <div class="tile-body min-h-200">
                    <div class="pull-left">
                        <h3 class="margin-top-5 text-info font-weight-700">VISITORS</h3>
                        <h2 class="margin-top-5 text-info">540k+</h2>
                    </div>
                    <i class="fa fa-globe fa-4x pull-right text-info"></i>
                    <div class="clearfix"></div>
                    <div class="sparkline text-center" data-Type="pie" data-Height="90">6,8,12,4,5</div>
                </div>
                <div class="tile-progressbar">
                    <span class="bg-info" style="width: 35.5%;"></span>
                </div>
                <div class="tile-footer">
                    <span class="sparkline vertical-align-middle text-left" data-Type="bar" data-BarWidth="5"  data-Height="30">8,6,4,8,10,6,5,9,10</span>
                    <h4>35.5% <i class="fa fa-level-up text-info"></i></h4>
                    <h5>Statistics from last year</h5>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="tile-stat bg-white border-1">
                <div class="tile-body min-h-200">
                    <div class="pull-left">
                        <h3 class="margin-top-5 text-info font-weight-700">USERS</h3>
                        <h2 class="margin-top-5 text-info">210k+</h2>
                    </div>
                    <i class="fa fa-facebook-official fa-4x pull-right text-info"></i>
                    <div class="clearfix"></div>
                    <div class="sparkline text-center" data-Type="pie" data-Offset="80" data-Height="90">6,8,12,4,5</div>
                </div>
                <div class="tile-progressbar">
                    <span class="bg-info" style="width: 12.2%;"></span>
                </div>
                <div class="tile-footer">
                    <span class="sparkline vertical-align-middle text-left" data-Type="line" data-DefaultPixelsPerValue="5" data-Height="30">8,3,4,10,6,5,6,5,8,4,9,10</span>
                    <h4>12.2% <i class="fa fa-level-down text-danger"></i></h4>
                    <h5>Statistics from last year</h5>
                </div>
            </div>
        </div>
    </div>
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
                            return '<div class="progress progress-xs"><div class="progress-bar progress-bar-striped progress-bar-success active" role="progressbar" aria-valuenow="'+data+'" aria-valuemin="0" aria-valuemax="100" style="width: '+data+'%"><span class="sr-only">'+data+'% Complete</span></div></div><button id="bDone" data="'+data.kodeRequest+'" class="btn btn-success btn-3d btn-xs" style="position:relative;top:-15px;">Done</button>';
                            break;
                          case "rejected":
                            return '<div class="progress progress-xs"><div class="progress-bar progress-bar-striped progress-bar-danger active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"><span class="sr-only">0% Complete</span></div></div><button id="bRejected" data="'+data.kodeRequest+'" class="btn btn-danger btn-3d btn-xs" style="position:relative;top:-15px;">Rejected</button>';
                            break;
                          case "onprogress":
                            return '<div class="progress progress-xs"><div class="progress-bar progress-bar-striped progress-bar-warning active" role="progressbar" aria-valuenow="'+data+'" aria-valuemin="0" aria-valuemax="100" style="width: '+data+'%"><span class="sr-only">'+data+'% Complete</span></div></div><button id="bProgress" data="'+data.kodeRequest+'" class="btn btn-warning btn-3d btn-xs" style="position:relative;top:-15px;">On Progress</button>';
                            break;
                          default:
                            return '<div class="progress progress-xs"><div class="progress-bar progress-bar-striped progress-bar-info active" role="progressbar" aria-valuenow="'+data+'" aria-valuemin="0" aria-valuemax="100" style="width: '+data+'%"><span class="sr-only">'+data+'% Complete</span></div></div><button id="bNew" data="'+data.kodeRequest+'" class="btn btn-info btn-3d btn-xs" style="position:relative;top:-15px;">New</button>';
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

    <div class="row">
        <div class="col-md-6">
            <div>
                <!--Recent messages-->
                <div class="panel panel-light">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>Recent messages</h4>
                        </div>
                    </div>
                    <div class="panel-body no-padding">
                        <div class="lobi-messages">
                            <div class="message-contact">
                                Jane Smith
                            </div>
                            <div class="message-list-wrapper">
                                <ul class="message-list">
                                    <li class="message message-receiver">
                                        <img class="message-avatar" src="img/users/1.jpg" alt="...">
                                        <div class="message-body">
                                            <span class="message-time"><i class="fa fa-clock-o"></i> 09:18</span>
                                            <p class="message-text">
                                                Lorem ipsum dolor sit amet netus wreaths erewhile nineveh, barrows makes innocent.
                                            </p>
                                        </div>
                                    </li>
                                    <li class="message message-sender">
                                        <img class="message-avatar" src="img/users/me-160.jpg" alt="..." width="50">
                                        <div class="message-body">
                                            <span class="message-time"><i class="fa fa-clock-o"></i> 12:35</span>
                                            <p class="message-text">
                                                Lorem ipsum dolor sit amet netus wreaths erewhile nineveh, barrows makes innocent. Test imposed kernan apple crystal nec, donning moan netus girth wish degree small taunt.
                                            </p>
                                        </div>
                                    </li>
                                    <li class="message-older-date">
                                        <span class="older-date-text"><i class="fa fa-calendar"></i> 20/02/2015 Mon</span>
                                    </li>
                                    <li class="message message-receiver">
                                        <img class="message-avatar" src="img/users/1.jpg" alt="...">
                                        <div class="message-body">
                                            <span class="message-time"><i class="fa fa-clock-o"></i> 13:00</span>
                                            <p class="message-text">
                                                Lorem ipsum dolor sit amet netus wreaths erewhile nineveh, barrows makes innocent.
                                            </p>
                                        </div>
                                    </li>
                                    <li class="message message-sender">
                                        <img class="message-avatar" src="img/users/me-160.jpg" alt="..." width="50">
                                        <div class="message-body">
                                            <span class="message-time"><i class="fa fa-clock-o"></i> 18:19</span>
                                            <p class="message-text">
                                                Test imposed kernan apple crystal nec.
                                            </p>
                                        </div>
                                    </li>
                                    <li class="message message-receiver">
                                        <img class="message-avatar" src="img/users/1.jpg" alt="...">
                                        <div class="message-body">
                                            <span class="message-time"><i class="fa fa-clock-o"></i> 19:23</span>
                                            <p class="message-text">
                                                Lorem ipsum dolor sit amet netus wreaths erewhile nineveh, barrows makes innocent.
                                            </p>
                                        </div>
                                    </li>
                                    <li class="message message-sender">
                                        <img class="message-avatar" src="img/users/me-160.jpg" alt="..." width="50">
                                        <div class="message-body">
                                            <span class="message-time"><i class="fa fa-clock-o"></i> 20:05</span>
                                            <p class="message-text">
                                                Test imposed kernan apple crystal nec, donning moan netus girth wish degree small taunt.
                                            </p>
                                        </div>
                                    </li>
                                    <li class="message-older-date">
                                        <span class="older-date-text"><i class="fa fa-calendar"></i> 27/02/2015 Fri</span>
                                    </li>
                                    <li class="message message-receiver">
                                        <img class="message-avatar" src="img/users/1.jpg" alt="...">
                                        <div class="message-body">
                                            <span class="message-time"><i class="fa fa-clock-o"></i> 21:35</span>
                                            <p class="message-text">
                                                Lorem ipsum dolor sit amet netus wreaths erewhile nineveh, barrows makes innocent.
                                            </p>
                                        </div>
                                    </li>
                                    <li class="message message-sender">
                                        <img class="message-avatar" src="img/users/me-160.jpg" alt="..." width="50">
                                        <div class="message-body">
                                            <span class="message-time"><i class="fa fa-clock-o"></i> 22:47</span>
                                            <p class="message-text">
                                                Test imposed kernan apple crystal nec, donning moan netus girth wish degree small taunt.
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="well well-sm margin-bottom-no">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Say something...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-info btn-pretty" type="button">Send</button>
                                    </span>
                                </div><!-- /input-group -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="dashboard-todo-list"></div>
        </div>
        <div class="col-md-6">
            <!--Timeline-->
            <div class="panel panel-light">
                <div class="panel-heading">
                    <div class="panel-title">
                        Timeline
                    </div>
                </div>
                <div class="panel-body no-padding">
                    <ul class="timeline padding-vertical-10 margin-bottom-no">
                        <li>
                            <div class="timeline-badge bg-info"><i class="fa fa-location-arrow"></i></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h5 class="timeline-title"><b><a href="#" class="text-danger">Daniel Mayer</a> was at corner cafe</b></h5>
                                    <small class="text-muted">19 minutes ago</small>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-badge bg-success"><i class="fa fa-image"></i></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h5 class="timeline-title"><b><a href="#" class="text-danger">George Darso</a> shared a photo with you</b></h5>
                                    <small class="text-muted">20 minutes ago</small>
                                </div>
                                <div class="timeline-body">
                                    <img src="img/demo/1_160.jpg" alt=""/>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-badge bg-danger"><i class="fa fa-link"></i></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h5 class="timeline-title"><b><a href="#" class="text-danger">Guga Grigo</a> shared a link with you</b></h5>
                                    <small class="text-muted">25 minutes ago</small>
                                </div>
                                <div class="timeline-body">
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="#">
                                                <img class="media-object" src="img/demo/100x100-1.jpg" width="50" alt="...">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <h5 class="media-heading">Lorem ipsum dolor sit amore</h5>
                                            <small class="text-muted">03:15</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-badge bg-primary"><i class="fa fa-reply"></i></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h5 class="timeline-title"><b><a href="#" class="text-danger">Mari Abdu</a> replied to <a href="#" class="text-danger">your post</a></b></h5>
                                    <small class="text-muted">55 minutes ago</small>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!--Calendar events-->
            <div id="dashboard-events" class="panel panel-light">
                <div class="panel-heading">
                    <div class="panel-title">
                        <h4>Events</h4>
                    </div>
                </div>
                <div class="panel-body">

                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        (function(){
            //Load and initialize sparkline charts
            LobiAdmin.loadScript([
                'js/plugin/sparkline/jquery.sparkline.min.js'
            ], initSparklines);

            //Load and initialize chartjs
            LobiAdmin.loadScript([
                'js/plugin/chartjs/Chart.min.js'
            ], initChartjs);

            //Load and initialize lobilist
            LobiAdmin.loadScript([
                'js/lobi-plugins/lobilist.min.js'
            ], initLobiList);

            LobiAdmin.loadScript([
                'js/plugin/moment/moment.min.js'
            ], function(){
                LobiAdmin.loadScript('js/plugin/fullcalendar/fullcalendar.min.js', initPage);
            });

            function initLobiList(){
                $('#dashboard-todo-list').lobiList({
                    sortable: false,
                    controls: ['edit', 'styleChange'],
                    lists: [
                        {
                            title: 'TODOs',
                            defaultStyle: 'lobilist-info',
                            items: [
                                {
                                    title: 'Floor cool cinders',
                                    description: 'Thunder fulfilled travellers folly, wading, lake.',
                                    dueDate: '2015-01-31'
                                },
                                {
                                    title: 'Periods pride',
                                    description: 'Accepted was mollis',
                                    done: true
                                },
                                {
                                    title: 'Flags better burns pigeon',
                                    description: 'Rowed cloven frolic thereby, vivamus pining gown intruding strangers prank treacherously darkling.',
                                },
                                {
                                    title: 'Accepted was mollis',
                                    description: 'Rowed cloven frolic thereby, vivamus pining gown intruding strangers prank treacherously darkling.',
                                    dueDate: '2015-02-02'
                                },
                                {
                                    title: 'Composed trays',
                                    description: 'Hoary rattle exulting suspendisse elit paradises craft wistful. Bayonets allures prefer traits wrongs flushed. Tent wily matched bold polite slab coinage celerities gales beams.',
                                },
                                {
                                    title: 'Chic leafy',
                                    checked: true
                                }
                            ]
                        }
                    ]
                });
            }

            function initSparklines(){
                //Call this method before calling .sparkline() plugin to activate default colors, bar widths and other options
                initSparklineDefaults();
                initResponsiveSparklines();
                $('.sparkline').sparkline('html', {
                    enableTagOptions: true
                });
            }

            function initChartjs(){
                var options = {
                    responsive: true
                };
                var COLOR1 = LobiAdmin.lightenColor(LobiAdmin.DEFAULT_COLOR, -15);
                var COLOR2 = LobiAdmin.lightenColor(LobiAdmin.DEFAULT_COLOR, 0);
                var COLOR3 = LobiAdmin.fadeOutColor(LobiAdmin.DEFAULT_COLOR, 20);
                var COLOR4 = LobiAdmin.fadeOutColor(LobiAdmin.DEFAULT_COLOR, 40);

                var FADEOUT_COLOR_FACTOR = 20;

                //Initialize line chart
                (function(){
                    // Get the context of the canvas element we want to select
                    var statisticData = {
                        labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
                        datasets: fillChartJsColors('line', [
                            {
                                label: "Income in USD",
                                strokeColor: LobiAdmin.fadeOutColor(LobiAdmin.DEFAULT_COLOR, 20),
                                data: [55, 50, 55, 49, 56, 48, 50, 46, 50, 44, 56, 52]
                            },
                            {
                                label: "Income in EUR",
                                strokeColor: LobiAdmin.fadeOutColor(LobiAdmin.DEFAULT_COLOR, 60),
                                data:  [51, 54, 58, 66, 61, 64, 62, 56, 67, 58, 56, 54]
                            }
                        ])
                    };
                    var canvas = $('#line-chart');
                    var ctx = canvas[0].getContext("2d");
                    var statistictsChart = new Chart(ctx).Line(statisticData, options);
                    var legend = $(statistictsChart.generateLegend());
                    canvas.parent().append(legend);

                    //Update charts on panel size change
                    $('#dashboard-statisticts-panel').on('onFullScreen.lobiPanel onSmallSize.lobiPanel resizeStop.lobiPanel onPin.lobiPanel onUnpin.lobiPanel dragged.lobiPanel', function(ev){
                        statistictsChart.destroy();
                        statistictsChart = new Chart(statistictsChart.chart.ctx).Line(statisticData, options);
                    });
                })();

    //------------------------------------------------------------------------------
    //          Initialize pie charts
    //------------------------------------------------------------------------------
                (function(){
                    var data = [
                        {
                            value: 970,
                            color: COLOR1,
                            highlight: LobiAdmin.fadeOutColor(COLOR1, FADEOUT_COLOR_FACTOR),
                            label: "Shoes"
                        },
                        {
                            value: 505,
                            color: COLOR2,
                            highlight: LobiAdmin.fadeOutColor(COLOR2, FADEOUT_COLOR_FACTOR),
                            label: "Caps"
                        },
                        {
                            value: 400,
                            color: COLOR3,
                            highlight: LobiAdmin.fadeOutColor(COLOR3, FADEOUT_COLOR_FACTOR),
                            label: "Jeans"
                        },
                        {
                            value: 250,
                            color: COLOR4,
                            highlight: LobiAdmin.fadeOutColor(COLOR4, FADEOUT_COLOR_FACTOR),
                            label: "Shirts"
                        }
                    ];
                    var ctx = $('#dashbboard-clothing-sales')[0].getContext('2d');
                    new Chart(ctx).Doughnut(data,{});
                })();
    //------------------------------------------------------------------------------
                (function(){
                    var data = [
                        {
                            value: 370,
                            color: COLOR4,
                            highlight: LobiAdmin.fadeOutColor(COLOR4, FADEOUT_COLOR_FACTOR),
                            label: "Mouse"
                        },
                        {
                            value: 457,
                            color: COLOR3,
                            highlight: LobiAdmin.fadeOutColor(COLOR3, FADEOUT_COLOR_FACTOR),
                            label: "HDD"
                        },
                        {
                            value: 270,
                            color: COLOR1,
                            highlight: LobiAdmin.fadeOutColor(COLOR1, FADEOUT_COLOR_FACTOR),
                            label: "Laptop"
                        },
                        {
                            value: 89,
                            color: COLOR2,
                            highlight: LobiAdmin.fadeOutColor(COLOR2, FADEOUT_COLOR_FACTOR),
                            label: "Webcam"
                        }
                    ];
                    var ctx = $('#dashbboard-computing-sales')[0].getContext('2d');
                    // For a pie chart
                    new Chart(ctx).Doughnut(data,{});
                })();
    //------------------------------------------------------------------------------
                (function(){
                    var data = [
                        {
                            value: 20,
                            color: COLOR3,
                            highlight: LobiAdmin.fadeOutColor(COLOR3, FADEOUT_COLOR_FACTOR),
                            label: "Table"
                        },
                        {
                            value: 20,
                            color: COLOR1,
                            highlight: LobiAdmin.fadeOutColor(COLOR1, FADEOUT_COLOR_FACTOR),
                            label: "Chair"
                        },
                        {
                            value: 8,
                            color: COLOR4,
                            highlight: LobiAdmin.fadeOutColor(COLOR4, FADEOUT_COLOR_FACTOR),
                            label: "Desk"
                        },
                        {
                            value: 9,
                            color: COLOR2,
                            highlight: LobiAdmin.fadeOutColor(COLOR2, FADEOUT_COLOR_FACTOR),
                            label: "Sofa"
                        }
                    ];
                    var ctx = $('#dashbboard-furniture-sales')[0].getContext('2d');
                    // For a pie chart
                    new Chart(ctx).Doughnut(data, {});
                })();
    //------------------------------------------------------------------------------
                (function(){
                    var data = [
                        {
                            value: 23,
                            color: COLOR4,
                            highlight: LobiAdmin.fadeOutColor(COLOR4, FADEOUT_COLOR_FACTOR),
                            label: "Spoon"
                        },
                        {
                            value: 31,
                            color: COLOR2,
                            highlight: LobiAdmin.fadeOutColor(COLOR2, FADEOUT_COLOR_FACTOR),
                            label: "Cup"
                        },
                        {
                            value: 51,
                            color: COLOR3,
                            highlight: LobiAdmin.fadeOutColor(COLOR3, FADEOUT_COLOR_FACTOR),
                            label: "Plate"
                        },
                        {
                            value: 21,
                            color: COLOR1,
                            highlight: LobiAdmin.fadeOutColor(COLOR1, FADEOUT_COLOR_FACTOR),
                            label: "Knife"
                        }
                    ];
                    var ctx = $('#dashbboard-vessel-sales')[0].getContext('2d');
                    // For a pie chart
                    new Chart(ctx).Doughnut(data, {});
                })();
            }

            function initPage(){
                //Initialize lobipanels
                $('.panel:not(.panel-with-tabs)').lobiPanel({
                    editTitle: false,
                    reload: false,
                    sortable: true
                });

                //Initialize FullCalendar
                (function(){
                    $('#dashboard-events .panel-body').fullCalendar({
                        header: {
                            left: 'prev,next today',
                            center: 'title',
                            right: 'month,agendaWeek,agendaDay'
                        },
                        defaultDate: '2015-09-12',
                        droppable: true,
                        eventLimit: true,
                        businessHours: true,
                        eventRender: function(event, element, view){
                            if (event.description){
                                element.append('<span class="fc-description">'+event.description+'</span>');
                            }
                        },
                        events: [
                            {
                                    title: 'All Day Event',
                                    start: '2015-09-01'
                            },
                            {
                                    title: 'Long Event',
                                    start: '2015-09-07',
                                    end: '2015-09-10',
                                    className: 'bg-success border-transparent'

                            },
                            {
                                    id: 999,
                                    title: 'Repeating Event',
                                    start: '2015-09-09T16:00:00',
                                    description: 'Repeating event description',
                                    className: 'bg-danger border-transparent'
                            },
                            {
                                    id: 999,
                                    title: 'Repeating Event',
                                    start: '2015-09-16T16:00:00',
                                    description: 'Repeating event description',
                                    className: 'bg-danger border-transparent'
                            },
                            {
                                    title: 'Conference',
                                    start: '2015-09-11',
                                    end: '2015-09-13',
                                    description: 'Description will held in hole',
                                    className: 'bg-purple border-transparent'
                            },
                            {
                                    title: 'Meeting',
                                    start: '2015-09-12T10:30:00',
                                    end: '2015-09-12T12:30:00',
                                    className: 'bg-info border-transparent'
                            },
                            {
                                    title: 'Lunch',
                                    start: '2015-09-12T12:00:00',
                                    description: 'The lunch will be at corner cafe'
                            },
                            {
                                    title: 'Meeting',
                                    start: '2015-09-12T14:30:00',
                                    className: 'bg-purple border-transparent'
                            },
                            {
                                    title: 'Happy Hour',
                                    start: '2015-09-12T17:30:00'
                            },
                            {
                                    title: 'Dinner',
                                    start: '2015-09-12T20:00:00',
                                    className: 'bg-warning border-transparent'
                            },
                            {
                                    title: 'Birthday Party',
                                    start: '2015-09-13T07:00:00',
                                    className: 'bg-warning border-transparent'
                            },
                            {
                                    title: 'Click for Google',
                                    url: 'http://google.com/',
                                    start: '2015-09-28'
                            }
                        ]
                    });
                    $('#dashboard-events').on('onFullScreen.lobiPanel onSmallSize.lobiPanel resizeStop.lobiPanel onPin.lobiPanel onUnpin.lobiPanel dragged.lobiPanel', function(ev, lobiPanel){
                        var cal = lobiPanel.$el.find('.panel-body');
                        var ratio  = cal.fullCalendar('option', 'aspectRatio');
                        cal.fullCalendar('option', 'height', cal.find('.fc-view-container').outerWidth() / ratio);
                    });
                })();
            }
        })();

    </script>
</div>
