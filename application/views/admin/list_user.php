<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">List User</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data User</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID User</th>
                            <th>Nama Depan</th>
                            <th>Nama Belakang</th>
                            <th>E-Mail</th>
                            <th>Alamat</th>
                            <th>Kota</th>
                            <th>Provinsi</th>
                            <th>Role ID</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach($user as $row){
                                echo '
                                    <tr>
                                        <td>'. $row['user_id'] .'</td>
                                        <td>'. $row['first_name'] .'</td>
                                        <td>'. $row['last_name'] .'</td>
                                        <td>'. $row['email'] .'</td>
                                        <td>'. $row['alamat'] .'</td>
                                        <td>'. $row['kota'] .'</td>
                                        <td>'. $row['provinsi'] .'</td>
                                        <td>'. $row['role_id'] .'</td>
                                    </tr>
                                ';
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>