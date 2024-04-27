<?php
include 'cal.inc.php';

$num1 = $_POST['num1Inserted'];
$num2 = $_POST['num2Inserted'];
$num3 = $_POST['num3Inserted'];
$num4 = $_POST['num4Inserted'];
$cal = $_POST['calInserted'];

$calculator = new Calc($num1, $num2, $num3, $num4, $cal);
echo $calculator->calcMethod();
?>
<script>
    alert(<?php echo $calculator->getResult(); ?>);
    window.location.href = 'cal_form.php';
</script>
