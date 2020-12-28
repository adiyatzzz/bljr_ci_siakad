<div class="content-wrapper">
    <section class="content">

        <?php foreach($mahasiswa as $mhs): ?>
        <form action="<?php echo base_url().'mahasiswa/update' ?>" method="post">
            <div class="form-group">
                <input type="hidden" name="id" value="<?php echo $mhs->id; ?>">
                <label for="">Nama</label>
                <input type="text" name="nama" id="" class="form-control"  value="<?php echo $mhs->nama; ?>">

                <label for="">NIM</label>
                <input type="text" name="nim" id="" class="form-control"  value="<?php echo $mhs->nim; ?>">
                
                <label for="">tanggal Lahir</label>
                <input type="date" name="tgl_lahir" id="" class="form-control"  value="<?php echo $mhs->tgl_lahir; ?>">

                <label for="">Jurusan</label> <br>
                <select name="jurusan" id="" value="<?php echo $mhs->jurusan; ?>">
                    <option>Rekayasa perangkat lunak</option>
                    <option>teknik komputer dan jaringan</option>
                    <option>Multimedia</option>
                    <option>Peksos</option>
                    <option>Broadcasting</option>
                </select>
                <br>
                <label for="">Alamat</label>
                <input type="text" name="alamat" id="" class="form-control" value="<?php echo $mhs->alamat; ?>">

                <label for="">Email</label>
                <input type="text" name="email" id="" class="form-control" value="<?php echo $mhs->email; ?>">

                <label for="">No. Telpon</label>
                <input type="text" name="no_telp" id="" class="form-control" value="<?php echo $mhs->no_telp; ?>">

                <br>
                <button type="reset" class="btn btn-danger">Reset</button>
                <button type="submit" class="btn btn-primary">Save Change</button>
            </div>
        </form>
        <?php endforeach; ?>

    </section>
</div>