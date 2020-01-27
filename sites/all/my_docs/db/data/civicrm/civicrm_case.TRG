TYPE=TRIGGERS
triggers='CREATE DEFINER=`root`@`localhost` TRIGGER `civicrm_case_before_insert` BEFORE INSERT ON `civicrm_case` FOR EACH ROW BEGIN  \nSET NEW.created_date = CURRENT_TIMESTAMP;\n END'
sql_modes=524288
definers='root@localhost'
client_cs_names='utf8mb4'
connection_cl_names='utf8mb4_general_ci'
db_cl_names='utf8mb4_general_ci'
created=157961872074
