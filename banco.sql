/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Author:  flavius
 * Created: 16/10/2016
 */

-- VERSÃO 0.8
-- Insere a coluna numero na tabela Boletim
ALTER TABLE `boletim` ADD COLUMN `numero` INT(6) NULL AFTER `livro`;

-- VERSÃO 0.7
-- Insere uma coluna de prioridade
ALTER TABLE `slides` ADD COLUMN `prioridade` INT(1) NULL DEFAULT 0 AFTER `evento`;

-- 25/01/2018 -- Inserindo um campo de título na tabela Slide
ALTER TABLE slides ADD titulo VARCHAR(255) NOT NULL AFTER id;
-- 16/10/2016 --
ALTER TABLE `slides` CHANGE `idEvento` `evento` VARCHAR(150) NULL DEFAULT NULL;

-- 23/10/2016 -- Alterada a tabela slides
ALTER TABLE slides CHANGE COLUMN evento evento INT(11) NULL;

/*** Versão 0.7 ***/