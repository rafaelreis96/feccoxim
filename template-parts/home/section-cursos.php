<?php 

$cards = [
    [
        "titulo"=> "Infantil",
        "img"=> "https://image.freepik.com/vetores-gratis/educacao-infantil_29937-3043.jpg"
    ],
    [
        "titulo"=> "Fundamental I",
        "img"=> "https://image.freepik.com/vetores-gratis/educacao-infantil_29937-3043.jpg"
    ],
    [
        "titulo"=> "Fundamental II",
        "img"=> "https://image.freepik.com/vetores-gratis/educacao-infantil_29937-3043.jpg"
    ],
    [
        "titulo"=> "Ensino Médio",
        "img"=> "https://image.freepik.com/vetores-gratis/educacao-infantil_29937-3043.jpg"
    ]
];


?>


<section class="container py-4">
    
    <div class="row row-cols-2 row-cols-sm-2 row-cols-md-4 row-cols-lg-4">
        <?php foreach($cards as $card) : ?>
        <div class="col mb-4">
            <a href="#">
                <div class="card">
                    <img src="<?=$card["img"]?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center"><?=$card["titulo"]?></h5>
                    </div>
                </div>
            </a>
        </div>
        <?php endforeach; ?>
    </div> 
</section>