<header class="main-header">
    <a href="{{ ci_route('/') }}" target="_blank" class="logo">
		<span class="logo-mini"><b>{{ strtoupper($setting->sebutan_desa) }}</b></span>
        <span class="logo-lg"><strong>{{ strtoupper($setting->sebutan_desa . ' ' . $desa['nama_desa']) }}</strong></span>
    </a>


    <nav class="navbar navbar-static-top">
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                @if ($is_mobile = $ci->agent->is_mobile())
                    <li class="dropdown notifications-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true"><i class="fa fa-bell"></i></a>
                        <ul class="dropdown-menu">
                            <li>
                                <ul class="menu">
                @endif
                @if ($notif['langganan'] && can('b', 'layanan-pelanggan'))
                    <li>
                        <a href="{{ ci_route('pelanggan') }}">
                            <i class="fa {{ $notif['langganan']['ikon'] }} fa-lg" title="Status Langganan {{ $notif['langganan']['masa'] }} hari" style="color: {{ $notif['langganan']['warna'] }}"></i>&nbsp;
                            @if (!$notif['langganan']['status'] > 2)
                                <span class="badge" id="b_langganan"></span>
                            @endif
                            @if ($is_mobile)
                                <span>Status Langganan</span>
                            @endif
                        </a>
                    </li>
                @endif

                {{-- TODO:: Cek ini kenapa statis --}}
                @if (in_array('343', array_column($modul ?? [], 'id')) && can('b', 'pesan'))
                    <li class="komunikasi-opendk">
                        <a href="{{ ci_route('opendk_pesan.clear') }}">
                            <i class="fa fa-university fa-lg" title="Komunikasi OpenDK"></i>&nbsp;
                            @if ($notif['opendkpesan'])
                                <span class="badge" id="b_opendkpesan">{{ $notif['opendkpesan'] }}</span>
                            @endif
                            @if ($is_mobile)
                                <span>Komunikasi OpenDK</span>
                            @endif
                        </a>
                    </li>
                @endif

                @if (can('b', 'permohonan-surat'))
                    <li>
                        <a href="{{ ci_route('permohonan_surat_admin') }}" title="Cetak Surat">
                            <i class="fa fa-print fa-lg" title="Cetak Surat"></i>&nbsp;
                            @if ($notif['surat'])
                                <span class="badge" id="b_permohonan_surat">{{ $notif['surat'] }}</span>
                            @endif
                            @if ($is_mobile)
                                <span>Cetak Surat</span>
                            @endif
                        </a>
                    </li>
                @endif

                @if (can('b', 'komentar'))
                    <li>
                        <a href="{{ ci_route('komentar') }}" title="Komentar">
                            <i class="fa fa-commenting-o fa-lg"></i>&nbsp;
                            @if ($notif['komentar'])
                                <span class="badge" id="b_komentar">{{ $notif['komentar'] }}</span>
                            @endif
                            @if ($is_mobile)
                                <span>Komentar</span>
                            @endif
                        </a>
                    </li>
                @endif

                @if (can('b', 'kotak-pesan'))
                    <li>
                        <a href="{{ ci_route('mailbox') }}" title="Pesan Masuk">
                            <i class="fa fa-envelope-o fa-lg"></i>&nbsp;
                            @if ($notif['inbox'])
                                <span class="badge" id="b_inbox">{{ $notif['inbox'] }}</span>
                            @endif
                            @if ($is_mobile)
                                <span>Pesan Masuk</span>
                            @endif
                        </a>
                    </li>
                @endif

                @if (can('b', 'buku-tamu'))
                    <li>
                        <a href="{{ ci_route('buku_tamu') }}" title="Buku Tamu">
                            <i class="fa fa-user-circle fa-lg"></i>&nbsp;
                            @if ($notif['buku_tamu'])
                                <span class="badge" id="b_inbox">{{ $notif['buku_tamu'] }}</span>
                            @endif
                            @if ($is_mobile)
                                <span>Buku Tamu</span>
                            @endif
                        </a>
                    </li>
                @endif

                @if (can('b', 'arsip-layanan') && (setting('verifikasi_kades') || setting('verifikasi_sekdes')))
                    <li>
                        <a href="{{ ci_route('keluar.masuk') }}" title="Permohonan Surat">
                            <span><i class="fa fa-bell-o fa-lg"></i>&nbsp;</span>
                            @if ($notif['permohonansurat'])
                                <span class="badge" id="permohonan">{{ $notif['permohonansurat'] }}</span>
                            @endif
                            @if ($is_mobile)
                                <span>Permohonan Surat</span>
                            @endif
                        </a>
                    </li>
                @endif
                @if ($ci->agent->is_mobile())
            </ul>
            </li>
            </ul>
            </li>
            @endif

            <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <img src="{{ AmbilFoto($auth->foto) }}" class="user-image mx-auto" alt="User Image" />
                    <span class="hidden-xs">{{ $auth->nama }}</span>
                </a>
                <ul class="dropdown-menu">
                    <li class="user-header">
                        <img src="{{ AmbilFoto($auth->foto) }}" class="mx-auto img-circle" alt="User Image" />
                        <p style="line-height:85%">
                            <small>Anda Masuk Sebagai</small>
                            <i class="fa fa-heartbeat" style="font-size:14px;color:red"></i> <b style="color:#fcf803;font-size:13px">{{ $auth->nama }}</b> <i class="fa fa-heartbeat" style="font-size:14px;color:red"></i>
                        </p>
                    </li>
                    <li class="user-footer">
                        <div class="pull-left">
                            <a href="<?= site_url('pengguna') ?>" class="btn block bg-blue btn-flat btn-xs"><i class="fa fa-user-circle"></i> Profil</a>
                        </div>
                        <div class="pull-right">
                            <a href="{{ ci_route('siteman.logout') }}" class="btn block bg-maroon btn-flat btn-xs"><i class="fa fa-sign-out"></i> Keluar</a>
                        </div>
                    </li>
                </ul>
            <li>

                <a href="#" data-toggle="control-sidebar" title="Informasi"><i style="margin-top:3px" class="fa fa-question-circle fa-lg"></i></a>
            </li>
            @if ($kategori_pengaturan && can('u', $akses_modul))
                <li>
                    @if ($modul_ini === 'layanan-pelanggan' || $sub_modul_ini === 'layanan-pelanggan')
                        <a href="#" class="atur-token">
                        @else
                            <a href="#" data-remote="false" data-toggle="modal" data-title="Pengaturan {{ ucwords($controller) }}" data-target="#pengaturan">
                    @endif
                    <span><i class="fa fa-gear"></i>&nbsp;</span>
                    </a>
                </li>
            @endif
            </li>
            </ul>
        </div>
 <div id="jam" class="warna_tema_admin" style="font-size:12px;margin:1px;margin-top:5px;padding:5px;width:auto;"></div>
    </nav>
</header>
<script type="text/javascript">
	window.setTimeout("renderDate()",1);
	days = new Array("Minggu","Senin","Selasa","Rabu","Kamis","Jum'at","Sabtu");
	months = new Array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
	function renderDate()
	{
		var mydate = new Date();
		var year = mydate.getYear();
		if (year < 2000)
		{
			if (document.all)
				year = "19" + year;
			else
				year += 1900;
		}
		var day = mydate.getDay();
		var month = mydate.getMonth();
		var daym = mydate.getDate();
		if (daym < 10)
			daym = "0" + daym;
		var hours = mydate.getHours();
		var minutes = mydate.getMinutes();
		var seconds = mydate.getSeconds();
		if (hours <= 9)
			hours = "0" + hours;
		if (minutes <= 9)
			minutes = "0" + minutes;
		if (seconds <= 9)
			seconds = "0" + seconds;
		$('#jam').html(days[day]+", "+daym+" "+months[month]+" "+year+"</b><br>"+hours+" : "+minutes+" : "+seconds);
		setTimeout("renderDate()",1000)
	}
</script>
<style type="text/css">
	#jam {
		text-align:center;
		color: #ffffff;
	}
</style>
