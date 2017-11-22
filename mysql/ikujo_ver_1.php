<?php
/**
 * Export to PHP Array plugin for PHPMyAdmin
 * @version 4.7.4
 */

/**
 * Database `ikujo_ver_1`
 */

/* `ikujo_ver_1`.`comments` */
$comments = array(
);

/* `ikujo_ver_1`.`courses` */
$courses = array(
);

/* `ikujo_ver_1`.`documents` */
$documents = array(
);

/* `ikujo_ver_1`.`files` */
$files = array(
);

/* `ikujo_ver_1`.`filetypes` */
$filetypes = array(
  array('id' => '1','name' => 'videos'),
  array('id' => '2','name' => 'documents')
);

/* `ikujo_ver_1`.`lessons` */
$lessons = array(
);

/* `ikujo_ver_1`.`masters` */
$masters = array(
  array('id' => '1','users_id' => '1','name' => 'Nguyễn Tấn Nam','phone' => '0935508980')
);

/* `ikujo_ver_1`.`members` */
$members = array(
  array('id' => '1','users_id' => '3','name' => 'Nam Nguyễn','address' => '105 Nguyễn Tri Phương','phone' => '0935508980')
);

/* `ikujo_ver_1`.`migrations` */
$migrations = array(
  array('id' => '18','migration' => '2017_11_18_183632_create_roles_table','batch' => '1'),
  array('id' => '19','migration' => '2017_11_18_185236_create_users_table','batch' => '1'),
  array('id' => '20','migration' => '2017_11_18_185249_create_masters_table','batch' => '1'),
  array('id' => '21','migration' => '2017_11_18_185319_create_students_table','batch' => '1'),
  array('id' => '22','migration' => '2017_11_18_185420_create_members_table','batch' => '1'),
  array('id' => '23','migration' => '2017_11_19_140203_create_courses_table','batch' => '1'),
  array('id' => '24','migration' => '2017_11_19_141810_create_lessons_table','batch' => '1'),
  array('id' => '25','migration' => '2017_11_20_074301_create_students_lists_table','batch' => '1'),
  array('id' => '26','migration' => '2017_11_20_080110_create_filetypes_table','batch' => '1'),
  array('id' => '27','migration' => '2017_11_20_080430_create_files_table','batch' => '1'),
  array('id' => '28','migration' => '2017_11_20_082419_create_videos_table','batch' => '2'),
  array('id' => '29','migration' => '2017_11_20_082836_create_documents_table','batch' => '3'),
  array('id' => '30','migration' => '2017_11_20_083114_create_votes_table','batch' => '4'),
  array('id' => '31','migration' => '2017_11_20_084050_create_comments_table','batch' => '5'),
  array('id' => '33','migration' => '2017_11_20_085150_create_student_documents_table','batch' => '6')
);

/* `ikujo_ver_1`.`roles` */
$roles = array(
  array('id' => '1','name' => 'masters'),
  array('id' => '2','name' => 'members'),
  array('id' => '3','name' => 'students')
);

/* `ikujo_ver_1`.`students` */
$students = array(
  array('id' => '1','users_id' => '5','name' => NULL,'date_of_birth' => NULL,'phone' => NULL)
);

/* `ikujo_ver_1`.`students_lists` */
$students_lists = array(
);

/* `ikujo_ver_1`.`student_documents` */
$student_documents = array(
);

/* `ikujo_ver_1`.`users` */
$users = array(
  array('id' => '1','email' => 'ntnam8980@gmail.com','username' => 'felixnguyen8980','password' => '202cb962ac59075b964b07152d234b70','roles_id' => '1'),
  array('id' => '3','email' => 'ntnam89@gmail.com','username' => 'felixnguyen89','password' => '202cb962ac59075b964b07152d234b70','roles_id' => '2'),
  array('id' => '5','email' => 'ntnam89999@gmail.com','username' => 'felixnguyen89999','password' => '202cb962ac59075b964b07152d234b70','roles_id' => '3')
);

/* `ikujo_ver_1`.`videos` */
$videos = array(
);

/* `ikujo_ver_1`.`votes` */
$votes = array(
);
