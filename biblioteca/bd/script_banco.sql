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


 create table cliente(
        `id_cliente` integer unsigned not null auto_increment,
        nome varchar(100) not null,
        apelido varchar(50) not null,
        encereco varchar(70) not null,
        cpf varchar(20) not null,
        cidade varchar(35) not null,
        estado varchar(25) not null,
        aniversario varchar(40) not null,
        email varchar(50) not null,
        senha varchar(60) not null,
        primary key(id_cliente)
   );

