<!DOCTYPE html>
<html lang="en">
<head>

    <title>Lab 5a Q3</title>
 
</head>
<body>
<?php
    function calculateArea(float $width, float $height): float {
        return $width * $height;
    }

    $widthInput = $_POST['width'] ?? '';
    $heightInput = $_POST['height'] ?? '';
    $resultMessage = '';
    $errorMessage = '';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if ($widthInput === '' || $heightInput === '' || !is_numeric($widthInput) || !is_numeric($heightInput)) {
            $errorMessage = "Please enter valid numeric values for both width and height.";
        } elseif ((float)$widthInput <= 0 || (float)$heightInput <= 0) {
            $errorMessage = "Width and height must be greater than zero.";
        } else {
            $width = (float)$widthInput;
            $height = (float)$heightInput;
            $area = calculateArea($width, $height);
            $resultMessage = "The area of a rectangle with a width of {$width} and {$height} is {$area}";
        }
    }
?>

    <h2>Rectangle Area Calculator</h2>

    <form method="POST" action="lab5a_q3.php">
        <div class="form-row">
            <label for="width">Width:</label>
            <input type="number" step="any" min="0.01" id="width" name="width"
                   value="<?php echo htmlspecialchars($widthInput); ?>" required>
        </div>
        <div class="form-row">
            <label for="height">Height:</label>
            <input type="number" step="any" min="0.01" id="height" name="height"
                   value="<?php echo htmlspecialchars($heightInput); ?>" required>
        </div>
        <button type="submit">Calculate Area</button>
    </form>

    <?php if ($errorMessage !== ''): ?>
        <p class="error"><?php echo htmlspecialchars($errorMessage); ?></p>
    <?php elseif ($resultMessage !== ''): ?>
        <p class="result"><?php echo htmlspecialchars($resultMessage); ?></p>
    <?php endif; ?>

</body>
</html>