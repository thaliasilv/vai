DROP DATABASE mvcd;
CREATE DATABASE mvcd;

USE mvcd;

CREATE TABLE IF NOT EXISTS `mvcd`.`usuario` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(100) NOT NULL,
  `senha` VARCHAR(100) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `papel` VARCHAR(100) NOT NULL DEFAULT 'usuario'
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 24
DEFAULT CHARACTER SET = utf8

INSERT INTO `mvcd`.`usuario` (`nome`, `senha`, `email`, `papel`) VALUES ('admin', '123', 'admin@admin', 'admin');
INSERT INTO `mvcd`.`usuario` (`nome`, `senha`, `email`, `papel`) VALUES ('usuario', '123', 'usuario@usuario', 'usuario');


 CREATE DATABASE bazarty;

 USE bazarty;

 create table cliente(
        id_cliente int(11) unsigned not null auto_increment,
        nome varchar(60) not null,
        cpf varchar(11) not null,
        sexo varchar (60) not null,
        aniversario varchar(40) not null,
        email varchar(50) not null,
        senha varchar(60) not null,
        tipo varchar (5) not null,
        primary key(id_cliente)
   );

 create table produto(
     id_produto int(11) unsigned not null auto_increment,
     cod_categoria int(10) unsigned not null,
     nome varchar(60) not null,
     descr varchar(600),
     quant int(3) unsigned not null,
     preco double(10,2) unsigned not null,
     estoque_minimo int (11) not null,
     estoque_maximo int (11) not null,
     primary key(id_produto),
     foreign key (cod_categoria) references categoria (cod_categoria) on delete cascade on update cascade
     );


create table categoria(
     cod_categoria int(10) unsigned not null auto_increment,
     Nome varchar(30) not null,
     primary key(cod_categoria)
     );
