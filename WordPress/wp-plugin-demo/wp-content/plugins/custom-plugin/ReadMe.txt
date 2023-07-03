Step1. Create 'custom-plugin.php' file.
Step2. Add Required description of plugin in comment.
Step3. Define Plugin Directory and Path
Step4. Add Custom Menu using 'admin_menu' hook.
Step5. Define Callback function.
Step6. Custom Menu will appear at left... Click on that.
Step7. It will render on the path defined in Step5.
Step8. Create HTML form in form/form.php
Step9. Create a function named as "save_form_data()" in "custom-plugin.php".
Step10. Declare Global variable $wpdb.
Step11. Isset condition for submit button.
Step12. Varible for Table Name.
Step13. Varible for Each Table field data.
Step14. Array varible {key(db_column_name) => value(data_variable)}.
Step15. $wpdb->insert(TableName, ArrayVariable);
Step16. add_action('init', 'save_form_data');
