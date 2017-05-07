<table class="table table-hover"> 
    <thead>
        <th>Início</th>
        <th>Titulo</th>
    </thead>
    <?php foreach ($boletim as $campo): ?>
    <tr>                   
        <td><?php echo $this->tdate->setDateBr($campo['dtInicio']); ?></td>
        <td><?php echo $campo['titulo']; ?></td>
        
    </tr>
    <?php endforeach; ?>
</table>
