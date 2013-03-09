


create table Startup_Users (
	id int,
	email varchar(200),
	name varchar(200),
	primary key(id)
);


create table Starup_Egenskaper
(
	id int,
	egenskap varchar(200),
	primary key(id)
);


create table Startup_UsersEgenskaper(
	id int,
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
