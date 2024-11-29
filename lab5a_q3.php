<!DOCTYPE html>
<html lang="en">

<head>
    <title>Lab 5a Q3</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
        }

        .result {
            font-size: 20px;
            font-weight: bold;
            color: #333;
        }
    </style>
</head>

<body>
    <?php 
        function calculateArea($length, $width) {
            return $length * $width;
        }

        $length = 10; 
        $width = 5;   

        $area = calculateArea($length, $width);
    ?>

    <div>
        <p>The area of the rectangle with:</p>
        <p>Length = <?php echo $length; ?> units</p>
        <p>Width = <?php echo $width; ?> units</p>
        <p class="result">Area = <?php echo $area; ?> square units</p>
    </div>
</body>

</html>