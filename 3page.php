<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Audi - Performanță și Tehnologie</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }
        .background-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('https://wallpapers4screen.com/Uploads/15-2-2017/35648/thumb2-audi-rs6-avant-tuning-2016-cars-wagons-supercars.jpg') no-repeat center center/cover;
            filter: blur(5px);
            z-index: -1;
        }
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            color: white;
            padding: 20px;
        }
        .back-button {
            position: fixed;
            top: 20px;
            left: 20px;
            background: rgba(0, 0, 0, 0.7);
            color: white;
            padding: 12px 18px;
            border-radius: 50px;
            font-size: 16px;
            font-weight: bold;
            text-transform: uppercase;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            transition: 0.3s ease;
        }
        .back-button i {
            font-size: 18px;
        }
        .back-button:hover {
            background: rgba(255, 255, 255, 0.9);
            color: black;
            box-shadow: 0 0 15px rgba(0, 183, 255, 0.7);
        }
        .container {
            background: rgba(0, 0, 0, 0.8);
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(255, 0, 0, 0.5);
            max-width: 900px;
        }
        h1 {
            font-size: 3rem;
            margin-bottom: 10px;
            text-transform: uppercase;
            color: #ff0000;
            text-shadow: 0 0 10px rgba(255, 0, 0, 0.7);
        }
        .cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 20px;
            margin-top: 30px;
        }
        .card {
            background: white;
            color: black;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            cursor: pointer;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.5);
        }
        .card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        .card h3 {
            background: black;
            color: white;
            padding: 15px;
            width: 100%;
            text-align: center;
            font-size: 1.3rem;
        }
        .card ul {
            list-style: none;
            padding: 15px;
            text-align: left;
            width: 100%;
        }
        .card ul li {
            padding: 5px 0;
            font-size: 1rem;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="background-container"></div>

    <a href="2page.php" class="back-button">
        <i class="fa fa-arrow-left"></i> Înapoi
    </a>

    <div class="container">
        <h1>Audi</h1>
        <h2>Simbol al Performanței și Tehnologiei</h2>
        <p>Descoperă modelele de top ale brandului Audi.</p>
        <div class="cards">
            <a href="4page.php" class="card">
                <!-- Imaginea A-Series direct de pe internet -->
                <img src="https://cdn.motor1.com/images/mgl/nn6YR/s3/2020-audi-a7-sportback-e-quattro.webp" alt="A-Series">
                <h3>A-Series</h3>
                <ul>
                    <li>Sedan premium</li>
                    <li>Confort modern</li>
                    <li>Ideal business</li>
                </ul>
            </a>
            <a href="5page.php" class="card">
                <!-- Imaginea Q-Series direct de pe internet -->
                <img src="https://cdn11.bigcommerce.com/s-q5z3jegn8k/product_images/uploaded_images/audi-4l-q8-1680x752.jpg" alt="Q-Series">
                <h3>Q-Series</h3>
                <ul>
                    <li>SUV versatil</li>
                    <li>Spațiu & 4x4</li>
                    <li>Aventură & familie</li>
                </ul>
            </a>
            <a href="6page.php" class="card">
                <!-- Imaginea RS-Series direct de pe internet -->
                <img src="https://www.mansory.com/sites/default/files/styles/1920x800_fullwidth_car_slider/public/2021-09/audi_rs_7_front_1.jpg?itok=1S2Ph9Gr" alt="RS-Series">
                <h3>RS & S-Series</h3>
                <ul>
                    <li>Modele sport</li>
                    <li>Putere & dinamică</li>
                    <li>Design agresiv</li>
                </ul>
            </a>
        </div>
    </div>
</body>
</html>
