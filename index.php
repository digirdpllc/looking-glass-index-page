<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Looking Glass Index Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(90deg, #333, #007BFF);
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        .container {
            display: flex;
            flex-direction: column;
            max-width: 800px;
            padding: 20px;
            border-radius: 5px;
            background: rgba(255, 255, 255, 0.8);
        }

        .title {
            font-size: 24px;
            margin-bottom: 20px;
            text-align: center;
        }

        .link-list {
            list-style-type: none;
            padding: 0;
            display: grid;
            grid-template-columns: repeat(3, 1fr); /* 3 columns */
            gap: 10px; /* Gap between grid items */
        }

        .link-item {
            margin: 10px 0;
        }

        .button {
            background-color: #007BFF;
            color: #fff;
            padding: 15px;
            text-align: center;
            text-decoration: none;
            border-radius: 10px;
            font-weight: bold;
            display: block;
            transition: background-color 0.3s ease;
        }

        .button:hover {
            background-color: #0056b3;
        }
        footer {
            background: #90deg; /* Change to your preferred background color */
            color: #333;
            text-align: center;
            padding: 10px 0;
        }

        .logo-container {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .logo {
            max-width: 1000px !important; /* Adjust the logo size as needed */
        }

        .home-button {
            background-color: #007BFF;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            transition: background-color 0.3s ease;
            margin-top: 30px; /* Add space between logo and home button */
        }

        .home-button:hover {
            background-color: #0056b3;
        }
        .title {
    border: 1px solid #fff; /* Add a 1px solid black border */
    padding: 10px; /* Optional: Add some padding for spacing */
}
.mirror-title,
.glass-title {
    font-family: 'Arial', sans-serif;
    font-size: 28px;
    background: linear-gradient(90deg, #fff, #ccc);
    background-clip: text;
    -webkit-background-clip: text;
    color: transparent;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    transition: all 0.3s ease;
    display: inline-block;
}

.mirror-title:hover {
    background: linear-gradient(90deg, #00a1e4, #00e4a1);
    transform: rotateY(180deg); /* Flip the text on hover */
    color: #fff; /* Change the text color on hover */
}

.glass-title:hover {
    background: linear-gradient(90deg, #00e4a1, #00a1e4);
    transform: rotateY(180deg); /* Flip the text on hover */
    color: #ffbf00; /* Change the text color on hover */
}


    </style>
</head>
<body>
    <header>
        <div class="logo-container">
            <!--<img class="logo" src="https://digirdp.com/assets/img/icon.svg" alt="DigiRDP Logo"> -->
            <a href="https://digirdp.com" class="home-button">Go Back</a>
             
        </div>
    </header>
    <div class="container">
      <div class="title">
    <span class="mirror-title">Looking</span> <span class="glass-title">Glass</span>
</div>

        <ul class="link-list">
        <?php
        // Start a loop to generate buttons. This loop runs from 1 to 13.
        

for ($i = 1; $i <= 13; $i++):
?>
<div class="link-item">
    
    <?php
    $link = '';
    $text = '';
    switch ($i) {
        case 1:
            $link = 'http://lg-ny.digidedi.com';
            $text = 'New York ';
            break;
        case 2:
            $link = 'http://lg-dallas.digidedi.com';
            $text = 'Dallas ';
            break;
        case 3:
            $link = 'http://lg-losangeles.digidedi.com';
            $text = 'Los Angeles ';
            break;
        case 4:
            $link = 'http://lg-miami.digidedi.com';
            $text = 'Miami ';
            break;
        case 5:
            $link = 'http://lg-uk-dc01.digidedi.com';
            $text = 'UK DC01 ';
            break;
        case 6:
            $link = 'http://lg-uk-dc02.digidedi.com';
            $text = 'UK DC02 ';
            break;
        case 7:
            $link = 'http://lg-uk-dc03.digidedi.com';
            $text = 'UK DC03 ';
            break;
        case 8:
            $link = 'http://lg-uk-dc04.digidedi.com';
            $text = 'UK DC04 ';
            break;
        case 9:
            $link = 'http://lg-netherlands.digidedi.com';
            $text = 'The Netherlands ';
            break;
        case 10:
            $link = 'http://lg-germany.digidedi.com';
            $text = 'Germany ';
            break;
        case 11:
            $link = 'http://lg-singapore.digidedi.com';
            $text = 'Singapore ';
            break;
        case 12:
            $link = 'http://lg-india-dc01.digidedi.com';
            $text = 'India DC01 ';
            break;
        case 13:
            $link = 'http://lg-india-dc02.digidedi.com';
            $text = 'India DC02 ';
            break;
        default:
            $link = 'https://example.com/link' . $i;
            $text = 'Title ' . $i;
            break;
    }
    ?>
    <a class="button" href="<?php echo $link; ?>">
        <?php echo $text; ?>
    </a>
</div>
<?php
endfor;
?>
</div>
 <footer>
        <p>DigiRDP, LLC &copy; <?php echo date('Y'); ?>. All rights reserved.</p>
    </footer>

</body>
</html>
