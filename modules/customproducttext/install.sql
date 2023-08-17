CREATE TABLE IF NOT EXISTS `{your_db_prefix}custom_product_text` (
    `id_product` INT(11) NOT NULL,
    `text` TEXT,
    PRIMARY KEY (`id_product`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
