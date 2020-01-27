TYPE=TRIGGERS
triggers='CREATE DEFINER=`root`@`localhost` TRIGGER `civicrm_case_activity_after_insert` AFTER INSERT ON `civicrm_case_activity` FOR EACH ROW BEGIN  \nUPDATE civicrm_case SET modified_date = CURRENT_TIMESTAMP WHERE id = NEW.case_id;\n END'
sql_modes=524288
definers='root@localhost'
client_cs_names='utf8mb4'
connection_cl_names='utf8mb4_general_ci'
db_cl_names='utf8mb4_general_ci'
created=157961872076
