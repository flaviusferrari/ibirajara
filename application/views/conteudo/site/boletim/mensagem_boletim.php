
    <div>
        <h3><?php echo $boletim['titulo']; ?></h3>
    </div>
          
    <div>
        <p><span class="txt_evan"><i><?php echo $boletim['citacao']; ?></i></span></p>
    </div>

    <div class="well text-justify">        
        <?php
        $pagina = explode("\n", $boletim['texto']);

        foreach ($pagina as $paragrafo):
            ?>

            <p><?php echo $paragrafo; ?></p>

        <?php endforeach; ?>         
    </div>

    <p class="epistola">
        Do livro "<?php echo $boletim['livro']; ?>"
        <br>
        <span style="color: #666;">Autor Espiritual:</span> Emmanuel
        <br>
        <span style="color: #666;">Médium:</span> Francisco Cândido Xavier
    </p>