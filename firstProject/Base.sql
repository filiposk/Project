DROP DATABASE IF EXISTS Base1;
CREATE DATABASE  Base1 character set utf8;
USE Base1;

CREATE TABLE Ingredient(
  Id int primary key auto_increment,
  Name varchar(50),
  Calories int,
  Price decimal(18,2),
  Published boolean ,
  UserId int
);



CREATE TABLE Ingredient_Recipe(
  IngredientId int not null,
  RecipeId int not null,
  Quantity decimal(18,2) not null
);


CREATE TABLE Recipe(
  Id int primary key not null auto_increment,
  Name varchar(50) not null,
  Description varchar(50),
  Picture varchar(255),
  UserId int
);



CREATE TABLE AppUser(
  Id int primary key not null auto_increment,
  UserName varchar(25) not null,
  NickName varchar(20) not null,
  Password varchar(20) not null
);

ALTER TABLE Ingredient ADD FOREIGN KEY (UserId) references AppUser(Id);

ALTER TABLE Recipe ADD FOREIGN KEY (UserId) references AppUser(Id);

ALTER TABLE Ingredient_Recipe ADD FOREIGN KEY (IngredientId) references Ingredient(Id);
ALTER TABLE Ingredient_Recipe ADD FOREIGN KEY (RecipeId) references Recipe(Id);




