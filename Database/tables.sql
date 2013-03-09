


create table Startup_Users (
	id int NOT NULL AUTO_INCREMENT,
	email varchar(200),
	name varchar(200),
	pass varchar(200),
	primary key(id),
	unique(email)
);


create table Starup_Egenskaper
(
	id int NOT NULL AUTO_INCREMENT,
	egenskap varchar(200),
	primary key(id)
);


create table Startup_UsersEgenskaper(
	id int NOT NULL AUTO_INCREMENT,
	userid int not null,
	egenskapOne int,
	egenskapTwo int,
	egenskapThree int,
	egenskapFour int,
	egenskapFive int,
	egenskapSix int,
	egenskapSeven int,
	
	FOREIGN KEY (userid) REFERENCES Startup_Users(id),
	primary key(id)
);


insert into startup_users (email, pass, name) values('j.skotterud@gmail.com','knut','Jan Ole')

insert into Starup_Egenskaper(egenskap) values('Kreativitet');
insert into Starup_Egenskaper(egenskap) values('Humoristisk sans');
insert into Starup_Egenskaper(egenskap) values('V�re ekte');
insert into Starup_Egenskaper(egenskap) values('Nysgjerrighet');
insert into Starup_Egenskaper(egenskap) values('Like � l�re');
insert into Starup_Egenskaper(egenskap) values('Modig');
insert into Starup_Egenskaper(egenskap) values('H�p');
insert into Starup_Egenskaper(egenskap) values('Kj�rlighet');
insert into Starup_Egenskaper(egenskap) values('Entusiasme');
insert into Starup_Egenskaper(egenskap) values('Utholdenhet');
insert into Starup_Egenskaper(egenskap) values('V�re snill');
insert into Starup_Egenskaper(egenskap) values('Rettferdighet');
insert into Starup_Egenskaper(egenskap) values('Jordn�rhet');
insert into Starup_Egenskaper(egenskap) values('Viljestyrke');
insert into Starup_Egenskaper(egenskap) values('Sosial intelligens');
insert into Starup_Egenskaper(egenskap) values('Estetisk sans');
insert into Starup_Egenskaper(egenskap) values('Takknemlighet');
insert into Starup_Egenskaper(egenskap) values('Tilgivelse'); 

