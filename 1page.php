<?php
header('Content-Type: text/html; charset=UTF-8');
?>
<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Audi Animation</title>
    <link rel="stylesheet" href="css/1page.css">
</head>
<body>
<div class="canvas" onclick="goTo2page()">
    <div class="dark"></div>
    <div class="window">
        <?php
        $frames = ['top', 'left', 'right', 'bottom'];
        foreach ($frames as $frame) {
            echo "<div class='window-frame-$frame'></div>";
        }
        ?>
    </div>
    <div class="bottom">
        <div class="left-glow glow"></div>
        <div class="right-glow glow"></div>
        <?php for ($i = 1; $i <= 4; $i++): ?>
            <div class="bottom-top-left bottom-top">
                <div class="adjust-<?= $i; ?>"></div>
            </div>
            <div class="bottom-top-right bottom-top">
                <div class="adjust-<?= $i; ?>"></div>
            </div>
        <?php endfor; ?>
        <?php for ($j = 0; $j < 2; $j++): ?>
            <div class="light-<?= $j === 0 ? 'left' : 'right'; ?> light">
                <div class="top-line"></div>
                <div class="side-line"></div>
                <div class="bottom-line"></div>
                <div class="inner-triangle"></div>
                <div class="bulb"></div>
                <div class="bottom-extend">
                    <div class="bottom-extend-left"></div>
                    <div class="bottom-extend-bottom"></div>
                    <div class="bottom-extend-right"></div>
                </div>
            </div>
        <?php endfor; ?>
        <div class="grilles">
            <?php foreach (['mid', 'left', 'right'] as $shade): ?>
                <div class="shade-<?= $shade; ?> shade"></div>
            <?php endforeach; ?>
            <?php foreach (['left', 'right'] as $shadow): ?>
                <div class="shadow shadow-<?= $shadow; ?>"></div>
            <?php endforeach; ?>
            <div class="grilles-box">
                <?php for ($k = 1; $k <= 7; $k++): ?>
                    <div class="line-<?= $k; ?> line"></div>
                <?php endfor; ?>
                <div class="audi-logo">
                    <?php for ($l = 1; $l <= 4; $l++): ?>
                        <div class="circle-<?= $l; ?> circle"></div>
                    <?php endfor; ?>
                </div>
                <div class="overlay-left"></div>
                <div class="overlay-right"></div>
            </div>
        </div>
    </div>
    <div class="mirrors">
        <?php foreach (['left', 'right'] as $mirror): ?>
            <div class="<?= $mirror; ?>-mirror mirror">
                <div class="triangle"></div>
                <div class="mirror-bottom">
                    <div class="reflection"></div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<script src="script.js"></script>
<script>
    function goTo2page() {
        window.location.href = '2page.php';
    }
</script>
<script src="js/1page.js"></script>
</body>
</html>
