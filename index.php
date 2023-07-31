<!doctype html>
<html lang="en">
<head>
	<title>Die Per Wafer</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="data:image/png;base64, UklGRhQBAABXRUJQVlA4TAcBAAAvIsAKEC8gFkzxSHoTCCT5Gw2xk1gwxSPpTVHbNlD5g+n/2ggNxAL4HweB1QJube1tm89H4AAP4AAGQ5/EPvdQ2H8Z4idduY7o/wTo35r2cfxem2sPcSv23eVSTXbz/OQm8tFKwQBjAobtGa6U0DvpCFbyRCdJk9XBonMKxi88MmqNllgoPb9SZ5T00kR0mo1wCvBR8taSWaXwB97qpRIeSkZJX2giFprJtUQn7V+pMzp4KNsYMyyZFIzk4XOaMFRC/5UOb80eiOPosRoun2Z/IfpMA7HJfcJp9rCmZwXVpmN3UgPRScdzL5SdPay63kB012YPq643EN2NAKtuTkR3J/lVtyd3CwA=" sizes="32x32">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.6.2.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.js"></script>
	<style>
        body {
            font-family: 'Cuprum';
        }
        .text_color_default  {
            color: #cc2727;
        }
        .text_color_a {
            color: #aaaaaa;
        }
        .btn:focus, .form-control:focus, .form-select:focus {
            outline: none !important;
            box-shadow: none;
            border-color: rgba(59, 171, 113, 0.4);
        }
        .form-select {
            font-size:15px;
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
                <div class="d-flex flex-column flex-lg-row justify-content-center">
                    <div class="d-flex justify-content-center pe-0 pe-lg-4">
                        <div class="d-flex flex-row mt-5" id="die_per_wafer_form_content">
                            <div class="pe-3">
                                <div class="form-control border-white"><label for="die_width" class="text_color_default">Die Width</label></div>
                                <div class="form-control border-white mt-4"><label for="die_height" class="text_color_default">Die Height</label></div>
                                <div class="form-control border-white mt-4"><label for="wafer_size" class="text_color_default">Wafer Size</label></div>
                                <div class="form-control border-white mt-4"><label for="width_of_x_scribe_line" class="text_color_default">Width of X Scribe Line</label></div>
                                <div class="form-control border-white mt-4"><label for="width_of_y_scribe_line" class="text_color_default">Width of Y Scribe Line</label></div>
                                <div class="form-control border-white mt-4"><label for="wafer_edge_exclusion" class="text_color_default">Wafer Edge Exclusion</label></div>
                                <div class="form-control border-white mt-4 sr-only"><label></label></div>
                            </div>
                            <div>
                                <div class="form-control border-white"></div>
                                <div class="form-control border-white mt-4"></div>
                                <div class="form-control border-white mt-4"></div>
                                <div class="form-control border-white mt-4"></div>
                                <div class="form-control border-white mt-4"></div>
                                <div class="form-control border-white mt-4"></div>
                                <div class="form-control border-white mt-4"></div>
                            </div>
                            <div class="ps-3">
                                <div class="input-group">
                                    <input type="text" class="form-control rounded-0 border-end-0" name="die_width" id="die_width" required>
                                    <span class="input-group-text rounded-0 border-start-0 bg-white text_color_a">mm</span>
                                </div>
                                <div class="input-group mt-4">
                                    <input type="text" class="form-control rounded-0 border-end-0" name="die_height" id="die_height" required>
                                    <span class="input-group-text rounded-0 border-start-0 bg-white text_color_a">mm</span>
                                </div>
                                <div class="input-group mt-4">
                                    <select class="form-select rounded-0 border-end-0" name="wafer_size" id="wafer_size" required>
                                        <option value="">Select Wafer Size</option>
                                        <option value="8">8</option>
                                        <option value="12">12</option>
                                    </select>
                                    <span class="input-group-text rounded-0 border-start-0 bg-white text_color_a">inch</span>
                                </div>
                                <div class="input-group mt-4">
                                    <input type="text" class="form-control rounded-0 border-end-0" name="width_of_x_scribe_line" id="width_of_x_scribe_line" value="100" required>
                                    <span class="input-group-text rounded-0 border-start-0 bg-white text_color_a">µm</span>
                                </div>
                                <div class="input-group mt-4">
                                    <input type="text" class="form-control rounded-0 border-end-0" name="width_of_y_scribe_line" id="width_of_y_scribe_line" value="100" required>
                                    <span class="input-group-text rounded-0 border-start-0 bg-white text_color_a">µm</span>
                                </div>
                                <div class="input-group mt-4">
                                    <input type="text" class="form-control rounded-0 border-end-0" name="wafer_edge_exclusion" id="wafer_edge_exclusion" value="3" required>
                                    <span class="input-group-text rounded-0 border-start-0 bg-white text_color_a">mm</span>
                                </div>
                                <div class="mt-4 text-end">
                                    <button type="submit" id="die_per_wafer_form_submit" class="btn btn-sm btn-outline-info border-0 rounded-0 py-2 px-3" style="background-color: #cd2727; border-color: #b11a1a; background-image: linear-gradient(to top,rgba(0,0,0,.1),rgba(255,255,255,.1)); color: white;">Calculate</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center ps-0 ps-lg-4">
                        <img id="logo" src="data:image/png;base64, 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" alt="The Logo" class="d-none">
                        <div id="wafer_image" class="text-center" style="width: 450px; height: 500px;"></div>
                    </div>
                </div>
            </form>

		</div>
	</div>
</div>

<script type="text/javascript">


    $(document).ready(function () {
        initializeEmptyWafer(300);
    });

    function initializeEmptyWafer(diameter) {
        let waferDiameter = diameter * 1.5;
        let waferRadius = waferDiameter / 2;
        let waferEdgeExclusion = parseFloat($('#wafer_edge_exclusion').val()) * 1.5;
        let waferDiameterAfterEdgeExclusion = waferDiameter - waferEdgeExclusion;
        let waferRadiusAfterEdgeExclusion = waferDiameterAfterEdgeExclusion / 2;
        $('#wafer_image').append(`
		    <canvas id="wafer" class="img-fluid" width="` + (waferDiameter) + `" height="` + (waferDiameter + 50) + `" style="background-color:#fff;"></canvas>
		`);
        const canvas = document.getElementById('wafer');
        if (canvas.getContext) {
            const ctx = canvas.getContext('2d');
            let logo = document.getElementById("logo");
            ctx.drawImage(logo, (canvas.width / 2) - 50, waferDiameter + 30);
            drawOuterCircle(waferRadius);
            drawInnerCircle(waferRadiusAfterEdgeExclusion);
            function drawOuterCircle(radius){
                ctx.beginPath();
                ctx.arc(canvas.width / 2, canvas.height / 2, radius, 0, 2 * Math.PI, false);
                ctx.fillStyle = 'rgba(238,239,243,0.5)';
                ctx.fill();
                ctx.lineWidth = 1;
                ctx.strokeStyle = '#ccc';
                ctx.stroke();
            }
            function drawInnerCircle(radius){
                ctx.beginPath();
                ctx.arc(canvas.width / 2, canvas.height / 2, radius, 0, 2 * Math.PI, false);
                ctx.fillStyle = '#fdfdfd';
                ctx.fill();
                ctx.lineWidth = 1;
                ctx.strokeStyle = '#ccc';
                ctx.stroke();
            }
        }
    }

    function createWafer(diameter) {
        let waferDiameter = diameter * 1.5;
        let waferRadius = waferDiameter / 2;
        let waferEdgeExclusion = parseFloat($('#wafer_edge_exclusion').val()) * 1.5;
        let waferDiameterAfterEdgeExclusion = waferDiameter - waferEdgeExclusion;
        let waferRadiusAfterEdgeExclusion = waferDiameterAfterEdgeExclusion / 2;
        let dieWidth = parseFloat($('#die_width').val()) * 1.5;
        let dieHeight = parseFloat($('#die_height').val()) * 1.5;
        let widthOfXScribeLine = (parseFloat($('#width_of_x_scribe_line').val()) * 0.001) * 1.5;
        let widthOfYScribeLine = (parseFloat($('#width_of_y_scribe_line').val()) * 0.001) * 1.5;
        $('#wafer_image').append(`
		    <canvas id="wafer" class="img-fluid" width="` + (waferDiameter) + `" height="` + (waferDiameter + 50) + `" style="background: transparent;"></canvas>
		`);
        const canvas = document.getElementById('wafer');
        if (canvas.getContext) {
            const ctx = canvas.getContext('2d');
            ctx.beginPath();
            ctx.rect(0, 0, canvas.width, canvas.height);
            ctx.fillStyle = 'rgba(255, 255, 255, 1)';
            ctx.fill();
            let logo = document.getElementById("logo");
            ctx.beginPath();
            ctx.drawImage(logo, (canvas.width / 2) - 50, waferDiameter + 30);
            drawOuterCircle(waferRadius);
            drawInnerCircle(waferRadiusAfterEdgeExclusion);
            function drawOuterCircle(radius){
                ctx.beginPath();
                ctx.arc(canvas.width / 2, canvas.height / 2, radius, 0, 2 * Math.PI, false);
                ctx.fillStyle = 'rgba(238,239,243,0.5)';
                ctx.fill();
                ctx.lineWidth = 1;
                ctx.strokeStyle = '#ccc';
                ctx.stroke();
            }
            function drawInnerCircle(radius){
                ctx.beginPath();
                ctx.arc(canvas.width / 2, canvas.height / 2, radius, 0, 2 * Math.PI, false);
                ctx.fillStyle = '#fdfdfd';
                ctx.fill();
                ctx.lineWidth = 1;
                ctx.strokeStyle = '#ccc';
                ctx.stroke();
            }
            let dpw = Math.floor(
                (waferDiameterAfterEdgeExclusion * Math.PI) * (
                    waferDiameterAfterEdgeExclusion /
                    (4 * ((dieWidth + widthOfXScribeLine) * (dieHeight + widthOfYScribeLine))) - 1 /
                    Math.sqrt(2 * ((dieWidth + widthOfXScribeLine) * (dieHeight + widthOfYScribeLine))))
            );
            let grd = ctx.createLinearGradient(0, 0, 0, waferDiameterAfterEdgeExclusion);
            grd.addColorStop(0, 'rgba(255, 125, 125, 1)');
            grd.addColorStop(1, 'rgba(125, 125, 255, 1)');
            let count = 0;
            let x;
            let y = (canvas.height / 2) - ((dieHeight + widthOfYScribeLine) / 2);
            for (let j=0; j<=canvas.width; j=j+dieWidth+widthOfXScribeLine) {
                x = j;
                let circle={x:canvas.width / 2, y:canvas.height / 2, r:waferRadiusAfterEdgeExclusion};
                let rect={x:x, y:y, w:dieWidth + widthOfXScribeLine, h:dieHeight + widthOfYScribeLine};
                if (RectCircleColliding(circle, rect) === true) {
                    count++;
                    ctx.beginPath();
                    ctx.rect(x, y, dieWidth + widthOfXScribeLine, dieHeight + widthOfYScribeLine);
                    ctx.fillStyle = grd;
                    ctx.fill();
                    ctx.lineWidth = widthOfXScribeLine;
                    ctx.strokeStyle = '#fafafa';
                    ctx.stroke();
                }
            }
            y = y - (dieHeight + widthOfYScribeLine);
            while(y > 0) {
                for (let j=0; j<=canvas.width; j=j+dieWidth+widthOfXScribeLine) {
                    x = j;
                    let circle={x:canvas.width / 2, y:canvas.height / 2, r:waferRadiusAfterEdgeExclusion};
                    let rect={x:x, y:y, w:dieWidth + widthOfXScribeLine, h:dieHeight + widthOfYScribeLine};
                    if (RectCircleColliding(circle, rect) === true) {
                        count++;
                        ctx.beginPath();
                        ctx.rect(x, y, dieWidth + widthOfXScribeLine, dieHeight + widthOfYScribeLine);
                        ctx.fillStyle = grd;
                        ctx.fill();
                        ctx.lineWidth = widthOfXScribeLine;
                        ctx.strokeStyle = '#fafafa';
                        ctx.stroke();
                    }
                }
                y = y - (dieHeight + widthOfYScribeLine);
            }
            y = ((canvas.height / 2) - ((dieHeight + widthOfYScribeLine) / 2)) + (dieHeight + widthOfYScribeLine);
            while(y < canvas.height) {
                for (let j=0; j<=canvas.width; j=j+dieWidth+widthOfXScribeLine) {
                    x = j;
                    let circle={x:canvas.width / 2, y:canvas.height / 2, r:waferRadiusAfterEdgeExclusion};
                    let rect={x:x, y:y, w:dieWidth + widthOfXScribeLine, h:dieHeight + widthOfYScribeLine};
                    if (RectCircleColliding(circle, rect) === true) {
                        count++;
                        ctx.beginPath();
                        ctx.rect(x, y, dieWidth + widthOfXScribeLine, dieHeight + widthOfYScribeLine);
                        ctx.fillStyle = grd;
                        ctx.fill();
                        ctx.lineWidth = widthOfXScribeLine;
                        ctx.strokeStyle = '#fafafa';
                        ctx.stroke();
                    }
                }
                y = y + (dieHeight + widthOfYScribeLine);
            }
            let waferSize = diameter / 25;
            $('#die_per_wafer_form_content').children().eq(0).append(`<div class="form-control border-0 mt-4 dpw_label"><label for="dpw" class="text_color_default">DPW ` + waferSize + `<sup>"</sup></label></div>`);
            $('#die_per_wafer_form_content').children().eq(1).append(`<div class="form-control border-0 mt-4 dpw_space"></div>`);
            $('#die_per_wafer_form_content').children().eq(2).append(`
                <div class="mt-4 dpw_output"><input type="text" class="form-control rounded-0" id="dpw" value="` + count + `" disabled></div>
                <div class="mt-4 text-end">
                    <button type="submit" id="get_wafer" class="btn btn-sm btn-outline-info border-0 rounded-0 py-2 px-3" style="background-color: #cd2727; border-color: #b11a1a; background-image: linear-gradient(to top,rgba(0,0,0,.1),rgba(255,255,255,.1)); color: white;">Get Wafer/MPW Prices</button>
                </div>
            `);
            ctx.font = '16px Verdana';
            ctx.fillStyle = 'black';
            ctx.fillText('DPW (' + waferSize + '\u{0022}): ' + count, (canvas.width - ctx.measureText('DPW (' + waferSize + '\u{0022}): ' + count).width) / 2, 15);

            $('#wafer_image').append(`<div class="mt-3 text-center"><a href="javascript:void(0)" class="text-decoration-none" id="save_wafer">Download the Wafer Map</a></div>`);
            $('#wafer_image').append(`<div class="mt-3 mb-5 text-center"><a href="https://anysilicon.com/rfq-semiconductor-foundries/" class="text-decoration-none">Get Wafer/MPW Prices</a></div>`);
        }
    }

    $(document).on('click', '#save_wafer', function () {
        let downloadLink = document.createElement('a');
        downloadLink.setAttribute('download', 'wafer.png');
        let canvas = document.getElementById('wafer');
        canvas.toBlob(function(blob) {
            let url = URL.createObjectURL(blob);
            downloadLink.setAttribute('href', url);
            downloadLink.click();
        });
    });

    $(document).on('click', '#get_wafer', function () {
        let redirectLink = document.createElement('a');
        redirectLink.setAttribute('href', 'https://anysilicon.com/rfq-semiconductor-foundries');
        redirectLink.click();
    });

	$(document).on('submit', '#die_per_wafer_form', function (event) {
		event.preventDefault();
        $('.dpw_label').remove();
        $('.dpw_space').remove();
        $('.dpw_output').remove();
        $('#get_wafer').parent().remove();
        $('#prime_die_size').val(0);
        $('#assy_die_size').val(0);
        $('#wafer_image').css('margin-top', '50px').empty();
        if (
            isInvalidInput($('#die_width').val()) ||
            isInvalidInput($('#die_height').val()) ||
            isInvalidInput($('#wafer_size').val()) ||
            isInvalidInput($('#width_of_x_scribe_line').val()) ||
            isInvalidInput($('#width_of_y_scribe_line').val()) ||
            isInvalidInput($('#wafer_edge_exclusion').val())) {
            $.toast({
                heading: 'Error',
                text : 'All the fields are required and should be numeric value.',
                showHideTransition : 'slide',
                icon: 'error',
                hideAfter: 5000,
                position : 'bottom-left'
            });
        } else {
            if (parseInt($('#wafer_size').val()) === 8) {
                createWafer(200);
            }
            if (parseInt($('#wafer_size').val()) === 12) {
                createWafer(300);
            }
        }
	});

    function isInvalidInput(str) {
        if (typeof str === undefined || str === null || str === '' || isNaN(str)) {
            return true;
        } else {
            return false;
        }
    }

    function RectCircleColliding(circle,rect) {
		if (
				distance(rect.x, rect.y, circle) < circle.r &&
				distance(rect.x + rect.w, rect.y, circle) < circle.r &&
				distance(rect.x + rect.w, rect.y + rect.h, circle) < circle.r &&
				distance(rect.x, rect.y + rect.h, circle) < circle.r) {
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