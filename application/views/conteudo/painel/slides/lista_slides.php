<table class="table table-hover"> 
    <thead>
        <th>Título</th>
        <th>Data Início</th>
        <th>Data Fim</th>
    </thead>
    <?php foreach ($slides as $campo): ?>
    <tr class="addEvento pointer" data-idslide="<?php echo $campo['id']; ?>">                   
        <td><?php echo $campo['titulo']; ?></td>
        <td><?php echo $this->tdate->setDateBr($campo['dtInicio']); ?></td>
        <td><?php echo $this->tdate->setDateBr($campo['dtFinal']); ?></td>        
    </tr>
    <?php endforeach; ?>
</table>