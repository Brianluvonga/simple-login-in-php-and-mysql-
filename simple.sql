
/* 
--------------- CREATES A SIMPLE TABLE WITHIN YOUR DATABASE 
*/
CREATE table if not exists 'simple'.'user'( 

    'id' INT NOT NULL AUTO_INCREMENT,
    'username' VARCHAR(255) NOT NULL,
    'pass' VARCHAR(30) NOT NULL, 

    PRIMARY KEY('id'))

    Engine = InnoDB;
