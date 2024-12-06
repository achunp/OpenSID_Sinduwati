<!-- HELP BUTTON -->
<style>
.help-button-wrapper {
  position: fixed;
  bottom: 1em;
  left: 0em;
  right:0em;
  text-align: center;
}
.help-button {
  height: 3em;
  width: 3em;
  font-size: 12px;
  border-radius: 50%;
  border: 0 none;
  background: #72ab59;
  color: #fff;
  cursor: pointer;
  box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.26);
  transform: scale(1);
  transition: all 200ms ease;
}
.help-button:hover,
.help-button:focus,
.help-button:active {
  box-shadow: 0 8px 17px 0 rgba(0, 0, 0, 0.2);
  outline: 0;
}
.help-button span {
  display: block;
  font-size: 2em;
  transform: scale(1);
  transition: transform 100ms ease;
}
.help-button:hover span,
.expanded .help-button span,
.expanded .help-button span {
  transform: scale(1.25);
}
.expanded .help-button {
  transform: scale(0.5);
  color: rgba(255, 255, 255, 0.5);
  background: #ffaa00;
}
.help-list {
  list-style: none;
  padding: 0;
  margin: 0;
  transition: all 200ms ease;
  transform: translate(0, 90px) scale(0.5);
  transform-origin: bottom center;
  opacity: 0;
}
.expanded .help-list {
  transform: translate(0px, 20px) scale(1);
  opacity: 1;
}
.help-list li {
  margin-bottom: 1em;
}
.help-list a {
  color: white;
  background-color:#3195e0;
  padding:5px;
  border-radius:10px;
}
    
</style>

<style>
#myBtn {
  display: inline-block;
  position: fixed;
  bottom: 40px;
  right: 50px;
  z-index: 99;
  border: none;
  outline: none;
  background-color: #FF9800;
  color: #1549a3;
  cursor: pointer;
  padding:2px;
  border-radius: 50%;
  height:22px;
  width:22px;
   transition: background-color .3s, 
    opacity .5s, visibility .5s;
}

html {
  scroll-behavior: smooth;
  focus:scroll-auto;
}

#myBtn:hover {
  background-color: #3c8dbc;
  color:white;
  outline-style: outset;
  outline-color: #FF9800;
}
</style>
<button onclick="topFunction()" id="myBtn" title="Kembali ke Atas"><i style="font-size:16px" class="fa mr-auto">&#xf102;</i></button>

<script>
// Get the button
let mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>
<!--
<div class="help-button-wrapper">
  <ul class="help-list button-sm">
    <li><a href="https://panduan.opendesa.id/opensid" target="_blank">Panduan OpenSID Online</a>
    </li>
    <li><a href="https://github.com/opensid/opensid/wiki" target="_blank">Panduan OpenSID Wiki</a></li>
    <li><a href="https://www.youtube.com/playlist?list=PLrjg2CGJwZnA8tf9T60hSqh7ypB0xB9OT" target="_blank">Tutorial Video</a></li>
    <li><a href="https://api.whatsapp.com/send?phone=6282266489462&text=Mohon%20bantuan%20terkait%20website%20Desa" target="_blank">Bantuan Teknis</a></li>
  </ul>

  <button class="help-button">
    <span><i style="font-size:14px;margin-left:0px" class="fa">&#xf2bd;</i></span>
    Help
  </button>
</div>
 --> 

<script>
$(".help-button").on("click", function() {
  $(".help-button-wrapper").toggleClass("expanded");
});
    
</script>
<footer class="main-footer">
    <div class="pull-right hidden-xs">
        &copy; <?php echo date("Y") . ' Pemerintah ' . ucwords($setting->sebutan_desa . ' ' . $desa['nama_desa']) ;?>
    </div>
    <strong>Aplikasi <a href="https://github.com/OpenSID/OpenSID" target="_blank">
            <?= config_item('nama_aplikasi') ?></a> <a href="https://github.com/OpenSID/OpenSID/releases/" class="warna_tema_admin" target="_blank">{{ AmbilVersi() }} </a>
            | <a href="https://www.facebook.com/groups/OpenSID/" style="color: #616160" target="_blank">Komunitas <?= config_item('nama_aplikasi') ?></a></strong>
</footer>
