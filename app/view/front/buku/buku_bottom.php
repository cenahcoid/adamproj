<script>
    $(document).ready(function(){
        $('#table').DataTable({
            ajax: {
                url: '<?= base_url('buku/read') ?>',
                dataSrc: function(response){
                    return response.data;
                }
            },
            columns: [
                {data: 'id'},
                {data: 'kode_buku'},
                {data: 'judul'},
                {data: 'deskripsi'},
                {data: 'penulis'},
                {data: 'penerbit'},
                {data: 'jenis_buku'},
                {data: 'jumlah'},
                {data: 'harga'},
            ]
        })
    })
</script>