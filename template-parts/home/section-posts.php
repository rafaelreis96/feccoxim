
<div class="container-fluid py-4">
    <div class="container">
        <h2 class="text-center mb-5">
            <span class="molde-title">Posts</span>
        </h2>
        
        
        <div class="row row-cols-1 row-cols-sm-1 row-cols-md-4 row-cols-lg-4">
            <?php for($i=0; $i<=3; $i++) : ?>
            <div class="col mb-4">
                <a class="link-card-posts" href="#">
                    <div class="card" >
                        <img src="http://www.montessori-ms.com.br/Imagens/Noticias/031ef120-860a-4364-b549-8287be2edfc5_thumb.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p>
                                <span class="badge badge-info">24 Out. 2020</span>
                            </p>
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text text-muted">
                                Some quick example text to build on the card title and make up the bulk of the card's content.
                            </p>
                          
                        </div>
                    </div>
                </a>
            </div>
            <?php endfor; ?>
        </div>
        
        cc
    </div>
</div>