TYPE=TRIGGERS
triggers='CREATE DEFINER=`root`@`localhost` TRIGGER `civicrm_address_after_insert` AFTER INSERT ON `civicrm_address` FOR EACH ROW BEGIN  \nUPDATE civicrm_contact SET modified_date = CURRENT_TIMESTAMP WHERE id = NEW.contact_id;\n END' 'CREATE DEFINER=`root`@`localhost` TRIGGER `civicrm_address_after_update` AFTER UPDATE ON `civicrm_address` FOR EACH ROW BEGIN  \nUPDATE civicrm_contact SET modified_date = CURRENT_TIMESTAMP WHERE id = NEW.contact_id;\n END' 'CREATE DEFINER=`root`@`localhost` TRIGGER `civicrm_address_after_delete` AFTER DELETE ON `civicrm_address` FOR EACH ROW BEGIN  \nUPDATE civicrm_contact SET modified_date = CURRENT_TIMESTAMP WHERE id = OLD.contact_id;\n END'
sql_modes=524288 524288 524288
definers='root@localhost' 'root@localhost' 'root@localhost'
client_cs_names='utf8mb4' 'utf8mb4' 'utf8mb4'
connection_cl_names='utf8mb4_general_ci' 'utf8mb4_general_ci' 'utf8mb4_general_ci'
db_cl_names='utf8mb4_general_ci' 'utf8mb4_general_ci' 'utf8mb4_general_ci'
created=157961872055 157961872056 157961872055
