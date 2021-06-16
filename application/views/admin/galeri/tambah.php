<?php
// Error warning
echo validation_errors('<div class="alert alert-danger">', '</div>');

// error upload
if (isset($error_upload)) {
    echo '<div class="alert alert-danger">' . $error_upload . '</div>';
}

// Attribut
$attribut = 'class="alert alert-info"';
// Form open
echo form_open_multipart(base_url('admin/galeri/tambah'), $attribut);

?>
<div class="col-md-8">
    <div class="form-group form-group-lg">
        <label>Judul Galeri</label>
        <input type="text" name="judul_galeri" class="form-control" placeholder="Judul Galeri" value="<?php echo set_value('judul_galeri') ?>" required>
    </div>
</div>
<div class="col-md-4">
    <div class="form-group form-group-lg">
        <label>Posisi Galeri</label>
        <select name="posisi_galeri" class="form-control">
            <option value="Galeri">Galeri</option>
            <option value="Homepage">Homepage Silder</option>
        </select>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group">
        <label>Link/URL Galeri </label>
        <input type="url" name="website" class="form-control" placeholder="<?php echo base_url() ?>" value="<?php echo set_value('webiste') ?>" required>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group">
        <label>Upload Gambar</label>
        <input type="file" name="gambar" class="form-control" required>
    </div>
</div>

<div class="col-md-12">
    <div class="form-group">
        <label>Isi Galeri</label>
        <textarea name="isi_galeri" class="form-control tinymce" placeholder="Isi Galeri"><?php echo set_value('isi_galeri') ?></textarea>
    </div>

    <div class="form-group text-right">
        <button type="submit" name="submit" class="btn btn-success btn-lg">Simpan</button>
        <button type="reset" name="reset" class="btn btn-danger btn-lg">Reset</button>
    </div>
</div>


<div class="clearfix"></div>
<?php
// Form close
echo form_close();
?>