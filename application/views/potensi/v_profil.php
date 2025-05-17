<style media="screen">
.table-bordered{
  border-right: 3px solid black:
}

#profil p{
  text-indent: 40px;
  font-weight: 350;
}
</style>
<section id="get-started" class="padd-section text-center wow fadeInUp">
  <div class="containers">
    <div class="section-title text-center">
      <h2>PROFIL KELURAHAN SIWA</h2>
      <!-- <p class="separator" style="">Berikut data golongan darah warga Kelurahan Siwa.</p> -->
    </div>
    <div class="row">
      <div class="col-md-12 mt-5 text-left" id="profil">
        <h3>Visi</h3>
        <p class="lead text-center" style="text-transform:capitalize;">“MEWUJUDKAN PEMERINTAHAN YANG BAIK PARTISIPATIF DAN PROFESIONAL DALAM PELAYANAN PUBLIK, YANG DI LANDASI FALSAFAH BAHWA HARI ESOK HARUS LEBIH BAIK DARI HARI INI”</p>
        
        <br>
        <h3>Misi</h3>
        <p class="text-justify">Misi merupakan rumusan umum mengenai upaya-upaya yang akan dilaksanakan untuk mewujudkan visi. Misi berfungsi sebagai pemersatu gerak, langkah dan tindakan yang nyata bagi segenap komponen yang penyelenggara pemerintahan tanpa mengabaikan mandat yang diberikannya. Adapun misi pembangunan Kelurahan Siwa untuk kedepan adalah sebagai berikut :</p>
        <ul class="">
          <li>Mewujudkan Pemerintahan yang baik, Partisipatif dan Profesional Dalam Pelayanan.</li>
          <li>Penguatan ekonomi berbasis masyarakat.</li>
          <li>Meningkatkan Partisipasi Masyarakat Dalam Perencanaan dan Pelaksanaan Pembangunan.</li>
          <li>Mewujudkan lingkungan Kelurahan yang Bersih, Sehat, Nyaman, Tertib dan aman.</li>
        </ul><br>
        <!-- <div class="col-md-12 ml-3"> -->
        <h3>Susunan Organisasi dan Tata Kerja Pemerintah Kelurahan Siwa</h3><br>
        <img src="<?=base_url()?>assets/img/strukturorganisasi.png" alt="" style="width:100%;" id="imgsusunan"><br><br>
        <h3>Jumlah Penduduk</h3>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th scope="col">Jumlah Laki-laki</th>
              <th scope="col">Jumlah Perempuan</th>
              <th scope="col">Jumlah Penduduk</th>
              <th scope="col">Jumlah KK</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>2672</td>
              <td>2999</td>
              <td>5668</td>
              <td>1461</td>
            </tr>
          </tbody>
        </table>
        <!-- </div> -->
        <br>
        <h3>Sejarah</h3>
        <p class="text-justify">Sebelum Kelurahan Siwa terbentuk menjadi suatu wilayah tersendiri. Sekitar Tahun 1984, Asal mula Kelurahan Siwa adalah dari pemekaran Desa Batu dengan Kepala Desa H. A. Manginda.Pada tahun 1993 adalah masa persiapan jadi Kelurahan Siwa yang jadi Pemekaran Desa Batu, dan Kelurahan Siwa adalah Bangunan Hibah dari Desa Batu. Wilayah ini hanya mempunyai 3 (tiga) lingkungan yaitu Lingkungan Siwa, Lingkungan Mattugengkeng, dan Lingkungan Tocamming.</p>
       
      </div>
    </div>
  </div>
</section>

<script type="text/javascript">
new Chart(document.getElementById("bar-chart"), {
  type: 'bar',
  data: {
    labels: ["A", "B", "AB", "O","Tidak Tahu"],
    // labels: ["A", "B", "AB", "O", "A-", "B-", "AB-", "O-", "A+", "B+", "AB+", "O+","Belum Diketahui"],
    datasets: [
      {
        // label: "Population (millions)",
        backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
        // backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850","red","teal","skyblue","lime","blue","yellow","green","maroon"],
        data: [2478,5267,734,784,433]
        // data: [2478,5267,734,784,433,290,120,175,734,784,433,290,111]
      }
    ]
  },
  options: {
    legend: { display: false },
    title: {
      display: true,
      text: 'Total Penduduk : 6651'
    }
  }
});
</script>









<!-- <?php //echo form_open_multipart(base_url("surat/isi"),array('class' => 'form-horizontal')); ?>
<textarea name="isiartikel" id="ckeditor" class="ckeditor" rows="8" cols="80"></textarea>
<input type="submit" name="gas" value="Gas">
<?php //echo form_close(); ?>
<script type="text/javascript">
CKEDITOR.disableAutoInline = true;
CKEDITOR.inline = editable;
</script> -->
