<style>
@import url("https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css");
.container {
  width: 100%;
}
.panel-title > a:before {
    float: right !important;
    font-family: FontAwesome;
    content:"\f068";
    padding-right: 5px;
    
}
.panel-title > a.collapsed:before {
    float: right !important;
    content:"\f067";
    
}
.panel-title > a:hover 
.panel-title > a:active, 
.panel-title > a:focus  {
    text-decoration:none;
}


// Button close
[class^="item"]{
  text-decoration: none;
  margin-right: 20px;
  background: transparent;
  box-shadow: none;
  border: 1px solid;
  box-sizing: border-box;
  cursor: pointer;
  &:last-child {
    margin-right: 0;
  }
}

.item-4 {
  width: 30px;
  height: 30px;
  position: relative;
  border-radius: 50%;
  background-color: #f23051;
  transition: 0.3s ease-out;
  
  &:before,
  &:after {
    content: "";
    position: absolute;
    width: 60%;
    height: 2px;
    background-color: white;
    left: 50%;
    top: 50%;
  }
  &:after {
    transform: translate(-50%, -50%) rotate(45deg);
    
  }
  &:before {
    transform: translate(-50%, -50%) rotate(-45deg);
  }
  &:hover,
  &:focus {
    transform: scale(1.15);
    opacity: 1;
    
  }
}


</style>
<aside class="control-sidebar control-sidebar-light">
 <!-- Collapse -->
<div class="container">
<p style="text-align:center;margin-top:20px">Versi <?= config_item('nama_aplikasi') ?> yang digunakan saat ini : <b><a href="https://github.com/OpenSID/OpenSID/releases/">{{ AmbilVersi() }} </a></b></p>
<div class="row">
<div class="col-md-12">
<div align="center" style="margin:0px"><button class="btn btn-primary btn-lg btn-block text-bold">Selayang Pandang <?= config_item('nama_aplikasi') ?></button></div>
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="heading1">
             <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="false" aria-controls="collapse1">
            Aplikasi <?= config_item('nama_aplikasi') ?>
        </a>
      </h4>

        </div>
        <div id="collapse1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading1">
            <div class="panel-body">
                        <p align="justify"><?= config_item('nama_aplikasi') ?> adalah aplikasi Sistem Informasi Desa
                            (SID) yang dikembangkan sejak Mei 2016. <?= config_item('nama_aplikasi') ?> dirancang dan
                            dikelola supaya terbuka dan dapat dikembangkan bersama-sama oleh komunitas peduli SID.
                            Informasi lebih lanjut dapat dilihat di <a href=https://github.com/OpenSID/opensid>https://github.com/OpenSID/OpenSID</a>.</p>
        </div>
                     <div align="right" style="margin:5px"><a data-toggle="collapse" data-parent="#accordion" href="#collapse1"><button type="button" class="btn btn-warning btn-floating btn-sm"> <i class="fa fa-angle-up"></i></button></a></div>
    </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="heading2">
             <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#panduan" href="#panduan" aria-expanded="false" aria-controls="panduan">
            Panduan OpenSID
        </a>
      </h4>

        </div>
        <div id="panduan" class="panel-collapse collapse" role="tabpanel" aria-labelledby="panduan">
            <div class="panel-body">
                       <dl>
                            <dt><i class="fa fa-heartbeat" style="font-size:16px;color:red"></i>&nbsp; Panduan <?= config_item('nama_aplikasi') ?> Online</dt>
                            <dd align="justify">Dokumentasi yang sifatnya dinamis sesuai dengan perubahan yang dikembangkan di <?= config_item('nama_aplikasi') ?>.
                            <a href="https://panduan.opendesa.id/opensid" target="_blank">Selengkapnya..</a></dd>
                            <br>
                            <dt><i class="fa fa-heartbeat" style="font-size:16px;color:red"></i>&nbsp; Panduan <?= config_item('nama_aplikasi') ?> Wiki</a></dt>
                            <dd align="justify"><?= config_item('nama_aplikasi') ?> adalah Sistem Informasi Desa (SID) yang sengaja dirancang supaya terbuka dan dapat dikembangkan bersama-sama oleh komunitas peduli SID. <?= config_item('nama_aplikasi') ?> awalnya dikembangkan menggunakan SID dari Combine Resource Institution (CRI). 
                            SID CRI terakhir yang telah digabung dengan OpenSID adalah SID 3.10 yang diperoleh dari teman-teman di <a href="https://www.facebook.com/groups/OpenSID">Group Facebook</a> pada tanggal 15 Pebruari 2017. 
                            <a href="https://github.com/opensid/opensid/wiki" target="_blank">Selengkapnya..</a></dd>
                            <br>
                            <dt><i class="fa fa-heartbeat" style="font-size:16px;color:red"></i>&nbsp; Tutorial Video</dt>
                            <dd align="justify">Video tutorial seputar <?= config_item('nama_aplikasi') ?> yang dibuat oleh OpenDesa & Komunitas <?= config_item('nama_aplikasi') ?> dengan tujuan hanya semata-mata untuk memajukan desa.
                            Semua sumber video ini dikelola oleh Lembaga Berbadan Hukum Perkumpulan Desa Digital Terbuka.
                            <a href="https://www.youtube.com/playlist?list=PLrjg2CGJwZnA8tf9T60hSqh7ypB0xB9OT" target="_blank">Selengkapnya..</a></dd>
                        </dl>
                </div>
                     <div align="right" style="margin:5px"><a data-toggle="collapse" data-parent="#accordion" href="#panduan"><button type="button" class="btn btn-warning btn-floating btn-sm"> <i class="fa fa-angle-up"></i></button></a></div>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="heading3">
             <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#catatan-rilis" aria-expanded="true" aria-controls="catatan-rilis">
            Catatan Rilis
         </a>
      </h4>

        </div>
        <div id="catatan-rilis" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="catatan-rilis">
            <div class="panel-body">
                        <div class="catatan-scroll" style="text-align:justify;padding-right:15px">
                            <?= parsedown('catatan_rilis.md') ?>
                        </div>
            </div>
                     <div align="right" style="margin:5px"><a data-toggle="collapse" data-parent="#accordion" href="#catatan-rilis"><button type="button" class="btn btn-warning btn-floating btn-sm"> <i class="fa fa-angle-up"></i></button></a></div>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="heading4">
             <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="false" aria-controls="collapse2">
          Apakah SID ?
        </a>
      </h4>

        </div>
        <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="collapse2">
            <div class="panel-body">
                        <p align="justify">Aplikasi Sistem Informasi Desa (SID) adalah sistem olah data dan informasi
                            berbasis komputer yang dapat dikelola oleh pemerintah dan komunitas desa dalam dua ranah:
                        </p>
                        <dl>
                            <dt>1. Offline</dt>
                            <dd align="justify">Aplikasi diinstall dalam komputer server di kantor desa dan dioperasikan
                                sebagai server (pusat data) yang bersifat lokal. Karena tidak terhubung ke internet, SID
                                offline hanya bisa diakses dalam jaringan lokal. Sistem offline ini direkomendasikan
                                untuk diterapkan dalam penggunaan aplikasi SID harian. Database dari hasil proses olah
                                data secara offline itu dapat diunggah ke sistem online secara berkala.</dd>
                            <dt>2. Online</dt>
                            <dd align="justify">SID akan optimal jika terhubung ke internet sebagai sistem online
                                berbasis web. SID online akan otomatis berfungsi juga sebagai website desa. Website desa
                                ini memiliki fungsi yang terbagi dalam dua bagian, yakni bagian depan yang bisa diakses
                                oleh publik dan bagian dalam yang hanya bisa diakses oleh administrator sistem.</dd>
                        </dl>
                    </div>
                      <div align="right" style="margin:5px"><a data-toggle="collapse" data-parent="#accordion" href="#collapse2"><button type="button" class="btn btn-warning btn-floating btn-sm"> <i class="fa fa-angle-up"></i></button></a></div>
            </div>
    </div>
    
        <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="heading5">
             <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="false" aria-controls="collapse3">
          Manajemen Akses SID
        </a>
      </h4>

        </div>
        <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="collapse2">
            <div class="panel-body">
                        <p align="justify">Aplikasi SID dirancang untuk mengelola data dasar desa dan informasi desa.
                            Data dasar yang dikelola meliputi data dasar kependudukan dan data dasar aset/sumber daya
                            desa. Data dasar ini menjadi tanggung jawab pemerintah desa dalam pengelolaannya. Hanya
                            pengguna (user) dari pemerintah desa dan tim yang dikoordinasikan oleh pemerintah desa saja
                            yang akan memiliki kewenangan dan hak akses ke dalam sistem. Sementara, user di luar
                            pemerintah desa hanya akan memiliki akses terbatas pada fungsi olah informasi untuk website
                            desa.</p>
                        <p align="justify"><b>Tingkat user (pengguna) dalam SID:</b></p>
                        <p align="justify">
                        <ol>
                            <li align="justify">
                                <b>Administrator</b> : adalah orang/tim yang bertanggung jawab penuh atas olah data dan
                                informasi dalam SID dan website desa. Orang/tim ini ditunjuk oleh pemerintah desa
                                disahkan dengan surat keputusan kepala desa.
                                <ol>
                                    <li align="justify">Peran olah data : entry, edit, delete data dasar</li>
                                    <li align="justify">Peran olah informasi : tulis, edit, publish artikel website</li>
                                </ol>
                            </li>
                            <li align="justify">
                                </b>Operator</b>: adalah orang/tim yang bertugas membantu administrator mengelola data dan
                                informasi, tetapi dengan kewenangan yang lebih terbatas.
                                <ol>
                                    <li align="justify">Peran olah data : entry, edit data dasar</li>
                                    <li align="justify">Peran olah informasi : tulis, edit artikel website.</li>
                                </ol>
                            </li>
                            <li align="justify">
                                <b>Redaksi</b>: adalah orang/tim yang bertugas sebagai redaksi media website desa dan hanya
                                dapat melakukan olah informasi berupa artikel website.
                                <ol>
                                    <li align="justify">Peran olah informasi : tulis, edit artikel. Redaksi boleh
                                        mengubah semua artikel, termasuk menjadikan berita utama, aktif/non-aktifkan,
                                        masukkan ke slider, dsbnya</li>
                                </ol>
                            </li>
                            <li align="justify">
                                <b>Kontributor</b>: adalah orang/tim yang bertugas menulis artikel untuk disetujui redaksi
                                untuk ditampilkan di website desa.
                                <ol>
                                    <li align="justify">Peran olah informasi : tulis, edit artikel yang dibuatnya
                                        sendiri. Kontributor tidak dapat menjadikan artikel manapun menjadi berita utama,
                                        aktif/non-aktifkan atau memasukkan ke slider.</li>
                                </ol>
                            </li>
                        </ol>
                        </p>
                    </div>
                     <div align="right" style="margin:5px"><a data-toggle="collapse" data-parent="#accordion" href="#collapse3"><button type="button" class="btn btn-warning btn-floating btn-sm"> <i class="fa fa-angle-up"></i></button></a></div>
        </div>
    </div>
    
        <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="heading6">
             <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="false" aria-controls="collapse4">
          Tahapan Membangun SID
        </a>
      </h4>

        </div>
        <div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="collapse4">
            <div class="panel-body">
                       <p align="justify">Bagaimana memulai membangun Sistem Informasi Desa (SID) di desa kita? Caranya
                            sangat mudah, tetapi pasti perlu proses yang harus sabar dan cermat untuk dijalani. Siapa
                            pun Anda, baik perorangan maupun mewakili organisasi/lembaga, dapat mencoba mulai membangun
                            SID di desa masing-masing mengikuti langkah-langkah berikut.</p>
                        <ol>
                            <li align="justify">Bentuk tim kerja bersama pemerintah desa</li>
                            <li align="justify">Diskusikan basis data apa saja yang diperlukan untuk warga</li>
                            <li align="justify">Himpun data kependudukan warga dari Kartu Keluarga (KK)</li>
                            <li align="justify">Dapatkan aplikasi SID di <a href=https://github.com/OpenSID/OpenSID/releases>https://github.com/OpenSID/OpenSID/releases</a>
                            </li>
                            <li align="justify">Pasang aplikasi SID di komputer desa</li>
                            <li align="justify">Masukkan data penduduk ke SID</li>
                            <li align="justify">Basis data kependudukan sudah bisa dimanfaatkan</li>
                            <li align="justify">Diskusikan rencana pengembangan SID sesuai kebutuhan desa</li>
                            <li align="justify">Sebarluaskan informasi desa melalui beragam media untuk warga</li>
                        </ol>
                    </div>
                      <div align="right" style="margin:5px"><a data-toggle="collapse" data-parent="#accordion" href="#collapse4"><button type="button" class="btn btn-warning btn-floating btn-sm"> <i class="fa fa-angle-up"></i></button></a></div>
        </div>
    </div>
    
        <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="heading7">
             <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse5" aria-expanded="false" aria-controls="collapse5">
          Hak Cipta, Syarat dan Ketentuan
        </a>
      </h4>

        </div>
        <div id="collapse5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="collapse5">
            <div class="panel-body">
                        <p align="justify">Aplikasi Sistem Informasi Desa (SID) dibangun dan dikembangkan pada awalnya
                            oleh COMBINE Resource Institution sejak tahun 2009. Sistem ini dikelola dengan merujuk pada
                            lisensi GNU General Public License Version 3.</p>
                        <p align="justify">Dengan lisensi GPL v3, semua ubahan <?= config_item('nama_aplikasi') ?> juga
                            berlisensi GPL v3, yaitu
                            bersifat sumber terbuka.
                        <p align="justify">
                        <p align="justify"><?= config_item('nama_aplikasi') ?> dikembangkan sejak Mei 2016, dan bebas
                            untuk dimanfaatkan dan
                            dikembangkan oleh semua desa.</p>
                        <p align="justify">Sejak Januari 2019, <?= config_item('nama_aplikasi') ?> dikelola oleh
                            Perkumpulan Desa Digital Terbuka
                            (OpenDesa). OpenDesa adalah pemegang hak cipta utama <?= config_item('nama_aplikasi') ?>.
                    </div>
                     <div align="right" style="margin:5px"><a data-toggle="collapse" data-parent="#accordion" href="#collapse5"><button type="button" class="btn btn-warning btn-floating btn-sm"> <i class="fa fa-angle-up"></i></button></a></div>
                </div>
       </div>
    
        <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="heading8">
             <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse6" aria-expanded="false" aria-controls="collapse6">
          Kontak dan Informasi
        </a>
      </h4>

        </div>
        <div id="collapse6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="collapse6">
            <div class="panel-body">
                        <ol>
                            <li align="justify">Website Resmi OpenDesa, pengelola <?= config_item('nama_aplikasi') ?>:
                            </li>
                            <a href="<?= config_item('website') ?>" target="_blank"><?= config_item('website') ?> </a>
                            <li align="justify">Website Resmi <?= config_item('nama_aplikasi') ?>: </li>
                            <a href="<?= config_item('website') ?>/opensid" target="_blank">Website Resmi
                                <?= config_item('nama_aplikasi') ?></a>
                            <li align="justify">Grup Facebook, tempat mendapatkan bantuan dan berbagi pengalaman: </li>
                            <a href="<?= config_item('fb_opendesa') ?>" target="_blank">Forum Pengguna dan
                                Pegiat <?= config_item('nama_aplikasi') ?></a>
                            <li align="justify">Tempat mengunduh rilis <?= config_item('nama_aplikasi') ?>:</li>
                            <a href="https://github.com/OpenSID/OpenSID/releases" target="_blank">https://github.com/OpenSID/OpenSID/releases</a>
                            <li align="justify">Panduan <?= config_item('nama_aplikasi') ?>:</li>
                            <a href="https://github.com/OpenSID/OpenSID/wiki" target="_blank">https://github.com/OpenSID/OpenSID/wiki</a>
                            <li align="justify">Channel Youtube <?= config_item('nama_aplikasi') ?>: </li>
                            <a href="https://www.youtube.com/channel/UCvZuSYtrWYuE8otM4SsdT0Q" target="_blank">Kumpulan tutorial video <?= config_item('nama_aplikasi') ?></a>
                            <li align="justify">Forum OpenDesa:</li>
                            <a href="<?= config_item('forum') ?> " target="_blank"><?= config_item('forum') ?> </a>
                            <li align="justify">Tempat mendaftarkan masalah dan usulan fitur:</li>
                            <a href="https://github.com/OpenSID/OpenSID/issues" target="_blank" sclass="text-green">https://github.com/OpenSID/OpenSID/issues</a>
                            <li align="justify">Forum diskusi teknis pengembangan <?= config_item('nama_aplikasi') ?>:
                            </li>
                            <a href="<?= config_item('tg_kontributor') ?>" target="_blank">Kontributor Teknis OpenDesa</a>
                        </ol>
                    </div>
                     <div align="right" style="margin:5px"><a data-toggle="collapse" data-parent="#accordion" href="#collapse6"><button type="button" class="btn btn-warning btn-floating btn-sm"> <i class="fa fa-angle-up"></i></button></a></div>
            </div>
    </div>
        <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="heading9">
             <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#anggota" aria-expanded="false" aria-controls="anggota">
          Pendaftaran Keanggotaan
        </a>
      </h4>

        </div>
        <div id="anggota" class="panel-collapse collapse" role="tabpanel" aria-labelledby="anggota">
            <div class="panel-body" style="text-align:justify">
                Keanggotaan Lembaga Desa Digital Terbuka (OpenDesa) telah resmi dibuka. Pengembangan keanggotaan bertujuan supaya kita bisa percepat perkembangan lembaga kita, termasuk membuka perwakilan di wilayah sehingga bisa menggalakkan penerapan <?= config_item('nama_aplikasi') ?>/OpenDK untuk membangun desa.
                Anggota OpenDesa mendukung kegiatan Perkumpulan Desa Digital Terbuka (OpenDesa) untuk memajukan desa dengan memanfaatkan teknologi terbuka (<i>open source</i>), yang bebas diperoleh dan dimanfaatkan oleh semua desa. 
                <a href="https://www.opendesa.id/daftar-anggota" target="_blank">Selengkapnya..</a>
                <p style="margin-top:10px"><a href="https://docs.google.com/forms/d/e/1FAIpQLSc9YU9poOSEVrrkkdGPd1fmt_OrKM2mlYsNIjYRCtd3yuZPQw/viewform" target="_blank"> <button class="btn btn-primary btn-sm text-sm"><i class="fa">&#xf2c3;</i> Link Pendaftaran Keanggotaan <?= config_item('nama_aplikasi') ?></button></a></p>
            </div>
                     <div align="right" style="margin:5px"><a data-toggle="collapse" data-parent="#accordion" href="#anggota"><button type="button" class="btn btn-warning btn-floating btn-sm"> <i class="fa fa-angle-up"></i></button></a></div>
            </div>
    </div>

        <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="heading10">
             <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#donasi" aria-expanded="false" aria-controls="donasi">
          Donasi Pengembangan <?= config_item('nama_aplikasi') ?>
        </a>
      </h4>

        </div>
        <div id="donasi" class="panel-collapse collapse" role="tabpanel" aria-labelledby="donasi">
            <div class="panel-body" style="text-align:justify">
                    <dt><i class="fa fa-heart-o" style="font-size:16px;color:red"></i>&nbsp; <?= strtoupper(config_item('nama_aplikasi')) ?> SELALU GRATIS</dt>
                            <?= config_item('nama_aplikasi') ?> selalu gratis dan bebas digunakan
                                dan dikembangkan desa. <?= config_item('nama_aplikasi') ?> berlisensi GNU General Public License Version 3, yaitu Open Source, di mana scriptnya
                                selalu bebas diperoleh dan disesuaikan desa.
                    </dt>
            </div>        

            <div class="panel-body" style="text-align:justify">
                   <dt><i class="fa fa-heart-o" style="font-size:16px;color:red"></i>&nbsp; <?= strtoupper(config_item('nama_aplikasi')) ?> DIKEMBANGKAN KOMUNITAS</dt>
                            <?= config_item('nama_aplikasi') ?> dikembangkan oleh komunitas relawan
                                yang peduli dan meluangkan
                                waktu dan keahlian mereka secara sukarela untuk terus mengembangkan
                                <?= config_item('nama_aplikasi') ?>.
                                Selain menyumbangkan waktu mereka, ada kalanya relawan
                                <?= config_item('nama_aplikasi') ?> juga
                                mengeluarkan dana pribadi untuk mendukung kegiatan <?= config_item('nama_aplikasi') ?>.
                    </dt>
            </div>        

            <div class="panel-body" style="text-align:justify">
                   <dt><i class="fa fa-heart-o" style="font-size:16px;color:red"></i>&nbsp; <?= strtoupper(config_item('nama_aplikasi')) ?> MEMERLUKAN BANTUAN</dt>
                            Untuk terus berkembang, <?= config_item('nama_aplikasi') ?> memerlukan
                                bantuan komunitas SID,
                                termasuk donasi. Semua donasi bersifat sukarela dan sama sekali tidak ada keharusan.
                            Donasi anda akan memungkinkan <?= config_item('nama_aplikasi') ?>
                                dikembangkan terus secara
                                berkesinambungan, supaya bisa terus disempurnakan dan bisa dimanfaatkan oleh sebanyak
                                mungkin desa di seluruh Nusantara. </p>
                            Cara mengirimkan donasi dan informasi lebih lanjut ada di:
                            <p><a href="https://www.opendesa.id/donasi" class="btn btn-social btn-primary btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block" title="Donasi Pengembangan <?= config_item('nama_aplikasi') ?>"><i class="fa fa-heart"></i> Donasi Pengembangan
                                <?= config_item('nama_aplikasi') ?></a></p>
                    </dt>
            </div>        
                     <div align="right" style="margin:5px"><a data-toggle="collapse" data-parent="#accordion" href="#donasi"><button type="button" class="btn btn-warning btn-floating btn-sm"> <i class="fa fa-angle-up"></i></button></a></div>
            </div>
        </div>
</div>
<div align="center" >
  <a href="#" data-toggle="control-sidebar" data-controlsidebar-slide="false" title="Tutup"> <button class="btn btn-sm btn-primary item-4"></button></a><br>
        <span>Tutup</span>

</div>
</div>
 <!-- batas accordion -->
</aside>
