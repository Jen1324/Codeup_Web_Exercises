CREATE TABLE albums (
	id INT NOT NULL AUTO_INCREMENT,
	name VARCHAR(25) NOT NULL,
	year YEAR NOT NULL,
	artist VARCHAR(50) NOT NULL,
	PRIMARY KEY (id)
);

INSERT INTO albums (name, year, artist)
VALUES ('Thriller', '1982', 'Michael Jackson'), 
('The Dark Side of the Moon', '1973', 'Pink Floyd'),
('Their Greatest Hits', '1976', 'Eagles'),
('Back in Black', '1980', 'AC/DC'),
('Saturday Night Fever', '1977', 'Bee Gees'),
('Rumours', '1977', 'Fleetwood Mac'),
('The Bodyguard', '1992', 'Whitney Houston'),
('Come on Over', '1992', 'Shania Twain'),
('Led Zeppelin IV', '1971', 'Led Zeppelin'),
('Bat Out of Hell', '1977', 'Meat Loaf'
); 