CREATE TABLE Ingredient(
Id int primary key auto_increment,
Name varchar(50),
Calories int,
Price decimal(18,2),
Published boolean ,
UserId int
);

ALTER TABLE Ingredient ADD FOREIGN KEY (UserId) references AppUser(Id);