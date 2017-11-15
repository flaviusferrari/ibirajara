<!-- CONTENT -->
<div class="panel panel-primary">
    <!-- Panel heading -->
    <div class="panel-heading">Programação do Mês</div>
    <!-- Panel Body -->
    <div class="panel-body">


        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered">
                    <!-- MÊS  -->
                    <thead>
                        <th class="bg-primary" colspan="2">
                            <div class="row">
                                <div class="col-md-1">                            
                                    <button type="button" id="btnMesAnterior" class="btn btn-info btn-sm" title="Mês Anterior"><strong><</strong></button>
                                </div>
                                <div class="col-md-4 col-md-offset-3 text-center">
                                    <span class=""><?php echo $nome_mes; ?> de <?php echo $ano; ?></span>
                                    <input type="hidden" id="mes_atual" value="<?php echo $mes; ?>">
                                    <input type="hidden" id="ano_atual" value="<?php echo $ano; ?>">
                                </div>
                                <div class="col-md-1 col-md-offset-3">                            
                                    <button type="button" id="btnMesPosterior" class="btn btn-info btn-sm" title="Próximo Mês"><strong>></strong></button>
                                </div>                        
                            </div>
                        </th>
                    </thead>

                    <tbody>
                        <!-- SEGUNDA -->
                        <tr>
                            <td class="bg-info" colspan="2"><strong>SEGUNDA - 15h</strong><br>
                                <cite>Estudo de "O Evangelho segundo o Espiritismo"</cite></td>
                        </tr>
                        <?php 
                        foreach ($programa as $programacao): 
                            $d = date('w', strtotime($programacao['data']));

                            if($d == 1)
                            { ?>
                                <!-- PROGRAMAÇAO DIA-->
                                <tr>
                                    <td class="dia text-center">
                                        <!-- Dia -->
                                        <span class="dtDia"><?php echo date('d', strtotime($programacao['data'])); ?></span>
                                    </td>
                                    <td>
                                        <!-- Tema -->
                                        <span>
                                            <span style="color: #006; font-weight: bold;">Tema:</span>
                                            <?php 
                                                echo $programacao['tema']; 
                                                if (!empty($programacao['subsidio']))
                                                {
                                                    echo ' (<small>'.$programacao['subsidio'].'</small>)';
                                                }
                                            ?>
                                        </span>
                                        <br>
                                        <!-- Expositor -->
                                        <span class="expositor">
                                            <span style="color: #006; font-weight: bold;">Expositor:</span> <?php echo $programacao['expositor']; ?> 
                                        </span>
                                    </td>
                                </tr> <?php
                            } 
                        endforeach; ?>

                        <!-- TERÇA -->
                        <tr>
                            <td class="bg-info" colspan="2"><strong>TERÇA - 20h10min</strong><br>
                                <cite>&nbsp;</cite></td>
                        </tr>
                        <?php 
                        foreach ($programa as $programacao): 
                            $d = date('w', strtotime($programacao['data']));

                            if($d == 2)
                            { ?>
                                <!-- PROGRAMAÇAO DIA-->
                                <tr>
                                    <td class="dia text-center">
                                        <!-- Dia -->
                                        <span class="dtDia"><?php echo date('d', strtotime($programacao['data'])); ?></span>
                                    </td>
                                    <td class="">
                                        <!-- Tema -->
                                        <span class="tema">
                                            <span style="color: #006; font-weight: bold;">Tema:</span>
                                            <?php 
                                                echo $programacao['tema']; 
                                                if (!empty($programacao['subsidio']))
                                                {
                                                    echo ' (<small>'.$programacao['subsidio'].'</small>)';
                                                }
                                            ?>
                                        </span>
                                        <br>
                                        <!-- Expositor -->
                                        <span class="expositor">
                                            <span style="color: #006; font-weight: bold;">Expositor:</span> <?php echo $programacao['expositor']; ?> 
                                        </span>
                                    </td>
                                </tr> <?php
                            } 
                        endforeach; ?>

                        <!-- QUARTA -->
                        <tr>
                            <td class="bg-info" colspan="2"><strong>QUARTAS - 19h30min</strong><br>
                                <cite>Estudo aprofundado da Doutrina Espírita - (Aspecto Religioso)</cite></td>
                        </tr>

                        <?php 
                        foreach ($programa as $programacao): 
                            $d = date('w', strtotime($programacao['data']));

                            if($d == 3)
                            { ?>
                                <!-- PROGRAMAÇAO DIA-->
                                <tr>
                                    <td class="dia text-center">
                                        <!-- Dia -->
                                        <span class="dtDia"><?php echo date('d', strtotime($programacao['data'])); ?></span>
                                    </td>
                                    <td>
                                        <!-- Tema -->
                                        <span class="tema">
                                            <span style="color: #006; font-weight: bold;">Tema:</span>
                                            <?php 
                                                echo $programacao['tema']; 
                                                if (!empty($programacao['subsidio']))
                                                {
                                                    echo ' (<small>'.$programacao['subsidio'].'</small>)';
                                                }
                                            ?>
                                        </span>
                                        <br>
                                        <!-- Expositor -->
                                        <span class="expositor">
                                            <span style="color: #006; font-weight: bold;">Expositor:</span> <?php echo $programacao['expositor']; ?> 
                                        </span>
                                    </td>
                                </tr> <?php
                            } 
                        endforeach; ?>


                        <!-- SEXTA -->
                        <tr>
                            <td class="bg-info" colspan="2">
                                <strong>SEXTAS - 19h30min</strong>
                                <br>
                                <cite>Estudo de “O Livro dos Espíritos”</cite>
                            </td>
                        </tr>
                        <?php 
                        foreach ($programa as $programacao): 
                            $d = date('w', strtotime($programacao['data']));

                            if($d == 5)
                            { ?>
                                <!-- PROGRAMAÇAO DIA-->
                                <tr>
                                    <td class="dia text-center">
                                        <!-- Dia -->
                                        <span class="dtDia"><?php echo date('d', strtotime($programacao['data'])); ?></span>
                                    </td>
                                    <td class="" data-idprog="<?php echo $programacao['id']; ?>">
                                        <!-- Tema -->
                                        <span class="tema">
                                            <span style="color: #006; font-weight: bold;">Tema:</span>
                                            <?php 
                                                echo $programacao['tema']; 
                                                if (!empty($programacao['subsidio']))
                                                {
                                                    echo ' (<small>'.$programacao['subsidio'].'</small>)';
                                                }
                                            ?>
                                        </span>
                                        <br>
                                        <!-- Expositor -->
                                        <span class="expositor">
                                            <span style="color: #006; font-weight: bold;">Expositor:</span> <?php echo $programacao['expositor']; ?> 
                                        </span>
                                    </td>
                                </tr> <?php
                            } 
                        endforeach; ?>


                        <!-- SÁBADO -->
                        <tr>
                            <td class="bg-info" colspan="2"><strong>SABADOS - 19h45min</strong><br>
                                <cite>Tríplice Aspecto da Doutrina Espírita</cite></td>
                        </tr>
                        <?php 
                        foreach ($programa as $programacao): 
                            $d = date('w', strtotime($programacao['data']));

                            if($d == 6)
                            { ?>
                                <!-- PROGRAMAÇAO DIA-->
                                <tr>
                                    <td class="dia text-center">
                                        <!-- Dia -->
                                        <span class="dtDia"><?php echo date('d', strtotime($programacao['data'])); ?></span>
                                    </td>
                                    <td>
                                        <!-- Tema -->
                                        <span class="tema">
                                            <span style="color: #006; font-weight: bold;">Tema:</span>
                                            <?php 
                                                echo $programacao['tema']; 
                                                if (!empty($programacao['subsidio']))
                                                {
                                                    echo ' (<small>'.$programacao['subsidio'].'</small>)';
                                                }
                                            ?>
                                        </span>
                                        <br>
                                        <!-- Expositor -->
                                        <span class="expositor">
                                            <span style="color: #006; font-weight: bold;">Expositor:</span> <?php echo $programacao['expositor']; ?> 
                                        </span>
                                    </td>
                                </tr> <?php
                            } 
                        endforeach; ?>

                    </tbody>
                </table>
            </div>    
        </div> <!-- /row -->
        
    </div><!-- /div panel-body -->
</div> <!-- / panel-primary -->