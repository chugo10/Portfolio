<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes Projets</title>
    <style>
        /* Appliquez le même background que votre index.html */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: rgba(23, 48, 88, 1); 
        }

        h1 {
            text-align: center;
            margin-top: 20px;
            color: wheat
        }

        .container {
            width: 90%;
            margin: auto;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            padding-top: 20px;
        }

        .card {
            width: 300px;
            background: white;
            margin: 15px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
            text-align: center;
        }

        .card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .card h3 {
            margin: 10px 0;
            font-size: 1.2em;
            color: wheat
        }

        .card p {
            font-size: 0.9em;
            color: wheat;
            padding: 0 10px;
        }
    </style>
</head>
<body>
    <h1>Mes Projets</h1>
    <div class="container">
        <div class="card">
            <img src="chemin/vers/image1.jpg" alt="Image Projet 1">
            <h3>Projet 1</h3>
            <p>Une brève description du projet 1.</p>
        </div>
        <div class="card">
            <img src="chemin/vers/image2.jpg" alt="Image Projet 2">
            <h3>Projet 2</h3>
            <p>Une brève description du projet 2.</p>
        </div>
        <div class="card">
            <img src="chemin/vers/image3.jpg" alt="Image Projet 3">
            <h3>Projet 3</h3>
            <p>Une brève description du projet 3.</p>
        </div>
        <div class="card">
            <img src="chemin/vers/image3.jpg" alt="Image Projet 3">
            <h3>Projet 4</h3>
            <p>Une brève description du projet 3.</p>
        </div>
        <div class="card">
            <img src="chemin/vers/image3.jpg" alt="Image Projet 3">
            <h3>Projet 5</h3>
            <p>Une brève description du projet 3.</p>
        </div>
    </div>
</body>
</html>
