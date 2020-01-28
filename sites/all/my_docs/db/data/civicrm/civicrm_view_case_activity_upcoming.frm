TYPE=VIEW
query=select `ca`.`case_id` AS `case_id`,`a`.`id` AS `id`,`a`.`activity_date_time` AS `activity_date_time`,`a`.`status_id` AS `status_id`,`a`.`activity_type_id` AS `activity_type_id` from (`civicrm`.`civicrm_case_activity` `ca` join `civicrm`.`civicrm_activity` `a` on(`ca`.`activity_id` = `a`.`id`)) where `a`.`id` = (select `b`.`id` from (`civicrm`.`civicrm_case_activity` `bca` join `civicrm`.`civicrm_activity` `b` on(`bca`.`activity_id` = `b`.`id`)) where `b`.`activity_date_time` <= current_timestamp() + interval 14 day and `b`.`is_current_revision` = 1 and `b`.`is_deleted` = 0 and `b`.`status_id` = 1 and `bca`.`case_id` = `ca`.`case_id` order by `b`.`activity_date_time` limit 1)
md5=5ca35a73cf1e31e4b76b86fab0246acf
updatable=1
algorithm=0
definer_user=admin
definer_host=localhost
suid=1
with_check_option=0
timestamp=2020-01-21 14:58:46
create-version=2
source=select `ca`.`case_id` AS `case_id`,`a`.`id` AS `id`,`a`.`activity_date_time` AS `activity_date_time`,`a`.`status_id` AS `status_id`,`a`.`activity_type_id` AS `activity_type_id` from (`civicrm_case_activity` `ca` join `civicrm_activity` `a` on((`ca`.`activity_id` = `a`.`id`))) where (`a`.`id` = (select `b`.`id` from (`civicrm_case_activity` `bca` join `civicrm_activity` `b` on((`bca`.`activity_id` = `b`.`id`))) where ((`b`.`activity_date_time` <= (now() + interval 14 day)) and (`b`.`is_current_revision` = 1) and (`b`.`is_deleted` = 0) and (`b`.`status_id` = 1) and (`bca`.`case_id` = `ca`.`case_id`)) order by `b`.`activity_date_time` limit 1))
client_cs_name=utf8mb4
connection_cl_name=utf8mb4_general_ci
view_body_utf8=select `ca`.`case_id` AS `case_id`,`a`.`id` AS `id`,`a`.`activity_date_time` AS `activity_date_time`,`a`.`status_id` AS `status_id`,`a`.`activity_type_id` AS `activity_type_id` from (`civicrm`.`civicrm_case_activity` `ca` join `civicrm`.`civicrm_activity` `a` on(`ca`.`activity_id` = `a`.`id`)) where `a`.`id` = (select `b`.`id` from (`civicrm`.`civicrm_case_activity` `bca` join `civicrm`.`civicrm_activity` `b` on(`bca`.`activity_id` = `b`.`id`)) where `b`.`activity_date_time` <= current_timestamp() + interval 14 day and `b`.`is_current_revision` = 1 and `b`.`is_deleted` = 0 and `b`.`status_id` = 1 and `bca`.`case_id` = `ca`.`case_id` order by `b`.`activity_date_time` limit 1)
mariadb-version=100410
