<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Data Mahasiswa</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Mahasiswa</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <div class="content">
      <div class="container">
        <?php echo $this->session->flashdata('message'); ?>
      <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus">Tambah data mahasiswa</i></button>
        
        <a href="<?php echo base_url('mahasiswa/print'); ?>" class="btn btn-danger " ><i class="fa fa-print"></i> Print</a>

        <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i class="fa fa-download"></i>
          Export
          <span class="caret"></span>
        </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <li><a href="<?php echo base_url('mahasiswa/pdf'); ?>" class="btn"  ><i class="fa fa-file"></i> PDF</a></li>
            <li><a href="<?php echo base_url('mahasiswa/excel'); ?>" class="btn" id="print" ><i class="fa fa-file"></i> EXCEL</a></li>
          </ul>
        <nav class="navbar navbar-light bg-light navbar-right" style="float: right;">
          <div class="form-inline" >
            <?php echo form_open('mahasiswa/search')?>
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="keyword ">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            <?php echo form_close()?>
          </div>
          
        </nav>
      </div>
        
        
        

        <table class="table">
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Tanggal Lahir</th>
                <th>Jurusan</th>
                <th colspan="3" >Opt</th>
            </tr>

            <?php
            $no = 1;
            foreach($mahasiswa as $mhs):
            ?>
            <tr>
                <td><?php echo $no++ ;?></td>
                <td><?php echo $mhs->nama ;?></td>
                <td><?php echo $mhs->nim ;?></td>
                <td><?php echo $mhs->tgl_lahir ;?></td>
                <td><?php echo $mhs->jurusan ;?></td>
                <td><?php echo anchor('mahasiswa/detail/'. $mhs->id,'<div class="btn btn-success btn-sm"><i class="fa fa-search-plus"></i></div>'); ?></td>
                <td onclick="return confirm('Konfirmasi');"><?php echo anchor('mahasiswa/hapus/'. $mhs->id,'<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>'); ?></td>
                <td><?php echo anchor('mahasiswa/edit/'. $mhs->id,'<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>'); ?></td>
            </tr>
            <?php endforeach; ?>
        </table>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Input Mahasiswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php echo form_open_multipart("mahasiswa/tambah_aksi") ;?>
                    <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" name="nama" id="" class="form-control">

                        <label for="">Nim</label>
                        <input type="text" name="nim" id="" class="form-control">

                        <label for="">Tanggal Lahir</label>
                        <input type="date" name="tgl_lahir" id="" class="form-control">

                        <label for="">Jurusan</label> <br>
                        <select name="jurusan" id="">
                            <option>Rekayasa perangkat lunak</option>
                            <option>teknik komputer dan jaringan</option>
                            <option>Multimedia</option>
                            <option>Peksos</option>
                            <option>Broadcasting</option>
                        </select>
                        <br>
                        <label for="">Alamat</label>
                        <input type="text" name="alamat" id="" class="form-control">

                        <label for="">Email</label>
                        <input type="text" name="email" id="" class="form-control">

                        <label for="">No. Telpon</label>
                        <input type="text" name="no_telp" id="" class="form-control">

                        <label for="">Upload Foto</label>
                        <input type="file" name="foto" id="" class="form-control">
                   
                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                <?php echo form_close(); ?>
            </div>
            
            </div>
        </div>
        </div>
    </div>
</div>


