-- (A) REACTIONS TABLE
CREATE TABLE `reactions` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `reaction` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `reactions`
  ADD PRIMARY KEY (`id`,`user_id`),
  ADD KEY `reaction` (`reaction`);

-- (B) DUMMY DATA
INSERT INTO `reactions` (`id`, `user_id`, `reaction`) VALUES
(900, 1, -1),
(900, 2, 1),
(900, 3, 1),
(900, 4, -1);
