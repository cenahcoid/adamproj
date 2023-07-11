<script>
    $(document).ready(function() {
        $('#table').DataTable({
            ajax: {
                url: '<?= base_url('member/read') ?>',
                dataSrc: function(response) {
                    return response.data;
                }
            },
            columns: [{
                    data: 'id'
                },
                {
                    data: 'kode_member'
                },
                {
                    data: 'nama'
                },
                {
                    data: 'email'
                },
                {
                    data: 'alamat'
                },
                {
                    data: 'null',
                    render: function(data, type, row) {
                        return '<button onclick="hapus(' + row.id + ')" class="btn btn-danger">Delete</button>';
                    }
                },
            ]
        });
    });

    function hapus(id) {
        var tanya = confirm("Apakah Anda Yakin Ingin Menghapus Ini?")
        if (tanya) {
            $.ajax({
                url: '<?= base_url('member/hapus') ?>',
                method: 'POST',
                data: {
                    id: id
                },
                success: function(response) {
                    if (response.success) {
                        $(this).closest('.item').remove();
                    } else {
                        alert('Gagal menghapus data.');
                    }
                },
                error: function() {
                    alert('Terjadi kesalahan saat menghubungi server.');
                }
            });
        }
    }
</script>