create database todo;

use todo;

create table tarefas
(
	id int auto_increment
		primary key,
	descricao text not null,
	data date not null,
	status bool not null
);

