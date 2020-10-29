CREATE TABLE Users (
    UserID INT AUTO_INCREMENT,
    FirstName VARCHAR(64) NOT NULL,
    LastName VARCHAR(64) NOT NULL,
    Email VARCHAR(256) NOT NULL UNIQUE,
    Password VARCHAR(256) NOT NULL,
    Registration TIMESTAMP,
    PRIMARY KEY (UserID)
);

CREATE TABLE HoursFlown (
    UserID INT,
    Hours FLOAT,
    FOREIGN KEY (UserID) REFERENCES Users(UserID)
);

CREATE TABLE Reviews (
    UserID INT,
    ReviewID INT,
    Headline VARCHAR(64),
    Review VARCHAR(2048),
    ReviewDate TIMESTAMP,
    PRIMARY KEY (ReviewID),
    FOREIGN KEY (UserID) REFERENCES Users(UserID)
);

CREATE TABLE Reviews (
    ReviewID INT AUTO_INCREMENT,
    Headline VARCHAR(64) NOT NULL,
    Review VARCHAR(2048) NOT NULL,
    ReviewDate TIMESTAMP,
    PRIMARY KEY (ReviewID)
);