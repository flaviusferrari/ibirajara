<table class="table table-hover"> 
    <thead>
        <th>Data Início</th>
        <th>Data Fim</th>
    </thead>
    <?php foreach ($slides as $campo): ?>
    <tr>                   
        <td><?php echo $this->tdate->setDateBr($campo['dtInicio']); ?></td>
        <td><?php echo $this->tdate->setDateBr($campo['dtFinal']); ?></td>        
    </tr>
    <?php endforeach; ?>
</table>