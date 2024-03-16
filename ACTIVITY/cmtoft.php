<?php
class cmToft {
    private $cmft;
    public function convert($cm) {
        $this->cmft = $cm * 0.0328084;
        return $this->cmft;
    }
}
$conversion = new cmToft();
echo "CM TO FEET: ". $conversion->convert(59);
?>