<<<<<<< HEAD
DROP DATABASE IF EXISTS Base1;
CREATE DATABASE  Base1;
=======
<<<<<<< HEAD
DROP DATABASE IF EXISTS Base1;
CREATE DATABASE  Base1;
=======
DROP DATABASE IF EXISTS Base1.sql;
CREATE DATABASE Base1.sql;
>>>>>>> fa6bff5501e2dbb4dc2e68653a2edb79e219f1d8
>>>>>>> 9acffc9cbecbc8ae911f5af6028d9c8523cabaf9
USE Base1;

CREATE TABLE Ingredient(
  Id int primary key auto_increment,
  Name varchar(50),
  Calories int,
  Price decimal(18,2),
  Published boolean ,
  UserId int
);



<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 9acffc9cbecbc8ae911f5af6028d9c8523cabaf9
CREATE TABLE Ingredient_Recipe(
  IngredientId int not null,
  RecipeId int not null,
  Quantity decimal(18,2) not null
);


<<<<<<< HEAD
=======
=======
CREATE TABLE Ingredient(
  Id int primary key auto_increment,
  Name varchar(50),
  Calories int,
  Price decimal(18,2),
  Published boolean ,
  UserId int
);



>>>>>>> fa6bff5501e2dbb4dc2e68653a2edb79e219f1d8
>>>>>>> 9acffc9cbecbc8ae911f5af6028d9c8523cabaf9
CREATE TABLE Recipe(
  Id int primary key not null auto_increment,
  Name varchar(50) not null,
  Description varchar(50),
  Picture varchar(255),
  UserId int not null
);



CREATE TABLE AppUser(
  Id int primary key not null auto_increment,
  UserName varchar(25) not null,
  NickName varchar(20) not null,
  Password varchar(20) not null
);

CREATE TABLE AppUser_Recipe(
  UserId int not null,
  RecipeId int not null
);

ALTER TABLE Ingredient ADD FOREIGN KEY (UserId) references AppUser(Id);

<<<<<<< HEAD
ALTER TABLE Ingredient_Recipe ADD FOREIGN KEY (IngredientId) references Ingredient(Id);
ALTER TABLE Ingredient_Recipe ADD FOREIGN KEY (RecipeId) references Recipe(Id);

=======
<<<<<<< HEAD
ALTER TABLE Ingredient_Recipe ADD FOREIGN KEY (IngredientId) references Ingredient(Id);
ALTER TABLE Ingredient_Recipe ADD FOREIGN KEY (RecipeId) references Recipe(Id);

=======
ALTER TABLE Ingredient ADD FOREIGN KEY (UserId) references AppUser(Id);
>>>>>>> fa6bff5501e2dbb4dc2e68653a2edb79e219f1d8
>>>>>>> 9acffc9cbecbc8ae911f5af6028d9c8523cabaf9

ALTER TABLE Recipe ADD FOREIGN KEY (UserId) references AppUser(Id);

ALTER TABLE AppUser_Recipe ADD FOREIGN KEY (UserId) references AppUser(Id);
ALTER TABLE AppUser_Recipe ADD FOREIGN KEY (RecipeId) references Recipe(Id);