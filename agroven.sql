CREATE DATABASE IF NOT EXISTS agroven;
use agroven;

-- --------------------------------------------------------

--
-- Estrutura da tabela `VENDEDORES`
--
CREATE TABLE AGR_VENDEDORES (
  VEN_ID INT(11) NOT NULL AUTO_INCREMENT,
  VEN_NOME VARCHAR(100) NOT NULL,
  VEN_EMAIL VARCHAR(40) NOT NULL,
  VEN_SENHA VARCHAR(40) NOT NULL,
  CONSTRAINT VEN_PK PRIMARY KEY (VEN_ID));

-- --------------------------------------------------------

--
-- Estrutura da tabela `PRODUTO`
--
CREATE TABLE AGR_PRODUTO (
  PRO_ID INT(11) NOT NULL AUTO_INCREMENT,
  PRO_NOME VARCHAR(220) NOT NULL,
  PRO_DESCRICAO VARCHAR(220) NOT NULL,
  PRO_PRECO VARCHAR(220) NOT NULL,
  PRO_IMAGEM VARCHAR(220) NOT NULL,
  CONSTRAINT PRO_PK PRIMARY KEY (PRO_ID),
  USER_ID INT,
  FOREIGN KEY (USER_ID) REFERENCES AGR_VENDEDORES(VEN_ID));

--
-- Extraindo dados da tabela `PRODUTO`
--

INSERT INTO AGR_PRODUTO (PRO_ID, PRO_NOME, PRO_DESCRICAO, PRO_PRECO, PRO_IMAGEM) VALUES
(3, 'Uva', 'Cachos de uva rubi', '10,00', 'muda_de_uva_red_globe_com_90cm_305_1_20201205190707.jpg'),
(5, 'Milho', 'Amarelo', '5,20', 'diadomilho.jpg'),
(6, 'Abacaxi', 'Abacaxi direto do pé', '6,60', 'abacaxi-1513012505452_v2_450x337.jpg'),
(9, 'Morango', 'Morango é considerado, na linguagem vulgar, como o fruto vermelho do morangueiro, da família das rosáceas.', '6,50', 'download.jpg'),
(10, 'Banana', 'A banana é uma fruta comestível alongada - botanicamente uma baga - produzida por vários tipos de grandes plantas com flores herbáceas do gênero Musa. ', '3,50', 'banana-cachos.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `CLIENTES`
--

CREATE TABLE AGR_CLIENTES (
  CLI_ID INT(11) NOT NULL AUTO_INCREMENT,
  CLI_NOME VARCHAR(100) NOT NULL,
  CLI_EMAIL VARCHAR(45) NOT NULL,
  CLI_SENHA VARCHAR(45) NOT NULL,
  CONSTRAINT CLI_PK PRIMARY KEY (CLI_ID));

-- --------------------------------------------------------

--
-- Estrutura da tabela `COMPRA`
--

CREATE TABLE AGR_COMPRA (
  COM_ID INT(11) NOT NULL AUTO_INCREMENT,
  COM_PRO_ID INT(11), -- CHAVE ESTRAGEIRA/ADICIONAR FUNCIONALIDADE DEPOIS --
  COM_VEN_ID INT(11),
  COM_CLI_ID INT(11),
  CONSTRAINT COM_PK PRIMARY KEY (COM_ID));

-- --------------------------------------------------------

--
-- Estrutura da tabela `FRETE`
--

CREATE TABLE AGR_FRETE (
  FRE_ID INT(11) NOT NULL AUTO_INCREMENT,
  FRE_RUA VARCHAR(100) NOT NULL,
  FRE_NUMERO VARCHAR(10) NOT NULL,
  FRE_COMPLEMENTO VARCHAR(100) NOT NULL,
  FRE_CIDADE VARCHAR(45) NOT NULL,
  FRE_PONT_REF VARCHAR(100) NOT NULL,
  CONSTRAINT FRE_PK PRIMARY KEY (FRE_ID));


-- --------------------------------------------------------

--
-- Estrutura da tabela `LISTA DE DESEJOS`
--

/* CREATE TABLE AGR_LISTA_DE_DESEJOS (
  LIS_ID INT(11) NOT NULL AUTO_INCREMENT,
  LIS_PRO_ID INT(11) NOT NULL,
  CONSTRAINT LIS_PK PRIMARY KEY (LIS_ID),
  CONSTRAINT LIS_PRO_FK FOREIGN KEY (LIS_PRO_ID) REFERENCES AGR_PRODUTO(PRO_ID); */

--
-- Extraindo dados da tabela `LISTA DE DESEJOS`
--

/* INSERT INTO AGR_LISTA_DE_DESEJOS (LIS_ID, LIS_PRO_ID) VALUES
(9, 5),
(10, 6),
(11, 10); */

-- --------------------------------------------------------

--
-- Estrutura da tabela `FINALIZAR COMPRA`
--
/* 
CREATE TABLE AGR_FINALIZAR_COMPRA(
  FIN_COMPROVANTE_VENDA INT(11) NOT NULL AUTO_INCREMENT,
  FIN_PRO_ID INT(11) NOT NULL,
  FIN_VEN_ID INT(11) NOT NULL,
  FIN_CLI_ID INT(11) NOT NULL,
  FIN_FRE_ID INT(11) NOT NULL,
  CONSTRAINT FIN_PK PRIMARY KEY (FIN_COMPROVANTE_VENDA),
  CONSTRAINT FIN_PRO_FK FOREIGN KEY (FIN_PRO_ID)
    REFERENCES AGR_PRODUTO (PRO_ID),
  CONSTRAINT FIN_VEN_FK FOREIGN KEY (FIN_VEN_ID)
    REFERENCES AGR_VENDEDORES (VEN_ID),
  CONSTRAINT FIN_CLI_FK FOREIGN KEY (FIN_CLI_ID)
    REFERENCES AGR_CLIENTES (CLI_ID),
  CONSTRAINT FIN_FRE_FK FOREIGN KEY (FIN_FRE_ID)
    REFERENCES AGR_FRETE (FRE_ID);
); */