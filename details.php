<?php
$flavor = $_GET['flavor'];
$flavorDetails = [
    'pandyan' => [
        'name' => 'Pandyan Delight',
        'description' => 'Pandyan Delight is a signature offering from Nature\'s Scoop, designed to refresh and intrigue your taste buds with a unique pandan flavor...',
        'ingredients' => 'Pandan leaves (Rampe), Water, Heavy Cream, Condensed Milk, Nuts (No colorings added)',
        'images' => [
            [
                'path' => 'Screenshot 2024-10-30 063227-modified (1).png',
                'price' => 'Rs.800 ',
                'volume' => '400 ml'
            ],
            [
                'path' => 'Screenshot 2024-10-30 213423.png',
                'price' => 'Rs. 500',
                'volume' => '225 ml'
            ],
            [
                'path' => 'Screenshot 2024-10-30 064039-modified.png',
                'price' => 'Rs. 180',
                'volume' => '80 ml'
            ]
        ]
    ],
    'cinnamon' => [
        'name' => 'Cinnamon Swirl Dream',
        'description' => 'Cinnamon Swirl Dream from Nature’s Scoop brings the warmth and sweetness of cinnamon...',
        'ingredients' => 'Cinnamon, Water, Heavy Cream, Condensed Milk, Nuts',
        'images' => [
            [
                'path' => 'csd.jpg',
                'price' => 'Rs. 800',
                'volume' => '400 ml'
            ],
            [
                'path' => 'csd.jpg',
                'price' => 'Rs.500',
                'volume' => '225 ml'
            ],
            [
                'path' => 'csd.jpg',
                'price' => 'Rs.180',
                'volume' => '80 ml'
            ]
        ]
    ],
    'ambaralla' => [
        'name' => 'Ambaralla Bliss',
        'description' => 'Enjoy the tropical and tangy flavor of Ambaralla, a refreshing treat perfect for a hot day...',
        'ingredients' => 'Ambaralla fruit, Water, Sugar, Heavy Cream',
        'images' => [
            [
                'path' => '12.jpg',
                'price' => 'Rs. 80',
                'volume' => '30 ml'
            ]
            
        ]
    ],
    'nelly' => [
        'name' => 'Nelli Zest',
        'description' => 'The Nelly Popsical brings a unique and exotic flavor, perfect for those looking for something different...',
        'ingredients' => 'Nelly fruit, Water, Sugar, Heavy Cream',
        'images' => [
            [
                'path' => 'nelly20.webp',
                'price' => 'Rs. 80',
                'volume' => '30 ml'
            ]
            
        ]
    ]
];

if (!isset($flavorDetails[$flavor])) {
    echo "Flavor not found.";
    exit;
}

$details = $flavorDetails[$flavor];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $details['name']; ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <style>
    .navbar-custom {
        background-color: rgb(50, 168, 158);
    }
    .navbar-custom .nav-link {
        color: black;
    }
    .scrolling-wrapper {
        display: flex;
        justify-content: center;
        overflow-x: auto;
        white-space: nowrap;
        padding: 10px;
        border-radius: 5px;
        margin-top: 20px;
        width: 100%;
    }
    .card {
        width: 18rem;
        margin-right: 10px;
        vertical-align: top;
    }
    .card img {
    width: 100%;
    height: auto;
    border: 2px solid #ccc;
    border-radius: 5px;
    object-fit: cover;
}
    footer {
        background-color: gray;
        color: white;
        padding-top: 10px;
    padding-bottom: 10px;
    }
    .social-icons i {
        color: black;
        margin-right: 15px;
        font-size: 20px;
    }
    .footer-bottom {
        background-color: rgba(0, 0, 0, 0.05);
    }
    </style>
</head>
<body>


<nav class="navbar navbar-expand-sm navbar-custom">
    <div class="container-fluid">
        <div class="logo textual pull-left">
            <img src="WhatsApp Image 2024-10-30 at 08.15.48_619c95f8.jpg" height="40px" alt="Logo">
        </div>
        <ul class="navbar-nav ml-auto">
            <li><a class="nav-link" href="index.html#home">Home</a></li>
            <li><a class="nav-link" href="index.html#footer">About us</a></li>
            <li><a class="nav-link" href="https://wa.me/94766924756">Contact us</a></li>
            <li><a class="nav-link" href="https://maps.app.goo.gl/5sHYmUQesEMHQfWNA">Main Branch</a></li>
        </ul>
    </div>
</nav>
<br>

<div class="container mt-5">
    <h2><?php echo $details['name']; ?></h2>
    <p><?php echo $details['description']; ?></p>
    
    <p><strong>Ingredients:</strong> <?php echo $details['ingredients']; ?></p>
    
    
    <div class="scrolling-wrapper">
        <?php foreach ($details['images'] as $image): ?>
            <div class="card">
                <img src="<?php echo $image['path']; ?>" class="card-img-top" alt="Ice Cream Image">
                <div class="card-body">
                    <h5 class="card-title">Price: <?php echo $image['price']; ?></h5>
                    <p class="card-text">Volume: <?php echo $image['volume']; ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<br><br>


<footer class="footer-border" style="padding: 20px;">
    <div class="text-center text-lg-start" id="footer">
        <section class="d-flex justify-content-between p-4">
            <div>
                <h6>Check with us on social networks:</h6>
                <div class="footer-social-icons">
                    <a href="#" class="text-reset"><i class="fab fa-facebook-f"></i></a><br>
                    <a href="#" class="text-reset"><i class="fab fa-google"></i></a>
                    <a href="#" class="text-reset"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="text-center mx-auto" style="flex-grow: 1;">
                <h4 class="text-uppercase fw-bold">Nature's Scoop</h4>
                <p>Where health meets indulgence</p>
            </div>
            <div>
                <h6 class="text-uppercase fw-bold">Contact</h6>
                <p><i class="fas fa-home me-3"></i> No.46, Matara RD, Galle</p>
                <p><i class="fas fa-envelope me-3"></i> NatureScoop@gmail.com</p>
                <p><i class="fas fa-phone me-3"></i> +94 915 628 313</p>
                <p><i class="fas fa-phone me-3"></i> +94 915 628 314</p>
            </div>
        </section>
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
            © 2024 Copyright: <a class="text-reset fw-bold" href="http://localhost/Final/HungryMe/HUNGRYME.php">Nature'sScoop.com</a>
        </div>
    </div>
</footer>


</body>
</html>
