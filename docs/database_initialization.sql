create table portfolio_item 
(
    id int NOT NULL AUTO_INCREMENT PRIMARY KEY, 
    title varchar(64) NOT NULL, 
    description varchar(255) NOT NULL, 
    repo_link varchar(255) NOT NULL, 
    src varchar(255) NOT NULL, 
    demo bit NOT NULL DEFAULT 1
);


INSERT INTO portfolio_item (
    title, 
    description, 
    repo_link, 
    src, 
    demo
) VALUES (
    "Face Off Statistics",
    "Website to view the game-to-game statistics break down for Florida State Men's Club Lacrosse faceoff players.",
    "https://github.com/wcouture/FO-Stats-PHP",
    "https://github.com/wcouture/FO-Stats-PHP",
    1
);