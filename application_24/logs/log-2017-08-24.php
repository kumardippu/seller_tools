<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2017-08-24 03:14:17 --> Query error: Unknown column 'item_id' in 'field list' - Invalid query: SELECT `order_no`, `order_id`, `item_id`, `delivery_type`, `shipping_provider`
FROM `tbl_rts_data`
WHERE `order_no` = '327299175'
ERROR - 2017-08-24 03:15:02 --> Severity: error --> Exception: Call to undefined method CI_DB_mysqli_result::result_assoc() C:\xampp\htdocs\seller_tools\application\models\Order_model.php 21
ERROR - 2017-08-24 03:15:03 --> Severity: error --> Exception: Call to undefined method CI_DB_mysqli_result::result_assoc() C:\xampp\htdocs\seller_tools\application\models\Order_model.php 21
ERROR - 2017-08-24 03:22:39 --> Severity: error --> Exception: Call to undefined method CI_DB_mysqli_driver::in_where() C:\xampp\htdocs\seller_tools\application\models\Order_model.php 20
ERROR - 2017-08-24 03:35:11 --> Query error: Unknown column 'item_id' in 'field list' - Invalid query: SELECT `order_no`, `order_id`, `item_id`, `delivery_type`, `shipping_provider`
FROM `tbl_rts_data`
WHERE `order_no` IN('327299175', '352464375', '353726375', '368278195', '375824375', '398514375')
ERROR - 2017-08-24 11:40:05 --> 404 Page Not Found: Manifest-all/index
ERROR - 2017-08-24 11:40:34 --> 404 Page Not Found: Manifest-all/index
ERROR - 2017-08-24 11:44:50 --> Severity: Compile Error --> Cannot redeclare Order::manifest() C:\xampp\htdocs\seller_tools\application\controllers\Order.php 305
ERROR - 2017-08-24 03:55:03 --> Severity: Notice --> Undefined variable: order_ar C:\xampp\htdocs\seller_tools\application\controllers\Order.php 252
