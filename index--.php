<!doctype html>
<html lang="en">
<head>
    <title>Die Per Wafer</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="assets/images/icon.webp" sizes="32x32">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.2.min.js"></script>

    <link href="assets/css/style.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Cuprum' rel='stylesheet'>


</head>
<body>

<div class="container-fluid">
    <div class="row mt-5">
        <div class="col-12 col-sm-12 col-md-9 col-lg-8 col-xl-7 col-xxl-6 mx-auto">
            <h4 class="text-secondary text-center mb-5">Die Per Wafer (free) Calculator – Trusted by GF and Amkor</h4>


            <form id="die_per_wafer_form">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 mb-4 mb-lg-0">
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
                            <div class="col-5"><label for="wafer_diameter" class="text_color_default">Wafer Diameter</label></div>
                            <div class="col-7">
                                <div class="input-group">
                                    <input type="text" class="form-control rounded-0 border-end-0" name="wafer_diameter" id="wafer_diameter" value="100">
                                    <span class="input-group-text rounded-0 border-start-0 bg-white text_color_a">mm</span>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-5"><label for="width_of_x_scribe_line" class="text_color_default">Width of X Scribe Line</label></div>
                            <div class="col-7">
                                <div class="input-group">
                                    <input type="text" class="form-control rounded-0 border-end-0" name="width_of_x_scribe_line" id="width_of_x_scribe_line" value="0">
                                    <span class="input-group-text rounded-0 border-start-0 bg-white text_color_a">µm</span>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-5"><label for="width_of_y_scribe_line" class="text_color_default">Width of Y Scribe Line</label></div>
                            <div class="col-7">
                                <div class="input-group">
                                    <input type="text" class="form-control rounded-0 border-end-0" name="width_of_y_scribe_line" id="width_of_y_scribe_line" value="0">
                                    <span class="input-group-text rounded-0 border-start-0 bg-white text_color_a">µm</span>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-5"><label for="wafer_edge_exclusion" class="text_color_default">Wafer Edge Exclusion</label></div>
                            <div class="col-7">
                                <div class="input-group">
                                    <input type="text" class="form-control rounded-0 border-end-0" name="wafer_edge_exclusion" id="wafer_edge_exclusion" value="0">
                                    <span class="input-group-text rounded-0 border-start-0 bg-white text_color_a">mm</span>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4 text-end">
                            <button type="submit" class="btn btn-sm btn-outline-info border-0 rounded-0 py-2 px-3" style="background-color: #cd2727; border-color: #b11a1a; background-image: linear-gradient(to top,rgba(0,0,0,.1),rgba(255,255,255,.1)); color: white;">Re-calculate</button>
                        </div>

                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                        <div class="border text-center p-4">
                            <h5 class="text-black text-center">The Generated Wafer</h5>
                            <div id="wafer_image"></div>
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

    $(document).on('submit', '#die_per_wafer_form', function (event) {
        event.preventDefault();

        // $('#wafer_image').append(`
        //     <canvas id="canvas" width="400" height="400"style="background-color:#333"></canvas>
        // `);

        $(this).find('.invalid-feedback').remove();
        const formData = new FormData(this);
        formData.append('_token', '{{ csrf_token() }}');
        $.ajax({
            method: 'post',
            url: 'wafer.php',
            data: formData,
            processData: false,
            contentType: false,
            success: function (result) {
                let response = JSON.parse(result);
                console.log(response)
                if (response.success === true) {
                    $('#wafer_image').empty().append('<img class="img-fluid" src="data:image/png;base64,' + response.payload.wafer + '">');
                }
                if (response.success === false) {
                    $.each(response.errors, function (key, error) {
                        $('#' + key).parent().after('<div class="invalid-feedback d-block">' + error + '</div>');
                    });
                }
            },
            error: function (xhr) {
                console.log(xhr);
            }
        });
    });
</script>

</body>
</html>
