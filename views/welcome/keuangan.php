<?php

use kartik\icons\Icon;
use yii\bootstrap\Html;

/* @var $this yii\web\View */

$this->title = 'Selamat Datang';
Icon::map($this);
?>
<div class="site-index">
    <div class="jumbotron">
        <h2>Selamat datang</h2>
        <p>Pilihlah menu-menu dibawah untuk melihat aktivitas mahasiswa.</p>
    </div>

    <div class="body-content">
     <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-2"></div>
            <div class="col-md-2">
                <a href="http://localhost:8080/index.php?r=mahasiswa%2Findex" title="kehadiran Mahasiswa " data-toggle="tooltip" data-original-title="kehadiran Mahasiswa Baru">
                    <div class="thumbnail" style="text-align:center; padding-top:10px;">
                        <i class="fa fa-file-signature fa-4x"></i>
                        <div class="caption" style="padding:8px 0 0;">
                            <h4 style="font-size:16px;">Daftar kehadiran</h4>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>