<!doctype html>
<html lang="en">
<head>
	<title>Die Per Wafer</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="data:image/png;base64, UklGRhQBAABXRUJQVlA4TAcBAAAvIsAKEC8gFkzxSHoTCCT5Gw2xk1gwxSPpTVHbNlD5g+n/2ggNxAL4HweB1QJube1tm89H4AAP4AAGQ5/EPvdQ2H8Z4idduY7o/wTo35r2cfxem2sPcSv23eVSTXbz/OQm8tFKwQBjAobtGa6U0DvpCFbyRCdJk9XBonMKxi88MmqNllgoPb9SZ5T00kR0mo1wCvBR8taSWaXwB97qpRIeSkZJX2giFprJtUQn7V+pMzp4KNsYMyyZFIzk4XOaMFRC/5UOb80eiOPosRoun2Z/IfpMA7HJfcJp9rCmZwXVpmN3UgPRScdzL5SdPay63kB012YPq643EN2NAKtuTkR3J/lVtyd3CwA=" sizes="32x32">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.6.2.min.js"></script>

	<style>
        body {
            font-family: 'Cuprum';
        }

        .text_color_default  {
            color: #cc2727;
        }

        .text_color_1 {
            color: #111111;
        }

        .text_color_2 {
            color: #222222;
        }

        .text_color_3 {
            color: #333333;
        }

        .text_color_4 {
            color: #444444;
        }

        .text_color_5 {
            color: #555555;
        }

        .text_color_6 {
            color: #666666;
        }

        .text_color_7 {
            color: #777777;
        }

        .text_color_8 {
            color: #888888;
        }

        .text_color_9 {
            color: #999999;
        }

        .text_color_a {
            color: #aaaaaa;
        }

        .text_color_b {
            color: #bbbbbb;
        }

        .text_color_c {
            color: #cccccc;
        }

        .text_color_d {
            color: #dddddd;
        }

        .text_color_e {
            color: #eeeeee;
        }

        .btn:focus, .form-control:focus {
            outline: none !important;
            box-shadow: none;
            border-color: rgba(59, 171, 113, 0.4);
        }
    </style>

	<link href='https://fonts.googleapis.com/css?family=Cuprum' rel='stylesheet'>


</head>
<body>

<div class="container-fluid">
	<div class="row mt-5">
		<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 mx-auto">
			<h4 class="text-secondary text-center mb-5">Die Per Wafer (free) Calculator – Trusted by GF and Amkor</h4>


			<form id="die_per_wafer_form">
				<div class="row">
					<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-4 mb-4 mb-xl-0">
						<div class="row">
							<div class="col-5"><label for="die_width" class="text_color_default">Die Width</label></div>
							<div class="col-7">
								<div class="input-group">
									<input type="text" class="form-control rounded-0 border-end-0" name="die_width" id="die_width" value="10">
									<span class="input-group-text rounded-0 border-start-0 bg-white text_color_a">mm</span>
								</div>
							</div>
						</div>
						<div class="row mt-4">
							<div class="col-5"><label for="die_height" class="text_color_default">Die Height</label></div>
							<div class="col-7">
								<div class="input-group">
									<input type="text" class="form-control rounded-0 border-end-0" name="die_height" id="die_height" value="10">
									<span class="input-group-text rounded-0 border-start-0 bg-white text_color_a">mm</span>
								</div>
							</div>
						</div>
						<div class="row mt-4">
							<div class="col-5"><label for="width_of_x_scribe_line" class="text_color_default">Width of X Scribe Line</label></div>
							<div class="col-7">
								<div class="input-group">
									<input type="text" class="form-control rounded-0 border-end-0" name="width_of_x_scribe_line" id="width_of_x_scribe_line" value="100">
									<span class="input-group-text rounded-0 border-start-0 bg-white text_color_a">µm</span>
								</div>
							</div>
						</div>
						<div class="row mt-4">
							<div class="col-5"><label for="width_of_y_scribe_line" class="text_color_default">Width of Y Scribe Line</label></div>
							<div class="col-7">
								<div class="input-group">
									<input type="text" class="form-control rounded-0 border-end-0" name="width_of_y_scribe_line" id="width_of_y_scribe_line" value="100">
									<span class="input-group-text rounded-0 border-start-0 bg-white text_color_a">µm</span>
								</div>
							</div>
						</div>
						<div class="row mt-4">
							<div class="col-5"><label for="wafer_edge_exclusion" class="text_color_default">Wafer Edge Exclusion</label></div>
							<div class="col-7">
								<div class="input-group">
									<input type="text" class="form-control rounded-0 border-end-0" name="wafer_edge_exclusion" id="wafer_edge_exclusion" value="3">
									<span class="input-group-text rounded-0 border-start-0 bg-white text_color_a">mm</span>
								</div>
							</div>
						</div>
						<div class="mt-4 text-end">
							<button type="submit" class="btn btn-sm btn-outline-info border-0 rounded-0 py-2 px-3" style="background-color: #cd2727; border-color: #b11a1a; background-image: linear-gradient(to top,rgba(0,0,0,.1),rgba(255,255,255,.1)); color: white;">Re-calculate</button>
						</div>

                        <div class="row mt-5">
                            <div class="col-5"><label for="prime_die_size" class="text_color_default">Prime Die Size</label></div>
                            <div class="col-7">
                                <div class="input-group">
                                    <input type="text" class="form-control rounded-0 border-end-0" id="prime_die_size" value="0" disabled>
                                    <span class="input-group-text rounded-0 border-start-0 text_color_a" style="background-color: #e9ecef !important;">mm<sup>2</sup></span>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-5"><label for="assy_die_size" class="text_color_default">Assy Die Size</label></div>
                            <div class="col-7">
                                <div class="input-group">
                                    <input type="text" class="form-control rounded-0 border-end-0" id="assy_die_size" value="0" disabled>
                                    <span class="input-group-text rounded-0 border-start-0 text_color_a" style="background-color: #e9ecef !important;">mm<sup>2</sup></span>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-5"><label for="dpw_eight_inch" class="text_color_default">DPW 8<sup>"</sup></label></div>
                            <div class="col-7">
                                <input type="text" class="form-control rounded-0" id="dpw_eight_inch" value="0" disabled>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-5"><label for="dpw_twelve_inch" class="text_color_default">DPW 12<sup>"</sup></label></div>
                            <div class="col-7">
                                <input type="text" class="form-control rounded-0" id="dpw_twelve_inch" value="0" disabled>
                            </div>
                        </div>
                        <div class="mt-4 text-end">
                            <button type="submit" class="btn btn-sm btn-outline-info border-0 rounded-0 py-2 px-3" style="background-color: #cd2727; border-color: #b11a1a; background-image: linear-gradient(to top,rgba(0,0,0,.1),rgba(255,255,255,.1)); color: white;">Get Wafer</button>
                        </div>
					</div>
					<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-8">
                        <img id="logo" src="data:image/png;base64, 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" alt="The Logo" class="d-none">


                        <div class="d-flex flex-column flex-md-row align-items-center justify-content-center">
                            <div class="me-0 me-md-4">
                                <div class="text-center">
                                    <div id="twelve_inch_wafer_image"></div>
                                </div>
                            </div>
                            <div class="ms-0 ms-md-4 mt-4 mt-md-0">
                                <div class="text-center">
                                    <div id="eight_inch_wafer_image"></div>
                                </div>
                            </div>
                        </div>
					</div>
				</div>

			</form>




		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function () {
		$('#die_per_wafer_form').submit();
	});

    function createTwelveInchWafer() {
        let waferDiameter = 300 * 1.5;
        let waferRadius = waferDiameter / 2;
        let waferEdgeExclusion = parseFloat($('#wafer_edge_exclusion').val()) * 1.5;
        let waferDiameterAfterEdgeExclusion = waferDiameter - waferEdgeExclusion;
        let waferRadiusAfterEdgeExclusion = waferDiameterAfterEdgeExclusion / 2;
        let dieWidth = parseFloat($('#die_width').val()) * 1.5;
        let dieHeight = parseFloat($('#die_height').val()) * 1.5;
        let widthOfXScribeLine = (parseFloat($('#width_of_x_scribe_line').val()) * 0.001) * 1.5;
        let widthOfYScribeLine = (parseFloat($('#width_of_y_scribe_line').val()) * 0.001) * 1.5;

        $('#twelve_inch_wafer_image').empty().append(`
		    <canvas id="twelve_inch_wafer" class="img-fluid" width="` + (waferDiameter) + `" height="` + (waferDiameter + 50) + `" style="background-color:#fff;"></canvas>
		`);

        const twelveInchWaferCanvas = document.getElementById('twelve_inch_wafer');
        if (twelveInchWaferCanvas.getContext) {
            const twelveInchWaferCtx = twelveInchWaferCanvas.getContext('2d');
            let logo = document.getElementById("logo");
            twelveInchWaferCtx.drawImage(logo, (twelveInchWaferCanvas.width / 2) - 50, waferDiameter + 30);

            drawOuterCircle(waferRadius);

            drawInnerCircle(waferRadiusAfterEdgeExclusion);

            function drawOuterCircle(radius){
                twelveInchWaferCtx.beginPath();
                twelveInchWaferCtx.arc(twelveInchWaferCanvas.width / 2, twelveInchWaferCanvas.height / 2, radius, 0, 2 * Math.PI, false);
                twelveInchWaferCtx.fillStyle = 'rgba(238,239,243,0.5)';
                twelveInchWaferCtx.fill();
                twelveInchWaferCtx.lineWidth = 1;
                twelveInchWaferCtx.strokeStyle = '#ccc';
                twelveInchWaferCtx.stroke();
            }

            function drawInnerCircle(radius){
                twelveInchWaferCtx.beginPath();
                twelveInchWaferCtx.arc(twelveInchWaferCanvas.width / 2, twelveInchWaferCanvas.height / 2, radius, 0, 2 * Math.PI, false);
                twelveInchWaferCtx.fillStyle = '#fdfdfd';
                twelveInchWaferCtx.fill();
                twelveInchWaferCtx.lineWidth = 1;
                twelveInchWaferCtx.strokeStyle = '#ccc';
                twelveInchWaferCtx.stroke();
            }

            let dpw = Math.floor(
                (waferDiameterAfterEdgeExclusion * Math.PI) * (
                    waferDiameterAfterEdgeExclusion /
                    (4 * ((dieWidth + widthOfXScribeLine) * (dieHeight + widthOfYScribeLine))) - 1 /
                    Math.sqrt(2 * ((dieWidth + widthOfXScribeLine) * (dieHeight + widthOfYScribeLine))))
            );
            $('#dpw_twelve_inch').val(dpw);
            $('#prime_die_size').val((dieWidth/1.5) * (dieHeight/1.5));
            $('#assy_die_size').val(((dieWidth + widthOfXScribeLine)/1.5) * ((dieHeight + widthOfYScribeLine)/1.5));
            twelveInchWaferCtx.font = '18px Arial';
            twelveInchWaferCtx.strokeStyle = 'black';
            twelveInchWaferCtx.strokeText('DPW (12\u{0022}): ' + dpw, 0, 15);

            let grd = twelveInchWaferCtx.createLinearGradient(0, 0, 0, waferDiameterAfterEdgeExclusion);
            grd.addColorStop(0, 'rgba(255, 125, 125, 1)');
            grd.addColorStop(1, 'rgba(125, 125, 255, 1)');

            let count = 0;
            let x;
            let y = (twelveInchWaferCanvas.width / 2) - (dieHeight + widthOfYScribeLine);

            for (let j=0; j<=twelveInchWaferCanvas.width; j=j+dieWidth+widthOfXScribeLine) {
                x = j;
                let circle={x:twelveInchWaferCanvas.width / 2, y:twelveInchWaferCanvas.height / 2, r:waferRadiusAfterEdgeExclusion};
                let rect={x:x, y:y, w:dieWidth + widthOfXScribeLine, h:dieHeight + widthOfYScribeLine};
                if (count < dpw && RectCircleColliding(circle, rect) === true) {
                    count++;
                    twelveInchWaferCtx.beginPath();
                    twelveInchWaferCtx.rect(x, y, dieWidth + widthOfXScribeLine, dieHeight + widthOfYScribeLine);
                    twelveInchWaferCtx.fillStyle = grd;
                    twelveInchWaferCtx.fill();
                    twelveInchWaferCtx.lineWidth = widthOfXScribeLine;
                    twelveInchWaferCtx.strokeStyle = '#fafafa';
                    twelveInchWaferCtx.stroke();
                }
            }

            y = (twelveInchWaferCanvas.width / 2) - (dieHeight + widthOfYScribeLine);
            while(y > 0) {
                y = y - (dieHeight + widthOfYScribeLine);
                for (let j=0; j<=twelveInchWaferCanvas.width; j=j+dieWidth+widthOfXScribeLine) {
                    x = j;
                    let circle={x:twelveInchWaferCanvas.width / 2, y:twelveInchWaferCanvas.height / 2, r:waferRadiusAfterEdgeExclusion};
                    let rect={x:x, y:y, w:dieWidth + widthOfXScribeLine, h:dieHeight + widthOfYScribeLine};
                    if (count < dpw && RectCircleColliding(circle, rect) === true) {
                        count++;
                        twelveInchWaferCtx.beginPath();
                        twelveInchWaferCtx.rect(x, y, dieWidth + widthOfXScribeLine, dieHeight + widthOfYScribeLine);
                        twelveInchWaferCtx.fillStyle = grd;
                        twelveInchWaferCtx.fill();
                        twelveInchWaferCtx.lineWidth = widthOfXScribeLine;
                        twelveInchWaferCtx.strokeStyle = '#fafafa';
                        twelveInchWaferCtx.stroke();
                    }
                }
            }


            y = (twelveInchWaferCanvas.width / 2) - (dieHeight + widthOfYScribeLine);
            while(y < twelveInchWaferCanvas.width) {
                y = y + dieHeight + widthOfYScribeLine;
                for (let j=0; j<=twelveInchWaferCanvas.width; j=j+dieWidth+widthOfXScribeLine) {
                    x = j;
                    let circle={x:twelveInchWaferCanvas.width / 2, y:twelveInchWaferCanvas.height / 2, r:waferRadiusAfterEdgeExclusion};
                    let rect={x:x, y:y, w:dieWidth + widthOfXScribeLine, h:dieHeight + widthOfYScribeLine};
                    if (RectCircleColliding(circle, rect) === true) {
                        count++;
                        twelveInchWaferCtx.beginPath();
                        twelveInchWaferCtx.rect(x, y, dieWidth + widthOfXScribeLine, dieHeight + widthOfYScribeLine);
                        twelveInchWaferCtx.fillStyle = grd;
                        twelveInchWaferCtx.fill();
                        twelveInchWaferCtx.lineWidth = widthOfXScribeLine;
                        twelveInchWaferCtx.strokeStyle = '#fafafa';
                        twelveInchWaferCtx.stroke();
                    }
                }
            }
        }
    }

    function createEightInchWafer() {
        let waferDiameter = 200 * 1.5;
        let waferRadius = waferDiameter / 2;
        let waferEdgeExclusion = parseFloat($('#wafer_edge_exclusion').val()) * 1.5;
        let waferDiameterAfterEdgeExclusion = waferDiameter - waferEdgeExclusion;
        let waferRadiusAfterEdgeExclusion = waferDiameterAfterEdgeExclusion / 2;
        let dieWidth = parseFloat($('#die_width').val()) * 1.5;
        let dieHeight = parseFloat($('#die_height').val()) * 1.5;
        let widthOfXScribeLine = (parseFloat($('#width_of_x_scribe_line').val()) * 0.001) * 1.5;
        let widthOfYScribeLine = (parseFloat($('#width_of_y_scribe_line').val()) * 0.001) * 1.5;

        $('#eight_inch_wafer_image').empty().append(`
		    <canvas id="eight_inch_wafer" class="img-fluid" width="` + (waferDiameter) + `" height="` + (waferDiameter + 50) + `" style="background-color:#fff;"></canvas>
		`);

        const eightInchWaferCanvas = document.getElementById('eight_inch_wafer');
        if (eightInchWaferCanvas.getContext) {
            const eightInchWaferCtx = eightInchWaferCanvas.getContext('2d');
            let logo = document.getElementById("logo");
            eightInchWaferCtx.drawImage(logo, (eightInchWaferCanvas.width / 2) - 50, waferDiameter + 30);

            drawOuterCircle(waferRadius);

            drawInnerCircle(waferRadiusAfterEdgeExclusion);

            function drawOuterCircle(radius){
                eightInchWaferCtx.beginPath();
                eightInchWaferCtx.arc(eightInchWaferCanvas.width / 2, eightInchWaferCanvas.height / 2, radius, 0, 2 * Math.PI, false);
                eightInchWaferCtx.fillStyle = 'rgba(238,239,243,0.5)';
                eightInchWaferCtx.fill();
                eightInchWaferCtx.lineWidth = 1;
                eightInchWaferCtx.strokeStyle = '#ccc';
                eightInchWaferCtx.stroke();
            }

            function drawInnerCircle(radius){
                eightInchWaferCtx.beginPath();
                eightInchWaferCtx.arc(eightInchWaferCanvas.width / 2, eightInchWaferCanvas.height / 2, radius, 0, 2 * Math.PI, false);
                eightInchWaferCtx.fillStyle = '#fdfdfd';
                eightInchWaferCtx.fill();
                eightInchWaferCtx.lineWidth = 1;
                eightInchWaferCtx.strokeStyle = '#ccc';
                eightInchWaferCtx.stroke();
            }

            let dpw = Math.floor(
                (waferDiameterAfterEdgeExclusion * Math.PI) * (
                    waferDiameterAfterEdgeExclusion /
                    (4 * ((dieWidth + widthOfXScribeLine) * (dieHeight + widthOfYScribeLine))) - 1 /
                    Math.sqrt(2 * ((dieWidth + widthOfXScribeLine) * (dieHeight + widthOfYScribeLine))))
            );
            $('#dpw_eight_inch').val(dpw);
            $('#prime_die_size').val((dieWidth/1.5) * (dieHeight/1.5));
            $('#assy_die_size').val(((dieWidth + widthOfXScribeLine)/1.5) * ((dieHeight + widthOfYScribeLine)/1.5));
            eightInchWaferCtx.font = '18px Arial';
            eightInchWaferCtx.strokeStyle = 'black';
            eightInchWaferCtx.strokeText('DPW (8\u{0022}): ' + dpw, 0, 15);

            let grd = eightInchWaferCtx.createLinearGradient(0, 0, 0, waferDiameterAfterEdgeExclusion);
            grd.addColorStop(0, 'rgba(255, 125, 125, 1)');
            grd.addColorStop(1, 'rgba(125, 125, 255, 1)');

            let count = 0;
            let x;
            let y = (eightInchWaferCanvas.width / 2) - (dieHeight + widthOfYScribeLine);

            for (let j=0; j<=eightInchWaferCanvas.width; j=j+dieWidth+widthOfXScribeLine) {
                x = j;
                let circle={x:eightInchWaferCanvas.width / 2, y:eightInchWaferCanvas.height / 2, r:waferRadiusAfterEdgeExclusion};
                let rect={x:x, y:y, w:dieWidth + widthOfXScribeLine, h:dieHeight + widthOfYScribeLine};
                if (count < dpw && RectCircleColliding(circle, rect) === true) {
                    count++;
                    eightInchWaferCtx.beginPath();
                    eightInchWaferCtx.rect(x, y, dieWidth + widthOfXScribeLine, dieHeight + widthOfYScribeLine);
                    eightInchWaferCtx.fillStyle = grd;
                    eightInchWaferCtx.fill();
                    eightInchWaferCtx.lineWidth = widthOfXScribeLine;
                    eightInchWaferCtx.strokeStyle = '#fafafa';
                    eightInchWaferCtx.stroke();
                }
            }

            y = (eightInchWaferCanvas.width / 2) - (dieHeight + widthOfYScribeLine);
            while(y > 0) {
                y = y - (dieHeight + widthOfYScribeLine);
                for (let j=0; j<=eightInchWaferCanvas.width; j=j+dieWidth+widthOfXScribeLine) {
                    x = j;
                    let circle={x:eightInchWaferCanvas.width / 2, y:eightInchWaferCanvas.height / 2, r:waferRadiusAfterEdgeExclusion};
                    let rect={x:x, y:y, w:dieWidth + widthOfXScribeLine, h:dieHeight + widthOfYScribeLine};
                    if (count < dpw && RectCircleColliding(circle, rect) === true) {
                        count++;
                        eightInchWaferCtx.beginPath();
                        eightInchWaferCtx.rect(x, y, dieWidth + widthOfXScribeLine, dieHeight + widthOfYScribeLine);
                        eightInchWaferCtx.fillStyle = grd;
                        eightInchWaferCtx.fill();
                        eightInchWaferCtx.lineWidth = widthOfXScribeLine;
                        eightInchWaferCtx.strokeStyle = '#fafafa';
                        eightInchWaferCtx.stroke();
                    }
                }
            }


            y = (eightInchWaferCanvas.width / 2) - (dieHeight + widthOfYScribeLine);
            while(y < eightInchWaferCanvas.width) {
                y = y + dieHeight + widthOfYScribeLine;
                for (let j=0; j<=eightInchWaferCanvas.width; j=j+dieWidth+widthOfXScribeLine) {
                    x = j;
                    let circle={x:eightInchWaferCanvas.width / 2, y:eightInchWaferCanvas.height / 2, r:waferRadiusAfterEdgeExclusion};
                    let rect={x:x, y:y, w:dieWidth + widthOfXScribeLine, h:dieHeight + widthOfYScribeLine};
                    if (RectCircleColliding(circle, rect) === true) {
                        count++;
                        eightInchWaferCtx.beginPath();
                        eightInchWaferCtx.rect(x, y, dieWidth + widthOfXScribeLine, dieHeight + widthOfYScribeLine);
                        eightInchWaferCtx.fillStyle = grd;
                        eightInchWaferCtx.fill();
                        eightInchWaferCtx.lineWidth = widthOfXScribeLine;
                        eightInchWaferCtx.strokeStyle = '#fafafa';
                        eightInchWaferCtx.stroke();
                    }
                }
            }
        }
    }

	$(document).on('submit', '#die_per_wafer_form', function (event) {
		event.preventDefault();
        createTwelveInchWafer();
        createEightInchWafer();
	});

	function RectCircleColliding(circle,rect){
		if (
				distance(rect.x, rect.y, circle) < circle.r &&
				distance(rect.x + rect.w, rect.y, circle) < circle.r &&
				distance(rect.x + rect.w, rect.y + rect.h, circle) < circle.r &&
				distance(rect.x, rect.y + rect.h, circle) < circle.r
		) {
			return true;
		} else {
			return false;
		}
	}

	function distance(ptX, ptY, circle) {
		return Math.hypot(ptX - circle.x, ptY - circle.y);
	}

</script>

</body>
</html>