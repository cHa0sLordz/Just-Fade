<?php
class JustFadeRunonceJob extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->import('Database');
    }
    public function run() {
        Database\Updater::convertSingleField('tl_justPictures', 'singleSRC');
    }
}
$objJustFadeRunonceJob = new JustFadeRunonceJob();
$objJustFadeRunonceJob->run();
?>