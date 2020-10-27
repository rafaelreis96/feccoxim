<section class="jumbotron mb-0">   
    <div class="container">
        
        <h2 class="text-center mb-5">
            <span class="molde-title">Eventos</span>
        </h2>
        
        <div class="grid-container-eventos">
            <div class="primary">
                <a class="link-card-evento" href="">                    
                    <div class="card text-white">
                        <img class="card-img" src="https://www.cqcs.com.br/wp-content/uploads/2019/05/palestrantes-para-seu-evento.jpg"/>
                        <div class="card-overlay">
                            <h5 class="card-title">Card title</h5>
                            <span class="badge">10.Out.2020</span>
                        </div>
                    </div>
                </a>
            </div>
            
            <div class="secondary">
                <?php for($i=1; $i<=4; $i++) : ?>
                <div class="<?= "s".$i ?>">
                    <a class="link-card-evento" href="">                    
                        <div class="card text-white">
                            <img class="card-img" src="https://www.cqcs.com.br/wp-content/uploads/2019/05/palestrantes-para-seu-evento.jpg"/>
                            <div class="card-overlay">
                                <h5 class="card-title">Card title</h5>
                                <span class="badge">10.Out.2020</span>
                            </div>
                        </div>
                    </a>
                </div>
                <?php endfor; ?>
            </div>
        </div>
       
        <p class="text-right mt-4">
            <a href="" class="btn btn-secondary font-weight-bold">Ver Mais</a>
        </p>
    </div>
</section>