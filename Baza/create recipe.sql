CREATE TABLE Recipe(
Id int primary key not null auto_increment,
Name varchar(50) not null,
Description varchar(50),
Picture varchar(255),
UserId int not null
);

ALTER TABLE Recipe ADD FOREIGN KEY (UserId) references AppUser(Id);