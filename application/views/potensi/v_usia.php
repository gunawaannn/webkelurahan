<style media="screen">
  .table-bordered{
    border-right: 3px solid black:
  }
</style>
<section id="get-started" class="padd-section text-center wow fadeInUp">
  <div class="container">
    <div class="section-title text-center">
      <h2>Data Agama</h2>
      <p class="separator" style="">Berikut data agama warga Kelurahan Siwa.</p>
    </div>
    <div class="row">
      <div class="text-center col-md-8 offset-md-2">
        <canvas id="bar-chart" width="800" height="450"></canvas>
      </div>
      <div class="text-center col-md-6 offset-md-3">
        <br>
        <table class="table table-striped table-bordered ">
          <thead>
            <tr>
              <th rowspan="2">Agama</th>
              <th colspan="2" scope="col" width="120">Jumlah</th>
              <th colspan="2" scope="col" width="120">Laki-laki</th>
              <th colspan="2" scope="col" width="120">Perempuan</th>
            </tr>
            <tr>
              <td>n</td>
              <td>%</td>
              <td>n</td>
              <td>%</td>
              <td>n</td>
              <td>%</td>
            </tr>
          </thead>
          <tbody>
            <tr>
              <!-- <td>1</td> -->
              <th scope="col">0-4</th>
              <td>12</td>
              <td>2</td>
              <td>12</td>
              <td>2</td>
              <td>12</td>
              <td>2</td>
            </tr>
            <tr>
              <!-- <td>2</td> -->
              <th scope="col">5-9</th>
              <td>12</td>
              <td>2</td>
              <td>12</td>
              <td>2</td>
              <td>12</td>
              <td>2</td>
            </tr>
            <tr>
              <!-- <td>3</td> -->
              <th scope="col">10-14</th>
              <td>12</td>
              <td>2</td>
              <td>12</td>
              <td>2</td>
              <td>12</td>
              <td>2</td>
            </tr>
            <tr>
              <!-- <td>4</td> -->
              <th scope="col">15-21</th>
              <td>12</td>
              <td>2</td>
              <td>12</td>
              <td>2</td>
              <td>12</td>
              <td>2</td>
            </tr>
            <tr>
              <th scope="col">21-29</th>
              <td>12</td>
              <td>2</td>
              <td>12</td>
              <td>2</td>
              <td>12</td>
              <td>2</td>
            </tr>
            <tr>
              <th scope="col">30-39</th>
              <td>12</td>
              <td>2</td>
              <td>12</td>
              <td>2</td>
              <td>12</td>
              <td>2</td>
            </tr>
            <tr>
              <th scope="col">40-49</th>
              <td>12</td>
              <td>2</td>
              <td>12</td>
              <td>2</td>
              <td>12</td>
              <td>2</td>
            </tr>
            <tr>
              <th scope="col">50-60</th>
              <td>12</td>
              <td>2</td>
              <td>12</td>
              <td>2</td>
              <td>12</td>
              <td>2</td>
            </tr>
            <tr>
              <th scope="col">60+</th>
              <td>12</td>
              <td>2</td>
              <td>12</td>
              <td>2</td>
              <td>12</td>
              <td>2</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</section>

<script type="text/javascript">
new Chart(document.getElementById("bar-chart"), {
  type: 'bar',
  data: {
    labels: ["Islam", "Kristen", "Katolik", "Hindu","Buddha", "Konghucu", "Lainnya"],
    datasets: [
      {
        // label: "Population (millions)",
        backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850","#e8c3b9","#c45850"],
        data: [2478,5267,734,784,433, 849, 392]
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
