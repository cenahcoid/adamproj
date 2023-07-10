<script>
    $('#oke').on('click', function() {
        // Dapatkan nilai-nilai data dari formulir atau elemen lainnya
        var data = {
            kode_buku: $('#kd').val(),
            judul: $('#jdl').val(),
            deskripsi: $('#dks').val(),
            penulis: $('#pnl').val(),
            penerbit: $('#pnt').val(),
            jenis_buku: $('#jns').val(),
            jumlah: $('#jmh').val(),
            harga: $('#hrg').val()
        };

        // Lakukan permintaan Ajax
        $.ajax({
            url: '<?= base_url('buku/tambah') ?>', // Ganti dengan URL yang sesuai untuk aksi tambah data
            method: 'POST', // Sesuaikan dengan metode HTTP yang benar
            data: data,
            success: function(response) {
                // Tangani respons dari server setelah data ditambahkan
                // Misalnya, perbarui tampilan data atau tampilkan pesan sukses
                console.log('Data berhasil ditambahkan!');
            },
            error: function(xhr, status, error) {
                // Tangani kesalahan jika ada
                console.error('Terjadi kesalahan:', error);
            }
        });
    });
</script>