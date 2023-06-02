drop table if exists `users`;

create table `users` (
  `id` int(11) not null auto_increment PRIMARY KEY,
  `name` varchar(255) not null,
  `email` varchar(255) not null,
  `password` varchar(255) not null
);

INSERT INTO `users` (`name`, `email`, `password`) VALUES ('admin', 'admin@gmail.com', '123456');
INSERT INTO `users` (`name`, `email`, `password`) VALUES ('admin', 'admin@gmail.com', '123456');
INSERT INTO `users` (`name`, `email`, `password`) VALUES ('admin', 'admin@gmail.com', '123456');
INSERT INTO `users` (`name`, `email`, `password`) VALUES ('admin', 'admin@gmail.com', '123456');
INSERT INTO `users` (`name`, `email`, `password`) VALUES ('admin', 'admin@gmail.com', '123456');
INSERT INTO `users` (`name`, `email`, `password`) VALUES ('admin', 'admin@gmail.com', '123456');
INSERT INTO `users` (`name`, `email`, `password`) VALUES ('admin', 'admin@gmail.com', '123456');
INSERT INTO `users` (`name`, `email`, `password`) VALUES ('admin', 'admin@gmail.com', '123456');
