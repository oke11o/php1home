ALTER TABLE pictures
  ADD COLUMN `gallery` VARCHAR(255) DEFAULT "" AFTER `path`;

ALTER TABLE `pictures` ADD `show_count` INT(11) NOT NULL DEFAULT '0' AFTER `gallery`;

INSERT INTO pictures (name, path, gallery)
VALUES
('BS Marketing','/img/gallery/BS_Marketing-768x576.png', 'Страница галерея');

UPDATE pictures SET gallery="Домашняя страница" WHERE name="BS Application" OR name="BS Dashboard";