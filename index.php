<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Philippines</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
        <!-- header -->
    <header>
        <div class="logo">Philippines</div>
        <ul class="menu">
        <li id="home">Home</li>
        <li id="tours">Tours</li>
        <li id="gallery">Gallery</li>      
        </ul>
        <div class="search">
            <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
            </svg>
        </div>
    </header>

    <!-- slider -->

    <div class="slider">
        <!-- list Items -->
        <div class="list">
            <div class="item active">
                <img src="img/mayon1.jpeg">
                <div class="content">
                    <p>Albay, Bicol</p>
                    <h2>Mayon Volcano</h2>
                    <p>
                    Mayon Volcano is an active stratovolcano located in the province of Albay on the island of Luzon in the Philippines.
                     It is renowned for its nearly perfect conical shape, making it one of the most iconic landmarks of the Philippines.
                    </p>
                </div>
            </div>
            <div class="item">
                <img src="img/island.jpeg">
                <div class="content">
                    <p>Alaminos, Pangasinan</p>
                    <h2>Hundered Island</h2>
                    <p>
                    The Hundred Islands National Park is a picturesque archipelago located off the coast of Alaminos City in the province
                     of Pangasinan, Philippines. Comprising over 100 small islands and islets scattered across Lingayen Gulf, this natura
                     l wonder is renowned for its stunning limestone formations, crystal-clear waters, and diverse marine life.
                    </p>
                </div>
            </div>
            <div class="item">
                <img src="img/les cabanes.jpeg">
                <div class="content">
                    <p>Elnido, Palawan</p>
                    <h2>Las Cabanas</h2>
                    <p>                
                    Las Cabanas Beach is a renowned coastal gem situated near El Nido in Palawan, Philippines. With its powdery white
                     sand, crystal-clear turquoise waters, and dramatic limestone cliffs, Las Cabanas Beach offers a breathtaking 
                     tropical escape.
                    </p>
                </div>
            </div>
            <div class="item">
                <img src="img/little borac.jpg">
                <div class="content">
                    <p>Nasugbu, Batangas</p>
                    <h2>Little Boracay</h2>
                    <p>
                    "Little Boracay" is a charming beach destination located in Nasugbu, Batangas, Philippines. Known for its pristine
                     white sand shores and clear turquoise waters, Little Boracay offers visitors a serene and picturesque getaway 
                     reminiscent of the famous Boracay Island. 
                    </p>
                </div>
            </div>
            <div class="item">
                <img src="img/lihhthouse.jpeg">
                <div class="content">
                    <p>Basco, Batanes</p>
                    <h2>Basco Lighthouse</h2>
                    <p>
                    The Basco Lighthouse is an iconic landmark located in Basco, the capital of Batanes province in the Philippines. Perched atop Naidi Hill,
                     this picturesque lighthouse offers panoramic views of the surrounding landscapes, including the rugged coastlines 
                     and the vast expanse of the West Philippine Sea.
                    </p>
                </div>
            </div>
        </div>
        <!-- button arrows -->
        <div class="arrows">
            <button id="prev"><</button>
            <button id="next">></button>
        </div>
        <!-- thumbnail -->
        <div class="thumbnail">
            <div class="item active">
                <img src="img/mayon1.jpeg">
                <div class="content">
                    Name Slider
                </div>
            </div>
            <div class="item">
                <img src="img/island.jpeg">
                <div class="content">
                    Name Slider
                </div>
            </div>
            <div class="item">
                <img src="img/les cabanes.jpeg">
                <div class="content">
                    Name Slider
                </div>
            </div>
            <div class="item">
                <img src="img/little borac.jpg">
                <div class="content">
                    Name Slider
                </div>
            </div>
            <div class="item">
                <img src="img/lihhthouse.jpeg">
                <div class="content">
                    Name Slider
                </div>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>