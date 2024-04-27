<?php
include 'cal.inc.php';

$num1 = $_POST['num1Inserted'];
$cal = $_POST['calInserted'];

$calculator = new Calc($num1, $cal);
echo $calculator->calcMethod();
?>
<script>
    alert(<?php echo $calculator->getResult(); ?>);
    window.location.href = 'cal_form.php';
</script>
