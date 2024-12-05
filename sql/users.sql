--
-- Database: `tools4ever`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(200) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `city` varchar(200) DEFAULT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT 1,
  `role` ENUM('administrator', 'employee', 'customer') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO `users` (`id`, `email`, `password`, `firstname`, `lastname`, `address`, `city`, `is_active`, `role`) VALUES
(1, 'admin@admin.com', 'password', 'Admin', NULL, NULL, NULL, 1, 'administrator'),
(2, 'adriaan@adriaan.com', 'password', 'Adriaan', 'Adriaan', 'acrobaatstraat 5', 'Hilversum', 1, 'employee'),
(3, 'bassie@bassie.com', 'password', 'Bassie', 'Bassie', 'clownstraat 1', 'Hilversum', 1, 'employee');

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;
