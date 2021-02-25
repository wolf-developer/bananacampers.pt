<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title><?php echo $title;?></title>

    <!-- Favicon -->
    <link rel="icon" href="/assets/img/core-img/favicon.ico">
    
    <link href="/assets/css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- <link href="/assets/schedule/css/bootstrap.min.css" rel="stylesheet"> -->

    <link rel="stylesheet" type="text/css" href="/assets/schedule/calendar/dist/fullcalendar.min.css">
    <link rel="stylesheet" href="/assets/schedule/datepicker/datepicker3.css">
    <link href="/assets/css/others/toastr.min.css" rel="stylesheet">

    <script src="/assets/schedule/js/jquery.min.js"></script>    
    <script src="/assets/schedule/js/jquery-ui.js"></script>
    <script src="/assets/schedule/calendar/jquery-ui.min.js"></script> 
    <script src="/assets/schedule/moment/moment.js"></script>
    <script src="/assets/schedule/calendar/dist/fullcalendar.min.js"></script>
    <script src="/assets/schedule/js/bootstrap.min.js"></script>
    <script src="/assets/schedule/datepicker/bootstrap-datepicker.js"></script>
    <script src="/assets/schedule/sweetalert2/sweetalert2.min.js"></script>
    <script src="/assets/js/others/toastr.min.js"></script>
    <script>
        function toastr_call(type,title,msg,override){
            toastr.options = {
                "closeButton": true,
                "debug": false,
                "newestOnTop": false,
                "progressBar": true,
                "positionClass": "toast-bottom-left",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            } 
            toastr[type](msg, title,override); 
        }
    </script>
</head>

<body>
    

    <style type="text/css">
        .clickable { cursor: pointer; }
        .datepicker table tr td.disabled, .datepicker table tr td.disabled:hover {
        background: 0;  color: #999; cursor: default; }
        .datepick-month td .active .day { background-color: blue;color: #fff; }
        span.fc-time {  display: none; }
        span.fc-title { font-size: 15px; padding: 6px 5px; margin: 4px 2px; }
        .ui-datepicker-current-day .ui-state-active { background: #000000; }
        .dp-highlight .ui-state-default {
            background: #484;
            color: #FFF;
        }
    </style>

    <nav class="navbar navbar-expand-sm bg-success navbar-dark">

        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="/"><?php echo $this->lang->line('home');?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/index.php/My_ads"><?php echo $this->lang->line('adlist');?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="#"><?php echo $this->lang->line('bschedul');?></a>
            </li>
        </ul>

    </nav>

    <div id="top-content" class="container-fluid" style="text-align: left; padding-top: 30px;">
        <div class="container">
            <div class='row'>
                <div class='col-md-3'>
                    <div class='form-group'>
                        <label class='control-label'><?php echo $this->lang->line('stdate');?></label>
                        <input class='form-control' id="start_date" placeholder='<?php echo $this->lang->line('stdate');?>' type='text'/>
                    </div>
                </div>
                <div class='col-md-3'>
                    <div class='form-group'>
                        <label class='control-label'><?php echo $this->lang->line('endate');?></label>
                        <input class='form-control' placeholder='<?php echo $this->lang->line('endate');?>' id="end_date" type='text'/>
                    </div>
                </div>
                
                <div class="col-md-3">
                    <label><?php echo $this->lang->line('reasontt');?></label>       
                    <select class="form-control" id="reason">
                        <option value=""><?php echo $this->lang->line('selreason');?></option>
                        <option value="<?php echo $this->lang->line('reason1');?>"><?php echo $this->lang->line('reason1');?></option>
                        <option value="<?php echo $this->lang->line('reason2');?>"><?php echo $this->lang->line('reason2');?></option>
                        <option value="<?php echo $this->lang->line('reason3');?>"><?php echo $this->lang->line('reason3');?></option>
                    </select>             
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <br>
                        <input type='button' onclick="booking()" 
                            value='<?php echo $this->lang->line('reasonbt');?>' class='btn btn-danger btn-block'>
                        <button class="btn btn-info btn-block" onclick="open_sch()" >
                            <?php echo $this->lang->line('delreason');?></button>
                    </div>
                </div>
            </div>
            <div id="viewschedul">
                
            </div>
            <div id="calendar"></div>

            
        </div>
    </div>

    
</body>
    
<script type="text/javascript">

    function booking(){ 
        var start_date=$('#start_date').val();
        var end_date=$('#end_date').val();
        var reason=$('#reason').val();
        var ads_id = <?php echo $ads_id; ?>;

        if(start_date==''){
            toastr_call('warning','<?php echo $this->lang->line('wrdate');?>');
            $('#start_date').focus();
            return;
        }else if(end_date==''){
            toastr_call('warning','<?php echo $this->lang->line('wrdate');?>');
            $('#end_date').focus();
            return;
        }else if(reason==''){
            toastr_call('warning','<?php echo $this->lang->line('wrreas');?> ');
            $('#reason').focus();
            return;
        }
        $.post(
            '/index.php/Rent/add_unavailableschedule',
            {
                start_date:start_date,
                end_date:end_date,
                reason:reason,
                ads_id:ads_id
            },
            function(data){
                if(data == 'success'){
                    toastr_call('success','<?php echo $this->lang->line('succ');?>');
                    setTimeout(function(){
                        window.location.reload();
                    }, 4000)
                }else{
                    toastr_call('error','<?php echo $this->lang->line('alexist');?>');                        
                }
            }
        );
    } 

    function open_sch(){
        var ads_id = <?php echo $ads_id;?>;
        $.post(
            '/index.php/Rent/del_schedule',
            {
                ads_id:ads_id
            },
            function(data){
                $('#viewschedul').html(data);
            }
        );
    }

    !function($) {
        "use strict";

        var CalendarApp = function() {
            this.$body = $("body")
            this.$calendar = $('#calendar'),
            this.$event = ('#calendar-events div.calendar-events'),
            this.$calendarObj = null
        };

        
        CalendarApp.prototype.init = function() {
            var date = new Date();
            var d = date.getDate();
            var m = date.getMonth();
            var y = date.getFullYear();
            var form = '';
            var today = new Date($.now());
            var eventArr = <?php echo json_encode($tmpEventArr) ?>;
            var defaultEvents =  eventArr;
            var $this = this;
            
            $this.$calendarObj = $this.$calendar.fullCalendar({                 
                defaultView: 'month',  
                timeZone: 'local',
                events: defaultEvents,
                eventLimit: true,
                selectable: true,
            });
            
        },
        $.CalendarApp = new CalendarApp, $.CalendarApp.Constructor = CalendarApp        
    }(window.jQuery),

    function($) {
        "use strict";
        $.CalendarApp.init()
    }(window.jQuery);

    var nowTemp = new Date();
    var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);

    var checkin = $('#start_date').datepicker({

        beforeShowDay: function(date) {
            return date.valueOf() >= now.valueOf();
        },
        autoclose: true,
        minDate: nowTemp,
        todayHighlight : true,
        format : 'yyyy-mm-dd'

        }).on('changeDate', function(ev) {
            // console.log(checkin);
        if (ev.date.valueOf() > checkout.datepicker("getDate").valueOf() || !checkout.datepicker("getDate").valueOf()) {

            var newDate = new Date(ev.date);
            newDate.setDate(newDate.getDate() + 1);
            checkout.datepicker("update", newDate);
        }
        $('#end_date')[0].focus();
    });

    // var eventDates = {};
    var checkout = $('#end_date').datepicker({
        beforeShowDay: function(date) {
            if (!checkin.datepicker("getDate").valueOf()) {
            return date.valueOf() >= new Date().valueOf();
            } else {
            return date.valueOf() > checkin.datepicker("getDate").valueOf();
            }
        },
        autoclose: true,
        todayHighlight : true,
        format : 'yyyy-mm-dd',
        onSelect: function(value, date) {
            console.log(date);
            date.dpDiv.find('.active day')
            .css('background-color', '#000000');
        }

        }).on('changeDate', function(ev) {

    });

</script>