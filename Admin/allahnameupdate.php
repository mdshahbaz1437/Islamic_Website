<?php $urlid=$_GET["id"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ALLAH NAME Update</title>

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.min.css" />

    <link id="themecss" rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/light/all.min.css" />

    <link rel="stylesheet" type="text/css" href="css/theme.css" />
    <link rel="stylesheet" type="text/css" href="css/dashboard.css" />
<script src="https://cdn.ckeditor.com/4.11.4/full/ckeditor.js"></script>
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body style="background-color:#eef5f9;">
     <div id="wrapper">
        <?php include("header.php");?>
        <div id="wrapper">

        <div id="page-wrapper">
			
            <div class="row">
                <div class="col-md-8 col-sm-8 col-lg-8 col-xlg-9">
                   
                    <div class="well">
                        <form action="" method="post" id="frm" name="frm" enctype="multipart/form-data">
							<input id="tnid" name="tnid" type="hidden"  value="<?php echo $urlid; ?>" />
							<input id="check" name="check" type="hidden"  value="22" />
							
							<div class="form-group">
								<label class="control-label mb-1">Name Arabic</label><br>
								 <textarea class="textarea" placeholder="Place some text here" id="tnarabic" name="tnarabic" ></textarea>
							</div>
							<div class="form-group">
								<label class="control-label mb-1">Name English</label>
								 <textarea class="textarea" placeholder="Place some text here" id="tnenglish" name="tnenglish" ></textarea>
							</div>
							<div class="form-group">
								<label class="control-label mb-1">Name Meaning</label>
								 <textarea class="textarea" placeholder="Place some text here" id="tnmeaning" name="tnmeaning" ></textarea>
							</div>
							<div class="form-group">
								<label class="control-label mb-1">Name Translation</label>
								 <textarea class="textarea" placeholder="Place some text here" id="tntranslate" name="tntranslate" ></textarea>
							</div>
							<div class="from-group mb-1">
									<label class="control-label ">Status</label>
									<select name="tnstatus" id="tnstatus" class="form-control">
									<option value="Active">Active</option>
									<option value="Deactive">Deactive</option>
									</select>
								</div>
							
							<div>
							<br>
								<center><input type="submit" class="btn btn-success" name="btn1" value="Update"> </center>
							</div>
								<script>CKEDITOR.replace('tnenglish'); CKEDITOR.replace('tnarabic');CKEDITOR.replace('tnmeaning');CKEDITOR.replace('tntranslate');</script>

							
						</form>
						
                    </div>
					<div id="show"></div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->

    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>

    <script type="text/javascript" src="js/theme.js"></script>
    <script type="text/javascript">
	
	
        jQuery(function ($) {
            $("#chart_live").shieldChart({
                seriesPalette: ["#67A9CE", "#4063AD"],
                exportOptions: {
                    image: false,
                    print: false
                },
                axisX: {
                    categoricalValues: ['2001', '2002', '2003', '2004', '2005', '2006', '2007', '2008', '2009', '2010', '2011', '2012']
                },
                axisY: {
                    axisTickText: {
                        format: "{text:c}"
                    },
                    title: {
                        text: "Price (EUR per kWh)"
                    }
                },
                tooltipSettings: {
                    chartBound: true
                },
                primaryHeader: {
                    text: "Electricity prices"
                },
                dataSeries: [{
                    seriesType: 'splinearea',
                    applyAnimation: false,
                    collectionAlias: 'Households',
                    data: [0.164, 0.173, 0.184, 0.167, 0.177, 0.189, 0.180, 0.183, 0.188, 0.160, 0.176, 0.178]
                }, {
                    seriesType: 'splinearea',
                    applyAnimation: false,
                    collectionAlias: 'Industry',
                    data: [0.103, 0.105, 0.112, 0.111, 0.102, 0.099, 0.110, 0.113, 0.117, 0.119, 0.123, 0.117]
                }]
            });

            $("#chart_browsers").shieldChart({
                seriesPalette: ["#4063AD", "#6AC16E", "#67A9CE", "#F2C73E", "#D8494C"],
                exportOptions: {
                    image: false,
                    print: false
                },
                chartAreaPaddingTop: 0,
                chartAreaPaddingBottom: 0,
                chartAreaPaddingLeft: 0,
                chartAreaPaddingRight: 0,
                primaryHeader: {
                    text: ""
                },
                chartLegend: {
                    enabled: false
                },
                seriesSettings: {
                    pie: {
                        enablePointSelection: true,
                        dataPointText: {
                            enabled: false
                        }
                    }
                },
                dataSeries: [{
                    seriesType: "pie",
                    applyAnimation: false,
                    collectionAlias: "Usage",
                    data: [
                        ["IE", 9.0],                        
                        { collectionAlias: "Firefox", y: 26.8, selected: true },
                        ["Chrome", 55.8],
                        ["Safari", 3.8],
                        ["Opera", 1.9]
                    ]
                }]
            });

            $("#progress").shieldProgressBar({
                value: 75,
                layout: "circular",
                layoutOptions: {
                    circular: {
                        borderWidth: 0,
                        color: "#4063AD",
                        backgroundColor: "#A2E6D7"
                    }
                },
                text: {
                    enabled: true,
                    template: '<b style="color:#363636;">{0:c0}%</b>'
                }
            });

            $("#tagcloud").shieldTagCloud({
                dataSource: {
                    data: [
                        {"name":"Barcode","groups":1,"demos":4,"url":"http://demos.shieldui.com/web/barcode/basic-usage"},
                        {"name":"Calendar","groups":1,"demos":5,"url":"http://demos.shieldui.com/web/calendar/basic-usage"},
                        {"name":"Chart","groups":25,"demos":131,"url":"http://demos.shieldui.com/web/area-chart/axis-marker"},
                        {"name":"ColorPicker","groups":1,"demos":8,"url":"http://demos.shieldui.com/web/colorpicker/basic-usage"},
                        {"name":"ComboBox","groups":1,"demos":7,"url":"http://demos.shieldui.com/web/combobox/basic-usage"},
                        {"name":"ContextMenu","groups":1,"demos":1,"url":"http://demos.shieldui.com/web/contextmenu/basic-usage"},
                        {"name":"DataSource","groups":1,"deos":5,"url":"http://demos.shieldui.com/web/datasource/basic-usage"},
                        {"name":"DatePicker","groups":1,"demos":4,"url":"http://demos.shieldui.com/web/datepicker/basic-usage"},
                        {"name":"Editor","groups":1,"demos":5,"url":"ttp://demos.shieldui.com/web/editor/basic-usage"},
                        {"name":"Grid","groups":8,"demos":56,"url":"http://demos.shieldui.com/web/grid-general/basic-usage"},
                        {"name":"MaskedTextBox","groups":1,"demos":4,"url":"http://demosshieldui.com/web/maskedtextbox/basic-usage"},
                        {"name":"Menu","groups":1,"demos":5,"url":"http://demos.shieldui.com/web/menu/basic-usage"},
                        {"name":"MonthYearPicker","groups":1,"demos":3,"url":"http://demos.shieldi.com/web/monthyearpicker/basic-usage"},
                        {"name":"NumericTextBox","groups":1,"demos":3,"url":"http://demos.shieldui.com/web/numerictextbox/basic-usage"}
                    ]
                },
                textTemplate: "{name}",
                frequencyTemplate: "{demos}",
                hrefTemplate: "{url}"
            });

            $("#calendar1").shieldCalendar();

			$("#switch1").shieldSwitch({
				onText: "",
				offText: "",
				cls: "pbd-switch btn-default"
			});
			$("#switch2").shieldSwitch({
				onText: "",
				offText: "",
				cls: "pbd-switch btn-success"
			});
            $("#switch3").shieldSwitch({
				onText: "",
				offText: "",
				cls: "pbd-switch btn-primary"
			});
            $("#switch4").shieldSwitch({
				onText: "",
				offText: "",
				cls: "pbd-switch btn-info"
			});
            $("#switch5").shieldSwitch({
				onText: "",
				offText: "",
				cls: "pbd-switch btn-warning"
			});
            $("#switch6").shieldSwitch({
				onText: "",
				offText: "",
				cls: "pbd-switch btn-danger"
			});
        });
    </script>
	<script src="jquery.js"></script>
<script type="text/javascript">
	$(document).ready(function()
	{
		var Id = $("#tnid").val();
		$.ajax(
		{
			url:"check.php",
			method:"POST",
			data:{check:21,url:Id},
			success:function(data)
			{
				let jdata = JSON.parse(data);
				$("#tnarabic").val(jdata[1]);
				$("#tnenglish").val(jdata[2]);
				$("#tnmeaning").val(jdata[3]);
				$("#tnstatus").val(jdata[4]);
				$("#tntranslate").val(jdata[5]);
			}
		});
		
		$("#frm").on('submit',function(e)
		{
			e.preventDefault();
			for (instance in CKEDITOR.instances) 
			{
			   CKEDITOR.instances[instance].updateElement();
			}
			$.ajax(
			{
				url:"check.php",
				method:"POST",
				data:new FormData(this),
				processData:false,
				contentType:false,
				success:function(data)
				{
					window.location="allahnameview.php";
					$("#show").html(data);
					$("#tnarabic").val("");
					$("#tnenglish").val("");
					$("#tnmeaning").val("");
					$("#tnstatus").val("");
					$("#tntranslate").val("");
				}
			});
		});
	});
</script>
</body>
</html>
