<div class="container">
   
    <div class="container text-center">
        <div class="row"> 
    <?php foreach ($dados['posts'] as $post) : ?> 
        <div class="col"> 
            <div class="card" style="width: 18rem;"> 
                <img src="..." class="card-img-top" alt="..."> 
                <div class="card-body"> 
                    <h5 class="card-title"><?=$post->titulo ?></h5> 
                    <!-- Adicionada a classe 'text-limit' -->
                    <p class="card-text text-limit"><?=$post->texto ?></p> 
                    <!-- Adicionada a classe 'btn-toggle' -->
                    <a href="#" class="btn btn-primary btn-toggle">Ver mais</a> 
                </div> 
            </div> 
        </div> 
    <?php endforeach ?> 
</div>
            
    </div>
    
</div>

<script>
    document.querySelectorAll('.btn-toggle').forEach(button => {
    button.addEventListener('click', function(e) {
        e.preventDefault(); // Evita que a página role para o topo ao clicar no '#'
        
        // Encontra o parágrafo de texto que está logo antes do botão
        const textTarget = this.previousElementSibling;
        
        // Alterna a classe que expande/recolhe o texto
        textTarget.classList.toggle('expanded');
        
        // Muda o texto do botão dependendo do estado
        if (textTarget.classList.contains('expanded')) {
            this.textContent = 'Ver menos';
        } else {
            this.textContent = 'Ver mais';
        }
    });
});

</script>

