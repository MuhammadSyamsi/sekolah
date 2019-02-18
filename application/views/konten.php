<div class="welcomebg">
    <div class='container konten'>
<div class="col-lg-6" style="margin-bottom:20px;color:white;padding-top:20%;">
    <h1><b>Baca Komik<br/>Terbaru Kami</b></h1>
    <section class="color-1">
		<p><a href="komik" role='button' class="btn btn-1 btn-1a">Di sini</a></p>
	</section> 
</div>

<div class="col-lg-6" style="margin-bottom:20px;">
<img class="comic" src="<?php echo base_url('asset/img/1-01.jpg') ?>" alt="comic">
</div>
</div>
</div>
<div class="container">
<div class="col-lg-12" style="background-color:#ccc; border-radius:5px; box-shadow: 2px 4px 8px 1px #888888">
    <p class="judul">LPK Multimedia</p>
    <div class="pin_a">     
    </div>
    <div class="col-lg-11 artikel" style="margin-bottom:40px;">
    <p style="font-size:20px;"><b>LPK adalah singkatan dari Lembaga Pelatihan Kursus.</b></p><hr/>
    Di zaman yang semakin banyak persaingan dalam dunia pendidikan maupun industri ini <b>SMA Ma’arif NU Pandaan</b> semakin menegaskan langkahnya dalam membentuk lulusan yang siap bersaing baik dalam dunia akademik ataupun dunia industri. Salah satu bentuk langkah nyata dalam menyiapkan lulusannya dalam dunia industri adalah dengan dibentuknya sebuah <b>Lembaga Pelatiahan Kursus.</b> Dengan adanya <b>Lembaga Pelatihan Kursus</b> ini diharapakan para siswanya mendapat jam terbang lebih dalam memperoleh dan mengimplementasikan ketrampilan yang sesuai dengan bakat/ minat mereka. Ketrampilan itulah yang nantinya diharapkan menjadi bekal bagi siswa agar setelah lulus dari <b>SMA Ma’arif NU Pandaan</b> dapat digunakan untuk bersaing dalam dunia industri, bahkan wirausaha.
    </div>
    <div class="pin_b">     
    </div>
    <div class="col-lg-11 artikel" style="margin-bottom:20px;">
    <p style="font-size:20px;"><b>Multiemdia adalah salah satu bidang yang mulai banyak dilirik di dunia industri kreatif.</b></p><hr/>
    Mulai dari desainer poster untuk keperluan cetak maupun digital, hingga editing video sebagai sarana promosi/ penarik perhatian dari setiap produk/ jasa. <b>Multimedia</b> juga masuk dalam salah satu bidang yang dikuruskan pada <b>LPK</b> di <b>SMA Ma’arif NU Pandaan (SMARIFDA).</b> Dengan adanya kursus <b>Multimedia</b> ini diharapkan siswa-siswa <b>SMARIFDA</b> dapat memperoleh banyak jam terbang dalam menekuni bidang ini. Dengan banyaknya jam kursus yang diberikan, diharapkan siswa-siswa <b>SMARIFDA</b> mampu memenuhi kompetensi dasar keterampilan yang ada pada bidang <b>Multimedia</b> ini.
    </div>
    </div>
</div>

		<script src="<?php echo base_url('asset/js/classie.js') ?>"></script>
		<script>
			var buttons7Click = Array.prototype.slice.call( document.querySelectorAll( '#btn-click button' ) ),
				buttons9Click = Array.prototype.slice.call( document.querySelectorAll( 'button.btn-8g' ) ),
				totalButtons7Click = buttons7Click.length,
				totalButtons9Click = buttons9Click.length;

			buttons7Click.forEach( function( el, i ) { el.addEventListener( 'click', activate, false ); } );
			buttons9Click.forEach( function( el, i ) { el.addEventListener( 'click', activate, false ); } );

			function activate() {
				var self = this, activatedClass = 'btn-activated';

				if( classie.has( this, 'btn-7h' ) ) {
					// if it is the first of the two btn-7h then activatedClass = 'btn-error';
					// if it is the second then activatedClass = 'btn-success'
					activatedClass = buttons7Click.indexOf( this ) === totalButtons7Click-2 ? 'btn-error' : 'btn-success';
				}
				else if( classie.has( this, 'btn-8g' ) ) {
					// if it is the first of the two btn-8g then activatedClass = 'btn-success3d';
					// if it is the second then activatedClass = 'btn-error3d'
					activatedClass = buttons9Click.indexOf( this ) === totalButtons9Click-2 ? 'btn-success3d' : 'btn-error3d';
				}

				if( !classie.has( this, activatedClass ) ) {
					classie.add( this, activatedClass );
					setTimeout( function() { classie.remove( self, activatedClass ) }, 1000 );
				}
			}

			document.querySelector( '.btn-7i' ).addEventListener( 'click', function() {
				classie.add( document.querySelector( '#trash-effect' ), 'trash-effect-active' );
			}, false );
		</script>

