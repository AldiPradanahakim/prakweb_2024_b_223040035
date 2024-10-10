<?php


class About
{
    public function index($nama = 'Aldi', $pekerjaan = 'Frontend')
    {
        echo "Halo, nama saya $nama, saya adalah seorang $pekerjaan";
    }
    public function page()
    {
        echo 'About/page';
    }
}
