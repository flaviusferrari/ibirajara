<table class="table table-hover"> 
    <thead>
        <th>Data Início</th>
        <th>Data Fim</th>
        <th>Titulo</th>
    </thead>
    <?php foreach ($boletim as $campo): ?>
    <tr class="idBoletim"  data-idboletim="<?php echo $campo['id']; ?>">                   
        <td><?php echo $this->tdate->setDateBr($campo['dtInicio']); ?></td>
        <td><?php echo $this->tdate->setDateBr($campo['dtFim']); ?></td>
        <td><?php echo $campo['titulo']; ?></td>
        
    </tr>
    <?php endforeach; ?>
</table>