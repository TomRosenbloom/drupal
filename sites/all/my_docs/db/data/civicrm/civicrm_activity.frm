�
 V  �-  �
         	      �        �  :�          �4��<^��@��g5�c#    5      �    A     �	  �      �    A     � �� A     �� � A     �� � A     �� � A     �
 � A     � � A     �� � A     �� � A     �  � A     �
 � �PRIMARY�UI_source_record_id�UI_activity_type_id�index_activity_date_time�index_status_id�index_medium_id�index_is_current_revision�index_is_deleted�FK_civicrm_activity_phone_id�FK_civicrm_activity_parent_id�FK_civicrm_activity_relationship_id�FK_civicrm_activity_original_id�FK_civicrm_activity_campaign_id�                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              �W��                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          �                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          InnoDB      f
f
                                                                                                                                                                                                                                                                 �
  
5        P   F     
          
 	  �   �    
       N    �   �   �6      ��   V    
  �   x    �  �   �/    
  �   X    �   �   �J     � �   ��0    
 � �   T    
 � �   O    
 � �   R     � �        
 � �   [     � �        
 � �        � �        
   �   =    �  �   �P     
 �        
 
 �   8    
 
 �   o     
 �         
 �        
 ��   "     
 ��  U �id�source_record_id�activity_type_id�subject�activity_date_time�duration�location�phone_id�phone_number�details�status_id�priority_id�parent_id�is_test�medium_id�is_auto�relationship_id�is_current_revision�original_id�result�is_deleted�campaign_id�engagement_level�weight�is_star�created_date�modified_date� Unique  Other Activity IDArtificial FK to original transaction (e.g. contribution) IF it is not an Activity. Table can be figured out through activity_type_id, and further through component registry.FK to civicrm_option_value.id, that has to be valid, registered activity type.The subject/purpose/short description of the activity.Date and time this activity is scheduled to occur. Formerly named scheduled_date_time.Planned or actual duration of activity expressed in minutes. Conglomerate of former duration_hours and duration_minutes.Location of the activity (optional, open text).Phone ID of the number called (optional - used if an existing phone number is selected).Phone number in case the number does not exist in the civicrm_phone table.Details about the activity (agenda, notes, etc).ID of the status this activity is currently in. Foreign key to civicrm_option_value.ID of the priority given to this activity. Foreign key to civicrm_option_value.Parent meeting ID (if this is a follow-up item). This is not currently implementedActivity Medium, Implicit FK to civicrm_option_value where option_group = encounter_medium.FK to Relationship IDActivity ID of the first activity record in versioning chain.Currently being used to store result id for survey activity, FK to option value.The campaign for which this activity has been triggered.Assign a specific level of engagement to this activity. Used for tracking constituents in ladder of engagement.Activity marked as favorite.When was the activity was created.When was the activity (or closely related entity) was created or modified or deleted.