create DATABASE receitasweb;
use receitasweb;
create table receitas(
	 codigo int(9) PRIMARY KEY AUTO_INCREMENT,
     titulo varchar(150) not null,
     urlimg varchar(500),
     receita text,
     votos int(5) DEFAULT 0
);