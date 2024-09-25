<?php
use Dompdf\Dompdf;
use Dompdf\Options;

class Dompdf_gen {

    public function __construct()
    {
        require_once APPPATH . 'vendor/autoload.php'; 

        $options = new Options();
        $options->set('isRemoteEnabled', true);
        
        $dompdf = new Dompdf($options);
        $CI =& get_instance();
        $CI->dompdf = $dompdf;
    }
}
