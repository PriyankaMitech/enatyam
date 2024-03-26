23-03-2024
ALTER TABLE `free_demo_table` ADD `remark` VARCHAR(100) NULL DEFAULT NULL AFTER `End_Time`;
ALTER TABLE `free_demo_table` ADD `register_id` INT(10) NULL DEFAULT NULL AFTER `D_id`;
ALTER TABLE `free_demo_table` ADD `buffertime` VARCHAR(100) NULL DEFAULT NULL AFTER `End_Time`;

24-03-2024
ALTER TABLE `free_demo_table` ADD `status` VARCHAR(10) NOT NULL DEFAULT 'Y' AFTER `remark`, ADD `is_deleted` VARCHAR(10) NOT NULL DEFAULT 'N' AFTER `status`, ADD `created_on` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP AFTER `is_deleted`, ADD `updated_on` DATETIME on update CURRENT_TIMESTAMP NULL DEFAULT NULL AFTER `created_on`;