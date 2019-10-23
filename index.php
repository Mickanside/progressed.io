<?php
	$int = intval($_GET["int"]);
	$fullWidth = 90;
    $progressWidth = $int / 100 * 90;
    $color = ($int < 30 ? "#d9534f" : ($int < 70 ? "#f0ad4e" : "#5cb85c"));
	header('Content-type: image/svg+xml');
    echo '<?xml version="1.0" standalone="no"?>
    <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN"
    "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">';
?>
<svg xmlns="http://www.w3.org/2000/svg" width="<?= $fullWidth ?>" height="20">
    <linearGradient id="a" x2="0" y2="100%">
        <stop offset="0" stop-color="#bbb" stop-opacity=".1"/>
        <stop offset="1" stop-opacity=".1"/>
    </linearGradient>
    <rect rx="4" x="0" width="<?= $fullWidth ?>" height="20" fill="#555"/>
    <rect rx="4" x="0" width="<?= $progressWidth ?>" height="20" fill="<?= $color ?>"/>
    <rect rx="4" width="<?= $fullWidth ?>" height="20" fill="url(#a)"/>
    <g fill="#fff" text-anchor="middle" font-family="DejaVu Sans,Verdana,Geneva,sans-serif" font-size="11">
      <text x="<?= $fullWidth / 2 ?>" y="15" fill="#010101" fill-opacity=".3"><?= $int ?>%</text>
      <text x="<?= $fullWidth / 2 ?>" y="14"><?= $int ?>%</text>
    </g>
</svg>