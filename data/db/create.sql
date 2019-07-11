CREATE TABLE user (
	name VARCHAR(20) PRIMARY KEY,
	pass VARCHAR(20),
	admin BOOLEAN,
	image TEXT,
	birth DATE,
	localisation VARCHAR(50),
	description VARCHAR(100),
	nbComment INTEGER,
	lastConnect TIMESTAMP
);

CREATE TABLE topic (
	id INTEGER PRIMARY KEY,
	name VARCHAR(50),
	nameCreator VARCHAR(20),
	creationDate TIMESTAMP,
	closed BOOLEAN,
	FOREIGN KEY(nameCreator) REFERENCES user(name)
);

CREATE TABLE comment (
	id INTEGER PRIMARY KEY,
	topicId INTEGER,
	userName VARCHAR(20),
	message VARCHAR(300),
	lastEdit TIMESTAMP,
	deleted BOOLEAN,
	FOREIGN KEY(topicId) REFERENCES topic(id),
	FOREIGN KEY(userName) REFERENCES user(name)
);




	
