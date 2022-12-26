<?php
require 'vendor/autoload.php';
use Intervention\Image\ImageManagerStatic as Image;
use JetBrains\PhpStorm\ArrayShape;


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = [];
    if (empty($_POST['die_width'])) {
        $errors['die_width'] = 'Die Width field is required.';
    }
    if (empty($_POST['die_height'])) {
        $errors['die_height'] = 'Die Height field is required.';
    }
    if (empty($_POST['wafer_diameter'])) {
        $errors['wafer_diameter'] = 'Wafer Diameter field is required.';
    }
    if ($_POST['width_of_x_scribe_line'] === null) {
        $errors['width_of_x_scribe_line'] = 'Width of X Scribe Line field is required.';
    }
    if ($_POST['width_of_y_scribe_line'] === null) {
        $errors['width_of_y_scribe_line'] = 'Width of Y Scribe Line field is required.';
    }
    if ($_POST['wafer_edge_exclusion'] === null) {
        $errors['wafer_edge_exclusion'] = 'Wafer Edge Exclusion field is required.';
    }
    if (count($errors) === 0) {
        print_r(json_encode([
            'success' => true,
            'payload' => createWafer(
                sanitizeInput($_POST['die_width']) * 3,
                sanitizeInput($_POST['die_height']) * 3,
                sanitizeInput($_POST['wafer_diameter']) * 3,
                sanitizeInput($_POST['width_of_x_scribe_line']) * 3,
                sanitizeInput($_POST['width_of_y_scribe_line']) * 3,
                sanitizeInput($_POST['wafer_edge_exclusion']) * 3
            )
        ]));
    } else {
        print_r(json_encode([
            'success' => false,
            'errors' => $errors
        ]));
    }
}

function sanitizeInput($data): string {
    return htmlspecialchars(stripslashes(trim($data)));
}

function createWafer($dieWidth, $dieHeight, $waferDiameter, $widthOfXScribeLine, $widthOfYScribeLine, $waferEdgeExclusion): array
{
    $dpw = ceil(($waferDiameter * pi()) * ($waferDiameter / (4 * ($dieWidth * $dieHeight)) - 1 / sqrt(2 * ($dieWidth * $dieHeight))));
    $img = Image::canvas($waferDiameter, $waferDiameter + 25, '#fff');
    $img->circle(
        $waferDiameter,
        ($waferDiameter) / 2,
        ($waferDiameter) / 2,
        function ($draw) {
            $draw->background('#efefef');
            $draw->border(1, '#c1c1c1');
        }
    );


    $squareSideLength = sqrt(($waferDiameter / 2) * ($waferDiameter / 2) * 2);
    $img->rectangle(
        (($waferDiameter - $squareSideLength) / 2) + 2,
        (($waferDiameter - $squareSideLength) / 2) + 2,
        $squareSideLength * 1.2,
        $squareSideLength * 1.2,
        function ($draw) {

        }
    );

    $i = 1;
    $x1 = (($waferDiameter - $squareSideLength) / 2) + 2;
    $y1 = (($waferDiameter - $squareSideLength) / 2) + 2;
    $x2 = $dieWidth + ((($waferDiameter - $squareSideLength) / 2));
    $y2 = $dieHeight + (($waferDiameter - $squareSideLength) / 2);
    while ($i <= $dpw) {


        $img->rectangle($x1, $y1, $x2, $y2,
            function ($draw) use ($widthOfXScribeLine, $widthOfYScribeLine){
                $draw->background('rgba(102, 179, 255, 0.5)');
                $draw->border(1, '#dedede');

            }
        );


        $x1 = $x1 + $dieWidth;
        $x2 = $x2 + $dieWidth;
        if ($x2 > $squareSideLength * 1.21) {
            $x1 = (($waferDiameter - $squareSideLength) / 2) + 2;
            $y1 = $y1 + $dieHeight;
            $x2 = $dieWidth + ((($waferDiameter - $squareSideLength) / 2));
            $y2 = $y2 + $dieHeight;
        }
        $i++;

    }
    $img->insert('assets/images/logo.webp', 'bottom', 0, 0);
    $img->save('assets/images/wafer.png');
    return [
        'wafer' => base64_encode(file_get_contents('assets/images/wafer.png')),
        'dpw' => $dpw,
    ];
}

