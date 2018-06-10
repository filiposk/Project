CREATE TABLE Ingredient_Recipe(
IngredientId int not null,
RecipeId int not null,
Quantity decimal(18,2) not null
);

ALTER TABLE Ingredient_Recipe ADD FOREIGN KEY (IngredientId) references Ingredient(Id);
ALTER TABLE Ingredient_Recipe ADD FOREIGN KEY (RecipeId) references Recipe(Id);