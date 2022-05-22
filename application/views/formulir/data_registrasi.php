

      <!-- Main Content -->
      <div class="container" >
        <section class="section" >
          <div class="section-header" style="background-color: SteelBlue;">
            <h1>Data Formulir</h1>
          </div>
          <a href="<?php echo base_url('register')?>" class="btn btn-info mb-3">Tambah Data</a>

     
           <table class="table table-striped" style="margin-bottom: 100px; border-top: 2px solid blue; border-top: 2px solid blue; border-right: 2px solid blue; border-left: 2px solid blue;">
           <?php echo $this->session->flashdata('pesan')?>
            <thead>
             <?php
                $no = 1;
                foreach($mahasiswa as $mhs) :?>
             <tr>
               <th>No</th>
               <td><?php echo $no++?></td>
             </tr>
             <tr>
               <th>nama</th>
               <td><?php echo $mhs->nama?></td>
             </tr>
             <tr>
               <th>universitas</th>
               <td><?php echo $mhs->universitas?></td>
             </tr>
             <tr>
               <th>nim</th>
               <td><?php echo $mhs->nim?></td>
             </tr>
             <tr>
               <th>Tempat Lahir</th>
               <td><?php echo $mhs->tempat_lahir?></td>
             </tr>
             <tr>
               <th>Tanggal Lahir</th>
               <td><?php echo $mhs->tanggal_lahir?></td>
             </tr>
             <tr>
               <th>jurusan</th>
               <td><?php echo $mhs->jurusan?></td>
             </tr>
             <tr>
               <th>Alamat</th>
               <td><?php echo $mhs->alamat?></td>
             </tr>

             <tr>
               <th>Jenis Kelamin</th>
               <td><?php echo $mhs->gender?></td>
             </tr>

             <tr>
               <th>No Telepon</th>
               <td><?php echo $mhs->no_telepon?></td>
             </tr>

             <tr style="margin-bottom: 100px; border-bottom: 2px solid red;">
               <th>No KTP</th>
               <td><?php echo $mhs->no_ktp?></td>
             </tr>
             <?php endforeach;?>
                </thead>

          </table>
        </section>
      </div>