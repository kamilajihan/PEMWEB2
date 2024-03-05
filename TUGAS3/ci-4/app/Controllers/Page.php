<?php

namespace App\Controllers;

class Page extends BaseController
{
    public function about()
    {
        echo "about page";
    }
    public function contact()
    {
        echo "contact page";
    }
    public function faqs()
    {
        echo "faqs page";
    }
    public function tos()
    {
        echo "Halaman Term of Service";
    }
    public function biodata()
    {
        echo "NAMA: KAMILA JIHAN</br>";
        echo "KELAS: 4A</br>";
        echo "NIM: 4122036</br>";
        echo "HOBI: MENDENGARKAN LAGU DAN MEMBACA WEBTOON</br>";
    }
}
