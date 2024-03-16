<?php
class cmToft {
    private function cmtoft($cm) {
        return $cm * 0.0328084;
    }

    public function convert($cm) {
        return $this->cmtoft($cm);
    }
}
$conversion = new cmToft();
echo "CM TO FEET: ". $conversion->convert(100);

?>
