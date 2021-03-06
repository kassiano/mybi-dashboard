﻿<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">

		<title>BI TW Tecnologia</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="assets/bootstrap/bootstrap4-alpha3.min.css">

		<style>
			body {
				background-color: #fafafa;
				font-size: 16px;
				line-height: 1.5;
			}

			h1,h2,h3,h4,h5,h6 {
				font-weight: 400;
			}

			#header {
				border-bottom: 5px solid #37474F;
				color: #37474F;
				margin-bottom: 1.5rem;
				padding: 1rem 0;
			}

			#revenue-tag {
				font-weight: inherit !important;
				border-radius: 0px !important;
			}

			.card {
				border: 0rem;
				border-radius: 0rem;
			}

			.card-header {
				background-color: #37474F;
				border-radius: 0 !important;
				color:	white;
				margin-bottom: 0;
				padding:	1rem;
			}

			.card-block {
				border: 1px solid #cccccc;
			}

			.shadow {
				box-shadow: 0 6px 10px 0 rgba(0, 0, 0, 0.14),
										0 1px 18px 0 rgba(0, 0, 0, 0.12),
										0 3px 5px -1px rgba(0, 0, 0, 0.2);
			}

			#revenue-column-chart, #products-revenue-pie-chart, #orders-spline-chart {
				height: 300px;
				width: 100%;
			}
		</style>

		<!-- Scripts -->
		<script src="assets/jquery/jquery-3.1.0.min.js"></script>
		<script src="assets/tether/tether.min.js"></script>
		<script src="assets/bootstrap/bootstrap4-alpha3.min.js"></script>
		<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

		<script>
			$(function () {
				var totalRevenue = 15341110;

				// CanvasJS column chart to show revenue from Jan 2015 - Dec 2015
				var revenueColumnChart = new CanvasJS.Chart("revenue-column-chart", {
					animationEnabled: true,
					backgroundColor: "transparent",
					theme: "theme2",
					axisX: {
						labelFontSize: 14,
						valueFormatString: "MMM YYYY"
					},
					axisY: {
						labelFontSize: 14,
						prefix: ""
					},
					toolTip: {
						borderThickness: 0,
						cornerRadius: 0
					},
					data: [
						{
							type: "column",
							dataPoints: [
								{ x: new Date("1 Jan 2016"), y: 868800 },
								{ x: new Date("1 Feb 2016"), y: 1071550 },
								{ x: new Date("1 Mar 2016"), y: 1286200 },
								{ x: new Date("1 Apr 2016"), y: 1106900 },
								{ x: new Date("1 May 2016"), y: 1033800 },
								{ x: new Date("1 Jun 2016"), y: 1017160 },
								{ x: new Date("1 Jul 2016"), y: 1458000 },
								{ x: new Date("1 Aug 2016"), y: 1165850 },
								{ x: new Date("1 Sep 2016"), y: 1594150 },
								{ x: new Date("1 Oct 2016"), y: 1501700 },
								{ x: new Date("1 Nov 2016"), y: 1588400 },
								{ x: new Date("1 Dec 2016"), y: 1648600 }
							]
						}
					]
				});

				revenueColumnChart.render();

				//CanvasJS pie chart to show product wise annual revenue for 2015
				var productsRevenuePieChart = new CanvasJS.Chart("products-revenue-pie-chart", {
					animationEnabled: true,
					theme: "theme2",
					legend: {
						fontSize: 14
					},
					toolTip: {
						borderThickness: 0,
						content: "<span style='\"'color: {color};'\"'>{name}</span>: ${y} (#percent%)",
						cornerRadius: 0
					},
					data: [
						{
							indexLabelFontColor: "#676464",
							indexLabelFontSize: 14,
							legendMarkerType: "square",
							legendText: "{indexLabel}",
							showInLegend: true,
							startAngle:  90,
							type: "pie",
							dataPoints: [
								{  y: 6289855, name:"Internação A", indexLabel: "Internação A - 41%", legendText: "Internação A", exploded: true },
								{  y: 2761400, name:"Internação B", indexLabel: "Internação B - 18%", legendText: "Internação B" },
								{  y: 3681866, name:"Internação C", indexLabel: "Internação C - 24%", legendText: "Internação C", color: "#8064a1" },
								{  y: 2607989, name:"Internação D", indexLabel: "Internação D - 17%", legendText: "Internação D" }
							]
						}
					]
				});

				productsRevenuePieChart.render();

				//CanvasJS spline chart to show orders from Jan 2015 to Dec 2015
				var ordersSplineChart = new CanvasJS.Chart("orders-spline-chart", {
					animationEnabled: true,
					backgroundColor: "transparent",
					theme: "theme2",
					toolTip: {
						borderThickness: 0,
						cornerRadius: 0
					},
					axisX: {
						labelFontSize: 14,
						maximum: new Date("31 Dec 2016"),
						valueFormatString: "MMM YYYY"
					},
					axisY: {
						gridThickness: 0,
						labelFontSize: 14,
						lineThickness: 2
					},
					data: [
						{
							type: "spline",
							dataPoints: [
								{ x: new Date("1 Jan 2016"), y: 17376 },
								{ x: new Date("1 Feb 2016"), y: 21431 },
								{ x: new Date("1 Mar 2016"), y: 25724 },
								{ x: new Date("1 Apr 2016"), y: 22138 },
								{ x: new Date("1 May 2016"), y: 20676 },
								{ x: new Date("1 Jun 2016"), y: 25429 },
								{ x: new Date("1 Jul 2016"), y: 29160 },
								{ x: new Date("1 Aug 2016"), y: 23317 },
								{ x: new Date("1 Sep 2016"), y: 31883 },
								{ x: new Date("1 Oct 2016"), y: 30034 },
								{ x: new Date("1 Nov 2016"), y: 31768 },
								{ x: new Date("1 Dec 2016"), y: 41215 }
							]
						}
					]
				});

				ordersSplineChart.render();

			});
		</script>

	</head>
	<body>
		<div class="container">
			<h2 id="header">
				<strong>Saídas Hospitalares</strong>
				<small class="text-muted">Jan 2016 - Dez 2016</small>
			</h2>

			<div class="row m-b-1">
				<div class="col-xs-12">
					<div class="card shadow">
						<h4 class="card-header">Total de Eventos </h4>
						<div class="card-block">
							<div id="revenue-column-chart"></div>
						</div>
					</div>
				</div>
			</div> <!-- row -->

			<div class="row m-b-1">
				<div class="col-lg-6">
					<div class="card shadow">
						<h4 class="card-header">Tipos de internação</h4>
						<div class="card-block">
							<div id="products-revenue-pie-chart"></div>
						</div>
					</div>
				</div>

				<div class="col-lg-6">
					<div class="card shadow">
						<h4 class="card-header">Meta vs Urgência</h4>
						<div class="card-block">
							<div id="orders-spline-chart"></div>
						</div>
					</div>
				</div>
			</div> <!-- row -->
		</div> <!-- container -->
	</body>
</html>
