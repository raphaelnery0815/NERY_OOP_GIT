<?php
include 'cal.inc.php';

$num1 = $_POST['num1Inserted'];
$num2 = $_POST['num2Inserted'];
$cal = $_POST['calInserted'];

$calculator = new Calc($num1, $num2, $cal);
echo $calculator->calcMethod();
?>
<script>
    alert(<?php echo $calculator->getResult(); ?>);
    window.location.href = 'cal_form.php';
</script>
