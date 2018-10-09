
<!--<?php foreach ($ong as $o) {
	echo $o->nome . "<br/>";
	echo $o->email . "<br/>";
	echo $o->telefone . "<br/>";
	echo $o->endereco . "<br/><br/><br/>";
} ?>
-->
<head>
<link href="<?= base_url('assets/css/feed.css') ?>"  rel="stylesheet">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<!-- details card section starts from here -->
<section class="details-card">
    <div class="container">
        <div class="row">
        	<?php foreach ($ong as $o) {
            echo '<div class="col-md-4">
                <div class="card-content" style="margin:1rem">
                    <div class="card-img">
                        <img src="https://cdn.torontolife.com/wp-content/uploads/2017/08/toronto-house-for-sale-53-burnhamthorpe-crescent-1-1200x628.jpg" alt="">
                    
                    </div>
                    <div class="card-desc">
                        <h3 style="text-align:center;">'.$o->nome . '</h3>
                        <p>Email: '. $o->email."<br/>
                        		Telefone: " . $o->telefone."<br/>".
                        		"Endereço: " . $o->endereco
                         .'</p>
                                  
                                  <a href="'. base_url(). "doadores/exibir_feed/" . $o->id .'" class="btn btn-primary btn-block" style="background-color:#61C9A8; border-color: #61C9A8; color: white;   align: center;"
                                  >Ver mais</a>
                    </div>
                </div>
            </div>';
            } ?>
        </div>
    </div>
</section>
<!-- details card section starts from here -->
</body>