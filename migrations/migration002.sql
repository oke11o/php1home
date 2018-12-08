CREATE TABLE pictures
(
  id      INT(11) NOT NULL AUTO_INCREMENT,
  name    VARCHAR(255) NULL DEFAULT '',
  path    VARCHAR(255) NULL DEFAULT '',
  PRIMARY KEY (id)
);

INSERT INTO pictures (name, path)
VALUES
('BS Application','/img/gallery/BS_Application-768x576.png'),
('BS Dashboard','/img/gallery/BS_Dashboard-768x576.png');