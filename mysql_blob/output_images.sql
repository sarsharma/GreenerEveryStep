--
-- Table structure for table `output_images`
--

CREATE TABLE `output_images` (
  `imageId` int(11) NOT NULL,
  `imageType` varchar(255) NOT NULL,
  `imageData` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `output_images`
--
ALTER TABLE `output_images`
  ADD PRIMARY KEY (`imageId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `output_images`
--
ALTER TABLE `output_images`
  MODIFY `imageId` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;