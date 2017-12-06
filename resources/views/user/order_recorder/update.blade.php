<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('datepicker/css/datepicker.min.css')}}">
    <script src="{{ asset('datepicker/js/bootstrap-datepicker.min.js') }}"></script>
    <link rel="stylesheet" href="{{asset('datepicker/css/bootstrap.min.css')}}">

    <script src="{{ asset('datepicker/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('datepicker/moment.min.js') }}"></script>
    <script src="{{ asset('datepicker/js/bootstrap-datetimepicker.min.js') }}"></script>
    <script src="{{ asset('jquery-ui-1.12.1/datepicker-id.js') }}"></script>
    <style>
        #message {
            display: none;
            font: normal normal normal 13px/1.5 Arial, Helvetica, sans-serif;
        }
    </style>
    <script>
        $(document).ready(function () {
            jQuery(function () {
                var startDate;
                var d = new Date();
                d.setHours(0, 0, 0, 0);
                var open = false;
                $("#startDate").datetimepicker({
                    timepicker: true,
                    closeOnDateSelect: false,
                    closeOnTimeSelect: true,
                    initTime: true,
                    minDate: d
                });
                $("#endDate").datetimepicker({
                    timepicker: true,
                    closeOnDateSelect: false,
                    closeOnTimeSelect: true,
                    initTime: true,
                    minDate: d
                });

                jQuery("#startDate").on("dp.change", function (e) {
                    var f = new Date(e.date);
                    var n = new Date();
                    checkDate(jQuery('#startDate'), f, n);
                    jQuery('#endDate').data("DateTimePicker").setMinDate(e.date);
                });
                jQuery("#endDate").on("dp.change", function (e) {
                    var f = new Date(e.date);
                    var n = new Date();
                    checkDate(jQuery('#startDate'), f, n);
                    jQuery('#startDate').data("DateTimePicker").setMaxDate(e.date);
                });

                var checkDate = function (obj, f, n) {
                    if (f.getTime() + 60 * 1000 < n.getTime() && !open) {
                        open = true;
                        $('#message').dialog({
                            modal: true,
                            position: ['center', 'center'],
                            show: 'blind',
                            hide: 'blind',
                            width: 400,
                            dialogClass: 'ui-dialog-osx',
                            buttons: {
                                "I understand. Let me try again": function () {
                                    $(this).dialog("close");
                                    obj.data('DateTimePicker').setDate(n);
                                    open = false;
                                }
                            }
                        });
                    }
                }
            });

        });
    </script>
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="col-sm-6" style="height:75px;">
        <div class='col-md-5'>
            <div class="form-group">
                <div>Start</div>
                <div class='input-group date' id='startDate'>
                    <input type='text' class="form-control" name="startDate"/> <span class="input-group-addon"><span
                                class="glyphicon glyphicon-calendar"></span>
</span>
                </div>
            </div>
        </div>
        <div class='col-md-5'>
            <div class="form-group">
                <div>End</div>
                <div class='input-group date' id='endDate'>
                    <input type='text' class="form-control" name="org_endDate"/> <span class="input-group-addon"><span
                                class="glyphicon glyphicon-calendar"></span>
</span>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="message">Sorry, you are not allowed to <i>set a time before the current time</i>. Please select a time that is
    in the future.
</div>


</body>
</html>