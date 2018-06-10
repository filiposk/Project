CREATE TABLE AppUser_Recipe(
UserId int not null,
RecipeId int not null
);

ALTER TABLE AppUser_Recipe ADD FOREIGN KEY (UserId) references AppUser(Id);
ALTER TABLE AppUser_Recipe ADD FOREIGN KEY (RecipeId) references Recipe(Id);