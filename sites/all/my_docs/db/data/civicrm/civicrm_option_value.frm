�
 V  |+  �,         .	      �        �  :�          �>��<^��@��g5�$    �       �    ) �   �  @��  @ i �   �  ���  @      �  @ A     �# � A     �' � �PRIMARY�index_option_group_id_value�index_option_group_id_name�FK_civicrm_option_value_option_group_id�FK_civicrm_option_value_component_id�FK_civicrm_option_value_domain_id�                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         �                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            InnoDB      dd                                                                                                                                                                                                                                                                 R  ,�         P   l     
      	    
   @   #        @   �K       @   ��    �  �   ��    �  �   ��    
  �   a      �   )    
  @         �   ��       �   ~     ! �   #     " �       
 # �   3    
 ' �   %    
 + �        �/  �   �    �.  �   � �id�option_group_id�label�value�name�grouping�filter�is_default�weight�description�is_optgroup�is_reserved�is_active�component_id�domain_id�visibility_id�icon�color� Option IDGroup which this option belongs to.Option string as displayed to users - e.g. the label in an HTML OPTION tag.The actual value stored (as a foreign key) in the data record. Functions which need lookup option_value.title should use civicrm_option_value.option_group_id plus civicrm_option_value.value as the key.Stores a fixed (non-translated) name for this option value. Lookup functions should use the name as the key for the option value row.Use to sort and/or set display properties for sub-set(s) of options within an option group. EXAMPLE: Use for college_interest field, to differentiate partners from non-partners.Bitwise logic can be used to create subsets of options within an option_group for different uses.Is this the default option for the group?Controls display sort order.Optional description.Is this row simply a display header? Expected usage is to render these as OPTGROUP tags within a SELECT field list of options?Is this a predefined system object?Is this option active?Component that this option value belongs/caters to.Which Domain is this option value forcrm-i icon classHex color value e.g. #ffffff