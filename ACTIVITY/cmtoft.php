<?php 

class cmToft {
public function cmtoft($cm) {
    return $cm * 0.0328084;
}
}

$conversion = new cmToft();
echo "CM TO FEET: ". $conversion->cmtoft(100);

?>