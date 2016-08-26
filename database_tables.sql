CREATE TABLE user (
    CustomerIDidNum int not null auto_increment primary key,
    firstName VARCHAR(256) not null,
    lastName VARCHAR(256) not null,
    email VARCHAR(256) not null,
    password VARCHAR(256) not null,
    access INTEGER(1)
);

CREATE TABLE userShipping (
    CustomerID int NOT NULL,
    firstName VARCHAR(256) not null,
    lastName VARCHAR(256) not null,
    email VARCHAR(256) not null primary key,
    address1 VARCHAR(256) not null,
    city VARCHAR(50) not null,
    state VARCHAR(2) not null,
    zip INTEGER(5) not null,
    sameAsBilling INTEGER(1)
);

CREATE TABLE userBilling (
    CustomerID int not null,
    firstName VARCHAR(256) not null,
    lastName VARCHAR(256) not null,
    email VARCHAR(256) not null primary key,
    address1 VARCHAR(256) not null,
    city VARCHAR(50) not null,
    state VARCHAR(2) not null,
    zip INTEGER(5) not null,
);

CREATE TABLE cabinetOrder (
    OrderNum int not null auto_increment primary key,
    CustomerID int not null,
    OrderDate TIMESTAMP(8),
    Guitar/Bass VARCHAR(1) not null,
    Spkr_Layout VARCHAR(8) not null, #Example 4x10, 4x10x15, 4x12, 2x12, etc.
    Tolex_Color VARCHAR(25) not null, #Red, Blue, Black
    Two-Tone VARCHAR(3), #yes/no
    Two_Tone_Color VARCHAR(25), 
    Piping VARCHAR(3), #yes/noadds
    Piping_Style VARCHAR(255),
    Piping_color VARCHAR(20),
    Grill_Cloth_Color VARCHAR(20) not null,
    Grill_Piping VARCHAR(3), #yes/no
    Grill_Piping_Color VARCHAR(20),
    Hardward_Color VARCHAR(6),
    Speaker_MFG VARCHAR(20)
);
    
    