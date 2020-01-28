TYPE=TRIGGERS
triggers='CREATE DEFINER=`root`@`localhost` TRIGGER `civicrm_activity_before_insert` BEFORE INSERT ON `civicrm_activity` FOR EACH ROW BEGIN  \nSET NEW.created_date = CURRENT_TIMESTAMP;\n END' 'CREATE DEFINER=`root`@`localhost` TRIGGER `civicrm_activity_before_update` BEFORE UPDATE ON `civicrm_activity` FOR EACH ROW BEGIN  \nUPDATE civicrm_case SET modified_date = CURRENT_TIMESTAMP WHERE id IN (SELECT ca.case_id FROM civicrm_case_activity ca WHERE ca.activity_id = OLD.id);\n END' 'CREATE DEFINER=`root`@`localhost` TRIGGER `civicrm_activity_before_delete` BEFORE DELETE ON `civicrm_activity` FOR EACH ROW BEGIN  \nUPDATE civicrm_case SET modified_date = CURRENT_TIMESTAMP WHERE id IN (SELECT ca.case_id FROM civicrm_case_activity ca WHERE ca.activity_id = OLD.id);\n END'
sql_modes=524288 524288 524288
definers='root@localhost' 'root@localhost' 'root@localhost'
client_cs_names='utf8mb4' 'utf8mb4' 'utf8mb4'
connection_cl_names='utf8mb4_general_ci' 'utf8mb4_general_ci' 'utf8mb4_general_ci'
db_cl_names='utf8mb4_general_ci' 'utf8mb4_general_ci' 'utf8mb4_general_ci'
created=157961872048 157961872049 157961872048
