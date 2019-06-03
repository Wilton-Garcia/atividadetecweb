create DATABASE receitasweb;
use receitasweb;
create table receitas(
	 codigoReceita int(9) PRIMARY KEY AUTO_INCREMENT,
     nome varchar(150) not null,
     url varchar(500),
     receita text,
     votor int(5) DEFAULT 0
);